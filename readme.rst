# Role-Based Access Control (RBAC) System – CodeIgniter 

This project implements a simple and scalable Role-Based Access Control (RBAC) system using the CodeIgniter PHP framework. It allows user authentication, role assignment, and permissions-based access to different modules and features of a web application.

---

## 🔧 Technologies Used

- PHP (>= 7.2+)
- CodeIgniter 3.x 
- MySQL 
- Bootstrap 
- jQuery


---

## ✅ Functionalities

### 1. 🔐 User Authentication

- Login and Logout
- Password hashing and verification
- Session management

### 2. 👤 User Management

- Create, update, delete users
- Assign roles to users
- List all users and their roles

### 3. 🔑 Role Management

- Create, update, delete roles
- Assign multiple permissions to a role

### 4. 📜 Permission Management

- Create and manage permissions (e.g., `view_dashboard`, `edit_user`)
- Assign permissions to roles

### 5. 🔒 Access Control Middleware

- Custom helper/middleware to check:
  - If a user is logged in
  - If a user has a specific role or permission
- Block or redirect unauthorized access



