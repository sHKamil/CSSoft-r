-- MySQL dump 10.13  Distrib 8.3.0, for Linux (x86_64)
--
-- Host: localhost    Database: cssoft
-- ------------------------------------------------------
-- Server version       8.3.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `cssoft`
--

CREATE DATABASE IF NOT EXISTS `cssoft` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT ENCRYPTION='N';

USE `cssoft`;

--
-- Table structure for table `firmy`
--

DROP TABLE IF EXISTS `firmy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `firmy` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nazwa` varchar(100) NOT NULL,
  `adres` varchar(100) DEFAULT NULL,
  `nip` bigint NOT NULL,
  `opis` text,
  `data_dodania` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  CONSTRAINT `check_ten_digits` CHECK ((`nip` between 1000000000 and 9999999999))
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `firmy`
--

LOCK TABLES `firmy` WRITE;
/*!40000 ALTER TABLE `firmy` DISABLE KEYS */;
INSERT INTO `firmy` VALUES (3,'TechSolutions Sp. z o.o.','ul. Przemysłowa 23, 00-001 Warszawa',1234567890,'TechSolutions to firma specjalizująca się w dostarczaniu kompleksowych rozwiązań technologicznych dla firm różnych branż. Oferujemy usługi z zakresu projektowania oprogramowania, wdrażania systemów informatycznych oraz doradztwa technologicznego.','2024-04-14 18:54:29'),(4,'GreenGrowth Sp. z o.o.','ul. Zielona 5, 50-500 Wrocław',2345678901,'GreenGrowth zajmuje się produkcją i dystrybucją ekologicznych produktów spożywczych oraz kosmetyków. Nasza firma promuje zrównoważony rozwój i dbałość o środowisko naturalne poprzez oferowanie wysokiej jakości, ekologicznych produktów.','2024-04-14 18:54:46'),(5,'GlobalTrade Ltd.','123 Main Street, Suite 100, New York, NY 10001',3456789012,'GlobalTrade to międzynarodowa firma zajmująca się handlem międzynarodowym. Specjalizujemy się w importowaniu i eksportowaniu różnorodnych towarów, od elektroniki po produkty spożywcze. Nasza firma dąży do budowania mostów handlowych między różnymi krajami i regionami.','2024-04-14 18:55:01'),(6,'HealthFirst Clinic','789 Wellness Avenue, Suite 200, Los Angeles, CA 90001',4567890123,'HealthFirst Clinic to renomowany ośrodek medyczny specjalizujący się w kompleksowej opiece zdrowotnej. Oferujemy szeroki zakres usług medycznych, w tym konsultacje lekarskie, badania diagnostyczne, rehabilitację oraz opiekę stomatologiczną. Naszym celem jest zapewnienie pacjentom najwyższej jakości opieki zdrowotnej.','2024-04-14 18:55:16'),(7,'CreativeDesign Agency','321 Artistic Avenue, London, EC1R 0JX',5678901234,'CreativeDesign Agency to agencja reklamowa specjalizująca się w tworzeniu innowacyjnych kampanii reklamowych i projektowaniu graficznym. Nasz zespół skupia się na kreowaniu unikalnych i efektywnych strategii marketingowych, które pomagają naszym klientom w osiągnięciu ich celów biznesowych.','2024-04-14 18:55:29');
/*!40000 ALTER TABLE `firmy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pracownicy`
--

DROP TABLE IF EXISTS `pracownicy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pracownicy` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_firmy` int DEFAULT NULL,
  `imie` varchar(50) NOT NULL,
  `nazwisko` varchar(50) NOT NULL,
  `telefon` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `opis` text,
  `data_dodania` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pracownicy`
--

LOCK TABLES `pracownicy` WRITE;
/*!40000 ALTER TABLE `pracownicy` DISABLE KEYS */;
INSERT INTO `pracownicy` VALUES (4,3,'Anna','Kowalska','123456789','anna.kowalska@example.com','Anna to doświadczona programistka z pasją do tworzenia innowacyjnych rozwiązań oprogramowania. Posiada bogate doświadczenie w pracy z różnymi technologiami i jest zaangażowana w doskonalenie się w swojej dziedzinie.','2024-04-14 18:57:31'),(5,5,'Paweł','Nowak','234567890','pawel.nowak@example.com','Paweł jest ekspertem ds. marketingu internetowego, specjalizującym się w kampaniach reklamowych online. Jego kreatywność i analityczne umiejętności pomagają w skutecznym dotarciu do klientów i zwiększeniu widoczności marki.','2024-04-14 18:57:58'),(6,4,'Marta','Wiśniewska','345678901','marta.wisniewska@example.com','Marta to profesjonalna grafik komputerowy o wyjątkowym talencie artystycznym. Jej projektowanie graficzne wyróżnia się oryginalnością i estetyką, przyciągając uwagę klientów i podnosząc wartość wizerunku marki.','2024-04-14 18:58:20'),(7,6,'Michał','Lewandowski','456789012','michal.lewandowski@example.com','Michał jest doświadczonym specjalistą ds. obsługi klienta, z pasją do budowania trwałych relacji z klientami. Jego empatia i profesjonalizm sprawiają, że klient czuje się doceniony i zadowolony z usług.','2024-04-14 18:58:50'),(8,5,'Katarzyna','Dąbrowska','567890123','katarzyna.dabrowska@example.com','Katarzyna jest ekspertem ds. finansowych, specjalizującym się w analizie danych i zarządzaniu budżetem. Jej zdolności analityczne i dokładność pomagają w podejmowaniu świadomych decyzji finansowych.','2024-04-14 18:59:15'),(9,7,'Łukasz','Wójcik','678901234','lukasz.wojcik@example.com','Łukasz jest kreatywnym copywriterem z pasją do pisania treści, która przyciąga uwagę i angażuje odbiorców. Jego zdolności redakcyjne i umiejętność pisania skutecznych tekstów wspierają efektywne strategie marketingowe.','2024-04-14 18:59:35'),(10,3,'Agnieszka','Kaczmarek','789012345','agnieszka.kaczmarek@example.com','Agnieszka jest doświadczoną specjalistką ds. zasobów ludzkich, specjalizującą się w rekrutacji i rozwoju pracowników. Jej empatia i umiejętności interpersonalne wspierają budowanie pozytywnej atmosfery w miejscu pracy.','2024-04-14 18:59:56'),(11,3,'Piotr','Zając','890123456','piotr.zajac@example.com','Piotr jest ekspertem ds. IT, specjalizującym się w administracji systemami informatycznymi i wsparciu technicznym. Jego profesjonalizm i szybkość reakcji pomagają w utrzymaniu sprawnego działania infrastruktury IT.','2024-04-14 19:00:13'),(12,7,'Monika','Szymańska','901234567','monika.szymanska@example.com','Monika jest specjalistką ds. marketingu treści, posiadającą umiejętność tworzenia wartościowych materiałów promocyjnych. Jej strategie content marketingowe skutecznie angażują klientów i zwiększają świadomość marki.','2024-04-14 19:00:35'),(13,3,'Marcin','Woźniak','212345678','marcin.wozniak@example.com','Marcin jest doświadczonym menedżerem projektów, specjalizującym się w zarządzaniu zespołem i realizacji celów biznesowych. Jego umiejętność organizacji i skuteczne przywództwo wspierają sukcesywny rozwój projektów i osiąganie zamierzonych rezultatów.','2024-04-14 19:01:21');
/*!40000 ALTER TABLE `pracownicy` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-14 19:12:14