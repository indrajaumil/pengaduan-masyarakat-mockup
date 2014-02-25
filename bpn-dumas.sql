-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.1.41 - Source distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             8.0.0.4396
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for bpn-dumas
DROP DATABASE IF EXISTS `bpn-dumas`;
CREATE DATABASE IF NOT EXISTS `bpn-dumas` /*!40100 DEFAULT CHARACTER SET latin2 */;
USE `bpn-dumas`;


-- Dumping structure for table bpn-dumas.tbl_dumas_pengaduan
DROP TABLE IF EXISTS `tbl_dumas_pengaduan`;
CREATE TABLE IF NOT EXISTS `tbl_dumas_pengaduan` (
  `nomor_pengaduan` bigint(20) NOT NULL AUTO_INCREMENT,
  `tanggal_pengaduan` datetime NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `handphone` varchar(20) NOT NULL,
  `jenis_pengaduan` varchar(5) NOT NULL,
  `type_pengaduan` varchar(5) NOT NULL,
  `kepada` varchar(100) NOT NULL,
  `tanggal_masuk_dokumen` date NOT NULL,
  `alamat_aduan` varchar(200) NOT NULL,
  `kelurahan_aduan` varchar(5) NOT NULL,
  `kecamatan_aduan` varchar(5) NOT NULL,
  `kota_aduan` varchar(5) NOT NULL,
  `uraian_aduan` text NOT NULL,
  `keycode` varchar(6) NOT NULL,
  PRIMARY KEY (`nomor_pengaduan`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table bpn-dumas.tbl_dumas_pengaduan: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_dumas_pengaduan` DISABLE KEYS */;
INSERT INTO `tbl_dumas_pengaduan` (`nomor_pengaduan`, `tanggal_pengaduan`, `nama_lengkap`, `alamat`, `email`, `telepon`, `handphone`, `jenis_pengaduan`, `type_pengaduan`, `kepada`, `tanggal_masuk_dokumen`, `alamat_aduan`, `kelurahan_aduan`, `kecamatan_aduan`, `kota_aduan`, `uraian_aduan`, `keycode`) VALUES
	(1, '2013-11-15 00:00:00', 'Indra Jaumil', 'Kalibata', 'indrajaumil@gmail.com', '02177820567', '082112495639', 'KD001', 'TIP00', 'Bagian Sumber Daya Manusia', '2013-11-05', '', '', '', '', 'uraian pengaduan kepada bagian sumber daya manusia BPN<br>', '');
/*!40000 ALTER TABLE `tbl_dumas_pengaduan` ENABLE KEYS */;


-- Dumping structure for table bpn-dumas.tbl_ref_bagian
DROP TABLE IF EXISTS `tbl_ref_bagian`;
CREATE TABLE IF NOT EXISTS `tbl_ref_bagian` (
  `kode_bagian` varchar(5) NOT NULL,
  `bagian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table bpn-dumas.tbl_ref_bagian: ~1 rows (approximately)
/*!40000 ALTER TABLE `tbl_ref_bagian` DISABLE KEYS */;
INSERT INTO `tbl_ref_bagian` (`kode_bagian`, `bagian`) VALUES
	('UMSDM', 'Bagian Sumber Daya Manusia');
/*!40000 ALTER TABLE `tbl_ref_bagian` ENABLE KEYS */;


-- Dumping structure for table bpn-dumas.tbl_ref_jenis_pengaduan
DROP TABLE IF EXISTS `tbl_ref_jenis_pengaduan`;
CREATE TABLE IF NOT EXISTS `tbl_ref_jenis_pengaduan` (
  `kode_jenis_pengaduan` varchar(5) NOT NULL,
  `jenis_pengaduan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table bpn-dumas.tbl_ref_jenis_pengaduan: ~1 rows (approximately)
/*!40000 ALTER TABLE `tbl_ref_jenis_pengaduan` DISABLE KEYS */;
INSERT INTO `tbl_ref_jenis_pengaduan` (`kode_jenis_pengaduan`, `jenis_pengaduan`) VALUES
	('KD001', 'Pengaduan Umum');
/*!40000 ALTER TABLE `tbl_ref_jenis_pengaduan` ENABLE KEYS */;


-- Dumping structure for table bpn-dumas.tbl_ref_lokasi
DROP TABLE IF EXISTS `tbl_ref_lokasi`;
CREATE TABLE IF NOT EXISTS `tbl_ref_lokasi` (
  `kode_pos` int(11) NOT NULL,
  `kelurahan` varchar(200) NOT NULL,
  `kecamatan` varchar(200) NOT NULL,
  `kab_kota` varchar(200) NOT NULL,
  `provinsi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table bpn-dumas.tbl_ref_lokasi: ~2 rows (approximately)
/*!40000 ALTER TABLE `tbl_ref_lokasi` DISABLE KEYS */;
INSERT INTO `tbl_ref_lokasi` (`kode_pos`, `kelurahan`, `kecamatan`, `kab_kota`, `provinsi`) VALUES
	(16411, 'Mekarjaya', 'Sukmajaya', 'Depok', 'Jawa Barat'),
	(16412, 'Abadijaya', 'Sukmajaya', 'Depok', 'Jawa Barat');
/*!40000 ALTER TABLE `tbl_ref_lokasi` ENABLE KEYS */;


-- Dumping structure for table bpn-dumas.tbl_ref_type_pengaduan
DROP TABLE IF EXISTS `tbl_ref_type_pengaduan`;
CREATE TABLE IF NOT EXISTS `tbl_ref_type_pengaduan` (
  `kode_tipe_pengaduan` varchar(5) NOT NULL,
  `tipe_pengaduan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table bpn-dumas.tbl_ref_type_pengaduan: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_ref_type_pengaduan` DISABLE KEYS */;
INSERT INTO `tbl_ref_type_pengaduan` (`kode_tipe_pengaduan`, `tipe_pengaduan`) VALUES
	('TIP00', 'Tipe Umum');
/*!40000 ALTER TABLE `tbl_ref_type_pengaduan` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
