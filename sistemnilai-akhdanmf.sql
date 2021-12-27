/*
SQLyog Professional v13.1.1 (64 bit)
MySQL - 10.4.22-MariaDB : Database - spdn_mahasiswa
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`spdn_mahasiswa` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `spdn_mahasiswa`;

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `mahasiswas` */

DROP TABLE IF EXISTS `mahasiswas`;

CREATE TABLE `mahasiswas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `mahasiswas` */

insert  into `mahasiswas`(`id`,`nim`,`nama`,`kelas`,`email`,`password`,`no_telp`,`alamat`,`tanggal_lahir`,`created_at`,`updated_at`) values 
(1,'1197050067','Candrakanta Luhung Simbolon S.IP','C','zelaya.mandasari@example.net','$2y$10$Y9bskbnRKKPEjbWjp5tZh.iiRAPmPL3Xo7LaSvxiSQgyqv8bD0412','(+62) 201 0735 0363','Ki. Peta No. 594, Tasikmalaya 57953, Kalsel','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(2,'1197050107','Ibrahim Mahendra S.T.','D','uli.hastuti@example.org','$2y$10$eXo0bCFPJ22vWIFYlg11SuOAXyAHmKOPwsR5MrEMDkvnMlHs1wEoG','029 9536 252','Dk. Basoka Raya No. 563, Sukabumi 59756, Sumut','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(3,'1197050034','Kezia Pudjiastuti','A','lanang.maryati@example.com','$2y$10$MR5bgagSdit.kJD7tre2AuA.qXhKEbEb3.NGDRBgfRC5B2s3Qbci.','(+62) 426 6811 488','Ki. Ters. Jakarta No. 532, Pangkal Pinang 37389, Maluku','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(4,'1197050055','Natalia Suartini','C','lpradana@example.com','$2y$10$XyUQNz9tKUAxPk4t.uj9Eu9rptwfSSd.F5zQLcu8dlSsFii9Fe9PW','0535 3338 3179','Ki. Krakatau No. 696, Pagar Alam 79905, NTB','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(5,'1197050038','Sarah Aryani','E','maman39@example.org','$2y$10$9/C4EjGcvBfJ1U.tX45TXe8en1IMO2MoIosVILkEtWvEwBFHlK6Ca','0873 8838 1306','Ds. Baabur Royan No. 993, Balikpapan 74840, Sultra','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(6,'1197050087','Yahya Mangunsong S.Farm','E','thamrin.karja@example.com','$2y$10$dcll8n.hspvYiqbBUVoXLuAr6OR6dmpIq59nOUT76xHeitwnVe0jq','0506 3191 5988','Kpg. Mulyadi No. 329, Gunungsitoli 95895, Jabar','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(7,'1197050012','Dalimin Pratama S.H.','A','hassanah.aisyah@example.com','$2y$10$lp0iHVR5b4ctXu8ByRTOGuv16Hg40SclJ0Pm.r7Jb2kgTHtOAqF7e','0861 877 689','Jln. Sampangan No. 28, Probolinggo 12862, Sultra','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(8,'1197050001','Prabu Nababan','D','wulan83@example.org','$2y$10$OrmVW.VEk0FeJ/KhAlPz/.7kafz.lafOc3q7VKZNWvYeKg5mfOZGW','0637 6816 905','Kpg. Veteran No. 672, Semarang 62776, Kepri','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(9,'1197050070','Intan Hartati','B','santoso.prabawa@example.net','$2y$10$vH0rscMBTxOfT9hXp4v7NeXVV1AeoPzcjvkDWZhINxHo0Anm8zaDO','026 5371 117','Dk. Tambun No. 360, Palembang 85390, DIY','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(10,'1197050103','Shania Paulin Namaga M.M.','E','salimah35@example.net','$2y$10$pqBW4wgGCJ/6Wfy3pgoxg.jHi67ODwAPNvlna3LocINrNtSjbkCgC','(+62) 930 0134 462','Psr. Raden Saleh No. 699, Tebing Tinggi 50240, Lampung','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(11,'1197050046','Endah Purnawati','E','purwanto.widodo@example.org','$2y$10$Mlut191JA3Fnwe0YHlarFOoKrKeiHdtFowAImNH2la7AvbAdD5K/K','0373 4389 246','Psr. Tambak No. 329, Pekalongan 99798, Maluku','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(12,'1197050076','Ghaliyati Melani M.TI.','E','hariyah.irnanto@example.org','$2y$10$YDmxQ4YB.nobo1mFZGi4.OYIqchsGOdwDIngmBnqNHKZFA4xGMLBu','(+62) 570 9023 1504','Jr. Jayawijaya No. 446, Administrasi Jakarta Selatan 98799, Banten','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(13,'1197050002','Gandi Pratama','D','cici72@example.net','$2y$10$RdT22O5fqn2RxpOHT/6RpuI7TpHmEf2RWHsUSBc8jKfzvlSDnuvv2','(+62) 736 9189 982','Gg. Banal No. 578, Samarinda 78483, Bali','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(14,'1197050129','Cici Purwanti S.IP','D','bakiman87@example.org','$2y$10$xQ3IBbqrklJ9jPD3Yn5IgexaK5gA5ci93WRmO3Pj2ONRMseB6JUAe','0754 7994 4673','Ds. Panjaitan No. 784, Tebing Tinggi 37524, Riau','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(15,'1197050023','Yusuf Panca Haryanto S.Ked','B','nasyidah.maria@example.net','$2y$10$1NdsnZZ5Nt4m0cuAO5bnjegIIp5B2AEuIdZOIBYicwi5ekrGh2XMa','(+62) 354 5628 1496','Jln. Baranang Siang Indah No. 420, Tegal 39592, Bengkulu','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(16,'1197050018','Melinda Pertiwi','D','dinda98@example.org','$2y$10$24NFGieDXcdQ3EuA52/UtO1vaKRr2KxCxSFi5YvWsEBTTp24n4EM6','0232 6530 289','Ds. Rajawali No. 279, Administrasi Jakarta Utara 94554, Kaltim','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(17,'1197050124','Rizki Hasan Saputra M.Farm','D','iswahyudi.maya@example.com','$2y$10$1PTOFYnI3sAorCtd5bX.S.FnEqZb3L3dRuNLCbN0paOFMm2q0vJ1u','0506 0799 6467','Psr. Baiduri No. 860, Tangerang Selatan 76521, Kalteng','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(18,'1197050086','Queen Eli Mayasari','E','dhabibi@example.org','$2y$10$2dIjDEG.gJHyvL7zNTtiSuzFeH1/CpAVhBuB9x8X1U0zpaJ5PeIdy','0422 5518 087','Kpg. Peta No. 36, Sungai Penuh 26927, Sultra','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(19,'1197050022','Raihan Simbolon','D','njailani@example.net','$2y$10$/0hKKoX/lOpQJ/R3YhK5z.rFWpOA5V1G1Tc.xHwUunbPNMxnVYymi','0200 7683 715','Ki. Ters. Jakarta No. 3, Surakarta 96531, Jateng','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(20,'1197050063','Gandi Kurniawan S.E.I','C','hhalimah@example.net','$2y$10$MMO1a8NOXd94IPU6Gc/tD.iuusfzFd6cKJK0dMiqwBeVzkjqLUpNq','0575 3781 797','Gg. Industri No. 599, Tanjungbalai 14210, NTB','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(21,'1197050119','Rina Agustina','C','jzulaika@example.org','$2y$10$CY4yy5YafU2eL8/gj3ARn.TLJc3Mx7IITmHpUN6utuT3YN2btvQNS','(+62) 362 2299 9615','Psr. Samanhudi No. 920, Tual 62846, DIY','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(22,'1197050082','Victoria Widiastuti','E','hartaka.rajata@example.org','$2y$10$UntxlwZH4jiRHWo4sgqhOOxJJsby7/M7Et34aoV5coMMtHcW0Ymp6','0835 827 128','Dk. Yosodipuro No. 711, Palu 67643, Jabar','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(23,'1197050110','Cahya Maryadi Damanik','E','permata.xanana@example.com','$2y$10$5Idd0tZqdY0kuuRwMzjdfOWaLBCt7oDONcyH9Y4CdQ42zq1aCeeR6','0876 234 370','Jln. Suryo No. 499, Malang 93955, Jatim','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(24,'1197050112','Yessi Aryani S.E.I','B','ajimin.januar@example.com','$2y$10$CBtEjXEmqfMRknxiF.NsfOS3PBAOQ5Ln6312VlQTI66J6AB3nRs6i','(+62) 312 1234 107','Psr. Haji No. 132, Kendari 50646, Bengkulu','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(25,'1197050122','Umi Farida M.Farm','A','liman81@example.net','$2y$10$SR2Zcb0ETMiTeAy6uqVqs.fhinAXht0etbnySppOJMXFcqS2/4UOS','0823 8190 1094','Kpg. Kalimantan No. 667, Parepare 97354, Banten','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(26,'1197050113','Zaenab Novitasari','B','wasita.bakidin@example.org','$2y$10$/nsX2aVlT57C2wB2mgTQH.rrxJk6/hlIFbixpS5W5ZuY5HUlSZcG6','(+62) 874 8132 696','Ki. Kebangkitan Nasional No. 155, Jambi 56739, Kalteng','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(27,'1197050073','Zahra Zaenab Yuniar','B','nhastuti@example.org','$2y$10$F4R5HfbSMHA2KiY9NryxTOAUjEOhlmJk2Z2eQj5NsJm62O4eH3cPy','(+62) 665 7538 501','Psr. Laswi No. 560, Semarang 68297, DIY','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(28,'1197050049','Maida Juli Hassanah','E','karya39@example.com','$2y$10$J9rZvH7SiSILW520yjLNbukE009ODsfW4TTwG.TJiBLnP6aqXi2OC','0476 8591 729','Ki. Kebonjati No. 32, Sorong 30860, Sulbar','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(29,'1197050044','Rosman Jailani S.E.','C','cindy37@example.com','$2y$10$QkDQeJkscYI1VAAOxD5Ak.mQHv315Pu6sTUFm0/KAqAa3hWp6j9sW','(+62) 943 1688 555','Psr. Aceh No. 180, Banjarmasin 32259, Bengkulu','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(30,'1197050089','Wardi Gangsa Firmansyah M.Farm','B','samosir.queen@example.net','$2y$10$WTLFURX/pe6LZI7sYUipFeu452AWTT46EsOnnI8UO1dvjgXNZyA/i','0484 8995 986','Dk. Rajawali No. 400, Pariaman 91750, Banten','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(31,'1197050092','Hana Keisha Pertiwi S.I.Kom','C','isihotang@example.org','$2y$10$Ufv0.5nW6uZjzCRBmgo0Ie6fNiXtWm8nBpZXjxUhfi7mdxIlWw/sK','0851 2629 699','Jr. PHH. Mustofa No. 966, Tanjung Pinang 59100, Jatim','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(32,'1197050118','Dacin Sihombing S.H.','A','arta61@example.com','$2y$10$7dg5/xXMnidt8If8F46ftu7NZwdjCkTMft8FgvTvP.9BryidXMKpK','0214 8878 6200','Kpg. Agus Salim No. 465, Sibolga 60934, Jambi','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(33,'1197050077','Janet Wijayanti','B','cakrabuana64@example.net','$2y$10$tbtzw2diJk4dKYnOM4tG3.4RyyM3X7p1.O4RCXP3wbc0qBtCMrLNu','0620 8451 0607','Kpg. Ir. H. Juanda No. 917, Cirebon 53877, Sumsel','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(34,'1197050072','Lalita Rika Aryani S.H.','D','pradipta.asman@example.org','$2y$10$wYlAv2noR5GdKujl3ujjDOoFKLnIClgs9/B4OlR9GvRxFGyKjonva','(+62) 498 6680 1394','Kpg. Baing No. 529, Gorontalo 40418, Jabar','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(35,'1197050019','Teguh Prasasta','A','aslijan.sinaga@example.com','$2y$10$xbwcLpMD.lFXcaYgRlu8IO5U0q6L4KPHInDxa31ef3IAinndz/iYW','0222 2273 850','Kpg. Hang No. 946, Bengkulu 21296, Pabar','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(36,'1197050013','Jane Halima Nurdiyanti','A','rini26@example.com','$2y$10$RntdpTApLE.wt/IBgT2RaOFZDTlIFvIEcMVQO7zTlj3MkzhpwDulW','(+62) 961 3716 060','Jln. Flora No. 785, Ternate 36904, Kalbar','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(37,'1197050090','Aurora Hastuti','A','gilda53@example.net','$2y$10$xlXAw0EGs9vOf4YdHpeUbuwhd49uBzqA76X4kh9XQRyCjVp2weM8K','0675 5143 055','Kpg. W.R. Supratman No. 214, Pontianak 22841, Sumbar','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(38,'1197050006','Winda Puspita','D','rini.hutagalung@example.net','$2y$10$.OWsG1MXDcRqYNmM.5JR8.FkVEmdcxYqrC5utdNye.a9JS67/I69e','(+62) 21 0627 4355','Dk. Ir. H. Juanda No. 133, Palembang 49093, NTT','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(39,'1197050121','Waluyo Dabukke','D','yahya.haryanti@example.org','$2y$10$hZ29UMtyoZy0HaqsA4Mu9eOluEvtn1djZ7fvMkEp57c6aEauEY8VG','(+62) 561 8541 742','Dk. Madiun No. 651, Serang 20376, Riau','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(40,'1197050102','Zalindra Maryati','B','jane.widodo@example.org','$2y$10$r51EF3lFXz.eO3h3l3PxneAiWvT8XbuCt8Lm2OOx7ccOoZoBxddH.','(+62) 640 1744 403','Jr. Peta No. 899, Parepare 76682, Aceh','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(41,'1197050109','Harjasa Sinaga','C','msitumorang@example.org','$2y$10$3HNPJcDsFRrfMA2OGjsoMe5AQj5Zt6aPUc/Xvpsi0ILqSCl2FT60e','(+62) 659 8075 9792','Jln. Banal No. 994, Batu 10939, Kalteng','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(42,'1197050041','Jelita Astuti','D','ana.saptono@example.org','$2y$10$wuXYZ9WxUDrDVE.Yb7jQSuKG5OI/2L/ujueiedDq816WjWily0/9u','0874 8046 416','Gg. Jamika No. 290, Padang 46855, Kalbar','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(43,'1197050030','Tiara Laksita','B','nrima.widiastuti@example.com','$2y$10$byNcaUhA.Jr3.5aGiytse.Azv.RBYSGQVRFFIKHqF4y0khpP4LeFG','0885 4701 464','Jr. Bakau Griya Utama No. 122, Tangerang Selatan 90124, NTB','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(44,'1197050100','Hartaka Anggriawan','C','kuswandari.hari@example.com','$2y$10$Nh1l2BlprTGasNNcQ8SxHe.jc.FB5A8iBhQGXFwOAPdXd3t7mOKE6','023 8438 493','Ki. Cokroaminoto No. 38, Makassar 18261, Kalsel','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(45,'1197050123','Rika Anggraini M.TI.','A','rahmawati.darman@example.com','$2y$10$nXdk998xSXOfvkgwK2zTFe7DqxOYNtO2FMFkvZIuMnuK8fj18Z26a','(+62) 495 4293 2725','Jln. K.H. Wahid Hasyim (Kopo) No. 121, Banjar 88544, Jatim','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(46,'1197050099','Dagel Surya Budiman','C','mahmud57@example.org','$2y$10$JopmtjlO3T74Nh9PHQwv1u1wzOPxci86UeorYSjZdgXGGN0SyJYC2','(+62) 774 1631 5874','Ds. Ki Hajar Dewantara No. 915, Denpasar 51228, Papua','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(47,'1197050088','Jagaraga Luwes Pranowo','B','sudiati.manah@example.com','$2y$10$XMfocO2o3q9.Hmrz3GqRweXyGkyWjkqnGNJED1kguS8PGRSGDjWL6','(+62) 374 0780 084','Jr. Suryo Pranoto No. 495, Pagar Alam 57303, Gorontalo','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(48,'1197050060','Eva Andriani','B','genta.laksmiwati@example.net','$2y$10$iY212CB8AQEG0tSEjdxc3eDQCOwKhl97vXF91sVs1s6A7oo5d3d.u','(+62) 830 8984 7050','Kpg. Yos No. 372, Padangsidempuan 29170, Maluku','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(49,'1197050084','Galak Hidayat M.M.','B','humaira69@example.com','$2y$10$5tf1mWScn3F4uZYCIcDNoeGKRNOI1iFKw1C2.VZQQM5iaC43Nn/3G','(+62) 892 086 508','Dk. Baranang Siang No. 698, Bontang 44885, Sumbar','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(50,'1197050008','Jelita Widiastuti','B','okto76@example.net','$2y$10$nf.fxp1vStOxkVYHuTAy1ekRRHSAtYrDQ1fxqxDJlGq4GpjEZv6IG','0653 4229 7834','Kpg. Fajar No. 884, Banjarmasin 20251, Kaltara','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(51,'1197050048','Saka Sinaga','A','dpertiwi@example.com','$2y$10$6t5JR6MGCgQVfV8fSL.VkuMHhI9bOkgpEIneXSvpCxq1RRJlie1v2','0707 2245 602','Ki. Baranang Siang No. 307, Banjarbaru 64028, Kalbar','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(52,'1197050125','Ihsan Eka Pradana','D','yulianti.nabila@example.org','$2y$10$rOe4knksFp.Lopaetqxid.ehynJl7kczQV66lvk7eSmEpv8EhATCu','(+62) 540 7890 6789','Psr. K.H. Maskur No. 694, Cilegon 25272, Sultra','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(53,'1197050050','Diah Hartati','B','maria.usamah@example.net','$2y$10$ZxFJUdKoigLuakwu8k8gf.wuAynay94QVcdnzDuzrroaSH.EIoiMW','(+62) 861 6402 947','Jln. Pahlawan No. 142, Pekalongan 26344, Sumut','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(54,'1197050131','Tiara Puspita','A','ikhsan89@example.com','$2y$10$tnt3kaA95xOzxALA/Tn6tOqBKomTW.YBftLcuRmXVAEno4xxvQML6','0875 372 642','Jr. Suryo Pranoto No. 630, Dumai 13932, Gorontalo','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(55,'1197050111','Aslijan Megantara S.E.','A','lulut35@example.com','$2y$10$nLtlhgdJtyuOPJ4aeY4Q/e/deckRKiDjlENkrGKj6PvfeAm2ueWTK','0249 2702 785','Kpg. Jakarta No. 195, Bitung 40866, Sumbar','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(56,'1197050066','Zaenab Sudiati','A','samiah.haryanto@example.net','$2y$10$rarv9Cek4yFGvyMPen.QJOD1KSyLMfOG1bxitWWYQidG9ua8hkthi','(+62) 833 0679 7578','Jr. Asia Afrika No. 818, Ambon 38826, Sultra','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(57,'1197050094','Ismail Thamrin','D','hutagalung.suci@example.net','$2y$10$f6YPhK3Hj4g1M8YxsYJno.wIkTWuj19o..fs17Q/dkn9GITWFbaOa','025 7554 6559','Ds. BKR No. 324, Administrasi Jakarta Pusat 72643, Sulteng','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(58,'1197050128','Michelle Winarsih','D','usamah.pranata@example.org','$2y$10$SyWJVxxnNDjUirk6yze5Gu3tkEKQB6qOR03RAxnVz6SwoFAUW4pOC','(+62) 436 4581 841','Jln. Karel S. Tubun No. 26, Lhokseumawe 30324, Sumsel','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(59,'1197050054','Paris Nasyiah','E','kawaca.maryadi@example.com','$2y$10$XYliflaxKAbVRR1yp45OgeThP326Mik9gUQG2B9M3dZrWhGoHe/z2','(+62) 790 5232 764','Kpg. Dipenogoro No. 530, Malang 17692, DIY','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(60,'1197050004','Muni Pranowo','C','wacana.violet@example.com','$2y$10$SHSlXklO7sJx0KdN.Xot4.d46ZDAZr6KED7jIuHd5yRmI0u.IojZK','(+62) 760 7659 617','Kpg. Imam Bonjol No. 492, Prabumulih 71956, Bengkulu','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(61,'1197050104','Cakrabirawa Pratama','C','ajiono.mangunsong@example.com','$2y$10$w7AF.pdcINrhvW0JP7m/BO4a1WPkSE4G4EjNk8QvmedqZmtmJPSnm','0405 6435 828','Jln. Pasir Koja No. 436, Mataram 70059, Sulteng','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(62,'1197050127','Ika Citra Prastuti','D','reksa66@example.com','$2y$10$64jWEHZZpVHjSjW2/rx2CeXCI4T4j0Vkwmd9X8QYwWgPtWbBFA5GK','0264 9586 0929','Jln. Wahid No. 494, Samarinda 93018, Jabar','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(63,'1197050056','Karna Hidayanto','C','pradana.nabila@example.com','$2y$10$xliMF5TSdEo.3l8dgzFJGO.GbB.jPp74xFn8RtKznOBv3hgeBAR.2','0439 7695 002','Jr. Salak No. 835, Pontianak 90225, Kalsel','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(64,'1197050020','Nadia Haryanti','A','eluh94@example.org','$2y$10$4Ny7c23wTfKWLaLMGzzwIe4/ILt8UyJ0NbyX96b2CR58t.5DRpEiS','(+62) 670 5206 2941','Ds. Ters. Pasir Koja No. 58, Tidore Kepulauan 23145, Bengkulu','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(65,'1197050009','Dina Nuraini','D','latupono.nasim@example.com','$2y$10$6rY1mtspIGB1tLCCLWLUSuOnIXBgAccSgDLtRt4DTp0JhkdZzJfNC','0542 8393 6778','Jln. Untung Suropati No. 522, Bukittinggi 41978, Kalsel','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(66,'1197050081','Titin Laksita','E','uwais.cengkal@example.com','$2y$10$oF2j7xAnUsOSzg5V.nWEIOTtlXEIQUVOcyzSotbquShaadHIwWOSy','(+62) 353 1483 8486','Jln. Cokroaminoto No. 279, Lhokseumawe 58003, Lampung','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(67,'1197050011','Fathonah Melani','E','eli49@example.org','$2y$10$FwdYz8XCz.tTR8UExl6Asuzc3mQotEA51plEyb9FzQ92uPDIQf9oq','(+62) 720 6491 3490','Gg. Ciumbuleuit No. 230, Dumai 82473, DIY','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(68,'1197050024','Paris Hartati','D','marpaung.eka@example.net','$2y$10$7S0lXzZJz99lJK5P/q3zzO9MERhxoiF7RgCdhWEP8EdA1niN1omiS','0957 0919 5433','Psr. Hang No. 629, Banjarmasin 72087, Sultra','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(69,'1197050037','Dadap Nainggolan','E','ehakim@example.net','$2y$10$ez7Ljjs/3RWoL.c0u.OgZel3xuUzwnIFkyC3B6OlAN2QZElGsyVxG','0734 5981 6204','Dk. Ir. H. Juanda No. 508, Pangkal Pinang 85240, Kalsel','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(70,'1197050058','Bagus Nugroho','A','banara.wahyuni@example.org','$2y$10$BtZw1SIB6JwBjLLP3sw6IeYqcUn7YxHnJsNxDZ/1B.HKw/DYp.OS2','(+62) 674 9380 074','Gg. Ahmad Dahlan No. 528, Tangerang 22992, Aceh','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(71,'1197050097','Siti Hassanah','C','eva51@example.com','$2y$10$YFMX2XVsu./oDMnPo9/AK.yy9cIUW9ddktynNwHtv1fV1crxz1lfS','(+62) 513 0026 3959','Gg. Bahagia No. 398, Tebing Tinggi 94496, Jateng','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(72,'1197050053','Lasmono Rajasa','A','budi05@example.org','$2y$10$iq4MA9nxnfxU3YQheuhYO.3MzojiVocVBm/TI1uu3jRJ6n1G52G/6','(+62) 809 0671 7152','Ds. Dahlia No. 986, Pontianak 13105, NTB','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(73,'1197050115','Ira Lailasari S.H.','E','kiandra09@example.com','$2y$10$KPPLwJOjPks9.b3NuIIwAeLvXCAM250tamlnhoZkq0y6fOhkxfYMq','(+62) 352 9465 778','Ds. Bhayangkara No. 524, Administrasi Jakarta Pusat 29696, Maluku','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(74,'1197050079','Cengkir Kariman Maulana S.Psi','E','prabowo.zulfa@example.org','$2y$10$isyzXgeGoXv5RnsyNOms3OrmYW/fXcj6/Yn02HDFwFD2raXwLy6Fi','0793 0041 9597','Kpg. Rajawali Barat No. 732, Tegal 27309, Sulbar','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(75,'1197050136','Bakidin Ian Widodo','D','dimaz58@example.com','$2y$10$nuz6JBt.zhGOqgYiz4rD0.CocnsNbIb/2CdKP39RwOGffxQmQ/Loe','(+62) 25 6393 2592','Dk. K.H. Maskur No. 82, Blitar 41081, Sultra','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(76,'1197050126','Emil Sinaga M.Kom.','D','firgantoro.karimah@example.com','$2y$10$D4VcOMOKI8ougfrn8Mj8o.KohkICXnBwm/dZU3FdNnhsfmhgBtpiW','(+62) 817 0123 0414','Jln. Suryo No. 446, Pekalongan 86017, Malut','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(77,'1197050040','Dalima Widya Pratiwi','A','indah33@example.net','$2y$10$65VXP4PTGDGKsURyC/VJpeqov134IxKFaCMwmX8x9XFfmy8gOkPQu','(+62) 397 6323 0627','Ki. Bah Jaya No. 218, Bima 84909, Kalbar','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(78,'1197050065','Anita Kusmawati','A','simanjuntak.darimin@example.org','$2y$10$eyPGAYNQJ8Ki2U08uSFM2.QIqv8IsEmW2ZUL8vMcKaPtwRI9nWCcO','0210 9387 0354','Psr. Arifin No. 614, Payakumbuh 88637, Papua','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(79,'1197050062','Nurul Pertiwi','A','fathonah93@example.net','$2y$10$FulReNM9sGrji.5/e1CrQewKiQ/uTs493c.O.Lgl4/Qznyab8Oype','(+62) 497 1124 257','Ki. Katamso No. 195, Pekanbaru 55306, Jatim','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(80,'1197050029','Balijan Habibi','E','kamaria46@example.com','$2y$10$uJSlc2LeAThKxuhm43tST..2AAJev6L9ckinSwnWHJtDCOI6GH7Sm','(+62) 727 4598 1221','Jln. Baya Kali Bungur No. 928, Administrasi Jakarta Timur 19410, Sumsel','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(81,'1197050003','Jarwa Prasasta','A','hhariyah@example.net','$2y$10$4NbBT3ogOVOx71/EIWUmk.R8W5SfXCLorydRhmzOm8ZqEuaUDUCcu','(+62) 746 6712 416','Gg. Hang No. 719, Ternate 92641, Kaltim','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(82,'1197050016','Bakiono Yusuf Sihombing','E','kdamanik@example.org','$2y$10$9ES4sgcn9cE4vOdM9poJ0uPXLAVxKn/PW7hSULKyWBXRRSUkcuBuO','(+62) 975 2490 5232','Ki. Imam No. 93, Administrasi Jakarta Timur 30320, Lampung','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(83,'1197050035','Julia Mayasari','E','kuswandari.mursita@example.org','$2y$10$fHQe/OgQ/lJlY3DTd8IO5eDg6Tv4UQdZl3512iLvJsyceNc234Ocy','(+62) 467 8230 075','Gg. Rajawali Barat No. 15, Lhokseumawe 83042, Sumbar','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(84,'1197050045','Chelsea Wahyuni M.Ak','C','kamila50@example.net','$2y$10$eIFZSnu9lLk7Swy77mDnI.v/thpp3DeyPgYnB3J24JhxzgyItfswq','(+62) 869 2724 960','Jr. Umalas No. 22, Administrasi Jakarta Pusat 10486, Kalbar','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(85,'1197050026','Elvin Wijaya','D','galuh94@example.net','$2y$10$TcGAE2FZ2/bSf3kJn.DTj.DN7VIHJgXdMuhC01Ux1W/HlhPj.ptpi','(+62) 712 7385 2459','Jln. Honggowongso No. 841, Madiun 83526, Kalbar','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(86,'1197050093','Aurora Fathonah Wahyuni M.Ak','C','maryati.cayadi@example.org','$2y$10$PTCso2tKCVl/6FyEDSy50OwAbpCfbCzZ7TMFMQlo0Xdyvl0Fsqqa6','(+62) 520 0968 1069','Gg. Baya Kali Bungur No. 875, Cilegon 44997, Papua','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(87,'1197050057','Lembah Damu Gunawan S.Farm','C','gatot.hassanah@example.com','$2y$10$A1lOsB3cCNZjqk025fIHi.XAaFWPB8dZGm4ZAcNZN7lljgbtnAjQO','0836 2893 377','Jr. Sam Ratulangi No. 781, Pangkal Pinang 59235, Kalbar','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(88,'1197050071','Mulyanto Galuh Prasasta','C','anastasia92@example.net','$2y$10$12RVvsEARQ67b2sTZBcAU.J858EUEvsq72fj/FUHbFBInp6JOOuGe','(+62) 716 2729 3981','Kpg. Baja No. 365, Depok 80318, Bali','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(89,'1197050025','Carla Zamira Hasanah','B','nardi16@example.net','$2y$10$Uc8hP9oSK0FnexFhllTajeDpTd8DsPV4/tOp/lz5FOejZRo5UER2m','(+62) 276 3026 3895','Ki. W.R. Supratman No. 97, Jayapura 66990, Kaltara','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(90,'1197050101','Capa Garang Siregar S.T.','D','mandasari.ghani@example.org','$2y$10$Q.G9b//Pt5N/M33ABKG.BO44/rs4zF77Blayo50NxVGMTovZK8p/6','0272 1677 773','Gg. Yohanes No. 750, Kupang 63796, Jabar','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(91,'1197050108','Mitra Pranowo','A','nurdiyanti.tri@example.com','$2y$10$yb86PN6yVwYvG8CbSKFDJevRkWweYQdpR6woqxRPDykmpv3OKyPCe','(+62) 551 9388 422','Ds. Peta No. 589, Tarakan 12154, Sulsel','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(92,'1197050098','Mutia Pudjiastuti','C','nabila.oktaviani@example.com','$2y$10$72tO.urvn2I60pSNhpXCq.mReOMdrqaSgmYSCT7wqZlpK0WD3xqn.','0483 4035 5878','Ki. Eka No. 387, Bitung 21578, Kalsel','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(93,'1197050021','Luwes Zulkarnain','B','warta.wacana@example.com','$2y$10$VKMTK2E49Tvpzp8BLQl5AOvJl7b5XfKMKbpDsRsMPeZnle/tqPBza','(+62) 805 1391 5836','Jln. Baranang No. 850, Pematangsiantar 48616, Papua','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(94,'1197050114','Halim Narpati','B','najmudin.lidya@example.net','$2y$10$nBryfPAENfTqoG6XtttHB.6LNoSxm7imGNzxD0MigEOCBbegVp.xO','0440 0314 7429','Ds. Agus Salim No. 276, Metro 30882, Pabar','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(95,'1197050120','Tari Pudjiastuti S.Kom','E','juli.pudjiastuti@example.com','$2y$10$TH4w/ls0YxK44VdsLLOaY.RwzpPBAVaH1ZOOnrEQ06jSH0W8lVwH2','027 6216 704','Psr. Kyai Mojo No. 965, Administrasi Jakarta Timur 13511, Kaltara','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(96,'1197050047','Sadina Icha Wahyuni','D','yusada@example.net','$2y$10$/1Rlh/aAAP/XO01N.NULj.5vobHrluqtqGtwkkxu0Vbg0YbjHiOAa','0743 8376 924','Jln. Suryo No. 647, Palu 57349, NTT','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(97,'1197050031','Rafid Kalim Prasetyo M.Farm','C','ibun97@example.com','$2y$10$JY9hz1FH0CnDcSxKX64t3.xcEPKvgGHtgt9CutEu55UaKWqf7C1vi','(+62) 802 069 883','Ds. Tangkuban Perahu No. 90, Tanjung Pinang 23173, Banten','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(98,'1197050017','Okta Najmudin','E','irsad.sihombing@example.org','$2y$10$deabzoPC8vy43ANAmEE7fuokrC6F3jd1iMY/GXhJyoOkFuym3J36e','0741 6177 588','Psr. K.H. Wahid Hasyim (Kopo) No. 207, Banda Aceh 59844, Sulsel','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(99,'1197050085','Paramita Wirda Mandasari','A','calista32@example.net','$2y$10$rkdydghsu4MKlioILnpWqe0dhnk5ucIN7KDVIfChMyudp7nj8BgGO','(+62) 766 1872 376','Dk. Basuki Rahmat  No. 845, Samarinda 34864, Kepri','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16'),
(100,'1197050078','Ella Susanti','A','narji84@example.org','$2y$10$wmxjG9sBET4LLpf10qTJsOSRm2C256W7NmCnG63ASOARqx.otPSvi','0207 0324 713','Psr. Baja No. 386, Pariaman 82600, Aceh','2002-12-31','2021-12-26 19:36:16','2021-12-26 19:36:16');

/*Table structure for table `mata_kuliahs` */

DROP TABLE IF EXISTS `mata_kuliahs`;

CREATE TABLE `mata_kuliahs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sks` int(11) NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `mata_kuliahs` */

insert  into `mata_kuliahs`(`id`,`nama`,`sks`,`semester`,`created_at`,`updated_at`) values 
(1,'Pemrograman Aplikasi Web',2,'5',NULL,NULL),
(2,'Praktikum Pemrograman Aplikasi Web',1,'5',NULL,NULL),
(3,'Pemrograman Aplikasi Mobile',2,'5',NULL,NULL),
(4,'Praktikum Pemrograman Aplikasi Mobile',1,'5',NULL,NULL),
(5,'Jaringan Komputer',2,'5',NULL,NULL),
(6,'Praktikum Jaringan Komputer',1,'5',NULL,NULL),
(7,'Manajemen Basis Data',2,'5',NULL,NULL),
(8,'Praktikum Manajemen Basis Data',1,'5',NULL,NULL),
(9,'Intelegensia Buatan',3,'5',NULL,NULL),
(10,'Manajemen Proyek Perangkat Lunak',3,'5',NULL,NULL);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2019_12_14_000001_create_personal_access_tokens_table',1),
(5,'2021_12_25_144927_create_mahasiswas_table',1),
(6,'2021_12_25_145021_create_nilais_table',1),
(7,'2021_12_25_231400_create_mata_kuliahs_table',1),
(8,'2021_12_25_232839_add_foreign_to_nilai_table',1);

/*Table structure for table `nilais` */

DROP TABLE IF EXISTS `nilais`;

CREATE TABLE `nilais` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `mata_kuliah_id` bigint(20) unsigned NOT NULL,
  `mahasiswa_id` bigint(20) unsigned NOT NULL,
  `tugas` int(10) unsigned NOT NULL,
  `uts` int(10) unsigned NOT NULL,
  `uas` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `nilais` */

insert  into `nilais`(`id`,`mata_kuliah_id`,`mahasiswa_id`,`tugas`,`uts`,`uas`,`created_at`,`updated_at`) values 
(3,7,65,99,80,98,'2021-12-27 02:26:12','2021-12-27 02:26:12'),
(4,4,65,100,90,80,'2021-12-27 05:12:34','2021-12-27 05:12:34'),
(5,10,65,100,90,80,'2021-12-27 06:08:41','2021-12-27 06:08:41'),
(6,10,65,100,90,80,'2021-12-27 06:08:47','2021-12-27 06:08:47'),
(7,8,65,80,90,99,'2021-12-27 06:09:50','2021-12-27 06:09:50');

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
