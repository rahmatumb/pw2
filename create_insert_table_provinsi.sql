CREATE TABLE `provinsi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `provinsi` (`id`, `nama`) VALUES
(1,	'DKI Jakarta'),
(2,	'Banten'),
(3,	'Jawa Barat');