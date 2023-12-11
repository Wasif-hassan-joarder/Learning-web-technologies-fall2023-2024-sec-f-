<?php 
require_once "../models/usermodel.php";
    session_start();
    if(isset($_REQUEST['submit'])){

     
        $username = $_REQUEST['username']; 
        $password = $_REQUEST['password'];
        $profilename = $_REQUEST['Profilename'];
        $role = $_REQUEST['role'];
        $confirmpassword= $_REQUEST['confirmpassword'];
    

    }  

        if($username == "" || $password == "" ||empty($name)|| empty($dob)||empty($role)) {
            echo "Null value ..";
            
        }
        elseif( $password != $confirmpassword  ) {
            echo "Password does not match";
            
        }
        elseif( strlen(trim($_REQUEST['password'])) < 8) {
            echo "Password must have at least 8 characters";
            
        }



        

        $user = ['username'=> $username, 'password'=> $password, 'role' => $role,  'name'=> $name,];
        $status = addUser($user);
        if($status){
            if($role=="admin" || $role=="seller" || $role=="buyer")
            {
                header('location: ../views/Signup.php');
            }
            
            else{
                echo "error";
            }
    
}
    else{
        echo "invalid request...";
    }
?>