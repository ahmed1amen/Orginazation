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

 Date: 06/12/2019 14:15:12
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
-- Table structure for donors
-- ----------------------------
DROP TABLE IF EXISTS `donors`;
CREATE TABLE `donors`  (
  `Donner_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Donner_Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Donner_Description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`Donner_ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

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
  `employee_adj` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`Employee_ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for family
-- ----------------------------
DROP TABLE IF EXISTS `family`;
CREATE TABLE `family`  (
  `family_ID` int(30) NOT NULL AUTO_INCREMENT,
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
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for family_members
-- ----------------------------
DROP TABLE IF EXISTS `family_members`;
CREATE TABLE `family_members`  (
  `FamilyMemberID` int(30) NOT NULL AUTO_INCREMENT,
  `family_ID` int(30) NULL DEFAULT NULL,
  `FamilyMemberName` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `FamilyMemberBirthday` date NULL DEFAULT NULL,
  `FamilyMemberGender` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `FamilyMemberStudy` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `FamilyMemberSchool` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `FamilyMemberClassroom` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `FamilyMemberHelthy` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `FamilyMemberRatios` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `FamilyMemberMarital` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`FamilyMemberID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for family_needs
-- ----------------------------
DROP TABLE IF EXISTS `family_needs`;
CREATE TABLE `family_needs`  (
  `family_ID` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `itemname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `itemcount` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `iteamPrepareYear` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `iteamPrepareMonth` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `iteamSN` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `iteamCountOfPrepare` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

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
-- Table structure for member
-- ----------------------------
DROP TABLE IF EXISTS `member`;
CREATE TABLE `member`  (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lastname` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `middlename` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `address` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`member_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

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
-- Table structure for org_users
-- ----------------------------
DROP TABLE IF EXISTS `org_users`;
CREATE TABLE `org_users`  (
  `ID` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `jouned` datetime(0) NULL DEFAULT NULL,
  `roles` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for registers
-- ----------------------------
DROP TABLE IF EXISTS `registers`;
CREATE TABLE `registers`  (
  `RegisterID` int(40) NOT NULL AUTO_INCREMENT,
  `RegisterName` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `RegisterOffice` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `RegisterGroup` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `RegisterNickname` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `RegisterGender` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Knower_Name` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `RegisterHomeAddress` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `RegisterJobAddress` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `RegisterPhone1` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `RegisterPhone2` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `RegisterE_mail` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `RegisterFacebook` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `RegisterArrivedCatch` bit(1) NULL DEFAULT b'0',
  PRIMARY KEY (`RegisterID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for regiters_donors
-- ----------------------------
DROP TABLE IF EXISTS `regiters_donors`;
CREATE TABLE `regiters_donors`  (
  `DonorID` int(11) NULL DEFAULT NULL,
  `RegisterID` int(11) NULL DEFAULT NULL,
  `RegisterCredit` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL
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

-- ----------------------------
-- Table structure for users_roles
-- ----------------------------
DROP TABLE IF EXISTS `users_roles`;
CREATE TABLE `users_roles`  (
  `users_roles` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;
