<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Blogs</title>
    
    <link rel="stylesheet" href="./css/style.css">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
            .dashboard{
    margin-top:6rem;
}
.dashboard_container{
    width:75%;
    display:grid;
    grid-template-columns:14rem auto;
    gap:1rem;
    background-color: rgba(242,242,254,0.3);
    padding:2rem;
    margin-bottom:5rem;

}
.dashboard aside a{
    background-color: #2e4f4f;
    display:flex;
    gap:1rem;
    align-items:center;
    padding:1rem;

}
.dashboard aside ul li:not(last-child) a{
    border-bottom: 1px solid gray;

}
.dashboard aside a:hover{
    background-color: hsl(156,100%,38%,15%) ;
}
.dashboard aside a.active{
   background-color: #2e4f4f;


}
.dashboard main{
    margin-left:1.5rem;
}
.dashboard main h2{
    margin:0.2 2rem 0;
   line-height:1;
}
signupbtn.sm{
    padding:0.3rem 0.7rem;
    font-size:0.8rem;

}
.signupbtn.danger{
    background-color:red;
}
.signupbtn:hover{
    background-color: white;
    color:rgb(23, 26, 26);
}
.dashboard{
    margin-top:10rem;
}
.dashboard_container{
    width:75%;
    display:grid;
    grid-template-columns:14rem auto;
    gap:1rem;
    background-color: rgba(242,242,254,0.3);
    padding:2rem;
    margin-bottom:5rem;

}
.dashboard aside a{
    margin-top:1.0rem;
    background-color: #2e4f4f;
    display:flex;
    gap:1rem;
    align-items:center;
    padding:1rem;

}
.dashboard aside ul li:not(last-child) a{
    border-bottom: 1px solid gray;

}
.dashboard aside a:hover{
    background-color: hsl(156,100%,38%,15%) ;
}
.dashboard aside a.active{
   background-color: #2e4f4f;


}
.dashboard main{
    margin-left:1.5rem;
}
.dashboard main h2{
    margin:0.2 2rem 0;
   line-height:1;
}     
    </style>
</head>
<body>
    <nav>
        <div class="container nav_container">
            <a href="./afterUserlogin.php" class="nav_logo">MAGIC OF WORDS</a>
            <ul class="nav_items">
                <li class="nav_profile">

                    <div class="mw">
                        <a href="#" class="btn btn-primary">MW</a>
                    </div>
                    <ul>
                        <li><a href="./afterUserlogin.php">Dashboard</a></li>
                        <li><a href="../index.php">Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
  <div class=" container dashboard_container">
    <aside>
      <ul>
        <li>
          <a href="../authors/add_post.php"
            ><i class="uil uil-pen"></i>
            <h5>Add Post</h5>
          </a>
        </li>
        <!-- <li>
            <a href="dashboard.html"
              ><i class="uil uil-postcard"></i>
              <h5>Update  Posts</h5>
            </a>
          </li> -->
          
         
      </ul>
    </aside>
    <main>
        <h2>WELCOME AUTHORS IN THE MAGIC OF WORDS!!!</h4>
       
    </main>
  </div>
</section>
</body>
</html>    