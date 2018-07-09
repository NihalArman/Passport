<?php
SESSION_START();   
?>

<html>
    <head>
        <title>result</title>
    </head>
    
    <body>
        <?php
            echo "value is ".$_SESSION["NameOfApplicant"];
        ?>
    </body>
</html>