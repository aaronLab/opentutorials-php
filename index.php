<?php
require_once('./lib/print.php');
require('./view/top.php');
?>
    <?php if(isset($_GET['id'])){?>
      <a href="./modify.php?id=<?=$_GET['id'] ?>">Modify</a>
      <form action="./delete_process.php" method="post">
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <input type="submit" value="Delete">
      </form>
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
    </p>
<?php
require('./view/bottom.php');
?>
