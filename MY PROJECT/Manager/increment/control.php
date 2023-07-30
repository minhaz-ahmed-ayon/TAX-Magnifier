<?php

$fPname=$_REQUEST["Pname"];

if(empty($fPname))
{
    echo "<br><br>No name is being added for promotion" ;
}
else{
    echo "<br> <br>Promotion has been done for" .$fPname ;
}


$fdname=$_REQUEST["dname"];

if(empty($fdname))
{
    echo "<br><br>No name is being added for Demotion" ;
}
else{
    echo "<br> <br>Deomotion has been done for" .$fdname ;
}




               

?>