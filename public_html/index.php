<!DOCTYPE html>
<html>
  <head>
    <title>Zachary Dobbs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Arimo|Varela+Round" rel="stylesheet">

    <!-- Materialize -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
      integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
      crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

    <!-- CSS Sandbox -->
    <style>
      body {
        background-color: #2c332e;
        /*font-family: 'Arimo', sans-serif;*/
      }

      h1 {
        font-size: 8vh;
        /*font-family: 'Varela Round', sans-serif;*/
      }

      h1, h2, h3 {
        text-shadow: 2px 2px #2c332e;
      }

      a, a:hover {
        text-decoration: none;
        color: #ededed;
      }

      video {
        width: 100%;
        height: auto;
      }

      img.responsive-img {
        margin: 10px auto;
      }

      .panel-body {
        margin-bottom: 15px;
      }

      .panel-text {
        height: 100%;
        position: relative;
      }

      .panel-btn {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        width: 50%;
        margin: 0 auto;
      }

      .panel-img img {
        width: 360px;
        height: 225px;
        box-shadow: 2px 2px 3px #2c332e;
        transition: all .2s ease-in-out;
      }

      .panel-img img:hover {
        transform: scale(1.1);
      }

      .area {
        background-color: #00695c ;
        text-align: center;
        color: #ededed;
        padding: 20px;
      }

      .btn {
        color: #2c332e;
        background-color: #ededed;
      }

      .btn:hover {
        color: #ededed;
        background-color: #2c332e;
        transition: all .2s ease-in-out;
      }

      .btn a {
        color: #2c332e;
      }

      .btn:hover a {
        color: #ededed;
      }

      #profile-pic {
        border: 2px solid #ededed;
        box-shadow: 2px 2px 2px #000;
        margin-bottom: 15px;
      }

      #welcome {
        background-color: #ededed;
        text-align: center;
        padding-top: 10px;
        padding-bottom: 10px;
      }

      #welcome h1 {
        text-shadow: none;
      }
    </style>
  </head>

  <body>
    <!-- Welcome -->
    <div id="welcome">
      <div class="row">
        <h1>Zachary Dobbs</h1>
      </div>
    </div>
    <!-- About -->
    <div class="area">
      <div>
        <h1>About</h1>
        <img src="img/me.jpeg" alt="Profile Pic" class="circle responsive-img" id="profile-pic">
        <p>My name is Zachary Dobbs. I am from Southern Illinois and currently attend
          University of Missouri in Columbia. I am studying Computer Science with a minor
          in Mathematics.
        </p>
        <div class="col m6 push-m3">
            <a class="waves-effect waves-light btn" href="resume.pdf">Resume</a>
            <a class="waves-effect waves-light btn" href="https://github.com/zldobbs?tab=repositories">GitHub</a>
            <a class="waves-effect waves-light btn" href="https://www.linkedin.com/in/zachary-dobbs-64a765141/">LinkedIn</a>
            <a class="waves-effect waves-light btn" href="mailto:dobbszach@gmail.com">Contact</a>
        </div>
      </div>
    </div>
    <div class="parallax-container">
      <div class="parallax">
        <img src="img/mu.jpg"
             alt="parallax-campus">
      </div>
    </div>
    <!-- Portfolio -->
    <div class="area">
      <h1>Portfolio</h1>
      <p>Some of my favorite projects I have developed in the past few years. Live demos can be accessed by clicking
        the project's image.</p>
      <!-- Row 1 -->
      <div class="row">
        <!-- Flask -->
        <div class="col m6 s12">
          <div class="panel-heading">
            <a href="http://www.zachflask.tk">
              <h2>Flask Blogger!</h2>
            </a>
          </div>
          <div class="row panel-body">
            <div class="panel-img">
              <a href="http://www.zachflask.tk">
                <img class="responsive-img" src="img/flask_screen.png" alt="Flask Website">
              </a>
            </div>
            <div class="panel-text">
              <p>A sample application developed using the Python microframework Flask. This blogging site
              was a fun exploration for me to learn about the possibilities of using Flask.</p>
              <div class="panel-btn">
                <p class="waves-effect waves-light btn"><a href="https://github.com/zldobbs/flask-app">GitHub Source</a></p>
              </div>
            </div>
          </div>
        </div>
        <!-- Twitter -->
        <div class="col m6 s12">
          <div class="panel-heading">
            <a href="https://github.com/zldobbs/TwittoMe">
              <h2>TwittoMe</h2>
            </a>
          </div>
          <div class="row panel-body">
            <div class="panel-img">
              <a href="https://github.com/zldobbs/TwittoMe">
                <img class="responsive-img" src="img/twitto_screen.png" alt="Twitto Bot">
              </a>
            </div>
            <div class="panel-text">
              <p>A GroupMe bot that polls a given user timeline continuously, sends realtime tweets to the chat.
                Options allow users to select up to 5 accounts at a time. Developed in 2017 as a final project for a
                web development class. </p>
              <div class="panel-btn">
                <p class="waves-effect waves-light btn"><a href="https://github.com/zldobbs/TwittoMe">GitHub Source</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Row 2 -->
      <div class="row">
        <!-- Kendrick -->
        <div class="col m6 s12">
          <div class="panel-heading">
            <a href="/kendrick/">
              <h2>Kendrick Lamar</h2>
            </a>
          </div>
          <div class="row panel-body">
            <div class="panel-img">
              <a href="/kendrick/">
                <img class="responsive-img" src="img/kendrick_screen.png" alt="Kendrick Website">
              </a>
            </div>
            <div class="panel-text">
              <p>A website dedicated to the works of the rap artist Kendrick Lamar. Developed as a final project
              for a web development course. Features jQuery elements, php form-handling with login authentication,
              AJAX get requests using jQuery, templating using php include statements, and much more.</p>
              <p class="waves-effect waves-light btn"><a href="https://github.com/zldobbs/kendrick">GitHub Source</a></p>
            </div>
          </div>
        </div>
        <!-- LIVES -->
        <div class="col m6 s12">
          <div class="panel-heading">
            <a href="http://www.lakesidegoats.dx.am">
              <h2>LIVES</h2>
            </a>
          </div>
          <div class="row panel-body">
            <div class="panel-img">
              <a href="http://www.lakesidegoats.dx.am">
                <img class="responsive-img" src="img/goat_screen.png" alt="Goat Website">
              </a>
            </div>
            <div class="panel-text">
              <p>A web application developed in conjuction with my cousin, a small town goat farmer.
              I collaborated one summer with him to create this inventory management tool that helped
              increase his farm's productivity. This project introduced me to database configuration and
              maintenance, php scripting, and Bootstrap interfaces - as well as how to deliver effective
              results to a client with no technical background.</p>
              <p class="waves-effect waves-light btn"><a href="https://github.com/zldobbs/lakeside-goats">GitHub Source</a></p>
            </div>
          </div>
        </div>
      </div>
      <!-- Row 3 -->
      <div class="row">
        <!-- Cycle Fitness -->
        <div class="col m6 push-m3 s12">
          <div class="panel-heading">
            <a href="/cycle/">
              <h2>Cycle Fitness</h2>
            </a>
          </div>
          <div class="row panel-body">
            <div class="panel-img">
              <a href="/cycle/">
                <img class="responsive-img" src="img/cycle_screen.png" alt="Cycle Fitness Website">
              </a>
            </div>
            <div class="panel-text">
              <p>Website developed for an FBLA web design competition during my Junior year of high school.
              Developed using vanilla HTML, CSS, and jQuery. Won sixth place competing at the Illinois
              state level.</p>
              <p class="waves-effect waves-light btn"><a href="https://github.com/zldobbs/cycle-fitness">GitHub Source</a></p>
            </div>
          </div>
        </div>
      </div>
      <!-- Row 4 -->
      <div class="row">
        <!-- Snake Game -->
        <div class="col m8 push-m2 s12">
          <div class="panel-heading">
            <h2>Snake</h2>
          </div>
          <div class="row panel-body">
            <video width="560" height="315" controls>
              <source src="img/snake.mp4" type="video/mp4">
              Your browser does not support videos
            </video>
          </div>
          <div class="panel-text">
            <p>Classic snake game created using Pascal. Developed after being introduced to procedural
            programming my Junior year of high school. Features different game modes of varying difficulty,
            options to change the snake's appearance, and local leaderboards.</p>
            <p class="waves-effect waves-light btn"><a href="https://github.com/zldobbs/snake">GitHub Source</a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="parallax-container">
      <div class="parallax">
        <img src="img/centaurus.jpg"
             alt="parallax-river">
      </div>
    </div>
    <!-- Footer -->
    <div class="area">
      <div class="row">
        <a class="waves-effect waves-light btn" href="mailto:dobbszach@gmail.com">&copy; Zachary Dobbs 2017</a>
        <a class="waves-effect waves-light btn" href="https://github.com/zldobbs/zachdobbs-life">View this page's GitHub Source</a>
      </div>
    </div>
  </body>
  <!-- Javascript Sandbox -->
  <script>
    $(document).ready(function() {
      // Parallax
      $('.parallax').parallax();
    });
  </script>
</html>
