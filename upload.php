<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

$videoFormats = array('mp4','mkv','avi','wmv','mov','qt','flv','webm','mpg','ogg','mpeg','rm');

$name= $_FILES['file']['name'];

$tmp_name= $_FILES['file']['tmp_name'];

$position= strpos($name, ".");

$fileextension= substr($name, $position + 1);

$fileextension= strtolower($fileextension);

$randName = md5(date('Ymdhisu')).'.'.$fileextension;

if (isset($name)) 
{  

    $path= '/var/www/html/vidshare/uploads/';
    if (empty($name))
    {
      echo "Please choose a file";
    }
    else if (!empty($name)){

        if (!in_array ($fileextension,$videoFormats))
        {
            echo "The file extension must be one of ".implode(', ',$videoFormats)." in order to be uploaded";
        }
        else if (in_array ($fileextension,$videoFormats))
        {
            if (move_uploaded_file($tmp_name, $path.$randName)) {
                header("Location: /vidshare/done.php?video=$randName");

            }            
        }
        else{
            echo "Couldn't match ext.";
        }
        
        
    }
}

?>