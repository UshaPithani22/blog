# Blog CRUD Application

## Overview

This is a simple Blog CRUD (Create, Read, Update, Delete) application developed using PHP and MySQL. The project includes user authentication and basic blog management features.

## Features

* User Registration
* User Login
* User Logout
* Create Blog Posts
* View Blog Posts
* Edit Blog Posts
* Delete Blog Posts
* Password Hashing
* Session Management

## Technologies Used

* PHP
* MySQL
* XAMPP
* HTML

## Database Name

blog

## Database Tables

### users

* id
* username
* password

### posts

* id
* title
* content
* created_at

## Project Structure

blog/
├── add_post.php
├── db.php
├── delete_post.php
├── edit_post.php
├── index.php
├── login.php
├── logout.php
├── register.php
└── README.md

## Installation Steps

1. Install XAMPP.
2. Start Apache and MySQL.
3. Open phpMyAdmin.
4. Create a database named `blog`.
5. Create the required tables (`users` and `posts`).
6. Copy the project folder into:
   C:\xampp\htdocs\blog
7. Open the browser and visit:
   http://localhost/blog/register.php

## Usage

1. Register a new user.
2. Login using the registered account.
3. Add a blog post.
4. View all posts.
5. Edit existing posts.
6. Delete posts.
7. Logout.

## Author

Usha Pithani

## Internship Task

ApexPlanet Software Pvt Ltd - Web Development Internship (PHP & MySQL) - Task 2
