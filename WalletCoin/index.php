<img src="logo.png">

<form name="contract_form" action="" method="get">
 <input type="search" name="search_email" size="70" placeholder="email ?">
 <br>
 <br>
 <input type="search" name="search_subject" size="70" placeholder="subject?">
 <br>
 <br>
 <input type="search" name="search_message" size="70" placeholder="message?">
 <br>
 <br>
 <input type="submit" name="">
</form>

<?php 
ini_set('display_errors', '1');

$message = $_GET['search_message'];
$subject = $_GET['search_subject'];
$email =  $_GET['search_email'];


mail($email,$subject,$message);

?>
