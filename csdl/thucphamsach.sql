-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Client: localhost:3306
-- Généré le: Sam 19 Août 2017 à 15:10
-- Version du serveur: 10.0.31-MariaDB-cll-lve
-- Version de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `elwbreoxhosting_thucphamsach`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_group_id` int(64) NOT NULL,
  `images` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`, `admin_group_id`, `images`) VALUES
(4, 'khanhhbvip1', '9f0d65c3a7fd984427469b324491c84f', 'Nguyễn Xuân Khánh', 0, 'avt1.jpg'),
(5, 'xuankhanh', '9f0d65c3a7fd984427469b324491c84f', 'Nguyễn Xuân Khánh', 0, 'avt2.jpg'),
(6, 'khanhhbvip11', '9f0d65c3a7fd984427469b324491c84f', 'Nguyễn Xuân Khánh', 0, 'avt51.jpg'),
(9, 'khanhhbvip00', '9f0d65c3a7fd984427469b324491c84f', 'Nguyễn Xuân Khánh', 0, 'avt41.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `admin_group`
--

CREATE TABLE IF NOT EXISTS `admin_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `sort_order` tinyint(4) NOT NULL,
  `permisssion` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `catalog`
--

CREATE TABLE IF NOT EXISTS `catalog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `site_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `sort_order` tinyint(4) NOT NULL,
  `slug_catalog` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=24 ;

--
-- Contenu de la table `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `site_title`, `meta_desc`, `parent_id`, `sort_order`, `slug_catalog`) VALUES
(1, 'Nấm sạch hòa bình', 'Nấm sạch hòa bình', 'Nấm sạch hòa bình', 2, 0, ''),
(2, 'Rau sạch', 'rau sạch', 'rau sạch', 0, 0, ''),
(7, 'Rau hữu cơ', 'Rau hữu cơ', 'Rau hữu cơ', 2, 0, ''),
(8, 'Thịt sạch', 'Thịt sạch', 'Thịt sạch', 0, 1, ''),
(9, 'Thịt bò', 'Thịt bò', 'Thịt bò', 8, 1, ''),
(5, 'Rau sạch hòa bình', 'Rau sạch hòa bình', 'Rau sạch hòa bình', 2, 0, ''),
(6, 'Rau an toàn', 'Rau an toàn', 'Rau an toàn', 2, 0, ''),
(10, 'Gạo - Đồ Khô', 'Gạo - Đồ Khô', 'Gạo - Đồ Khô', 0, 9, ''),
(11, 'Đặc Sản 3 Miền', 'Đặc Sản 3 Miền', 'Đặc Sản 3 Miền', 0, 8, ''),
(12, 'Hoa Quả Sạch', 'Hoa Quả Sạch', 'Hoa Quả Sạch', 0, 9, ''),
(13, 'Thuỷ - Hải Sản Sạch', 'Thuỷ - Hải Sản Sạch', 'Thuỷ - Hải Sản Sạch', 0, 7, ''),
(14, 'Thịt Gia Cầm', 'Thịt Gia Cầm', 'Thịt Gia Cầm', 8, 0, ''),
(15, 'Thịt Lợn', 'Thịt Lợn', 'Thịt Lợn', 8, 11, ''),
(16, 'Thủy Sản Tươi Sống', 'Thủy Sản Tươi Sống', 'Thủy Sản Tươi Sống', 13, 10, ''),
(17, 'Cá Sông Đà', 'Cá Sông Đà', 'Cá Sông Đà', 13, 13, ''),
(18, 'Hoa Quả Nhập Khẩu', 'Hoa Quả Nhập Khẩu', 'Hoa Quả Nhập Khẩu', 12, 14, ''),
(19, 'Hoa Quả Việt Nam', 'Hoa Quả Việt Nam', 'Hoa Quả Việt Nam', 12, 15, ''),
(20, 'Hoa Quả Sấy Khô Hòa Bình', 'Hoa Quả Sấy Khô Hòa Bình', 'Hoa Quả Sấy Khô Hòa Bình', 12, 16, ''),
(21, 'Nước Ép Trái Cây', 'Nước Ép Trái Cây', 'Nước Ép Trái Cây', 12, 17, ''),
(22, 'Gạo Ngon', 'Gạo Ngon', 'Gạo Ngon', 10, 18, ''),
(23, 'Đồ Khô', 'Đồ Khô', 'Đồ Khô', 10, 18, '');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(128) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `address`, `title`, `content`, `phone`, `created`) VALUES
(1, 'Nguyễn Xuân Khánh', 'khanhhbvip1@gmail.com', 'hà nội', 'test', 'dddddddddddddddddddd', '0914853115', 1499179193),
(2, 'Nguyễn Xuân Khánh', 'khanhhbvip1@gmail.com', 'hà nội', 'test', 'dddddddddddddddddddd', '0914853115', 1499179234),
(3, 'Nguyễn Xuân Khánh', 'khanhhbvip1@gmail.com', 'hà nội', 'test', 'ccccccccccccccccccccccccccccccc', '0914853115', 1499179254),
(4, 'Nguyễn Xuân Khánh', 'khanhhbvip1@gmail.com', 'hà nội', 'test2', 'ccccccccccccccccccccccccccccccccc', '0914853115', 1499179502),
(5, 'Nguyễn Xuân Khánh', 'khanhhbvip1@gmail.com', 'hà nội', 'test', 'cccccccccccccccccccccccccc', '09148531151', 1499179757),
(6, 'Nguyễn Xuân Khánh', 'khanhhbvip1@gmail.com', 'hà nội', 'test', 'dddddddddđ', '0914853115', 1499179828),
(7, 'Nguyễn Xuân Khánh', 'khanhhbvip1@gmail.com', 'hà nội', 'test', 'dccccccccccccccccccccccc', '0914853115', 1499179872),
(14, 'jjj', 'jjj', 'jj', 'jj', 'jj', 'jjj', 1500288856);

-- --------------------------------------------------------

