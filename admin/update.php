<?php  
    @include './link.php';
    $query = "SELECT postid,title,category,authorname FROM all_posts";
    $s=mysqli_query($conn,$query);
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

        .blogs{
            margin-top:10%;
            
        }
        table {
            border:2px solid red;
            margin-left:auto;
            margin-right:auto;
        }
        th {
            border:2px solid red;
            width:5rem;
            height: 10px;
            background: grey;
            color:black;
            margin:1rem;
            padding:1rem;
        }
        td{
            border:2px solid red;
            width:5rem;
            height:20px;
            margin:2rem;
            padding:2rem;
        }
        button.edit {
            background:green;
            color:white;
            width:5rem;
            height:20px;
        }
        button.delete {
            background:red;
            color:white;
            width:5rem;
            height:20px;
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

    
    <section class="blogs">

        <div class="blogs-table">
            <table>
                <tr>
                    <th>Post Id</th>
                    <th>Title</th>      
                    <th>Category</th>      
                    <th>Author Name</th>
                    <th>Edit</th>
                    <th>Delete</th>      
                </tr>    
    
                
                <?php
                while($row = mysqli_fetch_array($s)) {

                ?>

                <tr>
                    <td><?php echo $row["postid"]; ?> </td>
                    <td><?php echo $row["title"]; ?> </td>
                    <td><?php echo $row["category"]; ?> </td>
                    <td><?php echo $row["authorname"]; ?> </td>
                    <td><a href="edit_post.php?postid=<?php echo $row["postid"];?>"><button class="edit">EDIT</button></td>
                    <td><a href="delete_post.php?postid=<?php echo $row["postid"];?>"><button class="delete">DELETE</button></td>
                </tr>
                <?php } ?>
            </table>
        </div>

    </section>




</body>
</html>