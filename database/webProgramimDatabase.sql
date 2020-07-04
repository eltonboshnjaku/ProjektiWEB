create database ProjektiWeb

use ProjektiWeb

create table Useri
(
id int identity(1,1) primary key ,
username varchar(150) not null,
pw varchar(150) not null,
email varchar(150) not null,
role varchar(50) not null,
)
select * from Useri

create table course
(
id int identity(1,1) primary key,
courseName varchar(50) not null,
chapterNumber int not null,
title varchar(100) not null,
head varchar(300) not null,
body varchar(1000) not null,
photo varchar(150) not null,
)

select * from course