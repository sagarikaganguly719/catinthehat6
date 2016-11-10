<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $host="localhost";
        $user="root";
        $pass="sagarika";
        $db="login";
        
        $conn=mysqli_connect($host, $user, $pass, $db);
        session_start();
         if($_SERVER["REQUEST_METHOD"]=="POST"){
               
       $name=$_POST['username'];
       $p=$_POST['pass'];
       $sql="insert into login values('$name','$p')";
       $result=  mysqli_query($conn,$sql);
       if($result===true)
       {
           echo "new record created successfully";
       }
       else
       {
           echo "life is fucked";
       }
         }
        ?>
    </body>
</html>
