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

	<!-- <header class="site-header">
		<div class="row">
			<div class="columns site-header__title">
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
	</header> -->



	<article class="row about">
		<div class="columns">
			<p><i class="first-word">hello</i> I'm Marissa, a front-end developer from Melbourne, Australia.</p>
			<p>I've been coding professionally for the web since 2008. I dabble in design in my personal projects, but aside from this, coding is my bread &amp; butter. My specialities include building responsive websites (modular html/css/js, templating for cms integration), coding &amp; managing email newsletter (eDM) campaigns, and QA testing.</p>
			<p>This site is a showcase of side projects that I've designed, built and managed in my spare time.</p>
		</div>
	</article>

	<div class="filter__wrapper">
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

	<section class="row">
		<div class="columns">
			<ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3 project__list" data-equalizer>
				<!-- <li class="row project collapse">
					<div class="columns medium-4">
						<a class="project__image" href="http://juliascelebrantagency.com" target="_blank"><img src="dist/img/projects/jca.jpg" alt="" class="l-fluid-image"></a>
					</div>
					<div class="columns medium-8">
						<div class="project__description">
							<h3 class="project__title">Julia's Celebrant Agency</h3>
							<a class="project__url" href="http://juliascelebrantagency.com" target="_blank">juliascelebrantagency.com</a>
							<div class="project__summary">
								<p>test</p>
							</div>
							<a href="http://www.theportseacamp.com.au" target="_blank" class="button visit-site">Visit site</a>
						</div>
					</div>
				</li> -->
				<li class="project">
					<a class="project__image" href="http://juliascelebrantagency.com" target="_blank"><img src="dist/img/projects/jca.jpg" alt="" class="l-fluid-image"></a>
					<div class="project__description">
						<h3 class="project__title">Julia's Celebrant Agency</h3>
						<a class="project__url" href="http://juliascelebrantagency.com" target="_blank">juliascelebrantagency.com</a>
						<div class="project__summary" data-equalizer-watch>
							<p>test</p>
						</div>
						<a href="http://www.theportseacamp.com.au" target="_blank" class="button visit-site">Visit site</a>
					</div>
				</li>
				<li class="project">
					<a class="project__image" href="http://www.thevisionhouse.com.au" target="_blank"><img src="dist/img/projects/tvh.jpg" alt="" class="l-fluid-image"></a>
					<div class="project__description">
						<h3 class="project__title">The Vision House</h3>
						<a class="project__url" href="http://www.thevisionhouse.com.au" target="_blank">thevisionhouse.com.au</a>
						<div class="project__summary" data-equalizer-watch>
							<p>The Vision House is a Melbourne-based cine rental company which provides tailored camera packages for film makers around Australia and NZ.</p>
							<p>Their existing site was a couple of years old and not optimised for tablet or mobile viewing. It had a custom built CMS which the client had some difficulty using.</p>
							<p>I designed and built a new responsive site (without a framework) and taught myself the Perch CMS to allow TVH staff to manage their inventory easily. I also assisted in migrating the site to a new web host.</p>
						</div>
						<a href="http://www.theportseacamp.com.au" target="_blank" class="button visit-site">Visit site</a>
					</div>
				</li>
				<li class="project">
					<a class="project__image" href="http://www.theportseacamp.com.au" target="_blank"><img src="dist/img/projects/portsea.jpg" alt="" class="l-fluid-image"></a>
					<div class="project__description">
						<h3 class="project__title">The Portsea Camp</h3>
						<a class="project__url" href="http://www.theportseacamp.com.au" target="_blank">theportseacamp.com.au</a>
						<div class="project__summary" data-equalizer-watch>
							<p>The Portsea Camp provides subsidised holidays for children who are disadvantaged and have special needs.</p>
							<p>I volunteered via goodcompany.com.au to rebuild their 7-year-old part flash website for today's web users, and gave their staff the ability to edit content with a custom WordPress theme.</p>
						</div>
						<a href="http://www.theportseacamp.com.au" target="_blank" class="button visit-site">Visit site</a>
					</div>
				</li>
				<li class="project">
					<img src="http://placehold.it/300x150" alt="" class="l-fluid-image">
					<div class="project__description">
						<h3 class="project__title">Slow School of Business</h3>
						<a class="project__url" href="http://www.slowschool.com.au" target="_blank">slowschool.com.au</a>
						<div class="project__summary" data-equalizer-watch>
						</div>
						<a href="http://www.slowschool.com.au" target="_blank" class="button visit-site">Visit site</a>
					</div>
				</li>
				<li class="project">
					<a class="project__image" href="http://www.xstitch-calculator.com/" target="_blank"><img src="http://placehold.it/300x150" alt="" class="l-fluid-image"></a>
					<div class="project__description">
						<h3 class="project__title">Pocket Cross-Stitch Calculator</h3>
						<a class="project__url" href="http://www.xstitch-calculator.com/" target="_blank">www.xstitch-calculator.com</a>
						<div class="project__summary" data-equalizer-watch>
							<p>When I'm looking at cross-stitch patterns I often want to know how large the design will be if I choose a different stitch count.</p>
							<p>Existing cross-stitch calculators on the web are built with static tables - suitable for desktop use, but not mobile when you're browsing in a craft store, for example.</p>
							<p>So I decided to build my own calculator with the aim of providing an easy to use, mobile-friendly way of calculating the fabric and frame size needed for cross-stitch patterns.</p>
							<p>I shared the calculator on a cross-stitch forum and got some valuable feedback which I integrated into the project.</p>
						</div>
						<a href="http://www.theportseacamp.com.au" target="_blank" class="button visit-site">Visit site</a>
					</div>
				</li>
			</ul>
		</div>
	</section>

	<footer class="site-footer">
	<div class="row">
		<div class="columns">
			<p>&copy; <?php echo date("Y"); ?> Marissa Cookson | e: <span>marissajmc@gmail.com</span></p>
		<ul class="unstyled icons">
			<li><a class="icon icon--linkedin" href="http://www.linkedin.com/pub/marissa-cookson/35/8a9/a4" target="_blank"></a></li>
			<li><a class="icon icon--stackoverflow" href="http://stackoverflow.com/users/872018/marissajmc" target="_blank"></a></li>
			<li><a class="icon icon--github-light" href="https://github.com/marissajmc" target="_blank"></a></li>
		</ul>
		</div>
	</div>
		
	</footer>

    <script src="src/vendor/jquery/dist/jquery.min.js"></script>
    <script src="dist/js/site.min.js"></script>
</body>
</html>