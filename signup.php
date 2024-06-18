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
  <script type="text/javascript"> 
    function showMyModalSetTitle(myTitle, myBodyHtml) {

   /*
    * '#myModayTitle' and '#myModalBody' refer to the 'id' of the HTML tags in
    * the modal HTML code that hold the title and body respectively. These id's
    * can be named anything, just make sure they are added as necessary.
    *
    */

   $('#myModalTitle').html(myTitle);
   $('#myModalBody').html(myBodyHtml);

   $('#myModal').modal('show');
}
  </script>
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
 


<div class="cyp"><h1><i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp; &nbsp; COMPLETE YOUR PROFILE</h1></div>


</div><!--ROW 0 END-->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>




<div class="row row_form">

          

<div class="col-sm-6">

  
  <div class="form signup_form">

          <form action="signup.php" method="post" autocomplete="off">

           <div class="field-wrap">
            <label>
              NAME OF (SCHOOL | COLLEGE)<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="SCHOOL_COLLEGE"/>
            </div>
          
            <div class="field-wrap">
            <label>
              AGE<span class="req">*</span>
            </label>
            <input type="number" required autocomplete="off" name="AGE"/>
           </div>

          <div class="field-wrap">
            <label>
              MOBILE NUMBER<span class="req">*</span>
            </label>
            <input type="number" required autocomplete="off" name='MOBILE NUMBER' />
          </div>
          
          <div class="field-wrap">
            <label class="trans">
              GENDER
            </label>
                <select id="GENDER" name="GENDER" class="form-control skills required">
                  <option value="1" selected="selected">MALE</option>
                  <option value="2">FEMALE</option>
                  <option value="3">OTHER</option>
                </select>
          </div>



</div>


</div>  <!-- col-sm-6(1) end-->

<div class="col-sm-6">

<div class="form signup_form">

          <div class="field-wrap">
            <label>
              CITY<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name='CITY'/>
          </div>


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




           <div class="field-wrap" data-tip="NOTE: Take snapshot of your school | college id and make a zip file of your previous work and upload it on google drive, dropbox etc. Then share the link with us in the college id | portfolio field. Your portfolio will be the way to get onboard on the workcreed team.">
            <label>
              COLLEGE ID | PORTFOLIO LINK<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name='COLLEGE ID | PORTFOLIO'/>
          </div>




</div> <!--Signup-form end-->

    

</div> <!-- col-sm-6(2) end-->



  <script src="js/index.js"></script>

</div> <!-- row end-->



<div class="row row_form_button" style=" margin: auto; width: 80%; font-family: 'Saira Extra Condensed',sans-serif; padding: 20px;">

  <div class="col-sm-12 row_form_button">
    
            <div class="field-wrap">
            <label class="trans_skills">
              SELECT PRIMARY SKILL
            </label>
                <select id="primary" name="SKILLS" class="form-control skills required">
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
                  <option value="11">FASHION DESIGN</option>

                </select>
          </div>

  </div>

