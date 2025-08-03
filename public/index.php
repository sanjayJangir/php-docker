<?php
$reault = [64, 34, 25, 12, 22, 11, 90];

$count = count($reault);

for ($i = 0; $i < ($count - 1); $i++) {
  for ($j = 0; $j < $count - $i - 1; $j++) {
    if ($reault[$j] >  $reault[$j + 1]) {
      $temp = $reault[$j];
      $reault[$j] = $reault[$j + 1];
      $reault[$j + 1] = $temp;
    }
  }
}

echo "<pre>";
print_r($reault);
echo "</pre>";
