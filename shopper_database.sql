-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 23, 2024 lúc 07:25 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopper_database`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
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
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `name`, `img`, `email`, `password`, `phone`, `date`, `status`) VALUES
(1, 'Admin', NULL, 'admin@gmail.com', '123', '0834567890', '2024-01-12 15:39:21', 1),
(6, 'Friend', '', 'friend@gmail.com', '123', '', '2024-10-29 23:43:40', 1),
(7, 'Friend 1', '', 'friend1@gmail.com', '123', '', '2024-10-29 23:43:47', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
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
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `img`, `description`, `content`, `date`, `status`) VALUES
(2, 'Giày Cầu Lông', '1730959473.jfif', 'Giá từ 5,000,000 VND', '<p>Giày Cầu Lông</p>', '2024-11-01 16:17:11', 1),
(3, 'Áo Cầu Lông', '1730959524.jfif', 'Giá từ 500,000 VND', '<p>Áo Cầu Lông</p>', '2024-11-01 16:27:08', 1),
(0, 'Vợt cầu lông', '1730959611.jfif', 'Giá chỉ từ 1.500.000 VNĐ', '<p>Vợt cầu lông giá rẻ</p>', '2024-11-06 19:25:13', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(64) NOT NULL,
  `img` varchar(100) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `name`, `img`, `description`, `content`, `date`, `status`) VALUES
(1, 'Top 5 cây vợt cầu lông thiên công giá tầm giá 1 triệu đến 1 triệ', '1732164568.webp', 'Top 5 cây vợt cầu lông thiên công giá tầm giá 1 triệu đến 1 triệu 3 hot nhất hiện nay', '<p><i>Bài viết được </i><a href=\"https://shopvnb.com/\"><i>ShopVNB</i></a><i> - </i><a href=\"https://shopvnb.com/he-thong-cua-hang\"><i>Hệ thống shop cầu lông</i></a><i> hàng đầu Việt Nam với hơn 5 shop Premium và 65 chi nhánh trên toàn quốc kiểm duyệt và chia sẻ.</i></p><p>Nếu các bạn đang tìm cho mình một cây vợt cầu lông thiên về lối chơi tấn&nbsp;công mạnh mẽ với một mức giá tầm trung thì sau đây, Shop VNB sẽ giới thiệu với các bạn <a href=\"https://shopvnb.com/vot-cau-long-thien-cong-gia-tam-gia-1-trieu-den-1-trieu-3.html\">top 5 cây vợt cầu lông tầm giá 1 triệu đến 1 triệu 3</a> đang được săn đón nhất hiện nay, vừa đảm bảo chất lượng, vừa giúp bạn có thể phát huy khả năng và đạt hiệu suất cao nhất trên sân cầu.</p><h2><strong>I.&nbsp;Top 5 cây vợt cầu lông thiên công giá tầm giá 1 triệu đến 1 triệu 3 hot nhất hiện nay</strong></h2><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><h3><strong>1.&nbsp;Vợt Cầu Lông Apacs Z-Ziggler</strong></h3><p>- Đầu tiên trong top các cây vợt cầu lông thiên công giá tầm 1 triệu đến 1 triệu 3 đó là cây vợt cầu lông Apacs Z-Ziggler,&nbsp;thuộc dòng vợt&nbsp;thiên công với điểm cân bằng hơi nặng đầu, được thiết kế với các công nghệ nhằm&nbsp;hỗ trợ người chơi có&nbsp;những cú đập sắc nét nhanh hơn.</p><p><img src=\"https://cdn.shopvnb.com/uploads/gallery/vot-cau-long-apacs-z-ziggler_1730313769.webp\" alt=\"Vợt Cầu Lông Apacs Z-Ziggler\" width=\"800\" height=\"800\"></p><p>- Được phát triển với \"TRIPLE SPEED&nbsp;SYSTEM\" kết hợp sức mạnh đặc biệt và khả năng xử lý tuyệt vời.&nbsp;Cùng với đó là công nghệ Extra Slim Shaft có tính khí động học cao hơn và giảm sức cản không khí làm cho cú đánh của bạn mạnh hơn và chính xác hơn.</p><p>- Xem đầy đủ thông tin&nbsp;chi tiết về vợt tại:&nbsp;<a href=\"https://shopvnb.com/vot-cau-long-apacs-z-ziggler.html\">https://shopvnb.com/vot-cau-long-apacs-z-ziggler.html</a></p><h3><strong>2.&nbsp;Vợt cầu lông Lining Axforce Cannon</strong></h3><p>- Tiếp theo trong top&nbsp;vợt cầu lông thiên công giá tầm 1 triệu đến 1 triệu 3&nbsp;chính là&nbsp;vợt cầu lông Lining Axforce Cannon&nbsp;được thiết kế cho lối chơi công thủ toàn diện, hơi thiên công với điểm cân bằng hơi nặng đầu, cùng với đũa vợt cứng ở mức trung bình giúp hỗ trợ lực&nbsp;tốt hơn, không quá gây áp lực lên cổ tay cho người chơi.</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>- Mang&nbsp;4 phiên bản màu sắc, đặc biệt có 2 bản màu mới là xanh lá và xanh lục,&nbsp;cùng các chi tiết được làm tỉ mỉ tạo nên độ nổi bật, hiện đại và năng động. Được trang bị các&nbsp;công nghệ tiên tiến, ngoài Thunder Technology có thể kể đến như High Carbon xử lý vật liệu tạo cây vợt với độ bền và cứng cáp vượt trội, công nghệ Power Flexible Shaft cho thân vợt linh hoạt, dễ dàng chuyển đổi trạng thái từ phòng thủ sang tấn công.</p><p><img src=\"https://cdn.shopvnb.com/uploads/gallery/vot-cau-long-lining-axforce-cannon-xanh-luc-2024-noi-dia-trung_1723059014.webp\" alt=\"Vợt Cầu Lông Lining Axforce Cannon - Xanh lục\" width=\"800\" height=\"800\"></p><p><i>Vợt Cầu Lông Lining Axforce Cannon - Xanh lục</i></p><p>-&nbsp;Xem đầy đủ thông tin&nbsp;chi tiết về vợt tại: <a href=\"https://shopvnb.com/vot-cau-long-lining-axforce-cannon.html\">https://shopvnb.com/vot-cau-long-lining-axforce-cannon.html</a></p><h3><strong>3.&nbsp;Vợt Cầu Lông Lining Halbertec Motor</strong></h3><p>- Vợt Cầu Lông Lining Halbertec Motor&nbsp;với điểm&nbsp;cân bằng là 298 +- 5 mm, đũa vợt có độ cứng trung bình&nbsp;cho khả năng trợ lực, phù hợp với những ai đang tìm một cây vợt với lối đánh công thủ linh hoạt, hơi thiên về tấn công với những cú smash&nbsp;đầy tốc độ và mạnh mẽ.</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>- Lining Halbertec Motor có 2 phiên bản: màu trắng và màu đỏ, được&nbsp;thiết kế vô&nbsp;cùng bắt mắt với những chi tiết hiện đại, màu sắc vừa ấn tượng lại&nbsp;hài hòa, trẻ trung.</p><p>&nbsp;</p><p><img src=\"https://cdn.shopvnb.com/uploads/gallery/vot-cau-long-lining-halbertec-motor-trang-chinh-hang_1727141445.webp\" alt=\"Vợt Cầu Lông Lining Halbertec Motor - Trắng\" width=\"800\" height=\"800\"></p><p><i>Vợt Cầu Lông Lining Halbertec Motor - Trắng</i></p><p><img src=\"https://cdn.shopvnb.com/uploads/images/bai_viet/vot-cau-long-thien-cong-gia-tam-gia-1-trieu-den-1-trieu-3-4-1730659560.jpg\" alt=\"Vợt Cầu Lông Lining Halbertec Motor - Đỏ\" width=\"800\" height=\"800\"></p><p><i>Vợt Cầu Lông Lining Halbertec Motor - Đỏ</i></p><p>- Được làm bằng chất liệu carbon cao cấp giúp vợt đảm bảo độ bền và chịu được lực căng tối đa lên đến 30lbs. Cùng với đó là công nghệ&nbsp;MODULUS SLIM SHAFT&nbsp;giúp cải thiện điểm uốn trên trục vợt, làm trục vợt mỏng hỗ trợ những cú đập có độ chính xác hơn và linh hoạt hơn.</p><p>-&nbsp;Xem đầy đủ thông tin&nbsp;chi tiết về vợt tại: <a href=\"https://shopvnb.com/vot-cau-long-lining-halbertec-motor.html\">https://shopvnb.com/vot-cau-long-lining-halbertec-motor.html</a></p><h3><strong>4.&nbsp;Vợt Cầu Lông VS YouLong</strong></h3><p>-&nbsp;Vợt cầu lông VS YouLong&nbsp;được thiết kế dành cho lối chơi&nbsp;tấn công&nbsp;mạnh mẽ&nbsp;với thông số nặng đầu 305mm ± 3mm và độ cứng trung bình giúp cho các lông thủ có khả năng trợ lực để tung ra những pha đập cầu uy lực khiến đối phương không kịp trở tay.</p><p><img src=\"https://cdn.shopvnb.com/uploads/gallery/vot-cau-long-vs-youlong-xanh-chinh-hang.webp\" alt=\"Vợt Cầu Lông VS YouLong - Xanh\" width=\"800\" height=\"908\"></p><p><i>Vợt Cầu Lông VS YouLong - Xanh</i></p><p>&nbsp;</p><p>- Bề mặt&nbsp;hình hộp Energy Compact Frame có&nbsp;các góc được thiết kế thon gọn, mỏng và nhỏ kết hợp công nghệ 6840 Tube giúp trục vợt mỏng hơn&nbsp;đảm bảo tính chắn chắn và ổn định, giúp tăng khả năng giảm lực cản không khí, tăng tốc độ ra vợt nhanh hơn và mạnh mẽ hơn.</p><p>-&nbsp;Xem đầy đủ thông tin&nbsp;chi tiết về vợt tại: <a href=\"https://banhang.shopvnb.com/vot-cau-long-vs-youlong.html\">banhang.shopvnb.com/vot-cau-long-vs-youlong.html</a></p><h3><strong>5.&nbsp;Vợt cầu lông Yonex Astrox 3 DG</strong></h3><p>- Cuối cùng trong top 5&nbsp;cây vợt cầu lông thiên công giá tầm 1 triệu đến 1 triệu 3 là&nbsp;Vợt cầu lông Yonex Astrox 3 DG&nbsp;hướng đến lối chơi tấn công với những cú đập có độ cắm và uy lực, dành cho&nbsp;các đối tượng người chơi&nbsp;trung bình và có lực cổ tay tốt với trọng lượng 4U và đũa vợt cứng trung bình trợ lực.</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>- Có 3 phiên bản màu sắc để người chơi lựa chọn theo sở thích.&nbsp;Toàn bộ khung vợt&nbsp;Astrox 3 DG được phủ lớp sơn nhám giúp hạn chế bong tróc khi va quẹt nhỏ, giúp cây vợt được bảo vệ hình dáng bên ngoài tốt hơn.</p><p>- Mặt vợt được thiết kể theo dạng oval Isometric đặc trưng giúp mở rộng vùng điểm ngọt để tăng tỉ lệ đánh cầu chuẩn xác cho người chơi, đặc biệt là những người có cảm giác cầu chưa được tốt.</p><p><img src=\"https://cdn.shopvnb.com/uploads/images/tin_tuc/vot-cau-long-yonex-astrox-3-dg-st-bkbl-chinh-hang-1-1704919793.webp\" alt=\"Vợt cầu lông Yonex Astrox 3 DG - BKBL\" width=\"800\" height=\"908\"></p><p><i>Vợt cầu lông Yonex Astrox 3 DG - BKBL</i></p><p>- Điểm nổi bật nhất mà&nbsp;Yonex Astrox 3 DG&nbsp;mang lại chính là khả năng chịu mức căng cao lên đến 16kg (35lbs),&nbsp;được đúc từ&nbsp;chất liệu&nbsp;HM Graphite / Tungsten cao cấp. Đây chắc chắn sẽ là điểm cộng cho những ai yêu thích một cây vợt bền và có thể căng cao để luyện tập cổ tay tốt hơn.</p><p>-&nbsp;Xem đầy đủ thông tin&nbsp;chi tiết về vợt tại:&nbsp;<a href=\"https://shopvnb.com/vot-cau-long-yonex-astrox-3-dg.html\">shopvnb.com/vot-cau-long-yonex-astrox-3-dg.html</a></p><h2><strong>II.</strong>&nbsp;<strong>Cách lựa chọn vợt cầu lông thiên công phù hợp</strong></h2><p>- Bên cạnh đó, ngoài việc tham khảo các cây vợt cầu lông thiên công tầm 1 triệu đến 1 triệu 3 ra thì các bạn cần phải chú ý khi lựa chọn vợt sao cho phù hợp với bản thân.&nbsp;Chúng ta&nbsp;cần chú ý đến&nbsp;các yếu tố như độ nặng đầu vợt, độ cứng của thân vợt và trọng lượng. Vợt có đầu nặng giúp gia tăng lực đập, trong khi thân vợt cứng tạo độ ổn định cho cú smash mạnh. Ngoài ra, chọn vợt có khung thiết kế khí động học sẽ giúp tối ưu hóa lực đánh, giảm lực cản.</p><h2><strong>3.&nbsp;Địa điểm mua các&nbsp;vợt cầu lông thiên công tầm giá 1 triệu đến 1 triệu 3&nbsp;uy tín, chất lượng trên thị trường&nbsp;</strong></h2><p>- Để mua các vợt cầu lông thiên công tầm giá 1 triệu đến 1 triệu 3 uy tín thì ShopVNB là một trong những đại lý lớn nhất bán các dòng vợt cầu lông đến từ các thương hiệu trên toàn thế giới. Với hơn 10 năm kinh nghiệm cũng như hơn 60 chi nhánh trải dài toàn quốc, là sự chọn lựa đáng tin cây cho quý khách hàng để lựa chọn những sản phẩm vợt&nbsp;chính hãng.</p><p>- Đến với hệ thống cửa hàng bán vợt cầu lông VNB, bạn sẽ nhận được những dịch vụ đi kèm tốt nhất. Nhiều chế độ hậu mãi cũng như bảo hành chính hãng với tiêu chí nhanh, gọn, lẹ cho khách hàng.</p><p>- Ngoài ra, hiện nay ShopVNB đang có chương trình khai trương&nbsp;Shop cầu lông Thủ Dầu Một - Bình Dương - CN2 với nhiều phần ưu đãi hấp dẫn mà cá lông thủ không thể bỏ qua.</p><p>Xem thông tin chi tiết về chương trình khai trinh qua bài viết:&nbsp;<a href=\"https://shopvnb.com/khai-truong-cua-hang-the-thao-vnb-tp-thu-dau-1-chi-nhanh-2.html\">Khai trương cửa hàng thể thao VNB TP. Thủ Dầu Một Chi nhánh 2</a></p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>Vừa rồi là danh sách top các cây vợt cầu lông thiên công tầm giá 1 triệu đến 1 triệu 3 đáng mua nhất&nbsp;được ShopVNB tổng hợp cho&nbsp;các lông thủ.&nbsp;Hy vọng bài viết sẽ giúp bạn có thêm thông tin và lựa chọn dễ dàng hơn khi tìm kiếm một cây vợt cầu lông thiên công chất lượng trong tầm giá phải chăng nhé.</p>', '2024-11-20 20:31:54', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
