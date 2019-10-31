<?php
include("connect.php");
echo "masuk sini";
$res = mysqli_query($con,"select event_title from event where event_id =1");
$row = mysqli_fetch_array($res);
$title = $row['event_title'];
$tot = $_POST['total'];
for($i=1;$i<=$tot;$i++){
    $code = md5($title.$i);
    mysqli_query($con,"insert into event_detail (event_id,event_code) values (1,'$code')");
}
header("Location:s_page1.php");

?>