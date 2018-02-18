 服务器: localhost  -   数据库: data  -   表 : t1 "InnoDB free: 4096 kB"
 
-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主机: localhost
-- 生成日期: 2018 年 02 月 18 日 16:29
-- 服务器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 数据库: `data`
-- 

-- --------------------------------------------------------

-- 
-- 表的结构 `t1`
-- 

CREATE TABLE `t1` (
  `Id` int(4) NOT NULL auto_increment COMMENT '编号',
  `Name` varchar(20) NOT NULL COMMENT '姓名',
  `Pwd` varchar(20) NOT NULL COMMENT '密码',
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- 
-- 导出表中的数据 `t1`
-- 

INSERT INTO `t1` VALUES (1, '1', '111');
INSERT INTO `t1` VALUES (2, '2', '222');
INSERT INTO `t1` VALUES (3, '3', '333');
INSERT INTO `t1` VALUES (4, '4', '444');
INSERT INTO `t1` VALUES (6, '6', '66');
INSERT INTO `t1` VALUES (7, '7', '77');

