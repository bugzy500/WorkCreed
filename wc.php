<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
  <title>ADMIN | WorkCreed</title>
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




<div class="row">

  <div class="col-sm-6 forgot">

    <div class="cyp"><h1>STUDENT_DETAILS</h1></div>

  <div class="form form_admin" style="border: 1px solid white;">


    <form method="post">
           <div class="field-wrap">
            <label class="trans_skills">
              SELECT STUDENT
            </label>
                <select id="skillss" name="skillss" class="form-control skills required">
                <?php  while($row = mysqli_fetch_array($res)){ ?>
                      <option value=<?php $counter++;?>><?php  $Color="white"; 
                      echo '<div style="Color:'.$Color.'">'.$row['email'].'</div>'; ?></option><?php } ?>                  
                </select>
          </div>

            <button type="submit" name="submit11"class="button button-block" style="margin-bottom: 5px; ">SHOW DETAILS</button>


             <button type="submit" name="submit12" style="background-color: green;" class="button button-block" onclick="return confirm('Are you sure you want to APROOVE this item?');">APPROVE</button>
            <button type="submit" name="submit13" style="margin-top: 5px; background-color: red;" class="button button-block button-danger" onclick="return confirm('Are you sure you want to DELETE this item?');">DELETE</button>
    </form>
  </div>

</div>


  <div class="col-sm-6 forgot">

      <div class="cyp"><h1>client_recieved_form</h1></div>

  <div class="form form_admin" style="border: 1px solid white;">


    <form action="#" method="post">

           <div class="field-wrap">
            <label class="trans_skills">
              PID
            </label>
                <select id="skills" name="skills" class="form-control skills required">
                <?php  while($row = mysqli_fetch_array($res)){ ?>
                      <option value=<?php $counter++;?>><?php  $Color="white"; 
                      echo '<div style="Color:'.$Color.'">'.$row['email'].'</div>'; ?></option><?php } ?>                  
                </select>
          </div>





            <button type="submit" name="submit2" class="button button-block">SHOW DETAILS</button>

             <button type="submit" name="submit13" style="margin-top: 5px; background-color: green;" class="button button-block button-danger" onclick="return confirm('Are you sure you want to ACCEPT this item?');">ACCEPT</button>

             <button type="submit" name="submit13" style="margin-top: 5px; background-color: red;" class="button button-block button-danger" onclick="return confirm('Are you sure you want to DELETE this item?');">DELETE</button>

    </form>
  </div>

</div>


</div>




<div class="row">


  <div class="col-sm-6 forgot">

      <div class="cyp" style="margin-top: 10px;"><h1>PERSONAL NOTIFICATION</h1></div>

  <div class="form form_admin" style="border: 1px solid white;">


    <form action="#" method="post">
            <div class="field-wrap">
            <label>
              EMAIL ADDRESS<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" name="comment_user2"/>
            </div>

           <div class="field-wrap">
            <label>
              SUBJECT<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="comment_subject2"/>
            </div>

            <div class="field-wrap">
            <label>
              TEXT<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="comment_text2"/>
            </div>

            <div class="field-wrap">
            <label>
              PROJECT DESC FILES LINK<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="comment_link2"/>
            </div>




            <button type="submit" name="submit2" style="background-color: green;" class="button button-block" onclick="return confirm('SENDING THIS NOTIFICATION');">SEND NOTIFICATION</button>

    </form>
  </div>

</div>



  <div class="col-sm-6 forgot">

      <div class="cyp" style="margin-top: 10px;"><h1>NOTI &amp; BID TO STUDENT</h1></div>

  <div class="form form_admin" style="border: 1px solid white;">


    <form action="#" method="post">

           <div class="field-wrap">
            <label class="trans_skills">
              PID
            </label>
                <select id="skills" name="skills" class="form-control skills required">
                <?php  while($row = mysqli_fetch_array($res)){ ?>
                      <option value=<?php $counter++;?>><?php  $Color="white"; 
                      echo '<div style="Color:'.$Color.'">'.$row['email'].'</div>'; ?></option><?php } ?>                  
                </select>
          </div>

           <div class="field-wrap">
            <label class="trans_skills">
              SELECT SKILLS
            </label>
                <select id="SKILLS" name="comment_user3" class="form-control skills required">
                  <option value="ANDROID_APP DEVELOPMENT">ANDROID APP DEVELOPMENT</option>
                  <option value="WEBSITE_DEVELOPMENT">WEBSITE DEVELOPMENT</option>
                  <option value="DIGITAL_MARKETING">DIGITAL MARKETING</option>
                  <option value="ROBOTICS_DESIGNER">ROBOTICS DESIGNER</option>
                  <option value="FASHION_DESIGNING">FASHION DESIGNING</option>
                  <option value="PAINTING_|_SKETCHING">PAINTING | SKETCHING</option>
                  <option value="GRAPHIC_DESIGNING">GRAPHIC DESIGNING</option>
                  <option value="CALLIGRAPHY">CALLIGRAPHY</option>
                  <option value="CREATIVE_WRITING">CREATIVE WRITING</option>
                  <option value="DIGITAL_ART">DIGITAL ART</option>
                  <option value="INTERIOR_DESIGNING">INTERIOR DESIGNING</option>
                  <option value="ALL">ALL</option>                                    
                </select>
          </div>

           <div class="field-wrap">
            <label>
              SUBJECT<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="comment_subject2"/>
            </div>

            <div class="field-wrap">
            <label>
              TEXT<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="comment_text2"/>
            </div>

            <div class="field-wrap">
            <label>
              PROJECT DESC FILES LINK<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="comment_link2"/>
            </div>




            <button type="submit" name="submit2" style="background-color: green;" class="button button-block" onclick="return confirm('SENDING THIS NOTIFICATION');">SEND NOTIFICATION</button>

    </form>
  </div>

