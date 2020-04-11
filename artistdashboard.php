<!-- V.5 -->

<?php
session_start();
if(!isset($_SESSION['userName'])){
  header("location: index.php");
  exit();
}include "DBconnection.php";        
?>


<!DOCTYPE html>
<html  >
    <head>
         

  <!-- Site made with Mobirise Website Builder v4.12.0, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.12.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="indexassets/images/fulllogo.png" type="image/x-icon">
  <meta name="description" content="">
     <!-- important link for jQuery-->   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <link rel="stylesheet" href="indexassets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="indexassets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="indexassets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="indexassets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="indexassets/tether/tether.min.css">
  <link rel="stylesheet" href="indexassets/dropdown/css/style.css">
  <link rel="stylesheet" href="indexassets/theme/css/style.css">
  <link rel="preload" as="style" href="indexassets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="indexassets/mobirise/css/mbr-additional.css" type="text/css">
  
        <title>Artist Home </title>
    
     <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/gallery/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    
        
  <style>
      .nav-item{margin-right: 10em;
      }
      #cpyryt {color: white;}
      .contactUs {margin-left: 24em}
      .contactUs strong {margin-left: 4em}
      .contactUs p a {padding-right: 3em;}
      #gallery1-7 {background-color:#efefef;}
                
    #header2-0{
          animation: myfirst 50s ease-in .1s infinite ;

      }
      
      
      @keyframes myfirst{
          
          0%{
             background-image: url(indexassets/images/art0.jpg); 
          }
          10%{
             background-image: url(indexassets/images/art1.jpg); 
          }
          20%{
             background-image: url(indexassets/images/art2.jpg); 
          }
          30%{
             background-image: url(indexassets/images/art3.jpg); 
          }
          40%{
             background-image: url(indexassets/images/art4.jpg); 
          }
          50%{
             background-image: url(indexassets/images/art5.jpg); 
          }
          60%{
             background-image: url(indexassets/images/art6.jpg); 
          }
          70%{
             background-image: url(indexassets/images/art7.jpg); 
          }
          80%{
             background-image: url(indexassets/images/art8.jpg); 
          }
          90%{
             background-image: url(indexassets/images/art9.jpg); 
          }
          100%{
             background-image: url(indexassets/images/art5.jpg); 
          }
          
          
      }            

    </style>
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
                    <a href="https://mobirise.co">
                        <img src="indexassets/images/fulllogo.png" alt="Mobirise" title="" style="height: 4.6rem;">
                    </a>
                </span>
                
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                <li class="nav-item" >
                    <a class="nav-link link text-white display-5" href="artistdashboard.php">
                        Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-5"  href="#aboutus">
                        About us</a>
                </li><li class="nav-item" >
                    <a class="nav-link link text-white display-5" href="#conus">
                        Contact us</a>
                </li><li class="nav-item" >
                    <a class="nav-link link text-white display-5" href="Artist%20Account%20Page.php">
                        My account</a>
                </li>
<!--
                <div class="search">
                 <li class="nav-item" >
                    <a id = "search1" class="nav-link link text-white display-5" href="#"><img src="indexassets/search.png" width="25" height="28"></a>
                </li>
                    </div>
-->
                <div class="add">
                 <li class="nav-item" >
                    <a id = "add" class="nav-link link text-white display-5" href="Artwork%20Adding%20Page.php"><img src="indexassets/add" width="28" height="28"></a>
                </li>
                    </div>
                                <div class ="signout" >
                <li class="nav-item" >
                    <a id = "signout1" class="nav-link link text-white display-5" href="index.php"><img src="indexassets/singout.png" width="25" height="28"></a>
                </li>
                                    </div>
            </ul>
            
        </div>
    </nav>
</section>
        
        
        <script>
$(document).ready(function(){
  $(".signout").hover(function(){
    //hover
      document.getElementById("signout1").innerHTML="<img src='indexassets/singout2.png' width='25' height='28'>";
  },
  function(){
    //out
      document.getElementById("signout1").innerHTML="<img src='indexassets/singout.png' width='25' height='28'>";
  }); 
});
            
            $(document).ready(function(){
  $(".add").hover(function(){
    //hover
      document.getElementById("add").innerHTML="<img src='indexassets/add2' width='28' height='28'>";
  },
  function(){
    //out
      document.getElementById("add").innerHTML="<img src='indexassets/add' width='28' height='28'>";
  }); 
});
            
</script>
        
        

        <section class="mbr-fullscreen mbr-parallax-background" id="header2-0">

    

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(35, 35, 35);"></div>

    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-3">Welcome</h1>
                
                <p class="mbr-text pb-3 mbr-fonts-style display-5">Paint &amp; Pixel&#44; the ideal place for digital art enthusiasts</p>
            </div>
        </div>
    </div>
     <div class="mbr-arrow hidden-sm-down" aria-hidden="true" id="circul">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>


        
        
        
<section class="header1 cid-rQsW0pk146" id="header16-f">
    

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-10 align-center">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
                    My Artworks</h1>
                
                
                
            </div>
        </div>
    </div>
 
</section>

