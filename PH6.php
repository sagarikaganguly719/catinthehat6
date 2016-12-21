<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
<style>  
    body{
        background-color:black;
    }
    
* {
  box-sizing: border-box;
}

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 25%;
  margin:0px;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 50px;
  right: 25px;
  font-size: 65px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: white;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: black;
  font-size: 20px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin: 4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
  
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
}
    a {
        color: white;
    }
    nav{
        background-color:yellowgreen;
        margin:0px;
        
    }
    navbar-header{
        color:white;
        font-style:bold;
        font-size:20px;
        
    }
    #blush1:hover{
        background-color:yellow;
        font-size:20px;
        font-style:bold;
        color:black;
        
     }  
     /* Popup container - can be anything you want */
.popup {
    position: relative;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* The actual popup */
.popup .popuptext {
    visibility: hidden;
    width: 500px;
    background-color: lightgreen;
    color: black;
    text-align: left;
    border-radius: 6px;
    padding: 8px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 20%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
    from {opacity: 0;}
    to {opacity: 1;}
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1 ;}
}
.chip {
    display: inline-block;
    padding: 0 25px;
    height: 50px;
    font-size: 16px;
    line-height: 50px;
    border-radius: 25px;
    background-color:yellow;
    margin:80px;
}

.chip img {
    float: left;
    margin: 0 10px 0 -25px;
    height: 50px;
    width: 50px;
    border-radius: 50%;
}
  /* .fixed-nav-bar{
         background-color:yellowgreen;
         position:fixed;
         top:0;
         left:0;
         right:0;
         z-index:9999;
     }*/
</style>
    </head>
    <body><div class="jumbotron" style="background-image:url(Leaves4.gif);margin:0px;">
        <h1  class="text-left" style="color:orangered;font-family:Times New Roman,Arial,serif;"><mark> TreeHouse.in <span class="glyphicon glyphicon-tree-deciduous" ></span></mark> 
        <!--a class="btn btn-success btn-lg active" style="float:right;margin-top:20px;" href="#">Logout</a-->                 
