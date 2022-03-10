<?php 
include_once('connection.php');
$con = connection();

$username = $password = $confirm = "";
$usernameErr = $passwordErr = $confirmErr = "";
$username_signup = $password_signup = $confirm_signup = "";
$username_signupErr = $password_signupErr = $confirm_signupErr = "";

if(isset($_POST['submit-btn'])){
    if(empty($_POST['username'])){
        $usernameErr = "this field is required";
        
    
    }else{
        $username = $_POST['username'];
    }
    if(empty($_POST['password'])){
        $passwordErr = "this field is required";
    
    }else{
        $password = $_POST['password'];
    }

    if(!empty($_POST['username']) and !empty($_POST['username'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        $sql = "SELECT * FROM users";
        $user = $con->query($sql) or die($con->error);
        $row = $user->fetch_assoc();
        $total = $user->num_rows;
    
       if($username == $row['username'] and $password == $row['password']){
            echo header("location:index.php");
       }else{
            echo"<h5>no user found!!</h5>";
       }
    
    }

} 


if(isset($_POST['btn-signup'])){

    if(empty($_POST['username'])){
        $username_signupErr = "this field is required";
        
    
    }else{
        $username_signup = $_POST['username'];
       }

    if(empty($_POST['password'])){
        $password_signupErr = "this field is required";
        
    
    }else{
        $password_signup = $_POST['password'];
       }

    if(empty($_POST['confirm'])){
        $confirm_signupErr = "this field is required";
        
    
    }else{
        $confirm_signup = $_POST['confirm'];
        }

    if(!empty($_POST['username_signup']) and !empty($_POST['password_signup']) and !empty($_POST['confirm_signup']) and $password == $confirm){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirm = $_POST['confirm'];

        $sql = "INSERT INTO users (username, password, confirm) value('$username', '$password', '$confirm')";
        mysqli_query($con, $sql);
        echo header("location:index.php");


    } 

    
}
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="old.css">
    <style>
        .error{ color:red;
                font-size: .8rem;
                font-family: Arial, Helvetica, sans-serif;
                font-weight: 200;
                text-transform: uppercase;
                margin-bottom:10px;
        }

     

    </style>
</head>
<body>

<div class="popup-screen">
    <div class="popup-box">
        <h3>SIGNUP</h3>
        <form method="POST">
            <input class="place" type="email" name="username_signup" value="<?php echo $username_signup; ?>" placeholder="Please input username.....">
            <span class="error"><?php echo $username_signupErr?></span>
            <input type="password" name="password_signup" value="<?php echo $password_signup; ?>" placeholder="Please input password.....">
            <span class="error"><?php echo $password_signupErr?></span>
            <input type="password" name="confirm_signup" value="<?php echo $confirm_signup; ?>" placeholder="Please confirm password.....">
            <span class="error"><?php echo $confirm_signupErr?></span>
            <button class="btn-submit" name="btn-signup">Signup</button>
            <span name="signup-submit" class="close-btn">x</span>
        </form>
    </div>
</div>

<div class="container">
        <div class="login-form">
            <div class="content">
                    <h2>LIBERO</h2>
                    <hr class="line">

                    <div class="form-content">
                        <form method="post">
                            <div class="user-name"><br>
                                <input type="email" class="username" name="username" value="<?php echo $username?>" placeholder="Username"><br> 
                                <span class="error"><?php echo $usernameErr?></span>
                            </div>
                            <div class="pass-word">
                                <input type="password" class="username" name="password" value="<?php echo $password?>" placeholder="Password"><br>
                                <span class="error"><?php echo $passwordErr?></span>
                             </div>
                             <div class="submit-button">
                                <input type="submit" name="submit-btn" id="submit-btn" value="Login">
                            </div>
                            <hr class="line2">
                            <div class="lowerpart">
                                    <a href="#" class="signup-btn"> Don't Have an Account? Sign Up</a>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
</div>




</div>



        <script src="javaScript/app.js"></script>

</body>
</html>