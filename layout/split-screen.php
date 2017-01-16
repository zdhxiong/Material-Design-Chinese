<?php
$vars = array(
  'title' => 'Split screen',
  'category' => '布局',
  'theme_color' => '#AD1457',
  'color_name' => 'pink',
  'prev_title' => 'Responsive UI',
  'prev_path' => 'layout/adaptive-ui',
  'next_title' => 'Bottom navigation',
  'next_path' => 'components/bottom-navigation'
);

include $public_files['header'];
?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title">Split screen</h1>
    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h2><strong>Android only</strong></h2>
          <h1>Split-screen mode allows two activities to be visible on screen at the same time.</h1>
        </div>
      </div>


      <nav class="chapter-toc">
        <h1>Contents</h1>
        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="split-screen.html#split-screen-usage" data-qp-ui-data-id="qp:1">Usage</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="split-screen.html#split-screen-behavior" data-qp-ui-data-id="qp:2">Behavior</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="split-screen.html#split-screen-layout" data-qp-ui-data-id="qp:3">Layout</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="split-screen-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            Usage
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <h1>User interaction required</h1>
              <p>Apps are not allowed to invoke split-screen mode by themselves; the user must activate it. </p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Launching new activities</h1>
                    <p>When an app launches a new activity, it will launch within the <strong>same portion</strong> <strong>of the screen</strong> by default. Apps will be resized to fit the split-screen view as necessary (unless your app isn’t compatible with the split-screen format).</p>
                    <p>When split-screen mode is active, apps may launch new activities in the <strong>opposite portion of the screen</strong> if the following criteria are met:</p>
                    <ul class="lst-kix_fv5lrrj255tl-0 start">
                      <li>The original and new activities are related to each other and usable while in split-screen mode</li>
                      <li>The task the app helps accomplish warrants displaying two activities at once, and hiding the other app that was open</li>
                      <li>It is clear that the app will enter split-screen mode, such as with a button stating “Open in new window”</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/layout/split-screen/patterns_splitscreen_intro.png"/>
                      </div>
                      <figcaption>
                        <p>Split screen shown in portrait mode on mobile (on the left) and landscape mode on tablet (on the right)</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="split-screen-behavior" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
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
              <p>Split-screen mode remains active until the user cancels it or switches to an incompatible app. </p>
              <h1>Resizing split screen</h1>
              <p>Users may move and resize each screen in split-screen mode by dragging the divider between the two split screens. </p>
              <h1>Edge swipe gestures</h1>
              <p>When split-screen mode is active, the edge swipe gesture will likely not work as intended. Because split-screen mode relies on swiping to resize each split screen, if your app also relies on edge swipes to perform actions, then it’s possible that the swipe will either trigger screen resizing or an action in your app.</p>
              <p>To avoid this, edge swipes should not be the only way to perform actions in your app. There should be an alternative method to perform each action. </p>
              <p>For example, the <a href="../patterns/navigation-drawer.html#navigation-drawer-behavior">navigation drawer</a> enables an edge swipe to open the drawer, but it is also accessible by pressing the menu icon.</p>
            </div>
          </div>
        </div>

        <div id="split-screen-layout" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            Layout
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>To support split-screen usage, viewable content should be scaled to an appropriate size and density. </p>
              <p>Primary controls should be adapted for split-screen mode. For example, navigation tabs may be collapsed into a menu.</p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Responsive UI</h1>
                    <p>Apps in split-screen mode should elegantly adjust across device sizes and orientations. </p>
                    <p>Changing a device’s orientation should not cause the UI to change unexpectedly. For example, an app displaying a video in one of the split screens (in portrait mode) should not begin playback in full-screen mode if the device rotates to landscape mode.</p>
                    <p>Apps may use the same or different layouts for mobile and tablet:</p>
                    <ul class="lst-kix_twwe5kbnekhv-0 start">
                      <li>Apps with <strong>similar layouts</strong> for mobile and tablet may switch between the tablet and mobile UIs when the app is resized, as the transition will not be jarring.</li>
                      <li>Apps with <strong>completely different layouts</strong> for mobile and tablet should avoid using the mobile UI on tablet in split-screen mode. Instead, the existing tablet UI should be adapted to fit the smaller size to ensure that users have a consistent experience on both devices.</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/layout/split-screen/patterns_splitscreen_01_samelayout.png"/>
                      </div>
                      <figcaption>
                        <p>An app may use the same layout across mobile (left) and tablet (right).</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/layout/split-screen/patterns_splitscreen_02_differentlayout.png"/>
                      </div>
                      <figcaption>
                        <p>An app may use different layouts across mobile (left) and tablet (right).</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Design for condensed sizes</h1>
                    <p>To simplify adapting your app for the various sizes of split-screen mode, it is recommended to design for the smallest size first.</p>
                    <p>Create a layout that works at 220dp wide or tall by condensing elements or removing non-essential ones. The layout may be scaled upward from there.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/layout/split-screen/patterns_splitscreen_03_169mobile.png"/>
                      </div>
                      <figcaption>
                        <p>When the split screen is active, the aspect ratio of an app in portrait orientation is 16:9 on mobile. </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/layout/split-screen/patterns_splitscreen_04_3415tablet.png"/>
                      </div>
                      <figcaption>
                        <p>When the split screen is active, the aspect ratio of an app in portrait orientation is 34.15% on tablet.</p>
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