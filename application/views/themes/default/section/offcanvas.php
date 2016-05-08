<div class="off-canvas position-left" id="offCanvasLeft" data-off-canvas data-position="left">
    <div class="row column">
        <button class="close-button" aria-label="Close menu" type="button" data-close="">
            <span aria-hidden="true">×</span>
        </button>
        <ul class="off-canvas-menu vertical menu">
            <li>MENU
                <ul class="submenu menu vertical">
                    <li><?php echo anchor(base_url(), 'Home'); ?></li>
                    <li><?php echo anchor('about', 'About Us'); ?></li>
                    <li><?php echo anchor('services', 'Services'); ?></li>
                    <li><?php echo anchor('faq', 'FAQs'); ?></li>
                    <li><?php echo anchor('contact', 'Contact Us'); ?></li>
                </ul>
            </li>
            <li><a href="javasctipt:void(0);" id="validate-link" data-open="validate-modal">Login</a></li>
            <li><?php echo anchor('signup', 'Sign Up', array('class' => 'signup-btn')); ?></li>
        </ul>
    </div>
</div>