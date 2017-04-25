-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 07, 2017 at 12:19 PM
-- Server version: 5.6.28
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_chantryisland`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `about_id` int(10) UNSIGNED NOT NULL,
  `about_para1` text NOT NULL,
  `about_image1` varchar(100) NOT NULL DEFAULT 'noimage.jpg',
  `about_para2` text NOT NULL,
  `about_para3` text NOT NULL,
  `about_image2` varchar(100) NOT NULL DEFAULT 'noimage.jpg',
  `about_hist_para1` text NOT NULL,
  `about_hist_para2` text NOT NULL,
  `about_bird_para1` text NOT NULL,
  `about_bird_image1` varchar(100) NOT NULL DEFAULT 'noimage.jpg',
  `about_lhouse_para1` text NOT NULL,
  `about_lhouse_image1` varchar(100) NOT NULL DEFAULT 'noimage.jpg',
  `about_lhouse_image2` varchar(100) NOT NULL DEFAULT 'noimage.jpg',
  `about_l_binfo` text NOT NULL,
  `about_l_ainfo` text NOT NULL,
  `about_lastpara` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`about_id`, `about_para1`, `about_image1`, `about_para2`, `about_para3`, `about_image2`, `about_hist_para1`, `about_hist_para2`, `about_bird_para1`, `about_bird_image1`, `about_lhouse_para1`, `about_lhouse_image1`, `about_lhouse_image2`, `about_l_binfo`, `about_l_ainfo`, `about_lastpara`) VALUES
(1, 'Chantry Island is located on Lake Huron, just over a mile southwest of the Saugeen River mouth in Southampton, Ontario. On the island is a majestic Imperial Lighthouse built in the mid 1800s, as well as the Keeper’s quarters and a boat house. In 1822, during a hydrographic survey, Captain Henry Bayfield of the Royal Navy christened\r\nthe island and named it after his friend and British sculptor Sir Francis Chantry.                                                                                                                                                                                                                                                                                                                                                                           ', 'about01.png', 'Chantry Island is a glacial moraine and consists of stone above the water and beneath extending a mile north and a mile south of the island. These underwater shoals of massive granite boulders have made this area one of the most treacherous in the Great Lakes. There are over 50 known shipwrecks around the island and there are many accounts from the 1800’s and early – mid 1900’s of these disasters and lost lives. Today, buoys and modern navigational tools safely guide boats through the area.                                                                                                                                                                                    ', 'Chantry Island is located on Lake Huron, just over a mile southwest of the Saugeen River mouth in Southampton, Ontario. On the island is a majestic Imperial Lighthouse built in the mid 1800s, as well as the Keeper’s quarters and a boat house. In 1822, during a hydrographic survey, Captain Henry Bayfield of the Royal Navy christened\r\nthe island and named it after his friend and British sculptor Sir Francis Chantry.                                                                                                                                                                                                                                                     ', 'about02.jpg', '                                                                                                                                            During the mid 1800’s water traffic on the Great Lakes had substantially increased and the colonial government called for improved navigational tools for the mariners on the Lake Huron. John Brown of Thorold was contracted to build the lighthouse on Chantry Island, as well as 10 other lighthouses to help sailors navigate the Lake. Because of the expense and difficulty of building, only six were completed. The Chantry Island Lighthouse was one of these completed and it was lit on April 1, 1859.                                                                                          ', '                                                                                                                                            The lighthouse stands 86 ft. above water level and is 80 ft. high from its base to the light’s center. The lantern room of the lighthouse was fitted with a Fresnel lens built and transported from Paris, France. The first fuel used was sperm whale oil and the first light was a fixed light, not the familiar flashing one. Other fuels used have been colza oil, coal\r\noil, kerosene, acetylene and electricity. Its present-day flashing light is solar powered.                                                                                                     ', '                                                                                                                                  In 1957 the Canadian Wildlife Service declared Chantry Island a Federal Migratory Bird Sanctuary to protect the migratory and nesting birds of the island. It is the largest Federal Migratory Bird Sanctuary between James Bay and Point Pelee. There are approximately fifty thousand birds (including chicks) on the island during the breeding season. It is home to nesting colonies of Great Blue Heron, Great Egret, Black-crowned Night-Heron, Herring Gull, Ring-billed Gull and Double-crested Cormorant. Water fowl such as Mallard, American Black Duck, Gadwall, Blue-winged Teal, Green-winged Teal, Northern Pintail, and American Wigeon are also known nesters on the island.  Because the island is a migratory bird sanctuary, the number of people on the island on any given day is strictly limited and tours must be booked through the Chantry Island Tour Base.                                                                                           ', 'bird_eggs.jpg', '                                                                                                                        For almost 100 years (1859 – 1954), light keepers lived on the island to keep the light burning for mariners on the lake. When the lighthouse lamp was converted to electricity in 1954, a light keeper was no longer needed. The buildings were left neglected and suffered at the hands of vandals. The lighthouse still stood intact, but little was left of the light keeper’s quarters. The roof had fallen in and the walls and floors had crumbled into a pile of rubble in the basement.                                                                                  ', 'before.png', 'after.jpg', '                   In 1997 the local Marine Heritage Society established specific goals for the island\'s restoration. The project was to be funded by donations and fundraising efforts, and the majority of the work was to be done by volunteers. With permission from 5 levels of government, the group of volunteers began to rebuild the light keeper’s cottage, using the original structure plans.                        ', '            The Light Keeper\'s Cottage restoration was completed in 2001. Over 250 volunteers put in more than 300,000 hours of labor to finish the restoration and ready the boat for tours. Since 2001 volunteers have restored the staircase of the lighthouse, built a boathouse on the island, constructed a replica of the original boat (which sits in the boathouse) and reconstructed the privy.\r\n\r\n            Today the tour is operated with over 125 volunteers, whose jobs include island housekeepers, gardeners, tour boat captains, crew and tour guides, and gift shop sales and service personnel. Volunteers also install the portable walkways and docks every spring and remove them every fall. To date, there have been over 12,000 visitors to the island.\r\n            \r\n            	                    ', '                                                                      Partners in the restoration, island maintenance, Chantry Island Tour operation and other Marine Heritage endeavors include the Town of Saugeen Shores, Bruce County Museum and Cultural Centre, Southampton Propeller Club, Chantry Island Chambettes and Saugeen Shores Chamber of Commerce. Their continuous support contributes to the success of the Marine Heritage Society goal to preserve the local marine history.                                       ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_community`
--

