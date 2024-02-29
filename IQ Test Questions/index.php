<?php

/*
8.Pattern Printing: Write a PHP script to print the following pattern:
    1
    22
    333
    4444
    55555 
 */

for ($i = 1; $i <= 5; $i++) {
    for ($r = 1; $r <= 5; $r++) {
        if ($i >= $r) {
            echo $i;
        }
    }
    echo "<br>";
}
