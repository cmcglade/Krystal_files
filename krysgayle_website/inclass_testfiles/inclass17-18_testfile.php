<!doctype html=en>
<html>
<head>
	<!--declaration of the variable-->
	<?php $var = "PHP Tutorial"; ?>
	<!--pop echo variable anywhere you want php to go in the page-->
	<title><?php echo $var; ?></title>
	
</head>
<body>

	<h1><?php echo $var;?></h1>

	<p>some text about PHP</p>

	<p>for more information about PHP check out the <a href="http://php.net"><?php echo $var; ?></a> on this web site.</p>
	<!--different fns you can perform on strings - look up on php.net-->
	<!--making a substring = taking a series of characters out of a word, find a word in a sentence-->

	<!-- Order of Operations * / first, + - second ( ) first first -->
	<!-- % Modulo = remainder after division i.e. 7/3 = 2 with remainder 1 = 7%3 = 1 - use for time (60 sec increments), or to verify if something is true or false (number is even or odd)-->

    <!-- arrays are a collection of objects, every item in the array has an index; if i want to extract an item from the array i can address it by the index number, REMEMBER index starts at 0; there can also be arrays within arrays - ARRAYS ON ARRAYS ON ARRAYS !  -->
    
    <?php
        $fruit[1] = array ("apples", "oranges", "bananas", "cherries");
    ?>
	
</body>
</html>
