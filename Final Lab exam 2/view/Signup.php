<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <h1>Sign Up</h1>
  
  <form id="signupForm" submit="return validateForm()" action="signuppro.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" >

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" >

    <input type="submit" value="Sign Up">
  </form>
 
  

  <script src="script.js"></script>
</body>
</html>


