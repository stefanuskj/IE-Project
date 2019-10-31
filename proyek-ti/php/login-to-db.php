<?php 
include("connect.php");
echo "Connected to database <br>";

$user_name = $_POST['nama'];
$user_password = $_POST['pass'];

$que = mysqli_query($con,"select user_super from user where user_name='$user_name' and user_password='$user_password'");

if (mysqli_num_rows($que) >=1)
{
    $row=mysqli_fetch_array($que);
    $super_user = $row['user_super'];
    if($super_user == 1){
        header("Location:s_page1.php");
    }
    else{
        header("Location:page1.php");
    }
}
else{
    echo "failed login";
}



?>