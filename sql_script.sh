#!/bin/bash
#Create Database, user and provide all privileges
DB_NAME="shree"
DB_USER="myuser"
DB_PASS="mypassword"
sudo mysql <<DB_SCRIPT
CREATE DATABASE $DB_NAME;
CREATE USER '$DB_USER'@'localhost' IDENTIFIED BY '$DB_PASS';
GRANT ALL PRIVILEGES ON $DB_NAME.* TO '$DB_USER'@'localhost';
FLUSH PRIVILEGES;

DB_SCRIPT
echo "Success"
