<?php
@include 'connection.php';

session_start(); 

if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn,$_POST['usermail']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);

    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";
    
    $result = mysqli_query($conn, $select);
    
    if(mysqli_num_rows($result) > 0){
        $error[] = 'user already exits';
    }else {
            if($pass != $cpass)
            {
                $error[] = 'password doesnt match!';
            }
            else {
                $insert = " INSERT INTO user_form(email,password) VALUES ('$email','$pass')";
                mysqli_query($conn,$insert);
                header('location:/magicofwords/authors/login.php');
            }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Blogs</title>
    <link rel="stylesheet" href="./css/style.css">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
    <section class="form_section-conainer">
        <div class="container form_section-conainer">
            <form action="" method="post">
            <h2>Register Yourself!</h2>
                <?php
                    if(isset($error)) {
                        foreach($error as $error) {
                            echo '<span style="color:red; font-size:1.0rem;" class="error-msg">'.$error.'</span>';
                        }
                    }
                ?>    
                <input type="email" name="usermail" placeholder="enter your email" required>
                <input type="password" name ="password" placeholder="enter your password" required>
                <input type="password" name="cpassword" placeholder="confirm your password" required>
                <input type="submit" name="submit" class="signupbtn" value="Register to MW">
                     <small>Already have an account? <a href="login.php">Log In</a></small>
            </form>
        </div>
    </section>
</body>
</html>

   