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

## TFA3 Features

- Create customer accounts with validation
- Preserve entered form values after validation failure
- Edit existing customer accounts
- Create user accounts with unique username validation
- Edit existing user accounts
- Upload JPG and PNG avatars up to 2MB
- Prepare uploaded avatars as 300 × 300 images
- Display a placeholder for users without avatars

## Local Setup

1. Import `database/pos_system.sql` into MySQL.
2. Configure the database settings in `.env`.
3. Run `php spark serve --port 8081`.
4. Open `http://localhost:8081`.