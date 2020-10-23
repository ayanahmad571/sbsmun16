<?php
if(include('db_auth.php')){
	
}else{
	die('Please Reload');
}

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
 
<?php 

if(include('functions\\include.php')){
	
}else{
	die('Please Reload');
}

?>
 
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php 

get_title_link($conn,$pg_config,$web_config);
?>
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
		
		
		get_modules($conn,$pg_config,$web_config);
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
<?php
$getcomsql = "SELECT * FROM mun_committees where com_is_on_home= 1 and com_valid=1";
$getcomres = $conn->query($getcomsql);

if ($getcomres->num_rows > 0) {
    // output data of each row
	$count = 1;
	$dk ='';
    while($getcomrw = $getcomres->fetch_assoc()) {
		unset($dk);
		if(($count % 2) == 0){
			$dk ='dark';
		}else{
			$dk ='';

		}
		echo '
	    <div class="feature-box '.$dk.'"> <img class="img-responsive" src="'.$getcomrw['com_img_src'].'" />
          <h4>'.$getcomrw['com_long_name'].'</h4>
          <p>'.$getcomrw['com_desc'].'</p>
        </div>
	   
	   
	   ';
	   $count++;
    }
} else {
    echo "0 results";
}?>
        
        
        
      </div>
    
      </div>
    
    <!-- feature container end -->   
    
        <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
      	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <a href="<?php 
	  $getbtnlinkres = $conn->query("SELECT lo_page_url FROM `web_module` wm 
left join links_o_pages lo on lo.lo_page_name = wm.module_short_name
where wm.status = 1 and lo.lo_valid =1 and wm.module_short_name = 'com'
limit 1");

if($getbtnlinkres->num_rows ==1){
	$linkhref = $getbtnlinkres->fetch_assoc();
	echo $linkhref['lo_page_url'];
}
	  ?>" class="btn btn-primary btn-block">More</a></div>
       <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
    </div>
    
    
    

    
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
 
    <?php 

get_end_script($conn,$pg_config,$web_config);
?>
	
  </body>

</html>