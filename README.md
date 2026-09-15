# CodeIgniter POS System

A four-page Point-of-Sale website developed using CodeIgniter 4 and MySQL.

## Pages

- Landing Page
- About Page
- Customer Accounts
- User Accounts

## Requirements

- PHP 8.1 or newer
- MySQL or MariaDB
- PHP `intl` extension
- PHP `mysqli` extension
- CodeIgniter 4

## Database Setup

1. Create a MySQL database named `pos_system`.
2. Import `database/pos_system.sql` through phpMyAdmin.
3. Configure the database connection in `.env`.

Example local database configuration:

```ini
database.default.hostname = localhost
database.default.database = pos_system
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.DBPrefix =
database.default.port = 3306