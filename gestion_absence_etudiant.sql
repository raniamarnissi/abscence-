-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2020 at 02:40 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestion_absence_etudiant`
--

-- --------------------------------------------------------

--
-- Table structure for table `absenses`
--

CREATE TABLE `absenses` (
  `id_abs` bigint(20) UNSIGNED NOT NULL,
  `code_student` bigint(20) UNSIGNED NOT NULL,
  `id_seance` bigint(20) UNSIGNED NOT NULL,
  `date_abs` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id_admin` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `affects`
--

CREATE TABLE `affects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_teacher` bigint(20) UNSIGNED NOT NULL,
  `id_modul` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id_class` bigint(20) UNSIGNED NOT NULL,
  `class_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_03_27_211908_create_admins_table', 1),
(2, '2020_03_27_215223_create_classes_table', 1),
(3, '2020_03_27_215632_create_students_table', 1),
(4, '2020_03_27_235346_create_moduls_table', 1),
(5, '2020_03_28_000029_create_teachers_table', 1),
(6, '2020_03_28_000951_create_affects_table', 1),
(7, '2020_03_28_002327_create_seances_table', 1),
(8, '2020_03_28_003413_create_absenses_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `moduls`
--

CREATE TABLE `moduls` (
  `id_modul` bigint(20) UNSIGNED NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seances`
--

CREATE TABLE `seances` (
  `id_seance` bigint(20) UNSIGNED NOT NULL,
  `id_teacher` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_seance` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `code_student` bigint(20) UNSIGNED NOT NULL,
  `id_class` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_birth` date NOT NULL,
  `adress_stud` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_stud` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture_stud` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id_teacher` bigint(20) UNSIGNED NOT NULL,
  `id_class` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_teacher` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture_teacher` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absenses`
--
ALTER TABLE `absenses`
  ADD PRIMARY KEY (`id_abs`),
  ADD KEY `absenses_code_student_foreign` (`code_student`),
  ADD KEY `absenses_id_seance_foreign` (`id_seance`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `affects`
--
ALTER TABLE `affects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `affects_id_teacher_foreign` (`id_teacher`),
  ADD KEY `affects_id_modul_foreign` (`id_modul`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id_class`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moduls`
--
ALTER TABLE `moduls`
  ADD PRIMARY KEY (`id_modul`);

--
-- Indexes for table `seances`
--
ALTER TABLE `seances`
  ADD PRIMARY KEY (`id_seance`),
  ADD KEY `seances_id_teacher_foreign` (`id_teacher`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`code_student`),
  ADD KEY `students_id_class_foreign` (`id_class`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id_teacher`),
  ADD UNIQUE KEY `teachers_email_unique` (`email`),
  ADD KEY `teachers_id_class_foreign` (`id_class`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absenses`
--
ALTER TABLE `absenses`
  MODIFY `id_abs` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `affects`
--
ALTER TABLE `affects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id_class` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `moduls`
--
ALTER TABLE `moduls`
  MODIFY `id_modul` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seances`
--
ALTER TABLE `seances`
  MODIFY `id_seance` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `code_student` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id_teacher` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absenses`
--
ALTER TABLE `absenses`
  ADD CONSTRAINT `absenses_code_student_foreign` FOREIGN KEY (`code_student`) REFERENCES `students` (`code_student`),
  ADD CONSTRAINT `absenses_id_seance_foreign` FOREIGN KEY (`id_seance`) REFERENCES `seances` (`id_seance`);

--
-- Constraints for table `affects`
--
ALTER TABLE `affects`
  ADD CONSTRAINT `affects_id_modul_foreign` FOREIGN KEY (`id_modul`) REFERENCES `moduls` (`id_modul`),
  ADD CONSTRAINT `affects_id_teacher_foreign` FOREIGN KEY (`id_teacher`) REFERENCES `teachers` (`id_teacher`);

--
-- Constraints for table `seances`
--
ALTER TABLE `seances`
  ADD CONSTRAINT `seances_id_teacher_foreign` FOREIGN KEY (`id_teacher`) REFERENCES `teachers` (`id_teacher`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_id_class_foreign` FOREIGN KEY (`id_class`) REFERENCES `classes` (`id_class`);

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_id_class_foreign` FOREIGN KEY (`id_class`) REFERENCES `classes` (`id_class`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
