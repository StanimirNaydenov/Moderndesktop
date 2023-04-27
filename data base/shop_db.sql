-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8111
-- Време на генериране: 22 апр 2023 в 09:09
-- Версия на сървъра: 10.4.27-MariaDB
-- Версия на PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данни: `shop_db`
--

-- --------------------------------------------------------

--
-- Структура на таблица `admins`
--

CREATE TABLE `admins` (
  `id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Схема на данните от таблица `admins`
--

INSERT INTO `admins` (`id`, `name`, `password`) VALUES
(1, 'admin', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2'),
(2, 'Stanimir', '9a3e61b6bcc8abec08f195526c3132d5a4a98cc0');

-- --------------------------------------------------------

--
-- Структура на таблица `boxes`
--

CREATE TABLE `boxes` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL,
  `price` int(100) NOT NULL,
  `image_01` varchar(100) NOT NULL,
  `image_02` varchar(100) NOT NULL,
  `image_03` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Схема на данните от таблица `boxes`
--

INSERT INTO `boxes` (`id`, `name`, `details`, `price`, `image_01`, `image_02`, `image_03`) VALUES
(1, 'Компютърна кутия ASUS ROG Strix Helios RGB black', 'Вид: Mid Tower\r\nФорм фактор: ATX, Micro ATX, Mini ITX, E-ATX\r\nПортове: 1 x USB 3.1 Type C, 4 x USB 3.1, 1 x Audio Out, 1 x Audio In\r\nРазмер: 250 x 565 x 591 мм', 712, 'strix.png', 'asus srix.jpg', 'helios.jpg'),
(2, 'Компютърна кутия Razer Tomahawk black', 'Вид: Mid Tower\r\nФорм фактор: ATX, Micro ATX, Mini ITX, E-ATX\r\nЗахранване: Без захранване\r\nПортове: 1 x USB 3.2, 1 x USB 3.2 Type C, 1 x Audio In, 1 x Audio In/Out\r\nРазмер: 494 x 475 x 235 мм', 465, 'tomahawk.jpg', 'razer atx.jpg', 'razer in.jpg'),
(3, 'Кутия In Win 101 white', 'Вид: Mid Tower\r\nФорм фактор: ATX\r\nПортове: 1 x Audio Out, 1 x Audio In, 2 x USB 3.0\r\nРазмер: 480 x 445 x 220 мм', 96, 'in win 101.jpg', 'win.jpg', '101.jpg'),
(4, 'Lian Li LANCOOL III White', 'Middle Tower\r\n1x USB Type C\r\nЗакалено стъкло\r\nВъзможност за течно охлаждане', 256, 'lian white.jpg', 'lian li.jpg', 'li 3.jpg'),
(5, 'Cooler Master MasterCase H500 ARGB', 'Middle Tower\r\n2x USB 3.0\r\nВключени вентилатори 2x 200 мм ARGB', 329, 'cooler master.webp', 'cooler master boxes.png', 'H500.jpg'),
(6, 'MSI MAG FORGE 101M', 'Middle Tower\r\n4x RGB включени вентилатори\r\n2 x USB 3.2 Gen 1', 165, 'mag.png', '101M.png', 'msi.jpg');

-- --------------------------------------------------------

--
-- Структура на таблица `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура на таблица `coolers`
--

CREATE TABLE `coolers` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL,
  `price` int(100) NOT NULL,
  `image_01` varchar(100) NOT NULL,
  `image_02` varchar(100) NOT NULL,
  `image_03` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Схема на данните от таблица `coolers`
--

INSERT INTO `coolers` (`id`, `name`, `details`, `price`, `image_01`, `image_02`, `image_03`) VALUES
(1, 'Охладител be quiet! Pure Rock 2', 'Тип охлаждане: Въздух\r\nКонектор: 4 Pin\r\nНапрежение: 12 V\r\nОбороти на вентилатора: 1500 RPM', 89, 'охладител1.jpg', 'охладител2.avif', 'охладител3.jpg'),
(2, 'Охладител DeepCool AS500 aRGB', 'Тип охлаждане: Въздух\r\nКонектор: 4 Pin PWM Connector, 3 Pin RGB\r\nНапрежение: 12 V\r\nОбороти на вентилатора: 1200 RPM\r\nВъздушен поток: 70.81 CFM', 138, 'охладител4.jpg', 'охладител5.jpg', 'охладител6.jpg'),
(3, 'Охладител Noctua NH-D15S', 'Тип охлаждане: Въздух\r\nКонектор: 4 Pin PWM Connector\r\nНапрежение: 12 V\r\nОбороти на вентилатора: 1500 RPM\r\nВъздушен поток: 82.5 CFM', 212, 'охладител7.jpg', 'охладител8.jpg', 'охладител9.jpg'),
(4, 'Охладител Deepcool GAMMAXX L240 V2 ', 'Тип охлаждане: Течност\r\nКонектор: 3 Pin\r\nНапрежение: 12 V\r\nОбороти на вентилатора: 1800 RPM\r\nВъздушен поток: 69.34 CFM', 157, 'водно1.jpg', 'водно2.jpg', 'водно3.jpg'),
(5, 'Охладител NZXT Kraken X73 RGB', 'Тип охлаждане: Течност\r\nКонектор: 4 Pin PWM Connector\r\nНапрежение: 12 V\r\nОбороти на вентилатора: 1500 RPM\r\nВъздушен поток: 52.4 CFM', 485, '19.webp', 'водно5.webp', 'водно6.jpg'),
(6, 'Охладител ASUS ROG RYUO III 360', 'Тип охлаждане: Течност\r\nКонектор: 4 Pin\r\nОбороти на вентилатора: 2200 RPM\r\nВъздушен поток: 70.07 CFM', 682, 'водно7.png', 'водно8.jpg', 'водно9.jpg');

-- --------------------------------------------------------

--
-- Структура на таблица `cpu`
--

CREATE TABLE `cpu` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image_01` varchar(100) NOT NULL,
  `image_02` varchar(100) NOT NULL,
  `image_03` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Схема на данните от таблица `cpu`
--

INSERT INTO `cpu` (`id`, `name`, `details`, `price`, `image_01`, `image_02`, `image_03`) VALUES
(1, 'Процесор Intel Core i7-13700F', 'Сокет: LGA1700\r\nРаботна честота: 1.50 GHz\r\nTurbo Boost до: 5.10 GHz\r\nФизически ядра: 16\r\nЛогически я', 871, 'i7 13700f.webp', 'core 7.jpg', 'i7 13700F.jpg'),
(3, 'Процесор AMD Ryzen 5 5600X (3.7GHz)', 'Сокет: AM4\r\nРаботна честота: 3.70 GHz\r\nTurbo Boost до: 4.60 GHz\r\nФизически ядра: 6\r\nЛогически ядра: ', 407, '5600x.webp', '5 5600x.jpg', 'ryzen 5 5600x.webp'),
(4, 'Процесор AMD Ryzen 7 5700X (3.4GHz)', 'Сокет: AM4\r\nРаботна честота: 3.40 GHz\r\nTurbo Boost до: 4.60 GHz\r\nФизически ядра: 8\r\nЛогически ядра: ', 451, '5700й.jpg', '7 5700x.jpeg', 'ryzen 7 5700x.jpg'),
(5, 'Процесор Intel Core i5-13600K (3.5GHz)', 'Сокет: LGA1700\r\nРаботна честота: 3.50 GHz\r\nTurbo Boost до: 5.10 GHz\r\nФизически ядра: 14\r\nЛогически я', 745, 'i5 13600k.jpg', '13600K.webp', 'intel-core-i5-13600k-2-60ghz-410819.jpg'),
(6, 'Процесор AMD Ryzen 3 4300G (4.0GHz)', 'Сокет: AM4\r\nРаботна честота: 3.80 GHz\r\nTurbo Boost до: 4.00 GHz\r\nФизически ядра: 4\r\nЛогически ядра: ', 213, '4300G.jpg', 'ryzen 3.webp', '3 4300G.jpg'),
(7, 'Процесор Intel Core i3-13100F (3.4GHz)', 'Сокет: LGA1700\r\nРаботна честота: 3.40 GHz\r\nTurbo Boost до: 4.50 GHz\r\nФизически ядра: 4\r\nЛогически яд', 282, '13100f.jpg', 'i3.webp', 'core3.jpg');

-- --------------------------------------------------------

--
-- Структура на таблица `hdd`
--

CREATE TABLE `hdd` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL,
  `price` int(100) NOT NULL,
  `image_01` varchar(100) NOT NULL,
  `image_02` varchar(100) NOT NULL,
  `image_03` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Схема на данните от таблица `hdd`
--

INSERT INTO `hdd` (`id`, `name`, `details`, `price`, `image_01`, `image_02`, `image_03`) VALUES
(1, 'Твърд диск 1TB Seagate Barracuda', 'Предназначение: За настолен компютър\r\nТип: HDD, вътрешен\r\nФорм-фактор: 3,5&#34;\r\nКапацитет: 1 TB\r\nСкорост на въртене: 7200 rpm\r\nИнтерфейси: SATA 3 (6Gb/s)\r\n', 89, 'baracuda1.jpg', 'baracuda2.jpg', 'baracuda3.webp'),
(2, 'Твърд диск 1TB Seagate IronWolf ', 'Предназначение: За NAS устройство\r\nТип: HDD, вътрешен\r\nФорм-фактор: 3,5&#34;\r\nКапацитет: 1 TB\r\nСкорост на въртене: 5900 rpm\r\nИнтерфейси: SATA 3 (6Gb/s)\r\n', 124, 'baracuda4.jpg', 'baracuda5.jpg', 'baracuda6.jpg'),
(3, 'Твърд диск 2TB Seagate IronWolf ', 'Предназначение: За NAS устройство\r\nТип: HDD, вътрешен\r\nФорм-фактор: 3,5&#34;\r\nКапацитет: 2 TB\r\nСкорост на въртене: 5900 rpm\r\nИнтерфейси: SATA 3 (6Gb/s)', 189, 'baracuda7.jpg', 'baracuda8.jpg', 'baracuda9.avif'),
(4, 'Твърд диск 4TB Seagate AI Skyhawk', 'Предназначение: За видеонаблюдение\r\nТип: HDD, вътрешен\r\nФорм-фактор: 3,5&#34;\r\nКапацитет: 4 TB\r\nСкорост на въртене: 5400 rpm\r\nИнтерфейси: SATA 3 (6Gb/s)\r\n', 168, 'segate1.jpg', 'segate2.avif', 'segate3.jpg'),
(5, 'Твърд диск 6TB Toshiba S300 Bulk', 'Предназначение: За видеонаблюдение\r\nТип: HDD, вътрешен\r\nФорм-фактор: 3,5&#34;\r\nКапацитет: 6 TB\r\nСкорост на въртене: 7200 rpm\r\nИнтерфейси: SATA 3 (6Gb/s)\r\n', 295, 'toshiba1.avif', 'toshiba2.jpg', 'toshiba3.jpg'),
(6, 'Твърд диск 10TB WD Purple Pro', 'Предназначение: За видеонаблюдение\r\nТип: HDD, вътрешен\r\nФорм-фактор: 3,5&#34;\r\nКапацитет: 10 TB\r\nСкорост на въртене: 7200 rpm\r\nИнтерфейси: SATA 3 (6Gb/s)\r\n', 538, 'wd1.jpg', 'wd2.jpg', 'wd3.jpg');

-- --------------------------------------------------------

--
-- Структура на таблица `headphones`
--

CREATE TABLE `headphones` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL,
  `price` int(100) NOT NULL,
  `image_01` varchar(100) NOT NULL,
  `image_02` varchar(100) NOT NULL,
  `image_03` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Схема на данните от таблица `headphones`
--

INSERT INTO `headphones` (`id`, `name`, `details`, `price`, `image_01`, `image_02`, `image_03`) VALUES
(1, 'Razer Barracuda X', 'безжични слушалки 4 в 1 с USB-C донгъл\r\nза PC/ PlayStation/ Switch и Android\r\nRazer™ TriForce 40 мм драйвери\r\nмикрофон Razer™ HyperClea', 139, 'Razer1.jpg', 'Razer2.jpg', 'Razer3.jpg'),
(2, 'Razer Kraken V3 HyperSense', 'геймърски слушалки\r\nRazer HyperSense\r\nRazer™ TriForce Titanium 50 мм драйвери\r\nTHX Spatial Audio', 279, 'razer4.jpg', 'razer5.webp', 'razer6.jpg'),
(3, 'Logitech G435, Black', 'безжични геймърски слушалки\r\nза PC/ Mac/ PlayStation® 4 и PlayStation 5\r\nдвоен микрофон\r\nдо 18 часа живот на батерията', 169, 'lg1.jpg', 'lg2.jpg', 'lg3.webp'),
(4, 'Logitech G635', 'геймърски слушалки\r\nPRO-G говорители\r\nRGB подсветка\r\n3 програмируеми бутона', 289, 'lg4.jpg', 'lg5.jpg', 'lg6.jpg'),
(5, 'Sennheiser HD 599, Ivory', '38 мм говорители\r\nсменяеми наушници\r\nподплатена лента за глава\r\n1.2 м сменяем кабел', 389, 'sen1.jpg', 'sen2.jpg', 'sen3.jpg'),
(6, 'Sennheiser MOMENTUM 4 Wireless - черни', 'Ѕеnnhеіѕеr звyĸ oт 42-мм гoвopитeли\r\nадaптивнo шyмoпoтиcĸaнe и peжим нa пpoзpaчнocт\r\nдo 60 чaca живoт нa бaтepиятa (c aĸтивни ВТ & АNС)\r\nинтyитивнo ceнзopнo yпpaвлeниe', 679, 'sen4.jpg', 'sen5.jpg', 'sen6.jpg');

-- --------------------------------------------------------

--
-- Структура на таблица `keyboards`
--

CREATE TABLE `keyboards` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL,
  `price` int(100) NOT NULL,
  `image_01` varchar(100) NOT NULL,
  `image_02` varchar(100) NOT NULL,
  `image_03` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Схема на данните от таблица `keyboards`
--

INSERT INTO `keyboards` (`id`, `name`, `details`, `price`, `image_01`, `image_02`, `image_03`) VALUES
(1, 'Razer BlackWidow V3 Pro, Green Mechanical Switch, US Layout', 'Razer™ HyperSpeed Wireless\r\n3 режима на свързване\r\nмеханични суичове Razer™\r\nRazer Chroma подсветка', 489, 'key1.jpg', 'key2.png', 'key3.png'),
(2, 'Razer BlackWidow V3, Green Mechanical Switch, US Layout', 'Razer™ Green суичове\r\nRazer Synapse 3\r\nN-key roll-over\r\nRazer Chroma подсветка', 299, 'key4.png', 'key5.png', 'hey6.jpg'),
(3, 'Razer BlackWidow V3 Mini HyperSpeed', 'Razer™ HyperSpeed Wireless\r\nRazer™ Green механичен суич\r\nN-key roll-over\r\nRGB подсветка Razer Chroma', 379, 'key7.jpg', 'key8.jpg', 'key9.webp'),
(4, 'Logitech G Pro', 'механична геймърска клавиатура\r\nGX Blue Clicky суичове\r\n26-Key Rollover\r\nподсветка с 16.8 млн. цвята', 249, 'key10.jpg', 'key11.jpg', 'key12.jpg'),
(5, 'Logitech G715 TKL Wireless, Linear US INT&#39;L', 'безжична геймърска клавиатура\r\nмека подложка за китките\r\nRGB осветление\r\nмеханични превключватели GX', 389, 'key13.png', 'key14.png', 'key15.png'),
(6, 'Logitech G513 Carbon - GX Red (Linear) - US INT&#39;L', 'GX RED суичове (linear)\r\nрегулируема LIGHTSYNC RGB подсветка\r\nгорна част от адонизиран алуминий\r\nдопълнителен USB порт на самата клавиатура\r\n', 329, 'key17.jpg', 'key18.jpg', 'key161.jpg');

-- --------------------------------------------------------

--
-- Структура на таблица `messages`
--

CREATE TABLE `messages` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `message` varchar(500) NOT NULL,
  `subject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Схема на данните от таблица `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `name`, `email`, `number`, `message`, `subject`) VALUES
(1, 0, 'Vasil', 'vasko.2005@abv.bg', '089785686', 'Test message', ''),
(2, 0, 'Vasil', 'vasko.2005@abv.bg', '089785686', 'Test message', ''),
(3, 0, 'Iliqana', 'ilianastaykovska18b@gmail.com', '0893576412', 'Test №2', 'процесор core i5'),
(5, 0, 'Vasil', 'vasilatanasov7@gmail.com', '5', 'Не ', 'процесор core i5'),
(6, 0, 'Георги Найденов', 'georgi_naidenov70@abv.bg', '7', 'sffrer', 'процесор core i5'),
(7, 3, 'Daniel', 'stanimir_n@abv.bg', '058675475', 'Test', 'процесор core i5');

-- --------------------------------------------------------

--
-- Структура на таблица `monitors`
--

CREATE TABLE `monitors` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL,
  `price` int(100) NOT NULL,
  `image_01` varchar(100) NOT NULL,
  `image_02` varchar(100) NOT NULL,
  `image_03` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Схема на данните от таблица `monitors`
--

INSERT INTO `monitors` (`id`, `name`, `details`, `price`, `image_01`, `image_02`, `image_03`) VALUES
(1, 'Монитор 23.8&#34; Dell G2422HS', 'Размер: 23.8&#34; (60.45 cm)\r\nРазделителна способност: 1920 x 1080\r\nТип на матрицата: IPS\r\nЪгъл на видимост: 178/178\r\nЧестота на опресняване: 165 Hz\r\nG-Sync/FreeSync: AMD FreeSync, NVIDIA G-Sync Compatible\r\nЯркост: 350 cd/m2\r\nИнтерфейси: 2 x HDMI, 1 x Audio Out, DisplayPort', 469, 'монитор1.jpg', 'монитор2.jpg', 'монитор3.jpg'),
(2, 'Монитор 27&#34; ASUS TUF Gaming VG27AQ1A', 'Размер: 27&#34; (68.58 cm)\r\nРазделителна способност: 2560 x 1440\r\nТип на матрицата: IPS\r\nЪгъл на видимост: 178/178\r\nЧестота на опресняване: 170 Hz\r\nG-Sync/FreeSync: NVIDIA G-Sync Compatible\r\nЯркост: 250 cd/m2\r\nИнтерфейси: Аудио изход за слушалки, 2 x HDMI 2.0, 1 x DisplayPort 1.2', 649, 'монитор4.jpg', '12.avif', 'монитор6.jpg'),
(3, 'Монитор 27&#34; LG UltraGear 27GP850-B', 'Размер: 27&#34; (68.58 cm)\r\nРазделителна способност: 2560 x 1440\r\nТип на матрицата: IPS\r\nЪгъл на видимост: 178/178\r\nЧестота на опресняване: 165 Hz\r\nG-Sync/FreeSync: AMD FreeSync, NVIDIA G-Sync Compatible\r\nЯркост: 400 cd/m2\r\nИнтерфейси: 1 x USB 3.0 Upstream, 2 x USB 3.0 Downstream, 2 x HDMI, 1 x DisplayPort 1.4, 1 x Audio Out', 999, 'монитор7.webp', 'монитор8.webp', 'монитор9.avif'),
(4, 'Dell Alienware AW2723DF 27&#34; IPS LED QHD (2560X1440) 280Hz, 1 ms, AMD FreeSync Premium, G-SYNC', 'Размер на дисплея: 27.0&#34; (68.58 cm)\r\nТип на матрицата: IPS\r\nВреме за реакция: 1 ms\r\nЧестота на опресняване: 280Hz (overclocking)\r\nРезолюция: WQHD (2560 x 1440)', 1068, 'монитор10.jpg', 'монитор11.jpg', 'монитор12.avif'),
(5, 'Монитор 34&#34; Samsung Odyssey G8 34BG850SB', 'Размер: 34&#34; (86.72 cm)\r\nРазделителна способност: 3840 x 2160 4K\r\nЪгъл на видимост: 178/178\r\nЧестота на опресняване: 175 Hz\r\nG-Sync/FreeSync: AMD FreeSync Premium\r\nЯркост: 250 cd/m2\r\nИнтерфейси: 2 x USB Type-C, 1 x Micro HDMI, Wi-Fi, Bluetooth, 1 x mini Display Port 1.2', 2899, '2.avif', 'монитор14.jpg', 'монитор15.jpg'),
(6, 'Монитори Predator – PREDATOR X27', 'Екран: 68.6 cm (27&#34;) 4K UHD (3840 x 2160) 144 Hz\r\nТехнология на панела: IPS (178°x178°) G-sync Ultimate\r\nInputs: DisplayPort, HDMI, USB Hub 3.0x4 (1up 4down)\r\nВреме за отговор: 4 ms GTG\r\nЯркост: 600 cd/m²', 3579, 'монитор16.webp', 'монитор17.jpg', 'монитор18.png');

-- --------------------------------------------------------

--
-- Структура на таблица `motherboards`
--

CREATE TABLE `motherboards` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL,
  `price` int(100) NOT NULL,
  `image_01` varchar(100) NOT NULL,
  `image_02` varchar(100) NOT NULL,
  `image_03` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Схема на данните от таблица `motherboards`
--

INSERT INTO `motherboards` (`id`, `name`, `details`, `price`, `image_01`, `image_02`, `image_03`) VALUES
(1, 'ASUS ROG CROSSHAIR X670E HERO', 'AMD X670\r\n4 x DIMM DDR5 слота\r\nWi-Fi & Bluetooth v5.3\r\nUSB Type-C', 1266, '000000239867--danna-platka-asus-rog-crosshair-x670e-hero-am5.jpg', '1038360639.asus-rog-crosshair-x670e-hero.jpg', 'изтеглен файл.jpg'),
(2, 'ASUS PRIME H510M-K', 'ntel H510\r\nLGA 1200\r\nHDMI\r\nD-Sub', 148, 'asus-prime-h510m-k-si-motherboard.jpg', 'images (1).jpg', '821717886.asus-prime-h510m-k.jpg'),
(3, 'MSI MPG Z590 GAMING EDGE WIFI', 'Intel Z590\r\nLGA 1200\r\nDDR4\r\nUSB Type-C\r\nWi-Fi & Bluetooth', 689, 'ms1.jpg', 'ms2.jpg', 'ms3.png'),
(4, 'MSI MPG X670E CARBON WIFI', 'AMD X670\r\nAMD AM5\r\nWi-Fi & Bluetooth\r\nUSB Type-C', 939, 'ms4.png', 'ms5.jpg', 'ms6.jpg'),
(5, 'GIGABYTE B760 DS3H', 'Intel B760\r\nLGA 1700\r\nUSB Type C\r\nDisplayPort', 289, 'gb1.png', 'gb2.webp', 'gb3.png'),
(6, 'GIGABYTE B650 GAMING X AX', 'AMD B650\r\nAMD AM5\r\nWi-Fi & Bluetooth\r\n4 x DDR5 DIMM', 484, 'gb4.png', 'gb5.jpg', 'gb6.png');

-- --------------------------------------------------------

--
-- Структура на таблица `mouse`
--

CREATE TABLE `mouse` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL,
  `price` int(100) NOT NULL,
  `image_01` varchar(100) NOT NULL,
  `image_02` varchar(100) NOT NULL,
  `image_03` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Схема на данните от таблица `mouse`
--

INSERT INTO `mouse` (`id`, `name`, `details`, `price`, `image_01`, `image_02`, `image_03`) VALUES
(1, 'Razer Basilisk V3', '10+1 програмируеми бутона\r\nRazer™ HyperScroll Tilt Wheel\r\n11 зони за RGB осветление Razer Chroma™', 159, 'mouse1.jpg', 'mouse2.jpg', 'mouse3.jpg'),
(2, 'Razer Viper V2 Pro', 'Razer™ HyperSpeed Wireless\r\nоптичен сензор Focus Pro 30K\r\nоптични суичове 3-то поколение\r\nRazer™ Speedflex USB Type-C кабел', 319, 'mouse4.jpg', 'mouse5.png', 'mose6.jpg'),
(3, 'Razer DeathAdder V3 Pro, бяла', 'жична/безжична свързаност\r\nFocus Pro 30K оптичен сензор\r\nдо 90 часа живот на батерията\r\n(DPI) 30000', 319, 'mouse7.jpg', 'mouse8.jpg', 'mouse9.jpg'),
(4, 'Logitech G502 HERO', '\r\nHero сензор с 25 600 DPI (след firmware update в G HUB)\r\n11 програмируеми бутона\r\nдопълнителен комплект тежести\r\nHyper scroll (възможност за супер бърз скрол)', 169, 'mouse10.jpg', 'mouse11.png', 'mouse11.png'),
(5, 'Logitech G Pro Wireless', 'Hero сензор с 25 600 DPI (след firmware update в G HUB)\r\n1ms LIGHTSPEED безжична технология\r\nСУПЕР лека - 80гр. тегло\r\nвградена памет', 269, 'mouse13.jpg', 'mouse14.jpg', 'mouse15.jpg'),
(6, 'Logitech G502 X Plus, White', 'LIGHTSPEED безжична технология\r\nдо 5 вградени профила\r\nRGB с 8 зони\r\nдо 120 часа живот на батерията', 329, 'mouse16.webp', 'mouse17.webp', 'mouse18.jpg');

-- --------------------------------------------------------

--
-- Структура на таблица `mousepads`
--

CREATE TABLE `mousepads` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL,
  `price` int(100) NOT NULL,
  `image_01` varchar(100) NOT NULL,
  `image_02` varchar(100) NOT NULL,
  `image_03` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Схема на данните от таблица `mousepads`
--

INSERT INTO `mousepads` (`id`, `name`, `details`, `price`, `image_01`, `image_02`, `image_03`) VALUES
(1, 'Подложка за мишка Logitech G440 Hard Gaming', 'Екстри: Гумирана основа, която не позволява приплъзване на подложката, Tекстура, позволяваща по-бързото плъзгане на мишката и по-добър контрол\r\nРазмери: 340 x 280 x 3 мм', 43, 'pad1.jpg', 'pad2.jpg', 'pad3.avif'),
(2, 'Подложка за мишка ASUS ROG Sheath', 'Екстри: Гумирана основа, която не позволява приплъзване на подложката, Съвместима с всички видове мишки, Обшити ръбове на подложката\r\nРазмери: 900 x 440 x 3 мм', 69, 'pad3.jpg', 'pad5.jpg', 'pad6.jpg'),
(3, 'Подложка за мишка Razer Acari', 'Екстри: Гумирана основа, която не позволява приплъзване на подложката, Съвместима с всички видове мишки\r\nРазмери: 420 x 320 x 1.95 мм', 139, 'pad8.jpg', 'pad9.jpg', 'pad7.jpg'),
(4, 'Подложка за мишка ASUS ROG Balteus,', 'Екстри: Съвместима с всички видове мишки, USB Passthrough, RGB подсветка, USB кабел, ArmouryII\r\nРазмери: 370 x 320 x 7.9 мм', 179, 'pad10.jpg', 'pad11.jpg', 'pad12.jpg'),
(5, 'Подложка за мишка SteelSeries QcK Prism Cloth RGB - STEEL-PAD', 'Екстри: Гумирана основа, която не позволява приплъзване на подложката, Съвместима с всички видове мишки, 1 x USB, Програмируема подсветка в 16.8 милиона цвята, Обшити ръбове на подложката\r\nРазмери: 1220 x 590 x 4 мм', 219, 'pad13.jpg', 'pad14.jpg', 'pad15.jpg'),
(6, 'Подложка за мишка ASUS ROG Balteus Qi, черен', 'Екстри: Съвместима с всички видове мишки, USB Passthrough, Qi безжично зареждане на устройства, RGB подсветка, USB кабел, ArmouryII, Aura Sync\r\nРазмери: 370 x 320 x 7.9 мм', 239, 'pad16.jpg', 'pad17.jpg', 'pad18.png');

-- --------------------------------------------------------

--
-- Структура на таблица `myorders`
--

CREATE TABLE `myorders` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `number` varchar(10) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Схема на данните от таблица `myorders`
--

INSERT INTO `myorders` (`id`, `user_id`, `name`, `number`, `total_products`, `total_price`, `placed_on`) VALUES
(4, 3, 'Георги Найденов', '0954324455', 'Процесор Intel Core i7-13700F (871 x 1) - ', 871, '0000-00-00');

-- --------------------------------------------------------

--
-- Структура на таблица `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `number` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` date NOT NULL,
  `payment_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Схема на данните от таблица `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `number`, `email`, `method`, `address`, `total_products`, `total_price`, `placed_on`, `payment_status`) VALUES
(1, 3, 'Iliqana', '0854789666', 'ilianastaykovska18b@gmail.com', 'cash on delivery', 'flat no. бул.Васил Априлов 152, Македония 92, Пловдив, Пловдив, България - 4000', 'rg (123 x 1) - ', 123, '0000-00-00', 'completed'),
(2, 3, 'Георги Найденов', '0854789666', 'georgi_naidenov70@abv.bg', 'cash on delivery', 'flat no. бул.Васил Априлов 152, Васил Априлов , Пловдив, Пловдив, България - 4000', 'rg (123 x 1) - ', 123, '0000-00-00', 'completed'),
(3, 4, 'Георги Найденов', '0854789666', 'georgi_naidenov70@abv.bg', 'credit card', 'flat no. бул.Васил Априлов 152, rrr, Пловдив, Пловдив, България - 4000', 'Intel Core i5-10400F (309 x 2) - ', 618, '0000-00-00', 'completed'),
(4, 5, 'Георги Найденов', '0897958351', 'georgi_naidenov70@abv.bg', 'paytm', 'flat no. бул.Васил Априлов 152, Светлина, Пловдив, Пловдив, България - 4000', 'Logitech G305 LIGHTSPEED BLUE (129 x 10) - Intel Core i5-10400F (309 x 1) - ', 1599, '0000-00-00', 'completed'),
(5, 6, 'Георги Найденов', '0897958351', 'georgi_naidenov70@abv.bg', 'cash on delivery', 'flat no. бул.Васил Априлов 152, Бул.Васил Априлов 152, Пловдив, Пловдив, България - 4000', 'Кутия In Win 101 white (96 x 3) - MSI GeForce RTX 4090 GAMING X TRIO 24G (4199 x 1) - MSI MPG Z590 GAMING EDGE WIFI (689 x 1) - Процесор Intel Core i5-13600K (3.5GHz) (745 x 1) - ', 5921, '0000-00-00', 'completed'),
(6, 3, 'Георги Найденов', '0897958351', 'georgi_naidenov70@abv.bg', 'cash on delivery', 'flat no. бул.Васил Априлов 152, бул.Васил Априлов 152, Пловдив, Пловдив, България - 4000', 'Intel Core i5-10400F (309 x 1) - ', 309, '0000-00-00', 'completed');

-- --------------------------------------------------------

--
-- Структура на таблица `powersuply`
--

CREATE TABLE `powersuply` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL,
  `price` int(100) NOT NULL,
  `image_01` varchar(100) NOT NULL,
  `image_02` varchar(100) NOT NULL,
  `image_03` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Схема на данните от таблица `powersuply`
--

INSERT INTO `powersuply` (`id`, `name`, `details`, `price`, `image_01`, `image_02`, `image_03`) VALUES
(1, 'Захранване 750W ASUS TUF Gaming 80+ Gold', 'Мощност: 750 W\r\nКонектори: 4 x 4 Pin Peripheral Connector, 2 x CPU 4+4 Pin, 1 x 20+4 pin ATX, 5 x SATA, 3 x PCI-E (6+2 Pin), 1 x PCI-E (12+4 Pin)\r\nОхлаждане: 135мм вентилатор\r\nЕфективност: 92%', 288, 'захранване1.jpg', 'захранване2.jpg', 'захранване3.png'),
(2, 'Захранване 500W EVGA 500 BQ, 80+ BRONZE', 'Мощност: 500 W\r\nКонектори: 3 x 4 Pin Peripheral, 1 x EPS 12V CPU 4+4 pin, 2 x PCI-E 8 Pin (6+2 Pin), 1 x 4 Pin Floppy, 1 x 24 pin ATX, 6 x SATA\r\nОхлаждане: 120мм вентилатор\r\nЕфективност: 85%', 139, 'захранване4.jpg', 'захранване5.jpg', 'захранване6.jpg'),
(3, 'Захранване 1000W ASUS ROG STRIX 80+ Gold ', 'Мощност: 1000 W\r\nКонектори: 2 x CPU 4+4 Pin, 6 x 4 Pin Peripheral Connector, 6 x PCI-E (6+2 Pin), 1 x 20+4 pin ATX, 8 x SATA', 449, 'захранване7.jpg', 'захранване8.jpg', 'захранване9.png'),
(4, 'Захранване 850W be quiet! Dark Power 13', 'Мощност: 850 W\r\nКонектори: 12 x SATA, 1 x PCI-E (6 Pin), 1 x PCI-E (6+2 Pin), 1 x 20+4 pin ATX, 3 x 4 Pin PATA, 1 x ATX 12V CPU 4+4 pin, 1 x ATX 12V CPU 8 pin\r\nОхлаждане: 135мм вентилатор\r\nЕфективност: 95.4%', 559, 'захранване10.jpg', 'захранване11.webp', 'захранване12.jpg'),
(5, 'Захранване 650W NZXT C650 80+ Bronze', 'Мощност: 650 W\r\nКонектори: 3 x 4 Pin Peripheral, 2 x CPU 4+4 Pin, 4 x PCI-E (6+2 Pin), 1 x 24 pin ATX, 6 x SATA\r\nОхлаждане: 120мм вентилатор\r\nЕфективност: 87%', 178, 'захранване13.jpg', 'захранване14.jpg', 'захранване15.jpg'),
(6, 'Захранване 1600W ASUS ROG THOR Titanium', 'Мощност: 1600 W\r\nКонектори: 12 x SATA, 6 x 4 Pin Peripheral Connector, 1 x 20+4 pin ATX, 10 x PCI-E (6+2 Pin), 2 x ATX 12V CPU 4+4 pin, 1 x PCI-E (16 Pin)\r\nОхлаждане: 135мм вентилатор\r\nЕфективност: 95%', 1564, 'titanium1.jpg', 'titanium2.jpg', 'titanium3.jpg');

-- --------------------------------------------------------

--
-- Структура на таблица `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL,
  `price` int(10) NOT NULL,
  `image_01` varchar(100) NOT NULL,
  `image_02` varchar(100) NOT NULL,
  `image_03` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Схема на данните от таблица `products`
--

INSERT INTO `products` (`id`, `name`, `details`, `price`, `image_01`, `image_02`, `image_03`) VALUES
(13, 'Intel Core i5-10400F', '6 ядра / 12 нишки\r\n2.90 - 4.30GHz\r\n12MB кеш\r\n65W', 309, 'LD0005669123_1.jpg', 'imageedit_5_8408667790.jpg', 'intel i5 10400f p.jpg'),
(14, 'Logitech G305 LIGHTSPEED BLUE', 'LIGHTSPEED безжична технология\r\nHero сензор с 12 000 DPI\r\n250 часа живот на батерията* с 1бр. АА батерия\r\n1ms report rate\r\n99гр. тегло', 129, '910006014.jpg', 'logitech-g305.jpg', 'mouse.jpg'),
(16, 'ASUS ROG MAXIMUS Z790 EXTREME', 'Intel Socket LGA1700 за 13-то поколение Intel Core процесори и 12-то поколение Intel Core, Pentium Gold и Celeron процесори Поддържа Intel Turbo Boost Technology 2.0 и Intel Turbo Boost Max Technology 3.0**\r\nIntel Z790\r\nОбщо поддържа 5 x M.2 слота и 6 x SATA 6Gb/s порта*\r\nROG SupremeFX 7.1 съраунд звук High Definition Audio CODEC ALC4082\r\n1 x Intel® 2.5Gb Ethernet', 2850, 'z790.png', 'z790extreme.jpg', 'z791.jpg'),
(17, 'Sony MDR-RF895RK', 'безжични слушалки\r\nBeat Response Control\r\n40 мм възбудители\r\nдо 20 часа време за възпроизвеждане', 199, 'sony1.webp', 'sony2.jpeg', 'sony3.avif'),
(18, 'AMD Ryzen 9 7950X3D', '16 ядра / 32 нишки\r\n4.20 - 5.70GHz\r\n128MB L3 кеш\r\n120W', 1679, 'ryzen9.jpg', 'ryzen91.jpg', 'ryzen92.jpg'),
(19, 'Intel Core i9-13900KF', '24 ядра / 32 нишки\r\n3.00 - 5.8 GHz\r\n36 MB Intel® Smart Cache\r\n253W\r\nSocket LGA 1700', 1249, 'i91.jpg', 'i92.png', 'i93.jpg'),
(20, 'Sennheiser MOMENTUM True Wireless 3', 'безжични слушалки\r\nза Аndrоіd /іОЅ ycтpoйcтвa\r\naĸтивнo шyмoпoтиcĸaнe\r\nдo 28 чaca вpeмe зa paбoтa', 439, 'senh1.jpg', 'senh2.png', 'senh3.jpg'),
(21, 'DeathAdder V3 Pro Faker Edition', '63 G УЛТРА ЛЕК ДИЗАЙН\r\nОПТИЧЕН СЕНЗОР RAZER FOCUS PRO 30K\r\nRAZER GEN-3 ОПТИЧНИ ПРЕВКЛЮЧВАТЕЛИ\r\nС жизнен цикъл от 90 милиона щраквания с нулеви проблеми с двойно щракване, до невероятно задействане от 0.2 ms без забавяне, ще имате надеждността и скоростта, предпочитани от професионалисти като Faker.\r\nМОЖЕ ДА СЕ НАДГРАДИ ДО ИСТИНСКА 4000 HZ БЕЗЖИЧНА ЧЕСТОТА', 379, 'faker1.jpg', 'faker2.jpg', 'faker3.webp'),
(23, 'Gainward GeForce RTX 3070 Ti Phoenix', '8GB GDDR6X\r\n256-bit\r\nHDMI\r\nDisplayPort', 1440, '3070 1.jpg', '3070 2.webp', '3070 3.png');

-- --------------------------------------------------------

--
-- Структура на таблица `ram`
--

CREATE TABLE `ram` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL,
  `price` int(100) NOT NULL,
  `image_01` varchar(100) NOT NULL,
  `image_02` varchar(100) NOT NULL,
  `image_03` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Схема на данните от таблица `ram`
--

INSERT INTO `ram` (`id`, `name`, `details`, `price`, `image_01`, `image_02`, `image_03`) VALUES
(1, 'Памет 8GB DDR4 3200 ADATA XPG GAMMIX D10', 'Обем: 8 GB\r\nТип: DDR4\r\nЧестота: 3200 MHz', 51, 'ram3.jpg', 'ram01.jpg', 'ram2.jpg'),
(2, 'Памет 2x8GB DDR4 3333 GIGABYTE AORUS RGB', 'Обем: 2x8 GB\r\nТип: DDR4\r\nЧестота: 3333 MHz\r\nТайминги: CL18, 18-20-20-40', 159, 'ram4.jpg', 'ram5.jpg', 'ram6.webp'),
(3, 'Памет 2x32GB DDR4 3600 Kingston Fury Beast RGB', 'Обем: 2x32 GB\r\nТип: DDR4\r\nЧестота: 3600 MHz\r\nТайминги: CL18, 18-22-22', 415, 'ram7.jpg', 'ram8.jpg', 'ram9.jpg'),
(4, 'Памет 2x8GB DDR5 4800 Kingston Fury Beast', 'Обем: 2x8 GB\r\nТип: DDR5\r\nЧестота: 4800 MHz\r\nТайминги: 38-38-38', 166, 'ram10.jpg', 'ram11.jpg', 'ram12.jpg'),
(5, 'Памет 2x16GB DDR5 5200 Kingston Fury Beast RGB', 'Обем: 2x16 GB\r\nТип: DDR5\r\nЧестота: 5200 MHz\r\nТайминги: CL36', 316, 'ram13.jpg', 'ram14.jpg', 'ram15.jpg'),
(6, '32GB (2x16GB) DDR5 6200MHz Corsair Vengeance RGB White', '32GB Kit (2 x 16GB)\r\nDDR5 6200MHz\r\nCL36-39-39-76\r\nDIMM 288-pin', 770, 'ram16.png', 'ram17.png', 'ram18.png');

-- --------------------------------------------------------

--
-- Структура на таблица `ssd`
--

CREATE TABLE `ssd` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL,
  `price` int(100) NOT NULL,
  `image_01` varchar(100) NOT NULL,
  `image_02` varchar(100) NOT NULL,
  `image_03` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Схема на данните от таблица `ssd`
--

INSERT INTO `ssd` (`id`, `name`, `details`, `price`, `image_01`, `image_02`, `image_03`) VALUES
(1, '1TB Samsung 980 Pro M.2 NVMe', '1TB\r\nPCIe Gen 4.0 x4 NVMe 1.3c\r\n7000 MB/сек скорост на четене\r\n5000 MB/сек скорост на запис', 289, 'ssd1.jpg', 'ssd2.webp', 'ssd3.jpg'),
(2, '2TB SAMSUNG SSD 870 EVO', '2TB\r\nSATA 6 Gb/s\r\n560 MB/s скорост на четене\r\n530 MB/s скорост на запис', 439, 'ssd4.webp', 'ssd5.jpg', 'ssd6.jpg'),
(3, '512GB ADATA XPG SPECTRIX S40G RGB', '512GB\r\nM.2 2280\r\nдо 3500MB/s скорост на четене\r\nдо 3000MB/s скорост на запис', 99, 'ssd8.webp', 'ssd9.jpg', 'ssd7.jpg'),
(4, '1TB ADATA SU800 SATA', '1TB\r\n2.5&#34; SATA 6Gb/s\r\n560 mb/s-скорост на четене\r\n520mb/s-скорост на запис', 220, 'ssd10.jpg', 'ssd11.webp', 'ssd12.jpg'),
(5, '2TB SSD Corsair MP600 PRO LPX', '2ТB\r\nNVMe PCIe M.2 Gen4x 4\r\n3D TLC\r\n7100 MB/s четене\r\n6800MB/s запис', 449, 'ssd14.webp', 'ssd15.webp', 'ssd13.jpg'),
(6, '1TB Corsair MP600 GS', '1TB NVMe M.2 2280\r\nGen4 PCIe x4\r\n4800MB/s скорост на четене\r\n3900MB/s скорост на запи', 199, 'ssd18.jpg', 'ssd17.webp', 'ssd16.jpg');

-- --------------------------------------------------------

--
-- Структура на таблица `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Схема на данните от таблица `subscribers`
--

INSERT INTO `subscribers` (`id`, `user_id`, `email`) VALUES
(1, 0, 'georgi_naidenov70@abv.bg'),
(2, 0, 'vasko.2005@abv.bg'),
(3, 3, 'stanimir_n@abv.bg');

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(2, 'Daniel', 'danil_p@gmail.com', '3e511da7577d1864871b760ab30e05b56943c9b2'),
(3, 'Iliana', 'ilianastaykovska18b@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(4, 'Vasil', 'vasilatanasov7@gmail.com', '85568b20c3315286c4dfebb330b25146f92bed66'),
(5, 'ВаскоХеликоптера', 'vasko.2005@abv.bg', 'bc4b6eb5a340a2be840f5b984b9e8fef64e98342'),
(6, 'Georgi', 'georgi_naidenov70@abv.bg', '52c6b3377b2a4f041a45678ae3c00c927328fc55');

-- --------------------------------------------------------

--
-- Структура на таблица `videocards`
--

CREATE TABLE `videocards` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL,
  `price` int(100) NOT NULL,
  `image_01` varchar(100) NOT NULL,
  `image_02` varchar(100) NOT NULL,
  `image_03` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Схема на данните от таблица `videocards`
--

INSERT INTO `videocards` (`id`, `name`, `details`, `price`, `image_01`, `image_02`, `image_03`) VALUES
(1, 'Gigabyte GeForce GTX 1660 SUPER D6 6GB', '6GB GDDR6\r\n192-bit\r\nHDMI\r\nDisplayPort', 699, 'nvidia1.jpg', 'nvidida2.webp', 'nvidia3.webp'),
(2, 'MSI GeForce RTX 4080 GAMING X TRIO 16GB', '16GB GDDR6X\r\n256-bit\r\nCore Clock: 2535 MHz\r\nHDMI & DisplayPort', 3249, 'nvidia4.jpg', 'nvidia5.jpg', 'nvidia6.jpg'),
(3, 'MSI GeForce RTX 4090 GAMING X TRIO 24G', '24GB GDDR6X\r\n384-bit\r\nHDMI\r\nDisplayPort', 4199, 'nvividia9.jpg', 'nvidia7.jpg', 'nvidia8.jpg'),
(4, 'ASUS TUF Gaming GeForce RTX 3060 V2 OC Edition', '12GB\r\n192-bit\r\nHDMI\r\nDisplay Port', 999, 'nvidia10.png', 'nvidia11.png', 'nvidia12.png'),
(5, 'ASRock Radeon RX 6700 XT Challenger D 12GB OC', '12GB DDR6\r\n192-bit\r\nHDMI\r\nDisplayPort\r\n', 1009, 'amd1.jpg', 'amd2.webp', 'amd3.jpg'),
(6, 'MSI Radeon RX 7900 XT GAMING TRIO CLASSIC 20G', '20GB GDDR6\r\n320-bit\r\nHDMI\r\nDisplayPort', 2239, 'amd4.png', 'amd5.jpg', 'amd6.jpg');

-- --------------------------------------------------------

--
-- Структура на таблица `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Индекси за таблица `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Индекси за таблица `boxes`
--
ALTER TABLE `boxes`
  ADD PRIMARY KEY (`id`);

--
-- Индекси за таблица `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Индекси за таблица `coolers`
--
ALTER TABLE `coolers`
  ADD PRIMARY KEY (`id`);

--
-- Индекси за таблица `cpu`
--
ALTER TABLE `cpu`
  ADD PRIMARY KEY (`id`);

--
-- Индекси за таблица `hdd`
--
ALTER TABLE `hdd`
  ADD PRIMARY KEY (`id`);

--
-- Индекси за таблица `headphones`
--
ALTER TABLE `headphones`
  ADD PRIMARY KEY (`id`);

--
-- Индекси за таблица `keyboards`
--
ALTER TABLE `keyboards`
  ADD PRIMARY KEY (`id`);

--
-- Индекси за таблица `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Индекси за таблица `monitors`
--
ALTER TABLE `monitors`
  ADD PRIMARY KEY (`id`);

--
-- Индекси за таблица `motherboards`
--
ALTER TABLE `motherboards`
  ADD PRIMARY KEY (`id`);

--
-- Индекси за таблица `mouse`
--
ALTER TABLE `mouse`
  ADD PRIMARY KEY (`id`);

--
-- Индекси за таблица `mousepads`
--
ALTER TABLE `mousepads`
  ADD PRIMARY KEY (`id`);

--
-- Индекси за таблица `myorders`
--
ALTER TABLE `myorders`
  ADD PRIMARY KEY (`id`);

--
-- Индекси за таблица `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индекси за таблица `powersuply`
--
ALTER TABLE `powersuply`
  ADD PRIMARY KEY (`id`);

--
-- Индекси за таблица `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индекси за таблица `ram`
--
ALTER TABLE `ram`
  ADD PRIMARY KEY (`id`);

--
-- Индекси за таблица `ssd`
--
ALTER TABLE `ssd`
  ADD PRIMARY KEY (`id`);

--
-- Индекси за таблица `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Индекси за таблица `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индекси за таблица `videocards`
--
ALTER TABLE `videocards`
  ADD PRIMARY KEY (`id`);

--
-- Индекси за таблица `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `boxes`
--
ALTER TABLE `boxes`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `coolers`
--
ALTER TABLE `coolers`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cpu`
--
ALTER TABLE `cpu`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hdd`
--
ALTER TABLE `hdd`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `headphones`
--
ALTER TABLE `headphones`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `keyboards`
--
ALTER TABLE `keyboards`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `monitors`
--
ALTER TABLE `monitors`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `motherboards`
--
ALTER TABLE `motherboards`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mouse`
--
ALTER TABLE `mouse`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mousepads`
--
ALTER TABLE `mousepads`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `myorders`
--
ALTER TABLE `myorders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `powersuply`
--
ALTER TABLE `powersuply`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `ram`
--
ALTER TABLE `ram`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ssd`
--
ALTER TABLE `ssd`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `videocards`
--
ALTER TABLE `videocards`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
