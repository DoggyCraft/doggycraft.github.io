<!DOCTYPE html>
<html lang="da">
	<head>
		<?php header('Content-Type: charset=utf-8'); ?>
		<?php include 'includes/seo.php';?>
		<?php include 'includes/scripts.php';?>
		<?php include 'includes/stylesheets.php';?>
	</head>
	<body class="header-page full-screen-header  wsite-page-index  full-width-on back-to-top-boolean-on preloader-boolean-off smooth-wheel-scroll-boolean-off custom-mouse-cursor-boolean-off styled-scrollbar-boolean-off  wsite-theme-light">
		<div id='preloader' class="editor-hidden">
			<div id='status'>
				<div class="spinner"></div>
			</div>
		</div>
		<?php include 'includes/navbar.php';?>
		<div id="wrapper">
			<div id="wrapper-content">
				<?php include 'includes/navbarmobile.php';?>
				<div id="main-content">
					<div id="banner-wrap">
						<?php include 'includes/start.php';?>
					</div>
					<div id="main-wrap" class="content-wrap">
						<div id="scrolling-point"></div>
						<div id="wsite-content" class="wsite-elements wsite-not-footer">
							<?php include 'includes/serverip1.php';?>
							<?php include 'includes/velkommenhjem.php';?>
							<?php include 'includes/youtubevideo.php';?>
							<?php include 'includes/faellesskab.php';?>
							<?php include 'includes/servers.php';?>
							<!--<?php include 'includes/vanilla.php';?>-->
							<?php include 'includes/citat.php';?>
							<?php include 'includes/serverip2.php';?>
						</div>
					</div>
					<?php include 'includes/footer.php';?>
					<a href="#0" class="cd-top">Top</a>
				</div>
			</div>
		</div>
		<?php include 'includes/scripts2.php';?>
		<div style='display:none'><span style="visibility:hidden">Verdens bedste server!</span></div>
		<?php include 'includes/cookies.php';?>
	</body>
</html>
