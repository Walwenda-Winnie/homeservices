
-- CREATE DATABASE services

CREATE TABLE providers
(
    id integer unsigned AUTO_INCREMENT PRIMARY KEY,
    name varchar(255) NOT NULL,
    contact varchar(20) NOT NULL,
    descr varchar(1000) NOT NULL,
    adder1 varchar(255) NOT NULL,
    adder2 varchar(255) NOT NULL,
    city varchar(50) NOT NULL,
    password varchar(255) NOT NULL,
    photo varchar(255) NOT NULL,
    profession varchar(255) NOT NULL
);

CREATE TABLE bookings
(
    id integer unsigned AUTO_INCREMENT PRIMARY KEY,
    provider_id integer unsigned NOT NULL,
    fname varchar(255) NOT NULL,
    lname varchar(255) NOT NULL,
    contact varchar(20) NOT NULL,
    adder varchar(255) NOT NULL,
    date date NOT NULL,
    payment varchar(30) NOT NULL,
    queries varchar(255) NOT NULL
);



SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";




CREATE TABLE `inv_order` (
  `order_id` int(11) NOT NULL,
  `order_no` varchar(50) NOT NULL,
  `order_date` date NOT NULL,
  `order_receiver_name` varchar(250) NOT NULL,
  `order_receiver_address` text NOT NULL,
  `order_total_before_tax` decimal(10,0) NOT NULL,
  `order_total_tax1` decimal(10,0) NOT NULL,
  `order_total_tax2` decimal(10,0) NOT NULL,
  `order_total_tax3` decimal(10,0) NOT NULL,
  `order_total_tax` decimal(10,0) NOT NULL,
  `order_total_after_tax` int(11) NOT NULL,
  `order_datetime` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


INSERT INTO `inv_order` (`order_id`, `order_no`, `order_date`, `order_receiver_name`, `order_receiver_address`, `order_total_before_tax`, `order_total_tax1`, `order_total_tax2`, `order_total_tax3`, `order_total_tax`, `order_total_after_tax`, `order_datetime`) VALUES
(14, '169690', '2021-07-06', 'Jennifer Letcher', '3116 George Street', '945', '12', '12', '1', '25', 970, 1625592940),
(13, '104780', '2021-07-05', 'Mary Sheen', '4140 Worley Avenue', '937', '17', '17', '15', '49', 986, 1625592747),
(12, '102566', '2021-07-02', 'Courtney Chandler', '1253 Elliott Street', '112', '1', '1', '1', '3', 112, 1625590918),
(10, '101255', '2021-07-01', 'James Alexanr', '7785 Ralph Street', '48', '1', '1', '0', '2', 50, 1625579598),
(11, '102566', '2021-07-01', 'Agustin A Anderson', '174 Asylum Avenue', '150', '2', '2', '1', '5', 155, 1625590293);


CREATE TABLE `inv_order_service` (
  `order_service_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `service_name` varchar(250) NOT NULL,
  `order_service_quantity` decimal(10,0) NOT NULL,
  `order_service_price` decimal(10,0) NOT NULL,
  `order_service_actual_amount` decimal(10,0) NOT NULL,
  `order_service_tax1_rate` decimal(10,0) NOT NULL,
  `order_service_tax1_amount` decimal(10,0) NOT NULL,
  `order_service_tax2_rate` decimal(10,0) NOT NULL,
  `order_service_tax2_amount` decimal(10,0) NOT NULL,
  `order_service_tax3_rate` decimal(10,0) NOT NULL,
  `order_service_tax3_amount` decimal(10,0) NOT NULL,
  `order_service_final_amount` decimal(10,0) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


INSERT INTO `inv_order_service` (`order_service_id`, `order_id`, `service_name`, `order_service_quantity`, `order_service_price`, `order_service_actual_amount`, `order_service_tax1_rate`, `order_service_tax1_amount`, `order_service_tax2_rate`, `order_service_tax2_amount`, `order_service_tax3_rate`, `order_service_tax3_amount`, `order_service_final_amount`) VALUES
(17, 13, 'Product Four', '9', '28', '252', '2', '5', '3', '8', '3', '8', '272'),
(16, 13, 'Product Three', '20', '10', '200', '1', '2', '1', '2', '1', '2', '206'),
(14, 13, 'Product One', '16', '14', '224', '2', '4', '1', '2', '0', '0', '231'),
(15, 13, 'Product Two', '29', '9', '261', '2', '5', '2', '5', '2', '5', '277'),
(13, 12, 'RUNMUS Gaming Headset', '7', '16', '112', '0', '1', '0', '1', '0', '1', '112'),
(9, 10, 'Demo Item', '6', '8', '48', '2', '1', '2', '1', '0', '0', '50'),
(10, 11, 'Demo One', '5', '11', '55', '1', '1', '1', '1', '0', '0', '56'),
(11, 11, 'Demo Two', '9', '5', '45', '1', '0', '1', '0', '0', '0', '46'),
(12, 11, 'Demo Three', '2', '25', '50', '2', '1', '2', '1', '2', '1', '53'),
(18, 14, 'P one', '29', '10', '290', '0', '0', '0', '0', '0', '0', '290'),
(19, 14, 'P two', '37', '15', '555', '2', '11', '2', '11', '0', '0', '577'),
(20, 14, 'P three', '10', '10', '100', '1', '1', '1', '1', '1', '1', '103');

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'user', 'password');

ALTER TABLE `inv_order`
  ADD PRIMARY KEY (`order_id`);

ALTER TABLE `inv_order_service`
  ADD PRIMARY KEY (`order_service_id`);

ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `inv_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

ALTER TABLE `inv_order_service`
  MODIFY `order_service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

  CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` longblob NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;


