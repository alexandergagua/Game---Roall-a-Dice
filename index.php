<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Roll a Dice</title>
      </head>

      <body>
        <h1> Roll a Dice </h1>

        <input type="button" value="Roll a Dice" onclick="window.location.reload();"/>
      <p>
      <img src="<?php print '/phpinvisualstudiocode/Game - Roll a Dice/images/dice/' .rand(1,6);?>.png"  width ="400" height="450"/>
      </p>
      
      </body>
</html>