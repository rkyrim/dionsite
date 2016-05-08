<?php if (!defined('BASEPATH')) exit('No direct script access allowed...'); ?>

    <section class="navigation-section show-for-large-up">

      <div class="header-bar">
        <div class="row">
          <div class="large-15 columns">

            <nav class="top-bar" data-topbar role="navigation">
              <ul class="title-area">
                <li class="name">
                  <h1 class="title"><?php echo anchor('/', 'Site Logo', array('class' => 'site-logo')); ?></h1>
                </li>
                <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
              </ul>

              <section class="top-bar-section">
                <ul class="right">
                  <li><?php echo anchor('#', 'Sign Up', array('class' => 'button')); ?></li>
                  <li>&nbsp;&nbsp;</li>
                  <li><?php echo anchor('#', 'Log In', array('class' => 'button secondary')); ?></li>
                </ul>
              </section>
            </nav>

          </div>
        </div>
      </div>

    </section>