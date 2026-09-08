<div align="center">

# Library System

> A modern, lightweight, and robust Library Information System built with Laravel.

[![Laravel](https://img.shields.io/badge/Laravel-11.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-MariaDB-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://mysql.com)
[![Composer](https://img.shields.io/badge/Composer-2.x-885630?style=for-the-badge&logo=composer&logoColor=white)](https://getcomposer.org)

---

</div>

## Description
Simple Library Information System built with Laravel Framework for Assignment 4 (Laravel Setup)[cite: 1].

---

## Requirements

The following dependencies are required to run this project[cite: 1]:

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
```

---

## Installation

Follow these steps to set up and run the project locally:

### 1. Clone the repository
```bash
git clone [https://github.com/Andhyna/library-system.git](https://github.com/Andhyna/library-system.git)
cd library-system
```

### 2. Install PHP dependencies
```bash
composer install
```

### 3. Environment configuration
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Configure database settings in `.env`
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=library_system
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Run database migrations
```bash
php artisan migrate
```

### 6. Start local development server
```bash
php artisan serve
```

---

## Author

<div align="center">

**Demas Darrel Putra Andhyna**  
*5A Class — Information Systems Student*  
*Universitas Singaperbangsa Karawang*

</div>