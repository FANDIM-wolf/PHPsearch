<?php

for($i=1;$i<=10;$i++){
	if(!isset($_GET['id']) || $i==$_GET['id']){
		
	
	echo '<div style=" border:5px solid green; float:left; padding:8px;margin:4px;width:20%">';
	for($j=2;$j<=10;$j++){
	echo '<a href="?id='.$i.'">'.$i.'</a>'."*".'<a href="?id='.$j.'">'.$j.'</a>'."=";   	  
    if($i*$j<10){
		echo '<a href="?id='.$i*$j.'">'.$i*$j.'</a>'."<br>";
	}
     else{
		 echo $i*$j."<br>";
	 }	
	}
	if($i*$j<81){
		echo "Number less than 81";
	}
    echo"</div>";	
	}
	
	
}

?>