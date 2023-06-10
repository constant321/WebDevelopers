-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2022 at 07:07 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `name`, `description`, `image`) VALUES
(2, 'The Provision of PPE', 'Training and the setting of rules are only one fact of a business’ health and safety front; businesses are also required to provide adequate personal protective equipment (or PPE) for tasks that might require them. This is most common in the construction industry; safety boots should be provided in order to keep the sensitive parts of workers’ feet safe from heavy machinery and crushing hazards, while hard-hats are required for protection from falling objects.\r\n\r\nHowever, there are other ways in which businesses may need to protect their staff. Those frequently working in dark conditions should be provided with high-visibility vests or jackets to ensure their presence is made known to others – and, more recently, businesses operating during the coronavirus pandemic were required to provide masks for their workforce, in order to protect them from potential airborne pathogens.', 'tech.jpeg\r\n'),
(3, 'Tesla Model Pi Smartphone Will Be Crypto Read', 'Reports have it that Elon Musk’s electric vehicle and clean energy company – Tesla will “officially” launch the Model Pi phone sometime in the near future. Although it is not clear exactly when the company wishes to launch the Pi smartphones, but rumour has it that Pi smartphones by Tesla are in the works. According to news sources, each day in the month of September didn’t pass without people ask search engines the question “Is Tesla releasing a phone?” Well the answer is yes, we will see Elon Musk’s smartphone join the competition in the mobile device market sooner than you think.', ''),
(4, 'Tesla And SpaceX Founder Elon Musk Is Now Ric', 'On Thursday, Tesla experienced a 6% rise in shares that also increased the stock holding and stock options of the electric vehicle and clean energy company by $10 billion, which further upsurges Musk’s net worth to roughly 191 billion dollars.\r\n\r\nIn contrast to Elon musk’s productivity, Jeff Bezos is the only competition that threatens Elon musk’s recent financial accomplishment – his shares experienced a surge less than 2% which adds a $3 billion that further increases Amazon net worth to 187 billion dollars.\r\n\r\n\r\n \r\nBloomberg ratified Musk’s recent financial title to be ahead of Jeff Bezos which was confirmed after the end of the trading day. Prior to the end to the trading day, the $3 billion gained was not added to Amazon net worth at the time which worth up to $184 billion was still ahead of Tesla according to Bloomberg’s billionaire tracker in real-time.', ''),
(5, 'World Richest Man, Elon Musk To Quit His Jobs', 'Musk who doubles as CEO of SpaceX and Tesla, Inc., is also the founder of The Boring Company; and co-founder of Neuralink and OpenAI.\r\n\r\nHe is seen as one of the most powerful men in the world, a mover and shaker but the Tesla Inc henchman got tongues wagging recently when he announced that he is considering leaving his numerous jobs to become an influencer.\r\n\r\nIn a tweet last Thursday, Musk said:\r\n\r\n“Thinking of quitting my jobs & becoming an influencer full-time wdyt. “It would be nice to have a bit more free time on my hands as opposed to just working day and night, from when I wake up to when I go to sleep 7 days a week. Pretty intense,” he stressed.\r\n\r\nThe South-African billionaire, the founder of rocket company, Space X, who also leads brain-chip start-up Neuralink and infrastructure firm The Boring Company, had in January said in a conference call that he expects to be the CEO of Tesla for “several years.”', ''),
(6, 'The Huffington Post', 'The history of political blogging might usefully be divided into the periods pre- and post-Huffington. Before the millionaire socialite Arianna Huffington decided to get in on the act, bloggers operated in a spirit of underdog solidarity. They hated the mainstream media - and the feeling was mutual.\r\n\r\nBloggers saw themselves as gadflies, pricking the arrogance of established elites from their home computers, in their pyjamas, late into the night. So when, in 2005, Huffington decided to mobilise her fortune and media connections to create, from scratch, a flagship liberal blog she was roundly derided. Who, spluttered the original bloggerati, did she think she was?\r\n\r\nBut the pyjama purists were confounded. Ariannas money talked just as loudly online as off, and the Huffington Post quickly became one of the most influential and popular journals on the web. It recruited professional columnists and celebrity bloggers.', ''),
(7, 'Techcrunch', 'Techcrunch began in 2005 as a blog about dotcom start-ups in Silicon Valley, but has quickly become one of the most influential news websites across the entire technology industry. Founder Michael Arrington had lived through the internet goldrush as a lawyer and entrepreneur before deciding that writing about new companies was more of an opportunity than starting them himself. His site is now ranked the third-most popular blog in the world by search engine Technorati, spawning a mini-empire of websites and conferences as a result. Business Week named Arrington one of the 25 most influential people on the web, and Techcrunch has even scored interviews with Barack Obama and John McCain.\r\n\r\nWith a horde of hungry geeks and big money investors online, Techcrunch is the largest of a wave of technology-focused blog publishers to tap into the market - GigaOm, PaidContent and Mashable among them - but often proves more contentious than its rivals, thanks to Arringtons aggressive relationships ', ''),
(8, 'The Drudge Report', 'The Report started life as an email gossip sheet, and then became a trashy webzine with negligible traffic. But thanks to the decision in 1998 to run a scurrilous rumour – untouched by mainstream media – about Bill Clinton and a White House intern named Monica Lewinsky, it became a national phenomenon. Recent scoops include Barack Obama dressed in tribal garb and the fact Prince Harry was serving in Afghanistan. Drudge is scorned by journalists and serious bloggers for his tabloid sensibilities, but his place in the media history books is guaranteed. And much though they hate him, the hacks all still check his front page – just in case he gets another president-nobbling scoop.', ''),
(9, 'Elon Musk Is Moving Tesla HQ From Palo Alto, ', 'The Tesla boss also added that “It’s tough for people to afford houses, and people have to come in from far away. There’s a limit to how big you can scale in the Bay Area”.\r\n\r\nThe California plant will continue to increase its production even though it will no longer be Tesla’s headquarter, as it will take quite some time for the ongoing Austin plant to reach its full production level after being completed.\r\n\r\n\r\n \r\nAs explained by founder Elon Musk, while building a Tesla plant takes less time, it takes more time for the plant to reach its full level of production. It is expected that Tesla’s Austin plant will follow in the shadows of its Shanghai counterpart which was completed in eleven months and took a whole year to reach its highest level of production.', ''),
(10, 'Tesla Invests $1.5b in Bitcoin, To Start Acce', 'By investing in Bitcoin, Elon Musk has put his money where his mouth is and could see the price of Bitcoin rise even further as this gives credence to other investors who have either invested modestly or are torn between investing. One just wonders how much of Elon Musk’s money is in Dogecoin, his  favourite cryptocurrency. Elon Musk is currently the richest man in the world with a net worth of about $188b, $4b richer than outgoing Amazon CEO, Jeff Bezos. \r\n\r\nThe decision by the biggest electric car maker in the world to invest $1.5b in Bitcoin and start accepting it as a form of payment could drive not just the price of the cryptocurrency but see more companies in the auto industry and otherwise to start investing in it and start accepting it as a mode of payment. This makes Tesla probably the first major manufacturer to start accepting Bitcoin.', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(45) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(45) NOT NULL,
  `project_description` varchar(1000) NOT NULL,
  `project_rating` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `project_name`, `project_description`, `project_rating`) VALUES
(1, 'NETSOL', 'Website for a Reputed company.', '5 Star Rating'),
(2, 'ARBISOFT', 'Website for a Reputed company.', '4.6 Star Rating'),
(3, 'MICROSOFT', 'Website for a Reputed company.', '5 Star Rating'),
(4, 'HYBERNATE', 'Website for a Reputed company.', '4.3 Star Rating'),
(5, 'SECTEM TECHNOLOGIES', 'Website for a Reputed company.', '4.9 Star Rating'),
(6, 'METAPI', 'Website for a Reputed company.', '5 Star Rating'),
(7, 'XARAMAKERS', 'Website for a Reputed company.', '3 Star Rating'),
(8, 'GLOBALVILLAGE', 'Website for a Reputed company.', '4.5 Star Rating'),
(9, 'WAPPER', 'Website for a Reputed company.', '4.7 Star Rating'),
(10, 'METAVERSE', 'Website and application for a Reputed company.', '4 Star Rating');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
