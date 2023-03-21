<form name="imc" method="GET" action="test.php">
  Peso in kilogram (kg):
  <input type="text" name="peso" id="peso" size="15">
  <br> 

  Altura in meter (m):
  <input type="text" name="altura" id="altura" size="15">
  <br>

  <input type="submit" name="submit" id="submit" value="submit">
</form>

<?php
if ($_GET['submit']) { 
  $peso = $_GET['peso'];
  $altura = $_GET['altura'];

  function imc($peso,$altura) {
    $imc = $peso/($altura*$altura);
    return $imc;
  } 

  if ($imc <= 18.5) {
    $output = "ABAIXO PESO";

  } else if ($imc > 18.5 AND $imc<=24.9 ) {
    $output = "PESO NORMAL";

  } else if ($imc > 24.9 AND $imc<=29.9) {
    $output = "SOBREPESO";

  } else if ($imc > 30.0) {
    $output = "OBESIDADE";
  }
}
echo "O seu IMC e   " . imc($peso,$altura). "  e voce esta : "; 
echo "$output";
?>