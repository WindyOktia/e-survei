-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Nov 2019 pada 09.12
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bosa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aksi`
--

CREATE TABLE `aksi` (
  `id_aksi` int(11) NOT NULL,
  `nipd` varchar(30) NOT NULL,
  `tgl_isi` datetime NOT NULL,
  `id_kuesioner` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aksi`
--

INSERT INTO `aksi` (`id_aksi`, `nipd`, `tgl_isi`, `id_kuesioner`) VALUES
(65, '222', '2019-10-31 16:57:58', 26),
(66, '333', '2019-10-31 16:58:15', 26),
(67, '666', '2019-10-31 16:58:38', 26),
(68, '222', '2019-11-06 06:15:21', 27);

-- --------------------------------------------------------

--
-- Struktur dari tabel `aksi_guru`
--

CREATE TABLE `aksi_guru` (
  `id_aksi_guru` int(11) NOT NULL,
  `nipd` varchar(128) NOT NULL,
  `tgl_isi` datetime NOT NULL,
  `id_survei_guru` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aksi_guru`
--

INSERT INTO `aksi_guru` (`id_aksi_guru`, `nipd`, `tgl_isi`, `id_survei_guru`, `id_guru`) VALUES
(56, '222', '2019-10-31 16:53:35', 22, 51),
(57, '777', '2019-11-06 04:17:01', 22, 51),
(58, '777', '2019-11-06 04:17:52', 22, 54),
(59, '222', '2019-11-07 09:43:46', 22, 50),
(60, '333', '2019-11-07 09:45:04', 22, 50),
(62, '333', '2019-11-10 16:21:18', 22, 51),
(63, '222', '2019-11-10 16:48:36', 24, 51),
(64, '333', '2019-11-10 16:49:02', 24, 50),
(65, '555', '2019-11-10 16:49:52', 22, 51),
(66, '555', '2019-11-10 16:50:05', 24, 51),
(67, '444', '2019-11-10 18:07:20', 22, 50);

-- --------------------------------------------------------

--
-- Struktur dari tabel `aksi_guru_tmp`
--

CREATE TABLE `aksi_guru_tmp` (
  `id_aksi_guru_tmp` int(11) NOT NULL,
  `id_aksi_guru` int(11) NOT NULL,
  `soal_no` int(11) NOT NULL,
  `id_opsi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aksi_guru_tmp`
--

INSERT INTO `aksi_guru_tmp` (`id_aksi_guru_tmp`, `id_aksi_guru`, `soal_no`, `id_opsi`) VALUES
(221, 56, 1, 4),
(222, 56, 2, 3),
(223, 56, 3, 2),
(224, 56, 4, 1),
(225, 57, 1, 4),
(226, 57, 2, 3),
(227, 57, 3, 2),
(228, 57, 4, 4),
(229, 58, 1, 4),
(230, 58, 2, 4),
(231, 58, 3, 4),
(232, 58, 4, 4),
(233, 59, 1, 4),
(234, 59, 2, 4),
(235, 59, 3, 3),
(236, 59, 4, 3),
(237, 60, 1, 4),
(238, 60, 2, 3),
(239, 60, 3, 2),
(240, 60, 4, 2),
(245, 62, 1, 4),
(246, 62, 2, 4),
(247, 62, 3, 4),
(248, 62, 4, 4),
(249, 63, 1, 4),
(250, 63, 2, 3),
(251, 63, 3, 2),
(252, 63, 4, 3),
(253, 64, 1, 4),
(254, 64, 2, 4),
(255, 64, 3, 3),
(256, 64, 4, 2),
(257, 65, 1, 4),
(258, 65, 2, 4),
(259, 65, 3, 3),
(260, 65, 4, 1),
(261, 66, 1, 4),
(262, 66, 2, 4),
(263, 66, 3, 3),
(264, 66, 4, 2),
(265, 67, 1, 4),
(266, 67, 2, 4),
(267, 67, 3, 4),
(268, 67, 4, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `aksi_tmp`
--

CREATE TABLE `aksi_tmp` (
  `id_aksi_tmp` int(11) NOT NULL,
  `id_aksi` int(11) NOT NULL,
  `soal_no` int(11) NOT NULL,
  `id_opsi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aksi_tmp`
--

INSERT INTO `aksi_tmp` (`id_aksi_tmp`, `id_aksi`, `soal_no`, `id_opsi`) VALUES
(151, 65, 1, 4),
(152, 65, 2, 4),
(153, 65, 3, 3),
(154, 65, 4, 2),
(155, 65, 5, 1),
(156, 66, 1, 4),
(157, 66, 2, 4),
(158, 66, 3, 4),
(159, 66, 4, 3),
(160, 66, 5, 2),
(161, 67, 1, 4),
(162, 67, 2, 3),
(163, 67, 3, 4),
(164, 67, 4, 3),
(165, 67, 5, 2),
(166, 68, 1, 4),
(167, 68, 2, 3),
(168, 68, 3, 2),
(169, 68, 4, 2),
(170, 68, 5, 2),
(171, 68, 6, 3),
(172, 68, 7, 3),
(173, 68, 8, 4),
(174, 68, 9, 3),
(175, 68, 10, 3),
(176, 68, 11, 3),
(177, 68, 12, 4),
(178, 68, 13, 2),
(179, 68, 14, 1),
(180, 68, 15, 1),
(181, 68, 16, 1),
(182, 68, 17, 2),
(183, 68, 18, 2),
(184, 68, 19, 3),
(185, 68, 20, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ampuan`
--

CREATE TABLE `ampuan` (
  `id_ampuan` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ampuan`
--

INSERT INTO `ampuan` (`id_ampuan`, `id_guru`, `id_kelas`) VALUES
(91, 51, 37),
(92, 51, 38),
(93, 51, 43),
(94, 51, 45),
(95, 51, 46),
(107, 50, 37),
(108, 50, 43),
(109, 50, 46),
(120, 54, 37),
(121, 54, 38),
(122, 54, 43),
(123, 54, 45),
(124, 49, 37),
(125, 49, 38),
(126, 49, 43),
(127, 49, 45),
(133, 56, 37),
(134, 56, 38),
(135, 56, 45),
(136, 57, 37),
(137, 57, 43),
(138, 57, 45),
(139, 58, 37),
(140, 58, 43),
(141, 58, 45);

-- --------------------------------------------------------

--
-- Struktur dari tabel `aspek_kepuasan`
--

CREATE TABLE `aspek_kepuasan` (
  `id_aspek_kepuasan` int(11) NOT NULL,
  `aspek` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aspek_kepuasan`
--

INSERT INTO `aspek_kepuasan` (`id_aspek_kepuasan`, `aspek`) VALUES
(1, 'Proses KBM'),
(2, 'Pelayanan Karyawan Sebagai Penunjang Pendidikan'),
(3, 'Kelas & Toilet');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `nama`) VALUES
(49, 'Pioneer'),
(50, 'joko anwar'),
(51, 'Rani'),
(54, 'Handoko '),
(56, 'joko'),
(57, 'hendi'),
(58, 'handuk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(29, 'Pengenalan Lingkungan Sekolah '),
(32, 'Test'),
(33, 'test 2'),
(36, 'jagongan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `sub` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kelas`, `jurusan`, `sub`) VALUES
(37, 'X', 'IPA', 1),
(38, 'X', 'IPA', 2),
(43, 'X', 'IPS', 1),
(45, 'X', 'IPS', 2),
(46, 'X', 'Bahasa', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuesioner`
--

CREATE TABLE `kuesioner` (
  `id_kuesioner` int(11) NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kuesioner`
--

INSERT INTO `kuesioner` (`id_kuesioner`, `judul`, `deskripsi`, `tgl_mulai`, `tgl_selesai`, `id_kategori`) VALUES
(26, 'Test Sytem #1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2019-10-31', '2019-11-02', 33),
(27, 'PLS', 'PLS', '2019-11-06', '2019-11-08', 29);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuesioner_tmp`
--

CREATE TABLE `kuesioner_tmp` (
  `id_kuesioner_tmp` int(11) NOT NULL,
  `id_kuesioner` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kuesioner_tmp`
--

INSERT INTO `kuesioner_tmp` (`id_kuesioner_tmp`, `id_kuesioner`, `id_kelas`) VALUES
(90, 26, 37),
(91, 26, 38),
(92, 26, 43),
(93, 26, 45),
(94, 26, 46),
(95, 27, 37),
(96, 27, 38),
(97, 27, 43),
(98, 27, 45),
(99, 27, 46);

-- --------------------------------------------------------

--
-- Struktur dari tabel `masukan_guru`
--

CREATE TABLE `masukan_guru` (
  `id_masukan_guru` int(11) NOT NULL,
  `nipd` varchar(30) NOT NULL,
  `id_survei_guru` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `tgl_komen` date NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `masukan_guru`
--

INSERT INTO `masukan_guru` (`id_masukan_guru`, `nipd`, `id_survei_guru`, `id_guru`, `tgl_komen`, `komentar`) VALUES
(1, '333', 22, 50, '2019-11-07', 'tes'),
(3, '333', 22, 51, '2019-11-10', 'woho'),
(4, '222', 24, 51, '2019-11-10', 'bagus'),
(5, '333', 24, 50, '2019-11-10', 'keren'),
(6, '555', 22, 51, '2019-11-10', 'mantab'),
(7, '555', 24, 51, '2019-11-10', 'super'),
(8, '444', 22, 50, '2019-11-10', 'good');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masukan_kegiatan`
--

CREATE TABLE `masukan_kegiatan` (
  `id_masukan_kegiatan` int(11) NOT NULL,
  `nipd` varchar(30) NOT NULL,
  `id_kuesioner` int(11) NOT NULL,
  `tgl_komen` date NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `opsi`
--

CREATE TABLE `opsi` (
  `id_opsi` int(11) NOT NULL,
  `opsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `opsi`
--

INSERT INTO `opsi` (`id_opsi`, `opsi`) VALUES
(1, 'Sangat Baik'),
(2, 'Baik'),
(3, 'Cukup'),
(4, 'Kurang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa_tmp`
--

CREATE TABLE `siswa_tmp` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nipd` int(11) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(11) NOT NULL,
  `soal` text NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `soal`
--

INSERT INTO `soal` (`id_soal`, `soal`, `id_kategori`) VALUES
(34, 'Pelayanan Bapak / Ibu guru pendamping gugus ', 29),
(35, 'Kegiatan upacara selama PLS', 29),
(36, 'Penyampaian Visi, Misi dan Kultur sekolah', 29),
(37, 'Penyampaian tata tertib siswa dan etika pergaulan di sekolah', 29),
(38, 'Materi Penyuluhan oleh Tim', 29),
(39, 'Pengenalan Lingkungan Sekolah oleh pendamping OSIS', 29),
(40, 'Presentasi Ekstrakurikuler', 29),
(41, 'Pendampingan oleh kakak OSIS selama PLS', 29),
(42, 'Susunan acara dan alokasi waktu kegiatan PLS', 29),
(43, 'Lokasi kegiatan outbond', 29),
(44, 'Penginapan dan sarana MCK di lokasi Outbond', 29),
(45, 'Makan dan minum yang disajikan dalam kegiatan outbond', 29),
(46, 'Dengan kegiatan outbond dapat membangun kebersamaan, keakraban dan berbaur dengan masyarakat', 29),
(47, 'Keakraban dan kekompakan yang dapat dibangun dalam kegiatan PLS', 29),
(48, 'Perlakuan Kakak OSIS kepada peserta PLS', 29),
(49, 'Kemampuan menghargai teman yang dapat dibangun melalui kegiatan outbond', 29),
(50, 'Pelayanan Bapak / Ibu guru pendamping gugus selama kegiatan outbond', 29),
(51, 'Keamanan Selama Kegiatan Outbond', 29),
(52, 'Alat transportasi selama kegiatan outbond', 29),
(53, 'Games / Permainan yang dilakukan selama kegiatan outbond', 29),
(60, 'aaaa', 33),
(62, 'aaa2', 33),
(63, 'aaa3', 33),
(64, 'aaaa4', 33),
(71, 'Test 1', 32),
(72, 'Test 2', 32),
(73, 'Test 3', 32),
(75, 'a', 36),
(76, 'b', 36),
(77, 'c', 36),
(78, 'd', 36);

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal_guru`
--

CREATE TABLE `soal_guru` (
  `id_soal_aspek` int(11) NOT NULL,
  `pertanyaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `soal_guru`
--

INSERT INTO `soal_guru` (`id_soal_aspek`, `pertanyaan`) VALUES
(15, 'Penguasaan Kelas'),
(16, 'Penyampaian Materi'),
(17, 'Komunikasi dengan siswa'),
(18, 'Keterbukaan dalam penilaian ( Pelayanan konseling bagi guru BK )');

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal_kepuasan`
--

CREATE TABLE `soal_kepuasan` (
  `id_soal_kepuasan` int(11) NOT NULL,
  `id_aspek_kepuasan` int(11) NOT NULL,
  `pertanyaan` text NOT NULL,
  `opsi_1` varchar(50) NOT NULL,
  `opsi_2` varchar(50) NOT NULL,
  `opsi_3` varchar(50) NOT NULL,
  `opsi_4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `soal_kepuasan`
--

INSERT INTO `soal_kepuasan` (`id_soal_kepuasan`, `id_aspek_kepuasan`, `pertanyaan`, `opsi_1`, `opsi_2`, `opsi_3`, `opsi_4`) VALUES
(2, 1, 'Saya bisa menyebutkan visi dan misi SMA Bopkri 1 dengan benar dan lancar', 'Tidak Setuju', 'Netral', 'Setuju', 'Sangat Setuju'),
(3, 1, 'Berapa banyak guru yang memberikan rancangan pembelajaran ( silabus ) dan penilaian di setiap awal semester ?', '1 - 3 guru', '4 - 7 guru', '8 - 10 guru', 'lebih dari 10 guru'),
(4, 2, 'Bapak dan Ibu Karyawan ramah dan kooperatif dalam membantu siswa berkaitan dengan administrasi kesiswaaan', 'Tidak Setuju', 'Netral', 'Setuju', 'Sangat Setuju'),
(5, 2, 'Pelayanan pembayaran SPP sangat cepat dan memuaskan', 'Tidak Setuju', 'Netral', 'Setuju', 'Sangat Setuju'),
(6, 2, 'Pelayanan surat-menyurat yang berkaitan dengan administrasi siswa cepat dan memuaskan', 'Tidak Setuju', 'Netral', 'Setuju', 'Sangat Setuju'),
(7, 3, 'Pencahayaan di Kelas memadai', 'Tidak Setuju', 'Netral', 'Setuju', 'Sangat Setuju'),
(8, 3, 'Sirkulasi udara ruang kelas sudah cukup baik', 'Tidak Setuju', 'Netral', 'Setuju', 'Sangat Setuju'),
(9, 3, 'Saklar, stop kontak, LCD Proyektor dan kabel LCD di Kelas dalam keadaan baik dan aman', 'Tidak Setuju', 'Netral', 'Setuju', 'Sangat Setuju');

-- --------------------------------------------------------

--
-- Struktur dari tabel `survei_guru`
--

CREATE TABLE `survei_guru` (
  `id_survei_guru` int(11) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `survei_guru`
--

INSERT INTO `survei_guru` (`id_survei_guru`, `tgl_mulai`, `tgl_selesai`) VALUES
(22, '2019-10-31', '2019-11-02'),
(24, '2019-11-12', '2019-11-14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `survei_guru_tmp`
--

CREATE TABLE `survei_guru_tmp` (
  `id_survei_guru_tmp` int(11) NOT NULL,
  `id_survei_guru` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `survei_guru_tmp`
--

INSERT INTO `survei_guru_tmp` (`id_survei_guru_tmp`, `id_survei_guru`, `id_guru`) VALUES
(62, 22, 49),
(63, 22, 50),
(64, 22, 51),
(65, 22, 54),
(66, 22, 56),
(68, 24, 49),
(69, 24, 50),
(70, 24, 51),
(71, 24, 54),
(72, 24, 56),
(73, 24, 57),
(74, 24, 58);

-- --------------------------------------------------------

--
-- Struktur dari tabel `survei_kepuasan`
--

CREATE TABLE `survei_kepuasan` (
  `id_survei_kepuasan` int(11) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `survei_kepuasan`
--

INSERT INTO `survei_kepuasan` (`id_survei_kepuasan`, `tgl_mulai`, `tgl_selesai`) VALUES
(2, '2019-10-23', '2019-10-24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `survei_kepuasan_tmp`
--

CREATE TABLE `survei_kepuasan_tmp` (
  `id_survei_kepuasan_tmp` int(11) NOT NULL,
  `id_survei_kepuasan` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `survei_kepuasan_tmp`
--

INSERT INTO `survei_kepuasan_tmp` (`id_survei_kepuasan_tmp`, `id_survei_kepuasan`, `id_kelas`) VALUES
(1, 2, 37),
(2, 2, 38),
(3, 2, 43);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_siswa`
--

CREATE TABLE `user_siswa` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `nipd` varchar(30) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `id_kelas` int(10) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_siswa`
--

INSERT INTO `user_siswa` (`id`, `nama`, `nipd`, `nama_ibu`, `id_kelas`, `password`, `role`) VALUES
(20, 'System Default', '1', 'default', 0, '1b1f3c1005c23645b582d2ff993f0d14', 1),
(30, 'Windy', '222', 'Anna', 46, 'c3ec0f7b054e729c5a716c8125839829', 2),
(31, 'Daniel Setiawan', '666', 'mother', 38, 'c3ec0f7b054e729c5a716c8125839829', 2),
(32, 'Test System', '333', 'test', 46, 'c3ec0f7b054e729c5a716c8125839829', 2),
(33, 'Suryo Widodo', '444', 'coba', 43, 'c3ec0f7b054e729c5a716c8125839829', 2),
(35, 'Vian', '555', 'Wahyuni', 45, 'c3ec0f7b054e729c5a716c8125839829', 2),
(36, 'Hartono', '4321', 'Diana', 46, 'c3ec0f7b054e729c5a716c8125839829', 2),
(40, 'hartono', '9999', 'diana', 46, 'c3ec0f7b054e729c5a716c8125839829', 2);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_ampuan`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_ampuan` (
`id_guru` int(11)
,`nama` varchar(50)
,`ampuan` mediumtext
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_a_guru`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_a_guru` (
`id_survei_guru` int(11)
,`id_guru` int(11)
,`responden` bigint(21)
,`sangat_baik` decimal(22,0)
,`baik` decimal(22,0)
,`cukup` decimal(22,0)
,`buruk` decimal(22,0)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_a_kegiatan`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_a_kegiatan` (
`id_kuesioner` int(11)
,`judul` text
,`deskripsi` text
,`tgl_mulai` date
,`tgl_selesai` date
,`responden` bigint(21)
,`sangat_baik` decimal(22,0)
,`baik` decimal(22,0)
,`cukup` decimal(22,0)
,`buruk` decimal(22,0)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_siswa_tmp`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_siswa_tmp` (
`id` int(11)
,`nama` varchar(50)
,`nipd` int(11)
,`nama_ibu` varchar(50)
,`id_kelas` int(11)
,`kelas` varchar(73)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_soal_kegiatan`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_soal_kegiatan` (
`id_kuesioner` int(11)
,`id_soal` int(11)
,`soal` text
,`id_kelas` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_s_guru`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_s_guru` (
`id_survei_guru` int(11)
,`tgl_mulai` date
,`tgl_selesai` date
,`id_guru` int(11)
,`nama` varchar(50)
,`id_kelas` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_s_kegiatan`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_s_kegiatan` (
`id_kelas` int(11)
,`id_kuesioner` int(11)
,`judul` text
,`deskripsi` text
,`tgl_mulai` date
,`tgl_selesai` date
,`id_kategori` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_s_kepuasan`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_s_kepuasan` (
`id_soal_kepuasan` int(11)
,`pertanyaan` text
,`opsi_1` varchar(50)
,`opsi_2` varchar(50)
,`opsi_3` varchar(50)
,`opsi_4` varchar(50)
,`id_aspek_kepuasan` int(11)
,`aspek` text
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_user_siswa`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_user_siswa` (
`id` int(11)
,`nama` text
,`nipd` varchar(30)
,`nama_ibu` varchar(50)
,`id_kelas` int(10)
,`password` varchar(200)
,`role` int(11)
,`kelas` varchar(73)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `v_ampuan`
--
DROP TABLE IF EXISTS `v_ampuan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ampuan`  AS  select `guru`.`id_guru` AS `id_guru`,`guru`.`nama` AS `nama`,group_concat(' ',`kelas`.`kelas`,' ',`kelas`.`jurusan`,' ',`kelas`.`sub` separator ',') AS `ampuan` from ((`guru` join `ampuan`) join `kelas`) where `guru`.`id_guru` = `ampuan`.`id_guru` and `ampuan`.`id_kelas` = `kelas`.`id_kelas` group by `ampuan`.`id_guru` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_a_guru`
--
DROP TABLE IF EXISTS `v_a_guru`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_a_guru`  AS  select `aksi_guru`.`id_survei_guru` AS `id_survei_guru`,`aksi_guru`.`id_guru` AS `id_guru`,count(distinct `aksi_guru`.`nipd`) AS `responden`,sum(case when `aksi_guru_tmp`.`id_opsi` = '4' then 1 else 0 end) AS `sangat_baik`,sum(case when `aksi_guru_tmp`.`id_opsi` = '3' then 1 else 0 end) AS `baik`,sum(case when `aksi_guru_tmp`.`id_opsi` = '2' then 1 else 0 end) AS `cukup`,sum(case when `aksi_guru_tmp`.`id_opsi` = '1' then 1 else 0 end) AS `buruk` from (`aksi_guru` left join `aksi_guru_tmp` on(`aksi_guru`.`id_aksi_guru` = `aksi_guru_tmp`.`id_aksi_guru`)) group by `aksi_guru`.`id_survei_guru`,`aksi_guru`.`id_guru` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_a_kegiatan`
--
DROP TABLE IF EXISTS `v_a_kegiatan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_a_kegiatan`  AS  select `aksi`.`id_kuesioner` AS `id_kuesioner`,`kuesioner`.`judul` AS `judul`,`kuesioner`.`deskripsi` AS `deskripsi`,`kuesioner`.`tgl_mulai` AS `tgl_mulai`,`kuesioner`.`tgl_selesai` AS `tgl_selesai`,count(distinct `aksi`.`nipd`) AS `responden`,sum(case when `aksi_tmp`.`id_opsi` = '4' then 1 else 0 end) AS `sangat_baik`,sum(case when `aksi_tmp`.`id_opsi` = '3' then 1 else 0 end) AS `baik`,sum(case when `aksi_tmp`.`id_opsi` = '2' then 1 else 0 end) AS `cukup`,sum(case when `aksi_tmp`.`id_opsi` = '1' then 1 else 0 end) AS `buruk` from ((`aksi` left join `aksi_tmp` on(`aksi`.`id_aksi` = `aksi_tmp`.`id_aksi`)) left join `kuesioner` on(`aksi`.`id_kuesioner` = `kuesioner`.`id_kuesioner`)) group by `aksi`.`id_kuesioner` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_siswa_tmp`
--
DROP TABLE IF EXISTS `v_siswa_tmp`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa_tmp`  AS  select `siswa_tmp`.`id` AS `id`,`siswa_tmp`.`nama` AS `nama`,`siswa_tmp`.`nipd` AS `nipd`,`siswa_tmp`.`nama_ibu` AS `nama_ibu`,`siswa_tmp`.`id_kelas` AS `id_kelas`,concat(`kelas`.`kelas`,' ',`kelas`.`jurusan`,' ',`kelas`.`sub`) AS `kelas` from (`siswa_tmp` join `kelas`) where `siswa_tmp`.`id_kelas` = `kelas`.`id_kelas` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_soal_kegiatan`
--
DROP TABLE IF EXISTS `v_soal_kegiatan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_soal_kegiatan`  AS  select `kuesioner`.`id_kuesioner` AS `id_kuesioner`,`soal`.`id_soal` AS `id_soal`,`soal`.`soal` AS `soal`,`kuesioner_tmp`.`id_kelas` AS `id_kelas` from ((`kuesioner` join `soal`) join `kuesioner_tmp`) where `kuesioner`.`id_kategori` = `soal`.`id_kategori` and `kuesioner_tmp`.`id_kuesioner` = `kuesioner`.`id_kuesioner` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_s_guru`
--
DROP TABLE IF EXISTS `v_s_guru`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_s_guru`  AS  select `survei_guru`.`id_survei_guru` AS `id_survei_guru`,`survei_guru`.`tgl_mulai` AS `tgl_mulai`,`survei_guru`.`tgl_selesai` AS `tgl_selesai`,`guru`.`id_guru` AS `id_guru`,`guru`.`nama` AS `nama`,`ampuan`.`id_kelas` AS `id_kelas` from (((`survei_guru` join `survei_guru_tmp`) join `ampuan`) join `guru`) where `survei_guru`.`id_survei_guru` = `survei_guru_tmp`.`id_survei_guru` and `survei_guru_tmp`.`id_guru` = `guru`.`id_guru` and `ampuan`.`id_guru` = `guru`.`id_guru` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_s_kegiatan`
--
DROP TABLE IF EXISTS `v_s_kegiatan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_s_kegiatan`  AS  select `t`.`id_kelas` AS `id_kelas`,`k`.`id_kuesioner` AS `id_kuesioner`,`k`.`judul` AS `judul`,`k`.`deskripsi` AS `deskripsi`,`k`.`tgl_mulai` AS `tgl_mulai`,`k`.`tgl_selesai` AS `tgl_selesai`,`k`.`id_kategori` AS `id_kategori` from (`kuesioner` `k` join `kuesioner_tmp` `t`) where `t`.`id_kuesioner` = `k`.`id_kuesioner` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_s_kepuasan`
--
DROP TABLE IF EXISTS `v_s_kepuasan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_s_kepuasan`  AS  select `soal_kepuasan`.`id_soal_kepuasan` AS `id_soal_kepuasan`,`soal_kepuasan`.`pertanyaan` AS `pertanyaan`,`soal_kepuasan`.`opsi_1` AS `opsi_1`,`soal_kepuasan`.`opsi_2` AS `opsi_2`,`soal_kepuasan`.`opsi_3` AS `opsi_3`,`soal_kepuasan`.`opsi_4` AS `opsi_4`,`aspek_kepuasan`.`id_aspek_kepuasan` AS `id_aspek_kepuasan`,`aspek_kepuasan`.`aspek` AS `aspek` from (`soal_kepuasan` join `aspek_kepuasan`) where `aspek_kepuasan`.`id_aspek_kepuasan` = `soal_kepuasan`.`id_aspek_kepuasan` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_user_siswa`
--
DROP TABLE IF EXISTS `v_user_siswa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_user_siswa`  AS  select `user_siswa`.`id` AS `id`,`user_siswa`.`nama` AS `nama`,`user_siswa`.`nipd` AS `nipd`,`user_siswa`.`nama_ibu` AS `nama_ibu`,`user_siswa`.`id_kelas` AS `id_kelas`,`user_siswa`.`password` AS `password`,`user_siswa`.`role` AS `role`,concat(`kelas`.`kelas`,' ',`kelas`.`jurusan`,' ',`kelas`.`sub`) AS `kelas` from (`user_siswa` join `kelas`) where `user_siswa`.`id_kelas` = `kelas`.`id_kelas` ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aksi`
--
ALTER TABLE `aksi`
  ADD PRIMARY KEY (`id_aksi`);

--
-- Indeks untuk tabel `aksi_guru`
--
ALTER TABLE `aksi_guru`
  ADD PRIMARY KEY (`id_aksi_guru`);

--
-- Indeks untuk tabel `aksi_guru_tmp`
--
ALTER TABLE `aksi_guru_tmp`
  ADD PRIMARY KEY (`id_aksi_guru_tmp`),
  ADD KEY `delete` (`id_aksi_guru`);

--
-- Indeks untuk tabel `aksi_tmp`
--
ALTER TABLE `aksi_tmp`
  ADD PRIMARY KEY (`id_aksi_tmp`),
  ADD KEY `del` (`id_aksi`);

--
-- Indeks untuk tabel `ampuan`
--
ALTER TABLE `ampuan`
  ADD PRIMARY KEY (`id_ampuan`);

--
-- Indeks untuk tabel `aspek_kepuasan`
--
ALTER TABLE `aspek_kepuasan`
  ADD PRIMARY KEY (`id_aspek_kepuasan`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `kuesioner`
--
ALTER TABLE `kuesioner`
  ADD PRIMARY KEY (`id_kuesioner`);

--
-- Indeks untuk tabel `kuesioner_tmp`
--
ALTER TABLE `kuesioner_tmp`
  ADD PRIMARY KEY (`id_kuesioner_tmp`);

--
-- Indeks untuk tabel `masukan_guru`
--
ALTER TABLE `masukan_guru`
  ADD PRIMARY KEY (`id_masukan_guru`);

--
-- Indeks untuk tabel `masukan_kegiatan`
--
ALTER TABLE `masukan_kegiatan`
  ADD PRIMARY KEY (`id_masukan_kegiatan`);

--
-- Indeks untuk tabel `opsi`
--
ALTER TABLE `opsi`
  ADD PRIMARY KEY (`id_opsi`);

--
-- Indeks untuk tabel `siswa_tmp`
--
ALTER TABLE `siswa_tmp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indeks untuk tabel `soal_guru`
--
ALTER TABLE `soal_guru`
  ADD PRIMARY KEY (`id_soal_aspek`);

--
-- Indeks untuk tabel `soal_kepuasan`
--
ALTER TABLE `soal_kepuasan`
  ADD PRIMARY KEY (`id_soal_kepuasan`);

--
-- Indeks untuk tabel `survei_guru`
--
ALTER TABLE `survei_guru`
  ADD PRIMARY KEY (`id_survei_guru`);

--
-- Indeks untuk tabel `survei_guru_tmp`
--
ALTER TABLE `survei_guru_tmp`
  ADD PRIMARY KEY (`id_survei_guru_tmp`);

--
-- Indeks untuk tabel `survei_kepuasan`
--
ALTER TABLE `survei_kepuasan`
  ADD PRIMARY KEY (`id_survei_kepuasan`);

--
-- Indeks untuk tabel `survei_kepuasan_tmp`
--
ALTER TABLE `survei_kepuasan_tmp`
  ADD PRIMARY KEY (`id_survei_kepuasan_tmp`);

--
-- Indeks untuk tabel `user_siswa`
--
ALTER TABLE `user_siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aksi`
--
ALTER TABLE `aksi`
  MODIFY `id_aksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT untuk tabel `aksi_guru`
--
ALTER TABLE `aksi_guru`
  MODIFY `id_aksi_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT untuk tabel `aksi_guru_tmp`
--
ALTER TABLE `aksi_guru_tmp`
  MODIFY `id_aksi_guru_tmp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=269;

--
-- AUTO_INCREMENT untuk tabel `aksi_tmp`
--
ALTER TABLE `aksi_tmp`
  MODIFY `id_aksi_tmp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT untuk tabel `ampuan`
--
ALTER TABLE `ampuan`
  MODIFY `id_ampuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT untuk tabel `aspek_kepuasan`
--
ALTER TABLE `aspek_kepuasan`
  MODIFY `id_aspek_kepuasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `kuesioner`
--
ALTER TABLE `kuesioner`
  MODIFY `id_kuesioner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `kuesioner_tmp`
--
ALTER TABLE `kuesioner_tmp`
  MODIFY `id_kuesioner_tmp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT untuk tabel `masukan_guru`
--
ALTER TABLE `masukan_guru`
  MODIFY `id_masukan_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `masukan_kegiatan`
--
ALTER TABLE `masukan_kegiatan`
  MODIFY `id_masukan_kegiatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `siswa_tmp`
--
ALTER TABLE `siswa_tmp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT untuk tabel `soal_guru`
--
ALTER TABLE `soal_guru`
  MODIFY `id_soal_aspek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `soal_kepuasan`
--
ALTER TABLE `soal_kepuasan`
  MODIFY `id_soal_kepuasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `survei_guru`
--
ALTER TABLE `survei_guru`
  MODIFY `id_survei_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `survei_guru_tmp`
--
ALTER TABLE `survei_guru_tmp`
  MODIFY `id_survei_guru_tmp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT untuk tabel `survei_kepuasan`
--
ALTER TABLE `survei_kepuasan`
  MODIFY `id_survei_kepuasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `survei_kepuasan_tmp`
--
ALTER TABLE `survei_kepuasan_tmp`
  MODIFY `id_survei_kepuasan_tmp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_siswa`
--
ALTER TABLE `user_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `aksi_guru_tmp`
--
ALTER TABLE `aksi_guru_tmp`
  ADD CONSTRAINT `delete` FOREIGN KEY (`id_aksi_guru`) REFERENCES `aksi_guru` (`id_aksi_guru`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `aksi_tmp`
--
ALTER TABLE `aksi_tmp`
  ADD CONSTRAINT `del` FOREIGN KEY (`id_aksi`) REFERENCES `aksi` (`id_aksi`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
