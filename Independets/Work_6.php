<?php
$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$combinedArray = array_merge($array1, $array2);
echo "Объединённый массив: " . implode(", ", $combinedArray) . "\n"; // [1, 2, 3, 4, 5, 6]
?>
