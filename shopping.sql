/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : shopping

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2022-07-24 09:45:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin', 'f925916e2754e5e03f75dd58a5733251', '2017-01-24 21:51:18', '21-06-2018 08:27:55 PM');

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(255) DEFAULT NULL,
  `categoryDescription` longtext DEFAULT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('7', 'Trouser', '				casual trouser			', '2020-03-09 08:52:08', '08-05-2020 05:40:32 PM');
INSERT INTO `category` VALUES ('8', 'Shorts', '				Casual shorts 									', '2020-03-09 08:53:15', '28-05-2020 11:08:49 AM');
INSERT INTO `category` VALUES ('9', 'Shirts', 'long sleeve and short sleeve shirts 	are to be 								', '2020-03-09 08:54:39', '27-05-2020 09:37:32 PM');

-- ----------------------------
-- Table structure for discount
-- ----------------------------
DROP TABLE IF EXISTS `discount`;
CREATE TABLE `discount` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` int(11) NOT NULL,
  `subcategory` int(11) NOT NULL,
  `pname` varchar(22) NOT NULL,
  `pricebd` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `dis` varchar(55) NOT NULL,
  `shipping` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of discount
-- ----------------------------

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) DEFAULT NULL,
  `productId` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `orderDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `paymentMethod` varchar(50) DEFAULT NULL,
  `orderStatus` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES ('24', '6', '51', '1', '2020-06-02 23:23:07', 'COD', null);
INSERT INTO `orders` VALUES ('25', '6', '52', '1', '2020-06-02 23:26:51', null, null);
INSERT INTO `orders` VALUES ('26', '7', '57', '1', '2022-07-10 10:29:42', null, null);

-- ----------------------------
-- Table structure for ordertrackhistory
-- ----------------------------
DROP TABLE IF EXISTS `ordertrackhistory`;
CREATE TABLE `ordertrackhistory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderId` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `remark` mediumtext DEFAULT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ordertrackhistory
-- ----------------------------

-- ----------------------------
-- Table structure for productreviews
-- ----------------------------
DROP TABLE IF EXISTS `productreviews`;
CREATE TABLE `productreviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productId` int(11) DEFAULT NULL,
  `quality` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `review` longtext DEFAULT NULL,
  `reviewDate` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of productreviews
