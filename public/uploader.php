<!DOCTYPE html>
<html>
<head>
	<title>FileSpeed | Upload</title>
	<link href="style.css" rel="stylesheet">
	<link href="uploader.css" rel="stylesheet">
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

<?php
if($_FILES['uploadFile']['error'] == 4) {
    echo '<h3 id="redFileTitle">No file was selected</h3>';
    echo '<p id="subtext">Please return to the <a href="upload.php">upload</a> page and pick a file.</p>';
} else {
if ($_FILES['uploadFile']['error'] === UPLOAD_ERR_OK) {
    $fileName = $_FILES['uploadFile']['name'];
    $fileTempPath = $_FILES['uploadFile']['tmp_name'];
    $fileMD5 = md5_file($fileTempPath);
    $fileSHA = sha1_file($fileTempPath);
    $fileSize = filesize($fileTempPath);
    $badFile = false;
    $badFileL = file('./configuration/badfilesha1.txt');
    $lineCount = 0;
    foreach($badFileL as $line) {
      $lineCount += 1;
      if (strtolower($line) == $fileSHA) {
        $badFile = true;
      }
    }
  $genFilename = "";
  while (file_exists(dirname(__FILE__).'/uploads/'.$genFilename)) {
   for ($x = 0; $x <= 25; $x++) {
      $s = substr(sha1(mt_rand()),8,1);
      if (!is_numeric($s)) {
        if ((bool)random_int(0, 1)) {
          $s = strtoupper($s);
        }
      }
      $genFilename .= $s;
    }
      $path_parts = pathinfo($fileName);
      if (isset($path_parts['extension'])) {
       $genFilename .= '.'.$path_parts['extension'];
     }
  }
    if ($badFile != true) {
      $filePath = dirname(__FILE__).'/uploads/'.$genFilename;
      // Upload using move_upload_file()
      if(move_uploaded_file($fileTempPath, $filePath)) {
        // FILE passed 
        $finalOut = 'PASS';
        echo '<h3 id="goodFileTitle">File has been uploaded</h3>';
	echo '<p id="subtext">The link to view and/or download this file is below:</p>';
	echo '<p id="subtext"><a href="http://[WEBSITE]/uploads/'.$genFilename.'">http://[WEBSITE]/uploads/'.$genFilename.'</p>';
      } else {
        // FILE failed
        $finalOut = 'FAIL';
        echo '<h3 id="redFileTitle">File upload error</h3>';
	echo '<p id="subtext">Please <a href="info.php#contact">contact us</a> or come back later.</p>';
      }
    } else {
      // FILE banned
      unlink($fileTempPath);
      $finalOut = 'BADF';
      echo '<h3 id="redFileTitle">THIS FILE IS BANNED</h3>';
      echo '<p id="subtext">The file you uploaded was mannually reviewed and we determined to not allow it on FileSpeed.<br />We reccomend you read our <a href="info.php#guidelines">guidelines</a>.</p>';
    }
	if (!isset($_SERVER['HTTP_USER_AGENT'])) {
		$useragent = 'Nothing Came Back';
	} else {
		$useragent = $_SERVER['HTTP_USER_AGENT'];
	}
  if (!isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $proxy = 'Nothing Came Back';
  } else {
    $proxy = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
	$logFile = fopen('./configuration/log.txt', 'a');
	fwrite($logFile, '['.date("Y-m-d h:i:sa").'] Generated File Name: '.$genFilename.', Original File Name: '.$fileName.', Source: '.$_SERVER['REMOTE_ADDR'].':'.$_SERVER['REMOTE_PORT'].', Proxy: '.$proxy.', User Agent: #'.$useragent.'#, File Size (Bytes): '.$fileSize.', File MD5: '.$fileMD5.', File SHA1: '.$fileSHA.', Status: '.$finalOut.PHP_EOL);
	fclose($logFile);
}
}
?>

	<hr />
	<footer>
		<p id="footerStamp"><a href="https://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&id=OFL">Open Font License (OFL)</a>.<br />&copy; <?php echo date("Y") ?>, created by <a href="https://glob-bruh.github.io/globbruh-website/">GlobBruh</a></p>
	</footer>
</body>
</html>