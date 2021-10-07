-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2020 at 08:27 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pariwisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `berita_id` int(5) NOT NULL,
  `berita_title` varchar(255) NOT NULL,
  `berita_desc` text NOT NULL,
  `berita_date` varchar(30) NOT NULL,
  `berita_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`berita_id`, `berita_title`, `berita_desc`, `berita_date`, `berita_url`) VALUES
(8, 'Bukit Passapa Toraja, Negeri Dongeng di Dunia Nyata', 'Bosan dengan wisata yang gitu-gitu aja ? Bukit Passapa di Tana Toraja mungkin bisa menjadi salah satu alternatif weekend list kamu travelers. Bukit Passapa menyajikan hamparan perbukitan dengan sajian pemandangan sabana berwarna hijau sejauh mata memandang.\r\nPuncak keindahan tempat ini yaitu saat sunrise dan sunset. Pemandangan perbukitan sabana yang terbuka membuat pancaran sinar matahari menjadi biasan cahaya berwarna emas. Jadi wajar saja kalau Bukit Passapa juga dijuluki pengunjung sebagai bukit romantis.\r\n\r\nSabana atau savana merupakan vegetasi padang rumput yang dipenuhi oleh semak atau perdu dengan beberapa jenis pohon yang tumbuh menyebar. Vegetasi ini biasa ditemukan di daerah tropis dan subtropis seperti Afrika, Amerika Selatan, dan Australia merupakan wilayah yang terkenal akan keindahan sabananya.', '2020-12-04', '995a059732c2bf452f8d6ce7fb652cbe.png'),
(9, 'Mulai 4 September, Wings Air Resmi Terbang ke Tana Toraja', 'Maskapai Wings Air resmi terbang ke Tana Toraja pada Jumat 4 September mendatang. Maskapai ini jadi yang pertama dan satu-satunya melayani penerbangan rute Makassar-Toraja.\r\nWings Air akan melaksanakan penerbangan perdana dari Bandara Internasional Sultan Hasanuddin (UPG) di Maros, Sulawesi Selatan dengan tujuan Bandara Toraja (TRT) di Kecamatan Mengkendek, Kabupaten Tana Toraja, Sulawesi Selatan pada 4 September 2020.\r\n\r\nDari rilis pers Wings Air yang diterima detikTravel, Rabu (2/9/2020), untuk awalan Wings Air akan menyediakan (4) kali penerbangan dalam seminggu, yaitu setiap hari Selasa, Rabu, Jumat dan Minggu.\r\n\r\nPesawat dengan nomor penerbangan IW-1330 itu memiliki jadwal keberangkatan dari Bandara Internasional Sultan Hasanuddin pada pukul 09.35 WITA dan dijadwalkan tiba di Bandara Toraja pada pukul 10.35 WITA.\r\n\r\nUntuk penerbangan baliknya, Wings Air dengan nomor penerbangan IW-1331 akan terbang Bandara Tana Toraja pada pukul 10.55 WITA dan dijadwalkan tiba di Bandara Internasional Sultan Hasanuddin pada pukul 11.55 WITA.', '2020-09-03', 'd0c0929b236d9bf80e843555574d6b0f.png'),
(10, 'Unik, Tana Toraja Punya Kuburan Berbentuk Perahu dan Hewan', 'Tidak seperti kebanyakan kuburan, di Tana Toraja kuburan terbilang unik karena berbentuk perahu dan hewan. Yuk baca penjelasannya!\r\nKuburan ini bisa kamu temukan di Londa Desa Sandan Uai, Kecamatan Sanggalangi, Kabupaten Toraja Utara, Sulawesi Selatan. Bahasa setempat menyebutnya adalah erong. Erong hanya salah satu dari beberapa kuburan yang ada di Tana Toraja, kuburan ini berusia 500 tahun.\r\n\r\nErong ini terletak di gua alam di sebuah tebing. Kuburan atau makam ini terlihat menggantung di sela-sela gua tebing. Alasan menggantung kuburan juga berdasarkan strata sosial almarhum saat masih hidup. Semakin tinggi kuburannya maka semakin tinggi strata sosialnya.\r\n\r\nErong ini terbuat dari kayu, bentuknya pun bermacam-macam. Ada yang berbentuk perahu sampai dengan kepala hewan. Bentuk perahu atau tongkonan (rumah adat Tana Toraja) dipercaya sebagai sejarah awal mula datangnya nenek moyang Tana Toraja dengan menggunakan perahu.', '2020-08-17', '6d5de008b5d9799d216ccf0b7688d846.png'),
(11, 'Edarkan Uang Palsu, Ibu Rumah Tangga di Tana Toraja Ditangkap', 'Seorang ibu rumah tangga di Rembon, Tana Toraja, Sulawesi Selatan, ditangkap aparat kepolisian. Dia telah mengedarkan uang palsu dengan cara membeli barang di pasar.\r\nDari tangan pelaku yang berinisial SYH (50), warga Rembon, polisi mengamankan barang bukti uang palsu sebanyak 180 lembar pecahan 100 ribu, 2 lembar uang Kuwait pecahan 20 dinar, dua buah handphone, dan buku rekening.', '2020-10-14', 'd6cc14e0404bd01b0f972496ed5b8c5d.png'),
(12, 'Klaster Tongkonan Ada\' di Tana Toraja: 11 Orang Positif Corona dalam 4 Hari', 'Satgas COVID-19 Tana Toraja mengumumkan ada penambahan sembilan kasus baru COVID-19. Saat ini total ada 28 kasus COVID-19 di Tana Toraja, Sulawesi Selatan (Sulsel).\r\nTujuh dari sembilan kasus baru terkonfirmasi positif COVID-19 berdasarkan hasil pemeriksaan real time polymerase chain reaction (PCR) yang dilakukan Senin (6/7/2020). Sementara dua kasus merupakan hasil pemeriksaan tes cepat molekuler (TCM).\r\n\r\n\"Berdasarkan hasil contact tracing, 6 kasus merupakan kluster Tongkonan Ada\' yang memiliki riwayat kontak erat dengan pasien 09, yang diumumkan terkonfirmasi positif COVID-19 pada Selasa, 30 Juni 2020 lalu, dan ke 6 orang tersebut merupakan tetangganya,\" kata Kepala Dinas Kesehatan Kabupaten Tana Toraja, Mariana Belo, di Media Center COVID-19 Tana Toraja, Rabu (8/7/2020).', '2020-07-08', '1bb9f0c156c7ad1d02be14e74112ad52.png'),
(13, 'Hilang 3 Hari, Bocah 8 Tahun Tewas Tenggelam Sungai Saddang Toraja', 'Sempat hilang 3 hari, tubuh bocah berusia 8 tahun bernama Fisel ditemukan tenggelam di Sungai Saddang, Kabupaten Tana Toraja, Sulawesi Selatan. Tubuh korban ditemukan sekitar 3 kilometer dari lokasi kejadian awal.Korban diketahui menghilang sejak Rabu lalu (1/7). Namun orang tua korban baru melaporkan ke posko Tim SAR Palopo pada Jumat (3/7).', '2020-07-04', '5f33f1d04cdaf90286e434034092204f.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `komentar_id` int(10) NOT NULL,
  `komentar_author` varchar(50) NOT NULL,
  `komentar_email` varchar(50) NOT NULL,
  `komentar_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`komentar_id`, `komentar_author`, `komentar_email`, `komentar_content`) VALUES
