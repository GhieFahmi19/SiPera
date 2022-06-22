-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jun 2022 pada 19.17
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pi_sipera`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(4, '2022-06-13-144604', 'App\\Database\\Migrations\\TblDesa', 'default', 'App', 1655134666, 1),
(5, '2022-06-13-151847', 'App\\Database\\Migrations\\TblKecamatan', 'default', 'App', 1655134666, 1),
(6, '2022-06-13-153011', 'App\\Database\\Migrations\\TblGolDarah', 'default', 'App', 1655134666, 1),
(49, '2022-06-13-155410', 'App\\Database\\Migrations\\TblKeluarga', 'default', 'App', 1655140486, 2),
(50, '2022-06-13-160730', 'App\\Database\\Migrations\\TblKeluargaSejahtera', 'default', 'App', 1655140486, 2),
(51, '2022-06-13-161518', 'App\\Database\\Migrations\\TblPendudukAgama', 'default', 'App', 1655140486, 2),
(52, '2022-06-13-162150', 'App\\Database\\Migrations\\TblPendudukHubungan', 'default', 'App', 1655140486, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_desa`
--

CREATE TABLE `tbl_desa` (
  `id_desa` int(3) UNSIGNED NOT NULL,
  `kode_desa` int(3) NOT NULL,
  `nama_desa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kecamatan`
--

CREATE TABLE `tbl_kecamatan` (
  `id_kecamatan` int(11) UNSIGNED NOT NULL,
  `kode_kecamatan` int(3) NOT NULL,
  `nama_kecamatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_keluarga`
--

CREATE TABLE `tbl_keluarga` (
  `id_keluarga` int(11) UNSIGNED NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `kelas_sosial` char(50) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `wil_dusun` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_keluarga_sejahtera`
--

CREATE TABLE `tbl_keluarga_sejahtera` (
  `id_keluarga_sejahtera` int(10) UNSIGNED NOT NULL,
  `id_keluarga` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penduduk_agama`
--

CREATE TABLE `tbl_penduduk_agama` (
  `id_penduduk_agama` int(10) UNSIGNED NOT NULL,
  `nama` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penduduk_hubungan`
--

CREATE TABLE `tbl_penduduk_hubungan` (
  `id_penduduk_hubungan` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `status_hubungan` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_desa`
--
ALTER TABLE `tbl_desa`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indeks untuk tabel `tbl_kecamatan`
--
ALTER TABLE `tbl_kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indeks untuk tabel `tbl_keluarga`
--
ALTER TABLE `tbl_keluarga`
  ADD PRIMARY KEY (`id_keluarga`);

--
-- Indeks untuk tabel `tbl_keluarga_sejahtera`
--
ALTER TABLE `tbl_keluarga_sejahtera`
  ADD PRIMARY KEY (`id_keluarga_sejahtera`);

--
-- Indeks untuk tabel `tbl_penduduk_agama`
--
ALTER TABLE `tbl_penduduk_agama`
  ADD PRIMARY KEY (`id_penduduk_agama`);

--
-- Indeks untuk tabel `tbl_penduduk_hubungan`
--
ALTER TABLE `tbl_penduduk_hubungan`
  ADD PRIMARY KEY (`id_penduduk_hubungan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `tbl_desa`
--
ALTER TABLE `tbl_desa`
  MODIFY `id_desa` int(3) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_kecamatan`
--
ALTER TABLE `tbl_kecamatan`
  MODIFY `id_kecamatan` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_keluarga`
--
ALTER TABLE `tbl_keluarga`
  MODIFY `id_keluarga` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_keluarga_sejahtera`
--
ALTER TABLE `tbl_keluarga_sejahtera`
  MODIFY `id_keluarga_sejahtera` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_penduduk_agama`
--
ALTER TABLE `tbl_penduduk_agama`
  MODIFY `id_penduduk_agama` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_penduduk_hubungan`
--
ALTER TABLE `tbl_penduduk_hubungan`
  MODIFY `id_penduduk_hubungan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
