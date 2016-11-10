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
        
        
        $conn=new mysqli($host, $user, $password, $database);
                
        if($conn->connect_error)
        {
            die("Connection failed: ".$conn->connect_error);
        }
    $sql="SELECT * FROM login";
    $result= $conn->query($sql);
    
    if($result->num_rows > 0)
    {
        while($row= $result->fetch_assoc()){
            echo "name: ".$row["username"]. " password: ".$row["password"]."<br>";
            
        }
        
    }
    else
    {
        echo "0 results";
    }
    $conn->close();
        ?>
    </body>
</html>
