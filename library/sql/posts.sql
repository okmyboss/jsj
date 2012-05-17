drop table if exists `posts`;
create table if not exists `posts`(
	`id` bigint(20) primary key auto_increment,
	`content` longtext 
);