<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Home | CTC Connections </title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/glyphicons-halflings-regular.ttf">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="icon" type="img/png" href="img/favicon.ico">
    </head>
    <body>
        <section>
	<?php include_once("analyticstracking.php") ?>
        <!--Header part-->
        <div class="container header">
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
        <div class="container slider-padding-ctc">
            <div id="myCarousel" class="carousel slide slide-margin-top-top" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="img/1.png" alt="CTC Connections" width="1024">
                    </div>
                    <div class="item">
                        <img src="img/2.png" alt="CTC Connections" width="1024">
                    </div>

                    <div class="item">
                        <img src="img/7.png" alt="CTC Connections" width="1024">
                    </div>
                </div>
            </div>
        </div>
        
        
        
        
        
        <!-------------------------------------------------Main part---------------------------------------------------------> 
        <section class="main-partdd">
            <div class="container">
                <div class="row ctc" style="padding-top: 2%">
                    <div class="col-sm-12">
                        <p class="main-about-vission-pd index-ctc-center" style="color: #4267b2;">
                            CTC Connections offers information technology solutions for telecommunication and data network service providers including design, service management implementation, and neutral audits. We specialize in advising in the most suitable all-IP based solution for the communication and data technology industry, particularly Business Support Systems and Operations Support Systems. Whether your enterprise is large or small, our solutions are tailored to your business needs and give you the reassurance of a stable, secure, and high-performing communications infrastructure across diverse environments.<br>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="main-h-one"> Professional Services </h1>
                        <p class="frist-p-of-main-partd">
                            Rely on our expert service that offers a combination of practical experience within the operational environments of companies, and the definition, design and implementation of various infrastructure solutions in the information and communications technology industry. Our experience enables us to effectively plan, implement, and tailor our solutions to meet operator business needs, while minimizing operational costs.
                        </p>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-4 main-partd-first-table" style="padding-bottom: 4px">
                        <h1 class="main-h-two"> Enterprise Solutions </h1>
                        <p class="second-p-of-main-partd">
                            As service providers and enterprises transform to deliver less costly, less complex, and more reliable networks, we assist operators with vendor negotiation and selection of network hardware. Our solutions help operators navigate the complex information and communications technology environment, and benefit from simplified network solutions and maximum return on investment, while minimizing risks.
                        </p><br>
                    </div>
                    <div class="col-md-4 main-partd-second-table" style="padding-bottom: 4px">
                        <h1 class="main-h-two"> Multivendor Support </h1>
                        <p class="second-p-of-main-partd">
                            Gain a competitive advantage with cost- effective technologies you need to manage and expand your enterprise. We combine our data network and service expertise to propose the best solution that is affordable without any compromise on reliability, features, and flexibility. Your enterprise gains the advantages of adaptable solutions to keep pace with technology innovation.
                        </p><br>
                    </div>
                    <div class="col-md-4 main-partd-third-table" style="padding-bottom: 4px">
                        <h1 class="main-h-two"> Unified Communications </h1>
                        <p class="second-p-of-main-partd">
                            To thrive in the NOW Economy enterprises are being challenged by the evolving communications needs for agile IT and network platforms. We address the competitive need to accelerate blended services that reduce costs, improve employee efficiency and customer collaboration. Your customers’ benefit from the full power of voice services and connectivity resulting from efficient, integrated and unified communications.
                        </p><br>
                    </div>
                </div><br>
            </div>
        </section><!--End of the main part-->
        
        <!-- START SCROOL UP DESIGN AREA -->
        <div class="dark-scrollup">
            <span class="glyphicon glyphicon-menu-up"></span>
        </div>
        
<!-------------------------------------------------Footer part--------------------------------------------------------->
         <?php include_once("footer.php") ?>
<!------------------------------------------------------------------------End of the footer part------------------------------------->
        </section>
        <!--script part-->
        <script src="js/jquery.js"></script>
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/ctc.js"></script>
        <script type='text/javascript' src='js/main.min.js'></script><!--End of script part-->
        <script type='text/javascript' src='js/jquery.responsiveslides.min.js'></script>
        <script> document.getElementById('banner-slider').style.width="100%"; </script>
    </body>
</html>