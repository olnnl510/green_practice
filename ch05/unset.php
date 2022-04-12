<?php
    if(isset($name)){ // 변수값 설정 x 할당한적없음(=으로 값이 들어간적 없음)
        print " name is ok!!"; // 안뜸
    }

    $name = "HongGilDong"; // 변수값 설정 o 이제 뜸!
    if(isset($name)){
        print " name is great!!";
        print isset($name); // isset의 네임값 : 1뜨는이유 true 라서?
    }
    print $name . "<br>";

    unset($name); // 변수해제
    print $name . "<br>"; // 아무것도 안찍힘

    print "The End";

?>

<!-- 1이 왜 뜨는거지? true라서?

isset 변수가 할당되어있는지 안되어있는지 확인하는 용도
unset 할당되어진 변수를 해제할때 (메모리 관리에 도움이됨)

필요없어지면 변수를 해제하는 습관을 들이자!

-->