<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $title; ?></title>
	<?php if( !empty($meta) ) : ?>
		<?php foreach($meta as $name => $content) : ?>
			<meta name="<?php echo $name; ?>" content="<?php echo $content; ?>" />
		<?php endforeach; ?>
	<?php endif; ?>

	<link rel="stylesheet" href="<?php echo $assets_dir; ?>css/foundation.min.css" />
	<link rel="stylesheet" href="<?php echo $assets_dir; ?>css/customize.css" />
	<link rel="stylesheet" href="<?php echo $assets_dir; ?>css/common.css" />

	<?php foreach( $css as $css_file ) : ?>
		<link rel="stylesheet" href="<?php echo $css_file; ?>" type="text/css" />
	<?php endforeach; ?>
</head>
<body>
	<section class="main-section">
		<?php echo isset($output)?$output:""; ?>
	</section>

	<?php if( $this->load->get_section('footer' ) != '') : ?>
		<?php echo $this->load->get_section('footer');?>
	<?php endif; ?>
</body>
</html>