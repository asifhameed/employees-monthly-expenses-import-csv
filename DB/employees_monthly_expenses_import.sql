-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2023 at 07:37 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employees_monthly_expenses_import`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_employees_monthly_expenses`
--

CREATE TABLE `emp_employees_monthly_expenses` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `category` varchar(100) DEFAULT NULL,
  `employee_name` varchar(50) DEFAULT NULL,
  `employee_address` text DEFAULT NULL,
  `employee_email_address` varchar(50) DEFAULT NULL,
  `expense_description` longtext DEFAULT NULL,
  `pre_tax_amount` float NOT NULL,
  `tax_amount` float NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_employees_monthly_expenses`
--

INSERT INTO `emp_employees_monthly_expenses` (`id`, `date`, `category`, `employee_name`, `employee_address`, `employee_email_address`, `expense_description`, `pre_tax_amount`, `tax_amount`, `created_date`, `updated_date`, `status`) VALUES
(1, '2018-12-01', 'Travel', 'Steve Rogers', '783 Park Ave New York NY 10021', 'steve_rogers@gmail.com', 'Taxi ride', 350, 31.06, '2019-05-03 01:49:36', '2019-05-03 16:49:36', 1),
(2, '2018-12-15', 'Meals and Entertainment', 'Tony Stark', '1 Infinite Loop Cupertino CA 95014', 'tony_stark@gmail.com', 'Team lunch', 235, 17.63, '2019-05-03 01:49:36', '2019-05-03 16:49:36', 1),
(3, '2018-12-31', 'Computer - Hardware', 'Bruce Banner', '1 Infinite Loop Cupertino CA 95014', 'bruce_banner@gmail.com', 'HP Laptop', 999, 74.93, '2019-05-03 01:49:36', '2019-05-03 16:49:36', 1),
(4, '2018-12-14', 'Computer - Software', 'Nick Fury', '1 Infinite Loop Cupertino CA 95014', 'nick_fury@gmail.com', 'Microsoft Office', 899, 67.43, '2019-05-03 01:49:36', '2019-05-03 16:49:36', 1),
(5, '2018-12-06', 'Computer - Software', 'Natasha Romanoff', '1600 Amphitheatre Parkway Mountain View CA 94043', 'natasha_romanoff@gmail.com', 'iCloud Subscription', 50, 3.75, '2019-05-03 01:49:36', '2019-05-03 16:49:36', 1),
(6, '2018-12-09', 'Computer - Software', 'Stephen Strange', '1600 Amphitheatre Parkway Mountain View CA 94043', 'stephen_strange@gmail.com', 'iCloud Subscription', 50, 3.75, '2019-05-03 01:49:36', '2019-05-03 16:49:36', 1),
(7, '2018-11-10', 'Meals and Entertainment', 'Carol Danvers', '1600 Amphitheatre Parkway Mountain View CA 94043', 'carol_danvers@gmail.com', 'Coffee with Steve', 300, 22.5, '2019-05-03 01:49:36', '2019-05-03 16:49:36', 1),
(8, '2018-11-12', 'Travel', 'Stephen Strange', '1600 Amphitheatre Parkway Mountain View CA 94043', 'stephen_strange@gmail.com', 'Taxi ride', 230, 17.25, '2019-05-03 01:49:36', '2019-05-03 16:49:36', 1),
(9, '2018-11-20', 'Meals and Entertainment', 'Steve Rogers', '783 Park Ave New York NY 10021', 'steve_rogers@gmail.com', 'Client dinner', 200, 15, '2019-05-03 01:49:36', '2019-05-03 16:49:36', 1),
(10, '2018-10-04', 'Travel', 'Carol Danvers', '1600 Amphitheatre Parkway Mountain View CA 94043', 'carol_danvers@gmail.com', 'Flight to Miami', 200, 15, '2019-05-03 01:49:36', '2019-05-03 16:49:36', 1),
(11, '2018-10-12', 'Computer - Hardware', 'Steve Rogers', '783 Park Ave New York NY 10021', 'steve_rogers@gmail.com', 'Macbook Air', 999, 177.41, '2019-05-03 01:49:36', '2019-05-03 16:49:36', 1),
(12, '2018-12-09', 'Computer - Software', 'Tony Stark', '1 Infinite Loop Cupertino CA 95014', 'tony_stark@gmail.com', 'Dropbox Subscription', 15, 1.13, '2019-05-03 01:49:36', '2019-05-03 16:49:36', 1),
(13, '2018-09-18', 'Travel', 'Nick Fury', '1 Infinite Loop Cupertino CA 95014', 'nick_fury@gmail.com', 'Taxi ride', 200, 15, '2019-05-03 01:49:36', '2019-05-03 16:49:36', 1),
(14, '2018-09-30', 'Office Supplies', 'Stephen Strange', '1600 Amphitheatre Parkway Mountain View CA 94043', 'stephen_strange@gmail.com', 'Paper', 200, 15, '2019-05-03 01:49:36', '2019-05-03 16:49:36', 1),
(15, '2018-12-30', 'Meals and Entertainment', 'Stephen Strange', '1600 Amphitheatre Parkway Mountain View CA 94043', 'stephen_strange@gmail.com', 'Dinner with potential acquisition', 200, 15, '2019-05-03 01:49:36', '2019-05-03 16:49:36', 1),
(16, '2019-01-06', 'Computer - Hardware', 'Carol Danvers', '1600 Amphitheatre Parkway Mountain View CA 94043', 'carol_danvers@gmail.com', 'iPhone', 200, 15, '2019-05-03 01:49:36', '2019-05-03 16:49:36', 1),
(17, '2019-01-07', 'Travel', 'Tony Stark', '1 Infinite Loop Cupertino CA 95014', 'tony_stark@gmail.com', 'Airplane ticket to NY', 200, 15, '2019-05-03 01:49:36', '2019-05-03 16:49:36', 1),
(18, '2019-02-03', 'Meals and Entertainment', 'Bruce Banner', '1 Infinite Loop Cupertino CA 95014', 'bruce_banner@gmail.com', 'Starbucks coffee', 12, 0.9, '2019-05-03 01:49:36', '2019-05-03 16:49:36', 1),
(19, '2019-02-18', 'Travel', 'Carol Danvers', '1600 Amphitheatre Parkway Mountain View CA 94043', 'carol_danvers@gmail.com', 'Airplane ticket to NY', 1500, 112.5, '2019-05-03 01:49:36', '2019-05-03 16:49:36', 1),
(20, '2023-12-01', 'test', 'test', 'test address', 'test@gmail.com', 'test', 200, 100, '2023-10-24 07:20:02', '2023-10-24 10:20:02', 1),
(21, '2023-12-01', 'test', 'test', 'test address', 'test@gmail.com', 'test', 200, 100, '2023-10-24 07:20:46', '2023-10-24 10:20:46', 1),
(22, '2023-12-01', 'test', 'test', 'test address', 'test@gmail.com', 'test', 200, 100, '2023-10-24 07:22:46', '2023-10-24 10:22:46', 1),
(23, '2023-12-01', 'test', 'test', 'test address', 'test@gmail.com', 'test', 200, 100, '2023-10-24 07:23:22', '2023-10-24 10:23:22', 1),
(24, '2023-12-01', 'test', 'test', 'test address', 'test@gmail.com', 'test', 200, 100, '2023-10-24 07:35:42', '2023-10-24 10:35:42', 1);

-- --------------------------------------------------------

--
-- Table structure for table `emp_web_config`
--

CREATE TABLE `emp_web_config` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `field_name` varchar(100) DEFAULT NULL,
  `value` text DEFAULT NULL,
  `constant_name` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_web_config`
--

INSERT INTO `emp_web_config` (`id`, `heading`, `field_name`, `value`, `constant_name`, `type`, `created_date`, `updated_date`) VALUES
(1, 'Project Name', 'project_name', 'Employees Monthly Expenses Import', '_PROJECT_NAME', 'VARCHAR', '2019-05-01 02:04:29', '2019-05-01 02:04:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_employees_monthly_expenses`
--
ALTER TABLE `emp_employees_monthly_expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_web_config`
--
ALTER TABLE `emp_web_config`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_employees_monthly_expenses`
--
ALTER TABLE `emp_employees_monthly_expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `emp_web_config`
--
ALTER TABLE `emp_web_config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
