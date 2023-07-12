-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2023 at 12:23 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `telesale`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `describe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region` bigint(20) UNSIGNED DEFAULT NULL,
  `gender` bigint(20) UNSIGNED DEFAULT NULL,
  `id_group` bigint(20) UNSIGNED DEFAULT NULL,
  `id_status` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone`, `email`, `address`, `describe`, `region`, `gender`, `id_group`, `id_status`, `created_at`, `updated_at`) VALUES
(1, 'Prof. Marcelina Fadel PhD', '+1 (810) 616-8696', 'mjerde@yundt.com', '10530 Imogene Via Apt. 507\nEast Marshallmouth, MN 80489', 'Et natus voluptate nihil. Eum non ut expedita. Exercitationem qui dolores reiciendis et consectetur officia. Sed vel qui et repudiandae incidunt eligendi labore.', 58, 2, 3, 3, '2023-07-11 02:03:05', '2023-07-11 02:03:05'),
(2, 'Destany Morar PhD', '1-930-246-0107', 'remington80@rath.com', '4212 Collier Mountains Apt. 287\nJakubowskishire, RI 09275-8634', 'Velit reiciendis voluptates rem sit. Nesciunt earum velit ullam dolorem id voluptas omnis autem. Molestias et a earum sint. Pariatur sint quia minima quibusdam reprehenderit quia.', 12, 2, 2, 1, '2023-07-11 02:03:05', '2023-07-11 02:03:05'),
(3, 'Prof. Aron Christiansen V', '915.893.1094', 'herminia58@hotmail.com', '376 Kristofer Key\nJuanitachester, GA 51747-2464', 'In et velit quia laboriosam veniam. Autem nulla repudiandae commodi vero autem.', 4, 1, 1, 5, '2023-07-11 02:03:05', '2023-07-11 02:03:05'),
(4, 'Winfield Sipes', '+15404222764', 'arnold92@gmail.com', '536 Felicita Hollow\nLake Raymundo, TX 77721', 'Et id dolores aut cum unde delectus provident. Laboriosam ullam veniam sunt quam sequi ut. Perferendis aut nulla minus.', 3, 2, 1, 1, '2023-07-11 02:03:05', '2023-07-11 02:03:05'),
(5, 'Prof. Estevan Miller DVM', '206.359.2753', 'luna16@hotmail.com', '4732 Branson Stream\nHammeschester, OK 39346-1009', 'Adipisci doloribus tempore suscipit sit. Qui quaerat officia est iure animi sit architecto. Laudantium laborum quo fugit eos consequuntur.', 32, 1, 4, 5, '2023-07-11 02:03:05', '2023-07-11 02:03:05'),
(6, 'Jeanne Goyette', '940-903-0454', 'gudrun.beatty@tremblay.com', '304 Sauer Field Suite 293\nKleinport, NC 25266', 'Illum aliquam maxime nostrum. Ab aliquid earum praesentium et cumque est. Ea quas non eum et.', 54, 1, 1, 5, '2023-07-11 02:03:05', '2023-07-11 02:03:05'),
(7, 'Keenan Casper', '463.442.3087', 'laltenwerth@gmail.com', '71770 Okuneva Courts\nGeorgianaland, FL 17381', 'Deleniti fugit aperiam eveniet quia cupiditate dolor. Impedit dolorem eligendi nihil ipsam. Vero quibusdam ut sit et delectus voluptas quidem excepturi. Est occaecati aut doloremque nulla.', 30, 2, 4, 2, '2023-07-11 02:03:05', '2023-07-11 02:03:05'),
(8, 'Ansel Greenfelder', '878-796-7196', 'kuhn.alayna@gmail.com', '526 Raleigh Parkways\nWilfredhaven, SD 27575', 'Architecto provident consequuntur commodi occaecati. Consequatur quia eos est laboriosam magnam voluptatem. Impedit labore autem assumenda debitis. Voluptatem veritatis officiis error.', 3, 1, 2, 1, '2023-07-11 02:03:05', '2023-07-11 02:03:05'),
(9, 'Irma Reichel', '+1 (330) 468-9324', 'lester41@senger.com', '644 Caleb Courts\nWest Rhiannonland, GA 15607', 'Fuga eos illo sit ad velit sit magnam expedita. Non ut eaque ut non ut. Ab saepe ut rerum qui tempora ex rerum. Aut suscipit vel fugiat dicta consequatur.', 35, 2, 1, 4, '2023-07-11 02:03:05', '2023-07-11 02:03:05'),
(10, 'Lavern Kris', '(660) 578-5823', 'price.elsie@gmail.com', '9005 Thea Mews Apt. 655\nSouth Luisa, NM 57536-6303', 'Non soluta et cum qui fugiat et. Consequatur voluptatem ea et sint asperiores ad rerum. Est odio sint repudiandae quo quis dolor.', 41, 2, 3, 3, '2023-07-11 02:03:05', '2023-07-11 02:03:05'),
(11, 'Alexandrine Kling', '1-253-601-0280', 'mmosciski@bernier.com', '277 Loyce Curve\nMadelynmouth, KY 68775', 'Unde aliquid aut corporis. Quo aut enim voluptas aut earum ipsum. Non modi asperiores culpa et. Sunt inventore delectus nulla quia praesentium molestiae maxime enim.', 39, 1, 1, 5, '2023-07-11 02:03:05', '2023-07-11 02:03:05'),
(12, 'Ms. Marcelina Trantow', '(732) 871-5218', 'vlarson@botsford.com', '526 Victoria Plain Suite 265\nShanahanburgh, CT 63277', 'Impedit rerum in aspernatur quo dolorum aut. Beatae quas dolores nemo neque rerum est. Est a dolore fugiat odio.', 54, 2, 1, 2, '2023-07-11 02:03:05', '2023-07-11 02:03:05'),
(13, 'Cruz Volkman', '432-513-3293', 'zokon@hotmail.com', '567 Saige Plaza\nJanickview, IL 81662-6413', 'Quia sit harum maxime sed consectetur doloribus. Nisi odit aut perferendis. Veniam nemo sed quidem laudantium sapiente ut.', 54, 2, 3, 4, '2023-07-11 02:03:05', '2023-07-11 02:03:05'),
(14, 'Mr. Tod Murazik', '+1 (972) 318-4731', 'flossie33@yahoo.com', '5442 Aaliyah Mews Suite 609\nSouth Garry, PA 17943', 'Incidunt consequatur delectus repellendus ut consequuntur perspiciatis quia. Ipsa temporibus reprehenderit perferendis voluptatem veniam ut ea. Voluptatum assumenda quasi eos.', 62, 1, 4, 1, '2023-07-11 02:03:05', '2023-07-11 02:03:05'),
(15, 'Ms. Jennie Botsford', '+1-570-259-9441', 'pfisher@barton.com', '54596 Lindgren Ramp\nHermannview, ME 55261', 'Et impedit voluptatem et perferendis. Sint aut odio quisquam non similique et id illum. Ipsa quis iste placeat voluptatum animi aut.', 35, 1, 4, 4, '2023-07-11 02:03:05', '2023-07-11 02:03:05'),
(16, 'Lola Haag', '(706) 899-1151', 'bartholome.green@gmail.com', '18430 Boyer River Suite 905\nLake Emilianoville, KY 31031', 'Aut iste magni nobis ut ea officia itaque. Impedit delectus est sunt qui distinctio minus ratione. Accusamus facere eos qui porro distinctio neque.', 34, 2, 2, 3, '2023-07-11 02:03:05', '2023-07-11 02:03:05'),
(17, 'Freddy Miller', '585-598-6079', 'ghauck@hotmail.com', '51901 Jewel Lock\nKailynland, PA 41097', 'Quis ea et id hic. Blanditiis possimus omnis dicta reiciendis qui quas tempora. Consequatur nobis eveniet excepturi mollitia et suscipit.', 45, 2, 1, 3, '2023-07-11 02:03:05', '2023-07-11 02:03:05'),
(18, 'Clarabelle Haag Sr.', '562.213.6639', 'kutch.keshawn@gmail.com', '74059 Conroy Forest\nSouth Stewart, SD 85318', 'Inventore aut soluta illum provident dolor non. Beatae non rem aut doloribus aperiam. Voluptatem cumque illo non nobis rerum maxime quidem.', 13, 1, 1, 2, '2023-07-11 02:03:05', '2023-07-11 02:03:05'),
(19, 'Emerald Bartell', '+1-218-549-2072', 'hkris@little.com', '39895 Williamson Parkways\nWest Gerdafurt, MD 07217', 'Similique dolorem repellendus esse id velit aspernatur labore animi. Dolor tempore eius in est tenetur. Quibusdam animi et architecto optio facilis quae.', 32, 1, 4, 2, '2023-07-11 02:03:05', '2023-07-11 02:03:05'),
(20, 'Lyla Stokes', '+1.484.888.3955', 'murray.bailey@gmail.com', '376 Greyson Lake Apt. 980\nNorth Alphonso, IA 40234-4949', 'Consequatur ab provident et consequatur omnis. Omnis quaerat sit necessitatibus. Rem rerum neque sed eum.', 41, 2, 3, 3, '2023-07-11 02:03:05', '2023-07-11 02:03:05'),
(21, 'Prof. Brandy Fritsch', '769-228-1300', 'hblock@gmail.com', '27937 Connie Mission\nNorth Marquesmouth, IL 62475-2552', 'Numquam ut dolor ducimus dolor. Eligendi est commodi reiciendis qui aspernatur excepturi. Eligendi expedita vitae est minima esse vel amet. Et voluptatibus quasi suscipit sed.', 33, 1, 3, 5, '2023-07-11 02:03:05', '2023-07-11 02:03:05'),
(22, 'Alexzander Kutch II', '1-325-471-5509', 'blueilwitz@mckenzie.com', '94646 O\'Kon Corner Apt. 552\nMustafaland, HI 76507-7735', 'Qui eius eos voluptatem maxime optio culpa sed similique. Nulla voluptatem vel at non alias accusamus quod. Sunt eos in doloribus temporibus et at.', 34, 2, 3, 5, '2023-07-11 02:03:06', '2023-07-11 02:03:06'),
(23, 'Hector Weber', '1-612-232-3172', 'berge.henriette@yahoo.com', '26455 Marjory Landing Apt. 395\nCristalville, MS 37905', 'Commodi in maiores vitae repellendus. Illo qui molestias fugiat quidem quia. Deleniti quo enim sed quaerat et quia eius quasi.', 52, 1, 4, 5, '2023-07-11 02:03:06', '2023-07-11 02:03:06'),
(24, 'Dr. Verlie Ankunding', '+19716572141', 'jarret.durgan@yahoo.com', '1019 Bradly Squares Suite 315\nDuanechester, OH 15969-3189', 'Sequi qui consequatur maxime ea. Provident sapiente id voluptatem sit laudantium et officiis omnis. Ullam et sint quam quis ut eos.', 43, 2, 3, 2, '2023-07-11 02:03:06', '2023-07-11 02:03:06'),
(25, 'Austen Grimes', '682.794.2372', 'kenton.thompson@gmail.com', '85574 Henriette Lock Suite 436\nTownechester, MA 94692', 'Mollitia cupiditate reiciendis modi iste ad quas at explicabo. Et voluptatum ut quia aperiam mollitia voluptas rerum. Laborum autem id incidunt. Eum dolorem eum ut numquam repellat.', 16, 1, 1, 1, '2023-07-11 02:03:06', '2023-07-11 02:03:06'),
(26, 'Kelli Hane', '774-894-8198', 'jany.mante@adams.info', '91238 Ondricka Lakes\nSimonisport, AL 70148', 'Accusantium iste dolor recusandae ut quis iure soluta. Nihil cumque ut non dicta sit. Unde enim veniam magnam nesciunt iusto.', 4, 2, 3, 5, '2023-07-11 02:03:06', '2023-07-11 02:03:06'),
(27, 'Lina Bogisich', '(458) 874-8125', 'kole19@gmail.com', '30919 Cullen Ferry Suite 183\nHermanshire, NH 64205', 'Non consectetur suscipit veniam rerum delectus nihil sed. Quae incidunt facilis ea sit perferendis. Reprehenderit quia neque magnam sit.', 19, 1, 4, 2, '2023-07-11 02:03:06', '2023-07-11 02:03:06'),
(28, 'Dr. Robbie Ryan', '+1 (703) 879-2803', 'madie61@mosciski.com', '9765 Georgette Rapids Suite 614\nPort Tonyville, HI 56030-9724', 'Est et molestias non qui doloremque quia. Optio sapiente velit labore in. Molestiae sequi unde asperiores. Ut et molestiae nostrum sunt. Deleniti quam ducimus molestiae odit qui.', 19, 1, 4, 4, '2023-07-11 02:03:06', '2023-07-11 02:03:06'),
(29, 'Jaqueline Klein', '(559) 796-1660', 'delphine82@hessel.com', '18512 Konopelski Squares\nNorth Anabel, OH 78071', 'Non eos occaecati aperiam incidunt id vel. Beatae ea qui temporibus omnis. Labore quo animi autem unde et amet. Dolor necessitatibus officia aliquid fugit.', 40, 2, 2, 4, '2023-07-11 02:03:06', '2023-07-11 02:03:06'),
(30, 'Mrs. Belle Dickinson', '+1-717-383-2965', 'lemke.quinton@gmail.com', '9458 Bahringer Drive Apt. 834\nGussieburgh, NM 55718-9672', 'Neque ipsa doloremque corrupti modi et magnam. Cumque ullam quidem delectus nulla ut qui et. Dicta possimus et officia explicabo qui a nemo. Tempora provident qui in qui minima adipisci.', 61, 1, 1, 2, '2023-07-11 02:03:06', '2023-07-11 02:03:06'),
(31, 'Naomi Turner', '1-281-259-2676', 'iyundt@hotmail.com', '4057 Grimes Ridges\nPort Madalineport, OR 58602', 'Repellat cumque voluptas sit voluptas. Dolor et blanditiis ut quod. Dolore dignissimos quisquam necessitatibus. Quaerat dolores suscipit minus provident et.', 41, 2, 4, 5, '2023-07-11 02:03:06', '2023-07-11 02:03:06'),
(32, 'Ozella Barton', '+1 (863) 225-9711', 'marcellus06@feeney.com', '656 Kautzer Underpass Suite 481\nNew Vernaberg, HI 13876-3609', 'Autem omnis est a voluptatum. Asperiores voluptatem voluptatem nostrum earum ea. Fuga voluptatem laboriosam adipisci optio.', 50, 2, 3, 5, '2023-07-11 02:03:06', '2023-07-11 02:03:06'),
(33, 'Prof. Jules Ortiz', '1-585-729-8580', 'jon41@shields.com', '1015 Nolan Terrace Apt. 439\nWeimannchester, ID 13912-2119', 'Vel vel quibusdam itaque odit est voluptatem ut. Nulla voluptatibus in est. Qui dolor architecto aliquam illum labore consectetur.', 55, 2, 4, 1, '2023-07-11 02:03:06', '2023-07-11 02:03:06'),
(34, 'Kenyatta Gutmann', '347.902.8207', 'sibyl.ebert@tremblay.net', '3780 Charity Vista\nSmithamfurt, MI 27347', 'Est aut ipsam quis error aut. Distinctio veniam autem et aliquam asperiores odit dolor. Aperiam alias dolores consequatur. Odit officiis corrupti hic omnis.', 44, 2, 3, 1, '2023-07-11 02:03:06', '2023-07-11 02:03:06'),
(35, 'Ethyl Trantow', '719.521.7639', 'king.danika@yahoo.com', '52866 Kenna Spurs Apt. 678\nLefflerport, CA 07798-4571', 'Repellat cumque rem molestiae id temporibus quo reiciendis. Cum voluptatem corrupti consequuntur est quia enim dolor. Velit voluptas ratione excepturi ducimus.', 25, 1, 1, 5, '2023-07-11 02:03:06', '2023-07-11 02:03:06'),
(36, 'Pauline Moen', '(312) 351-9666', 'rice.maegan@yahoo.com', '33146 Jerde Fork\nWest Anjalimouth, CO 70213', 'Dignissimos dolor enim soluta. Voluptas nam animi cumque numquam deleniti minus. Sit aut tenetur saepe omnis.', 5, 1, 2, 5, '2023-07-11 02:03:06', '2023-07-11 02:03:06'),
(37, 'Mark Feeney', '(253) 882-0223', 'aric32@gmail.com', '2787 Mortimer Wells\nHermanbury, MN 22958-3813', 'Sed aperiam illo adipisci impedit. Et expedita ex animi ut commodi consequatur. At qui aut voluptatibus.', 49, 2, 3, 4, '2023-07-11 02:03:06', '2023-07-11 02:03:06'),
(38, 'Prof. Johnathan Bergnaum', '+1.707.251.9960', 'barton13@dicki.biz', '5854 Harvey Via\nNorth Nola, WI 33663', 'Sequi nesciunt maxime minus rerum. Asperiores consectetur rerum aut nostrum sunt consequuntur aperiam.', 8, 1, 3, 4, '2023-07-11 02:03:06', '2023-07-11 02:03:06'),
(39, 'Freida Hane', '+1-623-456-9511', 'domenico.willms@hotmail.com', '258 Deanna Loaf\nPetraland, MA 49877', 'Fugiat deserunt sint omnis enim qui nesciunt sit dolorum. Incidunt velit animi nisi corrupti. Consectetur et in voluptatum vel architecto. Vel dolorem non totam.', 22, 1, 1, 1, '2023-07-11 02:03:06', '2023-07-11 02:03:06'),
(40, 'Karli Breitenberg V', '(225) 870-6615', 'sporer.wendy@hotmail.com', '7581 Ryan Inlet\nTanyaborough, VA 72685', 'Molestiae eum ullam ea expedita sit. Dolore sed et nihil officia. Perferendis quam dolorum ullam sit et.', 21, 1, 2, 2, '2023-07-11 02:03:06', '2023-07-11 02:03:06'),
(41, 'Nannie Champlin', '+1-937-477-1561', 'conn.toy@gmail.com', '832 Yost Mall Suite 584\nNorth Rhodachester, NM 42765', 'Sint molestiae quam sed velit velit molestiae harum rem. A qui autem non dolor porro similique. Et ratione illum harum aliquid.', 60, 2, 3, 1, '2023-07-11 02:03:06', '2023-07-11 02:03:06'),
(42, 'Broderick Koepp', '605.463.4204', 'stuart71@yahoo.com', '799 Blick Spurs Apt. 115\nJeremiestad, TN 78679', 'Dolores temporibus accusantium est. Consequatur magnam reprehenderit sed expedita doloribus. Distinctio id impedit voluptatem cum fugiat. Sed numquam rerum tempore illo hic exercitationem et.', 44, 1, 1, 5, '2023-07-11 02:03:06', '2023-07-11 02:03:06'),
(43, 'Emma Hudson', '+1-680-629-0167', 'amber.reichel@langosh.com', '5438 Purdy Heights Apt. 260\nEast Jessicahaven, WV 00742-0487', 'Repellendus officia laborum velit voluptatum qui architecto est. Doloribus ea commodi quia molestiae est tempora est.', 22, 1, 3, 3, '2023-07-11 02:03:06', '2023-07-11 02:03:06'),
(44, 'Jameson Flatley', '1-831-721-0570', 'brooke.rau@goldner.com', '143 Dennis Glen\nLake Kylee, LA 04940-2733', 'Dolores omnis reprehenderit id qui enim. Ducimus assumenda ut pariatur repudiandae nulla pariatur atque. Voluptatem voluptas impedit nam et. Illum laudantium amet facilis dicta.', 52, 2, 4, 5, '2023-07-11 02:03:06', '2023-07-11 02:03:06'),
(45, 'Dr. Dusty Gusikowski PhD', '1-364-484-4802', 'aletha.gutmann@hotmail.com', '695 Shirley Viaduct Apt. 452\nNorth Marta, MD 01887', 'Blanditiis ad at repellat. Nam voluptas sit ducimus tempora eligendi et exercitationem. Atque officiis et quam velit a pariatur. Consequuntur voluptatem at saepe iusto.', 48, 2, 4, 3, '2023-07-11 02:03:06', '2023-07-11 02:03:06'),
(46, 'Deshawn Buckridge DDS', '+1-309-602-7060', 'lesley19@wehner.com', '5451 Kihn Mountains\nMannshire, IA 75744-8762', 'Voluptatum voluptatem aut eligendi libero distinctio modi et quo. Qui iusto voluptate beatae modi aliquid ex quasi. Delectus in ut et labore fuga quae non.', 13, 1, 2, 2, '2023-07-11 02:03:06', '2023-07-11 02:03:06'),
(47, 'Celia Greenfelder MD', '+1.332.959.5824', 'anderson.jayden@armstrong.com', '79760 Dietrich Springs Apt. 730\nEast Mafaldaville, IN 53264-5995', 'Error enim molestiae dolorem rerum. Numquam eum aliquid officiis voluptatem nemo. Perspiciatis sequi enim veritatis laborum minima omnis et. Magni et in at maxime iste.', 7, 2, 4, 5, '2023-07-11 02:03:06', '2023-07-11 02:03:06'),
(48, 'Evalyn Daniel DDS', '513.439.7799', 'camilla.sauer@rowe.com', '43830 Koch Bypass\nJulianshire, MN 52429-5562', 'Perspiciatis expedita enim pariatur et. Aspernatur non repellat explicabo deserunt enim et. Qui fugiat reiciendis minus.', 5, 2, 3, 3, '2023-07-11 02:03:07', '2023-07-11 02:03:07'),
(49, 'Mr. Braulio Emard', '352-401-2445', 'jake36@romaguera.com', '6401 Jaren Spurs Apt. 112\nVirginiaview, DC 25587', 'Voluptatem minus maiores eum id. Aliquid alias rem et. Quos sit odio voluptas impedit rerum saepe ab. Nostrum modi sed quod iste.', 54, 2, 4, 4, '2023-07-11 02:03:07', '2023-07-11 02:03:07'),
(50, 'Zoe Beatty', '763-812-6603', 'kade96@hotmail.com', '681 Breitenberg Heights Apt. 843\nDooleyhaven, UT 13887-9927', 'Cumque blanditiis officia non et. Sit quasi placeat atque praesentium et enim accusamus. Explicabo incidunt quisquam consequatur temporibus. Natus tenetur et omnis.', 39, 1, 3, 1, '2023-07-11 02:03:07', '2023-07-11 02:03:07'),
(51, 'Norma D\'Amore Jr.', '+1-820-659-0295', 'agustin.gleichner@west.info', '714 Kiel Garden Suite 548\nGreysonchester, LA 24882-5749', 'Voluptas qui est nemo sequi voluptates temporibus et. Ad omnis voluptates non dolor quis dolorem. Ipsum ratione sint laboriosam est aut. Et iusto ut consequatur modi dolorem aut hic.', 34, 2, 4, 2, '2023-07-11 02:03:07', '2023-07-11 02:03:07'),
(52, 'Keyshawn Wintheiser', '440.634.1091', 'hoppe.saul@olson.com', '847 Geovany Coves\nNew Sebastian, SC 24350-2133', 'Ut mollitia a dolor quas exercitationem. Aperiam nam eligendi sint. Et aut quae a et. Occaecati veritatis consequatur qui ut necessitatibus accusantium sunt.', 39, 1, 2, 4, '2023-07-11 02:03:07', '2023-07-11 02:03:07'),
(53, 'Mr. Nick Roob I', '(959) 551-7225', 'fhammes@hansen.info', '32066 Agnes Cape Apt. 416\nPowlowskiburgh, NJ 95796', 'Nisi expedita sit rem minima quo aliquam. Ipsum sed quibusdam aut et. Ut id quam impedit alias corporis.', 31, 2, 1, 4, '2023-07-11 02:03:07', '2023-07-11 02:03:07'),
(54, 'Prof. Arianna Rosenbaum IV', '+1-919-745-3877', 'stoltenberg.sydnee@hotmail.com', '645 Mayert Springs Suite 919\nMargareteside, SD 81114', 'Exercitationem voluptatem deserunt et qui est aut. Quisquam eligendi sequi sit dolore recusandae ea perferendis. Nesciunt vero est voluptatibus sit. Enim vero eius quisquam iusto repellat quae qui.', 59, 1, 4, 5, '2023-07-11 02:03:07', '2023-07-11 02:03:07'),
(55, 'Lorna Hilpert', '(484) 262-4643', 'christy30@smith.com', '51446 Kris Bridge Suite 033\nMelodystad, NH 01296-9312', 'Expedita sed qui laborum dolorem. Quasi magnam doloribus suscipit nostrum quasi. Commodi officiis aut alias numquam dicta distinctio nulla. Sint iste facilis qui pariatur alias doloribus rerum.', 16, 2, 2, 2, '2023-07-11 02:03:07', '2023-07-11 02:03:07'),
(56, 'Pat Spencer', '539-839-6095', 'maggio.richmond@gmail.com', '395 Skiles Circles Suite 783\nPort Lilla, CT 08618', 'Id illum deserunt incidunt quo non accusamus quia. Dolore consequuntur eveniet aut totam qui. Eius ut ea cupiditate doloremque. Voluptas et recusandae a corrupti voluptas itaque.', 13, 1, 2, 1, '2023-07-11 02:03:07', '2023-07-11 02:03:07'),
(57, 'Prof. Reid Cole', '832-850-8854', 'josie35@yahoo.com', '224 Beier Views\nBoehmbury, MN 91654', 'Incidunt voluptas in sint consectetur voluptatem quae et. Ut nisi veniam omnis provident temporibus. Et est in qui expedita ex perspiciatis.', 20, 1, 4, 3, '2023-07-11 02:03:07', '2023-07-11 02:03:07'),
(58, 'Dr. Marcus Klocko', '762-634-1549', 'xnicolas@durgan.com', '2050 Bo Track\nAbbottburgh, LA 58136-2748', 'Quae sit illum reprehenderit officia sequi. Accusantium veritatis saepe reiciendis qui. Optio corrupti tempora aliquam nihil eos. Neque neque occaecati aspernatur.', 50, 1, 1, 3, '2023-07-11 02:03:07', '2023-07-11 02:03:07'),
(59, 'Teresa Barton III', '1-989-252-5171', 'obie99@hodkiewicz.net', '5261 Lenna Plains\nHendersonborough, WA 18779-2503', 'Autem odio illo impedit nesciunt necessitatibus in distinctio dolores. Repellendus non ut non quidem maxime. Ex molestiae ab et sit beatae et.', 36, 1, 1, 1, '2023-07-11 02:03:07', '2023-07-11 02:03:07'),
(60, 'Edwin Braun', '+12343187847', 'obahringer@mueller.com', '4573 Citlalli Trafficway Apt. 640\nKassulkehaven, MI 36038', 'Dolores officiis quia dolor explicabo et quibusdam. Perferendis rerum odio repellendus quis earum aliquam rerum. Et velit suscipit in in.', 8, 2, 3, 4, '2023-07-11 02:03:07', '2023-07-11 02:03:07'),
(61, 'Nasir Glover', '+1.216.754.3996', 'lkutch@yahoo.com', '5945 Douglas Manor\nLake Charleneburgh, CT 88247-4771', 'Sint et rerum et. Laborum quasi vel omnis in est accusamus. Debitis corporis sed inventore accusantium ut amet.', 58, 1, 2, 2, '2023-07-11 02:03:07', '2023-07-11 02:03:07'),
(62, 'Grant Conroy', '916-779-4141', 'boyer.elna@johnson.info', '8989 Joshua Station Apt. 974\nEast Kallie, PA 81541', 'Quia mollitia est at consequatur impedit nesciunt. Sapiente qui architecto autem ullam autem voluptas omnis deserunt. Neque totam atque cumque.', 54, 2, 3, 3, '2023-07-11 02:03:07', '2023-07-11 02:03:07'),
(63, 'Mr. Sammy Bartell', '+1-502-544-4526', 'cole.ashton@west.com', '224 Jast Street Suite 334\nTyreechester, WY 99163-8500', 'Maxime quo praesentium modi harum dolores vitae. Quo unde accusantium amet sint quas laudantium. Quas et quae eveniet voluptas molestiae.', 49, 1, 1, 5, '2023-07-11 02:03:07', '2023-07-11 02:03:07'),
(64, 'Monty Toy', '+1-279-960-3924', 'iharber@hotmail.com', '6500 Colby Place\nSmithfurt, MI 27481', 'Repellat nesciunt hic et voluptatem quidem veritatis temporibus. Asperiores libero ea sequi aut numquam quibusdam. Et error quod minus. Adipisci esse magni quaerat expedita id iste maiores.', 63, 1, 3, 4, '2023-07-11 02:03:07', '2023-07-11 02:03:07'),
(65, 'Prof. Jailyn Kerluke', '+1-785-281-3154', 'hahn.carmelo@gmail.com', '69476 Ariane Freeway\nNorth Genoveva, NE 06434-7607', 'Est et aspernatur illo voluptate qui. Aut nam esse qui nulla. Hic quaerat nostrum qui repudiandae.', 54, 2, 2, 2, '2023-07-11 02:03:07', '2023-07-11 02:03:07'),
(66, 'Mrs. Tressa Altenwerth Jr.', '+17869682084', 'eli.bradtke@gmail.com', '27136 Pattie Crossroad Apt. 024\nBraedenview, ID 35690', 'Vitae nobis consequatur beatae nulla. Aspernatur nesciunt qui at qui nostrum. Animi minima aut eaque et molestiae et voluptatum tempore. Ipsam in impedit et quam nemo omnis.', 26, 1, 2, 1, '2023-07-11 02:03:07', '2023-07-11 02:03:07'),
(67, 'Erick Hauck', '+1.323.517.9949', 'leanne89@beahan.com', '29687 Cristobal Bridge\nBradtkeville, OK 25819-0710', 'Accusamus sed enim est natus accusantium qui. Rem et quas et dicta. Numquam corporis totam dicta.', 50, 1, 2, 5, '2023-07-11 02:03:07', '2023-07-11 02:03:07'),
(68, 'Dorian Rowe', '(817) 235-5506', 'cory60@yahoo.com', '6317 Leuschke Union Suite 575\nSouth Terrilltown, KY 52803-6560', 'Voluptatem id in ea alias quo. Placeat error dignissimos consequatur eligendi sunt vitae quas. Sunt voluptates recusandae omnis architecto. Tempora et enim fugit impedit.', 23, 2, 1, 4, '2023-07-11 02:03:07', '2023-07-11 02:03:07'),
(69, 'Alf Deckow', '520.866.2568', 'wkuvalis@gmail.com', '15377 Isabella Points\nWest Gaylord, KY 14690-7775', 'Voluptates vel debitis aperiam officia quia. Ad qui pariatur ipsa et. Aut id similique iusto expedita at omnis.', 49, 1, 2, 1, '2023-07-11 02:03:07', '2023-07-11 02:03:07'),
(70, 'Meta Herzog', '531-683-9195', 'trudie93@gmail.com', '525 Stehr Mall Apt. 234\nKennamouth, UT 19632', 'Autem sed ut ipsum ipsa labore voluptate assumenda laudantium. Error iure error animi voluptatem ut dignissimos. Veritatis numquam odio placeat sit molestiae quaerat cumque.', 22, 1, 1, 5, '2023-07-11 02:03:07', '2023-07-11 02:03:07'),
(71, 'Leonel Vandervort', '540-231-9631', 'ugleason@hotmail.com', '12196 Shea Isle Apt. 554\nWest Khalil, OH 92223', 'Est veritatis dicta sed optio consequatur. Aut explicabo dolorum est itaque perferendis facilis. Occaecati incidunt aut harum animi fugiat iusto est. Nihil necessitatibus vero quis dolorem.', 14, 1, 2, 4, '2023-07-11 02:03:07', '2023-07-11 02:03:07'),
(72, 'Mr. Aiden Koelpin', '(325) 574-9381', 'wokon@yahoo.com', '96194 Coby Ports Apt. 144\nLake Clare, LA 02375', 'Officia alias nihil in accusantium ducimus tempora voluptate. Nulla doloribus sit velit excepturi perspiciatis autem. Molestias ut a repellendus quae sed.', 41, 2, 4, 4, '2023-07-11 02:03:07', '2023-07-11 02:03:07'),
(73, 'Isabelle Luettgen IV', '(231) 360-2199', 'wiegand.ora@rempel.com', '269 Marks Passage Suite 327\nNew Filomenamouth, AL 90062-5103', 'Ut velit laborum rerum voluptas voluptas corrupti. Maiores voluptas laboriosam est quia dolor omnis. Aut et nihil quasi illo quasi consequuntur.', 41, 2, 3, 1, '2023-07-11 02:03:07', '2023-07-11 02:03:07'),
(74, 'Miss Fiona Fisher IV', '1-214-579-9944', 'bkautzer@mayert.com', '2609 Stroman Ridges\nTerrillport, SD 57415', 'Quis nulla a consequatur quia similique. Vitae veritatis aut qui repellendus. Illo et asperiores deserunt non explicabo et. Accusamus sequi sit aut nemo.', 63, 1, 3, 2, '2023-07-11 02:03:08', '2023-07-11 02:03:08'),
(75, 'Constantin Erdman', '+1 (615) 671-9145', 'delilah50@hotmail.com', '8265 Hilda Curve\nDagmarville, PA 97613-6535', 'Iusto sequi error rerum nam est totam molestias. Quia dolores est voluptate vero aliquam ea perferendis. Repellat et quam est incidunt nihil et voluptas.', 42, 1, 2, 1, '2023-07-11 02:03:08', '2023-07-11 02:03:08'),
(76, 'Myriam Shanahan', '(314) 722-2126', 'kub.assunta@bergnaum.com', '79665 Robel Pines Apt. 579\nAndreland, VA 37739-1009', 'Minima sunt rerum dolor. Qui rerum magni laborum quo odio. Porro sint corrupti vitae iste itaque aspernatur.', 55, 1, 2, 4, '2023-07-11 02:03:08', '2023-07-11 02:03:08'),
(77, 'Princess Von', '1-346-788-5357', 'nhills@white.com', '657 Homenick Curve Suite 408\nLake Keltonmouth, PA 77113', 'Asperiores magnam reprehenderit sunt neque pariatur. Laborum aut numquam molestiae dicta repellat. Aliquam cupiditate non quo odio.', 17, 2, 1, 3, '2023-07-11 02:03:08', '2023-07-11 02:03:08'),
(78, 'Tate Cronin', '+15029878940', 'luettgen.rowland@yahoo.com', '4949 Smitham Summit\nZiemannfort, FL 10055-2551', 'Magni repellat tempora sit ea labore. Et non et consequatur et. Nihil et sunt eveniet consequatur aut nam nulla.', 54, 1, 2, 2, '2023-07-11 02:03:08', '2023-07-11 02:03:08'),
(79, 'Lonie Feeney V', '1-330-989-2597', 'haley81@zemlak.com', '266 Fisher Curve Apt. 190\nFerryhaven, NC 44993', 'Iste ipsum qui autem nihil reiciendis eos. Maiores et autem dolor ut cupiditate consequatur. Ipsa ullam minima labore sint occaecati id dolores. Ea consequatur sed in explicabo similique.', 10, 1, 2, 3, '2023-07-11 02:03:08', '2023-07-11 02:03:08'),
(80, 'Elliot Gusikowski', '442.277.0558', 'cstroman@rippin.biz', '1847 Clarabelle Ways Suite 572\nAliborough, AK 22561', 'Eaque aliquid aut error tempora nesciunt et eum. Voluptatem et ut cupiditate sed et qui. Occaecati ex nobis reprehenderit voluptatem suscipit repellat aut.', 53, 1, 3, 1, '2023-07-11 02:03:08', '2023-07-11 02:03:08'),
(81, 'Teresa McClure', '+18593775429', 'josianne82@bailey.com', '54198 Rebecca Underpass\nOsvaldoland, MD 50180', 'Qui quos nisi culpa ut sit dolorem vel. Dolores voluptas vel eius ratione tempora. Excepturi dolorem qui sit quas aperiam non et doloribus.', 47, 2, 1, 3, '2023-07-11 02:03:08', '2023-07-11 02:03:08'),
(82, 'Jermain Quigley', '252-844-4032', 'moriah74@gmail.com', '8646 Cremin Mountains Suite 923\nPollichside, AK 95958-5152', 'Nihil temporibus ut dolorem. Debitis enim explicabo non vel dolorem qui. Porro esse velit quia saepe amet dolor quo. Est praesentium et quo nihil at dolorum corrupti optio.', 25, 2, 4, 2, '2023-07-11 02:03:08', '2023-07-11 02:03:08'),
(83, 'Mrs. Maud Donnelly MD', '1-484-252-9474', 'mclaughlin.tracy@yahoo.com', '4171 Kyleigh Radial\nEloiseborough, MT 59774-2632', 'Dolores dolores numquam beatae voluptatum eos. Iste sunt aut sunt aut. Quaerat nisi numquam iure omnis eos ab.', 37, 1, 4, 2, '2023-07-11 02:03:08', '2023-07-11 02:03:08'),
(84, 'Bonita Orn', '803-854-6187', 'yessenia.steuber@gmail.com', '6479 Urban Union\nEast Tierra, VT 03117', 'Sapiente cum ipsam minima laborum at inventore. Voluptas accusantium culpa dolor voluptas eos cumque. Fugit quas illo nemo in voluptate. Qui error est dolores.', 17, 1, 3, 2, '2023-07-11 02:03:08', '2023-07-11 02:03:08'),
(85, 'Zechariah Wintheiser', '215-789-4708', 'wharvey@gmail.com', '1519 Labadie Prairie Apt. 540\nEricbury, CO 44417', 'Reprehenderit quasi hic inventore molestias quis. Et voluptas eos quibusdam dolore nihil quos qui. Laudantium dignissimos vel laboriosam maiores corporis recusandae delectus deserunt.', 48, 1, 1, 5, '2023-07-11 02:03:08', '2023-07-11 02:03:08'),
(86, 'Prof. Chase Mills', '1-520-620-7732', 'etha.beahan@yahoo.com', '8572 Dickinson Harbors Suite 470\nWunschton, AK 47231-5562', 'Molestiae eaque necessitatibus et reprehenderit sit dignissimos. Et omnis necessitatibus minus omnis perspiciatis. Similique voluptas deserunt ipsam voluptatem esse.', 39, 1, 2, 4, '2023-07-11 02:03:08', '2023-07-11 02:03:08'),
(87, 'Ms. Otilia Heidenreich', '(517) 441-5552', 'wilber38@mitchell.com', '600 Renner Mount\nOswaldofort, IL 92042', 'Quo deserunt placeat ut quia a molestias. Fuga commodi alias eum nulla dolorem tenetur voluptatem asperiores. Et esse amet est quis ut.', 43, 2, 1, 2, '2023-07-11 02:03:08', '2023-07-11 02:03:08'),
(88, 'Alexandrine Goldner', '+1-630-972-2496', 'lucinda.becker@grady.info', '772 Amelia Cape Apt. 242Mertzshire, TN 12948', 'Neque sunt facere accusantium ab voluptate cum odio placeat. Eligendi est consequuntur molestiae dicta debitis sint nihil. Suscipit laudantium minima placeat non nulla.', NULL, 1, 3, 1, '2023-07-11 02:03:08', '2023-07-11 03:14:13'),
(89, 'Hellen Erdman', '+1-351-756-2355', 'frederick.howe@gmail.com', '5172 Labadie Locks Apt. 726\nWest Jofurt, WA 55980', 'In tempore similique iste laudantium nobis. Totam iusto repellat veritatis. Quam sed nulla similique minima quibusdam quia voluptatem.', 50, 1, 4, 4, '2023-07-11 02:03:08', '2023-07-11 02:03:08'),
(90, 'Dr. Osvaldo Dicki DVM', '818-815-8891', 'joshua.koss@senger.com', '6039 Langosh Mountains Apt. 175\nNorth Lonietown, DC 31784-2705', 'Eos occaecati voluptatem et nobis. Sint in eligendi adipisci. Consectetur dignissimos praesentium corrupti quia illo provident doloribus. Tenetur in quis modi accusamus voluptatum.', 62, 1, 1, 4, '2023-07-11 02:03:08', '2023-07-11 02:03:08'),
(91, 'Violet Shanahan', '+1-847-615-8680', 'giovanny44@marvin.org', '94205 McLaughlin Branch Suite 324\nGusikowskitown, CO 64836', 'Impedit repellendus laudantium consequatur vitae quo. Modi soluta aut quia totam maxime. Explicabo cum iusto aliquid dolores atque. Debitis iste dolor officia ea. Rerum asperiores ut qui.', 20, 2, 2, 1, '2023-07-11 02:03:08', '2023-07-11 02:03:08'),
(92, 'Dr. Jermey Rodriguez', '+1.623.772.8819', 'ikub@hotmail.com', '684 Lubowitz Field\nLake Maximus, MN 88873-4269', 'Voluptas ut et omnis dolor at dignissimos nihil assumenda. Beatae qui incidunt quia deserunt vero eum. Numquam omnis expedita fugiat earum nesciunt.', 5, 1, 2, 2, '2023-07-11 02:03:08', '2023-07-11 02:03:08'),
(93, 'Cleveland Abbott', '1-801-297-7060', 'jermain.champlin@gmail.com', '99247 Murray Mews\nBlandamouth, FL 87379', 'Neque dolor sit deserunt velit consequatur saepe. Accusamus aut praesentium voluptatem a. Sint autem incidunt neque exercitationem.', 48, 2, 3, 3, '2023-07-11 02:03:08', '2023-07-11 02:03:08'),
(94, 'Edwardo Ledner', '+14134882602', 'jannie.gerlach@hansen.biz', '1340 Cristian Island\nFarrellfurt, KS 09767-0442', 'Temporibus quos aliquid porro est molestias. Sed sequi laboriosam aut autem quod error dicta. In vel doloribus aut enim eligendi illum.', 61, 1, 1, 4, '2023-07-11 02:03:08', '2023-07-11 02:03:08'),
(95, 'Tyrese Rohan', '703-460-6883', 'jules.hauck@frami.com', '62462 Triston Bypass Suite 917\nNorth Hubertfurt, NV 57233-9923', 'Fugiat earum mollitia perferendis. Quia placeat vitae sunt eos quaerat. Enim ad omnis quia suscipit et. Libero ut iste expedita et sint.', 19, 1, 4, 3, '2023-07-11 02:03:08', '2023-07-11 02:03:08'),
(96, 'Janis Weissnat Sr.', '1-351-715-6302', 'felicity80@vandervort.net', '2739 McDermott Track Apt. 394\nMillerburgh, NC 16493-5719', 'In ad veritatis veniam aperiam dolore magnam. Porro velit aut molestiae in. Fugit accusamus omnis minus non minima sint qui. Nostrum totam consequatur dolore odio cumque est.', 3, 1, 1, 4, '2023-07-11 02:03:08', '2023-07-11 02:03:08'),
(97, 'Jaquelin Kemmer', '346.731.7643', 'helena50@bauch.com', '3419 Claude Camp\nMillstown, TN 44562-8946', 'Laborum dolore eum minus sit rerum nulla nihil. Totam impedit inventore suscipit fugit.', 11, 1, 2, 3, '2023-07-11 02:03:08', '2023-07-11 02:03:08'),
(98, 'Prof. Filiberto Mayer PhD', '(952) 273-7630', 'clementine80@murazik.biz', '854 Yvette Junctions Suite 201\nMedhurstberg, NY 99602', 'Est ipsam velit voluptas et quo. Omnis fugiat rerum nisi aut ad similique voluptas labore. Quia commodi iusto reiciendis non aliquam. Voluptates excepturi est qui quae.', 38, 2, 1, 5, '2023-07-11 02:03:08', '2023-07-11 02:03:08'),
(99, 'Deion Spinka Sr.', '541-251-5796', 'zackery.upton@gottlieb.org', '5162 Jason Path Suite 092\nArmstrongstad, NM 42322', 'Eos nulla reprehenderit natus consequatur sint aut aut. Est aut earum ut aut provident voluptatem a. Placeat autem ad explicabo rerum.', 19, 1, 3, 5, '2023-07-11 02:03:08', '2023-07-11 02:03:08'),
(100, 'Otha Upton', '+1-862-252-4115', 'piper63@strosin.org', '613 Zachary Corners Suite 845\nEast Bryanafurt, SD 06425-8851', 'Consequatur exercitationem voluptas quibusdam. Illo et incidunt error. Ut quod molestias ut ab. Enim eum soluta inventore in.', 1, 2, 3, 5, '2023-07-11 02:03:08', '2023-07-11 02:03:08');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `describe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `describe`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'Nhóm A', NULL, NULL, NULL, NULL),
(2, 'Nhóm B', NULL, NULL, NULL, NULL),
(3, 'Nhóm C', NULL, NULL, NULL, NULL),
(4, 'Nhóm D', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2023_07_01_072313_create_roles_table', 1),
(5, '2023_07_02_000000_create_users_table', 1),
(6, '2023_07_03_073955_create_groups_table', 1),
(7, '2023_07_04_074909_create_statuses_table', 1),
(8, '2023_07_05_083245_create_regions_table', 1),
(9, '2023_07_06_074222_create_customers_table', 1),
(10, '2023_07_07_075112_create_user__groups_table', 1),
(11, '2023_07_08_082406_create_user__customers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Bắc Giang', NULL, NULL),
(2, 'Bắc Kạn', NULL, NULL),
(3, 'Cao Bằng', NULL, NULL),
(4, 'Hà Giang', NULL, NULL),
(5, 'Lạng Sơn', NULL, NULL),
(6, 'Phú Thọ', NULL, NULL),
(7, 'Quảng Ninh', NULL, NULL),
(8, 'Thái Nguyên', NULL, NULL),
(9, 'Tuyên Quang', NULL, NULL),
(10, 'Điện Biên', NULL, NULL),
(11, 'Hòa Bình', NULL, NULL),
(12, 'Lai Châu', NULL, NULL),
(13, 'Lào Cai', NULL, NULL),
(14, 'Sơn La', NULL, NULL),
(15, 'Yên Bái', NULL, NULL),
(16, 'Bắc Ninh', NULL, NULL),
(17, 'Hà Nam', NULL, NULL),
(18, 'Hà Nội', NULL, NULL),
(19, 'Hải Dương', NULL, NULL),
(20, 'Hải Phòng', NULL, NULL),
(21, 'Hưng Yên', NULL, NULL),
(22, 'Nam Định', NULL, NULL),
(23, 'Ninh Bình', NULL, NULL),
(24, 'Thái Bình', NULL, NULL),
(25, 'Vĩnh Phúc', NULL, NULL),
(26, 'Hà Tĩnh', NULL, NULL),
(27, 'Nghệ An', NULL, NULL),
(28, 'Quảng Bình', NULL, NULL),
(29, 'Quảng Trị', NULL, NULL),
(30, 'Thanh Hóa', NULL, NULL),
(31, 'Thừa Thiên Huế', NULL, NULL),
(32, 'Bình Định', NULL, NULL),
(33, 'Bình Thuận', NULL, NULL),
(34, 'Đà Nẵng', NULL, NULL),
(35, 'Khánh Hòa', NULL, NULL),
(36, 'Ninh Thuận', NULL, NULL),
(37, 'Phú Yên', NULL, NULL),
(38, 'Quảng Nam', NULL, NULL),
(39, 'Quảng Ngãi', NULL, NULL),
(40, 'Đắk Lắk', NULL, NULL),
(41, 'Đắk Nông', NULL, NULL),
(42, 'Gia Lai', NULL, NULL),
(43, 'Kon Tum', NULL, NULL),
(44, 'Lâm Đồng', NULL, NULL),
(45, 'Bà Rịa–Vũng Tàu', NULL, NULL),
(46, 'Bình Dương', NULL, NULL),
(47, 'Bình Phước', NULL, NULL),
(48, 'Đồng Nai', NULL, NULL),
(49, 'Hồ Chí Minh', NULL, NULL),
(50, 'Tây Ninh', NULL, NULL),
(51, 'An Giang', NULL, NULL),
(52, 'Bến Tre', NULL, NULL),
(53, 'Bạc Liêu', NULL, NULL),
(54, 'Cà Mau', NULL, NULL),
(55, 'Cần Thơ', NULL, NULL),
(56, 'Đồng Tháp', NULL, NULL),
(57, 'Hậu Giang', NULL, NULL),
(58, 'Kiên Giang', NULL, NULL),
(59, 'Long An', NULL, NULL),
(60, 'Sóc Trăng', NULL, NULL),
(61, 'Tiền Giang', NULL, NULL),
(62, 'Trà Vinh', NULL, NULL),
(63, 'Vĩnh Long', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `level`, `created_at`, `updated_at`) VALUES
(1, 'admin', 1, NULL, NULL),
(2, 'leader', 2, NULL, NULL),
(3, 'staff', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Chưa gọi', NULL, NULL),
(2, 'Đã gọi', NULL, NULL),
(3, 'Không gọi được', NULL, NULL),
(4, 'Từ chối', NULL, NULL),
(5, 'Đặt hẹn', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` bigint(20) UNSIGNED DEFAULT NULL,
  `id_role` bigint(20) UNSIGNED DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `phone`, `address`, `gender`, `id_role`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Lập Trình Viên', '$2y$10$Bw6.r/3ji48.rWcMbqFuLuavJXpgCEzj7K9CzQFbU4WXu7dP8ZtC6', 'admin', NULL, NULL, 1, 1, NULL, NULL, '2023-07-11 01:38:43', '2023-07-11 01:38:43'),
(2, 'Trưởng Phòng 1', '$2y$10$T5WdBC81tX534C9xQJMTHuhfTIHkUPlaW1vNMa2MpFSTWaKG1YuZm', 'leader1', NULL, NULL, 2, 2, NULL, NULL, '2023-07-11 01:40:29', '2023-07-11 01:40:29'),
(3, 'Trưởng Phòng 2', '$2y$10$3nBVMjjBKQ0BkQmTLOAnWOjg8z92342jKC59oDxy7SpYOuzT9pD9a', 'leader2', NULL, NULL, 1, 2, NULL, NULL, '2023-07-11 01:41:04', '2023-07-11 01:41:04'),
(4, 'Nhân viên 1', '$2y$10$Q4pR6KDwXyF3xDGJmGO2suLlN33uWrObHB8aGckOf2E.scH/jPz/q', 'staff1', NULL, NULL, 2, 3, NULL, NULL, '2023-07-11 01:42:18', '2023-07-11 01:42:18'),
(5, 'Nhân viên 2', '$2y$10$xEfqwJgshWH4E.9tEIdWTu0hM.z3/KcdAprJE0j.Bc1vwFP8UfQg2', 'staff2', NULL, NULL, 1, 3, NULL, NULL, '2023-07-11 01:42:41', '2023-07-11 01:42:41'),
(6, 'Nhân viên 3', '$2y$10$pmDjWgo7zLPThF4efM0.1.mi1l9EtfMV9biX8SEDXF.fD582Ne086', 'staff3', NULL, NULL, 2, 3, NULL, NULL, '2023-07-11 01:43:24', '2023-07-11 01:43:24');

-- --------------------------------------------------------

--
-- Table structure for table `user__customers`
--

CREATE TABLE `user__customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_customer` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user__customers`
--

INSERT INTO `user__customers` (`id`, `id_user`, `id_customer`, `created_at`, `updated_at`) VALUES
(1, 4, 1, NULL, NULL),
(2, 4, 2, NULL, NULL),
(3, 4, 3, NULL, NULL),
(4, 4, 5, NULL, NULL),
(5, 4, 6, NULL, NULL),
(6, 4, 7, NULL, NULL),
(7, 4, 8, NULL, NULL),
(8, 4, 9, NULL, NULL),
(9, 4, 10, NULL, NULL),
(10, 4, 11, NULL, NULL),
(11, 4, 12, NULL, NULL),
(12, 4, 13, NULL, NULL),
(13, 4, 15, NULL, NULL),
(14, 4, 16, NULL, NULL),
(15, 4, 17, NULL, NULL),
(16, 4, 18, NULL, NULL),
(17, 4, 19, NULL, NULL),
(18, 4, 20, NULL, NULL),
(19, 4, 21, NULL, NULL),
(20, 4, 22, NULL, NULL),
(21, 4, 23, NULL, NULL),
(22, 4, 25, NULL, NULL),
(23, 4, 26, NULL, NULL),
(24, 4, 27, NULL, NULL),
(25, 4, 28, NULL, NULL),
(26, 4, 29, NULL, NULL),
(27, 4, 30, NULL, NULL),
(28, 4, 31, NULL, NULL),
(29, 4, 32, NULL, NULL),
(30, 4, 33, NULL, NULL),
(31, 5, 35, NULL, NULL),
(32, 5, 36, NULL, NULL),
(33, 5, 37, NULL, NULL),
(34, 5, 38, NULL, NULL),
(35, 5, 39, NULL, NULL),
(36, 5, 40, NULL, NULL),
(37, 5, 41, NULL, NULL),
(38, 5, 42, NULL, NULL),
(39, 5, 43, NULL, NULL),
(40, 5, 45, NULL, NULL),
(41, 5, 46, NULL, NULL),
(42, 5, 47, NULL, NULL),
(43, 5, 48, NULL, NULL),
(44, 5, 49, NULL, NULL),
(45, 5, 50, NULL, NULL),
(46, 5, 51, NULL, NULL),
(47, 5, 52, NULL, NULL),
(48, 5, 53, NULL, NULL),
(49, 5, 55, NULL, NULL),
(50, 5, 56, NULL, NULL),
(51, 5, 57, NULL, NULL),
(52, 5, 58, NULL, NULL),
(53, 5, 59, NULL, NULL),
(54, 5, 60, NULL, NULL),
(55, 5, 61, NULL, NULL),
(56, 5, 62, NULL, NULL),
(57, 5, 63, NULL, NULL),
(58, 6, 65, NULL, NULL),
(59, 6, 66, NULL, NULL),
(60, 6, 67, NULL, NULL),
(61, 6, 68, NULL, NULL),
(62, 6, 69, NULL, NULL),
(63, 6, 70, NULL, NULL),
(64, 6, 71, NULL, NULL),
(65, 6, 72, NULL, NULL),
(66, 6, 73, NULL, NULL),
(67, 6, 75, NULL, NULL),
(68, 6, 76, NULL, NULL),
(69, 6, 77, NULL, NULL),
(70, 6, 78, NULL, NULL),
(71, 6, 79, NULL, NULL),
(72, 6, 80, NULL, NULL),
(73, 6, 81, NULL, NULL),
(74, 6, 82, NULL, NULL),
(75, 6, 83, NULL, NULL),
(76, 6, 85, NULL, NULL),
(77, 6, 86, NULL, NULL),
(78, 6, 87, NULL, NULL),
(79, 6, 88, NULL, NULL),
(80, 6, 89, NULL, NULL),
(81, 6, 90, NULL, NULL),
(82, 6, 91, NULL, NULL),
(83, 6, 92, NULL, NULL),
(84, 6, 93, NULL, NULL),
(85, 6, 95, NULL, NULL),
(86, 6, 96, NULL, NULL),
(87, 6, 97, NULL, NULL),
(88, 6, 98, NULL, NULL),
(89, 6, 99, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user__groups`
--

CREATE TABLE `user__groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_group` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user__groups`
--

INSERT INTO `user__groups` (`id`, `id_user`, `id_group`, `created_at`, `updated_at`) VALUES
(1, 2, 1, NULL, NULL),
(2, 2, 2, NULL, NULL),
(3, 3, 3, NULL, NULL),
(4, 3, 4, NULL, NULL),
(5, 4, 1, NULL, NULL),
(6, 5, 2, NULL, NULL),
(7, 6, 3, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_phone_unique` (`phone`),
  ADD KEY `customers_region_foreign` (`region`),
  ADD KEY `customers_id_group_foreign` (`id_group`),
  ADD KEY `customers_id_status_foreign` (`id_status`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_id_role_foreign` (`id_role`);

--
-- Indexes for table `user__customers`
--
ALTER TABLE `user__customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user__customers_id_user_foreign` (`id_user`),
  ADD KEY `user__customers_id_customer_foreign` (`id_customer`);

--
-- Indexes for table `user__groups`
--
ALTER TABLE `user__groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user__groups_id_user_foreign` (`id_user`),
  ADD KEY `user__groups_id_group_foreign` (`id_group`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user__customers`
--
ALTER TABLE `user__customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `user__groups`
--
ALTER TABLE `user__groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_id_group_foreign` FOREIGN KEY (`id_group`) REFERENCES `groups` (`id`),
  ADD CONSTRAINT `customers_id_status_foreign` FOREIGN KEY (`id_status`) REFERENCES `statuses` (`id`),
  ADD CONSTRAINT `customers_region_foreign` FOREIGN KEY (`region`) REFERENCES `regions` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_id_role_foreign` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user__customers`
--
ALTER TABLE `user__customers`
  ADD CONSTRAINT `user__customers_id_customer_foreign` FOREIGN KEY (`id_customer`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user__customers_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user__groups`
--
ALTER TABLE `user__groups`
  ADD CONSTRAINT `user__groups_id_group_foreign` FOREIGN KEY (`id_group`) REFERENCES `groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user__groups_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
