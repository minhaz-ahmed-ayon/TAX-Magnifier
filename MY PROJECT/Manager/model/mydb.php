<?php
class MyDB{

function openCon(){
$conn = new mysqli("localhost","root","","Manager");
return $conn;
}
// function insertData($tablename, $fname,$fmail,$fnumber,$fgender, $fdate, $fbranch, $fsection,$designation,
// $district,$PINnumber,$fCpass, $conn)
// {
// $sql="INSERT INTO $tablename (fname,fmail,fnumber, fgender,fdate, fbranch,fsection,designation, district,
// PINnumber, ,fCpass) VALUES ('$fname','$fmail','$fnumber','$fgender', '$fdate', '$fbranch', '$fsection','$designation',
// '$district','$PINnumber','$fCpass')";
// $result=$conn->query($sql);
// return $result;
// }


function insertData($tablename, $fname,$fmail,$fnumber,$fgender,$fdate,$fbranch,$fsection,$designation, $district,$PINnumber,$fCpass, $conn)
{
$sql="INSERT INTO $tablename (fname, fmail,fnumber,fgender,fdate,fbranch,fsection,designation,district,PINnumber,fCpass)
 VALUES ('$fname', '$fmail','$fnumber','$fgender','$fdate', '$fbranch',
'$fsection','$designation', '$district','$PINnumber','$fCpass')";
$result=$conn->query($sql);
return $result;
}



}


?>