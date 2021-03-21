-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Mar 2021 pada 13.26
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus_secang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`, `id_admin`) VALUES
('admin', '$2y$10$o0oQCoRe8rNdOom1NmzcU.bStiB4UT1XvRK83NIDLMkdn8Ar0.P9K', 1),
('Sidik Priyo Utomo', '$2y$10$4Nfl5rEuiL/t58Cr1wqAs.erf55Jnl/VqnPcKfCXKiDzV3XV2hQFC', 2),
('Fatkhurahman', '$2y$10$QTOBIslrFkoeFTsuUM76Le3AfJPmY28K.MUQ5k9h1Ubbue9HiQklS', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `Kode_buku` int(11) NOT NULL,
  `Judul_buku` text DEFAULT NULL,
  `tahun` year(4) NOT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `kategori_idkategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`Kode_buku`, `Judul_buku`, `tahun`, `jumlah`, `kategori_idkategori`) VALUES
(1, '101 Tips dan terapi alami agar gigi pitih dan sehat', 2018, 2, 1),
(2, 'Satu jam lancar ngomong bahasa inggris', 2015, 2, 1),
(3, '11 kisah kreatif kece penulis wattpad', 2017, 2, 1),
(4, '123 Tips simpel cantik awet muda dan sehat dengan herbal', 2017, 2, 1),
(5, 'Dua puluh lima keajaiban orang-orang beriman', 2017, 2, 1),
(6, '250 latihan tata bahasa inggris untuk pemula dan lanjutan', 2019, 2, 1),
(7, 'Tiga jam tiga koma lima milyar', 2016, 2, 1),
(8, '30 inspirasi kosmetik organik untuk dijual online', 2020, 2, 1),
(9, '4 kunci menarik rezeki: Rezeki datang dari arah yang tiada disangka-sangka', 2020, 2, 1),
(10, '40 minggu pertama yang penuh keajaiban dalam hidupku', 0000, 2, 1),
(11, '5 menit langsung jadi membuat perjanjian dan surat kontrak', 2017, 2, 1),
(12, '52 Changes', 2018, 2, 1),
(13, 'Tujuh jurus ampuh turunkan berat badan', 2018, 2, 1),
(14, '9 tahap mempersiapkan pidato dan MC', 2020, 2, 1),
(15, '99 persen menguasai tes buta warna', 2018, 2, 1),
(16, 'Sayidah Aisyah', 2018, 2, 1),
(17, 'Aku suka berdoa', 2017, 2, 1),
(18, 'Aku senang bersedekah', 2015, 2, 1),
(19, 'Aku kopi dan kamera', 2019, 2, 1),
(20, 'Akuaponik, panen sayur bonus ikan', 2018, 2, 1),
(21, 'Akuntansi biaya', 2020, 2, 1),
(22, 'Akuntansi dan rahasia dibaliknya', 2019, 2, 1),
(23, 'Akuntansi desa', 2018, 2, 1),
(24, 'Akuntansi UMKM', 2018, 2, 1),
(25, 'Alan Paton: penentang diskriminasi rasial', 2020, 2, 1),
(26, 'Alat kerja pertukangan kayu', 2019, 2, 1),
(27, 'Albert Einstein dan teori relativitas', 2020, 2, 1),
(28, 'Albert Schweitzer: pejuang kemanusiaan sepanjang hayat', 2019, 2, 1),
(29, 'Amazing! Kehamilan bunda dalam 9 bulan', 2019, 2, 1),
(30, 'Archimedes dan berat jenis', 2016, 2, 1),
(31, 'Aristoteles: peletak dasar logika', 2016, 2, 1),
(32, 'Asmara bukan ramayana', 2019, 2, 1),
(33, 'Ayo belajar berwudhu', 2017, 2, 1),
(34, 'Ayo belajar hadits', 2018, 2, 1),
(35, 'Ayo belajar manasik haji', 2018, 2, 1),
(36, 'Ayo belajar mengaji', 2018, 2, 1),
(37, 'Ayo berpuasa', 2017, 2, 1),
(38, 'Ayo kita shalat', 2015, 2, 1),
(39, 'Ayu menjadi putri', 2019, 2, 1),
(40, 'Bahasa indonesia untuk SLB kelas dasar 1 tuna rungu', 2020, 2, 1),
(41, 'Mengenal dan memahami bahaya TORCH (toksoplasma,rubella,CMV,dan herpes simplex II) bagi wanita hamil dan janin dalam kandungannya', 2015, 2, 1),
(42, 'Belajar cepat pengelolaan keuangan Desa', 2020, 2, 1),
(43, 'Belajar fotografi makanan untuk pemula', 2019, 2, 1),
(44, 'Belajar merajut sampai mahir untuk pemula', 2019, 2, 1),
(45, 'Berobatlah dengan doa dan istigfar', 2019, 2, 1),
(46, 'Berobatlah dengan puasa dan sedekah', 2017, 2, 1),
(47, 'Berobatlah dengan shalat dan Al-Quran', 2017, 2, 1),
(48, 'Blak-blakan, our secret', 2016, 2, 1),
(49, 'Bohong di dunia', 2017, 2, 1),
(50, 'Budi daya Jeruk Siam', 2018, 2, 1),
(51, 'Budi daya Kelengkeng', 2018, 2, 1),
(52, 'Budi daya Kol Bunga', 2018, 2, 1),
(53, 'Budidaya Mangga di lahan sempit', 2013, 2, 1),
(54, 'Budi daya melon', 2018, 2, 1),
(55, 'Budi daya Semangka', 2018, 2, 1),
(56, 'Budi daya tomat', 2018, 2, 1),
(57, 'Buku jago beladiri', 2020, 2, 1),
(58, 'Buku jago bola basket', 2020, 2, 1),
(59, 'Buku jago bola voli', 2020, 2, 1),
(60, 'Buku jago bulu tangkis', 2020, 2, 1),
(61, 'Buku jago futsal', 2020, 2, 1),
(62, 'Buku jago renang', 2020, 2, 1),
(63, 'Buku jago sepak bola', 2020, 2, 1),
(64, 'Buku lengkap perencanaan dana desa', 2020, 2, 1),
(65, 'Buku pegangan karang taruna', 2019, 2, 1),
(66, 'Buku pintar beternak sapi perah', 2016, 2, 1),
(67, 'Buku pintar kewenangan desa dan regulasi desa', 2019, 2, 1),
(68, 'Buku pintar pengelolaan aset desa', 2019, 2, 1),
(69, 'Buku pintar pengelolaan keuangan Desa', 2020, 2, 1),
(70, 'Buku pintar percakapan 3 bahasa: Inggris-Arab-Indonesia', 2015, 2, 1),
(71, 'Buku pintar shalat', 2008, 2, 1),
(72, 'Buku praktik matematika bisnis: untuk program diploma', 2019, 2, 1),
(73, 'Bundaku Jago Masak Mpasi', 2017, 2, 1),
(74, 'Buya Hamka berbicara tentang perempuan', 2014, 2, 1),
(75, 'Cara cerdas berkebun emas dengan menanam Melon', 2016, 2, 1),
(76, 'Cara cerdas mendulang emas dari bertanam jeruk', 2016, 2, 1),
(77, 'Cara cerdas mengelola perpustakaan desa', 2019, 2, 1),
(78, 'Cara gampang usaha dan bisnis Terong', 2016, 2, 1),
(79, 'Cara mudah dan benar beternak ikan gurame', 2016, 2, 1),
(80, 'Cara mudah panen melimpah buah pepaya', 2016, 2, 1),
(81, 'Cara praktis membuat gitar akustik', 2020, 2, 1),
(82, 'Cara smart bertanam apel di lahan sempit', 2016, 2, 1),
(83, 'Cerdas meraup rupiah dari budidaya Ikan Mas', 2016, 2, 1),
(84, 'Cerita rakyat paling melegenda', 2017, 2, 1),
(85, 'Cinta suci Zahrana', 2020, 2, 1),
(86, 'Cinta terkalang', 2019, 2, 1),
(87, 'Concise grammar arabic', 2019, 2, 1),
(88, 'Concise grammar english', 2020, 2, 1),
(89, 'Concise grammar french', 2019, 2, 1),
(90, 'Concise grammar japanese', 2019, 2, 1),
(91, 'Dasar-dasar ilmu nahwu', 2020, 2, 1),
(92, 'Daun-daun dan buah-buah penumpas penyakit', 2019, 2, 1),
(93, 'Di bawah lindungan Kabah', 2017, 2, 1),
(94, 'Distance - 11.369 km untuk satu cinta', 2017, 2, 1),
(95, 'Edward Jenner dan imunisasi', 2016, 2, 1),
(96, 'Einstein: perkenalan buat anak-anak', 2019, 2, 1),
(97, 'Essential Expressions in english conversations', 2011, 2, 1),
(98, 'Fatimah Az-Zahra', 2018, 2, 1),
(99, 'Filsafat ilmu psikologi', 2019, 2, 1),
(100, 'Fun english for student with special need untuk guru', 2020, 2, 1),
(101, 'Galileo Galilei: saintis brilian', 2020, 2, 1),
(102, 'Geek in high heels', 2018, 2, 1),
(103, 'Hidup itu mudah jangan dibuat susah', 2020, 2, 1),
(104, 'Hidup sehat dengan toga (tanaman obat keluarga)', 2019, 2, 1),
(105, 'Hujan rejeki dari budidaya Cabai', 2016, 2, 1),
(106, 'Hujan rejeki dari berkebun sengon', 2016, 2, 1),
(107, 'Hujan rejeki dari budidaya jati', 2016, 2, 1),
(108, 'Ilmu pengetahuan sosial (IPS) untuk SLB kelas dasar 4 tuna tungu', 0000, 2, 1),
(109, 'Indonesiaan Missile', 2012, 2, 1),
(110, 'Masya Allah: Inilah keajaiban flora dalam Al-Quran', 2019, 2, 1),
(111, 'Inspirasi kerajinan berbahan barang bekas', 2019, 2, 1),
(112, 'Inspirasi kerajinan berbahan kertas', 2019, 2, 1),
(113, 'Inspirasi nama-nama bayi islami', 2014, 2, 1),
(114, 'Investasi emas hijau dari budidaya Bayam', 2016, 2, 1),
(115, 'Iqro, Tajwid, dan tahsin: Panduan belajar membaca Al-Quran untuk pemula', 2015, 2, 1),
(116, 'Iqro, tajwid, dan tahsin jilid II', 2016, 2, 1),
(117, 'Iqro, tajwid, dan tahsin jilid III', 2016, 2, 1),
(118, 'Islam agamaku', 2015, 2, 1),
(119, 'Integrasi gerilya', 2012, 2, 1),
(120, 'Jadi dokter keluarga di rumah sendiri', 2019, 2, 1),
(121, 'Jago kuasai bahasa Arab', 2020, 2, 1),
(122, 'Jago kuasai bahasa Belanda', 2018, 2, 1),
(123, 'Jago kuasai bahasa Jepang', 2020, 2, 1),
(124, 'Jago kuasai bahasa jerman', 2015, 2, 1),
(125, 'Jago kuasai bahasa mandarin', 0000, 2, 1),
(126, 'Jago kuasai bahasa Prancis', 2015, 2, 1),
(127, 'Jangan berhenti berharap dibalik kesulitan dan kemudahan', 2019, 2, 1),
(128, 'Jasa titip online modal irit untung melejit', 2020, 2, 1),
(129, 'Jus sehat untuk sembuhkan berbagai penyakit', 2016, 2, 1),
(130, 'Kamus bahasa arab lengkap dan akurat', 2019, 2, 1),
(131, 'Kamus Sejarah Lengkap', 2014, 2, 1),
(132, 'Kamus populer istilah biologi', 2018, 2, 1),
(133, 'Kamus populer istilah geografi', 2018, 2, 1),
(134, 'Keampuhan air dan minyak kelapa bagi kesehatan', 2019, 2, 1),
(135, 'Kendaraan bawel? nggak perlu ke bengkel', 2020, 2, 1),
(136, 'Kerajinan bunga kering', 2018, 2, 1),
(137, 'Khadijah in love life is full of drama', 2018, 2, 1),
(138, 'Khasiat ampuh buah naga dan delima', 2019, 2, 1),
(139, 'Khasiat jitu daun kelor dan sirih merah tumpas penyakit', 2019, 2, 1),
(140, 'Khasiat tokcer madu dan kurma', 2019, 2, 1),
(141, 'Khasiat top susu unta, jintan hitam, dan ginseng', 2019, 2, 1),
(142, 'Kiat ampuh bertanam Jahe Merah', 2016, 2, 1),
(143, 'Kisah 25 Nabi dan Rasul', 2019, 2, 1),
(144, 'Kitab pengetahuan sholat wajib dan sunah', 2020, 2, 1),
(145, 'Kitcjen set minimalis modern', 0000, 2, 1),
(146, 'Konsumsi makanan sehat', 2017, 2, 1),
(147, 'Kriegsmarine Battleships', 2013, 2, 1),
(148, 'Kumpulan lagu wajib nasional dan lagu anak Indonesia', 2018, 2, 1),
(149, 'Kumpulan rumus-rumus matematika SD kelas 1,2,3,4,5,6', 2018, 2, 1),
(150, 'Learning english grammar through jokes', 2015, 2, 1),
(151, 'Legitimasi dan politik kebijakan', 2017, 2, 1),
(152, 'Life miracle', 2018, 2, 1),
(153, 'loveliest mistortune', 2019, 2, 1),
(154, 'Makar kaum munafik', 2018, 2, 1),
(155, 'Makassar bergolak untuk NKRI: pergerakan pemuda pejuang', 2020, 2, 1),
(156, 'Manajemen program pembiasaan bagi anak usia dini', 2018, 2, 1),
(157, 'Masjid ramah difabel', 2019, 2, 1),
(158, 'Matan safinatun najah: Intisari fiqih madzhab Syafii', 2019, 2, 1),
(159, 'Memahami bahasa bayi', 2017, 2, 1),
(160, 'Membaca bahasa tubuh', 2017, 2, 1),
(161, 'Membaca pikiran', 2016, 2, 1),
(162, 'Menangkal masuknya narkoba pada masyarakat Desa', 2020, 2, 1),
(163, 'Mengelola produksi BUM desa secara profesional', 2020, 2, 1),
(164, 'Mengembangkan kreativitas anak usia dini', 2019, 2, 1),
(165, 'Mengenal asmaul husna', 2015, 2, 1),
(166, 'Mengenal Desa dan pemerintahan Desa', 2020, 2, 1),
(167, 'Mengenal hukum Allah', 2018, 2, 1),
(168, 'Mengenal koperasi unit desa', 2020, 2, 1),
(169, 'Mengenal problem kesehatan sehari-hari', 2017, 2, 1),
(170, 'Mengenal rukun iman', 2015, 2, 1),
(171, 'Mengenal rukun Islam', 2015, 2, 1),
(172, 'Mengenal tokoh dan desa yang berprestasi serta menginspirasi', 2018, 2, 1),
(173, 'Menggali potensi desa wisata', 2019, 2, 1),
(174, 'Mengisi hati di lorong kehidupan', 2015, 2, 1),
(175, 'Meningkatkan potensi pemuda desa melalui teknik perbengkelan', 2019, 2, 1),
(176, 'Menuju desa siaga bencana', 2019, 2, 1),
(177, 'Menulislah Mulai Hari Ini', 2018, 2, 1),
(178, 'Menumbuhkan kemandirian anak', 2017, 2, 1),
(179, 'Merindu Baginda Nabi', 2020, 2, 1),
(180, 'Metode tepat agar anak hafal Al-Quran', 2018, 2, 1),
(181, 'Mikayla', 2017, 2, 1),
(182, 'Mitigasi bencana', 2019, 2, 1),
(183, 'Mudah bertanam sayur di Teras panen kapan aja', 2020, 2, 1),
(184, 'Mudah dan praktis budidaya kangkung', 2016, 2, 1),
(185, 'Muhammad Al Fatih', 2018, 2, 1),
(186, 'Mummi Sulawesi Selatan', 2015, 2, 1),
(187, 'Nilai-nilai desa yang harus kita pelihara', 2019, 2, 1),
(188, 'Omset awet dari Burung Walet', 2015, 2, 1),
(189, 'Origami', 2019, 2, 1),
(190, 'Panduan lengkap EBI Ejaan Bahasa Indonesia', 2017, 2, 1),
(191, 'Panduan lengkap usaha pembesaran Lele Sangkuriang', 2016, 2, 1),
(192, 'Panduan praktis pembibitan Ikan Bawal', 2016, 2, 1),
(193, 'Panen jutaan rupiah dari usaha budidaya mangga', 2016, 2, 1),
(194, 'Panen rupiah dari bisnis pembesaran Udang', 2016, 2, 1),
(195, 'Panen rupiah dengan budidaya buah naga', 2016, 2, 1),
(196, 'Para pahlawan Islam', 2017, 2, 1),
(197, 'Para pemburu surga', 2017, 2, 1),
(198, 'Para pencinta kebenaran', 2017, 2, 1),
(199, 'Pembela Islam ahli surga', 2017, 2, 1),
(200, 'Pengantar lengkap teknik dasar kelistrikan', 2019, 2, 1),
(201, 'Perkebunan Karet skala kecil cepat panen secara otodidak', 2014, 2, 1),
(202, 'Pertumbuhan Kota Pantai Makassar', 2019, 2, 1),
(203, 'Pintar bahasa Arab dalam bisnis', 2019, 2, 1),
(204, 'Pudarnya pesona Cleopatra', 2020, 2, 1),
(205, 'Ragam kreasi anyaman rotan', 2018, 2, 1),
(206, 'Ragam tanaman ampuh untuk obat-obatan', 2019, 2, 1),
(207, 'Rahasia sukses berbisnis dan budidaya semangka', 2016, 2, 1),
(208, 'Religion dan religious life in China', 2017, 2, 1),
(209, 'Reparasi sistem pendinginan mesin mobil', 2019, 2, 1),
(210, 'Rumus-rumus praktis fisika SMP/MTs Kelas: 7-8-9', 2017, 2, 1),
(211, 'Saifuddin Quthuz', 2017, 2, 1),
(212, 'Sastra Indonesia lengkap', 2018, 2, 1),
(213, 'Semua rahasia kulit cantik dan sehat ada disini', 2020, 2, 1),
(214, 'Seni dan strategi membaca cepat tanpa lupa', 2018, 2, 1),
(215, 'Seni berpikir positif', 2020, 2, 1),
(216, 'Seni melatih ingatan', 2020, 2, 1),
(217, 'Seni membaca bahasa tubuh', 2020, 2, 1),
(218, 'Seni mengelola wakt', 2020, 2, 1),
(219, 'Shalahuddin Al-Ayyubi', 2019, 2, 1),
(220, 'Simbol dan rangkaian kelistrikan mobil', 2016, 2, 1),
(221, 'Simple thinking about english', 2018, 2, 1),
(222, 'Strategi manajemen pergudangan', 2019, 2, 1),
(223, 'Sufisme di remang Jakarta', 2017, 2, 1),
(224, 'Sukses pembibitan dan pembesaran kambing etawa', 2016, 2, 1),
(225, 'The magnificent Sulaiman Al-Qanuni: Sultan penakluk tiga benua', 2018, 2, 1),
(226, 'Sultan Hasanuddin', 2020, 2, 1),
(227, 'Surat kecil dari surga', 2017, 2, 1),
(228, 'Tangkis diabetes dan racun dalam tubuh dengan mentimun', 2019, 2, 1),
(229, 'Taubat', 2018, 2, 1),
(230, 'Tauhid kemanusiaan', 2019, 2, 1),
(231, 'Teknik dasar menjahit', 2017, 2, 1),
(232, 'Teknik memanah dalam islam', 2018, 2, 1),
(233, 'Teknik otomotif', 2018, 2, 1),
(234, 'Teknik pengawetan makanan sederhana', 2019, 2, 1),
(235, 'Tentang kita', 2015, 2, 1),
(236, 'Terampil mengolah kain perca', 2018, 2, 1),
(237, 'Tetangga Rasulullah SAW di surga', 2017, 2, 1),
(238, 'Tetap kencang usai melahirkan', 2013, 2, 1),
(239, 'The art of negotiation', 2018, 2, 1),
(240, 'The One Skill', 2019, 2, 1),
(241, 'The secret of success: Rahasia terbesar kesuksesan', 2019, 2, 1),
(242, 'The Simple guide to a minimalist life', 2019, 2, 1),
(243, 'Tumpas kanker dengan anggur', 2019, 2, 1),
(244, 'Ummahatul mukminin', 2019, 2, 1),
(245, 'Unexpected love', 2015, 2, 1),
(246, 'Untung melimpah dari beternak Ikan Nila', 2016, 2, 1),
(247, 'Walisongo', 2019, 2, 1),
(248, 'When the bad boy meets the fangirl', 2020, 2, 1),
(249, 'You are what you think you are what you believe', 2018, 2, 1),
(250, 'Zen habits', 2019, 2, 1),
(251, 'Abu Nawas Dan Teropah Ajaib', 2001, 1, 2),
(252, 'Abu Nawas Dan Permadani Bersayap Onta', 0000, 1, 2),
(253, 'Abu Nawas Dan Ketua Tipu', 0000, 1, 2),
(254, 'Salahnya Kodok', 0000, 1, 2),
(255, 'Prinsip Perawatan Demam Pada Anak', 0000, 1, 2),
(256, 'Asuhan Keperawatan Keluarga', 0000, 1, 2),
(257, 'Inovasi Leisa FB', 0000, 1, 2),
(258, 'Asuhan Kebidanan Nifas dan Menyusui', 0000, 1, 2),
(259, 'Bercocok Tanam Rambutan', 0000, 1, 2),
(260, 'Matoa', 0000, 1, 2),
(261, 'Petunjuk Praktis Menanam Jambu Air Dalam POT', 0000, 1, 2),
(262, 'Budidaya Kacang Panjang', 0000, 1, 2),
(263, 'Suami Istri Islami', 0000, 1, 2),
(264, 'Aneka Masakan Indonesia', 0000, 1, 2),
(265, 'Senarai Konflik Rumah Tangga', 0000, 1, 2),
(266, 'Kiat Sehat Ibu Hamil', 0000, 1, 2),
(267, 'Asi Saja Mama', 0000, 1, 2),
(268, 'Mengajar Anak Berakhlak Al-Quran', 0000, 1, 2),
(269, 'Menjernihkan Batin Dengan Sholat Khusyuk', 0000, 1, 2),
(270, 'Orang-Orang Yang Didoakan Malaikat', 0000, 1, 2),
(271, 'Kisah - Kisah Penuh Hikmah', 0000, 1, 2),
(272, '100 Kisah Teladan ', 0000, 1, 2),
(273, 'Merasakan Manisnya Munajat', 0000, 1, 2),
(274, 'Gelombang Tantangan Muslimah', 0000, 1, 2),
(275, 'Seindah Kehidupan Surgani', 0000, 1, 2),
(276, 'Ulumul Quran (Ilmu Untuk Memahami Wahyu)', 0000, 1, 2),
(277, 'Polisi Penegak Hukum Yang Pelayan', 0000, 1, 2),
(278, 'Tata Surya Dan Penjelajahan Ruang Angkasa', 0000, 1, 2),
(279, 'Buku Referensi (Listrik)', 0000, 1, 2),
(280, 'Buku Referensi (Cahaya dan Sifat-Sifatnya)', 0000, 1, 2),
(281, 'Nuansa Persada', 0000, 1, 2),
(282, 'Pedoman Dasar Karang Taruna', 0000, 1, 2),
(283, 'Memanfaatkan Pekarangan', 0000, 1, 2),
(284, 'Cara Membentuk Dan Membina Kelompok Belajar', 0000, 1, 2),
(285, 'Kedelai', 0000, 1, 2),
(286, 'Mengenal Adat Istiadat Perkawinan Jawa, Sunda, Betawi, Dan Madura', 0000, 1, 2),
(287, 'Penghijauan', 0000, 1, 2),
(288, 'Memasukkkan PA Di Dalam Metodik Mengajar Untuk Pra Sekolah', 0000, 1, 2),
(289, 'Pedoman Pamong / Tutor Buku Paket A1-A10', 0000, 1, 2),
(290, 'Teknologi Bidang Pertanian (Aneka Cara Pembibitan Ikan)', 0000, 1, 2),
(291, 'Aksara Dan Angka', 0000, 4, 2),
(292, 'Pengetahuan Perkoperasian', 0000, 1, 2),
(293, 'Mengenal Adat Istiadat Perkawinan Di Sulawesi', 0000, 1, 2),
(294, 'Mengenal Adat Istiadat Perkawinan Di Kalimantan ', 0000, 1, 2),
(295, 'Mengenal Alat Musik', 0000, 1, 2),
(296, 'Industri Rumah Tangga', 0000, 1, 2),
(297, 'Pertolongan Pertama Pada Keracunan', 0000, 1, 2),
(298, 'Tuhan Manusia Dan Alam', 0000, 2, 2),
(299, 'Memelihara Ulat Sutra', 0000, 1, 2),
(300, 'Teknologi Bidang Pertanian (Pembuatan Suku Kedelai)', 0000, 1, 2),
(301, 'Seri Tokoh Nasional Ki Hajar Dewantara Bapak Pendidikan', 0000, 1, 2),
(302, 'Pedoman Hidup Sehat', 0000, 1, 2),
(303, 'Penerangan Pembangunan', 0000, 1, 2),
(304, 'Pendayagunaan Sejengkal Tanah', 0000, 1, 2),
(305, 'Memelihara Ulat Sutra', 0000, 1, 2),
(306, 'Merawat Bayi', 0000, 1, 2),
(307, 'Cara Memperbaiki Tanah Rusak', 0000, 1, 2),
(308, 'Teknologi Bidang Energi (Penetas Telur Pemanas Lampu)', 0000, 1, 2),
(309, 'Teknologi Bidang Pertanian (Pembuatan Keripik Pohung)', 0000, 1, 2),
(310, 'Beternak Kelinci', 0000, 1, 2),
(311, 'Kerajinan Tangan', 0000, 2, 2),
(312, 'Beternak Sapi Dan Kerbau', 0000, 2, 2),
(313, 'Makanan Sehat', 0000, 4, 2),
(314, 'Sopan Santun', 0000, 2, 2),
(315, 'Pajak', 0000, 2, 2),
(316, 'Mengenal Adat Istiadat Perkawinan Di Nusa Tenggara ', 0000, 2, 2),
(317, 'Mengenal Adat Istiadat Perkawinan Di Sumatra', 0000, 1, 2),
(318, 'Menanam Cengkeh', 0000, 2, 2),
(319, 'Membangun Desa Baru', 0000, 2, 2),
(320, 'Membina Tunas Bangsa', 0000, 1, 2),
(321, 'Bermain Tenis Meja', 0000, 2, 2),
(322, 'Pahlawan-Pahlawan Nasional', 0000, 2, 2),
(323, 'Senam', 0000, 2, 2),
(324, 'Rumah Sehat', 0000, 2, 2),
(325, 'Industri  Rumah Tangga', 0000, 1, 2),
(326, 'Lompat Dan Lempar', 0000, 1, 2),
(327, 'Jalan Dan Lari', 0000, 1, 2),
(328, 'Penghijauan', 0000, 1, 2),
(329, 'Mempertahankan Sang Merah Putih', 0000, 1, 2),
(330, 'Mengenal Adat Istiadat Perkawinan Di Irian Jaya', 0000, 1, 2),
(331, 'Mengenal Tari Dan Musik Daerah', 0000, 1, 2),
(332, 'Kebangkitan Nasional', 0000, 1, 2),
(333, 'Cagar Budaya', 0000, 1, 2),
(334, 'Memelihara Dan Merawat Badan', 0000, 1, 2),
(335, 'Keluarga Dan Masyarakat', 0000, 1, 2),
(336, 'Jasmani Segar', 0000, 1, 2),
(337, 'Mutiara Lapangan Hijau', 0000, 1, 2),
(338, 'Hari-Hari Besar Nasional', 0000, 1, 2),
(339, 'Menanam Kopi', 0000, 1, 2),
(340, 'Industri Rumah Tangga', 0000, 1, 2),
(341, 'Nyiur Melambai', 0000, 1, 2),
(342, 'Jadikan Rumahku Seperti Surga', 0000, 1, 2),
(343, 'Doa-Doa Mustajab Orang Tua Untuk Anak Agar Cerdas, Berakhlak Mulia, Dan Bahagia Dunia Dan Akhirat', 0000, 1, 2),
(344, 'Panduan Praktis Bertanam Sayuran Di Pekarangan', 0000, 1, 2),
(345, '34 Bisnis Peternakan Hasilkan Jutaan Rupiah', 0000, 1, 2),
(346, 'Panduan Praktis Pakan Ikan Konsumsi', 0000, 1, 2),
(347, 'Bisnis Pembibitan Kambing', 0000, 1, 2),
(348, 'Tips Membuahkan Dalam Pot', 0000, 1, 2),
(349, 'Usaha Pembibitan Belut Di Lahan Sempit', 0000, 1, 2),
(350, 'Pembesaran 6 Ikan Konsumsi Di Pekarangan', 0000, 1, 2),
(351, 'Panduan Beternak Itik Secara Intensif', 0000, 1, 2),
(352, 'Panduan Mudah Untuk Selalu Sehat Dan Bahagia \"Sehat Itu Sederhana\"', 0000, 1, 2),
(353, 'Ulang Tahun seru Dengan Aneka Kreasi \"Café Hias Imut Dan Lucu\"', 0000, 1, 2),
(354, 'Keajaiban Terapi Air Putih', 0000, 1, 2),
(355, '40 Resep Ampuh Tanaman \"Obat Untuk Memepercepat Kehamilan\"', 0000, 1, 2),
(356, 'Akhirnya Aku Punya Anak Laki-Laki', 0000, 1, 2),
(357, 'Rahasia Panjang Umur', 0000, 1, 2),
(358, 'Asyiknya Membantu Bunda', 0000, 1, 2),
(359, 'Make Over \"Belajar Dandan Yuk\"', 0000, 1, 2),
(360, 'Komik Next \"Nyasar Di Kebun Binatang\"', 0000, 1, 2),
(361, 'Indahnya Islam', 0000, 1, 2),
(362, 'Ibadah-Ibadah Khusuk Untuk Para Istri', 0000, 1, 2),
(363, '25 Resep Kue Tradisional Legendaris', 0000, 1, 2),
(364, 'Panduan Praktis Pembesaran Ayam Pedaging', 0000, 1, 2),
(365, 'Koleksi Lengkap Dongeng Favorit Anak', 0000, 1, 2),
(366, 'Sajian Kue Kering Istimewa \"Manis Gurih\"', 0000, 1, 2),
(367, 'Makanan Rumahan Ala Dapur Isna', 0000, 1, 2),
(368, 'Sebuah Novel Karya Asma Nadia \"Bunda\"', 0000, 1, 2),
(369, 'Anak Sehat Tanpa Obat', 0000, 1, 2),
(370, 'Sakinah Bersamamu', 0000, 1, 2),
(371, 'Komponen Gizi Dan Bahan Makanan Untuk Kesehatan', 0000, 1, 2),
(372, 'Olahan Ikan Untuk Anak \"Brainy Fish\"', 0000, 1, 2),
(373, '40 Resep Ampuh Tanaman Obat Untuk Mengobati Jantung Koroner dan Menyembuhkan Stroke', 0000, 1, 2),
(374, 'Variasi Jus Untuk Bayi Dan Balita', 0000, 1, 2),
(375, 'Jurus Kilat Mahir Sulam Pita', 0000, 1, 2),
(376, 'Ragam Kreasi Pita Jepang Cantik Dan Istimewa', 0000, 1, 2),
(377, 'Cerita Terbaik Pembentuk Budi Pekerti', 0000, 1, 2),
(378, '15 Sayuran Organik Dalam Pot', 0000, 1, 2),
(379, 'Berkebun 26 Jenis Tanaman Buah', 0000, 1, 2),
(380, 'Puyuh', 0000, 1, 2),
(381, 'Tanaman Hias Bunga Daun Dan Bonsai', 0000, 1, 2),
(382, '20 Tanaman Buah Dalam Pot', 0000, 1, 2),
(383, 'Haid Dan Nifas Dalam Madzhab Syafii', 0000, 1, 2),
(384, 'Bacaan Wajib Orang Tua', 0000, 1, 2),
(385, 'Agar Sholat Tak Sia-Sia', 0000, 1, 2),
(386, 'Konseling Gizi', 0000, 1, 2),
(387, 'Clutch Dan Dompet Dari Karton Bekas', 0000, 1, 2),
(388, 'Petualangan Seru Dinasaurus Karnivora', 0000, 1, 2),
(389, '9 Designers Look', 0000, 1, 2),
(390, '25 Menu Spesial Si Kecil', 0000, 1, 2),
(391, 'Mengenal Kereta Api Penumpang Indonesia', 0000, 1, 2),
(392, 'PAUD \"Pendidikan Anak Usia Dini\"', 0000, 1, 2),
(393, 'PAUD \"Mewarnai Dan Contoh Sayuran Mengenal  ABJAD\"', 0000, 1, 2),
(394, 'PAUD \"Mewarnai Dan Contoh Buah Dan Belajar Membaca\"', 0000, 1, 2),
(395, 'Video Kaset Pembesaran Ayam Pedaging Hari Per Hari Di Kandang Panggung Terbuka', 0000, 1, 2),
(396, 'Kamus Anak Bergambar Super Komplit Inggris Indonesia 1', 0000, 2, 2),
(397, 'Kamus Anak Bergambar Super Komplit Inggris Indonesia 2', 0000, 1, 2),
(398, 'Kalau Besar Kamu Mau Jadi Apa? Aku dan Cita-Citaku', 0000, 2, 2),
(399, 'ENSIKLOKIDDI Tumbuhan Unik Untuk Usia 7-12 Tahun', 0000, 1, 2),
(400, 'Kisah Nabi Nuh Story Of Prophet Noah', 0000, 1, 2),
(401, '1 Boci Dan Kucing Misterius Boci Belajar Warna', 0000, 0, 2),
(402, 'Cerita Bergambar Nabi dan Rasul Ulul Azmi', 0000, 1, 2),
(403, 'Kisah-Kisah Sahabat Kecil Nabi Muhammad SAW Yang Penuh Kemuliaan', 0000, 1, 2),
(404, '101 Kata Pertama Batita', 0000, 1, 2),
(405, '33 Pesan Nabi Untuk Anak Muslim', 0000, 1, 2),
(406, 'Aku Berakhlak Baik Takut Ghibah', 0000, 1, 2),
(407, 'Buku Lengkap Pengetahuan Agama Islam Untuk Muslim Cilik', 0000, 1, 2),
(408, 'Cerita Rakyat Nusantara ', 0000, 1, 2),
(409, 'Hewan-Hewan Unik Dalam Al-Quran', 0000, 1, 2),
(410, 'Aktifitas Anak Pintar Belajar Membaca', 0000, 1, 2),
(411, 'Si Kera Nakal . I. B026 Kual. The Naughty Monkey', 0000, 1, 2),
(412, 'Alat Transportasi Darat, Laut, Udara', 0000, 1, 2),
(413, 'Pintar Berhitung Perkalian', 0000, 1, 2),
(414, 'Mengenal Aneka Hijaiyah', 0000, 1, 2),
(415, 'Kisah Sang Rusa', 0000, 2, 2),
(416, 'Kisah Anak Domba Dan Serigala', 0000, 2, 2),
(417, 'Kisah Kancil Dan Buaya', 0000, 2, 2),
(418, 'Kisah Putri Cinderella Dan 18 Dongeng Terkenal Lainnya', 0000, 1, 2),
(419, 'Mandaru', 0000, 1, 2),
(420, 'Kucing Sahabat Anjing', 0000, 1, 2),
(421, 'Hup-Hup Si Katak Melompat', 0000, 1, 2),
(422, 'Cerita Anak Buaya', 0000, 2, 2),
(423, 'Cerita Anak Harimau', 0000, 2, 2),
(424, 'Belajar Internet Untuk Anak Kapan Saja Dan Dimana Saja', 0000, 1, 2),
(425, 'Panduan Praktik Komputer Dan Internet', 0000, 1, 2),
(426, 'Memahami Aneurisma Otak', 0000, 1, 2),
(427, 'Diet Fleksibel', 0000, 1, 2),
(428, 'Kenali Kesehatan Dengan Bercermin', 0000, 1, 2),
(429, 'Koleksi Resep Masakan Ala Master Chef Lengkap', 0000, 1, 2),
(430, 'Aneka Hidangan Lezat Berselera', 0000, 1, 2),
(431, 'Mumpuni Basa Jawi Pepak', 0000, 1, 2),
(432, 'Bunga Rampai Peribahasa 3 Pantun Untuk SD, SMP, SMA, Dan Umum', 0000, 1, 2),
(433, 'Tatanan Anyar Pinter Basa Jawi Pepak', 0000, 1, 2),
(434, 'ENSIKLOKIDDI Tumbuhan Unik Untuk Usia 7-12 Tahun', 0000, 1, 2),
(435, 'Aktivitas Anak Pintar Belajar Membaca', 0000, 1, 2),
(436, 'Terampil Membuat 40 Kreasi Mahar Uang Kertas Bentuk Boneka Pengantin Nusantara', 0000, 1, 2),
(437, 'Aplikasi Rajut', 0000, 1, 2),
(438, 'Kerajinan Pelepah Pisang', 0000, 1, 2),
(439, 'Alat Transportasi Darat, Laut, Udara', 0000, 1, 2),
(440, 'Beternak Ayam Kampung Tanpa Bau Dengan Prebiotik', 0000, 1, 2),
(441, 'Budidaya dan Bisnis Jahe Lengkuas, Kunyit & Kencur', 2018, 1, 2),
(442, 'Ubah Krisis jadi Bisnis', 2017, 1, 2),
(443, 'Kamus Lengkap 500 Trilyun', 0000, 1, 2),
(444, 'Indonesia Mencegah Upaya Pencegahan Korupsi Oleh Kejaksaan Bidang Perdata & TUN', 2017, 1, 2),
(445, 'Kumpulan Catatan Hukum', 2017, 1, 2),
(446, 'Merdeka Diabetes', 2017, 1, 2),
(447, 'Kebahagiaan yang Kutahu', 2016, 1, 2),
(448, 'Kisah 1001, Smart Geting Makanan, Kebiasaan, Fakta untuk Bugar', 2015, 1, 2),
(449, 'Negeriku Tercinta Mengenal Budaya Bangsa', 0000, 1, 2),
(450, 'Dua Penghuni Pohon Jambu Air', 2019, 1, 2),
(451, 'Kembalikan Kalungku', 0000, 1, 2),
(452, 'Membaca Cerita Bergambar', 2008, 1, 2),
(453, 'Todi Belajar dari Semut', 2008, 1, 2),
(454, 'Teman Baru di Pekarangan', 2008, 1, 2),
(455, 'Apel Pelangi untuk Singa', 2008, 1, 2),
(456, 'Rabiah si Penjual Susu yang Jujur', 2008, 1, 2),
(457, 'Katak dan Tikus', 1984, 1, 2),
(458, 'Pohon Kurma Saudagar Kaya', 2008, 1, 2),
(459, 'Lomba Sayuran Hebat', 1984, 1, 2),
(460, 'Burung Gagak dan Sebuah Kendi', 1984, 1, 2),
(461, 'Aku Berbeda', 1984, 1, 2),
(462, 'Perahu Mainan', 1984, 1, 2),
(463, 'Tanaman Ajaib', 1984, 1, 2),
(464, 'Bukit Kelam', 1984, 1, 2),
(465, 'Petualangan Rara dan Otan', 1984, 1, 2),
(466, 'Terjebak Lumpur Isap', 1984, 1, 2),
(467, 'Terima Kasih Temanku', 1984, 1, 2),
(468, 'Risa dan Mainan Zaki', 2008, 1, 2),
(469, 'Sultan Domas', 1984, 1, 2),
(470, 'Lalang Belajar Berladang', 1984, 1, 2),
(471, 'Raka dan Burung Kenari', 1984, 1, 2),
(472, 'Kura-Kura dan Angsa', 1984, 1, 2),
(473, 'Fugu', 1984, 1, 2),
(474, 'Si Reporter Kecil', 1984, 1, 2),
(475, 'Aku Anak Mandiri', 1984, 1, 2),
(476, 'Giga dan Gogi', 1984, 1, 2),
(477, 'Belibur ke Pesisir', 1984, 1, 2),
(478, 'Banjir di Kampung Beru', 1984, 1, 2),
(479, 'Batu Menangis', 1984, 1, 2),
(480, 'Memperingati Hari Kemerdekaan', 2008, 1, 2),
(481, 'Kak Rina yang Baik Hati', 2008, 1, 2),
(482, 'Buku Bergambar untuk Kita', 2008, 1, 2),
(483, 'Hadiah Bintang', 2008, 1, 2),
(484, 'Kita Anak Indonesiaan', 2008, 1, 2),
(485, 'Membuang Sampah di Tempat Sampah', 2008, 1, 2),
(486, 'Mari Berlomba', 2008, 1, 2),
(487, 'Berkreasi di Taman', 2008, 1, 2),
(488, 'Kue Donat Buatan Niki', 2008, 1, 2),
(489, 'Vas Bunga untuk Ibu Guru', 2008, 1, 2),
(490, 'Lomba Menyusun Balok', 2008, 1, 2),
(491, 'Tini Bersiap Sekolah', 2008, 1, 2),
(492, 'Bermain Congklak dengan Jujur', 2008, 1, 2),
(493, 'Rayan Pandai Bersyukur', 2008, 1, 2),
(494, 'Jeri si Anak Baik', 2008, 1, 2),
(495, 'Dombi Ingin Lebih Baik', 2008, 1, 2),
(496, 'Cerita Kebaikan', 2008, 1, 2),
(497, 'Kuda Pak Ogi ', 2017, 1, 2),
(498, 'The Great Prophet Muhammad Meneladani Manusia Pilihan Allah (Masa Kecil)', 2019, 1, 2),
(499, 'The Great Prophet Muhammad Meneladani Manusia Pilihan Allah (Masyarakat Jahiliyah)', 2019, 1, 2),
(500, 'The Great Prophet Muhammad Meneladani Manusia Pilihan Allah (Masa Remaja)', 2019, 1, 2),
(501, 'The Great Prophet Muhammad Meneladani Manusia Pilihan Allah (Orang Terpercaya)', 2019, 1, 2),
(502, 'The Great Prophet Muhammad Meneladani Manusia Pilihan Allah (Generasi Pertama)', 2019, 1, 2),
(503, 'The Great Prophet Muhammad Meneladani Manusia Pilihan Allah (Dakwah Terbuka)', 2019, 1, 2),
(504, 'The Great Prophet Muhammad Meneladani Manusia Pilihan Allah (Hijrah)', 2019, 1, 2),
(505, 'The Great Prophet Muhammad Meneladani Manusia Pilihan Allah (Pembebasan Mekah)', 2019, 1, 2),
(506, 'The Great Prophet Muhammad Meneladani Manusia Pilihan Allah (Wafatnya Rasulullah)', 2019, 1, 2),
(507, 'The Great Prophet Muhammad Meneladani Manusia Pilihan Allah (Keluaraga Rasulullah)', 2019, 1, 2),
(508, 'The Great Prophet Muhammad Meneladani Manusia Pilihan Allah (Teladan Sifat Rasulullah)', 2019, 1, 2),
(509, 'The Great Prophet Muhammad Meneladani Manusia Pilihan Allah (Penerus Kepemimpinan Rasulullah)', 2019, 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `idkategori` int(11) NOT NULL,
  `nama_kategori` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`idkategori`, `nama_kategori`) VALUES
