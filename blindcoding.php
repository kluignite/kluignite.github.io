<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet">
<link href="//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.2/normalize.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/overlay.css">
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/overlayindex.js"></script>
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>IGNITE 2017 - A National Level Coding Competition by KL University</title>
    <style>
     @import url('https://fonts.googleapis.com/css?family=Aldrich');
        body {
            background: url("img/blur.jpg") no-repeat;
            background-size: cover;
                        margin-left: 8%;
            margin-right: 8%;
            font-family: 'Aldrich',san-serif;
           /*  min-height: 800px; */
        }

        h2 {
            left:50%;
            color: white;
            font-family: 'Aldrich',san-serif;
           /* position: fixed; */
        }
        h4 {
            color: brown;
        }
        button {
            font-size: large;
            font-family: 'Aldrich',san-serif;
        }
        p {
             size: 150px;
             font-family: 'Aldrich',san-serif;
             color: white;
        }
        .bg-4 { 
             
             color: #ffffff;
             bottom: 0;
        }
        .author:hover {
                color:black;
        }
        .author {
            color:white;
        }
        a {
            color: white;
            font-family: 'Aldrich',san-serif;
        }
        .title{
          font-family: 'Aldrich',san-serif;
          color:white;
          font-size: 80px;
          text-align: left;
        }
        .body{
          font-size: 15px;
          font-family: 'Aldrich',san-serif;
        }
    </style>
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenLite.min.js"></script>
    <script src="js/magic-canvas.min.js"></script>

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
<div class="row">
    <div class="col-sm-9">
      <h1 align="center" class="title" style="color:darkorange;">Blind Coding</h1>
    </div>
    <div class="col-sm-3" style="color:white;">
      powered by <img src="codecheflogo.png" align="centre" width="50%" height="50%">
    </div>
    </div>
    <p class="body" style="color:white; text-align: justify;">Are you a pro at coding without looking at the keyboard? Do you amaze your friends with your supersonic speeds in coding yet having least number of typos? Then this is the perfect event for you! Buckle up and join the fight for the coveted Blind Coder title where you code furiously without having a look at what you are typing (not the Hello World program though)
</p>
    <h4><b>Problem Statement</b></h4>

    <p class="body" style="color:white; text-align: justify;">
The participant needs to solve algorithmic challenges with the monitors turned off. Systems would be provided at the college for this.
</p>

    <h4><b>Format</b></h4>

    <p class="body" style="color:white; text-align: justify;">
The event would be fully online with two levels with varying difficulty. Participants are given problem statements and need to code them in the allocated time. Person with the least number of errors wins!. </p>

    <h4><b>Certification</b></h4>

    <p class="body" style="color:white; text-align: justify;">Top three participants will be awarded Certificates of Excellence and cash prizes. All others Certificate of Participation.
</p>


    <h4><b>Contact</b></h4>
   <p>R Dileep </p>
<p>14003309@kluniversity.in</p>
<p>P Chakradhar Reddy</p>
<p>14003210@kluniversity.in</p>

</p><br><br><br>
</body>
<footer class="container-fluid bg-4 text-center">
<div class="row">
        <div class="col-lg-12">
            <ul class="nav nav-tabs nav-justified">
                <li><a href="aboutus.html">About us</a></li>    
                <li><a href="#">Accomodation</a></li>
                <li><a href="#">Reaching KL University</a></li>
                <li><a href="#">Contact us</a></li>
                <li><small>Made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="http://srikarkashyap.github.io" class="author">Srikar Kashyap Pulipaka</a></small></li>
            </ul>
        </div>
    </div>
     
</footer>



</html>