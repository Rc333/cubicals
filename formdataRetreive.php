<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cubicaldata";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


/* mysqli_select_db($conn,"ajax_demo");
$sql="SELECT * FROM user WHERE id = '".$q."'";
$result = mysqli_query($con,$sql); */

$sql = "SELECT firstname, cubical_id FROM employeeCubicals";
$result = $conn->query($sql);

/* $xmlDoc = new DOMDocument();
$xmlDoc->load("cubicaldata.xml");

$x = $xmlDoc->documentElement;
foreach ($x->childNodes AS $item) {
  print $item->firstname . " = " . $item->cubical_id . "<br>";
} */

 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "cubical_id: " . $row["cubical_id"]. " -> " . $row["firstname"]. "<br>";
		$id = $row["cubical_id"];
		$name = $row["firstname"];
    }
} else {
    echo "0 results";
} 


$conn->close();
?>



<?php
//echo $name. "->" .$id;

//<?php$name. "->" .$id;?>


