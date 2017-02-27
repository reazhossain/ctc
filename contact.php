

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Contact | CTC Connections </title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/glyphicons-halflings-regular.ttf">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="icon" type="img/png" href="img/favicon.ico">
		
        <script type="text/javascript">
            var onloadCallback = function() {
              grecaptcha.render('html_element', {
                'sitekey' : '6Lc95xEUAAAAAAcO0dwOSEzOJmK4iVJec1IGn6qD'
              });
            };
        </script>
	
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
                    <img src="img/contact.png" alt="CTC Connections" width="1024">
                </div>
            </div>
        </div>
        
        
        
        
        <!-------------------------------------------------Support main part--------------------------------------------------------->  
        <section class="main-part-aboutd">
            <div class="container" style="padding-top: 5%">
                <div class="row">
                    <h1 class="main-h-one-contact">  ASK A QUESTION </h1>
                    <p class="frist-p-of-main-partd">
                        Have a question our website hasn't answered? Our experts can help. Drop us a note using the form below.Our customer service representatives will be happy to assist you in any way. Whether through email, phone or in person, we're here to help you get the service you deserve.
                    </p>
                </div>
                
                <div class="row">
                    <h1 class="main-h-one-contact-make">  MAKE AN INQUIRY </h1><br>
                </div>
                
                
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">

<?php require_once "form.php";  ?>

                        <form action="contact.php" method="post" class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="Name">First Name<b style="color: red;">*&nbsp;</b> </label>
                                <div class="col-sm-10">
                                    <input type="text" name="fname" class="form-control" id="name" required="required" placeholder="Please enter your first name....">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="Name">Last Name<b style="color: red;">*&nbsp;&nbsp;</b> </label>
                                <div class="col-sm-10">
                                    <input type="text" name="lname" class="form-control" id="name" required="required" placeholder="Please enter your last name....">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="sel1" style="float: left;padding-left: 12px;">&nbsp;&nbsp; Contact Me by<b style="color: red;">*</b></label>
                                <select name="contactMeBy" class="form-control form-control-select" id="sel1">
                                    <option value="Email"> E-mail </option>
                                    <option value="Phone"> Phone </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Email<b style="color: red;">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> </label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" id="email" required="required" placeholder="Please enter your email....">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="Name"> Phone<b style="color: red;">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> </label>
                                <div class="col-sm-10">
                                    <input type="text" name="phone" class="form-control" id="name" required="required" placeholder="Please enter your full phone number including the country code....">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="comment">Comment<b style="color: red;">*&nbsp;&nbsp;&nbsp;</b> </label>
                                <div class="col-sm-10">          
                                    <textarea class="form-control" name="comment" rows="5" id="comment" required="required"  placeholder="Please enter your question...."></textarea>
                                </div>
                            </div>
                            <div class="form-group">        
                                <div class="col-sm-offset-2 col-sm-10">
								
															<!--Captcha-->
							<div id="html_element"></div>
							<br>
							
                                    <button type="submit" class="btn btn-default">Submit</button>
                                </div>
                            </div>
                          </form>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
        </section><!--End of the support main part-->
        
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
		
		 <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
    </script>
    </body>
</html>



