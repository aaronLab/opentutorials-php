<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<body>
    <h1>function</h1>
    <?php
    $str = "Molestiae sed enim in libero vitae. Magnam placeat omnis aut dicta minus aut sapiente.
    
    Necessitatibus doloribus nostrum quis quia quis voluptates illum voluptatibus. Rerum eos non esse necessitatibus corrupti fuga doloremque.
    
    Eius quia sit. Magnam amet accusantium suscipit sit cupiditate et.";
    echo $str;
    ?>

    <h2>strlen()</h2>
    <?php
    echo strlen($str);
    ?>

    <h2>nl2br</h2>
    <?php
    echo nl2br($str);
    ?>
</body>
</html>