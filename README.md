<div align="center">

# Library System

> Simple Library Information System

[![Laravel](https://img.shields.io/badge/Laravel-11.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-MariaDB-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://mysql.com)
[![Composer](https://img.shields.io/badge/Composer-2.x-885630?style=for-the-badge&logo=composer&logoColor=white)](https://getcomposer.org)

---

</div>

## Description
Simple Library Information System[cite: 1]

---

## Requirements
- PHP[cite: 1]
- Composer[cite: 1]
- MySQL[cite: 1]
- Laravel[cite: 1]

---

## Installation

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
Demas Darrel Putra Andhyna  
5A Class  
Information Systems Student