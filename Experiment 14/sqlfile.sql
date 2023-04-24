
create table Gun_Shop(Sno int,Name varchar(50),Description varchar(100),Type varchar(50),price float,Stock int);

insert into Gun_Shop values (101,'SMG - 11','Hole the Skins of your Enemy before they Rise.','Sub-Machine Gun',1200,71);

select * from Gun_Shop;

insert into Gun_Shop values (102,'AR - CL','Send them, Send them all to Hell with your Shots.','Assault Rifle',2400,37);

drop table gun_shop;
