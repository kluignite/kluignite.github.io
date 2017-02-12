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
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenLite.min.js"></script>
<script src="js/magic-canvas.min.js"></script>
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/footer1.css">
<title>IGNITE 2017 - A National Level Coding Competition by KL University</title>

<!-- CSS Styles -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Aldrich');
        body {
            background: url("img/blur.jpg") no-repeat;
            background-size: cover;
           /*  min-height: 800px; */
        }

        h2,h4 {
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
        a,li {
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

    <nav class="navbar navbar-inverse navbar-default" role="navigation" style="background-color: transparent; border-color: transparent;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only"></span>
            <span style="color: white">Menu</span>
          </button>
          <a class="navbar-brand" href="#"></a>
        </div>

        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-left">
          <li><a>IGNITE 2017&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
            <li style="padding-right: 10px; "><a href="index.php" style="color:white; font-size: 20px">Home</a></li>
            <li  style="padding-right: 10px;"><a href="include.php" style="color:white; font-size: 20px">#include</a></li>
            <li  style="padding-right: 10px;"><a href="technical.php" style="color:white; font-size: 20px">Technical Events</a></li>
            <li  style="padding-right: 10px;"><a href="workshops.php" style="color:white; font-size: 20px">Workshops</a></li>
            <li  style="padding-right: 10px;"><a href="register.php" style="color:white; font-size: 20px">Register</a></li>
            <li  style="padding-right: 0px;"><a href="sponsors.php" style="color:white; font-size: 20px">Sponsors</a></li>
          

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

