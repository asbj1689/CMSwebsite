<?php
    session_start();
    require_once('includes/connection.php');
    if(isset($_POST['submit'])){

        $title = $_POST['title'];
        $image = $_POST['image'];
        $resume = $_POST['resume'];
        $content = $_POST['content'];
        $author = $_POST['author'];

        $sql = "INSERT INTO posts (post_title, post_image, post_resume, post_content, post_author, post_published)
        VALUES ('{$title}', '{$image}', '{$resume}', '{$content}', '{$author}', NOW())";

        $result = $con->query($sql);
        header('Location: posts.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <title>Post create</title>
</head>
<body>
    <div class="page-wrapper">
        
        <!-- Admin menu included -->
        <?php include_once('includes/admin_menu.php') ?>

        <main class="page-content">
            <div class="inner-wrapper-narrow">
                <h1 class="page-title">Mini CMS | Create Post</h1>
                <p>In this section you can create posts</p>
            <form action="post-create.php" method="post">
                <div class="form-item">
                    <label for="title" class="label">Title:</label>
                    <div class="field">
                        <input name="title" type="text" id="title" value="">
                    </div>
                </div>
                <div class="form-item">
                    <label for="image" class="label">Image:</label>
                    <div class="field">
                        <input name="image" type="text" id="image" value="">
                    </div>
                </div>
                <div class="form-item">
                    <label for="resume" class="label">Resume:</label>
                    <div class="field">
                        <input name="resume" type="text" id="resume" value="">
                    </div>
                </div>
                <div class="form-item">
                    <label for="content" class="label">Content:</label>
                    <div class="field">
                        <input name="content" type="text" id="content" value="">
                    </div>
                </div>
                <div class="form-item">
                    <label for="author" class="label">Author:</label>
                    <div class="field">
                        <input name="author" type="text" id="author" value="">
                    </div>
                </div>
                <button type="submit" name="submit">Create Post</button>
            </form>
            </div>
        </main>
    </div>
</body>
</html>