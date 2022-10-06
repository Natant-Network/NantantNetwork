<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Tunnel Rush | UnblockedHaven</title>
    <link rel="icon" href="../../favicon.ico">
    <!-- <link rel="stylesheet" href="style/style.css"> -->
    <link rel="stylesheet" href="../../style.css">
	<script src="/adinLoader.js"></script>
	<script src="UnityLoader.js"></script>
    <script src="UnityProgress.js"></script>
    <script>
      var gameInstance = UnityLoader.instantiate("gameContainer", "build.json", {onProgress: UnityProgress,Module:{onRuntimeInitialized: function() {UnityProgress(gameInstance, "complete")}}});
    </script>
  </head>
  <body>
    <?php include '../../phpincludes/nav.php'; ?>
    <style>#adsCode{display: none;}</style>
    <div class="webgl-content">
      <div id="gameContainer" style="width: 100%; height: 100%; margin: auto;"></div>
	  <!-- <div class="footer">
	            <div class="webgl-logo"></div>
	            <div class="fullscreen" onclick="gameInstance.SetFullscreen(1)"></div>
	            <div class="title">Tunnel Rush</div>
	        </div>
    </div> -->
	<!-- <script>
       if (typeof getAdinDomain !== 'undefined') {
           const bodyTag = document.getElementsByTagName('body')[0];

           let addAdinPreroll = document.createElement('script');
            addAdinPreroll.src = getAdinDomain;
            bodyTag.appendChild(addAdinPreroll);
        }
  </script> -->
  </body>
</html>
