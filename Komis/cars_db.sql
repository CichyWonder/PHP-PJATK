DROP TABLE IF EXISTS `subscriber`;

CREATE TABLE `subscriber` (
  `subscriberID` int(10) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `phoneNumber` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`subscriberID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

DROP TABLE IF EXISTS `brand`;
CREATE TABLE `brand` (
  `brandID` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`brandID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


insert  into `brand`(`brandID`,`name`) values 
(1,'Alfa Romeo'),
(2,'Audi'),
(3,'Bentley'),
(4,'BMW'),
(5,'Citroen'),
(6,'Fiat'),
(7,'Ford'),
(8,'Mercedes'),
(9,'Nissan'),
(10,'Peugeot'),
(11,'Renault'),
(12,'Toyota'),
(13,'Volkswagen');


DROP TABLE IF EXISTS `car`;

CREATE TABLE `car` (
  `carID` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `brandID` int(3) NOT NULL,
  `address` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `price` double(13,2) NOT NULL,
  `addingDate` date NOT NULL,
  `status` varchar(45) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'opublikowany',
  `views` int(10) NOT NULL,
  `owner` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phoneNumber` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`carID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

insert  into `car`(`carID`,`name`,`description`,`brandID`,`address`,`image`,`price`,`addingDate`,`status`,`views`,`owner`,`phoneNumber`,`email`) values 
(1,'Audi A4 1.9 TDI (2005)','Klasa emisji: Euro 3<br>\r\nNapęd: Przedni<br>\r\nSkrzyniabiegów: Manual 5 biegów<br>\r\nIlość drzwi: 4/5 drzwi<br>\r\nIlość siedzień: 5 siedzeń<br>\r\n',2,'Hallera 15','AudiA4.jpg',4890.00,'2019-07-04','opublikowany',0,'Michał','123123','Michał@gmail.com'),
(2,'Audi A8 3.0 TDI (2008)','Klasa emisji: Euro 3<br>\r\nNapęd: 4x4<br>\r\nSkrzyniabiegów: Automatyczna<br>\r\nIlość drzwi: 4/5 drzwi<br>\r\nIlość siedzień: 5 siedzeń<br>\r\n',2,'Brzegi 5','AudiA8.jpg',9050.00,'2019-07-04','opublikowany',0,'Ola','321312','Ola@yahoo.com'),
(3,'BMW 316 2.0 D (2016)','Klasa emisji: Euro 6<br>\r\nNapęd: Przedni<br>\r\nSkrzyniabiegów: Automatyczna<br>\r\nIlość drzwi: 4/5 drzwi<br>\r\nIlość siedzień: 5 siedzeń<br>\r\n',4,'Polska 45','BMW316.jpg',9900.00,'2019-07-04','opublikowany',0,'Olaf','666666','Olaf@wp.pl'),
(4,'Audi A3 1.8i (2001)','Klasa emisji: Euro 4<br>\r\nNapęd: Przedni<br>\r\nSkrzyniabiegów: Manual 5 biegów<br>\r\nIlość drzwi: 2/3 drzwi<br>\r\nIlość siedzień: 5 siedzeń<br>\r\n',2,'Drzymały 5','AudiA3.jpg',1699.00,'2019-07-04','opublikowany',0,'Hubert','222222','Hubert@lazino.com'),
(5,'BMW X3 2.0 D (2007)','Klasa emisji: Euro 4<br>\r\nNapęd: 4x4<br>\r\nSkrzyniabiegów: Manual 6 biegów<br>\r\nIlość drzwi: 4/5 drzwi<br>\r\nIlość siedzień: 5 siedzeń<br>\r\n',4,'Maja 3','BMWX3.jpg',7000.00,'2019-07-01','opublikowany',1,'Jan','321123','jan@onet.pl'),
(6,'Fiat Grande Punto (2009)','Klasa emisji: Euro 4<br>\r\nNapęd: Przedni<br>\r\nSkrzyniabiegów: Manual 6 biegów<br>\r\nIlość drzwi: 4/5 drzwi<br>\r\nIlość siedzień: 5 siedzeń<br>\r\n',6,'Akacjowa 13','Fiat.jpg',3350.00,'2019-05-14','opublikowany',4,'Krzysztof','333333','Krzysztof@gmail.com'),
(7,'Ford Fiesta 1.3 (2003)','Klasa emisji: Euro 3<br>\r\nNapęd Przedni<br>\r\nSkrzyniabiegów: Manual 6 biegów<br>\r\nIlość drzwi: 4/5 drzwi<br>\r\nIlość siedzień: 5 siedzeń<br>\r\n',7,'Kościuski 67','Ford.jpg',2000.00,'2019-04-16','opublikowany',34,'Mariusz','123222','Mariusz@tlen.pl'),
(8,'Volkswagen Golf 2 (1989)','Klasa emisji: Euro 2<br>\r\nNapęd Przedni<br>\r\nSkrzyniabiegów: Manual 4 biegi<br>\r\nIlość drzwi:: 2/3 drzwi<br>\r\nIlość siedzień: 5 siedzeń<br>\r\n',13,'Kolorowa 23','Golf2.jpg',600.00,'2019-07-04','opublikowany',100,'Adam','123333','Adam@gmail.com');


