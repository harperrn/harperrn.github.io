<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cascade Design - Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,200,300,500' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Demo Contact Form'; 
		$to = 'example@bootstrapbay.com'; 
		$subject = 'Message from Contact Demo ';
		
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


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-code"></i> <span class="light">Cascade</span> Design
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#tech">Portfolio</a>
                    </li>

                    <li>
                        <a class="page-scroll" href="#team">Our Team</a>
                    </li>

                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Cascade Design</h1>
                        <p class="intro-text">Clean and Simple Web and Graphic Design</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-binoculars animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2 class="dark">About Cascade Design</h2>
                <p> Cascade Design is the simplest web design operation availiable. Period. We pride ourselves on our timeliness and ability to reach whatever realistic deadline that is required. </p>

                <ul class="about-list">
                    <li>
                        <p>We start with a simple quote which can be filled out below: you tell us what you require, and some ideas on how to achieve that goal. </p>
                    </li>
                    <li>
                        <p>After evaluating ideas, a business plan and contract is developed and written up.</p>
                    </li>
                    <li>
                        <p>An evalutaion of the business plan is required by the customer. If there are changes that need to be made, we will gladly make them. There is absolutely no pressure in signing the contract, and it is written as straight-forward as possible to be as understandable as possible. </p>
                    </li>
                    <li>
                        <p>After satisfaction is met with the plan and the contract is signed, the design process commences. During the process, new ideas could be presented, and progress checkups are fulfilled upon request. </p>
                    </li>
                    <li>
                        <p>If the final product is a website, the site is backed up to a USB flash drive and sent to the customer. If you want, we would also be happy to set it up on the server with all of the correct configurations to best suit your type of site. </p>
                    </li>
                </ul>

                <h2 class="dark">We will ALWAYS</h3>
                <ul class="about-list">
                <li>
                    <p>Allow you to check in with the design whenever you want to. It is your investment in your company, we want you to have as much control as possible. </p>
                </li>
                <li>
                    <p>We will never have any pressure on signing anything. of course you need to sign it before we start, but there is no pressure getting there. We always hold a copy of the plan and contract in case you need an extended amount of time to decide. </p>
                </li>
                <li>
                    <p>All of our contracts are priced built on the amount of work that is going into the job. It is based on the components of the site or design. If an hourly payment is prefered, tell us and we would be happy to make that happen for you. </p>
                </li>
                <li>
                    <p>Before every job starts, clarification is made betweeen us and you to make sure we are on the same page; because who wants to build a site incorrectly, only to have to redo it later? </p>
                </li>
                <li>
                    <p>If there are ideas that you saw online, we will do our best to try and use that idea in our design, but legally we cant plagirise. </p>
                </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Quote Section -->
    <section id="tech" class="content-section text-center">
        <div class="tech-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2 class="dark">The Tech</h2>
                    <br>
                        <p>At the heart of our design team is Ryan, the lead designer who creates beautiful pages on the daily. All of our sites are recomended to have a flat and modern look like many other sites following the "material" design characteristic. Therefore, to do this, we can use a variety of platoforms, frameworks, and plugins that are already built open-source to save a lot of time and money. Based on your needs, we will provide a plethora of frameworks and plugins that allow your site to run the smoothest and fastest for the overall user experience. </p>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="content-section text-center">
        <div class="team-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2 class="dark">Our Team</h2>
                    <p>Our highly experienced, but slowly growing pair of developers get the job done, and quickly. From full stack development to simple graphic design projects, all jobs are completed in a timely manner. </p>
                    <img src="/img/ryan.jpg" class="img-circle">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2 class="dark">Get a Quote or Contact Cascade Design</h2>

 <form class="form-horizontal" role="form" method="post" action="index.php">
	<div class="form-group">
		<label for="name" class="col-sm-2 control-label">Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
			<?php echo "<p class='text-danger'>$errName</p>";?>
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-sm-2 control-label">Email</label>
		<div class="col-sm-10">
			<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
			<?php echo "<p class='text-danger'>$errEmail</p>";?>
		</div>
	</div>
	<div class="form-group">
		<label for="message" class="col-sm-2 control-label">Message</label>
		<div class="col-sm-10">
			<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
			<?php echo "<p class='text-danger'>$errMessage</p>";?>
		</div>
	</div>
	<div class="form-group">
		<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
			<?php echo "<p class='text-danger'>$errHuman</p>";?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<?php echo $result; ?>	
		</div>
	</div>
</form> 

 
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; 2016 Cascade Design</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>