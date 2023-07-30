<?php
   include ('../control/action.php');
?>
<!DOCTYPE html>
<html>
<head>
  
    <title>Manager's Page</title>

</head>

<body align="center">

<?php include '../layouts/header.php'; ?>

    <h1>Employee Registration Form </h1>
    

    <form action=""  method="POST" enctype="multipart/form-data" > 
          <table align="center"> 
        
               <tr>   
                <td> 
                      Employee Name:
                      
                </td> 
                <td> <input type="text" id="fname" name="fname" value="" placeholder="name"> </td>

                     <td><span style="color: red;"> <?php  echo $Errorname; ?> </span>
                    </td>
                </tr> 
                   
               <tr>

                <td>
                      Email:      
                </td>
                <td> <input type="text" id="fmail" name="fmail" value="" placeholder="name@.com"> </td>
                
                       <td>  <span style="color: red;"> <?php  echo $Error1; ?> </span>
                    </td>
               </tr>



                <tr>
               <td>
                      Phone Number:      
                </td>
                <td> <input type="Number" id="fnumber" name="fnumber" value="" placeholder="+8801..">  </td>
                 </tr>
               



                            
            <tr>
              <td>Gender:</td>
              <td>
                <input type="radio" name="fgender" value="male">Male
                <input type="radio" name="fgender" value="female">Female
              </td>
              <td>
                <?php if (!empty($fgender_error)) { ?>
                  <span style="color: red;"><?php echo $fgender_error; ?></span>
                <?php } ?>
              </td>
            </tr>




                  <tr>
                    <td>Date Of Birth:</td> 
                    <td><input type="date" id="fdate" name="fdate"></td>
                    <td>
                      <?php if (!empty($ageError)) { ?>
                        <span style="color: red;"><?php echo $ageError; ?></span>
                      <?php } ?>
                    </td>
                  </tr>





                 <tr>
                    <td> <p><h3>Branch Information</h3></p> </td>

                     <table align="center" border="1" cellpadding="10" frame="Box" rules="none"> 
                               
                     <tr>
                      <td>Branch Name :</td>

                    <td> <input type="text" id="fbranch" name="fbranch" value="" placeholder="Enter Branch Name">
                     <span style="color: red;"> <?php  echo $Error ?> </span>
                     </td>
                    </tr>



                     <tr>
                     <td>Section No  :</td>
                           <td>
                           <input type="number" id="fsection" name="fsection" value="" placeholder="Section">
                           <span style="color: red;"> <?php  echo $NomineeAgeError ?> </span>
                           </td>
                    </tr>

                     <tr>
                        <td>Designation:</td>
                        <td>
                          <input type="radio" name="designation" value="Fresher">Fresher
                          <input type="radio" name="designation" value="Intern">Intern
                        </td>
                        <td>
                          <?php if (!empty($designation_error)) { ?>
                            <span style="color: red;"><?php echo $designation_error; ?></span>
                          <?php } ?>
                        </td>
                      </tr>
                     




                        <tr>
                        <td> District : </td>
                        <td>
                          <select id="district" name="district">
                            <option value="">--Select--</option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Chottogram">Chottogram</option>
                            <option value="Sylhet">Sylhet</option>
                            <option value="Barishal">Barishal</option>
                          </select>
                        </td>
                        <td>
                        <?php
                          $district_error = "";
                            ?>
                          <span style="color: red;"><?php echo $district_error; ?></span>
                        </td>
                      </tr>




                     </table>
                     <br>
                 </tr>  

            
               
              
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
               
                 <br><br>



                <tr>
                    <td>Pasword:</td>
                    <td> <input type="password" id="fpass" name="fpass" value="" placeholder="Password"> </td>
                    
                </tr>

                
                <tr>
                  <td>Confirm Password:</td>
                  <td>
                      <input type="password" id="fCpass" name="fCpass" value="" placeholder="Confirm Password">
                      <br>
                      <span style="color: red;"><?php echo $passError; ?></span>
                  </td>
              </tr>

               
                <br><br>
                




                 
         

        </table>
        <br>
         <input type="submit" id="frmsubmit" name="submit" style="height:30px; width:80px"  >

    </form>

    
      <br><br>
      <a href="../home.php">
    <input type="submit" value="BACK" id="login" name="login" style="height:30px; width:100px"  >
      </a>
</body>
</html>