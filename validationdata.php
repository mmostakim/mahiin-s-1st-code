<!-- Form validation code Start-->
<?php
$firstname=$lastname=$username=$city=$state=$zip=$chechbox=$submit="";

if ($_SERVER["REQUEST_METHOD"]=="POST"){

    $firstname=validationdata($_POST["firstname"]);
    $lastname=validationdata($_POST["lastname"]);
    $username=validationdata($_POST["username"]);
    $city=validationdata($_POST["city"]);
    $state=validationdata($_POST["state"]);
    $zip=validationdata($_POST["zip"]);
    $chechbox=validationdata($_POST["chechbox"]);
    $submit=validationdata($_POST["submit"]);


    
echo  $firstname;
echo "<br>";
echo $lastname;
echo "<br>";
echo $username;
echo "<br>";
echo  $city;
echo "<br>";
echo $zip;
echo "<br>";
echo $state;
echo "<br>";
echo $chechbox;
}


function validationdata($data){
    $data=trim($data);
    $data=stripcslashes($data);
    $data=htmlspecialchars($data);
    return $data;
} 
?> <!-- Form validation code finished-->


