# Le Tie - Street Food Menu (Server Side API) 🛠️

This is the backend API repository for **Le Tie**. It manages data persistence, the complete CRUD operations for the administration dashboard, and the relational database architecture for the street-food menu system.

🔄 **Client Repository:** [Inserisci qui il link alla repo del Client]

## 🚀 Features & Database Architecture
- **Full CRUD Management:** An admin panel interface allows authorized users to Create, Read, Update, and Delete menu items dynamically.
- **Advanced Menu Administration:** Complete control over categories (adding, renaming, deleting) and product associations.
- **Decoupled Image Model:** Images are handled as a standalone model, built with future scalability in mind to support multiple images per product.
- **Native SQL Relations:** Implemented robust **MySQL** relational integrity using the `mysql2` driver, writing custom relational queries to manage **One-to-One**, **One-to-Many**, and **Many-to-Many** mappings seamlessly.

## 🛠️ Tech Stack
- **Runtime Environment:** Node.js
- **Backend Framework:** Express.js 
- **Database:** MySQL
- **Driver:** mysql2 (Native SQL Queries)

## 📦 Installation & Setup

1. Clone the repository:
   ```bash
   git clone https://github.com
   ```
2. Install dependencies:
   ```bash
   npm install
   ```
3. Configure your Environment Variables (create a `.env` file):
   ```env
   PORT=5000
   DB_HOST=localhost
   DB_USER=your_mysql_user
   DB_PASSWORD=your_mysql_password
   DB_NAME=le_tie_db
   ```
4. Start the backend server:
   ```bash
   npm run dev
   ```


