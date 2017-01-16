<?php
$vars = array(
  'title' => '手势指导',
  'category' => '增长与用户教育',
  'theme_color' => '#00bcd4',
  'color_name' => 'cyan',
  'prev_title' => 'Feature discovery',
  'prev_path' => 'growth-communications/feature-discovery',
  'next_title' => 'Accessibility',
  'next_path' => 'usability/accessibility'
);

include $public_files['header'];
?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title">Gesture education</h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <p>Gesture education helps users understand how to interact with a specific element, like a card, for the first time.</p>
        </div>
      </div>

      <nav class="chapter-toc">
        <h1>Contents</h1>
        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="gesture-education.html#gesture-education-design-patterns" data-qp-ui-data-id="qp:1">Design patterns</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="gesture-education.html#gesture-education-targeting-triggering" data-qp-ui-data-id="qp:2">Targeting and triggering</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="gesture-education.html#gesture-education-volume-frequency" data-qp-ui-data-id="qp:3">Volume and frequency</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="gesture-education.html#gesture-education-design-writing" data-qp-ui-data-id="qp:4">Design &amp; writing</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="gesture-education-design-patterns" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            Design patterns
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
                    <h1>Partial surface</h1>
                    <p>Prompt users to perform a gesture that affects a portion of the screen, such as swiping a card.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/growth-communications/gesture-education/useredu_er_gesture_partial.webm" type="video/webm">
                            <source src="../static/media/growth-communications/gesture-education/useredu_er_gesture_partial.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>“Hint motion” shows a preview of how sample cards move when performing the action marked by the gesture indicator. </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h1>Entire screen</h1>
                    <p>Prompt a user to perform a gesture that affects the entire screen, such as pinching to zoom in.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/growth-communications/gesture-education/useredu_er_gesture_full.webm" type="video/webm">
                            <source src="../static/media/growth-communications/gesture-education/useredu_er_gesture_full.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                    </figure>
                    <p>The snackbar uses text to describe the swipe action that triggers movement between tabs. The gesture indicator visualizes the action while the gesture itself is partially performed in the background using hint motion.</p>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="gesture-education-targeting-triggering" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Targeting and triggering
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>Gesture education should happen as the user needs it. It doesn’t need to be condensed into a user’s first moments with an app. It’s smart and contextual, helping users interact with an element or surface in a way they have not done so previously.</p>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <p>Whether the gesture affects only part of the screen, or the entire screen, similar targeting and triggering guidelines are used.</p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p><strong>Targeting</strong></p></td>
                        <td colspan="1" rowspan="1"><p><strong>Triggering</strong></p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                          <p>Show gesture education only to users who have not performed the gesture.</p>
                        </td>
                        <td colspan="1" rowspan="1">
                          <p>Gesture education occurs: </p>
                          <ul class="lst-kix_f9hdm96b1r19-0 start">
                            <li>During the first-run experience (FRE)</li>
                            <li>In later sessions, if a user has not performed the gesture</li>
                            <li>After a major change to the UI</li>
                          </ul>
                          <p>If a certain gesture is core to the user experience, present it at a contextually relevant moment later in the first-run experience. </p>
                          <p>If a gesture is not critical to the experience, show it in a later session at a contextually relevant moment. For example, swiping the toolbar in Chrome to switch tabs.</p>
                        </td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="gesture-education-volume-frequency" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            Volume and frequency
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <h1>Volume</h1>
              <p>Limit the number of gesture education prompts displayed in your app and UI. </p>
              <p>If a gesture is critical to your user experience, display up to two prompts during the first-run experience.</p>
              <h1>Frequency</h1>
              <p>Most gesture education prompts should be shown only once.</p>
              <p>If a gesture is critical to your user experience, display it up to two times in distinct sessions.</p>
            </div>
          </div>
        </div>

        <div id="gesture-education-design-writing" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            Design &amp; writing
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
                  <div class="module"><h1>Sample UI </h1>
                    <p><strong>Design</strong><strong> </strong></p>
                    <p>The sample UI should mimic the movement of the real UI it represents. </p>
                    <p>The gesture indicator should pause then disappear once a tap gesture is detected. The gesture being taught should be the only way to dismiss the sample UI. For example, only a left or right swipe will dismiss a card describing a swipe gesture.</p>
                    <p><strong>Writing</strong></p>
                    <p>Describe the result of the gesture in short and clear text.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/growth-communications/gesture-education/useredu_er_gesture_partial.webm" type="video/webm">
                            <source src="../static/media/growth-communications/gesture-education/useredu_er_gesture_partial.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>This type of interaction may be used for a gesture that affects a portion of the screen, such as swiping a card.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h1>Sample gesture</h1>
                    <p><strong>Design </strong></p>
                    <p>Full-screen gestures should explain what the gesture will do using a snackbar. </p>
                    <p>When the user taps the screen, the page content should return to its default state, with the gesture indicator removed. Continue to display the bottom sheet until the user interacts with an element, such as tapping a button.</p>
                    <p><strong>Writing</strong></p>
                    <p>Describe the result of the gesture in short and clear text.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/growth-communications/gesture-education/useredu_er_gesture_full.webm" type="video/webm">
                            <source src="../static/media/growth-communications/gesture-education/useredu_er_gesture_full.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                    </figure>
                    <p>This type of interaction may be used for a gesture that affects the entire screen, such as pinch-to-zoom.</p>
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