SET FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `snake_articles`;
CREATE TABLE `snake_articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '文章id',
  `title` varchar(155) NOT NULL COMMENT '文章标题',
  `description` varchar(255) NOT NULL COMMENT '文章描述',
  `keywords` varchar(155) NOT NULL COMMENT '文章关键字',
  `thumbnail` varchar(255) NOT NULL COMMENT '文章缩略图',
  `content` text NOT NULL COMMENT '文章内容',
  `add_time` datetime NOT NULL COMMENT '发布时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

insert into `snake_articles`(`id`,`title`,`description`,`keywords`,`thumbnail`,`content`,`add_time`) values('4','啊啊啊','阿萨德','萨达','/upload/20190428/8c406356294f221dc046b29950830287.jpg','<p>撒大声地</p>','2019-04-28 14:50:03');
