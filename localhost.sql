-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 25 Agu 2023 pada 14.46
-- Versi server: 10.6.14-MariaDB-cll-lve
-- Versi PHP: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dlsmyid_belajar`
--
CREATE DATABASE IF NOT EXISTS `dlsmyid_belajar` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dlsmyid_belajar`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `idguru` int(11) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`idguru`, `nip`, `nama`, `email`, `password`) VALUES
(1, '196312241989032006', 'Krisna', 'krisnaguru@gmail.com', 'Krisna123'),
(2, '197904202005011005', 'Krisna Murti', 'a@gmail.com', '$2y$10$w2AMzobmTFRi0GqkJczzfuTZRneaY8VddxwBz71xC0HMo8G1aRpni'),
(3, '197904202005011237', 'Uni', 'b@gmail.com', '$2y$10$PAJxGWhV71OgQZ6yTzgyBeE5JcF7GqRNdTR7UUSJAwHLAFafmFj06'),
(4, '111', 'aul', 'aul@gmail.com', '$2y$10$xYILUpgxZHL.4X4xV8Z5D.4K949leuGJzJAzGHY6kMQRG5Mk2.Ohe'),
(5, '197904202005011269', 'Tono', 'tono27@gmail.com', '$2y$10$inI10db0A1a78SDxP3A3QunmPQ6Y7sqP1RdfDJdoTU3mYqOVeBRZy'),
(6, '1234567891', 'Krisna', 'c@gmail.com', '$2y$10$zXbrIViROaLwhekyVpO46.cspFZauwGrCgFnWU8mZiOQirku0FmBq'),
(7, '123456789000000000000', 'Krisna', 'z@gmail.com', '$2y$10$/nndNLkbKdkgWj65G.B16u0Uag6qj.yDd09Ieeas8FHp.GWxg2sQy'),
(8, '198008082005011003', 'Krisna Murti', 'guru@gmail.com', '$2y$10$Ll0tOXprKf5H.XhNlCXuO.713EFFk6.8oexP415yvxCXfNlpQ/Cqe');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `idkelas` int(11) NOT NULL,
  `idguru` varchar(255) NOT NULL,
  `namakelas` varchar(255) NOT NULL,
  `kodekelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`idkelas`, `idguru`, `namakelas`, `kodekelas`) VALUES
(1, '197904202005011002', 'tjkt 1', 'd17eb0'),
(2, '197904202005011002', 'tjkt2', 'b00146'),
(3, '197904202005011237', 'tjkt 3', 'a0a32c'),
(4, '111', 'pm 2', '0063ba'),
(6, '197904202005011005', 'tjkt 1', '8d2ec3'),
(9, '198008082005011003', 'tjkt 2', '613c96'),
(10, '198008082005011003', 'akl 1', '93b991');

-- --------------------------------------------------------

--
-- Struktur dari tabel `online_visitors`
--

CREATE TABLE `online_visitors` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `online_visitors`
--

INSERT INTO `online_visitors` (`id`, `ip_address`, `timestamp`) VALUES
(4, '103.23.224.172', '2023-08-01 07:03:28'),
(3, '103.23.224.172', '2023-08-01 06:49:41'),
(5, '182.1.88.177', '2023-08-01 07:09:06'),
(6, '103.23.224.172', '2023-08-01 07:53:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `idsiswa` int(11) NOT NULL,
  `nis` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `wo_en` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`idsiswa`, `nis`, `nama`, `email`, `password`, `wo_en`) VALUES
(1, '672038171', 'Latif Tirtayasa Prasetyba M.Pd', 'lidya.melani@gmail.com', '$2y$10$U4VDmPJd18QzvJ/VvtickebxbDPJAE9UqSWXyF63f5DPCXtq7CEl2', '4;hqf,D7L\\7=n'),
(2, '625708612', 'Cindy Susanti', 'ratih.wacana@gmail.com', '$2y$10$qcQ6tYW9cT5A6kS/Y/5gGO2CWQ6a7oz2EJbLpyZohAC.ufQZ4v71C', 'pDLfW*.eu[z{m3%=_a&'),
(3, '175414709', 'Gabriella Aryani', 'abyasa17@gmail.co.id', '$2y$10$pYbSUbiV7/BaxtaR3xRy6.Y61CqX56YN00JAEFTsMSffLt92fn.wS', '\\ei3Whi*HuB;UW'),
(4, '941941553', 'Mulyanto Jailani', 'icha.palastri@yahoo.co.id', '$2y$10$lADTPtin1YBkWzTwOt.WeeprlF5B0pGXEyXAISVoDgxieIMwyc4Pu', 'COc(P7lt^S~YzWN7M\\'),
(5, '776119138', 'Amelia Wahyuni', 'tarihoran.putri@yahoo.com', '$2y$10$1YwFEFJwQj5YPa7dyLM26eLnFVBUOm5XpcM8bnUa5K3skg1IuT1fG', 'uO\\nU:g*}aXAT)E7A&-'),
(6, '150432742', 'Prima Jono Prayoga S.E.', 'tpadmasari@yahoo.com', '$2y$10$FZrC0wttjQFQmmZHNDytL.yjbZMhm7I4GU1Ur.pJP1MEDu1D3Cfvi', 'z&<9P>+'),
(7, '162333640', 'Tantri Mila Laksita', 'hasanah.hendri@yahoo.co.id', '$2y$10$eHIoziNv5heCQlz5lQGtIu5VrYI.i6Urr4xnAwr9Y12iKBetvkDKC', 't!:|NSOS^'),
(8, '985639181', 'Rina Namaga', 'susanti.nasab@yahoo.co.id', '$2y$10$a7psNe1.T9TDSIvvMbFIT.wWO/qhQm7WyKRbKkBTrLcRbMnma9k8G', 'Ke4GrJP!/1\'mK)u`'),
(9, '232712808', 'Ade Melani', 'maria.hartati@yahoo.co.id', '$2y$10$YNx72ynW63znRU4FiBUEGe4m9DL7MBMGLs4RhDo.u2itCYfS7sq0m', 'sn3s\"(g8IE#&QCat+vLo'),
(10, '441413281', 'Vino Widodo', 'halimah.dalima@yahoo.com', '$2y$10$ZEbXxLv7DsaUmCmL1mxFKO7l4UJuU8jAUccRg.hrNjkFJ8IluILba', '8^;xUZ$5-o'),
(12, '0008433876', 'Krisna', 'siswa@gmail.com', '$2y$10$4HhBjXHcWdU5J4PTcJknSuMWkHf.KQRKCzWE547abRgPKhJBV7T8.', ''),
(14, '123456789000', 'Krisna', 'ae@gmail.com', '$2y$10$o64Ms51XWL5nA/rfRBH/.eFLW4TMGm02VWCBpFPonheyA8gERhALe', ''),
(15, '0008433851', 'Elysia Puspa Qathafa', 'elisiapuspa@gmail.com', '$2y$10$YrXNozurBqeleK3UmWbLe.O2BKxbjPq8MdBuHpqSaOkvYTZLlHriG', ''),
(16, '0008433853', 'Zahra Nur Azizah ', 'zahranrazh09@gmail.com', '$2y$10$kUhWvzG/eVrhDkcoZbMyB.YOrZ9OxDa8zVfh4aCFSPDSzEjAEsXuu', ''),
(17, '10691', 'Nafiah uswatun khasanah', 'nafiahuswatun12@gmail.com', '$2y$10$G882T.6qw5pFWknyYcgq6eI32z4X5B/nf96BvuXd2iA5yE6342wS2', ''),
(18, '0008433857', 'Rifka Ayunda Restiana ', 'rifkaayunda8@gmail.com', '$2y$10$wQdpdWztZtFs5gSnO82aMehFepDnPD8yddPe5KwIbicFsOCgQKk3i', ''),
(19, '000835559', 'Andini Septiyana Noer Rahmawati ', 'andiniseptiana001@gmail.com', '$2y$10$6fooq80nlLumTNXbG95pcuZT0rwYDDce3xAhxiwpqsyZSvIiljemS', ''),
(20, '0008586', 'Andini Septiyana Noer Rahmawati ', 'andiniseptiyananoerrahmawati@gmail.com', '$2y$10$LLr4XzQVBFLRFmFPX/o7Ru93s/BnwQEbwAJ2FnM4v4q3QIVAx9U/C', ''),
(21, '10738', 'Terisya Putri Ramadhani', 'terisyaramadhani@gmail.com', '$2y$10$eCqSnyMye3RpexrLDSpkreHTVz5OzWComH0dK5qyA8FXP1s6j9b4y', ''),
(22, '10713', 'Elyn Putri N', 'elynputri2007@gmail.com', '$2y$10$UEneDMlnV6So2HEAAI5tfu1Qw8yW8ETiXYNbOs4iH5PH.d.tSnpoe', ''),
(23, '10733', 'Salma Diasyifa Almaliha ', 'salmaalmaliha@gmail.com', '$2y$10$AJaMPmlrSoIW4N71yjMgAOmEsyWulbFwovInKeFjpePFpa4lneU8m', ''),
(24, '10706', 'adinda putri cahyani', 'adindaptr39@gmail.com', '$2y$10$jrS7z3mnjLPV1p9bhGJ9FOgy2gYuiH0CmRsb1envvx9qEEHTou1fG', ''),
(27, '10736', 'siti rokhana', 'nananana@gmail.com', '$2y$10$TPLknFJxwwTY8Fjo7vFCMehz1.HTemM0ElNqCA8P3xRZdm1bbrEgK', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal`
--

CREATE TABLE `soal` (
  `idsoal` int(11) NOT NULL,
  `quest` varchar(255) NOT NULL,
  `answer1` varchar(255) NOT NULL,
  `answer2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data untuk tabel `soal`
--

INSERT INTO `soal` (`idsoal`, `quest`, `answer1`, `answer2`) VALUES
(1, 'Saya memahami sesuatu dengan lebih baik, setelah saya... ', 'Mencoba melakukannya', 'Memikirkannya dengan matang'),
(2, 'Saya lebih memilih untuk dianggap sebagai orang yang... ', 'Realistis', 'Inovatif'),
(3, 'Saat saya mengingat tentang apa yang saya lakukan kemarin, saya cenderung akan mengingatnya dalam bentuk...', 'Gambaran', 'Kata-kata'),
(4, 'Saya cenderung untuk...', 'Memahami detail sesuatu tetapi kurang memahami secara keseluruhan', 'Memahami keseluruhan, tetapi kurang memahami detailnya'),
(5, 'Saat saya belajar sesuatu yang baru, saya merasa terbantu ketika saya…', 'Membicarakan tentang itu', 'Memikirkan tentang hal itu'),
(6, 'Jika saya seorang guru, saya lebih memilih mengajar suatu mata pelajaran...', 'Yang berurusan dengan fakta dan situasi nyata', 'Yang berurusan dengan ide dan teori'),
(7, 'Saya lebih memilih untuk mendapatkan informasi baru dalam bentuk...', 'Gambar, diagram, grafik, atau peta', 'Arahan tertulis atau informasi verbal'),
(8, 'Menurut saya…', 'Sekali saya memahami bagian-bagian atau detail dari suatu hal, maka saya dapat memahami keseluruhannya', 'Sekali saya memahami keseluruhan, maka saya dapat memahami bagian-baguan atau detail dari suatu hal'),
(9, 'Dalam sebuah kelompok belajar yang bekerja pada materi yang sulit, saya lebih mungkin...', 'Langsung memberikan ide-ide atau masukan', 'Duduk dan mendengarkan'),
(10, 'Saya merasa lebih mudah bagi saya...', 'Mempelajari suatu fakta', 'Mempelajari suatu konsep'),
(11, 'Ketika membaca sebuah buku yang di dalamnya banyak gambar dan grafik, saya cenderung untuk…', 'Memperhatikan gambar-gambar dan grafik secara seksama', 'Fokus pada teks yang tertulis'),
(12, 'Ketika saya menyelesaikan masalah matematika...', 'Saya biasanya menggunakan cara saya sendiri untuk menjawab soal itu langkah demi langkah', 'Saya sering melihat sebuah cara untuk menyelesaikan soal matematika itu kemudian berusaha memahami langkah demi Langkah untuk menyelesaikan soal itu'),
(13, 'Saat berada di suatu kelas, saya biasanya...', 'Mengenali sebagian besar teman-teman saya', 'Hampir tidak mengenali teman-teman saya'),
(14, 'Dalam membaca buku non-fiksi, (tulisan yang berdasarkan data-data atau fakta), saya lebih suka…', 'Sesuatu yang mengajarkan saya fakta-fakta baru atau menjelaskan tentang bagaimana melakukan sesuatu', 'Sesuatu yang memberi saya ide-ide baru untuk berpikir'),
(15, 'Saya suka guru yang...', 'Menggunakan banyak diagram untuk menjelaskan', 'Menggunakan banyak kalimat untuk menjelaskan'),
(16, 'Ketika saya menganalisis sebuah cerita atau novel...', 'Saya menghubungkan berbagai peristiwa yang digambarkan dalam novel tersebut untuk menemukan tema cerita', 'Saya menemukan tema cerita setelah saya selesai membaca, kemudian saya harus memeriksa kembali bagian-bagian dari cerita yang mendukung tema tersebut'),
(17, 'Saat saya mengerjakan pekerjaan rumah, saya lebih cenderung untuk...', 'Langsung mulai bekerja dengan solusi', 'Mencoba memahami masalah terlebih dahulu'),
(18, 'Saya lebih suka pada...', 'Hal-hal yang bersifat pasti', 'Hal-hal yang bersifat teori'),
(19, 'Saya dapat mengingat dengan baik...', 'Hal-hal yang saya lihat', 'Hal-hal yang saya dengar'),
(20, 'Bagi saya hal penting yang harus dilakukan seorang guru adalah…', 'Menyusun materi dalam langkah-langkah yang jelas dan berurutan', 'Memberikan gambaran umum dan menghubungkan materi dengan subjek lainMemberi gambaran keseluruhan, kemudian menghubungkan materi mata pelajaran lain'),
(21, 'Saya lebih suka untuk belajar...', 'Dalam kelompok', 'Sendiri'),
(22, 'Dalam bekerja, saya cenderung...', 'Berhati-hati terhadap detail pekerjaan saya', 'Kreatif dalam mengerjakan pekerjaan saya'),
(23, 'Untuk mendapatkan petunjuk ke sebuah tempat baru, saya lebih suka menggunakan…', 'Peta', 'Pentunjuk Tertulis'),
(24, 'Saya belajar...', 'Secara teratur. Jika saya belajar dengan giat, maka saya akan \"mendapatkan apa yang saya inginkan\"', 'Secara tidak teratur. Pertama-tama saya tidak paham, namun kemudian tiba-tiba semua “nyambung”'),
(25, 'Ketika mengerjakan suatu tugas saya lebih suka untuk…', 'Mencoba langsung mengerjakan tugas tersebut', 'Berpikir terlebih dahulu bagaimana saya akan mengerjakan tugas tersebut'),
(26, 'Saya menyukai suatu bacaan yang ditulis oleh penulis yang…', 'Jelas mengatakan apa yang mereka maksud', 'Mengatakan hal-hal yang kreatif, cara yang menarik'),
(27, 'Ketika saya melihat diagram atau sketsa di kelas, saya cenderung untuk mengingat…', 'Gambar', 'Apa yang dikatakan oleh pengajar tentang itu'),
(28, 'Ketika mempertimbangkan isi suatu informasi, saya lebih cenderung untuk…', 'Fokus pada detail dan mengesampingkan gambaran besar', 'Mencoba untuk memahami gambaran besar sebelum masuk ke detail'),
(29, 'Saya lebih mudah mengingat…', 'Sesuatu yang saya lakukan', 'Sesuatu yang saya pikirkan'),
(30, 'Ketika saya mengerjakan tugas, saya lebih memilih untuk…', 'Menguasai salah satu cara untuk mengerjakannya', 'Mencoba dengan cara-cara baru untuk mengerjakannya'),
(31, 'Ketika seseorang menunjukkan sebuah data, saya lebih suka…', 'Grafik atau diagram', 'Teks yang merangkum hasil'),
(32, 'Ketika menulis sebuah makalah, saya lebih cenderung untuk…', 'Mengerjakan makalah tersebut secara berurutan dari awal sampai akhir', 'Mengerjakan makalah tersebut secara acak lalu kemudian mengurutkannya'),
(33, 'Ketika saya mengerjakan suatu tugas kelompok, hal pertama yang saya lakukan adalah…', 'Melakukan \"tukar pendapat kelompok\" secara bersama dalam kelompok dimana setiap orang berkontribusi memberikan ide-ide', 'Melakukan \"tukar pendapat kelompok\" secara individu kemudian bersama-sama membandingkan ide-ide dalam sebuah kelompok'),
(34, 'Untuk mengagumi orang yang…', 'Memiliki logika (daya nalar) yang kuat', 'Memiliki imajinasi yang kuat'),
(35, 'Ketika saya bertemu orang-orang di sebuah pesta, saya cenderung untuk mengingat…', 'Seperti apa penampilan mereka', 'Apa yang mereka katakan tentang diri mereka.'),
(36, 'Ketika saya mempelajari suatu materi baru, saya lebih suka untuk…', 'Tetap fokus pada hal itu, belajar materi itu sebanyak yang saya bisa', 'Mencoba untuk membuat hubungan antara materi tersebut dengan materi lain yang terkait'),
(37, 'Saya lebih cenderung dianggap...', 'Ramah/mudah bergaul', 'Pendiam'),
(38, 'Saya lebih suka pelajaran yang memfokuskan pada...', 'Materi konkret (fakta, data)', 'Materi abstrak (konsep, teori)'),
(39, 'Untuk hiburan, saya lebih suka...\n', 'Menonton televisi', 'Membaca buku.'),
(40, 'Pada awal pembelajaran beberapa guru memberikan sebuah garis besar mengenai materi pelajaran. Garis besar materi tersebut…', 'Sedikit membantu bagi saya', 'Sangat membantu bagi saya'),
(41, 'Bagi saya mengerjakan PR dalam kelompok itu…', 'Menarik bagi saya', 'Tidak menarik bagi saya.'),
(42, 'Ketika saya mengerjakan soal matematika yang panjang…', 'Saya cenderung mengulangi semua langkah saya dan memeriksa pekerjaan saya dengan cermat', 'Saya merasa memeriksa pekerjaan saya melelahkan dan harus memaksakan diri untuk melakukannya'),
(43, 'Saya cenderung menggambar tempat-tempat yang pernah saya kunjungi…', 'Dengan mudah dan cukup akurat', 'Dengan susah payah dan tanpa banyak detail'),
(44, 'Ketika memecahkan masalah di dalam sebuah kelompok, saya akan cenderung untuk…', 'Memikirkan langkah-langkah dalam proses solusi', 'Memikirkan konsekuensi yang mungkin terjadi atau mencari berbagai macam solusi untuk menyelesaikannya secara langsung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tes`
--

CREATE TABLE `tes` (
  `id` int(11) NOT NULL,
  `kodekelas` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kodesiswa` varchar(11) NOT NULL,
  `aktif` int(2) NOT NULL,
  `sensing` int(2) NOT NULL,
  `visual` int(2) NOT NULL,
  `sequintal` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data untuk tabel `tes`
--

INSERT INTO `tes` (`id`, `kodekelas`, `nama`, `kodesiswa`, `aktif`, `sensing`, `visual`, `sequintal`) VALUES
(1, 'tjkt 1', 'Latif Tirtayasa Prasetya M.Pd', '672038171', 8, -8, 10, -9),
(2, 'tjkt 1', 'Cindy Susanti', '625708612', -2, -9, -4, -1),
(3, 'tjkt 1', 'Gabriella Aryani', '175414709', -11, 7, -7, 11),
(4, 'tjkt 1', 'Mulyanto Jailani', '941941553', 11, 3, -11, 10),
(5, 'tjkt 1', 'Amelia Wahyuni', '776119138', 8, 6, 4, 10),
(6, 'tjkt 1', 'Prima Jono Prayoga S.E.', '150432742', -9, -10, 7, -11),
(7, 'tjkt 1', 'Tantri Mila Laksita', '162333640', -6, -4, 4, 3),
(8, 'tjkt 1', 'Rina Namaga', '985639181', 4, -9, -3, -8),
(9, 'tjkt 1', 'Ade Melani', '232712808', -11, -4, 7, -11),
(10, 'tjkt 1', 'Vino Widodo', '441413281', 2, -6, 3, 1),
(12, 'pm 2', 'Krisna', '0008433876', 5, 1, 5, -1),
(13, 'pm 2', 'raqael ganteng', '6969696969', -3, 3, 11, -7),
(14, 'tjkt 3', 'Krisna', '1234567890', 3, 3, 2, 2),
(15, 'akl 1', 'Elysia Puspa Qathafa', '0008433851', 1, 5, 7, 1),
(16, 'akl 1', 'Zahra Nur Azizah ', '0008433853', -5, -1, 5, -1),
(17, 'akl 1', 'Nafiah uswatun khasanah', '10691', 1, 1, 3, 1),
(18, 'akl 1', 'Rifka Ayunda Restiana ', '0008433857', -1, -3, -3, 1),
(20, 'akl 1', 'Andini Septiyana Noer Rahmawati ', '0008586', 11, -3, 7, -3),
(21, 'akl 1', 'Terisya Putri Ramadhani', '10738', 3, 7, 3, -7),
(22, 'akl 1', 'Elyn Putri N', '10713', 5, 9, 9, 3),
(23, 'akl 1', 'Salma Diasyifa Almaliha ', '10733', 3, 7, -1, 1),
(24, 'akl 1', 'adinda putri cahyani', '10706', 1, 1, 9, -3),
(27, 'akl 1', 'siti rokhana', '10736', 5, 7, 7, 7);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`idguru`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`idkelas`);

--
-- Indeks untuk tabel `online_visitors`
--
ALTER TABLE `online_visitors`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`idsiswa`);

--
-- Indeks untuk tabel `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`idsoal`);

--
-- Indeks untuk tabel `tes`
--
ALTER TABLE `tes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `idguru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `idkelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `online_visitors`
--
ALTER TABLE `online_visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `idsiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `soal`
--
ALTER TABLE `soal`
  MODIFY `idsoal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `tes`
--
ALTER TABLE `tes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
