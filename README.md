
# 🍽️ Restaurant Management System

A responsive and interactive web application for showcasing restaurants and their details, built using **HTML**, **CSS**, **PHP**, and **MySQL**.

---

## 📌 Features

- Display a list of restaurants dynamically from the database
- Show ratings, cuisines, location, and images
- Responsive layout with modern CSS styling
- Backend integration with PHP & MySQL

---

## 📁 Project Structure

```
Restaurant-Management/
│
├── homepage.html           # Landing page with a "View Restaurants" button
├── resturants.html         # Page displaying restaurants in grid format
├── get_resturants.php      # PHP script to fetch restaurants from MySQL
├── db_connect.php          # Database connection configuration
├── styles.css              # Custom CSS for layout and design
└── README.md               # Project documentation
```

---

## 🛠️ Technologies Used

- **Frontend**: HTML, CSS
- **Backend**: PHP
- **Database**: MySQL
- **Web Server**: XAMPP or WAMP (recommended for local use)

---

## 🚀 Setup Instructions

### 1. Clone the Repository

```bash
git clone https://github.com/yourusername/Restaurant-management.git
```

### 2. Move Project to Web Server Directory

If using **XAMPP**:

```bash
Move the folder to: C:/xampp/htdocs/
```

### 3. Configure the Database

1. Open [phpMyAdmin](http://localhost/phpmyadmin).
2. Create a new database (e.g., `restaurant_db`).
3. Create a `restaurants` table using the following SQL:

```sql
CREATE TABLE restaurants (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    cuisine VARCHAR(255),
    location VARCHAR(255),
    rating FLOAT,
    reviews INT,
    image_url TEXT
);
```

4. Insert sample data:

```sql
INSERT INTO restaurants (name, cuisine, location, rating, reviews, image_url)
VALUES 
('The Italian Place', 'Italian', 'New York', 4.5, 120, 'https://source.unsplash.com/400x300/?restaurant'),
('Curry King', 'Indian', 'San Francisco', 4.2, 98, 'https://source.unsplash.com/400x300/?curry'),
('Sushi World', 'Japanese', 'Los Angeles', 4.7, 145, 'https://source.unsplash.com/400x300/?sushi');
```

### 4. Configure `db_connect.php`

Edit the file to match your MySQL database credentials:

```php
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "restaurant_db"; // Change this to your DB name

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
```

### 5. Run the Application

- Open your browser and go to:  
  **[http://localhost/Restaurant-management/homepage.html](http://localhost/Restaurant-management/homepage.html)**

- Click **“View Restaurants”** to load the listing page.

---

## 📸 Screenshots

### 📍 Homepage
![Homepage](https://source.unsplash.com/800x300/?restaurant,food)

### 🧾 Restaurant Listings
![Grid](https://source.unsplash.com/800x300/?menu,food)

---

## 📄 License

This project is licensed under the MIT License - feel free to use and modify it.

---

## 🙋‍♂️ Author

**Manikanta Nallamalli**  
[GitHub](https://github.com/manikanta09-ai)
