<?php 
// includes
include_once __DIR__ . '/vendor/autoload.php';
include_once "classes/base.php";
// libraries
use classes\Books;
$books   = new Books();
$items   = $books->getItems();
$paginas = $books->getNum_pags();
$keyword = $books->getQ();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Classified Google Books</title>
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
        	<nav class="navbar  fixed-top navbar-site navbar-light bg-light navbar-expand-md" role="navigation">
        		<div class="container">
                    <div class="navbar-identity">
                        <a href="index.php" class="navbar-brand logo logo-title">
        			        <span class="logo-icon"><i class="icon icon-search-1 ln-shadow-logo "></i>
                            </span>GOOGLE BOOKS<span>CLASSIFIED </span> 
                        </a>


        			<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggler pull-right" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 30 30" width="30" height="30" focusable="false">
                            <title>Menu</title>
                            <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"/>
                        </svg>
                    </button>


        			<button class="flag-menu country-flag d-block d-md-none btn btn-secondary hidden pull-right" href="#select-country" data-toggle="modal">	
                        <span class="flag-icon flag-icon-us"></span>  
                        <span class="caret"></span>
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

    <form name="form1" id="form1" method="post" action="results.php">    
    <div class="search-row-wrapper" style="background-image: url(images/bg.jpg)">
    	<div class="inner">
    	<div class="container ">
    		<form action="#" method="GET">
    			<div class="row">
                    <div class="col-md-3">
    					<input class="form-control keyword" name="buscar" type="text" placeholder="e.g. Mobile Sale" value="<?php echo $books->getQ(); ?>">
    				</div>
    				<div class="col-md-3">
    					<select class="form-control selecter" name="category" id="search-category">
                            <option selected="selected" value="">All Languages</option>
    						<option value="languages" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled">- Programming languages -</option>
    						<option value="php">Php</option>
    						<option value="java">Java</option>
    						<option value="c sharp">C sharp</option>
    						<option value="c plus plus">C plus plus</option>
    						<option value="html5">html5</option>
    						<option value="css3">css3</option>
    					    <option value="sass">Sass</option>
    						<option value="less">Less</option>
    						<option value="Javascript">JavaScript</option>
    						<option value="ecmascript">Ecmascript</option>
    						<option value="jquery">jQuery</option>
    						<option value="jqueryui">jQuery UI</option>
    						<option value="Image">Image and sound</option>
    						<option value="phyton">Phyton</option>
    						<option value="google api">Google API</option>
    						<option value="amazon aws">Amazon AWS</option>
    						<option value="android">Android</option>
    						<option value="j2ee">J2ee</option>
    						<option value="tomcat">Tomcat</option>
    						<option value="apache">Apache</option>
    						<option value="nginx">Nginx</option>
    						<option value=".net">.Net</option>
    						<option value="asp">Asp</option>
    						<option value="bash">Bash</option>
    						<option value="basic">Basic</option>
    						<option value="object script">Object Script</option>
    						<option value="cofee script">Cofee Script</option>
    						<option value="django">Django</option>
    						<option value="jade">Jade</option>
    						<option value="symfony">Symfony</option>
    						<option value="zend framework">Zend Framework</option>
    						<option value="Prestashop">Prestashop</option>
    					</select>
                    </div>

    				<div class="col-md-3">
    					<select class="form-control selecter" name="location" id="id-location">
    						<option selected="selected" value="">All Databases</option>
                            <option value="languages" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled">- Databases Systems -</option>
                            <option value="solarWinds database performance analyzer">SolarWinds Database Performance Analyzer</option>
    						<option value="oracle">Oracle RDBMS</option>
    						<option value="ibm db2">IBM DB2</option>
    						<option value="altibase">Altibase</option>
    						<option value="microsoft sql server">Microsoft SQL Server</option>
    						<option value="sap">SAP Sybase ASE</option>
    						<option value="teradata">Teradata</option>
    						<option value="adabas">ADABAS</option>
    						<option value="mysql">MySQL</option>
    						<option value="fileMaker">FileMaker</option>
    						<option value="microsoft access">Microsoft Access</option>
    						<option value="informix">Informix</option>
    						<option value="sqllite">SQLite</option>
    						<option value="postgressql">PostgresSQL</option>
    						<option value="amazonrds">AmazonRDS</option>
    						<option value="mongodb">MongoDB</option>
    						<option value="redis">Redis</option>
    						<option value="couchdb">CouchDB</option>
    						<option value="neo4j">Neo4j</option>
    						<option value="orientdb">OrientDB</option>
    						<option value="toad">Toad</option>
    						<option value="phpMyAdmin">phpMyAdmin</option>
    						<option value="sql developer">SQL Developer</option>
    						<option value="seqel pro">Seqel PRO</option>
    						<option value="robomongo">Robomongo</option>
    						<option value="dbvisualizer">DbVisualizer</option>
    						<option value="hadoop hdfs">Hadoop HDFS</option>
    						<option value="cloudera">Cloudera</option>
    						<option value="mariadb">MariaDB</option>
    						<option value="informix dynamic server">Informix Dynamic Server</option>
    				    </select>
    				</div>
    				<div class="col-md-3">
                        <button name="enviar" class="btn btn-block btn-primary btn-gradient"> Search <i class="fa fa-search"></i></button>
    				</div>
    			</div>
    		</form>
    	</div>
    	</div>
    </div>
    </form>
    <!-- /.search-row -->
    <div class="main-container">
        <div class="container">
            <div class="row">
                <!-- this (.mobile-filter-sidebar) part will be position fixed in mobile version -->
                <div class="col-md-3 page-sidebar mobile-filter-sidebar">
                    <aside>
                        <div class="sidebar-modern-inner">
                            <div class="block-title has-arrow sidebar-header">
                                <h5><a href="#">Programming languages</a></h5>
                            </div>
                            <div class="block-content categories-list  list-filter ">
                                <ul class=" list-unstyled">
                                    <li><a href="#"><span class="title category">Php</span><span class="count">&nbsp;8626</span></a>
                                    </li>
                                    <li><a href="#"><span class="title category">Java </span><span class="count">&nbsp;123</span></a></li>
                                    <li><a href="#"><span class="title category">J2ee </span><span class="count">&nbsp;742</span></a></li>
                                    <li><a href="#"><span class="title category">Tomcat </span><span class="count">&nbsp;8525</span></a></li>
                                    <li><a href="#"><span class="title category">Apache foundation </span><span class="count">&nbsp;357</span></a></li>
                                    <li><a href="#"><span class="title category">Html5 </span><span class="count">&nbsp;3576</span></a></li>
                                    <li><a href="#"><span class="title category">Css3 </span><span class="count">&nbsp;453</span></a></li>
                                    <li><a href="#"><span class="title category">Sass</span><span class="count">&nbsp;801</span></a>
                                    </li>
                                    <li><a href="#"><span class="title category">Less</span><span class="count">&nbsp;9803</span></a></li>
                                </ul>
                            </div>  <!--/.categories-list-->

                            <div class="block-title has-arrow ">
                                <h5><a href="#">Database Systems</a></h5>
                            </div>
                            <div class="block-content locations-list  list-filter ">
                                <ul class="browse-list list-unstyled long-list">
                                    <li><a class="category_location" href="#"> Oracle </a></li>
                                    <li><a class="category_location" href="#"> Mysql </a></li>
                                    <li><a class="category_location" href="#"> Access </a></li>
                                    <li><a class="category_location" href="#"> No sql </a></li>
                                    <li><a class="category_location" href="#">Ibm db2 </a></li>
                                    <li><a class="category_location" href="#"> Mongo DB </a></li>
                                    <li><a class="category_location" href="#"> PhpMyAdmin </a></li>
                                    <li><a class="category_location" href="#"> Maria DB </a></li>
                                    <li><a class="category_location" href="#"> Microsoft SQL Server </a></li>
                                    <li><a class="category_location" href="#"> SAP</a></li>
                                    <li><a class="category_location" href="#"> Adabas </a></li>
                                    <li><a class="category_location" href="#">Filemaker </a></li>
                                    <li><a class="category_location" href="#"> Redis </a></li>
                                </ul>
                            </div>
                            <!--/.locations-list-->

                            
                            <!--/.list-filter-->
                            <div class="block-title has-arrow">
                                <h5><a href="#">Important People </a></h5>
                            </div>
                            <div class="block-content categories-list  list-filter ">
                                <ul class="browse-list list-unstyled ">
                                    <li><a class="category_popular" href="#"><strong>Alex Kipman</strong> <span class="count">228,705</span></a></li>
                                    <li><a class="category_popular" href="#">Lauren States <span class="count">28,705</span></a></li>
                                    <li><a class="category_popular" href="#">Min-Liang Tan <span class="count">18,705</span></a></li>
                                    <li><a class="category_popular" href="#"><strong>Larry Ellison</strong> <span class="count">228,705</span></a></li>
                                    <li><a class="category_popular" href="#">Lauren States <span class="count">15,705</span></a></li>
                                    <li><a class="category_popular" href="#">Marissa Mayer <span class="count">10,705</span></a></li>
                                    <li><a class="category_popular" href="#">Robby Walker <span class="count">12,305</span></a></li>
                                    <li><a class="category_popular" href="#">Leah Busque  <span class="count">14,505</span></a></li>
                                    <li><a class="category_popular" href="#">Stephen Wolfram <span class="count">15,205</span></a></li>
                                    <li><a class="category_popular" href="#">Sebastian Thrun <span class="count">11,255</span></a></li>
                                    <li><a class="category_popular" href="#">Clara Shih <span class="count">18,315</span></a></li>
                                    <li><a class="category_popular" href="#">Ben Silberman <span class="count">18,205</span></a></li>
                                    <li><a class="category_popular" href="#">Bryan Cantrill <span class="count">18,105</span></a></li>
                                    <li><a class="category_popular" href="#">Ben Kaufman <span class="count">18,055</span></a></li>    
                                
                                
                                </ul>
                            </div>
                            <!--/.list-filter-->

                            
                            <div style="clear:both"></div>
                        </div>



                        <!--/.categories-list-->
                    </aside>
                </div>
                <!--/.page-side-bar-->
                <div class="col-md-9 page-content col-thin-left">

                    <div class="category-list ">

                        <div class="tab-box ">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs add-tabs tablist" role="tablist">
                                <li class="active nav-item">
                                    <a href="#alladslist" role="tab" data-toggle="tab" class="nav-link active">All Ads <span class="badge badge-pill badge-secondary">228,705</span></a>
                                </li>
                                <li class=" nav-item">
                                    <a href="#businessads" role="tab" data-toggle="tab" class="nav-link"> Business <span class="badge badge-pill badge-secondary">50,300</span></a>
                                </li>
                                <li class=" nav-item">
                                    <a href="#private" role="tab" data-toggle="tab" class="nav-link">Private <span class="badge badge-pill badge-secondary">102,152</span></a>
                                </li>
                            </ul>
                            <div class="tab-filter">
                                <select title="sort by" class="selectpicker select-sort-by" data-style="btn-select"
                                        data-width="auto">
                                    <option>Sort by</option>
                                    <option>Price: Low to High</option>
                                    <option>Price: High to Low</option>
                                </select>
                            </div>

                        </div>
                        <!--/.tab-box-->

                        <div class="listing-filter">
                            <div class="pull-left col-xs-6">
                                <div class="breadcrumb-list"><a href="#" class="current"> <span>All ads</span></a> in
                                    <!-- cityName will replace with selected location/area from location modal -->
                                    <span class="cityName"> New York </span> <a href="#selectRegion" id="dropdownMenu1"
                                                                                data-toggle="modal"> <span
                                            class="caret"></span> </a></div>
                            </div>
                            <div class="pull-right col-xs-6 text-right listing-view-action"><span
                                    class="list-view active"><i class="  icon-th"></i></span> <span
                                    class="compact-view"><i class=" icon-th-list  "></i></span> <span
                                    class="grid-view "><i class=" icon-th-large "></i></span></div>
                            <div style="clear:both"></div>
                        </div>
                        <!--/.listing-filter-->

                        <!-- Mobile Filter bar-->
                        <div class="mobile-filter-bar col-xl-12  ">
                            <ul class="list-unstyled list-inline no-margin no-padding">
                                <li class="filter-toggle">
                                    <a class="">
                                        <i class="  icon-th-list"></i>
                                        Filters
                                    </a>
                                </li>
                                <li>


                                    <div class="dropdown"> <a data-toggle="dropdown" class="dropdown-toggle"> Short

                                        by </a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-item"><a href="" rel="nofollow">Relevance</a>
                                            </li>
                                            <li class="dropdown-item"><a href="" rel="nofollow">Date</a>
                                            </li>
                                            <li class="dropdown-item"><a href="" rel="nofollow">Company</a>
                                            </li>
                                        </ul>
                                    </div>

                                </li>
                            </ul>
                        </div>
                        <div class="menu-overly-mask"></div>
                        <!-- Mobile Filter bar End-->
                            <div class="tab-content">
                            <div class="tab-pane  active " id="alladslist">
                                <div class="adds-wrapper row no-margin">
                                <?php if ( $books->getTotal_books() - $books->getStartIndex() > 0 ){ ?>
                                    <?php foreach($items->items as $item){ ?>
                                    <div class="item-list">
                                        <div class="row">
                                            <div class="col-md-2 no-padding photobox">
                                                <div class="add-image">
                                                        <span class="photo-count">
                                                            <i class="fa fa-camera"></i> 2 </span>  
                                                            <?php if ( isset($_GET["pagina"]) ) { ?>
                                                                <a href="book-details.php?pagina=<?php echo $_GET["pagina"]; ?>&detail=true&id=<?php echo $item->id; ?>&keyword=<?php echo urlencode($keyword); ?>">
                                                            <?php }else{ ?>
                                                                <a href="book-details.php?pagina=1&detail=true&id=<?php echo $item->id; ?>&keyword=<?php echo urlencode($keyword); ?>">
                                                            <?php } ?>    
                                                                <img class="thumbnail no-margin" src="<?php echo $item->volumeInfo->imageLinks->thumbnail; ?>" alt="img">
                                                            </a>
                                                </div>
                                            </div>
                                            <!--/.photobox-->
                                            
                                            <div class="col-md-7 add-desc-box">
                                                <div class="ads-details">
                                                    <h5 class="add-title">
                                                        <?php if ( isset($_GET["pagina"]) ) { ?>
                                                            <a href="book-details.php?pagina=<?php echo $_GET["pagina"]; ?>&detail=true&id=<?php echo $item->id; ?>&keyword=<?php echo urlencode($keyword); ?>">
                                                        <?php }else{ ?>
                                                            <a href="book-details.php?pagina=1&detail=true&id=<?php echo $item->id; ?>&keyword=<?php echo urlencode($keyword); ?>">
                                                        <?php } ?>
                                                        <?php echo isset($item->volumeInfo->title) ? $item->volumeInfo->title : " " ?> 
                                                        </a>
                                                    </h5>
                                                    <p class="my_description">
                                                    <?php echo isset($item->volumeInfo->description) ? $item->volumeInfo->description : "No description" ?>
                                                    </p>
                                            <span class="info-row"> 
                                                <span class="add-type business-ads tooltipHere" data-toggle="tooltip" data-placement="right" title="Business Ads">B </span>
                                            <span
                                                    class="date"><i class=" icon-clock"> </i> Today 1:21 pm</span>- <span class="category">Electronics </span>-
                                                <span
                                                        class="item-location"><i class="fa fa-map-marker-alt"></i> New York</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <!--/.add-desc-box-->
                                            <div class="col-md-3 text-right  price-box">
                                                <h2 class="item-price"><?php echo isset($item->saleInfo->listPrice->amount) ? "$ ".$item->saleInfo->listPrice->amount : "No sales"; ?></h2>
                                                <a class="btn btn-danger  btn-sm make-favorite"> <i class="fa fa-certificate"></i>
                                                    <span>Top Ads</span> </a>
                                                <a class="btn btn-secondary  btn-sm make-favorite"> <i class="fa fa-heart"></i>  <span>Save</span>
                                                </a>
                                            </div>
                                            <!--/.add-desc-box-->
                                        </div>

                                    </div>
                                    <!--/.item-list-->
                                <?php } ?>            
                            <?php } ?>
                            </div>
                            </div>
                                <div class="tab-pane   " id="businessads">
                                    <div class="adds-wrapper row no-margin">
                                    <?php if ( $books->getTotal_books() - $books->getStartIndex() > 0 ){ ?>
                                        <?php foreach($items->items as $item){ ?>
                                        <div class="item-list">
                                            <div class="cornerRibbons featuredAds">
                                                <a href="#"> Featured Ads</a>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2 no-padding photobox">
                                                    <div class="add-image">
                                                            <span class="photo-count"><i class="fa fa-camera"></i> 2 </span> 
                                                            <?php if ( isset($_GET["pagina"]) ) { ?>
                                                                <a href="book-details.php?pagina=<?php echo $_GET["pagina"]; ?>&detail=true&id=<?php echo $item->id; ?>&keyword=<?php echo urlencode($keyword); ?>">
                                                            <?php }else{ ?>
                                                                <a href="book-details.php?pagina=1&detail=true&id=<?php echo $item->id; ?>&keyword=<?php echo urlencode($keyword); ?>">
                                                            <?php } ?>
                                                            <img class="thumbnail no-margin" src="<?php echo $item->volumeInfo->imageLinks->thumbnail; ?>" alt="img">
                                                            </a>
                                                    </div>
                                                </div>
                                                <!--/.photobox-->
                                                <div class="col-sm-7 add-desc-box">
                                                    <div class="ads-details">
                                                        <h5 class="add-title">
                                                            <?php if ( isset($_GET["pagina"]) ) { ?>
                                                                <a href="book-details.php?pagina=<?php echo $_GET["pagina"]; ?>&detail=true&id=<?php echo $item->id; ?>&keyword=<?php echo urlencode($keyword); ?>">
                                                            <?php }else{ ?>
                                                                <a href="book-details.php?pagina=1&detail=true&id=<?php echo $item->id; ?>&keyword=<?php echo urlencode($keyword); ?>">
                                                            <?php } ?>
                                                            <?php echo $item->volumeInfo->title; ?> 
                                                            </a>
                                                        </h5>
                                                        <span class="info-row"> 
                                                            <span class="add-type business-ads tooltipHere" data-toggle="tooltip" data-placement="right" title="Business Ads">B</span> 
                                                            <span class="date">
                                                                    <i class=" icon-clock"> </i> Today 1:21 pm </span> - <span class="category">Electronics </span>- 
                                                                    <span class="item-location"><i class="fa fa-map-marker-alt"></i> London </span> </span></div>
                                                </div>
                                                <!--/.add-desc-box-->
                                                <div class="col-md-3 text-right  price-box">
                                                    <h2 class="item-price"> <?php echo isset($item->saleInfo->listPrice->amount) ? "$ ".$item->saleInfo->listPrice->amount : "No sales"; ?> </h2>
                                                    
                                                    <a class="btn btn-danger  btn-sm make-favorite"> <i class="fa fa-certificate"></i> <span>Featured Ads</span>
                                                    </a> <a class="btn btn-default  btn-sm make-favorite"> <i class="fa fa-heart"></i> <span>Save</span> </a></div>
                                                <!--/.add-desc-box-->
                                            </div>
                                        </div>
                                        <!--/.item-list-->
                                            <?php } ?>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="tab-pane   " id="private">
                                    <div class="adds-wrapper row no-margin">
                                    <?php if ( $books->getTotal_books() - $books->getStartIndex() > 0 ){ ?>
                                        <?php foreach($items->items as $item){ ?>    
                                        
                                        <div class="item-list">
                                            <div class="cornerRibbons topAds">
                                                <a href="#"> Top Ads</a>
                                            </div>

                                            <div class="row">

                                                <div class="col-md-2 no-padding photobox">
                                                    <div class="add-image"><span class="photo-count"><i class="fa fa-camera"></i> 2 </span> 
                                                    <?php if ( isset($_GET["pagina"]) ) { ?>
                                                        <a href="book-details.php?pagina=<?php echo $_GET["pagina"]; ?>&detail=true&id=<?php echo $item->id; ?>&keyword=<?php echo urlencode($keyword); ?>">
                                                    <?php }else{ ?>
                                                        <a href="book-details.php?pagina=1&detail=true&id=<?php echo $item->id; ?>&keyword=<?php echo urlencode($keyword); ?>">
                                                    <?php } ?>
                                                        <img class="thumbnail no-margin" src="<?php echo $item->volumeInfo->imageLinks->thumbnail; ?>" alt="img">
                                                        </a>
                                                    </div>
                                                </div>
                                                <!--/.photobox-->
                                                <div class="col-sm-7 add-desc-box">
                                                    <div class="ads-details">
                                                        <h5 class="add-title">
                                                        <?php if ( isset($_GET["pagina"]) ) { ?>
                                                                <a href="book-details.php?pagina=<?php echo $_GET["pagina"]; ?>&detail=true&id=<?php echo $item->id; ?>&keyword=<?php echo urlencode($keyword); ?>">
                                                            <?php }else{ ?>
                                                                <a href="book-details.php?pagina=1&detail=true&id=<?php echo $item->id; ?>&keyword=<?php echo urlencode($keyword); ?>">
                                                            <?php } ?>    
                                                        
                                                        
                                                        <?php echo $item->volumeInfo->title; ?> </a>
                                                        </h5>
                                                        <span class="info-row"> <span class="add-type business-ads tooltipHere" data-toggle="tooltip"
                                                                                      data-placement="right" title="Business Ads">B </span> <span class="date"><i
                                                                class=" icon-clock"> </i> Today 1:21 pm </span> - <span class="category">Electronics </span>- <span
                                                                class="item-location"><i class="fa fa-map-marker-alt"></i> London </span> </span></div>
                                                </div>
                                                <!--/.add-desc-box-->
                                                <div class="col-md-3 text-right  price-box">
                                                    <h2 class="item-price"> <?php echo isset($item->saleInfo->listPrice->amount) ? "$ ".$item->saleInfo->listPrice->amount : "No sales"; ?> </h2>
                                                    <a class="btn btn-danger  btn-sm make-favorite"> <i class="fa fa-certificate"></i> <span>Top Ads</span> </a> <a
                                                        class="btn btn-default  btn-sm make-favorite"> <i class="fa fa-heart"></i> <span>Save</span> </a></div>
                                                <!--/.add-desc-box-->
                                            </div>
                                        </div>
                                        <!--/.item-list-->
                                            <?php } ?>
                                        <?php } ?>

                                        
                                    </div>
                                </div>
                        </div>


                        <div class="tab-box  save-search-bar text-center"><a href="#"> <i class=" icon-star-empty"></i>
                            Save Search </a></div>
                    </div>

                    <div class="pagination-bar text-center">
                    	<nav aria-label="Page navigation " class="d-inline-b">
                    		<ul class="pagination">
                            <?php 
                            if ( $books->getTotal_books() - $books->getStartIndex() > 0 ){
                                if ( !isset($_GET["pagina"]) ){
                                    if ($books->getTotal_books() - $books->getStartIndex() > 10){
                                        echo '<li class="page-item"><a class="page-link" href="'.$books->getUrl_results().'?keyword='.urlencode($keyword).'&pagina=2">Siguiente</a></li>';    
                                    }
                                }else{
                                    $registro_actual = $_GET["pagina"] * 10;
                                    $diferencia_registros = $books->getTotal_books() - ($books->getStartIndex() + 10);
                                    if ( $_GET["pagina"] > 1){
                                        $pagina_anterior = $_GET["pagina"]-1;
                                        echo '<li class="page-item"><a class="page-link" href="'.$books->getUrl_results().'?keyword='.urlencode($keyword).'&pagina='.$pagina_anterior.'">Anterior</a></li>';
                                    }

                                    if ($diferencia_registros > 20){
                                        $pagina_anterior = $_GET["pagina"]-1;
                                        $pagina_actual = $_GET["pagina"]+1;
                                        echo '<li class="page-item"><a class="page-link" href="'.$books->getUrl_results().'?keyword='.urlencode($keyword).'&pagina='.$pagina_actual.'">Siguiente</a></li>';
                                    }
                                }
                            }
                            ?>
                            </ul>
                    	</nav>
                    </div>
                    <!--/.pagination-bar -->

                </div>
                <!--/.page-content-->

            </div>
        </div>
    </div>
    <!-- /.main-container -->

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
							<li><a href="faq.html">FAQ
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
    <!-- /.footer -->
</div>
<!-- /.wrapper -->

<!-- Modal Change City -->

<div class="modal fade modalHasList" id="selectRegion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	 aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="exampleModalLabel"><i class=" icon-map"></i> Select your region </h4>

				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
						class="sr-only">Close</span></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-12">

						<p>Popular cities in <strong>New York</strong>
						</p>

						<div style="clear:both"></div>
						<div class="col-sm-6 no-padding">
							<select class="form-control selecter  " id="region-state" name="region-state">
								<option value="">All States/Provinces</option>
								<option value="Alabama">Alabama</option>
								<option value="Alaska">Alaska</option>
								<option value="Arizona">Arizona</option>
								<option value="Arkansas">Arkansas</option>
								<option value="California">California</option>
								<option value="Colorado">Colorado</option>
								<option value="Connecticut">Connecticut</option>
								<option value="Delaware">Delaware</option>
								<option value="District of Columbia">District of Columbia</option>
								<option value="Florida">Florida</option>
								<option value="Georgia">Georgia</option>
								<option value="Hawaii">Hawaii</option>
								<option value="Idaho">Idaho</option>
								<option value="Illinois">Illinois</option>
								<option value="Indiana">Indiana</option>
								<option value="Iowa">Iowa</option>
								<option value="Kansas">Kansas</option>
								<option value="Kentucky">Kentucky</option>
								<option value="Louisiana">Louisiana</option>
								<option value="Maine">Maine</option>
								<option value="Maryland">Maryland</option>
								<option value="Massachusetts">Massachusetts</option>
								<option value="Michigan">Michigan</option>
								<option value="Minnesota">Minnesota</option>
								<option value="Mississippi">Mississippi</option>
								<option value="Missouri">Missouri</option>
								<option value="Montana">Montana</option>
								<option value="Nebraska">Nebraska</option>
								<option value="Nevada">Nevada</option>
								<option value="New Hampshire">New Hampshire</option>
								<option value="New Jersey">New Jersey</option>
								<option value="New Mexico">New Mexico</option>
								<option selected value="New York">New York</option>
								<option value="North Carolina">North Carolina</option>
								<option value="North Dakota">North Dakota</option>
								<option value="Ohio">Ohio</option>
								<option value="Oklahoma">Oklahoma</option>
								<option value="Oregon">Oregon</option>
								<option value="Pennsylvania">Pennsylvania</option>
								<option value="Rhode Island">Rhode Island</option>
								<option value="South Carolina">South Carolina</option>
								<option value="South Dakota">South Dakota</option>
								<option value="Tennessee">Tennessee</option>
								<option value="Texas">Texas</option>
								<option value="Utah">Utah</option>
								<option value="Vermont">Vermont</option>
								<option value="Virgin Islands">Virgin Islands</option>
								<option value="Virginia">Virginia</option>
								<option value="Washington">Washington</option>
								<option value="West Virginia">West Virginia</option>
								<option value="Wisconsin">Wisconsin</option>
								<option value="Wyoming">Wyoming</option>
							</select>
						</div>
						<div style="clear:both"></div>

						<hr class="hr-thin">
					</div>
					<div class="col-md-4">
						<ul class="list-link list-unstyled">
							<li><a href="#" title="">All Cities</a></li>
							<li><a href="#" title="Albany">Albany</a></li>
							<li><a href="#" title="Altamont">Altamont</a></li>
							<li><a href="#" title="Amagansett">Amagansett</a></li>
							<li><a href="#" title="Amawalk">Amawalk</a></li>
							<li><a href="#" title="Bellport">Bellport</a></li>
							<li><a href="#" title="Centereach">Centereach</a></li>
							<li><a href="#" title="Chappaqua">Chappaqua</a></li>
							<li><a href="#" title="East Elmhurst">East Elmhurst</a></li>
							<li><a href="#" title="East Greenbush">East Greenbush</a></li>
							<li><a href="#" title="East Meadow">East Meadow</a></li>

						</ul>
					</div>
					<div class="col-md-4">
						<ul class="list-link list-unstyled">
							<li><a href="#" title="Elmont">Elmont</a></li>
							<li><a href="#" title="Elmsford">Elmsford</a></li>
							<li><a href="#" title="Farmingville">Farmingville</a></li>
							<li><a href="#" title="Floral Park">Floral Park</a></li>
							<li><a href="#" title="Flushing">Flushing</a></li>
							<li><a href="#" title="Fonda">Fonda</a></li>
							<li><a href="#" title="Freeport">Freeport</a></li>
							<li><a href="#" title="Fresh Meadows">Fresh Meadows</a></li>
							<li><a href="#" title="Fultonville">Fultonville</a></li>
							<li><a href="#" title="Gansevoort">Gansevoort</a></li>
							<li><a href="#" title="Garden City">Garden City</a></li>


						</ul>
					</div>
					<div class="col-md-4">
						<ul class="list-link list-unstyled">
							<li><a href="#" title="Oceanside">Oceanside</a></li>
							<li><a href="#" title="Orangeburg">Orangeburg</a></li>
							<li><a href="#" title="Orient">Orient</a></li>
							<li><a href="#" title="Ozone Park">Ozone Park</a></li>
							<li><a href="#" title="Palatine Bridge">Palatine Bridge</a></li>
							<li><a href="#" title="Patterson">Patterson</a></li>
							<li><a href="#" title="Pearl River">Pearl River</a></li>
							<li><a href="#" title="Peekskill">Peekskill</a></li>
							<li><a href="#" title="Pelham">Pelham</a></li>
							<li><a href="#" title="Penn Yan">Penn Yan</a></li>
							<li><a href="#" title="Peru">Peru</a></li>

						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

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
<script src="assets/js/main.min.js"></script>    
   

</body>
<script>
jQuery(function(){
   
  // decode word  
  word_buscar = $("input[name='buscar']").val();
  word_buscar = decodeURI(word_buscar);  
  $("input[name='buscar']").val(word_buscar);  

  $("#form1").submit(function(event){
    event.preventDefault();
  });

  // send submit form
  $("button[name='enviar']").click(function(event){
    word_buscar = $("input[name='buscar']").val();
    if (word_buscar != ""){
        word_buscar = word_buscar.trim();
        word_buscar = encodeURI(word_buscar);
        $("input[name='buscar']").val(word_buscar); 
        $('#form1').unbind('submit').submit();
    }  
  });
  
  // send category to submit form
  $(".category").click(function(){
      var category = $(this).text();
      category = category.trim();
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

  // send category to submit form
  $(".category_popular").click(function(){
      var category = $(this).text();
      category = category.trim();
      category = encodeURI(category);
      $("input[name='buscar']").val(category);
      $('#form1').unbind('submit').submit();
  });

  // send category to submit form
  $("#search-category").change(function(){
      var my_option = $('#search-category option').eq($(this).prop("selectedIndex"));    
      if (!my_option.attr("disabled")){
        var category = my_option.attr("value");
        category = category.trim();
        category = encodeURI(category);
        console.log("categoria: "+category);
        $("input[name='buscar']").val(category);
        $('#form1').unbind('submit').submit();
      }
  });

  $("#id-location").change(function(){
      var my_option = $('#id-location option').eq($(this).prop("selectedIndex"));    
      if (!my_option.attr("disabled")){
        var category = my_option.attr("value");
        category = category.trim();
        category = encodeURI(category);
        console.log("categoria: "+category);
        $("input[name='buscar']").val(category);
        $('#form1').unbind('submit').submit();
      }
  });
  
});
</script>
</html>
