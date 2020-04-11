
<!-- V.1-->

<?php
$currentArtwork=  $_GET['title'];
include "DBconnection.php";
$query = "DELETE FROM artwork  WHERE title = '$currentArtwork';"; 
    
        
    if($result = mysqli_query($conn,$query)) {
     
   header("location: artistdashboard.php");
 exit();

}
  else print 'error';


?>