<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package d-dola
 */

get_header();
?>

	 <main>
      <section class="hero-section section">
        <div class="container">
          <h1 class="hero-section__title">Browse everything.</h1>
          <div class="hero-section__photo">
            <picture>
              <source media="(min-width: 800px)" srcset="./img/tablet.jpg" />
              <source media="(min-width: 1280px)" srcset="./img/desktop.jpg" />
              <img
                class="hero-section__img"
                src="./img/mobile.jpg"
                alt="Device image"
              />
            </picture>

            <div class="hero-section__background"></div>
          </div>
        </div>
      </section>
      <section class="trust-section section">
        <div class="container">
          <h2 class="trust-section__heading">Trusted by:</h2>
          <div class="trust-section__logos">
            <img
              class="trust-section__logo"
              src="./img/logoipsum1.png"
              alt="Company with trust us"
            />
            <img
              class="trust-section__logo"
              src="./img/logoipsum2.png"
              alt="Company with trust us"
            />
            <img
              class="trust-section__logo"
              src="./img/logoipsum3.png"
              alt="Company with trust us"
            />
            <img
              class="trust-section__logo"
              src="./img/logoipsum4.png"
              alt="Company with trust us"
            />
            <img
              class="trust-section__logo"
              src="./img/logoipsum5.png"
              alt="Company with trust us"
            />
            <img
              class="trust-section__logo"
              src="./img/logoipsum6.png"
              alt="Company with trust us"
            />
          </div>
        </div>
      </section>
      <section class="benefits-section section" id="benefits-section">
        <div class="container">
          <h2 class="benefits-section__heading">Benefits</h2>
          <p class="benefits-section__text">We’ve cracked the code.</p>
          <p class="benefits-section__paragraf">
            Area provides real insights, without the data overload.
          </p>

          <div class="benefits-section__list">
            <div class="benefits-section__advantage">
              <svg
                class="benefits-section__advantage-img"
                width="20"
                height="20"
              >
                <use href="./img/icons.svg#icon-cable"></use>
              </svg>
              <p class="benefits-section__advantage-text">Amplify Insights</p>
              <p class="benefits-section__advantage-paragraf">
                Unlock data-driven decisions with comprehensive analytics,
                revealing key opportunities for strategic regional growth.
              </p>
            </div>
            <div class="benefits-section__advantage">
              <svg
                class="benefits-section__advantage-img"
                width="20"
                height="20"
              >
                <use href="./img/icons.svg#icon-earth"></use>
              </svg>
              <p class="benefits-section__advantage-text">
                Control Your Global Presence
              </p>
              <p class="benefits-section__advantage-paragraf">
                Manage and track satellite offices, ensuring consistent
                performance and streamlined operations everywhere.
              </p>
            </div>
            <div class="benefits-section__advantage">
              <svg
                class="benefits-section__advantage-img"
                width="20"
                height="20"
              >
                <use href="./img/icons.svg#icon-speaker"></use>
              </svg>
              <p class="benefits-section__advantage-text">
                Remove Language Barriers
              </p>
              <p class="benefits-section__advantage-paragraf">
                Adapt to diverse markets with built-in localization for clear
                communication and enhanced user experience.
              </p>
            </div>
            <div class="benefits-section__advantage">
              <svg
                class="benefits-section__advantage-img"
                width="20"
                height="20"
              >
                <use href="./img/icons.svg#icon-visualize"></use>
              </svg>
              <p class="benefits-section__advantage-text">Visualize Growth</p>
              <p class="benefits-section__advantage-paragraf">
                Generate precise, visually compelling reports that illustrate
                your growth trajectories across all regions.
              </p>
            </div>
          </div>
          <picture class="benefits-section__img-container">
            <source
              media="(min-width: 800px)"
              srcset="./img/mountain-tablet.jpg"
            />
            <source
              media="(min-width: 1280px)"
              srcset="./img/mountain-desktop.jpg"
            />
            <img
              class="benefits-section__img"
              src="./img/mountain-mobile.jpg"
              alt="Mountains image"
            />
          </picture>
        </div>
      </section>
      <section class="example-section section">
        <div class="container">
          <div class="example-section__container">
            <div class="example-section__left">
              <p class="example-section__text">See the Big Picture</p>
              <p class="example-section__paragraf">
                Area turns your data into clear, vibrant visuals that show you
                exactly what's happening in each region.
              </p>
              <ul class="example-section__list">
                <li class="example-section__item">
                  <p class="text-numbers">01</p>
                  <p class="text-list-item">
                    Spot Trends in Seconds: No more digging through numbers.
                  </p>
                </li>
                <li class="example-section__item">
                  <p class="text-numbers">02</p>
                  <p class="text-list-item">
                    Get Everyone on the Same Page: Share easy-to-understand
                    reports with your team.
                  </p>
                </li>
                <li class="example-section__item">
                  <p class="text-numbers">03</p>
                  <p class="text-list-item">
                    Make Presentations Pop: Interactive maps and dashboards keep
                    your audience engaged.
                  </p>
                </li>
                <li class="example-section__item">
                  <p class="text-numbers">04</p>
                  <p class="text-list-item">
                    Your Global Snapshot: Get a quick, clear overview of your
                    entire operation.
                  </p>
                </li>
              </ul>
              <button class="button button--light">Discover More</button>
            </div>
            <picture>
              <source
                media="(min-width: 800px)"
                srcset="./img/paper-roll-tablet.jpg"
              />
              <source
                media="(min-width: 1280px)"
                srcset="./img/paper-roll-desktop.jpg"
              />
              <img
                class="example-section__img"
                src="./img/paper-roll-mobile.jpg"
                alt="Paper roll image"
              />
            </picture>
          </div>
        </div>
      </section>
      <section class="why-section section" id="specifications-section">
        <div class="container container--before">
          <div class="why-section__container">
            <p class="why-section__caption text-caption">Specs</p>
            <p class="why-section__text">Why Choose Area?</p>
            <p class="why-section__paragraf">
              You need a solution that keeps up. That’s why we developed Area. A
              developer-friendly approach to streamline your business
            </p>
            <button class="button button--light">Discover More</button>
          </div>
        </div>

        <div class="value-section">
          <div class="container">
            <div class="table">
              <div class="table__first">
                <p class="table__heding table__heding--main">Area</p>
                <p class="table__item">
                  <svg class="table__svg" width="14" height="14">
                    <use href="./img/icons.svg#icon-check"></use>
                  </svg>
                  Ultra-fast browsing
                </p>
                <p class="table__item">
                  <svg class="table__svg" width="14" height="14">
                    <use href="./img/icons.svg#icon-check"></use>
                  </svg>
                  Advanced AI insights
                </p>
                <p class="table__item">
                  <svg class="table__svg" width="14" height="14">
                    <use href="./img/icons.svg#icon-check"></use>
                  </svg>
                  Seamless integration
                </p>
                <p class="table__item">
                  <svg class="table__svg" width="14" height="14">
                    <use href="./img/icons.svg#icon-check"></use>
                  </svg>
                  Advanced AI insights
                </p>
                <p class="table__item">
                  <svg class="table__svg" width="14" height="14">
                    <use href="./img/icons.svg#icon-check"></use>
                  </svg>
                  Ultra-fast browsing
                </p>
                <p class="table__item">
                  <svg class="table__svg" width="14" height="14">
                    <use href="./img/icons.svg#icon-check"></use>
                  </svg>
                  Full UTF-8 support
                </p>
              </div>
              <div class="table__second">
                <p class="table__heding">WebSurge</p>
                <div class="table__second-items">
                  <p class="table__item">
                    <svg class="table__svg" width="14" height="14">
                      <use href="./img/icons.svg#icon-check"></use>
                    </svg>
                    Very fast browsing
                  </p>
                  <p class="table__item">
                    <svg class="table__svg" width="14" height="14">
                      <use href="./img/icons.svg#icon-check"></use>
                    </svg>
                    Basic AI recommendations
                  </p>
                  <p class="table__item">
                    <svg class="table__svg" width="14" height="14">
                      <use href="./img/icons.svg#icon-check"></use>
                    </svg>
                    Restricts customization
                  </p>
                  <p class="table__item">
                    <svg class="table__svg" width="16" height="16">
                      <use href="./img/icons.svg#icon-cross"></use>
                    </svg>
                    Basic AI insights
                  </p>
                  <p class="table__item">
                    <svg class="table__svg" width="14" height="14">
                      <use href="./img/icons.svg#icon-check"></use>
                    </svg>
                    Very fast browsing
                  </p>
                  <p class="table__item">
                    <svg class="table__svg" width="16" height="16">
                      <use href="./img/icons.svg#icon-cross"></use>
                    </svg>
                    Potential display errors
                  </p>
                </div>
              </div>
              <div class="table__third">
                <p class="table__heding">HyperView</p>
                <div class="table__third-items">
                  <p class="table__item">
                    <svg class="table__svg" width="16" height="16">
                      <use href="./img/icons.svg#icon-cross"></use>
                    </svg>
                    Moderate speeds
                  </p>
                  <p class="table__item">
                    <svg class="table__svg" width="16" height="16">
                      <use href="./img/icons.svg#icon-cross"></use>
                    </svg>
                    No AI assistance
                  </p>
                  <p class="table__item">
                    <svg class="table__svg" width="16" height="16">
                      <use href="./img/icons.svg#icon-cross"></use>
                    </svg>
                    Steep learning curve
                  </p>
                  <p class="table__item">
                    <svg class="table__svg" width="16" height="16">
                      <use href="./img/icons.svg#icon-cross"></use>
                    </svg>
                    No AI assistance
                  </p>
                  <p class="table__item">
                    <svg class="table__svg" width="16" height="16">
                      <use href="./img/icons.svg#icon-cross"></use>
                    </svg>
                    Moderate speeds
                  </p>
                  <p class="table__item">
                    <svg class="table__svg" width="16" height="16">
                      <use href="./img/icons.svg#icon-cross"></use>
                    </svg>
                    Partial UTF-8 support
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="quote-section section">
        <div class="container">
          <div class="quote-section__container">
            <img
              class="quote-section__img"
              src="./img/three-balls.png"
              alt="Three balls image"
            />
            <div class="quote-section__right">
              <p class="quote-section__quote">
                “I was skeptical, but Area has completely transformed the way I
                manage my business. The data visualizations are so clear and
                intuitive, and the platform is so easy to use. I can't imagine
                running my company without it.”
              </p>
              <div class="quote-section__info">
                <p class="quote-section__author">John Smith</p>
                <p class="text-caption">Head of Data</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="map-section section" id="how-to-section">
        <div class="container">
          <div class="map-section__container">
            <div class="map-section__hero">
              <p class="map-section__heading">Map Your Success</p>
              <button class="button button--light">Discover More</button>
            </div>
            <div class="map-section__content">
              <div class="map-section__item">
                <p class="map-section__number">01</p>
                <p class="map-section__text">Get Started</p>
                <p class="map-section__paragraf">
                  With our intuitive setup, you’re up and running in minutes.
                </p>
              </div>
              <div class="map-section__item">
                <p class="map-section__number">02</p>
                <p class="map-section__text">Customize and Configure</p>
                <p class="map-section__paragraf">
                  Adapt Area to your specific requirements and preferences.
                </p>
              </div>
              <div class="map-section__item">
                <p class="map-section__number">03</p>
                <p class="map-section__text">Grow Your Business</p>
                <p class="map-section__paragraf">
                  Make informed decisions to exceed your goals.
                </p>
              </div>
            </div>

            <div class="map-section__img-container">
              <img
                class="map-section__img"
                src="./img/mountain-green.jpg"
                alt="Green mountains image"
              />
            </div>
          </div>
        </div>
      </section>
      <section class="contact-section section" id="contact-section">
        <div class="container">
          <div class="contact-section__container">
            <div class="contact-section__content">
              <p class="contact-section__text">Connect with us</p>
              <p class="contact-section__paragraf">
                Schedule a quick call to learn how Area can turn your regional
                data into a powerful advantage.
              </p>

              <button class="button button--long">
                <span class="button__text">Learn More</span>
                <span class="button__svg">
                  <svg class="button__arrow" width="6" height="6">
                    <use href="./img/icons.svg#arrow-btn"></use>
                  </svg>
                </span>
              </button>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
