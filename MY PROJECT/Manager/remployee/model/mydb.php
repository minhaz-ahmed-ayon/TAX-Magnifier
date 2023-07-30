<?php
class MyDB{

function openCon(){
$conn = new mysqli("localhost","root","","Manager");
return $conn;
}

function insertData($tablename, $fname, $conn)
{
$sql="INSERT INTO $tablename (first_name) VALUES ('$fname',)";
$result=$conn->query($sql);
return $result;
}



}


?>