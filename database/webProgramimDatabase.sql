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