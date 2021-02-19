-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.4.8-MariaDB
-- PHP 版本： 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `chansi5_webapi`
--

-- --------------------------------------------------------

--
-- 資料表結構 `clelist`
--

CREATE TABLE `clelist` (
  `clelist_id` int(4) NOT NULL,
  `DlistNO` varchar(50) NOT NULL,
  `cle_no` varchar(50) NOT NULL,
  `cle_date` varchar(50) NOT NULL,
  `c_cle_car_no_head` varchar(50) NOT NULL,
  `c_cle_car_no_tail` varchar(50) NOT NULL,
  `C_weigh` varchar(50) NOT NULL,
  `Cle_confirm` varchar(50) NOT NULL,
  `Cle_back` varchar(50) NOT NULL,
  `WasteId` varchar(50) NOT NULL,
  `app_qty` varchar(50) NOT NULL,
  `head_photo` varchar(50) NOT NULL,
  `tail_photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `clelist`
--

INSERT INTO `clelist` (`clelist_id`, `DlistNO`, `cle_no`, `cle_date`, `c_cle_car_no_head`, `c_cle_car_no_tail`, `C_weigh`, `Cle_confirm`, `Cle_back`, `WasteId`, `app_qty`, `head_photo`, `tail_photo`) VALUES
(1, 'E560119710900854', 'R0503385', '20210117_03:38', '787-VG', 'HAA-7679', '1', '1', '', 'D-0902', '23.5', '787-VG@HAA-7679頭-1100.jpg', '787-VG@HAA-7679尾-1110.jpg'),
(2, 'E560119710900996', 'R0503385', '20210115_05:25', '787-VG', 'HAA-7679', '1', '1', '', 'D-0902', '27.2', '787-VG@HAA-7679頭-1417.jpg', '787-VG@HAA-7679尾-1417.jpg'),
(3, 'E560119710901119', 'R0503385', '20201004_09:41', '787-VG', 'HAA-7679', '1', '1', '', 'D-0902', '24.5', '787-VG@HAA-7679頭-1055.jpg', '787-VG@HAA-7679尾-1055.jpg'),
(4, 'E560119710901320', 'R0503385', '20201018_11:42', '787-VG', 'HAA-7679', '1', '1', '', 'D-0902', '26.3', '787-VG@HAA-7679頭-1124.jpg', '787-VG@HAA-7679尾-1124.jpg'),
(5, 'E560119710901115', 'R0503385', '20201230_11:10', 'uuy-9', 'gj-998', '1', '1', '', 'R55464', '20', 'cs0.jpg', 'cs_phone.png'),
(6, 'E560119710901110', 'R0503385', '20210115_02:10\r\n', '787-VG', 'HAA-7679', '1', '1', 'tttt', 'D-0902', '23.5', '787-VG@HAA-7679頭-1100.jpg', '787-VG@HAA-7679尾-1110.jpg'),
(7, 'E560119710901111', 'R0503385', '20210115_02:10', 'QW-334', 'Er-009', '1', '1', '', 'r22345', '22', '787-VG@HAA-7679頭-1124.jpg', '787-VG@HAA-7679尾-1124.jpg'),
(8, 'E560119710901324', 'R0503385', '20210115_05:25', 'HAA-7672', '707-VG', '1', '1', '', 'ss', '55', '787-VG@HAA-7679頭-1124.jpg', '787-VG@HAA-7679尾-1124.jpg'),
(12, 'E560119710901313', 'R0503385', '20200531_15:10', 'HAA-7679', '787-VG', '1', '1', '', 'D-0902', '31.5', '', ''),
(13, 'E560119710901313', 'R0503385', '20200531_15:10', 'HAA-7679', '787-VG', '1', '1', '', 'D-0902', '31.5', '', ''),
(14, 'E560119710901329', 'R0503385', '20201004_16:36', 'HAA-7679', '787-VG', '1', '1', '', 'D-0902', '22.7', 'HAA-7679', '787-VG'),
(15, 'E560119710901313', 'R0503385', '20200531_15:10', 'HAA-7679', '787-VG', '1', '1', '', 'D-0902', '31.5', 'HAA-7679', '787-VG'),
(16, 'E560119710901313', 'R0503385', '20200531_15:10', 'HAA-7679', '787-VG', '1', '1', '', 'D-0902', '31.5', '787-VG@HAA-7679頭-1124.jpg', '787-VG'),
(17, 'E560119710901313', 'R0503385', '20200531_15:10', 'HAA-7679', '787-VG', '1', '1', '', 'D-0902', '31.5', '787-VG@HAA-7679頭-1124.jpg', '787-VG'),
(18, 'E560119710901313', 'R0503385', '20200531_15:10', 'HAA-7679', '787-VG', '1', '1', '', 'D-0902', '31.5', '787-VG@HAA-7679頭-1124.jpg', '787-VG@HAA-7679尾-1124.jpg'),
(19, 'E560119710901313', 'R0503385', '20200531_15:10', 'HAA-7679', '787-VG', '1', '1', '', 'D-0902', '31.5', '787-VG@HAA-7679頭-1124.jpg', '787-VG@HAA-7679尾-1124.jpg'),
(20, 'E560119710901313', 'R0503385', '20200531_15:10', 'HAA-7679', '787-VG', '1', '1', '', 'D-0902', '31.5', '787-VG@HAA-7679頭-1124.jpg', '787-VG@HAA-7679尾-1124.jpg');

-- --------------------------------------------------------

--
-- 資料表結構 `clsm_report`
--

CREATE TABLE `clsm_report` (
  `id` int(4) NOT NULL,
  `car` varchar(10) NOT NULL,
  `date` varchar(12) NOT NULL,
  `time` varchar(8) NOT NULL,
  `place` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `clsm_report`
--

INSERT INTO `clsm_report` (`id`, `car`, `date`, `time`, `place`) VALUES
(1, 'HU-989', '2020/12/24', '07:18', '全興'),
(2, 'HU-989', '2020/12/24', '12:18', '永豐餘'),
(3, 'HU-989', '2020/12/24', '14:18', '全興');

-- --------------------------------------------------------

--
-- 資料表結構 `rtlist`
--

CREATE TABLE `rtlist` (
  `rtlist_id` int(4) NOT NULL,
  `DlistNO` varchar(50) NOT NULL,
  `rt_no` varchar(50) NOT NULL,
  `rec_date` varchar(50) NOT NULL,
  `cle_car_no_head` varchar(50) NOT NULL,
  `cle_car_no_tail` varchar(50) NOT NULL,
  `weigh` varchar(50) NOT NULL,
  `Confirm` varchar(50) NOT NULL,
  `ActMode` varchar(50) NOT NULL,
  `RecType` varchar(50) NOT NULL,
  `back` varchar(50) NOT NULL,
  `WasteId` varchar(50) NOT NULL,
  `app_qty` varchar(50) NOT NULL,
  `qrcode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `rtlist`
--

INSERT INTO `rtlist` (`rtlist_id`, `DlistNO`, `rt_no`, `rec_date`, `cle_car_no_head`, `cle_car_no_tail`, `weigh`, `Confirm`, `ActMode`, `RecType`, `back`, `WasteId`, `app_qty`, `qrcode`) VALUES
(1, 'E560119710901110', 'R0503385', '20210106_10:01', '787-VG', 'HAA-7679', '1', '1', '1', 'T', '', 'D-0902', '30.5', ''),
(2, 'E560119710901313', 'R0503222', '20200531_15:10', '787-VG', 'HAA-7679', '1', '1', '1', 'R', '', 'D-0902', '31.5', ''),
(3, 'E560119710901329', 'R0503381', '20201004_16:36', '787-VG', 'HAA-7679', '1', '1', '1', 'T', '', 'D-0902', '22.7', ''),
(4, 'E560119710901322', 'R0503389', '20201018_16:45', '787-VG', 'HAA-7679', '1', '1', '1', 'T', '', 'D-0902', '20.5', ''),
(5, 'E560119710901323', 'R0503385', '20201004_11:40', '787-VG', 'HAA-7679', '1', '1', '1', 'T', '', 'D-0902', '26.5', ''),
(6, 'E560119710901324', 'R0503380', '20201210_17:17', '707-VG', 'HAA-7672', '2', '2', '1', 'R', 'sertyuikm', 'ss', '55', ''),
(41, 'E560119710901380', 'E221765889', '20210120_02:45', 'TY-997', 'IO-223', '1', '1', '1', 'R', '', 'R44532', '12', ''),
(42, 'E560119710901376', 'E221467456', '20210117_02:20', 'RR-876', 'LL-333', '1', '1', '1', 'R', '', 'R22345', '23', ''),
(43, 'E560119710901335', 'E232455', '20210128_06:30', 'We-223', 'UI-112', '1', '1', '1', 'T', '', 'R333211', '11', ''),
(44, 'E560119710901367', 'E224224455', '20210130_03:16', 'WQ-88', 'Jj-76', '1', '1', '1', 'R', '', 'Q11244', '12', ''),
(52, 'E560119710901311', 'R3327588', '20210121_03:05', 'DE-874', 'OP-345', '1', '1', '1', 'R', '', 'P55327', '22', ''),
(53, 'E560119710901300', 'R446273', '20210107_09:54', 'TY-224', 'YF-618', '1', '1', '1', 'T', '', 'Y35481', '22', ''),
(54, 'E560119710901111', 'R332977543', '20210107_10:52', 'Er-009', 'QW-334', '1', '1', '1', 'R', '', 'r22345', '22', ''),
(63, 'E560119710901311', 'R77899654', '20210108_09:00', 'RY-345', 'UI-112', '1', '1', '1', 'T', 'wwww', 'YY876544', '22', ''),
(75, 'E560119710901311', 'ss', '20210102_02:10', 'sa', 'sa', '1', '1', '1', 'T', '', '', '', ''),
(76, 'E560119710901311', 'as', '20210108_01:06', 'S', 'S', '1', '1', '1', 'T', '', '', '', ''),
(77, 'E560119710901311', 'SS', '20210110_01:05', 'ADS', 'ASD', '1', '1', '1', 'T', '', '', '', ''),
(78, 'E560119710901311', 'R98765', '20210108_01:06', '32', '23er', '1', '1', '1', 'T', '', '', '', ''),
(79, 'E560119710901311', 'qwe', '20210101_01:05', 'dqw', 'qwd', '1', '1', '1', 'T', '', 'dwq', 'w12', ''),
(80, 'E560119710901311', 'we3q2', '20210102_00:01', 'sdc', 'wde', '1', '1', '1', 'T', '', 'wed', '2', ''),
(81, 'E560119710901311', 'wde', '20210109_00:00', 'dwq', 'wqd', '1', '1', '1', 'T', '', 'wdq', '2', ''),
(82, 'E560119710901311', 'saacs', '20210116_11:00', 'asc', 'sca', '1', '1', '1', 'T', '', 'sac', '12', ''),
(83, 'E560119710901311', 'F212', '20210108_01:05', '2e1', 'e21', '1', '1', '1', 'T', '', '2e1', '12', ''),
(84, 'E560119710901311', 'R5263849', '20210107_07:45', 'UY-356', 'II-345', '1', '1', '1', 'R', 'test', 'T27374', '20', ''),
(85, 'E560119710901311', 'T3348738', '20210108_06:30', 'YU-273', 'OI-3222', '1', '1', '1', 'R', 'tet ', 'YYU65688', '23', ''),
(86, 'E560119710901311', 'T5673456', '20210106_08:51', 'YU-567', 'YU-123', '1', '1', '1', 'R', '', 'R23456', '30', ''),
(87, 'E560119710901311', 'T22353162', '20210107_09:00', 'TY-426', 'UI-236', '1', '1', '1', 'R', '', 'R9283721', '21', ''),
(88, 'E560119710901311', 'T9875789', '20210107_08:40', 'UI-867', 'TY-578', '1', '1', '1', 'T', '', 'R44222', '11', ''),
(89, 'E560119710901311', 'R668344', '20210113_09:55', 'FR-67', 'IU-456', '1', '1', '1', 'R', '', 'T6677', '1', ''),
(90, 'E560119710901311', 'T3333', '20210106_09:45', 'To-987', 'ER-234', '1', '1', '1', 'R', '', 'R2341', '22', ''),
(91, 'E560119710901311', 'T344457777', '20210127_08:00', 'GT-333', 'RT-234', '1', '1', '1', 'R', '', 'R33456', '2', ''),
(92, 'E560119710901311', 'T1123112234', '20200531_15:10', 'HAA-7679', '787-VG', '1', '1', '1', 'T', '', 'D-0902', '31.5', ''),
(93, 'E560119710901110', 'T335234666', '20201018_15:47', 'HAA-7679', '787-VG', '1', '1', '1', 'R', '', 'D-0902', '30.5', ''),
(94, 'E560119710901320', 'T221355442234', '20201004_16:36', 'HAA-7679', '787-VG', '1', '1', '1', 'R', '', 'D-0902', '22.7', ''),
(95, 'E560119710900854', 's', '20201010_08:41', 'HAA-7679', '787-VG', '1', '1', '1', 'T', '', 'D-0902', '23.5', ''),
(96, 'E560119710901311', 'T2234223', '20210115_11:01', 'GT-334', 'TW-865', '1', '1', '1', 'T', '', 'R342', '2', ''),
(97, 'E560119710901311', 'T3224443', '20210122_11:55', 'GO-344', 'YU-1672', '1', '1', '1', 'FT', '', 'T23454', '22', ''),
(98, 'E560119710901311', 'T3356743', '20210131_10:00', 'Ty-456', 'TY-31', '1', '1', '1', 'T', '', 'R4345', '12', ''),
(99, 'E560119710901311', 'T435765', '20210122_10:56', 'TR-123', 'VB-234', '1', '1', '1', 'T', '', 'R86543', '12', ''),
(100, 'E560119710901311', 'T255333', '20210115_07:51', 'Tr-754', 'TY-234', '1', '1', '1', 'T', '', 'R3456', '2', ''),
(101, 'E560119710901311', 'T2937451838471', '20210128_09:01', 'HAA-7679', 'GV-245', '', '', '1', '', '', 'R234554', '11', ''),
(102, 'E560119710901311', 'T23456', '20210115_09:59', 'Ty-432', 'RR-43', '', '', '1', '', '', 'R54322', '11', ''),
(103, 'E560119710901311', 'T32345533', '20210122_09:06', 'TR-542', 'TE-123', '', '', '1', '', '', 'R2356', '11', ''),
(104, 'E560119710901311', 'T335676', '20210129_09:00', 'Ty-54321', 'RT-543', 'on', '', '1', '', '', 'R344', '3', ''),
(105, 'E560119710901311', 'T876543333345', '20210129_09:01', 'TE-541', 'FR-234', 'on', 'on', '1', '', '', 'R87432', '11', ''),
(106, 'E560119710901311', 'T23432223', '20210122_09:00', 'TR-3567', 'TY-333', 'on', 'on', '1', '', '', 'R23456', '22', ''),
(107, 'E560119710901311', 'T123456786545', '20210127_09:05', 'RF-223', 'QW-557', '1', '1', '1', 'R', '', 'R34567', '11', ''),
(108, 'E560119710901311', 'R876543', '20210122_09:01', 'RF-234', 'IO-654', 'on', 'on', '1', 'T', '', 'R654312', '12', ''),
(109, 'E560119710901311', 'T243457856', '20210131_17:45', 'RR-7654', 'QQ-5432', 'on', 'on', '1', 'R', '', 'R243535', '12', ''),
(110, 'E560119710901311', 'T2344442', '20210117_11:00', 'ED-221', 'YU-1234', 'on', 'on', '1', 'T', '', 'R23432', '22', ''),
(111, 'E560119710901311', 'Tu7y6554', '20210204_14:10', 'wdq', 'wd', 'on', 'on', '1', 'T', '', 'd', '2', ''),
(112, 'E560119710901311', 'T1233124454', '20210218_02:07', 'TI-3321', 'OJ-214', 'on', 'on', 'on', 'T', '', 'R8263611', '22', ''),
(113, 'E560119710901311', 'T23456', '20210218_13:05', '', '', '1', '1', '1', 'T', '', '', '', '20210218_1305.png'),
(114, 'E560119710901311', 'T23456', '20210218_13:05', '', '', '1', '1', '1', 'T', '', '', '', '20210218_1305.png'),
(115, 'E560119710901311', 'T443333333', '20210212_21:00', 'E444', 'GG-999', '1', '1', '1', 'T', '', 'FF5543', '11', '20210212_2100.png'),
(117, 'E560119710901311', 'T3456', '20210217_14:10', '22ewe', '12iiuy', 'on', 'on', 'on', 'T', '', 'we222', '1', '20210217_1410.png'),
(118, 'E560119710901311', 'T3456', '20210217_', '22ewe', '12iiuy', 'on', 'on', 'on', 'T', '', 'we222', '1', '20210217_.png'),
(119, 'E560119710901311', 'rr', '20210210_16:20', 'e', 'e', 'on', 'on', 'on', 'T', '', 'e', 'w', '20210210_1620.png'),
(120, 'E560119710901311', 'T33333', '20210219_14:11', '33', '33', 'on', 'on', 'on', 'T', '', '33', '33', '20210219_1411.png'),
(121, 'E560119710901311', 'T333333', '20210210_14:10', 'R666', '666', 'on', 'on', 'on', 'T', '', '54', '45', '20210210_1410.png');

-- --------------------------------------------------------

--
-- 資料表結構 `vendor_cle`
--

CREATE TABLE `vendor_cle` (
  `vendor_cle_id` int(3) NOT NULL COMMENT '編號',
  `account` varchar(50) NOT NULL COMMENT '帳號',
  `passwd` varchar(100) NOT NULL COMMENT '密碼',
  `company` varchar(50) NOT NULL COMMENT '公司名稱',
  `cle_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='廠商';

--
-- 傾印資料表的資料 `vendor_cle`
--

INSERT INTO `vendor_cle` (`vendor_cle_id`, `account`, `passwd`, `company`, `cle_no`) VALUES
(1, 'chansing', 'chansing', '全興', 'R0503385'),
(2, 'chansing21_101', 'chansing21_101', 'TEST股份有限公司', 'R0503111'),
(3, 'chansing21_102', 'chansing21_102', 'TEST2股份有限公司', 'R0503222');

-- --------------------------------------------------------

--
-- 資料表結構 `vendor_rt`
--

CREATE TABLE `vendor_rt` (
  `vendor_rt_id` int(11) NOT NULL COMMENT '公司編號',
  `account` varchar(50) NOT NULL COMMENT '帳號',
  `passwd` varchar(100) NOT NULL COMMENT '密碼',
  `company` varchar(20) NOT NULL COMMENT '姓名',
  `rt_no` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='公司rt';

--
-- 傾印資料表的資料 `vendor_rt`
--

INSERT INTO `vendor_rt` (`vendor_rt_id`, `account`, `passwd`, `company`, `rt_no`) VALUES
(1, 'chansing21_201', 'chansing21_201', '事業股份有限公司1', 'E5601197'),
(2, 'chansing21_202', 'chansing21_202', '事業股份有限公司2', 'E5601555');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `clelist`
--
ALTER TABLE `clelist`
  ADD PRIMARY KEY (`clelist_id`);

--
-- 資料表索引 `clsm_report`
--
ALTER TABLE `clsm_report`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `rtlist`
--
ALTER TABLE `rtlist`
  ADD PRIMARY KEY (`rtlist_id`);

--
-- 資料表索引 `vendor_cle`
--
ALTER TABLE `vendor_cle`
  ADD PRIMARY KEY (`vendor_cle_id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `clelist`
--
ALTER TABLE `clelist`
  MODIFY `clelist_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `clsm_report`
--
ALTER TABLE `clsm_report`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `rtlist`
--
ALTER TABLE `rtlist`
  MODIFY `rtlist_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `vendor_cle`
--
ALTER TABLE `vendor_cle`
  MODIFY `vendor_cle_id` int(3) NOT NULL AUTO_INCREMENT COMMENT '編號', AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
