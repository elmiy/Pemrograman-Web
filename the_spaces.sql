SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Database: `the_spaces`
-- --------------------------------------------------------

-- Table structure for table `user`

CREATE TABLE `user` (
  `id_user` varchar(10) NOT NULL,
  `nama_lengkap` varchar(45) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `domisili` varchar(15) NOT NULL,
  `email` varchar(45) NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `user`
  ADD UNIQUE KEY `id_user` (`id_user`);
COMMIT;