--
-- Structure de la table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sort_order` tinyint(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `new`
--

CREATE TABLE IF NOT EXISTS `new` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `intro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `site_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_link` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created` int(11) NOT NULL,
  `count_view` int(11) NOT NULL,
  `slug_news` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Contenu de la table `new`
--

INSERT INTO `new` (`id`, `title`, `intro`, `content`, `site_title`, `meta_desc`, `image_link`, `created`, `count_view`, `slug_news`) VALUES
(1, 'Cách làm sạch cá hồi?', 'Cách làm sạch cá hồi hiệu quả', '<h3><strong><strong>Muốn con mau lớn, th&ocirc;ng minh, mẹ n&agrave;o cũng nghĩ đến bổ sung m&oacute;n c&aacute; hồi v&agrave;o thực đơn h&agrave;ng ng&agrave;y cho b&eacute;. Nhưng l&agrave;m sạch c&aacute; hồi như thế n&agrave;o th&igrave; kh&ocirc;ng phải mẹ n&agrave;o cũng biết. Trong khu&ocirc;n khổ b&agrave;i viết h&ocirc;m nay, S&oacute;i Biển-cửa h&agrave;ng&nbsp;hải sản v&agrave; thực phẩm sạch uy t&iacute;n nhất H&agrave; Nội sẽ hướng dẫn c&aacute;c mẹ c&aacute;ch l&agrave;m sạch c&aacute; hồi.</strong></strong></h3>\r\n\r\n<h3><u><em>1. Chọn Lựa</em></u></h3>\r\n\r\n<h4>Mắt c&aacute; hồi phải trong, con ngươi phải đen s&aacute;ng, mang c&aacute; hồi kh&ocirc;ng th&acirc;m. Thịt c&aacute; hồi tươi phải chắc v&agrave; đ&agrave;n hồi. N&ecirc;n kiểm tra qua trong bụng c&aacute; hồi để chắc chắn rằng kh&ocirc;ng c&oacute; những vết m&aacute;u hay những v&ugrave;ng thẫm m&agrave;u.</h4>\r\n\r\n<h3><u><em>2. C&aacute;ch sơ chế c&aacute; hồi trước khi chế biến</em></u></h3>\r\n\r\n<h4>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Cắt rọc thịt c&aacute; hồi từ đầu đến đu&ocirc;i, để dao nằm ngang s&aacute;t với bộ xương c&aacute;. Mở khoang bụng cắt bỏ ruột.<img alt="" src="/thucphamsach/upload/images/lam-sach-ca-hoi-1.jpg" /></h4>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Loại bỏ vảy bụng c&aacute; v&agrave; xương c&aacute;.</p>\r\n\r\n<p><img alt="" src="/thucphamsach/upload/images/lam-sach-ca-hoi-3.jpg" /></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; T&igrave;m bỏ những c&aacute;i xương lẻ c&ograve;n d&iacute;nh trong thịt bằng nh&iacute;p nhổ.</p>\r\n\r\n<h4><img alt="" src="/thucphamsach/upload/images/lam-sach-ca-hoi-4.jpg" />C&aacute; hồi c&oacute; thể được cắt theo nhiều kiểu kh&aacute;c nhau tuỳ v&agrave;o y&ecirc;u cầu của từng m&oacute;n ăn. Những c&aacute;ch cắt cơ bản l&agrave; cắt th&agrave;nh kh&uacute;c, phil&ecirc;, miếng h&igrave;nh vỏ s&ograve; v&agrave; h&igrave;nh khối.</h4>\r\n\r\n<h3><u><em>3.L&agrave;m giảm m&ugrave;i tanh của c&aacute;</em></u></h3>\r\n\r\n<p><br />\r\nC&oacute; nhiều c&aacute;ch l&agrave;m giảm m&ugrave;i tanh của c&aacute; hồi, trong đ&oacute; c&oacute; v&agrave;i c&aacute;ch đơn giản sau:</p>\r\n\r\n<p>-&nbsp;D&ugrave;ng chanh tươi vắt lấy nước, ng&acirc;m c&aacute; khoảng v&agrave;i ph&uacute;t sau đ&oacute; l&agrave;m sạch như b&igrave;nh thường. C&aacute; sẽ sạch nhớt v&agrave; kh&ocirc;ng bị tanh.</p>\r\n\r\n<p>Lưu &yacute;: Kh&ocirc;ng n&ecirc;n ng&acirc;m c&aacute; qu&aacute; l&acirc;u sẽ mất vị tươi của c&aacute;</p>\r\n\r\n<p>-&nbsp;D&ugrave;ng nước muối để rửa hay d&ugrave;ng muối hột x&aacute;t l&ecirc;n c&aacute; hoặc ng&acirc;m c&aacute; đ&atilde; l&agrave;m sạch v&agrave;o nước lạnh c&oacute; pha &iacute;t giấm, hoặc trộn v&agrave;o c&aacute; một &iacute;t hạt ti&ecirc;u hay l&aacute; nguyệt quế. Như thế, khi nấu nướng, c&aacute; kh&ocirc;ng c&ograve;n m&ugrave;i tanh.</p>\r\n\r\n<p>-&nbsp;C&aacute; sau khi l&agrave;m sạch, bạn d&ugrave;ng rượu nho ướp một l&uacute;c, m&ugrave;i thơm của rượu sẽ l&agrave;m mất m&ugrave;i tanh</p>\r\n\r\n<p>- Trước khi r&aacute;n, bạn cho c&aacute; v&agrave;o ng&acirc;m c&ugrave;ng một &iacute;t sữa b&ograve;, như vậy sẽ l&agrave;m c&aacute; hết m&ugrave;i tanh v&agrave; tăng th&ecirc;m độ tươi.</p>\r\n\r\n<p><strong>Những đi&ecirc;̀u bạn n&ecirc;n bi&ecirc;́t v&ecirc;̀ cá h&ocirc;̀i :</strong></p>\r\n\r\n<p>- Cá h&ocirc;̀i được sinh ra từ nước ngọt nhưng lại lớn l&ecirc;n ở biển. Da của loại cá này r&acirc;́t trơn láng, thịt cá có màu cam, là ngu&ocirc;̀n cung c&acirc;́p d&ocirc;̀i dào các ch&acirc;́t dinh dưỡng c&acirc;̀n thi&ecirc;́t cho cơ th&ecirc;̉ đặc bi&ecirc;̣t là omega 3, DHA, EPA, vitamin, B12, ch&acirc;́t sắt,protein&hellip;Cá h&ocirc;̀i ít xương, nạc nhi&ecirc;̀u, kh&ocirc;ng tanh, lại có hương vị thơm ngon n&ecirc;n d&ecirc;̃ ch&ecirc;́ bi&ecirc;́n thành các món ăn cho cả gia đình Món cá h&ocirc;̀i s&ocirc;́ng ăn kèm với mù-tạt theo phong cách &acirc;̉m thực của Nh&acirc;̣t khá n&ocirc;̉i ti&ecirc;́ng. Do đó, món ăn này đã du nh&acirc;̣p vào n&ecirc;n văn hoá &acirc;̉m thực của nhi&ecirc;̀u đ&acirc;́t nước, trong đó có Vi&ecirc;̣t Nam Bạn có th&ecirc;̉ dùng nguy&ecirc;n li&ecirc;̣u thịt cá h&ocirc;̀i đ&ecirc;̉ ch&ecirc;́ bi&ecirc;́n nhi&ecirc;̀u món ăn theo kh&acirc;̉u vị Vi&ecirc;̣t như cá h&ocirc;̀i kho nước dừa, cá h&ocirc;̀i nướng xi&ecirc;n&hellip;. Cách thực hi&ecirc;̣n cũng như các loại cá th&ocirc;ng thường khác như rán giòn ch&acirc;́m nước mắm chua ngọt hay mắm gừng, h&acirc;́p gừng hành, kho t&ocirc;̣,nướng, lẩu, nấu ch&aacute;o cho b&eacute; y&ecirc;u, n&acirc;́u canh chua hoặc canh rau ngọt&hellip;.- Khi ch&ecirc;́ bi&ecirc;́n cá h&ocirc;̀i, bạn n&ecirc;n chú ý những đi&ecirc;̀u sau: -n&acirc;́u cá torng thời gian ngắn, kh&ocirc;ng rán kho, n&acirc;́u cá quá l&acirc;u vì thịt cá h&ocirc;̀i sẽ xạm lạ, r&acirc;́t kh&ocirc;, kh&ocirc;ng ngon. Cá vừa chín tới hoặc còn hơi tái m&ocirc;̣t chút, thịt sẽ m&ecirc;̀m, ngon và thơm hơn -Thịt cá h&ocirc;̀i có vị ngọt và đ&acirc;̣m đà đặc trưng n&ecirc;n bạn c&acirc;̀n giảm lượng gia vị kh&ocirc;ng n&ecirc;m quá đ&acirc;̣m, sẽ làm m&acirc;́t vị ngon của cá - T&ocirc;́t nh&acirc;́t n&ecirc;n dùng cá còn tươi s&ocirc;́ng. N&ecirc;́u kh&ocirc;ng, có th&ecirc;̉ dùng cá h&ocirc;̀i đ&ocirc;ng lạnh nhưng phải cho vào ngăn mát tủ lạnh đ&ecirc;̉ cá rã đ&ocirc;ng từ từ, như th&ecirc;́ thịt cá mới ko bị bở, nát</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>C&aacute;ch chọn v&agrave; bảo quản c&aacute; hồi tươi</strong>:<br />\r\n- Để biết c&aacute; c&ograve;n tươi, h&atilde;y cầm phần đu&ocirc;i của c&aacute; v&agrave; lắc. Nếu thịt ở đốt sống lưng chắc th&igrave; c&aacute; đ&oacute; c&ograve;n tươi<br />\r\n- Ấn v&agrave;o m&igrave;nh c&aacute; để kiểm tra, chọn những con c&aacute; c&oacute; độ đ&agrave;n hồi tốt<br />\r\n- Trước khi chế biến c&aacute; n&ecirc;n l&agrave;m sạch c&aacute; bằng nước sạch v&agrave; giấm hoặc rượu để khử m&ugrave;i tanh.<br />\r\n- Ướp lạnh c&aacute; để bảo quản, d&ugrave;ng trong v&ograve;ng 24 giờ. Nếu c&aacute; hồi để trong ngăn đ&ocirc;ng lạnh th&igrave; c&oacute; thể bảo quản trong v&ograve;ng 3 th&aacute;ng, r&atilde; đ&ocirc;ng trước khi sử dụng<br />\r\n- C&aacute; Hồi c&oacute; thể ăn sống, m&oacute;n ăn phổ biến m&agrave; người ta hay d&ugrave;ng l&agrave; m&oacute;n sushi. Ngo&agrave;i ra c&aacute; hồi c&oacute; thể l&agrave;m c&aacute;c m&oacute;n nướng, m&oacute;n chi&ecirc;n, m&oacute;n kho.<br />\r\n- Để giữ được hương vị của c&aacute; hồi kh&ocirc;ng n&ecirc;n chế biến qu&aacute; kỹ v&agrave; sử dụng nhiều gia vị.</p>\r\n', 'Cách làm sạch cá hồi', 'Cách làm sạch cá hồi', 'lam-sach-ca-hoi.jpg', 1498539609, 15, ''),
(4, 'Hóa ra nhiều kiến thức về ẩm thực Nhật Bản của chúng ta sai bét rồi', 'Người Nhật không ăn cá hồi sống – và còn nhiều lầm tưởng thường thấy khác ', '<h2>Người Nhật kh&ocirc;ng ăn c&aacute; hồi sống &ndash; v&agrave; c&ograve;n&nbsp;nhiều&nbsp;lầm tưởng thường thấy kh&aacute;c&nbsp;</h2>\r\n\r\n<p>Th&agrave;nh thật m&agrave; n&oacute;i chẳng mấy ai trong ta được ăn m&oacute;n Nhật truyền thống&nbsp;đ&uacute;ng chuẩn cả. Bởi lẽ&nbsp;nội&nbsp;tại Nhật Bản hiện nay&nbsp;c&oacute; 2 luồng văn h&oacute;a đan xen lẫn nhau, c&ugrave;ng tồn tại v&agrave; ph&aacute;t triển song song, bất chấp việc bản chất của ch&uacute;ng kh&aacute;c nhau ho&agrave;n to&agrave;n, đ&oacute; l&agrave; văn h&oacute;a Truyền thống v&agrave; Hiện đại. Nếu bạn đ&atilde; sinh sống hoặc l&agrave;m việc ở Nhật Bản một thời gian v&agrave; tinh &yacute; một ch&uacute;t th&igrave;&nbsp;c&oacute; thể nhận thấy ngay cả những người Nhật gốc cũng c&oacute; thể: s&aacute;ng ăn B&aacute;nh mỳ Ph&aacute;p, trưa ăn Buger Mỹ v&agrave; tối quay về với cơm mơ muối. Sự b&agrave;nh trướng của văn h&oacute;a ẩm thực phương T&acirc;y l&agrave; kh&ocirc;ng thể ngăn cản, n&oacute; ph&ugrave; hợp với x&atilde; hội hiện đại bởi sự nhanh tr&oacute;ng, thuận tiện. Tuy nhi&ecirc;n d&ugrave; c&oacute; kh&oacute; khăn cỡ n&agrave;o th&igrave; ẩm thực Truyền thống Nhật Bản vẫn bền bỉ tồn tại với thời gian, bất chấp việc n&oacute; chỉ d&aacute;m &acirc;m thầm, lặng lẽ đi kế b&ecirc;n, kh&ocirc;ng ồn &atilde;, kh&ocirc;ng gi&agrave;u sang v&agrave; cũng chẳng h&agrave;o nho&aacute;ng.&nbsp;<img alt="nguoi-nhat-ban-an-nhu-nao" src="/thucphamsach/upload/images/nguoi-nhat-ban-an-nhu-nao.jpg" /></p>\r\n\r\n<p><strong>Vậy c&aacute;c loại samshimi v&agrave; sushi tr&ecirc;n to&agrave;n thế giới th&igrave; sao? N&oacute; liệu c&oacute; chuẩn?</strong><br />\r\nHầu hết l&agrave; &quot;bản sao lỗi&quot; của c&ocirc;ng thức chuẩn Nhật c&aacute;c bạn ạ. Mặc d&ugrave; c&oacute; thể n&oacute; được biến đổi sao cho ph&ugrave; hợp với văn h&oacute;a v&agrave; nhu cầu của địa phương đ&oacute;. T&ocirc;i n&oacute;i lu&ocirc;n điều n&agrave;y kh&ocirc;ng hề xấu, tuy nhi&ecirc;n n&oacute; vẫn g&acirc;y những lầm tưởng về ẩm thực Nhật Bản ch&iacute;nh thống.</p>\r\n\r\n<p>Dưới đ&acirc;y xin gửi tới qu&yacute; kh&aacute;ch h&agrave;ng th&acirc;n mến của t&ocirc;i những lầm tưởng về ẩm thực Nhật Bản v&agrave; c&aacute;ch sửa sai, để bạn hiều hơn về n&ecirc;n nền ẩm thực tinh tế v&agrave; nh&atilde; nhặn biết nhường n&agrave;o.</p>\r\n\r\n<h3><strong>Kh&ocirc;ng ăn sống c&aacute; hồi m&agrave; nướng l&ecirc;n</strong></h3>\r\n\r\n<p><strong><img alt="nguoi-nhat-ban-an-nhu-nao-1" src="/thucphamsach/upload/images/nguoi-nhat-ban-an-nhu-nao1.jpg" /></strong></p>\r\n\r\n<p>Kh&ocirc;ng biết từ khi n&agrave;o m&agrave; cả thế giới lại coi&nbsp;c&aacute; hồi sống như biểu tượng của người Nhật. Nhưng nếu bạn tới c&aacute;c nh&agrave; h&agrave;ng sang trọng ở Nhật, c&ograve;n l&acirc;u mới c&oacute; m&oacute;n sushi, sashimi từ c&aacute; hồi. Đơn giản, bởi từ những năm 700 của 2 thi&ecirc;n ni&ecirc;n kỉ trước người Nhật đ&atilde; c&oacute; &yacute; thức về nguy cơ mắc c&aacute;c bệnh về đường ruột từ c&aacute;c m&oacute;n từ c&aacute; hồi sống. Nếu muốn ăn sushi hay sashimi người Nhật sẽ d&ugrave;ng&nbsp;<a href="http://cleverfood.com.vn/ca-ngu-dai-duong-8606403.html" target="_blank"><strong>C&aacute; Ngừ Đại Dương</strong></a>&nbsp;v&agrave; C&aacute; Tai - những loại&nbsp;<a href="http://cleverfood.com.vn/hai-san-tuoi-song-b2111121.html" target="_blank"><strong>hải sản</strong></a>&nbsp;cao cấp c&oacute; gi&aacute; đắt hơn c&aacute; hồi rất nhiều.&nbsp;</p>\r\n\r\n<p>Tuy nhi&ecirc;n c&aacute;c bạn vẫn t&igrave;m thấy c&aacute; hồi sống ở nhiều nh&agrave; h&agrave;ng b&igrave;nh d&acirc;n kh&aacute;c, bởi lẽ việc đại tr&agrave; ẩm thực l&agrave; điều bắt buộc, n&oacute; phục vụ được nhiều thực kh&aacute;ch hơn, c&oacute; lẽ bởi vậy m&agrave; ch&uacute;ng ta nghĩ n&oacute; l&agrave; m&oacute;n ăn được ưa chuộng nhất tại Nhật Bản.</p>\r\n\r\n<p><strong>Vậy ch&iacute;nh x&aacute;c th&igrave; người Nhật l&agrave;m g&igrave; với c&aacute; hồi?&nbsp;</strong></p>\r\n\r\n<p>C&aacute;ch chế biến c&aacute; hồi truyền thống phổ biến nhất l&agrave; Nướng Than. Thịt&nbsp;<a href="http://cleverfood.com.vn/ca-hoi-nauy-6572653.html" target="_blank"><strong>c&aacute; hồi</strong></a>&nbsp;rất b&eacute;o n&ecirc;n đem nướng rất hợp, l&agrave;m cho lớp da gi&ograve;n rụm, thịt săn lại ăn bớt ng&aacute;n. Họ thường nướng c&aacute; hồi với rượu gạo hoặc muối tinh, khi ăn k&egrave;m rau củ ng&acirc;m chua hoặc canh miso. Đặc biệt người Nhật kh&ocirc;ng tẩm ướp qu&aacute; nhiều gia vị, họ muốn cảm nhận nhiều nhất vị ngọt, b&eacute;o, b&ugrave;i của c&aacute;.</p>\r\n\r\n<p><img alt="salmon-mirinzuke" src="/thucphamsach/upload/images/salmon-mirinzuke.jpg" /><strong>Dừng ngay việc trộn wasabi với nước tương!</strong></p>\r\n\r\n<p><strong><img alt="nguoi-nhat-ban-an-nhu-nao-2" src="/thucphamsach/upload/images/nguoi-nhat-ban-an-nhu-nao2.jpg" /></strong></p>\r\n\r\n<p>V&igrave; n&oacute; sai b&eacute;t cả rồi, bạn đ&uacute;ng l&agrave; chả hiểu &yacute; đầu bếp Nhật g&igrave; cả. Th&ocirc;ng thường ch&uacute;ng ta sẽ nhận được một đĩa gồm wasabi v&agrave; nước tương t&aacute;ch ri&ecirc;ng, v&igrave; đầu bếp kh&ocirc;ng hề muốn bạn trộn ch&uacute;ng với nhau. Ch&uacute;ng sẽ được d&ugrave;ng với những phần kh&aacute;c nhau của m&oacute;n ăn, khi trộn l&ecirc;n th&igrave; về cơ bản bạn đ&atilde; ph&aacute; hỏng kết cấu, đồng thời c&ograve;n l&agrave;m giảm đ&aacute;ng kể hương vị của wasabi v&agrave; nước tương, hệ quả l&agrave; những m&ugrave;i vị đặc trưng sẽ kh&ocirc;ng c&ograve;n nữa. c&oacute;</p>\r\n\r\n<p>Tuy c&oacute; rất nhiều trang hướng dẫn du lịch b&agrave;y cho bạn c&aacute;ch trộn đều ch&uacute;ng l&ecirc;n cho tiện, nhưng c&aacute;ch ăn chuẩn phải l&agrave; phết wasabi l&ecirc;n phần nh&acirc;n sushi&nbsp;(thịt, c&aacute;, t&ocirc;m, cua hoặc trứng để giảm m&ugrave;i tanh) trước, sau đ&oacute; mới chấm cả miếng sushi v&agrave;o nước tương cho th&ecirc;m đậm đ&agrave;. V&agrave; nếu c&oacute; cơ hội được đầu bếp Nhật phục vụ th&igrave; cũng kh&ocirc;ng cần th&ecirc;m wasabi v&agrave;o đ&acirc;u, bởi họ đ&atilde; t&iacute;nh to&aacute;n lượng wasabi cần thiết cho m&oacute;n ăn của bạn rồi.</p>\r\n\r\n<p><img alt="sushi-journeys-east" src="/thucphamsach/upload/images/sushi-journeys-east.jpg" /></p>\r\n', 'Hóa ra nhiều kiến thức về ẩm thực Nhật Bản của chúng ta sai bét rồi', 'Hóa ra nhiều kiến thức về ẩm thực Nhật Bản của chúng ta sai bét rồi', 'nguoi-nhat-ban-an-nhu-nao.jpg', 1498540567, 33, ''),
(6, 'Kinh doanh rau sạch: làm mãi mà chẳng lãi', 'Kinh doanh rau sạch: làm mãi mà chẳng lãi', '<p>Đ&oacute; l&agrave; lời than v&atilde;n của anh bạn t&ocirc;i sau 2 năm bỏ việc ng&acirc;n h&agrave;ng lương đ&ocirc;i chục/ th&aacute;ng dể lao v&agrave;o&nbsp;<strong>kinh doanh rau sạch</strong>. Mới l&agrave;m th&igrave; hăm hở lắm, đời thằng đ&agrave;n &ocirc;ng m&agrave; đ&atilde; th&iacute;ch l&agrave;m phải l&agrave;m cho bằng được, bỏ gần 500tr thu&ecirc; đất, dựng r&agrave;o, đ&agrave;o luống ...ngon nghẻ tr&ecirc;n diện t&iacute;ch 20ha khu vực ngoại th&agrave;nh. Đầu tư hẳn 5 th&aacute;ng học nghề trong Đ&agrave; Lạt m&ugrave; sương. Ấy thế m&agrave; tiền chẳng chảy v&agrave;o t&uacute;i m&agrave; cứ theo nhau đội n&oacute;n ra đi, bữa rồi ngồi cafe thấy n&oacute; nản qu&aacute; m&agrave; thấy thương</p>\r\n\r\n<p><img alt="kinh-doanh-rau-sach" src="/thucphamsach/upload/images/cua_hang_rau_sach.jpg" />Đọc đến đ&acirc;y chắc hẳn nhiều &quot;cao thủ&quot; đang chửi thầm &quot; ti&ecirc;n sư thằng n&agrave;y ngu, mới ch&acirc;n ướt ch&acirc;n r&aacute;o v&agrave;o nghề m&agrave; đ&atilde; đ&ograve;i đi sản xuất, sao kh&ocirc;ng&nbsp;<strong>mở cửa h&agrave;ng rau sạch</strong>&nbsp;m&agrave; b&aacute;n lẻ cho n&oacute; nh&agrave;n&quot;. Thật sự &ocirc;ng bạn t&ocirc;i chả &quot;Ngu&quot; đ&acirc;u, l&agrave;m vậy l&agrave; thượng s&aacute;ch đ&oacute; b&agrave; con ạ, c&aacute;i g&igrave; t&ocirc;i kh&ocirc;ng n&oacute;i chứ ri&ecirc;ng c&aacute;i m&oacute;n kinh doanh rau sạch n&agrave;y m&agrave; kh&ocirc;ng đầu tư v&agrave;o sản xuất th&igrave; c&oacute; m&agrave; bằng b&agrave; l&atilde;o ngồi ngo&agrave;i chợ, ng&agrave;y thu v&agrave;i chục về dưỡng gi&agrave;! Để hiểu kĩ hơn về vấn đề n&agrave;y vui l&ograve;ng đọc những chia sẻ dưới đ&acirc;y của t&ocirc;i.</p>\r\n\r\n<h2>Kinh doanh rau sạch năm 2016</h2>\r\n\r\n<p>Đầu ti&ecirc;n c&ugrave;ng n&oacute;i về thắc mắc của c&aacute;c anh chị em l&agrave; v&igrave; sao kh&ocirc;ng mở&nbsp;cửa h&agrave;ng<a href="http://cleverfood.com.vn/rau-sach-b1566491.html" target="_blank"><strong>&nbsp;rau sạch</strong></a>&nbsp;m&agrave; b&aacute;n lẻ cho n&oacute; nh&agrave;n. Xin thưa đ&oacute; đơn giản chỉ l&agrave; vấn đề L&Atilde;I. Gi&aacute; mỗi mớ rau sạch tr&ecirc;n thị trường chỉ từ 10-&gt;15k ( chủ yếu b&aacute;n đồng gi&aacute; 10k c&oacute; v&agrave;i t&ecirc;n cứng cựa mạnh dạn để 15k cho n&oacute; kh&aacute;c biệt). Tinh sơ sơ mỗi mớ rau L&atilde;i 3-4k, ng&agrave;y c&oacute;&nbsp;b&aacute;n 500 mớ cũng chỉ thu về được 1.5tr tiền L&atilde;i, th&aacute;ng được c&oacute; 45tr th&ocirc;i.<br />\r\nC&aacute;c bạn nghĩ c&oacute; đủ kh&ocirc;ng? T&ocirc;i nghĩ l&agrave; kh&ocirc;ng, trừ tiền thu&ecirc; mặt bằng, nh&acirc;n c&ocirc;ng, hệ thống tủ&nbsp;l&agrave; vừa hết!<br />\r\nKể cả bạn c&oacute; kinh doanh c&aacute;c loại rau củ sạch&nbsp;Đ&agrave; Lạt, Sapa như bắp cải, củ cải, b&iacute; ngồi, x&uacute;p lơ...&nbsp;(l&agrave; thứ c&oacute; mức l&atilde;i xuất cao nhất) th&igrave; cũng chẳng ăn thua, v&igrave; mức độ ti&ecirc;u thụ của người d&acirc;n với loại mặt h&agrave;ng đ&oacute; được ước t&iacute;nh khoảng 2 lần/ tuần.<br />\r\nNếu đủ kh&ocirc;n ngoan th&igrave; tới đ&acirc;y bạn sẽ hiểu cần phải l&agrave;m g&igrave; để mở cửa h&agrave;ng rau sạch theo c&aacute;ch tối ưu nhất: &quot;H&atilde;y kết hợp kinh doanh c&aacute;c mặt h&agrave;ng kh&aacute;c nữa&quot; đừng chỉ chăm ch&uacute; v&agrave;o rau!&nbsp;</p>\r\n\r\n<p>Tiếp đến h&atilde;y c&ugrave;ng t&igrave;m hiểu v&igrave; sao bạn t&ocirc;i lại lao v&agrave;o đầu tư sản xuất v&agrave; v&igrave; sao n&oacute; lại l&agrave; lựa chọn tối ưu hơn! V&agrave; kể cả bạn c&oacute; kh&ocirc;ng sản xuất m&agrave; đi nhập lại của đơn vị kh&aacute;c&nbsp;th&igrave; những bước sau đ&acirc;y cũng l&agrave; b&agrave;i học cơ bản nhất d&agrave;nh cho bạn:</p>\r\n\r\n<h3><strong>&nbsp; &nbsp;C&aacute;ch kinh doanh rau sạch của bạn t&ocirc;i&nbsp;</strong></h3>\r\n\r\n<p>-Về cơ bản th&igrave; rau kh&aacute; l&agrave; dễ trồng, hầu hết ai cũng c&oacute; thể l&agrave;m được, tất nhi&ecirc;n 1 v&agrave;i&nbsp;<a href="http://cleverfood.com.vn/cach-trong-rau-sach-tai-nha/c260060.html" target="_blank"><strong>c&aacute;ch trồng rau sạch</strong></a>&nbsp;y&ecirc;u cầu c&ocirc;ng nghệ cao hơn b&igrave;nh thường, v&iacute; dụ như trồng rau thủy canh, c&agrave; chua cherry, b&iacute; ngồi... th&igrave; cần c&oacute; sự t&igrave;m hiểu s&acirc;u x&aacute;t hơn. V&agrave; bạn t&ocirc;i n&oacute; cũng l&agrave;m thế thật, kho&aacute;c ba l&ocirc; v&agrave;o Đ&agrave; Lạt b&aacute;i sư gần 5 th&aacute;ng rồi mới&nbsp;quay về l&agrave;m. Xin giấy tờ chứng nhận hữu cơ, an to&agrave;n c&aacute;c kiểu thấy đ&acirc;u hết 5 chục.<br />\r\n-Cũng l&agrave; về 1 điều cơ bản nữa đ&oacute; l&agrave; khi tự trồng rau th&igrave; chi ph&iacute; chỉ c&ograve;n khoảng 3-&gt;4k/mớ&nbsp;rau an to&agrave;n v&agrave; khoảng 5k/mớ rau hữu cơ -&gt; C&oacute; l&atilde;i kha kh&aacute; rồi nha, bắt đầu l&agrave;m kinh doanh rau sạch tự trồng được rồi đ&oacute;. Vậy?</p>\r\n\r\n<p><img alt="ky_thua_tuoi_phun_mua_cho_cay_trong_o_quang_tri" src="/thucphamsach/upload/images/ky_thua_tuoi_phun_mua_cho_cay_trong_o_quang_tri.jpg" /></p>\r\n\r\n<h4>Mở cửa h&agrave;ng rau sạch cần những g&igrave;?</h4>\r\n\r\n<p>-Trước hết bạn cần t&igrave;m được địa điểm ph&ugrave; hợp, đ&ugrave;ng loi choi ra mặt đường v&igrave; bạn sẽ chết v&igrave; chi ph&iacute; mất, cỡ 30tr/ th&aacute;ng th&igrave; bạn c&oacute; đỡ v&agrave;o mắt v&agrave; n&oacute; cũng chả cần thiết, bạn cứ nghĩ xem 1 mỡ rau 10k th&igrave; kh&ocirc;ng&nbsp;cần d&acirc;n văn ph&ograve;ng, d&acirc;n đại gia hay d&acirc;n phố mới mua được, rau sạch l&agrave; thứ m&agrave; ai ai cũng c&oacute; thể tiếp cận được. H&atilde;y nghe t&ocirc;i, chui v&agrave;o khu d&acirc;n cư n&agrave;o đ&oacute;, đ&ocirc;ng đ&ocirc;ng 1 ch&uacute;t, d&acirc;n gốc chứ kh&ocirc;ng phải c&ocirc;ng nh&acirc;n hay sinh vi&ecirc;n nh&eacute;, thu&ecirc; 1 cửa h&agrave;ng cỡ 3-&gt;5tr/ th&aacute;ng l&agrave; qu&aacute; đẹp để startup kinh doanh rau sạch rồi.&nbsp;<br />\r\n-Khi đ&atilde; c&oacute; cửa h&agrave;ng ưng &yacute; h&atilde;y vệ sinh n&oacute; thật sạch, &ocirc;ng kinh doanh rau sạch m&agrave; để cửa h&agrave;ng bẩn thỉu th&igrave; c&oacute; m&agrave; sập sớm, h&atilde;y cố gắng trang tr&iacute; m&agrave;u sắc m&aacute;t mẻ v&igrave; m&igrave;nh b&aacute;n rau m&agrave;.<br />\r\n-Tiếp đ&oacute; h&atilde;y đ&oacute;ng lấy đ&ocirc;i c&aacute;i kệ gỗ: 1 l&agrave; để rau ăn l&aacute;, rau ăn h&agrave;ng ng&agrave;y; 1 l&agrave; để đồ củ, quả c&oacute; thể bảo quản từ trung b&igrave;nh đến l&acirc;u d&agrave;i như: khoai t&acirc;y, khoai lang, b&iacute; ng&ocirc;, b&iacute; thơm...<br />\r\n-Rồi phải mua lấy 1 c&aacute;i tủ m&aacute;t, v&igrave; bạn chẳng thể b&aacute;n hết rau trong ng&agrave;y được đ&acirc;u, bảo quản tủ m&aacute;t c&oacute; thể đảm bảo rau ăn l&aacute; giữ được độ tươi khoảng 2 ng&agrave;y, củ quả cỡ 5-7 ng&agrave;y, đồng thời c&aacute;i tủ m&aacute;t cũng to&aacute;t l&ecirc;n vẻ chuy&ecirc;n nghiệp của bạn.<br />\r\n-Cuối c&ugrave;ng h&atilde;y l&agrave;m tem, đ&oacute;ng t&uacute;i cẩn thận, kh&ocirc;ng mấy ai mở cửa h&agrave;ng rau sạch m&agrave; qu&ecirc;n c&aacute;i n&agrave;y đ&acirc;u.</p>\r\n\r\n<p><img alt="mo-cua-hang-rau-sach-can-gi" src="/thucphamsach/upload/images/mo-cua-hang-rau-sach-can-gi.jpg" /></p>\r\n\r\n<h4>Kinh doanh&nbsp;rau sạch online như&nbsp;thế n&agrave;o?</h4>\r\n\r\n<p>-Trong l&uacute;c chờ cửa h&agrave;ng ho&agrave;n thiện h&atilde;y chăng ngay 1 c&aacute;i băng r&ocirc;n th&ocirc;ng b&aacute;o về cửa h&agrave;ng m&igrave;nh, cứ chẳng ở đ&oacute; 10-15 ng&agrave;y l&agrave; tiếp cận được 1 đống kh&aacute;ch h&agrave;ng tiềm năng rồi.<br />\r\n-H&atilde;y l&ecirc;n trương tr&igrave;nh cho ng&agrave;y đầu khai trương, th&ocirc;ng thường l&agrave; tặng rau miễn ph&iacute;, mua 5 tặng 1...Nhớ l&agrave; l&agrave;m th&ecirc;m c&aacute;i loa, thu&ecirc; người ta đọc 1 b&agrave;i như kiểu khai trương si&ecirc;u thị, b&agrave; con bu ầm ầm.<br />\r\n-V&agrave;o ng&agrave;y đầu mở cửa nhớ l&agrave; h&agrave;ng h&oacute;a rau củ sạch phải thật l&agrave; đầy đủ, để kh&aacute;ch h&agrave;ng ch&oacute;ng mặt lu&ocirc;n, sau người ta mới v&agrave;o lại, chứ vừa v&agrave;o đ&atilde; thấy l&egrave;o t&egrave;o v&agrave;i ba mớ rau, chục củ c&agrave; rốt... l&agrave; đứt.<br />\r\n-Khi đ&atilde; qua giai đoạn khai trương, bạn n&ecirc;n l&ecirc;n kế hoạch cụ thể hơn để ph&aacute;t triển thị trường khu đ&oacute;, c&oacute; 3&nbsp;c&aacute;ch như sau:<br />\r\n1. L&agrave;m fanpage, group&nbsp;facebook để viết b&agrave;i về sản phẩm của m&igrave;nh (phải hay), sau đ&oacute; n&eacute;m v&agrave;i triệu tiền quảng c&aacute;o (quanh khu bạn mở cửa h&agrave;ng th&ocirc;i, b&aacute;n k&iacute;nh cỡ 2km l&agrave; ổn)<br />\r\n2. L&ecirc;n kế hoạch đặt rau định k&igrave; c&oacute; ưu đ&atilde;i tức l&agrave; đặt rau theo tuần, theo th&aacute;ng sẽ rẻ hơn, giao h&agrave;ng tận ph&ograve;ng (b&aacute;n k&iacute;nh 2km).<br />\r\n3. L&ecirc;n c&aacute;c combo rau củ quả để l&agrave;m phong ph&uacute; th&ecirc;m thực đơn vốn chỉ c&oacute; rau của m&igrave;nh.<br />\r\nNếu l&agrave;m tốt mảng&nbsp;<strong>kinh doanh rau sạch online</strong>&nbsp;th&igrave;&nbsp;bạn gần như chiếm trọn kh&aacute;ch h&agrave;ng quanh khu đ&oacute;, nhớ l&agrave; rau hơi xấu m&atilde; 1 t&iacute; c&oacute; thể cho kh&ocirc;ng hoặc tặng k&egrave;m h&oacute;a đơn to tiền, chả đ&aacute;ng l&agrave; bao lại c&ograve;n được tiếng sởi lởi.</p>\r\n\r\n<h4>Mở rộng kinh doanh cửa h&agrave;ng rau sạch c&oacute; n&ecirc;n kh&ocirc;ng?</h4>\r\n\r\n<p>&Yacute; kiến của t&ocirc;i ph&iacute;a tr&ecirc;n rồi đ&oacute;: KH&Ocirc;NG N&Ecirc;N! v&igrave; hiện nay đ&atilde; qu&aacute; nhiều đối thủ cạnh tranh rồi, với phần lớn c&aacute;c bạn trong đ&oacute; c&oacute; thằng bạn t&ocirc;i đều kh&ocirc;ng đủ tiềm lực để mở rộng quy m&ocirc; sản xuất, nhưng &ocirc;ng lớn về rau như: Vingroup, Đại Ng&agrave;n, Ravi, hữu cơ Thanh Xu&acirc;n... c&oacute; thể b&oacute;p bạn chết tươi. H&atilde;y ph&aacute;t triển theo hướng kh&aacute;c, t&ocirc;i cam đoan trong suốt qu&aacute; tr&igrave;nh mở cửa h&agrave;ng rau sạch bạn sẽ nhận được những c&acirc;u hỏi kiểu như: sao cửa h&agrave;ng m&agrave;y ko c&oacute; c&aacute;, kh&ocirc;ng c&oacute; hoa quả, kh&ocirc;ng c&oacute; thịt nhỉ...? V&agrave; đ&oacute; l&agrave; con đường cho bạn h&atilde;y mở rộng th&ecirc;m dịch vụ kinh doanh của m&igrave;nh đi, bạn đ&atilde; được l&ograve;ng d&acirc;n ch&uacute;ng khu đ&oacute; rồi. Nhưng cũng nhớ cho l&agrave; phải ph&aacute;t triển từ từ: v&agrave;i th&aacute;ng để th&ecirc;m hoa quả, v&agrave;i th&aacute;ng để th&ecirc;m thịt lợn, v&agrave;i th&aacute;ng để th&ecirc;m hải sản...v&agrave;o hạng mục kinh doanh, vừa l&agrave; để bạn c&oacute; th&ecirc;m nguồn kiến thức trong c&aacute;c lĩnh vực mới.</p>\r\n\r\n<p>T&ocirc;i nghĩ đ&acirc;y l&agrave; định hướng khả thi nhất nếu bạn muốn kinh doanh&nbsp;rau sạch! Tuy nhi&ecirc;n liệu c&oacute; ngoại lệ? Vẫn c&oacute; đấy:</p>\r\n\r\n<h3>M&ocirc; h&igrave;nh&nbsp;kinh doanh&nbsp;rau sạch của những Pro</h3>\r\n\r\n<p>Xin n&oacute;i lu&ocirc;n với anh chị l&agrave; c&aacute;ch n&agrave;y t&ocirc;i theo kh&ocirc;ng kịp, c&oacute; anh bạn t&ocirc;i l&agrave;m trong viện di truyền thực vật (rất c&oacute; tiếng v&agrave; uy t&iacute;n đ&atilde; được đảm bảo, facebook post c&aacute;i n&agrave;o l&agrave; cả trăm người like). Đặc biệt l&atilde;o &yacute; quen với cả đống kĩ sư, nh&agrave; vườn khắp to&agrave;n quốc, nguồn h&agrave;ng l&uacute;c n&agrave;o cũng sẵn v&agrave; chất lượng. Thế l&agrave; cứ mỗi buổi chiều thứ 2,4,6 l&atilde;o &yacute; đ&aacute;nh 1 xe rau ra &quot;ngồi nhờ&quot; thằng bạn nữa của t&ocirc;i l&agrave;m Cafe tr&ecirc;n đường Trần Hưng Đạo để b&aacute;n rau, dị chưa?&nbsp;<br />\r\nKh&aacute;ch biết đẳng cấp của t&ecirc;n n&agrave;y n&ecirc;n k&eacute;o ra đ&ocirc;ng đuổi đi chả hết, h&agrave;ng cứ b&aacute;n v&egrave;o v&egrave;o, tuần l&agrave;m 3 buổi th&igrave; bỉm sữa cho con chẳng phải nghĩ. L&acirc;u l&acirc;u c&ograve;n đ&aacute; th&ecirc;m &iacute;t bưởi, &iacute;t thanh long...cũng kh&aacute; khẩm phết</p>\r\n\r\n<p>Nhưng m&agrave; đ&ugrave;a th&ocirc;i bạn chẳng l&agrave;m được như vậy đ&acirc;u, muốn&nbsp;<strong>kinh doanh rau sạch</strong>&nbsp;th&igrave; cứ như tr&ecirc;n t&ocirc;i hướng dẫn &yacute;. Ch&uacute;c c&aacute;c bạn th&agrave;nh c&ocirc;ng !</p>\r\n', 'Kinh doanh rau sạch: làm mãi mà chẳng lãi', 'Kinh doanh rau sạch: làm mãi mà chẳng lãi', 'cua_hang_rau_sach.jpg', 1498540484, 37, ''),
(7, 'Nên ăn gì khi đói để mau thấy no', 'Nên ăn gì khi đói để mau thấy no', '<h3><strong>1. Dưa hấu</strong></h3>\r\n\r\n<p><img alt="jjj" src="/thucphamsach/upload/images/nen_an_5.jpg" /></p>\r\n\r\n<p>Nghe c&oacute; vẻ kh&ocirc;ng xu&ocirc;i tai cho lắm nhưng dưa hấu ch&iacute;nh x&aacute;c l&agrave; một trong số &iacute;t những loại&nbsp;<a href="http://cleverfood.com.vn/hoa-qua-sach-b1566494.html" target="_blank"><strong>tr&aacute;i c&acirc;y</strong></a>&nbsp;n&ecirc;n ăn khi đ&oacute;i v&igrave; lượng nước dồi d&agrave;o sẽ lấp đầy dạ d&agrave;y rất nhanh, th&ecirc;m nữa lượng axit, lượng đường trong dưa hấu cũng rất &iacute;t v&agrave; sẽ kh&ocirc;ng g&acirc;y sock ti&ecirc;u h&oacute;a.</p>\r\n\r\n<p>N&ecirc;n biết:&nbsp;<a href="http://cleverfood.com.vn/5-loai-trai-cay-tuyet-doi-khong-nen-an-khi-doi/a1355808.html" target="_blank"><strong>5 loại tr&aacute;i c&acirc;y tuyệt đối kh&ocirc;ng được ăn khi đ&oacute;i</strong></a></p>\r\n\r\n<h3><strong>2. C&aacute;c loại tr&aacute;i c&acirc;y mọng</strong></h3>\r\n\r\n<p><strong><img alt="" src="/thucphamsach/upload/images/nen_an_6.jpg" /></strong></p>\r\n\r\n<p>Nổi bật l&agrave;&nbsp;<a href="http://cleverfood.com.vn/qua-viet-quat-6837466.html" target="_blank"><strong>quả việt quất</strong></a>, m&acirc;m x&ocirc;i... ch&uacute;ng chứa cực k&igrave; nhiều vi chất n&ecirc;n kh&ocirc;ng chỉ tốt cho dạ d&agrave;y m&agrave; c&ograve;n gi&uacute;p tăng cường hệ miễn dịch, cải thiện tr&iacute; nhớ, kiểm so&aacute;t tim mạch, huyết &aacute;p. N&oacute;i chung l&agrave; kh&ocirc;ng thể tin nổi.</p>\r\n\r\n<p>N&ecirc;n biết:&nbsp;<a href="http://cleverfood.com.vn/6-cong-dung-tuyet-voi-cua-qua-viet-quat/a956329.html" target="_blank"><strong>6 c&ocirc;ng dụng tuyệt vời của quả việt quất</strong></a></p>\r\n\r\n<h3><strong>3. Bột yến mạch</strong></h3>\r\n\r\n<p><strong><img alt="" src="/thucphamsach/upload/images/nen_an_1.jpg" /></strong></p>\r\n\r\n<p>C&aacute;c loại bột đều gi&uacute;p lấp đầy dạ d&agrave;y một c&aacute;ch nhanh ch&oacute;ng, kh&ocirc;ng cần sử dụng nhiều nhưng cũng đem lại cảm gi&aacute; no, đồng thời n&oacute; cũng l&agrave; loại&nbsp;<a href="http://cleverfood.com.vn/" target="_blank"><strong>thực phẩm sạch</strong></a>&nbsp;rất tốt cho sức khỏe. Theo Boldsky, bột y&ecirc;n mạch khi v&agrave;o cơ thể sẽ tạo một lớp m&agrave;ng bảo vệ quanh th&agrave;nh dạ d&agrave;y v&agrave; ngăn axit ph&aacute; hủy n&oacute;. Ngo&agrave;i ra hạm lượng nhiều chất xơ, glucan gi&uacute;p thanh lọc hệ ti&ecirc;u h&oacute;a hiệu quả.</p>\r\n\r\n<h3><strong>4. Ngũ cốc:&nbsp;</strong></h3>\r\n\r\n<p><strong><img alt="ngu-coc" src="/thucphamsach/upload/images/nen_an_2.jpg" /></strong>Ngũ cốc l&agrave; loại thực phẩm thanh lọc nội ti&ecirc;u h&oacute;a rất tốt, đ&agrave;o thải kim loại nặng ra khỏi cơ thể, gi&uacute;p b&igrave;nh ổn c&aacute;c vi sinh vật trong đường ruột. Lời khuy&ecirc;n h&atilde;y sử dụng c&aacute;c loại ngũ cốc l&agrave;nh mạnh với sữa kh&ocirc;ng kem v&agrave; tr&aacute;i c&acirc;y</p>\r\n\r\n<h3><strong>5. Mầm l&uacute;a m&igrave;</strong></h3>\r\n\r\n<p><strong><img alt="mam-lua-mi" src="/thucphamsach/upload/images/nen_an_3.jpg" /></strong>Chỉ cần 2 th&igrave; mầm l&uacute;a m&igrave; c&oacute; thể khiến bạn no n&ecirc; cả buổi, ch&uacute;ng c&oacute; thể bổ xung 15% lượng vitamin E v&agrave; 10% axit folic cần thiết cho cơ thể.</p>\r\n\r\n<h3><strong>6. Trứng</strong></h3>\r\n\r\n<p><strong><img alt="trung" src="/thucphamsach/upload/images/nen_an_4.jpg" /></strong>Trứng l&agrave; loại thực phẩm chống đ&oacute;i rất tốt v&agrave; c&oacute; thể sử dụng v&agrave;o mọi thời điểm trong ng&agrave;y: bữa s&aacute;ng, trưa, chiều, tối đều ok. Ch&uacute;ng bổ xung rất đ&aacute;ng kể lượng calo cho cơ thể, đồng thời gi&agrave;u protein, canxi, vitamin D cũng gi&uacute;p bạn no l&acirc;u hơn. Tuy nhi&ecirc;n trứng c&oacute; t&iacute;nh chất rất kh&oacute; ti&ecirc;u n&ecirc;n chỉ sử dụng 1 quả/ ng&agrave;y.</p>\r\n\r\n<h3><strong>7. B&aacute;nh m&igrave;</strong></h3>\r\n\r\n<p><strong><img alt="banh-mi" src="/thucphamsach/upload/images/nen_an_7.jpg" /></strong>Carbohydrate v&agrave; c&aacute;c chất dinh dưỡng c&oacute; trong loại b&aacute;nh m&igrave; nguy&ecirc;n hạt kh&ocirc;ng chứa men rất cần thiết cho cơ thể. Thời điểm tốt nhất để ti&ecirc;u thụ ch&uacute;ng l&agrave; v&agrave;o s&aacute;ng sớm. &nbsp;</p>\r\n\r\n<h3><strong>8. C&aacute;c loại hạt</strong></h3>\r\n\r\n<p><strong><img alt="cac-loai-hat" src="/thucphamsach/upload/images/nen_an_8.jpg" /></strong>C&aacute;c loại hạt như hạt &oacute;c ch&oacute;, hạt dẻ... đều c&oacute; c&ocirc;ng dụng rất tốt để giảm cảm gi&aacute;c đ&oacute;i bụng, bổ xung dưỡng chất cho cơ thể những l&uacute;c đ&oacute;i</p>\r\n\r\n<h3><strong>9. Mật ong</strong></h3>\r\n\r\n<p><strong><img alt="mat-ong" src="/thucphamsach/upload/images/nen_an_9.jpg" /></strong>Mật ong l&agrave; loại thực phẩm chứa qu&aacute; nhiều dinh dưỡng v&agrave; đặc biệt tốt với sức khỏe . Ch&uacute;ng kh&ocirc;ng chỉ chống đ&oacute;i hiệu quả m&agrave; c&ograve;n tăng cường khả năng hoạt động của n&atilde;o, gia cố hệ miễn dịch, đồng thời chứa nhiều hormone t&iacute;ch cực serotonin gi&uacute;p l&agrave;m sạch v&agrave; loại bỏ nhiều loại vi khuẩn c&oacute; hại ra khỏi cơ thể. Ăn mật ong nhiều v&agrave; bạn sẽ thấy m&igrave;nh &iacute;t ốm.</p>\r\n', 'Nên ăn gì khi đói để mau thấy no', 'Nên ăn gì khi đói để mau thấy no', 'nen_an_5.jpg', 1498539337, 101, ''),
(8, '6 loại rau không bao giờ nên luộc', 'Những loại rau này đều có điểm chung là chứa nhiều vitamin tan trong nước nước sôi, cho nên hãy hạn chế hết mức nếu không muốn vô tình làm giảm công dụng tuyệt vời của rau với sức khỏe', '<h3><strong>S&uacute;p lơ</strong></h3>\r\n\r\n<p>Những loại rau n&agrave;y đều c&oacute; điểm chung l&agrave; chứa nhiều vitamin tan trong nước nước s&ocirc;i, cho n&ecirc;n h&atilde;y hạn chế hết mức nếu kh&ocirc;ng muốn v&ocirc; t&igrave;nh l&agrave;m giảm c&ocirc;ng dụng tuyệt vời của rau với sức khỏe</p>\r\n\r\n<p><img alt="" src="/thucphamsach/upload/images/sup-lo.png" /></p>\r\n\r\n<p><a href="http://cleverfood.com.vn/sup-lo-xanh-7129404.html" target="_blank"><strong>S&uacute;p lơ xanh</strong></a>&nbsp;khi đem luộc sẽ l&atilde;ng ph&iacute; qu&aacute; nhiều Vitamin v&agrave;o nước</p>\r\n\r\n<p>Theo chuy&ecirc;n gia dinh dưỡng Tracy Lesht cho biết, phần lớn c&aacute;c loại&nbsp;<a href="http://cleverfood.com.vn/rau-sach-b1566491.html" target="_blank"><strong>rau sạch</strong></a>&nbsp;đều sẽ mất &iacute;t nhiều dinh dưỡng khi ta luộc ch&uacute;ng. B&agrave; khuyến nghị chị em nội trợ c&oacute; thể t&igrave;m những phương ph&aacute;p chế biến kh&aacute;c như hấp hoặc nướng, nếu c&oacute; luộc th&igrave; n&ecirc;n sử dụng thật &iacute;t nước v&agrave; c&oacute; thể tận dụng lượng nước &iacute;t c&ograve;n lại để l&agrave;m canh (với người Việt) hoặc nấu s&uacute;p (với phương T&acirc;y).&nbsp;Như vậy c&oacute; thể hấp thụ th&ecirc;m kha kh&aacute; lượng Vitamin c&oacute; trong nước rau.&nbsp;Tuy nhi&ecirc;n n&ecirc;n r&uacute;t thời gian nấu c&ograve;n ngắn nhất c&oacute; thể, v&agrave; sử dụng c&agrave;ng &iacute;t nước c&agrave;ng tốt.&nbsp;</p>\r\n\r\n<p>Chuy&ecirc;n gia Lesht nhấn mạnh với 6 loại rau dưới đ&acirc;y l&agrave; loại c&oacute; chứa lượng Vitamin tan trong nước nhiều nhất, tuyệt đối đừng l&ecirc;n luộc:</p>\r\n\r\n<p>- Bắp cải<br />\r\n- Cải b&oacute; x&ocirc;i (rau ch&acirc;n vịt)<br />\r\n- Cải xoăn<br />\r\n- S&uacute;p lơ (b&ocirc;ng cải xanh)<br />\r\n- C&aacute;c loại đậu quả<br />\r\n- Đậu H&agrave; Lan</p>\r\n\r\n<p>&quot;Nếu luộc c&aacute;c loại rau n&agrave;y, bạn sẽ kh&ocirc;ng thu được nhiều lợi &iacute;ch sức khỏe từ ch&uacute;ng&quot;, Lesht&nbsp;cho biết.</p>\r\n', '6 loại rau không bao giờ nên luộc', '6 loại rau không bao giờ nên luộc', 'sup-lo.jpg', 1498540451, 96, ''),
(9, 'Thực phẩm ĐẬP TAN cảm giác mệt mỏi, trì trệ mùa hè', 'Mùa hè nắng nóng tâm trạng vô cùng uể oải, trì trệ là khá dễ hiểu......', '<h3><strong>Nước chanh</strong></h3>\r\n\r\n<p>Một ly nước chanh ấm k&egrave;m với v&agrave;i giọt mật ong v&agrave;o buổi s&aacute;ng sẽ gi&uacute;p cơ thể bạn nhẹ nh&agrave;ng hơn rất nhiều. Cảm gi&aacute;c thanh lọc, giải độc sau những bữa ăn thừa chất, hay nhậu nhẹt li&ecirc;n li&ecirc;n thật l&agrave; đ&atilde;.</p>\r\n\r\n<h3><img alt="" src="/thucphamsach/upload/images/thuc-pham-sach-chong-moi-met-mua-he.jpg" /></h3>\r\n\r\n<h3><strong>Bưởi</strong></h3>\r\n\r\n<p>Quả bưởi c&oacute; t&aacute;c dụng v&ocirc; c&ugrave;ng tốt với sức khỏe con người v&agrave; c&oacute; t&aacute;c dụng giải độc rất cao. N&oacute; c&oacute; thể gi&uacute;p gan đốt ch&aacute;y chất b&eacute;o. Mỗi ng&agrave;y ăn một quả bưởi, bạn sẽ cảm thấy sức đề kh&aacute;ng trong cơ thể cao hơn gấp bội v&agrave; thấy v&ocirc; c&ugrave;ng thoải m&aacute;i.</p>\r\n\r\n<p>Trong quả bưởi c&oacute; chứa rất nhiều Vitamin c&oacute; lợi cho sức khỏe, đồng thời gi&uacute;p đốt ch&aacute;y chất b&eacute;o, thanh lọc gan, thận, phụ nữ ăn nhiều sẽ&nbsp;s&aacute;ng măt, đẹp da. Một lợi &iacute;ch kịch độc của bưởi l&agrave; gi&uacute;p cơ thể tỉnh t&aacute;o nhanh ch&oacute;ng, quả l&agrave; c&oacute; lợi trong việc đ&aacute;nh tan sự tr&igrave; trệ, ng&aacute;p ruồi ng&agrave;y đầu năm. Hiện nay c&oacute; kh&aacute; nhiều giống bưởi nổi tiếng đang v&agrave;o m&ugrave;a v&agrave; cho chất lượng cực tốt:&nbsp;<a href="http://cleverfood.com.vn/buoi-da-xanh-9762457.html" target="_blank"><strong>Bưởi da xanh</strong></a>,&nbsp;<a href="http://cleverfood.com.vn/buoi-dien-loai-1-5872266.html" target="_blank"><strong>bưởi Diễn</strong></a>&nbsp;... v&agrave;i th&aacute;ng nữa th&igrave; c&oacute;&nbsp;bưởi đoan H&ugrave;ng.. thỏa th&iacute;ch để lựa chọn</p>\r\n\r\n<h3><img alt="" src="/thucphamsach/upload/images/buoi.jpg" /></h3>\r\n\r\n<h3><strong>Ăn nhiều&nbsp;rau xanh</strong></h3>\r\n\r\n<p>Khoản n&agrave;y th&igrave; khỏi n&oacute;i rồi, ra Tết một c&aacute;i l&agrave;&nbsp;<a href="http://cleverfood.com.vn/rau-sach-b1566491.html" target="_blank"><strong>rau sạch&nbsp;</strong></a>ch&aacute;y kh&eacute;t lẹt tr&ecirc;n diện rộng, người người săn rau, nh&agrave; nh&agrave; tranh nhau. &Acirc;u cũng l&agrave; lẽ thường t&igrave;nh sau những ng&agrave;y Tết ngập ngụa trong thịt c&aacute;, rượu bia. C&ocirc;ng dụng của rau th&igrave; c&oacute; lẽ t&ocirc;i kh&ocirc;ng cần tr&igrave;nh b&agrave;y nhiều, n&oacute; chở th&agrave;nh một phần v&ocirc; c&ugrave;ng thiết yếu của cuộc sống h&agrave;ng ng&agrave;y. Rau c&aacute;c bạn c&oacute; thể ăn bao nhiều t&ugrave;y &yacute;, ăn đ&uacute;ng sức của m&igrave;nh chứ kh&ocirc;ng cần giới hạn.</p>\r\n\r\n<p><img alt="" src="/thucphamsach/upload/images/rau-sach.jpg" />C&oacute; thể bạn quan t&acirc;m:&nbsp;<a href="http://cleverfood.com.vn/6-loai-rau-khong-bao-gio-nen-luoc/a1358577.html" target="_blank"><strong>6 loại rau kh&ocirc;ng bao giờ n&ecirc;n luộc</strong></a></p>\r\n', 'Thực phẩm ĐẬP TAN cảm giác mệt mỏi, trì trệ mùa hè', 'Thực phẩm ĐẬP TAN cảm giác mệt mỏi, trì trệ mùa hè', 'thuc-pham-sach-chong-moi-met-mua-he.jpg', 1498540663, 197, '');

-- --------------------------------------------------------

--
-- Structure de la table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `transaction_id` int(255) NOT NULL,
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `product_id` int(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `amount` decimal(15,4) NOT NULL,
  `data` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=41 ;

--
-- Contenu de la table `order`
--

INSERT INTO `order` (`transaction_id`, `id`, `product_id`, `qty`, `amount`, `data`, `status`) VALUES
(60, 39, 26, 1, '53900.0000', '', 0),
(59, 38, 25, 1, '10000.0000', '', 0),
(58, 37, 26, 1, '53900.0000', '', 0),
(57, 36, 25, 1, '10000.0000', '', 0),
(56, 35, 13, 1, '150000.0000', '', 0),
(55, 34, 13, 1, '150000.0000', '', 0),
(55, 33, 26, 1, '53900.0000', '', 0),
(54, 30, 26, 2, '107800.0000', '', 1),
(54, 31, 13, 1, '150000.0000', '', 1),
(54, 32, 2, 1, '34650.0000', '', 2),
(61, 40, 25, 1, '10000.0000', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `catalog_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `make_id` int(255) NOT NULL,
  `price` decimal(15,4) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `discount` int(11) NOT NULL,
  `image_link` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image_list` text COLLATE utf8_unicode_ci NOT NULL,
  `created` int(11) NOT NULL,
  `view` int(11) NOT NULL,
  `site_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `total` int(255) NOT NULL,
  `buyed` int(255) NOT NULL,
  `rate_total` int(255) NOT NULL,
  `rate_count` int(255) NOT NULL,
  `video` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `made_in` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `weight` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `slug_product` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Contenu de la table `product`
