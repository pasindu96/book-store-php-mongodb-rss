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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<script type="text/javascript" src="js/view.js"></script>

</head>
<body id="main_body" style="background-color: #04f">
	
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
			    <div class="row container-flui text-center" >
					<div style="margin:0 auto;">
					<button id="saveForm" class="btn btn-md btn-primary" type="submit" name="submit" style="margin-right:8px;"> Submit </button>
					<a class="btn btn-md btn-success" href="index.php">Go Back</a>
					</div>
				</div>
				
		</li>
			</ul>
		</form>	
		
	</div>
	<img id="bottom" src="img/bottom.png" alt="">
	</body>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>