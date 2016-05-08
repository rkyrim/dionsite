<section class="contact-section">
	<div class="row columns"><h2 class="heading2">Contact Us</h2></div>
	<div class="row">
		<div class="large-6 large-offset-3 columns">
			<?php echo form_open(base_url().'contact', array('class' => 'contact-form', 'data-abide' => '', 'novalidate' => 'novalidate')); ?>
				<div data-abide-error class="alert callout" style="display: none;">
				    <p><i class="fi-alert"></i> There are some errors in your form.</p>
			  	</div>
			  	<small style="color: #ff0000; font-style: italic;">Note: Field with asterisk (*) is required.</small>
				<div class="row">
					<div class="small-12 columns">
						<label>Full name<small style="color: #ff0000;">*</small>
							<?php $error_class = form_error('fullname') ? 'is-invalid-input' : 'valid-input' ?>
							<input type="text" name="fullname" value="<?php echo set_value('fullname'); ?>" class="field-input <?=$error_class;?>">
							<?php echo form_error('fullname'); ?>
						</label>
					</div>
				</div>
				<div class="row">
					<div class="small-12 columns">
						<label>Address<small style="color: #ff0000;">*</small>
							<?php $error_class = form_error('address') ? 'is-invalid-input' : 'valid-input' ?>
							<input type="text" name="address" value="<?php echo set_value('address'); ?>"class="field-input <?=$error_class;?>">
							<?php echo form_error('address'); ?>
						</label>
					</div>
				</div>
				<div class="row">
					<div class="small-6 columns">
						<label>Contact Number<small style="color: #ff0000;">*</small>
							<?php $error_class = form_error('contact_number') ? 'is-invalid-input' : 'valid-input' ?>
							<input type="text" name="contact_number" value="<?php echo set_value('contact_number'); ?>"class="field-input <?=$error_class;?>">
							<?php echo form_error('contact_number'); ?>
						</label>
					</div>
					<div class="small-6 columns">
						<label>Email<small style="color: #ff0000;">*</small>
							<?php $error_class = form_error('email_address') ? 'is-invalid-input' : 'valid-input' ?>
							<input type="text" name="email_address" value="<?php echo set_value('email_address'); ?>" class="field-input <?=$error_class;?>">
							<?php echo form_error('email_address'); ?>
						</label>
					</div>
				</div>
				<div class="row">
					<div class="small-12 columns">
						<label>Subject<small style="color: #ff0000;">*</small>
							<?php $error_class = form_error('subject') ? 'is-invalid-input' : 'valid-input' ?>
							<input type="text" name="subject" value="<?php echo set_value('subject'); ?>"class="field-input <?=$error_class;?>">
							<?php echo form_error('subject'); ?>
						</label>
					</div>
				</div>
				<div class="row">
					<div class="small-12 columns">
						<label>Message<small style="color: #ff0000;">*</small>
							<?php $error_class = form_error('body_message') ? 'is-invalid-input' : 'valid-input' ?>
							<textarea name="body_message" rows="5" class="field-input <?=$error_class;?>"><?php echo set_value('body_message'); ?></textarea>
							<?php echo form_error('body_message'); ?>
						</label>
					</div>
				</div>
				<div class="row">
					<div class="small-12 columns text-center">
						<input type="submit" class="button success expand">
					</div>
				</div>
			</div>
		<?php echo form_close(); ?>
	</div>
</section>