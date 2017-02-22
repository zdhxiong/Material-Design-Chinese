<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    
    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>The launch screen is a user’s first experience of your application.</h1>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>A <strong>placeholder UI</strong> displays core structural elements such as the status and app bars until the app has loaded.</p>
                <p><strong>Branded launch screens</strong> display your logo or other elements that improve brand recognition.</p>
              </div>
              <div class="module">
                <h3><strong>Usage</strong></h3>
                <p>A placeholder UI is best for apps with very short load times.</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/patterns/launch-screens/patterns_launch_screens.png"/>
                  </div>
                </figure>
              </div>
            </section>
          </div>
        </div>
      </div>
      
      <nav class="chapter-toc">
        <h1>目录</h1>
        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="launch-screens.html#launch-screens-types-of-launch-screens" data-qp-ui-data-id="qp:1">Types of launch screens</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="launch-screens.html#launch-screens-placeholder-ui" data-qp-ui-data-id="qp:2">Placeholder UI</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="launch-screens.html#launch-screens-branded-launch" data-qp-ui-data-id="qp:3">Branded launch</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="launch-screens-types-of-launch-screens" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            Types of launch screens
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>Because launching your app while displaying a blank canvas increases its perceived loading time, consider using a placeholder UI or a branded launch screen. </p>
                    <p>A <strong>placeholder UI</strong> is the most seamless launch transition – appropriate for both app launches and in-app activity transitions.</p>
                    <p><strong>Branded launch screens</strong> provide momentary brand exposure, freeing the UI to focus on content.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/launch-screens/patterns-launch-screens-01.png"/>
                      </div>
                      <figcaption>
                        <p>Branded launch screen</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/launch-screens/patterns-launch-screens-03.png"/>
                      </div>
                      <figcaption>
                        <p>Placeholder UI</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="launch-screens-placeholder-ui" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Placeholder UI
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <p>For apps that have very short load times, or don’t have a strong branding need, a placeholder UI presents the fewest possible transitions and greatest perceived responsiveness.</p>
                    <p>On launch, core structural elements such as the status bar, app bar, and bottom sheets are displayed without content until the app has loaded. </p>
                    <h2><strong> </strong></h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/launch-screens/patters-launch-screens-03.png"/>
                      </div>
                      <figcaption>
                        <p>Example of placeholder UI</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="launch-screens-branded-launch" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            Branded launch
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>Branded launch screens are a good way to portray a brand while the app is loading. Take advantage of the loading time to display your logo or other elements that improve brand recognition. Avoid using text on this screen except your logo and, if applicable, a tagline.</p>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong>Branded launch</strong></h2>
                    <p>Launch screens should be used for initial, cold launch from the home screen, and should not be displayed if the application is running, or if the launch comes from another application.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/launch-screens/patterns-launch-screens-01.png"/>
                      </div>
                      <figcaption>
                        <p>Examples of branded launch screens </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/launch-screens/patterns-launch-screens-02.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/launch-screens/patterns-launch-screens-04.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/launch-screens/patterns-launch-screens-05.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module"></div>
                  <div class="module"></div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>
        <div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php include SRC_PATH.'/public/footer.php'; ?>