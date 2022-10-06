<html>
    <head>
        <languge>en-US</languge>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Super Mario Bros. | UnblockedHaven</title>
        <link rel="stylesheet" href="../../../style.css">
        <link rel="icon" href="../../../favicon.ico">
        </head>
    <body>
        <?php include '../../../phpincludes/nav.php'; ?>
        <div style="width:100vw;height:95vh;max-width:100%;overflow:hidden;">
            <div id="game"></div>
        </div>
        <script>
            EJS_player = "#game";
            EJS_core = "nes";
            EJS_gameName = "Super Mario Bros";
            EJS_pathtodata = "https://rawcdn.githack.com/ethanaobrien/emulatorjs/main/data/";
            EJS_gameUrl = "SuperMario.nes";
        </script>
        <script src="https://rawcdn.githack.com/ethanaobrien/emulatorjs/main/data/loader.js"></script>
    </body>
</html>