<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
       <link href="css/bootstrap.min.css" rel="stylesheet"/>
       <style>
        #myDiv{
        background-color:yellow;
        background-attachment: fixed;
        margin:0px;
 }
  #snackbar {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: yellow;
    color: black;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 30px;
    font-size: 17px;
}

#snackbar.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

#snackbar1 {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color:lightseagreen;
    color: white;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 30px;
    font-size: 17px;
}
#snackbar1.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}
#snackbar2 {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: darkslateblue;
    color: white ;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 30px;
    font-size: 17px;
}
#snackbar2.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}



@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}
 </style>
    </head>
    <body>
        <div class="jumbotron" style="background-color:white; background-image:url(leaves4.gif);margin:0px;">
    <h1  class="text-left" style="color:orangered;font-family:Times New Roman,Arial,serif;"><mark> TreeHouse.in <span class="glyphicon glyphicon-tree-deciduous" ></span></mark>
        <a class="btn btn-success btn-lg active" style="float:right;margin-top:20px;" href="Logout.php">Logout</a>
        </div>
        <div id="myDiv">
            <div class="text-center">
            <?php echo "<h1 style='font-size:50px;font-style:bold;color:black;letter-spacing:10px;margin:0px;'> " . $_SESSION["username"] . "</h1>"?> <br>
             <h3 style="font-size:30px;font-style:bold;color:black;letter-spacing:7px;word-spacing:10px;">Your Treehouse has been booked!</h3><br>
         </div>
        </div>
        <div class="jumbotron" style="height:150px;background-color:darkgreen;margin:0px;">
                
                <div class="text-center">
                    <h4 style="color:white;"><span class="glyphicon glyphicon-tag" style="color:white;letter-spacing:3px;"></span>  Follow us at :</h4>
                </div>
                <div class="text-center">
                    
                    <button class="btn btn-default" onclick="myFunction1()"><img class="img-responsive "  src="instaicon.png" style="width:35px;height:35px;padding:0px;"></button>
                     <button class="btn btn-default" onclick="myFunction2()"><img class="img-responsive " src="fbicon.png" style="width:35px;height:35px;padding:0px;"></button>
                    <button class="btn btn-default" onclick="myFunction()"><img class="img-responsive " src="snapchaticon.png" style="width:35px;height:35px;padding:0px;"></button>
                     
                </div>
                
                <div id="snackbar1">Instagram : @treehouse_dot_in</div>
                <div id="snackbar2">Facebook Page : TreeHouse.in</div>
                <div id="snackbar">Snapchat : TreeHousedotin</div>
                
                
            </div>
        
        <script>
            function myFunction() {
    var x = document.getElementById("snackbar")
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
function myFunction1() {
    var x = document.getElementById("snackbar1")
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
function myFunction2() {
    var x = document.getElementById("snackbar2")
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}

</script>
    </body>
</html>
