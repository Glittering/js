#mysql

1. show 
    show database;
    show tables;

2. use name;    of table

3. create
    create database if not exists {} charset=utf-8 collate=rule_of_sort;  name
    create table if not exists user(
        id int(11) not null auto_increment primary key,
	username varchar(50) not null,
	password char(32) not null);

4. desc
    desc name;	the name belong to tables
    
5. alter
    alter {} {} add {} varchar() not null;    table  name   'new list'
    .......change {} {}...    old_name  new_name
    ....drop {};  name	  *delete list of name*
    ....rename {}; name   *change the name of table*

6. insert into admin(``,``) values('','')   add data
   insert into admin(``,``) values('a','a'),('b','b');
7. select   search
    select * from admin;
    select * from admin where id =1;
    select a.username as u from admin as a;
    select * from admin where if>2 order by id desc limit 2;
8. update admin set `username` = `new name` where id =2;  change
