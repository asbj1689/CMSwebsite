<?php
    session_start();
    require_once('includes/connection.php');

    if(isset($_GET['id'])){

        $id = $_GET['id']; 
    
        if(!isset($_GET['confirm'])){
            $confirm = "Confirm to delete the post?";
        }
        else{
            // Delete record from database table
            $sql = "DELETE FROM posts WHERE id = {$id}";
            $result = $con->query($sql);
            header("Location: posts.php");
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <title>Delete Post</title>
</head>
<body>
    <div class="page-wrapper">
        
        <!-- Admin menu included -->
        <?php include_once('includes/admin_menu.php') ?>
        <h1 class="page-title">Mini CMS | Delete Post</h1>
        <p>Confirm to delete the post?</p>
        <a href="post-delete.php?id=<?php echo $id ?>&confirm=true">Confirm</a>
        <a href="posts.php">Cancel</a>
    </div>
</body>
</html>