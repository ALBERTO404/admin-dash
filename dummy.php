<?php
$server = "localhost";
$username="root";
$password="";
$database="web2";

$conn= mysqli_connect($server,$username,$password,$database);

$sqlQuery= mysqli_query($conn,"SELECT * FROM enrollment");

while($fetchRecords= mysqli_fetch_array($sqlQuery)) {
    echo $fetchRecords['fullname']; 
}
?>