<div align="center">

  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" alt="Laravel Logo" width="200">
  </a>

  <h1>Dynamic Personal Portfolio</h1>

  <p>
    A robust, full-stack portfolio solution featuring a custom Admin Dashboard, dynamic content management, and a high-performance frontend. Built with <strong>Laravel 12</strong>, <strong>Breeze</strong>, and <strong>TailwindCSS</strong>.
  </p>

  <p>
    <a href="https://github.com/laravel/framework"><img src="https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel" alt="Laravel"></a>
    <a href="https://tailwindcss.com/"><img src="https://img.shields.io/badge/Tailwind_CSS-3.x-38B2AC?style=for-the-badge&logo=tailwind-css" alt="TailwindCSS"></a>
    <a href="https://php-flasher.io/"><img src="https://img.shields.io/badge/PHP_Flasher-v2.x-indigo?style=for-the-badge&logo=php" alt="PHP Flasher"></a>
  </p>

</div>

## 🚀 About The Project

This is an **educational practice project** developed to master the core fundamentals of **Laravel 12** and the **TALL stack**. It serves as a hands-on application where I followed professional workflows to build a functional portfolio system from scratch.

The primary goal of this repository is to showcase my ability to:

-   Implement complex CRUD operations.
-   Integrate third-party packages like **PHP Flasher**.
-   Customize Laravel's core configurations (Filesystems & Service Providers).
-   Bridge the gap between Front-end templates and Back-end logic.

---

## ✨ Key Features

### 🎨 Frontend (Public)

-   **Dynamic Resume:** Automatically generated Experience and Education timelines based on DB records.
-   **Project Showcase:** Grid view of projects with dynamic image uploads and external links.
-   **Print-Friendly Resume:** Custom CSS (`@media print`) implementation to hide navbars/footers, allowing visitors to save the page as a clean PDF resume directly from the browser.
-   **Responsive Design:** Fully mobile-responsive UI using TailwindCSS.

### ⚙️ Backend (Admin Dashboard)

-   **Secure Authentication:** Powered by Laravel Breeze (customized Profile management).
-   **Full CRUD Operations:** Manage Experience, Education, Skills, Projects, Languages, and Messages.
-   **Global Settings:** Dynamically update Site Name, Social Links (Facebook, GitHub, etc.) via a dedicated Settings module using `updateOrCreate` logic.
-   **In-App Messaging:** Contact form submissions are stored in the database AND emailed to the admin using `Mailables`.

---

## 🧠 Technical Highlights

This project implements several advanced concepts to ensure robust performance on Shared Hosting:

### 1. Custom File System Driver (No Symlinks) 📂

Instead of relying on the default storage link behavior (which often fails on shared hosting), a **Custom File System Disk** named `'custom'` was configured in `config/filesystems.php`.

-   **Why?** This gives direct control over the `uploads` directory within the `public` folder, ensuring seamless image serving without needing SSH access to run symlink commands.

### 2. User Feedback with PHP Flasher 🔔

Integrated **PHP Flasher** to provide professional, interactive toast notifications for all CRUD actions (Create, Update, Delete) instead of standard flash messages.

### 3. Global Data Sharing (View Composers) 🌐

Utilized the `AppServiceProvider` to implement `View::share` for the Settings table.

-   **Why?** This ensures that global settings (like Site Name and Social Links) are fetched once and injected into **all** Blade views automatically, preventing code repetition.

---

## 💻 Installation

Follow these steps to set up the project locally.

### Prerequisites

-   PHP 8.2 or higher
-   Composer
-   Node.js & NPM
-   **SQLite** (or MySQL)

### Steps

1. **Clone the Repository**

    ```bash
    git clone https://github.com/Eman-Hjazi/Personal.git
    cd Personal
    ```

2. **Install Backend Dependencies**

    ```bash
    composer install
    ```

3. **Install Frontend Dependencies**

    ```bash
    npm install && npm run build
    ```

4. **Environment Setup**

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

5. **Run Migrations & Seeder**
   This project includes a Seeder to create the initial Admin account.

    ```bash
    php artisan migrate --seed
    ```

    _(Note: This creates a default admin user)_.

6. **Serve the Application**
    ```bash
    php artisan serve
    ```

### 🔑 Default Admin Credentials

-   **Email:** `superadmin@example.com`
-   **Password:** `password`.

---

## ☁️ Deployment (Shared Hosting / cPanel)

The project is pre-configured for easy deployment on servers:

1.  **Build Assets:** Run `npm run build` locally to generate the `build` folder.
2.  **Prepare Files:** Compress the project files (excluding `node_modules` and `tests`).
3.  **Upload:** Upload to your `public_html` or subdomain folder via File Manager.
4.  **Public Redirection:** A custom `.htaccess` file is included to redirect traffic from the root to the `public` directory securely.

> **Important:** Ensure you delete the `hot` file inside the `public` folder if it exists before deployment.

---

<p align="center">
    <sub>Built with ❤️ using Laravel & TailwindCSS</sub>
</p>
