-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 03, 2023 at 04:52 AM
-- Server version: 10.3.38-MariaDB
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sassolut_drivingschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `amount`
--

CREATE TABLE `amount` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `amount`
--

INSERT INTO `amount` (`id`, `student_id`, `teacher_id`, `amount`, `created_at`) VALUES
(26, 77, 31, '100', '2023-02-01 16:17:00'),
(27, 77, 31, '55555', '2023-02-01 16:17:12'),
(28, 77, 31, '12', '2023-02-01 16:18:04'),
(29, 77, 31, '12', '2023-02-01 16:19:02'),
(30, 77, 31, '2000', '2023-02-01 16:19:09'),
(31, 77, 78, '2000', '2023-02-01 16:25:40'),
(32, 77, 78, '999', '2023-02-01 16:26:38');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `lesson_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Can''t Void'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `teacher_id`, `lesson_id`, `date`, `start_time`, `end_time`, `status`) VALUES
(107, 13, 18, '2023-01-10', '2:00 PM', '4:00 PM', 'Can\'t Void'),
(108, 13, 18, '2023-01-02', '10:00 AM', '12:00 AM', 'Can\'t Void'),
(109, 31, 19, '2023-02-01', '11:00 AM', '13:00 PM', 'Can\'t Void'),
(117, 31, 18, '2023-02-10', '13:34 PM', '15:34 PM', 'Can\'t Void');

-- --------------------------------------------------------

--
-- Table structure for table `class_log`
--

CREATE TABLE `class_log` (
  `id` int(11) NOT NULL,
  `class_id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `class_log`
--

INSERT INTO `class_log` (`id`, `class_id`, `student_id`) VALUES
(45, 107, 80),
(46, 109, 80),
(54, 117, 77);

-- --------------------------------------------------------

--
-- Table structure for table `completed_student`
--

CREATE TABLE `completed_student` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `created_at` varchar(255) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `completed_student`
--

INSERT INTO `completed_student` (`id`, `student_id`, `teacher_id`, `created_at`) VALUES
(1, 31, 76, '2023-02-01 11:57:11'),
(2, 76, 31, '2023-02-01 11:58:59'),
(3, 79, 31, '2023-02-01 12:14:23'),
(4, 88, 31, '2023-02-01 12:20:01'),
(5, 84, 76, '2023-02-01 13:35:14'),
(6, 84, 76, '2023-02-01 13:35:19'),
(7, 84, 76, '2023-02-01 13:37:23'),
(8, 841, 76, '2023-02-01 13:39:51');

-- --------------------------------------------------------

--
-- Table structure for table `delete_student`
--

CREATE TABLE `delete_student` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `social_id` varchar(255) NOT NULL,
  `role_id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `driving_license_front_image` varchar(255) NOT NULL,
  `driving_license_rear_image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `notification_token` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `delete_student`
--

