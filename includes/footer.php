<!-- ======= Footer ======= -->
<footer id="footer">
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 footer-contact">
					<h3>JobHulpMaatje Zoetermeer</h3>
					<h5>Postadres:</h5>
					<p>Hoekerkade 12 <br>
						2725 AK Zoetermeer</p><br>
					<h5>Bezoekadres:</h5>
					<p>Forum Zoetermeer<br />
						Stadhuisplein 1<br />
						Donderdag 14:00-17:00 uur</p><br>
					<h5>Contactinformatie</h5>
					<p>Vul het <a href="">formulier</a> in</p>
				</div>
				
				<div class="col-lg-3 col-md-6 footer-links">
					<h4>De kortste weg naar ...</h4>
					<ul>
						<li><i class="bi bi-caret-right-square"></i> <a href="/index.php">Home</a></li>
						<li><i class="bi bi-caret-right-square"></i> <a href="/aanmelden.php#aanmelden">Aanmelden</a></li>
						<li><i class="bi bi-caret-right-square"></i> <a href="/stichting.php">Over ons</a></li>
						<li><i class="bi bi-caret-right-square"></i> <a href="/index.php#sponsors">Sponsoren</a></li>
						<li><i class="bi bi-caret-right-square"></i> <a href="/index.php#faq">Veel gestelde vragen</a></li>
						<li><i class="bi bi-caret-right-square"></i> <a href="/privacy.php">De privacyregels</a></li>
						<li><i class="bi bi-caret-right-square"></i> <a href="/stichting.php#downloads">Documenten die gedownload kunnen worden</a></li>
						<!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> -->
					</ul>
				</div>

				<div class="col-lg-3 col-md-6 footer-links">
					<h4>Wat we doen</h4>
					<ul>
						<li><i class="bi bi-caret-right-square"></i> <a href="#">Maatjes begeleiding</a></li>
						<li><i class="bi bi-caret-right-square"></i> <a href="#">JobGroup training</a></li>
						<li><i class="bi bi-caret-right-square"></i> <a href="#">Netwerk Workshop</a></li>
						<li><i class="bi bi-caret-right-square"></i>&nbsp;&nbsp;&nbsp;Lezingen</li>
						<li><i class="bi bi-caret-right-square"></i> <a href="https://jobhulpmaatjezoetermeer.nl#contact">Inloopspreekuur</a></li>
					</ul>
				</div>

				<div class="col-lg-3 col-md-6 footer-links">
					<h4>Onze Social Media</h4>
					<p>Volg ons op de belangrijkste social media</p>
					<div class="social-links my-3">
						<a href="https://www.twitter.com/JobHMaatje079/" class="twitter"><i class="bx bxl-twitter-x"></i></a>
						<a href="https://www.facebook.com/jobhulpmaatjezoetermeer/" class="facebook"><i class="bx bxl-facebook"></i></a>
						<!-- <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a> -->
						<a href="https://www.linkedin.com/company/72112958/" class="linkedin"><i class="bx bxl-linkedin"></i></i></a>
					</div>
					<br /><br />
					<div class="row">
						<a href="stichting.php#stichtinginfo">
							<div class="col-8 p-2 bg-light rounded">
								<p style="font-size: .9em;color: black;">JobHulpMaatje Zoetermeer is een</p>
								<img src="assets/img/ANBI_zk_FC_blauw.jpg" class="img-fluid bg-light" width="100%">
							</div>
						</a>
						<div class="col-4"></div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="container py-4">
		<div class="copyright">
			&copy; <?php echo date("Y");?>&nbsp&nbsp<span>JobHulpMaatje Zoetermeer</span>.
		</div>
	</div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->
<!-- START Bootstrap-Cookie-Alert -->
<div id="cookie-banner" class="cookie-banner">
  <p>
	Deze website gebruikt alleen cookies voor analyse en een optimale werking.
	Door op "Akkoord" te klikken geef je toestemming voor het plaatsen van cookies.
	<a href="/privacy.php" target="_blank">Lees meer</a>
  </p>
  <button id="cookie-accept">Akkoord</button>
</div>
<script>
document.addEventListener("DOMContentLoaded", function() {

	function loadGA() {
		var gtagscript = document.createElement('script');
		gtagscript.src = "https://www.googletagmanager.com/gtag/js?id=G-WV9H1ES71H";
		gtagscript.async = true;
		document.head.appendChild(gtagscript);
		
		window.dataLayer = window.dataLayer || [];
		window.gtag = function(){ dataLayer.push(arguments); };
		window.gtag('js', new Date());
		window.gtag('config', 'G-WV9H1ES71H');
	}

  if (localStorage.getItem("cookieConsent") === "true") {
	loadGA();
  } else {
	document.getElementById("cookie-banner").style.display = "block";
  }

  document.getElementById("cookie-accept").onclick = function() {
	localStorage.setItem("cookieConsent", "true");
	document.getElementById("cookie-banner").style.display = "none";
	loadGA();
  };

});
</script>


<!-- <div class="alert text-center cookiealert" style="padding-bottom: 300px; opacity: 0.8;" role="alert">
	<b>Hou je van koekjes?</b> &#x1F36A; JobHulpMaatje gebruikt koekjes voor de beste ervaring op deze website. <a href="/privacy.php">Lees meer</a>

	<button type="button" class="btn btn-primary btn-sm acceptcookies">
		Ja, graag!
	</button>
</div> -->

<!-- Vendor JS Files -->
<script src="/assets/vendor/aos/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<!-- <script src="/assets/vendor/php-email-form/validate.js"></script> -->
<script src="/assets/vendor/purecounter/purecounter.js"></script>
<script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="/assets/vendor/waypoints/noframework.waypoints.js"></script>

<!-- Template Main JS File -->
<script src="/assets/js/main.js"></script>
<!-- Include cookiealert script -->
<script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>
