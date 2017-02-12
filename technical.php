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
            color: white;
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
<div class="row">
    <div class="col-sm-12">
      <h1 align="center" class="title" style="color:darkorange">Technical and Coding Competitions</h1>
    </div>
    </div>

<div>

  <!-- Nav tabs -->
 <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="streetcoding" role="tab" data-toggle="tab">Street Coding</a></li>
    <li role="presentation"><a href="#blindcoding" aria-controls="blindcoding" role="tab" data-toggle="tab">Blind Coding</a></li>
    <li role="presentation"><a href="#stocktrading" aria-controls="stocktrading" role="tab" data-toggle="tab">Stock Trading</a></li>
    <li role="presentation"><a href="#linuxmaster" aria-controls="linuxmaster" role="tab" data-toggle="tab">Linux Master</a></li>
    <li role="presentation"><a href="#capturetheflaw" aria-controls="capturetheflaw" role="tab" data-toggle="tab">Capture the Flaw</a></li>
    <li role="presentation"><a href="#googlinggenius" aria-controls="googlinggenius" role="tab" data-toggle="tab">Googling Genius</a></li>
    <li role="presentation"><a href="#cybertreasure" aria-controls="cybertreasure" role="tab" data-toggle="tab">Cyber Treasure Hunt</a></li>
    <li role="presentation"><a href="#langaming" aria-controls="langaming" role="tab" data-toggle="tab">LAN Gaming</a></li>
  </ul>


<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="streetcoding"><div class="row">
    <div class="col-sm-9">
      <h2 align="left" style="color:darkorange; font-size: 40px;">Street Coding</h2>
    </div>
    </div>
    <p class="body" style="color:white; text-align: justify;">Do you love coding whenever, wherever it’s possible? (not the Shakira song) Do you dream of algorithms in your sleep? Then come join the Street Coding to continue your love affair with coding! Go wherever the problem takes you (maybe the Library?) and return with the solution! Jump into the world of super challenging problems and solve it by any means possible!
    </p>
    <h4><b style="color: maroon">Problem Statement</b></h4>

    <p class="body" style="color:white; text-align: justify;">
Participants are given a problem which they need to solve by any means. They can refer any textbook, website or consult other person but need to get the solution before the allocated time ends!</p>

    <h4><b style="color: maroon">Format</b></h4>

    <p class="body" style="color:white; text-align: justify;">The event would consist of two fully online rounds accessible only in the college campus. </p>

    <h4><b style="color: maroon">Certification</b></h4>

    <p class="body" style="color:white; text-align: justify;">Top three participants will be awarded Certificates of Excellence and cash prizes. All others Certificate of Participation.
</p>
  <h4><b style="color: maroon";>Contact</b></h4>
  <p>V Bhargav Raj</p> 
  <p>14003177@kluniversity.in</p>
  <p>G Manikanta Varma</p>
  <p>14003086@kluniversity.in</p>
</div>
    <div role="tabpanel" class="tab-pane" id="blindcoding"><div class="row">
    <div class="col-sm-9">
      <h2 align="left" style="color:darkorange; font-size: 40px;">Blind Coding</h2>
    </div>
    </div>
    <p class="body" style="color:white; text-align: justify;">Are you a pro at coding without looking at the keyboard? Do you amaze your friends with your supersonic speeds in coding yet having least number of typos? Then this is the perfect event for you! Buckle up and join the fight for the coveted Blind Coder title where you code furiously without having a look at what you are typing (not the Hello World program though)
</p>
    <h4><b style="color: maroon;">Problem Statement</b></h4>

    <p class="body" style="color:white; text-align: justify;">
The participant needs to solve algorithmic challenges with the monitors turned off. Systems would be provided at the college for this.
</p>

    <h4><b style="color: maroon">Format</b></h4>

    <p class="body" style="color:white; text-align: justify;">
The event would be fully online with two levels with varying difficulty. Participants are given problem statements and need to code them in the allocated time. Person with the least number of errors wins!. </p>

    <h4><b style="color: maroon">Certification</b></h4>

    <p class="body" style="color:white; text-align: justify;">Top three participants will be awarded Certificates of Excellence and cash prizes. All others Certificate of Participation.
</p>


    <h4><b style="color: maroon">Contact</b></h4>
   <p>R Dileep </p>
