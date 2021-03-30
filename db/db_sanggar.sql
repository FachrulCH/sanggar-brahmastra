-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 31 Mar 2021 pada 01.57
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.12

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
-- Struktur dari tabel `tb_admins`
--

CREATE TABLE `tb_admins` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admins`
--

INSERT INTO `tb_admins` (`id`, `email`, `password`, `name`, `last_login`) VALUES
(1, 'admin@brahmastra.id', '74ee55083a714aa3791f8d594fea00c9', 'Firah F', '2021-03-24 14:51:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_karya_guru`
--

CREATE TABLE `tb_karya_guru` (
  `id` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `judul_karya` varchar(250) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` date DEFAULT NULL,
  `foto` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_karya_guru`
--

INSERT INTO `tb_karya_guru` (`id`, `id_guru`, `judul_karya`, `keterangan`, `tanggal`, `foto`) VALUES
(2, 7, 'Team of the Year', 'team of the year\r\nCurabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.\r\nCurabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Donec rutrum congue leo eget malesuada.', '2021-01-01', 'karya/guru/toty.jpeg'),
(3, 1, 'Kegiatan Belajar', 'Kegiatan belajar siswa bimbingan', '2021-03-01', 'karya/guru/collage3.png'),
(4, 7, 'Python logo', 'gambar logo python programming\r\nVestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Donec sollicitudin molestie malesuada.', '2021-03-03', 'karya/guru/python.png'),
(5, 7, 'Animasi Simpson', 'Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada.\r\n\r\nCurabitur aliquet quam id dui posuere blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n\r\nSed porttitor lectus nibh. Pellentesque in ipsum id orci porta dapibus.\r\n\r\nNulla porttitor accumsan tincidunt. Vivamus suscipit tortor eget felis porttitor volutpat.\r\n\r\nCurabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat.', '2021-03-02', 'karya/guru/auahelap.gif'),
(6, 7, 'belajar bersama', 'Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor risus.', '2021-03-11', 'karya/guru/collage4.png'),
(7, 7, 'Karya Bersama', 'Pellentesque in ipsum id orci porta dapibus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.\r\n\r\nCurabitur non nulla sit amet nisl tempus convallis quis ac lectus. Proin eget tortor risus.\r\n\r\nVivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.\r\n', '2021-03-03', 'karya/guru/collage2025.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kegiatan`
--

CREATE TABLE `tb_kegiatan` (
  `id` int(5) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_kegiatan` varchar(250) NOT NULL,
  `gambar` text NOT NULL,
  `keterangan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kegiatan`
--

INSERT INTO `tb_kegiatan` (`id`, `tanggal`, `nama_kegiatan`, `gambar`, `keterangan`) VALUES
(1, '2020-01-11', 'kegiatan on the spot', 'karya/guru/sample.jpg', 'Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. '),
(2, '2021-03-18', 'kegiatan on the spot', 'karya/guru/sample.jpg', 'Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Proin eget tortor risus. '),
(3, '2021-03-19', 'pameran di yogyakart', 'karya/guru/sample.jpg', 'Donec sollicitudin molestie malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Curabitur aliquet quam id dui posuere blandit.'),
(4, '2021-03-02', 'Melukis bareng yuk!', 'images/kegiatan/collage2002.png', '<h2><div class=\"MsoNormal\" style=\"margin: 0px 0px 0cm; padding: 0px; color: rgb(41, 41, 41); font-family: Nobile, sans-serif; font-size: 14px; line-height: 21px; text-align: justify;\">Anak yang distimulasi otak kanannya terlebih dahulu, akan “nyetrum ke sel-sel lain”. Pasien dr Tiwi, anak dari orangtua seniman, selalu bagus perkembangannya, karena menurut dr Tiwi orangtua mereka menstimulasi awalnya dengan mengasah otak kanan. Logika nanti dulu. Pentingnya stimulasi pada anak karena otak anak tidak mengenal teknis orangtua. Dia tetap berjalan terus. Otak tidak berfikir “oh ini mama lagi&nbsp;<i>meeting</i>, papa keluar kota, otak gak nunggu, terus aja tumbuh” jelasnya lagi. Dr Tiwi juga mengingatkan permainan macem-macem buat anak memang penting tapi harus ada orang yang ngajak bermain.<br><br><table align=\"center\" cellpadding=\"0\" cellspacing=\"0\" class=\"tr-caption-container\" style=\"border-spacing: 0px; padding: 0px; margin-bottom: 0px; position: relative; margin-left: auto; margin-right: auto; text-align: center;\"><tbody><tr><td style=\"margin: 0px; padding: 0px;\"><a href=\"https://4.bp.blogspot.com/-lsL3IK8dC80/WsXdtY0uTdI/AAAAAAAABlE/jqdQAjeMOAovmkG8tBRvxQ7b4diGl5nzACLcBGAs/s1600/1522916523891.jpg\" imageanchor=\"1\" style=\"outline: none; transition: all 0.2s ease 0s; color: rgb(153, 122, 141); max-width: calc(800px); margin-left: auto; margin-right: auto;\"><img border=\"0\" data-original-height=\"1200\" data-original-width=\"1600\" height=\"480\" src=\"https://4.bp.blogspot.com/-lsL3IK8dC80/WsXdtY0uTdI/AAAAAAAABlE/jqdQAjeMOAovmkG8tBRvxQ7b4diGl5nzACLcBGAs/s640/1522916523891.jpg\" width=\"640\" style=\"border-width: initial; border-color: initial; border-image: initial; max-width: 100%; height: auto; position: relative; filter: url(&quot;#dark-reader-reverse-filter&quot;) !important;\"></a></td></tr><tr><td class=\"tr-caption\" style=\"margin: 0px; padding: 10px 15px; font-size: 12px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">hasil melukis Luigi 25 bulan</td></tr></tbody></table><br></div><div class=\"MsoNormal\" style=\"margin: 0px 0px 0cm; padding: 0px; color: rgb(41, 41, 41); font-family: Nobile, sans-serif; font-size: 14px; line-height: 21px; text-align: justify;\">Salah satu kegiatan anak yang menstimulasi otak kanan anak adalah kegiatan melukis. Anak-anak diberi kesempatan bermain dengan warna dan berimajinasi dengan olesan warna yang digoreskan. Setelah&nbsp;<i>finger painting</i>, Luigi (25 bulan) saya ajak untuk melukis menggunakan cat air. Yeyy :D</div></h2><p>                        </p>'),
(5, '2021-03-02', 'Buat Liburan Lebih Seru dengan 5 Kerajinan Tangan Berikut Ini!', 'images/kegiatan/collage2025.png', '<div><p style=\"margin-right: 0px; margin-left: 0px; font-family: -apple-system, system-ui, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; text-align: justify;\">Hai,&nbsp;<em>smart buddies</em>! Meskipun harus di rumah, bukan berarti kamu tidak bisa mendapat liburan seru lho. Yuk, coba belajar hal baru! Eits, bukan belajar akademik seperti di sekolah kok. Simpan bukumu sejenak, mari melakukan aktivitas tangan! Ingat dengan pelajaran prakarya yang menyenangkan dulu? Nah, kamu bisa menciptakan keseruan itu lagi lho. Berikut 5 kerajinan tangan yang patut dicoba selama liburan ini.&nbsp;<em>Check them out</em>!&nbsp;</p><h2 style=\"font-family: &quot;Open Sans&quot;, sans-serif; font-size: 24px; position: relative; padding-bottom: 10px; margin-right: 0px; margin-left: 0px; color: rgb(0, 0, 0); text-align: justify;\"><span style=\"font-weight: bolder;\"><span style=\"color: rgb(51, 102, 255);\">1<em>. Scrapbooking</em></span></span></h2><p style=\"margin-right: 0px; margin-left: 0px; font-family: -apple-system, system-ui, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; text-align: justify;\">Ingin menjadikan cetakan foto kamu lebih ciamik? Kamu bisa mencoba&nbsp;<em>scrapbooking</em>&nbsp;nih,&nbsp;<em>smart</em>&nbsp;<em>buddies</em>. Gunakan gunting, lem, pita, dan berbagai pernak-pernik supaya makin&nbsp;<em>fancy</em>&nbsp;dan&nbsp;<em>artsy</em>. Padu padankan juga dengan kancing,&nbsp;<em>selotape</em>, hingga benang yang kamu miliki. Eits, tidak harus beli baru, lho. Barang-barang bekasmu pun bisa kamu olah agar menjadi berguna kembali.</p><p style=\"margin-right: 0px; margin-left: 0px; font-family: -apple-system, system-ui, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;</p><div class=\"caption\" style=\"font-family: -apple-system, system-ui, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; text-align: center;\"><img class=\"wp-image-9524\" src=\"https://www.ruangguru.com/hs-fs/hubfs/Imported_Blog_Media/craft-pinterest-com-1.jpg?width=600&amp;height=601&amp;name=craft-pinterest-com-1.jpg\" alt=\"kerajinan tangan - Hasil scrapbooking foto\" width=\"600\" height=\"601\" srcset=\"https://www.ruangguru.com/hs-fs/hubfs/Imported_Blog_Media/craft-pinterest-com-1.jpg?width=300&amp;height=301&amp;name=craft-pinterest-com-1.jpg 300w, https://www.ruangguru.com/hs-fs/hubfs/Imported_Blog_Media/craft-pinterest-com-1.jpg?width=600&amp;height=601&amp;name=craft-pinterest-com-1.jpg 600w, https://www.ruangguru.com/hs-fs/hubfs/Imported_Blog_Media/craft-pinterest-com-1.jpg?width=900&amp;height=902&amp;name=craft-pinterest-com-1.jpg 900w, https://www.ruangguru.com/hs-fs/hubfs/Imported_Blog_Media/craft-pinterest-com-1.jpg?width=1200&amp;height=1202&amp;name=craft-pinterest-com-1.jpg 1200w, https://www.ruangguru.com/hs-fs/hubfs/Imported_Blog_Media/craft-pinterest-com-1.jpg?width=1500&amp;height=1503&amp;name=craft-pinterest-com-1.jpg 1500w, https://www.ruangguru.com/hs-fs/hubfs/Imported_Blog_Media/craft-pinterest-com-1.jpg?width=1800&amp;height=1803&amp;name=craft-pinterest-com-1.jpg 1800w\" sizes=\"(max-width: 600px) 100vw, 600px\" style=\"max-width: 100%; border-width: 0px; border-color: initial; border-image: initial; height: auto; display: block; margin-left: auto; margin-right: auto; filter: url(&quot;#dark-reader-reverse-filter&quot;) !important;\">Hasil scrapbooking foto. (Sumber: pinterest.com)</div><p style=\"margin-right: 0px; margin-left: 0px; font-family: -apple-system, system-ui, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;</p><p style=\"margin-right: 0px; margin-left: 0px; font-family: -apple-system, system-ui, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; text-align: justify;\">Secara umum,&nbsp;<em>scrapbooking</em>&nbsp;merupakan metode menyajikan memorabilia dalam bentuk buku, kotak, ataupun kartu. Pada objek foto,&nbsp;<em>scrapbooking</em>&nbsp;biasanya digunakan untuk menambahkan catatan penting yang berhubungan dengan cerita foto. Cara ini bisa juga untuk mempercantik buku agenda kamu di semester depan lho.<br></p><p style=\"margin-right: 0px; margin-left: 0px; font-family: -apple-system, system-ui, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;</p><div class=\"caption\" style=\"font-family: -apple-system, system-ui, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; text-align: center;\"><img class=\"wp-image-9525\" src=\"https://www.ruangguru.com/hs-fs/hubfs/Imported_Blog_Media/craft-wikimedia-org-1.jpg?width=600&amp;height=450&amp;name=craft-wikimedia-org-1.jpg\" alt=\"kerajinan tangan - Berbagai alat untuk melancarkan scrapbooking kamu\" width=\"600\" height=\"450\" srcset=\"https://www.ruangguru.com/hs-fs/hubfs/Imported_Blog_Media/craft-wikimedia-org-1.jpg?width=300&amp;height=225&amp;name=craft-wikimedia-org-1.jpg 300w, https://www.ruangguru.com/hs-fs/hubfs/Imported_Blog_Media/craft-wikimedia-org-1.jpg?width=600&amp;height=450&amp;name=craft-wikimedia-org-1.jpg 600w, https://www.ruangguru.com/hs-fs/hubfs/Imported_Blog_Media/craft-wikimedia-org-1.jpg?width=900&amp;height=675&amp;name=craft-wikimedia-org-1.jpg 900w, https://www.ruangguru.com/hs-fs/hubfs/Imported_Blog_Media/craft-wikimedia-org-1.jpg?width=1200&amp;height=900&amp;name=craft-wikimedia-org-1.jpg 1200w, https://www.ruangguru.com/hs-fs/hubfs/Imported_Blog_Media/craft-wikimedia-org-1.jpg?width=1500&amp;height=1125&amp;name=craft-wikimedia-org-1.jpg 1500w, https://www.ruangguru.com/hs-fs/hubfs/Imported_Blog_Media/craft-wikimedia-org-1.jpg?width=1800&amp;height=1350&amp;name=craft-wikimedia-org-1.jpg 1800w\" sizes=\"(max-width: 600px) 100vw, 600px\" style=\"max-width: 100%; border-width: 0px; border-color: initial; border-image: initial; height: auto; display: block; margin-left: auto; margin-right: auto; filter: url(&quot;#dark-reader-reverse-filter&quot;) !important;\">Berbagai alat untuk melancarkan scrapbooking kamu. (Sumber: wikimedia.org)</div></div>                                                    ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pendaftaran`
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
-- Struktur dari tabel `tb_profile_guru`
--

CREATE TABLE `tb_profile_guru` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `profile` text NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `experience` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_profile_guru`
--

INSERT INTO `tb_profile_guru` (`id`, `name`, `profile`, `foto`, `experience`) VALUES
(1, 'Herman PG', '<h4>Ketua, Instruktur</h4>\r\n                      <p class=\"card-text\">Lahir di Banjar 24 Juli. <span> Alamat Rumah Perum Bumi Asri, Jl. Mega Asri IX No. C 35 Indihiang, Tasikmalaya</span></p>\r\n						 <p>Herman PG adalah Pensiunan Guru SMKN 3 Tasikmalaya. Senang melukis sejak kecil. Masuk Perguruan tinggi Universitas Perguruan tinggi Indonesia. Kemudian mengamalkan ilmu nya di SMKN 3 Tasikmalaya. \r\n							</p><p>Setelah memasuki Purnabakti, Herman PG bersama Afrudin mendirikan Sanggar Brahmastra Art untuk membimbing anak-anak yang memiliki potensi dibidang seni lukis. </p>', 'images/herman.jpg', '<table class=\"table\">\r\n                            \r\n							\r\n                            \r\n                            <thead>\r\n                              <tr>\r\n                                <th scope=\"col\">NO.</th>\r\n                                <th scope=\"col\">Tahun</th>\r\n                                <th scope=\"col\">Nama Kegiatan</th>\r\n                                <th scope=\"col\">Tempat</th>\r\n                              </tr>\r\n                            </thead>\r\n                            <tbody>\r\n                              <tr>\r\n                                <th scope=\"row\">1</th>\r\n                                <td>2008-2011</td>\r\n                                <td>Pameran Bersama Manajemen Pinggiran SILPA dan KSRT</td>\r\n                                <td>Tasikmalaya, Bandung, Yogyakarta, Bali, IKIP Bandung</td>\r\n                              </tr>\r\n                              <tr>\r\n                                <th scope=\"row\">2</th>\r\n                                <td>2011</td>\r\n                                <td>Pameran Karikatur Bersama Manajemen Pinggiran</td>\r\n                                <td>Tasikmalaya</td>\r\n                              </tr>\r\n                              <tr>\r\n                                <th scope=\"row\">3</th>\r\n                                <td>2012</td>\r\n                                <td>Pameran bersama SILPA, Humaniora di Gallery Terasseni, Hardiknas, Merespon Ruang bersama MP</td>\r\n								<td>Ubud-Bali, UPI Bandung, Gedung Kesenian Tasikmalaya</td>\r\n                              </tr>\r\n							  <tr>\r\n                                <th scope=\"row\">4</th>\r\n                                <td>2017</td>\r\n                                <td>Tumbuh Kembang Anak du RSIA Hj. Karmini</td>\r\n								<td>Tasikmalaya</td>\r\n                              </tr>\r\n							  <tr>\r\n                                <th scope=\"row\">5</th>\r\n                                <td>2018</td>\r\n                                <td>Pameran EXPOSE Edu Art</td>\r\n								<td>Taman Budaya, Yogyakarta</td>\r\n                              </tr>\r\n							  <tr>\r\n                                <th scope=\"row\">6</th>\r\n                                <td>2019</td>\r\n                                <td>Ngaguar Rasa bersama MP, Pameran Wisata PCG (Papandayan Camping Ground, Nuansa Estetika</td>\r\n								<td>Tasikmalaya, Garut, Taman Budaya Yogyakarta</td>\r\n                              </tr>\r\n                            </tbody>\r\n                          </table>'),
(2, 'Afrudin Achmad', '<h4>Wakil Ketua, Instruktur </h4>\r\n						  <p class=\"card-text\">Lahir di Jakarta, 24 Februari 1966</p>\r\n						  <p><span> Alamat : Jl. Sutisna Senjaya RT.01 RW.04 Cicurug Bata Kota Tasikmalaya 46114 <br> <e-mail>E-mail :afrudin.tiger@gmail.com</e-mail></span></p>\r\n						<p>Belajar melukis secara otodidak dan sering kali mengikuti pameran di berbagai daerah sejak 1984 hingga sekarang di berbagai tempat diantaranya Untuk Wilayah Indonesia yaitu Tasikmalaya, Garut, Bandung, Jakarta, Yogyakarta, Mojokerto, Surabaya, dan Bali.\r\n						Untuk Skala Internasional yaitu 6 kali Pameran tunggal di Jerman, Pameran bersama di Guangxi, China</p>\r\n					  <p>Pernah menjadi instruktur (guru gambar) PT. Faber Castell Internasional dari tahun 2010-2016. Dan mengajar di SLB, Seni Rupa (Seni lukis) sebagai media terapi untuk anak berkebutuhan khusus.</p>\r\n					  <p>Sebagai Ketua Pelukis di Tasikmalaya dengan kelompoknya yang bernama Manajemen Pinggiran Tasikmalaya Painting Community sejak 2010 hingga sekarang.</p>\r\n				', 'images/ayah2.jpg', ' <table class=\"table\">\r\n                            \r\n							\r\n                            \r\n                            <thead>\r\n                              <tr>\r\n                                <th scope=\"col\">NO.</th>\r\n                                <th scope=\"col\">Tahun</th>\r\n                                <th scope=\"col\">Nama Kegiatan</th>\r\n                                <th scope=\"col\">Tempat</th>\r\n                              </tr>\r\n                            </thead>\r\n                            <tbody>\r\n                              <tr>\r\n                                <th scope=\"row\">1</th>\r\n                                <td>2016</td>\r\n                                <td>Together Exhibiton with Community \"Aenne Biermann Gera-Germany\"</td>\r\n                                <td>Germany</td>\r\n                              </tr>\r\n                              <tr>\r\n                                <th scope=\"row\">2</th>\r\n                                <td>2016</td>\r\n                                <td>Together at Foyer der Stadtverwaltung</td>\r\n                                <td>Gera, Germany</td>\r\n                              </tr>\r\n                              <tr>\r\n                                <th scope=\"row\">3</th>\r\n                                <td>2016</td>\r\n								<td>Solo Exhibiton at Tierarztklinik Lohse (Klinik Dokter Lohse) <br>Solo Exhibiton at Thuringin Parliament,<br> Solo Exhibiton at University of Jena, Germany</td>\r\n                                <td>Germany</td>\r\n                              </tr>\r\n							  <tr>\r\n                                <th scope=\"row\">4</th>\r\n                                <td>2016</td>\r\n								<td>\"Indonesian Farbwelten\" with Association Gera</td>\r\n                                <td>Burgergalerie, Germany</td>\r\n                              </tr>\r\n							  <tr>\r\n                                <th scope=\"row\">5</th>\r\n                                <td>2017</td>\r\n								<td>Solo Exhibiton \"Java in Bildern\" at Vet Clinic Dr. Lohse</td>\r\n                                <td>Germany</td>\r\n                              </tr>\r\n							  <tr>\r\n                                <th scope=\"row\">6</th>\r\n                                <td>2018</td>\r\n								<td>Festival Budaya Indonesia at KJRI</td>\r\n                                <td>Guangxi, China</td>\r\n                              </tr>\r\n							  <tr>\r\n                                <th scope=\"row\">7</th>\r\n                                <td>2018</td>\r\n								<td>Exhibiton art in Gera Community at Geraer Volkshochshule \"Aenne Biermann\"</td>\r\n                                <td>Gera,Germany</td>\r\n                              </tr>\r\n							  <tr>\r\n                                <th scope=\"row\">8</th>\r\n                                <td>2018</td>\r\n								<td>Together Exhibiton with Mr. Hans Jorg Waskowski</td>\r\n                                <td>St. Gangloff, Germany</td>\r\n                              </tr>\r\n                            </tbody>\r\n                          </table>'),
(5, 'Yaman Sutiyaman', '<h4 style=\"font-family: &quot;Roboto Slab&quot;, serif; line-height: 1.1; color: rgb(0, 0, 0); margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-size: 18px;\">Instruktur</h4><p class=\"card-text\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(130, 130, 130); font-family: &quot;Source Sans Pro&quot;, Arial, sans-serif; font-size: 15px;\">Bekerja sebagai Karyawan di Mangkubumi Waterpark. Dan bergabung dengan Manajemen Pinggiran sejak 2014. Dan beberapa kali mengikuti pameran bersama di Tasikmalaya, Bandung, dan Jerman.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(130, 130, 130); font-family: &quot;Source Sans Pro&quot;, Arial, sans-serif; font-size: 15px;\">aktif mengikuti pameran sejak bergabung dengan Manajemen Pinggiran hingga sekarang serta menjadi instruktur di Brahmastra Art.</p>', 'images/yaman.jpg', '    <h3 style=\"font-family: &quot;Roboto Slab&quot;, serif; line-height: 1.1; color: rgb(0, 0, 0); margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-size: 24px;\">Pengalaman Pameran</h3><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; color: rgb(130, 130, 130); font-family: &quot;Source Sans Pro&quot;, Arial, sans-serif; font-size: 15px;\">Berikut beberapa Pameran yang pernah diikuti oleh Yaman :</p><hr style=\"margin-top: 20px; margin-bottom: 20px; border-top-color: rgb(238, 238, 238); color: rgb(130, 130, 130); font-family: &quot;Source Sans Pro&quot;, Arial, sans-serif; font-size: 15px;\"><table class=\"table\" style=\"border-spacing: 0px; background-color: rgb(255, 255, 255); width: 555px; max-width: 100%; margin-bottom: 20px; color: rgb(130, 130, 130); font-family: &quot;Source Sans Pro&quot;, Arial, sans-serif; font-size: 15px;\"><thead><tr><th scope=\"col\" style=\"padding: 8px; text-align: left; line-height: 1.42857; border-top: 0px; border-bottom-color: rgb(221, 221, 221);\">NO.</th><th scope=\"col\" style=\"padding: 8px; text-align: left; line-height: 1.42857; border-top: 0px; border-bottom-color: rgb(221, 221, 221);\">Tahun</th><th scope=\"col\" style=\"padding: 8px; text-align: left; line-height: 1.42857; border-top: 0px; border-bottom-color: rgb(221, 221, 221);\">Nama Kegiatan</th><th scope=\"col\" style=\"padding: 8px; text-align: left; line-height: 1.42857; border-top: 0px; border-bottom-color: rgb(221, 221, 221);\">Tempat</th></tr></thead><tbody><tr><th scope=\"row\" style=\"padding: 8px; text-align: left; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">1</th><td colspan=\"1\" style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\"></td><td style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">Pameran Lukisan bersama Hans Joerg Waskowski di Joglo Mangkubumi Lingkungan Hidup</td><td style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">Green Area Mangkubumi</td></tr><tr><th scope=\"row\" style=\"padding: 8px; text-align: left; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">2</th><td colspan=\"1\" style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\"></td><td style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">Silahturahmi Kota di Hotel Mangkubumi</td><td style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">Mangkubumi, Tasikmalaya</td></tr><tr><th scope=\"row\" style=\"padding: 8px; text-align: left; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">3</th><td colspan=\"1\" style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\"></td><td style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">Pameran Kreasi Seni dari Limbah</td><td style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">Singaparna,<br>Garut</td></tr><tr><th scope=\"row\" style=\"padding: 8px; text-align: left; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">4</th><td colspan=\"1\" style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\"></td><td style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">Potret Kehidupan bersama MP Tasikmalaya</td><td style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">Tasikmalaya</td></tr><tr><th scope=\"row\" style=\"padding: 8px; text-align: left; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">5</th><td style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">2016</td><td style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">\"Indonesian Farbwelten\" with Association Gera</td><td style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">Burgergalerie, Germany</td></tr><tr><th scope=\"row\" style=\"padding: 8px; text-align: left; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">6</th><td colspan=\"1\" style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\"></td><td style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">Eksplorasi Media 1 di Resto Hotel Mangkubumi</td><td style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">Tasikmalaya</td></tr><tr><th scope=\"row\" style=\"padding: 8px; text-align: left; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">7</th><td style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">2017</td><td style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">Potret Kehidupan bersama MP Tasikmalaya</td><td style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">Tasikmalaya</td></tr><tr><th scope=\"row\" style=\"padding: 8px; text-align: left; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">8</th><td style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">2017</td><td style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">Tumbuh Kembang Anak du RSIA Hj. Karmini</td><td style=\"padding: 8px; line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">Tasikmalaya</td></tr></tbody></table>'),
(7, 'Firah', '<p>Profile firah</p>', 'images/toty.jpeg', '    <table class=\"table\">\r\n    <thead>\r\n        <tr>\r\n            <th scope=\"col\">NO.</th>\r\n            <th scope=\"col\">Tahun</th>\r\n            <th scope=\"col\">Nama Kegiatan</th>\r\n            <th scope=\"col\">Tempat</th>\r\n        </tr>\r\n    </thead>\r\n    <tbody>\r\n        <tr>\r\n            <th scope=\"row\">1</th>\r\n            <td>2016</td>\r\n            <td>contoh</td>\r\n            <td>contoh</td>\r\n        </tr>\r\n    </tbody>\r\n    </table>');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admins`
--
ALTER TABLE `tb_admins`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_karya_guru`
--
ALTER TABLE `tb_karya_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_profile_guru`
--
ALTER TABLE `tb_profile_guru`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admins`
--
ALTER TABLE `tb_admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_karya_guru`
--
ALTER TABLE `tb_karya_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_profile_guru`
--
ALTER TABLE `tb_profile_guru`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
