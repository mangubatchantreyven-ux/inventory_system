# 📦 Inventory Management System (BULUBALDA)

A modern, web-based inventory tracking application built with **Laravel 11** and **Bootstrap 5**. This system is designed to provide a clean and organized interface for both administrators and clients to manage and view stock levels in real-time.

## 🚀 Features

- **MVC Architecture**: Clean code separation using Laravel's Model-View-Controller pattern.
- **Admin Dashboard**: Comprehensive overview of total products, stock value, and system management.
- **Client Portal**: Simplified view for users to check item availability and status.
- **Responsive Design**: Fully compatible with mobile and desktop views using Bootstrap.
- **Blade Templating**: Efficient UI management using Master Layouts to prevent code duplication.

## 🛠️ Tech Stack

- **Framework:** Laravel 11
- **Language:** PHP 8.2+
- **Frontend:** Blade, Bootstrap 5, CSS3
- **Tools:** VS Code, Git Bash, Composer

## 📁 Project Structure

This project follows the standard Laravel directory structure, specifically organized for this system:

* `app/Http/Controllers/`: Contains `AdminController` and `ClientController` for handling logic.
* `resources/views/`: Contains the UI, separated into `admin`, `client`, and `auth` folders.
* `routes/web.php`: Defines the URL entry points for the application.

## 📥 Installation & Setup

Follow these steps to run the project locally on your machine:

1. **Clone the repository:**
   ```bash
   git clone [https://github.com/your-username/inventory_system.git](https://github.com/your-username/inventory_system.git)
   cd inventory_system