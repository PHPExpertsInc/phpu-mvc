<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>PHPUniversity MVC</title>
		<link rel="stylesheet" href="css/main.css"/>
	</head>
	<body>
		<div class="marketbanner">
		</div>
		<div class="bodyContent">
			<p class="abstract" id="phpu_abstract">
				<a href="http://www.phpu.cc/">PHPUniversity's</a> mission is to enhance the engineering aptitude of PHP developers through
				group training, one-on-one mentoring and the exposition of high-quality open sourced
				PHP projects utilizing a range of Web 2.0 technologies.
			</p>
			<p class="abstract" id="mvc_abstract">
				PHPUniversity MVC's goal is to provide a concise 
				<a href="http://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller">Model View Controller</a>
				for educational purposes. It also aims to be useful as a bootstrap for future PHP projects.
			</p>
			<div>
				There is only one action defined: The Greeter. Please enter your name to be greated.
				<form method="post" action="?action=greet">
					<div><label>Your name: </label><input type="text" name="name"/></div>
					<div class="submit"><input type="submit" value="Go"/></div>
				</form>
			</div>
		</div>
	</body>
</html>

