<?php
    // var_dump($_FILES);
    // name : 실제 이름
    // type : 이미지, png타입이다
    // tmp name : 임시 이름 - 서버의 임시 디렉토리에 들어가게 됨
    // error : 에러 
    // size : byte단위 크기

    // 에러 출력 -> 트러블슈팅 편하게 하는 옵션
    ini_set("display_errors", "1");

    // 임시 디렉토리에서 파일 디렉토리로 옮기는 변수
    $uploaddir = 'C:\Bitnami\wampstack-8.0.5-0\apache2\htdocs\upload\files\\'; //끝에 \\붙여야함.
    
    // 보안을 위해 basename으로 경로 삭제
    $uploadfile = $uploaddir . basename($_FILES['myfile']['name']); //name : 그 파일의 원래 이름
    echo '<pre>';

    // 파일 이동                  실제 파일의 경로(이름)   $_FILES의 임시디렉토리 파일  이동경로
    if (move_uploaded_file($_FILES['myfile']['tmp_name'], $uploadfile)) {
        echo "파일이 유효하고, 성공적으로 업로드 되었습니다.\n";
    } else {
        print "파일 업로드 공격의 가능성이 있습니다!\n";
    }
    echo '자세한 디버깅 정보입니다:';
    print_r($_FILES);
    print "</pre>";
?>
<img src="../upload/files/<?=$_FILES['myfile']['name']?>" />