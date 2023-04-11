CREATE TABLE `blog` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `title` varchar(255),
  `create` varchar(255),
  `nd` longtext,
  `img1` varchar(255),
  `nd2` longtext,
  `img2` varchar(255),
  `render` int(11),
  `vitri` int(11)
);

CREATE TABLE `danhmuc` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255)
);

CREATE TABLE `hoadon` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `order_id` varchar(255),
  `note` varchar(255),
  `ma_gd` int(11),
  `money` float,
  `code_bank` varchar(255),
  `time` varchar(225),
  `user_id` int(11)
);

CREATE TABLE `sanpham` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(350),
  `mota` longtext,
  `danhmuc_id` int(11),
  `gia` float,
  `img` varchar(500),
  `create_at` varchar(100),
  `update_at` varchar(100),
  `deleted` int(11) DEFAULT 1,
  `soluong` int(255)
);

CREATE TABLE `user` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `usename` varchar(50),
  `password` varchar(150),
  `is_admin` int(11),
  `create_time` varchar(20),
  `gmail` varchar(50)
);

CREATE TABLE `cart` (

`id_vaicut` int PRIMARY KEY AUTO_INCREMENT,

  `id_user` int(11),
  `id_sp` int(11) DEFAULT NULL,
  `soluong` int(150) DEFAULT NULL,
  `gia` float DEFAULT NULL,
  `ngaythem` varchar(100) DEFAULT NULL
);

ALTER TABLE `sanpham` ADD FOREIGN KEY (`danhmuc_id`) REFERENCES `danhmuc` (`id`);

ALTER TABLE `cart` ADD FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id`);

ALTER TABLE `cart` ADD FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
