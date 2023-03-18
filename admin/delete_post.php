<?php 
@include './link.php';

$qu = " DELETE FROM all_posts WHERE postid = '".$_GET["postid"]."'";
$query_run = mysqli_query($conn,$qu);
if($query_run)
{
    ?>
    <script>
        alert("Successfull Deleted");
        window.location.href="./update.php?success";
    </script>
    <?php
}
else {
    ?>
    <script>
        alert("NOT DELETED");
        window.location.href="./update.php?error";
    </script>
    <?php
}

?>