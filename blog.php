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
            <nav>
                <a href="index.html">
                    <div>
                        <h2 class="titles">Home</h2>
                    </div>
                </a>
                <a href="project-about-me.html">
                    <div>
                        <h2 class="titles">About</h2>
                    </div>
                </a>
                <a href="project-contact.html">
                    <div>
                        <h2 class="titles">Contact</h2>
                    </div>
                </a>
                <a href="project-portfolio.html">
                    <div>
                        <h2 class="titles">Portfolio</h2>
                    </div>
                </a>
                <a href="blog.php" class="selected">
                    <div>
                        <h2 class="titles">Blog</h2>
                    </div>
                </a>
            </nav>
            <main id="blog" class="about-box border">
                <?php
                $con = mysqli_connect("192.168.20.56","root","","my_blog");
                if (mysqli_connect_errno()) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }

                $result = mysqli_query($con, 'SELECT `id`, `name`, `slug`, `desc`, `tags`, `date_created` FROM `articles`;');
                $database = mysqli_fetch_all($result, MYSQLI_ASSOC);
                mysqli_close($con);

                $i = 0;
                foreach ($database[$i] as $key => $value) {
                    echo '<div class="blog-rows"><h2 class="blog-text"><a href=article.php?blog=' . $database[$i]['slug'] . '>' . $database[$i]['name'] . '</a></h2><p id="blog-desc" class="blog-text">' . $database[$i]['desc'] . '<a href=article.php?blog=' . $database[$i]['slug'] . '><i>Read more</i>' . '</a></p><h5 class="blog-text">' . $database[$i]['tags'] . '</h5><h5 class="blog-text">' . $database[$i]['date_created'] . '</h5></div>';
                    $i ++;
                }
                ?>
            </main>
        </div>
    </body>
</html>
