<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package d-dola
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


	
 <header class="header">
      <div class="header__container">
        <nav class="header__nav">
          <div class="header__top">
            <a class="header__logo" href="#">Area</a>
              	<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu', 

				)
			);
			?>
            <button id='btn-open' class="header__burger menu-btn-open">
              <svg width="24" height="24">
                <use href="./img/icons.svg#icon-burger"></use>
              </svg>
            </button>
            <button class="header__button button">
              Learn More
              <svg class="button__arrow" width="6" height="6">
                <use href="./img/icons.svg#arrow-btn"></use>
              </svg>
            </button>
          </div>
          <div class="header__bottom">
            <ul class="header__bottom-list">
             <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu', 

				)
			);
			?>
            </ul>
            <button class="header__bottom-button button">
              Learn More
              <svg class="button__arrow" width="6" height="6">
                <use href="./img/icons.svg#arrow-btn"></use>
              </svg>
            </button>
          </div>
        </nav>
      </div>
		
	</header><!-- #masthead -->
