-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Mar 2024 pada 12.50
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `master_jurnal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE `agenda` (
  `kodeagenda` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` varchar(200) NOT NULL,
  `kodeguru` varchar(25) NOT NULL,
  `kodemapel` varchar(100) NOT NULL,
  `kelas` varchar(15) NOT NULL,
  `materi` text NOT NULL,
  `jumlahsiswa` varchar(3) NOT NULL,
  `tidakhadir` varchar(3) NOT NULL,
  `ijin` varchar(3) NOT NULL,
  `photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `agenda`
--

INSERT INTO `agenda` (`kodeagenda`, `tanggal`, `waktu`, `kodeguru`, `kodemapel`, `kelas`, `materi`, `jumlahsiswa`, `tidakhadir`, `ijin`, `photo`) VALUES
(4, '2021-06-04', '12:00:00', '123456', 'Bahasa Indonesia', 'X Mipa 1', 'tes', '23', '12', '2', 'http://localhost/jurnalmengajar/uploads/files/szl203g_pj8w1t5.jpg'),
(5, '2021-06-03', '12:00:00', '123456', 'bahasa inggris', 'X Mipa 1', 'tes', '34', '1', '2', 'http://localhost/jurnalmengajar/uploads/files/w9jer7ygi_fsol4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `file`
--

CREATE TABLE `file` (
  `id` int(15) NOT NULL,
  `kodeguru` varchar(35) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `file` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `file`
--

INSERT INTO `file` (`id`, `kodeguru`, `nama_file`, `file`) VALUES
(2, '87654321', 'Buku Bahasa', 'http://localhost/jurnalmengajar/uploads/files/dftqhzjn6u0i93s.pdf'),
(3, '123456', 'Buku Bahasa', 'Notice:  Undefined index: id_user in D:\\xampp\\htdocs\\jurnalmengajar\\admin\\config.php on line 99Notice:  Undefined index: username in D:\\xampp\\htdocs\\jurnalmengajar\\admin\\config.php on line 100http://localhost/jurnalmengajar/admin/uploads/files/ripy3x0gf_hbl7q.pdf'),
(4, '654321', 'Buku Bahasae', 'Notice:  Undefined index: id_user in D:\\xampp\\htdocs\\jurnalmengajar\\admin\\config.php on line 99Notice:  Undefined index: username in D:\\xampp\\htdocs\\jurnalmengajar\\admin\\config.php on line 100http://localhost/jurnalmengajar/admin/uploads/files/f349pxu5d21kva8.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `kodeguru` varchar(25) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama` varchar(40) NOT NULL,
  `tempatlahir` varchar(40) NOT NULL,
  `tanggallahir` date NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `nip` varchar(35) NOT NULL,
  `login_session_key` varchar(255) DEFAULT NULL,
  `email_status` varchar(255) DEFAULT NULL,
  `password_expire_date` datetime DEFAULT '2021-08-16 00:00:00',
  `password_reset_key` varchar(255) DEFAULT NULL,
  `user_role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`kodeguru`, `password`, `nama`, `tempatlahir`, `tanggallahir`, `alamat`, `email`, `nohp`, `photo`, `nip`, `login_session_key`, `email_status`, `password_expire_date`, `password_reset_key`, `user_role_id`) VALUES
('1', '$2y$10$TrUfj.H06m8uLvFf0H93z.J/rfXDiokQdS58K2iWedRmWGwbf4r1m', 'H. Ainur Rofiq', 'Gresik', '2024-03-01', 'Jl. Raya Boteng, Desa Boteng', 'guru@gmail.com', '', '', '', NULL, NULL, '2021-08-16 00:00:00', NULL, 2),
('123456', '$2y$10$08N/btGqS/TqpfQ7Ix.uGuoHNU13b6Aqoi1xoyoqbX6JO9DiH/cae', 'Asima', 'Palangka Raya', '2021-05-16', 'Palangka Raya', 'guru@guru.sma.belajar.id', '0877787828773', 'http://localhost/jurnalmengajar/uploads/files/w_cegrlsiz0o7bq.jpg', '87654321', NULL, NULL, '2021-08-16 00:00:00', NULL, 2),
('52', '$2y$10$lID5.0d8LfrBUyRO7hokO.E79C4jCJgh3J6IU7eMr01VwCfNyJuvu', 'A&#39;an Prastiyo, S.Kom', 'Gresik', '2024-02-01', 'Pulo Rejo', 'aanprastiyo42@gmail.com', '085602649707', '', '199302012022211006', NULL, NULL, '2021-08-16 00:00:00', NULL, 2),
('654321', '$2y$10$0MqwaKREYYzIpwGBQL3UkOsMWHI1lDnrj9r5PIYKrxHSPzkP1fEwu', '654321', '654321', '2021-07-19', '654321', '654321@yahoo.com', '654321', 'http://localhost/jurnalmengajar/admin/uploads/files/sjebq48176hipkf.png', '197807212009042001', NULL, NULL, '2021-08-16 00:00:00', NULL, 2),
('Admin', '$2y$10$08N/btGqS/TqpfQ7Ix.uGuoHNU13b6Aqoi1xoyoqbX6JO9DiH/cae', 'admin', '', '0000-00-00', 'dfdfd', '', 'dadad', '', '23232', NULL, NULL, '2021-08-16 00:00:00', NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(15) NOT NULL,
  `kelas` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kelas`) VALUES
