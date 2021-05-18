<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    //array_chunk
    // $myarray = ["a", "s", "d", "f"];
    // print_r(array_chunk(    // 하나의 배열을 다차원 배열로 만들기
    //     $myarray,           // 작업할 배열
    //     2,                  // 2개씩 묶겠다.
    //     true                // True: 기본 키 유지 / False: 기본 키 삭제 (default)
    // ));
?>

<?php
    // $a = ["a", "b", "c"];       //Key가 되고
    // $b = ["x", "y", "z"];       //Value가 된다.
    // $c = array_combine($a, $b); //합체!

    // print_r($c);
?>

<?php
    //배열 안에 요소가 몇개씩 있는지 확인하기
    // $a = array(1, "hello", 1, "world", "hello");
    // print_r(array_count_values($a));
    // print_r(array_count_values($a)['hello']);   //2
?>

<?php
    // 배열 비교하기 (Value)
    // $a = ["a", "b", "c"];
    // $b = ["b", "c", "d"];

    // $result = array_diff($a, $b);   //a에는 있는데 b에는 없는것이 뭘까?
    // print_r($result);
?>

<?php
    // 배열 비교하기 (Key, Value) : 모두 일치해야.
    // $a = ["a", "b", "c"];
    // $b = ["c", "b", "d"];

    // $result = array_diff_assoc($a, $b);   //a에는 있는데 b에는 없는것이 뭘까?
    // print_r($result);
?>

<?php
    // $a = array_fill(
    //     5,          // 5번부터 Index가 시작되는 (반드시 int)
    //     6,          // 6개의 배열을 만드는데
    //     'hello'    // hello로 채워라
    // );
    // print_r($a);
?>

<?php
    //배열 안의 Value를 callback function 안에 넣어 True인것만 반환함
    //함수 구성
    // function is_even($number){
    //     return $number%2 == 0;
    // }

    // $a = [1,2,3,4,5,6];
    // print_r(array_filter($a, "is_even"));   //2, 4, 6
?>

<?php
    //배열 Key / Value 반전
    // $a = [
    //     "name" => "conantive",
    //     "age" => 25,
    //     "comment" => "hello!"
    // ];
    // print_r($a);

    // $result = array_flip($a);   //Key, Value 뒤집기.
    // print_r($result);
?>

<?php
    // Array의 Key값을 value로 가진 배열 생성
    // $a = [
    //     "name" => "conative",
    //     "age" => 25,
    //     "comment" => "hello!"
    // ];

    // print_r(array_keys($a));    //Key를 하나의 배열로 생성.
?>

<?php
    // Array의 value값을 가진, index가 0부터 시작되는 배열 생성
    // $a = [
    //     "name" => "conative",
    //     "age" => 25,
    //     "comment" => "hello!"
    // ];

    // print_r(array_values($a));    //Key를 하나의 배열로 생성.
?>

<?php
    // function modify($value){
    //     return $value."입니다.";
    // }

    // $a = [1,2,3,4,5,6];
    // $b = array_map("modify", $a);   // Array에 함수를 결합하여 새로운 배열 생성
    // print_r($b);
?>

<?php
    //배열 병합
    // $a = [
    //     "color"=>"red", 
    //     "name"=>"a pen",
    //     "amount"=>1
    // ];
    // $b = [
    //     "color"=>"blue",
    //     "amount"=>2
    // ];

    // $result = array_merge($a, $b);  //a에 b를 덮어씌움. (b가 남게됨)
    // print_r($result);

    /* 결과
     * Array
     * (
     *  [color] => blue
     *  [name] => a pen
     *  [amount] => 2
     * )
     */
?>

<?php
    // $a = [
    //     "color"=>"red", 
    //     "name"=>"a pen",
    //     "amount"=>1
    // ];
    // $b = [
    //     "color"=>"blue",
    //     "amount"=>2
    // ];

    // $result = array_merge_recursive($a, $b);  //a에 b를 덮어씌움. (버리는거없이, Array로 묶임)
    // print_r($result);
    
    /* 결과
     *  [color] => Array
     *  (
     *  [0] => red
     *  [1] => blue
     *  )
     *
     *  [name] => a pen
     *  [amount] => Array
     *  (
     *  [0] => 1
     *  [1] => 2
     *  )
     */
?>

