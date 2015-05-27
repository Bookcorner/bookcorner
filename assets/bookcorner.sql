-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 27, 2015 at 08:38 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bookcorner`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

DROP TABLE IF EXISTS `author`;
CREATE TABLE IF NOT EXISTS `author` (
`id` int(11) unsigned NOT NULL,
  `author_id` int(11) unsigned DEFAULT NULL,
  `author_fullname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_desc` text COLLATE utf8mb4_unicode_ci,
  `author_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authorstate_id` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `author_id`, `author_fullname`, `author_desc`, `author_img`, `authorstate_id`) VALUES
(1, 1, 'Patrick Rothfuss', 'Patrick James Rothfuss (nacido  el 6 de junio de 1973) es un escritor estadounidense de fantasía y profesor adjunto de literatura y filología inglesa en la Universidad de Wisconsin. Es el autor de la serie Crónica del asesino de reyes, que fue rechazada por varias editoriales antes de que el primer libro de la serie E nombre del viento fuese publicado en el año 2007. Obtuvo muy buenas críticas y se convirtió en un éxito de ventas. En españa fue publicado en el año 2009.', 'patrickrothfuss.jpeg', 1),
(2, 2, 'Isabel Allende', 'Isabel Allende Llona (Lima, Perú, 2 de agosto de 1942) es una escritora chilena, miembro de la Academia Estadounidense de las Artes y las Letras desde 2004. Obtuvo el Premio Nacional de Literatura de su país en 2010. Autora de superventas, la tirada total de sus libros alcanza 57 millones de ejemplares y sus obras han sido traducidas a 35 idiomas. Es considerada la escritora viva de lengua española más leída del mundo', 'isabelallende.jpeg', 1),
(3, 3, 'Noah Gordon', 'En un piso en Providence Street en Worcester, Massachusetts, en el Día del Armisticio, la esposa de Robert Gordon, Rose, dio a luz en el hogar a su segundo hijo. Fui llamado Noah en la memoria del padre de mi madre, Noah Melnikoff, que había muerto sólo unos meses antes. Él había sido un encuadernador y, a decir de todos, un hombre maravilloso. Su viuda, mi abuela, Sarah Melnikoff, vivió con mi familia durante los próximos 35 años, y era como una segunda madre para mí.', 'noahgordon.jpg', 1),
(4, 4, 'Paulo Coelho', 'Es uno de los escritores y novelista más leídos del mundo con más de 150 millones de libros vendidos en más de 150 países (224 territorios), traducidos a 80 lenguas. Desde octubre de 2002 es miembro de la Academia Brasileña de las Letras. Ha recibido destacados premios y reconocimientos internacionales, como la prestigiosa distinción Chevalier de L''Ordre National de La Legion d''Honneur del gobierno francés, la Medalla de Oro de Galicia y el premio Crystal Award que concede el Foro Económico Mundial, entre muchos otros premios que ha obtenido gracias a su gran éxito. Además de recibir destacados premios y menciones internacionales, en la actualidad es consejero especial de la Unesco para el programa de convergencia espiritual y diálogos interculturales así como Mensajero de la Paz de Naciones Unidas.', 'paulocoelho.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `authorstate`
--

DROP TABLE IF EXISTS `authorstate`;
CREATE TABLE IF NOT EXISTS `authorstate` (
`id` int(11) unsigned NOT NULL,
  `authorstate_id` int(11) unsigned DEFAULT NULL,
  `authorstate_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authorstate`
--

INSERT INTO `authorstate` (`id`, `authorstate_id`, `authorstate_name`) VALUES
(1, 1, 'Available'),
(2, 2, 'Pending'),
(3, 3, 'Not Available');

-- --------------------------------------------------------

--
-- Table structure for table `author_book`
--

DROP TABLE IF EXISTS `author_book`;
CREATE TABLE IF NOT EXISTS `author_book` (
`id` int(11) unsigned NOT NULL,
  `book_id` int(11) unsigned DEFAULT NULL,
  `author_id` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `author_book`
--

INSERT INTO `author_book` (`id`, `book_id`, `author_id`) VALUES
(1, 1, 1),
(2, 3, 1),
(3, 2, 2),
(4, 4, 3),
(5, 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
`id` int(11) unsigned NOT NULL,
  `book_id` int(11) unsigned DEFAULT NULL,
  `book_isbn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_desc` text COLLATE utf8mb4_unicode_ci,
  `book_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bookstate_id` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `book_id`, `book_isbn`, `book_name`, `book_desc`, `book_img`, `bookstate_id`) VALUES
(1, 1, '8401337208', 'El Nombre del Viento', 'Viajé, amé, perdí, confié y me traicionaron. En una posada en tierra de nadie, un hombre se dispone a relatar, por primera vez, la auténtica historia de su vida. Una historia que únicamente él conoce y que ha quedado diluida tras los rumores, las conjeturas y los cuentos de taberna que le han convertido en un personaje legendario a quien todos daban ya por muerto: Kvothe... músico, mendigo, ladrón, estudiante, mago, héroe y asesino. Ahora va a revelar la verdad sobre sí mismo. Y para ello debe empezar por el principio: su infancia en una troupe de artistas itinerantes, los años malviviendo como un ladronzuelo en las calles de una gran ciudad y su llegada a una universidad donde esperaba encontrar todas las respuestas que había estado buscando.', 'endv.jpg', 1),
(2, 2, '9788483462034', 'La Casa de los Espíritus', 'Primera novela de Isabel Allende que nos narra la historia de un poderosa familia de terratenientes latinoamericanos. El depósito patriarca Esteban Trueba ha construido con mano de hierro un imperio privado que empieza a tambalearse a raíz del paso del tiempo y de un entorno social explosivo. Finalmente, la decadencia perso nal de patriarca arrastrará a los Trueba a una dolorosa desintegración. Atrapados en unas dramáticas relaciones familiares, los personajes de esta portentosa novela encarnan las tensiones sociales y espirituales de una época que abarca gran parte de este siglo. Con ternura e impecable factura literaria, Isabel Allende perfila el destino de sus personajes como parte indisoluble del destino colectivo de América Latina, marcado por el mestizaje, las injusticias sociales y la búsqueda de la propia identidad.', 'lacasadelosespiritus.png', 1),
(3, 3, '9788401339639', 'El Temor de un Hombre Sabio', 'El temor de un hombre sabio. Crónica del asesino de reyes: segundo día (título original: The Wise Man''s Fear. The Kingkiller Chronicle: Day Two) es la continuación de El nombre del viento y pertenece a la serie Crónica del asesino de reyes. Es la segunda novela del escritor estadounidense y profesor adjunto de lengua y literatura inglesa en la universidad de Wisconsin1 Patrick Rothfuss. El libro, cuya primera edición data de 2011, ya cuenta con la vista buena de críticos de todo el mundo y su libro precedente ganó el Premio Pluma al mejor libro de literatura fantástica permitiendo a su autor a dedicarse exclusivamente a la escritura.', 'etdus.jpg', 1),
(4, 4, '978-0-671-47748-6', 'El médico', 'La novela trata sobre la vida Rob J. Cole, que en sus inicios fue un niño hijo de una familia del gremio de carpinteros de Londres. A los nueve años se queda huérfano. La muerte de sus padres le descubre «su don», ya que es capaz de percibir si alguien está próximo a la muerte sólo con tocarlo. Durante unos días se encarga del cuidado de sus cuatro hermanos, a quienes el jefe del gremio va encontrando nuevos hogares poco a poco. Cuando se queda solo, bajo el peligro de ser vendido como esclavo, fortuitamente pasará a ser el ayudante-aprendiz de Henry Croft (Barber), un hombre campechano que recorre Inglaterra montando espectáculos de malabarismo para atraer al público a su negocio de cirujano-barbero, donde realiza pequeñas curas y vende un brebaje curalotodo: la «Panacea Universal».', 'elmedico.jpeg', 1),
(5, 5, '85-7665-185-8', 'El Alquimista', 'En Andalucía, un joven pastor pasea por las llanuras contemplando la naturaleza. El joven Santiago tiene un sueño repetido mientras descansa con sus ovejas en un pasto andaluz, por lo que decide acudir a una gitana para que le interprete el sueño. Después de quedar descontento con la respuesta que recibe, se sienta en un banco de la plaza a leer un libro y conoce a un anciano que dice ser el rey de Salem. Tras tener una conversación con él, en la que le deja claro que es alguien muy especial, Santiago decide emprender un viaje por el norte de África en busca de un tesoro. En su camino conocerá a un sinfín de personas que, cómo él, buscan su propia Leyenda Personal.', 'elalquimista.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bookstate`
--

