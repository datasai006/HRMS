-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2024 at 06:08 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrms`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `zip_code` varchar(20) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `preferred_contact_method` varchar(50) DEFAULT NULL,
  `contact_time` varchar(50) DEFAULT NULL,
  `interested_property_type` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `lead_id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `lead_name` varchar(255) DEFAULT NULL,
  `lead_number` varchar(20) DEFAULT NULL,
  `lead_source` varchar(50) DEFAULT NULL,
  `lead_email` varchar(255) DEFAULT NULL,
  `lead_interest` varchar(255) DEFAULT NULL,
  `lead_message` text DEFAULT NULL,
  `status` varchar(50) DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`lead_id`, `project_id`, `lead_name`, `lead_number`, `lead_source`, `lead_email`, `lead_interest`, `lead_message`, `status`, `created_at`) VALUES
(1, NULL, 'rlds', '1', 'online', 'datasai006@gmail.com', 'yes', 'i need a villa', 'pending', '2024-07-05 04:00:47');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_type` varchar(50) NOT NULL,
  `property_location` varchar(255) DEFAULT NULL,
  `property_address` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `total_units` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `latitude` decimal(10,8) DEFAULT NULL,
  `longitude` decimal(11,8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `project_name`, `project_type`, `property_location`, `property_address`, `city`, `state`, `total_units`, `status`, `latitude`, `longitude`) VALUES
(1, 'hiki', 'Villas', 'hyderbad', 'ramalayam', 'kurnool', 'Andhra Pradesh', 200, 'active', 15.81383680, 78.05133020),
(2, 'rlds', 'Individual', 'kurnool', 'ramalayam', 'kurnool', 'Andhra Pradesh', 500, 'active', NULL, NULL),
(3, 'car', 'Farmlands', NULL, 'ramalayam', 'kurnool', 'Andhra Pradesh', 200, 'active', 15.81383680, 78.05337600),
(4, 'car', 'Apartments', NULL, 'ramalayam', 'kurnool', 'Andhra Pradesh', 540, 'active', 17.44335710, 78.38221110);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_amenities`
--

