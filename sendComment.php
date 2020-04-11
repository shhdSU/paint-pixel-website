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
$commText = $_GET['text'];
$title = $_GET['title'];
$userName = $_SESSION['userName'];
$query = "INSERT INTO comment (text,V_userName,AW_Title) VALUES ($commText,$userName,$title);";
$result1 = mysqli_query($conn,$query);
?>
<script type = 'text/javascript'>
	window.addEventListener('load',function(){
		window.close();
	});
	</script>