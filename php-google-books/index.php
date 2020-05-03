<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Books Tech</title>
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
	<!-- styles needed for carousel slider -->
    <link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="assets/plugins/owl-carousel/owl.theme.css" rel="stylesheet">
	<!-- bxSlider CSS file -->
    <link href="assets/plugins/bxslider/jquery.bxslider.css" rel="stylesheet"/>
	<!-- Just for debugging purposes. -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- include pace script for automatic web page progress bar  -->
    <script>
        paceOptions = {
            elements: true
        };
    </script>
    <script src="assets/js/pace.min.js"></script>
    <script src="assets/plugins/modernizr/modernizr-custom.js"></script>
</head>
<body>
<div id="wrapper">

    <div class="header">
    	<nav class="navbar  fixed-top navbar-site navbar-light bg-light navbar-expand-md"
    		 role="navigation">
    		<div class="container">

            <div class="navbar-identity">


    			<a href="index.php" class="navbar-brand logo logo-title">
    			<span class="logo-icon"><i class="icon icon-search-1 ln-shadow-logo "></i>
    			</span>GOOGLE BOOKS<span>TECH </span> </a>


    			<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggler pull-right"
    					type="button">

    				<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 30 30" width="30" height="30" focusable="false"><title>Menu</title><path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"/></svg>


    			</button>


    			<button
    					class="flag-menu country-flag d-block d-md-none btn btn-secondary hidden pull-right"
    					href="#select-country" data-toggle="modal">	<span class="flag-icon flag-icon-us"></span>  <span class="caret"></span>
    			</button>

            </div>



    			<div class="navbar-collapse collapse">
    				<ul class="nav navbar-nav navbar-left">
    					<li class="flag-menu country-flag tooltipHere hidden-xs nav-item" data-toggle="tooltip"
    						data-placement="bottom" title="Select Country">	<a href="#select-country" data-toggle="modal" class="nav-link">

    						<span class="flag-icon flag-icon-us"></span> <span class="caret"></span>

    					</a>
    					</li>
    				</ul>
    				<ul class="nav navbar-nav ml-auto navbar-right">
    					<li class="nav-item"><a href="#" class="nav-link"><i class="icon-th-thumb"></i> All Ads</a>
    					</li>
    					<li class="dropdown no-arrow nav-item"><a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">

    						<span>Jhon Doe</span> <i class="icon-user fa"></i> <i class=" icon-down-open-big fa"></i></a>
    						<ul
    								class="dropdown-menu user-menu dropdown-menu-right">
    							<li class="active dropdown-item"><a href="#"><i class="icon-home"></i> Personal Home

    							</a>
    							</li>
    							<li class="dropdown-item"><a href="#"><i class="icon-th-thumb"></i> My ads </a>
    							</li>
    							<li class="dropdown-item"><a href="#"><i class="icon-heart"></i> Favourite ads </a>
    							</li>
    							<li class="dropdown-item"><a href="#"><i class="icon-star-circled"></i> Saved search

    							</a>
    							</li>
    							<li class="dropdown-item"><a href="#"><i class="icon-folder-close"></i> Archived ads

    							</a>
    							</li>
    							<li class="dropdown-item"><a href="#"><i class="icon-hourglass"></i> Pending

    								approval </a>
    							</li>
    							<li class="dropdown-item"><a href="#"><i class=" icon-money "></i> Payment history </a>
    							</li>
    							<li class="dropdown-item"><a href="#"><i class=" icon-logout "></i> Log out </a>
    							</li>
    						</ul>
    					</li>
    					<li class="postadd nav-item"><a class="btn btn-block btn-border btn-post btn-danger nav-link" href="#">Post Free Add</a>
    					</li>
    					<li class="dropdown  lang-menu nav-item">
    						<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
    							<span class="lang-title">EN</span>

    						</button>
    						<ul class="dropdown-menu dropdown-menu-right user-menu" role="menu">
    							<li class="dropdown-item"><a class="active">

    								<span class="lang-name">English</span></a>
    							</li>
    							<li class="dropdown-item"><a><span class="lang-name">Dutch</span></a>
    							</li>
    							<li class="dropdown-item"><a><span class="lang-name">fran&#xE7;ais </span></a>
    							</li>
    							<li class="dropdown-item"><a><span class="lang-name">Deutsch</span></a>
    							</li>
    							<li class="dropdown-item"><a> <span class="lang-name">Arabic</span></a>
    							</li>
    							<li class="dropdown-item"><a><span class="lang-name">Spanish</span></a>
    							</li>
    						</ul>
    					</li>
    				</ul>
    			</div>
    			<!--/.nav-collapse -->
    		</div>
    		<!-- /.container-fluid -->
    	</nav>
    </div>
    <!-- /.header -->

    <label class="theme-switcher theme-switcher-left-right">
    	<span class="theme-switcher-label" data-on="Dark Off" data-off="Dark Mode"></span>
    	<span class="theme-switcher-handle"></span>
    </label>


    <div class="intro" style="background-image: url(images/bg3.jpg);">
        <div class="dtable hw100">
            <div class="dtable-cell hw100">
                <div class="container text-center">
                    <h1 class="intro-title animated fadeInDown"> Find Tech Google Books </h1>

                    <p class="sub animateme fittext3 animated fadeIn">
                        Find local tech books on Google Books tech in Minutes
                    </p>

                    <form name="form1" id="form1" method="post" action="results.php">
                        <div class="row search-row animated fadeInUp">
                            <div class="col-xl-4 col-sm-4 search-col relative locationicon">
                                <div class="search-col-inner">
                                    <i class="icon-location-2 icon-append"></i>
                                    <div class="search-col-input">
                                        <input type="text" name="buscar" id="autocomplete-ajax"
                                            class="form-control locinput input-rel searchtag-input has-icon"
                                            placeholder="Books/Category..." value="">

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-4 search-col relative">
                                <div class="search-col-inner">
                                    <i class="icon-docs icon-append"></i>
                                    <div class="search-col-input">
                                        <input type="text" name="ads"
                                            class="form-control has-icon"
                                            placeholder="I'm looking for a ..." value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-4 search-col">
                                <button id="enviar" name="enviar" class="btn btn-primary btn-search btn-block btn-gradient"><i
                                        class="icon-search"></i><strong>Find</strong></button>
                                
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- /.intro -->

    <div class="main-container">
        <div class="container">

            <div class="col-xl-12 content-box ">
                <div class="row row-featured row-featured-category">
                    <div class="col-xl-12  box-title no-border">
                        <div class="inner">
                            <h2><span>Browse by</span>
                            Category Books <a href="#" class="sell-your-item"> View more <i class="  icon-th-list"></i> </a></h2>
                        </div>
                    </div>

                    <div class="col-xl-2 col-md-3 col-sm-3 col-xs-4 f-category">
                        <a href="#" class="category">
                            <img src="images/category/car-2.jpg" class="img-responsive" alt="img">
                            <h6> MySQL </h6>
                        </a>
                    </div>

                    <div class="col-xl-2 col-md-3 col-sm-3 col-xs-4 f-category">
                        <a href="#" class="category">
                            <img src="images/category/laptop-2.jpg" class="img-responsive" alt="img"> 
                            <h6> Html5 </h6>
                        </a>
                    </div>

                    <div class="col-xl-2 col-md-3 col-sm-3 col-xs-4 f-category">
                        <a href="#" class="category">
                            <img src="images/category/mobile.jpg" class="img-responsive" alt="img">
                            <h6> CSS3 </h6></a>
                    </div>

                    <div class="col-xl-2 col-md-3 col-sm-3 col-xs-4 f-category">
                        <a href="#" class="category">
                            <img src="images/category/tv.jpg" class="img-responsive" alt="img">
                            <h6>Java </h6>
                        </a>
                    </div>

                    <div class="col-xl-2 col-md-3 col-sm-3 col-xs-4 f-category">
                        <a href="#" class="category">
                            <img src="images/category/hdd.jpg" class="img-responsive" alt="img">
                            <h6> Google API </h6>
                        </a>
                    </div>

                    <div class="col-xl-2 col-md-3 col-sm-3 col-xs-4 f-category">
                        <a href="#" class="category">
                            <img src="images/category/house.jpg" class="img-responsive" alt="img">
                            <h6> Apache </h6>
                        </a>
                    </div>

                    <div class="col-xl-2 col-md-3 col-sm-3 col-xs-4 f-category">
                        <a href="#" class="category">
                            <img src="images/category/Home-Electronics-Appliances-2.jpg" class="img-responsive" alt="img"> 
                            <h6> Android </h6>
                        </a>
                    </div>

                    <div class="col-xl-2 col-md-3 col-sm-3 col-xs-4 f-category">
                        <a href="#" class="category">
                            <img src="images/category/camera.jpg" class="img-responsive" alt="img">
                            <h6> .Net </h6>
                        </a>
                    </div>

                    <div class="col-xl-2 col-md-3 col-sm-3 col-xs-4 f-category">
                        <a href="#" class="category">
                            <img src="images/category/fashion.jpg" class="img-responsive"alt="img">
                            <h6> Amazon Web Services </h6>
                        </a>
                    </div>

                    <div class="col-xl-2 col-md-3 col-sm-3 col-xs-4 f-category">
                        <a href="#" class="category">
                            <img src="images/category/toy.jpg" class="img-responsive" alt="img">
                            <h6> PHP </h6>
                        </a>
                    </div>

                    <div class="col-xl-2 col-md-3 col-sm-3 col-xs-4 f-category">
                        <a href="#" class="category">
                            <img src="images/category/jobs.jpg" class="img-responsive" alt="img">
                            <h6> Sass </h6>
                        </a>
                    </div>

                    <div class="col-xl-2 col-md-3 col-sm-3 col-xs-4 f-category">
                        <a href="#" class="category">
                            <img src="images/category/catalog.jpg" class="img-responsive" alt="img">
                            <h6> Oracle </h6>
                        </a>
                    </div>

                </div>


            </div>

            <div style="clear: both"></div>


            <div class="col-xl-12 content-box ">
                <div class="row row-featured">
                    <div class="col-xl-12  box-title ">
                        <div class="inner"><h2><span>Sponsored </span>
                            Products <a href="category.html" class="sell-your-item"> View more <i
                                    class="  icon-th-list"></i> </a></h2>

                        </div>
                    </div>

                    <div style="clear: both"></div>

                    <div class=" relative  content featured-list-row  w100">

                        <nav class="slider-nav has-white-bg nav-narrow-svg">
                            <a class="prev">
                                <span class="nav-icon-wrap"></span>

                            </a>
                            <a class="next">
                                <span class="nav-icon-wrap"></span>
                            </a>
                        </nav>

                        

                        <div class="no-margin featured-list-slider ">
                            <div class="item"><a href="book-details.php?detail=true&id=BL0NNoFPuAQC&keyword=mysql">
                     <span class="item-carousel-thumb">
                    	<img class="img-responsive" src="images/auto/2012-mercedes-benz-sls-amg.jpg" alt="img">
                     </span>
                                <span class="item-name"> High Performance MySQL  </span>
                                <span class="price">  No price </span>
                            </a>
                            </div>

                            <div class="item">

                                <a href="book-details.php?detail=true&id=DGwjKIXWPm8C&keyword=Html5">
                     <span class="item-carousel-thumb">
                    	<img class="img-responsive" src="images/item/tp/Image00011.jpg" alt="img">
                     </span>
                                    <span class="item-name"> Users HTML 5 </span>
                                    <span class="price"> No price </span>
                                </a>
                            </div>

                            <div class="item"><a href="book-details.php?detail=true&id=6RPcqWUgb6UC&keyword=Java">
                                <span class="item-carousel-thumb"> <img class="item-img"
                                                                        src="images/item/tp/Image00006.jpg" alt="img"> </span>
                                <span class="item-name"> Users Java </span>
                                <span class="price"> no price </span></a></div>


                            <div class="item"><a href="book-details.php?detail=true&id=foTzcsRMcSkC&keyword=Google%2520API">
                                <span class="item-carousel-thumb"> <img class="item-img"
                                                                        src="images/item/tp/Image00022.jpg" alt="img"> </span>
                                <span class="item-name"> Google Visualization API Essentials  </span> <span class="price"> No price</span></a>
                            </div>

                            <div class="item"><a href="book-details.php?detail=true&id=HTo_AmTpQPMC&keyword=Apache%2520foundation">
                                <span class="item-carousel-thumb"> <img class="item-img"
                                                                        src="images/item/tp/Image00013.jpg" alt="img">  </span><span
                                    class="item-name"> The apache modules book  </span> <span
                                    class="price"> $ 27.03 </span></a></div>

                            <div class="item"><a href="book-details.php?detail=true&id=Akha4zgQUzIC&keyword=Android">
                                <span class="item-carousel-thumb"> <img class="item-img" src="images/item/3.jpg"
                                                                        alt="img"> </span> <span class="item-name"> Android: Programación de dispositivos móviles a través de ejemplos  </span>
                                <span class="price"> $ No price </span></a></div>

                            <div class="item"><a href="book-details.php?detail=true&id=9_9Uxdmb_QUC&keyword=.Net">
                                <span class="item-carousel-thumb"> <img class="item-img" src="images/item/4.jpg"
                                                                        alt="img"> </span> <span class="item-name"> Introducción a .NET  </span>
                                <span class="price"> No price </span></a></div>

                            <div class="item"><a href="book-details.php?detail=true&id=m4AKDgAAQBAJ&keyword=PHP">
                                <span class="item-carousel-thumb"> <img class="item-img" src="images/item/6.jpg"
                                                                        alt="img"> </span> <span class="item-name"> PHP </span>
                                <span class="price"> $ 2.81 </span></a></div>
                        </div>
                    </div>


                </div>
            </div>


            <div class="col-xl-12 content-box ">
                <div class="row row-featured">
                    <div style="clear: both"></div>
                    <div class="tab-lite relative w100">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs " role="tablist">
                            <li role="presentation" class="active nav-item">
                                <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab" class="nav-link">
                                    <i class="icon-location-2"></i> Programming Languages
                                </a>
                            </li>

                            <li role="presentation" class="nav-item">
                                <a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab" class="nav-link"><i
                                    class="icon-search"></i> Database Systems
                                </a>
                            </li>
                            <li role="presentation" class="nav-item">
                                <a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab" class="nav-link">
                                    <i class="icon-th-list"></i> Important People</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="tab1">
                                <div class="col-xl-12 tab-inner">
                                    <div class="row">
                                        <ul class="cat-list col-md-3  col-6 col-xxs-12">
                                            <li><a class="category_location" href="#">Php</a>
                                            </li>
                                            <li><a class="category_location" href="#"> Java </a>
                                            </li>
                                            <li><a class="category_location" href="#"> C# </a>
                                            </li>
                                            <li><a class="category_location" href="#">C++ </a>
                                            </li>
                                            <li><a class="category_location" href="#">Html5 </a>
                                            </li>
                                            <li><a class="category_location" href="#"> Css3 </a>
                                            </li>
                                            <li><a class="category_location" href="#"> Sass </a>
                                            </li>
                                            <li><a class="category_location" href="#">Less</a>
                                            </li>
                                        </ul>
                                        <ul class="cat-list cat-list-border col-md-3  col-6 col-xxs-12">
                                            <li><a class="category_location" href="#">JavaScript </a>
                                            </li>
                                            <li><a class="category_location" href="#">EcmaScript 6</a>
                                            </li>
                                            <li><a class="category_location" href="#">jQuery </a>
                                            </li>
                                            <li><a class="category_location" href="#">jQuery UI </a>
                                            </li>
                                            <li><a class="category_location" href="#"> Phyton </a>
                                            </li>
                                            <li><a class="category_location" href="#">Google API </a>
                                            </li>
                                            <li><a class="category_location" href="#">Amazon aws </a>
                                            </li>
                                            <li><a class="category_location" href="#"> Android </a>
                                            </li>
                                        </ul>
                                        <ul class="cat-list cat-list-border col-md-3  col-6 col-xxs-12">
                                            <li><a class="category_location" href="#">J2ee </a>
                                            </li>
                                            <li><a class="category_location" href="#"> Tomcat </a>
                                            </li>
                                            <li><a class="category_location" href="#">Apache </a>
                                            </li>
                                            <li><a class="category_location" href="#">Nginx </a>
                                            </li>
                                            <li><a class="category_location" href="#"> .Net </a>
                                            </li>
                                            <li><a class="category_location" href="#">Asp </a>
                                            </li>
                                            <li><a class="category_location" href="#">Bash</a>
                                            </li>
                                            <li><a class="category_location" href="#">Basic </a>
                                            </li>
                                        </ul>
                                        <ul class="cat-list cat-list-border col-md-3  col-6 col-xxs-12">
                                            <li><a class="category_location" href="#">Object Script </a>
                                            </li>
                                            <li><a class="category_location" href="#">CofeeScript </a>
                                            </li>
                                            <li><a class="category_location" href="#">Django </a>
                                            </li>
                                            <li><a class="category_location" href="#"> Jade </a>
                                            </li>
                                            <li><a class="category_location" href="#">Symfony </a>
                                            </li>
                                            <li><a class="category_location" href="#"> Zend Framework </a>
                                            </li>
                                            <li><a class="category_location" href="#">Prestashop </a>
                                            </li>
                                            <li><a class="category_location" href="#">Wordpress</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tab2">
                                <div class="col-xl-12 tab-inner">
                                    <div class="row">
                                        <ul class="cat-list cat-list-border col-md-3  col-6 col-xxs-12">

                                            <li><a class="category_location" href="#">SolarWinds Database Performance Analyzer </a>
                                            </li>
                                            <li><a class="category_location" href="#"> Oracle RDBMS </a>
                                            </li>
                                            <li><a class="category_location" href="#">IBM DB2 </a>
                                            </li>
                                            <li><a class="category_location" href="#">Altibase</a>
                                            </li>
                                            <li><a class="category_location" href="#">Microsoft SQL Server </a>
                                            </li>
                                            <li><a class="category_location" href="#">SAP Sybase ASE </a>
                                            </li>
                                            <li><a class="category_location" href="#">Teradata </a>
                                            </li>
                                            <li><a class="category_location" href="#"> ADABAS </a>
                                            </li>
                                        </ul>

                                        <ul class="cat-list col-md-3  col-6 col-xxs-12">
                                            <li><a class="category_location" href="#">MySQL</a>
                                            </li>
                                            <li><a class="category_location" href="#">FileMaker </a>
                                            </li>
                                            <li><a class="category_location" href="#"> Microsoft Access </a>
                                            </li>
                                            <li><a class="category_location" href="#"> Informix </a>
                                            </li>
                                            <li><a class="category_location" href="#"> SQLite </a>
                                            </li>
                                            <li><a class="category_location" href="#">PostgresSQL </a>
                                            </li>
                                            <li><a class="category_location" href="#"> AmazonRDS </a>
                                            </li>
                                            <li><a class="category_location" href="#">MongoDB</a>
                                            </li>
                                        </ul>
                                        
                                        <ul class="cat-list cat-list-border col-md-3  col-6 col-xxs-12">
                                            <li><a class="category_location" href="#">Redis </a>
                                            </li>
                                            <li><a class="category_location" href="#"> CouchDB </a>
                                            </li>
                                            <li><a class="category_location" href="#">Neo4j </a>
                                            </li>
                                            <li><a class="category_location" href="#">OrientDB</a>
                                            </li>
                                            <li><a class="category_location" href="#">Couchbase </a>
                                            </li>
                                            <li><a class="category_location" href="#">Toad </a>
                                            </li>
                                            <li><a class="category_location" href="#">phpMyAdmin </a>
                                            </li>
                                            <li><a class="category_location" href="#"> SQL Developer </a>
                                            </li>
                                        </ul>

                                        <ul class="cat-list cat-list-border col-md-3  col-6 col-xxs-12">
                                            <li><a class="category_location" href="#">Seqel PRO </a>
                                            </li>
                                            <li><a class="category_location" href="#"> Robomongo </a>
                                            </li>
                                            <li><a class="category_location" href="#">DbVisualizer </a>
                                            </li>
                                            <li><a class="category_location" href="#">Hadoop HDFS</a>
                                            </li>
                                            <li><a class="category_location" href="#">Cloudera </a>
                                            </li>
                                            <li><a class="category_location" href="#">MariaDB </a>
                                            </li>
                                            <li><a class="category_location" href="#">Informix Dynamic Server </a>
                                            </li>
                                            <li><a class="category_location" href="#"> 4D (4th Dimension) </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tab3">
                                <div class="col-xl-12 tab-inner">
                                    <div class="row">
                                        <ul class="cat-list cat-list-border col-md-3  col-6 col-xxs-12">
                                            <li><a class="category_location" href="#">Alex Kipman </a>
                                            </li>
                                            <li><a class="category_location" href="#">  Lauren States </a>
                                            </li>
                                            <li><a class="category_location" href="#">Min-Liang Tan </a>
                                            </li>
                                            <li><a class="category_location" href="#">Larry Ellison</a>
                                            </li>
                                            <li><a class="category_location" href="#">Marissa Mayer </a>
                                            </li>
                                            <li><a class="category_location" href="#">Robby Walker </a>
                                            </li>
                                            <li><a class="category_location" href="#">Leah Busque </a>
                                            </li>
                                            <li><a class="category_location" href="#"> Stephen Wolfram </a>
                                            </li>
                                        </ul>
                                        <ul class="cat-list cat-list-border col-md-3  col-6 col-xxs-12">
                                            <li><a class="category_location" href="#"> Sebastian Thrun </a>
                                            </li>
                                            <li><a class="category_location" href="#"> Clara Shih </a>
                                            </li>
                                            <li><a class="category_location" href="#">Ben Silberman </a>
                                            </li>
                                            <li><a class="category_location" href="#">Bryan Cantrill</a>
                                            </li>
                                            <li><a class="category_location" href="#"> Ben Kaufman </a>
                                            </li>
                                            <li><a class="category_location" href="#">Aaron Levie </a>
                                            </li>
                                            <li><a class="category_location" href="#">Bre Pettis </a>
                                            </li>
                                            <li><a class="category_location" href="#"> Steve Ballmer </a>
                                            </li>
                                        </ul>
                                        <ul class="cat-list col-md-3  col-6 col-xxs-12">
                                            <li><a class="category_location" href="#">Eric Migicovsky</a>
                                            </li>
                                            <li><a class="category_location" href="#">Eben Upton </a>
                                            </li>
                                            <li><a class="category_location" href="#"> Doug Cutting </a>
                                            </li>
                                            <li><a class="category_location" href="#"> Julie Uhrman </a>
                                            </li>
                                            <li><a class="category_location" href="#"> Gabe Newell </a>
                                            </li>
                                            <li><a class="category_location" href="#">Tony Fadell </a>
                                            </li>
                                            <li><a class="category_location" href="#"> Perry Chen </a>
                                            </li>
                                            <li><a class="category_location" href="#">Yves Behar</a>
                                            </li>
                                        </ul>
                                        <ul class="cat-list cat-list-border col-md-3  col-6 col-xxs-12">
                                            <li><a class="category_location" href="#">Jony Ive </a>
                                            </li>
                                            <li><a class="category_location" href="#"> Jeff Bezos </a>
                                            </li>
                                            <li><a class="category_location" href="#">Jack Dorsey </a>
                                            </li>
                                            <li><a class="category_location" href="#">Sheryl Sandberg</a>
                                            </li>
                                            <li><a class="category_location" href="#">Garrett Camp </a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="row">


                <div class="col-md-9 page-content col-thin-right">
                    <div class="inner-box category-content">
                        <h2 class="title-2">Find Books Ads World Wide </h2>

                        <div class="row">
                            <div class="col-md-4 col-sm-4 ">
                                <div class="cat-list">
                                    <h3 class="cat-title">
                                        <a class="category_title" href="#">
                                            <i class="fa fa-car ln-shadow"></i>
                                        Algorithms <span class="count">277,959</span> 
                                        </a>

                                        <span data-target=".cat-id-1" aria-expanded="true" data-toggle="collapse class="btn-cat-collapsed collapsed">   
                                            <span class=" icon-down-open-big"></span> 
                                        </span>
                                    </h3>


                                    <ul class="cat-collapse  cat-id-1">
                                        <li><a class="category_world_wide" href="#">Graph algorithms</a></li>
                                        <li><a class="category_world_wide" href="#">Dynamic programming</a></li>
                                        <li><a class="category_world_wide" href="#">Searching and Sorting</a></li>
                                        <li><a class="category_world_wide" href="#">Number theory and Other Mathematical</a></li>
                                        <li><a class="category_world_wide" href="#">Geometrical and Network Flow Algorithms</a></li>
                                        <li><a class="category_world_wide" href="#">Data Structures</a></li>
                                    </ul>

                                </div>
                                <div class="cat-list">
                                    <h3 class="cat-title"><a class="category_title" href="#">
                                        <i class="icon-home ln-shadow"></i>
                                        Algebra <span class="count">228,705</span></a> <span
                                            data-target=".cat-id-2"
                                            aria-expanded="true" data-toggle="collapse"
                                            class="btn-cat-collapsed collapsed">   <span
                                            class=" icon-down-open-big"></span> </span></h3>

                                    <ul class="cat-collapse collapse show cat-id-2">
                                        <li><a class="category_world_wide"href="#">Outline of algebra</a></li>
                                        <li><a class="category_world_wide"href="#">List of abstract algebra topics </a></li>
                                        <li><a class="category_world_wide"href="#">List of algebraic structures </a></li>
                                        <li><a class="category_world_wide"href="#">List of Boolean algebra topics </a></li>
                                        <li><a class="category_world_wide"href="#">List of category theory topics </a></li>
                                        <li><a class="category_world_wide"href="#">List of commutative algebra topics </a></li>
                                        <li><a class="category_world_wide"href="#">List of homological algebra topics </a></li>
                                        <li><a class="category_world_wide"href="#">List of group theory topics</a></li>

                                        <li><a class="category_world_wide"href="#">List of representation theory topics</a></li>
                                        <li><a class="category_world_wide"href="#">List of linear algebra topics </a></li>
                                        <li><a class="category_world_wide"href="#">List of reciprocity laws </a></li>
                                        <li><a class="category_world_wide"href="#">Glossary of field theory </a></li>
                                        <li><a class="category_world_wide"href="#">Glossary of group theory </a></li>
                                        <li><a class="category_world_wide"href="#">Glossary of linear algebra </a></li>
                                        <li><a class="category_world_wide"href="#">Glossary of ring theory </a></li>
                                        <li><a class="category_world_wide"href="#">List of cohomology theories</a></li>
                                    </ul>
                                </div>
                                <div class="cat-list">
                                    <h3 class="cat-title"><a class="category_title" href="#"><i
                                            class="icon-home ln-shadow"></i>
                                            Calculus and analysis <span class="count">6375</span></a>

                                        <span data-target=".cat-id-3" aria-expanded="true" data-toggle="collapse"
                                              class="btn-cat-collapsed collapsed">   <span
                                                class=" icon-down-open-big"></span> </span>
                                    </h3>


                                    <ul class="cat-collapse collapse show cat-id-3">
                                        <li><a class="category_world_wide" href="#">List of complex analysis topics</a></li>
                                        <li><a class="category_world_wide" href="#">List of functional analysis topics </a></li>
                                        <li><a class="category_world_wide" href="#">List of vector spaces in mathematics </a></li>
                                        <li><a class="category_world_wide" href="#">List of integration and measure theory topics </a></li>
                                        <li><a class="category_world_wide" href="#">List of harmonic analysis topics </a></li>
                                        <li><a class="category_world_wide" href="#">List of Fourier analysis topics </a></li>
                                        <li><a class="category_world_wide" href="#">List of multivariable calculus topics </a></li>
                                        <li><a class="category_world_wide" href="#">List of q-analogs </a></li>
                                        <li><a class="category_world_wide" href="#">List of real analysis topics </a></li>
                                        <li><a class="category_world_wide" href="#">List of variational topics </a></li>
                                        <li><a class="category_world_wide" href="#">Glossary of tensor theory </a></li>
                                        <li><a class="category_world_wide" href="#">List of mathematical series </a></li>
                                        <li><a class="category_world_wide" href="#">Dynamical systems and differential equations </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="cat-list">
                                    <h3 class="cat-title"><a class="category_title" href="#"><i
                                            class="fa fa-briefcase ln-shadow"></i> Geometry and topology <span
                                            class="count">45,526</span></a>
                                        <span data-target=".cat-id-4" aria-expanded="true" data-toggle="collapse"
                                              class="btn-cat-collapsed collapsed">   <span
                                                class=" icon-down-open-big"></span> </span>
                                    </h3>
                                 
                                    <ul class="cat-collapse collapse show cat-id-4">
                                        <li><a class="category_world_wide"href="#">List of geometry topics</a></li>
                                        <li><a class="category_world_wide"href="#">List of geometric shapes</a></li>
                                        <li><a class="category_world_wide"href="#">List of curves topics</a></li>
                                        <li><a class="category_world_wide"href="#">List of triangle topics</a></li>
                                        <li><a class="category_world_wide"href="#">List of circle topics</a></li>
                                        <li><a class="category_world_wide"href="#">List of topics related to pi</a></li>
                                        <li><a class="category_world_wide"href="#">List of general topology topics</a></li>
                                        <li><a class="category_world_wide"href="#">List of differential geometry topics</a></li>
                                        <li><a class="category_world_wide"href="#">List of algebraic geometry topics</a></li>

                                        <li><a class="category_world_wide"href="#">List of algebraic surfaces</a></li>
                                        <li><a class="category_world_wide"href="#">List of algebraic topology topics</a></li>
                                        <li><a class="category_world_wide"href="#">List of cohomology theories</a></li>
                                        <li><a class="category_world_wide"href="#">List of geometric topology topics</a></li>
                                        <li><a class="category_world_wide"href="#">List of knot theory topics</a></li>
                                        <li><a class="category_world_wide"href="#">List of Lie group topics</a></li>
                                        <li><a class="category_world_wide"href="#">Glossary of differential geometry and topology</a></li>
                                        <li><a class="category_world_wide"href="#">Glossary of general topology</a></li>
                                        <li><a class="category_world_wide"href="#">List of mathematical properties of points</a></li>
                                        <li><a class="category_world_wide"href="#">Glossary of Riemannian and metric geometry</a></li>
                                        <li><a class="category_world_wide"href="#">Glossary of scheme theory</a></li>

                                    </ul>
                                </div>
                                <div class="cat-list">
                                    <h3 class="cat-title"><a class="category_title" href="#"><i
                                            class="icon-book-open ln-shadow"></i> Combinations <span
                                            class="count">26,529</span></a> <span data-target=".cat-id-5"
                                                                                  aria-expanded="true"
                                                                                  data-toggle="collapse"
                                                                                  class="btn-cat-collapsed collapsed">   <span
                                            class=" icon-down-open-big"></span> </span>
                                    </h3>
                                    
                                    <ul class="cat-collapse collapse show cat-id-5">
                                        <li><a class="category_world_wide" href="#"> Outline of combinatorics </a></li>
                                        <li><a class="category_world_wide" href="#"> List of graph theory topics </a></li>
                                        <li><a class="category_world_wide" href="#"> Glossary of graph theory </a></li>
                                    </ul>
                                </div>
                                <div class="cat-list">
                                    <h3 class="cat-title"><a class="category_title" href="#"><i
                                            class="icon-guidedog ln-shadow"></i> Logic <span
                                            class="count">42,111</span></a>
                                        <span data-target=".cat-id-6" aria-expanded="true" data-toggle="collapse"
                                              class="btn-cat-collapsed collapsed">   <span
                                                class=" icon-down-open-big"></span> </span>
                                    </h3>
                                   
                                    
                                    <ul class="cat-collapse collapse show cat-id-6">
                                        <li><a class="category_world_wide" href="#">List of Boolean algebra topics</a></li>
                                        <li><a class="category_world_wide" href="#">List of first-order theories</a></li>
                                        <li><a class="category_world_wide" href="#">List of large cardinal properties</a></li>
                                        <li><a class="category_world_wide" href="#">List of mathematical logic topics</a></li>
                                        <li><a class="category_world_wide" href="#">Glossary of order theory</a></li>
                                        <li><a class="category_world_wide" href="#">List of set theory topics</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4   last-column">
                                <div class="cat-list">
                                    <h3 class="cat-title"><a class="category_title" href="#"><i
                                            class=" icon-basket-1 ln-shadow"></i> Computation <span
                                            class="count">64,526</span></a> <span data-target=".cat-id-7"
                                                                                  aria-expanded="true"
                                                                                  data-toggle="collapse"
                                                                                  class="btn-cat-collapsed collapsed">   <span
                                            class=" icon-down-open-big"></span> </span>
                                    </h3>

                                    <ul class="cat-collapse collapse show cat-id-7">
                                        <li><a class="category_workd_wide" href="#">algorithm general</a></li>
                                        <li><a class="category_workd_wide" href="#">computability and complexity</a></li>
                                        <li><a class="category_workd_wide" href="#">geometry and graphics</a></li>
                                        <li><a class="category_workd_wide" href="#">combinatorial computational</a></li>
                                        <li><a class="category_workd_wide" href="#">computer graphics and descriptive geometry</a></li>
                                        <li><a class="category_workd_wide" href="#">numerical computational geometry</a></li>
                                        <li><a class="category_workd_wide" href="#">computer vision</a></li>
                                        <li><a class="category_workd_wide" href="#">formal language and literal</a></li>
                                        <li><a class="category_workd_wide" href="#">numerical analysis</a></li>
                                        <li><a class="category_workd_wide" href="#">algorithms and data structures</a></li>
                                    </ul>
                                </div>
                                <div class="cat-list ">
                                    <h3 class="cat-title"><a class="category_title" href="#"><i
                                            class=" icon-theatre ln-shadow"></i> Number theory <span
                                            class="count">5,30</span> </a> <span data-target=".cat-id-8"
                                                                                 aria-expanded="true"
                                                                                 data-toggle="collapse"
                                                                                 class="btn-cat-collapsed collapsed">   <span
                                            class=" icon-down-open-big"></span> </span>
                                    </h3>
                                    
                                    <ul class="cat-collapse collapse show cat-id-8">
                                        <li><a class="category_world_wide" href="#">List of algebraic number theory topics </a></li>
                                        <li><a class="category_world_wide" href="#">List of number theory topics </a></li>
                                        <li><a class="category_world_wide" href="#">List of recreational number theory topics </a></li>
                                        <li><a class="category_world_wide" href="#">Glossary of arithmetic and Diophantine geometry </a></li>
                                        <li><a class="category_world_wide" href="#">List of prime numbers—not just a table </a></li>
                                        <li><a class="category_world_wide" href="#">List of zeta functions </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="inner-box has-aff relative">
                        <a class="dummy-aff-img" href="#"><img src="images/aff2.jpg"
                                                                           class="img-responsive"
                                                                           alt=" aff"> </a>

                    </div>
                </div>
                <div class="col-md-3 page-sidebar col-thin-left">
                    <aside>
                        <div class="inner-box no-padding">
                            <div class="inner-box-content"><a href="#"><img class="img-responsive"
                                                                            src="images/site/app.jpg" alt="tv"></a>
                            </div>
                        </div>
                        <div class="inner-box">
                            <h2 class="title-2">Popular Categories </h2>

                            <div class="inner-box-content">
                                <ul class="cat-list arrow">
                                    <li><a class="category_popular" href="#"> Php (1,386) </a></li>
                                    <li><a class="category_popular" href="#"> Java (1,163) </a></li>
                                    <li><a class="category_popular" href="#"> Apache foundation
                                        (4,974) </a>
                                    </li>
                                    <li><a class="category_popular" href="#"> Html (1,258) </a>
                                    </li>
                                    <li><a class="category_popular" href="#"> Css
                                        (1,578) </a></li>
                                    <li><a class="category_popular" href="#"> Sass (3,609) </a>
                                    </li>
                                    <li><a class="category_popular" href="#"> J2ee (968) </a></li>
                                    <li><a class="category_popular" href="#"> Tomcat (1,188) </a></li>
                                    <li><a class="category_popular" href="#"> Mysql (7,583) </a></li>
                                    <li><a class="category_popular" href="#"> Oracle (1,129) </a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="inner-box no-padding"><img class="img-responsive" src="images/add2.jpg" alt="">
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- /.main-container -->

    <div class="page-info hasOverly" style="background: url(images/bg.jpg); background-size:cover">
        <div class="bg-overly">
            <div class="container text-center section-promo">
                <div class="row">
                    <div class="col-sm-3 col-xs-6 col-xxs-12">
                        <div class="iconbox-wrap">
                            <div class="iconbox">
                                <div class="iconbox-wrap-icon">
                                    <i class="icon  icon-group"></i>
                                </div>
                                <div class="iconbox-wrap-content">
                                    <h5><span>2200</span></h5>

                                    <div class="iconbox-wrap-text">Trusted Seller</div>
                                </div>
                            </div>
                            <!-- /..iconbox -->
                        </div>
                        <!--/.iconbox-wrap-->
                    </div>

                    <div class="col-sm-3 col-xs-6 col-xxs-12">
                        <div class="iconbox-wrap">
                            <div class="iconbox">
                                <div class="iconbox-wrap-icon">
                                    <i class="icon  icon-th-large-1"></i>
                                </div>
                                <div class="iconbox-wrap-content">
                                    <h5><span>100</span></h5>

                                    <div class="iconbox-wrap-text">Categories</div>
                                </div>
                            </div>
                            <!-- /..iconbox -->
                        </div>
                        <!--/.iconbox-wrap-->
                    </div>

                    <div class="col-sm-3 col-xs-6  col-xxs-12">
                        <div class="iconbox-wrap">
                            <div class="iconbox">
                                <div class="iconbox-wrap-icon">
                                    <i class="icon  icon-map"></i>
                                </div>
                                <div class="iconbox-wrap-content">
                                    <h5><span>700</span></h5>

                                    <div class="iconbox-wrap-text">Location</div>
                                </div>
                            </div>
                            <!-- /..iconbox -->
                        </div>
                        <!--/.iconbox-wrap-->
                    </div>

                    <div class="col-sm-3 col-xs-6 col-xxs-12">
                        <div class="iconbox-wrap">
                            <div class="iconbox">
                                <div class="iconbox-wrap-icon">
                                    <i class="icon icon-facebook"></i>
                                </div>
                                <div class="iconbox-wrap-content">
                                    <h5><span>50,000</span></h5>

                                    <div class="iconbox-wrap-text"> Facebook Fans</div>
                                </div>
                            </div>
                            <!-- /..iconbox -->
                        </div>
                        <!--/.iconbox-wrap-->
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- /.page-info -->

    <div class="page-bottom-info">
        <div class="page-bottom-info-inner">

            <div class="page-bottom-info-content text-center">
                <h1>If you have any questions, comments or concerns, please call the Classified Advertising
                    department
                    at (000) 555-5556</h1>
                <a class="btn  btn-lg btn-primary-dark" href="tel:+000000000">
                    <i class="icon-mobile"></i> <span class="hide-xs color50">Call Now:</span> (000) 555-5555 </a>
            </div>

        </div>
    </div>

    <footer class="main-footer">
    	<div class="footer-content">
    		<div class="container">
    			<div class="row">

    				<div class=" col-xl-2 col-xl-2 col-md-2 col-6  ">
    					<div class="footer-col">
    						<h4 class="footer-title">About us</h4>
    						<ul class="list-unstyled footer-nav">
    							<li><a href="#">About Company</a></li>
    							<li><a href="#">For Business</a></li>
    							<li><a href="#">Our Partners</a></li>
    							<li><a href="#">Press Contact</a></li>
    							<li><a href="#">Careers</a></li>
    							<li><a href="#">Events</a></li>
    						</ul>
    					</div>
    				</div>

    				<div class=" col-xl-2 col-xl-2 col-md-2 col-6  ">
    					<div class="footer-col">
    						<h4 class="footer-title">Help & Contact</h4>
    						<ul class="list-unstyled footer-nav">
    							<li><a href="#">
    								Stay Safe Online
    							</a></li>
    							<li><a href="#">
    								How to Sell</a></li>
    							<li><a href="#">
    								How to Buy
    							</a></li>
    							<li><a href="#">Posting Rules
    							</a></li>

    							<li><a href="#">
    								Promote Your Ad
    							</a></li>

    						</ul>
    					</div>
    				</div>

    				<div class=" col-xl-2 col-xl-2 col-md-2 col-6  ">
    					<div class="footer-col">
    						<h4 class="footer-title">More From Us</h4>
    						<ul class="list-unstyled footer-nav">
    							<li><a href="#">FAQ
    							</a></li>
    							<li><a href="#">Blog
    							</a></li>
    							<li><a href="#">
    								Popular Searches
    							</a></li>
    							<li><a href="#"> Site Map
    							</a></li>
    							<li><a href="#"> Customer Reviews
    						</a></li>


    						</ul>
    					</div>
    				</div>
    				<div class=" col-xl-2 col-xl-2 col-md-2 col-6  ">
    					<div class="footer-col">
    						<h4 class="footer-title">Account</h4>
    						<ul class="list-unstyled footer-nav">
    							<li><a href="#"> Manage Account
    							</a></li>
    							<li><a href="#">Login
    							</a></li>
    							<li><a href="#">Register
    							</a></li>
    							<li><a href="#"> My ads
    							</a></li>
    							<li><a href="#"> Profile
    							</a></li>
    						</ul>
    					</div>
    				</div>
    				<div class=" col-xl-4 col-xl-4 col-md-4 col-12">
    					<div class="footer-col row">

    						<div class="col-sm-12 col-xs-6 col-xxs-12 no-padding-lg">
    							<div class="mobile-app-content">
    								<h4 class="footer-title">Mobile Apps</h4>
    								<div class="row ">
    									<div class="col-6  ">
    										<a class="app-icon" target="_blank"  href="https://itunes.apple.com/">
    											<span class="hide-visually">iOS app</span>
    											<img src="images/site/app_store_badge.svg" alt="Available on the App Store">
    										</a>
    									</div>
    									<div class="col-6  ">
    										<a class="app-icon"  target="_blank" href="https://play.google.com/store/">
    											<span class="hide-visually">Android App</span>
    											<img src="images/site/google-play-badge.svg" alt="Available on the App Store">
    										</a>
    									</div>
    								</div>
    							</div>
    						</div>

    						<div class="col-sm-12 col-xs-6 col-xxs-12 no-padding-lg">
    							<div class="hero-subscribe">
    								<h4 class="footer-title no-margin">Follow us on</h4>
    								<ul class="list-unstyled list-inline footer-nav social-list-footer social-list-color footer-nav-inline">
    									<li><a class="icon-color fb" title="Facebook" data-placement="top" data-toggle="tooltip" href="#"><i class="fab fa-facebook-f"></i> </a></li>
    									<li><a class="icon-color tw" title="Twitter" data-placement="top" data-toggle="tooltip" href="#"><i class="fab fa-twitter"></i> </a></li>
    									<li><a class="icon-color gp" title="Google+" data-placement="top" data-toggle="tooltip" href="#"><i class="fab fa-google-plus-g"></i> </a></li>
    									<li><a class="icon-color lin" title="Linkedin" data-placement="top" data-toggle="tooltip" href="#"><i class="fab fa-linkedin"></i> </a></li>
    									<li><a class="icon-color pin" title="Linkedin" data-placement="top" data-toggle="tooltip" href="#"><i class="fab fa-pinterest-p"></i> </a></li>
    								</ul>
    							</div>

    						</div>
    					</div>
    				</div>
    				<div style="clear: both"></div>

    				<div class="col-xl-12">
    					<div class=" text-center paymanet-method-logo">

    						<img src="images/site/payment/master_card.png" alt="img">
    						<img alt="img" src="images/site/payment/visa_card.png">
    						<img alt="img" src="images/site/payment/paypal.png">
    						<img alt="img" src="images/site/payment/american_express_card.png"> <img alt="img" src="images/site/payment/discover_network_card.png">
    						<img alt="img" src="images/site/payment/google_wallet.png">
    					</div>

    					<div class="copy-info text-center">
    						&copy; 2017 BootClassified. All Rights Reserved.
    					</div>

    				</div>

    			</div>
    		</div>
    	</div>
    </footer>

