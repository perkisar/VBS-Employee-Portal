﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> | VBS&trade;</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/lightbox.css" rel="stylesheet">
    <link href="../css/animate.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">

    <link href="videos.css" rel="stylesheet">
	
    <link href="videos.css" rel="stylesheet">
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="../images/ico/favicon.ico">
</head><!--/head-->
<body>
    <header id="header">
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="index.html">
                        <h1><img class="logo" src="../images/logo/vbs-bolt.png" alt="logo"></h1>
                    </a>

                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../index.html">Home</a></li>
                        <li><a href="../directory.html">Directory</a></li>
                        <li class="dropdown">
                            <a href="../benefits.html">Benefits <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a style="padding-left:20px; margin-top:10px;" target="_blank" href="https://paychecks.intuit.com/">View My Paycheck</a></li>
                                <li><a style="padding-left:20px;" target="_self" href="../401k/">401K Empowerment</a></li>
                                <li><a style="padding-left:20px;" target="_blank" href="https://www.myuhc.com/">Medical Insurance</a></li>
                                <li><a style="padding-left:20px;" target="_blank" href="https://www.metlife.com/">Dental Insurance</a></li>
                                <li><a style="padding-left:20px; margin-bottom:10px;" href="../vision/">Vision Insurance</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="../resources/resources.html">Resources <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a style="padding-left:20px; margin-top:10px;" href="../resources/employeeManual.html">Employee Manual</a></li>
                                <li><a style="padding-left:20px;" target="_blank" href="http://hr.vancouverbolt.int/orangehrm-3.3.1/">Timeclock (IN/OUT)</a></li>
                                <li><a style="padding-left:20px; margin-bottom:10px;" target="_self" href="../itinerary/index.html"> Sales Itinerary</a></li>
                            </ul>
                        </li>
                        <li class="dropdown active"><a href="../videos.html">Training Videos</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!--/#header-->

    <section id="page-breadcrumb" class="hidden">
        <div class="vertical-center sun">
            <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Blog Details</h1>
                            <p class="subTitle">Blog with right sidebar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#page-breadcrumb-->
    <section id="blog-details" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                            <div id="parent" class="single-blog blog-details two-column col-md-9">
                                <div id="video" class="post-thumb">
                                    <!-- VIDEO GOES HERE -->
                                </div>
                                <div class="post-content overflow">
                                    <h2 id="blogTitle" class="post-title bold"></h2>
                                    <h3 class="post-author"><a href="#">Brought to you by Vancouver Bolt and Supply&trade;</a></h3>
                                    <p id="blogDesc">
                                        <!-- DESCRIPTION GOES HERE -->
                                    </p>                           
                                </div>
                            </div>
							<div class="col-md-3">
								<div class="sidebar blog-sidebar">
									<div class="sidebar-item categories">
										<h3>Related Videos</h3>
										<ul id="related" class="nav navbar-stacked">
										</ul>
									</div>
									<div>
										<a id="fullBtn" href="../videos.html" class="btn btn-primary">Back to Videos</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
    <!--/#blog-->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="../images/home/under.png" class="img-responsive inline" alt="">
                </div>
                
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                        <p>&copy; Vancouver Bolt and Supply. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/lightbox.min.js"></script>
    <script type="text/javascript" src="../js/wow.min.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
	<script type="text/javascript" src="jsonVideos.js"></script>
	<script type="text/javascript" src="../videos/videoDetails.js"></script>
	<script type="text/javascript">
		populateDetails();
	</script>
</body>
</html>
