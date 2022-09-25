-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Okt 2019 pada 09.10
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posyandu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `balita`
--

CREATE TABLE `balita` (
  `id_balita` int(11) NOT NULL,
  `nama_balita` varchar(128) NOT NULL,
  `tanggal_lahir` varchar(128) NOT NULL,
  `jenis_kelamin` varchar(128) NOT NULL,
  `nama_ibu` varchar(128) NOT NULL,
  `nama_ayah` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `panjang_badan` int(11) NOT NULL,
  `berat_lahir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `balita`
--

INSERT INTO `balita` (`id_balita`, `nama_balita`, `tanggal_lahir`, `jenis_kelamin`, `nama_ibu`, `nama_ayah`, `alamat`, `panjang_badan`, `berat_lahir`) VALUES
(6, 'Kemal Mualim', '12 agustus 2014', 'laki-laki', 'Sri mulyani', 'Unang', 'Perum warnasari rt/rw 05/05', 106, 17),
(7, 'Dimas Prasetyo', '3 juni 2015', 'laki-laki', 'sri sulastri', 'takdir', 'Perum warnasari rt/rw 05/05', 100, 20),
(8, 'Rivan nur Rizki', '2 juni 2014', 'laki-laki', 'iskarni', 'Ridwan Sam', 'Perum warnasari rt/rw 04/05', 110, 20),
(11, 'Sarah Suci Wulanifardi', '12 Oktober 2015', 'Perempuan', 'Anita Ruby', 'Septiansyah', 'Perum warnasari rt/rw 04/05', 115, 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `imunisasi`
--

CREATE TABLE `imunisasi` (
  `id_balita` int(11) NOT NULL,
  `nama_balita` varchar(128) NOT NULL,
  `tanggal_imunisasi` varchar(128) NOT NULL,
  `jenis_imunisasi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `imunisasi`
--

INSERT INTO `imunisasi` (`id_balita`, `nama_balita`, `tanggal_imunisasi`, `jenis_imunisasi`) VALUES
(1, 'Dina Lusiana', '12 April 2019', 'Influenza, Tifoid'),
(2, 'Kemal Mualim', '12 April 2019', 'Hepatitis A, Influenza, Tifoid'),
(3, 'Rio Kurniawan', '12 April 2019', 'Hepatitis A, Influenza'),
(4, 'M Irham Triawan', '12 April 2019', ' Influenza, Tifoid');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penimbangan`
--

CREATE TABLE `penimbangan` (
  `id_penimbangan` int(11) NOT NULL,
  `nama_anak` varchar(128) NOT NULL,
  `tgl_timbang` varchar(128) NOT NULL,
  `usia` varchar(128) NOT NULL,
  `berat_badan` varchar(128) NOT NULL,
  `lingkar_perut` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penimbangan`
--

INSERT INTO `penimbangan` (`id_penimbangan`, `nama_anak`, `tgl_timbang`, `usia`, `berat_badan`, `lingkar_perut`) VALUES
(1, 'Riyo Kurniawan', '12 april 2019', '5 tahun', '20', '64'),
(2, 'Dimas Prasetyo', '12 april 2019', '5 tahun', '25', '55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(7, 'Bambang Solehudin', 'bamsolwibu@gmail.com', '22922.jpg', '$2y$10$AZRLygHmwTZkCqJytg6Sj.7nUCZ5Sh95VCc.xnGWqUTdQ2xbDHVqu', 1, 1, 1554475245),
(14, 'Bambang Solehudin', 'bamss@gmail.com', 'default.jpg', '$2y$10$.DF2FPfg9jewKyFVc6rzuOMbJA/lYUknB0hGhysyy1zMQdh8vJKq.', 1, 1, 1555673609),
(15, 'zaki', 'ahmadin.zaki@gmail.com', 'FILE4095.JPG', '$2y$10$ADqJjvIPd9c.cvKvxMNJ.eiF7SAYQdUgH42BTKQu3kSXj27TLKFw.', 1, 1, 1564132586),
(17, 'dana', 'dana@gmail.com', 'default.jpg', '$2y$10$7U81NqE/D3vymHDYTmw4n.zfWxL6csKmU7TpmSZiRl.dN2NCcfoIO', 2, 1, 1564156047),
(18, 'dono', 'kasino@gmail.com', '1534157105821.jpg', '$2y$10$2.sGxPDS0gE7k5Gx1KgD5u8JYIMp6LB.l5v4k.HMIjz/6sr1kANhi', 2, 1, 1565792431),
(19, 'zaki', 'zaki@gmail.com', 'IMG_20180812_204121.jpg', '$2y$10$wG5iNvdydSpH7WDmBUk50O08J16Ha9IjCgvp22jynp.a5lshEr4aO', 2, 1, 1570518435);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(5, 1, 7),
(6, 2, 7),
(7, 1, 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(7, 'Data Posyandu'),
(9, 'Menu'),
(13, 'ccc'),
(14, 'hkm'),
(15, 'ccc'),
(16, 'adsasas'),
(17, 'woknjklhuiklknkmkjnlmnjkm;,ljul,jl');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'Dashboard', 'user/dashboard', 'fas fa-fw fa-tachometer-alt', 1),
(3, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(10, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(15, 7, 'Imunisasi', 'user/imunisasi', 'fas fa-syringe', 1),
(16, 7, 'Balita', 'user/balita', 'fas fa-baby', 1),
(18, 7, 'Penimbangan', 'user/penimbangan', 'fas fa-weight', 1),
(21, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(22, 9, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(23, 9, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(24, 1, 'Role', 'admin/role', 'fas fa-fw fa-user', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `balita`
--
ALTER TABLE `balita`
  ADD PRIMARY KEY (`id_balita`);

--
-- Indeks untuk tabel `imunisasi`
--
ALTER TABLE `imunisasi`
  ADD PRIMARY KEY (`id_balita`);

--
-- Indeks untuk tabel `penimbangan`
--
ALTER TABLE `penimbangan`
  ADD PRIMARY KEY (`id_penimbangan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `balita`
--
ALTER TABLE `balita`
  MODIFY `id_balita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `imunisasi`
--
ALTER TABLE `imunisasi`
  MODIFY `id_balita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `penimbangan`
--
ALTER TABLE `penimbangan`
  MODIFY `id_penimbangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
