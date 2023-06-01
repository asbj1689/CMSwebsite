<?php
include_once('includes/menu.php');
if(isset($_GET['id'])){
    $post_id = $_GET['id']; 
}
$sql = "SELECT * FROM posts WHERE id = '{$post_id}'";
$result = $con->query($sql);
$row = $result->fetch_object();
?>
<div class="post-page-wrapper">
    <div class="page-wrapper">
        <div class="post-image" style="background-image: url('uploads/<?php echo $row->post_image; ?>')"></div>
    <main class="page-content">
        <div class="posts">
                <article class="post">
                    <!-- <img src="uploads/<?php // echo $row->post_image; ?>" alt="<?php // echo $row->post_image; ?>" class="post-image"> -->
                    <div class="post-text">
                    <div class="post-title"><?php echo $row->post_title; ?></div>
                    <div class="post-author">
                        <?php echo "By {$row->post_author} {$row->post_author}" ?> |
                        <?php echo $row->post_published; ?>
                    </div>
                    <div class="post-content"><?php echo $row->post_content; ?></div>                                                                                   
                </article>
        </div>
        </main>
    </div>
</div>
</body>
</html>