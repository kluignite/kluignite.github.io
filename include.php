<?php
require "template.php";
?>
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
            color: maroon;
            text-shadow: 1px 1px 2px solid black;
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
          font-size: 20px;
          font-family: 'Aldrich',san-serif;
        }
    </style>
    <body onload="random_move()">
<canvas id="reactive-bg-canvas"></canvas>
<div class="row">
    <div class="col-sm-9">
      <h1 align="center" class="title" style="color:darkorange;">#include</h1>
    </div>
    <div class="col-sm-3" style="color:white;">
      powered by <img src="img/codecheflogo.png" align="centre" width="50%" height="50%">
    </div>
    </div>
    <p class="body" style="color:white; text-align: justify;">Do you have a knack for competitive programming and always dreamt of winning the prestigious ACM ICPC? Then you will surely love this challenge! Designed on the lines of ICPC (and as challenging), #include is the flagship coding competition of IGNITE 2017 and is sure to unleash the inner coder of you! So what are you waiting for...come join the coding extravaganza and win prizes worth ₹65,000!
    </p>
    <h4><b>Problem Statement</b></h4>

    <p class="body" style="color:white; text-align: justify;">Contestants are required to solve competitive programming questions in the given amount of time. Programming and Algorithmic skills of the contestant would be tested.</p>

    <h4><b>Format</b></h4>

    <p class="body" style="color:white; text-align: justify;">It would be an online-offline contest hosted on Codechef with 2 rounds - One preliminary and the final round. The preliminary round will be pure offline held in the third week of February (date would be announced soon). The finals would be held on campus at KL University on 2 March 2017. </p>

    <h4><b>Certification</b></h4>

    <p class="body" style="color:white; text-align: justify;">Top three teams will be awarded Certificates of Excellence and cash prizes. All others Certificate of Participation. </p>


    <h4><b>Contact</b></h4>
   <p >Sandeep VVN <br>
    Coordinator, #include<br>
    14003136@kluniversity.in <br>
    8978080080</p>

<?php require "templatef.php";
?>