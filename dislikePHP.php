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

$title = $_GET['title'];
$numDislikes = $_GET['numDislikes'];
$increase= $_GET['increase'];
if($increase==1){
	$newNumDislikes = $numDislikes+1;
	$query = "UPDATE artwork SET numDislikes= $newNumDislikes WHERE title=$title;";
	mysqli_query($conn,$query);
}
else if($increase ==0){
	$newNumDislikes = $numDislikes-1;
    if($newNumDislikes<0)
        $newNumDislikes=0;
	$query = "UPDATE artwork SET numDislikes= $newNumDislikes WHERE title=$title;";
	mysqli_query($conn,$query);
}
?>
<script type = 'text/javascript'>
    window.addEventListener('load',function(){
        window.close();
    });
    </script>