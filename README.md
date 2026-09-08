<div align="center">

# Library System

> A modern, lightweight, and robust Library Information System built with Laravel.

[![Laravel](https://img.shields.io/badge/Laravel-11.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-MariaDB-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://mysql.com)
[![Composer](https://img.shields.io/badge/Composer-2.x-885630?style=for-the-badge&logo=composer&logoColor=white)](https://getcomposer.org)

</div>

---

## Description
This repository contains a **Simple Library Information System** developed using the Laravel framework. The project is designed to manage library operations efficiently while demonstrating standard Laravel MVC architecture, database migrations, and environment configuration for the **Web Framework Programming** course (Assignment 4 - Laravel Setup).

---

## Requirements

The following software dependencies and environment components are required to run this project:

| Technology | Minimum Version | Category |
| :--- | :--- | :--- |
| **PHP** | 8.2 or higher | Programming Language |
| **Composer** | 2.0 or higher | Dependency Manager |
| **MySQL / MariaDB** | 8.0+ / 10.4+ | Database Management System |
| **Laravel** | 11.x | PHP Web Framework |

---

## Directory Structure

```text
library-system/
├── app/              # Application logic (Models, Controllers, Providers)
├── bootstrap/        # Framework bootstrapping and autoload configuration
├── config/           # Application configuration files
├── database/         # Database migrations, seeders, and factories
├── public/           # Entry point (index.php) and front-end assets
├── resources/        # Views (Blade templates), CSS, and JS source files
├── routes/           # Application route definitions (web.php, console.php)
├── storage/          # Compiled templates, file sessions, and logs
├── .env              # Environment configuration settings
├── composer.json     # Project dependencies and metadata
└── README.md         # Project documentation