show database;
create database if not exists name charset=utf-8 collate = 排序规则;
use name;
show tables;

create table if not exists user(
id int(11) not null auto_increment primary key,
username varchar(50) not null			varchar and char
password char(32) not null);

desc user---表名;

alter table user add email varchar(120) not null;				

alter table user change email new name...;

alter table user drop name;	delete

alter table user rename admin;	change name of table

inset into admin(`username`,`password`) values('','');		use above esc ``

select * from admin;

delete form admin where id = 1;

selsect a.username as u from admin a;

update admin set `username` = 'new name' where id = 2;

insert into admin(``,``) values ('a','a'),('b','b');

select * from admin where id >2 order by id desc limit 2;

show  database;

