-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 17, 2020 at 08:10 PM
-- Server version: 10.2.26-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `viholddep_edu100`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_infos`
--

CREATE TABLE `academic_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `students_id` int(10) UNSIGNED NOT NULL,
  `institution` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `board` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pass_year` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `symbol_no` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percentage` int(11) DEFAULT NULL,
  `division_grade` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `major_subjects` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sorting_order` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `account_categories`
--

CREATE TABLE `account_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `ac_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ac_type` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_categories`
--

INSERT INTO `account_categories` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `ac_name`, `ac_type`, `status`) VALUES
(1, '2019-10-10 12:34:04', '2019-10-10 12:34:04', 1, NULL, 'Bank Accounts', '', 1),
(2, '2019-10-10 12:34:04', '2019-10-10 12:34:04', 1, NULL, 'Bank OCC A/c', '', 1),
(3, '2019-10-10 12:34:04', '2019-10-10 12:34:04', 1, NULL, 'Bank OD A/c', '', 1),
(4, '2019-10-10 12:34:04', '2019-10-10 12:34:04', 1, NULL, 'Branch / Divisions', '', 1),
(5, '2019-10-10 12:34:04', '2019-10-10 12:34:04', 1, NULL, 'Cash-in-Hand', '', 1),
(6, '2019-10-10 12:34:04', '2019-10-10 12:34:04', 1, NULL, 'Current Assets', '', 1),
(7, '2019-10-10 12:34:04', '2019-10-10 12:34:04', 1, NULL, 'Current Liabilities', '', 1),
(8, '2019-10-10 12:34:04', '2019-10-10 12:34:04', 1, NULL, 'Direct Expenses', '', 1),
(9, '2019-10-10 12:34:04', '2019-10-10 12:34:04', 1, NULL, 'Direct Incomes', '', 1),
(10, '2019-10-10 12:34:04', '2019-10-10 12:34:04', 1, NULL, 'Duties & Taxes', '', 1),
(11, '2019-10-10 12:34:04', '2019-10-10 12:34:04', 1, NULL, 'Expenses (Direct)', '', 1),
(12, '2019-10-10 12:34:04', '2019-10-10 12:34:04', 1, NULL, 'Expenses (Indirect)', '', 1),
(13, '2019-10-10 12:34:04', '2019-10-10 12:34:04', 1, NULL, 'Fixed Assets', '', 1),
(14, '2019-10-10 12:34:04', '2019-10-10 12:34:04', 1, NULL, 'Income (Direct)', '', 1),
(15, '2019-10-10 12:34:04', '2019-10-10 12:34:04', 1, NULL, 'Income (Indirect)', '', 1),
(16, '2019-10-10 12:34:04', '2019-10-10 12:34:04', 1, NULL, 'Indirect Expenses', '', 1),
(17, '2019-10-10 12:34:04', '2019-10-10 12:34:04', 1, NULL, 'Indirect Incomes', '', 1),
(18, '2019-10-10 12:34:04', '2019-10-10 12:34:04', 1, NULL, 'Investments', '', 1),
(19, '2019-10-10 12:34:04', '2019-10-10 12:34:04', 1, NULL, 'Loans & Advances (Assets)', '', 1),
(20, '2019-10-10 12:34:04', '2019-10-10 12:34:04', 1, NULL, 'Loans (Liability)', '', 1),
(21, '2019-10-10 12:34:04', '2019-10-10 12:34:04', 1, NULL, 'Misc. Expenses (ASSET)', '', 1),
(22, '2019-10-10 12:34:04', '2019-10-10 12:34:04', 1, NULL, 'Provisions', '', 1),
(23, '2019-10-10 12:34:04', '2019-10-10 12:34:04', 1, NULL, 'Purchase Accounts', '', 1),
(24, '2019-10-10 12:34:04', '2019-10-10 12:34:04', 1, NULL, 'Reserves & Surplus', '', 1),
(25, '2019-10-10 12:34:04', '2019-10-10 12:34:04', 1, NULL, 'Retained Earnings', '', 1),
(26, '2019-10-10 12:34:04', '2019-10-10 12:34:04', 1, NULL, 'Secured Loans', '', 1),
(27, '2019-10-10 12:34:04', '2019-10-10 12:34:04', 1, NULL, 'Stock-in-Hand', '', 1),
(28, '2019-10-10 12:34:04', '2019-10-10 12:34:04', 1, NULL, 'Sundry Creditors', '', 1),
(29, '2019-10-10 12:34:04', '2019-10-10 12:34:04', 1, NULL, 'Sundry Debtors', '', 1),
(30, '2019-10-10 12:34:04', '2019-10-10 12:34:04', 1, NULL, 'Suspense A/c', '', 1),
(31, '2019-10-10 12:34:04', '2019-10-10 12:34:04', 1, NULL, 'Unsecured Loans', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `addressinfos`
--

CREATE TABLE `addressinfos` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `students_id` int(10) UNSIGNED NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temp_address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temp_state` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temp_country` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_1` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_2` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addressinfos`
--

INSERT INTO `addressinfos` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `students_id`, `address`, `state`, `country`, `temp_address`, `temp_state`, `temp_country`, `home_phone`, `mobile_1`, `mobile_2`, `status`) VALUES
(1, '2019-12-11 10:20:07', '2019-12-11 10:20:07', 1, NULL, 2, 'SAHASTRADHARA ROAD', 'UTTARAKHAND', 'INDIA', 'SAHASTRADHARA ROAD', 'UTTARAKHAND', 'INDIA', '963221157', '9988776655', NULL, 1),
(2, '2019-12-11 10:52:09', '2019-12-19 03:17:24', 1, NULL, 4, 'IT PARK', 'UTTARAKHAND', 'INDIA', 'IT PARK', 'UTTARAKHAND', 'INDIA', '9876543210', '9876543210', '9632145870', 1),
(3, '2020-01-02 07:29:03', '2020-01-02 07:29:18', 1, NULL, 5, 'TEST ADDRESS DEHRADUN', 'UTTARAKHAND', 'UNITED KINGDOM', 'TEST ADDRESS DEHRADUN', 'UTTARAKHAND', 'UNITED KINGDOM', '123456', '123456', '123456', 1),
(4, '2020-01-06 04:45:31', '2020-01-06 04:45:31', 1, NULL, 6, 'DEHRADUN', 'UK', 'IND', 'DEHRADUN', 'UK', 'IND', '8881196642', '65345345634', '45634563456345', 1);

-- --------------------------------------------------------

--
-- Table structure for table `alert_settings`
--

CREATE TABLE `alert_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `event` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sms` tinyint(1) NOT NULL DEFAULT 1,
  `email` tinyint(1) NOT NULL DEFAULT 1,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `template` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alert_settings`
--

INSERT INTO `alert_settings` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `event`, `sms`, `email`, `subject`, `template`, `status`) VALUES
(1, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'BirthdayWish', 0, 0, 'Wish Your Birthday Dear', 'Dear {{first_name}}, Sending you smiles for every moment of your special day…Have a wonderful time and a very happy birthday!', 1),
(2, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'StudentRegistration', 0, 0, 'Registration Information', 'Dear {{first_name}}, you are successfully registered in our institution with RegNo.{{reg_no}}. Thank You.', 1),
(3, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'StudentTransfer', 0, 0, 'Transfer Information', 'Dear {{first_name}}, We would like to inform you are successfully transferred to {{semester}}. Thank You.', 1),
(4, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'FeeReceive', 0, 0, 'Fees Receive Information', 'Dear {{first_name}}, We would like to inform you we are successfully received {{amount}} on {{date}}. Thank you for the Deposit.', 1),
(5, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'BalanceFees', 0, 0, 'Balance Fees Information', 'Dear {{first_name}}, you have {{due_amount}} balance fees. please deposit on time. For more info contact the Account Department.', 1),
(6, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'SubjectAttendance', 0, 0, 'Student Subject Wise Attendance Information', 'Dear {{guardian_name}}, your child {{first_name}} was Absent in {{absent_status}} subjects attendance on {{date}}.', 1),
(7, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'StudentAttendance', 0, 0, 'Student Attendance Information', 'Dear Guardian, This is to inform you that {{first_name}} is {{status}} on {{date}}.', 1),
(8, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'StaffAttendance', 0, 0, 'Staff Attendance Information', 'Dear {{first_name}}, This is to inform you are {{status}} on {{date}}.', 1),
(9, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'StaffAbsentNotification', 0, 0, 'Staff Absent Information', 'Dear Sir, This is to inform you following staffs are absent today. {{staffs_name}}', 1),
(10, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'ExamScoreForGuardian', 0, 0, 'Exam Score Information', 'Dear Guardian, {{first_name}} has obtained the following marks in {{exam_mark_detail}}.', 1),
(11, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'ExamScoreForStudent', 0, 0, 'Exam Score Information', 'Dear {{first_name}}, you have obtained following marks in {{exam_mark_detail}}.', 1),
(12, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'LibraryRegistration', 0, 0, 'Library Registration Information', 'Dear {{first_name}}, Congratulation! You are successfully registered in our library.', 1),
(13, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'LibraryReturnPeriodOver', 0, 0, 'Library Clearance Reminder', 'Dear {{first_name}}, We would like to inform you have some books return time period is over. So, please return as soon as possible.', 1),
(14, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'HostelRegistration', 0, 0, 'Hostel Registration Information', 'Dear {{first_name}}, Congratulation! You are successfully registered in our hostel.', 1),
(15, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'HostelShift', 0, 0, 'Hostel Shift Information', 'Dear {{first_name}}, Congratulation! You are successfully shifted in {{new_hostel}}.', 1),
(16, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'HostelLeave', 0, 0, 'Hostel Leave Information', 'Dear {{first_name}}, You are successfully leaving from our hostel. Thank you.', 1),
(17, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'HostelActive', 0, 0, 'Hostel Active Again Information', 'Dear {{first_name}}, You are successfully re-Activated for our hostel service in {{new_hostel}}.', 1),
(18, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'TransportRegistration', 0, 0, 'Transport Service Registration Information', 'Dear {{first_name}}, You are successfully registered for our transport service in {{transport}}.', 1),
(19, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'TransportShift', 0, 0, 'Transport Shift Information', 'Dear {{first_name}}, Congratulation! You are successfully shifted in {{transport}}.', 1),
(20, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'TransportLeave', 0, 0, 'Transport Leave Information', 'Dear {{first_name}}, You are successfully deactivated for transport service. Thank you.', 1),
(21, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'TransportActive', 0, 0, 'Transport Active Again Information', 'Dear {{first_name}}, You are successfully re-Activated for our transport service in {{transport}}.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `years_id` int(10) UNSIGNED NOT NULL,
  `semesters_id` int(10) UNSIGNED NOT NULL,
  `subjects_id` int(10) UNSIGNED NOT NULL,
  `publish_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assignment_answers`
--

CREATE TABLE `assignment_answers` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `assignments_id` int(10) UNSIGNED NOT NULL,
  `students_id` int(10) UNSIGNED NOT NULL,
  `answer_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approve_status` tinyint(1) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `attendees_type` int(11) NOT NULL,
  `link_id` int(10) UNSIGNED NOT NULL,
  `years_id` int(10) UNSIGNED NOT NULL,
  `months_id` int(10) UNSIGNED NOT NULL,
  `day_1` int(11) NOT NULL DEFAULT 0,
  `day_2` int(11) NOT NULL DEFAULT 0,
  `day_3` int(11) NOT NULL DEFAULT 0,
  `day_4` int(11) NOT NULL DEFAULT 0,
  `day_5` int(11) NOT NULL DEFAULT 0,
  `day_6` int(11) NOT NULL DEFAULT 0,
  `day_7` int(11) NOT NULL DEFAULT 0,
  `day_8` int(11) NOT NULL DEFAULT 0,
  `day_9` int(11) NOT NULL DEFAULT 0,
  `day_10` int(11) NOT NULL DEFAULT 0,
  `day_11` int(11) NOT NULL DEFAULT 0,
  `day_12` int(11) NOT NULL DEFAULT 0,
  `day_13` int(11) NOT NULL DEFAULT 0,
  `day_14` int(11) NOT NULL DEFAULT 0,
  `day_15` int(11) NOT NULL DEFAULT 0,
  `day_16` int(11) NOT NULL DEFAULT 0,
  `day_17` int(11) NOT NULL DEFAULT 0,
  `day_18` int(11) NOT NULL DEFAULT 0,
  `day_19` int(11) NOT NULL DEFAULT 0,
  `day_20` int(11) NOT NULL DEFAULT 0,
  `day_21` int(11) NOT NULL DEFAULT 0,
  `day_22` int(11) NOT NULL DEFAULT 0,
  `day_23` int(11) NOT NULL DEFAULT 0,
  `day_24` int(11) NOT NULL DEFAULT 0,
  `day_25` int(11) NOT NULL DEFAULT 0,
  `day_26` int(11) NOT NULL DEFAULT 0,
  `day_27` int(11) NOT NULL DEFAULT 0,
  `day_28` int(11) NOT NULL DEFAULT 0,
  `day_29` int(11) NOT NULL DEFAULT 0,
  `day_30` int(11) NOT NULL DEFAULT 0,
  `day_31` int(11) NOT NULL DEFAULT 0,
  `day_32` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendance_certificates`
--

CREATE TABLE `attendance_certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `students_id` int(10) UNSIGNED NOT NULL,
  `date_of_issue` date NOT NULL,
  `year_of_study` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage_of_attendance` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendance_masters`
--

CREATE TABLE `attendance_masters` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `year` int(10) UNSIGNED NOT NULL,
  `month` int(10) UNSIGNED NOT NULL,
  `day_in_month` int(11) NOT NULL,
  `holiday` int(11) NOT NULL,
  `open` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendance_statuses`
--

