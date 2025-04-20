
<?php
$name=$_POST["name"];
$lastname=$_POST["lastname"];
$telephone=$__POST["telephone"];
$email=$__POST["email"];
$address=$_POST["addres"];





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
$sql_command =  "INSERT INTO people (id, name, lastname, telephone, email, address)";
VALUES (NULL,	'$name', 'lastname' , 'telephone, email, 'addres') ";


// Check SQL commands

if (mysqli_query($connection, $sql_command)) {
    echo "SQL Command OK" ;
} else {
	echo "SQL error " . mysqli_error($connection);
}

?>