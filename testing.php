<?php
require 'template.php'; ?>
<nav id = "navvy" class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-            toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">Danny's Blog</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="discover.html">Discover</a></li> 
        <li><a href="inspire.html">Inspire</a></li> 
       </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user">    </span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-    in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>