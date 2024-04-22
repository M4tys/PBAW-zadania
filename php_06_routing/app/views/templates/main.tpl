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
				<a href="{$conf->app_url}" class="logo"><strong>przykład</strong> <span>szósty</span></a>
				{block name='logout'}{/block}
			</header>
			
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
						<li>&copy; Untitled</li>
						<li>Autor: Bartosz Matysek</li>
						<li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
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