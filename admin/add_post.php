<?php

@include './link.php';

$query = "SELECT * from category_info";
$run = mysqli_query($conn,$query);
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
            <h2>Add Post</h2>
                <?php 
                    if(isset($_SESSION['status']) && $_SESSION != ' ')
                    {
                        ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                ?>  
                <form action="./code.php" method="post" enctype="multipart/form-data">
                <input type="text" name="title" placeholder="Title">
                 <select name="cat" required>
                     <option value = "">Select Category</option>
                        <?php
                        while($data = mysqli_fetch_array($run))
                        {
                            echo "<option value='$data[1]'>$data[1]</option>";
                        }
                        ?>    
                  </select>
                   <input type="text" name="body" placeholder="body">
                    <div class="form_control">
                        <label for="thumbnail">Add Thumbnail</label>
                        <input type="file" name="postfile" required>
                    </div>
                    <input type="email" name="email" placeholder="email" required>
                    <label for="thumbnail">Date of post</label>
                    <input type="date" name= "datepost">  
                    <input type="submit" name="submit" class="signupbtn" value="ADD POST to MW">
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