</div>
<!-- /.wrapper -->


<!-- Modal Change City -->

<div class="modal fade modalHasList" id="select-country" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	 aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title uppercase font-weight-bold" id="exampleModalLabel"><i class=" icon-map"></i> Select your region </h4>

				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
						class="sr-only">Close</span></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="row" style="padding: 0 20px">
						<ul class="cat-list col-sm-3 col-xs-6 ">
							<li>
								<span  class="flag-icon flag-icon-af"> </span>
								<a href="#AF">
									Afghanistan
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-al"> </span>
								<a href="#AL">
									Albania
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-dz"> </span>
								<a href="#DZ">
									Algeria
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ad"> </span>
								<a href="#AD">
									Andorra
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ao"> </span>
								<a href="#AO">
									Angola
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ar"> </span>
								<a href="#AR">
									Argentina
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-am"> </span>
								<a href="#AM">
									Armenia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-au"> </span>
								<a href="#AU">
									Australia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-at"> </span>
								<a href="#AT">
									Austria
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-az"> </span>
								<a href="#AZ">
									Azerbaijan
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-bs"> </span>
								<a href="#BS">
									Bahamas
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-bh"> </span>
								<a href="#BH">
									Bahrain
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-bd"> </span>
								<a href="#BD">
									Bangladesh
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-by"> </span>
								<a href="#BY">
									Belarus
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-be"> </span>
								<a href="#BE">
									Belgium
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-bz"> </span>
								<a href="#BZ">
									Belize
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-bj"> </span>
								<a href="#BJ">
									Benin
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-bo"> </span>
								<a href="#BO">
									Bolivia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ba"> </span>
								<a href="#BA">
									Bosnia and Herzegovina
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-bw"> </span>
								<a href="#BW">
									Botswana
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-br"> </span>
								<a href="#BR">
									Brazil
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-bn"> </span>
								<a href="#BN">
									Brunei
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-bg"> </span>
								<a href="#BG">
									Bulgaria
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-bf"> </span>
								<a href="#BF">
									Burkina Faso
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-bi"> </span>
								<a href="#BI">
									Burundi
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-kh"> </span>
								<a href="#KH">
									Cambodia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-cm"> </span>
								<a href="#CM">
									Cameroon
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ca"> </span>
								<a href="#CA">
									Canada
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-cv"> </span>
								<a href="#CV">
									Cape Verde
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-cf"> </span>
								<a href="#CF">
									Central African Republic
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-td"> </span>
								<a href="#TD">
									Chad
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-cl"> </span>
								<a href="#CL">
									Chile
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-cn"> </span>
								<a href="#CN">
									China
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-co"> </span>
								<a href="#CO">
									Colombia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-km"> </span>
								<a href="#KM">
									Comoros
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-cg"> </span>
								<a href="#CG">
									Congo - Brazzaville
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-cd"> </span>
								<a href="#CD">
									Congo - Kinshasa
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-cr"> </span>
								<a href="#CR">
									Costa Rica
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-hr"> </span>
								<a href="#HR">
									Croatia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-cu"> </span>
								<a href="#CU">
									Cuba
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-cy"> </span>
								<a href="#CY">
									Cyprus
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-cz"> </span>
								<a href="#CZ">
									Czech Republic
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ci"> </span>
								<a href="#CI">
									Côte d’Ivoire
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-dk"> </span>
								<a href="#DK">
									Denmark
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-dj"> </span>
								<a href="#DJ">
									Djibouti
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-dm"> </span>
								<a href="#DM">
									Dominica
								</a>
							</li>
						</ul>
						<ul class="cat-list col-sm-3 col-xs-6 ">
							<li>
								<span  class="flag-icon flag-icon-do"> </span>
								<a href="#DO">
									Dominican Republic
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ec"> </span>
								<a href="#EC">
									Ecuador
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-eg"> </span>
								<a href="#EG">
									Egypt
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-gq"> </span>
								<a href="#GQ">
									Equatorial Guinea
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-er"> </span>
								<a href="#ER">
									Eritrea
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ee"> </span>
								<a href="#EE">
									Estonia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-et"> </span>
								<a href="#ET">
									Ethiopia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-fj"> </span>
								<a href="#FJ">
									Fiji
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-fi"> </span>
								<a href="#FI">
									Finland
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-fr"> </span>
								<a href="#FR">
									France
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ga"> </span>
								<a href="#GA">
									Gabon
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-gm"> </span>
								<a href="#GM">
									Gambia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ge"> </span>
								<a href="#GE">
									Georgia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-de"> </span>
								<a href="#DE">
									Germany
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-gh"> </span>
								<a href="#GH">
									Ghana
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-gi"> </span>
								<a href="#GI">
									Gibraltar
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-gr"> </span>
								<a href="#GR">
									Greece
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-gl"> </span>
								<a href="#GL">
									Greenland
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-gd"> </span>
								<a href="#GD">
									Grenada
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-gp"> </span>
								<a href="#GP">
									Guadeloupe
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-gu"> </span>
								<a href="#GU">
									Guam
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-gt"> </span>
								<a href="#GT">
									Guatemala
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-gn"> </span>
								<a href="#GN">
									Guinea
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-gw"> </span>
								<a href="#GW">
									Guinea-Bissau
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-gy"> </span>
								<a href="#GY">
									Guyana
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ht"> </span>
								<a href="#HT">
									Haiti
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-hn"> </span>
								<a href="#HN">
									Honduras
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-hk"> </span>
								<a href="#HK">
									Hong Kong SAR China
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-hu"> </span>
								<a href="#HU">
									Hungary
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-is"> </span>
								<a href="#IS">
									Iceland
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-in"> </span>
								<a href="#IN">
									India
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-id"> </span>
								<a href="#ID">
									Indonesia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ir"> </span>
								<a href="#IR">
									Iran
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-iq"> </span>
								<a href="#IQ">
									Iraq
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ie"> </span>
								<a href="#IE">
									Ireland
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-il"> </span>
								<a href="#IL">
									Israel
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-it"> </span>
								<a href="#IT">
									Italy
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-jm"> </span>
								<a href="#JM">
									Jamaica
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-jp"> </span>
								<a href="#JP">
									Japan
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-jo"> </span>
								<a href="#JO">
									Jordan
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-kz"> </span>
								<a href="#KZ">
									Kazakhstan
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ke"> </span>
								<a href="#KE">
									Kenya
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ki"> </span>
								<a href="#KI">
									Kiribati
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-kw"> </span>
								<a href="#KW">
									Kuwait
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-kg"> </span>
								<a href="#KG">
									Kyrgyzstan
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-la"> </span>
								<a href="#LA">
									Laos
								</a>
							</li>
						</ul>
						<ul class="cat-list col-sm-3 col-xs-6 ">
							<li>
								<span  class="flag-icon flag-icon-lv"> </span>
								<a href="#LV">
									Latvia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-lb"> </span>
								<a href="#LB">
									Lebanon
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ls"> </span>
								<a href="#LS">
									Lesotho
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-lr"> </span>
								<a href="#LR">
									Liberia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ly"> </span>
								<a href="#LY">
									Libya
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-li"> </span>
								<a href="#LI">
									Liechtenstein
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-lt"> </span>
								<a href="#LT">
									Lithuania
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-lu"> </span>
								<a href="#LU">
									Luxembourg
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-mk"> </span>
								<a href="#MK">
									Macedonia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-mg"> </span>
								<a href="#MG">
									Madagascar
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-mw"> </span>
								<a href="#MW">
									Malawi
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-my"> </span>
								<a href="#MY">
									Malaysia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-mv"> </span>
								<a href="#MV">
									Maldives
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ml"> </span>
								<a href="#ML">
									Mali
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-mt"> </span>
								<a href="#MT">
									Malta
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-mq"> </span>
								<a href="#MQ">
									Martinique
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-mr"> </span>
								<a href="#MR">
									Mauritania
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-mu"> </span>
								<a href="#MU">
									Mauritius
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-yt"> </span>
								<a href="#YT">
									Mayotte
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-mx"> </span>
								<a href="#MX">
									Mexico
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-fm"> </span>
								<a href="#FM">
									Micronesia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-md"> </span>
								<a href="#MD">
									Moldova
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-mc"> </span>
								<a href="#MC">
									Monaco
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-mn"> </span>
								<a href="#MN">
									Mongolia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-me"> </span>
								<a href="#ME">
									Montenegro
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ma"> </span>
								<a href="#MA">
									Morocco
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-mz"> </span>
								<a href="#MZ">
									Mozambique
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-mm"> </span>
								<a href="#MM">
									Myanmar [Burma]
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-na"> </span>
								<a href="#NA">
									Namibia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-np"> </span>
								<a href="#NP">
									Nepal
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-nl"> </span>
								<a href="#NL">
									Netherlands
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-nc"> </span>
								<a href="#NC">
									New Caledonia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-nz"> </span>
								<a href="#NZ">
									New Zealand
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ni"> </span>
								<a href="#NI">
									Nicaragua
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ne"> </span>
								<a href="#NE">
									Niger
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ng"> </span>
								<a href="#NG">
									Nigeria
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-kp"> </span>
								<a href="#KP">
									North Korea
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-no"> </span>
								<a href="#NO">
									Norway
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-om"> </span>
								<a href="#OM">
									Oman
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-pk"> </span>
								<a href="#PK">
									Pakistan
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ps"> </span>
								<a href="#PS">
									Palestinian Territories
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-pa"> </span>
								<a href="#PA">
									Panama
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-pg"> </span>
								<a href="#PG">
									Papua New Guinea
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-py"> </span>
								<a href="#PY">
									Paraguay
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-pe"> </span>
								<a href="#PE">
									Peru
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ph"> </span>
								<a href="#PH">
									Philippines
								</a>
							</li>
						</ul>
						<ul class="cat-list col-sm-3 col-xs-6 ">
							<li>
								<span  class="flag-icon flag-icon-pl"> </span>
								<a href="#PL">
									Poland
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-pt"> </span>
								<a href="#PT">
									Portugal
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-pr"> </span>
								<a href="#PR">
									Puerto Rico
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-qa"> </span>
								<a href="#QA">
									Qatar
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ro"> </span>
								<a href="#RO">
									Romania
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ru"> </span>
								<a href="#RU">
									Russia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-rw"> </span>
								<a href="#RW">
									Rwanda
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-re"> </span>
								<a href="#RE">
									Réunion
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ws"> </span>
								<a href="#WS">
									Samoa
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-sa"> </span>
								<a href="#SA">
									Saudi Arabia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-sn"> </span>
								<a href="#SN">
									Senegal
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-rs"> </span>
								<a href="#RS">
									Serbia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-sl"> </span>
								<a href="#SL">
									Sierra Leone
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-sg"> </span>
								<a href="#SG">
									Singapore
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-sk"> </span>
								<a href="#SK">
									Slovakia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-si"> </span>
								<a href="#SI">
									Slovenia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-so"> </span>
								<a href="#SO">
									Somalia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-za"> </span>
								<a href="#ZA">
									South Africa
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-kr"> </span>
								<a href="#KR">
									South Korea
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-es"> </span>
								<a href="#ES">
									Spain
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-lk"> </span>
								<a href="#LK">
									Sri Lanka
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-sd"> </span>
								<a href="#SD">
									Sudan
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-sz"> </span>
								<a href="#SZ">
									Swaziland
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-se"> </span>
								<a href="#SE">
									Sweden
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ch"> </span>
								<a href="#CH">
									Switzerland
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-sy"> </span>
								<a href="#SY">
									Syria
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-tw"> </span>
								<a href="#TW">
									Taiwan
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-tj"> </span>
								<a href="#TJ">
									Tajikistan
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-tz"> </span>
								<a href="#TZ">
									Tanzania
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-th"> </span>
								<a href="#TH">
									Thailand
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-tl"> </span>
								<a href="#TL">
									Timor-Leste
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-tg"> </span>
								<a href="#TG">
									Togo
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-tn"> </span>
								<a href="#TN">
									Tunisia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-tr"> </span>
								<a href="#TR">
									Turkey
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-tm"> </span>
								<a href="#TM">
									Turkmenistan
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ug"> </span>
								<a href="#UG">
									Uganda
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ua"> </span>
								<a href="#UA">
									Ukraine
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ae"> </span>
								<a href="#AE">
									United Arab Emirates
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-gb"> </span>
								<a href="#UK">
									United Kingdom
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-us"> </span>
								<a href="#US">
									United States
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-uy"> </span>
								<a href="#UY">
									Uruguay
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-uz"> </span>
								<a href="#UZ">
									Uzbekistan
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-vu"> </span>
								<a href="#VU">
									Vanuatu
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ve"> </span>
								<a href="#VE">
									Venezuela
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-vn"> </span>
								<a href="#VN">
									Vietnam
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ye"> </span>
								<a href="#YE">
									Yemen
								</a>
							</li>
						</ul>
						<ul class="cat-list col-sm-3 col-xs-6 ">
							<li>
								<span  class="flag-icon flag-icon-zm"> </span>
								<a href="#ZM">
									Zambia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-zw"> </span>
								<a href="#ZW">
									Zimbabwe
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- /.modal -->


