<div align="center">

# Library System

> A lightweight Library Information System built with Laravel and Blade.

[![Laravel](https://img.shields.io/badge/Laravel-11.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![Blade](https://img.shields.io/badge/Blade-Templating-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com/docs/blade)
[![Composer](https://img.shields.io/badge/Composer-2.x-885630?style=for-the-badge&logo=composer&logoColor=white)](https://getcomposer.org)

---

</div>

## Description

This repository contains a simple Library Information System developed with the Laravel framework. It is part of the Web Framework Programming course (SYS61645) and covers Laravel environment setup, basic MVC architecture, and Blade templating with a shared master layout.

At the Pertemuan 6 stage the application relies entirely on dummy array data inside the controllers. No database, migration, or model is used yet.

---

## Features and Routes

All routes use the array syntax `[ControllerClass::class, 'method']` and are paired with Blade views.

| Route Path | Controller and Method | View File | Purpose |
| :--- | :--- | :--- | :--- |
| `/` | Welcome View | `resources/views/welcome.blade.php` | Landing page |
| `/dashboard` | `DashboardController@index` | `resources/views/dashboard/index.blade.php` | App title, description, dummy statistics |
| `/books` | `BookController@index` | `resources/views/books/index.blade.php` | Book list with stock status |
| `/books/{id}` | `BookController@show` | `resources/views/books/show.blade.php` | Book detail by id |
| `/categories` | `CategoryController@index` | `resources/views/categories/index.blade.php` | Category list |
| `/members` | `MemberController@index` | `resources/views/members/index.blade.php` | Member list |

The book list uses `@foreach` to render each row and `@if` / `@else` to mark availability based on the stock value. A book is shown as available when stock is greater than zero and as out of stock otherwise.

---

## Data Source

Every list is served from a dummy array defined directly in the controller. The fields are:

| Entity | Fields |
| :--- | :--- |
| Books | id, judul, penulis, tahun_terbit, stok |
| Categories | id, nama, deskripsi |
| Members | id, nama, email, no_hp |

---

## Requirements

| Technology | Minimum Version | Category |
| :--- | :--- | :--- |
| PHP | 8.2 or higher | Programming Language |
| Composer | 2.0 or higher | Dependency Manager |
| Laravel | 11.x | PHP Web Framework |

A database server is not required for this stage.

---

## Directory Structure

```text
library-system/
├── app/
│   └── Http/
│       └── Controllers/
│           ├── DashboardController.php
│           ├── BookController.php
│           ├── CategoryController.php
│           └── MemberController.php
├── bootstrap/        # Framework bootstrapping and autoload configuration
├── config/           # Application configuration files
├── public/           # Entry point (index.php) and front-end assets
├── resources/
│   └── views/        # Blade templates
│       ├── layouts/
│       │   └── app.blade.php
│       ├── dashboard/
│       │   └── index.blade.php
│       ├── books/
│       │   ├── index.blade.php
│       │   └── show.blade.php
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

The master layout at `resources/views/layouts/app.blade.php` provides the shared `<header>`, `<nav>`, `<main>`, and `<footer>` elements along with the `@yield('title')` and `@yield('content')` placeholders. The navigation links point to `/dashboard`, `/books`, `/categories`, and `/members`.

---

## Installation and Usage

### 1. Clone the repository

```bash
git clone https://github.com/Andhyna/library-system.git
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

### 4. Start the local development server

```bash
php artisan serve
```

Open the application in your browser:

- Main page: `http://127.0.0.1:8000/`
- Dashboard: `http://127.0.0.1:8000/dashboard`
- Books: `http://127.0.0.1:8000/books`
- Book detail: `http://127.0.0.1:8000/books/1`
- Categories: `http://127.0.0.1:8000/categories`
- Members: `http://127.0.0.1:8000/members`

---

## Author

<div align="center">

**Demas Darrel Putra Andhyna**

5A Class, Information Systems Student

Universitas Singaperbangsa Karawang

</div>
