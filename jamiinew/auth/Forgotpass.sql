CREATE TABLE `pass_reset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL, 
   PRIMARY KEY (`id`)
);