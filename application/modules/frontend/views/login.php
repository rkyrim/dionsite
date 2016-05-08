<section class="login-section">
	<div class="row">
		<div class="small-4 small-offset-4 columns radius">
			<fieldset class="fieldset">
				<legend>Login</legend>

				<?php if ($resp->error_status) : ?>
					<div data-abide-error class="alert callout">
						<span class="form-error is-visible"><i class="fi-alert"></i> <?=$resp->message;?></span>
					</div>
				<?php endif; ?>

				<?php echo form_open(base_url().'login', array('class' => 'login-form','data-abide' => '', 'novalidate' => '')); ?>
					<div class="row columns">
						<label>
							<?php $error_class = form_error('email_address') ? 'is-invalid-input' : 'valid-input' ?>
							<input class="field-input <?=$error_class;?>" type="text" name="email_address" id="email_address" placeholder="Email address" value="<?=set_value('email_address');?>">
						</label>
						<?php if (form_error('email_address')) : ?>
							<span class="form-error is-visible">Please provide your valid email address.</span>
						<?php endif; ?>	
					</div>
					<div class="row columns">
						<label>
							<?php $error_class = form_error('password') ? 'is-invalid-input' : 'valid-input' ?>
							<input class="field-input <?=$error_class;?>" type="password" name="password" id="password" placeholder="Password" value="<?=set_value('password');?>">
						</label>
						<?php echo form_error('password'); ?>
					</div>
					<div class="row columns text-right">
						<input type="submit" name="login" id="login" class="button" value="Login">
					</div>
				<?php echo form_close(); ?>
			</fieldset>
		</div>
	</div>
</section>