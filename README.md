PrivateMessaging
================

# Note
This module is currently under heavy development.

## Introduction

A Zend Framework 2 module based on ZfcUser which enables private messaging between users.

## Installation

### Using composer
1. Add `stijnhau/private-messaging` (version `dev-master`) to requirements
2. Run `update` command on composer
3. enable it in your `application.config.php` file.
4. Add the mysql.sql file to your database
5. Add the rest oif the data folder to your data folder
   
### Manually
1. Clone this project into your `./vendor/` directory and enable it in your
   `application.config.php` file.
2. Add the mysql.sql file to your database
3. Add the rest oif the data folder to your data folder

### Requires

1. PHP >= 5.4.0
2. ZfcUser >= 1.0.0

## Features
1. Sending messages to multiple persons.
2. Adjustable amount of messages in inbox and outbox(module based)
3. Removing messages from inbox.[WIP]
4. Removing messages from outbox.[WIP]
5. Show message time of time-ago.
6. Option to enable or disable menu (\Zend\Navigation).
7. Configurable login route.
8. Replylink inside message[todo]
9. Multiple pages(usage of use \Zend\Paginator)
10. Starred or not[todo]
11. Important or not[todo]
12. Multilanguage [WIP]
13. Unread messages in bold.
14. Configuration if newest or oldest message is first in lists.

# Thanks
Special thanks goes to https://github.com/hrevert/HtMessaging
This module is forked from there because https://github.com/hrevert/HtMessaging decided to go an other way.