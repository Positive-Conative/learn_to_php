<?php
    $file = './readme.txt';

    if(is_readable($file)){ //읽을 수 있는가?
        echo "This file is readable"."<br/>";
    }else{
        echo "This file is not readable"."<br/>";
    }

    if(file_exists($file)){
        echo "$file is exists."."<br/>";
    }else{
        echo "$file is not exists."."<br/>";
    }

    echo file_get_contents($file);   //url로 읽을 수도 있음.

    
?>