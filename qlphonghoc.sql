-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2024 at 06:02 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlphonghoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `loaiphong`
--

CREATE TABLE `loaiphong` (
  `MaLoaiPhong` varchar(500) NOT NULL,
  `TenLoaiPhong` varchar(500) NOT NULL,
  `MoTa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaiphong`
--

INSERT INTO `loaiphong` (`MaLoaiPhong`, `TenLoaiPhong`, `MoTa`) VALUES
('LOAIPHONG01', 'Phòng thực hành CNTT', 'Phòng thực hành khoa công nghệ thông tin, hỗ trợ sinh viên học thực hành trên máy.'),
('LOAIPHONG02', 'Phòng học toán', 'Phòng chức năng dành cho sinh viên và giảng viên nghiên cứu về toán học.');

-- --------------------------------------------------------

--
-- Table structure for table `phonghoc`
--

CREATE TABLE `phonghoc` (
  `MaPhongHoc` varchar(500) NOT NULL,
  `DienTich` int(11) NOT NULL,
  `SucChua` int(11) NOT NULL,
  `MaLoaiPhong` varchar(500) NOT NULL,
  `MaViTriPhong` varchar(500) NOT NULL,
  `TinhTrang` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phonghoc`
--

INSERT INTO `phonghoc` (`MaPhongHoc`, `DienTich`, `SucChua`, `MaLoaiPhong`, `MaViTriPhong`, `TinhTrang`) VALUES
('PHONG202', 15, 20, 'LOAIPHONG01', 'VITRI02', 1),
('PHONG203', 20, 15, 'LOAIPHONG02', 'VITRI02', 1),
('PHONG204', 15, 20, 'LOAIPHONG02', 'VITRI01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `phong_quanlyphong`
--

CREATE TABLE `phong_quanlyphong` (
  `MaPhongHoc` varchar(500) NOT NULL,
  `MaQuanLyPhong` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phong_quanlyphong`
--

INSERT INTO `phong_quanlyphong` (`MaPhongHoc`, `MaQuanLyPhong`) VALUES
('PHONG202', 'NHANVIEN02'),
('PHONG203', 'NHANVIEN02'),
('PHONG204', 'NHANVIEN01'),
('PHONG204', 'NHANVIEN02');

-- --------------------------------------------------------

--
-- Table structure for table `quanlyphong`
--

CREATE TABLE `quanlyphong` (
  `MaQuanLyPhong` varchar(500) NOT NULL,
  `TenQuanLyPhong` varchar(255) DEFAULT NULL,
  `DiaChi` varchar(255) DEFAULT NULL,
  `SoDienThoai` varchar(20) DEFAULT NULL,
  `ChucVu` int(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quanlyphong`
--

INSERT INTO `quanlyphong` (`MaQuanLyPhong`, `TenQuanLyPhong`, `DiaChi`, `SoDienThoai`, `ChucVu`) VALUES
('NHANVIEN01', 'Nguyễn Văn An', 'Tầng 2, Tòa ABC, Quận XYZ1', '0888555999', 2),
('NHANVIEN02', 'Nguyễn Văn Bình', 'Tầng 2, Tòa ABC, Quận XYZ1', '0999888999', 1);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `MaTaiKhoan` varchar(255) NOT NULL,
  `HoTen` varchar(255) NOT NULL,
  `TaiKhoan` varchar(500) NOT NULL,
  `MatKhau` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`MaTaiKhoan`, `HoTen`, `TaiKhoan`, `MatKhau`) VALUES
('1', 'Quản Trị Viên', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `thietbiphong`
--

CREATE TABLE `thietbiphong` (
  `MaThietBi` varchar(500) NOT NULL,
  `TenThietBi` varchar(500) NOT NULL,
  `MoTa` text NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `MaPhongHoc` varchar(500) NOT NULL,
  `TrangThai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thietbiphong`
--

INSERT INTO `thietbiphong` (`MaThietBi`, `TenThietBi`, `MoTa`, `SoLuong`, `MaPhongHoc`, `TrangThai`) VALUES
('THIETBI01', 'Máy tính bàn', 'Máy tính để bàn có kết nối Internet', 25, 'PHONG203', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vitriphong`
--

CREATE TABLE `vitriphong` (
  `MaViTriPhong` varchar(500) NOT NULL,
  `ToaNha` varchar(500) NOT NULL,
  `Tang` varchar(500) NOT NULL,
  `CoSo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vitriphong`
--

INSERT INTO `vitriphong` (`MaViTriPhong`, `ToaNha`, `Tang`, `CoSo`) VALUES
('VITRI01', 'Tòa nhà E', 'Tầng 02', 'Cơ sở chính'),
('VITRI02', 'Tòa nhà A1', 'Tầng 04', 'Cơ sở chính');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loaiphong`
--
ALTER TABLE `loaiphong`
  ADD PRIMARY KEY (`MaLoaiPhong`);

--
-- Indexes for table `phonghoc`
--
ALTER TABLE `phonghoc`
  ADD PRIMARY KEY (`MaPhongHoc`),
  ADD KEY `MaLoaiPhong` (`MaLoaiPhong`,`MaViTriPhong`),
  ADD KEY `MaViTriPhong` (`MaViTriPhong`);

--
-- Indexes for table `phong_quanlyphong`
--
ALTER TABLE `phong_quanlyphong`
  ADD PRIMARY KEY (`MaPhongHoc`,`MaQuanLyPhong`),
  ADD KEY `MaQuanLyPhong` (`MaQuanLyPhong`);

--
-- Indexes for table `quanlyphong`
--
ALTER TABLE `quanlyphong`
  ADD PRIMARY KEY (`MaQuanLyPhong`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`MaTaiKhoan`);

--
-- Indexes for table `thietbiphong`
--
ALTER TABLE `thietbiphong`
  ADD PRIMARY KEY (`MaThietBi`),
  ADD KEY `MaPhongHoc` (`MaPhongHoc`);

--
-- Indexes for table `vitriphong`
--
ALTER TABLE `vitriphong`
  ADD PRIMARY KEY (`MaViTriPhong`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `phonghoc`
--
ALTER TABLE `phonghoc`
  ADD CONSTRAINT `phonghoc_ibfk_1` FOREIGN KEY (`MaViTriPhong`) REFERENCES `vitriphong` (`MaViTriPhong`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `phonghoc_ibfk_2` FOREIGN KEY (`MaLoaiPhong`) REFERENCES `loaiphong` (`MaLoaiPhong`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `phong_quanlyphong`
--
ALTER TABLE `phong_quanlyphong`
  ADD CONSTRAINT `phong_quanlyphong_ibfk_1` FOREIGN KEY (`MaPhongHoc`) REFERENCES `phonghoc` (`MaPhongHoc`),
  ADD CONSTRAINT `phong_quanlyphong_ibfk_2` FOREIGN KEY (`MaQuanLyPhong`) REFERENCES `quanlyphong` (`MaQuanLyPhong`);

--
-- Constraints for table `thietbiphong`
--
ALTER TABLE `thietbiphong`
  ADD CONSTRAINT `thietbiphong_ibfk_1` FOREIGN KEY (`MaPhongHoc`) REFERENCES `phonghoc` (`MaPhongHoc`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
