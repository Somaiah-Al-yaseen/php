<?php
echo <<<  'now'
12.	Write a PHP script to get the shortest/longest string length from an array. 

Sample Input:

 $words =  array("abcd","abc","de","hjjj","g","wer")

Expected Output : 

The shortest array length is 1. The longest array length is 4.
<br>
<br>
now;

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