CREATE TABLE `attendance_statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_class` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendance_statuses`
--

INSERT INTO `attendance_statuses` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `title`, `display_class`, `status`) VALUES
(1, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'PRESENT', 'btn-primary', 1),
(2, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'ABSENT', 'btn-danger', 1),
(3, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'LATE', 'btn-warning', 1),
(4, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'LEAVE', 'btn-success', 1),
(5, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'HOLIDAY', 'btn-info', 1);

-- --------------------------------------------------------

--
-- Table structure for table `audits`
--

CREATE TABLE `audits` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `event` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auditable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auditable_id` bigint(20) UNSIGNED NOT NULL,
  `old_values` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new_values` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `audits`
--

INSERT INTO `audits` (`id`, `user_type`, `user_id`, `event`, `auditable_type`, `auditable_id`, `old_values`, `new_values`, `url`, `ip_address`, `user_agent`, `tags`, `created_at`, `updated_at`) VALUES
(1, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":null,\"last_login_ip\":null}', '{\"last_login_at\":\"2019-12-09 10:37:51\",\"last_login_ip\":\"127.0.0.1\"}', 'http://127.0.0.1:8001/login', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-09 08:37:51', '2019-12-09 08:37:51'),
(2, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-09 10:37:51\"}', '{\"last_login_at\":\"2019-12-10 10:01:29\"}', 'http://127.0.0.1:8000/login', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-10 08:01:29', '2019-12-10 08:01:29'),
(3, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-10 10:01:29\"}', '{\"last_login_at\":\"2019-12-10 12:05:54\"}', 'http://127.0.0.1:8000/login', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-10 10:05:54', '2019-12-10 10:05:54'),
(4, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-10 12:05:54\"}', '{\"last_login_at\":\"2019-12-10 12:07:29\"}', 'http://127.0.0.1:8002/login', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-10 10:07:29', '2019-12-10 10:07:29'),
(5, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-10 12:07:29\"}', '{\"last_login_at\":\"2019-12-10 12:08:57\"}', 'http://127.0.0.1:8000/login', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-10 10:08:57', '2019-12-10 10:08:57'),
(6, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-10 12:08:57\"}', '{\"last_login_at\":\"2019-12-10 13:17:20\"}', 'http://127.0.0.1:8000/login', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-10 11:17:20', '2019-12-10 11:17:20'),
(7, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-10 13:17:20\"}', '{\"last_login_at\":\"2019-12-10 13:18:55\"}', 'http://127.0.0.1:8002/login', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-10 11:18:55', '2019-12-10 11:18:55'),
(8, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-10 13:18:55\"}', '{\"last_login_at\":\"2019-12-10 13:19:22\"}', 'http://127.0.0.1:8000/login', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-10 11:19:22', '2019-12-10 11:19:22'),
(9, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-10 13:19:22\"}', '{\"last_login_at\":\"2019-12-11 06:42:26\"}', 'http://127.0.0.1:8000/login', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 04:42:26', '2019-12-11 04:42:26'),
(10, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-11 06:42:26\"}', '{\"last_login_at\":\"2019-12-11 07:09:11\"}', 'http://127.0.0.1:8000/login', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 05:09:11', '2019-12-11 05:09:11'),
(11, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-11 07:09:11\"}', '{\"last_login_at\":\"2019-12-11 08:01:17\"}', 'http://127.0.0.1:8000/login', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 06:01:17', '2019-12-11 06:01:17'),
(12, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-11 08:01:17\"}', '{\"last_login_at\":\"2019-12-11 08:45:03\"}', 'http://127.0.0.1:8000/login', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 06:45:03', '2019-12-11 06:45:03'),
(13, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-11 08:45:03\"}', '{\"last_login_at\":\"2019-12-11 08:51:16\"}', 'http://127.0.0.1:8000/login', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 06:51:16', '2019-12-11 06:51:16'),
(14, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-11 08:51:16\"}', '{\"last_login_at\":\"2019-12-11 08:51:37\"}', 'http://127.0.0.1:8001/login', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 06:51:37', '2019-12-11 06:51:37'),
(15, 'App\\User', 1, 'created', 'App\\Models\\StaffDesignation', 1, '[]', '{\"title\":\"LECTURER\",\"created_by\":1,\"id\":1}', 'http://127.0.0.1:8001/staff/designation/store', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 06:56:45', '2019-12-11 06:56:45'),
(16, 'App\\User', 1, 'created', 'App\\Models\\Staff', 1, '[]', '{\"reg_no\":\"54564\",\"join_date\":\"2019-12-11\",\"designation\":\"1\",\"first_name\":\"FSDFSD\",\"middle_name\":null,\"last_name\":\"FSDFS\",\"father_name\":null,\"mother_name\":null,\"date_of_birth\":\"2019-12-11\",\"gender\":\"MALE\",\"blood_group\":null,\"nationality\":\"SDFSD\",\"mother_tongue\":null,\"email\":\"STAFF@GMAIL.COM\",\"home_phone\":null,\"mobile_1\":\"7878788978\",\"mobile_2\":null,\"address\":\"DDS FDFSD\",\"state\":\"UK\",\"country\":\"INDIA\",\"temp_address\":\"DDS FDFSD\",\"temp_state\":\"UK\",\"temp_country\":\"INDIA\",\"qualification\":\"BED\",\"experience\":\"5\",\"experience_info\":null,\"other_info\":null,\"created_by\":1,\"staff_image\":\"\",\"id\":1}', 'http://127.0.0.1:8001/staff/store', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 06:59:09', '2019-12-11 06:59:09'),
(17, 'App\\User', 1, 'created', 'App\\Models\\Faculty', 1, '[]', '{\"faculty\":\"BTECH\",\"faculty_code\":\"BTECH\",\"created_by\":1,\"id\":1}', 'http://127.0.0.1:8001/faculty/store', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 07:02:14', '2019-12-11 07:02:14'),
(18, 'App\\User', 1, 'created', 'App\\Models\\GradingType', 1, '[]', '{\"title\":\"GRADE\",\"created_by\":1,\"slug\":\"GRADE\",\"id\":1}', 'http://127.0.0.1:8001/grading/store', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 07:02:58', '2019-12-11 07:02:58'),
(19, 'App\\User', 1, 'created', 'App\\Models\\GradingScale', 1, '[]', '{\"gradingType_id\":1,\"name\":\"A\",\"percentage_from\":\"1\",\"percentage_to\":\"100\",\"grade_point\":\"10\",\"description\":\"GGFDG\",\"created_by\":1,\"id\":1}', 'http://127.0.0.1:8001/grading/store', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 07:02:58', '2019-12-11 07:02:58'),
(20, 'App\\User', 1, 'created', 'App\\Models\\Subject', 1, '[]', '{\"title\":\"CS\",\"code\":\"CS101\",\"full_mark_theory\":\"2\",\"pass_mark_theory\":\"2\",\"full_mark_practical\":\"2\",\"pass_mark_practical\":\"2\",\"credit_hour\":\"121\",\"sub_type\":\"Optional\",\"class_type\":\"Theory\",\"staff_id\":\"1\",\"description\":\"DF SDF\",\"created_by\":1,\"id\":1}', 'http://127.0.0.1:8001/subject/store', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 07:03:52', '2019-12-11 07:03:52'),
(21, 'App\\User', 1, 'created', 'App\\Models\\Semester', 1, '[]', '{\"semester\":\"1\",\"gradingType_id\":\"1\",\"staff_id\":\"1\",\"created_by\":1,\"slug\":\"1\",\"id\":1}', 'http://127.0.0.1:8001/semester/store', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 07:04:13', '2019-12-11 07:04:13'),
(22, 'App\\User', 1, 'created', 'App\\Models\\StudentBatch', 1, '[]', '{\"title\":\"ACT\",\"created_by\":1,\"id\":1}', 'http://127.0.0.1:8001/student-batch/store', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 07:04:31', '2019-12-11 07:04:31'),
(23, 'App\\User', 1, 'updated', 'App\\Models\\Semester', 1, '{\"last_updated_by\":null}', '{\"last_updated_by\":1}', 'http://127.0.0.1:8001/semester/1/update', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 07:05:35', '2019-12-11 07:05:35'),
(24, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-11 08:51:37\"}', '{\"last_login_at\":\"2019-12-11 09:20:44\"}', 'http://127.0.0.1:8001/login', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:71.0) Gecko/20100101 Firefox/71.0', NULL, '2019-12-11 07:20:44', '2019-12-11 07:20:44'),
(25, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-11 09:20:44\"}', '{\"last_login_at\":\"2019-12-11 09:43:48\"}', 'http://127.0.0.1:8000/login', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 07:43:48', '2019-12-11 07:43:48'),
(26, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-11 09:43:48\"}', '{\"last_login_at\":\"2019-12-11 11:05:35\"}', 'http://127.0.0.1:8000/login', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 09:05:35', '2019-12-11 09:05:35'),
(27, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-11 11:05:35\",\"last_login_ip\":\"127.0.0.1\"}', '{\"last_login_at\":\"2019-12-11 09:13:18\",\"last_login_ip\":\"192.168.1.115\"}', 'http://192.168.1.115/edu_new2/public/login', '192.168.1.115', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 07:13:18', '2019-12-11 07:13:18'),
(28, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-11 09:13:18\"}', '{\"last_login_at\":\"2019-12-11 09:16:21\"}', 'http://192.168.1.115/edu_new/public/login', '192.168.1.115', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 07:16:21', '2019-12-11 07:16:21'),
(29, 'App\\User', 1, 'created', 'App\\Models\\GuardianDetail', 1, '[]', '{\"guardian_first_name\":\"fdsgfdsg\",\"guardian_middle_name\":null,\"guardian_last_name\":\"gdfgdfg\",\"guardian_eligibility\":null,\"guardian_occupation\":null,\"guardian_office\":null,\"guardian_office_number\":null,\"guardian_residence_number\":null,\"guardian_mobile_1\":\"9761000069\",\"guardian_mobile_2\":null,\"guardian_email\":\"gardian@gmail.com\",\"guardian_relation\":\"fdsgfdg\",\"guardian_address\":\"gdfgdf gd\",\"created_by\":1,\"guardian_image\":\"\",\"id\":1}', 'http://192.168.1.115/edu_new/public/guardian/register', '192.168.1.115', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 07:17:47', '2019-12-11 07:17:47'),
(30, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-11 09:16:21\"}', '{\"last_login_at\":\"2019-12-11 11:21:25\"}', 'http://192.168.1.115/edu2/public/login', '192.168.1.115', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:71.0) Gecko/20100101 Firefox/71.0', NULL, '2019-12-11 09:21:25', '2019-12-11 09:21:25'),
(31, 'App\\User', 1, 'updated', 'App\\Models\\GuardianDetail', 1, '{\"status\":1}', '{\"status\":0}', 'http://192.168.1.115/edu_new/public/guardian/1/in-active', '192.168.1.115', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 07:32:09', '2019-12-11 07:32:09'),
(32, 'App\\User', 1, 'updated', 'App\\Models\\GuardianDetail', 1, '{\"status\":0}', '{\"status\":1}', 'http://192.168.1.115/edu2/public/guardian/bulk-action', '192.168.1.115', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:71.0) Gecko/20100101 Firefox/71.0', NULL, '2019-12-11 09:33:58', '2019-12-11 09:33:58'),
(33, 'App\\User', 1, 'updated', 'App\\Models\\GuardianDetail', 1, '{\"status\":1}', '{\"status\":0}', 'http://192.168.1.115/edu2/public/guardian/bulk-action', '192.168.1.115', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:71.0) Gecko/20100101 Firefox/71.0', NULL, '2019-12-11 09:34:04', '2019-12-11 09:34:04'),
(34, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-11 11:21:25\",\"last_login_ip\":\"192.168.1.115\"}', '{\"last_login_at\":\"2019-12-11 11:53:52\",\"last_login_ip\":\"192.168.1.122\"}', 'http://192.168.1.115/edu2/public/login', '192.168.1.122', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 09:53:52', '2019-12-11 09:53:52'),
(35, 'App\\User', 1, 'created', 'App\\Models\\Semester', 2, '[]', '{\"semester\":\"3\",\"gradingType_id\":\"1\",\"staff_id\":\"1\",\"created_by\":1,\"slug\":\"3\",\"id\":2}', 'http://192.168.1.115/edu2/public/semester/store', '192.168.1.122', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 09:55:58', '2019-12-11 09:55:58'),
(36, 'App\\User', 1, 'deleted', 'App\\Models\\Semester', 2, '{\"id\":2,\"created_by\":1,\"last_updated_by\":null,\"semester\":\"3\",\"slug\":\"3\",\"staff_id\":1,\"gradingType_id\":1,\"status\":1}', '[]', 'http://192.168.1.115/edu2/public/semester/2/delete', '192.168.1.122', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 09:56:26', '2019-12-11 09:56:26'),
(37, 'App\\User', 1, 'created', 'App\\Models\\Semester', 3, '[]', '{\"semester\":\"3\",\"gradingType_id\":\"1\",\"staff_id\":\"1\",\"created_by\":1,\"slug\":\"3\",\"id\":3}', 'http://192.168.1.115/edu2/public/semester/store', '192.168.1.122', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 09:56:53', '2019-12-11 09:56:53'),
(38, 'App\\User', 1, 'updated', 'App\\Models\\Semester', 3, '{\"last_updated_by\":null}', '{\"last_updated_by\":1}', 'http://192.168.1.115/edu2/public/semester/3/update', '192.168.1.122', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 09:58:35', '2019-12-11 09:58:35'),
(39, 'App\\User', 1, 'updated', 'App\\Models\\GuardianDetail', 1, '{\"status\":0}', '{\"status\":1}', 'http://192.168.1.115/edu_new/public/guardian/bulk-action', '192.168.1.115', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 08:03:53', '2019-12-11 08:03:53'),
(40, 'App\\User', 1, 'updated', 'App\\Models\\Semester', 3, '{\"status\":1}', '{\"status\":0}', 'http://192.168.1.115/edu2/public/semester/3/in-active', '192.168.1.122', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 10:11:44', '2019-12-11 10:11:44'),
(41, 'App\\User', 1, 'updated', 'App\\Models\\Semester', 3, '{\"status\":0}', '{\"status\":1}', 'http://192.168.1.115/edu2/public/semester/3/active', '192.168.1.122', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 10:11:49', '2019-12-11 10:11:49'),
(42, 'App\\User', 1, 'updated', 'App\\Models\\Faculty', 1, '{\"last_updated_by\":null}', '{\"last_updated_by\":1}', 'http://192.168.1.115/edu2/public/faculty/1/update', '192.168.1.122', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 10:14:04', '2019-12-11 10:14:04'),
(43, 'App\\User', 1, 'created', 'App\\Models\\Student', 2, '[]', '{\"reg_no\":\"115\",\"reg_date\":\"2019-12-11\",\"university_reg\":\"511\",\"faculty\":\"1\",\"semester\":\"1\",\"batch\":\"1\",\"academic_status\":\"1\",\"first_name\":\"TIM\",\"middle_name\":null,\"last_name\":\"ALEX\",\"date_of_birth\":\"1997-06-09\",\"gender\":\"MALE\",\"blood_group\":\"O-\",\"religion\":\"HINDU\",\"caste\":\"GENERAL\",\"nationality\":\"INDIAN\",\"mother_tongue\":\"HINDI\",\"email\":\"alex@gmail.com\",\"extra_info\":\"Does Not Have Extra Info\",\"created_by\":1,\"student_image\":\"\",\"student_signature\":\"\",\"id\":2}', 'http://192.168.1.115/edu2/public/student/register', '192.168.1.122', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 10:20:07', '2019-12-11 10:20:07'),
(44, 'App\\User', 1, 'created', 'App\\Models\\Addressinfo', 1, '[]', '{\"home_phone\":\"963221157\",\"mobile_1\":\"9988776655\",\"mobile_2\":null,\"address\":\"SAHASTRADHARA ROAD\",\"state\":\"UTTARAKHAND\",\"country\":\"INDIA\",\"temp_address\":\"SAHASTRADHARA ROAD\",\"temp_state\":\"UTTARAKHAND\",\"temp_country\":\"INDIA\",\"created_by\":1,\"students_id\":2,\"id\":1}', 'http://192.168.1.115/edu2/public/student/register', '192.168.1.122', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 10:20:07', '2019-12-11 10:20:07'),
(45, 'App\\User', 1, 'created', 'App\\Models\\GuardianDetail', 2, '[]', '{\"guardian_first_name\":\"Peter\",\"guardian_middle_name\":null,\"guardian_last_name\":\"Box\",\"guardian_eligibility\":\"GRADUATION\",\"guardian_occupation\":\"BUSINESS\",\"guardian_office\":\"NAVI MUMBAI\",\"guardian_office_number\":\"420\",\"guardian_residence_number\":\"9654123078\",\"guardian_mobile_1\":\"963221157\",\"guardian_mobile_2\":\"963221157\",\"guardian_email\":\"test@gamil.com\",\"guardian_relation\":\"FATHER\",\"guardian_address\":\"sahastradhara road\",\"created_by\":1,\"guardian_image\":\"\",\"id\":2}', 'http://192.168.1.115/edu2/public/guardian/register', '192.168.1.122', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 10:45:48', '2019-12-11 10:45:48'),
(46, 'App\\User', 1, 'created', 'App\\Models\\Staff', 2, '[]', '{\"reg_no\":\"1\",\"join_date\":\"2019-12-10\",\"designation\":\"1\",\"first_name\":\"TIM\",\"middle_name\":null,\"last_name\":\"ALEX\",\"father_name\":\"WILL\",\"mother_name\":\"CATE\",\"date_of_birth\":\"2019-12-02\",\"gender\":\"MALE\",\"blood_group\":\"A+\",\"nationality\":\"POLISH\",\"mother_tongue\":\"HINDI\",\"email\":\"alex@gmail.com\",\"home_phone\":\"963221157\",\"mobile_1\":\"9632145870\",\"mobile_2\":\"987451203\",\"address\":\"SAHASTRADHARA ROAD\",\"state\":\"UTTARAKHAND\",\"country\":\"INDIA\",\"temp_address\":\"SAHASTRADHARA ROAD\",\"temp_state\":\"UTTARAKHAND\",\"temp_country\":\"INDIA\",\"qualification\":\"BTECH\",\"experience\":\"2 YEARS\",\"experience_info\":\"2 YEARS\",\"other_info\":\"2 YEARS\",\"created_by\":1,\"staff_image\":\"\",\"id\":2}', 'http://192.168.1.115/edu2/public/staff/store', '192.168.1.122', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 10:47:56', '2019-12-11 10:47:56'),
(47, 'App\\User', 1, 'created', 'App\\Models\\Student', 4, '[]', '{\"reg_no\":\"424\",\"reg_date\":\"2019-12-11\",\"university_reg\":\"243\",\"faculty\":\"1\",\"semester\":\"3\",\"batch\":\"1\",\"academic_status\":\"1\",\"first_name\":\"VIEVEK\",\"middle_name\":\"SINGH\",\"last_name\":\"SHARMA\",\"date_of_birth\":\"2019-12-10\",\"gender\":\"MALE\",\"blood_group\":\"A+\",\"religion\":\"HINDU\",\"caste\":\"GENERAL\",\"nationality\":\"INDIAN\",\"mother_tongue\":\"HINDI\",\"email\":\"test@gamil.com\",\"extra_info\":null,\"created_by\":1,\"student_image\":\"\",\"student_signature\":\"\",\"id\":4}', 'http://192.168.1.115/edu2/public/student/register', '192.168.1.122', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 10:52:09', '2019-12-11 10:52:09'),
(48, 'App\\User', 1, 'created', 'App\\Models\\Addressinfo', 2, '[]', '{\"home_phone\":\"9876543210\",\"mobile_1\":\"9876543210\",\"mobile_2\":\"9632145870\",\"address\":\"IT PARK\",\"state\":\"UTTARAKHAND\",\"country\":\"INDIA\",\"temp_address\":\"IT PARK\",\"temp_state\":\"UTTARAKHAND\",\"temp_country\":\"INDIA\",\"created_by\":1,\"students_id\":4,\"id\":2}', 'http://192.168.1.115/edu2/public/student/register', '192.168.1.122', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 10:52:09', '2019-12-11 10:52:09'),
(49, 'App\\User', 1, 'created', 'App\\Models\\ParentDetail', 1, '[]', '{\"grandfather_first_name\":\"TEST\",\"grandfather_middle_name\":\"GRAND\",\"grandfather_last_name\":\"FATHER\",\"father_first_name\":\"TEST\",\"father_middle_name\":\"FATHER\",\"father_last_name\":\"NAME\",\"father_eligibility\":\"GRADUATION\",\"father_occupation\":\"BUSINESS\",\"father_office\":\"NAVI MUMBAI\",\"father_office_number\":\"420\",\"father_residence_number\":\"9654123078\",\"father_mobile_1\":\"963221157\",\"father_mobile_2\":\"987441254\",\"father_email\":\"test@gamil.com\",\"mother_first_name\":\"TEST\",\"mother_middle_name\":\"MOTHER\",\"mother_last_name\":\"NAME\",\"mother_eligibility\":\"GRADUATION\",\"mother_occupation\":\"TEACHER\",\"mother_office\":\"NAVI MUMBAI\",\"mother_office_number\":\"454\",\"mother_residence_number\":\"9630002122\",\"mother_mobile_1\":\"9876543210\",\"mother_mobile_2\":\"963221157\",\"mother_email\":\"test@gamil.com\",\"created_by\":1,\"father_image\":\"\",\"mother_image\":\"\",\"students_id\":4,\"id\":1}', 'http://192.168.1.115/edu2/public/student/register', '192.168.1.122', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 10:52:09', '2019-12-11 10:52:09'),
(50, 'App\\User', 1, 'created', 'App\\Models\\GuardianDetail', 3, '[]', '{\"guardian_first_name\":\"TEST\",\"guardian_middle_name\":\"FATHER\",\"guardian_last_name\":\"NAME\",\"guardian_eligibility\":\"GRADUATION\",\"guardian_occupation\":\"BUSINESS\",\"guardian_office\":\"NAVI MUMBAI\",\"guardian_office_number\":\"420\",\"guardian_residence_number\":\"9654123078\",\"guardian_mobile_1\":\"963221157\",\"guardian_mobile_2\":\"987441254\",\"guardian_email\":\"test@gamil.com\",\"guardian_relation\":\"FATHER\",\"guardian_address\":\"SAHASTRADHARA ROAD\",\"created_by\":1,\"guardian_image\":\"\",\"id\":3}', 'http://192.168.1.115/edu2/public/student/register', '192.168.1.122', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 10:52:09', '2019-12-11 10:52:09'),
(51, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-11 11:53:52\",\"last_login_ip\":\"192.168.1.122\"}', '{\"last_login_at\":\"2019-12-11 12:15:01\",\"last_login_ip\":\"127.0.0.1\"}', 'http://127.0.0.1:8000/login', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 10:15:01', '2019-12-11 10:15:01'),
(52, 'App\\User', 1, 'created', 'App\\Models\\Document', 1, '[]', '{\"title\":\"dafsdf\",\"description\":\"fsdfsd fdsf\",\"created_by\":1,\"member_id\":1,\"file\":\"7007_dafsdf.png\",\"member_type\":\"staff\",\"id\":1}', 'http://127.0.0.1:8000/staff/document/store', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 10:15:18', '2019-12-11 10:15:18'),
(53, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-11 12:15:01\",\"last_login_ip\":\"127.0.0.1\"}', '{\"last_login_at\":\"2019-12-11 12:16:00\",\"last_login_ip\":\"192.168.1.115\"}', 'http://192.168.1.115/edu_new/public/login', '192.168.1.115', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 10:16:00', '2019-12-11 10:16:00'),
(54, 'App\\User', 1, 'created', 'App\\Models\\Document', 2, '[]', '{\"title\":\"dasdfdf\",\"description\":\"sdfsdf\",\"created_by\":1,\"member_id\":1,\"file\":\"5150_dasdfdf.png\",\"member_type\":\"staff\",\"id\":2}', 'http://127.0.0.1:8000/staff/document/store', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 10:17:08', '2019-12-11 10:17:08'),
(55, 'App\\User', 1, 'created', 'App\\Models\\StaffDesignation', 2, '[]', '{\"title\":\"DSADFAF\",\"created_by\":1,\"id\":2}', 'http://192.168.1.115/edu_new/public/staff/designation/store', '192.168.1.115', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-11 10:34:15', '2019-12-11 10:34:15'),
(56, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-11 12:16:00\"}', '{\"last_login_at\":\"2019-12-12 05:10:14\"}', 'http://192.168.1.115/edu_new/public/login', '192.168.1.115', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-12 03:10:14', '2019-12-12 03:10:14'),
(57, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-12 05:10:14\",\"last_login_ip\":\"192.168.1.115\"}', '{\"last_login_at\":\"2019-12-12 07:10:17\",\"last_login_ip\":\"127.0.0.1\"}', 'http://127.0.0.1:8000/login', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-12 05:10:17', '2019-12-12 05:10:17'),
(58, 'App\\User', 1, 'updated', 'App\\Models\\Student', 2, '{\"status\":1}', '{\"status\":0}', 'http://192.168.1.115/edu_new/public/student/bulk-action', '192.168.1.115', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-12 03:11:56', '2019-12-12 03:11:56'),
(59, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-12 07:10:17\",\"last_login_ip\":\"127.0.0.1\"}', '{\"last_login_at\":\"2019-12-12 06:42:49\",\"last_login_ip\":\"192.168.1.44\"}', 'http://192.168.1.115/edu_new/public/login', '192.168.1.44', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', NULL, '2019-12-12 04:42:49', '2019-12-12 04:42:49'),
(60, 'App\\User', 1, 'created', 'App\\Models\\Note', 1, '[]', '{\"subject\":\"aa\",\"note\":\"aaaaa\",\"created_by\":1,\"member_id\":2,\"member_type\":\"student\",\"id\":1}', 'http://192.168.1.115/edu_new/public/student/note/store', '192.168.1.44', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', NULL, '2019-12-12 04:45:06', '2019-12-12 04:45:06'),
(61, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-12 06:42:49\",\"last_login_ip\":\"192.168.1.44\"}', '{\"last_login_at\":\"2019-12-12 09:09:53\",\"last_login_ip\":\"127.0.0.1\"}', 'http://127.0.0.1:8000/login', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:71.0) Gecko/20100101 Firefox/71.0', NULL, '2019-12-12 07:09:53', '2019-12-12 07:09:53'),
(62, 'App\\User', 1, 'created', 'App\\Models\\Document', 3, '[]', '{\"title\":\"fdsg g\",\"description\":\"gdfgdf\",\"created_by\":1,\"member_id\":2,\"file\":\"6157_fdsg-g.png\",\"member_type\":\"student\",\"id\":3}', 'http://127.0.0.1:8000/student/document/store', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:71.0) Gecko/20100101 Firefox/71.0', NULL, '2019-12-12 07:10:29', '2019-12-12 07:10:29'),
(63, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-12 12:39:53\",\"last_login_ip\":\"127.0.0.1\"}', '{\"last_login_at\":\"2019-12-17 06:06:50\",\"last_login_ip\":\"192.168.1.115\"}', 'http://192.168.1.115/edu_test/public/login', '192.168.1.115', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36', NULL, '2019-12-17 00:36:50', '2019-12-17 00:36:50'),
(64, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-17 06:06:50\"}', '{\"last_login_at\":\"2019-12-17 06:13:37\"}', 'http://192.168.1.115/edu_new/public/login', '192.168.1.115', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36', NULL, '2019-12-17 00:43:37', '2019-12-17 00:43:37'),
(65, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-17 06:13:37\",\"last_login_ip\":\"192.168.1.115\"}', '{\"last_login_at\":\"2019-12-17 06:54:22\",\"last_login_ip\":\"127.0.0.1\"}', 'http://127.0.0.1:8001/login', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36', NULL, '2019-12-17 01:24:22', '2019-12-17 01:24:22'),
(66, 'App\\User', 1, 'updated', 'App\\Models\\Document', 3, '{\"last_updated_by\":null}', '{\"last_updated_by\":1}', 'http://192.168.1.115/edu_new/public/student/document/3/update', '192.168.1.115', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36', NULL, '2019-12-17 02:15:31', '2019-12-17 02:15:31'),
(67, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-17 06:54:22\",\"last_login_ip\":\"127.0.0.1\"}', '{\"last_login_at\":\"2019-12-19 08:42:57\",\"last_login_ip\":\"192.168.1.115\"}', 'http://192.168.1.115/edu_new/public/login', '192.168.1.115', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36', NULL, '2019-12-19 03:12:57', '2019-12-19 03:12:57'),
(68, 'App\\User', 1, 'updated', 'App\\Models\\Student', 4, '{\"reg_date\":\"2019-12-11 00:00:00\",\"date_of_birth\":\"2019-12-10 00:00:00\"}', '{\"reg_date\":\"2019-12-11\",\"date_of_birth\":\"2019-12-10\"}', 'http://192.168.1.115/edu_new/public/student/4/update', '192.168.1.115', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36', NULL, '2019-12-19 03:17:24', '2019-12-19 03:17:24'),
(69, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-19 08:42:57\"}', '{\"last_login_at\":\"2019-12-19 10:04:15\"}', 'http://192.168.1.115/edu_new/public/login', '192.168.1.115', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36', NULL, '2019-12-19 04:34:15', '2019-12-19 04:34:15'),
(70, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-19 10:04:15\"}', '{\"last_login_at\":\"2019-12-19 15:34:40\"}', 'http://192.168.1.115/edu2/public/login', '192.168.1.115', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36', NULL, '2019-12-19 10:04:40', '2019-12-19 10:04:40'),
(71, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-19 15:34:40\",\"last_login_ip\":\"192.168.1.115\"}', '{\"last_login_at\":\"2019-12-19 10:39:11\",\"last_login_ip\":\"192.168.1.22\"}', 'http://192.168.1.115/edu_new/public/login', '192.168.1.22', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2019-12-19 05:09:11', '2019-12-19 05:09:11'),
(72, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-19 10:39:11\",\"last_login_ip\":\"192.168.1.22\"}', '{\"last_login_at\":\"2019-12-19 10:55:45\",\"last_login_ip\":\"::1\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2019-12-19 05:25:45', '2019-12-19 05:25:45'),
(73, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-19 10:55:45\"}', '{\"last_login_at\":\"2019-12-19 11:50:05\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2019-12-19 06:20:05', '2019-12-19 06:20:05'),
(74, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-19 11:50:05\"}', '{\"last_login_at\":\"2019-12-20 06:01:22\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2019-12-20 00:31:22', '2019-12-20 00:31:22'),
(75, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-20 06:01:22\"}', '{\"last_login_at\":\"2019-12-20 10:24:37\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2019-12-20 04:54:37', '2019-12-20 04:54:37'),
(76, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-20 10:24:37\"}', '{\"last_login_at\":\"2019-12-21 05:05:05\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2019-12-20 23:35:05', '2019-12-20 23:35:05'),
(77, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-21 05:05:05\"}', '{\"last_login_at\":\"2019-12-23 05:59:23\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2019-12-23 00:29:23', '2019-12-23 00:29:23'),
(78, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-23 05:59:23\",\"last_login_ip\":\"::1\"}', '{\"last_login_at\":\"2019-12-23 07:44:42\",\"last_login_ip\":\"192.168.1.22\"}', 'http://192.168.1.22/edu/public/login', '192.168.1.22', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2019-12-23 02:14:42', '2019-12-23 02:14:42'),
(79, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-23 07:44:42\",\"last_login_ip\":\"192.168.1.22\"}', '{\"last_login_at\":\"2019-12-23 07:47:32\",\"last_login_ip\":\"192.168.1.110\"}', 'http://192.168.1.22/edu/public/login', '192.168.1.110', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', NULL, '2019-12-23 02:17:32', '2019-12-23 02:17:32'),
(80, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-23 07:47:32\",\"last_login_ip\":\"192.168.1.110\"}', '{\"last_login_at\":\"2019-12-23 07:47:36\",\"last_login_ip\":\"::1\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2019-12-23 02:17:36', '2019-12-23 02:17:36'),
(81, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-23 07:47:36\",\"last_login_ip\":\"::1\"}', '{\"last_login_at\":\"2019-12-23 12:02:01\",\"last_login_ip\":\"192.168.1.22\"}', 'http://192.168.1.22/edu/public/login', '192.168.1.22', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2019-12-23 06:32:01', '2019-12-23 06:32:01'),
(82, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-23 12:02:01\",\"last_login_ip\":\"192.168.1.22\"}', '{\"last_login_at\":\"2019-12-24 05:15:00\",\"last_login_ip\":\"192.168.1.110\"}', 'http://192.168.1.22/edu/public/login', '192.168.1.110', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', NULL, '2019-12-23 23:45:00', '2019-12-23 23:45:00'),
(83, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-24 05:15:00\",\"last_login_ip\":\"192.168.1.110\"}', '{\"last_login_at\":\"2019-12-24 05:37:40\",\"last_login_ip\":\"::1\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2019-12-24 00:07:40', '2019-12-24 00:07:40'),
(84, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-24 05:37:40\",\"last_login_ip\":\"::1\"}', '{\"last_login_at\":\"2019-12-24 08:01:29\",\"last_login_ip\":\"192.168.1.110\"}', 'http://192.168.1.22/edu/public/login', '192.168.1.110', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', NULL, '2019-12-24 02:31:29', '2019-12-24 02:31:29'),
(85, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-24 08:01:29\"}', '{\"last_login_at\":\"2019-12-24 08:54:00\"}', 'http://192.168.1.22/edu/public/login', '192.168.1.110', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', NULL, '2019-12-24 03:24:00', '2019-12-24 03:24:00'),
(86, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-24 08:54:00\"}', '{\"last_login_at\":\"2019-12-24 11:25:53\"}', 'http://192.168.1.22/edu/public/login', '192.168.1.110', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', NULL, '2019-12-24 05:55:53', '2019-12-24 05:55:53'),
(87, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-24 11:25:53\",\"last_login_ip\":\"192.168.1.110\"}', '{\"last_login_at\":\"2019-12-24 13:08:43\",\"last_login_ip\":\"192.168.1.22\"}', 'http://192.168.1.22/edu/public/login', '192.168.1.22', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2019-12-24 07:38:43', '2019-12-24 07:38:43'),
(88, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-24 13:08:43\",\"last_login_ip\":\"192.168.1.22\"}', '{\"last_login_at\":\"2019-12-25 05:05:52\",\"last_login_ip\":\"192.168.1.110\"}', 'http://192.168.1.22/edu/public/login', '192.168.1.110', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', NULL, '2019-12-24 23:35:52', '2019-12-24 23:35:52'),
(89, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-25 05:05:52\"}', '{\"last_login_at\":\"2019-12-25 05:59:33\"}', 'http://192.168.1.22/edu/public/login', '192.168.1.110', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', NULL, '2019-12-25 00:29:33', '2019-12-25 00:29:33'),
(90, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-25 05:59:33\"}', '{\"last_login_at\":\"2019-12-25 06:51:46\"}', 'http://192.168.1.22/edu/public/login', '192.168.1.110', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', NULL, '2019-12-25 01:21:46', '2019-12-25 01:21:46'),
(91, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-25 06:51:46\"}', '{\"last_login_at\":\"2019-12-26 04:56:53\"}', 'http://192.168.1.22/edu/public/login', '192.168.1.110', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', NULL, '2019-12-25 23:26:53', '2019-12-25 23:26:53'),
(92, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-26 04:56:53\"}', '{\"last_login_at\":\"2019-12-27 04:51:16\"}', 'http://192.168.1.22/edu/public/login', '192.168.1.110', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', NULL, '2019-12-26 23:21:16', '2019-12-26 23:21:16'),
(93, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-27 04:51:16\"}', '{\"last_login_at\":\"2019-12-31 06:40:56\"}', 'http://192.168.1.22/edu/public/login', '192.168.1.110', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', NULL, '2019-12-31 01:10:56', '2019-12-31 01:10:56'),
(94, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-31 06:40:56\",\"last_login_ip\":\"192.168.1.110\"}', '{\"last_login_at\":\"2019-12-31 06:44:33\",\"last_login_ip\":\"192.168.1.122\"}', 'http://192.168.1.22/edu/public/login', '192.168.1.122', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2019-12-31 01:14:33', '2019-12-31 01:14:33'),
(95, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-31 06:44:33\",\"last_login_ip\":\"192.168.1.122\"}', '{\"last_login_at\":\"2019-12-31 12:51:59\",\"last_login_ip\":\"192.168.1.211\"}', 'http://192.168.1.22/edu/public/login', '192.168.1.211', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', NULL, '2019-12-31 07:21:59', '2019-12-31 07:21:59'),
(96, 'App\\User', 1, 'updated', 'App\\Models\\Document', 3, '{\"status\":1}', '{\"status\":0}', 'http://192.168.1.22/edu/public/student/document/3/in-active', '192.168.1.211', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', NULL, '2019-12-31 07:26:02', '2019-12-31 07:26:02'),
(97, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2019-12-31 12:51:59\",\"last_login_ip\":\"192.168.1.211\"}', '{\"last_login_at\":\"2020-01-02 04:54:20\",\"last_login_ip\":\"192.168.1.110\"}', 'http://192.168.1.22/edu/public/login', '192.168.1.110', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', NULL, '2020-01-01 23:24:20', '2020-01-01 23:24:20'),
(98, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-01-02 04:54:20\"}', '{\"last_login_at\":\"2020-01-02 05:31:57\"}', 'http://192.168.1.22/edu/public/login', '192.168.1.110', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', NULL, '2020-01-02 00:01:57', '2020-01-02 00:01:57'),
(99, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-01-02 05:31:57\"}', '{\"last_login_at\":\"2020-01-02 08:27:29\"}', 'http://192.168.1.22/edu/public/login', '192.168.1.110', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', NULL, '2020-01-02 02:57:29', '2020-01-02 02:57:29'),
(100, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-01-02 08:27:29\"}', '{\"last_login_at\":\"2020-01-02 10:08:21\"}', 'http://192.168.1.22/edu/public/login', '192.168.1.110', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', NULL, '2020-01-02 04:38:21', '2020-01-02 04:38:21'),
(101, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-01-02 10:08:21\"}', '{\"last_login_at\":\"2020-01-02 11:44:07\"}', 'http://192.168.1.22/edu/public/login', '192.168.1.110', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', NULL, '2020-01-02 06:14:07', '2020-01-02 06:14:07'),
(102, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-01-02 11:44:07\",\"last_login_ip\":\"192.168.1.110\"}', '{\"last_login_at\":\"2020-01-02 12:53:59\",\"last_login_ip\":\"192.168.1.211\"}', 'http://192.168.1.22/edu/public/login', '192.168.1.211', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', NULL, '2020-01-02 07:23:59', '2020-01-02 07:23:59'),
(103, 'App\\User', 1, 'created', 'App\\Models\\Student', 5, '[]', '{\"reg_no\":\"02012020\",\"reg_date\":\"2019-12-31\",\"university_reg\":\"101010\",\"faculty\":\"1\",\"semester\":\"1\",\"batch\":\"1\",\"academic_status\":\"1\",\"first_name\":\"TEST 01\",\"middle_name\":\"STUDENT\",\"last_name\":\"01\",\"date_of_birth\":\"1995-09-19\",\"gender\":\"MALE\",\"blood_group\":\"B+\",\"religion\":\"NILL\",\"caste\":\"NILL\",\"nationality\":\"UNITED KINGDOM\",\"mother_tongue\":\"NILL\",\"email\":\"test@test.com\",\"extra_info\":\"nill\",\"created_by\":1,\"student_image\":\"\",\"student_signature\":\"\",\"id\":5}', 'http://192.168.1.22/edu/public/student/register', '192.168.1.211', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', NULL, '2020-01-02 07:29:03', '2020-01-02 07:29:03'),
(104, 'App\\User', 1, 'created', 'App\\Models\\Addressinfo', 3, '[]', '{\"home_phone\":\"123456\",\"mobile_1\":\"123456\",\"mobile_2\":\"123456\",\"address\":\"TEST ADDRESS DEHRADUN\",\"state\":\"UTTARAKHAND\",\"country\":\"UNITED KINGDOM\",\"temp_address\":\"TEST ADDRESS DEHRADUN\",\"temp_state\":\"UTTARAKHAND\",\"temp_country\":\"UNITED KINGDOM\",\"created_by\":1,\"students_id\":5,\"id\":3}', 'http://192.168.1.22/edu/public/student/register', '192.168.1.211', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', NULL, '2020-01-02 07:29:03', '2020-01-02 07:29:03'),
(105, 'App\\User', 1, 'created', 'App\\Models\\ParentDetail', 2, '[]', '{\"grandfather_first_name\":\"TEST\",\"grandfather_middle_name\":null,\"grandfather_last_name\":\"GRANDF\",\"father_first_name\":\"TEST\",\"father_middle_name\":null,\"father_last_name\":\"FATHER\",\"father_eligibility\":\"NILL\",\"father_occupation\":\"NILL\",\"father_office\":\"NILL\",\"father_office_number\":\"123654\",\"father_residence_number\":\"13456\",\"father_mobile_1\":\"123856\",\"father_mobile_2\":\"12365\",\"father_email\":\"1336\",\"mother_first_name\":\"TEST\",\"mother_middle_name\":null,\"mother_last_name\":\"MOTHER\",\"mother_eligibility\":\"NILL\",\"mother_occupation\":\"NILL\",\"mother_office\":\"NILL\",\"mother_office_number\":null,\"mother_residence_number\":\"nill\",\"mother_mobile_1\":\"123456789\",\"mother_mobile_2\":\"987654321\",\"mother_email\":\"test@test.com\",\"created_by\":1,\"father_image\":\"\",\"mother_image\":\"\",\"students_id\":5,\"id\":2}', 'http://192.168.1.22/edu/public/student/register', '192.168.1.211', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', NULL, '2020-01-02 07:29:03', '2020-01-02 07:29:03'),
(106, 'App\\User', 1, 'created', 'App\\Models\\GuardianDetail', 4, '[]', '{\"guardian_first_name\":\"TEST\",\"guardian_middle_name\":null,\"guardian_last_name\":\"GURDIAN\",\"guardian_eligibility\":\"NILL\",\"guardian_occupation\":\"NILL\",\"guardian_office\":\"NILL\",\"guardian_office_number\":\"6554646\",\"guardian_residence_number\":\"46564654\",\"guardian_mobile_1\":\"6556454\",\"guardian_mobile_2\":\"654564654\",\"guardian_email\":\"test@test.com\",\"guardian_relation\":\"UNKOWN\",\"guardian_address\":\"NILL\",\"created_by\":1,\"guardian_image\":\"\",\"id\":4}', 'http://192.168.1.22/edu/public/student/register', '192.168.1.211', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', NULL, '2020-01-02 07:29:03', '2020-01-02 07:29:03'),
(107, 'App\\User', 1, 'updated', 'App\\Models\\Student', 5, '{\"reg_date\":\"2019-12-31 00:00:00\",\"first_name\":\"TEST 01\",\"date_of_birth\":\"1995-09-19 00:00:00\"}', '{\"reg_date\":\"2019-12-31\",\"first_name\":\"TEST\",\"date_of_birth\":\"1995-09-19\"}', 'http://192.168.1.22/edu/public/student/5/update', '192.168.1.211', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', NULL, '2020-01-02 07:29:18', '2020-01-02 07:29:18'),
(108, 'App\\User', 1, 'updated', 'App\\Models\\Student', 2, '{\"status\":0}', '{\"status\":1}', 'http://192.168.1.22/edu/public/student/bulk-action', '192.168.1.211', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', NULL, '2020-01-02 07:30:27', '2020-01-02 07:30:27'),
(109, 'App\\User', 1, 'updated', 'App\\Models\\Student', 2, '{\"status\":1}', '{\"status\":0}', 'http://192.168.1.22/edu/public/student/bulk-action', '192.168.1.211', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', NULL, '2020-01-02 07:30:32', '2020-01-02 07:30:32'),
(110, 'App\\User', 1, 'updated', 'App\\Models\\Student', 5, '{\"semester\":1,\"academic_status\":1}', '{\"semester\":\"3\",\"academic_status\":\"8\"}', 'http://192.168.1.22/edu/public/student/transfering', '192.168.1.211', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', NULL, '2020-01-02 07:33:56', '2020-01-02 07:33:56'),
(111, 'App\\User', 1, 'updated', 'App\\Models\\Student', 5, '{\"semester\":3,\"academic_status\":8}', '{\"semester\":\"1\",\"academic_status\":\"1\"}', 'http://192.168.1.22/edu/public/student/transfering', '192.168.1.211', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', NULL, '2020-01-02 07:34:16', '2020-01-02 07:34:16'),
(112, 'App\\User', 1, 'created', 'App\\Models\\Document', 4, '[]', '{\"title\":\"Test Title\",\"description\":\"test pic\",\"created_by\":1,\"member_id\":5,\"file\":\"6102_test-title.png\",\"member_type\":\"student\",\"id\":4}', 'http://192.168.1.22/edu/public/student/document/store', '192.168.1.211', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', NULL, '2020-01-02 07:34:44', '2020-01-02 07:34:44');
INSERT INTO `audits` (`id`, `user_type`, `user_id`, `event`, `auditable_type`, `auditable_id`, `old_values`, `new_values`, `url`, `ip_address`, `user_agent`, `tags`, `created_at`, `updated_at`) VALUES
(113, 'App\\User', 1, 'deleted', 'App\\Models\\Document', 3, '{\"id\":3,\"created_by\":1,\"last_updated_by\":1,\"member_type\":\"student\",\"member_id\":2,\"title\":\"fdsg g\",\"file\":\"6157_fdsg-g.png\",\"description\":\"gdfgdf\",\"status\":0}', '[]', 'http://192.168.1.22/edu/public/student/document/3/delete', '192.168.1.211', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', NULL, '2020-01-02 07:34:51', '2020-01-02 07:34:51'),
(114, 'App\\User', 1, 'created', 'App\\Models\\Note', 2, '[]', '{\"subject\":\"TEST NOTES\",\"note\":\"Test Notes\",\"created_by\":1,\"member_id\":5,\"member_type\":\"student\",\"id\":2}', 'http://192.168.1.22/edu/public/student/note/store', '192.168.1.211', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', NULL, '2020-01-02 07:36:28', '2020-01-02 07:36:28'),
(115, 'App\\User', 1, 'updated', 'App\\Models\\Note', 2, '{\"status\":1}', '{\"status\":0}', 'http://192.168.1.22/edu/public/student/note/bulk-action', '192.168.1.211', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', NULL, '2020-01-02 07:36:41', '2020-01-02 07:36:41'),
(116, 'App\\User', 1, 'updated', 'App\\Models\\Note', 2, '{\"status\":0}', '{\"status\":1}', 'http://192.168.1.22/edu/public/student/note/bulk-action', '192.168.1.211', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', NULL, '2020-01-02 07:36:46', '2020-01-02 07:36:46'),
(117, 'App\\User', 1, 'updated', 'App\\Models\\GuardianDetail', 4, '{\"status\":1}', '{\"status\":0}', 'http://192.168.1.22/edu/public/guardian/bulk-action', '192.168.1.211', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', NULL, '2020-01-02 07:38:53', '2020-01-02 07:38:53'),
(118, 'App\\User', 1, 'updated', 'App\\Models\\GuardianDetail', 4, '{\"status\":0}', '{\"status\":1}', 'http://192.168.1.22/edu/public/guardian/bulk-action', '192.168.1.211', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', NULL, '2020-01-02 07:39:04', '2020-01-02 07:39:04'),
(119, 'App\\User', 1, 'created', 'App\\Models\\GuardianDetail', 5, '[]', '{\"guardian_first_name\":\"registration\",\"guardian_middle_name\":null,\"guardian_last_name\":\"test\",\"guardian_eligibility\":\"NILL\",\"guardian_occupation\":\"NILL\",\"guardian_office\":\"df\",\"guardian_office_number\":\"123\",\"guardian_residence_number\":\"46564654\",\"guardian_mobile_1\":\"03213213213\",\"guardian_mobile_2\":\"03213213213\",\"guardian_email\":\"test@test.com\",\"guardian_relation\":\"NILLUNKOWN\",\"guardian_address\":\"Test Address Dehradun\",\"created_by\":1,\"guardian_image\":\"\",\"id\":5}', 'http://192.168.1.22/edu/public/guardian/register', '192.168.1.211', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', NULL, '2020-01-02 07:40:13', '2020-01-02 07:40:13'),
(120, 'App\\User', 1, 'updated', 'App\\Models\\GuardianDetail', 5, '{\"guardian_image\":\"\"}', '{\"guardian_image\":\"590494094_guardian.png\"}', 'http://192.168.1.22/edu/public/guardian/5/update', '192.168.1.211', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', NULL, '2020-01-02 07:43:14', '2020-01-02 07:43:14'),
(121, 'App\\User', 1, 'created', 'App\\User', 2, '[]', '{\"role_id\":\"7\",\"hook_id\":\"5\",\"name\":\"registration  test\",\"email\":\"test@test.com\",\"password\":\"$2y$10$1XQyHZYi00LKwcXJWzM4zuq5q58UWOuloak5.mKabw8ZDqf8261By\",\"id\":2}', 'http://192.168.1.22/edu/public/student/guardian/user/create', '192.168.1.211', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', NULL, '2020-01-02 07:43:34', '2020-01-02 07:43:34'),
(122, 'App\\User', 1, 'created', 'App\\Models\\Staff', 3, '[]', '{\"reg_no\":\"TestStaff\",\"join_date\":\"2019-11-01\",\"designation\":\"1\",\"first_name\":\"TEST STAFF\",\"middle_name\":null,\"last_name\":\"01\",\"father_name\":\"TESTSTAFF FATHER\",\"mother_name\":\"TESTSTAFF MOTHER\",\"date_of_birth\":\"1995-09-19\",\"gender\":\"MALE\",\"blood_group\":\"B+\",\"nationality\":\"UNITED KINGDOM\",\"mother_tongue\":\"NILL\",\"email\":\"test@test.com\",\"home_phone\":\"12345646\",\"mobile_1\":\"132132465\",\"mobile_2\":\"13232145654\",\"address\":\"TEST ADDRESS DEHRADUN\",\"state\":\"UTTARAKHAND\",\"country\":\"UNITED KINGDOM\",\"temp_address\":\"TEST ADDRESS DEHRADUN\",\"temp_state\":\"UTTARAKHAND\",\"temp_country\":\"UNITED KINGDOM\",\"qualification\":\"NILL\",\"experience\":\"NILL\",\"experience_info\":\"nill\",\"other_info\":\"nill\",\"created_by\":1,\"staff_image\":\"\",\"id\":3}', 'http://192.168.1.22/edu/public/staff/store', '192.168.1.211', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', NULL, '2020-01-02 07:49:40', '2020-01-02 07:49:40'),
(123, 'App\\User', 1, 'updated', 'App\\Models\\Staff', 3, '{\"status\":1}', '{\"status\":0}', 'http://192.168.1.22/edu/public/staff/bulk-action', '192.168.1.211', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', NULL, '2020-01-02 07:49:54', '2020-01-02 07:49:54'),
(124, 'App\\User', 1, 'updated', 'App\\Models\\Staff', 3, '{\"status\":0}', '{\"status\":1}', 'http://192.168.1.22/edu/public/staff/bulk-action', '192.168.1.211', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', NULL, '2020-01-02 07:50:00', '2020-01-02 07:50:00'),
(125, 'App\\User', 1, 'created', 'App\\Models\\Document', 5, '[]', '{\"title\":\"Test Title\",\"description\":\"nill\",\"created_by\":1,\"member_id\":3,\"file\":\"9442_test-title.png\",\"member_type\":\"staff\",\"id\":5}', 'http://192.168.1.22/edu/public/staff/document/store', '192.168.1.211', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', NULL, '2020-01-02 07:51:24', '2020-01-02 07:51:24'),
(126, 'App\\User', 1, 'deleted', 'App\\Models\\Document', 2, '{\"id\":2,\"created_by\":1,\"last_updated_by\":null,\"member_type\":\"staff\",\"member_id\":1,\"title\":\"dasdfdf\",\"file\":\"5150_dasdfdf.png\",\"description\":\"sdfsdf\",\"status\":1}', '[]', 'http://192.168.1.22/edu/public/staff/document/bulk-action', '192.168.1.211', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', NULL, '2020-01-02 07:51:37', '2020-01-02 07:51:37'),
(127, 'App\\User', 1, 'created', 'App\\Models\\Note', 3, '[]', '{\"subject\":\"TEST NOTES\",\"note\":\"nill\",\"created_by\":1,\"member_id\":3,\"member_type\":\"staff\",\"id\":3}', 'http://192.168.1.22/edu/public/staff/note/store', '192.168.1.211', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', NULL, '2020-01-02 07:51:59', '2020-01-02 07:51:59'),
(128, 'App\\User', 1, 'updated', 'App\\Models\\Note', 3, '{\"status\":1}', '{\"status\":0}', 'http://192.168.1.22/edu/public/staff/note/bulk-action', '192.168.1.211', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', NULL, '2020-01-02 07:52:06', '2020-01-02 07:52:06'),
(129, 'App\\User', 1, 'updated', 'App\\Models\\Note', 3, '{\"status\":0}', '{\"status\":1}', 'http://192.168.1.22/edu/public/staff/note/bulk-action', '192.168.1.211', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', NULL, '2020-01-02 07:52:10', '2020-01-02 07:52:10'),
(130, 'App\\User', 1, 'created', 'App\\Models\\StaffDesignation', 3, '[]', '{\"title\":\"TEST DESIGNATION\",\"created_by\":1,\"id\":3}', 'http://192.168.1.22/edu/public/staff/designation/store', '192.168.1.211', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', NULL, '2020-01-02 07:54:29', '2020-01-02 07:54:29'),
(131, 'App\\User', 1, 'updated', 'App\\Models\\StaffDesignation', 3, '{\"last_updated_by\":null}', '{\"last_updated_by\":1}', 'http://192.168.1.22/edu/public/staff/designation/3/update', '192.168.1.211', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', NULL, '2020-01-02 07:54:37', '2020-01-02 07:54:37'),
(132, 'App\\User', 1, 'created', 'App\\Models\\FeeHead', 1, '[]', '{\"fee_head_title\":\"TEST FEE\",\"fee_head_amount\":\"1000\",\"created_by\":1,\"id\":1}', 'http://192.168.1.22/edu/public/account/fees/head/store', '192.168.1.211', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', NULL, '2020-01-02 08:23:41', '2020-01-02 08:23:41'),
(133, 'App\\User', 1, 'updated', 'App\\Models\\FeeHead', 1, '{\"status\":1}', '{\"status\":0}', 'http://192.168.1.22/edu/public/account/fees/head/bulk-action', '192.168.1.211', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', NULL, '2020-01-02 08:24:54', '2020-01-02 08:24:54'),
(134, 'App\\User', 1, 'updated', 'App\\Models\\FeeHead', 1, '{\"status\":0}', '{\"status\":1}', 'http://192.168.1.22/edu/public/account/fees/head/bulk-action', '192.168.1.211', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', NULL, '2020-01-02 08:24:58', '2020-01-02 08:24:58'),
(135, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-01-02 12:53:59\",\"last_login_ip\":\"192.168.1.211\"}', '{\"last_login_at\":\"2020-01-03 04:43:31\",\"last_login_ip\":\"192.168.1.110\"}', 'http://192.168.1.22/edu/public/login', '192.168.1.110', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', NULL, '2020-01-02 23:13:31', '2020-01-02 23:13:31'),
(136, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-01-03 04:43:31\",\"last_login_ip\":\"192.168.1.110\"}', '{\"last_login_at\":\"2020-01-06 06:54:04\",\"last_login_ip\":\"::1\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-06 01:24:04', '2020-01-06 01:24:04'),
(137, 'App\\User', 1, 'created', 'App\\Models\\Student', 6, '[]', '{\"reg_no\":\"123\",\"reg_date\":\"2020-01-06\",\"university_reg\":\"1235\",\"faculty\":\"1\",\"semester\":\"1\",\"batch\":\"1\",\"academic_status\":\"1\",\"first_name\":\"VIVEK\",\"middle_name\":\"SINGH\",\"last_name\":\"BISHT\",\"date_of_birth\":\"1995-02-02\",\"gender\":\"MALE\",\"blood_group\":\"A+\",\"religion\":\"HINDU\",\"caste\":\"G\",\"nationality\":\"INDIAN\",\"mother_tongue\":\"HINDI\",\"email\":\"admin@gmail.com\",\"extra_info\":\"fgdfghh\",\"created_by\":1,\"student_image\":\"\",\"student_signature\":\"\",\"id\":6}', 'http://localhost/edu/public/student/register', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-06 04:45:31', '2020-01-06 04:45:31'),
(138, 'App\\User', 1, 'created', 'App\\Models\\Addressinfo', 4, '[]', '{\"home_phone\":\"8881196642\",\"mobile_1\":\"65345345634\",\"mobile_2\":\"45634563456345\",\"address\":\"DEHRADUN\",\"state\":\"UK\",\"country\":\"IND\",\"temp_address\":\"DEHRADUN\",\"temp_state\":\"UK\",\"temp_country\":\"IND\",\"created_by\":1,\"students_id\":6,\"id\":4}', 'http://localhost/edu/public/student/register', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-06 04:45:31', '2020-01-06 04:45:31'),
(139, 'App\\User', 1, 'created', 'App\\Models\\ParentDetail', 3, '[]', '{\"grandfather_first_name\":\"HJFDSFSF\",\"grandfather_middle_name\":\"SFSDF\",\"grandfather_last_name\":\"DSFDSF\",\"father_first_name\":\"DSFSD\",\"father_middle_name\":\"SFSDF\",\"father_last_name\":\"SDFSDF\",\"father_eligibility\":\"DFDF\",\"father_occupation\":\"DFG\",\"father_office\":\"GFDGF\",\"father_office_number\":\"GFDGF\",\"father_residence_number\":\"fgfgf\",\"father_mobile_1\":\"fgfgfgfg\",\"father_mobile_2\":\"fgfg\",\"father_email\":\"admin@gmail.com\",\"mother_first_name\":\"FRSDFGDSGFDSgf\",\"mother_middle_name\":\"GFDFG\",\"mother_last_name\":\"FGDFGF\",\"mother_eligibility\":\"FGDGDF\",\"mother_occupation\":\"FGDFG\",\"mother_office\":\"FGFDG\",\"mother_office_number\":\"FDHFD\",\"mother_residence_number\":\"dfhdfh\",\"mother_mobile_1\":\"dfhh\",\"mother_mobile_2\":\"fdhfh\",\"mother_email\":\"admin@gmail.com\",\"created_by\":1,\"father_image\":\"\",\"mother_image\":\"\",\"students_id\":6,\"id\":3}', 'http://localhost/edu/public/student/register', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-06 04:45:31', '2020-01-06 04:45:31'),
(140, 'App\\User', 1, 'created', 'App\\Models\\GuardianDetail', 6, '[]', '{\"guardian_first_name\":\"DSFSD\",\"guardian_middle_name\":\"SFSDF\",\"guardian_last_name\":\"SDFSDF\",\"guardian_eligibility\":\"DFDF\",\"guardian_occupation\":\"DFG\",\"guardian_office\":\"GFDGF\",\"guardian_office_number\":\"GFDGF\",\"guardian_residence_number\":\"fgfgf\",\"guardian_mobile_1\":\"fgfgfgfg\",\"guardian_mobile_2\":\"fgfg\",\"guardian_email\":\"admin@gmail.com\",\"guardian_relation\":\"FATHER\",\"guardian_address\":\"JHFGJ\",\"created_by\":1,\"guardian_image\":\"\",\"id\":6}', 'http://localhost/edu/public/student/register', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-06 04:45:31', '2020-01-06 04:45:31'),
(141, 'App\\User', 1, 'created', 'App\\Models\\Document', 6, '[]', '{\"title\":\"show and download\",\"description\":\"rtdrdfg\",\"created_by\":1,\"member_id\":6,\"file\":\"5779_show-and-download.png\",\"member_type\":\"student\",\"id\":6}', 'http://localhost/edu/public/student/document/store', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-06 04:46:36', '2020-01-06 04:46:36'),
(142, 'App\\User', 1, 'created', 'App\\Models\\GuardianDetail', 7, '[]', '{\"guardian_first_name\":\"DSFSD\",\"guardian_middle_name\":\"SFSDF\",\"guardian_last_name\":\"SDFSDF\",\"guardian_eligibility\":\"DFDF\",\"guardian_occupation\":\"DFG\",\"guardian_office\":\"asdsad\",\"guardian_office_number\":\"sdafdrgfd\",\"guardian_residence_number\":\"fgfhg\",\"guardian_mobile_1\":\"65285875\",\"guardian_mobile_2\":\"6535463546354\",\"guardian_email\":\"admin@gmail.com\",\"guardian_relation\":\"FATHER\",\"guardian_address\":\"JHFGJ\",\"created_by\":1,\"guardian_image\":\"\",\"id\":7}', 'http://localhost/edu/public/guardian/register', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-06 05:01:22', '2020-01-06 05:01:22'),
(143, 'App\\User', 1, 'updated', 'App\\Models\\Student', 2, '{\"status\":0}', '{\"status\":1}', 'http://localhost/edu/public/student/2/active', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-06 05:13:28', '2020-01-06 05:13:28'),
(144, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-01-06 06:54:04\"}', '{\"last_login_at\":\"2020-01-06 11:07:25\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-06 05:37:25', '2020-01-06 05:37:25'),
(145, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-01-06 11:07:25\"}', '{\"last_login_at\":\"2020-01-06 12:19:24\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-06 06:49:24', '2020-01-06 06:49:24'),
(146, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-01-06 12:19:24\",\"last_login_ip\":\"::1\"}', '{\"last_login_at\":\"2020-01-06 12:41:04\",\"last_login_ip\":\"192.168.1.22\"}', 'http://192.168.1.22/edu/public/login', '192.168.1.22', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-06 07:11:04', '2020-01-06 07:11:04'),
(147, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-01-06 12:41:04\",\"last_login_ip\":\"192.168.1.22\"}', '{\"last_login_at\":\"2020-01-06 12:42:18\",\"last_login_ip\":\"192.168.1.122\"}', 'http://192.168.1.22/edu/public/login', '192.168.1.122', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', NULL, '2020-01-06 07:12:18', '2020-01-06 07:12:18'),
(148, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-01-06 12:42:18\",\"last_login_ip\":\"192.168.1.122\"}', '{\"last_login_at\":\"2020-01-07 08:46:33\",\"last_login_ip\":\"::1\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-07 03:16:33', '2020-01-07 03:16:33'),
(149, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-01-07 08:46:33\"}', '{\"last_login_at\":\"2020-01-07 08:53:46\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-07 03:23:46', '2020-01-07 03:23:46'),
(150, 'App\\User', 2, 'updated', 'App\\User', 2, '{\"last_login_at\":null,\"last_login_ip\":null}', '{\"last_login_at\":\"2020-01-07 08:57:27\",\"last_login_ip\":\"::1\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-07 03:27:27', '2020-01-07 03:27:27'),
(151, 'App\\User', 2, 'updated', 'App\\User', 2, '{\"last_login_at\":\"2020-01-07 08:57:27\"}', '{\"last_login_at\":\"2020-01-07 09:06:50\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-07 03:36:50', '2020-01-07 03:36:50'),
(152, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-01-07 08:53:46\"}', '{\"last_login_at\":\"2020-01-07 09:07:52\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-07 03:37:52', '2020-01-07 03:37:52'),
(153, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-01-07 09:07:52\"}', '{\"last_login_at\":\"2020-01-07 09:15:42\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-07 03:45:42', '2020-01-07 03:45:42'),
(154, 'App\\User', 1, 'created', 'App\\Models\\LibraryMember', 1, '[]', '{\"user_type\":\"1\",\"status\":1,\"member_id\":6,\"created_by\":1,\"id\":1}', 'http://localhost/edu/public/library/member/quick-membership?reg_no=123&status=active&user_type=1', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-07 03:55:48', '2020-01-07 03:55:48'),
(155, 'App\\User', 1, 'created', 'App\\User', 3, '[]', '{\"role_id\":\"6\",\"hook_id\":\"6\",\"name\":\"VIVEK SINGH BISHT\",\"email\":\"admin@gmail.com\",\"password\":\"$2y$10$r.KtpdLau3EcPVbqdv2kxuuHyu89ROF\\/1eXA.pvUF1WwQgUHuTq36\",\"id\":3}', 'http://localhost/edu/public/student/user/create', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-07 03:58:08', '2020-01-07 03:58:08'),
(156, 'App\\User', 1, 'created', 'App\\Models\\GuardianDetail', 8, '[]', '{\"guardian_first_name\":\"Dinesh\",\"guardian_middle_name\":\"SFSDF\",\"guardian_last_name\":\"SDFSDF\",\"guardian_eligibility\":\"DFDF\",\"guardian_occupation\":\"DFG\",\"guardian_office\":\"asdsad\",\"guardian_office_number\":\"hgfhfg\",\"guardian_residence_number\":\"kjhkh\",\"guardian_mobile_1\":\"hjkhjk\",\"guardian_mobile_2\":\"ghkghk\",\"guardian_email\":\"admin@gmail.com\",\"guardian_relation\":\"hgj\",\"guardian_address\":\"hjghjgh\",\"created_by\":1,\"guardian_image\":\"\",\"id\":8}', 'http://localhost/edu/public/guardian/register', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-07 04:00:48', '2020-01-07 04:00:48'),
(157, 'App\\User', 1, 'created', 'App\\User', 4, '[]', '{\"role_id\":\"7\",\"hook_id\":\"8\",\"name\":\"Dinesh SFSDF SDFSDF\",\"email\":\"Dinesh@gmail.com\",\"password\":\"$2y$10$9twzSoTa3j.CuUyJ23uF3.2RCPPihV5Mc8DBHWdmYLXKP7RxkOcla\",\"id\":4}', 'http://localhost/edu/public/student/guardian/user/create', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-07 04:02:21', '2020-01-07 04:02:21'),
(158, 'App\\User', 1, 'updated', 'App\\Models\\GuardianDetail', 8, '{\"guardian_email\":\"admin@gmail.com\"}', '{\"guardian_email\":\"Dinesh@gmail.com\"}', 'http://localhost/edu/public/guardian/8/update', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-07 04:02:32', '2020-01-07 04:02:32'),
(159, 'App\\User', 1, 'updated', 'App\\User', 4, '{\"password\":\"$2y$10$9twzSoTa3j.CuUyJ23uF3.2RCPPihV5Mc8DBHWdmYLXKP7RxkOcla\"}', '{\"password\":\"$2y$10$JYqUMtqWc2h24czmn81Kg.aR3V5ywKF7kiQOyF28pkXB2OGE6hjn6\"}', 'http://localhost/edu/public/student/guardian/4/user/update', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-07 04:03:05', '2020-01-07 04:03:05'),
(160, 'App\\User', 1, 'updated', 'App\\Models\\Staff', 3, '{\"last_updated_by\":null,\"join_date\":\"2019-11-01 00:00:00\",\"date_of_birth\":\"1995-09-19 00:00:00\",\"email\":\"test@test.com\"}', '{\"last_updated_by\":1,\"join_date\":\"2019-11-01\",\"date_of_birth\":\"1995-09-19\",\"email\":\"Staff@test.com\"}', 'http://localhost/edu/public/staff/3/update', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-07 04:04:26', '2020-01-07 04:04:26'),
(161, 'App\\User', 1, 'created', 'App\\User', 5, '[]', '{\"role_id\":\"5\",\"hook_id\":\"3\",\"name\":\"TEST STAFF  01\",\"email\":\"Staff@test.com\",\"password\":\"$2y$10$tJeWG1duF27TapLbevZzh.dD..acOVgwSMI8\\/AJoO77SaNdyvwAR.\",\"id\":5}', 'http://localhost/edu/public/staff/user/create', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-07 04:43:49', '2020-01-07 04:43:49'),
(162, 'App\\User', 5, 'updated', 'App\\User', 5, '{\"last_login_at\":null,\"last_login_ip\":null}', '{\"last_login_at\":\"2020-01-07 12:26:16\",\"last_login_ip\":\"::1\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-07 06:56:16', '2020-01-07 06:56:16'),
(163, 'App\\User', 4, 'updated', 'App\\User', 4, '{\"last_login_at\":null,\"last_login_ip\":null}', '{\"last_login_at\":\"2020-01-07 12:28:07\",\"last_login_ip\":\"::1\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-07 06:58:07', '2020-01-07 06:58:07'),
(164, 'App\\User', 2, 'updated', 'App\\User', 2, '{\"last_login_at\":\"2020-01-07 09:06:50\"}', '{\"last_login_at\":\"2020-01-07 12:28:53\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-07 06:58:53', '2020-01-07 06:58:53'),
(165, 'App\\User', 3, 'updated', 'App\\User', 3, '{\"last_login_at\":null,\"last_login_ip\":null}', '{\"last_login_at\":\"2020-01-07 12:31:40\",\"last_login_ip\":\"::1\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-07 07:01:40', '2020-01-07 07:01:40'),
(166, 'App\\User', 2, 'updated', 'App\\User', 2, '{\"last_login_at\":\"2020-01-07 12:28:53\"}', '{\"last_login_at\":\"2020-01-07 12:33:32\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-07 07:03:32', '2020-01-07 07:03:32'),
(167, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-01-07 09:15:42\",\"last_login_ip\":\"::1\"}', '{\"last_login_at\":\"2020-01-08 06:15:26\",\"last_login_ip\":\"192.168.1.22\"}', 'http://192.168.1.22/edu/public/login', '192.168.1.22', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-08 00:45:26', '2020-01-08 00:45:26'),
(168, 'App\\User', 3, 'updated', 'App\\User', 3, '{\"last_login_at\":\"2020-01-07 12:31:40\",\"last_login_ip\":\"::1\"}', '{\"last_login_at\":\"2020-01-08 06:18:57\",\"last_login_ip\":\"192.168.1.22\"}', 'http://192.168.1.22/edu/public/login', '192.168.1.22', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-08 00:48:57', '2020-01-08 00:48:57'),
(169, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-01-08 06:15:26\"}', '{\"last_login_at\":\"2020-01-08 06:20:41\"}', 'http://192.168.1.22/edu/public/login', '192.168.1.22', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-08 00:50:41', '2020-01-08 00:50:41'),
(170, 'App\\User', 3, 'updated', 'App\\User', 3, '{\"last_login_at\":\"2020-01-08 06:18:57\"}', '{\"last_login_at\":\"2020-01-08 06:45:45\"}', 'http://192.168.1.22/edu/public/login', '192.168.1.22', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-08 01:15:45', '2020-01-08 01:15:45'),
(171, 'App\\User', 4, 'updated', 'App\\User', 4, '{\"last_login_at\":\"2020-01-07 12:28:07\",\"last_login_ip\":\"::1\"}', '{\"last_login_at\":\"2020-01-08 09:35:26\",\"last_login_ip\":\"192.168.1.22\"}', 'http://192.168.1.22/edu/public/login', '192.168.1.22', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-08 04:05:26', '2020-01-08 04:05:26'),
(172, 'App\\User', 3, 'updated', 'App\\User', 3, '{\"last_login_at\":\"2020-01-08 06:45:45\",\"last_login_ip\":\"192.168.1.22\"}', '{\"last_login_at\":\"2020-01-08 10:55:58\",\"last_login_ip\":\"192.168.1.115\"}', 'http://192.168.1.22/edu/public/login', '192.168.1.115', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.79 Safari/537.36', NULL, '2020-01-08 05:25:58', '2020-01-08 05:25:58'),
(173, 'App\\User', 4, 'updated', 'App\\User', 4, '{\"last_login_at\":\"2020-01-08 09:35:26\"}', '{\"last_login_at\":\"2020-01-08 11:01:30\"}', 'http://192.168.1.22/edu/public/login', '192.168.1.22', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-08 05:31:30', '2020-01-08 05:31:30'),
(174, 'App\\User', 4, 'updated', 'App\\User', 4, '{\"last_login_at\":\"2020-01-08 11:01:30\"}', '{\"last_login_at\":\"2020-01-08 11:21:59\"}', 'http://192.168.1.22/edu/public/login', '192.168.1.22', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-08 05:51:59', '2020-01-08 05:51:59'),
(175, 'App\\User', 5, 'updated', 'App\\User', 5, '{\"last_login_at\":\"2020-01-07 12:26:16\",\"last_login_ip\":\"::1\"}', '{\"last_login_at\":\"2020-01-08 11:45:11\",\"last_login_ip\":\"192.168.1.22\"}', 'http://192.168.1.22/edu/public/login', '192.168.1.22', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-08 06:15:11', '2020-01-08 06:15:11'),
(176, 'App\\User', 3, 'updated', 'App\\User', 3, '{\"last_login_at\":\"2020-01-08 10:55:58\",\"last_login_ip\":\"192.168.1.115\"}', '{\"last_login_at\":\"2020-01-09 05:48:59\",\"last_login_ip\":\"::1\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-09 00:18:59', '2020-01-09 00:18:59'),
(177, 'App\\User', 5, 'updated', 'App\\User', 5, '{\"last_login_at\":\"2020-01-08 11:45:11\",\"last_login_ip\":\"192.168.1.22\"}', '{\"last_login_at\":\"2020-01-09 05:49:30\",\"last_login_ip\":\"::1\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-09 00:19:30', '2020-01-09 00:19:30'),
(178, 'App\\User', 2, 'updated', 'App\\User', 2, '{\"last_login_at\":\"2020-01-07 12:33:32\"}', '{\"last_login_at\":\"2020-01-09 06:55:48\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-09 01:25:48', '2020-01-09 01:25:48'),
(179, 'App\\User', 5, 'updated', 'App\\User', 5, '{\"last_login_at\":\"2020-01-09 05:49:30\"}', '{\"last_login_at\":\"2020-01-09 06:57:50\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-09 01:27:50', '2020-01-09 01:27:50'),
(180, 'App\\User', 3, 'updated', 'App\\User', 3, '{\"last_login_at\":\"2020-01-09 05:48:59\"}', '{\"last_login_at\":\"2020-01-09 06:58:30\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-09 01:28:30', '2020-01-09 01:28:30'),
(181, 'App\\User', 4, 'updated', 'App\\User', 4, '{\"last_login_at\":\"2020-01-08 11:21:59\",\"last_login_ip\":\"192.168.1.22\"}', '{\"last_login_at\":\"2020-01-09 07:12:10\",\"last_login_ip\":\"::1\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-09 01:42:10', '2020-01-09 01:42:10'),
(182, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-01-08 06:20:41\",\"last_login_ip\":\"192.168.1.22\"}', '{\"last_login_at\":\"2020-01-09 07:14:09\",\"last_login_ip\":\"::1\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-09 01:44:09', '2020-01-09 01:44:09'),
(183, 'App\\User', 3, 'updated', 'App\\User', 3, '{\"last_login_at\":\"2020-01-09 06:58:30\"}', '{\"last_login_at\":\"2020-01-09 07:32:20\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-09 02:02:20', '2020-01-09 02:02:20'),
(184, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-01-09 07:14:09\"}', '{\"last_login_at\":\"2020-01-09 07:34:34\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-09 02:04:34', '2020-01-09 02:04:34'),
(185, 'App\\User', 5, 'updated', 'App\\User', 5, '{\"last_login_at\":\"2020-01-09 06:57:50\"}', '{\"last_login_at\":\"2020-01-09 08:00:34\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-09 02:30:34', '2020-01-09 02:30:34'),
(186, 'App\\User', 3, 'updated', 'App\\User', 3, '{\"last_login_at\":\"2020-01-09 07:32:20\"}', '{\"last_login_at\":\"2020-01-09 08:06:39\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-09 02:36:39', '2020-01-09 02:36:39'),
(187, 'App\\User', 3, 'updated', 'App\\User', 3, '{\"last_login_at\":\"2020-01-09 08:06:39\"}', '{\"last_login_at\":\"2020-01-09 08:09:30\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-09 02:39:30', '2020-01-09 02:39:30'),
(188, 'App\\User', 5, 'updated', 'App\\User', 5, '{\"last_login_at\":\"2020-01-09 08:00:34\"}', '{\"last_login_at\":\"2020-01-09 08:10:13\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-09 02:40:13', '2020-01-09 02:40:13'),
(189, 'App\\User', 3, 'updated', 'App\\User', 3, '{\"last_login_at\":\"2020-01-09 08:09:30\"}', '{\"last_login_at\":\"2020-01-09 08:12:14\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-09 02:42:14', '2020-01-09 02:42:14'),
(190, 'App\\User', 4, 'updated', 'App\\User', 4, '{\"last_login_at\":\"2020-01-09 07:12:10\"}', '{\"last_login_at\":\"2020-01-09 08:49:22\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-09 03:19:22', '2020-01-09 03:19:22'),
(191, 'App\\User', 4, 'updated', 'App\\User', 4, '{\"last_login_at\":\"2020-01-09 08:49:22\"}', '{\"last_login_at\":\"2020-01-09 09:56:08\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-09 04:26:08', '2020-01-09 04:26:08'),
(192, 'App\\User', 5, 'updated', 'App\\User', 5, '{\"last_login_at\":\"2020-01-09 08:10:13\"}', '{\"last_login_at\":\"2020-01-09 11:01:29\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-09 05:31:29', '2020-01-09 05:31:29'),
(193, 'App\\User', 3, 'updated', 'App\\User', 3, '{\"last_login_at\":\"2020-01-09 08:12:14\"}', '{\"last_login_at\":\"2020-01-09 11:04:45\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-09 05:34:45', '2020-01-09 05:34:45'),
(194, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-01-09 07:34:34\"}', '{\"last_login_at\":\"2020-01-09 11:06:08\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-09 05:36:08', '2020-01-09 05:36:08'),
(195, 'App\\User', 3, 'updated', 'App\\User', 3, '{\"last_login_at\":\"2020-01-09 11:04:45\"}', '{\"last_login_at\":\"2020-01-09 11:33:42\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-09 06:03:42', '2020-01-09 06:03:42'),
(196, 'App\\User', 4, 'updated', 'App\\User', 4, '{\"last_login_at\":\"2020-01-09 09:56:08\"}', '{\"last_login_at\":\"2020-01-09 11:45:42\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-09 06:15:42', '2020-01-09 06:15:42'),
(197, 'App\\User', 3, 'updated', 'App\\User', 3, '{\"last_login_at\":\"2020-01-09 11:33:42\"}', '{\"last_login_at\":\"2020-01-09 11:48:15\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-09 06:18:15', '2020-01-09 06:18:15'),
(198, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-01-09 11:06:08\"}', '{\"last_login_at\":\"2020-01-09 11:54:30\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-09 06:24:30', '2020-01-09 06:24:30'),
(199, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-01-09 11:54:30\"}', '{\"last_login_at\":\"2020-01-13 05:37:41\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-13 00:07:41', '2020-01-13 00:07:41'),
(200, 'App\\User', 1, 'created', 'App\\User', 6, '[]', '{\"name\":\"VIVEK@gmail.com\",\"email\":\"VIVEK@gmail.com\",\"password\":\"$2y$10$MXNGumVerlK49LevIL9freIS1lo50fkwDAo3IAzPQ3hf3QhOZ4.Qi\",\"contact_number\":\"65646546544\",\"address\":\"fhgfdhfg\",\"profile_image\":\"\",\"id\":6}', 'http://localhost/edu/public/user/store', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-13 01:49:00', '2020-01-13 01:49:00'),
(201, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-01-13 05:37:41\"}', '{\"last_login_at\":\"2020-01-14 06:42:22\"}', 'http://localhost/edu/public/login', '::1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', NULL, '2020-01-14 01:12:22', '2020-01-14 01:12:22'),
(202, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-01-14 09:12:22\",\"last_login_ip\":\"::1\"}', '{\"last_login_at\":\"2020-02-07 14:25:15\",\"last_login_ip\":\"58.179.58.239\"}', 'http://viholdings.com.au/edu/public/login', '58.179.58.239', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.14; rv:72.0) Gecko/20100101 Firefox/72.0', NULL, '2020-02-07 06:25:15', '2020-02-07 06:25:15'),
(203, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-02-07 14:25:15\"}', '{\"last_login_at\":\"2020-02-07 14:33:18\"}', 'http://viholdings.com.au/edu/public/login', '58.179.58.239', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.14; rv:72.0) Gecko/20100101 Firefox/72.0', NULL, '2020-02-07 06:33:18', '2020-02-07 06:33:18'),
(204, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-02-07 14:33:18\"}', '{\"last_login_at\":\"2020-02-14 02:57:43\"}', 'http://viholdings.com.au/edu/public/login', '58.179.58.239', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.14; rv:72.0) Gecko/20100101 Firefox/72.0', NULL, '2020-02-13 18:57:43', '2020-02-13 18:57:43'),
(205, 'App\\User', 1, 'created', 'App\\Models\\BookCategory', 1, '[]', '{\"title\":\"SPORTS\",\"created_by\":1,\"slug\":\"SPORTS\",\"id\":1}', 'http://viholdings.com.au/edu/public/library/book/category/store', '58.179.58.239', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.14; rv:72.0) Gecko/20100101 Firefox/72.0', NULL, '2020-02-13 19:38:39', '2020-02-13 19:38:39'),
(206, 'App\\User', 1, 'created', 'App\\Models\\BookMaster', 1, '[]', '{\"isbn_number\":\"22321\",\"code\":\"123\",\"title\":\"Test book\",\"sub_title\":\"test booking\",\"categories\":\"1\",\"edition\":\"1\",\"edition_year\":\"2020\",\"language\":\"eng\",\"publisher\":\"Test\",\"publish_year\":\"2020\",\"series\":null,\"author\":\"dont know\",\"rack_location\":\"1\",\"price\":\"200\",\"total_pages\":\"200\",\"source\":null,\"notes\":\"This is test\",\"created_by\":1,\"image\":\"9510.jpg\",\"id\":1}', 'http://viholdings.com.au/edu/public/library/book/store', '58.179.58.239', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.14; rv:72.0) Gecko/20100101 Firefox/72.0', NULL, '2020-02-13 19:40:10', '2020-02-13 19:40:10'),
(207, 'App\\User', 1, 'created', 'App\\Models\\Book', 1, '[]', '{\"book_masters_id\":1,\"book_code\":\"1231\",\"created_by\":1,\"book_status\":\"1\",\"id\":1}', 'http://viholdings.com.au/edu/public/library/book/store', '58.179.58.239', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.14; rv:72.0) Gecko/20100101 Firefox/72.0', NULL, '2020-02-13 19:40:10', '2020-02-13 19:40:10'),
(208, 'App\\User', 1, 'created', 'App\\Models\\Book', 2, '[]', '{\"book_masters_id\":1,\"book_code\":\"1232\",\"created_by\":1,\"book_status\":\"1\",\"id\":2}', 'http://viholdings.com.au/edu/public/library/book/store', '58.179.58.239', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.14; rv:72.0) Gecko/20100101 Firefox/72.0', NULL, '2020-02-13 19:40:10', '2020-02-13 19:40:10'),
(209, 'App\\User', 1, 'created', 'App\\Models\\RoomType', 1, '[]', '{\"title\":\"SHARED TWO\",\"created_by\":1,\"id\":1}', 'http://viholdings.com.au/edu/public/hostel/room-type/store', '58.179.58.239', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.14; rv:72.0) Gecko/20100101 Firefox/72.0', NULL, '2020-02-13 19:42:19', '2020-02-13 19:42:19'),
(210, 'App\\User', 1, 'updated', 'App\\Models\\GeneralSetting', 1, '{\"copyright\":null,\"address\":null,\"phone\":null,\"email\":null,\"time_zones_id\":null}', '{\"copyright\":\"Edu MIS\",\"address\":\"Earth\",\"phone\":\"12333\",\"email\":\"earth@website.com\",\"time_zones_id\":\"347\"}', 'http://viholdings.com.au/edu/public/setting/general/1/update', '58.179.58.239', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.14; rv:72.0) Gecko/20100101 Firefox/72.0', NULL, '2020-02-13 19:56:25', '2020-02-13 19:56:25'),
(211, 'App\\User', 1, 'created', 'App\\User', 7, '[]', '{\"role_id\":\"5\",\"hook_id\":\"1\",\"name\":\"new staff\",\"email\":\"staff@gmail.com\",\"password\":\"$2y$10$EHsUptA\\/xXOIiO2eOaDVLOPG42ocUaQJqv6.Vm25upfnDKOEVYogO\",\"id\":7}', 'http://viholdings.com.au/edu/public/staff/user/create', '58.179.58.239', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.14; rv:72.0) Gecko/20100101 Firefox/72.0', NULL, '2020-02-13 20:05:21', '2020-02-13 20:05:21'),
(212, 'App\\User', 7, 'updated', 'App\\User', 7, '{\"last_login_at\":null,\"last_login_ip\":null}', '{\"last_login_at\":\"2020-02-14 04:05:46\",\"last_login_ip\":\"58.179.58.239\"}', 'http://viholdings.com.au/edu/public/login', '58.179.58.239', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.100 Safari/537.36', NULL, '2020-02-13 20:05:46', '2020-02-13 20:05:46'),
(213, 'App\\User', 1, 'created', 'App\\User', 8, '[]', '{\"role_id\":\"7\",\"hook_id\":\"4\",\"name\":\"TEST  GURDIAN\",\"email\":\"guardian@gmail.com\",\"password\":\"$2y$10$MPV8QSQEPK9PmY.SAzrJPuvaewrZ91aTQ2Cy.c1ZfKrrICzm7EP8.\",\"id\":8}', 'http://viholdings.com.au/edu/public/student/guardian/user/create', '58.179.58.239', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.14; rv:72.0) Gecko/20100101 Firefox/72.0', NULL, '2020-02-13 20:08:06', '2020-02-13 20:08:06'),
(214, 'App\\User', 1, 'created', 'App\\User', 9, '[]', '{\"role_id\":\"6\",\"hook_id\":\"5\",\"name\":\"TEST STUDENT 01\",\"email\":\"student@gmail.com\",\"password\":\"$2y$10$6mnxXmiuPlt6uw3a8UuPyOTqxHMheoDk50hA9Fu7Ot.uZRvzr.p42\",\"id\":9}', 'http://viholdings.com.au/edu/public/student/user/create', '58.179.58.239', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.14; rv:72.0) Gecko/20100101 Firefox/72.0', NULL, '2020-02-13 20:08:29', '2020-02-13 20:08:29'),
(215, 'App\\User', 9, 'updated', 'App\\User', 9, '{\"last_login_at\":null,\"last_login_ip\":null}', '{\"last_login_at\":\"2020-02-14 04:08:43\",\"last_login_ip\":\"58.179.58.239\"}', 'http://viholdings.com.au/edu/public/login', '58.179.58.239', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.100 Safari/537.36', NULL, '2020-02-13 20:08:43', '2020-02-13 20:08:43'),
(216, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-02-14 02:57:43\"}', '{\"last_login_at\":\"2020-02-14 04:45:38\"}', 'http://viholdings.com.au/edu/public/login', '58.179.58.239', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.14; rv:72.0) Gecko/20100101 Firefox/72.0', NULL, '2020-02-13 20:45:38', '2020-02-13 20:45:38'),
(217, 'App\\User', 9, 'updated', 'App\\User', 9, '{\"last_login_at\":\"2020-02-14 04:08:43\"}', '{\"last_login_at\":\"2020-02-14 04:47:29\"}', 'http://viholdings.com.au/edu/public/login', '58.179.58.239', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.100 Safari/537.36', NULL, '2020-02-13 20:47:29', '2020-02-13 20:47:29'),
(218, 'App\\User', 9, 'updated', 'App\\User', 9, '{\"last_login_at\":\"2020-02-14 04:47:29\"}', '{\"last_login_at\":\"2020-02-14 04:49:15\"}', 'http://viholdings.com.au/edu/public/login', '58.179.58.239', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.14; rv:72.0) Gecko/20100101 Firefox/72.0', NULL, '2020-02-13 20:49:15', '2020-02-13 20:49:15'),
(219, 'App\\User', 9, 'updated', 'App\\User', 9, '{\"last_login_at\":\"2020-02-14 04:49:15\"}', '{\"last_login_at\":\"2020-02-14 05:12:09\"}', 'http://viholdings.com.au/edu/public/login', '58.179.58.239', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.14; rv:72.0) Gecko/20100101 Firefox/72.0', NULL, '2020-02-13 21:12:09', '2020-02-13 21:12:09'),
(220, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-02-14 04:45:38\"}', '{\"last_login_at\":\"2020-02-14 05:12:43\"}', 'http://viholdings.com.au/edu/public/login', '58.179.58.239', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.14; rv:72.0) Gecko/20100101 Firefox/72.0', NULL, '2020-02-13 21:12:43', '2020-02-13 21:12:43'),
(221, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-02-14 05:12:43\"}', '{\"last_login_at\":\"2020-02-14 05:15:33\"}', 'http://viholdings.com.au/edu/public/login', '58.179.58.239', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.14; rv:72.0) Gecko/20100101 Firefox/72.0', NULL, '2020-02-13 21:15:33', '2020-02-13 21:15:33'),
(222, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-02-14 05:15:33\",\"last_login_ip\":\"58.179.58.239\"}', '{\"last_login_at\":\"2020-02-14 08:12:40\",\"last_login_ip\":\"219.91.238.30\"}', 'http://viholdings.com.au/edu/public/login', '219.91.238.30', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.100 Safari/537.36', NULL, '2020-02-14 00:12:40', '2020-02-14 00:12:40'),
(223, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-02-14 08:12:40\",\"last_login_ip\":\"219.91.238.30\"}', '{\"last_login_at\":\"2020-02-14 08:16:09\",\"last_login_ip\":\"103.238.105.252\"}', 'http://viholdings.com.au/edu/public/login', '103.238.105.252', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.100 Safari/537.36', NULL, '2020-02-14 00:16:09', '2020-02-14 00:16:09'),
(224, 'App\\User', 1, 'created', 'App\\Models\\PaymentMethod', 3, '[]', '{\"title\":\"test1\",\"created_by\":1,\"id\":3}', 'http://viholdings.com.au/edu/public/payment-method/store', '219.91.238.30', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.100 Safari/537.36', NULL, '2020-02-14 00:26:31', '2020-02-14 00:26:31'),
(225, 'App\\User', 1, 'deleted', 'App\\Models\\PaymentMethod', 3, '{\"id\":3,\"created_by\":1,\"last_updated_by\":null,\"title\":\"test1\",\"status\":1}', '[]', 'http://viholdings.com.au/edu/public/payment-method/3/delete', '219.91.238.30', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.100 Safari/537.36', NULL, '2020-02-14 00:26:35', '2020-02-14 00:26:35'),
(226, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-02-14 08:16:09\",\"last_login_ip\":\"103.238.105.252\"}', '{\"last_login_at\":\"2020-02-14 09:33:50\",\"last_login_ip\":\"42.106.15.101\"}', 'http://viholdings.com.au/edu/public/login', '42.106.15.101', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', NULL, '2020-02-14 01:33:50', '2020-02-14 01:33:50'),
(227, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-02-14 09:33:50\",\"last_login_ip\":\"42.106.15.101\"}', '{\"last_login_at\":\"2020-02-14 09:36:54\",\"last_login_ip\":\"103.43.248.222\"}', 'http://viholdings.com.au/edu/public/login', '103.43.248.222', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.100 Safari/537.36', NULL, '2020-02-14 01:36:54', '2020-02-14 01:36:54'),
(228, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-02-14 09:36:54\",\"last_login_ip\":\"103.43.248.222\"}', '{\"last_login_at\":\"2020-02-14 12:20:08\",\"last_login_ip\":\"39.45.152.175\"}', 'http://viholdings.com.au/edu/public/login', '39.45.152.175', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.100 Safari/537.36', NULL, '2020-02-14 04:20:08', '2020-02-14 04:20:08'),
(229, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-02-14 12:20:08\"}', '{\"last_login_at\":\"2020-02-14 12:36:28\"}', 'http://viholdings.com.au/edu/public/login', '39.45.152.175', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', NULL, '2020-02-14 04:36:28', '2020-02-14 04:36:28');
INSERT INTO `audits` (`id`, `user_type`, `user_id`, `event`, `auditable_type`, `auditable_id`, `old_values`, `new_values`, `url`, `ip_address`, `user_agent`, `tags`, `created_at`, `updated_at`) VALUES
(230, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-02-14 12:36:28\",\"last_login_ip\":\"39.45.152.175\"}', '{\"last_login_at\":\"2020-02-16 01:46:15\",\"last_login_ip\":\"103.221.233.29\"}', 'http://viholdings.com.au/edu/public/login', '103.221.233.29', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.5 Mobile/15E148 Safari/604.1', NULL, '2020-02-15 17:46:15', '2020-02-15 17:46:15'),
(231, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-02-16 01:46:15\",\"last_login_ip\":\"103.221.233.29\"}', '{\"last_login_at\":\"2020-02-17 04:33:14\",\"last_login_ip\":\"113.193.179.28\"}', 'http://viholdings.com.au/edu/public/login', '113.193.179.28', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.106 Safari/537.36', NULL, '2020-02-16 20:33:14', '2020-02-16 20:33:14'),
(232, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-02-17 04:33:14\",\"last_login_ip\":\"113.193.179.28\"}', '{\"last_login_at\":\"2020-02-17 05:00:58\",\"last_login_ip\":\"117.99.98.40\"}', 'http://viholdings.com.au/edu/public/login', '117.99.98.40', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.106 Safari/537.36', NULL, '2020-02-16 21:00:58', '2020-02-16 21:00:58'),
(233, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-02-17 05:00:58\",\"last_login_ip\":\"117.99.98.40\"}', '{\"last_login_at\":\"2020-02-17 06:28:34\",\"last_login_ip\":\"165.231.253.52\"}', 'http://viholdings.com.au/edu/public/login', '165.231.253.52', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', NULL, '2020-02-16 22:28:34', '2020-02-16 22:28:34'),
(234, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-02-17 06:28:34\",\"last_login_ip\":\"165.231.253.52\"}', '{\"last_login_at\":\"2020-02-17 06:53:08\",\"last_login_ip\":\"117.99.98.40\"}', 'http://viholdings.com.au/edu/public/login', '117.99.98.40', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.106 Safari/537.36', NULL, '2020-02-16 22:53:08', '2020-02-16 22:53:08'),
(235, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-02-17 06:53:08\"}', '{\"last_login_at\":\"2020-02-17 07:03:01\"}', 'http://viholdings.com.au/edu/public/login', '117.99.98.40', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.87 Safari/537.36', NULL, '2020-02-16 23:03:01', '2020-02-16 23:03:01'),
(236, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-02-17 07:03:01\",\"last_login_ip\":\"117.99.98.40\"}', '{\"last_login_at\":\"2020-02-17 07:13:08\",\"last_login_ip\":\"122.170.70.251\"}', 'http://viholdings.com.au/edu/public/login', '122.170.70.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', NULL, '2020-02-16 23:13:08', '2020-02-16 23:13:08'),
(237, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-02-17 07:13:08\"}', '{\"last_login_at\":\"2020-02-17 07:40:09\"}', 'http://viholdings.com.au/edu/public/login', '122.170.70.251', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', NULL, '2020-02-16 23:40:09', '2020-02-16 23:40:09'),
(238, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-02-17 07:40:09\",\"last_login_ip\":\"122.170.70.251\"}', '{\"last_login_at\":\"2020-02-17 07:41:33\",\"last_login_ip\":\"45.248.157.17\"}', 'http://viholdings.com.au/edu/public/login', '45.248.157.17', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.92 Safari/537.36', NULL, '2020-02-16 23:41:33', '2020-02-16 23:41:33'),
(239, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-02-17 07:41:33\",\"last_login_ip\":\"45.248.157.17\"}', '{\"last_login_at\":\"2020-02-17 08:34:50\",\"last_login_ip\":\"118.179.58.227\"}', 'http://viholdings.com.au/edu/public/login', '118.179.58.227', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.106 Safari/537.36', NULL, '2020-02-17 00:34:50', '2020-02-17 00:34:50'),
(240, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-02-17 08:34:50\",\"last_login_ip\":\"118.179.58.227\"}', '{\"last_login_at\":\"2020-02-17 08:51:39\",\"last_login_ip\":\"117.99.98.40\"}', 'http://viholdings.com.au/edu/public/login', '117.99.98.40', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.106 Safari/537.36', NULL, '2020-02-17 00:51:39', '2020-02-17 00:51:39'),
(241, 'App\\User', 9, 'updated', 'App\\User', 9, '{\"last_login_at\":\"2020-02-14 05:12:09\",\"last_login_ip\":\"58.179.58.239\"}', '{\"last_login_at\":\"2020-02-17 09:14:27\",\"last_login_ip\":\"118.179.58.227\"}', 'http://viholdings.com.au/edu/public/login', '118.179.58.227', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.106 Safari/537.36', NULL, '2020-02-17 01:14:27', '2020-02-17 01:14:27'),
(242, 'App\\User', 9, 'updated', 'App\\User', 9, '{\"last_login_at\":\"2020-02-17 09:14:27\",\"last_login_ip\":\"118.179.58.227\"}', '{\"last_login_at\":\"2020-02-17 09:15:14\",\"last_login_ip\":\"58.179.58.239\"}', 'http://viholdings.com.au/edu/public/login', '58.179.58.239', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.106 Safari/537.36', NULL, '2020-02-17 01:15:14', '2020-02-17 01:15:14'),
(243, 'App\\User', 1, 'updated', 'App\\User', 1, '{\"last_login_at\":\"2020-02-17 08:51:39\",\"last_login_ip\":\"117.99.98.40\"}', '{\"last_login_at\":\"2020-02-17 10:34:24\",\"last_login_ip\":\"122.170.70.251\"}', 'http://viholdings.com.au/edu/public/login', '122.170.70.251', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', NULL, '2020-02-17 02:34:24', '2020-02-17 02:34:24');

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `bank_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ac_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ac_number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bank_transactions`
--

CREATE TABLE `bank_transactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `banks_id` int(10) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deposit_id` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `dr_amt` int(11) NOT NULL DEFAULT 0,
  `cr_amt` int(11) NOT NULL DEFAULT 0,
  `amount` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `beds`
--

CREATE TABLE `beds` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `hostels_id` int(10) UNSIGNED NOT NULL,
  `rooms_id` int(10) UNSIGNED NOT NULL,
  `bed_number` int(11) NOT NULL,
  `bed_status` int(10) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bed_statuses`
