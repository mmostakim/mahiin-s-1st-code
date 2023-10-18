<?php
include "./database.php";
$obj = new Database();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
   
    $value = [
        "first_name" => $first_name,
        "last_name" => $last_name,
        "email" => $email,
        "password" => $password
    ];
  }
 
// Example: Delete a user record with a specific ID
// $user_id = 3; // Replace with the actual ID you want to delete
// if ($obj->delete('user', "id = $user_id")) {
//     // Deletion was successful
//     echo "User with ID $user_id has been deleted.";
// } else {
//     // Deletion failed
//     echo "Failed to delete user.";
// }


// if ($obj->delete('user','id="6"')){
// echo "Deteted Seccusfully";
// }else{
//   echo "Deletion Failed";
// }


// if ($obj->update('user',['email'=>'akramkhan@gmail.com'],'id="6"')){

//   echo "Email Updated";
// }else{
//   echo "Update Failed";
// }

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>

    <body>

        <center><h2>User Table</h2></center>
        <div class="container border border-danger border-5 bg-info-subtle ">

    <table class=" table table-info">
    <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>

    </tr>
  </thead>
  <tbody>
    <?php


$user_data = $obj->fetchData('user');
foreach ($user_data as $value)
 {


    echo "<td>" . $value['id'] . "</td>";
    echo "<td>" . $value['first_name'] . "</td>";
    echo "<td>" . $value['last_name'] . "</td>";
    echo "<td>" . $value['email'] . "</td>";
    echo "<td>" . $value['password'] . "</td>";
    echo "</tr>";
}
?>
  </tbody>
</table>
</form>
</div>
    </body>
   </html>