<script type="text/javascript">
  

    document.getElementById("primary").onchange = function()
{

    if(this.value === "1")
    {
        document.getElementById('sub_category_1').style.display = "block";
        document.getElementById('sub_category_2').style.display = "none";
        document.getElementById('sub_category_3').style.display = "none";
        document.getElementById('sub_category_4').style.display = "none";
        document.getElementById('sub_category_5').style.display = "none";
        document.getElementById('sub_category_6').style.display = "none";
        document.getElementById('sub_category_7').style.display = "none";
        document.getElementById('sub_category_8').style.display = "none";
        document.getElementById('sub_category_9').style.display = "none";
        document.getElementById('sub_category_10').style.display = "none";
        document.getElementById('sub_category_11').style.display = "none";
        
    }
    else if(this.value == "2")
    {
        document.getElementById('sub_category_2').style.display = "block";
        document.getElementById('sub_category_1').style.display = "none";
        document.getElementById('sub_category_3').style.display = "none";
        document.getElementById('sub_category_4').style.display = "none";
        document.getElementById('sub_category_5').style.display = "none";
        document.getElementById('sub_category_6').style.display = "none";
        document.getElementById('sub_category_7').style.display = "none";
        document.getElementById('sub_category_8').style.display = "none";
        document.getElementById('sub_category_9').style.display = "none";
        document.getElementById('sub_category_10').style.display = "none";
        document.getElementById('sub_category_11').style.display = "none";
    }
    else if(this.value == "3")
    {
        document.getElementById('sub_category_3').style.display = "block";
        document.getElementById('sub_category_1').style.display = "none";
        document.getElementById('sub_category_2').style.display = "none";
        document.getElementById('sub_category_4').style.display = "none";
        document.getElementById('sub_category_5').style.display = "none";
        document.getElementById('sub_category_6').style.display = "none";
        document.getElementById('sub_category_7').style.display = "none";
        document.getElementById('sub_category_8').style.display = "none";
        document.getElementById('sub_category_9').style.display = "none";
        document.getElementById('sub_category_10').style.display = "none";
        document.getElementById('sub_category_11').style.display = "none";
    }
     else if(this.value == "4")
    {
        document.getElementById('sub_category_3').style.display = "none";
        document.getElementById('sub_category_1').style.display = "none";
        document.getElementById('sub_category_2').style.display = "none";
        document.getElementById('sub_category_4').style.display = "block";
        document.getElementById('sub_category_5').style.display = "none";
        document.getElementById('sub_category_6').style.display = "none";
        document.getElementById('sub_category_7').style.display = "none";
        document.getElementById('sub_category_8').style.display = "none";
        document.getElementById('sub_category_9').style.display = "none";
        document.getElementById('sub_category_10').style.display = "none";
        document.getElementById('sub_category_11').style.display = "none";
    }
     else if(this.value == "5")
    {
        document.getElementById('sub_category_3').style.display = "none";
        document.getElementById('sub_category_1').style.display = "none";
        document.getElementById('sub_category_2').style.display = "none";
        document.getElementById('sub_category_4').style.display = "none";
        document.getElementById('sub_category_5').style.display = "block";
        document.getElementById('sub_category_6').style.display = "none";
        document.getElementById('sub_category_7').style.display = "none";
        document.getElementById('sub_category_8').style.display = "none";
        document.getElementById('sub_category_9').style.display = "none";
        document.getElementById('sub_category_10').style.display = "none";
        document.getElementById('sub_category_11').style.display = "none";
    }
     else if(this.value == "6")
    {
        document.getElementById('sub_category_3').style.display = "none";
        document.getElementById('sub_category_1').style.display = "none";
        document.getElementById('sub_category_2').style.display = "none";
        document.getElementById('sub_category_4').style.display = "none";
        document.getElementById('sub_category_5').style.display = "none";
        document.getElementById('sub_category_6').style.display = "block";
        document.getElementById('sub_category_7').style.display = "none";
        document.getElementById('sub_category_8').style.display = "none";
        document.getElementById('sub_category_9').style.display = "none";
        document.getElementById('sub_category_10').style.display = "none";
        document.getElementById('sub_category_11').style.display = "none";
    }
     else if(this.value == "7")
    {
        document.getElementById('sub_category_3').style.display = "none";
        document.getElementById('sub_category_1').style.display = "none";
        document.getElementById('sub_category_2').style.display = "none";
        document.getElementById('sub_category_4').style.display = "none";
        document.getElementById('sub_category_5').style.display = "none";
        document.getElementById('sub_category_6').style.display = "none";
        document.getElementById('sub_category_7').style.display = "block";
        document.getElementById('sub_category_8').style.display = "none";
        document.getElementById('sub_category_9').style.display = "none";
        document.getElementById('sub_category_10').style.display = "none";
        document.getElementById('sub_category_11').style.display = "none";
    }
     else if(this.value == "8")
    {
        document.getElementById('sub_category_3').style.display = "none";
        document.getElementById('sub_category_1').style.display = "none";
        document.getElementById('sub_category_2').style.display = "none";
        document.getElementById('sub_category_4').style.display = "none";
        document.getElementById('sub_category_5').style.display = "none";
        document.getElementById('sub_category_6').style.display = "none";
        document.getElementById('sub_category_7').style.display = "none";
        document.getElementById('sub_category_8').style.display = "block";
        document.getElementById('sub_category_9').style.display = "none";
        document.getElementById('sub_category_10').style.display = "none";
        document.getElementById('sub_category_11').style.display = "none";
    }
     else if(this.value == "9")
    {
        document.getElementById('sub_category_3').style.display = "none";
        document.getElementById('sub_category_1').style.display = "none";
        document.getElementById('sub_category_2').style.display = "none";
        document.getElementById('sub_category_4').style.display = "none";
        document.getElementById('sub_category_5').style.display = "none";
        document.getElementById('sub_category_6').style.display = "none";
        document.getElementById('sub_category_7').style.display = "none";
        document.getElementById('sub_category_8').style.display = "none";
        document.getElementById('sub_category_9').style.display = "block";
        document.getElementById('sub_category_10').style.display = "none";
        document.getElementById('sub_category_11').style.display = "none";
    }
     else if(this.value == "10")
    {
        document.getElementById('sub_category_3').style.display = "none";
        document.getElementById('sub_category_1').style.display = "none";
        document.getElementById('sub_category_2').style.display = "none";
        document.getElementById('sub_category_4').style.display = "none";
        document.getElementById('sub_category_5').style.display = "none";
        document.getElementById('sub_category_6').style.display = "none";
        document.getElementById('sub_category_7').style.display = "none";
        document.getElementById('sub_category_8').style.display = "none";
        document.getElementById('sub_category_9').style.display = "none";
        document.getElementById('sub_category_10').style.display = "block";
        document.getElementById('sub_category_11').style.display = "none";
    }
    
    else if(this.value == "11")
    {
        document.getElementById('sub_category_3').style.display = "none";
        document.getElementById('sub_category_1').style.display = "none";
        document.getElementById('sub_category_2').style.display = "none";
        document.getElementById('sub_category_4').style.display = "none";
        document.getElementById('sub_category_5').style.display = "none";
        document.getElementById('sub_category_6').style.display = "none";
        document.getElementById('sub_category_7').style.display = "none";
        document.getElementById('sub_category_8').style.display = "none";
        document.getElementById('sub_category_9').style.display = "none";
        document.getElementById('sub_category_10').style.display = "none";
        document.getElementById('sub_category_11').style.display = "block";
    }
};


</script>

</div>



<div class="row row_form_button subc" id="sub_category_1">

  <div class="col-sm-12 subc_bord" >

  <input type="checkbox" name="APP" value="Android"> Android (Java)
  <input type="checkbox" name="APP" value="iOS"> iOS (Objective C | Swift)
  <input type="checkbox" name="APP" value="Xamarin"> Xamarin 
  <input type="checkbox" name="APP" value="UI_UX"> UI/UX
  <input type="checkbox" name="APP" value="React_Native"> React Native
  <input type="checkbox" name="APP" value="Ionic"> Ionic
  <input type="checkbox" name="APP" value="Angular_Mobile_Sencha_Touch"> Angular Mobile Sencha Touch
  <input type="checkbox" name="APP" value="Web_Apps"> Web Apps
  <input type="checkbox" name="APP" value="E-Commerce"> E-Commerce
  <input type="checkbox" name="APP" value="Corona"> Corona
  <input type="checkbox" name="APP" value="Cardova"> Cardova


  </div>

</div>


<div class="row row_form_button subc" id="sub_category_2">

  <div class="col-sm-12 subc_bord" >


    <input type="checkbox" name="WEBSITE" value="HTML"> HTML
    <input type="checkbox" name="WEBSITE" value="CSS"> CSS
    <input type="checkbox" name="WEBSITE" value="Bootstrap"> Bootstrap
    <input type="checkbox" name="WEBSITE" value="SQL"> SQL
    <input type="checkbox" name="WEBSITE" value="Java"> Java
    <input type="checkbox" name="WEBSITE" value="JSON"> JSON
    <input type="checkbox" name="WEBSITE" value="Ajax"> Ajax
    <input type="checkbox" name="WEBSITE" value="ASP"> ASP
    <input type="checkbox" name="WEBSITE" value="JavaScript"> JavaScript
    <input type="checkbox" name="WEBSITE" value="CMS"> CMS
    <input type="checkbox" name="WEBSITE" value="XML"> XML
    <input type="checkbox" name="WEBSITE" value="PHP"> PHP
    <input type="checkbox" name="WEBSITE" value="jQuery"> jQuery
    <input type="checkbox" name="WEBSITE" value="Python"> Python
    <input type="checkbox" name="WEBSITE" value="Angular.js"> Angular.js
    <input type="checkbox" name="WEBSITE" value="Ruby"> Ruby
    <input type="checkbox" name="WEBSITE" value="Node.js"> Node.js
    <input type="checkbox" name="WEBSITE" value="Wordpress"> WordPress
    <input type="checkbox" name="WEBSITE" value="Django"> Django
    <input type="checkbox" name="WEBSITE" value="Magento"> Magento
    <input type="checkbox" name="WEBSITE" value="CakePHP"> CakePHP
    <input type="checkbox" name="WEBSITE" value="DotNet"> .Net
    <input type="checkbox" name="WEBSITE" value="MEAN"> MEAN
    <input type="checkbox" name="WEBSITE" value="React.js"> React.js
    <input type="checkbox" name="WEBSITE" value="EC_website"> E-Commerce Website



  </div>

