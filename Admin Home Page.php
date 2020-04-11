<!DOCTYPE html>
<html >
    <!-- V.5 -->
    <?php include 'DBconnection.php';?>
    
    
<head>
  <meta charset="UTF-8">
    <!--
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.12.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
-->
  <link rel="shortcut icon" href="indexassets/images/fulllogo.png" type="image/x-icon">
    <!--
  <meta name="description" content="">
  -->
    
   <script type="text/javascript" src="jQuery/jquery-3.2.1.min.js"></script>

  <link rel="stylesheet" href="indexassets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="indexassets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="indexassets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="indexassets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="indexassets/tether/tether.min.css">
  <link rel="stylesheet" href="indexassets/dropdown/css/style.css">
  <link rel="stylesheet" href="indexassets/theme/css/style.css">
  <link rel="preload" as="style" href="indexassets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="indexassets/mobirise/css/mbr-additional.css" type="text/css">
  
  <style>
       
/*
      .modal-wrapper {
	display:none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
}
*/

/* Modal Content Box */
/*
#modal-content {
    display:block;
    background-color: #fefefe;
    margin: 4% auto 15% auto;
    border: 1px solid #888;
    width: 500px; 
    height: 500px;
	padding-bottom: 30px;
    border-radius: 8px;

}
*/

.close2 {
    position: absolute;
    right: 20px;
    top: 15px;
    font-weight: bold;
    transform: rotate(45deg);
    opacity: 1;
}
.close2:hover{
    opacity: 0.5;
    cursor: pointer;
}
      .Approve-button{
        position: absolute;
        background-color: #feeb7f;
        font-size: 15px;
        height: 40px;
        width: 130px;
        color: black;
        left: 110px;
        top: 740px;
        border-radius: 20px;
        font-weight: bold;
        border:solid; 
        border-color:#ffdf28;
    }
    .Approve-button:hover{
    opacity: 0.5;
    cursor: pointer;
}
      .Disapprove-button{
        position: absolute;
        background-color: #feeb7f;
        font-size: 15px;
        height: 40px;
        width: 130px;
        color: black;
        right: 110px;
        top: 740px;
        border-radius: 20px;  
        font-weight: bold; 
        border:solid; 
        border-color:#ffdf28;  
      }
      .Disapprove-button:hover{
          opacity: 0.5;
    cursor: pointer;
      }
      .boxxx:hover{
    cursor: pointer;
}
      .inside-box{
          align-content: center;
          justify-content: center;
          text-align: center;
      }
      .nav-item{padding-left: 17em;
          padding-right: 3em;
      }

      .contactUs {margin-left: 25em}
      .contactUs strong {margin-left: 3em}
      .contactUs p a {padding-right: 3em;}
      #services5-a {background-color: #efefef;}
      #NewArtist h2 { color: black; text-align: center;}
      #aboutus {text-align: center;}
      #button-22{
    position: absolute;
    right: 740px;
    top: 144px;
    color:black;
    font-size: 20px;
    font-weight: bold;
    background-color: white;
    border: 0px;
      }
      #button-22:hover{
    opacity: 0.5;
    cursor: pointer;
      }
      #formm {
          position: absolute;
          top:1200px;
          z-index: 1;
      }
      
       #aboutus strong{font-size: 30pt;}
      
       #aboutus strong{font-size: 30pt;}
    
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

    
     <!--paste your head code-->
    
    <title>Admin Home Page</title>
    
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
                    <a href="#">
                        <img src="indexassets/images/fulllogo.png" alt="Mobirise" title="" style="height: 4.6rem;">
                    </a>
                </span>
                
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                <li class="nav-item" >
                    <a class="nav-link link text-white display-5" href="#">
                        Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-5" href="#aboutus">
                        About us</a>
                </li><li class="nav-item" >
                    <a class="nav-link link text-white display-5" href="#conus">
                        Contact us</a>
                </li>
                
                <div class="signout">
                <li class="nav-item" >
                    <a id="signout3" class="nav-link link text-white display-5" href="index.html"><img src="indexassets/singout.png" width="25" height="28"></a>
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
      document.getElementById("signout3").innerHTML="<img src='indexassets/singout2.png' width='25' height='28'>";
  },
  function(){
    //out
      document.getElementById("signout3").innerHTML="<img src='indexassets/singout.png' width='25' height='28'>";
  }); 
});
    
    </script>
    
    
    
    <div id="formm"></div>

<section class="cid-rQpiiEn3UX mbr-fullscreen mbr-parallax-background" id="header2-0">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(35, 35, 35);"></div>

    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-3">Welcome</h1>
                
                <p class="mbr-text pb-3 mbr-fonts-style display-5">Paint &amp; Pixel&#44; the ideal place for digital art enthusiasts</p>
                
        </div>
    </div>
     <div class="mbr-arrow hidden-sm-down" aria-hidden="true" id="circul" style = "position:absolute; left:570px; top:510px;">
        <a href="#next">
            <i class="mbri-down mbr-iconfont" style = "position:absolute; left: -15px"></i>
        </a>
    </div>
    </div>
   
</section>
    
    
    
    <!--paste your body code-->
    
    <div class="hadeel" style = "background-color: rgb(100, 100, 100);">
        <section class="services5 cid-rReLVLfkIf" id="services5-a"  >
   
    <div class="container" id="cards">
        <div class="row">
            <!--Titles-->
            <div class="title pb-5 col-12" id="NewArtist">
                <h2 class="align-left mbr-fonts-style m-0 display-1">
                    New Artists </h2>
                
            </div>
            <!--Card-1-->

