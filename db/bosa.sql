-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Okt 2019 pada 07.22
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
  `id_kuesioner` int(11) NOT NULL,
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
(66, 41, 37),
(67, 41, 38),
(68, 41, 43),
(69, 41, 45);

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
(41, 'Pioneer');

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
(18, 'jagongan');

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
  `judul` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuesioner_tmp`
--

CREATE TABLE `kuesioner_tmp` (
  `id_target` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL
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
  `kelas` varchar(11) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `sub` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa_tmp`
--

INSERT INTO `siswa_tmp` (`id`, `nama`, `nipd`, `nama_ibu`, `kelas`, `jurusan`, `sub`) VALUES
(12, 'Kwee, Victor Agustinus Sentosa', 22727, 'LIEM, RIETA DEWI', 'XI', 'BHS', 0),
(13, 'Lintang Prabaswara Nayottama', 22731, 'Titik Mulyani', 'XI', 'BHS', 0),
(14, 'Mariche Ivone Samallo', 22737, 'Oktovina Priskilla Mambor', 'XI', 'BHS', 0),
(15, 'Merlin Cyintia Wandenggey', 22749, 'nila wandenggey', 'XI', 'BHS', 0),
(16, 'Nasya Lussiana Dewi', 22759, 'Sri Sayekti', 'XI', 'BHS', 0),
(17, 'Ridwan Ananda', 22806, 'Kalistiyalti', 'XI', 'BHS', 0),
(18, 'Ruth Tirza Arina', 22809, 'RINA HERDIANA', 'XI', 'BHS', 0),
(19, 'Shakira Magdalena Situmorang', 22816, 'MARGARETA BILI', 'XI', 'BHS', 0),
(20, 'Silvester Putra Widya Nugraha', 22818, 'NICOLA WIDYANINGSIH', 'XI', 'BHS', 0),
(21, 'Vania Angelica Santoso', 22833, 'Dewi Kurniawati Kasiam', 'XI', 'BHS', 0),
(22, 'Vanssika Gabriela Aurelia Irianti Renyaan', 22834, 'yuni imelda djonler', 'XI', 'BHS', 0),
(23, 'Yehuda Alfandi Prasetya Putra', 22840, 'TAN LILY PRATIKTO', 'XI', 'BHS', 0),
(24, 'Abram Chrisnanda', 22578, 'BANUN WIDOWATI', 'XI', 'IPS', 1),
(25, 'Agnes Jennifer Santoso', 22583, 'SIEK NGIK LANG', 'XI', 'IPS', 1),
(27, 'Alexander Jordan Harjosantoso', 22591, 'Oei Mei Lan', 'XI', 'IPS', 1),
(28, 'Alvin Nathaniel', 22597, 'Ma Anna Lestari', 'XI', 'IPS', 1),
(29, 'Andreas Dimas Tri Wibowo', 22602, 'Anik Sri Maryani', 'XI', 'IPS', 1),
(30, 'Aninda Desiriana', 22610, 'Ida Nuraini', 'XI', 'IPS', 1),
(31, 'David Himawan Soetianto', 22638, 'IVONE TAMPENAWAS, SE', 'XI', 'IPS', 1),
(32, 'Deni Setiawan', 22644, 'LELLY', 'XI', 'IPS', 1),
(33, 'Denny Andinata', 22645, 'SUNARTI', 'XI', 'IPS', 1),
(34, 'Elia Juend Kale', 22657, 'Endang Sulastri', 'XI', 'IPS', 1),
(35, 'Gioka Sintawang', 22679, 'LUSIANA RATNA DEWI, LIE', 'XI', 'IPS', 1),
(36, 'Helena Margaretha Yoviana', 22688, 'Tabita Sri Lanawati', 'XI', 'IPS', 1),
(37, 'Hiram Naftali Sutanto', 22691, 'IE KHUNG IK', 'XI', 'IPS', 1),
(38, 'I Gusti Ngurah Ananta Antariksa Adiatmaja', 22693, 'NI KETUT SRI WIDIASTUTI NARBA', 'XI', 'IPS', 1),
(39, 'Ivania Irena', 22701, 'Silvia Intan H', 'XI', 'IPS', 1),
(40, 'Jati Kanya Partha', 22702, 'Ni Ketut Sri Parwati', 'XI', 'IPS', 1),
(41, 'Jenar Lintang Dahana', 22704, 'Liza Puspitasari', 'XI', 'IPS', 1),
(42, 'Jyestho Dhanesworo', 22716, 'Th. Dwihapsari', 'XI', 'IPS', 1),
(43, 'Kristian Adi Nurpranata', 22725, 'Roslinda', 'XI', 'IPS', 1),
(44, 'Larasati Prasiwi', 22728, 'Suwilah', 'XI', 'IPS', 1),
(45, 'Liem, Vania Santoso', 22730, 'EVELINE SRI HASTUTI', 'XI', 'IPS', 1),
(46, 'Markus William Rizchi Siahaya', 22738, 'Christina Savsavubun', 'XI', 'IPS', 1),
(47, 'Martha Jenny Rona Destiningrum', 22739, 'Sri Sudarsih', 'XI', 'IPS', 1),
(48, 'Nathanael Andre Sinarto', 22764, 'OEY, MARIA KRISTINAWATI HADINATA', 'XI', 'IPS', 1),
(49, 'Nicolas Alfonso', 22775, 'SOFIATI MANAFE', 'XI', 'IPS', 1),
(50, 'Pande Ni Putu Devy Urmila', 22782, 'Eva Kusmawati', 'XI', 'IPS', 1),
(51, 'Rafael Richard Royce Atmadjaya', 22796, 'Indah Retnowati', 'XI', 'IPS', 1),
(52, 'Reinardus Mario Rosario', 22798, 'AGNES RIYANTI DEWANTARI', 'XI', 'IPS', 1),
(53, 'Aaron Karunia Sudibyo', 22576, 'Melan Andajani Andojo Susilo', 'XI', 'IPS', 2),
(54, 'Adam Roihan Djari Tara', 22579, 'Ria R. Djari', 'XI', 'IPS', 2),
(55, 'Afiza Zahra', 22582, 'Isma Nur Afni', 'XI', 'IPS', 2),
(56, 'Ahmad Rafi Wardani', 22584, 'Dwi Susilowati', 'XI', 'IPS', 2),
(57, 'Aloysius Raditya Arga Kusuma', 22594, 'ANASTASIA RITA PRIYASANTI', 'XI', 'IPS', 2),
(58, 'Amaradiva Widyadhana', 22599, 'Hindha Prambara', 'XI', 'IPS', 2),
(59, 'Angelita Ratidifania Putri Witjaksono', 22608, 'Theresia Oktaviani', 'XI', 'IPS', 2),
(60, 'Chandra Wijaya', 22627, 'MARTHA HERLINA MANIK', 'XI', 'IPS', 2),
(61, 'Daniel Alfianto Gurning', 22634, 'Nurhayati', 'XI', 'IPS', 2),
(62, 'Daniel Dwi Pratama', 22635, 'Rosje Laurentien Worotikan', 'XI', 'IPS', 2),
(63, 'Devada Alfa Dhinosof Ngangi', 22646, 'MEIKE PANGKEREGO', 'XI', 'IPS', 2),
(64, 'Dominico Savio Ivan Yoga Saputra', 22653, 'Margarita Titik Rahayu', 'XI', 'IPS', 2),
(65, 'Febriana Tesha Puspitasari', 22665, 'AMBAR KUSUMA ASTUTI', 'XI', 'IPS', 2),
(66, 'Ferdy Setiawan', 22667, 'Mulrani', 'XI', 'IPS', 2),
(67, 'Gabriel Sandi Trisula', 22672, 'MARIA SUHARTUTI', 'XI', 'IPS', 2),
(68, 'Gabriella Christina Lianto', 22674, 'TATIK INDRAWATI LIANTO', 'XI', 'IPS', 2),
(69, 'Georgius Rico Asto Pangestu', 22675, 'HELENA SUHARMIYATI', 'XI', 'IPS', 2),
(70, 'Grace Stefania Nugroho', 22680, 'HENDRA INTANA SJALIM', 'XI', 'IPS', 2),
(71, 'Graciano Kevin Setiawan', 22682, 'VELLY MARDALYNA', 'XI', 'IPS', 2),
(72, 'Griselda Nadine Chrisandi', 22685, 'CHRISTINA RAHAYU, SH', 'XI', 'IPS', 2),
(73, 'I Gusti Ngurah Wisnu Ananda Sulistra', 22694, 'Ni Gusti Ayu Oka Ariani', 'XI', 'IPS', 2),
(74, 'Jeremy Evan Budihartana', 22705, 'YUYUN SUSILOWATI', 'XI', 'IPS', 2),
(75, 'Jericho Edbert Satyadharma', 22706, 'EKA MAYESTI DAELI', 'XI', 'IPS', 2),
(76, 'Josep Marcellino Wijaya', 22711, 'Ellyzabeth Ellyanti', 'XI', 'IPS', 2),
(77, 'Joshia Triassaputra Timothy', 22713, 'Rini Waskitowati', 'XI', 'IPS', 2),
(78, 'Juan Paulo Kimmel Rahangiar', 22714, 'AGUSTINA TOKO', 'XI', 'IPS', 2),
(79, 'Justin Gabriel Chrissano', 22715, 'Dewi Kurniati', 'XI', 'IPS', 2),
(80, 'Martinus Donny Wijaya', 22740, 'MARIA MAGDALENA ENDAH WINARSIH', 'XI', 'IPS', 2),
(81, 'Richard Nova Hardrian', 22803, 'MESEPI AGNES ADRIANA', 'XI', 'IPS', 2),
(82, 'Ivane Tri Juliani', 22700, 'Liem Swie Lian', 'XI', 'IPS', 3),
(83, 'Jeheskiel Putra Tama', 22703, 'ARY PRIHATIN', 'XI', 'IPS', 3),
(84, 'Kevin Raja Ananggadipa Agung', 22721, 'SE ELITA WIDIARTI', 'XI', 'IPS', 3),
(85, 'Maheswara Arkha Khatulistiwa Kumandang', 22732, 'MAYA KUMANDANG', 'XI', 'IPS', 3),
(86, 'Marcellino Giovanni Handoko Suwigjo Putro', 22734, 'NATALIA JUDANA', 'XI', 'IPS', 3),
(87, 'Maura Kanya Kamasyara Asael', 22746, 'Maria Rika Susi Dewayani', 'XI', 'IPS', 3),
(88, 'Melinda Susilowati', 22747, 'Eddy Susilo', 'XI', 'IPS', 3),
(89, 'Michael Tico Majanateja', 22753, 'Retno Tedjo Murti', 'XI', 'IPS', 3),
(90, 'Nathanael Kevin Avrillio', 22766, 'Sri Lestari', 'XI', 'IPS', 3),
(91, 'Nathania Clarisa Arivo', 22767, 'VONNY KUMALASARI', 'XI', 'IPS', 3),
(92, 'Nathaniel Davito Adi Pradana', 22768, 'CAECILIA SRI WIDAYATI', 'XI', 'IPS', 3),
(93, 'Naufal Poetra Rahara', 22769, 'Ira Dustirawati', 'XI', 'IPS', 3),
(94, 'Nicholas Valentino Putratama', 22773, 'Lionita Damayanti', 'XI', 'IPS', 3),
(95, 'Obi Taurambi Girsang', 22777, 'Hotnauli Saragih', 'XI', 'IPS', 3),
(96, 'Orlando Yusufp Abimael Ireew', 22779, 'YOHANA WARYENSI', 'XI', 'IPS', 3),
(97, 'Priskila Agung', 22787, 'Melati HANDOJO', 'XI', 'IPS', 3),
(98, 'RADEN INDRA OKTA PRIMA MADURETNO', 22790, 'SURYANI PUDYASTUTI', 'XI', 'IPS', 3),
(99, 'Raden Roro Haridita Ekashintya Pratidina', 22791, 'HARIMARTINA SUSIMARITA', 'XI', 'IPS', 3),
(100, 'Radix Widya Wicaksono', 22793, 'E. DINI KUSUMA HANDAYANI', 'XI', 'IPS', 3),
(101, 'Richard Anderson Sugianto', 22802, 'RINA SYLVIANI', 'XI', 'IPS', 3),
(102, 'Richardo Setio Haryono', 22804, 'DJIE LIEN NA', 'XI', 'IPS', 3),
(103, 'Surya Intan Safitri', 22823, 'SAFITRIADI', 'XI', 'IPS', 3),
(104, 'Teodorus Bagas Pramudita', 22824, 'Zusbertha Ardina Widyaningtyas', 'XI', 'IPS', 3),
(105, 'Teofilo Rafael Simbolon', 22825, 'Damairia Viktoria Sembiring', 'XI', 'IPS', 3),
(106, 'Theodorus Abigail Nirwasita', 22827, 'Secandina Kartini', 'XI', 'IPS', 3),
(107, 'Trifena Gracia Irene Kurniawati', 22829, 'Erna Soesilowati', 'XI', 'IPS', 3),
(108, 'Valeri Nito Karandika', 22831, 'ASTERIA DIANTIKA', 'XI', 'IPS', 3),
(109, 'Wisely Nelson Avelino', 22839, 'YULI ASTUTININGSIH', 'XI', 'IPS', 3),
(110, 'Yohanes Sugiharto', 22845, 'Suharmi', 'XI', 'IPS', 3),
(111, 'Yonatan Ivan Gunawan', 22847, 'ESTERINA SUKAPTI', 'XI', 'IPS', 3),
(112, 'Abram Axel Vincent Suhartono Putra', 22577, 'ANSYELA RONDONUWU', 'XI', 'MIPA', 1),
(113, 'Adisti Tiara Febrianti', 22580, 'Puji Wiharti', 'XI', 'MIPA', 1),
(114, 'Aloysius Marcelino Shaw', 22593, 'LIEM TJE LAN', 'XI', 'MIPA', 1),
(115, 'Alva Raymon Yehudha', 22595, 'Ariani Setyawati', 'XI', 'MIPA', 1),
(116, 'Angela Gracia Cahyaningtyas', 22606, 'Dyah Esti Wulanjari', 'XI', 'MIPA', 1),
(117, 'Aric Krisnayar', 22614, 'KRISNATANI', 'XI', 'MIPA', 1),
(118, 'Arya Damar Seto', 22616, 'Sri Asmuni', 'XI', 'MIPA', 1),
(119, 'Benedictus Dewa Hantoro Putra', 22620, 'Trisia Budi Harjati', 'XI', 'MIPA', 1),
(120, 'Chrisologus Ivan Prasetyo', 22628, 'Sri Wulan', 'XI', 'MIPA', 1),
(121, 'Christopper Billie  Carllotta', 22630, 'MARIA IDA NURYANI', 'XI', 'MIPA', 1),
(122, 'Della Safira Dentisia', 22641, 'DRG. DEWI WARANINGSIH', 'XI', 'MIPA', 1),
(123, 'Dendy Andhika Wardana', 22643, 'FITRI ANI ASTARI', 'XI', 'MIPA', 1),
(124, 'Ega Wibowo', 22656, 'Margareta Elia Lilis Surjanti', 'XI', 'MIPA', 1),
(125, 'Ferry Clarence Novtara', 22668, 'Munita Mustika Dewi', 'XI', 'MIPA', 1),
(126, 'Ifan Isak Supusepa', 22695, 'isa', 'XI', 'MIPA', 1),
(127, 'Indra Dewa Ramadhan', 22698, 'ROFI PURWANINGRUM', 'XI', 'MIPA', 1),
(128, 'Jessica Rifka Ayu Pramono', 22707, 'LISI RIRIHENA PRAMONO', 'XI', 'MIPA', 1),
(129, 'Kevin Putra Adi Nugroho', 22720, 'Wiyanti Suparti', 'XI', 'MIPA', 1),
(130, 'Leksandriano Marconis Kialian', 22729, 'Fransina S. Songjanan', 'XI', 'MIPA', 1),
(131, 'Michael Christian Wibowo', 22751, 'Irene Indrawati', 'XI', 'MIPA', 1),
(132, 'Nathan Abraham Sinaga', 22762, 'Kristina Khairani Lubis,AMd.', 'XI', 'MIPA', 1),
(133, 'Oktavianus Kristyanto', 22778, 'INDRATI', 'XI', 'MIPA', 1),
(134, 'Oscar Dean Irianto', 22780, 'WENNING RAHAYU', 'XI', 'MIPA', 1),
(135, 'Ovaldus Krisnando Yan Hardianto', 22781, 'Rita Hartatiningsih', 'XI', 'MIPA', 1),
(136, 'Pramoda Judha Giwangkara', 22785, 'LUSIANA INDRIASARI', 'XI', 'MIPA', 1),
(137, 'Ricky Yordan Marpaung', 22805, 'NURBETTY JUNIATY SIMANJUNTAK', 'XI', 'MIPA', 1),
(138, 'Shallomitha Herwidya Denova', 22817, 'HERMANIS', 'XI', 'MIPA', 1),
(139, 'Varel Krisna Wibowo', 22835, 'Sri Andayani', 'XI', 'MIPA', 1),
(140, 'Yohanes Reza Aditama', 22842, 'Markowiyah', 'XI', 'MIPA', 1),
(141, 'Yohanes Suryo Harki', 22846, 'Chrispina Haryanti', 'XI', 'MIPA', 1),
(142, 'Andreas Anditya Purnama', 22601, 'Drg Rosalina Priani Prasetyanti', 'XI', 'MIPA', 2),
(143, 'Domenico Dwantara Lumingkewas', 22652, 'JOHANA SRI KUNTARTI', 'XI', 'MIPA', 2),
(144, 'Michael Bintang Purnama', 22750, 'SULISTIANI', 'XI', 'MIPA', 2),
(145, 'Monica Angel', 22755, 'IIN APRILIA', 'XI', 'MIPA', 2),
(146, 'Muhammad Arifin Gunawan', 22756, 'NUR HAVIFAH ANGGRAINI', 'XI', 'MIPA', 2),
(147, 'Natania Firsta Cahyani', 22760, 'SUNARTI', 'XI', 'MIPA', 2),
(148, 'Ni Putu Diva Kiirana Berana', 22771, 'Wiwit Saraswati W.W,SH', 'XI', 'MIPA', 2),
(149, 'Nicholas Tanugroho', 22772, 'ERISKA MEILIANI', 'XI', 'MIPA', 2),
(150, 'Nicolay Kevin Palvian', 22776, 'Silvia Dewi Chandra', 'XI', 'MIPA', 2),
(151, 'Prita Trivena Hesmono', 22788, 'HESTI NURWAHYUNI', 'XI', 'MIPA', 2),
(152, 'Puja Kusuma', 22789, 'Meidawati', 'XI', 'MIPA', 2),
(153, 'Radick Hans', 22792, 'Ratna Panca Dewi', 'XI', 'MIPA', 2),
(154, 'Rafael Felix Kurniawan', 22794, 'Indrawati', 'XI', 'MIPA', 2),
(155, 'Renata Kalyana Duhita', 22800, 'Yudi Yanti Kusumawardani', 'XI', 'MIPA', 2),
(156, 'Samuel Johan Hartono', 22812, 'Kao Fone Kusumadewi', 'XI', 'MIPA', 2),
(157, 'Sarah Jessica Regina', 22814, 'Sri Murni Metawati', 'XI', 'MIPA', 2),
(158, 'Stanislaskostka Christian Billy Chandra', 22819, 'Francisca Sri Suryanti', 'XI', 'MIPA', 2),
(159, 'Stephanie Berliana Sonia Ernawan', 22820, 'Yuventia Verra Sri Martanti', 'XI', 'MIPA', 2),
(160, 'Steven Chaniago Putranto', 22822, 'Rita Dewi', 'XI', 'MIPA', 2),
(161, 'Theo Raharja Hendrawan', 22826, 'MALIJANA', 'XI', 'MIPA', 2),
(162, 'Theodosius Wahyu Harry Putra', 22828, 'Wahyuning Rumanti', 'XI', 'MIPA', 2),
(163, 'Val Kyla Harwanto', 22830, 'SUSANTI', 'XI', 'MIPA', 2),
(164, 'Vanchris Ardi Leo', 22832, 'Iva Agustina', 'XI', 'MIPA', 2),
(165, 'Vater Elliyahu Timothy Prawira', 22836, 'RIMEM SAMPE', 'XI', 'MIPA', 2),
(166, 'Vikram Budhi Herlambang', 22837, 'Etty Wiyarni', 'XI', 'MIPA', 2),
(167, 'Vincentius Rano Wiradarma', 22838, 'Dini Anggraini', 'XI', 'MIPA', 2),
(168, 'Yessica Karen Nugroho', 22841, 'Janne Chandra', 'XI', 'MIPA', 2),
(169, 'Yohanes Salvatoris Nostri', 22843, 'C. Dyah Maya Sulistyowati', 'XI', 'MIPA', 2),
(170, 'Yohanes Setiawan', 22844, 'Katrin Setiawati', 'XI', 'MIPA', 2),
(171, 'Yosef Kristian Sidauruk', 22848, 'PONIA SIRAIT', 'XI', 'MIPA', 2),
(172, 'Yosep Adi Prabowo', 22849, 'Cristina Jumini', 'XI', 'MIPA', 2),
(173, 'Yoseph Willem Krisna Hendrawan', 22850, 'SRI HARTATI', 'XI', 'MIPA', 2),
(174, 'Delvin Marchell', 22642, 'NELLY TAMPUBOLON', 'XI', 'MIPA', 3),
(175, 'Devara Ivan Mahardika', 22647, 'Susianti', 'XI', 'MIPA', 3),
(176, 'Devina Nurwanto', 22648, 'FAMIE', 'XI', 'MIPA', 3),
(177, 'Diajeng Sekar Kinasih', 22650, 'Ester Puspaningdyah', 'XI', 'MIPA', 3),
(178, 'Ditha Klarissa Sutan', 22651, 'Susi Rosana', 'XI', 'MIPA', 3),
(179, 'Dylan Saputra Wibowo', 22654, 'MEIFIANTY', 'XI', 'MIPA', 3),
(180, 'Edward Wibisono', 22655, 'Tanti Surjani', 'XI', 'MIPA', 3),
(181, 'Eunice Louisa Iswahyudi', 22660, 'Lani Inawati', 'XI', 'MIPA', 3),
(182, 'Evan Arka Erlangga Putra', 22661, 'YUNI MURTYASTUTI', 'XI', 'MIPA', 3),
(183, 'Evan Ezra', 22662, 'MARTA APRIJANA', 'XI', 'MIPA', 3),
(184, 'Evan Setiadi', 22664, 'RIENE LESTARI', 'XI', 'MIPA', 3),
(185, 'Frizas Yardena Widharmo', 22670, 'Windu Purnawuri', 'XI', 'MIPA', 3),
(186, 'Geovanny Alexander', 22676, 'EKA SULISTYAWATI', 'XI', 'MIPA', 3),
(187, 'Gracia Dinda Kirana Larekani', 22681, 'Katarina Nartini', 'XI', 'MIPA', 3),
(188, 'Gregorius Eric Trimukti', 22683, 'Chatarina Darwati', 'XI', 'MIPA', 3),
(189, 'Hansel Wylie Juliandro', 22686, 'Yulianti Sau', 'XI', 'MIPA', 3),
(190, 'Henry Fischer', 22690, 'DR.JUR.ANY ANDJARWATI, SH, M.JUR', 'XI', 'MIPA', 3),
(191, 'I Gusti Agung Dwiki Jayastika', 22692, 'Godeliva Shinta', 'XI', 'MIPA', 3),
(192, 'Ignatius Eric Liangto', 22696, 'LIDWINA LOVITA', 'XI', 'MIPA', 3),
(193, 'Isabella Tiara Ariesta', 22699, 'VIVIEN ARTHA SIMANJUNTAK', 'XI', 'MIPA', 3),
(194, 'Jonathan Tambun', 22710, 'Herbian Sirait', 'XI', 'MIPA', 3),
(195, 'Kenya Sung Arum Melati', 22717, 'Pipin Ani Sulistiati, S.I.P', 'XI', 'MIPA', 3),
(196, 'Kevin Edgard Halim', 22718, 'Annastasia Betty Sulistyaningsih', 'XI', 'MIPA', 3),
(197, 'Kezia Dwita Evriani', 22722, 'Pipin Andriani', 'XI', 'MIPA', 3),
(198, 'Kharis Andika Delliando', 22724, 'Britsiana Wilianti', 'XI', 'MIPA', 3),
(199, 'Kukuh Prasetya Immanuel', 22726, 'Eni Supriyani', 'XI', 'MIPA', 3),
(200, 'Marvelino Yoan Nugroho', 22741, 'ANNA YULI ASTUTI', 'XI', 'MIPA', 3),
(201, 'Matteo Abraham Kobe Susetyo', 22744, 'Nuryati Bertha Asima', 'XI', 'MIPA', 3),
(202, 'Matthew Hertama Soukotta', 22745, 'Bernadette Budi Utami', 'XI', 'MIPA', 3),
(203, 'Mellisa Nagata Christina', 22748, 'Yohana Wijaya', 'XI', 'MIPA', 3),
(204, 'Pradesta Pinto Phallosa', 22784, 'CHRISTA DEWI', 'XI', 'MIPA', 3),
(205, 'ALBERT THEOMARVEL ADI', 22585, 'KAPRANANINGTYAS', 'XI', 'MIPA', 4),
(206, 'Alden Xavier Iddo Frandansen', 22587, 'ANITA FIBRIANTI', 'XI', 'MIPA', 4),
(207, 'Aletta Christabel Fenan', 22588, 'ANITA HIENDIARTO', 'XI', 'MIPA', 4),
(208, 'Alevito Raditya Prabaswara Kusuma', 22589, 'SILVINA KIRANA KUSUMA', 'XI', 'MIPA', 4),
(209, 'Alvera Aditya Agustin', 22596, 'Katarina Lisnawati', 'XI', 'MIPA', 4),
(210, 'Angel Elisabeth Pasaribu', 22604, 'ADRIEN SAGAY', 'XI', 'MIPA', 4),
(211, 'Angel Felina Kurniawan', 22605, 'Helviani', 'XI', 'MIPA', 4),
(212, 'Anita Lokarissa', 22611, 'Ng, Mei Shia', 'XI', 'MIPA', 4),
(213, 'Anthonius Surya Jaya Cipta', 22612, 'Juliana Megahwati', 'XI', 'MIPA', 4),
(214, 'Basilius Tengang', 22619, 'Emilia', 'XI', 'MIPA', 4),
(215, 'Billie Ariyanta Hartono', 22622, 'Atin Nurwasis', 'XI', 'MIPA', 4),
(216, 'Brandon Julian Blose', 22623, 'Dian Sukmawati', 'XI', 'MIPA', 4),
(217, 'Cathryn Meira Dalia', 22624, 'EKA LELIANA RESPATI', 'XI', 'MIPA', 4),
(218, 'Cornelia Shania Enditha Prabowo', 22631, 'VERA NOVITA DAMINTO', 'XI', 'MIPA', 4),
(219, 'DANDI AISWARYA PUTRA', 22633, 'ISODORA IRMINA FIONA MIEDITA ARIYANTI', 'XI', 'MIPA', 4),
(220, 'Daniel Phangkay', 22636, 'LELY R MANGUNDAP', 'XI', 'MIPA', 4),
(221, 'David Abesaputra Pratama', 22637, 'AYMAWATI', 'XI', 'MIPA', 4),
(222, 'Greisies Heriyanto', 22684, 'Sopiah Buniarsih', 'XI', 'MIPA', 4),
(223, 'Kevin P.k. Wilson', 22719, 'Hermince Luisan', 'XI', 'MIPA', 4),
(224, 'Marcelino Hermawan', 22733, 'Ivonne Natalia', 'XI', 'MIPA', 4),
(225, 'Maria Syantika Maharani', 22736, 'JULIANTI KEULANA', 'XI', 'MIPA', 4),
(226, 'Mathew Aurelius Radetiya', 22742, 'JUSNIWATI', 'XI', 'MIPA', 4),
(227, 'Matsumura Kiyo Aki', 22743, 'Since Giovani', 'XI', 'MIPA', 4),
(228, 'Michael Jovan Nathanael', 22752, 'Cristina Hartono', 'XI', 'MIPA', 4),
(229, 'Mikel Darren Manason', 22754, 'ERLYNA MANURUNG', 'XI', 'MIPA', 4),
(230, 'Nico Wijaya', 22774, 'SUSIE CHRISTIANA', 'XI', 'MIPA', 4),
(231, 'Raihan Bramantya Darryl Satria Ramadhani', 22797, 'Maria Damayanti Handayani', 'XI', 'MIPA', 4),
(232, 'Ribka Kristanti Soegiharto', 22801, 'Supriati', 'XI', 'MIPA', 4),
(233, 'Zefanya Barenputra Kuncoro', 22851, 'Drh. Irene Ayu Anggraini', 'XI', 'MIPA', 4),
(234, 'Albertus Wijonarko', 22586, 'AFRA TIEN SOTYANINGRUM', 'XI', 'MIPA', 5),
(235, 'Andre Aryo Wicaksono', 22600, 'MARIETA SUSILAWATI PAWAN GUMANTI, SARJANA HUKUM', 'XI', 'MIPA', 5),
(236, 'Andrew Kenzu Siahaan', 22603, 'ELYANA PRIHANTINI SIAGIAN', 'XI', 'MIPA', 5),
(237, 'Angela Graine Erilhya Apitalau', 22607, 'CISILIA UMBASENG', 'XI', 'MIPA', 5),
(238, 'Arkana Reuben Darmawan', 22615, 'Ellen Mourenthea Claussen', 'XI', 'MIPA', 5),
(239, 'Azurra Raissa Herpranowo', 22617, 'Ferry Yuliana Sharif', 'XI', 'MIPA', 5),
(240, 'Barlian Adar Maringan Tua Purba', 22618, 'Sarma Br Sinambela', 'XI', 'MIPA', 5),
(241, 'Bertram Kevin Arvetona', 22621, 'Cahendri Endarti', 'XI', 'MIPA', 5),
(242, 'Christabel Jeva Putra Wijaya', 22629, 'Dewi Nugraheni Novia Wijayanti', 'XI', 'MIPA', 5),
(243, 'David Niendrew', 22639, 'WENNI WIDI ASTUTI', 'XI', 'MIPA', 5),
(244, 'Gabriel Anggoro Septya Nugroho', 22671, 'Dokter Hewan CHRISTINA MARIA PRIHANTARI SULISTYANI', 'XI', 'MIPA', 5),
(245, 'Hein Francist Nicolatio Hutagalung', 22687, 'AGNES J. S. JAFTORAN', 'XI', 'MIPA', 5),
(246, 'Johanes Rian Nugroho', 22708, 'SRI UTAMI DEWI HANDAYANI', 'XI', 'MIPA', 5),
(247, 'Joseph Putra Mulyono', 22712, 'SISKA YUANITA', 'XI', 'MIPA', 5),
(248, 'Musa Beringin Belantara Rogi', 22757, 'Irawati Rogi Saleh', 'XI', 'MIPA', 5),
(249, 'Nararya Surya Bramasta', 22758, 'Netty Sandra Dewi', 'XI', 'MIPA', 5),
(250, 'Nathalia Angelica', 22761, 'YODIANA LUHAT', 'XI', 'MIPA', 5),
(251, 'Nathan Ariel Phedra', 22763, 'Retno Diatiningsih', 'XI', 'MIPA', 5),
(252, 'Ni Komang Mayra Aurelia', 22770, 'TRI NURHAYATI', 'XI', 'MIPA', 5),
(253, 'Prabha Yudha Surya Mahardika Pongkapadang', 22783, 'NINGSIH PONGKAPADANG', 'XI', 'MIPA', 5),
(254, 'Prasetya Judha', 22786, 'Idawati', 'XI', 'MIPA', 5),
(255, 'Rafael Nelson Nainggolan', 22795, 'RESLINA BR GAMBUNAN', 'XI', 'MIPA', 5),
(256, 'Reinhart Endy Marchello', 22799, 'Rita Yoane Putri', 'XI', 'MIPA', 5),
(257, 'Rizky Yonathan', 22808, 'Siani Agim', 'XI', 'MIPA', 5),
(258, 'Safina Arrasyad Zakia Fabrary', 22810, 'Dina Sasmita Sari', 'XI', 'MIPA', 5),
(259, 'Samuel Nicholas Suyoso', 22813, 'Inggriani', 'XI', 'MIPA', 5),
(260, 'Savina Verra Oktorrio', 22815, 'DWI TITUT FERIANI', 'XI', 'MIPA', 5),
(261, 'Adetyaswening Mahanani', 22345, 'Ninik Suciati', 'XII', 'BHS', 0),
(262, 'Alexander Pedestrian Garda Paska', 22351, 'Anastasia Sri Hestutiningsih', 'XII', 'BHS', 0),
(263, 'Angelyn Voice Tomboelu', 22362, 'Ronyati Rampagoa', 'XII', 'BHS', 0),
(264, 'Anna Maria Christien', 22363, 'Tinneke R Mansnembra', 'XII', 'BHS', 0),
(265, 'Antonia Kinanti Prajogo', 22364, 'Ratih Agusriana', 'XII', 'BHS', 0),
(266, 'Chrisva Baldwin', 22386, 'Norliva', 'XII', 'BHS', 0),
(267, 'Exel Chrystiawan', 22412, 'Sri Evi Darmawati', 'XII', 'BHS', 0),
(268, 'Fathahiya Insani Pehulisa Sembiring', 22416, 'Fenny Ariesty Ginting', 'XII', 'BHS', 0),
(269, 'Komang Yola Febria Regantina', 22473, 'Hari Agus Ratnaningati', 'XII', 'BHS', 0),
(270, 'Maria Magdalena Melliana Rolasma Sitanggang', 22492, 'Rosalina', 'XII', 'BHS', 0),
(271, 'Nathania Angela Hartono', 22505, 'Lanny Susilowati Irawan', 'XII', 'BHS', 0),
(272, 'Sharlly Smas', 22541, 'Eliyani Tehupuring', 'XII', 'BHS', 0),
(273, 'Triani Octora Marandoff', 22552, 'Ani Sumarni', 'XII', 'BHS', 0),
(274, 'Adrial Kevin Wahyu Saputra', 22348, 'Theresia Irma Febriandari', 'XII', 'IPS', 1),
(275, 'Ahta Alapaci', 22349, 'Umi Sumariani', 'XII', 'IPS', 1),
(276, 'Alexander Alvin Rahadian', 22350, 'Patricia Esti Rahayuni', 'XII', 'IPS', 1),
(277, 'Alfaraldo Kanisius Maylandro Irianto Renyaan', 22354, 'Yuni I Djonie', 'XII', 'IPS', 1),
(278, 'Amadeus Winata Kosasih', 22356, 'Yeni Prabangkara', 'XII', 'IPS', 1),
(279, 'Andrew Michel Avriliano', 22359, 'Caroline ML Tobing', 'XII', 'IPS', 1),
(280, 'Angelia Christiani Wibowo', 22361, 'Aytik Sukmawati', 'XII', 'IPS', 1),
(281, 'Bernadeta Vina Wahyu Yuliana', 22372, 'Christina Erlin Disasmitowati', 'XII', 'IPS', 1),
(282, 'Bryan Sievian Evangelisto', 22381, 'Fenna Yosita Susanto', 'XII', 'IPS', 1),
(283, 'Candra Hermawan', 22384, 'Lany Sutanti', 'XII', 'IPS', 1),
(284, 'Chiquita Emma Aurora Surya', 22573, 'Cynthia Agustina', 'XII', 'IPS', 1),
(285, 'Danella Patricia Alim', 22387, 'Juli Ambarwati', 'XII', 'IPS', 1),
(286, 'Daniel Ardyos Ram Kana', 22388, 'Arien Mariastuti', 'XII', 'IPS', 1),
(287, 'Daniel Pratama Putra Santoso', 22389, 'Rika', 'XII', 'IPS', 1),
(288, 'David Jonathan Gabryel Hutagalung', 22391, 'Margaretha V Parinussa', 'XII', 'IPS', 1),
(289, 'Dwi Arya Putra', 22401, 'Suratmi', 'XII', 'IPS', 1),
(290, 'Ellora Katharina Janice', 22405, 'Sri Widariyati', 'XII', 'IPS', 1),
(291, 'Elvaretta Rosabel Wardhana', 22407, 'Lia Nurhadjanti', 'XII', 'IPS', 1),
(292, 'Hanz Gabriel Malvin Ismono', 22435, 'Angeline Yunita Grace Nancy Letik', 'XII', 'IPS', 1),
(293, 'Immanuel Risantio Utomo', 22447, 'Tri Utami Ririn Widayanti', 'XII', 'IPS', 1),
(294, 'Jeremy Andrew Yoram Latu Tulalessy', 22453, 'Petra M.A Heatubun', 'XII', 'IPS', 1),
(295, 'Jonathan Bryan Santoso', 22459, 'Fenny Candrawati Tanaya', 'XII', 'IPS', 1),
(296, 'Kenneth Austin', 22467, 'Deby Kusnaty Afendy', 'XII', 'IPS', 1),
(297, 'Kristian Zefanya Riyanto', 22474, 'Irene Kurniawati Sutanto', 'XII', 'IPS', 1),
(298, 'Lidia Kemela Medeli Sihite', 22477, 'Tri Fina Pamungkas', 'XII', 'IPS', 1),
(299, 'Marcellus Tanaya Pastika Kanta', 22487, 'Auria Serafica Kristini', 'XII', 'IPS', 1),
(300, 'Muhammad Faisal Hanan', 22503, 'Mitra Setiana', 'XII', 'IPS', 1),
(301, 'Nicholas Juan Pradana', 22508, 'Made Erma Suryani', 'XII', 'IPS', 1),
(302, 'Ovi Ria Khinanti', 22512, 'Fenty Irdiyati', 'XII', 'IPS', 1),
(303, 'Patricia Isabel Sutiono', 22513, 'Evi Handjali', 'XII', 'IPS', 1),
(304, 'Patrick Bryant Sinaga', 22515, 'Masni Kartini Purba', 'XII', 'IPS', 1),
(305, 'Dewa Ketut Neli Agustin', 22394, 'Dewa Putu Sni Arti', 'XII', 'IPS', 2),
(306, 'Efrem Aurell Mendieta Ardyanto', 22403, 'Foorensia Eni Wahyuni', 'XII', 'IPS', 2),
(307, 'Fellita Liliani Hartono', 22418, 'Liong Siauw Mui', 'XII', 'IPS', 2),
(308, 'Frederick Roivaldo Ginting', 22420, 'Nirmala Br Karo Sekali', 'XII', 'IPS', 2),
(309, 'Gabriell Halley Steven Assandra', 22422, 'Wiwik Aris Arianti', 'XII', 'IPS', 2),
(310, 'Garuda Cahya Pamungkas', 22423, 'Oning Tyas Dwi Ernia Manafe', 'XII', 'IPS', 2),
(311, 'Genta Syalom Anasuya', 22424, 'Nunung Nurlaela', 'XII', 'IPS', 2),
(312, 'Gesang Pangestuning Diyu', 22425, 'Anik Ariswandari', 'XII', 'IPS', 2),
(313, 'Gideon Tumpal Seno Sepriano Simatupang', 22426, 'Lely Triastuti', 'XII', 'IPS', 2),
(314, 'Grace Natasha Putri Sukmawan', 22429, 'Sylvia Kusumaningrum', 'XII', 'IPS', 2),
(315, 'Gregorius Ariel Bishmoko', 22431, 'Maria Natalia Frita Destiana', 'XII', 'IPS', 2),
(316, 'Hendrik Collin Mapi', 22438, 'Theresia Mening', 'XII', 'IPS', 2),
(317, 'Jonathan Ariel Johannes', 22458, 'Liem yayan Setiyowati', 'XII', 'IPS', 2),
(318, 'Juan Antonio Surya Saputra', 22462, 'Novi Riawati', 'XII', 'IPS', 2),
(319, 'Juan Efrata Larope', 22463, 'Erimina Lembo Lamoki', 'XII', 'IPS', 2),
(320, 'Louis Melvern Hartono', 22481, 'Yenny Merawati', 'XII', 'IPS', 2),
(321, 'Marcellius Rafael Mulia', 22486, 'Elsi Yulia', 'XII', 'IPS', 2),
(322, 'Pawestri Aulia Kusumaning Alhusna', 22517, 'Endang Sriningsih', 'XII', 'IPS', 2),
(323, 'Priscilla Raevita Natalia', 22519, 'Tjoe Siauw Ing', 'XII', 'IPS', 2),
(324, 'Putri Diah Esthiningrum', 22521, 'Diah Mariyanti', 'XII', 'IPS', 2),
(325, 'Rachael Octaviena', 22575, 'Rina Setyowati', 'XII', 'IPS', 2),
(326, 'Raden Yeremia Agung Prabaswara', 22522, 'Ruth Eliana Purwanti', 'XII', 'IPS', 2),
(327, 'Raymond Leonard Ondy', 22523, 'Erine Puspitasari', 'XII', 'IPS', 2),
(328, 'Reymondus Boma Yudhawan Nugroho', 22526, 'Maria Magdalena Sudarmi', 'XII', 'IPS', 2),
(329, 'Ruhembun Lingkar Hening', 22533, 'Danny Dwi Nugraheni', 'XII', 'IPS', 2),
(330, 'Samuel Pranata Sembiring', 22535, 'Barus Monita', 'XII', 'IPS', 2),
(331, 'Samuella Gihonamaris Priyono', 22536, 'Kusmarijati Dwi Rahayu', 'XII', 'IPS', 2),
(332, 'Satria Sanjaya', 22537, 'Heri Sulastri', 'XII', 'IPS', 2),
(333, 'Thalita Diah Ayu Nariswari', 22548, 'Niken Haswari', 'XII', 'IPS', 2),
(334, 'Wino Andika Batara', 22561, 'Anastasia Sulle', 'XII', 'IPS', 2),
(335, 'Fransiskus Xaverius Ryszard Sumeisey', 22421, 'Maria Imelda Sumeisey', 'XII', 'IPS', 3),
(336, 'Gilbert Peter  Imkotta', 22427, 'Roxana Maria Sarlota Muskita', 'XII', 'IPS', 3),
(337, 'Greeszilla Martha Sukarso', 22430, 'Loius Ermina Natalia', 'XII', 'IPS', 3),
(338, 'Ignatius Kristo Aji Himawan', 22445, 'Irmina Anida Christi Wardani', 'XII', 'IPS', 3),
(339, 'Kelana Eka Rizky Saputra', 22464, 'Rini Cahyani', 'XII', 'IPS', 3),
(340, 'Keni Morino', 22466, 'Suratiningsih', 'XII', 'IPS', 3),
(341, 'Kevin Putrabarinda', 22470, 'Iin Indah Irawati', 'XII', 'IPS', 3),
(342, 'Khansa Fathina', 22471, 'Tri Wuryadhita', 'XII', 'IPS', 3),
(343, 'Kinanthi Rayi Kinasih', 22472, 'Endang Erdihandini', 'XII', 'IPS', 3),
(344, 'Liem, Alan Dharmasaputra Santoso', 22478, 'Eveline Sri Hastuti', 'XII', 'IPS', 3),
(345, 'Majesty Victoria Jalu', 22482, 'Cicilia Dewi', 'XII', 'IPS', 3),
(346, 'Mananta Glory Oktavia', 22483, 'Purnawita', 'XII', 'IPS', 3),
(347, 'Marcelina Hermawan', 22485, 'Felijana', 'XII', 'IPS', 3),
(348, 'Michael Surya Setjoadityo', 22498, 'Nina Tri Pangesti', 'XII', 'IPS', 3),
(349, 'Monica Agustina Tri Prastyanti', 22502, 'Chatarina Octavia Tri Harjanti', 'XII', 'IPS', 3),
(350, 'Nareswari Nisita', 22504, 'Idayu Bharatantri', 'XII', 'IPS', 3),
(351, 'Olivia Kemebu Medeli Sihite', 22511, 'Duma Herlina', 'XII', 'IPS', 3),
(352, 'Rayo Janottama', 22524, 'Megawati', 'XII', 'IPS', 3),
(353, 'Roy Bima Ahimsa', 22532, 'Agnes Endah Wulan Suri', 'XII', 'IPS', 3),
(354, 'Selmina Sayori', 22540, 'Elisabet Sayori', 'XII', 'IPS', 3),
(355, 'Shinta Vanessa Briggita', 22544, 'Junita Herawati', 'XII', 'IPS', 3),
(356, 'Theresa Maranatha', 22549, 'Kartika Dewi', 'XII', 'IPS', 3),
(357, 'Tirel Maurinka', 22551, 'Lelly Marina', 'XII', 'IPS', 3),
(358, 'Vanadya Oktaviana', 22553, 'Susi Haryani Triwahyuni', 'XII', 'IPS', 3),
(359, 'Vania Hendradiarti', 22555, 'Hennik Sumengkowati', 'XII', 'IPS', 3),
(360, 'Viallino Putra Octavianus', 22556, 'Trianasari', 'XII', 'IPS', 3),
(361, 'Vincentius De Paulo Elang Nusa', 22558, 'Elisabeth Ratna Damayanti', 'XII', 'IPS', 3),
(362, 'Yohanes Ario Seto', 22564, 'Theresia Jati Prasti Hanjayani', 'XII', 'IPS', 3),
(363, 'Yonatar', 22565, 'Mikawati Tarigan', 'XII', 'IPS', 3),
(364, 'Yustiya Maharani', 22568, 'Sarmiyati', 'XII', 'IPS', 3),
(365, 'Zefanya Gilbertolius Bintoro', 22570, 'Sri Jati', 'XII', 'IPS', 3),
(366, 'Abeld Setiawan', 22342, 'Arum Estiningsih', 'XII', 'MIPA', 1),
(367, 'Adelia Sherlly Quinones', 22344, 'Feni Efita Andriani', 'XII', 'MIPA', 1),
(368, 'Adhimas Wahyu Satriawan', 22346, 'Rosa Delima Anggaraningrum Prihastuti', 'XII', 'MIPA', 1),
(369, 'Adiana Hemas Desira', 22347, 'Ratiwi', 'XII', 'MIPA', 1),
(370, 'Alexander Setiawan', 22352, 'Aprilia Vony Junaedi', 'XII', 'MIPA', 1),
(371, 'Alexandra Isabel Nugroho', 22353, 'Emmi Wigiarti Pangesti', 'XII', 'MIPA', 1),
(372, 'Alfito Girsang', 22355, 'Hotnauli Saragih', 'XII', 'MIPA', 1),
(373, 'Anastasia Ayu Widyandari', 22357, 'Elvi Rina Widiaswati', 'XII', 'MIPA', 1),
(374, 'Andro Klemens Nugrahanto', 22360, 'Purwantini', 'XII', 'MIPA', 1),
(375, 'Ardhya Devanty Cahyaningtyas', 22366, 'Adjeng Prihantati Siwi', 'XII', 'MIPA', 1),
(376, 'Arif Suryo Kurniawan', 22367, 'Nur Handayani', 'XII', 'MIPA', 1),
(377, 'Bintang Tegar Pangestu', 22377, 'Tutiani', 'XII', 'MIPA', 1),
(378, 'Dearren Alvado Glendyap', 22393, 'Siek Klaudia Melia Siskawati', 'XII', 'MIPA', 1),
(379, 'Dinda Florentina Anrissa Rotty', 22397, 'Ria Ratna Sari', 'XII', 'MIPA', 1),
(380, 'Felix Rahadiyan', 22417, 'Christanti Susanawati', 'XII', 'MIPA', 1),
(381, 'Glenn Baby Christsanto', 22428, 'Jetti Pantjahandajani', 'XII', 'MIPA', 1),
(382, 'Gregorius Donny Setiawan', 22432, 'Sri Iswari', 'XII', 'MIPA', 1),
(383, 'Guruh Arya Wicaksana', 22433, 'Maria Magda', 'XII', 'MIPA', 1),
(384, 'Harrison Himawan Hartono', 22436, 'Liem Lifani Hadinata', 'XII', 'MIPA', 1),
(385, 'Hildegrad Arnaldo Herikusuma', 22439, 'Margaretha Yayuk', 'XII', 'MIPA', 1),
(386, 'Janice Citra Kosasih', 22451, 'Tri Mulyani', 'XII', 'MIPA', 1),
(387, 'Josues Alessandro Hermanto', 22460, 'Hongkie Megawati', 'XII', 'MIPA', 1),
(388, 'Mikha Cloudyo Hasian', 22499, 'Agnes Revianuly Panggabean', 'XII', 'MIPA', 1),
(389, 'Reynaldo', 22528, 'Elis', 'XII', 'MIPA', 1),
(390, 'ROOSEFELT THEODORE RONSUMBRE', 22531, 'Katerina Manimau', 'XII', 'MIPA', 1),
(391, 'Steve Richardo Christiawan', 22546, 'Ika Apriyani', 'XII', 'MIPA', 1),
(392, 'Vina Junia Santoso', 22557, 'Rosmini', 'XII', 'MIPA', 1),
(393, 'Yoana Tiara Yuniari', 22562, 'Anastasia Almadestiari', 'XII', 'MIPA', 1),
(394, 'Audrey Joanna Kurniadi', 22368, 'Citrawati', 'XII', 'MIPA', 2),
(395, 'Azriel Setyo Nugroho Hasudungan', 22370, 'Christiana Fajarini Endah Suwarti', 'XII', 'MIPA', 2),
(396, 'Bernadetta Anjung Anabella Vianita', 22373, 'Lucia Eko Priatiningtyas', 'XII', 'MIPA', 2),
(397, 'Billy Adiguna', 22374, 'Nurana', 'XII', 'MIPA', 2),
(398, 'Bimma Perwira Yudha Purnomo', 22375, 'Ana Sri Ekaningsih', 'XII', 'MIPA', 2),
(399, 'Bimo Nugroho Aji', 22376, 'Yuliana Eni Lestari Rahayu', 'XII', 'MIPA', 2),
(400, 'Bonaventura Roy Surya Saputra', 22378, 'Maria Magdalena Erna Irawati Saputra', 'XII', 'MIPA', 2),
(401, 'Bryan Agung Sutanto', 22379, 'Tri Aynilinawati', 'XII', 'MIPA', 2),
(402, 'Bryan Hutama Handoyo', 22380, 'Esi', 'XII', 'MIPA', 2),
(403, 'Calvin Chan', 22383, 'Jap Tje Nah', 'XII', 'MIPA', 2),
(404, 'Hendrickson Himawan Hartono', 22437, 'LIem Lifani Hadinata', 'XII', 'MIPA', 2),
(405, 'Hosea Maynardo Yudono', 22440, 'Minarsih', 'XII', 'MIPA', 2),
(406, 'I Made Sri Yoga Bhuwana', 22441, 'Ni Nyoman Aryaningsih', 'XII', 'MIPA', 2),
(407, 'Ida Bagus Darma Mukti Utama', 22443, 'Femi Rosalita Maharani', 'XII', 'MIPA', 2),
(408, 'Ignasius Louis Fernando Samosir', 22444, 'Sulikah', 'XII', 'MIPA', 2),
(409, 'Immanuel Joy Perkasa', 22446, 'Rotua Sari Widiastuti', 'XII', 'MIPA', 2),
(410, 'Immanuel Usodo', 22448, 'Maria Sri Utari', 'XII', 'MIPA', 2),
(411, 'Indra Puja Tri Pamungkas', 22449, 'Sunarti', 'XII', 'MIPA', 2),
(412, 'Jecey Amanda Setyono', 22452, 'Andi Indriani Matadung', 'XII', 'MIPA', 2),
(413, 'Jerry Sihite', 22454, 'Murni Tampubolon', 'XII', 'MIPA', 2),
(414, 'Johannes Baptista Adiatmaja Pambudi', 22456, 'Maria Yosephine Dwianapritta', 'XII', 'MIPA', 2),
(415, 'Kent Miracle Putra Guntur', 22468, 'Elisabeth Budisetyawan', 'XII', 'MIPA', 2),
(416, 'Mikhael Ryan Pratama', 22500, 'Silvi Novita Julie', 'XII', 'MIPA', 2),
(417, 'Miracle Angel Yosie Rogi', 22501, 'Susan Paulineke Marlain', 'XII', 'MIPA', 2),
(418, 'Ni Made Deva Ariani', 22506, 'Sri Hartatik', 'XII', 'MIPA', 2),
(419, 'Ni Wayan Trevanna', 22507, 'Tio Vera Chandra', 'XII', 'MIPA', 2),
(420, 'Patrick Jefferson Balirante', 22516, 'Ratna Andriani', 'XII', 'MIPA', 2),
(421, 'Reynald Vitalino Putra', 22527, 'Ellen Saloma Kesaulya', 'XII', 'MIPA', 2),
(422, 'Archeleno Masayori Samuel Doo', 22365, 'Fera Novita Sawaki', 'XII', 'MIPA', 3),
(423, 'Basillius Santika Marchio Martana', 22371, 'Maria Ida Nefertiti Tarukalio', 'XII', 'MIPA', 3),
(424, 'Christophorus Sekundera Dewandaru Priyanka', 22385, 'Christiana Rini Puspitasari', 'XII', 'MIPA', 3),
(425, 'Danilo Leonard Duan', 22390, 'Ayi Satriana Syamsia', 'XII', 'MIPA', 3),
(426, 'David Wibisono', 22392, 'L Margarita', 'XII', 'MIPA', 3),
(427, 'Diah Ayu Sekar Agung', 22395, 'Rita Bintariati', 'XII', 'MIPA', 3),
(428, 'Diah Erli Aprili Molle', 22396, 'Woro Pujiastuti', 'XII', 'MIPA', 3),
(429, 'Dionysius Surya Gumilang Sutadrana', 22398, 'Elisabeth Rosaria Wijayanti', 'XII', 'MIPA', 3),
(430, 'Donny Priatmaja', 22399, 'Nugrahani', 'XII', 'MIPA', 3),
(431, 'Duan Yoga Crestiano Kwando', 22400, 'Sunarti', 'XII', 'MIPA', 3),
(432, 'Endricho Abednego', 22408, 'Dyah Retnani Dwi Arini', 'XII', 'MIPA', 3),
(433, 'EPPATTA KAELASA ANTARANGGA', 22409, 'Nanik Wihartini', 'XII', 'MIPA', 3),
(434, 'Esnawan Devin Irwanto', 22410, 'Sari Venny Hartanto', 'XII', 'MIPA', 3),
(435, 'Fanny Nurwanto', 22413, 'Famie', 'XII', 'MIPA', 3),
(436, 'Farel Gogo Mulia', 22415, 'Anik Pujiastuti', 'XII', 'MIPA', 3),
(437, 'Jessica Christy Handoko', 22455, 'Christiani Tiesnawati', 'XII', 'MIPA', 3),
(438, 'Jovi Abednego', 22461, 'Maria Magdalena Evi Ardi Paramanita', 'XII', 'MIPA', 3),
(439, 'Kelvin Lim', 22465, 'Leny', 'XII', 'MIPA', 3),
(440, 'Kevin Martin Hendra Wijaya', 22469, 'Vivi Aldita', 'XII', 'MIPA', 3),
(441, 'Laetisha Chouw Kurniawan', 22475, 'Eka Nugraheni Wibawa', 'XII', 'MIPA', 3),
(442, 'Leonard Daniel Winarto', 22476, 'Tri Fina Pamungkas', 'XII', 'MIPA', 3),
(443, 'Mesakh Adianto Aria Dewangga', 22497, 'Soeharjati', 'XII', 'MIPA', 3),
(444, 'Nirvana Fortuna', 22509, 'Yini Megawati', 'XII', 'MIPA', 3),
(445, 'Olivia Florentine Firdusia', 22510, 'Linda Iin Widiyati', 'XII', 'MIPA', 3),
(446, 'Probolintang Krissambodo', 22520, 'Weni', 'XII', 'MIPA', 3),
(447, 'Ridho Willie Prakarsa', 22529, 'Novita Dewi Tanjung', 'XII', 'MIPA', 3),
(448, 'Sagala, Agustinus Leonard', 22534, 'Endang Silalahi', 'XII', 'MIPA', 3),
(449, 'Stefani Fransisca', 22545, 'Lie Fung Lie', 'XII', 'MIPA', 3),
(450, 'Thalia Khairunisya Salwabilla', 22547, 'Suratinah', 'XII', 'MIPA', 3),
(451, 'Timothy Kevin Sunaryo', 22550, 'Melisa', 'XII', 'MIPA', 3),
(452, 'Andreas Kurniawan Budi Santoso', 22358, 'Irmina Meta Kurniawati', 'XII', 'MIPA', 4),
(453, 'Ayu Tania Putrisma Dewi', 22369, 'Dewi Risnawati', 'XII', 'MIPA', 4),
(454, 'Edwin Mahendra', 22402, 'Ika Retnaningsih', 'XII', 'MIPA', 4),
(455, 'Elisa Resti Kurniasari', 22404, 'Titi Wahyuni', 'XII', 'MIPA', 4),
(456, 'Elvania Wibowo', 22406, 'Indah Wahyuni', 'XII', 'MIPA', 4),
(457, 'Faraesta Mia Wardhana', 22414, 'Mia Tritia', 'XII', 'MIPA', 4),
(458, 'Fidhel Muhammad Tristan', 22419, 'Yustina Ernawati', 'XII', 'MIPA', 4),
(459, 'Gusti Rafi Aziz', 22434, 'Rr. Diyah Yuliana Kentjanawatty', 'XII', 'MIPA', 4),
(460, 'Intan Widyadewi', 22450, 'Caecilia Trisnawati Noviani', 'XII', 'MIPA', 4),
(461, 'Jonatan Reginald Ang Jaya', 22457, 'Fenny Santoso', 'XII', 'MIPA', 4),
(462, 'Lira Vania Ramadiva', 22479, 'Widi Kumara Nurdiani Andrea', 'XII', 'MIPA', 4),
(463, 'Lolita Anamel', 22480, 'Melanie', 'XII', 'MIPA', 4),
(464, 'Manda Priscilla Moningka', 22484, 'Christilla Basilia Tyastuti', 'XII', 'MIPA', 4),
(465, 'Maria Angel Marlin', 22488, 'Magdalena Paulina Karamoy', 'XII', 'MIPA', 4),
(466, 'Maria Angelika', 22489, 'Berti Maria Wijayanti', 'XII', 'MIPA', 4),
(467, 'Maria Grace Stevani Sugiarto', 22490, 'Linda Gunawan', 'XII', 'MIPA', 4),
(468, 'Maria Jessica Sutjahja', 22491, 'Yuni Lestari', 'XII', 'MIPA', 4),
(469, 'Marsel Mori', 22493, 'Ary Sulastri', 'XII', 'MIPA', 4),
(470, 'Media Binar Yedeya', 22495, 'Merry Suhartini', 'XII', 'MIPA', 4),
(471, 'Meliana', 22496, 'Lanny Kusuma Dewi', 'XII', 'MIPA', 4),
(472, 'Remalya Hasabneya Umbu Hamonangan Sinaga', 22525, 'Asnath Niwa Natar', 'XII', 'MIPA', 4),
(473, 'Rionaldus Ario', 22530, 'Fransiska Tawi', 'XII', 'MIPA', 4),
(474, 'Sebastian Owen Nugroho', 22538, 'Ratna Kumala Sari', 'XII', 'MIPA', 4),
(475, 'Sekar Permata Swietenia Putri', 22539, 'Ismu Arsanti', 'XII', 'MIPA', 4),
(476, 'Shavira Shacharisha', 22542, 'Erni Susanawati', 'XII', 'MIPA', 4),
(477, 'Shella Safira', 22543, 'Lily Yuliarti', 'XII', 'MIPA', 4),
(478, 'Wihas Prana Wisesa', 22559, 'Jajuk Triningsih', 'XII', 'MIPA', 4),
(479, 'William Koolodaf', 22560, 'Yuli Ernawati', 'XII', 'MIPA', 4),
(480, 'Yohanes Agung Budiman', 22563, 'Liem King', 'XII', 'MIPA', 4),
(481, 'Yovenia Arhta Gracia Tiku', 22566, 'Enny Paratuan', 'XII', 'MIPA', 4),
(482, 'Yovita Natanael', 22567, 'Gan Soesiati', 'XII', 'MIPA', 4),
(495, 'Windy Puji Oktiagraha', 1, 'kjhhjnn', 'X', 'IPA', 1);

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
(17, 'gagaga', 18),
(18, 'gagag', 18);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_siswa`
--

CREATE TABLE `user_siswa` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `nipd` varchar(30) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `sub` int(11) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_siswa`
--