</div>


<div class="row row_form_button subc" id="sub_category_3">

  <div class="col-sm-12 subc_bord" >
    
    <input type="checkbox" name="DIGITAL" value="YOUTUBE"> Youtube
    <input type="checkbox" name="DIGITAL" value="FACEBOOK"> Facebook
    <input type="checkbox" name="DIGITAL" value="INSTAGRAM"> Instagram
    <input type="checkbox" name="DIGITAL" value="TWITTER"> Twitter
    <input type="checkbox" name="DIGITAL" value="FACEBOOK"> Blog Handling
    <input type="checkbox" name="DIGITAL" value="EMAIL"> E-Mail
    <input type="checkbox" name="DIGITAL" value="SEO"> SEO
    <input type="checkbox" name="DIGITAL" value="SEM"> SEM

  </div>

</div>


<div class="row row_form_button subc" id="sub_category_4">

  <div class="col-sm-12 subc_bord" >
    
    <input type="checkbox" name="ROBOTICS" value="Manual"> Manual
    <input type="checkbox" name="ROBOTICS" value="Autonomous"> Autonomous
    <input type="checkbox" name="ROBOTICS" value="Semi_Autonomous"> Semi-Autonomous
    <input type="checkbox" name="ROBOTICS" value="Python"> Python
    <input type="checkbox" name="ROBOTICS" value="Arduino"> Arduino
    <input type="checkbox" name="ROBOTICS" value="Raspberry_Pi"> Raspberry Pi
    <input type="checkbox" name="ROBOTICS" value="Peensy"> Peensy
    <input type="checkbox" name="ROBOTICS" value="VEX_Cortex"> VEX Cortex
    <input type="checkbox" name="ROBOTICS" value="MATLAB"> MATLAB
    <input type="checkbox" name="ROBOTICS" value="Drone"> RC Planes And Drones

  </div>

</div>


<div class="row row_form_button subc" id="sub_category_5">

  <div class="col-sm-12 subc_bord" >
    
    <input type="checkbox" name="GMA" value="Photoshop"> Adobe Photoshop
    <input type="checkbox" name="GMA" value="Illustrator"> Adobe Illustrator
    <input type="checkbox" name="GMA" value="InDesign"> Adobe InDesign
    <input type="checkbox" name="GMA" value="Lightroom"> Adobe Lightroom
    <input type="checkbox" name="GMA" value="AfterEffects"> Adobe AfterEffects
    <input type="checkbox" name="GMA" value="Media_Encoder"> Adobe Media Encoder
    <input type="checkbox" name="GMA" value="Flash"> Adobe Flash
    <input type="checkbox" name="GMA" value="Premiere"> Adobe Premiere
    <input type="checkbox" name="GMA" value="Animate"> Adobe Animate
    <input type="checkbox" name="GMA" value="Bridge"> Adobe Bridge
    <input type="checkbox" name="GMA" value="WhiteBoard"> WhiteBoard Animation
    <input type="checkbox" name="GMA" value="2D_animation"> 2D Animation
    <input type="checkbox" name="GMA" value="3D_Animation"> 3D Animation
    <input type="checkbox" name="GMA" value="3D_Modlling"> 3D Modelling
    <input type="checkbox" name="GMA" value="SketchUp"> Google SketchUp
    <input type="checkbox" name="GMA" value="Banner_Design"> Banner Design
    <input type="checkbox" name="GMA" value="Poster_Design"> Poster Design
    <input type="checkbox" name="GMA" value="Logo_Design"> Logo Design
    <input type="checkbox" name="GMa" value="Infographics"> Infographics
    <input type="checkbox" name="GMA" value="Video_Editing"> Video Editing
    <input type="checkbox" name="GMA" value="Corel_Draw"> Corel Draw
    <input type="checkbox" name="GMA" value="GIMP"> GIMP
    <input type="checkbox" name="GMA" value="MS_Office"> Microsoft Office
    <input type="checkbox" name="GMA" value="Open_Office"> Open Office
    <input type="checkbox" name="GMA" value="Filmora"> Wondershare Filmora
    <input type="checkbox" name="GMA" value="Final_Cut_Pro"> Final Cut Pro
    <input type="checkbox" name="GMA" value="Sony_Vegas_Pro"> Sony Vegas Pro
    <input type="checkbox" name="GMA" value="Blender"> Blender
    <input type="checkbox" name="GMA" value="Unity"> Unity 3D
    <input type="checkbox" name="GMA" value="Inventor"> Autodesk Inventor
    <input type="checkbox" name="GMA" value="3DS_Max"> Autodesk 3DS Max
    <input type="checkbox" name="GMA" value="SketchBook"> Autodesk SketchBook
    <input type="checkbox" name="GMA" value="UI_UX"> UI/UX
    <input type="checkbox" name="GMA" value="AutoCAD"> Autodesk AutoCAD
    <input type="checkbox" name="GMA" value="Revit"> Autodesk Revit
    <input type="checkbox" name="GMA" value="SolidWorks"> Altair SolidWorks
    <input type="checkbox" name="GMA" value="HyperMesh"> Altair HyperMesh
    <input type="checkbox" name="GMA" value="Wireframes"> Wireframes
    <input type="checkbox" name="GMA" value="Storyboards"> Storyboards


  </div>

</div>


<div class="row row_form_button subc" id="sub_category_6">

  <div class="col-sm-12 subc_bord" >
    
    <input type="checkbox" name="PAINTING_SKETCHING" value="Oil"> Oil Painting
    <input type="checkbox" name="PAINTING_SKETCHING" value="Water_Color"> Water Color Painting
    <input type="checkbox" name="PAINTING_SKETCHING" value="Pastel"> Pastel Painting
    <input type="checkbox" name="PAINTING_SKETCHING" value="Acrylic"> Acrylic Painting
    <input type="checkbox" name="PAINTING_SKETCHING" value="Digital"> Digital Painting
    <input type="checkbox" name="PAINTING_SKETCHING" value="Wall"> Wall Painting
    <input type="checkbox" name="PAINTING_SKETCHING" value="Concept"> Concept Drawing
    <input type="checkbox" name="PAINTING_SKETCHING" value="Presentation"> Presentation Drawing
    <input type="checkbox" name="PAINTING_SKETCHING" value="Technical"> Technical
    <input type="checkbox" name="PAINTING_SKETCHING" value="Diagrams"> Diagrams     

  </div>

