<!DOCTYPE html>
<html>
  <head>
    <title>Zachary Dobbs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Arimo|Varela+Round" rel="stylesheet">

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
      crossorigin="anonymous">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
      integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
      crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
      integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
      crossorigin="anonymous"></script>

    <!-- CSS Sandbox -->
    <style>
      body {
        background-color: #2c332e;
        font-family: 'Arimo', sans-serif;
      }

      h1 {
        font-size: 8vh;
        font-family: 'Varela Round', sans-serif;
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

      img.img-responsive {
        margin: 0 auto;
      }

      .panel-body {
        margin-bottom: 15px;
      }

      .panel-text {
        margin-top: 35px;
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
        background-color: #427c61;
        margin-top: 50px;
        color: #ededed;
        padding: 20px;
      }

      .nav-pills li {
        float: none;
        display: inline-block;
        margin: 5px;
        border-radius: 5px;
        box-shadow: 2px 2px 2px #2c332e;
      }

      .nav-pills li a {
        color: #2c332e;
        background-color: #ededed;
        transition: all .2s ease-in-out;
      }

      .nav-pills li a:hover {
        color: #ededed;
        background-color: #2c332e;
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

      .container-fluid {
        text-align: center;
      }

      #profile-pic {
        border: 2px solid #ededed;
        box-shadow: 2px 2px 2px #000;
        margin-bottom: 15px;
      }

      #welcome {
        background-color: #ededed;
      }

      #welcome h1 {
        text-shadow: none;
      }
    </style>
  </head>

  <body>
    <!-- Welcome -->
    <div class="container-fluid" id="welcome">
      <div class="row">
        <h1>Zachary Dobbs</h1>
      </div>
    </div>

    <!-- About -->
    <div class="container-fluid area">
      <div class="container">
        <h1>About</h1>
        <img src="img/me.jpeg" alt="Profile Pic" class="img-circle" id="profile-pic">
        <p>My name is Zachary Dobbs. I am from Southern Illinois and currently attend
          University of Missouri in Columbia. I am studying Computer Science with a minor
          in Mathematics.
        </p>
        <div class="col-md-6 col-md-offset-3">
          <ul class="nav nav-pills text-center">
            <li><a href="resume.pdf">Resume</a></li>
            <li><a href="https://github.com/zldobbs?tab=repositories">GitHub</a></li>
            <li><a href="https://www.linkedin.com/in/zachary-dobbs-64a765141/">LinkedIn</a></li>
            <li><a href="mailto:dobbszach@gmail.com">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Portfolio -->
    <div class="container-fluid area">
      <h1>Portfolio</h1>
      <p>Some of my favorite projects I have developed in the past few years. Live demos can be accessed by clicking
        the project's image.</p>
      <!-- Row 1 -->
      <div class="row">
        <!-- Flask -->
        <div class="col-md-6 col-xs-12">
          <div class="panel-heading">
            <a href="http://www.zachflask.tk">
              <h2>Flask Blogger!</h2>
            </a>
          </div>
          <div class="row panel-body">
            <div class="panel-img">
              <a href="http://www.zachflask.tk">
                <img class="img-responsive" src="img/flask_screen.png" alt="Flask Website">
              </a>
            </div>
            <div class="panel-text">
              <p>A sample application developed using the Python microframework Flask. This blogging site
              was a fun exploration for me to learn about the possibilities of using Flask.</p>
              <p class="btn"><a href="https://github.com/zldobbs/flask-app">GitHub Source</a></p>
            </div>
          </div>
        </div>
        <!-- Titter -->
        <div class="col-md-6 col-xs-12">
          <div class="panel-heading">
            <a href="https://zld6fd-sample-app.herokuapp.com">
              <h2>Rails Application</h2>
            </a>
          </div>
          <div class="row panel-body">
            <div class="panel-img">
              <a href="https://zld6fd-sample-app.herokuapp.com">
                <img class="img-responsive" src="img/twitter_screen.png" alt="Titter Website">
              </a>
            </div>
            <div class="panel-text">
              <p>A twitter clone developed using Ruby on Rails. Based on the fantastic tutorial by
              <a href="https://www.railstutorial.org"><b>Michael Hartl</b></a>. This project is something I am
              currently still developing.</p>
              <p class="btn"><a href="https://github.com/zldobbs/sample_app">GitHub Source</a></p>
            </div>
          </div>
        </div>
      </div>

      <!-- Row 2 -->
      <div class="row">
        <!-- Kendrick -->
        <div class="col-md-6 col-xs-12">
          <div class="panel-heading">
            <a href="/kendrick/">
              <h2>Kendrick Lamar</h2>
            </a>
          </div>
          <div class="row panel-body">
            <div class="panel-img">
              <a href="/kendrick/">
                <img class="img-responsive" src="img/kendrick_screen.png" alt="Kendrick Website">
              </a>
            </div>
            <div class="panel-text">
              <p>A website dedicated to the works of the rap artist Kendrick Lamar. Developed as a final project
              for a web development course. Features jQuery elements, php form-handling with login authentication,
              AJAX get requests using jQuery, templating using php include statements, and much more.</p>
              <p class="btn"><a href="https://github.com/zldobbs/kendrick">GitHub Source</a></p>
            </div>
          </div>
        </div>
        <!-- LIVES -->
        <div class="col-md-6 col-xs-12">
          <div class="panel-heading">
            <a href="http://www.lakesidegoats.dx.am">
              <h2>LIVES</h2>
            </a>
          </div>
          <div class="row panel-body">
            <div class="panel-img">
              <a href="http://www.lakesidegoats.dx.am">
                <img class="img-responsive" src="img/goat_screen.png" alt="Goat Website">
              </a>
            </div>
            <div class="panel-text">
              <p>A web application developed in conjuction with my cousin, a small town goat farmer.
              I collaborated one summer with him to create this inventory management tool that helped
              increase his farm's productivity. This project introduced me to database configuration and
              maintenance, php scripting, and Bootstrap interfaces - as well as how to deliver effective
              results to a client with no technical background.</p>
              <p class="btn"><a href="https://github.com/zldobbs/lakeside-goats">GitHub Source</a></p>
            </div>
          </div>
        </div>
      </div>
      <!-- Row 3 -->
      <div class="row">
        <!-- Cycle Fitness -->
        <div class="col-md-6 col-md-offset-3 col-xs-12">
          <div class="panel-heading">
            <a href="/cycle/">
              <h2>Cycle Fitness</h2>
            </a>
          </div>
          <div class="row panel-body">
            <div class="panel-img">
              <a href="/cycle/">
                <img class="img-responsive" src="img/cycle_screen.png" alt="Cycle Fitness Website">
              </a>
            </div>
            <div class="panel-text">
              <p>Website developed for an FBLA web design competition during my Junior year of high school.
              Developed using vanilla HTML, CSS, and jQuery. Won sixth place competing at the Illinois
              state level.</p>
              <p class="btn"><a href="https://github.com/zldobbs/cycle-fitness">GitHub Source</a></p>
            </div>
          </div>
        </div>
      </div>
      <!-- Row 4 -->
      <div class="row">
        <!-- Snake Game -->
        <div class="col-md-8 col-md-offset-2 col-xs-12">
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
            <p class="btn"><a href="https://github.com/zldobbs/snake">GitHub Source</a></p>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <div class="container-fluid area">
      <div class="row">
        <ul class="nav nav-pills">
          <li><a href="mailto:dobbszach@gmail.com">&copy; Zachary Dobbs 2017</a></li>
          <li><a href="https://github.com/zldobbs/zachdobbs-life">View this page's GitHub Source</a></li>
        </ul>
      </div>
    </div>
    
  </body>
</html>
