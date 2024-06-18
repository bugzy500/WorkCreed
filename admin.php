<?php 
/* Reset your password form, sends reset.php password link */
?>
<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
  <title>ADMIN@WorkCreed</title>
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
  <meta name="description" content="LEARN.WORK.EARN.ALL AT THE SAME TIME. We provide a platform for Indian students to enhance their skills in a productive manner"> 
</head>

<body>




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


<div class="row signup_head"> <!--ROW 0 START -->
 


<div class="cyp"><h1 style="margin-bottom: 0px !important;">STUDENT DETAILS</h1></div>


</div><!--ROW 0 END-->



<div class="row">

  <div class="col-sm-12 forgot">

  <div class="form form_admin" style="border: 1px solid white;">


    <form action="forgot.php" method="post">
           <div class="field-wrap">
            <label class="trans_skills">
              SELECT STUDENT
            </label>
                <select id="SKILLS" name="SKILLS" class="form-control skills required">
                  <option value="1">ANDROID APP DEVELOPMENT</option>
                  <option value="2">WEBSITE DEVELOPMENT</option>
                  <option value="3">DIGITAL MARKETING</option>
                  <option value="4">ROBOTICS DESIGNER</option>
                  <option value="5">FASHION DESIGNING</option>
                  <option value="6">PAINTING | SKETCHING</option>
                  <option value="7">GRAPHIC DESIGNING</option>                  
                </select>
          </div>

            <button type="submit" class="button button-block">SUBMIT</button>

            <div class="field-wrap">

              <div class="admin_field1">NAME</div>
              <div class="admin_field2">ARPIT GARG</div>

            </div> <br>

            <div class="field-wrap">
              <div class="admin_field1">COLLEGE</div>
              <div class="admin_field2">MALAVIYA NATIONAL INSTITUTE OF TECHNOLOGY</div>
            </div><br>


            <div class="field-wrap">
              <div class="admin_field1">GRADUATION YEAR</div>
              <div class="admin_field2">2022</div>
            </div><br>

            <div class="field-wrap">
              <div class="admin_field1">CONTACT NUMBER</div>
              <div class="admin_field2">848128972</div>
            </div><br>


            <div class="field-wrap">
              <div class="admin_field1">PORTFOLIO</div>
              <div class="admin_field2">LINK</div>
            </div><br>
            <button type="submit" style="background-color: green;" class="button button-block" onclick="return confirm('Are you sure you want to APROOVE this item?');">APPROVE</button>
            <button type="submit" style="margin-top: 10px; background-color: red;" class="button button-block button-danger" onclick="return confirm('Are you sure you want to DELETE this item?');">DELETE</button>
    </form>
  </div>

</div>

</div>




<div class="row signup_head" style="height: 15vh !important;"> <!--ROW 0 START -->
 


<div class="cyp" style="margin-top: 10px !important;"><h1 style="margin-bottom: 0px !important;">PERSONAL NOTIFICATIOn</h1></div>


</div><!--ROW 0 END-->





<div class="row">

  <div class="col-sm-12 forgot">

  <div class="form form_admin" style="border: 1px solid white;">


    <form action="forgot.php" method="post">
            <div class="field-wrap">
            <label>
              EMAIL ADDRESS<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" name="email"/>
            </div>

           <div class="field-wrap">
            <label>
              SUBJECT<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="SUBJECT"/>
            </div>

            <textarea name="comment" form="clientform" rows="4">DESCRIPTION OF THE WORK TO BE DONE</textarea>

            <div class="field-wrap">
            <label>
              PROJECT DESC FILES LINK<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="gdlink"/>
            </div>




            <button type="submit" style="background-color: green;" class="button button-block" onclick="return confirm('Are you sure you want to APROOVE this item?');">APPROVE</button>

    </form>
  </div>

</div>

</div>



<div class="row signup_head" style="height: 15vh !important;"> <!--ROW 0 START -->
 


<div class="cyp" style="margin-top: 10px !important;"><h1 style="margin-bottom: 0px !important;">BULK NOTIFICATION</h1></div>


</div><!--ROW 0 END-->




<div class="row">

  <div class="col-sm-12 forgot">

  <div class="form form_admin" style="border: 1px solid white;">


    <form action="forgot.php" method="post">
           <div class="field-wrap">
            <label class="trans_skills">
              SELECT STUDENT
            </label>
                <select id="SKILLS" name="SKILLS" class="form-control skills required">
                  <option value="1">ANDROID APP DEVELOPMENT</option>
                  <option value="2">WEBSITE DEVELOPMENT</option>
                  <option value="3">DIGITAL MARKETING</option>
                  <option value="4">ROBOTICS DESIGNER</option>
                  <option value="5">FASHION DESIGNING</option>
                  <option value="6">PAINTING | SKETCHING</option>
                  <option value="7">GRAPHIC DESIGNING</option>
                  <option value="7">ALL</option>                                    
                </select>
          </div>

           <div class="field-wrap">
            <label>
              SUBJECT<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="SUBJECT"/>
            </div>

            <textarea name="comment" form="clientform" rows="4">DESCRIPTION OF THE WORK TO BE DONE</textarea>

            <div class="field-wrap">
            <label>
              PROJECT DESC FILES LINK<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="gdlink"/>
            </div>




            <button type="submit" style="background-color: green;" class="button button-block" onclick="return confirm('Are you sure you want to APROOVE this item?');">APPROVE</button>

    </form>
  </div>

</div>

</div>








<div class="row signup_head" style="height: 15vh !important;"> <!--ROW 0 START -->
 


<div class="cyp" style="margin-top: 10px !important;"><h1 style="margin-bottom: 0px !important;">MAIL TO STUDENT</h1></div>


</div><!--ROW 0 END-->




<div class="row">

  <div class="col-sm-12 forgot">

  <div class="form form_admin" style="border: 1px solid white;">


    <form action="forgot.php" method="post">

           <div class="field-wrap">
            <label>
              REFERENCE ID<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="SUBJECT"/>
            </div>


            <div class="field-wrap">
            <label>
              E-MAIL ADDRESS<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" name="gdlink"/>
            </div>




            <button type="submit" style="background-color: green;" class="button button-block" onclick="return confirm('Are you sure you want to APROOVE this item?');">APPROVE</button>

    </form>
  </div>

</div>

</div>











<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>
</body>

</html>
