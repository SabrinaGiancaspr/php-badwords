<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
</head>
<body>
    <!-- Creazione di un modulo che invia dati a 'text.php' tramite il metodo GET -->
    <form action="text.php" method="GET">
        <!-- Campo di input per inserire il testo da censurare -->
        <input type="text" name="testocensura">
        <!-- Area di testo per inserire un lungo testo da elaborare -->
        <textarea name="textarea" id="" cols="30" rows="10"></textarea>
        <!-- Pulsante di invio del modulo -->
        <input type="submit" value="invia">
    </form>
</body>
</html>