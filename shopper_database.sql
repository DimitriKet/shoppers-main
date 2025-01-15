-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2025 at 07:47 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopper_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(64) NOT NULL,
  `img` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(64) NOT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `name`, `img`, `email`, `password`, `phone`, `date`, `status`) VALUES
(1, 'Admin', NULL, 'admin@gmail.com', '123', '0834567890', '2024-01-12 15:39:21', 1),
(6, 'Friend', '', 'friend@gmail.com', '123', '', '2024-10-29 23:43:40', 1),
(7, 'Friend 1', '', 'friend1@gmail.com', '123', '', '2024-10-29 23:43:47', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(64) NOT NULL,
  `img` varchar(100) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `img`, `description`, `content`, `date`, `status`) VALUES
(0, 'Badminton Rackets', '1730959611.jfif', 'Prices start at 1,500,000 VND', '<p>Affordable badminton rackets</p>', '2024-11-06 19:25:13', 1),
(2, 'Badminton Shoes', '1733118387.png', 'Prices start at 5,000,000 VND', '<p>Badminton shoes</p>', '2024-11-01 16:17:11', 1),
(3, 'Badminton Shirts', '1730959524.jfif', 'Prices start at 500,000 VND', '<p>Badminton shirts</p>', '2024-11-01 16:27:08', 1),
(4, 'Badminton Accessories', '1733070928.webp', 'Official badminton accessories to protect and support players.', '<p>Badminton accessories</p>', '2024-12-01 16:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(256) NOT NULL,
  `img` varchar(100) DEFAULT NULL,
  `description` text NOT NULL,
  `content` text DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `img`, `description`, `content`, `date`, `status`) VALUES
