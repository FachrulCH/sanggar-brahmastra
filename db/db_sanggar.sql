-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 25 Mar 2021 pada 01.01
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
  `id_karya` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `judul_karya` varchar(250) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kegiatan`
--

CREATE TABLE `tb_kegiatan` (
  `id` int(5) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp(),
  `nama_kegiatan` varchar(50) NOT NULL,
  `gambar` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kegiatan`
--

INSERT INTO `tb_kegiatan` (`id`, `tanggal`, `nama_kegiatan`, `gambar`, `keterangan`) VALUES
(1, '2020-01-11 00:00:00', 'kegiatan on the spot', 'Nulla quis lorem ut libero malesuada feugiat. Sed porttitor lectus nibh.', 'Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. '),
(2, '2021-03-18 16:41:38', 'kegiatan on the spot', 'Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. ', 'Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Proin eget tortor risus. '),
(3, '2021-03-19 16:41:38', 'pameran di yogyakart', 'Sed porttitor lectus nibh. Vivamus suscipit tortor eget felis porttitor volutpat', 'Donec sollicitudin molestie malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Curabitur aliquet quam id dui posuere blandit.');

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
  `foto` varchar(100) NOT NULL,
  `experience` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_profile_guru`
--

INSERT INTO `tb_profile_guru` (`id`, `name`, `profile`, `foto`, `experience`) VALUES
(1, 'Herman PG', '<h4>Ketua, Instruktur</h4>\r\n                      <p class=\"card-text\">Lahir di Banjar 24 Juli. <span> Alamat Rumah Perum Bumi Asri, Jl. Mega Asri IX No. C 35 Indihiang, Tasikmalaya</span></p>\r\n						 <p>Herman PG adalah Pensiunan Guru SMKN 3 Tasikmalaya. Senang melukis sejak kecil. Masuk Perguruan tinggi Universitas Perguruan tinggi Indonesia. Kemudian mengamalkan ilmu nya di SMKN 3 Tasikmalaya. \r\n							</p><p>Setelah memasuki Purnabakti, Herman PG bersama Afrudin mendirikan Sanggar Brahmastra Art untuk membimbing anak-anak yang memiliki potensi dibidang seni lukis. </p>', 'images/herman.jpg', '<table class=\"table\">\r\n                            \r\n							\r\n                            \r\n                            <thead>\r\n                              <tr>\r\n                                <th scope=\"col\">NO.</th>\r\n                                <th scope=\"col\">Tahun</th>\r\n                                <th scope=\"col\">Nama Kegiatan</th>\r\n                                <th scope=\"col\">Tempat</th>\r\n                              </tr>\r\n                            </thead>\r\n                            <tbody>\r\n                              <tr>\r\n                                <th scope=\"row\">1</th>\r\n                                <td>2008-2011</td>\r\n                                <td>Pameran Bersama Manajemen Pinggiran SILPA dan KSRT</td>\r\n                                <td>Tasikmalaya, Bandung, Yogyakarta, Bali, IKIP Bandung</td>\r\n                              </tr>\r\n                              <tr>\r\n                                <th scope=\"row\">2</th>\r\n                                <td>2011</td>\r\n                                <td>Pameran Karikatur Bersama Manajemen Pinggiran</td>\r\n                                <td>Tasikmalaya</td>\r\n                              </tr>\r\n                              <tr>\r\n                                <th scope=\"row\">3</th>\r\n                                <td>2012</td>\r\n                                <td>Pameran bersama SILPA, Humaniora di Gallery Terasseni, Hardiknas, Merespon Ruang bersama MP</td>\r\n								<td>Ubud-Bali, UPI Bandung, Gedung Kesenian Tasikmalaya</td>\r\n                              </tr>\r\n							  <tr>\r\n                                <th scope=\"row\">4</th>\r\n                                <td>2017</td>\r\n                                <td>Tumbuh Kembang Anak du RSIA Hj. Karmini</td>\r\n								<td>Tasikmalaya</td>\r\n                              </tr>\r\n							  <tr>\r\n                                <th scope=\"row\">5</th>\r\n                                <td>2018</td>\r\n                                <td>Pameran EXPOSE Edu Art</td>\r\n								<td>Taman Budaya, Yogyakarta</td>\r\n                              </tr>\r\n							  <tr>\r\n                                <th scope=\"row\">6</th>\r\n                                <td>2019</td>\r\n                                <td>Ngaguar Rasa bersama MP, Pameran Wisata PCG (Papandayan Camping Ground, Nuansa Estetika</td>\r\n								<td>Tasikmalaya, Garut, Taman Budaya Yogyakarta</td>\r\n                              </tr>\r\n                            </tbody>\r\n                          </table>'),
(2, 'Afrudin Achmad', '<h4>Wakil Ketua, Instruktur </h4>\r\n						  <p class=\"card-text\">Lahir di Jakarta, 24 Februari 1966</p>\r\n						  <p><span> Alamat : Jl. Sutisna Senjaya RT.01 RW.04 Cicurug Bata Kota Tasikmalaya 46114 <br> <e-mail>E-mail :afrudin.tiger@gmail.com</e-mail></span></p>\r\n						<p>Belajar melukis secara otodidak dan sering kali mengikuti pameran di berbagai daerah sejak 1984 hingga sekarang di berbagai tempat diantaranya Untuk Wilayah Indonesia yaitu Tasikmalaya, Garut, Bandung, Jakarta, Yogyakarta, Mojokerto, Surabaya, dan Bali.\r\n						Untuk Skala Internasional yaitu 6 kali Pameran tunggal di Jerman, Pameran bersama di Guangxi, China</p>\r\n					  <p>Pernah menjadi instruktur (guru gambar) PT. Faber Castell Internasional dari tahun 2010-2016. Dan mengajar di SLB, Seni Rupa (Seni lukis) sebagai media terapi untuk anak berkebutuhan khusus.</p>\r\n					  <p>Sebagai Ketua Pelukis di Tasikmalaya dengan kelompoknya yang bernama Manajemen Pinggiran Tasikmalaya Painting Community sejak 2010 hingga sekarang.</p>\r\n				', 'images/ayah2.jpg', '<table class=\"table\">\r\n                            \r\n							\r\n                            \r\n                            <thead>\r\n                              <tr>\r\n                                <th scope=\"col\">NO.</th>\r\n                                <th scope=\"col\">Tahun</th>\r\n                                <th scope=\"col\">Nama Kegiatan</th>\r\n                                <th scope=\"col\">Tempat</th>\r\n                              </tr>\r\n                            </thead>\r\n                            <tbody>\r\n                              <tr>\r\n                                <th scope=\"row\">1</th>\r\n                                <td>2016</td>\r\n                                <td>Together Exhibiton with Community \"Aenne Biermann Gera-Germany\"</td>\r\n                                <td>Germany</td>\r\n                              </tr>\r\n                              <tr>\r\n                                <th scope=\"row\">2</th>\r\n                                <td>2016</td>\r\n                                <td>Together at Foyer der Stadtverwaltung</td>\r\n                                <td>Gera, Germany</td>\r\n                              </tr>\r\n                              <tr>\r\n                                <th scope=\"row\">3</th>\r\n                                <td>2016</td>\r\n								<td>Solo Exhibiton at Tierarztklinik Lohse (Klinik Dokter Lohse) <br>Solo Exhibiton at Thuringin Parliament,<br> Solo Exhibiton at University of Jena, Germany</td>\r\n                                <td>Germany</td>\r\n                              </tr>\r\n							  <tr>\r\n                                <th scope=\"row\">4</th>\r\n                                <td>2016</td>\r\n								<td>\"Indonesian Farbwelten\" with Association Gera</td>\r\n                                <td>Burgergalerie, Germany</td>\r\n                              </tr>\r\n							  <tr>\r\n                                <th scope=\"row\">5</th>\r\n                                <td>2017</td>\r\n								<td>Solo Exhibiton \"Java in Bildern\" at Vet Clinic Dr. Lohse</td>\r\n                                <td>Germany</td>\r\n                              </tr>\r\n							  <tr>\r\n                                <th scope=\"row\">6</th>\r\n                                <td>2018</td>\r\n								<td>Festival Budaya Indonesia at KJRI</td>\r\n                                <td>Guangxi, China</td>\r\n                              </tr>\r\n							  <tr>\r\n                                <th scope=\"row\">7</th>\r\n                                <td>2018</td>\r\n								<td>Exhibiton art in Gera Community at Geraer Volkshochshule \"Aenne Biermann\"</td>\r\n                                <td>Gera,Germany</td>\r\n                              </tr>\r\n							  <tr>\r\n                                <th scope=\"row\">8</th>\r\n                                <td>2018</td>\r\n								<td>Together Exhibiton with Mr. Hans Jorg Waskowski</td>\r\n                                <td>St. Gangloff, Germany</td>\r\n                              </tr>\r\n                            </tbody>\r\n                          </table>');

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
  ADD PRIMARY KEY (`id_karya`);

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
  MODIFY `id_karya` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_profile_guru`
--
ALTER TABLE `tb_profile_guru`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
