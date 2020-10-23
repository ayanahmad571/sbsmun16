<?php
include('db_auth.php');
?>
<?php
$web_config =array();

$web_mastersql = "SELECT * FROM web_config where valid = 1 limit 1 ";
$wmrs = $conn->query($web_mastersql);

if ($wmrs->num_rows == 1) {
    // output data of each row
   $wmrw = $wmrs->fetch_assoc();
   
   $web_config = $wmrw;
} else {
    echo "0 results";
}


?>
<?php
$pg_config =array();

$page_mastersql = "SELECT * FROM links_o_pages where lo_page_url = '".basename($_SERVER['PHP_SELF'])."' and lo_valid= 1 limit 1  ";

/*echo '<script>alert("'.$page_mastersql.'");</script>';
*/
$pgrs = $conn->query($page_mastersql);

if ($pgrs->num_rows == 1) {
    // output data of each row
   $pgrw = $pgrs->fetch_assoc();
   
   $pg_config = $pgrw;
} else {
    echo "0 results";
}


?> 
 
 
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $web_config['web_event_name'].' @'.$pg_config['lo_page_display_name']; ?></title>
<link href="include/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>
<link href="include/css/ionicons.min.css" rel="stylesheet" type="text/css">
<link href="include/css/animsition.min.css" rel="stylesheet" type="text/css">
<link href="include/css/slick.css" rel="stylesheet" type="text/css">
<link href="include/css/slick-theme.css" rel="stylesheet" type="text/css">
<link href="<?php echo $web_config['web_style_css_href']; ?>" rel="stylesheet" type="text/css">
<link rel="icon" href="<?php echo $web_config['web_icon_href'] ?>" type="image/x-icon" />
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>


.intro-scroll-down .mouse {position: relative;display: block;
width: 30px;
height: 45px;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
border: 2px solid rgba(239,230,16,1.00);
border-radius: 23px;
-moz-border-radius: 23px;
-webkit-border-radius: 23px;
z-index: 50; opacity:0.9;}

.intro-scroll-down .mouse .mouse-dot {
    background: rgba(232,205,63,1.00) none repeat scroll 0 0;
    border-radius: 50%;
    display: block;
    height: 6px;
    left: 50%;
    margin: -3px 0 0 -3px;
    position: absolute;
    top: 29%;
    transition: all 0.2s ease-out 0s;
    width: 6px;
}

</style>

</head>
<body class="home">
<!-- LOADER  -->
<div id="loading">
  <div id="loading-center">
    <div id="loading-center-absolute">
      <div class="object" id="object_one"></div>
      <div class="object" id="object_two"></div>
      <div class="object" id="object_three"></div>
    </div>
  </div>
</div>
<div class="animsition"> 
   <!--header start-->
  <header>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="logo"><a href="#" class="animsition-link"><img src="<?php echo $web_config['web_mun_txt_logo_src'] ?>" alt="<?php echo $web_config['web_event_name'] ?>" /></a></div>
         
          <div class="nav-menu-icon"><a href="#"><i></i></a></div>
          <nav>
            <ul class="menu">
            
			
			<?php 
			
			
			$sql = "SELECT * FROM `web_module` wm 