</div>

<div class="row row_form_button subc" id="sub_category_7">

  <div class="col-sm-12 subc_bord" >
    
    <input type="checkbox" name="WRITING" value="Websites_Blogs"> Websites And Blogs
    <input type="checkbox" name="WRITING" value="Article"> Article
    <input type="checkbox" name="WRITING" value="Business"> Business
    <input type="checkbox" name="WRITING" value="Speech"> Speech
    <input type="checkbox" name="WRITING" value="Editorial"> Editorial
    <input type="checkbox" name="WRITING" value="Poems"> Poems
    <input type="checkbox" name="WRITING" value="Business"> Newsletter
    <input type="checkbox" name="WRITING" value="Business"> Technical
    <input type="checkbox" name="WRITING" value="Report"> Report
    <input type="checkbox" name="WRITING" value="LaTeX"> LaTeX
    <input type="checkbox" name="WRITING" value="ProofReading"> ProofReading



  </div>

</div>

<div class="row row_form_button subc" id="sub_category_8">

  <div class="col-sm-12 subc_bord" >
    
    <input type="checkbox" name="PROGRAMMING" value="C"> C
    <input type="checkbox" name="PROGRAMMING" value="Cpp"> C++
    <input type="checkbox" name="PROGRAMMING" value="Java"> Java
    <input type="checkbox" name="PROGRAMMING" value="Python"> Python
    <input type="checkbox" name="PROGRAMMING" value="C_sharp"> C#
    <input type="checkbox" name="PROGRAMMING" value="Ruby"> Ruby
    <input type="checkbox" name="PROGRAMMING" value="Objective_C"> Objective C
    <input type="checkbox" name="PROGRAMMING" value="PHP"> PHP
    <input type="checkbox" name="PROGRAMMING" value="MATLAB"> MATLAB


  </div>

</div>


<div class="row row_form_button subc" id="sub_category_9">

  <div class="col-sm-12 subc_bord" >
    
    <input type="checkbox" name="TUTOR" value="Maths"> Maths
    <input type="checkbox" name="TUTOR" value="Science"> Science
    <input type="checkbox" name="TUTOR" value="Social Science"> Social Science
    <input type="checkbox" name="TUTOR" value="EVS"> EVS
    <input type="checkbox" name="TUTOR" value="English"> English
    <input type="checkbox" name="TUTOR" value="Hindi"> Hindi
    <input type="checkbox" name="TUTOR" value="GK"> General Knowledge
    <input type="checkbox" name="TUTOR" value="Computer_Science"> Computer Science
    <input type="checkbox" name="TUTOR" value="Musical_Instruments"> Musical Instruments
    <input type="checkbox" name="TUTOR" value="Physics"> Physics
    <input type="checkbox" name="TUTOR" value="Chemistry"> Chemistry
    <input type="checkbox" name="TUTOR" value="Bilogy"> Bilogy
    <input type="checkbox" name="TUTOR" value="IP"> Informatics Practices
    <input type="checkbox" name="TUTOR" value="Economics"> Economics
    <input type="checkbox" name="TUTOR" value="Accounts"> Accounts
    <input type="checkbox" name="TUTOR" value="Business_Studies"> Business Studies
    <input type="checkbox" name="TUTOR" value="Advanced_Mathematics"> Advanced Mathematics
    <input type="checkbox" name="TUTOR" value="Geography"> Geography
    <input type="checkbox" name="TUTOR" value="History"> History
    <input type="checkbox" name="TUTOR" value="Civics"> Civics


  </div>

</div>

<div class="row row_form_button subc" id="sub_category_10">

  <div class="col-sm-12 subc_bord" >
    
    <input type="checkbox" name="PHOTOGRAPHY" value="Event_Photography"> Event Photography
    <input type="checkbox" name="PHOTOGRAPHY" value="Fashion_Photography"> Fashion Photography
    <input type="checkbox" name="PHOTOGRAPHY" value="Wildlife_Photography"> WildLife Photography
    <input type="checkbox" name="PHOTOGRAPHY" value="Landscape_Photography"> Landscape Photography
    <input type="checkbox" name="PHOTOGRAPHY" value="Action_Photography">  Action Photography
    <input type="checkbox" name="PHOTOGRAPHY" value="Sports_Photography"> Sports Photography
    <input type="checkbox" name="PHOTOGRAPHY" value="Fashion_Photography"> Fashion Photography
    <input type="checkbox" name="PHOTOGRAPHY" value="Food_Photography"> Food Photography
    <input type="checkbox" name="PHOTOGRAPHY" value="Travel_Photography"> Travel Photography
    <input type="checkbox" name="PHOTOGRAPHY" value="Product_Photography"> Product Photography
    <input type="checkbox" name="PHOTOGRAPHY" value="Night_Photography"> Night Photography
    <input type="checkbox" name="PHOTOGRAPHY" value="Underwater_Photography"> Underwater Photography


  </div>

</div>



<div class="row row_form_button subc" id="sub_category_11">

  <div class="col-sm-12 subc_bord" >
    
    <input type="checkbox" name="FASHION" value="Photoshop"> Adobe Photoshop
    <input type="checkbox" name="FASHION" value="Illustrator"> Adobe Illustrator
    <input type="checkbox" name="FASHION" value="InDesign"> Adobe InDesign
    <input type="checkbox" name="FASHION" value="Lightroom"> Adobe Lightroom
    <input type="checkbox" name="FASHION" value="2D_animation"> 2D Animation
    <input type="checkbox" name="FASHION" value="3D_Animation"> 3D Animation
    <input type="checkbox" name="FASHION" value="3D_Modlling"> 3D Modelling
    <input type="checkbox" name="FASHION" value="SketchUp"> Google SketchUp
    <input type="checkbox" name="FASHION" value="Corel_Draw"> Corel Draw
    <input type="checkbox" name="FASHION" value="GIMP"> GIMP
    <input type="checkbox" name="FASHION" value="Blender"> Blender
    <input type="checkbox" name="FASHION" value="Unity"> Unity 3D
    <input type="checkbox" name="FASHION" value="Inventor"> Autodesk Inventor
    <input type="checkbox" name="FASHION" value="3DS_Max"> Autodesk 3DS Max
    <input type="checkbox" name="FASHION" value="SketchBook"> Autodesk SketchBook
    <input type="checkbox" name="FASHION" value="AutoCAD"> Autodesk AutoCAD
    <input type="checkbox" name="FASHION" value="Revit"> Autodesk Revit
    <input type="checkbox" name="FASHION" value="SolidWorks"> Altair SolidWorks


  </div>

