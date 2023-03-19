<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Blogs</title>
    <link rel="stylesheet" href="./css/styl.css">

    

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
<!-- navbar -->
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

<!-- end of nav bar -->

    <section class="contact">
        <div class="over">
            <div class="container">
                <h1>Contact US!</h1>
            <form action="https://formspree.io/f/mvonqvkp" method="POST">
            <input type = "text" name = "Name" placeholder="Your Name" required/>

            <input type = "email" name  = "email" placeholder="Your Email" required/>
            
            <input type = "text"  name = "subject" placeholder="Your Subject" required/>
            
            <textarea name="message" rows="10" cols="40" id="Your Message" required></textarea>
            
            <input type= "submit" value="SUBMIT" class = "contactsubmit contactbtn">
            </form>
            </div>
        </div>
    </section>
</body>
</html>       