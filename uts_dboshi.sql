/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50137
Source Host           : localhost:3306
Source Database       : uts_dboshi

Target Server Type    : MYSQL
Target Server Version : 50137
File Encoding         : 65001

Date: 2017-04-06 11:01:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `m_jurusan`
-- ----------------------------
DROP TABLE IF EXISTS `m_jurusan`;
CREATE TABLE `m_jurusan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jurusan` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_jurusan
-- ----------------------------
INSERT INTO `m_jurusan` VALUES ('1', 'Teknik Informatika');
INSERT INTO `m_jurusan` VALUES ('2', 'Teknik Komputer');
INSERT INTO `m_jurusan` VALUES ('3', 'Teknik Elektro');
INSERT INTO `m_jurusan` VALUES ('4', 'Teknik Industri');

-- ----------------------------
-- Table structure for `m_petugas`
-- ----------------------------
DROP TABLE IF EXISTS `m_petugas`;
CREATE TABLE `m_petugas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_petugas
-- ----------------------------

-- ----------------------------
-- Table structure for `t_lampiran_camaba`
-- ----------------------------
DROP TABLE IF EXISTS `t_lampiran_camaba`;
CREATE TABLE `t_lampiran_camaba` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_pendaftaran` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `akta_kelahiran` varchar(255) DEFAULT NULL,
  `kartu_keluarga` varchar(255) DEFAULT NULL,
  `ijazah` varchar(255) DEFAULT NULL,
  `surat_ket_sehat` varchar(255) DEFAULT NULL,
  `sertifikat1` varchar(255) DEFAULT NULL,
  `sertifikat2` varchar(255) DEFAULT NULL,
  `sertifikat3` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_lampiran_camaba
-- ----------------------------

-- ----------------------------
-- Table structure for `t_orang_tua_camaba`
-- ----------------------------
DROP TABLE IF EXISTS `t_orang_tua_camaba`;
CREATE TABLE `t_orang_tua_camaba` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_pendaftaran` varchar(255) DEFAULT NULL,
  `nama_ayah` varchar(255) DEFAULT NULL,
  `nama_ibu` varchar(255) DEFAULT NULL,
  `tahun_lahir_ayah` int(4) DEFAULT NULL,
  `tahun_lahir_ibu` int(4) DEFAULT NULL,
  `pekerjaan_ayah` varchar(255) DEFAULT NULL,
  `pekerjaan_ibu` varchar(255) DEFAULT NULL,
  `alamat` text,
  `penghasilan_ayah` varchar(255) DEFAULT NULL,
  `penghasilan_ibu` varchar(255) DEFAULT NULL,
  `keterangan_ayah` varchar(255) DEFAULT NULL COMMENT 'masih hidup/meniggal tahun',
  `keterangan_ibu` varchar(255) DEFAULT NULL COMMENT 'masih hidup/meniggal tahun',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_orang_tua_camaba
-- ----------------------------

-- ----------------------------
-- Table structure for `t_pendaftaran`
-- ----------------------------
DROP TABLE IF EXISTS `t_pendaftaran`;
CREATE TABLE `t_pendaftaran` (
  `id` int(11) DEFAULT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `alamat` text,
  `asal_sekolah` varchar(255) DEFAULT NULL,
  `tahun_lulus` int(4) DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_pendaftaran
-- ----------------------------

-- ----------------------------
-- Table structure for `t_pendaftaran_camaba`
-- ----------------------------
DROP TABLE IF EXISTS `t_pendaftaran_camaba`;
CREATE TABLE `t_pendaftaran_camaba` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `nisn` int(11) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `tempat_tinggal` varchar(255) DEFAULT NULL COMMENT 'bersama orang tua /kost/lainnya',
  `mode_transportasi` varchar(255) DEFAULT NULL,
  `no_tlp` varchar(20) DEFAULT NULL,
  `no_pendaftaran` varchar(10) DEFAULT NULL,
  `tgl_pendaftaran` datetime DEFAULT NULL,
  `keterangan` enum('0','1') DEFAULT NULL COMMENT 'lulus/tidak lulus',
  `asal_sekolah` varchar(255) DEFAULT NULL,
  `tahun_lulus` int(4) DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL,
  `jurusan_pilihan_1` varchar(255) DEFAULT NULL,
  `jurusan_pilihan_2` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_pendaftaran_camaba
-- ----------------------------

-- ----------------------------
-- Table structure for `t_periodik_camaba`
-- ----------------------------
DROP TABLE IF EXISTS `t_periodik_camaba`;
CREATE TABLE `t_periodik_camaba` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_pendaftaran` varchar(255) DEFAULT NULL,
  `tinggi_badan` int(11) DEFAULT NULL,
  `berat_badan` int(11) DEFAULT NULL,
  `jarak_rumah_kampus` varchar(255) DEFAULT NULL,
  `waktu_tempuh` int(11) DEFAULT NULL,
  `anak_ke` int(11) DEFAULT NULL,
  `jml_sdr_kandung` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_periodik_camaba
-- ----------------------------

-- ----------------------------
-- Table structure for `t_user_camaba`
-- ----------------------------
DROP TABLE IF EXISTS `t_user_camaba`;
CREATE TABLE `t_user_camaba` (
  `id` int(11) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(0) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_user_camaba
-- ----------------------------
