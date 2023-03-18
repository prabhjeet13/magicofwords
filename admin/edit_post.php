<?php 
@include './link.php';
session_start();
$query ="SELECT * FROM category_info";
$run = mysqli_query($conn,$query);
?>

<?php
@include './link.php';
session_start();
if(isset($_POST['edit'])) {
    $id =$_POST['postid'];

    $que = " UPDATE all_posts SET title='$_POST[title]', category = '$_POST[category]', body ='$_POST[body]' WHERE postid = '$_POST[postid]'";
    
    $query_run = mysqli_query($conn,$que);
    if($query_run) {
        
        ?>
    
    <script>
        alert("Successfully Updated");
        window.location.href='./update.php';
    </script>
<?php 
}
else {
    ?>
    <script>
        alert("Not Updated");
        window.location.href='./update.php?error';
    </script>
<?php 
}
}

$result = mysqli_query($conn,"SELECT * FROM all_posts where postid = '".$_GET['postid']."'");
$row = mysqli_fetch_array($result);
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
            <h2>Edit Post</h2>

            <form action="" method="post">
                <input type="text" name="postid" value="<?php echo $row["postid"];?>">        
                <input type="text" name="title" value="<?php echo $row["title"];?>">
                <select name="category">
                <option value="">Select Category</option>
                <?php
                while($data = mysqli_fetch_array($run))
                {
                    echo "<option value='$data[1]'>$data[1]</option>";
                }
                ?>
                </select>
                <input type="text" name="body" value="<?php echo $row["body"];?>"> 
                <input type="submit" name="edit" class="signupbtn" id="edit" value="Edit Post">                    
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