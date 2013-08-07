<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Uni Course Data Viewer (Test)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/other.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../js/html5shiv.js"></script>
    <![endif]-->

  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Uni Course Data</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
            <form class="navbar-form pull-right">
              <input class="span2" type="text" placeholder="Email">
              <input class="span2" type="password" placeholder="Password">
              <button type="submit" class="btn">Sign in</button>
            </form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>University Course Data: <br/>Medical Courses</h1>
        <p>View medical course information from UK universities.</p>
        <!--<p><a href="#" class="btn btn-primary btn-large">Learn more &raquo;</a></p>-->
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="span6">
          <h2>Whiteside College</h2>
	<?php 
	$catalog = simplexml_load_file('http://cricket-test.herokuapp.com/courses.xml');
	if (!$catalog) {
		exit('Failed to load xml.');
        } else {
               	$result = $catalog->xpath('//course[contains(subject,"Medicine")]');
		//foreach ($result as $course) {
		//	echo '<li><a href="', $course->url, '">', $course->title, '</a></li>', PHP_EOL;
		//} 
		
		foreach ($result as $key=>$course) {
                        echo '<div class="accordion-group">', PHP_EOL;
                        echo '<div class="accordion-heading">', PHP_EOL;
                        echo '<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse', $key, '">', $course->title, '</a>', PHP_EOL;
                        echo '</div>', PHP_EOL;
                        echo '</div>', PHP_EOL;

                        echo '<div id="collapse', $key, '" class="accordion-body collapse ">', PHP_EOL;
                        echo '<div class="accordion-inner">', PHP_EOL;
                       # echo '<ul><li>', $course->educationLevel, '</li>', PHP_EOL;
                       # echo '<li>', $course->qualification_title, '</li></ul>', PHP_EOL;
                        echo '', $course->description, '', PHP_EOL;
                        echo '</div></div>', PHP_EOL;
                }

		
	}
	?>
<!--			<li>a course...</li>
			<li>another course...</li>
-->
	<!--
	<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        -->
	</div>
        <div class="span6">
          <h2>Another University</h2>
	  <div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseanother1">a course</a>		      </div>
	  </div>
	  <div id="collapseanother1" class="accordion-body collapse ">
		<div class="accordion-inner">
			Nullam fringilla; urna vel placerat sagittis, erat urna suscipit sem, ut dignissim ante est eget nibh. Ut vitae massa ut ante laoreet aliquam vitae vitae tellus? Nulla nec elementum ipsum. Mauris urna velit, tempus sed accumsan in, viverra non lacus.
		</div>
	  </div>
	 
	  <div class="accordion-group">
                <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseanother2">another course</a>                    </div>
          </div>

          <div id="collapseanother2" class="accordion-body collapse ">
                <div class="accordion-inner">
                        Nullam fringilla; urna vel placerat sagittis, erat urna suscipit sem, ut dignissim ante est eget nibh. Ut vitae massa ut ante laoreet aliquam vitae vitae tellus? Nulla nec elementum ipsum. Mauris urna velit, tempus sed accumsan in, viverra non lacus.
                </div>
          </div>

       </div>
<!--
        <div class="span4">
          <h2>Second Universiy</h2>
	  <ul>
                <li>a course...</li>
                <li>another course...</li>
          </ul>
        </div>
-->

      </div>

      <hr>

      <footer>
        <p>&copy; Tuck Software using Twitter Bootstrap</p>
      </footer>

    </div> <!-- /container -->

    <!-- javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/bootstrap-transition.js"></script>
<!--
    <script src="../js/bootstrap-alert.js"></script>
    <script src="../js/bootstrap-modal.js"></script>
    <script src="../js/bootstrap-dropdown.js"></script>
    <script src="../js/bootstrap-scrollspy.js"></script>
    <script src="../js/bootstrap-tab.js"></script>
    <script src="../js/bootstrap-tooltip.js"></script>
    <script src="../js/bootstrap-popover.js"></script>
    <script src="../js/bootstrap-button.js"></script>
-->
    <script src="js/bootstrap-collapse.js"></script>
<!--
    <script src="../js/bootstrap-carousel.js"></script>
    <script src="../js/bootstrap-typeahead.js"></script>
-->

  </body>
</html>

