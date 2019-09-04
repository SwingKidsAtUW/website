<?php
    function shared_header($path) {
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Swing Kids at UW</title>

    <!-- Facebook Post Meta Data -->
    <meta property="og:title" content="Swing Kids at UW" />
    <meta property="og:image" content="http://students.washington.edu/swingkd/assets/img/swing-kids-brand-white-bottom-facebook-largest.png" />
    <meta property="og:description" content="Swing Kids at UW teaches students swing dancing and brings them into the Seattle swing community." />
    <meta property="og:url" content="http://students.washington.edu/swingkd/" />


    <!-- ****** faviconit.com favicons ****** -->
      <link rel="shortcut icon" sizes="16x16 32x32 48x48 64x64" href="<?= $path ?>/assets/img/faviconit/favicon.ico">
      <link rel="shortcut icon" type="image/x-icon" href="<?= $path ?>/assets/img/faviconit/favicon.ico">
      <link rel="icon" type="image/png" sizes="195x195" href="<?= $path ?>/assets/img/faviconit/favicon-195.png">
      <link rel="apple-touch-icon" sizes="152x152" href="<?= $path ?>/assets/img/faviconit/favicon-152.png">
      <link rel="apple-touch-icon" sizes="144x144" href="<?= $path ?>/assets/img/faviconit/favicon-144.png">
      <link rel="apple-touch-icon" sizes="120x120" href="<?= $path ?>/assets/img/faviconit/favicon-120.png">
      <link rel="apple-touch-icon" sizes="114x114" href="<?= $path ?>/assets/img/faviconit/favicon-114.png">
      <link rel="icon" type="image/png" sizes="96x96" href="<?= $path ?>/assets/img/faviconit/favicon-96.png">
      <link rel="apple-touch-icon" sizes="76x76" href="<?= $path ?>/assets/img/faviconit/favicon-76.png">
      <link rel="apple-touch-icon" sizes="72x72" href="<?= $path ?>/assets/img/faviconit/favicon-72.png">
      <link rel="apple-touch-icon" href="favicon-57.png">
      <meta name="msapplication-TileColor" content="#FFFFFF">
      <meta name="msapplication-TileImage" content="<?= $path ?>/assets/img/faviconit/favicon-144.png">
    <!-- ****** faviconit.com favicons ****** -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css" integrity="sha384-aNUYGqSUL9wG/vP7+cWZ5QOM4gsQou3sBfWRr/8S3R1Lv0rysEmnwsRKMbhiQX/O" crossorigin="anonymous">

    <!-- Site CSS -->
    <link rel="stylesheet" href="<?= $path ?>/assets/css/style.css" >

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default navbar-swingkd navbar-fixed-top" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?= $path ?>">
            <img alt="Brand" src="<?= $path ?>/assets/img/logo-purple-square.png">
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?= $path ?>#/contact">Contact</a></li>
            <li><a href="<?= $path ?>#/lessons">Lessons</a></li>
            <li><a href="<?= $path ?>#/events">Events</a></li>
            <!-- <li><a href="#people">People</a></li> -->
            <li><a href="<?= $path ?>elections/">Elections</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>
<?php
    }
    function shared_footer() {
?>
    <footer class="text-center site-section"><p>&copy; Copyright 2016 University of Washington Swing Kids</p></footer>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery.js" integrity="sha384-wciR07FV6RBcI+YEVsZy/bInxpyn0uefUp6Yi9R5r46Qv/yk/osR5nzY31koh9Uq" crossorigin="anonymous"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="Hello World"></script>
  </body>
</html>
<?php
    }
?>
