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
                $url = $_GET['blog'];
                $result = mysqli_query($con, 'SELECT `id`, `name`, `body`, `date_created` FROM `articles` WHERE `slug`="' . $url . '";');
                $database = mysqli_fetch_all($result, MYSQLI_ASSOC);
                $result2 = mysqli_query($con, 'SELECT `id`, `name`, `slug`, `desc`, `tags`, `date_created` FROM `articles` ORDER BY `date_created` DESC LIMIT 3;');
                $recent_database = mysqli_fetch_all($result2, MYSQLI_ASSOC);
                mysqli_close($con);
                echo '<div class="blog-rows"><h1 class="blog-text">' . $database[0]['name'] . '</h1><h3>' . $database[0]['date_created'] . '</h3><p id="blog-desc" class="blog-text">' . $database[0]['body'] . '</p></div>';
                ?>
            </div>
            <div class="article article2 about-box border">
                <h3 class="blog-text blog-title">Recent Blogs:</h3>
                <?php
                $i = 0;
                while ($i <= 2) {
                    echo '<div class="blog-rows"><h2 class="blog-text"><a href=article.php?blog=' . $recent_database[$i]['slug'] . '>' . $recent_database[$i]['name'] . '</a></h2><h5 class="blog-text">' . $recent_database[$i]['tags'] . '</h5><h5 class="blog-text">' . $recent_database[$i]['date_created'] . '</h5></div>';
                    $i++;
                }
                ?>
            </div>
        </div>
    </body>
</html>

