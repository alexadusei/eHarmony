<pre>
<?php
$firstName = htmlspecialchars($_POST["firstName"]); #prevents HTML/PHP injection
$genderAm = $_POST["genderAm"];
$genderSeek = $_POST["genderSeek"];
$postalCode = $_POST["postalCode"];
$country = $_POST["country"];
$ageGroup = $_POST["ageGroup"];

$picture = $_FILES["pic"];
$picName = $picture["name"];

if (is_uploaded_file($picture["tmp_name"])) {
	move_uploaded_file($picture["tmp_name"], "profilePics/$picName");
}

if (file_exists("clients.txt")){
	file_put_contents("clients.txt", 
		$firstName . ", " . $genderAm . ", " . $genderSeek . ", " . $postalCode . 
		", " . $country . ", " . $ageGroup . "\n", FILE_APPEND);
}
else{
	echo("The file does not exist!");
}

?>
</pre>

<!DOCTYPE html>
<html>
	<head>
		<title>Regristration Complete</title>
		<meta charset="utf-8" />
		<meta name="description" content="Page sign up details" />

		<link href="images/favicon.png" type="image/png" rel="shortcut icon">
		<link href="harmony.css" type="text/css" rel="stylesheet" />

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

	<body background="images/bg6.jpg">
		<h1 id="tit">You're All Signed Up! &#10084;</h1>

		<div id="main">
			<h2>We have a Weissman Score<font size="5">&#153;</font> of:</h2>
			<h2 id="score">4.89</h2> 
			<p><img id="pic" src="images/data.png" width="250" height="150"
						alt="Data Compressing Icon"> <br />
				Thank you for your time, <?= $firstName ?>. Your information will now be added
				to our database, where our dynamic data compression algorithms, which are
				the second best in the world after Pied Piper<font size="1">&copy;
				</font>, will match you with the most compatible partners!
			</p>
		</div>
	</body>
</html>