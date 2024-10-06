<!DOCTYPE html>
<html lang= "en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <h1 style="font-size:45px;">Lista spesa</h1>
</head>
<body>
  <h2>Effettua il login</h2>
  <main>
    <form action="welcome.php" method="GET">
      <label for="nome">Nome:</label>
      <input type="text" name="name">
      <br>
      <label for="email">Email:</label>
      <input type="text" name="email">
      <br><br>
      <button class="button-28" role="button" name="Access">Accedi</button>
      <br><br>
    </form>
    <h3>Sei nuovo utente?</h3>
    <form action="newAccount.php" method="GET">
      <button class="button-28" role="button" name="Register">Registrati</button>
      <br><br>
    </form>
  </main>
  <h4>Link alternativi</h4>
  <a style="color:red;" href="http://localhost/myshop/casoCritico.php?">Login caso CRITICO</a>
  <br>
  <a style="color:green;" href="http://localhost/myshop/contatoreClick.php?">Contatore di Click</a>
  <br>
  <a href="https://www.esselunga.it/it-it/homepage.html">Esselunga</a>
</body>
</html>
