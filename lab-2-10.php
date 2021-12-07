<HTML>
<TITLE>Таблица</TITLE>
<BODY>
<TABLE border=1>
<?php
for ($i = 0; $i < 10; $i++) {
    echo '<tr>';
    for ($j = 1; $j < 11; $j++) {
        echo '<td style="color:'.($j%2?'black':'red').'">'.($i*10+$j).'</td>';
    }
    echo '</tr>';
}
?>
</TABLE>
</BODY>
</HTML>