
<?php session_start(); 
if(!isset($_SESSION['user']))
{
    echo "<script> location.href='index.php'; </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Covid Shield</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body>
	  <?php include('nav.php'); ?>
   
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">
            <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
              <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Recovery plan for the World
              </h1>
              <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Modern mankind just a click away</p>
            </div>
          </div>
        </div>
      </div>
      <div class="slider-item" style="background-image: url('images/bg_2.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">
            <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
              <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Recovery plan for the World
              </h1>
              <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Modern mankind just a click away</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="home-slider owl-carousel">
      <div class="slider-item bread-item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container" data-scrollax-parent="true">
          <div class="row slider-text align-items-end">
            <div class="col-md-7 col-sm-12 ftco-animate mb-5">
              <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"></p>
              <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Recovery plan for the World</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-gallery">
      <div class="container-wrap">
        <div class="row no-gutters">
          <div class="col-md-5 ftco-animate">
            <a href="https://www.cdc.gov/coronavirus/2019-ncov/symptoms-testing/symptoms.html" target="_blank" class="gallery img d-flex align-items-center" style="background-image: url(images/ll.jpg);">
            </a>
          </div>
          <div class="col-md-7 ftco-animate">
            <span class="gallery img d-flex align-items-center" style="background-image: url(images/jj.jpg);">
              </span>
          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-2">We serve you the best</h2>
            <p>Modern mankind just a click away</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <a href="https://covid-19livetracker.blogspot.com/" target="_blank"><i class="fas fa-shield-virus" style="font-size:48px"></i></a>
              </div>
              <div class="media-body p-2 mt-3">
                <a href="https://covid-19livetracker.blogspot.com/" target="_blank"><h3 class="heading">Information about the Covid</h3></a>
                <p> </p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                 <a href="test.php"><i class="fas fa-syringe" style="font-size:48px"></i></a>
              </div>
              <div class="media-body p-2 mt-3">
                <a href="test.php"><h3 class="heading">Covid Test</h3></a>
                <p> </p>
              </div>
            </div>    
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <a href="bed.php"><i class="fa fa-bed" style="font-size:48px"></i></a>
              </div>
              <div class="media-body p-2 mt-3">
                <a href="bed.php"><h3 class="heading">Bed Booking</h3></a>
                <p> </p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
               <a href="vaccine.php"><i class="fas fa-capsules" style="font-size:48px"></i></a>
              </div>
              <div class="media-body p-2 mt-3">
                <a href="vaccine.php"><h3 class="heading">Vaccination</h3></a>
                <p></p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                 <a href="hplasma.php"><i class=" fas fa-burn" style="font-size:48px"></i></a>
              </div>
              <div class="media-body p-2 mt-3">
               <a href="hplasma.php"><h3 class="heading">Plasma Donation</h3></a>
                <p></p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <a href="not.php"><i class=" fa fa-file" style="font-size:48px"></i></a>
              </div>
              <div class="media-body p-2 mt-3">
                <a href="not.php"><h3 class="heading">Notification</h3></a>
                <p></p>
              </div>
            </div>    
          </div>   
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-3">Meet our Experienced Doctors</h2>
            <p>Celebrating the contributions of our doctors is important, you should take this day to also think about the humanity and kindness with which they serve you</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/person_5.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Dr.Ashish</a></h3>
      					<span class="position">Senior Doctor</span>
      					<div class="text">
	        				<ul class="ftco-social">
			              <li class="ftco-animate"><span class="icon-twitter"></span></li>
			              <li class="ftco-animate"><span class="icon-facebook"></span></li>
			              <li class="ftco-animate"><span class="icon-instagram"></span></li>
			              <li class="ftco-animate"><span class="icon-google-plus"></span></li>
			            </ul>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/person_6.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Dr.Arun Sachdeva</a></h3>
      					<span class="position">Surgeon</span>
      					<div class="text">
	        				<ul class="ftco-social">
			              <li class="ftco-animate"><span class="icon-twitter"></span></li>
			              <li class="ftco-animate"><span class="icon-facebook"></span></li>
			              <li class="ftco-animate"><span class="icon-instagram"></span></li>
			              <li class="ftco-animate"><span class="icon-google-plus"></span></li>
			            </ul>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/person_7.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Dr.Surabhi</a></h3>
      					<span class="position">Senior Analyst</span>
      					<div class="text">
	        				<ul class="ftco-social">
			              <li class="ftco-animate"><span class="icon-twitter"></span></li>
			              <li class="ftco-animate"><span class="icon-facebook"></span></li>
			              <li class="ftco-animate"><span class="icon-instagram"></span></li>
			              <li class="ftco-animate"><span class="icon-google-plus"></span></li>
			            </ul>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(images/person_8.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Dr.Ashok Upadhyay</a></h3>
      					<span class="position">Surgeon</span>
      					<div class="text">
	        				<ul class="ftco-social">
			              <li class="ftco-animate"><span class="icon-twitter"></span></li>
			              <li class="ftco-animate"><span class="icon-facebook"></span></li>
			              <li class="ftco-animate"><span class="icon-instagram"></span></li>
			              <li class="ftco-animate"><span class="icon-google-plus"></span></li>
			            </ul>
	        			</div>
      				</div>
        		</div>
        	</div>
        </div>        
      </div>
    </section>
    
    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-md-3 aside-stretch py-5">
            <div class=" heading-section heading-section-white ftco-animate pr-md-4">
              <h2 class="mb-3">Achievements</h2>
              <p style="text-shadow: 2px 7px 5px rgba(0,0,0,0.3), 
    0px -4px 10px rgba(255,255,255,0.3)">Smile caused by satisfaction.</p>
            </div>
          </div>
          <div class="col-md-9 py-5 pl-md-5">
            <div class="row">
              <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                  <div class="text">
                    <strong class="number" data-number="8">0</strong>
                    <span><mark style=" border-radius: 5px 20px 5px">Approved Hospitals</mark></span>
                  </div>
                </div>
              </div>
              <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                  <div class="text">
                    <strong class="number" data-number="200">0</strong>
                    <span><mark style=" border-radius: 5px 20px 5px">Qualified Doctors</mark></span>
                  </div>
                </div>
              </div>
              <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                  <div class="text">
                    <strong class="number" data-number="2000">0</strong>
                    <span><mark style=" border-radius: 5px 20px 5px">Happy Customers</mark></span>
                  </div>
                </div>
              </div>
              <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                  <div class="text">
                    <strong class="number" data-number="400">0</strong>
                    <span><mark style=" border-radius: 5px 20px 5px">Patients per month</mark></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<style type="text/css">
#wrapper { 
  width: 920px; 
  height: 350px; 
  margin: 0 auto; 
} 
#home1 { 
  width: 400px; 
  height: 300px; 
  float: left; 
} 
#home2 { 
  width: 400px; 
  height: 300px; 
  float: right; 
}
</style>