INSERT INTO `user_siswa` (`id`, `nama`, `nipd`, `nama_ibu`, `kelas`, `jurusan`, `sub`, `password`, `role`) VALUES
(12, 'Debora Ariella Hennyanto', '22640', 'VINCENCIA YANED DWIYANTI', 'XI', 'BHS', 0, '9ba0009aa81e794e628a04b51eaf7d7f', 2),
(13, 'Admin System', '1', 'System Default', 'N', 'N', 0, '1b1f3c1005c23645b582d2ff993f0d14', 1),
(14, 'Felix Tjandra Oktorian Sadewa', '22666', 'FRANSISCA ENDANG LESTARININGSIH', 'XI', 'BHS', 0, '9ba0009aa81e794e628a04b51eaf7d7f', 2),
(15, 'Hendi Susanto', '22689', 'POPONG ANITA', 'XI', 'BHS', 0, '9ba0009aa81e794e628a04b51eaf7d7f', 2),
(16, 'Alexander Bintang Satria Bimantara', '22590', 'Wiwik Retnowati', 'XI', 'IPS', 1, '9ba0009aa81e794e628a04b51eaf7d7f', 2),
(17, 'Kezia Natalia', '22723', 'MUNISIH', 'XI', 'BHS', 0, 'deb0815586eef0e42c13730253fcf64c', 2);

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
-- Struktur untuk view `v_ampuan`
--
DROP TABLE IF EXISTS `v_ampuan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ampuan`  AS  select `g`.`nama` AS `nama`,group_concat(' ',`k`.`kelas`,' ',`k`.`jurusan`,' ',`k`.`sub` separator ',') AS `ampuan` from ((`ampuan` `a` join `kelas` `k`) join `guru` `g`) where `a`.`id_kelas` = `k`.`id_kelas` and `a`.`id_guru` = `g`.`id_guru` group by `a`.`id_guru` ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aksi`
--
ALTER TABLE `aksi`
  ADD PRIMARY KEY (`id_aksi`);

--
-- Indeks untuk tabel `ampuan`
--
ALTER TABLE `ampuan`
  ADD PRIMARY KEY (`id_ampuan`);

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
  ADD PRIMARY KEY (`id_target`);

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
-- AUTO_INCREMENT untuk tabel `ampuan`
--
ALTER TABLE `ampuan`
  MODIFY `id_ampuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `kuesioner`
--
ALTER TABLE `kuesioner`
  MODIFY `id_kuesioner` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kuesioner_tmp`
--
ALTER TABLE `kuesioner_tmp`
  MODIFY `id_target` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `siswa_tmp`
--
ALTER TABLE `siswa_tmp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=496;

--
-- AUTO_INCREMENT untuk tabel `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `user_siswa`
--
ALTER TABLE `user_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
