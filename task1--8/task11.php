<?php
for ($x=200 ; $x<=250 ; $x++) {
    if($x % 4 == 0 ) {
echo $x ."   " ;
    }

}

//easier
// echo implode(",",range(200,250,4));
