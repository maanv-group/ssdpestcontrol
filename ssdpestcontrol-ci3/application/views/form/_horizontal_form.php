

<div class="search-services">
	<div class="auto-container">
		<div class="sec-title text-center mb-30">
			<h2>Find Your Pest Control Service</h2>
		</div>
		<div class="search-services-form">
			<?= form_open(base_url('api/short_enquiry/insert')) ?>
				<div class="row">
					<div class="form-group col-lg-3 col-md-6 col-sm-12">
						<div class="dropdown bootstrap-select">
							<select class="selectpicker" tabindex="-98">
								<option value="*">Type of service</option>
								<option value=".category-1">Termites Control</option>
								<option value=".category-3">Spiders Control</option>
								<option value=".category-4">Rodents Control</option>
								<option value=".category-5">Rodents Control</option>
								<option value=".category-6">Rodents Control</option>
								<option value=".category-7">Cockroach Control</option>
							</select>
						</div>
					</div>
					<div class="form-group col-lg-3 col-md-6 col-sm-12">
						<input type="text" name="name_enq" placeholder="Name" required>
					</div>
					<div class="form-group col-lg-3 col-md-6 col-sm-12">
						<input type="text" name="contact_enq" placeholder="Phone" required>
					</div>
					<div class="form-group col-lg-3 col-md-6 col-sm-12">
						<input type="email" name="email_enq" placeholder="Email" required>
					</div>
					<div class="form-group col-lg-3 col-md-6 col-sm-12">
						<button type="submit" class="theme-btn btn-style-one"><span>Get Started</span></button>
					</div>
				</div>
			<?= form_close() ?>
		</div>
	</div>
</div>