</div>


<div class="row row_form_button" style=" margin: auto; width: 80%; font-family: 'Saira Extra Condensed',sans-serif; padding: 20px;">

  <div class="col-sm-12 row_form_button">
    
            <div class="field-wrap">
            <label class="trans_skills">
              SELECT SECONDARY SKILL
            </label>
                <select id="secondary" name="SKILLS" class="form-control skills required">
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

  </div>

</div>

<script type="text/javascript">
  

    document.getElementById("secondary").onchange = function()
{

    if(this.value === "1")
    {
        document.getElementById('s_sub_category_1').style.display = "block";
        document.getElementById('s_sub_category_2').style.display = "none";
        document.getElementById('s_sub_category_3').style.display = "none";
        document.getElementById('s_sub_category_4').style.display = "none";
        document.getElementById('s_sub_category_5').style.display = "none";
        document.getElementById('s_sub_category_6').style.display = "none";
        document.getElementById('s_sub_category_7').style.display = "none";
        document.getElementById('s_sub_category_8').style.display = "none";
        document.getElementById('s_sub_category_9').style.display = "none";
        document.getElementById('s_sub_category_10').style.display = "none";
        document.getElementById('s_sub_category_11').style.display = "none";
        
    }
    else if(this.value == "2")
    {
        document.getElementById('s_sub_category_2').style.display = "block";
        document.getElementById('s_sub_category_1').style.display = "none";
        document.getElementById('s_sub_category_3').style.display = "none";
        document.getElementById('s_sub_category_4').style.display = "none";
        document.getElementById('s_sub_category_5').style.display = "none";
        document.getElementById('s_sub_category_6').style.display = "none";
        document.getElementById('s_sub_category_7').style.display = "none";
        document.getElementById('s_sub_category_8').style.display = "none";
        document.getElementById('s_sub_category_9').style.display = "none";
        document.getElementById('s_sub_category_10').style.display = "none";
        document.getElementById('s_sub_category_11').style.display = "none";
    }
    else if(this.value == "3")
    {
        document.getElementById('s_sub_category_3').style.display = "block";
        document.getElementById('s_sub_category_1').style.display = "none";
        document.getElementById('s_sub_category_2').style.display = "none";
        document.getElementById('s_sub_category_4').style.display = "none";
        document.getElementById('s_sub_category_5').style.display = "none";
        document.getElementById('s_sub_category_6').style.display = "none";
        document.getElementById('s_sub_category_7').style.display = "none";
        document.getElementById('s_sub_category_8').style.display = "none";
        document.getElementById('s_sub_category_9').style.display = "none";
        document.getElementById('s_sub_category_10').style.display = "none";
        document.getElementById('s_sub_category_11').style.display = "none";
    }
     else if(this.value == "4")
    {
        document.getElementById('s_sub_category_3').style.display = "none";
        document.getElementById('s_sub_category_1').style.display = "none";
        document.getElementById('s_sub_category_2').style.display = "none";
        document.getElementById('s_sub_category_4').style.display = "block";
        document.getElementById('s_sub_category_5').style.display = "none";
        document.getElementById('s_sub_category_6').style.display = "none";
        document.getElementById('s_sub_category_7').style.display = "none";
        document.getElementById('s_sub_category_8').style.display = "none";
        document.getElementById('s_sub_category_9').style.display = "none";
        document.getElementById('s_sub_category_10').style.display = "none";
        document.getElementById('s_sub_category_11').style.display = "none";
    }
     else if(this.value == "5")
    {
        document.getElementById('s_sub_category_3').style.display = "none";
        document.getElementById('s_sub_category_1').style.display = "none";
        document.getElementById('s_sub_category_2').style.display = "none";
        document.getElementById('s_sub_category_4').style.display = "none";
        document.getElementById('s_sub_category_5').style.display = "block";
        document.getElementById('s_sub_category_6').style.display = "none";
        document.getElementById('s_sub_category_7').style.display = "none";
        document.getElementById('s_sub_category_8').style.display = "none";
        document.getElementById('s_sub_category_9').style.display = "none";
        document.getElementById('s_sub_category_10').style.display = "none";
        document.getElementById('s_sub_category_11').style.display = "none";
    }
     else if(this.value == "6")
    {
        document.getElementById('s_sub_category_3').style.display = "none";
        document.getElementById('s_sub_category_1').style.display = "none";
        document.getElementById('s_sub_category_2').style.display = "none";
        document.getElementById('s_sub_category_4').style.display = "none";
        document.getElementById('s_sub_category_5').style.display = "none";
        document.getElementById('s_sub_category_6').style.display = "block";
        document.getElementById('s_sub_category_7').style.display = "none";
        document.getElementById('s_sub_category_8').style.display = "none";
        document.getElementById('s_sub_category_9').style.display = "none";
        document.getElementById('s_sub_category_10').style.display = "none";
        document.getElementById('s_sub_category_11').style.display = "none";
    }
     else if(this.value == "7")
    {
        document.getElementById('s_sub_category_3').style.display = "none";
        document.getElementById('s_sub_category_1').style.display = "none";
        document.getElementById('s_sub_category_2').style.display = "none";
        document.getElementById('s_sub_category_4').style.display = "none";
        document.getElementById('s_sub_category_5').style.display = "none";
        document.getElementById('s_sub_category_6').style.display = "none";
        document.getElementById('s_sub_category_7').style.display = "block";
        document.getElementById('s_sub_category_8').style.display = "none";
        document.getElementById('s_sub_category_9').style.display = "none";
        document.getElementById('s_sub_category_10').style.display = "none";
        document.getElementById('s_sub_category_11').style.display = "none";
    }
     else if(this.value == "8")
    {
        document.getElementById('s_sub_category_3').style.display = "none";
        document.getElementById('s_sub_category_1').style.display = "none";
        document.getElementById('s_sub_category_2').style.display = "none";
        document.getElementById('s_sub_category_4').style.display = "none";
        document.getElementById('s_sub_category_5').style.display = "none";
        document.getElementById('s_sub_category_6').style.display = "none";
        document.getElementById('s_sub_category_7').style.display = "none";
        document.getElementById('s_sub_category_8').style.display = "block";
        document.getElementById('s_sub_category_9').style.display = "none";
        document.getElementById('s_sub_category_10').style.display = "none";
        document.getElementById('s_sub_category_11').style.display = "none";
    }
     else if(this.value == "9")
    {
        document.getElementById('s_sub_category_3').style.display = "none";
        document.getElementById('s_sub_category_1').style.display = "none";
        document.getElementById('s_sub_category_2').style.display = "none";
        document.getElementById('s_sub_category_4').style.display = "none";
        document.getElementById('s_sub_category_5').style.display = "none";
        document.getElementById('s_sub_category_6').style.display = "none";
        document.getElementById('s_sub_category_7').style.display = "none";
        document.getElementById('s_sub_category_8').style.display = "none";
        document.getElementById('s_sub_category_9').style.display = "block";
        document.getElementById('s_sub_category_10').style.display = "none";
        document.getElementById('s_sub_category_11').style.display = "none";
    }
     else if(this.value == "10")
    {
        document.getElementById('s_sub_category_3').style.display = "none";
        document.getElementById('s_sub_category_1').style.display = "none";
        document.getElementById('s_sub_category_2').style.display = "none";
        document.getElementById('s_sub_category_4').style.display = "none";
        document.getElementById('s_sub_category_5').style.display = "none";
        document.getElementById('s_sub_category_6').style.display = "none";
        document.getElementById('s_sub_category_7').style.display = "none";
        document.getElementById('s_sub_category_8').style.display = "none";
        document.getElementById('s_sub_category_9').style.display = "none";
        document.getElementById('s_sub_category_10').style.display = "block";
        document.getElementById('s_sub_category_11').style.display = "none";
    }

         else if(this.value == "11")
    {
        document.getElementById('s_sub_category_3').style.display = "none";
        document.getElementById('s_sub_category_1').style.display = "none";
        document.getElementById('s_sub_category_2').style.display = "none";
        document.getElementById('s_sub_category_4').style.display = "none";
        document.getElementById('s_sub_category_5').style.display = "none";
        document.getElementById('s_sub_category_6').style.display = "none";
        document.getElementById('s_sub_category_7').style.display = "none";
        document.getElementById('s_sub_category_8').style.display = "none";
        document.getElementById('s_sub_category_9').style.display = "none";
        document.getElementById('s_sub_category_10').style.display = "none";
        document.getElementById('s_sub_category_11').style.display = "block";
    }
    
};

