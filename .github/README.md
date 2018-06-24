# flarum 论坛系统基于Laravel开发

## 环境与数据库信息

### 环境

虚拟主机: http://flarum.test

### 数据库

数据连接地址: mysql **不是localhost, 也不是 127.0.0.1**

账号: root 密码: root 库名: flarum

## 安装体验

[docker及docker-compose的安装](http://www.majianwei.com)

1. `docker-compose up -d nginx mysql workspace` 启用服务
2. `docker exec -it laradock_workspace_1 php /home/php-script/install.php`  tip: 安装提交慢, 耐心等待. 
3. `127.0.0.1 flarum.test` 配置本地hosts文件
4. 访问地址 http://flarum.test 根据要求填写信息 参考[环境与数据库信息]
