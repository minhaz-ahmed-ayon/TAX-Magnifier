<?php
include("../model/mydb.php"); 

$Errorname = "";


if(isset($_REQUEST['submit']))
    {
          $EName = $_REQUEST['fname'];



          
if(empty($_POST['fname']))
{
    $Errorname = "*";
    $hasError=1;
}
else
{
    if(!preg_match( '/^[a-zA-Z\s]+$/' ,$EName))
    {
         $Errorname = "Invalid name type";
         $hasError=1;
    }
}


if($hasError==0)
            {
              $mydb= new MyDB();
$conobj= $mydb->openCon();

$result=$mydb->insertData("employee",$_REQUEST["fname"],$conobj);
if($result===TRUE)
{
    echo "Success";
}
else
{
    echo "Error".$conobj->error;
}

            }



        }












// $fPname = "";
// $fPname=$_REQUEST["Pname"];

// if(empty($fPname))
// {
//     echo "<br><br>No name is being added for remove" ;
// }
// else{
//     echo "<br> <br>Termination has been done for" .$fPname ;
// }       

?>