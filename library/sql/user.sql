drop table if exists `user`;
create table if not exists `user`(
	`id` bigint(5) primary key auto_increment,
	`name` varchar(20) not null,
	`nickname` varchar(50),
	`height` int(3),
 	`weight` int(3)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;