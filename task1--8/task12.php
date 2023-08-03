<?php

$words =  array("abcd","abc","de","hjjj","g","wer") ;
$len = 0 ;
$leng = 5 ;
// echo  count($words) ;
// echo  strlen($words[0]) ;

for ($x=0 ; $x<=count($words)-1 ; $x++ ) {
if ( strlen($words[$x]) > $len ) {
    $len =strlen($words[$x]) ;
}
}

echo "the longest array length is :" .$len ;

foreach($words as $value) {
    if (strlen($value)<=$leng){
        $leng= strlen($value) ;
    }
}

echo "<br> the shortest array length is : " .$leng ;