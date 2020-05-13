<?php
 $file = "uploaded_images/preview.png";
    if(file_exists($file)) {
        echo "exists";
    }else {
        echo "not exists";
    }
?>