-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 24, 2021 at 08:09 PM
-- Server version: 8.0.27
-- PHP Version: 7.3.33-1+ubuntu20.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam_hall`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_credit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '3',
  `department_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `course_code`, `course_credit`, `department_id`, `created_at`, `updated_at`) VALUES
(2, 'Fundamentals of Computers', 'CSE 111', '3.0', 1, '2021-09-13 14:24:18', '2021-09-13 14:24:18'),
(3, 'Structured Programming Language', 'CSE 113', '3.0', 1, '2021-09-13 14:33:32', '2021-09-13 14:33:32'),
(4, 'Structured Programming Language Lab', 'CSE 114', '1.5', 1, '2021-09-13 14:34:00', '2021-09-13 14:34:00'),
(5, 'English Language', 'ENG 101', '3.0', 1, '2021-09-13 14:34:26', '2021-09-13 14:34:26'),
(6, 'Calculus', 'MAT 101', '3.0', 1, '2021-09-13 14:34:56', '2021-09-13 14:34:56'),
(7, 'Basic Electrical Engineering', 'CSE 121', '3.0', 1, '2021-09-13 14:35:27', '2021-09-13 14:35:27'),
(8, 'Basic Electrical Engineering LAB', 'CSE 122', '1.5', 1, '2021-09-13 14:35:54', '2021-09-13 14:35:54'),
(9, 'Discrete Mathematics', 'CSE 123', '3.0', 1, '2021-09-13 14:36:26', '2021-09-13 14:36:26'),
(10, 'Fundamentals of Chemistry', 'CHE 101', '3.0', 1, '2021-09-13 14:36:52', '2021-09-13 14:36:52'),
(11, 'Mechanics, Wave, Heat & Thermodynamics', 'PHY 101', '3.0', 1, '2021-09-13 14:37:21', '2021-09-13 14:37:21'),
(12, 'Data Structure', 'CSE 131', '3.0', 1, '2021-09-13 14:39:28', '2021-09-13 14:39:28'),
(13, 'Data Structure Lab', 'CSE 132', '1.5', 1, '2021-09-13 14:39:53', '2021-09-13 14:39:53'),
(14, 'Matrices, Vector Analysis and Geometry', 'MAT 103', '3.0', 1, '2021-09-13 14:40:21', '2021-09-13 14:40:21'),
(15, 'Electromagnetism and Optics', 'PHY 103', '3.0', 1, '2021-09-13 14:40:47', '2021-09-13 14:40:47'),
(16, 'Bangladesh Studies', 'GED 101', '3.0', 1, '2021-09-13 14:41:09', '2021-09-13 14:41:09'),
(17, 'Object Oriented Programming Language', 'CSE 211', '3.0', 1, '2021-09-13 14:41:32', '2021-09-13 14:41:32'),
(18, 'Object Oriented Programming Language Lab', 'CSE 212', '1.5', 1, '2021-09-13 14:41:54', '2021-09-13 14:41:54'),
(19, 'Electronic Devices and Circuits', 'CSE 213', '3.0', 1, '2021-09-13 14:42:20', '2021-09-13 14:42:20'),
(20, 'Electronic Devices and Circuits LAB', 'CSE 214', '1.5', 1, '2021-09-13 14:42:41', '2021-09-13 14:42:41'),
(21, 'Engineering Drawings', 'CSE 216', '2.0', 1, '2021-09-13 14:43:11', '2021-09-13 14:43:11'),
(22, 'Basic Statistics & Probability', 'CSE 216', '3.0', 1, '2021-09-13 14:43:38', '2021-09-13 14:43:38'),
(23, 'Digital Logic Design', 'CSE 221', '3.0', 1, '2021-09-13 14:44:15', '2021-09-13 14:44:15'),
(24, 'Digital Logic Design Lab', 'CSE 222', '1.5', 1, '2021-09-13 14:44:40', '2021-09-13 14:44:40'),
(25, 'Theory of Computation', 'MAT 201', '3.0', 1, '2021-09-13 14:45:03', '2021-09-13 14:45:03'),
(26, 'Principles of Economics', 'ECO 201', '3.0', 1, '2021-09-13 14:45:27', '2021-09-13 14:45:27'),
(27, 'Project Work I', 'CSE 200', '2.0', 1, '2021-09-13 14:46:09', '2021-09-13 14:46:09'),
(28, 'Algorithm Design & Analysis', 'CSE 231', '3.0', 1, '2021-09-13 14:46:37', '2021-09-13 14:46:37'),
(29, 'Algorithm Design & Analysis Lab', 'CSE 232', '1.5', 1, '2021-09-13 14:47:01', '2021-09-13 14:47:01'),
(30, 'Cost and Management Accounting', 'BBA 201', '3.0', 1, '2021-09-13 14:47:27', '2021-09-13 14:47:27'),
(31, 'Complex Variables, Laplace Transform and Fourier', 'MAT 203', '3.0', 1, '2021-09-13 14:48:07', '2021-09-13 14:48:07'),
(32, 'Computer Architecture', 'CSE 311', '3.0', 1, '2021-09-13 14:48:32', '2021-09-13 14:48:32'),
(33, 'Database System', 'CSE 313', '3.0', 1, '2021-09-13 14:48:54', '2021-09-13 14:48:54'),
(34, 'Database System Lab', 'CSE 314', '1.5', 1, '2021-09-13 14:49:16', '2021-09-13 14:49:16'),
(35, 'Communication Engineering', 'CSE 315', '3.0', 1, '2021-09-13 14:49:38', '2021-09-13 14:49:38'),
(36, 'Simulation and Modeling', 'CSE 317', '3.0', 1, '2021-09-13 14:50:03', '2021-09-13 14:50:03'),
(37, 'Project work II', 'CSE 300', '2.0', 1, '2021-09-13 14:50:31', '2021-09-13 14:50:31'),
(38, 'Software Engineering', 'CSE 333', '3.0', 1, '2021-09-13 14:50:54', '2021-09-13 14:50:54'),
(39, 'Software Engineering Lab', 'CSE 334', '1.5', 1, '2021-09-13 14:51:15', '2021-09-13 14:51:15'),
(40, 'Technical Writing And Presentation', 'CSE 335', '3.0', 1, '2021-09-13 14:51:44', '2021-09-13 14:51:44'),
(41, 'Artificial Intelligence', 'CSE 411', '3.0', 1, '2021-09-13 14:52:14', '2021-09-13 14:52:14'),
(42, 'Artificial Intelligence Lab', 'CSE 412', '1.5', 1, '2021-09-13 14:52:35', '2021-09-13 14:52:35'),
(43, 'Web Engineering', 'CSE 413', '3.0', 1, '2021-09-13 14:53:00', '2021-09-13 14:53:00'),
(44, 'Web Engineering Lab', 'CSE 414', '1.5', 1, '2021-09-13 14:53:21', '2021-09-13 14:53:21'),
(45, 'Thesis / Project I', 'CSE 400', '2.0', 1, '2021-09-13 14:53:45', '2021-09-13 14:53:45'),
(46, 'Compiler Construction', 'CSE 421', '3.0', 1, '2021-09-13 14:54:08', '2021-09-13 14:54:08'),
(47, 'Compiler Construction Lab', 'CSE 422', '1.5', 1, '2021-09-13 14:54:33', '2021-09-13 14:54:33'),
(48, 'Computer Graphics', 'CSE 423', '3.0', 1, '2021-09-13 14:54:58', '2021-09-13 14:54:58'),
(49, 'Computer Graphics Lab', 'CSE 424', '1.5', 1, '2021-09-13 14:55:36', '2021-09-13 14:55:36'),
(50, 'Thesis/ Project II', 'CSE 402', '2.0', 1, '2021-09-13 14:55:58', '2021-09-13 14:55:58'),
(51, 'Digital Signal Processing', 'CSE 431', '3.0', 1, '2021-09-13 14:56:23', '2021-09-13 14:56:23'),
(52, 'Digital Signal Processing Lab', 'CSE 432', '1.5', 1, '2021-09-13 14:56:44', '2021-09-13 14:56:44'),
(53, 'Viva Voce', 'CSE 404', '1.5', 1, '2021-09-13 14:57:08', '2021-09-13 14:57:08'),
(54, 'Introduction to Business', 'BUS- 111', '3.0', 2, '2021-09-16 12:20:35', '2021-09-16 12:20:35'),
(55, 'Introduction to Computer Applications', 'CSE- 113', '3.0', 2, '2021-09-16 12:21:00', '2021-09-16 12:21:00'),
(56, 'Fundamentals of Management', 'MGT- 115', '3.0', 2, '2021-09-16 12:21:23', '2021-09-16 12:21:23'),
(57, 'Principles of Accounting', 'ACC- 121', '3.0', 2, '2021-09-16 12:22:02', '2021-09-16 12:22:02'),
(58, 'Bangladesh Studies', 'UGE-123', '3.0', 2, '2021-09-16 12:22:25', '2021-09-16 12:22:25'),
(59, 'Principles of Business Finance', 'FIN- 125', '3.0', 2, '2021-09-16 12:22:46', '2021-09-16 12:22:46'),
(60, 'Functional English-1', 'ENG- 127', '3.0', 2, '2021-09-16 12:23:08', '2021-09-16 12:23:08'),
(61, 'Functional English-2', 'ENG- 131', '3.0', 2, '2021-09-16 12:23:30', '2021-09-16 12:23:30'),
(62, 'Principles of Marketing', 'MKT- 133', '3.0', 2, '2021-09-16 12:23:54', '2021-09-16 12:23:54'),
(63, 'Industrial Sociology and Psychology', 'UGE- 135', '3.0', 2, '2021-09-16 12:24:15', '2021-09-16 12:24:15'),
(64, 'Basic Mathematics', 'MAT- 137', '3.0', 2, '2021-09-16 12:24:45', '2021-09-16 12:24:45'),
(65, 'Mathematics for Business Decisions (Prerequisite MAT-137)', 'MAT- 211', '3.0', 2, '2021-09-16 12:25:15', '2021-09-16 12:25:15'),
(66, 'Business Communication', 'BUS- 213', '3.0', 2, '2021-09-16 12:25:39', '2021-09-16 12:25:39'),
(67, 'Intermediate Accounting (Pre-requisite ACC- 121)', 'ACC- 215', '3.0', 2, '2021-09-16 12:25:59', '2021-09-16 12:25:59'),
(68, 'Microeconomics', 'ECO- 217', '3.0', 2, '2021-09-16 12:26:18', '2021-09-16 12:26:18'),
(69, 'Macroeconomics (Pre-requisite ECO- 217)', 'ECO- 221', '3.0', 2, '2021-09-16 12:26:42', '2021-09-16 12:26:42'),
(70, 'Ecology and Environment', 'UGE- 223', '3.0', 2, '2021-09-16 12:27:04', '2021-09-16 12:27:04'),
(71, 'Cost Accounting', 'ACC- 225', '3.0', 2, '2021-09-16 12:27:35', '2021-09-16 12:27:35'),
(72, 'Business Statistics-1', 'STA- 227', '3.0', 2, '2021-09-16 12:27:56', '2021-09-16 12:27:56'),
(73, 'Business Statistics- 2 (Prerequisite STA- 227)', 'STA- 231', '3.0', 2, '2021-09-16 12:28:32', '2021-09-16 12:28:32'),
(74, 'Banking and Insurance', 'FIN- 233', '3.0', 2, '2021-09-16 12:28:51', '2021-09-16 12:28:51'),
(75, 'Management Accounting', 'ACC- 235', '3.0', 2, '2021-09-16 12:29:13', '2021-09-16 12:29:13'),
(76, 'Organizational Behavior', 'MGT- 311', '3.0', 2, '2021-09-16 12:29:42', '2021-09-16 12:29:42'),
(77, 'Taxation in Bangladesh', 'BUS -315', '3.0', 2, '2021-09-16 12:30:05', '2021-09-16 12:30:05'),
(78, 'Business law', 'BUS- 317', '3.0', 2, '2021-09-16 12:30:25', '2021-09-16 12:30:25'),
(79, 'Human Resource Management', 'HRM-321', '3.0', 2, '2021-09-16 12:32:50', '2021-09-16 12:32:50'),
(80, 'Entrepreneurship Development', 'BUS- 323', '3.0', 2, '2021-09-16 12:33:09', '2021-09-16 12:33:09'),
(81, 'Strategic Management', 'BUS- 327', '3.0', 2, '2021-09-16 12:33:31', '2021-09-16 12:33:31'),
(82, 'Financial Management', 'FIN- 331', '3.0', 2, '2021-09-16 12:33:52', '2021-09-16 12:33:52'),
(83, 'Jurisprudence-1', 'LAW – 101', '3.0', 3, '2021-09-16 12:35:00', '2021-09-16 12:35:00'),
(84, 'Muslim Law-1', 'LAW – 103', '3.0', 3, '2021-09-16 12:35:24', '2021-09-16 12:35:24'),
(85, 'English Language -1', 'ENG – 101', '3.0', 3, '2021-09-16 12:35:46', '2021-09-16 12:35:46'),
(86, 'Computer Skill', 'CSE – 100', '3.0', 3, '2021-09-16 12:36:07', '2021-09-16 12:36:07'),
(87, 'Jurisprudence-II', 'LAW – 105', '3.0', 3, '2021-09-16 12:36:57', '2021-09-16 12:36:57'),
(88, 'Law of Contract-1', 'LAW – 107', '3.0', 3, '2021-09-16 12:37:19', '2021-09-16 12:37:19'),
(89, 'Muslim Law-II', 'LAW – 109', '3.0', 3, '2021-09-16 12:37:49', '2021-09-16 12:37:49'),
(90, 'English Language -II', 'ENG – 103', '3.0', 3, '2021-09-16 12:38:17', '2021-09-16 12:38:17'),
(91, 'Law of Contract-II', 'LAW – 111', '2.0', 3, '2021-09-16 12:38:43', '2021-09-16 12:38:43'),
(92, 'Law of Tort', 'LAW – 113', '3.0', 3, '2021-09-16 12:41:14', '2021-09-16 12:41:14'),
(93, 'Hindu & Roman Law', 'LAW – 115', '3.0', 3, '2021-09-16 12:41:37', '2021-09-16 12:41:37'),
(94, 'Bangladesh Studies', 'GED* – 101', '3.0', 3, '2021-09-16 12:41:58', '2021-09-16 12:41:58'),
(95, 'Constitutional Law of Bangladesh-1', 'LAW – 201', '3.0', 3, '2021-09-16 12:42:25', '2021-09-16 12:42:25'),
(96, 'Constitutional Law of UK & USA', 'LAW – 203', '3.0', 3, '2021-09-16 12:42:45', '2021-09-16 12:42:45'),
(97, 'Government & Politics', 'LAW – 205', '3.0', 3, '2021-09-16 12:43:08', '2021-09-16 12:43:08'),
(98, 'Legal History and Legal system of Bangladesh', 'LAW - 207', '3.0', 3, '2021-09-16 12:43:34', '2021-09-16 12:43:34'),
(99, 'Labour and Industrial Law – II', 'LAW – 217', '2.0', 3, '2021-09-16 12:44:00', '2021-09-16 12:44:00'),
(100, 'Company Law and Partnership Act', 'LAW – 219', '3.0', 3, '2021-09-16 12:44:24', '2021-09-16 12:44:24'),
(101, 'Land Laws of Bangladesh – II', 'LAW – 221', '3.0', 3, '2021-09-16 12:45:07', '2021-09-16 12:45:07'),
(102, 'Fundamentals of Computers', 'CSE 111', '3.0', 1, '2021-09-19 11:19:17', '2021-09-19 11:19:17'),
(103, 'Muslim Law-1', 'LAW – 103', '2.0', 3, '2021-09-27 14:39:41', '2021-09-27 14:39:41'),
(104, 'Muslim Law-1', 'LAW – 103', '2.0', 3, '2021-09-27 14:40:37', '2021-09-27 14:40:37'),
(105, 'Strategic Management', 'BUS- 327', '2.0', 2, '2021-09-27 14:45:41', '2021-09-27 14:45:41'),
(106, 'Strategic Management', 'BUS- 327', '3.0', 2, '2021-09-27 14:45:45', '2021-09-27 14:45:45'),
(107, 'Data Structure', 'CSE 216', '3.0', 1, '2021-09-28 15:42:07', '2021-09-28 15:42:07');

