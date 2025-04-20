<?php
include'navagation.php';
$get_id_to_delete = $_POST["ID_To_Delet	"}

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
$sql_command = "DELETE FROM people WHERE id=	$get_id_to_delete	 ";

if (mysqli_query($connection, $sql_command)) {
	echo "SQL Command Ok"

) else ( " SQL Error " . mysqli_error(Connection); 
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