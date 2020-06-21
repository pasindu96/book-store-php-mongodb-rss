<?php
   session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Book Store</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script type="text/javascript" src="js/view.js"></script>

</head>
<body id="main_body" style="background-color: #04f">
	
	<div class="container mt-5 text-center shadow pt-5 pl-3 pr-3 pb-5" style="background-color:white;" >
		<h1> Book Store - Matara </h1>
		<hr>
		<div class="row">
			<div class="col-md-3 sm-12">
				<p style="line-height:24px;"> Get Data from RSS Feed </p> 
			</div>
			<div class="col-md-6">
				<input type="text" placeholder="Enter RSS Link" style="width:80%;"> 
			</div>
			<div class="col-md-3">
				<button class="btn btn-md btn-primary"> Update Database</button>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-9 sm-12">	
			</div>

			<div class="col-md-3" style="text-alighn:right;">
			<a class="btn btn-md btn-success"> Refresh </a>
			<a class="btn btn-md btn-primary" href="add_book.php"> Add New Book </a>
			</div>
		</div>
		<hr>

		<?php


			if(isset($_SESSION['success'])){
				echo "<div class='alert alert-success'>".$_SESSION['success']."</div>";
			}


		?>


		<table class="table table-borderd">
		<tr>
			<th>ISBN</th>
			<th>Title</th>
			<th>Author</th>
			<th>Description</th>
			<th>Published Date</th>
			<th>Action</th>
		</tr>
		<?php

			require('config.php');

			$books = $collection->find();


			foreach($books as $book) {
				echo "<tr>";
				echo "<td>".$book->ISBN."</td>";
				echo "<td>".$book->title."</td>";
				echo "<td>".$book->author."</td>";
				echo "<td>".$book->description."</td>";
				echo "<td>".$book->pub_date."</td>";
				echo "<td>";
				echo "<a href='edit_book.php?id=".$book->_id."' class='btn btn-primary'>Edit</a>";
				echo "<a href='remove_book.php?id=".$book->_id."' class='btn btn-danger'>Delete</a>";
				echo "</td>";
				echo "</tr>";
			};


		?>
		</table>

	</div>


	</body>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>