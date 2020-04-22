CREATE TABLE `kota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_provinsi` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `penduduk` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_provinsi` (`id_provinsi`),
  CONSTRAINT `kota_ibfk_1` FOREIGN KEY (`id_provinsi`) REFERENCES `provinsi` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `kota` (`id`, `id_provinsi`, `nama`, `penduduk`) VALUES
(1,	1,	'Jakarta Barat',	8000000),
(2,	1,	'Jakarta Selatan',	10000000),
(3,	2,	'Kota Tangerang',	5000000),
(4,	3,	'Bandung',	7000000),
(5,	3,	'Cirebon',	4000000);