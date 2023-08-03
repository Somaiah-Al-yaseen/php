<?php

$sampleString = "PHP Tutorial";
$color = "red";

$coloredString = preg_replace('/\b(\w)/', "<span style='color: $color;'>$1</span>", $sampleString);

echo $coloredString;
?>