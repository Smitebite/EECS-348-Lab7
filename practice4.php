<?php
$size = $_POST['size'];
echo "<br>";
echo "<table border= '1'>";
echo "<tr><td></td>";
for ($x = 1; $x <= $size; $x++) {
    echo "<td>" .$x."</td>";
}
echo "</tr>";
for ($i = 1; $i <= $size; $i++){
    echo "<tr>";
    echo "<td>".$i. "</td>";
    for ($j =1;$j <= $size; $j++) {
        echo "<td>" .$i * $j. "</td>";
    }
    echo "</tr>";
}
?>
