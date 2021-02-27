<?php
if (isset($_GET['name']) && (isset ($_GET['mail']) && (isset ($_GET['profession'])))) {$name = $_GET['name'];   $mail = $_GET['mail'];   $profession = $_GET['profession']; 

 echo $name . " ". $mail . " ". $profession;
}

?>


<html>
<head>
	<title>FORM DATA </title>
</head>

<body>
<form>
<form action="data.php" method="GET">
Name: <input name="name" type="text" placeholder= "Enter your name here" /> 
E-mail: <input name="mail" type="text" placeholder= "Enter your email here" />
Profession: <input name="profession" type="text"  placeholder= "Enter your profession here"/>

<input type="submit" />
</form>
</body>
</html>


