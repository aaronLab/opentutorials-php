<?php
function print_title(){
  if(isset($_GET['id'])){
    echo htmlspecialchars($_GET['id']);
  } else {
    echo 'WEB';
  }
}

function print_description(){
  if(isset($_GET['id'])){
    echo htmlspecialchars(file_get_contents("./data/".$_GET['id']));
  } else{
    echo file_get_contents("./data/WEB");
  }
}

function print_list(){
  $list = scandir("./data");
  $i = 0;
  while ($i < count($list)) {
    $title = htmlspecialchars($list[$i]);
    if ($list[$i] != ".") {
      if ($list[$i] != "..") {
        if ($list[$i] != "WEB") {
          echo "<li><a href=\"./index.php?id=$title\">$title</a></li>";
        }
      }
    }
    $i += 1;
  }
}
?>