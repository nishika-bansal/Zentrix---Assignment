# Laravel Assignment

## Overview
This project is a Laravel application developed as part of the assignment. It includes a working login page, a Selenium automation script, and an integrated HTML calendar template.

---

## Tasks Completed

### Task 1 – Laravel Project Setup
- Set up the Laravel project on a local environment.
- Imported the database from `db/db.sql`.
- Configured the application and verified the login page.

**Login URL**
```
http://127.0.0.1:8000/login
```

---

### Task 2 – Selenium Automation
Created a Python Selenium script to:

- Open the Laravel login page.
- Fill the email and password fields with random values.
- Close the browser automatically.

**Script**
```
selenium_login.py
```

---

### Task 3 – HTML Template Integration
Integrated the calendar HTML template into the Laravel project.

**Route Added**
```
/html-page
```

**Calendar URL**
```
http://127.0.0.1:8000/html-page
```

---

## Technologies Used

- Laravel 10
- PHP 8.3
- MySQL
- Python 3
- Selenium
- HTML, CSS, JavaScript

---

## Project Structure

```
app/
bootstrap/
config/
database/
db/
public/
resources/
routes/
storage/
tests/
selenium_login.py
README.md
```

---

## Installation

Clone or extract the project and install the dependencies.

```bash
composer install
```

Copy the environment file.

```bash
cp .env.example .env
```

Generate the application key.

```bash
php artisan key:generate
```

Import the database.

```
db/db.sql
```

Start the Laravel development server.

```bash
php artisan serve
```

Open the project in your browser.

```
Login Page:
http://127.0.0.1:8000/login

Calendar Page:
http://127.0.0.1:8000/html-page
```

---
