
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
elseif(isset($_GET['search_line']) && $_GET['search_line'] == 'pages' or 'php'){
	header("Location: links.php");
}

?>

</body>
</html>