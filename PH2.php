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
        $password="sagarika";
        $database="login";
        
        $conn=mysqli_connect($host, $user, $password, $database);
        
        session_start();
        if($_SERVER["REQUEST_METHOD"]=="POST"){
               
       $name=$_POST['username'];
       $p=$_POST['pass'];
       
       $sql="select * from login where username='$name' and password='$p'";
       $result=mysqli_query($conn,$sql);
       $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
      
       
       $count=  mysqli_num_rows($result);
       
       if($count==1){
       
       echo "welcome ".$name;
       
       }else{
           die("wrong user id password");
       }
        }
        
        
        
        ?>
    </body>
</html>
