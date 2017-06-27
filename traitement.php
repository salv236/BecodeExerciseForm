
<?php include 'includes/sanitize.php' ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="assets/css/bootstrap.css">
		<link rel="stylesheet" href="assets/css/style.css" />
		<title>Technical support Hackers poulette</title>
		<!--[if lt IE 9]>
	  		<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	  		<![endif]-->
	</head>
	<body>
  		<div class="container">

	    <header class="text-center"><a href="#"> <img class="pull-left" src="assets/img/logo.png" alt="Logo Hackers poulette"/></a>
			
			<div class="main-header">
	    		<h1>Technical support Hackers poulette</h1>
	     		<p>How can we improve your experience</p>
	     	</div>

	    </header>

	<main class="form-container">

		<!-- Ici commence le php -->

		<?php

		echo(" Hello " . $result['name'] . "<br />");
		echo "you name is " . $result['name']."<br>";
		echo "you lastname is " . $result['lastName'] ."<br>";
		echo "mail : " . $result['mail'] ."<br>";
		echo "you country is " . $result['country'] ."<br>";
		echo "you tel no: is " . $result['tel'] . "<br>";
		//echo "Product ID :" . $productId . "<br >";
		//echo "Customer Number :" . $customerNumber . "<br >";
		//echo "Date :" . $date . "<br />"; 
		echo "Message :" . $result['message']. " <br />";
		//echo "Your gender:" . $gender . "<br />";


		?> 
		
		<!-- Ici se termine le php -->
	</main>

    		<script src="assets/js/jquery-3.2.1.min.js"></script>
   	       <script src="assets/js/bootstrap.js"></script>
  		</div> <!--container-->
</body>
</html>
