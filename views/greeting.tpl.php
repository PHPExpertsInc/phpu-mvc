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
				<h1><?php echo $view->greeting; ?></h1>
				<p>Well, that was your greeting. Hope you liked it!</p>
			</div>
		</div>
		<div class="license">
			<a rel="license" href="http://creativecommons.org/licenses/by/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by/3.0/88x31.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/InteractiveResource" property="dct:title" rel="dct:type">PHP University's MVC</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.phpu.cc/mvc/" property="cc:attributionName" rel="cc:attributionURL">Theodore R. Smith</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0 Unported License</a>.
		</div>
	</body>
</html>

