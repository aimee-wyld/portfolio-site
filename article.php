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
            require 'includes/nav.php';
            ?>
            <div class="article about-box border">
                <?php
                $con = database_connect($database);
                $query_blog_article = 'SELECT `id`, `name`, `body`, `date_created` 
                                       FROM `articles` 
                                       WHERE `slug`="' . $_GET['blog'] . '"';
                $article_data = query_into_array($con, $query_blog_article);
                echo '<div class="blog-rows">
                            <h2 class="blog-text underline">' . $article_data[0]['name'] . '</h2>
                            <h5 class="blog-text">' . $article_data[0]['date_created'] . '</h5>
                            <p id="blog-desc" class="blog-text">' . $article_data[0]['body'] . '</p>
                      </div>;'
                ?>
            </div>
            <div class="article article2 about-box border">
                <h4 class="blog-text blog-title">Most Recent Blogs:</h4>
                <h3 class="blog-text blog-title blog-link"><a href="blog.php"><i>Back to blog list</i></a></h3>
                <?php
                $con = database_connect($database);
                $query_blog_recent = 'SELECT `id`, `name`, `slug`, `desc`, `tags`, `date_created` 
                                      FROM `articles` 
                                      ORDER BY `date_created` 
                                      DESC LIMIT 3';
                $recent_data = query_into_array($con, $query_blog_recent);
                echo data_iterator($recent_data);
                ?>
            </div>
        </div>
    </body>
</html>

