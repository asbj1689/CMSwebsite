<?php
    session_start();
    include_once('includes/connection.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    if(isset($_POST['submit'])){

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];

        $sql = "UPDATE users SET
        firstname = '{$firstname}', 
        lastname = '{$lastname}',
        username = '{$username}',
        password = '{$password}',
        gender = '{$gender}'
        WHERE id = '{$id}'";

        $result = $con->query($sql);
        if(isset($result)){
            $status = "The user had been succesfully updated.";
        } else {
            $status = "Something went wrong. Please try again!";
        }

        header('Location: users.php');
    }

    $sql = "SELECT * FROM users WHERE id = '{$id}'";
    $result = $con->query($sql);
    $row = $result->fetch_object();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <title>User update</title>
</head>
<body>
    <div class="page-wrapper">
        
        <!-- Admin menu included -->
        <?php include_once('includes/admin_menu.php') ?>

        <main class="page-content">
            <div class="inner-wrapper-narrow">
                <h1 class="page-title">Mini CMS | Update User</h1>
                <p>In this section you can update users</p>
            <form action="user-update.php?id=<?php echo $row->id; ?>" method="post">
                <div class="form-item">
                    <label for="firstname" class="label">Firstname:</label>
                    <div class="field">
                        <input name="firstname" type="text" id="firstname" value="<?php echo $row->firstname; ?>">
                    </div>
                </div>
                <div class="form-item">
                    <label for="lastname" class="label">Lastname:</label>
                    <div class="field">
                        <input name="lastname" type="text" id="lastname" value="<?php echo $row->lastname; ?>">
                    </div>
                </div>
                <div class="form-item">
                    <label for="username" class="label">Username:</label>
                    <div class="field">
                        <input name="username" type="text" id="username" value="<?php echo $row->username; ?>">
                    </div>
                </div>
                <div class="form-item">
                    <label for="password" class="label">Password:</label>
                    <div class="field">
                        <input name="password" type="password" id="password" value="<?php echo $row->password; ?>">
                    </div>
                </div>
                <div class="form-item">
                    <label for="gender" class="label">Gender:</label>
                    <div class="field">
                        <input name="gender" type="text" id="gender" value="<?php echo $row->gender; ?>">
                    </div>
                </div>
                <button type="submit" name="submit">Update user</button>
            </form>
            </div>
        </main>
    </div>
</body>
</html>