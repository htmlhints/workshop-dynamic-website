<?php
include 'inc/config.php';
include 'inc/header.php';
?>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://i3.ytimg.com/vi/qUlk8q-lvgA/maxresdefault.jpg" class="d-block w-100" alt="https://i3.ytimg.com/vi/qUlk8q-lvgA/maxresdefault.jpg">
    </div>
    <div class="carousel-item">
      <img src="https://i3.ytimg.com/vi/qUlk8q-lvgA/maxresdefault.jpg" class="d-block w-100" alt="https://i3.ytimg.com/vi/qUlk8q-lvgA/maxresdefault.jpg">
    </div>
    <div class="carousel-item">
      <img src="https://i3.ytimg.com/vi/qUlk8q-lvgA/maxresdefault.jpg" class="d-block w-100" alt="https://i3.ytimg.com/vi/qUlk8q-lvgA/maxresdefault.jpg">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="d-flex flex-wrap pb-5 mt-5">
<?php
$sql = "SELECT * FROM test order by id desc LIMIT 5";
$result = $link->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo '
       <div class="card col-4 mx-2">
       <img src="'.$row['image'].'" class="card-img-top" alt="">
       <div class="card-body">
           <h5 class="card-title">'.$row['head'].'</h5>
           <p class="card-text"></p>
           <a href="https://localhost/workshop/blog.php?id='.$row['id'].'" class="btn btn-primary">Go somewhere</a>
       </div>
   </div>';
    }
}
?>
</div>
<?php
include 'inc/footer.php';
?>