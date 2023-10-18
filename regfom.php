<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <style>
        
      .err{color: #F5200B;
     }
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #B8F59F;
            margin: 0;
            padding: 8%;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #D3F3E5;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #0E62B0;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 90%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc #5095EE;
            border-radius: 3px;
           
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Student Registration</h2>
        <form action="regdata.php" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" >
                <span class="err"><b>*</b></span>
               
            </div>
            <div class="form-group">
                <label for="fatherName">Father's Name:</label>
                <input type="text" name="fatherName" >
                  <span class="err"><b>*</b></span>
            </div>
            <div class="form-group">
                <label for="motherName">Mother's Name:</label>
                <input type="text" name="motherName" >
                  <span class="err"><b>*</b></span>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email"  name="email" >
                  <span class="err"><b>*</b></span>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" name="phone" >
                <span class="err"><b>*</b></span>
            </div>
        
            <div class="form-group">
                <label for="bloodGroup">Blood Group:</label>
                <span class="err"><b>*</b></span>
                <select  name="bloodGroup" >
                <option value="Choose....">Choose....</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB+">AB+</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>
            </div>
            <div class="form-group">
                <label for="course">Course:</label>
                <span class="err"><b>*</b></span>
                <select id="course" name="course" >
                    <option value="Choose....">Choose....</option>
                    <option value="Web Development">Web Development</option>
                    <option value="Office Management">Office Management</option>
                    <option value="Graphic Design">Graphic Design</option>
                    <option value="Cyber Security">Cyber Security</option>
                   
                </select>
            </div>
            <div class="form-group">
                <label for="experience">Experience:</label>
                <textarea name="experience" rows="5%" cols="50%" ></textarea>
                <span class="err"><b>*</b></span>
            </div>
            <div class="form-group text-center">
                <input type="submit" value="Register">
            </div>
        </form>
    </div>
</body>
</html>
