-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Des 2022 pada 14.46
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pemesanan_tiket_bus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_pemesanan_tiket`
--

CREATE TABLE `tabel_pemesanan_tiket` (
  `Nama_pemesan` varchar(225) NOT NULL,
  `No_identitas` int(16) NOT NULL,
  `No_hp` int(12) NOT NULL,
  `Kelas_penumpang` varchar(100) NOT NULL,
  `Jadwal` date NOT NULL,
  `Jumlah_penumpang` int(100) NOT NULL,
  `Jumlah_penumpang_lansia` int(100) NOT NULL,
  `Harga_tiket` varchar(225) NOT NULL,
  `Total_bayar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_pemesanan_tiket`
--

INSERT INTO `tabel_pemesanan_tiket` (`Nama_pemesan`, `No_identitas`, `No_hp`, `Kelas_penumpang`, `Jadwal`, `Jumlah_penumpang`, `Jumlah_penumpang_lansia`, `Harga_tiket`, `Total_bayar`) VALUES
('Ryan', 1, 12343, 'bisnis', '2022-09-15', 2, 2, '100000', '400000'),
('Rama', 2, 12344, 'ekonomi', '2022-09-15', 12, 5, '70000', '1200000'),
('Ririn', 3, 12345, 'eksekutif', '2022-09-15', 12, 5, '120000', '1100000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
