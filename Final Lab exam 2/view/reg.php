<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <h1>User Registration</h1>
  
  <form id="registrationForm" action="../controllers/regcheck.php" method="post">
    
    <label for="Profilename">Profile Name</label>
    <input type="text" id="Profilename" name="Profilename" ><br>
     
                                <fieldset>
                                    <Legend>Role</Legend>
                                    <input type="radio" name="role" value="Admin"/> Admin
                                    <input type="radio" name="role" value="Buyer"/> Buyer
                                    <input type="radio" name="role" value="Seller"/> seller <br>
                                 </fieldset>                           

    <label for="username">Username:</label>
    <input type="text" id="username" name="username" ><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br>
    <label for="confirmpassword">Confirm Password:</label>
    <input type="confirmpassword" id="confirmpassword" name="confirmpassword"><br>

    <input type="submit" value="Register">
  </form>

</body>
</html>

<html>
   

                            