(1, 'Top 5 cây vợt cầu lông thiên công giá tầm giá 1 triệu đến 1 triệ', '1732164568.webp', 'Top 5 cây vợt cầu lông thiên công giá tầm giá 1 triệu đến 1 triệu 3 hot nhất hiện nay', '<p><i>Bài viết được </i><a href=\"https://shopvnb.com/\"><i>ShopVNB</i></a><i> - </i><a href=\"https://shopvnb.com/he-thong-cua-hang\"><i>Hệ thống shop cầu lông</i></a><i> hàng đầu Việt Nam với hơn 5 shop Premium và 65 chi nhánh trên toàn quốc kiểm duyệt và chia sẻ.</i></p><p>Nếu các bạn đang tìm cho mình một cây vợt cầu lông thiên về lối chơi tấn&nbsp;công mạnh mẽ với một mức giá tầm trung thì sau đây, Shop VNB sẽ giới thiệu với các bạn <a href=\"https://shopvnb.com/vot-cau-long-thien-cong-gia-tam-gia-1-trieu-den-1-trieu-3.html\">top 5 cây vợt cầu lông tầm giá 1 triệu đến 1 triệu 3</a> đang được săn đón nhất hiện nay, vừa đảm bảo chất lượng, vừa giúp bạn có thể phát huy khả năng và đạt hiệu suất cao nhất trên sân cầu.</p><h2><strong>I.&nbsp;Top 5 cây vợt cầu lông thiên công giá tầm giá 1 triệu đến 1 triệu 3 hot nhất hiện nay</strong></h2><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><h3><strong>1.&nbsp;Vợt Cầu Lông Apacs Z-Ziggler</strong></h3><p>- Đầu tiên trong top các cây vợt cầu lông thiên công giá tầm 1 triệu đến 1 triệu 3 đó là cây vợt cầu lông Apacs Z-Ziggler,&nbsp;thuộc dòng vợt&nbsp;thiên công với điểm cân bằng hơi nặng đầu, được thiết kế với các công nghệ nhằm&nbsp;hỗ trợ người chơi có&nbsp;những cú đập sắc nét nhanh hơn.</p><p><img src=\"https://cdn.shopvnb.com/uploads/gallery/vot-cau-long-apacs-z-ziggler_1730313769.webp\" alt=\"Vợt Cầu Lông Apacs Z-Ziggler\" width=\"800\" height=\"800\"></p><p>- Được phát triển với \"TRIPLE SPEED&nbsp;SYSTEM\" kết hợp sức mạnh đặc biệt và khả năng xử lý tuyệt vời.&nbsp;Cùng với đó là công nghệ Extra Slim Shaft có tính khí động học cao hơn và giảm sức cản không khí làm cho cú đánh của bạn mạnh hơn và chính xác hơn.</p><p>- Xem đầy đủ thông tin&nbsp;chi tiết về vợt tại:&nbsp;<a href=\"https://shopvnb.com/vot-cau-long-apacs-z-ziggler.html\">https://shopvnb.com/vot-cau-long-apacs-z-ziggler.html</a></p><h3><strong>2.&nbsp;Vợt cầu lông Lining Axforce Cannon</strong></h3><p>- Tiếp theo trong top&nbsp;vợt cầu lông thiên công giá tầm 1 triệu đến 1 triệu 3&nbsp;chính là&nbsp;vợt cầu lông Lining Axforce Cannon&nbsp;được thiết kế cho lối chơi công thủ toàn diện, hơi thiên công với điểm cân bằng hơi nặng đầu, cùng với đũa vợt cứng ở mức trung bình giúp hỗ trợ lực&nbsp;tốt hơn, không quá gây áp lực lên cổ tay cho người chơi.</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>- Mang&nbsp;4 phiên bản màu sắc, đặc biệt có 2 bản màu mới là xanh lá và xanh lục,&nbsp;cùng các chi tiết được làm tỉ mỉ tạo nên độ nổi bật, hiện đại và năng động. Được trang bị các&nbsp;công nghệ tiên tiến, ngoài Thunder Technology có thể kể đến như High Carbon xử lý vật liệu tạo cây vợt với độ bền và cứng cáp vượt trội, công nghệ Power Flexible Shaft cho thân vợt linh hoạt, dễ dàng chuyển đổi trạng thái từ phòng thủ sang tấn công.</p><p><img src=\"https://cdn.shopvnb.com/uploads/gallery/vot-cau-long-lining-axforce-cannon-xanh-luc-2024-noi-dia-trung_1723059014.webp\" alt=\"Vợt Cầu Lông Lining Axforce Cannon - Xanh lục\" width=\"800\" height=\"800\"></p><p><i>Vợt Cầu Lông Lining Axforce Cannon - Xanh lục</i></p><p>-&nbsp;Xem đầy đủ thông tin&nbsp;chi tiết về vợt tại: <a href=\"https://shopvnb.com/vot-cau-long-lining-axforce-cannon.html\">https://shopvnb.com/vot-cau-long-lining-axforce-cannon.html</a></p><h3><strong>3.&nbsp;Vợt Cầu Lông Lining Halbertec Motor</strong></h3><p>- Vợt Cầu Lông Lining Halbertec Motor&nbsp;với điểm&nbsp;cân bằng là 298 +- 5 mm, đũa vợt có độ cứng trung bình&nbsp;cho khả năng trợ lực, phù hợp với những ai đang tìm một cây vợt với lối đánh công thủ linh hoạt, hơi thiên về tấn công với những cú smash&nbsp;đầy tốc độ và mạnh mẽ.</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>- Lining Halbertec Motor có 2 phiên bản: màu trắng và màu đỏ, được&nbsp;thiết kế vô&nbsp;cùng bắt mắt với những chi tiết hiện đại, màu sắc vừa ấn tượng lại&nbsp;hài hòa, trẻ trung.</p><p>&nbsp;</p><p><img src=\"https://cdn.shopvnb.com/uploads/gallery/vot-cau-long-lining-halbertec-motor-trang-chinh-hang_1727141445.webp\" alt=\"Vợt Cầu Lông Lining Halbertec Motor - Trắng\" width=\"800\" height=\"800\"></p><p><i>Vợt Cầu Lông Lining Halbertec Motor - Trắng</i></p><p><img src=\"https://cdn.shopvnb.com/uploads/images/bai_viet/vot-cau-long-thien-cong-gia-tam-gia-1-trieu-den-1-trieu-3-4-1730659560.jpg\" alt=\"Vợt Cầu Lông Lining Halbertec Motor - Đỏ\" width=\"800\" height=\"800\"></p><p><i>Vợt Cầu Lông Lining Halbertec Motor - Đỏ</i></p><p>- Được làm bằng chất liệu carbon cao cấp giúp vợt đảm bảo độ bền và chịu được lực căng tối đa lên đến 30lbs. Cùng với đó là công nghệ&nbsp;MODULUS SLIM SHAFT&nbsp;giúp cải thiện điểm uốn trên trục vợt, làm trục vợt mỏng hỗ trợ những cú đập có độ chính xác hơn và linh hoạt hơn.</p><p>-&nbsp;Xem đầy đủ thông tin&nbsp;chi tiết về vợt tại: <a href=\"https://shopvnb.com/vot-cau-long-lining-halbertec-motor.html\">https://shopvnb.com/vot-cau-long-lining-halbertec-motor.html</a></p><h3><strong>4.&nbsp;Vợt Cầu Lông VS YouLong</strong></h3><p>-&nbsp;Vợt cầu lông VS YouLong&nbsp;được thiết kế dành cho lối chơi&nbsp;tấn công&nbsp;mạnh mẽ&nbsp;với thông số nặng đầu 305mm ± 3mm và độ cứng trung bình giúp cho các lông thủ có khả năng trợ lực để tung ra những pha đập cầu uy lực khiến đối phương không kịp trở tay.</p><p><img src=\"https://cdn.shopvnb.com/uploads/gallery/vot-cau-long-vs-youlong-xanh-chinh-hang.webp\" alt=\"Vợt Cầu Lông VS YouLong - Xanh\" width=\"800\" height=\"908\"></p><p><i>Vợt Cầu Lông VS YouLong - Xanh</i></p><p>&nbsp;</p><p>- Bề mặt&nbsp;hình hộp Energy Compact Frame có&nbsp;các góc được thiết kế thon gọn, mỏng và nhỏ kết hợp công nghệ 6840 Tube giúp trục vợt mỏng hơn&nbsp;đảm bảo tính chắn chắn và ổn định, giúp tăng khả năng giảm lực cản không khí, tăng tốc độ ra vợt nhanh hơn và mạnh mẽ hơn.</p><p>-&nbsp;Xem đầy đủ thông tin&nbsp;chi tiết về vợt tại: <a href=\"https://banhang.shopvnb.com/vot-cau-long-vs-youlong.html\">banhang.shopvnb.com/vot-cau-long-vs-youlong.html</a></p><h3><strong>5.&nbsp;Vợt cầu lông Yonex Astrox 3 DG</strong></h3><p>- Cuối cùng trong top 5&nbsp;cây vợt cầu lông thiên công giá tầm 1 triệu đến 1 triệu 3 là&nbsp;Vợt cầu lông Yonex Astrox 3 DG&nbsp;hướng đến lối chơi tấn công với những cú đập có độ cắm và uy lực, dành cho&nbsp;các đối tượng người chơi&nbsp;trung bình và có lực cổ tay tốt với trọng lượng 4U và đũa vợt cứng trung bình trợ lực.</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>- Có 3 phiên bản màu sắc để người chơi lựa chọn theo sở thích.&nbsp;Toàn bộ khung vợt&nbsp;Astrox 3 DG được phủ lớp sơn nhám giúp hạn chế bong tróc khi va quẹt nhỏ, giúp cây vợt được bảo vệ hình dáng bên ngoài tốt hơn.</p><p>- Mặt vợt được thiết kể theo dạng oval Isometric đặc trưng giúp mở rộng vùng điểm ngọt để tăng tỉ lệ đánh cầu chuẩn xác cho người chơi, đặc biệt là những người có cảm giác cầu chưa được tốt.</p><p><img src=\"https://cdn.shopvnb.com/uploads/images/tin_tuc/vot-cau-long-yonex-astrox-3-dg-st-bkbl-chinh-hang-1-1704919793.webp\" alt=\"Vợt cầu lông Yonex Astrox 3 DG - BKBL\" width=\"800\" height=\"908\"></p><p><i>Vợt cầu lông Yonex Astrox 3 DG - BKBL</i></p><p>- Điểm nổi bật nhất mà&nbsp;Yonex Astrox 3 DG&nbsp;mang lại chính là khả năng chịu mức căng cao lên đến 16kg (35lbs),&nbsp;được đúc từ&nbsp;chất liệu&nbsp;HM Graphite / Tungsten cao cấp. Đây chắc chắn sẽ là điểm cộng cho những ai yêu thích một cây vợt bền và có thể căng cao để luyện tập cổ tay tốt hơn.</p><p>-&nbsp;Xem đầy đủ thông tin&nbsp;chi tiết về vợt tại:&nbsp;<a href=\"https://shopvnb.com/vot-cau-long-yonex-astrox-3-dg.html\">shopvnb.com/vot-cau-long-yonex-astrox-3-dg.html</a></p><h2><strong>II.</strong>&nbsp;<strong>Cách lựa chọn vợt cầu lông thiên công phù hợp</strong></h2><p>- Bên cạnh đó, ngoài việc tham khảo các cây vợt cầu lông thiên công tầm 1 triệu đến 1 triệu 3 ra thì các bạn cần phải chú ý khi lựa chọn vợt sao cho phù hợp với bản thân.&nbsp;Chúng ta&nbsp;cần chú ý đến&nbsp;các yếu tố như độ nặng đầu vợt, độ cứng của thân vợt và trọng lượng. Vợt có đầu nặng giúp gia tăng lực đập, trong khi thân vợt cứng tạo độ ổn định cho cú smash mạnh. Ngoài ra, chọn vợt có khung thiết kế khí động học sẽ giúp tối ưu hóa lực đánh, giảm lực cản.</p><h2><strong>3.&nbsp;Địa điểm mua các&nbsp;vợt cầu lông thiên công tầm giá 1 triệu đến 1 triệu 3&nbsp;uy tín, chất lượng trên thị trường&nbsp;</strong></h2><p>- Để mua các vợt cầu lông thiên công tầm giá 1 triệu đến 1 triệu 3 uy tín thì ShopVNB là một trong những đại lý lớn nhất bán các dòng vợt cầu lông đến từ các thương hiệu trên toàn thế giới. Với hơn 10 năm kinh nghiệm cũng như hơn 60 chi nhánh trải dài toàn quốc, là sự chọn lựa đáng tin cây cho quý khách hàng để lựa chọn những sản phẩm vợt&nbsp;chính hãng.</p><p>- Đến với hệ thống cửa hàng bán vợt cầu lông VNB, bạn sẽ nhận được những dịch vụ đi kèm tốt nhất. Nhiều chế độ hậu mãi cũng như bảo hành chính hãng với tiêu chí nhanh, gọn, lẹ cho khách hàng.</p><p>- Ngoài ra, hiện nay ShopVNB đang có chương trình khai trương&nbsp;Shop cầu lông Thủ Dầu Một - Bình Dương - CN2 với nhiều phần ưu đãi hấp dẫn mà cá lông thủ không thể bỏ qua.</p><p>Xem thông tin chi tiết về chương trình khai trinh qua bài viết:&nbsp;<a href=\"https://shopvnb.com/khai-truong-cua-hang-the-thao-vnb-tp-thu-dau-1-chi-nhanh-2.html\">Khai trương cửa hàng thể thao VNB TP. Thủ Dầu Một Chi nhánh 2</a></p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>Vừa rồi là danh sách top các cây vợt cầu lông thiên công tầm giá 1 triệu đến 1 triệu 3 đáng mua nhất&nbsp;được ShopVNB tổng hợp cho&nbsp;các lông thủ.&nbsp;Hy vọng bài viết sẽ giúp bạn có thêm thông tin và lựa chọn dễ dàng hơn khi tìm kiếm một cây vợt cầu lông thiên công chất lượng trong tầm giá phải chăng nhé.</p>', '2024-11-20 20:31:54', 1),
(2, 'Nên học cầu lông ở đâu là tốt nhất?', '1732792469.webp', 'Khi chơi cầu lông, ai cũng mong muốn rằng mình đánh cầu sẽ càng ngày càng hay hơn, càng tiến bộ hơn theo từng ngày. Và để thực hiện được điều này, thì các bạn phải đi học cầu lông. Có 2 hình thức để các bạn học cầu lông, đó là học online và học trực tiếp,', '<p>Khi chơi cầu lông, ai cũng mong muốn rằng mình đánh cầu sẽ càng ngày càng hay hơn, càng tiến bộ hơn theo từng ngày. Và để thực hiện được điều này, thì các bạn phải đi học cầu lông. Có 2 hình thức để các bạn học cầu lông, đó là học online và học trực tiếp, nhưng vấn đề nan giải ở đây là nên <a href=\"https://shopvnb.com/hoc-cau-long-o-dau.html\"><strong>học cầu lông ở đâu</strong></a> là tốt nhất? Vậy thì hãy để <strong>ShopVNB</strong> giải đáp thắc mắc này&nbsp;cho các bạn qua bài viết dưới đây nhé, mong rằng những thông tin này sẽ giúp ích cho các anh em lông thủ.</p><p><img src=\"https://cdn.shopvnb.com/uploads/images/bai_viet/hoc-cau-long-o-dau-1-1729544427.webp\" alt=\"\" width=\"800\" height=\"533\"></p><h2><strong>1. Học cầu lông online</strong></h2><p>Học online thì nên học cầu lông ở đâu? Đối với hình thức học online, thì các bạn có thể xem những video&nbsp;của Thầy Thạo cùng với Team VNB, hoặc là những video của các kênh cầu lông khác&nbsp;chia sẻ trên các nền tảng mạng xã hội như Facebook, TikTok, YouTube... Hình thức này sẽ có những ưu điểm và nhược điểm như sau:</p><p><img src=\"https://cdn.shopvnb.com/uploads/images/bai_viet/hoc-cau-long-o-dau-2-1729544427.webp\" alt=\"Học cầu lông online\" width=\"800\" height=\"450\"></p><p><strong>*Ưu điểm:</strong></p><p>- Thoải mái sắp xếp thời gian để học: Khi rảnh&nbsp;rỗi, các bạn chỉ cần mở điện thoại hay máy tính, gõ từ khoá mình muốn tìm kiếm là sẽ có ngay video cho các bạn học và tập theo.<br>- Học nhanh, gọn và dễ hiểu: Mỗi video chỉ kéo dài tầm 2-10 phút và bạn có thể tua đi tua lại để xem mình còn sai sót ở điểm nào nhằm&nbsp;hoàn thiện động tác.<br>- Không tốn bất kỳ chi phí nào.</p><p><strong>*Nhược điểm:</strong></p><p>- Có thể bạn không biết bản thân mình sai ở đâu: Khi tập ở nhà thì mọi thứ được trơn tru, nhưng khi lên sân áp dụng thì không được như ý muốn.<br>- Chỉ học được về kỹ thuật và chiến thuật, nhưng không học được bộ chạy chuẩn vì không có sân, không có người tập cho bạn.<br>- Động tác của bạn chưa được hoàn thiện, có thể mắc sai sót dẫn đến kết quả không tốt, thậm chí gây ra&nbsp;chấn thương không đáng có nếu bạn thực hiện sai.<br>- Trình độ của bạn chỉ tiến bộ ở một mức nhất định, không thể tiến xa hơn được nữa.</p><h2><strong>2. Học cầu lông trực tiếp</strong></h2><p>Về hình thức học cầu lông trực tiếp tại các lớp học cầu, thì các bạn sẽ được thầy hướng dẫn và chỉ dạy từng động tác ngay trên sân. Với hình thức này, thì học cầu lông ở đâu là tốt nhất? Ở thời điểm hiện tại, có nhiều lớp học cầu lông được mở ra. Nhưng để giúp cho các bạn có thể tiến bộ một cách nhanh chóng, thì các bạn nên lựa chọn các lớp chỉ tối đa 6-8 học viên, vì thầy sẽ có thể nhớ,&nbsp;quan sát bạn,&nbsp;biết bạn sai cái gì và có thể chỉnh cho bạn. Còn nếu bạn học lớp quá đông, thì thầy có thể sẽ không&nbsp;quan sát kịp. Các bạn có thể tham khảo các lớp học cầu lông trực tiếp uy tín thông qua bài viết \"<a href=\"https://shopvnb.com/hoc-cau-long.html\">Các lớp học cầu lông \"chất\" mà bạn nên theo để phát triển nhanh nhất</a>\" để có được sự lựa chọn phù hợp nhất nhé.</p><p><img src=\"https://cdn.shopvnb.com/uploads/images/tin_tuc/hoc-cau-long-1.webp\" alt=\"Học cầu lông trực tiếp\" width=\"800\" height=\"519\"></p><p>Với việc học cầu lông trực tiếp, thì sẽ có rất nhiều ưu điểm để giúp các bạn có thể đánh cầu lông hay hơn.</p><p><strong>*Ưu điểm:</strong></p><p>- Được thầy trực tiếp dạy và chia sẻ những động tác, kỹ thuật để giúp bạn đánh sao cho chuẩn chỉ.<br>- Được học bộ chạy chuẩn cầu lông, biết cách để di chuyển trên sân để đạt được hiệu quả cao khi thi đấu.<br>- Được rèn luyện về thể lực, sức mạnh và độ dẻo dai của cơ bắp để giúp bạn không bị đuối sức khi đánh cầu.<br>- Học và áp dụng trực tiếp các chiến thuật, tư duy đánh cầu trên sân.<br>- Động tác và bộ pháp của bạn sẽ chuẩn chỉ, mượt mà và&nbsp;uyển chuyển hơn.<br>- Trình độ của bạn được nâng cao dần lên nếu bạn tích cực đi tập cầu kết hợp đánh vãng lai.</p><p><img src=\"https://cdn.shopvnb.com/uploads/images/bai_viet/hoc-cau-long-o-dau-4-1729544428.webp\" alt=\"Học cầu lông trực tiếp\" width=\"800\" height=\"450\"></p><p><strong>*Nhược điểm:</strong></p><p>- Tốn chi phí để tham gia và theo học.<br>- Tốn thời gian để di chuyển đến lớp học và tập luyện.<br>- Cần kiên trì, quyết tâm&nbsp;trong thời gian dài để có thể tiến bộ.<br>- Nhiều thầy dạy cầu lông chưa phù hợp, cho tập ít mà nghỉ thì nhiều dẫn tới hiệu quả không cao.<br>- Có nhiều yếu tố gây nản chí.</p><p>*Nhằm&nbsp;giúp cho các bạn có thể nắm rõ được&nbsp;những điểm mạnh và điểm yếu của 2 hình thức học cầu lông này, thì mời các bạn xem video chia sẻ của anh Sĩ Phương dưới đây để biết thêm chi tiết nhé</p>', '2024-11-28 18:14:29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(5) UNSIGNED NOT NULL,
  `idcategory` int(5) UNSIGNED NOT NULL,
  `name` varchar(64) NOT NULL,
  `img` varchar(100) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `discount` int(1) NOT NULL DEFAULT 0,
  `price` varchar(10) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `idcategory`, `name`, `img`, `description`, `discount`, `price`, `content`, `date`, `status`) VALUES
