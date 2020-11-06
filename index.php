<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<?php
include 'inc/config.php';
$sql = "SELECT * FROM test";
$result = $link->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // var_dump($row);
        echo $row['id']." ".$row['head'].'<br>';
    }
}
// ending point

?>
