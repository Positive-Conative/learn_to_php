<?php
    $file = './readme.txt';
    
    if(is_writeable($file)){
        echo "This file is readable"."<br/>";
    }else{
        echo "This file is not readable"."<br/>";
    }

    file_put_contents($file, 'hello conative');
?>