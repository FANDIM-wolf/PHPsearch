
<!DOCTYPE html>
<html>
<head>
	<title>PHP search</title>
</head>
<body>

<style type="text/css">
	
#logo{

margin-left:300px;

}
#line{
	margin-left: 350px;
}	

#ip_coordinates{
	margin-top: 30%;
}

</style>


<div id="logo">
        <img src="phplogo.png" width="600" height="300">
</div>
<div id="line"> 
<form name="search_form" method="get">
    <input type="search" name="search_line" size="70" placeholder="Write , What topic do you need ?">
    <input type="submit" name="">
</form>
</div>

<?php


//if ($_REQUEST['search_line']=='select'){
//	echo'get:select';
//}else{
	//echo "Parametr had no found";
//}



if(isset($_GET['search_line']) && $_GET['search_line'] == 'select'){
	
	require "select.php";
}  
elseif (isset($_GET['search_line']) && $_GET['search_line'] == 'info') {
  	
  
header("Location: bd.php");
  
}
elseif(isset($_GET['search_line']) && $_GET['search_line'] == 'pages'){
	require "links.php";
}
elseif (isset($_GET['search_line']) && $_GET['search_line'] == 'insert_log') {
	//send your login PHPsearch db
	require "insertlog.php";


}
elseif(isset($_GET['search_line']) && $_GET['search_line'] == 'upload'){
  require "upload.php";
}
elseif(isset($_GET['search_line']) && $_GET['search_line'] == 'upload function'){
  header("Location:upload.php");
}



?>

<footer>
  <?php 
   // Function to get the client IP address
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}






  ?>
<div id="ip_coordinates">
<?php 

echo "<h2>".$ip_coordinates."</h2>";

?>

</div>
</footer>

</body>
</html>