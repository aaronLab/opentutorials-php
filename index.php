<!DOCTYPE html>
<html>
  <head>
    <title>WEB1 - Welcome</title>
    <meta charset="utf-8" />
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
    <?php
      $list = scandir('./data');
      $i = 0;
      while ($i < count($list)) {
        if ($list[$i] != ".") {
          if ($list[$i] != "..") {
            if ($list[$i] != "WEB") {
              echo '<li><a href="./index.php?id='.$list[$i].'">'.$list[$i].'</a></li>';
            }
          }
        }
        $i += 1;
      }
    ?>
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
