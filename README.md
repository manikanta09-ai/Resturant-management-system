🍽️ Restaurant Management System
A dynamic web application for discovering and displaying restaurants with ratings, cuisines, locations, and images.

📁 Project Structure
bash
Copy
Edit
├── homepage.html          # Landing page
├── resturants.html        # Restaurant listings page
├── get_resturants.php     # Backend script to fetch restaurant data
├── db_connect.php         # Database connection file
├── styles.css             # Custom styling for the pages
└── requirements.txt       # (Optional) Python/PHP dependencies if used
🌐 Features
Displays a grid of restaurants with images, cuisine types, ratings, and locations.

Responsive UI using modern CSS layout.

Loads restaurant data dynamically using get_resturants.php.

Styled using a clean and elegant styles.css.

⚙️ Setup Instructions
✅ Prerequisites
PHP installed and running (e.g., via XAMPP/WAMP/LAMP).

A running MySQL server.

Browser (Chrome, Firefox, etc.).

🔧 Steps
Clone the repository:

bash
Copy
Edit
git clone https://github.com/yourusername/Restaurant-management.git
Place project folder in XAMPP htdocs (or similar):

bash
Copy
Edit
cp -r Restaurant-management /xampp/htdocs/

Configure database:

Create a database in phpMyAdmin.

Update the database name, user, and password in db_connect.php.

Run the project:

Open http://localhost/Restaurant-management/homepage.html in your browser.

🗂️ Database Structure (Example)
sql
Copy
Edit
CREATE TABLE restaurants (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255),
  cuisine VARCHAR(255),
  location VARCHAR(255),
  rating DECIMAL(2,1),
  reviews INT,
  image_url TEXT
);

🛠️ Technologies Used
Frontend: HTML, CSS, JavaScript

Backend: PHP, MySQL

Styling: Pure CSS with responsive grid layout

Database: MySQL
