<?php
require 'includes/functions.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>A Wyld | Article</title>
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
            <div class="article about-box border">
                <?php
                $con = database_connect($database);
                $url = $_GET['blog'];
                $query_blog_article = 'SELECT `id`, `name`, `body`, `date_created` FROM `articles` WHERE `slug`="' . $url . '";';
                $article_data = query_into_array($con, $query_blog_article);

                echo '<div class="blog-rows"><h1 class="blog-text">' . $article_data[0]['name'] . '</h1><h3>' . $article_data[0]['date_created'] . '</h3><p id="blog-desc" class="blog-text">' . $article_data[0]['body'] . '</p></div>';
                ?>
            </div>
            <div class="article article2 about-box border">
                <h3 class="blog-text blog-title">Recent Blogs:</h3>
                <?php
                $con = database_connect($database);
                $query_blog_recent = 'SELECT `id`, `name`, `slug`, `desc`, `tags`, `date_created` FROM `articles` ORDER BY `date_created` DESC LIMIT 3;';
                $recent_data = query_into_array($con, $query_blog_recent);

                $i = 0;
                while ($i <= 2) {
                    echo '<div class="blog-rows"><h2 class="blog-text"><a href=article.php?blog=' . $recent_data[$i]['slug'] . '>' . $recent_data[$i]['name'] . '</a></h2><h5 class="blog-text">' . $recent_data[$i]['tags'] . '</h5><h5 class="blog-text">' . $recent_data[$i]['date_created'] . '</h5></div>';
                    $i++;
                }
                ?>
            </div>
        </div>
    </body>
</html>

