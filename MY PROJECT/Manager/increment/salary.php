<!DOCTYPE html>
<html>
    <head>
    <title>Managaer</title>
</head>
<?php
            $passError = "";

            if (empty($_POST["Password"])) {
                $PasswordErr = "Password is required";
              } else {
                $Password = test_input($_POST["Password"]);
              }
              ?>
        <body align="center" style="background-color:lightyellow;">
        <?php include '../layouts/header.php'; ?>

            <h1 align="center"> Manager's portal </h1>

            
<table align="center">
<form action="control.php" method="POST">

<tr>
    <td>Employee's Promotion:</td>
    <td><input type= "text" name="Pname"></td>
</tr>

<tr>
    <td>Employee's Demotion:</td>
    <td><input type= "text" name="dname"></td>
</tr>

<tr>
                    <td>Pasword:</td>
                    <td> <input type="password" id="fpass" name="fpass" value="" placeholder="Password"> </td>
                    
                </tr>

                


                <tr>
                    <td>Confirm Pasword:</td>
                    <td> <input type="password" id="fCpass" name="fCpass" value="" placeholder="Confirm Password">
                    <br>  <span style="color: red;"> <?php  echo $passError ?> </span>     
                </td>
                </tr>
               <tr></tr>
                <br><br>

<tr>
    <td></td>
    <td><input type= "Submit">
    <input type= "reset"></td>
</tr>
<br>
<br>



</form>
</table>
<br>



<a  href="../home.php"> <input type="submit" value="BACK" id="login" name="login" style="height:30px; width:100px"  ></a>
<br>
<br>
<?php include '../layouts/footer.php';?>

</body>
</html>