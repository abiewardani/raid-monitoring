-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 15, 2015 at 06:28 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tugas2`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `id_city` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_city`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4504 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id_city`, `name`) VALUES
(4501, 'Depok'),
(4502, 'Bandung'),
(4503, 'Bogor');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE IF NOT EXISTS `food` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `description` text,
  `id_location` int(11) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45132118 ;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `title`, `description`, `id_location`, `image`, `created`, `updated_at`) VALUES
(45132101, 'Mbah Jingkrak\r\n', 'Mbah Jingkrak adalah sebuah kuliner spesialis masakan Jawa di mana aneka masakannya adalah masakan yang sangat tradisional, sehingga dapat mengobati kerinduan kepada kampung halaman. Bumbu dan resep yang kami gunakan juga merupakan warisan yang sudah turun temurun. Selamat ber-jingkrak menikmati hidangan kami yang unik dan spesial.', 45101, '6b644de30db4e1574e2eea90a2de0b3e.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45132102, 'Bakso Rusuk Samson', 'Bakso Rusuk Samson adalah warung bakso yang menyediakan menu bakso dengan inovasi dengan menambahkan rusuk sapi, sehingga terciptalah bakso rusuk. Bakso Rusuk Samson terletak diseberang jalan dengan pintu gerbang Akademi Angkatan Udara Yogyakarta.\r\n\r\n\r\nAddress :\r\nJl. Margonda Raya , Margonda - Depok ', 45101, '2c41eb1d88cb579571f4786a813b46be.jpg', NULL, '0000-00-00 00:00:00'),
(45132103, 'Bebek Ireng Suroboyo Cak Baz', 'Kemahsyuran Bebek Goreng Surabaya yang terkenal kelezatannya tentu tidak asing bagi kita. Sampai banyak orang bilang "Belum ke Surabaya kalau belum makan bebek goreng". Oleh sebab itu orang yang ke Surabaya selalu berburu makanan ini. Kini tak perlu ke Surabaya untuk menikmati makanan lezat ini karena telah hadir di Jakarta. Bebek Goreng Lezat dengan harga terjangkau diolah dengan bumbu pilihan dan disajikan dengan sambal pedas yang menggugah selera.\r\n\r\n\r\nAddress :\r\nJl. Margonda Raya No. 432 , Margonda - Depok ', 45101, '7544b3965522c5c4b059643775f48b86.jpg', NULL, '0000-00-00 00:00:00'),
(45132104, 'Yoshinoya', 'Yoshinoya merupakan tempat makan yang memiliki konsep makanan cepat saji dengan kualitas dan rasa yang bermutu tinggi dan penawaran harga yang sangat terjangkau. Selain menyajikan makanan porsi orang dewasa di Yoshinoya juga', 45101, '575ddf1bf9c67d7152d6ba176322ee77.jpg', NULL, '0000-00-00 00:00:00'),
(45132105, 'Nasi Timbel Saung Kuring', 'Ikan patin dari warung ini memang dahsyat. Ikan patin hidup, ditangkap, disiangi, dibumbui dan digoreng. Tentu saja rasanya sangat gurih. Apalagi setelah disiram bumbu cabai rawit hijau yang pedas menggigit. Disuap hangat dengan nasi timbel.\r\nAddress :\r\nJlan Punak No.7\r\nKompleks AL Pangkalan Jati , Cinere - Depok', 45101, '158c6bfd4e314270eb34f0ee1c8c93d7.jpg', NULL, '0000-00-00 00:00:00'),
(45132106, 'Bandoengsche Melk Centrale (BMC)', 'Dalam sejarahnya, selama ini BMC (Bandoengsche Melk Centrale) dikenal sebagai pabrik susu termodern semasa penjajahan Kolonial Belanda. Namun sekarang, BMC lebih dikenal sebagai restoran yang disebabkan oleh ruangan untuk menaruh alat-alat modern dalam menunjang pengelolaan susu segar sudah tidak memungkinkan. Pabrik BMC yang kini menjadi sebuah restoran BMC terletak di Jl. Aceh No. 30 dan merupakan tempat yang cukup nyaman untuk bersantai.', 45102, 'b3f041d7be54ffa5d1c806011a4fbab2.jpg', NULL, '0000-00-00 00:00:00'),
(45132107, 'Batagor Riri', 'Selain Batagor Kingsley, ada satu lagi rumah makan dengan menu batagor yang cukup dikenal dan juga sering disinggahi, namanya “Warung Makan Batagor Riri” atau sering disebut dengan Batagor Riri. Warung makan yang terletak di Jl. Burangrang No. 41 ini, cukup luas dan terpampang deretan foto selebritis dan artis Ibu kota. Biasanya rumah makan ini mulai melayani pelanggannya setiap hari mulai pukul setengah 9 pagi hingga pukul 8 malam.', 45102, '9abb957a84dfbde7c94da3a37bd2b037.jpg', NULL, '0000-00-00 00:00:00'),
(45132108, 'Es Duren Tubagus Ismail', 'Banyak orang yang tergila-gila dengan buah durian, meski harganya relatif mahal penggemar buah yang satu ini tidak pernah berkurang. Selain untuk dimakan langsung, durian juga sering dijadikan untuk tambahan es campur maupun es durian itu sendiri. Seperti yang telihat di Jl. Tubagus Ismail, di depan warung ini terpampang spanduk yang bertuliskan “Es Durian, Es Campur Durian, Es Kelapa Alpuket, Es Buah”. Salah satu warung yang cukup dikenal dengan es duriannya, baik masyarakat Bandung maupun luar kota.', 45102, '99a1e715dff6ce9b00b2ed1bb7551bcd.jpg', NULL, '0000-00-00 00:00:00'),
(45132109, 'mie kocok skm', 'Mi kocok sudah menjadi salah satu icon kuliner di kota kembang, tak sulit menemukan mi kocok di kota ini. Mulai dari gerobak dorong, kaki lima sampai di rumah-rumah makan. Salah satu penjual mi kocok yang cukup kondang di kota kembang ini yaitu “Mi Kocok SKM”. Kedai ini terletak di Jl. Sunda No. 38, tak jauh dari Jl. Veteran, lokasi Batagor Kingsley dan Es Campur 29 (Es Bungsu). Warung ini mulai melayani pelanggannya setiap hari dari jam 9 pagi hingga jam 9 malam.', 45102, 'e9aedeaeaf4e82ffb9a563cda8f27589.jpg', NULL, '0000-00-00 00:00:00'),
(45132110, 'Nasi Tulang Jambal Bu Windi', 'Tulang ikan bisa menjadi makanan enak dan buat ketagihan? Tentu saja bisa. Jika sedang berlibur di daerah Bandung kita bisa berkunjung ke sebuah warungmakan yang berada di Jl. Ternate 18 Bandung, belakang FO 18th Park danberseberangan dengan LB LIA Riau. Rumah makan ini memiliki menu andalan Nasi Tulang Jambal.', 45102, '253a1cbb9363aacadfc15d0900d2f14b.jpg', NULL, '0000-00-00 00:00:00'),
(45132111, 'Ayam geprek istimewa', 'Ayam goreng, hampir semua orang pasti pernah menikmatinya, baik buatan sendiri atau membeli dari warung, rumah makan, resto atau sejenisnya. Atau mungkin menu ayam goreng merupakan makanan favorite Anda? Kalau memang ayam goreng sudah menjadi salah satu makanan favorite, sepertinya Anda harus meluangkan waktu untuk singgah ke Rumah Makan Ayam Geprek Istimewa yang ada di Kota Bogor. Sebenarnya rumah makan ini memilki 5 outlet yang bisa kita singgahi, 4 diantaranya ada di Bogor dan yang satu lagi di Jogja. Berikut alamat outletnya : Jl. Bangbarung Raya 27 & 54, Taman Yasmin Sektor 6, No. 100, Jl. Pemda, Karadenan, Cibinong dan untuk yang di Jogja ada di Jl. Palagan Tentara Pelajar Km.9, Jogja.', 45103, '5f0c089dfcfd56d9668f90cd0edb455c.jpg', NULL, '0000-00-00 00:00:00'),
(45132112, 'baso seseupan', 'Berlokasi di Jl. Bangbarung No. 3, Bantarjati, Bakso Seuseupan menempati sebuah bangunan yang letaknya lebih rendah dari jalan. Sehingga kita harus menuruni beberapa anak tangga terlebih dahulu untuk masuk ke dalamnya. Meski terlihat sangat sederhana tapi warung ini jarang sekali sepi pengunjung, apalagi kalau akhir pekan dan musim liburan tiba. Kita harus rela mengantri untuk mendapatkan tempat duduk, karena ruangannya memang cukup terbatas. Seperti bakso pada umumnya, disini kita bisa memilih bakso biasa/ halus, bakso urat atau bakso telur. Sedangkan untuk pilihan menunya ada bakso urat special, bakso telur special, bakso kuah, mie bakso, bihun bakso, bakso mie campur, mie ayam serta mie ayam bakso. Sedangkan untuk minuamannya tersedia aneka jus, es campur, es kelapa dan teh.', 45103, '911b3760be7e8c300f3637130882d7dc.jpg', NULL, '0000-00-00 00:00:00'),
(45132113, 'martabak air mancur', 'Menyebut nama martabak, pasti sudah terbayang lapisan kulit renyah yang membungkus adonan telur, daun bawang dan potongan daging yang lezat nan gurih. Kita bisa menjumpai banyak penjual martabak yang mangkal di pinggiran jalan hampir setiap kota di Indonesia. Tapi kalau singgah ke Bogor jangan lupa untuk mencicipi kelezatan Martabak Air Mancur yang konon katanya sudah sangat kondang di kota Bogor. Sebagian besar warga Bogor rasanya tidak ada yang tidak mengenal tempat ini.\r\nBerlokasi di Jl. Sudirman No. 64, Martabak Air Mancur hampir tidak pernah sepi pengunjung hingga membuat kita selalu menunggu dalam waktu yang cukup lama. Tapi hal itu tidak lantas membuat Martabak Air Mancur menjadi sepi pengunjung.', 45103, '1c93471d35c173bc6ec393036e987ab5.jpg', NULL, '0000-00-00 00:00:00'),
(45132114, 'pie-apple', 'Pia Apple Pie, ketika mendengar namanya Saya merasa agak aneh, lucu, unik dan sedikit bingung juga. Ini pia, pie, gabungan dari kedua-duanya atau malah sebaliknya? Dari pada bertanya-tanya dan bingung sendiri nggak jelas, langsung saja buka mbah Google. Ternyata pia apple pie ini merupakan salah satu oleh-oleh khas dari Kota Bogor yang berlokasi di Jl. Pangrango No. 10, Bogor.', 45103, '17c82f6b917e9b35fda48dfb108ac569.jpg', NULL, '2015-01-11 04:10:59'),
(45132115, 'sop buah pak ewok', 'Bogor memang terkenal dengan sebutan sebagai kota hujan, tapi bukan berarti di kota ini tidak ada jenis makanan yang dingin menyegarkan. Mendapat julukan sebagai kota hujan sudah berarti kalau suhu udaranya relative cukup dingin, minuman yang hangat memang terasa nikmat tapi yang dingin pun juga banyak peminatnya. Kalau tidak percaya, silahkan saja bertandang ke Rumah makan yang berlokasi di Jl. Bukit Tunggul No. 5, kawasan Taman Kencana. Dengan menempati sebuah bangunan semi permanen yang terbuat dari bambu, Rumah Makan Sop Buah Pak Ewok (SBPE) selalu ramai pengunjung. Apalagi pada saat siang hari atau sore hari menjelang berbuka puasa pada bulan Ramadhan. Untuk mencari lokasinya tentu saja cukup mudah, karena Taman Kencana yang berada di Pusat Kota Bogor juga merupakan salah satu spot tujuan wisata kuliner kota Bogor.', 45103, 'abe947a8c801c1668bfe969c4968189b.jpg', NULL, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(150) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `role` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `role`) VALUES
(1, 'admin', 'caca60fed150e9b827e82e417726d3a0', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
