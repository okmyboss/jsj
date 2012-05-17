drop table if exists `category`;
create table if not exists `category`(
	`id` bigint(20) primary key auto_increment,
	`fatherId` bigint(20) not null default 0,
	`name` varchar(100) not null,
	`description` longtext
)ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;