<?php
    session_start();
    include_once('includes/connection.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    if(isset($_POST['submit'])){

        $title = $_POST['title'];
        $author = $_POST['author'];
        $published = $_POST['published'];

        $sql = "UPDATE posts SET
        post_title = '{$title}', 
        post_author = '{$author}',
        post_published = '{$published}'
        WHERE id = '{$id}'";

        $result = $con->query($sql);
        if(isset($result)){
            $status = "The post had been succesfully updated.";
        } else {
            $status = "Something went wrong. Please try again!";
        }

        header('Location: posts.php');
    }

    $sql = "SELECT * FROM posts WHERE id = '{$id}'";
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
    <title>Post update</title>
</head>
<body>
    <div class="page-wrapper">
        
        <!-- Admin menu included -->
        <?php include_once('includes/admin_menu.php') ?>

        <main class="page-content">
            <div class="inner-wrapper-narrow">
                <h1 class="page-title">Mini CMS | Update Posts</h1>
                <p>In this section you can update Posts</p>
            <form action="post-update.php?id=<?php echo $row->id; ?>" method="post">
                <div class="form-item">
                    <label for="title" class="label">Title:</label>
                    <div class="field">
                        <input name="title" type="text" id="title" value="<?php echo $row->post_title; ?>">
                    </div>
                </div>
                <div class="form-item">
                    <label for="author" class="label">Author:</label>
                    <div class="field">
                        <input name="author" type="text" id="author" value="<?php echo $row->post_author; ?>">
                    </div>
                </div>
                <div class="form-item">
                    <label for="published" class="label">Published:</label>
                    <div class="field">
                        <input name="published" type="text" id="published" value="<?php echo $row->post_published; ?>">
                    </div>
                </div>
                <button type="submit" name="submit">Update post</button>
            </form>
            </div>
        </main>
    </div>
</body>
</html>