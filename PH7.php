<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
<style>  
    
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
  background-color: grey;
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
  font-size: 75px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
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
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: lightgreen;
  padding: 2px 16px;
  color: black;
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
   /*.fixed-nav-bar{
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
        <h1  class="text-left" style="color:darkgreen;"> TreeHouse.in <span class="glyphicon glyphicon-tree-deciduous" ></span> 
        <a class="btn btn-success btn-lg active" style="float:right;margin-top:20px;" href="#">Logout</a>
                   
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
                <li class="dropdown" ><a id="blush1" class="dropdown-toggle" data-toggle="dropdown" href="#" >Bleh<span class="caret" ></span></a>
                    <ul class="dropdown-menu"  style="background-color:yellowgreen">
                        <li  style="font-size:20px;font-style:bold;"><a id="blush1" href="#" >Bleh1-1</a></li>
                        <li style="font-size:20px;font-style:bold;"><a id="blush1" href="#" >Bleh1-2</a></li>
                        <li style="font-size:20px;font-style:bold;"><a id="blush1" href="#" >Bleh1-3</a></li>
                    </ul>
                </li>
            
                <li ><a id="blush1" href="#" >Bleh-2</a></li>
                <li ><a id="blush1" href="#" >Bleh-3</a></li>
            </ul>           
        </div>
    </nav>
         
        <div class="row">
  <div class="column">
    <img src="th1.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="th4.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
      <img src="th5.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
      <img src="treehouse1.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
        <div class="column">
      <img src="th9.jpg" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
  </div>    
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 5</div>
      <img src="th1.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 5</div>
      <img src="th4.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 5</div>
      <img src="th5.jpg" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 5</div>
      <img src="treehouse1.jpg" style="width:100%">
    </div>
       <div class="mySlides">
      <div class="numbertext">5 / 5</div>
      <img src="th9.jpg" style="width:100%">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
      <img class="demo cursor" src="th1.jpg" style="width:100%" onclick="currentSlide(1)" alt="treehouse at Kerala ">
    </div>
    <div class="column">
      <img class="demo cursor" src="th4.jpg" style="width:100%" onclick="currentSlide(2)" alt="treehouse at Dooars">
    </div>
    <div class="column">
      <img class="demo cursor" src="th5.jpg" style="width:100%" onclick="currentSlide(3)" alt="treehouse at Koorg">
    </div>
    <div class="column">
      <img class="demo cursor" src="treehouse1.jpg" style="width:100%" onclick="currentSlide(4)" alt="treehouse at Ooty">
    </div>
    <div class="column">
      <img class="demo cursor" src="th9.jpg" style="width:100%" onclick="currentSlide(5)" alt="treehouse at Dalhousie ">
    </div>
  </div>
</div>

    
        <div class="row">
            <div class="col-md-6" style="background-color: yellow;margin:0px;">
                <h1>hello folks</h1>
            </div>
            <div class="col-md-6" style="background-color: yellowgreen">
                <h1>hello peeps</h1>
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
   
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <?php
        
        ?>
    </body>
</html>