<p>14003309@kluniversity.in</p>
<p>P Chakradhar Reddy</p>
<p>14003210@kluniversity.in</p>
</div>
    <div role="tabpanel" class="tab-pane" id="stocktrading"><div class="row">
    <div class="col-sm-9">
      <h2 align="left" style="color:darkorange; font-size: 40px;">Stock Trading</h2>
    </div>
    </div>
    <p class="body" style="color:white; text-align: justify;">Do you closely monitor the stock markets and follow the updates? Do you plan to invest your money in them but have no idea how they work? Then here’s your opportunity to learn more about them through real time simulation! Come join us and experience mixed emotions as you invest your (virtual) money and watch the markets rise and fall! 
</p>
    <h4><b style="color: maroon;">Problem Statement</b></h4>

    <p class="body" style="color:white; text-align: justify;">
Participants play the stock simulation game in an online environment (announced soon) and invest their virtual currency in the stocks they feel would be successful.
</p>

    <h4><b style="color: maroon">Format</b></h4>

    <p class="body" style="color:white; text-align: justify;">
It is a fully online event that begins 15 days before the fest. The person with the highest profit at the end of the 15 day window wins! No Terms and Conditions! </p>

    <h4><b style="color: maroon">Certification</b></h4>

    <p class="body" style="color:white; text-align: justify;">Top three participants will be awarded Certificates of Excellence and cash prizes. 
</p>


    <h4><b style="color: maroon">Contact</b></h4>
   <p>Sriram Avinash </p>
<p>14007147@kluniversity.in</p>
<p>P Srikar Kashyap</p>
<p>14003130@kluniversity.in</p>
</div>
    <div role="tabpanel" class="tab-pane" id="linuxmaster"><div class="row"><div class="col-sm-9">
      <h2 align="left" style="color:darkorange; font-size: 40px;">Linux Master</h2>
    </div> </div>
    <p class="body" style="color:white; text-align: justify;">Do you belong to the “Linux Cabal” of your college and secretly wish the Windows gets extinct? Are you the god (gawd) of the terminal and hate doing things through the GUI? Are you interested more about how awk works than how Trump is going to destroy the world? Then join us to prove you are truly the “Linux Master” that the world deserves. Solve through various  challenges and quizzes regarding the Linux and its components and emerge the participant with the highest “priority”</p>

    <h4><b style="color: maroon;">Problem Statement</b></h4>

    <p class="body" style="color:white; text-align: justify;">
Participants are tested on their knowledge about the Linux Kernel, its components like terminal, text processing features etc
</p>

    <h4><b style="color: maroon">Format</b></h4>

    <p class="body" style="color:white; text-align: justify;">
The event consists of two rounds : The first round deals with objective questions testing the overall knowledge of the participant. The second round is subjective and involves a fair bit of programming to solve given tasks
    <h4><b style="color: maroon">Certification</b></h4>

    <p class="body" style="color:white; text-align: justify;">Top three participants will be awarded Certificates of Excellence and cash prizes. All others Certificate of Participation.
</p>


    <h4><b style="color: maroon">Contact</b></h4>
   <p>V Vaishnavi  </p>
<p>14003149@kluniversity.in</p>
<p>M Sri Saranya</p>
<p>14003266@kluniversity.in</p> </div>
    <div role="tabpanel" class="tab-pane" id="cybertreasure"><div class="row"><div class="col-sm-9">
      <h2 align="left" style="color:darkorange; font-size: 40px;">Cyber Treasure Hunt</h2>
    </div> </div>
    <p class="body" style="color:white; text-align: justify;">Do you love watching Sherlock and easily get tired of waiting for the next season? Are you always fascinated on how <s>Dr Watson</s> Sherlock connects the dots and always wanted to emulate him? Then here’s your opportunity! Tighten your seat belt and join the journey of the “Science of Deduction” as you explore both the internet and the real world for subtle clues!
</p>

    <h4><b style="color: maroon;">Problem Statement</b></h4>

    <p class="body" style="color:white; text-align: justify;">
Contestants are required to solve interesting challenges and puzzles to find the next clues and unravel the mystery!
</p>

    <h4><b style="color: maroon">Format</b></h4>

    <p class="body" style="color:white; text-align: justify;">
Clues can be found both offline and online (like IP Addresses) and the participant needs to work in conjunction with both to progress.
    <h4><b style="color: maroon">Certification</b></h4>

    <p class="body" style="color:white; text-align: justify;">
Top three participants will be awarded Certificates of Excellence and cash prizes. All others Certificate of Participation.
</p>


    <h4><b style="color: maroon">Contact</b></h4>
   <p>A L Pravallika  </p>
