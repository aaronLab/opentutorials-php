<!DOCTYPE html>
<html>
  <head>
    <title>WEB1 - Welcome</title>
    <meta charset="utf-8" />
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
      <li><a href="./index.php?id=HTML">HTML</a></li>
      <li><a href="./index.php?id=CSS">CSS</a></li>
      <li><a href="./index.php?id=JavaScript">JavaScript</a></li>
      <li><a href="./index.php?id=PHP">PHP</a></li>
    </ol>
    <h2>
        <?php
        if(isset($_GET['id'])){
          echo $_GET['id'];
        } else {
          echo 'WEB';
        }
        ?>
    </h2>
    <p>
      <?php
      if(isset($_GET['id'])){
        echo file_get_contents("./data/".$_GET['id']);
      } else{
        echo file_get_contents("./data/WEB");
      }
      ?>
    </p>
  </body>
</html>