(1, 'Septian', 'yan@asia.com', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(3) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_password` varchar(128) NOT NULL,
  `comment_enabled` int(1) NOT NULL,
  `is_maintenance` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_password`, `comment_enabled`, `is_maintenance`) VALUES
(1, 'admin', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wisata`
--

CREATE TABLE `tbl_wisata` (
  `wisata_id` int(5) NOT NULL,
  `wisata_name` varchar(50) NOT NULL,
  `wisata_desc` text NOT NULL,
  `wisata_lat` varchar(30) NOT NULL,
  `wisata_lng` varchar(30) NOT NULL,
  `wisata_url` varchar(255) NOT NULL,
  `wisata_pic` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_wisata`
--

INSERT INTO `tbl_wisata` (`wisata_id`, `wisata_name`, `wisata_desc`, `wisata_lat`, `wisata_lng`, `wisata_url`, `wisata_pic`) VALUES
(5, 'Mata Air Tilanga', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', '-3.035244', '119.885082', 'b96074b2aa5d38ae3ae227c303c4abfd.jpg', '+6285298000801'),
(6, 'Tongkonan Lempe', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?', '-2.9453945', '119.8566847', 'c17cc726a6d930468a4c8011f65ce244.jpg', '+6285298000000'),
(7, 'Air Terjun', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.', '-2.9558366', '119.8662612', '67b32a6994a0a6c5cad47c6d92ad9157.jpg', '+6285298000000'),
(8, 'Gunung Batu', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.', '-2.960049', '119.863348', '302aa1ac689f225d13ef1e3f544927bf.jpg', '+6285298000000'),
(9, 'Persawahan', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '-2.9559275', '119.8635301', '2890469dc4267ddfa10623b018e096bc.jpg', '+6285298000000'),
(11, 'Gunung Apa', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '-2.9655299', '119.8930626', 'a04b54cc56880a8df36b0a9ff90ff26c.jpg', '+6285298000000'),
(12, 'Batutumonga', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.', '-2.9150726', '119.8739783', '3473cc8c13dd4f67466fd0e64b80f5cb.jpg', '+6285298000000'),
(13, 'Negeri Diatas Awan', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.', '-2.9453891', '119.8566847', '280ea3c91f3393ed20d734376be601e0.jpg', '+6285298000000'),
(17, 'Desa Palawa', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '-2.9105842', '119.9336362', 'eb69806207000a30c140e13c28bd0698.jpg', '+6285298000321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`berita_id`);

--
-- Indexes for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`komentar_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_wisata`
--
ALTER TABLE `tbl_wisata`
  ADD PRIMARY KEY (`wisata_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `berita_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `komentar_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_wisata`
--
ALTER TABLE `tbl_wisata`
  MODIFY `wisata_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
