<?php if (!defined('BASEPATH')) exit('No direct script access allowed...'); ?>
<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php echo $title; ?></title>
	<link rel="shortcut icon" href="<?php echo $assets_dir; ?>img/favicon.png" type="image/x-icon"/>
	<meta property="og:image" content="<?php echo $assets_dir; ?>img/logo-realtycheck.png"/>
	<link rel="image_src" href="<?php echo $assets_dir; ?>img/logo-realtycheck.png" />

	<?php if( !empty($meta) ) : ?>
		<?php foreach($meta as $name => $content) : ?>
			<?php echo "\n\t\t"; ?>
			<meta name="<?php echo $name; ?>" content="<?php echo $content; ?>" />
		<?php endforeach; ?>
	<?php endif; ?>

	<?php if( !empty($canonical) ) : ?>
		<link rel="canonical" href="<?php echo $canonical?>" />
	<?php endif; ?>

	<link rel="stylesheet" href="<?php echo $assets_dir; ?>css/foundation.min.css" />
	<link rel="stylesheet" href="<?php echo $assets_dir; ?>css/customize.css" />
	<link rel="stylesheet" href="<?php echo $assets_dir; ?>css/common.css" />

	<?php foreach( $css as $css_file ) : ?>
		<link rel="stylesheet" href="<?php echo $css_file; ?>" type="text/css" />
	<?php endforeach; ?>

	<script src="<?php echo $assets_dir; ?>js/vendor/modernizr.js"></script>
</head>
<body>
	<?php if( $this->load->get_section('header') != '' ) : ?>
		<?php echo $this->load->get_section('header');?>
	<?php endif; ?>

	<div class="off-canvas-wrap" data-offcanvas>
		<div class="inner-wrap">
			<?php if( $this->load->get_section('offcanvas') != '' ) : ?>
				<?php echo $this->load->get_section('offcanvas');?>
			<?php endif; ?>

			<section class="main-section">
				<?php echo isset($output)?$output:""; ?>
			</section>

			<?php if( $this->load->get_section('footer' ) != '') : ?>
				<?php echo $this->load->get_section('footer');?>
			<?php endif; ?>

			<a class="exit-off-canvas"></a>

		</div>
	</div>

	<script src="<?php echo $assets_dir; ?>js/vendor/jquery.js"></script>
	<script src="<?php echo $assets_dir; ?>js/foundation.min.js"></script>
	<script>
		$(document).foundation();
	</script>

	<?php foreach($js as $js_file) : ?>
		<script src="<?php echo $js_file; ?>"></script>
	<?php endforeach; ?>

	<?php if( $this->load->get_section('analytics' ) != '') : ?>
		<?php echo $this->load->get_section('analytics');?>
	<?php endif; ?>
</body>
</html>
