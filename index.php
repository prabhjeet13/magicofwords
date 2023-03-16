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
    gap: 5rem;
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
    <div class="container post_container">
        <article class="post">
            <div class="post_thumbnail">
                <img src="/images/nature1.jpg" >
            </div>
            <div class="post_info">
                <a href="" class="category_button">Flower</a>
                <h3 class="post_title">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, fuga inventore ratione, dignissimos odit, nihil possimus molestiae at aliquid rerum enim distinctio labore quo dicta? 
                </h3>
                <p class="post_body"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident unde exercitationem nemo deleniti possimus repellat quibusdam at ullam maxime, quae iure doloremque illo? </p>
                
                <div class="post_author">
                    <div class="post_author-info">
                        <h5>By:Laxmi</h5>
                        <small>june 13,2032 - 08-40</small>
                    </div>
                </div>
            </div>
        </article>

        <article class="post">
            <div class="post_thumbnail">
                <img src="/images/nature.jpg" >
            </div>
            <div class="post_info">
                <a href="" class="category_button">Nature</a>
                <h3 class="post_title">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, fuga inventore ratione, dignissimos odit, nihil possimus molestiae at aliquid rerum enim distinctio labore quo dicta? 
                </h3>
                <p class="post_body"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident unde exercitationem nemo deleniti possimus repellat quibusdam at ullam maxime, quae iure doloremque illo? </p>
                
                <div class="post_author">
                    <div class="post_author-info">
                        <h5>By:Laxmi</h5>
                        <small>june 13,2032 - 08-40</small>
                    </div>
                </div>
            </div>
        </article>
        
        <article class="post">
            <div class="post_thumbnail">
                <img src="/images/fountain.jpg" >
            </div>
            <div class="post_info">
                <a href="" class="category_button">Fountain</a>
                <h3 class="post_title">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, fuga inventore ratione, dignissimos odit, nihil possimus molestiae at aliquid rerum enim distinctio labore quo dicta? 
                </h3>
                <p class="post_body"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident unde exercitationem nemo deleniti possimus repellat quibusdam at ullam maxime, quae iure doloremque illo? </p>
                
                <div class="post_author">
                    <div class="post_author-info">
                        <h5>By:Laxmi</h5>
                        <small>june 13,2032 - 08-40</small>
                    </div>
                </div>
            </div>
        </article>
        
        <article class="post">
            <div class="post_thumbnail">
                <img src="/images/nature.jpg" >
            </div>
            <div class="post_info">
                <a href="" class="category_button">Nature</a>
                <h3 class="post_title">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, fuga inventore ratione, dignissimos odit, nihil possimus molestiae at aliquid rerum enim distinctio labore quo dicta? 
                </h3>
                <p class="post_body"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident unde exercitationem nemo deleniti possimus repellat quibusdam at ullam maxime, quae iure doloremque illo? </p>
                
                <div class="post_author">
                    <div class="post_author-info">
                        <h5>By:Laxmi</h5>
                        <small>March 13,2032 - 08-40</small>
                    </div>
                </div>
            </div>
        </article>
        
        <article class="post">
            <div class="post_thumbnail">
                <img src="/images/animal.jpg" >
            </div>
            <div class="post_info">
                <a href="" class="category_button">Animal</a>
                <h3 class="post_title">
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, fuga inventore ratione, dignissimos odit, nihil possimus molestiae at aliquid rerum enim distinctio labore quo dicta? 
                </h3>
                <p class="post_body"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident unde exercitationem nemo deleniti possimus repellat quibusdam at ullam maxime, quae iure doloremque illo? </p>
                
                <div class="post_author">
                    <div class="post_author-info">
                        <h5>By:Prabhjeet</h5>
                        <small>November 18,2032 - 12:40</small>
                    </div>
                </div>
            </div>
        </article>

    </div>
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