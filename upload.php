<?php
$con = mysqli_connect("localhost", "root", "", "upload_image");
if($con){

if(!empty($_POST['image'])){
    $path = 'images/'.date("d-m-y").'-'.time().'-'.rand(10000, 10000). '.jpg';
    if(file_put_contents($path,
    base64_decode($_POST['image']))){
    $sql = "insert into images(path) values ('".$path."')";
    if(mysqli_query($con, $sql)){
        echo 'success';
    }
    else echo 'Failed to insert to Database';
    }
    else echo 'Failed to upload image';
}
else echo 'No image found';   
}
else echo "Database connection failed";
?>