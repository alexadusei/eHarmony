<!DOCTYPE html>
<html>
	<head>
		<title>282-Harmony: Cyber Love for All</title>
		<meta charset="utf-8" />
		<meta name="description" content="eHarmony-like website using forms" />

		<link href="images/favicon.png" type="image/png" rel="shortcut icon">
		<link href="harmony.css" type="text/css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

		<!-- Google Analytics -->
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-55322337-3', 'auto');
			ga('send', 'pageview');
		</script>
	</head>

	<body id="body1" background="images/bg6.jpg">
	<?php
	$countries = explode("\n", file_get_contents("countries.txt"));
	?>

		<h1>282 Harmony</h1>

		<form action="signup-submit.php" enctype="multipart/form-data" method="post">
			<div>
				<fieldset>
					<legend >About Me</legend>
					Hi, my first name is <input type="text" name="firstName" />, and I am a 
					<select name="genderAm">
						<option>man</option>
						<option>woman</option>
					</select> seeking a <select name="genderSeek">
											<option>man</option>
											<option selected="selected">woman</option>
										</select>. <br />

					My postal code is <input type="text" name="postalCode" />, and my country 
					is <select name="country">
							<?php
							for ($i = 0; $i < count($countries); $i++){ ?>
								<option><?= $countries[$i] ?></option>
							<?php } ?>
						</select> <br />

					My age is: <br />
					<input type="radio" name="ageGroup" value="18-29" checked="checked"/>18-29 <br/>
					<input type="radio" name="ageGroup" value="30-49" />30-49 <br />
					<input type="radio" name="ageGroup" value="50-59" />50-59 <br />
					<input type="radio" name="ageGroup" value="60+" />60+ <br />

					Here's a self-portrait of me:
					<input type="file" name="pic" size="60" /> <br />

					<input type="submit" value="Sign Me Up!"/>
					<input type="reset" />

				</fieldset>
			</div>
		</form>

	</body>
</html>