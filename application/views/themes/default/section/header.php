<header class="header-section">
    <div class="row large-12 columns">
        <div class="top-bar show-for-large">
            <div class="top-bar-left">
                <h1 class="brand-holder"><?php echo anchor(base_url(), 'Dion Online', array('class' => 'brandname')); ?></h1>
                <!-- <img src="<?=$assets_dir;?>images/dion-logo-new.svg"> -->
            </div>
            <div class="top-bar-right">
                <div class="user-control text-right">
                    <?php echo anchor('login', 'Login'); ?>&nbsp;&nbsp;
                   <!--  <a href=";" id="validate-link" data-reveal-id="validate-modal" class="signup-btn">Signup</a> -->
                    <?php echo anchor('signup', 'Sign Up', array('class' => 'signup-btn')); ?>
                </div>
                <ul class="menu">
                    <li><?php echo anchor(base_url(), 'Home'); ?></li>
                    <li class="menu-seperator">|</li>
                    <li><?php echo anchor('about', 'About Us'); ?></li>
                    <li class="menu-seperator">|</li>
                    <li><?php echo anchor('services', 'Services'); ?></li>
                    <li class="menu-seperator">|</li>
                    <li><?php echo anchor('faq', 'FAQs'); ?></li>
                    <li class="menu-seperator">|</li>
                    <li><?php echo anchor('contact', 'Contact Us'); ?></li>
                </ul>
            </div>
        </div>
        <div class="top-bar title-bar mobile text-center hide-for-large">
            <div class="title-bar-left">
                <h1 class="brand-holder"><a href="" class="brandname">Dion Online</a></h1>
            </div>
            <div class="title-bar-right">
                <button class="menu-icon" type="button" data-open="offCanvasLeft"></button>
            </div>
        </div>
    </div>
</header>