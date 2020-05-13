<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>parameter</title>
</head>
<body>
    Hello, <?php echo $_GET['name']?>, who lives in <?php echo $_GET['city']?>.
</body>
</html>

<!-- ex: http://localhost/syntax/parameter.php?name=Leezche&city=Toronto
=>Hello, Leezche, who lives in Toronto. -->