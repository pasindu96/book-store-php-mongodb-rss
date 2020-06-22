        <?php
			session_start();

	//		if(isset($_POST['submit'])){

				require 'config.php';

				$url=$_POST['url']; 
				// "http://www.sportingnews.com/us/rss";
				//http://www.adaderana.lk/rss.php
				//http://srilankamirror.com/news?format=feed&type=rss
				$invalidurl=false;
				$feeds='';
				if(@simplexml_load_file($url)){
					$feeds=simplexml_load_file($url);
				}else{
					$invalidurl= true;
					echo '<script language="javascript">';
					echo 'alert("Invalid URL!")';
					echo '</script>';

				}
				echo "<pre>";
				//print_r($feeds);
				//die;
				$i=1;
				if(!empty($feeds)){
					foreach($feeds->channel->item as $item){
						echo $i;
						$insertOneResult = $collection->insertOne([
						'ISBN' => $i+1100,
						'title' => (string)$item->title[0],
						'author' =>  (string)$item->author[0],
						'description' =>  (string)$item->description[0],
						'pub_date' => (string) $item->pubDate[0],
					]);
						$i++;
					}
				} else {
					echo '<script language="javascript">';
					echo 'alert("No Rss Feed")';
					echo '</script>';
				}
                $_SESSION['success'] = "RSS Books added successfully";
                header("Location: index.php");
	//		}

		?>