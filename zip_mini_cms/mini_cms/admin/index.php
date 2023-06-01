    <?php
    session_start();
    include_once('includes/connection.php');
    $sql = "SELECT * FROM posts ORDER BY post_published DESC LIMIT 3";
    $result = $con->query($sql);
    $sql2 = "SELECT * FROM users ORDER BY created DESC LIMIT 3";
    $result2 = $con->query($sql2); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <title>Document</title>
</head>
<body>
    <div class="page-wrapper">
    
    <!-- Admin menu included -->
    <?php include_once('includes/admin_menu.php') ?>

        <main class="page-content">
            <h1 class="page-title">Mini CMS | Dashboard</h1>
            <p>In this section you can create, edit and delete users</p>

                <!-- Posts -->
                <h2 class="page-title-sub">Latest posts</h2>
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Post title</th>
                            <th>Post author</th>
                            <th>Post published</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = $result->fetch_object()){ ?>
                                <tr>
                                    <td><?php echo $row->post_title; ?></td>
                                    <td><?php echo $row->post_author; ?></td>
                                    <td><?php echo $row->post_published; ?></td>
                                    <td><a href="post-update.php?id=<?php echo $row->id; ?>">Edit</a></td>
                                    <td><a href="post-delete.php?id=<?php echo $row->id; ?>">Delete</a></td>
                                </tr>
                           <?php } ?>
                    </tbody>
                </table>

                <!-- Users -->
                <h2 class="page-title-sub">Latest users</h2>
                <table class="admin-table">
                    <thead>
                        <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Username</th>
                        <th>Created</th>
                        <th>Gender</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = $result2->fetch_object()){ ?>
                                    <tr>
                                        <td><?php echo $row->firstname; ?></td>
                                        <td><?php echo $row->lastname; ?></td>
                                        <td><?php echo $row->username; ?></td>
                                        <td><?php echo $row->created; ?></td>
                                        <td><?php echo $row->gender; ?></td>
                                        <td><a href="user-update.php?id=<?php echo $row->id; ?>">Edit</a></td>
                                        <td><a href="user-delete.php?id=<?php echo $row->id; ?>">Delete</a></td>
                                    </tr>
                            <?php } ?>
                    </tbody>
                </table>
        </main>
    </div>
</body>
</html>