<?php /* Attempt to connect to MySQL database */
$conn = mysqli_connect("localhost", "root", "", "users");
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>