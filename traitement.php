<? 

/* 

1. create a variable called validate with $POST submit 
2. create a variable for  $name each required field  $post ["name"]
3. create a variable $lastname for each required field  $post ["lastName"]
4. create a variable $mail for each required field  $post ["mail"]
5.create a variable $country for each required field  $post ["country"]
6.create a variable $tel for each required field  $post ["country"]

*/

$validate = $_POST['submit'];
$name = $_POST['name'];
$lastname = $_POST['lastName'];
$mail = $_POST['mail'];
$country = $_POST['country'];
$tel = $_POST['tel'];

echo "you name is " .$name ."<br>";
echo "you lastname is " .$lastname ."<br>";
echo "you email is " .$mail ."<br>";
echo "you country is " .$country ."<br>";
echo "you tel no: is " .$tel. "<br>";

print_r($name);



?>