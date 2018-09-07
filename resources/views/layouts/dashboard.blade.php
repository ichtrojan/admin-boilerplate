<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>▲dmissions</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />


  <!-- Bootstrap core CSS     -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <!-- Animation library for notifications   -->
  <link href="css/animate.min.css" rel="stylesheet"/>

  <!--  Light Bootstrap Table core CSS    -->
  <link href="css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


  <!--  CSS for Demo Purpose, don't include it in your project     -->
  <link href="css/demo.css" rel="stylesheet" />

  <!--     Fonts and icons     -->
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <link href="css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>

<body>
  <div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="img/sidebar-5.jpg">
    	<div class="sidebar-wrapper">
        <div class="logo">
          <a href="/" class="simple-text">
            Admissions
          </a>
        </div>

        <ul class="nav">
          <li>
            <a href="/home">
              <i class="pe-7s-graph"></i>
              <p>Generate Checklist</p>
            </a>
          </li>
          <li>
            <a href="/not-ready">
              <i class="pe-7s-user"></i>
              <p>Victor's Section</p>
            </a>
          </li>
          <li>
            <a href="/maps">
              <i class="pe-7s-map-marker"></i>
              <p>Maps</p>
            </a>
          </li>
          <!-- <li>
            <a href="table.html">
              <i class="pe-7s-note2"></i>
              <p>Table List</p>
            </a>
          </li>
          <li>
            <a href="typography.html">
              <i class="pe-7s-news-paper"></i>
              <p>Typography</p>
            </a>
          </li>
          <li>
            <a href="icons.html">
              <i class="pe-7s-science"></i>
              <p>Icons</p>
            </a>
          </li>
          <li>
            <a href="notifications.html">
              <i class="pe-7s-bell"></i>
              <p>Notifications</p>
            </a>
          </li> -->
        </ul>
    	</div>
    </div>

    <div class="main-panel">
      <nav class="navbar navbar-default navbar-fixed">
        <div class="container-fluid">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a><p>{{auth()->user()->name}}</p></a>
            </li>
            <li>
              <a href="{{ url('/logout') }}"><p>Log out</p></a>
            </li>
						<li class="separator hidden-lg"></li>
          </ul>
        </div>
      </nav>

      <div class="content">
        @yield('content')
      </div>

      <footer class="footer">
        <div class="container-fluid">
          <p class="copyright pull-right">
            &copy; <script>document.write(new Date().getFullYear())</script>
            <a href="https://okoh.co.uk" target="_blank">Michael Okoh</a>, made with ❤️ for <a href="https://timbu.com/admissions" target="_blank">Timbu Admissions</a>
          </p>
        </div>
      </footer>
    </div>
  </div>
</div>

</body>

<!--   Core JS Files   -->
<script src="js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="js/bootstrap-notify.js"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="js/light-bootstrap-dashboard.js?v=1.4.0"></script>

@yield('javascript')

</html>
