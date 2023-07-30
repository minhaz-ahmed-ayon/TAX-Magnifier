<?php
   include("../model/mydb.php"); 
    $Error = "";
    $Errorname = "";
    $Error1 = "";
    $ageError="";
    $passError="";
    $hasError=0;
    $fgender = "";
    $PINvalid=""; 
    $NomineeAgeError="";
    $designationError="";
    $districtError="";
    $filesErrors="";
   //file validations 


   $printcookie="";
   setcookie("visit","1",time()+36000);
   if(isset($_COOKIE["visit"]))
   {
       $printcookie= "visited";
   }
   else
   {
       $printcookie= "welcome";
   }



    if(isset($_REQUEST['submit']))
    {
          $EName = $_REQUEST['fname'];
          $Email = $_REQUEST['fmail'];
         
          $BInformation = $_REQUEST['fbranch'];
          $password = $_REQUEST['fpass'];
          $Cpassword = $_REQUEST['fCpass'];
          $PINvalue = $_POST['PINnumber'];
          $Uppercase = preg_match('@[A-Z]@ ',$Cpassword);
          $Lowercase = preg_match('@[a-z]@ ',$Cpassword);
          $Number = preg_match('@[0-9]@ ',$Cpassword);
          $SpecialChar = preg_match('@[^\w]@ ',$Cpassword);
                




        //Name validation
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

           




            //Email validation

             if( empty($_REQUEST['fmail']))
             {  $Error1 = "*"; $hasError=1;}
             else{
             if(filter_var($Email,FILTER_VALIDATE_EMAIL) )
              {
                $Error1 = "";
               }
              else
              {
                $Error1 = "Invalid mail"; $hasError=1;
              }   
              }
             




              //gender validation
       
              if (isset($_POST['fgender'])) {
                $fgender = $_POST['fgender'];
                
                if (empty($fgender)) {
                  $fgender_error = 'Please select a gender.';
                }
              
                // Process form data if there are no errors
                if (empty($fgender_error)) {
                  // process the form data
                }
              } else {
                // Handle the case where the 'fgender' key is not set in $_POST
                $fgender_error = 'Please select a gender.';
              }





              // Date Validation
              
              $fdate = $_POST['fdate'];

              // Check if the date is in a valid format
              if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $fdate)) {
                $ageError = 'Please enter a valid date in YYYY-MM-DD format.';
              }

              // Check if the person is at least 18 years old
              $min_age = 18;
              $birthdate = new DateTime($fdate);
              $today = new DateTime();
              $age = $today->diff($birthdate)->y;

              if ($age < $min_age) {
                $ageError = "You must be at least $min_age years old to sign up.";
              }

              // Process form data if there are no errors
              if (empty($ageError)) {
                // process the form data
              }





              // Branch Validation


              $fbranch = $_POST['fbranch'];

              if (empty($fbranch)) {
                $Error = 'Please enter a branch name.';
              } else {
                // Check if the branch name contains only letters and spaces
                if (!preg_match('/^[a-zA-Z\s]+$/', $fbranch)) {
                  $Error = 'Branch name can only contain letters and spaces.';
                }
              }

              // Process form data if there are no errors
              if (empty($Error)) {
                // process the form data
              }




              // Section number
              $fsection = $_POST['fsection']; // assuming the form method is 'POST'

              if (empty($fsection)) {
                  $NomineeAgeError = "Section is required";
              } else if (!is_numeric($fsection)) {
                  $NomineeAgeError = "Section should be a number";
              } else {
                  // section is valid, you can use it further
              }


                // Designation
              $designation_error = "";

              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["designation"])) {
                  $designation_error = "Please select your designation.";
                }
              }



              // District Validation
                    $district_error = "";

                   
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
             
                      if (empty($_POST["district"])) {
                        $district_error = "Please select a district.";
                      }
                    }




                    // PIN validation

                   $PINvalid = "";
                  if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (empty($_POST["PINnumber"])) {
                      $PINvalid = "PIN number is required.";
                    } elseif (strlen($_POST["PINnumber"]) != 6) {
                      $PINvalid = "PIN number must be exactly 6 digits.";
                    } elseif (!is_numeric($_POST["PINnumber"])) {
                      $PINvalid = "PIN number should only contain numbers.";
                    }
                  }

            
                  //password
                   $password_error = "";
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (empty($_POST["fpass"])) {
                        $password_error = "Please enter a password.";
                    } else {
                        $password = $_POST["fpass"];
                        if (strlen($password) < 8) {
                            $password_error = "Password should be at least 8 characters long.";
                        }
                    }
                }

                //CONFIRM PASS VALIDATION

                   $passError = "";
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (empty($_POST["fpass"]) || empty($_POST["fCpass"])) {
                            $passError = "Please enter Password and Confirm it.";
                        } elseif ($_POST["fpass"] !== $_POST["fCpass"]) {
                            $passError = "Password and confirm password do not match.";
                        }
                    }


              







              //  if(empty($_POST['fbranch']))
              //  {
              //      $Error = " *"; $hasError=1;
              //  }
              //  else
              //  {
              //      if(!preg_match( '/^[a-zA-Z\s]+$/' ,$BInformation))
              //      {
              //           $Error = "Invalid name type"; $hasError=1;
              //      }
              //  }



              //  if(empty($_POST['fpass']) &&  empty($Cpassword))
              //  {
              //      $passError = "*";
              //      $hasError=1;
              //  }
              //  else
              //    {    if($Cpassword == $password)
              //     {
              //      if( !$Uppercase || !$Lowercase || !$Number || !$SpecialChar || strlen($Cpassword) < 6)
              //      {
              //       $passError = "Password should be minimum 6 digit and Include specialChar/number/upper & lower case";   
              //       $hasError=1;  
              //      }
              //       else  { $passError = "";
              //             $hasError=0;
              //             }
              //     }
              //     else
              //     {
              //     $passError =" Password not match";
              //     $hasError=1;
              //     }

              //   }
               



               

               



              //  // PIN validations
              //  if(empty($_POST['PINnumber']))
              //  {
              //   $PINvalid="*"; $hasError=1;
              //  }
              //  else
              //  {
              //       if(  strlen((string)$PINvalue)< 6)
              //       {
              //         $PINvalid="Only 6 digit PIN NO is valid"; $hasError=1;
              //       }
              //       else{
              //         $PINvalid="";
              //       } 
                   
              //  } 

              //  if(empty($_REQUEST['fsection']))
              //  {
              //   $NomineeAgeError="*"; $hasError=1;
              //  }
              //  else
              //  {
              //    $NomineeAgeError="";
              //  }
  

              //  if(empty($_REQUEST['designation']))
              //  {
              //   $designationError="*"; $hasError=1;
              //  }
              //  else
              //  {
              //    $designationError="";
              //  }
               
              
              //  if(empty($_REQUEST['district']))
              //  {
              //   $districtError="*"; $hasError=1;
              //  }
              //  else
              //  {
              //    $districtError="";
              //  }
               //File validations
          /*$Imagename = $_FILES['files']['name'];
          $tmpname = $_FILES['files']['tmp_name'];
          $destination = "images/".$Imagename;
          $img_type = strtolower(pathinfo($Imagename,PATHINFO_EXTENSION));
          $allow_type = array ('png','jpg','jpeg');
          $imageSize = $_FILES['files']['size'];

          if(in_array($img_type, $allow_type))
            {
             
              if($imageSize<= 2000000)
              {
                move_uploaded_file($tmpname,$destination); 
                  $filesErrors="";
                  $hasError=0;
              }
              else
              {
                $filesErrors="Image is too large";
                  $hasError=1;
              }
              
            }
            else{
              $filesErrors= "Only image files are Allowed";
              $hasError=1;
            }*/

    //     $dob = $_POST['fdate'];
    //           $date1=date_create($dob);
    //           $date2=date_create("10/24/2022");
    //           $diff=date_diff($date1,$date2);
    //           $age =$diff->format("%Y");
    //   //json code 
    // if($age >20)
    // {
    //   $ageError="";
      
    // }
 
    //  else
    // {
    //   $ageError="age must be gretter then 20";

    // }




      if($hasError==0)
            {
              $mydb= new MyDB();
$conobj= $mydb->openCon();

// $result=$mydb->insertData("customer",$_REQUEST["fname"],$_REQUEST["fmail"],$_REQUEST["fnumber"],
// $_REQUEST["fgender"],$_REQUEST["fdate"],$_REQUEST["fbranch"], $_REQUEST["fsection"], $_REQUEST["designation"],
//  $_REQUEST["district"],$_REQUEST["PINnumber"],$_REQUEST["fCpass"],$conobj);
 $result=$mydb->insertData("customer",$_REQUEST["fname"],$_REQUEST["fmail"],$_REQUEST["fnumber"],$_REQUEST["fgender"],$_REQUEST["fdate"],$_REQUEST["fbranch"],
 $_REQUEST["fsection"], $_REQUEST["designation"],$_REQUEST["district"],$_REQUEST["PINnumber"] ,$_REQUEST["fCpass"],$conobj);
if($result===TRUE)
{
    echo "Success";
}
else
{
    echo "Error".$conobj->error;
}



                /*$exixtingdata = file_get_contents("AdminData.json"); //connect json file with php_file
                $phpdata = json_decode($exixtingdata);    //convert a JSON object to a PHP object.        
                 
                $myarr=array(
                      "EName"=> $_REQUEST["fname"],      //these are PHP Associative Arrays
                      "Email" => $_REQUEST["fmail"],
                      "Phone_Number" =>$_REQUEST["fnumber"] ,
                      "Gender" =>  $_REQUEST["fgender"],
                      "DOB"=>$_REQUEST["fdate"],
                      "BInformation"=>$_REQUEST["fbranch"],
                      "Section_No "=>$_REQUEST["fsection"],
                      "Designation"=>$_REQUEST["designation"],
                      "District"=>$_REQUEST["district"],
                      "PIN_Number"=>$_REQUEST["PINnumber"],
                      "Password"=>$_REQUEST["fCpass"],

                      
                );

                $phpdata[]= $myarr;
                $myjsonobj= json_encode($phpdata , JSON_PRETTY_PRINT); 
                
                file_put_contents("AdminData.json",$myjsonobj); 

                $mydata= file_get_contents("AdminData.json");   
*/
              }
    
   


  
    }

  


?>