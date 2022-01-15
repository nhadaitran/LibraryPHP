-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 12, 2022 at 07:06 PM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlythuvien`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_category` int(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `description` text COLLATE utf8_unicode_ci,
  `date` date DEFAULT NULL,
  `image` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `name_2` (`name`),
  KEY `id_category` (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `author`, `id_category`, `status`, `description`, `date`, `image`) VALUES
(4, 'Từ Điển mẫu câu tiếng Anh', 'NXB Kim Đồng', 18, 0, 'A B C', NULL, NULL),
(5, 'Từ Điển Anh Việt - 75000 Từ', 'NXB Thanh Niên', 18, 0, 'Từ điển mới ...', NULL, NULL),
(6, 'Từ Điển Kinh Doanh Và Tiếp Thị Hiện Đại', 'Không có mô tả', 18, 0, 'Không có mô tả', NULL, NULL),
(7, '100 thủ thuật với Excel 2010', 'NXB Thành Phố HCM', 16, 0, '100 thủ thuật ứng với 100 bài tập thực hành được hướng dẫn, giải thích theo bố cục chặt chẽ, cách trình bày rõ ràng, dễ sử dụng, bạn đọc có thể tự mình xử lý những vấn đề nảy sinh trong quá trình thực hành đồng thời giúp các bạn thao tác nhanh trên bảng tính.\r\n', NULL, NULL),
(8, 'Lập trình web bằng PHP 5.3 và cơ sở dữ liệu MySQL 5.1 (Tập1)', 'ĐH Khoa Học Tự Nhiên', 16, 0, 'Tập 1 của cuốn sách \"Lập trình Web bằng PHP 5.3 và cơ sở dữ liệu MySQL 5.1\" bao gồm 7 chương và ứng dụng đính kèm. Chương 1 cung cấp cho bạn kiến thức từ chức năng của Website, cài đặt gói WamSever 2.0 và cấu hình để có thể vận hành ứng dụng Web bằng PHP, MySQL và Apache Web Sever.\r\n\r\nSang chương 2, bạn tiếp tục tìm hiểu cách tạo Website và thiết kế cấu trúc dùng cho doanh nghiệp bằng hệ quản trị nội dung mã nguồn mở Joomla. Nhằm thỏa mãn nội dung trình bày, bạn tiếp tục tìm hiểu cách thiết kế trang Web tĩnh hay động bằng mã tự sinh PHP với phần mềm Dreamweaver CS trong chương 3 và thẻ HTML trong chương 4.\r\n\r\nTiếp theo, bạn có thể tìm hiểu cú pháp của kịch bản PHP trong chương 5 và học cách sử dụng ứng dụng PhpMyAdmin để quản trị cơ sở dữ liệu MySQL trong chương 6. Sang chương 7 bạn tìm hiểu phát biểu SQL của cơ sở dữ liệu MySQL dùng để xây dựng ứng dụng bán hàng trực tuyến.', NULL, NULL),
(14, 'Đắc nhân tâm', 'Dale Carnegie', 19, 0, 'Đắc nhân tâm – How to win friends and Influence People  của Dale Carnegie là quyển sách nổi tiếng nhất, bán chạy nhất và có tầm ảnh hưởng nhất của mọi thời đại. Tác phẩm đã được chuyển ngữ sang hầu hết các thứ tiếng trên thế giới và có mặt ở hàng trăm quốc gia. \r\n\r\nĐây là quyển sách duy nhất về thể loại self-help liên tục đứng đầu danh mục sách bán chạy nhất (best-selling Books) do báo The New York Times bình chọn suốt 10 năm liền. Riêng bản tiếng Anh của sách đã bán được hơn 15 triệu bản trên thế giới. Tác phẩm có sức lan toả vô cùng rộng lớn – dù bạn đi đến bất cứ nơi đâu, bất kỳ quốc gia nào cũng đều có thể nhìn thấy. Tác phẩm được đánh giá là quyển sách đầu tiên và hay nhất, có ảnh hưởng làm thay đổi cuộc đời của hàng triệu người trên thế giới.\r\n\r\nKhông còn nữa khái niệm giới hạn, Đắc Nhân Tâm là nghệ thuật thu phục lòng người, là làm cho tất cả mọi người yêu mến mình. Đắc nhân tâm và cái Tài trong mỗi người chúng ta. Đắc Nhân Tâm trong ý nghĩa đó cần được thụ đắc bằng sự hiểu rõ bản thân, thành thật với chính mình, hiểu biết và quan tâm đến những người xung quanh để nhìn ra và khơi gợi những tiềm năng ẩn khuất nơi họ, giúp họ phát triển lên một tầm cao mới. Đây chính là nghệ thuật cao nhất về con người và chính là ý nghĩa sâu sắc nhất đúc kết từ những nguyên tắc vàng của Dale Carnegie.\r\n\r\nQuyển sách Đắc nhắn tâm là cuốn sách “đầu tiên và hay nhất mọi thời đại về nghệ thuật giao tiếp và ứng xử”, quyển sách đã từng mang đến thành công và hạnh phúc cho hàng triệu người trên khắp thế giới.\r\n\r\nĐắc Nhân Tâm là cuốn sách gối đầu giường về đối nhân xử thế.', '2021-12-28', 'dacnhantam.png'),
(15, 'Từ điển 1', 'NXB Thanh Niên', 18, 0, '...', NULL, NULL),
(16, 'Từ điển 2', 'NXB Thanh Niên', 18, 0, '...', NULL, NULL),
(17, 'Từ điển 3', 'NXB Thanh Niên', 18, 0, '...', NULL, NULL),
(18, 'Từ điển 4', 'NXB Thanh Niên', 18, 0, '...', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cname` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(12, 'Giáo Khoa'),
(13, 'Kinh Tế'),
(14, 'Ngoại Ngữ'),
(15, 'Pháp Luật'),
(16, 'Tin Học'),
(17, 'Toán Học'),
(18, 'Từ Điển'),
(19, 'Văn Học');

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

DROP TABLE IF EXISTS `favorite`;
CREATE TABLE IF NOT EXISTS `favorite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_student` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sid` (`id_student`),
  KEY `bid` (`id_book`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

DROP TABLE IF EXISTS `issue`;
CREATE TABLE IF NOT EXISTS `issue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dateissue` date DEFAULT NULL,
  `id_student` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  `id_admin` int(11) DEFAULT '0',
  `status` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `sid` (`id_student`),
  KEY `aid` (`id_admin`),
  KEY `bid` (`id_book`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` char(255) DEFAULT NULL,
  `id_newscategory` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `datenews` date NOT NULL,
  `id_admin` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `aid` (`id_admin`),
  KEY `news_ibfk_2` (`id_newscategory`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `newscategories`
--

DROP TABLE IF EXISTS `newscategories`;
CREATE TABLE IF NOT EXISTS `newscategories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

DROP TABLE IF EXISTS `request`;
CREATE TABLE IF NOT EXISTS `request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `daterequest` date DEFAULT NULL,
  `id_student` int(11) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sid` (`id_student`),
  KEY `aid` (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `returns`
--

DROP TABLE IF EXISTS `returns`;
CREATE TABLE IF NOT EXISTS `returns` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datereturn` date DEFAULT NULL,
  `id_issue` int(11) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `rid` (`id_issue`),
  KEY `aid` (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'Chưa có tên',
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lock` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `favorite`
--
ALTER TABLE `favorite`
  ADD CONSTRAINT `favorite_ibfk_1` FOREIGN KEY (`id_student`) REFERENCES `students` (`id`),
  ADD CONSTRAINT `favorite_ibfk_2` FOREIGN KEY (`id_book`) REFERENCES `books` (`id`);

--
-- Constraints for table `issue`
--
ALTER TABLE `issue`
  ADD CONSTRAINT `issue_ibfk_1` FOREIGN KEY (`id_student`) REFERENCES `students` (`id`),
  ADD CONSTRAINT `issue_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`),
  ADD CONSTRAINT `issue_ibfk_3` FOREIGN KEY (`id_book`) REFERENCES `books` (`id`);

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`),
  ADD CONSTRAINT `news_ibfk_2` FOREIGN KEY (`id_newscategory`) REFERENCES `newscategories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`id_student`) REFERENCES `students` (`id`),
  ADD CONSTRAINT `request_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`);

--
-- Constraints for table `returns`
--
ALTER TABLE `returns`
  ADD CONSTRAINT `returns_ibfk_1` FOREIGN KEY (`id_issue`) REFERENCES `issue` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `returns_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