</script>

<div class="row row_form_button subc" id="s_sub_category_1">

  <div class="col-sm-12 subc_bord" >

  <input type="checkbox" name="APP" value="Android"> Android (Java)
  <input type="checkbox" name="APP" value="iOS"> iOS (Objective C | Swift)
  <input type="checkbox" name="APP" value="Xamarin"> Xamarin 
  <input type="checkbox" name="AP" value="UI_UX"> UI/UX
  <input type="checkbox" name="APP" value="React_Native"> React Native
  <input type="checkbox" name="APP" value="Ionic"> Ionic
  <input type="checkbox" name="APP" value="Angular_Mobile_Sencha_Touch"> Angular Mobile Sencha Touch
  <input type="checkbox" name="APP" value="Web_Apps"> Web Apps
  <input type="checkbox" name="APP" value="E-Commerce"> E-Commerce
  <input type="checkbox" name="APP" value="Corona"> Corona
  <input type="checkbox" name="APP" value="Cardova"> Cardova


  </div>

</div>


<div class="row row_form_button subc" id="s_sub_category_2">

  <div class="col-sm-12 subc_bord" >
    
    <input type="checkbox" name="WEBSITE" value="HTML"> HTML
    <input type="checkbox" name="WEBSITE" value="CSS"> CSS
    <input type="checkbox" name="WEBSITE" value="Bootstrap"> Bootstrap
    <input type="checkbox" name="WEBSITE" value="SQL"> SQL
    <input type="checkbox" name="WEBSITE" value="Java"> Java
    <input type="checkbox" name="WEBSITE" value="JSON"> JSON
    <input type="checkbox" name="WEBSITE" value="Ajax"> Ajax
    <input type="checkbox" name="WEBSITE" value="ASP"> ASP
    <input type="checkbox" name="WEBSITE" value="JavaScript"> JavaScript
    <input type="checkbox" name="WEBSITE" value="CMS"> CMS
    <input type="checkbox" name="WEBSITE" value="XML"> XML
    <input type="checkbox" name="WEBSITE" value="PHP"> PHP
    <input type="checkbox" name="WEBSITE" value="jQuery"> jQuery
    <input type="checkbox" name="WEBSITE" value="Python"> Python
    <input type="checkbox" name="WEBSITE" value="Angular.js"> Angular.js
    <input type="checkbox" name="WEBSITE" value="Ruby"> Ruby
    <input type="checkbox" name="WEBSITE" value="Node.js"> Node.js
    <input type="checkbox" name="WEBSITE" value="Wordpress"> WordPress
    <input type="checkbox" name="WEBSITE" value="Django"> Django
    <input type="checkbox" name="WEBSITE" value="Magento"> Magento
    <input type="checkbox" name="WEBSITE" value="CakePHP"> CakePHP
    <input type="checkbox" name="WEBSITE" value="DotNet"> .Net
    <input type="checkbox" name="WEBSITE" value="MEAN"> MEAN
    <input type="checkbox" name="WEBSITE" value="React.js"> React.js
    <input type="checkbox" name="WEBSITE" value="EC_website"> E-Commerce Website



  </div>

</div>


<div class="row row_form_button subc" id="s_sub_category_3">

  <div class="col-sm-12 subc_bord" >
    
    <input type="checkbox" name="DIGITAL" value="YOUTUBE"> Youtube
    <input type="checkbox" name="DIGITAL" value="FACEBOOK"> Facebook
    <input type="checkbox" name="DIGITAL" value="INSTAGRAM"> Instagram
    <input type="checkbox" name="DIGITAL" value="TWITTER"> Twitter
    <input type="checkbox" name="DIGITAL" value="FACEBOOK"> Blog Handling
    <input type="checkbox" name="DIGITAL" value="EMAIL"> E-Mail
    <input type="checkbox" name="DIGITAL" value="SEO"> SEO
    <input type="checkbox" name="DIGITAL" value="SEM"> SEM

  </div>

