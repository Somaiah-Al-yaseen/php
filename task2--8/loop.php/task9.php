<?php


echo '<table cellpadding="3px" cellspacing="0px">';
    for ($i = 1; $i <= 6; $i++) {
        echo '<tr > ';
        for ($j = 1; $j <= 5; $j++) {
            echo '<td style="border: solid 1px;">' . $i . ' * ' . $j . ' = ' . ($i * $j) . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';


    ?>