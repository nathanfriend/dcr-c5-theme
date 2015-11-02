<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>


       

<body>
	<header class="main-header">
		<h1 class="main-logo"><a href="#">Logo</a></h1>
		<ul class="main-nav">
			<li><a href="#">Link 1</a></li>
			<li><a href="#">Link 2</a></li>
			<li><a href="#">Link 3</a></li>
			<li><a href="#">Link 4</a></li>
		</ul>
	</header>
	<div class="main-banner">
		<h1><?php $a = new Area('Main'); $a->display($c); ?></h1>
		<p>Andouille pork chop pancetta drumstick ground round beef ribs swine brisket ham.</p>
	</div>
	<div>
		<div>
			<h2>Primary Content</h2>
			<img class="feat-img" src="http://lorempixel.com/400/300" />
			<p>Bacon ipsum dolor sit amet chicken pork ground round brisket corned beef ball tip shank tail salami filet mignon ham hock pork belly venison shankle. Pig kielbasa drumstick sausage pork chop boudin. Chicken t-bone salami pork chop, beef ribs kevin ham tri-tip beef venison biltong brisket.</p>
			<p>Venison strip steak meatball chicken, brisket prosciutto sirloin. Capicola drumstick brisket tri-tip salami. Chicken beef jerky, tail turkey prosciutto cow ham sirloin boudin tenderloin.</p>
		</div>
		<div>
			<h3>Secondary Content</h3>
			<p>Strip steak tenderloin kevin swine meatloaf capicola, doner beef turducken pancetta corned beef pork loin shoulder.</p>
			<hr>
			<p>Pork filet mignon leberkas, tail swine venison pancetta turkey shoulder brisket chalkers likes hamburgers.</p>
			<hr>
			<p>Meatball pastrami shoulder, brisket ribeye spare ribs turkey tongue strip steak t-bone.</p>
		</div>
	</div>

<?php  $this->inc('elements/footer.php'); ?>