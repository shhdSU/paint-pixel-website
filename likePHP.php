<?php
  include "DBconnection.php";
session_start();
$userName = $_SESSION['VUserName'];
$title = $_GET['title'];
$numLikes = $_GET['numLikes'];
$changeBoth = $_GET['changeBoth'];
$queryLD = "SELECT liked FROM likedislike WHERE AW_Title = $title AND V_userName= '$userName'";
   $resultLD = mysqli_query($conn,$queryLD);
   $rowLD = mysqli_fetch_row($resultLD); 
if($rowLD[0]==0){
	$newNumLikes = $numLikes+1;
	$query = "UPDATE artwork SET numLikes= $newNumLikes WHERE title=$title;";
	$query2 = "UPDATE likedislike SET liked=1 WHERE AW_Title = $title AND V_userName= '$userName'";
	mysqli_query($conn,$query2);
	mysqli_query($conn,$query);

}
else if($rowLD[0]==1){
	$newNumLikes = $numLikes-1;
	if($newNumLikes<0)
		$newNumLikes=0;
	$query = "UPDATE artwork SET numLikes= $newNumLikes WHERE title=$title;";
	$query3 = "UPDATE likedislike SET liked=0 WHERE AW_Title = $title AND V_userName= '$userName'";
	mysqli_query($conn,$query3);
	mysqli_query($conn,$query);

	if($changeBoth==1){
	$query4 = "SELECT numDislikes FROM artwork WHERE title=$title;";
    $result4 = mysqli_query($conn,$query4);
   $row4 = mysqli_fetch_row($result4); 
   $numDislikes= $row4[0];
		 $query3 = "UPDATE likedislike SET disliked=1 WHERE AW_Title = $title AND V_userName= '$userName'";
		 $query = "UPDATE artwork SET numDislikes= $numDislikes+1 WHERE title=$title;";
    mysqli_query($conn,$query);
    mysqli_query($conn,$query3);
	}
}
?>
<script type = 'text/javascript'>
	window.addEventListener('load',function(){
		window.close();
	});
	</script>