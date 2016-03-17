# User Notifications System using CodeIgniter
A user login, logout, register & notifications system using Codeigniter 3

## Installation
1. Open /application/config/database.php and edit with your database settings
2. On your database, open a SQL terminal paste this and execute:

```sql

CREATE TABLE IF NOT EXISTS `users` (
    `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
    `name` varchar(255) DEFAULT NULL,
    `username` varchar(255) NOT NULL DEFAULT '',
    `email` varchar(255) NOT NULL DEFAULT '',
    `password` varchar(255) NOT NULL DEFAULT '',
    `avatar` varchar(255) DEFAULT 'default.jpg',
    `created_at` datetime NOT NULL,
    `updated_at` datetime DEFAULT NULL,
    `is_admin` tinyint(1) unsigned NOT NULL DEFAULT '0',
    `is_confirmed` tinyint(1) unsigned NOT NULL DEFAULT '0',
    `is_deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
    PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `ci_sessions` (
    `id` varchar(40) NOT NULL,
    `ip_address` varchar(45) NOT NULL,
    `timestamp` int(10) unsigned DEFAULT 0 NOT NULL,
    `data` blob NOT NULL,
    PRIMARY KEY (id),
    KEY `ci_sessions_timestamp` (`timestamp`)
);

CREATE TABLE IF NOT EXISTS `notifications` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `user_id` int(11) NOT NULL,
    `from` varchar(255) NOT NULL,
    `content` varchar(255) NOT NULL,
    `generated_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0 - Pending, 1 - Viewed',
    `viewed_on` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

```
Go to http://example.com/register and create a user (If url don't work then add index.php in the url)

## Usage
When you register a user & login to the system, you will see notifications
