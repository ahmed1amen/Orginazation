CREATE TABLE `Users` (
`Admin_ID` int(11) NOT NULL AUTO_INCREMENT,
`Admin_Username` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
`Admin_Password` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
`Admin_Privileges` int(11) NULL DEFAULT NULL,
PRIMARY KEY (`Admin_ID`) 
)
ENGINE = InnoDB
AUTO_INCREMENT = 1
AVG_ROW_LENGTH = 0
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci
KEY_BLOCK_SIZE = 0
MAX_ROWS = 0
MIN_ROWS = 0
ROW_FORMAT = Compact;
CREATE TABLE `Areas` (
`Area_ID` int(11) NOT NULL AUTO_INCREMENT,
`Area_Name` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
`Area_OfficeID` int(11) NULL DEFAULT NULL,
`Area_Section` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
`Area_Description` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
PRIMARY KEY (`Area_ID`) 
)
ENGINE = InnoDB
AUTO_INCREMENT = 1
AVG_ROW_LENGTH = 0
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci
KEY_BLOCK_SIZE = 0
MAX_ROWS = 0
MIN_ROWS = 0
ROW_FORMAT = Compact;
CREATE TABLE `Employees` (
`Emp_ID` int(11) NOT NULL AUTO_INCREMENT,
`Employee_Name` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
`Employee_Number` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
`Employee_Address` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
`Employee_Salary` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
`Employee_JobName` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
`Employee_Email` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
`Employee_Password` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
`Employee_Office` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
PRIMARY KEY (`Emp_ID`) 
)
ENGINE = InnoDB
AUTO_INCREMENT = 1
AVG_ROW_LENGTH = 0
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci
KEY_BLOCK_SIZE = 0
MAX_ROWS = 0
MIN_ROWS = 0
ROW_FORMAT = Compact;
CREATE TABLE `Offices` (
`Office_ID` int(11) NOT NULL AUTO_INCREMENT,
`Office_Name` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
`Office_Address` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
`Office_Facebook` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
`Office_Phone` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
`Office_PhoneFamilies` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
`Office_PhoneSubscribers` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
PRIMARY KEY (`Office_ID`) 
)
ENGINE = InnoDB
AUTO_INCREMENT = 1
AVG_ROW_LENGTH = 0
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci
KEY_BLOCK_SIZE = 0
MAX_ROWS = 0
MIN_ROWS = 0
ROW_FORMAT = Compact;
CREATE TABLE `Families` (
`family_ID` int(11) NOT NULL AUTO_INCREMENT,
`statistics_numer` int(11) NOT NULL,
`family_balance` int(11) NOT NULL,
`provider_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
`company_office` int(11) NOT NULL,
`hashimy` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
`number_of_files` int(11) NOT NULL,
`father_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
`treatment_date` date NOT NULL,
`provider_name2` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
`current_situation` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
`hashimy2` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
`family_type` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
`mo3aref_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
`special_case` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
`mozaky_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
`shopping_day` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
`mozaky_number` int(11) NOT NULL,
`nationality_number` int(11) NOT NULL,
`note` varchar(2000) CHARACTER SET utf32 COLLATE utf32_unicode_ci NULL DEFAULT NULL,
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
PRIMARY KEY (`family_ID`) 
)
ENGINE = InnoDB
AUTO_INCREMENT = 19
AVG_ROW_LENGTH = 0
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci
KEY_BLOCK_SIZE = 0
MAX_ROWS = 0
MIN_ROWS = 0
ROW_FORMAT = Compact;
CREATE TABLE `images` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`file_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
`uploaded_on` datetime NOT NULL,
`status` enum('1','0') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
PRIMARY KEY (`id`) 
)
ENGINE = InnoDB
AUTO_INCREMENT = 1
AVG_ROW_LENGTH = 0
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
KEY_BLOCK_SIZE = 0
MAX_ROWS = 0
MIN_ROWS = 0
ROW_FORMAT = Compact;
CREATE TABLE `Agents` (
);
CREATE TABLE `Groups` (
`GroupID` int(11) NOT NULL AUTO_INCREMENT,
`GroupOffice` varchar(255) NULL,
`GroupName` varchar(255) NULL,
`GroupAgent` varchar(255) NULL,
`GroupUpdateNo` int(11) NULL,
`GroupDateOfConstitution` datetime NULL ON UPDATE CURRENT_TIMESTAMP,
`GroupAddNo` int(11) NULL,
`GroupUpdateDate` datetime NULL ON UPDATE CURRENT_TIMESTAMP,
`GroupNote` varchar(255) NULL,
`GroupClass` varchar(255) NULL,
`GroupCurrentSatuation` varchar(255) NULL,
`GroupFollowEmployee` varchar(255) NULL,
`GroupDEU` varchar(255) NULL,
`GroupDTU` varchar(255) NULL,
`GroupRegion` varchar(255) NULL,
`GroupDateOfRecMoney` datetime NULL ON UPDATE CURRENT_TIMESTAMP,
PRIMARY KEY (`GroupID`) 
);
CREATE TABLE `Registers` (
);
CREATE TABLE `Funds` (
);
CREATE TABLE `Knowers` (
);