(1, 'X 1'),
(2, 'X 2'),
(3, 'X 3'),
(4, 'X 4'),
(5, 'X 5'),
(6, 'X 6'),
(7, 'X 6'),
(8, 'X 7'),
(9, 'X 8'),
(10, 'X 9'),
(11, 'X 10'),
(12, 'X 11'),
(13, 'XI 1'),
(14, 'XI 2'),
(15, 'XI 3'),
(16, 'XI 4'),
(17, 'XI 5'),
(18, 'XI 6'),
(19, 'XI 7'),
(20, 'XI 8'),
(21, 'XI 9'),
(22, 'XI 10'),
(23, 'XI 11'),
(24, 'XII 1'),
(25, 'XII 2'),
(26, 'XII 3'),
(27, 'XII 4'),
(28, 'XII 5'),
(29, 'XII 6'),
(30, 'XII 7'),
(31, 'XII 8'),
(32, 'XII 9'),
(33, 'XII 10'),
(34, 'XII 11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `kodemapel` int(5) NOT NULL,
  `namamapel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`kodemapel`, `namamapel`) VALUES
(3, 'Bahasa Inggris'),
(4, 'PJOK'),
(5, 'Bahasa Indonesia'),
(6, 'Matematika'),
(7, 'PKn'),
(8, 'Sejarah'),
(9, 'Seni Rupa'),
(10, 'Bimbingan Konseling'),
(11, 'PKWU'),
(12, 'Bahasa Jawa'),
(13, 'Pendidikan Agama Islam'),
(14, 'Biologi'),
(15, 'Kimia'),
(16, 'Fisika'),
(17, 'Informatika'),
(18, 'Geografi'),
(19, 'Ekonomi'),
(20, 'Sosiologi'),
(21, 'Antropologi'),
(22, 'Bahasa Inggris TL'),
(23, 'Bahasa Jerman'),
(24, 'Matematika TL');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `rekap_file`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `rekap_file` (
`id` int(15)
,`kodeguru` varchar(35)
,`nama_file` varchar(100)
,`file` varchar(500)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'Administrator'),
(2, 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_permissions`
--

CREATE TABLE `role_permissions` (
  `permission_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `action_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `role_permissions`
--

INSERT INTO `role_permissions` (`permission_id`, `role_id`, `page_name`, `action_name`) VALUES
(882, 1, 'agenda', 'list'),
(883, 1, 'agenda', 'view'),
(884, 1, 'agenda', 'add'),
(885, 1, 'agenda', 'edit'),
(886, 1, 'agenda', 'editfield'),
(887, 1, 'agenda', 'delete'),
(888, 1, 'agenda', 'import_data'),
(889, 1, 'guru', 'list'),
(890, 1, 'guru', 'view'),
(891, 1, 'guru', 'add'),
(892, 1, 'guru', 'edit'),
(893, 1, 'guru', 'editfield'),
(894, 1, 'guru', 'delete'),
(895, 1, 'guru', 'import_data'),
(896, 1, 'mapel', 'list'),
(897, 1, 'mapel', 'view'),
(898, 1, 'mapel', 'add'),
(899, 1, 'mapel', 'edit'),
(900, 1, 'mapel', 'editfield'),
(901, 1, 'mapel', 'delete'),
(902, 1, 'mapel', 'import_data'),
(903, 1, 'guru', 'userregister'),
(904, 1, 'guru', 'accountedit'),
(905, 1, 'guru', 'accountview'),
(906, 1, 'role_permissions', 'list'),
(907, 1, 'role_permissions', 'view'),
(908, 1, 'role_permissions', 'add'),
(909, 1, 'role_permissions', 'edit'),
(910, 1, 'role_permissions', 'editfield'),
(911, 1, 'role_permissions', 'delete'),
(912, 1, 'roles', 'list'),
(913, 1, 'roles', 'view'),
(914, 1, 'roles', 'add'),
(915, 1, 'roles', 'edit'),
(916, 1, 'roles', 'editfield'),
(917, 1, 'roles', 'delete'),
(918, 1, 'kelas', 'list'),
(919, 1, 'kelas', 'view'),
(920, 1, 'kelas', 'add'),
(921, 1, 'kelas', 'edit'),
(922, 1, 'kelas', 'editfield'),
(923, 1, 'kelas', 'delete'),
(924, 1, 'file', 'list'),
(925, 1, 'file', 'view'),
(926, 1, 'file', 'add'),
(927, 1, 'file', 'edit'),
(928, 1, 'file', 'editfield'),
(929, 1, 'file', 'delete'),
(930, 1, 'rekap_agenda', 'list'),
(931, 1, 'rekap_file', 'list'),
(932, 1, 'rekap_file', 'view'),
(933, 2, 'agenda', 'list'),
(934, 2, 'agenda', 'view'),
(935, 2, 'agenda', 'add'),
(936, 2, 'agenda', 'edit'),
(937, 2, 'agenda', 'editfield'),
(938, 2, 'agenda', 'delete'),
(939, 2, 'guru', 'accountedit'),
(940, 2, 'guru', 'accountview'),
(941, 2, 'file', 'list'),
(942, 2, 'file', 'view'),
(943, 2, 'file', 'add'),
(944, 2, 'file', 'edit'),
(945, 2, 'file', 'editfield'),
(946, 2, 'file', 'delete');

-- --------------------------------------------------------

--
-- Struktur untuk view `rekap_file`
--
DROP TABLE IF EXISTS `rekap_file`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `rekap_file`  AS SELECT `file`.`id` AS `id`, `file`.`kodeguru` AS `kodeguru`, `file`.`nama_file` AS `nama_file`, `file`.`file` AS `file` FROM `file``file`  ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`kodeagenda`);

--
-- Indeks untuk tabel `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`kodeguru`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`kodemapel`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`),
  ADD UNIQUE KEY `role_name` (`role_name`);

--
-- Indeks untuk tabel `role_permissions`
--
ALTER TABLE `role_permissions`
  ADD PRIMARY KEY (`permission_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agenda`
--
ALTER TABLE `agenda`
  MODIFY `kodeagenda` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `file`
--
ALTER TABLE `file`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `mapel`
--
ALTER TABLE `mapel`
  MODIFY `kodemapel` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `role_permissions`
--
ALTER TABLE `role_permissions`
  MODIFY `permission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=947;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