<?php
$currentUser=$_SESSION['username'];           //check here after setting the session
$query = "SELECT * FROM artwork WHERE A_userName = '$currentUser';"; 
    
 $result = mysqli_query($conn,$query) ;  
    if(!$result) 
     print 'error';
     

?>


<section class="mbr-gallery mbr-slider-carousel cid-rReCpFQ8Rc" id="gallery1-7">

    <div>
        <div><!-- Filter --><!-- Gallery -->


<div class="mbr-gallery-row">
  <div class="mbr-gallery-layout-default">
    <div>
      <div>

<?php 
$count=0;
 while($row=mysqli_fetch_assoc($result))  {  
$href='View%20Artwork%20(Artist).php?title=' . $row['title'] ;
$src=$row['path'];
$title=$row['title'];
$pathsArray[]=$src;

  ?>

<a href ="<?php  echo $href;  ?>"  >
              <div class="mbr-gallery-item mbr-gallery-item--p1" >
                <div href="<?php  echo $href;  ?>" data-slide-to="<?php  echo $count;  ?>" data-toggle="modal">
                  <img src="<?php  echo $src;  ?>" alt="" title="">
                  <span class="icon-focus"></span>
                  <span class="mbr-gallery-title mbr-fonts-style display-7"> <?php  echo $title;  ?></span>
                </div></div>
              </a>

<?php  $count++; }
?>
  
            </div></div>
            <div class="clearfix"></div>
          </div></div> 

          
     <!-- Lightbox --><div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery1-7">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <ol class="carousel-indicators">
 
<script type="text/javascript">
  var count= <?php echo $count; ?>;
  for (var i = 0; i <count; i++) {
    document.write('<li data-app-prevent-settings="" data-target="#lb-gallery1-7" data-slide-to="'+count+'"></li>');
  }
</script>
      
</ol>

                    <div class="carousel-inner">

<script type="text/javascript">

  var paths[]= <?php echo $pathsArray; ?>;
  for (var i = 0; i <pathsArray.lenght; i++) {
    document.write('<div class="carousel-item active"><img src="'+paths[i]+'" ></div>');
  }
</script>


              
                      </div>



                    </div></div></div></div></div>
    </div>


</section>
  <script src="indexassets2/web/assets/jquery/jquery.min.js"></script>
  <script src="indexassets2/popper/popper.min.js"></script>
  <script src="indexassets2/bootstrap/js/bootstrap.min.js"></script>
  <script src="indexassets2/tether/tether.min.js"></script>
  <script src="indexassets2/smoothscroll/smooth-scroll.js"></script>
  <script src="indexassets2/dropdown/js/nav-dropdown.js"></script>
  <script src="indexassets2/dropdown/js/navbar-dropdown.js"></script>
  <script src="indexassets2/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="indexassets2/theme/js/script.js"></script>
  
  
      
    <!----------------------->
<section class="mbr-section article content9 cid-rQplkhn7NZ" id="content9-4">   

    <div class="container">
        <div class="inner-container" style="width: 100%;">
            <hr class="line" style="width: 100%;">
            <div class="section-text align-center mbr-fonts-style display-5" id ="aboutus"><strong><em>About us</em></strong><br>First, we’d like to thank you for visiting our website.
<div>Digital Art is a brand-new online platform for artists to upload their artwork for the world to see. Visitors who have registered can view our gallery and comment on artworks, creating a supportive environment for both up-and-coming digital artists as well as professional illustrators.
</div><div>Please support our website by voting for it in our competition!
</div><div>This website is brought to you by the following future software engineers:
</div><div>•	Sarah Algwaiz
</div><div>•	Shahad Alkaltham
</div><div>•	Hadeel Alhajri
</div><div>•	Ghada Alshridah
</div><div><p></p></div>
            </div></div> </div>
</section>


<section class="mbr-section article content9 cid-rQpllaL4cw" id="content9-5">
    
     

    <div class="container" id="conus">
        <div class="inner-container" style="width: 100%;">
            <hr class="line" style="width: 100%;">
            <div class ="contactUs">
            <div class="section-text align-center mbr-fonts-style display-5"><strong>Contact us</strong>
                
            </div><p>
            <a href="https://twitter.com"><img src = "indexassets2/twitter.png" width="32" height="26"></a> <a href="https://www.facebook.com"><img src = "indexassets2/facebook.png" width="28" height="28"></a>
            <a href="https://www.instagram.com"><img src="indexassets2/instagram.png" width="30" height="30" ></a> 
            <a href="mailto:xhadeel@hotmail"><img src="indexassets2/email.png" width="32" height="21"></a>
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


  <script src="indexassets2/web/assets/jquery/jquery.min.js"></script>
  <script src="indexassets2/popper/popper.min.js"></script>
  <script src="indexassets2/bootstrap/js/bootstrap.min.js"></script>
  <script src="indexassets2/tether/tether.min.js"></script>
  <script src="indexassets2/smoothscroll/smooth-scroll.js"></script>
  <script src="indexassets2/dropdown/js/nav-dropdown.js"></script>
  <script src="indexassets2/dropdown/js/navbar-dropdown.js"></script>
  <script src="indexassets2/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="indexassets2/parallax/jarallax.min.js"></script>
  <script src="indexassets2/theme/js/script.js"></script>
  
  
        
    </body>
</html
