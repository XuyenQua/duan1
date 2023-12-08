-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th12 07, 2023 lúc 10:37 AM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `xuyenqua`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int NOT NULL,
  `id_tai_khoan` int NOT NULL,
  `id_san_pham` int NOT NULL,
  `noi_dung` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ngay_binh_luan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `id_tai_khoan`, `id_san_pham`, `noi_dung`, `ngay_binh_luan`) VALUES
(4, 1, 37, 'đẹp quá', '2023-11-02'),
(5, 1, 37, 'áo chất lượng tốt', '2023-11-01'),
(6, 9, 38, 'sản phẩm tốt', '2023-11-25'),
(7, 9, 38, 'hahaah', '2023-11-30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int NOT NULL,
  `ten_dm` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `anh_dm` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `mo_ta_dm` text COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `ten_dm`, `anh_dm`, `mo_ta_dm`) VALUES
(22, 'Quần jeans nữ', 'jeans.png', 'Quần jeans nữ là một chiếc quần phổ biến và linh hoạt, phản ánh phong cách năng động và thoải mái. '),
(23, 'Đầm nữ', 'váy.png', 'Váy nữ là biểu tượng của sự nữ tính và quyến rũ trong thế giới thời trang. '),
(24, 'Áo sơ mi nữ', 'áo sơ mi nữ.png', ' Áo sơ mi nữ là một chiếc áo mang đến sự thanh lịch và lịch sự, tạo nên vẻ ngoại hình chăm sóc và chuyên nghiệp'),
(25, 'áo thun nữ', 'ao thun nữ.png', 'Áo thun nữ là một item thời trang đơn giản nhưng vô cùng linh hoạt'),
(26, 'Áo Hoodie nữ', 'hoodie-removebg.png', ' Áo Hoodie nữ là một chiếc áo len hoặc vải dày có mũ đính kèm, tạo nên sự thoải mái và ấm áp.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id` int NOT NULL,
  `id_tai_khoan` int DEFAULT NULL,
  `ten_khach_hang` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `so_dien_thoai` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `dia_chi` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `trang_thai` int NOT NULL DEFAULT '1',
  `pttt` int NOT NULL,
  `ma_giam_gia` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `giam_gia` int DEFAULT NULL,
  `tong_tien` int NOT NULL,
  `ngay_dat_hang` date NOT NULL,
  `ghi_chu` text COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`id`, `id_tai_khoan`, `ten_khach_hang`, `so_dien_thoai`, `dia_chi`, `email`, `trang_thai`, `pttt`, `ma_giam_gia`, `giam_gia`, `tong_tien`, `ngay_dat_hang`, `ghi_chu`) VALUES
