# docker-thinksns-plus

在不污染系统的前提下, 项目将官方安装的步骤简化使我们更快的体验到程序, 且可以调试项目. 

## thinksns-plus 信息

[github-thinksns-plus](https://github.com/slimkit/thinksns-plus), Plus (ThinkSNS Plus) 是一个使用 Laravel 开发，并且功能繁多且健壮的社交程序。

## 安装步骤

1. `git clone https://github.com/helloMJW/laradock` 克隆仓库到本地
2. `cd laradock  git checkout thinksns` 进入项目并切换分支
3. `docker-compose up -d nginx mysql workspace` 启动服务
4. `docker exec -it laradock_workspace_1 php /home/php-script/install.php` 创建数据库, 并下载项目到本地



### 参考资料

[安装文档](https://slimkit.github.io/docs/server-getting-started-installation.html)
