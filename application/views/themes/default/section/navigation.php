<?php var_dump($type); ?>
<div class="row columns">
	<ul class="nav">
		<li><?php echo anchor($type.'/dashboard','Home'); ?></li>
		<li><?php echo anchor($type.'/profile','Profile'); ?></li>
		<li><?php echo anchor($type.'/safety','Safety'); ?></li>
		<li><?php echo anchor($type.'/post','Post a Job'); ?></li>
		<li><?php echo anchor($type.'/find','Find a Nanny'); ?></li>
		<li><?php echo anchor($type.'/bookings','Bookings'); ?></li>
		<li><?php echo anchor($type.'/features','Account Feature'); ?></li>
	</ul>
</div>