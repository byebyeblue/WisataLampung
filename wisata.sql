-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2022 at 03:35 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `no_identitas` int(11) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `tgl_kunjungan` date NOT NULL,
  `pengunjung_dws` int(11) NOT NULL,
  `pengunjung_ank` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `id_tempat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `nama_lengkap`, `no_identitas`, `no_hp`, `tgl_kunjungan`, `pengunjung_dws`, `pengunjung_ank`, `harga`, `total_bayar`, `id_tempat`) VALUES
(10, 'abduul', 1234567, 808080823, '2022-06-17', 2, 1, 20000, 50000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tempatwisata`
--

CREATE TABLE `tempatwisata` (
  `id_tempat` int(11) NOT NULL,
  `nama_tempat` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tempatwisata`
--

INSERT INTO `tempatwisata` (`id_tempat`, `nama_tempat`, `kota`, `harga`, `foto`, `video`, `deskripsi`) VALUES
(1, 'Pulau Pahawang', 'Pesawaran, Lampung', 30000, 'https://blog.tiket.com/wp-content/uploads/2.-Daya-Tarik-Pulau-Pahawang_Pulau-Pahawang-Besar-_-Kecil.jpg', 'https://www.youtube.com/embed/a4t_xpXa0_M', 'Pulau Pahawang terkenal dengan keindahan pantai dan bawah lautnya. Pulai yang terletak lepas Teluk Punduh ini memiliki sejuta pesona yang tidak kalah menarik dengan objek lainnya. Banyak wisatawan yang mengatakan saat berada di Pulau Pahawan, sensasi Maldives dapat dirasakan di sini. Liburan di pantai yang indah, dengan hiasan pepohonan nyiur, dan menginap di cottage yang berada di atas laut bisa kamu rasakan saat berlibur ke Pahawang di Pesawaran.'),
(2, 'Puncak Mas', 'Bandar Lampung, Lampung', 20000, 'https://cdn.nativeindonesia.com/foto/puncak-mas-lampung/Puncak-Mas-Lampung.webp', 'https://www.youtube.com/embed/A0k_nWsI-LE', 'Puncak Mas Lampung menjadi lokasi terbaik untuk melepas penat dari setumpuk pekerjaan yang tidak ada habisnya. Udara, dan pemandangan di lokasi tersebut memberikan nuansa nyaman bagi para pengunjung yang datang.\n\nPuncak Mas Lampung menjadi tempat wisata favorit bagi mereka yang hobi dengan dunia fotografi. Spot yang tersaji sangat keren, berwarna – warni, cocok dengan kebutuhan era kekinian.\n\nAda juga wahana yang akan membuat kunjungan wisata anda ke Puncak Mas Lampung semakin seru, yaitu wahana sepeda gantung, atau disebut juga dengan zipe bike.'),
(3, 'Alam Wawai', 'Bandar Lampung, Lampung', 20000, 'https://i0.wp.com/infolpg.com/wp-content/uploads/2018/08/Alam-Wawai-Bandar-Lampung.jpg', 'https://www.youtube.com/embed/rVIduPqVeic', 'Alam Wawai menawarkan suasana ramah lingkungan dan dapat menjadi destinasi di akhir pekan. Alam Wawai Eco Park ini memiliki area perkemahan yang unik menyerupai pemukiman suku Indian. Tempat ini terdapat ampitheater untuk menonton pertunjukkan musik. Terdapat juga fasilitas tenda yang diberikan bagi pengunjung yang ingin menginap di alam Wawai yang telah disiapkan oleh pengelola destinasi Wisata Alam Wawai.'),
(4, 'Pulau Pisang', 'Krui, Lampung', 50000, 'https://rentalmobilpadang.co.id/wp-content/uploads/2019/04/pulau-pisang-wisata.jpg', 'https://www.youtube.com/embed/iMPqBdBazfE', 'Pulau Pisang terletak di Kabupaten Pesisir Barat Provinsi Lampung punya daya tarik luar biasa. Wisatawan selain bisa menikmati keindahan alam, juga bisa bermain dengan hewan paling cerdas, yaitu lumba-lumba dan indahnya garis pantai.'),
(5, 'Taman Nasional Way Kambas', 'Lampung Timur, Lampung', 7000, 'https://ecs7.tokopedia.net/blog-tokopedia-com/uploads/2019/12/Taman-Nasional-Way-Kambas.jpg', 'https://ecs7.tokopedia.net/blog-tokopedia-com/uploads/2019/12/Taman-Nasional-Way-Kambas.jpg', 'Pusat konservasi besar ini menampung setidaknya 300 ekor gajah dan sampai saat ini terus bertambah. Pengunjung Way Kambas bisa melihat, bahkan berinteraksi langsung dengan gajah.\r\n\r\nSelain gajah, di tempat wisata Lampung berikut ini terdapat hewan-hewan lain seperti harimau dan beruang yang bisa ditemui di tempat wisata Bandar Lampung favorit ini. Untuk yang ingin berfoto, sebaiknya menggunakan Lensa kamera jarak jauh.'),
(6, 'Air Terjun Malu', 'Kabupaten Way Kanan, Lampung', 20000, 'https://ecs7.tokopedia.net/blog-tokopedia-com/uploads/2019/12/Air-Terjun-Putri-Malu.jpg', 'https://youtube.com/embed/XizhtqgHVHs', 'Nama air terjun ini berasal dari bentuk arus airnya yang menyerupai punggung perempuan. Air terjun yang terletak di tengah hutan tropis ini dapat menjadi spot foto yang pas, dengan latar belakang keindahan alam air terjun dan hutan sekitarnya.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_tempat` (`id_tempat`);

--
-- Indexes for table `tempatwisata`
--
ALTER TABLE `tempatwisata`
  ADD PRIMARY KEY (`id_tempat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tempatwisata`
--
ALTER TABLE `tempatwisata`
  MODIFY `id_tempat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_tempat`) REFERENCES `tempatwisata` (`id_tempat`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
