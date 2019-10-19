-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2019 pada 10.52
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
  `tgl_isi` date NOT NULL,
  `id_kuesioner` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `aksi_tmp`
--

CREATE TABLE `aksi_tmp` (
  `id_aksi_tmp` int(11) NOT NULL,
  `id_aksi` int(11) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `id_opsi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(88, 49, 37),
(89, 49, 43),
(90, 50, 46);

-- --------------------------------------------------------

--
-- Struktur dari tabel `aspek`
--

CREATE TABLE `aspek` (
  `id_aspek` int(11) NOT NULL,
  `aspek` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aspek`
--

INSERT INTO `aspek` (`id_aspek`, `aspek`) VALUES
(1, 'pedagogik');

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
(50, 'joko');

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
(29, 'Pengenalan Lingkungan Sekolah ');

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
(12, 'Survei Pelaksanaan Pengenalan Lingkungan Sekolah (PLS)', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2019-10-19', '2019-10-20', 29);

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
(23, 12, 37),
(24, 12, 38),
(25, 12, 43),
(26, 12, 45),
(27, 12, 46);

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

--
-- Dumping data untuk tabel `siswa_tmp`
--

INSERT INTO `siswa_tmp` (`id`, `nama`, `nipd`, `nama_ibu`, `id_kelas`) VALUES
(26, 'hargiyo', 3, 'tini', 3),
(30, 'Windy Puji Oktiagraha', 666, 'tino', 38);

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
(53, 'Games / Permainan yang dilakukan selama kegiatan outbond', 29);

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal_aspek`
--

CREATE TABLE `soal_aspek` (
  `id_soal_aspek` int(11) NOT NULL,
  `pertanyaan` text NOT NULL,
  `id_aspek` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `soal_aspek`
--

INSERT INTO `soal_aspek` (`id_soal_aspek`, `pertanyaan`, `id_aspek`) VALUES
(1, 'gagag', 1),
(2, 'hiyaa', 1);

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
(9, '2019-10-17', '2019-10-18');

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
(13, 9, 49);

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
(22, 'Karsa', '12', 'ciki', 38, 'c3ec0f7b054e729c5a716c8125839829', 2),
(28, 'joko', '666', 'admin', 0, 'b2d70ecfea01ba7d1148f1dc5f593710', 1),
(30, 'Aku', '222', 'tino', 43, 'c3ec0f7b054e729c5a716c8125839829', 2);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_ampuan`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_ampuan` (
`nama` varchar(50)
,`ampuan` mediumtext
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_soal_kegiatan`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_soal_kegiatan` (
`id_kuesioner` int(11)
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
-- Struktur untuk view `v_ampuan`
--
DROP TABLE IF EXISTS `v_ampuan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ampuan`  AS  select `g`.`nama` AS `nama`,group_concat(' ',`k`.`kelas`,' ',`k`.`jurusan`,' ',`k`.`sub` separator ',') AS `ampuan` from ((`ampuan` `a` join `kelas` `k`) join `guru` `g`) where `a`.`id_kelas` = `k`.`id_kelas` and `a`.`id_guru` = `g`.`id_guru` group by `a`.`id_guru` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_soal_kegiatan`
--
DROP TABLE IF EXISTS `v_soal_kegiatan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_soal_kegiatan`  AS  select `kuesioner`.`id_kuesioner` AS `id_kuesioner`,`soal`.`soal` AS `soal`,`kuesioner_tmp`.`id_kelas` AS `id_kelas` from ((`kuesioner` join `soal`) join `kuesioner_tmp`) where `kuesioner`.`id_kategori` = `soal`.`id_kategori` and `kuesioner_tmp`.`id_kuesioner` = `kuesioner`.`id_kuesioner` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_s_guru`
--
DROP TABLE IF EXISTS `v_s_guru`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_s_guru`  AS  select `survei_guru`.`id_survei_guru` AS `id_survei_guru`,`survei_guru`.`tgl_mulai` AS `tgl_mulai`,`survei_guru`.`tgl_selesai` AS `tgl_selesai`,`survei_guru_tmp`.`id_guru` AS `id_guru`,`ampuan`.`id_kelas` AS `id_kelas` from ((`survei_guru` join `survei_guru_tmp`) join `ampuan`) where `survei_guru`.`id_survei_guru` = `survei_guru_tmp`.`id_survei_guru` and `survei_guru_tmp`.`id_guru` = `ampuan`.`id_guru` group by `ampuan`.`id_kelas` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_s_kegiatan`
--
DROP TABLE IF EXISTS `v_s_kegiatan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_s_kegiatan`  AS  select `t`.`id_kelas` AS `id_kelas`,`k`.`id_kuesioner` AS `id_kuesioner`,`k`.`judul` AS `judul`,`k`.`deskripsi` AS `deskripsi`,`k`.`tgl_mulai` AS `tgl_mulai`,`k`.`tgl_selesai` AS `tgl_selesai`,`k`.`id_kategori` AS `id_kategori` from (`kuesioner` `k` join `kuesioner_tmp` `t`) where `t`.`id_kuesioner` = `k`.`id_kuesioner` ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aksi`
--
ALTER TABLE `aksi`
  ADD PRIMARY KEY (`id_aksi`);

--
-- Indeks untuk tabel `aksi_tmp`
--
ALTER TABLE `aksi_tmp`
  ADD PRIMARY KEY (`id_aksi_tmp`);

--
-- Indeks untuk tabel `ampuan`
--
ALTER TABLE `ampuan`
  ADD PRIMARY KEY (`id_ampuan`);

--
-- Indeks untuk tabel `aspek`
--
ALTER TABLE `aspek`
  ADD PRIMARY KEY (`id_aspek`);

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
-- Indeks untuk tabel `soal_aspek`
--
ALTER TABLE `soal_aspek`
  ADD PRIMARY KEY (`id_soal_aspek`);

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
  MODIFY `id_aksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `aksi_tmp`
--
ALTER TABLE `aksi_tmp`
  MODIFY `id_aksi_tmp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ampuan`
--
ALTER TABLE `ampuan`
  MODIFY `id_ampuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT untuk tabel `aspek`
--
ALTER TABLE `aspek`
  MODIFY `id_aspek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `kuesioner`
--
ALTER TABLE `kuesioner`
  MODIFY `id_kuesioner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `kuesioner_tmp`
--
ALTER TABLE `kuesioner_tmp`
  MODIFY `id_kuesioner_tmp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `siswa_tmp`
--
ALTER TABLE `siswa_tmp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `soal_aspek`
--
ALTER TABLE `soal_aspek`
  MODIFY `id_soal_aspek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `survei_guru`
--
ALTER TABLE `survei_guru`
  MODIFY `id_survei_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `survei_guru_tmp`
--
ALTER TABLE `survei_guru_tmp`
  MODIFY `id_survei_guru_tmp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user_siswa`
--
ALTER TABLE `user_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
