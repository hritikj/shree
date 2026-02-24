#!/bin/bash
#Create Database, user and provide all privileges
DB_NAME="shree"
DB_USER="myuser"
DB_PASS="mypassword"
SQL_PATH="/var/www/html/shree.sql"
sudo mysql <<DB_SCRIPT
CREATE DATABASE $DB_NAME;
CREATE USER '$DB_USER'@'localhost' IDENTIFIED BY '$DB_PASS';
GRANT ALL PRIVILEGES ON $DB_NAME.* TO '$DB_USER'@'localhost';
FLUSH PRIVILEGES;

mysql -u $DB_USER -p $DB_PASS $DB_NAME < $SQL_PATH

DB_SCRIPT
echo "Success"
