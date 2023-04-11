-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th3 22, 2023 lúc 04:01 PM
-- Phiên bản máy phục vụ: 10.5.16-MariaDB
-- Phiên bản PHP: 7.3.32

-- SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
-- SET AUTOCOMMIT = 0;
-- START TRANSACTION;
-- SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `id19895264_tee`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nd` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `img1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nd2` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `img2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `render` int(11) NOT NULL,
  `vitri` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blog`
--

INSERT INTO `blog` (`id`, `title`, `create`, `nd`, `img1`, `nd2`, `img2`, `render`, `vitri`) VALUES
(8, 'Tác dụng tuyệt vời của niacinamide trong chu trình chăm sóc da', '1668151218', ' Niacinamide là một loại vitamin có lợi trong thực phẩm và được đưa vào cơ thể bằng nhiều cách như ăn uống hoặc thoa trực tiếp lên da. Niacinamide thuộc nhóm vitamin B và phức hợp vitamin B3, trong các loại sản phẩm chăm sóc da, chất này được sử dụng để loại bỏ các vấn đề da liên quan đến mụn và lỗ chân lông. Niacinamide thường được đánh giá là thành phần hiếm hoi có nhiều lợi ích trong chăm sóc da. Đặc biệt là tác dụng phụ xảy ra không đáng kể và hoàn toàn có thể khắc phục. Vì vậy, điều đó có thể thuyết phục ngay cả với những khách hàng khó tính hoặc những người sở hữu làn da nhạy cảm.', 'https://objdemo.000webhostapp.com/admin/template/pages/blog//uploads/10-11-22/tac-dung-tuyet-voi-cua-niacinamide-trong-chu-trinh-cham-soc-da-1.jpeg', ' Tác dụng của Niacinamide trong làm đẹp\r\nHiện nay chưa có nhiều nghiên cứu cụ thể về tác động của vitamin B đến kích thước lỗ chân lông. Tuy nhiên niacinamide thì lại có tác dụng rõ ràng trong việc thu nhỏ lỗ chân lông, giúp lỗ chân lông trở nên thông thoáng, đẩy lùi tình trạng bít tắc. Sử dụng theo thời gian cùng với hoạt động tế bào, lỗ chân lông được làm sạch và duy trì bởi niacinamide sẽ khôi phục về kích thước ban đầu. Đối với niacinamide nồng độ cao cũng sẽ giúp cải thiện được tình trạng da sần sùi – vấn đề xảy ra khi lỗ chân lông phải chịu tác động từ các yếu tố như ánh nắng mặt trời hoặc khói bụi. ', 'https://objdemo.000webhostapp.com/admin/template/pages/blog//uploads/10-11-22/tac-dung-tuyet-voi-cua-niacinamide-trong-chu-trinh-cham-soc-da-2.jpg', 1, 2),
(9, 'Thắc Mắc: Bánh Tráng Trộn Bao Nhiêu Calo?', '1668145734', ' ', 'https://objdemo.000webhostapp.com/admin/template/pages/blog//uploads/11-11-22/banh-trang-tron-bao-nhieu-calo-jtiYc-1661530582_medium(1).webp', ' ', 'https://www.studytienganh.vn/upload/2021/05/98140.png', 1, 2),
(10, '', '1668147369', ' ', 'https://www.studytienganh.vn/upload/2021/05/98140.png', ' ', 'https://www.studytienganh.vn/upload/2021/05/98140.png', 1, 2),
(11, '1', '1668147785', '2', 'https://objdemo.000webhostapp.com/admin/template/pages/blog//uploads/11-11-22/cai-thien-tang-cuong-chuc-nang(1)(2)(3)(4)(5)(6)(7)(8)(9).webp', ' 3 ', 'https://objdemo.000webhostapp.com/admin/template/pages/blog//uploads/11-11-22/cai-thien-tang-cuong-chuc-nang(1)(2)(3)(4)(5)(6)(7)(8).webp', 1, 2),
(12, 'Bảng Chỉ Số Thai Nhi Và Những Điều Mẹ Bầu Cần Biết', '1668145119', ' ', 'https://objdemo.000webhostapp.com/admin/template/pages/blog//uploads/11-11-22/bang-chi-so-thai-nhi-va-nhung-dieu-me-bau-can-biet-zjplT-1661584729_large (2).webp', ' ', 'https://www.studytienganh.vn/upload/2021/05/98140.png', 1, 1),
(13, 'Tác dụng tuyệt vời của niacinamide trong chu trình chăm sóc da', '1668148196', ' Niacinamide là một loại vitamin có lợi trong thực phẩm và được đưa vào cơ thể bằng nhiều cách như ăn uống hoặc thoa trực tiếp lên da. Niacinamide thuộc nhóm vitamin B và phức hợp vitamin B3, trong các loại sản phẩm chăm sóc da, chất này được sử dụng để loại bỏ các vấn đề da liên quan đến mụn và lỗ chân lông. Niacinamide thường được đánh giá là thành phần hiếm hoi có nhiều lợi ích trong chăm sóc da. Đặc biệt là tác dụng phụ xảy ra không đáng kể và hoàn toàn có thể khắc phục. Vì vậy, điều đó có thể thuyết phục ngay cả với những khách hàng khó tính hoặc những người sở hữu làn da nhạy cảm.', 'https://objdemo.000webhostapp.com/admin/template/pages/blog//uploads/11-11-22/tac-dung-tuyet-voi-cua-niacinamide-trong-chu-trinh-cham-soc-da-1.jpeg', ' Hiện nay chưa có nhiều nghiên cứu cụ thể về tác động của vitamin B đến kích thước lỗ chân lông. Tuy nhiên niacinamide thì lại có tác dụng rõ ràng trong việc thu nhỏ lỗ chân lông, giúp lỗ chân lông trở nên thông thoáng, đẩy lùi tình trạng bít tắc. Sử dụng theo thời gian cùng với hoạt động tế bào, lỗ chân lông được làm sạch và duy trì bởi niacinamide sẽ khôi phục về kích thước ban đầu. Đối với niacinamide nồng độ cao cũng sẽ giúp cải thiện được tình trạng da sần sùi – vấn đề xảy ra khi lỗ chân lông phải chịu tác động từ các yếu tố như ánh nắng mặt trời hoặc khói bụi.\r\n\r\n\r\nHàng rào bảo vệ da giúp da hạn chế và tránh khỏi những xâm nhập có hại từ môi trường bên ngoài khiến làn da mất cân bằng ẩm. Sự có mặt và tham gia của niacinamide trong chu trình chăm sóc da sẽ giúp tái tạo và củng cố hàng rào bảo vệ da trở nên kiên cố, sản sinh các ceramide để lấy lại sự trẻ trung, mềm mịn vốn có của làn da.', 'https://objdemo.000webhostapp.com/admin/template/pages/blog//uploads/11-11-22/tac-dung-tuyet-voi-cua-niacinamide-trong-chu-trinh-cham-soc-da-2.jpg', 0, 0),
(14, '1', '1668171710', ' 2', 'https://www.studytienganh.vn/upload/2021/05/98140.png', ' 3', 'https://www.studytienganh.vn/upload/2021/05/98140.png', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(1, 'thuốc chữa bệnh'),
(2, 'thuốc bổ'),
(3, 'thốc kê theo đơn'),
(4, 'hỗ trợ làm đẹp'),
(5, 'thảo dược');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id` int(11) NOT NULL,
  `order_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ma_gd` int(11) DEFAULT NULL,
  `money` float DEFAULT NULL,
  `code_bank` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time` varchar(225) CHARACTER SET utf8mb4 DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`id`, `order_id`, `note`, `ma_gd`, `money`, `code_bank`, `time`, `user_id`) VALUES
(1, '2147483647', 'sản phẩm đã thanh toán: ', 13872235, 51700000, 'NCB', '20221106173654', 0),
(2, '2147483647', 'sản phẩm đã thanh toán: ', 13872235, 51700000, 'NCB', '20221106173654', 0),
(3, '2147483647', 'sản phẩm đã thanh toán: ', 13872235, 51700000, 'NCB', '20221106173654', 0),
(4, '2147483647', 'sản phẩm đã thanh toán: ', 13872235, 51700000, 'NCB', '20221106173654', 0),
(5, '2147483647', 'sản phẩm đã thanh toán: ', 13872235, 51700000, 'NCB', '20221106173654', 0),
(6, '2147483647', 'sản phẩm đã thanh toán: Viên Uống Bổ Sung Canxi,', 13872236, 51700000, 'NCB', '20221106174820', 0),
(7, '2147483647', 'sản phẩm đã thanh toán: ', 13872236, 51700000, 'NCB', '20221106174820', 0),
(8, '2147483647', 'sản phẩm đã thanh toán: ', 13872236, 51700000, 'NCB', '20221106174820', 0),
(9, '2147483647', 'sản phẩm đã thanh toán: ', 13872236, 51700000, 'NCB', '20221106174820', 0),
(10, '2147483647', 'sản phẩm đã thanh toán: ', 13872236, 51700000, 'NCB', '20221106174820', 0),
(11, '2147483647', 'sản phẩm đã thanh toán: ', 13872236, 51700000, 'NCB', '202211082', 0),
(12, '2147483647', 'sản phẩm đã thanh toán: Viên Uống Bổ Sung Canxi,', 13873116, 517000, 'NCB', '20221107', 0),
(13, '2147483647', 'sản phẩm đã thanh toán: Viên Uống Bổ Sung Canxi,', 13876244, 517000, 'NCB', '20221111223015', 1),
(14, '2147483647', 'sản phẩm đã thanh toán: Viên Uống Bổ Sung Canxi,', 13876245, 517000, 'NCB', '20221111223147', 0),
(15, '2147483647', 'sản phẩm đã thanh toán: Viên Uống Bổ Sung Canxi,Viên Uống Bổ Sung Canxi demo,', 13876246, 51710000, 'NCB', '20221111223259', 1),
(16, '2147483647', 'sản phẩm đã thanh toán: Viên Uống Bổ Sung Canxi,', 13876248, 10000, 'NCB', '20221108', 1),
(17, '2147483647', 'sản phẩm đã thanh toán: Viên Uống Bổ Sung Canxi,', 13876250, 10000, 'NCB', '20221110', 0),
(18, '2147483647', 'sản phẩm đã thanh toán: Viên Uống Bổ Sung Canxi,', 13876251, 517000, 'NCB', '20221111224221', 88),
(19, '2147483647', 'sản phẩm đã thanh toán: Viên Uống Bổ Sung Canxi,', 13876251, 517000, 'NCB', '20221111224221', 0),
(20, '2147483647', 'sản phẩm đã thanh toán: ', 13876251, 0, 'NCB', '20221111224221', 0),
(21, '2147483647', 'sản phẩm đã thanh toán: Viên Uống Bổ Sung Canxi,', 13876257, 10000, 'NCB', '20221111230442', 1),
(22, '2147483647', 'sản phẩm đã thanh toán: Viên Uống Bổ Sung Canxi,', 13876262, 517000, 'NCB', '20230111', 1),
(23, '2147483647', 'sản phẩm đã thanh toán: ', 13876262, 0, 'NCB', '20221111231534', 1),
(24, '20221112141658', 'sản phẩm đã thanh toán: Viên Uống Bổ Sung Canxi,', 13876401, 517000, 'NCB', '20221219', 0),
(25, '20221123041542', 'sản phẩm đã thanh toán: Viên Uống Bổ Sung Canxi,1,', 13884479, 1034100, 'NCB', '20221123', 2),
(26, '20221215131144', 'sản phẩm đã thanh toán: Viên Uống Bổ Sung Canxi,', 13905053, 517000, 'NCB', '20221215', 6),
(27, '20221215132215', 'sản phẩm đã thanh toán: Viên Uống Bổ Sung Canxi,', 13905071, 1034000, 'NCB', '20221215', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(350) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mota` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `danhmuc_id` int(11) DEFAULT NULL,
  `gia` float DEFAULT NULL,
  `img` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_at` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `update_at` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` int(11) DEFAULT 1,
  `soluong` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `mota`, `danhmuc_id`, `gia`, `img`, `create_at`, `update_at`, `deleted`, `soluong`) VALUES
