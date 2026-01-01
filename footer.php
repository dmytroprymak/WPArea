<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package d-dola
 */

?>

	 <footer class="footer">
      <div class="container">
        <div class="footer__container">
          <ul class="footer__list">
            <li class='header__link'><a href="#benefits-section">Benefits</a></li>
            <li class='header__link'>
              <a  href="#specifications-section">Specifications</a>
            </li>
            <li class='header__link'><a  href="#how-to-section">How-to</a></li>
          </ul>

          <div class="footer__content">
            <svg class="footer__svg" width="32" height="70">
              <use href="./img/icons.svg#icon-human"></use>
            </svg>

            <div class="footer__info">
              <p class="footer__text">&copy; Area.</p>
              <p class="footer__text">2025</p>
            </div>
            <p class="footer__text footer__text--right">All Rights Reserved</p>
          </div>
        </div>
      </div>
    </footer>

<?php wp_footer(); ?>

</body>
</html>
