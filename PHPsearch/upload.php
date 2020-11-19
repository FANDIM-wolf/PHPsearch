
<!DOCTYPE html>
<html>
<head>
	<title>Upload Photo</title>
</head>
<body>

<img src="phplogo.png" width="600" height="200">


<form  action="?" method="POST" enctype="multipart/form-data">


   <label>Upload to Server PHP search</label>
    <p><input type="file" name="file"></p>
    <p><input type="submit" name="upload" value="Upload Value"></p>     	

</form>





</body>
</html>

<?php

 if(isset($_POST['upload'])){

  $file_name = $_FILES['file']['name'];
  $file_type = $_FILES['file']['type'];
  $file_size = $_FILES['file']['size'];
  $file_tem_loc =$_FILES['file']['tmp_name'];
  $file_store = "upload/".$file_name;
  
  move_uploaded_file($file_tem_loc, $file_store);

 }


?>