<section>
  <div id="wrapper"> 
  <div id="home1">
   <video width="400" height="300" poster="images/kl.jpg" controls="controls" preload="none"> 
     <source type="video/mp4" src="video/3.mp4" /> 
   </video>
   <p><b>Types of Covid Vaccines</b></p> 
  </div>
  <div id="home2">
   <video width="400" height="300" poster="images/bl.jpg" controls="controls" preload="none"> 
     <source type="video/mp4" src="video/2.mp4" /> 
   </video>
   <p><b>Development of Covid-19 vaccine</b></p>
  </div> 
</div>
</section>

<section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-2">Testimony</h2>
            <span class="subheading">Our happy customer says</span>
          </div>
        </div>
        <div class="row justify-content-center ftco-animate">
          <div class="col-md-8">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">Luckily, I came across COVIDSHIELD website, which gave me instant access to our hospital doctors online.</p>
                    <p class="name">Suhan Shetty</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">The services that I receive is excellent. Doctor and the staff are friendly and ensure that I am properly informed about my health and care.</p>
                    <p class="name">Pooja hegade</p>
                    <span class="position">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">Finally ! I donated plasma to the COVID patient.Thank you COVIDSHIELD</p>
                    <p class="name">Nidhima</p>
                    <span class="position">Artist</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_4.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">I got vaccinated.Much thanks to COVIDSHIELD</p>
                    <p class="name">Kabir</p>
                    <span class="position">Musician</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_5.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">I belong to the rural area.Through this website It was easy for me to book the bed for my father.Now my father is doing fine...Gratitude always</p>
                    <p class="name">Ramanna</p>
                    <span class="position">Farmer</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
						<a href="test.php" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-1.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="bed.php" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-2.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="vaccine.php" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="plasma.php" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
        </div>
    	</div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-2">Latest Blog</h2>
            
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text d-flex py-4">
                <div class="meta mb-3">
                  <div><a href="#">Sep 20, 2021</a></div>
                </div>
                <div class="desc pl-3">
	                <h3 class="heading"><a href="https://www.gavi.org/vaccineswork/pandemic-culture/bangalore-banksy-art-against-darkness" target="_blank">The Bengaluru street artist Baadal Nanjundaswamy is well-loved for his public-spirited art interventions.<br>Lockdown managed to quieten him for a moment – but only for a moment.</a></h3>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-5 ftco-animate">
            <div class="blog-entry" data-aos-delay="100">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text d-flex py-4">
                <div class="meta mb-3">
                  <div><a href="#">Apr. 7, 2020</a></div>
                </div>
                <div class="desc pl-3">
	                <h3 class="heading"><a href="https://www.forbesindia.com/blog/life-in-the-lockdown/eat-pray-sanitise/" target="_blank"><b>Eat, Pray, Sanitise</b><br>
                    When little else offers comfort, food—if you’re privileged to access it—assumes huge meaning</a></h3>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="200">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text d-flex py-4">
                <div class="meta mb-3">
                  <div><a href="#">Jul. 19, 2021</a></div>
                </div>
                <div class="desc pl-3">
	                <h3 class="heading"><a href="https://timesofindia.indiatimes.com/india/sc-asks-kerala-to-file-reply-over-relaxation-of-covid-norms-for-eid/articleshow/84544567.cms" target="_blank">SC asks Kerala to file<br> reply over relaxation of <br>Covid norms for Eid</h3>
	              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
	
    <section class="ftco-gallery">
      <div class="container-wrap">
        <div class="row no-gutters">
          <div class="col-md-4 ftco-animate">
            <a href="https://www.artofliving.org/in-en/projects/disaster-relief/7-inspiring-stories-of-volunteer-during-coronavirus" target="_blank" class="gallery img d-flex align-items-center" style="background-image: url(images/i.jpg);">
              <div class="icon mb-4 d-flex align-items-center justify-content-center">
                <span class="icon-search"></span>
              </div>
            </a>
          </div>
          <div class="col-md-3 ftco-animate">
            <a href="https://www.artofliving.org/in-en/projects/disaster-relief/7-inspiring-stories-of-volunteer-during-coronavirus" target="_blank" class="gallery img d-flex align-items-center" style="background-image: url(images/i2.jpg);">
              <div class="icon mb-4 d-flex align-items-center justify-content-center">
                <span class="icon-search"></span>
              </div>
            </a>
          </div>
          <div class="col-md-5 ftco-animate">
            <a href="https://www.artofliving.org/in-en/projects/disaster-relief/7-inspiring-stories-of-volunteer-during-coronavirus" target="_blank" class="gallery img d-flex align-items-center" style="background-image: url(images/i4.jpg);">
              <div class="icon mb-4 d-flex align-items-center justify-content-center">
                <span class="icon-search"></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

  <?php include('footer.php'); ?>
  
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body> 
</html>