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
This repository contains a **Simple Library Information System** developed using Laravel 11 framework[cite: 1]. Built as part of the **Web Framework Programming** course (SYS61645), this project covers Laravel Environment Setup (Assignment 4) and basic MVC (Model-View-Controller) architecture implementation (Practical 5)[cite: 1].

---

## Features & Routes

The application implements standard MVC routing mapped to dedicated controllers and Blade views[cite: 1]:

| Route Path | Controller & Method | View File | Purpose |
| :--- | :--- | :--- | :--- |
| `/` | `Welcome View` | `resources/views/welcome.blade.php` | Landing Page |
| `/books` | `BookController@index` | `resources/views/books/index.blade.php` | Book List Display |
| `/categories` | `CategoryController@index` | `resources/views/categories/index.blade.php` | Category List Display |
| `/members` | `MemberController@index` | `resources/views/members/index.blade.php` | Member List Display |

---

## Requirements

The following software dependencies and environment components are required to run this project[cite: 1]:

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
├── app/
│   └── Http/
│       └── Controllers/
│           ├── BookController.php
│           ├── CategoryController.php
│           └── MemberController.php
├── bootstrap/        # Framework bootstrapping and autoload configuration
├── config/           # Application configuration files
├── database/         # Database migrations, seeders, and factories
├── public/           # Entry point (index.php) and front-end assets
├── resources/
│   └── views/        # Blade templates
│       ├── books/
│       │   └── index.blade.php
│       ├── categories/
│       │   └── index.blade.php
│       ├── members/
│       │   └── index.blade.php
│       └── welcome.blade.php
├── routes/
│   └── web.php       # Application route definitions
├── storage/          # Compiled templates, file sessions, and logs
├── .env              # Environment configuration settings
├── composer.json     # Project dependencies and metadata
└── README.md         # Project documentation
```

---

## Installation & Usage

Follow these steps to set up and run the project locally on your machine[cite: 1]:

### 1. Clone the repository
```bash
git clone [https://github.com/Andhyna/library-system.git](https://github.com/Andhyna/library-system.git)
cd library-system
```

### 2. Install dependencies
```bash
composer install
```

### 3. Environment configuration
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Configure database settings in `.env`
Ensure your database server is running, then update `.env`[cite: 1]:
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

Access the application in your browser:
- Main Page: `http://127.0.0.1:8000/`[cite: 1]
- Books Route: `http://127.0.0.1:8000/books`[cite: 1]
- Categories Route: `http://127.0.0.1:8000/categories`[cite: 1]
- Members Route: `http://127.0.0.1:8000/members`[cite: 1]

---

## Author

<div align="center">

**Demas Darrel Putra Andhyna**  
*5A Class — Information Systems Student*  
*Universitas Singaperbangsa Karawang*

</div>