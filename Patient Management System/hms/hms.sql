CREATE TABLE `admin` (
  `id` int(6) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_pass` varchar(100) NOT NULL
) ;
CREATE TABLE `patient` (
  `id` int(6) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `patient_email` varchar(100) NOT NULL,
  `patient_pass` varchar(100) NOT NULL
) ;
INSERT INTO admin (admin_name,admin_email,admin_pass) VALUES
('admin1', 'admin1@gmail.com','abc123'),
('admin2', 'admin2@gmail.com','def456');