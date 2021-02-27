Welcome <?php 


if (isset($_POST["fname"]) && (isset($_POST["email"]))) {$fname = $_POST["fname"];  

$email = $_POST["email"];  
}
if (isset($_POST["phone"]) && (isset($_POST["age"]))) {$phone = $_POST["phone"];  

$age = $_POST["age"];  

echo $fname . " " . $email . " " . $phone . " " . $age;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>FORM DATA </title>
</head>

<body>
<form>

<form action="formdata.php" method="POST">
Name: <input name="fname" type="text" placeholder= "Enter your name here" /> 
E-mail: <input name="email" type="text" placeholder= "Enter your email here" />
Phone: <input name="phone" type="number"  placeholder= "Enter your phone here"/>
Age: <input name="age" type="number" />
<input type="submit" />
</form>
</body>
</html>





