
<html>
<head>
<style>
table {
    width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th {
    background-color: black;
    color: white;
}
</style>
</head>
<body>

</body>
</html>




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

while($row = $result->fetch_assoc()) {
        //echo "cubical_id: " . $row["cubical_id"]. " -> " . $row["firstname"]. "<br>";
		$id = $row["cubical_id"];
		$name = $row["firstname"];
    } 

	
	
 if ($result->num_rows > 0) {
	 
	 echo "<table>";
	 //echo "<tr><th>",cubical,"</th></tr>";
	 //while($row = $result->fetch_assoc()){
		 for( $i=1; $i<=40; ){
			//echo "x<br>";
			echo "<br>";
			echo "<tr>";
			for( $j=1; $j<=5; $i++,$j++){
				echo "<td>","$i&nbsp$name","</td>";
			}
			echo "</tr>";
		}
	 echo "</table>";
	 //}
	 if($id == $i){
		 $i = $name;
	 }
	 

	 
	 
    // output data of each row
   
} else {
    echo "0 results";
} 


$conn->close();
?>





