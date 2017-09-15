<?php
    function getRandomColor()
    {
         return "rgba( ".rand(0,255).",".rand(0,255).",".rand(0,255).",".(rand(0,100)/100).");";
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Random Background Color </title>
        <meta charset="utf-8"/>
        
        <style>
            body
            {
                /*background-color:rgba(15,20,240,1);*/
                <?php
                
                $red = rand(0,255);
                $green=rand(0,255);
                $blue=rand(0,255);
                $a=rand(0,100)/100;
                echo "background-color:rgba( ".rand(0,255).",".rand(0,255).",".rand(0,255).",".(rand(0,100)/100).");";
                
                
                ?>
            }
            
            h1
            {
                <?php
                    echo "color:rgba( ".rand(0,255).",".rand(0,255).",".rand(0,255).",".(rand(0,100)/100).");";
                    echo "background-color:" .getRandomColor();
                ?>
                
            }
            
            h2
            {
                 background-color: <?=getRandomColor()?>
            }
            
        </style>
    </head>
    <body>
       <h1>Welcome!</h1>
       <h2>Hola!</h2>
    </body>
</html>