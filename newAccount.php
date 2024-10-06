<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Registrazione</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <label for="nome">Nome:</label>
        <input type="text" name="Vname">
        <br><br>
        <label for="email">Email:</label>
        <input type="text" name="Vemail">
        <br><br>
        <label for="password"> Password:</label>
        <input type="text" name="Vpassword">
        <br><br>
        <button class="button-28" role="button" name="Submit">Invia</button>
        <br><br>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['Vname'];
            $email = $_POST['Vemail'];
            $password = $_POST['Vpassword'];
            if (empty($name)) {
                echo "Nome mancante<br>";
            } else {
                echo $name. "<br>";
            }
            if (empty($email)) {
                echo "Email mancante<br>";
            } else {
                echo $email. "<br>";
            }
            if (empty($password)) {
                echo "Password mancante<br>";
            } else {
                echo $password. "<br>";
            }
        }
    ?>
    <br>
    <a style="color:blue;" href="http://localhost/myshop/">Torna a Home</a>
</body>
</html>