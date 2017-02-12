<?php
require "template.php";
?>
<!-- CSS Styles -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Aldrich');
        body {
            background: url("img/blur.jpg") no-repeat;
            background-size: cover;
            font-family: 'Aldrich',san-serif;
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
                color:black;
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

<body onload="random_move()">
<canvas id="reactive-bg-canvas"></canvas><br><br><br><br><br>
  <div class="row">

<div class="col-sm-4" style="margin-left: 5%"><br>
<img src="img/iglogo.png" align="centre" width="60%" height="60%"> 
<h5><i style="color: white">A National Level Coding Competition</i></h5>
<h2 style="color:white">1 & 2 March 2017, KL University, Vijayawada</h2>
</div>
<div class="col-sm-7">
<p style="color: white;font-size: 15px" align="justify" ><b>IGNITE</b> is a national level coding competition organized by Department of Computer Science and Engineering of K. L. University to showcase the inner abilities of students in different areas. <br><br>
The name ‘IGNITE’ itself suggests, the main motto of this competition is intended to start a spark in the minds of the students with which they can explore their creative, technical and innovative potential to the maximum extent possible. Students are given a chance to convert their imagination and theories into real and tangible talent and showcase it in the various competitions, rekindling their passion. <br><br>
The fest comprises of different events such as Workshops and Coding Competitions, as well as cultural programs which help the students to learn something new in their respective academic areas. Disparate to other regular fests IGNITE is going to inculcate and explore coding skills from the future technocrats. ‘IGNITE’ also includes numerous spot events that ensure both fun and learning. It also has a lot to offer individually as it inculcates the essence of teamwork, competitive spirit and above all – being a technocrat.
</h4>
</div>
</div>

<?php
require "templatef.php";
?>