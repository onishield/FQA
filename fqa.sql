-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2017 at 07:10 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fqa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `question` text CHARACTER SET utf8 COLLATE utf8_thai_520_w2 NOT NULL,
  `answer` text CHARACTER SET utf8 COLLATE utf8_thai_520_w2 NOT NULL,
  `enable` tinyint(1) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `question`, `answer`, `enable`) VALUES
(3, 'น้ำอะไรเอ่ย สามารถยืนได้', 'น้ำตื้นๆ', 0),
(4, 'ทำไมบางคนถึงเจ็บหนังหัว', 'เพราะผมหยิก', 0),
(5, 'เบคแฮมโดนใบแดงแล้วไปไหน', 'ไปเป็นทหาร', 0),
(6, 'เลขอะไรมาก่อน 1 2 3', 'ก้อ เลข 1 2 2 ไง้', 0),
(7, 'แมวอะไรเอ่ยอยู่ในดิน ?', 'แมวกัน (มันแกว)', 0);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `question` text CHARACTER SET utf8mb4 COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `answer` text CHARACTER SET utf8mb4 COLLATE utf8mb4_thai_520_w2 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `question`, `answer`) VALUES
(1, '\0ไม่ได้ IP Wall Garden\r\n', '1.ตรวจสอบว่า MAC Router วิ่งมาถึง Regional GW Router หรือยัง ถ้ายังไม่เห็น MAC ให้เขตหรือสค. ตรวจสอบ Network จาก ONU ถึง GW Router                                 \r\n2.ตรวจสอบการตั้งค่า IP Snooping และ Trust Port ของ L2 Device\r\n3.แต่ถ้าทุกอย่างถูกต้องและเห็น MAC วิ่งเข้ามาถึง GW Router แล้วให้เปิด Ticket แจ้งส่วนกลาง\r\n'),
(2, '\0ได้ IP Wall Garden แต่ไม่สามารถเข้าหน้าลงทะเบียนได้\r\n', '1.ตรวจสอบว่า Ping เห็น Regional GW Router ถ้า Ping เจอให้คีย์เข้าหน้าเว็ป 10.88.88.131 โดยตรง\r\n2.ถ้า Ping ไม่เจอให้ปิด-เปิด Router แล้วลองใหม่\r\n3.หากยังไม่ได้ให้เปิด Ticket แจ้งส่วนกลาง\r\n'),
(3, 'ลงทะเบียนสำเร็จ แต่ไม่ได้ IP Open Garden หรือค้างหน้าจอ Modem Create successfully หรือ Please wait for 1 minute and please try again\r\n', '1.ให้ปิด-เปิด Router เพื่อให้ Router ร้องขอ IP ใหม่\r\n2.หากยังไม่ได้ตรวจสอบว่าอยู่ใน VLAN ที่ถูกต้อง (package Home ใช้ VLAN 122, package HomePlus Biz และ BizPlus ใช้ VLAN 144)\r\n3.ถ้ายังใช้งานไม่ได้ให้เปิด Ticket แจ้งส่วนกลาง\r\n'),
(4, 'ลงทะเบียนไม่สำเร็จขึ้นหน้าจอ Option 82 Incorrect\r\n', '1.ตรวจสอบ Option 82 บน L2 Device (OLT) ว่าตั้งค่าถูกต้องหรือไม่\r\n2.ตรวจสอบ Report Option82 บนหน้าจอ Netka ว่า Fail จากสาเหตุใด และจีงทำการแก้ไข\r\n'),
(5, 'ลงทะเบียนไม่สำเร็จขึ้นหน้าจอ Option 82 xxxxx\r\n', '1.ตรวจสอบว่าเป็นอุปกรณ์ OLT เรุ่นใหม่ที่ยังไม่เคยใช้งานกับ AAA ใช่หรือไม่ ถ้าใช่ให้เปิด Ticket แจ้งส่วนกลางเพื่อทำ Add Database Option 82 ของอุปกรณ์ใหม่รุ่นนี้ให้กับ AAA\r\n2.ถ้าไม่ใช่ให้ตรวจสอบ Report Option 82 บนหน้าจอ Netka ว่าเกิดจากสาเหตุใด และจึงทำการแก้ไข\r\n'),
(6, '\0การลงทะเบียนให้กับอุปกรณ์ Router, Firewall, Load Balancer หรือ Server ที่ไม่สามารถ Redirect ไปยังหน้าลงทะเบียนได้\r\n', 'แนะนำให้หาอุปกรณ์มาปลอม MAC address แล้วทำการลงทะเบียนแทนดังนี้\r\n\r\n1.ให้ปลอม MAC Address ของอุปกรณ์ตัวนั้นบนคอมพิวเตอร์ (วิธีการปลอม MAC Address ดูได้ที่คำถามการปลอม MAC Address บนคอมพิวเตอร์)\r\n2.ถอดสาย Lan ของอุปกรณ์ตัวนั้น (Router, Firewall, Load Balancer หรือ Server) ออกจาก Network\r\n3.ต่อคอมพิวเตอร์ที่ได้ปลอม MAC แล้วเข้ากับ Network และทำการลงทะเบียนแทนอุปกรณ์จริง\r\n4.Reset ค่า MAC ของคอมพิวเตอร์ที่ใช้ปลอม MAC เป็นค่าเดิมจากโรงงานและถอดสายออกจาก Network\r\n5.ต่ออุปกรณ์ตัวจริง (Router, Firewall, Load Balancer หรือ Server) กลับสู่ Network ก็จะทำให้อุปกรณ์จริงใช้งานอินเตอร์เน็ตได้\r\n'),
(7, 'มีวิธีการที่ทำให้สามารถใช้ ONU/Router ที่ถุก Terminate ก่อน 7 วันหรือไม่\r\n', 'ใช้เครื่องมือ Clear MAC address เพื่อลบข้อมูล MAC address ของ ONU/Router ออกจากระบบ หลังจากนั้นสามารถนำ ONU/Router นั้นไปใช้งานได้ทันที\r\n'),
(8, '\0เปลี่ยนความเร็วภายใน Package เดิมทำอย่างไร (change package speed)\r\n', '1.ให้เจ้าหน้าที่ OM เปลี่ยนความเร็วผ่านระบบ OM ได้เลย โดยการแก้ไข package speed ของ Subscriber ID ที่จะเปลี่ยนลงมายัง DCSS แล้ว DCSS จะส่งต่อคำสั่งมาให้ AAA ทำการเปลี่ยนความเร็วให้\r\n'),
(9, '\0เปลี่ยน Package จาก Private <-> Public IP ทำอย่างไร\r\n', 'ปัจจุบันจะต้องให้ OM สั่ง Terminate Subscriber ID เดิมและสร้าง Subscriber ID ใหม่ที่เป็น Package ใหม่ที่ตัองการ หลังจากนั้นจึงทำขั้นตอนดังนี้\r\n\r\n1.ให้นำคอมพิวเตอร์ที่มีโปรแกรมการปลอม MAC address มาสร้าง MAC Address ใหม่ที่ไม่มีในฐานข้อมูลของ AAA ตามวิธีการปลอม MAC Address บนคอมพิวเตอร์\r\n2.นำคอมพิวเตอร์นั้นมาต่อ Network และลงทะเบียนด้วยชื่อ Subscriber ID และ Password เดิมที่ถูก Terminate ไปแล้ว (เสมือนการเปลี่ยน Modem/Router ให้กับ Subscriber ID เดิม เพื่อให้ MAC Address ของ ONU/Router เดิมเป็นอิสระ)\r\n3.ทำการเปลี่ยน VLAN ของ ONU ให้อยู่ใน VLAN ตาม Package ใหม่ (home = VLAN 122) (homeplus, biz, bizplus = VLAN 144)\r\n4.นำ ONU/Router เดิมที่ MAC Address เป็นอิสระแล้วมาลงทะเบียนด้วย Subscriber ID และ Password ใหม่ ก็จะทำให้ลูกค้าได้ใช้งานตาม package ใหม่ (ซึ่งขั้นตอนนี้เราสามารถปลอม MAC address ของ ONU/Router และทำการลงทะเบียนที่สำนักงานแทนที่จะต้องออกไปหน้างานได้ตามขั้นตอน A.6)\r\n'),
(10, '\0ทำไม DCSS ถึงเห็นสถานะ Online/Offline ไม่ตรงกับสถานะการใช้งานจริง\r\n', 'การดูสถานะการเชื่อมต่อ (online/offline) แนะนำให้ดูผ่านเครื่องมือ Tshoot แทนซึ่งจะใกล้เคียงกับเหตุการณ์จริงมากกว่าดูผ่านระบบ DCSS\r\n\r\nเนื่องจากการดูสถานะบนระบบ DCSS ของ AAA จะไม่ Realtime เหมือน PPPoE เนื่องจากใช้เทคโนโลยี IPoE ที่เป็น L3 ซึ่งเมื่อ Modem/Router ลงทะเบียนสำเร็จ MAC Address จะถูกผูกกับ IP Address ตามกำหนดเวลา Leased Time ที่กำหนดจาก DHCP Server ปัจจุบันตั้งไว้ที่ 48 Hr เมื่อไรที่ MAC Address นี้เข้ามาก็จะได้ IP Address ทันทีไม่มีการสร้าง Session เหมือนกับ PPPoE ที่จะต้องมีทุกครั้งที่เข้าใช้งานด้วยการใช้ User/Password ดังนั้นการจะดูสถานะของการใช้งานบน AAA จึงต้องใช้วิธีทางอ้อมแทนด้วยการตรวจสอบ Traffic ที่วิ่งผ่านอุปกรณ์ Shapper ซึ่งการใช้วิธีการนี้จะเป็นการเข้าไป Polling สถานะของ Traffic ของแต่ละ Sub ID ทุกๆคาบเวลาหนึ่ง โดยการเปลี่ยนสถานะจาก Online->Offline จะใช้เวลาประมาณ 20 นาที และจากสถานะ Offline->Online จะใช้เวลาประมาณ 5 นาที โดยระหว่างนี้ลูกค้าจะต้องออกอินเตอร์เน็ตได้แล้ว\r\n'),
(11, 'MAC address ของ ONU/Modem/Router ซ้ำหรือเหมือนกันทำให้ใช้งานได้ทันทีทั้งๆที่ยังไม่ได้ลงทะเบียน โดยได้ package เดียวกับลูกค้าที่ใช้ MAC ซ้ำกันที่ได้ลงทะเบียนใช้งานไปก่อนหน้านี้ ซึ่งณ.เวลาเดียวกันจะมีลูกค้าเพียงหนึ่งรายเท่านั้นที่ใช้งานได้แล้วจะหลุดเมื่อลูกค้าอีกรายหนึ่งเข้ามาใช้งาน เพราะเมื่อ MAC ซ้ำ IP address  ก็จะซ้ำกันด้วยทำให้เกิดเหตุการณ์ IP ชนกัน\r\n', 'เหตุการณ์นี้มาจากผู้ขายอุปกรณ์เข้าไปเปลี่ยนค่า MAC address ของอุปกรณ์ทึ่ส่งมอบให้ CAT ให้มีค่าเดียวกันเพื่อสะดวกในการตรวจรับ ดังนั้นแนะนำก่อนนำอุปกรณ์ใดๆไปติดตั้งให้ลูกค้าควรทำการ Factory reset ให้อุปกรณ์นั้นๆกลับไปเป็นค่าที่ตั้งมาจากโรงงานก่อนเสมอ\r\n'),
(12, 'ไม่ได้ IP Wall Garden\r\n', '1.ตรวจสอบว่า MAC Router วิ่งมาถึง Regional GW Router หรือยัง ถ้ายังไม่เห็น MAC ให้เขตหรือสค. ตรวจสอบ Network จาก ONU ถึง GW Router                                 \r\n2.ตรวจสอบการตั้งค่า IP Snooping และ Trust Port ของ L2 Device\r\n3.แต่ถ้าทุกอย่างถูกต้องและเห็น MAC วิ่งเข้ามาถึง GW Router แล้วให้เปิด Ticket แจ้งส่วนกลาง\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `info2`
--

CREATE TABLE `info2` (
  `id` int(11) NOT NULL,
  `question` text CHARACTER SET utf8 COLLATE utf8_thai_520_w2 NOT NULL,
  `answer` text CHARACTER SET utf8 COLLATE utf8_thai_520_w2 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info2`
--

INSERT INTO `info2` (`id`, `question`, `answer`) VALUES
(1, 'เครื่องมือและวิธีการปลอม MAC address บนคอมพิวเตอร์\r\n', '1.ลงโปรแกรมปลอม MAC Address เช่น Technitium MAC Address Changer บนคอมพิวเตอร์ โดย download และศึกษาวิธีการใช้งานจาก URL : https://technitium.com/tmac/\r\n\r\nข้อต้องระวัง : ต้องระวังไม่ปลอม MAC ซ้ำกับอุปกรณ์ที่มีใช้งานอยู่ในระบบ เพราะจะทำให้กระทบการใช้งานของลูกค้าเดิมได้ และหลังการปลอมจะต้อง Reset ค่า MAC กลับคืนให้กับคอมพิวเตอร์ตัวนั้นด้วยทุกครั้ง\r\n'),
(2, 'เครื่องมือและวิธีการ Clear MAC Address\r\n', '1.ต่อเข้า CAT VPN\r\n2.Browse เข้า URL: http://clearmac.aaa.catbb.net/\r\n2.1Login เข้าใช้งานด้วย TACCAC user&password\r\n2.2ใส่ค่า Subscriber ID หรือ MAC address ที่ต้องการ clear\r\n3.เมื่อ clear MAC address สำเร็จระบบจะเก็บประวัติการเข้าใช้งานไว้\r\n'),
(3, 'เครื่องมือในการตรวจสอบสถานะการใช้งาน (Tshoot)\r\n', '1.ต่อเข้า CAT VPN\r\n2.Browse เข้า URL: http://tshoot.aaa.catbb.net/\r\n2.1ใส่ค่า Subscriber ID หรือ MAC address ที่ต้องการตรวจสอบสถานะการใช้\r\n'),
(4, 'เครื่องมือหรือรายงานบน AAA มีอะไรบ้างและเข้าไปดูได้อย่างไร\r\n', '1.ต่อเข้า CAT VPN\r\n2.Browse เข้า URL : http://report.aaa.catbb.net/\r\n2.1เลือกรายงานที่ต้องการจะดู\r\n2.2สามารถ copy ข้อมูลที่สนใจมา paste บน Excel ได้\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `info3`
--

CREATE TABLE `info3` (
  `id` int(11) NOT NULL,
  `question` text CHARACTER SET utf8 COLLATE utf8_thai_520_w2 NOT NULL,
  `answer` text CHARACTER SET utf8 COLLATE utf8_thai_520_w2 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info3`
--

INSERT INTO `info3` (`id`, `question`, `answer`) VALUES
(1, 'Test speed ได้ไม่เต็ม BW ของ Package ที่ใช้\r\n', '1.ตรวจสอบว่าเป็นการทดสอบผ่าน Ethernet Port ไม่ใช่ WiFi\r\n2.ตรวจสอบว่ามี Network Congestion หรือไม่\r\n3.มีการตั้งค่าจำกัดความเร็วบน OLT/ONU (Bandwidth profile)หรือไม่\r\n4.ถ้าเป็นการ Test Speed >= 100Mbps คอมพิวเตอร์จะต้องเป็น port Gigabit\r\n'),
(2, 'เข้าใช้งานบางเว็ปไม่ได้\r\n', '1.ให้เปิด Ticket แจ้งส่วนกลางเพื่อแก้ไข\r\n(สาเหตุเกิดจาก IP address ของ AAA เป็นชุด IP address ที่ CAT ซื้อต่อจากผู้ใช้เดิมที่เคยลงทะเบียนไว้ที่อเมริกา ทำให้เกิดปัญหากับบางเว็ปที่มีการเช็คประเทศของ IP ว่าหากไม่ใช่ IP address ที่เป็นของไทยจะไม่อนุญาตให้ใช้งานเว๊ปนั้นได้)\r\n'),
(3, 'เล่นเกมแล้วช้าหรือสดุดเมื่อเทียบกับ PPPoE หรือผู้ให้บริการ Boardband รายอื่น\r\n', '1.ตรวจสอบว่ามี Network Congestion หรือไม่\r\n2.ตรวจสอบว่าลูกค้าได้เข้าไปเล่นเกมผ่าน Game Server ของประเทศอะไร ใช่ประเทศไทยหรือไม่ หรือใช่ประเทศเดียวกันกับที่เล่นผ่าน PPPoE/ผู้ให้บริการรายอื่น หรือไม่ เพราะถ้า Web Game เข้าใจว่า IP address ที่ลูกค้าใช้งานเป็น IP address ที่มาจากประเทศอเมริกา (เกิดขึ้นเนื่องจาก IP address ของ AAA เป็นชุด IP address ที่เคยลงทะเบียนว่าเป็นของประเทศอเมริกา) อาจจะทำให้ลูกค้าถูกโยกให้ไปใช้ Server ที่ไกลจากประเทศไทยทำให้มี delay ที่มากกว่าจึงทำให้ช้าหรือสดุดได้ หากเป็นกรณีนี้ให้เปิด Ticket แจ้งส่วนกลางเพื่อแก้ไขต่อไป\r\n'),
(4, 'ทำไมถึงใช้ Load Balancer บน AAA ภายใต้ Package เดียวกันไม่ได้ เช่นจะใช้ Load Balancer บน Package Private หรือ Public อย่างใดอย่างหนึ่ง\r\n', 'สาเหตุเนื่องจาก AAA ใช้เทคโนโลยี IPoE ซึ่งทำงานอยู่บน L3 โดยมี DHCP Server จะทำหน้าที่จ่าย IP address ให้กับ Modem/Router ที่ร้องขอเข้ามาเพื่อจะได้ใช้งานออกอินเตอร์เน็ตได้ โดยวิธีการจ่าย IP Address ของ DHCP Server จะจ่ายเป็น Subnet /24 ซึ่งทำให้ถ้าได้ IP Address ที่ตกอยู่ใน Subnet เดียวกัน (Network เดียวกัน) ของทั้ง 2 Links จะทำให้ Load Balancer ทำงานไม่ได้เพราะทางเทคนิคอุปกรณ์ต่างๆไม่สามารถถูกเซ็ตค่า IP Address ที่ Subnet เดียวกันได้บน 2 Interfaces (Ports) ต่างจาก BRAS ที่ใช้เทคโนโลยี PPPoE ซึ่งทำงานบน L2 และใช้ IP Address Subnet /30 จึงทำให้แต่ละ IP ที่ได้จากแต่ละ Sub ID อยู่คนละ Network\r\n'),
(5, 'การเซ็คค่า Option82 บน OLT\r\n', 'ให้ติดต่อ RNOC แต่ละเขตเพื่อขอข้อมูลวิธีการเซ็คค่าให้ OLT ทำงานได้\r\n'),
(6, 'การเซ็คค่า L2 Security บน OLT เช่นเรื่อง IP Snooping, IP Source Guard\r\n', 'ให้ติดต่อ RNOC แต่ละเขตเพื่อขอข้อมูลวิธีการเซ็คค่าให้ OLT ทำงานได้\r\n'),
(7, 'Leased Time ของระบบ AAA มีการ set ค่าไว้อย่างไร\r\n', 'Leased time ของ AAA จะมี 2 ช่วงคือ\r\n1.ช่วง Wall Garden อุปกรณ์ DHCP Server จะถูกตั้งค่า Leased Time ที่ 2 นาที\r\n2.ช่วง Open Garden อุปกรณ์ DHCP Server จะมี Leased Time อยู่ 2 ช่วงย่อยคือ\r\n2.1ช่วงย่อยแรกจะมีค่า Leased Time ที่ 1 ชั่วโมง\r\n2.2ช่วงย่อยหลังจะมีค่า Leased Time ที่ 47 ชั่วโมง\r\nโดยหลักการทำงานของ Leased Time หลังจากอุปกรณ์ Client ได้รับ Leased Time แล้วเมื่อใช้งานไปครึ่งเวลาของ Leased Time อุปกรณ์ Client ขอ renew IP Address ไปยัง DHCP Server ถ้าได้ IP Address ใหม่พร้อม Leased Time ใหม่ก็จะมีสิทธิ์ใช้งานต่อไปอีก แต่ถ้าไม่ได้จะมีสิทธิ์ใช้ได้อีกเพียงครึ่งเวลาที่เหลืออยู่\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` text CHARACTER SET utf8 COLLATE utf8_thai_520_w2 NOT NULL,
  `password` text CHARACTER SET utf8 COLLATE utf8_thai_520_w2 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info2`
--
ALTER TABLE `info2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info3`
--
ALTER TABLE `info3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `info2`
--
ALTER TABLE `info2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `info3`
--
ALTER TABLE `info3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
