<?php
    include('includes/header.php');
 ?>
<section id="about">
        <div class="about-text">
            <h1>Hello, My name is <span class="dennis">Dennis.<span></h1>
            <p class="lead">I'm a self taught front end web developer from New York. I'm looking for opprotunities to start a career in web development. Take a look at some of the things I've been working on below.</p>
            <a href="#projectcarousel" role="button" class="pbutton btn btn-primary">Projects</a>
        </div>
    </section>

    <section id="tech">

      <h1><span class="dennis">Dennis</span>, how do you do it?</h1>
      <p>I have experience using the following Technologies and Frameworks</p><br>
      <div class="flex">
      <div class="ticons">
      <i class="fab fa-html5"></i>
      <p class="text">HTML5</p>
      </div>
      <div class="ticons">
      <i class="fab fa-css3-alt"></i>
      <p class="text">CSS3</p>
      </div>
      <div class="ticons">
      <i class="fab fa-bootstrap"></i>
      <p class="text">Bootstrap</p>
      </div>
      <div class="ticons">
      <i class="fab fa-js-square"></i>
      <p class="text">Javascript</p>
      </div>
      <div class="ticons">
      <i class="fab fa-php"></i>
      <p class="text">PHP</p>
      </div>
      <div class="ticons">
      <span>MySQLi<span>
      </div>
      </div>
      </section>
      <section id="minor">
      <h3>Minor Experience</h3>
      <p>Python, Django, & JQuery.</p>
      </section>



    <div id="projectcarousel" class="carousel slide  carousel-fade container-sm" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="img/ravenreviews.png" class="d-inline-block w-50" alt="Raven Reviews">
      <div class="carousel-caption d-md-block">
        <h5>Raven Reviews</h5>
        <p class="lead">Built with: <b>HTML5</b>, <b>CSS3</b>, <b>Javascript</b></p>
        <p>Responsive website of original reviews</p>
        <a target="_blank" href="https://github.com/Dennisp787/RavenReviews-Website/tree/master/RavenReviews" role="button" class="btn btn-primary">Code</a>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="10000">
      <img src="img/fitlog.png" class="d-inline-block w-50" alt="FitLog">
      <div class="carousel-caption d-md-block">
        <h5>FitLog: Workout logging website</h5>
        <p class="lead">Built with: <b>HTML5</b>, <b>CSS3</b>, <b>Python</b>, <b>Django</b>, <b>Bootstrap</b>, <b>SQLite</b></p>
        <p>Fully functioning web app for logging workouts.</p>
        <a target="_blank" href="https://github.com/Dennisp787/CS50-Final-A-Django-web-app" role="button" class="btn btn-primary">Code</a>
        <a target="_blank" href="https://www.fitlog.online" role="button" class="btn btn-primary">Demo</a>
      </div>
    </div>
  </div>
  <ol class="carousel-indicators d-md-none" style="position: relative;">
    <li data-bs-target="#projectcarousel" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#projectcarousel" data-bs-slide-to="1"></li>
  </ol>
  <a class="carousel-control-prev d-none d-md-flex" href="#projectcarousel" role="button" data-bs-slide="prev">
    <span class="fas fa-chevron-circle-left" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next d-none d-md-flex" href="#projectcarousel" role="button" data-bs-slide="next">
    <span class="fas fa-chevron-circle-right" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>

<?php
include('includes/contact.php');
 ?>


<?php
include('includes/footer.php');
 ?>
