<?php
$getal;
echo "Hoeveel stapels wil je hebben?  ";
$getal = readline();
echo $getal;
for ($i=0; $i <= $getal; $i++)
{
  printPiramid($i);
}
function printPiramid($j)
{
  for ($i=0; $i < $j; $i++)
  {
    echo '*';
  }
  echo "\n";
}
 ?>
