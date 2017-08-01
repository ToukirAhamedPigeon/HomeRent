--
-- Database: `homerent`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Id` int(20) NOT NULL,
  `UserName` varchar(200) DEFAULT NULL,
  `PropertyName` varchar(200) DEFAULT NULL,
  `DateTime` varchar(200) DEFAULT NULL,
  `Confirmation` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Id`, `UserName`, `PropertyName`, `DateTime`, `Confirmation`) VALUES
(31, 'toukirahamedpigeon', 'banani1', '2017/07/03/ 19:20:09', 'Confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `lookup`
--

CREATE TABLE `lookup` (
  `Id` int(11) NOT NULL,
  `DataKey` varchar(50) DEFAULT NULL,
  `DisplayText` varchar(50) DEFAULT NULL,
  `DataOrder` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lookup`
--

INSERT INTO `lookup` (`Id`, `DataKey`, `DisplayText`, `DataOrder`) VALUES
(2, 'Title', 'Mr.', 1),
(3, 'Title', 'Mrs.', 2),
(4, 'Title', 'Miss.', 3),
(5, 'Devision', 'Dhaka', 1),
(8, 'Devision', 'Rajshahi', 2),
(9, 'Devision', 'Khulna', 3),
(10, 'Devision', 'Rangpur', 4),
(11, 'Devision', 'Chittagong', 5),
(12, 'Devision', 'Barisal', 6),
(13, 'Devision', 'Syllet', 7),
(14, 'District', 'Dhaka', 1),
(15, 'District', 'Bogra', 2),
(16, 'District', 'Noakhali', 3),
(17, 'District', 'Comilla', 4),
(18, 'District', 'Kishoreganj', 5),
(19, 'District', 'Faridpur', 6),
(20, 'District', 'Maymanshingh', 7),
(21, 'District', 'Feni', 8),
(22, 'District', 'Naogaon', 9),
(23, 'District', 'Tangail', 10),
(24, 'District', 'Sunamganj', 11),
(25, 'NorthDhaka', 'Khilgaon', 1),
(26, 'NorthDhaka', 'Rampura', 2),
(27, 'NorthDhaka', 'Gulshan-1', 3),
(28, 'NorthDhaka', 'Gulshan-2', 4),
(29, 'NorthDhaka', 'Banani', 5),
(30, 'NorthDhaka', 'Uttara', 6),
(31, 'SouthDhaka', 'Nawabpur', 1),
(32, 'SouthDhaka', 'Wari', 2),
(33, 'SouthDhaka', 'Paltan', 3),
(34, 'SouthDhaka', 'Motijheel', 4),
(35, 'SouthDhaka', 'Kakrail', 5),
(36, 'SouthDhaka', 'Malibag', 6),
(37, 'Thana', 'Khilkhet', 1),
(38, 'Thana', 'Uttara', 2),
(39, 'Thana', 'Adamdighi', 3),
(40, 'Thana', 'Banani', 4),
(41, 'Thana', 'Joypurhat', 5),
(42, 'Thana', 'Paltan', 6),
(43, 'Thana', 'Kakrail', 7),
(44, 'Thana', 'Motijheel', 8),
(45, 'Thana', 'Kishoreganj', 9),
(46, 'Thana', 'Bogra', 10),
(47, 'Thana', 'Naogaon', 11),
(48, 'CustomerType', 'Family', 1),
(49, 'CustomerType', 'Bachelor', 2),
(50, 'CustomerType', 'Both Family & Bachelor', 3),
(51, 'RentFor', 'Resident', 1),
(52, 'RentFor', 'Office', 2),
(53, 'RentFor', 'Shop', 3),
(54, 'PropertyType', 'Flat', 1),
(55, 'PropertyType', 'Room', 2),
(56, 'PropertyType', 'Seat', 3),
(58, 'Month', 'January', 1),
(59, 'Month', 'February', 2),
(60, 'Month', 'March', 3),
(61, 'Month', 'April', 4),
(62, 'Month', 'May', 5),
(63, 'Month', 'June', 6),
(64, 'Month', 'July', 7),
(65, 'Month', 'August', 8),
(66, 'Month', 'September', 9),
(67, 'Month', 'October', 10),
(68, 'Month', 'November', 11),
(69, 'Month', 'December', 12);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `Id` int(11) NOT NULL,
  `UserName` varchar(200) DEFAULT NULL,
  `Content` varchar(400) DEFAULT NULL,
  `DateTime` varchar(200) DEFAULT NULL,
  `Status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`Id`, `UserName`, `Content`, `DateTime`, `Status`) VALUES
(21, 'toukirahamedpigeon', 'Your booking request of banani1 has been Confirmed at 2017/07/03 19:20:48. Thank You.', '2017/07/03 19:20:48', 'Read');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `Id` int(11) NOT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `Rent` varchar(200) DEFAULT NULL,
  `Advance` varchar(20) DEFAULT NULL,
  `RentFor` varchar(20) DEFAULT NULL,
  `StartingMonth` varchar(50) DEFAULT NULL,
  `Street` varchar(200) DEFAULT NULL,
  `Thana` varchar(50) DEFAULT NULL,
  `District` varchar(50) DEFAULT NULL,
  `Division` varchar(50) DEFAULT NULL,
  `ZipCode` varchar(50) DEFAULT NULL,
  `Floor` varchar(50) DEFAULT NULL,
  `BuildUpArea` varchar(50) DEFAULT NULL,
  `Description` varchar(1000) DEFAULT NULL,
  `BorderType` varchar(50) DEFAULT NULL,
  `Include` varchar(200) DEFAULT NULL,
  `MaxBorder` varchar(10) DEFAULT NULL,
  `PropertyType` varchar(50) DEFAULT NULL,
  `Status` varchar(20) DEFAULT NULL,
  `Admin` varchar(20) DEFAULT NULL,
  `PostDateTime` varchar(50) DEFAULT NULL,
  `CoverPhoto` varchar(200) DEFAULT NULL,
  `InDhaka` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`Id`, `Name`, `Rent`, `Advance`, `RentFor`, `StartingMonth`, `Street`, `Thana`, `District`, `Division`, `ZipCode`, `Floor`, `BuildUpArea`, `Description`, `BorderType`, `Include`, `MaxBorder`, `PropertyType`, `Status`, `Admin`, `PostDateTime`, `CoverPhoto`, `InDhaka`) VALUES