(17, 9, 'Nguyễn Trung Xuyên', '0359956926', 'Phú Châu- Ba Vì-Hà Nội', 'xuyenqua@gmail.com', 6, 1, '', 0, 1400000, '2023-11-29', ''),
(18, 0, 'Nguyễn Trung Xuyên', '0359956926', 'Phú Châu- Ba Vì-Hà Nội', 'erew@gmail.com', 6, 1, '', 0, 430000, '2023-11-30', ''),
(19, 0, 'Nguyễn Trung Xuyên', '0359956926', 'Phú Châu- Ba Vì-Hà Nội', 'x@gmail.com', 6, 1, '', 0, 800000, '2023-11-30', ''),
(21, 9, 'Nguyễn Trung Xuyên', '0359956926', 'Phú Châu- Ba Vì-Hà Nội', 'xuyenqua@gmail.com', 5, 1, '', 0, 430000, '2023-12-03', ''),
(22, 0, 'Nguyễn Trung Xuyên', '0359956926', 'Phú Châu- Ba Vì-Hà Nội', 'ntx01062004@gmail.com', 4, 1, 'GIAM30K', 30000, 1050000, '2023-12-04', 'sdf'),
(23, 0, 'Nguyễn Trung Xuyên', '0359956926', 'Phú Châu- Ba Vì-Hà Nội', 'ntx01062004@gmail.com', 3, 1, 'GIAM30K', 30000, 380000, '2023-12-04', ''),
(24, 0, 'Nguyễn Trung Xuyên', '0359956926', 'Phú Châu- Ba Vì-Hà Nội', 'ntx01062004@gmail.com', 2, 1, 'GIAM30K', 30000, 430000, '2023-12-05', ''),
(25, 0, 'Nguyễn Trung Xuyên', '0359956926', 'Phú Châu- Ba Vì-Hà Nội', 'ntx01062004@gmail.com', 1, 1, 'GIAM30K', 30000, 330000, '2023-12-05', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `magiamgia`
--

CREATE TABLE `magiamgia` (
  `id_giamgia` int NOT NULL,
  `ma_giam_gia` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `giam_gia` int NOT NULL,
  `so_luong` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `magiamgia`
--

INSERT INTO `magiamgia` (`id_giamgia`, `ma_giam_gia`, `giam_gia`, `so_luong`) VALUES
(1, 'GIAM20K', 20000, 999),
(2, 'GIAM50K', 50000, 1000),
(3, 'GIAM10K', 10000, 1000),
(4, 'GIAM30K', 30000, 998),
(5, 'GIAM40K', 40000, 1000),
(6, 'GIAM60K', 60000, 1000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pttt`
--

CREATE TABLE `pttt` (
  `id` int NOT NULL,
  `ten_pttt` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `pttt`
--

INSERT INTO `pttt` (`id`, `ten_pttt`) VALUES
(1, 'Thanh toán khi nhận hàng'),
(2, 'Thanh toán qua ví điện tử');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int NOT NULL,
  `ma_sp` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ten_sp` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `gia_sp` int NOT NULL,
  `gia_cu_sp` int DEFAULT NULL,
  `so_luong` int NOT NULL,
  `thuong_hieu_sp` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `mo_ta_sp` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `mo_ta_ngan_sp` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `id_dm` int NOT NULL,
  `da_ban` int NOT NULL DEFAULT '0',
  `luot_xem` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `ma_sp`, `ten_sp`, `gia_sp`, `gia_cu_sp`, `so_luong`, `thuong_hieu_sp`, `mo_ta_sp`, `mo_ta_ngan_sp`, `id_dm`, `da_ban`, `luot_xem`) VALUES
(38, 'HDN-01', 'Hoodie Croptop Tay Ngắn', 300000, 450000, 10000, 'Anh Quang', 'Áo Hoodie nữ là một chiếc áo len hoặc vải dày có mũ đính kèm, tạo nên sự thoải mái và ấm áp. Với kiểu dáng thường có túi cắm tay ở phía trước và cổ áo hình chữ \"V\" rộng, áo Hoodie không chỉ mang đến sự ấm áp mà còn tạo điểm nhấn thời trang và phong cách.\r\n\r\nThường được làm từ vải cotton hoặc vải co giãn, áo Hoodie nữ thích hợp cho mọi mùa với khả năng giữ nhiệt tốt. Có nhiều màu sắc và kiểu dáng khác nhau để phản ánh sự đa dạng của thị trường thời trang. Áo Hoodie không chỉ là trang phục thể thao mà còn có thể kết hợp với quần jean, quần short, hoặc chân váy, tạo nên phong cách thoải mái và năng động.\r\n\r\nVới sự thoải mái và tính ứng dụng cao, áo Hoodie nữ là lựa chọn phổ biến cho những ngày se lạnh, các hoạt động ngoại ô, hoặc chỉ đơn giản là khi bạn muốn thoải mái mà vẫn giữ được phong cách cá nhân.', 'Áo Hoodie nữ là một chiếc áo len hoặc vải dày có mũ đính kèm, tạo nên sự thoải mái và ấm áp. ', 26, 1, 22),
(39, 'ATN-01', 'Áo Thun Nữ Cổ Bẻ Gucci', 250000, 350000, 10000, 'Anh Quang', 'Áo thun nữ cổ bẻ là một chiếc áo thun với kiểu cổ thiết kế đặc biệt, tạo điểm nhấn và sự sang trọng cho trang phục. Cổ áo được thiết kế cao và bẻ, tạo nên vẻ thanh lịch và tinh tế cho người mặc.\r\n\r\nVới chất liệu thường là cotton hoặc vải co giãn, áo thun cổ bẻ mang lại sự thoải mái và linh hoạt trong mọi hoạt động. Kiểu dáng này thường xuất hiện trong nhiều màu sắc và họa tiết khác nhau, phản ánh sự đa dạng trong thế giới thời trang nữ.\r\n\r\nÁo thun nữ cổ bẻ có thể kết hợp linh hoạt với nhiều loại quần, chân váy hoặc quần short, tạo nên phong cách thời trang phù hợp cho nhiều dịp khác nhau. Đối với những người phụ nữ yêu thích sự nữ tính và lịch sự, áo thun nữ cổ bẻ là một lựa chọn tuyệt vời.\r\n\r\n\r\n\r\n\r\n\r\n', '\r\nÁo thun nữ cổ bẻ là một chiếc áo thun với kiểu cổ thiết kế đặc biệt, tạo điểm nhấn và sự sang trọng cho trang phục. Cổ áo được thiết kế cao và bẻ, tạo nên vẻ thanh lịch và tinh tế cho người mặc.', 25, 0, 0),
(40, 'ASMN-01', 'Áo Sơ Mi Nữ Hồng Ruốc', 200000, 300000, 10000, 'Anh Quang', '\r\nÁo sơ mi nữ là một chiếc áo mang đến sự thanh lịch và lịch sự, tạo nên vẻ ngoại hình chăm sóc và chuyên nghiệp. Chúng thường được làm từ vải nhẹ và thoáng khí như cotton hoặc chiffon, tạo cảm giác thoải mái và mát mẻ khi mặc. Áo sơ mi có nhiều kiểu dáng, từ áo sơ mi trắng truyền thống đến những phiên bản độc đáo với cắt cúp, hoa văn, hoặc các chi tiết thời trang.\r\n\r\nVới khả năng kết hợp linh hoạt, áo sơ mi nữ phù hợp cho nhiều dịp khác nhau, từ công sở đến những buổi hẹn hò hay dự tiệc. Có thể mặc nó kín đáo với quần công sở hoặc tạo điểm nhấn bằng cách kết hợp với chân váy hay quần jeans. Áo sơ mi không chỉ thể hiện sự chín chắn và lịch lãm mà còn là một phần quan trọng trong tủ đồ của phụ nữ hiện đại.', 'Áo sơ mi nữ là một chiếc áo mang đến sự thanh lịch và lịch sự, tạo nên vẻ ngoại hình chăm sóc và chuyên nghiệp.', 24, 0, 0),
(41, 'ASMN-02', 'Áo sơ mi nữ kẻ sọc xanh trắng', 290000, 350000, 10000, 'Anh Quang', 'Áo sơ mi nữ là một chiếc áo mang đến sự thanh lịch và lịch sự, tạo nên vẻ ngoại hình chăm sóc và chuyên nghiệp. Chúng thường được làm từ vải nhẹ và thoáng khí như cotton hoặc chiffon, tạo cảm giác thoải mái và mát mẻ khi mặc. Áo sơ mi có nhiều kiểu dáng, từ áo sơ mi trắng truyền thống đến những phiên bản độc đáo với cắt cúp, hoa văn, hoặc các chi tiết thời trang.\r\n\r\nVới khả năng kết hợp linh hoạt, áo sơ mi nữ phù hợp cho nhiều dịp khác nhau, từ công sở đến những buổi hẹn hò hay dự tiệc. Có thể mặc nó kín đáo với quần công sở hoặc tạo điểm nhấn bằng cách kết hợp với chân váy hay quần jeans. Áo sơ mi không chỉ thể hiện sự chín chắn và lịch lãm mà còn là một phần quan trọng trong tủ đồ của phụ nữ hiện đại.', 'Áo sơ mi nữ là một chiếc áo mang đến sự thanh lịch và lịch sự, tạo nên vẻ ngoại hình chăm sóc và chuyên nghiệp.', 24, 0, 0),
(42, 'ASMN-03', 'Áo Sơ Mi nữ Phối viền Đỏ đen', 300000, NULL, 10000, 'Anh Quang', 'Áo sơ mi nữ là một chiếc áo mang đến sự thanh lịch và lịch sự, tạo nên vẻ ngoại hình chăm sóc và chuyên nghiệp. Chúng thường được làm từ vải nhẹ và thoáng khí như cotton hoặc chiffon, tạo cảm giác thoải mái và mát mẻ khi mặc. Áo sơ mi có nhiều kiểu dáng, từ áo sơ mi trắng truyền thống đến những phiên bản độc đáo với cắt cúp, hoa văn, hoặc các chi tiết thời trang.\r\n\r\nVới khả năng kết hợp linh hoạt, áo sơ mi nữ phù hợp cho nhiều dịp khác nhau, từ công sở đến những buổi hẹn hò hay dự tiệc. Có thể mặc nó kín đáo với quần công sở hoặc tạo điểm nhấn bằng cách kết hợp với chân váy hay quần jeans. Áo sơ mi không chỉ thể hiện sự chín chắn và lịch lãm mà còn là một phần quan trọng trong tủ đồ của phụ nữ hiện đại.', 'Áo sơ mi nữ là một chiếc áo mang đến sự thanh lịch và lịch sự, tạo nên vẻ ngoại hình chăm sóc và chuyên nghiệp.', 24, 0, 1),
(43, 'ASMN-04', 'Áo sơ mi nữ sọc tay dài', 350000, NULL, 10000, 'Anh Quang', '\r\nÁo sơ mi nữ là một chiếc áo mang đến sự thanh lịch và lịch sự, tạo nên vẻ ngoại hình chăm sóc và chuyên nghiệp. Chúng thường được làm từ vải nhẹ và thoáng khí như cotton hoặc chiffon, tạo cảm giác thoải mái và mát mẻ khi mặc. Áo sơ mi có nhiều kiểu dáng, từ áo sơ mi trắng truyền thống đến những phiên bản độc đáo với cắt cúp, hoa văn, hoặc các chi tiết thời trang.\r\n\r\nVới khả năng kết hợp linh hoạt, áo sơ mi nữ phù hợp cho nhiều dịp khác nhau, từ công sở đến những buổi hẹn hò hay dự tiệc. Có thể mặc nó kín đáo với quần công sở hoặc tạo điểm nhấn bằng cách kết hợp với chân váy hay quần jeans. Áo sơ mi không chỉ thể hiện sự chín chắn và lịch lãm mà còn là một phần quan trọng trong tủ đồ của phụ nữ hiện đại.', 'Áo sơ mi nữ là một chiếc áo mang đến sự thanh lịch và lịch sự, tạo nên vẻ ngoại hình chăm sóc và chuyên nghiệp. ', 24, 5, 0),
(44, 'ASMN-05', 'Áo sơ mi chấm bi', 400000, NULL, 10000, 'Anh Quang', 'Áo sơ mi nữ là một chiếc áo mang đến sự thanh lịch và lịch sự, tạo nên vẻ ngoại hình chăm sóc và chuyên nghiệp. Chúng thường được làm từ vải nhẹ và thoáng khí như cotton hoặc chiffon, tạo cảm giác thoải mái và mát mẻ khi mặc. Áo sơ mi có nhiều kiểu dáng, từ áo sơ mi trắng truyền thống đến những phiên bản độc đáo với cắt cúp, hoa văn, hoặc các chi tiết thời trang.\r\n\r\nVới khả năng kết hợp linh hoạt, áo sơ mi nữ phù hợp cho nhiều dịp khác nhau, từ công sở đến những buổi hẹn hò hay dự tiệc. Có thể mặc nó kín đáo với quần công sở hoặc tạo điểm nhấn bằng cách kết hợp với chân váy hay quần jeans. Áo sơ mi không chỉ thể hiện sự chín chắn và lịch lãm mà còn là một phần quan trọng trong tủ đồ của phụ nữ hiện đại.', 'Áo sơ mi nữ là một chiếc áo mang đến sự thanh lịch và lịch sự, tạo nên vẻ ngoại hình chăm sóc và chuyên nghiệp. ', 24, 1, 4),
(45, 'DN-01', 'Đầm Alia Dress', 450000, 500000, 10000, 'Anh Quang', 'Đầm nữ là biểu tượng của sự nữ tính và quyến rũ trong thế giới thời trang. Những chiếc đầm được làm từ các chất liệu như cotton, chiffon, hoặc satin, tạo nên sự thoải mái và mềm mại khi mặc. Đầm nữ có nhiều kiểu dáng và cắt may khác nhau, từ đầm maxi dài và thoải mái cho những buổi dạo chơi, đến đầm bodycon ôm sát cơ thể thích hợp cho các sự kiện quan trọng.\r\n\r\nVới đa dạng về màu sắc, họa tiết và kiểu dáng, đầm nữ mang lại nhiều lựa chọn phù hợp cho mọi phong cách và dịp sự kiện. Có thể kết hợp đầm nữ với giày cao gót để tạo vẻ sang trọng, hoặc với giày sneakers cho phong cách năng động.\r\n\r\nĐầm nữ không chỉ là một bộ phận của trang phục, mà còn là biểu tượng của vẻ đẹp và sự tự tin của phụ nữ. Với sự linh hoạt và tính ứng dụng cao, đầm nữ là lựa chọn phổ biến trong tủ đồ của phụ nữ hiện đại.', 'Đầm nữ là biểu tượng của sự nữ tính và quyến rũ trong thế giới thời trang. ', 23, 2, 5),
(46, 'QJN-01', 'quần bò ống rộng rách 2 bên', 270000, 300000, 1000, 'Anh Quang', 'Quần jeans nữ là một chiếc quần phổ biến và linh hoạt, phản ánh phong cách năng động và thoải mái. Chúng được làm từ vải jeans chất lượng cao, tạo nên sự bền bỉ và chắc chắn. Quần jeans nữ thường có nhiều kiểu dáng và cắt may khác nhau, từ quần bootcut truyền thống đến quần skinny ôm sát cơ thể, mang đến sự đa dạng cho người mặc.\r\n\r\nVới khả năng kết hợp linh hoạt, quần jeans nữ phù hợp với nhiều loại trang phục, từ áo thun thông thường đến áo sơ mi sang trọng. Sự thoải mái khi mặc quần jeans giúp phụ nữ tự tin di chuyển và thể hiện phong cách cá nhân của mình. Khả năng chịu đựng và dễ bảo quản của chúng cũng làm cho quần jeans trở thành một item không thể thiếu trong tủ đồ của phụ nữ hiện đại.', 'Quần jeans nữ là một chiếc quần phổ biến và linh hoạt, phản ánh phong cách năng động và thoải mái. ', 22, 1, 5),
(47, 'QJN-02', 'quần jean nữ cạp cao', 400000, NULL, 1000, 'Anh Quang', '\r\nQuần jean nữ cạp cao là một biểu tượng của phong cách thời trang hiện đại và thoải mái. Với thiết kế cạp cao ôm sát vòng eo, chiếc quần này tôn lên đường cong tự nhiên của phái đẹp, mang lại sự tự tin và quyến rũ. Chất liệu jean co giãn linh hoạt, tạo cảm giác thoải mái và thoáng khí trong suốt ngày dài. Kiểu dáng đơn giản nhưng sang trọng, quần jean cạp cao dễ dàng kết hợp với nhiều loại trang phục khác nhau, từ áo thun basic đến áo sơ mi công sở, giúp phái đẹp thể hiện phong cách cá nhân một cách tự tin và thời trang. Cho dù bạn đang đi làm, dạo phố hay tham gia các sự kiện, quần jean nữ cạp cao sẽ là người bạn đồng hành hoàn hảo, mang đến sự thoải mái và phong cách mỗi khi xuất hiện.', '\r\nQuần jean nữ cạp cao là một biểu tượng của phong cách thời trang hiện đại và thoải mái.', 22, 7, 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham_anh`
--

CREATE TABLE `sanpham_anh` (
  `id` int NOT NULL,
  `id_san_pham` int NOT NULL,
  `anh_sp` text COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham_anh`
--

INSERT INTO `sanpham_anh` (`id`, `id_san_pham`, `anh_sp`) VALUES
(61, 31, '4195f128a03862663b29.jpg'),
(62, 32, '4195f128a03862663b29.jpg'),
(63, 32, 'gf.png'),
(64, 33, '123171157_675841090034566_3119900931275003442_n.jpg'),
(65, 34, '4195f128a03862663b29.jpg'),
(66, 34, 'gf.png'),
(67, 34, 'Microsoft_Nostalgic_Windows_Wallpaper_4k.jpg'),
(68, 32, 'logo.png'),
(69, 32, 'c0c3765f8532426c1b23.jpg'),
(72, 32, 'Microsoft_Nostalgic_Windows_Wallpaper_4k.jpg'),
(73, 32, 'quakhu.png'),
(77, 35, 'Microsoft_Nostalgic_Windows_Wallpaper_4k.jpg'),
(78, 36, '4195f128a03862663b29.jpg'),
(79, 36, 'Astronaut.jpg'),
(80, 36, 'gf.png'),
(81, 37, '4195f128a03862663b29.jpg'),
(82, 37, 'Astronaut.jpg'),
(83, 37, 'gf.png'),
(84, 37, 'Microsoft_Nostalgic_Windows_Wallpaper_4k.jpg'),
(91, 37, 'Microsoft_Nostalgic_Windows_Wallpaper_4k.jpg'),
(92, 37, '4195f128a03862663b29.jpg'),
(93, 37, 'gf.png'),
(94, 38, 'Hoodie Croptop Tay Ngắn 1.png'),
(95, 38, 'Hoodie Croptop Tay Ngắn 2.png'),
(97, 39, 'Áo Thun Nữ Cổ Bẻ Gucci 1.png'),
(98, 39, 'Áo Thun Nữ Cổ Bẻ Gucci 2.png'),
(99, 39, 'Áo Thun Nữ Cổ Bẻ Gucci.png'),
(100, 40, 'Áo Sơ Mi Nữ Hồng Ruốc 1.png'),
(101, 40, 'Áo Sơ Mi Nữ Hồng Ruốc.png'),
(102, 41, 'Áo sơ mi nữ kẻ sọc xanh trắng 1.png'),
(103, 41, 'Áo sơ mi nữ kẻ sọc xanh trắng 2.png'),
(104, 41, 'Áo sơ mi nữ kẻ sọc xanh trắng.png'),
(105, 42, 'Áo Sơ Mi nữ Phối viền Đỏ đen 1.png'),
(106, 42, 'Áo Sơ Mi nữ Phối viền Đỏ đen.png'),
(107, 43, 'Áo sơ mi nữ sọc tay dài 1.png'),
(108, 43, 'Áo sơ mi nữ sọc tay dài.png'),
(109, 44, 'Áo sơmi chấm bi 1.jpg'),
(110, 44, 'Áo sơmi chấm bi 2.jpg'),
(111, 44, 'Áo sơmi chấm bi.png'),
(112, 45, 'Đầm Alia Dress 1.png'),
(113, 45, 'Đầm Alia Dress.png'),
(114, 46, 'quần bò ống rộng rách 2 bên (1).jpg'),
(115, 46, 'quần bò ống rộng rách 2 bên.jpg'),
(116, 47, 'quần jean nữ cạp cao 1.jpg'),
(117, 47, 'quần jean nữ cạp cao.jpg'),
(118, 48, 'Microsoft_Nostalgic_Windows_Wallpaper_4k.jpg'),
(119, 49, 'user.jpg'),
(120, 50, 'user.jpg'),
(121, 51, 'user.jpg'),
(122, 52, 'user.jpg'),
(123, 53, 'user.jpg'),
(124, 54, 'Microsoft_Nostalgic_Windows_Wallpaper_4k.jpg'),
(127, 56, 'user.jpg'),
(128, 56, 'Microsoft_Nostalgic_Windows_Wallpaper_4k.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham_hoadon`
--

CREATE TABLE `sanpham_hoadon` (
  `id` int NOT NULL,
  `id_hoa_don` int NOT NULL,
  `id_san_pham` int NOT NULL,
  `anh_sp` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ten_sp` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `gia_sp` int NOT NULL,
  `so_luong` int NOT NULL,
  `thanh_tien` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham_hoadon`
--

INSERT INTO `sanpham_hoadon` (`id`, `id_hoa_don`, `id_san_pham`, `anh_sp`, `ten_sp`, `gia_sp`, `so_luong`, `thanh_tien`) VALUES
(12, 17, 43, 'upload/Áo sơ mi nữ sọc tay dài 1.png', 'Áo sơ mi nữ sọc tay dài', 350000, 4, 350000),
(13, 18, 47, 'upload/quần jean nữ cạp cao 1.jpg', 'quần jean nữ cạp cao', 400000, 1, 400000),
(14, 19, 47, 'upload/quần jean nữ cạp cao 1.jpg', 'quần jean nữ cạp cao', 400000, 2, 800000),
(15, 21, 47, 'upload/quần jean nữ cạp cao 1.jpg', 'quần jean nữ cạp cao', 400000, 1, 400000),
(16, 22, 43, 'upload/Áo sơ mi nữ sọc tay dài 1.png', 'Áo sơ mi nữ sọc tay dài', 350000, 3, 1050000),
(17, 23, 43, 'upload/Áo sơ mi nữ sọc tay dài 1.png', 'Áo sơ mi nữ sọc tay dài', 350000, 1, 350000),
(18, 24, 47, 'upload/quần jean nữ cạp cao 1.jpg', 'quần jean nữ cạp cao', 400000, 1, 400000),
(19, 25, 38, 'upload/Hoodie Croptop Tay Ngắn 1.png', 'Hoodie Croptop Tay Ngắn', 300000, 1, 300000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int NOT NULL,
  `ten_dang_nhap` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `mat_khau` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `so_dien_thoai` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `dia_chi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci,
  `ho_ten` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `nam_sinh` date DEFAULT NULL,
  `ngay_dang_ky` date NOT NULL,
  `anh_tk` text COLLATE utf8mb4_vietnamese_ci,
  `vai_tro` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `ten_dang_nhap`, `mat_khau`, `email`, `so_dien_thoai`, `dia_chi`, `ho_ten`, `nam_sinh`, `ngay_dang_ky`, `anh_tk`, `vai_tro`) VALUES
(1, 'admin', '123456', 'admin@gmail.com', NULL, NULL, 'Nguyễn Trung Xuyên', NULL, '2023-11-16', '4195f128a03862663b29.jpg', 3),
(3, 'nhanvien', '123456', 'nhanvien@gmail.com', NULL, NULL, 'em xuyên ', NULL, '2023-11-01', NULL, 2),
(6, 'khachhang', '123456', '43twr', NULL, NULL, 'fdwef', NULL, '2023-11-01', NULL, 1),
(9, 'xuyenqua', '123456', 'xuyenqua@gmail.com', '0359956926', 'Phú Châu- Ba Vì-Hà Nội', 'Nguyễn Trung Xuyên', '2004-06-01', '2023-11-20', NULL, 1),
(10, 'xuyenqua1', '123456', 'ntx01062004@gmail.com', NULL, NULL, 'Nguyễn Trung Xuyên', NULL, '2023-11-20', NULL, 1),
(11, 'angdovipromax', 'toibanpubgkhong', 'thanhdo112004@gmail.com', NULL, NULL, 'Nguyễn Thế Thành Đô', NULL, '2023-12-03', NULL, 3),
(12, 'uy', 'vaogamethongaang', 'dophuonguy1209@gmail.com', NULL, NULL, 'Nguyễn Trung Xuyên', NULL, '2023-12-03', NULL, 1),
(15, 'quang', '123456', 'quang@gmail.com', NULL, NULL, '', NULL, '2023-12-05', NULL, 3),
(16, 'do', '123456', 'do@gmail.com', NULL, NULL, 'Đô', NULL, '2023-12-05', NULL, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trangthai`
--

CREATE TABLE `trangthai` (
  `id` int NOT NULL,
  `ten_tt` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `trangthai`
--

INSERT INTO `trangthai` (`id`, `ten_tt`) VALUES
(1, 'Đơn hàng mới'),
(2, 'Đang xử lý'),
(3, 'Đang giao hàng'),
(4, 'Đã giao hàng'),
(5, 'Đã hủy'),
(6, 'Hoàn thành');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vaitro`
--

CREATE TABLE `vaitro` (
  `id` int NOT NULL,
  `ten_vt` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `vaitro`
--

INSERT INTO `vaitro` (`id`, `ten_vt`) VALUES
(1, 'Khách hàng'),
(2, 'Nhân viên'),
(3, 'Quản trị viên');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
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
-- Chỉ mục cho bảng `magiamgia`
--
ALTER TABLE `magiamgia`
  ADD PRIMARY KEY (`id_giamgia`);

--
-- Chỉ mục cho bảng `pttt`
--
ALTER TABLE `pttt`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham_anh`
--
ALTER TABLE `sanpham_anh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham_hoadon`
--
ALTER TABLE `sanpham_hoadon`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `vaitro`
--
ALTER TABLE `vaitro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `magiamgia`
--
ALTER TABLE `magiamgia`
  MODIFY `id_giamgia` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `pttt`
--
ALTER TABLE `pttt`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `sanpham_anh`
--
ALTER TABLE `sanpham_anh`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT cho bảng `sanpham_hoadon`
--
ALTER TABLE `sanpham_hoadon`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `vaitro`
--
ALTER TABLE `vaitro`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