INSERT INTO `delete_student` (`id`, `first_name`, `last_name`, `social_id`, `role_id`, `email`, `phone`, `city`, `address`, `zip_code`, `driving_license_front_image`, `driving_license_rear_image`, `password`, `status`, `notification_token`, `image`, `created_at`) VALUES
(1, 'Mark Andrew', '', '', 2, 'markandrew@gmail.com', '323887653', 'Ohio', 'sjviakfkvjakvjjx', '55555', '', '', '11111111', 'active', '00e0acf9-a5b3-4afe-b3d1-427fb6131633', '', '2022-12-30 14:46:37'),
(3, 'laraib', '', '', 2, 'laraibriaz8889@gmail.com', 'undefined', 'Ola', 'shamshan ghaat andher nagar ', '420', '', '', '11111111', 'active', '986f1301-3241-4375-98c0-884f7ba0ec3f', '', '2022-12-30 15:58:46'),
(4, 'abc', '', '', 2, 'abc@gmail.com', '132465461', 'karachi', 'guishan', '78444', '', '', 'abc123', 'active', 'dsad754d7asd5sssadsa877', '', '2023-01-09 14:07:30'),
(5, 'User_202212304933', '', '107242646244046110185', 2, '202212304933@socialuser.com', '', '', '', '', '', '', '13042940', 'active', '63362b65-6a43-463a-ba66-a595fa13fe03', '', '2022-12-30 14:49:33');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `inbox_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `reciever_id` int(11) NOT NULL,
  `last_message` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'notread',
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`inbox_id`, `sender_id`, `reciever_id`, `last_message`, `status`, `date`) VALUES
(51, 31, 80, 'hi', 'unread', '2023-01-16 12:46:55'),
(52, 80, 31, 'hi', 'read', '2023-01-16 12:46:55'),
(53, 31, 79, 'You are now connected.', 'unread', '2023-01-04 07:08:06'),
(54, 79, 31, 'You are now connected.', 'read', '2023-01-04 07:08:06'),
(55, 31, 76, 'You are now connected.', 'unread', '2023-01-04 07:12:22'),
(56, 76, 31, 'You are now connected.', 'read', '2023-01-04 07:12:22'),
(57, 31, 84, 'You are now connected.', 'unread', '2023-01-09 16:12:59'),
(58, 84, 31, 'You are now connected.', 'read', '2023-01-09 16:12:59'),
(59, 31, 82, 'You are now connected.', 'unread', '2023-01-10 07:36:37'),
(60, 82, 31, 'You are now connected.', 'read', '2023-01-10 07:36:37'),
(61, 31, 77, 'You are now connected.', 'unread', '2023-01-10 08:37:10'),
(62, 77, 31, 'You are now connected.', 'read', '2023-01-10 08:37:10'),
(63, 78, 79, 'You are now connected.', 'unread', '2023-01-31 15:38:33'),
(64, 79, 78, 'You are now connected.', 'read', '2023-01-31 15:38:33');

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `l_id` int(11) NOT NULL,
  `l_title` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`l_id`, `l_title`, `color`) VALUES
(18, 'Driving Lesson', '#006400'),
(19, 'Driving Test', '#FF0000'),
(20, 'Refreshment Lesson', '#0000FF');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `m_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `reciever_id` int(11) NOT NULL,
  `Data` longtext DEFAULT NULL,
  `last_message` varchar(255) DEFAULT NULL,
  `is_read` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'newmessage',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`m_id`, `sender_id`, `reciever_id`, `Data`, `last_message`, `is_read`, `status`, `created_at`, `updated_at`) VALUES
