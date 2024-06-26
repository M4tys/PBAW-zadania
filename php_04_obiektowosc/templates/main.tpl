<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<title>{$page_title|default:"Tytuł domyślny"}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{$conf->app_url}/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="{$conf->app_url}/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<div id="wrapper">
			<header id="header" class="alt">
				<a href="{$conf->app_url}/index.php" class="logo"><strong>przykład</strong> <span>czwarty</span></a>
				<nav>
					<a href="#banner" class="button scrolly">Idź na góre</a>
					<a href="#main" class="button scrolly">Idź do formularza</a>
				</nav>
			</header>
		
		    {if !$hideBanner} 
				<section id="banner">
					<div class="inner">
						{block name="banner"}
							<header class="major">
								<h1>{$page_header|default:"Tytuł domyślny"}</h1>
							</header>
						{/block}
					</div>
				</section>
			{/if}
			
			<div id="main">
				<section id="two">
					<div class="inner">
						{block name="content"}
							<p>Domyślna treść zawartości</p>
						{/block}
					</div>
				</section>
			</div>

			<footer id="footer">
        		<div class="inner">
					<ul class="copyright">
						{block name="footer"}
							<p>Domyślna treść stopki</p>
						{/block}
					</ul>
				</div>
			</footer>
		</div>
			

		<!-- Scripts -->
			<script src="{$conf->app_url}/assets/js/jquery.min.js"></script>
			<script src="{$conf->app_url}/assets/js/jquery.scrolly.min.js"></script>
			<script src="{$conf->app_url}/assets/js/jquery.scrollex.min.js"></script>
			<script src="{$conf->app_url}/assets/js/browser.min.js"></script>
			<script src="{$conf->app_url}/assets/js/breakpoints.min.js"></script>
			<script src="{$conf->app_url}/assets/js/util.js"></script>
			<script src="{$conf->app_url}/assets/js/main.js"></script>

	</body>
</html>