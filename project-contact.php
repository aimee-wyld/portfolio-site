<!DOCTYPE html>
<html>
<head>
	<title>A Wyld | Contact</title>
	<?php
	require 'includes/links.php';
	?>
</head>
<body>
	<div class="content">
		<?php
		$selected_page = 'contact';
		require 'includes/nav.php';
		?>
		<div id="contact" class="background border">
			<h5>Email Address: <a href="mailto:aimee.eloise@mail.com">aimee.eloise@mail.com</a></h5>
			<h5 id="address">Location: Bristol/Bath</h5>
			<h5 id="tel">Tel: <a href="tel:07825301256">07825301256</a></h5>
		</div>
		<div id="contact-form" class="background border">
			<a href="http://www.github.com/aimee-wyld"><img src="images/github.png" alt="github"></a>
			<a href="http://uk.linkedin.com/in/aimée-wyld-946811130"><img src="images/linkedin.png" alt="linked-in"></a>
			<form>
				<h6>Your Name</h6>
				<input type="text" name="name" placeholder="Jeff Jefferson" class="input">
				<h6> Your Email</h6>
				<input type="email" name="email" placeholder="jeff@jeff.com" class="input">
				<h6>Subject</h6>
				<input type="text" name="text" placeholder="Jeff's Message" class="input">
				<h6>Antispam : 10, 20, 30, ?</h6>
				<!--[if IE ]> 
					<input type="number" name="antispam" value="Complete the number series" step="10" class="input">
				<![endif]-->
				<!--[if !IE]>-->
				<input type="number" name="antispam" placeholder="Complete the number series" step="10" class="input">
				<!--<![endif]-->
				<h6>Your Message</h6>
				<textarea name="message" rows="1" cols="24" class="input">Your message here...</textarea><br>
				<input type="submit" value="Send Message" class="button">
			</form>
		</div>
	</div>
</body>
</html>