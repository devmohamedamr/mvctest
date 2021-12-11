<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Free vCard Template</title>
    <meta content="Free vCard Template" name="description">
    <meta content="" name="keywords">
    <meta content="index, follow" name="robots">
    <link href="img/icon.jpg" rel="shortcut icon">
    <!-- Bootstrap core CSS -->
    <link href="<?= assets("vcard/css/bootstrap.css"); ?>" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?= assets("vcard/css/$color.css"); ?>" rel="stylesheet">
    <link href="<?= assets("vcard/css/font-awesome.css"); ?>" rel="stylesheet">
</head>
<body>

  <div class="container">
  		<div class="row">

  			<!-- ASIDE -->
  			<div class="col-md-3 col-md-offset-2 col-sm-4 aside">
  				<img src="<?= assets("vcard/img/img.jpg"); ?>">
  				<h1><?= $profile['name']; ?></h1>
  				<h2><?= $profile['title']; ?></h2>
  				<h3><i aria-hidden="true" class="fa fa-map-marker"></i> New York, NY</h3>
  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><a class="btn" href="#">Download CV</a>
  				<div class="social-network">
  					<a href=""><i aria-hidden="true" class="fa fa-facebook"></i></a> <a href=""><i aria-hidden="true" class="fa fa-twitter"></i></a> <a href=""><i aria-hidden="true" class="fa fa-google-plus"></i></a> <a href=""><i aria-hidden="true" class="fa fa-pinterest-p"></i></a> <a href=""><i aria-hidden="true" class="fa fa-linkedin"></i></a> <a href=""><i aria-hidden="true" class="fa fa-dribbble"></i></a>
  				</div>
  			</div><!-- //ASIDE -->

  			<div class="col-md-7 col-sm-8">
          <!-- Navigation -->
  				<ul class="nav nav-tabs">
  					<li class="active">
  						<a data-toggle="tab" href="#about"><span><i class="glyphicon glyphicon-user"></i></span>About</a>
  					</li>
  					<li>
  						<a data-toggle="tab" href="#resume"><span><i class="glyphicon glyphicon-folder-open"></i></span>Resume</a>
  					</li>
  					<li>
  						<a data-toggle="tab" href="#portfolio"><span><i class="glyphicon glyphicon-cog"></i></span>Portfolio</a>
  					</li>
  					<li>
  						<a data-toggle="tab" href="#contact"><span><i class="glyphicon glyphicon-envelope"></i></span>Contact</a>
  					</li>
  				</ul>
          <!-- Navigation -->
  				<div class="tab-content scroll">

  					<!-- ABOUT ME -->
  					<div class="tab-pane fade in active" id="about">
  						<h1>About me</h1>
  						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  						<ul>
  							<li><i class="glyphicon glyphicon-user"></i> <label>Name</label> <span class="value"><?= $profile['name']; ?></span></li>
  							<li><i class="glyphicon glyphicon-calendar"></i> <label>Date of birth</label> <span class="value">August 15, 1985</span></li>
  							<li><i class="glyphicon glyphicon-map-marker"></i> <label>Adress</label> <span class="value"><?= $profile['address']; ?></span></li>
  							<li><i class="glyphicon glyphicon-envelope"></i> <label>E-mail</label> <span class="value"><?= $profile['email']; ?></span></li>
  							<li><i class="glyphicon glyphicon-phone"></i> <label>Phone</label> <span class="value"><?= $profile['phone']; ?></span></li>
  							<li><i class="glyphicon glyphicon-globe"></i> <label>Website</label> <span class="value"><a href="http://creativedesign.rs" target="_blank">www.creativedesign.rs</a></span></li>
  						</ul>
  						<h1>My Skills</h1>
  						<div class="progress">
  							<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" class="progress-bar" role="progressbar" style="width: 80%;">
  								<span class="skill">HTML / HTML5 <i class="val">80%</i></span>
  							</div>
  						</div>
  						<div class="progress">
  							<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" class="progress-bar" role="progressbar" style="width: 90%;">
  								<span class="skill">CSS 3 <i class="val">90%</i></span>
  							</div>
  						</div>
  						<div class="progress">
  							<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar" role="progressbar" style="width: 70%;">
  								<span class="skill">Bootstrap <i class="val">70%</i></span>
  							</div>
  						</div>
  						<div class="progress">
  							<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" class="progress-bar" role="progressbar" style="width: 40%;">
  								<span class="skill">jQuery <i class="val">40%</i></span>
  							</div>
  						</div>
  						<div class="progress">
  							<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" class="progress-bar" role="progressbar" style="width: 60%;">
  								<span class="skill">Photoshop <i class="val">60%</i></span>
  							</div>
  						</div>
  					</div>
            <!-- About me -->

            <!-- Resume -->
  					<div class="tab-pane fade" id="resume">
  						<h1>Experience</h1>
  						<ul>
  							<li>
  								<h3>Web developer</h3>
  								<h4>Name of Company <span><i class="fa fa-calendar"></i> 2015 - 2017</span></h4>
  								<p>Lorem ipsum dolor sit amet, consectetur adipiscingVivamus sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo tortor Vivamus.</p>
  							</li>
  							<li>
  								<h3>Web Developer</h3>
  								<h4>Name of Company <span><i class="fa fa-calendar"></i> 2013 - 2015</span></h4>
  								<p>Lorem ipsum dolor sit amet, consectetur adipiscingVivamus sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo tortor Vivamus.</p>
  							</li>
  						</ul>
  						<h1>Education</h1>
  						<ul>
  							<li>
  								<h3>Master of Engineering</h3>
  								<h4>Name of University <span><i class="fa fa-calendar"></i> 2011 - 2013</span></h4>
  								<p>Lorem ipsum dolor sit amet, consectetur adipiscingVivamus sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo tortor Vivamus.</p>
  							</li>
  							<li>
  								<h3>Master of Engineering</h3>
  								<h4>Name of University <span><i class="fa fa-calendar"></i> 2009 - 2011</span></h4>
  								<p>Lorem ipsum dolor sit amet, consectetur adipiscingVivamus sit amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in, sagittis inNam leo tortor Nam leo tortor Vivamus.</p>
  							</li>
  						</ul>
  					</div>
            <!-- Resume -->

            <!-- Portfolio -->
  					<div class="tab-pane fade" id="portfolio">
  						<ul class="nav nav-tabs">
  							<li class="active">
  								<a data-toggle="tab" href="#webdesign">Web Design</a>
  							</li>
  							<li>
  								<a data-toggle="tab" href="#graphicdesign">Graphic Design</a>
  							</li>
  							<li>
  								<a data-toggle="tab" href="#logodesign">Logo Design</a>
  							</li>
  						</ul>
  						<div class="tab-content portfolio">
  							<!-- ABOUT ME -->
  							<div class="tab-pane fade in active" id="webdesign">
  								<ul>
  									<li>
  										<img alt="" src="img/portfolio/img1.jpg">
  										<div class="overlay">
  											<h2>Project Name</h2><a class="info" href="#">Link</a>
  										</div>
  									</li>
  									<li>
  										<img alt="" src="img/portfolio/img2.jpg">
  										<div class="overlay">
  											<h2>Project Name</h2><a class="info" href="#">Link</a>
  										</div>
  									</li>
  									<li>
  										<img alt="" src="img/portfolio/img3.jpg">
  										<div class="overlay">
  											<h2>Project Name</h2><a class="info" href="#">Link</a>
  										</div>
  									</li>
  									<li>
  										<img alt="" src="img/portfolio/img4.jpg">
  										<div class="overlay">
  											<h2>Project Name</h2><a class="info" href="#">Link</a>
  										</div>
  									</li>
  									<li>
  										<img alt="" src="img/portfolio/img5.jpg">
  										<div class="overlay">
  											<h2>Project Name</h2><a class="info" href="#">Link</a>
  										</div>
  									</li>
  									<li>
  										<img alt="" src="img/portfolio/img6.jpg">
  										<div class="overlay">
  											<h2>Project Name</h2><a class="info" href="#">Link</a>
  										</div>
  									</li>
  								</ul>
  							</div>
  							<div class="tab-pane fade" id="graphicdesign">
  								<ul>
  									<li>
  										<img alt="" src="img/portfolio/img3.jpg">
  										<div class="overlay">
  											<h2>Project Name</h2><a class="info" href="#">Link</a>
  										</div>
  									</li>
  									<li>
  										<img alt="" src="img/portfolio/img4.jpg">
  										<div class="overlay">
  											<h2>Project Name</h2><a class="info" href="#">Link</a>
  										</div>
  									</li>
  									<li>
  										<img alt="" src="img/portfolio/img5.jpg">
  										<div class="overlay">
  											<h2>Project Name</h2><a class="info" href="#">Link</a>
  										</div>
  									</li>
  									<li>
  										<img alt="" src="img/portfolio/img6.jpg">
  										<div class="overlay">
  											<h2>Project Name</h2><a class="info" href="#">Link</a>
  										</div>
  									</li>
  									<li>
  										<img alt="" src="img/portfolio/img1.jpg">
  										<div class="overlay">
  											<h2>Project Name</h2><a class="info" href="#">Link</a>
  										</div>
  									</li>
  									<li>
  										<img alt="" src="img/portfolio/img2.jpg">
  										<div class="overlay">
  											<h2>Project Name</h2><a class="info" href="#">Link</a>
  										</div>
  									</li>
  								</ul>
  							</div>
  							<div class="tab-pane fade" id="logodesign">
  								<ul>
  									<li>
  										<img alt="" src="img/portfolio/img5.jpg">
  										<div class="overlay">
  											<h2>Project Name</h2><a class="info" href="#">Link</a>
  										</div>
  									</li>
  									<li>
  										<img alt="" src="img/portfolio/img6.jpg">
  										<div class="overlay">
  											<h2>Project Name</h2><a class="info" href="#">Link</a>
  										</div>
  									</li>
  									<li>
  										<img alt="" src="img/portfolio/img1.jpg">
  										<div class="overlay">
  											<h2>Project Name</h2><a class="info" href="#">Link</a>
  										</div>
  									</li>
  									<li>
  										<img alt="" src="img/portfolio/img2.jpg">
  										<div class="overlay">
  											<h2>Project Name</h2><a class="info" href="#">Link</a>
  										</div>
  									</li>
  									<li>
  										<img alt="" src="img/portfolio/img3.jpg">
  										<div class="overlay">
  											<h2>Project Name</h2><a class="info" href="#">Link</a>
  										</div>
  									</li>
  									<li>
  										<img alt="" src="img/portfolio/img4.jpg">
  										<div class="overlay">
  											<h2>Project Name</h2><a class="info" href="#">Link</a>
  										</div>
  									</li>
  								</ul>
  							</div>
  						</div>
  					</div>
            <!-- Portfolio -->

            <!-- contact  -->
  					<div class="tab-pane fade" id="contact">
  						<h1>Contact Me</h1>
  						<div class="form-group">
  							<input class="form-control" id="name" name="name" placeholder="Name" required="" type="text">
  						</div>
  						<div class="form-group">
  							<input class="form-control" id="email" name="email" placeholder="Email" required="" type="text">
  						</div>
  						<div class="form-group">
  							<input class="form-control" id="subject" name="subject" placeholder="Subject" required="" type="text">
  						</div>
  						<div class="form-group">
  							<textarea class="form-control" id="message" maxlength="140" placeholder="Message" rows="7"></textarea>
  						</div><button class="btn btn-primary pull-right" id="submit" name="submit" type="button">Submit Form</button>
  						<ul>
  							<li><i class="glyphicon glyphicon-user"></i> <label>Name</label> <span class="value">John Doe</span></li>
  							<li><i class="glyphicon glyphicon-calendar"></i> <label>Date of birth</label> <span class="value">August 15, 1985</span></li>
  							<li><i class="glyphicon glyphicon-map-marker"></i> <label>Adress</label> <span class="value">New York , NY</span></li>
  							<li><i class="glyphicon glyphicon-envelope"></i> <label>E-mail</label> <span class="value">hello@creativedesign.rs</span></li>
  							<li><i class="glyphicon glyphicon-phone"></i> <label>Phone</label> <span class="value">+123 (11) 1234-5678</span></li>
  							<li><i class="glyphicon glyphicon-globe"></i> <label>Website</label> <span class="value"><a href="http://creativedesign.rs" target="_blank">www.creativedesign.rs</a></span></li>
  						</ul>
  					</div>
            <!-- contact  -->

  				</div>
  			</div>
  		</div>
  	</div>
  	<footer>
  		<div class="col-md-9 col-md-offset-2">
  			&copy; 2017 All Rights Reserved, <a href="https://creativedesign.rs">Creative Design</a>
  		</div>
  	</footer>

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
    <script src="js/map.js"></script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- jQuery -->
    <script src="<?= assets("vcard/js/jquery.js"); ?>"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?= assets("vcard/js/bootstrap.js"); ?>"></script>
</body>
</html>
