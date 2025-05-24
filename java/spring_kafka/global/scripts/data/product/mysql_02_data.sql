INSERT INTO `productdb`.`product` (`id`, `name`, `price`)
VALUES
(1, 'Head & Shoulders', 4.5),
(2, 'Onions', 0.27),
(3, 'Tomatoes', 0.35),
(4, 'Potatoes', 0.29),
(5, 'Ajax', 2.30),
(6, 'Nescafe Instant Coffee', 5.99),
(7, 'Lady Grey Tea', 3.5),
(8, 'Apple', 0.20),
(9, 'Orange', 0.59),
(10, 'Avocado', 1.29);


INSERT INTO `productdb`.`cart` (`id`, `user_id`, `product_id`)
VALUES
(1, 1, 1),
(2, 1, 4),
(3, 2, 1),
(4, 1, 3),
(5, 3, 1),
(6, 1, 5),
(7, 2, 2),
(8, 2, 9),
(9, 2, 8),
(10, 1, 6);