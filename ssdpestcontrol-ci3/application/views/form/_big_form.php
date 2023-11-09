<section class="contact-form-section">
	<div class="auto-container">
		<div class="sec-title text-center">
			<h2>Don’t Hesitate to Question Us <br> Any Time</h2>
		</div>
		<!--Contact Form-->
		<div class="contact-form">
			<?= form_open(base_url('api/short_enquiry/insert')) ?>
			<div class="row">
				<div class="form-group col-sm-12">
					<input type="text" name="name_enq" placeholder="Name" required>
				</div>
				<div class="form-group col-sm-12">
					<input type="email" name="email_enq" placeholder="Email" required>
				</div>

				<div class="form-group col-md-6 col-sm-12">
					<input type="text" name="contact_enq" placeholder="Phone" required>
				</div>
				<input type="hidden" name="captcha_enq" value="<?= $form_captcha['word'] ?>">
				<div class="form-group col-md-6 col-sm-12 d-none">
					<div class="mb-2">
						<!-- <input type="text" name="captcha_enq" placeholder="Enter Captcha" required> -->
					</div>
					<?= $form_captcha['image'] ?>
				</div>

				<div class="form-group col-sm-12">
					<button type="submit" class="theme-btn btn-style-one"><span>Get Started</span></button>
				</div>
			</div>
			<?= form_close() ?>
		</div>
	</div>
</section>
