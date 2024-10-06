<?php
// Nome del file che contiene il contatore
$filename = 'counter.txt';

//Funzione per ottenere il valore del contatore
function getCounter($file) {
    if (!file_exists($file)) {
        return 0; // Se il file non esiste, ritorna 0
    }
    return (int)file_get_contents($file);
}

// Funzione per aggiornare il conteggio
function updateCount($filename, $count) {
    file_put_contents($filename, $count);
}

// Gestione delle richieste
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['click_button'])) {
        // Incrementa il conteggio
        $count = getCounter($filename);
        $count++;
        updateCount($filename, $count);
    } elseif (isset($_POST['reset_button'])) {
        // Resetta il conteggio
        updateCount($filename, 0);
    }
}

// Recupero il numero di click
$clicks = getCounter($filename);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <h1 style="font-size:45px;">Contatore di Click</h1>
</head>
<body>
    <p>Numero di click: <?php echo $clicks ?></p>
    <form method="POST">
        <button class="button-28" role="button" name="click_button">Clicca qui!</button>
        <button class="button-28" role="button" name="reset_button">Resetta Contatore</button>
    </form>
</body>
</html>