left join links_o_pages lo on lo.lo_page_name = wm.module_short_name
where wm.status = 1 and lo.lo_valid =1
 order by `module_pos` ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
 if( basename($_SERVER['PHP_SELF']) == basename($row['lo_page_url']) ){
		echo '
		<li><a href="#">'.$row['module_long_name'].'
               
		
		';
			
		}else{
		echo '
		<li><a href="'.$row['lo_page_url'].'">'.$row['module_long_name'].'
		
		';
			
		}
		
				if($row['module_sub_mod_exsits'] == 1){
			
			
			echo '<span class="ion ion-ios-arrow-down"></span></a>
			 <ul class="dropmenu">
			';
			
			
			$submod = "SELECT * FROM `sub_web_modules` where status = 1 and sub_rel_mod_id ='".$row['mod_id']."'";
$subres = $conn->query($submod);

if ($subres->num_rows > 0) {
    // output data of each row
    while($subrow = $subres->fetch_assoc()) { 
	
	echo '
	<li><a href="">'.$subrow['sub_mod_long_name'].'</a></li>
	';
	}
}else{
	echo '
                  <li><a href="index-2.html">Home Image</a></li>
                  <li><a href="home-text-rotator.html">Home Text Rotator</a></li>
                  <li><a href="home-slider.html">Home Slider</a></li>
                  <li><a href="home-video-bg.html">Home Video BG</a></li>
             ';
}
			
		
			 
			 
			 
			 
			 
			 echo '</ul>';






	}else{
		
		echo '</a>';
	}
	
	
			  echo '</li>';
    }
} else {
    echo "0 results";
}
			?>

            </ul>
            
            
            
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!--header end-->  
  
  <!--banner-container start-->
  <div class="banner-container" <?php echo 'style="'.$pg_config['lo_page_bg_img'].'"';   ?>>
  
  
   
    <?php 
		echo $pg_config['pg_box_txt'];
		?>
    
  </div>
  <!--banner-container end--> 
  
  <!-- main container start -->
  <div class="main-container" > 
    <!-- feature container start -->
    <div class="feature-container" >
      <div class="feature-box-container feature-slider">
        <div class="feature-box"> <i class="ion ion-ios-bell-outline"></i>
          <h4>100% Satisfaction</h4>
          <p>Pellentesque eu condimentum turpis. Praesent fringilla ex at massa consectetur finibus. Nulla facilisi.Nulla rutrum nibh in accumsan venenatis.</p>
        </div>
        <div class="feature-box dark"> <i class="ion ion-ios-color-wand-outline"></i>
          <h4>Bootstrap v3.3.1</h4>
          <p>Pellentesque eu condimentum turpis. Praesent fringilla ex at massa consectetur finibus. Nulla facilisi.Nulla rutrum nibh in accumsan venenatis.</p>
        </div>
        <div class="feature-box"> <i class="ion ion-ios-cart-outline"></i>
          <h4>Clear Coding</h4>
          <p>Pellentesque eu condimentum turpis. Praesent fringilla ex at massa consectetur finibus. Nulla facilisi.Nulla rutrum nibh in accumsan venenatis.</p>
        </div>
        <div class="feature-box dark"> <i class="ion ion-ios-alarm-outline"></i>
          <h4>Responsive</h4>
          <p>Pellentesque eu condimentum turpis. Praesent fringilla ex at massa consectetur finibus. Nulla facilisi.Nulla rutrum nibh in accumsan venenatis.</p>
        </div>
        <div class="feature-box"> <i class="ion ion-ios-email-outline"></i>
          <h4>Full Support</h4>
          <p>Pellentesque eu condimentum turpis. Praesent fringilla ex at massa consectetur finibus. Nulla facilisi.Nulla rutrum nibh in accumsan venenatis.</p>
        </div>
        <div class="feature-box dark"> <i class="ion ion-ios-lightbulb-outline"></i>
          <h4>Lots of Icons</h4>
          <p>Pellentesque eu condimentum turpis. Praesent fringilla ex at massa consectetur finibus. Nulla facilisi.Nulla rutrum nibh in accumsan venenatis.</p>
        </div>
      </div>
    </div>
    
    <!-- feature container end --> 
    
    <!-- welcome container start -->
    <div class="welcome-container">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="video-container embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/46926279?title=0&amp;byline=0&amp;portrait=0" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-sm-6">
            <h4>About the Company</h4>
            <p>Duis laoreet est nec molestie volutpat. Pellentesque eu condimentum turpis. Praesent fringilla ex at massa consectetur finibus. Nulla facilisi.Nulla rutrum nibh in accumsan venenatis. Duis laoreet est nec molestie volutpat. Pellentesque eu condimentum turpis. Praesent fringilla ex at massa consectetur finibus. Nulla rutrum nibh in accumsan venenatis. Nulla rutrum nibh in accumsan venenatis.</p>
            <ul class="list-group">
              <li>Pellentesque eu condimentum turpis</li>
              <li>Duis laoreet est nec molestie volutpat</li>
              <li>Praesent fringilla ex at massa consectetur finibus</li>
            </ul>
            <p><a href="about-us.html" class="btn btn-primary">Know More</a></p>
          </div>
        </div>
      </div>
    </div>
    <!-- welcome container end --> 
    
    <!-- recent-project container start -->
    
    <div class="recent-project-container">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <ul class="recent-projects recent-projects-slider">
              <li>
                <div class="project-box">
                  <div class="row">
                    <div class="col-md-6 text-center">
                      <div class="project-img-box"> <img src="include/images/imac.png" alt="" class="imac-img" />
                        <div class="imac-img-content projects-slides">
                          <div><img src="include/images/project1.jpg" alt=""  /></div>
                          <div><img src="include/images/project2.jpg" alt=""  /></div>
                          <div><img src="include/images/project3.jpg" alt=""  /></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <h3>Project Title 1</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque faucibus enim vitae arcu aliquam imperdiet. Morbi efficitur metus a neque egestas pellentesque. Proin lectus tortor, cursus non pretium eu, sagittis in felis. Nam at elit vel enim interdum tincidunt. Curabitur dapibus dui a lectus auctor, ac cursus mi efficitur.</p>
                      <h4>WEBSITE - <small><a href="http://www.project-website-url.com/" target="_blank">www.project-website-url.com</a></small></h4>
                      <h4 class="mar-30">CLIENT - <small>John Doe</small></h4>
                      <p><a href="#" class="btn btn-primary">View More</a></p>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="project-box">
                  <div class="row">
                    <div class="col-md-6 text-center">
                      <div class="project-img-box"> <img src="include/images/imac.png" alt="" class="imac-img" />
                        <div class="imac-img-content projects-slides">
                          <div><img src="include/images/project2.jpg" alt=""  /></div>
                          <div><img src="include/images/project3.jpg" alt=""  /></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <h3>Project Title 2</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque faucibus enim vitae arcu aliquam imperdiet. Morbi efficitur metus a neque egestas pellentesque. Proin lectus tortor, cursus non pretium eu, sagittis in felis. Nam at elit vel enim interdum tincidunt. Curabitur dapibus dui a lectus auctor, ac cursus mi efficitur.</p>
                      <h4>WEBSITE - <small><a href="http://www.project-website-url.com/" target="_blank">www.project-website-url.com</a></small></h4>
                      <h4 class="mar-30">CLIENT - <small>John Doe</small></h4>
                      <p><a href="#" class="btn btn-primary">View More</a></p>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="project-box">
                  <div class="row">
                    <div class="col-md-6 text-center">
                      <div class="project-img-box"> <img src="include/images/imac.png" alt="" class="imac-img" />
                        <div class="imac-img-content projects-slides">
                          <div><img src="include/images/project2.jpg" alt=""  /></div>
                          <div><img src="include/images/project3.jpg" alt=""  /></div>
                          <div><img src="include/images/project2.jpg" alt=""  /></div>
                          <div><img src="include/images/project1.jpg" alt=""  /></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <h3>Project Title 3</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque faucibus enim vitae arcu aliquam imperdiet. Morbi efficitur metus a neque egestas pellentesque. Proin lectus tortor, cursus non pretium eu, sagittis in felis. Nam at elit vel enim interdum tincidunt. Curabitur dapibus dui a lectus auctor, ac cursus mi efficitur.</p>
                      <h4>WEBSITE - <small><a href="http://www.project-website-url.com/" target="_blank">www.project-website-url.com</a></small></h4>
                      <h4 class="mar-30">CLIENT - <small>John Doe</small></h4>
                      <p><a href="#" class="btn btn-primary">View More</a></p>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    <!-- recent-project container end --> 
    
    <!-- testimonial container start -->
    <div class="testimonial-container">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2>CLIENT SAYS</h2>
            <ul class="testimonial-list testimonial-slider">
              <li>
                <div class="testimonial-box">
                  <p>Duis laoreet est nec molestie volutpat. Pellentesque eu condimentum turpis. Praesent fringilla ex at massa consectetur finibus. Nulla facilisi.Nulla rutrum nibh in accumsan venenatis. Duis laoreet est nec molestie volutpat. Pellentesque eu condimentum turpis. Praesent fringilla ex at massa consectetur finibus. Nulla rutrum nibh in accumsan venenatis. </p>
                  <h4>Client Name</h4>
                  <h6>www.website-url.com</h6>
                </div>
              </li>
              <li>
                <div class="testimonial-box">
                  <p>Duis laoreet est nec molestie volutpat. Pellentesque eu condimentum turpis. Praesent fringilla ex at massa consectetur finibus. Nulla facilisi.Nulla rutrum nibh in accumsan venenatis. Duis laoreet est nec molestie volutpat. Pellentesque eu condimentum turpis. Praesent fringilla ex at massa consectetur finibus. Nulla rutrum nibh in accumsan venenatis. </p>
                  <h4>Client Name</h4>
                  <h6>www.website-url.com</h6>
                </div>
              </li>
              <li>
                <div class="testimonial-box">
                  <p>Duis laoreet est nec molestie volutpat. Pellentesque eu condimentum turpis. Praesent fringilla ex at massa consectetur finibus. Nulla facilisi.Nulla rutrum nibh in accumsan venenatis. Duis laoreet est nec molestie volutpat. Pellentesque eu condimentum turpis. Praesent fringilla ex at massa consectetur finibus. Nulla rutrum nibh in accumsan venenatis. </p>
                  <h4>Client Name</h4>
                  <h6>www.website-url.com</h6>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- testimonial container end --> 
    
  </div>
  <!-- main container end --> 
  
  <!--footer start-->
  <?php 
  echo $web_config['web_footer_html'];
  ?>
  <!--footer end--> 
</div>
<script type="text/javascript" src="include/js/jquery.min.js"></script> 
<script type="text/javascript" src="include/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="include/js/animsition.min.js"></script> 
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script> 
<script type="text/javascript" src="include/js/slick.js"></script> 
<script type="text/javascript" src="include/js/jquery.countTo.js"></script> 
<script type="text/javascript" src="include/js/scroll.js"></script> 
<script type="text/javascript" src="include/js/imagesloaded.js"></script> 
<script type="text/javascript" src="include/js/masonry-3.1.4.js"></script> 
<script type="text/javascript" src="include/js/masonry.filter.js"></script> 
<script type="text/javascript" src="include/js/jquery.vide.js"></script> 
<script type="text/javascript" src="include/js/custom.js"></script>
</body>

</html>