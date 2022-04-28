create database board1;

USE board1;

create table t_board ( 
	i_board int unsigned primary key auto_increment, 
	title varchar(200) not null, 
	ctnt varchar(3000) not null, 
	create_at datetime default now()
);

SELECT * FROM t_board;

ALTER TABLE t_board ADD mod_at DATETIME DEFAULT NOW();

/*
board 만들때 쿼리
*/