CREATE TABLE `tbl_amenities` (
  `amenity_id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `amenity_name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip_code` varchar(20) NOT NULL,
  `country` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `preferred_contact_method` enum('phone','email') NOT NULL,
  `contact_time` varchar(50) NOT NULL,
  `interested_property_type` enum('apartment','house','commercial') NOT NULL,
  `status` enum('active','inactive') DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `first_name`, `last_name`, `email`, `phone_number`, `address`, `city`, `state`, `zip_code`, `country`, `created_at`, `preferred_contact_method`, `contact_time`, `interested_property_type`, `status`) VALUES
(1, 'rachuru', 'venkateswarlu', 'datasai006@gmail.com', '09550262808', 'ramalayam', 'kurnool', 'Andhra Pradesh', '518411', 'India', '2024-06-27 11:29:45', 'phone', '9', 'commercial', 'active'),
(2, 'vakadhari', 'vasu', 'vasu@gmail.com', '000012222', 'ramalayam', 'kurnool', 'Andhra Pradesh', '518411', 'India', '2024-06-27 12:03:20', 'phone', '1', 'house', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `doj` date NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL,
  `attendance` text DEFAULT NULL,
  `payroll` text DEFAULT NULL,
  `performance_reviews` text DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`id`, `first_name`, `last_name`, `email`, `password`, `gender`, `country`, `state`, `mobile_no`, `doj`, `qualification`, `role_id`, `attendance`, `payroll`, `performance_reviews`, `status`) VALUES
(1, 'rachuru', 'venkateswarlu', 'datasai006@gmail.com', '$2y$10$/Nwrr36LQg3DQ/Qtm1E5beco/0W.SmIVEn4zXib/WSLem0Inucwuu', 'male', 'India', 'Andhra Pradesh', '09550262808', '2024-07-01', 'Btech ', 0, '', '', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoices`
--

CREATE TABLE `tbl_invoices` (
  `invoice_id` int(11) NOT NULL,
  `po_id` int(11) NOT NULL,
  `invoice_number` varchar(50) NOT NULL,
  `invoice_date` date DEFAULT NULL,
  `total_amount` double DEFAULT NULL,
  `status` varchar(50) DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_invoices`
--

INSERT INTO `tbl_invoices` (`invoice_id`, `po_id`, `invoice_number`, `invoice_date`, `total_amount`, `status`) VALUES
(1, 1, '45855455545', '2024-07-24', 20000, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice_payments`
--

CREATE TABLE `tbl_invoice_payments` (
  `payment_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `payment_date` date DEFAULT NULL,
  `payment_amount` double DEFAULT NULL,
  `payment_method` varchar(50) DEFAULT NULL,
  `remaining_balance` double DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_invoice_payments`
--

INSERT INTO `tbl_invoice_payments` (`payment_id`, `invoice_id`, `payment_date`, `payment_amount`, `payment_method`, `remaining_balance`, `status`) VALUES
(1, 1, '2024-07-16', 20000, 'Cash', 201504, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_po_items`
--

CREATE TABLE `tbl_po_items` (
  `po_item_id` int(11) NOT NULL,
  `po_id` int(11) NOT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `item_type` varchar(50) DEFAULT NULL,
  `item_description` text DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `unit_price` double DEFAULT NULL,
  `total_price` double DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_po_items`
--

INSERT INTO `tbl_po_items` (`po_item_id`, `po_id`, `item_name`, `item_type`, `item_description`, `quantity`, `unit_price`, `total_price`, `status`) VALUES
(1, 1, 'cement', 'mixture', 'cement', 13, 500, 6500, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project`
--

CREATE TABLE `tbl_project` (
  `id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `unit_number_or_plot_number` varchar(50) DEFAULT NULL,
  `area_sq_ft` float DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `facing` varchar(50) DEFAULT NULL,
  `sides` varchar(255) DEFAULT NULL,
  `first_floor` text DEFAULT NULL,
  `second_floor` text DEFAULT NULL,
  `construction_area` varchar(50) DEFAULT NULL,
  `total_floors` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `parking_spot` varchar(255) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchase_orders`
--

CREATE TABLE `tbl_purchase_orders` (
  `po_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `po_number` varchar(50) NOT NULL,
  `po_date` date DEFAULT NULL,
  `expected_delivery_date` date DEFAULT NULL,
  `total_amount` double DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_purchase_orders`
--

INSERT INTO `tbl_purchase_orders` (`po_id`, `vendor_id`, `po_number`, `po_date`, `expected_delivery_date`, `total_amount`, `status`) VALUES
(1, 1, '11', '2024-07-25', '2024-07-27', 10000, NULL),
(2, 1, '11', '2024-07-25', '2024-07-27', 10000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_specifications`
--

CREATE TABLE `tbl_specifications` (
  `specification_id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `specification_name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `mobile`, `password`, `status`) VALUES
(1, 'rachuru venkateswarlu', '9550262808', '$2y$10$FS.HraZAcK7pVFuOLAgKLeoHoRZ93ZsOeAAZP3j09qNz6l2aLqrF.', 'active'),
(2, 'demo', '1112223330', '$2y$10$Jdy2bmYaUB93gaSQpNHMYegnqY7wTwqyeHY9w08jDtdObbRBlhVWC', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vendors`
--

CREATE TABLE `tbl_vendors` (
  `id` int(11) NOT NULL,
  `vendor_name` varchar(50) NOT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `contact_number` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `zip_code` varchar(20) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `gst_number` varchar(50) DEFAULT NULL,
  `contract_start_date` date DEFAULT NULL,
  `contract_end_date` date DEFAULT NULL,
  `status` varchar(50) DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_vendors`
--

INSERT INTO `tbl_vendors` (`id`, `vendor_name`, `contact_person`, `contact_number`, `email`, `address`, `city`, `state`, `zip_code`, `country`, `gst_number`, `contract_start_date`, `contract_end_date`, `status`) VALUES
(1, 'venkateswarlu', 'rachuru venkateswarlu', '09550262808', 'datasai006@gmail.com', 'ramalayam', 'kurnool', 'Andhra Pradesh', '518411', 'India', 'gst000123', '2024-07-16', '2024-07-19', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vendor_id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `vendor_name` varchar(255) DEFAULT NULL,
  `commodity_type` varchar(100) DEFAULT NULL,
  `units` varchar(50) DEFAULT NULL,
  `credit_limit` varchar(255) DEFAULT NULL,
  `credit_cycle` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `zip_code` varchar(20) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `contact_person` varchar(100) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `gst_number` varchar(255) DEFAULT NULL,
  `pan_number` varchar(255) DEFAULT NULL,
  `bank_number` varchar(255) DEFAULT NULL,
  `ifsc_code` varchar(255) DEFAULT NULL,
  `vendor_notes` text DEFAULT NULL,
  `contract_start_date` date DEFAULT NULL,
  `contract_end_date` date DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendor_id`, `project_id`, `vendor_name`, `commodity_type`, `units`, `credit_limit`, `credit_cycle`, `address`, `city`, `state`, `zip_code`, `country`, `contact_person`, `phone_number`, `email`, `gst_number`, `pan_number`, `bank_number`, `ifsc_code`, `vendor_notes`, `contract_start_date`, `contract_end_date`, `status`, `created_at`) VALUES
(1, NULL, 'venkateswarlu', 'Electrical Equipment', 'tons', NULL, NULL, 'ramalayam', 'hyderbad', 'Andhra Pradesh', '518002', 'india', 'rachuru venkateswarlu', '9550262808', 'datasai006@gmail.com', NULL, NULL, NULL, NULL, NULL, '2024-07-01', '2024-07-17', 'active', '2024-07-02 06:06:09'),
(2, NULL, 'venkateswarlu', 'Bricks', 'kg', '15', '15', '24521532', 'vgcgchbn', 'vhfvcgvjnjnjn', 'n54152', '623556', '56gbvbv', 'b555222', '525253@gmail.com', 'gst000123', 'bwupv445s', '12365478952', 'kkbk0001234', NULL, '2024-07-08', '2024-07-17', 'inactive', '2024-07-25 10:37:54');

-- --------------------------------------------------------

--
-- Table structure for table `villas`
--

CREATE TABLE `villas` (
  `id` int(11) NOT NULL,
  `plot_number` varchar(255) NOT NULL,
  `plot_size` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `facing` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `east_position` varchar(255) NOT NULL,
  `west_position` varchar(255) NOT NULL,
  `north_position` varchar(255) NOT NULL,
  `south_position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `villas`
--

INSERT INTO `villas` (`id`, `plot_number`, `plot_size`, `area`, `facing`, `status`, `east_position`, `west_position`, `north_position`, `south_position`) VALUES
(1, '1', '30*40', '2000', 'east', 'Sold', 'road', 'plot', 'plot', 'plot'),
(2, '2', '20*40', '2000', 'east', 'available', 'road', 'plot', 'plot', 'plot'),
(3, '3', '20*40', '2000', 'west', 'Booked', 'road', 'plot', 'plot', 'road');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`lead_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`),
  ADD UNIQUE KEY `property_location` (`property_location`);

--
-- Indexes for table `tbl_amenities`
--
ALTER TABLE `tbl_amenities`
  ADD PRIMARY KEY (`amenity_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_invoices`
--
ALTER TABLE `tbl_invoices`
  ADD PRIMARY KEY (`invoice_id`),
  ADD KEY `po_id` (`po_id`);

--
-- Indexes for table `tbl_invoice_payments`
--
ALTER TABLE `tbl_invoice_payments`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `invoice_id` (`invoice_id`);

--
-- Indexes for table `tbl_po_items`
--
ALTER TABLE `tbl_po_items`
  ADD PRIMARY KEY (`po_item_id`),
  ADD KEY `po_id` (`po_id`);

--
-- Indexes for table `tbl_project`
--
ALTER TABLE `tbl_project`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `tbl_purchase_orders`
--
ALTER TABLE `tbl_purchase_orders`
  ADD PRIMARY KEY (`po_id`),
  ADD KEY `vendor_id` (`vendor_id`);

--
-- Indexes for table `tbl_specifications`
--
ALTER TABLE `tbl_specifications`
  ADD PRIMARY KEY (`specification_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_vendors`
--
ALTER TABLE `tbl_vendors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendor_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `villas`
--
ALTER TABLE `villas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `lead_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_amenities`
--
ALTER TABLE `tbl_amenities`
  MODIFY `amenity_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_invoices`
--
ALTER TABLE `tbl_invoices`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_invoice_payments`
--
ALTER TABLE `tbl_invoice_payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_po_items`
--
ALTER TABLE `tbl_po_items`
  MODIFY `po_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_project`
--
ALTER TABLE `tbl_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_purchase_orders`
--
ALTER TABLE `tbl_purchase_orders`
  MODIFY `po_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_specifications`
--
ALTER TABLE `tbl_specifications`
  MODIFY `specification_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_vendors`
--
ALTER TABLE `tbl_vendors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `villas`
--
ALTER TABLE `villas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `leads`
--
ALTER TABLE `leads`
  ADD CONSTRAINT `leads_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`project_id`);

--
-- Constraints for table `tbl_amenities`
--
ALTER TABLE `tbl_amenities`
  ADD CONSTRAINT `tbl_amenities_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`project_id`);

--
-- Constraints for table `tbl_invoices`
--
ALTER TABLE `tbl_invoices`
  ADD CONSTRAINT `tbl_invoices_ibfk_1` FOREIGN KEY (`po_id`) REFERENCES `tbl_purchase_orders` (`po_id`);

--
-- Constraints for table `tbl_invoice_payments`
--
ALTER TABLE `tbl_invoice_payments`
  ADD CONSTRAINT `tbl_invoice_payments_ibfk_1` FOREIGN KEY (`invoice_id`) REFERENCES `tbl_invoices` (`invoice_id`);

--
-- Constraints for table `tbl_po_items`
--
ALTER TABLE `tbl_po_items`
  ADD CONSTRAINT `tbl_po_items_ibfk_1` FOREIGN KEY (`po_id`) REFERENCES `tbl_purchase_orders` (`po_id`);

--
-- Constraints for table `tbl_project`
--
ALTER TABLE `tbl_project`
  ADD CONSTRAINT `tbl_project_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`project_id`);

--
-- Constraints for table `tbl_purchase_orders`
--
ALTER TABLE `tbl_purchase_orders`
  ADD CONSTRAINT `tbl_purchase_orders_ibfk_1` FOREIGN KEY (`vendor_id`) REFERENCES `tbl_vendors` (`id`);

--
-- Constraints for table `tbl_specifications`
--
ALTER TABLE `tbl_specifications`
  ADD CONSTRAINT `tbl_specifications_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`project_id`);

--
-- Constraints for table `vendor`
--
ALTER TABLE `vendor`
  ADD CONSTRAINT `vendor_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`project_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
