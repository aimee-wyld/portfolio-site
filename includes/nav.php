<?php
switch($selected_page) {
    case 'index':
        echo '
<nav>
    <a href="index.php" class="selected">
        <div>
            <h2 class="titles">Home</h2>
        </div>
    </a>
    <a href="project-about-me.php">
        <div>
            <h2 class="titles">About</h2>
        </div>
    </a>
    <a href="project-contact.php">
        <div>
            <h2 class="titles">Contact</h2>
        </div>
    </a>
    <a href="project-portfolio.php">
        <div>
            <h2 class="titles">Portfolio</h2>
        </div>
    </a>
    <a href="blog.php">
        <div>
            <h2 class="titles">Blog</h2>
        </div>
    </a>
</nav>';
        break;
    case 'about':
        echo '
<nav>
    <a href="index.php">
        <div>
            <h2 class="titles">Home</h2>
        </div>
    </a>
    <a href="project-about-me.php" class="selected">
        <div>
            <h2 class="titles">About</h2>
        </div>
    </a>
    <a href="project-contact.php">
        <div>
            <h2 class="titles">Contact</h2>
        </div>
    </a>
    <a href="project-portfolio.php">
        <div>
            <h2 class="titles">Portfolio</h2>
        </div>
    </a>
    <a href="blog.php">
        <div>
            <h2 class="titles">Blog</h2>
        </div>
    </a>
</nav>';
        break;
    case 'contact':
        echo '
<nav>
    <a href="index.php">
        <div>
            <h2 class="titles">Home</h2>
        </div>
    </a>
    <a href="project-about-me.php">
        <div>
            <h2 class="titles">About</h2>
        </div>
    </a>
    <a href="project-contact.php" class="selected">
        <div>
            <h2 class="titles">Contact</h2>
        </div>
    </a>
    <a href="project-portfolio.php">
        <div>
            <h2 class="titles">Portfolio</h2>
        </div>
    </a>
    <a href="blog.php">
        <div>
            <h2 class="titles">Blog</h2>
        </div>
    </a>
</nav>';
        break;
    case 'portfolio':
        echo '
<nav>
    <a href="index.php">
        <div>
            <h2 class="titles">Home</h2>
        </div>
    </a>
    <a href="project-about-me.php">
        <div>
            <h2 class="titles">About</h2>
        </div>
    </a>
    <a href="project-contact.php">
        <div>
            <h2 class="titles">Contact</h2>
        </div>
    </a>
    <a href="project-portfolio.php" class="selected">
        <div>
            <h2 class="titles">Portfolio</h2>
        </div>
    </a>
    <a href="blog.php">
        <div>
            <h2 class="titles">Blog</h2>
        </div>
    </a>
</nav>';
        break;
    case 'blog':
        echo '
<nav>
    <a href="index.php">
        <div>
            <h2 class="titles">Home</h2>
        </div>
    </a>
    <a href="project-about-me.php">
        <div>
            <h2 class="titles">About</h2>
        </div>
    </a>
    <a href="project-contact.php">
        <div>
            <h2 class="titles">Contact</h2>
        </div>
    </a>
    <a href="project-portfolio.php">
        <div>
            <h2 class="titles">Portfolio</h2>
        </div>
    </a>
    <a href="blog.php" class="selected">
        <div>
            <h2 class="titles">Blog</h2>
        </div>
    </a>
</nav>';
        break;
}
?>