-- ----------------------------
INSERT INTO `productreviews` VALUES ('5', '2', '1', '1', '1', 'e', 'ee', 'eeew', '2020-02-16 11:18:58');
INSERT INTO `productreviews` VALUES ('6', '2', '1', '1', '1', '1', '2', '3', '2020-02-16 11:20:12');
INSERT INTO `productreviews` VALUES ('7', '53', '0', '0', '5', 'sa', 's', 's', '2020-05-27 17:04:07');

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` int(11) NOT NULL,
  `subCategory` int(11) DEFAULT NULL,
  `size` varchar(11) NOT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `productCost` varchar(255) NOT NULL,
  `productCompany` varchar(255) DEFAULT NULL,
  `productPrice` int(11) DEFAULT NULL,
  `productQty` int(11) NOT NULL,
  `productPriceBeforeDiscount` int(11) DEFAULT NULL,
  `productDescription` longtext DEFAULT NULL,
  `productImage1` varchar(255) DEFAULT NULL,
  `productImage2` varchar(255) DEFAULT NULL,
  `productImage3` varchar(255) DEFAULT NULL,
  `shippingCharge` int(11) DEFAULT NULL,
  `productAvailability` varchar(255) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('51', '7', '13', '1', 'shy1', '450', null, '550', '20', null, 'TESIING\r\ntestintestintestintestin\r\ntestintestintestintestintestintestintestintestin\r\ntestintestintestintestintestintestintestintestintestintestin\r\ntestintestintestintestintestintestintestintestintestintestintestin', 'tr3.jpg', 'tr4.jpg', 'tr5.png', '0', null, '2020-05-25 02:47:51', null);
INSERT INTO `products` VALUES ('52', '7', '14', '2', 'Casual Trouser', '600', null, '850', '35', null, 'This is the test For Casual Trouser\r\nI want test the sub,size that relavent for the customer  	', 'product-5.jpg', '3.jpg', 'product-6.jpg', '0', null, '2020-05-25 23:22:36', null);
INSERT INTO `products` VALUES ('53', '7', '13', '3', 'Formal Trouser', '700', null, '975', '30', null, 'This is Formal Trouser to Rich Look for the Men\r\ntest for size and subcategory', 'sh5.jpg', 'sh4.jpg', 'product-6.jpg', '0', null, '2020-05-25 23:34:02', null);
INSERT INTO `products` VALUES ('54', '8', '17', '5', 'Short-BalunP', '550', null, '800', '10', null, 'size : 28 New Baloon Pocket Short\r\ntesting shorts\r\nthis is that short		', 'product-1.jpg', 'sho7.jpg', 'bsh3.jpg', '0', null, '2020-05-25 23:45:23', null);
INSERT INTO `products` VALUES ('55', '8', '17', '6', 'Shorts II', '450', null, '750', '50', null, 'size : 30 New Baloon Pocket Short\r\ntesting shorts\r\nthis is that short				', 'product-2.jpg', 'product-3.jpg', 'product-7.jpg', '0', null, '2020-05-25 23:46:56', null);
INSERT INTO `products` VALUES ('56', '9', '15', '7', 'Short sleeve Shirt I', '450', null, '700', '80', null, 'size : S New Shirt Pocket \r\ntesting shirt\r\nthis is that 				', 'sh.jpg', 'product-8.jpg', 'sh9.png', '0', null, '2020-05-25 23:49:24', null);
INSERT INTO `products` VALUES ('57', '9', '15', '8', 'Shirt of S.Sleeve', '600', null, '950', '40', null, 'size : m New  Shirt \r\ntesting Shirt\r\nthis is that Shirt				', 'sh6.jpg', 'sh7.jpg', 'sh9.png', '0', null, '2020-05-25 23:51:59', null);
INSERT INTO `products` VALUES ('58', '7', '13', '1', 'Formal Trouser ', '690', null, '990', '70', null, 'Size : 28\r\nColor : black\r\nMaterial : cotton\r\nthis is the best for the summer\r\nYou can buy it in Resanable	Price	', 'product-6.jpg', 'sh4.jpg', 'sh4.jpg', '0', null, '2020-05-26 10:22:10', null);
INSERT INTO `products` VALUES ('59', '8', '19', '9', 'Normal', '450', null, '550', '10', null, 'Size : 28\r\nMaterial : Hand loom cotton \r\n	', 'sho6.jpg', 'sho.jpg', 'product-7.jpg', '122', null, '2020-05-28 11:22:07', null);
INSERT INTO `products` VALUES ('60', '9', '18', '12', 'Supream', '600', null, '800', '40', null, 'Size : S\r\nMaterial : Cotton\r\nMany colors are available\r\n		', 'sh1.jpg', 'sh8.png', 'sh3.jpg', '250', null, '2020-05-28 11:31:30', null);
INSERT INTO `products` VALUES ('61', '9', '18', '13', 'L-rick long sleeve', '670', null, '850', '10', null, 'Size : M\r\nMaterial : linen\r\nNo-of colors are available\r\nhole sale price may be relavent  ', 'sh3.jpg', 'product-4.jpg', 'sh8.png', '122', null, '2020-05-28 11:37:26', null);

-- ----------------------------
-- Table structure for size
-- ----------------------------
DROP TABLE IF EXISTS `size`;
CREATE TABLE `size` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` int(11) NOT NULL,
  `subcategory` int(11) NOT NULL,
  `size` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of size
-- ----------------------------
INSERT INTO `size` VALUES ('1', '7', '13', '28');
INSERT INTO `size` VALUES ('2', '7', '14', '28');
INSERT INTO `size` VALUES ('3', '7', '13', '30');
INSERT INTO `size` VALUES ('4', '7', '14', '30');
INSERT INTO `size` VALUES ('5', '8', '17', '28');
INSERT INTO `size` VALUES ('6', '8', '17', '30');
INSERT INTO `size` VALUES ('7', '9', '15', 'S');
INSERT INTO `size` VALUES ('8', '9', '15', 'M');
INSERT INTO `size` VALUES ('9', '8', '19', '28');
INSERT INTO `size` VALUES ('10', '8', '19', '30');
INSERT INTO `size` VALUES ('11', '8', '19', '32');
INSERT INTO `size` VALUES ('12', '9', '18', 'S');
INSERT INTO `size` VALUES ('13', '9', '18', 'M');