(1, 'Koleksi Umum'),
(2, 'Anak-anak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kembali`
--

CREATE TABLE `kembali` (
  `idkembali` int(11) NOT NULL,
  `tglKembali` date DEFAULT NULL,
  `Pinjam_idPinjam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kembali`
--

INSERT INTO `kembali` (`idkembali`, `tglKembali`, `Pinjam_idPinjam`) VALUES
(1, '2020-12-07', 1),
(2, '2020-12-10', 3),
(3, '2020-12-10', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjam`
--

CREATE TABLE `pinjam` (
  `idPinjam` int(11) NOT NULL,
  `tglPinjam` date DEFAULT NULL,
  `peminjam` varchar(45) DEFAULT NULL,
  `tglharuskembali` date DEFAULT NULL,
  `pj` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `buku_Kode_buku` int(11) NOT NULL,
  `Admin_id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pinjam`
--

INSERT INTO `pinjam` (`idPinjam`, `tglPinjam`, `peminjam`, `tglharuskembali`, `pj`, `alamat`, `buku_Kode_buku`, `Admin_id_admin`) VALUES
(1, '2020-12-07', 'Sidik', '2020-12-07', 'Siti', 'Bandongan', 1, 1),
(2, '2020-12-07', 'Ahmad', '2020-12-08', 'Siti', 'Bandongan', 401, 1),
(3, '2020-12-10', 'asas', '2020-12-12', 'Siti', 'Sawangan', 1, 1),
(4, '2020-12-10', 'aa', '2020-12-12', 'aa', 'aaa', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`Kode_buku`),
  ADD KEY `fk_buku_kategori1_idx` (`kategori_idkategori`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indeks untuk tabel `kembali`
--
ALTER TABLE `kembali`
  ADD PRIMARY KEY (`idkembali`),
  ADD KEY `fk_Kembali_Pinjam1_idx` (`Pinjam_idPinjam`);

--
-- Indeks untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`idPinjam`),
  ADD KEY `fk_Pinjam_buku1_idx` (`buku_Kode_buku`),
  ADD KEY `fk_Pinjam_Admin1_idx` (`Admin_id_admin`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `Kode_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=510;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `idkategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kembali`
--
ALTER TABLE `kembali`
  MODIFY `idkembali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `idPinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `fk_buku_kategori1` FOREIGN KEY (`kategori_idkategori`) REFERENCES `kategori` (`idkategori`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `kembali`
--
ALTER TABLE `kembali`
  ADD CONSTRAINT `fk_Kembali_Pinjam1` FOREIGN KEY (`Pinjam_idPinjam`) REFERENCES `pinjam` (`idPinjam`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  ADD CONSTRAINT `fk_Pinjam_Admin1` FOREIGN KEY (`Admin_id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Pinjam_buku1` FOREIGN KEY (`buku_Kode_buku`) REFERENCES `buku` (`Kode_buku`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
