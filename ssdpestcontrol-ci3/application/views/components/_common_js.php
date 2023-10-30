<script src="<?= base_url() ?>assets/js/jquery.js"></script>
<script src="<?= base_url() ?>assets/js/popper.min.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap-select.min.js"></script>
<script src="<?= base_url() ?>assets/js/jquery.fancybox.js"></script>
<script src="<?= base_url() ?>assets/js/isotope.js"></script>
<script src="<?= base_url() ?>assets/js/owl.js"></script>
<script src="<?= base_url() ?>assets/js/appear.js"></script>
<script src="<?= base_url() ?>assets/js/wow.js"></script>
<script src="<?= base_url() ?>assets/js/lazyload.js"></script>
<script src="<?= base_url() ?>assets/js/scrollbar.js"></script>
<script src="<?= base_url() ?>assets/js/TweenMax.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="<?= base_url() ?>assets/js/jquery.polyglot.language.switcher.js"></script>
<script src="<?= base_url() ?>assets/js/jquery.ajaxchimp.min.js"></script>
<script src="<?= base_url() ?>assets/js/parallax-scroll.js"></script>

<script src="<?= base_url() ?>assets/js/script.js"></script>

<!-- <script>
  $("#fixed-form-container .body").hide();
$("#fixed-form-container .button").click(function () {
        $(this).next("#fixed-form-container div").slideToggle(400);
        $(this).toggleClass("expanded");
    });
</script>  -->



<script>
	$(document).ready(function() {
		var swiper = ""
	});

	$(document).ready(function() {

		var formWidth = $('.sliding_form').width();
		$('.sliding_form').css('right', '-' + formWidth + 'px');
		$("#form_trigger").on('click', function() {

			if ($('.sliding_form').hasClass('slide_out')) {
				$('.sliding_form').removeClass('slide_out').addClass('slide_in')
				$(".sliding_form").animate({
					right: 0 + 'px'
				});
			} else {
				$('.sliding_form').removeClass('slide_in').addClass('slide_out')
				$('.sliding_form').animate({
					right: '-' + formWidth + 'px'
				});
			}

		});
	});
</script>

<script>
	var swipers = [
		new Swiper('.clientsSwiper', {})
	]
</script>



<!-- Read only script contact form script  -->
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js"></script>

<!-- contact form validation and captcha validation  -->

<script type="text/javascript">
	$("#query_form_enquiry").validate({
		rules: {
			name_enq: {
				required: true
			},
			contact_enq: {
				required: true
			},
			email_enq: {
				required: true
			},
			city: {
				required: true
			},

		},
		messages: {
			name_enq: {
				required: "Name field is required"
			},
			contact_enq: {
				required: "Contact field is required"
			},
			email_enq: {
				required: "Email field is required"
			},
			city: {
				required: "City field is required"
			},

		},
		submitHandler: function(form) {
			var url = "contactmailHome.php";

			// POST values in the background the the script URL
			$.ajax({
				type: "POST",
				url: url,
				data: $('#query_form_enquiry').serialize(),
				success: function(data) {
					$('#query_form_enquiry')[0].reset();


					$('#query_form_enquiry').find('.messages1').html(data);

				}
			});
			// form.submit();
		},
	});
</script>


<!-- contact form validation and captcha validation  -->
