# Parking Management System (OOP)

## 📌 Project Description

This project is a **object-oriented PHP application** that simulates a parking lot for different types of vehicles.

The goal of this project is to demonstrate **OOP principles in PHP**, such as:

* Class inheritance
* Encapsulation
* Type checking
* Clean project structure



## 🚗 Features

* A `Parkplatz` class that manages parked vehicles using an internal array
* Three different vehicle types:

  * Car (PKW)
  * Truck (Transporter)
  * Motorcycle
* Only valid vehicle objects can be parked
* Primitive data types (string, int, etc.) are rejected
* Easy to extend with new vehicle types



## 🛠 Technologies Used

* PHP 8+
* Object-Oriented Programming (OOP)
* Docker & Docker Compose
* No database (in-memory array)



## ▶️ How to Run (Docker)

### Prerequisites

* Docker
* Docker Compose

### Steps

1. Clone the repository:

```bash
git clone https://github.com/Soheil7100Z/Parking-Management-System.git
cd Parking-Management-System

```

2. Build and start the container:

```bash
docker compose up -d
```

3. The application is served via Docker and accessible in the browser at:

   http://localhost:8080/public/index.php