</div>


<div class="row row_form_button subc" id="s_sub_category_4">

  <div class="col-sm-12 subc_bord" >
    
    <input type="checkbox" name="ROBOTICS" value="Manual"> Manual
    <input type="checkbox" name="ROBOTICS" value="Autonomous"> Autonomous
    <input type="checkbox" name="ROBOTICS" value="Semi_Autonomous"> Semi-Autonomous
    <input type="checkbox" name="ROBOTICS" value="Python"> Python
    <input type="checkbox" name="ROBOTICS" value="Arduino"> Arduino
    <input type="checkbox" name="ROBOTICS" value="Raspberry_Pi"> Raspberry Pi
    <input type="checkbox" name="ROBOTICS" value="Peensy"> Peensy
    <input type="checkbox" name="ROBOTICS" value="VEX_Cortex"> VEX Cortex
    <input type="checkbox" name="ROBOTICS" value="MATLAB"> MATLAB
    <input type="checkbox" name="ROBOTICS" value="Drone"> RC Planes And Drones

  </div>

</div>


<div class="row row_form_button subc" id="s_sub_category_5">

  <div class="col-sm-12 subc_bord" >
    
    <input type="checkbox" name="GMA" value="Photoshop"> Adobe Photoshop
    <input type="checkbox" name="GMA" value="Illustrator"> Adobe Illustrator
    <input type="checkbox" name="GMA" value="InDesign"> Adobe InDesign
    <input type="checkbox" name="GMA" value="Lightroom"> Adobe Lightroom
    <input type="checkbox" name="GMA" value="AfterEffects"> Adobe AfterEffects
    <input type="checkbox" name="GMA" value="Media_Encoder"> Adobe Media Encoder
    <input type="checkbox" name="GMA" value="Flash"> Adobe Flash
    <input type="checkbox" name="GMA" value="Premiere"> Adobe Premiere
    <input type="checkbox" name="GMA" value="Animate"> Adobe Animate
    <input type="checkbox" name="GMA" value="Bridge"> Adobe Bridge
    <input type="checkbox" name="GMA" value="WhiteBoard"> WhiteBoard Animation
    <input type="checkbox" name="GMA" value="2D_animation"> 2D Animation
    <input type="checkbox" name="GMA" value="3D_Animation"> 3D Animation
    <input type="checkbox" name="GMA" value="3D_Modlling"> 3D Modelling
    <input type="checkbox" name="GMA" value="SketchUp"> Google SketchUp
    <input type="checkbox" name="GMA" value="Banner_Design"> Banner Design
    <input type="checkbox" name="GMA" value="Poster_Design"> Poster Design
    <input type="checkbox" name="GMA" value="Logo_Design"> Logo Design
    <input type="checkbox" name="GMa" value="Infographics"> Infographics
    <input type="checkbox" name="GMA" value="Video_Editing"> Video Editing
    <input type="checkbox" name="GMA" value="Corel_Draw"> Corel Draw
    <input type="checkbox" name="GMA" value="GIMP"> GIMP
    <input type="checkbox" name="GMA" value="MS_Office"> Microsoft Office
    <input type="checkbox" name="GMA" value="Open_Office"> Open Office
    <input type="checkbox" name="GMA" value="Filmora"> Wondershare Filmora
    <input type="checkbox" name="GMA" value="Final_Cut_Pro"> Final Cut Pro
    <input type="checkbox" name="GMA" value="Sony_Vegas_Pro"> Sony Vegas Pro
    <input type="checkbox" name="GMA" value="Blender"> Blender
    <input type="checkbox" name="GMA" value="Unity"> Unity 3D
    <input type="checkbox" name="GMA" value="Inventor"> Autodesk Inventor
    <input type="checkbox" name="GMA" value="3DS_Max"> Autodesk 3DS Max
    <input type="checkbox" name="GMA" value="SketchBook"> Autodesk SketchBook
    <input type="checkbox" name="GMA" value="UI_UX"> UI/UX
    <input type="checkbox" name="GMA" value="AutoCAD"> Autodesk AutoCAD
    <input type="checkbox" name="GMA" value="Revit"> Autodesk Revit
    <input type="checkbox" name="GMA" value="SolidWorks"> Altair SolidWorks
    <input type="checkbox" name="GMA" value="HyperMesh"> Altair HyperMesh
    <input type="checkbox" name="GMA" value="Wireframes"> Wireframes
    <input type="checkbox" name="GMA" value="Storyboards"> Storyboards


  </div>

</div>


<div class="row row_form_button subc" id="s_sub_category_6">

  <div class="col-sm-12 subc_bord" >
    
    <input type="checkbox" name="PAINTING_SKETCHING" value="Oil"> Oil Painting
    <input type="checkbox" name="PAINTING_SKETCHING" value="Water_Color"> Water Color Painting
    <input type="checkbox" name="PAINTING_SKETCHING" value="Pastel"> Pastel Painting
    <input type="checkbox" name="PAINTING_SKETCHING" value="Acrylic"> Acrylic Painting
    <input type="checkbox" name="PAINTING_SKETCHING" value="Digital"> Digital Painting
    <input type="checkbox" name="PAINTING_SKETCHING" value="Wall"> Wall Painting
    <input type="checkbox" name="PAINTING_SKETCHING" value="Concept"> Concept Drawing
    <input type="checkbox" name="PAINTING_SKETCHING" value="Presentation"> Presentation Drawing
    <input type="checkbox" name="PAINTING_SKETCHING" value="Technical"> Technical
    <input type="checkbox" name="PAINTING_SKETCHING" value="Diagrams"> Diagrams     

  </div>

</div>

<div class="row row_form_button subc" id="s_sub_category_7">

  <div class="col-sm-12 subc_bord" >
    
    <input type="checkbox" name="WRITING" value="Websites_Blogs"> Websites And Blogs
    <input type="checkbox" name="WRITING" value="Article"> Article
    <input type="checkbox" name="WRITING" value="Business"> Business
    <input type="checkbox" name="WRITING" value="Speech"> Speech
    <input type="checkbox" name="WRITING" value="Editorial"> Editorial
    <input type="checkbox" name="WRITING" value="Poems"> Poems
    <input type="checkbox" name="WRITING" value="Business"> Newsletter
    <input type="checkbox" name="WRITING" value="Business"> Technical
    <input type="checkbox" name="WRITING" value="Report"> Report
    <input type="checkbox" name="WRITING" value="LaTeX"> LaTeX
    <input type="checkbox" name="WRITING" value="ProofReading"> ProofReading



  </div>

