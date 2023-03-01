<!DOCTYPE html>
<html>
<head>
	<title>FileSpeed | Premium</title>
	<link href="style.css" rel="stylesheet">
	<link href="premium.css" rel="stylesheet">
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0, width=device-width">
</head>
<body>
	<header>
		<a href="index.php"><img src="logo.png"></a>
		<h1 id="siteSubtitle">Just another file sharing website...</h1>
		<nav>
			<button onclick="window.location.href='index.php'">Home</button>
			<button onclick="window.location.href='upload.php'">Upload</button>
			<button onclick="window.location.href='info.php'">Information</button>
			<button onclick="window.location.href='premium.php'" id="PremBtn">Premium</button>
		</nav>
	</header>
	<hr />
	<div>
		<article>
			<h2>Premium File Hosting</h2>
			<img src="clockfly.png" class="articlepic" />
			<p>Do you need files hosted FAST and made PUBLICLY AVAILABLE?</p>
			<p><i>We can do just that!</i></p>
			<p id="subtext"><a href="info.php#contact">Contact us</a> for more information.</p>
		</article>
		<article>
			<h2>Currently Hosting</h2>
			<p>Nothing for now...</p>
		</article>
	</div>
	<hr />
	<footer>
		<p id="footerStamp"><a href="https://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&id=OFL">Open Font License (OFL)</a>.<br />&copy; <?php echo date("Y") ?>, created by <a href="https://glob-bruh.github.io/globbruh-website/">GlobBruh</a></p>
	</footer>
</body>
</html>