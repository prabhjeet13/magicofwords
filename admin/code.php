<?php 
    @include './link.php';
     session_start();   
    if(isset($_POST['submit']))
    {
        $author = $_POST['author']; 
        $title = $_POST['title'];
        $cat  = $_POST['cat'];
        $body = $_POST['body'];
        $image = $_FILES['postfile']['name'];
        $email = $_POST['email'];
        // $postdate = date('y-m-d',strtotime($_POST['datepost']));     
        $query = "INSERT INTO all_posts(title,category,body,postimage,email,date,authorname) VALUES('$title','$cat','$body','$image','$email',NOW(),'$author')";

        $run = mysqli_query($conn,$query);

        if($run) {
            
            move_uploaded_file($_FILES["postfile"]["tmp_name"], "./upload/".$_FILES["postfile"]["name"]);
            $_SESSION['status'] = "IMAGE STORED SUCCESSFULLY";
            header('location:./add_post.php');
        }
        else {
            $_SESSION['status'] = "IMAGE STORED NOT SUCCESSFULLY";
            header('location:./add_post.php');
        }    

    }    
    ?>