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

	<nav class="filter" data-filter>
		<div class="show-for-medium-up filter__toggle">Filter by:</div>
		<div class="show-for-small filter__toggle" data-filter-toggle>
			Filter by: 
			<p class="filter__selected" data-filter-selected="all"><span class="icon--all">All</span></p>
		</div>
		<ul class="unstyled-list filter__list">
			<li class="filter__item"><a href="#" class="filter__item__link icon--all is-active" data-filter-item="all">All</a></li>
			<li class="filter__item"><a href="#" class="filter__item__link icon--volunteer" data-filter-item="volunteer">Volunteer</a></li>
			<li class="filter__item"><a href="#" class="filter__item__link icon--business" data-filter-item="business">Small Business</a></li>
			<li class="filter__item"><a href="#" class="filter__item__link icon--edm" data-filter-item="edm">eDMs</a></li>
			<li class="filter__item"><a href="#" class="filter__item__link icon--fun" data-filter-item="fun">Just for fun</a></li>
		</ul>
	</nav>

	<!-- <section>
		<div class="row project">
			<div class="columns small-6">
				<img src="http://placehold.it/300x250" alt="" class="l-fluid-image">
			</div>
			<div class="columns small-6">
				<p>test</p>
			</div>
		</div>
	</section> -->

	<!-- <header class="site-header">
	 	<div class="banner" data-interchange="
		    [dist/images/maple_grove_small.jpg, (default)], 
		    [dist/images/maple_grove_medium.jpg, (medium)],
		    [dist/images/maple_grove_large.jpg, (large)],
		    [dist/images/maple_grove_xlarge.jpg, (xlarge)]">
	  	</div>
	  	<noscript>
	  		<div class="banner" style="background:url(dist/images/maple_grove_small.jpg) no-repeat"></div>
	  	</noscript>
	  	<h1>mcookson</h1>
	</header>

	<footer class="site-footer">
		<p>&copy; 2008-<?php echo date("Y"); ?> Marissa Cookson</p>
		<p>e: <span>marissajmc@gmail.com</span></p>
		<ul class="reset icons">
			<li><a class="icon icon--linkedin" href="http://www.linkedin.com/pub/marissa-cookson/35/8a9/a4" target="_blank"></a></li>
			<li><a class="icon icon--stackoverflow" href="http://stackoverflow.com/users/872018/marissajmc" target="_blank"></a></li>
			<li><a class="icon icon--github-light" href="https://github.com/marissajmc" target="_blank"></a></li>
		</ul>
	</footer> -->

    <script src="src/vendor/jquery/dist/jquery.min.js"></script>
    <script src="dist/js/site.min.js"></script>
</body>
</html>