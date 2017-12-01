CREATE DATABASE  IF NOT EXISTS `id3746087_bookstore` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `id3746087_bookstore`;
-- MySQL dump 10.13  Distrib 5.7.19, for Linux (x86_64)
--
-- Host: localhost    Database: bookstore
-- ------------------------------------------------------
-- Server version	5.7.19-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `books` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `title` char(150) CHARACTER SET utf8 NOT NULL,
  `author` varchar(256) NOT NULL,
  `price` float NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` varchar(30) NOT NULL,
  `category_id` int(4) NOT NULL,
  `stock` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` VALUES (1,'Attila - The Judgement','William Napier',26.85,'The dawn of the 5th century AD, and the Roman Empire totters on the edge of the abyss. Already divided into two, the Imperium is looking dangerously vulnerable to her European rivals. The huge barbarian tribes of the Vandals and Visigoths sense that their time is upon them.','1',9,2),(2,'Imperator - The Gods Of War','Conn Iggulden',31.75,'Fresh from triumph in Britain and Gaul, Caesar is marching on Rome with his legions of hardened veterans. To unseat Pompey, now dictator of the empire, he must make the terrible decision to wage war on his own people.','2',9,13),(3,'Castles - Their History and Evolution','Marc Morris',29.45,'Beginning with their introduction in the eleventh century, and ending with their widespread abandonment in the seventeenth, Marc Morris explores many of the countryï¿½s most famous castles, as well as some spectacular lesser-known examples.','3',9,18),(4,'Protestants The Faith That Made the Modern World','Alec Ryrie',24.69,'Protestant Christianity began with one stubborn monk in 1517. Now it covers the globe and includes almost a billion people. On the 500th anniversary of Luther’s theses, a global history of the revolutionary faith that shaped the modern world','4',9,8),(5,'Jefferson Architect of American Liberty','John B. Boles',36.84,'Not since Merrill Peterson\'s Thomas Jefferson and the New Nation has a scholar attempted to write a comprehensive biography of the most complex Founding Father. In Jefferson, John B. Boles plumbs every facet of Thomas Jefferson\'s life, all while situating him amid the sweeping upheaval of his times.','5',9,20),(6,'Havana - A Subtropical Delirium','Mark Kulansky',45.72,'Award-winning author Mark Kurlansky presents an insider\'s view of Havana: the elegant, tattered city he has come to know over more than thirty years. Part cultural history, part travelogue, with recipes, historic engravings, photographs, and Kurlansky\'s own pen-and-ink drawings throughout, Havana celebrates the city\'s singular music, literature, baseball, and food; its fiv','6',9,2),(7,'Ghosts - The Epic Hunt for the Lost Franklin Expedition','Paul Watson',36.25,'“Intriguing. . . . The notable originality of Ice Ghosts lies in the fact that it brings the story right up-to-date. . . . [Watson] provides sharp and entertaining portraits of the various Franklin obsessives whose experience and expertise fed into the 2008 initiative.” (Ian McGuire, author of The North Water, New York Times Book Review)','7',9,6),(8,'Phenomena The Secret History of the U.S.','Ann Marie',31.61,'The definitive history of the military\'s decades-long investigation into mental powers and phenomena, from the author of Pulitzer Prize finalist The Pentagon\'s Brain and international bestseller.','8',9,8),(9,'Incendiary The Psychiatrist of Criminal Profiling','Michael Cann',27.12,'Long before the specter of terrorism haunted the public imagination, a serial bomber stalked the streets of 1950s New York. The race to catch him would give birth to a new science called criminal profiling.','9',9,8),(10,'TigerFish - a Memoir','Hoang Chi',36.99,'A memoir of a South Vietnamese Colonel\'s daughter, chronicling the tumultuous years growing up in a war-torn country of Vietnam, and the abrupt and brutal regime change that forced her disruptive and disorienting coming of age between two vastly different cultures.','10',9,10),(11,'The Animals Agenda: Freedom & Compassion','Marc Bekoff &  Jessica Pierce',36.74,'A compelling argument that the time has come to use what we know about the fascinating and diverse inner lives of other animals on their behalf','11',1,12),(12,'Scienceblind: Why Our Intuitive Theories About the World Are So Wrong','Andrew Shtulman',34.83,'Humans are born to create theories about the world unfortunately, they are usually wrong, and keep us from understanding the world as it really is','12',1,18),(13,'Adapt: How Humans Are Tapping into Nature\'s Secrets to Design and Build a Better Future','Amina Khan',37.5,'Amina Khan believes that nature does it best. In Adapt, she presents fascinating examples of how nature effortlessly solves the problems that humans attempt to solve with decades worth of the latest and greatest technologies, time, and money. Humans are animals too, and animals are incredibly good at doing more with less.','13',1,7),(14,'DNA Is Not Destiny: The Remarkable, Completely Misunderstood Relationship between You and Your Genes','Steven J. Heine',35.32,'Well, now you can find out, and you most likely will. Scientists expect one billion people to have their genomes sequenced by 2025, and as the price drops it may even become a standard medical procedure. Yet cultural psychologist Steven Heine argues that the first thing weâ€™ll do upon receiving our DNA test results is to misinterpret them completely. Weâ€™ve become accustomed to breathless media coverage about newly discovered â€œcancerâ€ or â€œIQâ€ or â€œinfidelityâ€ genes, each one promising a deeper understanding of what makes us tick.','14',1,2),(15,'At the Bottom of the World','Bill Nye & Gregory Mone',38.61,'New York Times bestselling authors Bill Nye the Science Guy and Gregory Mone take middle-grade readers on a scientific adventure in the launch of an exciting new chapter book series, Jack and the Geniuses. The perfect combination to engage and entertain readers, the series features real-world science along with action and a mystery that will leave kids guessing until the end, making these books ideal for STEM education.','15',1,4),(16,'Flavor: The Science of Our Most Neglected Sense','Bob Holmes',36.56,'Can you describe how the flavor of halibut differs from that of red snapper? How the taste of a Fuji apple differs from a Spartan? For most of us, this is a difficult task: flavor remains a vague, undeveloped concept that we donâ€™t know enough about to describeâ€”or appreciateâ€”fully. In this delightful and compelling exploration of our most neglected sense, veteran science reporter Bob Holmes shows us just how much weâ€™re missing.','16',1,2),(17,'Black Hole Blues: And Other Songs From Outer Space','Janna Levin',37.69,'In this book, Janna Levin â€“ like many of the authors on this list, a writer trapped in a scientistâ€™s body â€“ tells the story of the Laser Interferometer Gravitational Wave Observatory (or Ligo) and the long journey that led to the detection of Einsteinâ€™s hitherto theoretical gravitational waves. Perhaps more than any author on this list, Levin is a master of storytelling: the programmeâ€™s origins, its purpose, its eccentric architects and its wider significance for humanity all feature in this book as themes, converging to form a novel-like narrative that keeps the reader hooked in awe page after page. Black Hole Blues is a captivating study of the process of scientific discovery.','17',1,3),(18,'The Gene: An Intimate History','Siddhartha Mukherjee',28.47,'Siddhartha Mukherjee is a physician, researcher, biologist, geneticist, oncologist, a few more -ists, and, importantly for us, an excellent writer. Six years ago he published a Pulitzer Prize-winning book on cancer â€“ The Emperor of all Maladies â€“ in which he strove to expel the mythology around cancer, to make it less the colossal affliction we imagine it to be and instead show it as something that can and likely will be overcome by scientists. For those who have read his previous book, the style in The Gene will seem familiar: Mukherjee is at once embedded with and estranged from his subject, carefully chronicling the story of genetics while including bits of his own personal history with hereditary illness, the \'intimate\' history suggested by the subtitle.','18',1,2),(19,'A Brief History of Everyone Who Ever Lived','Adam Rutherford',25.58,'One of the most extraordinary things about this book is its sheer breadth. Rutherford, a writer and geneticist who has written previously on the subject, weaves from our genes a fascinating tapestry of human history from its most primitive origins to its sophisticated present, and beyond. True to its title, Rutherfordâ€™s overview of genetics is brief: at 300 pages it is considerably shorter than Mukherjeeâ€™s, meaning that if youâ€™re after just a quick though comprehensive survey of genetics, this is the book for you. The writing is concise and often funny, and Rutherford never takes himself or his subject too seriously. (In the first chapter he refers to human penises as the â€œimmodest instruments of biological transitionâ€). It is one of those rare books that youâ€™ll finish thinking you havenâ€™t wasted a single second.','19',1,17),(20,'The Brain: The Story of You','Adam Rutherford',30.83,'Of his previous work â€“ which includes the best-selling Incognito â€“ Eagleman has been praised for making otherwise inaccessible topics (brain surgery and the like) accessible to lowly laymen like us. One of the charms of his latest book on the brain is Eaglemanâ€™s casual approach to his subject. Like a quirky tour guide in a gallery he leads us around the cranium explaining the brainâ€™s biological mechanisms, pondering the differences between the â€œbrainâ€ and â€œmindâ€ and discussing questions about reality and consciousness that make the reader suffer from spells of existential doubt â€“ well, we did, at least. Another of the bookâ€™s core attractions is its wealth of mini-facts. As Stephen Fry has commented, memorable facts pervade every chapter of this book, whether about the magnitude of our neural networks  or the power of conversation in warding off Alzheimerâ€™s. If you want to boost your understanding of the brain, read this book.','20',1,3),(21,'The Future Of The Brain: The Drawings of Santiago RamÃ³n y Cajal','Larry W Swanson',28.65,'Born in Madrid in 1852, Santiago RamÃ³n y Cajal was a pioneering Spanish neuroscientist who studied slices of brain under the microscope and drew â€“ this being a time before neuroimaging â€“ whatever he saw. This book collects hundreds of his mesmerising illustrations of neural cells and provides brief explanations of whatever we\'re looking at (which can be as bizarre as \"muscle cells from the leg of a scarab beetle\"). The book also includes an excellent biographical essay by Larry W Swanson, a neuroscientist at the University of Southern California, in which we learn much about RamÃ³n y Cajal\'s work, his character and his insatiable drive to discover the secrets of the brain. More than any book on this list, The Beautiful Brain shows us exactly what it looks like when science and art converge. ','21',1,3),(22,'Ice Cold Alice','C.P. Wilson',33.44,'A killer hunts abusive spouses, blogging about their sins post-kill. Soon the murders and the brazen journaling draws the attention of Police Scotland\'s CID.This killer works with surgical preparation, precision and skill, using a unique weapon of her own and never leaves a trace of evidence behind. \n','22',2,15),(23,'Under a Sardinian Sky','Sara Alexander',27.29,'Sometimes a family\'s deepest silences hide the most important secrets. For Mina, a London-based travel writer, the enigmatic silence surrounding her aunt Carmela has become a personal obsession. Carmela disappeared from her Italian hometown long ago and is mentioned only in fragments and whispers. Mina has resisted prying, respectful of her family\'s Sardinian reserve. But now, with her mother battling cancer, it\'s time to learn the truth. . \n','23',2,16),(24,'If We Were Villains','M.L. Rio',25.31,'Ten years ago: Oliver is one of seven young Shakespearean actors at Dellecher Classical Conservatory, a place of keen ambition and fierce competition. In this secluded world of firelight and leather-bound books, Oliver and his friends play the same roles onstage and off: hero, villain, tyrant, temptress, ingÃ©nue, extra. But in their fourth and final year, the balance of power begins to shift, good-natured rivalries turn ugly, and on opening night real violence invades the studentsâ€™ world of make believe. In the morning, the fourth-years find themselves facing their very own tragedy, and their greatest acting challenge yet: convincing the police, each other, and themselves that they are innocent. \r\n','24',2,12),(25,'What It Means When a Man Falls from the Sky','Lesley Nneka Arimah',28.37,'In \"Who Will Greet You at Home\", a National Magazine Award finalist for The New Yorker, a woman desperate for a child weaves one out of hair, with unsettling results. In \"Wild\", a disastrous night out shifts a teenager and her Nigerian cousin onto uneasy common ground. In \"The Future Looks Good,\" three generations of women are haunted by the ghosts of war, while in \"Light,\" a father struggles to protect and empower the daughter he loves. And in the title story, in a world ravaged by flood and riven by class, experts have discovered how to \"fix the equation of a person\" - with rippling, unforeseen repercussions.\n\n','25',2,14),(26,'The Stars Are Fire','Anita Shreve',31.58,'In October 1947, after a summer-long drought, fires break out all along the Maine coast from Bar Harbor to Kittery and are soon racing out of control from town to village. Five months pregnant, Grace Holland is left alone to protect her two toddlers when her husband, Gene, joins the volunteer firefighters. Along with her best friend, Rosie, and Rosie\'s two young children, Grace watches helplessly as their houses burn to the ground, the flames finally forcing them all into the ocean as a last resort. They spend the night frantically protecting their children and in the morning find their lives forever changed: homeless, penniless, awaiting news of their husbands\' fate, and left to face an uncertain future in a town that no longer exists.\r\n','26',2,3),(27,'Skullsworn (Chronicle of the Unhewn Throne 0)','Brian Staveley',35.92,'Pyrre Lakatur doesnâ€™t like the word skullsworn. It fails to capture the faith and grace, the peace and beauty of her devotion to the God of Death. She is not, to her mind, an assassin, not a murderer--she is a priestess. At least, she will be a priestess if she manages to pass her final trial. The problem isnâ€™t the killing. Pyrre has been killing and training to kill, studying with some of the most deadly men and women in the world, since she was eight. The problem, strangely, is love. To pass her Trial, Pyrre has ten days to kill the ten people enumerated in an ancient song, including \"the one you love / who will not come again.\"\r\n','27',2,8),(28,'The Perfect Stranger','Megan Miranda',39.7,'In the masterful follow-up to the runaway hit All the Missing Girls, a journalist sets out to find a missing friend, a friend who may never have existed at all. Confronted by a restraining order and the threat of a lawsuit, failed journalist Leah Stevens needs to get out of Boston when she runs into an old friend, Emmy Grey, who has just left a troubled relationship. Emmy proposes they move to rural Pennsylvania, where Leah can get a teaching position and both women can start again. But their new start is threatened when a woman with an eerie resemblance to Leah is assaulted by the lake, and Emmy disappears days later.\r\n','28',2,1),(29,'Proof of Concept','Gwyneth Jones',24.67,'On a desperately overcrowded future Earth, crippled by climate change, the most unlikely hope is better than none. Governments turn to Big Science to provide them with the dreams that will keep the masses compliant. The Needle is one such dream, an installation where the most abstruse theoretical science is being tested: science that might make human travel to a habitable exoplanet distantly feasible.\r\n\r\n','29',2,1),(30,'The Seventh Sun','Kent Lester',29.81,'A seemingly random murder off the Honduran coast leads scientist Dan Clifford to a massive corporate conspiracy. Illegal, automated, undersea operations have unwittingly awakened a primordial organism that turns host organisms into neurotoxin factories, wreaking havoc with aquatic life and the nearby human population. This maleficence threatens to trigger a worldwide outbreak that could end in human extinction, the Seventh Sun of ancient myth.\r\n\r\n','30',2,16),(31,'Cruel is the Night','Karo Hamalainen & Owe Witesman',25.33,'Three cell phones ring in an opulent London apartment. The calls go unanswered because their recipients are all dead. Earlier that night, four Finnish friends meet for dinner. It\'s been ten years since the host, Robert, has seen his once-best friend, Mikko. The two had an ideological falling-out because Robert, a banker, made millions off of unethical (but not illegal) interest rate manipulations. Mikko, meanwhile, is an investigative journalist who has dedicated his career to bringing down corrupt financiers and politicians.\r\n','31',2,16),(32,'The Collapsing Empire (The Interdependency #1)','John Scalzi',20.98,'Our universe is ruled by physics and faster than light travel is not possible -- until the discovery of The Flow, an extra-dimensional field we can access at certain points in space-time that transport us to other worlds, around other stars. Humanity flows away from Earth, into space, and in time forgets our home world and creates a new empire, the Interdependency, whose ethos requires that no one human outpost can survive without the others. Itâ€™s a hedge against interstellar war -- and a system of control for the rulers of the empire.','32',2,4),(33,'Clean Code : A Handbook of Agile Software Craftsmanship','Robert C. Martin',31.61,'\nEven bad code can function. But if code isn\'t clean, it can bring a development organization to its knees. Every year, countless hours and significant resources are lost because of poorly written code. But it doesn\'t have to be that way. Noted software expert Robert C. Martin presents a revolutionary paradigm with Clean Code: A Handbook of Agile Software Craftsmanship. Martin has teamed up with his colleagues from Object Mentor to distill their best agile practice of cleaning code \"on the fly\" into a book that will instill within you the values of a software craftsman and make you a better programmer-but only if you work at it. What kind of work will you be doing? You\'ll be reading code-lots of code. And you will be challenged to think about what\'s right about that code, and what\'s wrong with it.\n\n','33',3,6),(34,'HTML & CSS : Design and Build Web Sites','Jon Duckett',29.68,'A full-color introduction to the basics of HTML and CSS from the publishers of Wrox! Every day, more and more people want to learn some HTML and CSS. Joining the professional web designers and programmers are new audiences who need to know a little bit of code at work (update a content management system or e-commerce store) and those who want to make their personal blogs more attractive. Many books teaching HTML and CSS are dry and only written for those who want to become programmers, which is why this book takes an entirely new approach. Introduces HTML and CSS in a way that makes them accessible to everyone hobbyists, students, and professionals and it s full-color throughout.\r\n','34',3,2),(35,'Learn Python the Hard Way : A Very Simple Introduction to the Terrifyingly Beautiful World of Computers and Code','Zed A. Shaw',34.48,'\nYou Will Learn Python! Zed Shaw has perfected the world\'s best system for learning Python. Follow it and you will succeed-just like the hundreds of thousands of beginners Zed has taught to date! You bring the discipline, commitment, and persistence; the author supplies everything else. In Learn Python the Hard Way, Third Edition, you\'ll learn Python by working through 52 brilliantly crafted exercises. Read them. Type their code precisely. (No copying and pasting!) Fix your mistakes. Watch the programs run. As you do, you\'ll learn how software works; what good programs look like; how to read, write, and think about code; and how to find and fix your mistakes using tricks professional programmers use.\n','35',3,18),(36,'Hacking : The Art of Exploitation','Jon Erickson',35.34,'While other books merely show how to run existing exploits, Hacking: The Art of Exploitation broke ground as the first book to explain how hacking and software exploits work and how readers could develop and implement their own. In the second edition, author Jon Erickson again uses practical examples to illustrate the most common computer security issues in three related fields: programming, networking and cryptography. All sections have been extensively updated and expanded, including a more thorough introduction to the complex, low-level workings of a computer. Readers can easily follow along with example code by booting the included live CD, which provides a Linux programming environment and all of its benefits without the hassle of installing a new operating system.\r\n','36',3,8),(37,'Cracking the Coding Interview','Gayle Laakmann McDowell',45.85,'I am not a recruiter. I am a software engineer. And as such, I know what it\'s like to be asked to whip up brilliant algorithms on the spot and then write flawless code on a whiteboard. I\'ve been through this as a candidate and as an interviewer. Cracking the Coding Interview, 6th Edition is here to help you through this process, teaching you what you need to know and enabling you to perform at your very best. I\'ve coached and interviewed hundreds of software engineers. The result is this book. Learn how to uncover the hints and hidden details in a question, discover how to break down a problem into manageable chunks, develop techniques to unstick yourself when stuck, learn (or re-learn) core computer science concepts, and practice on 189 interview questions and solutions.\r\n','37',3,8),(38,'PHP Objects, Patterns, and Practice','Matt Zandstra',42.99,'\nPHP Objects Patterns and Practice, Fourth Edition is revised and updated throughout. The book begins by covering PHP\'s object-oriented features. It introduces key topics including class declaration, inheritance, reflection and much more. These provide the fundamentals of the PHP\'s support for objects. It also introduces some principles of design. This edition introduces new object relevant features such as traits, reflection extension additions, callable type hinting, improvements to exception handling, and many smaller language enhancements. The next section is devoted to design patterns. These describe common problems and their solutions.\n','38',3,10),(39,'PHP 7 in Easy Steps','Mike McGrath',23.35,'\nPHP 7 in easy steps will teach you to code server-side scripts. It begins by explaining how to install a free web server and the PHP interpreter to create an environment in which you can produce your own data-driven server-side web pages. You will learn how to write PHP server-side scripts  Examples illustrate how to store and retrieve Session Data, how to provide a Message Board, and how to access Web Services APIs over Hypertext Transfer Protocol. PHP 7 in easy steps has an easy-to-follow style that will appeal to anyone who wants to begin producing data-driven web pages, as well as to web developers wanting to add server-side interaction to their websites, and the programmer who quickly wants to add PHP to his or her skills set. It will also appeal to the hobbyists who want to begin creating scripts for upload to their own ISP, the student, and to those seeking a career in computing who need a fundamental understanding of server-side programming with PHP.\n','39',3,10),(40,'JavaScript & JQuery : Interactive Front-end Web Development','Jon Duckett',36.76,'\nLearn JavaScript and jQuery a nicer way This full-color book adopts a visual approach to teaching JavaScript & jQuery, showing you how to make web pages more interactive and interfaces more intuitive through the use of inspiring code examples, infographics, and photography. The content assumes no previous programming experience, other than knowing how to create a basic web page in HTML & CSS. You\'ll learn how to achieve techniques seen on many popular websites (such as adding animation, tabbed panels, content sliders, form validation, interactive galleries, and sorting data)\n','40',3,3),(41,'Web 2.0 Fundamentals: With Ajax, Development Tools, and Mobile Platforms','Oswald Campesato &  Kevin Nilson',36.34,'\nDesigned for a broad spectrum of people with technically diverse backgrounds, this book covers the most recent developments in Web 2.0 programming topics and applications, including up-to-date material on cloud computing, Google AppEngine, Social Networks, Comet, HTML5, semantic technology, and a chapter on the future of the Web. This book prepares readers for more advanced technical topics in Web 2.0. The accompanying CD-ROM and companion website provide code samples from the book and appendices with an extensive set of links (over 1,000) for supplemental material and links for the Twitter and Facebook pages. (Please note, eBook version does not include CD-ROM).\n','41',3,15),(42,'Bulletproof Ajax','Jeremy Keith',30.95,'Step-by-step guide reveals best practices for enhancing Web sites with Ajax * A step-by-step guide to enhancing Web sites with Ajax. * Uses progressive enhancement techniques to ensure graceful degradation (which makes sites usable in all browsers). * Shows readers how to write their own Ajax scripts instead of relying on third-party libraries. Web site designers love the idea of Ajax--of creating Web pages in which information can be updated without refreshing the entire page.\r\n','42',3,2),(43,'Introducing Ubuntu : Desktop Linux','Brian Proffitt',42.92,'\nCompletely free and highly robust, Ubuntu has the power to bring the Linux desktop to the masses. INTRODUCING UBUNTU: DESKTOP LINUX is your key to learning this new, user-friendly, and free alternative to Windows. Think of it as a personal tutorial, a one-on-one class with an expert user of Ubuntu. It begins by helping you choose the right Ubuntu for you (yes, there\'s more than one), and guides you through installing Ubuntu, managing the desktop, installing printers, and getting online. From there, the book moves on to describe how to perform everyday tasks under Ubuntu, such as sending and receiving e-mail, playing MP3s and movies, messaging with friends, working with digital images, and much more. \n','43',3,15),(44,'Ubuntu Kung Fu : Tips, Tricks and Hacks','Keir Thomas',31.09,'\nUbuntu builds on a solid base of Debian Linux to create an award-winning operating system that\'s light-years ahead of its competitors. Ubuntu consistently tops lists of the most popular Linuxes amongst professionals and enthusiasts; Dell recently embraced Ubuntu in its product lines after a user survey indicated overwhelming public support. \"Ubuntu Kung Fu\" provides hints, hacks, tweaks and tricks for every level of user.Guaranteed to be free of the usual dross that fills tips books, \"Ubuntu Kung Fu\" is written to be entertaining and, above all, readable. Its 300+ concise tips utilize and exploit hidden or lesser-known features to boost day-to-day productivity.\n','44',3,2);
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` char(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'science'),(2,'fiction'),(3,'programming'),(4,'drama'),(5,'mystery'),(7,'comics'),(8,'romance'),(9,'history'),(10,'horor');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `user_id` int(4) NOT NULL,
  `first_name` char(30) NOT NULL,
  `last_name` char(30) NOT NULL,
  `address` char(80) NOT NULL,
  `city` char(30) NOT NULL,
  `state` char(30) NOT NULL,
  `zip` char(10) NOT NULL,
  `country` char(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=130 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (1,4,'Milovan','Skoric','Ulica Lepih zelja 51','Dusanovac','Serbia','16498','Zimbabve'),(126,189,'Thomas','Jafferson','Savska 51','Igalo','Kirgistan','11568','Yarmenia'),(127,190,'t','t','t','t','t','t','t'),(128,191,'q','q','q','q','q','q','q'),(129,192,'ffff','ffff','ffff','ffff','fffgg','ffffggfdd','ffff');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `links`
--

DROP TABLE IF EXISTS `links`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `links` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `link` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `links`
--

LOCK TABLES `links` WRITE;
/*!40000 ALTER TABLE `links` DISABLE KEYS */;
INSERT INTO `links` VALUES (1,'home','/index.php'),(2,'contact','/?mvcc=contact&mvcm=contact'),(3,'my account','/?mvcc=login&mvcm=login'),(4,'home','/?mvcc=admin&mvcm=admin'),(5,'books','/?mvcc=adminBook&mvcm=adminBook'),(6,'categories','/?mvcc=adminCategory&mvcm=adminCategory'),(7,'orders','/?mvcc=adminOrder&mvcm=adminOrder'),(8,'message','/?mvcc=adminMessage&mvcm=adminMessage');
/*!40000 ALTER TABLE `links` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` char(50) DEFAULT NULL,
  `title` char(50) DEFAULT NULL,
  `message` varchar(1024) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (1,'to@ma.rs','test','testing','2017-09-19 19:19:27'),(2,'to@ma.rs','dwawda','awdawdwadwa dawdawdwadwadawdawd wadwada wdawdwadwadawdawd wadwadawdawdwadwadawdawdwad wadawdawdw adwadawdawdwadwadawdawd wadwadawdaw dwadwadawdawdwadwad','2017-09-19 20:32:28'),(3,'du@ka.rs','oppkdrgk','jpsegjrpghd prghkm;dmgsjgoisjfeggjpsegjr pghdprghkm;dmgsjgoisjfeg gjpsegjrpghdprghkm;dmgsjgoijpsegjrpgh dprghkm;dmgsjgoi sjfeggjpsegjrpghdprghkm;dmgsjg oisjfeggjpsegjrpghdprghkm;dmgsjgoisjfeggjp segjrpghdprghkm;dmgsjgoisjfeggsjfeggjpsegj rpghdprghkm;dmgsjgoisjfeggjpse gjrpghdprghkm;dmgsjgoisjfeggjpsegjrpghdprghk m;dmgsjgoisjfeggjpsegjrpghdprghkm;dmgsjgoisjfegg jpsegjrpghdprghkm;dmg sjgoisjfeggjp segjrpghdprghkm;dmgsjgoisjfeggjpsegjrpghdpr ghkm;dmgsjg oisjfegg','2017-09-19 20:30:14');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `items` varchar(512) NOT NULL,
  `date` varchar(256) CHARACTER SET utf8 NOT NULL,
  `customer_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_items`
