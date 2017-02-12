<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!-- Importing scripts (including particle effects, bootstrap, custom font(?) etc) -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet">
<link href="//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.2/normalize.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="css/overlay.css">
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<link rel="stylesheet" href="fire.css"> 
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="js/overlayindex.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenLite.min.js"></script>
<script src="js/magic-canvas.min.js"></script>
<title>IGNITE 2017 - A National Level Coding Competition by KL University</title>

<!-- CSS Styles -->
     <style>
        @import url('https://fonts.googleapis.com/css?family=Aldrich');
        body {
            background: url("img/blur.jpg") no-repeat;
            background-size: cover;
           /*  min-height: 800px; */
        }

        h2 {
            left:50%;
            color: white;
            font-size: 150%;
            font-family: 'Aldrich',san-serif;
           /* position: fixed; */
        }

        button {
            font-size: large;
            font-family: 'Aldrich',san-serif;
        }
        p {
             size: 150px;
             font-family: 'Aldrich',san-serif;
        }
        .bg-4 { 
             
             color: #ffffff;
             bottom: 0;
        }
        .author:hover {
                color:white;
        }
        .author {
            color:white;
        }
        a {
            color: white;
            font-family: 'Aldrich',san-serif;
        }

        h3 {
            font-size: 100%;
            font-family: 'Aldrich',san-serif;
        }

        
</style>

<!-- Background particle effect JS code -->

    <script>
        function random_move () {
            $.magicCanvas.draw({
                type:"random-move",
                rgb : function (circlePos) {
                    var px = circlePos.x;
                    var py = circlePos.y;
                    // do some computation....
                    return {r:parseInt(px % 255),g:parseInt(py % 255),b:203};
                }
            })
         };
</script>
</head>

<body onload="random_move()">
<canvas id="reactive-bg-canvas"></canvas>
   <nav>
<ul>
    <li><a href="index.html" style="color: white;">Home</a></li>
    <li><a href="include.html" style="color: white;">#include</a></li>
    <li><a href="technical.html" style="color: white;">Technical Events</a></li>
   <!-- <li><a href="#" style="color: white;">Non-Tech Events</a></li>  -->
    <li><a href="workshops.html" style="color: white;">Workshops</a></li>
    <li><a href="register.html" style="color: white;">Register</a></li>
</ul><br>
<div class="row">
    <div class="col-sm-3">
      <img src="img/focus.png" align="centre" width="30%" height="30%">
    </div>
    <div class="col-sm-6">
       <img src="img/klulogo.gif" align="centre" width="70%" height="70%">
    </div>
        <div class="col-sm-3">
       <p> in association with</p>
      <img src="img/codecheflogo.png" align="left" width="40%" height="40%">
      <img src="img/hackerrank.png" align="centre" width="30%" height="30%">
    </div>
  </div>

<h2>WORKSHOPS</h2>
<div class="col-sm-4">
<img src="img/wd.png" align="centre" width="60%" height="60%"><br><br><br>
<h2 style="color:white">Web Development</h2>
<h5><div class="mbr-buttons mbr-buttons--right"><button type="button" class="mbr-buttons__btn btn btn-lg btn-default"><a href="mit.html"><h4 style="color:black"> Know More</h4></a></button></div></h5>
</div>
<div class="col-sm-4"><br><br>
<!--<h5><i>A National Level Coding Competition</i></h5>-->
<img src="img/vr.png" align="centre" width="50%" height="50%"><br>
<h2 style="color:white">Virtual Reality (VR) App Design</h2>
<h5><div class="mbr-buttons mbr-buttons--right"><button type="button" class="mbr-buttons__btn btn btn-lg btn-default"><a href="mit.html"><h4 style="color:black"> Know More</h4></a></button></div></h5>
</div>
<div class="col-sm-4"><br><br><br><br>
<img src="img/mit.png" align="centre" width="80%" height="80%"><br><br><br><br>
<h2 style="color:white">MIT App Inventor</h2>
<h5><div class="mbr-buttons mbr-buttons--right"><button type="button" class="mbr-buttons__btn btn btn-lg btn-default"><a href="mit.html"><h4 style="color:black"> Know More</h4></a></button></div></h5>
</div>
<div class="button">
    <a class="btn-open" href="#"></a>
</div>
</nav>

<div class="overlay">
    <div class="wrap">
        <ul class="wrap-nav">
            <li><a href="include.html">#include</a>
            <ul>
                <li><a href="aboutus.html">About</a></li>
                <li><a href="#">Rules and Regulations</a></li>
                <li><a href="#">Problem Statement</a></li>
                <li><a href="#">Prizes</a></li>
                <li><a href="#">Contacts</a></li>
            </ul>
            </li>
            <li>Technical Events
            <ul>
                <li><a href="technical.html">Street Coding</a></li>
                <li><a href="technical.html">Blind Coding</a></li>
                <li><a href="technical.html">Stock Trading</a></li>
                <li><a href="technical.html">Capture the Flaw</a></li>
                <li><a href="technical.html">Linux Master</a></li>
            </ul>
            </li>
            <li><a href="#">Workshops</a>
            <ul>
                <li><a href="workshops.html">Web Development</a></li>
                <li><a href="workshops.html">Virtual Reality (VR)</a></li>
                <li><a href="workshops.html">MIT App Inventor</a></li>
            </ul>
            </li>
        </ul>
        <div class="social">
            <a href="http://facebook.com/kluignite">
            <div class="social-icon">
                <i class="fa fa-facebook"></i>
            </div>
            </a>
            <a href="http://twitter.com/kluignite">
            <div class="social-icon">
                <i class="fa fa-twitter"></i>
            </div>
            </a>
        </div>
    </div>
</div>
</body><br><br><br>
<footer class="container-fluid bg-4 text-center">
<div class="row">
        <div class="col-lg-12">
            <ul class="nav nav-tabs nav-justified">
                <li><a href="aboutus.html">About us</a></li>
                <li><a href="#">Accomodation</a></li>
                <li><a href="#">Reaching KL University</a></li>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Campus Ambassador Program</a></li>
                <li><small>Made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="http://srikarkashyap.github.io" class="author">Srikar Kashyap Pulipaka</a></small></li>
            </ul>
        </div>
    </div>
     
</footer>

</html>