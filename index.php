<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>
        <?php
        echo date('y-m-d h:i:s');
        ?>
    </h4>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
        <li><a href="index.php?id=html">html</a></li>
        <li><a href="index.php?id=css">css</a></li>
        <li><a href="index.php?id=javascript">javascript</a></li>
    </ol>
    <h2>
        <?php
        if (isset($_GET['id'])) {
            echo $_GET['id'];
        } else {
            echo "Welcome";
        }
        ?>
    </h2>
    <?php
    if (isset($_GET['id'])) {
        echo file_get_contents("data/".$_GET['id']);
    }
    ?>
</body>
</html>