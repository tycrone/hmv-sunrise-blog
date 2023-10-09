<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Sunrise Records Blog</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
<!--   <link rel="manifest" href="/manifest.json">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5"> -->
  <meta name="theme-color" content="#d31821">

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Anton|Oswald|Roboto+Condensed|Source+Sans+Pro" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/ddfullscreenmenu.css" >
  <script src="js/ddfullscreenmenu.js"></script>

  <meta name="theme-color" content="#d31821">
</head>

<body>

  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

<div class="topnav" id="Topnav">
<div class="nu-cont">
<!-- <img src="./img/logo.png" class="toplogo"/>  
<img src="./img/logo2.png" class="toplogo2"/>  --> 
<img src="./img/logov2.png" class="toplogo2"/>

<div id="navtoggler" onClick="ddfullscreenmenu.togglemenu('open')"></div>
	
	<nav id="ddfullscreenmenu">

		<div id="closex">Close</div>

		<div id="ulwrapper">
		<!-- Define your UL (nested) menu below -->
			<ul id="fullscreenmenu-ul">
		  	<li><a id = "linkzero" href="https://blog.sunriserecords.com">Blog Home</a></li>
			<li><a href="#">MUSIC</a>
			  <ul>
			 	<li><a id = "linkone" href="https://blog.sunriserecords.com/music-news.php">News</a></li>
			  	<li><a id = "linktwo" href="https://blog.sunriserecords.com/music-articles.php">Features & Articles</a></li>
			  </ul>
			</li>
			<li><a href="#">FILM & TELEVISION</a>
			  <ul>
			  	<li><a id = "linkthree" href="https://blog.sunriserecords.com/video-news.php">News</a></li>
			  	<li><a id = "linkfour" href="https://blog.sunriserecords.com/video-articles.php">Features & Articles</a></li>
			  	<li><a id = "linkfive" href="https://blog.sunriserecords.com/video-trailers.php">New Trailers</a></li>
			  </ul>
			</li>
			<br/>
			<hr class="menu-line"/>
		  	<li><a target="_blank" href="https://www.sunriserecords.com">sunriserecords.com</a></li>
			</ul>
		</div>
	</nav>

<script>

let linkZero	= document.getElementById("linkzero");
let linkOne		= document.getElementById("linkone");
let linkTwo		= document.getElementById("linktwo");
let linkThree	= document.getElementById("linkthree");
let linkFour	= document.getElementById("linkfour");
let linkFive	= document.getElementById("linkfive");

switch(currentPage){
	case "pageZero":
		linkZero.classList.add('current');
		break;
	case "pageOne":
		linkOne.classList.add('current');
		break;
	case "pageTwo":
		linkTwo.classList.add('current');
		break;
	case "pageThree":
		linkThree.classList.add('current');
		break;
	case "pageFour":
		linkFour.classList.add('current');
		break;		
	case "pageFive":
		linkFive.classList.add('current');
		break;
}

</script>

</div>
</div>

<script>

// initialize menu. Call this after menu markup:
ddfullscreenmenu.init()

</script>