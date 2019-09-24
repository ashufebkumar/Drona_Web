





<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--bootstrap-->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     <!--font-->
     <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>

     <link rel="stylesheet" href="./stylesheet/main_styles.css">
     <link rel="stylesheet" href="./stylesheet/index_styles.css">
     <link rel="stylesheet" href="./stylesheet/index_2_style.css">
      <link rel="stylesheet" href="./stylesheet/fonts.css">
      <link rel="stylesheet" href="./stylesheet/Medium_slider.css">
	  
	  <style>
			#header {
				color: black;

				.navigation {
					font-size: 12px;
				}

				.logo {
					width: 300px;
				}
			}
		</style>

      <title>DronaMaps</title>
    <link rel="icon" type="image/gif/png" href="./source/image/Title_icon.png">
  </head>

  <body onmousemove="moveMask(event)">

        <!--

        -->
       
      <div class="Intro_cont container-fluid main_nav_container " >
         <div class="Nav_identifier Nav_container container" id="Nav_identifier" onmouseover="moveBoolF()" onmouseout="moveBoolT()" >
                    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                    <a href="#" class="navbar-brand">
                      <img class="Logo_navbar" src="./source/image/Company_logo.png" alt="logo"  width="50" height ="50">
                     </a>
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
            
                    <!--remove css from img-->
                    <div class="collapse navbar-collapse" id="navbarMenu">
                        <ul class="navbar-nav ml-auto" >

                          <li class="nav-item">
                             <div class="dropdown">
                                <a href='javascript: void(0);' class="nav-link" >Solutions</a>
                                <div class="dropdown-content">
                                    <a href="./pipline/recommedation.html">Preflight Recommendation</a>
                                    <a href="./pipline/settlement_analytics.html">Settlement Analysis</a>
                                    <a href="./pipline/agriculture_analytics.html">Precision Agriculture Analytics</a>

                                </div>
                            </div>
                          </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" >Platform</a>
                            </li>
                          <li class="nav-item">
                              <a href="#" class="nav-link" >Stories</a>
                           </li>
                           
                          <li class="nav-item">
                              <a href="./contactUs/contactUs.html" class="nav-link" >Contact us</a>
                           </li>
                           
                          <li class="nav-item">
                              <a href="#" class="nav-link" >Sign in</a>
                           </li>
                        </ul>
                      </div>
                  </nav>
            </div>
            <!-- add background image in class INtro_cont-->
        <div class="row" >
          <div class="col-12" style="float: right;">
            <div class="Intro_desc container padding" onmouseover="moveBoolF()" onmouseout="moveBoolT()">
             <div class="H_theme_line"></div>
              <h2 class="padding display-5 headfont">Enhance your Drone maps with AI.</h2>
              <p>End-to-end platform to collect process, visualize drone data</p>
              <p>Deep learning powered insights to make your maps meaningful</p>  
              <button type="button" class="knowmore">
                <span class="go" style="position:absolute; display: block"></span>
                <span  class="knowmore_text white bold rem12">Know more</span>
                  <span class="text_opa_low bold rem12">Know more</span>
            </button>
              </div>        
            </div>
          </div>
        </div>
        
        <div id="Mask" class=" container-fluid"></div>
        <div id="Mask_border"></div>

      <!--

      -->

      <div class="Comp_cont container padding-top justify-content-center row ">
          <div class="content">
            <div class="container row">
                <!--<div class="col-sm-12 col-md-4"></div>-->
                <div class="col-12  d-flex justify-content-center">
                    <!--<img src="source/image/DronaLum1.png" alt="Drona_logo">-->

                    <div class="comp_img">

                    </div>
                    <!--<div class="glow">

                    </div>-->
                </div>
                <!--<div class="col-sm-12 col-md-4"></div>-->
            </div>
              <br>
              <!--<img src="./source/Svg/Contours2.svg" class="contour">-->
            <div class="container row">
              <div class="col-lg-12"><br>
                <p class="text-center" style="color: #e0e0e0; float: top;">
                    <span class="headfont">Raw data at scale to insights</span><br><br><br>
                    Maps make places on the edges of imagination graspable and placable. As drones become a popular tool for inexpensive data collection,
                    there is a greater need for solutions like ours that can digest this data and create useful information from them.  We empower decision makers
                    with robust insights using a combination of legacy geospatial approaches made more effective with deep learning. Our comprehensive solutions
                    make mapping scalable, accurate, and accessible.
                </p>
              </div>
            </div>
          </div>
      </div>
      <!--

      -->

      <!--<div class="Product_cont container-fluid padding justify-content-center" >
          <div style="background: rgba(255,255,255,0.5)">
           <div class="container " >
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding ">
                    <h2 class="display-4 text-center headfont"><b>AI Analytics For Drone Maps</b></h2>
                </div>

                <div class="Product_desc col-xs-12 col-sm-12 col-md-6 col-lg-6 text-justify padding-lg-top">

                  <p class="padding-top">We are an enterprise platform to help drone users extract analytics from
                      imagery captured through drones. We provide recommendation engines for planning flights and
                      applying ground control points after the images are captured, we optimise processing using deep
                      learning algorithms for data sorting and map creation. In the end, we have automated toolkits
                      for extraction of map properties for settlements (plot boundaries, roads, land use patterns etc)
                      and precision agriculture (plant count and health).
                  </p>
                </div>

                <div class="Product_video col-xs-12 col-sm-12 col-md-6 col-lg-6 padding-lg-top d-flex justify-content-center ">
                    <img src="./source/image/video_thumbnail.jpg" alt="video_thumbnail" class="walkthrough">

                                <iframe width="400" height="220" 
                            src="https://www.youtube.com/embed/nElEUni7nHM">
                            </iframe>  
                        use youtube plugin to embed the video
                </div>     
            </div>
          </div>
          </div>
        </div>


      -->

      <!--
  
      -->

      <div class="Pipeline_cont">
        <div id="myCarousel" class="carousel slide" data-ride="false" style="background: black">
            <div class="Pipeline_nav justify-content-center">
            <ol class="carousel-indicators">
                <li id="flight" data-target="#myCarousel" data-slide-to="0" class="active thumb">
                    <div class="thumbnail">
                        <h6>Preflight</h6>
                        <div id="selection1" class="H_theme_line_2_active" >

                        </div>
                    </div>
                </li>
                <li id="construction" data-target="#myCarousel" data-slide-to="1" class="thumb">
                    <div class="thumbnail" style="right:10px;">
                        <h6>Reconstruction</h6>
                        <div id="selection2" class="H_theme_line_2_5">

                        </div>
                    </div>
                </li>
                <li id="analytic" data-target="#myCarousel" data-slide-to="2" class="thumb">
                    <div class="thumbnail">
                        <h6>Analytics</h6>
                        <div id="selection3" class="H_theme_line_2_5">

                        </div>
                    </div>
                </li>
            </ol>
            </div>
            <div class="video_background"  >
                <video   preload="auto" autoplay  loop  muted id="myvideo" >
                    <source src="./source/video/gradent_pink.mp4"  type="video/mp4">
                </video>
            </div>

            <!------------------------------------------ sketchfab section modified as text getting disappeared while considering mobile size window------------------------------------------------------------------>
			<div class="row">
				<div class="col-sm-6">
					<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="https://sketchfab.com/models/3b8bdb7c457e4704a2a11a68ee64fc46/embed?autospin=0.2&amp;autostart=1&amp;preload=1&amp;transparent=1&amp;ui_controls=0&amp;ui_infos=0" frameborder="0" allow="autoplay; fullscreen; vr" mozallowfullscreen="true" webkitallowfullscreen="true">
					</iframe>   
                    </div>
				</div>
				<div class="desc col-sm-6" >
					
					<span style="display: inline-block ">
						<p class="text-center"; style="display: inline-block;margin: 7.5%;position:relative">
							Use our recommendation engine to plan your flight and
							ground control points for desired map accuracy and resolution.
							We are an enterprise platform to help drone users extract analytics from
							imagery captured through drones. We provide recommendation engines for planning flights and
							applying ground control points
						</p>
					</span>
					<button type="button" class="knowmore">
                        <span class="go" style="position:absolute; display: block"></span>
                        <span style="" class="bold rem12 knowmore_text">Know more</span>
                        <span class="text_opa bold rem12">Know more</span>
                    </button>
					
				</div>
			</div>
			<!-------------------------------------------------------------------------------------------- Modified section end ------------------------------------------------------------------------------------------------->
			<!--
				
				 <div class="carousel-inner">

                <div class="carousel-item active">
                    
                    <div class="row info container-fluid " id="preflight">
                        <div class="col-12 justify-content-center row" style="display: flex">
                            <div class="info_sub col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                
                                <div class="sketchfab-embed-wrapper"><iframe width="640" height="480" src="https://sketchfab.com/models/3b8bdb7c457e4704a2a11a68ee64fc46/embed?autospin=0.2&amp;autostart=1&amp;preload=1&amp;transparent=1&amp;ui_controls=0&amp;ui_infos=0" frameborder="0" allow="autoplay; fullscreen; vr" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>

                                    <p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A;">
                                        <a href="https://sketchfab.com/3d-models/full-without-foliage-3b8bdb7c457e4704a2a11a68ee64fc46?utm_medium=embed&utm_source=website&utm_campaign=share-popup" target="_blank" style="font-weight: bold; color: #1CAAD9;">Full Without Foliage</a>
                                        by <a href="https://sketchfab.com/dronamaps?utm_medium=embed&utm_source=website&utm_campaign=share-popup" target="_blank" style="font-weight: bold; color: #1CAAD9;">DronaMaps</a>
                                        on <a href="https://sketchfab.com?utm_medium=embed&utm_source=website&utm_campaign=share-popup" target="_blank" style="font-weight: bold; color: #1CAAD9;">Sketchfab</a>
                                    </p>
                                </div>
                            </div>
                            <div class="desc col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                
                                <span style="display: inline-block">
                                    <p class="quote">
                                        Use our recommendation engine to plan your flight and
                                        ground control points for desired map accuracy and resolution.
                                        We are an enterprise platform to help drone users extract analytics from
                                        imagery captured through drones. We provide recommendation engines for planning flights and
                                        applying ground control points
                                    </p>
                                </span>
                               
                                <button type="button" class="knowmore">
                                    <span class="go" style="position:absolute; display: block"></span>
                                    <span style="" class="bold rem12 knowmore_text">Know more</span>
                                    <span class="text_opa bold rem12">Know more</span>

                                </button>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="carousel-item">
                   
                    <div class="info container-fluid" id="reconstruction">
                        <div class="col-12 justify-content-center row" style="display: flex">
                        <div class="info_sub col-lg-6 col-md-6 col-sm-12 col-xs-12">
                           
                            <div class="sketchfab-embed-wrapper">
							<iframe width="640" height="480" src="https://sketchfab.com/models/9c994d911d844bf3b23dc3e2d8ecd6ca/embed?autostart=1&amp;preload=1&amp;transparent=1&amp;ui_controls=0&amp;ui_infos=0" 
							frameborder="0" allow="autoplay; fullscreen; vr" mozallowfullscreen="true" webkitallowfullscreen="true">
							</iframe>

                                <p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A;">
                                    <a href="https://sketchfab.com/3d-models/3-point-cloud-9c994d911d844bf3b23dc3e2d8ecd6ca?utm_medium=embed&utm_source=website&utm_campaign=share-popup" target="_blank" style="font-weight: bold; color: #1CAAD9;">3 Point Cloud</a>
                                    by <a href="https://sketchfab.com/dronamaps?utm_medium=embed&utm_source=website&utm_campaign=share-popup" target="_blank" style="font-weight: bold; color: #1CAAD9;">DronaMaps</a>
                                    on <a href="https://sketchfab.com?utm_medium=embed&utm_source=website&utm_campaign=share-popup" target="_blank" style="font-weight: bold; color: #1CAAD9;">Sketchfab</a>
                                </p>
                            </div>
                        </div>
                        <div class="desc col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            
                            <span style="display: inline-block">
                                <p class="quote">
                                    We streamline the process of image reconstruction by applying deep learning
                                    for sorting of images at the beginning of the funnel. The data is broken and reassembled
                                    intelligently into manageable chunks. We optimise processing using deep
                                    learning algorithms for data sorting and map creation.
                                </p>
                            </span>
                            <button type="button" class="knowmore">
                                <span class="go" style="position:absolute; display: block"></span>
                                <span style="" class="bold rem12 knowmore_text">Know more</span>
                                <span class="text_opa bold rem12">Know more</span>
                            </button>
                        </div>
                        </div>
                    </div>
                </div>


                <div class="carousel-item">
                   
                    <div class="info container-fluid" id="analytics">
                        <div class="col-12 justify-content-center row" style="display: flex">
                            <div class="info_sub col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                
                                <div class="sketchfab-embed-wrapper"><iframe width="640" height="480" src="https://sketchfab.com/models/93760d8297264eb184e5c3df52142d00/embed?autospin=0.2&amp;autostart=1&amp;preload=1&amp;transparent=1&amp;ui_controls=0&amp;ui_infos=0" frameborder="0" allow="autoplay; fullscreen; vr" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>

                                    <p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A;">
                                        <a href="https://sketchfab.com/3d-models/full-4-f-93760d8297264eb184e5c3df52142d00?utm_medium=embed&utm_source=website&utm_campaign=share-popup" target="_blank" style="font-weight: bold; color: #1CAAD9;">Full 4 F</a>
                                        by <a href="https://sketchfab.com/dronamaps?utm_medium=embed&utm_source=website&utm_campaign=share-popup" target="_blank" style="font-weight: bold; color: #1CAAD9;">DronaMaps</a>
                                        on <a href="https://sketchfab.com?utm_medium=embed&utm_source=website&utm_campaign=share-popup" target="_blank" style="font-weight: bold; color: #1CAAD9;">Sketchfab</a>
                                    </p>
                                </div>
                            </div>
                            <div class="desc col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                
                                <span style="display: inline-block">
                                    <p class="quote">
                                        We have massive experience in large-scale mapping and we learned that
                                        the time and cost center was manual extraction of geospatial analytics.
                                        Therefore, we automated analytics for settlements like plot boundaries, roads,
                                        trees, land use and agriculture like plant health & plant count.
                                        We have automated toolkits for extraction of map properties for settlements
                                        (plot boundaries, roads, land use patterns etc) and precision agriculture (plant count and health).
                                    </p>
                                </span>
                               
                                <div class="knowmoresetag">
                                    <button type="button" class="knowmore">
                                        <span class="go" style="position:absolute; display: block"></span>
                                        <span style="" class="bold rem12 knowmore_text">Settlements</span>
                                        <span class="text_opa bold rem12">Settlements</span>
                                    </button><br class="sepration10">
                                    <button type="button" class="knowmore">
                                        <span class="go" style="position:absolute; display: block"></span>
                                        <span style="" class="bold rem12 knowmore_text">Agriculture</span>
                                        <span class="text_opa bold rem12">Agriculture</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                
            </div>
			
			-->
        </div>
    </div>

      <!--

      -->
        <!--
      <div class="Blog_cont container-fluid justify-content-center" >
        <div class="row jumbotron">
            <div class="container">
                <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <h2 class="display-3 text-center color_azure headfont">INSPIRING DRONE PROJECTS</h2>
          </div>

            <div class="H_theme_line"></div>
            
           
            <div class="Blog_area container" >
              <div class="row">

                <div class="Blog col-xs-12 col-sm-12 col-md-4 col-lg-4 d-flex justify-content-center padding">
                    <div class=" card" style="width: 18rem">
                        <img class="card-img-top" src="./source/image/Medium_ (1).png" alt="medium_Blog_image" height="150px">
                        <div class="card-body">
                          <h3 class="card-title headfont">Drones Based maps for Smart Cities:</h3>
                           <p class="card-text"></p>
                           <button class="Readmore">ReadMore</button>
                        </div>
                     </div>
                </div>
                
                <div class="Blog col-xs-12 col-sm-12 col-md-4 col-lg-4 d-flex justify-content-center padding">
                    <div class=" card" style="width: 18rem">
                        <img class="card-img-top" src="./source/image/Medium_ (2)1.png" alt="medium_Blog_image" height="150px">
                        <div class="card-body">
                            <h3 class="card-title headfont">Dronafarms: </h3>
                             <p class="card-text">Wave of Green Revolution powered by grassrots data</p>
                             <button class="Readmore">ReadMore</button>
                         </div>
                     </div>  
                </div>

                <div class="Blog col-xs-12 col-sm-12 col-md-4 col-lg-4 d-flex justify-content-center padding">
                    <div class=" card" style="width: 18rem">
                        <img class="card-img-top"  src="./source/image/Medium_(3)1.png" alt="medium_Blog_image" height="150px">
                        <div class="card-body">
                            <h3 class="card-title headfont">The Future of Urban Planning:</h3>
                             <p class="card-text">DroneBased 3D maps and piplines in lucknow</p>
                             <button class="Readmore">ReadMore</button>
                         </div>
                     </div>
                </div>
     
              </div>
              add blogs
              </div>
    
        </div>
            </div>
        </div>
      </div>
        -->
      <!--

      -->

        <div class="container-fluid Blog_section">
            <div class="container padding-lg-top">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding ">
                    <h2 class="display-4 text-center headfont">Stories That Inspire Us</h2>
                </div>
            </div>
            <div id="Medium_blog" class="Medium_blog carousel slide" data-ride="false">
                <div class="carousel-inner">
                    <div class="carousel-item active"  >
                        <div class="card-deck">
                            <div class="card">
                                <img src="https://ik.imagekit.io/1tz106e4j/source/image/Medium___1__IhIYxS79aL.jpg" class="card-img-top" alt="...">
                                <a href="https://medium.com/dronamaps/drones-based-maps-for-smart-cities-8cb99adbd130" target="_blank">
                                    <div class="card-img-overlay">
                                        <h5 class="card-title" style="color:white;">Smart Cities</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="card">
                                <img src="https://ik.imagekit.io/1tz106e4j/source/image/Medium___2_1_XeXpj4rrdp.jpg" class="card-img-top" alt="...">
                                <a href="https://medium.com/dronamaps/dronafarms-second-wave-of-green-revolution-powered-by-grassroots-data-865158d28e7a" target="_blank">
                                    <div class="card-img-overlay">
                                        <h5 class="card-title" style="color:white;">Drona Farms</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="card">
                                <img src="https://ik.imagekit.io/1tz106e4j/source/image/Medium__3_1_UOOdpVEFsW.jpg" class="card-img-top" alt="...">
                                <a href="https://medium.com/dronamaps/the-future-of-urban-planning-drone-based-3d-maps-and-pipelines-in-lucknow-26d73f6e4cd6" target="_blank">
                                    <div class="card-img-overlay">
                                        <h5 class="card-title" style="color:white;">Urban Planning</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="card">
                                <img src="https://ik.imagekit.io/1tz106e4j/source/image/smart_village_ZXhcUIjDIQ.jpg" class="card-img-top" alt="...">
                                <a href="https://medium.com/dronamaps/mapping-the-digital-groundwork-for-the-smart-villages-of-india-465e0a54bc69" target="_blank">
                                    <div class="card-img-overlay">
                                        <h5 class="card-title" style="color:white;">Smart Villages</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="card">
                                <img src="https://ik.imagekit.io/1tz106e4j/source/image/Ayodhya_Hr52pD_dfu.jpg" class="card-img-top" alt="...">
                                <a href="https://medium.com/dronamaps/ayodhya-3million-people-3-days-7c299c371d8c" target="_blank">
                                    <div class="card-img-overlay">
                                        <h5 class="card-title" style="color:white;">Ayodhya</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" >
                        <div class="card-deck">
                            <div class="card">
                                <img src="https://ik.imagekit.io/1tz106e4j/source/image/polavaram_dWE7_6RaCW.gif" class="card-img-top" alt="...">
                                <a href="https://medium.com/dronamaps/using-drones-to-reimagine-rehabilitation-and-resettlement-polavaram-dam-33acad99affc" target="_blank">
                                    <div class="card-img-overlay">
                                        <h5 class="card-title" style="color:white;">Rehabilitation and Resettlement</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="card">
                                <img src="https://ik.imagekit.io/1tz106e4j/source/image/Medium___1__IhIYxS79aL.jpg" class="card-img-top" alt="...">
                                <a href="https://medium.com/dronamaps/drones-based-maps-for-smart-cities-8cb99adbd130" target="_blank">
                                    <div class="card-img-overlay">
                                        <h5 class="card-title" style="color:white;">Smart Cities</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="card">
                                <img src="https://ik.imagekit.io/1tz106e4j/source/image/Medium___2_1_XeXpj4rrdp.jpg" class="card-img-top" alt="...">
                                <a href="https://medium.com/dronamaps/dronafarms-second-wave-of-green-revolution-powered-by-grassroots-data-865158d28e7a" target="_blank">
                                    <div class="card-img-overlay">
                                        <h5 class="card-title" style="color:white;">Drona Farms</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="card">
                                <img src="https://ik.imagekit.io/1tz106e4j/source/image/Medium__3__aP44cA1TB1.jpg" class="card-img-top" alt="...">
                                <a href="https://medium.com/dronamaps/the-future-of-urban-planning-drone-based-3d-maps-and-pipelines-in-lucknow-26d73f6e4cd6" target="_blank">
                                    <div class="card-img-overlay">
                                        <h5 class="card-title" style="color:white;">Urban Planning</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="card">
                                <img src="https://ik.imagekit.io/1tz106e4j/source/image/smart_village_ZXhcUIjDIQ.jpg" class="card-img-top" alt="...">
                                <a href="https://medium.com/dronamaps/mapping-the-digital-groundwork-for-the-smart-villages-of-india-465e0a54bc69" target="_blank">
                                    <div class="card-img-overlay">
                                        <h5 class="card-title" style="color:white;">Smart Villages</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" >
                        <div class="card-deck">
                            <div class="card">
                                <img src="https://ik.imagekit.io/1tz106e4j/source/image/Ayodhya_Hr52pD_dfu.jpg" class="card-img-top" alt="...">
                                <a href="https://medium.com/dronamaps/ayodhya-3million-people-3-days-7c299c371d8c" target="_blank">
                                    <div class="card-img-overlay">
                                        <h5 class="card-title" style="color:white;">Ayodhya</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="card">
                                <img src="https://ik.imagekit.io/1tz106e4j/source/image/polavaram_dWE7_6RaCW.gif" class="card-img-top" alt="...">
                                <a href="https://medium.com/dronamaps/using-drones-to-reimagine-rehabilitation-and-resettlement-polavaram-dam-33acad99affc" target="_blank">
                                    <div class="card-img-overlay">
                                        <h5 class="card-title" style="color:white;">Rehabilitation and Resettlement</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="card">
                                <img src="https://ik.imagekit.io/1tz106e4j/source/image/Medium___1__IhIYxS79aL.jpg" class="card-img-top" alt="...">
                                <a href="https://medium.com/dronamaps/drones-based-maps-for-smart-cities-8cb99adbd130" target="_blank">
                                    <div class="card-img-overlay">
                                        <h5 class="card-title" style="color:white;">Smart Cities</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="card">
                                <img src="https://ik.imagekit.io/1tz106e4j/source/image/Medium___2_1_XeXpj4rrdp.jpg" class="card-img-top" alt="...">
                                <a href="https://medium.com/dronamaps/dronafarms-second-wave-of-green-revolution-powered-by-grassroots-data-865158d28e7a" target="_blank">
                                    <div class="card-img-overlay">
                                        <h5 class="card-title" style="color:white;">Drona Farms</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="card">
                                <img src="https://ik.imagekit.io/1tz106e4j/source/image/Medium__3__aP44cA1TB1.jpg" class="card-img-top" alt="...">
                                <a href="https://medium.com/dronamaps/the-future-of-urban-planning-drone-based-3d-maps-and-pipelines-in-lucknow-26d73f6e4cd6" target="_blank">
                                    <div class="card-img-overlay">
                                        <h5 class="card-title" style="color:white;">Urban Planning</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#Medium_blog" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#Medium_blog" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


        </div>
        <div class="Media_mention container">
            <div class="row">
                <div class="container padding-lg-top">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                        <h2 class="display-4 text-center headfont">Media Mentions</h2>
                    </div>
                </div>
                <div class="flex-container">
                    <div><a href="http://www.businessworld.in/article/i5-Summit-IIM-And-IIT-Indore/25-06-2018-152901/" target="_blank"><img src="https://ik.imagekit.io/1tz106e4j/source/image/icon/unnamed_AcmhkIAxC.jpg"></a></div>
                    <div class="Fd"><a href="https://factordaily.com/india-drone-marketmap/"><img src="./source/Svg/factoryDaily.svg" target="_blank"></a></div>
                     <div class="cnbc"><a href="https://www.cnbctv18.com/videos/startup/young-turks-to-watch-out-for-in-2019-1811081.htm" target="_blank"><img src="https://ik.imagekit.io/1tz106e4j/source/image/icon/CNBC_Logo_NFrd7J0z4.png"></a></div>
                    <div class="hindu"><a href="https://www.thehindu.com/sci-tech/3d-maps-at-your-fingertips/article24035684.ece" target="_blank"><img src="https://ik.imagekit.io/1tz106e4j/source/image/icon/HINDU_Logo-min_KlSN0P9dkO.png"></a></div>
                    <div class="your_story"><a href="https://yourstory.com/2018/05/early-stage-startup-jiogennexts-summer-cohort" target="_blank"><img src="https://ik.imagekit.io/1tz106e4j/source/image/icon/output-onlinejpgtools_rRUgu22Tl.jpg"></a></div>

                    <div class="inc42"><a href="https://inc42.com/buzz/nasscom-innotrek-2018-meet-the-40-startups-heading-to-silicon-valley/" target="_blank"><img src="./source/Svg/inc_42_m2.svg"></a></div>
                </div>
            </div>
            <div class="row">
                <div class="container padding-lg-top partners&clients">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h2 class="display-4 text-center headfont heading">Partners & Clients</h2><br><br>
                    </div>
                </div>
                <div class="flex-containerP&C">
                    <div class="Jhu"><a href="#" target="_blank"><img src="https://ik.imagekit.io/1tz106e4j/source/image/icon/Hopkins_logo_horizontal-min_ZVM3ith4r.png"></a></div>
                    <div class="Reliance"><a href="#" target="_blank"><img src="https://ik.imagekit.io/1tz106e4j/source/image/partners/Reliance_logo-min_tczE7Ug9Z.jpg"></a></div>
                    <div class="esri"><a href="#" target="_blank"><img src="https://ik.imagekit.io/1tz106e4j/source/image/icon/esri_logo_black_ntdnvnrjWg.png"></a></div>
                    <div class="Sap"><a href="#" target="_blank"><img src="https://ik.imagekit.io/1tz106e4j/source/image/icon/kot_8q15TWO2w.png"></a></div>



                    <div class="Jio"><a href="#" target="_blank"><img src="./source/image/partners/jio-gennext.png"></a></div>

                </div>
            </div>
            <div class="row padding-left-right padding-left">
                <div class="flex-containerP&C">

                    <div class="Sai"><a href="#" target="_blank"><img src="./source/image/partners/Sai.png"></a></div>
                    <div class="AP"><a href="#" target="_blank"><img src="https://ik.imagekit.io/1tz106e4j/source/image/icon/Govt_of_AP_Logo_Black-min_W6sz1CEs5i.jpg"></a></div>
                    <div class="UP"><a href="#" target="_blank"><img src="./source/image/partners/Govt%20UP.png"></a></div>
                    <div class="MP"><a href="#" target="_blank"><img src="./source/image/partners/Govt%20MP.png"></a></div>
                    <div class="Kotak"><a href="#" target="_blank"><img src="https://ik.imagekit.io/1tz106e4j/source/image/icon/kot_8q15TWO2w.png"></a></div>

                </div>
            </div>
        </div>
        <!--

      -->
      <div class="Touch_cont container-fluid">
        <div class="row jumbotron">
          <!--dock to left side-->
            <div class="container">
                <div class="row">
          <div class="col-12 mr-auto">
              <h2 class="display-4 headfont" >GET IN TOUCH</h2>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mr-auto">
              <br>
              <br>
              <p>We would love to hear from you</p>
              <br>
              <p></p>
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
          
        <!--Dock to right side-->
		
		
        <div class="Touch_details col-xs-12 col-sm-12 col-md-6 col-lg-6 ml-auto" >
          <form action="https://www.geeksforgeeks.org/about/" method="POST" id="GetInTouch_form" enctype="text/plain">
            <div class="form-group"></div>
            <div class="form-row padding-bottom" >
              <div class="col">
                  <input type="text"  class="form-control" name="name_touch" placeholder="Name" required>
              </div>
              <div class="col">
                  <input type="email" class="form-control" name="email_touch" placeholder="Email" required>
              </div>
            </div>
            <div class="form-row padding-bottom" >
              <div class="col">
                  <input type="text"  class="form-control" name="company_name" placeholder="Company" required>
              </div>
              <div class="col">
                  <input type="text"  class="form-control" name="industry_name" placeholder="Industry" required>
              </div>
            </div>

            <div class="form-row padding-bottom">
              <div class="col">
                  <textarea class="form-control" id="exampleFormControlTextarea1" name="chatMessage" rows="3" placeholder="Message"></textarea>
              </div>
            </div>
            
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Upload</span>
                </div>
                
                  <div class="custom-file">
                  <input type="file" class="custom-file-input" id="inputGroupFile04">
                  <label class="custom-file-label" for="inputGroupFile04">Choose KML file</label>
                  </div>

                <div class="input-group-append">
                  <input class="btn btn-outline-secondary" type="submit" name="test2" value='Submit'/>
                </div>
            </div>

          </form>
        </div>
      </div>
            </div>
        </div>
      </div>
      <!--

      -->
      <footer id="footer" >
          <div class="row container-fluid">   
           <div class="col-md-2 padding ">
              <img class="logo" src="./source/image/logo.png" alt="Logo">
           </div>
           <div class="col-md-6 padding ">
              <table>
                  <tr>
                      <td> <a href="">PRODUCT</a></td>
                      <td> <a href="">ABOUT</a></td>
                  </tr>
                  <tr>
                      <td><a href="">SOLUTIONS</a></td>
                      <td><a href="">NEWS</a></td>
                  </tr>
                  <tr>
                      <td><a href="">BLOG</a></td>
                  </tr>
              </table>
          </div>
          <div class="col-md-4 padding" >
              <ul class="copyright">
  
                  <li><a href=""><img class ="icons" src="./source/image/Facebook-logo3.png" alt="Facebook"></a>&nbsp; &nbsp;<a href=""><img class ="icons" src="./source/image/Twitter_logo_2.png" alt="Twitter"></a>&nbsp; &nbsp;<a href=""><img class="icons" src="./source/image/8.png" alt="LinkedIn"></a></li>
                  <li>Join our Community</li>
                  <li>Subscribe to our newsletter</li><br><br>
                  <li>Terms and Policy</li>
                  <li>&copy; 2019 Dronamaps, all right reserved</li>
              </ul>
          </div>
        </div>
      </footer>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./scripts/scroll.js"></script>
    <script src="./scripts/selection.js"></script>
    <script src="./scripts/Moveable_Button.js"></script>
    <script src="./scripts/Mask1.js"></script>
  </body>
</html>