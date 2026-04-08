# Student Feedback Portal Microproject Report

## Title
Student Feedback Portal Using JavaScript and PHP

## Academic Year
2025-26

## Submitted To
Savitribai Phule Pune University, Pune

## Submitted By
Student Name
Roll No: A

## Guide
Dr. Poonam Gupta

## Institution
G H Raisoni College of Engineering and Management, Pune

---

## Certificate
This is to certify that the microproject report entitled *Student Feedback Portal Using JavaScript and PHP* submitted by the above students is a bonafide record of the work carried out by them under the supervision of Dr. Poonam Gupta. This report is approved for partial fulfillment of the requirement of the S.Y. B.Tech. (Information Technology) for the academic year 2025-26.

---

## Acknowledgment
I would like to express sincere thanks to Dr. Poonam Gupta for continuous guidance and valuable suggestions. I also thank the teaching staff of the Information Technology Department and the institute authorities for their support throughout the project.

---

## Abstract
The Student Feedback Portal is a web-based microproject that enables students to submit structured feedback on teaching quality and subject delivery. The system uses HTML/CSS for layout, JavaScript for client-side form validation and dynamic subject selection, PHP for backend processing, and MySQL for storing feedback data. The admin area allows authorized staff to view submitted responses in a tabular format.

---

## 1. Introduction
### 1.1 Overview
This project is designed to collect student feedback in a structured manner. It provides a user-friendly feedback form and an admin portal to review collected input.

### 1.2 Motivation
Feedback is essential for improving teaching quality. A digital feedback system simplifies responses collection, reduces manual effort, and helps administrators review data more efficiently.

### 1.3 Scope and Limitations
The system captures academic year, semester, date, branch, section, roll number, subject, quantitative responses, and remarks. The current implementation stores feedback in a MySQL database and displays it to authenticated admin users. It does not include analytics, advanced reporting, or email notifications.

---

## 2. Objective of the Project
### 2.1 Problem Statement
Manual feedback collection is time-consuming, prone to errors, and difficult to manage in paper format. The goal is to build a web application that simplifies feedback submission and admin review.

### 2.2 Proposed Solution
Develop a responsive web portal that lets students submit feedback and allows administrators to log in and view all responses. Use client-side validation to ensure complete submissions and backend PHP to persist data in a relational database.

---

## 3. Tools and Technologies Used
### 3.1 Frontend Technologies
- HTML5
- CSS3
- JavaScript

### 3.2 Backend Technology
- PHP

### 3.3 Database
- MySQL / MariaDB

### 3.4 Development Tools
- XAMPP (Apache + MySQL)
- phpMyAdmin
- Code editor for HTML/PHP/JS

---

## 4. Project Design and Methodology
### 4.1 System Architecture
The application follows a simple web architecture:
- Client browser renders the feedback form (`index.php`)
- JavaScript provides validation and dynamic subject selection
- Form submission posts data to `php/insert.php`
- `php/insert.php` stores responses in the MySQL `feedback` database
- Admin login is handled by `php/checklogin.php`
- Authenticated user views feedback records on `adminpage.php`

### 4.2 Modules of the System
- Student Feedback Form Module
- Client-Side Validation Module
- Database Connectivity Module
- Admin Authentication Module
- Feedback Display Module

### 4.3 Data Flow Diagram (DFD)
- Level 0: Student submits feedback -> System stores feedback -> Admin views feedback
- Level 1: Student selects academic details and answers questions -> JavaScript validates inputs -> PHP inserts record into database -> Admin logs in and queries feedback table

### 4.4 Database Design
The database `feedback` contains two tables:
- `feedback`: stores all student responses
- `user`: stores admin login credentials

### 4.5 Tables Used
#### `feedback`
- `id` (int, primary key, auto increment)
- `year` (int)
- `sem` (text)
- `date` (text)
- `branch` (text)
- `section` (text)
- `subject` (text)
- `ques1` (int)
- `ques2i` (int)
- `ques2ii` (int)
- `ques2iii` (int)
- `ques2iv` (int)
- `ques2v` (int)
- `ques3` (int)
- `ques4` (int)
- `remarks` (text)

#### `user`
- `id` (int, primary key, auto increment)
- `email` (text)
- `password` (text)

---

## 5. Implementation and Working
### 5.1 Frontend Implementation
The feedback page is implemented in `index.php` and includes:
- Academic year, semester, date, branch, section, roll number, subject selection
- Five feedback questions with radio buttons for a 1-5 rating scale
- A remarks textarea for additional comments
- A dedicated admin button for staff authentication
- CSS styling loaded from `css/styles.css`

### 5.2 Backend Implementation
- `php/config.php` establishes the MySQL connection with `mysqli_connect("localhost", "root", "", "feedback")`
- `php/insert.php` receives POST form values and inserts them into the `feedback` table
- `php/checklogin.php` verifies admin credentials against the `user` table and starts a session
- `adminpage.php` uses session authentication to display stored feedback in an HTML table

### 5.3 Database Connectivity
The system connects to the database using PHP MySQLi. `config.php` handles the connection setup and error reporting.

### 5.4 Flowchart
The working flow is:
1. Student opens the feedback form
2. JavaScript sets subject options based on semester
3. Student fills all required fields and submits
4. JavaScript validation ensures required fields are not empty
5. PHP inserts feedback into the database
6. Admin logs in using email and password
7. Admin views all stored feedback records

### 5.5 Working Flow
The application uses a standard request-response cycle. Student form submission triggers server-side insertion, followed by a browser redirect message. Admin login creates a session and enables protected access to data.

---

## 6. Results and Output
### 6.1 Output
The application successfully captures student feedback and stores it in the database. The admin interface presents feedback records in a tabular layout with all stored fields displayed.

---

## 7. Conclusion and Future Work
### 7.1 Conclusion
The Student Feedback Portal demonstrates how JavaScript, PHP, and MySQL can be combined to create a functional feedback collection system. It offers a digital replacement for paper-based feedback, with admin access for easy review.

### 7.2 Future Work
Potential improvements include:
- Adding server-side validation and security hardening
- Encrypting admin credentials and using hashed passwords
- Implementing feedback analytics and charts
- Adding role-based access control and admin management
- Allowing export of feedback to CSV or PDF

---

## References
1. Student feedback project documentation.
2. XAMPP and phpMyAdmin setup guides.
3. HTML, CSS, JavaScript, PHP, and MySQL reference material.
4. Project source code in `c:\xampp\htdocs\studentfeedback_jsphp`