(1, 0, 'Yonex Voltric Z Force II Badminton Racket', 'yonex_z_force_ii.webp', 'Yonex Voltric Z Force II badminton racket, powerful design, suitable for professional players. Balanced between speed and control.', 10, '2000000', 'The Yonex Voltric Z Force II badminton racket features a modern design, perfect for professional athletes. Ideal for powerful attacks.', '2024-11-30 16:02:14', 1),
(2, 0, 'Victor Brave Sword 12 Badminton Racket', 'victor_brave_sword_12.jpg', 'Victor Brave Sword 12 badminton racket, lightweight design, easy to control, suitable for precise shots.', 5, '1500000', 'Victor Brave Sword 12 is the ideal choice for those who love flexibility and control in matches. Its lightweight design ensures easy movement and attacks.', '2024-11-30 16:02:14', 1),
(3, 0, 'Li-Ning N9ii Badminton Racket', 'li_ning_n9ii.jpg', 'Li-Ning N9ii badminton racket, known for its high durability and special design to minimize vibrations during play.', 15, '1800000', 'Li-Ning N9ii offers excellent anti-vibration properties, helping players maintain stability throughout the game. A favorite in competitions.', '2024-11-30 16:02:14', 1),
(4, 0, 'Yonex Astrox 99 Badminton Racket', 'yonex_astrox_99.jpg', 'Yonex Astrox 99 badminton racket with Rotational Generator System technology helps players achieve stronger attacks.', 12, '2500000', 'Yonex Astrox 99 is a top-tier racket with powerful attacking capabilities and easy handling. Designed for players aiming to enhance their performance.', '2024-11-30 16:02:14', 1),
(5, 0, 'Li-Ning Turbo Charging 75 Badminton Racket', 'li_ning_turbo_charging_75.png', 'Li-Ning Turbo Charging 75 badminton racket offers exceptional attacking power, optimized for high-speed gameplay.', 20, '2200000', 'The Li-Ning Turbo Charging 75 badminton racket uses Turbo Charging technology to boost attack speed and power, delivering a strong feel in every strike.', '2024-11-30 16:02:14', 1),
(6, 0, 'Victor Auraspeed 90S Badminton Racket', 'victor_auraspeed_90s.jpg', 'Victor Auraspeed 90S badminton racket, lightweight and flexible, ideal for high-speed rallies and powerful smashes.', 8, '2100000', 'Victor Auraspeed 90S provides an excellent balance between speed and control, ideal for players who enjoy fast and powerful rallies.', '2024-11-30 16:02:14', 1),
(7, 0, 'Yonex Duora 10 Badminton Racket', 'yonex_duora_10.webp', 'Yonex Duora 10 badminton racket, symmetrical design, optimized for both offensive and defensive shots.', 10, '2300000', 'Yonex Duora 10 is a high-end badminton racket with a unique symmetrical design, enabling players to perform both offensive and defensive shots effectively.', '2024-11-30 16:02:14', 1),
(8, 0, 'Yonex Nanoray 900 Badminton Racket', 'yonex_nanoray_900.webp', 'Yonex Nanoray 900 badminton racket with high stiffness, suitable for players who prefer extremely fast attacks.', 7, '1600000', 'Yonex Nanoray 900 is designed to maximize speed in every shot. With high stiffness, it is an excellent choice for those who love speed.', '2024-11-30 16:02:14', 1),
(9, 0, 'Li-Ning Super Series 90 Badminton Racket', 'li_ning_super_series_90.jpg', 'Li-Ning Super Series 90 badminton racket, specially designed for professional players with excellent control capabilities.', 25, '2700000', 'Li-Ning Super Series 90 is the perfect choice for professional players, with superior control and impressive attacking power.', '2024-11-30 16:02:14', 1),
(10, 0, 'Mizuno Fortius 1000 Badminton Racket', 'mizuno_fortius_1000.jpg', 'Mizuno Fortius 1000 badminton racket, optimized for powerful and precise shots.', 5, '1900000', 'Mizuno Fortius 1000 helps players easily control every shot while supporting powerful and accurate smashes in all situations.', '2024-11-30 16:02:14', 1),
(11, 3, 'Yonex Professional Badminton Shirt', 'yonex_professional_shirt.jpg', 'Yonex Professional badminton shirt, designed to be breathable and comfortable for athletes.', 10, '700000', 'Yonex Professional badminton shirt ensures easy movement, breathability, and quick-drying, perfect for long matches.', '2024-11-30 16:02:14', 1),
(12, 4, 'Yonex Racket Strap', 'yonex_racket_strap.webp', 'Yonex racket strap helps protect and keep the racket in good condition.', 10, '200000', 'Yonex racket strap is made of high-quality material, protecting your racket during transport and making it easy to carry.', '2024-12-01 16:00:00', 1),
(15, 2, 'Victor Auraspeed 90S Badminton Shoes', 'victor_auraspeed_90s_shoes.jpg', 'Victor Auraspeed 90S badminton shoes with a lightweight and comfortable design, optimized for quick movements.', 15, '3000000', 'Victor Auraspeed 90S badminton shoes provide stability and support for players who love quick and agile movements.', '2024-11-30 16:02:14', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_category` (`idcategory`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product_category` FOREIGN KEY (`idcategory`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
