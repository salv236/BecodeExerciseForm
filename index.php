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

	    <!--Debut de formulaire - partie 1-->

	    <form method="post" action="traitement.php">
			<fieldset>
		   		<legend>Customer Details</legend>

		   		<div class="row">
					
		   			<div class="col-md-12 indent-left "> 

		   			<label for="name"> Your name </label>
					<input type="text" name="name" id="name" required aria-required="true">

					<label for="lastName"> Last Name </label>
				          <input type="text" name="lastName" id="lastName" required aria-required="true">

		   			</div>

		   		</div> <!--row-->

		   		<div class="row"> 

		   			<div class="col-md-12 indent-left">
					
					<label for="customerNumber"> Customer number </label>
				   	  <input type="number" name="customerNumber" id="customerNumber">
				          <label for="productId"> Product Id </label>
				          <input type="number" name="productId" id="productId" >
		   			</div>	

		   		</div>

				<div class="row"> 

				<div class="col-md-12 indent-left">

		   		<label for="mail">Email</label>
			          <input type="email" id="mail" name="mail" required aria-required="true">
			          <label for="country">Country</label>
		   	  		  <input type="text" name="country" id="country" required aria-required="true">

		   	    </div>

		   	  </div> <!--row-->

		   	  <div class="row"> 

				<div class="col-md-12 indent-left">

		   		<label for="tel">Tel</label>
					   <input type="tel" name="tel" id="tel" required aria-required="true">

		   	    </div>

		   	  </div> <!--row-->

		   	  <div class="row"> 

				<div class="col-md-12 indent-left indent-top">

		   				<input type="radio" id="genderM" name="	gender" value="Male" checked><label for="genderM"> Male</label>
				        <input type="radio" id="genderF" name="gender" value="Female"> <label for="genderF">Female </label>

		   	    </div>

		   	  </div> <!--row-->
		 
			</fieldset>
			
			<!--Debut de formulaire - partie 2-->

			<fieldset>
			    <legend id="complaint">Reason for complaint </legend>
				<table class="table">
				   <tr>
				      	<td><label for="date"> Date </label></td>
				     	<td><input type="date" name="date" id="date" required aria-required="true"></td>
			    	   </tr>
				   <tr>
					<td><label for="subject"> Subject </label></td>
					<td>
					    <select id="subject" name="subject">
						<option value="hardware">Hardware</option>
						<option value="software">Software</option>
						<option value="delivery">Delivery</option>
						<option value="other" > Other</option>
					    </select>  
					</td>
				    </tr>
			            <tr>
				 	<td><label>Message</label></td>
				        <td><textarea rows="4" cols="60" name="message" required aria-required="true" >Your message</textarea></td>
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
