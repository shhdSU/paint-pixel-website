<?php
include "DBconnection.php";
      session_start();
       if(!isset($_SESSION['VUserName']))
          header("Location: index.php");
?>
<!DOCTYPE html>
<html>
        <!-- V.1 -->

<head>
  <!-- Site made with Mobirise Website Builder v4.12.0, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.12.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="hadeelassets/images/fulllogo-897x648.png" type="image/x-icon">
  <meta name="description" content="Web Site Builder Description">

  <link rel="stylesheet" href="indexassets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="indexassets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="indexassets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="indexassets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="indexassets/tether/tether.min.css">
  <link rel="stylesheet" href="indexassets/dropdown/css/style.css">
  <link rel="stylesheet" href="indexassets/theme/css/style.css">
  <link rel="preload" as="style" href="indexassets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="indexassets/mobirise/css/mbr-additional.css" type="text/css">
  
    
    
     <!-- important links for jQuery-->   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    
    
  
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
  
    .nav-item{margin-right: 14em;
      }

label{color: #feeb7e;

}
#Edit{

  justify-content: center;
}
#form{
  padding-top: 5em;

}
#message-form1-b{
width: 600px;
  height: 100px;

}
#description{

padding-left: 10em;
}
#message-form1-b{
  border-color: #e3cd52;
}
#email-form1-b{
   border-color: #e3cd52;
}
#name-form1-b{
  border-color: #e3cd52;
}
.sendbutton{
  padding-left: 30em;
}
#descbox{
border-color: #feeb7e;
border-style: solid;
 border-radius: 25px;
 border-width: thin;
 padding-top: 1em;
}
 .commbox{
border-color: #feeb7e;
border-style: solid;
 border-radius: 25px;
 border-width: thin;
 padding-top:1em;
}
#comments{
  margin-top: 5em;
}
#icons{
  align-content: left;
}
    
    #search-2 {
          position: fixed;
          overflow: scroll;
          background-color: white;
          border-radius: 10px;
          display: none;
          z-index: 10;
          top :72px;
          right: 450px;
          border: 4px;
          border-color: black;
          max-height: 350px;
      }
      .Artworks{
          margin-left:50px;
          height: 30px; 
          width: 200px;
          border: solid; 
          border-left-width: 5px;
          border-right-width: 0px; 
          border-bottom-width: 0px; 
          border-top-width: 0px; 
          border-left-color: #feeb7f; 
          margin-top: 5px;
          margin-left: 25px;
          font-size: 20px;
          display: none;
          

      }
      .Artworks:hover{
        border-left-color: gray;   
      }
      #filterInput{
          background-color : #f6f6f6 ;
          margin-left:0px;  
          margin-top:17px; 
          height: 50px; 
          width: 380px; 
          border: solid;
          border-color: #feeb7f; 
          border-radius:50px;
          font-size: 20px
      }
      
      .titles{
          color: gray;
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
                    <a href="Visitor%20Home%20Page%20.php">
                        <img src="hadeelassets/images/fulllogo-897x648.png"  style="height: 4.6rem;">
                    </a>
                </span>
                
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                <li class="nav-item" >
                    <a class="nav-link link text-white display-5" href="Visitor%20Home%20Page%20.php">
                        Home</a>
                </li>
               <li class="nav-item" >
                    <a class="nav-link link text-white display-5" href="#conus">
                        Contact us</a>
                </li><li class="nav-item" >
                    <a class="nav-link link text-white display-5" href="Visitor%20account%20Page%20.php">
                        My account</a>
                </li>
                <div class="search">
                 <li class="nav-item" >
                    <a id = "search2" class="nav-link link text-white display-5" href="#"><img src="indexassets/search.png" width="25" height="28"></a>
                </li>
                    </div>
              <div class="signout">
                <li class="nav-item" >
                    <a id = "signout3" class="nav-link link text-white display-5" href="index.php"><img src="indexassets/singout.png" width="25" height="28"></a>
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
     
        
        $(document).ready(function(){
  $(".search").hover(function(){
    //hover
      document.getElementById("search2").innerHTML="<img src='indexassets/search2.png' width='25' height='28'>";
  },
  function(){
    //out
      document.getElementById("search2").innerHTML="<img src='indexassets/search.png' width='25' height='28'>";
  }); 
});
        
        
    </script>
    
    
    <div id = "search-2"  placeholder="Search names...">
    
         <form id="searchTitle">
         <input id="filterInput" type="text">
             

         
         </form>
         
            
         
    </div>
    
     <script>
       
         $(document).ready(function(){
  $("#search2").click(function(){
    $("#search-2").toggle();
  });
}); 
         
         <?php
             $query = "SELECT title FROM artwork;";
             $result = mysqli_query($conn,$query);
         
         
 while($Arr = mysqli_fetch_array($result)){
             $art = $Arr["title"];
             ?>
            var art = "<?php echo $art; ?>";
            var node = document.createElement("div");
            node.setAttribute("class","Artworks");
            document.getElementById('searchTitle').appendChild(node);

            node.innerHTML = "<a href='View%20Artwork%20(visitor).php?title='<?php echo $art; ?>' class='titles' >&nbsp;&nbsp;"+art+"</a>" ;
         
   <?php } ?>
 
         
         
         // Get input element
    let filterInput = document.getElementById('filterInput');
    // Add event listener
    filterInput.addEventListener('keyup', filterNames);

    function filterNames(){

      // Get value of input
      let filterValue = document.getElementById('filterInput').value.toUpperCase();

      // Get names ul
      let allTitles = document.getElementById('searchTitle');
      // Get lis from ul
      let arts = allTitles.querySelectorAll('div.Artworks');

      // Loop through collection-item lis
      for(let i = 0;i < arts.length;i++){
        let a = arts[i].getElementsByClassName('titles')[0];
        // If matched
        if(a.innerHTML.toUpperCase().indexOf(filterValue) > -1){
          arts[i].style.display = 'block';
        } else {
          arts[i].style.display = 'none';
        }
      }

    }
         
         
 
    </script>
    
    

  <section class="header4 cid-rRDt6QwJxx mbr-parallax-background" id="header4-h">

    

    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(35, 35, 35);">
    </div>
<?php
    $title =  $_GET['title'];
    $query = "SELECT * FROM artwork WHERE title = '$title';";
    $result1 = mysqli_query($conn,$query);
        
    if(mysqli_num_rows($result1)>0)
    $row = mysqli_fetch_assoc($result1);
  else print 'error';
    ?>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="media-content col-md-10">
                <h1 id = 'title' class="mbr-section-title align-center mbr-white pb-3 mbr-bold mbr-fonts-style display-1"><?php echo $row['title'];?><span style="font-weight: normal;"></span></h1>
                            <div id = "descbox">
                              <div class="col-md-4  form-group" data-for="email">
                                <label  for="email-form1-b" class="form-control-label mbr-fonts-style display-7">Done By: </label>
                                <label id = 'artistname' for="email-form1-b" class="form-control-label mbr-fonts-style display-7"><?php echo $row['A_userName']; ?></label><br>
                            <label  for="email-form1-b" class="form-control-label mbr-fonts-style display-7">Description: </label> 
                            <label id = 'description' for="email-form1-b" class="form-control-label mbr-fonts-style display-7"><?php echo $row['description']; ?></label>
                        </div>

                        <div class="col-md-4  form-group" data-for="email">
                            <label for="email-form1-b" class="form-control-label mbr-fonts-style display-7">Date: </label>
                            <label id = 'date' for="email-form1-b" class="form-control-label mbr-fonts-style display-7"><?php echo $row['postedDate']; ?></label>
                        </div>
                              </div>

                    <div  class="mbr-figure pt-5"><img src = "Artworks/<?php echo $row['path']; ?>" style="width: 90%;">
            </div>
                
                <div class="mbr-text align-center mbr-white pb-3">
                    
<form action="" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form" id="form">
  <input type="hidden" name="email" data-form-email="true" value="">
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div id = "icons">
              <a id = 'likelink'><span id = "likebutton"><img src="like.png" id = "likeimg"></span></a>
              <label id = 'likecounter'> <?php echo $row['numLikes']; ?></label>
             <a id = 'dislikelink'><span id = "dislikebutton"><img src="dislike.png" id = "dislikeimg"></span></a>
              <label id = 'dislikecounter'><?php echo $row['numDislikes']; ?></label>
             <a id = 'favoritelink'><span id = "favoritebutton"><img src="favorite.png" id = "favoriteimg"></span></a>
              <label id = 'favoritecounter'><?php echo $row['numFavorite']; ?></label>

                        <div id = "comments" data-for="message" class="col-md-12 form-group">
                           <!-- <label for="message-form1-b" class="form-control-label mbr-fonts-style display-7" >Comments</label>
                            <div id="description">
                            <textarea name="message" data-form-field="Message" class="form-control display-7" id="message-form1-b"></textarea> 
                            <div id = "sendbutton">
                    <a  class="btn btn-md btn-primary display-4" href="https://mobirise.co">Send</a></div>
            </div> -->
                            </div>
                            <div id = 'commentsList'></div>
                        </div>
                       
                </form><!---Formbuilder Form--->

                </div>


            
        </div>
        </div></div>
</section>


  <section class="engine"><a href="https://mobirise.info/u">bootstrap responsive templates</a></section><script src="hadeelassets/web/assets/jquery/jquery.min.js"></script>
  <script src="hadeelassets/popper/popper.min.js"></script>
  <script src="hadeelassets/bootstrap/js/bootstrap.min.js"></script>
  <script src="hadeelassets/tether/tether.min.js"></script>
  <script src="hadeelassets/smoothscroll/smooth-scroll.js"></script>
  <script src="hadeelassets/parallax/jarallax.min.js"></script>
  



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

  <script src="indexassets/web/assets/jquery/jquery.min.js"></script>
  <script src="indexassets/popper/popper.min.js"></script>
  <script src="indexassets/bootstrap/js/bootstrap.min.js"></script>
  <script src="indexassets/tether/tether.min.js"></script>
  <script src="indexassets/smoothscroll/smooth-scroll.js"></script>
  <script src="indexassets/dropdown/js/nav-dropdown.js"></script>
  <script src="indexassets/dropdown/js/navbar-dropdown.js"></script>
  <script src="indexassets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="indexassets/parallax/jarallax.min.js"></script>

  <script type = "text/javascript"> 
    <?php
    $likecount = $row['numLikes'];
    $dislikecount = $row['numDislikes'];
    $favoritecount = $row['numFavorite'];
  ?>
      var likecount = <?php echo $likecount ?>;
      var dislikecount = <?php echo $dislikecount ?>;
      var favoritecount = <?php echo $favoritecount ?>;
    window.addEventListener("load", startCounters, false);
    window.addEventListener("load", checkComments, false);
    window.addEventListener("load", insertComments, false);
  	window.addEventListener("load", start, false);
function start(event){
  		var likecounter = document.getElementById('likecounter');
  		var dislikecounter = document.getElementById('dislikecounter');
  		var favoritecounter = document.getElementById('favoritecounter');
  		var likebutton = document.getElementById('likebutton');
  		var dislikebutton = document.getElementById('dislikebutton');
  		var favoritebutton = document.getElementById('favoritebutton');
      var sendbutton = document.getElementById('sendbutton');
      if(sendbutton){
      sendbutton.addEventListener('click',publishComment);
    }
      <?php $userName = $_SESSION['VUserName'];
   $queryLD = "SELECT liked,disliked FROM likedislike WHERE AW_Title = '$title' AND V_userName = '$userName'";
   $resultLD = mysqli_query($conn,$queryLD);
   $rowLD = mysqli_fetch_row($resultLD); 
   if($rowLD==null){
   $queryIns = "INSERT INTO likedislike (V_userName, AW_Title,  liked, disliked) VALUES('$userName','$title',0,0);";
mysqli_query($conn,$queryIns);
   }
    $queryFAV = "SELECT * FROM favorite WHERE AW_Title = '$title' AND V_userName= '$userName'";
  $resultFAV= mysqli_query($conn,$queryFAV);
   $rowFAV = mysqli_fetch_row($resultFAV); 
    ?>
    document.getElementById('likeimg').setAttribute('src',"<?php echo ($rowLD[0]==1)?  "like2.png" :  "like.png" ?>");
    document.getElementById('dislikeimg').setAttribute('src',"<?php echo ($rowLD[1]==1)? "dislike2.png" : "dislike.png" ?>");
    document.getElementById('favoriteimg').setAttribute('src',"<?php echo ($rowFAV!=null)?  "favorite2.png" :  "favorite.png" ?>");
  		likebutton.addEventListener('click',changeLikeImage);
  		dislikebutton.addEventListener('click',changeDislikeImage);
  		favoritebutton.addEventListener('click',changeFavoriteImage);
     }
function startCounters(event){
      likecounter.innerHTML = likecount;
      dislikecounter.innerHTML = dislikecount;
      favoritecounter.innerHTML = favoritecount;
    }
function changeLikeImage(){
  		if(document.getElementById('likeimg').getAttribute('src') == 'like.png'){
  		document.getElementById('likeimg').setAttribute('src','like2.png');
  		if(document.getElementById('dislikeimg').getAttribute('src') == 'dislike2.png'){
 		document.getElementById('dislikeimg').setAttribute('src','dislike.png');
    dislikecount = dislikecount - 1;
    if(dislikecount<0)
      dislikecount = 0;
    dislikecounter.innerHTML = dislikecount;
     window.open("dislikePHP.php?title='<?php echo $title; ?>'&numDislikes=<?php echo $row['numDislikes']; ?>&changeBoth=1");
  }
    likecount = likecount + 1;
    likecounter.innerHTML = likecount;

    window.open("likePHP.php?title='<?php echo $title; ?>'&numLikes=<?php echo $row['numLikes']; ?>&changeBoth=0");
  	}
  	else if(document.getElementById('likeimg').getAttribute('src') == 'like2.png'){
  		document.getElementById('likeimg').setAttribute('src','like.png');
    likecount = likecount - 1;
    if(likecount<0)
      likecount=0;
     likecounter.innerHTML = likecount;

        window.open("likePHP.php?title='<?php echo $title; ?>'&numLikes=<?php echo $row['numLikes']; ?>&changeBoth=0");
  	}
  	}
function changeDislikeImage(){
  			if(document.getElementById('dislikeimg').getAttribute('src') == 'dislike.png'){
  		document.getElementById('dislikeimg').setAttribute('src','dislike2.png');
  		if(document.getElementById('likeimg').getAttribute('src') == 'like2.png'){
  	    document.getElementById('likeimg').setAttribute('src','like.png');
    likecount = likecount - 1;
    if(likecount<0)
      likecount=0;
    likecounter.innerHTML = likecount;

    window.open("likePHP.php?title='<?php echo $title; ?>'&numLikes=<?php echo $row['numLikes']; ?>&changeBoth=1");
  	}
    dislikecount = dislikecount + 1;
    dislikecounter.innerHTML = dislikecount;
    window.open("dislikePHP.php?title='<?php echo $title; ?>'&numDislikes=<?php echo $row['numDislikes']; ?>&changeBoth=0");
  	}
  	else if(document.getElementById('dislikeimg').getAttribute('src') == 'dislike2.png'){
  		document.getElementById('dislikeimg').setAttribute('src','dislike.png');
  	
    dislikecount = dislikecount - 1;
    if(dislikecount<0)
      dislikecount=0;

    window.open("dislikePHP.php?title='<?php echo $title; ?>'&numDislikes=<?php echo $row['numDislikes']; ?>&changeBoth=0");
  	}
    dislikecounter.innerHTML = dislikecount;

  	}
function changeFavoriteImage(){
  			if(document.getElementById('favoriteimg').getAttribute('src') == 'favorite.png'){
  		document.getElementById('favoriteimg').setAttribute('src','favorite2.png');
  	
    favoritecount = favoritecount + 1;
    favoritecounter.innerHTML = favoritecount;

    window.open("favoritePHP.php?title='<?php echo $title; ?>'&numFavorite=<?php echo $row['numFavorite']; ?>");
  	}
  	else if(document.getElementById('favoriteimg').getAttribute('src') == 'favorite2.png'){
  		document.getElementById('favoriteimg').setAttribute('src','favorite.png');
  		
    favoritecount = favoritecount - 1;
    if(favoritecount<0)
      favoritecount=0;

    favoritecounter.innerHTML = favoritecount;
    window.open("favoritePHP.php?title='<?php echo $title; ?>'&numFavorite=<?php echo $row['numFavorite']; ?>");
  	
  	}
  }

function checkComments(){
      if(<?php echo $row['enableComm'] ?> == 1){
        document.getElementById('comments').innerHTML = '<label for="message-form1-b" class="form-control-label mbr-fonts-style display-7" >Enter your comment here: (Maximum 450 characters)</label>' +
                            '<div id="description">' + 
                           '<form><textarea id = "commentbox" placeholder = "Enter your comment here." name="message" data-form-field="Message" class="form-control display-7"></textarea>' + "<div class = 'sendbutton' >" +
                    '<a  id = "sendbutton" class="btn btn-md btn-primary display-4">Comment</a></div></form>' +
            '</div>'

    }
      }
function insertComments(){
   if(<?php echo $row['enableComm']; ?> == 1){
        <?php
         $queryComm = "SELECT * FROM comment WHERE AW_Title = '$title';";
    $resultComm = mysqli_query($conn,$queryComm); ?>
  var numComm = <?php echo mysqli_num_rows($resultComm); ?>;
    var commentsList = document.getElementById("commentsList");
  commentsList.innerHTML += '<h6>Comments</h6>';
  if(numComm==0){
   commentsList.innerHTML+=  "<p id = 'nocomment'>There are no comments. Be the first to comment!</p>";
  }
  else{
  <?php while($row1 = mysqli_fetch_row($resultComm)){ ?>
    commentsList.innerHTML+=  '<div class = "commbox">' + <?php print ("'<p>Comment from: $row1[2] </p> <p>  $row1[0] </p>';");} ?> + '</div>';
}
}
}
function publishComment(){
  var commentbox = document.getElementById('commentbox');
  var commentsList = document.getElementById('commentsList');
  var text = commentbox.value;
  var userName ='<?php echo $_SESSION['VUserName'] ?>';
  var textNode1 = document.createTextNode("Comment from: "+userName);
   var element = document.createElement("p");
  var textNode = document.createTextNode(text);
  var element1 = document.createElement("p");
  element1.setAttribute('class','commbox');
  element1.appendChild(textNode1);
  element.appendChild(textNode);
  if(document.getElementById('nocomment'))
  document.getElementById('nocomment').innerHTML='';
  element1.appendChild(element);
  commentsList.appendChild(element1);
  window.open("sendComment.php?text='"+text+"'&title='<?php echo $title;?>'");
}

  </script>


</body>
</html>
