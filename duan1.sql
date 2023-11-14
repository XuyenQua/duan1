-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th10 14, 2023 lúc 02:08 PM
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
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_binhluan`
--

CREATE TABLE `tb_binhluan` (
  `ID` int NOT NULL,
  `Product_ID` int NOT NULL,
  `User_ID` int NOT NULL,
  `Comment` text COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_danhmuc`
--

CREATE TABLE `tb_danhmuc` (
  `ID` int NOT NULL,
  `Name` varchar(255) COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `Image` text COLLATE utf8mb3_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_donhang`
--

CREATE TABLE `tb_donhang` (
  `ID` int NOT NULL,
  `Customer_ID` int NOT NULL,
  `Payment` int NOT NULL,
  `Shipping_Address` text COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `Shipping_fee` int NOT NULL,
  `Order_Date` timestamp NOT NULL,
  `Total_Amount` decimal(10,0) NOT NULL,
  `Status` varchar(20) COLLATE utf8mb3_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_donhang_ct`
--

CREATE TABLE `tb_donhang_ct` (
  `Order_Detail_ID` int NOT NULL,
  `Order_ID` int NOT NULL,
  `Product_ID` int NOT NULL,
  `Quantity` int NOT NULL,
  `Price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_lienhe`
--

CREATE TABLE `tb_lienhe` (
  `Contact_ID` int NOT NULL,
  `First_Name` varchar(100) COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `Last_Name` varchar(100) COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `Phone` varchar(20) COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `Message` text COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `Contact_Date` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_payment_methods`
--

CREATE TABLE `tb_payment_methods` (
  `ID` int NOT NULL,
  `Name` text COLLATE utf8mb3_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_role`
--

CREATE TABLE `tb_role` (
  `ID` int NOT NULL,
  `Name` varchar(50) COLLATE utf8mb3_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_sanpham`
--

CREATE TABLE `tb_sanpham` (
  `ID` int NOT NULL,
  `Name` varchar(255) COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `Price` decimal(10,0) NOT NULL,
  `Quantity` int NOT NULL,
  `Image` int NOT NULL,
  `Brand` varchar(255) COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `Description` text COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `Category_ID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_sanpham_img`
--

CREATE TABLE `tb_sanpham_img` (
  `ID` int NOT NULL,
  `ID_Product` int NOT NULL,
  `image_URL` text COLLATE utf8mb3_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_status`
--

CREATE TABLE `tb_status` (
  `ID` int NOT NULL,
  `Name` text COLLATE utf8mb3_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_user`
--

CREATE TABLE `tb_user` (
  `ID` int NOT NULL,
  `Username` varchar(255) COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `Passwword` varchar(255) COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `Phone` int NOT NULL,
  `Address` text COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `Full_Name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `Birthdate` date NOT NULL,
  `Registration_Date` date NOT NULL,
  `Role` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_voucher`
--

CREATE TABLE `tb_voucher` (
  `ID` int NOT NULL,
  `Name` text COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `Discount_Code` text COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `Discount` decimal(10,0) NOT NULL,
  `Time_Start` date NOT NULL,
  `Time_End` date NOT NULL,
  `Condition_Apply` text COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `Applicable_Products` text COLLATE utf8mb3_vietnamese_ci NOT NULL,
  `Status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_vietnamese_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tb_binhluan`
--
ALTER TABLE `tb_binhluan`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tb_danhmuc`
--
ALTER TABLE `tb_danhmuc`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tb_donhang`
--
ALTER TABLE `tb_donhang`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tb_donhang_ct`
--
ALTER TABLE `tb_donhang_ct`
  ADD PRIMARY KEY (`Order_Detail_ID`);

--
-- Chỉ mục cho bảng `tb_lienhe`
--
ALTER TABLE `tb_lienhe`
  ADD PRIMARY KEY (`Contact_ID`);

--
-- Chỉ mục cho bảng `tb_payment_methods`
--
ALTER TABLE `tb_payment_methods`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tb_sanpham`
--
ALTER TABLE `tb_sanpham`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tb_sanpham_img`
--
ALTER TABLE `tb_sanpham_img`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tb_voucher`
--
ALTER TABLE `tb_voucher`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tb_donhang`
--
ALTER TABLE `tb_donhang`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_donhang_ct`
--
ALTER TABLE `tb_donhang_ct`
  MODIFY `Order_Detail_ID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_lienhe`
--
ALTER TABLE `tb_lienhe`
  MODIFY `Contact_ID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_payment_methods`
--
ALTER TABLE `tb_payment_methods`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_voucher`
--
ALTER TABLE `tb_voucher`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
