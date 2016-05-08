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

	<link rel="stylesheet" href="<?php echo base_url(); ?>min/?g=frontend.default.css" />
	
	<script src="<?php echo $assets_dir; ?>js/vendor/modernizr.js"></script>

	<?php foreach( $css as $css_file ) : ?>
		<link rel="stylesheet" href="<?php echo $css_file; ?>" type="text/css" />
	<?php endforeach; ?>
</head>
<body>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
			<?php if( $this->load->get_section('offcanvas') != '' ) : ?>
				<?php echo $this->load->get_section('offcanvas');?>
			<?php endif; ?>

			<?php if( $this->load->get_section('header') != '' ) : ?>
				<?php echo $this->load->get_section('header');?>
			<?php endif; ?>

			<div class="off-canvas-content" data-off-canvas-content>
				<main class="main-content">
					<?php if( $this->load->get_section('navigation') != '' ) : ?>
						<br>
						<?php echo $this->load->get_section('navigation'); ?>
					<?php endif; ?>
					<?php echo isset($output)?$output:""; ?>
				</main>

				<?php if( $this->load->get_section('footer' ) != '') : ?>
					<?php echo $this->load->get_section('footer');?>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="medium reveal" id="validate-modal" data-reveal>
		<p>The page you're trying to visit is under-construction!</p>
		<button class="close-button" data-close aria-label="Close reveal" type="button">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<script src="<?php echo base_url(); ?>min/?g=dashboard.widget.js"></script>
	<?php if( $this->load->get_section('analytics' ) != '') : ?>
		<?php echo $this->load->get_section('analytics');?>
	<?php endif; ?>
</body>
</html>
