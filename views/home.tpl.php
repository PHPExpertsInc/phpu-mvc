
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>PHPUniversity MVC</title>
		<link rel="stylesheet" href="css/main.css"/>
    <script type="text/javascript"> 
function resize_iframe()
{
	var hmc = document.getElementById("coverage");
	hmc.style.height = (window.innerHeight - hmc.offsetTop - 10) + 'px';
	hmc.style.width = (window.innerWidth - hmc.offsetLeft - 120) + 'px';
}
        </script>
	</head>
	<body>
		<div class="marketbanner">
		</div>
		<div class="bodyContent">
			<p class="abstract" id="phpu_abstract">
				<strong><a href="http://www.phpu.cc/">PHPUniversity's</a></strong> mission is to enhance the engineering aptitude of PHP developers through
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
			<hr/>
			<div class="license">
				<div>Source code: <a href="phpu_mvc.zip">(zip)</a></div>
				<div>LaunchPad project: <a href="https://launchpad.net/phpu-mvc">(link)</a></div>
				<div style="margin: 0 auto; width: 10em; padding: 0; margin-bottom: -10px"><a rel="license" href="http://creativecommons.org/licenses/by/3.0/"><img alt="Creative Commons License" style="border-width:0;" src="http://i.creativecommons.org/l/by/3.0/88x31.png" /></a></div><div><span xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/InteractiveResource" property="dct:title" rel="dct:type">PHP University's MVC</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.phpu.cc/mvc/" property="cc:attributionName" rel="cc:attributionURL">Theodore R. Smith</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0 Unported License</a>.
			</div>
			<hr/>
			<h2>Technical Docs</h2>
			<iframe width="100%" id="techdocs" src="reports/docs.html"></iframe>
			<h2>Unit Tests</h2>
			<iframe width="100%" id="coverage" src="reports/coverage/" onload="resize_iframe();"></iframe> 
		</div>
	</body>
</html>

