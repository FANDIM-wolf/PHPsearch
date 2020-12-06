

<!DOCTYPE html>
<html>
<?php include "bootstrap.php"?>
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
    <form class="form-inline my-2 my-lg-0" method="get" action="">
      <input class="form-control mr-sm-2" type="text" name="result_search_in_jevais" placeholder="Search" aria-label="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<?php


//search in data base 
function search_result(){
   //connect to data base 

   $result_of_search = $_GET['result_search_in_jevais'];
$mysqli= new mysqli("localhost","root","","phpsearch");

$sql = "SELECT * FROM `jevais_articles` WHERE `title` = '$result_of_search' ";

$result = $mysqli->query($sql);
while ($row = $result -> fetch_assoc()) {
            // Получаем массив с строками которые нужно выводить
           echo "<h3>".$row['title']."</h3>"."<br>";
           echo '<a href="article.php?id='.$row["id"].'">show</a>';
        }

}

//names of availiable articles 
function print_data ($result_data)
{
    while (($row = $result_data->fetch_assoc()) != false ) {
        //get all data about articles and put it in  variable row 

        //echo "<a href=".$row['text'];">$row['name'];</a>";// print names of  articles
        echo "<br>";
        echo "<br>";
        echo "<h2>".$row['title']."</h2>";
       
       echo '<a href="article.php?id='.$row["id"].'">show</a>';
        echo "<br>";
    }
    
   
}



$mysqli= new mysqli("localhost","root","","phpsearch");

//amount pages in Data base 
if ($result = $mysqli->query("SELECT * FROM  `jevais_articles`")) {
      echo "<br>";
      echo "<br>";
        
    printf("Pages found: %d .\n", $result->num_rows);
    if ($result->num_rows <= 21){

        echo "Beta version 1.0";
    }
    echo "<br>";
    $result->close();
}

$mysqli->query("SET NAMES 'utd-8'");
$result_data = $mysqli->query("SELECT * FROM  `jevais_articles`");


print_data($result_data);




$mysqli->close(); //close connection to db 

search_result();


?>
 </body>
</html>