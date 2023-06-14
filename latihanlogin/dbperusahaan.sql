/*
Navicat MySQL Data Transfer

Source Server         : ConLocal-mysql
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : dbperusahaan

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2023-05-30 15:23:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for mst_divisi
-- ----------------------------
DROP TABLE IF EXISTS `mst_divisi`;
CREATE TABLE `mst_divisi` (
  `iddivisi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_divisi` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`iddivisi`),
  KEY `iddivisi` (`iddivisi`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of mst_divisi
-- ----------------------------
INSERT INTO `mst_divisi` VALUES ('1', 'IT');
INSERT INTO `mst_divisi` VALUES ('2', 'Accounting');
INSERT INTO `mst_divisi` VALUES ('3', 'HRD');
INSERT INTO `mst_divisi` VALUES ('4', 'Direksi');

-- ----------------------------
-- Table structure for mst_pegawai
-- ----------------------------
DROP TABLE IF EXISTS `mst_pegawai`;
CREATE TABLE `mst_pegawai` (
  `idpegawai` int(11) NOT NULL AUTO_INCREMENT,
  `nama_peg` varchar(20) DEFAULT NULL,
  `divisi` int(11) DEFAULT NULL,
  `jabatan` varchar(20) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  PRIMARY KEY (`idpegawai`),
  KEY `fk_divisi` (`divisi`),
  CONSTRAINT `fk_divisi` FOREIGN KEY (`divisi`) REFERENCES `mst_divisi` (`iddivisi`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of mst_pegawai
-- ----------------------------

-- ----------------------------
-- Table structure for mst_user
-- ----------------------------
DROP TABLE IF EXISTS `mst_user`;
CREATE TABLE `mst_user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of mst_user
-- ----------------------------
