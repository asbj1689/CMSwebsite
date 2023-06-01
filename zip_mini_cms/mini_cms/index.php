<?php
include_once('includes/menu.php');
$sql = "SELECT * FROM posts ORDER BY post_published DESC LIMIT 5";
$result = $con->query($sql);
?>
<div class="home-page-wrapper">
    <div class="page-wrapper">
    <section class="page-hero">
      <h1 class="page-hero-title">Mini cms</h1>
    </section>
    <main class="page-content">
        <h2 class="page-title-sub">Latest posts</h2>
        <div class="posts">
            <?php while($row = $result->fetch_object()){ ?>
                <article class="post">
                    <!-- <img src="uploads/<?php // echo $row->post_image; ?>" alt="<?php // echo $row->post_image; ?>" class="post-image"> -->
                    
                    <div class="post-image" style="background-image: url('uploads/<?php echo $row->post_image; ?>')"></div>
                    <div class="post-text">
                    <div class="post-title"><?php echo $row->post_title; ?></div>
                    <div class="post-author">
                        <?php echo "By {$row->post_author} {$row->post_author}" ?> |
                        <?php echo $row->post_published; ?>
                    </div>                                                           
                    <a href="post.php?id=<?php echo $row->id; ?>" class="post-btn">Read more</a>                            
                    </div>
                </article>
           <?php } ?>
        </div>
        </main>
    </div>
</div>
</body>
</html>