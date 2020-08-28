<?php
function uploads($name_img,$folder)
{
    $upload_dir="uploads/{$folder}/";
    $upload_file=$upload_dir.$name_img;
    if(move_uploaded_file($_FILES['file']['tmp_name'],$upload_file))
    {
        return $upload_file;
    }
    else
    {
        return false;
    }
}


?>