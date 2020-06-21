<?php


session_start();


if(isset($_POST['submit'])){


   require 'config.php';


   $insertOneResult = $collection->insertOne([
		'ISBN' => $_POST['ISBN'],
       'title' => $_POST['title'],
	   'author' => $_POST['author'],
	   'description' => $_POST['description'],
	   'pub_date' => $_POST['pub_date'],
   ]);


   $_SESSION['success'] = "Book added successfully";
   header("Location: index.php");
}


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Add new book - Book Store</title>
<link rel="stylesheet" type="text/css" href="css/view.css" media="all">
<script type="text/javascript" src="js/view.js"></script>

</head>
<body id="main_body" >
	
	<img id="top" src="img/top.png" alt="">
	<div id="form_container">
	
		<h1><a>Add new book - Book Store</a></h1>
		<form id="form_115199" class="appnitro"  method="post" action="add">
					<div class="form_description">
			<h2>Add new book - Book Store</h2>
			<p>Add new books here</p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">ISBN </label>
		<div>
			<input id="element_1" name="ISBN" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Book Title </label>
		<div>
			<input id="element_2" name="title" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3">Author </label>
		<div>
			<input id="element_3" name="author" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_4" >
		<label class="description" for="element_4">Published Date </label>
		<div>
			<input id="element_4" name="pub_date" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_5" >
		<label class="description" for="element_5">Description </label>
		<div>
			<textarea id="element_5" name="description" class="element text medium" value="" rows="5"> 
			</textarea>
		</div> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="115199" />
			    <div class="row">
					<div class="col">
					<hr id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
					</div>
				</div>
				
		</li>
			</ul>
		</form>	
		
	</div>
	<img id="bottom" src="img/bottom.png" alt="">
	</body>
</html>