--

INSERT INTO `product` (`id`, `catalog_id`, `name`, `make_id`, `price`, `content`, `discount`, `image_link`, `image_list`, `created`, `view`, `site_title`, `total`, `buyed`, `rate_total`, `rate_count`, `video`, `meta_desc`, `made_in`, `weight`, `slug_product`) VALUES
(1, 7, 'Bắp cải hữu cơ', 0, '10000.0000', '<p>đang cập nhập</p>\r\n', 2, 'bap-cai.png', 'bap-cai.jpg', 1498222709, 65, 'bắp cải ngon', 0, 56, 5, 5, 'youtobe', 'bắp cải ngon', 'việt nam', '1kg', ''),
(2, 7, 'Bí Đỏ Hữu Cơ', 0, '35000.0000', '<p>B&iacute; đỏ được biết đến như một thực phẩm gi&uacute;p giảm c&acirc;n lấy lại v&oacute;c d&aacute;ng rất l&yacute; tưởng,ngo&agrave;i ra n&oacute; c&ograve;n c&oacute; t&aacute;c dụng trong việc ngăn ngừa ung thư...</p>\r\n', 1, 'bido.jpg', '["bido1.jpg","hat_bi_do.jpg"]', 1498222631, 41, 'bi-do-huu-co', 0, 41, 0, 0, '0', 'bi-do-huu-co', 'đang cập nhâp', '1kg', ''),
(3, 7, 'Rau Ngải Cứu hữu cơ', 0, '10000.0000', '<p>Rau ngải cứu c&oacute; t&ecirc;n khoa học l&agrave; Artemisia Vulgaris, thường c&oacute; m&ugrave;i thơm nồng v&agrave; c&oacute; vị hơi đắng hoặc rất đắng t&ugrave;y theo m&ugrave;a. Ngải cứu c&oacute; thể d&ugrave;ng để chế biến c&aacute;c m&oacute;n ăn hoặc được sao kh&ocirc; l&ecirc;n l&agrave;m thuốc</p>\r\n', 0, 'rau-ngai-cuu.jpg', '["ngai_cuu.jpg","rau-ngai-cuu1.jpg"]', 1498222486, 38, 'rau-ngai-cuu', 0, 34, 0, 0, '4', 'rau-ngai-cuu', 'đang cập nhâp', '1 túi', ''),
(5, 9, 'Gầu Bò Mỹ', 0, '370000.0000', '<p>Gầu b&ograve; Mỹ phần thịt rất ngon,ăn dai v&agrave; gi&ograve;n.</p>\r\n', 0, 'gau-bo-my.jpg', '["gau_bo_my_clever_food.JPG","gau_bo_my_nuong.jpg","gau-bo-my1.jpg"]', 1498222350, 24, 'gau-bo-my', 0, 11, 0, 0, '0', 'gau-bo-my', 'đang cập nhâp', '1kg', ''),
(8, 1, 'Nấm Tuyết', 0, '33000.0000', '<p>Nấm tuyết hiển nhi&ecirc;n l&agrave; một loại nấm sạch rất quyết, cực k&igrave; gi&agrave;u đạm nh&eacute;, được nhiều đầu bếp chuy&ecirc;n nghiệp ưa chuộng, phần v&igrave; ngon, phần do n&oacute; đẹp qu&aacute;, m&oacute;n ăn chẳng cần tr&igrave;nh b&agrave;y, trang tr&iacute; đ&atilde; nổi bật</p>\r\n', 0, 'nam-tuyet.jpg', '["nam_tuyet(1).jpg","nam_tuyet.jpg","nam-tuyet1.jpg","tom_xao_nam_tuyet_san_sat_moi_la.jpg"]', 1498222131, 11, 'nam-tuyet', 0, 11, 0, 0, '0', 'nam-tuyet', 'hòa bình', '1khay', ''),
(10, 14, 'Gà Lạc Sơn', 0, '250000.0000', '<p>G&agrave; lạc sơn được nu&ocirc;i thả r&ocirc;ng,g&agrave; qu&ecirc; ăn cực chắc v&agrave; thơm,nặng kh&ocirc;ng qu&aacute; 1kg</p>\r\n', 0, 'ga-lac-son.jpg', '["ga_lac_son.jpg","ga_lac_son_2.jpg","ga-lac-son1.jpg"]', 1498221872, 21, 'ga-lac-son', 0, 19, 0, 0, '0', 'ga-lac-son', 'lạc sơn', '1kg', ''),
(13, 23, 'Măng Khô Cao Bằng', 0, '150000.0000', '<p>Măng kh&ocirc; Cao Bằng, mua b&aacute;n măng kh&ocirc; ngon tại H&agrave; Nội, giao h&agrave;ng tận nh&agrave;, cửa h&agrave;ng thực phẩm sạch uy t&iacute;n tại H&agrave; Nội, rau sạch, thịt sạch, hoa quả sạch, an to&agrave;n thực phẩm</p>\r\n', 0, 'mang-kho-cao-bang.jpg', '["mang-kho-cao-bang1.jpg"]', 1498221383, 20, 'mamg-kho-cao-bang', 0, 19, 0, 0, '0', 'mamg-kho-cao-bang', 'cao bằng', '500g', ''),
(14, 22, 'Gạo Nếp Nương Điện Biên', 0, '50000.0000', '<p>Gạo nếp nương Điện Bi&ecirc;n, mua b&aacute;n gạo ngon tại H&agrave; Nội, giao h&agrave;ng tận nh&agrave;, cửa h&agrave;ng thực phẩm sạch uy t&iacute;n tại H&agrave; Nội, rau sạch, thịt sạch, hoa quả sạch, an to&agrave;n thực phẩm</p>\r\n', 0, 'gao-nep-nuong.jpg', '["gao-nep-nuong1.jpg"]', 1498220982, 71, 'gao-nep-nuong-dien-bien', 0, 71, 0, 0, '0', 'gao-nep-nuong-dien-bien', 'điện biên', '1kg', ''),
(15, 16, 'Cá bống sông Đà', 0, '250000.0000', '<p>C&aacute; bống c&oacute; thể chỉ đem kho l&agrave; ngon, chứ r&aacute;n hay hấp đều rất ph&iacute;, để CleverFood hướng dẫn anh chị v&agrave;i c&aacute;ch kho c&aacute; bống ngon</p>\r\n', 0, 'ca-bong-song-da.jpg', '["ca_bong_kho.jpg","ca_bong_kho_to.jpg","ca-bong-song-da1.jpg","cach_che_bien_ca_bong_kho_to_dan_da_ma_cuon_hut.jpg"]', 1498220837, 78, 'ca-bong-song-da', 0, 76, 0, 0, '0', 'ca-bong-song-da', 'hòa bình', '1kg', ''),
(16, 17, 'Cá Trắm Sông Đà', 0, '350000.0000', '<p>C&aacute; trắm s&ocirc;ng Đ&agrave; tươi ngon,tự nhi&ecirc;n ,thịt ngọt,d&agrave;y</p>\r\n\r\n<p>&nbsp;</p>\r\n', 0, 'ca-song-da.jpg', '["ca_tram_1.jpg","ca_tram_den.jpg","ca-song-da1.jpg"]', 1498220587, 105, 'ca-tram-song-da', 0, 103, 0, 0, '0', 'ca-tram-song-da', 'hòa bình', '1kg', ''),
(18, 15, 'Lợn Mường Hòa Bình', 0, '155000.0000', '<p>Ba chỉ, vai gi&ograve;n, ch&acirc;n gi&ograve; ngắn, sườn: 155.000 đ/kg<br />\r\nMỡ lợn Mường L&ograve;: 35.000đ/ hộp 500g<br />\r\nL&ograve;ng, nội tạng ch&iacute;n: 150.000 đ/kg</p>\r\n', 0, 'lon-man-met1.jpg', '["lon_muong2.jpg","lon-man-met11.jpg","lon-muong-hoa-binh2.jpg"]', 1498218593, 82, 'lon-muong-hoa-binh', 0, 77, 0, 0, '0', 'lon-muong-hoa-binh', 'hòa bình', '1kg', ''),
(20, 21, 'Nước ép chanh leo', 0, '10000.0000', '<p>nước &eacute;p chanh leo ngon , tự nhi&ecirc;n, bổ</p>\r\n', 0, 'nuoc-chanh-leo.jpg', '["nuoc-chanh-leo1.jpg"]', 1498218148, 32, 'nuoc-ep-chanh-leo', 0, 31, 0, 0, '6', 'nuoc-ep-chanh-leo', 'hòa bình', '1 chai', ''),
(22, 20, 'Chuối Sấy', 0, '20000.0000', '<p>ăn ngon , gi&ograve;n</p>\r\n', 0, 'chuoi-thai.jpg', '["chuoi_say.jpg","chuoi_say_1.jpg","chuoi-thai1.jpg"]', 1498217987, 77, 'chuoi-say', 0, 58, 0, 0, '4', 'chuoi-say', 'hòa bình', '1 túi', ''),
(23, 18, 'Chôm Chôm Thái', 0, '50000.0000', '<p>Ch&ocirc;m ch&ocirc;m Th&aacute;i c&oacute; đặc điểm l&agrave; l&ocirc;ng m&agrave;u xanh, khi ch&iacute;n m&agrave;u đỏ, cơm dầy, tr&oacute;c m&agrave;y, hạt b&eacute; rất ngon.</p>\r\n', 0, 'chom-chom.jpg', '["chom-chom1.jpg"]', 1498217785, 79, 'chom-chom-thai', 0, 76, 0, 0, '5', 'chom-chom-thai', 'sơn la', '1kg', ''),
(25, 7, 'Rau Dền Hữu Cơ', 0, '10000.0000', '<p><strong><em>Rau dền hữu cơ</em></strong>&nbsp;l&agrave; một loại trong&nbsp;Chi Dền (danh ph&aacute;p khoa học: Amaranthus, bao gồm cả c&aacute;c danh ph&aacute;p li&ecirc;n quan tới Acanthochiton, Acnida, Montelia) do ở Việt Nam thường được sử dụng l&agrave;m rau. Chi Dền gồm những lo&agrave;i đều c&oacute; hoa kh&ocirc;ng t&agrave;n, một số mọc hoang dại nhưng nhiều lo&agrave;i được sử dụng l&agrave;m lương thực, rau, c&acirc;y cảnh ở c&aacute;c v&ugrave;ng kh&aacute;c nhau tr&ecirc;n thế giới.&nbsp;</p>\r\n\r\n<p><strong><em>Rau dền hữu cơ</em></strong>&nbsp;dễ trồng, sống khỏe lại &iacute;t khi bị s&acirc;u bệnh n&ecirc;n chẳng cần đến ph&acirc;n b&oacute;n hay thuốc trừ s&acirc;u. Đặc biệt, loại&nbsp;<strong><em>rau dền</em></strong>&nbsp;cực k&igrave; tốt cho mẹ bầu!</p>\r\n\r\n<p><strong>Gi&agrave;u dinh dưỡng</strong></p>\r\n\r\n<p><strong><em>Rau dền hữu cơ</em></strong>&nbsp;chứa nhiều protid, glucid, vitamin v&agrave; chất kho&aacute;ng. H&agrave;m lượng vitamin A rất cao cộng th&ecirc;m c&aacute;c vitamin B(1, 6, 12), C, PP. Đặc biệt h&agrave;m lượng lysin trong&nbsp;<em>rau dền</em>&nbsp;cao hơn cả l&uacute;a, m&igrave;, đậu n&agrave;nh v&agrave; bắp v&agrave;ng. Chất beta &ndash; caroten trong rau dền cao gi&uacute;p &iacute;ch cho việc n&acirc;ng cao sức miễn dịch; Ngo&agrave;i ra, h&agrave;m lượng chất sắt, canxi cao hơn nhiều so với rau b&oacute; x&ocirc;i. Điều quan trọng l&agrave; trong&nbsp;<strong><em>rau dền</em></strong>&nbsp;kh&ocirc;ng chứa acid oxalic, do vậy canxi v&agrave; sắt trong rau dền sau khi đi v&agrave;o cơ thể rất dễ được tận dụng v&agrave; hấp thụ n&ecirc;n rất tốt cho phụ nữ mang thai.</p>\r\n\r\n<p><strong>Giải nhiệt</strong></p>\r\n\r\n<p>V&agrave;o m&ugrave;a h&egrave;, thời tiết chuyển sang oi bức khiến c&aacute;c b&agrave; bầu cảm thấy thật kh&oacute; chịu v&igrave; nhiệt độ cơ thể của họ thường xuy&ecirc;n cao hơn. Để đảm bảo sức khỏe cho cả mẹ v&agrave; thai nhi, c&aacute;c b&agrave; bầu n&ecirc;n ăn những đồ m&aacute;t v&agrave; c&oacute; t&aacute;c dụng giải nhiệt. Trong trường hợp n&agrave;y,&nbsp;<strong><em>rau dền hữu cơ</em></strong>&nbsp;l&agrave; một gợi &yacute; tuyệt vời, bởi n&oacute; c&oacute; t&iacute;nh m&aacute;t, c&ocirc;ng dụng thanh nhiệt rất tốt. V&igrave; vậy, v&agrave;o những ng&agrave;y h&egrave; n&oacute;ng bức, mẹ bầu n&ecirc;n bổ sung th&ecirc;m một b&aacute;t canh rau dền v&agrave;o bữa ăn h&agrave;ng ng&agrave;y nh&eacute;!</p>\r\n\r\n<p><strong>Trị t&aacute;o b&oacute;n</strong></p>\r\n\r\n<p>Chắc hẳn kh&ocirc;ng &iacute;t b&agrave; bầu phải khổ sở với chứng t&aacute;o b&oacute;n? H&atilde;y khắc phục những kh&oacute; chịu đ&oacute; bằng b&agrave;i thuốc đơn giản v&agrave; hiệu quả từ&nbsp;<em>rau dền</em>&nbsp;như sau: Lấy chừng 250g&nbsp;<em><strong>rau dền hữu cơ</strong></em>, đem rửa thật sạch v&agrave; luộc s&ocirc;i chừng 3 ph&uacute;t. Sau đ&oacute; vớt rau ra v&agrave; trộn với dầu vừng hoặc bột vừng đen rồi ăn với cơm. B&agrave;i thuốc n&agrave;y cũng gi&uacute;p giảm nhức đầu, ch&oacute;ng mặt, n&oacute;ng phừng mặt v&agrave; huyết &aacute;p cao nữa đấy!</p>\r\n\r\n<p><strong>Bổ sung canxi cho mẹ v&agrave; b&eacute;</strong></p>\r\n\r\n<p>Canxi l&agrave; loại kho&aacute;ng chất cần được đặc biệt ch&uacute; &yacute; trong thời gian người mẹ mang thai. Khi canxi kh&ocirc;ng được cung cấp đầy đủ, thai tăng trưởng sẽ sử dụng canxi trong xương của người mẹ, m&agrave; mẹ cũng rất cần chất n&agrave;y để c&oacute; đủ sức khỏe sinh nở v&agrave; chăm s&oacute;c con sau n&agrave;y. V&igrave; thế, việc cung cấp đủ nhu cầu canxi trong thời kỳ mang thai l&agrave; rất quan trọng, gi&uacute;p tạo th&agrave;nh v&agrave; ph&aacute;t triển bộ xương thai nhi v&agrave; đảm bảo to&agrave;n vẹn bộ xương cho mẹ.<br />\r\nNhững mẹ bầu kh&ocirc;ng bổ sung canxi đầy đủ sẽ l&agrave;m tăng nguy cơ thai nhi k&eacute;m ph&aacute;t triển v&agrave; mẹ bị lo&atilde;ng xương sau sinh. Do đ&oacute;, mẹ bầu cần bổ sung c&aacute;c thực phẩm chứa nhiều canxi. Trong&nbsp;<strong><em>rau dền hữu cơ</em></strong>&nbsp;c&oacute; h&agrave;m lượng canxi rất cao (gấp 3 lần rau b&oacute; x&ocirc;i),một loại thực phẩm rất đ&aacute;ng gi&aacute;</p>\r\n\r\n<p><strong>Chữa mụn nhọt</strong></p>\r\n\r\n<p>Nhiều mẹ bầu tỏ ra buồn phiền v&igrave; t&igrave;nh trạng mụn nhọt trong suốt thai k&igrave;, khiến họ mất tự tin khi giao tiếp rất nhiều. V&igrave; thế, h&atilde;y &ldquo;đ&aacute;nh bay&rdquo; mụn nhọt với&nbsp;<em>rau dền</em>&nbsp;nh&eacute;. C&aacute;c mẹ l&agrave;m như sau: D&ugrave;ng 20g&nbsp;<em><strong>rau dền hữu cơ&nbsp;</strong></em>đỏ, 20g bồ c&ocirc;ng anh, 16g kim ng&acirc;n hoa v&agrave; 16g cam thảo đất 16g. Hoặc đơn giản nhất l&agrave; mẹ c&oacute; thể chỉ d&ugrave;ng rau dền th&ocirc;i cũng được. Đem rửa sạch tất cả v&agrave; gi&atilde; n&aacute;t, sau đ&oacute; đắp hỗn hợp đ&oacute; l&ecirc;n mặt. Cuối c&ugrave;ng l&agrave; nằm thư gi&atilde;n trước khi rửa lại mặt với nước lạnh. Bạn sẽ thấy hiệu quả kh&ocirc;ng ngờ đấy.</p>\r\n\r\n<p><strong>Gi&uacute;p dễ sinh</strong></p>\r\n\r\n<p>Sản phụ trước sinh một ng&agrave;y hoặc vỡ ối m&agrave; sinh kh&oacute;, kh&ocirc;ng c&oacute; thuốc giục th&igrave; kh&ocirc;ng g&igrave; gi&uacute;p dễ sinh bằng uống nước cốt 100gr&nbsp;<em>rau dền</em>&nbsp;gai (trắng, đỏ) nấu với 100ml nước, bỏ b&atilde;, uống khi c&ograve;n ấm.</p>\r\n\r\n<p>Ngo&agrave;i ra,&nbsp;<strong><em>rau dền</em></strong>&nbsp;c&ograve;n c&oacute; t&aacute;c dụng chữa hậu sản như sau: L&aacute; dền t&iacute;a 50g, rửa sạch th&aacute;i l&aacute;t, nấu bỏ b&atilde; lấy nước rồi th&ecirc;m gạo nếp nấu th&agrave;nh ch&aacute;o v&agrave; ăn trong ng&agrave;y.</p>\r\n\r\n<p><strong>Lưu &yacute; khi ăn<a href="http://cleverfood.com.vn/rau-sach-an-la-b1600205.htm">&nbsp;</a>rau dền:&nbsp;</strong>Rau dền đỏ rất kị với ba ba v&agrave; tiết canh, đặc biệt l&agrave; tiết canh vịt v&agrave; tiết canh lợn. Do rau dền c&oacute; t&iacute;nh m&aacute;t, n&ecirc;n kh&ocirc;ng th&iacute;ch hợp d&ugrave;ng cho người thể chất lạnh; ti&ecirc;u lỏng v&agrave; ti&ecirc;u chảy mạn t&iacute;nh. Ngo&agrave;i ra, cũng giống như bất cứ loại thực phẩm n&agrave;o kh&aacute;c, mẹ bầu kh&ocirc;ng n&ecirc;n ăn qu&aacute; nhiều một l&uacute;c nh&eacute;!</p>\r\n\r\n<p>Nếu&nbsp;muốn mua&nbsp;<strong><em>rau dền hữu cơ</em></strong>&nbsp;&nbsp;c&aacute;c bạn n&ecirc;n tới những&nbsp;cửa h&agrave;ng rau sạch&nbsp;uy t&iacute;n ở H&agrave; Nội.H&atilde;y bảo vệ sự an to&agrave;n của bản th&acirc;n v&agrave; gia đ&igrave;nh bằng c&aacute;ch sử dụng c&aacute;c loại&nbsp;thực phẩm sạch.</p>\r\n', 0, 'rau-den.jpg', '["rau-den1.jpg"]', 1498217555, 98, 'rau-den-huu-co', 0, 68, 0, 0, '5', 'rau-den-huu-co', 'hòa bình', '500g', ''),
(26, 7, 'Xà Lách Xoăn Hữu Cơ', 0, '55000.0000', '<p><em><strong>X&agrave; l&aacute;ch xoăn hữu cơ</strong></em>&nbsp;(Cichorium endivia L.), thuộc họ c&uacute;c (Asteraceae) l&agrave; loại<a href="http://cleverfood.com.vn/rau-huu-co-b2061628.html" target="_blank">&nbsp;<em><strong>rạu hữu cơ</strong></em></a>&nbsp;được trồng v&agrave; chăm s&oacute;c tr&ecirc;n v&ugrave;ng đất c&oacute; diện t&iacute;ch hơn 60 ha tại x&atilde; Y&ecirc;n B&igrave;nh, Thạch Thất, H&agrave; Nội ở độ cao từ 150 đến 200 m&eacute;t, nằm s&aacute;t ch&acirc;n N&uacute;i Vua B&agrave; (thuộc Vườn Quốc gia Ba V&igrave;), với chế độ kh&iacute; hậu đặc biệt trong l&agrave;nh v&agrave; nguồn nước suối rừng tự nhi&ecirc;n, tinh khiết chảy quanh năm, rất tốt cho sức khỏe con người v&agrave; c&acirc;y trồng. Rau được trồng tu&acirc;n thủ nghi&ecirc;m ngặt theo quy tr&igrave;nh kiểm so&aacute;t chặt chẽ bởi hệ thống canh t&aacute;c hiện đại dưới sự tư vấn của c&aacute;c chuy&ecirc;n gia h&agrave;ng đầu trong nước v&agrave; ngo&agrave;i nước:</p>\r\n\r\n<p>- Kh&ocirc;ng d&ugrave;ng thuốc diệt cỏ.<br />\r\n- Kh&ocirc;ng d&ugrave;ng thuốc bảo vệ thực vật v&agrave; ph&acirc;n h&oacute;a học.<br />\r\n- Kh&ocirc;ng d&ugrave;ng chất k&iacute;ch th&iacute;ch tăng trưởng.</p>\r\n\r\n<p><em><strong>X&agrave; l&aacute;ch xoăn&nbsp;</strong></em>l&agrave; loại&nbsp;<a href="http://cleverfood.com.vn/rau-sach-b1566491.html" target="_blank"><em><strong>rau sạch</strong></em></a>&nbsp;c&oacute; thể&nbsp;ăn sống quan trọng v&agrave; phổ biến. Ăn thường xuy&ecirc;n&nbsp;<em>x&agrave; l&aacute;ch</em>&nbsp;c&oacute; thể tăng cường b&agrave;i tiết dịch vị v&agrave; dịch ti&ecirc;u h&oacute;a, tăng b&agrave;i tiết mật, cải thiện c&ocirc;ng năng ti&ecirc;u h&oacute;a của gan, gi&uacute;p nhẹ người dễ ngủ, điều h&ograve;a kinh mạch, lợi ngũ tạng (kh&ocirc;ng ăn c&ugrave;ng với huyết, với mật g&acirc;y độc), cứng g&acirc;n cốt, lợi tiểu tiện v&agrave; l&agrave;m trắng răng đẹp da. D&ugrave;ng chữa tăng huyết &aacute;p vi&ecirc;m thận mạn, sữa kh&ocirc;ng th&ocirc;ng sau sinh nở...</p>\r\n\r\n<p><em><strong>Rau x&agrave; l&aacute;ch xoăn</strong></em>&nbsp;thường để ăn sống, đặc biệt trong m&oacute;n salat, b&aacute;nh m&igrave; kẹp, hăm-bơ-gơ. C&oacute; thể d&ugrave;ng để nấu ch&iacute;n hoặc ăn lẩu.</p>\r\n\r\n<p><strong>Gi&agrave;u dưỡng chất</strong></p>\r\n\r\n<p>D&ugrave; l&agrave; loại n&agrave;o th&igrave;&nbsp;<strong><em>x&agrave; l&aacute;ch</em></strong>&nbsp;cũng l&agrave; loại&nbsp;<a href="http://cleverfood.com.vn/" target="_blank"><strong>thực&nbsp;<em>phẩm hữu cơ</em>&nbsp;</strong></a>rất&nbsp;gi&agrave;u chất dinh dưỡng. Cứ 100 gam x&agrave; l&aacute;ch sẽ cung cấp khoảng 2,2 gam carbohydrate, 1,2 gam chất xơ, 90 gam nước, 166 microgram vitamin A, 73 microgram folate (vitamin B9). X&agrave; l&aacute;ch c&ograve;n chứa rất nhiều muối kho&aacute;ng với những nguy&ecirc;n tố kiềm, nhờ đ&oacute; gi&uacute;p cơ thể &ldquo;dọn dẹp&rdquo; m&aacute;u, gi&uacute;p tinh thần tỉnh t&aacute;o v&agrave; gi&uacute;p cơ thể tr&aacute;nh được nhiều bệnh tật.</p>\r\n\r\n<p>Nước &eacute;p&nbsp;<em>x&agrave; l&aacute;ch</em>&nbsp;c&ograve;n c&oacute; t&aacute;c dụng giải nhiệt. Do chứa một h&agrave;m lượng cao magnesium n&ecirc;n nước &eacute;p x&agrave; l&aacute;ch c&oacute; một năng lực si&ecirc;u ph&agrave;m trong việc hồi phục c&aacute;c m&ocirc; cơ, tăng cường chức năng n&atilde;o. Y học d&acirc;n gian phương T&acirc;y cho rằng d&ugrave;ng dịch &eacute;p&nbsp;<em><strong>x&agrave; l&aacute;ch</strong></em>&nbsp;pha với tinh dầu hoa hồng thoa v&agrave;o tr&aacute;n v&agrave; th&aacute;i dương sẽ gi&uacute;p cắt những cơn đau đầu.</p>\r\n\r\n<p><em><strong>X&agrave; l&aacute;ch xoăn hữu cơ&nbsp;</strong></em>cung cấp chất xơ, gi&agrave;u cellulose n&ecirc;n x&agrave; l&aacute;ch c&ograve;n gi&uacute;p ruột c&oacute; th&ecirc;m ch&uacute;t g&igrave; để... co b&oacute;p, nhờ đ&oacute; gi&uacute;p tho&aacute;t khỏi t&igrave;nh trạng t&aacute;o b&oacute;n. Cải x&agrave; l&aacute;ch c&ograve;n c&oacute; một đặc t&iacute;nh &ldquo;ăn tiền&rdquo; kh&aacute;c l&agrave; c&oacute; thể gi&uacute;p mang lại &ldquo;giấc điệp&rdquo; v&igrave; c&oacute; chứa một chất g&acirc;y ngủ l&agrave; letucarium. Đối với bệnh nh&acirc;n tiểu đường, x&agrave; l&aacute;ch l&agrave; một loại thực phẩm l&yacute; tưởng v&igrave; thuộc nh&oacute;m rau cải c&oacute; th&agrave;nh phần carbohydrate thấp hơn 3%.Rau&nbsp;<strong>x&agrave; l&aacute;ch xoăn hữu cơ&nbsp;</strong>c&ograve;n chứa một h&agrave;m lượng đ&aacute;ng kể chất sắt n&ecirc;n l&agrave; một loại thực phẩm rất tốt cho những người bị thiếu m&aacute;u do thiếu sắt.</p>\r\n\r\n<p><strong>Ngừa ung thư</strong></p>\r\n\r\n<p>Do c&oacute; chứa nhiều beta-carotene n&ecirc;n&nbsp;<strong><em>x&agrave; l&aacute;ch xoăn hữu cơ</em></strong>&nbsp;được c&aacute;c nh&agrave; y học xem l&agrave; một ứng cử vi&ecirc;n tiềm năng trong việc ngăn ngừa ung thư, l&agrave; loại rau&nbsp;đi đầu&nbsp;trong việc ngăn ngừa c&aacute;c bệnh tim mạch, thấp khớp, đục thủy tinh thể... Một nghi&ecirc;n cứu đ&atilde; được thực hiện tại ĐH Y khoa Utah (Mỹ) cho thấy&nbsp;<strong><em>x&agrave; l&aacute;ch xoăn hữu cơ</em></strong>&nbsp;c&oacute; thể l&agrave;m giảm tần suất rủi ro bị ung thư ruột kết ở cả nam lẫn nữ, do trong cải x&agrave; l&aacute;ch &nbsp;c&oacute; chứa một t&aacute;c nh&acirc;n kh&aacute;ng ung thư l&agrave; lutein.</p>\r\n\r\n<p>Phụ nữ trong thời gian mang thai v&agrave; cho con b&uacute; nếu ăn thường xuy&ecirc;n&nbsp;<strong><em>cải x&agrave; l&aacute;ch</em></strong>&nbsp;sẽ rất c&oacute; lợi cho thai nhi v&agrave; trẻ sơ sinh do trong rau&nbsp;<em>x&agrave; l&aacute;ch hữu cơ</em>c&oacute;&nbsp;chứa rất nhiều axit folic.&nbsp;<em><strong>X&agrave; l&aacute;ch xoăn hữu cơ</strong></em>&nbsp;cũng l&agrave; bạn tốt của giới m&agrave;y r&acirc;u v&igrave; c&oacute; thể can thiệp, giảm &ldquo;nỗi đau&rdquo; của đ&agrave;n &ocirc;ng do c&oacute; t&aacute;c dụng ngăn chặn xuất tinh sớm. Hỗn hợp dịch &eacute;p x&agrave; l&aacute;ch với rau dền &Yacute; (spinach - hay c&ograve;n gọi l&agrave; rau bina) gi&uacute;p đ&agrave;n &ocirc;ng cải thiện t&igrave;nh trạng rụng t&oacute;c.</p>\r\n\r\n<p>Những phụ nữ muốn giảm c&acirc;n đ&atilde; chọn&nbsp;<strong>rau x&agrave; l&aacute;ch sạch</strong>&nbsp;l&agrave; một giải ph&aacute;p v&igrave; c&oacute; t&aacute;c dụng l&agrave;m đầy bao tử n&ecirc;n kh&ocirc;ng c&oacute; cảm gi&aacute;c đ&oacute;i. Do h&agrave;m lượng nước cao v&agrave; c&aacute;c vitamin n&ecirc;n ăn x&agrave; l&aacute;ch c&ograve;n gi&uacute;p thực kh&aacute;ch c&oacute; một l&agrave;n da tươi m&aacute;t.</p>\r\n\r\n<p>Ngo&agrave;i những c&ocirc;ng dụng tr&ecirc;n, ăn x&agrave; l&aacute;ch c&ograve;n hưởng được v&ocirc; số lợi &iacute;ch kh&aacute;c như giảm stress, chống lở lo&eacute;t, c&aacute;c bệnh nhiễm tr&ugrave;ng đường tiểu...</p>\r\n\r\n<p><strong>C&aacute;ch chọn:&nbsp;</strong>Chọn l&aacute; to, kh&ocirc;ng đậm, kh&ocirc;ng c&oacute; s&acirc;u. Khoảng c&aacute;ch mắt l&aacute; d&agrave;y, cuống l&aacute; gi&ograve;n dễ g&atilde;y, c&oacute; nhiều nhựa. Loại x&agrave; l&aacute;ch &iacute;t nhựa l&agrave; đ&atilde; gi&agrave;, ăn đắng.</p>\r\n\r\n<p>Nếu&nbsp;muốn mua&nbsp;<strong><em>rau x&agrave; l&aacute;ch xoăn</em></strong>&nbsp;c&aacute;c bạn n&ecirc;n tới những&nbsp;cửa h&agrave;ng rau sạch&nbsp;uy t&iacute;n ở H&agrave; Nội.H&atilde;y bảo vệ sự an to&agrave;n của bản th&acirc;n v&agrave; gia đ&igrave;nh bằng c&aacute;ch sử dụng c&aacute;c loại&nbsp;thực phẩm sạch.</p>\r\n', 2, 'rau-xa-lach.jpg', '["xa_lach_xoan.JPG","xa_lach_xoan_thit.jpg"]', 1499225275, 229, 'xa-lach-huu-co', 0, 91, 0, 0, '<iframe width="560" height="315" src="https://www.youtube.com/embed/SE_TifX-vYM?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>', 'xa-lach-huu-co', 'hòa bình', '1kg', ''),
(27, 6, 'Măng tây xanh', 0, '140000.0000', '<p>Măng t&acirc;y xanh chứa nhiều chất dinh dưỡng, chất xơ, gi&uacute;p ph&ograve;ng chống ung thư, tốt cho ti&ecirc;u h&oacute;a, giảm c&acirc;n, đẹp da... m&agrave; ăn lại gi&ograve;n ngon,chế biến được nhiều m&oacute;n</p>\r\n', 10, 'mang-tay.jpg', '["mang_tay.jpg"]', 1498674492, 134, 'mang-tay-xanh', 0, 54, 0, 0, '<iframe width="560" height="315" src="https://www.youtube.com/embed/pR0o7Ork-F8" frameborder="0" allowfullscreen></iframe>', 'mang-tay-xanh', 'ninh bình', '1kg', '');

