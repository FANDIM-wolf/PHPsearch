<form name="search_form" method="get">
    <input type="search" name="name_line" size="70" placeholder="Write down , name ?">
    <input type="search" name="password_line" size="70" placeholder="Write down , password ?">
    <input type="search" name="email_line" size="70" placeholder="Write down, name ?">
    <input type="submit" name="">
</form>

<?php 

$name ;
$password;
$email;
$name_l=$_GET['name_line'];
$password_l=$_GET['password_line'];
$email_l=$_GET['email_line'];

if($name_l =="kosh")
{
	echo "Engine can not create user with name: ".$name_l;
	exit();
}

$mysqli = new mysqli("localhost" , "root","","base");
$mysqli->query("SET NAMES 'utf8'");

$mysqli->query("INSERT INTO `users` (`name`,`password`,`email`) 
	VALUES('$name_l','".md5($password_l)."' , '$email_l') ");

$mysqli->close ();

?>