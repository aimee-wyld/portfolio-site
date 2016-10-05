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
            require 'includes/nav.php';
            ?>
            <main id="blog" class="about-box border">
                <?php
                //connects to the specified database and assigns connection information to a variable.
                $con = new PDO("mysql:host=192.168.20.56; dbname=aimee","root","");

                //assigns a query for the overall blog list to a variable.
                $query_bloglist = 'SELECT `name`, `slug`, `desc`, `tags`, `date_created` 
                                   FROM `articles`;';

                //uses function to perform query on database and return the data as an array.
                $bloglist_data = query_into_array($con, $query_bloglist);

                //uses function to iterate over the array and echoes out specified information concatenated with html.
                echo data_iterator($bloglist_data);
                ?>
            </main>
        </div>
    </body>
</html>
