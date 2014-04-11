<?php

$con=mysqli_connect("localhost","root", "srs9292", "progtest.hello_demo");

if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL:" . mysqli_connect_error();
}


$result = mysqli_query($con,"SELECT * FROM people");

echo "<table cellpadding='5' cellspacing='2' border = '5' style='background-color:#ff0000;'>
<tr>
<th>Name</th>
<th>Note</th>
<th>ID</th>
<tr>";

while($row = mysqli_fetch_array($result))
  {
    echo "<tr>";
    echo "<td style='background-color:#ffffff;'><strong>" . $row['name'] . "</td>";
    echo "<td style='background-color:#ffffff;'>" . $row['note'] . "</td>";
    echo "<td style='background-color:#ffffff;'><strong>" . $row['id'] . "</td>";
    echo "</tr>";
  }
echo "</table>";


  $mName = $_GET['name'];
$mNote = $_GET['note'];

?>


<p>You entered name: <?php echo $mName; ?></p>
<p>Your note says: <?php echo $mNote; ?></p>

