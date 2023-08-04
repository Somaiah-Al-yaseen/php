<?php
echo <<<"here"
1.	Write a script to generate the following paragraph 
 
"The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
The words 'red', 'green' and 'white' should come from colors array
<br>
<br>
<br>
<br>
<br>
<br>
here;

$color= ["red", "green" , "white"] ;
echo nl2br("The memory of that scene for me is like a frame of film 
forever frozen at that moment: the $color[0] carpet, the $color[1]
lawn, the $color[2] house, the leaden sky. The new president 
and his first lady. - Richard M. Nixon"
) ;