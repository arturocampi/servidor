USE `mvc`;

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(50) DEFAULT NULL,
  `type_id` int,
  `price` double not null,
  INDEX (type_id),
 FOREIGN KEY (type_id) REFERENCES product_types(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `products` VALUES
(1, 'ambar', 1, 0.8),
(2, 'Coca Cola', 2, 1),
(3, 'Fanta Limón', 2, 1),
(4, 'Fanta Naranja', 2, 1),
(5, 'Gin Tonic', 5, 3)
;


