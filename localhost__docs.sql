--
-- Database: `_ex47-47`
--
CREATE DATABASE IF NOT EXISTS `_ex47-47` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `_ex47-47`;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_date` datetime NOT NULL,
  `blog_title` text NOT NULL,
  `blog_lead` text NOT NULL,
  `blog_text` text NOT NULL,
  `blog_image` varchar(50) NOT NULL,
  `blog_visible` tinyint(11) NOT NULL,
  `blog_trash` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_date`, `blog_title`, `blog_lead`, `blog_text`, `blog_image`, `blog_visible`, `blog_trash`) VALUES
(1, '2015-03-09 20:56:53', 'Lorem ipsum dolor ', 'Aenean commodo nibh nunc, et tincidunt mauris pretium at.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquam sollicitudin tristique. Vestibulum ut scelerisque quam. Aliquam erat volutpat. Aenean commodo nibh nunc, et tincidunt mauris pretium at. Vivamus varius ex in risus imperdiet, non tempus ante tincidunt. Fusce ultricies, ipsum et convallis aliquam, neque arcu fermentum velit, eu facilisis nisi nulla nec nulla.', 'blog1.jpg', 1, 0),
(2, '2015-01-07 20:57:22', 'Aenean pretium blandit ', 'Quisque pellentesque purus sed quam dictum accumsan.', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce eu eros scelerisque, tincidunt nulla quis, facilisis erat. Duis sit amet turpis nisl. Nullam enim ex, convallis quis lacus id, pharetra cursus odio. Nullam ac sapien libero. Quisque pellentesque purus sed quam dictum accumsan. Etiam luctus hendrerit imperdiet. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean pretium blandit nunc ac porta. ', 'blog2.jpg', 1, 0),
(3, '2015-02-01 20:57:50', 'Quisque feugiat iaculis', 'Nulla vehicula risus vel dui rhoncus vestibulum. Quisque feugiat iaculis lectus ac feugiat.', 'In scelerisque imperdiet ante, eleifend feugiat sapien gravida ac. Pellentesque mollis orci dolor, interdum viverra arcu ultricies nec. Donec pellentesque, enim ultrices commodo auctor, libero ipsum euismod turpis, id tempus velit justo id mauris. Nulla vehicula risus vel dui rhoncus vestibulum. Quisque feugiat iaculis lectus ac feugiat. Vestibulum suscipit quam lorem, nec faucibus arcu accumsan in.', 'blog3.jpg', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `book_title` text NOT NULL,
  `book_lead` text NOT NULL,
  `book_text` text NOT NULL,
  `book_author` text NOT NULL,
  `book_image` varchar(50) NOT NULL,
  `book_price` decimal(10,2) NOT NULL,
  `book_shipping` decimal(10,2) NOT NULL,
  `book_featured` tinyint(4) NOT NULL,
  `book_visible` tinyint(4) NOT NULL,
  `book_trash` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_title`, `book_lead`, `book_text`, `book_author`, `book_image`, `book_price`, `book_shipping`, `book_featured`, `book_visible`, `book_trash`) VALUES
(1, 'HTML & CSS', 'A full-color introduction to the basics of HTML and CSS from the publishers of Wrox!', 'Every day, more and more people want to learn some HTML and CSS. Joining the professional web designers and programmers are new audiences who need to know a little bit of code at work (update a content management system or e-commerce store) and those who want to make their personal blogs more attractive. Many books teaching HTML and CSS are dry and only written for those who want to become programmers, which is why this book takes an entirely new approach.\r\n\r\n    Introduces HTML and CSS in a way that makes them accessible to everyone—hobbyists, students, and professionals—and it’s full-color throughout\r\n    Utilizes information graphics and lifestyle photography to explain the topics in a simple way that is engaging\r\n    Boasts a unique structure that allows you to progress through the chapters from beginning to end or just dip into topics of particular interest at your leisure\r\n\r\nThis educational book is one that you will enjoy picking up, reading, then referring back to. It will make you wish other technical topics were presented in such a simple, attractive and engaging way!', 'Jon Duckett', 'book1.jpg', '29.99', '1.50', 0, 1, 0),
(2, 'HTML5: The Missing Manual', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet velit non arcu molestie hendrerit. 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet velit non arcu molestie hendrerit. Nam tincidunt sapien et elementum sollicitudin. Phasellus consectetur justo id tortor sodales accumsan. In non est pharetra, sodales lectus quis, tincidunt sem.  Morbi nec convallis velit. Suspendisse lobortis hendrerit eleifend. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec augue lectus, euismod ut orci ut, sagittis tempus felis. Ut feugiat malesuada tellus ac posuere.', 'Matthew MacDonald', 'book2.jpg', '17.40', '2.50', 1, 1, 0),
(3, 'PHP Web Services', 'Aenean nec urna lobortis, elementum felis tincidunt, lacinia augue. Suspendisse placerat tempor interdum.', 'Nunc iaculis lacus vel mi laoreet, at imperdiet augue sollicitudin. Curabitur rutrum metus et nulla porta, non mattis lorem convallis. Duis consequat augue nec ultricies porta.  Vivamus hendrerit facilisis erat interdum pretium. Maecenas pharetra, quam sit amet tristique elementum, leo augue imperdiet odio, a molestie felis magna sit amet erat. Pellentesque porttitor mi ut sollicitudin pulvinar.', 'Jon Duckett', 'image1455106519.jpg', '18.99', '2.50', 1, 1, 0),
(4, 'Learning PHP, MySQL & JavaScript', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Aenean ac lectus justo. Aliquam suscipit est lectus, fringilla facilisis dolor eleifend et. In auctor finibus purus, non auctor leo auctor auctor. Aenean tincidunt eu ligula eget egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec venenatis nisi ac magna dapibus euismod. Phasellus gravida massa ipsum, eu vehicula felis hendrerit in. Pellentesque vel eros convallis, tincidunt massa quis, volutpat lacus. In maximus malesuada tellus. Vestibulum ut laoreet enim, blandit feugiat leo. Donec sit amet est sed quam pulvinar dapibus. Maecenas bibendum ligula ex, ac scelerisque ligula dapibus id. Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Pellentesque sed tempor nibh. Mauris eget ex urna. ', 'Robin Nixon', 'book4.jpg', '34.99', '3.00', 0, 1, 0),
(5, 'Building Web Apps with WordPress', 'Praesent lectus erat, varius at sagittis vel, consequat ut nunc. Quisque vel mollis diam', 'Suspendisse id mollis ligula. Morbi rutrum lorem et leo ultrices viverra. Donec gravida interdum tortor eget facilisis. Aliquam vehicula libero euismod laoreet ultricies. Nullam dignissim facilisis tellus, vitae malesuada ante volutpat vel. Duis sed arcu et urna posuere ornare.&nbsp;In hac habitasse platea dictumst. Ut scelerisque, elit eu posuere lacinia, neque ante laoreet sapien, id ullamcorper sapien nisl non nunc. Praesent lectus erat, varius at sagittis vel, consequat ut nunc. Quisque vel mollis diam. Mauris lobortis sodales ante, quis sollicitudin neque sollicitudin et. Cras pharetra ex mauris, eget vestibulum augue ultricies et', 'Brian Messenlehner', 'image1455106870.jpg', '22.00', '5.00', 0, 1, 0),
(6, 'Angular JS', 'Fusce in sapien sagittis, volutpat ipsum vel, suscipit neque. Aliquam erat volutpat. Sed ullamcorper ', 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce in sapien sagittis, volutpat ipsum vel, suscipit neque. Aliquam erat volutpat. Sed ullamcorper quam nec dui posuere aliquet vel in augue. Suspendisse condimentum vel ex eu maximus.&nbsp;Vivamus leo odio, tincidunt a dui sit amet, vestibulum commodo risus. Nam lobortis at eros ut ultrices. Pellentesque sit amet mi libero. Duis feugiat nunc est, a lacinia felis vulputate nec. Suspendisse ac libero neque. Fusce risus justo, lobortis non laoreet eget, iaculis ut quam. Morbi ac mattis lorem, lacinia tempor velit. Nulla volutpat ut metus posuere laoreet. Ut scelerisque sem sed ultricies sagittis. Nulla volutpat ut sem ac lobortis.', 'Manfred Steyer', 'image1455107000.jpg', '15.00', '2.00', 0, 1, 0),
(7, 'Javascript & jQuery', '. Vivamus facilisis elit id ullamcorper commodo. Mauris id viverra ante', 'Integer vestibulum volutpat mi a commodo. Proin fringilla eros eu dolor accumsan blandit. Vivamus facilisis elit id ullamcorper commodo. Mauris id viverra ante. Phasellus pretium pulvinar euismod. Integer laoreet metus vitae aliquet blandit. Mauris non urna vitae lacus rhoncus pretium. Praesent mollis quis urna id aliquet.', 'Mauris id Viverra', 'image1455107653.jpg', '45.00', '4.00', 0, 1, 0),
(11, '', '', '', '', '', '0.00', '0.00', 0, 0, 1),
(12, '', '', '', '', '', '0.00', '0.00', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `message_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `message_name` tinytext NOT NULL,
  `message_email` tinytext NOT NULL,
  `message_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `message_date`, `message_name`, `message_email`, `message_text`) VALUES
(1, '2017-11-28 12:57:11', 'John Doe', 'john.doe@email.com', 'Hello! Loved your books! Best Regards'),
(3, '2017-09-28 13:03:11', 'Arthur King', 'king.arthur@email.com', 'Hello there! I would like to order a book that is not on your catalog. Is it possible? Best Regards');

-- --------------------------------------------------------

--
-- Table structure for table `order_books`
--

CREATE TABLE `order_books` (
  `ob_id` int(11) NOT NULL,
  `ob_order_id` int(11) NOT NULL,
  `ob_book_id` int(11) NOT NULL,
  `ob_price` decimal(10,2) NOT NULL,
  `ob_shipping` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_books`
--

INSERT INTO `order_books` (`ob_id`, `ob_order_id`, `ob_book_id`, `ob_price`, `ob_shipping`) VALUES
(1, 1, 2, '17.40', '2.50'),
(2, 1, 1, '29.99', '1.50'),
(3, 1, 7, '45.00', '4.00'),
(4, 2, 2, '17.40', '2.50'),
(5, 2, 1, '29.99', '1.50'),
(6, 2, 7, '45.00', '4.00'),
(7, 3, 1, '29.99', '1.50'),
(8, 3, 7, '45.00', '4.00'),
(9, 3, 6, '15.00', '2.00'),
(10, 4, 1, '29.99', '1.50'),
(11, 4, 7, '45.00', '4.00'),
(12, 4, 6, '15.00', '2.00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `order_name` text NOT NULL,
  `order_email` text NOT NULL,
  `order_address` text NOT NULL,
  `order_country` text NOT NULL,
  `order_price` decimal(10,2) NOT NULL,
  `order_shipping` decimal(10,2) NOT NULL,
  `order_total` decimal(10,2) NOT NULL,
  `order_status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_date`, `order_name`, `order_email`, `order_address`, `order_country`, `order_price`, `order_shipping`, `order_total`, `order_status`) VALUES
(1, '2018-02-28 14:11:41', 'Nuno Palma', 'nunoaaplam@gmail.com', 'Avenida da Liberdade n 10 Lisboa', 'Portugal', '0.00', '0.00', '0.00', 'created'),
(2, '2018-02-28 14:32:00', 'Nuno Palma', 'nunoaaplama@gmail.com', 'Avenida da Liberdade n 10 Lisboa', 'Portugal', '0.00', '0.00', '0.00', 'created'),
(3, '2018-02-28 14:39:27', 'Nuno Palma', 'nunoaaplama@gmail.com', 'Avenida da Liberdade n 10 Lisboa', 'Portugal', '89.99', '7.50', '97.49', 'created'),
(4, '2018-02-28 14:40:07', 'Nuno Palma', 'nunoaaplama@gmail.com', 'Avenida da Liberdade n 10 Lisboa', 'Portugal', '89.99', '7.50', '97.49', 'created');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL,
  `page_title` tinytext NOT NULL,
  `page_lead` text NOT NULL,
  `page_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `page_title`, `page_lead`, `page_text`) VALUES
(1, 'About', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In magna orci, pretium non maximus sed, imperdiet eget libero. ', 'Aliquam in posuere eros. Duis quis laoreet elit. Morbi id leo dignissim, pretium lorem sed, commodo elit. Etiam tincidunt porttitor elit, a accumsan orci maximus sit amet.\r\n                <br /><br />\r\n                 Aenean aliquam ipsum rhoncus volutpat ultrices. Vestibulum convallis fermentum leo auctor tempor. Fusce dapibus nec lectus at imperdiet. In scelerisque nisi mollis mi ullamcorper, maximus pretium urna scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus. \r\n                 <br /><br />\r\n                 Aliquam in posuere eros. Duis quis laoreet elit. Morbi id leo dignissim, pretium lorem sed, commodo elit. Etiam tincidunt porttitor elit, a accumsan orci maximus sit amet.\r\n                <br /><br />\r\n                 Aenean aliquam ipsum rhoncus volutpat ultrices. Vestibulum convallis fermentum leo auctor tempor. Fusce dapibus nec lectus at imperdiet. In scelerisque nisi mollis mi ullamcorper, maximus pretium urna scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus. \r\n            '),
(2, 'Contacts', '', 'info@gribooks.com <br /><br />\r\n293 Hall Street<br />\r\nLas Vegas, NV 89119 ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_username`, `user_password`, `user_name`, `user_image`, `user_type`) VALUES
(1, 'nuno@gmail.com', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', 'Nuno Palma', '', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `order_books`
--
ALTER TABLE `order_books`
  ADD PRIMARY KEY (`ob_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `order_books`
--
ALTER TABLE `order_books`
  MODIFY `ob_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;