-- --------------------------------------------------------

--
-- Table structure for table `crform`
--

CREATE TABLE `crform` (
  `id` bigint UNSIGNED NOT NULL,
  `course_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `types` tinyint NOT NULL DEFAULT '1' COMMENT '1=regular,2=drop',
  `status` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `crform`
--

INSERT INTO `crform` (`id`, `course_id`, `user_id`, `types`, `status`, `created_at`, `updated_at`) VALUES
(18, 2, 60, 1, 1, '2021-11-22 14:01:19', '2021-11-23 16:08:18'),
(19, 3, 64, 1, 1, '2021-11-22 14:01:19', '2021-11-23 16:07:50'),
(20, 3, 62, 1, 1, '2021-11-22 14:01:19', '2021-11-23 16:08:05'),
(21, 54, 57, 1, 0, '2021-11-22 14:01:20', '2021-11-22 14:01:20'),
(22, 54, 58, 1, 0, '2021-11-22 14:02:07', '2021-11-22 14:02:07'),
(23, 54, 56, 1, 0, '2021-11-22 14:02:07', '2021-11-22 14:02:07'),
(24, 56, 61, 1, 0, '2021-11-22 14:02:07', '2021-11-23 15:31:51'),
(25, 55, 59, 1, 0, '2021-11-22 16:02:23', '2021-11-24 08:19:13'),
(26, 3, 59, 1, 1, '2021-11-22 14:01:19', '2021-12-24 14:07:09'),
(27, 57, 59, 1, 0, '2021-11-22 16:02:23', '2021-11-24 01:36:21'),
(28, 64, 58, 2, 0, '2021-11-23 15:14:25', '2021-11-23 15:32:02'),
(29, 65, 58, 2, 2, '2021-11-23 15:14:25', '2021-11-24 01:22:38'),
(30, 66, 58, 2, 1, '2021-11-23 15:14:25', '2021-11-24 01:22:17'),
(31, 83, 61, 1, 1, '2021-11-23 16:00:43', '2021-11-23 16:05:50'),
(32, 84, 61, 1, 2, '2021-11-23 16:00:43', '2021-11-23 16:06:06'),
(33, 85, 61, 1, 0, '2021-11-23 16:00:43', '2021-11-23 16:00:43'),
(34, 100, 64, 1, 0, '2021-11-23 16:05:10', '2021-11-23 16:05:10'),
(35, 101, 64, 1, 0, '2021-11-23 16:05:10', '2021-11-23 16:05:10'),
(36, 103, 64, 1, 0, '2021-11-23 16:05:10', '2021-11-23 16:05:10'),
(37, 17, 60, 1, 1, '2021-11-23 16:07:16', '2021-11-23 16:08:53'),
(38, 18, 60, 1, 0, '2021-11-23 16:07:16', '2021-11-23 16:07:16'),
(39, 19, 60, 1, 1, '2021-11-23 16:07:16', '2021-12-24 13:53:05'),
(40, 20, 60, 1, 1, '2021-11-23 16:07:16', '2021-12-24 13:52:52'),
(44, 107, 57, 1, 1, '2021-12-19 12:12:01', '2021-12-24 13:49:13'),
(45, 56, 60, 1, 1, '2021-11-22 14:02:07', '2021-11-23 15:31:51');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'CSE', '2021-08-23 14:48:47', '2021-08-23 14:48:47'),
(2, 'BBA', '2021-09-13 13:31:21', '2021-09-13 13:31:21'),
(3, 'LAW', '2021-09-13 13:31:28', '2021-09-13 13:31:28'),
(4, 'ENGLISH', '2021-09-13 13:31:32', '2021-09-13 13:31:32'),
(5, 'x\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` bigint UNSIGNED NOT NULL,
  `exam_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_date` date NOT NULL,
  `exam_start_time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_end_time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hall_id` bigint UNSIGNED NOT NULL,
  `course_id` bigint UNSIGNED NOT NULL,
  `semester` bigint NOT NULL DEFAULT '0',
  `department_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `total_student` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `exam_name`, `exam_date`, `exam_start_time`, `exam_end_time`, `hall_id`, `course_id`, `semester`, `department_id`, `created_at`, `updated_at`, `total_student`) VALUES
(11, '55', '2021-07-22', '13:00', '23:00', 1, 56, 3, 2, '2021-12-24 10:15:22', '2021-12-24 10:15:22', 12),
(12, '54', '2021-07-22', '13:00', '23:00', 1, 54, 3, 1, '2021-12-24 10:17:33', '2021-12-24 10:17:33', 12);

-- --------------------------------------------------------

--
-- Table structure for table `exam_schedule_in_students`
--

CREATE TABLE `exam_schedule_in_students` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `exam_id` bigint UNSIGNED NOT NULL,
  `is_fill_up` tinyint NOT NULL DEFAULT '0' COMMENT 'is fill up=1,is not fill up=0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam_schedule_in_teachers`
--

CREATE TABLE `exam_schedule_in_teachers` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `exam_id` bigint UNSIGNED NOT NULL,
  `sit_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `halls`
--

CREATE TABLE `halls` (
  `id` bigint UNSIGNED NOT NULL,
  `hall_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_sit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `halls`
--

INSERT INTO `halls` (`id`, `hall_number`, `location`, `total_sit`, `floor`, `created_at`, `updated_at`) VALUES
(1, '1', 'asd', '10', '2nd', '2021-08-23 15:00:40', '2021-08-23 15:00:40'),
(2, '3', '4321', '20', '3rd', '2021-09-19 11:18:25', '2021-09-19 11:18:25'),
(3, '3', 'ewq', '20', '2nd', '2021-09-28 15:41:37', '2021-09-28 15:41:37'),
(4, '501', 'East', '40', '5th', '2021-12-10 13:31:39', '2021-12-10 13:31:39');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(15, '2014_10_12_000000_create_users_table', 1),
(16, '2014_10_12_100000_create_password_resets_table', 1),
(17, '2019_08_19_000000_create_failed_jobs_table', 1),
(18, '2021_07_21_202215_create_sessions_table', 1),
(19, '2021_07_22_190020_create_semesters_table', 1),
(20, '2021_07_22_190058_create_departments_table', 1),
(21, '2021_07_22_190120_create_teachers_table', 1),
(22, '2021_07_22_190136_create_students_table', 1),
(23, '2021_07_22_190205_create_halls_table', 1),
(24, '2021_07_22_190232_create_courses_table', 1),
(25, '2021_07_22_190255_create_exams_table', 1),
(26, '2021_07_22_190355_create_exam_schedule_in_students_table', 1),
(27, '2021_07_22_190432_create_exam_schedule_in_teachers_table', 1),
(28, '2021_07_22_190507_create_sit_generators_table', 1),
(31, '2021_09_13_215528_create_offercourses', 2),
(32, '2021_10_05_200655_create__users_crform', 3),
(34, '2021_10_05_201844_create_crform_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `offercourses`
--

CREATE TABLE `offercourses` (
  `id` bigint UNSIGNED NOT NULL,
  `semester_id` bigint UNSIGNED NOT NULL,
  `session_id` bigint UNSIGNED NOT NULL,
  `course_id` bigint UNSIGNED NOT NULL,
  `department_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$h0wHQuhgX8G3y.sY1QuPLuvaFWN/DxLhEj5b.pBkAvZb17GL7ebkK', '2021-12-04 12:15:07');

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '11', '2021-08-23 14:49:12', '2021-08-23 14:49:12'),
(2, '1', NULL, NULL),
(3, '2', NULL, NULL),
(4, '4', '2021-09-16 15:41:07', '2021-09-16 15:41:07'),
(5, '5', '2021-09-16 15:41:11', '2021-09-16 15:41:11'),
(6, '6', '2021-09-16 15:41:15', '2021-09-16 15:41:15'),
(7, '1st', '2021-09-17 11:20:43', '2021-09-17 11:20:43'),
(8, '2nd', '2021-09-17 11:20:48', '2021-09-17 11:20:48'),
(9, '3rd', '2021-09-17 11:20:54', '2021-09-17 11:20:54'),
(10, '4th', '2021-09-17 11:21:00', '2021-09-17 11:21:00'),
(11, '5th', '2021-09-17 11:21:07', '2021-09-17 11:21:07'),
(12, '6th', '2021-09-17 11:21:13', '2021-09-17 11:21:13'),
(13, '7th', '2021-09-17 11:22:57', '2021-09-17 11:22:57'),
(14, '8th', '2021-09-17 11:23:02', '2021-09-17 11:23:02'),
(15, '9th', '2021-09-17 11:23:07', '2021-09-17 11:23:07'),
(16, '11th', '2021-09-17 11:23:13', '2021-09-17 11:23:13'),
(17, '12th', '2021-09-17 11:23:19', '2021-09-17 11:23:19');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` bigint UNSIGNED NOT NULL,
  `session` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `session`, `created_at`, `updated_at`) VALUES
(1, '2018', '2021-08-23 14:49:16', '2021-08-23 14:49:16'),
(2, '2021', '2021-09-16 13:41:31', '2021-09-16 13:41:31'),
(3, '2020', '2021-09-16 13:41:41', '2021-09-16 13:41:41'),
(4, 'spring-21', '2021-09-17 11:24:15', '2021-09-17 11:24:15'),
(5, 'summer-21', '2021-09-17 11:24:28', '2021-09-17 11:24:28'),
(6, 'fall-21', '2021-09-17 11:24:39', '2021-09-17 11:24:39'),
(7, 'spring-20', '2021-09-17 11:24:57', '2021-09-17 11:24:57'),
(8, 'summer-20', '2021-09-17 11:25:06', '2021-09-17 11:25:06'),
(9, 'fall-20', '2021-09-17 11:25:17', '2021-09-17 11:25:17'),
(10, 'spring-22', '2021-09-19 11:19:49', '2021-09-19 11:19:49'),
(11, 'spring-22', '2021-09-28 15:42:28', '2021-09-28 15:42:28');

-- --------------------------------------------------------

--
-- Table structure for table `sit_generators`
--

CREATE TABLE `sit_generators` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `exam_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `semester_id` bigint UNSIGNED NOT NULL,
  `session_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint UNSIGNED NOT NULL,
  `department_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` int NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0' COMMENT '0=false,1=true',
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` tinyint NOT NULL DEFAULT '1' COMMENT '1=male,2=female,3=other',
  `rules` tinyint NOT NULL DEFAULT '1' COMMENT '1=student,2=teacher,3=admin',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `department`, `status`, `phone`, `image`, `gender`, `rules`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, 'admin', 'admin@gmail.com', NULL, '$2y$10$ASioro9s0IIbvdg6ceejE.jDh2loPgU0GQUkBVN1aNRULEhOh4qDW', 0, 1, NULL, NULL, 1, 3, NULL, '2021-08-23 13:51:59', '2021-08-23 13:51:59'),
(54, 'Teacher One', 'teacher1@gmail.com', NULL, '$2y$10$IuG2tkIAHFjN2t5N3w4zL.SQW.7Oybec/a4mNPedMYr2r35ghcmr6', 1, 1, '09876543212345678', NULL, 2, 2, NULL, '2021-11-22 13:37:14', '2021-11-22 13:37:14'),
(55, 'Teacher Two', 'teacher2@gmail.com', NULL, '$2y$10$it8rxotZdQD1aGYutbbIYe0ZkX9Iuq7wSWcsNte6XJl3UDogpFTj.', 2, 1, '876543212345678909', NULL, 1, 2, NULL, '2021-11-22 13:54:04', '2021-11-22 13:54:04'),
(56, 'dfghjk', 'kjhgf@gmail.com', NULL, '$2y$10$rR3n7VpNp7aBBxCMod4cpuYK/JJB6W20yO8AjBoxdkJQB2ajN0unC', 5, 1, '9876543456', NULL, 1, 1, NULL, '2021-11-22 13:56:01', '2021-11-22 13:56:01'),
(57, 'Student one', 'student1@gmail.com', NULL, '$2y$10$GHz3tM1abJ4NxSkJgHZaTe.cq9ODGRgkgLFJoo64325f905zSwdYi', 1, 1, '0987654323456789', NULL, 2, 1, NULL, '2021-11-22 13:59:41', '2021-11-22 13:59:41'),
(58, 'Student two', 'student2@gmail.com', NULL, '$2y$10$WxUau4mrGgQ66/0h8BQoLOlu/jYSFZb5j.6iUxTqvlnYZ3/DWGJ6C', 2, 1, '0987654345678', NULL, 1, 1, NULL, '2021-11-22 14:00:24', '2021-11-22 14:00:24'),
(59, 'Samia Akther', 'samiamunni315@gmail.com', NULL, '$2y$10$6zpcw.0KIR9fhostJmGEX.t.sbEdqnaOC183GDDH5jAeL701BOFWa', 2, 1, '98765433456789', NULL, 2, 1, NULL, '2021-11-22 15:58:09', '2021-11-22 15:58:09'),
(60, 'Rima Akther', 'rima.neub@gmail.com', NULL, '$2y$10$PJrtXNaZLoUvK27AXQR/ne7va3ou2c3SIC2977fm27mtN72WjDSPi', 1, 1, '09876543212345678', NULL, 2, 1, NULL, '2021-11-22 15:59:29', '2021-11-22 15:59:29'),
(61, 'Fateha Delwar', 'amethyst.fountain01@gmail.com', NULL, '$2y$10$GNrKyfQL1LfBAYJyA.jC5eb5PbAEiub1At9fiP07a703EMovfZE4u', 3, 1, '9876543234567', NULL, 2, 1, NULL, '2021-11-22 16:00:16', '2021-11-22 16:00:16'),
(62, 'Teacher Three', 'teacher3@gmail.com', NULL, '$2y$10$7HdlH1BJ7ZrksX43qbRvfuadwK0J.TYXOoElUKE45G/E/uzExj1AS', 3, 1, '9876543212345678', NULL, 1, 2, NULL, '2021-11-22 16:01:09', '2021-11-22 16:01:09'),
(64, 'Student Five', 'student5@gmail.com', NULL, '$2y$10$7ehMs1Aj4K4pKcI8PFVcKOJe8L4P9cQm/entHFQ8/zFPrITf0M8dG', 3, 1, '09876543234567', NULL, 1, 1, NULL, '2021-11-23 16:03:25', '2021-11-23 16:03:25');

-- --------------------------------------------------------

--
-- Table structure for table `_users_crform`
--

CREATE TABLE `_users_crform` (
  `id` bigint UNSIGNED NOT NULL,
  `course_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `type` tinyint NOT NULL DEFAULT '1' COMMENT '1=regular,2=drop',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_department_id_foreign` (`department_id`);

--
-- Indexes for table `crform`
--
ALTER TABLE `crform`
  ADD PRIMARY KEY (`id`),
  ADD KEY `crform_course_id_foreign` (`course_id`),
  ADD KEY `crform_user_id_foreign` (`user_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exams_hall_id_foreign` (`hall_id`),
  ADD KEY `exams_course_id_foreign` (`course_id`);

--
-- Indexes for table `exam_schedule_in_students`
--
ALTER TABLE `exam_schedule_in_students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_schedule_in_students_user_id_foreign` (`user_id`),
  ADD KEY `exam_schedule_in_students_exam_id_foreign` (`exam_id`);

--
-- Indexes for table `exam_schedule_in_teachers`
--
ALTER TABLE `exam_schedule_in_teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_schedule_in_teachers_user_id_foreign` (`user_id`),
  ADD KEY `exam_schedule_in_teachers_exam_id_foreign` (`exam_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `halls`
--
ALTER TABLE `halls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offercourses`
--
ALTER TABLE `offercourses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `offercourses_semester_id_foreign` (`semester_id`),
  ADD KEY `offercourses_session_id_foreign` (`session_id`),
  ADD KEY `offercourses_course_id_foreign` (`course_id`),
  ADD KEY `offercourses_department_id_foreign` (`department_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sit_generators`
--
ALTER TABLE `sit_generators`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sit_generators_user_id_foreign` (`user_id`),
  ADD KEY `sit_generators_exam_id_foreign` (`exam_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `students_user_id_foreign` (`user_id`),
  ADD KEY `students_semester_id_foreign` (`semester_id`),
  ADD KEY `students_session_id_foreign` (`session_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teachers_department_id_foreign` (`department_id`),
  ADD KEY `teachers_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `_users_crform`
--
ALTER TABLE `_users_crform`
  ADD PRIMARY KEY (`id`),
  ADD KEY `_users_crform_course_id_foreign` (`course_id`),
  ADD KEY `_users_crform_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `crform`
--
ALTER TABLE `crform`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `exam_schedule_in_students`
--
ALTER TABLE `exam_schedule_in_students`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_schedule_in_teachers`
--
ALTER TABLE `exam_schedule_in_teachers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `halls`
--
ALTER TABLE `halls`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `offercourses`
--
ALTER TABLE `offercourses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sit_generators`
--
ALTER TABLE `sit_generators`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `_users_crform`
--
ALTER TABLE `_users_crform`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `crform`
--
ALTER TABLE `crform`
  ADD CONSTRAINT `crform_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `crform_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `exams`
--
ALTER TABLE `exams`
  ADD CONSTRAINT `exams_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exams_hall_id_foreign` FOREIGN KEY (`hall_id`) REFERENCES `halls` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `exam_schedule_in_students`
--
ALTER TABLE `exam_schedule_in_students`
  ADD CONSTRAINT `exam_schedule_in_students_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_schedule_in_students_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `exam_schedule_in_teachers`
--
ALTER TABLE `exam_schedule_in_teachers`
  ADD CONSTRAINT `exam_schedule_in_teachers_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_schedule_in_teachers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `offercourses`
--
ALTER TABLE `offercourses`
  ADD CONSTRAINT `offercourses_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `offercourses_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `offercourses_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `offercourses_session_id_foreign` FOREIGN KEY (`session_id`) REFERENCES `sessions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sit_generators`
--
ALTER TABLE `sit_generators`
  ADD CONSTRAINT `sit_generators_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sit_generators_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `students_session_id_foreign` FOREIGN KEY (`session_id`) REFERENCES `sessions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `students_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `teachers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `_users_crform`
--
ALTER TABLE `_users_crform`
  ADD CONSTRAINT `_users_crform_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `_users_crform_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
