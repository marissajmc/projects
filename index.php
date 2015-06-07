<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Marissa Cookson - Front-end Developer</title>
    <meta name="description" content="A showcase of web development projects I've designed, built and managed in my spare time">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Sansita+One%7COpen+Sans" />
    <link rel="stylesheet" href="dist/css/style.css">
</head>
<body>

	<header class="site-header">
		<div class="row">
			<div class="columns medium-3 large-2 site-header__logo">
				<h1>mcookson</h1>
				<h3>Front-end developer</h3>
			</div>
			<div class="columns medium-9 large-10 site-header__intro">
				<p>Hello I'm <span>Marissa</span> a front-end developer from Melbourne, Australia.</p>
				<p>This is my portfolio of side projects I've designed, built and managed in my spare time.</p>
			</div>
		</div>
		<div class="row">
			<div class="columns">
				<nav class="filter" data-filter>
					<div class="filter__inner">
						<div class="show-for-medium-up filter__toggle">Projects:</div>
						<div class="show-for-small filter__toggle" data-filter-toggle>
							Projects: 
							<p class="filter__selected" data-filter-selected="all"><span class="icon--all">All</span></p>
						</div>
						<ul class="unstyled filter__list">
							<li class="filter__item"><a href="#" class="filter__item__link icon--all is-active" data-filter-item="all">All</a></li>
							<li class="filter__item"><a href="#" class="filter__item__link icon--volunteer" data-filter-item="volunteer">Volunteer</a></li>
							<li class="filter__item"><a href="#" class="filter__item__link icon--business" data-filter-item="business">Small Business</a></li>
							<li class="filter__item"><a href="#" class="filter__item__link icon--edm" data-filter-item="edm">eDMs</a></li>
							<li class="filter__item"><a href="#" class="filter__item__link icon--fun" data-filter-item="fun">Just for fun</a></li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</header>

	<section>
		<div class="row">
			<div class="columns">
			</div>
		</div>
	</section>

	<footer class="site-footer">
		<p>&copy; <?php echo date("Y"); ?> Marissa Cookson</p>
		<p>e: <span>marissajmc@gmail.com</span></p>
		<ul class="unstyled icons">
			<li><a class="icon icon--linkedin" href="http://www.linkedin.com/pub/marissa-cookson/35/8a9/a4" target="_blank"></a></li>
			<li><a class="icon icon--stackoverflow" href="http://stackoverflow.com/users/872018/marissajmc" target="_blank"></a></li>
			<li><a class="icon icon--github-light" href="https://github.com/marissajmc" target="_blank"></a></li>
		</ul>
	</footer>

    <script src="src/vendor/jquery/dist/jquery.min.js"></script>
    <script src="dist/js/site.min.js"></script>
</body>
</html>