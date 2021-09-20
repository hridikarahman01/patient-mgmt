CREATE TABLE `doctor` (
  `d_id` int(11) PRIMARY KEY NOT NULL,
  `department_name` varchar(45) NOT NULL,
  `doctor_name` varchar(45) NOT NULL
);
INSERT INTO `doctor` (`d_id`, `department_name`, `doctor_name`) VALUES
(1001, 'Neonatology', 'Dr. Aftab Yusuf Raj'),
(1002, 'Neonatology', 'Dr. Lutfun Nahar Begum'),
(1003, 'Dermatology', 'Prof. Dr. Md. Siraj Uddin'),
(1004, 'Rheumatology and Internal Medicine', 'Dr. Farzana Shumy'),
(1005, 'Orthopedics', 'Dr. Md. O.F.G Kibria'),
(1006, 'Obstetrics & Gynecology', 'Dr. Nargis Fatema');
CREATE TABLE `patient` (
  `p_id` int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `patient_name` varchar(45) NOT NULL,
  `patient_age` int(11) NOT NULL,
  `depertment_name` varchar(45) NOT NULL,
  `doctor_name` varchar(45) NOT NULL,
  `apnt_date` date NOT NULL,
  `apnt_time` time NOT NULL
) ;
CREATE TABLE `ambulance` (
  `ambulance_id` int(11) PRIMARY KEY AUTO_INCREMENT NOT null,
  `booking_date` date NOT NULL,
  `booking_time` varchar(45) NOT NULL,
  `street` varchar(45) NOT NULL,
  `suburb` varchar(45) NOT NULL,
  `postcode` char(4) NOT NULL
);
CREATE TABLE `test` (
  `test_id` int(11) PRIMARY KEY NOT NULL,
  `test_name` varchar(45) NOT NULL

);
INSERT INTO test (test_id, test_name) VALUES
(2001, 'Blood Test'),
(2002, 'X-ray'),
(2003, 'CT Scan'),
(2004, 'MRI'),
(2005, 'Urine Test'),
(2006, 'Pregnancy Test');

CREATE TABLE `booking_test` (
  `booking_id` int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `test_name` varchar(45) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL

) ;
