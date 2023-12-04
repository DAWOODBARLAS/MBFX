<!DOCTYPE html>

<html lang="en">

<head>

  <?php include('includes/headScript.php'); ?>

  <link rel="stylesheet" href="css/index.css" />

  <title>Welcome to MBFX GLOBAL</title>

  <?php

  $page = 'home';

  ?>

</head>

<body>

  <?php include('includes/header.php'); ?>

  <div id="webterminal" style="width:100%;height:600px;"></div>

  <script type="text/javascript" src="https://trade.mql5.com/trade/widget.js"></script>

  <script type="text/javascript">
    new MetaTraderWebTerminal("webterminal", {

      version: 5,

      servers: ["MBFX-Server"],

      server: "MBFX-Server",

      utmSource: "www.mbfx.co",

      startMode: "create_demo",

      language: "en",

      colorScheme: "black_on_white"

    });
  </script>

  <?php include('includes/footer.php'); ?>

  <?php include('includes/footerScript.php'); ?>

  <script src="./js/index.js"></script>

</body>

</html>