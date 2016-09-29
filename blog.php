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
                echo data_iterator($bloglist_data);
                ?>
            </main>
        </div>
    </body>
</html>
