<!DOCTYPE html>
<html>
<head>
	<title>FileSpeed | Upload</title>
	<link href="style.css" rel="stylesheet">
	<link href="upload.css" rel="stylesheet">
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
	<h2>File Upload</h2>
	<form action="uploader.php" method="POST" enctype="multipart/form-data" id="formTest">
        <input type="file" name="uploadFile" id ="fileUploadPicker"><br>
        <input type="submit" value="Upload" id="uploadBtn">
    </form>
	<p id="toswarn">Please read the <a href="info.php#guidelines">guidelines</a><br>before uploading content.</p>
	<hr />
	<footer>
		<p id="footerStamp"><a href="https://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&id=OFL">Open Font License (OFL)</a>.<br />&copy; <?php echo date("Y") ?>, created by <a href="https://glob-bruh.github.io/globbruh-website/">GlobBruh</a></p>
	</footer>
</body>
</html>