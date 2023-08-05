<?php





if(10 > 4) { ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>this is will display when the condition is true </h1> 
</body>
</html>



<?php }  ?>



<?php
//there is anoeher way to do that
if(10 > 4) : ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
       <h1>this is will display when the condition is true </h1> 
    </body>
    </html>
    
    
    
    <?php endif;  ?>
    