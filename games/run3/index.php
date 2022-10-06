
<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	
	<title>Run 3 | UnblockedHaven</title>
	<link rel="icon" href="../../favicon.ico">
	
	<meta id="viewport" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="apple-mobile-web-app-capable" content="yes">

	<link rel="stylesheet" type="text/css" href="../../style.css">
		<script type="text/javascript" src="./Run3.js"></script>
	
	<script>
		window.addEventListener ("touchmove", function (event) { event.preventDefault (); }, { capture: false, passive: false });
		if (typeof window.devicePixelRatio !='undefined' && window.devicePixelRatio > 2) {
			var meta = document.getElementById ("viewport");
			meta.setAttribute ('content', 'width=device-width, initial-scale=' + (2 / window.devicePixelRatio) + ', user-scalable=no');
		}
	</script>
	
	<style>
		html,body { margin: 0; padding: 0; height: 100vh; overflow: hidden; }
		#openfl-content { background: #000000; width: 100vw; height: 100vh; }
		@font-face {
			font-family: 'Comfortaa Bold';
			src: url('font/COMFORTAA-BOLD.eot?#iefix') format('embedded-opentype'),
			url('COMFORTAA-BOLD.woff') format('woff'),
			url('COMFORTAA-BOLD.TTF') format('truetype'),
			url('COMFORTAA-BOLD.svg#Comfortaa%20Bold') format('svg');
			font-weight: normal;
			font-style: normal;
		}
		@font-face {
			font-family: 'Comfortaa';
			src: url('font/Comfortaa.eot?#iefix') format('embedded-opentype'),
			url('font/Comfortaa.woff') format('woff'),
			url('font/Comfortaa.otf') format('truetype');
			font-weight: normal;
			font-style: normal;
		}
		@font-face {
			font-family: 'Permanent Marker';
			src: url('font/PERMANENTMARKER.eot?#iefix') format('embedded-opentype'),
			url('font/PERMANENTMARKER.woff') format('woff'),
			url('font/PERMANENTMARKER.TTF') format('truetype'),
			url('font/PERMANENTMARKER.svg#Permanent%20Marker') format('svg');
			font-weight: normal;
			font-style: normal;
		}

	</style>
	
</head>
<body>
<?php include '../../phpincludes/nav.php'; ?>
    <embed src="https://ephemeral-boba-a9dd01.netlify.app/" style="position:fixed; top:0; left:0; bottom:0; right:0; width:100%; height:100%; border:none; margin:0; padding:0; overflow:hidden;">
<noscript>This webpage makes extensive use of JavaScript. Please enable JavaScript in your web browser to view this page.</noscript>
	
	<div id="openfl-content"></div>
	
	<script type="text/javascript">
		lime.embed ("Run3", "openfl-content", 800, 600, { parameters: {} });
	</script>
</body>
</html>
