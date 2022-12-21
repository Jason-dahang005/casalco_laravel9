-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2022 at 04:06 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `casalco_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `beneficiaries`
--

CREATE TABLE `beneficiaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `membership_application_id` bigint(20) UNSIGNED NOT NULL,
  `benName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `benRelation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `benAge` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `benAddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beneficiaries`
--

INSERT INTO `beneficiaries` (`id`, `membership_application_id`, `benName`, `benRelation`, `benAge`, `benAddress`, `created_at`, `updated_at`) VALUES
(1, 1, 'jess dapat dahang', 'brother', '21', 'zone 2, bonbon, cdo', '2022-12-01 14:23:03', '2022-12-01 14:23:03'),
(2, 3, 'jason dahang', 'complicated i think', '26', '680 baconga st', '2022-12-13 16:31:52', '2022-12-13 16:31:52'),
(3, 4, 'sm begy', 'friends lang', '25', 'home', '2022-12-13 16:37:58', '2022-12-13 16:37:58');

-- --------------------------------------------------------

--
-- Table structure for table `express_lad_loan_details`
--

CREATE TABLE `express_lad_loan_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `loan_applications_id` bigint(20) UNSIGNED NOT NULL,
  `product_loan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employer_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount_applied` int(11) NOT NULL,
  `term_applied` int(11) NOT NULL,
  `mode_of_payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_account` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scanned_signature` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `express_lad_loan_details`
--

INSERT INTO `express_lad_loan_details` (`id`, `loan_applications_id`, `product_loan`, `employer`, `employer_address`, `amount_applied`, `term_applied`, `mode_of_payment`, `facebook_account`, `scanned_signature`, `created_at`, `updated_at`) VALUES
(1, 1, 'lad', 'ako si jason', 'AKO SI JASON', 10000000, 5, 'monthly', 'asdasdasdasdas', '1671111265.png', '2022-12-15 05:34:25', '2022-12-15 05:34:25'),
(2, 2, 'lad', 'asdasdasdasdsad', 'asdasdasdasdasd', 1234567890, 1, 'monthly', 'asdasdasdasdasdasdasdasds', '1671174679.jpg', '2022-12-15 23:11:19', '2022-12-15 23:11:19');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loan_applications`
--

CREATE TABLE `loan_applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `loan_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loan_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loan_applications`
--

INSERT INTO `loan_applications` (`id`, `users_id`, `loan_type`, `loan_status`, `created_at`, `updated_at`) VALUES
(1, 11, 'lad', 5, '2022-12-15 05:34:25', '2022-12-18 19:41:42'),
(2, 11, 'lad', 0, '2022-12-15 23:11:19', '2022-12-18 03:41:07'),
(3, 11, 'regular', 0, '2022-12-18 02:56:47', '2022-12-18 03:54:57');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `membership_applications_id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `membership_applications_id`, `users_id`, `created_at`, `updated_at`) VALUES
(1, 1, 11, '2022-12-13 16:26:18', '2022-12-13 16:26:18'),
(2, 2, 12, '2022-12-13 16:53:11', '2022-12-13 16:53:11');

-- --------------------------------------------------------

--
-- Table structure for table `membership_applications`
--

CREATE TABLE `membership_applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suffix` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `Bplace` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Occu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `educ` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MI` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `civilStatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TIN` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SSSnum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Dependents` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acc_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `or_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mothers_maiden_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selfie_pic` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empIDpic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_approved` int(11) NOT NULL DEFAULT 0,
  `membership_type` tinyint(1) NOT NULL COMMENT '0 = online, 1 = walk-in',
  `assigned_officer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `membership_applications`
--

INSERT INTO `membership_applications` (`id`, `first_name`, `middle_name`, `last_name`, `suffix`, `gender`, `dob`, `Bplace`, `address`, `unit`, `Occu`, `educ`, `MI`, `civilStatus`, `religion`, `contact_number`, `TIN`, `SSSnum`, `email`, `Dependents`, `acc_id`, `or_no`, `mothers_maiden_name`, `selfie_pic`, `empIDpic`, `is_approved`, `membership_type`, `assigned_officer`, `created_at`, `updated_at`) VALUES
(1, 'jason', 'dapat', 'dahang', NULL, 'Male', '1996-01-18', 'cagayan de oro city', 'zone 2, bonbon, cdo', 'CU(main)', 'IT instructor', 'College Graduate', '15000', 'Single', 'ifi', '09356554875', '12312313123', '123123123123', 'j@j.com', '0', '123456', '123456789', 'salima laos dapat', '/storage/image/1669933383download.jpg', '/storage/image/1669933383SSS-UMID.png', 2, 0, 'admin', '2022-12-01 14:23:03', '2022-12-01 14:24:48'),
(2, 'Jonas', 'magbaril', 'balate', NULL, 'Male', '1997-07-29', 'cagayan de oro city', 'impala, camaman-an, cdoc', 'Associate', 'unemployed', 'Undergraduate', '13000', 'Single', 'roman catholic', '09359824373', '4444444', '5555555', 'magbariljonas@gmail.com', '0', '654321', '123213', 'nilda dumam-ag magbaril', '/storage/image/1669961477loan_img5.jpg', '/storage/image/1669961477loan_img5.jpg', 2, 0, 'admin', '2022-12-01 22:11:17', '2022-12-01 22:13:29'),
(3, 'Yousef', 'abad', 'abouelseoud', NULL, 'Male', '2000-12-06', 'lapasan', '680 baconga st', 'CU(main)', 'teacher', 'Doctor\'s', '9999999999', 'Widowed', 'na', '09269295028', '124343', '1231241234', 'picturenow@hotmail.com', '0', NULL, NULL, 'rosalinda', '/storage/image/1670977912383605f4a61459cd08c1de3efcd7f859.png', '/storage/image/1670977912307218287_1740333336329881_2258162181039862794_n.jpg', 0, 0, NULL, '2022-12-13 16:31:52', '2022-12-13 16:45:42'),
(4, 'Fayed', 'uhhhh', 'mauyag', NULL, 'Male', '1956-12-12', 'earth', 'someplace', 'CU(main)', 'chef', 'College Graduate', '13000', 'Single', 'muslim', '09378592758', '124343', '1231241234', 'faemauyag13@gmail.com', '0', NULL, NULL, 'mommy', '/storage/image/1670978278307218287_1740333336329881_2258162181039862794_n.jpg', '/storage/image/1670978278383605f4a61459cd08c1de3efcd7f859.png', 0, 0, NULL, '2022-12-13 16:37:58', '2022-12-13 16:45:34');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(19, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(20, '2022_09_14_084307_create_membership_applications_table', 2),
(21, '2022_09_18_140258_create_spouses_table', 2),
(22, '2022_09_18_140357_create_beneficiaries_table', 2),
(66, '2022_09_24_184431_create_members_table', 3),
(73, '2022_10_06_142957_create_loan_applications_table', 4),
(74, '2022_11_29_180139_create_regular_special_loan_details_table', 4),
(75, '2022_11_29_180226_create_express_lad_loan_details_table', 4),
(76, '2022_12_01_220356_create_monthly_incomes_table', 4),
(77, '2022_12_01_220840_create_monthly_expenses_table', 4),
(78, '2022_12_10_115942_create_products_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `monthly_expenses`
--

CREATE TABLE `monthly_expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `regular_special_loan_details_id` bigint(20) UNSIGNED NOT NULL,
  `scanned_signature` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `food` int(11) NOT NULL,
  `education_bill` int(11) NOT NULL,
  `electric_bill` int(11) NOT NULL,
  `water_bill` int(11) NOT NULL,
  `transportation` int(11) NOT NULL,
  `allowances` int(11) NOT NULL,
  `others` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `monthly_expenses`
