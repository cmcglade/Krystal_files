<!DOCTYPE html>
<html>
    <head>
        <title>Simple  Form Example</title>
        <meta http-equiv="content-type" content="text/html"; charset="UTF-8">
    </head>
    
 
    <body>
        <form method='POST'>
            <h2>Please input your name:</h2>
            <label>First Name</label><input type="text" name="name"> <br>
            <label>Last Name</label><input type="text" name="last_name"> <br>
            <label>Postal Code</label><input type="text" name="postal_code"> <br>
            <input type="submit" value="Submit name"> <br>
        </form>
    
        <?php
            $var = $_POST['name'];
            $varb = $_POST['last_name'];
            $varc = $_POST['postal_code'];

            echo "<h3>Hello $var $varb, your postal code is $varc </h3>";
            //print_r($_POST);
        ?>
    </body>

</html>