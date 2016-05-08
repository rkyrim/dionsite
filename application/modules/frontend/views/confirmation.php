<section class="confirmation-section">
	<div class="row">
		<div class="small-6 small-offset-3 columns text-center">
			<?php 
				$class = 'success';
				
				if (!$resp->status) {
					$class = 'alert';
				}
			?>
			<div class="confirm-holder <?=$class;?> radius">
				<?php if ($resp->status) : ?>
					<div class="confirm-icon fi-check"></div>
				<?php else : ?>
					<div class="confirm-icon fi-x"></div>
				<?php endif; ?>
				<p><?php echo $resp->message; ?></p>
				<a href="" class="button large <?=$class;?>">Return</a>
			</div>
			<?php  if ($resp->error) : ?>
			<?php var_dump($resp->error); ?>
			<?php endif; ?>
		</div>
	</div>
</section>