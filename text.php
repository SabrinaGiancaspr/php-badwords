<?php 
$testo = "Ti ho rivisto dopo
Tanto tanto tanto tanto tempo
E come previsto tu eri
Tanto tanto tanto tanto bello come un tempo
Hai cominciato a parlare
Mi aspettavo un Mi mancavi
Invece hai parlato
Tanto tanto tanto tanto
Tanto amore quello che ti ho dato
Se la memoria non mi inganna
Quanto ti sei ingarbugliato
Nel pensare che ti volessi male
E nelle tue idee
Alla fine hai sbottato, hai detto
Guarda tanto tanto tanto tanto
Amore, tu sei
Sei l'errore più cattivo che ho commesso nella vita
Amore, tu sei
Sei lo sbaglio più fatale che ho commesso nella vita
Amore, tu sei
Sei la prova che gli errori sono fatti per rifarli
Ancora tu sei
La puttana che ha ridato un senso ai giorni miei";
$censura = $_GET['testocensura'];
$testobonus = $_GET['textarea'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>testo</title>
</head>
<body>
  <p> <?php echo $testobonus ?></p>
  <p> Numeri caratteri testo: <?php echo strlen($testobonus); ?></p>
  <p> <?php echo str_replace($censura, '***', $testobonus ); ?> </p>
  <p>Numeri caratteri testo censurato: <?php echo strlen(str_replace($censura, '***', $testobonus )); ?></p>
  
</body>
</html>