<?php
    DEFINE('DB_USER','root');
    DEFINE('DB_PSWD','');
    DEFINE('DB_HOST','localhost');
    DEFINE('DB_NAME','paint-and-pixel');
    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PSWD);
    if ($conn) {
} else {
}
    if (!$conn = mysqli_connect(DB_HOST,DB_USER,DB_PSWD))
        die("Connection failed.");

    if(!mysqli_select_db($conn, DB_NAME))
        die("Could not open the ".DB_NAME." database.");
    session_start();
$userName = $_SESSION['userName'];
$title = $_GET['title'];
$numFavorite = $_GET['numFavorite'];
$increase= $_GET['increase'];
if($increase==1){
	$newFavorite = $numFavorite+1;
	$query = "UPDATE artwork SET numFavorite= $newFavorite WHERE title=$title;";
	mysqli_query($conn,$query);
    $queryAdd = "INSERT INTO favorite (V_userName, AW_title) VALUES ('$userName',$title);";
    echo $queryAdd;
    mysqli_query($conn,$queryAdd);
}
else if($increase ==0){
	$newFavorite = $numFavorite-1;
        if($newFavorite<0)
        $newFavorite=0;
	$query = "UPDATE artwork SET numFavorite= $newFavorite WHERE title=$title;";
	mysqli_query($conn,$query);
    $queryDelete = "DELETE FROM favorite WHERE AW_Title = $title AND V_userName = '$userName';";
        echo $queryDelete;
        mysqli_query($conn,$queryDelete);

}
?>
<script type = 'text/javascript'>
    window.addEventListener('load',function(){
        window.close();
    });
    </script>