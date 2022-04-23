# Proyecto Programacion: HTML + CSS + JS + PHP (MVC & WS/API)

<h1>
  <p align="center">CRM Tool</p>
</h1>

In order to run this project you need to:

This application is a small CRM Tool with 3 type of employees: Customer Service, Human Resources, and data warehouse admins.
- Login / SignIn Module 
- Customer Service User: Can Add, Edit, Get, and Update customers.
- HR Module: Can Add, Edit, Get and, Update employees. Also, this module can generate a report based on the current employees, salaries and current date.
- Data Warehouse Management Module: Was not developed.

-------------------------------------------------------------
# How to install and run it?
- Install XAMPP
- Start Apache & MySQL
- Create a database named "proyecto_l"
- Create the following tables:

-------------------------------------------------------------
CREATE TABLE `customers_crm` (
  `id_customer` int(50) NOT NULL AUTO_INCREMENT,
  `email` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `last_name` varchar(256) NOT NULL,
  `phone` varchar(256) NOT NULL,
  `date_of_birth` date NOT NULL,
  `address` varchar(256) NOT NULL,
  `country` varchar(256) NOT NULL,
  `city` varchar(256) NOT NULL,
  `postal_code` int(50) NOT NULL,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4

 -------------------------------------------------------------------------
 CREATE TABLE `payment_crm` (
  `id_payment` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `salary_amount` int(11) NOT NULL,
  `report_date` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_payment`)
) ENGINE=InnoDB AUTO_INCREMENT=140 DEFAULT CHARSET=utf8mb4

------------------------------------------------------------------------
CREATE TABLE `salary_crm` (
  `id_salary` int(50) NOT NULL AUTO_INCREMENT,
  `id_role` int(50) NOT NULL,
  `salary_amount` int(50) NOT NULL,
  PRIMARY KEY (`id_salary`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4

------------------------------------------------------------------------
CREATE TABLE `usuarios_crm` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `lastname` varchar(256) NOT NULL,
  `id_role` int(11) NOT NULL,
  `vacation_days` int(11) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4

-------------------------------------------------------------------------
- You can access with the username and password you create under "usuarios_crm"