<p>14003246@kluniversity.in</p>
<p>L Manasa</p>
<p>14003259@kluniversity.in</p> 
<p>B Vineetha</p>
<p>14003312@kluniversity.in</p>
</div>

   <div role="tabpanel" class="tab-pane" id="googlinggenius"><div class="row"><div class="col-sm-9">
      <h2 align="left" style="color:darkorange; font-size: 40px;">Googling Genius</h2>
    </div> </div>
    <p class="body" style="color:white; text-align: justify;">Good at browsing? Can search for anything on Internet? C'mon, Thats a talent too. Show yourself as the best googler on googling genius. All you need to do is just search in google. So easy right! Ignite in its 2nd edition of 2k17 welcomes you to showcase your talent. Indulge yourself in the event and grab prizes along with unlimited fun.
</p>

    <h4><b style="color: maroon;">Problem Statement</b></h4>

    <p class="body" style="color:white; text-align: justify;">
A hard copy of a person's photograph is given to the contestants. They should find out the person in the photograph by searching in google. Contestants are not allowed to scan the photographs using any other devices.
</p>

    <h4><b style="color: maroon">Format</b></h4>

    <p class="body" style="color:white; text-align: justify;">
Round 1: The participant will be given a photo of a great personality but unknown to anyone. But the pictures include clues. The team has to find out the person using clues. 
Round 2: Round 2 goes in the same way but clues are not given.
    <h4><b style="color: maroon">Certification</b></h4>

    <p class="body" style="color:white; text-align: justify;">
Top three participants will be awarded Certificates of Excellence and cash prizes. All others Certificate of Participation.
</p>


    <h4><b style="color: maroon">Contact</b></h4>
   <p>S Sowmya  </p>
<p>14003165@kluniversity.in</p>
<p>M Niveditha</p>
<p>14003272@kluniversity.in</p> 
</div>
    <div role="tabpanel" class="tab-pane active" id="capturetheflaw"><div class="row">
    <div class="col-sm-9">
      <h2 align="left" style="color:darkorange; font-size: 40px;">Capture the Flaw</h2>
    </div>
    </div>
    <p class="body" style="color:white; text-align: justify;">Are you the <i>Hacking Master</i> of your batch? Do your friends get frightened about you hacking their social profile? Do you love finding flaws and bugs in any software or website (or a system)? Then here's the right event for you! Race against time and compete against other <i>hackers</i> to identify the flaws and bugs in the given systems!
    </p>
    <h4><b style="color: maroon">Problem Statement</b></h4>

    <p class="body" style="color:white; text-align: justify;">
The participants would be given websites or computer systems with certain flaws. They need to identify these flaws in the given amount of time</p>

    <h4><b style="color: maroon">Format</b></h4>

    <p class="body" style="color:white; text-align: justify;">It is an offline event with 2 rounds held in the college campus </p>

    <h4><b style="color: maroon">Certification</b></h4>

    <p class="body" style="color:white; text-align: justify;">Top three participants will be awarded Certificates of Excellence and cash prizes. All others Certificate of Participation.
</p>
  <h4><b style="color: maroon";>Contact</b></h4>
  <p>K Uday Kiran Reddy</p> 
  <p>14003207@kluniversity.in</p>
</div>

<div role="tabpanel" class="tab-pane active" id="langaming"><div class="row">
    <div class="col-sm-9">
      <h2 align="left" style="color:darkorange; font-size: 40px;">Street Coding</h2>
    </div>
    </div>
    <p class="body" style="color:white; text-align: justify;">Do you love coding whenever, wherever it’s possible? (not the Shakira song) Do you dream of algorithms in your sleep? Then come join the Street Coding to continue your love affair with coding! Go wherever the problem takes you (maybe the Library?) and return with the solution! Jump into the world of super challenging problems and solve it by any means possible!
    </p>
    <h4><b style="color: maroon">Problem Statement</b></h4>

    <p class="body" style="color:white; text-align: justify;">
Participants are given a problem which they need to solve by any means. They can refer any textbook, website or consult other person but need to get the solution before the allocated time ends!</p>

    <h4><b style="color: maroon">Format</b></h4>

    <p class="body" style="color:white; text-align: justify;">The event would consist of two fully online rounds accessible only in the college campus. </p>

    <h4><b style="color: maroon">Certification</b></h4>

    <p class="body" style="color:white; text-align: justify;">Top three participants will be awarded Certificates of Excellence and cash prizes. All others Certificate of Participation.
</p>
  <h4><b style="color: maroon";>Contact</b></h4>
  <p>V Bhargav Raj</p> 
  <p>14003177@kluniversity.in</p>
  <p>G Manikanta Varma</p>
  <p>14003086@kluniversity.in</p>
</div>

</div>

<?php 
require "templatef.php";?>

</html>