<!-- V.2 -->
<?php

session_start();
if(!isset($_SESSION['username'])){
header("location: index.php");
exit();}
 

?>


<?php
include "DBconnection.php";
      
     
$currentUser=$_SESSION['username'];    //check here after setting the session



if($_SERVER["REQUEST_METHOD"]=="POST"){
$name=$_POST["name"];
$email=$_POST["email"];
$message=$_POST["message"];
$query = "UPDATE artist SET name='$name',   aboutMe='$message'  ,  email='$email'  WHERE userName = '$currentUser';"; 
    
        
    if($result = mysqli_query($conn,$query)) {
     
   header("location: Artist Account Page.php");
 exit();

}
  else print 'error';

}

   

      
?>


<!DOCTYPE html>
<html  >
<head>
        <!-- V.1 -->

  <!--      -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.12.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="indexassets/images/fulllogo.png" type="image/x-icon">
  <meta name="description" content="">
  

  <link rel="stylesheet" href="indexassets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="indexassets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="indexassets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="indexassets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="indexassets/tether/tether.min.css">
  <link rel="stylesheet" href="indexassets/dropdown/css/style.css">
  <link rel="stylesheet" href="indexassets/theme/css/style.css">
  <link rel="preload" as="style" href="indexassets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="indexassets/mobirise/css/mbr-additional.css" type="text/css">
  



  <style>
      .nav-item{margin-right: 14em;
      }
        .contactUs {margin-left: 25em;}
      .contactUs strong {margin-left: 3em;}
      .contactUs p a {padding-right: 3em;}
      #form1-b {background-color: #efefef;
        align-content: center;
      }
      #form1-b h2 {color: black;}
      #name ,#email,#Aboutme{color: black;
        text-shadow: 1.3px 1.3px #e3cd52;
        font-size: 1.5em;
        padding-right: 1em;
        padding-left: 5em;

      }

    #aaa{
       margin-left: 3em;
    }
    #updateButton{
       margin-right: 3em;
    }
      #message-form1-b{
        width: 500px;

      }

       #name1 ,#email1,#Aboutme1{color: black;
        text-shadow: 1.3px 1.3px #e3cd52;
        font-size: 1.5em;
        padding-right: 1em;
        padding-left: 5em;
      }
     p{
      font-size: 1em;
     }
    
      #hadeel-1 input {
        display: inline-block;
        border-color: #e3cd52; margin-left: 3em; }
      #hadeel-1 textArea {border-color: #e3cd52; 
        size: 100%;
        margin-left: 3em;
      }
     #parent hr{
      border-color:  #e3cd52; 
     }
      #editIcon{
margin-left: 50em;

      }
     
      
    </style>
    
     <!--paste your head code-->
    <title>editForm</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    
    <!----------------------->
  
</head>
<body>
  <section class="menu cid-rQpmxxKyZ3" once="menu" id="menu2-6">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="artistdashboard.html">
                        <img src="indexassets/images/fulllogo.png" alt="Mobirise" title="" style="height: 4.6rem;">
                    </a>
                </span>
                
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                <li class="nav-item" >
                    <a class="nav-link link text-white display-5" href="artistdashboard.html">
                        Home</a>
                </li>
               <li class="nav-item" >
                    <a class="nav-link link text-white display-5" href="#conus">
                        Contact us</a>
                </li><li class="nav-item" >
                    <a class="nav-link link text-white display-5" href="#">
                        My account</a>
                </li>
                <div class="search">
                 <li class="nav-item" >
                    <a id = "search1" class="nav-link link text-white display-5" href="#"><img src="indexassets/search.png" width="25" height="28"></a>
                </li>
                    </div>
                <div class="add">
                 <li class="nav-item" >
                    <a id = "add" class="nav-link link text-white display-5" href="Artwork%20Adding%20Page.html"><img src="indexassets/add" width="28" height="28"></a>
                </li>
                    </div>
                                <div class="signout">
                <li class="nav-item" >
                    <a  class="nav-link link text-white display-5" href="index.html"><img src="indexassets/singout.png" width="25" height="28"></a>
                </li>
                                    </div>
            </ul>
            
        </div>
    </nav>
</section>



    
    
    <!--paste your body code-->
    
      <section class="mbr-section form1 cid-rReWMzoXsU" id="form1-b"> 
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-1">
                    My Account</h2>
                
            </div>
        </div>
      
            
    </div>


    




