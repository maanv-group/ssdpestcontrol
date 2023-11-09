<div class="sliding_form slide_out">
	<a href="#" id="form_trigger">Enquiry Form</a>
	<div class="sliding_form_inner">
		<?= form_open(base_url('api/enquiry/insert')) ?>
		<div class="messages1"></div>
		<div class="form-group">

			<input type="text" name="name_enq" data-error="Name field is required!" class="form-control" placeholder="Name" aria-describedby="basic-addon1" required>
		</div>

		<div class="form-group">

			<input type="tel" required="" aria-describedby="basic-addon1" class="form-control" placeholder="Phone Number" data-error="Phone field is required!" name="contact_enq" id="" aria-required="true">
		</div>

		<div class="form-group">

			<input type="email" name="email_enq" data-error="Email field is required!" class="form-control" placeholder="Email Id" aria-describedby="basic-addon1" required>
		</div>

		<div class="form-group">
			<input type="text" name="city" data-error="City field is required!" class="form-control" placeholder="City" aria-describedby="basic-addon1" required>
		</div>

		<div class="form-group kich">
			<p style="color:#c8283e; font-weight: 600;"> *Is this enquiry for your home or business?</p>
			<span class="bt-select">
				<select name="service-type">
					<option value="*">select</option>
					<option value="Home">Home</option>
					<option value="Business">Business</option>
				</select>
			</span>
		</div>

		<div class="form-group kich">
			<span class="bt-select">
				<select name="service">
					<option value="*">Type of service</option>
					<option value="Termites Control">Cockroaches Pest Control</option>
					<option value="Spiders Control">Termites Control Service</option>
					<option value="Cockroach Control">Bed Bug Control Service</option>
					<option value="Rodents Control"> Rodents Control Service</option>
					<option value="Rodents Control"> Fly Control Service</option>
					<option value="Cockroach Control"> BIRD NETING Service</option>
					<option value="Rodents Control">MOSQUITO CONTROL Service</option>
					<option value="Cockroach Control">Commercial Pest Control</option>
					<option value="Cockroach Control">Residential Pest Control</option>
				</select>
			</span>
		</div>
		<input type="hidden" name="captcha_enq" value="<?= $form_captcha['word'] ?>">
		<div class="form-group d-none">
			<div class="mb-2">
				<!-- <input type="text" name="captcha_enq" data-error="City field is required!" class="form-control" placeholder="City" aria-describedby="basic-addon1" required> -->
			</div>
			<?= $form_captcha['image'] ?>
		</div>
		<button class="bt-btn bt-btnblack theme-btn btn-style-one nimm" value="submit" type="submit"><span>Submit now</span></button>
		<?= form_close() ?>
	</div>

</div>
</div>
