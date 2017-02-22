<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>Scrolling techniques affect how content scrolls in relation to the app bar.</h1>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>These following patterns describe the elevations at which content should scroll, how to size flexible space, and when to anchor specific elements.</p>
              </div>
              <div class="module">
                <h3><strong>App bar scrollable regions</strong></h3>
                <p>Status bar<br>
                  Toolbar<br>
                  Tab bar/search bar<br>
                  Flexible space</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/patterns/scrolling-techniques/patterns_scrolling_techniques.png"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="scrolling-techniques.html#scrolling-techniques-app-bar-scrollable-regions" data-qp-ui-data-id="qp:1">App bar scrollable regions</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="scrolling-techniques.html#scrolling-techniques-behavior" data-qp-ui-data-id="qp:2">Behavior</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">
        <div id="scrolling-techniques-app-bar-scrollable-regions" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            App bar scrollable regions
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
                    <p>When designing scrolling behavior, app bars contain four main regions (referred to as <strong>blocks</strong>) that comprise the scrolling structure:</p>
                    <ul class="lst-kix_msg1zeepgnvm-0 start">
                      <li>Status bar</li>
                      <li>Tool bar</li>
                      <li>Tab bar/search bar</li>
                      <li>Flexible space: space to accommodate a desired aspect ratio for images or extended app bars</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/scrolling-techniques/patterns_scrolling_scroll1.png"/>
                      </div>
                      <figcaption>
                        <p>App bar components can include: status bar, navigation bar, tab/search bar, and flexible space</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/scrolling-techniques/patterns_scrolling_video1.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a status bar, navigation bar, tab/search bar, and flexible space</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="scrolling-techniques-behavior" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Behavior
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
                    <h1>Standard app bar</h1>
                    <p>Specs:</p>
                    <p>The standard app bar height is 56dp on mobile and 64dp on larger screen sizes.</p>
                    <p>The app bar has two scrolling options:</p>
                    <ol class="lst-kix_xragy2uut2tp-0 start" start="1">
                      <li>The app bar can<strong> scroll off-screen</strong> with the content and return when the user reverse scrolls.</li>
                      <li>The app bar can <strong>stay fixed at the top</strong> with content scrolling under it.</li>
                    </ol>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/scrolling-techniques/patterns_scrolling_scroll2.png"/>
                      </div>
                      <figcaption>
                        <p>The standard app bar</p>
                        <p>Status bar height: 24dp<br>
                          Toolbar height: 56dp / 64dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/patterns/scrolling-techniques/patterns-scrolling-techniques_standard_appbar_xhdpi_004.webm" type="video/webm">
                            <source src="../static/media/patterns/scrolling-techniques/patterns-scrolling-techniques_standard_appbar_xhdpi_004.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Animation of toolbar off-screen during scrolling</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>App bar with tabs</h1>
                    <p>The <a href="https://www.google.com/url?q=http://www.google.com/design/spec/layout/structure.html%23structure-app-bar&amp;sa=D&amp;ust=1481818034413000&amp;usg=AFQjCNEyNLznR0_A392he9e-U3psIDApKg" target="_blank">standard app bar</a> component that can include the following blocks: a toolbar, tab bar, or flexible space. </p>
                    <p>Tabs may have one of these behaviors:</p>
                    <ol class="lst-kix_cviczu2dcsqt-0 start" start="1">
                      <li>The tab bar stays <strong>anchored at the top</strong>, while the toolbar scrolls off.</li>
                      <li>The app bar stays anchored at the top, with the <strong>content scrolling underneath</strong>.</li>
                      <li>Both the toolbar and tab bar <strong>scroll off with content</strong>. The tab bar returns on reverse-scroll, and the toolbar returns on complete reverse scroll.</li>
                    </ol>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/scrolling-techniques/patterns_scrolling_scroll3.png"/>
                      </div>
                      <figcaption>
                        <p>Status bar, toolbar, and tab bar</p>
                        <p>Status bar height: 24dp<br>
                          Toolbar height: 56dp / 64dp<br>
                          Tab bar height: 48dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/patterns/scrolling-techniques/patterns-scrolling-techniques_tabs_xhdpi_004.webm" type="video/webm">
                            <source src="../static/media/patterns/scrolling-techniques/patterns-scrolling-techniques_tabs_xhdpi_004.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Animation showing the toolbar scrolling off and the tab and app bars stay in place.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Flexible space</h1>
                    <p>Because the app bar is flexible, it can be extended to accommodate larger typography or images. To extend the app bar, add a flexible space block. </p>
                    <p>Flexible space may be displayed one of two ways:</p>
                    <ol class="lst-kix_ssj9brumqzmr-0 start" start="1">
                      <li>The <strong>flexible space shrinks</strong> until only the toolbar remains. The title shrinks to 20sp in the navigation bar. When scrolling to the top of the page, the flexible space and the title grow into place again.</li>
                      <li>The <strong>whole app bar scrolls off</strong>. When the user reverse scrolls, the toolbar returns anchored to the top. When scrolling all the way back, the flexible space and the title grow into place again.</li>
                    </ol>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/scrolling-techniques/patterns_scrolling_scroll4.png"/>
                      </div>
                      <figcaption>
                        <p>Status bar, toolbar, and flexible space</p>
                        <p>Status bar height: 24dp<br>
                          Toolbar height: 56dp / 64dp<br></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/patterns/scrolling-techniques/patterns-scrolling-techniques-flexible_space_xhdpi_003.webm" type="video/webm">
                            <source src="../static/media/patterns/scrolling-techniques/patterns-scrolling-techniques-flexible_space_xhdpi_003.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Animation showing flexible space during scrolling</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Flexible space with image</h1>
                    <p>Use flexible space to accommodate images in the app bar with the desired aspect ratio. </p>
                    <p>In this example, the aspect ratio is 4:3. When scrolling, the content pushes up the image, which shrinks the flexible space. At the end of the transformation, the image gets tinted with the primary color, independent of scrolling.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/scrolling-techniques/patterns_scrolling_scroll5.png"/>
                      </div>
                      <figcaption>
                        <p>Status bar, toolbar, and flexible space</p>
                        <p>Status bar height: 24dp<br>
                          Toolbar height: 56dp / 64dp<br></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/patterns/scrolling-techniques/patterns-scrolling-techniques_flex_space_image_xhdpi_003.webm" type="video/webm">
                            <source src="../static/media/patterns/scrolling-techniques/patterns-scrolling-techniques_flex_space_image_xhdpi_003.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Animation showing flexible space and image during scrolling</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Flexible space with overlapping content</h1>
                    <p>Content can overlap the app bar. </p>
                    <p>The app bar has two scrolling options:</p>
                    <ul class="lst-kix_nm19p4ye05oz-0 start">
                      <li>The app bar is initially positioned behind the content. Upon upward scroll, the app bar should scroll faster than the content, until the content no longer overlaps it. Once <strong>anchored in place</strong>, the app bar lifts up for content to scroll underneath.</li>
                    </ul>
                    <ul class="lst-kix_5ix0qxcgg3bx-0 start">
                      <li>The app bar can <strong>scroll off-screen</strong> with the content and return when the user reverse scrolls.</li>
                    </ul>
                    <p>In this interaction, the app bar cannot include tabs.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/scrolling-techniques/patterns_scrolling_scroll6.png"/>
                      </div>
                      <figcaption>
                        <p>Flexible space</p>
                        <p>Status bar: 24dp<br>
                          Toolbar: 56dp/64dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/patterns/scrolling-techniques/patterns-scrolling-techniques_flex_space_overlap_xhdpi_003.webm" type="video/webm">
                            <source src="../static/media/patterns/scrolling-techniques/patterns-scrolling-techniques_flex_space_overlap_xhdpi_003.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Animation showing flexible space and overlapping content during scrolling</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/patterns/scrolling-techniques/patterns_scrollingtechnique_flexibleoverlap.webm" type="video/webm">
                            <source src="../static/media/patterns/scrolling-techniques/patterns_scrollingtechnique_flexibleoverlap.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Z-space diagram, side view</p>
                      </figcaption>
                    </figure>
                  </div>
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