</div>   
    <nav class="navbar">
        <div class="navbar-header">
                <button type="button" class="navbar-toggle btn-default active" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar" style="background-color:black"></span>
                    <span class="icon-bar" style="background-color:black"></span>
                    <span class="icon-bar" style="background-color:black"></span>
                </button>
 <a id="blush1" class="navbar-brand" href="#"><span class="glyphicon glyphicon-home" style="font-size:20px;" ></span></a>                                       
            </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav" style="background-color:yellowgreen;color:white;font-size:20px;font-style:bold;">
                <li ><a id="blush1" href="#" >View</a></li>
                <li class="dropdown" ><a id="blush1" class="dropdown-toggle" data-toggle="dropdown" href="#" >About Us<span class="caret" ></span></a>
                    <ul class="dropdown-menu"  style="background-color:yellowgreen">
                        <li  style="font-size:20px;font-style:bold;"><a id="blush1" href="#" >Contact Us</a></li>
                        <li style="font-size:20px;font-style:bold;"><a id="blush1" href="#" >Follow Us</a></li>
                    </ul>
                </li>
            </ul> 
            <ul class="nav navbar-nav navbar-right">
                <li> <?php echo "<h4 style='font-size:20px;font-style:bold;color:white;'> " . $_SESSION["username"] . "</h4>"?> </li>
                <li style="font-size:20px;font-style:bold;"><a id="blush1" href="Logout.php" ><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
            </ul>
        </div>
    </nav>
         
        <div class="row">
  <div class="column">
      <img src="th10.jpg" style="width:100%;height:200px;" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
      <img src="th11.jpg" style="width:100%;height:200px;" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
      <img src="th5.jpg" style="width:100%;height:200px;" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
      <img src="th6.jpg" style="width:100%;height:200px;" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
   <div class="column">
       <img src="th14.jpg" style="width:100%;height:200px;" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
  </div>
             <div class="column">
                <img src="th9.jpg" style="width:100%;height:200px;" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
  </div>
             <div class="column">
                 <img src="th16.jpg" style="width:100%;height:200px;" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
  </div>
             <div class="column">
                 <img src="th13.jpg" style="width:100%;height:200px;" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
  </div>
             
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="popup numbertext" onclick="myFunction1()">1 / 8
      <span class="popuptext" id="myPopup1">Location:Dooars , Tariff:Rs3500/night</span>
      <button type="button" class="btn btn-success" onclick="window.location.replace('PH8.php')" style="float:right;">Book Now</button>
      </div>
      <img src="th10.jpg" style="width:100%;height:500px;">
     </div>

    <div class="mySlides">
      <div class="popup numbertext" onclick="myFunction2()">2 / 8
      <span class="popuptext" id="myPopup2">Location:Coorg , Tariff:Rs4900/night</span>
      <button type="button" class="btn btn-success" onclick="window.location.replace('PH8.php')">Book Now</button>
      </div>
      <img src="th11.jpg" style="width:100%;height:500px;">
    </div>

    <div class="mySlides">
      <div class="popup numbertext" onclick="myFunction3()">3 / 8
      <span class="popuptext" id="myPopup3">Location:Ooty , Tariff:Rs6500/night</span>
      <button type="button" class="btn btn-success" onclick="window.location.replace('PH8.php')">Book Now</button>
      </div>
      <img src="th5.jpg" style="width:100%;height:500px;">
    </div>
    
    <div class="mySlides">
        <div class="popup numbertext" onclick="myFunction4()">4 / 8
            <span class="popuptext" id="myPopup4">Location:Gangtok , Tariff:Rs9500/night</span>
            <button type="button" class="btn btn-success" onclick="window.location.replace('PH8.php')">Book Now</button>
        </div>
      <img src="th6.jpg" style="width:100%;height:500px;">
    </div>
      <div class="mySlides">
          <div class="popup numbertext" onclick="myFunction5()">5 / 8
      <span class="popuptext" id="myPopup5">Location:Manali , Tariff:Rs6500/night</span> 
      <button type="button" class="btn btn-success" onclick="window.location.replace('PH8.php')">Book Now</button>
      
          </div>
      <img src="th14.jpg" style="width:100%;height:500px;">
    </div>
      <div class="mySlides">
          <div class="popup numbertext" onclick="myFunction6()">6 / 8
              <span class="popuptext" id="myPopup6">Location:Darjeeling , Tariff:Rs4500/night</span>
              <button type="button" class="btn btn-success" onclick="window.location.replace('PH8.php')">Book Now</button>
          </div>
         <img src="th9.jpg" style="width:100%;height:500px;">
    </div>
      <div class="mySlides">
          <div class="popup numbertext" onclick="myFunction7()">7 / 8
              <span class="popuptext" id="myPopup7">Location:Kerala , Tariff:Rs5500/night</span>
              <button type="button" class="btn btn-success" onclick="window.location.replace('PH8.php')">Book Now</button>
          </div>
      <img src="th16.jpg" style="width:100%;height:500px;">
    </div>
      <div class="mySlides">
          <div class="popup numbertext" onclick="myFunction8()">8 / 8
          <span class="popuptext" id="myPopup8">Location:Nainital , Tariff:Rs9900/night</span>
          <button type="button" class="btn btn-success" onclick="window.location.replace('PH8.php')">Book Now</button>
          </div>
      <img src="th13.jpg" style="width:100%;height:500px;">
    </div>
      
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
        <img class="demo cursor" src="th10.jpg" style="width:100%;height:200px;" onclick="currentSlide(1)" alt="treehouse at Dooars">
    </div>
    <div class="column">
        <img class="demo cursor" src="th11.jpg" style="width:100%;height:200px;" onclick="currentSlide(2)" alt="treehouse at Coorg">
    </div>
    <div class="column">
      <img class="demo cursor" src="th5.jpg" style="width:100%;height:200px;" onclick="currentSlide(3)" alt="treehouse at Ooty">
    </div>
    <div class="column">
        <img class="demo cursor" src="th6.jpg" style="width:100%;height:200px;" onclick="currentSlide(4)" alt="treehouse at Gangtok">
    </div>
    <div class="column">
        <img class="demo cursor" src="th14.jpg" style="width:100%;height:200px;" onclick="currentSlide(5)" alt="treehouse at Manali">
    </div>
    <div class="column">
        <img class="demo cursor" src="th9.jpg" style="width:100%;height:200px;" onclick="currentSlide(6)" alt="treehouse at Darjeeling">
    </div>
    <div class="column">
        <img class="demo cursor" src="th16.jpg" style="width:100%;height:200px;" onclick="currentSlide(7)" alt="treehouse at Kerala">
    </div>
    <div class="column">
        <img class="demo cursor" src="th13.jpg" style="width:100%;height:200px;" onclick="currentSlide(8)" alt="treehouse at Nainital">
    </div>
  </div>
