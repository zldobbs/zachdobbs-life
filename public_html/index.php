<!DOCTYPE html>
<!-- Create github repo for this site -->
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

    <!-- CSS Sandbox, move to external sheet and organize by categories, cleanup unused classes/ids -->
    <style>
      body {
        background-color: #2c332e;
        font-family: 'Arimo', sans-serif;
      }

      .panel-body {
        margin-bottom: 15px;
      }

      .panel-img {
        /*float: left;*/
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

      .panel-text {
        margin-left: 35px;
        margin-top: 35px;
      }

      .jumbotron {
        border-radius: 0;
        /* I don't think this is working. Change it to sections
        with container-fluids. use background color */
      }

      #profile-pic {
        border: 2px solid #ededed;
        box-shadow: 2px 2px 2px #000;
        margin-bottom: 15px;
      }

      .area {
        background-color: #427c61;
        margin-top: 50px;
        color: #ededed;
        padding: 20px;
      }

      #welcome {
        background-color: #ededed;
      }

      #welcome h1 {
        text-shadow: none;
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

      .container-fluid {
        text-align: center;
      }

      video {
        width: 100%;
        height: auto;
      }

      img.img-responsive {
        margin: 0 auto;
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
      <!-- Flask -->
      <div class="row">

        <div class="col-md-6 col-xs-12">
          <div class="panel-heading"><h2>Flask Blogger!</h2></div>
          <div class="row panel-body">
            <div class="panel-img">
              <a href="http://www.zachflask.tk">
                <img class="img-responsive" src="img/flask_screen.png" alt="Flask Website">
              </a>
            </div>
            <div class="panel-text">
              <p>A blogging application developed using Flask.</p>
            </div>
          </div>
        </div>

      <!-- Titter -->
        <div class="col-md-6 col-xs-12">
          <div class="panel-heading"><h2>Titter</h2></div>
          <div class="row panel-body">
            <div class="panel-img">
              <a href="http://localhost:8080">
                <img class="img-responsive" src="img/twitter_screen.png" alt="Titter Website">
              </a>
            </div>
            <div class="panel-text">
              <p>This is a Twitter Clone website. WIP</p>
            </div>
          </div>
        </div>

      <!-- Kendrick -->
        <div class="col-md-6 col-xs-12">
          <div class="panel-heading"><h2>Kendrick Lamar</h2></div>
          <div class="row panel-body">
            <div class="panel-img">
              <a href="/kendrick/">
                <img class="img-responsive" src="img/kendrick_screen.png" alt="Kendrick Website">
              </a>
            </div>
            <div class="panel-text">
              <p>This is a Kendrick Lamar website.</p>
            </div>
          </div>
        </div>

      <!-- LIVES -->
        <div class="col-md-6 col-xs-12">
          <div class="panel-heading"><h2>LIVES</h2></div>
          <div class="row panel-body">
            <div class="panel-img">
              <a href="http://www.lakesidegoats.dx.am">
                <img class="img-responsive" src="img/goat_screen.png" alt="Goat Website">
              </a>
            </div>
            <div class="panel-text">
              <p>This is a goat website.</p>
            </div>
          </div>
        </div>

      <!-- Cycle Fitness -->
        <div class="col-md-6 col-md-offset-3 col-xs-12">
          <div class="panel-heading"><h2>Cycle Fitness</h2></div>
          <div class="row panel-body">
            <div class="panel-img">
              <a href="/cycle/">
                <img class="img-responsive" src="img/cycle_screen.png" alt="Cycle Fitness Website">
              </a>
            </div>
            <div class="panel-text">
              <p>This is a Cycle Fitness website.</p>
            </div>
          </div>
        </div>

        <!-- Snake Game -->
        <div class="col-md-8 col-md-offset-2 col-xs-12">
          <div class="panel-heading"><h2>Snake</h2></div>
          <div class="row panel-body">
            <video width="560" height="315" controls>
              <source src="img/snake.mp4" type="video/mp4">
              Your browser does not support videos
            </video>
          </div>
          <div class="panel-text">
            <p>A snake game I created in high school using Python</p>
          </div>
        </div>

      </div>
    </div>

    <!-- Footer -->
    <div class="container-fluid area">
      <div class="row">
        <h3><a href="mailto:dobbszach@gmail.com">&copy; Zachary Dobbs 2017</a></h3>
      </div>
    </div>
  </body>
</html>
