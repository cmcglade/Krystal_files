<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>GETTING STARTED WITH PHP</title>
    
    </head>
    
    <body>
        
        <h1>GETTING STARTED WITH PHP</h1>
        <h2>This is a php command!</h2>
        <!-- the echo command -->
        
        <p>
        <?php 
            $var_a = 1; 
            $var_b = 2;
            $var_c = $var_a + $var_b;
            echo $var_c;
        ?>
        </p>
        <p>
            <?php
            $greeting = "Hello<br>";
            echo $greeting;
            
            $beginning = "This";
            $end = "Magic";
            $sentence = $beginning . " " . $end;
            echo $sentence;
                
            $greeting = "Hello";
            $username = "Krystal";
            $sentence = $greeting . " " . $username; 
            $leaving_site = "Goodbye";
            echo $sentence;
        
            ?>
            
            <?php

            echo "$greeting is $username <br> "

            ?>
            
            <?php
            $exit_greeting = $leaving_site . " " . $username;
            echo "thanks for coming, $exit_greeting <br>";
            
            $exercise = "we're learning \"scary\" code today!";
            echo $exercise;
    
            ?>
            <?php
                $lastname = "GAYLE";
                echo strtolower ($lastname);

                $firstname = "krystal";
                echo ucfirst ($firstname);

                $postalCode = "l6y 5s9";
                echo trim ("l6y 5s9");

               
            ?>
        </p>
        
        
    </body>
</html>