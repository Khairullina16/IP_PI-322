<p> Константа
<p>
<?php
define("NUM_E", 2.71828); 
echo "Число e равно", NUM_E.'<br>';
$num_e1=(NUM_E);
echo ('$num_e1' . ' = ' . $num_e1 . ' - ');
echo gettype($num_e1) . '<br>';
$num_e1 = (string) $num_e1;
echo ('$num_e1' . ' = ' . $num_e1 . ' - ');
echo gettype($num_e1) . '<br>';
$num_e1 = (int) $num_e1;
echo ('$num_e1' . ' = ' . $num_e1 . ' - ');
echo gettype($num_e1) . '<br>';
$num_e1 = (float) $num_e1;
echo ('$num_e1' . ' = ' . $num_e1 . ' - ');
echo gettype($num_e1) . '<br>';
?>