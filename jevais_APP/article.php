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
       $connection =mysqli_connect('localhost','root','','phpsearch');
       $article=mysqli_query($connection,"SELECT * FROM  `jevais_articles` WHERE id   =  "  .(int) $_GET['id'] );
       $art = mysqli_fetch_assoc($article)
        
       
?>       

<div id="content">
      <div class="container">
        <div class="row">
          <section class="content__left col-md-8">
            <div class="block">
              
              <br>
              <br>
              <h3><?php echo $art['title'];?></h3>
              <div class="block__content">
              <br>
              <br>	
               <img src="static/<?php echo $art['img']; ?>" width=550 height=400>
                <div class="full-text">
                     <?php 
                     
                     echo $art['text'];?>

                     <?php echo "<br>".$art['date'];?>
                </div>

              </div>
            </div>
 </body>
</html>