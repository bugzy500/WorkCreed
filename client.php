<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Client | WorkCreed</title>
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
        <a target="_blank" href="cancel_project.php" class="bttn" style="letter-spacing: 1px;">CANCEL PROJECT</a>
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

<div class="row signup_head"> <!--ROW 0 START -->
 


<div class="cyp"><h1>SUBMIT YOUR PROJECT DETAILS</h1></div>


</div><!--ROW 0 END-->






<div class="row row_form">

          

<div class="col-sm-6">

  
  <div class="form signup_form">

          <form action="signup.php" method="post" autocomplete="off" id="clientform">

           <div class="field-wrap">
            <label>
              NAME<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="COLLEGE"/>
            </div>
          
            <div class="field-wrap">
            <label>
              E-MAIL ADDRESS<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" name="GRADUATION YEAR"/>
           </div>

          <div class="field-wrap">
            <label>
              MOBILE NUMBER<span class="req">*</span>
            </label>
            <input type="number" required autocomplete="off" name='MOBILE NUMBER' />
          </div>

          <div class="field-wrap">
            <label>
              PINCODE<span class="req">*</span>
            </label>
            <input type="number" required autocomplete="off" name='PINCODE'/>
          </div>

          <div class="field-wrap">
            <label class="trans_skills" >
              TYPE OF PROJECT
            </label>
                <select id="SKILLS" name="SKILLS" class="form-control skills required">
                  <option value="1" selected="selected">REGULAR</option>
                  <option value="2">URGENT (5% EXTRA COST)</option>
                  <option value="3">INTERN (10% EXTRA COST)</option>
                  <option value="4">CONTEST (8% EXTRA COST)</option>                 
                </select>
          </div>

</div>


</div>  <!-- col-sm-6(1) end-->

<div class="col-sm-6">

<div class="form signup_form">




           <div class="field-wrap">
            <label class="trans_skills">
              SELECT THE WORK FIELD
            </label>
                <select id="SKILLS" name="SKILLS" class="form-control skills required">
                  <option value="1">APP DEVELOPMENT</option>
                  <option value="2">WEBSITE DEVELOPMENT</option>
                  <option value="3">DIGITAL MARKETING</option>
                  <option value="4">ROBOTICS DESIGNER</option>
                  <option value="5">GRAPHIC DESIGN | MEDIA | ARCHITECTURE</option>
                  <option value="6">PAINTING | SKETCHING</option>
                  <option value="7">CONTENT WRITING</option>
                  <option value="8">PROGRAMMING</option>
                  <option value="9">TUTOR (NO PORTFOLIO NEEDED)</option>
                  <option value="10">PHOTOGRAPHY</option>
                  <option value="11">FASHION DESIGNING</option>

                </select>
          </div>
          <div class="field-wrap">
              <label class="trans_skills" style="transform: translateY(130px) !important;">
              DESCRIPTION OF THE WORK TO BE DONE
            </label>
          <textarea name="comment" form="clientform" rows="4"></textarea>
        </div>
          <div class="field-wrap">
            <label>
              PROJECT FILES LINK<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name='PROJECT_FILES'/>
          </div>

           <div class="field-wrap">
            <label>
              PROJECT PRICE<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" id="currency" name='PROJECT_FILES' onkeyup="FormatCurrency(this)" ;/>
          </div>


<script type="text/javascript">
 function FormatCurrency(ctrl) {
                //Check if arrow keys are pressed - we want to allow navigation around textbox using arrow keys
                if (event.keyCode == 37 || event.keyCode == 38 || event.keyCode == 39 || event.keyCode == 40) {
                    return;
                }

                var val = ctrl.value;

                val = val.replace(/,/g, "")
                ctrl.value = "";
                val += '';
                x = val.split('.');
                x1 = x[0];
                x2 = x.length > 1 ? '.' + x[1] : '';

                var rgx = /(\d+)(\d{3})/;

                while (rgx.test(x1)) {
                    x1 = x1.replace(rgx, '$1' + ',' + '$2');
                }

                ctrl.value = x1 + x2;
            }

            function CheckNumeric() {
                return event.keyCode >= 48 && event.keyCode <= 57 || event.keyCode == 46;
            }

</script>

</div> <!--Signup-form end-->

    

</div> <!-- col-sm-6(2) end-->



  <script src="js/index.js"></script>

</div> <!-- row end-->









<div class="row row_form_button">


 <div class="col-sm-12 row_form_button" style="margin-bottom: 10px; height: auto !important;">

    
    <button type="submit" class="button button-block btn-signup" name="submit_query"/>SUBMIT</button>

</div>

</form> <!--FORM CLOSE-->

</div>


<div class="row row_form_note">

  <div class="col-sm-12">
    
        <div class="note" style="letter-spacing: 1px;"> NOTE: IF YOU WANT TO SUBMIT ANY PROJECT FILES, please share the google drive, dropbox or any other link in <strong>PROJECT files</strong> field.</div>

  </div>

</div>


</body>
</html>