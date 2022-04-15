<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Амортизация</title>
  </head>
  <body>

  <h2>Основно средство</h2>
  

<?php 
$osnovnoSredstvo=$_POST["osnovnoSredstvo"];
$stoinostZakupuvane=$_POST["stoinostZakupuvane"];
$godina=$_POST["godina"];
$amortizaciq=$_POST["amortizaciq"];
$izminaliGodini = 0;
$amortizaciqSledProverka;
for ($i=$godina; $i < date("Y"); $i++) { 
  $izminaliGodini++;
} 

if ($izminaliGodini>=5) {
  $amortizaciqSledProverka =$stoinostZakupuvane -(($stoinostZakupuvane / 100)* $amortizaciq);
}
else if($izminaliGodini < 5){
  $amortizaciqSledProverka = $stoinostZakupuvane;
}


?>

<table border="4" bordercolor="black" cellspacing="0" cellpadding="9" width="44%">
<caption><big><b>Амортизация</b></big></caption>
  <tr>
    <th>Име на средство</th>
    <th><?php echo $osnovnoSredstvo; ?></th>
  </tr>


  <tr>
    <th>Стойност при закупуване</th>
    <th><?php echo $stoinostZakupuvane; ?></th>
  </tr>
  <tr>
    <th>Година на закупуване</th>
    <th><?php echo $godina; ?></th>
  </tr>
  <tr>
    <th>% за амортизация</th>
    <th><?php echo $amortizaciq; ?></th>
  </tr>
  <tr>
    <th>Стойност след проверка за амортизация</th>
    <th><?php echo $amortizaciqSledProverka; ?></th>
  </tr>

</table>


</body>
</html>
