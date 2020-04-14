<?php
   include "DBconnection.php";
session_start();
$userName = $_SESSION['VUserName'];
$title = $_GET['title'];
$numDislikes = $_GET['numDislikes'];
$changeBoth = $_GET['changeBoth'];
$queryLD = "SELECT disliked FROM likedislike WHERE AW_Title = $title AND V_userName= '$userName'";
echo $queryLD;
   $resultLD = mysqli_query($conn,$queryLD);
   $rowLD = mysqli_fetch_row($resultLD); 

if($rowLD[0]==0){
	$newNumDislikes = $numDislikes+1;
	$query = "UPDATE artwork SET numDislikes= $newNumDislikes WHERE title=$title;";
  echo $query;
  $query2 = "UPDATE likedislike SET disliked=1 WHERE AW_Title = $title AND V_userName= '$userName'";
  echo $query2;
  mysqli_query($conn,$query2);
	mysqli_query($conn,$query);
}
else if($rowLD[0] ==1){
	$newNumDislikes = $numDislikes-1;
    if($newNumDislikes<0)
        $newNumDislikes=0;
	  $query = "UPDATE artwork SET numDislikes= $newNumDislikes WHERE title=$title;";
    echo $query;
    $query2 = "UPDATE likedislike SET disliked=0 WHERE AW_Title = $title AND V_userName= '$userName'";
    echo $query2;
    mysqli_query($conn,$query2);
	mysqli_query($conn,$query);
}
 if($changeBoth==1){
     $query3 = "UPDATE likedislike SET liked=1 WHERE AW_Title = $title AND V_userName= '$userName'";
    echo $query3;
    mysqli_query($conn,$query3);
  }
?>
<script type = 'text/javascript'>
    window.addEventListener('load',function(){
        window.close();
    });
    </script>