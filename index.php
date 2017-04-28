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

	    <!--Debut de formulaire - partie 1-->

	    <form method="post" action="traitement.php">
			<fieldset>
		   		<legend>Customer Details</legend>
		    
		      	<table class="table" id="noborder">
					<tr>
					  <td><label for="name"> Your name </label></td>
				   	  <td><input type="text" name="name" id="name" required></td>
					  <td><label for="lastName"> Last Name </label></td>
				          <td><input type="text" name="lastName" id="lastName" required></td>
					</tr>
					<tr>
				          <td><label for="customerNumber"> Customer number </label></td>
				   	  <td><input type="number" name="customerNumber" id="customerNumber" ></td>
				          <td><label for="productId"> Product Id </label></td>
				          <td><input type="number" name="productId" id="productId" ></td>
					</tr>
			        <tr>
			          <td> <label for="mail">Email</label></td>
			          <td> <input type="email" id="mail" name="mail" required></td>
			          <td><label for="country">Country</label></td>
		   	  		  <td> <input type="text" name="country" id="country" required></td>
					</tr>
					<tr>
					   <td><label for="tel">Tel</label></td>
					   <td><input type="tel" name="tel" id="tel" required></td>
				   	   <td><input type="radio" id="genderM" name="gender" value="Male" checked><label for="genderM"> Male</label></td>
				        <td><input type="radio" id="genderF" name="gender" value="Female"> <label for="genderF">Female </label></td>
					</tr>
		    	</table>
		 
			</fieldset>
			
			<!--Debut de formulaire - partie 2-->

			<fieldset>
			    <legend>Reason for complaint </legend>
				<table class="table">
				   <tr>
				      	<td><label for="date"> Date </label></td>
				     	<td><input type="date" name="date" id="date" required></td>
			    	   </tr>
				   <tr>
					<td><label for="subject"> Subject </label></td>
					<td>
					    <select id="subject">
						<option value="hardware">Hardware</option>
						<option value="software">Software</option>
						<option value="delivery">Delivery</option>
						<option value="other" > Other</option>
					    </select>  
					</td>
				    </tr>
			            <tr>
				 	<td><label>Message</label></td>
				        <td><textarea rows="4" cols="60">Your message</textarea></td>
				    </tr>
				</table>
			    <input type="submit" name="submit" value="send" >
			</fieldset> 

	
    	</form>	

    	<!--fin du formulaire-->

    	</main>

    		<script src="assets/js/jquery-3.2.1.min.js"></script>
   			<script src="assets/js/bootstrap.js"></script>
  		</div> <!--container-->
</body>
</html>