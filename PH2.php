<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        
    </head>
    <body>
               
        <?php
         $host="localhost";
        $user="root";
        $password="---your password----";
        $database="login";
        
        $conn=mysqli_connect($host, $user, $password, $database);
        
        session_start();
        if($_SERVER["REQUEST_METHOD"]=="POST"){
               
       $name=$_POST['username'];
       $p=$_POST['pass'];
       
       $_SESSION["username"]=$name;
       $sql="select * from login where username='$name' and password='$p'";
       $result=mysqli_query($conn,$sql);
       $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
      
       
       $count=  mysqli_num_rows($result);
       
       if($count==1){
       header("location: PH6.php");
      
       
       }else{
           echo "<script>alert('Username and Password is Wrong');window.location.href='T4.html'</script>";
       }
        }
      ?>
         
    </body>
</html>
