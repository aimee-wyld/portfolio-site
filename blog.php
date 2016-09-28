<?php
require 'includes/functions.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>A Wyld | Blog</title>
        <?php
        require 'includes/links.php';
        ?>
    </head>
    <body>
        <div class="content">
            <?php
            $selected_page = 'blog';
            require 'includes/nav.php'
            ?>
            <main id="blog" class="about-box border">
                <?php
                $con = database_connect($database);
                $query_bloglist = 'SELECT `id`, `name`, `slug`, `desc`, `tags`, `date_created` FROM `articles`;';
                $bloglist_data = query_into_array($con, $query_bloglist);

                $i = 0;
                foreach ($bloglist_data[$i] as $key => $value) {
                    echo '<div class="blog-rows"><h2 class="blog-text"><a href=article.php?blog=' . $bloglist_data[$i]['slug'] . '>' . $bloglist_data[$i]['name'] . '</a></h2><p id="blog-desc" class="blog-text">' . $bloglist_data[$i]['desc'] . '<a href=article.php?blog=' . $bloglist_data[$i]['slug'] . '><i>Read more</i>' . '</a></p><h5 class="blog-text">' . $bloglist_data[$i]['tags'] . '</h5><h5 class="blog-text">' . $bloglist_data[$i]['date_created'] . '</h5></div>';
                    $i ++;
                }
                ?>
            </main>
        </div>
    </body>
</html>
