<?php
    require_once "db.php";

    function auth($username, $password){
        $con = getConnection();
        $sql = "select * from user where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        
       
       
      
        $count = mysqli_num_rows($result);
        if($count == 1){
            while($row = mysqli_fetch_assoc($result)){
                //print_r($row); echo "<br>";
    
                       $_SESSION['username']= $row['username'];
                       $_SESSION['password']= $row['password'];
                       $_SESSION['Profilename']= $row['Profilename'];
                       $_SESSION['role']= $row['role'];
                      
            }
            return true;
        }
        else
        {
            return false;
        }
    }

    function addUser ($user){
        $con = getConnection();
        $sql = "insert into user values('','{$user['username']}','{$user['password']}','{$user['role']}', '{$user['name']}','{$user['email']}','{$user['gender']}','{$user['dob']}','{$user['phonenumber']}','{$user['address']}','{$user['joiningdate']}','{$user['profilepicture']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    
       
        return $result;

?>