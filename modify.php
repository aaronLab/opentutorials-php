<?php
require_once('./lib/print.php');
require('./view/top.php');
?>
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
<?php
require('./view/bottom.php');
?>
