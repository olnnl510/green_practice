<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글쓰기</title>
</head>
<body>
    <h1>글쓰기</h1>
    <a href="list.php"><button>리스트</button></a>
    <form action="write_proc.php" method="post">
        <div><input type="text" name="title" placeholder="제목"></div>
        <div><textarea name="ctnt" placeholder="내용"></textarea></div>
        <div>
            <input type="submit" value="글등록">
            <input type="reset" value="초기화">
        </div>
    </form>
</body>
</html>

<!--

/list.php /붙이면 중간에 2차 3차 다 적어야함.
list.php = 끝에주소만 바뀜

고객이 무언가 작성할 창 역할

html 문법밖에 없음.css php 문법 없음
작성할 수 있도록 칸이 마련됨.

글등록(submit)을 누르면
form태그에 설정헤 놓은 목적지(board/write_proc.php)로 작성된 값들을 쏴줌
방식 : get, post

action = 목적지
method = 목적지로 갈 방법


- name 중요
키값 : title
value값 : 작성한 제목

키값 : ctnt
value값 : 작성한 내용

-> 글등록 누르는 순간 이 값들을 데리고 목적지로 post방식으로 날아간다~~~~~




- method 방식 ((((( 정리 필요 )))))

form 태그 쓰는 순간 웬만하면 post방식.

form 태그에 post 넣어줘야만 post방식. (글자 많이쓸수있음. 주로 비번 등 URL 창에 안나옴)
이외 모두 get 방식.
get
post 저장 수정.
방식 정리필요.





- 쿼리스트링(QeuryString) 파라미터
서버한테 값을 전달할 때 쓴다.
주로 get 방식일때



-->