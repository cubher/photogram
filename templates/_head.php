<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="photogram">
	<meta name="author" content="shubhash sna">
	<meta name="generator" content="Hugo 0.104.2">
	<title>album </title>

	<link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">

	<link href="/app/assets/dist/css/bootstrap.min.css" rel="stylesheet">
	<?if (file_exists($_SERVER["DOCUMENT_ROOT"]."/app/css/".basename($_SERVER["PHP_SELF"],".php").".css")){ ?>
	<link rel="stylesheet" href="/app/css/<?=basename($_SERVER["PHP_SELF"],".php")?>.css">
	<?}
	else{
		echo "file doesnot exist" ;
	}
	?>
	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
		footer{
			padding-top: 50px;
 			padding-right: 30px;
  			padding-bottom: 50px;
  			padding-left: 80px;
		}
		
		.b-example-divider {
			height: 3rem;
			background-color: rgba(0, 0, 0, .1);
			border: solid rgba(0, 0, 0, .15);
			border-width: 1px 0;
			box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
		}

		.b-example-vr {
			flex-shrink: 0;
			width: 1.5rem;
			height: 100vh;
		}

		.bi {
			vertical-align: -.125em;
			fill: currentColor;
		}

		.nav-scroller {
			position: relative;
			z-index: 2;
			height: 2.75rem;
			overflow-y: hidden;
		}

		.nav-scroller .nav {
			display: flex;
			flex-wrap: nowrap;
			padding-bottom: 1rem;
			margin-top: -1px;
			overflow-x: auto;
			text-align: center;
			white-space: nowrap;
			-webkit-overflow-scrolling: touch;
		}
	</style>
</head>