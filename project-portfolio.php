<!DOCTYPE html>
<html>
<head>
	<title>A Wyld | Portfolio</title>
	<?php
	require 'includes/links.php';
	?>
	<script src="js/jquery.js"></script>
	<script src="js/portfolio.js"></script>
</head>
<body>
	<div class="content">
		<?php
		$selected_page = 'portfolio';
		require 'includes/nav.php';
		?>
		<img class="arrow" id="right-arrow" src="images/arrowright.png" alt="arrow">
		<img class="arrow" id="left-arrow" src="images/arrowleft.png" alt="arrow">
		<div id="portfolio-content">
			<div class="pic-box left-box border corner1">
				<a href="index.php"><img src="images/portfolio-pics/portfolio_site.png" alt="portfolio-site" class="corner1"></a>
			</div>
			<div class="about-box right-box corner2 border">
				<p><strong>HTML/CSS - Portfolio Site</strong><br><br>For my first project at Mayden Academy, I created this
					portfolio site using HTML and CSS. The brief was to create a site to showcase our work, using a home
					page, about page, contact page and portfolio page, and test it across browsers, including IE 9. I really
					enjoyed designing the site and making it scalable, and really started to get to grips with using HTML
					and CSS.</p>
			</div>
			<div class="about-box left-box border">
				<p><strong>PHP - Blog Engine</strong><br><br>For my second project at Mayden Academy, I built a blog engine
					for my website, using PHP and SQL. The brief was to create a blog page on our sites showing links to all
					the articles, create an article page with a friendly URL structure and show the 3 latest blog posts
					somewhere on our site. Our PHP had to be functional and unit tested, and we also had to
					use git to branch off of our previous master version of the site and commit changes.<br>After
					creating pull requests, we code reviewed other members of the group. I chose to use a MySQL
					database to enable me to easily create new blog entries and efficiently query the data in PHP. I
					really enjoyed getting to put what we had learnt of PHP basics into practice and combining it with
					HTML and CSS to create the foundations of a dynamic site. It was also a great introduction to using
					git and working well as a scrum team, by keeping up with code reviews for each person/story.</p>
			</div>
			<div class="pic-box right-box border">
				<a href="blog.php"><img src="images/portfolio-pics/blog.png" alt="blog-page"></a>
			</div>
			<div class="pic-box left-box corner3 border">
				<a href="external-projects/fence/fence_input.php"><img src="images/portfolio-pics/fence_calc.png" alt="fence-calculator" class="corner3"></a>
			</div>
			<div class="about-box right-box border corner4">
				<p><strong>PHP - Fence Calculator</strong><br><br>As an additional challenge during our PHP basics module,
					we had to create a PHP application that could calculate the amount of posts and railings required to
					build a fence of a certain length or calculate the length of a fence when provided with the amount of
					posts and railings. It had to have a basic user interface for specifying amount of posts and railings
					and the length of the fence, but the front end had to be minimal, with no CSS and as little HTML as
					possible. Each fence had to start and end with a post and contain at least 1 railing. When
					calculating the amount of posts and railings needed to cover a certain length fence, the result
					had to span at least the length required, no less, and the fence length results had to be displayed
					in metres with no more than 2 decimal places. It also had to be unit tested and use functions.<br>This
					was a great challenge and really helped me to feel confident using functions in PHP. I created two
					separate functions (one to calculate the fence length if provided with number of posts and railings,
					and one to calculate the number of posts/railings when provided with the fence length) and a simple
					form in HTML. The correct function was called depending on which options the user chose.</p>
			</div>
		</div>
	</div>
</body>
</html>