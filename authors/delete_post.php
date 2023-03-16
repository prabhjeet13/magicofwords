<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Blogs</title>
    
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        .form_section-conainer {
            margin-top: 9%;
        }
    </style>
</head>
<body>
    <nav>
        <div class="container nav_container">
            <a href="../authors/afterUserlogin.php" class="nav_logo">MAGIC OF WORDS</a>
            <ul class="nav_items">
                <li class="nav_profile">

                    <div class="mw">
                        <a href="#" class="btn btn-primary">MW</a>
                    </div>
                    <ul>
                        <li><a href="../authors/afterUserlogin.php">Dashboard</a></li>
                        <li><a href="../index.php">Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <section class="form_section-conainer">
        <div class="container form_section-conainer">
            <h2>Delete Post</h2>

                    <form action="" method="post">
                     <input type="text" name=" title" placeholder="Title">
      
                    <input type="email" name="email" placeholder="email" required>    
                    <button type="submit" class="signupbtn">Delete post</button>
                    </form>

        </div>
    </section>
    <footer>
        <div class="footer_copyright">
            <small>Copyright &copy;MAGIC OF WORDS</small>
        </div>
    </footer>

</body>
</html>