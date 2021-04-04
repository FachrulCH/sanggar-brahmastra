-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2021 at 08:28 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sanggar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admins`
--

CREATE TABLE `tb_admins` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admins`
--

INSERT INTO `tb_admins` (`id`, `email`, `password`, `name`, `last_login`) VALUES
(1, 'admin@brahmastra.id', '74ee55083a714aa3791f8d594fea00c9', 'Firah F', '2021-03-24 14:51:04');

-- --------------------------------------------------------

--
-- Table structure for table `tb_karya`
--

CREATE TABLE `tb_karya` (
  `id` int(11) NOT NULL,
  `judul_karya` varchar(250) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` date DEFAULT NULL,
  `foto` varchar(250) DEFAULT NULL,
  `kode_id` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_karya`
--

INSERT INTO `tb_karya` (`id`, `judul_karya`, `keterangan`, `tanggal`, `foto`, `kode_id`) VALUES
(11, 'Berdagang di Masa Pandemi', 'lukisan 1', '2021-02-04', 'karya/pakherman_bergadangdipandem.jpeg', 'Herman'),
(12, 'Perahu Unik', 'lukisan 2', '2020-11-01', 'karya/pakherman_perahuunik.jpeg', 'Herman'),
(13, 'Pedati', 'lukisan 3', '2021-01-31', 'karya/pakherman_pedati.jpeg', 'Herman'),
(14, 'Menunggu Malena', 'lukisan 4', '2020-03-23', 'karya/pakherman_menunggumalena.jpeg', 'Herman'),
(15, 'Mengintip Mangsa', 'lukisan 5', '2019-10-20', 'karya/pakherman_mengintipmangsa.jpeg', 'Herman'),
(16, 'lukisan irene', 'lukisan 1', '2021-03-27', 'karya/irene1.jpeg', 'Irene'),
(17, 'Cuaca Cerah', 'Waco 30x40', '2020-02-22', 'karya/irene2.jpeg', 'Irene'),
(18, 'lukisan irene', 'irene', '2020-07-11', 'karya/irene3.jpeg', 'Irene'),
(19, 'lukisan nazli', 'nazli', '2021-02-07', 'karya/nazli.jpeg', 'Nazli'),
(20, 'lukisan', 'lukisan', '2020-12-23', 'karya/queen2.JPG', 'Queen'),
(21, 'sarjana', 'queen', '2021-03-24', 'karya/queen1.JPG', 'Queen'),
(22, 'vel', 'veli', '2021-01-14', 'karya/veli1.jpeg', 'veli'),
(23, 'vel', 'vel', '2020-01-01', 'karya/veli2.jpeg', 'veli');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kegiatan`
--

CREATE TABLE `tb_kegiatan` (
  `id` int(5) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_kegiatan` varchar(250) NOT NULL,
  `gambar` text NOT NULL,
  `keterangan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kegiatan`
--

INSERT INTO `tb_kegiatan` (`id`, `tanggal`, `nama_kegiatan`, `gambar`, `keterangan`) VALUES
(1, '2020-01-11', 'kegiatan on the spot', 'images/kegiatan/ots (1).jpg', '                                                        <p style=\"margin-top:0cm\"><span style=\"font-family: \"Source Sans Pro\", sans-serif;\">Kegiatan on the spot ini biasanya dilaksanakan 1 bulan sekali.<o:p></o:p></span></p><p style=\"margin-top: 0cm;\"><span style=\"font-family: \"Source Sans Pro\", sans-serif;\">tempat on the spot kali ini adalah sawah.</span></p><p style=\"margin-top: 0cm;\"><font face=\"Source Sans Pro, sans-serif\">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui</font><br></p>                                                '),
(2, '2021-03-18', 'kegiatan on the spot', 'images/kegiatan/ots_5.jpg', '                            Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Proin eget tortor risus.                         '),
(3, '2021-03-19', 'kegiatan belajar mingguan', 'images/kegiatan/14.jpg', '<p>jadwal belajar di sanggar adalah sabtu dan minggu.</p><p>tapi siswa bisa memilih mau belajar hari apa</p>'),
(4, '2021-03-02', 'Setelah kegiatan mengajar, guru melukis', 'images/kegiatan/IMG_20210112_142035.jpg', 'guru pun tidak mau kalah membuat karya seperti muridnya. ini adalah foto ketiga guru yang sedang melukis');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `nama` int(11) NOT NULL,
  `jenis_kelamin` int(11) NOT NULL,
  `ttl` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `nohp` int(15) NOT NULL,
  `alamat` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_profile_guru`
--

CREATE TABLE `tb_profile_guru` (
  `id` int(5) NOT NULL,
  `kode_id` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `profile` text NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `experience` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_profile_guru`
--

INSERT INTO `tb_profile_guru` (`id`, `kode_id`, `name`, `profile`, `foto`, `experience`) VALUES
(1, 'Herman', 'Herman PG', '<h4>Ketua, Instruktur</h4>\r\n                      <p class=\"card-text\">Lahir di Banjar 24 Juli. <span> Alamat Rumah Perum Bumi Asri, Jl. Mega Asri IX No. C 35 Indihiang, Tasikmalaya</span></p>\r\n						 <p>Herman PG adalah Pensiunan Guru SMKN 3 Tasikmalaya. Senang melukis sejak kecil. Masuk Perguruan tinggi Universitas Perguruan tinggi Indonesia. Kemudian mengamalkan ilmu nya di SMKN 3 Tasikmalaya. \r\n							</p><p>Setelah memasuki Purnabakti, Herman PG bersama Afrudin mendirikan Sanggar Brahmastra Art untuk membimbing anak-anak yang memiliki potensi dibidang seni lukis. </p>', 'images/herman.jpg', '<table class=\"table\">\r\n                            \r\n							\r\n                            \r\n                            <thead>\r\n                              <tr>\r\n                                <th scope=\"col\">NO.</th>\r\n                                <th scope=\"col\">Tahun</th>\r\n                                <th scope=\"col\">Nama Kegiatan</th>\r\n                                <th scope=\"col\">Tempat</th>\r\n                              </tr>\r\n                            </thead>\r\n                            <tbody>\r\n                              <tr>\r\n                                <th scope=\"row\">1</th>\r\n                                <td>2008-2011</td>\r\n                                <td>Pameran Bersama Manajemen Pinggiran SILPA dan KSRT</td>\r\n                                <td>Tasikmalaya, Bandung, Yogyakarta, Bali, IKIP Bandung</td>\r\n                              </tr>\r\n                              <tr>\r\n                                <th scope=\"row\">2</th>\r\n                                <td>2011</td>\r\n                                <td>Pameran Karikatur Bersama Manajemen Pinggiran</td>\r\n                                <td>Tasikmalaya</td>\r\n                              </tr>\r\n                              <tr>\r\n                                <th scope=\"row\">3</th>\r\n                                <td>2012</td>\r\n                                <td>Pameran bersama SILPA, Humaniora di Gallery Terasseni, Hardiknas, Merespon Ruang bersama MP</td>\r\n								<td>Ubud-Bali, UPI Bandung, Gedung Kesenian Tasikmalaya</td>\r\n                              </tr>\r\n							  <tr>\r\n                                <th scope=\"row\">4</th>\r\n                                <td>2017</td>\r\n                                <td>Tumbuh Kembang Anak du RSIA Hj. Karmini</td>\r\n								<td>Tasikmalaya</td>\r\n                              </tr>\r\n							  <tr>\r\n                                <th scope=\"row\">5</th>\r\n                                <td>2018</td>\r\n                                <td>Pameran EXPOSE Edu Art</td>\r\n								<td>Taman Budaya, Yogyakarta</td>\r\n                              </tr>\r\n							  <tr>\r\n                                <th scope=\"row\">6</th>\r\n                                <td>2019</td>\r\n                                <td>Ngaguar Rasa bersama MP, Pameran Wisata PCG (Papandayan Camping Ground, Nuansa Estetika</td>\r\n								<td>Tasikmalaya, Garut, Taman Budaya Yogyakarta</td>\r\n                              </tr>\r\n                            </tbody>\r\n                          </table>'),
(2, 'Afrudin', 'Afrudin Achmad', '<h4>Wakil Ketua, Instruktur </h4>\r\n						  <p class=\"card-text\">Lahir di Jakarta, 24 Februari 1966</p>\r\n						  <p><span> Alamat : Jl. Sutisna Senjaya RT.01 RW.04 Cicurug Bata Kota Tasikmalaya 46114 <br> <e-mail>E-mail :afrudin.tiger@gmail.com</e-mail></span></p>\r\n						<p>Belajar melukis secara otodidak dan sering kali mengikuti pameran di berbagai daerah sejak 1984 hingga sekarang di berbagai tempat diantaranya Untuk Wilayah Indonesia yaitu Tasikmalaya, Garut, Bandung, Jakarta, Yogyakarta, Mojokerto, Surabaya, dan Bali.\r\n						Untuk Skala Internasional yaitu 6 kali Pameran tunggal di Jerman, Pameran bersama di Guangxi, China</p>\r\n					  <p>Pernah menjadi instruktur (guru gambar) PT. Faber Castell Internasional dari tahun 2010-2016. Dan mengajar di SLB, Seni Rupa (Seni lukis) sebagai media terapi untuk anak berkebutuhan khusus.</p>\r\n					  <p>Sebagai Ketua Pelukis di Tasikmalaya dengan kelompoknya yang bernama Manajemen Pinggiran Tasikmalaya Painting Community sejak 2010 hingga sekarang.</p>\r\n				', 'images/ayah2.jpg', ' <table class=\"table\">\r\n                            \r\n							\r\n                            \r\n                            <thead>\r\n                              <tr>\r\n                                <th scope=\"col\">NO.</th>\r\n                                <th scope=\"col\">Tahun</th>\r\n                                <th scope=\"col\">Nama Kegiatan</th>\r\n                                <th scope=\"col\">Tempat</th>\r\n                              </tr>\r\n                            </thead>\r\n                            <tbody>\r\n                              <tr>\r\n                                <th scope=\"row\">1</th>\r\n                                <td>2016</td>\r\n                                <td>Together Exhibiton with Community \"Aenne Biermann Gera-Germany\"</td>\r\n                                <td>Germany</td>\r\n                              </tr>\r\n                              <tr>\r\n                                <th scope=\"row\">2</th>\r\n                                <td>2016</td>\r\n                                <td>Together at Foyer der Stadtverwaltung</td>\r\n                                <td>Gera, Germany</td>\r\n                              </tr>\r\n                              <tr>\r\n                                <th scope=\"row\">3</th>\r\n                                <td>2016</td>\r\n								<td>Solo Exhibiton at Tierarztklinik Lohse (Klinik Dokter Lohse) <br>Solo Exhibiton at Thuringin Parliament,<br> Solo Exhibiton at University of Jena, Germany</td>\r\n                                <td>Germany</td>\r\n                              </tr>\r\n							  <tr>\r\n                                <th scope=\"row\">4</th>\r\n                                <td>2016</td>\r\n								<td>\"Indonesian Farbwelten\" with Association Gera</td>\r\n                                <td>Burgergalerie, Germany</td>\r\n                              </tr>\r\n							  <tr>\r\n                                <th scope=\"row\">5</th>\r\n                                <td>2017</td>\r\n								<td>Solo Exhibiton \"Java in Bildern\" at Vet Clinic Dr. Lohse</td>\r\n                                <td>Germany</td>\r\n                              </tr>\r\n							  <tr>\r\n                                <th scope=\"row\">6</th>\r\n                                <td>2018</td>\r\n								<td>Festival Budaya Indonesia at KJRI</td>\r\n                                <td>Guangxi, China</td>\r\n                              </tr>\r\n							  <tr>\r\n                                <th scope=\"row\">7</th>\r\n                                <td>2018</td>\r\n								<td>Exhibiton art in Gera Community at Geraer Volkshochshule \"Aenne Biermann\"</td>\r\n                                <td>Gera,Germany</td>\r\n                              </tr>\r\n							  <tr>\r\n                                <th scope=\"row\">8</th>\r\n                                <td>2018</td>\r\n								<td>Together Exhibiton with Mr. Hans Jorg Waskowski</td>\r\n                                <td>St. Gangloff, Germany</td>\r\n                              </tr>\r\n                            </tbody>\r\n                          </table>'),
(5, 'Yaman', 'Yaman Sutiyaman', '<h4 style=\"font-family: \"Roboto Slab\", serif; line-height: 1.1; color: rgb(0, 0, 0); margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-size: 18px;\">Instruktur</h4><p class=\"card-text\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(130, 130, 130); font-family: \"Source Sans Pro\", Arial, sans-serif; font-size: 15px;\">Bekerja sebagai Karyawan di Mangkubumi Waterpark. Dan bergabung dengan Manajemen Pinggiran sejak 2014. Dan beberapa kali mengikuti pameran bersama di Tasikmalaya, Bandung, dan Jerman.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(130, 130, 130); font-family: \"Source Sans Pro\", Arial, sans-serif; font-size: 15px;\">aktif mengikuti pameran sejak bergabung dengan Manajemen Pinggiran hingga sekarang serta menjadi instruktur di Brahmastra Art.</p>', 'images/yaman.jpg', '    <h3 style=\"font-family: \"Roboto Slab\", serif; line-height: 1.1; color: rgb(0, 0, 0); margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-size: 24px;\">Pengalaman Pameran</h3><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(130, 130, 130); font-family: \"Source Sans Pro\", Arial, sans-serif; font-size: 15px;\">Berikut beberapa Pameran yang pernah diikuti oleh Yaman :</p><hr style=\"margin-top: 20px; margin-bottom: 20px; border-top-color: rgb(238, 238, 238); color: rgb(130, 130, 130); font-family: \"Source Sans Pro\", Arial, sans-serif; font-size: 15px;\"><table class=\"table\" style=\"border-spacing: 0px; background-color: rgb(255, 255, 255); width: 555px; max-width: 100%; margin-bottom: 20px; color: rgb(130, 130, 130); font-family: \"Source Sans Pro\", Arial, sans-serif; font-size: 15px;\"><thead><tr><th scope=\"col\" style=\"padding: 8px; text-align: left; line-height: 1.42857; border-top: 0px; border-bottom-color: rgb(221, 221, 221);\">NO.</th><th scope=\"col\" style=\"padding: 8px; text-align: left; line-height: 1.42857; border-top: 0px; border-bottom-color: rgb(221, 221, 221);\">Tahun</th><th scope=\"col\" style=\"padding: 8px; text-align: left; line-height: 1.42857; border-top: 0px; border-bottom-color: rgb(221, 221, 221);\">Nama Kegiatan</th><th scope=\"col\" style=\"padding: 8px; text-align: left; line-height: 1.42857; border-top: 0px; border-bottom-color: rgb(221, 221, 221);\">Tempat</th></tr></thead><tbody><tr><th scope=\"row\" style=\"padding: 8px; text-align: left; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">1</th><td colspan=\"1\" style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\"></td><td style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">Pameran Lukisan bersama Hans Joerg Waskowski di Joglo Mangkubumi Lingkungan Hidup</td><td style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">Green Area Mangkubumi</td></tr><tr><th scope=\"row\" style=\"padding: 8px; text-align: left; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">2</th><td colspan=\"1\" style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\"></td><td style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">Silahturahmi Kota di Hotel Mangkubumi</td><td style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">Mangkubumi, Tasikmalaya</td></tr><tr><th scope=\"row\" style=\"padding: 8px; text-align: left; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">3</th><td colspan=\"1\" style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\"></td><td style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">Pameran Kreasi Seni dari Limbah</td><td style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">Singaparna,<br>Garut</td></tr><tr><th scope=\"row\" style=\"padding: 8px; text-align: left; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">4</th><td colspan=\"1\" style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\"></td><td style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">Potret Kehidupan bersama MP Tasikmalaya</td><td style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">Tasikmalaya</td></tr><tr><th scope=\"row\" style=\"padding: 8px; text-align: left; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">5</th><td style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">2016</td><td style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">\"Indonesian Farbwelten\" with Association Gera</td><td style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">Burgergalerie, Germany</td></tr><tr><th scope=\"row\" style=\"padding: 8px; text-align: left; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">6</th><td colspan=\"1\" style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\"></td><td style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">Eksplorasi Media 1 di Resto Hotel Mangkubumi</td><td style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">Tasikmalaya</td></tr><tr><th scope=\"row\" style=\"padding: 8px; text-align: left; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">7</th><td style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">2017</td><td style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">Potret Kehidupan bersama MP Tasikmalaya</td><td style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">Tasikmalaya</td></tr><tr><th scope=\"row\" style=\"padding: 8px; text-align: left; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">8</th><td style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">2017</td><td style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">Tumbuh Kembang Anak du RSIA Hj. Karmini</td><td style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">Tasikmalaya</td></tr></tbody></table>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profile_sanggar`
--

CREATE TABLE `tb_profile_sanggar` (
  `id` int(11) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_profile_sanggar`
--

INSERT INTO `tb_profile_sanggar` (`id`, `jenis`, `judul`, `keterangan`) VALUES
(1, 'headline_1', '<h2>Sanggar Brahmastra Art</h2>', '                                                                                                                <h4>Sanggar Brahmastra Art adalah tempat menggali bakat dan kreatifitas anak anak dalam bidang Senirupa khususnya Senilukis tanpa dibebani untuk kelak menjadi seniman atau menjadi pemenang dalam kejuaraan senirupa.</h4>                                                                                                '),
(2, 'headline_2', '<h2>Sejarah Sanggar Brahmastra Art </h2>', '                                                                                                                                            <p>Brahmastra adalah sejenis senjata pamungkas dalam ceritera pewayangan</p>\r\n                            <p>Sanggar ini diberi nama Brahmastra Art, Dimana di sanggar ini dijadikan tempat latihan atau belajar seni rupa khususnya seni lukis bagi anak-anak atau siapa saja yang ingin memperdalam kesenirupaan atau seni lukis.</p>\r\n                            <p>Dengan berlatih seni lukis diharapkan para peserta memiliki keterampilan sebagai bekal hidup dikemudian hari. Sebagai sampingan,hobi atau malah sebagai bisnis utama. Di manapun kita hidup keterampilan tersebut menjadi senjata utk kehidupan.</p>\r\n                                <p>Sanggar Brahmastra Art di dirikan Pada Bulan Agustus 2019 dan diresmikan oleh Ibu Hj. Rukmini Pada 28 Juli 2020</p>                                                                                                                        ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_testimonial`
--

CREATE TABLE `tb_testimonial` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_testimonial`
--

INSERT INTO `tb_testimonial` (`id`, `nama`, `keterangan`, `pesan`, `foto`) VALUES
(1, 'Ibu Ida', 'Orang tua Irene (Kelas Acrylic media canvas)', '<p>Irene belajar di Sanggar ini kurang hampir 8 bulan. Irene perkembangan nya sangat pesat, guru disini ngajar nya bagus sekali, membuat irene cepat mengerti.</p><p>Irene pada saat masih baru 4 bulan belajar disini (kelas cat air) sudah pernah mengikuti pameran di Hotel Mangkubumi pada bulan Agustus tahun lalu</p>', 'images/testimonial/avatar-placeholder.png'),
(2, 'Ibu Rizka', 'Orang tua Veli (Acrylic media canvas)', '<p>Veli belajar disini hampir setahun. Dimulai dari kelas cat air hingga sekarang mengambil kelas acrylic perkembangannya sangat pesat.</p><p>Instrukturnya baik sekali dan sangat sabar.</p><p>Pernah mengikuti pameran di Hotel Mangkubumi, Agustus 2020</p>', 'images/testimonial/avatar-placeholder.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admins`
--
ALTER TABLE `tb_admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_karya`
--
ALTER TABLE `tb_karya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_profile_guru`
--
ALTER TABLE `tb_profile_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_profile_sanggar`
--
ALTER TABLE `tb_profile_sanggar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_testimonial`
--
ALTER TABLE `tb_testimonial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admins`
--
ALTER TABLE `tb_admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_karya`
--
ALTER TABLE `tb_karya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_profile_guru`
--
ALTER TABLE `tb_profile_guru`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_profile_sanggar`
--
ALTER TABLE `tb_profile_sanggar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_testimonial`
--
ALTER TABLE `tb_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
