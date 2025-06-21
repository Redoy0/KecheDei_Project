# 🧺 KecheDei - Online Laundry Service Platform

https://kechedei.kesug.com
## 📑 Overview

KecheDei is a comprehensive online laundry service platform that connects customers with laundry services. The application streamlines the process of scheduling laundry pick-ups, selecting specific laundry services, and tracking orders in real-time. With an intuitive user interface and robust backend, KecheDei offers a seamless experience for customers.
## ✨ Features

- 👤 **User Authentication System**
  - Secure registration and login
  - Password recovery functionality
  - User profile management

- 🛒 **Order Management**
  - Multiple service options (Wash, Iron, Dry Clean)
  - Weight-based pricing
  - Special instructions option

- 📅 **Scheduling System**
  - Flexible pick-up and delivery scheduling
  - Time slot selection
  - Rescheduling options

- 📱 **Order Tracking**
  - Real-time status updates
  - Order history with detailed information

- 🛠️ **Admin Dashboard**
  - User management
  - Order processing workflow
  - Service configuration
  - Analytics and reporting


## 🛠️ Tech Stack

- **Frontend**: 
  - HTML5
  - CSS3
  - JavaScript
  - Bootstrap 5 (for responsive design)

- **Backend**:
  - PHP 8.0+
  - MySQL Database

- **Development Tools**:
  - Git for version control
  - XAMPP/WAMP for local development


## 🚀 Installation & Setup

### Prerequisites
- PHP 8.0 or higher
- MySQL 5.7 or higher
- XAMPP, WAMP, MAMP, or any similar stack

### Steps to Run Locally

1. **Clone the repository**
   ```bash
   git clone https://github.com/Redoy0/KecheDei_Project.git
   ```

2. **Setup the database**
   - Start MySQL server
   - Create a new database named `kechedei_db`
   - Import the `db/kechedei.sql` file

3. **Configure database connection**
   - Open `config/database.php`
   - Update the database credentials:
     ```php
     $host = 'localhost';
     $username = 'root';
     $password = '';
     $database = 'kechedei_db';
     ```

4. **Start the application**
   - Move the project folder to your server's document root (e.g., `htdocs` for XAMPP)
   - Start Apache server
   - Navigate to `http://localhost/KecheDei` in your browser


## 💡 Usage Examples

### Customer Journey
1. Register/Login to account
2. Select laundry services required
3. Schedule pick-up time
4. Track order status
5. Receive delivery and provide feedback


## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

1. Fork the repository
2. Create your feature branch:
   ```bash
   git checkout -b feature/amazing-feature
   ```
3. Commit your changes:
   ```bash
   git commit -m 'Add some amazing feature'
   ```
4. Push to the branch:
   ```bash
   git push origin feature/amazing-feature
   ```
5. Open a Pull Request

## 📝 License

This project is licensed under the MIT License - see the LICENSE file for details.

## 📞 Contact

Project Maintainer: Sabbir Ahamed - sabbirahamed.cse@gmail.com

Project Link: [(https://github.com/Redoy0/KecheDei)](https://github.com/Redoy0/KecheDei_Project.git)

---

⭐ **If you find this project useful, don't forget to give it a star on GitHub!** ⭐

📌 *KecheDei - Making laundry day a breeze!*
