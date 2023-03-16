<?php
@include './link.php';

session_start();
    if(isset($_POST['submit'])) {

        $title = mysqli_real_escape_string($conn,$_POST['title']);
        $description = mysqli_real_escape_string($conn,$_POST['description']);

        $select = " SELECT * FROM category_info WHERE title = '$title' && description = '$description'";
        
        $result = mysqli_query($conn,$select);

        if(mysqli_num_rows($result) > 0){
            $error[] = 'category already exits';
        }else {
                    $insert = " INSERT INTO category_info(title,description) VALUES ('$title','$description')";
                    mysqli_query($conn,$insert);
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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<style>
    .form_section-conainer {
        margin-top: 10%;
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
            
                    <form action="" method="post">
                    <h2>Add Category</h2>
                    <?php
                    if(isset($error)) {
                        foreach($error as $error) {
                            echo '<span style="color:red; font-size:1.0rem;" class="error-msg">'.$error.'</span>';
                        }
                    }
                    ?> 
                    <input type="text" name="title" placeholder="Category Title" required>
                    <input type="text" name="description" placeholder="Category Description" required>
                     <button type="submit" name="submit" class="signupbtn">Add Category</button>
                    
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



    <footer>
        <div class="footer_copyright">
            <small>Copyright &copy;MAGIC OF WORDS</small>
        </div>
    </footer>

</body>
</html>    