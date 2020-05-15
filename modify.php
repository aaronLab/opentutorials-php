<?php
function print_title(){
  if(isset($_GET['id'])){
    echo $_GET['id'];
  } else {
    echo 'WEB';
  }
}

function print_description(){
  if(isset($_GET['id'])){
    echo file_get_contents("./data/".$_GET['id']);
  } else{
    echo file_get_contents("./data/WEB");
  }
}

function print_list(){
  $list = scandir("./data");
  $i = 0;
  while ($i < count($list)) {
    if ($list[$i] != ".") {
      if ($list[$i] != "..") {
        if ($list[$i] != "WEB") {
          echo "<li><a href=\"./index.php?id=$list[$i]\">$list[$i]</a></li>";
        }
      }
    }
    $i += 1;
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>
    <?php
        print_title();
        ?>
        </title>
    <meta charset="utf-8" />
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
    <?php
    print_list();
    ?>
    </ol>
    <a href="./create.php">Create</a>
    
    <?php if(isset($_GET['id'])){?>
      <a href="./modify.php?id=<?=$_GET['id'] ?>">Modify</a>
    <?php } ?>
    <h2>
        <?php
        print_title();
        ?>
    </h2>
    <p>
      <?php
      print_description();
      ?>
    <form action="./modify_process.php" method="post">
    <input type="hidden" name="old_title" value="<?=$_GET['id']?>">
    <p><input type="text" name="title" placeholder="Title" value="<?php print_title();?>"></p>
    <p><textarea name="description" placeholder="Description"><?php print_description(); ?></textarea></p>
    <p><input type="submit"></p>
    </form>
    </p>
  </body>
</html>