<?php
   include ('../control/infocontrol.php');
?>
<!DOCTYPE html>
<html>
<head>
  
    <title>Manager's Page</title>

</head>

<body align="center">

    <h1>Employee Registration Form </h1>
    

    <form action=""  method="POST" enctype="multipart/form-data" > 
          <table align="center"> 
        
               <tr>   
                <td> 
                      Employee Name:
                      
                </td> 
                <td> <input type="text" id="fname" name="fname" value="" placeholder="Name"> </td>

                     <td><span style="color: red;"> <?php  echo $Errorname; ?> </span>
                    </td>
                </tr> 
                   
               <tr>

                
              
                <tr>
                    <td>
                             PIN Number:
                    </td>
                    <td>
                    <input type="number" name="PINnumber" placeholder="PIN Number" min="100000" max="999999" >
                    </td>
                         <td>
                         <span style="color: red;"> <?php  echo $PINvalid ?> </span>
                         </td>
                </tr>
               

        </table>
        <br>
         <input type="submit" id="frmsubmit" name="submit" style="height:30px; width:80px"  >

    </form>

    
      <br><br>
      <a href="../../home.php">
    <input type="submit" value="BACK" id="login" name="login" style="height:30px; width:100px"  >
      </a>
</body>
</html>

