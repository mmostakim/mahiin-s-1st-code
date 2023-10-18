
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>formvalidation.php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

  
  <center> <h1> Form Validation </h1></center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  
    <form class="row g-3" action="validationdata.php" target="_blank" method="POST">

  <div class="col-md-4">
    <label for="validationServer01" class="form-label">First name</label>
    <input type="text" name="firstname" class="form-control is-valid" >
  </div>
  <div class="col-md-4">
    <label for="validationServer02" class="form-label">Last name</label>
    <input type="text" name="lastname" class="form-control is-valid">
   
  </div>
  <div class="col-md-4">
    <label for="validationServerUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend3">@</span>
      <input type="text" name="username" class="form-control is-invalid">
     
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationServer03" class="form-label">City</label>
    <input type="text" name="city" class="form-control is-invalid">
  </div>
  <div class="col-md-3">
    <label for="validationServer04" class="form-label">State</label>
    <select name= "state" class="form-select is-invalid">
      <option selected disabled value="">Choose...</option>
      <option>Dhaka</option>
      <option>Chattogram</option>
      <option> Khulna</option>
      <option>Sylhet</option>
      <option>Cumilla</option>
      <option>Rajshahi</option>
    </select>
  </div>
  <div class="col-md-3">
    <label for="validationServer05" class="form-label">Zip</label>
    <input type="text" name="zip" class="form-control is-invalid">

  </div>
  <div class="col-12">
    <div class="form-check">
      <input name="chechbox" class="form-check-input is-invalid" type="checkbox" value="1">
      <label class="form-check-label" for="invalidCheck3">
        Agree to terms and conditions
      </label>
      <div id="invalidCheck3Feedback" class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12">
    <center><button name="submit" class="btn btn-primary" type="submit">Submit form</button></center>
  </div>
</form>


</body>
</html>