</div>



</div>






<div class="row">

  <div class="col-sm-6 forgot">

        <div class="cyp" style="margin-top: 10px;"><h1>BULK NOTIFICATION</h1></div>

  <div class="form form_admin" style="border: 1px solid white;">


    <form action="#" method="post">
           <div class="field-wrap">
            <label class="trans_skills">
              SELECT SKILLS
            </label>
                <select id="SKILLS" name="comment_user3" class="form-control skills required">
                  <option value="ANDROID_APP DEVELOPMENT">ANDROID APP DEVELOPMENT</option>
                  <option value="WEBSITE_DEVELOPMENT">WEBSITE DEVELOPMENT</option>
                  <option value="DIGITAL_MARKETING">DIGITAL MARKETING</option>
                  <option value="ROBOTICS_DESIGNER">ROBOTICS DESIGNER</option>
                  <option value="FASHION_DESIGNING">FASHION DESIGNING</option>
                  <option value="PAINTING_|_SKETCHING">PAINTING | SKETCHING</option>
                  <option value="GRAPHIC_DESIGNING">GRAPHIC DESIGNING</option>
                  <option value="CALLIGRAPHY">CALLIGRAPHY</option>
                  <option value="CREATIVE_WRITING">CREATIVE WRITING</option>
                  <option value="DIGITAL_ART">DIGITAL ART</option>
                  <option value="INTERIOR_DESIGNING">INTERIOR DESIGNING</option>
                  <option value="ALL">ALL</option>                                    
                </select>
          </div>

           <div class="field-wrap">
            <label>
              SUBJECT<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="comment_subject3"/>
            </div>

            <div class="field-wrap">
            <label>
              SUBJECT<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="comment_text3"/>
            </div>

            <div class="field-wrap">
            <label>
              PROJECT DESC FILES LINK<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="comment_link3"/>
            </div>




            <button type="submit" name="submit3" style="background-color: green;" class="button button-block" onclick="return confirm('SENDING BULK NOTIFICATION');">SEND NOTIFICATION</button>

    </form>
  </div>

</div>


  <div class="col-sm-6 forgot">

           <div class="cyp" style="margin-top: 10px;"><h1>MAILING_CLIENT_INVOICE</h1></div>

  <div class="form form_admin" style="border: 1px solid white;">


    <form action="#" method="post">

           <div class="field-wrap">
            <label class="trans_skills">
              PID
            </label>
                <select id="skills" name="skills" class="form-control skills required">
                <?php  while($row = mysqli_fetch_array($res)){ ?>
                      <option value=<?php $counter++;?>><?php  $Color="white"; 
                      echo '<div style="Color:'.$Color.'">'.$row['email'].'</div>'; ?></option><?php } ?>                  
                </select>
          </div>

           <div class="field-wrap">
            <label>
              EMAIL ID<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" name="pid"/>
            </div>


            <div class="field-wrap">
            <label>
              INVOICE<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="student_email"/>
            </div>

            <div class="field-wrap">
            <label>
              DETAILS AND LINKS<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="details"/>
            </div>



            <button type="submit" name="submit4" style="background-color: green;" class="button button-block" onclick="return confirm('ASSIGNING THIS TASK');">ASSIGN</button>

    </form>
  </div>

</div>


</div>






<div class="row">

  <div class="col-sm-6 forgot">

        <div class="cyp" style="margin-top: 10px;"><h1>PAYMENT RECIEVED</h1></div>

  <div class="form form_admin" style="border: 1px solid white;">


    <form action="#" method="post">
          
           <div class="field-wrap">
            <label class="trans_skills">
              PID
            </label>
                <select id="skills" name="skills" class="form-control skills required">
                <?php  while($row = mysqli_fetch_array($res)){ ?>
                      <option value=<?php $counter++;?>><?php  $Color="white"; 
                      echo '<div style="Color:'.$Color.'">'.$row['email'].'</div>'; ?></option><?php } ?>                  
                </select>
          </div>

           <div class="field-wrap">
            <label>
              PAYMENT MONEY<span class="req">*</span>
            </label>
            <input type="number" required autocomplete="off" name="comment_subject3"/>
            </div>




            <button type="submit" name="submit3" style="background-color: green;" class="button button-block" onclick="return confirm('PAYMENT');">PAYMENT</button>

    </form>
  </div>

</div>


  <div class="col-sm-6 forgot">

           <div class="cyp" style="margin-top: 10px;"><h1>ASSIGN</h1></div>

  <div class="form form_admin" style="border: 1px solid white;">


    <form action="#" method="post">

           <div class="field-wrap">
            <label class="trans_skills">
              PID
            </label>
                <select id="skills" name="skills" class="form-control skills required">
                <?php  while($row = mysqli_fetch_array($res)){ ?>
                      <option value=<?php $counter++;?>><?php  $Color="white"; 
                      echo '<div style="Color:'.$Color.'">'.$row['email'].'</div>'; ?></option><?php } ?>                  
                </select>
          </div>

           <div class="field-wrap">
            <label>
              EMAIL ID<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" name="pid"/>
            </div>


            <div class="field-wrap">
            <label>
              DETAILS AND LINKS<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="details"/>
            </div>



            <button type="submit" name="submit4" style="background-color: green;" class="button button-block" onclick="return confirm('ASSIGNING THIS TASK');">ASSIGN</button>

    </form>
  </div>

</div>


</div>





<script src="js/index.js"></script>
</body>

</html>
