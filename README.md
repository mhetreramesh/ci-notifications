# User Notifications System

```sh
 * Introduction
 * Requirements
 * Installation
 * Usage
 * Maintainers
 ```
 INTRODUCTION
------------
This project contains an user login, logout, register & notifications system using Codeigniter 3.  This is uses PSR-4 autoloader.

 * For live demo of the project, visit the link:
   http://52.89.235.194/ci-notifications/index.php/login

REQUIREMENTS
------------

This project requires following tools:

 * php - 5.4.* (http://php.net/)
 * MySQL - 5.5.* (https://www.mysql.com/)
 * Codeigniter Framework - 3.0.5 (https://www.codeigniter.com/)

INSTALLATION
------------
1. Open /application/config/database.php and edit with your database settings
2. Open /application/config/config.php (Change neccessary settings if required, by default nothing required to change)
3. In your database, open a SQL terminal paste this and execute:

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

USAGE
------------
* Register a new user 
* Login using new user 
* Once login you will see auto generated notifications on the upper right corner
* When click on any specific notification it will mark as read automatically & removed from the list
* User can mark all notifications as read in single click
* User can generate new notification using generate notifications button. (This will create random notifications'

MAINTAINERS
------------
Current mainttainer:
* Ramesh M - https://github.com/mhetreramesh
