SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS pendaftaran_siswa;
USE pendaftaran_siswa;

CREATE TABLE `calon_siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(16) NOT NULL,
  `agama` varchar(16) NOT NULL,
  `sekolah_asal` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `calon_siswa` (`id`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`) VALUES
(1, 'Kevin Hierarchy', 'Tambak Pinggir Kali, Gubeng', 'Male', 'Christian', 'SMPK Haung To'),
(2, 'Nakashima Haruka', 'GunungSari, Manyar', 'Female', 'Hindu', 'SMP 3 Manyar'),
(3, 'Akmal Ahyun', 'Pondok Kejawan Hijau', 'Male', 'Islam', 'SMAN 1 Surabaya'),
(4, 'Xie Xidaidai', 'Kampung Cina, Surabaya', 'Female', 'Confucian', 'SMAN 25 Surabaya');

ALTER TABLE `calon_siswa`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `calon_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;