-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2022 at 06:57 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `pw_tubes_213040043`
--

-- --------------------------------------------------------

--
-- Table structure for table `bentuk`
--

CREATE TABLE `bentuk` (
  `id_bentuk` int(11) NOT NULL,
  `bentuk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bentuk`
--

INSERT INTO `bentuk` (`id_bentuk`, `bentuk`) VALUES
(1, 'infus'),
(2, 'tablet'),
(3, 'kapsul'),
(4, 'salep'),
(5, 'obat cair'),
(6, 'Permen'),
(7, 'Suntik'),
(8, 'Gel'),
(9, 'Krim'),
(10, 'Sirop'),
(11, 'Serbuk');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `kode_obat` int(11) NOT NULL,
  `nama_obat` varchar(65) NOT NULL,
  `harga` int(11) NOT NULL,
  `bentuk` varchar(65) NOT NULL,
  `stok` int(11) NOT NULL,
  `manfaat` varchar(65) NOT NULL,
  `konsumen` varchar(65) NOT NULL,
  `gambar` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`kode_obat`, `nama_obat`, `harga`, `bentuk`, `stok`, `manfaat`, `konsumen`, `gambar`) VALUES
(1, 'Albumin', 15000, ' infus', 50, 'Menangani defisiensi albumin', 'Dewasa', 'Albumin.jpeg'),
(2, 'Acarbose', 10000, 'Tablet, kapsul', 50, 'Mengontrol kadar gula', 'Dewasa dan anak anak', 'Acarbose.jpg'),
(3, 'Amfetamin', 13000, 'Tablet, kapsul', 70, 'menangani narkolepsi', 'Dewasa dan anak anak', 'Amfetamin.jpg'),
(4, 'Atenolol', 30000, 'Tablet', 57, 'Mengobati hipertensi', 'Dewasa', 'Atenolol.jpg'),
(5, 'Bacitracin', 20000, 'Salep', 50, 'Mencegah infeksi dikulit', 'Dewasa dan anak anak', 'Bacitracin.jpg'),
(16, 'Baclofen', 35000, 'Tablet', 100, 'Meredakan kejang otot', 'Dewasa dan anak anak', 'Baclofen.jpg'),
(17, 'Captopril', 15000, 'Tablet', 70, 'mencegah komplikasi jantung', 'Dewasa', 'Captopril.jpg'),
(18, 'Diazepam', 13000, 'Tablet,Obat cair', 50, 'Mengatasi insomnia', 'Dewasa dan anak anak', 'Diazepam.jpg'),
(27, 'Betametason', 15000, 'Salep', 30, 'Meredakan peradangan ', 'Dewasa', 'Betametason.jpg'),
(31, 'Ranitidine', 5000, 'Tablet', 20, 'Menurunkan asam lambung', 'Dewasa', 'Ranitidine.jpg'),
(32, 'Ambroxol', 10000, 'Tablet', 50, 'Meredakan batuk berdahak', 'Dewasa dan anak anak', 'Ambroxol.jpeg'),
(33, 'Amylmetacresol', 5000, 'Permen', 30, 'Meredakan sakit tenggorokan', 'Dewasa dan anak anak', 'Amylmetacresol.jpg'),
(35, 'Anakinra', 20000, 'Suntik', 100, 'Meredakan gejala rheumatoid arthritis', 'Dewasa dan anak anak', 'Anakinra.png'),
(36, 'Atropin', 12000, 'Suntik', 30, 'Menangani bradikardia atau keracunan', 'Dewasa dan anak anak', 'Atropin.jpeg'),
(37, 'Benzolac', 15000, 'Gel', 100, 'Mengatasi jerawat', 'Dewasa', 'Benzolac.jpg'),
(38, ' Betametason', 10000, 'Salep', 20, 'Mengobati hiperplasia adrenal', 'Dewasa dan anak anak', 'Betametason.jpg'),
(39, 'Ibupropen', 5000, 'Tablet', 100, 'Meredakan nyeri', 'Dewasa dan anak anak', 'Ibuprofen.png'),
(40, 'Imboost', 5000, 'Tablet', 50, 'Meningkatkan sistem imun tubuh', 'Dewasa dan anak anak', 'imboost.jpg'),
(41, 'Kalpanax', 20000, 'Krim', 70, 'Mengatasi infeksi jamur kulit', 'Dewasa', 'Kalpanax.jpg'),
(42, 'Kiranti', 15000, 'Sirop', 100, 'Meredakan nyeri haid', 'Dewasa', 'Kiranti.jpg'),
(43, 'Laktulosa', 20000, 'Sirop', 50, 'Mengatasi sembelit', 'Dewasa dan anak anak', 'Laktulosa.jpg'),
(44, 'Mylanta', 25000, 'Sirop', 100, 'Meredakan gejala sakit maag', 'Dewasa dan anak anak', 'Mylanta.jpg'),
(45, 'Oralit', 5000, 'Serbuk', 50, 'Mengatasi dehidrasi akibat diare', 'Dewasa dan anak anak', 'Oralit.jpg'),
(46, 'Panadol', 5000, 'Tablet', 100, 'Meredakan demam', 'Dewasa dan anak anak', 'Panadol.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'emilia paradila s', '$2y$10$gFwAGjDHJMwQkQVaQp1byuTA05YBbGuDyuEfTd.m5SnifW2G5RLei'),
(2, 'emiliaparadila', '$2y$10$aNmFacrorIiRp/Lyjf.rOOI8owtqq1kPO5s4P/Zgy2dHN6EJPJPd6'),
(3, 'paradila', '$2y$10$/VN/GQPahaw5g87HBRwfP.BKi3yfD03zFBzO/TIOeP2jOiRAkN0n6'),
(4, 'guee', '$2y$10$KxZIChe4vKVI52hZIeHiou6jY7TmpQDUin3C07DCM6Y1MNLnzIZrK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bentuk`
--
ALTER TABLE `bentuk`
  ADD PRIMARY KEY (`id_bentuk`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`kode_obat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bentuk`
--
ALTER TABLE `bentuk`
  MODIFY `id_bentuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `kode_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;
-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2022 at 06:57 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `pw_tubes_213040043`
--

-- --------------------------------------------------------

--
-- Table structure for table `bentuk`
--

CREATE TABLE `bentuk` (
  `id_bentuk` int(11) NOT NULL,
  `bentuk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bentuk`
--

INSERT INTO `bentuk` (`id_bentuk`, `bentuk`) VALUES
(1, 'infus'),
(2, 'tablet'),
(3, 'kapsul'),
(4, 'salep'),
(5, 'obat cair'),
(6, 'Permen'),
(7, 'Suntik'),
(8, 'Gel'),
(9, 'Krim'),
(10, 'Sirop'),
(11, 'Serbuk');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `kode_obat` int(11) NOT NULL,
  `nama_obat` varchar(65) NOT NULL,
  `harga` int(11) NOT NULL,
  `bentuk` varchar(65) NOT NULL,
  `stok` int(11) NOT NULL,
  `manfaat` varchar(65) NOT NULL,
  `konsumen` varchar(65) NOT NULL,
  `gambar` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`kode_obat`, `nama_obat`, `harga`, `bentuk`, `stok`, `manfaat`, `konsumen`, `gambar`) VALUES
(1, 'Albumin', 15000, ' infus', 50, 'Menangani defisiensi albumin', 'Dewasa', 'Albumin.jpeg'),
(2, 'Acarbose', 10000, 'Tablet, kapsul', 50, 'Mengontrol kadar gula', 'Dewasa dan anak anak', 'Acarbose.jpg'),
(3, 'Amfetamin', 13000, 'Tablet, kapsul', 70, 'menangani narkolepsi', 'Dewasa dan anak anak', 'Amfetamin.jpg'),
(4, 'Atenolol', 30000, 'Tablet', 57, 'Mengobati hipertensi', 'Dewasa', 'Atenolol.jpg'),
(5, 'Bacitracin', 20000, 'Salep', 50, 'Mencegah infeksi dikulit', 'Dewasa dan anak anak', 'Bacitracin.jpg'),
(16, 'Baclofen', 35000, 'Tablet', 100, 'Meredakan kejang otot', 'Dewasa dan anak anak', 'Baclofen.jpg'),
(17, 'Captopril', 15000, 'Tablet', 70, 'mencegah komplikasi jantung', 'Dewasa', 'Captopril.jpg'),
(18, 'Diazepam', 13000, 'Tablet,Obat cair', 50, 'Mengatasi insomnia', 'Dewasa dan anak anak', 'Diazepam.jpg'),
(27, 'Betametason', 15000, 'Salep', 30, 'Meredakan peradangan ', 'Dewasa', 'Betametason.jpg'),
(31, 'Ranitidine', 5000, 'Tablet', 20, 'Menurunkan asam lambung', 'Dewasa', 'Ranitidine.jpg'),
(32, 'Ambroxol', 10000, 'Tablet', 50, 'Meredakan batuk berdahak', 'Dewasa dan anak anak', 'Ambroxol.jpeg'),
(33, 'Amylmetacresol', 5000, 'Permen', 30, 'Meredakan sakit tenggorokan', 'Dewasa dan anak anak', 'Amylmetacresol.jpg'),
(35, 'Anakinra', 20000, 'Suntik', 100, 'Meredakan gejala rheumatoid arthritis', 'Dewasa dan anak anak', 'Anakinra.png'),
(36, 'Atropin', 12000, 'Suntik', 30, 'Menangani bradikardia atau keracunan', 'Dewasa dan anak anak', 'Atropin.jpeg'),
(37, 'Benzolac', 15000, 'Gel', 100, 'Mengatasi jerawat', 'Dewasa', 'Benzolac.jpg'),
(38, ' Betametason', 10000, 'Salep', 20, 'Mengobati hiperplasia adrenal', 'Dewasa dan anak anak', 'Betametason.jpg'),
(39, 'Ibupropen', 5000, 'Tablet', 100, 'Meredakan nyeri', 'Dewasa dan anak anak', 'Ibuprofen.png'),
(40, 'Imboost', 5000, 'Tablet', 50, 'Meningkatkan sistem imun tubuh', 'Dewasa dan anak anak', 'imboost.jpg'),
(41, 'Kalpanax', 20000, 'Krim', 70, 'Mengatasi infeksi jamur kulit', 'Dewasa', 'Kalpanax.jpg'),
(42, 'Kiranti', 15000, 'Sirop', 100, 'Meredakan nyeri haid', 'Dewasa', 'Kiranti.jpg'),
(43, 'Laktulosa', 20000, 'Sirop', 50, 'Mengatasi sembelit', 'Dewasa dan anak anak', 'Laktulosa.jpg'),
(44, 'Mylanta', 25000, 'Sirop', 100, 'Meredakan gejala sakit maag', 'Dewasa dan anak anak', 'Mylanta.jpg'),
(45, 'Oralit', 5000, 'Serbuk', 50, 'Mengatasi dehidrasi akibat diare', 'Dewasa dan anak anak', 'Oralit.jpg'),
(46, 'Panadol', 5000, 'Tablet', 100, 'Meredakan demam', 'Dewasa dan anak anak', 'Panadol.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'emilia paradila s', '$2y$10$gFwAGjDHJMwQkQVaQp1byuTA05YBbGuDyuEfTd.m5SnifW2G5RLei'),
(2, 'emiliaparadila', '$2y$10$aNmFacrorIiRp/Lyjf.rOOI8owtqq1kPO5s4P/Zgy2dHN6EJPJPd6'),
(3, 'paradila', '$2y$10$/VN/GQPahaw5g87HBRwfP.BKi3yfD03zFBzO/TIOeP2jOiRAkN0n6'),
(4, 'guee', '$2y$10$KxZIChe4vKVI52hZIeHiou6jY7TmpQDUin3C07DCM6Y1MNLnzIZrK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bentuk`
--
ALTER TABLE `bentuk`
  ADD PRIMARY KEY (`id_bentuk`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`kode_obat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bentuk`
--
ALTER TABLE `bentuk`
  MODIFY `id_bentuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `kode_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;
