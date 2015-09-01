<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Fitness and personal trainer based in Tyne and Wear">
    <meta name="author" content="Wayne Ramshaw">
    <link rel="icon" href="favicon.ico">

    <title>AM2PM Personal Trainer</title>

    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	
	<!-- <link href="style.css" rel="stylesheet" type="text/css" /> -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="http://am2pm-pt.co.uk/">AM2PM Personal Trainer</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="http://am2pm-pt.co.uk/">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact" data-toggle="modal">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fitness Centre<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Fitness & Circuits</a></li>
                    <li><a href="#">Personal Training</a></li>
                    <li><a href="#">Packages & Prices</a></li>
					<li><a href="#">Testimonials</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Healthy Eating</li>
                    <li><a href="#">Nutrition</a></li>
                    <li><a href="#">Hints & Tips</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="images/carousel-images/pic9.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Personal Training</h1>
              <p>I have been a Level 3 Personal Trainer since 2009 and can give you the experience and expertise to insure you achieve your goals what ever they may be.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="images/carousel-images/pic2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Motivation</h1>
              <p>The knowledge and understanding I have picked up over the years is vital to you getting the results you want.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="images/carousel-images/pic1.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Knowledge</h1>
              <p>I have worked in leading health clubs and gyms such as Banntynes as a Trainer and group exercise instructor and will bring a fun and positive approach towards our session.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="images/chair_squats.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Fitness & Circuits</h2>
          <p>Circuit training provides a good introduction to both weight training and aerobic excercise and provides an effective 50 minute workout for the hole body. It is suitable for all skill and fitness levels - so whether you're a complete beginner or a seasoned exerciser you will enjoy the class and gain benefits from your hard work.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="images/curl-ups.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Personal Training</h2>
          <p>My aim is to help my clients start - and stick to, an activity programme that they enjoy, by making their sessions effective, varied and fun. I apply my knowledge and imagination to my clients' preferences. There is no size fits all - we are all unique but what binds us together is the goal to achieve health, happiness and living life to the full.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="images/curry.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Nutrition</h2>
          <p>Diet is a very important part of improving your fitness and losing weight. A lot of you who are reading this have probably tried loads of different diets, maybe a few different slimming clubs only to find that the weight has dropped initially and then come back on again. Jeff will explain to you how to get your head round your diet to put you in control of it so rather than being dull and boring your diet will be a pleasure.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">I will help you succeed by making sure you give it 110%. <span class="text-muted">Every session.</span></h2>
          <p class="lead">Giving you a structured programme to follow that will challenge you and motivate you to better yourself. His vast knowledge of techniques exercises will ensure that no two sessions are the same keeping them fresh and exciting. With Jeff to guide you he will show you that there is nothing to be afraid of and you will realise that the only thing stopping you is yourself!</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Diet advice is also given to you during the session to suit you and you lifestyle. <span class="text-muted">Sorting out your diet.</span></h2>
          <p class="lead">Is a very important part of improving your fitness and losing weight. A lot of you who are reading this have probably tried loads of different diets, maybe a few different slimming clubs only to find that the weight has dropped initially and then come back on again. Jeff will explain to you how to get your head round your diet to put you in control of it so rather than being dull and boring your diet will be a pleasure.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Whether you want to lose weight. <span class="text-muted">Build muscle or to run.</span></h2>
          <p class="lead">I can plan and deliver the workouts and diets to help you achieve your goals.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Web2Dezine.com &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->

	<!-- start Modal form -->
	<div class="modal fade" id="contact" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<form class="form-horizontal" action="contact.php" method="post">
					<div class="modal-header">
						<h4>Contact me</h4>
						<?php
						$s=$_GET['s'];
						if ($s=="1") {
							echo ('<span class="success">Success! Your request has been sent to us.</span>');
						}
						else if ($s=="2") {
								echo ('<span class="fail">Sorry! Your request has not been sent to us. Please ensure you have filled in the form correctly.</span>');
						}
						?>
					</div>
					<div class="modal-body">
					
						<div class="form-group">
						
						<label for="contact-name" class="col-lg-2 control-label">Name:</label>
							<div class="col-lg-10">
								<input type="text" name="name" class="form-control" id="contact-name" placeholder="Full Name">
							</div>
						</div>
						
						<div class="form-group">
						
						<label for="contact-email" class="col-lg-2 control-label">Email:</label>
							<div class="col-lg-10">
								<input type="email" name="email" class="form-control" id="contact-email" placeholder="you@example.com">
							</div>
						</div>
						
						<div class="form-group">
						
						<label for="contact-tel" class="col-lg-2 control-label">Tel:</label>
							<div class="col-lg-10">
								<input type="tel" name="tel" class="form-control" id="contact-tel" placeholder="111 2222 3333">
							</div>
						</div>
						
						<div class="form-group">
						
						<label for="contact-msg" class="col-lg-2 control-label">Message:</label>
							<div class="col-lg-10">
								<textarea class="form-control" id="contact-msg" name="msg" rows="8"></textarea>
							</div>
						</div>
						
						<div class="form-group">
						
						<label for="contact-security" class="col-lg-2 control-label">Security:</label>
							<div class="col-lg-10">
								<input type="security" name="security" class="form-control" id="contact-security" placeholder="7+3=">
							</div>
						</div>
						
					</div>
					<div class="modal-footer">
						<a class="btn btn-default" data-dismiss="modal">close</a>
						<button class="btn btn-primary" type="submit" value="submit">Send</button>
					</div>
				</form>
			</div>
		</div>
	</div>	
	<!-- End Modal form -->

	<!-- Latest compiled and minified JavaScript -->
	<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
   
  </body>
</html>
