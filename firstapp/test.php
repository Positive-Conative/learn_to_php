<?php
    // // 현재 디렉토리 확인
    // echo getcwd().'<br>';

    // // 위치 이동
    // chdir('../');

    // echo getcwd().'<br>';
    
    // //현재 디렉토리 사용
    // $dir = './';

    // //현재 디렉토리에 대한 파일들 출력
    // $file1 = scandir($dir);     // 일반
    // $file2 = scandir($dir, 1);  // 1 옵션 : 정렬순서 바꾸기
    
    // //출력
    // print_r($file1);
    // print_r($file2);

    //폴더만들기
    mkdir("1/2/3/4",    // 디렉토리명
           0700,        //권한
           true         //첫 번째 인자의 경로가 만약 없다면 만들어줄까?
    );

?>