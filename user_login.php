<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>WorkCreed</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon"  href="images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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


<!--LOGIN FORM-->
<div class="row">

  <div class="col-sm-6">

      <div class="form">
      
      <ul class="tab-group">
        <li class="tab"><a href="#signup">SIGN UP</a></li>
        <li class="tab active"><a href="#login">LOG IN</a></li>
      </ul>
      
        <div class="tab-content">

         <div id="login">   
          <h1>WELCOME BACK!</h1>
          
          <form action="user_login.php" method="post" autocomplete="off">
          
            <div class="field-wrap">
            <label>
              EMAIL ADDRESS<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" name="email"/>
            </div>
          
            <div class="field-wrap">
            <label>
              PASSWORD<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name="password"/>
           </div>
          
          <p class="forgot"><a href="forgot.php">Forgot Password?</a></p>
          
          <button class="button button-block" name="login" />Log In</button>
          
          </form>

          </div>
          
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="user_login.php" method="post" autocomplete="off">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name='firstname' />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name='lastname' />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name='email' />
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name='password'/>
          </div>
          
          <button type="submit" class="button button-block" name="register" />Register</button>
          
          </form>

        </div>  
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->

    <script src="js/index.js"></script>

</div><!--col-sm-8 && LOGIN FORM END-->

<div class="col-sm-6">

<div id="trgt" class="quote">WorkCreed is a platform for college going students where they can work on real life projects and earn money experience while doing it. So what are you waiting for?? </div>

      <script  src="js/index2.js"></script>
</div>

</div><!--ROW 1 END-->




</body>
</html>