--

CREATE TABLE `bed_statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_class` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bed_statuses`
--

INSERT INTO `bed_statuses` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `title`, `display_class`, `status`) VALUES
(1, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'Available', 'btn-success', 1),
(2, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'Occupied', 'btn-primary', 1),
(3, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'Damage', 'btn-danger', 1),
(4, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'UnderConstruction', 'btn-default', 1),
(5, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'UnderMaintinance', 'btn-default', 1),
(6, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'NeedMaintinance', 'btn-default', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bonafide_certificates`
--

CREATE TABLE `bonafide_certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `students_id` int(10) UNSIGNED NOT NULL,
  `date_of_issue` date NOT NULL,
  `course` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `period` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `character` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `book_masters_id` int(10) UNSIGNED NOT NULL,
  `book_code` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_status` int(10) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `book_masters_id`, `book_code`, `book_status`) VALUES
(1, '2020-02-13 19:40:10', '2020-02-13 19:40:10', 1, NULL, 1, '1231', 1),
(2, '2020-02-13 19:40:10', '2020-02-13 19:40:10', 1, NULL, 1, '1232', 1);

-- --------------------------------------------------------

--
-- Table structure for table `book_categories`
--

CREATE TABLE `book_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_categories`
--

INSERT INTO `book_categories` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `title`, `slug`, `status`) VALUES
(1, '2020-02-13 19:38:39', '2020-02-13 19:38:39', 1, NULL, 'SPORTS', 'SPORTS', 1);

