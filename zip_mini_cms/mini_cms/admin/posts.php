<?php
    session_start();
    include_once('includes/connection.php');
    $sql = "SELECT * FROM posts ORDER BY post_published DESC";
    $result = $con->query($sql); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <title>Posts</title>
</head>
<body>
    <div class="page-wrapper">
        
        <!-- Admin menu included -->
        <?php include_once('includes/admin_menu.php') ?>

        <main class="page-content">
            <h1 class="page-title">Mini CMS | Posts</h1>
            <p>In this section you can create, edit and delete Posts</p>

                <!-- Users -->
                <h2 class="page-title-sub">Latest Posts</h2>
                <div class="btn-group">
                    <a href="post-create.php" class="action-btn">Create Post</a>
                </div>
                <table class="admin-table">
                    <thead>
                        <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Published</th>
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
        </main>
    </div>
</body>
</html>