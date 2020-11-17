
<!DOCTYPE html>
<html>
<head>
	<title>PHP search</title>
</head>
<body>
	


<br>
</body>
</html>


<?php 


;
//shows result of  request 

//names of availiable articles 
function print_data ($result_data)
{
	while (($row = $result_data->fetch_assoc()) != false ) {
		//get all data about articles and put it in  variable row 

		//echo "<a href=".$row['text'];">$row['name'];</a>";// print names of  articles

		echo $row['name']."<br>";
        echo $row['text']."<br>";
        echo "<br>";
	}
	
   
}



$mysqli= new mysqli("localhost","root","","phpsearch");

//amount pages in Data base 
if ($result = $mysqli->query("SELECT * FROM  `links`")) {
    printf("Страниц найдено: %d .\n", $result->num_rows);
    if ($result->num_rows <= 21){
    	echo "Beta version 1.0";
    }
    echo "<br>";
    $result->close();
}

$mysqli->query("SET NAMES 'utd-8'");
$result_data = $mysqli->query("SELECT * FROM  `links`");


print_data($result_data);




$mysqli->close(); //close connection to db 




?>