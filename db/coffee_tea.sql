-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2021 at 05:19 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffee_tea`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `category_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `category_desc`) VALUES
(1, 'Coffee'),
(2, 'Tea');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `cat_id` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` varchar(5000) NOT NULL,
  `product_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `cat_id`, `product_title`, `product_price`, `product_desc`, `product_image`) VALUES
(1, 1, 'Bali blue moon single origin dark roast coffee', 750, '1lb Whole Bean <br>Bali Blue Moon Dark Roast single origin Coffee has a fragrant toffee aroma with flavors of walnuts and semi-sweet chocolate, with a crisp black cherry finish. This single origin whole bean coffee has a dark & distinctive roast and comes from the Kintamani Highlands in North Bali, Indonesia.', '1633614142_bali.jpg'),
(2, 1, 'Cold brew coarse ground coffee blend', 750, '12oz Ground Bag\r\nCold Brew Ground Coffee contains chicory root and has a toffee aroma with fruit and walnut notes and has a spicy smooth finish. It has a coarse grind which is the best option for cold brewing.\r\n', '1633615126_coldbrew.jpg'),
(3, 1, 'Creme brulee coffee', 500, '12oz Ground Bag <br>\r\nCreme Brulee flavored ground coffee is a medium roast Colombian blend with a creamy vanilla taste with a hint of caramel. \r\n', '1633615465_cremebrulee.jpg'),
(4, 1, 'Decaf espresso roast coffee', 830, '1lb Whole Bean <br>\r\n Espresso Roast Coffee, get the decaffeinated version here. To create our Decaf Espresso Roast Blend, we roast four select origin coffees to perfection, then combine them to create the perfect base for our espresso drinks. Our Decaf Espresso Roast Blend is expressive and subtle enough to be enjoyed as a straight shot, yet assertive enough for the perfect latte.', '1633615709_espresso.jpg'),
(5, 1, 'Ethiopia yirgacheffe light roast single origin coffee', 680, ' Ethiopian Yirgacheffe single origin light single origin roast coffee beans, picked by hand on a farm in the mountains high above the town of Sidamo. There, the coffee beans are washed, and then soaked up to 72 hours in fermentation tanks. This wet process method produces intensely flavorful beans, with an intensely floral aroma, and mellow, smooth taste. Directly sourced. Expertly roasted in small batches for optimal taste and quality. This product comes in a 1lb bag of whole bean coffee.', '1633615930_ethiopia.jpg'),
(6, 1, 'French vanilla coffee', 680, '12oz Bag Ground ', '1633617380_frenchvanilla.jpg'),
(7, 1, 'House blend light roast coffee', 750, 'House Blend coffee from is one of our most popular coffees. To create our light roast House Blend we combine natural and washed Central and South American coffees. We choose our blends for brightness, flavor, and aromas that make for a smooth, satisfying cup of coffee that can be enjoyed all day long.', '1633617613_houseblend.jpg'),
(8, 2, 'Chocolate Mint Rooibos Herbal Tea', 900, '3.5 oz Tin\r\nRooibos blended with chocolate and peppermint! It’s like indulging in dessert without the calories. If you like the minty chocolate flavor of “Andes” or “After-Eight” mints, you’ll love this uplifting, yet caffeine-free, beverage. Also very high in antioxidants.', '1633618009_chocolatemintrooibos.jpg'),
(9, 2, 'Ginger Peach Black Tea', 780, 'This luxury loose leaf tea is carefully blended and packaged by hand in a reusable tin or a resealable kraft bag. Our 3 oz. tin or kraft bag makes approximately 35 - 40 cups of tea. Our 6 oz. kraft bag makes approximately 70 - 80 cups.', '1633618199_gingerpeach.jpg'),
(10, 2, 'Hibiscus Herbal Tea – Organic', 650, '2oz Tin\r\nThese organic hibiscus petals create a deep red infusion that is tangy-sweet and full of natural vitamin C. Our hibiscus tea consists of large parts of the dried flower, not a lot of broken bits. It brews into a delightful stand-alone tea or makes a nice addition to other teas (try it with lemonade for a thirst-quenching treat in summer!). Contains no caffeine.', '1633618348_hibiscus.jpg'),
(12, 2, 'Lively Lemony Mate Tea', 780, '3.5 oz Tin\r\nA refreshing blend of green yerba mate and lemongrass, this stimulating drink is a traditional beverage of many parts of Latin America. This blend has a lively, citrus lift. While Yerba mate is an herbal infusion, unlike most herbal teas, it contains a stimulating caffeine-like compound. ', '1633618744_livelylemonymate.jpg'),
(13, 2, 'Miss Violet Purple Leaf Tea', 1150, '4oz Tin\r\nOur latest custom blend! Miss Violet starts with a purple tea base, which is then blended by hand with butterfly pea flower, hibiscus, lemon peel, and lavender blossoms, for a mellow tea that brews into a vibrant violet color. This tea has a light body, with a subtle sweetness and floral and citrus notes. Low in caffeine and extremely high in antioxidants and anthocyanins!', '1633618879_missviolet.jpg'),
(14, 2, 'Rose Petal Raspberry Herbal Tea', 990, '3oz Tin\r\nA heavenly blend of fruit laced with rose petals. Silky, aromatic, and mouth-watering! While this herbal infusion is excellent hot, it truly shines when served as an iced tea. Contains no caffeine.', '1633619076_rosepetalraspberry.jpg'),
(15, 2, 'Vanilla Rooibos Herbal Tea', 890, '4oz Tin <br>\r\nOur Vanilla Rooibos is rich and sweet, with a full body and a smooth finish. This delicious and decadent tea is great on its own or with a splash of milk and sweetener, and makes a perfect after-dinner cup. Vanilla Rooibos contains no calories or caffeine, and is extremely high in antioxidants!', '1633619259_vanilarooibos.jpg'),
(16, 2, 'White Peony White Tea – Organic', 780, '1.5oz Tin <br>\r\nConsisting of both buds and leaves that are simply air dried after picking, this subtle white tea (also known as Pai Mu Dan) has a floral aroma and smooth velvety taste. Organic, very high in antioxidants, and very low in caffeine. A superior quality tea from the Fujian Province of China.', '1633619359_whitepeony.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `user_type`) VALUES
(1, 'admin', 'admin@admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'user', 'user@user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user'),
(3, 'dave', 'dave@amiel', '1610838743cc90e3e4fdda748282d9b8', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
