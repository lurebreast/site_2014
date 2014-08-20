CREATE TABLE `users` (
  `user_id` int unsigned NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `username` varchar(32) DEFAULT '' COMMENT '用户名',
  `password` varchar(32) COMMENT '用户密码',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户数据表';

insert into users(username, password) values('lurebreast', 'Mm122333')