(36, 'Viên Uống Bổ Sung Canxi', ' adwxcvbnnnnnnnnnnnnanwdajwdjandjwndawndjawndjwndajwndawndawnjawdnwndjwdnj', 1, 10000, 'https://objdemo.000webhostapp.com/admin/template/pages/sanpham/uploads/25-10-22/00021988-anica-phytextra-60v-7325-62ae_large.webp', '1666684600', '', 1, 0),
(37, 'Viên Uống Bổ Sung Canxi', ' adw', 1, 10000, 'https://objdemo.000webhostapp.com/admin/template/pages/sanpham/uploads/25-10-22/cai-thien-tang-cuong-chuc-nang.webp', '1666684615', '', 1, 0),
(38, 'Viên Uống Bổ Sung Canxi', 'mo ta', 2, 517000, 'https://objdemo.000webhostapp.com/admin/template/pages/sanpham/uploads/25-10-22/00021988-anica-phytextra-60v-7325-62ae_large.webp', '1111', '', 1, 0),
(39, 'Viên Uống Bổ Sung Canxi', 'mo ta', 2, 517000, 'https://objdemo.000webhostapp.com/admin/template/pages/sanpham/uploads/25-10-22/00021988-anica-phytextra-60v-7325-62ae_large.webp', '1111', '1667546993', 1, 0),
(40, 'Viên Uống Bổ Sung Canxi', 'mo ta', 2, 517000, 'https://objdemo.000webhostapp.com/admin/template/pages/sanpham/uploads/25-10-22/00021988-anica-phytextra-60v-7325-62ae_large.webp', '1111', '', 1, 0),
(41, 'Viên Uống Bổ Sung Canxi', 'mo ta', 2, 517000, 'https://objdemo.000webhostapp.com/admin/template/pages/sanpham/uploads/25-10-22/00021988-anica-phytextra-60v-7325-62ae_large.webp', '1111', '', 1, 0),
(42, 'Viên Uống Bổ Sung Canxi', 'mo ta', 2, 517000, 'https://objdemo.000webhostapp.com/admin/template/pages/sanpham/uploads/25-10-22/00021988-anica-phytextra-60v-7325-62ae_large.webp', '1111', '', 1, 0),
(43, 'Viên Uống Bổ Sung Canxi', 'mo ta', 2, 517000, 'https://objdemo.000webhostapp.com/admin/template/pages/sanpham/uploads/25-10-22/00021988-anica-phytextra-60v-7325-62ae_large.webp', '1111', '', 1, 0),
(44, 'Viên Uống Bổ Sung Canxi', 'mo ta', 2, 517000, 'https://objdemo.000webhostapp.com/admin/template/pages/sanpham/uploads/25-10-22/00021988-anica-phytextra-60v-7325-62ae_large.webp', '1111', '', 1, 0),
(45, 'Viên Uống Bổ Sung Canxi', 'mo ta', 2, 517000, 'https://objdemo.000webhostapp.com/admin/template/pages/sanpham/uploads/25-10-22/00021988-anica-phytextra-60v-7325-62ae_large.webp', '1111', '', 1, 0),
(46, 'Viên Uống Bổ Sung Canxi', 'mo ta', 2, 517000, 'https://objdemo.000webhostapp.com/admin/template/pages/sanpham/uploads/25-10-22/00021988-anica-phytextra-60v-7325-62ae_large.webp', '1111', '', 1, 0),
(47, 'Viên Uống Bổ Sung Canxi', 'mo ta', 2, 517000, 'https://objdemo.000webhostapp.com/admin/template/pages/sanpham/uploads/25-10-22/00021988-anica-phytextra-60v-7325-62ae_large.webp', '1111', '', 1, 0),
(48, 'Viên Uống Bổ Sung Canxi', 'mo ta', 2, 517000, 'https://objdemo.000webhostapp.com/admin/template/pages/sanpham/uploads/25-10-22/00021988-anica-phytextra-60v-7325-62ae_large.webp', '1111', '', 1, 0),
(49, 'Viên Uống Bổ Sung Canxi', 'mo ta', 2, 517000, 'https://objdemo.000webhostapp.com/admin/template/pages/sanpham/uploads/25-10-22/00021988-anica-phytextra-60v-7325-62ae_large.webp', '1111', '', 1, 0),
(50, 'Viên Uống Bổ Sung Canxi', 'mo ta', 2, 517000, 'https://objdemo.000webhostapp.com/admin/template/pages/sanpham/uploads/25-10-22/00021988-anica-phytextra-60v-7325-62ae_large.webp', '1111', '', 1, 0),
(51, 'Viên Uống Bổ Sung Canxi', 'mo ta', 2, 517000, 'https://objdemo.000webhostapp.com/admin/template/pages/sanpham/uploads/25-10-22/00021988-anica-phytextra-60v-7325-62ae_large.webp', '1111', '', 1, 0),
(52, 'Viên Uống Bổ Sung Canxi demo', 'mo tas demo', 2, 51700000, 'https://objdemo.000webhostapp.com/admin/template/pages/sanpham//uploads/03-11-22/chuptoathuoc.webp', '11111', '1667456020', 1, 0),
(53, 'adws', ' adw', 1, 100, 'https://objdemo.000webhostapp.com/admin/template/pages/sanpham/uploads/26-10-22/da-bi-chay-nang-dung-lam-nhung-dieu-nay-UalHI-1515062804_small.jpg', '1666763977', '', 0, 0),
(54, 'san pham', 'awda ', 1, 1000, 'https://objdemo.000webhostapp.com/admin/template/pages/sanpham/uploads/26-10-22/00021988-anica-phytextra-60v-7325-62ae_large.webp', '1667282390', '', 1, 0),
(55, '1', '1', 2, 100, 'https://objdemo.000webhostapp.com/admin/template/pages/sanpham//uploads/01-11-22/da-bi-chay-nang-dung-lam-nhung-dieu-nay-UalHI-1515062804_small(1).jpg', '1667287586', '1667455884', 1, 0),
(56, '.new.', '.mota .', 1, 0.1, 'https://objdemo.000webhostapp.com/admin/template/pages/sanpham//uploads/01-11-22/cai-thien-tang-cuong-chuc-nang(1)(2)(3)(4)(5)(6)(7)(8)(9)(10)(11)(12)(13)(14)(15)(16)(17).webp', '1667302506', '1667455227', 1, 0),
(57, 'asa', ' adw', 5, 10000, 'https://objdemo.000webhostapp.com/admin/template/pages/sanpham//uploads/03-11-22/cai-thien-tang-cuong-chuc-nang.webp', '1667465192', '', 1, 0),
(58, 'new', 'mo taxcghjkl; ', 1, 120000, 'https://objdemo.000webhostapp.com/admin/template/pages/sanpham//uploads/04-11-22/da-bi-chay-nang-dung-lam-nhung-dieu-nay-UalHI-1515062804_small.jpg', '1667542410', '1667542436', 1, 2000000),
(59, 'sah phan ', ' sdfghjkl', 1, 100, 'https://objdemo.000webhostapp.com/admin/template/pages/sanpham//uploads/04-11-22/chuptoathuoc.webp', '1667543547', '', 1, 2),
(60, 'thuốc mới', 'fghawjwjdiwj ', 3, 100000000, 'https://objdemo.000webhostapp.com/admin/template/pages/sanpham//uploads/04-11-22/cai-thien-tang-cuong-chuc-nang.webp', '1667546928', '', 0, 10),
(61, 'sản phẩm tăng sức đề kháng', ' mô tả', 2, 1000, 'https://objdemo.000webhostapp.com/admin/template/pages/sanpham//uploads/05-11-22/vitamin-va-khoang-chat.webp', '1667629412', '1667629530', 1, 2000000),
(62, 'thuốc mới', 'fghawjwjdiwj ', 3, 100000000, 'https://objdemo.000webhostapp.com/admin/template/pages/sanpham//uploads/04-11-22/cai-thien-tang-cuong-chuc-nang.webp', '1667546928', '', 0, 10),
(63, 'sản phẩm tăng sức đề kháng', ' mô tả', 2, 1000, 'https://objdemo.000webhostapp.com/admin/template/pages/sanpham//uploads/05-11-22/vitamin-va-khoang-chat.webp', '1667629412', '1667629549', 1, 2000000),
(64, 'sản phẩm tăng sức đề kháng', ' mô tả', 2, 1000, 'https://objdemo.000webhostapp.com/admin/template/pages/sanpham//uploads/05-11-22/vitamin-va-khoang-chat.webp', '1667629412', '1667629575', 1, 2000000),
(65, 'sadwa', ' adwadwasdddddddwdawdfghjkadawdnawhdiuhawidhiwdiuaduwduihhiudhiw', 1, 1000, 'https://objdemo.000webhostapp.com/admin/template/pages/sanpham//uploads/08-11-22/chuptoathuoc.webp', '1667898654', '', 1, 2000000),
(66, 'demo', 'mô tả', 4, 1000, 'https://objdemo.000webhostapp.com/admin/template/pages/sanpham//uploads/11-11-22/lam-dep.webp', '1668170981', '', 1, 2000000),
(67, 'adw', ' as', 1, 1000, 'https://objdemo.000webhostapp.com/admin/template/pages/sanpham//uploads/22-11-22/', '1669137878', '', 1, 2000000),
(68, 'adw', ' as', 1, 1000, 'https://objdemo.000webhostapp.com/admin/template/pages/sanpham//uploads/22-11-22/', '1669137895', '', 1, 2000000),
(69, 'adw', ' as', 1, 1000, 'https://objdemo.000webhostapp.com/admin/template/pages/sanpham//uploads/22-11-22/', '1669138041', '', 1, 2000000),
(70, 'awd', ' adwd', 1, 10000, 'https://objdemo.000webhostapp.com/admin/template/pages/sanpham//uploads/22-11-22/Ảnh chụp màn hình (470).png', '1669138068', '', 1, 2000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `usename` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_admin` int(11) DEFAULT NULL,
  `create_time` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gmail` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `usename`, `password`, `is_admin`, `create_time`, `gmail`) VALUES
(2, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 1, '1669140552', 'mainichichimvm@gmail.com'),
(3, 'ThaoThao', '81dc9bdb52d04dc20036dbd8313ed055', 0, '1669192318', 'thaoto2801@gmail.com'),
(4, 'ThaoThao', '81dc9bdb52d04dc20036dbd8313ed055', 0, '1669192358', 'thaoto2801@gmail.com'),
(5, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 0, '1669888963', 'anht3k52@gmail.com'),
(6, 'nguoidung', 'c4ca4238a0b923820dcc509a6f75849b', 0, '1671084645', 'mainichichimvm@gmail.com'),
(7, 'thao', 'e10adc3949ba59abbe56e057f20f883e', 0, '1671370220', 'thaoto2801@gmail.com'),
(8, 'nguoidung', 'c4ca4238a0b923820dcc509a6f75849b', 0, '1671419640', 'mainichichimvm@gmail.com');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `danhmuc_id` (`danhmuc_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`danhmuc_id`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



-- cart