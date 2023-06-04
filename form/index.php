<?php 
global $isget;
$isget = false;

if(isset($_GET['advid'])){
	$isget = true;
}

?>
<!doctype html>
<html lang='en'>
  <head>
  	<title>Register Form</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
	
	<link rel='stylesheet' href='css/style.css'>

	</head>
	<body>
		<div <?php if(!$isget){echo "hidden='true'";} ?>>
	<section class='ftco-section img bg-hero' style='background-image: url(images/bg_1.jpg);'>
		<div class='container'>

			<div class='row justify-content-center'>
				<div class='col-lg-11'>
					<div class='wrapper'>
						<div class='row no-gutters justify-content-between'>
							<div class='col-lg-6 d-flex align-items-stretch'>
								<div class='info-wrap w-100 p-5'>
									<h3 class='mb-4'>Register Now</h3>
				        	<div class='dbox w-100 d-flex align-items-start'>
				        		<div class='icon d-flex align-items-center justify-content-center'>
				        			<span class='fa fa-map-marker'></span>
				        		</div>
				        		<div class='text pl-4'>
					            <p><span>Address:</span> Arbuda Convention Center Poornima Institute of Engineering and Technology, Jaipur</p>
					          </div>
				          </div>
				        	<div class='dbox w-100 d-flex align-items-start'>
				        		<div class='icon d-flex align-items-center justify-content-center'>
				        			<span class='fa fa-phone'></span>
				        		</div>
				        		<div class='text pl-4'>
					            <p><span>Phone:</span> <a href='tel://9413465367'>+91 9413465367</a></p>
					          </div>
				          </div>
				        	<div class='dbox w-100 d-flex align-items-start'>
				        		<div class='icon d-flex align-items-center justify-content-center'>
				        			<span class='fa fa-paper-plane'></span>
				        		</div>
				        		<div class='text pl-4'>
					            <p><span>Email:</span> <a href='mailto:info@yoursite.com'>tpo@poornima.org</a></p>
					          </div>
				          </div>
				        	<div class='dbox w-100 d-flex align-items-start'>
				        		<div class='icon d-flex align-items-center justify-content-center'>
				        			<span class='fa fa-globe'></span>
				        		</div>
				        		<div class='text pl-4'>
					            <p><span>Date/Time</span> <a href='#'>15-Dec-2022 | 3:00pm</a></p>
					          </div>
				          </div>
			          </div>
							</div>
							<div class='col-lg-5'>
								<div class='contact-wrap w-100 p-md-5 p-4'>
									<h3 class='mb-4'>Register Now</h3>
									<div id='form-message-warning' class='mb-4'></div> 
				      		<div id='form-message-success' class='mb-4'>
				            Your message was sent, thank you!
				      		</div>
									<form method='POST' id='contactForm' name='contactForm'>
										<div class='row'>
											<div class='col-md-12'>
												<div class='form-group'>
													<input type='text' class='form-control' name='name' id='name' placeholder='Name'>
												</div>
											</div>
											<div class='col-md-12'> 
												<div class='form-group'>
													<input type='email' class='form-control' name='email' id='email' placeholder='Email'>
												</div>
											</div>
											<div class='col-md-12'>
												<div class='form-group'>
													<input type='text' class='form-control' name='subject' id='subject' placeholder='Registration Number'>
												</div>
											</div>
											<div class='col-md-12'>
												<div class='form-group'>
													<textarea name='message' class='form-control' id='message' cols='30' placeholder='Mobile Number'></textarea>
												</div>
											</div>
											<div class='col-md-12'>
												<div class='form-group'>
													<input type='submit' value='Send Message' class='btn btn-primary'>
													<div class='submitting'></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src='js/jquery.min.js'></script>
  <script src='js/popper.js'></script>
  <script src='js/bootstrap.min.js'></script>
  <script src='js/jquery.validate.min.js'></script>
  <script src='js/main.js'></script>
  </div>
  <div <?php if($isget){echo "hidden='true'";} ?>>

  <h2 style="text-align:center; font-size:70px">Not Authorized</h2>


  </div>
	</body>
</html>

