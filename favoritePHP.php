<?php
include "DBconnection.php";

    session_start();
$userName = $_SESSION['VUserName'];
$title = $_GET['title'];
$numFavorite = $_GET['numFavorite'];
 $queryFAV = "SELECT * FROM favorite WHERE AW_title = $title AND V_userName= '$userName';";
  $resultFAV= mysqli_query($conn,$queryFAV);
  
if (mysqli_num_rows($resultFAV)==0){
    $newFavorite = $numFavorite+1;
    $query2 = "UPDATE artwork SET numFavorite= $newFavorite WHERE title=$title;";

    mysqli_query($conn,$query2);
    $queryAdd = "INSERT INTO favorite (V_userName, AW_title) VALUES ('$userName',$title);";
    mysqli_query($conn,$queryAdd);

} else{
    $newFavorite = $numFavorite-1;
        if($newFavorite<0)
        $newFavorite=0;
    $query = "UPDATE artwork SET numFavorite= $newFavorite WHERE title=$title;";
    mysqli_query($conn,$query);
    $queryDelete = "DELETE FROM favorite WHERE AW_title = $title AND V_userName = '$userName';";
        
        mysqli_query($conn,$queryDelete);
}

?>
<script type = 'text/javascript'>
    window.addEventListener('load',function(){
        window.close();
    });
    </script>