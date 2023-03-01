<!DOCTYPE html>
<html>
<head>
	<title>FileSpeed | Information</title>
	<link href="style.css" rel="stylesheet">
	<link href="info.css" rel="stylesheet">
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
		<a id="about"><h2>About FileSpeed</h2></a>
		<p>FileSpeed is a file hosting service that lets you upload any file and share it as a link. When the link is opened, the user is able to download the file you just uploaded.</p>
		<a id="guidelines"><h2>Guidelines</h2></a>
		<p>Do not upload the following:</p>
		<div class="list">
			<ol>
				<li>Content that violates local laws.</li>
				<li>Content considered obscene.</li>
				<li>Malware or any other form of program designed to cause damage to other systems.</li>
				<li>Anything that damages or degrades hosting equipment.</li>
			</ol>
		</div>		
		<p>You agree that all content you upload to the service is solely yours, and user activity is recorded for misuse. This includes premium content.</p>
		<a id="report"><h2>Report Content</h2></a>
		<p>If you run across content that violates the above guidelines, please contact us by going to the Contact section. If the reported content does violate the guidelines, appropriate action will be taken.</p>
	    	<a id="security"><h2>Security</h2></a>
	    	<p><b>If you manage to pwn the website, report it to us!</b> Your report should contain the following information:</p>
		<div class="list">
			<ul>
				<li>Name (pseudonym or real is fine).</li>
				<li>What is the cause for concern.</li>
				<li>How did you do it.</li>
				<li>OPTIONAL: How should we fix it.</li>
			</ul>
		</div>
		<p>Send the report to the email address in the Contact section.</p>
		<a id="contact"><h2>Contact</h2></a>
		<p>If you need to report content, a security incident, or have any other concerns (including topics regarding premium file hosting), send an email to us <a href="mailto:[MAIL]">here</a>.
	<article>
	<hr />
	<footer>
		<p id="footerStamp"><a href="https://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&id=OFL">Open Font License (OFL)</a>.<br />&copy; <?php echo date("Y") ?>, created by <a href="https://glob-bruh.github.io/globbruh-website/">GlobBruh</a></p>
	</footer>
</body>
</html>