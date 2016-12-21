<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
     
    </head>
    <body>
        <?php
        //removing all session variables
        session_unset();
        
        //destroying the session
        session_destroy();
        
        header("location:T8.html");
        ?>
    </body>
</html>
