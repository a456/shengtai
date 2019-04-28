SET FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `snake_article_list`;
CREATE TABLE `snake_article_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '车间展示',
  `title` varchar(50) DEFAULT NULL COMMENT '标题',
  `alt` varchar(255) DEFAULT NULL COMMENT '关键字',
  `edit_time` int(10) DEFAULT '0' COMMENT '编辑时间',
  `url` varchar(100) DEFAULT NULL COMMENT '图片',
  `content` tinyint(1) DEFAULT '1' COMMENT '是否开启',
  `type` tinyint(2) DEFAULT '1' COMMENT '1二手回收,2车间展示',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

