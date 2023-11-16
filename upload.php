<?php
if(!empty($_POST['image'])){
    if(file_put_contents(date("d-m-y").'-'.time().'-'.rand(10000, 10000). '.jpg',
    base64_decode($_POST['image']))){
        echo 'success';
    }
    else echo 'Failed to upload image';
}
else echo 'No image found';