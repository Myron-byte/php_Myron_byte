<?php

if (isset($_GET['jml']) && is_numeric($_GET['jml']) && $_GET['jml'] > 0) {
    $jml = (int) $_GET['jml']; 
    echo "<table border=1>\n";
    for ($a = $jml; $a > 0; $a--) {
        $total = 0;
        for ($b = $a; $b > 0; $b--) {
            $total += $b;
        }
        
        echo "<tr><td colspan=\"$jml\">TOTAL: $total</td></tr>\n";

        echo "<tr>\n";
        for ($b = $a; $b > 0; $b--) {
            echo "<td>$b</td>";
        }
        echo "</tr>\n";
    }
    echo "</table>";
} else {
    echo "Harap masukkan parameter 'jml' yang valid di URL, contohnya: ?jml=4";
}
?>
