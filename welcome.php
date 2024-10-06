<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        Benvenuto  <?php echo $_GET["name"]; ?>
        <br><br>
        La tua mail è: <?php echo $_GET["email"]; ?>
        <br><br>
        <a style="color:blue;" href="http://localhost/myshop/">Torna a Home</a>
    </body>
</html>
