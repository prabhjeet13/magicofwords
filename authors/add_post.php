<?php
@include './connection.php';
$sqlquery = " SELECT * FROM category_info";
$run = mysqli_query($conn,$sqlquery);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Blogs</title>
    
    <link rel="stylesheet" href="../css/styl.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
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
    <section class="form_section-container">
        <div class="container form_section-container">
            <h2>Add Post</h2>

                <form action="./codetoaddpost.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="author" placeholder="author name">        
                    <input type="text" name=" title" placeholder="Title">
                    <select name="category" required>
                        <option value="">Select Category </option>
                        <?php
                        while($data = mysqli_fetch_array($run))    
                        {
                            echo "<option value='$data[1]'>$data[1]</option>";
                        }
                        ?>
                    </select>
                    <input type="text" name = "body" placeholder="body">
                    <div class="form_control">
                        <label for="thumbnail">Add Thumbnail</label>
                        <input type="file" name="addthumbnail" if="thumbnail" required>
                    </div>
                    <input type="email" name="email" placeholder="email" required>    
                    <input type="submit" name = "submit" value="Add Post to MW" class="signupbtn">
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