-- --------------------------------------------------------

--
-- Table structure for table `book_issues`
--

CREATE TABLE `book_issues` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `member_id` int(10) UNSIGNED NOT NULL,
  `book_id` int(10) UNSIGNED NOT NULL,
  `issued_on` datetime NOT NULL,
  `due_date` datetime NOT NULL,
  `return_date` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `book_masters`
--

CREATE TABLE `book_masters` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `categories` int(10) UNSIGNED DEFAULT NULL,
  `isbn_number` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `editor` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edition` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edition_year` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publisher` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_year` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `series` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rack_location` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_pages` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_masters`
--

INSERT INTO `book_masters` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `categories`, `isbn_number`, `code`, `title`, `sub_title`, `image`, `language`, `editor`, `edition`, `edition_year`, `publisher`, `publish_year`, `series`, `author`, `rack_location`, `price`, `total_pages`, `source`, `notes`, `status`) VALUES
(1, '2020-02-13 19:40:10', '2020-02-13 19:40:10', 1, NULL, 1, '22321', '123', 'Test book', 'test booking', '9510.jpg', 'eng', NULL, '1', '2020', 'Test', '2020', NULL, 'dont know', '1', '200', '200', NULL, 'This is test', 1);

-- --------------------------------------------------------

--
-- Table structure for table `book_requests`
--

CREATE TABLE `book_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `book_masters_id` int(10) UNSIGNED NOT NULL,
  `member_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `book_statuses`
--

CREATE TABLE `book_statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_class` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_statuses`
--

INSERT INTO `book_statuses` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `title`, `display_class`, `status`) VALUES
(1, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'Available', 'btn-success', 1),
(2, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'Issued', 'btn-primary', 1),
(3, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'Damage', 'btn-danger', 1),
(4, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'Lost', 'btn-default', 1);

-- --------------------------------------------------------

--
-- Table structure for table `certificate_histories`
--

CREATE TABLE `certificate_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `students_id` int(10) UNSIGNED NOT NULL,
  `certificate` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certificate_id` int(10) UNSIGNED NOT NULL,
  `history_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `certificate_templates`
--

CREATE TABLE `certificate_templates` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `certificate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `template` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_photo` tinyint(1) NOT NULL DEFAULT 1,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certificate_templates`
--

