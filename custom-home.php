<?php
  /* Template Name: Custom Home */
  get_header();
?>
<div class="home-custom-banner">
  <div class="home-custom-banner-text text-content">
    <h1 class="title">Local People Protecting Local Land</h1>
    <p>Montezuma Land Conservancy, at its heart, is a not-for-profit Southwest Colorado land trust located in Cortez, CO established in 1998 to conserve special lands in our community.</p>
    <a href="/donate/" class="link link-light">Donate </a>
  </div>
</div>
<div class="home-mission-section section-wrapper pattern-section">
  <svg  viewBox="0 0 79.539 79.539" xmlns="http://www.w3.org/2000/svg" version="1.1">
    <use xlink:href="#wheat-grain"></use>
  </svg>
  <h1 >Mission</h1>
  <p>Montezuma Land Conservancy partners with our community to connect with, conserve, and enhance southwest Colorado’s agricultural, scenic, and recreational lands and wildlife habitat for today and future generations.</p>
  <a href="#" class="link">Learn More About us </a>
</div>
<div class="home-video-section">
  <div class="card-text-box">
    <p>A bit about who we are...</p>
    <a href="#" class="link">Watch the whole video </a>
  </div>

  <video autoplay loop muted playsinline class="video-on-play">
    <source src="<?php echo get_template_directory_uri() . '/video/home-vid-min.mp4'; ?>" type="video/mp4">
  </video>
</div>
<div class="home-page-programs container flex-cards-container">
  <div class="card" style="background: url(https://cdn.allsummitcounty.com/images/content/5628_6896_Montezuma_Colorado_Pennsylvania_Mine_lg.jpg) no-repeat center center; background-size:cover;">
    <div class="card-text-box">
      <h2>Header</h2>
      <p>This is some text once it knows how big the container is in order to convert 100% to px before adding the values.</p>
      <a href="#" class="link">Find more </a>
    </div>
  </div>
  <div class="card" style="background: url(http://montezumacounty.org/web/wp-content/uploads/2017/11/untitled.png)no-repeat center center; background-size:cover;">
    <div class="card-text-box">
      <h2>Header</h2>
      <p>This is some text once it knows how big the container is in order to convert 100% to px before adding the values.</p>
      <a href="#" class="link">Find more </a>
    </div>
  </div>
  <div class="card" style="background: url(http://karoospace.co.za/wp-content/uploads/2013/06/lowngunis0003.jpg) no-repeat center center; background-size:cover;">
    <div class="card-text-box">
      <h2>Header</h2>
      <p>This is some text once it knows how big the container is in order to convert 100% to px before adding the values.</p>
       <a href="#" class="link">Find more </a>
    </div>
  </div>
</div>
<div class="home-newsletter-section">
  <div class="card-text-box">
    <h1>Sign Up For Our Newsletter</h1>
    <p>Blurb about the newsletter.</p>
    <form action="#" method="post" class="form">
      <div>
          <label for="name">Name</label>
          <input type="text" name="name" id="name" value="" tabindex="1" placeholder="Name"/>
      </div>
      <div>
          <label for="name">Email:</label>
          <input type="text" name="name" id="name" value="" tabindex="1" placeholder="Email"/>
      </div>

      <div>
          <input type="submit" value="Submit" class="button" />
          <a href="#">Learn More</a>
      </div>
    </form>
    
  </div>
</div>
<?php
get_footer();
?>
