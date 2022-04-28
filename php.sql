create database board1;

USE board1;

create table t_board ( 
	i_board int unsigned primary key auto_increment, 
	title varchar(200) not null, 
	ctnt varchar(3000) not NULL, 
	create_at datetime default now()
);

SELECT * FROM t_board;

ALTER TABLE t_board ADD mod_at DATETIME DEFAULT NOW();

/*
board 만들때 쿼리
*/

DROP TABLE t_user;

DROP TABLE t_board;

ALTER TABLE t_user CHANGE upw upw VARCHAR(40);

ALTER TABLE t_user CHANGE upw upw VARCHAR(30);

-- modify : 타입 변경
-- change : 컬럼명,타입 변경

CREATE TABLE t_user(
	i_user INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, -- UNSIGNED 음수x
	uid VARCHAR(20) UNIQUE NOT NULL, -- 속도를 생각해서 문자열에 pk 잘 안주심(쌤님)
	upw VARCHAR(30) NOT NULL,
	nm VARCHAR(5) NOT NULL,
	gender INT UNSIGNED NOT NULL CHECK(gender IN (0, 1)), -- 체크속성 2개의값만 입력되도록 설정
	created_at DATETIME DEFAULT CURRENT_TIMESTAMP, -- 가입일자
	updated_at DATETIME DEFAULT CURRENT_TIMESTAMP -- 수정일자(비번)
);

SELECT * FROM t_user;

/*
-PK
unique, not null, index
index 이유 select 속도때문에! 자료를 순서대로 정렬, 찾을때 빨리 찾아짐
index 안걸려있으면 100% 전수조사(전부 조사 속도 엄청 느려짐)

- AUTO_INCREMENT
정수형일때만 들어감. 문자열일때x

- CHAR(20) 길이제한. 20자이상 적을 수 없음. 공간을 고정되게씀. 1자를 써도 20을 씀.
VARCHAR(20) 1자쓰면 공간 1자크기만큼만 할당. 유동적으로 공간할당.

전화번호, 주민등록번호, 생일 등 고정된글 CHAR쓰는게 나음 = 속도가 빠름

- DB 잘못된 값 들어가지 않도록!
check : 오로지 0, 1만 들어가도록 셋팅한것
*/

CREATE TABLE t_board(
	i_board INT UNSIGNED AUTO_INCREMENT,
	PRIMARY KEY(i_board),
	title VARCHAR(100) NOT NULL,
	ctnt VARCHAR(2000) NOT NULL,
	i_user INT UNSIGNED NOT NULL, -- 작성자! writer 해도됨 취향차이
	created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT CURRENT_TIMESTAMP,
	FOREIGN KEY (i_user) REFERENCES t_user(i_user)
);

/*
- FK 거는 이유
외부 데이터를 참조해서 (컬럼)
이상한 값이 들어가는 걸 방지하려고

fk 걸려있는데 fk값이 없어서 insert 안됨(i-user)

-노랑 열쇠 : pk
빨강 열쇠 : unique

not null : 빈칸일 수 없다
*/