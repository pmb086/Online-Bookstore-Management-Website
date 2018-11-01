-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2018 at 06:45 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `b_id` int(4) NOT NULL,
  `b_nm` varchar(60) NOT NULL,
  `b_subcat` varchar(25) NOT NULL,
  `b_desc` longtext NOT NULL,
  `b_publisher` varchar(40) NOT NULL,
  `b_edition` varchar(20) NOT NULL,
  `b_isbn` varchar(10) NOT NULL,
  `b_page` int(5) NOT NULL,
  `b_price` int(5) NOT NULL,
  `b_img` longtext NOT NULL,
  `b_pdf` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`b_id`, `b_nm`, `b_subcat`, `b_desc`, `b_publisher`, `b_edition`, `b_isbn`, `b_page`, `b_price`, `b_img`, `b_pdf`) VALUES
(1, 'PHP', '1', 'php free', 'Sanjeev', 'ldjfl', '5454', 50, 500, 'upload_image/Penguins.jpg', 'upload_ebook/!qhlogs (1).doc'),
(2, 'Batman', '2', 'DCcomics', 'Chris Nolan', '2006', 'BM3513513', 230, 50, 'upload_image/index.jpg', 'upload_ebook/megabus _ Low cost bus tickets from $1.pdf'),
(3, 'harry potter', '1', 'good book', 'j k rowling', '2001', '00012', 120, 12, 'upload_image/hp.jpg', ''),
(4, 'people', '3', 'celebrity and human interest', 'Jess Cagle', '1974', '12018', 15, 8, 'upload_image/sandra-bullock-cover-768-1.jpg', ''),
(5, 'time magazine', '3', 'weekly news ', 'Edward Felsenthal', '1923', '00236', 30, 9, 'upload_image/time.jpg', ''),
(6, 'popular Science', '3', 'Science Content', ' Bonnier Corporation', '1956', '21100', 30, 15, 'upload_image/ps.jpg', ''),
(7, 'goblet of fire', '3', 'harry potter', 'jk rowling', '2010', '10010', 120, 18, 'upload_image/panda.jpg', ''),
(8, 'pulp fiction', '2', 'imdb top', 'robert', '1998', '015478', 115, 5, 'upload_image/havelli.jpg', ''),
(9, 'k3g', '2', 'romantic', 'rakesh roshan', '2004', '55689', 130, 6, 'upload_image/Captureis1.JPG', ''),
(10, 'krrish', '1', 'hrithik', 'rakesh', '2010', '25896', 135, 3, 'upload_image/krrish.jpg', ''),
(11, 'black panther', '2', 'awesome', 'danieele', '2017', '76565', 110, 25, 'upload_image/bp.jpg', ''),
(12, 'avengers', '1', 'comic', 'j.prady', '1995', '15558', 15, 10, 'upload_image/avenger.jpg', ''),
(13, 'gotham ', '1', 'comic', 'dc', '1990', '45446', 20, 6, 'upload_image/gt.jpg', ''),
(14, 'my name is khan', '2', 'hindi', 'karan johar', '2011', '69685', 116, 19, 'upload_image/mnik.jpg', ''),
(15, 'cosmopolitan', '3', 'fashion', 'lee thompkins', '1999', '787798', 50, 41, 'upload_image/cosmopolitan.jpg', ''),
(16, 'bazaar', '3', 'desi fashion', 'mamta', '2015', '55554', 45, 12, 'upload_image/bazaar.jpg', ''),
(17, 'vogue', '3', 'fashion britian', 'lolita', '1946', '22585', 40, 13, 'upload_image/vogue.jpg', ''),
(18, 'little devil', '2', 'cute girl', 'paras', '2017', '22156', 116, 13, 'upload_image/ld.jpg', ''),
(19, 'pink panter', '2', 'comedy', 'amitabh', '2006', '22011', 105, 2, 'upload_image/panther.jpg', ''),
(20, 'love never dies', '1', 'romantic', 'fernandez', '2009', '35795', 900, 16, 'upload_image/lnd.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(4) NOT NULL,
  `cat_nm` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_nm`) VALUES
(1, 'books'),
(2, 'movies'),
(3, 'periodicals');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `con_id` int(4) NOT NULL,
  `con_nm` varchar(25) NOT NULL,
  `con_email` varchar(35) NOT NULL,
  `con_query` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`con_id`, `con_nm`, `con_email`, `con_query`) VALUES
(1, 'Hiren', 'hiru@gmail.com', 'English Novels...'),
(2, 'Shital', 'shital@yahoo.com', 'Are you send me medical books?'),
(3, 'Manali', 'manali@yahoo.com', 'Java Complete Reference is available?'),
(4, 'Rina', 'rina@gmail.com', 'Artificial Intelligence');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `U_id` varchar(50) NOT NULL,
  `category` varchar(100) NOT NULL,
  `book` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `rate` varchar(50) NOT NULL,
  `total_amount` bigint(20) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `U_id`, `category`, `book`, `quantity`, `rate`, `total_amount`, `status`, `date`) VALUES
(1, 'kumar', 'Architecture', 'A Dictionary of Architecture ', 2, '500', 1000, 'Returned', '2018-04-22'),
(3, 'kumar', 'Forest', 'You Deserve, We Conserve A Biotechnological Approach to Wild', 1, '659', 659, 'Processing', '2018-04-22'),
(4, 'kumar', '', 'A Dictionary of Architecture ', 2, '500', 1000, 'Booked', '2018-04-23'),
(5, 'Lina123', '', 'PHP', 1, '500', 500, 'Booked', '2018-04-23'),
(6, 'shital', '', 'PHP', 1, '500', 500, 'Booked', '2018-04-23'),
(7, 'Hiren', '', 'PHP', 1, '500', 500, 'Booked', '2018-04-23'),
(10, 'vimalkd', '', 'black panther', 1, '25', 25, 'Booked', '2018-04-23');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_details`
--

CREATE TABLE `shipping_details` (
  `id` int(11) NOT NULL,
  `name` char(50) NOT NULL,
  `address` text NOT NULL,
  `postal_code` bigint(20) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `f_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping_details`
--

INSERT INTO `shipping_details` (`id`, `name`, `address`, `postal_code`, `city`, `state`, `phone`, `f_id`) VALUES
(1, 'sanjeev kumar', ' 141 delhi', 110009, 'delhi', 'delhi', 9015501897, 'sanjeev'),
(2, 'sanjeev kumar', ' 141 delhi', 110009, 'delhi', 'delhi', 9015501897, 'sanjeev'),
(3, 'jjjj', ' ljljl', 0, 'delhi', 'delhi', 9015501897, 'sanjeev'),
(4, 'sanjeev', 'Noida', 110009, 'ldfjl', 'dlfjdl', 8787878, 'sanjeev'),
(5, 'Ravi', ' Noid', 110009, 'dlfjdlf', 'd.fl', 998989898, 'sanjeev'),
(6, 'sanjeev', ' sdf', 444, 'dfd', 'dfdfd', 4545, 'sanjeev'),
(7, 'alia', 'axp234', 0, 'Female', 'alia234@gmail.com', 9548646534, 'Amreli'),
(8, 'bill gates', 'bill274', 0, 'Male', 'billgates43@gmail.com', 1954845312, 'Surendranagar'),
(9, 'ajith kumar', 'ajith672', 0, 'Male', 'ajithracer@gmail.com', 9313215545, 'Bhavnagar'),
(10, 'pari', 'parith67', 0, 'Male', 'pari663@gmail.com', 9784564654, 'Bhavnagar'),
(11, 'tom cruise', 'tomcruise345', 0, 'Male', 'tommi34@gmail.com', 9465454124, 'Junagadh'),
(12, 'murray', 'murrayandy', 0, 'Male', 'murrayand67@gmail.com', 6546848451, 'Ahmedabad'),
(13, 'joseph', 'josephbkottaram', 0, 'Male', 'josep89@gmail.com', 8213456451, 'Rajkot'),
(14, 'deepika', 'deeps43', 0, 'Female', 'deept905@gmail.com', 9615564884, 'Porbandar'),
(15, 'sushmitha', 'sushik', 0, 'Female', 'sushkrish56@gmail.com', 8981539165, 'Jamnagar'),
(16, 'akshya', 'aksh96', 0, 'Female', 'akshyarag@gmail.com', 9658484115, 'Baroda'),
(17, 'vimal', 'vimalkd', 0, 'Male', 'vimalu98@gmail.com', 9626454846, 'Jamnagar'),
(18, 'salmankhan', 'sallubhai', 0, 'Male', 'salmankhan3@gmail.com', 9458487451, 'Ahmedabad'),
(19, 'john paul', 'jp8392', 0, 'Male', 'johnny2901@gmail.com', 9623154158, 'Rajkot'),
(20, 'mohank', 'pkm453', 0, 'Male', 'pkm174@gmail.com', 9840130830, 'Porbandar'),
(21, 'lina', ' 212 afasd adsa', 213215, 'sada', 'sdasa', 5151321531, '123'),
(22, 'shital', ' 321wddadad', 13213, 'adas', 'sadas', 13312132112, 'shital'),
(23, 'manu gupta', ' mayanagar', 20015, 'Arlington', 'TX', 654486123, 'hiru'),
(24, 'lina', ' bsvdhg', 5102231, 'sada', 'sdasa', 5151321531, '123'),
(25, 'sadsa', ' faedsfae', 2065, 'eafwe', 'adfadf', 564168416516, 'vimala34');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(4) NOT NULL,
  `u_fnm` varchar(35) NOT NULL,
  `u_unm` varchar(25) NOT NULL,
  `u_pwd` varchar(20) NOT NULL,
  `u_gender` varchar(7) NOT NULL,
  `u_email` varchar(35) NOT NULL,
  `u_contact` varchar(12) NOT NULL,
  `u_city` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_fnm`, `u_unm`, `u_pwd`, `u_gender`, `u_email`, `u_contact`, `u_city`) VALUES
(2, 'Shital', 'shital', 'shital', 'Female', 'shital@yahoo.com', '9985689856', 'Rajkot'),
(3, 'Lina', 'Lina123', '123', 'Female', 'lina123@gmail.com', '9456325663', 'Amreli'),
(4, 'admin', 'admin', 'admin123', 'Female', 'admin@gmail.com', '9859632561', 'Rajkot'),
(5, 'Kaushik', 'Darcy', '160160160', 'Male', 'darcy@gmail.com', '9016388880', 'Rajkot'),
(6, 'sanjeev', 'kumark', 'sanjeev', 'Male', 'sanjeevtech2@gmail.com', '9015501897', 'Ahmedabad'),
(7, 'alia', 'axp234', 'alia123', 'Female', 'alia234@gmail.com', '9548646534', 'Amreli'),
(8, 'bill gates', 'bill274', 'billy789', 'Male', 'billgates43@gmail.com', '1954845312', 'Surendranagar'),
(9, 'ajith kumar', 'ajith672', 'shalu089', 'Male', 'ajithracer@gmail.com', '9313215545', 'Bhavnagar'),
(10, 'pari', 'parith67', 'pari6636', 'Male', 'pari663@gmail.com', '9784564654', 'Bhavnagar'),
(11, 'tom cruise', 'tomcruise345', 'mi123', 'Male', 'tommi34@gmail.com', '9465454124', 'Junagadh'),
(12, 'murray', 'murrayandy', 'murra546', 'Male', 'murrayand67@gmail.com', '6546848451', 'Ahmedabad'),
(13, 'joseph', 'josephbkottaram', 'joy78', 'Male', 'josep89@gmail.com', '8213456451', 'Rajkot'),
(14, 'deepika', 'deeps43', 'deepi789', 'Female', 'deept905@gmail.com', '9615564884', 'Porbandar'),
(15, 'sushmitha', 'sushik', 'sushkrish', 'Female', 'sushkrish56@gmail.com', '8981539165', 'Jamnagar'),
(16, 'akshya', 'aksh96', 'incorrect0', 'Female', 'akshyarag@gmail.com', '9658484115', 'Baroda'),
(17, 'vimal', 'vimalkd', 'vimala34', 'Male', 'vimalu98@gmail.com', '9626454846', 'Jamnagar'),
(18, 'salmankhan', 'sallubhai', 'salman123', 'Male', 'salmankhan3@gmail.com', '9458487451', 'Ahmedabad'),
(19, 'john paul', 'jp8392', 'johnny624', 'Male', 'johnny2901@gmail.com', '9623154158', 'Rajkot'),
(20, 'mohank', 'pkm453', 'prema086', 'Male', 'pkm174@gmail.com', '9840130830', 'Porbandar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `shipping_details`
--
ALTER TABLE `shipping_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `b_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `con_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `shipping_details`
--
ALTER TABLE `shipping_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
