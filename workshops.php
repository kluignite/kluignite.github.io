<?php

require "template.php";
?>
    <style>
        body {
            margin-left: 10%;
        }
       h2 {
            
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
<body onload="random_move()">
<canvas id="reactive-bg-canvas"></canvas>
<h2 align="left" style="color:darkorange; font-size: 40px;">Workshops</h2><br>
<div class="row">
<div class="col-sm-4">
<img src="img/wd.png" align="centre" width="60%" height="60%"><br><br><br>
<h2 style="color:white" align="centre">Web Development</h2>
</div>
<div class="col-sm-4"><br><br>
<!--<h5><i>A National Level Coding Competition</i></h5>-->
<img src="img/vr.png" align="centre" width="50%" height="50%"><br>
<h2 style="color:white;"">Virtual Reality (VR) App Design</h2>
</div>
<div class="col-sm-4"><br><br><br><br>
<img src="img/mit.png" align="centre" width="80%" height="80%"><br><br><br>
<h2 style="color:white" align="centre">MIT App Inventor</h2>
</div>
</div>

<?php
require "templatef.php";