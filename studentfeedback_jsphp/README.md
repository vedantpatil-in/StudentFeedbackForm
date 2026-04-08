# Student Feedback Form

A web application built with PHP and MySQL for collecting teacher feedback from students at G H Raisoni College of Engineering and Management, Pune.

## Features

- Student feedback form with multiple rating criteria
- Admin panel to view and manage feedback submissions
- Subject-wise feedback count summary
- Secure admin login
- Student data collection (Academic Year, Semester, Branch, Section, Subject, etc.)

## Setup Instructions

### Prerequisites
- XAMPP (or any local server with Apache & MySQL)
- PHP 7.0+
- MySQL/MariaDB

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/yourusername/studentfeedback_jsphp.git
   cd studentfeedback_jsphp
   ```

2. **Place in XAMPP htdocs**
   ```bash
   Move the folder to C:\xampp\htdocs\studentfeedback_jsphp
   ```

3. **Configure Database**
   - Copy `php/config.example.php` to `php/config.php`
   - Update database credentials in `php/config.php`

4. **Create Database**
   - Open phpMyAdmin: `http://localhost/phpmyadmin`
   - Create a new database named `feedback`
   - Import `database/feedback.sql`

5. **Start the Application**
   - Open XAMPP Control Panel and start **Apache** and **MySQL**
   - Navigate to `http://localhost/studentfeedback_jsphp/`

## Default Admin Credentials

- **Email:** admin@admin.com
- **Password:** admin

⚠️ **IMPORTANT:** Change the default password in production.

## Project Structure

```
├── index.php                 # Student feedback form (Step 1)
├── questions.php             # Feedback questions form (Step 2)
├── adminpage.php             # Admin dashboard
├── admin.php                 # Admin login page
├── css/
│   ├── styles.css           # Main styles
│   ├── styles1.css          # Admin login styles
│   └── styles2.css          # Admin dashboard styles
├── js/
│   └── script.js            # Client-side validation
├── php/
│   ├── config.php           # Database configuration
│   ├── insert.php           # Insert feedback data
│   ├── checklogin.php       # Admin login validation
│   ├── logout.php           # Session logout
│   └── admin.php            # Admin page redirect
├── database/
│   └── feedback.sql         # Database schema
└── images/                  # Background and other images
```

## Feedback Survey Questions

The form collects feedback on:
1. Syllabus coverage
2. Teacher effectiveness:
   - Technical content
   - Communication skills
   - Availability and cooperation
   - Pace of content delivery
   - Overall effectiveness
3. Curricular content rating
4. Lab experiments rating (if applicable)
5. General remarks

## Technologies Used

- **Backend:** PHP
- **Database:** MySQL/MariaDB
- **Frontend:** HTML, CSS, JavaScript
- **Server:** Apache (XAMPP)

## License

This project is open source. Feel free to modify and use it for educational purposes.

## Support

For issues or questions, please create an issue on GitHub.
