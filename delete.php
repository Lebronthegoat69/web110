
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
$sql_command = "DELETE FROM people WHERE id= BETWEEN 13 AND 15";

if (mysqli_query($connection, $sql_command)) {
	echo "SQL Command Ok"

) else ( " SQL Error " . mysqli_error(Connection); 



}

