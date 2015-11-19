<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Marissa Cookson | Front-end Developer</title>
    <meta name="description" content="A showcase of web development projects I've designed, built and managed in my spare time">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="dist/css/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon" />
	<script src="dist/js/modernizr.js"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-3188203-1', 'auto');
	  ga('send', 'pageview');
	</script>
</head>
<body>

	<header class="site-header">
		<div class="site-header__inner">
			<h1 class="site-title">Marissa Cookson</h1>
			<h3 class="site-subtitle">Front-end Developer</h3>
			<ul class="unstyled icon-list">
				<li><a href="https://github.com/marissajmc" target="_blank" class="icon--github"></a></li>
				<li><a href="http://www.linkedin.com/pub/marissa-cookson/35/8a9/a4" class="icon--linkedin" target="_blank"></a></li>
				<li><a href="http://stackoverflow.com/users/872018/marissajmc" class="icon--stackoverflow" target="_blank"></a></li>
			</ul>
			<nav class="site-navigation">
				<a href="/" class="active">About</a>
				<a href="/projects">Projects</a>
				<a href="/contact">Contact</a>
			</nav>
		</div>
	</header>

	<section class="l-section l-center-align">
		<div class="introduction">
			<h2 class="callout">
				Hello, I'm Marissa<br />
				a front-end developer<br />
				from Melbourne, Australia.
			</h2>
			<p>I've been coding professionally for the web since 2008. I dabble in design in my personal projects, but aside from this, coding is my bread &amp; butter. My specialities include building responsive websites (with modular html/css/js), coding &amp; managing email newsletter campaigns, and QA testing.</p>
			<p>I enjoy working with a team of developers &amp; designers in an agency environment. I also like to work independently and engage one-on-one with clients to deliver a tailored solution that meets their needs.</p>
			<p>To that end, here is a showcase of side projects that I've designed, built and managed in my spare time.</p>
			<p><a href="/projects" class="button">View Projects</a></p>
		</div>
	</section>

	<section class="l-section l-light-container">
		<div class="tools">
			<div class="row collapse-small">
				<div class="columns medium-6">
					<h3 class="underlined">Daily Tools</h3>
					<ul class="toolkit">
						<li>Grunt</li>
						<li>Git</li>
						<li>Bower</li>
						<li>Twig</li>
						<li>Sass</li>
						<li>Litmus</li>
						<li>jQuery</li>
						<li>Sublime Text</li>
						<li>Foundation</li>
						<li>BrowserStack</li>
					</ul>
				</div>
				<div class="columns medium-6">
					<h3 class="underlined">Certifications</h3>
					<ul class="unstyled certifications">
						<li>
							<a href="http://www.richmediagallery.com/tools/certified-users#certifiedUser:5202~" target="_blank">
								<img class="certified__badge" src="dist/img/QA.png" alt="QA Certified">
								<span class="certified__name">DoubleClick Studio<br />QA Certified</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<footer class="site-footer">
		&copy; <?php echo date("Y"); ?> Marissa Cookson
	</footer>

</body>
</html>