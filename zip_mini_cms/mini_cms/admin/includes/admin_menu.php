<?php
if(!isset($_SESSION['id'])){
    header('Location: ../login.php');
}
?>
<header class="page-header">
            <nav class="admin-menu">
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../posts.php">Posts</a></li>
                    <li><a href="index.php">Dashboard</a></li>
                    <li><a href="posts.php">Posts</a></li>
                    <li><a href="users.php">Users</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </header>