(63, 31, 80, '[{\"message_id\":1,\"user_massage\":\"hi dear\",\"data_type\":\"text\",\"sender_id\":\"31\",\"reciever_id\":\"80\",\"data_resource\":\"None\",\"created_at\":\"2022-12-30 16:41:59\"},{\"message_id\":2,\"user_massage\":\"heelllo sir\",\"data_type\":\"text\",\"sender_id\":\"80\",\"reciever_id\":\"31\",\"data_resource\":\"None\",\"created_at\":\"2022-12-30 16:42:27\"},{\"message_id\":3,\"user_massage\":\"hi\",\"data_type\":\"text\",\"sender_id\":\"31\",\"reciever_id\":\"80\",\"data_resource\":\"None\",\"created_at\":\"2023-01-16 12:46:54\"}]', 'hi', 'read', 'sentmessage', '2022-12-30 17:41:59', NULL),
(64, 80, 31, '[{\"message_id\":1,\"user_massage\":\"hi dear\",\"data_type\":\"text\",\"sender_id\":\"31\",\"reciever_id\":\"80\",\"data_resource\":\"None\",\"created_at\":\"2022-12-30 16:41:59\"},{\"message_id\":2,\"user_massage\":\"heelllo sir\",\"data_type\":\"text\",\"sender_id\":\"80\",\"reciever_id\":\"31\",\"data_resource\":\"None\",\"created_at\":\"2022-12-30 16:42:27\"},{\"message_id\":3,\"user_massage\":\"hi\",\"data_type\":\"text\",\"sender_id\":\"31\",\"reciever_id\":\"80\",\"data_resource\":\"None\",\"created_at\":\"2023-01-16 12:46:54\"}]', 'hi', 'notread', 'newmessage', '2022-12-30 17:41:59', NULL),
(65, 31, 76, '[{\"message_id\":1,\"user_massage\":\"Hallo Mark\",\"data_type\":\"text\",\"sender_id\":\"31\",\"reciever_id\":\"76\",\"data_resource\":\"None\",\"created_at\":\"2023-01-04 10:33:52\"}]', 'Hallo Mark', 'read', 'sentmessage', '2023-01-04 11:33:52', NULL),
(66, 76, 31, '[{\"message_id\":1,\"user_massage\":\"Hallo Mark\",\"data_type\":\"text\",\"sender_id\":\"31\",\"reciever_id\":\"76\",\"data_resource\":\"None\",\"created_at\":\"2023-01-04 10:33:52\"}]', 'Hallo Mark', 'unread', 'newmessage', '2023-01-04 11:33:52', NULL),
(67, 31, 82, '[{\"message_id\":1,\"user_massage\":\"hi\",\"data_type\":\"text\",\"sender_id\":\"31\",\"reciever_id\":\"82\",\"data_resource\":\"None\",\"created_at\":\"2023-01-16 12:46:17\"}]', 'hi', 'read', 'sentmessage', '2023-01-16 13:46:17', NULL),
(68, 82, 31, '[{\"message_id\":1,\"user_massage\":\"hi\",\"data_type\":\"text\",\"sender_id\":\"31\",\"reciever_id\":\"82\",\"data_resource\":\"None\",\"created_at\":\"2023-01-16 12:46:17\"}]', 'hi', 'unread', 'newmessage', '2023-01-16 13:46:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Packages`
--

CREATE TABLE `Packages` (
  `Id` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Hours` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `Packages`
--

INSERT INTO `Packages` (`Id`, `Title`, `Hours`, `Price`) VALUES
(1, 'package\'s', '8', '8000'),
(2, 'Halloween offer', '10', '4000'),
(3, 'test Package Title', '2', '1200'),
(4, 'Test Pcakge Title 2', '4 Housr', '1500');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `p_id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `class_id` varchar(255) NOT NULL,
  `teacher_id` varchar(255) NOT NULL,
  `received_by_teacher` varchar(255) NOT NULL DEFAULT 'No',
  `received_by_admin` varchar(255) NOT NULL DEFAULT 'UnReceived',
  `admin_received_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `terms_cond`
--

CREATE TABLE `terms_cond` (
  `Id` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `terms_cond`
--

INSERT INTO `terms_cond` (`Id`, `Title`, `Description`) VALUES
(5, 'Hello Test', 'lorem ipsum\'s'),
(6, 'Test Term', 'Tes Term Description');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `First_name` varchar(255) DEFAULT NULL,
  `Last_name` varchar(255) DEFAULT NULL,
  `social_id` varchar(512) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL COMMENT '0 for admin, 1 for teacher, 2 for student, ',
  `email` varchar(255) DEFAULT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Zip_code` int(11) DEFAULT NULL,
  `Driving_license_front_image` varchar(255) DEFAULT NULL,
  `Driving_license_rear_image` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT 'active',
  `notification_token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `First_name`, `Last_name`, `social_id`, `role_id`, `email`, `Phone`, `City`, `Address`, `Zip_code`, `Driving_license_front_image`, `Driving_license_rear_image`, `password`, `Status`, `notification_token`, `created_at`, `img`) VALUES
(13, 'sodais', 'nasir', NULL, 0, 'admin@gmail.com', '00', NULL, 'Karachi', NULL, 'phpfiles/uploads/PHP-Cheat-Sheet.pdf', 'phpfiles/uploads/gaston-abascal-8F-6pXyQyLU-unsplash.jpg', 'admin', NULL, NULL, '2022-09-15 13:00:14', NULL),
(31, 'Sam John', 'khan', NULL, 1, 'sam@gmail.com', '031323232546546', 'hehe', 'R26 dalton street OHIO US', 54321, '202209232536LIC.jpg', '2022092325LIC.jpg', '11111111', 'active', '2f917c33-e41e-4160-bb73-2221f04c70d2', '2022-09-23 12:25:36', '1655321392_202301310126_DP.jpg'),
(78, 'Today', 'name', NULL, 1, 'today@gmail.com', '0311121140', 'Sindh', 'Karachi', 451009, '202301113617LIC.jpg', '202301111522LIC.jpg', 'Today12345', 'active', 'ed90e995-6cb7-4b06-b6fd-9d9c94fe6e86', '2022-12-30 15:47:52', NULL),
(80, 'zeeshan cheema', NULL, '001278.06c0b927df414444ba4f5db523922a1a.1432', 2, 'cheema@socialuser.com', '03122111450', 'Sindh Karachi', 'Gulshan', 78400, NULL, NULL, '11111111', 'active', '6c074a65-4946-4105-8549-5534c293771d', '2022-12-30 16:27:37', NULL),
(82, 'User_202301044358', NULL, '100302741351496922495', 2, '202301044358@socialuser.com', NULL, NULL, NULL, NULL, NULL, NULL, '27252156', 'active', '50a45b03-fef5-4f18-87c7-f9ee485d7ce7', '2023-01-04 11:43:58', NULL),
(88, 'laraib', NULL, NULL, 2, 'laraib@gmail.com', '1213223', 'UK', 'UK', 2222, NULL, NULL, '11111111', 'inactive', '', '2023-01-10 10:27:46', '1250907662_202301315337_DP.jpg'),
(90, 'Mark Tyler', NULL, NULL, 2, 'mark@abc.com', '01234567890', 'shchzhxh', 'whhvhzjx', 732718, NULL, NULL, '11111111', 'active', 'ed90e995-6cb7-4b06-b6fd-9d9c94fe6e86', '2023-01-31 14:46:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `waiting_list`
--

CREATE TABLE `waiting_list` (
  `id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `created_at` varchar(255) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `waiting_list`
--

INSERT INTO `waiting_list` (`id`, `teacher_id`, `student_id`, `created_at`) VALUES
(1, 31, 76, '2023-02-01 13:06:03'),
(2, 76, 31, '2023-02-01 13:08:29'),
(3, 31, 76, '2023-02-01 13:11:46'),
(4, 31, 76, '2023-02-01 13:15:18'),
(5, 310, 76, '2023-02-01 13:15:23'),
(6, 310, 76, '2023-02-01 13:15:27'),
(7, 76, 310, '2023-02-01 13:16:12'),
(8, 76, 3101, '2023-02-01 13:16:44'),
(9, 76, 54, '2023-02-01 13:30:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amount`
--
ALTER TABLE `amount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lesson_id` (`lesson_id`);

--
-- Indexes for table `class_log`
--
ALTER TABLE `class_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `completed_student`
--
ALTER TABLE `completed_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delete_student`
--
ALTER TABLE `delete_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`inbox_id`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `Packages`
--
ALTER TABLE `Packages`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `terms_cond`
--
ALTER TABLE `terms_cond`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `waiting_list`
--
ALTER TABLE `waiting_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amount`
--
ALTER TABLE `amount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `class_log`
--
ALTER TABLE `class_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `completed_student`
--
ALTER TABLE `completed_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `delete_student`
--
ALTER TABLE `delete_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `inbox_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `Packages`
--
ALTER TABLE `Packages`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `terms_cond`
--
ALTER TABLE `terms_cond`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `waiting_list`
--
ALTER TABLE `waiting_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `classes`
--
ALTER TABLE `classes`
  ADD CONSTRAINT `classes_ibfk_1` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`l_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
