SET FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `snake_carousel_map`;
CREATE TABLE `snake_carousel_map` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `title` varchar(50) DEFAULT NULL COMMENT '轮播图标题',
  `url` varchar(100) DEFAULT NULL COMMENT '图片地址',
  `status` tinyint(1) DEFAULT '1' COMMENT '是否开启',
  `sort` int(3) DEFAULT NULL COMMENT '排序',
  `alt` varchar(50) DEFAULT NULL COMMENT '别名',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

insert into `snake_carousel_map`(`id`,`title`,`url`,`status`,`sort`,`alt`) values('5','啊实打实多','/upload/20190428/692034b9ff84943b4c1f3549b96fad97.jpg','1','1','阿萨德啊');