</div>
        <div class="row">
            <div class="col-md-6" style="background-color: yellow;margin:0px;">
                <h1>Hello Folks</h1><br>
                <h4>As of now,<br>
                    We are a small startup,who books Treehouses,<br>
                    in order to arrange an amazing vacation for you.</h4><br>
                    <h4>Currently, we're based at:</h4><br>
                    <h5> Symbiosis Institute of Technology ,Pune <br>
                        Lavale,TalMulshi,<br>
                        Pune: 412115.
                    </h5>
                
            </div>
            <div id="map" class="col-md-6" style="height:350px;width:50%;margin:0px;"></div>
        </div>
        
        <div class="jumbotron" style="height:250px;background-color:burlywood;margin:0px;" >
            <div class="text-center">
                    <h4 style="color:black;letter-spacing:5px;"><span class="glyphicon glyphicon-earphone" style="color:black;"></span>Contact :</h4>
                </div>
            <div class="text-center">
            <div class="popup chip" onclick="myFunction9()">
                <img src="saatvik.jpg" alt="Saatvik" width="96" height="96">
                 Saatvik Sridhar
                 <span class="popuptext" id="myPopup9"><h4>Contact number : 8605400265</h4></span>
                </div>
                <div class="popup chip" onclick="myFunction10()">
                  <img src="shago.jpg" alt="Sagarika" width="96" height="96">
                  Sagarika Ganguly
                  <span class="popuptext" id="myPopup10"><h4>Contact number : 8697536414</h4></span>
                </div>
                <div class="popup chip" onclick="myFunction11()">
                    <img src="Zee.jpg" alt="Zishan" width="96" height="96">
                    Zishan Ali
                <span class="popuptext" id="myPopup11"><h4>Contact number : 8806301690</h4></span>
                </div>
        </div>
        </div>
        <script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
<script>
// When the user clicks on div, open the popup
function myFunction1() {
    var popup = document.getElementById('myPopup1');
    popup.classList.toggle('show');
}
</script>
<script>
// When the user clicks on div, open the popup
function myFunction2() {
    var popup = document.getElementById('myPopup2');
    popup.classList.toggle('show');
}
</script>
<script>
// When the user clicks on div, open the popup
function myFunction3() {
    var popup = document.getElementById('myPopup3');
    popup.classList.toggle('show');
}
</script>
<script>
// When the user clicks on div, open the popup
function myFunction4() {
    var popup = document.getElementById('myPopup4');
    popup.classList.toggle('show');
}
</script>
<script>
// When the user clicks on div, open the popup
function myFunction5() {
    var popup = document.getElementById('myPopup5');
    popup.classList.toggle('show');
}
</script>
<script>
// When the user clicks on div, open the popup
function myFunction6() {
    var popup = document.getElementById('myPopup6');
    popup.classList.toggle('show');
}
</script>
<script>
// When the user clicks on div, open the popup
function myFunction7() {
    var popup = document.getElementById('myPopup7');
    popup.classList.toggle('show');
}
</script>
<script>
// When the user clicks on div, open the popup
function myFunction8() {
    var popup = document.getElementById('myPopup8');
    popup.classList.toggle('show');
}
</script>
<script>
// When the user clicks on div, open the popup
function myFunction9() {
    var popup = document.getElementById('myPopup9');
    popup.classList.toggle('show');
}
</script>
<script>
// When the user clicks on div, open the popup
function myFunction10() {
    var popup = document.getElementById('myPopup10');
    popup.classList.toggle('show');
}
</script>
<script>
// When the user clicks on div, open the popup
function myFunction11() {
    var popup = document.getElementById('myPopup11');
    popup.classList.toggle('show');
}
</script>
   <script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var myCenter = new google.maps.LatLng(18.541630, 73.728414)
  var mapOptions = {
    center: myCenter,
    zoom: 16,
     mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position: myCenter});
marker.setMap(map);
google.maps.event.addListener(marker,'click',function() {
    var infowindow = new google.maps.InfoWindow({
      content:"Symbiosis Institute of Technology"
    });
  infowindow.open(map,marker);
  });
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3Y-_QuyXXb6Xy9xChFtnKJrZH2oMarws&callback=myMap"
async defer></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <?php
        
        ?>
    </body>
</html>