INSERT INTO `certificate_templates` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `certificate`, `template`, `student_photo`, `status`) VALUES
(1, '2019-10-10 12:34:04', '2019-10-10 12:34:04', 1, NULL, 'ATTENDANCE', '<table class=\"table table-bordered\"> <tbody> <tr> <td>01.</td> <td style=\"text-align: right; \">Name of Student :&nbsp;</td> <td width=\"50%\" style=\"text-align: left;\"><b>{{student_name}}</b><br></td> </tr> <tr> <td>02.</td> <td style=\"text-align: right; \">Reg. No.&nbsp;:&nbsp;</td> <td width=\"50%\" style=\"text-align: left;\"><span style=\"font-weight: 700;\">{{reg_no}}</span><br></td> </tr> <tr> <td>03.</td> <td style=\"text-align: right; \">University Reg. No.&nbsp;:&nbsp;</td> <td width=\"50%\" style=\"text-align: left;\"><span style=\"font-weight: 700;\">{{university_reg}}</span><br></td> </tr> <tr> <td>04.</td> <td style=\"text-align: right; \">Faculty/Level&nbsp;:&nbsp;</td> <td width=\"50%\" style=\"text-align: left;\"><span style=\"font-weight: 700;\">{{faculty}}</span><br></td> </tr><tr><td>05.</td><td style=\"text-align: right; \">Batch :&nbsp;<br></td><td width=\"50%\" style=\"text-align: left;\"><span style=\"font-weight: 700;\">{{batch}}</span><br></td></tr> <tr> <td>06.</td> <td style=\"text-align: right; \">Year of Study&nbsp;:&nbsp;</td> <td width=\"50%\" style=\"text-align: left;\"><span style=\"font-weight: 700;\">{{year_of_study}}</span><br></td> </tr> <tr> <td>07.</td> <td style=\"text-align: right; \">Percentage of Attendance Secured&nbsp;:&nbsp;</td> <td width=\"50%\" style=\"text-align: left;\"><b>{{percentage_of_attendance}}%</b><br></td> </tr> </tbody></table>', 0, 1),
(2, '2019-10-10 12:34:04', '2019-10-10 12:34:04', 1, NULL, 'TRANSFER', '<table class=\"table table-bordered\"> <tbody> <tr> <td style=\"text-align: right;\"><span style=\"text-align: right;\">TC No. :&nbsp;</span><br></td> <td style=\"text-align: left;\"><span style=\"font-weight: 700;\">{{tc_num}}</span><br></td> <td rowspan=\"5\">{{student_image}}</td> </tr> <tr> <td style=\"text-align: right; \"><span style=\"text-align: right;\">Faculty/Level :&nbsp;</span><br></td> <td style=\"text-align: left;\"><span style=\"font-weight: 700;\">{{faculty}}</span><br></td> </tr> <tr> <td style=\"text-align: right; \"><span style=\"text-align: right;\">Admission No./Reg.No. :</span><br></td> <td style=\"text-align: left;\"><span style=\"font-weight: 700;\">{{reg_no}}</span><br></td> </tr> <tr> <td style=\"text-align: right;\"><span style=\"text-align: right;\">University Reg. No. :</span><br></td> <td style=\"text-align: left;\"><b>{{university_reg}}</b><br></td> </tr><tr><td style=\"text-align: right;\">Batch. :<br></td><td style=\"text-align: left;\"><span style=\"font-weight: 700;\">{{batch}}</span><br></td></tr> </tbody></table><table class=\"table table-bordered\"> <tbody> <tr> <td>01.</td> <td style=\"text-align: right; \">Name of Student :&nbsp;</td> <td width=\"50%\" style=\"text-align: left;\"><b>{{student_name}}</b><br></td> </tr> <tr> <td>02.</td> <td style=\"text-align: right; \">Name of Father.&nbsp;:&nbsp;</td> <td width=\"50%\" style=\"text-align: left;\"><b>{{parents_name}}</b><br></td> </tr> <tr> <td>03.</td> <td style=\"text-align: right; \">Date of Birth :&nbsp;</td> <td width=\"50%\" style=\"text-align: left;\"><span style=\"font-weight: 700;\">{{date_of_birth}}</span><br></td> </tr> <tr> <td>04.</td> <td style=\"text-align: right; \">Gender :&nbsp;</td> <td width=\"50%\" style=\"text-align: left;\"><span style=\"font-weight: 700;\">{{gender}}</span><br></td> </tr> <tr> <td>05.</td> <td style=\"text-align: right; \">Nationality :&nbsp;</td> <td width=\"50%\" style=\"text-align: left;\"><span style=\"font-weight: 700;\">{{nationality}}</span><br></td> </tr> <tr> <td>06.</td> <td style=\"text-align: right; \">Religion :&nbsp;</td> <td width=\"50%\" style=\"text-align: left;\"><b>{{religion}}</b><br></td> </tr> <tr> <td>07.</td> <td style=\"text-align: right; \">Community &amp; Caste :&nbsp;</td> <td width=\"50%\" style=\"text-align: left;\"><span style=\"font-weight: 700;\">{{caste}}</span><br></td> </tr> <tr> <td>08.</td> <td style=\"text-align: right; \">Date of Admission :&nbsp;</td> <td width=\"50%\" style=\"text-align: left;\"><span style=\"font-weight: 700;\">{{reg_date}}</span><br></td> </tr> <tr> <td>09.</td> <td style=\"text-align: right; \">Date of Leaving :&nbsp;</td> <td width=\"50%\" style=\"text-align: left;\"><b>{{date_of_leaving}}</b><br></td> </tr> <tr> <td>10.</td> <td style=\"text-align: right;\">Class studied at the time of leaving :&nbsp;</td> <td width=\"50%\" style=\"text-align: left;\"><b>{{leaving_time_class}}</b><br></td> </tr> <tr> <td>11.</td> <td style=\"text-align: right; \">Whether qualified for promotion to higher class :&nbsp;</td> <td width=\"50%\" style=\"text-align: left;\"><b>{{qualified_to_promote}}</b><br></td> </tr> <tr> <td>12.</td> <td style=\"text-align: right; \">Whether the student has paid all Balance fees to the college :&nbsp;</td> <td width=\"50%\" style=\"text-align: left;\"><b>{{paid_fee_status}}</b><br></td> </tr> <tr> <td>13.</td> <td style=\"text-align: right; \">Conduct and Character :&nbsp;</td> <td width=\"50%\" style=\"text-align: left;\"><span style=\"font-weight: 700;\">{{character}}</span><br></td> </tr> </tbody></table>', 0, 1),
(3, '2019-10-10 12:34:04', '2019-10-10 12:34:04', 1, NULL, 'BONAFIDE', 'This is to certify that <b>{{student_name}} </b>Reg No. <b>{{reg_no}}</b>   Son of <b>{{parents_name}}</b> is a bonafide student of this College in the <b>{{course}}</b> course during the period <b>{{period}}</b>. His/Her Date of Birth as per our School/College record is <b>{{date_of_birth}}</b>.His/Her Conduct and Character are <b>{{character}}</b>.', 0, 1),
(4, '2019-10-10 12:34:04', '2019-10-10 12:34:04', 1, NULL, 'COURSE COMPLETION', '<p>This is to certify that <b>{{student_name}}</b> Reg No. <b>{{reg_no}}</b>&nbsp; Son of <b>{{parents_name}} </b>has studied <b>{{course}}</b> in our college during the <b>{{period}}</b>. His/Her Date of Birth as per our School/College record is <b>{{date_of_birth}}</b>.His/Her Conduct and Character are <b>{{character}}</b> during the tenure of his studies.<br></p>', 0, 1),
(5, '2019-10-10 12:34:04', '2019-10-10 12:34:04', 1, NULL, 'GENERAL TEMPLATE', '<p>REG.NO.: <b>{{reg_no}}&nbsp;</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;REG.DATE: <b>{{reg_date}}</b></p><p style=\"text-align: center; \">This is to certify that <b>{{student_name}}</b> son/daughter of <b>{{parents_name}}</b> Residing at <b>{{address}}</b> is bonafide Student of our school.</p><p style=\"text-align: center; \"><br></p><p style=\"text-align: center; \">He/She is /was very obedient, sincere and hardworking.</p><p style=\"text-align: center; \"><br></p><p style=\"text-align: center; \">He/She bears a good moral character. His/Her Date of Birth is <b>{{date_of_birth}}</b> and Place of Birth is <b>{{address}}</b>.</p>', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `course_completion_certificates`
--

CREATE TABLE `course_completion_certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `students_id` int(10) UNSIGNED NOT NULL,
  `date_of_issue` date NOT NULL,
  `course` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `period` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `character` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `title`, `status`) VALUES
(1, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'Sunday', 1),
(2, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'Monday', 1),
(3, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'Tuesday', 1),
(4, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'Wednesday', 1),
(5, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'Thursday', 1),
(6, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'Friday', 1),
(7, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'Saturday', 1);

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `member_type` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `member_type`, `member_id`, `title`, `file`, `description`, `status`) VALUES
(1, '2019-12-11 10:15:18', '2019-12-11 10:15:18', 1, NULL, 'staff', 1, 'dafsdf', '7007_dafsdf.png', 'fsdfsd fdsf', 1),
(4, '2020-01-02 07:34:44', '2020-01-02 07:34:44', 1, NULL, 'student', 5, 'Test Title', '6102_test-title.png', 'test pic', 1),
(5, '2020-01-02 07:51:24', '2020-01-02 07:51:24', 1, NULL, 'staff', 3, 'Test Title', '9442_test-title.png', 'nill', 1),
(6, '2020-01-06 04:46:36', '2020-01-06 04:46:36', 1, NULL, 'student', 6, 'show and download', '5779_show-and-download.png', 'rtdrdfg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `semesters_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `eating_times`
--

CREATE TABLE `eating_times` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` time DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `email_settings`
--

CREATE TABLE `email_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `driver` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `host` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `port` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `encryption` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam_mark_ledgers`
--

CREATE TABLE `exam_mark_ledgers` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `exam_schedule_id` int(10) UNSIGNED NOT NULL,
  `students_id` int(10) UNSIGNED NOT NULL,
  `obtain_mark_theory` int(11) NOT NULL DEFAULT 0,
  `absent_theory` tinyint(1) NOT NULL DEFAULT 0,
  `obtain_mark_practical` int(11) NOT NULL DEFAULT 0,
  `absent_practical` tinyint(1) NOT NULL DEFAULT 0,
  `sorting_order` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam_schedules`
--

CREATE TABLE `exam_schedules` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `years_id` int(10) UNSIGNED NOT NULL,
  `months_id` int(10) UNSIGNED NOT NULL,
  `exams_id` int(10) UNSIGNED NOT NULL,
  `faculty_id` int(10) UNSIGNED NOT NULL,
  `semesters_id` int(10) UNSIGNED NOT NULL,
  `subjects_id` int(10) UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `full_mark_theory` int(11) NOT NULL DEFAULT 0,
  `pass_mark_theory` int(11) NOT NULL DEFAULT 0,
  `full_mark_practical` int(11) NOT NULL DEFAULT 0,
  `pass_mark_practical` int(11) NOT NULL DEFAULT 0,
  `sorting_order` int(10) UNSIGNED NOT NULL,
  `publish_status` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `faculty` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faculty_code` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `faculty`, `faculty_code`, `status`) VALUES
(1, '2019-12-11 07:02:14', '2019-12-11 10:14:04', 1, 1, 'BTECH', 'BTECH', 1);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_semester`
--

CREATE TABLE `faculty_semester` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `faculty_id` int(10) UNSIGNED NOT NULL,
  `semester_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculty_semester`
--

INSERT INTO `faculty_semester` (`id`, `created_at`, `updated_at`, `faculty_id`, `semester_id`) VALUES
(1, NULL, NULL, 1, 1),
(2, NULL, NULL, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `fee_collections`
--

CREATE TABLE `fee_collections` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `students_id` int(10) UNSIGNED NOT NULL,
  `fee_masters_id` int(10) UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `paid_amount` int(11) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `fine` int(11) DEFAULT NULL,
  `payment_mode` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `response` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fee_heads`
--

CREATE TABLE `fee_heads` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `fee_head_title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee_head_amount` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fee_heads`
--

INSERT INTO `fee_heads` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `fee_head_title`, `fee_head_amount`, `status`) VALUES
(1, '2020-01-02 08:23:41', '2020-01-02 08:24:58', 1, NULL, 'TEST FEE', 1000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `fee_masters`
--

CREATE TABLE `fee_masters` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `students_id` int(10) UNSIGNED NOT NULL,
  `semester` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee_head` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee_due_date` datetime NOT NULL,
  `fee_amount` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `food_categories`
--

CREATE TABLE `food_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `food_items`
--

CREATE TABLE `food_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `foodCategories_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `food_item_food_schedule`
--

CREATE TABLE `food_item_food_schedule` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `food_schedule_id` int(10) UNSIGNED NOT NULL,
  `food_item_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `food_schedules`
--

CREATE TABLE `food_schedules` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `hostels_id` int(10) UNSIGNED NOT NULL,
  `days_id` int(10) UNSIGNED NOT NULL,
  `eating_times_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `institute` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salogan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `print_header` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `print_footer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedIn` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `googlePlus` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsApp` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skype` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinterest` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wordpress` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_zones_id` int(10) UNSIGNED DEFAULT NULL,
  `public_registration` tinyint(1) NOT NULL DEFAULT 1,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `institute`, `salogan`, `copyright`, `address`, `phone`, `email`, `website`, `favicon`, `logo`, `print_header`, `print_footer`, `facebook`, `twitter`, `linkedIn`, `youtube`, `googlePlus`, `instagram`, `whatsApp`, `skype`, `pinterest`, `wordpress`, `time_zones_id`, `public_registration`, `status`) VALUES
(1, '2019-10-10 12:34:04', '2020-02-13 19:56:25', 1, 1, 'Edu MIS', NULL, 'Edu MIS', 'Earth', '12333', 'earth@website.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 347, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `grading_scales`
--

CREATE TABLE `grading_scales` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `gradingType_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage_from` int(11) NOT NULL,
  `percentage_to` int(11) NOT NULL,
  `grade_point` int(11) DEFAULT NULL,
  `description` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grading_scales`
--

INSERT INTO `grading_scales` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `gradingType_id`, `name`, `percentage_from`, `percentage_to`, `grade_point`, `description`, `status`) VALUES
(1, '2019-12-11 07:02:58', '2019-12-11 07:02:58', 1, NULL, 1, 'A', 1, 100, 10, 'GGFDG', 1);

-- --------------------------------------------------------

--
-- Table structure for table `grading_types`
--

CREATE TABLE `grading_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grading_types`
--

INSERT INTO `grading_types` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `title`, `slug`, `status`) VALUES
(1, '2019-12-11 07:02:58', '2019-12-11 07:02:58', 1, NULL, 'GRADE', 'GRADE', 1);

-- --------------------------------------------------------

--
-- Table structure for table `guardian_details`
--

CREATE TABLE `guardian_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `guardian_first_name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guardian_middle_name` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_last_name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guardian_eligibility` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_occupation` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_office` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_office_number` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_residence_number` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_mobile_1` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_mobile_2` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_relation` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guardian_address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guardian_details`
--

INSERT INTO `guardian_details` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `guardian_first_name`, `guardian_middle_name`, `guardian_last_name`, `guardian_eligibility`, `guardian_occupation`, `guardian_office`, `guardian_office_number`, `guardian_residence_number`, `guardian_mobile_1`, `guardian_mobile_2`, `guardian_email`, `guardian_relation`, `guardian_address`, `guardian_image`, `status`) VALUES
(1, '2019-12-11 07:17:47', '2019-12-19 03:17:24', 1, NULL, 'fdsgfdsg', NULL, 'gdfgdfg', NULL, NULL, NULL, NULL, NULL, '9761000069', NULL, 'gardian@gmail.com', 'fdsgfdg', 'GDFGDF GD GGH HGHGF', NULL, 1),
(2, '2019-12-11 10:45:48', '2019-12-11 10:45:48', 1, NULL, 'Peter', NULL, 'Box', 'GRADUATION', 'BUSINESS', 'NAVI MUMBAI', '420', '9654123078', '963221157', '963221157', 'test@gamil.com', 'FATHER', 'sahastradhara road', '', 1),
(3, '2019-12-11 10:52:09', '2019-12-11 10:52:09', 1, NULL, 'TEST', 'FATHER', 'NAME', 'GRADUATION', 'BUSINESS', 'NAVI MUMBAI', '420', '9654123078', '963221157', '987441254', 'test@gamil.com', 'FATHER', 'SAHASTRADHARA ROAD', '', 1),
(4, '2020-01-02 07:29:03', '2020-01-02 07:39:04', 1, NULL, 'TEST', NULL, 'GURDIAN', 'NILL', 'NILL', 'NILL', '6554646', '46564654', '6556454', '654564654', 'test@test.com', 'UNKOWN', 'NILL', NULL, 1),
(5, '2020-01-02 07:40:13', '2020-01-02 07:43:14', 1, NULL, 'registration', NULL, 'test', 'NILL', 'NILL', 'df', '123', '46564654', '03213213213', '03213213213', 'test@test.com', 'NILLUNKOWN', 'Test Address Dehradun', '590494094_guardian.png', 1),
(6, '2020-01-06 04:45:31', '2020-01-06 04:45:31', 1, NULL, 'DSFSD', 'SFSDF', 'SDFSDF', 'DFDF', 'DFG', 'GFDGF', 'GFDGF', 'fgfgf', 'fgfgfgfg', 'fgfg', 'admin@gmail.com', 'FATHER', 'JHFGJ', '', 1),
(7, '2020-01-06 05:01:22', '2020-01-06 05:01:22', 1, NULL, 'DSFSD', 'SFSDF', 'SDFSDF', 'DFDF', 'DFG', 'asdsad', 'sdafdrgfd', 'fgfhg', '65285875', '6535463546354', 'admin@gmail.com', 'FATHER', 'JHFGJ', '', 1),
(8, '2020-01-07 04:00:48', '2020-01-07 04:02:32', 1, NULL, 'Dinesh', 'SFSDF', 'SDFSDF', 'DFDF', 'DFG', 'asdsad', 'hgfhfg', 'kjhkh', 'hjkhjk', 'ghkghk', 'Dinesh@gmail.com', 'hgj', 'hjghjgh', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hostels`
--

CREATE TABLE `hostels` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `warden` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `warden_contact` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hostel_meals`
--

CREATE TABLE `hostel_meals` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `hostels_id` int(10) UNSIGNED NOT NULL,
  `days_id` int(10) UNSIGNED NOT NULL,
  `foods_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `library_circulations`
--

CREATE TABLE `library_circulations` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `user_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_prefix` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `issue_limit_days` int(10) UNSIGNED DEFAULT NULL,
  `issue_limit_books` int(10) UNSIGNED DEFAULT NULL,
  `fine_per_day` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `library_circulations`
--

INSERT INTO `library_circulations` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `user_type`, `slug`, `code_prefix`, `issue_limit_days`, `issue_limit_books`, `fine_per_day`, `status`) VALUES
(1, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'Student', 'student', 'STUDLIB', 7, 5, 5, 1),
(2, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'Staff', 'staff', 'STALIB', 15, 5, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `library_members`
--

CREATE TABLE `library_members` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `user_type` int(10) UNSIGNED NOT NULL,
  `member_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `library_members`
--

INSERT INTO `library_members` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `user_type`, `member_id`, `status`) VALUES
(1, '2020-01-07 03:55:48', '2020-01-07 03:55:48', 1, NULL, 1, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_10_04_100236_create_staff_designations_table', 1),
(4, '2017_10_05_003733_create_grading_types_table', 1),
(5, '2017_10_05_003849_create_grading_scales_table', 1),
(6, '2017_10_05_072329_create_staff_table', 1),
(7, '2017_10_06_085150_create_faculties_table', 1),
(8, '2017_10_06_085202_create_semesters_table', 1),
(9, '2017_10_09_094821_create_attendance_statuses_table', 1),
(10, '2017_10_10_083645_create_time_zones_table', 1),
(11, '2017_10_21_012144_create_bed_statuses_table', 1),
(12, '2017_10_27_010354_create_student_statuses_table', 1),
(13, '2017_10_28_060832_create_book_statuses_table', 1),
(14, '2017_10_29_074155_create_student_batches_table', 1),
(15, '2017_11_06_084909_create_students_table', 1),
(16, '2017_11_06_085106_create_parent_details_table', 1),
(17, '2017_11_06_085135_create_guardian_details_table', 1),
(18, '2017_11_07_091332_create_faculty_semester_table', 1),
(19, '2017_11_11_120928_create_addressinfos_table', 1),
(20, '2017_11_17_011606_create_documents_table', 1),
(21, '2017_11_18_005300_create_notes_table', 1),
(22, '2017_11_19_055352_create_fee_heads_table', 1),
(23, '2017_11_20_012242_create_fee_masters_table', 1),
(24, '2017_11_21_035458_create_fee_collections_table', 1),
(25, '2017_11_26_014317_create_book_categories_table', 1),
(26, '2017_11_27_094949_create_book_masters_table', 1),
(27, '2017_11_27_095001_create_books_table', 1),
(28, '2017_11_29_084116_create_library_circulations_table', 1),
(29, '2017_11_30_015025_create_library_members_table', 1),
(30, '2017_12_02_010529_create_book_issues_table', 1),
(31, '2017_12_06_005401_create_transaction_heads_table', 1),
(32, '2017_12_06_012542_create_transactions_table', 1),
(33, '2017_12_08_084025_create_payroll_heads_table', 1),
(34, '2017_12_08_090233_create_payroll_masters_table', 1),
(35, '2017_12_08_090813_create_salary_pays_table', 1),
(36, '2017_12_13_084859_create_years_table', 1),
(37, '2017_12_13_084925_create_months_table', 1),
(38, '2017_12_14_062342_create_attendance_masters_table', 1),
(39, '2017_12_14_063449_create_attendances_table', 1),
(40, '2018_02_15_104206_create_settings_table', 1),
(41, '2018_02_18_061426_create_sms_emails_table', 1),
(42, '2018_02_18_061538_create_notices_table', 1),
(43, '2018_03_02_173947_create_subjects_table', 1),
(44, '2018_03_02_180148_create_semester_subject_table', 1),
(45, '2018_03_03_140508_create_exams_table', 1),
(46, '2018_03_03_140529_create_exam_schedules_table', 1),
(47, '2018_03_03_140543_create_exam_mark_ledgers_table', 1),
(48, '2018_03_09_155741_create_hostels_table', 1),
(49, '2018_03_10_002019_create_room_types_table', 1),
(50, '2018_03_18_233110_create_rooms_table', 1),
(51, '2018_03_20_175730_create_beds_table', 1),
(52, '2018_03_21_181903_create_residents_table', 1),
(53, '2018_03_21_190050_create_resident_histories_table', 1),
(54, '2018_03_26_233817_create_days_table', 1),
(55, '2018_03_27_045931_create_food_categories_table', 1),
(56, '2018_03_27_050051_create_food_items_table', 1),
(57, '2018_03_27_050835_create_hostel_meals_table', 1),
(58, '2018_03_27_223813_create_eating_times_table', 1),
(59, '2018_03_27_225950_create_food_schedules_table', 1),
(60, '2018_03_30_001832_create_food_item_food_schedule_table', 1),
(61, '2018_03_30_234754_create_routes_table', 1),
(62, '2018_03_30_234825_create_vehicles_table', 1),
(63, '2018_03_30_234840_create_route_vehicles_table', 1),
(64, '2018_03_31_000843_create_vehicle_staffs_table', 1),
(65, '2018_04_02_062605_create_general_settings_table', 1),
(66, '2018_04_03_054649_create_email_settings_table', 1),
(67, '2018_04_03_054708_create_sms_settings_table', 1),
(68, '2018_04_03_055400_create_alert_settings_table', 1),
(69, '2018_04_29_234215_create_academic_infos_table', 1),
(70, '2018_05_22_001204_entrust_setup_tables', 1),
(71, '2018_05_28_101725_create_student_guardians_table', 1),
(72, '2018_05_30_141644_create_payment_settings_table', 1),
(73, '2018_06_04_091509_create_transport_users_table', 1),
(74, '2018_06_04_092336_create_transport_histories_table', 1),
(75, '2018_06_06_055405_create_assignments_table', 1),
(76, '2018_06_06_055442_create_assignment_answers_table', 1),
(77, '2018_06_06_055503_create_download_table', 1),
(78, '2019_04_06_021557_create_payment_methods_table', 1),
(79, '2019_04_06_031653_create_banks_table', 1),
(80, '2019_04_06_031713_create_bank_transactions_table', 1),
(81, '2019_04_08_063125_create_account_categories_table', 1),
(82, '2019_04_11_090124_create_jobs_table', 1),
(83, '2019_05_04_152142_create_certificate_templates_table', 1),
(84, '2019_05_10_192213_create_subject_attendances_table', 1),
(85, '2019_07_08_064020_create_audits_table', 1),
(86, '2019_08_10_065318_create_attendance_certificates_table', 1),
(87, '2019_08_10_205022_create_certificate_histories_table', 1),
(88, '2019_08_12_081920_create_transfer_certificates_table', 1),
(89, '2019_08_14_070841_create_bonafide_certificates_table', 1),
(90, '2019_08_14_203420_create_course_completion_certificates_table', 1),
(91, '2019_10_08_205822_create_book_requests_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `months`
--

CREATE TABLE `months` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `months`
--

INSERT INTO `months` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `title`, `status`) VALUES
(1, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'January', 1),
(2, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'February', 1),
(3, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'March', 1),
(4, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'April', 1),
(5, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'May', 1),
(6, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'June', 1),
(7, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'July', 1),
(8, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'August', 1),
(9, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'September', 1),
(10, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'October', 1),
(11, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'November', 1),
(12, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, NULL, 'December', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `member_type` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_id` int(10) UNSIGNED NOT NULL,
  `subject` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `member_type`, `member_id`, `subject`, `note`, `status`) VALUES
(1, '2019-12-12 04:45:06', '2019-12-12 04:45:06', 1, NULL, 'student', 2, 'aa', 'aaaaa', 1),
(2, '2020-01-02 07:36:28', '2020-01-02 07:36:46', 1, NULL, 'student', 5, 'TEST NOTES', 'Test Notes', 1),
(3, '2020-01-02 07:51:59', '2020-01-02 07:52:10', 1, NULL, 'staff', 3, 'TEST NOTES', 'nill', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `display_group` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `parent_details`
--

CREATE TABLE `parent_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `students_id` int(10) UNSIGNED NOT NULL,
  `grandfather_first_name` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grandfather_middle_name` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grandfather_last_name` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_first_name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_middle_name` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_last_name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_eligibility` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_occupation` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_office` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_office_number` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_residence_number` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_mobile_1` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_mobile_2` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_first_name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_middle_name` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_last_name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_eligibility` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_occupation` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_office` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_office_number` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_residence_number` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_mobile_1` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_mobile_2` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parent_details`
--

INSERT INTO `parent_details` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `students_id`, `grandfather_first_name`, `grandfather_middle_name`, `grandfather_last_name`, `father_first_name`, `father_middle_name`, `father_last_name`, `father_eligibility`, `father_occupation`, `father_office`, `father_office_number`, `father_residence_number`, `father_mobile_1`, `father_mobile_2`, `father_email`, `mother_first_name`, `mother_middle_name`, `mother_last_name`, `mother_eligibility`, `mother_occupation`, `mother_office`, `mother_office_number`, `mother_residence_number`, `mother_mobile_1`, `mother_mobile_2`, `mother_email`, `father_image`, `mother_image`, `status`) VALUES
(1, '2019-12-11 10:52:09', '2019-12-19 03:17:24', 1, NULL, 4, 'TEST', 'GRAND', 'FATHER', 'TEST', 'FATHER', 'NAME', 'GRADUATION', 'BUSINESS', 'NAVI MUMBAI', '420', '9654123078', '963221157', '987441254', 'test@gamil.com', 'TEST', 'MOTHER', 'NAME', 'GRADUATION', 'TEACHER', 'NAVI MUMBAI', '454', '9630002122', '9876543210', '963221157', 'test@gamil.com', '', '', 1),
(2, '2020-01-02 07:29:03', '2020-01-02 07:29:18', 1, NULL, 5, 'TEST', NULL, 'GRANDF', 'TEST', NULL, 'FATHER', 'NILL', 'NILL', 'NILL', '123654', '13456', '123856', '12365', '1336', 'TEST', NULL, 'MOTHER', 'NILL', 'NILL', 'NILL', NULL, 'nill', '123456789', '987654321', 'test@test.com', '', '', 1),
(3, '2020-01-06 04:45:31', '2020-01-06 04:45:31', 1, NULL, 6, 'HJFDSFSF', 'SFSDF', 'DSFDSF', 'DSFSD', 'SFSDF', 'SDFSDF', 'DFDF', 'DFG', 'GFDGF', 'GFDGF', 'fgfgf', 'fgfgfgfg', 'fgfg', 'admin@gmail.com', 'FRSDFGDSGFDSgf', 'GFDFG', 'FGDFGF', 'FGDGDF', 'FGDFG', 'FGFDG', 'FDHFD', 'dfhdfh', 'dfhh', 'fdhfh', 'admin@gmail.com', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `title`, `status`) VALUES
(1, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, 1, 'Cash', 1),
(2, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, 1, 'Bank', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment_settings`
--

CREATE TABLE `payment_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `identity` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `config` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_settings`
--

INSERT INTO `payment_settings` (`id`, `created_at`, `updated_at`, `identity`, `logo`, `link`, `config`, `status`) VALUES
(1, NULL, NULL, 'Stripe', 'stripe', 'https://stripe.com', '{\"Publishable_Key\":\"\",\"Secret_Key\":\"\"}', 0),
(2, NULL, NULL, 'Instamojo', 'instamojo', 'https://www.instamojo.com', '{\"API_KEY\":\"\",\"AUTH_TOKEN\":\"\"}', 0),
(3, NULL, NULL, 'PayUMoney', 'payumoney', 'https://www.payumoney.com', '{\"Merchant_Key\":\"\",\"Merchant_Salt\":\"\",\"Auth_Header\":\"\"}', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payroll_heads`
--

CREATE TABLE `payroll_heads` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payroll_masters`
--

CREATE TABLE `payroll_masters` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `staff_id` int(10) UNSIGNED NOT NULL,
  `tag_line` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payroll_head` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `due_date` datetime NOT NULL,
  `amount` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `group`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Menu', 'expand-action-menu', 'Expand Nav Menu', 'Expand Nav Menu', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(2, 'Menu', 'admin-control', 'Admin Control', 'Admin Control Menu', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(3, 'Menu', 'dashboard', 'Dashboard', 'Dashboard Menu', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(4, 'Menu', 'student-staff', 'Student-Staff', 'Student-Staff Menu', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(5, 'Menu', 'account', 'Account', 'Account Menu', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(6, 'Menu', 'library', 'Library', 'Libaray Menu', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(7, 'Menu', 'attendance', 'Attendance', 'Attendance Menu', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(8, 'Menu', 'examination', 'Examination', 'Examination Menu', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(9, 'Menu', 'certificate', 'Certificate', 'Certificate Menu', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(10, 'Menu', 'hostel', 'Hostel', 'Hostel Menu', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(11, 'Menu', 'transport', 'Transport', 'Transport Menu', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(12, 'Menu', 'assignment', 'Assignment', 'Assignment Menu', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(13, 'Menu', 'download', 'Download', 'Download Menu', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(14, 'Menu', 'report', 'Report', 'Report Menu', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(15, 'Menu', 'alert-center', 'Alert Center', 'Alert Center Menu', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(16, 'Menu', 'academic', 'Academic Setup', 'Academic Setup Menu', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(17, 'Role', 'role-index', 'Index', 'Role Index', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(18, 'Role', 'role-add', 'Add', 'Role Add', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(19, 'Role', 'role-view', 'View', 'View Role', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(20, 'Role', 'role-edit', 'Edit', 'Edit Role', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(21, 'Role', 'role-delete', 'Delete', 'Delete Role', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(22, 'User', 'user-index', 'Index', 'User Index', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(23, 'User', 'user-add', 'Add', 'User Add', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(24, 'User', 'user-edit', 'Edit', 'Edit User', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(25, 'User', 'user-delete', 'Delete', 'Delete User', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(26, 'User', 'user-active', 'Active', 'Active User', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(27, 'User', 'user-in-active', 'In-Active', 'In-Active User', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(28, 'User', 'user-bulk-action', 'Bulk(Active,InActive,Delete)', 'User Bulk Action', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(29, 'General Setting', 'general-setting-index', 'Index', 'General Setting Index', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(30, 'General Setting', 'general-setting-add', 'Add', 'General Setting Add', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(31, 'General Setting', 'general-setting-edit', 'Edit', 'Edit General Setting', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(32, 'Alert Setting', 'alert-setting-index', 'Index', 'Alert Setting Index', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(33, 'Alert Setting', 'alert-setting-add', 'Add', 'Alert Setting Add', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(34, 'Alert Setting', 'alert-setting-edit', 'Edit', 'Edit Alert Setting', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(35, 'SMS Setting', 'sms-setting-index', 'Index', 'SMS Setting Index', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(36, 'SMS Setting', 'sms-setting-add', 'Add', 'SMS Setting Add', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(37, 'SMS Setting', 'sms-setting-edit', 'Edit', 'Edit SMS Setting', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(38, 'SMS Setting', 'sms-setting-active', 'Active', 'Active SMS', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(39, 'SMS Setting', 'sms-setting-in-active', 'In-Active', 'In-Active SMS', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(40, 'Email Setting', 'email-setting-index', 'Index', 'Email Setting Index', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(41, 'Email Setting', 'email-setting-add', 'Add', 'Email Setting Add', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(42, 'Email Setting', 'email-setting-edit', 'Edit', 'Edit Email Setting', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(43, 'Email Setting', 'email-setting-status-change', 'Status', 'Change Status', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(44, 'Payment Gateway Setting', 'payment-gateway-setting-index', 'Index', 'Payment Gateway Setting Index', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(45, 'Payment Gateway Setting', 'payment-gateway-setting-add', 'Add', 'Payment Gateway Setting Add', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(46, 'Payment Gateway Setting', 'payment-gateway-setting-edit', 'Edit', 'Edit Payment Gateway Setting', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(47, 'Payment Gateway Setting', 'payment-gateway-active', 'Active', 'Active Payment Gateway', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(48, 'Payment Gateway Setting', 'payment-gateway-in-active', 'In-Active', 'In-Active Payment Gateway', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(49, 'Student', 'student-index', 'Index', 'Student Index', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(50, 'Student', 'student-registration', 'Registration', 'Student Registration', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(51, 'Student', 'student-view', 'View', 'View Student', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(52, 'Student', 'student-edit', 'Edit', 'Edit Student', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(53, 'Student', 'student-delete', 'Delete', 'Delete Student', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(54, 'Student', 'student-active', 'Active', 'Active Student', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(55, 'Student', 'student-in-active', 'In-Active', 'In-Active Student', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(56, 'Student', 'student-bulk-action', 'Bulk(Active,InActive,Delete)', 'Student Bulk Action', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(57, 'Student', 'student-delete-academic-info', 'Delete Academic Info', 'Student Delete Academic Info', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(58, 'Student', 'student-transfer', 'Transfer', 'Transfer Student', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(59, 'Student Document', 'student-document-index', 'Index', 'Student Document Index', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(60, 'Student Document', 'student-document-add', 'Add', 'Student Document Add', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(61, 'Student Document', 'student-document-edit', 'Edit', 'Edit Student Document', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(62, 'Student Document', 'student-document-delete', 'Delete', 'Delete Student Document', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(63, 'Student Document', 'student-document-active', 'Active', 'Active Student Document', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(64, 'Student Document', 'student-document-in-active', 'In-Active', 'In-Active Student Document', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(65, 'Student Document', 'student-document-bulk-action', 'Bulk(Active,InActive,Delete)', 'Student Document Bulk Action', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(66, 'Student Note', 'student-note-index', 'Index', 'Student Note Index', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(67, 'Student Note', 'student-note-add', 'Add', 'Student Note Add', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(68, 'Student Note', 'student-note-edit', 'Edit', 'Edit Student Note', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(69, 'Student Note', 'student-note-delete', 'Delete', 'Delete Student Note', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(70, 'Student Note', 'student-note-active', 'Active', 'Active Student Note', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(71, 'Student Note', 'student-note-in-active', 'In-Active', 'In-Active Student Note', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(72, 'Student Note', 'student-note-bulk-action', 'Bulk(Active,InActive,Delete)', 'Student Note Bulk Action', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(73, 'Guardian', 'guardian-index', 'Index', 'Guardian Index', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(74, 'Guardian', 'guardian-registration', 'Registration', 'Guardian Registration', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(75, 'Guardian', 'guardian-view', 'View', 'View Guardian', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(76, 'Guardian', 'guardian-edit', 'Edit', 'Edit Guardian', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(77, 'Guardian', 'guardian-delete', 'Delete', 'Delete Guardian', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(78, 'Guardian', 'guardian-active', 'Active', 'Active Guardian', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(79, 'Guardian', 'guardian-in-active', 'In-Active', 'In-Active Guardian', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(80, 'Guardian', 'guardian-bulk-action', 'Bulk(Active,InActive,Delete)', 'Guardian Bulk Action', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(81, 'Guardian', 'guardian-link', 'Link Student', 'Guardian Link Student', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(82, 'Guardian', 'guardian-unlink', 'UnLink Student', 'Guardian UnLink Student', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(83, 'Staff', 'staff-index', 'Index', 'Staff Index', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(84, 'Staff', 'staff-add', 'Add', 'Staff Registration', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(85, 'Staff', 'staff-view', 'View', 'View Staff', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(86, 'Staff', 'staff-edit', 'Edit', 'Edit Staff', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(87, 'Staff', 'staff-delete', 'Delete', 'Delete Staff', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(88, 'Staff', 'staff-active', 'Active', 'Active Staff', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(89, 'Staff', 'staff-in-active', 'In-Active', 'In-Active Staff', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(90, 'Staff', 'staff-bulk-action', 'Bulk(Active,InActive,Delete)', 'Staff Bulk Action', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(91, 'Staff Document', 'staff-document-index', 'Index', 'Staff Document Index', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(92, 'Staff Document', 'staff-document-add', 'Add', 'Staff Document Add', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(93, 'Staff Document', 'staff-document-edit', 'Edit', 'Edit Staff Document', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(94, 'Staff Document', 'staff-document-delete', 'Delete', 'Delete Staff Document', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(95, 'Staff Document', 'staff-document-active', 'Active', 'Active Staff Document', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(96, 'Staff Document', 'staff-document-in-active', 'In-Active', 'In-Active Staff Document', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(97, 'Staff Document', 'staff-document-bulk-action', 'Bulk(Active,InActive,Delete)', 'Staff Document Bulk Action', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(98, 'Staff Note', 'staff-note-index', 'Index', 'Staff Note Index', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(99, 'Staff Note', 'staff-note-add', 'Add', 'Staff Note Add', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(100, 'Staff Note', 'staff-note-edit', 'Edit', 'Edit Staff Note', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(101, 'Staff Note', 'staff-note-delete', 'Delete', 'Delete Staff Note', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(102, 'Staff Note', 'staff-note-active', 'Active', 'Active Staff Note', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(103, 'Staff Note', 'staff-note-in-active', 'In-Active', 'In-Active Staff Note', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(104, 'Staff Note', 'staff-note-bulk-action', 'Bulk(Active,InActive,Delete)', 'Staff Note Bulk Action', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(105, 'Staff Designation', 'staff-designation-index', 'Index', 'Staff Designation Index', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(106, 'Staff Designation', 'staff-designation-add', 'Add', 'Staff Designation Add', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(107, 'Staff Designation', 'staff-designation-edit', 'Edit', 'Edit Staff Designation', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(108, 'Staff Designation', 'staff-designation-delete', 'Delete', 'Delete Staff Designation', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(109, 'Staff Designation', 'staff-designation-active', 'Active', 'Active Staff Designation', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(110, 'Staff Designation', 'staff-designation-in-active', 'In-Active', 'In-Active Staff Designation', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(111, 'Staff Designation', 'staff-designation-bulk-action', 'Bulk(Active,InActive,Delete)', 'Staff Designation Bulk Action', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(112, 'Fees', 'fees-index', 'Index', 'Student Fees Index', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(113, 'Fees', 'fees-balance', 'Balance', 'Fees Balance', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(114, 'Fees Head', 'fees-head-index', 'Index', 'Fees Head Index', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(115, 'Fees Head', 'fees-head-add', 'Add', 'Fees Head Add', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(116, 'Fees Head', 'fees-head-edit', 'Edit', 'Edit Fees Head', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(117, 'Fees Head', 'fees-head-delete', 'Delete', 'Delete Fees Head', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(118, 'Fees Head', 'fees-head-active', 'Active', 'Active Fees Head', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(119, 'Fees Head', 'fees-head-in-active', 'In-Active', 'In-Active Fees Head', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(120, 'Fees Head', 'fees-head-bulk-action', 'Bulk(Active,InActive,Delete)', 'Fees Head Bulk Action', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(121, 'Fees Master', 'fees-master-index', 'Index', 'Fees Master Index', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(122, 'Fees Master', 'fees-master-add', 'Add', 'Fees Master Add', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(123, 'Fees Master', 'fees-master-edit', 'Edit', 'Edit Fees Master', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(124, 'Fees Master', 'fees-master-delete', 'Delete', 'Delete Fees Master', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(125, 'Fees Master', 'fees-master-active', 'Active', 'Active Fees Master', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(126, 'Fees Master', 'fees-master-in-active', 'In-Active', 'In-Active Fees Master', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(127, 'Fees Master', 'fees-master-bulk-action', 'Bulk(Active,InActive,Delete)', 'Fees Master Bulk Action', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(128, 'Quick Fee Receive', 'fees-quick-receive-add', 'Collect', 'Quick Fee Receive Index', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(129, 'Fees Collection', 'fees-collection-index', 'Index', 'Fees Collection Index', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(130, 'Fees Collection', 'fees-collection-add', 'Add', 'Fees Collection Add', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(131, 'Fees Collection', 'fees-collection-view', 'View', 'View Fees Collection', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(132, 'Fees Collection', 'fees-collection-delete', 'Delete', 'Delete Fees Collection', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(133, 'Payroll', 'payroll-index', 'Index', 'Staff Payroll Index', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(134, 'Payroll', 'payroll-balance', 'Balance', 'Payroll Balance', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(135, 'Payroll Head', 'payroll-head-index', 'Index', 'Payroll Head Index', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(136, 'Payroll Head', 'payroll-head-add', 'Add', 'Payroll Head Add', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(137, 'Payroll Head', 'payroll-head-edit', 'Edit', 'Edit Payroll Head', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(138, 'Payroll Head', 'payroll-head-delete', 'Delete', 'Delete Payroll Head', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(139, 'Payroll Head', 'payroll-head-active', 'Active', 'Active Payroll Head', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(140, 'Payroll Head', 'payroll-head-in-active', 'In-Active', 'In-Active Payroll Head', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(141, 'Payroll Head', 'payroll-head-bulk-action', 'Bulk(Active,InActive,Delete)', 'Payroll Head Bulk Action', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(142, 'Payroll Master', 'payroll-master-index', 'Index', 'Payroll Master Index', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(143, 'Payroll Master', 'payroll-master-add', 'Add', 'Payroll Master Add', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(144, 'Payroll Master', 'payroll-master-edit', 'Edit', 'Edit Payroll Master', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(145, 'Payroll Master', 'payroll-master-delete', 'Delete', 'Delete Payroll Master', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(146, 'Payroll Master', 'payroll-master-active', 'Active', 'Active Payroll Master', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(147, 'Payroll Master', 'payroll-master-in-active', 'In-Active', 'In-Active Payroll Master', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(148, 'Payroll Master', 'payroll-master-bulk-action', 'Bulk(Active,InActive,Delete)', 'Payroll Master Bulk Action', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(149, 'Salary Pay', 'salary-payment-index', 'Index', 'Salary Pay Index', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(150, 'Salary Pay', 'salary-payment-add', 'Add', 'Salary Pay Add', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(151, 'Salary Pay', 'salary-payment-view', 'View', 'View Salary Pay', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(152, 'Salary Pay', 'salary-payment-delete', 'Delete', 'Delete Salary Pay', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(153, 'Transaction Head', 'transaction-head-index', 'Index', 'Transaction Head Index', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(154, 'Transaction Head', 'transaction-head-add', 'Add', 'Transaction Head Add', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(155, 'Transaction Head', 'transaction-head-edit', 'Edit', 'Edit Transaction Head', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(156, 'Transaction Head', 'transaction-head-view', 'View', 'View Transaction Head', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(157, 'Transaction Head', 'transaction-head-delete', 'Delete', 'Delete Transaction Head', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(158, 'Transaction Head', 'transaction-head-active', 'Active', 'Active Transaction Head', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(159, 'Transaction Head', 'transaction-head-in-active', 'In-Active', 'In-Active Transaction Head', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(160, 'Transaction Head', 'transaction-head-bulk-action', 'Bulk(Active,InActive,Delete)', 'Payroll Head Bulk Action', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(161, 'Transaction', 'transaction-index', 'Index', 'Transaction Index', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(162, 'Transaction', 'transaction-add', 'Add', 'Transaction Add', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(163, 'Transaction', 'transaction-edit', 'Edit', 'Edit Transaction', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(164, 'Transaction', 'transaction-delete', 'Delete', 'Delete Transaction', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(165, 'Transaction', 'transaction-active', 'Active', 'Active Transaction', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(166, 'Transaction', 'transaction-in-active', 'In-Active', 'In-Active Transaction', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(167, 'Transaction', 'transaction-bulk-action', 'Bulk(Active,InActive,Delete)', 'Transaction Bulk Action', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(168, 'Bank', 'bank-index', 'Index', 'Bank Index', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(169, 'Bank', 'bank-add', 'Add', 'Bank Add', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(170, 'Bank', 'bank-edit', 'Edit', 'Edit Bank', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(171, 'Bank', 'bank-view', 'View', 'View Bank', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(172, 'Bank', 'bank-delete', 'Delete', 'Delete Bank', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(173, 'Bank', 'bank-active', 'Active', 'Active Bank', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(174, 'Bank', 'bank-in-active', 'In-Active', 'In-Active Bank', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(175, 'Bank', 'bank-bulk-action', 'Bulk(Active,InActive,Delete)', 'Bank Bulk Action', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(176, 'Bank Transaction', 'bank-transaction-index', 'Index', 'Bank Transaction Index', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(177, 'Bank Transaction', 'bank-transaction-add', 'Add', 'Bank Transaction Add', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(178, 'Bank Transaction', 'bank-transaction-delete', 'Delete', 'Delete Bank Transaction', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(179, 'Bank Transaction', 'bank-transaction-bulk-action', 'Bulk(Active,InActive,Delete)', 'Bank Transaction Bulk Action', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(180, 'Account Print', 'fee-print-master', 'Master Slip', 'Fee Master Slip', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(181, 'Account Print', 'fee-print-collection', 'Collection', 'Print Fee Collection', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(182, 'Account Print', 'fee-print-today-receipt', 'Today Short Receipt', 'Print Today Short Receipt', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(183, 'Account Print', 'fee-print-today-detail-receipt', 'Today Detail Receipt', 'Print Today Detail Receip', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(184, 'Account Print', 'fee-print-student-ledger', 'Student Ledger', 'Print Student Ledger', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(185, 'Account Print', 'fee-print-student-due', 'Due Short Slip', 'Print Due Short Slip', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(186, 'Account Print', 'fee-print-student-due-detail', 'Due Detail Slip', 'Print Due Detail Slip', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(187, 'Account Print', 'fee-print-bulk-due-slip', 'Bulk Due Short Slip', 'Print Bulk Due Short Slip', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(188, 'Account Print', 'fee-print-bulk-due-detail-slip', 'Bulk Due Detail SLip', 'Print Bulk Due Detail SLip', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(189, 'Account Report', 'report-cash-book', 'Cashbook', 'Cashbook Detail', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(190, 'Account Report', 'report-fee-collection', 'Fee Collection', 'Fee Collection Detail', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(191, 'Account Report', 'report-fee-collection-head', 'Fee Collection Head', 'Fee Collection Head Detail', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(192, 'Library', 'library-index', 'Index', 'Library Index', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(193, 'Library', 'library-book-issue', 'Book Issue', 'Book Issue', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(194, 'Library', 'library-book-return', 'Book Return', 'Return Book', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(195, 'Library', 'library-return-over', 'Return Period Over', 'Return Period Over', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(196, 'Library', 'library-issue-history', 'History', 'Issue History', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(197, 'Book', 'book-index', 'Index', 'Book Index', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(198, 'Book', 'book-add', 'Add', 'Book Add', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(199, 'Book', 'book-edit', 'Edit', 'Edit Book', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(200, 'Book', 'book-view', 'View', 'View Book', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(201, 'Book', 'book-delete', 'Delete', 'Delete Book', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(202, 'Book', 'book-active', 'Active', 'Active Book', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(203, 'Book', 'book-in-active', 'In-Active', 'In-Active Book', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(204, 'Book', 'book-bulk-action', 'Bulk(Active,InActive,Delete)', 'Book Bulk Action', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(205, 'Book', 'book-add-copies', 'Add Book Copies', 'Add Book Copies', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(206, 'Book', 'book-status', 'Status', 'Book Status', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(207, 'Book', 'book-bulk-copies-delete', 'Delete Bulk Copies', 'Delete Bulk Copes', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(208, 'Book Category', 'book-category-index', 'Index', 'Book Category Index', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(209, 'Book Category', 'book-category-add', 'Add', 'Book Category Add', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(210, 'Book Category', 'book-category-edit', 'Edit', 'Edit Book Category', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(211, 'Book Category', 'book-category-delete', 'Delete', 'Delete Book Category', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(212, 'Book Category', 'book-category-active', 'Active', 'Active Book Category', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(213, 'Book Category', 'book-category-in-active', 'In-Active', 'In-Active Book Category', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(214, 'Book Category', 'book-category-bulk-action', 'Bulk(Active,InActive,Delete)', 'Book Category Bulk Action', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(215, 'Library Circulation', 'library-circulation-index', 'Index', 'Library Circulation Index', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(216, 'Library Circulation', 'library-circulation-add', 'Add', 'Library Circulation Add', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(217, 'Library Circulation', 'library-circulation-edit', 'Edit', 'Edit Library Circulation', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(218, 'Library Circulation', 'library-circulation-delete', 'Delete', 'Delete Library Circulation', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(219, 'Library Circulation', 'library-circulation-active', 'Active', 'Active Library Circulation', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(220, 'Library Circulation', 'library-circulation-in-active', 'In-Active', 'In-Active Library Circulation', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(221, 'Library Circulation', 'library-circulation-bulk-action', 'Bulk(Active,InActive,Delete)', 'Library Circulation Bulk Action', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(222, 'Library Member', 'library-member-index', 'Index', 'Library Member Index', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(223, 'Library Member', 'library-member-add', 'Add', 'Library Member Add', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(224, 'Library Member', 'library-member-edit', 'Edit', 'Edit Library Member', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(225, 'Library Member', 'library-member-delete', 'Delete', 'Delete Library Member', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(226, 'Library Member', 'library-member-active', 'Active', 'Active Library Member', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(227, 'Library Member', 'library-member-in-active', 'In-Active', 'In-Active Library Member', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(228, 'Library Member', 'library-member-bulk-action', 'Bulk(Active,InActive,Delete)', 'Library Member Bulk Action', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(229, 'Library Member', 'library-member-staff', 'Staff Index', 'Library Member Staff', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(230, 'Library Member', 'library-member-staff-view', 'Staff View', 'Library Member Staff', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(231, 'Library Member', 'library-member-student', 'Student Index', 'Library Member Student', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(232, 'Library Member', 'library-member-student-view', 'Student View', 'Library Member Student', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(233, 'Attendance Master', 'attendance-master-index', 'Index', 'Attendance Master Index', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(234, 'Attendance Master', 'attendance-master-add', 'Add', 'Attendance Master Add', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(235, 'Attendance Master', 'attendance-master-edit', 'Edit', 'Edit Attendance Master', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(236, 'Attendance Master', 'attendance-master-delete', 'Delete', 'Delete Attendance Master', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(237, 'Attendance Master', 'attendance-master-active', 'Active', 'Active Attendance Master', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(238, 'Attendance Master', 'attendance-master-in-active', 'In-Active', 'In-Active Attendance Master', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(239, 'Attendance Master', 'attendance-master-bulk-action', 'Bulk(Active,InActive,Delete)', 'Attendance Master Bulk Action', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(240, 'Student Regular Attendance', 'student-attendance-index', 'Index', 'Student Regular Attendance Index', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(241, 'Student Regular Attendance', 'student-attendance-add', 'Add', 'Student Regular Attendance Add', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(242, 'Student Regular Attendance', 'student-attendance-delete', 'Delete', 'Delete Student Regular Attendance', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(243, 'Student Regular Attendance', 'student-attendance-bulk-action', 'Bulk(Active,InActive,Delete)', 'Student Regular Attendance Bulk Action', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(244, 'Student SubjectWise Attendance', 'subject-attendance-index', 'Index', 'Student SubjectWise Attendance Index', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(245, 'Student SubjectWise Attendance', 'subject-attendance-add', 'Add', 'Student SubjectWise Attendance Add', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(246, 'Student SubjectWise Attendance', 'subject-attendance-delete', 'Delete', 'Delete Student SubjectWise Attendance', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(247, 'Student SubjectWise Attendance', 'subject-attendance-bulk-action', 'Bulk(Active,InActive,Delete)', 'Student SubjectWise Attendance Bulk Action', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(248, 'Student SubjectWise Attendance', 'subject-attendance-alert', 'Alert', 'Student SubjectWise Attendance Alert', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(249, 'Staff Attendance', 'staff-attendance-index', 'Index', 'Staff Attendance Index', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(250, 'Staff Attendance', 'staff-attendance-add', 'Add', 'Staff Attendance Add', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(251, 'Staff Attendance', 'staff-attendance-delete', 'Delete', 'Delete Staff Attendance', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(252, 'Staff Attendance', 'staff-attendance-bulk-action', 'Bulk(Active,InActive,Delete)', 'Staff Attendance Bulk Action', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(253, 'Exam', 'exam-index', 'Index', 'Exam Index', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(254, 'Exam', 'exam-add', 'Add', 'Exam Add', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(255, 'Exam', 'exam-edit', 'Edit', 'Edit Exam', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(256, 'Exam', 'exam-delete', 'Delete', 'Delete Exam', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(257, 'Exam', 'exam-active', 'Active', 'Active Exam', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(258, 'Exam', 'exam-in-active', 'In-Active', 'In-Active Exam', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(259, 'Exam', 'exam-bulk-action', 'Bulk(Active,InActive,Delete)', 'Exam Bulk Action', '2019-10-10 12:34:00', '2019-10-10 12:34:00'),
(260, 'Exam', 'exam-admit-card', 'Admit Card', 'Exam Admit Card', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(261, 'Exam', 'exam-exam-routine', 'Routin/Schedule', 'Exam Routine/Schedule', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(262, 'Exam', 'exam-mark-ledger', 'MarkLedger', 'Exam Mark Ledger', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(263, 'Exam', 'exam-result-publish', 'Result Publish', 'Exam Result Publish', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(264, 'Exam', 'exam-result-un-publish', 'Result UnPublish', 'Exam Result UnPublish', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(265, 'Exam Schedule', 'exam-schedule-index', 'Index', 'Exam Schedule Index', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(266, 'Exam Schedule', 'exam-schedule-add', 'Add', 'Exam Schedule Add', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(267, 'Exam Schedule', 'exam-schedule-edit', 'Edit', 'Edit Exam Schedule', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(268, 'Exam Schedule', 'exam-schedule-delete', 'Delete', 'Delete Exam Schedule', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(269, 'Exam Schedule', 'exam-schedule-active', 'Active', 'Active Exam Schedule', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(270, 'Exam Schedule', 'exam-schedule-in-active', 'In-Active', 'In-Active Exam Schedule', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(271, 'Exam Mark Ledger', 'exam-mark-ledger-index', 'Index', 'Exam Mark Ledger Index', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(272, 'Exam Mark Ledger', 'exam-mark-ledger-add', 'Add', 'Exam Mark Ledger Add', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(273, 'Exam Mark Ledger', 'exam-mark-ledger-edit', 'Edit', 'Edit Exam Mark Ledger', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(274, 'Exam Mark Ledger', 'exam-mark-ledger-delete', 'Delete', 'Delete Exam Mark Ledger', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(275, 'Exam Mark Ledger', 'exam-mark-ledger-active', 'Active', 'Active Exam Mark Ledger', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(276, 'Exam Mark Ledger', 'exam-mark-ledger-in-active', 'In-Active', 'In-Active Exam Mark Ledger', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(277, 'Exam Print', 'exam-print-admitcard', 'Admit Card', 'Exam Admit Card', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(278, 'Exam Print', 'exam-print-routine', 'Routine/Schedule', 'Exam Routine/Schedule', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(279, 'Exam Print', 'exam-print-mark-sheet', 'Mark/Grade Sheet', 'Exam Mark/Grade Sheet', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(280, 'Exam Print', 'exam-print-mark-ledger', 'Mark Ledger', 'Exam Mark Ledger Sheet', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(281, 'Certificate', 'issue-certificate', 'Certificate Issue', 'Certificate Issue', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(282, 'Certificate', 'certificate-history', 'Certificate History', 'Certificate History', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(283, 'General Certificate', 'certificate-generate', 'General Certificate Generate', 'General Certificate Generate', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(284, 'General Certificate', 'general-certificate-print', 'General Certificate Print', 'General Certificate Print', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(285, 'Certificate Template', 'certificate-template-index', 'Index', 'Certificate Template Index', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(286, 'Certificate Template', 'certificate-template-add', 'Add', 'Certificate Template Add', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(287, 'Certificate Template', 'certificate-template-edit', 'Edit', 'Edit Certificate Template', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(288, 'Certificate Template', 'certificate-template-view', 'View', 'View Certificate Template', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(289, 'Certificate Template', 'certificate-template-delete', 'Delete', 'Delete Certificate Template', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(290, 'Certificate Template', 'certificate-template-active', 'Active', 'Active Certificate Template', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(291, 'Certificate Template', 'certificate-template-in-active', 'In-Active', 'In-Active Certificate Template', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(292, 'Certificate Template', 'certificate-template-bulk-action', 'Bulk(Active,InActive,Delete', 'Bulk Certificate Template', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(293, 'Attendance Certificate', 'attendance-certificate-index', 'Index', 'Attendance Certificate Index', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(294, 'Attendance Certificate', 'attendance-certificate-add', 'Add', 'Attendance Certificate Add', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(295, 'Attendance Certificate', 'attendance-certificate-edit', 'Edit', 'Edit Attendance Certificate', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(296, 'Attendance Certificate', 'attendance-certificate-view', 'View', 'View Attendance Certificate', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(297, 'Attendance Certificate', 'attendance-certificate-delete', 'Delete', 'Delete Attendance Certificate', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(298, 'Attendance Certificate', 'attendance-certificate-bulk-action', 'Bulk(Active,InActive,Delete', 'Bulk Attendance Certificate', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(299, 'Attendance Certificate', 'attendance-certificate-print', 'Print', 'Print Attendance Certificate', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(300, 'Attendance Certificate', 'attendance-certificate-bulk-print', 'Bulk Print', 'Bulk Print Attendance Certificate', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(301, 'Transfer Certificate', 'transfer-certificate-index', 'Index', 'Transfer Certificate Index', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(302, 'Transfer Certificate', 'transfer-certificate-add', 'Add', 'Transfer Certificate Add', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(303, 'Transfer Certificate', 'transfer-certificate-edit', 'Edit', 'Edit Transfer Certificate', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(304, 'Transfer Certificate', 'transfer-certificate-view', 'View', 'View Transfer Certificate', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(305, 'Transfer Certificate', 'transfer-certificate-delete', 'Delete', 'Delete Transfer Certificate', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(306, 'Transfer Certificate', 'transfer-certificate-bulk-action', 'Bulk(Active,InActive,Delete', 'Bulk Transfer Certificate', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(307, 'Transfer Certificate', 'transfer-certificate-print', 'Print', 'Print Transfer Certificate', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(308, 'Transfer Certificate', 'transfer-certificate-bulk-print', 'Bulk Print', 'Bulk Print Transfer Certificate', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(309, 'Bonafide Certificate', 'bonafide-certificate-index', 'Index', 'Bonafide Certificate Index', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(310, 'Bonafide Certificate', 'bonafide-certificate-add', 'Add', 'Bonafide Certificate Add', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(311, 'Bonafide Certificate', 'bonafide-certificate-edit', 'Edit', 'Edit Bonafide Certificate', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(312, 'Bonafide Certificate', 'bonafide-certificate-view', 'View', 'View Bonafide Certificate', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(313, 'Bonafide Certificate', 'bonafide-certificate-delete', 'Delete', 'Delete Bonafide Certificate', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(314, 'Bonafide Certificate', 'bonafide-certificate-bulk-action', 'Bulk(Active,InActive,Delete', 'Bulk Bonafide Certificate', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(315, 'Bonafide Certificate', 'bonafide-certificate-print', 'Print', 'Print Bonafide Certificate', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(316, 'Bonafide Certificate', 'bonafide-certificate-bulk-print', 'Bulk Print', 'Bulk Print Bonafide Certificate', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(317, 'Course Completion Certificate', 'course-completion-certificate-index', 'Index', 'Course Completion Certificate Index', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(318, 'Course Completion Certificate', 'course-completion-certificate-add', 'Add', 'Course Completion Certificate Add', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(319, 'Course Completion Certificate', 'course-completion-certificate-edit', 'Edit', 'Edit Course Completion Certificate', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(320, 'Course Completion Certificate', 'course-completion-certificate-view', 'View', 'View Course Completion Certificate', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(321, 'Course Completion Certificate', 'course-completion-certificate-delete', 'Delete', 'Delete Course Completion Certificate', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(322, 'Course Completion Certificate', 'course-completion-certificate-bulk-action', 'Bulk(Active,InActive,Delete', 'Bulk Course Completion Certificate', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(323, 'Course Completion Certificate', 'course-completion-certificate-print', 'Print', 'Print Course Completion Certificate', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(324, 'Course Completion Certificate', 'course-completion-certificate-bulk-print', 'Bulk Print', 'Bulk Print Course Completion Certificate', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(325, 'Hostel', 'hostel-index', 'Index', 'Hostel Index', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(326, 'Hostel', 'hostel-add', 'Add', 'Hostel Add', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(327, 'Hostel', 'hostel-view', 'view', 'Hostel View', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(328, 'Hostel', 'hostel-edit', 'Edit', 'Edit Hostel', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(329, 'Hostel', 'hostel-delete', 'Delete', 'Delete Hostel', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(330, 'Hostel', 'hostel-active', 'Active', 'Active Hostel', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(331, 'Hostel', 'hostel-in-active', 'In-Active', 'In-Active Hostel', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(332, 'Hostel', 'hostel-bulk-action', 'Bulk(Active,InActive,Delete)', 'Hostel Bulk Action', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(333, 'Room', 'room-add', 'Add', 'Room Add', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(334, 'Room', 'room-view', 'View', 'Room View', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(335, 'Room', 'room-edit', 'Edit', 'Edit Room', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(336, 'Room', 'room-delete', 'Delete', 'Delete Room', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(337, 'Room', 'room-active', 'Active', 'Active Room', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(338, 'Room', 'room-in-active', 'In-Active', 'In-Active Room', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(339, 'Room', 'room-bulk-action', 'Bulk(Active,InActive,Delete)', 'Room Bulk Action', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(340, 'Bed', 'bed-add', 'Add', 'Bed Add', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(341, 'Bed', 'bed-status', 'Status', 'Bed Status', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(342, 'Bed', 'bed-delete', 'Delete', 'Delete Bed', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(343, 'Bed', 'bed-active', 'Active', 'Active Bed', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(344, 'Bed', 'bed-in-active', 'In-Active', 'In-Active Bed', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(345, 'Bed', 'bed-bulk-action', 'Bulk(Active,InActive,Delete)', 'Bed Bulk Action', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(346, 'Room Type', 'room-type-index', 'Index', 'Room Type Index', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(347, 'Room Type', 'room-type-add', 'Add', 'Room Type Add', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(348, 'Room Type', 'room-type-edit', 'Edit', 'Edit Room Type', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(349, 'Room Type', 'room-type-delete', 'Delete', 'Delete Room Type', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(350, 'Room Type', 'room-type-active', 'Active', 'Active Room Type', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(351, 'Room Type', 'room-type-in-active', 'In-Active', 'In-Active Room Type', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(352, 'Room Type', 'room-type-bulk-action', 'Bulk(Active,InActive,Delete)', 'Room Type Bulk Action', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(353, 'Resident', 'resident-index', 'Index', 'Resident Index', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(354, 'Resident', 'resident-add', 'Add', 'Resident Add', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(355, 'Resident', 'resident-edit', 'Edit', 'Edit Resident', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(356, 'Resident', 'resident-delete', 'Delete', 'Delete Resident', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(357, 'Resident', 'resident-bulk-action', 'Bulk(Active,InActive,Delete)', 'Resident Bulk Action', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(358, 'Resident', 'resident-renew', 'Renew', 'Renew Resident', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(359, 'Resident', 'resident-leave', 'Leave', 'Leave Resident', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(360, 'Resident', 'resident-shift', 'Shift', 'Shift Resident', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(361, 'Resident', 'resident-history', 'History', 'Resident History', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(362, 'Food', 'food-index', 'Index', 'Food Index', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(363, 'Food', 'food-add', 'Add', 'Food Add', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(364, 'Food', 'food-edit', 'Edit', 'Edit Food', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(365, 'Food', 'food-delete', 'Delete', 'Delete Food', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(366, 'Food', 'food-active', 'Active', 'Active Food', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(367, 'Food', 'food-in-active', 'In-Active', 'In-Active Food', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(368, 'Food', 'food-bulk-action', 'Bulk(Active,InActive,Delete)', 'Food Bulk Action', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(369, 'Food Category', 'food-category-index', 'Index', 'Food Category Index', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(370, 'Food Category', 'food-category-add', 'Add', 'Food Category Add', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(371, 'Food Category', 'food-category-edit', 'Edit', 'Edit Food Category', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(372, 'Food Category', 'food-category-delete', 'Delete', 'Delete Food Category', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(373, 'Food Category', 'food-category-active', 'Active', 'Active Food Category', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(374, 'Food Category', 'food-category-in-active', 'In-Active', 'In-Active Food Category', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(375, 'Food Category', 'food-category-bulk-action', 'Bulk(Active,InActive,Delete)', 'Food Category Bulk Action', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(376, 'Food Item', 'food-item-index', 'Index', 'Food Item Index', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(377, 'Food Item', 'food-item-add', 'Add', 'Food Item Add', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(378, 'Food Item', 'food-item-edit', 'Edit', 'Edit Food Item', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(379, 'Food Item', 'food-item-delete', 'Delete', 'Delete Food Item', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(380, 'Food Item', 'food-item-active', 'Active', 'Active Food Item', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(381, 'Food Item', 'food-item-in-active', 'In-Active', 'In-Active Food Item', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(382, 'Food Item', 'food-item-bulk-action', 'Bulk(Active,InActive,Delete)', 'Food Item Bulk Action', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(383, 'Eating Time', 'eating-time-index', 'Index', 'Eating Time Index', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(384, 'Eating Time', 'eating-time-add', 'Add', 'Eating Time Add', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(385, 'Eating Time', 'eating-time-edit', 'Edit', 'Edit Eating Time', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(386, 'Eating Time', 'eating-time-delete', 'Delete', 'Delete Eating Time', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(387, 'Eating Time', 'eating-time-active', 'Active', 'Active Eating Time', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(388, 'Eating Time', 'eating-time-in-active', 'In-Active', 'In-Active Eating Time', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(389, 'Eating Time', 'eating-time-bulk-action', 'Bulk(Active,InActive,Delete)', 'Eating Time Bulk Action', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(390, 'Transport Route', 'transport-route-index', 'Index', 'Transport Route Index', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(391, 'Transport Route', 'transport-route-add', 'Add', 'Transport Route Add', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(392, 'Transport Route', 'transport-route-edit', 'Edit', 'Edit Transport Route', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(393, 'Transport Route', 'transport-route-delete', 'Delete', 'Delete Transport Route', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(394, 'Transport Route', 'transport-route-active', 'Active', 'Active Transport Route', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(395, 'Transport Route', 'transport-route-in-active', 'In-Active', 'In-Active Transport Route', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(396, 'Transport Route', 'transport-route-bulk-action', 'Bulk(Active,InActive,Delete)', 'Transport Route Bulk Action', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(397, 'Vehicle', 'vehicle-index', 'Index', 'Vehicle Index', '2019-10-10 12:34:01', '2019-10-10 12:34:01');
INSERT INTO `permissions` (`id`, `group`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(398, 'Vehicle', 'vehicle-add', 'Add', 'Vehicle Add', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(399, 'Vehicle', 'vehicle-edit', 'Edit', 'Edit Vehicle', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(400, 'Vehicle', 'vehicle-delete', 'Delete', 'Delete Vehicle', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(401, 'Vehicle', 'vehicle-active', 'Active', 'Active Vehicle', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(402, 'Vehicle', 'vehicle-in-active', 'In-Active', 'In-Active Vehicle', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(403, 'Vehicle', 'vehicle-bulk-action', 'Bulk(Active,InActive,Delete)', 'Vehicle Bulk Action', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(404, 'Transport User/Traveller', 'transport-user-index', 'Index', 'Transport User/Traveller Index', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(405, 'Transport User/Traveller', 'transport-user-add', 'Add', 'Transport User/Traveller Add', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(406, 'Transport User/Traveller', 'transport-user-edit', 'Edit', 'Edit Transport User/Traveller', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(407, 'Transport User/Traveller', 'transport-user-delete', 'Delete', 'Delete Transport User/Traveller', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(408, 'Transport User/Traveller', 'transport-user-bulk-action', 'Bulk(Active,InActive,Delete)', 'Transport User/Traveller Bulk Action', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(409, 'Transport User/Traveller', 'transport-user-renew', 'Renew', 'Renew Transport User/Traveller', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(410, 'Transport User/Traveller', 'transport-user-leave', 'Leave', 'Leave Transport User/Traveller', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(411, 'Transport User/Traveller', 'transport-user-shift', 'Shift', 'Shift Transport User/Traveller', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(412, 'Transport User/Traveller', 'transport-user-history', 'History', 'Resident History', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(413, 'Report', 'student-report', 'Student', 'Student Report', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(414, 'Report', 'staff-report', 'Staff', 'Staff Report', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(415, 'Notice', 'notice-index', 'Index', 'Notice Index', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(416, 'Notice', 'notice-add', 'Add', 'Notice Add', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(417, 'Notice', 'notice-edit', 'Edit', 'Edit Notice', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(418, 'Notice', 'notice-delete', 'Delete', 'Delete Notice', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(419, 'SMS/E-Mail', 'sms-email-index', 'Index', 'SMS/E-Mail Index', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(420, 'SMS/E-Mail', 'sms-email-delete', 'Delete', 'SMS/E-Mail Delete', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(421, 'SMS/E-Mail', 'sms-email-bulk-action', 'Bulk(Active,InActive,Delete)', 'Bulk SMS/E-Mail', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(422, 'SMS/E-Mail', 'sms-email-create', 'Create', 'Create SMS/E-Mail', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(423, 'SMS/E-Mail', 'sms-email-send', 'Send', 'Send SMS/E-Mail', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(424, 'SMS/E-Mail', 'sms-email-student-guardian-send', 'Student & Guardian', 'Student & Guardian SMS/E-Mail', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(425, 'SMS/E-Mail', 'sms-email-staff-send', 'Staff', 'Staff SMS/E-Mail', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(426, 'SMS/E-Mail', 'sms-email-individual-send', 'Individual', 'Individual SMS/E-Mail', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(427, 'SMS/E-Mail', 'sms-email-fee-receipt', 'Fee Receipt', 'Fee ReceiptSMS/E-Mail', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(428, 'SMS/E-Mail', 'sms-email-due-reminder', 'Due Reminder', 'Due Reminder SMS/E-Mail', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(429, 'SMS/E-Mail', 'sms-email-book-return-reminder', 'Book Return Reminder', 'Book Return Reminder', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(430, 'Faculty', 'faculty-index', 'Index', 'Faculty Index', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(431, 'Faculty', 'faculty-add', 'Add', 'Faculty Add', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(432, 'Faculty', 'faculty-edit', 'Edit', 'Edit Faculty', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(433, 'Faculty', 'faculty-delete', 'Delete', 'Delete Faculty', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(434, 'Faculty', 'faculty-active', 'Active', 'Active Faculty', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(435, 'Faculty', 'faculty-in-active', 'In-Active', 'In-Active Faculty', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(436, 'Faculty', 'faculty-bulk-action', 'Bulk(Active,InActive,Delete)', 'Faculty Bulk Action', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(437, 'Semester', 'semester-index', 'Index', 'Semester Index', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(438, 'Semester', 'semester-add', 'Add', 'Semester Add', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(439, 'Semester', 'semester-edit', 'Edit', 'Edit Semester', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(440, 'Semester', 'semester-delete', 'Delete', 'Delete Semester', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(441, 'Semester', 'semester-active', 'Active', 'Active Semester', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(442, 'Semester', 'semester-in-active', 'In-Active', 'In-Active Semester', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(443, 'Semester', 'semester-bulk-action', 'Bulk(Active,InActive,Delete)', 'Semester Bulk Action', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(444, 'Student Batch', 'student-batch-index', 'Index', 'Student Batch Index', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(445, 'Student Batch', 'student-batch-add', 'Add', 'Student Batch Add', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(446, 'Student Batch', 'student-batch-edit', 'Edit', 'Edit Student Batch', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(447, 'Student Batch', 'student-batch-delete', 'Delete', 'Delete Student Batch', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(448, 'Student Batch', 'student-batch-active', 'Active', 'Active Student Batch', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(449, 'Student Batch', 'student-batch-in-active', 'In-Active', 'In-Active Student Batch', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(450, 'Student Batch', 'student-batch-bulk-action', 'Bulk(Active,InActive,Delete)', 'Student Status Bulk Action', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(451, 'Grading', 'grading-index', 'Index', 'Grading Index', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(452, 'Grading', 'grading-add', 'Add', 'Grading Add', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(453, 'Grading', 'grading-edit', 'Edit', 'Edit Grading', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(454, 'Grading', 'grading-delete', 'Delete', 'Delete Grading', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(455, 'Grading', 'grading-active', 'Active', 'Active Grading', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(456, 'Grading', 'grading-in-active', 'In-Active', 'In-Active Grading', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(457, 'Grading', 'grading-bulk-action', 'Bulk(Active,InActive,Delete)', 'Grading Bulk Action', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(458, 'Subject / Course', 'subject-index', 'Index', 'Subject / Course Index', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(459, 'Subject / Course', 'subject-add', 'Add', 'Subject / Course Add', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(460, 'Subject / Course', 'subject-edit', 'Edit', 'Edit Subject / Course', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(461, 'Subject / Course', 'subject-delete', 'Delete', 'Delete Subject / Course', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(462, 'Subject / Course', 'subject-active', 'Active', 'Active Subject / Course', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(463, 'Subject / Course', 'subject-in-active', 'In-Active', 'In-Active Subject / Course', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(464, 'Subject / Course', 'subject-bulk-action', 'Bulk(Active,InActive,Delete)', 'Subject / Course Bulk Action', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(465, 'Student Status', 'student-status-index', 'Index', 'Student Status Index', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(466, 'Student Status', 'student-status-add', 'Add', 'Student Status Add', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(467, 'Student Status', 'student-status-edit', 'Edit', 'Edit Student Status', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(468, 'Student Status', 'student-status-delete', 'Delete', 'Delete Student Status', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(469, 'Student Status', 'student-status-active', 'Active', 'Active Student Status', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(470, 'Student Status', 'student-status-in-active', 'In-Active', 'In-Active Student Status', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(471, 'Student Status', 'student-status-bulk-action', 'Bulk(Active,InActive,Delete)', 'Student Status Bulk Action', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(472, 'Book Status', 'book-status-index', 'Index', 'Book Status Index', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(473, 'Book Status', 'book-status-add', 'Add', 'Book Status Add', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(474, 'Book Status', 'book-status-edit', 'Edit', 'Edit Book Status', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(475, 'Book Status', 'book-status-delete', 'Delete', 'Delete Book Status', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(476, 'Book Status', 'book-status-active', 'Active', 'Active Book Status', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(477, 'Book Status', 'book-status-in-active', 'In-Active', 'In-Active Book Status', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(478, 'Book Status', 'book-status-bulk-action', 'Bulk(Active,InActive,Delete)', 'Book Status Bulk Action', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(479, 'Bed Status', 'bed-status-index', 'Index', 'Bed Status Index', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(480, 'Bed Status', 'bed-status-add', 'Add', 'Bed Status Add', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(481, 'Bed Status', 'bed-status-edit', 'Edit', 'Edit Bed Status', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(482, 'Bed Status', 'bed-status-delete', 'Delete', 'Delete Bed Status', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(483, 'Bed Status', 'bed-status-active', 'Active', 'Active Bed Status', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(484, 'Bed Status', 'bed-status-in-active', 'In-Active', 'In-Active Bed Status', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(485, 'Bed Status', 'bed-status-bulk-action', 'Bulk(Active,InActive,Delete)', 'Bed Status Bulk Action', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(486, 'Year', 'year-index', 'Index', 'Year Index', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(487, 'Year', 'year-add', 'Add', 'Year Add', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(488, 'Year', 'year-edit', 'Edit', 'Edit Year', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(489, 'Year', 'year-delete', 'Delete', 'Delete Year', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(490, 'Year', 'year-active', 'Active', 'Active Year', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(491, 'Year', 'year-in-active', 'In-Active', 'In-Active Year', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(492, 'Year', 'year-bulk-action', 'Bulk(Active,InActive,Delete)', 'Year Bulk Action', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(493, 'Year', 'year-active-status', 'Make Active', 'Year Make Active', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(494, 'Month', 'month-index', 'Index', 'Month Index', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(495, 'Month', 'month-add', 'Add', 'Month Add', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(496, 'Month', 'month-edit', 'Edit', 'Edit Month', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(497, 'Month', 'month-delete', 'Delete', 'Delete Month', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(498, 'Month', 'month-active', 'Active', 'Active Month', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(499, 'Month', 'month-in-active', 'In-Active', 'In-Active Month', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(500, 'Month', 'month-bulk-action', 'Bulk(Active,InActive,Delete)', 'Month Bulk Action', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(501, 'Day', 'day-index', 'Index', 'Day Index', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(502, 'Day', 'day-add', 'Add', 'Day Add', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(503, 'Day', 'day-edit', 'Edit', 'Edit Day', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(504, 'Day', 'day-delete', 'Delete', 'Delete Day', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(505, 'Day', 'day-active', 'Active', 'Active Day', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(506, 'Day', 'day-in-active', 'In-Active', 'In-Active Day', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(507, 'Day', 'day-bulk-action', 'Bulk(Active,InActive,Delete)', 'Day Bulk Action', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(508, 'Assignment', 'assignment-index', 'Index', 'Assignment Index', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(509, 'Assignment', 'assignment-add', 'Add', 'Assignment Add', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(510, 'Assignment', 'assignment-edit', 'Edit', 'Edit Assignment', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(511, 'Assignment', 'assignment-view', 'View', 'View Assignment', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(512, 'Assignment', 'assignment-delete', 'Delete', 'Delete Assignment', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(513, 'Assignment', 'assignment-active', 'Active', 'Active Assignment', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(514, 'Assignment', 'assignment-in-active', 'In-Active', 'In-Active Assignment', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(515, 'Assignment', 'assignment-bulk-action', 'Bulk(Active,InActive,Delete)', 'Assignment Bulk Action', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(516, 'Assignment Answer', 'assignment-answer-view', 'View', 'Assignment Answer View', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(517, 'Assignment Answer', 'assignment-answer-approve', 'Approve', 'Approve Assignment Answer', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(518, 'Assignment Answer', 'assignment-answer-reject', 'Reject', 'Reject Assignment Answer', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(519, 'Assignment Answer', 'assignment-answer-delete', 'Delete', 'Delete Assignment Answer', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(520, 'Assignment Answer', 'assignment-answer-bulk-action', 'Bulk(Approve, Reject,Delete)', 'Assignment Answer Bulk Action', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(521, 'Download', 'download-index', 'Index', 'Download Index', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(522, 'Download', 'download-add', 'Add', 'Download Add', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(523, 'Download', 'download-edit', 'Edit', 'Edit Download', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(524, 'Download', 'download-delete', 'Delete', 'Delete Download', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(525, 'Download', 'download-active', 'Active', 'Active Download', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(526, 'Download', 'download-in-active', 'In-Active', 'In-Active Download', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(527, 'Download', 'download-bulk-action', 'Bulk(Active,InActive,Delete)', 'Download Bulk Action', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(528, 'Super Suit', 'super-suit', 'Super Suit', 'Super Suit', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(529, 'User Activity', 'user-activity-index', 'Index', 'User Activity Index', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(530, 'User Activity', 'user-activity-delete', 'Delete', 'Delete User Activity', '2019-10-10 12:34:01', '2019-10-10 12:34:01'),
(531, 'User Activity', 'user-activity-bulk-action', 'Bulk(Active,InActive,Delete)', 'User Activity Bulk Action', '2019-10-10 12:34:01', '2019-10-10 12:34:01');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(82, 1),
(83, 1),
(84, 1),
(85, 1),
(86, 1),
(87, 1),
(88, 1),
(89, 1),
(90, 1),
(91, 1),
(92, 1),
(93, 1),
(94, 1),
(95, 1),
(96, 1),
(97, 1),
(98, 1),
(99, 1),
(100, 1),
(101, 1),
(102, 1),
(103, 1),
(104, 1),
(105, 1),
(106, 1),
(107, 1),
(108, 1),
(109, 1),
(110, 1),
(111, 1),
(112, 1),
(113, 1),
(114, 1),
(115, 1),
(116, 1),
(117, 1),
(118, 1),
(119, 1),
(120, 1),
(121, 1),
(122, 1),
(123, 1),
(124, 1),
(125, 1),
(126, 1),
(127, 1),
(128, 1),
(129, 1),
(130, 1),
(131, 1),
(132, 1),
(133, 1),
(134, 1),
(135, 1),
(136, 1),
(137, 1),
(138, 1),
(139, 1),
(140, 1),
(141, 1),
(142, 1),
(143, 1),
(144, 1),
(145, 1),
(146, 1),
(147, 1),
(148, 1),
(149, 1),
(150, 1),
(151, 1),
(152, 1),
(153, 1),
(154, 1),
(155, 1),
(156, 1),
(157, 1),
(158, 1),
(159, 1),
(160, 1),
(161, 1),
(162, 1),
(163, 1),
(164, 1),
(165, 1),
(166, 1),
(167, 1),
(168, 1),
(169, 1),
(170, 1),
(171, 1),
(172, 1),
(173, 1),
(174, 1),
(175, 1),
(176, 1),
(177, 1),
(178, 1),
(179, 1),
(180, 1),
(181, 1),
(182, 1),
(183, 1),
(184, 1),
(185, 1),
(186, 1),
(187, 1),
(188, 1),
(189, 1),
(190, 1),
(191, 1),
(192, 1),
(193, 1),
(194, 1),
(195, 1),
(196, 1),
(197, 1),
(198, 1),
(199, 1),
(200, 1),
(201, 1),
(202, 1),
(203, 1),
(204, 1),
(205, 1),
(206, 1),
(207, 1),
(208, 1),
(209, 1),
(210, 1),
(211, 1),
(212, 1),
(213, 1),
(214, 1),
(215, 1),
(216, 1),
(217, 1),
(218, 1),
(219, 1),
(220, 1),
(221, 1),
(222, 1),
(223, 1),
(224, 1),
(225, 1),
(226, 1),
(227, 1),
(228, 1),
(229, 1),
(230, 1),
(231, 1),
(232, 1),
(233, 1),
(234, 1),
(235, 1),
(236, 1),
(237, 1),
(238, 1),
(239, 1),
(240, 1),
(241, 1),
(242, 1),
(243, 1),
(244, 1),
(245, 1),
(246, 1),
(247, 1),
(248, 1),
(249, 1),
(250, 1),
(251, 1),
(252, 1),
(253, 1),
(254, 1),
(255, 1),
(256, 1),
(257, 1),
(258, 1),
(259, 1),
(260, 1),
(261, 1),
(262, 1),
(263, 1),
(264, 1),
(265, 1),
(266, 1),
(267, 1),
(268, 1),
(269, 1),
(270, 1),
(271, 1),
(272, 1),
(273, 1),
(274, 1),
(275, 1),
(276, 1),
(277, 1),
(278, 1),
(279, 1),
(280, 1),
(281, 1),
(282, 1),
(283, 1),
(284, 1),
(285, 1),
(286, 1),
(287, 1),
(288, 1),
(289, 1),
(290, 1),
(291, 1),
(292, 1),
(293, 1),
(294, 1),
(295, 1),
(296, 1),
(297, 1),
(298, 1),
(299, 1),
(300, 1),
(301, 1),
(302, 1),
(303, 1),
(304, 1),
(305, 1),
(306, 1),
(307, 1),
(308, 1),
(309, 1),
(310, 1),
(311, 1),
(312, 1),
(313, 1),
(314, 1),
(315, 1),
(316, 1),
(317, 1),
(318, 1),
(319, 1),
(320, 1),
(321, 1),
(322, 1),
(323, 1),
(324, 1),
(325, 1),
(326, 1),
(327, 1),
(328, 1),
(329, 1),
(330, 1),
(331, 1),
(332, 1),
(333, 1),
(334, 1),
(335, 1),
(336, 1),
(337, 1),
(338, 1),
(339, 1),
(340, 1),
(341, 1),
(342, 1),
(343, 1),
(344, 1),
(345, 1),
(346, 1),
(347, 1),
(348, 1),
(349, 1),
(350, 1),
(351, 1),
(352, 1),
(353, 1),
(354, 1),
(355, 1),
(356, 1),
(357, 1),
(358, 1),
(359, 1),
(360, 1),
(361, 1),
(362, 1),
(363, 1),
(364, 1),
(365, 1),
(366, 1),
(367, 1),
(368, 1),
(369, 1),
(370, 1),
(371, 1),
(372, 1),
(373, 1),
(374, 1),
(375, 1),
(376, 1),
(377, 1),
(378, 1),
(379, 1),
(380, 1),
(381, 1),
(382, 1),
(383, 1),
(384, 1),
(385, 1),
(386, 1),
(387, 1),
(388, 1),
(389, 1),
(390, 1),
(391, 1),
(392, 1),
(393, 1),
(394, 1),
(395, 1),
(396, 1),
(397, 1),
(398, 1),
(399, 1),
(400, 1),
(401, 1),
(402, 1),
(403, 1),
(404, 1),
(405, 1),
(406, 1),
(407, 1),
(408, 1),
(409, 1),
(410, 1),
(411, 1),
(412, 1),
(413, 1),
(414, 1),
(415, 1),
(416, 1),
(417, 1),
(418, 1),
(419, 1),
(420, 1),
(421, 1),
(422, 1),
(423, 1),
(424, 1),
(425, 1),
(426, 1),
(427, 1),
(428, 1),
(429, 1),
(430, 1),
(431, 1),
(432, 1),
(433, 1),
(434, 1),
(435, 1),
(436, 1),
(437, 1),
(438, 1),
(439, 1),
(440, 1),
(441, 1),
(442, 1),
(443, 1),
(444, 1),
(445, 1),
(446, 1),
(447, 1),
(448, 1),
(449, 1),
(450, 1),
(451, 1),
(452, 1),
(453, 1),
(454, 1),
(455, 1),
(456, 1),
(457, 1),
(458, 1),
(459, 1),
(460, 1),
(461, 1),
(462, 1),
(463, 1),
(464, 1),
(465, 1),
(466, 1),
(467, 1),
(468, 1),
(469, 1),
(470, 1),
(471, 1),
(472, 1),
(473, 1),
(474, 1),
(475, 1),
(476, 1),
(477, 1),
(478, 1),
(479, 1),
(480, 1),
(481, 1),
(482, 1),
(483, 1),
(484, 1),
(485, 1),
(486, 1),
(487, 1),
(488, 1),
(489, 1),
(490, 1),
(491, 1),
(492, 1),
(493, 1),
(494, 1),
(495, 1),
(496, 1),
(497, 1),
(498, 1),
(499, 1),
(500, 1),
(501, 1),
(502, 1),
(503, 1),
(504, 1),
(505, 1),
(506, 1),
(507, 1),
(508, 1),
(509, 1),
(510, 1),
(511, 1),
(512, 1),
(513, 1),
(514, 1),
(515, 1),
(516, 1),
(517, 1),
(518, 1),
(519, 1),
(520, 1),
(521, 1),
(522, 1),
(523, 1),
(524, 1),
(525, 1),
(526, 1),
(527, 1),
(528, 1),
(529, 1),
(530, 1),
(531, 1);

-- --------------------------------------------------------

--
-- Table structure for table `residents`
--

CREATE TABLE `residents` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `hostels_id` int(10) UNSIGNED NOT NULL,
  `rooms_id` int(10) UNSIGNED DEFAULT NULL,
  `beds_id` int(10) UNSIGNED DEFAULT NULL,
  `user_type` int(10) UNSIGNED NOT NULL,
  `member_id` int(10) UNSIGNED NOT NULL,
  `register_date` datetime NOT NULL,
  `leave_date` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resident_histories`
--

CREATE TABLE `resident_histories` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `years_id` int(10) UNSIGNED NOT NULL,
  `hostels_id` int(10) UNSIGNED NOT NULL,
  `rooms_id` int(10) UNSIGNED DEFAULT NULL,
  `beds_id` int(10) UNSIGNED DEFAULT NULL,
  `residents_id` int(10) UNSIGNED NOT NULL,
  `history_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'super-admin', 'Super Admin', 'Super Admin', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(2, 'admin', 'Administrator', 'Administrator', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(3, 'account', 'Accountant', 'Accountant', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(4, 'library', 'Librarian', 'Librarian', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(5, 'staff', 'Staff', 'Staff', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(6, 'student', 'Student', 'Student', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(7, 'guardian', 'Guardian', 'Guardian', '2019-10-10 12:33:59', '2019-10-10 12:33:59'),
(8, 'teacher', 'Teacher', 'Teacher', '2019-10-10 12:33:59', '2019-10-10 12:33:59');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 3),
(3, 6),
(4, 7),
(5, 3),
(7, 5),
(8, 7),
(9, 6);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `hostels_id` int(10) UNSIGNED NOT NULL,
  `room_type` int(10) UNSIGNED NOT NULL,
  `room_number` int(11) NOT NULL,
  `rate_perbed` int(11) NOT NULL DEFAULT 0,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `room_types`
--

CREATE TABLE `room_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room_types`
--

INSERT INTO `room_types` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `title`, `status`) VALUES
(1, '2020-02-13 19:42:19', '2020-02-13 19:42:19', 1, NULL, 'SHARED TWO', 1);

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rent` int(11) NOT NULL DEFAULT 0,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `route_vehicles`
--

CREATE TABLE `route_vehicles` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `routes_id` int(10) UNSIGNED NOT NULL,
  `vehicles_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `salary_pays`
--

CREATE TABLE `salary_pays` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `staff_id` int(10) UNSIGNED NOT NULL,
  `salary_masters_id` int(10) UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `paid_amount` int(11) NOT NULL,
  `allowance` int(11) DEFAULT NULL,
  `fine` int(11) DEFAULT NULL,
  `payment_mode` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `semester` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_id` int(10) UNSIGNED DEFAULT NULL,
  `gradingType_id` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `semester`, `slug`, `staff_id`, `gradingType_id`, `status`) VALUES
(1, '2019-12-11 07:04:13', '2019-12-11 07:05:35', 1, 1, '1', '1', 1, 1, 1),
(3, '2019-12-11 09:56:53', '2019-12-11 10:11:49', 1, 1, '3', '3', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `semester_subject`
--

CREATE TABLE `semester_subject` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `semester_id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semester_subject`
--

INSERT INTO `semester_subject` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `semester_id`, `subject_id`, `status`) VALUES
(1, NULL, NULL, 1, 1, 1, 1, 0),
(2, NULL, NULL, 1, 1, 3, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sms_emails`
--

CREATE TABLE `sms_emails` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `subject` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sms` tinyint(1) NOT NULL DEFAULT 0,
  `email` tinyint(1) NOT NULL DEFAULT 0,
  `group` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sms_settings`
--

CREATE TABLE `sms_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `identity` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `config` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sms_settings`
--

INSERT INTO `sms_settings` (`id`, `created_at`, `updated_at`, `identity`, `logo`, `link`, `config`, `status`) VALUES
(1, NULL, NULL, 'Msg91', 'msg91', 'https://msg91.com', '{\"Authkey\":\"\",\"Sender\":\"\",\"Route\":\"\",\"Country\":\"\"}', 0),
(2, NULL, NULL, 'Msg94', 'msg94', 'http://www.msg94.com', '{\"Authkey\":\"\",\"Sender\":\"\",\"Route\":\"\",\"Country\":\"\"}', 0),
(3, NULL, NULL, 'KeswaTech', 'keswasms', 'http://ktsms.keswatech.com', '{\"Sender\":\"\",\"UserName\":\"\",\"Password\":\"\"}', 0),
(4, NULL, NULL, 'Twilio', 'twilio', 'https://www.twilio.com', '{\"SID\":\"\",\"Token\":\"\",\"FromNumber\":\"\"}', 0),
(5, NULL, NULL, 'MessageBird', 'messagebird', 'https://www.messagebird.com', '{\"Originator\":\"\",\"AcccessKey\":\"\"}', 0),
(6, NULL, NULL, 'Clickatell', 'clickatell', 'http://clickatell.com', '{\"API_ID\":\"\",\"User\":\"\",\"Password\":\"\",\"Unicode\":\"0\"}', 0),
(7, NULL, NULL, 'BudgetSmsNet', 'budgetsms', 'https://www.budgetsms.net', '{\"Username\":\"\",\"UserID\":\"\",\"Handle\":\"\",\"From\":\"\"}', 0),
(8, NULL, NULL, 'Nexmo', 'nexmo', 'https://www.nexmo.com', '{\"From\":\"\",\"API_KEY\":\"\",\"API_SECRET\":\"\"}', 0),
(9, NULL, NULL, 'smsCountry', 'smscountry', 'https://www.smscountry.com', '{\"UserName\":\"\",\"Password\":\"\",\"SenderId\":\"\",\"Token\":\"\"}', 0),
(10, NULL, NULL, 'MsgClub', 'msgclub', 'http://msg.msgclub.net', '{\"AUTH_KEY\":\"\",\"senderId\":\"\",\"routeId\":\"\"}', 0),
(11, NULL, NULL, 'Digimiles', 'digimiles', 'http://www.digimiles.in', '{\"UserName\":\"\",\"Password\":\"\",\"Type\":0,\"Sender_ID\":\"\"}', 0),
(12, NULL, NULL, 'Textlocal', 'textlocal', 'https://www.textlocal.in', '{\"apiKey\":\"\",\"sender\":\"\"}', 0),
(13, NULL, NULL, 'SmartSMS', 'smartsms', 'https://smartsmssolutions.com/', '{\"ACCESS_TOKEN\":\"\",\"Sender\":\"\",\"Routing\":\"2\",\"Type\":\"0\"}', 0),
(14, NULL, NULL, 'Sparrow', 'sparrow', 'http://sparrowsms.com', '{\"From\":\"\",\"Token\":\"\"}', 0),
(15, NULL, NULL, 'InitiativeNepal', 'aayosms', 'https://www.ininepal.com', '{\"Sender\":\"\",\"UserName\":\"\",\"Password\":\"\"}', 0),
(16, NULL, NULL, 'SendPK', 'sendpk', 'https://sendpk.com/api.php', '{\"UserName\":\"\",\"Password\":\"\",\"Sender\":\"\",\"Type\":\"\"}', 0),
(17, NULL, NULL, 'LifetimeSMS', 'lifetimesms', 'http://lifetimesms.com', '{\"UserName\":\"\",\"Password\":\"\",\"From\":\"\"}', 0),
(18, NULL, NULL, 'SmsCluster', 'smscluster', 'http://www.smscluster.com', '{\"AUTH_KEY\":\"\",\"senderId\":\"\",\"routeId\":\"\",\"smsContentType\":\"English\"}', 0),
(19, NULL, NULL, 'marketsmsPK', 'marketsms', 'http://www.marketsms.pk', '{\"UserName\":\"\",\"Password\":\"\",\"From\":\"\"}', 0);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `reg_no` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `join_date` datetime NOT NULL,
  `designation` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` datetime NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temp_address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temp_state` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temp_country` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_1` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_2` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_tongue` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience_info` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_info` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `reg_no`, `join_date`, `designation`, `first_name`, `middle_name`, `last_name`, `father_name`, `mother_name`, `date_of_birth`, `gender`, `blood_group`, `nationality`, `address`, `state`, `country`, `temp_address`, `temp_state`, `temp_country`, `home_phone`, `mobile_1`, `mobile_2`, `mother_tongue`, `email`, `qualification`, `experience`, `experience_info`, `other_info`, `staff_image`, `status`) VALUES
(1, '2019-12-11 06:59:09', '2019-12-11 06:59:09', 1, NULL, '54564', '2019-12-11 00:00:00', 1, 'FSDFSD', NULL, 'FSDFS', NULL, NULL, '2019-12-11 00:00:00', 'MALE', NULL, 'SDFSD', 'DDS FDFSD', 'UK', 'INDIA', 'DDS FDFSD', 'UK', 'INDIA', NULL, '7878788978', NULL, NULL, 'STAFF@GMAIL.COM', 'BED', '5', NULL, NULL, '', 1),
(2, '2019-12-11 10:47:56', '2019-12-11 10:47:56', 1, NULL, '1', '2019-12-10 00:00:00', 1, 'TIM', NULL, 'ALEX', 'WILL', 'CATE', '2019-12-02 00:00:00', 'MALE', 'A+', 'POLISH', 'SAHASTRADHARA ROAD', 'UTTARAKHAND', 'INDIA', 'SAHASTRADHARA ROAD', 'UTTARAKHAND', 'INDIA', '963221157', '9632145870', '987451203', 'HINDI', 'alex@gmail.com', 'BTECH', '2 YEARS', '2 YEARS', '2 YEARS', '', 1),
(3, '2020-01-02 07:49:40', '2020-01-07 04:04:26', 1, 1, 'TestStaff', '2019-11-01 00:00:00', 1, 'TEST STAFF', NULL, '01', 'TESTSTAFF FATHER', 'TESTSTAFF MOTHER', '1995-09-19 00:00:00', 'MALE', 'B+', 'UNITED KINGDOM', 'TEST ADDRESS DEHRADUN', 'UTTARAKHAND', 'UNITED KINGDOM', 'TEST ADDRESS DEHRADUN', 'UTTARAKHAND', 'UNITED KINGDOM', '12345646', '132132465', '13232145654', 'NILL', 'Staff@test.com', 'NILL', 'NILL', 'nill', 'nill', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff_designations`
--

CREATE TABLE `staff_designations` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff_designations`
--

INSERT INTO `staff_designations` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `title`, `status`) VALUES
(1, '2019-12-11 06:56:45', '2019-12-11 06:56:45', 1, NULL, 'LECTURER', 1),
(2, '2019-12-11 10:34:15', '2019-12-11 10:34:15', 1, NULL, 'DSADFAF', 1),
(3, '2020-01-02 07:54:29', '2020-01-02 07:54:37', 1, 1, 'TEST DESIGNATION', 1);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `reg_no` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_date` datetime NOT NULL,
  `university_reg` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faculty` int(10) UNSIGNED DEFAULT NULL,
  `semester` int(10) UNSIGNED DEFAULT NULL,
  `academic_status` int(10) UNSIGNED DEFAULT NULL,
  `batch` int(10) UNSIGNED DEFAULT NULL,
  `first_name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` datetime NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caste` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_tongue` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_info` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_signature` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `reg_no`, `reg_date`, `university_reg`, `faculty`, `semester`, `academic_status`, `batch`, `first_name`, `middle_name`, `last_name`, `date_of_birth`, `gender`, `blood_group`, `religion`, `caste`, `nationality`, `mother_tongue`, `email`, `extra_info`, `student_image`, `student_signature`, `status`) VALUES
(2, '2019-12-11 10:20:07', '2020-01-06 05:13:28', 1, NULL, '115', '2019-12-11 00:00:00', '511', 1, 1, 1, 1, 'TIM', NULL, 'ALEX', '1997-06-09 00:00:00', 'MALE', 'O-', 'HINDU', 'GENERAL', 'INDIAN', 'HINDI', 'alex@gmail.com', 'Does Not Have Extra Info', '', '', 1),
(4, '2019-12-11 10:52:09', '2019-12-19 03:17:24', 1, NULL, '424', '2019-12-11 00:00:00', '243', 1, 3, 1, 1, 'VIEVEK', 'SINGH', 'SHARMA', '2019-12-10 00:00:00', 'MALE', 'A+', 'HINDU', 'GENERAL', 'INDIAN', 'HINDI', 'test@gamil.com', NULL, '', '', 1),
(5, '2020-01-02 07:29:03', '2020-01-02 07:34:16', 1, NULL, '02012020', '2019-12-31 00:00:00', '101010', 1, 1, 1, 1, 'TEST', 'STUDENT', '01', '1995-09-19 00:00:00', 'MALE', 'B+', 'NILL', 'NILL', 'UNITED KINGDOM', 'NILL', 'test@test.com', 'nill', '', '', 1),
(6, '2020-01-06 04:45:31', '2020-01-06 04:45:31', 1, NULL, '123', '2020-01-06 00:00:00', '1235', 1, 1, 1, 1, 'VIVEK', 'SINGH', 'BISHT', '1995-02-02 00:00:00', 'MALE', 'A+', 'HINDU', 'G', 'INDIAN', 'HINDI', 'admin@gmail.com', 'fgdfghh', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_batches`
--

CREATE TABLE `student_batches` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_batches`
--

INSERT INTO `student_batches` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `title`, `status`) VALUES
(1, '2019-12-11 07:04:31', '2019-12-11 07:04:31', 1, NULL, 'ACT', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_guardians`
--

CREATE TABLE `student_guardians` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `students_id` int(10) UNSIGNED NOT NULL,
  `guardians_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_guardians`
--

INSERT INTO `student_guardians` (`id`, `created_at`, `updated_at`, `students_id`, `guardians_id`) VALUES
(1, '2019-12-11 10:52:09', '2020-01-09 07:23:35', 4, 1),
(2, '2020-01-02 07:29:03', '2020-01-02 07:29:03', 5, 4),
(3, '2020-01-06 04:45:31', '2020-01-06 04:45:31', 6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `student_statuses`
--

CREATE TABLE `student_statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_statuses`
--

INSERT INTO `student_statuses` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `title`, `status`) VALUES
(1, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, 1, 'New Admission', 1),
(2, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, 1, 'Continue', 1),
(3, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, 1, 'Pass Out', 1),
(4, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, 1, 'Back Continue', 1),
(5, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, 1, 'Drop Out', 1),
(6, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, 1, 'Transfer in', 1),
(7, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, 1, 'Transfer Out', 1),
(8, '2019-10-10 12:34:03', '2019-10-10 12:34:03', 1, 1, 'Online Registration', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_mark_theory` int(11) DEFAULT NULL,
  `pass_mark_theory` int(11) DEFAULT NULL,
  `full_mark_practical` int(11) DEFAULT NULL,
  `pass_mark_practical` int(11) DEFAULT NULL,
  `credit_hour` int(11) DEFAULT NULL,
  `sub_type` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_type` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_id` int(10) UNSIGNED DEFAULT NULL,
  `description` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `created_at`, `updated_at`, `created_by`, `last_updated_by`, `title`, `code`, `full_mark_theory`, `pass_mark_theory`, `full_mark_practical`, `pass_mark_practical`, `credit_hour`, `sub_type`, `class_type`, `staff_id`, `description`, `status`) VALUES
(1, '2019-12-11 07:03:52', '2019-12-11 07:03:52', 1, NULL, 'CS', 'CS101', 2, 2, 2, 2, 121, 'Optional', 'Theory', 1, 'DF SDF', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subject_attendances`
--

CREATE TABLE `subject_attendances` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `link_id` int(10) UNSIGNED NOT NULL,
  `subjects_id` int(10) UNSIGNED NOT NULL,
  `attendance_type` int(11) NOT NULL,
  `years_id` int(10) UNSIGNED NOT NULL,
  `months_id` int(10) UNSIGNED NOT NULL,
  `day_1` int(11) NOT NULL DEFAULT 0,
  `day_2` int(11) NOT NULL DEFAULT 0,
  `day_3` int(11) NOT NULL DEFAULT 0,
  `day_4` int(11) NOT NULL DEFAULT 0,
  `day_5` int(11) NOT NULL DEFAULT 0,
  `day_6` int(11) NOT NULL DEFAULT 0,
  `day_7` int(11) NOT NULL DEFAULT 0,
  `day_8` int(11) NOT NULL DEFAULT 0,
  `day_9` int(11) NOT NULL DEFAULT 0,
  `day_10` int(11) NOT NULL DEFAULT 0,
  `day_11` int(11) NOT NULL DEFAULT 0,
  `day_12` int(11) NOT NULL DEFAULT 0,
  `day_13` int(11) NOT NULL DEFAULT 0,
  `day_14` int(11) NOT NULL DEFAULT 0,
  `day_15` int(11) NOT NULL DEFAULT 0,
  `day_16` int(11) NOT NULL DEFAULT 0,
  `day_17` int(11) NOT NULL DEFAULT 0,
  `day_18` int(11) NOT NULL DEFAULT 0,
  `day_19` int(11) NOT NULL DEFAULT 0,
  `day_20` int(11) NOT NULL DEFAULT 0,
  `day_21` int(11) NOT NULL DEFAULT 0,
  `day_22` int(11) NOT NULL DEFAULT 0,
  `day_23` int(11) NOT NULL DEFAULT 0,
  `day_24` int(11) NOT NULL DEFAULT 0,
  `day_25` int(11) NOT NULL DEFAULT 0,
  `day_26` int(11) NOT NULL DEFAULT 0,
  `day_27` int(11) NOT NULL DEFAULT 0,
  `day_28` int(11) NOT NULL DEFAULT 0,
  `day_29` int(11) NOT NULL DEFAULT 0,
  `day_30` int(11) NOT NULL DEFAULT 0,
  `day_31` int(11) NOT NULL DEFAULT 0,
  `day_32` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `time_zones`
--

CREATE TABLE `time_zones` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `timezone` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `time_zones`
--

INSERT INTO `time_zones` (`id`, `created_at`, `updated_at`, `timezone`, `status`) VALUES
(1, NULL, '2020-02-13 19:56:25', 'Africa/Abidjan', 0),
(2, NULL, '2020-02-13 19:56:25', 'Africa/Accra', 0),
(3, NULL, '2020-02-13 19:56:25', 'Africa/Addis_Ababa', 0),
(4, NULL, '2020-02-13 19:56:25', 'Africa/Algiers', 0),
(5, NULL, '2020-02-13 19:56:25', 'Africa/Asmara', 0),
(6, NULL, '2020-02-13 19:56:25', 'Africa/Asmera', 0),
(7, NULL, '2020-02-13 19:56:25', 'Africa/Bamako', 0),
(8, NULL, '2020-02-13 19:56:25', 'Africa/Bangui', 0),
(9, NULL, '2020-02-13 19:56:25', 'Africa/Banjul', 0),
(10, NULL, '2020-02-13 19:56:25', 'Africa/Bissau', 0),
(11, NULL, '2020-02-13 19:56:25', 'Africa/Blantyre', 0),
(12, NULL, '2020-02-13 19:56:25', 'Africa/Brazzaville', 0),
(13, NULL, '2020-02-13 19:56:25', 'Africa/Bujumbura', 0),
(14, NULL, '2020-02-13 19:56:25', 'Africa/Cairo', 0),
(15, NULL, '2020-02-13 19:56:25', 'Africa/Casablanca', 0),
(16, NULL, '2020-02-13 19:56:25', 'Africa/Ceuta', 0),
(17, NULL, '2020-02-13 19:56:25', 'Africa/Conakry', 0),
(18, NULL, '2020-02-13 19:56:25', 'Africa/Dakar', 0),
(19, NULL, '2020-02-13 19:56:25', 'Africa/Dar_es_Salaam', 0),
(20, NULL, '2020-02-13 19:56:25', 'Africa/Djibouti', 0),
(21, NULL, '2020-02-13 19:56:25', 'Africa/Douala', 0),
(22, NULL, '2020-02-13 19:56:25', 'Africa/El_Aaiun', 0),
(23, NULL, '2020-02-13 19:56:25', 'Africa/Freetown', 0),
(24, NULL, '2020-02-13 19:56:25', 'Africa/Gaborone', 0),
(25, NULL, '2020-02-13 19:56:25', 'Africa/Harare', 0),
(26, NULL, '2020-02-13 19:56:25', 'Africa/Johannesburg', 0),
(27, NULL, '2020-02-13 19:56:25', 'Africa/Juba', 0),
(28, NULL, '2020-02-13 19:56:25', 'Africa/Kampala', 0),
(29, NULL, '2020-02-13 19:56:25', 'Africa/Khartoum', 0),
(30, NULL, '2020-02-13 19:56:25', 'Africa/Kigali', 0),
(31, NULL, '2020-02-13 19:56:25', 'Africa/Kinshasa', 0),
(32, NULL, '2020-02-13 19:56:25', 'Africa/Lagos', 0),
(33, NULL, '2020-02-13 19:56:25', 'Africa/Libreville', 0),
(34, NULL, '2020-02-13 19:56:25', 'Africa/Lome', 0),
(35, NULL, '2020-02-13 19:56:25', 'Africa/Luanda', 0),
(36, NULL, '2020-02-13 19:56:25', 'Africa/Lubumbashi', 0),
(37, NULL, '2020-02-13 19:56:25', 'Africa/Lusaka', 0),
(38, NULL, '2020-02-13 19:56:25', 'Africa/Malabo', 0),
(39, NULL, '2020-02-13 19:56:25', 'Africa/Maputo', 0),
(40, NULL, '2020-02-13 19:56:25', 'Africa/Maseru', 0),
(41, NULL, '2020-02-13 19:56:25', 'Africa/Mbabane', 0),
(42, NULL, '2020-02-13 19:56:25', 'Africa/Mogadishu', 0),
(43, NULL, '2020-02-13 19:56:25', 'Africa/Monrovia', 0),
(44, NULL, '2020-02-13 19:56:25', 'Africa/Nairobi', 0),
(45, NULL, '2020-02-13 19:56:25', 'Africa/Ndjamena', 0),
(46, NULL, '2020-02-13 19:56:25', 'Africa/Niamey', 0),
(47, NULL, '2020-02-13 19:56:25', 'Africa/Nouakchott', 0),
(48, NULL, '2020-02-13 19:56:25', 'Africa/Ouagadougou', 0),
(49, NULL, '2020-02-13 19:56:25', 'Africa/Porto-Novo', 0),
(50, NULL, '2020-02-13 19:56:25', 'Africa/Sao_Tome', 0),
(51, NULL, '2020-02-13 19:56:25', 'Africa/Timbuktu', 0),
(52, NULL, '2020-02-13 19:56:25', 'Africa/Tripoli', 0),
(53, NULL, '2020-02-13 19:56:25', 'Africa/Tunis', 0),
(54, NULL, '2020-02-13 19:56:25', 'Africa/Windhoek', 0),
(55, NULL, '2020-02-13 19:56:25', 'America/Adak', 0),
(56, NULL, '2020-02-13 19:56:25', 'America/Anchorage', 0),
(57, NULL, '2020-02-13 19:56:25', 'America/Anguilla', 0),
(58, NULL, '2020-02-13 19:56:25', 'America/Antigua', 0),
(59, NULL, '2020-02-13 19:56:25', 'America/Araguaina', 0),
(60, NULL, '2020-02-13 19:56:25', 'America/Argentina/Buenos_Aires', 0),
(61, NULL, '2020-02-13 19:56:25', 'America/Argentina/Catamarca', 0),
(62, NULL, '2020-02-13 19:56:25', 'America/Argentina/ComodRivadavia', 0),
(63, NULL, '2020-02-13 19:56:25', 'America/Argentina/Cordoba', 0),
(64, NULL, '2020-02-13 19:56:25', 'America/Argentina/Jujuy', 0),
(65, NULL, '2020-02-13 19:56:25', 'America/Argentina/La_Rioja', 0),
(66, NULL, '2020-02-13 19:56:25', 'America/Argentina/Mendoza', 0),
(67, NULL, '2020-02-13 19:56:25', 'America/Argentina/Rio_Gallegos', 0),
(68, NULL, '2020-02-13 19:56:25', 'America/Argentina/Salta', 0),
(69, NULL, '2020-02-13 19:56:25', 'America/Argentina/San_Juan', 0),
(70, NULL, '2020-02-13 19:56:25', 'America/Argentina/San_Luis', 0),
(71, NULL, '2020-02-13 19:56:25', 'America/Argentina/Tucuman', 0),
(72, NULL, '2020-02-13 19:56:25', 'America/Argentina/Ushuaia', 0),
(73, NULL, '2020-02-13 19:56:25', 'America/Aruba', 0),
(74, NULL, '2020-02-13 19:56:25', 'America/Asuncion', 0),
(75, NULL, '2020-02-13 19:56:25', 'America/Atikokan', 0),
(76, NULL, '2020-02-13 19:56:25', 'America/Atka', 0),
(77, NULL, '2020-02-13 19:56:25', 'America/Bahia', 0),
(78, NULL, '2020-02-13 19:56:25', 'America/Bahia_Banderas', 0),
(79, NULL, '2020-02-13 19:56:25', 'America/Barbados', 0),
(80, NULL, '2020-02-13 19:56:25', 'America/Belem', 0),
(81, NULL, '2020-02-13 19:56:25', 'America/Belize', 0),
(82, NULL, '2020-02-13 19:56:25', 'America/Blanc-Sablon', 0),
(83, NULL, '2020-02-13 19:56:25', 'America/Boa_Vista', 0),
(84, NULL, '2020-02-13 19:56:25', 'America/Bogota', 0),
(85, NULL, '2020-02-13 19:56:25', 'America/Boise', 0),
(86, NULL, '2020-02-13 19:56:25', 'America/Buenos_Aires', 0),
(87, NULL, '2020-02-13 19:56:25', 'America/Cambridge_Bay', 0),
(88, NULL, '2020-02-13 19:56:25', 'America/Campo_Grande', 0),
(89, NULL, '2020-02-13 19:56:25', 'America/Cancun', 0),
(90, NULL, '2020-02-13 19:56:25', 'America/Caracas', 0),
(91, NULL, '2020-02-13 19:56:25', 'America/Catamarca', 0),
(92, NULL, '2020-02-13 19:56:25', 'America/Cayenne', 0),
(93, NULL, '2020-02-13 19:56:25', 'America/Cayman', 0),
(94, NULL, '2020-02-13 19:56:25', 'America/Chicago', 0),
(95, NULL, '2020-02-13 19:56:25', 'America/Chihuahua', 0),
(96, NULL, '2020-02-13 19:56:25', 'America/Coral_Harbour', 0),
(97, NULL, '2020-02-13 19:56:25', 'America/Cordoba', 0),
(98, NULL, '2020-02-13 19:56:25', 'America/Costa_Rica', 0),
(99, NULL, '2020-02-13 19:56:25', 'America/Creston', 0),
(100, NULL, '2020-02-13 19:56:25', 'America/Cuiaba', 0),
(101, NULL, '2020-02-13 19:56:25', 'America/Curacao', 0),
(102, NULL, '2020-02-13 19:56:25', 'America/Danmarkshavn', 0),
(103, NULL, '2020-02-13 19:56:25', 'America/Dawson', 0),
(104, NULL, '2020-02-13 19:56:25', 'America/Dawson_Creek', 0),
(105, NULL, '2020-02-13 19:56:25', 'America/Denver', 0),
(106, NULL, '2020-02-13 19:56:25', 'America/Detroit', 0),
(107, NULL, '2020-02-13 19:56:25', 'America/Dominica', 0),
(108, NULL, '2020-02-13 19:56:25', 'America/Edmonton', 0),
(109, NULL, '2020-02-13 19:56:25', 'America/Eirunepe', 0),
(110, NULL, '2020-02-13 19:56:25', 'America/El_Salvador', 0),
(111, NULL, '2020-02-13 19:56:25', 'America/Ensenada', 0),
(112, NULL, '2020-02-13 19:56:25', 'America/Fort_Wayne', 0),
(113, NULL, '2020-02-13 19:56:25', 'America/Fortaleza', 0),
(114, NULL, '2020-02-13 19:56:25', 'America/Glace_Bay', 0),
(115, NULL, '2020-02-13 19:56:25', 'America/Godthab', 0),
(116, NULL, '2020-02-13 19:56:25', 'America/Goose_Bay', 0),
(117, NULL, '2020-02-13 19:56:25', 'America/Grand_Turk', 0),
(118, NULL, '2020-02-13 19:56:25', 'America/Grenada', 0),
(119, NULL, '2020-02-13 19:56:25', 'America/Guadeloupe', 0),
(120, NULL, '2020-02-13 19:56:25', 'America/Guatemala', 0),
(121, NULL, '2020-02-13 19:56:25', 'America/Guayaquil', 0),
(122, NULL, '2020-02-13 19:56:25', 'America/Guyana', 0),
(123, NULL, '2020-02-13 19:56:25', 'America/Halifax', 0),
(124, NULL, '2020-02-13 19:56:25', 'America/Havana', 0),
(125, NULL, '2020-02-13 19:56:25', 'America/Hermosillo', 0),
(126, NULL, '2020-02-13 19:56:25', 'America/Indiana/Indianapolis', 0),
(127, NULL, '2020-02-13 19:56:25', 'America/Indiana/Knox', 0),
(128, NULL, '2020-02-13 19:56:25', 'America/Indiana/Marengo', 0),
(129, NULL, '2020-02-13 19:56:25', 'America/Indiana/Petersburg', 0),
(130, NULL, '2020-02-13 19:56:25', 'America/Indiana/Tell_City', 0),
(131, NULL, '2020-02-13 19:56:25', 'America/Indiana/Vevay', 0),
(132, NULL, '2020-02-13 19:56:25', 'America/Indiana/Vincennes', 0),
(133, NULL, '2020-02-13 19:56:25', 'America/Indiana/Winamac', 0),
(134, NULL, '2020-02-13 19:56:25', 'America/Indianapolis', 0),
(135, NULL, '2020-02-13 19:56:25', 'America/Inuvik', 0),
(136, NULL, '2020-02-13 19:56:25', 'America/Iqaluit', 0),
(137, NULL, '2020-02-13 19:56:25', 'America/Jamaica', 0),
(138, NULL, '2020-02-13 19:56:25', 'America/Jujuy', 0),
(139, NULL, '2020-02-13 19:56:25', 'America/Juneau', 0),
(140, NULL, '2020-02-13 19:56:25', 'America/Kentucky/Louisville', 0),
(141, NULL, '2020-02-13 19:56:25', 'America/Kentucky/Monticello', 0),
(142, NULL, '2020-02-13 19:56:25', 'America/Knox_IN', 0),
(143, NULL, '2020-02-13 19:56:25', 'America/Kralendijk', 0),
(144, NULL, '2020-02-13 19:56:25', 'America/La_Paz', 0),
(145, NULL, '2020-02-13 19:56:25', 'America/Lima', 0),
(146, NULL, '2020-02-13 19:56:25', 'America/Los_Angeles', 0),
(147, NULL, '2020-02-13 19:56:25', 'America/Louisville', 0),
(148, NULL, '2020-02-13 19:56:25', 'America/Lower_Princes', 0),
(149, NULL, '2020-02-13 19:56:25', 'America/Maceio', 0),
(150, NULL, '2020-02-13 19:56:25', 'America/Managua', 0),
(151, NULL, '2020-02-13 19:56:25', 'America/Manaus', 0),
(152, NULL, '2020-02-13 19:56:25', 'America/Marigot', 0),
(153, NULL, '2020-02-13 19:56:25', 'America/Martinique', 0),
(154, NULL, '2020-02-13 19:56:25', 'America/Matamoros', 0),
(155, NULL, '2020-02-13 19:56:25', 'America/Mazatlan', 0),
(156, NULL, '2020-02-13 19:56:25', 'America/Mendoza', 0),
(157, NULL, '2020-02-13 19:56:25', 'America/Menominee', 0),
(158, NULL, '2020-02-13 19:56:25', 'America/Merida', 0),
(159, NULL, '2020-02-13 19:56:25', 'America/Metlakatla', 0),
(160, NULL, '2020-02-13 19:56:25', 'America/Mexico_City', 0),
(161, NULL, '2020-02-13 19:56:25', 'America/Miquelon', 0),
(162, NULL, '2020-02-13 19:56:25', 'America/Moncton', 0),
(163, NULL, '2020-02-13 19:56:25', 'America/Monterrey', 0),
(164, NULL, '2020-02-13 19:56:25', 'America/Montevideo', 0),
(165, NULL, '2020-02-13 19:56:25', 'America/Montreal', 0),
(166, NULL, '2020-02-13 19:56:25', 'America/Montserrat', 0),
(167, NULL, '2020-02-13 19:56:25', 'America/Nassau', 0),
(168, NULL, '2020-02-13 19:56:25', 'America/New_York', 0),
(169, NULL, '2020-02-13 19:56:25', 'America/Nipigon', 0),
(170, NULL, '2020-02-13 19:56:25', 'America/Nome', 0),
(171, NULL, '2020-02-13 19:56:25', 'America/Noronha', 0),
(172, NULL, '2020-02-13 19:56:25', 'America/North_Dakota/Beulah', 0),
(173, NULL, '2020-02-13 19:56:25', 'America/North_Dakota/Center', 0),
(174, NULL, '2020-02-13 19:56:25', 'America/North_Dakota/New_Salem', 0),
(175, NULL, '2020-02-13 19:56:25', 'America/Ojinaga', 0),
(176, NULL, '2020-02-13 19:56:25', 'America/Panama', 0),
(177, NULL, '2020-02-13 19:56:25', 'America/Pangnirtung', 0),
(178, NULL, '2020-02-13 19:56:25', 'America/Paramaribo', 0),
(179, NULL, '2020-02-13 19:56:25', 'America/Phoenix', 0),
(180, NULL, '2020-02-13 19:56:25', 'America/Port-au-Prince', 0),
(181, NULL, '2020-02-13 19:56:25', 'America/Port_of_Spain', 0),
(182, NULL, '2020-02-13 19:56:25', 'America/Porto_Acre', 0),
(183, NULL, '2020-02-13 19:56:25', 'America/Porto_Velho', 0),
(184, NULL, '2020-02-13 19:56:25', 'America/Puerto_Rico', 0),
(185, NULL, '2020-02-13 19:56:25', 'America/Rainy_River', 0),
(186, NULL, '2020-02-13 19:56:25', 'America/Rankin_Inlet', 0),
(187, NULL, '2020-02-13 19:56:25', 'America/Recife', 0),
(188, NULL, '2020-02-13 19:56:25', 'America/Regina', 0),
(189, NULL, '2020-02-13 19:56:25', 'America/Resolute', 0),
(190, NULL, '2020-02-13 19:56:25', 'America/Rio_Branco', 0),
(191, NULL, '2020-02-13 19:56:25', 'America/Rosario', 0),
(192, NULL, '2020-02-13 19:56:25', 'America/Santa_Isabel', 0),
(193, NULL, '2020-02-13 19:56:25', 'America/Santarem', 0),
(194, NULL, '2020-02-13 19:56:25', 'America/Santiago', 0),
(195, NULL, '2020-02-13 19:56:25', 'America/Santo_Domingo', 0),
(196, NULL, '2020-02-13 19:56:25', 'America/Sao_Paulo', 0),
(197, NULL, '2020-02-13 19:56:25', 'America/Scoresbysund', 0),
(198, NULL, '2020-02-13 19:56:25', 'America/Shiprock', 0),
(199, NULL, '2020-02-13 19:56:25', 'America/Sitka', 0),
(200, NULL, '2020-02-13 19:56:25', 'America/St_Barthelemy', 0),
(201, NULL, '2020-02-13 19:56:25', 'America/St_Johns', 0),
(202, NULL, '2020-02-13 19:56:25', 'America/St_Kitts', 0),
(203, NULL, '2020-02-13 19:56:25', 'America/St_Lucia', 0),
(204, NULL, '2020-02-13 19:56:25', 'America/St_Thomas', 0),
(205, NULL, '2020-02-13 19:56:25', 'America/St_Vincent', 0),
(206, NULL, '2020-02-13 19:56:25', 'America/Swift_Current', 0),
(207, NULL, '2020-02-13 19:56:25', 'America/Tegucigalpa', 0),
(208, NULL, '2020-02-13 19:56:25', 'America/Thule', 0),
(209, NULL, '2020-02-13 19:56:25', 'America/Thunder_Bay', 0),
(210, NULL, '2020-02-13 19:56:25', 'America/Tijuana', 0),
(211, NULL, '2020-02-13 19:56:25', 'America/Toronto', 0),
(212, NULL, '2020-02-13 19:56:25', 'America/Tortola', 0),
(213, NULL, '2020-02-13 19:56:25', 'America/Vancouver', 0),
(214, NULL, '2020-02-13 19:56:25', 'America/Virgin', 0),
(215, NULL, '2020-02-13 19:56:25', 'America/Whitehorse', 0),
(216, NULL, '2020-02-13 19:56:25', 'America/Winnipeg', 0),
(217, NULL, '2020-02-13 19:56:25', 'America/Yakutat', 0),
(218, NULL, '2020-02-13 19:56:25', 'America/Yellowknife', 0),
(219, NULL, '2020-02-13 19:56:25', 'Antarctica/Casey', 0),
(220, NULL, '2020-02-13 19:56:25', 'Antarctica/Davis', 0),
(221, NULL, '2020-02-13 19:56:25', 'Antarctica/DumontDUrville', 0),
(222, NULL, '2020-02-13 19:56:25', 'Antarctica/Macquarie', 0),
(223, NULL, '2020-02-13 19:56:25', 'Antarctica/Mawson', 0),
(224, NULL, '2020-02-13 19:56:25', 'Antarctica/McMurdo', 0),
(225, NULL, '2020-02-13 19:56:25', 'Antarctica/Palmer', 0),
(226, NULL, '2020-02-13 19:56:25', 'Antarctica/Rothera', 0),
(227, NULL, '2020-02-13 19:56:25', 'Antarctica/South_Pole', 0),
(228, NULL, '2020-02-13 19:56:25', 'Antarctica/Syowa', 0),
(229, NULL, '2020-02-13 19:56:25', 'Antarctica/Vostok', 0),
(230, NULL, '2020-02-13 19:56:25', 'Arctic/Longyearbyen', 0),
(231, NULL, '2020-02-13 19:56:25', 'Asia/Aden', 0),
(232, NULL, '2020-02-13 19:56:25', 'Asia/Almaty', 0),
(233, NULL, '2020-02-13 19:56:25', 'Asia/Amman', 0),
(234, NULL, '2020-02-13 19:56:25', 'Asia/Anadyr', 0),
(235, NULL, '2020-02-13 19:56:25', 'Asia/Aqtau', 0),
(236, NULL, '2020-02-13 19:56:25', 'Asia/Aqtobe', 0),
(237, NULL, '2020-02-13 19:56:25', 'Asia/Ashgabat', 0),
(238, NULL, '2020-02-13 19:56:25', 'Asia/Ashkhabad', 0),
(239, NULL, '2020-02-13 19:56:25', 'Asia/Baghdad', 0),
(240, NULL, '2020-02-13 19:56:25', 'Asia/Bahrain', 0),
(241, NULL, '2020-02-13 19:56:25', 'Asia/Baku', 0),
(242, NULL, '2020-02-13 19:56:25', 'Asia/Bangkok', 0),
(243, NULL, '2020-02-13 19:56:25', 'Asia/Beirut', 0),
(244, NULL, '2020-02-13 19:56:25', 'Asia/Bishkek', 0),
(245, NULL, '2020-02-13 19:56:25', 'Asia/Brunei', 0),
(246, NULL, '2020-02-13 19:56:25', 'Asia/Calcutta', 0),
(247, NULL, '2020-02-13 19:56:25', 'Asia/Choibalsan', 0),
(248, NULL, '2020-02-13 19:56:25', 'Asia/Chongqing', 0),
(249, NULL, '2020-02-13 19:56:25', 'Asia/Chungking', 0),
(250, NULL, '2020-02-13 19:56:25', 'Asia/Colombo', 0),
(251, NULL, '2020-02-13 19:56:25', 'Asia/Dacca', 0),
(252, NULL, '2020-02-13 19:56:25', 'Asia/Damascus', 0),
(253, NULL, '2020-02-13 19:56:25', 'Asia/Dhaka', 0),
(254, NULL, '2020-02-13 19:56:25', 'Asia/Dili', 0),
(255, NULL, '2020-02-13 19:56:25', 'Asia/Dubai', 0),
(256, NULL, '2020-02-13 19:56:25', 'Asia/Dushanbe', 0),
(257, NULL, '2020-02-13 19:56:25', 'Asia/Gaza', 0),
(258, NULL, '2020-02-13 19:56:25', 'Asia/Harbin', 0),
(259, NULL, '2020-02-13 19:56:25', 'Asia/Hebron', 0),
(260, NULL, '2020-02-13 19:56:25', 'Asia/Ho_Chi_Minh', 0),
(261, NULL, '2020-02-13 19:56:25', 'Asia/Hong_Kong', 0),
(262, NULL, '2020-02-13 19:56:25', 'Asia/Hovd', 0),
(263, NULL, '2020-02-13 19:56:25', 'Asia/Irkutsk', 0),
(264, NULL, '2020-02-13 19:56:25', 'Asia/Istanbul', 0),
(265, NULL, '2020-02-13 19:56:25', 'Asia/Jakarta', 0),
(266, NULL, '2020-02-13 19:56:25', 'Asia/Jayapura', 0),
(267, NULL, '2020-02-13 19:56:25', 'Asia/Jerusalem', 0),
(268, NULL, '2020-02-13 19:56:25', 'Asia/Kabul', 0),
(269, NULL, '2020-02-13 19:56:25', 'Asia/Kamchatka', 0),
(270, NULL, '2020-02-13 19:56:25', 'Asia/Karachi', 0),
(271, NULL, '2020-02-13 19:56:25', 'Asia/Kashgar', 0),
(272, NULL, '2020-02-13 19:56:25', 'Asia/Kathmandu', 0),
(273, NULL, '2020-02-13 19:56:25', 'Asia/Khandyga', 0),
(274, NULL, '2020-02-13 19:56:25', 'Asia/Kolkata', 0),
(275, NULL, '2020-02-13 19:56:25', 'Asia/Krasnoyarsk', 0),
(276, NULL, '2020-02-13 19:56:25', 'Asia/Kuala_Lumpur', 0),
(277, NULL, '2020-02-13 19:56:25', 'Asia/Kuching', 0),
(278, NULL, '2020-02-13 19:56:25', 'Asia/Kuwait', 0),
(279, NULL, '2020-02-13 19:56:25', 'Asia/Macao', 0),
(280, NULL, '2020-02-13 19:56:25', 'Asia/Macau', 0),
(281, NULL, '2020-02-13 19:56:25', 'Asia/Magadan', 0),
(282, NULL, '2020-02-13 19:56:25', 'Asia/Makassar', 0),
(283, NULL, '2020-02-13 19:56:25', 'Asia/Manila', 0),
(284, NULL, '2020-02-13 19:56:25', 'Asia/Muscat', 0),
(285, NULL, '2020-02-13 19:56:25', 'Asia/Nicosia', 0),
(286, NULL, '2020-02-13 19:56:25', 'Asia/Novokuznetsk', 0),
(287, NULL, '2020-02-13 19:56:25', 'Asia/Novosibirsk', 0),
(288, NULL, '2020-02-13 19:56:25', 'Asia/Omsk', 0),
(289, NULL, '2020-02-13 19:56:25', 'Asia/Oral', 0),
(290, NULL, '2020-02-13 19:56:25', 'Asia/Phnom_Penh', 0),
(291, NULL, '2020-02-13 19:56:25', 'Asia/Pontianak', 0),
(292, NULL, '2020-02-13 19:56:25', 'Asia/Pyongyang', 0),
(293, NULL, '2020-02-13 19:56:25', 'Asia/Qatar', 0),
(294, NULL, '2020-02-13 19:56:25', 'Asia/Qyzylorda', 0),
(295, NULL, '2020-02-13 19:56:25', 'Asia/Rangoon', 0),
(296, NULL, '2020-02-13 19:56:25', 'Asia/Riyadh', 0),
(297, NULL, '2020-02-13 19:56:25', 'Asia/Saigon', 0),
(298, NULL, '2020-02-13 19:56:25', 'Asia/Sakhalin', 0),
(299, NULL, '2020-02-13 19:56:25', 'Asia/Samarkand', 0),
(300, NULL, '2020-02-13 19:56:25', 'Asia/Seoul', 0),
(301, NULL, '2020-02-13 19:56:25', 'Asia/Shanghai', 0),
(302, NULL, '2020-02-13 19:56:25', 'Asia/Singapore', 0),
(303, NULL, '2020-02-13 19:56:25', 'Asia/Taipei', 0),
(304, NULL, '2020-02-13 19:56:25', 'Asia/Tashkent', 0),
(305, NULL, '2020-02-13 19:56:25', 'Asia/Tbilisi', 0),
(306, NULL, '2020-02-13 19:56:25', 'Asia/Tehran', 0),
(307, NULL, '2020-02-13 19:56:25', 'Asia/Tel_Aviv', 0),
(308, NULL, '2020-02-13 19:56:25', 'Asia/Thimbu', 0),
(309, NULL, '2020-02-13 19:56:25', 'Asia/Thimphu', 0),
(310, NULL, '2020-02-13 19:56:25', 'Asia/Tokyo', 0),
(311, NULL, '2020-02-13 19:56:25', 'Asia/Ujung_Pandang', 0),
(312, NULL, '2020-02-13 19:56:25', 'Asia/Ulaanbaatar', 0),
(313, NULL, '2020-02-13 19:56:25', 'Asia/Ulan_Bator', 0),
(314, NULL, '2020-02-13 19:56:25', 'Asia/Urumqi', 0),
(315, NULL, '2020-02-13 19:56:25', 'Asia/Ust-Nera', 0),
(316, NULL, '2020-02-13 19:56:25', 'Asia/Vientiane', 0),
(317, NULL, '2020-02-13 19:56:25', 'Asia/Vladivostok', 0),
(318, NULL, '2020-02-13 19:56:25', 'Asia/Yakutsk', 0),
(319, NULL, '2020-02-13 19:56:25', 'Asia/Yekaterinburg', 0),
(320, NULL, '2020-02-13 19:56:25', 'Asia/Yerevan', 0),
(321, NULL, '2020-02-13 19:56:25', 'Atlantic/Azores', 0),
(322, NULL, '2020-02-13 19:56:25', 'Atlantic/Bermuda', 0),
(323, NULL, '2020-02-13 19:56:25', 'Atlantic/Canary', 0),
(324, NULL, '2020-02-13 19:56:25', 'Atlantic/Cape_Verde', 0),
(325, NULL, '2020-02-13 19:56:25', 'Atlantic/Faeroe', 0),
(326, NULL, '2020-02-13 19:56:25', 'Atlantic/Faroe', 0),
(327, NULL, '2020-02-13 19:56:25', 'Atlantic/Jan_Mayen', 0),
(328, NULL, '2020-02-13 19:56:25', 'Atlantic/Madeira', 0),
(329, NULL, '2020-02-13 19:56:25', 'Atlantic/Reykjavik', 0),
(330, NULL, '2020-02-13 19:56:25', 'Atlantic/South_Georgia', 0),
(331, NULL, '2020-02-13 19:56:25', 'Atlantic/St_Helena', 0),
(332, NULL, '2020-02-13 19:56:25', 'Atlantic/Stanley', 0),
(333, NULL, '2020-02-13 19:56:25', 'Australia/ACT', 0),
(334, NULL, '2020-02-13 19:56:25', 'Australia/Adelaide', 0),
(335, NULL, '2020-02-13 19:56:25', 'Australia/Brisbane', 0),
(336, NULL, '2020-02-13 19:56:25', 'Australia/Broken_Hill', 0),
(337, NULL, '2020-02-13 19:56:25', 'Australia/Canberra', 0),
(338, NULL, '2020-02-13 19:56:25', 'Australia/Currie', 0),
(339, NULL, '2020-02-13 19:56:25', 'Australia/Darwin', 0),
(340, NULL, '2020-02-13 19:56:25', 'Australia/Eucla', 0),
(341, NULL, '2020-02-13 19:56:25', 'Australia/Hobart', 0),
(342, NULL, '2020-02-13 19:56:25', 'Australia/LHI', 0),
(343, NULL, '2020-02-13 19:56:25', 'Australia/Lindeman', 0),
(344, NULL, '2020-02-13 19:56:25', 'Australia/Lord_Howe', 0),
(345, NULL, '2020-02-13 19:56:25', 'Australia/Melbourne', 0),
(346, NULL, '2020-02-13 19:56:25', 'Australia/North', 0),
(347, NULL, '2020-02-13 19:56:25', 'Australia/NSW', 1),
(348, NULL, '2020-02-13 19:56:25', 'Australia/Perth', 0),
(349, NULL, '2020-02-13 19:56:25', 'Australia/Queensland', 0),
(350, NULL, '2020-02-13 19:56:25', 'Australia/South', 0),
(351, NULL, '2020-02-13 19:56:25', 'Australia/Sydney', 0),
(352, NULL, '2020-02-13 19:56:25', 'Australia/Tasmania', 0),
(353, NULL, '2020-02-13 19:56:25', 'Australia/Victoria', 0),
(354, NULL, '2020-02-13 19:56:25', 'Australia/West', 0),
(355, NULL, '2020-02-13 19:56:25', 'Australia/Yancowinna', 0),
(356, NULL, '2020-02-13 19:56:25', 'Europe/Amsterdam', 0),
(357, NULL, '2020-02-13 19:56:25', 'Europe/Andorra', 0),
(358, NULL, '2020-02-13 19:56:25', 'Europe/Athens', 0),
(359, NULL, '2020-02-13 19:56:25', 'Europe/Belfast', 0),
(360, NULL, '2020-02-13 19:56:25', 'Europe/Belgrade', 0),
(361, NULL, '2020-02-13 19:56:25', 'Europe/Berlin', 0),
(362, NULL, '2020-02-13 19:56:25', 'Europe/Bratislava', 0),
(363, NULL, '2020-02-13 19:56:25', 'Europe/Brussels', 0),
(364, NULL, '2020-02-13 19:56:25', 'Europe/Bucharest', 0),
(365, NULL, '2020-02-13 19:56:25', 'Europe/Budapest', 0),
(366, NULL, '2020-02-13 19:56:25', 'Europe/Busingen', 0),
(367, NULL, '2020-02-13 19:56:25', 'Europe/Chisinau', 0),
(368, NULL, '2020-02-13 19:56:25', 'Europe/Copenhagen', 0),
(369, NULL, '2020-02-13 19:56:25', 'Europe/Dublin', 0),
(370, NULL, '2020-02-13 19:56:25', 'Europe/Gibraltar', 0),
(371, NULL, '2020-02-13 19:56:25', 'Europe/Guernsey', 0),
(372, NULL, '2020-02-13 19:56:25', 'Europe/Helsinki', 0),
(373, NULL, '2020-02-13 19:56:25', 'Europe/Isle_of_Man', 0),
(374, NULL, '2020-02-13 19:56:25', 'Europe/Istanbul', 0),
(375, NULL, '2020-02-13 19:56:25', 'Europe/Jersey', 0),
(376, NULL, '2020-02-13 19:56:25', 'Europe/Kaliningrad', 0),
(377, NULL, '2020-02-13 19:56:25', 'Europe/Kiev', 0),
(378, NULL, '2020-02-13 19:56:25', 'Europe/Lisbon', 0),
(379, NULL, '2020-02-13 19:56:25', 'Europe/Ljubljana', 0),
(380, NULL, '2020-02-13 19:56:25', 'Europe/London', 0),
(381, NULL, '2020-02-13 19:56:25', 'Europe/Luxembourg', 0),
(382, NULL, '2020-02-13 19:56:25', 'Europe/Madrid', 0),
(383, NULL, '2020-02-13 19:56:25', 'Europe/Malta', 0),
(384, NULL, '2020-02-13 19:56:25', 'Europe/Mariehamn', 0),
(385, NULL, '2020-02-13 19:56:25', 'Europe/Minsk', 0),
(386, NULL, '2020-02-13 19:56:25', 'Europe/Monaco', 0),
(387, NULL, '2020-02-13 19:56:25', 'Europe/Moscow', 0),
(388, NULL, '2020-02-13 19:56:25', 'Europe/Nicosia', 0),
(389, NULL, '2020-02-13 19:56:25', 'Europe/Oslo', 0),
(390, NULL, '2020-02-13 19:56:25', 'Europe/Paris', 0),
(391, NULL, '2020-02-13 19:56:25', 'Europe/Podgorica', 0),
(392, NULL, '2020-02-13 19:56:25', 'Europe/Prague', 0),
(393, NULL, '2020-02-13 19:56:25', 'Europe/Riga', 0),
(394, NULL, '2020-02-13 19:56:25', 'Europe/Rome', 0),
(395, NULL, '2020-02-13 19:56:25', 'Europe/Samara', 0),
(396, NULL, '2020-02-13 19:56:25', 'Europe/San_Marino', 0),
(397, NULL, '2020-02-13 19:56:25', 'Europe/Sarajevo', 0),
(398, NULL, '2020-02-13 19:56:25', 'Europe/Simferopol', 0),
(399, NULL, '2020-02-13 19:56:25', 'Europe/Skopje', 0),
(400, NULL, '2020-02-13 19:56:25', 'Europe/Sofia', 0),
(401, NULL, '2020-02-13 19:56:25', 'Europe/Stockholm', 0),
(402, NULL, '2020-02-13 19:56:25', 'Europe/Tallinn', 0),
(403, NULL, '2020-02-13 19:56:25', 'Europe/Tirane', 0),
(404, NULL, '2020-02-13 19:56:25', 'Europe/Tiraspol', 0),
(405, NULL, '2020-02-13 19:56:25', 'Europe/Uzhgorod', 0),
(406, NULL, '2020-02-13 19:56:25', 'Europe/Vaduz', 0),
(407, NULL, '2020-02-13 19:56:25', 'Europe/Vatican', 0),
(408, NULL, '2020-02-13 19:56:25', 'Europe/Vienna', 0),
(409, NULL, '2020-02-13 19:56:25', 'Europe/Vilnius', 0),
(410, NULL, '2020-02-13 19:56:25', 'Europe/Volgograd', 0),
(411, NULL, '2020-02-13 19:56:25', 'Europe/Warsaw', 0),
(412, NULL, '2020-02-13 19:56:25', 'Europe/Zagreb', 0),
(413, NULL, '2020-02-13 19:56:25', 'Europe/Zaporozhye', 0),
(414, NULL, '2020-02-13 19:56:25', 'Europe/Zurich', 0),
(415, NULL, '2020-02-13 19:56:25', 'Indian/Antananarivo', 0),
(416, NULL, '2020-02-13 19:56:25', 'Indian/Chagos', 0),
(417, NULL, '2020-02-13 19:56:25', 'Indian/Christmas', 0),
(418, NULL, '2020-02-13 19:56:25', 'Indian/Cocos', 0),
(419, NULL, '2020-02-13 19:56:25', 'Indian/Comoro', 0),
(420, NULL, '2020-02-13 19:56:25', 'Indian/Kerguelen', 0),
(421, NULL, '2020-02-13 19:56:25', 'Indian/Mahe', 0),
(422, NULL, '2020-02-13 19:56:25', 'Indian/Maldives', 0),
(423, NULL, '2020-02-13 19:56:25', 'Indian/Mauritius', 0),
(424, NULL, '2020-02-13 19:56:25', 'Indian/Mayotte', 0),
(425, NULL, '2020-02-13 19:56:25', 'Indian/Reunion', 0),
(426, NULL, '2020-02-13 19:56:25', 'Pacific/Apia', 0),
(427, NULL, '2020-02-13 19:56:25', 'Pacific/Auckland', 0),
(428, NULL, '2020-02-13 19:56:25', 'Pacific/Chatham', 0),
(429, NULL, '2020-02-13 19:56:25', 'Pacific/Chuuk', 0),
(430, NULL, '2020-02-13 19:56:25', 'Pacific/Easter', 0),
(431, NULL, '2020-02-13 19:56:25', 'Pacific/Efate', 0),
(432, NULL, '2020-02-13 19:56:25', 'Pacific/Enderbury', 0),
(433, NULL, '2020-02-13 19:56:25', 'Pacific/Fakaofo', 0),
(434, NULL, '2020-02-13 19:56:25', 'Pacific/Fiji', 0),
(435, NULL, '2020-02-13 19:56:25', 'Pacific/Funafuti', 0),
(436, NULL, '2020-02-13 19:56:25', 'Pacific/Galapagos', 0),
(437, NULL, '2020-02-13 19:56:25', 'Pacific/Gambier', 0),
(438, NULL, '2020-02-13 19:56:25', 'Pacific/Guadalcanal', 0),
(439, NULL, '2020-02-13 19:56:25', 'Pacific/Guam', 0),
(440, NULL, '2020-02-13 19:56:25', 'Pacific/Honolulu', 0),
(441, NULL, '2020-02-13 19:56:25', 'Pacific/Johnston', 0),
(442, NULL, '2020-02-13 19:56:25', 'Pacific/Kiritimati', 0),
(443, NULL, '2020-02-13 19:56:25', 'Pacific/Kosrae', 0),
(444, NULL, '2020-02-13 19:56:25', 'Pacific/Kwajalein', 0),
(445, NULL, '2020-02-13 19:56:25', 'Pacific/Majuro', 0),
(446, NULL, '2020-02-13 19:56:25', 'Pacific/Marquesas', 0),
(447, NULL, '2020-02-13 19:56:25', 'Pacific/Midway', 0),
(448, NULL, '2020-02-13 19:56:25', 'Pacific/Nauru', 0),
(449, NULL, '2020-02-13 19:56:25', 'Pacific/Niue', 0),
(450, NULL, '2020-02-13 19:56:25', 'Pacific/Norfolk', 0),
(451, NULL, '2020-02-13 19:56:25', 'Pacific/Noumea', 0),
(452, NULL, '2020-02-13 19:56:25', 'Pacific/Pago_Pago', 0),
(453, NULL, '2020-02-13 19:56:25', 'Pacific/Palau', 0),
(454, NULL, '2020-02-13 19:56:25', 'Pacific/Pitcairn', 0),
(455, NULL, '2020-02-13 19:56:25', 'Pacific/Pohnpei', 0),
(456, NULL, '2020-02-13 19:56:25', 'Pacific/Ponape', 0),
(457, NULL, '2020-02-13 19:56:25', 'Pacific/Port_Moresby', 0),
(458, NULL, '2020-02-13 19:56:25', 'Pacific/Rarotonga', 0),
(459, NULL, '2020-02-13 19:56:25', 'Pacific/Saipan', 0),
(460, NULL, '2020-02-13 19:56:25', 'Pacific/Samoa', 0),
(461, NULL, '2020-02-13 19:56:25', 'Pacific/Tahiti', 0),
(462, NULL, '2020-02-13 19:56:25', 'Pacific/Tarawa', 0),
(463, NULL, '2020-02-13 19:56:25', 'Pacific/Tongatapu', 0),
(464, NULL, '2020-02-13 19:56:25', 'Pacific/Truk', 0),
(465, NULL, '2020-02-13 19:56:25', 'Pacific/Wake', 0),
(466, NULL, '2020-02-13 19:56:25', 'Pacific/Wallis', 0),
(467, NULL, '2020-02-13 19:56:25', 'Pacific/Yap', 0);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `tr_head_id` int(10) UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `dr_amount` int(11) DEFAULT NULL,
  `cr_amount` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_heads`
--

CREATE TABLE `transaction_heads` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `tr_head` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acc_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transfer_certificates`
--

CREATE TABLE `transfer_certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `students_id` int(10) UNSIGNED NOT NULL,
  `date_of_issue` date NOT NULL,
  `date_of_leaving` date NOT NULL,
  `tc_num` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leaving_time_class` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualified_to_promote` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `paid_fee_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `character` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transport_histories`
--

CREATE TABLE `transport_histories` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `years_id` int(10) UNSIGNED NOT NULL,
  `routes_id` int(10) UNSIGNED DEFAULT NULL,
  `vehicles_id` int(10) UNSIGNED DEFAULT NULL,
  `travellers_id` int(10) UNSIGNED NOT NULL,
  `history_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transport_users`
--

CREATE TABLE `transport_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `routes_id` int(10) UNSIGNED DEFAULT NULL,
  `vehicles_id` int(10) UNSIGNED DEFAULT NULL,
  `user_type` int(10) UNSIGNED NOT NULL,
  `member_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login_at` timestamp NULL DEFAULT NULL,
  `last_login_ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `contact_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `hook_id` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `last_login_at`, `last_login_ip`, `created_at`, `updated_at`, `contact_number`, `address`, `profile_image`, `role_id`, `hook_id`, `status`) VALUES
(1, 'Super Admin', 'superadmin@gmail.com', '$2y$10$bSsJ3S.sXmxGdR1J.XZrKOcGitlL/1Nqs0nZQ0SR/pWuBp0Jkhk2q', NULL, '2020-02-17 02:34:24', '122.170.70.251', NULL, '2020-02-17 02:34:24', NULL, NULL, NULL, NULL, NULL, 1),
(2, 'registration  test', 'test@test.com', '$2y$10$bSsJ3S.sXmxGdR1J.XZrKOcGitlL/1Nqs0nZQ0SR/pWuBp0Jkhk2q', NULL, '2020-01-09 01:25:48', '::1', '2020-01-02 07:43:34', '2020-01-09 01:25:48', NULL, NULL, NULL, 7, 5, 1),
(3, 'VIVEK SINGH BISHT', 'admin@gmail.com', '$2y$10$r.KtpdLau3EcPVbqdv2kxuuHyu89ROF/1eXA.pvUF1WwQgUHuTq36', NULL, '2020-01-09 06:18:15', '::1', '2020-01-07 03:58:08', '2020-01-09 06:18:15', NULL, NULL, NULL, 6, 6, 1),
(4, 'Dinesh SFSDF SDFSDF', 'Dinesh@gmail.com', '$2y$10$JYqUMtqWc2h24czmn81Kg.aR3V5ywKF7kiQOyF28pkXB2OGE6hjn6', NULL, '2020-01-09 06:15:42', '::1', '2020-01-07 04:02:21', '2020-01-09 06:15:42', NULL, NULL, NULL, 7, 8, 1),
(5, 'TEST STAFF  01', 'Staff@test.com', '$2y$10$tJeWG1duF27TapLbevZzh.dD..acOVgwSMI8/AJoO77SaNdyvwAR.', NULL, '2020-01-09 05:31:29', '::1', '2020-01-07 04:43:49', '2020-01-09 05:31:29', NULL, NULL, NULL, 5, 3, 1),
(6, 'VIVEK@gmail.com', 'VIVEK@gmail.com', '$2y$10$MXNGumVerlK49LevIL9freIS1lo50fkwDAo3IAzPQ3hf3QhOZ4.Qi', NULL, NULL, NULL, '2020-01-13 01:49:00', '2020-01-13 01:49:00', '65646546544', 'fhgfdhfg', '', NULL, NULL, 1),
(7, 'new staff', 'staff@gmail.com', '$2y$10$EHsUptA/xXOIiO2eOaDVLOPG42ocUaQJqv6.Vm25upfnDKOEVYogO', NULL, '2020-02-13 20:05:46', '58.179.58.239', '2020-02-13 20:05:21', '2020-02-13 20:05:46', NULL, NULL, NULL, 5, 1, 1),
(8, 'TEST  GURDIAN', 'guardian@gmail.com', '$2y$10$MPV8QSQEPK9PmY.SAzrJPuvaewrZ91aTQ2Cy.c1ZfKrrICzm7EP8.', NULL, NULL, NULL, '2020-02-13 20:08:06', '2020-02-13 20:08:06', NULL, NULL, NULL, 7, 4, 1),
(9, 'TEST STUDENT 01', 'student@gmail.com', '$2y$10$6mnxXmiuPlt6uw3a8UuPyOTqxHMheoDk50hA9Fu7Ot.uZRvzr.p42', NULL, '2020-02-17 01:15:14', '58.179.58.239', '2020-02-13 20:08:29', '2020-02-17 01:15:14', NULL, NULL, NULL, 6, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `number` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_staffs`
--

CREATE TABLE `vehicle_staffs` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `vehicles_id` int(10) UNSIGNED NOT NULL,
  `staffs_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

CREATE TABLE `years` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `last_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_infos`
--
ALTER TABLE `academic_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `academic_infos_students_id_foreign` (`students_id`);

--
-- Indexes for table `account_categories`
--
ALTER TABLE `account_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addressinfos`
--
ALTER TABLE `addressinfos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addressinfos_students_id_foreign` (`students_id`);

--
-- Indexes for table `alert_settings`
--
ALTER TABLE `alert_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assignments_years_id_foreign` (`years_id`),
  ADD KEY `assignments_semesters_id_foreign` (`semesters_id`),
  ADD KEY `assignments_subjects_id_foreign` (`subjects_id`);

--
-- Indexes for table `assignment_answers`
--
ALTER TABLE `assignment_answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assignment_answers_assignments_id_foreign` (`assignments_id`),
  ADD KEY `assignment_answers_students_id_foreign` (`students_id`);

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attendances_years_id_foreign` (`years_id`),
  ADD KEY `attendances_months_id_foreign` (`months_id`);

--
-- Indexes for table `attendance_certificates`
--
ALTER TABLE `attendance_certificates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `attendance_certificates_students_id_unique` (`students_id`);

--
-- Indexes for table `attendance_masters`
--
ALTER TABLE `attendance_masters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attendance_masters_year_foreign` (`year`),
  ADD KEY `attendance_masters_month_foreign` (`month`);

--
-- Indexes for table `attendance_statuses`
--
ALTER TABLE `attendance_statuses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `attendance_statuses_title_unique` (`title`);

--
-- Indexes for table `audits`
--
ALTER TABLE `audits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `audits_auditable_type_auditable_id_index` (`auditable_type`,`auditable_id`),
  ADD KEY `audits_user_id_user_type_index` (`user_id`,`user_type`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_transactions`
--
ALTER TABLE `bank_transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bank_transactions_banks_id_foreign` (`banks_id`);

--
-- Indexes for table `beds`
--
ALTER TABLE `beds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `beds_hostels_id_foreign` (`hostels_id`),
  ADD KEY `beds_rooms_id_foreign` (`rooms_id`),
  ADD KEY `beds_bed_status_foreign` (`bed_status`);

--
-- Indexes for table `bed_statuses`
--
ALTER TABLE `bed_statuses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bed_statuses_title_unique` (`title`);

--
-- Indexes for table `bonafide_certificates`
--
ALTER TABLE `bonafide_certificates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bonafide_certificates_students_id_unique` (`students_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `books_book_code_unique` (`book_code`),
  ADD KEY `books_book_masters_id_foreign` (`book_masters_id`),
  ADD KEY `books_book_status_foreign` (`book_status`);

--
-- Indexes for table `book_categories`
--
ALTER TABLE `book_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `book_categories_title_unique` (`title`),
  ADD UNIQUE KEY `book_categories_slug_unique` (`slug`);

--
-- Indexes for table `book_issues`
--
ALTER TABLE `book_issues`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_issues_book_id_foreign` (`book_id`);

--
-- Indexes for table `book_masters`
--
ALTER TABLE `book_masters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_masters_categories_foreign` (`categories`);

--
-- Indexes for table `book_requests`
--
ALTER TABLE `book_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_statuses`
--
ALTER TABLE `book_statuses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `book_statuses_title_unique` (`title`);

--
-- Indexes for table `certificate_histories`
--
ALTER TABLE `certificate_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `certificate_histories_students_id_foreign` (`students_id`);

--
-- Indexes for table `certificate_templates`
--
ALTER TABLE `certificate_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_completion_certificates`
--
ALTER TABLE `course_completion_certificates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `course_completion_certificates_students_id_unique` (`students_id`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `days_title_unique` (`title`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eating_times`
--
ALTER TABLE `eating_times`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `eating_times_title_unique` (`title`);

--
-- Indexes for table `email_settings`
--
ALTER TABLE `email_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `exams_title_unique` (`title`);

--
-- Indexes for table `exam_mark_ledgers`
--
ALTER TABLE `exam_mark_ledgers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_mark_ledgers_students_id_foreign` (`students_id`);

--
-- Indexes for table `exam_schedules`
--
ALTER TABLE `exam_schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_schedules_years_id_foreign` (`years_id`),
  ADD KEY `exam_schedules_months_id_foreign` (`months_id`),
  ADD KEY `exam_schedules_exams_id_foreign` (`exams_id`),
  ADD KEY `exam_schedules_faculty_id_foreign` (`faculty_id`),
  ADD KEY `exam_schedules_semesters_id_foreign` (`semesters_id`),
  ADD KEY `exam_schedules_subjects_id_foreign` (`subjects_id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `faculties_faculty_unique` (`faculty`),
  ADD UNIQUE KEY `faculties_faculty_code_unique` (`faculty_code`);

--
-- Indexes for table `faculty_semester`
--
ALTER TABLE `faculty_semester`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faculty_semester_faculty_id_foreign` (`faculty_id`),
  ADD KEY `faculty_semester_semester_id_foreign` (`semester_id`);

--
-- Indexes for table `fee_collections`
--
ALTER TABLE `fee_collections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fee_collections_students_id_foreign` (`students_id`),
  ADD KEY `fee_collections_fee_masters_id_foreign` (`fee_masters_id`);

--
-- Indexes for table `fee_heads`
--
ALTER TABLE `fee_heads`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fee_heads_fee_head_title_unique` (`fee_head_title`);

--
-- Indexes for table `fee_masters`
--
ALTER TABLE `fee_masters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fee_masters_students_id_foreign` (`students_id`);

--
-- Indexes for table `food_categories`
--
ALTER TABLE `food_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `food_categories_title_unique` (`title`);

--
-- Indexes for table `food_items`
--
ALTER TABLE `food_items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `food_items_title_unique` (`title`);

--
-- Indexes for table `food_item_food_schedule`
--
ALTER TABLE `food_item_food_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_schedules`
--
ALTER TABLE `food_schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `general_settings_time_zones_id_foreign` (`time_zones_id`);

--
-- Indexes for table `grading_scales`
--
ALTER TABLE `grading_scales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grading_scales_gradingtype_id_foreign` (`gradingType_id`);

--
-- Indexes for table `grading_types`
--
ALTER TABLE `grading_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `grading_types_title_unique` (`title`),
  ADD UNIQUE KEY `grading_types_slug_unique` (`slug`);

--
-- Indexes for table `guardian_details`
--
ALTER TABLE `guardian_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hostels`
--
ALTER TABLE `hostels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hostels_name_unique` (`name`);

--
-- Indexes for table `hostel_meals`
--
ALTER TABLE `hostel_meals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `library_circulations`
--
ALTER TABLE `library_circulations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `library_circulations_user_type_unique` (`user_type`),
  ADD UNIQUE KEY `library_circulations_slug_unique` (`slug`),
  ADD UNIQUE KEY `library_circulations_code_prefix_unique` (`code_prefix`);

--
-- Indexes for table `library_members`
--
ALTER TABLE `library_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `months`
--
ALTER TABLE `months`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `months_title_unique` (`title`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parent_details`
--
ALTER TABLE `parent_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_details_students_id_foreign` (`students_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `payment_methods_title_unique` (`title`);

--
-- Indexes for table `payment_settings`
--
ALTER TABLE `payment_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payroll_heads`
--
ALTER TABLE `payroll_heads`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `payroll_heads_title_unique` (`title`),
  ADD UNIQUE KEY `payroll_heads_slug_unique` (`slug`);

--
-- Indexes for table `payroll_masters`
--
ALTER TABLE `payroll_masters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payroll_masters_staff_id_foreign` (`staff_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `residents`
--
ALTER TABLE `residents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `residents_hostels_id_foreign` (`hostels_id`),
  ADD KEY `residents_rooms_id_foreign` (`rooms_id`),
  ADD KEY `residents_beds_id_foreign` (`beds_id`);

--
-- Indexes for table `resident_histories`
--
ALTER TABLE `resident_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resident_histories_years_id_foreign` (`years_id`),
  ADD KEY `resident_histories_hostels_id_foreign` (`hostels_id`),
  ADD KEY `resident_histories_rooms_id_foreign` (`rooms_id`),
  ADD KEY `resident_histories_beds_id_foreign` (`beds_id`),
  ADD KEY `resident_histories_residents_id_foreign` (`residents_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rooms_hostels_id_foreign` (`hostels_id`),
  ADD KEY `rooms_room_type_foreign` (`room_type`);

--
-- Indexes for table `room_types`
--
ALTER TABLE `room_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `room_types_title_unique` (`title`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `routes_title_unique` (`title`);

--
-- Indexes for table `route_vehicles`
--
ALTER TABLE `route_vehicles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary_pays`
--
ALTER TABLE `salary_pays`
  ADD PRIMARY KEY (`id`),
  ADD KEY `salary_pays_staff_id_foreign` (`staff_id`),
  ADD KEY `salary_pays_salary_masters_id_foreign` (`salary_masters_id`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `semesters_semester_unique` (`semester`),
  ADD UNIQUE KEY `semesters_slug_unique` (`slug`);

--
-- Indexes for table `semester_subject`
--
ALTER TABLE `semester_subject`
  ADD PRIMARY KEY (`id`),
  ADD KEY `semester_subject_semester_id_foreign` (`semester_id`),
  ADD KEY `semester_subject_subject_id_foreign` (`subject_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_emails`
--
ALTER TABLE `sms_emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_settings`
--
ALTER TABLE `sms_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `staff_reg_no_unique` (`reg_no`),
  ADD KEY `staff_designation_foreign` (`designation`);

--
-- Indexes for table `staff_designations`
--
ALTER TABLE `staff_designations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `staff_designations_title_unique` (`title`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_reg_no_unique` (`reg_no`),
  ADD KEY `students_faculty_foreign` (`faculty`),
  ADD KEY `students_semester_foreign` (`semester`),
  ADD KEY `students_academic_status_foreign` (`academic_status`),
  ADD KEY `students_batch_foreign` (`batch`);

--
-- Indexes for table `student_batches`
--
ALTER TABLE `student_batches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_batches_title_unique` (`title`);

--
-- Indexes for table `student_guardians`
--
ALTER TABLE `student_guardians`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_guardians_students_id_foreign` (`students_id`),
  ADD KEY `student_guardians_guardians_id_foreign` (`guardians_id`);

--
-- Indexes for table `student_statuses`
--
ALTER TABLE `student_statuses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_statuses_title_unique` (`title`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_attendances`
--
ALTER TABLE `subject_attendances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_attendances_years_id_foreign` (`years_id`),
  ADD KEY `subject_attendances_months_id_foreign` (`months_id`),
  ADD KEY `subject_attendances_subjects_id_foreign` (`subjects_id`);

--
-- Indexes for table `time_zones`
--
ALTER TABLE `time_zones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_tr_head_id_foreign` (`tr_head_id`);

--
-- Indexes for table `transaction_heads`
--
ALTER TABLE `transaction_heads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transfer_certificates`
--
ALTER TABLE `transfer_certificates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `transfer_certificates_students_id_unique` (`students_id`),
  ADD UNIQUE KEY `transfer_certificates_tc_num_unique` (`tc_num`);

--
-- Indexes for table `transport_histories`
--
ALTER TABLE `transport_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transport_histories_travellers_id_foreign` (`travellers_id`);

--
-- Indexes for table `transport_users`
--
ALTER TABLE `transport_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transport_users_routes_id_foreign` (`routes_id`),
  ADD KEY `transport_users_vehicles_id_foreign` (`vehicles_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vehicles_number_unique` (`number`);

--
-- Indexes for table `vehicle_staffs`
--
ALTER TABLE `vehicle_staffs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehicle_staffs_staffs_id_foreign` (`staffs_id`),
  ADD KEY `vehicle_staffs_vehicles_id_foreign` (`vehicles_id`);

--
-- Indexes for table `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `years_title_unique` (`title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_infos`
--
ALTER TABLE `academic_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `account_categories`
--
ALTER TABLE `account_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `addressinfos`
--
ALTER TABLE `addressinfos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `alert_settings`
--
ALTER TABLE `alert_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assignment_answers`
--
ALTER TABLE `assignment_answers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendance_certificates`
--
ALTER TABLE `attendance_certificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendance_masters`
--
ALTER TABLE `attendance_masters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendance_statuses`
--
ALTER TABLE `attendance_statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `audits`
--
ALTER TABLE `audits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bank_transactions`
--
ALTER TABLE `bank_transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `beds`
--
ALTER TABLE `beds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bed_statuses`
--
ALTER TABLE `bed_statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bonafide_certificates`
--
ALTER TABLE `bonafide_certificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `book_categories`
--
ALTER TABLE `book_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book_issues`
--
ALTER TABLE `book_issues`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book_masters`
--
ALTER TABLE `book_masters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book_requests`
--
ALTER TABLE `book_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book_statuses`
--
ALTER TABLE `book_statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `certificate_histories`
--
ALTER TABLE `certificate_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `certificate_templates`
--
ALTER TABLE `certificate_templates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `course_completion_certificates`
--
ALTER TABLE `course_completion_certificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `eating_times`
--
ALTER TABLE `eating_times`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `email_settings`
--
ALTER TABLE `email_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_mark_ledgers`
--
ALTER TABLE `exam_mark_ledgers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_schedules`
--
ALTER TABLE `exam_schedules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faculty_semester`
--
ALTER TABLE `faculty_semester`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fee_collections`
--
ALTER TABLE `fee_collections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fee_heads`
--
ALTER TABLE `fee_heads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fee_masters`
--
ALTER TABLE `fee_masters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food_categories`
--
ALTER TABLE `food_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food_items`
--
ALTER TABLE `food_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food_item_food_schedule`
--
ALTER TABLE `food_item_food_schedule`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food_schedules`
--
ALTER TABLE `food_schedules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `grading_scales`
--
ALTER TABLE `grading_scales`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `grading_types`
--
ALTER TABLE `grading_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `guardian_details`
--
ALTER TABLE `guardian_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hostels`
--
ALTER TABLE `hostels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hostel_meals`
--
ALTER TABLE `hostel_meals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `library_circulations`
--
ALTER TABLE `library_circulations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `library_members`
--
ALTER TABLE `library_members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `months`
--
ALTER TABLE `months`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parent_details`
--
ALTER TABLE `parent_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment_settings`
--
ALTER TABLE `payment_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payroll_heads`
--
ALTER TABLE `payroll_heads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payroll_masters`
--
ALTER TABLE `payroll_masters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=532;

--
-- AUTO_INCREMENT for table `residents`
--
ALTER TABLE `residents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resident_histories`
--
ALTER TABLE `resident_histories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room_types`
--
ALTER TABLE `room_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `route_vehicles`
--
ALTER TABLE `route_vehicles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salary_pays`
--
ALTER TABLE `salary_pays`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `semester_subject`
--
ALTER TABLE `semester_subject`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sms_emails`
--
ALTER TABLE `sms_emails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sms_settings`
--
ALTER TABLE `sms_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staff_designations`
--
ALTER TABLE `staff_designations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_batches`
--
ALTER TABLE `student_batches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_guardians`
--
ALTER TABLE `student_guardians`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_statuses`
--
ALTER TABLE `student_statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subject_attendances`
--
ALTER TABLE `subject_attendances`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `time_zones`
--
ALTER TABLE `time_zones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=468;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction_heads`
--
ALTER TABLE `transaction_heads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transfer_certificates`
--
ALTER TABLE `transfer_certificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transport_histories`
--
ALTER TABLE `transport_histories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transport_users`
--
ALTER TABLE `transport_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicle_staffs`
--
ALTER TABLE `vehicle_staffs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `years`
--
ALTER TABLE `years`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `academic_infos`
--
ALTER TABLE `academic_infos`
  ADD CONSTRAINT `academic_infos_students_id_foreign` FOREIGN KEY (`students_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `addressinfos`
--
ALTER TABLE `addressinfos`
  ADD CONSTRAINT `addressinfos_students_id_foreign` FOREIGN KEY (`students_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `assignments`
--
ALTER TABLE `assignments`
  ADD CONSTRAINT `assignments_semesters_id_foreign` FOREIGN KEY (`semesters_id`) REFERENCES `semesters` (`id`),
  ADD CONSTRAINT `assignments_subjects_id_foreign` FOREIGN KEY (`subjects_id`) REFERENCES `subjects` (`id`),
  ADD CONSTRAINT `assignments_years_id_foreign` FOREIGN KEY (`years_id`) REFERENCES `years` (`id`);

--
-- Constraints for table `assignment_answers`
--
ALTER TABLE `assignment_answers`
  ADD CONSTRAINT `assignment_answers_assignments_id_foreign` FOREIGN KEY (`assignments_id`) REFERENCES `assignments` (`id`),
  ADD CONSTRAINT `assignment_answers_students_id_foreign` FOREIGN KEY (`students_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `attendances`
--
ALTER TABLE `attendances`
  ADD CONSTRAINT `attendances_months_id_foreign` FOREIGN KEY (`months_id`) REFERENCES `months` (`id`),
  ADD CONSTRAINT `attendances_years_id_foreign` FOREIGN KEY (`years_id`) REFERENCES `years` (`id`);

--
-- Constraints for table `attendance_certificates`
--
ALTER TABLE `attendance_certificates`
  ADD CONSTRAINT `attendance_certificates_students_id_foreign` FOREIGN KEY (`students_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `attendance_masters`
--
ALTER TABLE `attendance_masters`
  ADD CONSTRAINT `attendance_masters_month_foreign` FOREIGN KEY (`month`) REFERENCES `months` (`id`),
  ADD CONSTRAINT `attendance_masters_year_foreign` FOREIGN KEY (`year`) REFERENCES `years` (`id`);

--
-- Constraints for table `bank_transactions`
--
ALTER TABLE `bank_transactions`
  ADD CONSTRAINT `bank_transactions_banks_id_foreign` FOREIGN KEY (`banks_id`) REFERENCES `banks` (`id`);

--
-- Constraints for table `beds`
--
ALTER TABLE `beds`
  ADD CONSTRAINT `beds_bed_status_foreign` FOREIGN KEY (`bed_status`) REFERENCES `bed_statuses` (`id`),
  ADD CONSTRAINT `beds_hostels_id_foreign` FOREIGN KEY (`hostels_id`) REFERENCES `hostels` (`id`),
  ADD CONSTRAINT `beds_rooms_id_foreign` FOREIGN KEY (`rooms_id`) REFERENCES `rooms` (`id`);

--
-- Constraints for table `bonafide_certificates`
--
ALTER TABLE `bonafide_certificates`
  ADD CONSTRAINT `bonafide_certificates_students_id_foreign` FOREIGN KEY (`students_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_book_masters_id_foreign` FOREIGN KEY (`book_masters_id`) REFERENCES `book_masters` (`id`),
  ADD CONSTRAINT `books_book_status_foreign` FOREIGN KEY (`book_status`) REFERENCES `book_statuses` (`id`);

--
-- Constraints for table `book_issues`
--
ALTER TABLE `book_issues`
  ADD CONSTRAINT `book_issues_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`);

--
-- Constraints for table `book_masters`
--
ALTER TABLE `book_masters`
  ADD CONSTRAINT `book_masters_categories_foreign` FOREIGN KEY (`categories`) REFERENCES `book_categories` (`id`);

--
-- Constraints for table `certificate_histories`
--
ALTER TABLE `certificate_histories`
  ADD CONSTRAINT `certificate_histories_students_id_foreign` FOREIGN KEY (`students_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `course_completion_certificates`
--
ALTER TABLE `course_completion_certificates`
  ADD CONSTRAINT `course_completion_certificates_students_id_foreign` FOREIGN KEY (`students_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `exam_mark_ledgers`
--
ALTER TABLE `exam_mark_ledgers`
  ADD CONSTRAINT `exam_mark_ledgers_students_id_foreign` FOREIGN KEY (`students_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `exam_schedules`
--
ALTER TABLE `exam_schedules`
  ADD CONSTRAINT `exam_schedules_exams_id_foreign` FOREIGN KEY (`exams_id`) REFERENCES `exams` (`id`),
  ADD CONSTRAINT `exam_schedules_faculty_id_foreign` FOREIGN KEY (`faculty_id`) REFERENCES `faculties` (`id`),
  ADD CONSTRAINT `exam_schedules_months_id_foreign` FOREIGN KEY (`months_id`) REFERENCES `months` (`id`),
  ADD CONSTRAINT `exam_schedules_semesters_id_foreign` FOREIGN KEY (`semesters_id`) REFERENCES `semesters` (`id`),
  ADD CONSTRAINT `exam_schedules_subjects_id_foreign` FOREIGN KEY (`subjects_id`) REFERENCES `subjects` (`id`),
  ADD CONSTRAINT `exam_schedules_years_id_foreign` FOREIGN KEY (`years_id`) REFERENCES `years` (`id`);

--
-- Constraints for table `faculty_semester`
--
ALTER TABLE `faculty_semester`
  ADD CONSTRAINT `faculty_semester_faculty_id_foreign` FOREIGN KEY (`faculty_id`) REFERENCES `faculties` (`id`),
  ADD CONSTRAINT `faculty_semester_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`id`);

--
-- Constraints for table `fee_collections`
--
ALTER TABLE `fee_collections`
  ADD CONSTRAINT `fee_collections_fee_masters_id_foreign` FOREIGN KEY (`fee_masters_id`) REFERENCES `fee_masters` (`id`),
  ADD CONSTRAINT `fee_collections_students_id_foreign` FOREIGN KEY (`students_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `fee_masters`
--
ALTER TABLE `fee_masters`
  ADD CONSTRAINT `fee_masters_students_id_foreign` FOREIGN KEY (`students_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD CONSTRAINT `general_settings_time_zones_id_foreign` FOREIGN KEY (`time_zones_id`) REFERENCES `time_zones` (`id`);

--
-- Constraints for table `grading_scales`
--
ALTER TABLE `grading_scales`
  ADD CONSTRAINT `grading_scales_gradingtype_id_foreign` FOREIGN KEY (`gradingType_id`) REFERENCES `grading_types` (`id`);

--
-- Constraints for table `parent_details`
--
ALTER TABLE `parent_details`
  ADD CONSTRAINT `parent_details_students_id_foreign` FOREIGN KEY (`students_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `payroll_masters`
--
ALTER TABLE `payroll_masters`
  ADD CONSTRAINT `payroll_masters_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`);

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `residents`
--
ALTER TABLE `residents`
  ADD CONSTRAINT `residents_beds_id_foreign` FOREIGN KEY (`beds_id`) REFERENCES `beds` (`id`),
  ADD CONSTRAINT `residents_hostels_id_foreign` FOREIGN KEY (`hostels_id`) REFERENCES `hostels` (`id`),
  ADD CONSTRAINT `residents_rooms_id_foreign` FOREIGN KEY (`rooms_id`) REFERENCES `rooms` (`id`);

--
-- Constraints for table `resident_histories`
--
ALTER TABLE `resident_histories`
  ADD CONSTRAINT `resident_histories_beds_id_foreign` FOREIGN KEY (`beds_id`) REFERENCES `beds` (`id`),
  ADD CONSTRAINT `resident_histories_hostels_id_foreign` FOREIGN KEY (`hostels_id`) REFERENCES `hostels` (`id`),
  ADD CONSTRAINT `resident_histories_residents_id_foreign` FOREIGN KEY (`residents_id`) REFERENCES `residents` (`id`),
  ADD CONSTRAINT `resident_histories_rooms_id_foreign` FOREIGN KEY (`rooms_id`) REFERENCES `rooms` (`id`),
  ADD CONSTRAINT `resident_histories_years_id_foreign` FOREIGN KEY (`years_id`) REFERENCES `years` (`id`);

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_hostels_id_foreign` FOREIGN KEY (`hostels_id`) REFERENCES `hostels` (`id`),
  ADD CONSTRAINT `rooms_room_type_foreign` FOREIGN KEY (`room_type`) REFERENCES `room_types` (`id`);

--
-- Constraints for table `salary_pays`
--
ALTER TABLE `salary_pays`
  ADD CONSTRAINT `salary_pays_salary_masters_id_foreign` FOREIGN KEY (`salary_masters_id`) REFERENCES `payroll_masters` (`id`),
  ADD CONSTRAINT `salary_pays_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`);

--
-- Constraints for table `semester_subject`
--
ALTER TABLE `semester_subject`
  ADD CONSTRAINT `semester_subject_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`id`),
  ADD CONSTRAINT `semester_subject_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_designation_foreign` FOREIGN KEY (`designation`) REFERENCES `staff_designations` (`id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_academic_status_foreign` FOREIGN KEY (`academic_status`) REFERENCES `student_statuses` (`id`),
  ADD CONSTRAINT `students_batch_foreign` FOREIGN KEY (`batch`) REFERENCES `student_batches` (`id`),
  ADD CONSTRAINT `students_faculty_foreign` FOREIGN KEY (`faculty`) REFERENCES `faculties` (`id`),
  ADD CONSTRAINT `students_semester_foreign` FOREIGN KEY (`semester`) REFERENCES `semesters` (`id`);

--
-- Constraints for table `student_guardians`
--
ALTER TABLE `student_guardians`
  ADD CONSTRAINT `student_guardians_guardians_id_foreign` FOREIGN KEY (`guardians_id`) REFERENCES `guardian_details` (`id`),
  ADD CONSTRAINT `student_guardians_students_id_foreign` FOREIGN KEY (`students_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `subject_attendances`
--
ALTER TABLE `subject_attendances`
  ADD CONSTRAINT `subject_attendances_months_id_foreign` FOREIGN KEY (`months_id`) REFERENCES `months` (`id`),
  ADD CONSTRAINT `subject_attendances_subjects_id_foreign` FOREIGN KEY (`subjects_id`) REFERENCES `subjects` (`id`),
  ADD CONSTRAINT `subject_attendances_years_id_foreign` FOREIGN KEY (`years_id`) REFERENCES `years` (`id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_tr_head_id_foreign` FOREIGN KEY (`tr_head_id`) REFERENCES `transaction_heads` (`id`);

--
-- Constraints for table `transfer_certificates`
--
ALTER TABLE `transfer_certificates`
  ADD CONSTRAINT `transfer_certificates_students_id_foreign` FOREIGN KEY (`students_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `transport_histories`
--
ALTER TABLE `transport_histories`
  ADD CONSTRAINT `transport_histories_travellers_id_foreign` FOREIGN KEY (`travellers_id`) REFERENCES `transport_users` (`id`);

--
-- Constraints for table `transport_users`
--
ALTER TABLE `transport_users`
  ADD CONSTRAINT `transport_users_routes_id_foreign` FOREIGN KEY (`routes_id`) REFERENCES `routes` (`id`),
  ADD CONSTRAINT `transport_users_vehicles_id_foreign` FOREIGN KEY (`vehicles_id`) REFERENCES `vehicles` (`id`);

--
-- Constraints for table `vehicle_staffs`
--
ALTER TABLE `vehicle_staffs`
  ADD CONSTRAINT `vehicle_staffs_staffs_id_foreign` FOREIGN KEY (`staffs_id`) REFERENCES `staff` (`id`),
  ADD CONSTRAINT `vehicle_staffs_vehicles_id_foreign` FOREIGN KEY (`vehicles_id`) REFERENCES `vehicles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