-- ----------------------------
-- Table structure for subcategory
-- ----------------------------
DROP TABLE IF EXISTS `subcategory`;
CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoryid` int(11) DEFAULT NULL,
  `subcategory` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of subcategory
-- ----------------------------
INSERT INTO `subcategory` VALUES ('13', '7', 'formal', '2020-03-09 08:55:50', null);
INSERT INTO `subcategory` VALUES ('14', '7', 'casual', '2020-03-09 08:56:12', null);
INSERT INTO `subcategory` VALUES ('15', '9', 'Short Sleeve', '2020-03-09 08:56:49', '28-05-2020 11:08:14 AM');
INSERT INTO `subcategory` VALUES ('17', '8', 'baloon pocket', '2020-05-14 01:57:53', null);
INSERT INTO `subcategory` VALUES ('18', '9', 'Long Sleeve', '2020-05-28 11:07:47', null);
INSERT INTO `subcategory` VALUES ('19', '8', 'Sport', '2020-05-28 11:12:57', null);

-- ----------------------------
-- Table structure for userlog
-- ----------------------------
DROP TABLE IF EXISTS `userlog`;
CREATE TABLE `userlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userEmail` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT current_timestamp(),
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of userlog
-- ----------------------------
INSERT INTO `userlog` VALUES ('34', 'sandun@123', 0x3A3A3100000000000000000000000000, '2020-05-17 11:40:14', null, '1');
INSERT INTO `userlog` VALUES ('35', 'sandun@123', 0x3A3A3100000000000000000000000000, '2020-05-20 20:40:57', null, '1');
INSERT INTO `userlog` VALUES ('36', 'sandun@123', 0x3A3A3100000000000000000000000000, '2020-05-23 09:30:33', '23-05-2020 09:33:22 AM', '1');
INSERT INTO `userlog` VALUES ('37', 'sandun@123', 0x3A3A3100000000000000000000000000, '2020-05-23 09:53:52', '23-05-2020 10:12:26 AM', '1');
INSERT INTO `userlog` VALUES ('38', 'sandun@123', 0x3A3A3100000000000000000000000000, '2020-05-24 18:59:06', null, '1');
INSERT INTO `userlog` VALUES ('58', 'sandun@123', 0x3A3A3100000000000000000000000000, '2020-06-02 23:17:08', null, '1');
INSERT INTO `userlog` VALUES ('59', 'sandunhashan744@gmail.com', 0x3132372E302E302E3100000000000000, '2022-07-10 10:29:17', '10-07-2022 10:34:38 AM', '1');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `shippingAddress` longtext DEFAULT NULL,
  `shippingState` varchar(255) DEFAULT NULL,
  `shippingCity` varchar(255) DEFAULT NULL,
  `shippingPincode` int(11) DEFAULT NULL,
  `billingAddress` longtext DEFAULT NULL,
  `billingState` varchar(255) DEFAULT NULL,
  `billingCity` varchar(255) DEFAULT NULL,
  `billingPincode` int(11) DEFAULT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('6', 'sandun', 'sandun@123', '757448340', '827ccb0eea8a706c4c34a16891f84e7b', 'ibbagamuwa', 'dehelgamuwa', 'e', '65000', 'sdfghs', 'ccccccc', 'cccc', '0', '2020-05-08 10:45:29', null);
INSERT INTO `users` VALUES ('7', 'sandun', 'sandunhashan744@gmail.com', '750449750', '827ccb0eea8a706c4c34a16891f84e7b', null, null, null, null, null, null, null, null, '2022-07-10 10:28:48', null);

-- ----------------------------
-- Table structure for wishlist
-- ----------------------------
DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) DEFAULT NULL,
  `productId` int(11) DEFAULT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of wishlist
-- ----------------------------
