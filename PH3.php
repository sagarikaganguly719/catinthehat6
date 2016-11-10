<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
    
       $to=$_POST['username'];
        $msg="I love you so very much you are the best";
         $header='From: sagarika.719@gmail.com';
          
       mail($to,"My pyaara mail from my project",$msg,$header);
     
        
        
        ?>
    </body>
</html>
