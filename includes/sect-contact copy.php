<!-- ======= Contact Section ======= -->
<?php
// Genereer een nieuwe som als die er nog niet is
if (!isset($_SESSION['captcha_a'])) {
	$_SESSION['captcha_a'] = rand(1, 9);
	$_SESSION['captcha_b'] = rand(1, 9);
}
?>
<section id="contact" class="contact <?php echo (Tools::sectOne() ? 'section-one' : 'section-two'); ?>">
	<div class="container" data-aos="fade-up">

		<div class="section-title">
			<h2>Contact</h2>
			<h3>Neem contact op</h3>
			<div class="row mb-4 g-5">
				<div class="col-lg">
					<p>JobHulpMaatje Zoetermeer is één van de gebruikers van het Forum in Zoetermeer.
						Voor algemene zaken kun je contact opnemen met JobHulpMaatje Zoetermeer via het onderstaande formulier.</p>
				</div>
				<div class="col-lg">
					<p>Wil je je aanmelden voor een JobGroup, voor een individueel traject of als vrijwilliger? <a href="aanmelden.php">Ga dan naar het aanmeldformulier</a>.</p>
				</div>
			</div>

			<div class="row" data-aos="fade-up" data-aos-delay="100">
				<div class="col-md-6 col-lg-3 d-flex align-items-stretch">
					<!-- <div class="col-lg-3 col-md-6"> -->
					<div class="info-box mb-4">
						<i class="bx bx-map"></i>
						<h3>Bezoekadres</h3>
						<p>Donderdag van 14:00 to 17:00 uur</p>
						<p>Forum Zoetermeer</p>
					</div>
				</div>

				<div class="col-md-6 col-lg-3 d-flex align-items-stretch">
					<div class="info-box  mb-4">
						<i class="bx bx-envelope"></i>
						<h3>Email</h3>
						<p><a href="mailto:info@jobhulpmaatjezoetermeer.nl">info@jobhulpmaatjezoetermeer.nl</a></p>
					</div>
				</div>

				<div class="col-md-6 col-lg-3 d-flex align-items-stretch">
					<div class="info-box  mb-4">
						<i class="bx bx-phone-call"></i>
						<h3>Telefoon</h3>
						<p>+31 6 4157 2157</p>
					</div>
				</div>

				<div class="col-md-6 col-lg-3 d-flex align-items-stretch">
					<div class="info-box  mb-4">
						<i class="bx bx-building-house"></i>
						<h3>Postadres</h3>
						<p>Hoekerkade 12</p>
						<p>2725 AK Zoetermeer</p>
					</div>
				</div>


			</div>
			<!-- <div class="sharethis-inline-share-buttons"></div> -->
			<div class="row" data-aos="fade-up" data-aos-delay="100">

				<div class="col-xl-6 ">
					<!-- hieronder het iframe van google maps -->
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2453.047920967109!2d4.490194651882014!3d52.060651079630325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5c929760660e7%3A0xffbec3b8f3958d2d!2sBibliotheek%20Forum%20Zoetermeer!5e0!3m2!1snl!2snl!4v1622114479194!5m2!1snl!2snl" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>

				<div class="col-xl-6">
					<form action="proces_contact.php" method="POST" class="php-email-form">
						<div class="row">
							<div class="col form-group">
								<input type="text" name="name" class="form-control" id="name" placeholder="Je naam" required>
							</div>
							<div class="col form-group">
								<input type="email" class="form-control" name="email" id="email" placeholder="Je emailadres" required>
							</div>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="subject" id="subject" placeholder="Onderwerp" required>
						</div>
						<div class="form-group">
							<textarea class="form-control" name="message" rows="5" placeholder="Bericht" required></textarea>
						</div>
						<div class="my-3">
							<div class="error-message" style="display: <?php if (isset($_GET['resc']) && $_GET['resc'] == '2') echo 'block'; else echo 'none'; unset($_GET['resc']);?>;">Het emailadres is niet ingevuld. Probeer opnieuw ajb.</div>
							<div class="error-message" style="display: <?php if (isset($_GET['resc']) && $_GET['resc'] == '1') echo 'block'; else echo 'none'; unset($_GET['resc']);?>;">Je bericht is NIET verzonden. Probeer het later nog eens.</div>
							<div class="sent-message" style="display: <?php if (isset($_GET['resc']) && $_GET['resc'] == '0') echo 'block'; else echo 'none'; unset($_GET['resc']);?>;">Je bericht is verstuurd. Dankjewel!</div>
							<div class="error-message" style="display: <?php echo (isset($_GET['resc']) && $_GET['resc'] == '3') ? 'block' : 'none'; ?>;">
								Verkeerd antwoord bij de veiligheidsvraag. Probeer opnieuw.</div>
						</div>
						<div class="form-group">
							<label>Veiligheidsvraag: hoeveel is 
								<?php echo $_SESSION['captcha_a']; ?> + <?php echo $_SESSION['captcha_b']; ?>?
							</label>
							<input type="number" class="form-control" name="captcha" placeholder="Jouw antwoord" required>
						</div>
						<div class="text-center"><button type="submit">Verstuur bericht</button></div>
					</form>
				</div>

			</div>

		</div>
</section><!-- End Contact Section -->