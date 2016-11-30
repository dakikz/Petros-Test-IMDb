<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Top 10 Movies">
	<meta name="author"      content="Petros Leonidou">
	
	<title>Top 10 Movies</title>

	<link rel="shortcut icon" href="images/imdb.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="css/main.css">
</head>

<body> 
	<!-- Navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top " >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="#"><img src="images/imdb.png" width="28%" alt="Website Logo"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a href="/">Home</a></li>
					<li><a href="/welcome">Test link</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Menu <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="/">Home</a></li>
							<li><a href="/welcome">Test link</a></li>
						</ul>
					</li>	
				</ul>
			</div>
		</div>
	</div> 

	<header id="head" class="secondary"></header>
	<div class="container">
		<div class="row">
			<article class="col-md-8 maincontent">
				<header class="page-header">
					<div class="container-fluid">
						<div class="row">
							<div class="col-sm-6">
								<h1 class="page-title">IMDb Charts</h1>
								<h2>Top Rated Movies</h2>
							</div>
							<div class="col-sm-6">
								<h2 class="page-title">Browse Movies</h2>
								<form class="form_main" action="{{URL::current()}}">
									<div class="col-sm-5">
										From:<input class="input_main" type="text" name="from_date" value="{{ Request::Input('from_date')}}">
									</div>
									<div class="col-sm-5">
										To:<input class="input_main" type="text" name="to_date" value="{{ Request::Input('to_date')}}">
									</div><br>
									<div class="col-sm-2">
										<button class="btn-primary">Search</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</header>
				
				<div>
					<table align="center" width="100%">
						<tr style="border-bottom: 1px solid #ADADAD;">
							<td><b>Rank</b></td>
							<td><b>Title</b></td>
							<td align="center"><b>Date Published</b></td>
							<td align="center"><b>Rating</b></td>
						</tr>
							@foreach($movies as $movie)
								<tr style="border-bottom: 1px solid #E8E8E8;">
									<td width="5%">{{$movie->id}}.</td>
									<td width="65%"><a href="#">{{$movie->title}}</a></td>
									<td width="20%" align="center">({{ $movie->date_published }})</td>
									<td width="10%" align="center"><img src="images/star.png" width="20px"><b>{{ $movie->rating}}</b></td>
								</tr>
							@endforeach
					</table>
				</div>
				<h2>And some text</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

				<h2>Another paragraph</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</article>

			<aside class="col-md-4 sidebar sidebar-right">
			<div class="border_left">
				<div class="row widget">
					<div class="col-xs-12">
						<h3>You Have Seen</h3>
						<h3><b style="font-size: 35px;">0</b>/250 (0%)</h3>
						<input type="checkbox" name="hideTitlesName" value="hideTitles" /> Hide titles I've seen
					</div>
				</div>
				<hr>
				<div class="row widget">
					<div class="col-xs-12">
						<h3>IMDb Charts</h3>
						<a href=''>Box Office</a><br>
						<a href=''>Most Popular Movies</a><br>
						<a href=''>Top Rated Movies</a><br>
						<a href=''>Most Popular TV</a><br>
						<a href=''>Lowest Rated TV</a><br>
					</div>
				</div>
				<hr>
				<div class="row widget">
					<div class="col-xs-12">
						<h3>Top Rated Movies by Genre</h3>
						<a href=''>Action</a><br>
						<a href=''>Adventure</a><br>
						<a href=''>Animation</a><br>
						<a href=''>Biography</a><br>
						<a href=''>Comedy</a><br>
						<a href=''>Crime</a><br>
						<a href=''>Drama</a><br>
						<a href=''>Family</a><br>
						<a href=''>Fantasy</a><br>
					</div>
				</div>
				<div class="row widget">
			       	<div class="col-xs-12">
						<form  class="form_main" action="{{URL::current()}}">
						<table >
							<tr>
								<td colspan="2"><h3>Browse Movies by Date</h3></td>
							</tr>
							<tr>
								<td><label>From:</label></td>
								<td><input class="input_main" type="text" name="from_date" value="{{ Request::Input('from_date')}}"><br></td>
							</tr>
							<tr>
								<td><label>To:</label><br></td>
								<td><input class="input_main" type="text" name="to_date" value="{{ Request::Input('to_date')}}"><br></td>
							</tr>
							<tr>
								<td colspan="2" align="right"><button class="btn btn-primary btn-block">Search</button></td>
							</tr>
						</table>
						</form>
					</div>
				</div>
			</div>	
			</aside>
		</div>
		<hr>
		<article style="text-align: center; color: grey;">
				<h3><u>And some text</u></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</article>
	</div>

	<footer id="footer" class="top-space">
		<div class="footer1">
			<div class="container">
				<div class="row">
					<div class="col-md-5 widget">
						<h4 class="widget-title">IMDb Everywhere</h4>
						<div class="widget-body">
							<p>
								<a class="" href="#"><img src="images/ios.png" alt="iOS Logo" height="40px"></a>
								<a class="" href="#"><img src="images/android.png" alt="Android Logo" height="60px"></a>
								<a class="" href="#"><img src="images/amazon.png" alt="Amazon Logo" height="40px"></a>
								<div>Find showtimes, watch trailers, browse photos, track your Watchlist and rate your favorite movies and TV shows on your phone or tablet!</div>
							</p>
						</div>
					</div>
					<div class="col-md-3 widget">
						<h4 class="widget-title">Follow IMDb on</h4>
						<div class="widget-body">
							<p class="follow-me-icons clearfix">
								<a href=""><img src="images/fb.png" alt="fb Logo" width="40px"></a>
								<a href=""><img src="images/twitter.png" alt="twitter Logo" width="40px"></a>
								<a href=""><img src="images/instagram.png" alt="Instagram Logo" width="40px"></a>
							</p>	
						</div>
					</div>
					<div class="col-md-4 widget">
						<h3 class="widget-title">Some more text here</h3>
						<div class="widget-body">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, dolores, quibusdam architecto voluptatem amet fugiat.</p>
							<p>Ad id expedita cupiditate repellendus possimus unde itaque voluptate modi quidem dolore optio velit?</p>
							<p>Reprehenderit architecto sint libero illo et hic.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">	
					<div class="col-xs-12 widget">
						<div class="widget-body">
							<p class="text-right">
							Copyright &copy; 2016, IMDb. Designed by <a href="#">Petros Leonidou</a> 
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
</body>
</html>