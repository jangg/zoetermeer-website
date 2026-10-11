<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="nl">

<head>
  <?php include_once ('includes/head.php'); ?>
  <link href="/assets/css/style_page.css" rel="stylesheet">
  
  <!-- cookiealert styles -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">
  <script>
    $(document).ready(function() {
      $('#a_over').addClass('active');
    });
  </script>

</head>

<body>
  <?php include_once ('includes/header.php'); ?>


  <main id="main">
    <!-- <main id="main"> -->

    <!-- ======= Hero Section ======= -->
    <section id="pagehero" class="d-flex align-items-center">
      <div id="overlay"></div>
      <div class="container" data-aos="zoom-out" data-aos-delay="100" style="z-index: 3;">
        <h1 class="col-lg-12 d-none d-lg-block text-center" style="font-size: 4em;">Onze <span>Missie</span></h1>
        <h1 class="col-lg-12 d-lg-none" style="font-size: 2em;">Onze <span>Missie</span></h1>
      </div>
    </section><!-- End Hero -->
    <!-- ======= Page Section ======= -->
    <section id="page" class="section-one">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Waar staan we voor</h2>
          <h3>En wat zijn onze drijfveren?</h3>
          <p>JobHulpMaatje gelooft dat iedereen in deze samenleving van waarde is. JobHulpMaatje wordt, met de bijbel als richtsnoer, gedreven door naastenliefde. 
            Vanuit die achtergrond willen we opkomen voor mensen die een steuntje in de rug kunnen gebruiken. 
            Iedereen mag zich geliefd weten en voelen op basis van zijn eigen persoon, talent en mogelijkheden.</p>
            
            <p>Het verliezen van je werk is een ingrijpende gebeurtenis. Daarom helpt de gecertificeerde vrijwilliger van JobHulpMaatje jou in je zoektocht naar werk. 
            JobHulpMaatje werkt nauw samen met lokale overheid en professionals. 
            Het maatje biedt een steuntje in de rug om beter bemiddelbaar te worden en (weer) mee te doen in de samenleving.</p>
        </div>
      </div>
    </section>
    
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="section-two faq">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>F.A.Q.</h2>
          <h3>De meest gestelde vragen over onze missie</span></h3>
          <p>Hier vind je de vragen die het meest zijn gesteld door mensen die willen weten waarom wij dit doen</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <ul class="faq-list">

              <li>
                <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Wat doet JobHulpMaatje?<i class="bi bi-caret-down-square icon-show"></i><i class="bi bi-caret-up-square icon-close"></i></div>
                <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    JobHulpMaatje is een organisatie die bestaat uit mensen die op vrijwillige basis andere mensen (hulpzoekers) bijstaan bij het zoeken naar een baan
                    of vervangend zinvolle arbeid (zoals een vrijwilligersbetrekking of een studie).</p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Kan iedereen een maatje worden? <i class="bi bi-caret-down-square icon-show"></i><i class="bi bi-caret-up-square icon-close"></i></div>
                <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                  <p>Om maatje te worden moet je aan een aantal voorwaarden voldoen:</p>
                  <ol>
                    <li>Ouder zijn dan 18 jaar</li>
                    <li>Goed Nederlands kunnen spreken en schrijven</li>
                    <li>Minimaal 2 uur per week beschikbaar hebben</li>
                    <li>Een recente VOG (Verklaring Omtrent Gedrag) kunnen overleggen</li>
                    <li>De training maatje bij JobHulpMaatje Nederland met succes hebben afgelegd</li>
                  </ol>

                </div>
              </li>

            </ul>
          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->



  </main><!-- End #main -->
  <?php include_once ('includes/footer.php'); ?>

</body>

</html>