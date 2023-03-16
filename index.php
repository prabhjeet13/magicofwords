<?php
 require_once './admin/link.php';
 $sql = "SELECT * FROM posts";
 $all_posts = $conn->query($sql);   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Blogs</title>
    
    <link rel="stylesheet" href="./authors/css/style.css">


    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<style>
    section.post {   
    margin-top: 8rem;
}
.post_container{
    display: grid;
    grid-template-columns: repeat(3,1fr);
    gap: 2rem;
    margin-bottom: 5rem;
} 
.post_thumbnail{
    border-radius: 5rem;
    border: 1rem solid #2c3333;
    overflow: hidden;
    margin-bottom: 1.6rem; 
}

.post_author{
    display: flex;
    gap: 1rem;
    margin-top: 1.2rem;
}

    </style>
</head>
<body>
    <nav>
        <div class="container nav_container">
            <a href="index.html" class="nav_logo">MAGIC OF WORDS</a>
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
                                <h5>By:Prabhjeet</h5>
                                <small><?php echo $row["date"];  ?></small>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <?php } ?>
        </section>
<!-- end post -->

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
            <small>Copyright &copy; WORDS OF MAGIC</small>
        </div>
    </footer>

</body>
</html>