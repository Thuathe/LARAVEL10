-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2023 at 08:40 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databaselaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `example` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `title`, `content`, `example`, `created_at`, `updated_at`) VALUES
(3, 'dh9wdqQWVkTPD6zOuq8p67GYy6o6t6JX6HtrbBGF.png', 'HTML 5', 'or HyperText Markup Language version 5, is the latest evolution of the standard markup language used to create content on the World Wide Web. It is a core technology markup language of the Internet and is essential for structuring and presenting content for the web.\r\n\r\nHTML5 builds upon its predecessors, introducing new features and improvements to enhance the capabilities of web development. Here is an overview of the key aspects of HTML5.', 'SEIvd3pkQFh1imRBDW8WOkoFXenLJHuETez3Mj9b.png', '2023-11-16 19:32:15', '2023-11-24 00:26:50'),
(4, 'oOJLcwNqg0wss9p9uSkUnjvOqj0pBZy8TzR31YbL.png', 'JavaScript', 'is a dynamic, object-oriented programming language that is commonly employed to create interactive effects within web browsers. Originally developed by Netscape, JavaScript has become a fundamental component of web development, enabling developers to enhance the user experience by creating dynamic and responsive web pages', 'w7BV1lnnscAKUxGNYeVhWx9EowVTPnnXLEZcoX6e.png', '2023-11-16 19:41:29', '2023-11-24 00:21:25'),
(6, 'Tuuk9BQwv7cxby2rzGytTjnVlpqHjLjGs3OuGXwD.png', 'C++', 'is a general-purpose, object-oriented programming (OOP) language that encompasses the features of the C programming language while introducing additional concepts such as classes and objects. It was developed by Bjarne Stroustrup at Bell Labs during the early 1980s and has since become widely used in various application domains, including system software, game development, embedded systems, and high-performance applications.', 'yQU19d6vhOE2cC7E0J61AKafgPUpg559pfUujzDg.png', '2023-11-24 00:19:32', '2023-11-24 00:19:32'),
(7, 'WUaUUb3NIjCOjnaWXzKIZZTFqcdhQ5Sd2DeOeRC2.png', 'Nuxt.Js', 'is a framework for building Vue.js applications. It extends Vue.js to enable server-side rendering, automatic code splitting for faster page loads, and an organized project structure. Nuxt.js simplifies the development of universal or server-side rendered (SSR) Vue applications, providing a robust framework with conventions to streamline the process. It includes features like routing, middleware, and an easy setup for managing your application\'s configuration.', 'rbRTgh3iJnmqaFnmWMq89LSe1taCZTJIf2j6aDZ0.png', '2023-11-24 00:35:12', '2023-11-24 00:35:12'),
(8, 'pvgiJeZXLs20eZXuH9pK39tmC0JxXapkwKCvf5fx.png', 'Angular', 'is a front-end web application framework developed and maintained by Google. It is a TypeScript-based open-source framework that simplifies the development of single-page applications (SPAs) and dynamic web applications. Angular provides a structured architecture for building client-side applications, offering features such as two-way data binding, dependency injection, modularization, and a powerful template system. It follows the Model-View-Controller (MVC) architectural pattern and aims to enhance the development and testing of such applications by providing a comprehensive framework.', 'PbcAbV0fUwONqYfvJBcnMRlISmo86SK2PvhDSf1y.png', '2023-11-24 00:39:05', '2023-11-24 00:39:05'),
(9, 'ged2WgNu18qxhtROtKEQF2RRbFebbseawB8n9L6i.png', 'Java', 'is a high-level, object-oriented programming language developed by Sun Microsystems (now owned by Oracle). It is designed to be platform-independent, meaning that Java programs can run on any device that has the Java Virtual Machine (JVM) installed. Java is known for its simplicity, portability, and robustness, making it a popular choice for developing a wide range of applications, including web applications, mobile apps (Android), enterprise systems, and more. The language emphasizes the principle of \"write once, run anywhere\" (WORA), promoting code reusability and flexibility across different platforms.', 'bS7kRyCGg0UX7NG8nkdxS7E6mFjBlsqaFLc3aChI.png', '2023-11-24 00:50:53', '2023-11-24 00:50:53'),
(10, 'xlqxGwuZr82cL6TLlzSFFo205QroexKTcs7Eui7W.png', 'Php', 'is commonly used to build dynamic web pages, handle forms, manage sessions, interact with databases, and perform various server-side tasks. It is known for its simplicity, flexibility, and broad support across different web servers and operating systems. Many popular content management systems (CMS) and frameworks, such as WordPress and Laravel, are built using PHP.', 'rFGsOoAqhqP5DBV3p1p6TZqOnK2fEnTlA1DLYDx6.png', '2023-11-24 01:02:37', '2023-11-24 01:02:37'),
(11, 'NyqPHzKFbNXoCdJSuNmCuzz4whxWQ0EQi4yijSRq.png', 'Python', 'is a high-level, interpreted programming language known for its readability and simplicity. Created by Guido van Rossum and first released in 1991, Python emphasizes code readability and allows developers to express concepts in fewer lines of code than languages like C++ or Java. It supports multiple programming paradigms, including procedural, object-oriented, and functional programming.', 'CPfhnGHBUxxN3AgKKlwKEMtyy2ibaDCNj86KpeYE.png', '2023-11-24 01:03:34', '2023-11-24 03:18:28'),
(12, 'GImhEmPI61KnaDMLqT9gtBAHi8mq1AxDauq0Isw9.png', 'React', 'is a JavaScript library for building user interfaces, particularly for single-page applications where UI updates are frequent and dynamic. Developed and maintained by Facebook, React provides a declarative and efficient way to design interactive and reusable UI components. It was first released in 2013.', 'mTHwV6VQH4z6mZd1DuMHgfOpsEtKXy9iAYvZ9mBV.png', '2023-11-24 01:03:54', '2023-11-24 03:49:23');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2023_09_19_125237_create_posts_table', 1),
(13, '2023_09_19_125237_create_post_table', 2),
(14, '2023_09_22_021321_create_blogs_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `image`, `title`, `content`, `created_at`, `updated_at`) VALUES
(37, 'https://via.placeholder.com/400x300.png/006600?text=temporibus', 'Dr.', 'Eius eaque molestiae ducimus architecto. Cupiditate et ut corrupti at id minus consectetur. Non qui enim corrupti suscipit. Doloremque porro sit autem.', '2023-10-27 00:22:07', '2023-10-27 00:22:07'),
(38, 'https://via.placeholder.com/400x300.png/0044ff?text=ex', 'Ms.', 'Provident et impedit nam mollitia. In fugiat ipsa dolorum magnam quia rerum. Et temporibus vero laudantium. Explicabo recusandae quia molestias illum.', '2023-10-27 00:22:07', '2023-10-27 00:22:07'),
(39, 'https://via.placeholder.com/400x300.png/0033aa?text=id', 'Miss', 'In neque nulla ea perspiciatis. Est autem libero nisi nihil et earum voluptas harum. Velit et sunt occaecati dolores nihil.', '2023-10-27 00:22:07', '2023-10-27 00:22:07'),
(40, 'https://via.placeholder.com/400x300.png/0033ee?text=ad', 'Prof.', 'Sequi architecto aspernatur distinctio illum incidunt quam. Placeat alias minima quam dignissimos sit autem et odit. Sit sit voluptatem quia dolor dolorem. Et et fuga est incidunt ut enim sit.', '2023-10-27 00:22:07', '2023-10-27 00:22:07'),
(41, 'https://via.placeholder.com/400x300.png/0088bb?text=reiciendis', 'Prof.', 'Animi cum ut ipsum quae impedit. Iusto quisquam autem corporis aut. Eaque laboriosam quia soluta distinctio culpa dolores sapiente. Impedit non amet aperiam nobis tempore sequi.', '2023-10-27 00:22:07', '2023-10-27 00:22:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'aku', 'ekanandasusila9c@gmail.com', NULL, '$2y$10$SFQ6hF9BDZE/DDMnFk2sBuXoIlkkdv6bkjTPeacBgkSyNWc/rGTK.', NULL, '2023-11-09 07:02:01', '2023-11-09 07:02:01'),
(3, 'q', 'ekanandasusila9@gmail.com', NULL, '$2y$10$yMZe4O3U8jj4HbEq1R5mouf56TXcpPv5VgCvJ9D3ydwgXt.427bQm', NULL, '2023-11-15 03:45:36', '2023-11-15 03:45:36'),
(4, 'a', 'ekanandasusila@gmail.com', NULL, '$2y$10$y4g6WyzkNlHcMJ7tFOhmJ.UmhgSANgkNP1JL4ka2PnatDQD6Bhwtu', NULL, '2023-11-15 03:46:18', '2023-11-15 03:46:18'),
(7, 'Eka Nanda Susila', 'nanda@gmail.com', NULL, '$2y$10$uo.Gxf037h9udARXrXn75.ncpLXZ.Pbat6RYXAQnZwD/EfmGQBIaS', NULL, '2023-11-23 20:35:14', '2023-11-23 20:35:14'),
(8, 'eka nanda', 'nanda1@gmail.com', NULL, '$2y$10$C0IkivZsL61vjjUczbWiG..uZGSlNUP5TFGw0pRmLSLkpBSlBme1G', NULL, '2023-11-23 23:52:41', '2023-11-23 23:52:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
