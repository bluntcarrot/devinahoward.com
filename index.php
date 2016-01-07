<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Devin A Howard, Web Developer" />
	<meta name="keywords" content="devin howard, web developer portfolio, web developer" />
	<title>Devin A Howard</title>

	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/skel-noscript.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/style-wide.css" />
</head>
<body>

<!-- Header -->
<div id="header" class="skel-panels-fixed">

	<div class="top">

		<div id="logo">
			<h1 id="title">Devin A Howard</h1>
			<span class="byline">Web Developer</span>
		</div>

		<!-- Nav -->
		<nav id="nav">
			<ul>
				<li><a href="#profile" id="profile-link" class="skel-panels-ignoreHref"><span class="fa fa-user">Profile</span></a></li>
				<li><a href="#projects" id="projects-link" class="skel-panels-ignoreHref"><span class="fa fa-th">Projects</span></a></li>
				<li><a href="#contact" id="contact-link" class="skel-panels-ignoreHref"><span class="fa fa-envelope">Contact</span></a></li>
			</ul>
		</nav>

	</div>
	<div class="bottom">
		<div class="footer_icons">
			<a href="https://www.linkedin.com/in/devin-howard-62044710" target="_blank"><i class="fa fa-linkedin-square" style="margin-right:5px;"></i></a>
			<a href="https://www.facebook.com/devin.howard.73" target="_blank"><i class="fa fa-facebook-square"></i></a>
		</div>
	</div>

</div>

<!-- Main -->
<div id="main">
	<!-- Profile -->
	<section id="profile" class="one">
		<div class="container">
			<br/>
			<header>
				<h2>Profile</h2>
			</header>
			<p>In my current position I work with a small team to develop and maintain web applications.
			My role on the team involves front end and back end development, this allows me
			to work with lots of cool technologies such as C#, Node.js, PHP, Java, JavaScript,
			jQuery, WordPress, SQL, HTML, CSS, and Bootstrap. Some of my work can
			include writing stored procedures in a Microsoft SQL database, developing a new
			service for our applications to use, or even creating dashboards and reports.</p>
		</div>
	</section>

	<!-- Projects -->
	<section id="projects" class="two">
		<div class="container">

			<header>
				<h2>Projects</h2>
			</header>
			<p class="projects_p">An example of a few frameworks, plugins, and tools I've worked with include:</p>
			<ul>
			<li><a href="http://getbootstrap.com/" target="_blank">Bootstrap</a></li>
			<li><a href="https://www.microsoft.com/en-us/server-cloud/products/sql-server/" target="_blank">Microsoft SQL Server</a></li>
			<li><a href="https://jquery.com/" target="_blank">jQuery</a></li>
			<li><a href="https://www.microsoft.com/net" target="_blank">.NET</a></li>
			<li><a href="https://wordpress.org/" target="_blank">WordPress</a></li>
			<li><a href="https://www.datatables.net/" target="_blank">DataTables</a></li>
			<li><a href="http://www.highcharts.com/" target="_blank">Highcharts JS</a></li>
			<li><a href="http://gulpjs.com/" target="_blank">Gulp</a></li>
			<li><a href="https://nodejs.org" target="_blank">Node.js</a></li>
			</ul>
			<span>Click below to check out some of the projects I've worked on.
				<br/><br/>
				 <a href="https://github.com/bluntcarrot" target="_blank" class="projects_img"><img src="images/GitHub-Mark-120px-plus.png" /></a> 
			</span>
			
		</div>
	</section>

	<!-- Contact -->
	<section id="contact" class="three">
		<div class="container">

			<header>
				<h2>Contact</h2>
			</header>
			<form action="send_mail.php" method="post">
				<input name="name" placeholder="Name" type="text" required="">
				<input name="email" placeholder="Email" type="email" required="">
				<input name="inquiry" placeholder="Inquiry" type="text" required="">
				<button type="submit" value="Submit">Submit</button>
			</form>
		</div>
	</section>

</div>

<!-- Footer -->
<div id="footer">
	<div class="copyright">
		<p><?php echo date("Y"); ?>. &copy;Devin A Howard / HTML5 UP</p>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>if (typeof jQuery === 'undefined') {
  document.write(unescape('%3Cscript%20src%3D%22js/jquery.min.js%22%3E%3C/script%3E'));
}
</script>
<script src="js/skel.min.js"></script>
<script src="js/skel-panels.min.js"></script>
<script src="js/init.js"></script>
</body>
</html>