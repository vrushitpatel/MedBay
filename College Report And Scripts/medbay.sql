-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2021 at 02:19 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medbay`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `Name` varchar(400) NOT NULL,
  `Heading` varchar(50) NOT NULL,
  `Content` varchar(1000) NOT NULL,
  `Date` varchar(15) NOT NULL,
  `Dept` varchar(255) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`Name`, `Heading`, `Content`, `Date`, `Dept`, `ID`) VALUES
('Dr Laila Dave', 'Don’t smoke', 'Smoking tobacco causes NCDs such as lung disease, heart disease and stroke. Tobacco kills not only the direct smokers but even non-smokers through second-hand exposure. Currently, there are around 15.9 million Filipino adults who smoke tobacco but 7 in 10 smokers are interested or plan to quit.', '20 Jan', 'Cardiologist', 1001),
('Dr Rajesh Mistry', 'Check your blood pressure regularly', 'Hypertension, or high blood pressure, is called a “silent killer”. This is because many people who have hypertension may not be aware of the problem as it may not have any symptoms. If left uncontrolled, hypertension can lead to heart, brain, kidney and other diseases. Have your blood pressure checked regularly by a health worker so you know your numbers. If your blood pressure is high, get the advice of a health worker. This is vital in the prevention and control of hypertension.', '12 Feb', 'Cardiologist', 1002),
('Dr. Ashitesh Ajit Kumar', 'Avoid harmful use of alcohol', 'There is no safe level for drinking alcohol. Consuming alcohol can lead to health problems such as mental and behavioural disorders, including alcohol dependence, major NCDs such as liver cirrhosis, some cancers and heart diseases, as well as injuries resulting from violence and road clashes and collisions.', '21 Mar', 'Pediatrician', 1003),
('Dr. Arun P Mehra', 'Get tested!', 'Getting yourself tested is an important step in knowing your health status, especially when it comes to HIV, hepatitis B, sexually-transmitted infections (STIs) and tuberculosis (TB). Left untreated, these diseases can lead to serious complications and even death. Knowing your status means you will know how to either continue preventing these diseases or, if you find out that you’re positive, get the care and treatment that you need. Go to a public or private health facility, wherever you are comfortable, to have yourself tested.', '12 Apr', 'Dietitian', 1004),
('Dr. Rajan Shah', 'Cover your mouth when coughing or sneezing', 'Diseases such as influenza, pneumonia and tuberculosis are transmitted through the air. When an infected person coughs or sneezes, infectious agents may be passed on to others through airborne droplets. When you feel a cough or sneeze coming on, make sure you have covered your mouth with a face mask or use a tissue then dispose it carefully. If you do not have a tissue close by when you cough or sneeze, cover your mouth as much as possible with the crook (or the inside) of your elbow.', '25 Apr', 'Cardiologist', 1009),
('Dr. Sumeet Pawar', 'Prevent mosquito bites', 'Mosquitoes are one of the deadliest animals in the world. Diseases like dengue, chikungunya, malaria and lymphatic filariasis are transmitted by mosquitoes and continue to affect Filipinos. You can take simple measures to protect yourself and your loved ones against mosquito-borne diseases.', '21 June', 'Gastroenterologist', 1011),
('Dr. Umesh Khanna', 'Drink only safe water', 'Drinking unsafe water can lead to water-borne diseases such as cholera, diarrhoea, hepatitis A, typhoid and polio. Globally, at least 2 billion people use a drinking water source contaminated with faeces. Check with your water concessionaire and water refilling station to ensure that the water you’re drinking is safe. In a setting where you are unsure of your water source, boil your water for at least one minute. This will destroy harmful organisms in the water. Let it cool naturally before drinking.', '10 Aug', 'Pediatrician', 1016),
('Dr. Anant Joshi', 'Clean your hands properly', 'Hand hygiene is critical not only for health workers but for everyone. Clean hands can prevent the spread of infectious illnesses. You should handwash using soap and water when your hands are visibly soiled or handrub using an alcohol-based product.', '20 Aug', 'Dietitian', 1018),
('Dr. Ganesh Bakshi', 'Avoid harmful use of alcohol', 'There is no safe level for drinking alcohol. Consuming alcohol can lead to health problems such as mental and behavioural disorders, including alcohol dependence, major NCDs such as liver cirrhosis, some cancers and heart diseases, as well as injuries resulting from violence and road clashes and collisions.', '03 Nov', 'Pediatrician', 1020);

-- --------------------------------------------------------

--
-- Table structure for table `bookappointment`
--

CREATE TABLE `bookappointment` (
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DocName` varchar(255) NOT NULL,
  `Speaciality` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `video` int(11) NOT NULL,
  `physical` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookappointment`
--

INSERT INTO `bookappointment` (`FirstName`, `LastName`, `Email`, `Gender`, `DocName`, `Speaciality`, `Location`, `video`, `physical`) VALUES
('Vrushit', 'Patel', 'asd@gmail.com', 'male', 'Dr. Rajesh Shah', 'Dentist', 'Andheri', 0, 1),
('Vrushit', 'Patel', 'email2vrushit@gmail.com', 'male', 'Dr. Rajesh', 'Dentist', 'Andheri', 0, 1),
('Vrushit', 'Patel', 'asd@gmail.com', 'male', 'Dr. Rajesh', 'Cardiologist', 'Powai', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `covidform`
--

CREATE TABLE `covidform` (
  `Name` varchar(400) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Remark` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `covidform`
--

