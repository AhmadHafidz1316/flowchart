<?php
$max = 0; 
for ($i = 1 ; $i < 100; $i++) {
  echo " | ".$i." | " ;
  if ($i > $max) {
    $max = $i; 
  }
}
echo '<br>';
echo 'Nilai maksimum adalah: ' . $i;
?>


