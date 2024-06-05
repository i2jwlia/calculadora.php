
<?php

$number = (int)$_POST['number'];
 
if (!is_numeric($number) || $number < 1) {
    echo "<h1 style='color: #dc3545;'>Invalid input. Please enter a positive number.</h1>";
    exit;
}

echo "<h1 style='color: #007bff;'>Tabuada Do:  $number</h1>";
echo "<ul>";


for ($i = 1; $i <= 12; $i++) {
    $result = $number * $i;
    echo "<li>$number x $i = $result</li>";
}

echo "</ul>";

?>
