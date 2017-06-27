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

	// start the filtering process
	//echo 'test';
	$eliminate = array(
		'name' => FILTER_SANITIZE_STRING,
		'lastName' => FILTER_SANITIZE_STRING,
		'mail' => FILTER_VALIDATE_EMAIL,
		'country' => FILTER_SANITIZE_STRING,
		'tel' => FILTER_VALIDATE_INT,
		'message' => FILTER_SANITIZE_SPECIAL_CHARS);


	//input_post will perfom the filtering process
	$result =  filter_input_array (INPUT_POST, $eliminate);
	// array + field + pre filtered value
	foreach($eliminate as $key => $value){
		//get the filtered array 
		$result[$key] = trim($result[$key]); 

	}

		}



?>