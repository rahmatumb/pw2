CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `user` (`id`, `username`, `password`, `nama`) VALUES
(1,	'demo',	'QpgQwaiofZLSUhzEQ0gTNpilsh16SNWljTL0tQH3ocpUeksk0uvvxtmy5/ROqzF712kR8dh7940sRZo7TUAcgA==',	'User Demo');