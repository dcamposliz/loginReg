TUTORIAL

Login And Registration System With PHP

https://daveismyname.com/login-and-registration-system-with-php-bp

___


Install From Download Github

 - Go to https://github.com/daveismynamecom/loginregister

 - Download the files

 - import db.sql into your database
 	i don't know how to import db.sql into database

 - Open includes/config.php and add database details

 ___

 we are using MySQL PDO (PHP data objects)






____

MORE RESOURCES


 - A BASIC MYSQL TUTORIAL - https://www.digitalocean.com/community/tutorials/a-basic-mysql-tutorial

 - MYSQL UBUNTU GUIDE - https://help.ubuntu.com/12.04/serverguide/mysql.html

 - SQL WIKI - https://en.wikipedia.org/wiki/SQL

 - POD DOCUMENTATION: http://php.net/manual/en/book.pdo.php

 - PHP & PDO/MySQL - PHP Data Objects - https://www.youtube.com/watch?v=RA-klM5kGn8&list=PLyKBLKYqadGmD33SGjyk_MXrGAHVTVcqa

 - PHP + MySQL Tutorial: https://www.siteground.com/tutorials/php-mysql/php.htm

 - PHP + MySQL w3 - http://www.w3schools.com/php/php_mysql_connect.asp

 - MYSQL - adding new mySQL user & permissions

	----

	start MySQL

	mysql -u username -p

	----

	How to import an SQL file using the command line in MySQL?

	mysql -u username -p database_name < file.sql

	----

	SHOW ALL DATABASE USERS:

	SELECT User FROM mysql.user;

	----

	CREATE DATABASE

	mysql> CREATE DATABASE databaseName;

	----

	DELETE DATABASE

	mysql> DROP DATABASE tutorial_database;

	----


we were able to connect the php to the database, as well as creating a new registered user, except, I do not know how to validate (via email) the new user. email functionality isn't working as it is not setup.

someone suggested on the tutorial to use php's native functionality - let's see what that is about

__

currently back to index.php on loginReg :)

__

read the notes for everything up to the end of index.php




