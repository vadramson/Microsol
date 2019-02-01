<?php

include_once('ModelE/LoanModelE/Loan.php');
include_once('ModelE/LoanModelE/LoanManager.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Germania Fanion Microfinance</title>
  <link href="VIeW/css/bootstrap.min.css" rel="stylesheet">
  <link href="VIeW/css/animate.min.css" rel="stylesheet"> 
  <link href="VIeW/css/font-awesome.min.css" rel="stylesheet">
  <link href="VIeW/css/lightbox.css" rel="stylesheet">
  <link href="VIeW/css/main.css" rel="stylesheet">
  <link href="VIeW/css/buttons.css" rel="stylesheet">
<!--  <link href="VIeW/css/component.css" rel="stylesheet">-->
<!--  <link href="VIeW/css/default.css" rel="stylesheet">-->
  <link id="css-preset" href="VIeW/css/presets/preset1.css" rel="stylesheet"><!--
-->  <link href="VIeW/css/responsive.css" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="VIeW/images/favicon.png">
</head><!--/head-->

<body>

  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->

  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(VIeW/images/slider/1.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Welcome to <span>Germania Fanion</span></h1>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services"><span class="glyphicon glyphicon-info-sign"> Start now </span></a>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services"> <span class="glyphicon glyphicon-comment"> Talk to an agent </span></a>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="VIeW/Login.php"><span class="glyphicon glyphicon-log-in"> Login </span> </a>
          </div>
        </div>
        <div class="item" style="background-image: url(VIeW/images/slider/2.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Say Hello to <span>Oxygen</span></h1>
            <p class="animated fadeInRightBig">Bootstrap - Responsive Design - Retina Ready - Parallax</p>
           <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services"><span class="glyphicon glyphicon-info-sign"> Start now </span></a>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services"> <span class="glyphicon glyphicon-comment"> Talk to an agent </span></a>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services"><span class="glyphicon glyphicon-log-in"> Login </span> </a>
          </div>
        </div>
        <div class="item" style="background-image: url(VIeW/images/slider/3.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">We are <span>Creative</span></h1>
            <p class="animated fadeInRightBig">Bootstrap - Responsive Design - Retina Ready - Parallax</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services"><span class="glyphicon glyphicon-info-sign"> Start now </span></a>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services"> <span class="fa fa-comment-o"> Talk to an agent </span></a>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services"><span class="glyphicon glyphicon-log-in"> Login </span> </a>
          </div>
        </div>
        <div class="item" style="background-image: url(VIeW/images/slider/4.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">We are <span>Creative</span></h1>
            <p class="animated fadeInRightBig">Bootstrap - Responsive Design - Retina Ready - Parallax</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services"><span class="glyphicon glyphicon-info-sign"> Start now </span></a>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services"> <span class="glyphicon glyphicon-comment"> Talk to an agent </span></a>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#modaladd" data-toggle = "modal"><span class="glyphicon glyphicon-log-in"> Login </span> </a>
          </div> 
        </div>
        <div class="item" style="background-image: url(VIeW/images/slider/5.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">We are <span>Creative</span></h1>
            <p class="animated fadeInRightBig">Bootstrap - Responsive Design - Retina Ready - Parallax</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services"><span class="glyphicon glyphicon-info-sign"> Start now </span></a>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services"> <span class="glyphicon glyphicon-comment"> Talk to an agent </span></a>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services"><span class="glyphicon glyphicon-log-in"> Login </span> </a>
          </div>
        </div>
        <div class="item" style="background-image: url(VIeW/images/slider/6.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">We are <span>Creative</span></h1>
            <p class="animated fadeInRightBig">Bootstrap - Responsive Design - Retina Ready - Parallax</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services"><span class="glyphicon glyphicon-info-sign"> Start now </span></a>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services"> <span class="glyphicon glyphicon-comment"> Talk to an agent </span></a>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services"><span class="glyphicon glyphicon-log-in"> Login </span> </a>
          </div>
        </div>
        <div class="item" style="background-image: url(VIeW/images/slider/7.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">We are <span>Creative</span></h1>
            <p class="animated fadeInRightBig">Bootstrap - Responsive Design - Retina Ready - Parallax</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services"><span class="glyphicon glyphicon-info-sign"> Start now </span></a>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services"> <span class="glyphicon glyphicon-comment"> Talk to an agent </span></a>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services"><span class="glyphicon glyphicon-log-in"> Login </span> </a>
          </div>
        </div>
        <div class="item" style="background-image: url(VIeW/images/slider/8.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">We are <span>Creative</span></h1>
            <p class="animated fadeInRightBig">Bootstrap - Responsive Design - Retina Ready - Parallax</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services"><span class="glyphicon glyphicon-info-sign"> Start now </span></a>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services"> <span class="glyphicon glyphicon-comment"> Talk to an agent </span></a>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services"><span class="glyphicon glyphicon-log-in"> Login </span> </a>
          </div>
        </div>
        <div class="item" style="background-image: url(VIeW/images/slider/9.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">We are <span>Creative</span></h1>
            <p class="animated fadeInRightBig">Bootstrap - Responsive Design - Retina Ready - Parallax</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services"><span class="glyphicon glyphicon-info-sign"> Start now </span></a>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services"> <span class="glyphicon glyphicon-comment"> Talk to an agent </span></a>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services"><span class="glyphicon glyphicon-log-in"> Login </span> </a>
          </div>
        </div>
        <div class="item" style="background-image: url(VIeW/images/slider/10.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">We are <span>Creative</span></h1>
            <p class="animated fadeInRightBig">Bootstrap - Responsive Design - Retina Ready - Parallax</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services"><span class="glyphicon glyphicon-info-sign"> Start now </span></a>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services"> <span class="glyphicon glyphicon-comment"> Talk to an agent </span></a>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services"><span class="glyphicon glyphicon-log-in"> Login </span> </a>
          </div>
        </div>
        <div class="item" style="background-image: url(VIeW/images/slider/11.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">We are <span>Creative</span></h1>
            <p class="animated fadeInRightBig">Bootstrap - Responsive Design - Retina Ready - Parallax</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services"><span class="glyphicon glyphicon-info-sign"> Start now </span></a>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services"> <span class="glyphicon glyphicon-comment"> Talk to an agent </span></a>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services"><span class="glyphicon glyphicon-log-in"> Login </span> </a>
          </div>
        </div>
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

    </div><!--/#home-slider-->
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">
            <h1><img class="img-responsive" src="VIeW/images/logo.png" alt="logo"></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll active"><a href="#home">Home</a></li>
            <li class="scroll"><a href="#services">Service</a></li> 
            <li class="scroll"><a href="#about-us">About Us</a></li>                     
            <li class="scroll"><a href="#portfolio">Portfolio</a></li>
<!--            <li class="scroll"><a href="#team">Team</a></li>-->
            <li class="scroll"><a href="#blog">Blog</a></li>
            <li class="scroll"><a href="#contact">Contact</a></li>       
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->
  <section id="services">
    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h2>Our Services</h2>
            <p>
                The corporate culture of Germania is based on a set of values
                and management principles shared by all modern MFIs.Germania’s core culture encourages
                growth and support within the group through the sharing
                of techniques and methodologies between its branches.
            </p>
          </div>
        </div> 
      </div>
      <div class="text-center our-services">
        <div class="row">
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="service-icon">
              <i class="fa fa-flask"></i>
            </div>
            <div class="service-info">
              <h3>Transparency</h3>
              <p>
                 Germania provide clear and transparent information
                to their clients. Affiliates clearly display product features
                and tariff in branches and on leaflets.
                
              </p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
            <div class="service-icon">
              <i class="fa fa-umbrella"></i>
            </div>
            <div class="service-info">
              <h3>Responsible pricing</h3>
                <p>Pricing for loans products is calculated using two
                   main criteria: i) current market tariff and ii) the return
                   needed for the institution to achieve  sustainability.</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
            <div class="service-icon">
              <i class="fa fa-cloud"></i>
            </div>
            <div class="service-info">
              <h3>Privacy of clients data</h3>
              <p>              
                Clients information is kept on secure databases and interior
                regulations applying to staff aim to ensure that the privacy
                of clients data are respected.
              </p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="650ms">
            <div class="service-icon">
              <i class="fa fa-heart"></i>
            </div>
            <div class="service-info">
              <h3>Fair remuneration</h3>
              <p>Offering fair and competitive pay schemes in line with
                the economical environment, and benefits including social
                protection and retirement policies in order to motivate and
                reward staff
              </p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="750ms">
            <div class="service-icon">
              <i class="fa fa-globe"></i>
            </div>
            <div class="service-info">
              <h3>Communication</h3>
              <p>Promoting internal communication and transparent
                management within affiliates and throughout the group;
                encouraging the sharing of information, dialogue and
                innovation, and creating a pleasant working environment.
              </p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="850ms">
            <div class="service-icon">
              <i class="fa fa-heartbeat"></i>
            </div>
            <div class="service-info">
              <h3>Protection and awareness</h3>
              <p>Identifying any security or health issues linked to activities
                and adopting appropriate measures to protect staff raising
                awareness among employees of key health, environmental
                or social concerns.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#services-->
  <section id="about-us" class="parallax">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>About us</h2>
            <p><strong> Germania;s primary mission is to offer simple and effective
                    financial services such as loans and deposits to MSMEs in
                    developing, emerging, and frontier countries. Although
                    MSMEs play a pivotal role in fostering economic
                    development in these countries, they often lack access to
                    effective financial services tailored to their needs. Germania has the dual bottom-line objective of contributing to
                    the economic development of the countries in which it
                    operates while offering an acceptable financial return to its
                    shareholders. 
            </strong></p>
            <p><strong>Germania invests as majority shareholder in the creation of
                    new financial institutions otherwise known as micro finance
                    institutions (MFIs), or as lead investor in existing MFIs
                    which have similar aims and values and wish to join the
                    . Germania invests alongside like-minded core shareholders that bring both financial support and strategic
                    and operational expertise. All investments are made in
                    accordance with Germania’s risk management policy,
                    which includes geographical risk diversification ratios.
             </strong></p>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
              <p class="lead">Share Holders</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="35">35%</div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
              <p class="lead">Credit Trust</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="25">25%</div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
              <p class="lead">Griffin Micro Credit</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="21.5">21.5%</div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
              <p class="lead">Customers</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="18.5">18.5%</div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
              <p class="lead">Germania Microfinance</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="100">100%</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#about-us-->

  <section id="portfolio">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h2>Image Gallery</h2>
          <p>Interesting Images from Germania Finance Staffs, Customers and Events</p>
        </div>
      </div> 
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="folio-image">
              <img class="img-responsive" src="VIeW/images/portfolio/1.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Daily Collection Agent</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="VIeW/portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="VIeW/images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="folio-image">
              <img class="img-responsive" src="VIeW/images/portfolio/2.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Micro Credits for Women</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="VIeW/portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="VIeW/images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
            <div class="folio-image">
              <img class="img-responsive" src="VIeW/images/portfolio/3.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Welcoming staff</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="VIeW/portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="VIeW/images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="folio-image">
              <img class="img-responsive" src="VIeW/images/portfolio/4.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Plan with Us</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="VIeW/portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="VIeW/images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="700ms">
            <div class="folio-image">
              <img class="img-responsive" src="VIeW/images/portfolio/5.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Satisfied Customer</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="VIeW/portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="VIeW/images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="800ms">
            <div class="folio-image">
              <img class="img-responsive" src="VIeW/images/portfolio/6.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Collaborative Staffs</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="VIeW/images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="900ms">
            <div class="folio-image">
              <img class="img-responsive" src="VIeW/images/portfolio/7.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Staffs of Centre ville Branch Bafia</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="VIeW/portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="VIeW/images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="1000ms">
            <div class="folio-image">
              <img class="img-responsive" src="VIeW/images/portfolio/8.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Staff of Food Market Branch</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="VIeW/portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="VIeW/images/portfolio/portfolio-details.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="portfolio-single-wrap">
      <div id="portfolio-single">
      </div>
    </div><!-- /#portfolio-single-wrap -->
  </section><!--/#portfolio-->

