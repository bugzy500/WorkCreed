<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>WorkCreed</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:400" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:900" rel="stylesheet">
  <meta name="description" content="LEARN.WORK.EARN.ALL AT THE SAME TIME. We provide a platform for Indian students to enhance their skills in a productive manner">  
</head>

<body>
<!-- NAVBAR STARTS HERE-->

<canvas id="nokey" width="800" height="800">
    Your Browser Don't Support Canvas, Please Download Chrome ^_^``
</canvas>

<script  src="js/index3.js"></script>



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


<div class="row signup_head"> <!--ROW 0 START -->
 


<div class="cyp"><h1><i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp; &nbsp; EDIT YOUR PROFILE</h1></div>


</div><!--ROW 0 END-->


<div class="row row_form">

          

<div class="col-sm-6">

  
  <div class="form signup_form">

          <form action="signup.php" method="post" autocomplete="off">

           <div class="field-wrap">
            <label>
              Sumit Yogi
            </label>
            <input type="text" required autocomplete="off" name="SCHOOL_COLLEGE" disabled="disabled" />
            </div>
          

          <div class="field-wrap">
            <label>
              MOBILE NUMBER<span class="req">*</span>
            </label>
            <input type="number" required autocomplete="off" name='MOBILE NUMBER' />
          </div>
          

           <div class="field-wrap">
            <label>
              CITY<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name='CITY'/>
          </div>

</div>


</div>  <!-- col-sm-6(1) end-->

<div class="col-sm-6">

<div class="form signup_form">


           <div class="field-wrap">
            <label class="trans">
              STATE
            </label>
            <select id="STATE" name="STATE" class="form-control skills required">
                    <option value="1">Arunachal Pradesh</option>
                    <option value="2">Assam</option>
                    <option value="3">Bihar</option>
                    <option value="4">Chhattisgarh</option>
                    <option value="5">Goa</option>
                    <option value="6">Gujarat</option>
                    <option value="7">Haryana</option>
                    <option value="8">Himachal Pradesh</option>
                    <option value="9">Jammu and Kashmir</option>
                    <option value="10">Jharkhand</option>
                    <option value="11">Karnataka</option>
                    <option value="12">Kerala</option>
                    <option value="13">Madhya Pradesh</option>
                    <option value="14">Maharashtra</option>
                    <option value="15">Manipur</option>
                    <option value="16">Meghalaya</option>
                    <option value="17">Mizoram</option>
                    <option value="18">Nagaland</option>
                    <option value="19">Orissa</option>
                    <option value="20">Punjab</option>
                    <option value="21">Rajasthan</option>
                    <option value="22">Sikkim</option>
                    <option value="23">Tamil Nadu</option>
                    <option value="24">Tripura</option>
                    <option value="25">Uttar Pradesh</option>
                    <option value="26">Uttarakhand</option>
                    <option value="27">West Bengal</option>
                    <option value="28">Andaman and Nicobar Islands</option>
                    <option value="29">Chandigarh</option>
                    <option value="30">Dadra and Nagar Haveli</option>
                    <option value="31">Daman and Diu</option>
                    <option value="32">Lakshadweep</option>
                    <option value="33">New Delhi</option>
                    <option value="34">Puducherry</option>
                    <option value="35">Others</option>
                </select>
          </div>

           <div class="field-wrap">
            <label>
              PINCODE<span class="req">*</span>
            </label>
            <input type="number" required autocomplete="off" name='PINCODE'/>
          </div>



           <div class="field-wrap" id="hide">
            <label for="file" style="z-index: 99999; background: #fff; color: #000; font-weight: bold; width: 120px; cursor: pointer; border: 1px solid white;">Choose file</label>
            <form action="upload.php" method="post" enctype="multipart/form-data">
             <input type="file" name="fileToUpload" id="file" class="inputfile">
            </form> 
          </div>
          



</div> <!--Signup-form end-->

    

</div> <!-- col-sm-6(2) end-->



  <script src="js/index.js"></script>

</div> <!-- row end-->


<div class="row row_form_button">

  <div class="col-sm-12 row_form_button">
    
        <button type="submit" class="button button-block btn-signup" name="register"/>Register</button>

  </div>
</form> <!--FORM CLOSE-->

</div>




<div class="row row_form_note">

  <div class="col-sm-12">
    
        <div class="note"> NOTE: If you want to edit your skillset, mail us at workcreedofficial@gmail.com with the portfolio of that skill.</div>

  </div>

</div>




</body>

</html>