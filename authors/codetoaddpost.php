<?php 
    @include './connection.php';
    session_start();

    if(isset($_POST['submit'])) {
        $author = $_POST['author'];
        $title = $_POST['title'];
        $cat = $_POST['category'];
        $body = $_POST['body'];
        $image = $_FILES['addthumbnail']['name'];
        $email = $_POST['email'];
    
        $query = "INSERT INTO all_posts(title,category,body,postimage,email,date,authorname) VALUE('$title','$cat','$body','$image','$email',NOW(),'$author')";
        $run = mysqli_query($conn,$query);

        if($run)
        {
            move_uploaded_file($_FILES["addthumbnail"]["tmp_name"],"../admin/upload/".$_FILES["addthumbnail"]["name"]);
            $_SESSION['status'] = "IMAGE STORE SUCCESSFULLY";
            header('location:./add_post.php');
        }
        else {
            $_SESSION['status'] = "IMAGE NOT STORED";
            header('location:./add_post.php');
        }
    }    
?>