<!--  <section id="team">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>The Team</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
        </div>
      </div>
      <div class="team-members">
        <div class="row">
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="member-image">
                <img class="img-responsive" src="VIeW/images/team/1.jpg" alt="">
              </div>
              <div class="member-info">
                <h3>Marian Dixon</h3>
                <h4>CEO &amp; Founder</h4>
                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
              </div>
              <div class="social-icons">
                <ul>
                  <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                  <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
              <div class="member-image">
                <img class="img-responsive" src="VIeW/images/team/2.jpg" alt="">
              </div>
              <div class="member-info">
                <h3>Lawrence Lane</h3>
                <h4>UI/UX Designer</h4>
                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
              </div>
              <div class="social-icons">
                <ul>
                  <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                  <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
              <div class="member-image">
                <img class="img-responsive" src="VIeW/images/team/3.jpg" alt="">
              </div>
              <div class="member-info">
                <h3>Lois Clark</h3>
                <h4>Developer</h4>
                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
              </div>
              <div class="social-icons">
                <ul>
                  <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                  <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
              <div class="member-image">
                <img class="img-responsive" src="VIeW/images/team/4.jpg" alt="">
              </div>
              <div class="member-info">
                <h3>Marian Dixon</h3>
                <h4>Support Manager</h4>
                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
              </div>
              <div class="social-icons">
                <ul>
                  <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                  <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>            
    </div>
  </section>/#team-->

  <section id="features" class="parallax">
    <div class="container">
      <div class="row count">
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
          <i class="fa fa-user"></i>
          <h3 class="timer">4000</h3>
          <p>Customers</p>
        </div>
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
          <i class="fa fa-desktop"></i>
          <h3 class="timer">200</h3>                    
          <p>Employees</p>
        </div> 
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="700ms">
          <i class="fa fa-trophy"></i>
          <h3 class="timer">10</h3>                    
          <p>WINNING AWARDS</p>
        </div> 
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="900ms">
          <i class="fa fa-comment-o"></i>                    
          <h3>24/7</h3>
          <p>Fast Support</p>
        </div>                 
      </div>
    </div>
  </section><!--/#features-->

  <section id="pricing">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Loans Offered</h2>
          <p>At Germania Fanion Microfinance, We offer loans to both customers and would be customers. We offre various types of loans from Long term loans to short term loans. All our loans are of very low interest rates.</p>
        </div>
      </div>
      <div class="pricing-table">
          <?php
                include("VIeW/LoanVIeW/profil.php");