--

LOCK TABLES `order_items` WRITE;
/*!40000 ALTER TABLE `order_items` DISABLE KEYS */;
INSERT INTO `order_items` VALUES (105,'a:2:{i:44;s:1:\"1\";i:37;s:1:\"2\";}','2017-08-30 21:31:43',126),(106,'a:1:{i:6;s:1:\"2\";}','2017-09-05 18:14:22',126),(107,'a:1:{i:26;s:1:\"2\";}','2017-09-05 19:15:34',127),(108,'a:1:{i:1;s:1:\"1\";}','2017-09-09 17:22:52',128),(109,'a:1:{i:10;i:2;}','2017-09-13 21:37:27',127);
/*!40000 ALTER TABLE `order_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` char(40) NOT NULL,
  `password` char(80) NOT NULL,
  `role` varchar(45) DEFAULT 'user',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=192 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (3,'mi@sa.rs','$2y$10$WA0B9VJB/eIS0p4pHuW2iOoIycoGDn1WlJE8Udvz2H6u45bCCSosW','superadmin'),(4,'mi@le.rs','$2y$10$Rbw5yof0Ftr/CdIn2rNIqeNtHJ3eFgPVP0m2NqcfrzpA8pa5d1WqO','admin'),(189,'to@ma.rs','$2y$10$fFlcswddfs7VUfFxDzApXOFif5M5WlAzpXpanscGAp.WUmOsHQX9K','user'),(190,'tt@tt.rs','$2y$10$2Mju8ZofnM6mrmFGa6ULAObAqnNKEhfLf6rTOFMqE4iLBOGRoyN2G','user'),(191,'qq@qq.rs','$2y$10$oAjIUaR.W.LBA0iIx11p5O5Q3R3zjL2/yI07W/OqI6wYplhOXJmD2','user');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-09-20  2:29:39
