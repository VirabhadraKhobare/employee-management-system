
# Employee Management System

A simple and user-friendly web-based **Employee Management System** developed using PHP, MySQL, HTML, CSS, JavaScript, and AJAX. This application helps manage employee records efficiently by providing functionality to add, view, update, and delete employee information.

## 🚀 Project Overview

The Employee Management System is designed to simplify employee record management. It provides an easy-to-use interface where users can manage employee information without manually handling database operations.

The application uses AJAX to perform operations dynamically, reducing unnecessary page reloads and improving the overall user experience.

## 🛠️ Technologies Used

- **Frontend:** HTML5, CSS3, JavaScript
- **Backend:** PHP
- **Database:** MySQL
- **AJAX:** Asynchronous data handling
- **Local Server:** XAMPP
- **Database Management:** phpMyAdmin

## ✨ Features

- **Add Employee:** Add new employee details to the database.
- **View Employees:** Display all available employee records.
- **Update Employee:** Edit and update existing employee information.
- **Delete Employee:** Remove employee records from the database.
- **AJAX Functionality:** Perform operations without refreshing the entire page.
- **Database Integration:** Store and retrieve employee information using MySQL.
- **Simple UI:** Clean and user-friendly interface.

## 📂 Project Structure

```text
employee-management-system/
│
├── ajax.php          # Handles AJAX requests
├── database.sql      # MySQL database structure
├── db.php            # Database connection configuration
├── index.php         # Main application page
├── script.js         # JavaScript and AJAX functionality
├── style.css         # Application styling
└── README.md         # Project documentation
```

## ⚙️ Installation and Setup

Follow these steps to run the project on your local machine.

### 1. Install XAMPP

Download and install XAMPP from the official website:

[Download XAMPP](https://www.apachefriends.org/)

### 2. Clone the Repository

Open your terminal or command prompt and execute:

```bash
git clone https://github.com/YOUR-USERNAME/employee-management-system.git
```

Alternatively, download the repository as a ZIP file.

### 3. Move the Project Folder

Copy the project folder into the XAMPP `htdocs` directory:

```text
C:/xampp/htdocs/employee-management-system/
```

### 4. Start XAMPP Services

Open the XAMPP Control Panel and start the following services:

- Apache
- MySQL

### 5. Create and Import the Database

1. Open your browser.
2. Navigate to [http://localhost/phpmyadmin/](http://localhost/phpmyadmin/).
3. Create a new database named:

```sql
employee_management
```

4. Select the newly created database.
5. Click on the **Import** option.
6. Choose the `database.sql` file from your project folder.
7. Click **Import** or **Go** to execute the SQL file.

### 6. Configure Database Connection

Open `db.php` and configure your database credentials according to your local environment.

**Example:**

```php
<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "employee_management"
);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

?>
```

### 7. Run the Application

Open your browser and visit:

```text
http://localhost/employee-management-system/
```

Your Employee Management System is now ready to use!

## 🗄️ Database Configuration

| Configuration    | Value                 |
| ---------------- | --------------------- |
| Database Name    | employee_management   |
| Database Type    | MySQL                 |
| Database Server  | localhost             |
| Default Username | root                  |
| Default Password | Empty (XAMPP default) |

**Note:** Database credentials may differ depending on your local or hosting environment.

## 🔄 Application Workflow

1. User opens the Employee Management System.
2. Employee records are retrieved from the MySQL database.
3. User can add new employee information.
4. User can update existing employee records.
5. User can delete unwanted employee records.
6. AJAX handles supported operations dynamically.

## 🔮 Future Enhancements

- User authentication and authorization.
- Employee search and filtering.
- Employee profile management.
- Pagination for employee records.
- Form validation and error handling.
- Employee attendance management.
- Export employee records to PDF and Excel.
- Responsive dashboard with improved UI.

## 👨‍💻 Author

**[Virabhadra Khobare](https://github.com/VirabhadraKhobare)**

Developed as a PHP and MySQL Web Development Project.

- GitHub: [VirabhadraKhobare](https://github.com/VirabhadraKhobare)

## 📄 License

This project is available for educational and learning purposes. You are welcome to explore, modify, and improve the source code.

---

**If you find this project useful, consider giving the repository a ⭐ on GitHub!**
