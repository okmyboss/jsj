DROP TABLE IF EXISTS `navigete`;
create table if not exists `navigete`(
	`id` bigint(20) primary key auto_increment,
	`name` varchar(200) not null,
	`link` varchar(200) default '?',
	`target` varchar(20) default '_blank',
	`order` bigint(20)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;