</section>


  <section class="engine"><a href="https://mobirise.info/m">web design templates</a></section><script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <!--<script src="assets/theme/js/script.js"></script>-->
  <script src="assets/formoid/formoid.min.js"></script>
  
    <!----------------------->
     

<section class="mbr-section article content9 cid-rQplkhn7NZ" id="content9-4">

<section class="mbr-section article content9 cid-rQpllaL4cw" id="content9-5">
    
<?php
//$currentUser=$_SESSION['username'];
$currentUser="hadeel";

$query = "SELECT * FROM artist WHERE userName = '$currentUser';"; 
    
        
    if($result = mysqli_query($conn,$query)) 
    $row = mysqli_fetch_row($result); //use this if you have only one row otherwise use code in line 40
  else print 'error';

?>
    <div class="container" id = "hadeel-2">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" id="parent">

  <!---Formbuilder Form--->
                <form id="form" action="editForm.php" method="POST" class="mbr-form form-with-styler"   >
                    <div class="dragArea row" id="aaa">
                        <div class="col-md-4  form-group" data-for="name">
                            <label id="name1" for="name-form1-b" class="form-control-label mbr-fonts-style display-7">Name</label>
                            <input  type="text" name="name" data-form-field="Name"  value="<?php echo $row[2]  ?>"
                            class="form-control display-7" id="name-form1-b" >
                        </div>
                        <div class="col-md-4  form-group" data-for="email">
                            <label id="email1" for="email-form1-b" class="form-control-label mbr-fonts-style display-7">Email</label>
                            <input type="email"name="email" data-form-field="Email"  value="<?php echo $row[4]  ?>"
                            class="form-control display-7" id="email-form1-b">
                        </div>
                        
                        <div data-for="message" class="col-md-12 form-group">
                            <label id="Aboutme1" for="message-form1-b" class="form-control-label mbr-fonts-style display-7">About me</label>
                            <textarea name="message" data-form-field="Message"  class="form-control display-7" id="message-form1-b" cols="36" ><?php echo $row[3]  ?></textarea>
                        </div>
                        <div class="col-md-12 input-group-btn align-center"><button id="updateButton" name ="submit"type="submit" class="btn btn-form btn-primary display-4"><span class="mobi-mbri mobi-mbri-refresh mbr-iconfont mbr-iconfont-btn" style="color: rgb(69, 80, 91);"></span>Update my account</button></div>
                    </div>
                </form><!---Formbuilder Form--->



            </div>
        </div>
    </div>


    <div class="container" id="conus">
        <div class="inner-container" style="width: 100%;">
            <hr class="line" style="width: 100%;">
            <div class ="contactUs">
            <div class="section-text align-center mbr-fonts-style display-5"><strong>Contact us</strong>
                
            </div><p>
            <a href="https://twitter.com"><img src = "indexassets/twitter.png" width="32" height="26"></a> <a href="https://www.facebook.com"><img src = "indexassets/facebook.png" width="28" height="28"></a>
            <a href="https://www.instagram.com"><img src="indexassets/instagram.png" width="30" height="30" ></a> 
            <a href="mailto:xhadeel@hotmail"><img src="indexassets/email.png" width="32" height="21"></a>
            </p>
                </div>
            <hr class="line" style="width: 100%;">
        
        </div>
    </div>
</section>

<section once="footers" class="cid-rQpl2pRx1d" id="footer6-2">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7">
                    © Copyright 2020 Paint&amp;Pixel Team - All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section>


  <script src="indexassets/web/assets/jquery/jquery.min.js"></script>
  <script src="indexassets/popper/popper.min.js"></script>
  <script src="indexassets/bootstrap/js/bootstrap.min.js"></script>
  <script src="indexassets/tether/tether.min.js"></script>
  <script src="indexassets/smoothscroll/smooth-scroll.js"></script>
  <script src="indexassets/dropdown/js/nav-dropdown.js"></script>
  <script src="indexassets/dropdown/js/navbar-dropdown.js"></script>
  <script src="indexassets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="indexassets/parallax/jarallax.min.js"></script>
  <!--<script src="indexassets/theme/js/script.js"></script>-->
  
  



</body>
</html>
