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
           /*  min-height: 800px; */
        }

        h2 {
            left:50%;
            color: darkred;
            text-align: center;
            text-shadow: 1px 1px 2px black;
           /* position: fixed; */
        }

        button {
            font-size: large;
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
        }
        .title{
          font-family: 'Aldrich',san-serif;
          color:black;
          font-size: 50px;
        }
        .body{
          font-size: 20px;
        }
        .title3{
        font-family: 'Aldrich',san-serif;
          color:black;
          font-size: 25px;
        }
        a {
            color: white;
            font-family: 'Aldrich',san-serif;
        }
        .desc{
            font-size: 15px;
            font-family: 'Aldrich',san-serif;
        }
        p {
          color: white;
        }
       

       
    </style>
<body onload="random_move()">
<canvas id="reactive-bg-canvas"></canvas>
  <div class="row">   <div class="col-sm-12">
      <h1 align="center" class="title" style="color:darkorange; text-shadow: 1px 1px 2px black">Our Sponsors and Partners</h1>
    </div>
    </div>

 <div class="row">
    <div class="col-sm-12"><h2 >#include</h2><br></div></div>
  <div class="row"> <div class="col-sm-4"></div><div class="col-sm-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://codechef.com"><img src="img/codecheflogo.png" width="50%" height="50%" align="center"></a></div> <div class="col-sm-4"></div> </div><br><br>
     <div class="row">
    <div class="col-sm-12"><h2 >Technical Events</h2><br></div></div>
  <div class="row"> <div class="col-sm-4"></div><div class="col-sm-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://hackerrank.com"><img src="img/hackerrank.png" width="50%" height="50%" align="center"></a></div> <div class="col-sm-4"></div> </div>
<br><br>
     <div class="row">
    <div class="col-sm-12"><h2 >Website Hosting Sponsor</h2><br></div></div>
  <div class="row"> <div class="col-sm-4"></div><div class="col-sm-4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://tenethost.com/"><img src="img/tenethost.png" width="50%" height="50%" align="center"></a></div> <div class="col-sm-4"></div> </div>

<?php require "templatef.php";?>