--

INSERT INTO `monthly_expenses` (`id`, `regular_special_loan_details_id`, `scanned_signature`, `food`, `education_bill`, `electric_bill`, `water_bill`, `transportation`, `allowances`, `others`, `created_at`, `updated_at`) VALUES
(1, 1, '1671361007.png', 1000000, 1000000, 1000000, 1000000, 1000000, 1000000, 1000000, '2022-12-18 02:56:47', '2022-12-18 02:56:47');

-- --------------------------------------------------------

--
-- Table structure for table `monthly_incomes`
--

CREATE TABLE `monthly_incomes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `regular_special_loan_details_id` bigint(20) UNSIGNED NOT NULL,
  `product_loan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `borrower_income` int(11) NOT NULL,
  `other_income` int(11) NOT NULL,
  `spouse_income` int(11) NOT NULL,
  `amount_applied` int(11) NOT NULL,
  `term_applied` int(11) NOT NULL,
  `mode_of_payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `monthly_incomes`
--

INSERT INTO `monthly_incomes` (`id`, `regular_special_loan_details_id`, `product_loan`, `borrower_income`, `other_income`, `spouse_income`, `amount_applied`, `term_applied`, `mode_of_payment`, `created_at`, `updated_at`) VALUES
(1, 1, 'provident loan', 1000000, 1000000, 1000000, 1000000, 4, 'monthly', '2022-12-18 02:56:47', '2022-12-18 02:56:47');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `loan_type` int(11) NOT NULL,
  `product_loan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_amount` int(11) NOT NULL,
  `min_amount` int(11) NOT NULL,
  `max_term` int(11) NOT NULL,
  `min_term` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `regular_special_loan_details`
--

CREATE TABLE `regular_special_loan_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `loan_applications_id` bigint(20) UNSIGNED NOT NULL,
  `length_of_service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regular_special_loan_details`
--

INSERT INTO `regular_special_loan_details` (`id`, `loan_applications_id`, `length_of_service`, `employment_status`, `present_position`, `created_at`, `updated_at`) VALUES
(1, 3, '3', 'asdasdsad', 'asdasdasdasd', '2022-12-18 02:56:47', '2022-12-18 02:56:47');

-- --------------------------------------------------------

--
-- Table structure for table `spouses`
--

