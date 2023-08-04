<?php
echo nl2br("Task7 :Write a PHP script, which changes the color of the first character of a word.
Sample string: PHP Tutorial.

") ;

$sampleString = "PHP Tutorial";
$color = "red";

$coloredString = preg_replace('/\b(\w)/', "<span style='color: $color;'>$1</span>", $sampleString);

echo $coloredString;
?>