(28, 'uttara1', '30000TK', '30000TK', 'Office', 'August,2017', 'asdf Road', 'Uttara', 'Dhaka', 'Dhaka', '1233', '4', '1234sqft', 'nice home ', 'Both Family & Bachelor', '', '3', 'Room', 'Open', 'Pigeon', '2017/07/03', './content/img/PropertyPic/uttara120170703191703495.jpg', 'Uttara'),
(20, 'khilgaon1', '50000TK', '50000TK', 'Resident', 'July,2017', 'abcd road', 'Khilkhet', 'Dhaka', 'Dhaka', '1229', '2', '2400sqft', 'Good home', 'Family', '', '5', 'Flat', 'Open', 'Pigeon', '2017/07/03', './content/img/PropertyPic/khilgaon120170703185138351.jpg', 'Khilgaon'),
(21, 'khilgaon2', '50000TK', '50000TK', 'Resident', 'June,2017', 'asdf Road', 'Khilkhet', 'Dhaka', 'Dhaka', '1226', '2', '2345sqft', 'good home', 'Family', 'Gas', '4', 'Room', 'Open', 'Pigeon', '2017/07/03', './content/img/PropertyPic/khilgaon220170703185420896.jpg', 'Khilgaon'),
(22, 'rampura1', '300000TK', '300000TK', 'Resident', 'July,2017', 'asfds Road', 'Uttara', 'Dhaka', 'Dhaka', '1223', '3', '1232sqft', 'good one', 'Family', 'water', '3', 'Room', 'Open', 'Pigeon', '2017/07/03', './content/img/PropertyPic/rampura120170703185653265.jpg', 'Rampura'),
(23, 'rampura2', '50000TK', '50000TK', 'Resident', 'June,2017', 'asdsaf road', 'Uttara', 'Dhaka', 'Dhaka', '1234', '2', '1234sqft', 'Nice One', 'Both Family & Bachelor', 'Gas', '4', 'Room', 'Open', 'Pigeon', '2017/07/03', './content/img/PropertyPic/rampura220170703185931377.jpg', 'Rampura'),
(24, 'gulshan1', '300000TK', '300000TK', 'Resident', 'August,2017', 'qqwewer Road', 'Khilkhet', 'Dhaka', 'Dhaka', '1223', '4', '2400sqft', 'Great house', 'Family', 'All', '4', 'Room', 'Open', 'Pigeon', '2017/07/03', './content/img/PropertyPic/gulshan120170703190328538.jpg', 'Gulshan-1'),
(25, 'gulshan2', '40000TK', '40000TK', 'Resident', 'July,2017', 'asdsf Road', 'Uttara', 'Dhaka', 'Dhaka', '1234', '4', '1234sqft', 'good one', 'Family', 'Gas', '4', 'Room', 'Open', 'Pigeon', '2017/07/03', './content/img/PropertyPic/gulshan220170703190657713.jpg', 'Gulshan-2'),
(26, 'banani1', '30000TK', '30000TK', 'Resident', 'June,2017', 'sdfaf Road', 'Banani', 'Dhaka', 'Dhaka', '1234', '4', '1234sqft', 'great home', 'Family', 'Gas', '4', 'Flat', 'Close', 'Pigeon', '2017/07/03', './content/img/PropertyPic/banani120170703190940611.jpg', 'Banani'),
(27, 'banani2', '20000TK', '20000TK', 'Resident', 'July,2017', 'asdf Road', 'Banani', 'Dhaka', 'Dhaka', '1234', '4', '2344sqft', 'beautiful one ', 'Bachelor', 'Gas', '6', 'Room', 'Open', 'Pigeon', '2017/07/03', './content/img/PropertyPic/banani220170703191158543.jpg', 'Banani');

