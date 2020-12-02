<?php 

for($i=1;$i<=4;$i++){
  if(!isset($_GET['id']) || $i==$_GET['id']){
     
     echo '<a href="?id='.$i.'">'.$i.'</a>';

  }
}

?>