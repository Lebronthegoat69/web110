
<?php

include 'navigation.php';

$id = $POST["id"];
$name = $POST["name"};
$lastname = $POST["lastname"};
$telephone = $POST["telephone"};
$emai = $POST["emai"};
$address = $POST["address"};
//Config

$server = "localhost";
$user = "root";
$password = "";
$database = "address_book"
// Establishing a Connection to MySQL Server
$connection = mysqli_connect($server, $user, $password, $database);

//Check connection
if (!$connection) {
    die ("Total fail</h2> " . mysqli_connect_error());
} else {
    echo "Connection seccessfull" ;
}

// SQL Command
$sql_command =  "UPDATE people SET 	
name = '$name',
lastname =	'$lastname',
telephone = '$telephone',
emai = '$emai',
addcslashes = '$address',   WHERE id = '$id";

if (mysqli_query($connection, $sql_command)) {
    echo "SQL Command OK" ;
} else {
	echo "SQL error " . mysqli_error($connection);
}

$get_all= "SELECT * FEOM"; people ";
$action = mysql_query($connection, $get_all);

echo "<h1>Results: <h1>";
echo "<table width='80' cellspain='2'	border='2'><tr>	bgcolor='yellow'>";
echo  "</td>ID</td>";  
echo  "</td>name</td>";  
echo  "</td	Lastname</td>";  
echo  "</td	Telephone</td>";  
echo  "</td=Email</td>";  
echo  "</td>Address</td>";  
echo  "</td>Data/Time</td<>/tr>";

while ($line = mysql_fetch_assoc($action)) {
echo "<tr><td>"	: "	.	$line ["id]	."</td>
 <td>" 	.	$line["name"] .  	"</td>
 <td>"	. 	$line["Lastname] . "</td>
<td>"	.	$line["telephone"]	. "</td>
 <td>"	.	$line["email"]	."</td>
<td>" 	.	$line["Address"]	."</td>
<td>"" 	. 	$line["Meta"] . 
.	"<hr>"



}
echo  "<table>"; 

?>