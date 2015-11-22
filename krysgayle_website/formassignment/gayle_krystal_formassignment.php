<!DOCTYPE html>
<html>

<head> 

<title>Form ASSIGNMENT</title>
        <meta http-equiv="content-type" content="text/html"; charset="UTF-8">
</head>
        
<body>     
	<form method='POST'>
	<h3>Please Input Your Information:</h3>
	<label>What is your first name?</label> &nbsp; <input type="text" name="name"/> <br><br>
	<label>What is your last name?</label> &nbsp; <input type="text" name="last_name"/> <br><br>
    <label>What is your mother's maiden name?</label> &nbsp; <input type="text" name="mothers_maiden_name"/> <br><br>
    <label>What is your favourite color?<lable> &nbsp; <input type="text" name="favourite color"/> <br><br>
	<label>What is your Postal Code?</label> &nbsp; <input type="text" name="postal_code"/> <br><br>
	<input type="Submit" value="Submit"/>
	</form>
	
	<?php
	
		$var=  ucwords($_POST["name"]);
		$varb= ucwords($_POST["last_name"]);
		$varc= ucwords($_POST["mothers_maiden_name"]);
        $vard= $_POST["favourite_color"];
        $vare= strtoupper ($_POST["postal_code"]);

    ?>
        
    <?php

    if ($_POST) {

echo "<p>Hello <font color=\"red\"> $var </font>, I find it interesting to think about how our identity might change if we had our mother's name. If your name wasn't <font color=\"red\"> $var $varb </font>, but instead it was <font color=\"red\"> $var $varc</font>, would your favourite colour still be <font color=\"red\"> $vard </font>? Would you still live in <font color=\"red\"> $vare</font>? </p>";
    
    }

    ?>
  
    </body>
    
    
</html>