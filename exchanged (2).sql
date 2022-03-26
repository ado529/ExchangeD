-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2022-03-26 05:47:02
-- サーバのバージョン： 10.4.22-MariaDB
-- PHP のバージョン: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `exchanged`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `diary_table`
--

CREATE TABLE `diary_table` (
  `id` int(11) NOT NULL,
  `username` varchar(128) COLLATE utf8mb4_bin NOT NULL COMMENT '送信者',
  `writer` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `diary` mediumtext COLLATE utf8mb4_bin DEFAULT NULL,
  `file` varchar(128) COLLATE utf8mb4_bin DEFAULT NULL COMMENT '画像,動画',
  `is_deleted` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- テーブルのデータのダンプ `diary_table`
--

INSERT INTO `diary_table` (`id`, `username`, `writer`, `diary`, `file`, `is_deleted`, `created_at`, `updated_at`) VALUES
(26, 'testuser10', 'パパ', 'パパは今日もお仕事でした。', NULL, 0, '2022-03-26 07:40:14', '2022-03-26 07:40:14'),
(27, 'testuser10', 'パパ', '今日はお仕事でした。', NULL, 0, '2022-03-26 07:42:05', '2022-03-26 07:42:05'),
(28, 'testuser10', 'たか子', '今日の天気は雨です。', NULL, 0, '2022-03-26 07:43:18', '2022-03-26 07:43:18'),
(29, 'testuser01', 'イチロー', '今日の天気は晴れです。', NULL, 0, '2022-03-26 07:48:11', '2022-03-26 07:48:11'),
(30, 'testuser01', 'パパ', '今日は公園に遊びに行きました。', NULL, 0, '2022-03-26 07:48:20', '2022-03-26 07:48:20'),
(31, 'testuser01', 'パパ', '今日の宿題は算数と国語の本読みです。', NULL, 0, '2022-03-26 07:48:33', '2022-03-26 07:48:33'),
(32, 'testuser01', 'パパ', '明日は朝7:00に家を出ます。', NULL, 0, '2022-03-26 07:48:49', '2022-03-26 07:48:49'),
(33, 'testuser01', 'イチロー', '今日はたろうとけんかしました。', NULL, 0, '2022-03-26 07:49:02', '2022-03-26 07:49:02'),
(34, 'testuser01', 'イチロー', '今日の夕ご飯はお好み焼きでした。', NULL, 0, '2022-03-26 07:49:22', '2022-03-26 07:49:22'),
(35, 'testuser01', 'イチロー', '今日の晩御飯はハンバーグでした。\r\nオレンジジュースも飲んだよ。', NULL, 0, '2022-03-26 07:50:17', '2022-03-26 07:50:17'),
(36, 'testuser01', 'イチロー', '歯が命', 'upload/2022032601181428f03f7e60a73251251b236fdd2c23cb.jpg', 0, '2022-03-26 09:18:14', '2022-03-26 09:18:14'),
(37, 'testuser01', 'イチロー', 'アンパンマン', 'upload/202203260149374be32ea3d64431f8687797ea6cdc3732.jpg', 0, '2022-03-26 09:49:37', '2022-03-26 09:49:37'),
(38, 'testuser01', 'イチロー', 'バイキンマン', 'upload/2022032601505936848a534b386c78665adbe6f46f23db.jpg', 0, '2022-03-26 09:50:59', '2022-03-26 09:50:59'),
(39, 'testuser01', 'イチロー', 'ドキンちゃん', 'upload/20220326015112544f43526c656207fce6d03a67e8a7a4.jpg', 0, '2022-03-26 09:51:12', '2022-03-26 09:51:12'),
(40, 'testuser01', 'イチロー', 'じゃむおじさん', NULL, 0, '2022-03-26 09:51:17', '2022-03-26 09:51:17'),
(41, 'testuser01', 'イチロー', 'バタコさん', NULL, 0, '2022-03-26 09:51:22', '2022-03-26 09:51:22'),
(42, 'testuser01', 'イチロー', 'かまめしどん', NULL, 0, '2022-03-26 09:51:26', '2022-03-26 09:51:26'),
(43, 'testuser01', 'イチロー', 'てんどんまん', NULL, 0, '2022-03-26 09:51:30', '2022-03-26 09:51:30'),
(44, 'testuser01', 'パパ', '今日のスタイはりんご柄', NULL, 0, '2022-03-26 09:51:59', '2022-03-26 09:51:59'),
(45, 'testuser01', 'パパ', 'すもももももももものうち', NULL, 0, '2022-03-26 09:52:09', '2022-03-26 09:52:09'),
(46, 'testuser01', 'イチロー', '石の上にも三年', NULL, 0, '2022-03-26 09:52:21', '2022-03-26 09:52:21'),
(47, 'testuser01', 'イチロー', '犬も歩けば棒に当たる', NULL, 0, '2022-03-26 09:52:29', '2022-03-26 09:52:29');

-- --------------------------------------------------------

--
-- テーブルの構造 `relation_table`
--

CREATE TABLE `relation_table` (
  `id` int(11) NOT NULL,
  `username` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `parent` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `child` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- テーブルのデータのダンプ `relation_table`
--

INSERT INTO `relation_table` (`id`, `username`, `parent`, `child`, `created_at`, `updated_at`) VALUES
(1, 'testuser01', 'パパ', 'イチロー', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'testuser02', 'ママ', 'かりん', '2022-03-02 11:53:29', '2022-03-02 11:53:29'),
(11, 'testuser03', 'ママ', 'いろは', '2022-03-25 21:23:45', '2022-03-25 21:23:45'),
(13, 'testuser04', 'パパ', 'ひなた', '2022-03-26 00:54:03', '2022-03-26 00:54:03'),
(15, 'testuser05', 'ママ', 'あかね', '2022-03-26 02:22:14', '2022-03-26 02:22:14'),
(16, 'testuser06', 'ママ', 'たろう', '2022-03-26 02:23:07', '2022-03-26 02:23:07'),
(17, 'testuser07', 'ママ', 'トオル', '2022-03-26 02:27:23', '2022-03-26 02:27:23'),
(18, 'testuser08', 'ママ', '香', '2022-03-26 02:27:55', '2022-03-26 02:27:55'),
(19, 'testuser09', 'ママ', '花子', '2022-03-26 02:28:09', '2022-03-26 02:28:09'),
(20, 'testuser10', 'パパ', 'たか子', '2022-03-26 02:28:25', '2022-03-26 02:28:25'),
(21, 'testuser11', 'ママ', '愛子', '2022-03-26 06:42:14', '2022-03-26 06:42:14'),
(22, 'testuser10', 'ママ', '愛子', '2022-03-26 06:45:16', '2022-03-26 06:45:16');

-- --------------------------------------------------------

--
-- テーブルの構造 `users_table`
--

CREATE TABLE `users_table` (
  `id` int(11) NOT NULL,
  `username` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `is_admin` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- テーブルのデータのダンプ `users_table`
--

INSERT INTO `users_table` (`id`, `username`, `password`, `is_admin`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'testuser01', 'password', 0, 0, '2022-03-01 02:39:37', '2022-03-01 02:39:37'),
(2, 'testuser02', 'password', 0, 0, '2022-03-01 02:40:06', '2022-03-01 02:40:06'),
(3, 'testuser03', 'password', 0, 0, '2022-03-01 02:40:12', '2022-03-01 02:40:12'),
(4, 'testuser04', 'password', 0, 0, '2022-03-01 02:40:17', '2022-03-01 02:40:17'),
(5, 'testuser05', 'password', 0, 0, '2022-03-01 02:40:20', '2022-03-01 02:40:20'),
(6, 'testuser06', 'password', 0, 0, '2022-03-01 02:40:24', '2022-03-01 02:40:24'),
(7, 'testuser07', 'password', 0, 0, '2022-03-01 02:40:28', '2022-03-01 02:40:28'),
(8, 'testuser08', 'password', 0, 0, '2022-03-01 02:40:32', '2022-03-01 02:40:32'),
(9, 'testuser09', 'password', 0, 0, '2022-03-01 02:40:35', '2022-03-01 02:40:35'),
(16, 'testuser10', 'password', 0, 0, '2022-03-26 06:45:09', '2022-03-26 06:45:09');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `diary_table`
--
ALTER TABLE `diary_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `relation_table`
--
ALTER TABLE `relation_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `diary_table`
--
ALTER TABLE `diary_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- テーブルの AUTO_INCREMENT `relation_table`
--
ALTER TABLE `relation_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- テーブルの AUTO_INCREMENT `users_table`
--
ALTER TABLE `users_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
