<div class="">
	<style>
		.contact-form {
			padding: 1rem;
			padding-top: 2.5rem;
			background-color: #c8283e17;
		}
	</style>
	<div class="contact-form">
		<?= form_open(base_url('api/short_enquiry/insert')) ?>
		<div class="row">
			<div class="form-group col-sm-12">
				<input type="text" name="name_enq" placeholder="Name" required>
			</div>
			<div class="form-group col-sm-12">
				<input type="text" name="contact_enq" placeholder="Phone" required>
			</div>
			<div class="form-group col-sm-12">
				<input type="email" name="email_enq" placeholder="Email" required>
			</div>

			<div class="form-group col-sm-12">
				<div class="mb-2">
					<input type="text" name="captcha_enq" placeholder="Enter Captcha" required>
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
