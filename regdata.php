<?php
$name= $fatherName= $motherName =$email= $phone =$bloodGroup= $experience= $course="";
$nameerr= $fatherNameerr= $motherNameerr =$emailerr= $phoneerr =$bloodGrouperr= $experienceerr= $courseerr="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["name"])){
        $nameerr= "You have to fill this field";
    } else{
        $nameerr = regdata($_POST["name"]);
        
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameerr = "Only letters and white space allowed"; 
        }
    }
}
if(empty($_POST["fatherName"])){
    $fatherNameerr= "You have to fill this field";
} else{
    $fatherNameerr = regdata($_POST["fatherName"]);
   
    if (!preg_match("/^[a-zA-Z-' ]*$/",$fatherName)) {
        $fatherNameerr = "Only letters and white space allowed"; 
    }
}

if(empty($_POST["motherName"])){
    $motherNameerr= "You have to fill this field";
    } else{
        $motherNameerr = regdata($_POST["motherName"]);
       
        if (!preg_match("/^[a-zA-Z-' ]*$/",$motherName)) {
            $fatherNameerr = "Only letters and white space allowed"; 
        }
    } 
     if (empty($_POST["phone"])) {
        $phoneerr = "Phone Number is required";
      } else {
        $phoneerr = regdata($_POST["phone"]); 
        if (preg_match('/^[0-9]{10}+$/', $phone)) {
          $phoneerr = "Invalid Phone Number format";
        }
      }
      if (empty($_POST["email"])) {
        $emailerr = "Email is required";
      } else {
        $emailerr = regdata($_POST["email"]);
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailerr = "Invalid email format";
        }
      }
      if (empty($_POST["bloodGroup"])) {
        $bloodGrouperr = "Blood Group is required";
      }else{
        $bloodGrouperr = regdata($_POST["bloodGroup"]);
       
      }

      if (empty($_POST["experience"])) {
        $experienceerr = "You can't empty this  ";
      }else{
        $experienceerr = regdata($_POST["experience"]);
       
      }
      if (empty($_POST["course"])) {
        $courseerr = " Required";
      }else{
        $courseerr = regdata($_POST["course"]);
       
      }

      function regdata($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <style>
           .err{color: #F5200B;
      }
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Student Information</h2>
        <table>
            <tr>
                <th>Field</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>Name:</td>
                <td> <span class="err">* <?php echo $nameerr;?></span></td>
            </tr>
            <tr>
                <td>Father's Name:</td>
                <td> <span class="err">* <?php echo $fatherNameerr;?></td>
            </tr>
            <tr>
                <td>Mother's Name:</td>
                <td><span class="err">* <?php echo $motherNameerr;?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><span class="err">* <?php echo $emailerr;?></td>
            </tr>
            <tr>
                <td>Phone:</td>
                <td><span class="err">* <?php echo $phoneerr;?></td>
            </tr>
            <tr>
                <td>Blood Group:</td>
                <td><span class="err">* <?php echo $bloodGrouperr;?></td>
            </tr>
            <tr>
                <td>Experience:</td>
                <td><span class="err">* <?php echo $experienceerr;?></td>
            </tr>
            <tr>
                <td>Course:</td>
                <td><span class="err">* <?php echo $courseerr;?></td>
            </tr>
        </table>
    </div>
</body>
</html>
