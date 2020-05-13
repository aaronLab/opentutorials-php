<!DOCTYPE html>
<html>
  <head>
    <title>WEB1 - Welcome</title>
    <meta charset="utf-8" />
  </head>
  <body>
    <h1><a href="./index.php?id=WEB">WEB</a></h1>
    <ol>
      <li><a href="./index.php?id=HTML">HTML</a></li>
      <li><a href="./index.php?id=CSS">CSS</a></li>
      <li><a href="./index.php?id=JavaScript">JavaScript</a></li>
    </ol>
    <h2>
        <?php
          echo $_GET['id'];
        ?>
    </h2>
    <p>
      <?php
      echo file_get_contents("./data/".$_GET['id']);
      ?>
    </p>
  </body>
</html>