</div>

<div class="row row_form_button subc" id="s_sub_category_8">

  <div class="col-sm-12 subc_bord" >
    
    <input type="checkbox" name="PROGRAMMING" value="C"> C
    <input type="checkbox" name="PROGRAMMING" value="Cpp"> C++
    <input type="checkbox" name="PROGRAMMING" value="Java"> Java
    <input type="checkbox" name="PROGRAMMING" value="Python"> Python
    <input type="checkbox" name="PROGRAMMING" value="C_sharp"> C#
    <input type="checkbox" name="PROGRAMMING" value="Ruby"> Ruby
    <input type="checkbox" name="PROGRAMMING" value="Objective_C"> Objective C
    <input type="checkbox" name="PROGRAMMING" value="PHP"> PHP
    <input type="checkbox" name="PROGRAMMING" value="MATLAB"> MATLAB


  </div>

</div>


<div class="row row_form_button subc" id="s_sub_category_9">

  <div class="col-sm-12 subc_bord" >
    
    <input type="checkbox" name="TUTOR" value="Maths"> Maths
    <input type="checkbox" name="TUTOR" value="Science"> Science
    <input type="checkbox" name="TUTOR" value="Social Science"> Social Science
    <input type="checkbox" name="TUTOR" value="EVS"> EVS
    <input type="checkbox" name="TUTOR" value="English"> English
    <input type="checkbox" name="TUTOR" value="Hindi"> Hindi
    <input type="checkbox" name="TUTOR" value="GK"> General Knowledge
    <input type="checkbox" name="TUTOR" value="Computer_Science"> Computer Science
    <input type="checkbox" name="TUTOR" value="Musical_Instruments"> Musical Instruments
    <input type="checkbox" name="TUTOR" value="Physics"> Physics
    <input type="checkbox" name="TUTOR" value="Chemistry"> Chemistry
    <input type="checkbox" name="TUTOR" value="Bilogy"> Bilogy
    <input type="checkbox" name="TUTOR" value="IP"> Informatics Practices
    <input type="checkbox" name="TUTOR" value="Economics"> Economics
    <input type="checkbox" name="TUTOR" value="Accounts"> Accounts
    <input type="checkbox" name="TUTOR" value="Business_Studies"> Business Studies
    <input type="checkbox" name="TUTOR" value="Advanced_Mathematics"> Advanced Mathematics
    <input type="checkbox" name="TUTOR" value="Geography"> Geography
    <input type="checkbox" name="TUTOR" value="History"> History
    <input type="checkbox" name="TUTOR" value="Civics"> Civics


  </div>

</div>

<div class="row row_form_button subc" id="s_sub_category_10">

  <div class="col-sm-12 subc_bord" >
    
    <input type="checkbox" name="PHOTOGRAPHY" value="Event_Photography"> Event Photography
    <input type="checkbox" name="PHOTOGRAPHY" value="Fashion_Photography"> Fashion Photography
    <input type="checkbox" name="PHOTOGRAPHY" value="Wildlife_Photography"> WildLife Photography
    <input type="checkbox" name="PHOTOGRAPHY" value="Landscape_Photography"> Landscape Photography
    <input type="checkbox" name="PHOTOGRAPHY" value="Action_Photography">  Action Photography
    <input type="checkbox" name="PHOTOGRAPHY" value="Sports_Photography"> Sports Photography
    <input type="checkbox" name="PHOTOGRAPHY" value="Fashion_Photography"> Fashion Photography
    <input type="checkbox" name="PHOTOGRAPHY" value="Food_Photography"> Food Photography
    <input type="checkbox" name="PHOTOGRAPHY" value="Travel_Photography"> Travel Photography
    <input type="checkbox" name="PHOTOGRAPHY" value="Product_Photography"> Product Photography
    <input type="checkbox" name="PHOTOGRAPHY" value="Night_Photography"> Night Photography
    <input type="checkbox" name="PHOTOGRAPHY" value="Underwater_Photography"> Underwater Photography


  </div>

</div>




<div class="row row_form_button subc" id="s_sub_category_11">

  <div class="col-sm-12 subc_bord" >
    
    <input type="checkbox" name="FASHION" value="Photoshop"> Adobe Photoshop
    <input type="checkbox" name="FASHION" value="Illustrator"> Adobe Illustrator
    <input type="checkbox" name="FASHION" value="InDesign"> Adobe InDesign
    <input type="checkbox" name="FASHION" value="Lightroom"> Adobe Lightroom
    <input type="checkbox" name="FASHION" value="2D_animation"> 2D Animation
    <input type="checkbox" name="FASHION" value="3D_Animation"> 3D Animation
    <input type="checkbox" name="FASHION" value="3D_Modlling"> 3D Modelling
    <input type="checkbox" name="FASHION" value="SketchUp"> Google SketchUp
    <input type="checkbox" name="FASHION" value="Corel_Draw"> Corel Draw
    <input type="checkbox" name="FASHION" value="GIMP"> GIMP
    <input type="checkbox" name="FASHION" value="Blender"> Blender
    <input type="checkbox" name="FASHION" value="Unity"> Unity 3D
    <input type="checkbox" name="FASHION" value="Inventor"> Autodesk Inventor
    <input type="checkbox" name="FASHION" value="3DS_Max"> Autodesk 3DS Max
    <input type="checkbox" name="FASHION" value="SketchBook"> Autodesk SketchBook
    <input type="checkbox" name="FASHION" value="AutoCAD"> Autodesk AutoCAD
    <input type="checkbox" name="FASHION" value="Revit"> Autodesk Revit
    <input type="checkbox" name="FASHION" value="SolidWorks"> Altair SolidWorks


  </div>

</div>





<div class="row row_form_button">

  <div class="col-sm-12 row_form_button">
    
        <button id="myBtn" type="submit" class="button button-block btn-signup" name="register"/>Register</button>

  </div>
</form> <!--FORM CLOSE-->

</div>



<div class="row row_form_note" style="margin-top: 0px !important; margin-bottom: 50px !important;">

  <div class="col-sm-12">
    
        <div class="note"> NOTE: Take snapshot of your school | college id and make a zip file of your previous work and upload it on google drive, dropbox etc. Then share the link with us in the college id | portfolio field. Your portfolio will be the way to get onboard on the workcreed team.</div>

  </div>

</div>






</body>

</html>