<?php
include('conn.php');

// Create table
$tb = "CREATE TABLE tourists(
pass_ID VARCHAR(18),
fname VARCHAR(20),
lname VARCHAR(20),
SEX VARCHAR(6),
phone VARCHAR(15),
country_of_origin TEXT,
email TEXT,
PRIMARY KEY(pass_ID)
)";

$exetb = mysqli_query($conn, $tb);

if(!$exetb){
    die('TABLE not created: ' . mysqli_error($conn));
} else {
    echo "Table of tourists created successfully Now!";
}
?>
