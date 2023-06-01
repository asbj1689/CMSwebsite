    <?php
    session_start();
    include_once('includes/connection.php');
    $sql = "SELECT * FROM users ORDER BY created DESC";
    $result = $con->query($sql); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <title>Users</title>
</head>
<body>
    <div class="page-wrapper">
        
        <!-- Admin menu included -->
        <?php include_once('includes/admin_menu.php') ?>

        <main class="page-content">
            <h1 class="page-title">Mini CMS | Users</h1>
            <p>In this section you can create, edit and delete users</p>

                <!-- Users -->
                <h2 class="page-title-sub">Latest users</h2>
                <div class="btn-group">
                    <a href="user-create.php" class="action-btn">Create user</a>
                </div>
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
                        <?php while($row = $result->fetch_object()){ ?>
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