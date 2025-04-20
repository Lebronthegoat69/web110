<?php
include'navagation.php';

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

echo  '
<form	action:"delete_id.php"method = "post">
<label>ID To Delete</label><br>
<input type=>"text" name="ID_To_Delete">
<br><br>

<input type="submit" value="Submit">

</form>

':

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