<?php
$vars = array(
  'title' => '平台适配',
  'category' => '平台',
  'theme_color' => '#039BE5',
  'color_name' => 'default',
  'prev_title' => 'Bidirectionality',
  'prev_path' => 'usability/bidirectionality',
  'next_title' => 'Android',
  'next_path' => 'platforms/android'
);

include $public_files['header'];
?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title">Platform adaptation</h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>Material Design supports design and usability best practices across platforms to help create beautiful user experiences.</h1>
        </div>
      </div>

      <nav class="chapter-toc">
        <h1>Contents</h1>
        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="platform-adaptation.html#platform-adaptation-when-to-adapt" data-qp-ui-data-id="qp:1">When to adapt</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="platform-adaptation.html#platform-adaptation-platform-recommendations" data-qp-ui-data-id="qp:2">Platform recommendations</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="platform-adaptation-when-to-adapt" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            When to adapt
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>Material Design was built on a foundation of best practices in both traditional and web design, informed by user experience research and cognitive science. The design guidelines that developed from these findings are intended to be universally applied across all platforms and devices. </p>
              <p>Design conventions can differ from platform to platform. These differences in convention can affect the user's ability to understand the UI or complete certain tasks. In these cases, it is recommended to adapt to platform-specific conventions. In areas where design differences are minimally disruptive, adapting to the platform is optional. </p>
              <p>The following guidelines indicate when you should adapt to native platform conventions, and when you have the option to adapt. Platform conventions are constantly evolving, and Material Design is evolving with them to increase the quality of our design patterns.</p>
              <figure class="s-tag-media">
                <div class="media">
                  <img alt="" src="../static/media/platforms/platform-adaptation/material_design.platform_adaptation_intro.png"/>
                </div>
              </figure>
            </div>
          </div>
        </div>

        <div id="platform-adaptation-platform-recommendations" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Platform recommendations
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
                    <h1>Toolbars </h1>
                    <p>Toolbars are commonly used to frame the context of a screen. </p>
                    <p>It is recommended to use a platform’s default text alignment for toolbar titles, unless multiple action buttons are present. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/platforms/platform-adaptation/material_design.platform_adaptation_toolbar_1.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Android/Web</strong></p>
                        <p>Titles are always left-aligned. </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/platforms/platform-adaptation/material_design.platform_adaptation_toolbar_2.png"/>
                      </div>
                      <figcaption>
                        <p><strong>iOS</strong></p>
                        <p>Titles are center-aligned by default.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/platforms/platform-adaptation/material_design.platform_adaptation_toolbar_3.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Android</strong></p>
                        <p>When multiple actions, or even no actions, appear on the right side, toolbar titles are always left-aligned.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/platforms/platform-adaptation/material_design.platform_adaptation_toolbar_4.png"/>
                      </div>
                      <figcaption>
                        <p><strong>iOS</strong></p>
                        <p>When multiple action buttons are on the right side, or at the home screen of an application, titles may be left-aligned.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Iconography</h1>
                    <p>System icons are used to represent the most universally available actions for the platform.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/platforms/platform-adaptation/material_design.platform_adaptation_iconography_1.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Android/Web</strong></p>
                        <p>The back button contains a thin arrow with a stem. </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/platforms/platform-adaptation/material_design.platform_adaptation_iconography_2.png"/>
                      </div>
                      <figcaption>
                        <p><strong>iOS</strong></p>
                        <p>On iOS, the back arrow is thicker, and without a stem.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/platforms/platform-adaptation/material_design.platform_adaptation_iconography_3.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Android/Web</strong></p>
                        <p>The action overflow menu icon (indicated by the “More…” symbol) contains three <strong>vertical </strong>dots.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/platforms/platform-adaptation/material_design.platform_adaptation_iconography_4.png"/>
                      </div>
                      <figcaption>
                        <p><strong>iOS</strong></p>
                        <p>The action overflow menu icon (indicated by the “More…” symbol) contains three <strong>horizontal </strong>dots.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Controls</h1>
                    <p>Controls should clearly indicate how users should interact with them. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/platforms/platform-adaptation/material_design.platform_adaptation_control_1.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Android</strong></p>
                        <p>Use Material switches, checkboxes, and radio buttons. </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/platforms/platform-adaptation/material_design.platform_adaptation_control_2.png"/>
                      </div>
                      <figcaption>
                        <p><strong>iOS </strong></p>
                        <p>Native platform switches may be used as they have matching functionality and appearance as Material switches.</p>
                        <p>Use switches instead of check boxes and check mark lists instead of radio buttons, as these are the graphics expected on iOS.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/platforms/platform-adaptation/material_design.platform_adaptation_control_3.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Web</strong></p>
                        <p>You may use Material switches, checkboxes, and radio buttons.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Gestures</h1>
                    <p><strong>Edge swipe</strong></p>
                    <p>An edge swipe starts from outside of the screen to reveal off-screen content. </p>
                    <p>Edge swipes can conflict with other swipe gestures, such as horizontal swipes through pages or table rows. To avoid these kinds of conflicts, an edge swipe should perform the same behavior as any other swipe that exists over a content area.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/platforms/platform-adaptation/material_design.platform_adaptation_gestures_1.webm" type="video/webm">
                            <source src="../static/media/platforms/platform-adaptation/material_design.platform_adaptation_gestures_1.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p><strong>Android</strong></p>
                        <p>When conflicting gestures are not present, performing an edge swipe from the left reveals off-screen content, such as a navigation drawer.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/platforms/platform-adaptation/material_design.platform_adaptation_gestures_2.webm" type="video/webm">
                            <source src="../static/media/platforms/platform-adaptation/material_design.platform_adaptation_gestures_2.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p><strong>iOS</strong></p>
                        <p>When conflicting gestures are not present, performing an edge swipe from the left navigates you back through an app’s hierarchy.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/platforms/platform-adaptation/material_design.platform_adaptation_gestures_3.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do">Do.</p>
                        <p><strong>Web</strong></p>
                        <p>Browsers often use edge gestures for their feature set. Edge swipes should not be used on the web.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/platforms/platform-adaptation/material_design.platform_adaptation_gestures_4.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont">Don't.</p>
                        <p><strong>Web</strong></p>
                        <p>Edge swipes can not be relied on across browsers.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Typography</h1>
                    <p>Typography communicates both text content and branding. In both cases, text must be accessible and resizable. </p>
                    <p>If your app already uses typography for branding, it is recommended to do so in moderation.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/platforms/platform-adaptation/material_design.platform_adaptation_typography_1.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Android</strong></p>
                        <p>The default typeface on Android is Roboto. On Android, text size should be specified in <a href="https://www.google.com/url?q=https://material.google.com/layout/units-measurements.html%23units-measurements-scaleable-pixels-sp&amp;sa=D&amp;ust=1481818028627000&amp;usg=AFQjCNGXhnPOv82E5ryeE8L34rONxByVpA" target="_blank">scaleable pixels</a> to allow type to be resized using accessibility features.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/platforms/platform-adaptation/material_design.platform_adaptation_typography_2.png"/>
                      </div>
                      <figcaption>
                        <p><strong>iOS</strong></p>
                        <p>The default typeface on iOS is San Francisco. Using this typeface is the easiest way to implement accessibility features like Dynamic Type. Using other typefaces may require making adjustments to get the same accessibility features.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/platforms/platform-adaptation/material_design.platform_adaptation_typography_3.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Web</strong></p>
                        <p>While Arial is the most broadly available font on the web, modern browsers provide accessibility and scaling support for web fonts.</p>
                        <p>Material Design’s standard <a href="../style/typography.html#typography-styles">typographic guidelines</a> for Roboto on the web can help simplify your font usage. Alternatively, use <a href="https://www.google.com/url?q=https://fonts.google.com/&amp;sa=D&amp;ust=1481818028634000&amp;usg=AFQjCNGHCFWUIa8AEvmEAX9BQjfXz0Xacw" target="_blank">custom fonts</a> and establish your own type hierarchy that ensures legibility. </p>
                      </figcaption>
                    </figure>
                  </div>
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

<?php
include $public_files['footer'];
?>