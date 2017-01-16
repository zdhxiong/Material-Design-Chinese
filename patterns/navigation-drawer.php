<?php
$vars = array(
  'title' => 'Navigation drawer',
  'category' => '模式',
  'theme_color' => '#FB8C00',
  'color_name' => 'orange',
  'prev_title' => 'Navigation',
  'prev_path' => 'patterns/app-structure',
  'next_title' => 'Navigational transitions',
  'next_path' => 'patterns/navigational-transitions'
);

include $public_files['header'];
?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title">Navigation drawer</h1>
    
    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>The navigation drawer slides in from the left and contains the navigation destinations for your app.</h1>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>The nav drawer spans the height of the screen, with everything behind it visible but darkened by a scrim.</p>
                <p>The navigation drawer follows the keylines and metrics for <a href="../components/lists.html">lists</a>.</p>
              </div>
              <div class="module">
                <h3><strong>Resting elevation</strong></h3>
                <p>16dp</p>
                <h3><strong>Navigation drawer types</strong></h3>
                <p>Permanent<br>
                  Persistent<br>
                  Mini variant<br>
                  Temporary</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/patterns/navigation-drawer/patterns_navigation_drawer.png"/>
                  </div>
                </figure>
              </div>
            </section>
          </div>
        </div>
      </div>
      
      <nav class="chapter-toc">
        <h1>Contents</h1>
        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="navigation-drawer.html#navigation-drawer-specs" data-qp-ui-data-id="qp:1">Specs</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="navigation-drawer.html#navigation-drawer-content" data-qp-ui-data-id="qp:2">Content</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="navigation-drawer.html#navigation-drawer-behavior" data-qp-ui-data-id="qp:3">Behavior</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">
        <div id="navigation-drawer-specs" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            Specs
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="figure-figure-figure col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/navigation-drawer/patterns_navdrawer_metrics1.png"/>
                      </div>
                      <figcaption>
                        <p>Typography</p>
                        <ol class="lst-kix_pwmxzo3irtjh-0 start" start="1">
                          <li>Name: Roboto Medium, 14sp, #FFFFFF</li>
                          <li>Email address: Roboto Regular, 14sp, #FFFFFF</li>
                          <li>List item: Roboto Medium, 14sp, 87% #000000</li>
                          <li>Subheader: Roboto Medium, 14sp, 54% #000000. It aligns to the 16dp keyline.</li>
                        </ol>
                        <h2><strong> </strong></h2>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/navigation-drawer/patterns_navdrawer_metrics2.png"/>
                      </div>
                      <figcaption>
                        <p>Keylines and margins</p>
                        <p>Icons align at screen left and right margins: 16dp</p>
                        <p>Icon values: 54% #000000</p>
                        <p>Content associated with an icon or avatar left margin: 72dp</p>
                        <p>Side nav width: Equal to the screen width minus the height of the action bar. In the example shown above, the nav drawer is 56dp from the right edge of the screen.</p>
                        <p>Maximum width: The maximum width of the nav drawer is 280dp on mobile and 320dp on tablet. This is calculated by multiplying the standard increment by five (the standard increment is 56dp on mobile and 64dp on tablet).</p>
                        <p>Use 16dp horizontal margins on mobile and 24dp on tablet</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/navigation-drawer/patterns_navdrawer_metrics3.png"/>
                      </div>
                      <figcaption>
                        <p>Vertical spacing</p>
                        <ol class="lst-kix_t0e6vxld876k-0 start" start="1">
                          <li>Status bar: 24dp</li>
                          <li>Subtitle: 56dp</li>
                          <li>Space between content areas: 8dp</li>
                          <li>Subtitles and list items: 48dp</li>
                        </ol>
                        <p>Add 8dp padding at the top and bottom of every list grouping. One exception is at the top of a list with a subheader, because subheaders contain their own padding. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="navigation-drawer-content" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Content
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
                    <h1>Elevation</h1>
                    <p>The nav drawer spans the full height of the screen, including behind the status bar, at a resting elevation of 16dp. Everything behind the drawer is still visible but darkened by a scrim. </p>
                    <h2><strong> </strong></h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/navigation-drawer/patterns_navdrawer_elevation1.png"/>
                      </div>
                      <figcaption>
                        <p>Nav drawer on Android</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Selection state</h1>
                    <p>After a list item is selected, that item changes color to match the app’s primary color (or #000000 100%) to indicate selection. Additionally, the touch ripple highlights the row of that list item. </p>
                    <p>If the color of the touch ripple/highlight doesn’t contrast enough with your primary color, use a darker tint of the primary color.</p>
                    <h2><strong> </strong></h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/navigation-drawer/patterns_navdrawer_selection1.png"/>
                      </div>
                      <figcaption>
                        <p>List item selected</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/navigation-drawer/patterns_navdrawer_selection3.png"/>
                      </div>
                      <figcaption>
                        <p>Touch ripple/highlight</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/navigation-drawer/patterns_navdrawer_selection5.png"/>
                      </div>
                      <figcaption>
                        <p>Touch ripple/highlight</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/navigation-drawer/patterns_navdrawer_selection2.png"/>
                      </div>
                      <figcaption>
                        <p>Touch ripple/highlight</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/navigation-drawer/patterns_navdrawer_selection4.png"/>
                      </div>
                      <figcaption>
                        <p>Touch ripple/highlight</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/navigation-drawer/patterns_navdrawer_selection6.png"/>
                      </div>
                      <figcaption>
                        <p>Touch ripple/highlight</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Dividers</h1>
                    <p>All dividers in the nav drawer are full-bleed within the drawer with 8dp padding above and below each divider.</p>
                    <h2><strong> </strong></h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/navigation-drawer/patterns_navdrawer_dividers1.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a divider</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/navigation-drawer/patterns_navdrawer_dividers2.png"/>
                      </div>
                      <figcaption>
                        <p>8dp vertical spacing</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Scrolling</h1>
                    <p>The navigation drawer scrolls in the same way a view scrolls.</p>
                    <h2><strong> </strong></h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/navigation-drawer/patterns_navdrawer_scrolling1.png"/>
                      </div>
                      <figcaption>
                        <p>Navigation drawer before scrolling</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/navigation-drawer/patterns_navdrawer_scrolling2.png"/>
                      </div>
                      <figcaption>
                        <p>Navigation drawer during scrolling</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module"><h1>Settings and support</h1>
                    <p>Settings and support are located at the bottom of the scrolling list, inline with the rest of the list content. They refer to Help, Feedback, or Help &amp; feedback, depending on what your product offers.</p>
                    <h2><strong> </strong></h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/navigation-drawer/patterns_navdrawer_settings1.png"/>
                      </div>
                      <figcaption>
                        <p>Settings and support are located at the bottom of the scrolling list.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="navigation-drawer-behavior" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
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
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Permanent</h1>
                    <p><strong>Recommended default for desktop</strong></p>
                    <p><strong><br></strong>Permanent navigation drawers are always visible and pinned to the left edge, at the same elevation as the content or background. They cannot be closed.</p>
                    <p>The threshold for pinning is calculated using these minimum values:</p>
                    <p>1. Side nav width<br>
                      2. Content width<br>
                      3. Content padding</p>
                    <h2><strong> </strong></h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/navigation-drawer/patterns_navdrawer_behavior_permanent1.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong><strong>Types of permanent navigation drawers</strong></strong></h2>
                    <p>The structure and behavior of the overall interface determines which type of permanent navigation drawer to use:</p>
                    <ul class="lst-kix_6ytfk4wm2jd2-0 start">
                      <li><strong>Full-height navigation drawer: </strong>Apps focused on information consumption that use a left-to-right hierarchy</li>
                      <li><strong>Navigation drawer clipped under the app bar: </strong>Apps focused on productivity that require balance across the screen</li>
                      <li><strong>Floating navigation drawer</strong>: Apps that require less hierarchy</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/navigation-drawer/patterns_navdrawer_behavior_permanent2.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a permanent, full-height drawer </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/navigation-drawer/patterns_navdrawer_behavior_permanent3.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a permanent, clipped drawer</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/navigation-drawer/patterns_navdrawer_behavior_permanent4.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a permanent, floating drawer </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/navigation-drawer/patterns_navdrawer_behavior_permanent5.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a permanent, floating drawer in card</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Persistent</h1>
                    <p>Persistent navigation drawers can toggle open or closed. The drawer sits on the same surface elevation as the content. It is closed by default and opens by selecting the menu icon, and stays open until closed by the user. The state of the drawer is remembered from action to action and session to session. </p>
                    <p>When the drawer is outside of the page grid and opens, the drawer forces other content to change size and adapt to the smaller viewport.</p>
                    <p>Persistent navigation drawers are acceptable for all sizes larger than mobile.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/navigation-drawer/patterns_navdrawer_behavior_persistent1.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a closed persistent drawer </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/navigation-drawer/patterns_navdrawer_behavior_persistent2.png"/>
                      </div>
                      <figcaption>
                        <p>Example of an open persistent drawer </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Persistent navigation drawers are not recommended for apps with multiple levels of hierarchy that require using an up arrow for navigation.</p>
                    <h2><strong> </strong></h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/navigation-drawer/patterns_navdrawer_behavior_persistent3.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont">Don't.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong><strong>Mini variant</strong></strong></h2>
                    <p>In this variation, the persistent navigation drawer changes its width. Its resting state is as a mini-drawer at the same elevation as the content, clipped by the app bar. When expanded, it appears as the standard persistent navigation drawer.</p>
                    <p><strong>Recommended for: </strong><br>
                      Apps sections that need quick selection access alongside content</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/navigation-drawer/patterns_navdrawer_behavior_persistent4.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a mini drawer </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/navigation-drawer/patterns_navdrawer_behavior_persistent5.png"/>
                      </div>
                      <figcaption>
                        <p>Example of open persistent drawer </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Temporary</h1>
                    <p>Temporary navigation drawers can toggle open or closed. Closed by default, the drawer opens temporarily above all other content until a section is selected.</p>
                    <p><strong>Recommended for</strong><strong>:</strong><br> Tablet </p>
                    <p><strong>Required for:</strong><br> Mobile</p>
                    <h2><strong> </strong></h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/navigation-drawer/patterns_navdrawer_behavior_temporary1.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a closed temporary drawer on mobile </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/navigation-drawer/patterns_navdrawer_behavior_temporary2.png"/>
                      </div>
                      <figcaption>
                        <p>Example of an open temporary drawer on mobile </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>The mini variant is also an acceptable closed state for a temporary navigation drawer.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/navigation-drawer/patterns_navdrawer_behavior_temporary3.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a closed temporary drawer on tablet</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/navigation-drawer/patterns_navdrawer_behavior_temporary4.png"/>
                      </div>
                      <figcaption>
                        <p>Example of an open temporary drawer on tablet </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/navigation-drawer/patterns_navdrawer_behavior_temporary5.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a closed temporary drawer on desktop</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/navigation-drawer/patterns_navdrawer_behavior_temporary6.png"/>
                      </div>
                      <figcaption>
                        <p>Example of an open temporary drawer on desktop</p>
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

<?php
include $public_files['footer'];
?>