<!-- V.2 -->


<?php
include "DBconnection.php";
    
    

if($_SERVER["REQUEST_METHOD"]=="POST"){
	 $currentArtwork=  $_POST['oldtitle'];
$title=$_POST["name"];
$description=$_POST["message"];
 
$enable=($_POST["comment"]=="yes")? 1 : 0 ;
$query = "UPDATE artwork SET   title='$title'  ,  description='$description' , enableComm= '$enable'    WHERE title = '$currentArtwork';"; 
    
        
    if($result = mysqli_query($conn,$query)) {
     
   header("location: View Artwork (Artist).php?title=".$title);
 exit();

}
  else print 'error';

}
  





$currentArtwork=  $_GET['title']; 
$query = "SELECT * FROM artwork WHERE title = '$currentArtwork';"; 
       
    if($result = mysqli_query($conn,$query)) 
    $row = mysqli_fetch_row($result); //use this if you have only one row otherwise use code in line 40
  else print 'error'; 
$background=$row[4] ;


?>


<!DOCTYPE html>
<html  >
<head>
        

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
      #form1-b {

 
        align-content: center;
      }
      #form1-b h2 {color: black;}
      #form1-g{
background-color: #efefef ;
      	background-image: url("<?php echo $background   ?>");
background-size: 100%;
 
      }
  

    #aaa{
       margin-left: 5em;
       align-self: center;
       align-content: center;
    }
    #updateButton{
       margin-right: 3em;
    }
         
      #cpyryt {color: white;}
      
      
       #form1-g h2 {color: white;}
      #form1-g p {color: white;}
       #Artworkname {color: white;
       	font-size: 1.5em;}
      
      #hadeel-2 input {border-color: #e3cd52}
       #hadeel-2 textarea {border-color: #e3cd52; }

       #name1 ,#Aboutme1{color: white;
        text-shadow: 1.3px 1.3px #e3cd52;
        font-size: 1.5em;
        padding-right: 1em;
        padding-left: 5em;
      }
    
   
      #hadeel-2 input {
        display: block;
        border-color: #e3cd52;
         margin-left: 5em; }
      
      }
     #parent hr{
      border-color:  #e3cd52; 
     }
      
     .switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {

  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: #232323;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #feeb7f;
}



input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

      
    </style>
    
     <!--paste your head code-->
    <title>editArtworkForArtist</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
 
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
                    <a href="artistdashboard.php">
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
                    <a id = "add" class="nav-link link text-white display-5" href="Artwork%20Adding%20Page.php"><img src="indexassets/add" width="28" height="28"></a>
                </li>
                    </div>
                                <div class="signout">
                <li class="nav-item" >
                    <a  class="nav-link link text-white display-5" href="index.php"><img src="indexassets/singout.png" width="25" height="28"></a>
                </li>
                                    </div>
            </ul>
            
        </div>
    </nav>
</section>

 
    
    
    <!--paste your body code-->
    
<section class="mbr-section article content9 cid-rQplkhn7NZ" id="content9-4">
    
    
    <!--paste your body code-->
    
      <section class="mbr-section form1 cid-rRf0Koqbt7" id="form1-g">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-1">Artwork Information</h2>
                
            </div>
        </div>
    </div>
    <div class="container" id="hadeel-2">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-7" >
                <!---Formbuilder Form--->
                <form action="editArtworkForArtist.php" method="POST" class="mbr-form form-with-styler" >
                    <input type="hidden" name="oldtitle" value="<?php echo $currentArtwork  ?> ">
                    <div class="dragArea row">
                        <div class="col-md-7  form-group" data-for="name">
                            <label id="Artworkname"for="name-form1-g" class="form-control-label mbr-fonts-style display-7">Artwork title</label>
                            <input type="text" name="name" class="form-control display-7" value="<?php echo $row[0]  ?>"id="name-form1-g">
                        </div>
                      
                        
                        <div data-for="message" class="col-md-10 form-group">
                            <label id="Artworkname" for="message-form1-g" class="form-control-label mbr-fonts-style display-7">Artwork description</label>
                            <textarea  name="message" data-form-field="Message" class="form-control display-7" id="message-form1-g"><?php echo $row[5]  ?></textarea>
                        </div>
                          <div data-for="message" class="col-md-4 form-group"><p id="Artworkname"> Comments   </p>


                          	<?php
                          	$checked="";
if($row[6]==1){
$checked="checked";
}

                          	?>
<label class="switch">
  <input type="checkbox" name="comment" value="yes" <?php echo $checked  ?>   >
  <span class="slider round"></span>
</label></div>
                        <div class="col-md-12 input-group-btn align-center"><button type="submit" class="btn btn-primary btn-form display-4">Update my artwork</button></div>
                    </div>
                      
                </form><!---Formbuilder Form--->
            </div>
        </div>
    </div>

</section>


  <section class="engine"><a href="https://mobirise.info">Mobirise</a></section><script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  


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
                <p class="mbr-text mb-0 mbr-fonts-style display-7" id = "cpyryt">
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
