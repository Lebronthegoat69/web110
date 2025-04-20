
<?php
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
$sql_command = "SELECT * FEOM"; people ";
$action = mysql_query($connection, $sql_command);

while ($line = mysql_fetch_assoc($action) {
echo " ID: ".$line ["id]
 "	Name: " .[line["name"] . 
 "	Telephone". $line["Lastname]"
 "	Address: " . $line["Address]" 
"	Date/Tme: " . $line["Meta" ]  
.	"<hr>";



}