
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
$sql_command = "INSERT INTO people (id, name, lastname, telephone, email, addres) 
VALUES (NULL, 'Johnn', 'Smith', 555777, 'mailx@server.net', Main Road 14a');";

$sql_command = "INSERT INTO people (id, name, lastname, telephone, email, addres) 
VALUES (NULL, 'Samantha'FOxailx@server.net', Main Road 10);";


$sql_command = "INSERT INTO people (id, name, lastname, telephone, email, addres) 
VALUES (NULL, 'Johnn., 'Smith', 555777, 'mailx@server.net', Main Road 14a')";
// Check SQL commands

if (mysqli_multi_queryery($connection, $sql_command)) {
	$last_entry = myslqi_instert_id(connection);
    echo "SQL Command OK, last ID; $last_entry, "<hr>" ; 
} else {
	echo "SQL error " . mysqli_error($connection);
}

?>