INSERT INTO `covidform` (`Name`, `Email`, `Phone`, `City`, `Remark`) VALUES
('Raj Shah', 'raj@gmail.com', 9856485691, 'Mumbai', 'High Fever and cold.');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `Image` varchar(400) NOT NULL,
  `Deg` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Speaciality` varchar(255) NOT NULL,
  `Tag` varchar(255) NOT NULL,
  `Exp` int(11) NOT NULL,
  `Places` varchar(400) NOT NULL,
  `Fees` int(11) NOT NULL,
  `tele` int(11) NOT NULL,
  `Contact` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`Image`, `Deg`, `Name`, `Speaciality`, `Tag`, `Exp`, `Places`, `Fees`, `tele`, `Contact`) VALUES
('https://img.techpowerup.org/201027/manoj.jpg', 'MBBS, Diploma in Cardiology, Fellowship in 2D Echocardiography', 'Dr. Manoj Gerela', 'Cardiologist', 'Cardiologist', 19, 'Mulund East, Mumbai;Malad West', 900, 1, 0),
('https://img.techpowerup.org/201027/surinder.jpg', 'MBBS, MD - General Medicine, DNB - Cardiology', 'Dr. Surinder Hansra', 'Cardiologist, Interventional Cardiologist', 'Cardiologist', 17, 'Kandivali East, Mumbai', 800, 1, 2071184639),
('https://img.techpowerup.org/201027/brijesh.jpg', 'DM - Cardiology', 'Dr. BRIJESH AGRAWAL', 'Cardiologist, Interventional Cardiologist', 'Cardiologist', 6, 'Chembur, Mumbai;Kandivali West, Mumbai', 1000, 1, 2048554730),
('https://img.techpowerup.org/201027/ramesh.jpg', 'MBBS, MD - General Medicine, DM - Cardiology', 'Dr. Ramesh Kawar', 'Cardiologist', 'Cardiologist', 20, 'Malad West, Mumbai', 1200, 1, 0),
('https://img.techpowerup.org/201027/kamales-kumar.jpg', 'MCh - Cardio Thoracic and Vascular Surgery', 'Dr. Kamales Kumar Saha', 'Cardiac Surgeon, Cardiothoracic and Vascular Surgeon, Thoracic Surgeon', 'Cardiologist', 25, 'Goregaon East, Mumbai', 2300, 1, 0),
('https://img.techpowerup.org/201027/dr-suhani.jpg', 'BDS', 'Dr. Suhani Talesara', 'Dentist', 'Dentist', 11, 'Durganager MMRDA, Andheri East, Mumbai;Mahakali Caves Road, Andheri East, Mumbai', 500, 1, 2071173924),
('https://img.techpowerup.org/201027/ashitesh.jpg', 'BDS, MDS - Orthodontics and Dentofacial Orthopaedics', 'Dr. Ashitesh Ajit Kumar', 'Orthodontist, Dentist, Dental Surgeon', 'Dentist', 8, 'Chembur East, Mumbai', 500, 0, 2071178198),
('https://img.techpowerup.org/201027/dr-yajuvendra.jpg', 'MBBS, MS - Orthopaedics', 'Dr. Yajuvendra Gawai', 'Orthopedist', 'Orthopedist', 20, 'Santacruz West, Mumbai;Vileparle West, Mumbai;Ghatkopar, Mumbai', 1200, 1, 0),
('https://img.techpowerup.org/201027/dr-hemant-bhandari.jpg', 'MBBS, MS - Orthopaedics', 'Dr. Hemant Bhandari', 'Orthopedist, Joint Replacement Surgeon', 'Orthopedist', 33, 'Bandra West, Mumbai;Marine Lines, Mumbai', 2000, 1, 2071173197),
('https://img.techpowerup.org/201028/dr-sujata-chitnis.jpg', 'MBBS, MD - Pediatrics', 'Dr. Sujata Chitnis', 'Pediatrician', 'Pediatrician', 36, 'Vileparle East, Mumbai', 1000, 0, 2048552218),
('https://img.techpowerup.org/201028/dr-pradeep-p-mathkar.jpg', 'MD - Pediatrics, MBBS', 'Dr. Pradeep P. Mathkar', 'Pediatrician', 'Pediatrician', 36, 'Ghatkopar West, Mumbai', 1000, 1, 2071173185),
('https://img.techpowerup.org/201028/dr-chandra-choksi.jpg', 'MD - Pediatrics, Diploma in Child Health (DCH)', 'Dr. Chandra Choksi', 'Pediatrician', 'Pediatrician', 31, 'Andheri West, Mumbai', 700, 1, 2248977831),
('https://img.techpowerup.org/201028/dr-kiran-vartak.jpg', 'MBBS, Diploma in Child Health (DCH), Diploma in Child Health (DCH), MRCP (UK)', 'Dr. Kiran Vartak', 'Pediatrician', 'Pediatrician', 33, 'Vileparle East, Mumbai;Andheri East, Mumbai', 800, 1, 2071173172),
('https://img.techpowerup.org/201028/dr-tejal-shetty.jpg', 'MBBS, MD - Pediatrics', 'Dr. Tejal Shetty', 'Pediatrician', 'Pediatrician', 25, 'Vileparle West, Mumbai;Santacruz West, Mumbai', 1000, 1, 2071189378),
('https://img.techpowerup.org/201028/vishal-sachade.jpg', 'MBBS, MD - Pediatrics', 'Dr. Vishal Sachade', 'Pediatrician', 'Pediatrician', 18, 'Borivali West, Mumbai;Borivali East, Mumbai', 600, 1, 2248933646),
('https://img.techpowerup.org/201028/dr-pallavi-gupta.jpg', 'MBBS, Diploma in Child Health (DCH)', 'Dr. Pallavi Gupta', 'Pediatrician', 'Pediatrician', 19, 'Malad West, Mumbai;', 600, 1, 2071173197),
('https://img.techpowerup.org/201028/dr-sanjeev-ahuja.jpg', 'MBBS, MD - Pediatrics, Diploma in Child Health (DCH)', 'Dr. Sanjeev Ahuja', 'Pediatrician', 'Pediatrician', 24, 'Powai, Mumbai', 900, 1, 2248905248),
('https://img.techpowerup.org/201028/joy-desai.jpg', 'MBBS, MD - General Medicine, DNB - Neurology', 'Dr. Joy Desai', 'Neurologist', 'Neurologist', 26, 'Peddar Road, Mumbai;Tardeo, Mumbai', 2300, 1, 2071173226),
('https://img.techpowerup.org/201028/dr-rima-chaudhari.jpg', 'MBBS, DNB - General Medicine, DM - Neurology', 'Dr. Rima Chaudhari', 'Neurologist', 'Neurologist', 10, 'Mulund West, Mumbai', 1500, 1, 0),
('https://img.techpowerup.org/201028/dr-shirish-hastak.jpg', 'MBBS, DNB - General Medicine, DM - Neurology', 'Dr. Shirish Hastak', 'Neurologist', 'Neurologist', 40, 'Parel, Mumbai', 3000, 1, 0),
('https://img.techpowerup.org/201028/dr-pankaj-ashok-agarwal.jpg', 'MBBS, MD - General Medicine, DNB - General Medicine, DM - Neurology', 'Dr. Pankaj Ashok Agarwal', 'Neurologist', 'Neurologist', 21, 'Parel, Mumbai', 2250, 1, 0),
('https://img.techpowerup.org/201028/dr-manoj-rajani.jpg', 'MBBS, DM - Neurology', 'Dr. Manoj Rajani', 'Neurologist', 'Neurologist', 20, 'Kandivali, Mumbai', 1500, 1, 2071173234),
('https://img.techpowerup.org/201028/dr-pravina-ushakant-shah.jpg', 'MBBS, MD - General Medicine, DM - Neurology', 'Dr. Pravina Ushakant Shah', 'Neurologist', 'Neurologist', 45, 'Mulund West, Mumbai', 1500, 1, 0),
('https://img.techpowerup.org/201028/dr-anu-agarwal.jpg', 'MBBS, MD - General Medicine, DNB - Neurology', 'Dr. Anu Agarwal', 'Neurologist', 'Neurologist', 14, 'Andheri West, Mumbai', 1500, 1, 2071173175),
('https://img.techpowerup.org/201028/dr-vinod-rambal.jpg', 'MCh - Neuro Surgery, MBBS, MS - General Surgery', 'Dr. Vinod Rambal', 'Neurosurgeon, Neurologist', 'Neurologist', 20, 'Powai, Mumbai;Mira Road, Mumbai;Nalasopara West, Thane', 1100, 1, 2048553517),
('https://img.techpowerup.org/201028/dr-hemant-bhansali.jpg', 'MBBS, MS - General Surgery, FCPS - General Surgery, FICS, Fellowship in Gastroenterology, PhD - Surgery', 'Dr. Hemant Bhansali', 'Gastroenterologist, Laparoscopic Surgeon, General Surgeon', 'Gastroenterologist', 40, 'Vileparle West, Mumbai', 1500, 1, 2071189378),
('https://img.techpowerup.org/201028/aruna-bhave.jpg', 'MBBS, DNB - Gastroenterology', 'Dr. Aruna Pradeep Bhave', 'Gastroenterologist', 'Gastroenterologist', 33, 'Mulund West, Mumbai', 1500, 1, 0),
('https://img.techpowerup.org/201028/dr-vinay-kumar-dhir.jpg', 'MBBS, MD - General Medicine, DNB - Gastroenterology', 'Dr. Vinay Kumar Dhir', 'Gastroenterologist', 'Gastroenterologist', 32, 'Mahim, Mumbai', 2900, 1, 2048553434),
('https://img.techpowerup.org/201028/dr-tariq-patel.jpg', 'MBBS, MD - General Medicine, DNB - Gastroenterology, DM - Gastroenterology', 'Dr. Tariq Patel', 'Gastroenterologist', 'Gastroenterologist', 32, 'Tardeo, Mumbai;Mazgaon, Mumbai', 1000, 1, 2071173226),
('https://img.techpowerup.org/201028/dr-geeta-malkan-billa.jpg', 'MBBS, MD - General Medicine, DM - Gastroenterology, DNB - Gastroenterology', 'Dr. Geeta Malkan Billa', 'Gastroenterologist', 'Gastroenterologist', 23, 'Powai, Mumbai', 1500, 1, 0),
('https://img.techpowerup.org/201028/sunil-shah.jpg', 'MBBS, DM - Gastroenterology, MD - General Medicine', 'Dr. Sunil Shah', 'Gastroenterologist', 'Gastroenterologist', 32, 'Gamdevi, Mumbai;Tardeo, Mumbai', 1500, 0, 2071173184),
('https://img.techpowerup.org/201028/dr-mehul-choksi.jpg', 'MBBS, MD - General Medicine, DM - Gastroenterology', 'Dr. Mehul Choksi', 'Gastroenterologist', 'Gastroenterologist', 19, 'Mahim, Mumbai;Vileparle West, Mumbai;Bandra West, Mumbai', 1500, 1, 2071189378),
('https://img.techpowerup.org/201028/dr-ashit-sheth.jpg', 'MBBS, M.D. (Psychiatry)', 'Dr. Ashit Sheth', 'Psychiatrist', 'Psychiatrist', 45, 'Marine Lines, Mumbai;Vileparle West, Mumbai', 5000, 1, 2071188518),
('https://img.techpowerup.org/201028/dr-hemangee-dhavale.jpg', 'MBBS, M.D. (Psychiatry)', 'Dr. Hemangee Dhavale', 'Psychiatrist', 'Psychiatrist', 44, 'Matunga, Mumbai;Mahim, Mumbai', 1100, 1, 2071173198),
('https://img.techpowerup.org/201028/dr-amit-desai.jpg', 'MBBS, M.D. (Psychiatry)', 'Dr. Amit Desai', 'Psychiatrist', 'Psychiatrist', 41, 'Peddar Road, Mumbai', 500, 1, 4049173495),
('https://img.techpowerup.org/201028/dr-bharat-r-shah.jpg', 'MBBS, M.D. (Psychiatry)', 'Dr. Bharat R. Shah', 'Psychiatrist', 'Psychiatrist', 35, 'Bandra West, Mumbai', 1500, 1, 2071173176),
('https://img.techpowerup.org/201028/dr-madhuri-singh.jpg', 'MBBS, M.D. (Psychiatry)', 'Dr. Madhuri Singh', 'Psychiatrist', 'Psychiatrist', 32, 'Andheri West, Mumbai;Vileparle West, Mumbai', 1500, 1, 2071173175),
('https://img.techpowerup.org/201028/dr-ketan-parmar.jpg', 'MBBS, DPM (Psychiatry), M.D. (Psychiatry)', 'Dr. Ketan Parmar', 'Psychiatrist, Sexologist, Addiction Psychiatrist, Forensic Psychiatrist, Geriatric Psychiatrist, Neuropsychiatrist, Clinical Psychologist', 'Psychiatrist', 31, 'Mira Road, Mumbai;Borivali East, Mumbai', 1100, 1, 2071173199),
('https://img.techpowerup.org/201028/dr-shaunak-ajinkya.jpg', 'MBBS, M.D. (Psychiatry)', 'Dr. Shaunak Ajinkya', 'Psychiatrist', 'Psychiatrist', 22, 'Andheri West, Mumbai', 1500, 1, 2048552994),
('https://img.techpowerup.org/201028/dr-jalpa-bhuta.jpg', 'MBBS, M.D. (Psychiatry), DNB - Psychiatry, Member of the Royal College of Psychiatrists, United Kingdom (MRC Psych), DPM (Psychiatry)', 'Dr. Jalpa Bhuta', 'Psychiatrist', 'Psychiatrist', 21, 'Parel, Mumbai;Santacruz West, Mumbai', 1600, 1, 2071187111),
('https://img.techpowerup.org/201028/ms-geeta-shenoy.jpg', 'BSc - Dietitics / Nutrition, Post Graduation Diploma in Dietetics', 'Ms. Geeta Shenoy', 'Therapist, Dietitian/Nutritionist, Sports Nutritionist', 'Dietitian', 30, 'Chembur East, Mumbai', 1500, 1, 2048552510),
('https://img.techpowerup.org/201028/zubeda-tumbi.jpg', 'Ph.D - Home Science (Food Science and Nutrition)', 'Dr. Zubeda Tumbi', 'Therapist, Dietitian/Nutritionist', 'Dietitian', 25, 'Andheri West, Mumbai', 1000, 1, 2248903738),
('https://img.techpowerup.org/201028/ms-dt-mehar-panjwani.jpg', 'Post Graduate Diploma in Clinical Nutrition & Dietetics', 'Ms. Dt. Mehar Panjwani', 'Therapist, Dietitian/Nutritionist', 'Dietitian', 22, 'Juhu, Mumbai', 2000, 1, 2048552972),
('https://img.techpowerup.org/201028/dr-nupur-krishnan.jpg', 'PhD - Clinical Nutrition, Post Graduate In Food Science And Nutrition', 'Dr. Nupur Krishnan', 'Therapist, Dietitian/Nutritionist', 'Dietitian', 21, 'Cuffe Parade, Mumbai', 2000, 1, 2071173182),
('https://img.techpowerup.org/201028/dr-hemangi-jhaveri.jpg', 'BHMS, Diploma in Clinical Nutrition, DHMS (Diploma in Homeopathic Medicine and Surgery), Diploma in Acupuncture', 'Dr. Hemangi Jhaveri', 'Dietitian/Nutritionist, Homoeopath', 'Dietitian', 18, 'SV Road, Mumbai', 1000, 1, 2071173225),
('https://img.techpowerup.org/201028/ms-chaitali-shah.jpg', 'B.Sc. - Home Science (Food & Nutrition), Diploma in Naturopathy & Yoga (NDDY)', 'Ms. Chaitali Shah', 'Therapist, Dietitian/Nutritionist', 'Dietitian', 23, 'Borivali West, Mumbai', 600, 1, 8037298996),
('https://img.techpowerup.org/201028/ms-kamna-bhandari.jpg', 'Post Graduation Diploma in Dietetics, B.Sc. - Home Science (Food & Nutrition)', 'Ms. Kamna Bhandari', 'Therapist, Dietitian/Nutritionist, Clinical Nutritionist', 'Dietitian', 20, 'Khar West, Mumbai', 2200, 1, 2248933268),
('https://img.techpowerup.org/201028/dr-seema-behl.jpg', 'MBBS, MS - Ophthalmology', 'Dr. Seema Behl', 'Ophthalmologist/ Eye Surgeon\r\n', 'Ophthalmologist', 30, 'Andheri East, Mumbai;Vileparle West, Mumbai', 1000, 1, 2071173233),
('https://img.techpowerup.org/201028/dr-phiroze-patel.jpg', 'MBBS, DOMS, MS - Ophthalmology, FRCS - General Surgery', 'Dr. Phiroze Patel', 'Ophthalmologist/ Eye Surgeon', 'Ophthalmologist', 29, 'Peddar Road, Mumbai', 1500, 1, 0),
('https://img.techpowerup.org/201028/dr-himanshu-mehta280.jpg', 'MBBS, DOMS, MS - Ophthalmology', 'Dr. Himanshu Mehta', 'Ophthalmologist/ Eye Surgeon', 'Ophthalmologist', 28, 'Bandra West, Mumbai;Juhu, Mumbai', 1500, 1, 2071173176),
('https://img.techpowerup.org/201028/dr-sonia-g-nankani.jpg', 'MS - Ophthalmology, MBBS', 'Dr. Sonia G. Nankani', 'Ophthalmologist/ Eye Surgeon', 'Ophthalmologist', 25, 'Sion East, Mumbai', 1000, 1, 2248933689),
('https://img.techpowerup.org/201028/dr-haresh-asnani.jpg', 'MBBS, DOMS, MS - Ophthalmology', 'Dr. Haresh Asnani', 'Ophthalmologist/ Eye Surgeon', 'Ophthalmologist', 27, 'Chembur East, Mumbai', 800, 1, 2071173181),
('https://img.techpowerup.org/201028/dr-leena-doshi.jpg', 'MS - Ophthalmology, DNB - Ophthalmology, MBBS', 'Dr. Leena Doshi', 'Ophthalmologist/ Eye Surgeon', 'Ophthalmologist', 24, 'Andheri West, Mumbai;Andheri East, Mumbai', 800, 1, 2071173172),
('https://img.techpowerup.org/201028/dr-nayan-thakkar.jpg', 'MBBS, DOMS, MS - Ophthalmology, DNB - Ophthalmology, FCPS- Ophthalmology', 'Dr. Nayan Thakkar', 'Ophthalmologist/ Eye Surgeon', 'Ophthalmologist', 27, 'Ghatkopar East, Mumbai', 1000, 0, 2048553987),
('https://img.techpowerup.org/201028/dr-shantanu-k-kundgir.jpg', 'MBBS, Diploma in Orthopaedics, FCPS - Orthopedic', 'Dr. Shantanu K Kundgir', 'Orthopedist\r\n', 'Orthopedist', 16, 'Bandra West, Mumbai;Bandra East, Mumbai', 1400, 1, 2071173175),
('https://img.techpowerup.org/201028/dr-shaival-chauhan.jpg', 'MBBS, DNB - Orthopedics/Orthopedic Surgery, Diploma in Orthopaedics', 'Dr. Shaival Chauhan', 'Joint Replacement Surgeon, Orthopedist', 'Orthopedist', 15, 'Ghatkopar West, Mumbai', 1000, 1, 0),
('https://img.techpowerup.org/201028/dr-pranjal-kodkani.jpg', 'MS - Orthopaedics, Diploma in Orthopaedics, MBBS', 'Dr. Pranjal Kodkani', 'Orthopedist\r\n', 'Orthopedist', 21, 'Bandra West, Mumbai;Dadar West, Mumbai;Marine Lines, Mumbai', 1250, 1, 2071173183),
('https://img.techpowerup.org/201028/dr-ashok-k-singhvi.jpg', 'MBBS, MS - Orthopaedics, M.Ch - Orthopaedics', 'Dr. Ashok K Singhvi', 'Orthopedist\r\n', 'Orthopedist', 43, 'Vileparle West, Mumbai', 2000, 1, 2071189378),
('https://img.techpowerup.org/201028/dr-vinod-agrawal.jpg', 'MS - Orthopaedics, M.Ch - Orthopaedics, Diploma in Orthopaedics, DNB - Orthopedics/Orthopedic Surgery, MBBS', 'Dr. Vinod Agrawal', 'Orthopedist, Joint Replacement Surgeon, Spine Surgeon', 'Orthopedist', 34, 'Bandra West, Mumbai;Andheri West, Mumbai;Kandivali West, Mumbai', 1800, 0, 2048553859),
('https://img.techpowerup.org/201028/dr-ashit-shah.jpg', 'MBBS, MS - Orthopaedics', 'Dr. Ashit Shah', 'Orthopedist, Joint Replacement Surgeon\r\n', 'Orthopedist', 30, 'Malad West, Mumbai;Kandivali West, Mumbai', 1000, 1, 2071173265),
('https://img.techpowerup.org/201028/parag-m-khatri.jpg', 'MDS - Periodontology and Oral Implantology, BDS', 'Dr. Parag M. Khatri', 'Periodontist, Cosmetic/Aesthetic Dentist, Implantologist\r\n', 'Dentist', 27, 'Andheri East, Mumbai', 500, 1, 0),
('https://img.techpowerup.org/201028/dr-jyoti-narla.jpg', 'BDS, MDS - Periodontics', 'Dr. Jyoti Narla', 'Periodontist, Dental Surgeon, Implantologist\r\n', 'Dentist', 20, 'Powai, Mumbai', 500, 1, 0),
('https://img.techpowerup.org/201028/dr-manish-kachhara.jpg', 'BDS', 'Dr. Manish Kachhara', 'Dentist, Implantologist, Cosmetic/Aesthetic Dentist\r\n', 'Dentist', 17, 'Ghatkopar East, Mumbai', 500, 1, 0),
('https://img.techpowerup.org/201028/parag-m-khatri.jpg', 'MDS - Periodontology and Oral Implantology, BDS', 'Dr. Parag M. Khatri', 'Periodontist, Cosmetic/Aesthetic Dentist, Implantologist\r\n', 'Dentist', 27, 'Andheri East, Mumbai', 500, 1, 0),
('https://img.techpowerup.org/201028/dr-jyoti-narla.jpg', 'BDS, MDS - Periodontics', 'Dr. Jyoti Narla', 'Periodontist, Dental Surgeon, Implantologist\r\n', 'Dentist', 20, 'Powai, Mumbai', 500, 1, 0),
('https://img.techpowerup.org/201028/dr-manish-kachhara.jpg', 'BDS', 'Dr. Manish Kachhara', 'Dentist, Implantologist, Cosmetic/Aesthetic Dentist\r\n', 'Dentist', 17, 'Ghatkopar East, Mumbai', 500, 1, 0),
('https://img.techpowerup.org/201028/swati-garekar.jpg', 'MBBS, Diplomater, American Board of Cardiology', 'Dr. Swati Garekar', 'Cardiologist', 'Cardiologist', 24, 'Mulund West, Mumbai', 1500, 1, 0),
('https://img.techpowerup.org/201028/nihar-mehta.jpg', 'DNB - Cardiology, MD - General Medicine, DNB - General Medicine, MBBS', 'Dr. Nihar Mehta', 'Cardiologist, Interventional Cardiologist', 'Cardiologist', 11, 'Peddar Road, Mumbai;Sion, Mumbai', 1300, 1, 2071173203),
('https://img.techpowerup.org/201028/dr-hasmukh-ravat.jpg', 'MBBS, MD - Medicine, DM - Cardiology', 'Dr. Hasmukh Ravat', 'Interventional Cardiologist, Cardiologist\r\n', 'Cardiologist', 34, 'Mulund West, Mumbai', 1500, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `doctorslogin`
--

CREATE TABLE `doctorslogin` (
  `DocName` varchar(400) NOT NULL,
  `ID` int(11) NOT NULL,
  `Password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctorslogin`
--

INSERT INTO `doctorslogin` (`DocName`, `ID`, `Password`) VALUES
('Dr Laila Dave', 1001, '1001DR'),
('Dr Rajesh Mistry', 1002, '1002DR'),
('Dr. Ashitesh Ajit Kumar', 1003, '1003DR'),
('Dr. Arun P Mehra', 1004, '1004DR'),
('Dr. Suresh H. Advani', 1005, '1005DR'),
('Dr. Gaurav Mehta', 1006, '1006DR'),
('Dr Nandkishore Kapadia', 1007, '1007DR'),
('Dr. Indira Hinduja.', 1008, '1008DR'),
('Dr. Rajan Shah', 1009, '1009DR'),
('Dr Jamshed Dalal', 1010, '1010DR'),
('Dr. Sumeet Pawar', 1011, '1011DR'),
('Dr. Amit Maydeo', 1012, '1012DR'),
('Dr. Mihir Bapat', 1013, '1013DR'),
('Dr. Vinay Kumaran', 1014, '1014DR'),
('Dr. Ramakanta Panda', 1015, '1015DR'),
('Dr. Umesh Khanna', 1016, '1016DR'),
('Dr.B.R. Ramesh Raor', 1017, '1017DR'),
('Dr. Anant Joshi', 1018, '1018DR'),
('Dr.M.B. Agarwal', 1019, '1019DR'),
('Dr. Ganesh Bakshi', 1020, '1020DR');

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `Image` varchar(400) NOT NULL,
  `Dept` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Speaciality` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Timing` varchar(255) NOT NULL,
  `Beds` int(11) NOT NULL,
  `Ambulances` int(11) NOT NULL,
  `Contanct` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`Image`, `Dept`, `Name`, `Speaciality`, `Address`, `Timing`, `Beds`, `Ambulances`, `Contanct`) VALUES
('https://img.techpowerup.org/201026/fortis.jpg', '7 Cardiologists', 'Fortis Hospital', 'Multi-Speciality Hospital', 'Mulund Goregaon Link Road, Industrial Area', '08:00 AM - 10:00 PM', 261, 2, 2071187418),
('https://img.techpowerup.org/201026/l-h-hiranandani-hospital.jpg', '4 Cardiologists', '\r\nDr L H Hiranandani Hospital', 'Multi-Speciality Hospital', 'Hiranandani Business Park, Powai, Mumbai', '08:00 AM - 08:00 PM', 244, 3, 2071177582),
('https://img.techpowerup.org/201026/apollo-spectra-hospitals-tardeo-building.jpg', '2 Cardiologists', 'Apollo Spectra Hospitals', 'Multi-Speciality Hospital', 'Tardeo Road,  Mumbai', '08:00 AM - 10:00 PM', 50, 0, 8049475027),
('https://img.techpowerup.org/201026/global.jpg', '2 Cardiologists', '\r\nGlobal Hospitals', 'Multi-Speciality Hospital', 'Parel, Mumbai', '07:00 AM - 09:00 PM', 200, 0, 4049174309),
('https://img.techpowerup.org/201026/jaslok.jpg', '11 Cardiologists', 'Jaslok Hospital', 'Multi-Speciality Hospital', 'Peddar Road, Mumbai', '24 x 7', 364, 5, 4049173564),
('https://img.techpowerup.org/201026/wockhart.jpg', '1 Cardiologists', 'Wockhardt Hospitals', 'Multi-Speciality Hospital', 'Mira Road, Mumbai', '24 x 7', 150, 2, 2048556367),
('https://img.techpowerup.org/201026/surana.jpg', '1 Cardiologists', '\r\nSurana Hospital And Research Center', 'Multi-Speciality Hospital', 'Near Orlem Church\r\nMalad West, Mumbai', '24 x 7', 120, 3, 2048555420),
('https://img.techpowerup.org/201026/sushrat.jpg', '1 Cardiologists', 'Sushrut Hospital and Research Center', 'Multi-Speciality Hospital', 'Chembur East, Mumbai', '09:00 AM - 05:30 PM', 132, 2, 2048556367),
('https://img.techpowerup.org/201026/nanavati.png', '11 Cardiologists', 'Nanavati Super Speciality Hospital', 'Multi-Speciality Hospital', 'Vileparle West, Mumbai', '24 x 7', 100, 8, 2071179000),
('https://img.techpowerup.org/201026/lilavati.jpg', '6 Cardiologists', '\r\nLilavati Hospital and Research Centre', 'Multi-Speciality Hospital', 'Bandra West, Mumbai', '24 x 7', 105, 7, 2071173176),
('https://img.techpowerup.org/201026/kokilaben.jpg', '4 Cardiologists', 'Kokilaben Dhirubhai Ambani Hospital', 'Multi-Speciality Hospital', 'Andheri West, Mumbai', '24 x 7', 132, 8, 2071173175),
('https://img.techpowerup.org/201026/s-l-raheja.jpg', '7 Cardiologists', 'S L Raheja Fortis Hospital', 'Multi-Speciality Hospital', 'Mahim, Mumbai', '8:00 AM - 10:00 PM', 140, 1, 2071185421),
('https://img.techpowerup.org/201026/breach.jpg', '4 Cardiologists', '\r\nBreach Candy Hospital', 'Multi-Speciality Hospital', 'Breach Candy, Mumbai', '24 x 7', 65, 2, 2071173180),
('https://img.techpowerup.org/201026/namaha-health-care-mumbai-1471589733-57b6ad6543604.jpg', '3 Cardiologists', '\r\nNamaha Health Care', 'Multi-Speciality Hospital', 'Kandivali West, Mumbai', '12:00 AM - 11:59 PM', 87, 3, 2071179000),
('https://img.techpowerup.org/201026/children.jpg', '1 Cardiologists', '\r\nThe Childrens Hospital Mumbai', 'Multi-Speciality Hospital', 'Malad West, Mumbai', '24 x 7', 100, 6, 2071189373),
('https://img.techpowerup.org/201026/fortis.jpg', '5 Neurologist', 'Fortis Hospital', 'Multi-Speciality Hospital', 'Mulund Goregaon Link Road, Industrial Area', '08:00 AM - 10:00 PM', 261, 2, 2071187418),
('https://img.techpowerup.org/201026/l-h-hiranandani-hospital.jpg', '3 Neurologist', '\r\nDr L H Hiranandani Hospital', 'Multi-Speciality Hospital', 'Hiranandani Business Park, Powai, Mumbai', '08:00 AM - 08:00 PM', 244, 3, 2071177582),
('https://img.techpowerup.org/201026/global.jpg', '2 Neurologist', '\r\nGlobal Hospitals', 'Multi-Speciality Hospital', 'Parel, Mumbai', '07:00 AM - 09:00 PM', 200, 0, 4049174309),
('https://img.techpowerup.org/201026/jaslok.jpg', '3 Neurologist', 'Jaslok Hospital', 'Multi-Speciality Hospital', 'Peddar Road, Mumbai', '24 x 7', 364, 5, 4049173564),
('https://img.techpowerup.org/201026/wockhart.jpg', '1 Neurologist', 'Wockhardt Hospitals', 'Multi-Speciality Hospital', 'Mira Road, Mumbai', '24 x 7', 150, 2, 2048556367),
('https://img.techpowerup.org/201026/sushrat.jpg', '1 Cardiologists', 'Sushrut Hospital and Research Center', 'Multi-Speciality Hospital', 'Chembur East, Mumbai', '09:00 AM - 05:30 PM', 132, 2, 2048556367),
('https://img.techpowerup.org/201026/nanavati.png', '6 Neurologists', 'Nanavati Super Speciality Hospital', 'Multi-Speciality Hospital', 'Vileparle West, Mumbai', '24 x 7', 100, 8, 2071179000),
('https://img.techpowerup.org/201026/lilavati.jpg', '1 Neurologists', '\r\nLilavati Hospital and Research Centre', 'Multi-Speciality Hospital', 'Bandra West, Mumbai', '24 x 7', 105, 7, 2071173176),
('https://img.techpowerup.org/201026/kokilaben.jpg', '1 Neurologists', 'Kokilaben Dhirubhai Ambani Hospital', 'Multi-Speciality Hospital', 'Andheri West, Mumbai', '24 x 7', 132, 8, 2071173175),
('https://img.techpowerup.org/201026/s-l-raheja.jpg', '2 Neurologists', 'S L Raheja Fortis Hospital', 'Multi-Speciality Hospital', 'Mahim, Mumbai', '8:00 AM - 10:00 PM', 140, 1, 2071185421),
('https://img.techpowerup.org/201026/breach.jpg', '1 Neurologists', '\r\nBreach Candy Hospital', 'Multi-Speciality Hospital', 'Breach Candy, Mumbai', '24 x 7', 65, 2, 2071173180),
('https://img.techpowerup.org/201026/namaha-health-care-mumbai-1471589733-57b6ad6543604.jpg', '1 Neurologists', '\r\nNamaha Health Care', 'Multi-Speciality Hospital', 'Kandivali West, Mumbai', '12:00 AM - 11:59 PM', 87, 3, 2071179000),
('https://img.techpowerup.org/201026/thunga.jpg', '1 Neurologist', '\r\nThunga Hospital', 'Multi-Speciality Hospital', 'Malad West, Mumbai', '12:00 AM - 11:55 PM', 140, 1, 2071172396),
('https://img.techpowerup.org/201026/hinduja-hospital.jpg', '1 Neurologist', '\r\nHinduja Hospital', 'Multi-Speciality Hospital', 'Mahim, Mumbai', '24 x 7', 50, 0, 2067325809),
('https://img.techpowerup.org/201026/sevenhills-hospital798.jpg', '1 Neurologist', '\r\nSevenHills Hospital', 'Multi-Speciality Hospital', 'Andheri East, Mumbai', '09:00 AM - 05:30 PM', 306, 1, 2248903971),
('https://img.techpowerup.org/201026/fortis.jpg', '3 Dentists', 'Fortis Hospital', 'Multi-Speciality Hospital', 'Mulund Goregaon Link Road, Industrial Area', '08:00 AM - 10:00 PM', 261, 2, 2071187418),
('https://img.techpowerup.org/201026/l-h-hiranandani-hospital.jpg', '5 Dentists', '\r\nDr L H Hiranandani Hospital', 'Multi-Speciality Hospital', 'Hiranandani Business Park, Powai, Mumbai', '08:00 AM - 08:00 PM', 244, 3, 2071177582),
('https://img.techpowerup.org/201026/jaslok.jpg', '3 Dentists', 'Jaslok Hospital', 'Multi-Speciality Hospital', 'Peddar Road, Mumbai', '24 x 7', 364, 5, 4049173564),
('https://img.techpowerup.org/201026/nanavati.png', '5 Dentists', 'Nanavati Super Speciality Hospital', 'Multi-Speciality Hospital', 'Vileparle West, Mumbai', '24 x 7', 100, 8, 2071179000),
('https://img.techpowerup.org/201026/lilavati.jpg', '2 Dentists', '\r\nLilavati Hospital and Research Centre', 'Multi-Speciality Hospital', 'Bandra West, Mumbai', '24 x 7', 105, 7, 2071173176),
('https://img.techpowerup.org/201026/s-l-raheja.jpg', '1 Dentist', 'S L Raheja Fortis Hospital', 'Multi-Speciality Hospital', 'Mahim, Mumbai', '8:00 AM - 10:00 PM', 140, 1, 2071185421),
('https://img.techpowerup.org/201026/breach.jpg', '3 Dentist', '\r\nBreach Candy Hospital', 'Multi-Speciality Hospital', 'Breach Candy, Mumbai', '24 x 7', 65, 2, 2071173180),
('https://img.techpowerup.org/201026/children.jpg', '3 Dentist', '\r\nThe Childrens Hospital Mumbai', 'Multi-Speciality Hospital', 'Malad West, Mumbai', '24 x 7', 100, 6, 2071189373),
('https://img.techpowerup.org/201026/sharan-hospital641.jpg', '2 Dentist', '\r\nSharan Hospital', 'Multi-Speciality Hospital', 'Ghatkopar West, Mumbai', '09:30 AM - 11:00 PM', 5, 2, 2048553282),
('https://img.techpowerup.org/201026/surya-hospitals.jpg', '1 Dentist', '\r\nSurya Hospitals', 'Multi-Speciality Hospital', 'Santacruz West, Mumbai', '08:00 AM - 09:00 PM', 70, 3, 2071187111),
('https://img.techpowerup.org/201026/sevenhills-hospital798.jpg', '1 Dentist', '\r\nSevenHills Hospital', 'Multi-Speciality Hospital', 'Andheri East, Mumbai', '09:00 AM - 05:30 PM\r\n', 306, 1, 2248903971),
('https://img.techpowerup.org/201026/hira-mongi-navneet-hospital.jpg', '1 Dentist', '\r\nHira Mongi Navneet Hospital', 'Multi-Speciality Hospital', 'Mulund West, Mumbai', '08:00 AM - 11:59 PM\r\n', 5, 0, 2071173200),
('https://img.techpowerup.org/201026/saifee-hospital.jpg', '5 Dentist', '\r\nSaifee Hospital', 'Multi-Speciality Hospital', 'Charni Road, Mumbai', ' 24 x 7', 256, 1, 2071173180),
('https://img.techpowerup.org/201026/bhatia-hospital.jpg', '1 Dentist', '\r\nBhatia Hospital', 'Multi-Speciality Hospital', 'Tardeo, Mumbai\r\n', '24 x 7', 209, 2, 2071173226),
('https://img.techpowerup.org/201026/masina-hospital.jpg', '6 Dentist', '\r\nMasina Hospital', 'Multi-Speciality Hospital', 'Byculla, Mumbai', '24 x 7', 232, 2, 2071173180),
('https://img.techpowerup.org/201026/surana.jpg', '1 Ayurveda', '\r\nSurana Hospital And Research Center', 'Multi-Speciality Hospital', 'Near Orlem Church\r\nMalad West, Mumbai', '24 x 7', 120, 3, 2048555420),
('https://img.techpowerup.org/201026/breach.jpg', '1 Ayurveda', '\r\nBreach Candy Hospital', 'Multi-Speciality Hospital', 'Breach Candy, Mumbai', '24 x 7', 65, 2, 2071173180),
('https://img.techpowerup.org/201026/ashwini-hospital.jpg', '1 Ayurveda', '\r\nAshwini Ayurvedic Hopsital', 'Ayurveda Hospital', 'Borivali West, Mumbai', '09:00 AM - 09:00 PM', 15, 0, 2071187111),
('https://img.techpowerup.org/201027/madhavbaug-clinic.jpg', '1 Ayurveda', '\r\nMadhavbaug Clinic', 'Multi-Speciality Hospital', 'Mira Rod, Mumbai', '10:00 AM - 07:00 PM', 10, 0, 2071173198),
('https://img.techpowerup.org/201027/aarogyam-ayurvedic-clinic.jpg', '1 Ayurveda', '\r\nAarogyam Ayurvedic Clinic', 'Ayurveda Hospital', 'Dadar West, Mumbai', '06:00 PM - 10:00 PM', 1, 0, 8037298999),
('https://img.techpowerup.org/201027/smt-kamladevi-gauri-dutt-mittal.jpg', '1 Ayurveda', '\r\nSMT. K.G. Mittal Hospital', 'Ayurveda Hospital', 'Charni Road, Mumbai', '09:00 AM - 06:00 PM', 1, 0, 2071173180),
('https://img.techpowerup.org/201027/vinayak-maternity-and-general-hospital.jpg', '1 Ayurveda', '\r\nVinayak Maternity And General Hospital', 'Multi-Speciality Hospital', 'Malad West, Mumbai\r\n', '07:30 AM - 10:30 PM', 8, 0, 2071173196),
('https://img.techpowerup.org/201027/pooja-maternity-nursing-home.jpg', '1 Ayurveda', '\r\nPooja Maternity Nursing Home & Ent Center', 'Multi-Speciality Hospital', 'Ghatkopar West, Mumbai', '24 x 7', 15, 0, 2071187883),
('https://img.techpowerup.org/201027/vivanta-hospital.jpg', '1 Ayurveda', '\r\nVivanta Hospital', 'Multi-Speciality Hospital', 'Malad West, Mumbai', '12:00 AM - 11:59 PM', 15, 0, 2248933641),
('https://img.techpowerup.org/201026/surana.jpg', '1 Ayurveda', '\r\nSurana Hospital And Research Center', 'Multi-Speciality Hospital', 'Near Orlem Church\r\nMalad West, Mumbai', '24 x 7', 120, 3, 2048555420),
('https://img.techpowerup.org/201026/breach.jpg', '1 Ayurveda', '\r\nBreach Candy Hospital', 'Multi-Speciality Hospital', 'Breach Candy, Mumbai', '24 x 7', 65, 2, 2071173180),
('https://img.techpowerup.org/201026/ashwini-hospital.jpg', '1 Ayurveda', '\r\nAshwini Ayurvedic Hopsital', 'Ayurveda Hospital', 'Borivali West, Mumbai', '09:00 AM - 09:00 PM', 15, 0, 2071187111),
('https://img.techpowerup.org/201027/madhavbaug-clinic.jpg', '1 Ayurveda', '\r\nMadhavbaug Clinic', 'Multi-Speciality Hospital', 'Mira Rod, Mumbai', '10:00 AM - 07:00 PM', 10, 0, 2071173198),
('https://img.techpowerup.org/201027/aarogyam-ayurvedic-clinic.jpg', '1 Ayurveda', '\r\nAarogyam Ayurvedic Clinic', 'Ayurveda Hospital', 'Dadar West, Mumbai', '06:00 PM - 10:00 PM', 1, 0, 8037298999),
('https://img.techpowerup.org/201027/smt-kamladevi-gauri-dutt-mittal.jpg', '1 Ayurveda', '\r\nSMT. K.G. Mittal Hospital', 'Ayurveda Hospital', 'Charni Road, Mumbai', '09:00 AM - 06:00 PM', 1, 0, 2071173180),
('https://img.techpowerup.org/201027/vinayak-maternity-and-general-hospital.jpg', '1 Ayurveda', '\r\nVinayak Maternity And General Hospital', 'Multi-Speciality Hospital', 'Malad West, Mumbai\r\n', '07:30 AM - 10:30 PM', 8, 0, 2071173196),
('https://img.techpowerup.org/201027/pooja-maternity-nursing-home.jpg', '1 Ayurveda', '\r\nPooja Maternity Nursing Home & Ent Center', 'Multi-Speciality Hospital', 'Ghatkopar West, Mumbai', '24 x 7', 15, 0, 2071187883),
('https://img.techpowerup.org/201027/vivanta-hospital.jpg', '1 Ayurveda', '\r\nVivanta Hospital', 'Multi-Speciality Hospital', 'Malad West, Mumbai', '12:00 AM - 11:59 PM', 15, 0, 2248933641),
('https://img.techpowerup.org/201027/vivanta-hospital.jpg', '1 Ayurveda', '\r\nVivanta Hospital', 'Multi-Speciality Hospital', 'Malad West, Mumbai', '12:00 AM - 11:59 PM', 15, 0, 2248933641),
('https://img.techpowerup.org/201027/dr-jonwals-niramaya-ayush-panchkarm-health-institute-and-research-hospital.jpg', '2 Ayurvedas', '\r\nDr. Jonwals Niramay Ayush Panchkarm Health Institute & Research Hospital', 'Multi-Speciality Hospital', 'Kandivali West, Mumbai', '08:30 AM - 07:00 PM', 15, 0, 2048552218),
('https://img.techpowerup.org/201027/dr-nikam-pile-hospital.jpg', '1 Ayurveda', '\r\nDr. Nikam Pile Hospital', 'Ayurveda Hospital', 'Prabhadevi, Mumbai', '08:30 AM - 01:30 PM', 3, 0, 2071173224),
('https://img.techpowerup.org/201027/siddhivinayak-hospital.jpg', '1 Ayurveda', '\r\nSiddhivinayak Hospital', 'Ayurveda Hospital', 'Kandivali East, Mumbai', '24 x 7', 6, 0, 2071173189),
('https://img.techpowerup.org/201027/arya-aushadhi-pharma.jpg', '2 Ayurvedas', '\r\nArya Aushadhi Pharma Mumbai Pvt Ltd', 'Multi-Speciality Hospital', 'Borivali, Mumbai', '08:30 AM - 08:30 PM', 0, 0, 2071173178),
('https://img.techpowerup.org/201027/jiva-ayurveda.jpg', '1 Ayurveda', '\r\nJIVA Ayurveda', 'Ayurveda Hospital', 'Kandivali East, Mumbai', '10:00 AM - 07:00 PM', 5, 0, 2048554718),
('https://img.techpowerup.org/201026/fortis.jpg', '4 Eye Doctors', 'Fortis Hospital', 'Multi-Speciality Hospital', 'Mulund Goregaon Link Road, Industrial Area', '08:00 AM - 10:00 PM', 261, 2, 2071187418),
('https://img.techpowerup.org/201026/l-h-hiranandani-hospital.jpg', '2 Eye Doctors', '\r\nDr L H Hiranandani Hospital', 'Multi-Speciality Hospital', 'Hiranandani Business Park, Powai, Mumbai', '08:00 AM - 08:00 PM', 244, 3, 2071177582),
('https://img.techpowerup.org/201026/jaslok.jpg', '4 Eye Doctors', 'Jaslok Hospital', 'Multi-Speciality Hospital', 'Peddar Road, Mumbai', '24 x 7', 364, 5, 4049173564),
('https://img.techpowerup.org/201027/ojas-eye-hospital.jpg', '5 Eye Doctors', '\r\nOjas Eye Hospital', 'Ophthalmology Hospital', 'Bandra West, Mumbai', '09:00 AM - 06:30 PM', 25, 0, 2071185306),
('https://img.techpowerup.org/201027/apollo-spectra-hospitals.jpg', '2 Eye Doctors', '\r\nApollo Spectra Hospitals', 'Multi-Speciality Hospital', 'Tardeo, Mumbai\r\n', '08:00 AM - 10:00 PM', 50, 1, 8049475027),
('https://img.techpowerup.org/201026/wockhart.jpg', '3 Eye Doctors', 'Wockhardt Hospitals', 'Multi-Speciality Hospital', 'Mira Road, Mumbai', '24 x 7', 150, 2, 2048556367),
('https://img.techpowerup.org/201027/arohi-eye-hospital.jpg', '5 Eye Doctors', '\r\nArohi Eye Hospital', 'Ophthalmology Hospital', 'Andheri West, Mumbai', '10:00 AM - 08:00 PM', 5, 0, 2071172896),
('https://img.techpowerup.org/201027/eye-solutions.jpg', '5 Eye Doctors', '\r\nEye Solutions - The complete eye hospital', 'Ophthalmology Hospital', 'Tardeo, Mumbai', '10:00 AM - 06:00 PM', 4, 0, 8037298998),
('https://img.techpowerup.org/201027/tandon-eye-hospital.jpg', '2 Eye Doctors', '\r\nTandon Eye Hospital and Lasik Centre', 'Multi-Speciality Hospital', 'Andheri West, Mumbai\r\n', '11:00 AM - 03:00 PM', 3, 0, 4049174124),
('https://img.techpowerup.org/201027/sohum-eye-care-center.jpg', '2 Eye Doctors', 'Sohum Eye Care Center', 'Ophthalmology Hospital', 'Borivali West, Mumbai', '24 x 7', 2, 0, 2048552504),
('https://img.techpowerup.org/201027/bhalanetra-eye-hospital.jpg', '1 Eye Doctors', '\r\nBhalanetra Super Speciality Eye Hospital', 'Multi-Speciality Hospital', 'Bhandup West, Mumbai\r\n', '09:30 AM - 02:30 PM', 5, 0, 8037298997),
('https://img.techpowerup.org/201027/criti-care.jpg', '5 Eye Doctors', '\r\nCriti Care Multi Speciality Hospital & Research Centre', 'Multi-Speciality Hospital', 'Andheri West, Mumbai\r\n', '24 x 7', 100, 2, 2071173175),
('https://img.techpowerup.org/201026/sevenhills-hospital798.jpg', '3 Eye Doctors', '\r\nSevenHills Hospital', 'Multi-Speciality Hospital', 'Andheri East, Mumbai', '09:00 AM - 05:30 PM\r\n', 306, 1, 2248903971),
('https://img.techpowerup.org/201026/hira-mongi-navneet-hospital.jpg', '4 Eye Doctors', '\r\nHira Mongi Navneet Hospital', 'Multi-Speciality Hospital', 'Mulund West, Mumbai', '08:00 AM - 11:59 PM\r\n', 5, 0, 2071173200),
('https://img.techpowerup.org/201026/lilavati.jpg', '7 Eye Doctors', '\r\nLilavati Hospital and Research Centre', 'Multi-Speciality Hospital', 'Bandra West, Mumbai', '24 x 7', 105, 7, 2071173176);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctorslogin`
--
ALTER TABLE `doctorslogin`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
