<?php
 require_once './admin/link.php';
 $sql = "SELECT * FROM all_posts";
 $all_posts = $conn->query($sql);   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Blogs</title>
    
    <link rel="stylesheet" href="./css/styl.css">


    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="container nav_container">
            <a href="./index.php" class="nav_logo">MAGIC OF WORDS</a>
            <ul class="nav_items">
                <li> <a href="./explore.php">Explore</a></li>
                <li> <a href="./authors/login.php">Sign In</a></li>
                <li> <a href="./aboutus.php">About Us</a></li>
                <li> <a href="./contactus.php">Contact Us</a></li>
            </ul>
        </div>
    </nav>
    <!-- end nav -->
<!-- --------------------------------------- -->
 
        <section class="post"> 
            <?php 
                while($row = mysqli_fetch_assoc($all_posts)) {
                ?>
            <div class="container post_container">
                <article class="post">
                    <div class="post_thumbnail">
                        <img src="./admin/upload/<?php echo $row["postimage"]; ?>">
                    </div>  
                    <div class="post_info">
                        <a href="" class="category_button"> <?php echo $row["category"];  ?> </a>
                        <h3 class="post_title">
                          <?php echo $row["title"]; ?>  
                        </h3>
                        <p class="post_body"> <?php echo $row["body"];  ?> </p>
                        
                        <div class="post_author">
                            <div class="post_author-info">
                                <h5>By:<?php echo $row["authorname"];  ?></h5>
                                <small><?php echo $row["date"];  ?></small>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <?php } ?>
        </section>
<!-- end post -->


    <footer>
        <div class="footer_copyright">
            <small>Copyright &copy; WORDS OF MAGIC</small>
        </div>
    </footer>

</body>
</html>