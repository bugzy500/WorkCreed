<?php 
/* Reset your password form, sends reset.php password link */
?>
<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
  <title>WorkCreed | Cancel Project</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function () {
     $("nav").find("li").on("click", "a", function () {
        $('.navbar-collapse.in').collapse('hide');
      });
    });
  </script>
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:400" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:900" rel="stylesheet">
</head>

<body>

    


<canvas id="nokey" width="800" height="800">
    Your Browser Don't Support Canvas, Please Download Chrome ^_^``
</canvas>

<script  src="js/index3.js"></script>



<!-- NAVBAR STARTS HERE-->


<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid cf">
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
      <a href="index.php"><img class="img-responsive img-responsive1" style="vertical-align:middle" src="images/WCLOGO.png" alt="WorkCreed"/></a>
    
    </div>
    
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php" class="back"> <i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp;GO BACK TO HOME PAGE</a></li>
      </ul>
    </div>
  </div>
</nav>
<!--END OF NAVBAR-->

<!--FOOTER STARTS HERE-->

<div class="footer">
  <div class="foot-l">&copy;2018 WorkCreed</div>
  <div class="foot-r"><a href="#" class="footlink"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></div>
  <div class="foot-r"><a href="#" class="footlink"><i class="fa fa-twitter" aria-hidden="true"></i></a></div>
  <div class="foot-r"><a href="#" class="footlink"><i class="fa fa-envelope" aria-hidden="true"></i></a></div>
  <div class="foot-r"><a href="#" class="footlink"><i class="fa fa-instagram" aria-hidden="true"></i></a></div> 
  <div class="foot-r"><a href="#" class="footlink"><i class="fa fa-wikipedia-w" aria-hidden="true"></i></a></div> 

</div>

<!--FOOTER ENDS HERE-->




<div class="row">

  <div class="col-sm-12 forgot">

  <div class="form" style="border: 1px solid white; margin-top: 18vh;">

    <h1>Cancel Project</h1>

    <form action="forgot.php" method="post">
     <div class="field-wrap">
      <label>
        Email Address<span class="req">*</span>
      </label>
      <input type="email"required autocomplete="off" name="email"/>
    </div>


            <div class="field-wrap">
            <label>
              PROJECT ID<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="comment_link2"/>
            </div>

            <textarea name="comment" form="clientform" rows="4">DESCRIPTION OF THE WORK TO BE DONE</textarea>
             
    <button class="button button-block" onclick="return confirm('Are you sure you want to CANCEL This Project?');" style="background: red;">CANCEL PROJECT</button>
    </form>
  </div>

</div>

</div>
          
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>
</body>

</html>
