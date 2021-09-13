<?php
  /* Template Name: Custom Home */
  get_header();
?>
<div class="home-custom-banner">
  <div class="home-custom-banner-text">
    <h1 class="title">Local People Protecting Local Land</h1>
    <p>Montezuma Land Conservancy, at its heart, is a not-for-profit Southwest Colorado land trust located in Cortez, CO established in 1998 to conserve special lands in our community.</p>
    <a href="/donate/" class="outline-button white-outline-button">Donate</a>
  </div>
</div>
<div class="surveys-temporary full-width-card">
  <div class="flex-grid">
    <div class="col-2">
      <h2>Community and Conservation Values Survey (Adults 18 and over)</h2>
      <p>We believe listening to all the ways land matters to you and the concerns you have is critical to help guide our work in the future.</p>
      <h4>We want your input</h4>
      <div class="center">
        <a class="outline-button white-outline-button" href="http://survey.constantcontact.com/survey/a07ehtn5sivkn95xwwt/start" class="button">Take the Survey</a>
      </div>
    </div>
    <div class="col-2">
      <h2>Youth Community Survey (Ages 10 to 18)</h2>
      <p>Help guide Montezuma Land Conservancy (MLC) in developing conservation programs and land protection projects that will positively impact you here in Southwest Coloradogul!</p>
      <h4>We want your input</h4>
      <div class="center">
        <a class="outline-button white-outline-button" href="http://survey.constantcontact.com/survey/a07ei0fbf3skovlicks/start" class="button">Take the Survey</a>
      </div>
    </div>
  </div>
</div>
<div class="link-to-important background-dark-red board-link-home section-wrapper">
  <svg  viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" version="1.1">
    <use xlink:href="#promotion"></use>
  </svg>
  <h2>Hiring a Conservation Director</h2>
  <p>Join our Team. MLC is hiring a full-time Conservation Director. Click here to learn more!</p> <br>
  <a href="<?php echo get_template_directory_uri() . '/pdfs/Conservation_Director_PositionDescription_2021.pdf'; ?>" class="outline-button white-outline-button">Click Here for More Information</a>
</div>
<div class="link-to-important background-dark-red board-link-home section-wrapper">
  <svg  viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" version="1.1">
    <use xlink:href="#tractor"></use>
  </svg>
  <h2>Seeking New Board Members</h2>
  <p>Do you have a passion for community impact through conservation? MLC is seeking board members.</p> <br>
  <a href="/about/board/" class="outline-button white-outline-button">Click Here to Find Out More</a>
</div>
<!-- <div class="link-to-important background-dark-red flex-link-to-important">
  <svg  viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" version="1.1">
    <use xlink:href="#check-mark"></use>
  </svg>
  <p> 
    Help Montezuma Land Conservancy renew our accreditation. 
  </p>
  <a href="/mlc-renewal-of-accreditation/" class="link-light">Submit a Comment</a>
</div> -->
<div class="home-mission-section section-wrapper pattern-section">
  <svg  viewBox="0 0 79.539 79.539" xmlns="http://www.w3.org/2000/svg" version="1.1">
    <use xlink:href="#wheat-grain"></use>
  </svg>
  <h1 >Mission</h1>
  <p>Changing lives through land conservation by connecting people to place, forever.</p>
  <a href="/about/" class="link">Learn More About us </a>
</div>
<div class="home-video-section">
  <div class="card-text-box">
    <p>A bit about who we are...</p>
    <a href="/a-film-about-who-we-are/" class="link">Watch the whole video </a>
  </div>

  <video autoplay loop muted playsinline class="video-on-play" preload="none">
    <source src="<?php echo get_template_directory_uri() . '/video/home-vid-min.mp4'; ?>" type="video/mp4">
  </video>
</div>


<div class="flex-cards-container container">
  <a href="/programs/" class="card">
    <div class="background-image" style="background: url(<?php echo get_template_directory_uri() . '/images/CowsAndTree.jpg'; ?>) no-repeat center center; background-size:cover;">
    </div>
    <div class="card-text-box">
      <h2>Find Out what we Do</h2>
      <p>Conservation Easements, Fozzie's Farm, and Community Programs.</p>
      <p class="link">Learn More </p>
    </div> 
  </a>
  <a href="/montezuma-inspire-coalition/" class="card">
    <div  class="background-image" style="background: url(<?php echo get_template_directory_uri() . '/images/teen_backpack.jpg'; ?>)no-repeat center center; background-size:cover;">
    </div>
    <div class="card-text-box">
      <h2>Montezuma Inspire Coalition</h2>
      <p>An organization aiming to develop life-long outdoor lovers and land stewards.</p>
      <p class="link">Get Inspired </p>
    </div> 
  </a>
  <!--Changed this link to events2 temporarily-->
  <a href="/events/" class="card">
    <div class="background-image" style="background: url(<?php echo get_template_directory_uri() . '/images/harvest_beer.jpg'; ?>) no-repeat center center; background-size:cover;">
    </div>
    <div class="card-text-box">
      <h2>Events</h2>
      <p>Check out what we have on the calendar!</p>
      <p class="link">Check out upcoming Events </p>
    </div> 
  </a>
</div>


<div class="home-newsletter-section">
  <?php get_template_part('template-parts/content', 'newsletter'); ?>
</div>
<?php
get_footer();
?>
