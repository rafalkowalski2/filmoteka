<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
print_r($_POST);
print_r($_FILES);
$path = "test/";
//echo $_FILES['file']['name'];
$path = $path.$_FILES['file']['name'];
echo $path;
if(!is_file($path))
{
    move_uploaded_file($_FILES['file']['tmp_name'], $path);
    if(is_file($path))
    {
        echo 'Plik zapisano!';
    }
    else
    {
        echo 'coś poszło nie tak!';
    }
}
?>