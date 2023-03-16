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
    <section class="form_section-conainer">
        <div class="container form_section-conainer">
            <h2>Edit Post</h2>

                    <form action="" method="post">
                <input type="text" name=" title" placeholder="Title">
                <select name="cat">
                    <option value="1">Nature</option>
                    <option value="1">Art</option>
                    <option value="1">Science & Technology</option>
                    <option value="1">Animal</option>
                    <option value="1">Journal</option>
                    <option value="1">Travel</option>
                </select>
                <textarea rows="10" placeholder="body"></textarea>
                    <div class="form_control">
                        <label for="thumbnail">Add Thumbnail</label>
                        <input type="file" name="file" if="thumbnail">
                    </div>
                    <input type="email" name="email" placeholder="email" required>    
                    <button type="submit" class="signupbtn">Edit post</button>
                    </form>

        </div>
    </section>
    <section class="category_button">
        <div class="container category_button-container">
            <a href="" class="category_button">Art</a>
            <a href="" class="category_button">Nature</a>
            <a href="" class="category_button">Animal</a>
            <a href="" class="category_button">Journal</a>
            <a href="" class="category_button">Travel</a>
            <a href="" class="category_button">Science & Technology</a>
        </div>                         
    </section>


    <!-- end category -->

    <footer>
        <div class="footer_copyright">
            <small>Copyright &copy;MAGIC OF WORDS</small>
        </div>
    </footer>

</body>
</html>