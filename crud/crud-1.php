<?php



$servername="localhost";
$username= "root";
$password="";
$db_name="crud";

$conn=new mysqli($servername,$username,$password,$db_name);

if($conn->connect_error){
    die("Connection Failed:" . $conn->connect_error);
}

$sql="select * FROM students";
$result=$conn->query($sql);





?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
  <body>
    <h1>CRUD Application</h1>
    <table class="table table-info">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Father's Name</th>
      <th scope="col">REG</th>
    </tr>
  </thead>
  <tbody>
  <?php while($row = $result->fetch_assoc()){ ?>
    <tr>
        <th scope="row"><?php echo $row['id']; ?></th>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row["father's_name"]; ?></td>
        <td><?php echo $row['reg']; ?></td>
    </tr>
<?php } ?>
  </tbody>
</table>
  </body>
</html>