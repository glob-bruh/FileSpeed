<!DOCTYPE html>
<html>
<head>
	<title>FileSpeed</title>
	<link href="style.css" rel="stylesheet">
	<link href="index.css" rel="stylesheet">
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
	<article>
		<p id="openquote"><i>Need to quickly share a file with others but cant decide which website to use?</i></p>
		<p id="openannounce">The answer is simple:<br /><a id="fsspecial">FileSpeed</a></p>
		<p id="#secondQr">Because after all...</p>
		<p id="#secondQl">... we are Just another file sharing website.</p>
		<?php echo '<p>Currently hosting <a class="redtext">'.count(glob("./uploads/" . "*")).'</a> uploaded files.</p>'; ?>
	</article>
	<hr />
	<footer>
		<p id="footerStamp"><a href="https://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&id=OFL">Open Font License (OFL)</a>.<br />&copy; <?php echo date("Y") ?>, created by <a href="https://glob-bruh.github.io/globbruh-website/">GlobBruh</a></p>
	</footer>
</body>
</html>