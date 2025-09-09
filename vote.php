<?php
include("db.php");
if(isset($_POST['candidate'])){
  $c = $_POST['candidate'];
  mysqli_query($conn,"INSERT INTO votes (candidate) VALUES('$c')");
  echo "Thank you for voting! <a href='result.php'>See Results</a>";
}
?>
