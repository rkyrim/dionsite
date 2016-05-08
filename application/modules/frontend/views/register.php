<section class="signup-section">
	<div class="row">
		<h2 class="heading2">Sign up</h2>
	</div>
	<div class="row">
		<div class="large-8 large-offset-2 small-12 columns">
			<div class="mabuhay-text">Mabuhay!</div>
			<label class="letsgo">Let's get started</label>
			<div class="signup-holder">
				<?php echo form_open(base_url().'signup', array('class' => 'register-form','data-abide' => '', 'novalidate' => '')); ?>
		
					<?php if (validation_errors() != false) : ?>
						<div data-abide-error class="alert callout">
						    <p><i class="fi-alert"></i> There are some errors in your form.</p>
						    <?php echo '<p>'.form_error('terms').'</p>'; ?>
						    <?php echo '<p>'.form_error('type').'</p>'; ?>
					  	</div>
					 <?php endif; ?>
				  	<!-- <span class="form-error">First name field is required.</span> -->

					<div class="row">
						<div class="large-2 medium-2 small-12 columns">
							I need a 
						</div>
						<div class="large-10 medium-10 small-12 columns">
							<!-- cs = careseeker, cg = caregiver -->
							<input type="radio" name="type" id="careseeker" value="cs" <?php echo set_radio('type', 'cs'); ?>><label for="careseeker">&nbsp;<span class="nanny-label">nanny</span></label><br>
							<input type="radio" name="type" id="caregiver" value="cg" <?php echo set_radio('type', 'cg'); ?>><label for="caregiver">&nbsp;<span class="nanny-label">nanny</span><span class="nanny-looking-for">&nbsp; job</label>
						</div>
					</div>
					<!-- is-invalid-input -->
					<div class="row">
						<div class="large-3 medium-3 small-12 columns">
							<label for="firstname" class="text-right">Name</label>
						</div>
						<div class="large-9 medium-9 small-12 columns">
							<div class="row small-up-1 medium-up-2 large-up-2">
								<div class="column">
									<?php $error_class = form_error('first_name') ? 'is-invalid-input' : 'valid-input' ?>
									<input type="text" name="first_name" id="first_name" value="<?=set_value('first_name');?>" class="field-input <?=$error_class;?>" placeholder="First name">
									<?php echo form_error('first_name'); ?>
								</div>
								<div class="column">
									<?php $error_class = form_error('last_name') ? 'is-invalid-input' : 'valid-input' ?>
									<input type="text" name="last_name" id="last_name" value="<?php echo set_value('last_name'); ?>" class="field-input <?=$error_class;?>" placeholder="Last name">
									<?php echo form_error('last_name'); ?>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="large-3 medium-3 small-12 columns">
							<label for="email_address" class="text-right">Email Address</label>
						</div>
						<div class="large-9 medium-9 small-12 columns">
							<?php $error_class = form_error('email_address') ? 'is-invalid-input' : 'valid-input' ?>
							<input type="email" name="email_address" id="email_address" value="<?php echo set_value('email_address'); ?>" class="field-input <?=$error_class;?>" placeholder="Email address">
							<?php echo form_error('email_address'); ?>
						</div>
					</div>
					<div class="row">
						<div class="large-3 medium-3 small-12 columns">
							<label for="password" class="text-right">Password</label>
						</div>
						<div class="large-9 medium-9 small-12 columns">
							<?php $error_class = form_error('password') ? 'is-invalid-input' : 'valid-input' ?>
							<input type="password" name="password" id="password" value="<?php echo set_value('password'); ?>" class="field-input <?=$error_class;?>" placeholder="Password">
							<?php echo form_error('password'); ?>
						</div>
					</div>
					<div class="row">
						<div class="large-3 medium-3 small-12 columns">
							<label for="confirm_password" class="text-right">Confirm Password</label>
						</div>
						<div class="large-9 medium-9 small-12 columns">
							<?php $error_class = form_error('confirm_password') ? 'is-invalid-input' : 'valid-input' ?>
							<input type="password" name="confirm_password" id="confirm_password" value="<?php echo set_value('confirm_password'); ?>" class="field-input <?=$error_class;?>" placeholder="Confirm password">
							<?php echo form_error('confirm_password'); ?>
						</div>
					</div>
					<div class="row">
						<div class="large-3 medium-3 small-12 columns">
							<label for="location" class="text-right">Location</label>
						</div>
						<div class="large-9 medium-9 small-12 columns">
							<?php $error_class = form_error('location') ? 'is-invalid-input' : 'valid-input' ?>
							<input type="text" name="location" id="location" value="<?php echo set_value('location'); ?>" class="field-input <?=$error_class;?>" placeholder="Location">
						</div>
					</div>
					<div class="row">
						<div class="large-6 large-offset-3 small-6 small-12  columns">
							<label class="terms">
								<?php echo form_checkbox('terms','1', set_checkbox('terms','1')); ?>
								<small>I agree to the <a href="">Terms of Use</a>. For details on collection and use of information, see our <a href="">privacy policy</a></small>
							</label>
						</div>
					</div>
					<br><br>
					<div class="row columns text-center">
						<input type="submit" class="button success" value="Sign Up">
					</div>
				<?php form_close(); ?>			
			</div>
		</div>
	</div>
</section>