DROP TABLE IF EXISTS `bookstate`;
CREATE TABLE IF NOT EXISTS `bookstate` (
`id` int(11) unsigned NOT NULL,
  `bookstate_id` int(11) unsigned DEFAULT NULL,
  `bookstate_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookstate`
--

INSERT INTO `bookstate` (`id`, `bookstate_id`, `bookstate_name`) VALUES
(1, 1, 'Available'),
(2, 2, 'Pending'),
(3, 3, 'Not Available');

-- --------------------------------------------------------

--
-- Table structure for table `book_genrebook`
--

DROP TABLE IF EXISTS `book_genrebook`;
CREATE TABLE IF NOT EXISTS `book_genrebook` (
`id` int(11) unsigned NOT NULL,
  `book_id` int(11) unsigned DEFAULT NULL,
  `genrebook_id` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_genrebook`
--

INSERT INTO `book_genrebook` (`id`, `book_id`, `genrebook_id`) VALUES
(1, 1, 1),
(6, 1, 3),
(8, 1, 4),
(11, 1, 5),
(5, 2, 2),
(2, 3, 1),
(7, 3, 3),
(9, 3, 4),
(12, 3, 5),
(3, 4, 1),
(4, 5, 1),
(10, 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `book_listbook`
--

DROP TABLE IF EXISTS `book_listbook`;
CREATE TABLE IF NOT EXISTS `book_listbook` (
`id` int(11) unsigned NOT NULL,
  `listbook_id` int(11) unsigned DEFAULT NULL,
  `book_id` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_listbook`
--

INSERT INTO `book_listbook` (`id`, `listbook_id`, `book_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 2, 2),
(4, 3, 3),
(5, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `genrebook`
--

DROP TABLE IF EXISTS `genrebook`;
CREATE TABLE IF NOT EXISTS `genrebook` (
`id` int(11) unsigned NOT NULL,
  `genrebook_id` int(11) unsigned DEFAULT NULL,
  `genrebook_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genrebook`
--

INSERT INTO `genrebook` (`id`, `genrebook_id`, `genrebook_name`) VALUES
(1, 1, 'Novela'),
(2, 2, 'Narrativa'),
(3, 3, 'Fantasía Heroíca'),
(4, 4, 'Fantasía'),
(5, 5, 'Alta Fantasía');

-- --------------------------------------------------------

--
-- Table structure for table `listbook`
--

DROP TABLE IF EXISTS `listbook`;
CREATE TABLE IF NOT EXISTS `listbook` (
`id` int(11) unsigned NOT NULL,
  `listbook_id` int(11) unsigned DEFAULT NULL,
  `listbook_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `listbook`
--

INSERT INTO `listbook` (`id`, `listbook_id`, `listbook_name`) VALUES
(1, 1, 'Listbook of admin'),
(2, 2, 'List of moderator'),
(3, 3, 'List of registrate');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned DEFAULT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_surname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_nickname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_pwd` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_validation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_genre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `listbook_id` int(11) unsigned DEFAULT NULL,
  `userrole_id` int(11) unsigned DEFAULT NULL,
  `userstatus_id` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_id`, `user_name`, `user_surname`, `user_nickname`, `user_pwd`, `user_validation`, `user_email`, `user_avatar`, `user_genre`, `listbook_id`, `userrole_id`, `userstatus_id`) VALUES
(1, 1, 'sr.admin', 'nistrate', 'admin', 'b248e08d5c23541514558eea059c08cf', 'jsxDMJt2F0QXO7vrcRAenCLE', 'juananortizc@gmail.com', 'boss.jpg', 'M', 1, 3, 1),
(2, 2, 'mr.comando', 'alfa', 'moderator', '1b50a1f57670447d8460610def43870f', 'zbn1OEyPdt65ABoIhgcSvVZF', 'mcantelar@gmail.com', 'secretary.jpeg', 'M', 2, 2, 1),
(3, 3, 'justin', 'robbeen', 'registrate', 'edc735489b8e81c9e6954de8db5275d3', '2JFR97xzncleYypSBqhQTrui', 'rcortes@gmail.com', 'justin.jpg', 'M', 3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `userrole`
--

DROP TABLE IF EXISTS `userrole`;
CREATE TABLE IF NOT EXISTS `userrole` (
`id` int(11) unsigned NOT NULL,
  `userrole_id` int(11) unsigned DEFAULT NULL,
  `userrole_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userrole_desc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userrole`
--

INSERT INTO `userrole` (`id`, `userrole_id`, `userrole_name`, `userrole_desc`) VALUES
(1, 1, 'Registered', 'Normal registered user'),
(2, 2, 'Moderator', 'Registered user with aditional options'),
(3, 3, 'Administrator', 'Application boss');

-- --------------------------------------------------------

--
-- Table structure for table `userstatus`
--

DROP TABLE IF EXISTS `userstatus`;
CREATE TABLE IF NOT EXISTS `userstatus` (
`id` int(11) unsigned NOT NULL,
  `userstate_id` int(11) unsigned DEFAULT NULL,
  `userstate_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userstatus`
--

INSERT INTO `userstatus` (`id`, `userstate_id`, `userstate_name`) VALUES
(1, 1, 'Active'),
(2, 2, 'Inactive'),
(3, 3, 'Banned');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
 ADD PRIMARY KEY (`id`), ADD KEY `index_foreignkey_author_author` (`author_id`), ADD KEY `index_foreignkey_author_authorstate` (`authorstate_id`);

--
-- Indexes for table `authorstate`
--
ALTER TABLE `authorstate`
 ADD PRIMARY KEY (`id`), ADD KEY `index_foreignkey_authorstate_authorstate` (`authorstate_id`);

--
-- Indexes for table `author_book`
--
ALTER TABLE `author_book`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UQ_e0e079f6f0d5f49bc0371b9102e1dabadd275712` (`author_id`,`book_id`), ADD KEY `index_foreignkey_author_book_book` (`book_id`), ADD KEY `index_foreignkey_author_book_author` (`author_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
 ADD PRIMARY KEY (`id`), ADD KEY `index_foreignkey_book_book` (`book_id`), ADD KEY `index_foreignkey_book_bookstate` (`bookstate_id`);

--
-- Indexes for table `bookstate`
--
ALTER TABLE `bookstate`
 ADD PRIMARY KEY (`id`), ADD KEY `index_foreignkey_bookstate_bookstate` (`bookstate_id`);

--
-- Indexes for table `book_genrebook`
--
ALTER TABLE `book_genrebook`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UQ_dbe273d3e15455ebddec396ee911bd43c2188721` (`book_id`,`genrebook_id`), ADD KEY `index_foreignkey_book_genrebook_book` (`book_id`), ADD KEY `index_foreignkey_book_genrebook_genrebook` (`genrebook_id`);

--
-- Indexes for table `book_listbook`
--
ALTER TABLE `book_listbook`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UQ_fc5bd33774fc47d44a7ce5adb0b1750674b1e278` (`book_id`,`listbook_id`), ADD KEY `index_foreignkey_book_listbook_listbook` (`listbook_id`), ADD KEY `index_foreignkey_book_listbook_book` (`book_id`);

--
-- Indexes for table `genrebook`
--
ALTER TABLE `genrebook`
 ADD PRIMARY KEY (`id`), ADD KEY `index_foreignkey_genrebook_genrebook` (`genrebook_id`);

--
-- Indexes for table `listbook`
--
ALTER TABLE `listbook`
 ADD PRIMARY KEY (`id`), ADD KEY `index_foreignkey_listbook_listbook` (`listbook_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD KEY `index_foreignkey_user_user` (`user_id`), ADD KEY `index_foreignkey_user_listbook` (`listbook_id`), ADD KEY `index_foreignkey_user_userrole` (`userrole_id`), ADD KEY `index_foreignkey_user_userstatus` (`userstatus_id`);

--
-- Indexes for table `userrole`
--
ALTER TABLE `userrole`
 ADD PRIMARY KEY (`id`), ADD KEY `index_foreignkey_userrole_userrole` (`userrole_id`);

--
-- Indexes for table `userstatus`
--
ALTER TABLE `userstatus`
 ADD PRIMARY KEY (`id`), ADD KEY `index_foreignkey_userstatus_userstate` (`userstate_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `authorstate`
--
ALTER TABLE `authorstate`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `author_book`
--
ALTER TABLE `author_book`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `bookstate`
--
ALTER TABLE `bookstate`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `book_genrebook`
--
ALTER TABLE `book_genrebook`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `book_listbook`
--
ALTER TABLE `book_listbook`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `genrebook`
--
ALTER TABLE `genrebook`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `listbook`
--
ALTER TABLE `listbook`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `userrole`
--
ALTER TABLE `userrole`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `userstatus`
--
ALTER TABLE `userstatus`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `author`
--
ALTER TABLE `author`
ADD CONSTRAINT `c_fk_author_author_id` FOREIGN KEY (`author_id`) REFERENCES `author` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
ADD CONSTRAINT `c_fk_author_authorstate_id` FOREIGN KEY (`authorstate_id`) REFERENCES `authorstate` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `authorstate`
--
ALTER TABLE `authorstate`
ADD CONSTRAINT `c_fk_authorstate_authorstate_id` FOREIGN KEY (`authorstate_id`) REFERENCES `authorstate` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `author_book`
--
ALTER TABLE `author_book`
ADD CONSTRAINT `c_fk_author_book_author_id` FOREIGN KEY (`author_id`) REFERENCES `author` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `c_fk_author_book_book_id` FOREIGN KEY (`book_id`) REFERENCES `book` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `book`
--
ALTER TABLE `book`
ADD CONSTRAINT `c_fk_book_book_id` FOREIGN KEY (`book_id`) REFERENCES `book` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
ADD CONSTRAINT `c_fk_book_bookstate_id` FOREIGN KEY (`bookstate_id`) REFERENCES `bookstate` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `bookstate`
--
ALTER TABLE `bookstate`
ADD CONSTRAINT `c_fk_bookstate_bookstate_id` FOREIGN KEY (`bookstate_id`) REFERENCES `bookstate` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `book_genrebook`
--
ALTER TABLE `book_genrebook`
ADD CONSTRAINT `c_fk_book_genrebook_book_id` FOREIGN KEY (`book_id`) REFERENCES `book` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `c_fk_book_genrebook_genrebook_id` FOREIGN KEY (`genrebook_id`) REFERENCES `genrebook` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `book_listbook`
--
ALTER TABLE `book_listbook`
ADD CONSTRAINT `c_fk_book_listbook_book_id` FOREIGN KEY (`book_id`) REFERENCES `book` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `c_fk_book_listbook_listbook_id` FOREIGN KEY (`listbook_id`) REFERENCES `listbook` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `genrebook`
--
ALTER TABLE `genrebook`
ADD CONSTRAINT `c_fk_genrebook_genrebook_id` FOREIGN KEY (`genrebook_id`) REFERENCES `genrebook` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `listbook`
--
ALTER TABLE `listbook`
ADD CONSTRAINT `c_fk_listbook_listbook_id` FOREIGN KEY (`listbook_id`) REFERENCES `listbook` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
ADD CONSTRAINT `c_fk_user_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
ADD CONSTRAINT `c_fk_user_userrole_id` FOREIGN KEY (`userrole_id`) REFERENCES `userrole` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
ADD CONSTRAINT `c_fk_user_userstatus_id` FOREIGN KEY (`userstatus_id`) REFERENCES `userstatus` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `userrole`
--
ALTER TABLE `userrole`
ADD CONSTRAINT `c_fk_userrole_userrole_id` FOREIGN KEY (`userrole_id`) REFERENCES `userrole` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
