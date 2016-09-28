<!DOCTYPE html>
<html>
    <head>
        <title>A Wyld | Article</title>
        <link rel="stylesheet" type="text/css" href="css/global.css">
        <link rel="stylesheet" type="text/css" href="css/grid.css">
        <link rel="stylesheet" type="text/css" href="css/nav.css">
        <link rel="stylesheet" type="text/css" href="css/typography.css">
        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="icon" href="images/favicon.jpg" type="image/jpg" sizes="16x16">
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
            <div class="article about-box border">
                <?php
                $con = mysqli_connect("192.168.20.56","root","","my_blog");
                if (mysqli_connect_errno()) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
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

