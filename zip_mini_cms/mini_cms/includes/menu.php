<?php
session_start();
include_once('admin/includes/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet"/>
    <title>Document</title>
</head>
<body>

<?php if(isset($_SESSION['id'])){ ?>
    <?php
if(!isset($_SESSION['id'])){
    header('Location: login.php');
}
?>
<header class="page-header">
            <nav class="admin-menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="posts.php">Posts</a></li>
                    <li><a href="admin/index.php">Dashboard</a></li>
                    <li><a href="admin/posts.php">Posts</a></li>
                    <li><a href="admin/users.php">Users</a></li>
                    <li><a href="admin/logout.php">Logout</a></li>
                </ul>
            </nav>
        </header>
<?php } ?>

<?php if(!isset($_SESSION['id'])){ ?>
    <header class="page-header">
                <nav class="admin-menu">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="posts.php">Posts</a></li>
                        <?php if(!isset($_SESSION['id'])){ ?>
                            <li><a href="login.php">Login</a></li>
                        <?php } ?>
                        <?php if(isset($_SESSION['id'])){ ?>
                            <li><a href="admin/logout.php">Logout</a></li>
                       <?php } ?>
                    </ul>
                </nav>
            </header>
<?php } ?>