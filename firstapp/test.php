<?php
    $file = 'readme.txt';
    $newfile = 'test.txt.bak';

    //      원본파일 복사할파일
    //  참일경우 성공, 거짓일경우 실패
    if(!copy($file, $newfile)){
        echo "failed to copy $file...\n";
    }

    
?>