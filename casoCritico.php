<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <h1 style="font-size:45px;">Login</h1>
</head>
<body> 
    <form method="POST" action="">
        <label for="user1">Username:</label>
        <input type="text" id="user1" name="user1" required>
        <br>
        <label for="psw1">Password:</label>
        <input type="psw1" id="psw1" name="psw1" required>
        <br>
        <br>
        <button class="button-28" role="button" name="Access">Accedi</button>
    </form>
</body>
</html>
<?php
/* Questo è un caso critico perchè usiamo $_REQUEST per gestire
    i dati della login poiché consente a un attaccante di inviare 
    credenziali sensibili tramite una richiesta GET, 
    bypassando i controlli.
    Questo porta a un accesso non autorizzato.
    Per evitare questo problema è meglio usare $_POST un esempio in newAccount.php
*/
// Simuliamo una semplice autenticazione
$valid_username = "admin";
$valid_password = "password123";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_REQUEST['user1']; // Usa $_REQUEST
    $password = $_REQUEST['psw1'];

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['loggedin'] = true;
        echo "Accesso riuscito!";
    } else {
        echo "Credenziali errate.";
    }
}
?>

