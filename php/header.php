<!DOCTYPE HTML>
<!--
	Identity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="<?php echo Theme::lang() ?>">
	<head>

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		
		<!-- meta description -->
		<?php echo Theme::metaTagDescription(); ?>	

		<!-- Dynamic title tag -->
		<?php echo Theme::metaTagTitle(); ?>

		<!-- Include CSS File -->
		<?php echo Theme::css('assets/css/main.css'); ?>
		
		<!-- Load Bludit Plugins: Site head -->
		<?php Theme::plugins('siteHead'); ?>

	</head>
	<body class="is-preload">

	<!-- Load Bludit Plugins: Site Body Begin -->
	<?php Theme::plugins('siteBodyBegin'); ?>


		<!-- Wrapper -->
			<div id="wrapper">