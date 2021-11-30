<!DOCTYPE php>
<php>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width =device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
</head>
<body>

<!-----Background Image----->
<style>
body {
  background-image: url('Images/F3.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>

<!-----Menu----->

<section class="header">
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img src="Images/Logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
   <i class="fa fa-bars"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li> 
       <li class="nav-item">
        <a class="nav-link" href="#">Service</a>
      </li> 
       <li class="nav-item">
        <a class="nav-link" href="#">Gallery</a>
      </li>       
       <li class="nav-item">
        <a class="nav-link" href="#">Clients</a>
      </li>       
       <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>      
    </ul>
    
<!-----Icons----->
 
         <ul class="right-menu ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Calculate My BMI</a>
          </li>          
          <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
      </li>
             <li><i class="fa fa-facebook"></i></li>
             <li><i class="fa fa-instagram"></i></li>
             <li><i class="fa fa-twitter"></i></li>
             <li><i class="fa fa-youtube"></i></li>
             <li>
                 <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search">
        <div class="input-group-append">
        <span class="input-group-text"><i class="fa fa-search"></i></span>
              </div>
            </div>
             </li>
         </ul>
  </div>
</nav>

<!-----Video----->

<video id="videoBG" poster="Images/Screenshot.png" autoplay muted loop style="width:100%;">
    <source src="Videos/Fitness%201.mp4" type="video/mp4">
</video>

<!-----Banner----->

<div class="banner">
   <div class="banner-img">
       <img src="Images/A5.jpg">
   </div>
   <div class="banner-title">
       <h1>Activate Beast Mode</h1>
       <h1>Grow Your Strength</h1>
   </div> 
</div>
</section>

<!-----Fitness and Streangth----->

<section class="Welcome">
    <div class="title-style4 text-center">
                <h1>WELCOME TO IRON PARADISE</h1>
            </div>
            <p class="text-center">IN OUR GLORIOUS, MADDENING COUNTRY, YOUR WORKOUT CAN BE THE DIFFERENCE BETWEEN A GOOD DAY AND A BAD ONE.</p>
            <p class="text-center">WE BELIEVE THAT THE ENVIRONMENT YOU TRAIN IN IS AS IMPORTANT AS THE TRAINING ITSELF.</p> 
            <p class="text-center">IRON PARADISE CHALLENGES THE MONOTONY OF STANDARD GYMS WITH UNIQUE FEATURES AND MATERIALS TO MAKE OUR MEMBERS FEEL COMFORTABLE AND INSPIRED.</p>
            <p class="text-center">LET US HELP YOU BECOME BETTER.</p>
    
<!-----Lifter Image----->
                                        
            <div class="lifter-img">
            <img src="Images/AB2.png" class="center">
        </div>
</section>

<!-----SlideShow----->

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="Images/H1.jpg" style="width:100%">
  <div class="text">Streangth</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="Images/H2.jpg" style="width:100%">
  <div class="text">Courage</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="Images/H3.jpg" style="width:100%">
  <div class="text">Wisdom</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="Images/H4.png" style="width:100%">
  <div class="text">Never Give Up</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>


<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); // Change image every 4 seconds
}
</script>

<!--Start of Flow XO Script-->
<script src="https://widget.flowxo.com/embed.js" data-fxo-widget="eyJ0aGVtZSI6IiMyOWU2OWIiLCJ3ZWIiOnsiYm90SWQiOiI2MTk5ZTM5ZmQ2ODhkNTFhNmRlYzM1NzMiLCJ0aGVtZSI6IiMyOWU2OWIiLCJsYWJlbCI6Iklyb24gUGFyYWRpc2UgVmlydHVhbCBBc3Npc3RhbnQifSwid2VsY29tZVRleHQiOiJDaGF0IHdpdGggVXMg8J+RhyJ9" async defer></script>
<!--End of Flow XO Script-->

<!-----Design----->

    <p><div class="design" style="text-align: center">&copy; <em>2021</em> Iron Paradise (Fitness Website) Project | Designed by <strong>Himaz Mowlana</strong></div></p>

</body>    