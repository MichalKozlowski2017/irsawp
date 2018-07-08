<header class="page-header">
  <div class="container">
      <div class="row">
          <div class="page-header__wrapper col-sm-12">
            <div class="page-header__wrapper__logo">
              @php
              if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
              }
              @endphp
            </div>
            <button id="mobileButton" class="page-header__wrapper__hamburger hamburger hamburger--elastic" type="button">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>
            <nav class="nav-primary page-header__wrapper__nav">
              @if (has_nav_menu('primary_navigation'))
                {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
              @endif
            </nav>
          </div>
      </div>
  </div>
</header>
