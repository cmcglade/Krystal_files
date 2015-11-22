<!DOCTYPE html>
<html>
    <head>
        <title>Arrays Example</title>
    </head>

        <?php
        $color = array ("white", "green", "red", "blue", "black");
        ?>

    <body>

         <p>"The memory of that scene for me is like a frame of film forever frozen at that moment: the <?php echo $color[2];?> carpet, the <?php echo $color[1];?> lawn, the <?php echo $color[0];?> house, the leaden key. The new president and his first lady. - Richard Nixon"</p>   
        
        <!-- OR -->
     
        <?php
        $color = array ("white", "green", "red", "blue", "black");
        
        echo "<p>\"The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden key. The new president and his first lady. - Richard Nixon\"</p>";
     
    ?>
    
       <?php

        $color = array ("white", "green", "red");             

        echo
            "<li>$color[1]</li>
            <li>$color[2]</li>
            <li>$color[0]</li>";

        ?>

      
        
    </body>
</html>