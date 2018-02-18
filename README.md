# use what?
	php
	mysql
	bootstrap

# impression drawing
![Image text](imgs/impression.png)

# Operating environment
	The AppServ Open Project - 2.5.10 for Windows
	AppServ is a merging open source software installer package for Windows includes : 

		Apache Web Server Version 2.2.8
		PHP Script Language Version 5.2.6
		MySQL Database Version 5.0.51b
		phpMyAdmin Database Manager Version 2.10.3

# database info(db.sql)
	服务器: localhost  -   数据库: data  -   表 : t1 "InnoDB free: 4096 kB"

# database config(config.inc.php)
	连接
	字符集
	默认结果集
	默认报错方式

# main content
	CRUD of users information
	show pages

# directory structure
	index.php -- 首页 查询结果页 含分页
	act.php   -- 处理页面 增删改所触发的操作
	add.php   -- 添加用户过渡页 填写新增信息
	update.php-- 更新用户过渡页 更新用户信息
	db.sql    -- 分离出来的数据表信息

