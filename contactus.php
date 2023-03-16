<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Blogs</title>
    <link rel="stylesheet" href="./authors/css/style.css">

    

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
 <style>   
    section.contact .over {
        margin: 6%;
       
    }
    
    section.contact .over .container {
        width: 30%;
    }
    
    section.contact form input, section.contact form textarea {
        display: block;
        width: 100%;
        margin:0.2rem 0;
        padding:1.0rem;
        border-radius: 20px;
        /* background: transparent; */
        border:  2px solid white;  
    } 
    
    /* section.contact form input::placeholder, section.contact form textarea::placeholder {
        color: white;
    } */
    .contactsubmit {
        font-size: 1.0rem;
        display: inline-block;
        margin: 2rem 0;
        transition: all 300ms ease;
    } 
    
    section.contact form .contactbtn {
        width: 15rem;
        margin: 0.5rem auto;
        background: #2e4f4f;
        color: aliceblue;
    }
    .contactsubmit:hover {
        box-shadow: 0 1rem 1rem #525252;               
    }

</style>
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