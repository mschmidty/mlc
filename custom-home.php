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
<div class="home-mission-section section-wrapper pattern-section">
  <svg  viewBox="0 0 79.539 79.539" xmlns="http://www.w3.org/2000/svg" version="1.1">
    <use xlink:href="#wheat-grain"></use>
  </svg>
  <h1 >Mission</h1>
  <p>Montezuma Land Conservancy partners with our community to connect with, conserve, and enhance southwest Colorado’s agricultural, scenic, and recreational lands and wildlife habitat for today and future generations.</p>
  <a href="/about/" class="link">Learn More About us </a>
</div>
<div class="home-video-section">
  <div class="card-text-box">
    <p>A bit about who we are...</p>
    <a href="/a-film-about-who-we-are/" class="link">Watch the whole video </a>
  </div>

  <video autoplay loop muted playsinline class="video-on-play">
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
  <a href="/events/" class="card">
    <div class="background-image" style="background: url(<?php echo get_template_directory_uri() . '/images/harvest_beer.jpg'; ?>) no-repeat center center; background-size:cover;">
    </div>
    <div class="card-text-box">
      <h2>Events</h2>
      <p>Check out what we have on the calendar!</p>
      <p class="link">Check out upcomming Events </p>
    </div> 
  </a>
</div>


<div class="home-newsletter-section">
  <?php get_template_part('template-parts/content', 'newsletter'); ?>
</div>
<?php
get_footer();
?>
