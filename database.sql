CREATE DATABASE IF NOT EXISTS user_management_system;

USE user_management_system;

/*CREATE TABLE IF NOT EXISTS users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    username TEXT NOT NULL,
    email TEXT NOT NULL,
    bio TEXT NOT NULL,
    gender ENUM(male,female),
    password TEXT NOT NULL 
 );*/



 CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `bio` text NOT NULL,
  `gender` enum('male','female','others') NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
