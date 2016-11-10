<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="apple-touch-icon" sizes="57x57" href="/res/img/fav/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/res/img/fav/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/res/img/fav/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/res/img/fav/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/res/img/fav/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/res/img/fav/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/res/img/fav/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/res/img/fav/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/res/img/fav/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/res/img/fav/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/res/img/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/res/img/fav/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/res/img/fav/favicon-16x16.png">
    <link rel="manifest" href="/res/img/fav/manifest.json">
    <meta name="msapplication-TileColor" content="#23262b">
    <meta name="msapplication-TileImage" content="/res/img/fav/ms-icon-144x144.png">
    <meta name="theme-color" content="#23262b">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cascade Design - Clean and Simple Web Development</title>
    <!-- *** Contact ONLY Form -->
    <?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Cascade Design Contact'; 
		$to = 'info@cascadebydesign.com'; 
		$subject = ' Cascade Design Contact Form ';
		
		$body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}
 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
	}
}
	}
?>
        <?php
  $bg = array('bg.jpg', 'bg1.jpg', 'bg2.jpg', 'bg3.jpg', 'bg4.jpg', 'bg5.jpg');

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>
            <!-- Preloader -->
            <div id="preloader">
                <div id="status">&nbsp;</div>
            </div>
            <!-- Bootstrap Core CSS -->
            <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <!-- Custom Fonts -->
            <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
            <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,400i,700" rel="stylesheet">
            <!-- CSS -->
            <link href="res/css/cascade.min.css" rel="stylesheet">
            <!-- Animate.css -->
            <link rel="stylesheet" href="res/css/animate.min.css">
            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <style type="text/css">
        .intro {
            display: table;
            width: 100%;
            height: auto;
            padding: 100px 0;
            text-align: center;
            color: white;
            background: url("res/img/<?php echo $selectedBg; ?>") no-repeat bottom center scroll;
            background-color: #23262b;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
        }
        
        .intro .intro-body {
            display: table-cell;
            vertical-align: middle;
        }
        
        .intro .intro-body .brand-heading {
            font-size: 40px;
        }
        
        .intro .intro-body .intro-text {
            font-size: 18px;
        }
        
        @media (min-width: 768px) {
            .intro {
                height: 100%;
                padding: 0;
            }
            .intro .intro-body .brand-heading {
                font-size: 100px;
            }
            .intro .intro-body .intro-text {
                font-size: 26px;
            }
        }
    </style>
    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse"><i class="fa fa-bars"></i> </button>
                <a class="navbar-brand page-scroll animated fadeIn" href="#page-top"> <span class="light">Cascade</span> Design </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse animated fadeIn">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li> <a class="page-scroll" href="#about">About</a> </li>
                    <li> <a class="page-scroll" href="#designer">Meet the Designer</a> </li>
                    <li> <a class="page-scroll" href="#portfolio"> Portfolio</a> </li>
                    <li> <a class="page-scroll" href="#contact">Contact</a> </li>
                    <li class="page-fade"> <a class="page-fade" href="http://client.cascadebydesign.com/">Log In</a> </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Intro Header -->
    <header class="intro animated fadeIn">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading animated fadeIn">Cascade Design</h1> <img class="animated fadeIn" src="/res/img/cascade-logo.png" height="45%" width="45%" />
                        <br>
                        <br>
                        <p class="intro-text animated fadeIn">Clean and Simple Web and Graphic Design</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="about" class="about">
        <div class="container">
            <div class="col-md-12 col-lg-12 col-sm--12">
                <h1 class="title">Why choose Cascade Design</h1>
                <hr class="seperator">
                <p class="paragraph">Our lead designer has years of experience working with the minimal design process and communicating with clients to achieve exactly the desired effect. Grow your customer base with a well-designed and thought out site with features such as easy navigation and high-interest appealing visuals. A custom site is a huge advantage over a cookie-cutter online design service because there is nothing like it anywhere else on the internet. Make your company presence unique with a custom site and full SEO package for the web. Be found with ease on search engines such as Google, Bing, Yahoo, and more. Get started by contacting Cascade Design.</p>
                <br>
                <br>
                <h1 class="title">Minimalistic Design Process</h1>
                <hr class="seperator">
                <p class="subheader">My minimalistic and effective design workflow allows for fast completion and maximum visual and verbal effectiveness.</p>
                <ul class="list-unstyled">
                    <li>
                        <p class="subheader">- Plan -</p>
                        <p class="paragraph">My planning process starts off with talking to my customer. A business plan is created and a contract signed prior to any work started. The business plan helps define the guidelines for what elements need to be included in the design at hand. Based off of these guidelines, a set of wireframes will be assembled for each page of the site. Site wireframes are a set of plans that show a basic outline of the major components of a webpage. Included are elements such as images, text areas, buttons, etc. This set of plans allows me to show you what the site will look like before I actually start to design.</p>
                    </li>
                    <li>
                        <p class="subheader">- Design -</p>
                        <p class="paragraph">The crucial step of any design process is the construction of the visual aspects of the design project. In this case, choosing colors, fonts, font sizes, and images that will be assembled into the final site. I design the beta of the site based off the wireframes from the last step. This allows for the process to move smoothly and quickly. Only frontend development is done during this step. All of the backend development needs to be done after the site is released privately on the server. </p>
                    </li>
                    <li>
                        <p class="subheader">- Evaluate -</p>
                        <p class="paragraph">Succeeding the design process is the evaluation of the work that has been done. I consult with my customers again and make sure everything looks right on the page. If something is incorrect or needs to be change, I try my best to get those issues resolved as quickly as possible. </p>
                    </li>
                    <li>
                        <p class="subheader">- Revise -</p>
                        <p class="paragraph">Revising the site is the last crucial step of my design process. Revising includes fixing elements that were not previously correct and adding extra elements that assist in summating the overall visual appeal and effectiveness. The backend framework of the site is added during this step. This allows for elements like the contact form, sign up, and logins that are included in the page to work correctly. </p>
                    </li>
                </ul>
                <br>
                <br>
                <h1 class="title">Logo Design</h1>
                <hr class="seperator">
                <p class="paragraph">Standalone logo and brand design is also a service offered here at Cascade Design. A logo is the quintessence of a proper business. When customers see a logo, they instantly think of the business associated. Logos are a bold statement of what you do and how you are associated. For more information about Cascade Design’s logo and brand design service, please contact me via the form at the bottom of this page. </p>
            </div>
        </div>
        </div>
    </section>
    <section id="designer" class="designer">
        <div class="container">
            <div class="row">
                <h1 class="title">Meet The Designer</h1>
                <hr class="seperator-light"> <img class="img-circle img-center" height="250em" width="250em" src="/res/img/ryan.JPG">
                <p class="designer-info color-light">Hello, My name is Ryan. I am the lead designer at Cascade Design. I have been accomplishing asthetically pleasing design for a total of five years now and specifically web design for three. In my free time, I enjoy to walk around locally and film nature. Living in Colorado, it is hard to be so close to the mountains and restrain myself from filming in locations among the high country. Over my years of work, I have seen my fare share of terribly designed webpages, logos, and photography that does not match the subject. I started Cascade Design to add to the movement to simplify the web. My outlook is that a company's webpages should be a reflection of the type of work that they do. A trustworthy site is the first step to achieving that goal. Through great design and photography. </p>
                <br>
                <div align="center"> <img class="middle" src="res/img/cinema.svg" height="90em" width="90em"> <img class="middle" src="res/img/colors.svg" height="90em" width="90em"> <img class="middle" src="res/img/design.svg" height="90em" width="90em"> </div>
            </div>
        </div>
    </section>
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <h1 class="title">Portfolio</h1>
                <p class="subheader">Below is a showcase of our work. We are adding more frequently. </p>
                <hr class="seperator">
                <div class="center-wrapper"> <img type="button" height="100em" width="180em" src="res/img/assessment-logo.png" class="btn modal-btn" data-toggle="modal" data-target="#assessmentinspections"> </div>
                <!-- Modal -->
                <div class="modal fade modal-portfolio" id="assessmentinspections" tabindex="-1" role="dialog" aria-labelledby="Assessment Inspections">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="fa fa-chevron-down color-light" aria-hidden="true"></span></button>
                                <br>
                                <h1 class="title-modal color-light" id="myModalLabel">Assessment Inspections</h1>
                                <p class="subheader med-size color-light">Hardwood flooring inspection informational website.</p>
                                <hr class="seperator">
                                <form action="http://assessmentinspections.org" target="_blank">
                                    <input type="submit" class="btn btn-lg btn-light btn-center" value="View site" /> </form>
                                <br>
                                <p class="paragraph color-light">Assessment Inspections is a Bootstrap-based informational one page site outlining what the company does and prices listed. Project focused on overall asthetics and page design. Some aspects are redundant for customer ease of use. Working PHP contact form at the bottom of the page to contact the owner directly. </p>
                                <br>
                                <button type="button" class="btn btn-light btn-center" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section id="social" class="social">
        <div class="container">
            <div class="row">
                <h1 class="title">Follow on social media</h1>
                <p class="subheader">Click the icons below and follow us on social media to see what's happening at Cascade Design.</p>
                <hr class="seperator">
                <br>
                <div class="social-link">
                    <a class="fa fa-instagram fa-4x social-link" href="http://instagram.com/cascadebydesign" target="_blank"></a>
                    <a class="fa fa-twitter fa-4x social-link" href="http://twitter.com/cascadebydesign" target="_blank"></a>
                    <a class="fa fa-facebook-square fa-4x social-link" href="http://facebook.com/cascadebydesign/" target="_blank"></a>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-lg-12 col-md-12 text-center contact-form">
                    <h1 class="title color-dark">Contact Us</h1>
                    <hr class="seperator">
                    <p class="paragraph med color-dark">Please use the contact form below for general inquiries and to obtain a quote. If you are already a customer, contact Ryan directly.
                        <br> Thank you!</p>
                    <br>
                    <form class="form-horizontal" role="form" method="post" action="index.php">
                        <div class="form-group pagination-centered">
                            <label for="name" class="col-sm-2 col-md-12 col-lg-12 control-label-top color-dark">Name</label>
                            <div class="col-sm-10 col-md-8 col-md-offset-2">
                                <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                                <?php echo "<p class='text-danger'>$errName</p>";?>
                            </div>
                        </div>
                        <div class="form-group pagination-centered">
                            <label for="email" class="col-sm-2 col-md-12 col-lg-12 control-label-top color-dark">Email</label>
                            <div class="col-sm-10 col-md-8 col-md-offset-2">
                                <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                                <?php echo "<p class='text-danger'>$errEmail</p>";?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message" class="col-sm-2 col-md-12 col-lg-12 control-label-top color-dark">Message</label>
                            <div class="col-sm-10 col-md-6 col-md-offset-3">
                                <textarea class="form-control" rows="5" name="message">
                                    <?php echo htmlspecialchars($_POST['message']);?>
                                </textarea>
                                <?php echo "<p class='text-danger'>$errMessage</p>";?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="human" class="col-sm-2 col-md-12 control-label-top color-dark">2 + 3 = ?</label>
                            <div class="col-sm-10 col-md-4 col-md-offset-4">
                                <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                                <?php echo "<p class='text-danger'>$errHuman</p>";?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-1">
                                <input id="submit" name="submit" type="submit" class="btn btn-dark"> </input>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10 col-md-10 col-lg-10 col-sm-offset-2">
                                <?php echo $result; ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p> &copy; 2017 Cascade Design LLC. </p>
            <br>
            <p class="footer"><a class="nostyle" href="sitemap.html">Sitemap and Contributions</a></p>
        </div>
    </footer>
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"> </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h1 class="title color-dark">Assessment Inspections</h1>
                                <p class="subheader color-dark med">Hardwood flooring inspection informational website.</p>
                                <hr class="seperator">
                                <p class="paragraph color-dark med">Bootstrap-based informational one page site outlining what the company does and prices listed. Project focused on asthetics and page design. Some aspects are redundant for customer ease of use. Working PHP contact form at the bottom of the page to contact the owner directly. </p>
                                <hr class="seperator">
                                <p class="subheader color-dark">Project completed in: 1 Month</p>
                                <button type="button" class="btn btn-dark" data-dismiss="modal"><i class="fa fa-times"></i> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <!-- Theme JavaScript -->
    <script src="res/js/cascade.min.js"></script>
    <!-- Preloader -->
    <script type="text/javascript">
        //<![CDATA[
        $(window).on('load', function () { // makes sure the whole site is loaded 
                $('#status').fadeOut(); // will first fade out the loading animation 
                $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
                $('body').delay(350).css({
                    'overflow': 'visible'
                });
            })
            //]]>
    </script>
</body>

</html>