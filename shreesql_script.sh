#!/bin/bash

#Run MySQL
sudo mysql

#Create Database, user and provide all privileges
CREATE DATABASE shree;
CREATE USER 'myuser'@'localhost' IDENTIFIED BY 'mypassword';
GRANT ALL PRIVILEGES ON mydatabase.* TO 'myuser'@'localhost';
FLUSH PRIVILEGES;
EXIT;