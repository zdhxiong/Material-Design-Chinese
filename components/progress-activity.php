<?php
$vars = array(
  'title' => '进度和动态',
  'category' => '组件',
  'theme_color' => '#3949AB',
  'color_name' => 'indigo',
  'prev_title' => '选择器',
  'prev_path' => 'components/pickers',
  'next_title' => '选择控制器',
  'next_path' => 'components/selection-controls'
);

include $public_files['header'];
?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title">Progress &amp; activity</h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <p>Progress and activity indicators are visual indications of an app loading content.</p>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>A single visual indicator should be used to represent each type of operation. For example, a refresh operation should display either a refresh bar or an activity circle, but not both.</p>
                <p><strong>Determinate indicators</strong> display how long an operation will take. </p>
                <p><strong>Indeterminate indicators</strong> visualize an unspecified wait time.</p>
              </div>
              <div class="module">
                <h3><strong>Types</strong></h3>
                <p>Linear<br>
                  Circular</p>
                <h3><strong>Behavior</strong></h3>
                <p>Loading content in phases<br>
                  Loading additional content</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/components/progress-activity/components_progress_and_activity.png"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="progress-activity.html#progress-activity-types-of-indicators" data-qp-ui-data-id="qp:1">Types of indicators</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="progress-activity.html#progress-activity-behavior" data-qp-ui-data-id="qp:2">Behavior</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="progress-activity-types-of-indicators" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            Types of indicators
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>When indicators are<strong> determinate </strong>they<strong> </strong>indicate how long an operation will take when the percentage complete is detectable.</p>
              <p>When indicators are <strong>indeterminate </strong>they<strong> </strong>request that the user wait while something finishes when it’s not necessary to indicate how long it will take.</p>
              <p>Both linear and circular progress indicators may be either determinate or indeterminate.</p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Linear</h1>
                    <p>A linear progress indicator should always fill from 0% to 100% and never decrease in value. It should be represented by bars on the edge of a header or sheet that appear and disappear. </p>
                    <p>For <strong>multiple operations</strong> happening in sequence, use the indicator to represent the progress as a whole, and not each individual operation. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/progress-activity/components-progressactivity-typesofindicators-061101_Linear_Sheet_xhdpi_003.webm" type="video/webm">
                            <source src="../static/media/components/progress-activity/components-progressactivity-typesofindicators-061101_Linear_Sheet_xhdpi_003.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Linear progress indicators</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/progress-activity/components-progressactivity-typesofindicators-Linear_Video_xhdpi_004.webm" type="video/webm">
                            <source src="../static/media/components/progress-activity/components-progressactivity-typesofindicators-Linear_Video_xhdpi_004.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                    </figure>
                    <p>Buffering progress indicator on a video</p>
                    <p></p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/progress-activity/components-progressactivity-typesofindicators-Linear_Image_xhdpi_004.webm" type="video/webm">
                            <source src="../static/media/components/progress-activity/components-progressactivity-typesofindicators-Linear_Image_xhdpi_004.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Query indicator on a webpage</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Circular</h1></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/progress-activity/061101_Circular_Sheet_xhdpi_005.webm" type="video/webm">
                            <source src="../static/media/components/progress-activity/061101_Circular_Sheet_xhdpi_005.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Circular indeterminate and determinate progress indicators</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong><strong>Circular with integration</strong></strong></h2></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/progress-activity/components-progressactivity-typesofindicators-061101_Circular_Aspirational_xhdpi_002.webm" type="video/webm">
                            <source src="../static/media/components/progress-activity/components-progressactivity-typesofindicators-061101_Circular_Aspirational_xhdpi_002.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>A circular loader may be integrated with a floating action button. </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/progress-activity/components-progressactivity-typesofindicators-Circular_wFab_xhdpi_003.webm" type="video/webm">
                            <source src="../static/media/components/progress-activity/components-progressactivity-typesofindicators-Circular_wFab_xhdpi_003.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Animation of a circular loader with integration</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="progress-activity-behavior" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
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
                    <p>Loading in phases</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/progress-activity/components-progressactivity-behavior_Loading_SwipeDown_xhdpi_005-.webm" type="video/webm">
                            <source src="../static/media/components/progress-activity/components-progressactivity-behavior_Loading_SwipeDown_xhdpi_005-.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                    </figure>
                    <p>
                      <figcaption>One-phased loads</figcaption>
                    </p>
                    <p>Ink (copy and images) loads within an existing, unchanging container. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/progress-activity/components-progressactivity-behavior-Loading_Photos_xhdpi_004.webm" type="video/webm">
                            <source src="../static/media/components/progress-activity/components-progressactivity-behavior-Loading_Photos_xhdpi_004.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Two-phased loads</p>
                        <p>The paper container is generated, then the ink (copy and images) load within it. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/progress-activity/components-progressactivity-behavior-Loading_Files_Linear_xhdpi_003.webm" type="video/webm">
                            <source src="../static/media/components/progress-activity/components-progressactivity-behavior-Loading_Files_Linear_xhdpi_003.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Loading content for the first time</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/progress-activity/components-progressactivity-behavior-Loading_Files_Circular_xhdpi_003.webm" type="video/webm">
                            <source src="../static/media/components/progress-activity/components-progressactivity-behavior-Loading_Files_Circular_xhdpi_003.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Load and display all content at once.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module"><p><strong>Loading additional content</strong></p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/progress-activity/components-progressactivity-behavior-Loading_BigTop_xhdpi_004.webm" type="video/webm">
                            <source src="../static/media/components/progress-activity/components-progressactivity-behavior-Loading_BigTop_xhdpi_004.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Example 1: Card expansion</p>
                        <p>An indeterminate linear indicator is recommended for a card expanding on larger surfaces such as desktop.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/progress-activity/components-progressactivity-behavior-Loading_Photos_xhdpi_004.webm" type="video/webm">
                            <source src="../static/media/components/progress-activity/components-progressactivity-behavior-Loading_Photos_xhdpi_004.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Example 2: Scroll up to load more</p>
                        <p>An indeterminate circular indicator with an initial radial ink reaction is recommended when loading a list from below.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/progress-activity/components-progress-activity-behavior_Loading_SwipeDown_noload_xhdpi_005.webm" type="video/webm">
                            <source src="../static/media/components/progress-activity/components-progress-activity-behavior_Loading_SwipeDown_noload_xhdpi_005.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Example 3: Swipe down to refresh</p>
                        <p>An indeterminate circular indicator with a radial ink reaction is recommended when refreshing a list from above.</p>
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