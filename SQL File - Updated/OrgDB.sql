/*
 Navicat MySQL Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100138
 Source Host           : localhost:3306
 Source Schema         : orgdb

 Target Server Type    : MySQL
 Target Server Version : 100138
 File Encoding         : 65001

 Date: 01/11/2019 11:00:48
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for agent
-- ----------------------------
DROP TABLE IF EXISTS `agent`;
CREATE TABLE `agent`  (
  `Agent_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Agent_Type` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Charity_Office` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Full_Name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Calling_Adj` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Gender` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Knower_Name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Phone_Number1` int(11) NOT NULL,
  `Phone_Number2` int(11) NULL DEFAULT NULL,
  `Facebook_Address` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Home_Address` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Work_Address` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Note` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `Form_Number` int(11) NOT NULL,
  `Form_Date` date NOT NULL,
  `Wasy_Name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Wasy_Phone_Number` int(11) NOT NULL,
  PRIMARY KEY (`Agent_ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for areas
-- ----------------------------
DROP TABLE IF EXISTS `areas`;
CREATE TABLE `areas`  (
  `Area_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Area_Name` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Area_Office` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Area_Section` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Area_Description` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`Area_ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for donor1tbl
-- ----------------------------
DROP TABLE IF EXISTS `donor1tbl`;
CREATE TABLE `donor1tbl`  (
  `DonorID` int(10) NULL DEFAULT NULL,
  `DonorMontadherAmma` int(10) NULL DEFAULT NULL,
  `DonorRedhaJarya` int(10) NULL DEFAULT NULL,
  `DonorNabIrahmaAytam` int(10) NULL DEFAULT NULL,
  `DonorImamAilMonthKiswa` int(10) NULL DEFAULT NULL,
  `DonorImamAilYearKiswa` int(10) NULL DEFAULT NULL,
  `DonorHusainMonthZawaj` int(10) NULL DEFAULT NULL,
  `DonorHusainYearZawaj` int(10) NULL DEFAULT NULL,
  `DonorBaqerMotaffa` int(10) NULL DEFAULT NULL,
  `DonorSajadTibya` int(10) NULL DEFAULT NULL,
  `DonorHasanMonthEftar` int(10) NULL DEFAULT NULL,
  `DonorHasanYearEftar` int(10) NULL DEFAULT NULL,
  `DonorMontadhemHuquq` int(10) NULL DEFAULT NULL,
  `DonorMontadhemHuquqnote` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `DonorSufonNajat` int(10) NULL DEFAULT NULL,
  `DonorRadMadhalim` int(10) NULL DEFAULT NULL,
  `DonorAddDate` datetime(0) NULL DEFAULT NULL,
  `Donornote` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `DonorUpdateNo` int(10) NULL DEFAULT NULL,
  `DonorUpdateDate` datetime(0) NULL DEFAULT NULL,
  `DonorSpecifiedName` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `DonorCurrentSatuation` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `DonorKadhemQardh` int(10) NULL DEFAULT NULL,
  `DonorJawadBenaa` int(10) NULL DEFAULT NULL,
  `DonorHadiOtherHuqoq` int(10) NULL DEFAULT NULL,
  `DonorFashalKelawi` int(10) NULL DEFAULT NULL,
  `DonorAddNo` int(10) NULL DEFAULT NULL,
  `DonorJaryano` int(10) NULL DEFAULT NULL,
  `DonorJaryadate` datetime(0) NULL DEFAULT NULL,
  `DonorFacebook` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `DonorDokhrAkheraNo` int(10) NULL DEFAULT NULL,
  `DonorDokhrAkheraDate` datetime(0) NULL DEFAULT NULL,
  `DonorGuardian` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `DonorGuardianPhone` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `DonorDeterminedPerson` int(10) NULL DEFAULT NULL,
  `Donorpic` int(10) NULL DEFAULT NULL,
  `DonorDEU` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `DonorDTU` datetime(0) NULL DEFAULT NULL,
  `DonorArrivedCatch` bit(1) NULL DEFAULT NULL,
  `DonorSuffonBW` int(10) NULL DEFAULT NULL,
  `DonorRadJameelTo` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `DonorDateOfRecMoney` int(10) NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for employee_data
-- ----------------------------
DROP TABLE IF EXISTS `employee_data`;
CREATE TABLE `employee_data`  (
  `Employee_ID` int(11) NOT NULL AUTO_INCREMENT,
  `employee_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `employee_number` int(11) NOT NULL,
  `employee_address` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `employee_salary` int(11) NOT NULL,
  `employee_jobName` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `employee_email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `employee_password` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `employee_office` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Employee_ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for family
-- ----------------------------
DROP TABLE IF EXISTS `family`;
CREATE TABLE `family`  (
  `family_ID` int(11) NOT NULL AUTO_INCREMENT,
  `statistics_numer` int(11) NOT NULL,
  `provider_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hashimy` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `father_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `provider_name2` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `hashimy2` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `mo3aref_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mozaky_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mozaky_number` int(11) NOT NULL,
  `note` varchar(2000) CHARACTER SET utf32 COLLATE utf32_unicode_ci NULL DEFAULT NULL,
  `family_balance` int(11) NOT NULL,
  `company_office` int(11) NOT NULL,
  `number_of_files` int(11) NOT NULL,
  `treatment_date` date NOT NULL,
  `current_situation` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `family_type` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `special_case` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `shopping_day` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nationality_number` int(11) NOT NULL,
  `membership` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `wasy_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `wasy_number` int(11) NULL DEFAULT NULL,
  `mgls_preparation` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `sharia_agency` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `esthqak_test` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `sadaka_garia` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `garia_eshtrak` int(11) NULL DEFAULT NULL,
  `eshtrak_da3m` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `da3m_money` int(11) NULL DEFAULT NULL,
  `contacts` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `kashf_medany` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `family_sanf` varchar(20) CHARACTER SET utf32 COLLATE utf32_unicode_ci NULL DEFAULT NULL,
  `sakan_type` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `egar_money` int(11) NULL DEFAULT NULL,
  `suggested_money` int(11) NULL DEFAULT NULL,
  `another_companies` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`family_ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for groups
-- ----------------------------
DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups`  (
  `Group_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Group_Office` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Group_Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Group_Agent` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Group_Region` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Group_Note` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Group_Class` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Group_CurrentSatuation` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Group_FollowEmployee` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Group_DateOfRecMoney` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`Group_ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for images
-- ----------------------------
DROP TABLE IF EXISTS `images`;
CREATE TABLE `images`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime(0) NOT NULL,
  `status` enum('1','0') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for knower
-- ----------------------------
DROP TABLE IF EXISTS `knower`;
CREATE TABLE `knower`  (
  `Knower_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Knower_Name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Calling_Adj` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Knower_Address` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Adjective` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Phone_Number1` bigint(11) NOT NULL,
  `Phone_Number2` int(11) NULL DEFAULT NULL,
  `employee_office` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Knower_ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for office_data
-- ----------------------------
DROP TABLE IF EXISTS `office_data`;
CREATE TABLE `office_data`  (
  `Office_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Office_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Office_address` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Office_facebook` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Mangement_Nmber` int(11) NOT NULL,
  `Family_Number` int(11) NOT NULL,
  `Participants_Number` int(11) NOT NULL,
  PRIMARY KEY (`Office_ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for registers
-- ----------------------------
DROP TABLE IF EXISTS `registers`;
CREATE TABLE `registers`  (
  `Register_ID` int(11) NOT NULL,
  `Register_Office` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Register_Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Register_Nikename` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Rgister_Gender` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Rgister_Specifedname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Rgister_CurrentStatus` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Rgister_Knower` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Rgister_Note` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Rgister_Group` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Rgister_DateOfRec` datetime(0) NULL DEFAULT NULL,
  `DonorMontadherAmma` int(10) NULL DEFAULT NULL,
  `DonorRedhaJarya` int(10) NULL DEFAULT NULL,
  `DonorNabIrahmaAytam` int(10) NULL DEFAULT NULL,
  `DonorImamAilMonthKiswa` int(10) NULL DEFAULT NULL,
  `DonorImamAilYearKiswa` int(10) NULL DEFAULT NULL,
  `DonorHusainMonthZawaj` int(10) NULL DEFAULT NULL,
  `DonorHusainYearZawaj` int(10) NULL DEFAULT NULL,
  `DonorBaqerMotaffa` int(10) NULL DEFAULT NULL,
  `DonorSajadTibya` int(10) NULL DEFAULT NULL,
  `DonorHasanMonthEftar` int(10) NULL DEFAULT NULL,
  `DonorHasanYearEftar` int(10) NULL DEFAULT NULL,
  `DonorMontadhemHuquq` int(10) NULL DEFAULT NULL,
  `DonorMontadhemHuquqnote` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `DonorSufonNajat` int(10) NULL DEFAULT NULL,
  `DonorRadMadhalim` int(10) NULL DEFAULT NULL,
  `Donornote` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `DonorUpdateNo` int(10) NULL DEFAULT NULL,
  `DonorUpdateDate` datetime(0) NULL DEFAULT NULL,
  `DonorSpecifiedName` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `DonorCurrentSatuation` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `DonorKadhemQardh` int(10) NULL DEFAULT NULL,
  `DonorJawadBenaa` int(10) NULL DEFAULT NULL,
  `DonorHadiOtherHuqoq` int(10) NULL DEFAULT NULL,
  `DonorFashalKelawi` int(10) NULL DEFAULT NULL,
  `DonorAddNo` int(10) NULL DEFAULT NULL,
  `DonorJaryano` int(10) NULL DEFAULT NULL,
  `DonorJaryadate` datetime(0) NULL DEFAULT NULL,
  `DonorFacebook` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `DonorDokhrAkheraNo` int(10) NULL DEFAULT NULL,
  `DonorDokhrAkheraDate` datetime(0) NULL DEFAULT NULL,
  `DonorGuardian` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `DonorGuardianPhone` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `DonorDeterminedPerson` int(10) NULL DEFAULT NULL,
  `Donorpic` int(10) NULL DEFAULT NULL,
  `DonorDEU` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `DonorDTU` datetime(0) NULL DEFAULT NULL,
  `DonorArrivedCatch` bit(1) NULL DEFAULT NULL,
  `DonorSuffonBW` int(10) NULL DEFAULT NULL,
  `DonorRadJameelTo` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `DonorDateOfRecMoney` int(10) NULL DEFAULT NULL,
  PRIMARY KEY (`Register_ID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for sections
-- ----------------------------
DROP TABLE IF EXISTS `sections`;
CREATE TABLE `sections`  (
  `SectionID` int(11) NOT NULL AUTO_INCREMENT,
  `SectionName` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `SectionDiscription` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`SectionID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;
