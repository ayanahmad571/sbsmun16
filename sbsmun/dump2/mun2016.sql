-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2016 at 08:00 PM
-- Server version: 5.6.17-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mun2016`
--

-- --------------------------------------------------------

--
-- Table structure for table `links_o_pages`
--

CREATE TABLE IF NOT EXISTS `links_o_pages` (
  `lo_id` int(255) NOT NULL AUTO_INCREMENT,
  `lo_page_url` varchar(698) NOT NULL DEFAULT 'blahblah.php',
  `lo_page_name` varchar(698) NOT NULL,
  `lo_page_display_name` varchar(698) NOT NULL,
  `pg_box_txt` varchar(5000) NOT NULL,
  `lo_page_bg_img` varchar(698) NOT NULL DEFAULT 'background:rgba(0, 0, 0, 0) url("../images/banner18.jpg") no-repeat fixed center top / cover ;',
  `lo_valid` int(255) NOT NULL DEFAULT '1',
  PRIMARY KEY (`lo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `links_o_pages`
--

INSERT INTO `links_o_pages` (`lo_id`, `lo_page_url`, `lo_page_name`, `lo_page_display_name`, `pg_box_txt`, `lo_page_bg_img`, `lo_valid`) VALUES
(1, 'home.php', 'hm', 'Home', ' <div class="banner-image">\n      <div class="banner-title">\n\n<img class="img-responsive" src="include/images/mun-logo-sd.png" />\n<!--        <h1>SBS-MUN 2016</h1>\n        <h2>Por la razon.. o Fuerza</h2>\n-->\n      </div>\n    </div>\n    <div style="z-index:125;" class="intro-scroll-down">\n      <div class="scroll-down"> <span class="mouse"> <span class="mouse-dot"></span> </span> </div>\n    </div>', 'background:rgba(0, 0, 0, 0) url("include/images/banner18.jpg") no-repeat fixed center top / cover ;', 1),
(2, 'addressal.php', 'addrs', 'Addressal', '<div class="inner-banner-container" style="background-image:url(include/images/banner6.jpg)">\n  		<div class="banner-title">\n        	<h1>Addressal''s</h1>\n            \n        </div>\n  </div>', 'background:rgba(0, 0, 0, 0) url("include/images/banner18.jpg") no-repeat fixed center top / cover ;', 1),
(3, 'committee.php', 'com', 'Committees', '<div class="inner-banner-container" style="background-image:url(include/images/banner6.jpg)">\n  		<div class="banner-title">\n        	<h1>Committees</h1>\n            \n        </div>\n  </div>', 'background:rgba(0, 0, 0, 0) url("include/images/banner18.jpg") no-repeat fixed center top / cover ;', 1),
(4, 'reg_main.php', 'reg', 'Registration', '<div class="inner-banner-container" style="background-image:url(include/images/banner6.jpg)">\n  		<div class="banner-title">\n        	<h1>Registration</h1>\n            \n        </div>\n  </div>', 'background:rgba(0, 0, 0, 0) url("include/images/banner18.jpg") no-repeat fixed center top / cover ;', 1),
(5, 'tfe.php', 'tfe', 'Fourth Estate', '<div class="inner-banner-container" style="background-image:url(include/images/banner6.jpg)">\r\n  		<div class="banner-title">\r\n        	<h1>Fourth Estate</h1>\r\n            \r\n        </div>\r\n  </div>', 'background:rgba(0, 0, 0, 0) url("include/images/banner18.jpg") no-repeat fixed center top / cover ;', 1),
(6, 'updates.php', 'updts', 'Updates', '<div class="inner-banner-container" style="background-image:url(include/images/banner6.jpg)">\n  		<div class="banner-title">\n        	<h1>Updates</h1>\n            \n        </div>\n  </div>', 'background:rgba(0, 0, 0, 0) url("include/images/banner18.jpg") no-repeat fixed center top / cover ;', 1),
(7, 'contact.php', 'cntct', 'Contact-us', '<div class="banner-title">\n        	<h1>Contact us</h1>\n        </div>', 'background-image:url(include/images/banner6.jpg);', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mail_rec`
--

CREATE TABLE IF NOT EXISTS `mail_rec` (
  `ml_id` int(255) NOT NULL AUTO_INCREMENT,
  `ml_hsh` varchar(982) NOT NULL,
  `ml_from_name` varchar(698) NOT NULL,
  `ml_to_email` varchar(698) NOT NULL,
  `ml_from_email` varchar(688) NOT NULL,
  `ml_subj` varchar(1000) NOT NULL,
  `ml_content` text NOT NULL,
  `ml_timestamp_sent` varchar(698) NOT NULL,
  `error_msg` text NOT NULL,
  `ml_sent` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ml_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `mail_rec`
--

INSERT INTO `mail_rec` (`ml_id`, `ml_hsh`, `ml_from_name`, `ml_to_email`, `ml_from_email`, `ml_subj`, `ml_content`, `ml_timestamp_sent`, `error_msg`, `ml_sent`) VALUES
(1, '', 'Ayan ', '', 'ayanzcap@hotmail.com', 'AYANAHMAD', 'this is rhsa fsvdjnvc j iuiranskaer', '1463309994', '-None-', 1),
(2, '', 'Ayan', 'anonymous.code.anonymous@gmail.com', 'bikram@gmail.com', 'Confirmatoin of nothing', 'This is a dummy test', '1463310378', '-None-', 1),
(3, 'ff4aa3fcbf2e16ea2dd11df0e0c2aa98', 'Ayan', 'anonymous.code.anonymous@gmail.com', 'wiehbf@iuhfc.com', 'iuhrg', 'ihhbrviurvijnvijn', '1463310736', '-None-', 1),
(4, 'ff4aa3fcbf2e16ea2dd11df0e0c2aa98', 'Ayan', 'anonymous.code.anonymous@gmail.com', 'wiehbf@iuhfc.com', 'iuhrg', 'ihhbrviurvijnvijn', '1463310772', '-None-', 1),
(5, '907a2755c3130f3a3f07925e8c52bd50', 'Ayan', 'anonymous.code.anonymous@gmail.com', 'wiehbf@iuhfc.com', 'iuhrg', 'ihhbrviurvijnvijn', '1463310903', '-None-', 1),
(6, 'a1d7020701da063deaecabfa0211c4c7', 'Ayan', 'anonymous.code.anonymous@gmail.com', 'Ahmadijnk@jk.com', 'report a bug', 'this is impas ther aremany bugs on youesite', '1463326415', '-None-', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mun_addrsls`
--

CREATE TABLE IF NOT EXISTS `mun_addrsls` (
  `ads_id` int(255) NOT NULL AUTO_INCREMENT,
  `ads_col_type` int(255) NOT NULL DEFAULT '4',
  `ads_img_src` varchar(698) NOT NULL DEFAULT 'include/images/',
  `ads_author` varchar(698) NOT NULL,
  `ads_titl` varchar(698) DEFAULT NULL,
  `ads_desc` text NOT NULL,
  `ads_page_for` varchar(698) NOT NULL DEFAULT 'addressal.php',
  `ads_valid` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ads_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `mun_addrsls`
--

INSERT INTO `mun_addrsls` (`ads_id`, `ads_col_type`, `ads_img_src`, `ads_author`, `ads_titl`, `ads_desc`, `ads_page_for`, `ads_valid`) VALUES
(1, 6, 'include/images/John_Doe.jpg', 'John Doe', NULL, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo beatae non officia, amet. Omnis reprehenderit, quia necessitatibus minus illum molestias, ut eligendi molestiae ullam laudantium soluta beatae amet facere.', 'addrs', 1),
(2, 6, 'include/images/deepak-verma.jpg', 'Deepak Verma', NULL, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo beatae non officia, amet. Omnis reprehenderit, quia necessitatibus minus illum molestias, ut eligendi molestiae ullam laudantium soluta beatae amet facere.', 'addrs', 1),
(3, 4, 'include/images/member1.jpg', 'Shivansh Anand', NULL, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo beatae non officia, amet. Omnis reprehenderit, quia necessitatibus minus illum molestias, ut eligendi molestiae ullam laudantium soluta beatae amet facere.', 'addrs', 1),
(4, 4, 'include/images/member2.jpg', 'Nihaal Rana', NULL, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo beatae non officia, amet. Omnis reprehenderit, quia necessitatibus minus illum molestias, ut eligendi molestiae ullam laudantium soluta beatae amet facere.', 'addrs', 1),
(5, 4, 'include/images/member3.jpg', 'HarrisonMem Three', NULL, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo beatae non officia, amet. Omnis reprehenderit, quia necessitatibus minus illum molestias, ut eligendi molestiae ullam laudantium soluta beatae amet facere.', 'addrs', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mun_committees`
--

CREATE TABLE IF NOT EXISTS `mun_committees` (
  `com_id` int(255) NOT NULL AUTO_INCREMENT,
  `com_long_name` varchar(698) NOT NULL,
  `com_short_name` varchar(698) NOT NULL,
  `com_img_src` varchar(698) NOT NULL,
  `com_is_on_home` int(2) NOT NULL DEFAULT '0',
  `com_desc` text NOT NULL,
  `com_valid` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`com_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `mun_committees`
--

INSERT INTO `mun_committees` (`com_id`, `com_long_name`, `com_short_name`, `com_img_src`, `com_is_on_home`, `com_desc`, `com_valid`) VALUES
(1, '100% Satisfaction', '', 'include/images/product2.jpg', 1, 'Pellentesque eu condimentum turpis. Praesent fringilla ex at massa consectetur finibus. Nulla facilisi.Nulla rutrum nibh in accumsan venenatis.', 1),
(2, 'Bootstrap v3.3.1', '', 'include/images/product2.jpg', 1, 'Pellentesque eu condimentum turpis. Praesent fringilla ex at massa consectetur finibus. Nulla facilisi.Nulla rutrum nibh in accumsan venenatis.', 1),
(3, 'Clear Coding', '', 'include/images/product3.jpg', 1, 'Pellentesque eu condimentum turpis. Praesent fringilla ex at massa consectetur finibus. Nulla facilisi.Nulla rutrum nibh in accumsan venenatis.', 1),
(4, 'Responsive', '', 'include/images/product4.jpg', 1, 'Pellentesque eu condimentum turpis. Praesent fringilla ex at massa consectetur finibus. Nulla facilisi.Nulla rutrum nibh in accumsan venenatis.', 1),
(5, 'Full Support', '', 'include/images/product5.jpg', 0, 'Pellentesque eu condimentum turpis. Praesent fringilla ex at massa consectetur finibus. Nulla facilisi.Nulla rutrum nibh in accumsan venenatis.', 1),
(6, 'Lots of Icons', '', 'include/images/product6.jpg', 0, 'Pellentesque eu condimentum turpis. Praesent fringilla ex at massa consectetur finibus. Nulla facilisi.Nulla rutrum nibh in accumsan venenatis.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_web_modules`
--

CREATE TABLE IF NOT EXISTS `sub_web_modules` (
  `sub_mod_id` int(255) NOT NULL AUTO_INCREMENT,
  `sub_rel_mod_id` varchar(255) NOT NULL,
  `sub_mod_short_name` varchar(698) DEFAULT NULL,
  `sub_mod_long_name` varchar(698) NOT NULL,
  `sub_mod_color` varchar(698) DEFAULT NULL,
  `sub_mod_icon` varchar(698) DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`sub_mod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `sub_web_modules`
--

INSERT INTO `sub_web_modules` (`sub_mod_id`, `sub_rel_mod_id`, `sub_mod_short_name`, `sub_mod_long_name`, `sub_mod_color`, `sub_mod_icon`, `status`) VALUES
(1, '5', '-', 'International Press Team', NULL, NULL, 1),
(2, '5', '-', 'Editorial\r\n', NULL, NULL, 1),
(3, '5', '-', 'News\r\n', NULL, NULL, 1),
(4, '5', '-', 'Opinions\r\n', NULL, NULL, 1),
(5, '5', '-', 'Features\r\n', NULL, NULL, 1),
(6, '5', '-', 'Interviews\r\n', NULL, NULL, 1),
(7, '5', '-', 'Cartoons\r\n', NULL, NULL, 1),
(8, '5', '-', 'Photo gallery\r\n', NULL, NULL, 1),
(9, '7', '', 'School', NULL, NULL, 1),
(10, '8', '', 'UNHRC', NULL, NULL, 1),
(11, '4', '', 'Delagate', NULL, NULL, 1),
(12, '4', '', 'Candidate', NULL, NULL, 1),
(13, '3', '', 'Organising Committee', NULL, NULL, 1),
(14, '7', '', 'Organising Committee', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `web_config`
--

CREATE TABLE IF NOT EXISTS `web_config` (
  `wc_id` int(255) NOT NULL AUTO_INCREMENT,
  `web_nav_bg_color` varchar(698) NOT NULL,
  `web_nav_fo_color` varchar(698) NOT NULL,
  `web_nav_fo_size` varchar(698) NOT NULL,
  `web_school_logo_sm` varchar(698) NOT NULL,
  `web_school_logo_lg` varchar(698) NOT NULL,
  `web_mun_txt_logo_src` varchar(698) NOT NULL,
  `web_mun_logo_hd` varchar(698) NOT NULL,
  `web_mun_logo_sd` varchar(698) NOT NULL,
  `web_icon_href` varchar(698) NOT NULL DEFAULT 'icon.png',
  `web_style_css_href` varchar(698) NOT NULL DEFAULT 'include/css/style.css',
  `web_footer_html` varchar(5000) NOT NULL,
  `web_event_name` varchar(698) NOT NULL,
  `web_sch_addrss` varchar(698) DEFAULT NULL,
  `web_sch_email` varchar(698) DEFAULT NULL,
  `web_sch_phone` varchar(698) DEFAULT NULL,
  `valid` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`wc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `web_config`
--

INSERT INTO `web_config` (`wc_id`, `web_nav_bg_color`, `web_nav_fo_color`, `web_nav_fo_size`, `web_school_logo_sm`, `web_school_logo_lg`, `web_mun_txt_logo_src`, `web_mun_logo_hd`, `web_mun_logo_sd`, `web_icon_href`, `web_style_css_href`, `web_footer_html`, `web_event_name`, `web_sch_addrss`, `web_sch_email`, `web_sch_phone`, `valid`) VALUES
(1, 'background:rgba(255, 255, 255, 0.9) none repeat scroll 0 0;', 'color:#222;', 'font-size: 12px;', '-', 'include/images/banner.JPG', 'include/images/logo.png', '-', '-', 'icon.png', 'style.php', '<div class="bottom-container">\n	<div class="container">\n    	<div class="row">\n        	<div class="col-sm-12">\n            	<div class="bottom-content">\n                    <h2>Report a Bug ?</h2>\n                    <p><a href="contact.php" class="btn btn-primary">Click Me</a></p>\n                </div>\n            </div>\n        </div>\n    </div>\n</div>\n\n<footer> \n    \n    <!--footer-lower start-->\n    <div class="footer-lower">\n      <div class="container">\n        <div class="row">\n          <div class="col-md-6 col-md-push-6">\n            <ul class="social-links">\n              <li><a href="https://twitter.com/" target="_blank" title="Twitter"><i class="ion ion-social-twitter"></i></a></li>\n              <li><a href="https://www.facebook.com/" target="_blank" title="Facebook"><i class="ion ion-social-facebook"></i></a></li>\n              <li><a href="https://plus.google.com/" target="_blank" title="Google+"><i class="ion ion-social-googleplus-outline"></i></a></li>\n              <li><a href="https://dribbble.com/" target="_blank" title="Dribble"><i class="ion ion-social-dribbble"></i></a></li>\n              <li><a href="https://instagram.com/" target="_blank" title="Instagram"><i class="ion ion-social-instagram"></i></a></li>\n              <li><a href="https://www.pinterest.com/" target="_blank" title="Pinterest"><i class="ion ion-social-pinterest"></i></a></li>\n              <li><a href="https://www.linkedin.com/" target="_blank" title="Linkedin"><i class="ion ion-social-linkedin"></i></a></li>\n              <li><a href="https://www.youtube.com/" target="_blank" title="Youtube"><i class="ion ion-social-youtube"></i></a></li>\n            </ul>\n          </div>\n          <div class="col-md-6 col-md-pull-6"> &copy;SBSMUN2K16</div>\n        </div>\n      </div>\n    </div>\n    <!--footer-lower end--> \n  </footer>\n            ', 'SBS MUN-2016', '<p>Step by Step School<br>\nPlot A-10, Sector - 132,<br>\nTaj Expressway,<br>\nNoida - 201 303</p> ', '<p><a data-placement="top" data-toggle="tooltip" data-original-title="Schools Email" href="mailto:info@sbs-school.org">info@sbs-school.org</a><br/>\n                           <a data-placement="top" data-toggle="tooltip" data-original-title="MUN Head Incharge" href="mailto:shruti.mishra@sbs-school.org">shruti.mishra@sbs-school.org</a></p>', '\n                            <p>\n                           \n                            <a data-placement="top" data-toggle="tooltip" data-original-title="School''s Landline" href="tel:01203857300">+91 - 0120 385 7300</a><br/>\n                            \n                            <a data-placement="top" data-toggle="tooltip" data-original-title="Fax" href="tel:01203857399">+91 - 0120 385 7399</a><br/>\n                           \n                           <a data-placement="top" data-toggle="tooltip" data-original-title="MUN Head Incharge" href="tel:0987548512">+91 - 123 456 7890</a>\n                           </p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `web_module`
--

CREATE TABLE IF NOT EXISTS `web_module` (
  `mod_id` int(255) NOT NULL AUTO_INCREMENT,
  `module_short_name` varchar(698) DEFAULT NULL,
  `module_long_name` varchar(698) NOT NULL,
  `module_icon` varchar(698) DEFAULT NULL,
  `module_color` varchar(698) DEFAULT NULL,
  `module_f_color` varchar(698) DEFAULT NULL,
  `module_b_color` varchar(698) DEFAULT NULL,
  `module_sub_mod_exsits` int(2) DEFAULT '0',
  `module_pos` int(255) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`mod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `web_module`
--

INSERT INTO `web_module` (`mod_id`, `module_short_name`, `module_long_name`, `module_icon`, `module_color`, `module_f_color`, `module_b_color`, `module_sub_mod_exsits`, `module_pos`, `status`) VALUES
(1, 'hm', 'Home', 'fa fa-home', NULL, NULL, NULL, 0, 1, 1),
(2, 'addrs', 'Addressal', 'fa fa-comment', NULL, NULL, NULL, 0, 2, 1),
(3, 'com', 'Committees', 'fa fa-users', NULL, NULL, NULL, 0, 3, 1),
(4, 'reg', 'Registration', 'fa fa-pencil', NULL, NULL, NULL, 0, 4, 1),
(5, 'tfe', 'Fourth Estate', 'fa fa-envira', NULL, NULL, NULL, 0, 5, 1),
(6, 'updts', 'Updates', 'fa fa-inbox', NULL, NULL, NULL, 0, 6, 1),
(7, 'cntct', 'Contact us', 'fa fa-question-circle', NULL, NULL, NULL, 0, 7, 1),
(8, 'sim', 'Simulations', NULL, NULL, NULL, NULL, 1, 118, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
