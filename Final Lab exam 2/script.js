function validateForm() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
  
    //  null  
    if (username.trim() === "" || password.trim() === "") {
      alert("Username and password are required!");
      return false;
    }
  
    return true;
  }
  