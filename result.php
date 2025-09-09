<?php
include("db.php");
$res = mysqli_query($conn,"SELECT candidate, COUNT(*) AS total FROM votes GROUP BY candidate");
echo "<h2>Voting Results</h2>";
while($row=mysqli_fetch_assoc($res)){
  echo $row['candidate']." - ".$row['total']." votes<br>";
}
?>
