
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UFT-8">
		<link rel="stylesheet" href="assets/css/bootstrap.css">
		<link rel="stylesheet" href="assets/css/style.css" />
		<title>Technical support Hackers poulette</title>
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
		
		if (isset($_POST['mail'])) 
		{ 
			$_POST['mail'] = htmlspecialchars($_POST['mail']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer

									  // { Minium caractère, Maximum caractère }	
    			    	if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['mail'])) 
				{
       				 $mail = $_POST['mail'];
				}

    				else
   				{

        			$mail = "Your adress mail is incorrect";
				}

		}

	
		$validate = $_POST['submit'];
		$name = htmlspecialchars($_POST['name']);
		$lastname = htmlspecialchars($_POST['lastName']);
		$country = htmlspecialchars($_POST['country']);
		$tel = htmlspecialchars($_POST['tel']);
		$productId = htmlspecialchars($_POST["productId"]);
		$customerNumber = htmlspecialchars($_POST["customerNumber"]);
		$gender = $_POST["gender"];
		$date = htmlspecialchars($_POST["date"]);
		$message = htmlspecialchars($_POST["message"]);
		$subject = $_POST["subject"];

		$additionNumber = 2;
		$additionNumber2 = 14;
		$totaladdition = $additionNumber + $additionNumber2;


		print_r(" Hello " . $name . "<br />");
		echo "you name is " . $name ."<br>";
		echo "you lastname is " . $lastname ."<br>";
		echo "mail : " . $mail ."<br>";
		echo "you country is " . $country ."<br>";
		echo "you tel no: is " . $tel . "<br>";
		echo "Product ID :" . $productId . "<br >";
		echo "Customer Number :" . $customerNumber . "<br >";
		echo "Date :" . $date . "<br />";
		echo "Subject :" . $subject ."<br />"; 
		echo "Message :" . $message . " <br />";
		echo "Your gender:" . $gender . "<br />";

	
		echo  "Your number of complaints " . $totaladdition . " <br />";	


		?> 
		
		<!-- Ici se termine le php -->
	</main>

    		<script src="assets/js/jquery-3.2.1.min.js"></script>
   	       <script src="assets/js/bootstrap.js"></script>
  		</div> <!--container-->
</body>
</html>
