---
title: Staliañ
sidebarDepth: 3
---

# Penaos staliañ Castopod?

Castopod was thought-out to be easy to install. Whether using dedicated or
shared hosting, you can install it on most PHP-MySQL compatible web servers.

::: tip Note

We've released official Docker images for Castopod!

If you prefer using Docker, you may skip this and go straight to the
[docker documentation](./docker.md) for Castopod.

:::

## Requirements

- PHP v8.1 or higher
- MySQL version 5.7 or higher or MariaDB version 10.2 or higher
- HTTPS support
- An [ntp-synced clock](https://wiki.debian.org/NTP) to validate federation's
  incoming requests

### PHP v8.1 or higher

PHP version 8.1 or higher is required, with the following extensions installed:

- [intl](https://php.net/manual/en/intl.requirements.php)
- [libcurl](https://php.net/manual/en/curl.requirements.php)
- [mbstring](https://php.net/manual/en/mbstring.installation.php)
- [gd](https://www.php.net/manual/en/image.installation.php) with **JPEG**,
  **PNG** and **WEBP** libraries.
- [exif](https://www.php.net/manual/en/exif.installation.php)

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- xml (enabled by default - don't turn it off)
- [mysqlnd](https://php.net/manual/en/mysqlnd.install.php)

### MySQL compatible database

> We recommend using [MariaDB](https://mariadb.org).

::: warning Warning

Castopod only works with supported MySQL 5.7 or higher compatible databases. It
will break with the previous MySQL v5.6 for example as its end of life was on
February 5, 2021.

:::

You will need the server hostname, database name, username and password to
complete the installation process. If you do not have these, please contact your
server administrator.

#### Privileges

User must have at least these privileges on the database for Castopod to work:
`CREATE`, `ALTER`, `DELETE`, `EXECUTE`, `INDEX`, `INSERT`, `SELECT`, `UPDATE`,
`REFERENCES`, `CREATE VIEW`.

### (Optional) FFmpeg v4.1.8 or higher for Video Clips

[FFmpeg](https://www.ffmpeg.org/) version 4.1.8 or higher is required if you
want to generate Video Clips. The following extensions must be installed:

- **FreeType 2** library for
  [gd](https://www.php.net/manual/en/image.installation.php).

### (Optional) Other recommendations

- Redis for better cache performances.
- CDN for static files caching and better performances.
- e-mail gateway for lost passwords.

## Install instructions

### Pre-requisites

0. Get a Web Server with [requirements](#requirements) installed
1. Create a MySQL database for Castopod with a user having access and
   modification privileges (for more info, see
   [MySQL compatible database](#mysql-compatible-database)).
2. Activate HTTPS on your domain with an _SSL certificate_.
3. Download and unzip the latest [Castopod Package](https://castopod.org/) onto
   the web server if you haven’t already.
   - ⚠️ Set the web server document root to the `public/` sub-folder within the
     `castopod` folder.
4. Add **cron tasks** on your web server for various background processes
   (replace the paths accordingly):

   ```bash
      * * * * * /path/to/php /path/to/castopod/spark tasks:run >> /dev/null 2>&1
   ```

   **Note** - If you do not add this cron task, the following Castopod features
   will not work:

   - Importing a podcast from an existing RSS feed
   - Broadcasting social activities to your followers in the fediverse
   - Broadcasting episodes to open hubs using
     [WebSub](https://en.wikipedia.org/wiki/WebSub)
   - Generating video clips -
     [requires FFmpeg](#optional-ffmpeg-v418-or-higher-for-video-clips)

### (recommended) Install Wizard

1. Run the Castopod install script by going to the install wizard page
   (`https://your_domain_name.com/cp-install`) in your favorite web browser.
2. Follow the instructions on your screen.
3. Start podcasting!

::: info Note

The install script writes a `.env` file in the package root. If you cannot go
through the install wizard, you can create and edit the `.env` file manually
based on the `.env.example` file.

:::

### Using CLI

1. Create a `.env` file in the package root based on the `.env.example` file.
2. Initialize the database using:

   ```sh
   php spark install:init-database
   ```

3. Create the superadmin user using:

   ```sh
   php spark install:create-superadmin
   ```

4. Head on to your admin gateway to start podcasting!

### Email/SMTP setup

Email configuration is required for some features to work properly (eg.
retrieving your forgotten password, sending instructions to premium subscribers,
…)

You may add your email configuration in your instance's `.env` like so:

```ini
# […]

email.fromEmail="your_email_address"
email.SMTPHost="your_smtp_host"
email.SMTPUser="your_smtp_user"
email.SMTPPass="your_smtp_password"
```

#### Email config options

| Variable name    | Type                 | Default      |
| ---------------- | -------------------- | ------------ |
| **`fromEmail`**  | string               | `undefined`  |
| **`fromName`**   | string               | `"Castopod"` |
| **`SMTPHost`**   | string               | `undefined`  |
| **`SMTPUser`**   | string               | `undefined`  |
| **`SMTPPass`**   | string               | `undefined`  |
| **`SMTPPort`**   | number               | `25`         |
| **`SMTPCrypto`** | [`"tls"` or `"ssl"`] | `"tls"`      |

### Media storage

By default, files are saved to the `public/media` folder using the file system.
If you need to relocate the `media` folder to a different location, you can
specify it in your `.env` file as shown below:

```ini
# […]

media.root="media"
media.storage="/mnt/storage"
```

In this example, the files will be saved to the /mnt/storage/media folder. Make
sure to also update your web server configuration to reflect this change.

### S3

If you prefer storing your media files on an S3 compatible storage, you may
specify it in your `.env`:

```ini
# […]

media.fileManager="s3"
media.s3.endpoint="your_s3_host"
media.s3.key="your_s3_key"
media.s3.secret="your_s3_secret"
media.s3.region="your_s3_region"
```

#### S3 config options

| Variable name           | Type    | Default     |
| ----------------------- | ------- | ----------- |
| **`endpoint`**          | string  | `undefined` |
| **`key`**               | string  | `undefined` |
| **`secret`**            | string  | `undefined` |
| **`region`**            | string  | `undefined` |
| **`bucket`**            | string  | `castopod`  |
| **`protocol`**          | number  | `undefined` |
| **`pathStyleEndpoint`** | boolean | `false`     |
| **`keyPrefix`**         | string  | `undefined` |

## Community packages

If you don't want to bother with installing Castopod manually, you may use one
of the packages created and maintained by the open-source community.

### Install with YunoHost

[YunoHost](https://yunohost.org/) is a distribution based on Debian GNU/Linux
made up of free and open-source software packages. It manages the hardships of
self-hosting for you.

<div class="flex flex-wrap items-center gap-4">

<a href="https://install-app.yunohost.org/?app=castopod" target="_blank" rel="noopener noreferrer">
   <img src="https://install-app.yunohost.org/install-with-yunohost.svg" alt="Install Castopod with YunoHost" class="align-middle" />
</a>

<a href="https://github.com/YunoHost-Apps/castopod_ynh" target="_blank" rel="noopener noreferrer" class="inline-flex items-center px-4 py-[.3rem] mx-auto font-semibold text-center text-black rounded-md gap-x-1 border-2 border-solid border-[#333] hover:no-underline hover:bg-gray-100"><svg
   xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em" height="1em"
   class="text-xl"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 2A10 10 0 0 0 2 12a10 10 0 0 0 6.84 9.49c.5.09.69-.21.69-.48l-.02-1.86c-2.51.46-3.16-.61-3.36-1.18-.11-.28-.6-1.17-1.02-1.4-.35-.2-.85-.66-.02-.67.79-.01 1.35.72 1.54 1.02.9 1.52 2.34 1.1 2.91.83a2.1 2.1 0 0 1 .64-1.34c-2.22-.25-4.55-1.11-4.55-4.94A3.9 3.9 0 0 1 6.68 8.8a3.6 3.6 0 0 1 .1-2.65s.83-.27 2.75 1.02a9.28 9.28 0 0 1 2.5-.34c.85 0 1.7.12 2.5.34 1.9-1.3 2.75-1.02 2.75-1.02.54 1.37.2 2.4.1 2.65.63.7 1.02 1.58 1.02 2.68 0 3.84-2.34 4.7-4.56 4.94.36.31.67.91.67 1.85l-.01 2.75c0 .26.19.58.69.48A10.02 10.02 0 0 0 22 12 10 10 0 0 0 12 2z"/></svg>Github
Repo</a>

</div>
