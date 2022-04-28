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
*/