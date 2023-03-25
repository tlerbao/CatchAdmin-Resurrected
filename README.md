# CatchAdmin:Resurrected (后端)

### 介绍 📖

本项目是 CatchAdmin 后端的重置版，原项目由 [JaguarJack](https://github.com/jaguarjack/) 开发，基于 ThinkPHP6 的后台管理系统。CatchAdmin 在 ThinkPHP 社区中是 Admin 类系统的佼佼者。

### 为什么要重置 ❓

1. CatchAdmin 作者已经停止更新 ThinkPHP 版,重心已经放在了 Laravel的版本上.
2. CatchAdmin 原版本前端是基于 Vue2 的 ElementAdmin,比较老旧了.
3. 想继续使用 ThinkPHP 版,而非 Laravel 版.

综上所述,就有了本项目,其实**主要就是换一套更先进的前端**,如果可能,还会对后端进行优化及升级.

### 重置了哪些内容 ❓

最主要目的是更换全套前端,使用更为先进的 [Geeker-Admin](https://github.com/HalseySpicy/Geeker-Admin) 作为前端支撑,后端所做的重置修改也是能够兼容新前端的最小化修改.

1. 数据表结构(migrate)和默认数据(seed)的修改
2. 新增了几个方法接口来兼容新前端获取权限菜单数据(待考量)
3. 邮箱登录改为用户名登录
4. 移除无用文件和几个半成品模块(如有需要可自行恢复)

PS:目前还没有对代码进行优化,单纯为了和新前端能够跑起来,一些新增的接口和方法还有待考量,后续还会继续优化.

### 安装使用步骤 📔

- **Clone：**
```shell
# GitHub
git clone https://github.com/tlerbao/CatchAdmin-Resurrected.git
```

- **Install：**

```shell
# 安装依赖
composer install --ignore-platform-reqs

# 安装后台, 按照提示输入对应信息即可
php think catch:install

# 启动后台
php think run
```





