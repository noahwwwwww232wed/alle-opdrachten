<?php
include "dbconnect.php";

if (isset($_GET['action']) && $_GET['action'] == 'delete' && is_numeric($_GET['id'])) {
  // '' deze quotes gebruken we voor stukken tekst `` deze voor tabelnamen etc
  $sql = "DELETE FROM * WHERE `id`  = ". $_GET['id'];
  $result = mysqli_query($conn, $sql);
  die('JA GELUKT');
  
}



$sql = "SELECT * FROM cameras";
$result = mysqli_query($conn, $sql);

echo "<table border=1>";
if (mysqli_num_rows($result) > 0) {

  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>id: " . $row["id"] . " </td>
    <td> - Name: </td>
    <td> " . $row["address"] . " </td>
    <td> " . $row["city"] . '</td>';
    echo '<td><a href="updatedelete.php?action=delete&id=' . $row["id"] .'">delete</a></td>
  </tr>';
  }
} else {
  echo "0 results";
}


mysqli_close($conn);

?>