---
title: 官方 Docker 镜像
sidebarDepth: 3
---

# 官方 Docker 镜像

Castopod 在其自动构建期间会将 3 个 Docker 映像推送到 Docker Hub ：

- [**`castopod/castopod`**](https://hub.docker.com/r/castopod/castopod)；一个使
  用 nginx 单元的整合 Castopod 镜像
- [**`castopod/app`**](https://hub.docker.com/r/castopod/app)：应用程序包，包含
  所有 Castopod 依赖关系
- [**`castopod/web-server`**](https://hub.docker.com/r/castopod/web-server)：Castopod
  的 Nginx 配置

此外，Castopod 需要一个与 MySQL 兼容的数据库。 Redis 数据库 可以添加为缓存处理器
。

## 目前支持的标签

- `develop` [unstable], 最新开发分支版本
- `beta` [stable]，最新的 beta 版本构建
- `latest` [stable]，最新版本构建
- `1.x.x` [stable]，特定版本构建（自 `1.0.0` 起）

## 用法示例：

1.  安装 [Docker](https://docs.docker.com/get-docker/) 和
    [docker-compose](https://docs.docker.com/compose/install/)
2.  创建 `docker-compose.yml` 文件，并添加以下内容：

    ```yml
    version: "3.7"

    services:
      app:
        image: castopod/castopod:latest
        container_name: "castopod-app"
        volumes:
          - castopod-media:/var/www/castopod/public/media
        environment:
          MYSQL_DATABASE: castopod
          MYSQL_USER: castopod
          MYSQL_PASSWORD: changeme
          CP_BASEURL: "https://castopod.example.com"
          CP_ANALYTICS_SALT: changeme
          CP_CACHE_HANDLER: redis
          CP_REDIS_HOST: redis
        networks:
          - castopod-app
          - castopod-db
        ports:
          - 8000:8000
        restart: unless-stopped

      mariadb:
        image: mariadb:10.5
        container_name: "castopod-mariadb"
        networks:
          - castopod-db
        volumes:
          - castopod-db:/var/lib/mysql
        environment:
          MYSQL_ROOT_PASSWORD: changeme
          MYSQL_DATABASE: castopod
          MYSQL_USER: castopod
          MYSQL_PASSWORD: changeme
        restart: unless-stopped

      redis:
        image: redis:7.0-alpine
        container_name: "castopod-redis"
        volumes:
          - castopod-cache:/data
        networks:
          - castopod-app

    volumes:
      castopod-media:
      castopod-db:
      castopod-cache:

    networks:
      castopod-app:
      castopod-db:
    ```

    你还需要调整一些变量。 （例如：`CP_BASEURL`， `MYSQL_ROOT_PASSWORD`，
    `MYSQL_PASSSWORD` 和 `CP_ANALYTICS_SALT`）

3.  设置 TLS 反向代理 (SSL/HTTPS)

    TLS 是 ActivePub 工作的强制性要求。 此操作可用通过反向代理轻松解决，例如使用
    [Caddy](https://caddyserver.com/) 处理：

    ```
    #castopod
    castopod.example.com {
        reverse_proxy localhost:8000
    }
    ```

4.  运行命令 `docker-compose up -d`， 等待初始化后跳转到
    `https://castopod.example.com/cp-install` 来完成 Castopod 的设置！

5.  一切准备就绪，开始博客吧！ 🎙️🚀

## 环境变量

- **castopod/castopod** 和 **castopod/app**

  | 变量名称                              | 类型 (`默认值`)         | Default          |
  | ------------------------------------- | ----------------------- | ---------------- |
  | **`CP_BASEURL`**                      | string                  | `undefined`      |
  | **`CP_MEDIA_BASEURL`**                | ?string                 | `CP_BASEURL`     |
  | **`CP_ADMIN_GATEWAY`**                | ?string                 | `"cp-admin"`     |
  | **`CP_AUTH_GATEWAY`**                 | ?string                 | `"cp-auth"`      |
  | **`CP_ANALYTICS_SALT`**               | string                  | `undefined`      |
  | **`CP_DATABASE_HOSTNAME`**            | ?string                 | `"mariadb"`      |
  | **`CP_DATABASE_NAME`**                | ?string                 | `MYSQL_DATABASE` |
  | **`CP_DATABASE_USERNAME`**            | ?string                 | `MYSQL_USER`     |
  | **`CP_DATABASE_PASSWORD`**            | ?string                 | `MYSQL_PASSWORD` |
  | **`CP_DATABASE_PREFIX`**              | ?string                 | `"cp_"`          |
  | **`CP_CACHE_HANDLER`**                | [`"file"` 或 `"redis"`] | `"file"`         |
  | **`CP_REDIS_HOST`**                   | ?string                 | `"localhost"`    |
  | **`CP_REDIS_PASSWORD`**               | ?string                 | `null`           |
  | **`CP_REDIS_PORT`**                   | ?number                 | `6379`           |
  | **`CP_REDIS_DATABASE`**               | ?number                 | `0`              |
  | **`CP_EMAIL_SMTP_HOST`**              | ?string                 | `undefined`      |
  | **`CP_EMAIL_FROM`**                   | ?string                 | `undefined`      |
  | **`CP_EMAIL_SMTP_USERNAME`**          | ?string                 | `"localhost"`    |
  | **`CP_EMAIL_SMTP_PASSWORD`**          | ?string                 | `null`           |
  | **`CP_EMAIL_SMTP_PORT`**              | ?number                 | `25`             |
  | **`CP_EMAIL_SMTP_CRYPTO`**            | [`"tls"` 或 `"ssl"`]    | `"tls"`          |
  | **`CP_ENABLE_2FA`**                   | ?boolean                | `undefined`      |
  | **`CP_MEDIA_FILE_MANAGER`**           | ?string                 | `undefined`      |
  | **`CP_MEDIA_S3_ENDPOINT`**            | ?string                 | `undefined`      |
  | **`CP_MEDIA_S3_KEY`**                 | ?string                 | `undefined`      |
  | **`CP_MEDIA_S3_SECRET`**              | ?string                 | `undefined`      |
  | **`CP_MEDIA_S3_REGION`**              | ?string                 | `undefined`      |
  | **`CP_MEDIA_S3_BUCKET`**              | ?string                 | `undefined`      |
  | **`CP_MEDIA_S3_PROTOCOL`**            | ?number                 | `undefined`      |
  | **`CP_MEDIA_S3_PATH_STYLE_ENDPOINT`** | ?boolean                | `undefined`      |
  | **`CP_MEDIA_S3_KEY_PREFIX`**          | ?string                 | `undefined`      |
  | **`CP_DISABLE_HTTPS`**                | ?[`0` or `1`]           | `undefined`      |
  | **`CP_MAX_BODY_SIZE`**                | ?number (with suffix)   | `512M`           |
  | **`CP_PHP_MEMORY_LIMIT`**             | ?number (with suffix)   | `512M`           |
  | **`CP_TIMEOUT`**                      | ?number                 | `900`            |

- **castopod/web-server**

  | 变量名称               | Type                  | Default |
  | ---------------------- | --------------------- | ------- |
  | **`CP_APP_HOSTNAME`**  | ?string               | `"app"` |
  | **`CP_MAX_BODY_SIZE`** | ?number (with suffix) | `512M`  |
  | **`CP_TIMEOUT`**       | ?number               | `900`   |