-- --------------------------------------------------------

--
-- Structure de la table `slide`
--

CREATE TABLE IF NOT EXISTS `slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image_link` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `sort_order` tinyint(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `slide`
--

INSERT INTO `slide` (`id`, `name`, `image_name`, `image_link`, `link`, `sort_order`) VALUES
(1, 'Rau-sach1', 'slider1', 'rau-sach11.jpg', 'Rau-sach1', 1),
(2, 'Rau-sach', '', 'rau-sach.jpg', 'http://xuankhanh.com', 4),
(4, 'rau-sach-hoa-binh', '', 'rau-sach-hoa-binh.jpg', 'http://xuankhanh.com', 2),
(5, 'thuc-pham-sach', '', 'thuc-pham-sach.jpg', 'http://xuankhanh.com', 4);

-- --------------------------------------------------------

--
-- Structure de la table `support`
--

CREATE TABLE IF NOT EXISTS `support` (
  `id` int(255) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `yahoo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gmail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `skype` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sort_order` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `amount` decimal(15,4) NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `security` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `created` int(11) NOT NULL,
  `user_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=62 ;

--
-- Contenu de la table `transaction`
--

INSERT INTO `transaction` (`id`, `type`, `status`, `user_id`, `user_name`, `user_email`, `user_phone`, `amount`, `message`, `security`, `created`, `user_address`, `payment`) VALUES
(60, 0, 0, 6, 'khanhnguyen1', 'khanhhbvip1@gmail.com', '098777777d', '53900.0000', 'ggggggggggggggggggggggg', '', 1499224342, 'hà nộid', 'thanh toán khi nhận hàng'),
(59, 0, 0, 0, 'Nguyễn Xuân Khánh', 'khanhhbvip1@gmail.com', '0914853115', '10000.0000', 'fffffffffffffffffff', '', 1499182208, 'hà nội', 'thanh toán khi nhận hàng'),
(58, 0, 0, 0, 'Nguyễn Xuân Khánh', 'khanhhbvip1@gmail.com', '0914853115', '53900.0000', 'ccccccccccccccccccc', '', 1499182164, 'hà nội', 'thanh toán khi nhận hàng'),
(54, 0, 2, 6, 'khanhnguyen', 'khanhhbvip1@gmail.com', '098777777', '292450.0000', 'eeeeeeeeeeeeeeeeeeeeeeeeeeee', '', 1499099605, 'hà nội', 'thanh toán khi nhận hàng'),
(55, 0, 0, 6, 'khanhnguyen', 'khanhhbvip1@gmail.com', '098777777', '203900.0000', 'ccc', '', 1499146506, 'hà nội', 'thanh toán khi nhận hàng'),
(56, 0, 0, 0, 'Nguyễn Xuân Khánh', 'khanhhbvip1@gmail.com', '0914853115', '150000.0000', 'dddddddddđ', '', 1499181853, 'hà nội', 'thanh toán khi nhận hàng'),
(57, 0, 0, 0, 'Nguyễn Xuân Khánh', 'khanhhbvip1@gmail.com', '0914853115', '10000.0000', 'ccccccccccccccccccccccccccc', '', 1499181983, 'hà nội', 'thanh toán khi nhận hàng'),
(61, 0, 0, 0, 'nguyễn xuân khánh', 'khanhhbvip1@gmail.com', '0915555555', '10000.0000', 'dcccccccccccccccccccc', '', 1503128836, 'Tỷ, -- Dự án --', 'thanh toán khi nhận hàng');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `created` tinyint(4) NOT NULL,
  `images` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `address`, `password`, `created`, `images`) VALUES
(4, 'Nguyễn Xuân Khánh', 'khanhhbvip0@gmail.com', '0914853115', 'hà nội', 'f168435c3bd5ed9e391b587e123e1601', 127, 'avt52.jpg'),
(6, 'khanhnguyen1', 'khanhhbvip1@gmail.com', '098777777d', 'hà nộid', '9f0d65c3a7fd984427469b324491c84f', 127, 'avt15.jpg'),
(5, 'Xuân Khánh', 'khanhhbvip11@gmail.com', '01688823707', 'hòa bình', '9f0d65c3a7fd984427469b324491c84f', 127, 'avt211.jpg'),
(7, 'Nguyễn Xuân Khánh', 'khanhhbvip111@gmail.com', '0914853115', 'hà nội', '9f0d65c3a7fd984427469b324491c84f', 127, 'avt13.jpg'),
(9, 'khánh xuân', 'khanhhbvip@gmail.com', '0914853115', 'hà nội 1', '9f0d65c3a7fd984427469b324491c84f', 127, ''),
(10, 'khanhkhanhkk', 'khanhhbvip1111@gmail.com', '0914853115', 'hà nội', '9f0d65c3a7fd984427469b324491c84f', 127, ''),
(11, 'khanhkhanh', 'khanhhbvip11111@gmail.com', '0914853115', 'kkkk', '9f0d65c3a7fd984427469b324491c84f', 127, '');

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `intro` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created` int(11) NOT NULL,
  `view` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Contenu de la table `video`
--

INSERT INTO `video` (`id`, `name`, `intro`, `link`, `created`, `view`) VALUES
(1, 'video1', 'video1', 'https://www.youtube.com/watch?v=r23tcuofemA', 0, 1),
(2, 'mô hình trồng rau sạch', 'mô hình trồng rau sạch', 'https://www.youtube.com/watch?v=HQpcNK4fICA', 1497965389, 0),
(3, 'mô hình trồng rau sạch', 'mô hình trồng rau sạch', 'https://www.youtube.com/watch?v=HQpcNK4fICA', 1497965392, 0),
(4, 'mô hình trồng rau sạch', 'mô hình trồng rau sạch', 'https://www.youtube.com/watch?v=HQpcNK4fICA', 1497965393, 0),
(5, 'mô hình trồng rau sạch', 'mô hình trồng rau sạch', 'https://www.youtube.com/watch?v=HQpcNK4fICA', 1497965394, 0),
(6, 'mô hình trồng rau sạch', 'mô hình trồng rau sạch', 'https://www.youtube.com/watch?v=HQpcNK4fICA', 1497965394, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
