<!DOCTYPE html>
<html>
<head>
	<title>TestSelect</title>
</head>
<body>

<form action="" method="post">
<select  size='5' multiple name='test[]'>
        <option value="one">England</option>
        <option value="two">Belguim</option>
        <option value="three">Germany</option>
        <option value="four">France</option>
        <option value="five">Portugese</option>
</select>
<input type="submit"   />
</form>


<?PHP
        $test=$_POST['test'];

        if ($test){
           foreach ($test as $t){

            if ($t == "two"){
            	  echo "Belguim";
            }
         	  echo '<h3>You selected:</h3> ',$t,'<br />';}
           }
?>

</body>
</html>