//                include("VIeW/LoanVIeW/profil.php");
//                include("VIeW/LoanVIeW/profil.php");
            ?>
        <div class="row">
          <div class="col-sm-3">
            <div id="rd1" class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <h3>Income Generation Loan (IGL)</h3>
              <div class="price">
                50<span>weeks loan paid weekly</span>                          
              </div>
              <ul>   
                <li>Income generation,</li>
                <li>Asset development</li>
                <li>12.5% (flat)</li>
                <li>24% (effective)</li>
              </ul>
              <a href="#modaladd" data-toggle = "modal" class="button button-3d-action button-pill">Apply Now</a>
            </div>
          </div>
          <div class="col-sm-3">
            <div id="rd1" class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
              <h3>Group Loan</h3>
              <div class="price">
                1<span>year loan repaid monthly</span>                                
              </div>
              <ul>
                <li>Njangi Groups</li>
                <li>CIG</li>
                <li>9.5% (flat)</li>
                <li>19% (effective)</li>
              </ul>
              <a href="#modala1" data-toggle = "modal" class="button button-3d-primary button-rounded">Apply Now</a>
            </div>
          </div>
          <div class="col-sm-3">
            <div id="rd1" class="single-table featured wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
              <h3>Emergency Loan (EL)</h3>
              <div class="price">
                20<span>weeks loan</span>                                
              </div>
              <ul>
                <li>All emergencies Such as</li>
                <li>Hospitalization</li>
                <li>Health</li>
                <li>0% Interest free</li>
              </ul>
              <a href="#modala2" data-toggle = "modal" class="button button-3d-action button-pill">Apply Now</a>
            </div>
          </div>
          <div class="col-sm-3">
              <div id="rd1" class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
              <h3>Individual Loan (IL)</h3>
              <div class="price">
                1-2<span>years loan repaid monthly</span>                    
              </div>
              <ul>   
                <li>Income generation,</li>
                <li>Asset development</li>
                <li>11% (flat)</li>
                <li>23% (effective)</li>
              </ul>
              <a href="#modala3" data-toggle = "modal" class="button button-3d-primary button-rounded">Apply Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#pricing-->

  <section id="twitter" class="parallax">
    <div>
      <a class="twitter-left-control" href="#twitter-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="twitter-right-control" href="#twitter-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <div class="twitter-icon text-center">
              <i class="fa fa-twitter"></i>
              <h4>Germania</h4>
            </div>
            <div id="twitter-carousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="item active wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <p>Introducing Germania Fanion's  <a href="#"><span>#Money Transfer</span> Anywhere Covered By us</a></p>
                </div>
                <div class="item">
                  <p>Introducing Germania Fanion's <a href="#"><span>#Funds Transfer</span> From Customer 2 Customer</a></p>
                </div>
                <div class="item">                                
                  <p>Introducing Germania Fanion's <a href="#"><span>#Online Banking</span> 24 / 7 Anywhere Anytime</a></p>
                </div>
              </div>                        
            </div>                    
          </div>
        </div>
      </div>
    </div>
  </section><!--/#twitter-->

  <section id="blog">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Testimonials</h2>
          <p>Some of Germania Fanion's Customers who's lives changed due to our Cheap, Fast, Reliable Services and a well Dedicated Team of Professionals out to serve you 24 / 7.  </p>
        </div>
      </div>
      <div class="blog-posts">
        <div class="row">
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="post-thumb">
              <a href="#"><img class="img-responsive" src="VIeW/images/blog/1.jpg" alt=""></a> 
              <div class="post-meta">
                <span><i class="fa fa-comments-o"></i> 3 Comments</span>
                <span><i class="fa fa-heart"></i> 0 Likes</span> 
              </div>
              <div class="post-icon">
                <i class="fa fa-pencil"></i>
              </div>
            </div>
            <div class="entry-header">
              <h3><a href="#"> 
                        I built up a relationship of
                        very beginning; they gave
                        me the means to expand my
                        business.
              </a></h3>
              <span class="date">June 26, 2014</span>
              <span class="cetagory"> &nbsp;:&nbsp;&nbsp; <strong>Jules Christ Afogno</strong></span>
            </div>
            <div class="entry-content">
              <p>
                Jules Christ Afogno is a young and ambitious
                businessman. He has been the manager of a
                petrol station for a few years now and a client at
                Germania Fanion for two years.
              </p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="post-thumb">
              <div id="post-carousel"  class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#post-carousel" data-slide-to="0" class="active"></li>
                  <li data-target="#post-carousel" data-slide-to="1"></li>
                  <li data-target="#post-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <a href="#"><img class="img-responsive" src="VIeW/images/blog/2.jpg" alt=""></a>
                  </div>
                  <div class="item">
                    <a href="#"><img class="img-responsive" src="VIeW/images/blog/1.jpg" alt=""></a>
                  </div>
                  <div class="item">
                    <a href="#"><img class="img-responsive" src="VIeW/images/blog/3.jpg" alt=""></a>
                  </div>
                </div>                               
                <a class="blog-left-control" href="#post-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="blog-right-control" href="#post-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
              </div>                            
              <div class="post-meta">
                <span><i class="fa fa-comments-o"></i> 3 Comments</span>
                <span><i class="fa fa-heart"></i> 0 Likes</span> 
              </div>
              <div class="post-icon">
                <i class="fa fa-picture-o"></i>
              </div>
            </div>
            <div class="entry-header">
              <h3><a href="#">Trustworthiness,
                    customer service: that is
                    why I would recommend :  Food Market Bamenda
              </a></h3>
              <span class="date">June 26, 2014</span>
              <span class="cetagory">&nbsp;&nbsp; : &nbsp;&nbsp; <strong> Shirley Arthur</strong></span>
            </div>
            <div class="entry-content">
              <p>Shirley Arthur and her husband started KuuDaabs Ventures, a frozen food import company
                15 years ago. Every month they receive four
                or fie containers filed with poultry, meat or
                fish from Europe or the US.
              </p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="800ms">
            <div class="post-thumb">
              <a href="#"><img class="img-responsive" src="VIeW/images/blog/3.jpg" alt=""></a>
              <div class="post-meta">
                <span><i class="fa fa-comments-o"></i> 3 Comments</span>
                <span><i class="fa fa-heart"></i> 0 Likes</span> 
              </div>
              <div class="post-icon">
                <i class="fa fa-video-camera"></i>
              </div>
            </div>
            <div class="entry-header">
              <h3><a href="#"> When I started my business
                      I was alone but now I have staff who I pay &nbsp; #Loans</a></h3>
              <span class="date">June 26, 2014</span>
              <span class="cetagory">&nbsp;&nbsp;:&nbsp;&nbsp; <strong>Auguy Kabanga Babinyi</strong></span>
            </div>
            <div class="entry-content">
              <p>   Mr Kabanga Babinyi owns a company called
                    A.K. Phone, which sells mobile phones and
                    accessories.  He took out his fist
                    loan of USD 3,000 (ca. EUR 2,765) in October
                    2010 and is now in his sixth cycle.
              </p>
            </div>
          </div>                    
        </div>
        <div class="load-more wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
          <a href="#" class="btn-loadmore"><i class="fa fa-repeat"></i> Load More</a>
        </div>                
      </div>
    </div>
  </section><!--/#blog-->

  <section id="contact">
    <div id="google-map" class="wow fadeIn" data-latitude="52.365629" data-longitude="4.871331" data-wow-duration="1000ms" data-wow-delay="400ms"></div>
    <div id="contact-us" class="parallax">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Contact Us</h2>
            <p>Don't wish to chart with our online agents? Send us a message instead. Germania Fanion, Where the customer is the King </p>
          </div>
        </div>
        <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="row">
            <div class="col-sm-6">
              <form id="main-contact-form" name="contact-form" method="post" action="#">
                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Email Address" required="required">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" name="subject" class="form-control" placeholder="Subject" required="required">
                </div>
                <div class="form-group">
                  <textarea name="message" id="message" class="form-control" rows="4" placeholder="Enter your message" required="required"></textarea>
                </div>                        
                <div class="form-group">
                    <button type="submit" class="button button-3d-primary button-rounded"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Send Now &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                </div>
              </form>   
            </div>
            <div class="col-sm-6">
              <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <p>Germania Fanion a category Two Microfinance Institution.</p>
                <ul class="address">
                  <li><i class="fa fa-map-marker"></i> <span> Address:</span> Tatsa Business Center Bamenda </li>
                  <li><i class="fa fa-phone"></i> <span> Phone:</span> +237 699 432 128  </li>
                  <li><i class="fa fa-envelope"></i> <span> Email:</span><a href="mailto:info@microsol.com"> info@germania.com</a></li>
                  <li><i class="fa fa-globe"></i> <span> Website:</span> <a href="#">www.GermaniaFanion.com</a></li>
                </ul>
              </div>                            
            </div>
          </div>
        </div>
      </div>
    </div>        
  </section><!--/#contact-->
  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="footer-logo">
          <a href="index.php"><img class="img-responsive" src="VIeW/images/logo.png" alt=""></a>
        </div>
        <div class="social-icons">
          <ul>
            <li><a class="envelope" href="#"><i class="fa fa-envelope"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li> 
            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a class="tumblr" href="#"><i class="fa fa-tumblr-square"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
          <!--<p>&copy; 2016 Germania Fanion</p>-->
          <p>&copy; 2016 Univers Binaire</p>
          </div>
          <div class="col-sm-6">
            <p class="pull-right">Designed by <a href="http://www.vadramsonsolutions.com/">Vadramsonsolutions</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script type="text/javascript" src="VIeW/js/jquery.js"></script>
  <script type="text/javascript" src="VIeW/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="VIeW/js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="VIeW/js/wow.min.js"></script>
  <script type="text/javascript" src="VIeW/js/mousescroll.js"></script>
  <script type="text/javascript" src="VIeW/js/smoothscroll.js"></script>
  <script type="text/javascript" src="VIeW/js/jquery.countTo.js"></script>
  <script type="text/javascript" src="VIeW/js/lightbox.min.js"></script>
  <script type="text/javascript" src="VIeW/js/main.js"></script>
  <script type="text/javascript" src="VIeW/js/modernizr.custom.js"></script>
  <script type="text/javascript" src="VIeW/js/classie.js"></script>
  <script type="text/javascript" src="VIeW/js/modalEffects.js"></script>
  <script type="text/javascript" src="VIeW/js/cssParser.js"></script>
  <!--<script type="text/javascript" src="VIeW/js/css-filters-polyfill.js"></script>-->

</body>
</html>