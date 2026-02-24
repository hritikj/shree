#!/bin/bash

# ===== CONFIGURATION =====
DB_NAME="shree"
DB_USER="myuser"
DB_PASS="mypassword"
SQL_PATH="/var/www/html/shree.sql"

# ===== CREATE DATABASE AND USER =====
sudo mysql <<MYSQL_SCRIPT
CREATE DATABASE IF NOT EXISTS \`${DB_NAME}\`;
CREATE USER IF NOT EXISTS '${DB_USER}'@'localhost' IDENTIFIED WITH mysql_native_password BY '${DB_PASS}';
GRANT ALL PRIVILEGES ON \`${DB_NAME}\`.* TO '${DB_USER}'@'localhost';
FLUSH PRIVILEGES;
MYSQL_SCRIPT

mysql -u "$DB_USER" -p"$DB_PASS" "$DB_NAME" < "$SQL_PATH"

echo "Database creation and import completed successfully."
