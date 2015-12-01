<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Example Laravel Application">
    <meta name="author" content="Leonardo Dal Zovo">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>@yield('title')</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style type="text/css">
		/*
		 * Base structure
		 */
		
		/* Move down content because we have a fixed navbar that is 50px tall */
		body {
		  padding-top: 50px;
		}
		
		/*
		 * Global add-ons
		 */
		.sub-header {
		  padding-bottom: 10px;
		  border-bottom: 1px solid #eee;
		}
		
		/*
		 * Top navigation
		 * Hide default border to remove 1px line.
		 */
		.navbar-fixed-top {
		  border: 0;
		}
		
		/*
		 * Sidebar
		 */
		
		/* Hide for mobile, show later */
		.sidebar {
		  display: none;
		}
		@media (min-width: 768px) {
		  .sidebar {
		    position: fixed;
		    top: 51px;
		    bottom: 0;
		    left: 0;
		    z-index: 1000;
		    display: block;
		    padding: 20px;
		    overflow-x: hidden;
		    overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
		    background-color: #f5f5f5;
		    border-right: 1px solid #eee;
		  }
		}
		
		/* Sidebar navigation */
		.nav-sidebar {
		  margin-right: -21px; /* 20px padding + 1px border */
		  margin-bottom: 20px;
		  margin-left: -20px;
		}
		.nav-sidebar > li > a {
		  padding-right: 20px;
		  padding-left: 20px;
		}
		.nav-sidebar > .active > a,
		.nav-sidebar > .active > a:hover,
		.nav-sidebar > .active > a:focus {
		  color: #fff;
		  background-color: #428bca;
		}
		
		
		/*
		 * Main content
		 */
		.main {
		  padding: 20px;
		}
		@media (min-width: 768px) {
		  .main {
		    padding-right: 40px;
		    padding-left: 40px;
		  }
		}
		.main .page-header {
		  margin-top: 0;
		}
		
		
		/*
		 * Placeholder dashboard ideas
		 */
		.placeholders {
		  margin-bottom: 30px;
		  text-align: center;
		}
		.placeholders h4 {
		  margin-bottom: 0;
		}
		.placeholder {
		  margin-bottom: 20px;
		}
		.placeholder img {
		  display: inline-block;
		  border-radius: 50%;
		}
	</style>
</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Verifica Partecipanti Corso</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/">Home</a></li>
            <li><a href="/students">Students</a></li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="/">Home <span class="sr-only">(current)</span></a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="/students">Students List</a></li>
            <li><a href="/students/create">Students Create</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          @include('flash::message')
          @yield('content')
        </div>
      </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script>
	$('#flash-overlay-modal').modal();
</script>

@yield('footer')
</html>