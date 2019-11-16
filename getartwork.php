<?php
 $whichMus = $_POST["pickamuseum"]; //get selected museum value from the form
 $query = select * from workofart where musID="pickamuseum"_; //fill in with correct query
 
 $result = mysqli_query($connection, $query);
 if (!$result) {
 die("databases query on art pieces failed. ");
 }
 echo "<ul>"; //put the artwork in an unordered bulleted list
 while ($row = mysqli_fetch_assoc($result)) {
  echo "<li> '$row['artname']." by ".$row['artist']' </li>" 
$row . "<br>";
  }
 echo "</ul>"; //end the bulleted list
 mysqli_free_result($result);
?>
