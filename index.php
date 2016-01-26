<?php
$pageTitle = 'Nifty';
$pageId = 'home';
?>


<?php include 'incl/header.php'?>
<style>
  figure img {
    max-width: 200px;
    max-height: 200px;
    margin: 10px;
  }
</style>
<section class="container-fluid">

  <!-- Company History -->
  <section id="journey" class="row fullscreen center-block">
    <section class="col-sm-12 col-lg-6">
      <h2>Our journey</h2>
      <p>
        Since our founding in late 2015, our client list has already included a broad range of companies. We believe our achivements are proof of our commitment to delivering outstanding results for our clients. Our whole company is built on a great portion of passion. Simply talk to any member of our team and you will quickly sense that something is different at Nifty.
      </p>
    </section>
    <section class="col-sm-12 col-lg-6">
      <a class="btn-lg btn-default" href="about.php#offerWrap">Read more</a>
    </section> 
  </section> <!-- /END History -->

  <!-- Employees -->
  <section id="team" class="row fullscreen center-block">
    <figure class="hidden-xs col-lg-4">
      <a href="about.php#joel"><img class="img-rounded" src="img/robin.jpeg" alt="Joel Sjöström" /></a>
      <a href="about.php#robin"><img class="img-rounded" src="img/robin.jpeg" alt="Robin Zetterström"></a>
      <a href="about.php#nina"><img class="img-rounded" src="img/robin.jpeg" alt="Nina Ma"></a>
      <a href="about.php#victor"><img class="img-rounded" src="img/robin.jpeg" alt="Victor T Wagner"></a>
    </figure>
    <section class="col-sm-12 col-lg-6">
      <h2>Our team</h2>
      <p>
        Meet our incredible team that make us one of the leading web development companies in the industry.
      </p>
    </section>
    <a class="hidden-lg hidden-md btn btn-default" href="about.php">Meet our team!</a>
  </section> <!-- /END Employees -->

  <!-- Our showcase -->
  <section id="portfolio" class="row fullscreen center-block">
    <section class="col-sm-12 col-lg-6">
      <h2>Our works</h2>
      <p>
        <b>We're working hard to impress ourselfs and our customers.</b>
        Everyday we do something new that matters to many and togheter we're building a website, the company's best friend that are always there 24/7 throughout the year and making profit.<br>
        Watch our recent projects and please contact us with your project inquery if you like what you see or we could just be friends!
      </p>
    </section>
    <a class="btn-lg btn-default" href="work.php">View our work</a>
  </section> <!-- /END Showcase -->

</section>

<?php include 'incl/footer.php'?>