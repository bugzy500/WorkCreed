<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>WorkCreed</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <link rel="icon"  href="images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/styles.css">
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/smoothscroll.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:400" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:900" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">

<script type="text/javascript">
  
  $('div').on( 'mousewheel DOMMouseScroll', function (e) { 
  
  var e0 = e.originalEvent;
  var delta = e0.wheelDelta || -e0.detail;

  this.scrollTop += ( delta < 0 ? 1 : -1 ) * 30;
  e.preventDefault();  
});

</script>

</head>


<body>


<div id="modalbackground" style=" position: absolute; height:100%; width:100%; display:none; z-index:10000; background-color: #000; opacity: 0.9;"></div>

<canvas id="nokey" width="800" height="800">
    Your Browser Don't Support Canvas, Please Download Chrome ^_^``
</canvas>

<!--POP UP-->

<div class="pop-up">
  <div class="content">
    <div class="container_popup">
      <div class="dots">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
      </div>
      
      <span class="close">close</span>
      
      <div class="title">
        <h1>subscribe</h1>
      </div>
      
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/256492/cXsiNryL.png" alt="Car">
      
      <div class="subscribe">
        <h1>Subscribe to get the latest <span>news &amp; updates</span>.</h1>
      
        <form>
          <input type="email" placeholder="Your email address">
          <input type="submit" value="Subscribe">
        </form>
      </div>
    </div>
  </div>
</div>


<!--  
  <script type = "text/javascript">
    window.onload=function(){setTimeout(showPopup,0005)};

    function showPopup()
    {
        document.getElementById('modalbackground').style.display='block';
        $('.pop-up').addClass('open');
        $('.pop-up .close').click(function(){
        $('.pop-up').removeClass('open');
        document.getElementById('modalbackground').style.display='none';
        });
    }
  </script>
-->



<!--POP UP END-->
<!-- NAVBAR STARTS HERE-->


<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid cf">
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
      <a href="#top" class="smoothScroll"><img class="img-responsive img-responsive1" style="vertical-align:middle" src="images/WCLOGO.png" alt="WorkCreed"/></a>


    
    </div>
    
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#top">HEY, ARPIT!</a></li>
        <a href="logout.php" class="bttn" style="letter-spacing: 1px;">LOG OUT</a>
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







<div class="row row_profile" id="top">

    <div class="col-sm-4 fc">
    


  <div class="container_profile">
  <div class="header-container">
    <div class="header">
      <h1 class="main-heading">ARPIT GARG</h1>
      <span class="tag">Web Developer</span>
      <span class="tag">Graphic Designer</span>
    </div> <!-- END header -->
  </div>
  
  <div class="overlay-header"></div>
  
  <div class="body">
    <img src="images/img1.jpg" alt="Profile Picture" class="body-image" />
    <div class="body-action-button u-flex-center">
      <svg fill="#ffffff" height="28" viewBox="0 0 24 24" width="28" xmlns="http://www.w3.org/2000/svg">
        <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/>
        <path d="M0 0h24v24H0z" fill="none"/>
      </svg>
    </div>
    <span class="body-stats">Credits <span>3.5k</span></span>
    <span class="body-stats">Friends <span>100</span></span>
    <div class="u-clearfix"></div>
    <div class="body-info">



                <div class="q_a">   &nbsp;   PROFILE VALIDITY </div>
                <div class="q_ans">   November, 2019 </div>

                <div class="q_a">   &nbsp;   CITY </div>
                <div class="q_ans">   Jaipur, Rajasthan </div>

                <div class="q_a">   &nbsp;   MOBILE NUMBER  </div>
                <div class="q_ans">   8005780538 </div>



    </div>
  </div>
  
