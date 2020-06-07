<?php

include('db.php');
$prn = $_GET['prn'];
$q = mysqli_query($conn,"select * from registration where prn = '".$prn."' ");
while($qr=mysqli_fetch_array($q))
{
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Profile</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="stud.php?prn=<?php echo $prn; ?>"><b>SVKM's IOT Training And Placement Portal</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="stud.php?prn=<?php echo $prn; ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="news.php?prn=<?php echo $prn; ?>">News <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="other.php?prn=<?php echo $prn; ?>">Other<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        
      
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
<div class="pr-5">
      <a class="btn btn-outline-dark" href="myinfo.php?prn=<?php echo $prn; ?>"><?php echo $qr['name'];?></b><span class="sr-only">(current)</span></a>
    </div>
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-dark my-2 my-sm-0" type="submit">Search</button>
      <div class="pl-3">
      <a href="#" class="text-danger"><b>Log-Out</b></a> 
    </div></form>
  </div>
</nav>
<br>
           <div style="padding: 30px">
      <h3>News Image </h3>
     <hr style="border: 2px solid blue">   
<div class="p-5" style="padding: 30px">

<div class="row">
 <?php
include('db.php');
$q = mysqli_query($conn, "select * from img");
while($r=mysqli_fetch_array($q)) {
  
?>
  <div class="col-md-4">
    <div><img src="img/<?php echo $r['img']; ?>" /></div>
  </div>

<?php } ?>
</div>
</div>
<br>
<?php } ?>
<section>
  <div class="container">
           <div style="padding: 30px">
      <h3>News Gallery</h3>
     <hr style="border: 2px solid blue">   
<div class="p-5" style="padding: 30px">

<?php
include('db.php');
$q1 = mysqli_query($conn, "select * from news");
while($r1=mysqli_fetch_array($q1)) {
  
?>
  <a href="news_view.php?id=<?php echo $r1['id'];?>&prn=<?php echo $_GET['prn'];?>" style="text-decoration-color: black"><div class="row" style="background-color: white; box-shadow: 2px 3px 2px 3px;">
    <div style="padding: 20px 10px ">
      <b>Date :</b><?php echo $r1['cdate'];?>
      <h4><b><?php  echo $r1['title'];   ?></b></h4>
      <h5><b><?php  echo $r1['company'];   ?></b></h5>
    </div>
  </div></a><br>

<?php } ?>
</div>
</div>
</section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>