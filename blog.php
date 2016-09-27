<!DOCTYPE html>
<html>
    <head>
        <title>A Wyld | Blog</title>
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
            <main id="portfolio-main" class="about-box border">
                <?php
                $con = mysqli_connect("192.168.20.56","root","","my_blog");
                if (mysqli_connect_errno()) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                $database = mysqli_query($con, 'SELECT id, name, slug, desc, tags, date_created FROM articles');
                $returned_database = mysqli_fetch_all($database, MYSQLI_ASSOC);
                mysqli_close($con);
                
                ?>
            </main>
        </div>
    </body>
</html>