<?php
    //Multisort
    // $myGrade[] = array("name"=>"b과목", "grade"=>50);
    // $myGrade[] = array("name"=>"a과목", "grade"=>20);
    // $myGrade[] = array("name"=>"a과목", "grade"=>10);
    // $myGrade[] = array("name"=>"c과목", "grade"=>40);
    // $myGrade[] = array("name"=>"d과목", "grade"=>50);
    // $myGrade[] = array("name"=>"b과목", "grade"=>30);

    // //데이터를 배열로 가져옴
    // foreach( $myGrade as $key => $value ){
    //     $name[$key] = $value["name"];
    //     $grade[$key] = $value["grade"];
    // }
    // array_multisort(
    //     $name, 
    //     SORT_DESC,      // name은 내림차순, 
    //     $grade, 
    //     SORT_ASC,       // grade는 오름차순
    //     $myGrade        // 적용 Array
    // );
    
    // print_r($myGrade);
?>

<?php
    //남은 것 채워라
    // $input = array(12, 10, 9);

    // $a = array_pad(
    //     $input,     // 이 배열을
    //     5,          // size가 5가 되게끔 (양수) 오른쪽으로
    //     0           // 0을 채워넣어라 
    // );
    // $b = array_pad(
    //     $input,     // 이 배열을
    //     -7,         // size가 7이 되게금 (음수) 왼쪽으로
    //     -1          // -1을 채워넣어라
    // );

    // print_r($a);
    // print_r($b);

?>

<?php
    //Push & Pop!
    // $a = array(1,2,3,4,5);
    // print_r($a);

    // array_push($a, 6, 7);   // 1개 이상 가능
    // print_r($a);

    // array_pop($a);          // 마지막 요소 파괴
    // print_r($a);
?>

<?php
    //배열에서 임의의 요소 하나 가져오기
    // $a = array(1,2,3,4,5);

    // $randomA = array_rand($a, 2); //a array에서 2개 랜덤 뽑기

    // foreach($randomA as $key=>$value){
    //     print("$key, $value 가 뽑혔습니다!<br>");
    // }
?>

<?php
    // function sum($a, $b){   // 반드시 2개의 인자 필요
    //     return $a+$b;       // 반드시 return 필요
    // }

    // $array = array(1,2,3,4,5);
    // $barry = array_reduce($array, "sum");
    // $carry = array_reduce(
    //     $array, 
    //     "sum", 
    //     100     //마지막 값은 맨 처음에 들어간다 
    // );  

    // print("$barry <br>");
    // print("$carry <br>");

    

    // function comma($a, $b){
    //     return "$a $b,";
    // }
    // $darry = array_reduce($array, "comma", "값: ");
    // print("$darry <br>");
?>

<?php
    //배열 뒤집기

    // $a = array(1,2,3,4,5);
    // print_r(array_reverse($a, true));   //true일경우 key도 같이 바뀜 (default:false)
?>

<?php
    // 배열 탐색
    // $a = array("a","b","c","b");
    // print_r(array_search("b", $a)); //1 출력(index : 1), 이후의 것은 안나오는군
?>

<?php
    //shift
    // $a = array("a","b","c","b");
    // $one = array_shift($a); // 0번째 return 후 pop

    // echo $one."<br>";    // a
    // print_r ($a);        // b,c,b
?>

<?php
    //unshift
    // $a = array("a","b","c","b");
    
    // array_unshift($a, "asdf", "fdsa"); // 추가된 length 반환 (6)

    // print_r($a);
?>

<?php
    // 배열 자르기
    // $a = array("a", "b", "c", "d", "e", "f", "g");

    //배열의 키는 무시, 실질적 위치에 따라 움직임.
    // print_r(array_slice ($a, 2));       // index 2부터 시작, 끝까지(c~g)
    // print_r(array_slice ($a, 2, 3));    // index 2부터 시작, 3개만 (c~e)
    // print_r(array_slice ($a, -2));      // 맨뒤에서 2번째부터 시작, 끝까지 (f~g)
    // print_r(array_slice ($a, -4, 2));   // 맨뒤에서 4번째부터 시작, 2개만 (d~e)
?>

<?php
    // 추출하고 다른걸로 바꾸기!
    // $a = array("a", "b", "c", "d", "e", "f", "g");

    // $result = array_splice($a, 2);

    // print_r($result);   //cdefg
    // print_r($a);        //ab

    //================================================

    // $result = array_splice($a, 2, -1);
    // print_r($a);    //abg

    //================================================

    // array_splice($a, 2, count($a), "hello"); //2부터 다 없애구 hello 로 바꿀래요
    // print_r($a);    //2 
?>

<?php
    // $a = array(1,2,3,4,5);
    // $ab = array("a", "b", 1, "d", "e", 3, "g");

    // echo array_sum($a);     // 15
    // echo array_sum($ab);    // 4 (숫자만 계산된다)