<!--
            <div class="card px-3 col-12" onclick="document.getElementById('modal-wrapper').style.display='block'">
                <div class="card-wrapper media-container-row media-container-row"  >
                    <div class="card-box" >
                        <div class="top-line pb-3">
                            <h4 class="card-title mbr-fonts-style display-5" >
                                Artist 1
                            </h4>
                            
                            <p class="mbr-text cost mbr-fonts-style m-0 display-5"></p>
                        </div>
                        <div class="bottom-line">
                            
                        </div>
                    </div>
                </div>
            </div>
-->
       
    </div>
            </div>
        </section>
    </div>
        
         <div id="pop-up">
        </div>
 
            <script>
                <?php
                $query = "SELECT * FROM Artist WHERE status = 'W' ";
                $result = mysqli_query($conn,$query);
                ?>
  
                  <?php
while($Arr = mysqli_fetch_array($result)){
    ?>
                <?php
      $userName = $Arr["userName"];
      $name = $Arr["name"];
      $aboutMe = $Arr["aboutMe"];
      $email = $Arr["email"];
      $sample = "Samples/".$Arr["samplePath"];
      ?>
                var object_ = new Object();
                object_.name = "<?php echo $name ?>";
                object_.aboutMe = "<?php echo $aboutMe ?>";
                object_.email = "<?php echo $email ?>";
                object_.userName = "<?php echo $userName ?>";
                object_.sample = "<?php echo $sample ?>";
                
                var userName = "<?php echo $userName ?>";
                var lowerusername = userName.toLowerCase();
          
                
          var node2 = document.createElement("div");
          node2.setAttribute("id","D"+lowerusername);
          node2.setAttribute("class","inside-box");
          document.getElementById("pop-up").appendChild(node2);    
          document.getElementById("D"+lowerusername).innerHTML = "<div id='"+lowerusername+"'"+"style = 'display:none; position:fixed; z-index:1; width: 500px; height: 800px; overflow: auto; background-color:white;justify-content:center;align-items:center;border-radius: 10px; box-shadow: 0px 0px 0px 8000px rgba(0,0,0,0.7); right:600px;top:150px;'><br><br><h1>Artist Information</h1><br><h5>Artist Name :<br>"+ object_.name +"<br><br>About Artist :<br>"+ object_.aboutMe +"<br><br>Artist Email :<br>"+ object_.email+"<br><br> Artist smaple:<br></h5><img src = '"+object_.sample+"' height = '400px' width = '400px'></div>" ;
                        
          var node = document.createElement("div");
          node.setAttribute("id","c"+lowerusername);
          document.getElementById('cards').appendChild(node);
          document.getElementById("c"+lowerusername).setAttribute("class","boxxx");
          document.getElementById("c"+lowerusername).innerHTML = "<div style="+"'background-color:#feeb7f; width: 1100px; height: 75px; border:solid; border-color:#ffdf28; align-items:center; justify-content:center; margin:5px;'"+" onclick= "+"'document.getElementById("+'"'+lowerusername+'"'+").style.display"+'=  "block"'+"'"+'><h4><br>'+userName+"</h4></div>";
                
           var node3 = document.createElement("div");
           node3.setAttribute("class","close2");
           node3.setAttribute("style","font-size: 42px; color:#feeb7f; ");
           node3.setAttribute("onclick","document.getElementById('"+lowerusername+"').style.display='none'");  
            node3.innerHTML ="+";    
           document.getElementById(lowerusername).appendChild(node3);
                
           var node4 = document.createElement("p");
           node4.innerHTML = "<form method = 'post'  action = 'Alterstatus.php'><input type='hidden' name='userName' value='"+lowerusername+"'><input type ='submit' name = 'submit' value = 'Approve' class='Approve-button'></form>";
           document.getElementById(lowerusername).appendChild(node4);
                
           var node5 = document.createElement("p");
           node5.innerHTML = "<form method = 'post'  action = 'Alterstatus.php'><input type='hidden' name='userName' value='"+lowerusername+"'><input type ='submit' name = 'submit' value = 'Disapprove' class='Disapprove-button'></form>";
           document.getElementById(lowerusername).appendChild(node5);    
              

               <?php
          
                }
                
                ?>
      
            
      </script>
        
        
     
        
       
        <!--
  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  -->
      
    <!----------------------->
       
     <section class="mbr-section article content9 cid-rQplkhn7NZ" id="content9-4">



    <div class="container" id="aboutus">
        <div class="inner-container" style="width: 100%;">
            <hr class="line" style="width: 100%; align-content: center;">
            <div class="section-text align-center mbr-fonts-style display-5" id ="aboutus"><strong><em>About us</em></strong><br>First, we’d like to thank you for visiting our website.
<div>Digital Art is a brand-new online platform for artists to upload their artwork for the world to see. Visitors who have registered can view our gallery and comment on artworks, creating a supportive environment for both up-and-coming digital artists as well as professional illustrators.
</div><div>Please support our website by voting for it in our competition!
</div><div>This website is brought to you by the following future software engineers:
</div><div>•	Sarah Algwaiz
</div><div>•	Shahad Alkaltham
</div><div>•	Hadeel Alhajri
</div><div>•	Ghada Alshridah
</div><div><p></p></div>
<!--     <hr class="line" style="width: 100%;">       -->
            </div></div> </div>
</section>


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
                <p class="mbr-text mb-0 mbr-fonts-style display-7">
                    © Copyright 2020 Paint&amp;Pixel Team - All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section>

<!--
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
   --> 
    
  
    

</body>
</html>
