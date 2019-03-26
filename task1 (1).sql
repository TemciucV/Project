-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26 Mar 2019 la 14:23
-- Versiune server: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task1`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `login`
--

INSERT INTO `login` (`id`, `login`, `password`) VALUES
(1, 'Valentina', 'temciuc12');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL,
  `deletem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`, `date`, `deletem`) VALUES
(2, 'Temciuc ', 'temciucvalentina26@gmail.com', 'hi', '0000-00-00', '<a href=\"deletem.php?\"> Delete </a>'),
(5, 'Temciuc ', 'Valentina', 'lala', '0000-00-00', '<a href=\"deletem.php?id=\".$row[\'id\'].\" \"> Delete </a>'),
(6, 'Temciuc ', 'Valentina', 'lala', '0000-00-00', '<a href=\"deletem.php?id=\".$row[\'id\'].\" \"> Delete </a>'),
(7, 'Temciuc ', 'temciucvalentina26@gmail.com', 'bine CURDATE() ', '0000-00-00', '<a href=\"deletem.php?id=\".$row[\'id\'].\" \"> Delete </a>'),
(8, 'maria', 'temciuc.97@mail.ru', 'GFGF CURDATE() ', '0000-00-00', '<a href=\"deletem.php?id=\".$row[\'id\'].\" \"> Delete </a>'),
(9, 'Temciuc ', ' vv', 'dfdf', '2019-03-23', '<a href=\"deletem.php?id=\".$row[\'id\'].\" \"> Delete </a>'),
(10, 'Temciuc ', 'temciucvalentina26@gmail.com', 'qqqqqqq', '2019-03-23', '<a href=\"deletem.php?id=\"10\"> Delete </a>'),
(11, 'Temciuc ', 'temciucvalentina26@gmail.com', 'qqqqqqq', '2019-03-23', '<a href=\"deletem.php?id=\"11\"> Delete </a>'),
(16, 'Temciuc ', 'jj', 'hey', '2019-03-25', '<a href=\'deletem.php?id={$id}\'> Delete </a>');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `title` text NOT NULL,
  `menu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `pages`
--

INSERT INTO `pages` (`id`, `content`, `title`, `menu`) VALUES
(1, '<main>\r\n<h3> About me </h3>\r\n<p> Name: Temciuc Valentina </p>\r\n<p> Date of birth: 26/12/1997 </p>\r\n<p> Eyes color: Green </p>\r\n<p> Studies: Technical University of Moldova </p>\r\n\r\n</main>', 'general', '<a href=\"index.php?id=1\" > General</a> <br>'),
(2, '<main>	\r\n<h3> Hobbies </h3>\r\n<p> Reading</p>\r\n<p> Cooking</p>\r\n<p> Traveling</p>\r\n<p> Music</p>\r\n<img src=\"IMG_20180806_154313.jpg\" alt=\"photo\" width=\"300\" height=\"200\">\r\n</main>', 'hobbies', '<a href=\"index.php?id=2\" > Hobbies</a> <br>'),
(3, '<main>\r\n<h3> Studies </h3>\r\n<p> Technical University of Moldova, Informational Management speciality </p>\r\n<table>\r\n	<tr>\r\n		<th>Object</th>\r\n		<th>Teacher</th>\r\n		<th>Grade</th>\r\n	</tr>\r\n	<tr>\r\n		<th>Management Informational</th>\r\n		<th>Moraru Vasile</th>\r\n		<th>9,60</th>\r\n	</tr>\r\n	<tr>\r\n		<th>Managementul Bazelor de Date</th>\r\n		<th>Perebinos Mihail</th>\r\n		<th>10,00</th>\r\n	</tr>\r\n	<tr>\r\n		<th>Sisteme de inteligenta artificiala</th>\r\n		<th>Luchianova Ludmila</th>\r\n		<th>9,00</th>\r\n	</tr>\r\n\r\n\r\n</table>\r\n</main>', 'grades', '<a href=\"index.php?id=3\" > Studies</a> <br>'),
(4, '<main>\r\n<h3> Contacts </h3>	 \r\n<p> Address: Studentilor 7/1, Chisinau </p>\r\n\r\n<p> Email: temciucvalentina26@gmail.com </p>\r\n</main>', 'contacts', '<a href=\"index.php?id=4\" > Contacts</a> <br>'),
(5, '<center><h1>Login</h1></center>  <section> <div class=\"login\"> <form method=\"POST\" action=\"login.php\"> 	Login: <br> 	<input type=\"text\" name=\"login\"><br> 	Password: <br> 	<input type=\"password\" name=\"password\"> <br> <br> 	<input type=\"submit\" value=\"submit\"> </form> </div> </section> </body>', 'login', '<a href=\"index.php?id=5\" > Log in</a> <br>'),
(6, '<main>\r\n<section>\r\n	<div class=\"contactme\">\r\n<h3>Contact me</h3>\r\n<form method=\"POST\" action= \"contactme.php\">\r\n	Full name: <br>\r\n	<input type=\"text\" name= \"name\"><br>\r\n	Email: <br>\r\n	<input type=\"text\" name= \"email\"> <br> \r\n	Comments: <br>\r\n	<textarea name=\"message\" rows=\"6\" cols=\"20\"></textarea>\r\n	 <br>\r\n	 <input type=\"submit\" value=\"submit\">\r\n	<input type=\"hidden\" name=\"run\">\r\n	\r\n</form>\r\n</div>\r\n</section>\r\n</main>', 'contact me', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
