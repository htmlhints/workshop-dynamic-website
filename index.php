<style>
    .sdev {
        wef
    }
</style>
<?php
include 'inc/config.php';
include 'inc/header.php';
$sql = "SELECT * FROM test";
$result = $link->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    echo '<div class="row">';
    while($row = $result->fetch_assoc()) {
        // var_dump($row);
        echo '<div class="card" style="width: 18rem;">
        <div class="card-body">
            <img src="'.$row["image"].'" width="100%">
          <h5 class="card-title sdev">'.$row["head"].'</h5>
          <p class="card-text">'.$row["description"].'</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>';
    }
}
// ending point

?>

