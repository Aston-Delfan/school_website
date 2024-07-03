<?php
session_start();
include ('config.php');
$username = $_POST["username"];
$password = $_POST["password"];

$query =mysqli_query($koneksi, "SELECT * from tbl_users where username='$username' and password='$password'");
if(mysqli_num_rows($query)==1){
    header('location:../app');
    $user = mysqli_fetch_array($query); 
    $_SESSION['nama'] = $user['nama'];
    $_SESSION['level'] = $user['level'];
}
else if($username =='' || $password ==''){
    header('location:../index.php?error=2');
}
else{
    // echo "error";
    header('location:../index.php?error=1');
}
?>