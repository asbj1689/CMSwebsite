<?php
    session_start();
    require_once('includes/connection.php');

    if(isset($_GET['id'])){

        $id = $_GET['id']; 
    
        if(!isset($_GET['confirm'])){
            $confirm = "Confirm to delete the user?";
        }
        else{
            // Delete record from database table
            $sql = "DELETE FROM users WHERE id = {$id}";
            $result = $con->query($sql);
            header("Location: users.php");
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
    <title>Delete user</title>
</head>
<body>
    <div class="page-wrapper">
        
        <!-- Admin menu included -->
        <?php include_once('includes/admin_menu.php') ?>
        <h1 class="page-title">Mini CMS | Delete User</h1>
        <p>Confirm to delete the user?</p>
        <a href="user-delete.php?id=<?php echo $id ?>&confirm=true">Confirm</a>
        <a href="users.php">Cancel</a>
    </div>
</body>
</html>