</div>








    </div>

    <div class="col-sm-8 col_proj">

          <div class="row work">

              <div class="col-sm-4 col_icon border-right">
                <div class="center-align"><a href="#sec_1_head" class="real" onclick="showDiv1()"><i class="fa fa-file-text" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ACTIVE PROJECTS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>  <span class="badge">&nbsp;&nbsp;5&nbsp;&nbsp;</span>  </div>
              </div>

              <div class="col-sm-4 col_icon border-right">
                <div class="center-align"><a href="#sec_2_head" class="real" onclick="showDiv2()"><i class="fa fa-bell" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NOTIFICATIONS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>  <span class="badge">&nbsp;&nbsp;5&nbsp;&nbsp;</span>   </div>
              </div>

 

              <div class="col-sm-4 col_icon ">
                <div class="center-align"><a href="#sec_3_head" class="real" onclick="showDiv3()"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; COMPLETED PROJECTS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> <span class="badge">&nbsp;&nbsp;10&nbsp;&nbsp;</span>    </div>
              </div>




          </div>  

       <!--   <div class="display_panel">
            
            <div class="col-sm-10 noti"> ALL THE NOTIFICATIONS AND DETAILS WILL BE DISPLAYED HERE!!!
            </div>

          </div> -->




<div class="container_display">


<script type="text/javascript">

function showDiv1() {
   document.getElementById('sec_1').style.display = "block";
   document.getElementById('sec_2').style.display = "none";
   document.getElementById('sec_3').style.display = "none";

}

function showDiv2() {
   document.getElementById('sec_2').style.display = "block";
   document.getElementById('sec_1').style.display = "none";
   document.getElementById('sec_3').style.display = "none";
}

function showDiv3() {
   document.getElementById('sec_3').style.display = "block";
   document.getElementById('sec_1').style.display = "none";
   document.getElementById('sec_2').style.display = "none";
}

</script>


  <div id="sec_1">
  <div id="sec_1_head"> ACTIVE PROJECTS </div>


  <div class="new_noti alert alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    This alert box could indicate a dangerous or potentially negative action.This alert box could indicate a dangerous or potentially negative action.This alert box could indicate a dangerous or potentially negative action.
  </div>

  <div class="new_noti alert alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    This alert box could indicate a dangerous or potentially negative action.
  </div>

    <div class="new_noti alert alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    This alert box could indicate a dangerous or potentially negative action.
  </div>


  </div>

  <div id="sec_2" style="display: none;">
  <div id="sec_2_head"> NOTIFICATIONS</div>
  


  <div class="new_noti alert alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    This alert box could indicate a dangerous or potentially negative action.This alert box could indicate a dangerous or potentially negative action.This alert box could indicate a dangerous or potentially negative action.
  </div>


  </div>


  <div id="sec_3" style="display: none;">
  <div id="sec_3_head"> COMPLETED PROJECTS </div>


  <div class="new_noti alert alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    This alert box could indicate a dangerous or potentially negative action.This alert box could indicate a dangerous or potentially negative action.This alert box could indicate a dangerous or potentially negative action.
  </div>

  <div class="new_noti alert alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    This alert box could indicate a dangerous or potentially negative action.
  </div>


  </div>


  </div>



    </div>


</div> <!-- FULL END-->


<!--ROW 2 START -->
<!--
<div id="benefits" class="row"> 

<div class="benefits_heading">BENEFITS</div>

<div class="col-sm-6 row_benefits_vid">

<video controls poster="images/cover.jpg">
  <source src="media/wcnew.mp4" type="video/mp4">
Your browser does not support the video tag.
</video>


</div>

<div class="col-sm-6 row_benefits">

"Passion is the Genesis of genius", with belief in this ideology and confidence on the skills of the young generation to grab opportunities and embrace them; we bring to you a platform to cash your passion, your talents, your hobbies.<br>

Here at WorkCreed we are offering you to get experience on real-life projects and most importantly how to enhance your time management skills.<br>
A platform to showcase your talents and build up a portfolio that will provide you the better carrier opportunities.<br>
"So if you don't know what to do, start doing what you know."

</div>

</div>
-->
<!--ROW 2 END-->







</body>


</html>