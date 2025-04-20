
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
$sql_command =  " CREAT TABLE  people {
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(30) NOT NULL,
lastname VACHAR(30) NOT NULL, 
telephone INT,
email VARCHAR (100),
address VARCHAR(100),
meta TIMESTAMP 
}";

// Check SQL commands

if (mysqli_query($connection, $sql_command)) {
    echo "SQL Command OK" ;
} else {
    echo "SQL error " . mysqli_error($connection);
}

?>