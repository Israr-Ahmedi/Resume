<?php include("db.php"); ?>
<h2>Vote Your Candidate</h2>
<form method="POST" action="vote.php">
  <label><input type="radio" name="candidate" value="A"> Candidate A</label><br>
  <label><input type="radio" name="candidate" value="B"> Candidate B</label><br>
  <button type="submit">Submit Vote</button>
</form>
<a href="result.php">View Results</a>
