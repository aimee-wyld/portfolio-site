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
                $result = mysqli_query($con, 'SELECT `id`, `name`, `slug`, `desc`, `tags`, `date_created` FROM `articles`;');
                $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
                mysqli_close($con);

                $i = 0;
                foreach ($data[$i] as $key => $value) {
                    echo '<div class="blog-rows"><h2 class="blog-text"><a href=article.php?blog=' . $data[$i]['slug'] . '>' . $data[$i]['name'] . '</a></h2><p id="blog-desc" class="blog-text">' . $data[$i]['desc'] . '<a href=article.php?blog=' . $data[$i]['slug'] . '><i>Read more</i>' . '</a></p><h5 class="blog-text">' . $data[$i]['tags'] . '</h5><h5 class="blog-text">' . $data[$i]['date_created'] . '</h5></div>';
                    $i ++;
                }
                ?>
            </main>
        </div>
    </body>
</html>
