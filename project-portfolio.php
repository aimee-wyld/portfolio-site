<!DOCTYPE html>
<!--[if IE ]>
<html class="ie">
<![endif]-->
<!--[if !IE]>-->
<html>
<!--<![endif]-->
<head>
	<title>A Wyld | Portfolio</title>
	<?php
	require 'includes/links.php';
	?>
</head>
<body>
	<div class="content">
		<?php
		$selected_page = 'portfolio';
		require 'includes/nav.php';
		?>
		<main id="portfolio-main">
			<div class="border background col-1 corner1">
				<img src="images/portfolio_site.png" alt="portfolio-site" class="border project-info">
			</div>
			<div class="border background project-desc corner2">
				<h3>HTML/CSS - Portfolio Site</h3>
				<p class="border project-info">For my first project at Mayden Academy, I created this portfolio site
                using HTML and CSS. The brief was to create a site to showcase our work, using a home page, about
                    page, contact page and portfolio page, and test it across browsers, including IE 9. I really enjoyed
                designing the site and making it scalable, and really started to get to grips with using HTML and CSS.</p>
			</div>
			<div class="border background col-1">
				<h3>PHP - Blog Engine</h3>
				<p class="border project-info">For my second project at Mayden Academy, I built a blog engine for my
                    website, using PHP and SQL. The brief was to create a blog page on our sites showing links to all
                    the articles, create an article page with a friendly URL structure and show the 3 latest blog posts
                    somewhere on our site. Our PHP had to be functional and unit tested, and we also had to
                    use git to branch off of our previous master version of the site and commit changes. After
                    creating pull requests, we code reviewed other members of the group. I chose to use a MySQL
                    database to enable me to easily create new blog entries and efficiently query the data in PHP. I
                    really enjoyed getting to put what we had learnt of PHP basics into practice and combining it with
                    HTML and CSS to create the foundations of a dynamic site. It was also a great introduction to using
                    git and working well as a scrum team, by keeping up with code reviews for each person/story.</p>
			</div>
			<div class="border background">
				<img src="images/blog.png" alt="blog-page" class="border project-info">
			</div>
			<div class="border background col-1">
				<img src="images/fence_Calc.png" alt="fence-calculator" class="border project-info">
			</div>
			<div class="border background project-desc">
				<h3>PHP - Fence Calculator</h3>
				<p class="border project-info">As an additional challenge during our PHP basics module, we had to create
                a PHP application that could calculate the amount of posts and railings required to build a fence of a
                    certain length or calculate the length of a fence when provided with the amount of posts and
                    railings. It had to have a basic user interface for specifying amount of posts and railings and
                    the length of the fence, but the front end had to be minimal, with no CSS and as little HTML as
                    possible. Each fence had to start and end with a post and contain at least 1 railing. When
                    calculating the amount of posts and railings needed to cover a certain length fence, the result
                    had to span at least the length required, no less, and the fence length results had to be displayed
                    in metres with no more than 2 decimal places. It also had to be unit tested and use functions. This
                    was a great challenge and really helped me to feel confident using functions in PHP. I created two
                    separate functions (one to calculate the fence length if provided with number of posts and railings,
                    and one to calculate the number of posts/railings when provided with the fence length) and a simple
                    form in HTML. The correct function was called depending on which options the user chose.</p>
			</div>
			<div class="border background col-1">
				<h3>Project Title</h3>
				<p class="border project-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tempor
                    est eu elit tincidunt, lobortis viverra eros gravida. In hac habitasse platea dictumst. Cras ornare
                    vel sapien vel dapibus. Maecenas eu dui at tortor commodo cursus eu non libero. Aliquam erat
                    volutpat. Aliquam erat volutpat. Sed vel massa diam. Donec porttitor eros sit amet commodo
                    tristique. Nulla vel porttitor purus. Donec sit amet luctus nisi. Etiam vel dapibus massa. Curabitur
                    lacinia laoreet rutrum.</p>
			</div>
			<div class="border background">
				<img src="images/polar-bear.jpeg" alt="polar bear" class="border project-info">
			</div>
			<div class="border background col-1 alt corner3">
				<img src="images/fish-face.jpeg" alt="fish" class="border project-info">
			</div>
			<div class="border background project-desc alt corner4">
				<h3>Project Title</h3>
				<p class="border project-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tempor
                    est eu elit tincidunt, lobortis viverra eros gravida. In hac habitasse platea dictumst. Cras ornare
                    vel sapien vel dapibus. Maecenas eu dui at tortor commodo cursus eu non libero. Aliquam erat
                    volutpat. Aliquam erat volutpat. Sed vel massa diam. Donec porttitor eros sit amet commodo
                    tristique. Nulla vel porttitor purus. Donec sit amet luctus nisi. Etiam vel dapibus massa. Curabitur
                    lacinia laoreet rutrum.</p>
			</div>
		</main>
	</div>
</body>
</html>