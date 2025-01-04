# Online Mobile Store Website

This project was developed as part of the **Internet and Web Programming** coursework. It is a fully functional online mobile store website that demonstrates database-driven e-commerce features, including user authentication, product management, and order handling.

## Table of Contents

- [About the Project](#about-the-project)
- [Features](#features)
- [Technology Stack](#technology-stack)
- [Setup Instructions](#setup-instructions)
- [Usage](#usage)
- [Contributors](#contributors)

## About the Project

The Online Mobile Store Website is a web application that allows users to browse, select, and purchase mobile phones online. It integrates a MySQL database for handling inventory and user transactions and is designed to be scalable and user-friendly.

## Features

- User authentication (login/logout)
- Product listing with stock availability
- Dynamic inventory updates
- Order confirmation and tracking
- Secure database connectivity

## Technology Stack

- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP
- **Database:** MySQL
- **Server:** Apache (via XAMPP/WAMP)

## Setup Instructions

1. Clone the repository:
   ```bash
   git clone https://github.com/vvsndattasailingam/Online-Mobile-Store.git
   ```
2. Import the `store.sql` file into your MySQL database to set up the necessary tables and data.
3. Configure the database connection in `Connection.php`:
   ```php
   $con = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));
   ```
4. Run the application by hosting the project directory on a local server (e.g., XAMPP or WAMP).

## Usage

1. Navigate to the website's homepage.
2. Register or log in as a user.
3. Browse available mobile phones.
4. Add products to the cart and proceed to checkout.
5. Confirm orders and track statuses.

## Contributors

- **Lingam VVSN Datta Sai**  
  Developed as part of the coursework Internet and Web Programming under the guidance of Dr. Hema N.
