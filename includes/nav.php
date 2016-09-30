<?php
//compares selected page variable with the values assigned on each page
switch($selected_page) {
    case 'index':
        $index = 'class="selected"';
        $about = '';
        $contact = '';
        $portfolio = '';
        $blog = '';
        break;
    case 'about':
        $index = '';
        $about = 'class="selected"';
        $contact = '';
        $portfolio = '';
        $blog = '';
        break;
    case 'contact':
        $index = '';
        $about = '';
        $contact = 'class="selected"';
        $portfolio = '';
        $blog = '';
        break;
    case 'portfolio':
        $index = '';
        $about = '';
        $contact = '';
        $portfolio = 'class="selected"';
        $blog = '';
        break;
    case 'blog':
        $index = '';
        $about = '';
        $contact = '';
        $portfolio = '';
        $blog = 'class="selected"';
        break;
}

//echoes out different versions of the nav bar with either the "selected" class or an empty string to change format page by page
echo
'<nav>
    <a href="index.php"' . $index . '>
        <div>
            <h2 class="titles">Home</h2>
        </div>
    </a>
    <a href="project-about-me.php"' . $about . '>
        <div>
            <h2 class="titles">About</h2>
        </div>
    </a>
    <a href="project-contact.php"' . $contact . '>
        <div>
            <h2 class="titles">Contact</h2>
        </div>
    </a>
    <a href="project-portfolio.php"' . $portfolio . '>
        <div>
            <h2 class="titles">Portfolio</h2>
        </div>
    </a>
    <a href="blog.php"' . $blog . '>
        <div>
            <h2 class="titles">Blog</h2>
        </div>
    </a>
</nav>';

?>