-- --------------------------------------------------------

--
-- Table structure for table `propertycontent`
--

CREATE TABLE `propertycontent` (
  `Id` int(11) NOT NULL,
  `PropertyName` varchar(20) DEFAULT NULL,
  `ContentType` varchar(50) DEFAULT NULL,
  `ImgUrl` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `propertycontent`
--

INSERT INTO `propertycontent` (`Id`, `PropertyName`, `ContentType`, `ImgUrl`) VALUES
(79, 'gulshan1', 'Other', './content/img/PropertyPic/gulshan120170703190328330.jpg'),
(78, 'gulshan1', 'Other', './content/img/PropertyPic/gulshan120170703190328915.jpg'),
(77, 'gulshan1', 'Other', './content/img/PropertyPic/gulshan120170703190328207.jpg'),
(76, 'gulshan1', 'Cover', './content/img/PropertyPic/gulshan120170703190328538.jpg'),
(75, 'rampura2', 'Other', './content/img/PropertyPic/rampura220170703185931526.jpg'),
(57, 'khilgaon1', 'Other', './content/img/PropertyPic/khilgaon120170703185138286.jpg'),
(58, 'khilgaon1', 'Other', './content/img/PropertyPic/khilgaon120170703185138366.jpg'),
(59, 'khilgaon1', 'Other', './content/img/PropertyPic/khilgaon120170703185138450.jpg'),
(60, 'khilgaon1', 'Other', './content/img/PropertyPic/khilgaon120170703185138527.jpg'),
(61, 'khilgaon2', 'Cover', './content/img/PropertyPic/khilgaon220170703185420896.jpg'),
(62, 'khilgaon2', 'Other', './content/img/PropertyPic/khilgaon220170703185420860.jpg'),
(63, 'khilgaon2', 'Other', './content/img/PropertyPic/khilgaon220170703185420811.jpg'),
(64, 'khilgaon2', 'Other', './content/img/PropertyPic/khilgaon220170703185420991.jpg'),
(65, 'khilgaon2', 'Other', './content/img/PropertyPic/khilgaon220170703185420666.jpg'),
(66, 'rampura1', 'Cover', './content/img/PropertyPic/rampura120170703185653265.jpg'),
(67, 'rampura1', 'Other', './content/img/PropertyPic/rampura120170703185653735.jpg'),
(68, 'rampura1', 'Other', './content/img/PropertyPic/rampura120170703185653650.jpg'),
(69, 'rampura1', 'Other', './content/img/PropertyPic/rampura120170703185653458.jpg'),
(70, 'rampura1', 'Other', './content/img/PropertyPic/rampura120170703185653242.jpg'),
(71, 'rampura2', 'Cover', './content/img/PropertyPic/rampura220170703185931377.jpg'),
(72, 'rampura2', 'Other', './content/img/PropertyPic/rampura220170703185931460.jpg'),
(73, 'rampura2', 'Other', './content/img/PropertyPic/rampura220170703185931434.jpg'),
(74, 'rampura2', 'Other', './content/img/PropertyPic/rampura220170703185931723.jpg'),
(56, 'khilgaon1', 'Cover', './content/img/PropertyPic/khilgaon120170703185138351.jpg'),
(80, 'gulshan1', 'Other', './content/img/PropertyPic/gulshan120170703190328713.jpg'),
(81, 'gulshan2', 'Cover', './content/img/PropertyPic/gulshan220170703190657713.jpg'),
(82, 'gulshan2', 'Other', './content/img/PropertyPic/gulshan220170703190657328.jpg'),
(83, 'gulshan2', 'Other', './content/img/PropertyPic/gulshan220170703190657672.jpg'),
(84, 'gulshan2', 'Other', './content/img/PropertyPic/gulshan220170703190657395.jpg'),
(85, 'gulshan2', 'Other', './content/img/PropertyPic/gulshan220170703190657285.jpg'),
(86, 'banani1', 'Cover', './content/img/PropertyPic/banani120170703190940611.jpg'),
(87, 'banani1', 'Other', './content/img/PropertyPic/banani120170703190940509.jpg'),
(88, 'banani1', 'Other', './content/img/PropertyPic/banani120170703190940925.jpg'),
(89, 'banani1', 'Other', './content/img/PropertyPic/banani120170703190940934.jpg'),
(90, 'banani1', 'Other', './content/img/PropertyPic/banani120170703190940378.jpg'),
(91, 'banani2', 'Cover', './content/img/PropertyPic/banani220170703191158543.jpg'),
(92, 'banani2', 'Other', './content/img/PropertyPic/banani220170703191158205.jpg'),
(93, 'banani2', 'Other', './content/img/PropertyPic/banani220170703191158640.jpg'),
(94, 'banani2', 'Other', './content/img/PropertyPic/banani220170703191158375.jpg'),
(95, 'banani2', 'Other', './content/img/PropertyPic/banani220170703191158477.jpg'),
(96, 'uttara1', 'Cover', './content/img/PropertyPic/uttara120170703191703495.jpg'),
(97, 'uttara1', 'Other', './content/img/PropertyPic/uttara120170703191703437.jpg'),
(98, 'uttara1', 'Other', './content/img/PropertyPic/uttara120170703191703700.jpg'),
(99, 'uttara1', 'Other', './content/img/PropertyPic/uttara120170703191703152.jpg'),
(100, 'uttara1', 'Other', './content/img/PropertyPic/uttara120170703191703324.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `Id` int(11) NOT NULL,
  `UserName` varchar(200) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Type` varchar(20) DEFAULT NULL,
  `Title` varchar(10) DEFAULT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `ContactNumber` varchar(20) DEFAULT NULL,
  `Street` varchar(200) DEFAULT NULL,
  `Thana` varchar(100) DEFAULT NULL,
  `District` varchar(50) DEFAULT NULL,
  `Division` varchar(50) DEFAULT NULL,
  `Propic` varchar(200) DEFAULT NULL,
  `NID` varchar(50) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`Id`, `UserName`, `Password`, `Type`, `Title`, `FirstName`, `LastName`, `ContactNumber`, `Street`, `Thana`, `District`, `Division`, `Propic`, `NID`, `Email`) VALUES
(16, 'toukirahamedpigeon', 'Toukir12@', 'Admin', 'Mr.', 'Toukir Ahamed', 'Pigeon', '01964301868', 'Road:16, Nikunja-2', 'Khilkhet', 'Dhaka', 'Dhaka', './content/img/ProPic/toukirahamedpigeon20170624002555612.jpg', '1234567', 'toukir.ahamed.pigeon@hotmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `lookup`
--
ALTER TABLE `lookup`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `propertycontent`
--
ALTER TABLE `propertycontent`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `lookup`
--
ALTER TABLE `lookup`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `propertycontent`
--
ALTER TABLE `propertycontent`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
