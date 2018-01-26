<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>GLOBAL GAME JAM 2018</title>
    <script type="text/javascript" src="system/phaser.min.js"></script>
    <script type="text/javascript" src="states/main.js"></script>
  </head>
  <body>
    <h1>GLOBAL GAME JAM 2018</h1>

    <script type="text/javascript">
      var game = new Phaser.Game(800, 600, Phaser.AUTO, 'ggj-2018', { preload: preload, create: create, update: update });

      game.state.add("main",main);

      function preload() {
        console.log("preload del game");

      }

      function create() {
        game.state.start("main");
      }

      function update() {
        console.log("update del game");
      }
    </script>

  </body>
</html>