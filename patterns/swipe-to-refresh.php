<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>Swipe to refresh manually refreshes screen content with a user action or gesture. </h1>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>There are two methods for updating content in an app: </p>
                <ul class="lst-kix_8pwwe96a23b7-0 start">
                  <li>The preferred method is to automatically update content using <strong><a href="https://www.google.com/url?q=http://developer.android.com/training/sync-adapters/index.html&amp;sa=D&amp;ust=1481818005683000&amp;usg=AFQjCNF0OM5OiZA7B0ZN7-y9JUf28ocN5g" target="_blank">sync</a></strong>, which keeps app content automatically updated.</li>
                  <li><strong>Swipe to refresh</strong> is a <a href="gestures.html#gestures-gestures">swipe gesture</a>available at the beginning of lists, grid lists, and card collections that are sorted by recentcontent.</li>
                </ul>
                <p>Manual refreshing can supplement syncing. It maintains the current scroll position, as when checking for new mail in Gmail.</p>
              </div>
              <div class="module">
                <h3><strong>Icon</strong></h3>
                <p>The refresh indicator is represented by a <strong>circular spinner</strong><strong>, </strong>an icon with a curved arrow that spins in a circular motion.</p>
                <h3><strong>Position</strong></h3>
                <ul class="lst-kix_r9d565ze57w6-0 start">
                  <li>The <strong>swipe to refresh gesture</strong> is available at the top or bottom of content collections.</li>
                  <li>The <strong>refresh indicator’s</strong> resting position is centered horizontally relative to refreshing content.</li>
                </ul>
                <h3><strong>Threshold</strong></h3>
                <p>The refresh indicator must pass a threshold before an app refreshes, as indicated by the circular spinner’s opacity, speed, and translation changes.<br></p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="<?php static_url('../static/media/patterns/swipe-to-refresh/patterns_swipe_to_refresh.png'); ?>"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="swipe-to-refresh.html#swipe-to-refresh-usage" data-qp-ui-data-id="qp:1">Usage</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="swipe-to-refresh.html#swipe-to-refresh-positioning" data-qp-ui-data-id="qp:2">Positioning</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="swipe-to-refresh.html#swipe-to-refresh-behavior" data-qp-ui-data-id="qp:3">Behavior</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="swipe-to-refresh-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
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
              <p>Swipe to refresh is a <a href="gestures.html#gestures-gestures">swipe gesture</a> available at the beginning of lists, grid lists, and card collections where the most recent content appears (Index 0). </p>
              <p>It’s best to use this gesture with dynamic content that has frequent updates surfacing from a consistent location, where users have a high probability of seeing new content after initiating the gesture. </p>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h1>Refresh indicator</h1>
                    <p>The refresh indicator appears only in conjunction with a refresh gesture or action. Syncing does not display a refresh indicator. </p>
                    <p><strong>Effects</strong></p>
                    <p>Changes may not be immediately obvious to users when this gesture is used in views that can change significantly upon refresh. For example, the refresh may non-sequentially delete, reorder, modify, and insert items or change only off-screen items.</p>
                    <div class="modulettes">
                      <a class="modulette container android" href="https://www.google.com/url?q=https://developer.android.com/reference/android/support/v4/widget/SwipeRefreshLayout.html&amp;sa=D&amp;ust=1481818005820000&amp;usg=AFQjCNFmsKLzRMsBHOQ8FvmJkvq9uAyz4A" target="_blank">
                        <img alt="" class="icon callout-icon" src="<?php static_url('../static/images/callouts/android.svg'); ?>">
                        <div class="info">
                          <div class="title">Swipe to refresh layout</div>
                          <span class="subtitle">Refresh the contents of a view via a vertical swipe gesture</span>
                        </div>
                        </img>
                      </a>
                    </div>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/patterns/swipe-to-refresh/components-progressactivity-behavior_Loading_SwipeDown_noload_xhdpi_005.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/patterns/swipe-to-refresh/components-progressactivity-behavior_Loading_SwipeDown_noload_xhdpi_005.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Animation showing swipe to refresh</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>Swipe to refresh should not be used in the following situations:</p>
                    <ul class="lst-kix_ts8d536vx62i-0 start">
                      <li>Navigation drawers</li>
                      <li>Home screen widgets</li>
                      <li>Pannable content</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/swipe-to-refresh/patterns_swipetorefresh_dont1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>Navigation drawers (if present in an app) contain navigation destinations, not dynamic content.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/swipe-to-refresh/patterns_swipetorefresh_dont2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>Home screen widgets should update content automatically.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/swipe-to-refresh/patterns_swipetorefresh_dont3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>Pannable content, like in maps, have no primary direction or content origin from which users can presume the swipe to refresh gesture will originate.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="swipe-to-refresh-positioning" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Positioning
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div><h1>Gesture positioning</h1>
              <p>Typically, this gesture is available at the top of content collections, but it can also be at the bottom (for example, in chat applications). </p>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Refresh indicator resting position</h1>
                    <p>The refresh indicator, when resting, is centered horizontally relative to refreshing content.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/swipe-to-refresh/patterns_swipetorefresh_position1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/swipe-to-refresh/patterns_swipetorefresh_position2.png'); ?>"/>
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
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/swipe-to-refresh/patterns_swipetorefresh_position3.png'); ?>"/>
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
                    <h1>Refresh indicator active position</h1>
                    <p>The refresh indicator is located near the top of refreshing content.</p>
                    <p>Its exact vertical resting position can be adjusted to promote visual harmony with the underlying layout. For example, the indicator may fall on a material edge or grid line, as long as it’s located near the top of the refreshing content.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/swipe-to-refresh/patterns_swipetorefresh_position4.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/swipe-to-refresh/patterns_swipetorefresh_position5.png'); ?>"/>
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

        <div id="swipe-to-refresh-behavior" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
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
              <p><strong> </strong></p>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>As the refresh indicator translates and/or scales into view, the circular spinner fades in while rotating.</p>
                    <p>The refresh indicator remains visible until the refresh activity completes and any new content is visible, or the user navigates away from the refreshing content.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/patterns/swipe-to-refresh/patterns-swipetorefresh-behavior_do_xhdpi_009.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/patterns/swipe-to-refresh/patterns-swipetorefresh-behavior_do_xhdpi_009.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>Keeping the refresh indicator in view until the activity is completed provides feedback on the status of the refresh activity.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/patterns/swipe-to-refresh/patterns-swipetorefresh-behavior_dont_xhdpi_009.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/patterns/swipe-to-refresh/patterns-swipetorefresh-behavior_dont_xhdpi_009.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>Scrolling the refresh indicator off-screen hides the status of the refresh activity and may imply that the refresh activity is associated with a specific component within the view, such as a card, instead of the entire view.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Refresh indicator transitions</h1>
                    <p>When another surface is in front of the material with refreshing content, the refresh indicator translates from underneath that surface and is clipped until it is fully visible.</p>
                    <p>The refresh indicator increases in size as it translates when: </p>
                    <ul class="lst-kix_t6itoy50lxht-0 start">
                      <li>The refreshing material is at a higher elevation than all other surfaces</li>
                      <li>A content refresh is initiated via an app bar or overflow menu action</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/patterns/swipe-to-refresh/patterns-swipetorefresh-zspace_refresh_xhdpi_007.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/patterns/swipe-to-refresh/patterns-swipetorefresh-zspace_refresh_xhdpi_007.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Refreshing content that is at a higher elevation than other surfaces</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="figure-figure-figure col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/patterns/swipe-to-refresh/patterns-swipetorefresh-coplanar_refresh_xhdpi_008.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/patterns/swipe-to-refresh/patterns-swipetorefresh-coplanar_refresh_xhdpi_008.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Refreshing content that is coplanar with another surface</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/patterns/swipe-to-refresh/patterns-swipetorefresh-zspace_refresh_mobile_xhdpi_002.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/patterns/swipe-to-refresh/patterns-swipetorefresh-zspace_refresh_mobile_xhdpi_002.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Refreshing content that is below another surface in z-space</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/patterns/swipe-to-refresh/patterns_swipetorefresh-appbar_refresh_xhdpi_007.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/patterns/swipe-to-refresh/patterns_swipetorefresh-appbar_refresh_xhdpi_007.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Refreshing content via app bar action</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module col-1">
                  <div class="module">
                    <h1>Threshold requirements</h1>
                    <p>To ensure intentional usage of the swipe to refresh gesture, the refresh indicator must pass a threshold before the app will refresh. This threshold is indicated by a number of cues: </p>
                    <ul class="lst-kix_b56pwaaxef79-0 start">
                      <li>The circular spinner reaches 100% opacity.</li>
                      <li>The rotation of the circular spinner slows down.</li>
                      <li>The rate of translation of the refresh indicator slows down.</li>
                    </ul>
                    <p>After passing the threshold, completing the gesture will initiate a refresh.</p>
                    <p>Reversing the gesture past the threshold will cancel the refresh action.</p>
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