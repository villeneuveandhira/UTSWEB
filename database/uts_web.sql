/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : uts_web

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2022-03-30 23:16:02
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `grup`
-- ----------------------------
DROP TABLE IF EXISTS `grup`;
CREATE TABLE `grup` (
  `id_grup` int(7) NOT NULL AUTO_INCREMENT,
  `jenis_grup` varchar(15) NOT NULL,
  `nama_grup` varchar(255) NOT NULL,
  `jumlah_member` int(3) NOT NULL,
  `label` varchar(255) NOT NULL,
  `origin` varchar(255) NOT NULL,
  `status_active` varchar(15) NOT NULL,
  `fandom` varchar(50) NOT NULL,
  `debut` varchar(4) NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `lagu` varchar(50) NOT NULL,
  `album` int(10) NOT NULL,
  `leader` varchar(255) NOT NULL,
  `comeback` varchar(4) NOT NULL,
  `worth` varchar(50) NOT NULL,
  PRIMARY KEY (`id_grup`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of grup
-- ----------------------------
INSERT INTO `grup` VALUES ('0', 'Girl', 'GFRIEND', '6', 'Source Music Entertainment', 'Seoul, South Korea', 'No', 'Buddy', '2015', '2021', 'Glass Bead', '51', 'Kim So Jeong(Sowon)', '2021', '53.3K');
INSERT INTO `grup` VALUES ('1', 'Girl', 'TWICE', '9', 'JYP Entertainment', 'Seoul, South Korea', 'Yes', 'ONCE', '2015', 'now', 'Like OHH-AHH', '25', 'Park Ji-hyo', '2021', '35 million');
INSERT INTO `grup` VALUES ('2', 'Boy', 'BTS', '7', 'Big Hit', 'Seoul, South Korea', 'Yes', 'ARMY', '2013', 'now', 'No More Dream', '27', 'Kim Nam-joon(RM)', '2021', '150 million');
INSERT INTO `grup` VALUES ('3', 'Girl', 'Itzy', '5', 'JYP Entertainment', 'Seoul, South Korea', 'Yes', 'MIDZY', '2019', 'now', 'Dalla-Dalla', '19', 'Hwang Ye-Ji', '2021', '22.3 million');
INSERT INTO `grup` VALUES ('4', 'Girl', 'VIVIZ', '3', 'Big Planet Made', 'Seoul, South Korea', 'Yes', 'NAV', '2022', 'now', 'BOP-BOP', '1', 'none', '2022', '14.2K');
INSERT INTO `grup` VALUES ('5', 'Girl', 'Blackpink', '4', 'YG Entertainment', 'Seoul, South Korea', 'Yes', 'BLINK', '2016', 'now', 'Whistle', '30', 'none', '2020', '32 million');
INSERT INTO `grup` VALUES ('6', 'Boy', 'Stray Kids', '8', 'JYP Entertainment', 'Seoul, South Korea', 'Yes', 'STAY', '2017', 'now', 'District 9', '40', 'Bang Chan', '2022', '30.18 million');
INSERT INTO `grup` VALUES ('7', 'Girl', 'Red Velvet', '5', 'SM Entertainment', 'Seoul, South Korea', 'Yes', 'ReVeluv', '2014', 'now', 'Hapiness', '0', 'Bae Joo-hyun(Irene)', '2020', '19.2 K');
INSERT INTO `grup` VALUES ('8', 'Girl', 'Aespa', '4', 'SM Entertainment', 'Seoul, South Korea', 'Yes', 'MY', '2020', 'now', 'Black Mamba', '0', 'Yoo Jimin(Karina)', '2021', '913.29 K');
INSERT INTO `grup` VALUES ('9', 'Girl', '(G)-Idle', '5', 'Cube Entertainment', 'Seoul, South Korea', 'Yes', 'Neverland', '2018', 'now', 'LATATA', '0', 'Jeon So Yeon', '2022', '10.3 K');
INSERT INTO `grup` VALUES ('10', 'Girl', 'EXID', '5', 'AB Entertainment', 'Seoul, South Korea', 'Yes', 'L.E.G.G.O', '2012', 'now', 'WHOZ THAT GIRL', '0', 'Heo Sol Ji', '2019', '1.4 K');
INSERT INTO `grup` VALUES ('11', 'Girl', 'IVE', '6', 'Starship Entertainment', 'Seoul, South Korea', 'Yes', 'DIVE', '2021', 'now', 'Eleven', '0', 'Yujin', '2021', '21.1K');
INSERT INTO `grup` VALUES ('12', 'Girl', 'Weekly', '7', 'IST Entertainment', 'Seoul, South Korea', 'Yes', 'Daileee', '2020', 'now', 'Tag Me', '0', 'Lee Soojin', '2020', '4.1 K');
INSERT INTO `grup` VALUES ('13', 'Girl', 'Loona', '12', 'Blockberry Creative', 'Seoul, South Korea', 'Yes', 'Orbit', '2016', 'now', 'Hi High', '0', 'HaSeul', '2021', '8 million');
INSERT INTO `grup` VALUES ('14', 'Boy', 'ENHYPEN', '7', 'Big Hit', 'Seoul, South Korea', 'Yes', 'ENGENE', '2020', 'now', 'Given-Taken', '0', 'Jung-won', '2021', '3.18 million');
INSERT INTO `grup` VALUES ('15', 'Boy', 'MONSTA X', '7', 'Starship Entertainment', 'Seoul, South Korea', 'Yes', 'Monbebe', '2015', 'now', 'Tresspass', '0', 'Shownu', '2021', '14.2K');
INSERT INTO `grup` VALUES ('16', 'Boy', 'NCT Dream', '7', 'SM Entertainment', 'Seoul, South Korea', 'Yes', 'NCTzen', '2016', 'now', 'Chewing Gum', '0', 'Mark Lee', '2022', '28.29 million');
INSERT INTO `grup` VALUES ('17', 'Girl', 'Oh My Girl', '7', 'WM Entertainment', 'Seoul, South Korea', 'Yes', 'Miracle', '2015', 'now', 'Cupid', '0', 'Choi Hyo Jung', '2022', '49.3K');
INSERT INTO `grup` VALUES ('18', 'Boy', '2PM', '6', 'JYP Entertainment', 'Seoul, South Korea', 'Yes', 'Hottest', '2008', 'now', '10 out of 10', '0', 'Jaebeom', '2021', '20.5K');
INSERT INTO `grup` VALUES ('19', 'Girl', 'Girls Day', '4', 'Dream T Entertainment', 'Seoul, South Korea', 'Yes', 'Dai5y', '2010', 'now', 'Tilt My Head', '0', 'So-Jin', '2017', '730');
INSERT INTO `grup` VALUES ('20', 'Boy', 'ATEEZ', '8', 'KQ Entertainment', 'Seoul, South Korea', 'Yes', 'ATINY', '2018', 'now', 'Pirate King', '0', 'Hongjoong', '2021', '14.64 million');
INSERT INTO `grup` VALUES ('21', 'Boy', 'Treasure 13', '13', 'YG Entertainment', 'Seoul, South Korea', 'Yes', 'Treasure Makers', '2020', 'now', 'BOY', '0', 'Jihoon', '2022', '30K');
INSERT INTO `grup` VALUES ('22', 'Boy', 'NCT 127', '9', 'SM Entertainment', 'Seoul, South Korea', 'Yes', 'NCTzens', '2016', 'now', 'Fire Truck', '0', 'Taeyong', '2021', '24.6K');
INSERT INTO `grup` VALUES ('23', 'Boy', 'BIGBANG', '5', 'YG Entertainment', 'Seoul, South Korea', 'Yes', '- V.I.P', '2006', 'now', 'LA-LA-LA', '0', 'Taeyang', '2018', '40 million');
INSERT INTO `grup` VALUES ('24', 'Boy', 'Seventeen', '13', 'Pledis Entertainment', 'Seoul, South Korea', 'Yes', 'CARAT', '2015', 'now', 'Adore U', '0', 'S.Coups', '2021', '3.02 million');
INSERT INTO `grup` VALUES ('25', 'Boy', 'Tomorrow X Together', '5', 'Big Hit', 'Seoul, South Korea', 'Yes', 'MOA', '2019', 'now', 'Crown', '0', 'Soobin', '2021', '9.2 milion');
INSERT INTO `grup` VALUES ('26', 'Boy', 'Got7', '7', 'Sony Music Entertainment', 'Seoul, South Korea', 'Yes', 'AhGaSe', '2014', 'now', 'Girls Girls Girls', '0', 'JB', '2019', '12 million');
INSERT INTO `grup` VALUES ('27', 'Girl', 'Brave Girls', '4', 'Brave Entertainment', 'Seoul, South Korea', 'Yes', 'FEARLESS', '2011', 'now', 'Do you know', '0', 'Minyoung', '2022', '12.6K');
INSERT INTO `grup` VALUES ('28', 'Girl', 'Mamamoo', '4', 'JVCKenwood Victor Entertainment', 'Seoul, South Korea', 'Yes', 'MooMoos', '2014', 'now', 'HIP', '0', 'Kim Yong Sun', '2019', '10.71 million');
INSERT INTO `grup` VALUES ('29', 'Boy', 'The Boyz', '11', 'IST Entertainment', 'Seoul, South Korea', 'Yes', 'The B', '', 'now', '', '0', '', '', '');
INSERT INTO `grup` VALUES ('30', 'Boy', 'Super Junior', '10', 'SM Entertainment', 'Seoul, South Korea', 'Yes', 'E.L.F', '', 'now', '', '0', '', '', '');
