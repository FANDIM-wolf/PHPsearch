<!DOCTYPE html>
<html>
<?php include "bootstrap.php" ?>
<body>
 <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">JEVAIS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
      </li>
     
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<?php 

$result_of_search = $_GET['result_search_in_jevais'];
$mysqli= new mysqli("localhost","root","","phpsearch");
//if links more than zero

	//variable link gets array of data 
     while ($link = $result_of_search->fetch_assoc()) {
            echo "title:".$link['title']."<br>";
            //show a link for  article 
            echo '<a href="article.php?id='.$link["id"].'">show</a>';
     }
   
?>
</body>
</html>