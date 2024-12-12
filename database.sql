-- Table structure for table `tbladmin`
CREATE TABLE `tbladmin` (
  `ID` INT(11) NOT NULL AUTO_INCREMENT,
  `AdminName` VARCHAR(120) DEFAULT '',
  `AdminuserName` VARCHAR(20) DEFAULT '',
  `MobileNumber` BIGINT DEFAULT NULL,
  `Email` VARCHAR(120) DEFAULT '',
  `Password` VARCHAR(120) DEFAULT '',
  `AdminRegdate` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP(),
  `UserType` TINYINT DEFAULT 0,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Table structure for table `tblclasses`
CREATE TABLE `tblclasses` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `teacherId` INT(10) DEFAULT NULL,
  `className` VARCHAR(255) DEFAULT '',
  `ageGroup` VARCHAR(150) DEFAULT '',
  `classTiming` VARCHAR(120) DEFAULT '',
  `capacity` VARCHAR(10) DEFAULT '',
  `feacturePic` VARCHAR(255) DEFAULT '',
  `addedBy` VARCHAR(150) DEFAULT '',
  `postingDate` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Table structure for table `tblenrollment`
CREATE TABLE `tblenrollment` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `enrollmentNumber` BIGINT(12) DEFAULT NULL,
  `fatherName` VARCHAR(120) DEFAULT '',
  `motherName` VARCHAR(120) DEFAULT '',
  `parentmobNo` BIGINT(12) DEFAULT NULL,
  `parentEmail` VARCHAR(150) DEFAULT '',
  `childName` VARCHAR(150) DEFAULT '',
  `childAge` VARCHAR(200) DEFAULT '',
  `enrollProgram` VARCHAR(255) DEFAULT '',
  `message` MEDIUMTEXT DEFAULT NULL,
  `postingDate` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP(),
  `enrollStatus` VARCHAR(100) DEFAULT '',
  `officialRemark` MEDIUMTEXT DEFAULT NULL,
  `updationDate` TIMESTAMP NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Table structure for table `tblpage`
CREATE TABLE `tblpage` (
  `ID` INT(10) NOT NULL AUTO_INCREMENT,
  `PageType` VARCHAR(200) DEFAULT '',
  `PageTitle` VARCHAR(200) DEFAULT '',
  `PageDescription` MEDIUMTEXT DEFAULT '',
  `Email` VARCHAR(200) DEFAULT '',
  `MobileNumber` BIGINT(10) DEFAULT NULL,
  `UpdationDate` TIMESTAMP NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Table structure for table `tblteachers`
CREATE TABLE `tblteachers` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `fullName` VARCHAR(255) DEFAULT '',
  `teacherEmail` VARCHAR(255) DEFAULT '',
  `teacherMobileNo` BIGINT(11) DEFAULT NULL,
  `teacherSubject` VARCHAR(255) DEFAULT '',
  `teacherPic` VARCHAR(255) DEFAULT '',
  `AddedBy` VARCHAR(120) DEFAULT '',
  `regDate` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Table structure for table `tblvisitor`
CREATE TABLE `tblvisitor` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `gurdianName` VARCHAR(220) DEFAULT '',
  `gurdianEmail` VARCHAR(220) DEFAULT '',
  `childName` VARCHAR(225) DEFAULT '',
  `childAge` VARCHAR(120) DEFAULT '',
  `message` MEDIUMTEXT DEFAULT '',
  `officeRemark` MEDIUMTEXT DEFAULT NULL,
  `status` VARCHAR(20) DEFAULT '',
  `visitTime` VARCHAR(220) DEFAULT '',
  `postingDate` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP(),
  `updationDate` TIMESTAMP NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
