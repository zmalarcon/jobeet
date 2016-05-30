<!DOCTYPE HTML>
<html>
<head>
  <title><?php if (!include_slot('title')): ?>
      ::2 Talento IT - Bolsa de Empleo de Talento IT
    <?php endif; ?>
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
  <nav class="navbar navbar-default" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo url_for('@homepage') ?>"><img src="images/logo.png" alt=""/></a>
      </div>
      <!--/.navbar-header-->
      <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Jobs<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="location.html">Contract Jobs</a></li>
              <li><a href="location.html">Walkin Jobs</a></li>
              <li><a href="location.html">Jobs by Location</a></li>
              <li><a href="location.html">Jobs by Function</a></li>
              <li><a href="location.html">Jobs by Industry</a></li>
              <li><a href="location.html">Jobs by Company</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services<b class="caret"></b></a>
            <ul class="dropdown-menu multi-column columns-3">
              <div class="row">
                <div class="col-sm-4">
                  <ul class="multi-column-dropdown">
                    <li><a href="services.html">Action</a></li>
                    <li><a href="services.html">Another action</a></li>
                    <li><a href="services.html">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="services.html">Separated link</a></li>
                    <li class="divider"></li>
                    <li><a href="services.html">One more separated link</a></li>
                  </ul>
                </div>
                <div class="col-sm-4">
                  <ul class="multi-column-dropdown">
                    <li><a href="services.html">Action</a></li>
                    <li><a href="services.html">Another action</a></li>
                    <li><a href="services.html">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="services.html">Separated link</a></li>
                    <li class="divider"></li>
                    <li><a href="services.html">One more separated link</a></li>
                  </ul>
                </div>
                <div class="col-sm-4">
                  <ul class="multi-column-dropdown">
                    <li><a href="services.html">Action</a></li>
                    <li><a href="services.html">Another action</a></li>
                    <li><a href="services.html">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="services.html">Separated link</a></li>
                    <li class="divider"></li>
                    <li><a href="services.html">One more separated link</a></li>
                  </ul>
                </div>
              </div>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Recruiters<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="login.html">Recruiter Updates</a></li>
              <li><a href="recruiters.html">Recruiters you are following</a></li>
              <li><a href="codes.html">Shortcodes</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">More<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="jobs.html">Walk-ins</a></li>
              <li><a href="jobs.html">Bpo Jobs</a></li>
              <li><a href="jobs.html">Teaching Jobs</a></li>
              <li><a href="jobs.html">Diploma Jobs</a></li>
              <li><a href="jobs.html">Tech Support</a></li>
              <li><a href="jobs.html">Finance Jobs</a></li>
              <li><a href="jobs.html">Part time Jobs</a></li>
              <li><a href="jobs.html">Health Care</a></li>
              <li><a href="jobs.html">Hospitality</a></li>
              <li><a href="jobs.html">Internships</a></li>
              <li><a href="jobs.html">Research Jobs</a></li>
              <li><a href="jobs.html">Defence Jobs</a></li>
            </ul>
          </li>
          <li><a href="login.html">Login</a></li>
          <li><a href="resume.html">Upload Resume</a></li>
        </ul>
      </div>
      <div class="clearfix"> </div>
    </div>
    <!--/.navbar-collapse-->
  </nav>
  <div class="banner_1">
    <div class="container">
      <div id="search_wrapper1">
        <div id="search_form" class="clearfix">
          <h1>Start your job search</h1>
          <form action="" method="get">
          <p>
            <input type="text" class="text" placeholder=" " value="Enter Keyword(s)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Keyword(s)';}">
            <input type="text" class="text" placeholder=" " value="Location" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Location';}">
            <label class="btn2 btn-2 btn2-1b"><input type="submit" value="Find Jobs"></label>
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <?php if ($sf_user->hasFlash('notice')): ?>
      <div class="flash_notice">
        <?php echo $sf_user->getFlash('notice') ?>
      </div>
    <?php endif; ?>

    <?php if ($sf_user->hasFlash('error')): ?>
      <div class="flash_error">
        <?php echo $sf_user->getFlash('error') ?>
      </div>
    <?php endif; ?>
    <div class="single">
      <div class="col-md-12">
        <?php echo $sf_content ?>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
  <div class="footer">
      <div class="container">
        <div class="col-md-3 grid_3">
          <h4>Navigate</h4>
          <ul class="f_list f_list1">
            <li><a href="index.html">Home</a></li>
            <li><a href="login.html">Sign In</a></li>
            <li><a href="login.html">Join Now</a></li>
            <li><a href="about.html">About</a></li>
          </ul>
          <ul class="f_list">
            <li><a href="features.html">Features</a></li>
            <li><a href="terms.html">Terms of use</a></li>
            <li><a href="contact.html">Contact Us</a></li>
            <li><a href="jobs.html">Post a Job</a></li>
          </ul>
          <div class="clearfix"> </div>
        </div>
        <div class="col-md-3 grid_3">
          <h4>Twitter Widget</h4>
          <div class="footer-list">
            <ul>
              <li><i class="fa fa-twitter tw1"> </i><p><span class="yellow"><a href="#">consectetuer</a></span> adipiscing elit web design</p></li>
              <li><i class="fa fa-twitter tw1"> </i><p><span class="yellow"><a href="#">consectetuer</a></span> adipiscing elit web design</p></li>
              <li><i class="fa fa-twitter tw1"> </i><p><span class="yellow"><a href="#">consectetuer</a></span> adipiscing elit web design</p></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 grid_3">
          <h4>Seeking</h4>
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
        </div>
        <div class="col-md-3 grid_3">
          <h4>Sign up for our newsletter</h4>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam.</p>
          <form>
            <input type="text" class="form-control" placeholder="Enter your email">
            <button type="button" class="btn red">Subscribe now!</button>
          </form>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  <div class="footer_bottom">
      <div class="container">
        <div class="col-sm-2">
          <ul class="f_list2">
            <li><a href="jobs.html">Russia Jobs</a></li>
            <li><a href="jobs.html">Australia Jobs</a></li>
            <li><a href="jobs.html">Srilanka Jobs</a></li>
            <li><a href="jobs.html">Poland Jobs</a></li>
          </ul>
        </div>
        <div class="col-sm-2">
          <ul class="f_list2">
            <li><a href="jobs.html">Newzland Jobs</a></li>
            <li><a href="jobs.html">Pakistan Jobs</a></li>
            <li><a href="jobs.html">Srilanka Jobs</a></li>
            <li><a href="jobs.html">Irland Jobs</a></li>
          </ul>
        </div>
        <div class="col-sm-2">
          <ul class="f_list2">
            <li><a href="jobs.html">Canada Jobs</a></li>
            <li><a href="jobs.html">Germany Jobs</a></li>
            <li><a href="jobs.html">China Jobs</a></li>
            <li><a href="jobs.html">Nepal Jobs</a></li>
          </ul>
        </div>
        <div class="col-sm-6 footer_text">
          <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numqua"</p>
        </div>
        <div class="clearfix"> </div>
        <div class="copy">
          <p>Copyright © 2015 Seeking . All Rights Reserved . Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
        </div>
      </div>
    </div>
  </body>
</html>
