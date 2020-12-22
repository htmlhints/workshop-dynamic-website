<?php
include 'inc/config.php';
include 'inc/header.php';
$sql = "SELECT * FROM test where id =".$_GET['id'];
$result = $link->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo '
       <div class="card col-4 mx-2">
       <img src="'.$row['image'].'" class="card-img-top" alt="https://i3.ytimg.com/vi/qUlk8q-lvgA/maxresdefault.jpg">
       <div class="card-body">
           <h5 class="card-title">'.$row['head'].'</h5>
           <p class="card-text">'.$row['description'].'</p>
           <a href="https://localhost/workshop/blog.php?id='.$row['id'].'" class="btn btn-primary">Go somewhere</a>
       </div>
   </div>';
    }
}
?>