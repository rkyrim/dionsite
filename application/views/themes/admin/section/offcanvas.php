        <div class="header-bar hide-for-large-up">
          <nav class="tab-bar no-margin">
              <section class="left tab-bar-section">
                  <h1 class="title"><?php echo anchor('/', 'Site Logo', array('class' => 'site-logo')); ?></h1>
              </section>

              <section class="right">
                <a class="right-off-canvas-toggle menu-icon" href="#"><span></span></a>
              </section>
          </nav>
        </div>

        <aside class="right-off-canvas-menu">
          <ul class="off-canvas-list">
            <li>
              <label>
                Menu
              </label>
            </li>
            <li><?php echo anchor('#', 'Sign Up'); ?></li>
            <li><?php echo anchor('#', 'Log In'); ?></li>
          </ul>
        </aside>