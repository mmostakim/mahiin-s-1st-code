<?php
include "./database.php";
$obj= new Database();
// $obj->select('presonal','*',null,null,null,null);
// $first_name=$_POST['first_name'];
// $last_name=$_POST['last_name'];
// $email=$_POST['email'];
// $password=$_POST['password'];



// $value=["first_name"=>$first_name,"last_name"=>$last_name,"email" =>$email,"password"=>$password	];
//  if($obj->insert('user', $value)){
//   echo "Data Inserted ";
//  }else{
//   echo "Failed to insert data";
//  }



// var_dump($obj->getResult());

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
  <body>
    <div class="container border border-danger border-5 bg-info-subtle ">
   <center><h1>User Form</h1></center> 
    <form action="usertable.php " method="post">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">First Name</label>
    <input type="text" name="first_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Last Name</label>
    <input type="text" name="last_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  <br>
    <button type="submit" class="btn btn-primary">Submit</button><br>
 
  </div>


</form>

  </body>
</html>