?>

<?php
    // 중복 제거
    // $a = array(1,2,3,4,5,4,3);
    // print_r(array_unique($a));
?>

<?php

    // function _two($value, $key){
    //     echo "$key : $value <br>";
    // }

    // function _three($value, $key, $plus){
    //     echo "$key $value ($plus) <br>";
    // }

    // $array = [
    //     "name" => "conative",
    //     "age" => 25,
    //     "comment" => "hello!"
    // ];

    // print("Two-------------------- <br>");
    
    // array_walk($array, "_two"); //arg 2개는 value, key 순서대로 함수에 들어간다.

    // print("Three-------------------- <br>");
    // array_walk($array, "_three", "+alpha"); //arg 3개는 value, key, 3번째 arg 순서대로 함수에 들어간다
    


    //====================================
    // $array2 = array(
    //     "arr1" => $array,
    //     "plus" => "alpha"
    // );
    // array_walk_recursive($array2, "_two");  //array 안에 array 있을 경우
?>

<?php
    // 정렬
    // $fruts = array("l"=>"lemon", "a"=>"apple", "c"=>"ccc", "b"=>"banana");

    // arsort($fruts); //배열의 키는 유지한 채 정렬
    // print_r($fruts);
    // print reset($fruts);
    // $result = each($fruts);
    // print_r($result);

    // while(list($a,$b)=each($fruts)){        // PHP 8.0 ver 이후부턴 작동 안되는듯.
    //     echo $a;
    //     echo $b;
    // }
?>

<?php
    // 변수를 배열에 넣어버리기
    // $name = "conative";
    // $age = 25;
    // $notice = "hello php!";

    // $userArray = array("name", "age");

    // $result = compact($userArray, "notice");

    // print_r($result);
?>

<?php
    // count
    // $a = array("a", "b", "c", "d", "e", "f", "g");
    // $b = "aaa";

    // echo count($a);
    // echo count($b); // 8.0에서부터는 err? 그냥 err?
?>

<?php
    // 배열의 포인터를 확인해보기(끝일 경우 false)
    // $a = array(1,2,3,4);
    // $pointer = current($a);
    // var_dump( $pointer );   // 1

    // $pointer = next($a);    // 오른쪽으로 이동
    // $pointer = current($a); // 포인터가 가리키는 배열 확인
    // var_dump( $pointer );   // 2

    // $pointer = next($a);
    // $pointer = current($a);
    // var_dump( $pointer );   // 3

    // $pointer = prev($a);    // 왼쪽으로 이동
    // $pointer = current($a);
    // var_dump( $pointer );   // 2

    // $pointer = end($a);     // 끝으로 이동
    // $pointer = current($a);
    // print(key($a));         // 3 (index number)
    // var_dump( $pointer );   // 4

    // $pointer = next($a);    // 없음!
    // $pointer = current($a);
    // var_dump( $pointer );   // false
    
    // $pointer = reset($a);   // 맨 앞으로 이동 
    // $pointer = current($a);
    // var_dump( $pointer );   // 1
?>

<?php
    // $String = "hello world conative!";
    // print_r(explode(' ', $String)); // hello, conative
    // print_r(explode(
    //     ' ',        // 무엇으로 나눌까?
    //     $String,    // 넣을 문자열
    //     2           // 총 길이(갯수 부족 시 마지막 배열에 다넣음)
    // ));
?>

<?php
    // inplode 함수 == join 함수
    // 문자열 합쳐서 출력하기
    // $a = array("asdf", "fdsa", "qwerty");
    // $inpTest = implode(", ", $a);

    // print($inpTest);
?>

<?php
    // $a = [
    //     "name" => "conantive",
    //     "age" => 25,
    //     "comment" => "hello!"
    // ];
    // $comment = "hello world!";
    
    // //충돌날 경우 old를 변수명 앞에 붙인다.
    // extract($a, EXTR_PREFIX_SAME | EXTR_REFS, "old");

    // print("$name <br>");        // conative
    // print("$age <br>");         // 25
    // print("$comment <br>");     // hello world!
    // print("$old_comment <br>"); // hello
?>

<?php
    // $info = array('coffee', 'caffeine');
    // list($drink, $power) = $info;               //info의 array에서 값 추출
    // echo "$drink is contain a lot of $power."
?>

<?php
    // 정렬 문제점 해결

    $a = array("1", "11", "2", "3", "21");
    sort($a);
    print_r($a);
?>
</body>
</html>