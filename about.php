<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> About | CTC Connections </title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/glyphicons-halflings-regular.ttf">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="icon" type="img/png" href="img/favicon.ico">
    </head>
    <body>
	<?php include_once("analyticstracking.php") ?>
        <!--Header part-->
        <div class="header">
            <!--navber-->  
            <nav class="navbar navbar-inverse  navbar-fixed-top">
                <div class="container nav-padding-ctc">
                    <div class="navbar-header">
                        <a href="index.php" style="float: left;"><img class="img-responsive logo-image" src="img/ctc-logo.png" alt="Ctc"></a>
                        <button class="navbar-toggle my-button" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">copy-need help</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
<!-------------------------------------------------Header---------------------------------------------------------> 
                           <?php include_once("header.php") ?>
 <!---------------------------------------END--------------------------------------------------------------------->
                        </ul>
                    </div>
                </div>
            </nav><!--End of the navbar-->
        </div><!--End of the header--> 
        
      
        
        <!-------------------------------------------------slider part--------------------------------------------------------->       
        <div id="myCarousel" class="container carousel slide slide-margin-top slider-padding-ctc" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/10.png" alt="CTC Connections" width="1024">
                </div>
            </div>
        </div>
        
        
        
        
        <!-------------------------------------------------About main part--------------------------------------------------------->  
        <section class="main-partd">
            <div class="container">
			<h3 style="color:blue" >ABOUT US</h3>
                <div class="row">
				
                    <div class="col-sm-12">
					
					
                        <p class="main-about-vission-pd">
                            <span class="glyphicon glyphicon-th"></span> CTC Connections provides industry-leading solutions that address our customers’ network operations requirements, including consultation, integration, migration, deployment, and management of operations. As a leader in fixed and mobile network solutions for service providers and strategic industries such as energy, transportation and governments worldwide, our end-to-end communication solutions provide the framework for a reliable, secure, flexible and scalable mobile network, while minimizing operational costs.<br>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <h4 class="main-about-h-oned" id="Our-Mission"> Our Mission </h4>
                        <p class="main-about-vission-pd">
                            To use our expertise to extend communications network technology far beyond applying state-of-the-art operations, processes and tools, but enable new service deployment, greater customer satisfaction and loyalty.
                        </p>
                    </div>
                    <div class="col-sm-6">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <center><img class="img-responsive" alt="Alapon" src="img/about-alapon.png"></center>
                    </div>
                    <div class="col-sm-8 about-values-d">
                        <h4 class="main-about-h-oned" id="Our-Vision"> Our Vision </h4>
                        <p class="main-about-vission-pd">
                            To enable the highest quality communication experience among people at a distance.
                        </p>
                        <h4 class="main-about-h-oned" id="Our-Values"> Our Values </h4>
                        <p class="main-about-vission-pd">
                            <span class="glyphicon glyphicon-unchecked"></span> <b>Customers Service: </b> Every employee is responsible for providing great customer service. Our success requires listening to our customers and the ability to deliver our services to fit their business.<br><br>
                            <span class="glyphicon glyphicon-unchecked"></span> <b> Teamwork: </b> The team approach is our profound commitment to those we ultimately serve. We respect the contributions of each person for helping create a positive impact on the team's success.<br><br>
                            <span class="glyphicon glyphicon-unchecked"></span> <b> Respect: </b> We exist to serve our global customers with many cultures. We are professional and embrace people and perspectives from all over the world.<br><br>
                            <span class="glyphicon glyphicon-unchecked"></span> <b> Accountability: </b> We stand for dedication to principles and a commitment to deliver our services on time and on-target.<br>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="main-about-h-oned"> Market Advantage </h4>
                        <p class="main-about-vission-pd">
                            Leveraging on our experience, we have completed several infrastructure projects globally. Not only can we provide network solutions and consult on the most suitable IT technology, but also through our global strategic partners, we offer import/export services to deliver communication network hardware complete with logistics and local support. The company's geographic regions are the Americas, Europe, Middle East, and Africa.
                            CTC Connections helps our global customers incorporate industry leading network solutions aligned with the operator specific regional needs to support mission-critical communication systems for their operations.
                        </p>
                    </div>
                </div>
            </div>
        </section><!--End of the about main part-->
        
        
        <!-- START SCROOL UP DESIGN AREA -->
        <div class="dark-scrollup">
            <span class="glyphicon glyphicon-menu-up"></span>
        </div>
        
 <!-------------------------------------------------Footer part--------------------------------------------------------->
         <?php include_once("footer.php") ?>
<!------------------------------------------------------------------------End of the footer part------------------------------------->
        
        
        
        
        <!--script part-->
        <script src="js/jquery.js"></script>
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/ctc.js"></script>
        <script type='text/javascript' src='js/main.min.js'></script><!--End of script part-->
        <script type='text/javascript' src='js/jquery.responsiveslides.min.js'></script>
        <script>document.getElementById('banner-slider').style.width="100%";</script>
    </body>
</html>