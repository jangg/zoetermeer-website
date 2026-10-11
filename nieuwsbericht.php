<?php

require_once ('config.php');
include_once ('class/c_newsitem.php');

// $title=urlencode('Content title');
// $url= urlencode('url of page');
// $summary=urlencode("Content you can dynamically display like:");
// $image=urlencode('image url path to display image');

if (isset($_GET['nid']))
  $newsitem_id = $_GET['nid'];
  else
  $newsitem_id = 0;
$newsitem = new Newsitem ('id', $newsitem_id);
$datum = new DateTimeImmutable($newsitem->datetime_pub_extern);
$datum_item = strftime('%A %e %B %Y', $datum->getTimestamp());


// ' . Tools::getShortPost($newsitem->tekst_kort, 50) . 

?>
<!DOCTYPE html>
<html lang="nl">

<head>
  <?php include_once ('includes/head.php'); ?>
  <link href="/assets/css/style_nieuws.css" rel="stylesheet">
  
  <!-- cookiealert styles -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">
  <script src="http://connect.facebook.net/en_US/all.js" async=""></script>
  <script>
    $(document).ready(function(){
      $('#a_home').removeClass('active');
      $('#a_nieuws').addClass('active');
    });
  </script>
</head>
<body>
  <?php include_once ('includes/header.php'); ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center" style="height: 30vh;">
    <div id="overlay"></div>
    <div class="container" data-aos="zoom-out" data-aos-delay="100" style="z-index: 3;">
      <h1 class="col-lg-12 d-none d-xl-block my-4" style="font-size: 6em;"><span>Nieuws</span></h1>
      <h1 class="col-lg-12 d-none d-xl-block my-4" style="font-size: 3em;"><?php echo $newsitem->titel ?></span></h1>
      <h1 class="col-lg-12 d-xl-none my-1" style="font-size: 3em;"><span>Nieuws</span></h1>
      <h1 class="col-lg-12 d-xl-none my-1" style="font-size: 1.5em;"><?php echo $newsitem->titel ?></span></h1>
    </div>
   </section><!-- End Hero -->

  <main id="main" data-aos="fade-up">
    <!-- <main id="main"> -->
  <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">
  
        <div class="d-flex justify-content-between align-items-center">
          <h2 class="text-dark"></h2>
          <ol>
            <li><a href="/index.php">Home</a></li>
            <li><a href="/nieuws.php">Nieuws</a></li>
            <li>Nieuwsbericht</li>
          </ol>
        </div>
  
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Featured news Section ======= -->
    <section id="nieuwsbericht" style="padding-top: 40px;">
      <div class="container" data-aos="fade-up">
        
        
<!--         <div class="row">
          <div class="col-lg-3"></div>
          <div class="col-lg-6 d-flex align-items-stretch pb-0 mb-4">
            <div class="card image-box p-1" style="width: 100%;">
              <img src="newsimages/<?php // echo $newsitem->picfile; ?>" class="m-0" style="height: 100%; object-fit: cover;"/>
            </div>
          </div>
          <div class="col-lg-3"></div>
        </div>
         -->
         
        <?php if ($newsitem->picfile1 != '' && $newsitem->picfile2 == ''): ?>
        <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-sm-8 d-flex align-items-stretch pb-0 mb-4">
            <div class="card image-box p-1" style="width: 100%;">
              <img src="<?php echo $newsitem->picfile1; ?>" class="m-0" style="height: 300%; object-fit: cover;"/>
            </div>
          </div>
          <div class="col-sm-2"></div>      
        </div>
        <?php endif; ?>
        
        <?php if ($newsitem->picfile1 != '' && $newsitem->picfile2 != ''): ?>
        <div class="row">
          <div class="col-sm-4 d-flex align-items-stretch pb-0 mb-4">
            <div class="card image-box p-1" style="width: 100%;">
              <img src="<?php echo $newsitem->picfile1; ?>" class="m-0" style="height: 100%; object-fit: cover;"/>
            </div>
          </div>
          <div class="col-sm-2"></div>
          <div class="col-sm-4 d-flex align-items-stretch pb-0 mb-4">
            <div class="card image-box p-1" style="width: 100%;">
              <img src="<?php echo $newsitem->picfile2; ?>" class="m-0" style="height: 100%; object-fit: cover;"/>
            </div>
          </div> 
        </div>
        <?php endif; ?>
        
        
        <div class="section-title">
          <!-- <a href="https://www.facebook.com/sharer/sharer.php?u=jobhulpmaatjezoetermeer.nl/nieuws.php&" target="_blank">
            Share on Facebook
          </a> -->
          <h4><?php echo $datum_item; ?></h4>
          <h2><?php echo $newsitem->subtitel; ?></h2>
          <?php echo $newsitem->tekst; ?>
        </div>
      </div>
    </section><!-- End Featured news Section -->

  </main><!-- End #main -->
  <?php include_once ('includes/footer.php'); ?>
</body>
</html>