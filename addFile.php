<?php
include __DIR__.'/db.php';

if($_FILES['file']['name'] !== ''){
    $file = $_FILES['file'];
    $name = $file['name'];
    $pathFile = _DIR_ .'/img/'.;

    if(!move_uploaded_file($file['tmp_name'], $pathFile)){
        echo 'File can not be uploaded';
    }

    $data = $db->prepare("INSERT INTO `photos` (`path`) VALUES (?)");
    $data->execute([$name]);


    header('Location: \index.php');
}

?>