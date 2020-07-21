-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 06 Jul 2020 pada 02.45
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sitaduk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota_keluarga`
--

CREATE TABLE `anggota_keluarga` (
  `id_ak` varchar(10) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `nama` varchar(150) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `ttl` text DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `pekerjaan` varchar(20) DEFAULT NULL,
  `id_kepkel` varchar(10) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jenis_kelamin` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota_keluarga`
--

INSERT INTO `anggota_keluarga` (`id_ak`, `nik`, `nama`, `alamat`, `ttl`, `agama`, `pekerjaan`, `id_kepkel`, `created_date`, `updated_at`, `jenis_kelamin`) VALUES
('31EJDG', '231937723', 'Hesti', 'Jl.H.Icang Rt08/Rw01', 'Depok', 'Islam', 'karyawan', '34WZYH', '2020-07-05 04:31:11', NULL, 'Perempuan'),
('52NCQD', '324345665678', 'james', 'Jalan Merbabu', 'Texas', 'Islam', 'Freelancer IT', '52HRAA', '2020-07-05 23:47:44', '2020-07-05 23:48:46', 'Laki-laki'),
('53TMKK', '32320847540', 'ayu putri', 'Jl.H.Icang RT08/RW01', 'Depok', 'Islam', 'Pelajar', '84JDRH', '2020-07-04 09:42:15', NULL, 'Perempuan'),
('81SKOH', '3301126507040003', 'Novela Siswidiyana', 'JL.H.Icang RT08/RW01', 'Bogor', 'Islam', 'Pelajar', '17HXLK', '2020-07-02 13:33:04', NULL, 'Perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kepala_keluarga`
--

CREATE TABLE `kepala_keluarga` (
  `id_kepkel` varchar(10) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(155) DEFAULT NULL,
  `ttl` text DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `no_kk` int(25) NOT NULL,
  `id_users` varchar(10) DEFAULT NULL,
  `jenis_kelamin` varchar(15) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kepala_keluarga`
--

INSERT INTO `kepala_keluarga` (`id_kepkel`, `nik`, `nama`, `ttl`, `alamat`, `agama`, `pekerjaan`, `no_kk`, `id_users`, `jenis_kelamin`, `status`) VALUES
('17HXLK', '3301126507040002', 'Novita Siswidiyati', 'Bogor', 'Jl.H.Icang RT08/RW01', 'Islam', 'Karyawan', 2147483647, '17HXLK', 'Perempuan', 'tetap'),
('34WZYH', '2323978715287', 'dikki', 'Depok', 'Jl.H.Icang RT08/RW01', 'Islam', 'karyawan', 2147483647, '34WZYH', 'Laki-laki', 'tetap'),
('52HRAA', '543765876456', 'Steven', 'Amrik', 'Jalan Keradenan', 'Islam', 'Freelancer IT', 2147483647, '52HRAA', 'Laki-laki', 'pendatang'),
('84JDRH', '3301126507040023', 'Fikri Ramadan', 'Jakarta', 'Jl.H.Icang RT08/RW01', 'Islam', 'Karyawan', 2147483647, '84JDRH', 'Laki-laki', 'tetap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan_surat`
--

CREATE TABLE `pengajuan_surat` (
  `id_surat` varchar(10) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `maksud_keperluan` text NOT NULL,
  `status` enum('Pengajuan','Sedang Proses','Selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengajuan_surat`
--

INSERT INTO `pengajuan_surat` (`id_surat`, `nik`, `maksud_keperluan`, `status`) VALUES
('17DGGL', '3301126507040002', 'dfdsf', 'Pengajuan'),
('46IXIY', '543765876456', 'gfdgd', 'Pengajuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_users` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `role` enum('1','2','3') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_users`, `username`, `password`, `create_date`, `role`) VALUES
('', 'admin', '0192023a7bbd73250516f069df18b500', '2020-07-05 05:47:35', '1'),
('17HXLK', 'novita', '3ab58f794c8cf3a448e1b43a150ed181', '2020-07-05 05:47:35', '2'),
('34WZYH', 'dikki', '1e89435afc8dd05c1fe8f2682801ec4f', '2020-07-05 04:29:22', '2'),
('46EHQV', 'james', '9ba36afc4e560bf811caefc0c7fddddf', '2020-07-05 15:21:18', '2'),
('52HRAA', 'stev', '0db26f24e29c8336ef6f1ea0f50738d9', '2020-07-05 15:23:05', '2'),
('84JDRH', 'fikri', '5d4864249b21de08642aa6ff4178b346', '2020-07-02 16:24:08', '2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota_keluarga`
--
ALTER TABLE `anggota_keluarga`
  ADD PRIMARY KEY (`id_ak`,`nik`),
  ADD KEY `id_ak` (`id_ak`);

--
-- Indeks untuk tabel `kepala_keluarga`
--
ALTER TABLE `kepala_keluarga`
  ADD PRIMARY KEY (`id_kepkel`,`nik`,`no_kk`),
  ADD KEY `id_kk` (`id_kepkel`);

--
-- Indeks untuk tabel `pengajuan_surat`
--
ALTER TABLE `pengajuan_surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
