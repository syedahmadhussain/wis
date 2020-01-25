
<?php include'header.php'?>

		<!-- Contact form & details section -->
		<section class="hg_section ptop-80 pbottom-80" style="margin-top: 200px">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-sm-9">
						<!-- Contact form -->
						<div class="contactForm">
							<form action="mailto:admin@holidaymaker.com" method="post" enctype="text/plain" class="contact_form row">
								<div class="cf_response"></div>
								<p class="col-sm-6 kl-fancy-form">
									<input type="text" name="name" id="cf_name" class="form-control" placeholder="Please enter your first name" value="" tabindex="1" maxlength="35" required>
									<label class="control-label">FIRSTNAME</label>
								</p>
								<p class="col-sm-6 kl-fancy-form">
									<input type="text" name="lastname" id="cf_lastname" class="form-control" placeholder="Please enter your first last name" value="" tabindex="1" maxlength="35" required>
									<label class="control-label">LASTNAME</label>
								</p>
								<p class="col-sm-12 kl-fancy-form">
									<input type="text" name="email" id="cf_email" class="form-control h5-email" placeholder="Please enter your email address" value="" tabindex="1" maxlength="35" required>
									<label class="control-label">EMAIL</label>
								</p>
								<p class="col-sm-12 kl-fancy-form">
									<input type="text" name="subject" id="cf_subject" class="form-control" placeholder="Enter the subject message" value="" tabindex="1" maxlength="35" required>
									<label class="control-label">SUBJECT</label>
								</p>
								<p class="col-sm-12 kl-fancy-form">
									<textarea name="message" id="cf_message" class="form-control" cols="30" rows="10" placeholder="Your message" tabindex="4" required></textarea>
									<label class="control-label">MESSAGE</label>
								</p>

							<p class="col-sm-12">
									<button class="btn btn-fullcolor" type="submit">Send</button>
								</p>
								
							</form>
						</div>
						<!--/ Contact form -->
					</div>
					<!--/ col-md-9 col-sm-9 -->

					<div class="col-md-3 col-sm-3">
						<!-- Contact details -->
						<div class="text_box">
							<h3 class="text_box-title text_box-title--style2">CONTACT INFO</h3>
							<h4>64 Steenbeker Weg,
Kiel,
24106 Germany</h4>
							<p>
T 773-681-0913 <br>
T 773-961-7162
							</p>
							<p>
								<a href="mailto:#">info@holidaymaker.com</a><br>
								<a href="#">www.holidaymaker.com</a>
							</p>
						</div>
						<!--/ Contact details -->
					</div>
					<!--/ col-md-3 col-sm-3 -->
				</div>
				<!--/ .row -->
			</div>
			<!--/ .container -->
		</section>
		<!--/ Contact form & details section -->

<?php include'footer.php'?>
