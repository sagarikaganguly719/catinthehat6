<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
		
		
       $to=$_POST['username'];
        $subject="This is subject";
        $message="hi my love";
        $header="From:sagarika.719@gmail.com \r\n";
        $header .="MIME-Version: 1.0\r\n";
        $header .="Content-type: text/html\r\n";
       
        
        $retval= mail($to,$subject,$message,$header);
		ini_set("SMTP","ssl://smtp.gmail.com");
        ini_set("smtp_port","465");
      echo $retval;
      
      if($retval==true){
          echo "Message sent successfully";
      }
      else{
          echo "Message could not be sent";
          
      }
      
        ?>
    </body>
</html>

