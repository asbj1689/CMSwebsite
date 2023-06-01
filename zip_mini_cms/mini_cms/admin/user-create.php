<?php
    session_start();
    require_once('includes/connection.php');
    if(isset($_POST['submit'])){

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];

        $sql = "INSERT INTO users (firstname, lastname, username, password, gender, created)
        VALUES ('{$firstname}', '{$lastname}', '{$username}', '{$password}', '{$gender}', NOW())";

        $result = $con->query($sql);
        header('Location: users.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <title>User create</title>
</head>
<body>
    <div class="page-wrapper">
        
        <!-- Admin menu included -->
        <?php include_once('includes/admin_menu.php') ?>

        <main class="page-content">
            <div class="inner-wrapper-narrow">
                <h1 class="page-title">Mini CMS | Create User</h1>
                <p>In this section you can create users</p>
            <form action="user-create.php" method="post">
                <div class="form-item">
                    <label for="firstname" class="label">Firstname:</label>
                    <div class="field">
                        <input name="firstname" type="text" id="firstname" value="">
                    </div>
                </div>
                <div class="form-item">
                    <label for="lastname" class="label">Lastname:</label>
                    <div class="field">
                        <input name="lastname" type="text" id="lastname" value="">
                    </div>
                </div>
                <div class="form-item">
                    <label for="username" class="label">Username:</label>
                    <div class="field">
                        <input name="username" type="text" id="username" value="">
                    </div>
                </div>
                <div class="form-item">
                    <label for="password" class="label">Password:</label>
                    <div class="field">
                        <input name="password" type="password" id="password" value="">
                    </div>
                </div>
                <div class="form-item">
                    <label for="gender" class="label">Gender:</label>
                    <div class="field">
                        <input name="gender" type="text" id="gender" value="">
                    </div>
                </div>
                <button type="submit" name="submit">Create user</button>
            </form>
            </div>
        </main>
    </div>
</body>
</html>