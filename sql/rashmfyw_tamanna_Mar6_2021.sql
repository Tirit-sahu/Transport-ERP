-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 06, 2021 at 08:40 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rashmfyw_tamanna`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_settings`
--

CREATE TABLE `account_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `opening_bal` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_settings`
--

INSERT INTO `account_settings` (`id`, `opening_bal`, `created_at`, `updated_at`) VALUES
(2, 30000.00, '2021-01-04 07:33:50', NULL),
(3, 400000.00, '2021-01-06 12:18:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ac_holder_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `holder_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_branch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_ac` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_IFSC` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `ipaddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createdby` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `battery_opening_balances`
--

CREATE TABLE `battery_opening_balances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `truck_number` int(11) DEFAULT NULL,
  `batteryName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `batterySerialNo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `batteryImage1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `batteryImage2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_owner_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_head_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_mobile2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head_office_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_pan_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_gst_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_id` bigint(20) UNSIGNED DEFAULT NULL,
  `company_Loading_prefix` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ipaddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createdby` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_logo`, `company_owner_name`, `company_name`, `company_head_name`, `company_phone`, `company_mobile`, `company_mobile2`, `head_office_address`, `company_address`, `company_pan_card`, `company_gst_no`, `state_id`, `company_Loading_prefix`, `ipaddress`, `createdby`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Atul Bagga', 'Tamanna Road Carriers', 'Atul Bagga', '7714907890', '8889155555', '8889155555', NULL, 'Office No. 116, 4th Floor, Pithaliya Plaza, Raipur', 'AAKFT6788N', '22AAKFT6788N2ZA', 2, NULL, '122.175.217.115', 1, '1', '2020-10-26 09:59:54', '2020-10-26 10:49:30');

-- --------------------------------------------------------

--
-- Table structure for table `consignees`
--

CREATE TABLE `consignees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `consignee_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `consignee_mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consignee_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consignee_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consignee_gst_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `consignees`
--

INSERT INTO `consignees` (`id`, `consignee_name`, `place_id`, `state_id`, `consignee_mobile`, `consignee_email`, `consignee_address`, `consignee_gst_no`, `document`, `type`, `status`, `created_at`, `updated_at`) VALUES
(2, 'FCI', 4, 2, NULL, NULL, 'Gumla', NULL, NULL, '0', 1, '2020-11-02 11:37:01', '2020-11-02 11:37:01'),
(3, 'APEX', 9, 2, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-01-07 11:22:10', '2021-01-07 11:22:10');

-- --------------------------------------------------------

--
-- Table structure for table `consignors`
--

CREATE TABLE `consignors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `consignor_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL DEFAULT 0,
  `consignor_mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consignor_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consignor_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consignor_gst_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_commission` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '1=enable, 0=disable',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `consignors`
--

INSERT INTO `consignors` (`id`, `consignor_name`, `place_id`, `state_id`, `consignor_mobile`, `consignor_email`, `consignor_address`, `consignor_gst_no`, `company_commission`, `document`, `status`, `created_at`, `updated_at`) VALUES
(1, 'FCI', 1, 2, '9303232961', 'fci@gmail.com', 'raipur', '12341234', '10', 'seeder.png', 1, '2020-11-17 00:37:50', '2020-12-09 01:53:37'),
(4, 'APEX', 9, 2, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-01-07 08:32:23', '2021-01-07 08:32:23');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard_pin_sets`
--

CREATE TABLE `dashboard_pin_sets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dashboard_pin_sets`
--

INSERT INTO `dashboard_pin_sets` (`id`, `menu`, `image`, `password`, `route`, `created_at`, `updated_at`) VALUES
(1, 'Loading Process', 'loading.png', '123456', 'admin/loading', NULL, NULL),
(2, 'Rack Handling', 'forklift.png', '123456', 'rackHandling', NULL, NULL),
(3, 'Driver Mapping', 'drivermap.png', '123456', 'driverMapping', NULL, NULL),
(4, 'Truck Service', 'tire.png', '123456', 'truckService', NULL, NULL),
(5, 'Truck Other Expenses', 'expenses.png', '123456', 'TruckOtherExpense', NULL, NULL),
(6, 'Tyre Entry', 'wheel.png', '123456', 'tyre-opening-record', NULL, NULL),
(7, 'Battery Entry', 'b1.png', '123456', 'battery-opening-balance-create', NULL, NULL),
(8, 'Purchase Entry', 'budget.png', '123456', 'purchase-entry-create', NULL, NULL),
(9, 'Item Issue', 'note.png', '123456', 'itemIssue', NULL, NULL),
(10, 'Account Setting', 'settings.png', '123456', 'openingBal', NULL, NULL),
(11, 'Generate Salary', 'calendar.png', '123456', 'generateSalary', NULL, NULL),
(12, 'Truck Document', 'truckDocument.jpeg', '123456', 'admin/maintain/truckdocs/create', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employeeName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DOJ` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ESIC` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PAN` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lisenceNo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lisenceIssueDate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lisenceExpireDate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `companyName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DOB` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicalExpireDate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Salary` double(8,2) DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uploadDriverLisence` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `employeeName`, `designation`, `DOJ`, `mobile`, `ESIC`, `PAN`, `lisenceNo`, `lisenceIssueDate`, `lisenceExpireDate`, `companyName`, `DOB`, `medicalExpireDate`, `Salary`, `address`, `uploadDriverLisence`, `status`, `_token`, `created_at`, `updated_at`) VALUES
(1, 'Tirit sahu', 'Driver', '30-12-2020', '9303232961', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '20201230070059.png', 'Enable', 'B2YEvTkdhcZ8Cl4jTc7YmJ5Qpw9SmyQWa8FKONMA', NULL, NULL),
(2, 'Tarachand', 'Conductor', '01-01-1970', NULL, NULL, NULL, NULL, '01-01-1970', '01-01-1970', NULL, '01-01-1970', '01-01-1970', NULL, NULL, '20201230071805.png', 'Enable', 'B2YEvTkdhcZ8Cl4jTc7YmJ5Qpw9SmyQWa8FKONMA', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `driver_mappings`
--

CREATE TABLE `driver_mappings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vehicle` int(11) DEFAULT NULL,
  `driver` int(11) DEFAULT NULL,
  `leaveDateD` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `helper` int(11) DEFAULT NULL,
  `leaveDateH` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fromeDate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `driver_mappings`
--

INSERT INTO `driver_mappings` (`id`, `vehicle`, `driver`, `leaveDateD`, `helper`, `leaveDateH`, `fromeDate`, `_token`, `created_at`, `updated_at`) VALUES
(2, 8, 1, NULL, 2, NULL, '29-12-2020', 'PBNn4TGcLlvHb1SmlYavknQkov5euXP3gkgRoOuf', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doj` date DEFAULT NULL,
  `pan_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lisence_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lisence_date` date DEFAULT NULL,
  `lisence_date_exp` date DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` double(8,2) NOT NULL DEFAULT 0.00,
  `bank_ac_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `generate_salaries`
--

CREATE TABLE `generate_salaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `driver` int(11) DEFAULT NULL,
  `vehicle` int(11) DEFAULT NULL,
  `AMT` double(8,2) DEFAULT NULL,
  `paymentMode` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paymentDate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `generate_salaries`
--

INSERT INTO `generate_salaries` (`id`, `driver`, `vehicle`, `AMT`, `paymentMode`, `paymentDate`, `remark`, `_token`, `created_at`, `updated_at`) VALUES
(2, 1, 6, 700000.00, 'A/C Transfer', '06-01-2021', NULL, 'nYhP2GBzBbxjaRCFe8PZnf5sSEKv1EUODLevlvQW', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `godowns`
--

CREATE TABLE `godowns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `godown_incharge` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `incharge_mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `godowns`
--

INSERT INTO `godowns` (`id`, `name`, `city`, `godown_incharge`, `incharge_mobile`, `created_at`, `updated_at`) VALUES
(1, 't godown', 'raipur', 'tara', '8978789789', NULL, NULL),
(2, 'ub port', 'raipur', 'tirit', '9876543211', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `head_masters`
--

CREATE TABLE `head_masters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `headName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headType` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `head_masters`
--

INSERT INTO `head_masters` (`id`, `headName`, `headType`, `status`, `_token`, `created_at`, `updated_at`) VALUES
(1, 'Software Development', 'Debit', 0, 'B2YEvTkdhcZ8Cl4jTc7YmJ5Qpw9SmyQWa8FKONMA', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hemali_payments`
--

CREATE TABLE `hemali_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hemal` int(11) NOT NULL,
  `loading_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(8,2) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hemali_payments`
--

INSERT INTO `hemali_payments` (`id`, `hemal`, `loading_number`, `amount`, `date`, `created_at`, `updated_at`) VALUES
(1, 1, '9', 2000.00, '2020-11-04', NULL, NULL),
(4, 1, '10', 100.00, '2020-11-20', NULL, NULL),
(5, 2, '11', 500.00, '2020-12-02', NULL, NULL),
(6, 1, '9', 300.00, '2020-12-09', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hemals`
--

CREATE TABLE `hemals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tolly_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `head_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hemals`
--

INSERT INTO `hemals` (`id`, `tolly_name`, `head_name`, `created_at`, `updated_at`) VALUES
(1, 'Htolly1', 'kush', '2020-11-17 06:49:16', '2020-11-17 06:49:16'),
(2, 'HTolly2', 'ramesh', '2020-11-17 06:52:39', '2020-11-17 06:52:39'),
(3, 'Tolly 1001', '500', '2020-12-09 03:07:02', '2020-12-09 03:07:02'),
(4, 'None', 'Unkown', '2020-12-09 11:53:56', '2020-12-09 11:53:56'),
(5, 'FCI', 'FCI', '2020-12-09 13:29:18', '2020-12-09 13:29:18'),
(6, 'TOLLY 4', '0', '2021-01-10 13:44:09', '2021-01-10 13:44:09'),
(7, 'TOLLY 4', '0', '2021-01-10 13:44:13', '2021-01-10 13:44:13');

-- --------------------------------------------------------

--
-- Table structure for table `hsn_and_serialnumbers`
--

CREATE TABLE `hsn_and_serialnumbers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `purchase_entry_detail_id` int(11) NOT NULL DEFAULT 0,
  `item` int(11) NOT NULL,
  `serial_number` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0=show tyre mapping time, 1= not show',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hsn_and_serialnumbers`
--

INSERT INTO `hsn_and_serialnumbers` (`id`, `purchase_entry_detail_id`, `item`, `serial_number`, `status`, `created_at`, `updated_at`) VALUES
(3, 2, 7, '7 rice 1', 1, NULL, NULL),
(4, 2, 7, '7 rice 2', 0, NULL, NULL),
(5, 3, 9, '9 mill 1', 0, NULL, NULL),
(6, 3, 9, '9 mill 2 ', 0, NULL, NULL),
(7, 3, 9, '9 mill 3', 0, NULL, NULL),
(8, 4, 8, 'paddy 1 00001', 0, NULL, NULL),
(9, 4, 8, 'paddy 2 00002', 0, NULL, NULL),
(10, 5, 11, 'Bardana 1', 0, NULL, NULL),
(11, 5, 11, 'bardana 2', 0, NULL, NULL),
(12, 8, 7, '1234', 0, NULL, NULL),
(13, 8, 7, '4567', 0, NULL, NULL),
(14, 8, 7, '7890', 0, NULL, NULL),
(15, 8, 7, '0987', 0, NULL, NULL),
(16, 8, 7, '6543', 0, NULL, NULL),
(17, 8, 7, '2123', 0, NULL, NULL),
(18, 8, 7, '4455', 0, NULL, NULL),
(19, 8, 7, '6677', 0, NULL, NULL),
(20, 8, 7, '8899', 0, NULL, NULL),
(21, 8, 7, '0098', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `income_expenses_heads`
--

CREATE TABLE `income_expenses_heads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `head_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `head_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_category` int(11) DEFAULT NULL,
  `item_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_messure` int(11) DEFAULT 0,
  `item_rate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hsncode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `item_category`, `item_name`, `description`, `unit_messure`, `item_rate`, `hsncode`, `status`, `created_at`, `updated_at`) VALUES
(7, 6, 'Rice', '-', 11, '200', '0', 0, '2020-12-09 11:48:49', '2020-12-09 11:48:49'),
(8, 6, 'PADDY', NULL, 11, '450', NULL, 0, '2021-01-07 11:23:48', '2021-01-11 08:07:38'),
(9, 7, 'MILL', NULL, 10, '1200', NULL, 0, '2021-01-10 06:28:09', '2021-01-10 06:28:09'),
(11, 7, 'BARDANA', NULL, 11, '300', NULL, 0, '2021-01-10 06:35:16', '2021-01-10 06:35:16'),
(13, 7, 'MILL PADDY', NULL, 11, '4000', NULL, 0, '2021-01-11 06:00:56', '2021-01-11 06:00:56'),
(14, 7, 'MILL BARDANA', NULL, 11, '500', NULL, 0, '2021-01-11 06:01:19', '2021-01-11 08:08:45'),
(15, 8, 'MRF Tyres', NULL, 1, '20', NULL, 0, '2021-02-19 02:07:31', '2021-02-19 02:07:31'),
(16, 8, 'Apollo', NULL, 1, '15', NULL, 0, '2021-02-19 02:07:51', '2021-02-19 02:07:51'),
(17, 8, 'CEAT', NULL, 1, '30', NULL, 0, '2021-02-19 02:08:13', '2021-02-19 02:08:13'),
(18, 8, 'Michelin', NULL, 1, '25', NULL, 0, '2021-02-19 02:08:29', '2021-02-19 02:08:29'),
(19, 8, 'JK Tyres', NULL, 1, '40', NULL, 0, '2021-02-19 02:08:51', '2021-02-19 02:08:51'),
(20, 8, 'Bridgestone', NULL, 1, '50', NULL, 0, '2021-02-19 02:09:07', '2021-02-19 02:09:07'),
(21, 8, 'Goodyear', NULL, 1, '20', NULL, 0, '2021-02-19 02:09:24', '2021-02-19 02:09:24'),
(22, 8, 'Falken Tyres', NULL, 1, '45', NULL, 0, '2021-02-19 02:09:39', '2021-02-19 02:09:39');

-- --------------------------------------------------------

--
-- Table structure for table `item_categories`
--

CREATE TABLE `item_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_categories`
--

INSERT INTO `item_categories` (`id`, `item_category_name`, `status`, `created_at`, `updated_at`) VALUES
(6, 'Rice', 0, '2020-12-09 11:47:31', '2020-12-09 11:47:31'),
(7, 'PADDY', 0, '2021-01-07 11:22:47', '2021-01-07 11:22:47'),
(8, 'Tyre', 0, '2021-02-19 02:04:53', '2021-02-19 02:04:53');

-- --------------------------------------------------------

--
-- Table structure for table `item_issues`
--

CREATE TABLE `item_issues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vehicle` int(11) DEFAULT NULL,
  `driver` int(11) DEFAULT NULL,
  `issueDate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issueNumber` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meterReading` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `narration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_issues`
--

INSERT INTO `item_issues` (`id`, `vehicle`, `driver`, `issueDate`, `issueNumber`, `meterReading`, `narration`, `_token`, `created_at`, `updated_at`) VALUES
(5, 6, 1, '12-02-2021', 'I2021/0001', '200', 'test', NULL, NULL, NULL),
(6, 6, 1, '17-02-2021', 'I2021/0002', '200', 'test', NULL, NULL, NULL),
(7, 6, 1, '17-02-2021', 'I2021/0002', '200', 'test', NULL, NULL, NULL),
(8, 6, 1, '17-02-2021', 'I2021/0004', '100', 'test', NULL, NULL, NULL),
(12, NULL, NULL, NULL, 'I2021/0006', NULL, NULL, NULL, NULL, NULL),
(13, 6, 1, '17-02-2021', 'I2021/0005', '200', 'test', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `item_issue_details`
--

CREATE TABLE `item_issue_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `godown` int(11) NOT NULL,
  `item` int(11) DEFAULT NULL,
  `unit` int(11) DEFAULT NULL,
  `HSN` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exchangeReceipt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `itemType` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `QTY` int(11) DEFAULT NULL,
  `rate` double(8,2) DEFAULT NULL,
  `AMT` double(8,2) DEFAULT NULL,
  `itemIssueID` int(11) DEFAULT NULL,
  `_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_issue_details`
--

INSERT INTO `item_issue_details` (`id`, `godown`, `item`, `unit`, `HSN`, `exchangeReceipt`, `itemType`, `QTY`, `rate`, `AMT`, `itemIssueID`, `_token`, `created_at`, `updated_at`) VALUES
(14, 1, 7, 1, '1234', 'reprbl', 'new', 10, 200.00, 2000.00, 5, NULL, NULL, NULL),
(15, 1, 9, 1, '20011', 'reprbl', 'new', 12, 200.00, 2400.00, 5, NULL, NULL, NULL),
(16, 1, 7, 1, '1222', 'reprbl', 'old', 12, 100.00, 1200.00, 5, NULL, NULL, NULL),
(17, 1, 7, 11, '1212', 'reprbl', 'old', 2, NULL, NULL, 7, NULL, NULL, NULL),
(18, 1, 9, 10, '1111', 'scrap', 'old', NULL, NULL, NULL, 7, NULL, NULL, NULL),
(19, 1, 7, 11, '132', 'reprbl', 'new', 2, NULL, NULL, 8, NULL, NULL, NULL),
(23, 1, 8, 11, '4532', 'scrap', 'old', 0, NULL, NULL, 12, NULL, NULL, NULL),
(24, 1, 8, 11, '2222', 'scrap', 'new', 5, NULL, NULL, 13, NULL, NULL, NULL),
(25, 1, 11, 11, '4523', 'reprbl', 'new', 4, NULL, NULL, 13, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `loading_entries`
--

CREATE TABLE `loading_entries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `loading_date` date DEFAULT NULL,
  `loading_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vehicle_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_master` int(11) DEFAULT 0,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `freight_rate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commision_rate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consignor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consignee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_plce` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diesel_advance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diesel_advance_ltr` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pentrol_pump` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cash_advance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `ipaddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createdby` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `hemal` int(11) DEFAULT 0,
  `hema_rate` double DEFAULT 0,
  `loading_type` int(11) DEFAULT NULL COMMENT '0=Main Trip, 1=Phad'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loading_entries`
--

INSERT INTO `loading_entries` (`id`, `loading_date`, `loading_no`, `vehicle_no`, `item_master`, `weight`, `bag`, `freight_rate`, `commision_rate`, `consignor`, `from_place`, `consignee`, `to_plce`, `diesel_advance`, `diesel_advance_ltr`, `pentrol_pump`, `cash_advance`, `status`, `ipaddress`, `createdby`, `created_at`, `updated_at`, `hemal`, `hema_rate`, `loading_type`) VALUES
(41, '2020-12-02', '00031', '200', 7, '291.18', '590', '110', '150', '1', '7', '2', '8', '19000', NULL, '8', '4000', '1', '49.36.46.60', 2, '2020-12-11 06:42:16', '2020-12-22 10:34:18', 5, 0, 0),
(42, '2020-12-02', '00001', '136', 7, '247.50', '500', '110', '150', '1', '3', '2', '4', '26000', '0', '3', '0', '1', '122.168.156.107', 6, '2020-12-11 06:43:06', '2021-01-28 07:34:58', 4, 0, 0),
(43, '2020-12-02', '00032', '201', 7, '291.18', '590', '110', '150', '1', '7', '2', '8', '20000', NULL, '8', '6000', '1', '171.49.140.68', 6, '2020-12-11 06:47:06', '2020-12-12 06:14:53', 5, 0, 0),
(44, '2020-12-02', '00033', '133', 7, '245.5', '500', '110', '150', '1', '3', '2', '4', '26000', '0', '3', '0', '1', '122.168.156.107', 6, '2020-12-11 06:49:12', '2021-01-28 07:41:44', 4, 0, 0),
(45, '2020-12-02', '00034', '71', 7, '245.6', '500', '110', '150', '1', '3', '2', '4', '26000', '0', '11', '0', '1', '122.175.164.157', 6, '2020-12-11 07:20:06', '2021-01-27 11:52:20', 4, 0, 0),
(46, '2020-12-02', '00035', '181', 7, '291.88', '590', '110', '150', '1', '3', '2', '4', '26000', '0', '11', '0', '1', '122.175.164.157', 6, '2020-12-11 07:21:54', '2021-01-27 11:51:50', 4, 0, 0),
(47, '2020-12-02', '00036', '202', 7, '244.5', '490', '110', '150', '1', '3', '2', '4', '26000', '0', '3', '0', '1', '122.175.152.77', 6, '2020-12-11 07:23:29', '2021-01-23 13:59:35', 4, 0, 0),
(48, '2020-12-02', '00037', '171', 7, '240.56', '490', '110', '150', '1', '3', '2', '4', '26000', '0', '3', '0', '1', '122.175.152.77', 6, '2020-12-11 07:26:20', '2021-01-23 13:58:50', 4, 0, 0),
(49, '2020-12-02', '00038', '180', 7, '286.34', '580', '110', '150', '1', '3', '2', '4', '26000', '0', '9', '0', '1', '122.175.152.77', 6, '2020-12-11 07:27:56', '2021-01-25 10:26:59', 4, 0, 0),
(50, '2020-12-02', '00039', '67', 7, '339.4', '690', '110', '150', '1', '3', '2', '4', '26000', '0', '5', '0', '1', '122.175.152.77', 6, '2020-12-11 07:29:48', '2021-01-25 10:25:46', 4, 0, 0),
(51, '2020-12-02', '00040', '53', 7, '291.78', '590', '110', '150', '1', '3', '2', '4', '26000', '0', '5', '0', '1', '122.175.152.77', 6, '2020-12-11 07:31:23', '2021-01-25 10:24:52', 4, 0, 0),
(52, '2020-12-02', '00041', '54', 7, '339.7', '690', '110', '150', '1', '3', '2', '4', '26000', '0', '5', '0', '1', '122.175.152.77', 6, '2020-12-11 07:33:09', '2021-01-25 10:23:54', 4, 0, 0),
(53, '2020-12-02', '00042', '16', 7, '283.94', '580', '110', '150', '1', '3', '2', '4', '1500', '0', '11', '0', '1', '122.175.152.77', 6, '2020-12-11 07:34:44', '2021-01-23 12:18:29', 4, 0, 0),
(54, '2020-12-03', '00043', '135', 7, '298.52', '600', '110', '150', '1', '3', '2', '4', '26000', '0', '3', '0', '1', '122.175.164.157', 6, '2020-12-11 07:36:20', '2021-01-27 11:50:53', 4, 0, 0),
(55, '2020-12-03', '00044', '132', 7, '291.68', '590', '110', '150', '1', '3', '2', '4', '26000', '0', '3', '0', '1', '122.175.152.77', 6, '2020-12-11 07:39:11', '2021-01-25 10:21:51', 4, 0, 0),
(56, '2020-12-02', '00045', '203', 7, '289.58', '590', '110', '150', '1', '7', '2', '8', '18000', NULL, '8', '4000', '1', '171.49.140.68', 6, '2020-12-11 07:39:34', '2020-12-11 07:39:34', 5, 0, 0),
(57, '2020-12-03', '00046', '137', 7, '293.72', '600', '110', '150', '1', '3', '2', '4', '26000', '0', '3', '0', '1', '122.175.152.77', 6, '2020-12-11 07:46:42', '2021-01-23 14:03:40', 4, 0, 0),
(58, '2020-12-02', '00047', '204', 7, '290.98', '590', '110', '150', '1', '7', '2', '8', '19000', NULL, '8', '4000', '1', '171.49.140.68', 6, '2020-12-11 07:50:43', '2020-12-11 07:50:43', 5, 0, 0),
(59, '2020-12-02', '00048', '205', 7, '291.08', '590', '110', '150', '1', '7', '2', '8', '19000', '0', '8', '4000', '1', '122.175.152.77', 6, '2020-12-11 07:54:28', '2021-01-16 13:29:50', 5, 0, 0),
(60, '2020-12-02', '00049', '100', 7, '291.38', '590', '110', '150', '1', '7', '2', '8', '17000', NULL, '8', '7000', '1', '171.49.140.68', 6, '2020-12-11 07:57:10', '2020-12-11 07:57:10', 5, 0, 0),
(61, '2020-12-02', '00050', '87', 7, '289.93', '590', '110', '150', '1', '7', '2', '8', '19000', NULL, '8', '6000', '1', '171.49.140.68', 6, '2020-12-11 07:59:26', '2020-12-11 07:59:26', 5, 0, 0),
(62, '2020-12-02', '00051', '85', 7, '291.88', '590', '110', '150', '1', '7', '2', '8', '17000', NULL, '8', '4500', '1', '171.49.140.68', 6, '2020-12-11 08:00:58', '2020-12-11 08:00:58', 5, 0, 0),
(63, '2020-12-03', '00052', '206', 7, '291.47', '590', '110', '150', '1', '3', '2', '4', '26000', '0', '3', '0', '1', '122.175.164.157', 6, '2020-12-11 08:01:01', '2021-01-27 11:50:24', 4, 0, 0),
(64, '2020-12-02', '00053', '207', 7, '290.88', '590', '110', '150', '1', '7', '2', '8', '17000', NULL, '8', '4500', '1', '171.49.140.68', 6, '2020-12-11 08:03:34', '2020-12-11 08:03:34', 5, 0, 0),
(65, '2020-12-02', '00054', '75', 7, '291.58', '590', '110', '150', '1', '7', '2', '8', '19000', NULL, '8', '5000', '1', '171.49.140.68', 6, '2020-12-11 08:04:51', '2020-12-11 08:04:51', 5, 0, 0),
(66, '2020-12-02', '00055', '80', 7, '291.28', '590', '110', '150', '1', '7', '2', '8', '20000', NULL, '8', '6000', '1', '171.49.140.68', 6, '2020-12-11 08:06:06', '2020-12-11 08:06:06', 5, 0, 0),
(67, '2020-12-02', '00056', '99', 7, '292.48', '590', '110', '150', '1', '7', '2', '8', '18000', NULL, '8', '6000', '1', '171.49.140.68', 6, '2020-12-11 08:07:23', '2020-12-11 08:07:23', 5, 0, 0),
(68, '2020-12-03', '00057', '208', 7, '294.82', '600', '110', '150', '1', '3', '2', '4', '26000', '0', '11', '0', '1', '122.175.164.157', 6, '2020-12-11 08:08:29', '2021-01-27 11:49:44', 4, 0, 0),
(69, '2020-12-03', '00058', '165', 7, '289.38', '590', '110', '150', '1', '3', '2', '4', '26000', '0', '11', '0', '1', '122.175.152.77', 6, '2020-12-11 08:10:02', '2021-01-23 13:57:24', 4, 0, 0),
(70, '2020-12-02', '00059', '209', 7, '293.08', '590', '110', '150', '1', '7', '2', '8', '1500', NULL, '8', '0', '1', '182.70.216.254', 6, '2020-12-11 08:11:53', '2021-01-12 08:02:06', 4, 0, 0),
(71, '2020-12-03', '00060', '166', 7, '292.58', '590', '110', '150', '1', '3', '2', '4', '26000', '0', '11', '0', '1', '122.175.164.157', 6, '2020-12-11 08:11:56', '2021-01-27 11:49:11', 4, 0, 0),
(72, '2020-12-02', '00061', '210', 7, '291.88', '590', '110', '150', '1', '7', '2', '8', '1500', NULL, '8', '0', '1', '182.70.216.254', 6, '2020-12-11 08:14:25', '2021-01-12 08:01:11', 5, 0, 0),
(73, '2020-12-02', '00062', '22', 7, '291.08', '590', '110', '150', '1', '7', '2', '8', '1500', NULL, '8', '1750', '1', '182.70.216.254', 6, '2020-12-11 08:15:41', '2021-01-12 08:00:20', 5, 0, 0),
(74, '2020-12-03', '00063', '211', 7, '291.58', '590', '110', '150', '1', '3', '2', '4', '700', '0', '6', '0', '1', '122.175.164.157', 6, '2020-12-11 08:16:07', '2021-01-27 11:48:24', 4, 0, 0),
(75, '2020-12-02', '00064', '42', 7, '335.86', '680', '110', '150', '1', '7', '2', '8', '1500', '0', '8', '150', '1', '122.175.152.77', 6, '2020-12-11 08:16:50', '2021-01-25 12:02:25', 5, 0, 0),
(76, '2020-12-03', '00065', '26', 7, '289.18', '590', '110', '150', '1', '3', '2', '4', '1500', '0', '11', '0', '1', '122.175.152.77', 6, '2020-12-11 08:18:00', '2021-01-23 12:19:55', 4, 0, 0),
(77, '2020-12-02', '00066', '212', 7, '291.28', '590', '110', '150', '1', '7', '2', '8', '1500', '0', '8', '0', '1', '110.224.199.247', 6, '2020-12-11 08:18:48', '2021-02-03 07:08:00', 4, 0, 0),
(78, '2020-12-02', '00067', '12', 7, '292.28', '590', '110', '150', '1', '7', '2', '8', '1500', '0', '8', '0', '1', '122.175.152.77', 6, '2020-12-11 08:19:54', '2021-01-16 13:27:43', 5, 0, 0),
(79, '2020-12-03', '00068', '213', 7, '290.48', '590', '110', '150', '1', '3', '2', '4', '1500', '0', '11', '0', '1', '122.175.152.77', 6, '2020-12-11 08:20:18', '2021-01-23 12:20:36', 4, 0, 0),
(80, '2020-12-02', '00069', '6', 7, '338.30', '690', '110', '150', '1', '7', '2', '8', '1500', '0', '8', '650', '1', '110.224.199.247', 6, '2020-12-11 08:21:13', '2021-02-03 07:06:46', 4, 0, 0),
(81, '2020-12-03', '00070', '44', 7, '342.5', '690', '110', '150', '1', '3', '2', '4', '1500', '0', '6', '0', '1', '122.175.164.157', 6, '2020-12-11 08:21:57', '2021-01-27 12:15:00', 4, 0, 0),
(82, '2020-12-02', '00071', '25', 7, '293.08', '590', '110', '150', '1', '7', '2', '8', '1500', '0', '8', '1250', '1', '110.224.199.247', 6, '2020-12-11 08:22:07', '2021-02-03 07:05:42', 4, 0, 0),
(83, '2020-12-02', '00072', '214', 7, '292.98', '590', '110', '150', '1', '7', '2', '8', '1500', NULL, '8', '0', '1', '182.70.216.254', 6, '2020-12-11 08:23:40', '2021-01-12 07:57:47', 5, 0, 0),
(84, '2020-12-04', '00073', '9', 7, '335.46', '680', '110', '150', '1', '3', '2', '4', '804', '0', '3', '0', '1', '122.175.152.77', 6, '2020-12-11 08:24:35', '2021-01-25 10:20:04', 4, 0, 0),
(85, '2020-12-02', '00074', '20', 7, '292.18', '590', '110', '150', '1', '7', '2', '8', '1500', NULL, '8', '900', '1', '182.70.216.254', 6, '2020-12-11 08:24:44', '2021-01-12 07:55:48', 5, 0, 0),
(86, '2020-12-04', '00075', '215', 7, '298.12', '600', '110', '150', '1', '3', '2', '4', '1500', '0', '6', '0', '1', '122.175.164.157', 6, '2020-12-11 09:08:05', '2021-01-27 12:14:25', 4, 0, 0),
(87, '2020-12-05', '00076', '11', 7, '331.86', '680', '110', '150', '1', '3', '2', '4', '1500', '0', '5', '0', '1', '122.175.152.77', 6, '2020-12-11 09:09:52', '2021-01-23 12:21:21', 4, 0, 0),
(88, '2020-12-05', '00077', '13', 7, '334.89', '675', '110', '150', '1', '3', '2', '4', '1500', '0', '11', '0', '1', '122.175.152.77', 6, '2020-12-11 09:13:03', '2021-01-23 12:21:59', 4, 0, 0),
(89, '2020-12-05', '00078', '216', 7, '291.99', '590', '110', '150', '1', '3', '2', '4', '1500', '0', '5', '0', '1', '122.175.152.77', 6, '2020-12-11 09:17:53', '2021-01-23 12:22:46', 4, 0, 0),
(90, '2020-12-05', '00079', '36', 7, '338.8', '690', '110', '150', '1', '3', '2', '4', '1500', '0', '5', '0', '1', '122.175.152.77', 6, '2020-12-11 09:19:35', '2021-01-23 12:23:35', 4, 0, 0),
(91, '2020-12-05', '00080', '67', 7, '340.3', '690', '110', '150', '1', '3', '2', '4', '26000', '0', '5', '0', '1', '122.175.164.157', 6, '2020-12-11 09:21:03', '2021-01-27 11:47:36', 4, 0, 0),
(92, '2020-12-05', '00081', '8', 7, '341.5', '690', '110', '150', '1', '3', '2', '4', '1500', '0', '6', '0', '1', '122.175.164.157', 6, '2020-12-11 09:25:03', '2021-01-27 12:13:44', 4, 0, 0),
(93, '2020-12-05', '00082', '23', 7, '286.14', '580', '110', '150', '1', '3', '2', '4', '1500', '0', '6', '0', '1', '122.175.164.157', 6, '2020-12-11 09:26:47', '2021-01-27 12:13:10', 4, 0, 0),
(94, '2020-12-03', '00083', '217', 7, '290.68', '590', '110', '150', '1', '7', '2', '8', '22000', NULL, '8', '4000', '1', '171.49.140.68', 6, '2020-12-11 11:10:27', '2020-12-11 11:10:27', 5, 0, 0),
(95, '2020-12-03', '00084', '76', 7, '290.28', '590', '110', '150', '1', '7', '2', '8', '20000', NULL, '8', '5000', '1', '171.49.140.68', 6, '2020-12-11 11:12:46', '2020-12-11 11:12:46', 0, 0, 0),
(96, '2020-12-03', '00085', '218', 7, '292.68', '590', '110', '150', '1', '7', '2', '8', '19500', NULL, '8', '5500', '1', '171.49.140.68', 6, '2020-12-11 11:22:41', '2020-12-11 11:22:41', 0, 0, 0),
(97, '2020-12-05', '00086', '38', 7, '291.28', '590', '110', '150', '1', '3', '2', '4', '1500', '0', '5', '0', '1', '122.175.152.77', 6, '2020-12-11 11:25:17', '2021-01-25 10:18:21', 4, 0, 0),
(98, '2020-12-03', '00087', '10', 7, '340.8', '690', '110', '150', '1', '7', '2', '8', '1500', NULL, '8', '750', '1', '171.49.140.68', 6, '2020-12-11 11:26:11', '2020-12-11 11:26:11', 0, 0, 0),
(99, '2020-12-03', '00088', '219', 7, '289.88', '590', '110', '150', '1', '7', '2', '8', '650', '0', '8', '0', '1', '122.175.152.77', 6, '2020-12-11 11:28:24', '2021-01-25 12:01:28', 4, 0, 0),
(100, '2020-12-05', '00089', '21', 7, '290.99', '590', '110', '150', '1', '3', '2', '4', '1500', '0', '6', '0', '1', '122.175.164.157', 6, '2020-12-11 11:28:39', '2021-01-27 12:12:35', 4, 0, 0),
(101, '2020-12-03', '00090', '41', 7, '342.20', '690', '110', '150', '1', '7', '2', '8', '1500', NULL, '8', '0', '1', '182.70.216.254', 6, '2020-12-11 11:29:41', '2021-01-12 07:58:22', NULL, 0, 0),
(102, '2020-12-03', '00091', '15', 7, '338', '690', '110', '150', '1', '7', '2', '8', '1500', NULL, '8', '0', '1', '182.70.216.254', 6, '2020-12-11 11:30:38', '2021-01-12 07:53:37', NULL, 0, 0),
(103, '2020-12-03', '00092', '37', 7, '338.90', '690', '110', '150', '1', '7', '2', '8', '1500', NULL, '8', '0', '1', '182.70.216.254', 6, '2020-12-11 11:31:28', '2021-01-12 07:52:50', NULL, 0, 0),
(104, '2020-12-05', '00093', '220', 7, '292.88', '590', '110', '150', '1', '3', '2', '4', '1500', '0', '6', '0', '1', '122.175.164.157', 6, '2020-12-11 11:32:16', '2021-01-27 12:11:56', 4, 0, 0),
(105, '2020-12-03', '00094', '66', 7, '289.38', '590', '110', '150', '1', '7', '2', '8', '1500', NULL, '8', '450', '1', '171.61.12.118', 5, '2020-12-11 11:32:34', '2021-01-11 08:32:49', 4, 0, 0),
(106, '2020-12-05', '00095', '16', 7, '287.84', '580', '110', '150', '1', '3', '2', '4', '1500', '0', '5', '0', '1', '122.175.152.77', 6, '2020-12-11 11:39:16', '2021-01-23 12:24:21', 4, 0, 0),
(107, '2020-12-05', '00096', '170', 7, '297.32', '600', '110', '150', '1', '3', '2', '4', '26000', '0', '9', '0', '1', '122.175.164.157', 6, '2020-12-11 11:41:53', '2021-01-27 11:46:10', 4, 0, 0),
(108, '2020-12-03', '00097', '17', 7, '291.98', '590', '110', '150', '1', '7', '2', '8', '1500', NULL, '8', '1250', '1', '182.70.216.254', 6, '2020-12-11 11:42:05', '2021-01-12 07:51:58', NULL, 0, 0),
(109, '2020-12-03', '00098', '65', 7, '292.38', '590', '110', '150', '1', '7', '2', '8', '1500', NULL, '8', '1500', '1', '182.70.216.254', 6, '2020-12-11 11:43:10', '2021-01-12 07:51:08', NULL, 0, 0),
(110, '2020-12-05', '00099', '221', 7, '247.8', '500', '110', '150', '1', '3', '2', '4', '26000', '0', '3', '0', '1', '122.175.246.186', 6, '2020-12-11 11:46:59', '2021-01-27 11:32:19', 4, 0, 0),
(111, '2020-12-03', '00100', '24', 7, '292.48', '590', '110', '150', '1', '7', '2', '8', '1500', NULL, '8', '650', '1', '182.70.216.254', 6, '2020-12-11 11:47:00', '2021-01-12 07:50:23', NULL, 0, 0),
(112, '2020-12-07', '00101', '19', 7, '283.74', '580', '110', '150', '1', '3', '2', '3', '1500', '0', '6', '0', '1', '110.224.199.247', 6, '2020-12-11 11:49:56', '2021-02-04 06:35:04', 4, 0, 0),
(113, '2020-12-07', '00102', '198', 7, '286.84', '580', '110', '150', '1', '3', '2', '4', '1500', '0', '6', '0', '1', '122.175.164.157', 6, '2020-12-11 11:52:20', '2021-01-27 12:07:27', 4, 0, 0),
(114, '2020-12-07', '00103', '222', 7, '287.24', '580', '110', '150', '1', '3', '2', '4', '1500', '0', '5', '0', '1', '122.175.152.77', 6, '2020-12-11 11:57:58', '2021-01-23 12:25:17', 4, 0, 0),
(115, '2020-12-04', '00104', '18', 7, '290.88', '590', '110', '150', '1', '7', '2', '8', '1650', '0', '8', '0', '1', '122.175.152.77', 6, '2020-12-11 12:05:12', '2021-01-25 12:03:15', 4, 0, 0),
(116, '2020-12-05', '00105', '203', 7, '293.98', '590', '110', '150', '1', '7', '2', '8', '18000', NULL, '8', '7000', '1', '171.49.140.68', 6, '2020-12-11 12:09:58', '2020-12-11 12:09:58', 0, 0, 0),
(117, '2020-12-05', '00106', '201', 7, '291.08', '590', '110', '150', '1', '7', '2', '8', '22000', NULL, '8', '4000', '1', '171.49.140.68', 6, '2020-12-11 12:13:49', '2020-12-11 12:13:49', 0, 0, 0),
(118, '2020-12-05', '00107', '116', 7, '290.38', '590', '110', '150', '1', '7', '2', '8', '19500', NULL, '8', '5500', '1', '171.49.140.68', 6, '2020-12-11 12:30:50', '2020-12-11 12:30:50', 0, 0, 0),
(119, '2020-12-05', '00108', '117', 7, '290.48', '590', '110', '150', '1', '7', '2', '8', '19500', NULL, '8', '5500', '1', '171.49.140.68', 6, '2020-12-11 12:31:55', '2020-12-11 12:31:55', 0, 0, 0),
(120, '2020-12-05', '00109', '22', 7, '290.88', '590', '110', '150', '1', '7', '2', '8', '1500', NULL, '8', '650', '1', '182.70.216.254', 6, '2020-12-11 12:34:04', '2021-01-12 07:41:07', NULL, 0, 0),
(121, '2020-12-05', '00110', '39', 7, '290.18', '590', '110', '150', '1', '7', '2', '8', '500', NULL, '8', '650', '1', '182.70.216.254', 6, '2020-12-11 12:35:05', '2021-01-12 07:40:26', NULL, 0, 0),
(122, '2020-12-05', '00111', '212', 7, '290.48', '590', '110', '150', '1', '7', '2', '8', '1500', NULL, '8', '650', '1', '171.49.140.68', 6, '2020-12-11 12:53:35', '2020-12-11 12:53:35', 0, 0, 0),
(123, '2020-12-07', '00112', '223', 7, '292.38', '590', '110', '150', '1', '3', '2', '4', '26000', '0', '3', '0', '1', '122.175.152.77', 6, '2020-12-11 12:54:09', '2021-01-23 13:55:15', 4, 0, 0),
(124, '2020-12-07', '00113', '132', 7, '245.2', '500', '110', '150', '1', '3', '2', '4', '20000', '0', '11', '6000', '1', '122.175.152.77', 6, '2020-12-11 12:58:12', '2021-01-23 13:54:27', 4, 0, 0),
(125, '2020-12-07', '00114', '169', 7, '245.7', '500', '110', '150', '1', '3', '2', '4', '20000', '0', '3', '0', '1', '122.175.152.77', 6, '2020-12-11 13:00:57', '2021-01-25 10:14:09', 4, 0, 0),
(126, '2020-12-07', '00115', '54', 7, '337.7', '690', '110', '150', '1', '3', '2', '4', '26000', '0', '5', '0', '1', '122.175.152.77', 6, '2020-12-11 13:04:09', '2021-01-25 08:37:40', 4, 0, 0),
(127, '2020-12-08', '00116', '225', 7, '340.5', '690', '110', '150', '1', '3', '2', '4', '26000', '0', '5', '0', '1', '122.175.152.77', 6, '2020-12-11 13:08:05', '2021-01-23 13:52:44', 4, 0, 0),
(128, '2020-12-08', '00117', '216', 7, '290.88', '590', '110', '150', '1', '3', '2', '4', '2500', '0', '11', '0', '1', '122.175.152.77', 6, '2020-12-11 13:09:21', '2021-01-23 12:25:58', 4, 0, 0),
(129, '2020-12-08', '00118', '43', 7, '336.76', '680', '110', '150', '1', '3', '2', '4', '1500', '0', '11', '0', '1', '122.175.152.77', 6, '2020-12-11 13:10:51', '2021-01-23 12:31:16', 4, 0, 0),
(130, '2020-12-08', '00119', '13', 7, '332.69', '675', '110', '150', '1', '3', '2', '4', '2250', '0', '11', '0', '1', '122.175.152.77', 6, '2020-12-11 13:12:44', '2021-01-23 12:28:11', 4, 0, 0),
(131, '2020-12-08', '00120', '36', 7, '335.36', '680', '110', '150', '1', '3', '2', '4', '2000', '0', '11', '0', '1', '122.175.152.77', 6, '2020-12-11 13:14:09', '2021-01-23 12:28:56', 4, 0, 0),
(132, '2020-12-08', '00121', '23', 7, '286.64', '580', '110', '150', '1', '3', '2', '4', '1500', '0', '11', '0', '1', '122.175.152.77', 6, '2020-12-11 13:15:00', '2021-01-23 12:29:46', 4, 0, 0),
(133, '2020-12-05', '00122', '226', 7, '291.88', '590', '110', '150', '1', '7', '2', '8', '19000', NULL, '8', '7000', '1', '171.49.140.68', 6, '2020-12-11 13:15:51', '2020-12-11 13:15:51', 0, 0, 0),
(134, '2020-12-08', '00123', '21', 7, '291.48', '590', '110', '150', '1', '3', '2', '4', '1500', '0', '11', '0', '1', '122.175.152.77', 6, '2020-12-11 13:15:52', '2021-01-23 12:30:32', 4, 0, 0),
(135, '2020-12-08', '00124', '11', 7, '335.26', '680', '110', '150', '1', '3', '2', '4', '1500', '0', '11', '0', '1', '122.175.152.77', 6, '2020-12-11 13:17:19', '2021-01-23 12:26:51', 4, 0, 0),
(136, '2020-12-08', '00125', '45', 7, '339.3', '690', '110', '150', '1', '3', '2', '4', '500', '0', '6', '0', '1', '122.175.152.77', 6, '2020-12-11 13:18:23', '2021-01-25 10:17:40', 4, 0, 0),
(137, '2020-12-08', '00126', '227', 7, '294.21', '585', '110', '150', '1', '3', '2', '4', '26000', '0', '11', NULL, '1', '122.175.152.77', 6, '2020-12-11 13:24:33', '2021-01-23 13:51:39', 4, 0, 0),
(138, '2020-12-05', '00127', '42', 7, '335.56', '680', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-12 06:20:45', '2021-01-11 11:46:08', NULL, 0, 0),
(139, '2020-12-05', '00128', '210', 7, '291.28', '590', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-12 06:36:42', '2021-01-11 11:45:33', NULL, 0, 0),
(140, '2020-12-05', '00129', '214', 7, '293.28', '590', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-12 06:37:59', '2021-01-11 11:44:32', NULL, 0, 0),
(141, '2020-12-05', '00130', '209', 7, '293.58', '590', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-12 06:39:47', '2021-01-11 11:44:02', NULL, 0, 0),
(142, '2020-12-05', '00131', '25', 7, '293.18', '590', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-12 06:40:50', '2021-01-11 11:43:16', NULL, 0, 0),
(143, '2020-12-05', '00132', '40', 7, '337.7', '690', '110', '150', '1', '7', '2', '8', '3500', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-12 06:41:41', '2021-01-11 11:42:38', NULL, 0, 0),
(144, '2020-12-07', '00133', '66', 7, '288.88', '590', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '182.70.216.254', 6, '2020-12-12 06:42:46', '2021-01-12 07:48:56', NULL, 0, 0),
(145, '2020-12-07', '00134', '211', 7, '290.68', '590', '110', '150', '1', '7', '2', '8', '2800', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-12 06:43:40', '2021-01-11 11:42:01', NULL, 0, 0),
(146, '2020-12-07', '00135', '6', 7, '341.4', '690', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-12 06:47:59', '2021-01-11 11:41:14', NULL, 0, 0),
(147, '2020-12-07', '00136', '65', 7, '290.28', '590', '110', '150', '1', '7', '2', '8', '3750', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-12 06:48:57', '2021-01-11 11:33:27', NULL, 0, 0),
(148, '2020-12-07', '00137', '213', 7, '291.18', '590', '110', '150', '1', '7', '2', '8', '1950', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-12 06:50:00', '2021-01-11 11:32:23', NULL, 0, 0),
(149, '2020-12-07', '00138', '17', 7, '292.48', '590', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-12 06:51:16', '2021-01-11 11:28:54', NULL, 0, 0),
(150, '2020-12-07', '00139', '219', 7, '292.48', '590', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-12 06:52:05', '2021-01-11 11:28:26', NULL, 0, 0),
(151, '2020-12-07', '00140', '24', 7, '291.58', '590', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-12 06:53:26', '2021-01-11 11:27:05', NULL, 0, 0),
(152, '2020-12-07', '00141', '12', 7, '289.68', '590', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-12 06:54:52', '2021-01-11 11:26:28', NULL, 0, 0),
(153, '2020-12-07', '00142', '212', 7, '290.88', '590', '110', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '122.175.152.77', 6, '2020-12-12 06:58:01', '2021-01-25 11:56:58', 4, 0, 0),
(154, '2020-12-07', '00143', '20', 7, '290.68', '590', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-12 06:58:46', '2021-01-11 11:25:46', NULL, 0, 0),
(155, '2020-12-07', '00144', '18', 7, '294.48', '590', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-12 06:59:34', '2021-01-11 11:25:17', NULL, 0, 0),
(156, '2020-12-07', '00145', '15', 7, '339.3', '690', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-12 07:00:16', '2021-01-11 11:24:54', NULL, 0, 0),
(157, '2020-12-07', '00146', '37', 7, '337.6', '690', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-12 07:01:10', '2021-01-11 11:24:16', NULL, 0, 0),
(158, '2020-12-07', '00147', '10', 7, '339.10', '690', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-12 07:02:13', '2021-01-11 11:23:36', NULL, 0, 0),
(159, '2020-12-07', '00148', '41', 7, '339.90', '690', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-12 07:03:02', '2021-01-11 11:22:00', NULL, 0, 0),
(160, '2020-12-08', '00149', '209', 7, '292.08', '590', '110', '150', '1', '7', '2', '8', '2350', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-12 07:04:50', '2021-01-11 11:02:18', NULL, 0, 0),
(161, '2020-12-08', '00150', '44', 7, '339', '690', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-12 07:05:36', '2021-01-11 11:00:21', NULL, 0, 0),
(162, '2020-12-08', '00151', '8', 7, '338.60', '690', '110', '150', '1', '7', '2', '8', '2700', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-12 07:06:45', '2021-01-11 10:59:53', NULL, 0, 0),
(163, '2020-12-08', '00152', '42', 7, '335.35', '680', '110', '150', '1', '7', '2', '8', '2350', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-12 07:09:30', '2021-01-11 10:59:23', NULL, 0, 0),
(164, '2020-12-08', '00153', '25', 7, '292.88', '590', '110', '150', '1', '7', '2', '8', '2350', NULL, '8', '0', '1', '182.70.216.254', 6, '2020-12-12 07:14:07', '2021-01-12 07:39:07', NULL, 0, 0),
(165, '2020-12-08', '00154', '210', 7, '290.38', '590', '110', '150', '1', '7', '2', '8', '2350', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-12 07:16:27', '2021-01-11 10:58:20', NULL, 0, 0),
(166, '2020-12-08', '00155', '214', 7, '292.58', '590', '110', '150', '1', '7', '2', '8', '2350', NULL, '8', '0', '1', '182.70.216.254', 6, '2020-12-12 07:17:09', '2021-01-12 07:39:43', NULL, 0, 0),
(167, '2020-12-08', '00156', '220', 7, '293.58', '590', '110', '150', '1', '7', '2', '8', '1700', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-12 07:17:52', '2021-01-11 10:56:17', NULL, 0, 0),
(168, '2020-12-08', '00157', '22', 7, '289.98', '590', '110', '150', '1', '7', '2', '8', '2850', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-12 07:21:02', '2021-01-11 11:58:04', NULL, 0, 0),
(169, '2020-12-10', '00158', '212', 7, '290.78', '590', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-12 08:35:08', '2021-01-11 10:55:47', NULL, 0, 0),
(170, '2020-12-10', '00159', '213', 7, '291.18', '590', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-12 08:38:09', '2021-01-11 10:55:07', NULL, 0, 0),
(171, '2020-12-10', '00160', '20', 7, '290.58', '590', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-12 08:39:01', '2021-01-11 10:54:32', NULL, 0, 0),
(172, '2020-12-10', '00161', '219', 7, '290.88', '590', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-12 08:40:01', '2021-01-11 10:51:19', NULL, 0, 0),
(173, '2020-12-10', '00162', '17', 7, '291.08', '590', '110', '150', '1', '7', '2', '8', '3050', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-12 08:41:48', '2021-01-11 10:50:52', NULL, 0, 0),
(174, '2020-12-10', '00163', '211', 7, '291.28', '590', '110', '150', '1', '7', '2', '8', '2600', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-12 08:43:23', '2021-01-11 10:50:24', NULL, 0, 0),
(175, '2020-12-10', '00164', '24', 7, '292.58', '590', '110', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '122.175.152.77', 6, '2020-12-12 08:44:18', '2021-01-25 11:55:19', 4, 0, 0),
(176, '2020-12-10', '00165', '18', NULL, '289.58', '590', '110', '150', '1', '7', '2', '8', '2400', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-12 08:45:07', '2021-01-11 10:35:58', NULL, 0, 0),
(177, '2020-12-10', '00166', '65', 7, '290.68', '590', '110', '150', '1', '7', '2', '8', '1250', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-12 08:46:03', '2021-01-11 10:35:24', NULL, 0, 0),
(178, '2020-12-10', '00167', '41', 7, '341.7', '690', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-12 08:49:02', '2021-01-11 11:57:16', NULL, 0, 0),
(179, '2020-12-10', '00168', '15', 7, '341.30', '690', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-12 08:49:54', '2021-01-11 10:34:38', NULL, 0, 0),
(180, '2020-12-10', '00169', '66', 7, '289.78', '590', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-12 08:50:50', '2021-01-11 10:34:11', NULL, 0, 0),
(181, '2020-12-10', '00170', '26', 7, '292.98', '590', '110', '150', '1', '7', '2', '8', '1700', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-12 08:51:36', '2021-01-11 10:33:44', NULL, 0, 0),
(182, '2020-12-11', '00171', '44', 7, '341.20', '690', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-14 11:02:20', '2021-01-11 10:32:57', NULL, 0, 0),
(183, '2020-12-11', '00172', '25', 7, '289.78', '590', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-14 11:04:11', '2021-01-11 10:32:19', NULL, 0, 0),
(184, '2020-12-11', '00173', '8', 7, '344.30', '690', '110', '150', '1', '7', '2', '8', '2400', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-14 11:05:20', '2021-01-11 10:31:29', NULL, 0, 0),
(185, '2020-12-11', '00174', '21', 7, '289.88', '590', '110', '150', '1', '7', '2', '8', '1950', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-14 11:06:43', '2021-01-11 11:56:30', NULL, 0, 0),
(186, '2020-12-11', '00175', '42', 7, '336.65', '680', '110', '150', '1', '7', '2', '8', '3000', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-14 11:07:38', '2021-01-11 10:30:22', NULL, 0, 0),
(187, '2020-12-11', '00176', '198', 7, '390.48', '590', '110', '150', '1', '7', '2', '8', '3750', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-14 11:08:53', '2021-01-11 10:29:42', NULL, 0, 0),
(188, '2020-12-11', '00177', '12', 7, '290.78', '590', '110', '150', '1', '7', '2', '8', '2450', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-14 11:10:09', '2021-01-11 11:56:01', NULL, 0, 0),
(189, '2020-12-11', '00178', '11', 7, '340.70', '690', '110', '150', '1', '7', '2', '8', '1800', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-14 11:11:09', '2021-01-11 10:29:03', NULL, 0, 0),
(190, '2020-12-11', '00179', '13', 7, '341.50', '690', '110', '150', '1', '7', '2', '8', '1500', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-14 11:12:11', '2021-01-11 11:55:34', NULL, 0, 0),
(191, '2020-12-11', '00180', '67', 7, '341.80', '690', '110', '150', '1', '7', '2', '8', '28000', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-14 11:13:40', '2020-12-16 05:52:01', 0, 0, 0),
(192, '2020-12-11', '00181', '10', 7, '340.30', '690', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-14 11:14:22', '2021-01-11 10:28:21', NULL, 0, 0),
(193, '2020-12-11', '00182', '45', 7, '340.60', '690', '110', '150', '1', '7', '2', '8', '1500', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-14 11:20:00', '2021-01-11 10:27:33', NULL, 0, 0),
(194, '2020-12-11', '00183', '43', 7, '341.60', '690', '110', '150', '1', '7', '2', '8', '1500', NULL, '8', '0', '1', '182.70.216.254', 6, '2020-12-14 11:23:51', '2021-01-12 07:45:10', NULL, 0, 0),
(195, '2020-12-11', '00184', '216', 7, '292.78', '590', '110', '150', '1', '7', '2', '8', '1500', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-14 11:24:55', '2021-01-11 10:26:35', NULL, 0, 0),
(196, '2020-12-11', '00185', '214', 7, '290.18', '590', '110', '150', '1', '7', '2', '8', '2250', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-14 11:27:52', '2021-01-11 10:25:49', NULL, 0, 0),
(197, '2020-12-11', '00186', '23', 7, '292.38', '590', '110', '150', '1', '7', '2', '8', '1500', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-14 11:29:00', '2021-01-11 10:25:21', NULL, 0, 0),
(198, '2020-12-11', '00187', '220', 7, '291.48', '590', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '182.70.216.254', 6, '2020-12-14 11:29:42', '2021-01-12 07:45:59', NULL, 0, 0),
(199, '2020-12-11', '00188', '6', 7, '340.2', '690', '110', '150', '1', '7', '2', '8', '4450', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-14 11:30:24', '2021-01-11 10:23:12', NULL, 0, 0),
(200, '2020-12-11', '00189', '37', 7, '341.30', '690', '110', '150', '1', '7', '2', '8', '2600', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-14 11:31:07', '2021-01-11 10:22:09', NULL, 0, 0),
(201, '2020-12-12', '00190', '210', 7, '291.98', '590', '110', '150', '1', '7', '2', '8', '4000', NULL, '8', '0', '1', '171.61.12.118', 6, '2020-12-14 11:31:58', '2021-01-11 10:21:40', NULL, 0, 0),
(202, '2020-12-08', '00191', '228', 7, '291.78', '590', '110', '150', '1', '7', '2', '8', '21000', NULL, '8', '0', '1', '171.49.140.68', 6, '2020-12-14 11:44:03', '2020-12-14 11:44:03', 0, 0, 0),
(203, '2020-12-08', '00192', '229', 7, '292.28', '590', '110', '150', '1', '7', '2', '8', '21000', NULL, '8', '0', '1', '171.49.140.68', 6, '2020-12-14 11:44:46', '2020-12-14 11:44:46', 0, 0, 0),
(204, '2020-12-11', '00193', '333', 7, '292.08', '590', '110', '150', '1', '7', '2', '8', '25000', NULL, '8', '0', '1', '171.61.12.118', 5, '2020-12-14 13:04:53', '2021-01-11 08:19:46', NULL, 0, 0),
(205, '2020-12-14', '00194', '25', 7, '291.28', '590', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-16 05:56:56', '2020-12-16 05:56:56', 0, 0, 0),
(206, '2020-12-14', '00195', '17', 7, '290.58', '590', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-16 05:57:49', '2020-12-16 05:57:49', 0, 0, 0),
(207, '2020-12-14', '00196', '41', 7, '340.30', '690', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-16 06:00:35', '2020-12-16 06:00:35', 0, 0, 0),
(208, '2020-12-14', '00197', '198', 7, '292.48', '590', '110', '150', '1', '7', '2', '8', '1550', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-16 06:01:58', '2020-12-16 06:01:58', 0, 0, 0),
(209, '2020-12-14', '00198', '43', 7, '340', '690', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-16 06:02:48', '2020-12-16 06:02:48', 0, 0, 0),
(210, '2020-12-14', '00199', '44', 7, '341.50', '690', '110', '150', '1', '7', '2', '8', '1550', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-16 06:03:43', '2020-12-16 06:03:43', 0, 0, 0),
(211, '2020-12-14', '00200', '213', 7, '291.78', '590', '110', '150', '1', '7', '2', '8', '2750', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-16 06:04:44', '2020-12-16 06:04:44', 0, 0, 0),
(212, '2020-12-14', '00201', '212', 7, '291.18', '590', '110', '150', '1', '7', '2', '8', '2300', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-16 06:05:49', '2020-12-16 06:05:49', 0, 0, 0),
(213, '2020-12-14', '00202', '216', 7, '290.38', '590', '110', '150', '1', '7', '2', '8', '2680', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-16 06:06:57', '2020-12-16 06:06:57', 0, 0, 0),
(214, '2020-12-14', '00203', '42', 7, '335.75', '680', '110', '150', '1', '7', '2', '8', '1900', '0', '8', '0', '1', '122.175.152.77', 6, '2020-12-16 06:08:25', '2021-01-16 13:31:05', 4, 0, 0),
(215, '2020-12-14', '00204', '12', 7, '292.28', '590', '110', '150', '1', '7', '2', '8', '4250', '0', '8', '0', '1', '110.224.199.247', 6, '2020-12-16 06:09:31', '2021-02-03 07:13:14', 4, 0, 0),
(216, '2020-12-14', '00205', '20', 7, '290.98', '590', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-16 06:11:34', '2020-12-16 06:11:34', 0, 0, 0),
(217, '2020-12-14', '00206', '13', 7, '335.55', '680', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-16 06:12:30', '2020-12-16 06:12:30', 0, 0, 0),
(218, '2020-12-14', '00207', '22', 7, '293.68', '590', '110', '150', '1', '7', '2', '8', '2800', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-16 06:13:27', '2020-12-16 06:13:27', 0, 0, 0),
(219, '2020-12-14', '00208', '37', 7, '340.90', '690', '110', '150', '1', '7', '2', '8', '2750', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-16 06:14:56', '2020-12-16 06:14:56', 0, 0, 0),
(220, '2020-12-14', '00209', '211', 7, '296.14', '596', '110', '150', '1', '7', '2', '8', '1250', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-16 06:39:29', '2020-12-16 06:39:29', 0, 0, 0),
(221, '2020-12-14', '00210', '209', 7, '290.98', '590', '110', '150', '1', '7', '2', '8', '1550', NULL, '8', '0', '1', '171.61.12.118', 5, '2020-12-16 06:48:29', '2021-01-11 08:23:00', NULL, 0, 0),
(222, '2020-12-14', '00211', '18', 7, '292.88', '590', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-16 06:52:30', '2020-12-17 13:10:11', NULL, 0, 0),
(223, '2020-12-14', '00212', '6', 7, '341.20', '690', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-16 06:53:15', '2020-12-16 06:53:15', 0, 0, 0),
(224, '2020-12-14', '00213', '26', 7, '290.08', '590', '110', '150', '1', '7', '2', '8', '1650', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-16 06:53:59', '2020-12-16 07:06:21', 0, 0, 0),
(225, '2020-12-14', '00214', '66', 7, '291.68', '590', '110', '150', '1', '7', '2', '8', '4150', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-16 06:55:04', '2020-12-16 06:55:04', 0, 0, 0),
(226, '2020-12-14', '00215', '15', 7, '341.30', '690', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-16 06:55:50', '2020-12-16 06:55:50', 0, 0, 0),
(227, '2020-12-14', '00216', '11', 7, '339.20', '690', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-16 06:59:45', '2020-12-16 09:46:08', 0, 0, 0),
(228, '2020-12-14', '00217', '65', 7, '289.58', '590', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-16 07:00:47', '2020-12-16 09:47:30', 0, 0, 0),
(229, '2020-12-14', '00218', '21', 7, '290.58', '590', '110', '150', '1', '7', '2', '8', '3300', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-16 07:01:48', '2020-12-16 09:45:36', 0, 0, 0),
(230, '2020-12-14', '00219', '220', 7, '290.38', '590', '110', '150', '1', '7', '2', '8', '1850', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-16 07:02:35', '2020-12-16 09:44:48', 0, 0, 0),
(231, '2020-12-14', '00220', '23', 7, '290.28', '590', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '122.168.106.199', 5, '2020-12-16 07:07:24', '2020-12-16 12:22:37', 0, 0, 0),
(232, '2020-12-15', '00221', '221', 7, '246.96', '490', '110', '150', '1', '6', '2', '4', '26000', NULL, '9', '0', '1', '122.168.106.199', 6, '2020-12-16 13:20:48', '2020-12-16 13:20:48', 0, 0, 0),
(233, '2020-12-15', '00222', '170', 7, '300.02', '600', '110', '150', '1', '6', '2', '4', '26000', NULL, '9', '0', '1', '122.168.106.199', 6, '2020-12-16 13:22:31', '2020-12-16 13:22:31', 0, 0, 0),
(234, '2020-12-15', '00223', '231', 7, '296.12', '600', '110', '150', 'Select Consignor', '6', '2', '4', '26000', NULL, '3', '0', '1', '122.168.106.199', 6, '2020-12-16 13:27:19', '2020-12-16 13:27:19', 0, 0, 0),
(235, '2020-12-15', '00224', '156', 7, '287.84', '580', '110', '150', '1', '6', '2', '4', '26000', NULL, '3', '0', '1', '122.168.106.199', 6, '2020-12-16 13:28:08', '2020-12-16 13:28:08', 0, 0, 0),
(236, '2020-12-15', '00225', '45', 7, '340.5', '690', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-17 08:36:18', '2020-12-17 08:36:18', 0, 0, 0),
(237, '2020-12-15', '00226', '210', 7, '291.18', '590', '110', '150', '1', '7', '2', '8', '2650', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-17 08:37:07', '2020-12-17 08:37:07', 0, 0, 0),
(238, '2020-12-15', '00227', '219', 7, '292.88', '590', '110', '150', '1', '7', '2', '8', '292.88', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-17 08:37:52', '2020-12-17 08:37:52', 0, 0, 0),
(239, '2020-12-15', '00228', '10', 7, '339.50', '690', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-17 08:38:37', '2020-12-17 08:38:37', 0, 0, 0),
(240, '2020-12-15', '00229', '24', 7, '291.38', '590', '110', '150', '1', '7', '2', '8', '2650', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-17 08:39:20', '2020-12-17 08:39:20', 0, 0, 0),
(241, '2020-12-15', '00230', '8', 7, '341', '690', '110', '150', '1', '7', '2', '8', '2800', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-17 08:40:03', '2020-12-17 08:40:03', 0, 0, 0),
(243, '2020-12-15', '00232', '16', 7, '284.24', '580', '110', '150', '1', '3', '2', '4', '1500', '0', '11', '0', '1', '122.175.152.77', 6, '2020-12-17 12:56:48', '2021-01-23 12:32:03', 4, 0, 0),
(244, '2020-12-15', '00233', '40', 7, '336.76', '680', '110', '150', '1', '3', '2', '3', '1500', '0', '11', '0', '1', '122.175.152.77', 6, '2020-12-17 12:58:10', '2021-01-23 12:32:54', 4, 0, 0),
(245, '2020-12-15', '00234', '9', 7, '334.96', '680', '110', '150', '1', '3', '2', '4', '1500', '0', '5', '0', '1', '122.175.152.77', 6, '2020-12-17 12:58:42', '2021-01-23 12:33:54', 4, 0, 0),
(246, '2020-12-15', '00235', '222', 7, '286.34', '580', '110', '150', '1', '3', '2', '4', '2000', '0', '11', '0', '1', '122.175.152.77', 6, '2020-12-17 12:59:21', '2021-01-23 12:34:30', 4, 0, 0),
(247, '2020-12-15', '00236', '19', 7, '286.44', '580', '110', '150', '1', '3', '2', '4', '3000', '0', '11', '0', '1', '122.175.152.77', 6, '2020-12-17 12:59:59', '2021-01-23 12:35:25', 4, 0, 0),
(248, '2020-12-15', '00237', '215', 7, '286.64', '580', '110', '150', '1', '3', '2', '4', '2500', '0', '11', '0', '1', '122.175.152.77', 6, '2020-12-17 13:00:36', '2021-01-23 12:36:13', 4, 0, 0),
(249, '2020-12-15', '00238', '38', 7, '285.34', '580', '110', '150', '1', '3', '2', '4', '1000', '0', '6', '0', '1', '122.175.152.77', 6, '2020-12-17 13:01:41', '2021-01-23 12:36:58', 4, 0, 0),
(250, '2020-12-15', '00239', '39', 7, '286.84', '580', '110', '150', '1', '3', '2', '4', '1500', '0', '6', '0', '1', '122.175.152.77', 6, '2020-12-17 13:02:17', '2021-01-23 12:37:56', 4, 0, 0),
(251, '2020-12-15', '00240', '67', 7, '339.8', '690', '110', '150', '1', '3', '2', '4', '26000', '0', '5', '0', '1', '110.224.199.247', 6, '2020-12-17 13:02:52', '2021-02-04 06:55:51', 4, 0, 0),
(252, '2020-12-15', '00241', '53', 7, '292.38', '590', '110', '150', '1', '3', '2', '4', '26000', '0', '6', '0', '1', '122.175.152.77', 6, '2020-12-17 13:03:24', '2021-01-25 10:17:01', 4, 0, 0),
(253, '2020-12-15', '00242', '54', 7, '341.7', '690', '110', '150', '1', '3', '2', '4', '26000', '0', '5', '0', '1', '122.175.152.77', 6, '2020-12-17 13:04:17', '2021-01-23 14:16:22', 4, 0, 0),
(254, '2020-12-17', '00243', '36', 7, '336.76', '680', '110', '150', '1', '3', '2', '4', '1186', '0', '5', '0', '1', '122.175.152.77', 6, '2020-12-17 13:05:01', '2021-01-23 12:38:56', 4, 0, 0),
(256, '2020-12-17', '00244', '17', 7, '292.58', '590', '110', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '122.175.152.77', 6, '2020-12-18 07:27:25', '2021-01-25 11:50:59', 4, 0, 0),
(257, '2020-12-17', '00245', '11', 7, '336.06', '680', '110', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '122.175.152.77', 6, '2020-12-18 07:28:22', '2021-01-25 11:51:37', 4, 0, 0),
(258, '2020-12-17', '00246', '44', 7, '341.90', '690', '110', '150', '1', '7', '2', '8', '2650', '0', '8', '0', '1', '122.175.152.77', 6, '2020-12-18 07:29:23', '2021-01-25 11:52:12', 4, 0, 0),
(259, '2020-12-17', '00247', '198', 7, '292.48', '590', '110', '150', '1', '7', '2', '8', '2750', '0', '8', '0', '1', '122.175.152.77', 6, '2020-12-18 07:31:08', '2021-01-25 11:52:40', 4, 0, 0),
(260, '2020-12-17', '00248', '22', 7, '289.68', '590', '110', '150', '1', '7', '2', '8', '3300', '0', '8', '0', '1', '122.175.152.77', 6, '2020-12-18 07:32:17', '2021-01-25 11:53:12', 4, 0, 0),
(261, '2020-12-17', '00249', '216', 7, '292.18', '590', '110', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '122.175.152.77', 6, '2020-12-18 07:33:02', '2021-01-25 11:53:47', 4, 0, 0),
(262, '2020-12-17', '00250', '213', 7, '292.38', '590', '110', '150', '1', '7', '2', '8', '2950', NULL, '4', '0', '1', '122.168.106.199', 6, '2020-12-18 07:34:19', '2020-12-18 07:34:19', 0, 0, 0),
(263, '2020-12-17', '00251', '42', 7, '337.46', '680', '110', '150', '1', '7', '2', '8', '2750', NULL, '4', '0', '1', '122.168.106.199', 6, '2020-12-18 07:35:20', '2020-12-18 07:35:20', 0, 0, 0),
(264, '2020-12-17', '00252', '43', 7, '341.60', '690', '110', '150', '1', '7', '2', '8', '2150', NULL, '4', '0', '1', '122.168.106.199', 6, '2020-12-18 07:36:09', '2020-12-18 07:36:09', 0, 0, 0),
(265, '2020-12-17', '00253', '23', 7, '292.18', '590', '110', '150', '1', '7', '2', '8', '2150', NULL, '4', '0', '1', '122.168.106.199', 6, '2020-12-18 07:37:00', '2020-12-18 07:37:00', 0, 0, 0),
(266, '2020-12-17', '00254', '65', 7, '291.88', '590', '110', '150', '1', '7', '2', '8', '2150', NULL, '4', '0', '1', '122.168.106.199', 6, '2020-12-18 07:37:47', '2020-12-18 07:37:47', 0, 0, 0),
(267, '2020-12-17', '00255', '6', 7, '336.16', '680', '110', '150', '1', '7', '2', '8', '2950', NULL, '4', '0', '1', '122.168.106.199', 6, '2020-12-18 07:38:38', '2020-12-18 07:38:38', 0, 0, 0),
(268, '2020-12-17', '00256', '211', 7, '292.48', '590', '110', '150', '1', '7', '2', '8', '2650', NULL, '4', '0', '1', '122.168.106.199', 6, '2020-12-18 07:43:34', '2020-12-18 07:43:34', 0, 0, 0),
(269, '2020-12-17', '00257', '25', 7, '291.68', '590', '110', '150', '1', '7', '2', '8', '2650', NULL, '4', '0', '1', '122.168.106.199', 6, '2020-12-18 07:44:24', '2020-12-18 07:44:24', 0, 0, 0),
(270, '2020-12-17', '00258', '214', 7, '291.68', '590', '110', '150', '1', '7', '2', '8', '2150', NULL, '4', '0', '1', '122.168.106.199', 6, '2020-12-18 07:46:00', '2020-12-18 07:46:00', 0, 0, 0),
(271, '2020-12-17', '00259', '20', 7, '290.98', '590', '110', '150', '1', '7', '2', '8', '2150', NULL, '4', '0', '1', '122.168.106.199', 6, '2020-12-18 07:46:53', '2020-12-18 07:46:53', 0, 0, 0),
(272, '2020-12-17', '00260', '66', 7, '292.98', '590', '110', '150', '1', '7', '2', '8', '2150', NULL, '4', '0', '1', '122.168.106.199', 6, '2020-12-18 07:47:45', '2020-12-18 07:47:45', 0, 0, 0),
(273, '2020-12-17', '00261', '212', 7, '291.98', '590', '110', '150', '1', '7', '2', '8', '2150', NULL, '4', '0', '1', '122.168.106.199', 6, '2020-12-18 07:49:17', '2020-12-18 07:49:17', 0, 0, 0),
(274, '2020-12-17', '00262', '12', 7, '294.38', '590', '110', '150', '1', '7', '2', '8', '2150', '0', '4', '0', '1', '110.224.199.247', 6, '2020-12-18 07:49:57', '2021-02-03 07:12:01', NULL, 0, 0),
(275, '2020-12-17', '00263', '18', 7, '292.08', '590', '110', '150', '1', '7', '2', '8', '2150', NULL, '4', '0', '1', '122.168.106.199', 6, '2020-12-18 07:52:51', '2020-12-18 07:52:51', 0, 0, 0),
(276, '2020-12-17', '00264', '21', 7, '289.98', '590', '110', '150', '1', '7', '2', '8', '2950', NULL, '4', '0', '1', '122.168.106.199', 6, '2020-12-18 07:53:40', '2020-12-18 07:53:40', 0, 0, 0),
(277, '2020-12-18', '00265', '203', 7, '290.98', '590', '110', '150', '1', '7', '2', '8', '25000', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-22 11:43:44', '2020-12-22 11:43:44', 0, 0, 0),
(278, '2020-12-18', '00266', '19', 7, '291.78', '590', '110', '150', '1', '7', '2', '8', '1500', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-22 11:45:32', '2020-12-22 11:45:32', 0, 0, 0),
(279, '2020-12-18', '00267', '24', 7, '292.08', '590', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-22 11:46:51', '2020-12-22 11:46:51', 0, 0, 0),
(280, '2020-12-18', '00268', '38', 7, '291.58', '590', '110', '150', '1', '7', '2', '8', '1500', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-22 11:47:39', '2020-12-22 11:47:39', 0, 0, 0),
(281, '2020-12-18', '00269', '45', 7, '340.03', '685', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-22 11:48:36', '2020-12-23 07:13:57', NULL, 0, 0),
(282, '2020-12-18', '00270', '219', 7, '292.18', '590', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-22 11:49:22', '2020-12-22 11:49:22', 0, 0, 0),
(283, '2020-12-18', '00271', '10', 7, '336.86', '680', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-22 11:50:13', '2020-12-22 11:50:13', 0, 0, 0),
(284, '2020-12-18', '00272', '41', 7, '335.86', '680', '110', '150', '1', '7', '2', '8', '4500', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-22 11:51:28', '2020-12-22 11:51:28', 0, 0, 0),
(285, '2020-12-18', '00273', '220', 7, '291.78', '590', '110', '150', '1', '7', '2', '8', '8150', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-22 12:07:32', '2020-12-22 12:07:32', 0, 0, 0),
(286, '2020-12-18', '00274', '233', 7, '335.56', '680', '110', '150', '1', '7', '2', '8', '1500', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-22 12:08:25', '2020-12-22 12:08:25', 0, 0, 0),
(287, '2020-12-18', '00275', '37', 7, '337.96', '680', '110', '150', '1', '7', '2', '8', '2150', NULL, '4', '0', '1', '122.168.106.199', 6, '2020-12-22 12:10:53', '2020-12-22 12:10:53', 0, 0, 0),
(288, '2020-12-18', '00276', '232', 7, '291.48', '590', '110', '150', '1', '7', '2', '8', '1500', NULL, '4', '0', '1', '122.168.106.199', 6, '2020-12-22 12:11:50', '2020-12-22 12:11:50', 0, 0, 0),
(289, '2020-12-18', '00277', '15', 7, '336.66', '680', '110', '150', '1', '7', '2', '8', '3150', NULL, '4', '0', '1', '122.168.106.199', 6, '2020-12-22 12:13:04', '2020-12-22 12:13:04', 0, 0, 0),
(290, '2020-12-18', '00278', '209', 7, '292.88', '590', '110', '150', '1', '7', '2', '8', '2150', NULL, '4', '0', '1', '122.168.106.199', 6, '2020-12-22 12:13:53', '2020-12-22 12:13:53', 0, 0, 0),
(291, '2020-12-18', '00279', '26', 7, '291.48', '590', '110', '150', '1', '7', '2', '8', '800', NULL, '4', '0', '1', '122.168.106.199', 6, '2020-12-22 12:14:43', '2020-12-22 12:14:43', 0, 0, 0),
(292, '2020-12-19', '00280', '210', 7, '291.88', '590', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-22 12:15:41', '2020-12-22 12:15:41', 0, 0, 0),
(293, '2020-12-19', '00281', '212', 7, '291.38', '590', '110', '150', '1', '7', '2', '8', '2450', NULL, '8', '0', '1', '182.70.216.254', 6, '2020-12-22 12:16:40', '2021-01-12 07:37:17', NULL, 0, 0),
(294, '2020-12-19', '00282', '12', 7, '292.28', '590', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-22 12:17:27', '2020-12-22 12:17:27', 0, 0, 0),
(295, '2020-12-19', '00283', '39', 7, '291.28', '590', '110', '150', '1', '7', '2', '8', '1500', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-22 12:18:20', '2020-12-22 12:18:20', 0, 0, 0),
(296, '2020-12-21', '00284', '44', 7, '333.66', '680', '110', '150', '1', '7', '2', '8', '2100', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-22 12:19:29', '2020-12-22 12:19:29', 0, 0, 0),
(297, '2020-12-21', '00285', '198', 7, '290.18', '590', '110', '150', '1', '7', '2', '8', '1800', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-22 12:20:43', '2020-12-22 12:20:43', 0, 0, 0);
INSERT INTO `loading_entries` (`id`, `loading_date`, `loading_no`, `vehicle_no`, `item_master`, `weight`, `bag`, `freight_rate`, `commision_rate`, `consignor`, `from_place`, `consignee`, `to_plce`, `diesel_advance`, `diesel_advance_ltr`, `pentrol_pump`, `cash_advance`, `status`, `ipaddress`, `createdby`, `created_at`, `updated_at`, `hemal`, `hema_rate`, `loading_type`) VALUES
(298, '2020-12-21', '00286', '43', 7, '336.86', '680', '110', '150', '1', '7', '2', '8', '2100', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-22 12:21:37', '2020-12-22 12:26:07', NULL, 0, 0),
(299, '2020-12-21', '00287', '42', 7, '337.36', '680', '110', '150', '1', '7', '2', '8', '800', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-22 12:27:16', '2020-12-23 07:14:44', NULL, 0, 0),
(300, '2020-12-21', '00288', '214', 7, '291.68', '590', '110', '150', '1', '7', '2', '8', '11800', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-22 12:33:07', '2020-12-22 12:33:07', 0, 0, 0),
(301, '2020-12-21', '00289', '8', 7, '336.66', '680', '110', '150', '1', '7', '2', '8', '1800', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-22 12:34:02', '2020-12-22 12:34:02', 0, 0, 0),
(302, '2020-12-21', '00290', '25', 7, '290.18', '590', '110', '150', '1', '7', '2', '8', '1800', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-22 12:34:55', '2020-12-23 07:15:03', NULL, 0, 0),
(303, '2020-12-21', '00291', '6', 7, '336.26', '680', '110', '150', '1', '7', '2', '8', '1800', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-22 12:41:04', '2020-12-22 12:41:04', 0, 0, 0),
(304, '2020-12-21', '00292', '18', 7, '292.28', '590', '110', '150', '1', '7', '2', '8', '2250', '0', '4', '0', '1', '122.175.152.77', 6, '2020-12-22 12:43:07', '2021-01-25 11:47:38', 4, 0, 0),
(305, '2020-12-21', '00293', '20', 7, '290.28', '590', '110', '150', '1', '7', '2', '8', '2150', NULL, '4', '0', '1', '122.168.106.199', 6, '2020-12-22 12:44:03', '2020-12-22 12:44:03', 0, 0, 0),
(306, '2020-12-21', '00294', '211', 7, '291.87', '591', '110', '150', '1', '7', '2', '8', '2450', NULL, '4', '0', '1', '122.168.106.199', 6, '2020-12-22 12:45:26', '2020-12-22 12:45:26', 0, 0, 0),
(307, '2020-12-21', '00295', '23', 7, '292.88', '590', '110', '150', '1', '7', '2', '8', '1800', NULL, '4', '0', '1', '122.168.106.199', 6, '2020-12-22 12:47:34', '2020-12-22 12:47:34', 0, 0, 0),
(308, '2020-12-22', '00296', '10', 7, '336.36', '680', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '122.168.106.199', 6, '2020-12-23 06:44:03', '2020-12-23 06:44:03', 0, 0, 0),
(309, '2020-12-19', '00297', '53', 7, '287.94', '580', '110', '150', '1', '3', '2', '4', '26000', '0', '6', '0', '1', '122.175.152.77', 6, '2020-12-23 06:49:11', '2021-01-25 10:16:12', 4, 0, 0),
(310, '2020-12-19', '00298', '40', 7, '336.86', '680', '110', '150', '1', '3', '2', '4', '2500', '0', '5', '0', '1', '122.175.152.77', 6, '2020-12-23 06:50:02', '2021-01-23 12:39:40', 4, 0, 0),
(311, '2020-12-21', '00299', '22', 7, '292.08', '590', '110', '150', '1', '3', '2', '4', '1825', '0', '3', '0', '1', '122.175.152.77', 6, '2020-12-23 06:57:41', '2021-01-23 12:40:21', 4, 0, 0),
(312, '2020-12-21', '00300', '21', 7, '286.24', '580', '110', '150', '1', '3', '2', '4', '2200', '0', '6', '0', '1', '122.175.152.77', 6, '2020-12-23 06:59:10', '2021-01-23 12:41:09', 4, 0, 0),
(313, '2020-12-21', '00301', '17', 7, '290.78', '590', '110', '150', '1', '3', '2', '4', '1825', '0', '6', '0', '1', '122.175.152.77', 6, '2020-12-23 06:59:48', '2021-01-23 12:41:54', 4, 0, 0),
(314, '2020-12-21', '00302', '66', 7, '295.62', '600', '110', '150', '1', '3', '2', '4', '2500', '0', '6', '0', '1', '122.175.152.77', 6, '2020-12-23 07:00:27', '2021-01-23 12:42:28', 4, 0, 0),
(315, '2020-12-21', '00303', '213', 7, '291.78', '590', '110', '150', '1', '3', '2', '4', '2500', '0', '3', '0', '1', '122.175.152.77', 6, '2020-12-23 07:01:00', '2021-01-23 12:43:17', 4, 0, 0),
(316, '2020-12-21', '00304', '54', 7, '341', '690', '110', '150', '1', '3', '2', '4', '26000', NULL, '5', '0', '1', '171.61.12.118', 5, '2020-12-23 07:02:05', '2021-01-11 08:45:11', 4, 0, 0),
(317, '2020-12-21', '00305', '156', 7, '287.24', '580', '110', '150', '1', '3', '2', '4', '26000', '0', '3', '0', '1', '110.224.199.247', 6, '2020-12-23 07:03:32', '2021-02-04 06:56:46', 4, 0, 0),
(318, '2020-12-22', '00306', '65', 7, '296.92', '600', '110', '150', '1', '3', '2', '4', '1500', '0', '6', '0', '1', '122.175.152.77', 6, '2020-12-23 07:05:54', '2021-01-25 10:15:28', 4, 0, 0),
(319, '2020-12-22', '00307', '19', 7, '287.34', '580', '110', '150', '1', '3', '2', '4', '2000', '0', '11', '0', '1', '122.175.152.77', 6, '2020-12-23 07:07:07', '2021-01-23 12:44:03', 4, 0, 0),
(320, '2020-12-16', '00308', '194', 7, '292.08', '590', '110', '150', '1', '6', '2', '4', '26000', NULL, '3', '0', '1', '122.168.106.199', 6, '2020-12-23 07:20:15', '2020-12-23 08:54:47', NULL, 0, 0),
(321, '2020-12-17', '00309', '172', 7, '297.02', '600', '110', '150', '1', '6', '2', '4', '26000', NULL, '3', '0', '1', '122.168.106.199', 6, '2020-12-23 07:22:51', '2020-12-23 07:22:51', 0, 0, 0),
(322, '2020-12-17', '00310', '136', 7, '247.70', '500', '110', '150', '1', '6', '2', '4', '26000', NULL, '3', '0', '1', '122.168.106.199', 6, '2020-12-23 07:24:25', '2020-12-23 07:24:25', 0, 0, 0),
(323, '2020-12-17', '00311', '195', 7, '299.32', '600', '110', '150', '1', '6', '2', '4', '26000', NULL, '3', '0', '1', '122.168.106.199', 6, '2020-12-23 07:25:07', '2020-12-23 07:25:07', 0, 0, 0),
(324, '2020-12-17', '00312', '196', 7, '299.22', '600', '110', '150', '1', '6', '2', '4', '26000', NULL, '3', '0', '1', '122.168.106.199', 6, '2020-12-23 07:26:45', '2020-12-23 07:26:45', 0, 0, 0),
(325, '2020-12-19', '00313', '170', 7, '298.22', '600', '110', '150', '1', '6', '2', '4', '26000', NULL, '3', '0', '1', '122.168.106.199', 6, '2020-12-23 07:28:41', '2020-12-23 07:28:41', 0, 0, 0),
(326, '2020-12-19', '00314', '221', 7, '245.36', '490', '110', '150', '1', '6', '2', '4', '26000', NULL, '3', '0', '1', '122.168.106.199', 6, '2020-12-23 07:29:26', '2020-12-23 07:29:26', 0, 0, 0),
(327, '2020-12-23', '00315', '11', 7, '337.76', '680', '110', '150', '1', '6', '2', '4', '1825', '0', '3', '0', '1', '122.175.152.77', 6, '2020-12-24 08:12:37', '2021-01-23 11:28:48', NULL, 0, 0),
(328, '2020-12-23', '00316', '45', 7, '337.56', '680', '110', '150', '1', '6', '2', '4', '2250', '0', '3', '0', '1', '122.175.152.77', 6, '2020-12-24 08:13:22', '2021-01-23 11:28:09', NULL, 0, 0),
(329, '2020-12-23', '00317', '41', 7, '336.06', '680', '110', '150', '1', '6', '2', '4', '1825', '0', '3', '0', '1', '122.175.152.77', 6, '2020-12-24 08:14:01', '2021-01-23 11:27:13', NULL, 0, 0),
(330, '2020-12-24', '00318', '172', 7, '296.42', '600', '110', '150', '1', '3', '2', '4', '26000', '0', '3', '0', '1', '110.224.199.247', 6, '2020-12-28 08:04:23', '2021-02-04 06:57:22', 4, 0, 0),
(331, '2020-12-24', '00319', '54', 7, '340.5', '690', '110', '150', '1', '3', '2', '4', '26000', '0', '5', '0', '1', '110.224.199.247', 6, '2020-12-28 08:05:03', '2021-02-04 06:58:07', 4, 0, 0),
(332, '2020-12-26', '00320', '8', 7, '335.26', '680', '110', '150', '1', '7', '2', '8', '2150', NULL, '4', '0', '1', '182.70.247.67', 6, '2020-12-28 08:15:00', '2020-12-28 08:15:00', 0, 0, 0),
(333, '2020-12-26', '00321', '213', 7, '291.38', '590', '110', '150', '1', '7', '2', '8', '1500', NULL, '4', '0', '1', '182.70.247.67', 6, '2020-12-28 08:15:40', '2020-12-28 08:15:40', 0, 0, 0),
(334, '2020-12-26', '00322', '211', 7, '291.48', '590', '110', '150', '1', '7', '2', '8', '2150', NULL, '4', '0', '1', '182.70.247.67', 6, '2020-12-28 08:16:37', '2020-12-28 08:16:37', 0, 0, 0),
(335, '2020-12-26', '00323', '23', 7, '284.74', '580', '110', '150', '1', '7', '2', '8', '1250', NULL, '4', '0', '1', '182.70.247.67', 6, '2020-12-28 08:17:43', '2020-12-28 08:17:43', 0, 0, 0),
(336, '2020-12-26', '00324', '209', 7, '290.98', '590', '110', '150', '1', '7', '2', '8', '1300', NULL, '4', '0', '1', '182.70.247.67', 6, '2020-12-28 08:19:37', '2020-12-28 08:19:37', 0, 0, 0),
(337, '2020-12-26', '00325', '40', 7, '333.56', '680', '110', '150', '1', '7', '2', '8', '2050', NULL, '4', '0', '1', '182.70.247.67', 6, '2020-12-28 08:22:16', '2020-12-28 08:22:16', 0, 0, 0),
(338, '2020-12-26', '00326', '10', 7, '337.26', '680', '110', '150', '1', '7', '2', '8', '2150', NULL, '4', '0', '1', '171.61.12.118', 5, '2020-12-28 08:23:28', '2021-01-11 08:23:47', NULL, 0, 0),
(339, '2020-12-26', '00327', '210', 7, '291.28', '590', '110', '150', '1', '7', '2', '8', '1800', NULL, '8', '0', '1', '182.70.247.67', 6, '2020-12-28 08:25:14', '2020-12-28 08:25:14', 0, 0, 0),
(340, '2020-12-26', '00328', '24', 7, '292.28', '590', '110', '150', '1', '7', '2', '8', '4200', NULL, '3', '0', '1', '182.70.247.67', 6, '2020-12-28 08:58:14', '2020-12-28 08:58:14', 0, 0, 0),
(341, '2020-12-26', '00329', '20', 7, '288.98', '590', '110', '150', '1', '7', '2', '8', '2050', NULL, '8', '0', '1', '182.70.247.67', 6, '2020-12-28 08:59:32', '2020-12-28 08:59:32', 0, 0, 0),
(342, '2020-12-26', '00330', '12', 7, '289.98', '590', '110', '150', '1', '7', '2', '8', '2000', NULL, '8', '0', '1', '182.70.247.67', 6, '2020-12-28 09:00:28', '2020-12-28 09:00:28', 0, 0, 0),
(343, '2020-12-26', '00331', '212', 7, '288.98', '590', '110', '150', '1', '7', '2', '8', '1800', NULL, '8', '0', '1', '182.70.247.67', 6, '2020-12-28 09:01:21', '2020-12-28 09:01:21', 0, 0, 0),
(344, '2020-12-26', '00332', '219', 7, '290.08', '590', '110', '150', '1', '7', '2', '8', '1200', NULL, '8', '0', '1', '182.70.247.67', 6, '2020-12-28 09:02:07', '2020-12-28 09:02:07', 0, 0, 0),
(345, '2020-12-26', '00333', '44', 7, '292.28', '590', '110', '150', '1', '7', '2', '8', '4200', NULL, '8', '0', '1', '182.70.247.67', 6, '2020-12-28 09:03:06', '2020-12-29 11:37:01', NULL, 0, 0),
(346, '2020-12-26', '00334', '42', 7, '332.26', '680', '110', '150', '1', '7', '2', '8', '1450', NULL, '8', '0', '1', '182.70.247.67', 6, '2020-12-28 09:04:18', '2020-12-28 09:04:18', 0, 0, 0),
(347, '2020-12-26', '00335', '18', 7, '286.94', '580', '110', '150', '1', '7', '2', '8', '2550', NULL, '8', '0', '1', '171.61.12.118', 5, '2020-12-28 09:05:56', '2021-01-11 08:26:06', NULL, 0, 0),
(348, '2020-12-26', '00336', '38', 7, '284.54', '580', '110', '150', '1', '7', '2', '8', '2250', NULL, '8', '0', '1', '182.70.247.67', 6, '2020-12-28 09:06:51', '2020-12-28 09:06:51', 0, 0, 0),
(349, '2020-12-26', '00337', '216', 7, '291.38', '590', '110', '150', '1', '7', '2', '8', '2200', NULL, '8', '0', '1', '182.70.247.67', 6, '2020-12-28 09:07:49', '2020-12-28 09:07:49', 0, 0, 0),
(350, '2020-12-26', '00338', '6', 7, '336.56', '680', '110', '150', '1', '7', '2', '8', '3100', NULL, '8', '0', '1', '182.70.247.67', 6, '2020-12-28 09:09:00', '2020-12-28 09:09:00', 0, 0, 0),
(351, '2020-12-26', '00339', '37', 7, '336.16', '680', '110', '150', '1', '7', '2', '8', '2250', '0', '8', '0', '1', '182.70.216.254', 6, '2020-12-28 09:11:52', '2021-01-12 07:35:38', NULL, 0, 0),
(352, '2020-12-26', '00340', '220', 7, '288.98', '590', '110', '150', '1', '7', '2', '8', '2300', '0', '8', '0', '1', '182.70.216.254', 6, '2020-12-28 09:12:37', '2021-01-12 07:34:57', 4, 0, 0),
(353, '2020-12-26', '00341', '214', 7, '292.98', '590', '110', '150', '1', '7', '2', '8', '1850', NULL, '8', '0', '1', '182.70.247.67', 6, '2020-12-28 09:18:36', '2020-12-28 09:18:36', 0, 0, 0),
(354, '2020-12-26', '00342', '43', 7, '338.86', '680', '110', '150', '1', '7', '2', '8', '1800', NULL, '8', '0', '1', '182.70.247.67', 6, '2020-12-28 09:19:19', '2020-12-28 09:19:19', 0, 0, 0),
(355, '2020-12-26', '00343', '39', 7, '290.9', '590', '110', '150', '1', '7', '2', '8', '2950', NULL, '8', '0', '1', '182.70.247.67', 6, '2020-12-28 09:20:41', '2020-12-28 09:20:41', 0, 0, 0),
(356, '2020-12-26', '00344', '232', 7, '291.38', '590', '110', '150', '1', '7', '2', '8', '3250', NULL, '8', '0', '1', '182.70.247.67', 6, '2020-12-28 09:21:29', '2020-12-28 09:21:29', 0, 0, 0),
(357, '2020-12-27', '00345', '25', 7, '292.98', '590', '110', '150', '1', '7', '2', '8', '2350', NULL, '8', '0', '1', '182.70.247.67', 6, '2020-12-28 09:23:08', '2020-12-28 09:23:08', 0, 0, 0),
(358, '2020-12-27', '00346', '22', 7, '288.34', '580', '110', '150', '1', '7', '2', '8', '3450', NULL, '8', '0', '1', '182.70.247.67', 6, '2020-12-28 09:23:56', '2020-12-29 11:42:34', NULL, 0, 0),
(359, '2020-12-27', '00347', '21', 7, '287.44', '580', '110', '150', '1', '7', '2', '8', '1500', NULL, '8', '0', '1', '182.70.247.67', 6, '2020-12-28 09:24:42', '2020-12-28 09:24:42', 0, 0, 0),
(360, '2020-12-27', '00348', '15', 7, '339.96', '680', '110', '150', '1', '7', '2', '8', '2200', NULL, '8', '0', '1', '182.70.247.67', 6, '2020-12-28 09:25:43', '2020-12-28 09:25:43', 0, 0, 0),
(361, '2020-12-27', '00349', '26', 7, '286.94', '580', '110', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '182.70.247.67', 6, '2020-12-28 09:26:34', '2020-12-28 09:26:34', 0, 0, 0),
(362, '2020-12-26', '00350', '171', 7, '242.16', '490', '110', '150', '1', '3', '2', '4', '26000', '0', '3', '0', '1', '110.224.199.247', 6, '2020-12-28 13:30:28', '2021-02-04 06:58:53', 4, 0, 0),
(363, '2020-12-28', '00351', '233', 7, '337.86', '680', '110', '150', '1', '7', '2', '8', '3150', NULL, '8', '0', '1', '182.70.247.67', 6, '2020-12-30 06:50:40', '2020-12-30 06:50:40', 0, 0, 0),
(364, '2020-12-29', '00352', '44', 7, '332.61', '670', '110', '150', '1', '7', '2', '8', '2350', NULL, '8', '0', '1', '49.36.42.136', 2, '2020-12-30 06:51:52', '2020-12-30 08:16:14', NULL, 0, 0),
(365, '2020-12-29', '00353', '8', 7, '326.87', '660', '110', '150', '1', '7', '2', '8', '2350', NULL, '8', '0', '1', '182.70.247.67', 6, '2020-12-30 06:52:53', '2020-12-30 06:52:53', 0, 0, 0),
(366, '2020-12-30', '00354', '54', 7, '341.40', '690', '110', '150', '1', '3', '2', '4', '26000', '0', '5', '0', '1', '110.224.199.247', 6, '2020-12-31 08:38:30', '2021-02-04 06:59:55', 4, 0, 0),
(367, '2020-12-31', '00355', '16', 7, '287.14', '580', '110', '150', '1', '3', '2', '4', '1600', '0', '11', '0', '1', '122.175.152.77', 6, '2021-01-02 08:43:49', '2021-01-23 12:44:44', 4, 0, 0),
(368, '2020-12-31', '00356', '13', 7, '332.19', '675', '110', '150', '1', '3', '2', '4', '1325', '0', '11', '0', '1', '122.175.152.77', 6, '2021-01-02 08:44:37', '2021-01-23 12:45:26', 4, 0, 0),
(369, '2020-12-31', '00357', '17', 7, '284.64', '580', '110', '150', '1', '3', '2', '4', '1000', '0', '11', '0', '1', '122.175.152.77', 6, '2021-01-02 10:00:50', '2021-01-23 12:46:05', 4, 0, 0),
(370, '2020-12-31', '00358', '45', 7, '335.56', '680', '110', '150', '1', '3', '2', '4', '1200', '0', '6', '0', '1', '122.175.152.77', 6, '2021-01-02 10:02:36', '2021-01-23 12:46:52', 4, 0, 0),
(371, '2020-12-31', '00359', '11', 7, '335.66', '680', '110', '150', '1', '3', '2', '4', '1100', '0', '11', '0', '1', '122.175.152.77', 6, '2021-01-06 07:48:16', '2021-01-23 12:47:39', 4, 0, 0),
(372, '2021-01-02', '00360', '19', 7, '286.74', '580', '120', '150', '1', '3', '2', '4', '2500', '0', '3', '0', '1', '110.224.199.247', 6, '2021-01-06 07:58:47', '2021-02-04 07:00:55', 4, 0, 0),
(373, '2021-01-02', '00361', '67', 7, '336.06', '680', '120', '150', '1', '3', '2', '4', '26000', '0', '5', '0', '1', '110.224.199.247', 6, '2021-01-06 07:59:41', '2021-02-04 07:02:06', 4, 0, 0),
(374, '2021-01-02', '00362', '41', 7, '336.66', '680', '120', '150', '1', '3', '2', '4', '2200', '0', '11', '0', '1', '110.224.199.247', 6, '2021-01-06 08:00:18', '2021-02-04 07:03:41', 4, 0, 0),
(375, '2021-01-04', '00363', '54', 7, '341', '690', '120', '150', '1', '3', '2', '4', '26000', '0', '5', '0', '1', '110.224.199.247', 6, '2021-01-06 08:01:07', '2021-02-04 07:04:59', 4, 0, 0),
(376, '2021-01-02', '00364', '9', 7, '338.06', '680', '115', '150', '1', '7', '2', '8', '2000', NULL, '8', '0', '1', '122.168.155.76', 6, '2021-01-06 08:05:29', '2021-01-06 08:05:29', 0, 0, 0),
(377, '2021-01-02', '00365', '36', 7, '337.66', '680', '115', '150', '1', '7', '2', '8', '1500', NULL, '8', '0', '1', '122.168.155.76', 6, '2021-01-06 08:06:24', '2021-01-06 08:06:24', 0, 0, 0),
(379, '2021-01-02', '00367', '215', 7, '287.64', '580', '115', '150', '1', '7', '2', '8', '2000', NULL, '8', '0', '1', '122.168.155.76', 6, '2021-01-06 08:07:43', '2021-01-06 08:07:43', 0, 0, 0),
(380, '2021-01-02', '00368', '22', 7, '290.88', '590', '115', '150', '1', '7', '2', '8', '2300', NULL, '8', '0', '1', '122.168.155.76', 6, '2021-01-06 08:08:19', '2021-01-06 08:08:19', 0, 0, 0),
(381, '2021-01-02', '00369', '222', 7, '289.88', '590', '115', '150', '1', '7', '2', '8', '2600', NULL, '8', '0', '1', '122.168.155.76', 6, '2021-01-06 08:08:57', '2021-01-06 08:08:57', 0, 0, 0),
(382, '2021-01-03', '00370', '65', 7, '289.58', '590', '115', '150', '1', '7', '2', '8', '10500', NULL, '8', '0', '1', '122.168.155.76', 6, '2021-01-06 08:09:35', '2021-01-06 08:19:33', NULL, 0, 0),
(383, '2021-01-05', '00371', '80', 7, '293.48', '590', '115', '150', '1', '7', '2', '8', '2000', NULL, '8', '0', '1', '122.168.155.76', 6, '2021-01-06 08:10:13', '2021-01-06 08:19:54', NULL, 0, 0),
(384, '2021-01-05', '00372', '76', 7, '292.98', '590', '115', '150', '1', '7', '2', '8', '2000', NULL, '8', '0', '1', '122.168.155.76', 6, '2021-01-06 08:10:53', '2021-01-06 08:20:08', NULL, 0, 0),
(385, '2021-01-05', '00373', '44', 7, '335.46', '680', '115', '150', '1', '7', '2', '8', '3050', NULL, '8', '0', '1', '122.168.155.76', 6, '2021-01-06 08:11:45', '2021-01-06 08:20:27', NULL, 0, 0),
(386, '2021-01-05', '00374', '8', 7, '334.36', '680', '115', '150', '1', '7', '2', '8', '3100', NULL, '8', '0', '1', '122.168.155.76', 6, '2021-01-06 08:12:20', '2021-01-06 08:20:46', NULL, 0, 0),
(387, '2021-01-05', '00375', '42', 7, '334.86', '680', '115', '150', '1', '7', '2', '8', '2850', NULL, '8', '0', '1', '122.168.155.76', 6, '2021-01-06 08:13:59', '2021-01-06 08:21:06', NULL, 0, 0),
(388, '2021-01-05', '00376', '36', 7, '338.06', '680', '115', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '122.168.155.76', 6, '2021-01-06 08:14:47', '2021-01-06 08:21:18', NULL, 0, 0),
(389, '2021-01-05', '00377', '9', 7, '338.06', '680', '115', '150', '1', '7', '2', '8', '2800', NULL, '8', '0', '1', '122.168.155.76', 6, '2021-01-06 08:15:39', '2021-01-06 08:21:33', NULL, 0, 0),
(390, '2021-01-05', '00378', '66', 7, '294.08', '590', '115', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '122.168.155.76', 6, '2021-01-06 08:16:26', '2021-01-06 08:21:50', NULL, 0, 0),
(391, '2021-01-05', '00379', '215', 7, '287.74', '580', '115', '150', '1', '7', '2', '8', '2150', NULL, '8', '0', '1', '122.175.170.162', 6, '2021-01-06 08:17:02', '2021-01-07 09:58:36', NULL, 0, 0),
(392, '2021-01-05', '00380', '222', 7, '287.34', '580', '115', '150', '1', '7', '2', '8', '2450', '0', '8', '0', '1', '110.224.199.247', 6, '2021-01-06 08:18:04', '2021-02-03 11:56:56', 4, 0, 0),
(393, '2021-01-02', '00381', '66', 7, '292.88', '590', '115', '150', '1', '7', '2', '8', '3200', '0', '8', '0', '1', '110.224.199.247', 6, '2021-01-06 08:27:37', '2021-02-03 11:53:52', 4, 0, 0),
(394, '2021-01-06', '00382', '16', 7, '286.04', '580', '115', '150', '1', '7', '2', '8', '1500', '0', '8', '0', '1', '110.224.199.247', 6, '2021-01-07 11:27:30', '2021-02-03 11:52:39', 4, 0, 0),
(395, '2021-01-06', '00383', '45', 7, '334.36', '680', '115', '150', '1', '7', '2', '8', '1500', '0', '8', '0', '1', '110.224.199.247', 6, '2021-01-07 11:29:00', '2021-02-03 11:51:06', 4, 0, 0),
(396, '2021-01-06', '00384', '11', 7, '337.06', '680', '115', '150', '1', '7', '2', '8', '1500', '0', '8', '0', '1', '110.224.199.247', 6, '2021-01-07 11:30:02', '2021-02-03 11:38:32', 4, 0, 0),
(397, '2021-01-06', '00385', '13', 7, '335.46', '680', '115', '150', '1', '7', '2', '8', '1500', '0', '8', '0', '1', '110.224.199.247', 6, '2021-01-07 11:30:50', '2021-02-03 11:37:28', 4, 0, 0),
(398, '2021-01-06', '00386', '38', 7, '288.04', '580', '115', '150', '1', '7', '2', '8', '2500', '0', '8', '0', '1', '110.224.199.247', 6, '2021-01-07 11:31:37', '2021-02-03 11:35:33', 4, 0, 0),
(399, '2021-01-06', '00387', '41', 7, '337.06', '680', '115', '150', '1', '7', '2', '8', '1500', NULL, '8', '0', '1', '122.175.170.162', 6, '2021-01-07 11:32:21', '2021-01-07 11:32:21', 0, 0, 0),
(400, '2021-01-06', '00388', '17', 7, '292.28', '590', '115', '150', '1', '7', '2', '8', '3300', '0', '8', '0', '1', '110.224.199.247', 6, '2021-01-07 12:10:05', '2021-02-03 11:34:30', 4, 0, 0),
(401, '2021-01-06', '00389', '37', 7, '335.56', '680', '115', '150', '1', '7', '2', '8', '2500', '0', '8', '0', '1', '110.224.199.247', 6, '2021-01-07 12:10:55', '2021-02-03 11:33:47', 4, 0, 0),
(402, '2021-01-06', '00390', '214', 7, '291.38', '590', '115', '150', '1', '7', '2', '8', '2500', '0', '8', '0', '1', '110.224.199.247', 6, '2021-01-07 12:11:49', '2021-02-03 11:32:58', 4, 0, 0),
(403, '2021-01-06', '00391', '209', 7, '290.68', '590', '115', '150', '1', '7', '2', '8', '2500', '0', '8', '0', '1', '110.224.199.247', 6, '2021-01-07 12:12:38', '2021-02-03 11:32:13', 4, 0, 0),
(404, '2021-01-06', '00392', '10', 7, '335.76', '680', '115', '150', '1', '7', '2', '8', '2950', '0', '8', '0', '1', '110.224.199.247', 6, '2021-01-07 12:13:29', '2021-02-03 11:31:26', 4, 0, 0),
(405, '2021-01-06', '00393', '219', 7, '292.18', '590', '115', '150', '1', '7', '2', '8', '2500', '0', '4', '0', '1', '110.224.199.247', 6, '2021-01-07 12:20:55', '2021-02-03 11:30:34', 4, 0, 0),
(406, '2021-01-06', '00394', '213', 7, '292.58', '590', '115', '150', '1', '7', '2', '8', '2500', '0', '4', '0', '1', '110.224.199.247', 6, '2021-01-07 12:21:36', '2021-02-03 11:28:22', 4, 0, 0),
(407, '2021-01-06', '00395', '212', 7, '290.78', '590', '115', '150', '1', '7', '2', '8', '2500', '0', '4', '0', '1', '110.224.199.247', 6, '2021-01-07 12:23:07', '2021-02-03 11:27:06', 4, 0, 0),
(408, '2021-01-06', '00396', '21', 7, '286.54', '580', '115', '150', '1', '7', '2', '8', '3850', '0', '4', '0', '1', '110.224.199.247', 6, '2021-01-07 12:24:33', '2021-02-03 11:26:11', 4, 0, 0),
(409, '2021-01-06', '00397', '19', 7, '291.08', '590', '115', '150', '1', '7', '2', '8', '1500', '0', '4', '0', '1', '110.224.199.247', 6, '2021-01-07 12:25:48', '2021-02-03 11:24:47', 4, 0, 0),
(410, '2021-01-06', '00398', '211', 7, '291.98', '590', '115', '150', '1', '7', '2', '8', '2850', NULL, '4', '0', '1', '122.175.170.162', 6, '2021-01-07 12:26:32', '2021-01-07 12:26:32', 0, 0, 0),
(411, '2021-01-06', '00399', '232', 7, '292.28', '590', '115', '150', '1', '7', '2', '8', '2500', '0', '4', '0', '1', '110.224.199.247', 6, '2021-01-07 12:28:31', '2021-02-03 11:19:50', 4, 0, 0),
(412, '2021-01-06', '00400', '233', 7, '336.48', '680', '115', '150', '1', '7', '2', '8', '2500', '0', '4', '0', '1', '110.224.199.247', 6, '2021-01-07 12:30:25', '2021-02-03 11:19:15', 4, 0, 0),
(413, '2021-01-06', '00401', '40', 7, '336.06', '680', '115', '150', '1', '7', '2', '8', '2500', '0', '4', '0', '1', '110.224.199.247', 6, '2021-01-07 12:31:04', '2021-02-03 11:18:27', 4, 0, 0),
(414, '2021-01-06', '00402', '220', 7, '291.78', '590', '115', '150', '1', '7', '2', '8', '3000', '0', '4', '0', '1', '110.224.199.247', 6, '2021-01-07 12:31:53', '2021-02-03 11:17:45', 4, 0, 0),
(415, '2021-01-04', '00403', '237', 8, '240', '600', '0', '0', '4', '10', '3', '9', '15', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-07 12:37:09', '2021-01-09 13:45:57', NULL, 0, 1),
(416, '2021-01-05', '00404', '32', 8, '240', '600', '0', '0', '4', '11', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-07 12:43:02', '2021-01-09 12:37:44', NULL, 0, 1),
(417, '2021-01-05', '00405', '241', 8, '240', '600', '0', '0', '4', '12', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-07 12:43:56', '2021-01-09 12:39:18', NULL, 0, 1),
(418, '2021-01-05', '00406', '30', 8, '240', '600', '0', '0', '4', '11', '3', '9', '0', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-07 12:45:05', '2021-01-16 10:09:03', NULL, 0, 1),
(419, '2021-01-05', '00407', '243', 8, '240', '600', '0', '0', '4', '12', '3', '9', '10', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-07 12:45:51', '2021-01-09 13:37:44', NULL, 0, 1),
(420, '2021-01-05', '00408', '242', 8, '240', '600', '0', '0', '4', '12', '3', '9', '0', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-07 12:54:39', '2021-01-16 10:07:40', NULL, 0, 1),
(421, '2021-01-05', '00409', '245', 8, '240', '600', '0', '0', '4', '13', '3', '9', '20', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-07 12:58:56', '2021-01-09 13:41:57', NULL, 0, 1),
(422, '2021-01-04', '00410', '236', 8, '240', '600', '0', '0', '4', '14', '3', '9', '15', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-07 13:03:59', '2021-01-09 13:49:26', NULL, 0, 1),
(423, '2021-01-04', '00411', '239', 8, '240', '600', '0', '0', '4', '10', '3', '9', '0', NULL, '10', '0', '0', '122.175.170.162', 5, '2021-01-07 13:07:13', '2021-01-07 13:07:13', 0, 0, 1),
(424, '2021-01-04', '00412', '33', 8, '240', '600', '0', '0', '4', '15', '3', '9', '0', NULL, '10', '0', '0', '122.175.170.162', 5, '2021-01-07 13:08:57', '2021-01-07 13:08:57', 0, 0, 1),
(425, '2021-01-06', '00413', '30', 8, '240', '600', '0', '0', '4', '16', '3', '9', '0', '20', '10', '0', '0', '122.175.152.77', 5, '2021-01-07 13:15:10', '2021-01-16 10:05:53', NULL, 0, 1),
(426, '2021-01-06', '00414', '35', 8, '240', '600', '0', '0', '4', '12', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-07 13:16:05', '2021-01-09 12:45:36', NULL, 0, 1),
(427, '2021-01-06', '00415', '244', 8, '240', '600', '0', '0', '4', '11', '3', '9', '50', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-07 13:16:53', '2021-01-09 14:03:55', NULL, 0, 1),
(428, '2021-01-06', '00416', '245', 8, '240', '600', '0', '0', '4', '11', '3', '9', NULL, '50', '10', '0', '0', '122.175.152.77', 5, '2021-01-07 13:17:36', '2021-01-16 10:03:38', NULL, 0, 1),
(429, '2021-01-06', '00417', '33', 8, '240', '600', '0', '0', '4', '11', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-07 13:18:15', '2021-01-09 12:47:30', NULL, 0, 1),
(430, '2021-01-06', '00418', '237', 8, '240', '600', '0', '0', '4', '11', '3', '9', '20', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-07 13:18:52', '2021-01-16 10:02:35', NULL, 0, 1),
(431, '2021-01-06', '00419', '242', 8, '240', '600', '0', '0', '4', '13', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-07 13:19:29', '2021-01-09 12:48:30', NULL, 0, 1),
(433, '2021-01-06', '00421', '49', 8, '240', '600', '0', '0', '4', '13', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-07 13:21:39', '2021-01-11 07:30:49', NULL, 0, 1),
(434, '2021-01-06', '00422', '241', 8, '240', '600', '0', '0', '4', '11', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-07 13:23:37', '2021-01-09 12:50:48', NULL, 0, 1),
(435, '2021-01-06', '00423', '27', 8, '220', '550', '0', '0', '4', '11', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-07 13:24:47', '2021-01-09 12:51:25', NULL, 0, 1),
(436, '2021-01-06', '00424', '50', 8, '240', '600', '0', '0', '4', '11', '3', '9', '10', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-07 13:25:24', '2021-01-11 08:33:57', NULL, 0, 1),
(437, '2021-01-06', '00425', '235', 8, '220', '550', '0', '0', '4', '11', '3', '9', '50', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-07 13:28:04', '2021-01-09 14:06:18', NULL, 0, 1),
(438, '2021-01-06', '00426', '246', 8, '240', '600', '0', '0', '4', '13', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-07 13:29:03', '2021-01-08 07:39:23', NULL, 0, 1),
(439, '2021-01-06', '00427', '35', 8, '240', '600', '0', '0', '4', '17', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-07 13:30:24', '2021-01-09 12:53:27', NULL, 0, 1),
(440, '2021-01-06', '00428', '30', 8, '240', '600', '0', '0', '4', '11', '3', '9', '50', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-07 13:32:32', '2021-01-09 13:18:37', NULL, 0, 1),
(441, '2021-01-06', '00429', '49', 8, '240', '600', '0', '0', '4', '11', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-07 13:33:18', '2021-01-09 12:54:57', NULL, 0, 1),
(442, '2021-01-04', '00430', '49', 8, '240', '600', '0', '0', '4', '10', '3', '9', '0', '15', '10', '0', '0', '122.175.152.77', 5, '2021-01-08 06:16:52', '2021-01-16 09:48:09', NULL, 0, 1),
(443, '2021-01-04', '00431', '240', 8, '240', '600', '0', '0', '4', '19', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-08 06:30:24', '2021-01-08 06:30:24', 0, 0, 1),
(444, '2021-01-04', '00432', '242', 8, '240', '600', '0', '0', '4', '13', '3', '9', '0', NULL, '10', '0', '1', '171.61.12.118', 5, '2021-01-08 06:36:40', '2021-01-08 06:36:40', 0, 0, 1),
(445, '2021-01-04', '00433', '35', 8, '240', '600', '0', '0', '4', '20', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-08 06:39:46', '2021-01-09 12:33:34', NULL, 0, 1),
(446, '2021-01-04', '00434', '244', 8, '240', '600', '0', '0', '4', '19', '3', '9', '15', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-08 06:41:30', '2021-01-09 13:51:39', NULL, 0, 1),
(447, '2021-01-04', '00435', '238', 8, '240', '600', '0', '0', '4', '10', '3', '9', '15', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-08 06:42:45', '2021-01-09 13:52:26', NULL, 0, 1),
(448, '2021-01-04', '00436', '235', 8, '240', '600', '0', '0', '4', '14', '3', '9', '10', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-08 06:44:13', '2021-01-09 13:53:33', NULL, 0, 1),
(449, '2021-01-04', '00437', '234', 8, '240', '600', '0', '0', '4', '19', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-08 06:45:41', '2021-01-08 06:45:41', 0, 0, 1),
(451, '2021-01-04', '00439', '28', 8, '240', '600', '0', '0', '4', '20', '3', '9', '0', '15', '10', '0', '0', '122.175.152.77', 5, '2021-01-08 06:54:00', '2021-01-16 09:44:01', NULL, 0, 1),
(452, '2021-01-06', '00440', '236', 8, '224', '560', '0', '0', '4', '11', '3', '9', '50', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-08 07:02:16', '2021-01-09 14:03:03', NULL, 0, 1),
(453, '2021-01-06', '00441', '249', 8, '240', '600', '0', '0', '4', '11', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-08 07:21:05', '2021-01-08 07:21:05', 0, 0, 1),
(454, '2021-01-06', '00442', '329', 8, '200', '500', '0', '0', '4', '18', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-08 07:44:20', '2021-01-09 11:30:28', NULL, 0, 1),
(455, '2021-01-06', '00443', '27', 8, '240', '600', '0', '0', '4', '14', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-08 07:45:32', '2021-01-08 07:45:32', 0, 0, 1),
(456, '2021-01-07', '00444', '44', 7, '337.26', '680', '115', '150', '1', '7', '2', '8', '2350', '0', '8', '0', '1', '110.224.199.247', 6, '2021-01-08 13:35:42', '2021-02-03 11:17:06', 4, 0, 0),
(457, '2021-01-07', '00445', '12', 7, '292.18', '590', '115', '150', '1', '7', '2', '8', '2700', '0', '8', '0', '1', '122.175.246.186', 6, '2021-01-08 13:36:31', '2021-01-26 07:24:24', 4, 0, 0),
(458, '2021-01-07', '00446', '24', 7, '292.68', '590', '115', '150', '1', '7', '2', '8', '2500', '0', '8', '0', '1', '110.224.199.247', 6, '2021-01-08 13:37:27', '2021-02-03 07:51:13', 4, 0, 0),
(459, '2021-01-07', '00447', '23', 7, '287.74', '580', '115', '150', '1', '7', '2', '8', '3850', '0', '8', '0', '1', '110.224.199.247', 6, '2021-01-08 13:40:02', '2021-02-03 07:49:58', 4, 0, 0),
(460, '2021-01-06', '00448', '43', 7, '336.16', '680', '122', '150', '1', '3', '2', '4', '2650', NULL, '11', '0', '1', '122.175.152.77', 6, '2021-01-08 13:57:20', '2021-01-23 07:22:49', 4, 0, 0),
(461, '2021-01-06', '00449', '67', 7, '336.26', '680', '122', '150', '1', '3', '2', '4', '26000', '0', '5', '0', '1', '110.224.199.247', 6, '2021-01-08 13:58:18', '2021-02-04 07:05:52', 4, 0, 0),
(462, '2021-01-06', '00450', '314', 7, '291.68', '590', '122', '150', '1', '3', '2', '4', '26000', '0', '11', '0', '1', '122.175.152.77', 6, '2021-01-08 13:59:26', '2021-01-23 07:37:41', 4, 0, 0),
(463, '2021-01-04', '00451', '327', 8, '240', '600', '0', '0', '4', '15', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-09 11:18:23', '2021-01-09 11:18:23', 0, 0, 1),
(464, '2021-01-04', '00452', '326', 8, '240', '600', '0', '0', '4', '15', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-09 11:21:34', '2021-01-09 11:21:34', 0, 0, 1),
(465, '2021-01-04', '00453', '330', 8, '240', '600', '0', '0', '4', '15', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-09 11:22:35', '2021-01-09 11:22:35', 0, 0, 1),
(466, '2021-01-04', '00454', '249', 8, '240', '600', '0', '0', '4', '19', '3', '9', '15', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-09 11:24:15', '2021-01-09 14:01:55', NULL, 0, 1),
(467, '2021-01-05', '00455', '326', 8, '240', '600', '0', '0', '4', '13', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-09 11:25:20', '2021-01-09 12:44:16', NULL, 0, 1),
(468, '2021-01-07', '00456', '326', 8, '240', '600', '0', '0', '4', '17', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-09 11:33:07', '2021-01-09 11:33:07', 0, 0, 1),
(469, '2021-01-07', '00457', '327', 8, '240', '600', '0', '0', '4', '18', '3', '9', '0', NULL, '10', '00', '0', '171.61.12.118', 5, '2021-01-09 11:34:13', '2021-01-09 11:34:13', 0, 0, 1),
(470, '2021-01-07', '00458', '30', 8, '240', '600', '0', '0', '4', '17', '3', '9', NULL, NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-09 11:35:16', '2021-01-09 13:14:52', NULL, 0, 1),
(471, '2021-01-07', '00459', '244', 8, '240', '600', '0', '0', '4', '15', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-09 11:36:33', '2021-01-09 11:37:28', NULL, 0, 1),
(472, '2021-01-07', '00460', '28', 8, '240', '600', '0', '0', '4', '21', '3', '9', '50', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-09 11:38:54', '2021-01-09 13:20:20', NULL, 0, 1),
(473, '2021-01-07', '00461', '50', 8, '240', '600', '0', '0', '4', '18', '3', '9', '50', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-09 11:39:47', '2021-01-09 13:20:46', NULL, 0, 1),
(474, '2021-01-07', '00462', '241', 8, '240', '600', '0', '0', '4', '17', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-09 11:40:38', '2021-01-09 11:40:38', 0, 0, 1),
(475, '2021-01-07', '00463', '234', 8, '240', '600', '0', '0', '4', '21', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-09 11:41:35', '2021-01-09 11:41:35', 0, 0, 1),
(476, '2021-01-07', '00464', '31', 8, '220', '550', '0', '0', '4', '13', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-09 11:43:00', '2021-01-09 11:43:00', 0, 0, 1),
(477, '2021-01-07', '00465', '235', 8, '220', '550', '0', '0', '4', '18', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-09 11:43:50', '2021-01-09 11:43:50', 0, 0, 1),
(478, '2021-01-07', '00466', '238', 8, '240', '600', '0', '0', '4', '21', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-09 11:44:40', '2021-01-09 11:44:40', 0, 0, 1),
(479, '2021-01-07', '00467', '249', 8, '240', '600', '0', '0', '4', '13', '3', '9', '50', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-09 11:45:51', '2021-01-09 13:21:41', NULL, 0, 1),
(480, '2021-01-07', '00468', '245', 8, '240', '600', '0', '0', '4', '22', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-09 11:47:07', '2021-01-09 11:47:07', 0, 0, 1),
(481, '2021-01-07', '00469', '246', 8, '240', '600', '0', '0', '4', '11', '3', '9', '50', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-09 11:48:10', '2021-01-09 13:22:26', NULL, 0, 1),
(482, '2021-01-08', '00470', '330', 8, '240', '600', '0', '0', '4', '15', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-09 11:52:40', '2021-01-09 11:53:59', NULL, 0, 1),
(483, '2021-01-08', '00471', '33', 8, '240', '600', '0', '0', '4', '22', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-09 11:56:26', '2021-01-09 11:57:13', NULL, 0, 1),
(484, '2021-01-08', '00472', '14', 8, '240', '600', '0', '0', '4', '13', '3', '9', '0', '50', '10', '0', '0', '122.175.152.77', 5, '2021-01-09 11:58:29', '2021-01-16 09:35:27', NULL, 0, 1),
(485, '2021-01-08', '00473', '249', 8, '240', '600', '0', '0', '4', '21', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-09 11:59:36', '2021-01-09 11:59:36', 0, 0, 1),
(486, '2021-01-08', '00474', '30', 8, '240', '600', '0', '0', '4', '15', '3', '9', '50', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-09 12:06:07', '2021-01-09 13:05:05', NULL, 0, 1),
(487, '2021-01-08', '00475', '245', 8, '240', '600', '0', '0', '4', '13', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-09 12:07:27', '2021-01-09 12:07:27', 0, 0, 1),
(488, '2021-01-08', '00476', '237', 8, '240', '600', '0', '0', '4', '15', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-09 12:08:20', '2021-01-09 12:08:20', 0, 0, 1),
(489, '2021-01-08', '00477', '35', 8, '240', '600', '0', '0', '4', '13', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-09 12:09:56', '2021-01-09 12:09:56', 0, 0, 1),
(490, '2021-01-08', '00478', '28', 8, '239.6', '599', '0', '0', '4', '16', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-09 12:11:21', '2021-01-09 12:11:21', 0, 0, 1),
(491, '2021-01-08', '00479', '31', 8, '220', '550', '0', '0', '4', '16', '3', '9', '50', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-09 12:12:21', '2021-01-09 13:04:39', NULL, 0, 1),
(492, '2021-01-08', '00480', '50', 8, '240', '600', '0', '0', '4', '16', '3', '9', '10', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-09 12:13:23', '2021-01-16 09:30:28', NULL, 0, 1),
(493, '2021-01-08', '00481', '49', 8, '240', '600', '0', '0', '4', '6', '3', '9', '0', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-09 12:15:19', '2021-01-16 09:30:58', NULL, 0, 1),
(494, '2021-01-08', '00482', '28', 8, '240', '600', '0', '0', '4', '20', '3', '9', '0', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-09 12:17:09', '2021-01-16 09:31:45', NULL, 0, 1),
(495, '2021-01-08', '00483', '241', 8, '240', '600', '0', '0', '4', '23', '3', '9', '0', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-09 12:18:37', '2021-01-16 09:32:04', NULL, 0, 1),
(496, '2021-01-08', '00484', '331', 8, '200', '500', '0', '0', '4', '23', '3', '9', '0', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-09 12:24:42', '2021-01-16 09:32:26', NULL, 0, 1),
(497, '2021-01-08', '00485', '332', 8, '220', '550', '0', '0', '4', '16', '3', '9', '0', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-09 12:25:49', '2021-01-16 09:08:33', NULL, 0, 1),
(498, '2021-01-04', '00486', '51', 8, '240', '600', '0', '0', '4', '14', '3', '9', '10', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-09 13:58:15', '2021-01-16 09:08:08', NULL, 0, 1),
(499, '2021-01-08', '00487', '51', 13, '240', '600', '0', '0', '4', '24', '3', '9', '0', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 06:33:28', '2021-01-16 09:05:49', NULL, 0, 0),
(500, '2021-01-08', '00488', '31', 8, '0', '40', '0', '0', '4', '9', '3', '9', '0', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 06:36:03', '2021-01-16 09:05:02', 4, 0, 0),
(502, '2021-01-08', '00490', '30', 14, '0', '40', '0', '0', '4', '9', '3', '9', '0', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 06:38:58', '2021-01-16 09:04:09', NULL, 0, 0),
(503, '2021-01-08', '00491', '245', 14, '0', '40', '0', '0', '4', '9', '3', '9', '50', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 06:40:20', '2021-01-16 09:03:00', NULL, 0, 0),
(504, '2021-01-08', '00492', '246', 14, '0', '40', '0', '0', '4', '9', '3', '9', '0', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 06:42:13', '2021-01-16 08:50:02', NULL, 0, 0),
(505, '2021-01-08', '00493', '49', 13, '40', '600', '0', '0', '4', '21', '3', '9', '0', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 06:44:12', '2021-01-16 08:50:30', NULL, 0, 0),
(506, '2021-01-06', '00494', '28', 13, '240', '600', '0', '0', '4', '18', '3', '9', '25', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 06:52:32', '2021-01-16 08:50:57', NULL, 0, 0),
(507, '2021-01-06', '00495', '51', 11, '0', '40', '0', '0', '4', '9', '3', '9', '50', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 06:56:14', '2021-01-16 08:58:32', NULL, 0, 0),
(508, '2021-01-06', '00496', '245', 13, '240', '600', '0', '0', '4', '22', '3', '9', '50', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 07:13:26', '2021-01-16 08:58:06', NULL, 0, 0),
(509, '2021-01-07', '00497', '30', 8, '240', '600', '0', '0', '4', '15', '3', '9', '0', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 13:45:22', '2021-01-16 08:57:36', 6, 0, 0),
(510, '2021-01-07', '00498', '28', 8, '240', '600', '0', '0', '4', '15', '3', '9', '0', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 13:50:34', '2021-01-16 08:57:11', 6, 0, 0),
(511, '2021-01-07', '00499', '50', 8, '240', '600', '0', '0', '4', '16', '3', '9', '0', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 13:52:04', '2021-01-16 08:56:39', NULL, 0, 0),
(512, '2021-01-07', '00500', '245', 13, '240', '600', '0', '0', '4', '21', '3', '9', '0', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 13:53:31', '2021-01-16 08:56:15', 6, 0, 0),
(513, '2021-01-04', '00501', '249', 11, '0', '40', '0', '0', '4', '9', '3', '9', '0', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 13:55:43', '2021-01-16 08:55:46', NULL, 0, 0),
(514, '2021-01-04', '00502', '50', 13, '240', '600', '0', '0', '4', '9', '3', '9', '0', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 13:57:03', '2021-01-16 08:54:40', NULL, 0, 0),
(515, '2021-01-05', '00503', '49', 13, '270', '540', '0', '0', '4', '25', '3', '9', '55', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 13:58:47', '2021-01-16 08:54:11', NULL, 0, 0),
(516, '2021-01-05', '00504', '51', 13, '270', '540', '0', '0', '4', '25', '3', '9', '55', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 14:02:24', '2021-01-16 08:53:42', NULL, 0, 0),
(517, '2021-01-05', '00505', '249', 14, '0', '40', '0', '0', '4', '9', '3', '9', '20', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 14:05:53', '2021-01-16 08:53:11', NULL, 0, 0),
(518, '2021-01-05', '00506', '28', 13, '260', '520', '0', '0', '4', '25', '3', '9', '55', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 14:10:57', '2021-01-16 08:52:43', NULL, 0, 0),
(519, '2021-01-05', '00507', '245', 13, '270', '540', '0', '0', '4', '25', '3', '9', '55', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 14:13:57', '2021-01-16 08:51:40', NULL, 0, 0),
(520, '2021-01-05', '00508', '30', 13, '270', '540', '0', '0', '4', '25', '3', '9', '55', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 14:15:25', '2021-01-14 13:55:50', NULL, 0, 0),
(521, '2021-01-05', '00509', '31', 13, '275', '550', '0', '0', '4', '25', '3', '9', '55', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 14:17:36', '2021-01-14 13:56:15', NULL, 0, 0),
(522, '2021-01-05', '00510', '50', 13, '270', '540', '0', '0', '4', '25', '3', '9', '55', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 14:20:19', '2021-01-14 13:56:44', NULL, 0, 0),
(523, '2021-01-07', '00511', '235', 8, '0', '600', '0', '0', '4', '22', '3', '9', '0', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 14:45:57', '2021-01-14 13:57:13', NULL, 0, 0),
(524, '2021-01-07', '00512', '234', 8, '0', '600', '0', '0', '4', '22', '3', '9', '0', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 14:55:54', '2021-01-14 13:57:37', NULL, 0, 0),
(525, '2021-01-07', '00513', '238', 8, '0', '600', '0', '0', '4', '22', '3', '9', '0', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 15:07:59', '2021-01-14 13:57:56', NULL, 0, 0),
(526, '2021-01-07', '00514', '244', 8, '0', '600', '0', '0', '4', '21', '3', '9', '0', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 15:09:23', '2021-01-14 13:58:16', NULL, 0, 0),
(527, '2021-01-07', '00515', '236', 8, '0', '600', '0', '0', '4', '22', '3', '9', '0', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 15:10:36', '2021-01-14 13:58:50', NULL, 0, 0),
(528, '2021-01-07', '00516', '235', 8, '0', '600', '0', '0', '4', '22', '3', '9', '0', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 15:12:52', '2021-01-14 13:59:18', NULL, 0, 0),
(529, '2021-01-07', '00517', '234', 8, '0', '600', '0', '0', '4', '21', '3', '9', '0', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 15:14:18', '2021-01-14 13:59:43', NULL, 0, 0),
(530, '2021-01-07', '00518', '237', 11, '0', '40', '0', '0', '4', '9', '3', '9', '0', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 15:15:52', '2021-01-14 14:00:10', NULL, 0, 0),
(531, '2021-01-06', '00519', '234', 8, '242.80', '600', '0', '0', '4', '13', '3', '9', '0', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 15:19:42', '2021-01-14 14:00:34', NULL, 0, 0),
(532, '2021-01-06', '00520', '234', 8, '245', '600', '0', '0', '4', '11', '3', '9', '50', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 15:21:20', '2021-01-14 14:02:28', 4, 0, 0),
(533, '2021-01-06', '00521', '244', 11, '0', '40', '0', '0', '4', '15', '3', '9', '0', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 15:23:02', '2021-01-14 14:02:58', NULL, 0, 0),
(534, '2021-01-06', '00522', '238', 8, '0', '600', '0', '0', '4', '22', '3', '9', '0', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 15:24:42', '2021-01-14 14:03:27', NULL, 0, 0),
(535, '2021-01-05', '00523', '234', 11, '0', '17', '0', '0', '4', '13', '3', '9', '20', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 15:27:20', '2021-01-14 14:03:48', NULL, 0, 0),
(536, '2021-01-05', '00524', '238', 8, '250.80', '500', '0', '0', '4', '25', '3', '9', '55', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 15:29:43', '2021-01-14 14:07:32', NULL, 0, 0),
(537, '2021-01-05', '00525', '244', 8, '0', '500', '0', '0', '4', '25', '3', '9', '55', NULL, '10', '0', '0', '157.34.16.92', 5, '2021-01-10 15:31:27', '2021-01-10 15:31:27', 0, 0, 1),
(538, '2021-01-05', '00526', '237', 8, '0', '500', '0', '0', '4', '25', '3', '9', '55', NULL, '10', '0', '0', '157.34.16.92', 5, '2021-01-10 15:33:21', '2021-01-10 15:33:21', 0, 0, 1),
(539, '2021-01-05', '00527', '235', 8, '0', '500', '0', '0', '4', '25', '3', '9', '55', NULL, '10', '0', '0', '157.34.16.92', 5, '2021-01-10 15:34:46', '2021-01-10 15:34:46', 0, 0, 1),
(540, '2021-01-05', '00528', '236', 8, '0', '500', '0', '0', '4', '25', '3', '9', '55', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 15:36:00', '2021-01-14 12:30:37', NULL, 0, 1),
(541, '2021-01-04', '00529', '241', 13, '0', '600', '0', '0', '4', '14', '3', '9', '35', NULL, '10', '0', '0', '182.70.211.25', 5, '2021-01-10 15:39:46', '2021-01-14 12:10:39', NULL, 0, 1),
(542, '2021-01-04', '00530', '32', 13, '240', '600', '0', '0', '4', '14', '3', '9', '0', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 15:41:14', '2021-01-14 12:28:09', NULL, 0, 1),
(543, '2021-01-04', '00531', '243', 13, '240', '600', '0', '0', '4', '22', '3', '9', '0', NULL, '10', '0', '0', '182.70.211.25', 5, '2021-01-10 15:42:44', '2021-01-14 12:09:15', NULL, 0, 1),
(544, '2021-01-04', '00532', '243', 13, '0', '450', '0', '0', '4', '20', '3', '9', '0', NULL, '10', '0', '0', '182.70.211.25', 5, '2021-01-10 15:43:49', '2021-01-14 12:08:45', NULL, 0, 1),
(545, '2021-01-05', '00533', '27', 8, '220.10', '440', '0', '0', '4', '25', '3', '9', '0', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 15:47:48', '2021-01-16 10:31:55', NULL, 0, 0),
(546, '2021-01-05', '00534', '32', 8, '0', '500', '0', '0', '4', '25', '3', '9', '0', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 15:49:02', '2021-01-16 10:31:18', NULL, 0, 0),
(547, '2021-01-05', '00535', '33', 8, '251.70', '500', '0', '0', '4', '25', '3', '9', '0', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 15:50:20', '2021-01-16 10:30:54', NULL, 0, 0),
(548, '2021-01-05', '00536', '243', 8, '0', '500', '0', '0', '4', '25', '3', '9', '55', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 15:51:51', '2021-01-16 10:30:15', NULL, 0, 0),
(549, '2021-01-05', '00537', '35', 8, '0', '500', '0', '0', '4', '25', '3', '9', '0', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 15:53:18', '2021-01-16 10:29:48', NULL, 0, 0),
(550, '2021-01-05', '00538', '241', 8, '251.20', '500', '0', '0', '4', '25', '3', '9', '0', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 15:55:21', '2021-01-16 10:29:23', NULL, 0, 0),
(551, '2021-01-05', '00539', '243', 8, '0', '525', '0', '0', '4', '12', '3', '9', '0', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 15:56:56', '2021-01-16 10:28:55', NULL, 0, 0),
(552, '2021-01-05', '00540', '242', 8, '240', '600', '0', '0', '4', '12', '3', '9', '0', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 15:58:04', '2021-01-16 10:22:53', 4, 0, 0),
(553, '2021-01-05', '00541', '242', 11, '0', '40', '0', '0', '4', '9', '3', '9', '0', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 15:59:28', '2021-01-16 10:20:18', NULL, 0, 0),
(554, '2021-01-05', '00542', '240', 8, '0', '500', '0', '0', '4', '25', '3', '9', '0', NULL, '10', '0', '0', '122.175.152.77', 5, '2021-01-10 16:00:28', '2021-01-16 10:19:07', NULL, 0, 0),
(558, '2021-01-08', '00543', '244', 8, '0', '600', '0', '0', '4', '27', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-11 06:06:20', '2021-01-11 06:06:20', 0, 0, 1),
(559, '2021-01-08', '00544', '239', 8, '0', '0', '0', '0', '4', '28', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-11 06:08:12', '2021-01-11 06:08:12', 0, 0, 0),
(560, '2021-01-08', '00545', '236', 8, '0', '290', '0', '0', '4', '29', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-11 06:09:57', '2021-01-11 06:09:57', 0, 0, 0),
(561, '2021-01-08', '00546', '238', 11, '0', '40', '0', '0', '4', '14', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-11 06:11:22', '2021-01-11 06:11:22', 0, 0, 0),
(562, '2021-01-08', '00547', '237', 11, '0', '40', '0', '0', '4', '23', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-11 06:12:18', '2021-01-11 06:12:18', 0, 0, 0),
(563, '2021-01-08', '00548', '238', 11, '0', '40', '0', '0', '4', '22', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-11 06:14:27', '2021-01-11 06:14:27', 0, 0, 0),
(564, '2021-01-09', '00549', '246', 14, '0', '40', '0', '0', '4', '9', '3', '9', '50', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-11 06:15:49', '2021-01-11 06:19:06', NULL, 0, 0);
INSERT INTO `loading_entries` (`id`, `loading_date`, `loading_no`, `vehicle_no`, `item_master`, `weight`, `bag`, `freight_rate`, `commision_rate`, `consignor`, `from_place`, `consignee`, `to_plce`, `diesel_advance`, `diesel_advance_ltr`, `pentrol_pump`, `cash_advance`, `status`, `ipaddress`, `createdby`, `created_at`, `updated_at`, `hemal`, `hema_rate`, `loading_type`) VALUES
(565, '2021-01-09', '00550', '31', 8, '240', '600', '0', '0', '4', '20', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-11 06:18:05', '2021-01-11 07:31:44', NULL, 0, 0),
(566, '2021-01-09', '00551', '49', 8, '240', '600', '0', '0', '4', '20', '3', '9', '50', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-11 06:22:52', '2021-01-11 06:22:52', 0, 0, 0),
(567, '2021-01-09', '00552', '30', 8, '240', '600', '0', '0', '4', '15', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-11 06:27:14', '2021-01-11 06:27:14', 0, 0, 0),
(568, '2021-01-09', '00553', '51', 8, '0', '0', '0', '0', '4', '30', '3', '9', '50', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-11 06:29:52', '2021-01-11 06:29:52', 0, 0, 0),
(569, '2021-01-09', '00554', '249', 8, '0', '0', '0', '0', '4', '20', '3', '9', '50', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-11 06:31:51', '2021-01-11 06:31:51', 0, 0, 0),
(570, '2021-01-09', '00555', '239', 8, '0', '290', '0', '0', '4', '29', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-11 06:39:04', '2021-01-11 06:39:04', 0, 0, 0),
(571, '2021-01-09', '00556', '236', 13, '0', '600', '0', '0', '4', '31', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-11 06:41:42', '2021-01-11 06:41:42', 0, 0, 0),
(572, '2021-01-09', '00557', '244', 13, '0', '450', '0', '0', '4', '26', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-11 06:44:33', '2021-01-11 06:44:33', 0, 0, 0),
(573, '2021-01-09', '00558', '236', 8, '0', '290', '0', '0', '4', '29', '3', '9', '10', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-11 06:45:45', '2021-01-11 06:45:45', 0, 0, 0),
(574, '2021-01-09', '00559', '235', 13, '0', '600', '0', '0', '4', '33', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-11 06:47:54', '2021-01-11 06:47:54', 0, 0, 0),
(575, '2021-01-09', '00560', '237', 13, '0', '600', '0', '0', '4', '34', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-11 06:49:33', '2021-01-11 06:49:33', 0, 0, 0),
(576, '2021-01-09', '00561', '234', 13, '0', '600', '0', '0', '4', '33', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-11 06:51:05', '2021-01-11 06:51:05', 0, 0, 0),
(577, '2021-01-09', '00562', '236', 13, '0', '600', '0', '0', '4', '34', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-11 06:51:57', '2021-01-11 06:51:57', 0, 0, 0),
(578, '2021-01-09', '00563', '326', 8, '240', '600', '0', '0', '4', '35', '3', '9', '0', NULL, '10', '0', '0', '171.61.12.118', 5, '2021-01-11 06:57:30', '2021-01-11 06:57:30', 0, 0, 1),
(579, '2021-01-06', '00564', '31', 8, '240', '600', '0', '0', '4', '26', '3', '9', '0', NULL, '10', '0', '0', '182.70.211.25', 5, '2021-01-11 06:58:59', '2021-01-14 12:07:18', NULL, 0, 1),
(580, '2021-01-06', '00565', '241', 13, '240', '600', '0', '0', '4', '22', '3', '9', '0', '50', '10', '0', '0', '171.61.12.118', 5, '2021-01-11 10:16:08', '2021-01-11 10:18:51', 4, 0, 0),
(581, '2021-01-06', '00566', '242', 13, '240', '600', '0', '0', '4', '22', '3', '9', '0', '0', '10', '0', '0', '171.61.12.118', 5, '2021-01-11 10:21:30', '2021-01-11 10:21:30', 4, 0, 0),
(582, '2021-01-06', '00567', '27', 13, '240', '600', '0', '0', '4', '21', '3', '9', '0', '0', '0', '0', '0', '171.61.12.118', 5, '2021-01-11 11:25:29', '2021-01-11 11:25:29', 0, 0, 0),
(583, '2021-01-06', '00568', '35', 13, '240', '600', '0', '0', '4', '22', '3', '9', '0', '0', '0', '0', '0', '171.61.12.118', 5, '2021-01-11 11:26:42', '2021-01-11 11:26:42', 0, 0, 0),
(584, '2021-01-06', '00569', '242', 13, '240', '600', '0', '0', '4', '22', '3', '9', '0', '0', '0', '0', '0', '171.61.12.118', 5, '2021-01-11 11:28:25', '2021-01-11 11:28:25', 4, 0, 0),
(585, '2021-01-06', '00570', '241', 13, '240', '600', '0', '0', '4', '22', '3', '9', '0', '0', '0', '0', '0', '171.61.12.118', 5, '2021-01-11 11:29:51', '2021-01-11 11:29:51', 4, 0, 0),
(586, '2021-01-06', '00571', '243', 13, '240', '600', '0', '0', '4', '17', '3', '9', '0', '0', '10', '0', '0', '171.61.12.118', 5, '2021-01-11 11:31:11', '2021-01-11 11:31:11', 4, 0, 0),
(587, '2021-01-07', '00572', '242', 8, '220', '550', '0', '0', '4', '1', '3', '9', '0', '0', '10', '0', '0', '122.175.152.77', 5, '2021-01-11 11:42:43', '2021-01-16 10:42:35', 4, 0, 0),
(588, '2021-01-07', '00573', '33', 13, '240', '600', '0', '0', '4', '30', '3', '9', '0', '0', '10', '0', '0', '171.61.12.118', 5, '2021-01-11 11:45:21', '2021-01-11 11:45:21', 4, 0, 0),
(589, '2021-01-07', '00574', '242', 11, '0', '40', '0', '0', '4', '9', '3', '9', '0', '0', '10', '0', '0', '171.61.12.118', 5, '2021-01-11 11:47:16', '2021-01-11 11:47:16', 4, 0, 0),
(590, '2021-01-07', '00575', '35', 8, '240', '600', '0', '0', '4', '16', '3', '9', '0', '0', '10', '0', '0', '122.175.152.77', 5, '2021-01-11 11:50:39', '2021-01-16 10:39:53', 4, 0, 0),
(591, '2021-01-07', '00576', '241', 13, '240', '600', '0', '0', '4', '22', '3', '9', '0', '0', '10', '0', '0', '171.61.12.118', 5, '2021-01-11 11:52:25', '2021-01-11 11:52:25', 4, 0, 0),
(592, '2021-01-07', '00577', '27', 13, '240', '600', '0', '0', '4', '22', '3', '9', '0', '0', '10', '0', '0', '171.61.12.118', 5, '2021-01-11 11:53:53', '2021-01-11 11:53:53', 4, 0, 0),
(593, '2021-01-07', '00578', '242', 13, '240', '600', '0', '0', '4', '21', '3', '9', '0', '0', '10', '0', '0', '171.61.12.118', 5, '2021-01-11 11:55:17', '2021-01-11 11:55:17', 4, 0, 0),
(594, '2021-01-07', '00579', '243', 13, '240', '600', '0', '0', '4', '22', '3', '9', '0', '0', '10', '0', '0', '122.175.152.77', 5, '2021-01-11 11:56:58', '2021-01-16 10:38:05', 4, 0, 0),
(595, '2021-01-07', '00580', '243', 13, '240', '600', '0', '0', '4', '22', '3', '9', '0', '0', '10', '0', '0', '171.61.12.118', 5, '2021-01-11 11:58:13', '2021-01-11 11:58:13', 4, 0, 0),
(596, '2021-01-07', '00581', '33', 13, '240', '600', '0', '0', '4', '37', '3', '9', '0', '0', '10', '0', '0', '171.61.12.118', 5, '2021-01-11 12:05:42', '2021-01-11 12:05:42', 4, 0, 0),
(597, '2021-01-08', '00582', '241', 13, '240', '600', '0', '0', '4', '22', '3', '9', '0', '0', '10', '0', '0', '171.61.12.118', 5, '2021-01-11 12:08:03', '2021-01-11 12:08:03', 4, 0, 0),
(598, '2021-01-08', '00583', '241', 14, '0', '40', '0', '0', '4', '9', '3', '9', '0', '0', '10', '0', '0', '171.61.12.118', 5, '2021-01-11 12:09:23', '2021-01-11 12:09:23', 4, 0, 0),
(599, '2021-01-08', '00584', '107', 7, '291.18', '590', '122', '150', '1', '7', '2', '8', '24000', '0', '8', '0', '1', '171.61.12.118', 6, '2021-01-11 12:11:44', '2021-01-11 12:11:44', 4, 0, 0),
(600, '2021-01-08', '00585', '108', 7, '292.58', '590', '122', '150', '1', '7', '2', '8', '23500', '0', '8', '0', '1', '171.61.12.118', 6, '2021-01-11 12:13:03', '2021-01-11 12:13:03', 4, 0, 0),
(601, '2021-01-08', '00586', '240', 13, '240', '600', '0', '0', '4', '38', '3', '9', '0', '0', '10', '0', '0', '171.61.12.118', 5, '2021-01-11 12:16:26', '2021-01-11 12:16:26', 4, 0, 0),
(602, '2021-01-08', '00587', '33', 14, '0', '40', '0', '0', '4', '9', '3', '9', '0', '0', '10', '0', '0', '171.61.12.118', 5, '2021-01-11 12:18:30', '2021-01-11 12:18:30', 4, 0, 0),
(603, '2021-01-08', '00588', '243', 14, '0', '40', '0', '0', '4', '9', '3', '9', '0', '0', '10', '0', '0', '171.61.12.118', 5, '2021-01-11 12:19:37', '2021-01-11 12:19:37', 4, 0, 0),
(604, '2021-01-08', '00589', '243', 14, '0', '40', '0', '0', '4', '9', '3', '9', '0', '0', '10', '0', '0', '171.61.12.118', 5, '2021-01-11 12:21:10', '2021-01-11 12:21:10', 4, 0, 0),
(605, '2021-01-08', '00590', '32', 14, '0', '40', '0', '0', '4', '9', '3', '9', '0', '0', '10', '0', '0', '171.61.12.118', 5, '2021-01-11 12:22:07', '2021-01-11 12:22:07', 4, 0, 0),
(606, '2021-01-08', '00591', '334', 7, '292.08', '590', '122', '150', '1', '7', '2', '8', '22200', '0', '8', '0', '1', '171.61.12.118', 6, '2021-01-11 12:36:34', '2021-01-11 12:36:34', 4, 0, 0),
(607, '2021-01-08', '00592', '106', 7, '292.38', '590', '122', '150', '1', '7', '2', '8', '23800', '0', '8', '0', '1', '171.61.12.118', 6, '2021-01-11 12:37:40', '2021-01-11 12:37:40', 4, 0, 0),
(608, '2021-01-08', '00593', '335', 7, '329.37', '590', '122', '150', '1', '7', '2', '8', '24000', '0', '8', '0', '1', '171.61.12.118', 6, '2021-01-11 12:45:02', '2021-01-11 12:45:02', 4, 0, 0),
(609, '2021-01-08', '00594', '336', 7, '291.58', '590', '122', '150', '1', '7', '2', '8', '24000', '0', '8', '0', '1', '171.61.12.118', 6, '2021-01-11 12:51:52', '2021-01-11 12:51:52', 4, 0, 0),
(610, '2021-01-08', '00595', '337', 7, '324.77', '660', '122', '150', '1', '7', '2', '8', '24000', '0', '8', '0', '1', '171.61.12.118', 6, '2021-01-11 12:53:45', '2021-01-11 12:53:45', 4, 0, 0),
(611, '2021-01-08', '00596', '65', 7, '292.08', '590', '122', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '171.61.12.118', 6, '2021-01-11 12:55:02', '2021-01-11 12:55:02', 4, 0, 0),
(612, '2021-01-08', '00597', '25', 7, '291.88', '590', '122', '150', '1', '7', '2', '8', '2500', '0', '8', '0', '1', '171.61.12.118', 6, '2021-01-11 12:56:08', '2021-01-11 12:56:08', 4, 0, 0),
(613, '2021-01-08', '00598', '8', 7, '336.26', '680', '122', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '171.61.12.118', 6, '2021-01-11 12:57:15', '2021-01-11 12:57:15', 4, 0, 0),
(614, '2021-01-08', '00599', '36', 7, '336.06', '680', '122', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '171.61.12.118', 6, '2021-01-11 12:58:14', '2021-01-11 12:58:14', 4, 0, 0),
(616, '2021-01-08', '00601', '42', 7, '337.06', '680', '122', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '171.61.12.118', 6, '2021-01-11 13:02:18', '2021-01-11 13:02:18', 4, 0, 0),
(617, '2021-01-08', '00602', '222', 7, '280.74', '580', '122', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '171.61.12.118', 6, '2021-01-11 13:03:56', '2021-01-11 13:03:56', 4, 0, 0),
(618, '2021-01-08', '00603', '66', 7, '291.28', '590', '122', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '171.61.12.118', 6, '2021-01-11 13:15:41', '2021-01-11 13:15:41', 4, 0, 0),
(619, '2021-01-08', '00604', '22', 7, '292.08', '590', '122', '150', '1', '7', '2', '8', '1500', '0', '4', '0', '1', '171.61.12.118', 6, '2021-01-11 13:18:02', '2021-01-11 13:21:15', 4, 0, 0),
(620, '2021-01-08', '00605', '26', 7, '287.04', '580', '122', '150', '1', '7', '2', '8', '1500', '0', '4', '0', '1', '171.61.12.118', 6, '2021-01-11 13:43:22', '2021-01-11 13:43:22', 4, 0, 0),
(621, '2021-01-08', '00606', '198', 7, '292.08', '590', '122', '150', '1', '7', '2', '8', '1500', '0', '4', '0', '1', '171.61.12.118', 6, '2021-01-11 13:44:18', '2021-01-11 13:44:18', 4, 0, 0),
(622, '2021-01-08', '00607', '20', 7, '292.38', '590', '122', '150', '1', '7', '2', '8', '4000', '0', '4', '0', '1', '171.61.12.118', 6, '2021-01-11 13:45:20', '2021-01-11 13:45:20', 4, 0, 0),
(623, '2021-01-08', '00608', '18', 7, '292.28', '590', '122', '150', '1', '7', '2', '8', '3350', '0', '4', '0', '1', '171.61.12.118', 6, '2021-01-11 13:46:17', '2021-01-11 13:46:17', 4, 0, 0),
(624, '2021-01-08', '00609', '215', 7, '285.54', '580', '122', '150', '1', '7', '2', '8', '2600', '0', '4', '0', '1', '171.61.12.118', 6, '2021-01-11 13:47:25', '2021-01-11 13:47:25', 4, 0, 0),
(626, '2021-01-09', '00611', '212', 7, '292.08', '590', '122', '150', '1', '7', '2', '8', '2350', '0', '8', '0', '1', '171.61.12.118', 6, '2021-01-11 13:57:04', '2021-01-11 13:57:04', 4, 0, 0),
(627, '2021-01-09', '00612', '19', 7, '289.64', '580', '122', '150', '1', '7', '2', '8', '2350', '0', '4', '0', '1', '171.61.12.118', 6, '2021-01-11 13:58:16', '2021-01-11 13:58:16', 4, 0, 0),
(628, '2021-01-09', '00613', '44', 7, '335.46', '680', '122', '150', '1', '7', '2', '8', '2350', '0', '4', '0', '1', '182.70.216.254', 6, '2021-01-11 13:59:26', '2021-01-12 07:34:18', 4, 0, 0),
(629, '2021-01-09', '00614', '12', 7, '292.88', '590', '122', '150', '1', '7', '2', '8', '2350', '0', '4', '0', '1', '171.61.12.118', 6, '2021-01-11 14:00:42', '2021-01-11 14:00:42', 4, 0, 0),
(630, '2021-01-08', '00615', '338', 7, '292.08', '590', '122', '150', '1', '7', '2', '8', '24000', '0', '8', '0', '1', '182.70.216.254', 6, '2021-01-11 14:02:59', '2021-01-12 09:05:32', 4, 0, 0),
(631, '2021-01-09', '00616', '21', 7, '291.48', '590', '122', '150', '1', '7', '2', '8', '2350', '0', '8', '0', '1', '171.61.12.118', 6, '2021-01-11 14:08:08', '2021-01-11 14:08:08', 4, 0, 0),
(633, '2021-01-09', '00618', '211', 7, '292.28', '590', '122', '150', '1', '7', '2', '8', '2350', '0', '8', '0', '1', '171.61.12.118', 6, '2021-01-11 14:09:15', '2021-01-11 14:09:15', 4, 0, 0),
(634, '2021-01-09', '00619', '16', 7, '286.74', '580', '122', '150', '1', '7', '2', '8', '2350', '0', '8', '0', '1', '171.61.12.118', 6, '2021-01-11 14:10:21', '2021-01-11 14:10:21', 4, 0, 0),
(635, '2021-01-09', '00620', '13', 7, '337.96', '680', '122', '150', '1', '7', '2', '8', '2350', '0', '8', '0', '1', '171.61.12.118', 6, '2021-01-11 14:12:03', '2021-01-11 14:12:03', 4, 0, 0),
(636, '2021-01-09', '00621', '11', 7, '336.56', '680', '122', '150', '1', '7', '2', '8', '2350', '0', '8', '0', '1', '171.61.12.118', 6, '2021-01-11 14:13:42', '2021-01-11 14:13:42', 4, 0, 0),
(637, '2021-01-09', '00622', '41', 7, '336.66', '680', '122', '150', '1', '7', '2', '8', '2350', '0', '8', '0', '1', '171.61.12.118', 6, '2021-01-11 14:15:01', '2021-01-11 14:15:01', 4, 0, 0),
(638, '2021-01-08', '00623', '35', 8, '240', '600', '0', '0', '4', '13', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 16:17:27', '2021-01-11 16:17:27', 4, 0, 0),
(639, '2021-01-08', '00624', '242', 8, '240', '600', '0', '0', '4', '26', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 16:19:30', '2021-01-11 16:19:30', 4, 0, 0),
(640, '2021-01-08', '00625', '240', 13, '240', '600', '0', '0', '4', '20', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 16:20:49', '2021-01-11 16:20:49', 4, 0, 0),
(641, '2021-01-08', '00626', '35', 13, '160', '290', '0', '0', '4', '29', '3', '9', '0', '0', '10', '0', '0', '122.175.152.77', 5, '2021-01-11 16:22:34', '2021-01-16 10:43:06', 4, 0, 0),
(642, '2021-01-10', '00627', '33', 8, '240', '600', '0', '0', '4', '20', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 16:24:04', '2021-01-11 16:24:04', 4, 0, 0),
(643, '2021-01-10', '00628', '240', 8, '240', '600', '0', '0', '4', '23', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 16:25:51', '2021-01-11 16:25:51', 4, 0, 0),
(644, '2021-01-10', '00629', '243', 8, '226.4', '566', '0', '0', '4', '15', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 16:27:52', '2021-01-11 16:27:52', 4, 0, 0),
(645, '2021-01-10', '00630', '27', 8, '220', '550', '0', '0', '4', '36', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 16:29:24', '2021-01-11 16:29:24', 4, 0, 0),
(646, '2021-01-09', '00631', '240', 13, '240', '600', '0', '0', '4', '26', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 16:32:31', '2021-01-11 16:36:57', 4, 0, 0),
(647, '2021-01-09', '00632', '240', 13, '116', '290', '0', '0', '4', '29', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 16:35:26', '2021-01-11 16:35:26', 4, 0, 0),
(648, '2021-01-09', '00633', '242', 13, '116', '290', '0', '0', '4', '40', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 16:51:33', '2021-01-11 16:51:33', 4, 0, 0),
(649, '2021-01-09', '00634', '242', 13, '240', '600', '0', '0', '4', '39', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 16:54:15', '2021-01-11 16:54:15', 4, 0, 0),
(650, '2021-01-09', '00635', '35', 13, '240', '600', '0', '0', '4', '39', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 16:56:03', '2021-01-11 16:56:03', 4, 0, 0),
(651, '2021-01-09', '00636', '35', 13, '116', '290', '0', '0', '4', '29', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 16:57:44', '2021-01-11 16:57:44', 4, 0, 0),
(652, '2021-01-09', '00637', '35', 13, '116', '290', '0', '0', '4', '29', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 16:59:02', '2021-01-11 16:59:02', 4, 0, 0),
(653, '2021-01-09', '00638', '35', 13, '240', '600', '0', '0', '4', '31', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 17:00:46', '2021-01-11 17:00:46', 4, 0, 0),
(654, '2021-01-10', '00639', '243', 13, '240', '600', '0', '0', '4', '39', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 17:02:17', '2021-01-11 17:02:17', 4, 0, 0),
(655, '2021-01-10', '00640', '24', 13, '240', '600', '0', '0', '4', '39', '3', '9', '0', '0', '10', '0', '0', '182.70.216.254', 6, '2021-01-11 17:03:45', '2021-01-12 07:43:31', 4, 0, 0),
(656, '2021-01-10', '00641', '33', 13, '240', '600', '0', '0', '4', '39', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 17:04:55', '2021-01-11 17:04:55', 4, 0, 0),
(657, '2021-01-10', '00642', '238', 8, '240', '600', '0', '0', '4', '20', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 17:06:23', '2021-01-11 17:06:23', 4, 0, 0),
(658, '2021-01-10', '00643', '245', 8, '240', '600', '0', '0', '4', '41', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 17:09:08', '2021-01-11 17:09:08', 4, 0, 0),
(659, '2021-01-10', '00644', '31', 8, '240', '600', '0', '0', '4', '15', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 17:10:12', '2021-01-11 17:10:12', 4, 0, 0),
(660, '2021-01-10', '00645', '28', 8, '240', '600', '0', '0', '4', '41', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 17:11:26', '2021-01-11 17:11:26', 4, 0, 0),
(661, '2021-01-10', '00646', '30', 8, '240', '600', '0', '0', '4', '15', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 17:12:47', '2021-01-11 17:12:47', 4, 0, 0),
(662, '2021-01-10', '00647', '249', 8, '240', '600', '0', '0', '4', '20', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 17:15:49', '2021-01-11 17:15:49', 4, 0, 0),
(663, '2021-01-10', '00648', '49', 8, '240', '600', '0', '0', '4', '20', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 17:18:00', '2021-01-11 17:18:00', 4, 0, 0),
(664, '2021-01-10', '00649', '246', 8, '220', '550', '0', '0', '4', '41', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 17:19:36', '2021-01-11 17:19:36', 4, 0, 0),
(665, '2021-01-10', '00650', '51', 8, '240', '600', '0', '0', '4', '23', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 17:20:41', '2021-01-11 17:20:41', 4, 0, 0),
(666, '2021-01-09', '00651', '49', 8, '240', '600', '0', '0', '4', '20', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 17:26:33', '2021-01-11 17:28:57', 4, 0, 1),
(667, '2021-01-09', '00652', '237', 8, '240', '600', '0', '0', '4', '23', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 17:28:00', '2021-01-11 17:28:00', 4, 0, 1),
(668, '2021-01-09', '00653', '245', 8, '240', '600', '0', '0', '4', '6', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 17:30:12', '2021-01-11 17:30:12', 4, 0, 1),
(669, '2021-01-09', '00654', '33', 8, '240', '600', '0', '0', '4', '6', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 17:31:53', '2021-01-11 17:31:53', 4, 0, 1),
(670, '2021-01-09', '00655', '33', 8, '20', '50', '0', '0', '4', '6', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 17:33:33', '2021-01-11 17:33:33', 4, 0, 1),
(671, '2021-01-09', '00656', '241', 8, '240', '600', '0', '0', '4', '26', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 17:35:39', '2021-01-11 17:35:39', 4, 0, 1),
(672, '2021-01-09', '00657', '27', 8, '240', '600', '0', '0', '4', '6', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 17:37:08', '2021-01-11 17:37:08', 4, 0, 1),
(673, '2021-01-09', '00658', '331', 8, '200', '500', '0', '0', '4', '42', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 17:39:07', '2021-01-11 17:39:07', 4, 0, 1),
(674, '2021-01-09', '00659', '14', 8, '220', '600', '0', '0', '4', '42', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 17:40:37', '2021-01-11 17:40:37', 4, 0, 1),
(675, '2021-01-09', '00660', '28', 8, '240', '600', '0', '0', '4', '20', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 17:41:41', '2021-01-11 17:41:41', 4, 0, 1),
(676, '2021-01-09', '00661', '30', 8, '240', '600', '0', '0', '4', '35', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 17:44:34', '2021-01-11 17:44:34', 4, 0, 1),
(677, '2021-01-09', '00662', '242', 8, '240', '600', '0', '0', '4', '26', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 17:45:55', '2021-01-11 17:49:58', 4, 0, 1),
(678, '2021-01-09', '00663', '51', 8, '40', '360', '0', '0', '4', '20', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 17:51:45', '2021-01-11 17:51:45', 4, 0, 1),
(679, '2021-01-09', '00664', '51', 8, '40', '360', '0', '0', '4', '20', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 17:53:08', '2021-01-11 17:53:08', 4, 0, 1),
(680, '2021-01-09', '00665', '249', 8, '240', '600', '0', '0', '4', '42', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 17:54:51', '2021-01-11 17:54:51', 4, 0, 1),
(681, '2021-01-09', '00666', '243', 8, '240', '600', '0', '0', '4', '42', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 17:56:22', '2021-01-11 17:56:22', 4, 0, 1),
(682, '2021-01-09', '00667', '32', 8, '240', '600', '0', '0', '4', '41', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 17:57:57', '2021-01-11 17:57:57', 4, 0, 1),
(683, '2021-01-09', '00668', '331', 8, '200', '600', '0', '0', '4', '36', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 17:59:50', '2021-01-11 17:59:50', 4, 0, 1),
(684, '2021-01-09', '00669', '28', 8, '240', '600', '0', '0', '4', '41', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 18:01:59', '2021-01-11 18:01:59', 4, 0, 1),
(685, '2021-01-09', '00670', '49', 8, '240', '600', '0', '0', '4', '20', '3', '9', '0', '0', '10', '0', '0', '47.247.98.181', 5, '2021-01-11 18:03:18', '2021-01-11 18:03:18', 4, 0, 1),
(686, '2021-01-09', '00671', '216', 8, '300', '750', '0', '0', '4', '41', '3', '9', '0', '0', '0', '0', '0', '47.247.98.181', 5, '2021-01-11 18:04:49', '2021-01-11 18:04:49', 4, 0, 1),
(687, '2021-01-09', '00672', '50', 8, '240', '600', '0', '0', '4', '15', '3', '9', '0', '0', '10', '0', '0', '47.247.101.211', 5, '2021-01-12 02:03:42', '2021-01-12 02:03:42', 4, 0, 1),
(688, '2021-01-09', '00673', '31', 8, '240', '600', '0', '0', '4', '20', '3', '9', '0', '0', '10', '0', '0', '47.247.101.211', 5, '2021-01-12 02:06:54', '2021-01-12 02:06:54', 4, 0, 1),
(689, '2021-01-09', '00674', '241', 8, '240', '600', '0', '0', '4', '41', '3', '9', '0', '0', '0', '0', '0', '47.247.101.211', 5, '2021-01-12 02:08:22', '2021-01-12 02:08:22', 4, 0, 1),
(690, '2021-01-09', '00675', '330', 8, '240', '600', '0', '0', '4', '36', '3', '9', '0', '0', '10', '0', '0', '47.247.101.211', 5, '2021-01-12 02:10:07', '2021-01-12 02:10:07', 4, 0, 1),
(691, '2021-01-09', '00676', '30', 8, '240', '600', '0', '0', '4', '15', '3', '9', '0', '0', '10', '0', '0', '47.247.101.211', 5, '2021-01-12 02:11:22', '2021-01-12 02:11:22', 4, 0, 1),
(692, '2021-01-10', '00677', '27', 8, '220', '550', '0', '0', '4', '36', '3', '9', '0', '0', '10', '0', '0', '47.247.101.211', 5, '2021-01-12 02:13:03', '2021-01-12 02:13:03', 4, 0, 1),
(693, '2021-01-10', '00678', '238', 8, '240', '600', '0', '0', '4', '20', '3', '9', '0', '0', '10', '0', '0', '47.247.101.211', 5, '2021-01-12 02:14:19', '2021-01-12 02:14:19', 4, 0, 1),
(694, '2021-01-10', '00679', '244', 8, '240', '600', '0', '0', '4', '41', '3', '9', '0', '0', '10', '0', '0', '47.247.101.211', 5, '2021-01-12 02:15:24', '2021-01-12 02:15:24', 4, 0, 1),
(695, '2021-01-10', '00680', '327', 8, '240', '600', '0', '0', '4', '15', '3', '9', '0', '0', '10', '0', '0', '47.247.101.211', 5, '2021-01-12 02:16:42', '2021-01-12 02:16:42', 4, 0, 1),
(696, '2021-01-10', '00681', '245', 8, '240', '600', '0', '0', '4', '41', '3', '9', '0', '0', '10', '0', '0', '47.247.101.211', 5, '2021-01-12 02:17:45', '2021-01-12 02:17:45', 4, 0, 1),
(697, '2021-01-10', '00682', '31', 8, '240', '600', '0', '0', '4', '15', '3', '9', '0', '0', '10', '0', '0', '47.247.101.211', 5, '2021-01-12 02:19:08', '2021-01-12 02:19:08', 4, 0, 1),
(698, '2021-01-10', '00683', '33', 8, '120', '300', '0', '0', '4', '20', '3', '9', '0', '0', '0', '0', '0', '47.247.101.211', 5, '2021-01-12 02:20:37', '2021-01-12 02:20:37', 4, 0, 1),
(699, '2021-01-10', '00684', '33', 8, '120', '300', '0', '0', '4', '20', '3', '9', '0', '0', '10', '0', '0', '47.247.101.211', 5, '2021-01-12 02:21:44', '2021-01-12 02:21:44', 4, 0, 1),
(700, '2021-01-10', '00685', '331', 8, '200', '500', '0', '0', '4', '15', '3', '9', '0', '0', '10', '0', '0', '47.247.101.211', 5, '2021-01-12 02:23:40', '2021-01-12 02:23:40', 4, 0, 1),
(701, '2021-01-10', '00686', '243', 8, '266.4', '566', '0', '0', '4', '15', '3', '9', '0', '0', '0', '0', '0', '47.247.101.211', 5, '2021-01-12 02:25:22', '2021-01-12 02:25:22', 4, 0, 1),
(702, '2021-01-10', '00687', '28', 8, '240', '600', '0', '0', '4', '41', '3', '9', '0', '0', '10', '0', '0', '47.247.101.211', 5, '2021-01-12 02:26:52', '2021-01-12 02:26:52', 4, 0, 1),
(703, '2021-01-10', '00688', '216', 8, '300', '750', '0', '0', '4', '20', '3', '9', '0', '0', '10', '0', '0', '47.247.101.211', 5, '2021-01-12 02:28:29', '2021-01-12 02:28:29', 4, 0, 1),
(704, '2021-01-10', '00689', '240', 8, '240', '600', '0', '0', '4', '23', '3', '9', '0', '0', '10', '0', '0', '47.247.101.211', 5, '2021-01-12 02:30:04', '2021-01-12 02:30:04', 4, 0, 1),
(705, '2021-01-10', '00690', '326', 8, '240', '600', '0', '0', '4', '23', '3', '9', '0', '0', '10', '0', '0', '47.247.101.211', 5, '2021-01-12 02:32:44', '2021-01-12 02:32:44', 4, 0, 1),
(706, '2021-01-10', '00691', '30', 8, '240', '600', '0', '0', '4', '15', '3', '9', '0', '0', '10', '0', '0', '47.247.101.211', 5, '2021-01-12 02:34:32', '2021-01-12 02:34:32', 4, 0, 1),
(707, '2021-01-10', '00692', '49', 8, '240', '600', '0', '0', '4', '20', '3', '9', '0', '0', '10', '0', '0', '47.247.101.211', 5, '2021-01-12 02:35:50', '2021-01-12 02:35:50', 4, 0, 1),
(708, '2021-01-10', '00693', '14', 8, '240', '600', '0', '0', '4', '20', '3', '9', '0', '0', '10', '0', '0', '47.247.101.211', 5, '2021-01-12 02:37:00', '2021-01-12 02:37:00', 4, 0, 1),
(709, '2021-01-10', '00694', '239', 8, '240', '600', '0', '0', '4', '23', '3', '9', '0', '0', '10', '0', '0', '47.247.101.211', 5, '2021-01-12 02:38:19', '2021-01-12 02:38:19', 4, 0, 1),
(710, '2021-01-10', '00695', '249', 8, '240', '600', '0', '0', '4', '20', '3', '9', '0', '0', '10', '0', '0', '47.247.101.211', 5, '2021-01-12 02:39:37', '2021-01-12 02:39:37', 4, 0, 1),
(711, '2021-01-10', '00696', '246', 8, '220', '550', '0', '0', '4', '41', '3', '9', '0', '0', '10', '0', '0', '47.247.101.211', 5, '2021-01-12 02:41:02', '2021-01-12 02:41:02', 4, 0, 1),
(712, '2021-01-10', '00697', '51', 8, '240', '600', '0', '0', '4', '23', '3', '9', '0', '0', '10', '0', '0', '47.247.101.211', 5, '2021-01-12 02:42:16', '2021-01-12 02:42:16', 4, 0, 1),
(713, '2021-01-09', '00698', '219', 7, '292.28', '590', '122', '150', '1', '7', '2', '8', '2050', '0', '8', '0', '1', '171.61.12.118', 6, '2021-01-12 05:20:27', '2021-01-12 05:20:27', 4, 0, 0),
(714, '2009-01-21', '00699', '213', 7, '291.48', '590', '122', '150', '1', '7', '2', '8', '2750', '0', '8', '0', '1', '171.61.12.118', 6, '2021-01-12 05:21:59', '2021-01-12 05:21:59', 4, 0, 0),
(715, '2021-01-09', '00700', '40', 7, '336.96', '680', '122', '150', '1', '7', '2', '8', '2400', '0', '8', '0', '1', '171.61.12.118', 6, '2021-01-12 05:22:58', '2021-01-12 05:22:58', 4, 0, 0),
(716, '2021-01-09', '00701', '9', 7, '337.06', '680', '122', '150', '1', '7', '2', '8', '2350', '0', '8', '0', '1', '171.61.12.118', 6, '2021-01-12 05:23:56', '2021-01-12 05:23:56', 4, 0, 0),
(717, '2021-01-09', '00702', '209', 7, '290.38', '590', '122', '150', '1', '7', '2', '8', '2350', '0', '8', '0', '1', '171.61.12.118', 6, '2021-01-12 05:24:40', '2021-01-12 05:24:40', 4, 0, 0),
(718, '2021-01-09', '00703', '214', 7, '295.48', '590', '122', '150', '1', '7', '2', '8', '2350', '0', '8', '0', '1', '171.61.12.118', 6, '2021-01-12 05:25:33', '2021-01-12 05:25:33', 4, 0, 0),
(719, '2021-01-09', '00704', '17', 7, '292.88', '590', '122', '150', '1', '7', '2', '8', '2800', '0', '8', '0', '1', '171.61.12.118', 6, '2021-01-12 05:26:22', '2021-01-12 05:26:22', 4, 0, 0),
(720, '2021-01-09', '00705', '232', 7, '292.48', '590', '122', '150', '1', '7', '2', '8', '2350', '0', '8', '0', '1', '171.61.12.118', 6, '2021-01-12 05:27:19', '2021-01-12 05:27:19', 4, 0, 0),
(721, '2021-01-09', '00706', '232', 7, '292.48', '590', '122', '150', '1', '7', '2', '8', '2350', '0', '8', '0', '1', '171.61.12.118', 6, '2021-01-12 05:27:20', '2021-01-12 05:27:20', 4, 0, 0),
(722, '2021-01-09', '00707', '233', 7, '338.26', '680', '122', '150', '1', '7', '2', '8', '2550', '0', '8', '0', '1', '171.61.12.118', 6, '2021-01-12 05:28:17', '2021-01-12 05:28:17', 4, 0, 0),
(723, '2021-01-09', '00708', '10', 7, '340.26', '680', '122', '150', '1', '7', '2', '8', '2350', '0', '8', '0', '1', '171.61.12.118', 6, '2021-01-12 05:29:14', '2021-01-12 05:29:14', 4, 0, 0),
(724, '2021-01-09', '00709', '220', 7, '293.28', '590', '122', '150', '1', '7', '2', '8', '2350', '0', '8', '0', '1', '171.61.12.118', 6, '2021-01-12 05:30:06', '2021-01-12 05:30:06', 4, 0, 0),
(725, '2021-01-10', '00710', '38', 7, '286.44', '590', '122', '150', '1', '7', '2', '8', '2700', '0', '8', '0', '1', '182.70.216.254', 6, '2021-01-12 10:14:03', '2021-01-12 10:14:03', 4, 0, 0),
(726, '2021-01-10', '00711', '37', 7, '336.86', '680', '122', '150', '1', '7', '2', '8', '3100', '0', '8', '0', '1', '182.70.216.254', 6, '2021-01-12 10:16:15', '2021-01-12 10:16:15', 4, 0, 0),
(727, '2021-01-11', '00712', '18', 7, '293.08', '590', '122', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '182.70.216.254', 6, '2021-01-12 10:42:17', '2021-01-12 10:42:17', 4, 0, 0),
(728, '2021-01-11', '00713', '65', 7, '292.88', '590', '122', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '182.70.216.254', 6, '2021-01-12 10:43:25', '2021-01-12 10:43:25', 4, 0, 0),
(729, '2021-01-11', '00714', '36', 7, '337.56', '680', '122', '150', '1', '7', '2', '8', '3450', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-12 10:45:00', '2021-01-25 11:44:24', 4, 0, 0),
(730, '2021-01-11', '00715', '66', 7, '291.88', '590', '122', '150', '1', '7', '2', '8', '2550', '0', '8', '0', '1', '110.224.199.247', 6, '2021-01-12 10:46:06', '2021-02-02 14:01:27', 4, 0, 0),
(731, '2021-01-11', '00716', '25', 7, '292.18', '590', '122', '150', '1', '7', '2', '8', '2650', '0', '8', '0', '1', '182.70.216.254', 6, '2021-01-12 10:47:11', '2021-01-12 10:47:11', 4, 0, 0),
(732, '2021-01-11', '00717', '42', 7, '337.06', '680', '122', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '182.70.216.254', 6, '2021-01-12 10:48:27', '2021-01-12 10:48:27', 4, 0, 0),
(733, '2021-01-11', '00718', '215', 7, '290.04', '580', '122', '150', '1', '7', '2', '8', '2950', '0', '8', '0', '1', '182.70.216.254', 6, '2021-01-12 10:49:36', '2021-01-12 10:49:36', 4, 0, 0),
(734, '2021-01-11', '00719', '23', 7, '287.14', '580', '122', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '182.70.216.254', 6, '2021-01-12 10:51:38', '2021-01-12 10:51:38', 4, 0, 0),
(735, '2021-01-11', '00720', '222', 7, '287.34', '580', '122', '150', '1', '7', '2', '8', '2600', '0', '8', '0', '1', '182.70.216.254', 6, '2021-01-12 10:53:33', '2021-01-12 10:53:33', 4, 0, 0),
(736, '2021-01-11', '00721', '24', 7, '297.18', '590', '122', '150', '1', '7', '2', '8', '2950', '0', '8', '0', '1', '182.70.216.254', 6, '2021-01-12 10:56:15', '2021-01-12 10:56:15', 4, 0, 0),
(737, '2021-01-08', '00722', '210', 7, '290.68', '590', '122', '150', '1', '3', '2', '4', '15500', '0', '11', '0', '1', '122.175.152.77', 6, '2021-01-12 11:14:29', '2021-01-23 07:23:28', 4, 0, 0),
(738, '2021-01-09', '00723', '162', 7, '296', '600', '122', '150', '1', '3', '2', '4', '26000', '0', '11', '0', '1', '182.70.216.254', 6, '2021-01-12 11:43:53', '2021-01-12 11:43:53', 4, 0, 0),
(739, '2021-01-09', '00724', '67', 7, '337.76', '680', '122', '150', '1', '3', '2', '4', '26000', '0', '11', '0', '1', '182.70.216.254', 6, '2021-01-12 11:52:01', '2021-01-12 11:52:01', 4, 0, 0),
(740, '2021-01-09', '00725', '6', 7, '335.66', '680', '122', '150', '1', '3', '2', '4', '16723', '0', '11', '0', '1', '122.175.152.77', 6, '2021-01-12 11:53:09', '2021-01-23 07:25:07', 4, 0, 0),
(741, '2021-01-11', '00726', '54', 7, '339.8', '690', '122', '150', '1', '3', '2', '4', '26000', '0', '5', '0', '1', '182.70.216.254', 6, '2021-01-12 11:59:25', '2021-01-12 11:59:25', 4, 0, 0),
(742, '2021-01-09', '00727', '15', 7, '337.96', '680', '122', '150', '1', '3', '2', '4', '16723', '0', '11', '0', '1', '122.175.152.77', 6, '2021-01-12 12:19:03', '2021-01-23 07:24:10', 4, 0, 0),
(743, '2021-01-11', '00728', '212', 7, '286.34', '580', '122', '150', '1', '7', '2', '8', '2150', '0', '4', '0', '1', '182.70.216.254', 6, '2021-01-12 14:01:03', '2021-01-13 06:21:49', 4, 0, 0),
(744, '2021-01-11', '00729', '20', 7, '291.88', '590', '122', '150', '1', '7', '2', '8', '2150', '0', '9', '0', '1', '182.70.216.254', 6, '2021-01-12 14:02:11', '2021-01-13 06:22:23', 4, 0, 0),
(745, '2021-01-11', '00730', '19', 7, '287.64', '580', '122', '150', '1', '7', '2', '8', '2150', '0', '4', '0', '1', '182.70.216.254', 6, '2021-01-12 14:03:07', '2021-01-13 06:23:06', 4, 0, 0),
(746, '2021-01-11', '00731', '12', 7, '292.88', '590', '122', '150', '1', '7', '2', '8', '2150', '0', '4', '0', '1', '182.70.216.254', 6, '2021-01-12 14:04:30', '2021-01-13 06:23:51', 4, 0, 0),
(747, '2021-01-11', '00732', '44', 7, '339.46', '680', '122', '150', '1', '7', '2', '8', '2150', '0', '4', '0', '1', '182.70.216.254', 6, '2021-01-12 14:05:24', '2021-01-13 06:24:25', 4, 0, 0),
(748, '2021-01-12', '00733', '45', 7, '338.66', '680', '122', '150', '1', '7', '2', '8', '1800', '0', '4', '0', '1', '182.70.216.254', 6, '2021-01-13 07:29:13', '2021-01-13 07:29:13', 4, 0, 0),
(749, '2021-01-12', '00734', '26', 7, '289.24', '580', '122', '150', '1', '7', '2', '8', '2150', '0', '4', '0', '1', '182.70.216.254', 6, '2021-01-13 07:30:30', '2021-01-13 07:30:30', 4, 0, 0),
(750, '2021-01-12', '00735', '213', 7, '292.68', '590', '122', '150', '1', '7', '2', '8', '2150', '0', '4', '0', '1', '182.70.216.254', 6, '2021-01-13 07:31:27', '2021-01-13 07:31:27', 4, 0, 0),
(751, '2021-01-12', '00736', '340', 7, '292.08', '590', '122', '150', '1', '7', '2', '8', '24000', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-13 07:35:49', '2021-01-15 07:27:05', 4, 0, 0),
(752, '2021-01-12', '00737', '17', 7, '291.38', '590', '122', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '182.70.216.254', 6, '2021-01-13 07:36:38', '2021-01-13 07:36:38', 4, 0, 0),
(753, '2021-01-12', '00738', '16', 7, '287.04', '580', '122', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '182.70.216.254', 6, '2021-01-13 07:39:13', '2021-01-13 07:39:13', 4, 0, 0),
(754, '2021-01-12', '00739', '13', 7, '337.81', '670', '122', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '182.70.216.254', 6, '2021-01-13 07:41:28', '2021-01-13 07:41:28', 4, 0, 0),
(755, '2021-01-12', '00740', '209', 7, '293.58', '590', '122', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '182.70.216.254', 6, '2021-01-13 07:42:20', '2021-01-13 07:42:20', 4, 0, 0),
(756, '2021-01-12', '00741', '214', 7, '291.28', '590', '122', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '182.70.216.254', 6, '2021-01-13 07:46:01', '2021-01-13 07:46:01', 4, 0, 0),
(757, '2021-01-12', '00742', '15', 7, '340.96', '680', '122', '150', '1', '7', '2', '8', '1800', '0', '8', '0', '1', '182.70.216.254', 6, '2021-01-13 07:47:08', '2021-01-13 07:47:08', 4, 0, 0),
(758, '2021-01-12', '00743', '21', 7, '290.98', '590', '122', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '182.70.216.254', 6, '2021-01-13 07:48:06', '2021-01-13 07:48:06', 4, 0, 0),
(759, '2021-01-12', '00744', '41', 7, '337.86', '680', '122', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '182.70.216.254', 6, '2021-01-13 07:49:10', '2021-01-13 07:49:10', 4, 0, 0),
(760, '2021-01-12', '00745', '11', 7, '335.66', '680', '122', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-13 07:50:11', '2021-01-16 13:29:09', 4, 0, 0),
(761, '2021-01-12', '00746', '9', 7, '335.76', '680', '122', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '182.70.216.254', 6, '2021-01-13 07:51:08', '2021-01-13 07:51:08', 4, 0, 0),
(762, '2021-01-12', '00747', '6', 7, '340.06', '680', '122', '150', '1', '7', '2', '8', '1500', '0', '8', '0', '1', '182.70.216.254', 6, '2021-01-13 07:52:16', '2021-01-13 07:52:16', 4, 0, 0),
(763, '2021-01-12', '00748', '38', 7, '287.14', '580', '122', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '182.70.216.254', 6, '2021-01-13 08:07:11', '2021-01-13 08:07:11', 4, 0, 0),
(764, '2021-01-12', '00749', '211', 7, '292.48', '590', '122', '150', '1', '7', '2', '8', '2650', '0', '8', '0', '1', '182.70.216.254', 6, '2021-01-13 08:09:57', '2021-01-13 08:09:57', 4, 0, 0),
(765, '2021-01-12', '00750', '220', 7, '293.18', '590', '122', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '182.70.216.254', 6, '2021-01-13 08:10:47', '2021-01-13 08:10:47', 4, 0, 0),
(766, '2021-01-12', '00751', '219', 7, '291.28', '590', '122', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '182.70.216.254', 6, '2021-01-13 08:16:48', '2021-01-13 08:16:48', 4, 0, 0),
(767, '2021-01-12', '00752', '232', 7, '294.48', '590', '122', '150', '1', '7', '2', '8', '3200', '0', '8', '0', '1', '182.70.216.254', 6, '2021-01-13 08:17:57', '2021-01-13 08:17:57', 4, 0, 0),
(768, '2021-01-12', '00753', '10', 7, '337.86', '680', '122', '150', '1', '7', '2', '8', '2550', '0', '8', '0', '1', '182.70.216.254', 6, '2021-01-13 08:18:53', '2021-01-13 08:18:53', 4, 0, 0),
(769, '2021-01-12', '00754', '22', 7, '292.88', '590', '122', '150', '1', '7', '2', '8', '2650', '0', '8', '0', '1', '182.70.216.254', 6, '2021-01-13 08:20:57', '2021-01-13 08:20:57', 4, 0, 0),
(770, '2021-01-12', '00755', '8', 7, '336.16', '680', '122', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '182.70.216.254', 6, '2021-01-13 08:21:47', '2021-01-13 08:21:47', 4, 0, 0),
(771, '2021-01-12', '00756', '198', 7, '291.98', '590', '122', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '182.70.216.254', 6, '2021-01-13 08:22:59', '2021-01-13 08:22:59', 4, 0, 0),
(772, '2021-01-12', '00757', '39', 7, '291.18', '590', '122', '150', '1', '3', '2', '4', '19316', '0', '11', '0', '1', '122.175.152.77', 6, '2021-01-13 08:53:09', '2021-01-23 07:26:30', 4, 0, 0),
(773, '2021-01-13', '00758', '67', 7, '335.86', '680', '122', '150', '1', '3', '2', '4', '26000', '0', '11', '0', '1', '122.175.152.77', 6, '2021-01-14 06:14:23', '2021-01-23 07:27:20', 4, 0, 0),
(774, '2021-01-13', '00759', '85', 7, '291.88', '590', '122', '150', '1', '7', '2', '8', '21500', '0', '8', '0', '1', '182.70.216.254', 6, '2021-01-14 06:17:02', '2021-01-14 06:17:02', 4, 0, 0),
(775, '2021-01-13', '00760', '207', 7, '292.08', '590', '122', '150', '1', '7', '2', '8', '22000', '0', '8', '0', '1', '182.70.216.254', 6, '2021-01-14 06:30:56', '2021-01-14 06:30:56', 4, 0, 0),
(776, '2021-01-13', '00761', '334', 7, '294.48', '590', '122', '150', '1', '7', '2', '8', '19400', '0', '8', '0', '1', '182.70.216.254', 6, '2021-01-14 06:32:51', '2021-01-14 06:32:51', 4, 0, 0),
(777, '2021-01-13', '00762', '344', 7, '294.58', '590', '122', '150', '1', '7', '2', '8', '24000', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-14 06:37:09', '2021-01-16 06:28:38', 4, 0, 0),
(778, '2021-01-13', '00763', '37', 7, '336.16', '680', '122', '150', '1', '7', '2', '8', '1800', '0', '8', '0', '1', '182.70.216.254', 6, '2021-01-14 06:39:42', '2021-01-14 06:39:42', 4, 0, 0),
(779, '2021-01-13', '00764', '215', 7, '289.54', '580', '122', '150', '1', '7', '2', '8', '1850', '0', '8', '0', '1', '182.70.216.254', 6, '2021-01-14 06:40:37', '2021-01-14 06:40:37', 4, 0, 0),
(780, '2021-01-13', '00765', '20', 7, '287.84', '580', '122', '150', '1', '7', '2', '8', '4150', '0', '8', '0', '1', '182.70.216.254', 6, '2021-01-14 06:41:54', '2021-01-14 06:41:54', 4, 0, 0),
(781, '2021-01-13', '00766', '212', 7, '288.24', '580', '122', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '182.70.216.254', 6, '2021-01-14 06:43:12', '2021-01-14 06:43:12', 4, 0, 0),
(782, '2021-01-13', '00767', '44', 7, '335.16', '680', '122', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '182.70.216.254', 6, '2021-01-14 06:46:23', '2021-01-14 06:46:23', 4, 0, 0),
(783, '2021-01-13', '00768', '210', 7, '293.58', '590', '122', '150', '1', '7', '2', '8', '2100', '0', '8', '0', '1', '182.70.216.254', 6, '2021-01-14 06:47:18', '2021-01-14 06:47:18', 4, 0, 0),
(784, '2021-01-13', '00769', '19', 7, '287.74', '580', '122', '150', '1', '7', '2', '8', '3650', '0', '8', '0', '1', '182.70.216.254', 6, '2021-01-14 06:49:58', '2021-01-14 06:49:58', 4, 0, 0),
(785, '2021-01-13', '00770', '40', 7, '338.16', '680', '122', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '182.70.216.254', 6, '2021-01-14 06:50:55', '2021-01-14 06:50:55', 4, 0, 0),
(786, '2021-01-13', '00771', '233', 7, '337.96', '680', '122', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '182.70.216.254', 6, '2021-01-14 06:54:30', '2021-01-14 06:54:30', 4, 0, 0),
(787, '2021-01-14', '00772', '200', 7, '293.88', '590', '122', '150', '1', '7', '2', '8', '24000', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-15 07:29:14', '2021-01-15 07:29:14', 4, 0, 0),
(788, '2021-01-14', '00773', '357', 7, '293.98', '590', '122', '150', '1', '7', '2', '8', '24000', '0', '8', '0', '1', '110.224.199.247', 6, '2021-01-15 07:31:41', '2021-02-02 14:00:48', 4, 0, 0),
(789, '2021-01-14', '00774', '205', 7, '294.68', '590', '122', '150', '1', '7', '2', '8', '24000', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-15 07:32:26', '2021-01-15 07:32:26', 4, 0, 0),
(790, '2021-01-14', '00775', '204', 7, '293.68', '590', '122', '150', '1', '7', '2', '8', '24000', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-15 07:39:54', '2021-01-15 07:39:54', 4, 0, 0),
(791, '2021-01-14', '00776', '216', 7, '294.08', '590', '122', '150', '1', '7', '2', '8', '4500', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-15 07:40:54', '2021-01-15 07:40:54', 4, 0, 0),
(792, '2021-01-14', '00777', '45', 7, '338.26', '680', '122', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-15 07:43:06', '2021-01-15 07:43:06', 4, 0, 0),
(793, '2021-01-11', '00778', '339', 7, '293.78', '590', '122', '150', '1', '7', '2', '8', '24000', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-16 06:40:31', '2021-01-16 06:40:31', 4, 0, 0),
(794, '2021-01-11', '00779', '234', 13, '116', '290', '0', '0', '4', '29', '3', '9', '0', '0', '10', '0', '0', '122.175.152.77', 5, '2021-01-16 12:00:27', '2021-01-16 12:00:27', 4, 0, 0),
(795, '2021-01-11', '00780', '239', 13, '116', '290', '0', '0', '4', '29', '3', '9', '0', '0', '10', '0', '0', '122.175.152.77', 5, '2021-01-16 12:02:08', '2021-01-16 12:10:38', 4, 0, 0),
(796, '2021-01-11', '00781', '235', 13, '116', '290', '0', '0', '4', '29', '3', '9', '0', '0', '10', '0', '0', '122.175.152.77', 5, '2021-01-16 12:03:38', '2021-01-16 12:13:24', 4, 0, 0),
(797, '2021-01-11', '00782', '235', 11, '0', '40', '0', '0', '4', '10', '3', '9', '0', '0', '10', '0', '0', '122.175.152.77', 5, '2021-01-16 12:17:35', '2021-01-16 12:17:35', 4, 0, 0),
(798, '2021-01-11', '00783', '244', 8, '240', '600', '0', '0', '4', '16', '3', '9', '0', '0', '10', '0', '0', '122.175.152.77', 5, '2021-01-16 12:19:48', '2021-01-16 12:19:48', 4, 0, 0),
(799, '2021-01-11', '00784', '245', 13, '0', '0', '0', '0', '4', '38', '3', '9', '0', '0', '10', '0', '0', '122.175.152.77', 5, '2021-01-16 12:20:44', '2021-01-16 12:20:44', 4, 0, 0),
(800, '2021-01-11', '00785', '49', 13, '0', '0', '0', '0', '4', '38', '3', '9', '0', '0', '10', '0', '0', '122.175.152.77', 5, '2021-01-16 12:21:41', '2021-01-16 12:21:41', 4, 0, 0),
(801, '2021-01-11', '00786', '245', 8, '240', '600', 'o', '0', '4', '41', '3', '9', 'o', '0', '10', '0', '0', '122.175.152.77', 5, '2021-01-16 12:29:22', '2021-01-16 12:29:22', 4, 0, 0),
(802, '2021-01-11', '00787', '31', 8, '240', '600', '0', '0', '4', '15', '3', '9', '0', '0', '10', '0', '0', '122.175.152.77', 5, '2021-01-16 12:30:58', '2021-01-16 12:30:58', 4, 0, 0),
(803, '2021-01-11', '00788', '28', 8, '240', '600', '0', '0', '4', '41', '3', '9', '0', '0', '10', '0', '0', '122.175.152.77', 5, '2021-01-16 12:32:21', '2021-01-16 12:32:21', 4, 0, 0),
(804, '2021-01-11', '00789', '30', 8, '240', '600', '0', '0', '4', '15', '3', '9', '0', '0', '10', '0', '0', '122.175.152.77', 5, '2021-01-16 12:33:36', '2021-01-16 12:33:36', 4, 0, 0),
(805, '2021-01-11', '00790', '49', 8, '240', '600', '0', '0', '4', '20', '3', '9', '0', '0', '10', '0', '0', '122.175.152.77', 5, '2021-01-16 12:35:19', '2021-01-16 12:35:19', 4, 0, 0),
(806, '2021-01-10', '00791', '249', 8, '240', '600', '0', '0', '4', '20', '3', '9', '00', '0', '10', '0', '0', '122.175.152.77', 5, '2021-01-16 12:36:10', '2021-01-16 12:36:10', 4, 0, 0),
(807, '2021-01-11', '00792', '246', 8, '220', '550', '0', '0', '4', '41', '3', '9', '0', '0', '10', '0', '0', '122.175.152.77', 5, '2021-01-16 12:39:55', '2021-01-16 12:39:55', 4, 0, 0),
(808, '2021-01-11', '00793', '51', 8, '240', '600', '0', '0', '4', '23', '3', '9', '0', '0', '10', '0', '0', '122.175.152.77', 5, '2021-01-16 12:43:59', '2021-01-16 12:43:59', 4, 0, 0),
(809, '2021-01-11', '00794', '51', 8, '240', '600', '0', '0', '4', '43', '3', '9', '0', '0', '0', '0', '0', '122.175.152.77', 5, '2021-01-16 12:46:10', '2021-01-16 12:46:10', 4, 0, 0),
(810, '2021-01-11', '00795', '249', 8, '240', '600', '0', '0', '4', '23', '3', '9', '0', '0', '10', '0', '0', '122.175.152.77', 5, '2021-01-16 12:48:05', '2021-01-16 12:48:05', 4, 0, 0),
(811, '2021-01-11', '00796', '326', 8, '240', '600', '0', '0', '4', '12', '3', '9', '0', '0', '10', '0', '0', '122.175.152.77', 5, '2021-01-16 12:50:08', '2021-01-16 12:50:08', 4, 0, 1),
(812, '2021-01-11', '00797', '50', 8, '240', '600', '0', '0', '4', '44', '3', '9', '0', '100', '10', '0', '0', '122.175.152.77', 5, '2021-01-16 12:52:23', '2021-01-21 10:12:22', 4, 0, 1),
(813, '2021-01-11', '00798', '240', 8, '90', '225', '0', '0', '4', '10', '3', '9', '0', '0', '10', '0', '0', '122.175.152.77', 5, '2021-01-16 12:53:42', '2021-01-16 12:53:42', 4, 0, 1),
(814, '2021-01-11', '00799', '240', 8, '130', '325', '0', '0', '4', '10', '3', '9', '0', '0', '10', '0', '0', '122.175.152.77', 5, '2021-01-16 12:55:09', '2021-01-16 12:55:09', 4, 0, 1),
(815, '2021-01-15', '00800', '66', 7, '291.18', '590', '122', '150', '1', '7', '2', '8', '9150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-16 12:55:27', '2021-01-16 12:55:27', 4, 0, 0),
(816, '2021-01-11', '00801', '35', 8, '100', '250', '0', '0', '4', '35', '3', '9', '0', '0', '10', '0', '0', '122.175.152.77', 5, '2021-01-16 12:56:45', '2021-01-16 12:56:45', 4, 0, 1),
(817, '2021-01-15', '00802', '8', 7, '338.66', '680', '122', '150', '1', '7', '2', '8', '9150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-16 12:57:17', '2021-01-16 12:57:17', 4, 0, 0),
(818, '2021-01-15', '00803', '36', 7, '336.56', '680', '122', '150', '1', '7', '2', '8', '9150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-16 12:58:31', '2021-01-16 12:58:31', 4, 0, 0),
(819, '2021-01-15', '00804', '38', 7, '286.24', '580', '122', '150', '1', '7', '2', '8', '9150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-16 13:01:00', '2021-01-16 13:01:00', 4, 0, 0),
(820, '2021-01-15', '00805', '209', 7, '290.88', '590', '122', '150', '1', '7', '2', '8', '10150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-16 13:02:17', '2021-01-16 13:26:39', 4, 0, 0),
(821, '2021-01-11', '00806', '35', 8, '140', '350', '0', '0', '4', '35', '3', '9', '0', '0', '0', '0', '0', '122.175.152.77', 5, '2021-01-16 13:02:24', '2021-01-16 13:02:24', 4, 0, 1),
(822, '2021-01-15', '00807', '23', 7, '287.54', '580', '122', '150', '1', '7', '2', '8', '9150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-16 13:04:01', '2021-01-16 13:04:01', 4, 0, 0),
(823, '2021-01-15', '00808', '211', 7, '293.28', '590', '122', '150', '1', '7', '2', '8', '12150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-16 13:04:55', '2021-01-16 13:04:55', 4, 0, 0),
(824, '2021-01-15', '00809', '24', 7, '289.74', '580', '122', '150', '1', '7', '2', '8', '9150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-16 13:05:48', '2021-01-16 13:05:48', 4, 0, 0),
(825, '2021-01-15', '00810', '18', 7, '294.18', '590', '122', '150', '1', '7', '2', '8', '8700', '0', '8', '0', '1', '122.175.246.186', 6, '2021-01-16 13:07:40', '2021-01-27 07:41:51', 4, 0, 0),
(826, '2021-01-11', '00811', '327', 8, '240', '600', '0', '0', '4', '19', '3', '9', '0', '0', '10', '0', '0', '122.175.152.77', 5, '2021-01-16 13:08:04', '2021-01-16 13:08:04', 4, 0, 1),
(827, '2021-01-15', '00812', '17', 7, '290.58', '590', '122', '150', '1', '7', '2', '8', '12650', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-16 13:09:45', '2021-01-16 13:09:45', 4, 0, 0),
(828, '2021-01-11', '00813', '51', 8, '240', '600', '0', '0', '4', '19', '3', '9', '0', '0', '10', '0', '0', '122.175.152.77', 5, '2021-01-16 13:10:22', '2021-01-16 13:10:22', 4, 0, 1),
(829, '2021-01-15', '00814', '11', 7, '337.56', '680', '122', '150', '1', '7', '2', '8', '12150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-16 13:11:11', '2021-01-16 13:11:11', 4, 0, 0),
(830, '2021-01-15', '00815', '13', 7, '330.31', '670', '122', '150', '1', '7', '2', '8', '9150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-16 13:12:11', '2021-01-16 13:12:11', 4, 0, 0),
(831, '2021-01-15', '00816', '213', 7, '293.48', '590', '122', '150', '1', '7', '2', '8', '12150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-16 13:13:05', '2021-01-16 13:13:05', 4, 0, 0);
INSERT INTO `loading_entries` (`id`, `loading_date`, `loading_no`, `vehicle_no`, `item_master`, `weight`, `bag`, `freight_rate`, `commision_rate`, `consignor`, `from_place`, `consignee`, `to_plce`, `diesel_advance`, `diesel_advance_ltr`, `pentrol_pump`, `cash_advance`, `status`, `ipaddress`, `createdby`, `created_at`, `updated_at`, `hemal`, `hema_rate`, `loading_type`) VALUES
(832, '2021-01-15', '00817', '198', 7, '291.48', '590', '122', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-16 13:14:58', '2021-01-16 13:14:58', 4, 0, 0),
(833, '2021-01-15', '00818', '22', 7, '291.28', '590', '122', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-16 13:15:42', '2021-01-16 13:15:42', 4, 0, 0),
(834, '2021-01-15', '00819', '219', 7, '291.48', '590', '122', '150', '1', '7', '2', '8', '9150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-16 13:16:28', '2021-01-16 13:23:59', 4, 0, 0),
(835, '2021-01-15', '00820', '41', 7, '338.36', '680', '122', '150', '1', '7', '2', '8', '12150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-16 13:17:45', '2021-01-16 13:17:45', 4, 0, 0),
(836, '2021-01-15', '00821', '9', 7, '336.96', '680', '122', '150', '1', '7', '2', '8', '11150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-16 13:18:39', '2021-01-16 13:18:39', 4, 0, 0),
(837, '2021-01-15', '00822', '21', 7, '291.78', '590', '122', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '110.224.199.247', 6, '2021-01-16 13:19:21', '2021-02-03 07:09:57', 4, 0, 0),
(838, '2021-01-15', '00823', '232', 7, '291.28', '590', '122', '150', '1', '7', '2', '8', '12150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-16 13:20:32', '2021-01-16 13:20:32', 4, 0, 0),
(839, '2021-01-15', '00824', '42', 7, '339.76', '680', '122', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-16 13:22:00', '2021-01-16 13:22:00', 4, 0, 0),
(840, '2021-01-15', '00825', '215', 7, '287.44', '580', '122', '150', '1', '7', '2', '8', '12150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-16 13:22:55', '2021-01-16 13:22:55', 4, 0, 0),
(841, '2021-01-16', '00826', '20', 7, '287.54', '580', '122', '150', '1', '7', '2', '8', '9150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-18 07:00:34', '2021-01-18 07:00:34', 4, 0, 0),
(842, '2021-01-16', '00827', '15', 7, '333.71', '670', '122', '150', '1', '7', '2', '8', '9150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-18 07:03:13', '2021-01-18 07:03:13', 4, 0, 0),
(843, '2021-01-16', '00828', '16', 7, '287.34', '580', '122', '150', '1', '7', '2', '8', '9150', '0', '8', '0', '1', '122.175.246.186', 6, '2021-01-18 07:04:25', '2021-01-26 07:23:00', 4, 0, 0),
(844, '2021-01-16', '00829', '44', 7, '337.36', '680', '122', '150', '1', '7', '2', '8', '12150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-18 07:05:26', '2021-01-18 07:05:26', 4, 0, 0),
(845, '2021-01-16', '00830', '37', 7, '336.96', '680', '122', '150', '1', '7', '2', '8', '9150', '0', '8', '0', '1', '122.175.246.186', 6, '2021-01-18 07:06:55', '2021-01-26 07:22:32', 4, 0, 0),
(846, '2021-01-16', '00831', '222', 7, '286.74', '580', '122', '150', '1', '7', '2', '8', '9150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-18 07:07:47', '2021-01-18 07:07:47', 4, 0, 0),
(847, '2021-01-16', '00832', '26', 7, '289.34', '580', '122', '150', '1', '7', '2', '8', '9000', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-18 07:08:47', '2021-01-18 07:08:47', 4, 0, 0),
(848, '2021-01-16', '00833', '65', 7, '291.98', '590', '122', '150', '1', '7', '2', '8', '11850', '0', '8', '0', '1', '122.175.246.186', 6, '2021-01-18 07:09:52', '2021-01-26 07:21:50', 4, 0, 0),
(849, '2021-01-16', '00834', '10', 7, '335.76', '680', '122', '150', '1', '7', '2', '8', '2750', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-18 07:11:00', '2021-01-18 07:11:00', 4, 0, 0),
(850, '2021-01-16', '00835', '6', 7, '338.46', '680', '122', '150', '1', '7', '2', '8', '12150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-18 07:12:00', '2021-01-18 07:12:00', 4, 0, 0),
(851, '2021-01-16', '00836', '220', 7, '291.78', '590', '122', '150', '1', '7', '2', '8', '9150', '0', '8', '0', '1', '110.224.199.247', 6, '2021-01-18 07:13:28', '2021-02-02 13:58:48', 4, 0, 0),
(852, '2021-01-16', '00837', '19', 7, '287.24', '580', '122', '150', '1', '7', '2', '8', '12150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-18 07:14:21', '2021-01-18 07:14:21', 4, 0, 0),
(853, '2021-01-16', '00838', '12', 7, '292.88', '590', '122', '150', '1', '7', '2', '8', '10950', '0', '8', '0', '1', '122.175.246.186', 6, '2021-01-18 07:17:05', '2021-01-26 07:21:03', 4, 0, 0),
(854, '2021-01-16', '00839', '214', 7, '292.78', '590', '122', '150', '1', '7', '2', '8', '11650', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-18 07:19:46', '2021-01-18 07:19:46', 4, 0, 0),
(855, '2021-01-16', '00840', '212', 7, '287.74', '580', '122', '150', '1', '7', '2', '8', '12150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-18 07:20:51', '2021-01-18 07:20:51', 4, 0, 0),
(856, '2021-01-16', '00841', '40', 7, '337.46', '680', '122', '150', '1', '7', '2', '8', '9150', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-18 07:21:44', '2021-01-18 07:21:44', 4, 0, 0),
(857, '2021-01-16', '00842', '210', 7, '291.38', '590', '122', '150', '1', '7', '2', '8', '9150', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-18 07:22:41', '2021-01-20 07:32:47', 4, 0, 0),
(858, '2021-01-18', '00843', '124', 7, '333.61', '670', '127.5', '150', '1', '7', '2', '8', '24000', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-20 07:46:32', '2021-01-20 07:46:32', 4, 0, 0),
(859, '2021-01-18', '00844', '397', 7, '294.18', '590', '127.5', '150', '1', '7', '2', '8', '24000', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-20 07:52:17', '2021-01-20 07:52:17', 4, 0, 0),
(860, '2021-01-18', '00845', '123', 7, '295.38', '590', '127.5', '150', '1', '7', '2', '8', '24000', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-20 07:53:16', '2021-01-20 07:53:16', 4, 0, 0),
(861, '2021-01-18', '00846', '398', 7, '334.41', '670', '127.5', '150', '1', '7', '2', '8', '24000', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-20 08:00:51', '2021-01-20 08:00:51', 4, 0, 0),
(862, '2021-01-18', '00847', '106', 7, '293.48', '590', '127.5', '150', '1', '7', '2', '8', '20900', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-20 08:16:25', '2021-01-20 08:16:25', 4, 0, 0),
(863, '2021-01-18', '00848', '108', 7, '288.14', '580', '127.5', '150', '1', '7', '2', '8', '20800', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-20 08:17:24', '2021-01-20 08:17:24', 4, 0, 0),
(864, '2021-01-18', '00849', '107', 7, '201.28', '590', '127.5', '150', '1', '7', '2', '8', '20700', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-20 08:18:15', '2021-01-20 08:18:15', 4, 0, 0),
(865, '2021-01-18', '00850', '334', 7, '293.38', '590', '127.5', '150', '1', '7', '2', '8', '19500', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-20 08:19:11', '2021-01-20 08:19:11', 4, 0, 0),
(866, '2021-01-18', '00851', '399', 7, '292.28', '590', '127.5', '150', '1', '7', '2', '8', '20000', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-20 08:40:54', '2021-01-20 08:40:54', 4, 0, 0),
(867, '2021-01-18', '00852', '216', 7, '293.78', '590', '127.5', '150', '1', '7', '2', '8', '7150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-20 08:44:54', '2021-01-20 08:44:54', 4, 0, 0),
(868, '2021-01-18', '00853', '43', 7, '339.86', '680', '127.5', '150', '1', '7', '2', '8', '11500', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-20 08:45:57', '2021-01-20 08:45:57', 4, 0, 0),
(869, '2021-01-18', '00854', '25', 7, '294.38', '590', '127.5', '150', '1', '7', '2', '8', '1850', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-20 08:46:57', '2021-01-20 08:46:57', 4, 0, 0),
(870, '2021-01-19', '00855', '85', 7, '281.43', '564', '127.5', '150', '1', '7', '2', '8', '21000', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-20 09:16:57', '2021-01-20 09:16:57', 4, 0, 0),
(871, '2021-01-19', '00856', '339', 7, '293.18', '590', '127.5', '150', '1', '7', '2', '8', '24000', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-20 09:17:39', '2021-01-20 09:17:39', 4, 0, 0),
(872, '2021-01-19', '00857', '400', 7, '293.48', '590', '127.5', '150', '1', '7', '2', '8', '24000', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-20 09:25:56', '2021-01-20 09:25:56', 4, 0, 0),
(873, '2021-01-19', '00858', '335', 7, '338.40', '690', '127.5', '150', '1', '7', '2', '8', '19230', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-20 09:42:48', '2021-01-20 09:42:48', 4, 0, 0),
(874, '2021-01-19', '00859', '337', 7, '344.30', '690', '127.5', '150', '1', '7', '2', '8', '21000', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-20 09:43:45', '2021-01-20 09:43:45', 4, 0, 0),
(875, '2021-01-19', '00860', '200', 7, '291.88', '590', '127.5', '150', '1', '7', '2', '8', '24000', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-20 09:44:26', '2021-01-20 09:44:26', 4, 0, 0),
(876, '2021-01-19', '00861', '41', 7, '337.80', '690', '127.5', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-20 09:45:22', '2021-01-20 09:45:22', 4, 0, 0),
(877, '2021-01-19', '00862', '219', 7, '288.58', '590', '127.5', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-20 09:46:23', '2021-01-20 09:46:23', 4, 0, 0),
(878, '2021-01-19', '00863', '17', 7, '292.68', '590', '127.5', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-20 09:47:57', '2021-01-20 09:47:57', 4, 0, 0),
(879, '2021-01-19', '00864', '21', 7, '290.28', '590', '127.5', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-20 09:48:42', '2021-01-20 09:48:42', 4, 0, 0),
(880, '2021-01-19', '00865', '38', 7, '285.64', '590', '127.5', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-20 09:49:47', '2021-01-20 09:49:47', 4, 0, 0),
(881, '2021-01-19', '00866', '215', 7, '282.74', '580', '127.5', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-20 09:51:05', '2021-01-20 09:51:05', 4, 0, 0),
(882, '2021-01-19', '00867', '42', 7, '340.20', '690', '127.5', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-20 09:52:04', '2021-01-20 09:52:04', 4, 0, 0),
(883, '2021-01-19', '00868', '8', 7, '339.20', '690', '127.5', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-20 09:53:59', '2021-01-20 09:53:59', 4, 0, 0),
(884, '2021-01-19', '00869', '20', 7, '290.58', '590', '127.5', '150', '1', '7', '2', '8', '2150', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-20 10:07:06', '2021-01-20 10:07:06', 4, 0, 0),
(885, '2021-01-19', '00870', '212', 7, '286.24', '580', '127.5', '150', '1', '7', '2', '8', '2150', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-20 10:08:20', '2021-01-20 10:08:20', 4, 0, 0),
(886, '2021-01-19', '00871', '198', 7, '290.48', '590', '127.5', '150', '1', '7', '2', '8', '2150', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-20 10:09:24', '2021-01-20 10:09:24', 4, 0, 0),
(887, '2021-01-19', '00872', '13', 7, '329.72', '670', '127.5', '150', '1', '7', '2', '8', '2150', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-20 10:10:31', '2021-01-20 10:12:59', 4, 0, 0),
(888, '2021-01-19', '00873', '11', 7, '340.50', '690', '127.5', '150', '1', '7', '2', '8', '2150', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-20 10:15:14', '2021-01-20 10:15:14', 4, 0, 0),
(889, '2021-01-19', '00874', '232', 7, '289.58', '590', '127.50', '150', '1', '7', '2', '8', '2150', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-20 10:16:14', '2021-01-20 10:16:14', 4, 0, 0),
(890, '2021-01-19', '00875', '12', 7, '291.60', '590', '127.5', '150', '1', '7', '2', '8', '2150', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-20 10:17:49', '2021-01-20 10:17:49', 4, 0, 0),
(891, '2021-01-19', '00876', '213', 7, '291.48', '590', '127.5', '150', '1', '7', '2', '8', '2150', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-20 10:18:39', '2021-01-20 10:18:39', 4, 0, 0),
(892, '2021-01-19', '00877', '211', 7, '289.58', '590', '127.5', '150', '1', '7', '2', '8', '2150', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-20 10:19:31', '2021-01-20 10:19:31', 4, 0, 0),
(893, '2021-01-19', '00878', '207', 7, '291.48', '590', '127.5', '150', '1', '7', '2', '8', '24000', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-20 10:22:32', '2021-01-20 10:22:32', 4, 0, 0),
(894, '2021-01-19', '00879', '344', 7, '293.08', '590', '127.5', '150', '1', '7', '2', '8', '24000', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-20 10:23:37', '2021-01-20 10:23:37', 4, 0, 0),
(895, '2021-01-19', '00880', '222', 7, '287.78', '590', '127.5', '150', '1', '7', '2', '8', '2150', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-20 10:24:54', '2021-01-20 10:24:54', 4, 0, 0),
(896, '2021-01-14', '00881', '43', 7, '335.86', '680', '122', '150', '1', '3', '2', '4', '2500', '0', '11', '0', '1', '122.175.152.77', 6, '2021-01-20 11:26:13', '2021-01-23 07:28:14', 4, 0, 0),
(897, '2021-01-14', '00882', '54', 7, '342.7', '690', '122', '150', '1', '3', '2', '4', '26000', '0', '6', '0', '1', '122.175.152.77', 6, '2021-01-20 11:27:11', '2021-01-23 07:29:55', 4, 0, 0),
(898, '2021-01-16', '00883', '162', 7, '296.22', '600', '122', '150', '1', '3', '2', '4', '26000', '0', '11', '0', '1', '122.175.152.77', 6, '2021-01-20 11:28:16', '2021-01-20 11:28:16', 4, 0, 0),
(899, '2021-01-18', '00884', '67', 7, '336.66', '680', '127.5', '150', '1', '3', '2', '4', '1500', '0', '11', '0', '1', '122.175.152.77', 6, '2021-01-20 11:29:20', '2021-01-23 07:17:41', 4, 0, 0),
(900, '2021-01-18', '00885', '45', 7, '336.26', '680', '127.5', '150', '1', '3', '2', '4', '1500', '0', '11', '0', '1', '122.175.152.77', 6, '2021-01-20 11:30:06', '2021-01-23 07:31:12', 4, 0, 0),
(901, '2021-01-18', '00886', '54', 7, '338.06', '680', '127.5', '150', '1', '3', '2', '4', '26000', '0', '6', '0', '1', '122.175.152.77', 6, '2021-01-20 11:31:35', '2021-01-20 11:31:35', 4, 0, 0),
(902, '2021-01-20', '00887', '204', 7, '289.38', '590', '127.5', '150', '1', '7', '2', '8', '24000', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-21 09:42:53', '2021-01-21 09:42:53', 4, 0, 0),
(903, '2021-01-20', '00888', '205', 7, '290.98', '590', '127.5', '150', '1', '7', '2', '8', '24000', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-21 09:44:12', '2021-01-21 09:44:12', 4, 0, 0),
(904, '2021-01-20', '00889', '371', 7, '289.98', '590', '127.5', '150', '1', '7', '2', '8', '21000', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-21 09:45:19', '2021-01-21 09:45:19', 4, 0, 0),
(905, '2021-01-20', '00890', '365', 7, '290.88', '590', '127.5', '150', '1', '7', '2', '8', '24000', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-21 09:47:01', '2021-01-21 09:47:01', 4, 0, 0),
(906, '2021-01-20', '00891', '66', 7, '289.68', '590', '127.5', '150', '1', '7', '2', '8', '2150', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-21 09:48:32', '2021-01-21 09:48:32', 4, 0, 0),
(907, '2021-01-20', '00892', '44', 7, '338.30', '690', '127.5', '150', '1', '7', '2', '8', '2150', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-21 09:49:29', '2021-01-21 09:49:29', 4, 0, 0),
(908, '2021-01-20', '00893', '67', 7, '342.60', '690', '127.5', '150', '1', '7', '2', '8', '1500', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-21 09:50:48', '2021-01-21 09:50:48', 4, 0, 0),
(909, '2021-01-20', '00894', '19', 7, '291.38', '590', '127.5', '150', '1', '7', '2', '8', '2150', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-21 09:52:23', '2021-01-21 09:52:23', 4, 0, 0),
(910, '2021-01-20', '00895', '37', 7, '339.50', '690', '127.5', '150', '1', '7', '2', '8', '2150', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-21 09:53:28', '2021-01-21 09:53:28', 4, 0, 0),
(911, '2021-01-11', '00896', '237', 8, '240', '600', '0', '0', '4', '20', '3', '9', '0', '0', '10', '0', '0', '122.175.152.77', 5, '2021-01-21 09:53:31', '2021-01-21 09:53:31', 4, 0, 1),
(912, '2021-01-20', '00897', '16', 7, '286.94', '580', '127.5', '150', '1', '7', '2', '8', '2150', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-21 09:55:03', '2021-01-21 09:55:03', 4, 0, 0),
(913, '2021-01-11', '00898', '235', 8, '240', '600', '0', '0', '4', '20', '3', '9', '0', '0', '10', '0', '0', '122.175.152.77', 5, '2021-01-21 09:55:28', '2021-01-21 09:55:28', 4, 0, 1),
(914, '2021-01-20', '00899', '24', 7, '291.38', '590', '127.5', '150', '1', '7', '2', '8', '2150', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-21 09:55:44', '2021-01-21 09:55:44', 4, 0, 0),
(915, '2021-01-11', '00900', '243', 8, '240', '600', '0', '0', '4', '13', '3', '9', '0', '0', '10', '0', '0', '122.175.152.77', 5, '2021-01-21 09:56:40', '2021-01-21 09:56:40', 4, 0, 1),
(916, '2021-01-20', '00901', '214', 7, '289.78', '590', '127.5', '150', '1', '7', '2', '8', '2150', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-21 09:57:29', '2021-01-21 09:57:29', 4, 0, 0),
(917, '2021-01-20', '00902', '210', 7, '288.48', '590', '127.5', '150', '1', '7', '2', '8', '2150', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-21 09:58:23', '2021-01-21 09:58:23', 4, 0, 0),
(918, '2021-01-11', '00903', '242', 8, '240', '600', '0', '0', '4', '17', '3', '9', '0', '0', '10', '0', '0', '122.175.152.77', 5, '2021-01-21 09:59:24', '2021-01-21 09:59:24', 4, 0, 1),
(919, '2021-01-20', '00904', '26', 7, '286.14', '580', '127.5', '150', '1', '7', '2', '8', '2150', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-21 10:00:16', '2021-01-21 10:00:16', 4, 0, 0),
(920, '2021-01-11', '00905', '30', 8, '240', '600', '0', '0', '4', '26', '3', '9', '0', '100', '10', '0', '0', '122.175.152.77', 5, '2021-01-21 10:00:21', '2021-01-21 10:11:32', 4, 0, 1),
(921, '2021-01-20', '00906', '65', 7, '292.88', '590', '127.5', '150', '1', '7', '2', '8', '2150', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-21 10:00:54', '2021-01-21 10:00:54', 4, 0, 0),
(922, '2021-01-11', '00907', '239', 8, '240', '600', '0', '0', '4', '17', '3', '9', '0', '0', '10', '0', '0', '122.175.152.77', 5, '2021-01-21 10:01:20', '2021-01-21 10:01:20', 4, 0, 1),
(923, '2021-01-11', '00908', '49', 8, '200', '500', '0', '0', '4', '13', '3', '9', '0', '0', '10', '0', '0', '122.175.152.77', 5, '2021-01-21 10:03:21', '2021-01-21 10:03:21', 4, 0, 1),
(924, '2021-01-11', '00909', '49', 8, '40', '100', '0', '0', '4', '13', '3', '9', '0', '0', '10', '0', '0', '122.175.152.77', 5, '2021-01-21 10:05:22', '2021-01-21 10:05:22', 4, 0, 1),
(925, '2021-01-20', '00910', '220', 7, '291.28', '590', '127.5', '150', '1', '7', '2', '8', '2150', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-21 10:06:37', '2021-01-21 10:06:37', 4, 0, 0),
(926, '2021-01-11', '00911', '245', 8, '240', '600', '0', '0', '4', '16', '3', '9', '0', '100', '10', '0', '0', '122.175.152.77', 5, '2021-01-21 10:06:44', '2021-01-21 10:10:56', 4, 0, 1),
(927, '2021-01-20', '00912', '40', 7, '339.60', '690', '127.5', '150', '1', '7', '2', '8', '2150', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-21 10:07:26', '2021-01-21 10:07:26', 4, 0, 0),
(928, '2021-01-11', '00913', '35', 8, '240', '600', '0', '0', '4', '16', '3', '9', '0', '0', '10', '0', '0', '122.175.152.77', 5, '2021-01-21 10:07:53', '2021-01-21 10:07:53', 4, 0, 1),
(929, '2021-01-20', '00914', '15', 7, '340.40', '690', '127.5', '150', '1', '7', '2', '8', '2150', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-21 10:08:32', '2021-01-21 10:08:32', 4, 0, 0),
(930, '2021-01-11', '00915', '50', 8, '240', '600', '0', '0', '4', '23', '3', '9', '0', '100', '10', '0', '0', '122.175.152.77', 5, '2021-01-21 10:09:10', '2021-01-21 10:09:10', 4, 0, 1),
(931, '2021-01-20', '00916', '23', 7, '291.08', '590', '127.5', '150', '1', '7', '2', '8', '2650', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-21 10:10:18', '2021-01-21 10:10:18', 4, 0, 0),
(932, '2021-01-20', '00917', '22', 7, '289.38', '590', '127.5', '150', '1', '7', '2', '8', '3250', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-21 10:10:58', '2021-01-21 10:10:58', 4, 0, 0),
(933, '2021-01-20', '00918', '6', 7, '340.5', '690', '127.5', '150', '1', '7', '2', '8', '2750', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-21 10:12:46', '2021-01-21 10:12:46', 4, 0, 0),
(934, '2021-01-20', '00919', '233', 7, '342', '690', '127.5', '150', '1', '7', '2', '8', '8900', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-21 10:13:40', '2021-01-21 10:13:40', 4, 0, 0),
(935, '2021-01-20', '00920', '209', 7, '289.08', '590', '127.5', '150', '1', '7', '2', '8', '3150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-21 10:14:43', '2021-01-21 10:14:43', 4, 0, 0),
(936, '2021-01-20', '00921', '18', 7, '293.28', '590', '127.5', '150', '1', '7', '2', '8', '2300', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-21 10:15:27', '2021-01-21 10:15:27', 4, 0, 0),
(937, '2021-01-20', '00922', '10', 7, '340.10', '690', '127.5', '150', '1', '7', '2', '8', '9150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-21 10:16:20', '2021-01-21 10:16:20', 4, 0, 0),
(938, '2021-01-21', '00923', '212', 7, '285.84', '580', '127.5', '150', '1', '7', '2', '8', '2150', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-22 07:26:12', '2021-01-22 07:26:12', 4, 0, 0),
(939, '2021-01-21', '00924', '20', 7, '294.28', '590', '127.5', '150', '1', '7', '2', '8', '1500', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-22 07:45:47', '2021-01-22 07:45:47', 4, 0, 0),
(940, '2021-01-21', '00925', '216', 7, '292.28', '590', '127.5', '150', '1', '7', '2', '8', '2150', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-22 07:47:54', '2021-01-22 07:47:54', 4, 0, 0),
(941, '2021-01-21', '00926', '25', 7, '293.48', '590', '127.5', '150', '1', '7', '2', '8', '1500', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-22 07:52:59', '2021-01-22 07:52:59', 4, 0, 0),
(942, '2021-01-21', '00927', '39', 7, '296.28', '590', '127.5', '150', '1', '7', '2', '8', '2650', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-22 07:58:20', '2021-01-22 07:58:20', 4, 0, 0),
(943, '2021-01-21', '00928', '215', 7, '292.58', '590', '127.5', '150', '1', '7', '2', '8', '2750', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-22 07:59:30', '2021-01-22 07:59:30', 4, 0, 0),
(944, '2021-01-21', '00929', '430', 7, '293.08', '590', '127.5', '150', '1', '7', '2', '8', '24000', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-22 08:09:56', '2021-01-22 08:09:56', 4, 0, 0),
(945, '2021-01-21', '00930', '336', 7, '292.58', '590', '127.5', '150', '1', '7', '2', '8', '24000', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-22 08:11:09', '2021-01-22 08:11:09', 4, 0, 0),
(946, '2021-01-21', '00931', '36', 7, '337.96', '680', '127.5', '150', '1', '3', '2', '4', '2100', '0', '11', '0', '1', '122.175.152.77', 6, '2021-01-23 07:33:47', '2021-01-25 08:29:33', 4, 0, 0),
(947, '2021-01-21', '00932', '45', 7, '335.86', '680', '127.5', '150', '1', '3', '2', '4', '11800', '0', '11', '0', '1', '122.175.152.77', 6, '2021-01-23 07:34:48', '2021-01-23 07:34:48', 4, 0, 0),
(948, '2021-01-22', '00933', '219', 7, '290.88', '590', '127.5', '150', '1', '3', '2', '4', '3300', '190', '11', '0', '1', '122.175.152.77', 6, '2021-01-23 07:50:00', '2021-01-23 07:50:00', 4, 0, 0),
(949, '2021-01-22', '00934', '41', 7, '335.26', '680', '127.5', '150', '1', '3', '2', '4', '1950', '205', '11', '0', '1', '122.175.152.77', 6, '2021-01-23 07:51:40', '2021-01-23 07:51:40', 4, 0, 0),
(950, '2021-01-22', '00935', '17', 7, '285.64', '580', '127.5', '150', '1', '3', '2', '4', '1700', '190', '11', '0', '1', '122.175.152.77', 6, '2021-01-23 07:53:23', '2021-01-23 07:53:23', 4, 0, 0),
(951, '2021-01-22', '00936', '198', 7, '291.38', '590', '127.5', '150', '1', '3', '2', '4', '1825', '190', '11', '0', '1', '122.175.152.77', 6, '2021-01-23 07:54:46', '2021-01-23 07:54:46', 4, 0, 0),
(952, '2021-01-22', '00937', '13', 7, '333.49', '675', '127.5', '150', '1', '3', '2', '4', '1500', '205', '11', '0', '1', '122.175.152.77', 6, '2021-01-23 07:56:17', '2021-01-23 07:56:17', 4, 0, 0),
(953, '2021-01-22', '00938', '9', 7, '336.06', '680', '127.5', '150', '1', '3', '2', '4', '1500', '205', '11', '0', '1', '122.175.152.77', 6, '2021-01-23 07:58:44', '2021-01-23 07:58:44', 4, 0, 0),
(954, '2021-01-22', '00939', '11', 7, '335.76', '680', '127.5', '150', '1', '3', '2', '4', '1500', '205', '11', '0', '1', '122.175.152.77', 6, '2021-01-23 08:02:21', '2021-01-23 08:02:21', 4, 0, 0),
(955, '2021-01-22', '00940', '67', 7, '340', '690', '127.5', '150', '1', '3', '2', '4', '1825', '205', '11', '0', '1', '122.175.152.77', 6, '2021-01-23 08:03:58', '2021-01-23 08:03:58', 4, 0, 0),
(956, '2021-01-22', '00941', '102', 7, '293.78', '590', '127.5', '150', '1', '7', '2', '8', '26000', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-23 09:47:37', '2021-01-23 09:47:37', 4, 0, 0),
(957, '2021-01-22', '00942', '211', 7, '292.68', '590', '127.5', '150', '1', '7', '2', '8', '2350', '190', '4', '0', '1', '122.175.152.77', 6, '2021-01-23 09:48:42', '2021-01-23 09:48:42', 4, 0, 0),
(958, '2021-01-22', '00943', '8', 7, '340.60', '690', '127.5', '150', '1', '7', '2', '8', '5400', '205', '4', '0', '1', '122.175.152.77', 6, '2021-01-23 09:50:21', '2021-01-23 09:50:21', 4, 0, 0),
(959, '2021-01-22', '00944', '38', 7, '287.24', '580', '127.5', '150', '1', '7', '2', '8', '2950', '190', '4', '0', '1', '122.175.152.77', 6, '2021-01-23 09:51:24', '2021-01-23 09:51:24', 4, 0, 0),
(960, '2021-01-22', '00945', '21', 7, '290.78', '590', '127.5', '150', '1', '7', '2', '8', '8950', '190', '4', '0', '1', '122.175.152.77', 6, '2021-01-23 09:52:36', '2021-01-23 09:52:36', 4, 0, 0),
(961, '2021-01-22', '00946', '222', 7, '292.28', '590', '127.5', '150', '1', '7', '2', '8', '5150', '190', '4', '0', '1', '122.175.152.77', 6, '2021-01-23 09:53:50', '2021-01-23 09:53:50', 4, 0, 0),
(962, '2021-01-22', '00947', '42', 7, '342.30', '690', '127.5', '150', '1', '7', '2', '8', '3450', '205', '4', '0', '1', '122.175.152.77', 6, '2021-01-23 09:55:36', '2021-01-25 08:20:16', 4, 0, 0),
(963, '2021-01-22', '00948', '213', 7, '293.38', '590', '127.5', '150', '1', '7', '2', '8', '2550', '190', '4', '0', '1', '122.175.152.77', 6, '2021-01-23 09:56:46', '2021-01-23 09:56:46', 4, 0, 0),
(964, '2021-01-23', '00949', '340', 7, '285.38', '590', '127.5', '150', '1', '7', '2', '8', '26000', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-25 07:22:29', '2021-01-25 07:22:29', 4, 0, 0),
(965, '2021-01-23', '00950', '399', 7, '290.38', '590', '127.5', '150', '1', '7', '2', '8', '21000', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-25 07:24:34', '2021-01-25 07:24:34', 4, 0, 0),
(966, '2021-01-23', '00951', '85', 7, '294.08', '590', '127.5', '150', '1', '7', '2', '8', '23000', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-25 07:25:22', '2021-01-25 07:25:22', 4, 0, 0),
(967, '2021-01-23', '00952', '207', 7, '292.48', '590', '127.5', '150', '1', '7', '2', '8', '22500', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-25 07:26:07', '2021-01-25 07:26:07', 4, 0, 0),
(968, '2021-01-23', '00953', '20', 7, '291.08', '590', '127.5', '150', '1', '7', '2', '8', '1800', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-25 07:28:33', '2021-01-25 07:28:33', 4, 0, 0),
(969, '2021-01-23', '00954', '24', 7, '291.48', '590', '127.5', '150', '1', '7', '2', '8', '1500', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-25 07:31:59', '2021-01-25 07:31:59', 4, 0, 0),
(970, '2021-01-23', '00955', '44', 7, '341', '690', '127.5', '150', '1', '7', '2', '8', '2150', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-25 07:32:58', '2021-01-25 07:32:58', 4, 0, 0),
(971, '2021-01-23', '00956', '212', 7, '291.88', '590', '127.5', '150', '1', '7', '2', '8', '2150', '0', '4', '0', '1', '122.175.152.77', 6, '2021-01-25 07:33:51', '2021-01-25 07:33:51', 4, 0, 0),
(972, '2021-01-23', '00957', '107', 7, '290.08', '590', '127.5', '150', '1', '7', '2', '8', '19500', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-25 07:42:38', '2021-01-25 07:51:14', 4, 0, 0),
(973, '2021-01-23', '00958', '106', 7, '292.68', '590', '127.5', '150', '1', '7', '2', '8', '19600', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-25 07:43:54', '2021-01-25 07:50:29', 4, 0, 0),
(974, '2021-01-23', '00959', '108', 7, '293.18', '590', '127.5', '150', '1', '7', '2', '8', '19600', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-25 07:49:18', '2021-01-25 07:49:18', 4, 0, 0),
(975, '2021-01-23', '00960', '334', 7, '291.98', '590', '127.5', '150', '1', '7', '2', '8', '19500', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-25 07:53:12', '2021-01-25 11:42:06', 4, 0, 0),
(976, '2021-01-23', '00961', '357', 7, '291.88', '590', '127.5', '150', '1', '7', '2', '8', '24000', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-25 07:54:04', '2021-01-25 07:54:04', 4, 0, 0),
(977, '2021-01-23', '00962', '338', 7, '292.18', '590', '127.5', '150', '1', '7', '2', '8', '24000', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-25 07:54:51', '2021-01-25 07:54:51', 4, 0, 0),
(978, '2021-01-23', '00963', '124', 7, '336.66', '680', '127.5', '150', '1', '7', '2', '8', '24500', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-25 07:59:59', '2021-01-25 07:59:59', 4, 0, 0),
(979, '2021-01-23', '00964', '398', 7, '335.26', '680', '127.5', '150', '1', '7', '2', '8', '24000', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-25 08:00:58', '2021-01-25 08:00:58', 4, 0, 0),
(980, '2021-01-23', '00965', '123', 7, '291.48', '590', '127.5', '150', '1', '7', '2', '8', '24000', '0', '8', '0', '1', '110.224.199.247', 6, '2021-01-25 08:02:08', '2021-02-03 07:15:15', 4, 0, 0),
(981, '2021-01-23', '00966', '16', 7, '292.18', '590', '127.5', '150', '1', '7', '2', '8', '1500', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-25 08:03:09', '2021-01-25 08:03:09', 4, 0, 0),
(982, '2021-01-23', '00967', '37', 7, '343', '690', '127.5', '150', '1', '7', '2', '8', '1500', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-25 08:04:03', '2021-01-25 08:04:03', 4, 0, 0),
(983, '2021-01-23', '00968', '19', 7, '393.58', '590', '127.5', '150', '1', '7', '2', '8', '2250', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-25 08:05:22', '2021-01-25 08:05:22', 4, 0, 0),
(984, '2021-01-23', '00969', '210', 7, '291.88', '590', '127.5', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-25 08:06:10', '2021-01-25 08:06:10', 4, 0, 0),
(985, '2021-01-23', '00970', '18', 7, '293.48', '590', '127.5', '150', '1', '7', '2', '8', '1500', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-25 08:07:40', '2021-01-25 08:07:40', 4, 0, 0),
(986, '2021-01-23', '00971', '26', 7, '287.04', '580', '127.5', '150', '1', '7', '2', '8', '1500', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-25 08:08:21', '2021-01-25 08:08:21', 4, 0, 0),
(987, '2021-01-23', '00972', '220', 7, '291.48', '590', '127.5', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-25 08:09:09', '2021-01-25 08:09:09', 4, 0, 0),
(988, '2021-01-23', '00973', '65', 7, '290.78', '590', '127.5', '150', '1', '7', '2', '8', '7150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-25 08:10:03', '2021-01-25 08:10:03', 4, 0, 0),
(989, '2021-01-23', '00974', '214', 7, '293.98', '590', '127.5', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '122.175.152.77', 6, '2021-01-25 08:10:45', '2021-01-25 08:10:45', 4, 0, 0),
(990, '2021-01-23', '00975', '171', 7, '247.40', '500', '127.5', '150', '1', '3', '2', '4', '26000', '0', '11', '0', '1', '122.175.246.186', 6, '2021-01-26 06:57:40', '2021-01-26 06:57:40', 4, 0, 0),
(991, '2021-01-23', '00976', '169', 7, '248', '500', '127.5', '150', '1', '3', '2', '4', '26000', '0', '11', '0', '1', '122.175.246.186', 6, '2021-01-26 06:58:59', '2021-01-26 06:58:59', 4, 0, 0),
(992, '2021-01-23', '00977', '342', 7, '289.78', '590', '127.5', '150', '1', '3', '2', '4', '26000', '0', '11', '0', '1', '122.175.246.186', 6, '2021-01-26 07:00:14', '2021-01-26 07:00:14', 4, 0, 0),
(993, '2021-01-23', '00978', '43', 7, '338.36', '680', '127.5', '150', '1', '3', '2', '4', '1650', '0', '11', '0', '1', '122.175.246.186', 6, '2021-01-26 07:01:28', '2021-01-26 07:01:28', 4, 0, 0),
(994, '2021-01-23', '00979', '12', 7, '286.04', '580', '127.5', '150', '1', '3', '2', '4', '4000', '0', '11', '0', '1', '122.175.246.186', 6, '2021-01-26 07:02:59', '2021-01-26 07:02:59', 4, 0, 0),
(995, '2021-01-23', '00980', '54', 7, '343.6', '690', '127.5', '150', '1', '3', '2', '4', '26000', '0', '6', '0', '1', '122.175.246.186', 6, '2021-01-26 07:03:55', '2021-01-26 07:13:42', 4, 0, 0),
(996, '2021-01-25', '00981', '223', 7, '292.68', '590', '127.5', '150', '1', '3', '2', '4', '26000', '0', '3', '0', '1', '122.175.246.186', 6, '2021-01-26 07:04:59', '2021-01-26 07:04:59', 4, 0, 0),
(997, '2021-01-25', '00982', '455', 7, '292.98', '590', '127.5', '150', '1', '7', '2', '8', '18500', '0', '8', '0', '1', '122.175.246.186', 6, '2021-01-27 09:32:09', '2021-01-27 09:32:09', 4, 0, 0),
(998, '2021-01-25', '00983', '454', 7, '292.68', '590', '127.5', '150', '1', '7', '2', '8', '18500', '0', '8', '0', '1', '122.175.246.186', 6, '2021-01-27 09:33:03', '2021-01-27 09:33:03', 4, 0, 0),
(999, '2021-01-25', '00984', '21', 7, '295.57', '590', '127.5', '150', '1', '7', '2', '8', '1700', '0', '8', '0', '1', '122.175.246.186', 6, '2021-01-27 09:35:14', '2021-01-27 09:35:14', 4, 0, 0),
(1000, '2021-01-25', '00985', '211', 7, '290.58', '590', '127.5', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '122.175.246.186', 6, '2021-01-27 09:36:03', '2021-01-27 09:36:03', 4, 0, 0),
(1001, '2021-01-25', '00986', '8', 7, '341.80', '690', '127.5', '150', '1', '7', '2', '8', '900', '0', '8', '0', '1', '122.175.246.186', 6, '2021-01-27 09:36:50', '2021-01-27 09:36:50', 4, 0, 0),
(1002, '2021-01-25', '00987', '20', 7, '292.48', '590', '127.5', '150', '1', '7', '2', '8', '300', '0', '8', '0', '1', '122.175.246.186', 6, '2021-01-27 09:37:33', '2021-01-27 09:37:33', 4, 0, 0),
(1003, '2021-01-25', '00988', '213', 7, '291.38', '590', '127.5', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '110.224.199.247', 6, '2021-01-27 09:38:30', '2021-02-03 07:18:39', 4, 0, 0),
(1004, '2021-01-25', '00989', '222', 7, '290.68', '590', '127.5', '150', '1', '7', '2', '8', '2150', '0', '8', '0', '1', '122.175.246.186', 6, '2021-01-27 09:39:26', '2021-01-27 09:39:26', 4, 0, 0),
(1005, '2021-01-25', '00990', '215', 7, '293.18', '590', '127.5', '150', '1', '7', '2', '8', '2300', '0', '12', '0', '1', '122.175.246.186', 6, '2021-01-27 09:43:10', '2021-01-27 09:43:10', 4, 0, 0),
(1006, '2021-01-25', '00991', '38', 7, '294.08', '590', '127.5', '150', '1', '7', '2', '8', '2150', '0', '12', '0', '1', '122.175.246.186', 6, '2021-01-27 09:46:37', '2021-01-27 09:46:37', 4, 0, 0),
(1007, '2021-01-25', '00992', '25', 7, '290.88', '590', '127.5', '150', '1', '7', '2', '8', '1800', '0', '12', '0', '1', '122.175.246.186', 6, '2021-01-27 09:47:33', '2021-01-27 09:47:33', 4, 0, 0),
(1008, '2021-01-25', '00993', '42', 7, '334.70', '690', '127.5', '150', '1', '7', '2', '8', '2600', '0', '12', '0', '1', '122.175.164.157', 6, '2021-01-27 09:48:30', '2021-01-27 12:16:16', 4, 0, 0),
(1009, '2021-01-25', '00994', '365', 7, '293.58', '590', '127.5', '150', '1', '7', '2', '8', '26000', '0', '12', '0', '1', '122.175.246.186', 6, '2021-01-27 09:49:22', '2021-01-27 09:49:22', 4, 0, 0),
(1010, '2021-01-25', '00995', '397', 7, '293.38', '590', '127.5', '150', '1', '7', '2', '8', '24000', '0', '12', '0', '1', '122.175.246.186', 6, '2021-01-27 09:50:04', '2021-01-27 09:50:04', 4, 0, 0),
(1011, '2021-01-25', '00996', '200', 7, '291.38', '590', '127.5', '150', '1', '7', '2', '8', '24000', '0', '12', '0', '1', '122.175.246.186', 6, '2021-01-27 09:50:55', '2021-01-27 09:50:55', 4, 0, 0),
(1012, '2021-01-25', '00997', '456', 7, '288.64', '580', '127.5', '150', '1', '7', '2', '8', '26000', '0', '12', '0', '1', '122.175.164.157', 6, '2021-01-27 09:53:31', '2021-01-27 12:38:08', 4, 0, 0),
(1013, '2021-01-27', '00998', '16', 7, '289.78', '590', '127.5', '150', '1', '7', '2', '8', '1500', '0', '12', '0', '1', '122.168.156.107', 6, '2021-01-28 06:54:33', '2021-01-28 06:54:33', 4, 0, 0),
(1014, '2021-01-27', '00999', '37', 7, '339.40', '690', '127.5', '150', '1', '7', '2', '8', '1500', '0', '12', '0', '1', '122.168.156.107', 6, '2021-01-28 06:55:33', '2021-01-28 06:55:33', 4, 0, 0),
(1015, '2021-01-27', '01000', '214', 7, '292.28', '590', '127.5', '150', '1', '7', '2', '8', '2150', '0', '12', '0', '1', '122.168.156.107', 6, '2021-01-28 07:01:10', '2021-01-28 07:01:10', 4, 0, 0),
(1016, '2021-01-27', '01001', '19', 7, '294.08', '590', '127.5', '150', '1', '7', '2', '8', '1500', '0', '12', '0', '1', '122.168.156.107', 6, '2021-01-28 07:02:09', '2021-01-28 07:02:09', 4, 0, 0),
(1017, '2021-01-27', '01002', '24', 7, '292.18', '590', '127.5', '150', '1', '7', '2', '8', '1500', '0', '12', '0', '1', '122.168.156.107', 6, '2021-01-28 07:03:16', '2021-01-28 07:03:16', 4, 0, 0),
(1018, '2021-01-27', '01003', '453', 7, '288.88', '590', '127.5', '150', '1', '7', '2', '8', '22000', '0', '12', '0', '1', '122.168.156.107', 6, '2021-01-28 07:04:28', '2021-01-28 07:04:28', 4, 0, 0),
(1019, '2021-01-27', '01004', '344', 7, '290.58', '590', '127.5', '150', '1', '7', '2', '8', '24000', '0', '12', '0', '1', '122.168.156.107', 6, '2021-01-28 07:05:58', '2021-01-28 07:05:58', 4, 0, 0),
(1020, '2021-01-27', '01005', '212', 7, '293.48', '590', '127.5', '150', '1', '7', '2', '8', '2150', '0', '12', '0', '1', '122.168.156.107', 6, '2021-01-28 07:07:36', '2021-01-28 07:07:36', 4, 0, 0),
(1021, '2021-01-27', '01006', '18', 7, '294.48', '590', '127.5', '150', '1', '7', '2', '8', '2000', '0', '12', '0', '1', '110.224.199.247', 6, '2021-01-28 07:09:15', '2021-02-03 07:27:37', 4, 0, 0),
(1022, '2021-01-27', '01007', '210', 7, '293.68', '590', '127.5', '150', '1', '7', '2', '8', '2550', '0', '12', '0', '1', '122.168.156.107', 6, '2021-01-28 07:10:43', '2021-01-28 07:10:43', 4, 0, 0),
(1023, '2021-01-23', '01008', '457', 7, '292.08', '590', '127.5', '150', '1', '7', '2', '8', '26000', '0', '12', '0', '1', '110.224.199.247', 6, '2021-01-30 07:23:34', '2021-02-02 13:52:33', 4, 0, 0),
(1024, '2021-01-29', '01009', '17', 7, '286.94', '580', '127.5', '150', '1', '3', '2', '4', '1500', '0', '11', '0', '1', '122.175.168.139', 6, '2021-01-30 07:32:42', '2021-01-30 08:59:22', 4, 0, 0),
(1025, '2021-01-29', '01010', '11', 7, '336.16', '680', '127.5', '150', '1', '3', '2', '4', '1500', '0', '11', '0', '1', '122.175.168.139', 6, '2021-01-30 07:33:56', '2021-01-30 09:00:08', 4, 0, 0),
(1026, '2021-01-29', '01011', '67', 7, '336.16', '680', '127.5', '150', '1', '3', '2', '4', '1850', '0', '11', '0', '1', '122.175.168.139', 6, '2021-01-30 07:36:46', '2021-01-30 09:01:57', 4, 0, 0),
(1027, '2021-01-29', '01012', '215', 7, '292.48', '590', '127.5', '150', '1', '3', '2', '4', '2200', '0', '11', '0', '1', '122.175.168.139', 6, '2021-01-30 07:41:19', '2021-01-30 09:03:19', 4, 0, 0),
(1028, '2021-01-29', '01013', '9', 7, '336.16', '680', '127.5', '150', '1', '3', '2', '4', '2750', '0', '11', '0', '1', '122.175.168.139', 6, '2021-01-30 07:42:25', '2021-01-30 09:06:44', 4, 0, 0),
(1029, '2021-01-29', '01014', '198', 7, '292.88', '590', '127.5', '150', '1', '3', '2', '4', '1500', '0', '11', '0', '1', '122.175.168.139', 6, '2021-01-30 07:44:58', '2021-01-30 09:07:28', 4, 0, 0),
(1030, '2021-01-29', '01015', '216', 7, '290.38', '590', '127.5', '150', '1', '3', '2', '4', '2150', '0', '11', '0', '1', '122.175.168.139', 6, '2021-01-30 07:48:08', '2021-01-30 09:09:38', 4, 0, 0),
(1031, '2021-01-29', '01016', '219', 7, '290.38', '590', '127.5', '150', '1', '3', '2', '4', '1500', '0', '11', '0', '1', '122.175.168.139', 6, '2021-01-30 07:49:08', '2021-01-30 09:11:02', 4, 0, 0),
(1032, '2021-01-29', '01017', '8', 7, '335.16', '680', '127.5', '150', '1', '3', '2', '4', '1500', '0', '11', '0', '1', '122.175.168.139', 6, '2021-01-30 07:50:31', '2021-01-30 09:14:17', 4, 0, 0),
(1033, '2021-01-29', '01018', '15', 7, '339.16', '680', '127.5', '150', '1', '3', '2', '4', '1500', '0', '11', '0', '1', '122.175.168.139', 6, '2021-01-30 07:51:40', '2021-01-30 09:15:08', 4, 0, 0),
(1034, '2021-01-29', '01019', '209', 7, '290.48', '590', '127.5', '150', '1', '3', '2', '4', '2150', '0', '11', '0', '1', '122.175.168.139', 6, '2021-01-30 07:52:42', '2021-01-30 09:15:48', 4, 0, 0),
(1035, '2021-01-29', '01020', '6', 7, '337.06', '680', '127.5', '150', '1', '3', '2', '4', '2150', '0', '11', '0', '1', '122.175.168.139', 6, '2021-01-30 07:54:33', '2021-01-30 09:16:35', 4, 0, 0),
(1036, '2021-01-29', '01021', '54', 7, '337.86', '680', '127.5', '150', '1', '3', '2', '4', '26000', '0', '6', '0', '1', '110.224.199.247', 6, '2021-01-30 07:55:15', '2021-02-04 06:27:00', 4, 0, 0),
(1037, '2021-01-30', '01022', '13', 7, '335.79', '675', '127.5', '150', '1', '3', '2', '4', '2050', '0', '3', '0', '1', '110.224.199.247', 6, '2021-02-01 13:20:35', '2021-02-01 13:20:35', 4, 0, 0),
(1038, '2021-01-30', '01023', '25', 7, '292.78', '590', '127.5', '150', '1', '3', '2', '4', '1700', '0', '3', '0', '1', '110.224.199.247', 6, '2021-02-01 13:22:00', '2021-02-01 13:22:00', 4, 0, 0),
(1039, '2021-01-30', '01024', '44', 7, '342.50', '690', '127.5', '150', '1', '3', '2', '4', '2700', '190', '3', '0', '1', '110.224.199.247', 6, '2021-02-01 13:23:25', '2021-02-01 13:23:25', 4, 0, 0),
(1040, '2021-01-30', '01025', '23', 7, '288.24', '580', '127.5', '150', '1', '3', '2', '4', '2000', '0', '3', '0', '1', '110.224.199.247', 6, '2021-02-01 13:24:39', '2021-02-01 13:24:39', 4, 0, 0),
(1041, '2021-01-30', '01026', '213', 7, '292.11', '585', '127.5', '150', '1', '3', '2', '4', '3000', '180', '3', '0', '1', '110.224.199.247', 6, '2021-02-01 13:25:55', '2021-02-02 08:08:03', 4, 0, 0),
(1042, '2021-01-30', '01027', '169', 7, '248.90', '500', '127.5', '150', '1', '3', '2', '4', '26000', '0', '3', '0', '1', '110.224.199.247', 6, '2021-02-01 13:26:57', '2021-02-01 13:26:57', 4, 0, 0),
(1043, '2021-01-30', '01028', '21', 7, '286.94', '580', '127.5', '150', '1', '3', '2', '4', '300', '180', '3', '0', '1', '110.224.199.247', 6, '2021-02-01 13:28:08', '2021-02-01 13:28:08', 4, 0, 0),
(1044, '2021-01-30', '01029', '212', 7, '286.84', '580', '127.5', '150', '1', '3', '2', '4', '1800', '180', '3', '0', '1', '110.224.199.247', 6, '2021-02-01 13:29:18', '2021-02-01 13:29:18', 4, 0, 0),
(1045, '2021-01-30', '01030', '12', 7, '286.14', '580', '127.5', '150', '1', '3', '2', '4', '1800', '0', '3', '0', '1', '110.224.199.247', 6, '2021-02-01 13:30:31', '2021-02-01 13:30:31', 4, 0, 0),
(1046, '2021-01-30', '01031', '20', 7, '286.44', '580', '127.5', '150', '1', '3', '2', '4', '1900', '180', '3', '0', '1', '110.224.199.247', 6, '2021-02-01 13:31:56', '2021-02-01 13:31:56', 4, 0, 0),
(1047, '2021-01-30', '01032', '43', 7, '337.37', '680', '127.5', '150', '1', '3', '2', '4', '1500', '0', '3', '0', '1', '110.224.199.247', 6, '2021-02-01 13:33:14', '2021-02-01 13:33:14', 4, 0, 0),
(1048, '2021-01-30', '01033', '41', 7, '338.46', '680', '127.5', '150', '1', '3', '2', '4', '1500', '0', '3', '0', '1', '110.224.199.247', 6, '2021-02-01 13:35:50', '2021-02-01 13:35:50', 4, 0, 0),
(1049, '2021-01-30', '01034', '45', 7, '336.66', '680', '127.5', '150', '1', '3', '2', '4', '1600', '0', '3', '0', '1', '110.224.199.247', 6, '2021-02-01 13:37:04', '2021-02-01 13:37:04', 4, 0, 0),
(1050, '2021-01-30', '01035', '36', 7, '336.57', '680', '127.5', '150', '1', '3', '2', '4', '2500', '0', '3', '0', '1', '110.224.199.247', 6, '2021-02-01 13:39:02', '2021-02-01 13:39:02', 4, 0, 0),
(1051, '2021-01-30', '01036', '65', 7, '296.82', '600', '127.5', '150', '1', '3', '2', '4', '1800', '0', '11', '0', '1', '110.224.199.247', 6, '2021-02-01 13:40:14', '2021-02-01 13:40:14', 4, 0, 0),
(1052, '2021-01-30', '01037', '220', 7, '292.38', '590', '127.5', '150', '1', '3', '2', '4', '1800', '0', '3', '0', '1', '110.224.199.247', 6, '2021-02-01 13:41:18', '2021-02-01 13:41:18', 4, 0, 0),
(1053, '2021-01-30', '01038', '26', 7, '290.58', '590', '127.5', '150', '1', '3', '2', '4', '1900', '180', '3', '0', '1', '110.224.199.247', 6, '2021-02-01 13:42:22', '2021-02-01 13:42:22', 4, 0, 0),
(1054, '2021-01-30', '01039', '211', 7, '292.78', '590', '127.5', '150', '1', '3', '2', '4', '600', '180', '3', '0', '1', '110.224.199.247', 6, '2021-02-01 13:43:31', '2021-02-04 06:40:34', 4, 0, 0),
(1055, '2021-01-30', '01040', '19', 7, '290.78', '590', '127.5', '150', '1', '3', '2', '4', '838', '180', '11', '0', '1', '110.224.199.247', 6, '2021-02-01 13:44:39', '2021-02-01 13:44:39', 4, 0, 0),
(1056, '2021-01-30', '01041', '222', 7, '286.94', '580', '127.5', '150', '1', '3', '2', '4', '2300', '180', '3', '0', '1', '110.224.199.247', 6, '2021-02-01 13:45:45', '2021-02-01 13:45:45', 4, 0, 0),
(1057, '2021-01-30', '01042', '42', 7, '335.56', '680', '127.5', '150', '1', '3', '2', '4', '1800', '0', '3', '0', '1', '110.224.199.247', 6, '2021-02-01 13:54:33', '2021-02-01 13:54:33', 4, 0, 0),
(1059, '2021-01-30', '01044', '38', 7, '288.14', '580', '127.5', '150', '1', '3', '2', '4', '2450', '0', '3', '0', '1', '110.224.199.247', 6, '2021-02-01 13:59:12', '2021-02-01 13:59:12', 4, 0, 0),
(1060, '2021-01-30', '01045', '66', 7, '291.98', '590', '127.5', '150', '1', '3', '2', '4', '2150', '0', '3', '0', '1', '110.224.199.247', 6, '2021-02-01 14:00:35', '2021-02-02 13:27:58', 4, 0, 0),
(1061, '2021-01-30', '01046', '40', 7, '337.16', '680', '127.5', '150', '1', '3', '2', '4', '3200', '0', '3', '0', '1', '110.224.199.247', 6, '2021-02-01 14:02:35', '2021-02-01 14:02:35', 4, 0, 0),
(1062, '2021-01-31', '01047', '232', 7, '287.44', '580', '127.5', '150', '1', '3', '2', '4', '3300', '0', '11', '0', '1', '110.224.199.247', 6, '2021-02-01 14:03:54', '2021-02-01 14:03:54', 4, 0, 0),
(1063, '2021-01-31', '01048', '22', 7, '287.04', '580', '127.5', '150', '1', '3', '2', '4', '2400', '0', '11', '0', '1', '110.224.199.247', 6, '2021-02-01 14:05:07', '2021-02-01 14:05:07', 4, 0, 0),
(1064, '2021-02-03', '01049', '198', 7, '291.08', '590', '117.5', '150', '1', '3', '2', '4', '1500', '0', '3', '0', '1', '110.224.212.155', 6, '2021-02-04 08:14:11', '2021-02-06 08:59:23', 4, 0, 0),
(1065, '2021-02-03', '01050', '215', 7, '291.38', '590', '117.5', '150', '1', '3', '2', '4', '3000', '0', '3', '0', '1', '110.224.212.155', 6, '2021-02-04 08:16:17', '2021-02-06 08:58:06', 4, 0, 0),
(1066, '2021-02-03', '01051', '18', 7, '291.18', '590', '117.5', '150', '1', '3', '2', '4', '1500', '0', '3', '0', '1', '110.224.212.155', 6, '2021-02-04 08:18:55', '2021-02-06 08:57:27', 4, 0, 0),
(1067, '2021-02-03', '01052', '17', 7, '288.31', '585', '117.5', '150', '1', '3', '2', '4', '1500', '0', '3', '0', '1', '110.224.212.155', 6, '2021-02-04 08:46:17', '2021-02-06 09:00:26', 4, 0, 0),
(1068, '2021-02-03', '01053', '37', 7, '333.36', '680', '117.5', '150', '1', '3', '2', '4', '2300', '0', '3', '0', '1', '110.224.212.155', 6, '2021-02-04 08:47:12', '2021-02-06 10:54:01', 4, 0, 0),
(1069, '2021-02-03', '01054', '210', 7, '290.68', '590', '117.5', '150', '1', '3', '2', '4', '1700', '0', '3', '0', '1', '110.224.212.155', 6, '2021-02-04 08:48:09', '2021-02-06 10:53:23', 4, 0, 0),
(1070, '2021-02-03', '01055', '214', 7, '288.88', '590', '117.5', '150', '1', '3', '2', '4', '2300', '0', '3', '0', '1', '110.224.212.155', 6, '2021-02-04 08:49:03', '2021-02-06 10:52:51', 4, 0, 0),
(1071, '2021-02-03', '01056', '16', 7, '286.44', '580', '117.5', '150', '1', '3', '2', '4', '5300', '0', '3', '0', '1', '110.224.212.155', 6, '2021-02-04 08:50:03', '2021-02-06 10:52:18', 4, 0, 0),
(1072, '2021-02-03', '01057', '24', 7, '290.28', '590', '117.5', '150', '1', '3', '2', '4', '2300', '0', '3', '0', '1', '110.224.212.155', 6, '2021-02-04 08:50:59', '2021-02-06 10:51:18', 4, 0, 0),
(1073, '2021-02-03', '01058', '67', 7, '332.76', '680', '117.5', '150', '1', '3', '2', '4', '1500', '0', '3', '0', '1', '110.224.212.155', 6, '2021-02-04 08:52:08', '2021-02-08 09:02:53', 4, 0, 0),
(1074, '2021-02-03', '01059', '11', 7, '334.86', '680', '117.5', '150', '1', '3', '2', '4', '1500', '0', '3', '0', '1', '110.224.212.155', 6, '2021-02-04 08:53:03', '2021-02-06 10:50:13', 4, 0, 0),
(1075, '2021-02-03', '01060', '9', 7, '335.86', '680', '117.5', '150', '1', '3', '2', '4', '1500', '0', '11', '0', '1', '110.224.212.155', 6, '2021-02-04 08:54:01', '2021-02-06 10:49:44', 4, 0, 0),
(1076, '2021-02-03', '01061', '20', 7, '285.54', '580', '117.5', '150', '1', '3', '2', '4', '1500', '0', '3', '0', '1', '110.224.212.155', 6, '2021-02-04 08:54:48', '2021-02-06 10:48:30', 4, 0, 0),
(1077, '2021-02-03', '01062', '44', NULL, '341.30', '690', '117.5', '150', '1', '3', '2', '4', '3000', '0', '3', '0', '1', '110.224.212.155', 6, '2021-02-04 08:55:54', '2021-02-06 10:47:36', NULL, 0, 0),
(1078, '2021-02-03', '01063', '21', 7, '285.34', '580', '117.5', '150', '1', '3', '2', '4', '3700', '0', '3', '0', '1', '110.224.212.155', 6, '2021-02-04 08:56:44', '2021-02-06 10:47:01', 4, 0, 0),
(1079, '2021-02-03', '01064', '13', 7, '333.90', '675', '117.5', '150', '1', '3', '2', '4', '1900', '0', '11', '0', '1', '110.224.212.155', 6, '2021-02-04 08:58:57', '2021-02-06 10:46:06', 4, 0, 0),
(1080, '2021-02-03', '01065', '6', 7, '335.46', '680', '117.5', '150', '1', '3', '2', '4', '2150', '0', '11', '0', '1', '110.224.212.155', 6, '2021-02-04 09:58:14', '2021-02-06 10:45:15', 4, 0, 0),
(1081, '2021-02-03', '01066', '213', 7, '289.41', '585', '117.5', '150', '1', '3', '2', '4', '1500', '0', '11', '0', '1', '110.224.212.155', 6, '2021-02-04 10:01:19', '2021-02-06 10:44:36', 4, 0, 0),
(1082, '2021-02-03', '01067', '233', 7, '339.46', '680', '117.5', '150', '1', '3', '2', '4', '2150', '0', '11', '0', '1', '110.224.212.155', 6, '2021-02-04 10:02:50', '2021-02-06 10:43:26', 4, 0, 0),
(1083, '2021-02-03', '01068', '212', 7, '285.94', '580', '117.5', '150', '1', '3', '2', '4', '1500', '0', '11', '0', '1', '110.224.212.155', 6, '2021-02-04 10:06:52', '2021-02-06 10:42:32', 4, 0, 0),
(1084, '2021-02-03', '01069', '10', 7, '336.66', '680', '117.5', '150', '1', '3', '2', '4', '2150', '0', '11', '0', '1', '110.224.212.155', 6, '2021-02-04 10:07:47', '2021-02-06 10:41:41', 4, 0, 0),
(1085, '2021-02-03', '01070', '54', 7, '336.26', '680', '117.5', '150', '1', '3', '2', '4', '1500', '0', '11', '0', '1', '110.224.212.155', 6, '2021-02-04 10:08:49', '2021-02-06 10:40:10', 4, 0, 0),
(1086, '2021-02-03', '01071', '458', 7, '289.30', '590', '117.5', '150', '1', '3', '2', '4', '1500', '0', '3', '0', '1', '110.224.212.155', 6, '2021-02-04 10:11:50', '2021-02-06 10:39:17', 4, 0, 0);
INSERT INTO `loading_entries` (`id`, `loading_date`, `loading_no`, `vehicle_no`, `item_master`, `weight`, `bag`, `freight_rate`, `commision_rate`, `consignor`, `from_place`, `consignee`, `to_plce`, `diesel_advance`, `diesel_advance_ltr`, `pentrol_pump`, `cash_advance`, `status`, `ipaddress`, `createdby`, `created_at`, `updated_at`, `hemal`, `hema_rate`, `loading_type`) VALUES
(1087, '2021-02-04', '01072', '23', 7, '286.54', '580', '117.5', '150', '1', '3', '2', '4', '1500', '190', '11', '0', '1', '110.224.212.155', 6, '2021-02-06 11:28:03', '2021-02-06 11:28:03', 4, 0, 0),
(1088, '2021-02-04', '01073', '219', 7, '291.78', '590', '117.5', '150', '1', '3', '2', '4', '1500', '190', '11', '0', '1', '110.224.212.155', 6, '2021-02-06 11:57:02', '2021-02-06 11:57:02', 4, 0, 0),
(1089, '2021-02-04', '01074', '65', 7, '296.52', '600', '117.5', '150', '1', '3', '2', '4', '1500', '190', '11', '0', '1', '110.224.212.155', 6, '2021-02-06 11:58:39', '2021-02-06 11:58:39', 4, 0, 0),
(1090, '2021-02-04', '01075', '222', 7, '286.84', '580', '117.5', '150', '1', '3', '2', '3', '1500', '190', '11', '0', '1', '110.224.212.155', 6, '2021-02-06 12:02:40', '2021-02-06 12:02:40', 4, 0, 0),
(1091, '2021-02-04', '01076', '38', 7, '287.54', '580', '117.5', '150', '1', '3', '2', '4', '1600', '190', '11', '0', '1', '110.224.212.155', 6, '2021-02-06 12:03:55', '2021-02-06 12:03:55', 4, 0, 0),
(1092, '2021-02-04', '01077', '42', 7, '336.96', '680', '117.5', '150', '1', '3', '2', '4', '2050', '205', '11', '0', '1', '110.224.212.155', 6, '2021-02-06 12:05:36', '2021-02-06 12:05:36', 4, 0, 0),
(1093, '2021-02-04', '01078', '25', 7, '291.58', '590', '117.5', '150', '1', '3', '2', '4', '1500', '190', '11', '0', '1', '110.224.212.155', 6, '2021-02-06 12:09:38', '2021-02-06 12:09:38', 4, 0, 0),
(1094, '2021-02-04', '01079', '211', 7, '291.88', '590', '117.5', '150', '1', '3', '2', '4', '1500', '190', '11', '0', '1', '110.224.212.155', 6, '2021-02-06 12:10:48', '2021-02-06 12:10:48', 4, 0, 0),
(1095, '2021-02-04', '01080', '19', 7, '292.48', '590', '117.5', '150', '1', '3', '2', '4', '1500', '190', '11', '0', '1', '110.224.212.155', 6, '2021-02-06 12:12:50', '2021-02-06 12:12:50', 4, 0, 0),
(1096, '2021-02-04', '01081', '39', 7, '287.04', '580', '117.5', '150', '1', '3', '2', '4', '1500', '0', '11', '0', '1', '110.224.212.155', 6, '2021-02-06 12:13:51', '2021-02-06 12:13:51', 4, 0, 0),
(1097, '2021-02-04', '01082', '45', 7, '336.17', '680', '117.5', '150', '1', '3', '2', '4', '1500', '205', '11', '0', '1', '110.224.212.155', 6, '2021-02-06 12:14:47', '2021-02-06 12:14:47', 4, 0, 0),
(1098, '2021-02-04', '01083', '41', 7, '336.06', '680', '117.5', '150', '1', '3', '2', '4', '1500', '205', '11', '0', '1', '110.224.212.155', 6, '2021-02-06 12:15:50', '2021-02-06 12:15:50', 4, 0, 0),
(1099, '2021-02-04', '01084', '66', 7, '297.82', '600', '117.5', '150', '1', '3', '2', '4', '190', '0', '11', '0', '1', '110.224.212.155', 6, '2021-02-06 12:17:30', '2021-02-06 12:17:30', 4, 0, 0),
(1100, '2021-02-04', '01085', '341', 7, '291.78', '590', '117.5', '150', '1', '3', '2', '4', '26000', '0', '11', '0', '1', '110.224.212.155', 6, '2021-02-06 12:19:23', '2021-02-06 12:19:23', 4, 0, 0),
(1101, '2021-02-04', '01086', '342', 7, '290.28', '590', '117.5', '150', '1', '3', '2', '4', '26000', '0', '11', '0', '1', '110.224.212.155', 6, '2021-02-06 12:20:18', '2021-02-08 12:32:08', 4, 0, 0),
(1102, '2021-02-05', '01087', '209', 7, '291.58', '590', '117.5', '150', '1', '3', '2', '4', '1500', '190', '11', '0', '1', '110.224.212.155', 6, '2021-02-06 12:21:37', '2021-02-06 12:21:37', 4, 0, 0),
(1103, '2021-02-05', '01088', '26', 7, '290.58', '590', '117.5', '150', '1', '3', '2', '4', '1500', '190', '11', '0', '1', '110.224.212.155', 6, '2021-02-06 12:22:41', '2021-02-06 12:22:41', 4, 0, 0),
(1104, '2021-02-05', '01089', '36', 7, '338.06', '680', '117.5', '150', '1', '3', '2', '4', '1500', '205', '11', '0', '1', '110.224.212.155', 6, '2021-02-06 12:23:40', '2021-02-06 12:23:40', 4, 0, 0),
(1105, '2021-02-05', '01090', '22', 7, '285.44', '580', '117.5', '150', '1', '3', '2', '4', '2140', '190', '11', '0', '0', '110.224.212.155', 6, '2021-02-06 12:24:34', '2021-02-06 12:24:34', 4, 0, 0),
(1106, '2021-02-05', '01091', '220', 7, '289.48', '590', '117.5', '150', '1', '3', '2', '4', '1500', '190', '11', '0', '1', '110.224.212.155', 6, '2021-02-06 12:26:06', '2021-02-06 12:26:06', 4, 0, 0),
(1107, '2021-02-05', '01092', '12', 7, '288.34', '580', '117.5', '150', '1', '3', '2', '4', '1800', '190', '11', '0', '1', '110.224.212.155', 6, '2021-02-06 12:27:38', '2021-02-06 12:27:38', 4, 0, 0),
(1108, '2021-02-05', '01093', '40', 7, '335.86', '680', '117.5', '150', '1', '3', '2', '4', '1500', '205', '11', '0', '1', '110.224.212.155', 6, '2021-02-06 12:28:30', '2021-02-06 12:28:30', 4, 0, 0),
(1109, '2021-02-05', '01094', '67', 7, '338.56', '680', '117.5', '150', '1', '3', '2', '4', '1500', '205', '11', '0', '1', '110.224.212.155', 6, '2021-02-06 12:29:20', '2021-02-06 12:29:20', 4, 0, 0),
(1110, '2021-02-05', '01095', '232', 7, '288.74', '580', '117.5', '150', '1', '3', '2', '4', '2500', '190', '11', '0', '1', '110.224.212.155', 6, '2021-02-06 12:30:16', '2021-02-06 12:30:16', 4, 0, 0),
(1111, '2021-02-05', '01096', '171', 7, '248.40', '500', '117.5', '150', '1', '3', '2', '4', '26000', '0', '3', '0', '1', '110.224.212.155', 6, '2021-02-06 12:32:50', '2021-02-06 12:32:50', 4, 0, 0),
(1112, '2021-02-08', '01097', '36', 7, '337.56', '680', '117.5', '150', '1', '3', '2', '4', '1500', '205', '11', '0', '0', '110.224.212.155', 6, '2021-02-09 10:01:19', '2021-02-09 10:01:19', 4, 0, 0),
(1113, '2021-02-08', '01098', '212', 7, '288.24', '580', '117.5', '150', '1', '3', '2', '4', '1500', '190', '11', '0', '0', '110.224.212.155', 6, '2021-02-09 10:02:17', '2021-02-09 10:02:17', 4, 0, 0),
(1114, '2021-02-08', '01099', '54', 7, '336.66', '680', '117.5', '150', '1', '3', '2', '4', '1500', '205', '11', '0', '0', '110.224.212.155', 6, '2021-02-09 10:03:22', '2021-02-09 10:03:22', 4, 0, 0),
(1115, '2021-02-08', '01100', '67', 7, '339.96', '680', '117.5', '150', '1', '3', '2', '4', '1500', '205', '11', '0', '0', '110.224.212.155', 6, '2021-02-09 10:04:13', '2021-02-09 10:04:13', 4, 0, 0),
(1116, '2021-03-03', '01101', '6', 7, '200', '100', '10', '100', '1', '1', '2', '1', '100', '10', '2', '100', '0', '::1', 1, '2021-03-03 07:47:30', '2021-03-03 07:47:30', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `loading_payments`
--

CREATE TABLE `loading_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `loading_receiveing_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loading_payments`
--

INSERT INTO `loading_payments` (`id`, `loading_receiveing_id`, `voucher_no`, `payment_date`, `status`, `created_at`, `updated_at`) VALUES
(1, '[\"3\",\"4\"]', '1608376129', '2020-12-19', 0, NULL, NULL),
(2, '[\"261\",\"300\",\"324\"]', '1609942691', '2021-01-06', 0, NULL, NULL),
(3, '[\"233\",\"325\",\"1\"]', '1609996313', '2021-01-07', 0, NULL, NULL),
(4, '[\"2\"]', 'PV00004', '2021-03-03', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `loading_receiveings`
--

CREATE TABLE `loading_receiveings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `loading_entries_id` int(11) DEFAULT NULL,
  `receiving_date` date DEFAULT NULL,
  `received_bag` int(11) DEFAULT 0,
  `received_mt` int(11) DEFAULT 0,
  `shortage_bag` int(11) DEFAULT 0,
  `shortage_mt` int(11) DEFAULT 0,
  `shortage_rs` int(11) DEFAULT 0,
  `shortage_mt_rs` int(11) DEFAULT 0,
  `weight_gain` int(11) DEFAULT 0,
  `gross_amt` double(8,2) DEFAULT 0.00,
  `net_amt` double(8,2) DEFAULT 0.00,
  `narration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_payment` int(11) DEFAULT 0 COMMENT '0=not pay, else = loading_payment_id',
  `status` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loading_receiveings`
--

INSERT INTO `loading_receiveings` (`id`, `loading_entries_id`, `receiving_date`, `received_bag`, `received_mt`, `shortage_bag`, `shortage_mt`, `shortage_rs`, `shortage_mt_rs`, `weight_gain`, `gross_amt`, `net_amt`, `narration`, `is_payment`, `status`, `created_at`, `updated_at`) VALUES
(1, 42, '2020-12-05', 500, 247, 0, 0, 0, 30, 0, 27225.00, 175.00, 'NULL', 3, 0, NULL, NULL),
(2, 44, '2020-12-05', 500, 245, 0, 0, NULL, 30, NULL, 27005.00, 255.00, 'NULL', 4, 0, NULL, NULL),
(3, 45, '2020-12-04', 500, 245, 0, 0, NULL, 30, 0, 27016.00, 266.00, 'NULL', 1, 0, NULL, NULL),
(4, 46, '2020-12-04', 590, 292, 0, 0, NULL, 30, 0, 32106.80, 5056.80, 'NULL', 1, 0, NULL, NULL),
(5, 47, '2020-12-04', 490, 245, 0, 0, NULL, NULL, 0, 26895.00, 745.00, 'NULL', 0, 0, NULL, NULL),
(6, 48, '2020-12-04', 490, 240, 0, 0, NULL, 30, 0, 26461.60, 11.60, 'NULL', 0, 0, NULL, NULL),
(7, 49, '2020-12-04', 580, 286, 0, 0, NULL, 30, 0, 31497.40, 5047.40, 'NULL', 0, 0, NULL, NULL),
(8, 50, '2020-12-04', 690, 339, 0, 0, NULL, 30, 0, 37334.00, 10284.00, 'NULL', 0, 0, NULL, NULL),
(9, 51, '2020-12-05', 590, 291, 0, 0, NULL, 30, 0, 32095.80, 5045.80, 'NULL', 0, 0, NULL, NULL),
(10, 52, '2020-12-05', 690, 340, 0, 0, NULL, 30, 0, 37367.00, 10617.00, 'NULL', 0, 0, NULL, NULL),
(11, 53, '2020-12-04', 580, 284, 0, 0, NULL, NULL, 0, 31233.40, 31083.40, 'NULL', 0, 0, NULL, NULL),
(12, 55, '2020-12-05', 590, 292, 0, 0, NULL, NULL, 10, 32084.80, 5934.80, 'NULL', 0, 0, NULL, NULL),
(13, 57, '2020-12-05', 600, 294, 0, 0, NULL, 30, 0, 32309.20, 5859.20, 'NULL', 0, 0, NULL, NULL),
(14, 68, '2020-12-05', 600, 295, 0, 0, NULL, NULL, 0, 32430.20, 6280.20, 'NULL', 0, 0, NULL, NULL),
(15, 69, '2020-12-05', 590, 289, 0, 0, NULL, NULL, 0, 31831.80, 5681.80, 'NULL', 0, 0, NULL, NULL),
(16, 71, '2020-12-05', 590, 292, 0, 0, NULL, 30, 0, 32183.80, 5433.80, 'NULL', 0, 0, NULL, NULL),
(17, 74, '2020-12-05', 590, 291, 0, 0, NULL, 30, 0, 32073.80, 30723.80, 'NULL', 0, 0, NULL, NULL),
(18, 76, '2020-12-07', 590, 289, 0, 0, NULL, 30, 0, 31809.80, 30969.80, 'NULL', 0, 0, NULL, NULL),
(19, 79, '2020-12-03', 590, 289, 0, 1, NULL, 30, 0, 31952.80, 27602.80, 'NULL', 0, 0, NULL, NULL),
(20, 81, '2020-12-07', 690, 342, 0, 0, NULL, 30, 0, 37675.00, 36325.00, 'NULL', 0, 0, NULL, NULL),
(21, 84, '2020-12-06', 680, 335, 0, 0, NULL, 30, 0, 36900.60, 35850.60, 'NULL', 0, 0, NULL, NULL),
(22, 86, '2020-12-06', 600, 298, 0, 0, NULL, 30, 0, 32793.20, 32043.20, 'NULL', 0, 0, NULL, NULL),
(23, 87, '2020-12-07', 680, 332, 0, 0, NULL, 30, 0, 36504.60, 36054.60, 'NULL', 0, 0, NULL, NULL),
(24, 88, '2020-12-07', 675, 335, 0, 0, NULL, NULL, 0, 36837.90, 36687.90, 'NULL', 0, 0, NULL, NULL),
(25, 41, '2020-12-04', 590, 291, 0, 0, NULL, NULL, 10, 32029.80, 8879.80, 'NULL', 0, 0, NULL, NULL),
(26, 43, '2020-12-03', 590, 291, 0, 0, NULL, NULL, 20, 32029.80, 5879.80, 'NULL', 0, 0, NULL, NULL),
(27, 56, '2020-12-04', 590, 290, 0, 0, NULL, NULL, 20, 31853.80, 9703.80, 'NULL', 0, 0, NULL, NULL),
(28, 89, '2020-12-07', 590, 292, 0, 0, NULL, 30, 0, 32118.90, 30948.90, 'NULL', 0, 0, NULL, NULL),
(29, 58, '2020-12-04', 590, 291, 0, 0, NULL, NULL, 40, 32007.80, 8857.80, 'NULL', 0, 0, NULL, NULL),
(30, 59, '2020-12-04', 590, NULL, 0, 291, NULL, NULL, 10, 32018.80, 8868.80, 'NULL', 0, 0, NULL, NULL),
(31, 60, '2020-12-05', 590, 291, 0, 0, NULL, NULL, 10, 32051.80, 7901.80, 'NULL', 0, 0, NULL, NULL),
(32, 90, '2020-12-07', 690, 339, 0, 0, NULL, 30, 0, 37268.00, 36518.00, 'NULL', 0, 0, NULL, NULL),
(33, 91, '2020-12-07', 690, 340, 0, 0, NULL, NULL, 0, 37433.00, 11283.00, 'NULL', 0, 0, NULL, NULL),
(34, 92, '2020-12-07', 690, 341, 0, 0, NULL, 30, 0, 37565.00, 36815.00, 'NULL', 0, 0, NULL, NULL),
(35, 61, '2020-12-04', 590, 290, 0, 0, NULL, 30, 0, 31892.30, 6442.30, 'NULL', 0, 0, NULL, NULL),
(36, 93, '2020-12-07', 580, 286, 0, 0, NULL, 30, 0, 31475.40, 31025.40, 'NULL', 0, 0, NULL, NULL),
(37, NULL, '1970-01-01', NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, 'NULL', 0, 0, NULL, NULL),
(38, 62, '2020-12-04', 590, 292, 0, 0, NULL, NULL, 0, 32106.80, 10456.80, 'NULL', 0, 0, NULL, NULL),
(39, 64, '2020-12-04', 590, 291, 0, 0, NULL, NULL, 0, 31996.80, 10346.80, 'NULL', 0, 0, NULL, NULL),
(40, 65, '2020-12-04', 590, 291, 0, 0, NULL, 30, 0, 32073.80, 7623.80, 'NULL', 0, 0, NULL, NULL),
(41, 66, '2020-12-04', 590, 291, 0, 0, NULL, NULL, 0, 32040.80, 5890.80, 'NULL', 0, 0, NULL, NULL),
(42, 67, '1970-01-01', 590, 292, 0, 0, NULL, NULL, 0, 32172.80, 8022.80, 'NULL', 0, 0, NULL, NULL),
(43, 70, '2020-12-04', 590, 293, 0, 0, NULL, NULL, 0, 32238.80, 30738.80, 'NULL', 0, 0, NULL, NULL),
(44, 72, '2020-12-04', 590, 292, 0, 0, NULL, NULL, 0, 32106.80, 30606.80, 'NULL', 0, 0, NULL, NULL),
(45, 73, '1970-01-01', 590, 291, 0, 0, NULL, NULL, 0, 32018.80, 28768.80, 'NULL', 0, 0, NULL, NULL),
(46, 75, '2020-12-04', 680, 336, 0, 0, NULL, NULL, 0, 36944.60, 35294.60, 'NULL', 0, 0, NULL, NULL),
(47, 77, '2020-12-04', 590, 291, 0, 0, NULL, NULL, 0, 32040.80, 30540.80, 'NULL', 0, 0, NULL, NULL),
(48, 78, '2020-12-04', 590, 292, 0, 1, NULL, NULL, 0, 32150.80, 30650.80, 'NULL', 0, 0, NULL, NULL),
(49, 80, '2020-12-05', 690, 338, 0, 0, NULL, NULL, 0, 37213.00, 35063.00, 'NULL', 0, 0, NULL, NULL),
(50, 82, '2020-12-04', 590, 293, 0, 0, NULL, NULL, 0, 32238.80, 29488.80, 'NULL', 0, 0, NULL, NULL),
(51, 83, '2020-12-04', 590, 293, 0, 0, NULL, NULL, 20, 32227.80, 30727.80, 'NULL', 0, 0, NULL, NULL),
(52, 85, '2020-12-04', 590, 292, 0, 0, NULL, NULL, 0, 32139.80, 29739.80, 'NULL', 0, 0, NULL, NULL),
(53, 97, '1970-01-08', 590, 291, 0, 0, NULL, NULL, 0, 32040.80, 31890.80, 'NULL', 0, 0, NULL, NULL),
(54, 100, '2020-12-09', 600, 299, 0, 0, NULL, NULL, 0, 32837.20, 6687.20, NULL, 0, 0, NULL, NULL),
(55, 104, '2020-12-07', 590, 293, 0, 0, NULL, 30, 0, 32216.80, 31676.80, 'NULL', 0, 0, NULL, NULL),
(56, 106, '2020-12-05', 580, 288, 0, 0, NULL, NULL, 0, 31662.40, 31512.40, 'NULL', 0, 0, NULL, NULL),
(57, 107, '2020-12-07', 600, 297, 0, 0, NULL, 30, 0, 32705.20, 5655.20, 'NULL', 0, 0, NULL, NULL),
(58, 110, '1970-01-08', 500, 248, 0, 0, NULL, 30, 0, 27258.00, 508.00, 'NULL', 0, 0, NULL, NULL),
(59, 94, '2020-12-07', 590, 291, 0, 0, NULL, NULL, 0, 31974.80, 5824.80, 'NULL', 0, 0, NULL, NULL),
(60, 95, '2020-12-04', 590, 290, 0, 0, NULL, NULL, 0, 31930.80, 6780.80, 'NULL', 0, 0, NULL, NULL),
(61, 96, '2020-12-05', 590, 293, 0, 0, NULL, NULL, 0, 32194.80, 7044.80, 'NULL', 0, 0, NULL, NULL),
(62, 98, '2020-12-05', 690, 341, 0, 0, NULL, NULL, 0, 37488.00, 35088.00, 'NULL', 0, 0, NULL, NULL),
(63, 99, '1970-01-01', 590, 290, 0, 0, NULL, NULL, 0, 31886.80, 31236.80, 'NULL', 0, 0, NULL, NULL),
(64, 101, '2020-12-05', 690, 342, 0, 0, NULL, NULL, 0, 37642.00, 36142.00, 'NULL', 0, 0, NULL, NULL),
(65, 105, '2020-12-05', 590, 289, 0, 0, NULL, NULL, 0, 31831.80, 29881.80, 'NULL', 0, 0, NULL, NULL),
(66, 108, '2020-12-05', 590, 292, 0, 0, NULL, NULL, 0, 32117.80, 29367.80, 'NULL', 0, 0, NULL, NULL),
(67, 109, '2020-12-05', 590, 292, 0, 0, NULL, NULL, 0, 32161.80, 29161.80, 'NULL', 0, 0, NULL, NULL),
(68, 111, '2020-12-05', 590, 292, 0, 0, NULL, NULL, 0, 32172.80, 30022.80, 'NULL', 0, 0, NULL, NULL),
(69, 115, '2020-12-06', 590, 291, 0, 0, NULL, NULL, 0, 31996.80, 30346.80, 'NULL', 0, 0, NULL, NULL),
(70, 116, '2020-12-07', 590, 294, 0, 0, NULL, NULL, 0, 32337.80, 7187.80, 'NULL', 0, 0, NULL, NULL),
(71, 117, '2020-12-07', 590, 291, 0, 0, NULL, NULL, 0, 32018.80, 5868.80, 'NULL', 0, 0, NULL, NULL),
(72, 118, '2020-12-07', 590, 290, 0, 0, NULL, NULL, 0, 31941.80, 6791.80, 'NULL', 0, 0, NULL, NULL),
(73, 119, '2020-12-07', 590, 290, 0, 0, NULL, NULL, 0, 31952.80, 6802.80, 'NULL', 0, 0, NULL, NULL),
(74, 120, '2020-12-07', 590, 291, 0, 0, NULL, NULL, 0, 31996.80, 29846.80, 'NULL', 0, 0, NULL, NULL),
(75, 121, '2020-12-06', 590, 290, 0, 0, NULL, NULL, 0, 31919.80, 30769.80, 'NULL', 0, 0, NULL, NULL),
(76, 122, '2020-12-06', 590, 290, 0, 0, NULL, NULL, 0, 31952.80, 29652.80, 'NULL', 0, 0, NULL, NULL),
(77, 133, '2020-12-07', 590, 292, 0, 0, NULL, 30, 0, 32106.80, 5056.80, 'NULL', 0, 0, NULL, NULL),
(78, 138, '2020-12-07', 680, 336, 0, 0, NULL, NULL, 0, 36911.60, 34761.60, 'NULL', 0, 0, NULL, NULL),
(79, 139, '2020-12-07', 590, 291, 0, 0, NULL, NULL, 0, 32040.80, 29890.80, 'NULL', 0, 0, NULL, NULL),
(80, 140, '2020-12-07', 590, 293, 0, 0, NULL, NULL, 0, 32260.80, 30110.80, 'NULL', 0, 0, NULL, NULL),
(81, 141, '2020-12-07', 590, 293, 0, 0, NULL, 30, 0, 32293.80, 29843.80, 'NULL', 0, 0, NULL, NULL),
(82, 142, '2020-12-07', 590, 293, 0, 0, NULL, NULL, 0, 32249.80, 30099.80, 'NULL', 0, 0, NULL, NULL),
(83, 143, '2020-12-07', 690, 338, 0, 0, NULL, NULL, 0, 37147.00, 33647.00, 'NULL', 0, 0, NULL, NULL),
(84, 144, '2020-12-09', 590, 289, 0, 0, NULL, NULL, 0, 31776.80, 29626.80, 'NULL', 0, 0, NULL, NULL),
(85, 145, '2020-12-09', 590, 291, 0, 0, NULL, NULL, 0, 31974.80, 29174.80, 'NULL', 0, 0, NULL, NULL),
(86, 146, '2020-12-09', 690, 341, 0, 0, NULL, NULL, 0, 37554.00, 35404.00, 'NULL', 0, 0, NULL, NULL),
(87, 147, '2020-12-09', 590, 290, 0, 0, NULL, NULL, 0, 31930.80, 28180.80, 'NULL', 0, 0, NULL, NULL),
(88, 148, '2020-12-09', 590, 291, 0, 0, NULL, NULL, 0, 32029.80, 30079.80, 'NULL', 0, 0, NULL, NULL),
(89, 149, '2020-12-09', 590, 292, 0, 0, NULL, 30, 0, 32172.80, 29722.80, 'NULL', 0, 0, NULL, NULL),
(90, 150, '2020-12-09', 590, 292, 0, 0, NULL, NULL, 0, 32172.80, 30022.80, 'NULL', 0, 0, NULL, NULL),
(91, 151, '2020-12-09', 590, 292, 0, 0, NULL, NULL, 0, 32073.80, 29923.80, 'NULL', 0, 0, NULL, NULL),
(92, 152, '2020-12-09', 590, 290, 0, 0, NULL, NULL, 0, 31864.80, 29714.80, 'NULL', 0, 0, NULL, NULL),
(93, 153, '2020-12-09', 590, 291, 0, 0, NULL, NULL, 0, 31996.80, 29846.80, 'NULL', 0, 0, NULL, NULL),
(94, 154, '2020-12-09', 590, 291, 0, 0, NULL, NULL, 0, 31974.80, 29824.80, 'NULL', 0, 0, NULL, NULL),
(95, 155, '2020-12-09', 590, 294, 0, 0, NULL, NULL, 0, 32392.80, 30242.80, 'NULL', 0, 0, NULL, NULL),
(96, 156, '2020-12-09', 690, 339, 0, 0, NULL, NULL, 0, 37323.00, 35173.00, 'NULL', 0, 0, NULL, NULL),
(97, 157, '2020-12-09', 690, 338, 0, 0, NULL, NULL, 0, 37136.00, 34986.00, 'NULL', 0, 0, NULL, NULL),
(98, 158, '2020-12-09', 690, 339, 0, 0, NULL, NULL, 0, 37301.00, 35151.00, 'NULL', 0, 0, NULL, NULL),
(99, 159, '2020-12-09', 690, 340, 0, 0, NULL, NULL, 0, 37389.00, 35239.00, 'NULL', 0, 0, NULL, NULL),
(100, 161, '2020-12-10', 690, 339, 0, 0, NULL, NULL, 0, 37290.00, 35140.00, 'NULL', 0, 0, NULL, NULL),
(101, 162, '2020-12-10', 690, 339, 0, 0, NULL, NULL, 0, 37246.00, 34546.00, 'NULL', 0, 0, NULL, NULL),
(102, 163, '1970-01-01', 690, 338, 0, 0, 0, 0, 0, 37180.00, 35680.00, '', 0, 0, NULL, NULL),
(103, 164, '2020-12-05', 690, 339, 0, 0, NULL, 30, 0, 37279.00, 35779.00, '0', 0, 0, NULL, NULL),
(104, 165, '2020-12-10', 590, 290, 0, 0, NULL, NULL, 0, 31941.80, 29591.80, 'NULL', 0, 0, NULL, NULL),
(105, 166, '2020-12-10', 590, 293, 0, 0, NULL, NULL, 0, 32183.80, 29833.80, 'NULL', 0, 0, NULL, NULL),
(106, 167, '2020-12-10', 590, 294, 0, 0, NULL, NULL, 0, 32293.80, 30593.80, 'NULL', 0, 0, NULL, NULL),
(107, 160, '2020-12-11', 590, 292, 0, 0, NULL, 30, 0, 32128.80, 29178.80, 'NULL', 0, 0, NULL, NULL),
(108, 168, '2020-12-11', 590, 290, 0, 0, NULL, NULL, 0, 826443.00, 823593.00, 'NULL', 0, 0, NULL, NULL),
(109, 169, '2020-12-11', 590, 291, 0, 0, NULL, NULL, 20, 31985.80, 29835.80, 'NULL', 0, 0, NULL, NULL),
(110, 170, '2020-12-12', 590, 291, 0, 0, NULL, NULL, 20, 32029.80, 29879.80, 'NULL', 0, 0, NULL, NULL),
(111, 171, '2020-12-11', 590, 291, 0, 0, NULL, NULL, 30, 31963.80, 29813.80, 'NULL', 0, 0, NULL, NULL),
(112, 172, '2020-12-09', 580, 284, 0, 0, NULL, NULL, 0, 31211.40, 31061.40, NULL, 0, 0, NULL, NULL),
(113, 173, '2020-12-09', 580, 287, 0, 0, NULL, 30, 0, 31552.40, 31102.40, NULL, 0, 0, NULL, NULL),
(114, 174, '2020-12-08', 580, 287, 0, 0, NULL, 30, 0, 31596.40, 30846.40, NULL, 0, 0, NULL, NULL),
(115, 175, '2020-12-12', 590, 293, 0, 0, NULL, NULL, 0, 32183.80, 30033.80, 'NULL', 0, 0, NULL, NULL),
(116, 176, '2020-12-12', 590, 290, 0, 0, NULL, NULL, 0, 31853.80, 29453.80, 'NULL', 0, 0, NULL, NULL),
(117, 177, '2020-12-13', 590, 291, 0, 0, NULL, NULL, 0, 31974.80, 30724.80, 'NULL', 0, 0, NULL, NULL),
(118, 178, '2020-12-12', 690, 342, 0, 0, NULL, NULL, 0, 37587.00, 35437.00, 'NULL', 0, 0, NULL, NULL),
(119, 179, '2020-12-12', 690, 341, 0, 0, NULL, NULL, 0, 37543.00, 35393.00, 'NULL', 0, 0, NULL, NULL),
(120, 180, '2020-12-12', 590, 290, 0, 0, NULL, NULL, 0, 31875.80, 29725.80, 'NULL', 0, 0, NULL, NULL),
(121, 181, '2020-12-11', 590, 293, 0, 0, NULL, NULL, 0, 32227.80, 30527.80, 'NULL', 0, 0, NULL, NULL),
(122, 204, '2020-12-13', 590, 292, 0, 0, NULL, NULL, 0, 32128.80, 6978.80, 'NULL', 0, 0, NULL, NULL),
(123, 182, '2020-12-09', 590, 292, 0, 0, NULL, 30, 0, 32161.80, 4811.80, NULL, 0, 0, NULL, NULL),
(124, 183, '2020-12-13', 590, 290, 0, 0, NULL, NULL, 0, 31875.80, 29725.80, 'NULL', 0, 0, NULL, NULL),
(125, 184, '2020-12-13', 690, 344, 0, 0, NULL, 30, 0, 37873.00, 34573.00, 'NULL', 0, 0, NULL, NULL),
(126, 185, '2020-12-13', 590, 290, 0, 0, NULL, NULL, 0, 31886.80, 29936.80, 'NULL', 0, 0, NULL, NULL),
(127, 186, '2020-12-11', 680, 336, 0, 0, NULL, 30, 0, 37031.50, 33431.50, 'NULL', 0, 0, NULL, NULL),
(128, 187, '2020-12-13', 590, 390, 0, 0, NULL, 30, 0, 42952.80, 38602.80, 'NULL', 0, 0, NULL, NULL),
(129, 188, '2020-12-13', 590, 291, 0, 0, NULL, NULL, 0, 31985.80, 29535.80, 'NULL', 0, 0, NULL, NULL),
(130, 189, '2020-12-13', 690, 341, 0, 0, NULL, NULL, 0, 37477.00, 35677.00, 'NULL', 0, 0, NULL, NULL),
(131, 190, '2020-12-13', 690, 342, 0, 0, NULL, NULL, 0, 37565.00, 36065.00, 'NULL', 0, 0, NULL, NULL),
(132, 191, '2020-12-10', 580, 286, 0, 1, 0, 30, 0, 31530.40, 29580.40, '', 0, 0, NULL, NULL),
(133, 192, '2020-12-13', 690, 340, 0, 0, NULL, NULL, 0, 37433.00, 35283.00, 'NULL', 0, 0, NULL, NULL),
(134, 193, '2020-12-13', 590, 291, 0, 0, NULL, NULL, 0, 32062.80, 31912.80, NULL, 0, 0, NULL, NULL),
(135, 194, '2020-12-13', 680, 335, 0, 0, NULL, NULL, 0, 36878.60, 36728.60, NULL, 0, 0, NULL, NULL),
(136, 195, '2020-12-13', 590, 293, 0, 0, NULL, NULL, 0, 32205.80, 30705.80, 'NULL', 0, 0, NULL, NULL),
(137, 197, '2020-12-13', 590, 292, 0, 0, NULL, NULL, 0, 32161.80, 30661.80, 'NULL', 0, 0, NULL, NULL),
(138, 196, '2020-12-13', 590, 290, 0, 0, NULL, 30, 0, 31919.80, 28469.80, 'NULL', 0, 0, NULL, NULL),
(139, 198, '2020-12-13', 590, 291, 0, 0, NULL, 30, 0, 32062.80, 29612.80, 'NULL', 0, 0, NULL, NULL),
(140, 199, '2020-12-12', 690, 340, 0, 0, NULL, NULL, 0, 37422.00, 32972.00, 'NULL', 0, 0, NULL, NULL),
(141, 200, '2020-12-12', 690, 341, 0, 0, NULL, NULL, 0, 37543.00, 34943.00, 'NULL', 0, 0, NULL, NULL),
(142, 201, '2020-12-14', 590, 292, 0, 0, NULL, NULL, 0, 32117.80, 28117.80, 'NULL', 0, 0, NULL, NULL),
(143, 202, '2020-12-10', 590, 292, 0, 0, NULL, NULL, 0, 32095.80, 10945.80, 'NULL', 0, 0, NULL, NULL),
(144, 203, '2020-12-10', 590, 292, 0, 0, NULL, NULL, 0, 32150.80, 11000.80, 'NULL', 0, 0, NULL, NULL),
(145, 205, '2020-12-16', 590, 291, 0, 0, NULL, NULL, 20, 32040.80, 29740.80, 'NULL', 0, 0, NULL, NULL),
(146, 208, '2020-12-16', 590, 292, 0, 0, NULL, NULL, 0, 32172.80, 30472.80, 'NULL', 0, 0, NULL, NULL),
(147, 220, '2020-12-16', 596, 296, 0, 0, NULL, NULL, 0, 32575.40, 31175.40, 'NULL', 0, 0, NULL, NULL),
(148, 211, '2020-12-16', 590, 292, 0, 0, NULL, NULL, 0, 32095.80, 29195.80, 'NULL', 0, 0, NULL, NULL),
(149, 218, '2020-12-16', 590, 294, 0, 0, NULL, NULL, 0, 32304.80, 29354.80, 'NULL', 0, 0, NULL, NULL),
(150, 210, '2020-12-16', 690, 342, 0, 0, NULL, NULL, 0, 37565.00, 35865.00, 'NULL', 0, 0, NULL, NULL),
(151, 215, '2020-12-16', 590, 292, 0, 0, NULL, NULL, 0, 32150.80, 27750.80, 'NULL', 0, 0, NULL, NULL),
(152, 212, '2020-12-16', 590, 291, 0, 0, NULL, NULL, 0, 32029.80, 29579.80, 'NULL', 0, 0, NULL, NULL),
(153, 207, '2020-12-16', 690, 340, 0, 0, NULL, NULL, 0, 37433.00, 35133.00, 'NULL', 0, 0, NULL, NULL),
(154, 209, '2020-12-16', 690, 340, 0, 0, NULL, NULL, 0, 37400.00, 35100.00, 'NULL', 0, 0, NULL, NULL),
(155, 206, '2020-12-16', 590, 291, 0, 0, NULL, NULL, 0, 31963.80, 29663.80, 'NULL', 0, 0, NULL, NULL),
(156, 213, '2020-12-16', 590, 290, 0, 0, NULL, NULL, 0, 31941.80, 29111.80, 'NULL', 0, 0, NULL, NULL),
(157, 214, '2020-12-16', 336, NULL, 344, 336, NULL, NULL, 0, 36932.50, 34882.50, 'NULL', 0, 0, NULL, NULL),
(158, 216, '2020-12-16', 590, 291, 0, 0, NULL, NULL, 0, 32007.80, 29707.80, 'NULL', 0, 0, NULL, NULL),
(159, 227, '2020-12-16', 690, 339, 0, 0, NULL, NULL, 0, 37312.00, 35012.00, 'NULL', 0, 0, NULL, NULL),
(160, 223, '2020-12-16', 690, 341, 0, 0, NULL, NULL, 0, 37532.00, 35232.00, 'NULL', 0, 0, NULL, NULL),
(161, 230, '2020-12-16', 590, 290, 0, 0, NULL, NULL, 0, 31941.80, 29941.80, 'NULL', 0, 0, NULL, NULL),
(162, 228, '2020-12-16', 590, 290, 0, 0, NULL, NULL, 0, 31853.80, 29553.80, 'NULL', 0, 0, NULL, NULL),
(163, 222, '2020-12-16', 590, 293, 0, 0, NULL, NULL, 0, 32216.80, 29916.80, 'NULL', 0, 0, NULL, NULL),
(164, 229, '2020-12-16', 590, 291, 0, 0, NULL, NULL, 0, 31963.80, 28513.80, 'NULL', 0, 0, NULL, NULL),
(165, 225, '2020-12-16', 590, 292, 0, 0, NULL, NULL, 0, 32084.80, 27784.80, 'NULL', 0, 0, NULL, NULL),
(166, 231, '2020-12-16', 590, 290, 0, 0, NULL, NULL, 0, 31930.80, 29630.80, 'NULL', 0, 0, NULL, NULL),
(167, 224, '1970-01-01', 590, 292, 0, 0, NULL, NULL, 0, 31908.80, 30108.80, 'NULL', 0, 0, NULL, NULL),
(168, 232, '2020-12-16', 490, 246, 0, 1, NULL, 30, 0, 27165.60, -484.40, 'NULL', 0, 0, NULL, NULL),
(169, 233, '2020-12-16', 600, 300, 0, 0, NULL, 30, 0, 33002.20, 5652.20, 'NULL', 0, 0, NULL, NULL),
(170, 102, '2020-12-05', 690, 338, 0, 0, 0, 0, 0, 37180.00, 35680.00, '', 0, 0, NULL, NULL),
(171, 103, '2020-12-05', 690, 339, 0, 0, 0, 0, 0, 37279.00, 35779.00, '', 0, 0, NULL, NULL),
(172, 217, '2020-12-17', 680, 336, 0, 0, 0, 0, 0, 36910.50, 34610.50, '', 0, 0, NULL, NULL),
(173, 219, '2020-12-17', 690, 341, 0, 0, 0, 0, 0, 37499.00, 34599.00, '', 0, 0, NULL, NULL),
(174, 226, '2020-12-17', 690, 341, 0, 0, 0, 0, 0, 37543.00, 35243.00, '', 0, 0, NULL, NULL),
(175, 237, '2020-12-17', 590, 291, 0, 0, 0, 0, 0, 32029.80, 29229.80, '', 0, 0, NULL, NULL),
(176, 221, '2020-12-17', 590, 291, 0, 0, 0, 0, 0, 32007.80, 30307.80, '', 0, 0, NULL, NULL),
(177, 241, '2020-12-17', 690, 341, 0, 0, 0, 0, 0, 37510.00, 34560.00, '', 0, 0, NULL, NULL),
(178, 239, '2020-12-17', 690, 340, 0, 0, 0, 0, 0, 37345.00, 35045.00, '', 0, 0, NULL, NULL),
(179, 240, '2020-12-17', 590, 291, 0, 0, 0, 0, 0, 32051.80, 29251.80, '', 0, 0, NULL, NULL),
(180, 238, '2020-12-17', 590, 293, 0, 0, 0, 0, 0, 32216.80, 31774.80, '', 0, 0, NULL, NULL),
(181, 236, '2020-12-17', 690, 341, 0, 0, 0, 0, 0, 37455.00, 35155.00, '', 0, 0, NULL, NULL),
(182, 54, '2020-12-09', 600, 299, 0, 0, 0, 30, 0, 32837.20, 6687.20, '', 0, 0, NULL, NULL),
(183, 63, '2020-12-06', 590, 291, 0, 0, 0, 30, 0, 32061.70, 5011.70, '', 0, 0, NULL, NULL),
(184, 112, '2020-12-09', 580, 284, 0, 0, 0, 0, 0, 31211.40, 31061.40, '', 0, 0, NULL, NULL),
(185, 113, '2020-12-09', 580, 287, 0, 0, 0, 0, 0, 31552.40, 31402.40, '', 0, 0, NULL, NULL),
(186, 114, '2020-12-08', 580, 287, 0, 0, 0, 30, 0, 31596.40, 30846.40, '', 0, 0, NULL, NULL),
(187, 123, '2020-12-09', 590, 292, 0, 0, 0, 30, 0, 32161.80, 4811.80, '', 0, 0, NULL, NULL),
(188, 127, '2020-12-10', 690, 340, 0, 0, 0, 30, 0, 115940.25, 89490.25, '', 0, 0, NULL, NULL),
(189, 128, '2020-12-10', 590, 290, 0, 1, 0, 30, 0, 31996.80, 30046.80, '', 0, 0, NULL, NULL),
(190, 129, '2020-12-10', 680, 336, 0, 1, 0, 30, 0, 37043.60, 34793.60, '', 0, 0, NULL, NULL),
(191, 130, '2020-12-10', 675, 333, 0, 0, 0, 0, 0, 36595.90, 36445.90, '', 0, 0, NULL, NULL),
(192, 131, '2020-12-11', 680, 335, 0, 0, 0, 0, 0, 36889.60, 36739.60, '', 0, 0, NULL, NULL),
(193, 132, '2020-12-10', 580, 286, 0, 1, 0, 30, 0, 31530.40, 29580.40, '', 0, 0, NULL, NULL),
(194, 134, '2020-12-10', 590, 291, 0, 0, 0, 0, 0, 32062.80, 31912.80, '', 0, 0, NULL, NULL),
(195, 135, '2020-12-10', 680, 335, 0, 0, 0, 0, 0, 36878.60, 36728.60, '', 0, 0, NULL, NULL),
(196, 136, '2020-12-10', 690, 339, 0, 0, 0, 0, 0, 37323.00, 37173.00, '', 0, 0, NULL, NULL),
(197, 137, '2020-12-10', 585, 294, 0, 1, 0, 30, 0, 32363.10, 4413.10, '', 0, 0, NULL, NULL),
(198, 274, '2020-12-18', 590, 294, 0, 0, 0, 0, 0, 32381.80, 30081.80, '', 0, 0, NULL, NULL),
(199, 273, '2020-12-18', 590, 292, 0, 0, 0, 0, 0, 32117.80, 29817.80, '', 0, 0, NULL, NULL),
(200, 262, '2020-12-19', 590, 292, 0, 0, 0, 0, 10, 32161.80, 29061.80, '', 0, 0, NULL, NULL),
(201, 263, '2020-12-19', 680, 337, 0, 0, 0, 0, 0, 37120.60, 34220.60, '', 0, 0, NULL, NULL),
(202, 261, '2020-12-21', 590, 292, 0, 0, 0, 0, 0, 32139.80, 29839.80, '', 0, 0, NULL, NULL),
(203, 259, '2020-12-19', 590, 292, 0, 0, 0, 0, 0, 32172.80, 29272.80, '', 0, 0, NULL, NULL),
(204, 271, '2020-12-19', 590, 291, 0, 0, 0, 0, 0, 32007.80, 29707.80, '', 0, 0, NULL, NULL),
(205, 276, '2020-12-19', 590, 290, 0, 0, 0, 0, 0, 31897.80, 28797.80, '', 0, 0, NULL, NULL),
(206, 260, '2020-12-19', 590, 290, 0, 0, 0, 0, 0, 31864.80, 28414.80, '', 0, 0, NULL, NULL),
(207, 258, '2020-12-19', 690, 342, 0, 0, 0, 0, 0, 37609.00, 34809.00, '', 0, 0, NULL, NULL),
(208, 272, '2020-12-19', 590, 293, 0, 0, 0, 0, 0, 32227.80, 29927.80, '', 0, 0, NULL, NULL),
(209, 257, '2020-12-19', 680, 336, 0, 0, 0, 0, 0, 36966.60, 34666.60, '', 0, 0, NULL, NULL),
(210, 264, '2020-12-19', 690, 342, 0, 0, 0, 0, 0, 37576.00, 35276.00, '', 0, 0, NULL, NULL),
(211, 268, '2020-12-19', 590, 292, 0, 0, 0, 0, 0, 32172.80, 29372.80, '', 0, 0, NULL, NULL),
(212, 267, '2020-12-19', 680, 336, 0, 0, 0, 0, 0, 36977.60, 33877.60, '', 0, 0, NULL, NULL),
(213, 270, '2020-12-19', 590, 292, 0, 0, 0, 0, 0, 32084.80, 29784.80, '', 0, 0, NULL, NULL),
(214, 275, '2020-12-19', 590, 292, 0, 0, 0, 0, 0, 32128.80, 29828.80, '', 0, 0, NULL, NULL),
(215, 265, '1970-01-01', 590, 292, 0, 0, 0, 0, 0, 32139.80, 29839.80, '', 0, 0, NULL, NULL),
(216, 266, '2020-12-19', 590, 292, 0, 0, 0, 0, 0, 32106.80, 29806.80, '', 0, 0, NULL, NULL),
(217, 269, '2020-12-19', 590, 292, 0, 0, 0, 0, 0, 32084.80, 29284.80, '', 0, 0, NULL, NULL),
(218, 278, '2020-12-21', 590, 292, 0, 0, 0, 0, 0, 32095.80, 30445.80, '', 0, 0, NULL, NULL),
(219, 280, '2020-12-21', 590, 291, 0, 0, 0, 30, 0, 32073.80, 30123.80, '', 0, 0, NULL, NULL),
(220, 283, '2020-12-21', 680, 337, 0, 0, 0, 0, 0, 37054.60, 34754.60, '', 0, 0, NULL, NULL),
(221, 281, '2020-12-21', 685, 340, 0, 0, 0, 0, 0, 37403.30, 35103.30, '', 0, 0, NULL, NULL),
(222, 284, '2020-12-21', 680, 336, 0, 0, 0, 30, 0, 36944.60, 31994.60, '', 0, 0, NULL, NULL),
(223, 282, '2020-12-21', 590, 292, 0, 0, 0, 0, 0, 32139.80, 29839.80, '', 0, 0, NULL, NULL),
(224, 277, '2020-12-21', 590, 291, 0, 0, 0, 0, 0, 32007.80, 6857.80, '', 0, 0, NULL, NULL),
(225, 290, '2020-12-21', 590, 293, 0, 0, 0, 30, 0, 32216.80, 29016.80, '', 0, 0, NULL, NULL),
(226, 285, '2020-12-21', 590, 292, 0, 0, 0, 0, 0, 32095.80, 23795.80, '', 0, 0, NULL, NULL),
(227, 288, '2020-12-21', 590, 291, 0, 0, 0, 0, 0, 32062.80, 30412.80, '', 0, 0, NULL, NULL),
(228, 287, '2020-12-21', 680, 338, 0, 0, 0, 0, 0, 37175.60, 34875.60, '', 0, 0, NULL, NULL),
(229, 286, '2020-12-21', 680, 336, 0, 0, 0, 0, 0, 36911.60, 35261.60, '', 0, 0, NULL, NULL),
(230, 289, '2020-12-21', 680, 337, 0, 0, 0, 0, 0, 37032.60, 33732.60, '', 0, 0, NULL, NULL),
(231, 294, '2020-12-21', 590, 292, 0, 0, 0, 0, 0, 32150.80, 29850.80, '', 0, 0, NULL, NULL),
(232, 292, '2020-12-21', 590, 292, 0, 0, 0, 0, 0, 32106.80, 29806.80, '', 0, 0, NULL, NULL),
(233, 293, '2020-12-21', 590, 291, 0, 0, 0, 0, 0, 32051.80, 29451.80, '', 3, 0, NULL, NULL),
(234, 295, '2020-12-21', 590, 291, 0, 0, 0, 0, 0, 32040.80, 30390.80, '', 0, 0, NULL, NULL),
(235, 291, '2020-12-22', 590, 291, 0, 0, 0, 0, 0, 32062.80, 31112.80, '', 0, 0, NULL, NULL),
(236, 279, '2020-12-22', 590, 292, 0, 0, 0, 0, 0, 32128.80, 29828.80, '', 0, 0, NULL, NULL),
(237, 246, '2020-12-16', 580, 286, 0, 0, 0, 30, 0, 31497.40, 30747.40, '', 0, 0, NULL, NULL),
(238, 248, '2020-12-16', 580, 286, 0, 1, 0, 30, 0, 31530.40, 29880.40, '', 0, 0, NULL, NULL),
(239, 245, '2020-12-17', 680, 335, 0, 0, 0, 0, 0, 36845.60, 36695.60, '', 0, 0, NULL, NULL),
(240, 243, '2020-12-17', 580, 284, 0, 0, 0, 0, 0, 31266.40, 31116.40, '', 0, 0, NULL, NULL),
(241, 244, '1970-01-01', 680, 337, 0, 0, 0, 0, 0, 37043.60, 36893.60, '', 0, 0, NULL, NULL),
(242, 247, '2020-12-17', 580, 286, 0, 1, 0, 30, 0, 31508.40, 29558.40, '', 0, 0, NULL, NULL),
(243, 249, '2020-12-17', 580, 285, 0, 0, 0, 30, 0, 31387.40, 30637.40, '', 0, 0, NULL, NULL),
(244, 253, '2020-12-17', 690, 341, 0, 0, 0, 30, 0, 37587.00, 36537.00, '', 0, 0, NULL, NULL),
(245, 250, '2020-12-17', 580, 287, 0, 0, 0, 30, 0, 31552.40, 30502.40, '', 0, 0, NULL, NULL),
(246, 252, '2020-12-18', 590, 292, 0, 0, 0, 0, 0, 32161.80, 32011.80, '', 0, 0, NULL, NULL),
(247, 235, '2020-12-18', 580, 288, 0, 0, 0, 0, 0, 31662.40, 5512.40, '', 0, 0, NULL, NULL),
(248, 125, '2020-12-19', 500, 245, 0, 0, 0, 30, 0, 27027.00, 5677.00, '', 0, 0, NULL, NULL),
(249, 251, '2020-12-19', 690, 340, 0, 0, 0, 0, 0, 37378.00, 37228.00, '', 0, 0, NULL, NULL),
(250, 234, '2020-12-19', 600, 296, 0, 0, 0, 30, 0, 32573.20, 6123.20, '', 0, 0, NULL, NULL),
(251, 309, '2020-12-21', 580, 288, 0, 0, 0, 30, 0, 31673.40, 30623.40, '', 0, 0, NULL, NULL),
(252, 321, '1970-01-01', 600, 297, 0, 0, 0, 30, 0, 32672.20, 6222.20, '', 0, 0, NULL, NULL),
(253, 322, '2020-12-21', 500, 247, 0, 0, 0, 30, 0, 27247.00, 197.00, '', 0, 0, NULL, NULL),
(254, 323, '2020-12-22', 600, 299, 0, 0, 0, 30, 0, 32925.20, 5575.20, '', 0, 0, NULL, NULL),
(255, 310, '2020-12-22', 680, 336, 0, 1, 0, 30, 0, 37054.60, 35104.60, '', 0, 0, NULL, NULL),
(256, 320, '2020-12-22', 590, 292, 0, 1, 0, 30, 0, 32128.80, 4478.80, '', 0, 0, NULL, NULL),
(257, 301, '2020-12-23', 680, 337, 0, 0, 0, 0, 0, 37032.60, 35082.60, '', 0, 0, NULL, NULL),
(258, 305, '2020-12-23', 590, 290, 0, 0, 0, 30, 0, 31930.80, 29030.80, '', 0, 0, NULL, NULL),
(259, 299, '2020-12-23', 680, 337, 0, 1, 0, 30, 0, 37109.60, 34659.60, '', 0, 0, NULL, NULL),
(260, 298, '2020-12-23', 680, 337, 0, 0, 0, 0, 0, 37054.60, 34804.60, '', 0, 0, NULL, NULL),
(261, 304, '2020-12-23', 590, 292, 0, 0, 0, 0, 0, 32150.80, 29750.80, '', 2, 0, NULL, NULL),
(262, 300, '2020-12-23', 590, 292, 0, 0, 0, 30, 0, 32084.80, 19834.80, '', 0, 0, NULL, NULL),
(263, 296, '1970-01-01', 680, 334, 0, 0, 0, 0, 0, 36702.60, 34452.60, '', 0, 0, NULL, NULL),
(264, 302, '2020-12-23', 590, 291, 0, 0, 0, 0, 1, 31919.80, 29969.80, '', 0, 0, NULL, NULL),
(265, 306, '2020-12-23', 591, 292, 0, 0, 0, 0, 0, 32105.70, 29505.70, '', 0, 0, NULL, NULL),
(266, 303, '2020-12-23', 680, 336, 0, 0, 0, 0, 0, 36988.60, 35038.60, '', 0, 0, NULL, NULL),
(267, 307, '2020-12-23', 590, 293, 0, 0, 0, 30, 0, 32216.80, 29366.80, '', 0, 0, NULL, NULL),
(268, 297, '2020-12-23', 590, 289, 0, 1, 0, 30, 0, 31919.80, 27569.80, '', 0, 0, NULL, NULL),
(269, 316, '2020-12-23', 690, 341, 0, 0, 0, 30, 0, 37510.00, 36760.00, '', 0, 0, NULL, NULL),
(270, 256, '2020-12-19', 590, 293, 0, 0, 0, 0, 0, 32183.80, 29883.80, '', 0, 0, NULL, NULL),
(271, 313, '2020-12-23', 590, 290, 0, 0, 0, 30, 0, 31985.80, 30935.80, '', 0, 0, NULL, NULL),
(272, 315, '1970-01-01', 590, 292, 0, 0, 0, 30, 0, 32095.80, 31645.80, '', 0, 0, NULL, NULL),
(273, 314, '1970-01-01', 600, 295, 0, 0, 0, 30, 0, 32518.20, 31468.20, '', 0, 0, NULL, NULL),
(274, 311, '2020-12-23', 590, 292, 0, 0, 0, 0, 0, 32128.80, 31978.80, '', 0, 0, NULL, NULL),
(275, 312, '2020-12-23', 580, 286, 0, 0, 0, 0, 0, 31486.40, 31336.40, '', 0, 0, NULL, NULL),
(276, 317, '2020-12-23', 580, 287, 0, 0, 0, 0, 0, 31596.40, 5446.40, '', 0, 0, NULL, NULL),
(277, 254, '1970-01-01', 680, 337, 0, 0, 0, 0, 0, 37043.60, 36893.60, '', 0, 0, NULL, NULL),
(278, 324, '2020-12-23', 600, 299, 0, 0, 0, 30, 0, 32914.20, 6464.20, '', 0, 0, NULL, NULL),
(279, 308, '2020-12-24', 680, 336, 0, 0, 0, 0, 0, 36999.60, 34699.60, '', 0, 0, NULL, NULL),
(280, 318, '2020-12-26', 600, 297, 0, 0, 0, 30, 0, 32661.20, 32211.20, 'PGE1', 0, 0, NULL, NULL),
(281, 330, '2020-12-26', 600, 296, 0, 0, 0, 30, 0, 32606.20, 5856.20, '', 0, 0, NULL, NULL),
(282, 328, '1970-01-01', 680, 338, 0, 0, 0, 0, 0, 37131.60, 37131.60, 'FSD', 0, 0, NULL, NULL),
(283, 327, '2020-12-26', 680, 338, 0, 0, 0, 0, 0, 37153.60, 37153.60, 'FSD', 0, 0, NULL, NULL),
(284, 331, '2020-12-26', 690, 340, 0, 1, 0, 30, 0, 37455.00, 9505.00, 'PGE2', 0, 0, NULL, NULL),
(285, 329, '2020-12-28', 680, 336, 0, 0, 0, 0, 0, 36966.60, 36966.60, 'fsd', 0, 0, NULL, NULL),
(286, 362, '2020-12-28', 490, 242, 0, 0, 0, 30, 0, 26637.60, 187.60, '', 0, 0, NULL, NULL),
(287, 333, '2020-12-28', 590, 291, 0, 0, 0, 30, 0, 32051.80, 30101.80, '', 0, 0, NULL, NULL),
(288, 332, '2020-12-28', 680, 335, 0, 0, 0, 0, 0, 36878.60, 34578.60, '', 0, 0, NULL, NULL),
(289, 342, '1970-01-01', 590, 290, 0, 0, 0, 30, 0, 31897.80, 29147.80, '', 0, 0, NULL, NULL),
(290, 343, '2020-12-28', 590, 289, 0, 0, 0, 0, 0, 31787.80, 29837.80, '', 0, 0, NULL, NULL),
(291, 346, '2020-12-28', 680, 332, 0, 0, 0, 0, 0, 36548.60, 34948.60, '', 0, 0, NULL, NULL),
(292, 347, '2020-12-28', 580, 287, 0, 0, 0, 0, 0, 31563.40, 28863.40, '', 0, 0, NULL, NULL),
(293, 355, '2020-12-28', 590, 291, 0, 0, 0, 0, 0, 31999.00, 28899.00, '', 0, 0, NULL, NULL),
(294, 356, '1970-01-01', 590, 291, 0, 0, 0, 0, 0, 32051.80, 28651.80, '', 0, 0, NULL, NULL),
(295, 344, '2020-12-28', 590, 290, 0, 0, 0, 30, 0, 31908.80, 30258.80, '', 0, 0, NULL, NULL),
(296, 336, '2020-12-28', 590, 291, 0, 0, 0, 0, 0, 32007.80, 30557.80, '', 0, 0, NULL, NULL),
(297, 341, '2020-12-28', 590, 289, 0, 0, 0, 0, 0, 31787.80, 29587.80, '', 0, 0, NULL, NULL),
(298, 352, '2020-12-28', 590, 289, 0, 0, 0, 0, 0, 31787.80, 29337.80, '', 0, 0, NULL, NULL),
(299, 334, '2020-12-28', 590, 291, 0, 0, 0, 0, 0, 32062.80, 29762.80, '', 0, 0, NULL, NULL),
(300, 351, '2020-12-28', 680, 336, 0, 0, 0, 0, 0, 36977.60, 34577.60, '', 2, 0, NULL, NULL),
(301, 338, '2020-12-28', 680, 337, 0, 0, 0, 0, 0, 37098.60, 34798.60, '', 0, 0, NULL, NULL),
(302, 349, '2020-12-28', 590, 291, 0, 0, 0, 0, 0, 32051.80, 29701.80, '', 0, 0, NULL, NULL),
(303, 335, '2020-12-28', 580, 285, 0, 0, 0, 0, 0, 31321.40, 29921.40, '', 0, 0, NULL, NULL),
(304, 337, '2020-12-28', 680, 334, 0, 0, 0, 0, 0, 36691.60, 34491.60, '', 0, 0, NULL, NULL),
(305, 340, '2020-12-28', 590, 292, 0, 0, 0, 0, 0, 32150.80, 27800.80, '', 0, 0, NULL, NULL),
(306, 353, '2020-12-28', 590, 293, 0, 0, 0, 0, 0, 32227.80, 30227.80, '', 0, 0, NULL, NULL),
(307, 354, '2020-12-28', 680, 339, 0, 0, 0, 0, 0, 37274.60, 35324.60, '', 0, 0, NULL, NULL),
(308, 350, '2020-12-28', 680, 337, 0, 0, 0, 0, 0, 37021.60, 33771.60, '', 0, 0, NULL, NULL),
(309, 345, '2020-12-28', 590, 292, 0, 0, 0, 0, 0, 32150.80, 27800.80, '', 0, 0, NULL, NULL),
(310, 339, '2020-12-29', 590, 291, 0, 0, 0, 0, 0, 32040.80, 30090.80, '', 0, 0, NULL, NULL),
(311, 359, '2020-12-29', 580, 287, 0, 0, 0, 0, 0, 31618.40, 29968.40, '', 0, 0, NULL, NULL),
(312, 357, '2020-12-29', 590, 293, 0, 0, 0, 0, 0, 32227.80, 29727.80, '', 0, 0, NULL, NULL),
(313, 358, '2020-12-29', 580, 288, 0, 0, 0, 0, 0, 31717.40, 28117.40, '', 0, 0, NULL, NULL),
(314, 348, '2020-12-29', 580, 285, 0, 0, 0, 0, 0, 31299.40, 28899.40, '', 0, 0, NULL, NULL),
(315, 360, '2020-12-29', 680, 338, 0, 2, 0, 0, 0, 37395.60, 35045.60, '', 0, 0, NULL, NULL),
(316, 361, '2020-12-29', 580, 287, 0, 0, 0, 0, 0, 31563.40, 29263.40, '', 0, 0, NULL, NULL),
(317, 363, '2020-12-30', 680, 338, 0, 0, 0, 0, 0, 37164.60, 33864.60, '', 0, 0, NULL, NULL),
(318, 364, '2020-12-30', 670, 333, 0, 0, 0, 0, 0, 36587.10, 34087.10, '', 0, 0, NULL, NULL),
(319, 365, '2020-12-30', 660, 327, 0, 0, 0, 0, 0, 35955.70, 33455.70, '', 0, 0, NULL, NULL),
(320, 366, '2021-01-02', 690, 341, 0, 0, 0, 30, 0, 37554.00, 10504.00, '', 0, 0, NULL, NULL),
(321, 371, '2021-01-02', 680, 336, 0, 0, 0, 0, 0, 36922.60, 36772.60, 'FSD', 0, 0, NULL, NULL),
(322, 368, '2021-01-02', 675, 332, 0, 0, 0, 0, 0, 36540.90, 36390.90, 'FSD', 0, 0, NULL, NULL),
(323, 367, '2021-01-05', 580, 287, 0, 1, 0, 30, 0, 31585.40, 29935.40, 'FSD', 0, 0, NULL, NULL),
(324, 370, '2021-01-05', 680, 335, 0, 0, 0, 30, 0, 36911.60, 36461.60, 'FSD', 2, 0, NULL, NULL),
(325, 369, '2021-01-05', 580, 285, 0, 0, 0, 0, 0, 31310.40, 31160.40, 'FSD', 3, 0, NULL, NULL),
(326, 319, '2020-12-24', 580, 287, 0, 0, 0, 30, 0, 31607.40, 30857.40, '', 0, 0, NULL, NULL),
(327, 376, '2021-01-04', 680, 338, 0, 0, 0, 0, 0, 38876.90, 36726.90, '', 0, 0, NULL, NULL),
(328, 377, '2021-01-04', 680, 338, 0, 0, 0, 0, 0, 38830.90, 37180.90, '', 0, 0, NULL, NULL),
(329, 393, '2021-01-04', 590, 293, 0, 0, 0, 0, 0, 33681.20, 30331.20, '', 0, 0, NULL, NULL),
(330, 379, '2021-01-04', 580, 288, 0, 0, 0, 30, 0, 33078.60, 30628.60, '', 0, 0, NULL, NULL),
(331, 380, '2021-01-05', 590, 291, 0, 0, 0, 0, 0, 33451.20, 31001.20, '', 0, 0, NULL, NULL),
(332, 381, '2021-01-04', 590, 290, 0, 0, 0, 0, 0, 33336.20, 30586.20, '', 0, 0, NULL, NULL),
(333, 382, '2021-01-05', 590, 290, 0, 0, 0, 0, 0, 33301.70, 22651.70, '', 0, 0, NULL, NULL),
(334, 372, '2021-01-05', 580, 287, 0, 0, 0, 30, 0, 34408.80, 31458.80, '', 0, 0, NULL, NULL),
(335, 373, '2021-01-05', 680, 336, 0, 0, 0, 30, 0, 40327.20, 13877.20, '', 0, 0, NULL, NULL),
(336, 374, '2021-01-05', 680, 336, 0, 0, 0, 30, 0, 40399.20, 39649.20, '', 0, 0, NULL, NULL),
(337, 385, '2021-01-06', 680, 335, 0, 0, 0, 30, 0, 38577.90, 35077.90, '', 0, 0, NULL, NULL),
(338, 386, '2021-01-07', 680, 334, 0, 0, 0, 0, 0, 38451.40, 35201.40, '', 0, 0, NULL, NULL),
(339, 391, '2021-01-07', 580, 288, 0, 0, 0, 0, 0, 33090.10, 30790.10, '', 0, 0, NULL, NULL),
(340, 392, '2021-01-07', 580, 287, 0, 0, 0, 0, 0, 33044.10, 30444.10, '', 0, 0, NULL, NULL),
(341, 388, '2021-01-07', 680, 338, 0, 0, 0, 0, 0, 38876.90, 36576.90, '', 0, 0, NULL, NULL),
(342, 390, '2021-01-07', 590, 294, 0, 0, 0, 0, 0, 33819.20, 31519.20, '', 0, 0, NULL, NULL),
(343, 387, '2021-01-07', 680, 335, 0, 0, 0, 0, 0, 38508.90, 35508.90, '', 0, 0, NULL, NULL),
(344, 384, '2021-01-07', 590, 293, 0, 0, 0, 0, 0, 33692.70, 31542.70, '', 0, 0, NULL, NULL),
(345, 599, '2021-01-10', 590, 292, 0, 0, 0, 0, 0, 35523.96, 11373.96, '', 0, 0, NULL, NULL),
(346, 600, '2021-01-10', 590, 293, 0, 0, 0, 0, 0, 35694.76, 12044.76, '', 0, 0, NULL, NULL),
(347, 606, '2021-01-10', 590, 292, 0, 0, 0, 0, 0, 35633.76, 13283.76, '', 0, 0, NULL, NULL),
(348, 608, '2021-01-10', 590, 329, 0, 0, 0, 0, 0, 40183.14, 16033.14, '', 0, 0, NULL, NULL),
(349, 609, '2021-01-10', 590, 293, 0, 0, 0, 0, 1, 35572.76, 11422.76, '', 0, 0, NULL, NULL),
(350, 610, '2021-01-10', 660, 325, 0, 0, 0, 0, 0, 39621.94, 15471.94, '', 0, 0, NULL, NULL),
(351, 611, '2021-01-10', 590, 292, 0, 0, 0, 0, 0, 35633.76, 33333.76, '', 0, 0, NULL, NULL),
(352, 612, '2021-01-10', 590, 292, 0, 0, 0, 0, 0, 35609.36, 32959.36, '', 0, 0, NULL, NULL),
(353, 613, '2021-01-10', 680, 337, 0, 0, 0, 0, 0, 41023.72, 38723.72, '', 0, 0, NULL, NULL),
(354, 614, '2021-01-10', 680, 337, 0, 0, 0, 0, 1, 40999.32, 38699.32, '', 0, 0, NULL, NULL),
(355, 616, '2021-01-10', 680, 337, 0, 0, 0, 0, 0, 41121.32, 38821.32, '', 0, 0, NULL, NULL),
(356, 617, '2021-01-10', 580, 281, 0, 0, 0, 0, 0, 34250.28, 31950.28, '', 0, 0, NULL, NULL),
(357, 618, '2021-01-10', 590, 291, 0, 0, 0, 0, 0, 35536.16, 33236.16, '', 0, 0, NULL, NULL),
(358, 619, '2021-01-10', 590, 293, 0, 0, 0, 0, 1, 35633.76, 33983.76, '', 0, 0, NULL, NULL),
(359, 620, '2021-01-10', 580, 287, 0, 0, 0, 0, 0, 35018.88, 33368.88, '', 0, 0, NULL, NULL),
(360, 621, '2021-01-10', 590, 292, 0, 0, 0, 0, 0, 35633.76, 33983.76, '', 0, 0, NULL, NULL),
(361, 622, '2021-01-10', 590, 293, 0, 0, 0, 0, 0, 35670.36, 31520.36, '', 0, 0, NULL, NULL),
(362, 623, '2021-01-10', 590, 293, 0, 0, 0, 0, 1, 35658.16, 32158.16, '', 0, 0, NULL, NULL),
(363, 624, '2021-01-10', 580, 286, 0, 0, 0, 0, 0, 34835.88, 32085.88, '', 0, 0, NULL, NULL),
(364, 627, '2021-01-10', 580, 290, 0, 0, 0, 0, 0, 35336.08, 32836.08, '', 0, 0, NULL, NULL),
(365, 628, '2021-01-10', 680, 336, 0, 0, 0, 0, 1, 40926.12, 38426.12, '', 0, 0, NULL, NULL),
(366, 629, '2021-01-10', 590, 293, 0, 0, 0, 0, 0, 35731.36, 33231.36, '', 0, 0, NULL, NULL),
(367, 626, '2021-01-10', 590, 292, 0, 0, 0, 0, 0, 35633.76, 33133.76, '', 0, 0, NULL, NULL),
(368, 394, '2021-01-08', 580, 286, 0, 0, 0, 0, 0, 32894.60, 31244.60, '', 0, 0, NULL, NULL),
(369, 389, '2021-01-08', 680, 338, 0, 0, 0, 0, 0, 38876.90, 35926.90, '', 0, 0, NULL, NULL),
(370, 395, '2021-01-08', 680, 335, 0, 0, 0, 0, 0, 38451.40, 36801.40, '', 0, 0, NULL, NULL),
(371, 396, '2021-01-08', 680, 337, 0, 0, 0, 0, 0, 38761.90, 37111.90, '', 0, 0, NULL, NULL),
(372, 397, '2021-01-08', 680, 336, 0, 0, 0, 0, 1, 38577.90, 36927.90, '', 0, 0, NULL, NULL),
(373, 398, '2021-01-08', 580, 288, 0, 0, 0, 0, 0, 33124.60, 30474.60, '', 0, 0, NULL, NULL),
(374, 399, '2021-01-08', 680, 338, 0, 0, 0, 0, 1, 38761.90, 37111.90, '', 0, 0, NULL, NULL),
(375, 400, '2021-01-08', 590, 293, 0, 0, 0, 0, 1, 33612.20, 30162.20, '', 0, 0, NULL, NULL),
(376, 401, '2021-01-08', 680, 336, 0, 0, 0, 0, 0, 38589.40, 35939.40, '', 0, 0, NULL, NULL),
(377, 402, '2021-01-08', 590, 292, 0, 0, 0, 0, 0, 33508.70, 30858.70, '', 0, 0, NULL, NULL),
(378, 403, '2021-01-08', 590, 291, 0, 0, 0, 0, 1, 33428.20, 30778.20, '', 0, 0, NULL, NULL),
(379, 404, '2021-01-08', 680, 336, 0, 0, 0, 0, 0, 38612.40, 35512.40, '', 0, 0, NULL, NULL),
(380, 405, '2021-01-08', 590, 292, 0, 0, 0, 0, 0, 33600.70, 30950.70, '', 0, 0, NULL, NULL),
(381, 406, '2021-01-08', 590, 293, 0, 0, 0, 0, 0, 33646.70, 30996.70, '', 0, 0, NULL, NULL),
(382, 407, '2021-01-08', 590, 291, 0, 0, 0, 0, 0, 33439.70, 30789.70, '', 0, 0, NULL, NULL),
(383, 408, '2021-01-08', 580, 287, 0, 0, 0, 0, 0, 32952.10, 28952.10, '', 0, 0, NULL, NULL),
(384, 409, '2021-01-08', 590, 291, 0, 0, 0, 0, 0, 33474.20, 31824.20, '', 0, 0, NULL, NULL),
(385, 410, '2021-01-08', 590, 292, 0, 0, 0, 0, 0, 33577.70, 30577.70, '', 0, 0, NULL, NULL),
(386, 411, '2021-01-08', 590, 292, 0, 0, 0, 0, 0, 33612.20, 30962.20, '', 0, 0, NULL, NULL),
(387, 412, '2021-01-08', 680, 337, 0, 0, 0, 0, 1, 38695.20, 36045.20, '', 0, 0, NULL, NULL),
(388, 413, '2021-01-08', 680, 336, 0, 0, 0, 0, 0, 38646.90, 35996.90, '', 0, 0, NULL, NULL),
(389, 414, '2021-01-08', 590, 292, 0, 0, 0, 0, 0, 33554.70, 30404.70, '', 0, 0, NULL, NULL),
(390, 456, '2021-01-08', 680, 339, 0, 0, 0, 0, 2, 38784.90, 36284.90, '', 0, 0, NULL, NULL),
(391, 457, '2021-01-08', 590, 293, 0, 0, 0, 0, 1, 33600.70, 30750.70, '', 0, 0, NULL, NULL),
(392, 607, '2021-01-10', 590, 293, 0, 0, 0, 0, 0, 35670.36, 11720.36, '', 0, 0, NULL, NULL),
(393, 458, '2021-01-09', 590, 293, 0, 0, 0, 0, 0, 33658.20, 31008.20, '', 0, 0, NULL, NULL),
(394, 383, '2021-01-07', 590, 293, 0, 0, 0, 0, 0, 33750.20, 31600.20, '', 0, 0, NULL, NULL),
(395, 375, '2021-01-06', 690, 341, 0, 0, 0, 0, 0, 40920.00, 14770.00, '', 0, 0, NULL, NULL),
(396, 460, '2021-01-08', 680, 336, 0, 0, 0, 0, 0, 41011.52, 40861.52, '', 0, 0, NULL, NULL),
(397, 461, '2021-01-08', 680, 336, 0, 0, 0, 0, 0, 41023.72, 14873.72, '', 0, 0, NULL, NULL),
(398, 462, '2021-01-08', 590, 292, 0, 0, 0, 0, 0, 35584.96, 35434.96, '', 0, 0, NULL, NULL),
(399, 737, '2021-01-11', 590, 290, 0, 0, 0, 30, 0, 35462.96, 34412.96, '', 0, 0, NULL, NULL),
(400, 742, '2021-01-11', 680, 338, 0, 0, 0, 30, 0, 41231.12, 40481.12, '', 0, 0, NULL, NULL),
(401, 738, '2021-01-11', 600, 296, 0, 0, 0, 0, 0, 36112.00, 9962.00, '', 0, 0, NULL, NULL),
(402, 739, '2021-01-11', 680, 338, 0, 0, 0, 0, 0, 41206.72, 15056.72, '', 0, 0, NULL, NULL),
(403, 740, '2021-01-11', 680, 336, 0, 0, 0, 30, 0, 40950.52, 40500.52, '', 0, 0, NULL, NULL),
(404, 631, '2021-01-11', 590, 291, 0, 0, 0, 0, 0, 35560.56, 33060.56, '', 0, 0, NULL, NULL),
(405, 714, '2021-01-11', 590, 291, 0, 0, 0, 0, 0, 35560.56, 32660.56, '', 0, 0, NULL, NULL),
(406, 719, '2021-01-11', 590, 293, 0, 0, 0, 0, 0, 35731.36, 32781.36, '', 0, 0, NULL, NULL),
(407, 637, '2021-01-11', 680, 337, 0, 0, 0, 0, 0, 41072.52, 38572.52, '', 0, 0, NULL, NULL),
(408, 717, '2021-01-11', 590, 290, 0, 0, 0, 0, 0, 35426.36, 32926.36, '', 0, 0, NULL, NULL),
(409, 716, '2021-01-11', 680, 337, 0, 0, 0, 0, 0, 41121.32, 38621.32, '', 0, 0, NULL, NULL),
(410, 635, '2021-01-11', 680, 338, 0, 0, 0, 0, 0, 41231.12, 38731.12, '', 0, 0, NULL, NULL),
(411, 636, '2021-01-11', 680, 337, 0, 0, 0, 0, 0, 41060.32, 38560.32, '', 0, 0, NULL, NULL),
(412, 718, '2021-01-11', 590, 295, 0, 0, 0, 0, 0, 36048.56, 33548.56, '', 0, 0, NULL, NULL),
(413, 713, '2021-01-11', 590, 292, 0, 0, 0, 0, 0, 35658.16, 33458.16, '', 0, 0, NULL, NULL),
(414, 720, '2021-01-11', 590, 292, 0, 0, 0, 0, 0, 35682.56, 33182.56, '', 0, 0, NULL, NULL),
(415, 633, '2021-01-11', 590, 292, 0, 0, 0, 0, 0, 35658.16, 33158.16, '', 0, 0, NULL, NULL),
(416, 630, '2021-01-11', 590, 292, 0, 0, 0, 0, 0, 35633.76, 11483.76, '', 0, 0, NULL, NULL),
(417, 722, '2021-01-11', 680, 338, 0, 0, 0, 0, 0, 41267.72, 38567.72, '', 0, 0, NULL, NULL),
(418, 715, '2021-01-11', 680, 337, 0, 0, 0, 0, 0, 41109.12, 38559.12, '', 0, 0, NULL, NULL),
(419, 726, '2021-01-11', 680, 337, 0, 0, 0, 0, 0, 41096.92, 37846.92, '', 0, 0, NULL, NULL),
(420, 724, '2021-01-11', 590, 293, 0, 0, 0, 0, 0, 35780.16, 33280.16, '', 0, 0, NULL, NULL),
(421, 725, '2021-01-11', 590, 286, 0, 0, 0, 0, 0, 34945.68, 32095.68, '', 0, 0, NULL, NULL),
(422, 747, '2021-01-12', 680, 339, 0, 0, 0, 0, 0, 41414.12, 39114.12, '', 0, 0, NULL, NULL),
(423, 745, '2021-01-12', 580, 288, 0, 0, 0, 0, 0, 35092.08, 32792.08, '', 0, 0, NULL, NULL),
(424, 744, '2021-01-12', 590, 292, 0, 0, 0, 0, 0, 35609.36, 33309.36, '', 0, 0, NULL, NULL),
(425, 743, '2021-01-12', 580, 286, 0, 0, 0, 0, 0, 34933.48, 32633.48, '', 0, 0, NULL, NULL),
(426, 733, '2021-01-12', 580, 290, 0, 0, 0, 0, 0, 35384.88, 32284.88, '', 0, 0, NULL, NULL),
(427, 730, '2021-01-13', 590, 292, 0, 0, 0, 0, 0, 35609.36, 32909.36, '', 0, 0, NULL, NULL),
(428, 729, '2021-01-13', 680, 338, 0, 0, 0, 0, 0, 41182.32, 37582.32, '', 0, 0, NULL, NULL),
(429, 735, '2021-01-13', 580, 287, 0, 0, 0, 0, 0, 35055.48, 32305.48, '', 0, 0, NULL, NULL),
(430, 736, '2021-01-13', 590, 297, 0, 0, 0, 0, 0, 36255.96, 33155.96, '', 0, 0, NULL, NULL),
(431, 732, '2021-01-13', 680, 337, 0, 0, 0, 0, 0, 41121.32, 38821.32, '', 0, 0, NULL, NULL),
(432, 727, '2021-01-13', 590, 293, 0, 0, 0, 0, 0, 35755.76, 33455.76, '', 0, 0, NULL, NULL),
(434, 731, '2021-01-13', 590, 292, 0, 0, 0, 30, 0, 35645.96, 32545.96, '', 0, 0, NULL, NULL),
(435, 728, '2021-01-13', 590, 293, 0, 0, 0, 30, 0, 35731.36, 33131.36, '', 0, 0, NULL, NULL),
(436, 734, '2021-01-13', 580, 287, 0, 0, 0, 0, 0, 35031.08, 32731.08, '', 0, 0, NULL, NULL),
(437, 748, '2021-01-13', 680, 339, 0, 0, 0, 0, 0, 41316.52, 39366.52, '', 0, 0, NULL, NULL),
(438, 759, '2021-01-13', 680, 338, 0, 0, 0, 0, 0, 41218.92, 38918.92, '', 0, 0, NULL, NULL),
(439, 770, '2021-01-13', 680, 336, 0, 0, 0, 0, 0, 41011.52, 38711.52, '', 0, 0, NULL, NULL),
(440, 763, '2021-01-13', 580, 287, 0, 0, 0, 0, 0, 35031.08, 32731.08, '', 0, 0, NULL, NULL),
(441, 746, '2021-01-13', 590, 293, 0, 0, 0, 0, 0, 35731.36, 33431.36, '', 0, 0, NULL, NULL),
(442, 750, '2021-01-13', 590, 293, 0, 0, 0, 0, 0, 35706.96, 33406.96, '', 0, 0, NULL, NULL),
(443, 749, '2021-01-14', 580, 289, 0, 0, 0, 0, 0, 35287.28, 32987.28, '', 0, 0, NULL, NULL),
(444, 751, '2021-01-14', 590, 292, 0, 0, 0, 0, 0, 35633.76, 11483.76, '', 0, 0, NULL, NULL),
(445, 754, '2021-01-14', 670, 338, 0, 0, 0, 0, 0, 41212.82, 38912.82, '', 0, 0, NULL, NULL),
(446, 766, '2021-01-14', 590, 291, 0, 0, 0, 0, 0, 35536.16, 33236.16, '', 0, 0, NULL, NULL),
(447, 721, '2021-01-11', 590, 292, 0, 0, 0, 0, 0, 35682.56, 33182.56, '', 0, 0, NULL, NULL),
(448, 767, '2021-01-14', 590, 294, 0, 0, 0, 0, 0, 35926.56, 32576.56, '', 0, 0, NULL, NULL),
(449, 771, '2021-01-14', 590, 292, 0, 0, 0, 0, 0, 35621.56, 33321.56, '', 0, 0, NULL, NULL),
(450, 752, '2021-01-14', 590, 291, 0, 0, 0, 0, 0, 35548.36, 33248.36, '', 0, 0, NULL, NULL),
(451, 634, '2021-01-11', 580, 287, 0, 0, 0, 0, 0, 34982.28, 32482.28, '', 0, 0, NULL, NULL),
(452, 753, '2021-01-14', 580, 287, 0, 0, 0, 0, 0, 35018.88, 32718.88, '', 0, 0, NULL, NULL),
(453, 764, '2021-01-14', 590, 292, 0, 0, 0, 0, 0, 35682.56, 32882.56, '', 0, 0, NULL, NULL),
(454, 755, '2021-01-14', 590, 294, 0, 0, 0, 0, 0, 35816.76, 33516.76, '', 0, 0, NULL, NULL),
(455, 758, '2021-01-14', 590, 291, 0, 0, 0, 0, 0, 35499.56, 33199.56, '', 0, 0, NULL, NULL),
(456, 723, '2021-01-11', 680, 340, 0, 0, 0, 0, 0, 41511.72, 39011.72, '', 0, 0, NULL, NULL),
(457, 760, '2021-01-14', 0, 336, 680, 0, 0, 0, 0, 40950.52, 38650.52, '', 0, 0, NULL, NULL),
(458, 768, '2021-01-14', 680, 338, 0, 0, 0, 0, 0, 41218.92, 38518.92, '', 0, 0, NULL, NULL),
(459, 761, '2021-01-14', 680, 336, 0, 0, 0, 0, 0, 40962.72, 38662.72, '', 0, 0, NULL, NULL),
(460, 779, '2021-01-14', 580, 290, 0, 0, 0, 0, 0, 35323.88, 33323.88, '', 0, 0, NULL, NULL),
(461, 769, '2021-01-14', 590, 293, 0, 0, 0, 0, 0, 35731.36, 32931.36, '', 0, 0, NULL, NULL),
(462, 444, '2021-01-14', 590, 292, 0, 0, 0, 30, 0, 35633.76, 10883.76, '', 0, 0, NULL, NULL),
(463, 762, '2021-01-15', 680, 340, 0, 0, 0, 0, 0, 41487.32, 39837.32, '', 0, 0, NULL, NULL),
(464, 782, '2021-01-15', 680, 335, 0, 0, 0, 0, 0, 40889.52, 38589.52, '', 0, 0, NULL, NULL),
(465, 756, '2021-01-15', 590, 291, 0, 0, 0, 0, 0, 35536.16, 33236.16, '', 0, 0, NULL, NULL),
(466, 776, '2021-01-15', 590, 294, 0, 0, 0, 0, 0, 35926.56, 16376.56, '', 0, 0, NULL, NULL),
(467, 765, '2021-01-15', 590, 293, 0, 0, 0, 0, 0, 35767.96, 33467.96, '', 0, 0, NULL, NULL),
(468, 781, '1970-01-01', 580, 288, 0, 0, 0, 0, 0, 35165.28, 32865.28, '', 0, 0, NULL, NULL),
(469, 780, '2021-01-15', 580, 288, 0, 0, 0, 0, 0, 35116.48, 30816.48, '', 0, 0, NULL, NULL),
(470, 784, '2021-01-15', 580, 288, 0, 0, 0, 0, 0, 35104.28, 31304.28, '', 0, 0, NULL, NULL),
(471, 777, '2021-01-15', 590, 295, 0, 0, 0, 0, 0, 35938.76, 11788.76, '', 0, 0, NULL, NULL),
(472, 778, '2021-01-15', 680, 336, 0, 0, 0, 0, 0, 41011.52, 39061.52, '', 0, 0, NULL, NULL),
(473, 785, '2021-01-15', 680, 338, 0, 0, 0, 0, 0, 41255.52, 38955.52, '', 0, 0, NULL, NULL),
(474, 783, '2021-01-15', 590, 294, 0, 0, 0, 0, 0, 35816.76, 33566.76, '', 0, 0, NULL, NULL),
(475, 774, '2021-01-15', 590, 292, 0, 0, 0, 0, 0, 35609.36, 13959.36, '', 0, 0, NULL, NULL),
(476, 775, '2021-01-15', 590, 292, 0, 0, 0, 0, 0, 35633.76, 13483.76, '', 0, 0, NULL, NULL),
(477, 793, '2021-01-15', 590, 294, 0, 0, 0, 30, 0, 35841.16, 11391.16, '', 0, 0, NULL, NULL),
(478, 787, '2021-01-16', 590, 294, 0, 0, 0, 0, 0, 35853.36, 11703.36, '', 0, 0, NULL, NULL),
(479, 789, '2021-01-16', 590, 295, 0, 0, 0, 0, 0, 35950.96, 11800.96, '', 0, 0, NULL, NULL),
(480, 786, '2021-01-16', 680, 338, 0, 0, 0, 0, 0, 41231.12, 38931.12, '', 0, 0, NULL, NULL),
(481, 788, '2021-01-16', 590, 294, 0, 0, 0, 0, 0, 35865.56, 11715.56, '', 0, 0, NULL, NULL),
(482, 792, '2021-01-16', 680, 338, 0, 0, 0, 0, 0, 41267.72, 38967.72, '', 0, 0, NULL, NULL),
(483, 791, '2021-01-16', 590, 294, 0, 0, 0, 0, 0, 35877.76, 31227.76, '', 0, 0, NULL, NULL),
(484, 790, '2021-01-16', 590, 294, 0, 0, 0, 0, 0, 35828.96, 11678.96, '', 0, 0, NULL, NULL),
(485, 827, '2021-01-18', 590, 291, 0, 0, 0, 0, 0, 35450.76, 22650.76, '', 0, 0, NULL, NULL),
(486, 829, '2021-01-18', 680, 338, 0, 0, 0, 0, 0, 41182.32, 28882.32, '', 0, 0, NULL, NULL),
(487, 830, '2021-01-18', 670, 330, 0, 0, 0, 0, 0, 40297.82, 30997.82, '', 0, 0, NULL, NULL),
(488, 831, '2021-01-18', 590, 293, 0, 0, 0, 0, 0, 35804.56, 23504.56, '', 0, 0, NULL, NULL),
(489, 832, '2021-01-18', 590, 291, 0, 0, 0, 0, 0, 35560.56, 33260.56, '', 0, 0, NULL, NULL),
(490, 833, '2021-01-18', 590, 291, 0, 0, 0, 0, 0, 35536.16, 33236.16, '', 0, 0, NULL, NULL),
(491, 834, '2021-01-18', 590, 291, 0, 0, 0, 0, 0, 35560.56, 26260.56, '', 0, 0, NULL, NULL),
(492, 835, '2021-01-18', 680, 338, 0, 0, 0, 0, 0, 41279.92, 28979.92, '', 0, 0, NULL, NULL),
(493, 836, '2021-01-18', 680, 337, 0, 0, 0, 0, 0, 41109.12, 29809.12, '', 0, 0, NULL, NULL),
(494, 837, '2021-01-18', 590, 292, 0, 0, 0, 0, 0, 35597.16, 33297.16, '', 0, 0, NULL, NULL),
(495, 838, '2021-01-18', 590, 291, 0, 0, 0, 0, 0, 35536.16, 23236.16, '', 0, 0, NULL, NULL),
(496, 839, '2021-01-18', 680, 340, 0, 0, 0, 0, 0, 41450.72, 39150.72, '', 0, 0, NULL, NULL),
(497, 840, '2021-01-18', 580, 287, 0, 0, 0, 0, 0, 35067.68, 22767.68, '', 0, 0, NULL, NULL),
(498, 815, '2021-01-18', 590, 291, 0, 0, 0, 0, 0, 35523.96, 26223.96, '', 0, 0, NULL, NULL),
(499, 817, '2021-01-18', 680, 339, 0, 0, 0, 0, 0, 41316.52, 32016.52, '', 0, 0, NULL, NULL),
(500, 818, '2021-01-18', 680, 337, 0, 0, 0, 0, 0, 41060.32, 31760.32, '', 0, 0, NULL, NULL),
(501, 819, '2021-01-18', 580, 286, 0, 0, 0, 0, 0, 34921.28, 25621.28, '', 0, 0, NULL, NULL),
(502, 820, '2021-01-18', 590, 291, 0, 0, 0, 0, 0, 35487.36, 25187.36, '', 0, 0, NULL, NULL),
(503, 459, '2021-01-09', 580, 288, 0, 0, 0, 0, 0, 33090.10, 29090.10, '', 0, 0, NULL, NULL),
(504, 822, '2021-01-18', 580, 287, 0, 0, 0, 30, 0, 35079.88, 25179.88, '', 0, 0, NULL, NULL),
(505, 823, '2021-01-18', 590, 293, 0, 0, 0, 0, 0, 35780.16, 23480.16, '', 0, 0, NULL, NULL),
(506, 824, '2021-01-18', 580, 290, 0, 0, 0, 0, 0, 35348.28, 26048.28, '', 0, 0, NULL, NULL),
(507, 825, '2021-01-18', 590, 294, 0, 0, 0, 0, 0, 35889.96, 27539.96, '', 0, 0, NULL, NULL),
(508, 841, '2021-01-18', 580, 288, 0, 0, 0, 0, 0, 35079.88, 25779.88, '', 0, 0, NULL, NULL),
(509, 846, '2021-01-18', 580, 287, 0, 0, 0, 0, 0, 34982.28, 25682.28, '', 0, 0, NULL, NULL),
(510, 853, '2021-01-18', 590, 293, 0, 0, 0, 0, 0, 35731.36, 24631.36, '', 0, 0, NULL, NULL),
(511, 855, '2021-01-18', 580, 288, 0, 0, 0, 0, 0, 35104.28, 22804.28, '', 0, 0, NULL, NULL),
(512, 772, '2021-01-18', 590, 290, 0, 1, 0, 30, 0, 35523.96, 31773.96, '', 0, 0, NULL, NULL),
(513, 843, '2021-01-19', 580, 287, 0, 0, 0, 0, 0, 35055.48, 25755.48, '', 0, 0, NULL, NULL),
(514, 845, '2021-01-19', 680, 337, 0, 0, 0, 0, 0, 41109.12, 31809.12, '', 0, 0, NULL, NULL),
(515, 850, '2021-01-19', 680, 338, 0, 0, 0, 0, 0, 41292.12, 28992.12, '', 0, 0, NULL, NULL),
(516, 844, '2021-01-19', 680, 337, 0, 0, 0, 0, 0, 41157.92, 28857.92, '', 0, 0, NULL, NULL),
(517, 849, '2021-01-19', 680, 336, 0, 0, 0, 0, 0, 40962.72, 38062.72, '', 0, 0, NULL, NULL),
(518, 852, '2021-01-19', 580, 287, 0, 0, 0, 30, 0, 35043.28, 22443.28, '', 0, 0, NULL, NULL),
(519, 856, '2021-01-19', 680, 337, 0, 0, 0, 0, 0, 41170.12, 31870.12, '', 0, 0, NULL, NULL),
(520, 757, '2021-01-14', 680, 341, 0, 0, 0, 0, 0, 41597.12, 39647.12, '', 0, 0, NULL, NULL),
(521, 848, '2021-01-19', 590, 292, 0, 0, 0, 0, 0, 35621.56, 23621.56, '', 0, 0, NULL, NULL),
(522, 842, '2021-01-19', 670, 334, 0, 0, 0, 0, 0, 40712.62, 31412.62, '', 0, 0, NULL, NULL),
(523, 854, '2021-01-19', 590, 293, 0, 0, 0, 0, 0, 35719.16, 23919.16, '', 0, 0, NULL, NULL),
(524, 851, '2021-01-19', 590, 292, 0, 0, 0, 0, 0, 35597.16, 26297.16, '', 0, 0, NULL, NULL),
(525, 857, '2021-01-19', 590, 291, 0, 0, 0, 0, 0, 35548.36, 26248.36, '', 0, 0, NULL, NULL),
(526, 847, '2021-01-19', 580, 289, 0, 0, 0, 0, 0, 35299.48, 26149.48, '', 0, 0, NULL, NULL),
(527, 865, '2021-01-20', 590, 293, 0, 0, 0, 0, 0, 37405.95, 17755.95, '', 0, 0, NULL, NULL),
(528, 862, '2021-01-20', 590, 293, 0, 0, 0, 0, 0, 37418.70, 16368.70, '', 0, 0, NULL, NULL),
(529, 863, '2021-01-20', 580, 288, 0, 0, 0, 0, 0, 36737.85, 15787.85, '', 0, 0, NULL, NULL),
(530, 864, '2021-01-20', 590, 291, 0, 0, 0, 0, 90, 25663.20, 4813.20, '', 0, 0, NULL, NULL),
(531, 866, '2021-01-20', 590, 292, 0, 0, 0, 0, 0, 37265.70, 17115.70, '', 0, 0, NULL, NULL);
INSERT INTO `loading_receiveings` (`id`, `loading_entries_id`, `receiving_date`, `received_bag`, `received_mt`, `shortage_bag`, `shortage_mt`, `shortage_rs`, `shortage_mt_rs`, `weight_gain`, `gross_amt`, `net_amt`, `narration`, `is_payment`, `status`, `created_at`, `updated_at`) VALUES
(532, 867, '2021-01-20', 590, 294, 0, 0, 0, 0, 0, 37456.95, 30156.95, '', 0, 0, NULL, NULL),
(533, 859, '2021-01-20', 590, 294, 0, 0, 0, 0, 0, 37507.95, 13357.95, '', 0, 0, NULL, NULL),
(534, 868, '2021-01-20', 680, 340, 0, 0, 0, 0, 0, 43332.15, 31682.15, '', 0, 0, NULL, NULL),
(535, 885, '2021-01-20', 580, 286, 0, 0, 0, 0, 0, 36495.60, 34195.60, '', 0, 0, NULL, NULL),
(536, 860, '2021-01-20', 590, 295, 0, 0, 0, 0, 0, 37660.95, 13510.95, '', 0, 0, NULL, NULL),
(537, 869, '2021-01-20', 590, 294, 0, 0, 0, 0, 0, 37533.45, 35533.45, '', 0, 0, NULL, NULL),
(538, 861, '2021-01-20', 670, 334, 0, 0, 0, 0, 0, 42637.28, 18487.28, '', 0, 0, NULL, NULL),
(539, 858, '2021-01-20', 670, 334, 0, 0, 0, 0, 0, 42535.28, 18385.28, '', 0, 0, NULL, NULL),
(540, 881, '2021-01-20', 580, 283, 0, 0, 0, 0, 0, 36049.35, 33749.35, '', 0, 0, NULL, NULL),
(541, 884, '2021-01-20', 590, 291, 0, 0, 0, 0, 0, 37048.95, 34748.95, '', 0, 0, NULL, NULL),
(542, 741, '2021-01-13', 690, 340, 0, 0, 0, 30, 0, 41455.60, 14705.60, '', 0, 0, NULL, NULL),
(543, 773, '2021-01-16', 680, 335, 0, 1, 0, 30, 0, 40974.92, 12124.92, '', 0, 0, NULL, NULL),
(544, 896, '2021-01-16', 680, 335, 0, 0, 0, 30, 0, 40974.92, 39624.92, '', 0, 0, NULL, NULL),
(545, 897, '2021-01-16', 690, 342, 0, 0, 0, 30, 0, 41809.40, 40459.40, '', 0, 0, NULL, NULL),
(546, 899, '2021-01-19', 680, 336, 0, 0, 0, 30, 0, 42924.15, 15574.15, '', 0, 0, NULL, NULL),
(547, 891, '2021-01-21', 590, 291, 0, 0, 0, 0, 0, 37163.70, 34863.70, '', 0, 0, NULL, NULL),
(548, 892, '2021-01-21', 590, 290, 0, 0, 0, 0, 0, 36921.45, 34621.45, '', 0, 0, NULL, NULL),
(549, 879, '2021-01-21', 590, 290, 0, 0, 0, 0, 0, 37010.70, 34710.70, '', 0, 0, NULL, NULL),
(550, 883, '2021-01-21', 690, 339, 0, 0, 0, 0, 0, 43248.00, 40948.00, '', 0, 0, NULL, NULL),
(551, 870, '2021-01-21', 564, 281, 0, 0, 0, 0, 0, 35882.33, 14732.33, '', 0, 0, NULL, NULL),
(552, 895, '2021-01-21', 590, 288, 0, 0, 0, 0, 0, 36691.95, 34391.95, '', 0, 0, NULL, NULL),
(553, 880, '2021-01-21', 590, 286, 0, 0, 0, 0, 0, 36419.10, 34119.10, '', 0, 0, NULL, NULL),
(554, 890, '2021-01-21', 590, 292, 0, 0, 0, 0, 0, 37179.00, 34879.00, '', 0, 0, NULL, NULL),
(555, 933, '2021-01-21', 690, 341, 0, 0, 0, 0, 0, 43413.75, 40513.75, '', 0, 0, NULL, NULL),
(556, 893, '1970-01-01', 590, 291, 0, 0, 0, 0, 0, 37163.70, 13013.70, '', 0, 0, NULL, NULL),
(557, 875, '2021-01-21', 590, 292, 0, 0, 0, 0, 0, 37214.70, 13064.70, '', 0, 0, NULL, NULL),
(558, 887, '2021-01-21', 670, 330, 0, 0, 0, 0, 0, 42039.30, 39739.30, '', 0, 0, NULL, NULL),
(559, 876, '2021-01-21', 690, 338, 0, 0, 0, 0, 0, 43069.50, 40769.50, '', 0, 0, NULL, NULL),
(560, 878, '2021-01-21', 590, 293, 0, 0, 0, 0, 0, 37316.70, 35016.70, '', 0, 0, NULL, NULL),
(561, 886, '2021-01-21', 590, 290, 0, 0, 0, 0, 0, 37036.20, 34736.20, '', 0, 0, NULL, NULL),
(562, 888, '2021-01-21', 690, 341, 0, 0, 0, 0, 0, 43413.75, 41113.75, '', 0, 0, NULL, NULL),
(563, 908, '2021-01-21', 690, 343, 0, 0, 0, 0, 0, 43681.50, 42031.50, '', 0, 0, NULL, NULL),
(564, 894, '2021-01-21', 590, 293, 0, 0, 0, 0, 0, 37367.70, 13217.70, '', 0, 0, NULL, NULL),
(565, 907, '2021-01-22', 690, 338, 0, 0, 0, 30, 0, 43133.25, 40233.25, '', 0, 0, NULL, NULL),
(566, 909, '2021-01-22', 590, 291, 0, 0, 0, 0, 0, 37150.95, 34850.95, '', 0, 0, NULL, NULL),
(567, 914, '2021-01-22', 590, 291, 0, 0, 0, 0, 0, 37150.95, 34850.95, '', 0, 0, NULL, NULL),
(568, 917, '2021-01-22', 590, 288, 0, 0, 0, 0, 0, 36781.20, 34481.20, '', 0, 0, NULL, NULL),
(569, 905, '2021-01-22', 590, 291, 0, 0, 0, 0, 0, 37087.20, 12937.20, '', 0, 0, NULL, NULL),
(570, 904, '2021-01-22', 590, 290, 0, 0, 0, 0, 0, 36972.45, 15822.45, '', 0, 0, NULL, NULL),
(571, 912, '2021-01-22', 580, 287, 0, 0, 0, 0, 0, 36584.85, 34284.85, '', 0, 0, NULL, NULL),
(572, 910, '2021-01-22', 690, 340, 0, 0, 0, 0, 0, 43286.25, 40986.25, '', 0, 0, NULL, NULL),
(573, 925, '2021-01-22', 590, 291, 0, 0, 0, 0, 0, 37138.20, 34838.20, '', 0, 0, NULL, NULL),
(574, 916, '2021-01-22', 590, 290, 0, 0, 0, 0, 0, 36946.95, 34646.95, '', 0, 0, NULL, NULL),
(575, 871, '2021-01-22', 590, 293, 0, 0, 0, 0, 0, 37380.45, 13230.45, '', 0, 0, NULL, NULL),
(576, 872, '2021-01-22', 590, 293, 0, 0, 0, 0, 0, 37418.70, 13268.70, '', 0, 0, NULL, NULL),
(577, 921, '2021-01-22', 590, 293, 0, 0, 0, 0, 0, 37342.20, 35042.20, '', 0, 0, NULL, NULL),
(578, 938, '2021-01-22', 580, 286, 0, 0, 0, 0, 0, 36444.60, 34144.60, '', 0, 0, NULL, NULL),
(579, 939, '2021-01-22', 590, 294, 0, 0, 0, 0, 0, 37520.70, 35870.70, '', 0, 0, NULL, NULL),
(580, 919, '2021-01-22', 580, 286, 0, 0, 0, 0, 0, 36482.85, 34182.85, '', 0, 0, NULL, NULL),
(581, 898, '2021-01-20', 600, 296, 0, 0, 0, 0, 0, 36138.84, 9988.84, '', 0, 0, NULL, NULL),
(582, 900, '2021-01-20', 680, 336, 0, 0, 0, 30, 0, 42873.15, 40323.15, '', 0, 0, NULL, NULL),
(583, 901, '2021-01-21', 680, 337, 0, 1, 0, 30, 0, 43102.65, 13952.65, '', 0, 0, NULL, NULL),
(584, 326, '2020-12-24', 490, 195, 0, 50, 0, 30, 0, 26989.60, -149160.40, '', 0, 0, NULL, NULL),
(585, 325, '2020-12-24', 600, 298, 0, 0, 0, 30, 0, 32804.20, 6354.20, '', 0, 0, NULL, NULL),
(586, 947, '2021-01-23', 680, 335, 0, 0, 0, 30, 0, 42822.15, 29672.15, '', 0, 0, NULL, NULL),
(587, 946, '2021-01-23', 680, 337, 0, 1, 0, 30, 0, 43089.90, 38739.90, '', 0, 0, NULL, NULL),
(588, 955, '2021-01-23', 690, 340, 0, 0, 0, 0, 0, 43350.00, 41375.00, '', 0, 0, NULL, NULL),
(589, 882, '2021-01-21', 690, 340, 0, 0, 0, 0, 0, 43375.50, 41075.50, '', 0, 0, NULL, NULL),
(590, 937, '2021-01-23', 690, 340, 0, 0, 0, 0, 0, 43362.75, 34062.75, '', 0, 0, NULL, NULL),
(591, 931, '2021-01-23', 590, 291, 0, 0, 0, 0, 0, 37112.70, 34312.70, '', 0, 0, NULL, NULL),
(592, 906, '2021-01-23', 590, 290, 0, 0, 0, 0, 0, 36934.20, 34634.20, '', 0, 0, NULL, NULL),
(593, 935, '2021-01-23', 590, 289, 0, 0, 0, 0, 0, 36857.70, 33557.70, '', 0, 0, NULL, NULL),
(594, 932, '2021-01-23', 590, 289, 0, 0, 0, 0, 0, 36895.95, 33495.95, '', 0, 0, NULL, NULL),
(595, 889, '2021-01-23', 590, 290, 0, 0, 0, 0, 0, 36921.45, 34621.45, '', 0, 0, NULL, NULL),
(596, 927, '2021-01-23', 690, 340, 0, 0, 0, 0, 0, 43299.00, 40999.00, '', 0, 0, NULL, NULL),
(597, 929, '2021-01-23', 690, 340, 0, 0, 0, 0, 0, 43401.00, 41101.00, '', 0, 0, NULL, NULL),
(598, 934, '2021-01-23', 690, 342, 0, 0, 0, 30, 0, 43605.00, 33655.00, '', 0, 0, NULL, NULL),
(599, 943, '2021-01-23', 590, 293, 0, 0, 0, 0, 0, 37303.95, 34403.95, '', 0, 0, NULL, NULL),
(600, 940, '2021-01-23', 590, 292, 0, 0, 0, 0, 0, 37265.70, 34965.70, '', 0, 0, NULL, NULL),
(601, 902, '2021-01-23', 590, 289, 0, 0, 0, 0, 0, 36895.95, 12745.95, '', 0, 0, NULL, NULL),
(602, 903, '2021-01-23', 590, 291, 0, 0, 0, 0, 0, 37099.95, 12949.95, '', 0, 0, NULL, NULL),
(603, 942, '2021-01-23', 590, 296, 0, 0, 0, 0, 0, 37775.70, 34975.70, '', 0, 0, NULL, NULL),
(604, 941, '2021-01-23', 590, 293, 0, 0, 0, 0, 0, 37418.70, 35768.70, '', 0, 0, NULL, NULL),
(605, 944, '2021-01-23', 590, 293, 0, 0, 0, 0, 0, 37367.70, 13217.70, '', 0, 0, NULL, NULL),
(606, 956, '2021-01-23', 590, 294, 0, 0, 0, 0, 0, 37456.95, 11306.95, '', 0, 0, NULL, NULL),
(607, 958, '2021-01-24', 690, 340, 0, 0, 0, 30, 0, 43426.50, 37276.50, '', 0, 0, NULL, NULL),
(608, 963, '2021-01-24', 590, 293, 0, 0, 0, 0, 0, 37405.95, 34705.95, '', 0, 0, NULL, NULL),
(609, 957, '2021-01-24', 590, 293, 0, 0, 0, 0, 0, 37316.70, 34816.70, '', 0, 0, NULL, NULL),
(610, 959, '2021-01-24', 580, 287, 0, 0, 0, 0, 0, 36623.10, 33523.10, '', 0, 0, NULL, NULL),
(611, 962, '2021-01-24', 690, 342, 0, 0, 0, 0, 0, 43643.25, 40043.25, '', 0, 0, NULL, NULL),
(612, 960, '2021-01-24', 590, 291, 0, 0, 0, 30, 0, 37074.45, 27674.45, '', 0, 0, NULL, NULL),
(613, 873, '2021-01-24', 690, 338, 0, 0, 0, 0, 0, 43146.00, 23766.00, '', 0, 0, NULL, NULL),
(614, 874, '2021-01-24', 690, 344, 0, 1, 0, 30, 0, 43898.25, 20648.25, '', 0, 0, NULL, NULL),
(615, 945, '2021-01-24', 590, 293, 0, 0, 0, 0, 0, 37303.95, 13153.95, '', 0, 0, NULL, NULL),
(616, 968, '2021-01-24', 590, 291, 0, 0, 0, 30, 0, 37112.70, 33962.70, '', 0, 0, NULL, NULL),
(617, 971, '2021-01-24', 590, 292, 0, 0, 0, 0, 0, 37214.70, 34914.70, '', 0, 0, NULL, NULL),
(618, 961, '2021-01-24', 590, 292, 0, 0, 0, 0, 0, 37265.70, 31965.70, '', 0, 0, NULL, NULL),
(619, 124, '2020-12-09', 500, 245, 0, 0, 0, 30, 0, 26972.00, 222.00, '', 0, 0, NULL, NULL),
(620, 126, '2021-01-09', 690, 337, 0, 1, 0, 30, 0, 37147.00, 9497.00, '', 0, 0, NULL, NULL),
(621, 877, '2020-12-21', 590, 289, 0, 0, 0, 0, 0, 36793.95, 34493.95, '', 0, 0, NULL, NULL),
(622, 936, '2020-12-22', 590, 293, 0, 0, 0, 0, 0, 37393.20, 34943.20, '', 0, 0, NULL, NULL),
(623, 973, '2021-01-25', 590, 293, 0, 0, 0, 0, 0, 37316.70, 17566.70, '', 0, 0, NULL, NULL),
(624, 974, '2021-01-25', 590, 293, 0, 0, 0, 0, 0, 37380.45, 17630.45, '', 0, 0, NULL, NULL),
(625, 972, '2021-01-25', 590, 290, 0, 0, 0, 0, 0, 36985.20, 17335.20, '', 0, 0, NULL, NULL),
(626, 983, '2021-01-25', 590, 394, 0, 0, 0, 0, 0, 50181.45, 47781.45, '', 0, 0, NULL, NULL),
(627, 967, '2021-01-25', 590, 292, 0, 0, 0, 0, 0, 37291.20, 14641.20, '', 0, 0, NULL, NULL),
(628, 985, '2021-01-25', 590, 293, 0, 0, 0, 30, 0, 37418.70, 35468.70, '', 0, 0, NULL, NULL),
(629, 975, '2021-01-25', 590, 292, 0, 0, 0, 0, 0, 37227.45, 17577.45, '', 0, 0, NULL, NULL),
(630, 970, '2021-01-25', 690, 341, 0, 0, 0, 0, 0, 43477.50, 41177.50, '', 0, 0, NULL, NULL),
(631, 964, '2021-01-25', 590, 285, 0, 0, 0, 0, 0, 36385.95, 10235.95, '', 0, 0, NULL, NULL),
(632, 965, '2021-01-25', 590, 290, 0, 0, 0, 0, 0, 37023.45, 15873.45, '', 0, 0, NULL, NULL),
(633, 980, '2021-01-25', 590, 291, 0, 0, 0, 0, 0, 37163.70, 13013.70, '', 0, 0, NULL, NULL),
(634, 966, '2021-01-25', 590, 294, 0, 0, 0, 0, 0, 37495.20, 14345.20, '', 0, 0, NULL, NULL),
(635, 969, '2021-01-25', 590, 291, 0, 0, 0, 0, 0, 37163.70, 35513.70, '', 0, 0, NULL, NULL),
(636, 982, '2021-01-25', 690, 343, 0, 0, 0, 0, 0, 43732.50, 42082.50, '', 0, 0, NULL, NULL),
(637, 984, '2021-01-25', 590, 292, 0, 0, 0, 0, 0, 37214.70, 34914.70, '', 0, 0, NULL, NULL),
(638, 981, '2021-01-25', 590, 292, 0, 0, 0, 0, 0, 37252.95, 35602.95, '', 0, 0, NULL, NULL),
(639, 989, '2021-01-25', 590, 294, 0, 0, 0, 0, 0, 37482.45, 35182.45, '', 0, 0, NULL, NULL),
(640, 952, '2021-01-25', 675, 333, 0, 1, 0, 30, 0, 42519.97, 39069.97, '', 0, 0, NULL, NULL),
(641, 951, '2021-01-25', 590, 291, 0, 1, 0, 30, 0, 37150.95, 33075.95, '', 0, 0, NULL, NULL),
(642, 954, '2021-01-25', 680, 335, 0, 1, 0, 30, 0, 42809.40, 39359.40, '', 0, 0, NULL, NULL),
(643, 950, '2021-01-25', 580, 285, 0, 1, 0, 30, 0, 36419.10, 33069.10, '', 0, 0, NULL, NULL),
(644, 991, '2021-01-25', 500, 248, 0, 0, 0, 30, 0, 31620.00, 4270.00, '', 0, 0, NULL, NULL),
(645, 953, '2021-01-25', 680, 336, 0, 0, 0, 0, 0, 42847.65, 41197.65, '', 0, 0, NULL, NULL),
(646, 992, '2021-01-25', 590, 289, 0, 0, 0, 30, 0, 36946.95, 9896.95, '', 0, 0, NULL, NULL),
(647, 990, '2021-01-25', 500, 247, 0, 0, 0, 30, 0, 31543.50, 4193.50, '', 0, 0, NULL, NULL),
(648, 995, '2021-01-25', 690, 344, 0, 0, 0, 0, 0, 43809.00, 17659.00, '', 0, 0, NULL, NULL),
(649, 988, '2021-01-27', 590, 291, 0, 0, 0, 0, 0, 37074.45, 29774.45, '', 0, 0, NULL, NULL),
(650, 1001, '2021-01-27', 690, 342, 0, 0, 0, 0, 0, 43579.50, 42529.50, '', 0, 0, NULL, NULL),
(651, 987, '2021-01-27', 590, 291, 0, 0, 0, 0, 0, 37163.70, 34863.70, '', 0, 0, NULL, NULL),
(652, 986, '2021-01-27', 580, 287, 0, 0, 0, 30, 0, 36597.60, 34647.60, '', 0, 0, NULL, NULL),
(653, 1005, '2021-01-27', 590, 293, 0, 0, 0, 0, 0, 37380.45, 34930.45, '', 0, 0, NULL, NULL),
(654, 976, '2021-01-27', 590, 292, 0, 0, 0, 0, 0, 37214.70, 13064.70, '', 0, 0, NULL, NULL),
(655, 1006, '2021-01-27', 590, 294, 0, 0, 0, 0, 0, 37495.20, 35195.20, '', 0, 0, NULL, NULL),
(656, 1000, '2021-01-27', 590, 290, 0, 0, 0, 30, 0, 37048.95, 33548.95, '', 0, 0, NULL, NULL),
(657, 1012, '2021-01-27', 580, 289, 0, 0, 0, 0, 0, 36801.60, 10651.60, '', 0, 0, NULL, NULL),
(658, 1002, '2021-01-27', 590, 292, 0, 0, 0, 0, 0, 37291.20, 36841.20, '', 0, 0, NULL, NULL),
(659, 1009, '2021-01-27', 590, 294, 0, 0, 0, 0, 0, 37431.45, 11281.45, '', 0, 0, NULL, NULL),
(660, 996, '2021-01-27', 590, 292, 0, 0, 0, 30, 0, 37316.70, 10566.70, '', 0, 0, NULL, NULL),
(661, 993, '2021-01-27', 680, 338, 0, 0, 0, 30, 0, 43140.90, 41040.90, '', 0, 0, NULL, NULL),
(662, 948, '2021-01-27', 590, 291, 0, 0, 0, 0, 0, 37087.20, 33637.20, '', 0, 0, NULL, NULL),
(663, 949, '2021-01-27', 680, 335, 0, 0, 0, 30, 0, 42745.65, 40045.65, '', 0, 0, NULL, NULL),
(664, 1, '2020-12-05', 500, 242, 0, 5, 0, 30, 0, 27225.00, -14825.00, 'NULL', 0, 0, NULL, NULL),
(665, 2, '2020-12-05', 500, 245, 0, 1, 0, 30, 0, 27005.00, -645.00, 'NULL', 0, 0, NULL, NULL),
(666, 978, '2021-01-28', 680, 337, 0, 0, 0, 0, 0, 42924.15, 18274.15, '', 0, 0, NULL, NULL),
(667, 979, '2021-01-28', 680, 335, 0, 0, 0, 0, 0, 42745.65, 18595.65, '', 0, 0, NULL, NULL),
(668, 1003, '2021-01-28', 590, 291, 0, 0, 0, 30, 0, 37150.95, 34550.95, '', 0, 0, NULL, NULL),
(669, 1010, '2021-01-28', 590, 293, 0, 0, 0, 0, 0, 37405.95, 13255.95, '', 0, 0, NULL, NULL),
(670, 1011, '2021-01-28', 590, 291, 0, 0, 0, 0, 0, 37150.95, 13000.95, '', 0, 0, NULL, NULL),
(671, 1007, '2021-01-28', 590, 291, 0, 0, 0, 0, 0, 37087.20, 35137.20, '', 0, 0, NULL, NULL),
(672, 999, '2021-01-28', 590, 295, 0, 0, 0, 30, 0, 37685.17, 34635.17, '', 0, 0, NULL, NULL),
(673, 1008, '2021-01-28', 690, 335, 0, 0, 0, 0, 0, 42674.25, 39924.25, '', 0, 0, NULL, NULL),
(674, 1004, '2021-01-28', 590, 291, 0, 0, 0, 0, 0, 37061.70, 34761.70, '', 0, 0, NULL, NULL),
(675, 997, '2021-01-28', 590, 293, 0, 0, 0, 0, 0, 37354.95, 18704.95, '', 0, 0, NULL, NULL),
(676, 998, '2021-01-28', 590, 293, 0, 0, 0, 0, 0, 37316.70, 18666.70, '', 0, 0, NULL, NULL),
(677, 1020, '2021-01-28', 590, 293, 0, 0, 0, 0, 0, 37418.70, 35118.70, '', 0, 0, NULL, NULL),
(678, 1016, '2021-01-28', 590, 294, 0, 0, 0, 0, 0, 37495.20, 35845.20, '', 0, 0, NULL, NULL),
(679, 994, '2021-01-28', 580, 286, 0, 0, 0, 0, 0, 36470.10, 32320.10, 'PEG2', 0, 0, NULL, NULL),
(680, 1023, '2021-01-27', 590, 292, 0, 0, 0, 0, 0, 37240.20, 11090.20, '', 0, 0, NULL, NULL),
(681, 1013, '2021-01-30', 590, 290, 0, 0, 0, 0, 0, 36946.95, 35296.95, '', 0, 0, NULL, NULL),
(682, 1014, '2021-01-30', 690, 339, 0, 0, 0, 0, 0, 43273.50, 41623.50, '', 0, 0, NULL, NULL),
(683, 977, '2021-01-30', 590, 292, 0, 0, 0, 0, 0, 37252.95, 13102.95, '', 0, 0, NULL, NULL),
(684, 1015, '2021-01-30', 590, 292, 0, 0, 0, 0, 0, 37265.70, 34965.70, '', 0, 0, NULL, NULL),
(685, 1030, '2021-02-01', 590, 290, 0, 0, 0, 30, 0, 37023.45, 33523.45, 'PGE2', 0, 0, NULL, NULL),
(686, 1031, '2021-02-01', 590, 290, 0, 0, 0, 30, 0, 37023.45, 34473.45, 'PGE2', 0, 0, NULL, NULL),
(687, 1029, '2021-02-01', 590, 292, 0, 1, 0, 30, 0, 37342.20, 33892.20, 'PGE2', 0, 0, NULL, NULL),
(688, 1025, '2021-02-01', 680, 336, 0, 1, 0, 30, 0, 42860.40, 39710.40, 'PGE2', 0, 0, NULL, NULL),
(689, 1028, '2021-02-01', 680, 336, 0, 1, 0, 30, 0, 42860.40, 38460.40, 'PGE2', 0, 0, NULL, NULL),
(690, 1024, '2021-02-01', 580, 286, 0, 1, 0, 30, 0, 36584.85, 33134.85, 'PGE2', 0, 0, NULL, NULL),
(691, 1041, '2021-02-01', 585, 292, 0, 0, 0, 30, 0, 37244.03, 33194.03, 'PGE1', 0, 0, NULL, NULL),
(692, 1048, '2021-02-01', 680, 338, 0, 0, 0, 30, 0, 43153.65, 41203.65, 'PGE1', 0, 0, NULL, NULL),
(693, 1047, '2021-02-01', 680, 337, 0, 0, 0, 30, 0, 43014.68, 40764.68, '', 0, 0, NULL, NULL),
(694, 1049, '2021-02-01', 680, 337, 0, 0, 0, 30, 0, 42924.15, 40874.15, 'PGE1', 0, 0, NULL, NULL),
(695, 1039, '2021-02-01', 690, 343, 0, 0, 0, 0, 0, 43668.75, 40818.75, 'PGE1', 0, 0, NULL, NULL),
(696, 1043, '2021-02-01', 580, 287, 0, 0, 0, 30, 0, 36584.85, 35534.85, 'PGE1', 0, 0, NULL, NULL),
(697, 1027, '2021-02-01', 590, 292, 0, 0, 0, 30, 0, 37291.20, 33741.20, 'PGE1', 0, 0, NULL, NULL),
(698, 1060, '2021-02-02', 590, 292, 0, 0, 0, 30, 0, 37227.45, 34327.45, 'FSD', 0, 0, NULL, NULL),
(699, 1046, '2021-02-02', 580, 286, 0, 0, 0, 30, 0, 36521.10, 33571.10, 'PGE1', 0, 0, NULL, NULL),
(700, 1045, '2021-02-02', 580, 286, 0, 1, 0, 30, 0, 36482.85, 33032.85, 'PGE1', 0, 0, NULL, NULL),
(701, 1044, '2021-02-02', 580, 286, 0, 1, 0, 30, 0, 36572.10, 32222.10, 'PGE1', 0, 0, NULL, NULL),
(702, 1038, '2021-02-02', 590, 292, 0, 1, 0, 30, 0, 37329.45, 33379.45, 'PGE1', 0, 0, NULL, NULL),
(703, 1040, '2021-02-02', 580, 288, 0, 0, 0, 30, 0, 36750.60, 33400.60, 'PGE1', 0, 0, NULL, NULL),
(704, 1056, '2021-02-02', 580, 287, 0, 0, 0, 0, 0, 36584.85, 34134.85, 'PGE1', 0, 0, NULL, NULL),
(705, 1037, '2021-02-02', 675, 335, 0, 1, 0, 30, 0, 42813.23, 39113.23, 'PGE1', 0, 0, NULL, NULL),
(706, 1036, '2021-02-02', 680, 337, 0, 1, 0, 30, 0, 43077.15, 41427.15, 'PGE1', 0, 0, NULL, NULL),
(707, 1062, '2021-02-02', 580, 287, 0, 0, 0, 30, 0, 36648.60, 32298.60, 'PGE1', 0, 0, NULL, NULL),
(708, 1054, '2021-02-02', 590, 292, 0, 1, 0, 30, 0, 37329.45, 34179.45, 'PGE2', 0, 0, NULL, NULL),
(709, 1059, '2021-02-02', 580, 287, 0, 1, 0, 30, 0, 36737.85, 32037.85, 'PGE2', 0, 0, NULL, NULL),
(710, 1057, '2021-02-02', 680, 335, 0, 1, 0, 30, 0, 42783.90, 37833.90, 'PGE2', 0, 0, NULL, NULL),
(711, 1055, '2021-02-02', 590, 290, 0, 1, 0, 30, 0, 37074.45, 33986.45, 'PGE2', 0, 0, NULL, NULL),
(712, 1051, '2021-02-02', 600, 296, 0, 1, 0, 30, 0, 37844.55, 33494.55, 'PGE2', 0, 0, NULL, NULL),
(713, 1053, '2021-02-02', 590, 290, 0, 1, 0, 30, 0, 37048.95, 32898.95, 'PGE2', 0, 0, NULL, NULL),
(714, 1017, '2021-01-31', 590, 292, 0, 0, 0, 0, 0, 37252.95, 35602.95, '', 0, 0, NULL, NULL),
(715, 1022, '2021-01-31', 590, 293, 0, 0, 0, 30, 0, 37444.20, 34144.20, '', 0, 0, NULL, NULL),
(716, 1018, '2021-01-31', 590, 289, 0, 0, 0, 0, 0, 36832.20, 14682.20, '', 0, 0, NULL, NULL),
(717, 1019, '2021-01-31', 590, 291, 0, 0, 0, 0, 0, 37048.95, 12898.95, '', 0, 0, NULL, NULL),
(718, 1021, '2021-01-31', 590, 294, 0, 0, 0, 0, 0, 37546.20, 35396.20, '', 0, 0, NULL, NULL),
(719, 1050, '2021-02-03', 680, 336, 0, 0, 0, 30, 0, 42912.67, 39362.67, 'PGE2', 0, 0, NULL, NULL),
(720, 1052, '2021-02-03', 590, 292, 0, 1, 0, 30, 0, 37278.45, 33228.45, 'PGE2', 0, 0, NULL, NULL),
(721, 1063, '2021-02-03', 580, 287, 0, 0, 0, 0, 0, 36597.60, 34047.60, 'PGE1', 0, 0, NULL, NULL),
(722, 1042, '2021-01-31', 500, 249, 0, 0, 0, 0, 0, 31734.75, 5584.75, 'PGE1', 0, 0, NULL, NULL),
(723, 1026, '2021-01-31', 680, 336, 0, 0, 0, 30, 0, 42860.40, 39660.40, 'PGE1', 0, 0, NULL, NULL),
(724, 1035, '2021-01-31', 680, 337, 0, 0, 0, 0, 0, 42975.15, 40675.15, 'PGE1', 0, 0, NULL, NULL),
(725, 1033, '2021-01-31', 680, 339, 0, 0, 0, 30, 0, 43242.90, 40392.90, 'PGE1', 0, 0, NULL, NULL),
(726, 1034, '2021-01-31', 590, 290, 0, 0, 0, 30, 0, 37036.20, 33836.20, 'PGE1', 0, 0, NULL, NULL),
(727, 1032, '2021-01-31', 680, 335, 0, 0, 0, 30, 0, 42732.90, 40782.90, 'PGE1', 0, 0, NULL, NULL),
(728, 1073, '2021-02-04', 680, 332, 0, 1, 0, 30, 0, 39099.30, 34449.30, '', 0, 0, NULL, NULL),
(729, 1061, '2021-02-04', 680, 337, 0, 0, 0, 30, 0, 42987.90, 39337.90, 'FSD', 0, 0, NULL, NULL),
(730, 1071, '2021-02-05', 580, 286, 0, 0, 0, 30, 0, 33656.70, 28206.70, 'PGE1', 0, 0, NULL, NULL),
(731, 1068, '2021-02-05', 680, 333, 0, 0, 0, 0, 0, 39169.80, 36719.80, 'PGE1', 0, 0, NULL, NULL),
(732, 1084, '2021-02-05', 680, 337, 0, 0, 0, 0, 0, 39557.55, 37257.55, 'PGE1', 0, 0, NULL, NULL),
(733, 1070, '2021-02-05', 590, 289, 0, 0, 0, 0, 0, 33943.40, 31493.40, 'PGE1', 0, 0, NULL, NULL),
(734, 1072, '2021-02-05', 590, 290, 0, 0, 0, 0, 0, 34107.90, 31657.90, 'PGE1', 0, 0, NULL, NULL),
(735, 1066, '2021-02-05', 590, 291, 0, 0, 0, 0, 0, 34213.65, 32563.65, 'PGE1', 0, 0, NULL, NULL),
(736, 1064, '2021-02-05', 590, 291, 0, 0, 0, 0, 0, 34201.90, 32551.90, 'PGE1', 0, 0, NULL, NULL),
(737, 1067, '2021-02-05', 585, 288, 0, 0, 0, 0, 0, 33876.43, 32226.43, 'PGE1', 0, 0, NULL, NULL),
(738, 1074, '2021-02-05', 680, 335, 0, 0, 0, 0, 0, 39346.05, 37696.05, 'PGE1', 0, 0, NULL, NULL),
(739, 1075, '2021-02-05', 680, 336, 0, 0, 0, 0, 0, 39463.55, 37813.55, 'PGE1', 0, 0, NULL, NULL),
(740, 1081, '2021-02-05', 585, 290, 0, 0, 0, 0, 0, 34005.68, 32355.68, 'PGE2', 0, 0, NULL, NULL),
(741, 1101, '2021-02-06', 590, 290, 0, 0, 0, 30, 0, 34107.90, 7057.90, 'PGE1', 0, 0, NULL, NULL),
(742, 1079, '2021-02-06', 675, 334, 0, 0, 0, 30, 0, 39233.25, 36883.25, 'PGE1', 0, 0, NULL, NULL),
(743, 1087, '2021-02-06', 580, 286, 0, 0, 0, 30, 0, 33668.45, 31118.45, 'PGE1', 0, 0, NULL, NULL),
(744, 1090, '2021-02-06', 580, 287, 0, 0, 0, 30, 0, 33703.70, 31753.70, 'PGE1', 0, 0, NULL, NULL),
(745, 1097, '2021-02-06', 680, 336, 0, 0, 0, 30, 0, 39499.97, 37249.97, 'PGE1', 0, 0, NULL, NULL),
(746, 1099, '2021-02-06', 600, 298, 0, 0, 0, 0, 0, 34993.85, 34653.85, 'PGE1', 0, 0, NULL, NULL),
(747, 1088, '2021-02-06', 590, 292, 0, 0, 0, 0, 0, 34284.15, 32634.15, 'PGE1', 0, 0, NULL, NULL),
(748, 1109, '2021-02-06', 680, 339, 0, 0, 0, 0, 0, 39780.80, 38130.80, 'PGE2', 0, 0, NULL, NULL),
(749, 1098, '2021-02-06', 680, 336, 0, 0, 0, 30, 0, 39487.05, 37537.05, 'PGE1', 0, 0, NULL, NULL),
(750, 1086, '2021-02-06', 590, 289, 0, 0, 0, 30, 0, 33992.75, 31742.75, 'PGE2', 0, 0, NULL, NULL),
(751, 1065, '2021-02-06', 590, 291, 0, 0, 0, 30, 0, 34237.15, 30187.15, 'PGE2', 0, 0, NULL, NULL),
(752, 1077, '2021-02-06', 690, 341, 0, 1, 0, 30, 0, 40102.75, 35152.75, 'PGE2', 0, 0, NULL, NULL),
(753, 1111, '2021-02-07', 500, 248, 0, 0, 0, 0, 0, 29187.00, 3037.00, 'PGE1', 0, 0, NULL, NULL),
(754, 1102, '2021-02-07', 590, 291, 0, 0, 0, 30, 0, 34260.65, 32310.65, 'PGE1', 0, 0, NULL, NULL),
(755, 1110, '2021-02-07', 580, 289, 0, 0, 0, 0, 0, 33926.95, 31276.95, 'PGE1', 0, 0, NULL, NULL),
(756, 1107, '2021-02-07', 580, 288, 0, 0, 0, 30, 0, 33879.95, 31629.95, 'PGE1', 0, 0, NULL, NULL),
(757, 1089, '2021-02-07', 600, 297, 0, 0, 0, 0, 0, 34841.10, 33191.10, 'PGE1', 0, 0, NULL, NULL),
(758, 1104, '2021-02-07', 680, 338, 0, 0, 0, 0, 0, 39722.05, 38072.05, 'PGE1', 0, 0, NULL, NULL),
(759, 1108, '2021-02-07', 680, 336, 0, 0, 0, 0, 0, 39463.55, 37813.55, 'PGE1', 0, 0, NULL, NULL),
(760, 1085, '2021-02-07', 680, 336, 0, 0, 0, 0, 0, 39510.55, 37860.55, 'PGE2', 0, 0, NULL, NULL),
(761, 1083, '2021-02-07', 580, 286, 0, 0, 0, 30, 0, 33597.95, 31647.95, 'PGE2', 0, 0, NULL, NULL),
(762, 1078, '2021-02-07', 580, 286, 0, 0, 0, 0, 0, 33527.45, 29677.45, 'PGE2', 0, 0, NULL, NULL),
(763, 1080, '2021-02-07', 680, 335, 0, 0, 0, 30, 0, 39416.55, 36816.55, 'PGE2', 0, 0, NULL, NULL),
(764, 1082, '2021-02-07', 680, 339, 0, 0, 0, 0, 0, 39886.55, 37586.55, 'PGE2', 0, 0, NULL, NULL),
(765, 1103, '2021-02-08', 590, 290, 0, 0, 0, 30, 0, 34143.15, 32193.15, 'PGE1', 0, 0, NULL, NULL),
(766, 1106, '2021-02-08', 590, 289, 0, 0, 0, 30, 0, 34013.90, 32063.90, 'PGE1', 0, 0, NULL, NULL),
(767, 1100, '2021-02-08', 590, 292, 0, 0, 0, 0, 0, 34284.15, 8134.15, 'PGE1', 0, 0, NULL, NULL),
(768, 1076, '2021-02-08', 580, 286, 0, 0, 0, 0, 0, 33550.95, 31900.95, 'PGE2', 0, 0, NULL, NULL),
(769, 1069, '2021-02-08', 590, 290, 0, 0, 0, 30, 0, 34154.90, 31704.90, 'PGE2', 0, 0, NULL, NULL),
(770, 1096, '2021-02-08', 580, 287, 0, 0, 0, 0, 0, 33727.20, 32077.20, 'PGE2', 0, 0, NULL, NULL),
(771, 1095, '2021-02-08', 590, 292, 0, 0, 0, 0, 0, 34366.40, 32716.40, 'PGE2', 0, 0, NULL, NULL),
(772, 1091, '2021-02-08', 580, 288, 0, 0, 0, 0, 0, 33785.95, 32035.95, 'PGE2', 0, 0, NULL, NULL),
(773, 1092, '2021-02-09', 680, 337, 0, 0, 0, 30, 0, 39592.80, 37092.80, 'PGE2', 0, 0, NULL, NULL),
(774, 1093, '2021-02-09', 590, 290, 0, 2, 0, 30, 0, 34260.65, 27810.65, 'PGE2', 0, 0, NULL, NULL),
(775, 1094, '2021-02-09', 590, 292, 0, 0, 0, 30, 0, 34295.90, 32345.90, 'PGE2', 0, 0, NULL, NULL);

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
(4, '2020_10_20_101602_create_sessions_table', 1),
(5, '2020_10_21_10155_create_states_table', 1),
(6, '2020_10_21_104417_create_companies_table', 1),
(7, '2020_10_21_114748_create_item_categories_table', 1),
(8, '2020_10_21_180025_create_places_table', 1),
(9, '2020_10_22_074434_create_consignees_table', 1),
(10, '2020_10_22_082235_create_banks_table', 1),
(11, '2020_10_22_082547_create_employees_table', 1),
(12, '2020_10_22_101738_create_items_table', 1),
(13, '2020_10_22_102514_create_trucktypes_table', 1),
(14, '2020_10_22_102633_create_truckowners_table', 1),
(15, '2020_10_22_102721_create_trucks_table', 1),
(16, '2020_10_22_102812_create_income_expenses_heads_table', 1),
(17, '2020_10_22_102843_create_petrolpumps_table', 1),
(18, '2020_10_22_175100_create_consignors_table', 1),
(19, '2020_10_25_115142_create_loading_entries_table', 1),
(21, '2021_02_11_084404_create_suppliers_table', 2),
(22, '2021_02_11_112349_create_godowns_table', 3),
(24, '2021_02_11_132231_create_purchase_entries_table', 4),
(25, '2021_02_12_054553_create_purchase_entry_details_table', 5),
(26, '2021_02_12_054618_create_hsn_and_serialnumbers_table', 6),
(27, '2021_02_13_075015_create_tyre_mappings_table', 7),
(30, '2021_02_15_082531_create_tyre_opening_balances_table', 8),
(31, '2021_02_15_095002_create_battery_opening_balances_table', 9),
(32, '2021_03_03_063327_create_dashboard_pin_sets_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `petrolpumps`
--

CREATE TABLE `petrolpumps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `petrol_pump_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_id` bigint(20) UNSIGNED DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alter_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gst_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pan_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cst_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rsl_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_person_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_person_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_person_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diesel_opening_bal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diesel_opening_bal_date` date DEFAULT NULL,
  `petrol_opening_bal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `petrol_opening_bal_date` date DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `ipaddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createdby` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `petrolpumps`
--

INSERT INTO `petrolpumps` (`id`, `petrol_pump_name`, `address`, `district`, `state_id`, `mobile`, `alter_mobile`, `email`, `gst_no`, `pan_no`, `cst_no`, `rsl_no`, `contact_person_name`, `designation`, `contact_person_mobile`, `contact_person_email`, `diesel_opening_bal`, `diesel_opening_bal_date`, `petrol_opening_bal`, `petrol_opening_bal_date`, `type`, `status`, `ipaddress`, `createdby`, `created_at`, `updated_at`) VALUES
(2, 'BPCL Garhwa', 'jh', 'jh', 7, '8871181890', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Other', '1', '122.168.78.131', 2, '2020-11-02 11:55:21', '2020-11-02 12:10:21'),
(3, 'BPCL SARAIPALI', NULL, 'MAHASAMUND', 2, '77708440074', '9165506550', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Other', '1', '122.168.104.123', 2, '2020-11-03 07:54:28', '2020-11-03 07:54:28'),
(4, 'INDIAN OIL AKALTRA', 'SHARM SERVICE SATATION MINI MATA CHOWK, TAROD AKALTARA', 'JANJGIR CHAMPA', 2, '9827444019', NULL, 'SHARMASERVIESTATION45@GMAIL.COM', '22AUOPS4863K1Z0', 'AUOPS4863K', NULL, NULL, 'RAJAT SHARMA', NULL, '9589039589', NULL, NULL, NULL, NULL, NULL, 'Other', '1', '122.168.104.123', 2, '2020-11-03 08:02:02', '2020-11-03 08:06:36'),
(5, 'BPCL GUMLA', 'NAVAGARH, PATRATOLI ,  GUMLA JHARKHAND', 'RANCHI', 7, '9471184743', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Other', '1', '122.168.104.123', 2, '2020-11-03 08:18:09', '2020-11-03 08:29:27'),
(6, 'SR PUMP GUMLA', 'GUMLA JHARKHAND', 'RANCHI', 7, '9155383827', NULL, NULL, NULL, 'APFPS4454JIZU', NULL, NULL, 'SUNIL KUMAR SAH', NULL, '9155383827', NULL, NULL, NULL, NULL, NULL, 'Other', '1', '122.168.71.90', 2, '2020-11-03 08:34:55', '2020-11-07 06:53:46'),
(8, 'BPCL AKALTARA', NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Other', '1', NULL, NULL, '2020-12-11 06:11:40', '2020-12-11 06:11:40'),
(9, 'INDION OIL SARAIPALI', NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Other', '1', NULL, NULL, '2020-12-16 13:20:37', '2020-12-16 13:20:37'),
(10, 'BPCL BAGBAHARA', NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Self', '1', NULL, NULL, '2021-01-07 11:25:20', '2021-01-07 11:25:20'),
(11, 'BPCL BASNA', NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Other', '1', NULL, NULL, '2021-01-12 11:43:31', '2021-01-12 11:43:31'),
(12, 'INDIAN OIL AKALTRA 2', NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Other', '1', NULL, NULL, '2021-01-27 09:42:45', '2021-01-27 09:42:45');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `placename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `session_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `ipaddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createdby` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `placename`, `city_code`, `district_id`, `session_id`, `status`, `ipaddress`, `createdby`, `created_at`, `updated_at`) VALUES
(1, 'Raipur', '04', NULL, 1, '1', '127.0.0.1', 1, '2020-10-26 03:36:04', '2020-10-26 03:36:04'),
(2, 'Raigarh', '13', NULL, 1, '1', '49.36.32.209', 1, '2020-10-26 10:05:19', '2020-10-26 10:11:34'),
(3, 'Basna', NULL, NULL, 1, '1', '122.168.78.131', 2, '2020-11-02 11:34:34', '2020-11-02 11:34:34'),
(4, 'Gumla', NULL, NULL, 1, '1', '122.168.78.131', 2, '2020-11-02 11:34:49', '2020-11-02 11:34:49'),
(5, 'Raipur', NULL, NULL, 1, '1', '49.36.46.206', 4, '2020-11-03 13:16:32', '2020-11-03 13:16:32'),
(6, 'saraipali', NULL, NULL, NULL, '1', NULL, NULL, '2020-12-09 03:08:30', '2020-12-09 03:08:30'),
(7, 'AKALTARA', NULL, NULL, NULL, '1', NULL, NULL, '2020-12-11 06:07:28', '2020-12-11 06:07:28'),
(8, 'GARWA', NULL, NULL, NULL, '1', NULL, NULL, '2020-12-11 06:07:54', '2020-12-11 06:07:54'),
(9, 'BAGBAHARA', NULL, NULL, NULL, '1', NULL, NULL, '2021-01-07 08:31:01', '2021-01-07 08:31:01'),
(10, 'GABOD', NULL, NULL, NULL, '1', NULL, NULL, '2021-01-07 11:20:17', '2021-01-07 11:20:17'),
(11, 'KACHARDIH', NULL, NULL, NULL, '1', NULL, NULL, '2021-01-07 12:39:02', '2021-01-07 12:39:02'),
(12, 'PARSULI', NULL, NULL, NULL, '1', NULL, NULL, '2021-01-07 12:39:13', '2021-01-07 12:39:13'),
(13, 'MUNGASER', NULL, NULL, NULL, '1', NULL, NULL, '2021-01-07 12:40:19', '2021-01-07 12:40:19'),
(14, 'sukhari dabari', NULL, NULL, NULL, '1', NULL, NULL, '2021-01-07 13:03:04', '2021-01-07 13:03:04'),
(15, 'Devri', NULL, NULL, NULL, '1', NULL, NULL, '2021-01-07 13:08:18', '2021-01-07 13:08:18'),
(16, 'NARRA', NULL, NULL, NULL, '1', NULL, NULL, '2021-01-07 13:14:32', '2021-01-07 13:14:32'),
(17, 'BAKMA', NULL, NULL, NULL, '1', NULL, NULL, '2021-01-07 13:29:43', '2021-01-07 13:29:43'),
(18, 'BUDELI', NULL, NULL, NULL, '1', NULL, NULL, '2021-01-07 13:30:57', '2021-01-07 13:30:57'),
(19, 'charoda', NULL, NULL, NULL, '1', NULL, NULL, '2021-01-08 06:25:30', '2021-01-08 06:25:30'),
(20, 'Bhurkoni', NULL, NULL, NULL, '1', NULL, NULL, '2021-01-08 06:38:29', '2021-01-08 06:38:29'),
(21, 'GANCHAR', NULL, NULL, NULL, '1', NULL, NULL, '2021-01-09 11:38:15', '2021-01-09 11:38:15'),
(22, 'SAMHAR', NULL, NULL, NULL, '1', NULL, NULL, '2021-01-09 11:46:32', '2021-01-09 11:46:32'),
(23, 'KHALLARI', NULL, NULL, NULL, '1', NULL, NULL, '2021-01-09 12:15:50', '2021-01-09 12:15:50'),
(24, 'GANGAR', NULL, NULL, NULL, '1', NULL, NULL, '2021-01-10 06:26:16', '2021-01-10 06:26:16'),
(25, 'RAJIM', NULL, NULL, NULL, '1', NULL, NULL, '2021-01-10 13:57:48', '2021-01-10 13:57:48'),
(26, 'BELDIH', NULL, NULL, NULL, '1', NULL, NULL, '2021-01-11 05:47:22', '2021-01-11 05:47:22'),
(27, 'GHOCH', NULL, NULL, NULL, '1', NULL, NULL, '2021-01-11 06:05:24', '2021-01-11 06:05:24'),
(28, 'BIKONI', NULL, NULL, NULL, '1', NULL, NULL, '2021-01-11 06:07:34', '2021-01-11 06:07:34'),
(29, 'DARGAON', NULL, NULL, NULL, '1', NULL, NULL, '2021-01-11 06:08:51', '2021-01-11 06:08:51'),
(30, 'MAHASAMUND', NULL, NULL, NULL, '1', NULL, NULL, '2021-01-11 06:28:35', '2021-01-11 06:28:35'),
(31, 'BEMCHA', NULL, NULL, NULL, '1', NULL, NULL, '2021-01-11 06:40:41', '2021-01-11 06:40:41'),
(33, 'BELSONDA', NULL, NULL, NULL, '1', NULL, NULL, '2021-01-11 06:46:36', '2021-01-11 06:46:36'),
(34, 'SIRRIPATHARIMUDA', NULL, NULL, NULL, '1', NULL, NULL, '2021-01-11 06:48:44', '2021-01-11 06:48:44'),
(35, 'PATPARPALI', NULL, NULL, NULL, '1', NULL, NULL, '2021-01-11 06:54:22', '2021-01-11 06:54:22'),
(36, 'SARA', NULL, NULL, NULL, '1', NULL, NULL, '2021-01-11 11:33:48', '2021-01-11 11:33:48'),
(37, 'PITIYAAR', NULL, NULL, NULL, '1', NULL, NULL, '2021-01-11 11:59:46', '2021-01-11 11:59:46'),
(38, 'TUMGAON', NULL, NULL, NULL, '1', NULL, NULL, '2021-01-11 12:10:50', '2021-01-11 12:10:50'),
(39, 'SIRRI', NULL, NULL, NULL, '1', NULL, NULL, '2021-01-11 16:39:38', '2021-01-11 16:39:38'),
(40, 'LOHARGAON', NULL, NULL, NULL, '1', NULL, NULL, '2021-01-11 16:42:54', '2021-01-11 16:42:54'),
(41, 'KOMABAN', NULL, NULL, NULL, '1', NULL, NULL, '2021-01-11 17:07:53', '2021-01-11 17:07:53'),
(42, 'KHEMDA', NULL, NULL, NULL, '1', NULL, NULL, '2021-01-11 17:37:53', '2021-01-11 17:37:53'),
(43, 'kasekera', NULL, NULL, NULL, '1', NULL, NULL, '2021-01-16 12:44:57', '2021-01-16 12:44:57'),
(44, 'badhamuda', NULL, NULL, NULL, '1', NULL, NULL, '2021-01-16 12:51:14', '2021-01-16 12:51:14'),
(45, 'Motrapali', NULL, NULL, NULL, '1', NULL, NULL, '2021-01-16 13:17:42', '2021-01-16 13:17:42');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_entries`
--

CREATE TABLE `purchase_entries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supplier_name` int(11) NOT NULL,
  `bill_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiving_proof` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` double(8,2) DEFAULT 0.00,
  `purchase_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `godown` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchase_entries`
--

INSERT INTO `purchase_entries` (`id`, `supplier_name`, `bill_number`, `date`, `receiving_proof`, `discount`, `purchase_type`, `godown`, `created_at`, `updated_at`) VALUES
(4, 2, '1234', '2021-02-12', 'Challan', NULL, 'Credit', 1, NULL, NULL),
(5, 3, '4545', '2021-02-12', 'Challan', NULL, 'Cash', 1, NULL, NULL),
(6, 5, '10102', '2021-02-12', 'Challan', NULL, 'Cash', 1, NULL, NULL),
(8, 4, '12312', '2021-02-20', 'Challan', NULL, 'Cash', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_entry_details`
--

CREATE TABLE `purchase_entry_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `purchase_entry_id` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `unit` int(11) NOT NULL,
  `rate` double(8,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `gst` int(11) NOT NULL COMMENT '%',
  `gst_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_without_tax` double(8,2) NOT NULL,
  `total_amount` double(8,2) NOT NULL,
  `createdById` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchase_entry_details`
--

INSERT INTO `purchase_entry_details` (`id`, `purchase_entry_id`, `item`, `unit`, `rate`, `qty`, `gst`, `gst_type`, `total_without_tax`, `total_amount`, `createdById`, `created_at`, `updated_at`) VALUES
(2, 4, 7, 1, 200.00, 10, 12, 'Inclusive', 352.00, 400.00, NULL, NULL, NULL),
(3, 4, 9, 1, 100.00, 8, 12, 'Exclusive', 300.00, 336.00, NULL, NULL, NULL),
(4, 5, 8, 2, 400.00, 15, 12, 'Inclusive', 704.00, 800.00, NULL, NULL, NULL),
(5, 6, 11, 1, 800.00, 20, 12, 'Exclusive', 1600.00, 1792.00, NULL, NULL, NULL),
(8, 8, 7, 1, 100.00, 10, 12, 'Inclusive', 880.00, 1000.00, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rack_handlings`
--

CREATE TABLE `rack_handlings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vehicle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bag` int(11) DEFAULT NULL,
  `rate` double(8,2) DEFAULT NULL,
  `comm_amt` double(8,2) DEFAULT NULL,
  `gate_pass_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_amt` double(8,2) DEFAULT NULL,
  `payment_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rack_handlings`
--

INSERT INTO `rack_handlings` (`id`, `vehicle`, `bag`, `rate`, `comm_amt`, `gate_pass_number`, `payment_amt`, `payment_date`, `_token`, `created_at`, `updated_at`) VALUES
(1, '6', 100, 20.00, 10.00, '10A20', 1990.00, '08-01-2021', 'li5YnWDbBB5g2lSzhhdy4vLDCx9tsxNA23EvUsCV', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `ipaddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createdby` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `name`, `startdate`, `enddate`, `status`, `ipaddress`, `createdby`, `created_at`, `updated_at`) VALUES
(1, '2020-21', '2020-04-01', '2021-04-01', '1', '127.0.0.1', 1, '2020-10-26 03:35:25', '2020-10-26 03:35:25');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `statename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `session_id` bigint(20) UNSIGNED NOT NULL,
  `ipaddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createdby` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `statename`, `state_code`, `session_id`, `ipaddress`, `createdby`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Chhattisgarh', '22', 1, '49.36.32.209', 1, '1', '2020-10-26 03:35:53', '2020-10-26 10:07:34'),
(3, 'Punjab', '03', 1, '49.36.32.209', 1, '1', '2020-10-26 10:08:27', '2020-10-26 10:12:03'),
(4, 'Andhra Pradesh', '37', 1, '122.175.217.115', 1, '1', '2020-10-26 10:31:32', '2020-10-26 10:31:32'),
(5, 'Bihar', '10', 1, '122.175.217.115', 1, '1', '2020-10-26 10:31:49', '2020-10-26 10:31:49'),
(7, 'Jharkhand', '20', 1, '182.70.209.58', 1, '1', '2020-10-28 10:54:00', '2020-10-28 10:54:00'),
(8, 'AKALTARA', 'CHHATTISAGRH', 1, '171.61.11.1', 2, '1', '2020-11-07 08:44:45', '2020-11-07 08:44:45');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gst` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `opening_bal` double(8,2) NOT NULL,
  `opening_bal_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `mobile`, `gst`, `pan`, `city`, `address`, `opening_bal`, `opening_bal_date`, `created_at`, `updated_at`) VALUES
(2, 'tara', '9709809890', '890890', 'jhgkhkj8', 'kkhjk', 'jhkjh', 1000.00, '2021-02-20', NULL, NULL),
(3, 'krishna', '8999999877', '2039', 'pan9988890k', '48572', 'jfksjfkl', 12000.00, '2021-02-20', NULL, NULL),
(4, 'tara p', '9709809777', '890875', 'jhgkhkj875', 'raipur', 'sadsad', 1000.00, '2021-02-20', NULL, NULL),
(5, 'hitesh', '8999999000', '000dsakjh', '0kjkjk', 'kljlj', 'kljl980', 1200.00, '2021-02-20', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `truckowners`
--

CREATE TABLE `truckowners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `owner_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pan_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gst_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ac_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ifsc_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tds_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_pan_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_aadhar_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alter_ac_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alter_bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alter_branch_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alter_ifsc_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `ipaddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createdby` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `truckowners`
--

INSERT INTO `truckowners` (`id`, `owner_name`, `father_name`, `mobile`, `pan_no`, `address`, `owner_type`, `gst_no`, `state_code`, `ac_no`, `bank_name`, `branch_name`, `ifsc_code`, `document`, `tds_status`, `upload_pan_card`, `upload_aadhar_card`, `alter_ac_no`, `alter_bank_name`, `alter_branch_name`, `alter_ifsc_code`, `status`, `ipaddress`, `createdby`, `created_at`, `updated_at`) VALUES
(3, 'Tamanna Road Carriers', 'Atul Bagga', '8889155555', 'AAKFT6788N', 'RAIPUR', 'self', '22AAKFT6788N2ZA', '2', '36640200000122', 'BANK OF BARODA', 'BAGBAHARA', 'BARB0BAGBAH', NULL, 'NO', '', '', '', '', '', '', '1', NULL, 1, '2020-10-26 10:53:00', '2020-10-26 10:54:51'),
(4, 'AKASH GOYAL', NULL, '9669788884', 'AMZPG8700J', NULL, 'other', '0', '2', '36813748548', 'SBI', 'SARAIPALI', 'SBIN0009750', NULL, 'NO', '', '', '0', '0', '0', '0', '1', NULL, 2, '2020-10-28 08:32:36', '2020-11-02 11:29:00'),
(5, 'RAHAMUDDIN ANSARI', 'SULEMAN SHEKH', '7061134256', 'CGCPA6390R', 'JHARKHAND', 'other', '0', '7', '14272033248', 'JHARKHAND RAJYA GRAMIN BANK', 'RANKA', 'SBIN0RRVCGB', '202101080104061.jpeg', 'NO', '202101080104062.jpeg', '202101080104062.jpeg', NULL, NULL, NULL, NULL, '1', NULL, 1, '2020-10-28 10:31:55', '2021-01-08 13:04:06'),
(6, 'DINESH SAHU', 'SADAR SAHU', '7000316193', 'CQPPS5274K', 'LAKHANPUR , CHHATTISGARH', 'other', '0', '7', '50100236203312', 'HDFC BANK LTD', 'LAKHANPUR', 'HDFC0009154', '202101081153541.jpeg', 'NO', '202101081153552.jpeg', '202101081153552.jpeg', NULL, NULL, NULL, NULL, '1', NULL, 1, '2020-10-28 11:11:38', '2021-01-08 11:53:55'),
(7, 'ANIL KUMAR SINGH', NULL, '9131762220', NULL, 'BAGBAHARA, MAHASAMUND (C.G.)', 'other', '0', '2', '2150000100052365', 'PUNJAB NATIONAL BANK', 'BAGBAHARA, MAHASAMUND', 'PUNB0215000', NULL, 'NO', '', '', '', '', '', '', '1', NULL, 1, '2020-10-29 09:06:17', '2020-10-29 09:06:17'),
(8, 'RITESH KUMAR JAISWAL(0019)', 'SHRI MATA PRASAD JAISWAL', '9009999111', 'AJUPJ7307G', 'KORBA (C.G)', 'other', '0', '2', '280405500019', 'ICICI BANK', 'NH111 MAIN ROAD, PALI, KORBA', 'ICIC0002804', '202101080106081.jpeg', 'NO', '202101080106082.jpeg', '202101080106082.jpeg', NULL, NULL, NULL, NULL, '1', NULL, 2, '2020-10-29 09:14:28', '2021-01-08 13:06:08'),
(10, 'BALVEER SINGH BAGGA', 'HARJIT SINGH BAGGA', '9926944452', 'FRHPS3363H', 'H.NO.08 JAWAHAR CHAUK BAGBAHARA, MAHASAMUND C.G.', 'other', '0', '2', '36640200000116', 'BANK OF BARODA', 'BAGBAHARA MAHASAMUND', 'BARB0BAGBAH', NULL, 'NO', 'WhatsApp Image 2020-06-06 at 12.44.43.jpeg', 'WhatsApp Image 2020-10-22 at 18.40.03.jpeg', '0', '0', '0', '0', '1', NULL, 2, '2020-11-03 12:59:09', '2020-11-03 12:59:09'),
(13, 'SHYAM SINGH NAYAK', 'LACHCHA SINGH', '8103505300', 'AOQPN4036D', NULL, 'other', '0', '2', '2679000100211131', 'PUNJAB NATIONAL BANK', 'BASNA', 'PUNB0267900', '202101211234501.jpeg', 'NO', '202101211234512.jpeg', NULL, NULL, NULL, NULL, NULL, '1', '122.168.104.123', 2, '2020-11-03 13:23:01', '2021-01-21 12:34:51'),
(14, 'Aditya Kumar Jaishwal', NULL, NULL, '0', NULL, 'other', '0', '2', '20383399280', 'State Bank Of India', 'Churcha', 'SBIN0006792', NULL, 'NO', NULL, NULL, '0', '0', '0', '0', '1', '122.175.170.172', 2, '2020-11-03 13:54:22', '2020-11-03 13:54:22'),
(15, 'Aftab Alam', 'MOHMMAD FARUQU SIDHIQUE', '9165713396', 'AOCPA2728K', NULL, 'other', '0', '2', '35645681533', 'State Bank Of India', 'Balrampur', 'SBIN0015464', '202101221148351.jpeg', 'NO', '202101221148352.jpeg', NULL, '0', '0', '0', '0', '1', '122.175.170.172', 2, '2020-11-04 05:52:37', '2021-01-22 11:51:29'),
(16, 'Ankush Agrawal', 'RAJESH AGRAWAL', '9755890055', 'BIGPA8694D', NULL, 'other', '0', '2', '567702010008688', 'Union Bank Of India', 'Gerva ( KORABA)', 'UBIN0556777', '202101150944481.pdf', 'NO', '202101150944482.pdf', NULL, '0', '0', '0', '0', '1', '122.175.170.172', 2, '2020-11-04 05:58:52', '2021-01-15 09:44:48'),
(17, 'Anuj Kumar Gupta', 'VIJAY GUPTA', '0', 'BEEPG4680R', NULL, 'other', '0', '2', '50100253565504', 'HDFC BANK', 'Ramanujganj', 'HDFC0003327', '202101181157251.pdf', 'NO', '202101181157252.pdf', NULL, '0', '0', '0', '0', '1', '122.175.170.172', 2, '2020-11-04 06:00:47', '2021-01-18 11:57:25'),
(18, 'Ashish Jaishwal', 'PARMESHWAR JAISWAL', '9826846273', 'BGCPJ8202N', NULL, 'other', '0', '2', '918020009968196', 'Axis Bank', 'SANGAM CHOWK', 'UTIB0003725', '202101081158051.jpeg', 'NO', '202101081158052.jpeg', NULL, '3440622463', 'Central Bank Of India', 'Ambikapur', 'CBIN0280797', '1', '122.175.170.172', 2, '2020-11-04 06:03:27', '2021-01-08 11:58:05'),
(19, 'Dinesh Gupta', 'NAND LAL SAO', '2884808565', 'AUFPG0328Q', NULL, 'other', '0', '2', '20276161011', 'State Bank Of India', 'Lakhanpur', 'SBIN0014251', '202012310805231.jpeg', 'NO', '202012310805232.jpeg', '202012310805232.jpeg', NULL, NULL, NULL, NULL, '1', '122.175.170.172', 2, '2020-11-04 06:11:43', '2020-12-31 08:05:23'),
(20, 'SURESH KUMAR AGRAWAL', NULL, '8120301858', NULL, NULL, 'other', '0', '2', '5134007178', 'STATE BANK OF INDIA', NULL, 'SBIN0RRCHGB', NULL, 'NO', NULL, NULL, '0', '0', '0', '0', '1', '122.168.104.123', 2, '2020-11-04 06:13:09', '2020-11-04 06:13:09'),
(21, 'Fareeda Bano', NULL, '0', '0', NULL, 'other', '0', '2', '274811100001495', 'ANDHRA BANK', 'AMBIKAPUR', 'ANDB0002748', NULL, 'NO', NULL, NULL, '0', '0', '0', '0', '1', '122.175.170.172', 2, '2020-11-04 06:22:05', '2020-11-04 06:22:05'),
(23, 'Ibdit Kaur Bhatia', NULL, '0', '0', NULL, 'other', '0', '2', '049310011014248', 'Andhra Bank', 'Raipur', 'ANDB0000493', NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', '122.175.170.172', 2, '2020-11-04 06:30:20', '2020-11-04 06:30:20'),
(24, 'Mahesh Pratap Singh', 'HEERA SINGH', '9407913064', '0', NULL, 'other', '0', '2', '274811100001909', 'Andhra Bank', 'Ambikapur', 'ANDB0002748', NULL, 'NO', '202101081032352.jpeg', '202101081032362.jpeg', NULL, NULL, NULL, NULL, '1', '122.175.170.172', 2, '2020-11-04 06:38:03', '2021-01-08 10:32:36'),
(25, 'SUDARSHAN YADAV', 'NIRMAL YADAV', '9131565811', 'AVBPY4804C', NULL, 'other', '0', '2', '37610393120', 'STATE BANK OF INDIA', NULL, 'SBIN0002885', '202012310729551.jpeg', 'NO', '202012310729552.jpeg', '202012310729552.jpeg', '0', '0', '0', '0', '1', '122.168.104.123', 2, '2020-11-04 06:41:00', '2020-12-31 07:29:55'),
(26, 'MANJYOT SINGH BHATIA', NULL, '0', '0', NULL, 'other', '0', '2', '049310011003985', 'ANDRA BANK', 'Raipur', 'ANDB0000493', NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', '122.175.170.172', 2, '2020-11-04 07:54:45', '2020-11-04 07:54:45'),
(27, 'MOH. AFROZ ALAM', 'LT. MOHD.FARUKA', '0', 'ATIPA2520L', NULL, 'other', '0', '2', '916020080489865', 'Axis Bank', 'Bhatapara', 'UTIB0000858', '202012261257291.jpeg', 'NO', '202012261257292.jpeg', NULL, NULL, NULL, NULL, NULL, '1', '122.175.170.172', 2, '2020-11-04 08:09:46', '2020-12-26 12:57:29'),
(29, 'MAHTAB KHAN', 'MAINUDIN KHAN', '7061004554', 'CYBPK9130L', NULL, 'other', '0', '2', '52110100002877', 'Bank Of Baroda', 'Garhwa', 'BARB0GARHWA', '202101140123181.jpeg', 'NO', '202101140123182.jpeg', '202101140123182.jpeg', NULL, NULL, NULL, NULL, '1', '122.175.170.172', 2, '2020-11-04 08:14:44', '2021-01-14 13:23:18'),
(30, 'NARENDRA KUMAR PANDEY', 'SHIV KUMAR PANDEY', '0', 'BCIPP2675R', NULL, 'other', '0', '2', '31820363620', 'STATE BANK OF INDIA', 'Lakhanpur', 'SBIN0014251', '202101081116051.jpeg', 'NO', '202101081116052.jpeg', '202101081116052.jpeg', NULL, NULL, NULL, NULL, '1', '122.175.170.172', 2, '2020-11-04 08:17:07', '2021-01-08 11:16:05'),
(31, 'SUJEET KUMAR AGRAWAL', 'GHANSHYAM DAS AGRAWAL', '0', 'ANVPA6890L', NULL, 'other', '0', '2', '33564949699', 'STATE BANK OF INDIA', 'Lakhanpur', 'SBIN0014251', '202101021244521.jpeg', 'NO', '202101021244522.pdf', NULL, NULL, NULL, NULL, NULL, '1', '122.175.170.172', 2, '2020-11-04 08:19:00', '2021-01-02 12:44:52'),
(32, 'PARVINDER SINGH BHATIA', NULL, '0', '0', NULL, 'other', '0', '2', '049310011000689', 'ANDHRA BANK', 'RAIPUR', 'ANDB0000493', NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', '122.175.170.172', 2, '2020-11-04 08:21:19', '2020-11-04 08:21:19'),
(33, 'PEER MOHAMMAD', NULL, '0', '0', NULL, 'other', '0', '2', '917020048868078', 'Axis Bank', 'Bhatapara', 'UTIB0000858', NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', '122.175.170.172', 2, '2020-11-04 08:56:37', '2020-11-04 08:56:37'),
(35, 'RAMBILASH AGRAWAL', 'BANWARILAL AGRAWAL', '9826846273', 'AFPPA0663K', NULL, 'other', '0', '2', '25260210002063', 'Uco Bank', 'Ambikapur', 'UCBA0002526', '202012300126261.jpeg', 'NO', '202012300126262.jpeg', '202012300126262.jpeg', NULL, NULL, NULL, NULL, '1', '122.175.170.172', 2, '2020-11-04 09:13:36', '2020-12-30 13:26:26'),
(37, 'RIZWAN ALI', 'PIR MOHD', '0', 'BMDPA1173Q', NULL, 'other', '0', '2', '918010047347477', 'Axis Bank', 'Bhatapara', 'UTIB0000858', '202012261249121.jpeg', 'NO', '202012261249122.jpeg', NULL, NULL, NULL, NULL, NULL, '1', '122.175.170.172', 2, '2020-11-04 09:33:00', '2020-12-26 12:49:12'),
(38, 'SACHIN AGRAWAL', NULL, '0', '0', NULL, 'other', '0', '2', '50200030359270', 'HDFC BANK', 'Lakhanpur', 'HDFC0009154', 'WhatsApp Image 2020-10-27 at 14.27.03.jpeg', 'NO', 'WhatsApp Image 2020-10-27 at 14.27.04.jpeg', NULL, NULL, NULL, NULL, NULL, '1', '122.175.170.172', 2, '2020-11-04 09:55:47', '2020-12-11 12:22:37'),
(39, 'SAMMI AKHTAR', 'MD SAFI AHAMAD', '9131644428', 'ATIPA2519F', NULL, 'other', '0', '2', '918010000701867', 'Axis Bank', 'BHATAPARA', 'UTIB0000858', '202101131118201.pdf', 'NO', '202101131118202.pdf', NULL, NULL, NULL, NULL, NULL, '1', '122.175.170.172', 2, '2020-11-04 09:58:23', '2021-01-13 11:18:20'),
(40, 'SHEKH AASIF NOOR', 'MUSTAFA KHAN', '9074999990', 'AQLPN1743Q', NULL, 'other', '0', '2', '31511785001', 'STATE BANK OF INDIA', 'Lakhanpur', 'SBIN0014251', NULL, 'NO', 'shekh aasif noor.pdf', NULL, NULL, NULL, NULL, NULL, '1', '122.175.170.172', 2, '2020-11-04 10:00:54', '2020-12-24 12:37:21'),
(41, 'SUBODH KUMAR SINGH', 'RAJENDRA KUMAR SINGH', '0', 'BZQPS2868L', NULL, 'other', '0', '2', '25260510001387', 'Uco Bank', 'Ambikapur', 'UCBA0002526', '202101080954141.jpeg', 'NO', '202101080954152.jpeg', NULL, NULL, NULL, NULL, NULL, '1', '122.175.170.172', 2, '2020-11-04 10:03:40', '2021-01-08 09:54:15'),
(42, 'SUKHMINDER SINGH BHATIA', NULL, '0', '0', NULL, 'other', '0', '2', '049310011003733', 'Andhra Bank', 'RAIPUR', 'ANDB0000493', NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', '122.175.170.172', 2, '2020-11-04 10:06:57', '2020-11-04 10:06:57'),
(43, 'SUNIL KUMAR AGRWAL', NULL, '9713582765', 'AEAPA4342R', NULL, 'other', '0', '2', '2153066133', 'Central Bank Of India', 'Lakhanpur', 'CBIN0281685', '202101181204211.pdf', 'NO', '202101181204212.pdf', NULL, NULL, NULL, NULL, NULL, '1', '122.175.170.172', 2, '2020-11-04 10:10:50', '2021-01-18 12:04:21'),
(44, 'SURENDRA YADAV', 'BUDHAN YADAV', '0', 'AEKPY8989E', NULL, 'other', '0', '2', '450010110002855', 'Bank Of India', 'Jamshedpur', 'BKID0004500', NULL, 'NO', 'WhatsApp Image 2020-08-10 at 13.23.07.jpeg', NULL, NULL, NULL, NULL, NULL, '1', '122.175.170.172', 2, '2020-11-04 10:12:46', '2020-12-26 07:36:02'),
(45, 'VIKASH KUMAR GUPTA', NULL, '0', '0', NULL, 'other', '0', '2', '2153093746', 'CENTRAL BANK OF INDIA', 'Lakhanpur', 'CBIN0281685', NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', '122.175.170.172', 2, '2020-11-04 10:14:33', '2020-11-04 10:14:33'),
(46, 'VINOD KUMAR JAISWAL', 'MANIK CHAND JAISWAL', '0', 'AOSPJ8113B', NULL, 'other', '0', '2', '50200032206644', 'HDFC BANK', 'Ambikapur', 'HDFC0000917', '202101081200501.jpeg', 'NO', '202101131250292.jpeg', '202101081200502.jpeg', NULL, NULL, NULL, NULL, '1', '122.175.170.172', 2, '2020-11-04 10:16:29', '2021-01-13 12:50:29'),
(47, 'VIKASH KUMAR', NULL, '0', '0', NULL, 'other', '0', '2', '33034415219', 'STATE BANK OF INDIA', 'Bhatgaon', 'SBIN0007065', NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', '122.175.170.172', 2, '2020-11-04 10:17:55', '2020-11-04 10:17:55'),
(48, 'AMAR SINGH THAIN', 'DILIP SINGH', NULL, 'CAQPS2015F', NULL, 'other', '0', '2', '6111000100015594', 'PUNJAB NATIONAL BANK', 'MAHASAMUND', 'PUNB0611100', '202101210125061.jpeg', 'NO', '202101210125062.jpeg', '202101210125062.jpeg', NULL, NULL, NULL, NULL, '1', '122.168.104.123', 2, '2020-11-04 11:34:13', '2021-01-21 13:25:06'),
(49, 'AMIT AGRAWAL', 'GHANSHYAM AGRAWAL', '8770948600', 'DKSPA6993M', NULL, 'other', '0', '2', '6111000100006293', 'PUNJAB NATIONAL BANK', 'SARAIPALI', 'PUNB0611100', '202101080943381.jpeg', 'NO', '202101080943382.jpeg', '202101080943382.jpeg', NULL, NULL, NULL, NULL, '1', '122.168.104.123', 2, '2020-11-04 11:37:36', '2021-01-08 09:43:38'),
(50, 'ANISHA KHAN', NULL, '9754407876', 'FGAPK3754A', NULL, 'other', '0', '2', '2679000100075010', 'PUNJAB NATIONAL BANK', 'BASNA', 'PUNB0267900', NULL, 'NO', '202101081243502.jpeg', NULL, NULL, NULL, NULL, NULL, '1', '122.168.104.123', 2, '2020-11-04 11:41:50', '2021-01-08 12:43:50'),
(51, 'ANUBHA AGRAWAL', NULL, '6260000300', NULL, NULL, 'other', '0', '2', '1730104000011635', 'IDBI BANK', 'MAHASAMUND', 'IBKL0001730', NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', '122.168.104.123', 2, '2020-11-04 11:44:36', '2020-11-04 11:44:36'),
(52, 'ATUL AGARWAL', 'SHIV KUMAR AGRAWAL', '9589426000', 'ACPPA3868Q', NULL, 'other', '0', '2', '36413396010', 'STATE BANK OF INDIA', 'MAHASAMUND', 'SBIN0009750', '202101221154501.pdf', 'NO', '202101221154502.pdf', NULL, NULL, NULL, NULL, NULL, '1', '122.168.104.123', 2, '2020-11-04 11:47:05', '2021-01-22 11:54:50'),
(53, 'BHANU SAHU', 'RUP SAY SAHU', '9131401935', NULL, NULL, 'other', '0', '2', '50170015072995', 'BANDHAN BANK', 'MALKHAROAD', 'BDBL0001551', NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', '122.168.104.123', 2, '2020-11-04 11:50:09', '2020-12-30 11:47:12'),
(54, 'BHARAT SONWANI', 'AMAR LAL SONWANI', '9303622021', 'DTGPS5439K', NULL, 'other', '0', '2', '68008167150', 'BANK OF MAHARASTRA', 'BASNA', 'MAHB001579', '202101141208551.pdf', 'NO', '202101141208552.pdf', NULL, NULL, NULL, NULL, NULL, '1', '122.168.104.123', 2, '2020-11-04 11:59:35', '2021-01-14 12:08:55'),
(55, 'BHUVNESWAAR BARI', NULL, '9993340681', NULL, NULL, 'other', '0', '2', '50100303951261', 'HDFC BAND', 'SARAIPALI', 'HDFC0003930', NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', '122.168.104.123', 2, '2020-11-04 12:02:40', '2020-11-04 12:02:40'),
(56, 'CHANDAN KUMAR GUPTA', NULL, '7974361024', NULL, NULL, 'other', '0', '2', '918010021264523', 'AXIS BANK', 'SARAIPALI', 'UTIB0002050', NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', '122.168.104.123', 2, '2020-11-04 12:05:00', '2020-11-04 12:05:00'),
(57, 'DURGA KOUR BEDI', NULL, NULL, NULL, NULL, 'other', '0', '2', '2679000100145351', 'PUNJAB NATIONAL BANK', 'BASNA MAHASAMUND', 'PUNB0267900', NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', '122.168.104.123', 2, '2020-11-04 12:07:05', '2020-11-04 12:07:05'),
(58, 'GOPESH KUMAR ROHIDAS', 'SANTOSH KUMAR ROHIDAS', '6265260732', 'CMRPR6085H', NULL, 'other', '0', '2', '36564788264', 'STATE BANK OF INDIAN', 'PALARI', 'SBIN0014397', NULL, 'NO', '202101061001412.pdf', NULL, NULL, NULL, NULL, NULL, '1', '122.168.104.123', 2, '2020-11-04 12:09:18', '2021-01-06 10:01:41'),
(59, 'INDRA KUMAR SAV', NULL, '9977164817', NULL, NULL, 'other', '0', '2', '32309093171', 'STATE BANK OF INDIA', 'MAHASAMUND', 'SBIN0014205', NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', '122.168.104.123', 2, '2020-11-04 12:11:17', '2020-11-04 12:11:17'),
(60, 'KAPIL AGRAWAL', 'GHASHI RAM AGRAWAL', '8720093276', 'AQFPA0315H', NULL, 'other', '0', '2', '31053531632', 'STATE BANK OF INDIA', 'JANJGIR CHAMPA', 'SBIN0012133', '202101080911361.jpeg', 'NO', '202101080911362.jpeg', '202101080911362.jpeg', NULL, NULL, NULL, NULL, '1', '122.168.104.123', 2, '2020-11-04 12:13:10', '2021-01-08 09:11:36'),
(61, 'KESHAV PATEL', NULL, '8319202221', NULL, NULL, 'other', '0', '2', '306210100036358', 'ANDHRA BANK', 'SARAIPALI', 'ANDB0003062', NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', '122.168.104.123', 2, '2020-11-04 12:15:37', '2020-11-04 12:15:37'),
(62, 'Mohd. Khalid Ali', 'SABIR ALI', '6266797220', 'BBWPA2859M', NULL, 'other', '0', '2', '2679000100075658', 'PUNJAB NATIONAL BANK', 'MAHASAMUND', 'PUNB0267900', '202101060957271.jpeg', 'NO', '202101060957272.jpeg', NULL, NULL, NULL, NULL, NULL, '1', '122.168.104.123', 2, '2020-11-04 12:23:41', '2021-01-06 09:57:27'),
(63, 'LOKNATH BARI', NULL, '9977119671', NULL, NULL, 'other', '0', '2', '50100251801731', 'HDFC BANK', 'SARAIPALI', 'HDFC0003930', NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', '122.168.104.123', 2, '2020-11-04 12:25:45', '2020-11-04 12:25:45'),
(64, 'MADHAV YADAV', 'CHAMRA YADAV', '7000030941', 'CCTPM5167M', NULL, 'other', '0', '2', '2327894572', 'CENTRAL BANK OF INDIA', 'Mahasamund', 'CBIN0283066', '202101081258001.jpeg', 'NO', '202101081258002.jpeg', '202101081258002.jpeg', NULL, NULL, NULL, NULL, '1', '122.168.104.123', 2, '2020-11-04 12:28:39', '2021-01-08 12:58:00'),
(65, 'MAKSUD KHAN', 'MEHANDI HASAN', '8815063535', 'FFUPK7307J', NULL, 'other', '0', '2', '917010044377137', 'AXIS BANK', 'BALOADA BAZAR', 'UTIB0002591', '202101201202181.jpeg', 'NO', '202101201202182.jpeg', '202101201202182.jpeg', NULL, NULL, NULL, NULL, '1', '122.168.104.123', 2, '2020-11-04 12:31:08', '2021-01-20 12:02:18'),
(66, 'MANISH AGRAWAL', 'SURENDRA KUMAR SAHU', '9425519103', NULL, NULL, 'other', '0', '2', '50100199660056', 'HDFC BANK', 'SARAIPALI', 'HDFC0003930', '202101190720481.jpeg', 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', '122.168.104.123', 2, '2020-11-04 12:33:09', '2021-01-19 07:20:48'),
(67, 'MANOJ SAHU', 'MULCHAND SAHU', '9131576959', NULL, NULL, 'other', '0', '2', '919020052699288', 'AXIS BANK', 'KHARSIA', 'UTIB0001823', '202012300927381.jpeg', 'NO', '202012300927382.jpeg', NULL, NULL, NULL, NULL, NULL, '1', '122.168.104.123', 2, '2020-11-04 12:35:33', '2020-12-30 09:27:38'),
(68, 'MAYANK AGRAWAL', NULL, '8120301858', NULL, NULL, 'other', '0', '2', '31349597373', 'STATE BANK OF INDIA', 'RAIPUR', 'SBIN0009747', NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', '122.168.104.123', 2, '2020-11-04 12:37:54', '2020-11-04 12:37:54'),
(69, 'MITLAL SAHU', 'ALAG RAM SAHU', '9009651774', 'ELGPS7645Q', NULL, 'other', '0', '2', '919010084626639', 'AXIS BANK', 'KHARSIA', 'UTIB0001823', '202101191102401.pdf', 'NO', '202101191102402.pdf', NULL, NULL, NULL, NULL, NULL, '1', '122.168.104.123', 2, '2020-11-04 12:39:53', '2021-01-19 11:02:40'),
(70, 'Mr. AMAR SINGH AZAD', 'GOVINDRAM AZAD', '6266784391', 'BVYPA9940D', NULL, 'other', '0', '2', '34187872646', 'STATE BANK OF INDIA', 'JANJGIR CHAMPA', 'SBIN0004572', '202101180129311.jpeg', 'NO', '202101180129312.jpeg', NULL, NULL, NULL, NULL, NULL, '1', '122.168.104.123', 2, '2020-11-04 12:41:50', '2021-01-18 13:29:31'),
(71, 'Mr. PURANDAR PATEL', 'SURANDAR PATEL', '9340590584', 'EVUPP8998D', NULL, 'other', '0', '2', '37203181584', 'STATE BANK OF INDIA', 'LAKHMARA', 'SBIN0009649', NULL, 'NO', '202101060943442.pdf', NULL, NULL, NULL, NULL, NULL, '1', '122.168.104.123', 2, '2020-11-04 12:46:58', '2021-01-06 09:43:44'),
(72, 'Mr. RAKESH KUMAR AGRAWAL', 'PURSHOTTAM AGRAWAL', '9009319929', 'AIGPA0155N', NULL, 'other', '0', '2', '30996151747', 'STATE BANK OF INDIA', 'BICHIYA', 'SBIN0009415', NULL, 'NO', '202101081105262.jpeg', '202101061013012.jpeg', NULL, NULL, NULL, NULL, '1', '122.168.104.123', 2, '2020-11-04 12:51:43', '2021-01-08 11:05:27'),
(73, 'MURLI SAHU', 'GOPAL PRASAD SAHU', '7000026890', 'JCGPS2608R', NULL, 'other', '0', '2', '50100305314620', 'HDFC BANK', 'KHARSIYA RAIGARH', 'HDFC0002626', '202101191051441.pdf', 'NO', '202101191051442.pdf', NULL, NULL, NULL, NULL, NULL, '1', '122.168.104.123', 2, '2020-11-04 12:55:03', '2021-01-19 10:51:44'),
(74, 'NAND KUMAR SAHU', NULL, NULL, NULL, NULL, 'other', '0', '2', '38175922718', 'STATE BANK OF INDIA', 'JANJGIR CHAMPA', 'SBIN0002891', NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', '122.168.104.123', 2, '2020-11-04 12:57:47', '2020-11-04 12:57:47'),
(75, 'NARESH KUMAR SAHU', NULL, NULL, NULL, NULL, 'other', '0', '2', '916010035842201', 'AXIS BANK', 'SARAIPALI MAHASAMUND', 'UTIB0002050', NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', '122.168.104.123', 2, '2020-11-04 13:00:37', '2020-11-04 13:00:37'),
(76, 'NAVRATAN CHANDRA', 'HARIHAR CHANDRA', '8959052452', NULL, NULL, 'other', '0', '2', '50170000598287', 'BANDHAN BANK', 'JANJGIR CHAMPA', 'BDBL0001551', NULL, 'NO', '202101200102062.jpeg', NULL, NULL, NULL, NULL, NULL, '1', '122.168.104.123', 2, '2020-11-04 13:04:17', '2021-01-20 13:02:06'),
(77, 'PITRAM SO JAGNATH', NULL, '9340529135', NULL, NULL, 'other', '0', '2', '2679000100153660', 'PUNJAB NATIONAL BANK', 'BASNA MAHASAMUND', 'PUNB0267900', NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', '122.168.104.123', 2, '2020-11-04 13:06:32', '2020-11-04 13:06:32'),
(78, 'RAM LAKHAN SAHU', NULL, '7828291625', NULL, NULL, 'other', '0', '2', '3975158897', 'CENTRAL BANK OF INDIA', 'CHHAL, (KUDEKELA)', 'CBIN0281980', NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', '122.168.104.123', 2, '2020-11-04 13:09:42', '2020-11-04 13:09:42'),
(79, 'RATAN LAL AGRAWAL', NULL, '8770948600', NULL, NULL, 'other', '0', '2', '6111000100043773', 'PUNJAB NATIONAL BANK', 'SARAIPALI', 'PUNB0611100', NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', '122.168.104.123', 2, '2020-11-04 13:11:41', '2020-11-04 13:11:41'),
(80, 'RAVINDRA YADAV', 'BHAGESHWAR YADAV', '7898372323', 'AJEPY9071C', NULL, 'other', '0', '2', '34259340382', 'STATE BANK OF INDIA', 'MAHASAMUND', 'SBIN0009750', '202101080915431.jpeg', 'NO', '202101080915432.jpeg', NULL, NULL, NULL, NULL, NULL, '1', '122.168.104.123', 2, '2020-11-04 13:17:42', '2021-01-08 09:15:43'),
(81, 'RINA AGRAWAL', 'CHANDAN MAL AGRAWAL', '95846303173', 'BSQPA7113R', NULL, 'other', '0', '2', '6111001700018909', 'PUNJAB NATIONAL BANK', 'SARAIPALI', 'PUNB0611100', '202101140705551.jpeg', 'NO', '202101140705552.jpeg', '202101140705552.jpeg', NULL, NULL, NULL, NULL, '1', '122.168.104.123', 2, '2020-11-04 13:19:39', '2021-01-14 07:05:55'),
(82, 'SAHDEV RAM SAHU', 'SAMMELAL SAHU', '9131123961', 'EDQPS2689D', NULL, 'other', '0', '2', '917010050238710', 'AXIS BANK', 'SAKTI', 'UTIB0001307', '202101211114401.pdf', 'NO', '202101211114402.pdf', NULL, NULL, NULL, NULL, NULL, '1', '122.168.104.123', 2, '2020-11-04 13:21:38', '2021-01-21 11:14:40'),
(83, 'SANGITA AGRAWAL', NULL, '9753756488', NULL, NULL, 'other', '0', '2', '50200024255385', 'HDFC BANK', 'SARAIPALI', 'HDFC0003930', NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', '122.168.104.123', 2, '2020-11-04 13:24:14', '2020-11-04 13:24:14'),
(84, 'SHUBHAM KUMAR AGRAWAL', NULL, '8120301858', NULL, NULL, 'other', '0', '2', '31659897341', 'STATE BANK OF INDIA', 'RAIPUR', 'SBIN0009747', NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', '122.175.246.71', 2, '2020-11-05 08:15:52', '2020-11-05 08:15:52'),
(85, 'SURENDRA KASHYAP', NULL, '9617037734', NULL, NULL, 'other', '0', '2', '7245000100074891', 'PUNJAB NATIONAL BANK', '0', 'PUNB0724500', NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', '122.175.246.71', 2, '2020-11-05 08:26:10', '2020-11-05 08:26:10'),
(86, 'SURESH PATEL', NULL, NULL, NULL, NULL, 'other', '0', '2', '2679000100024690', 'PUNJAB NATIONAL BANK', 'BASNA', 'PUNB0267900', NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', '122.175.246.71', 2, '2020-11-05 08:29:56', '2020-11-05 08:29:56'),
(87, 'TARANPRIT SINGH RAINA', NULL, '7489724778', NULL, NULL, 'other', '0', '2', '1730102000001014', 'IDBI BANK', 'SARAIPALI MAHASAMUND', 'IBKL0001730', NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', '122.175.246.71', 2, '2020-11-05 08:31:55', '2020-11-05 08:31:55'),
(88, 'UDHO SINGH THAKUR', NULL, '9516426370', NULL, NULL, 'other', '0', '2', '50100300560410', 'HDFC BANK', 'SARAIPALI BRANCH', 'HDFC0004143', NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', '122.175.246.71', 2, '2020-11-05 08:34:11', '2020-11-05 08:34:11'),
(89, 'VIKRAM AGRAWAL', 'MANISH AGRAWAL', '9407651001', 'AUUPA4803H', NULL, 'other', '0', '2', '31385416487', 'STATE BANK OF INDIA', 'JANJGIR CHAMPA', 'SBIN0012133', '202101080822111.jpeg', 'NO', '202101080822112.jpeg', '202101080822112.jpeg', NULL, NULL, NULL, NULL, '1', '122.175.246.71', 2, '2020-11-05 08:36:21', '2021-01-08 08:22:11'),
(90, 'YOGESH AGRAWAL', NULL, '9009163000', NULL, NULL, 'other', '0', '2', '31577670682', 'STATE BANK OF INDIA', 'SARAIPALI MAHASAMUND', 'SBIN0009750', NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', '122.175.246.71', 2, '2020-11-05 08:37:46', '2020-11-05 08:37:46'),
(91, 'SARABJEET SINGH SALUJA', NULL, '9926110339', NULL, NULL, 'other', '0', '2', '30717122944', 'STATE BANK OF INDIA', 'PITHORA', 'SBIN0002885', '202101080109511.pdf', 'NO', '202101080109512.jpeg', NULL, NULL, NULL, NULL, NULL, '1', '122.175.167.236', 2, '2020-11-06 08:59:44', '2021-01-08 13:09:51'),
(92, 'SHABDAR KHAN', NULL, '6266456248', NULL, NULL, 'other', '0', '2', '34929004259', NULL, NULL, 'SBIN0005770', NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', '122.175.167.236', 2, '2020-11-06 09:19:44', '2020-11-06 09:19:44'),
(93, 'KRISHNA NAYAK', 'RAM NAYAK', '9131565811', 'CEHPN8775A', NULL, 'other', '0', '2', '40550100014985', 'BANK OF BARODA', 'SARAIPALI', 'BARB0SARAIP', '202012310734251.jpeg', 'NO', '202012310734252.jpeg', NULL, NULL, NULL, NULL, NULL, '1', '122.175.167.236', 2, '2020-11-06 12:46:04', '2020-12-31 07:34:25'),
(94, 'ASHOK KUMAR', 'DURGA PRASAD AGRAWAL', '9993087889', 'ACJPA2274M', '-', 'other', '0', '2', '11293344525', 'SBI', 'SARAIPALI', 'SBIN0009750', '202101181141461.pdf', 'NO', '202101181141462.pdf', NULL, '0', '0', '0', '0', '1', NULL, NULL, '2020-12-11 06:12:27', '2021-01-18 11:41:46'),
(95, 'AADYA AGENCIES', 'BALRAM MUKHARJEE', '9131012270', 'BMRPM0879D', 'AMBIKAPUR SURGUJA C.G', 'other', '22BMRPM0879D1ZX', '2', '25260210001813', 'UCO BANK', 'AMBIKAPUR', 'UCBA0002526', 'WhatsApp Image 2020-12-09 at 14.49.58.jpeg', 'NO', NULL, 'WhatsApp Image 2020-12-09 at 14.49.59.jpeg', '0', '0', '0', '0', '1', NULL, NULL, '2020-12-11 07:21:53', '2020-12-11 07:21:53'),
(97, 'Rakesh Agrawal', NULL, '9425203621', '0', NULL, 'other', '0', '2', '2153629008', 'CBI', NULL, 'CBIN0280805', NULL, 'NO', NULL, NULL, '0', '0', '0', '0', '1', NULL, NULL, '2020-12-11 07:54:13', '2020-12-11 07:57:49'),
(98, 'Rakesh Bhumiya', NULL, '9179481841', '0', NULL, 'other', '0', '2', '20161806879', 'SBI', 'KHARSIYA', 'SBIN0002864', NULL, 'NO', NULL, NULL, '0', '0', '0', '0', '1', NULL, NULL, '2020-12-11 08:04:44', '2020-12-11 08:04:44'),
(99, 'PRAMOD KUMAR AGARWAL', 'PREM CHAND AGARWAL', '9424312496', NULL, NULL, 'other', '0', '2', '50200025602163', 'HDFC BANK', 'LAKHANPUR', 'HDFC0009154', NULL, 'NO', 'WhatsApp Image 2020-11-06 at 13.50.46.jpeg', 'WhatsApp Image 2020-11-19 at 12.27.09.jpeg', '0', '0', '0', '0', '1', NULL, NULL, '2020-12-11 11:20:02', '2020-12-11 11:20:02'),
(100, 'AALOK GUPTA', NULL, '9406222780', NULL, NULL, 'other', '0', '2', '2152984097', 'Central Bank Of India', 'LAKHANPUR', 'CBIN0281685', NULL, 'NO', NULL, NULL, '0', '0', '0', '0', '1', NULL, NULL, '2020-12-11 12:18:44', '2020-12-11 12:18:44'),
(102, 'RAVI LAL NAYAK', 'RAM SINGH NAYANK', '7693077321', 'AHJPN7325H', NULL, 'other', '0', '2', '32457199961', 'SBI', 'BASNA', 'SBIN0014205', '202101181221521.pdf', 'NO', '202101181221522.pdf', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-11 13:20:33', '2021-01-18 12:21:52'),
(103, 'NAND LAL GUPTA', 'RAGHUNATH SAV', '7369810203', 'APFPG9510H', NULL, 'other', '0', '7', '369901500490', 'ICICI BANK', 'GARWA', 'ICIC0003699', 'WhatsApp Image 2020-12-09 at 13.22.26 (2).jpeg', 'NO', 'ALL NAND LAL GUPTA FILE.pdf', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-14 11:40:18', '2020-12-24 12:43:44'),
(104, 'HALIMA KHATUN', 'EJAJ AHMAD', '9074999990', 'HAWPK3987H', NULL, 'other', '0', '2', '20141039233', 'STATE BANK OF INDIA', 'AMBIKAPUR', 'SBIN0000310', 'new doc 2019-09-16 17.40.52_20200505104231.pdf', 'NO', 'WhatsApp Image 2020-12-14 at 16.50.42.jpeg', 'WhatsApp Image 2020-12-14 at 16.52.11.jpeg', NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-14 13:03:13', '2020-12-14 13:03:13'),
(105, 'Mahaveer Prasad Agrawal', NULL, '9691309707', NULL, NULL, 'other', '0', '2', '40550200000093', 'BANK OF BARODA', 'SARAIPALI', 'BARB0SARAIP', 'WhatsApp Image 2020-08-16 at 12.04.14.jpeg', 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-16 13:25:28', '2020-12-16 13:25:28'),
(106, 'Surya Nath Tiwari', '0', '0', '0', '0', 'self', '0', '2', '0', '0', '0', '0', NULL, 'NO', NULL, NULL, '0', '0', '0', '0', '1', NULL, NULL, '2020-12-21 06:50:30', '2020-12-21 06:50:30'),
(107, 'Ram Chandra Yadav', '0', '0', '0', NULL, 'self', '0', '2', '0', '0', '0', '0', NULL, 'NO', NULL, NULL, '0', '0', '0', '0', '1', NULL, NULL, '2020-12-21 06:51:12', '2020-12-21 06:51:12'),
(108, 'Raja Bhaiya', NULL, NULL, NULL, NULL, 'self', NULL, '2', NULL, NULL, NULL, NULL, NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-21 06:52:16', '2020-12-21 06:52:16'),
(109, 'Avinash Kumar', NULL, NULL, NULL, NULL, 'self', NULL, '2', NULL, NULL, NULL, NULL, NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-21 06:52:47', '2020-12-21 06:52:47'),
(110, 'Indusind Bank Ltd', NULL, NULL, NULL, NULL, 'self', NULL, '2', NULL, NULL, NULL, NULL, NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-21 06:53:14', '2020-12-21 06:53:14'),
(111, 'Ritesh kumar saluja', NULL, NULL, NULL, NULL, 'self', NULL, '2', NULL, NULL, NULL, NULL, NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-21 07:07:47', '2020-12-21 07:07:47'),
(112, 'Krishna Kumar Agrawal', NULL, NULL, NULL, NULL, 'self', NULL, '2', NULL, NULL, NULL, NULL, NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-21 07:10:20', '2020-12-21 07:10:20'),
(113, 'smt. Rashmi Bagga', NULL, NULL, NULL, NULL, 'self', NULL, '2', NULL, NULL, NULL, NULL, NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-21 07:16:35', '2020-12-21 07:16:35'),
(114, 'Mohd. Alim Ashrafi', NULL, NULL, NULL, NULL, 'self', NULL, '2', NULL, NULL, NULL, NULL, NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-21 07:31:00', '2020-12-21 07:31:00'),
(115, 'MS Mohammad Rafique', NULL, NULL, NULL, NULL, 'self', NULL, '2', NULL, NULL, NULL, NULL, NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-21 07:31:45', '2020-12-21 07:31:45'),
(116, 'Abdul Wahid Rokdiya', NULL, NULL, NULL, NULL, 'self', NULL, '2', NULL, NULL, NULL, NULL, NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-21 07:32:23', '2020-12-21 07:32:23'),
(117, 'Balbir Singh', NULL, NULL, NULL, NULL, 'self', NULL, '2', NULL, NULL, NULL, NULL, NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-21 07:32:44', '2020-12-21 07:32:44'),
(118, 'Deepak Sharma', NULL, NULL, NULL, NULL, 'self', NULL, '2', NULL, NULL, NULL, NULL, NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-21 07:33:07', '2020-12-21 07:33:07'),
(119, 'DHEERAJ KUMAR KESHRI', 'VISHWANATH PRASAD KESHRI', '7352750960', 'CJYPK8544G', NULL, 'other', '0', '2', '35931841367', 'STATE BANK OF INDIA', 'Amy Uchari', 'SBIN0006350', NULL, 'NO', '202101181248082.jpeg', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-24 11:43:19', '2021-01-18 12:48:08'),
(120, 'VINOD GUPTA', 'LAKHAMAN PRASAD GUPTA', '6204025320', NULL, NULL, 'other', '0', '7', '1660102000004640', 'IDBI BANK', 'GRAWA', 'IBKL0001660', 'WhatsApp Image 2020-08-06 at 12.50.01.jpeg', 'NO', 'WhatsApp Image 2020-08-06 at 12.50.01 (1).jpeg', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-24 12:58:15', '2020-12-24 12:58:15'),
(121, 'PRADIP KUMAR AGRAWAL', 'PRAYAGRAJ AGRAWAL', NULL, 'AOJPA0510N', NULL, 'other', '0', '2', '79152200022355', 'SYANDICATE BANK', 'AMBIKAPUR', 'SYNB0007915', '202012310754321.jpeg', 'NO', '202012310754572.jpeg', '202012310754322.jpeg', NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-24 13:23:35', '2020-12-31 07:54:57'),
(122, 'DILEEP PATEL', 'MOHAN LAL PATEL', NULL, 'ERAPP4266G', NULL, 'other', '0', '2', '50200038578939', 'HDFC BANK', 'MAHASAMUND', 'HDFC0003930', '202101221124411.jpeg', 'NO', 'New Doc 2019-09-23 13.35.35.pdf', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-25 07:31:33', '2021-01-22 11:24:41'),
(123, 'AJIT SINGH', NULL, NULL, NULL, NULL, 'other', '0', '7', '34313288220', 'STATE BANK OF INDIA', 'Dakra', 'SBIN0014343', NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-25 07:47:20', '2020-12-25 07:47:20'),
(124, 'NITISH KUMAR BANJARE', NULL, NULL, NULL, NULL, 'other', '0', '2', '20061310808', 'STATE BANK OF INDIA', 'RAIPUR', 'SBIN0006085', NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-25 10:37:16', '2020-12-25 10:37:16'),
(125, 'CHAKRADHAR PATEL', 'HEERA LAL PATEL', NULL, 'DAIPP8817H', NULL, 'other', '0', '2', '6111000100101233', 'PUNJAB NATIONAL BANK', 'SARAIPALI', 'PUNB0611100', '202101210120111.pdf', 'NO', '202101210120112.pdf', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-25 10:44:31', '2021-01-21 13:20:11'),
(126, 'SANDEEP SINGH', 'BHANU PRATAP SINGH', NULL, 'GESPS5929Q', NULL, 'other', '0', '2', '50100228723102', 'HDFC BANK', 'LAKHANPUR', 'HDFC0009154', 'WhatsApp Image 2020-07-28 at 12.21.30 (1).jpeg', 'NO', 'WhatsApp Image 2020-07-28 at 12.21.30.jpeg', 'WhatsApp Image 2020-07-28 at 12.21.31 (1).jpeg', NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-25 10:52:24', '2020-12-25 10:52:24'),
(127, 'DILHARAN LAL MIRI', 'DARAS RAM MIRI', NULL, 'CZKPM4643J', NULL, 'other', '0', '2', '30299647522', 'STATE BANK OF INDIA', 'BILLAIGARH', 'SBIN0005770', 'WhatsApp Image 2020-07-25 at 10.15.31.jpeg', 'NO', 'WhatsApp Image 2020-07-25 at 10.15.29 (1).jpeg', 'WhatsApp Image 2020-07-25 at 10.15.30 (1).jpeg', NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-25 11:02:02', '2020-12-25 11:02:02'),
(128, 'ISMAIL', 'MOHAMMAD GULAM', NULL, 'AGGP12480N', NULL, 'other', '0', '2', '1554010002646', 'UNITED BANK OF INDIA', 'AMBIKAPUR', 'UTBI0APR675', NULL, 'NO', 'ismail.pdf', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-25 11:43:47', '2020-12-26 06:34:17'),
(129, 'BIHARI LAL BANJARE', 'SAHDEV BANJARE', '9827346566', 'BPHPB5197J', NULL, 'other', '0', '2', '32759759897', 'STATE BANK OF INDIA', 'Gatadih', 'SBIN0009747', NULL, 'NO', 'WhatsApp Image 2020-07-10 at 16.35.09.jpeg', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-25 11:59:35', '2020-12-25 11:59:35'),
(130, 'ISRAR KHAN', 'FARJAN KHAN', '8959903786', 'CBUPK9281Q', NULL, 'other', '0', '2', '31947399155', 'STATE BANK OF INDIA', 'RAIPUR', 'SBIN0017095', 'WhatsApp Image 2020-08-07 at 14.47.51.jpeg', 'NO', 'WhatsApp Image 2020-08-07 at 14.47.52 (1).jpeg', 'WhatsApp Image 2020-08-07 at 14.47.52.jpeg', NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-25 12:12:10', '2020-12-25 12:14:26'),
(131, 'SEEMA GUPTA', 'TRIBHUWAN RAM PAPINDE', '7999069300', NULL, NULL, 'other', '0', '2', '20134510737', 'STATE BANK OF INDIA', NULL, 'SBIN0002870', NULL, 'NO', NULL, 'WhatsApp Image 2020-11-25 at 14.21.50.jpeg', NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-25 12:19:24', '2020-12-25 12:19:24'),
(132, 'YASH TRANSPORT', 'DILIP SINGH CHAWAL', NULL, 'AFHPC9508B', NULL, 'other', '0', '2', '762900301000320', NULL, NULL, 'VIJB0007629', 'WhatsApp Image 2020-08-10 at 18.57.49.jpeg', 'NO', 'WhatsApp Image 2020-08-10 at 18.57.51.jpeg', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-25 12:40:48', '2020-12-25 12:40:48'),
(133, 'SURENDRA YADAV', 'MUGESHWAR YADAV', NULL, 'AISPY4494Q', NULL, 'other', '0', 'Select', '3298238454', 'STATE  BANK OF INDIA', 'DEO', 'SBIN0012605', NULL, 'NO', '202012260821252.jpeg', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-26 07:48:11', '2020-12-26 08:21:25'),
(134, 'FIRDAUS SHEKH', 'FAROOK', '9039778736', 'EVAPS2753D', NULL, 'other', '0', '2', '919010019154950', 'AXIS BANK', 'BHATAPARA', 'UTIB0000858', '202012260108581.jpeg', 'NO', '202012260108582.jpeg', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-26 13:08:58', '2020-12-26 13:08:58'),
(135, 'SUNIL KUMAR AGRAWAL', 'BANWARILAL AGRAWAL', '9009685784', 'ACJPA2563K', NULL, 'other', '0', '2', '1859050000648', 'UNITED BANK OF INDIA', 'SARAIPALI', 'UTBI0SPAM12', NULL, 'NO', '202012300827322.jpeg', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-30 08:27:32', '2020-12-30 08:27:32'),
(136, 'MD AJAZ QURESHI', 'MOHAMMED ASHFAK QUREHSI', NULL, 'AAJPQ7028F', NULL, 'other', '0', '2', '274810100020825', 'Andhra Bank', 'AMBIKAPUR', 'ANDB0002748', NULL, 'NO', '202012300917202.pdf', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-30 09:17:20', '2020-12-30 09:17:20'),
(137, 'BED RAM CHANDRA', 'RAMADHAR CHANDRA', '8982130000', 'APFPC2718B', NULL, 'other', '0', '2', '917020083395988', 'AXIS BANK', 'KHARSIA', 'UTIB0001823', '202012301041331.jpeg', 'NO', '202012301041332.jpeg', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-30 10:41:33', '2020-12-30 10:41:33'),
(138, 'INDRA KUMAR SAV', 'USAT SAV', '9977164817', 'ECWPS6850N', NULL, 'other', '0', '2', '32309093171', NULL, NULL, 'SBIN0014205', '202012301220251.jpeg', 'NO', '202012301220252.jpeg', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-30 12:20:25', '2020-12-30 12:20:25'),
(140, 'DEVENDRA SINGH', 'LALMANI SINGH', '7999602849', 'JMBPS1979E', NULL, 'other', '0', '2', '45760100002727', 'BANK OF BARODA', 'SUNDER NAGAR RAIPUR', 'BARB0SANRAI', '202012301247231.jpeg', 'NO', '202012301247232.jpeg', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-30 12:47:23', '2020-12-30 12:47:23'),
(141, 'PRAHALLAD AGRAWAL', 'shri rajkumar agrawal', '9009756548', 'AZLPA3708P', NULL, 'other', '0', '2', '914010010492186', 'AXIS BANK', 'UTIB0002050', 'UTIB0002050', NULL, 'NO', '202012300101092.jpeg', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-30 13:01:09', '2020-12-30 13:01:09'),
(142, 'MANISH BANSAL', 'SURESH BANSAL', '9575486530', 'BEXPB1588N', NULL, 'other', '0', '2', '32773720828', 'SBI', 'LAKHANPUR', 'SBIN0014251', '202012300112251.jpeg', 'NO', '202012300112252.jpeg', '202012300123232.jpeg', NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-30 13:12:25', '2020-12-30 13:23:23'),
(143, 'SURESH KUMAR AGRAWAL', 'SURAJ BHAN AGRAWAL', '9425256241', 'AFLPA1936R', NULL, 'other', '0', '2', '50200028769216', 'HDFC BANK', 'LAKHANPUR', 'HDFC0009154', '202012310704581.jpeg', 'NO', '202012310704582.jpeg', '202012310704582.jpeg', NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-31 07:04:58', '2020-12-31 07:04:58'),
(144, 'SUNNY BANSAL', 'ASHOK BANSAL', '9424266186', 'BCOPB1155Q', NULL, 'other', '0', '2', '2153100029', 'CENTRAL BANK OF INDIA', 'LAKHANPUR', 'CBIN0281685', '202012310725051.jpeg', 'NO', '202012310725052.jpeg', '202012310725052.jpeg', NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-31 07:25:05', '2020-12-31 07:26:23'),
(145, 'Awtar singh parvindar singh bhatiya', NULL, NULL, NULL, NULL, 'other', '0', '2', '049310011003981', 'ANDHRA BANK', 'RAIPUR', 'ANDB0000493', NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-31 07:39:57', '2020-12-31 07:39:57'),
(146, 'RAMASHISH', 'PANU SONI', '8319434503', 'AXIPRS8548P', NULL, 'other', '0', '2', '50100183127714', 'HDFC BANK', 'AMBIKAPUR', 'HDFC0000917', '202012310834441.jpeg', 'NO', '202012310834442.jpeg', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-31 08:34:44', '2020-12-31 08:34:44'),
(147, 'MASHIR ALAM', 'ZAFIR ALAM', NULL, 'APEPA0458F', NULL, 'other', '0', '2', '3006007623', 'CENTRAL BANK OF INDIA', 'AMBIKAPUR', 'CBIN0280797', '202012310916401.jpeg', 'NO', '202012310916402.jpeg', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-31 09:16:40', '2020-12-31 09:16:40'),
(148, 'MONA KHAN', 'NASEEM USMANIYA', NULL, 'EUAPK7144H', NULL, 'other', '0', '2', '37365252348', 'STATE BANK OF INDIA', 'BISHRAMPUR', 'SBIN0002836', '202012310924451.jpeg', 'NO', '202012310924452.jpeg', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-31 09:24:45', '2020-12-31 09:24:45'),
(149, 'VIKASH KUMAR', 'SUNIL KUMAR MANDAL', '8359999556', 'DBZPK2644P', NULL, 'other', '0', '2', '33034415219', 'STATE BANK OF INDIA', 'BHATGAON', 'SBIN0007065', '202012310930401.jpeg', 'NO', '202012310930402.jpeg', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-31 09:30:40', '2020-12-31 09:30:40'),
(150, 'ANIL KHODIYAR', 'MOHAN LAL KHODIYAR', '9009290684', 'ANCPK8477A', NULL, 'other', '0', '2', '2153620470', 'CENTRAL BANK OF INDIA', 'SARAIPALI', 'CBIN0280806', '202012310954481.jpeg', 'NO', '202012310954482.jpeg', '202012310954482.jpeg', NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-31 09:54:48', '2020-12-31 09:54:48'),
(151, 'SURESH SAHU', NULL, NULL, NULL, NULL, 'other', '0', '2', '37285275455', 'STATE BANK OF INDIA', 'LAKHANPUR', 'SBIN0014251', NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-31 11:32:56', '2020-12-31 11:32:56'),
(152, 'UDHO SINGH THAKUR', 'SHIVNATH SING THAKUR', '9516426370', 'BMAPT8214J', NULL, 'other', '0', '2', '50100300560410', 'HDFC BANK', 'BASNA', 'HDFC0004143', '202012311239221.jpeg', 'NO', '202012311239222.jpeg', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-31 12:39:22', '2020-12-31 12:39:22'),
(153, 'SAVITRI SAHU', 'GOPAL RAM SAHU', NULL, NULL, NULL, 'other', '0', '2', '50100236203173', 'HDFC BANK', 'LAKHANPUR', 'HDFC0009154', NULL, 'NO', '202012311253542.pdf', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-31 12:53:54', '2020-12-31 12:53:54'),
(154, 'Bhubneshawar PD Jaishwal', 'MOHAN LAL JAISHWAL', '9131762822', NULL, NULL, 'other', '0', '2', '13360100002740', 'BANK OF BARODA', 'AMBIKAPUR', 'BARB0AMBIKA', '202012310100511.jpeg', 'NO', '202012310100512.jpeg', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-31 13:00:51', '2020-12-31 13:00:51'),
(155, 'Mohammad Islam', 'MOHAMMAD JUMMAN', NULL, NULL, NULL, 'other', '0', '2', '02600100006843', 'UCO Bank', 'BILASPUR', 'UCBA0000260', '202012310106121.jpeg', 'NO', '202012310106122.jpeg', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-31 13:06:12', '2020-12-31 13:06:12'),
(156, 'IRSAD KHAN', 'SHOYEB KHAN', NULL, NULL, NULL, 'other', '0', '2', '280401500138', 'ICICI BANK', 'PALI (KORBA0', 'ICIC0002804', NULL, 'NO', '202012310115082.jpeg', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2020-12-31 13:15:08', '2020-12-31 13:15:08'),
(157, 'SARDAR GYAN SINGH', 'SARDAR JOGINDER SINGH', '9977559872', 'BOQPS1028R', NULL, 'other', '0', '2', '762901011000656', 'VIJAYA BANK', 'MAHASAMUND', 'VIJB0007629', '202101021147201.jpeg', 'NO', '202101021147202.jpeg', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2021-01-02 11:47:20', '2021-01-02 11:47:20'),
(158, 'SURTI DAS', NULL, '8226044312', NULL, NULL, 'other', '0', '2', '2679000100161447', 'PUNJAB NATIONAL BANK', 'BASNA', 'PUNB0267900', '202101061007291.jpeg', 'NO', '202101061007292.jpeg', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2021-01-06 10:07:29', '2021-01-06 10:07:29'),
(159, 'SUDHIR KUMAR MANZI', 'PRAKASH MANZI', NULL, 'BLTPM5321H', NULL, 'other', '0', '7', '1259104000077190', 'IDBI BANK', 'GUMLA', 'IBKL0001259', NULL, 'NO', '202101080945052.pdf', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2021-01-06 10:28:30', '2021-01-08 09:45:05'),
(160, 'SHAMBHU KUMAR MANJHI', 'PRAKASHA MANJHI', NULL, 'AKGPM6360B', NULL, 'other', '0', '7', '1259102000003667', 'IDBI BANK', 'GUMLA', 'IBKL0001259', NULL, 'NO', '202101061110002.pdf', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2021-01-06 11:10:00', '2021-01-06 11:10:00'),
(165, 'DEVENDRA KUMAR AGRAWAL', 'BHOLERAM AGRAWAL', '7697603333', 'BUUPA8741D', NULL, 'other', '0', '2', '1730104000008365', 'IDBI', 'SARAIPALI', 'IBKL0001730', '202101080901351.jpeg', 'NO', '202101081036572.jpeg', '202101080901362.jpeg', NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-08 09:01:36', '2021-01-08 10:36:57'),
(166, 'RAMESH PRADHAN', 'GANGA PRADHAN', NULL, 'DSVPP3442P', NULL, 'other', '0', '2', '37374381688', 'STATE BANK OF INDIA', 'Raigarh Chattisgarh', 'SBIN0003260', '202101160912351.jpeg', 'NO', '202101160912352.jpeg', NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-08 09:21:16', '2021-01-16 09:12:35'),
(167, 'NAND KUMAR YADAV', 'SITA RAM YADAV', '9893790951', 'AHUPY6217A', NULL, 'other', '0', '2', '32693596141', 'STATE BANK OF INDIA', 'SARAIPALI', 'SBIN0009750', '202101080932201.jpeg', 'NO', '202101080932202.jpeg', NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-08 09:32:20', '2021-01-08 09:32:20'),
(168, 'RAAG SPONG AND POWER PVT. LTD', NULL, NULL, 'AAICR7839P', NULL, 'other', '0', '2', '918020054530678', 'AXIS BANK', 'MOWA', 'UTIB0003599', NULL, 'NO', '202101081027252.jpeg', NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-08 10:27:26', '2021-01-08 10:27:26'),
(169, 'VIJAY KUMAR AGRAWAL', 'SURAJ BHAN AGRAWAL', '7000494343', 'ADUPA4596J', NULL, 'other', '0', '2', '3488612086', 'CENTRAL BANK OF INDIA', 'LAKHANPUR', 'CBIN0281685', '202101081054321.jpeg', 'NO', '202101081054322.jpeg', '202101081054322.jpeg', NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-08 10:54:32', '2021-01-08 10:58:20'),
(170, 'RAJENDRA KUMAR PATEL', 'NAND KUMAR PATEL', '8319202221', 'BOWPP8796K', NULL, 'other', '0', '2', '30575960531', 'STATE BANK OF INDIA', 'BICHHIYA', 'SBIN0009415', '202101081250221.jpeg', 'NO', '202101081250222.jpeg', '202101081250222.jpeg', NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-08 12:50:22', '2021-01-08 12:50:22'),
(171, 'SANTOSH BANSAL', 'OM PRAKASH BANSAL', '9425291536', 'CIKPB9742A', NULL, 'other', '0', '2', '915010041182523', 'AXIS BANK', 'SARAIPALI', 'UTIB0002050', '202101080120551.jpeg', 'NO', '202101080120552.jpeg', '202101080120552.jpeg', NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-08 13:20:55', '2021-01-08 13:20:55'),
(172, 'SUNIL BIHARI', '0', '0', '0', '0', 'other', '0', '2', '0', '0', '0', '0', NULL, 'NO', NULL, NULL, '0', '0', '0', '0', '1', NULL, 5, '2021-01-09 10:38:50', '2021-01-09 10:38:50'),
(173, 'RAMJI TIWARI', '0', '0', '0', NULL, 'other', '0', '2', '0', '0', '0', '0', NULL, 'NO', NULL, NULL, '0', '0', '0', '0', '1', NULL, 5, '2021-01-09 12:22:06', '2021-01-09 12:22:06'),
(174, 'MOD. ALIM ASRAFI', '0', '0', '0', '0', 'self', '0', '2', '0', '0', '0', '0', NULL, 'NO', NULL, NULL, '0', '0', '0', '0', '1', NULL, 5, '2021-01-11 12:14:44', '2021-01-11 12:14:44'),
(175, 'MOKHATAR ANSARI', 'JASIMUDIN ANSARI', NULL, 'ASAPA8493M', NULL, 'other', '0', '7', '917010060575601', 'AXIS BANK LTD', 'GARWA', 'UTIB0002577', NULL, 'NO', '202101131002322.pdf', NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-13 10:02:32', '2021-01-13 10:02:32'),
(176, 'SURINDER KAUR', 'MALKIT SINGH CHAHAL', NULL, 'EGUPK2940D', NULL, 'other', '0', '2', '50200023986526', 'HDFC BANK', 'SARAIPALI', 'HDFC0003930', '202101131229561.jpeg', 'NO', '202101131238272.jpeg', '202101131229562.jpeg', NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-13 12:29:56', '2021-01-13 12:38:27'),
(177, 'MANISH PRADHAN', 'SANKIRTAN PRADHAN', NULL, '0', NULL, 'other', '0', '2', '50200038578900', 'HDFC BANK', 'SARAIPALI', 'HDFC0003930', NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-13 12:46:37', '2021-01-13 12:46:37'),
(178, 'MANJEET SINGH SALUJA', 'PRITAM SINGH SALUJA', NULL, 'ATEPS4290F', NULL, 'other', '0', '2', '1216104000013633', 'IDBI BANK', 'RAWABHATA, URLA IND AREA, RAIPUR', 'IBKL0001216', '202101140758001.pdf', 'NO', '202101140758002.pdf', NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-14 07:58:00', '2021-01-14 07:58:00'),
(179, 'SHEIKH NAIM', 'MOHAMMAD AJIMUDDIN', NULL, 'BKSPN7260C', NULL, 'other', '0', '2', '20443431911', 'STATE BANK OF INDIA', 'POTHORA', 'SBIN0002885', '202101140827371.pdf', 'NO', '202101140827372.pdf', NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-14 08:27:37', '2021-01-14 08:27:37'),
(180, 'SUBHASH GUPTA', 'RAM KUMAR GUPTA', '9826119923', 'AGIPG1236E', NULL, 'other', '0', '2', '37545706126', 'STATE BANK OF INDIA', 'AMBIKAPUR', 'SBIN0000310', '202101270924191.jpeg', 'NO', '202101270924192.jpeg', '202101270924192.pdf', NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-14 08:38:59', '2021-01-27 09:24:20'),
(181, 'BIRJU YADAV', 'DHANI RAM YADAV', NULL, 'AMEPY7101Q', NULL, 'other', '0', '2', '20463642839', 'STATE BANK OF INDIA', 'PITHORA', 'SBIN0002885', '202101140915001.pdf', 'NO', '202101140915002.pdf', NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-14 09:15:00', '2021-01-14 09:15:00'),
(182, 'ASHOK KUMAR AGRAWAL HUF', 'BHADARAM AGRAWAL', '9425505451', 'AAHHA6299J', NULL, 'other', '0', '2', '11293377345', 'STATE BANK OF INDIA', 'SARAIPALI', 'SBIN0009750', '202101141029271.pdf', 'NO', '202101141029272.pdf', NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-14 10:29:27', '2021-01-14 10:29:27'),
(183, 'AKHTAR ALAM ANSARI', 'FARUK ANSARI', NULL, 'BBHPA4980N', NULL, 'other', '0', '7', '2210898793', 'CENTRAL BANK OF INDAI', 'GARHWA', 'CBIN0281630', '202101141114441.pdf', 'NO', '202101141114442.pdf', NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-14 11:14:44', '2021-01-14 11:14:44'),
(184, 'JAMIL AHAMAD KHAN', 'SHAFI AHAMAD KHAN', '9304084266', 'BOYPK1625L', NULL, 'other', '0', '2', '2210933670', 'CENTRAL BANK OF INDIA', 'GARHWA', 'CBIN0281630', '202101141225001.jpeg', 'NO', '202101141225002.jpeg', '202101141225002.jpeg', NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-14 12:25:00', '2021-01-14 12:25:00'),
(185, 'SHIVCHAND YADAV', NULL, NULL, NULL, NULL, 'other', '0', '7', '31145537891', 'STATE BANK OF INDIA', 'RANKA', 'SBIN0003490', NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-14 12:45:27', '2021-01-14 12:45:27'),
(186, 'BABITA PAL', 'AJESH PAL', '934033321', 'EMZPP2680C', NULL, 'other', '0', '2', '50200036919211', 'HDFC BANK', 'RAMANUJGANJ', 'HDFC0003327', '202101140115071.jpeg', 'NO', '202101140115072.jpeg', '202101140115072.jpeg', NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-14 13:15:07', '2021-01-14 13:15:07'),
(187, 'PINKU SINGHA', 'BIBHUTI SINGHA', NULL, 'DDUPS2755G', NULL, 'other', '0', '2', '50100223906027', 'HDFC BANK', 'RAIGARH', 'HDFC0001454', '202101140203311.pdf', 'NO', '202101140203312.pdf', NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-14 14:03:31', '2021-01-14 14:03:31'),
(188, 'MOKHTAR ALAM', 'MOHAMMAD INAYAT', NULL, 'ARYPA9268M', NULL, 'other', '0', '7', '1660102000003414', 'IDBI BANK', 'GARHWA', 'IBKL0001660', '202101140217301.pdf', 'NO', '202101140217302.pdf', NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-14 14:17:31', '2021-01-14 14:17:31');
INSERT INTO `truckowners` (`id`, `owner_name`, `father_name`, `mobile`, `pan_no`, `address`, `owner_type`, `gst_no`, `state_code`, `ac_no`, `bank_name`, `branch_name`, `ifsc_code`, `document`, `tds_status`, `upload_pan_card`, `upload_aadhar_card`, `alter_ac_no`, `alter_bank_name`, `alter_branch_name`, `alter_ifsc_code`, `status`, `ipaddress`, `createdby`, `created_at`, `updated_at`) VALUES
(189, 'AYUSH KEDIA', 'ANAND KUMAR KEDIA', '7389657416', 'COMPK3284E', NULL, 'other', '0', '2', '50200027322110', 'HDFC BANK', 'PAMGARH', 'HDFC0004305', '202101150852441.pdf', 'NO', '202101150852442.pdf', NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-15 08:52:44', '2021-01-15 08:52:44'),
(190, 'PARMESHWAR VARMA', 'UDAYRAM VERMA', '9098769838', 'ASQPV85301', NULL, 'other', '0', '2', '7245000100070956', 'PUNJAB NAITIONAL BANK', 'SHEORINARAYAN', 'PUNB0724500', '202101150917411.pdf', 'NO', '202101150917412.pdf', NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-15 09:17:41', '2021-01-15 09:21:23'),
(191, 'PRAMOD KUMAR SAHU', 'SAKHARAM SAHU', '9165720755', 'EVYPS8325B', NULL, 'other', '0', '2', '919010002279086', 'AXIS BANK', 'BALODA BAZAR', 'UTIB0002591', '202101150934231.jpeg', 'NO', '202101150934232.jpeg', NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-15 09:34:23', '2021-01-15 09:34:23'),
(193, 'SHIV PRASAD SAHU', 'RESHM LAL SAHU', '6260315116', 'EOCPS1729L', NULL, 'other', '0', '2', '20460810091', 'STATE BANK OF INDIA', 'JAIJAIPUR (CHAMPA)', 'SBIN0012133', '202101150948501.jpeg', 'NO', '202101160651482.jpeg', '202101150948502.jpeg', NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-15 09:48:50', '2021-01-16 06:51:48'),
(194, 'MD.SHAKIL AHMAD ANSARI', 'MD.GULUHAR ANSARI', NULL, 'AWIPA5184M', NULL, 'other', '0', '2', '2365603023', 'CENTRAL BANK OF INDIA', 'KUNNI', 'CBIN0282777', '202101160927571.jpeg', 'NO', '202101160927572.jpeg', NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-16 09:27:58', '2021-01-16 09:27:58'),
(195, 'YAGYAWANT VERMA & TRIVENI PRASAD', 'TRIVENI PRASAD VERMA', '7879411558', '0', NULL, 'other', '0', '2', '33975298683', 'STATE BANK OF INDIA', 'BILAI (DURG)', 'SBIN0004678', '202101160944531.pdf', 'NO', '202101160944532.jpeg', '202101160944532.jpeg', NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-16 09:44:53', '2021-01-16 09:44:53'),
(196, 'BABU LAL AGRAWAL', 'DHARM CHANDRA AGRAWAL', '9826704356', 'AQKPA0081F', NULL, 'other', '0', '2', '25260110002933', 'UCO BANK', 'AMBIKAPUR', 'UCBA0002526', '202101161000011.jpeg', 'NO', '202101161000012.jpeg', '202101161000012.jpeg', NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-16 10:00:01', '2021-01-16 10:00:01'),
(197, 'DASAI PRAJAPATI', 'ANATU PRAJAPATI', '7000836118', 'BSDPP0046D', NULL, 'other', '0', '2', '20293437864', 'STATE BANK OF INDIA', 'BALRAMPUR', 'SBIN0015464', '202101161009081.jpeg', 'NO', '202101161009082.jpeg', '202101161009082.jpeg', NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-16 10:09:08', '2021-01-16 10:09:08'),
(198, 'ANWARUL KHAN', 'SAMOJ KHAN', NULL, 'BUFPK0188R', NULL, 'other', '0', '2', '32851565501', 'STATE  BANK OF INDIA', 'BALRAMPUR', 'SBIN0015464', '202101161018361.jpeg', 'NO', '202101161018362.jpeg', NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-16 10:18:36', '2021-01-16 10:18:36'),
(199, 'GAJENDRA CHOUDHARY', 'TARA CHAND CHOUDHARY', '8770471049', 'BBGPC5439P', NULL, 'other', '0', '2', '6111000100090498', 'PUNJAB NATIONAL BANK', 'MAHASAMUND', 'PUNB0611100', '202101180752381.pdf', 'NO', '202101180752382.pdf', NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-18 07:52:38', '2021-01-18 07:52:38'),
(200, 'BHAJAN LAL YADAV', 'PYARE LAL YADAV', '9575206633', 'ATKY7669Q', NULL, 'other', '0', '2', '10293211123903', 'UCO BANK', 'KASDOL', 'UCBA0001029', '202101180813061.pdf', 'NO', '202101180813062.pdf', NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-18 08:13:06', '2021-01-18 08:13:06'),
(201, 'ANMOL GARG', 'SHANKAR GARG', '8770058023', 'BQQPG4801C', NULL, 'other', '0', '2', '3926561102', 'CENTRAL BANK OF INDIA', 'RAJPUR', 'CBIN0284727', '202101180845091.pdf', 'NO', '202101180845092.pdf', NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-18 08:45:09', '2021-01-18 08:45:09'),
(202, 'MANTU AGRAWAL', 'SHYAM LAL AGRAWAL', '9584752056', 'AFZPA7685K', NULL, 'other', '0', '2', '30434301525', 'STATE BANK OF INDIA', 'BICHIYA', 'SBIN0009415', '202101181147111.pdf', 'NO', '202101181147112.pdf', NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-18 11:02:52', '2021-01-18 11:47:11'),
(203, 'SATENDRA PRASAD GUPTA', 'RAJENDRA PRASAD GUPTA', NULL, 'BASPG4593F', NULL, 'other', '0', '7', '36816384879', 'STATE BANK OF INDIA', 'PALAMU', 'SBIN0006351', '202101181145251.pdf', 'NO', '202101181145252.pdf', NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-18 11:20:42', '2021-01-18 11:45:25'),
(204, 'ANURAG JHA', 'SUKHDEV JHA', '7389593886', 'AYEPJ1612K', NULL, 'other', '0', '2', '914010024827271', 'AXIS BANK', 'MAHASAMUND', 'UTIB0002050', '202101181246011.pdf', 'NO', '202101181246012.pdf', NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-18 12:46:01', '2021-01-18 12:46:01'),
(205, 'MINAKSHI MISHRA', 'SACHIDA NAND DWIVEDI', '9752485645', 'BANPK8169G', NULL, 'other', '0', '2', '50100161532907', 'HDFC BANK', 'AMBIKAPUR', 'HDFC0000917', '202101181252301.pdf', 'NO', '202101181252312.pdf', NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-18 12:52:31', '2021-01-18 12:52:31'),
(206, 'ASHOK KUMAR GUPTA', 'RAMNARAYAN SAHU', NULL, 'BZNPG2612P', NULL, 'other', '0', '7', '10180001978804', 'BANDHAN BANK', 'DALTONGANJ', 'BDBL0001819', '202101180109161.pdf', 'NO', '202101180109162.pdf', NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-18 13:09:16', '2021-01-18 13:09:16'),
(207, 'ASHOK KUMAR AGRAWAL', 'BODHA RAM AGRAWAL', '9424184719', 'ASZPA6532E', NULL, 'other', '0', '2', '2153675179', 'CENTRAL BANK', 'SARAIPALI', 'CBIN0280806', '202101180120211.pdf', 'NO', '202101180120212.pdf', NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-18 13:20:21', '2021-01-18 13:20:21'),
(208, 'RAHUL AGRAWAL', 'VIRENDRA AGRAWAL', '7770880041', 'BIDPA1077P', NULL, 'other', '0', '2', '2679000100211724', 'PUNJAB NATIONAL BANK', 'MAHASAMUND', 'PUNB0267900', '202101180139401.pdf', 'NO', '202101180139402.pdf', NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-18 13:39:40', '2021-01-18 13:39:40'),
(209, 'MANOJ KUMAR SHINDEY', 'BHAIYA SAHAB SHINDEY', '8319002682', NULL, NULL, 'other', '0', '2', '6111000100024556', 'PUNJAB NATIONAL BANK', 'SARAIPALI', 'PUNB0611100', '202101190811071.pdf', 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-19 07:53:39', '2021-01-19 08:11:07'),
(210, 'TARACHAND CHOUDHARY', NULL, '8770471049', NULL, NULL, 'other', '0', '2', '6111000100073215', 'PUNJAB NATIONAL BANK', 'SARAIPALI', 'PUNB0611100', NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-19 08:24:46', '2021-01-19 08:24:46'),
(211, 'Upendra Kumar Mehta', 'BALESHWAR PRASAD MEHTA', '8578027004', 'AZFPM3335A', NULL, 'other', '0', '7', '11590332688', 'STATE BANK OF INDIA', 'KEDLA', 'SBIN0005993', '202101191030531.jpeg', 'NO', '202101191030532.jpeg', NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-19 10:30:53', '2021-01-19 10:32:37'),
(212, 'VISHWAJEET BEHERA', 'DAMODAR PRASAD BEHERRA', '9131886969', 'ATFP6437Q', NULL, 'other', '0', '2', '1730104000035255', 'IDBI BANK', 'MAHASAMUND', 'IBKL0001730', '202101191117371.pdf', 'NO', '202101191117372.pdf', NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-19 11:17:37', '2021-01-19 11:17:37'),
(213, 'SANTOSH KUMAR AGRAWAL', 'LETE PARSADILAL AGRAWAL', NULL, 'ADYPA3973F', NULL, 'other', '0', '2', '36502642828', 'STATE BANK OF INDIA', 'RAMANUJGANJ', 'SBIN0001331', '202101191151001.jpeg', 'NO', '202101191151002.jpeg', '202101191151002.jpeg', NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-19 11:51:00', '2021-01-19 11:51:00'),
(214, 'SATYENDRA SINGH', 'AJAY SINGH', NULL, 'DQCPS2367R', NULL, 'other', '0', '2', '6145310470', 'IDBI BANK', 'KORBA', 'IDIB000K178', '202101191244441.jpeg', 'NO', '202101191244442.jpeg', NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-19 12:44:44', '2021-01-19 12:44:44'),
(215, 'SHEIKH NOORBAKSH', 'SHEIKH PRIBAKASH', '9993858522', 'ADDPJ4847N', NULL, 'other', '0', '2', '1321694236', 'CENTRAL BANK OF INDIA', 'AMBIKAPUR', 'CBIN0280797', '202101200836041.jpeg', 'NO', '202101200836042.jpeg', '202101200836042.jpeg', NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-20 08:36:04', '2021-01-20 08:36:04'),
(216, 'RATI RAM SAHU', 'SADHU RAM SAHU', '7400738000', 'FOXPS4500K', NULL, 'other', '0', '2', '50200041325113', 'HDFC BANK', 'JANJGIR', 'HDFC0009210', '202101201210451.jpeg', 'NO', '202101201210452.jpeg', NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-20 12:10:45', '2021-01-20 12:13:54'),
(217, 'CHHOTELAL SAHU', 'RAMDHAN SAHU', '9111777066', 'GNLPS5288G', NULL, 'other', '0', '2', '5147201000119', 'CENDRA BANK', 'BALODA BAZAR', 'CNRB0005147', '202101201226451.jpeg', 'NO', '202101201226452.jpeg', '202101201226452.jpeg', NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-20 12:26:45', '2021-01-20 12:26:45'),
(218, 'GHASIYA RAM SAHU', 'SUKHAU RAM SAHU', '7389471305', 'CLJPS0698J', NULL, 'other', '0', '2', '36794196207', 'STATE BANK OF INDIA', 'KASDOL', 'SBIN0010829', '202101201236441.jpeg', 'NO', '202101201236442.jpeg', '202101201236442.jpeg', NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-20 12:36:44', '2021-01-20 12:36:44'),
(219, 'SUMEET SINGH CHANDRA', NULL, '7889760211', NULL, NULL, 'other', '0', '2', '919010065882445', 'AXIS BANK', 'KHARSIY', 'UTIB0001823', NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-20 13:00:00', '2021-01-20 13:00:00'),
(220, 'HEERA LAL GUPTA', 'SUKHALAL GUPTA', NULL, 'BZDPG8285L', NULL, 'other', '0', '2', '37153893278', 'STATE BANK OF INDIA', 'BALRAMPUR', 'SBIN0015464', '202101211155321.jpeg', 'NO', '202101211155322.jpeg', '202101211155322.jpeg', NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-21 11:55:32', '2021-01-21 11:55:32'),
(221, 'KAILASH CHAUDHARY', 'BALRAM CHAUDHARY', '88783536622', 'BSHPC5079D', NULL, 'other', '0', '2', '50100228981203', 'HDFC BANK', 'LAKHANPUR', 'HDFC0009154', '202101211206141.jpeg', 'NO', '202101211206142.jpeg', NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-21 12:06:14', '2021-01-21 12:06:14'),
(222, 'SURESH SHARMA', NULL, NULL, 'ATSPS6445A', NULL, 'other', '0', '2', '919020035646768', 'AXIS BANK LTD.', 'TILDA', 'UTIB0001903', NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-21 13:34:07', '2021-01-21 13:34:07'),
(223, 'DURGESH KUMAR GUPTA', 'SHIV PRASAD GUPTA', NULL, 'BJQPG3915A', NULL, 'other', '0', '7', '35260805077', 'STATE BANK OF INDIA', 'TARHASI', 'SBIN0018027', '202101210151081.jpeg', 'NO', '202101210151082.jpeg', NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-21 13:51:08', '2021-01-21 13:51:08'),
(224, 'NAIEM KHAN', 'GULAM RASUL', NULL, 'ATJPK7292E', NULL, 'other', '0', '2', '1554010006446', 'UNITED BANK OF INDIA', 'AMBIKAPUR', 'UTBIOAPR675', NULL, 'NO', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-22 09:15:11', '2021-01-22 09:15:11'),
(225, 'MOHAMMAD GAUSUL MANSURI', 'ABDUL SATTAR MANSURI', NULL, 'BJAPM6023H', NULL, 'other', '0', '2', '1554050003308', 'UNITED BANK OF INDIA', 'AMBIKAPUR', 'UTBIOAPR675', '202101220929561.jpeg', 'NO', '202101220929562.jpeg', '202101220929562.jpeg', NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-22 09:29:56', '2021-01-22 09:29:56'),
(226, 'HABIBULLAH KHAN', 'NASRULLAH KHAN', NULL, 'DNZPK5806B', NULL, 'other', '0', '7', '33765793685', 'STATE BANK OF INDIA', 'Ketatkala', 'SBIN0015582', '202101220951461.jpeg', 'NO', '202101220951462.jpeg', '202101220951462.jpeg', NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-22 09:51:46', '2021-01-22 09:51:46'),
(227, 'SUNIL GUPTA', 'RAMLAKHAN GUPTA', NULL, 'BISPG8751K', NULL, 'other', '0', '2', '34680013397', 'STATE BANK OF INDIA', 'RAMANUJGANJ', 'SBIN0001331', '202101221010431.jpeg', 'NO', '202101221010432.jpeg', NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-22 10:10:43', '2021-01-22 10:10:43'),
(228, 'VIRENDRA KUMAR SINGH', 'LT. RAMO DHANWAN SINGH', NULL, 'BPXPS4717M', NULL, 'other', '0', '2', '10326053685', 'STATE BANK OF INDIA', 'KORBA', 'SBIN0002819', '202101221051361.jpeg', 'NO', '202101221051362.jpeg', '202101221051362.jpeg', NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-22 10:51:36', '2021-01-22 10:51:36'),
(229, 'VISHNU PRASAD GOYAL', 'RAMNIWAS GOYAL', NULL, 'AIQPG8781J', NULL, 'other', '0', '2', '201000037663', 'INDUSLND BANK', 'AMBIKAPUR', 'INDB0000195', '202101221113561.pdf', 'NO', '202101221113562.pdf', NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-22 11:13:56', '2021-01-22 11:13:56'),
(230, 'MOHAMMAD ULEMAN', 'HABIB MIYAN', NULL, 'AEFPU768D', NULL, 'other', '0', '7', '31023745969', 'STATE BANK OF INDIA', 'SHAHPUR', 'SBIN0011815', '202101221134251.jpeg', 'NO', '202101221134252.jpeg', NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-22 11:34:25', '2021-01-22 11:34:25'),
(231, 'SUSHIL KUMAR TANDAN', 'MOHAN TANDAN', '9685634597', 'ABSOT2513L', NULL, 'other', '0', '2', '31016154624', 'STATE BANK OF INDIA', 'BILAIGARH', 'SBIN0005770', '202101221140031.jpeg', 'NO', '202101221140032.jpeg', NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-22 11:40:03', '2021-01-22 11:40:03'),
(232, 'SURESH KUMAR AGRAWAL HUF', 'SURESH KUMAR AGRAWAL', '8770292987', 'AIVPA2930Q', NULL, 'other', '0', '2', '13360100011273', 'BANK OF BARODA', 'AMBIKAPUR', 'BARB0AMBIKA', '202101270902551.pdf', 'NO', '202101270902552.pdf', NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-27 09:02:55', '2021-01-27 09:02:55'),
(233, 'ARUN KUMAR AGRAWAL', 'JODH RAJ AGRAWAL', '9425229198', 'AFLPA2188K', NULL, 'other', '0', '2', '1293104000056595', 'IDBI BANK', 'JANJGIR CHAMPA', 'IBKL0001293', '202101300720391.jpeg', 'NO', '202101300720392.jpeg', '202101300720392.jpeg', NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-01-30 07:20:39', '2021-01-30 07:20:39'),
(234, 'ASHISH JAISWAL', 'PARMEHWAR JAISWAL', '8770562855', 'BGCPJ8202N', NULL, 'self', '0', '2', '3440622463', 'Central Bank Of India', 'AMBIKAPUR', 'CBIN0280797', NULL, 'NO', '202102020927002.jpeg', NULL, NULL, NULL, NULL, NULL, '1', NULL, 6, '2021-02-02 09:22:21', '2021-02-02 09:27:00');

-- --------------------------------------------------------

--
-- Table structure for table `trucks`
--

CREATE TABLE `trucks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `truck_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `truckowner_id` int(11) NOT NULL,
  `tructype_id` int(11) NOT NULL,
  `truck_model` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manufacturer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chassisno` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `engineno` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `ipaddress` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createdby` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trucks`
--

INSERT INTO `trucks` (`id`, `truck_number`, `truckowner_id`, `tructype_id`, `truck_model`, `manufacturer`, `chassisno`, `engineno`, `document`, `status`, `ipaddress`, `createdby`, `created_at`, `updated_at`) VALUES
(6, 'CG06GR8755', 3, 4, '2019', 'ASHOK LEYLAND LTD', 'MB1NBCHD9KREC6672', 'KFHZ403124', 'CG06GR8755.jpeg', 1, NULL, '1', '2020-10-26 05:36:46', '2020-10-27 07:28:39'),
(8, 'CG06GN8855', 3, 4, '2019', 'ASHOK LEYLAND LTD', 'MB1NBCHD8KRJA7468', 'KJHZ100603', 'CG06GN8855.jpeg', 1, NULL, '1', '2020-10-26 05:49:13', '2020-10-27 07:33:32'),
(9, 'CG06GP9755', 112, 4, '2019', 'ASHOK LEYLAND LTD', 'MB1NBCHD3KRJA8561', 'JKHZ106786', 'CG06GP9755.jpeg', 1, '122.168.106.199', '5', '2020-10-27 03:07:49', '2020-12-21 01:40:54'),
(10, 'CG06GQ9155', 3, 4, '2019', 'ASHOK LEYLAND LTD', 'MB1NBCHD1KRFC0934', 'KFHZ402292', 'CG06GQ9155.jpeg', 1, NULL, '1', '2020-10-27 03:18:48', '2020-10-27 07:34:56'),
(11, 'CG06GP9955', 3, 4, '3/2019', 'ASHOK LEYLAND LTD', 'MB1NBCHD8KRGB6432', 'KGHZ000694', 'CG06GP9955.jpeg', 1, NULL, '1', '2020-10-27 03:20:11', '2020-10-27 07:35:53'),
(12, 'CG04LP8877', 3, 3, '11/2016', 'ASHOK LEYLAND LTD', 'MB1NACFD5GPTV9806', 'GVPZ139092', 'CG04LP8877.jpeg', 1, NULL, '1', '2020-10-27 03:24:09', '2020-10-27 07:37:10'),
(13, 'CG06GP9855', 3, 4, '3/2019', 'ASHOK LEYLAND LTD', 'MB1NBCHD9KRGB6343', 'KGHZ400637', 'CG06GP9855.jpeg', 1, NULL, '1', '2020-10-27 03:25:53', '2020-10-27 07:38:23'),
(14, 'CG04CV3955', 3, 1, '06/2007', 'ASHOK LEYLAND LTD', '448026DSZ117255', '70D62567455', 'CG04CV3955.jpeg', 1, NULL, '1', '2020-10-27 03:28:02', '2020-10-27 07:38:54'),
(15, 'CG06GQ9555', 3, 4, '4/2019', 'ASHOK LEYLAND LTD', 'MB1NBCHD0KRFC0665', 'KGHZ401339', 'CG06GQ9555.jpeg', 1, NULL, '1', '2020-10-27 04:09:40', '2020-10-27 07:39:45'),
(16, 'CG06GM7555', 3, 3, '6/2018', 'ASHOK LEYLAND LTD', 'MAT541109MF20850', 'IS85.9B4S180T181F63704430', 'CG06GM7555.jpeg', 1, NULL, '1', '2020-10-27 04:49:02', '2020-10-27 07:40:33'),
(17, 'CG06GM6555', 3, 3, '6/2018', 'ASHOK LEYLAND LTD', 'MAT541109J1F20855', 'ISB5.9B4S180T181F63706546', 'CG06GM6555.jpeg', 1, NULL, '1', '2020-10-27 04:51:38', '2020-10-27 07:41:11'),
(18, 'CG06GM8555', 3, 3, '5/2018', 'ASHOK LEYLAND LTD', 'MB1NACHD0JPDD4542', 'JDPZ122664', 'CG06GM8555.jpeg', 1, NULL, '1', '2020-10-27 05:00:27', '2020-10-27 07:41:52'),
(19, 'CG06GM3555', 3, 3, '5/2018', 'ASHOK LEYLAND LTD', 'MB1NACHD1JPDD4825', 'JDPZ123421', 'CG06GM3555.jpeg', 1, NULL, '1', '2020-10-27 05:02:49', '2020-10-27 07:42:28'),
(20, 'CG06GM4555', 3, 3, '4/2018', 'ASHOK LEYLAND LTD', 'MB1NACHD5JPEC8738', 'JEPZ117186', 'CG06GM4555.jpeg', 1, NULL, '1', '2020-10-27 05:05:17', '2020-10-27 07:43:56'),
(21, 'CG06GL9555', 3, 3, '4/2018', 'TATA MOTORS LTD', 'MAT541070J3D10695', 'ISBE5.91804081C6381721', 'CG06GL9555.jpeg', 1, NULL, '1', '2020-10-27 05:08:42', '2020-10-27 07:44:19'),
(22, 'CG06GL8555', 3, 3, '4/2018', 'TATA MOTORS LTD', 'MAT541070J3D10705', 'ISBE5.91804081C63678458', 'CG06GL8555.jpeg', 1, NULL, '1', '2020-10-27 05:12:06', '2020-10-27 07:44:42'),
(23, 'CG06GM9555', 3, 3, '5/2018', 'ASHOK LEYLAND LTD', 'MB1NACHD6JPDD4982', 'JDPZ123694', 'CG06GM9555.jpeg', 1, NULL, '1', '2020-10-27 05:14:10', '2020-10-27 07:45:10'),
(24, 'CG06GM8855', 3, 3, '8/2018', 'MAHINDRA & MAHINDRA LTD', 'MA1PHAPHDJ6H97430', 'EFJZH19794', 'CG06GM8855.jpeg', 1, NULL, '1', '2020-10-27 05:16:01', '2020-10-27 07:45:32'),
(25, 'CG06GN3555', 3, 3, '9/2018', 'MAHINDRA & MAHIDRA', 'MA1PHAPHDJ6J98252', 'VCJZJ21982', 'CG06GN3555.jpeg', 1, NULL, '1', '2020-10-27 05:17:49', '2020-10-27 07:46:01'),
(26, 'CG06GM2555', 3, 3, '5/2018', 'ASHOK LEYLAND LTD', 'MB1NACHD8JPDD4806', 'JDPZ123602', 'CG06GM2555.jpeg', 1, NULL, '1', '2020-10-27 05:19:45', '2020-10-27 08:05:06'),
(27, 'CG04J8455', 3, 1, '1/2014', 'TATA MOTORS LTD', '426021DV7112222', '40D62326334', 'CG04J8455.jpeg', 1, NULL, '1', '2020-10-27 05:46:55', '2020-10-27 07:47:04'),
(28, 'CG08L1560', 3, 2, '0/2011', 'TATA MOTORS LTD', 'MAT466416B5J15538', '11J63181081', '202012211159251.pdf', 1, '122.168.106.199', '5', '2020-10-27 06:02:35', '2020-12-21 06:29:25'),
(29, 'CG06T5555', 3, 2, '0/2013', 'TATA MOTORS LTD', 'MAT466388D3G15201', 'B591803231G63336821', 'CG06T5555.jpeg', 1, NULL, '1', '2020-10-27 06:09:44', '2020-10-27 07:48:01'),
(30, 'CG07AA4545', 3, 2, '2/2013', 'TATA MOTORS LTD', 'MAT466420C5K18717', '21K63294704', '202012211204141.pdf', 1, '122.168.106.199', '5', '2020-10-27 06:11:55', '2020-12-21 06:34:14'),
(31, 'CG06H5555', 3, 2, '8/2013', 'TATA MOTORS LTD', 'MAT466388D3G15381', 'B591803231G63337223', '202012211200241.pdf', 1, '122.168.106.199', '5', '2020-10-27 06:35:19', '2020-12-21 06:30:24'),
(32, 'CG04DB6155', 3, 1, '02/2008', 'TATA MOTORS', '426031BRZ204810', '80B62649962', 'CG04DB6155.jpeg', 1, NULL, '1', '2020-10-27 06:36:55', '2020-10-27 07:49:10'),
(33, 'CG04DB6355', 3, 1, '02/2008', 'TATA MOTORS', '426031BRZ204826', '80B62648574', 'CG04DB6355.jpeg', 1, NULL, '1', '2020-10-27 06:41:24', '2020-10-27 07:49:30'),
(34, 'CG04DB6555', 3, 1, '11/2017', 'TATA MOTORS LTD', '426031LSZ018041', '70K64000231', 'CG04DB6555.jpeg', 1, NULL, '1', '2020-10-27 06:43:02', '2020-10-27 07:50:11'),
(35, 'CG04JA8655', 3, 1, 'TATA MOTORS', '09/2007', '426031JSZ131311', '70J62601930', 'CG04JA8655.jpeg', 1, NULL, '1', '2020-10-27 06:45:59', '2020-10-27 07:50:28'),
(36, 'CG06GR8455', 3, 4, '6/2019', 'ASHOK LEYLAND LTD', 'MB1NBCHD5KRDC8528', 'KDHZ406717', 'CG06GR8455.jpeg', 1, NULL, '1', '2020-10-27 06:47:48', '2020-10-27 07:50:51'),
(37, 'CG06GQ9255', 3, 4, '6/2019', 'ASHOK LEYLAND LTD', 'MB1NBCHDXKRDC8072', 'KDHZ406716', 'CG06GQ9255.jpeg', 1, NULL, '1', '2020-10-27 06:49:48', '2020-10-27 07:51:15'),
(38, 'CG04LR9613', 3, 3, '2/2017', 'ASHOK LEYLAND LTD', 'MB1NACFD1HPEY3513', 'HEPZ115042', 'CG04LR9613.jpeg', 1, '122.168.106.199', '5', '2020-10-27 06:52:24', '2020-12-21 00:40:50'),
(39, 'CG04LP8277', 3, 3, '11/2016', 'ASHOK LEYLAND LTD', 'MB1NACFD4GPTW0414', 'GVPZ139653', 'CG04LP8277.jpeg', 1, '122.168.106.199', '5', '2020-10-27 06:54:18', '2020-12-21 00:42:44'),
(40, 'CG06GR8655', 3, 4, '6/2019', 'ASHOK LEYLAND LTD', 'MB1NBCHD4KRDC8536', 'KDHZ407281', 'CG06GR8655.jpeg', 1, NULL, '1', '2020-10-27 06:55:54', '2020-10-27 07:52:46'),
(41, 'CG06GQ9355', 3, 4, '4/2019', 'ASHOK LEYLAND LTD', 'MB1NBCHD1KRFC0819', 'KFHZ402117', 'CG06GQ9355.jpeg', 1, NULL, '1', '2020-10-27 06:57:38', '2020-10-27 07:53:07'),
(42, 'CG06GR8255', 3, 4, '6/2016', 'ASHOK LEYLAND LTD', 'MB1NBCHD2KRDC8454', 'KDHZ406713', 'CG06GR8255.jpeg', 1, NULL, '1', '2020-10-27 06:59:47', '2020-10-27 07:53:35'),
(43, 'CG06GN9955', 3, 4, '1/2019', 'ASHOK LEYLAND LTD', 'MB1NBCHD5KRJA7464', 'KJHZ100586', 'CG06GN9955.jpeg', 1, NULL, '1', '2020-10-27 07:03:07', '2020-10-27 07:53:59'),
(44, 'CG06GR8355', 3, 4, '6/2019', 'ASHOK LEYLAND LTD', 'MB1NBCHD0KRDC8453', 'KDHZ406589', 'CG06GR8355.jpeg', 1, NULL, '1', '2020-10-27 07:05:04', '2020-10-27 08:05:37'),
(45, 'CG06GP9655', 111, 4, '3/2019', 'ASHOK LEYLAND LTD', 'MB1NBCHD6KRGB7353', 'JKHZ108112', 'CG06GP9655.jpeg', 1, '122.168.106.199', '5', '2020-10-27 07:12:06', '2020-12-21 01:38:15'),
(46, 'CG06GR8755', 3, 4, '5/2019', 'ASHOK LEYLAND LTD', 'MB1NBCHD9KREC6672', 'KFHZ403124', 'CG06GR8755.jpeg', 1, NULL, '1', '2020-10-27 07:13:39', '2020-10-27 07:55:04'),
(48, 'CG06GM6555', 3, 4, '6/2018', 'TATA MOTORS LTD', 'MAT541109J1F20855', 'ISB5.9B4S180T181F63706546', 'CG06GM6555.jpeg', 1, NULL, '1', '2020-10-27 07:17:30', '2020-10-27 07:55:56'),
(49, 'CG04JC5216', 113, 2, '11/2011', 'TATA MOTORS', 'MAT466385B3N33989', '11L63203736', '202012211204381.pdf', 1, '122.168.106.199', '5', '2020-10-27 07:18:52', '2020-12-21 06:34:38'),
(50, 'CG06M2555', 3, 2, '05/2012', 'TATA MOTORS', 'MAT466416B5P20044', '11L63207993', '202012211157461.pdf', 1, '122.168.106.199', '5', '2020-10-27 07:20:48', '2020-12-21 06:27:46'),
(51, 'CG04JC6246', 3, 2, '11/2011', 'TATA MOTORS', 'MAT466385B3N33617', '11L63202976', '202012211201331.pdf', 1, '122.168.106.199', '5', '2020-10-27 07:22:02', '2020-12-21 06:31:33'),
(53, 'CG06GN0460', 7, 3, NULL, NULL, NULL, NULL, NULL, 1, NULL, '1', '2020-10-29 03:37:09', '2020-10-29 03:37:09'),
(54, 'CG06GQ5779', 7, 4, NULL, NULL, NULL, NULL, NULL, 1, NULL, '1', '2020-10-29 03:37:42', '2020-10-29 03:37:42'),
(57, 'CG13AA4036', 4, 2, NULL, NULL, NULL, '0', NULL, 1, '122.168.78.131', '2', '2020-11-02 06:16:03', '2020-11-02 06:16:03'),
(58, 'CG13AA4036', 4, 2, NULL, NULL, NULL, '0', NULL, 1, '122.168.104.123', '2', '2020-11-03 01:53:59', '2020-11-03 01:53:59'),
(59, 'CG06GQ7218', 4, 4, NULL, NULL, NULL, '0', NULL, 1, '122.168.104.123', '2', '2020-11-03 01:54:36', '2020-11-03 01:54:36'),
(60, 'CG06GQ7218', 4, 4, NULL, NULL, NULL, '0', NULL, 1, '122.168.104.123', '2', '2020-11-03 01:54:38', '2020-11-03 01:54:38'),
(61, 'CG06GL9388', 4, 3, NULL, NULL, NULL, '0', NULL, 1, '122.168.104.123', '2', '2020-11-03 01:55:11', '2020-11-03 01:55:11'),
(62, 'CG04MD1188', 4, 3, NULL, NULL, NULL, '0', NULL, 1, '122.168.104.123', '2', '2020-11-03 01:56:26', '2020-11-03 01:56:26'),
(63, 'CG06GJ9588', 4, 3, NULL, NULL, NULL, '0', NULL, 1, '122.168.104.123', '2', '2020-11-03 01:56:59', '2020-11-03 01:56:59'),
(64, 'CG13AA4136', 4, 3, NULL, NULL, NULL, '0', NULL, 1, '122.168.104.123', '2', '2020-11-03 01:57:37', '2020-11-03 01:57:37'),
(65, 'CG08AG9941', 3, 3, NULL, NULL, NULL, '0', NULL, 1, '122.168.104.123', '2', '2020-11-03 03:56:28', '2020-11-03 03:56:28'),
(66, 'CG08AG6641', 3, 3, NULL, NULL, NULL, '0', NULL, 1, '122.168.104.123', '2', '2020-11-03 04:05:10', '2020-11-03 04:05:10'),
(67, 'CG06GR8155', 10, 4, '6/2019', 'ASHOK LEYLAND LTD', 'MB1NBCH07KRDC8451', 'KDHZ406712', NULL, 1, '122.168.104.123', '2', '2020-11-03 07:33:14', '2020-11-03 07:33:14'),
(71, 'CG06GG5300', 13, 2, NULL, NULL, NULL, '0', NULL, 1, '122.168.104.123', '2', '2020-11-03 08:14:44', '2020-11-03 08:14:44'),
(72, 'CG06GJ9388', 4, 2, NULL, NULL, NULL, '0', NULL, 1, '122.168.104.123', '2', '2020-11-03 08:25:09', '2020-11-03 08:25:09'),
(73, 'CG22M6255', 20, 2, NULL, NULL, NULL, '0', NULL, 1, '122.168.104.123', '2', '2020-11-04 00:46:05', '2020-11-04 00:46:05'),
(74, 'CG04JC6475', 25, 2, NULL, NULL, NULL, '0', '202012310729171.jpeg', 1, '182.70.247.67', '6', '2020-11-04 01:57:05', '2020-12-31 01:59:17'),
(75, 'CG15DL0415', 14, 2, NULL, NULL, NULL, '0', NULL, 1, '171.61.3.37', '2', '2020-11-05 02:13:02', '2020-11-05 02:13:02'),
(76, 'CG15AC5845', 15, 2, NULL, NULL, NULL, '0', '202101221150021.jpeg', 1, '122.175.152.77', '6', '2020-11-05 02:13:57', '2021-01-22 11:50:02'),
(77, 'CG15AC5846', 15, 2, NULL, NULL, NULL, '0', NULL, 1, '171.61.3.37', '2', '2020-11-05 02:14:24', '2020-11-05 02:14:24'),
(78, 'CG15DF2147', 15, 2, NULL, NULL, NULL, '0', '202101221149191.jpeg', 1, '122.175.152.77', '6', '2020-11-05 02:14:54', '2021-01-22 11:49:19'),
(79, 'CG15DG7670', 15, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.152.77', '6', '2020-11-05 02:15:19', '2021-01-22 11:50:48'),
(80, 'CG15DG8306', 15, 2, NULL, NULL, NULL, '0', '202101221149421.jpeg', 1, '122.175.152.77', '6', '2020-11-05 02:15:45', '2021-01-22 11:49:42'),
(81, 'CG12AY9977', 16, 2, NULL, NULL, NULL, '0', '202101140140361.pdf', 1, '122.175.152.77', '6', '2020-11-05 02:17:21', '2021-01-14 13:40:36'),
(82, 'CG12AW9997', 16, 2, NULL, NULL, NULL, '0', '202101150942591.pdf', 1, '122.175.152.77', '6', '2020-11-05 02:17:49', '2021-01-15 09:42:59'),
(83, 'CG15DH2294', 17, 2, NULL, NULL, NULL, '0', NULL, 1, '171.61.3.37', '2', '2020-11-05 02:18:28', '2020-11-05 02:18:28'),
(84, 'CG15DG7835', 17, 2, NULL, NULL, NULL, '0', NULL, 1, '171.61.3.37', '2', '2020-11-05 02:18:53', '2020-11-05 02:18:53'),
(85, 'CG15AC5764', 18, 2, NULL, NULL, NULL, '0', '202101081156041.jpeg', 1, '171.61.12.118', '6', '2020-11-05 02:19:48', '2021-01-08 11:56:04'),
(86, 'CG15AC5713', 234, 2, '0', '0', '0', '0', NULL, 1, '110.224.199.247', '6', '2020-11-05 02:22:12', '2021-02-02 09:32:28'),
(87, 'CG15DE1200', 234, 2, '0', '0', '0', '0', NULL, 1, '110.224.199.247', '6', '2020-11-05 02:22:37', '2021-02-02 09:33:13'),
(88, 'CG15AC5714', 234, 2, '0', '0', '0', '0', NULL, 1, '110.224.199.247', '6', '2020-11-05 02:23:10', '2021-02-02 09:31:43'),
(89, 'CG15DJ5102', 19, 2, NULL, NULL, NULL, '0', '202012310802151.jpeg', 1, '182.70.247.67', '6', '2020-11-05 02:31:19', '2020-12-31 02:32:15'),
(90, 'CG15DH5785', 6, 2, NULL, NULL, NULL, '0', '202101081155171.jpeg', 1, '171.61.12.118', '6', '2020-11-05 02:32:07', '2021-01-08 11:55:17'),
(91, 'CG15AC5551', 6, 2, NULL, NULL, NULL, '0', '202101081154531.jpeg', 1, '171.61.12.118', '6', '2020-11-05 02:42:21', '2021-01-08 11:54:53'),
(92, 'CG15DG1991', 6, 2, NULL, NULL, NULL, '0', '202101081154271.jpeg', 1, '171.61.12.118', '6', '2020-11-05 02:42:53', '2021-01-08 11:54:27'),
(93, 'CG15DC6757', 21, 3, NULL, NULL, NULL, '0', '202012260117421.jpeg', 1, '182.70.210.206', '6', '2020-11-05 02:43:23', '2020-12-26 07:47:42'),
(94, 'CG15DH1699', 21, 2, NULL, NULL, NULL, '0', '202012260118241.jpeg', 1, '182.70.210.206', '6', '2020-11-05 02:44:04', '2020-12-26 07:48:24'),
(95, 'CG15DE0699', 21, 2, NULL, NULL, NULL, '0', NULL, 1, '171.61.3.37', '2', '2020-11-05 02:44:31', '2020-11-05 02:44:31'),
(96, 'CG22H9275', 134, 2, NULL, NULL, NULL, '0', '202012260115121.jpeg', 1, '182.70.211.25', '6', '2020-11-05 02:44:54', '2021-01-14 11:33:15'),
(97, 'CG04MP7711', 23, 2, NULL, NULL, NULL, '0', NULL, 1, '171.61.3.37', '2', '2020-11-05 02:46:16', '2020-11-05 02:46:16'),
(98, 'CG04LW4111', 23, 2, NULL, NULL, NULL, '0', NULL, 1, '171.61.3.37', '2', '2020-11-05 02:46:45', '2020-11-05 02:46:45'),
(99, 'CG15DE7837', 24, 2, NULL, NULL, NULL, '0', '202101081047391.jpeg', 1, '171.61.12.118', '6', '2020-11-05 02:47:35', '2021-01-08 10:47:39'),
(100, 'CG15DH2837', 24, 2, NULL, NULL, NULL, '0', '202101081048061.jpeg', 1, '171.61.12.118', '6', '2020-11-05 02:48:06', '2021-01-08 10:48:06'),
(101, 'CG04LW3711', 26, 2, NULL, NULL, NULL, '0', NULL, 1, '171.61.3.37', '2', '2020-11-05 02:48:57', '2020-11-05 02:48:57'),
(102, 'CG22G7140', 27, 3, NULL, NULL, NULL, '0', '202012261253111.jpeg', 1, '182.70.210.206', '6', '2020-11-05 03:03:00', '2020-12-26 07:23:11'),
(103, 'CG15DJ5161', 29, 2, NULL, NULL, NULL, '0', '202101140124471.jpeg', 1, '122.175.152.77', '6', '2020-11-05 03:03:27', '2021-01-14 13:24:47'),
(104, 'CG15DE3903', 30, 2, NULL, NULL, NULL, '0', NULL, 1, '171.61.3.37', '2', '2020-11-05 03:04:08', '2020-11-05 03:04:08'),
(105, 'CG15DG6021', 30, 2, NULL, NULL, NULL, '0', NULL, 1, '171.61.3.37', '2', '2020-11-05 03:04:44', '2020-11-05 03:04:44'),
(106, 'CG15DH4025', 31, 2, NULL, NULL, NULL, '0', NULL, 1, '171.61.3.37', '2', '2020-11-05 03:05:12', '2020-11-05 03:05:12'),
(107, 'CG15DH4225', 31, 2, NULL, NULL, NULL, '0', NULL, 1, '171.61.3.37', '2', '2020-11-05 03:05:38', '2020-11-05 03:05:38'),
(108, 'CG15DH4125', 31, 2, NULL, NULL, NULL, '0', NULL, 1, '171.61.3.37', '2', '2020-11-05 03:06:05', '2020-11-05 03:06:05'),
(109, 'CG04LZ4511', 32, 2, NULL, NULL, NULL, '0', NULL, 1, '171.61.3.37', '2', '2020-11-05 03:06:45', '2020-11-05 03:06:45'),
(110, 'CG04MQ6302', 33, 2, NULL, NULL, NULL, '0', NULL, 1, '171.61.3.37', '2', '2020-11-05 03:07:12', '2020-11-05 03:07:12'),
(111, 'CG15AC9477', 5, 2, NULL, NULL, NULL, '0', '202101080104361.jpeg', 1, '171.61.12.118', '6', '2020-11-05 03:07:36', '2021-01-08 13:04:36'),
(112, 'CG15DC9829', 35, 2, NULL, NULL, NULL, '0', NULL, 1, '171.61.3.37', '2', '2020-11-05 03:08:03', '2020-11-05 03:08:03'),
(113, 'CG22H8076', 37, 3, NULL, NULL, NULL, '0', '202012261251001.jpeg', 1, '182.70.210.206', '6', '2020-11-05 03:56:27', '2020-12-26 07:21:00'),
(114, 'CG10AN4417', 8, 3, NULL, NULL, NULL, '0', '202101080107031.jpeg', 1, '171.61.12.118', '6', '2020-11-05 04:04:07', '2021-01-08 13:07:03'),
(115, 'CG10AL9176', 8, 3, NULL, NULL, NULL, '0', '202101080106421.jpeg', 1, '171.61.12.118', '6', '2020-11-05 04:06:17', '2021-01-08 13:06:42'),
(116, 'CG15DH6827', 38, 2, NULL, NULL, NULL, '0', '202101080102151.jpeg', 1, '171.61.12.118', '6', '2020-11-05 04:07:44', '2021-01-08 13:02:15'),
(117, 'CG15DH6826', 38, 2, NULL, NULL, NULL, '0', '202101080101581.jpeg', 1, '171.61.12.118', '6', '2020-11-05 04:08:12', '2021-01-08 13:01:58'),
(118, 'CG22H9175', 39, 2, NULL, NULL, NULL, '0', '202101131115031.pdf', 1, '182.70.216.254', '6', '2020-11-05 04:08:49', '2021-01-13 11:15:03'),
(119, 'CG15DH9074', 40, 2, NULL, NULL, NULL, '0', '202101180124481.pdf', 1, '122.175.152.77', '6', '2020-11-05 04:09:15', '2021-01-18 13:24:48'),
(120, 'CG15DB3552', 41, 2, NULL, NULL, NULL, '0', '202101080954511.jpeg', 1, '171.61.12.118', '6', '2020-11-05 04:09:51', '2021-01-08 09:54:51'),
(121, 'CG04MB5911', 42, 2, NULL, NULL, NULL, '0', NULL, 1, '171.61.3.37', '2', '2020-11-05 04:10:33', '2020-11-05 04:10:33'),
(122, 'CG15CZ8855', 43, 2, NULL, NULL, NULL, '0', NULL, 1, '171.61.3.37', '2', '2020-11-05 04:12:09', '2020-11-05 04:12:09'),
(123, 'CG15CZ9955', 43, 2, NULL, NULL, NULL, '0', NULL, 1, '171.61.3.37', '2', '2020-11-05 04:13:12', '2020-11-05 04:13:12'),
(124, 'CG15DN2055', 43, 2, NULL, NULL, NULL, '0', NULL, 1, '171.61.3.37', '2', '2020-11-05 04:13:36', '2020-11-05 04:13:36'),
(125, 'CG06GH7526', 49, 2, NULL, NULL, NULL, '0', '202101080942151.jpeg', 1, '171.61.12.118', '6', '2020-11-05 04:21:23', '2021-01-08 09:42:15'),
(126, 'CG06GR4482', 50, 2, NULL, NULL, NULL, '0', '202101081245211.jpeg', 1, '171.61.12.118', '6', '2020-11-05 04:26:33', '2021-01-08 12:45:21'),
(127, 'CG06GN1785', 50, 2, NULL, NULL, NULL, '0', '202101081241501.jpeg', 1, '171.61.12.118', '6', '2020-11-05 04:27:03', '2021-01-08 12:41:50'),
(128, 'CG04MD6888', 51, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.246.71', '2', '2020-11-05 04:28:54', '2020-11-05 04:28:54'),
(129, 'CG04HY9071', 52, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.246.71', '2', '2020-11-05 04:29:18', '2020-11-05 04:29:18'),
(130, 'CG06GM6171', 52, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.246.71', '2', '2020-11-05 04:29:45', '2020-11-05 04:29:45'),
(131, 'CG06GQ4871', 52, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.246.71', '2', '2020-11-05 04:30:21', '2020-11-05 04:30:21'),
(132, 'CG06GL8171', 52, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.246.71', '2', '2020-11-05 04:30:46', '2020-11-05 04:30:46'),
(133, 'CG04HY4871', 52, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.246.71', '2', '2020-11-05 04:31:12', '2020-11-05 04:31:12'),
(134, 'CG06GS8171', 52, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.246.71', '2', '2020-11-05 04:31:35', '2020-11-05 04:31:35'),
(135, 'CG06GS9071', 52, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.246.71', '2', '2020-11-05 04:32:08', '2020-11-05 04:32:08'),
(136, 'CG06GJ6171', 52, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.246.71', '2', '2020-11-05 04:32:30', '2020-11-05 04:32:30'),
(137, 'CG06GL6171', 52, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.246.71', '2', '2020-11-05 04:33:32', '2020-11-05 04:33:32'),
(138, 'CG11AL9019', 53, 2, NULL, NULL, NULL, '0', '202012301143561.jpeg', 1, '182.70.247.67', '6', '2020-11-06 00:36:21', '2020-12-30 06:13:56'),
(139, 'CG11AQ9019', 53, 2, NULL, NULL, NULL, '0', '202012301143291.jpeg', 1, '182.70.247.67', '6', '2020-11-06 00:36:43', '2020-12-30 06:13:29'),
(140, 'CG06GR7535', 55, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.167.236', '2', '2020-11-06 00:37:42', '2020-11-06 00:37:42'),
(141, 'CG05GM9445', 56, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.167.236', '2', '2020-11-06 00:39:18', '2020-11-06 00:39:18'),
(142, 'CG06GM7635', 57, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.167.236', '2', '2020-11-06 00:39:43', '2020-11-06 00:39:43'),
(143, 'CG04MU5235', 58, 2, NULL, NULL, NULL, '0', '202101061002241.pdf', 1, '171.61.31.156', '6', '2020-11-06 00:40:18', '2021-01-06 10:02:24'),
(144, 'CG06GF9003', 59, 2, NULL, NULL, NULL, '0', '202012301221511.jpeg', 1, '182.70.247.67', '6', '2020-11-06 00:40:43', '2020-12-30 06:51:51'),
(145, 'CG11AQ4136', 60, 2, NULL, NULL, NULL, '0', '202101080912331.jpeg', 1, '171.61.12.118', '6', '2020-11-06 00:42:21', '2021-01-08 09:12:33'),
(146, 'CG11AT0985', 60, 2, NULL, NULL, NULL, '0', '202101080913081.jpeg', 1, '171.61.12.118', '6', '2020-11-06 00:42:44', '2021-01-08 09:13:08'),
(147, 'CG06GN9921', 170, 2, NULL, NULL, NULL, '0', '202101081251461.jpeg', 1, '171.61.12.118', '6', '2020-11-06 00:43:29', '2021-01-08 12:51:46'),
(148, 'CG13LA3847', 62, 2, NULL, NULL, NULL, '0', '202101060958041.jpeg', 1, '171.61.31.156', '6', '2020-11-06 00:44:29', '2021-01-06 09:58:04'),
(149, 'CG06GQ0102', 63, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.167.236', '2', '2020-11-06 01:18:59', '2020-11-06 01:18:59'),
(150, 'CG06GK1976', 64, 2, NULL, NULL, NULL, '0', '202101081253251.jpeg', 1, '171.61.12.118', '6', '2020-11-06 01:42:43', '2021-01-08 12:53:25'),
(151, 'CG22H8936', 65, 2, NULL, NULL, NULL, '0', '202101201204011.jpeg', 1, '122.175.152.77', '6', '2020-11-06 01:43:14', '2021-01-20 12:04:01'),
(152, 'CG04LZ6326', 66, 2, NULL, NULL, NULL, '0', '202101190724471.jpeg', 1, '122.175.152.77', '6', '2020-11-06 01:44:34', '2021-01-19 07:24:47'),
(153, 'CG06GM5768', 66, 2, NULL, NULL, NULL, '0', '202101190724241.jpeg', 1, '122.175.152.77', '6', '2020-11-06 01:45:12', '2021-01-19 07:24:24'),
(154, 'CG06GH0542', 66, 2, NULL, NULL, NULL, '0', '202101190723281.jpeg', 1, '122.175.152.77', '6', '2020-11-06 01:45:40', '2021-01-19 07:23:28'),
(155, 'CG11AQ4656', 67, 2, NULL, NULL, NULL, '0', '202012240106401.jpeg', 1, '182.70.210.206', '6', '2020-11-06 01:55:28', '2020-12-24 07:36:40'),
(156, 'CG22H7679', 68, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.167.236', '2', '2020-11-06 01:56:56', '2020-11-06 01:56:56'),
(157, 'CG13AK8932', 69, 4, NULL, NULL, NULL, '0', '202101191101151.pdf', 1, '122.175.152.77', '6', '2020-11-06 01:57:23', '2021-01-19 11:01:15'),
(158, 'CG04M5255', 70, 2, NULL, NULL, NULL, '0', '202101180130161.jpeg', 1, '122.175.152.77', '6', '2020-11-06 01:59:16', '2021-01-18 13:30:16'),
(159, 'OD17R9330', 71, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.167.236', '2', '2020-11-06 02:10:44', '2020-11-06 02:10:44'),
(160, 'CG06GK7526', 72, 4, NULL, NULL, NULL, '0', '202101061013441.jpeg', 1, '171.61.12.118', '6', '2020-11-06 02:11:12', '2021-01-08 11:07:59'),
(161, 'CG15AC5723', 73, 3, NULL, NULL, NULL, '0', '202101191052211.pdf', 1, '122.175.152.77', '6', '2020-11-06 02:12:01', '2021-01-19 10:52:21'),
(162, 'CG22P3246', 74, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.167.236', '2', '2020-11-06 02:12:26', '2020-11-06 02:12:26'),
(163, 'CG06GL6758', 75, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.167.236', '2', '2020-11-06 02:13:55', '2020-11-06 02:13:55'),
(164, 'CG06GG8265', 75, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.167.236', '2', '2020-11-06 02:14:19', '2020-11-06 02:14:19'),
(165, 'CG11AQ4657', 76, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.152.77', '6', '2020-11-06 02:48:05', '2021-01-20 13:03:30'),
(166, 'CG11AM8712', 76, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.167.236', '2', '2020-11-06 02:48:32', '2020-11-06 02:48:32'),
(167, 'CG06GN3418', 77, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.167.236', '2', '2020-11-06 02:49:05', '2020-11-06 02:49:05'),
(168, 'CG13AC1586', 78, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.167.236', '2', '2020-11-06 02:49:44', '2020-11-06 02:49:44'),
(169, 'OD15E9763', 79, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.167.236', '2', '2020-11-06 02:50:21', '2020-11-06 02:50:21'),
(170, 'CG06GN6305', 79, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.167.236', '2', '2020-11-06 02:56:29', '2020-11-06 02:56:29'),
(171, 'CG04HP3628', 79, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.167.236', '2', '2020-11-06 02:57:02', '2020-11-06 02:57:02'),
(172, 'CG06GM6631', 79, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.167.236', '2', '2020-11-06 02:57:31', '2020-11-06 02:57:31'),
(173, 'CG06GN2046', 80, 2, NULL, NULL, NULL, '0', '202101080917111.jpeg', 1, '171.61.12.118', '6', '2020-11-06 03:05:42', '2021-01-08 09:17:11'),
(174, 'CG04MB9774', 81, 2, NULL, NULL, NULL, '0', '202101140703121.jpeg', 1, '182.70.216.254', '6', '2020-11-06 03:06:04', '2021-01-14 07:03:12'),
(175, 'CG11AN0463', 82, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.167.236', '2', '2020-11-06 03:07:44', '2020-11-06 03:07:44'),
(176, 'CG06GM6888', 83, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.167.236', '2', '2020-11-06 03:08:54', '2020-11-06 03:08:54'),
(177, 'CG06GN5551', 91, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.167.236', '2', '2020-11-06 03:46:16', '2020-11-06 03:46:16'),
(178, 'CG22J8102', 91, 4, NULL, NULL, NULL, '0', '202101080108051.jpeg', 1, '171.61.12.118', '6', '2020-11-06 03:46:38', '2021-01-08 13:08:05'),
(179, 'CG06GN2816', 92, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.167.236', '2', '2020-11-06 03:50:22', '2020-11-06 03:50:22'),
(180, 'CG22G7579', 84, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.167.236', '2', '2020-11-06 03:50:53', '2020-11-06 03:50:53'),
(181, 'CG04MC5300', 13, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.167.236', '2', '2020-11-06 03:51:13', '2020-11-06 03:51:13'),
(182, 'CG11AU5293', 85, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.167.236', '2', '2020-11-06 03:55:53', '2020-11-06 03:55:53'),
(183, 'CG11AN1483', 85, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.167.236', '2', '2020-11-06 03:56:18', '2020-11-06 03:56:18'),
(184, 'CG06GP1912', 86, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.167.236', '2', '2020-11-06 04:00:11', '2020-11-06 04:00:11'),
(185, 'CG06GM9444', 87, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.167.236', '2', '2020-11-06 04:01:23', '2020-11-06 04:01:23'),
(186, 'CG06GQ9444', 87, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.167.236', '2', '2020-11-06 04:02:38', '2020-11-06 04:02:38'),
(187, 'CG06GN9444', 87, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.167.236', '2', '2020-11-06 04:03:10', '2020-11-06 04:03:10'),
(188, 'CG06GR9555', 88, 2, NULL, NULL, NULL, '0', '202012311240501.jpeg', 1, '182.70.247.67', '6', '2020-11-06 04:07:20', '2020-12-31 07:10:50'),
(189, 'CG11AT0822', 89, 2, NULL, NULL, NULL, '0', '202101080823331.jpeg', 1, '171.61.12.118', '6', '2020-11-06 04:08:16', '2021-01-08 08:23:33'),
(190, 'CG11AP4263', 89, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.167.236', '2', '2020-11-06 04:08:36', '2020-11-06 04:08:36'),
(191, 'CG11AT0823', 89, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.167.236', '2', '2020-11-06 04:09:07', '2020-11-06 04:09:07'),
(192, 'CG11AT1278', 89, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.167.236', '2', '2020-11-06 04:09:42', '2020-11-06 04:09:42'),
(193, 'CG11AT0824', 89, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.167.236', '2', '2020-11-06 04:10:11', '2020-11-06 04:10:11'),
(194, 'CG06GQ5371', 90, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.167.236', '2', '2020-11-06 04:10:39', '2020-11-06 04:10:39'),
(195, 'CG06GN5371', 90, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.167.236', '2', '2020-11-06 04:11:00', '2020-11-06 04:11:00'),
(196, 'CG06GN4571', 90, 2, NULL, NULL, NULL, '0', NULL, 1, '122.175.167.236', '2', '2020-11-06 04:11:20', '2020-11-06 04:11:20'),
(197, 'CG04JE0840', 93, 2, NULL, NULL, NULL, '0', '202012310736161.jpeg', 1, '182.70.247.67', '6', '2020-11-06 07:16:43', '2020-12-31 02:06:16'),
(198, 'CG04ND8841 (4494)', 110, 3, NULL, NULL, NULL, '0', NULL, 1, '122.168.106.199', '5', '2020-11-07 03:04:45', '2020-12-21 01:31:12'),
(200, 'CG15DE2255', 43, 1, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, '2020-12-10 05:37:30', '2020-12-10 05:37:30'),
(201, 'CG15DA0263', 45, 2, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, '2020-12-11 00:04:27', '2020-12-11 00:04:27'),
(202, 'CG06GL6189', 94, 3, NULL, NULL, NULL, '0', '202101191040191.jpeg', 1, '122.175.152.77', '6', '2020-12-11 00:43:17', '2021-01-19 10:40:19'),
(203, 'CG15AC8154', 95, 2, '0', '0', '0', '0', '202012241247201.jpeg', 1, '182.70.210.206', '6', '2020-12-11 02:06:16', '2020-12-24 07:17:20'),
(204, 'CG15DG7055', 43, 2, '0', '0', '0', '0', NULL, 1, '171.49.140.68', '6', '2020-12-11 02:16:26', '2020-12-11 02:16:26'),
(205, 'CG15DA6655', 43, 2, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, '2020-12-11 02:22:59', '2020-12-11 02:22:59'),
(206, 'CG06GL6503', 97, 2, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, '2020-12-11 02:28:28', '2020-12-11 02:28:28'),
(207, 'CG15DG5336', 46, 2, NULL, NULL, NULL, '0', '202101081201541.jpeg', 1, '171.61.12.118', '6', '2020-12-11 02:32:26', '2021-01-08 12:01:54'),
(208, 'CG04LE0145', 98, 2, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, '2020-12-11 02:35:32', '2020-12-11 02:35:32'),
(209, 'UP64AT2867', 106, 3, NULL, NULL, NULL, '0', NULL, 1, '122.168.106.199', '5', '2020-12-11 02:40:41', '2020-12-21 01:25:41'),
(210, 'CG08AJ7741', 3, 3, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, '2020-12-11 02:43:31', '2020-12-11 02:43:31'),
(211, 'UP36T2811', 107, 3, NULL, NULL, NULL, '0', NULL, 1, '122.168.106.199', '5', '2020-12-11 02:45:32', '2020-12-21 01:26:45'),
(212, 'UP64AT2868', 106, 3, NULL, NULL, NULL, '0', NULL, 1, '122.168.106.199', '5', '2020-12-11 02:47:59', '2020-12-21 01:26:07'),
(213, 'BR02GB4319', 109, 3, NULL, NULL, NULL, '0', NULL, 1, '122.168.106.199', '5', '2020-12-11 02:49:40', '2020-12-21 01:29:00'),
(214, 'CG08AK4441', 3, 3, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, '2020-12-11 02:52:50', '2020-12-11 02:52:50'),
(215, 'CG08AJ5541', 3, 3, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, '2020-12-11 03:37:18', '2020-12-11 03:37:18'),
(216, 'UP93BT6658', 108, 3, NULL, NULL, NULL, '0', NULL, 1, '122.168.106.199', '5', '2020-12-11 03:46:38', '2020-12-21 01:28:13'),
(217, 'CG15DH4284', 45, 2, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, '2020-12-11 05:38:24', '2020-12-11 05:38:24'),
(218, 'CG15DJ6826', 99, 3, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, '2020-12-11 05:51:05', '2020-12-11 05:51:05'),
(219, 'UP64AT2866', 106, 3, NULL, NULL, NULL, '0', NULL, 1, '122.168.106.199', '5', '2020-12-11 05:57:11', '2020-12-21 01:25:09'),
(220, 'CG08G0041', 3, 3, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, '2020-12-11 06:01:37', '2020-12-11 06:01:37'),
(221, 'CG06GJ0817', 79, 1, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, '2020-12-11 06:16:22', '2020-12-11 06:16:22'),
(222, 'CG15DE7862', 3, 3, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, '2020-12-11 06:24:51', '2020-12-11 06:24:51'),
(223, 'CG06GM6809', 135, 2, NULL, NULL, NULL, '0', '202101141140401.jpeg', 1, '182.70.211.25', '6', '2020-12-11 07:23:07', '2021-01-14 11:40:40'),
(224, 'CG06GR5779', 7, 2, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, '2020-12-11 07:32:37', '2020-12-11 07:32:37'),
(225, 'CG06GQ8155', 10, 2, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, '2020-12-11 07:36:40', '2020-12-11 07:36:40'),
(226, 'CG15AC5811', 100, 3, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, '2020-12-11 07:44:05', '2020-12-11 07:44:05'),
(227, 'CG06GN0659', 102, 2, '0', '0', '0', '0', '202101181224071.pdf', 1, '122.175.152.77', '6', '2020-12-11 07:53:54', '2021-01-18 12:24:07'),
(228, 'CG15AC5346', 103, 4, '0', '0', '0', '0', '202012241245451.jpeg', 1, '182.70.210.206', '6', '2020-12-14 06:11:55', '2020-12-24 07:15:45'),
(229, 'CG15AC5012', 103, 4, '0', '0', '0', '0', '202012241245271.jpeg', 1, '182.70.210.206', '6', '2020-12-14 06:12:31', '2020-12-24 07:15:27'),
(231, 'CG06GP7771', 105, 2, '0', '0', '0', '0', NULL, 1, '122.168.106.199', '6', '2020-12-16 07:56:26', '2020-12-16 07:56:26'),
(232, 'CG06GT1141 (0011)', 3, 3, NULL, NULL, NULL, '0', NULL, 1, '122.168.106.199', '5', '2020-12-21 01:35:04', '2020-12-21 01:35:04'),
(233, 'CG04MQ4001', 3, 4, NULL, NULL, NULL, '0', NULL, 1, '122.168.106.199', '5', '2020-12-21 01:59:46', '2020-12-21 01:59:46'),
(234, 'CG04J3155', 114, 1, NULL, NULL, NULL, '0', NULL, 1, '122.168.106.199', '5', '2020-12-21 02:04:02', '2020-12-21 02:04:02'),
(235, 'CG04J3255', 115, 1, NULL, NULL, NULL, '0', NULL, 1, '122.168.106.199', '5', '2020-12-21 02:04:32', '2020-12-21 02:04:32'),
(236, 'CG04E3355', 114, 1, NULL, NULL, NULL, '0', NULL, 1, '122.168.106.199', '5', '2020-12-21 02:05:05', '2020-12-21 02:05:05'),
(237, 'CG04CV3555', 114, 1, NULL, NULL, NULL, '0', NULL, 1, '122.168.106.199', '5', '2020-12-21 02:05:29', '2020-12-21 02:05:29'),
(238, 'CG04JB3555', 3, 1, NULL, NULL, NULL, '0', NULL, 1, '122.168.106.199', '5', '2020-12-21 02:06:10', '2020-12-21 02:06:10'),
(239, 'CG04HA3855', 114, 1, NULL, NULL, NULL, '0', NULL, 1, '122.168.106.199', '5', '2020-12-21 02:06:35', '2020-12-21 02:06:35'),
(240, 'CG04JA8255', 114, 1, NULL, NULL, NULL, '0', NULL, 1, '122.168.106.199', '5', '2020-12-21 02:07:00', '2020-12-21 02:07:00'),
(241, 'CG04HA8355', 114, 1, NULL, NULL, NULL, '0', NULL, 1, '122.168.106.199', '5', '2020-12-21 02:07:40', '2020-12-21 02:07:40'),
(242, 'CG04CW8555', 113, 1, NULL, NULL, NULL, '0', NULL, 1, '122.168.106.199', '5', '2020-12-21 02:08:13', '2020-12-21 02:08:13'),
(243, 'CG04HA8955', 115, 1, NULL, NULL, NULL, '0', NULL, 1, '122.168.106.199', '5', '2020-12-21 02:08:43', '2020-12-21 02:08:43'),
(244, 'CG04G7478', 116, 1, NULL, NULL, NULL, '0', NULL, 1, '122.168.106.199', '5', '2020-12-21 02:09:10', '2020-12-21 02:09:10'),
(245, 'CG06M3555', 3, 2, NULL, NULL, NULL, '0', '202012211158491.pdf', 1, '122.168.106.199', '5', '2020-12-21 02:09:35', '2020-12-21 06:28:49'),
(246, 'CG15AC1756', 3, 2, NULL, NULL, NULL, '0', NULL, 1, '122.168.106.199', '5', '2020-12-21 02:10:01', '2020-12-21 02:10:01'),
(247, 'CG06GB9555', 117, 2, NULL, NULL, NULL, '0', '202012211202241.pdf', 1, '122.168.106.199', '5', '2020-12-21 02:10:55', '2020-12-21 06:32:24'),
(248, 'CG04JD7125', 118, 2, NULL, NULL, NULL, '0', '202012211203061.pdf', 1, '122.168.106.199', '5', '2020-12-21 02:11:27', '2020-12-21 06:33:06'),
(249, 'CG04NF2841', 3, 2, NULL, NULL, NULL, '0', NULL, 1, '122.168.106.199', '5', '2020-12-21 02:11:46', '2020-12-21 02:11:46'),
(250, 'CG15DH4451', 119, 4, '0', '0', '0', '0', '202012241202571.pdf', 1, '182.70.210.206', '6', '2020-12-24 06:20:05', '2020-12-24 06:32:57'),
(251, 'CH15DH8114', 104, 3, NULL, NULL, NULL, '0', '202012241216421.jpeg', 1, '182.70.210.206', '6', '2020-12-24 06:46:42', '2020-12-24 06:46:42'),
(252, 'CG15DE3408', 120, 3, NULL, NULL, NULL, '0', '202012240100301.pdf', 1, '182.70.210.206', '6', '2020-12-24 07:30:30', '2020-12-24 07:30:30'),
(253, 'CG15AC7899', 121, 3, NULL, NULL, NULL, '0', '202012240124511.pdf', 1, '182.70.210.206', '6', '2020-12-24 07:54:51', '2020-12-24 07:54:51'),
(254, 'CG15AC7799', 121, 3, NULL, NULL, NULL, '0', '202012240125241.pdf', 1, '182.70.210.206', '6', '2020-12-24 07:55:24', '2020-12-24 07:55:24'),
(255, 'CG06GM9168', 122, 4, NULL, NULL, NULL, '0', '202012250732301.pdf', 1, '182.70.210.206', '6', '2020-12-25 02:02:30', '2020-12-25 02:02:30'),
(256, 'BR26GA6351', 123, 3, NULL, NULL, NULL, '0', NULL, 1, '182.70.210.206', '6', '2020-12-25 02:18:04', '2020-12-25 02:18:04'),
(257, 'JH19B3651', 123, 3, NULL, NULL, NULL, '0', NULL, 1, '182.70.210.206', '6', '2020-12-25 02:18:31', '2020-12-25 02:18:31'),
(258, 'CG22K9402', 124, 3, NULL, NULL, NULL, '0', NULL, 1, '182.70.210.206', '6', '2020-12-25 05:07:43', '2020-12-25 05:07:43'),
(259, 'CG06GN9168', 125, 4, NULL, NULL, NULL, '0', '202012251045091.pdf', 1, '182.70.210.206', '6', '2020-12-25 05:15:09', '2020-12-25 05:15:09'),
(260, 'CG15DE7940', 126, 3, NULL, NULL, NULL, '0', '202012251053221.jpeg', 1, '182.70.210.206', '6', '2020-12-25 05:23:22', '2020-12-25 05:23:22'),
(261, 'CG22K0447', 127, 4, NULL, NULL, NULL, '0', '202012251103261.jpeg', 1, '182.70.210.206', '6', '2020-12-25 05:33:26', '2020-12-25 05:33:26'),
(262, 'CG22H4679', 127, 4, NULL, NULL, NULL, '0', '202012251104091.jpeg', 1, '182.70.210.206', '6', '2020-12-25 05:34:09', '2020-12-25 05:34:09'),
(263, 'CG15DJ9699', 128, 3, NULL, NULL, NULL, '0', '202012251144541.pdf', 1, '182.70.210.206', '6', '2020-12-25 06:14:54', '2020-12-25 06:14:54'),
(264, 'CG15DC7699', 128, 3, NULL, NULL, NULL, '0', '202012251145221.pdf', 1, '182.70.210.206', '6', '2020-12-25 06:15:22', '2020-12-25 06:15:22'),
(265, 'CG22M5443', 129, 2, NULL, NULL, NULL, '0', '202012251200161.jpeg', 1, '182.70.210.206', '6', '2020-12-25 06:30:16', '2020-12-25 06:30:16'),
(266, 'CG04LW7808', 130, 3, NULL, NULL, NULL, '0', '202012251215341.jpeg', 1, '182.70.210.206', '6', '2020-12-25 06:45:34', '2020-12-25 06:45:34'),
(267, 'CG04MA6017', 130, 3, NULL, NULL, NULL, '0', '202012251216261.jpeg', 1, '182.70.210.206', '6', '2020-12-25 06:46:26', '2020-12-25 06:46:26'),
(268, 'CG15ME8221', 131, 3, NULL, NULL, NULL, '0', '202012251220151.jpeg', 1, '182.70.210.206', '6', '2020-12-25 06:50:16', '2020-12-25 06:50:16'),
(269, 'CG06GL3666', 132, 4, NULL, NULL, NULL, '0', '202012251241491.jpeg', 1, '182.70.210.206', '6', '2020-12-25 07:11:50', '2020-12-25 07:11:50'),
(270, 'CG06GL4666', 132, 4, NULL, NULL, NULL, '0', '202012251247261.jpeg', 1, '182.70.210.206', '6', '2020-12-25 07:16:42', '2020-12-25 07:17:26'),
(271, 'CG06GJ8966', 132, 3, NULL, NULL, NULL, '0', '202012250114371.jpeg', 1, '182.70.210.206', '6', '2020-12-25 07:44:37', '2020-12-25 07:44:37'),
(272, 'CG04MD9056', 132, 3, NULL, NULL, NULL, '0', '202012250115411.jpeg', 1, '182.70.210.206', '6', '2020-12-25 07:45:41', '2020-12-25 07:45:41'),
(273, 'BR02GB2418', 44, 2, NULL, NULL, NULL, '0', '202012260736521.jpeg', 1, '182.70.210.206', '6', '2020-12-26 02:06:52', '2020-12-26 02:06:52'),
(274, 'CG12AT3653', 133, 3, NULL, NULL, NULL, '0', '202012261246261.jpeg', 1, '182.70.210.206', '6', '2020-12-26 07:16:26', '2020-12-26 07:16:26'),
(275, 'CG22G5580', 37, 3, NULL, NULL, NULL, '0', '202012261251551.jpeg', 1, '182.70.210.206', '6', '2020-12-26 07:21:55', '2020-12-26 07:21:55'),
(276, 'CG22G8075', 134, 3, NULL, NULL, NULL, '0', '202012260109401.jpeg', 1, '182.70.211.25', '6', '2020-12-26 07:39:40', '2021-01-14 11:34:28'),
(277, 'CG22AB9808', 33, 4, NULL, NULL, NULL, '0', '202012300744041.jpeg', 1, '182.70.247.67', '6', '2020-12-30 02:14:04', '2020-12-30 02:14:04'),
(278, 'CG06GN8071', 105, 3, NULL, NULL, NULL, '0', NULL, 1, '182.70.247.67', '6', '2020-12-30 02:51:29', '2020-12-30 02:51:29'),
(279, 'CG15DM6738', 136, 1, NULL, NULL, NULL, '0', '202012300918391.pdf', 1, '122.175.152.77', '6', '2020-12-30 03:48:39', '2021-01-22 09:55:22'),
(280, 'CG15AC5278', 136, 3, NULL, NULL, NULL, '0', '202012300921361.jpeg', 1, '182.70.247.67', '6', '2020-12-30 03:50:27', '2020-12-30 03:51:36'),
(281, 'CG11AL8265', 67, 3, NULL, NULL, NULL, '0', '202012301029191.jpeg', 1, '182.70.247.67', '6', '2020-12-30 04:59:19', '2020-12-30 04:59:19'),
(282, 'CG11AN3124', 137, 3, NULL, NULL, NULL, '0', '202012301042091.jpeg', 1, '182.70.247.67', '6', '2020-12-30 05:12:09', '2020-12-30 05:12:09'),
(283, 'CG11AJ2919', 53, 2, NULL, NULL, NULL, '0', '202012301144461.jpeg', 1, '182.70.247.67', '6', '2020-12-30 06:14:46', '2020-12-30 06:14:46'),
(284, 'CG04MD6055', 140, 4, NULL, NULL, NULL, '0', '202012301248161.jpeg', 1, '182.70.247.67', '6', '2020-12-30 07:18:16', '2020-12-30 07:18:16'),
(285, 'CG04HZ5389', 141, 1, NULL, NULL, NULL, '0', '202012300102091.jpeg', 1, '182.70.247.67', '6', '2020-12-30 07:32:09', '2020-12-30 07:32:09'),
(286, 'CG15AC9427', 142, 3, NULL, NULL, NULL, '0', '202012300118401.jpeg', 1, '182.70.247.67', '6', '2020-12-30 07:48:40', '2020-12-30 07:48:40'),
(287, 'CG15CY7427', 142, 3, NULL, NULL, NULL, '0', '202012300119281.jpeg', 1, '182.70.247.67', '6', '2020-12-30 07:49:28', '2020-12-30 07:49:28'),
(288, 'CG15DG6427', 142, 3, NULL, NULL, NULL, '0', '202012300121351.jpeg', 1, '182.70.247.67', '6', '2020-12-30 07:51:35', '2020-12-30 07:51:35'),
(289, 'CG15DG5427', 142, 3, NULL, NULL, NULL, '0', '202012300122091.jpeg', 1, '182.70.247.67', '6', '2020-12-30 07:52:09', '2020-12-30 07:52:09'),
(290, 'CG15DG4427', 142, 3, NULL, NULL, NULL, '0', '202012300122381.jpeg', 1, '182.70.247.67', '6', '2020-12-30 07:52:38', '2020-12-30 07:52:38'),
(291, 'CG15AC3918', 35, 2, NULL, NULL, NULL, '0', '202012300128361.jpeg', 1, '182.70.247.67', '6', '2020-12-30 07:58:36', '2020-12-30 07:58:36'),
(292, 'CG15DH9933', 143, 3, NULL, NULL, NULL, '0', '202012310708031.jpeg', 1, '182.70.247.67', '6', '2020-12-31 01:38:03', '2020-12-31 01:38:03'),
(293, 'CG15DH6832', 144, 3, NULL, NULL, NULL, '0', '202012310727451.jpeg', 1, '182.70.247.67', '6', '2020-12-31 01:57:45', '2020-12-31 01:57:45'),
(294, 'CG04LC3311', 145, 2, NULL, NULL, NULL, '0', NULL, 1, '182.70.247.67', '6', '2020-12-31 02:10:26', '2020-12-31 02:10:26'),
(295, 'CG15AC4913', 146, 3, NULL, NULL, NULL, '0', '202012310835211.jpeg', 1, '182.70.247.67', '6', '2020-12-31 03:05:21', '2020-12-31 03:05:21'),
(296, 'CG15DC6756', 147, 3, NULL, NULL, NULL, '0', '202012310918141.jpeg', 1, '182.70.247.67', '6', '2020-12-31 03:47:44', '2020-12-31 03:48:14'),
(297, 'CG15DE0698', 147, 2, NULL, NULL, NULL, '0', '202012310919261.jpeg', 1, '182.70.247.67', '6', '2020-12-31 03:49:27', '2020-12-31 03:49:27'),
(298, 'CG15DB7448', 148, 2, NULL, NULL, NULL, '0', '202012310925221.jpeg', 1, '182.70.247.67', '6', '2020-12-31 03:55:22', '2020-12-31 03:55:22'),
(299, 'CG15CZ5499', 47, 2, NULL, NULL, NULL, '0', '202012310935131.jpeg', 1, '182.70.247.67', '6', '2020-12-31 04:05:13', '2020-12-31 04:05:13'),
(300, 'CG15DF8863', 47, 1, NULL, NULL, NULL, '0', '202012310941451.jpeg', 1, '182.70.247.67', '6', '2020-12-31 04:11:45', '2020-12-31 04:11:45'),
(301, 'CG06GM8044', 150, 3, NULL, NULL, NULL, '0', '202012310958461.jpeg', 1, '182.70.247.67', '6', '2020-12-31 04:28:46', '2020-12-31 04:28:46'),
(302, 'CG15DH0819', 151, 2, NULL, NULL, NULL, '0', NULL, 1, '182.70.247.67', '6', '2020-12-31 06:04:49', '2020-12-31 06:04:49'),
(303, 'CG15DF1887', 151, 1, NULL, NULL, NULL, '0', NULL, 1, '182.70.247.67', '6', '2020-12-31 06:07:01', '2020-12-31 06:07:01'),
(304, 'CG15AC5687', 153, 2, NULL, NULL, NULL, '0', '202012311255231.pdf', 1, '182.70.247.67', '6', '2020-12-31 07:25:23', '2020-12-31 07:25:23'),
(305, 'CG15AC5686', 153, 2, NULL, NULL, NULL, '0', '202012311256131.pdf', 1, '182.70.247.67', '6', '2020-12-31 07:26:13', '2020-12-31 07:26:13'),
(306, 'CG30A0121', 154, 2, NULL, NULL, NULL, '0', '202012310101311.jpeg', 1, '182.70.247.67', '6', '2020-12-31 07:31:31', '2020-12-31 07:31:31'),
(307, 'CG10AN0749', 155, 2, NULL, NULL, NULL, '0', '202012310108301.jpeg', 1, '182.70.247.67', '6', '2020-12-31 07:37:48', '2020-12-31 07:38:30'),
(308, 'CG04HU9277', 156, 3, NULL, NULL, NULL, '0', '202012310115441.jpeg', 1, '182.70.247.67', '6', '2020-12-31 07:45:44', '2020-12-31 07:45:44'),
(309, 'CG06GG4871', 157, 3, NULL, NULL, NULL, '0', '202101021148231.jpeg', 1, '182.70.236.177', '6', '2021-01-02 06:18:23', '2021-01-02 06:18:23'),
(310, 'CG06M1057', 157, 1, NULL, NULL, NULL, '0', '202101021148581.jpeg', 1, '182.70.236.177', '6', '2021-01-02 06:18:58', '2021-01-02 06:18:58'),
(311, 'CG06GM7663', 158, 2, NULL, NULL, NULL, '0', '202101061009291.jpeg', 0, '171.61.31.156', '6', '2021-01-06 10:09:29', '2021-01-06 10:09:29'),
(312, 'CG14MG8063', 159, 3, NULL, NULL, NULL, '0', '202101061035261.pdf', 0, '171.61.31.156', '6', '2021-01-06 10:35:26', '2021-01-06 10:35:26'),
(313, 'CG14MK2287', 160, 1, NULL, NULL, NULL, '0', '202101061111201.pdf', 0, '171.61.31.156', '6', '2021-01-06 11:11:20', '2021-01-06 11:11:20'),
(314, 'CG28J2734', 165, 1, NULL, NULL, NULL, '0', '202101080904481.jpeg', 0, '171.61.12.118', '6', '2021-01-08 09:04:48', '2021-01-08 09:04:48'),
(315, 'CG13AA9653', 166, 1, NULL, NULL, NULL, '0', NULL, 0, '171.61.12.118', '6', '2021-01-08 09:23:45', '2021-01-08 09:23:45'),
(316, 'CG04HY1974', 166, 2, NULL, NULL, NULL, '0', NULL, 0, '171.61.12.118', '6', '2021-01-08 09:24:16', '2021-01-08 09:24:16'),
(317, 'CG04HY9301', 167, 2, NULL, NULL, NULL, '0', '202101080939081.jpeg', 0, '171.61.12.118', '6', '2021-01-08 09:39:08', '2021-01-08 09:39:08'),
(318, 'CG04MR2637', 168, 2, NULL, NULL, NULL, '0', NULL, 0, '171.61.12.118', '6', '2021-01-08 10:28:07', '2021-01-08 10:28:07'),
(319, 'CG06MR2610', 168, 2, NULL, NULL, NULL, '0', NULL, 0, '171.61.12.118', '6', '2021-01-08 10:28:32', '2021-01-08 10:28:32'),
(320, 'CG15DE6201', 169, 2, NULL, NULL, NULL, '0', '202101081056471.jpeg', 0, '171.61.12.118', '6', '2021-01-08 10:56:47', '2021-01-08 10:56:47'),
(321, 'CG15DE0224', 169, 1, NULL, NULL, NULL, '0', '202101081057231.jpeg', 0, '171.61.12.118', '6', '2021-01-08 10:57:23', '2021-01-08 10:57:23'),
(322, 'CG15DE3909', 30, 2, NULL, NULL, NULL, '0', '202101081122261.jpeg', 0, '171.61.12.118', '6', '2021-01-08 11:22:27', '2021-01-08 11:22:27'),
(323, 'CG06GN9111', 170, 2, NULL, NULL, NULL, '0', '202101081252341.jpeg', 0, '171.61.12.118', '6', '2021-01-08 12:52:34', '2021-01-08 12:52:34'),
(324, 'CG15AC3834', 38, 1, NULL, NULL, NULL, '0', '202101080102481.jpeg', 0, '171.61.12.118', '6', '2021-01-08 13:02:48', '2021-01-08 13:02:48'),
(325, 'CG06GN2190', 171, 4, NULL, NULL, NULL, '0', '202101080121491.jpeg', 0, '171.61.12.118', '6', '2021-01-08 13:21:49', '2021-01-08 13:21:49'),
(326, 'CG04LL9772', 172, 2, '0', '0', '0', '0', NULL, 0, '171.61.12.118', '5', '2021-01-09 10:41:24', '2021-01-09 10:41:24'),
(327, 'CG04JD5284', 172, 2, '0', '0', '0', '0', NULL, 0, '171.61.12.118', '5', '2021-01-09 10:41:59', '2021-01-09 10:41:59'),
(328, 'CG04LM', 172, 2, '0', '0', '0', '0', NULL, 0, '171.61.12.118', '5', '2021-01-09 10:42:33', '2021-01-09 10:42:33'),
(329, 'CG04JA6676', 172, 1, '0', '0', '0', '0', NULL, 0, '171.61.12.118', '5', '2021-01-09 10:43:02', '2021-01-09 10:43:02'),
(330, 'CG04LM0199', 172, 2, '0', '0', '0', '0', NULL, 0, '171.61.12.118', '5', '2021-01-09 11:09:05', '2021-01-09 11:09:05'),
(331, 'CG04JA7351', 173, 1, '0', '0', '0', '0', NULL, 0, '171.61.12.118', '5', '2021-01-09 12:22:46', '2021-01-09 12:22:46'),
(332, 'CG15C1756', 3, 2, '0', '0', '0', '0', NULL, 0, '171.61.12.118', '5', '2021-01-09 12:23:35', '2021-01-09 12:23:35'),
(333, 'CG15DH8114', 104, 3, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '2021-01-11 08:19:41', '2021-01-11 08:19:41'),
(334, 'CG15DH4525', 31, 2, NULL, NULL, NULL, '0', '202101111217031.pdf', 0, '171.61.12.118', '6', '2021-01-11 12:14:57', '2021-01-11 12:17:03'),
(335, 'CG15DN3055', 43, 2, NULL, NULL, NULL, '0', NULL, 0, '171.61.12.118', '6', '2021-01-11 12:38:56', '2021-01-11 12:43:19'),
(336, 'CG15DG9055', 43, 3, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '2021-01-11 12:46:00', '2021-01-11 12:46:00'),
(337, 'CG15DN4055', 43, 2, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '2021-01-11 12:52:55', '2021-01-11 12:52:55'),
(338, 'CG15CZ7755', 43, 2, NULL, NULL, NULL, '0', NULL, 0, '171.61.12.118', '6', '2021-01-11 14:01:44', '2021-01-11 14:01:44'),
(339, 'CG15DE1055', 43, 3, NULL, NULL, NULL, '0', NULL, 0, '182.70.216.254', '6', '2021-01-12 10:18:31', '2021-01-12 10:28:58'),
(340, 'CG15CY8855', 43, 3, NULL, NULL, NULL, '0', NULL, 0, '182.70.216.254', '6', '2021-01-13 07:33:07', '2021-01-13 07:33:07'),
(341, 'CG06GQ3322', 176, 3, NULL, NULL, NULL, '0', '202101131231081.jpeg', 0, '182.70.216.254', '6', '2021-01-13 12:31:08', '2021-01-13 12:31:08'),
(342, 'CG06GM7636', 176, 3, NULL, NULL, NULL, '0', '202101131234131.jpeg', 0, '182.70.216.254', '6', '2021-01-13 12:34:13', '2021-01-13 12:34:13'),
(343, 'CG06GQ1295', 177, 3, NULL, NULL, NULL, '0', NULL, 0, '182.70.216.254', '6', '2021-01-13 12:47:47', '2021-01-13 12:47:47'),
(344, 'CG15DA4455', 43, 2, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '2021-01-14 06:36:09', '2021-01-14 06:36:09'),
(345, 'CG06GR3146', 178, 3, NULL, NULL, NULL, '0', '202101140758551.pdf', 0, '182.70.216.254', '6', '2021-01-14 07:58:55', '2021-01-14 07:58:55'),
(346, 'CG06GN7792', 179, 3, NULL, NULL, NULL, '0', '202101140828421.pdf', 0, '182.70.216.254', '6', '2021-01-14 08:28:42', '2021-01-14 08:28:42'),
(347, 'CG11AB3117', 179, 2, NULL, NULL, NULL, '0', '202101140829131.pdf', 0, '182.70.216.254', '6', '2021-01-14 08:29:13', '2021-01-14 08:29:13'),
(348, 'CG15DM8011', 180, 1, '0', '0', '0', '0', '202101140839381.pdf', 0, '182.70.216.254', '6', '2021-01-14 08:39:38', '2021-01-14 08:39:38'),
(349, 'CG06GL8670', 181, 3, '0', '0', '0', '0', '202101140915571.pdf', 0, '182.70.234.138', '6', '2021-01-14 09:15:57', '2021-01-14 09:15:57'),
(350, 'CG06GP0932', 182, 3, NULL, NULL, NULL, '0', '202101141030371.pdf', 0, '182.70.211.25', '6', '2021-01-14 10:30:37', '2021-01-14 10:30:37'),
(351, 'CG06GK5193', 54, 1, '0', '0', '0', '0', '202101141209421.pdf', 0, '182.70.211.25', '6', '2021-01-14 12:09:42', '2021-01-14 12:09:42'),
(352, 'CG04MQ8077', 184, 3, NULL, NULL, NULL, '0', '202101141227031.jpeg', 0, '122.175.152.77', '6', '2021-01-14 12:27:03', '2021-01-14 12:27:03'),
(353, 'CG15AC5108', 185, 2, '0', '0', '0', '0', NULL, 0, '122.175.152.77', '6', '2021-01-14 12:46:13', '2021-01-14 12:46:13'),
(354, 'CG30A0131', 186, 3, '0', '0', '0', '0', '202101140115551.jpeg', 0, '122.175.152.77', '6', '2021-01-14 13:15:55', '2021-01-14 13:15:55'),
(355, 'CG13AD9741', 187, 3, '0', '0', '0', '0', '202101140205201.pdf', 0, '122.175.152.77', '6', '2021-01-14 14:05:20', '2021-01-14 14:05:20'),
(356, 'CG04MK0402', 188, 1, NULL, NULL, NULL, '0', '202101140218241.pdf', 0, '122.175.152.77', '6', '2021-01-14 14:18:24', '2021-01-14 14:18:24'),
(357, 'CG15DG6055', 43, 3, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '2021-01-15 07:31:10', '2021-01-15 07:31:10'),
(358, 'CG11AM2297', 189, 3, '0', '0', '0', '0', '202101150853221.pdf', 0, '122.175.152.77', '6', '2021-01-15 08:53:22', '2021-01-15 08:53:22'),
(359, 'CG07BP4728', 190, 3, '0', '0', '0', '0', '202101150919371.pdf', 0, '122.175.152.77', '6', '2021-01-15 09:19:37', '2021-01-15 09:19:37'),
(360, 'CG12AX4202', 190, 3, '0', '0', '0', '0', '202101150920431.pdf', 0, '122.175.152.77', '6', '2021-01-15 09:20:43', '2021-01-15 09:20:43'),
(361, 'CG22H4677', 191, 4, '0', '0', '0', '0', '202101150941421.jpeg', 0, '122.175.152.77', '6', '2021-01-15 09:41:42', '2021-01-15 09:41:42'),
(362, 'CG11AN0462', 193, 2, '0', '0', '0', '0', '202101150949581.jpeg', 0, '122.175.152.77', '6', '2021-01-15 09:49:58', '2021-01-15 09:49:58'),
(363, 'CG13AF4634', 166, 4, '0', '0', '0', '0', '202101160914081.jpeg', 0, '122.175.152.77', '6', '2021-01-16 09:14:08', '2021-01-16 09:14:08'),
(364, 'CG15CZ0159', 194, 2, '0', '0', '0', '0', '202101160929301.jpeg', 0, '122.175.152.77', '6', '2021-01-16 09:29:30', '2021-01-16 09:29:30'),
(365, 'CG15AC5308', 195, 3, NULL, NULL, NULL, '0', '202101160948061.jpeg', 0, '122.175.152.77', '6', '2021-01-16 09:48:06', '2021-01-16 09:48:06'),
(366, 'CG15DC4547', 196, 3, '0', '0', '0', '0', '202101161001171.jpeg', 0, '122.175.152.77', '6', '2021-01-16 10:01:17', '2021-01-16 10:01:17'),
(367, 'CG30A0108', 197, 2, '0', '0', '0', '0', '202101161010131.jpeg', 0, '122.175.152.77', '6', '2021-01-16 10:10:13', '2021-01-16 10:10:13'),
(368, 'CG15DD5313', 198, 1, '0', '0', '0', '0', '202101161019221.jpeg', 0, '122.175.152.77', '6', '2021-01-16 10:19:22', '2021-01-16 10:19:22'),
(369, 'CG13AL3270', 199, 3, '0', '0', '0', '0', '202101180753381.pdf', 0, '122.175.152.77', '6', '2021-01-18 07:53:38', '2021-01-18 07:53:38'),
(370, 'CG04LX0841', 200, 3, '0', '0', '0', '0', '202101180818011.pdf', 0, '122.175.152.77', '6', '2021-01-18 08:18:01', '2021-01-18 08:18:01'),
(371, 'CG15AC5404', 201, 3, '0', '0', '0', '0', '202101180846301.pdf', 0, '122.175.152.77', '6', '2021-01-18 08:46:30', '2021-01-18 08:46:30');
INSERT INTO `trucks` (`id`, `truck_number`, `truckowner_id`, `tructype_id`, `truck_model`, `manufacturer`, `chassisno`, `engineno`, `document`, `status`, `ipaddress`, `createdby`, `created_at`, `updated_at`) VALUES
(372, 'CG06GJ5989', 94, 4, '0', '0', '0', '0', '202101181142211.pdf', 0, '122.175.152.77', '6', '2021-01-18 11:42:21', '2021-01-18 11:42:21'),
(373, 'CG10AF3076', 203, 3, '0', '0', '0', '0', '202101181146231.pdf', 0, '122.175.152.77', '6', '2021-01-18 11:46:23', '2021-01-18 11:46:23'),
(374, 'CG06GL2414', 202, 3, '0', '0', '0', '0', '202101181150401.pdf', 0, '122.175.152.77', '6', '2021-01-18 11:50:40', '2021-01-18 11:50:40'),
(375, 'CG15DG9921', 17, 3, '0', '0', '0', '0', '202101181159451.pdf', 0, '122.175.152.77', '6', '2021-01-18 11:59:45', '2021-01-18 11:59:45'),
(376, 'CG04LD9168', 204, 4, '0', '0', '0', '0', '202101181246441.pdf', 0, '122.175.152.77', '6', '2021-01-18 12:46:45', '2021-01-18 12:46:45'),
(377, 'CG15AC5428', 205, 3, '0', '0', '0', '0', '202101181253131.pdf', 0, '122.175.152.77', '6', '2021-01-18 12:53:13', '2021-01-18 12:53:13'),
(378, 'CG30A0130', 206, 3, '0', '0', '0', '0', '202101180109571.pdf', 0, '122.175.152.77', '6', '2021-01-18 13:09:57', '2021-01-18 13:09:57'),
(379, 'CG10AM5616', 206, 3, '0', '0', '0', '0', '202101180110481.pdf', 0, '122.175.152.77', '6', '2021-01-18 13:10:48', '2021-01-18 13:10:48'),
(380, 'CG06GG5165', 207, 2, '0', '0', '0', '0', '202101180121101.pdf', 0, '122.175.152.77', '6', '2021-01-18 13:21:10', '2021-01-18 13:21:10'),
(381, 'CG06GK5565', 207, 4, NULL, NULL, NULL, '0', '202101180121561.pdf', 0, '122.175.152.77', '6', '2021-01-18 13:21:56', '2021-01-18 13:21:56'),
(382, 'CG06GK5165', 207, 4, NULL, NULL, NULL, '0', '202101180122351.pdf', 0, '122.175.152.77', '6', '2021-01-18 13:22:35', '2021-01-18 13:22:35'),
(383, 'CG06GN9151', 208, 3, '0', '0', '0', '0', '202101180140501.pdf', 0, '122.175.152.77', '6', '2021-01-18 13:40:50', '2021-01-18 13:40:50'),
(384, 'CG04JC1080', 208, 2, NULL, NULL, NULL, '0', '202101180141421.pdf', 0, '122.175.152.77', '6', '2021-01-18 13:41:42', '2021-01-18 13:41:42'),
(385, 'CG11AL2808', 66, 1, '0', NULL, '0', '0', '202101190727201.jpeg', 0, '122.175.152.77', '6', '2021-01-19 07:27:20', '2021-01-19 07:27:20'),
(386, 'WB11C1541', 209, 2, '0', '0', '0', '0', '202101190812151.pdf', 0, '122.175.152.77', '6', '2021-01-19 08:12:15', '2021-01-19 08:12:15'),
(387, 'CG04JD7950', 209, 2, NULL, '0', '0', '0', '202101190813301.pdf', 0, '122.175.152.77', '6', '2021-01-19 08:13:30', '2021-01-19 08:13:30'),
(388, 'CG04MC8636', 210, 2, '0', '0', '0', '0', NULL, 0, '122.175.152.77', '6', '2021-01-19 10:13:36', '2021-01-19 10:13:36'),
(389, 'CG22R3404', 211, 3, '0', '0', '0', '0', '202101191033141.jpeg', 0, '122.175.152.77', '6', '2021-01-19 10:33:14', '2021-01-19 10:33:14'),
(390, 'CG06GM3959', 212, 3, '0', '0', '0', '0', '202101191118401.pdf', 0, '122.175.152.77', '6', '2021-01-19 11:18:40', '2021-01-19 11:18:40'),
(391, 'CG06GQ1294', 212, 3, '0', '0', '0', '0', '202101191119201.pdf', 0, '122.175.152.77', '6', '2021-01-19 11:19:20', '2021-01-19 11:19:20'),
(392, 'CG15DG6232', 213, 3, '0', '0', '0', '0', '202101191152521.jpeg', 0, '122.175.152.77', '6', '2021-01-19 11:52:52', '2021-01-19 11:52:52'),
(393, 'CG15A0103', 213, 3, '0', '0', '0', '0', '202101191153401.jpeg', 0, '122.175.152.77', '6', '2021-01-19 11:53:40', '2021-01-19 11:53:40'),
(394, 'CG14ME6474', 191, 2, '0', '0', '0', '0', '202101191221511.jpeg', 0, '122.175.152.77', '6', '2021-01-19 12:21:51', '2021-01-19 12:21:51'),
(395, 'CG06GM7950', 209, 3, '0', '0', '0', '0', '202101191226161.jpeg', 0, '122.175.152.77', '6', '2021-01-19 12:26:16', '2021-01-19 12:26:16'),
(396, 'CG12AY1535', 214, 1, NULL, NULL, NULL, '0', '202101191245571.jpeg', 0, '122.175.152.77', '6', '2021-01-19 12:45:57', '2021-01-19 12:45:57'),
(397, 'CG15DG5055', 43, 3, NULL, NULL, NULL, '0', NULL, 0, '122.175.152.77', '6', '2021-01-20 07:48:38', '2021-01-20 07:49:10'),
(398, 'CG15DN2155', 43, 3, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '2021-01-20 08:00:09', '2021-01-20 08:00:09'),
(399, 'CG15DF8557', 215, 3, '0', NULL, '0', '0', '202101200837031.jpeg', 0, '122.175.152.77', '6', '2021-01-20 08:37:03', '2021-01-20 08:37:03'),
(400, 'CG15DE3355', 43, 3, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '2021-01-20 09:25:18', '2021-01-20 09:25:18'),
(401, 'CG22R8251', 65, 3, '0', '0', '0', '0', '202101201205151.jpeg', 0, '122.175.152.77', '6', '2021-01-20 12:05:15', '2021-01-20 12:05:15'),
(402, 'CG22G0431', 216, 2, '0', '0', '0', '0', '202101201211271.jpeg', 0, '122.175.152.77', '6', '2021-01-20 12:11:27', '2021-01-20 12:11:27'),
(403, 'CG22H0430', 216, 2, '0', '0', '0', '0', '202101201212051.jpeg', 0, '122.175.152.77', '6', '2021-01-20 12:12:05', '2021-01-20 12:12:05'),
(404, 'CG22H0432', 216, 2, '0', '0', '0', '0', '202101201213271.jpeg', 0, '122.175.152.77', '6', '2021-01-20 12:13:27', '2021-01-20 12:13:27'),
(405, 'CG22J7066', 217, 4, '0', '0', '0', '0', '202101201227271.jpeg', 0, '122.175.152.77', '6', '2021-01-20 12:27:27', '2021-01-20 12:27:27'),
(406, 'CG22J3836', 218, 3, '0', '0', '0', '0', '202101201239131.jpeg', 0, '122.175.152.77', '6', '2021-01-20 12:39:13', '2021-01-20 12:39:13'),
(407, 'CG22J3835', 218, 3, '0', '0', '0', '0', '202101201240061.jpeg', 0, '122.175.152.77', '6', '2021-01-20 12:40:06', '2021-01-20 12:40:06'),
(408, 'CG22G7361', 218, 3, '0', '0', '0', '0', '202101201240301.jpeg', 0, '122.175.152.77', '6', '2021-01-20 12:40:30', '2021-01-20 12:40:30'),
(409, 'CG11AU6107', 219, 4, '0', '0', '0', '0', NULL, 0, '122.175.152.77', '6', '2021-01-20 13:00:43', '2021-01-20 13:00:43'),
(410, 'CG30B5312', 220, 4, '0', '0', '0', '0', '202101211158431.jpeg', 0, '122.175.152.77', '6', '2021-01-21 11:58:43', '2021-01-21 11:58:43'),
(411, 'CG15DH7121', 220, 4, '0', '0', '0', '0', '202101211200091.jpeg', 0, '122.175.152.77', '6', '2021-01-21 12:00:09', '2021-01-21 12:00:09'),
(412, 'CG15DH6479', 221, 3, '0', '0', '0', '0', '202101211207101.jpeg', 0, '122.175.152.77', '6', '2021-01-21 12:07:10', '2021-01-21 12:07:10'),
(413, 'CG06GM7662', 13, 3, '0', '0', '0', '0', '202101211235591.jpeg', 0, '122.175.152.77', '6', '2021-01-21 12:35:59', '2021-01-21 12:35:59'),
(414, 'CG06GM4124', 48, 3, '0', '0', '0', '0', '202101210126081.jpeg', 0, '122.175.152.77', '6', '2021-01-21 13:26:08', '2021-01-21 13:26:08'),
(415, 'CG04MK7766', 222, 3, '0', '0', '0', '0', NULL, 0, '122.175.152.77', '6', '2021-01-21 13:37:58', '2021-01-21 13:37:58'),
(416, 'CG04MB9490', 222, 3, '0', '0', '0', '0', NULL, 0, '122.175.152.77', '6', '2021-01-21 13:38:27', '2021-01-21 13:38:27'),
(417, 'CG04MB9488', 222, 3, '0', '0', '0', '0', NULL, 0, '122.175.152.77', '6', '2021-01-21 13:38:54', '2021-01-21 13:38:54'),
(418, 'CG04LQ5439', 222, 3, '0', '0', '0', '0', NULL, 0, '122.175.152.77', '6', '2021-01-21 13:39:20', '2021-01-21 13:39:20'),
(419, 'CG04MK6677', 222, 3, '0', '0', '0', '0', NULL, 0, '122.175.152.77', '6', '2021-01-21 13:39:39', '2021-01-21 13:39:39'),
(420, 'CG04MH5544', 222, 3, '0', '0', '0', '0', NULL, 0, '122.175.152.77', '6', '2021-01-21 13:40:03', '2021-01-21 13:40:03'),
(421, 'CG04MH6677', 222, 3, '0', '0', '0', '0', NULL, 0, '122.175.152.77', '6', '2021-01-21 13:40:22', '2021-01-21 13:40:22'),
(422, 'CG04MK5544', 222, 3, '0', '0', '0', '0', NULL, 0, '122.175.152.77', '6', '2021-01-21 13:40:47', '2021-01-21 13:40:47'),
(423, 'CG04MN1122', 222, 3, '0', '0', '0', '0', NULL, 0, '122.175.152.77', '6', '2021-01-21 13:41:08', '2021-01-21 13:41:08'),
(424, 'CG04MH8877', 222, 3, '0', '0', '0', '0', NULL, 0, '122.175.152.77', '6', '2021-01-21 13:41:26', '2021-01-21 13:41:26'),
(425, 'CG04MK8877', 222, 3, '0', '0', '0', '0', NULL, 0, '122.175.152.77', '6', '2021-01-21 13:41:51', '2021-01-21 13:41:51'),
(426, 'CG04LU6655', 222, 3, '0', '0', '0', '0', NULL, 0, '122.175.152.77', '6', '2021-01-21 13:42:27', '2021-01-21 13:42:27'),
(427, 'CG04LX4455', 222, 3, '0', '0', '0', '0', NULL, 0, '122.175.152.77', '6', '2021-01-21 13:43:01', '2021-01-21 13:43:01'),
(428, 'CG04MJ6655', 222, 3, '0', '0', '0', '0', NULL, 0, '122.175.152.77', '6', '2021-01-21 13:43:29', '2021-01-21 13:43:29'),
(429, 'CG15AC5246', 223, 3, '0', '0', '0', '0', '202101210152391.jpeg', 0, '122.175.152.77', '6', '2021-01-21 13:52:39', '2021-01-21 13:52:39'),
(430, 'CG15DE1155', 43, 3, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '2021-01-22 08:09:03', '2021-01-22 08:09:03'),
(431, 'CG15DE1186', 224, 3, '0', '0', '0', '0', NULL, 0, '122.175.152.77', '6', '2021-01-22 09:19:28', '2021-01-22 09:22:25'),
(432, 'CG15DF9716', 224, 3, '0', '0', '0', '0', NULL, 0, '122.175.152.77', '6', '2021-01-22 09:20:49', '2021-01-22 09:20:49'),
(433, 'CG15DG4861', 224, 3, '0', '0', '0', '0', NULL, 0, '122.175.152.77', '6', '2021-01-22 09:21:28', '2021-01-22 09:21:28'),
(434, 'CG15DH9570', 225, 2, '0', '0', '0', '0', '202101220931301.pdf', 0, '122.175.152.77', '6', '2021-01-22 09:31:30', '2021-01-22 09:31:30'),
(435, 'CG15DH6070', 225, 3, '0', '0', '0', '0', '202101220932331.pdf', 0, '122.175.152.77', '6', '2021-01-22 09:32:33', '2021-01-22 09:32:33'),
(436, 'CG04MQ3705', 226, 3, '0', '0', '0', '0', '202101220953151.jpeg', 0, '122.175.152.77', '6', '2021-01-22 09:53:15', '2021-01-22 09:53:15'),
(437, 'CG15AC5430', 227, 3, '0', '0', '0', '0', NULL, 0, '122.175.152.77', '6', '2021-01-22 10:12:02', '2021-01-22 10:12:02'),
(438, 'CG15BD3044', 227, 3, '0', '0', '0', '0', NULL, 0, '122.175.152.77', '6', '2021-01-22 10:12:37', '2021-01-22 10:12:37'),
(439, 'CG15AC5431', 227, 3, '0', '0', '0', '0', NULL, 0, '122.175.152.77', '6', '2021-01-22 10:13:01', '2021-01-22 10:13:01'),
(440, 'CG15DJ4709', 19, 3, '0', '0', '0', '0', '202101221016311.jpeg', 0, '122.175.152.77', '6', '2021-01-22 10:16:31', '2021-01-22 10:16:31'),
(441, 'CG12AP3876', 228, 2, '0', '0', '0', '0', '202101221053211.jpeg', 0, '122.175.152.77', '6', '2021-01-22 10:53:21', '2021-01-22 10:53:21'),
(442, 'CG12AU1181', 228, 2, '0', '0', '0', '0', '202101221054001.jpeg', 0, '122.175.152.77', '6', '2021-01-22 10:54:01', '2021-01-22 10:54:01'),
(444, 'CG15DH2969', 229, 2, '0', '0', '0', '0', '202101221115151.pdf', 0, '122.175.152.77', '6', '2021-01-22 11:15:15', '2021-01-22 11:15:15'),
(445, 'CG15DG7277', 229, 2, '0', '0', '0', '0', '202101221115481.pdf', 0, '122.175.152.77', '6', '2021-01-22 11:15:48', '2021-01-22 11:15:48'),
(446, 'CG06GR2545', 122, 3, '0', '0', '0', '0', '202101221125261.jpeg', 0, '122.175.152.77', '6', '2021-01-22 11:25:26', '2021-01-22 11:25:26'),
(447, 'CG06GR2547', 122, 2, '0', '0', '0', '0', '202101221125581.jpeg', 0, '122.175.152.77', '6', '2021-01-22 11:25:58', '2021-01-22 11:25:58'),
(448, 'CG15DM5153', 230, 3, '0', '0', '0', '0', '202101221135071.jpeg', 0, '122.175.152.77', '6', '2021-01-22 11:35:07', '2021-01-22 11:35:07'),
(449, 'CG22G8663', 231, 3, '0', '0', '0', '0', '202101221140461.jpeg', 0, '122.175.152.77', '6', '2021-01-22 11:40:46', '2021-01-22 11:40:46'),
(450, 'CG22G8662', 231, 3, '0', '0', '0', '0', '202101221141171.jpeg', 0, '122.175.152.77', '6', '2021-01-22 11:41:17', '2021-01-22 11:41:17'),
(451, 'CG10X0288', 231, 3, '0', '0', '0', '0', '202101221141571.jpeg', 0, '122.175.152.77', '6', '2021-01-22 11:41:57', '2021-01-22 11:41:57'),
(452, 'CG22P3601', 231, 3, '0', '0', '0', '0', '202101221143161.jpeg', 0, '122.175.152.77', '6', '2021-01-22 11:43:16', '2021-01-22 11:43:16'),
(453, 'CG15DJ7023', 232, 3, '0', '0', '0', '0', '202101270904221.jpeg', 0, '122.175.246.186', '6', '2021-01-27 09:04:22', '2021-01-27 09:04:22'),
(454, 'CG15DM7011', 180, 4, '0', '0', '0', '0', '202101270925271.jpeg', 0, '122.175.246.186', '6', '2021-01-27 09:25:27', '2021-01-27 09:25:27'),
(455, 'CG15AC8511', 180, 4, '0', '0', '0', '0', '202101270926081.jpeg', 0, '122.175.246.186', '6', '2021-01-27 09:26:08', '2021-01-27 09:26:08'),
(456, 'CG15DJ7203', 232, 4, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '2021-01-27 12:37:54', '2021-01-27 12:37:54'),
(457, 'CG11AR9679', 233, 3, '0', '0', '0', '0', '202101300721251.jpeg', 0, '122.175.168.139', '6', '2021-01-30 07:21:25', '2021-01-30 07:21:25'),
(458, 'CG06GT8577', 3, 3, NULL, NULL, NULL, '0', NULL, 0, '110.224.212.155', '6', '2021-02-04 10:10:17', '2021-02-09 09:57:15');

-- --------------------------------------------------------

--
-- Table structure for table `trucktypes`
--

CREATE TABLE `trucktypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trucktype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avg_criteria` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `ipaddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createdby` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trucktypes`
--

INSERT INTO `trucktypes` (`id`, `trucktype`, `avg_criteria`, `status`, `ipaddress`, `createdby`, `created_at`, `updated_at`) VALUES
(1, '10', '3', '1', '122.175.217.115', 1, '2020-10-26 10:15:08', '2020-10-26 10:15:08'),
(2, '12', '3', '1', '122.175.217.115', 1, '2020-10-26 10:15:13', '2020-10-26 10:15:13'),
(3, '14', '3', '1', '122.175.217.115', 1, '2020-10-26 10:15:21', '2020-10-26 10:15:21'),
(4, '16', '3', '1', '122.175.217.115', 1, '2020-10-26 10:15:58', '2020-10-26 10:15:58');

-- --------------------------------------------------------

--
-- Table structure for table `truck_documents`
--

CREATE TABLE `truck_documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `truck_id` bigint(20) UNSIGNED NOT NULL,
  `permit_issue_date` date DEFAULT NULL,
  `permit_expiry_date` date DEFAULT NULL,
  `fitness_issue_date` date DEFAULT NULL,
  `fitness_expiry_date` date DEFAULT NULL,
  `ins_issue_date` date DEFAULT NULL,
  `ins_expiry_date` date DEFAULT NULL,
  `road_issue_date` date DEFAULT NULL,
  `road_expiry_date` date DEFAULT NULL,
  `poll_issue_date` date DEFAULT NULL,
  `poll_expiry_date` date DEFAULT NULL,
  `noti_issue_date` date DEFAULT NULL,
  `noti_expiry_date` date DEFAULT NULL,
  `khanij_issue_date` date DEFAULT NULL,
  `khanij_expiry_date` date DEFAULT NULL,
  `permit_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fitness_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ins_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `road_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `poll_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nati_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `khanij_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createdby` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `truck_documents`
--

INSERT INTO `truck_documents` (`id`, `truck_id`, `permit_issue_date`, `permit_expiry_date`, `fitness_issue_date`, `fitness_expiry_date`, `ins_issue_date`, `ins_expiry_date`, `road_issue_date`, `road_expiry_date`, `poll_issue_date`, `poll_expiry_date`, `noti_issue_date`, `noti_expiry_date`, `khanij_issue_date`, `khanij_expiry_date`, `permit_file`, `fitness_file`, `ins_file`, `road_file`, `poll_file`, `nati_file`, `khanij_file`, `createdby`, `created_at`, `updated_at`) VALUES
(1, 6, '2020-11-18', '2020-11-18', '2020-11-01', '2020-11-30', '2020-11-09', '2020-11-29', '2020-11-08', '2020-12-07', '2020-11-09', '2020-12-04', '2018-04-03', '2021-11-01', '2020-11-06', '2020-11-26', '[\"202012220954321.jpeg\",\"202012220954322.jpeg\"]', '202012180734242.png', '202012180734243.png', '202012180734244.png', '202012180734245.png', '202012180734246.png', '202012180734247.png', 6, '2020-11-18 00:07:39', '2020-12-22 09:54:32');

-- --------------------------------------------------------

--
-- Table structure for table `truck_other_expenses`
--

CREATE TABLE `truck_other_expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vehicle` int(11) DEFAULT NULL,
  `driver` int(11) DEFAULT NULL,
  `expensesDate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HEAD` int(11) DEFAULT NULL,
  `AMT` double DEFAULT NULL,
  `narration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `truck_services`
--

CREATE TABLE `truck_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vehicle` int(11) DEFAULT NULL,
  `driver` int(11) DEFAULT NULL,
  `serviceDate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serviceNumber` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meterReading` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `narration` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `truck_service_details`
--

CREATE TABLE `truck_service_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serviceType` int(11) DEFAULT NULL,
  `expiryDate` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AMT` double(8,2) DEFAULT NULL,
  `remark` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `truckServiceId` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tyre_mappings`
--

CREATE TABLE `tyre_mappings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `godown` int(11) NOT NULL,
  `truck_number` int(11) NOT NULL,
  `tyre_type` int(11) NOT NULL,
  `Serial_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meter_reading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload_date` date NOT NULL,
  `images` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tyre_mappings`
--

INSERT INTO `tyre_mappings` (`id`, `godown`, `truck_number`, `tyre_type`, `Serial_number`, `meter_reading`, `upload_date`, `images`, `created_at`, `updated_at`) VALUES
(7, 1, 6, 43, '3', '100', '2021-02-25', '[\"202102251143581.png\"]', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tyre_opening_balances`
--

CREATE TABLE `tyre_opening_balances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `truck_number` int(11) DEFAULT NULL,
  `tyre_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial_number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meter_reading` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_date` date DEFAULT NULL,
  `image1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tyre_opening_balances`
--

INSERT INTO `tyre_opening_balances` (`id`, `truck_number`, `tyre_type`, `serial_number`, `name`, `meter_reading`, `upload_date`, `image1`, `image2`, `created_at`, `updated_at`) VALUES
(5, 6, 'Dumy Right 2', '123456', 'dr2 testing', '120', '2021-02-25', '202102250810280000001.png', '202102250810280000002.png', NULL, NULL),
(7, 6, 'Stepney', '786998', 'testing 2nd', '200', '2021-02-25', '202102250922320000001.png', '202102250922320000002.png', NULL, NULL),
(8, NULL, NULL, NULL, NULL, NULL, '1970-01-01', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tyre_type`
--

CREATE TABLE `tyre_type` (
  `id` int(11) NOT NULL,
  `truck_tyre` int(11) NOT NULL,
  `tyre_type` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tyre_type`
--

INSERT INTO `tyre_type` (`id`, `truck_tyre`, `tyre_type`) VALUES
(1, 6, 'Front Feft'),
(2, 6, 'Front Right'),
(3, 6, 'Crown Left 1'),
(4, 6, 'Crown Right 1'),
(5, 6, 'Crown Left 2'),
(6, 6, 'Crown Right 2'),
(7, 10, 'Front Left'),
(8, 10, 'Front Right'),
(9, 10, 'Crown Left 1'),
(10, 10, 'Crown Left 2'),
(11, 10, 'Crown Right 1'),
(12, 10, 'Crown Right 2'),
(13, 10, 'Dummy Left 1'),
(14, 10, 'Dummy Left 2'),
(15, 10, 'Dummy Right 1'),
(16, 10, 'Dummy Right 2'),
(17, 12, 'Front Left'),
(18, 12, 'Front Right'),
(19, 12, 'Leter Left'),
(20, 12, 'Leter Right'),
(21, 12, 'Crown Left 1'),
(22, 12, 'Crown Left 2'),
(23, 12, 'Crown Right 1'),
(24, 12, 'Crown Right 2'),
(25, 12, 'Dummy Left 1'),
(26, 12, 'Dummy Left 2'),
(27, 12, 'Dummy Right 1'),
(28, 12, 'Dummy Right 2'),
(29, 14, 'Front Left'),
(30, 14, 'Front Right'),
(31, 14, 'Front Single Left'),
(32, 14, 'Front Single Right'),
(33, 14, 'Lefter Left'),
(34, 14, 'Lefter Right'),
(35, 14, 'Crown Left 1'),
(36, 14, 'Crown Left 2'),
(37, 14, 'Crown Right 1'),
(38, 14, 'Crown Right 2'),
(39, 14, 'Dummy Left 1'),
(40, 14, 'Dummy Left 2'),
(41, 14, 'Dummy Right 1'),
(42, 14, 'Dummy Right 2'),
(43, 16, 'From Left'),
(44, 16, 'From Right'),
(45, 16, 'From Single Left'),
(46, 16, 'From Single Right'),
(47, 16, 'Lefter Left 1'),
(48, 16, 'Lefter Left 2'),
(49, 16, 'Lefter Right 1'),
(50, 16, 'Lefter Right 2'),
(51, 16, 'Crown Left 1'),
(52, 16, 'Crown Left 2'),
(53, 16, 'Crown Right 1'),
(54, 16, 'Crown Right 2'),
(55, 16, 'Dummy Left 1'),
(56, 16, 'Dummy Left 2'),
(57, 16, 'Dummy Right 1'),
(58, 16, 'Dummy Right 2');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Pcs', 0, '2020-11-17 02:38:35', '2020-11-17 04:17:25'),
(2, 'Packets', 0, '2020-11-17 02:38:42', '2020-11-17 04:17:36'),
(4, 'Boxes', 0, '2020-11-17 04:17:48', '2020-11-17 04:17:48'),
(5, 'KG', 0, '2020-11-17 04:17:57', '2020-11-17 04:17:57'),
(6, 'MT', 0, '2020-11-17 04:18:03', '2020-11-17 04:18:03'),
(7, 'Litres', 0, '2020-11-17 04:18:11', '2020-11-17 04:18:11'),
(8, 'Galon', 0, '2020-11-17 04:18:18', '2020-11-17 04:18:18'),
(9, 'Meter', 0, '2020-11-17 04:18:39', '2020-11-17 04:18:39'),
(10, 'Bundle', 0, '2020-11-17 04:18:48', '2020-11-17 04:18:48'),
(11, 'Bag', 0, '2020-12-09 11:48:11', '2020-12-09 11:48:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tirit sahu', 'tirit@gmail.com', 'Admin', NULL, '$2y$10$ZithhmKuwYCRo28.I52YRuR00ZBeuTzrKCQZf09cQL7NKOlohJ0ES', NULL, '2020-10-28 02:08:28', '2020-10-28 02:08:28'),
(2, 'Admin', 'admin@gmail.com', 'Admin', NULL, '$2y$10$djM9tYdUdAKhS4.8fOyJseAaO1ijUUdw80wSF9yTYjF7adk4XkRZa', 'c84JVYiF0giHW48FCF6a2ufMYJbWnjvRmvfEvOPS6XLlyGS9a0Ex0z9IYqFb', '2020-10-29 01:24:57', '2020-10-29 01:24:57'),
(3, 'tara', 'email@gmail.com', 'Admin', NULL, '$2y$10$S6DmB7nCZ/5A8GXDtYlKTOev5rMx5VBMSXpKj.mF4bHt5Ybe9OE2q', NULL, '2020-11-02 12:24:57', '2020-11-02 12:24:57'),
(4, 'ghanshyam', 'ghanshyam@gmail.com', 'Employee', NULL, '$2y$10$eDQc8XutszRkGtoxTxP4/uJn4kXxBmmQlLZ7LZDB1ezt9XLZpwGhe', NULL, '2020-11-03 13:14:05', '2020-11-03 13:14:05'),
(5, 'megha', 'megha@gmail.com', 'Employee', NULL, '$2y$10$8Ys5QLojkm8k9cmphqZeNe3bXWZdh5VVCAhh09nX8j5dt.wzQx8XC', NULL, '2020-12-09 11:52:38', '2020-12-09 11:52:38'),
(6, 'ranjana', 'ranjana@gmail.com', 'Employee', NULL, '$2y$10$J.K9IO78DhSpMv.yZwdZAeCdGVsSjmHIi8CtaUjLimW6HP0w7Dr06', NULL, '2020-12-09 11:53:00', '2020-12-09 11:53:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_settings`
--
ALTER TABLE `account_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `banks_createdby_foreign` (`createdby`);

--
-- Indexes for table `battery_opening_balances`
--
ALTER TABLE `battery_opening_balances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `companies_state_id_foreign` (`state_id`),
  ADD KEY `companies_createdby_foreign` (`createdby`);

--
-- Indexes for table `consignees`
--
ALTER TABLE `consignees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consignors`
--
ALTER TABLE `consignors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dashboard_pin_sets`
--
ALTER TABLE `dashboard_pin_sets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver_mappings`
--
ALTER TABLE `driver_mappings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generate_salaries`
--
ALTER TABLE `generate_salaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `godowns`
--
ALTER TABLE `godowns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `head_masters`
--
ALTER TABLE `head_masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hemali_payments`
--
ALTER TABLE `hemali_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hemals`
--
ALTER TABLE `hemals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hsn_and_serialnumbers`
--
ALTER TABLE `hsn_and_serialnumbers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income_expenses_heads`
--
ALTER TABLE `income_expenses_heads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_categories`
--
ALTER TABLE `item_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_issues`
--
ALTER TABLE `item_issues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_issue_details`
--
ALTER TABLE `item_issue_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loading_entries`
--
ALTER TABLE `loading_entries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loading_entries_createdby_foreign` (`createdby`);

--
-- Indexes for table `loading_payments`
--
ALTER TABLE `loading_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loading_receiveings`
--
ALTER TABLE `loading_receiveings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `petrolpumps`
--
ALTER TABLE `petrolpumps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `petrolpumps_createdby_foreign` (`createdby`),
  ADD KEY `petrolpumps_state_id_foreign` (`state_id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`),
  ADD KEY `places_session_id_foreign` (`session_id`),
  ADD KEY `places_createdby_foreign` (`createdby`);

--
-- Indexes for table `purchase_entries`
--
ALTER TABLE `purchase_entries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_entry_details`
--
ALTER TABLE `purchase_entry_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rack_handlings`
--
ALTER TABLE `rack_handlings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_createdby_foreign` (`createdby`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD KEY `states_session_id_foreign` (`session_id`),
  ADD KEY `states_createdby_foreign` (`createdby`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `truckowners`
--
ALTER TABLE `truckowners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `truckowners_createdby_foreign` (`createdby`);

--
-- Indexes for table `trucks`
--
ALTER TABLE `trucks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trucktypes`
--
ALTER TABLE `trucktypes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trucktypes_createdby_foreign` (`createdby`);

--
-- Indexes for table `truck_documents`
--
ALTER TABLE `truck_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `truck_other_expenses`
--
ALTER TABLE `truck_other_expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `truck_services`
--
ALTER TABLE `truck_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `truck_service_details`
--
ALTER TABLE `truck_service_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tyre_mappings`
--
ALTER TABLE `tyre_mappings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tyre_opening_balances`
--
ALTER TABLE `tyre_opening_balances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tyre_type`
--
ALTER TABLE `tyre_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
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
-- AUTO_INCREMENT for table `account_settings`
--
ALTER TABLE `account_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `battery_opening_balances`
--
ALTER TABLE `battery_opening_balances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `consignees`
--
ALTER TABLE `consignees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `consignors`
--
ALTER TABLE `consignors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dashboard_pin_sets`
--
ALTER TABLE `dashboard_pin_sets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `driver_mappings`
--
ALTER TABLE `driver_mappings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `generate_salaries`
--
ALTER TABLE `generate_salaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `godowns`
--
ALTER TABLE `godowns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `head_masters`
--
ALTER TABLE `head_masters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hemali_payments`
--
ALTER TABLE `hemali_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hemals`
--
ALTER TABLE `hemals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hsn_and_serialnumbers`
--
ALTER TABLE `hsn_and_serialnumbers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `income_expenses_heads`
--
ALTER TABLE `income_expenses_heads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `item_categories`
--
ALTER TABLE `item_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `item_issues`
--
ALTER TABLE `item_issues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `item_issue_details`
--
ALTER TABLE `item_issue_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `loading_entries`
--
ALTER TABLE `loading_entries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1117;

--
-- AUTO_INCREMENT for table `loading_payments`
--
ALTER TABLE `loading_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `loading_receiveings`
--
ALTER TABLE `loading_receiveings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=776;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `petrolpumps`
--
ALTER TABLE `petrolpumps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `purchase_entries`
--
ALTER TABLE `purchase_entries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `purchase_entry_details`
--
ALTER TABLE `purchase_entry_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rack_handlings`
--
ALTER TABLE `rack_handlings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `truckowners`
--
ALTER TABLE `truckowners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235;

--
-- AUTO_INCREMENT for table `trucks`
--
ALTER TABLE `trucks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=459;

--
-- AUTO_INCREMENT for table `trucktypes`
--
ALTER TABLE `trucktypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `truck_documents`
--
ALTER TABLE `truck_documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `truck_other_expenses`
--
ALTER TABLE `truck_other_expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `truck_services`
--
ALTER TABLE `truck_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `truck_service_details`
--
ALTER TABLE `truck_service_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tyre_mappings`
--
ALTER TABLE `tyre_mappings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tyre_opening_balances`
--
ALTER TABLE `tyre_opening_balances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tyre_type`
--
ALTER TABLE `tyre_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `banks`
--
ALTER TABLE `banks`
  ADD CONSTRAINT `banks_createdby_foreign` FOREIGN KEY (`createdby`) REFERENCES `users` (`id`);

--
-- Constraints for table `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `companies_createdby_foreign` FOREIGN KEY (`createdby`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `companies_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`);

--
-- Constraints for table `loading_entries`
--
ALTER TABLE `loading_entries`
  ADD CONSTRAINT `loading_entries_createdby_foreign` FOREIGN KEY (`createdby`) REFERENCES `users` (`id`);

--
-- Constraints for table `petrolpumps`
--
ALTER TABLE `petrolpumps`
  ADD CONSTRAINT `petrolpumps_createdby_foreign` FOREIGN KEY (`createdby`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `petrolpumps_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`);

--
-- Constraints for table `places`
--
ALTER TABLE `places`
  ADD CONSTRAINT `places_createdby_foreign` FOREIGN KEY (`createdby`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `places_session_id_foreign` FOREIGN KEY (`session_id`) REFERENCES `sessions` (`id`);

--
-- Constraints for table `sessions`
--
ALTER TABLE `sessions`
  ADD CONSTRAINT `sessions_createdby_foreign` FOREIGN KEY (`createdby`) REFERENCES `users` (`id`);

--
-- Constraints for table `states`
--
ALTER TABLE `states`
  ADD CONSTRAINT `states_createdby_foreign` FOREIGN KEY (`createdby`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `states_session_id_foreign` FOREIGN KEY (`session_id`) REFERENCES `sessions` (`id`);

--
-- Constraints for table `truckowners`
--
ALTER TABLE `truckowners`
  ADD CONSTRAINT `truckowners_createdby_foreign` FOREIGN KEY (`createdby`) REFERENCES `users` (`id`);

--
-- Constraints for table `trucktypes`
--
ALTER TABLE `trucktypes`
  ADD CONSTRAINT `trucktypes_createdby_foreign` FOREIGN KEY (`createdby`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