CREATE TABLE `tbl_community` (
  `comm_id` int(10) UNSIGNED NOT NULL,
  `comm_vol_para1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_community`
--

INSERT INTO `tbl_community` (`comm_id`, `comm_vol_para1`) VALUES
(1, '                        The Marine Heritage Society is a not-for-profit group of volunteers dedicated to the preservation and enhancement of our community\'s marine history. Thank you to all of the Marine Heritage Society volunteers, this would not be possible without your time and donations.     ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_community_events`
--

CREATE TABLE `tbl_community_events` (
  `event_id` int(10) UNSIGNED NOT NULL,
  `event_title` varchar(100) NOT NULL,
  `event_image` varchar(100) NOT NULL DEFAULT 'noimage.jpg',
  `event_date` varchar(100) NOT NULL,
  `event_info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_community_events`
--

INSERT INTO `tbl_community_events` (`event_id`, `event_title`, `event_image`, `event_date`, `event_info`) VALUES
(1, 'Flipping the Tilbury Work Boat', 'news01.jpg', '2017-03-01', 'Every year our work boat is stripped down, painted both inside and out and prepared for another season of hard work. Thanks to the Town and our volunteers this turns into a fun and productive activity. '),
(2, 'Doug Johnson Proudly Displays the Famous Saying', 'news02.jpg', '2017-01-18', 'Doug Johnson proudly displays our famous saying!'),
(3, 'Southampton Christmas Parade', 'news03.jpg', '2016-12-02', 'The Peerless II outside the Boathouse in southampton. Photo courtesy Eric Rogers.'),
(4, 'MHS and Propeller Club Annual General Meeting', 'news04.jpg', '2016-11-25', 'The dinner table was full and fun. The conversation was lively and spontaneous. The meal was excellent! Photo by Sandy Lindsay.'),
(5, 'Chambettes Present Cheque to Marine Heritage Society', 'news05.jpg', '2016-11-30', 'The Marine Heritage Society was pleased to receive a cheque for $1500.00 from the local Chambettes. This represents donations received connected to the September 10 "Chantry Island Sleepover". We are certainly grateful and appreciate all the support we have received from the Chambettes both in the past & present. Thank You! Picture Credit to Sandy Lindsay');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_community_partners`
--

CREATE TABLE `tbl_community_partners` (
  `partners_id` int(11) UNSIGNED NOT NULL,
  `partners_name` varchar(100) NOT NULL,
  `partners_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_community_partners`
--

INSERT INTO `tbl_community_partners` (`partners_id`, `partners_name`, `partners_image`) VALUES
(1, 'Saugeen Shores', 'saugeen.png'),
(2, 'Explore the Bruce', 'bruce.png'),
(3, 'South Hampton Tennis Club', 'tennis.png'),
(4, 'Bruce County Museum & Cultural Centre', 'bruce.jpg'),
(5, 'Bruce Coast Lighthouse Tours', 'lighthouse_tours.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_community_volunteers`
--

CREATE TABLE `tbl_community_volunteers` (
  `vol_id` int(10) UNSIGNED NOT NULL,
  `vol_fname` varchar(50) NOT NULL,
  `vol_lname` varchar(50) NOT NULL,
  `vol_position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_community_volunteers`
--

INSERT INTO `tbl_community_volunteers` (`vol_id`, `vol_fname`, `vol_lname`, `vol_position`) VALUES
(1, 'Don ', 'Nicholson', 'Chairman'),
(2, 'Pat', 'O\'Connor', 'Vice Chairman'),
(3, 'John', 'Rigby', 'Treasurer'),
(4, 'Stan', 'Young', 'Secretary'),
(5, 'Peter', 'Williamson', 'Observer'),
(6, 'Rick', 'Smith', 'Past Chairman');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_community_volunteers2`
--

CREATE TABLE `tbl_community_volunteers2` (
  `vol2_id` int(10) UNSIGNED NOT NULL,
  `vol2_fname` varchar(50) NOT NULL,
  `vol2_lname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_community_volunteers2`
--

INSERT INTO `tbl_community_volunteers2` (`vol2_id`, `vol2_fname`, `vol2_lname`) VALUES
(1, 'Jane', 'Kramer'),
(2, 'Ali', 'Kelly'),
(3, 'Vicki', 'Tomori'),
(4, 'Dan', 'Holmes'),
(5, 'Dave', 'Wenn'),
(6, 'Ed', 'Braun');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `contact_id` int(10) UNSIGNED NOT NULL,
  `contact_para1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contact_id`, `contact_para1`) VALUES
(1, '                           From Highway 21 in Southampton, turn west on Clarendon and follow the signs, or From High Street, (the main street), turn north on Huron or Grosvenor Street and look for the signs.     ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donate`
--

CREATE TABLE `tbl_donate` (
  `donate_id` int(10) UNSIGNED NOT NULL,
  `donate_para1` text NOT NULL,
  `donate_address1` varchar(100) NOT NULL,
  `donate_address2` varchar(100) NOT NULL,
  `donate_address3` varchar(100) NOT NULL,
  `donate_address4` varchar(100) NOT NULL,
  `donate_note` text NOT NULL,
  `donate_para2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_donate`
--

INSERT INTO `tbl_donate` (`donate_id`, `donate_para1`, `donate_address1`, `donate_address2`, `donate_address3`, `donate_address4`, `donate_note`, `donate_para2`) VALUES
(1, '                        Since 1997 we have had a tremendous amount of support by donations. If you would like to be included please send a cheque or money order to:\r\n              ', 'Marine Heritage Society', '86 Saugeen St.', 'Southhampton, ON, Canada', 'N0H 2L0', '                             please specify your donation preference: Chantry Island and/or New Tour Boat              ', '                        We are currently engaged in fundraising to support our new boat, dock improvements, and Marine Heritage Projects. We will send a tax receipt for all donations $20 and more.          ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `gallery_id` tinyint(3) UNSIGNED NOT NULL,
  `gallery_thumb` varchar(200) NOT NULL DEFAULT 'nothumb.jpg',
  `gallery_image` varchar(200) NOT NULL DEFAULT 'noimage.jpg',
  `gallery_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`gallery_id`, `gallery_thumb`, `gallery_image`, `gallery_desc`) VALUES
(1, 'thumb_chantry1.jpg', 'chantry1.jpg', 'An aerial view of Chantry Island'),
(2, '016_thumb.jpg', '016.jpg', 'A white heron guarding her nest in a tree on the island'),
(3, 'thumb_chantry3.jpg', 'chantry3.jpg', 'A post card of Chantry Island'),
(4, 'thumb_chantry4.jpg', 'chantry4.jpg', 'Bird\'s eye view of the Chantry Island Lighthouse'),
(5, 'thumb_chantry5.jpg', 'chantry5.jpg', 'A Southhampton, Ontario post card with a view of Chantry Island '),
(6, 'thumb_chantry8.jpg', 'chantry8.jpg', 'The sun setting over the Chantry Island Lighthouse in the summer'),
(7, 'thumb_chantry10.jpg', 'chantry10.jpg', 'An inside look at the Keeper\'s Cottage living area, where the Keeper would eat their meals'),
(8, 'thumb_chantry21.jpg', 'chantry21.jpg', 'An inner view of the Keeper\'s chambers'),
(9, 'thumb_009_thumb.jpg', '009_thumb.jpg', 'An Orange Sky over Chantry Island');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_index`
--

CREATE TABLE `tbl_index` (
  `index_id` tinyint(4) NOT NULL,
  `index_para1` text NOT NULL,
  `index_video` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_index`
--

INSERT INTO `tbl_index` (`index_id`, `index_para1`, `index_video`) VALUES
(1, '                                                          The Marine Heritage Society is a not-for-profit group of volunteers dedicated to thepreservation and enhancement of our community\'s marine history. The goal of the Society is to identify, preserve and restore material items of marine historical significance and to raise sufficient funds to support these endeavors. Among other projects, the Society manages the Chantry Island Light Station under agreements and restrictions from the Canadian Coast Guard and the Canadian Wildlife Service.', 'Chantry_Island.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tours`
--

CREATE TABLE `tbl_tours` (
  `tours_id` int(10) UNSIGNED NOT NULL,
  `tours_booking_para1` text NOT NULL,
  `tours_booking_phone` varchar(50) NOT NULL,
  `tours_booking_cost` text NOT NULL,
  `tours_booking_note` text NOT NULL,
  `tours_booking_image` varchar(100) NOT NULL DEFAULT 'noimage.jpg',
  `tours_details_image` varchar(100) NOT NULL DEFAULT 'noimage.jpg',
  `tours_details_para1` text NOT NULL,
  `tours_details_para2` text NOT NULL,
  `tours_details_para3` text NOT NULL,
  `tours_details_note` text NOT NULL,
  `tours_where_para1` text NOT NULL,
  `tours_dates_para1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_tours`
--

INSERT INTO `tbl_tours` (`tours_id`, `tours_booking_para1`, `tours_booking_phone`, `tours_booking_cost`, `tours_booking_note`, `tours_booking_image`, `tours_details_image`, `tours_details_para1`, `tours_details_para2`, `tours_details_para3`, `tours_details_note`, `tours_where_para1`, `tours_dates_para1`) VALUES
(1, '                                                                                           We offer tours throughout the summer season from late May to mid-September.\r\nDuring June and July, we offer the tour daily, check below for the exact schedule. Note, it does change on a yearly basis. Call ahead to ensure your place on the boat.                                                                                          ', '                    519-797-5672                ', '                                                                                                                                              $30.00 per person (includes HST). Special group rates also available. MasterCard, Visa, Debit accepted.                                                                                             ', '                                                                                                                                              The 2 hour tour must be pre-booked and prepaid. There are 9 seats on the boat. For refunds, cancellations must be received 24 hours before the scheduled departure. Chantry Island is a Federal Migratory Bird Sanctuary and No Pets allowed on the island. Cancellation can be caused by weather conditions but light rain is fine.                                                                                     ', 'lighthouse.jpg', 'tour_boat.png', '                                                                                                                                  As you take the 15 minute boat ride to the island you will enjoy the outstanding views of the sandy beach shoreline and the deep blue waters of Lake Huron. During your two hour guided visit on Chantry Island, you have the opportunity to climb to the top of the Imperial Lighthouse for extraordinary views of the island.                                                                     ', '                                                                                                                                  Stroll back in time while visiting the Light Keeper\'s Cottage as it existed in the late 1800’s,decorated with period furnishings from private donors and the Bruce County Museum and Cultural Centre.\r\nYou will also see the surrounding gardens and many species of birds.                                                           ', '                                                                                                                                  The tour is much like a medium hike and requires a degree of agility and fitness. You can enjoy the tour without climbing the 106 steps in the Lighthouse tower. However, when you do reach the light room, you will always remember the view.                                                                                        ', '                                                                                                                          For safety, children must be a minimum of 4 feet tall and must be accompanied by an Adult. Footwear suitable for hiking is mandatory. For safety reasons, Flip-Flops are not allowed.                                                                                             ', '                                                                                                                          Come to the Chantry Island Tour Base and Gift Shop located at the south side of the Saugeen River at the harbour in Southampton (See Maps) and arrive 15 minutes ahead of your scheduled tour. Check in and receive your ticket. You will be directed to the dock for the Peerless II.                                                                         ', 'During May and June, the Chantry Island tour base is open on weekends from 12:00pm to 5:30pm. From July until September 4th, the tour base is open every day from 9:00 am to 5:30pm.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tours_dates`
--

CREATE TABLE `tbl_tours_dates` (
  `dates_id` int(10) UNSIGNED NOT NULL,
  `dates_month` varchar(50) NOT NULL,
  `dates_day` varchar(50) NOT NULL,
  `dates_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_tours_dates`
--

INSERT INTO `tbl_tours_dates` (`dates_id`, `dates_month`, `dates_day`, `dates_time`) VALUES
(1, 'May', '05/27', '1:00PM & 3:00PM'),
(2, 'May', '05/28', '1:00PM & 3:00PM'),
(3, 'June', '06/03', '1:00PM & 3:00PM'),
(4, 'June', '06/04', '1:00PM & 3:00PM'),
(5, 'June', '06/10', '1:00PM & 3:00PM'),
(6, 'June', '06/11', '1:00PM & 3:00PM'),
(7, 'June', '06/17', '1:00PM & 3:00PM'),
(8, 'June', '06/18', '1:00PM & 3:00PM'),
(9, 'June', '06/24', '1:00PM & 3:00PM'),
(10, 'June', '06/25', '1:00PM & 3:00PM'),
(11, 'July', 'Every Monday - Friday', '1:00PM & 3:00PM'),
(12, 'July', 'Every Saturday - Sunday', '9:30AM & 1:00PM & 3:00PM'),
(13, 'August', 'Everyday ', '9:30AM & 1:00PM & 3:00PM'),
(14, 'September', '09/01', '1:00PM & 3:00PM'),
(15, 'September', '09/02', '1:00PM & 3:00PM'),
(16, 'September', '09/03', '1:00PM & 3:00PM'),
(17, 'September', '09/04', '1:00PM & 3:00PM');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` smallint(5) UNSIGNED NOT NULL,
  `user_firstname` varchar(50) NOT NULL,
  `user_lastname` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `user_level` varchar(25) NOT NULL,
  `user_ip` varchar(100) NOT NULL,
  `user_lastlogin` varchar(100) NOT NULL,
  `user_failedattempts` int(100) NOT NULL,
  `user_datecreated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_blocked` varchar(10) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_firstname`, `user_lastname`, `user_email`, `user_name`, `user_pass`, `user_level`, `user_ip`, `user_lastlogin`, `user_failedattempts`, `user_datecreated`, `user_blocked`) VALUES
(1, 'Admin', 'Admin', 'carly.marsh@hotmail.com', 'admin123', 'REhWeTFqc2g4MWl6UHJNNWoyNFVTQT09', '1', '::1', '2017-04-07 12:15:26', 1, '0000-00-00 00:00:00', 'no'),
(2, 'Jane', 'Doe', 'janedoe@live.ca', 'janedoe', 'LytFRXNvdEZBRDhrVGM2cjMwMHZtUT09', '2', '::1', '2017-03-13 21:37:21', 0, '2017-03-13 21:35:52', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `tbl_community`
--
ALTER TABLE `tbl_community`
  ADD PRIMARY KEY (`comm_id`);

--
-- Indexes for table `tbl_community_events`
--
ALTER TABLE `tbl_community_events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `tbl_community_partners`
--
ALTER TABLE `tbl_community_partners`
  ADD PRIMARY KEY (`partners_id`);

--
-- Indexes for table `tbl_community_volunteers`
--
ALTER TABLE `tbl_community_volunteers`
  ADD PRIMARY KEY (`vol_id`);

--
-- Indexes for table `tbl_community_volunteers2`
--
ALTER TABLE `tbl_community_volunteers2`
  ADD PRIMARY KEY (`vol2_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tbl_donate`
--
ALTER TABLE `tbl_donate`
  ADD PRIMARY KEY (`donate_id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `tbl_index`
--
ALTER TABLE `tbl_index`
  ADD PRIMARY KEY (`index_id`);

--
-- Indexes for table `tbl_tours`
--
ALTER TABLE `tbl_tours`
  ADD PRIMARY KEY (`tours_id`);

--
-- Indexes for table `tbl_tours_dates`
--
ALTER TABLE `tbl_tours_dates`
  ADD PRIMARY KEY (`dates_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `about_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_community`
--
ALTER TABLE `tbl_community`
  MODIFY `comm_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_community_events`
--
ALTER TABLE `tbl_community_events`
  MODIFY `event_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_community_partners`
--
ALTER TABLE `tbl_community_partners`
  MODIFY `partners_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_community_volunteers`
--
ALTER TABLE `tbl_community_volunteers`
  MODIFY `vol_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_community_volunteers2`
--
ALTER TABLE `tbl_community_volunteers2`
  MODIFY `vol2_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `contact_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_donate`
--
ALTER TABLE `tbl_donate`
  MODIFY `donate_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `gallery_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_index`
--
ALTER TABLE `tbl_index`
  MODIFY `index_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_tours`
--
ALTER TABLE `tbl_tours`
  MODIFY `tours_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_tours_dates`
--
ALTER TABLE `tbl_tours_dates`
  MODIFY `dates_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
