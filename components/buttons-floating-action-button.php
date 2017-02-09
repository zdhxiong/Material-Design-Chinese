<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <p>A floating action button represents the primary action in an application.</p>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>A floating action button is used for a promoted action. </p>
                <p>Shaped like a circled icon floating above the UI, it changes color upon focus and lifts upon selection. When pressed, it may contain more related actions.</p>
              </div>
              <div class="module">
                <h3><strong>Usage</strong></h3>
                <p>Only one floating action button is recommended per screen to represent the most common action.</p>

                <h3><strong>Behavior</strong></h3>
                <p>It animates onto the screen as an expanding piece of material, by default. </p>

                <h3><strong>Sizes </strong></h3>
                <p>Default: 56 x 56dp<br>
                  Mini: 40 x 40dp</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/components/buttons-floating-action-button/components_buttons_fab.png"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="buttons-floating-action-button.html#buttons-floating-action-button-floating-action-button" data-qp-ui-data-id="qp:1">Floating action button</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="buttons-floating-action-button.html#buttons-floating-action-button-behavior" data-qp-ui-data-id="qp:2">Behavior</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="buttons-floating-action-button.html#buttons-floating-action-button-transitions" data-qp-ui-data-id="qp:3">Transitions</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="buttons-floating-action-button.html#buttons-floating-action-button-large-screens" data-qp-ui-data-id="qp:4">Large Screens</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="buttons-floating-action-button-floating-action-button" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            Floating action button
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
                    <h1>Floating action button</h1>
                    <p>Floating action buttons are used for a promoted action. They are distinguished by a circled icon floating above the UI and have motion behaviors that include morphing, launching, and a transferring anchor point.</p>
                    <p>Floating action buttons come in two sizes: </p>
                    <ul class="lst-kix_spyoufbi7tcu-0 start">
                      <li>Default size: For most use cases</li>
                      <li>Mini size: Only used to create visual continuity with other screen elements</li>
                    </ul>
                    <p>The button size should change from the default (56dp) to the mini size (40dp) when the screen width is 460dp or less.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons-floating-action-button/patterns_actions_fab1.png"/>
                      </div>
                      <figcaption>
                        <p>Floating action button</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons-floating-action-button/patterns_actions_fab2.png"/>
                      </div>
                      <figcaption>
                        <p>Mini floating action button</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>The floating action button should be placed 16dp minimum from the edge on mobile and 24dp minimum on tablet/desktop. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons-floating-action-button/patterns_actions_fab3.png"/>
                      </div>
                      <figcaption>
                        <p>Floating action button </p>
                        <p>Interior icon: 24 x 24dp<br>
                          Floating action button circle: 56 x 56dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons-floating-action-button/patterns_actions_fab4.png"/>
                      </div>
                      <figcaption>
                        <p>Mini floating action button</p>
                        <p>Interior icon: 24 x 24dp<br>
                          Floating action button circle: 40 x 40dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>The floating action button changes color on focus and lifts upon being selected.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab_01_xhdpi_002.webm" type="video/webm">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab_01_xhdpi_002.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Floating action button gaining focus </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab_02_xhdpi_002.webm" type="video/webm">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab_02_xhdpi_002.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Floating action button being selected</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>Not every screen needs a floating action button. A floating action button represents the primary action in an application. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons-floating-action-button/patterns_actions_fab_content1.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>The primary action is to touch images in a gallery, so no button is needed.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons-floating-action-button/patterns_actions_fab_content2.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>The primary action is to add files.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>Only one floating action button is recommended per screen to increase its
                    prominence. It should represent only the most common action. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons-floating-action-button/patterns_actions_fab_content3.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons-floating-action-button/patterns_actions_fab_content4.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Qualities </h1>
                    <p>Make floating action buttons positive actions like Create, Favorite, Share, Navigate, and Explore.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons-floating-action-button/patterns_actions_fab_qualities1.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Avoid using floating action buttons for minor and destructive actions, including the following:</p>
                    <ul class="lst-kix_8i3f9hl0bmlq-0 start">
                      <li>Archive or Trash</li>
                      <li>Nonspecific actions</li>
                      <li>Alerts or errors</li>
                      <li>Limited tasks like cutting text</li>
                      <li>Controls that should be in a toolbar, like volume control or changing a font color</li>
                    </ul>
                    <p>Floating action buttons don’t contain app bar icons or status bar notifications. Don’t layer badges or other elements over a floating action button.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons-floating-action-button/patterns_actions_fab_qualities2.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>Use the circle-shaped icon consistently to enforce the primary action pattern across apps.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons-floating-action-button/patterns_actions_fab_qualities5.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons-floating-action-button/patterns_actions_fab_qualities6.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>Don’t give the floating action button extra dimension. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons-floating-action-button/patterns_actions_fab_qualities7.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons-floating-action-button/patterns_actions_fab_qualities8.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="buttons-floating-action-button-behavior" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
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
                    <p>The floating action button animates onto the screen as an expanding piece of material, by default. The icon within it may be animated. </p>
                    <p>Floating action buttons may move differently than other UI elements because of their relative importance. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab-behavior_01_xhdpi_012.webm" type="video/webm">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab-behavior_01_xhdpi_012.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Examples of moving floating action buttons</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab-behavior_02_xhdpi_012.webm" type="video/webm">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab-behavior_02_xhdpi_012.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong><strong>Lateral screens</strong></strong></h2>
                    <p>A floating action button that spans multiple lateral screens (such as tabbed screens) should briefly disappear, then reappear if its action changes. </p>
                    <p>The button should stay on screen if its action remains the same across screens (and translate to a new position, if necessary.)</p>
                    <h2><strong>Lists</strong></h2>
                    <p>Lists underneath floating action buttons should have enough padding beneath them so their content isn’t blocked by the button.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab-behavior_03_xhdpi_001.webm" type="video/webm">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab-behavior_03_xhdpi_001.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab-behavior_04_xhdpi_009.webm" type="video/webm">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab-behavior_04_xhdpi_009.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong><strong>Tabbed screens</strong></strong></h2>
                    <p>On tabbed screens, the floating action button should not exit the screen in the same direction as the content. This prevents: </p>
                    <ul class="lst-kix_31k3fqgiubnr-0 start">
                      <li>Floating action buttons from appearing functional when they aren’t</li>
                      <li>The perception that the floating action button is at the same the elevation as the content</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab-behavior_05_xhdpi_009.webm" type="video/webm">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab-behavior_05_xhdpi_009.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab-behavior_06_xhdpi_009.webm" type="video/webm">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab-behavior_06_xhdpi_009.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="buttons-floating-action-button-transitions" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            Transitions
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <h1>Transitions </h1>
              <p>The floating action button is a unique example of a primary use case in an app. Take advantage of its visibility to create delightful transitions for a primary UI element. </p>
              <p>Common transitions include Trigger, Toolbar, Speed dial, and Morphing. This is not an exhaustive list. Floating action buttons are designed to be flexible. Experiment with transitions that best suit your app and the screens on which the button sits. </p>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong>Trigger </strong></h2>
                    <p>The floating action button can simply trigger an action or navigate somewhere. The animation of the touch ripple expands outwards as the force that causes changes to the UI. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_trigger_01.webm" type="video/webm">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_trigger_01.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>A floating action button can simply trigger an action.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_trigger_02.webm" type="video/webm">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_trigger_02.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>A floating action button recentering a map view</p>
                        <p>Apps typically use a single floating action button. However, this example uses two floating action buttons because they perform equally important yet distinct actions.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong>Toolbar </strong></h2>
                    <p>The floating action button can transform into a toolbar upon press or from a toolbar upon scroll. The toolbar can contain related actions, text and search fields, or any other items that would be useful at hand. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_toolbar_01.webm" type="video/webm">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_toolbar_01.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>A floating action button transforming into a toolbar</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_toolbar_02.webm" type="video/webm">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_toolbar_02.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>A floating action button transforming into a toolbar.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>A toolbar that disappears on scroll is particularly useful for screens where the full toolbar is needed upon initial entry or while at the top or bottom of a long list. This saves screen real estate when the user has signaled through scrolling that they’re interested in looking at the main content. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_scrolltoolbar_01.webm" type="video/webm">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_scrolltoolbar_01.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>A toolbar transforming into a floating action button upon scroll</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_scrolltoolbar_02.webm" type="video/webm">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_scrolltoolbar_02.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>A toolbar transforming into a floating action button upon scroll</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>If a floating action button morphs into a toolbar, that toolbar should contain related actions. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons-floating-action-button/patterns_actions_fab_actions10.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>In this example, the button lets the user select the media type to add.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons-floating-action-button/patterns_actions_fab_actions12.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>Don’t include unrelated or confusing actions.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong>Speed dial </strong></h2>
                    <p>The floating action button can fling out related actions upon press. The button should remain on screen after the menu is invoked. Tapping in the same spot should either activate the most commonly used action or close the open menu. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_speeddial_01.webm" type="video/webm">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_speeddial_01.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>A floating action button flinging out related actions</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_speeddial_02.webm" type="video/webm">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_speeddial_02.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>A floating action button flinging out related actions</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>The floating action button can transform into a single sheet of material which contains all the actions. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_card_01.webm" type="video/webm">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_card_01.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>A floating action button transforming into a single sheet of material</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_card_02.webm" type="video/webm">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_card_02.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>A floating action button transforming into a single sheet of material</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>As a general rule, have at least three options upon press but not more than six, including the original floating action button target. If you have two options – i.e. your floating action button only flings out one other choice – choose which action is most important. If you have more than six, users may have trouble reaching the furthest option. </p>
                    <p>Reduce decision fatigue by giving users the best, most distinct, and fewest options. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons-floating-action-button/components_fab_flyouts_dont1.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>A floating action button should fling out at least three options.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons-floating-action-button/components_fab_flyouts_dont2.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>A floating action button should fling out no more than six options.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>Don’t put overflow menus in the floating action button actions. There should be at most two taps from the initial screen to get to the intended destination. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons-floating-action-button/components_fab_flyouts_do.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>Options should be specific destinations.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons-floating-action-button/components_fab_flyouts_dont4.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>Options should not include an overflow menu.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>Put overflow actions in the overflow menu in toolbars, not in floating action buttons.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons-floating-action-button/patterns_actions_fab_actions1.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>Overflow menus belong in toolbars.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons-floating-action-button/patterns_actions_fab_actions2.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>Overflow menus belong in toolbars.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons-floating-action-button/patterns_actions_fab_actions3.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>Floating action button are not overflow menus.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons-floating-action-button/patterns_actions_fab_actions4.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>Floating action buttons are not overflow menus.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>If the hallmark of the app is adding file types, a floating action button can transform into related actions after it is first touched. However, if the actions that appear are unrelated to the button, place the actions into an overflow menu.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons-floating-action-button/patterns_actions_fab_actions6.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>A floating action button can transform into related actions.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons-floating-action-button/patterns_actions_fab_actions8.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>A floating action button should not transform into unrelated actions.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>A floating action button can contain a list of contacts. The list shouldn’t contain unrelated actions. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons-floating-action-button/patterns_actions_fab_actions14.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>A floating action button can transform into a list of contacts.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons-floating-action-button/patterns_actions_fab_actions16.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>A floating action button should not transform into unrelated actions.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong>Morph </strong></h2>
                    <p>The floating action button can transform into sheets of material that are part of the app structure. This dramatic transformation accentuates the action the button enables. </p>
                    <p>When morphing the floating action button, transition between starting and ending positions in a logical way. For example, do not pass through other sheets of material.</p>
                    <p>The morph animation should be reversible and transform the new sheet of material back into the floating action button. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_morph_01.webm" type="video/webm">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_morph_01.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>A floating action button can morph into a sheet of material that is part of the app structure.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_morph_02.webm" type="video/webm">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_morph_02.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>A floating action button can morph into a sheet of material that is part of the app structure.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong>Full screen</strong></h2>
                    <p>The floating action button can transform into a new sheet of material that spans the entire screen.</p>
                    <p>This type of dramatic transformation is typically associated with creating new content. As a result, it does not tend to have an method of undoing the transformation or a reversible animation.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_fullscreen_01.webm" type="video/webm">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_fullscreen_01.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>The floating action button can transform into a new sheet of material that spans the entire screen.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_fullscreen_02.webm" type="video/webm">
                            <source src="../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_fullscreen_02.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>The floating action button can transform into a new sheet of material that spans the entire screen.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="buttons-floating-action-button-large-screens" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }"  data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            Large Screens
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
                    <h2><strong>Large screens</strong></h2>
                    <p>A floating action button can attach to an extended app bar.</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons-floating-action-button/patterns_actions_fab_placement7.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>A floating action button can be attached to a toolbar or structural element within a sheet (as long as it’s not blocking other elements).</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons-floating-action-button/patterns_actions_fab_placement8.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>A floating action button can be attached to the edge of a sheet.</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons-floating-action-button/patterns_actions_fab_placement9.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Don’t have more than one floating action button per screen.</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons-floating-action-button/patterns_actions_fab_placement10.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Don’t associate floating action buttons with every element on a screen.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons-floating-action-button/patterns_actions_fab_placement12.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-module col-2">
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