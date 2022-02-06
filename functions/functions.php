<?php
function uploadImage(){
    $imagename = $_FILES['image']['name'];
    $imagetmp = $_FILES['image']['tmp_name'];

    $alolowed = array('jpeg', 'png', 'jpg');

    $ext = pathinfo($imagename,PATHINFO_EXTENSION);

    if (in_array($ext,$alolowed)){
        move_uploaded_file($imagetmp,"images/" . $imagename);
    }else{
        echo "only png, jpg and jpeg image format are allowed";
    }
    return $imagename;
}

?>