<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/jquery/jquery-3.3.1.min.js">\x3C/script>')</script>
<script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
<script src="assets/js/vendors.min.js"></script>
<!-- include custom script for site  -->
<script src="assets/js/main.min.js"></script>
<!-- include jquery autocomplete plugin  -->
<script type="text/javascript" src="assets/plugins/autocomplete/jquery.mockjax.js"></script>
<script type="text/javascript" src="assets/plugins/autocomplete/jquery.autocomplete.js"></script>
<script type="text/javascript" src="assets/plugins/autocomplete/usastates.js"></script>
<script type="text/javascript" src="assets/plugins/autocomplete/autocomplete-demo.js"></script>
<script>
jQuery(function(){
  // send submit form
  $("#form1").submit(function(event){
    event.preventDefault();
  });

  $("#enviar").click(function(){
      var word = $("input[name='buscar']").val();
      if (word != ""){
           word = word.trim();
           word = encodeURI(word);
           $("input[name='buscar']").val(word);
           $('#form1').unbind('submit').submit(); 
      }
  });
  
  // send category to submit form
  $(".category").click(function(){
      var category = $(this).find("h6").text();
      category = category.trim();
      category = encodeURI(category);
      $("input[name='buscar']").val(category);
      $('#form1').unbind('submit').submit();
  });
  
  // send category to submit form
  $(".category_location").click(function(){
      var category = $(this).text();
      category = category.trim();
      category = encodeURI(category);
      $("input[name='buscar']").val(category);
      $('#form1').unbind('submit').submit();
  });
  
  $(".category_world_wide").click(function(){
      var category = $(this).text();
      category = category.trim();
      category = encodeURI(category);
      $("input[name='buscar']").val(category);
      $('#form1').unbind('submit').submit();
  });
  
  $(".category_title").click(function(){
      var category = $(this).text();
      category = category.trim();
      category = encodeURI(category);
      $("input[name='buscar']").val(category);
      $('#form1').unbind('submit').submit();
  });

  $(".category_popular").click(function(){
      var category = $(this).text();
      category = category.trim();
      category = category.substr(0,category.indexOf("("));
      //console.log("categoria: "+category);
      category = encodeURI(category);
      $("input[name='buscar']").val(category);
      $('#form1').unbind('submit').submit();
   });
});
</script>        
</body>
</html>