CREATE TABLE `spouses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `membership_application_id` bigint(20) UNSIGNED NOT NULL,
  `spouseFname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spouseAge` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spouseOcc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spouseMI` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spouseEmplrName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spouseConNum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spouse_mother` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` int(11) NOT NULL DEFAULT 0 COMMENT '0 = client 1 = admin 2 = officer',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `user_type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2a$12$m9gSPVCEFm8O.BFfzlQ33.YysCrGHqbhZIB2IVGaAXY6F6sDdeoaK', 1, NULL, NULL, NULL),
(2, 'officer', 'officer@officer.com', NULL, '$2a$12$m9gSPVCEFm8O.BFfzlQ33.YysCrGHqbhZIB2IVGaAXY6F6sDdeoaK', 2, NULL, NULL, NULL),
(11, 'jason', 'jason@dahang.com', NULL, '$2y$10$wwtW76qJIItMc0l6ZdJEYeA4c1e9nfC2W913nu.zySaIf/SEnAdxe', 0, NULL, '2022-12-13 16:26:18', '2022-12-13 16:26:18'),
(12, 'jonas', 'jonas@balate.com', NULL, '$2y$10$/CIQZ2L.cVlGefGPsrJgcOhgdEK8qdvqVMDtbDQTb2YWlVnEGMUSm', 0, NULL, '2022-12-13 16:53:11', '2022-12-13 16:53:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beneficiaries`
--
ALTER TABLE `beneficiaries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `beneficiaries_membership_application_id_foreign` (`membership_application_id`);

--
-- Indexes for table `express_lad_loan_details`
--
ALTER TABLE `express_lad_loan_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `express_lad_loan_details_loan_applications_id_foreign` (`loan_applications_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `loan_applications`
--
ALTER TABLE `loan_applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loan_applications_users_id_foreign` (`users_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `members_membership_applications_id_foreign` (`membership_applications_id`),
  ADD KEY `members_users_id_foreign` (`users_id`);

--
-- Indexes for table `membership_applications`
--
ALTER TABLE `membership_applications`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `membership_applications_acc_id_unique` (`acc_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monthly_expenses`
--
ALTER TABLE `monthly_expenses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `monthly_expenses_regular_special_loan_details_id_foreign` (`regular_special_loan_details_id`);

--
-- Indexes for table `monthly_incomes`
--
ALTER TABLE `monthly_incomes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `monthly_incomes_regular_special_loan_details_id_foreign` (`regular_special_loan_details_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regular_special_loan_details`
--
ALTER TABLE `regular_special_loan_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `regular_special_loan_details_loan_applications_id_foreign` (`loan_applications_id`);

--
-- Indexes for table `spouses`
--
ALTER TABLE `spouses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `spouses_membership_application_id_foreign` (`membership_application_id`);

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
-- AUTO_INCREMENT for table `beneficiaries`
--
ALTER TABLE `beneficiaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `express_lad_loan_details`
--
ALTER TABLE `express_lad_loan_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loan_applications`
--
ALTER TABLE `loan_applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `membership_applications`
--
ALTER TABLE `membership_applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `monthly_expenses`
--
ALTER TABLE `monthly_expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `monthly_incomes`
--
ALTER TABLE `monthly_incomes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `regular_special_loan_details`
--
ALTER TABLE `regular_special_loan_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `spouses`
--
ALTER TABLE `spouses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `beneficiaries`
--
ALTER TABLE `beneficiaries`
  ADD CONSTRAINT `beneficiaries_membership_application_id_foreign` FOREIGN KEY (`membership_application_id`) REFERENCES `membership_applications` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `express_lad_loan_details`
--
ALTER TABLE `express_lad_loan_details`
  ADD CONSTRAINT `express_lad_loan_details_loan_applications_id_foreign` FOREIGN KEY (`loan_applications_id`) REFERENCES `loan_applications` (`id`);

--
-- Constraints for table `loan_applications`
--
ALTER TABLE `loan_applications`
  ADD CONSTRAINT `loan_applications_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_membership_applications_id_foreign` FOREIGN KEY (`membership_applications_id`) REFERENCES `membership_applications` (`id`),
  ADD CONSTRAINT `members_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `monthly_expenses`
--
ALTER TABLE `monthly_expenses`
  ADD CONSTRAINT `monthly_expenses_regular_special_loan_details_id_foreign` FOREIGN KEY (`regular_special_loan_details_id`) REFERENCES `regular_special_loan_details` (`id`);

--
-- Constraints for table `monthly_incomes`
--
ALTER TABLE `monthly_incomes`
  ADD CONSTRAINT `monthly_incomes_regular_special_loan_details_id_foreign` FOREIGN KEY (`regular_special_loan_details_id`) REFERENCES `regular_special_loan_details` (`id`);

--
-- Constraints for table `regular_special_loan_details`
--
ALTER TABLE `regular_special_loan_details`
  ADD CONSTRAINT `regular_special_loan_details_loan_applications_id_foreign` FOREIGN KEY (`loan_applications_id`) REFERENCES `loan_applications` (`id`);

--
-- Constraints for table `spouses`
--
ALTER TABLE `spouses`
  ADD CONSTRAINT `spouses_membership_application_id_foreign` FOREIGN KEY (`membership_application_id`) REFERENCES `membership_applications` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
