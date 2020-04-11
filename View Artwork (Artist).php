<!-- V.2 -->

<?php

include "DBconnection.php";
           
?>

<!DOCTYPE html>
<html  >
        

<head>
  <!-- Site made with Mobirise Website Builder v4.12.0, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.12.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="hadeelassets/images/logo4.png" type="image/x-icon">
  <meta name="description" content="Web Site Builder Description">

  <link rel="stylesheet" href="indexassets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="indexassets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="indexassets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="indexassets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="indexassets/tether/tether.min.css">
  <link rel="stylesheet" href="indexassets/dropdown/css/style.css">
  <link rel="stylesheet" href="indexassets/theme/css/style.css">
  <link rel="preload" as="style" href="indexassets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="indexassets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  <title>View Artwork</title>
  <link rel="stylesheet" href="hadeelassets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="hadeelassets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="hadeelassets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="hadeelassets/tether/tether.min.css">
  <link rel="stylesheet" href="hadeelassets/theme/css/style.css">
  <link rel="preload" as="style" href="hadeelassets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="hadeelassets/mobirise/css/mbr-additional.css" type="text/css">
  






<style>
    
     .contactUs {margin-left: 24em}
      .contactUs strong {margin-left: 4em}
      .contactUs p a {padding-right: 3em;}
      #cpyryt {color: white;}
  
    .nav-item{margin-right: 14em;
      }
.likecounter{
  padding-right: 3em;
}

#cooom{
  margin-left: 14em;
  text-align:  left;
}
#uname{
  font-size: 1.3em;
  color: #EBE4A9;
  align-self: left;
}
p{
  color: #e3cd52;
  font-size: 1em;
}

   
      #name ,#email,#Aboutme{
        color: white;
        text-shadow: .5px .5px #e3cd52;
        font-size: 1.7em;
     

        

      }
      #commentText{
        color: white;
      }
    
     hr{
      border-color:  #e3cd52; 
     }
      #editIcon{
margin-left: 40em;

      }
      #date{
color: #e3cd52;
  font-size: 1em;

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
                    <a class="nav-link link text-white display-5" href="Artist%20Account%20Page.html">
                        My account</a>
                </li>
                <div class="search">
                 <li class="nav-item" >
                    <a id = "search1" class="nav-link link text-white display-5" href="#"><img src="indexassets/search.png" width="25" height="28"></a>
                </li>
                    </div>
                <li class="nav-item" >
                    <a id = "add" class="nav-link link text-white display-5" href="Artwork%20Adding%20Page.html"><img src="indexassets/add" width="28" height="28"></a>
                </li>
                                <div class="signout">
                <li class="nav-item" >
                    <a  class="nav-link link text-white display-5" href="index.html"><img src="indexassets/singout.png" width="25" height="28"></a>
                </li>
                                    </div>
            </ul>
            
        </div>
    </nav>
</section>











  <section class="header4 cid-rRDt6QwJxx mbr-parallax-background" id="header4-h">

    

    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(35, 35, 35);">
    </div>


    <?php
$currentArtwork=  $_GET['title'];
$href2='editArtworkForArtist.php?title='.$currentArtwork ;
$query = "SELECT * FROM artwork WHERE title = '$currentArtwork';"; 
       
    if($result = mysqli_query($conn,$query)) 
    $row = mysqli_fetch_row($result); //use this if you have only one row otherwise use code in line 40
  else print 'error';

$isThereComm=false;
  if($row[6]==1){
$query2 = "SELECT * FROM comment WHERE AW_Title = '$currentArtwork';"; 

if($result2 = mysqli_query($conn,$query2)) {
 global $isThereComm;
  $isThereComm=true;
}

  }

?>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="media-content col-md-10">
                <h1 class="mbr-section-title align-center mbr-white pb-3 mbr-bold mbr-fonts-style display-1"><span style="font-weight: normal;">
                 <?php echo $row[0]  ?> </span></h1>

                    <div class="mbr-figure pt-5">
                <img src="<?php echo $row[4]  ?>" alt="Mobirise" title="" style="width: 90%;">

            </div>
             
                
                <div class="mbr-text align-center mbr-white pb-3">
                    

<p   id ="date"><?php echo $row[7]  ?><a href="<?php echo $href2;  ?>"> <img id="editIcon" src="edit.png" height="50px" width="50px"></a></p>


   

<div id="shownInfo">


 <label id="Aboutme" for="message-form1-b" class="form-control-label mbr-fonts-style display-7">Description  </label>
  <p id="aboutMeFromDB" >
   <?php echo $row[5]  ?>
   </p>
<hr class="line" style="width: 60%;">
<p class="switch"id="email"> Comments </p>
  

<?php

if($isThereComm){

while ( $com=mysqli_fetch_assoc($result2)) {
  echo "<div id='cooom'><span  id='uname'>@".$com['V_userName'].":  "."</span><span id='commentText'>".$com['text']."</span></div>";
  echo "<hr class='line' style='width: 40%;'>";
}
if(mysqli_num_rows($result2)==0)
  echo "<span id='commentText'>No comments for this artwork </span><hr class='line' style='width: 60%;'>";
}else
echo "<span id='commentText'>Comments for this artwork are unable</span><hr class='line' style='width: 60%;'>";


?>





  <p id="emailFromDB" ><span id = "likebutton"><img src="like2.png" id = "likeimg"></span>
              <label class = 'likecounter'> <?php echo $row[1]  ?></label>
              <span id = "dislikebutton"><img src="dislike2.png" id = "dislikeimg"></span>
              <label class = 'likecounter'><?php echo $row[2]  ?></label>
             <span id = "favoritebutton"><img src="favorite2.png" id = "favoriteimg"></span> 
              <label class = 'likecounter'><?php echo $row[3]  ?></label>   </p>
<hr class="line" style="width: 60%;">


</div>




<!--

<   Formbuilder Form--->


<?php  
$href='deleteArt.php?title='.$currentArtwork ;



 ?> 




                </div>

                <div class="mbr-section-btn align-center"><a class="btn btn-md btn-primary display-4" href="<?php  echo $href; ?>    ">Delete artwork</a>
                  </div>
            </div>
            
        </div>
    </div>
</section>


  <section class="engine"><a href="https://mobirise.info/u">bootstrap responsive templates</a></section><script src="hadeelassets/web/assets/jquery/jquery.min.js"></script>
  <script src="hadeelassets/popper/popper.min.js"></script>
  <script src="hadeelassets/bootstrap/js/bootstrap.min.js"></script>
  <script src="hadeelassets/tether/tether.min.js"></script>
  <script src="hadeelassets/smoothscroll/smooth-scroll.js"></script>
  <script src="hadeelassets/parallax/jarallax.min.js"></script>
  <script src="hadeelassets/theme/js/script.js"></script>
  
  <section class="mbr-section article content9 cid-rQplkhn7NZ" id="content9-4">



    <section class="mbr-section article content9 cid-rQpllaL4cw" id="content9-5">
    
     

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
                <p id="cpyryt"class="mbr-text mb-0 mbr-fonts-style display-7">
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
  <script src="indexassets/theme/js/script.js"></script>
  
  
</body>
</html>
