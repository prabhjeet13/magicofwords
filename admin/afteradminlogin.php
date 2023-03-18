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

    <style>
        .addAndUpdatePost {
                margin: 15%;
            }  
            .addAndUpdatePost ul {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }
        .addAndUpdatePost ul li {
            /* border: 2px solid red; */
            width: 8rem;
            height: 7rem;
            display: flex;
            color: black;
            font-size: medium;
            margin-top: 10px;
            align-items: center;
            display: flex;
            font-weight: bold;
            justify-content: center;
            /* background: crimson;
            color: white; */
        }
        h2 {
            margin:10%;
        }   
        ul li.addCategory {
            width: 9rem;
            
        }  
    </style>
</head>
<body>
    <nav>
        <div class="container nav_container">
            <a href="./afteradminlogin.php" class="nav_logo">MAGIC OF WORDS</a>
            <ul class="nav_items">
                <li class="nav_profile">

                    <div class="mw">
                        <a href="#" class="btn btn-primary">MW</a>
                    </div>
                    <ul>
                        <li><a href="./afteradminlogin.php">Dashboard</a></li>
                        <li><a href="./index.php">Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <h2> WELCOME TECH TITAN IN THE MAGIC OF WORDS!!! <h2>
    <div class="addAndUpdatePost">
        <ul>
            <li class="signupbtn"> <a href="./add_post.php"> ADD POST </a></li>
            <li class="signupbtn"> <a href="./edit_post.php"> EDIT POST </a></li>
            <li class="signupbtn"> <a href="./delete_post.php"> DELETE POST </a></li>
            <li class="addCategory signupbtn"> <a href="./add_category.php"> ADD CATEGORY </a></li>
        </ul>
    </div>

</body>
</html>    