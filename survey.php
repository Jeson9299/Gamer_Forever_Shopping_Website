<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login/SignUp</title>
</head>
<link rel="stylesheet" href="1.css">
<body background="gamer3.jpg">
<style type="text/css">

<?php	
include_once 'survey_css.php';
?>

</style>
<?php
require_once 'header.php';
?>

	<div class="container-contact100">
		
		<div class="wrap-contact100">
			<div class="contact100-form-title" style="background-image: url(bg-01.jpg);">
				<span class="contact100-form-title-1">
					Survey!
				</span>

				<span class="contact100-form-title-2">
					Feel free to drop us a line below!
				</span>
			</div>

			<form class="contact100-form validate-form" method="POST" action="survey_submit.php">
        <div class="wrap-input100 validate-input" data-validate="Name is required">
          <span class="label-input100">Full Name:</span>
          <input class="input100" type="text" name="name" placeholder="Enter full name">
          <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
          <span class="label-input100">Email:</span>
          <input class="input100" type="text" name="email" placeholder="Enter email addess">
          <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate="Phone is required">
          <span class="label-input100">Phone:</span>
          <input class="input100" type="text" name="phone" placeholder="Enter phone number">
          <span class="focus-input100"></span>
        </div>



<div class="wrap-input100 validate-input" data-validate = "Message is required">
          <span class="label-input100">What was your first impression when you entered the website?</span><br>
          <textarea class="input100" name="message1" placeholder="Your Comment..."></textarea>
          <span class="focus-input100"></span>
        </div>


<div class="wrap-input100 validate-input" data-validate = "Message is required">
          <span class="label-input100">How did you first hear about us?</span><br>
          <textarea class="input100" name="message2" placeholder="Your Comment..."></textarea>
          <span class="focus-input100"></span>
        </div>

<div class="wrap-input100 validate-input" data-validate = "Message is required">
          <span class="label-input100">Is there anything missing on this page</span><br>
          <textarea class="input100" name="message3" placeholder="Your Comment..."></textarea>
          <span class="focus-input100"></span>
        </div>

<div class="wrap-input100 validate-input" data-validate = "Message is required">
          <span class="label-input100">How likely are you to recommend us to a friend or colleague?</span><br>
          <textarea class="input100" name="message4" placeholder="Your Comment..."></textarea>
          <span class="focus-input100"></span>
        </div>



				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>


<script src="project.js"></script>
<?php
include_once 'footer.php';
?>


