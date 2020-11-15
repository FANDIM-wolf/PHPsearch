<!DOCTYPE html>
<html>
<head>
	<title>PHP search</title>
</head>
<body>

<img src="logoprint.png">

<h2>Names of availible articles in data base:</h2>
<br>




</body>
</html>


<?php 
//names of availiable articles 
function print_data ($result_data)
{
	while (($row = $result_data->fetch_assoc()) != false ) {
		//get all data about articles and put it in  variable row 

		echo $row['name']."<br>"; // print names of  articles 

	}
	
   
}


$mysqli= new mysqli("localhost","root","","phpsearch");

$mysqli->query("SET NAMES 'utd-8'");
$result_data = $mysqli->query("SELECT * FROM  `articles`");


print_data($result_data);


//amount strings in Data base 
if ($result = $mysqli->query("SELECT * FROM  `articles`")) {
    printf("В таблице %d строк.\n", $result->num_rows);
    $result->close();
}

$mysqli->close(); //close connection to db 



?>