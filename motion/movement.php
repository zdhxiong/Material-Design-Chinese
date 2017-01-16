<?php
$vars = array(
  'title' => 'Movement',
  'category' => '动效',
  'theme_color' => '#8E24AA',
  'color_name' => 'purple',
  'prev_title' => 'Duration &amp; easing',
  'prev_path' => 'motion/duration-easing',
  'next_title' => 'Transforming material',
  'next_path' => 'motion/transforming-material'
);

include $public_files['header'];
?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"> Movement</h1>
    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>Material in motion abides by forces similar to those of the real world, like gravity. </p>
              </div>
              <div class="module">
                <h3><strong>On-screen movement</strong></h3>
                <p>Arc upward<br>
                  Arc downward</p>
                <h3><strong>In-and-out screen movement</strong></h3>
                <p>Independent movement<br>
                  Relative movement</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/motion/movement/02-movement.png"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="movement.html#movement-movement-within-screen-bounds" data-qp-ui-data-id="qp:1">Movement within screen bounds</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="movement.html#movement-movement-in-out-of-screen-bounds" data-qp-ui-data-id="qp:2">Movement in and out of screen bounds </a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="movement-movement-within-screen-bounds" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            Movement within screen bounds
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>The movement of an element between two points within the bounds of the screen follows a natural, concave arc. All on-screen movements use the <a href="duration-easing.html#duration-easing-natural-easing-curves">standard curve</a>.</p>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Arc upward</h1>
                    <p>Rising against gravity in the real world requires effort. Elements moving upward on the screen should similarly depict effort during acceleration through a slower upward movement.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/movement/ShiftWithin_01_Upward_Do_v3.webm" type="video/webm">
                            <source src="../static/media/motion/movement/ShiftWithin_01_Upward_Do_v3.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do">Do.</p>
                        <p>When moving diagonally upward, begin with a shallow ascent and end with a steep ascent. </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/movement/ShiftWithin_02_Upward_Dont_v3.webm" type="video/webm">
                            <source src="../static/media/motion/movement/ShiftWithin_02_Upward_Dont_v3.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont">Don't.</p>
                        <p>Don’t start an element’s upward movement with a steep ascent.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Arc downward</h1>
                    <p>Falling elements in the real world are accelerated by gravity. Elements moving downward on screen should depict less effort through a faster downward movement.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/movement/ShiftWithin_03_Downward_Do_v3.webm" type="video/webm">
                            <source src="../static/media/motion/movement/ShiftWithin_03_Downward_Do_v3.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do">Do.</p>
                        <p>When moving diagonally downward, descent should begin steeply and end shallowly.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/movement/ShiftWithin_04_Downward_Dont_v3.webm" type="video/webm">
                            <source src="../static/media/motion/movement/ShiftWithin_04_Downward_Dont_v3.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont">Don't.</p>
                        <p>Don’t start an element’s downward movement with a shallow descent.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>When not to arc</h1>
                    <p>Elements moving along a single axis (either horizontally or vertically, but not both) do not follow an arc. These movements are simpler and may move at a slightly faster speed.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/movement/NoArc_01_SingleAxis_Do_v3.webm" type="video/webm">
                            <source src="../static/media/motion/movement/NoArc_01_SingleAxis_Do_v3.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do">Do.</p>
                        <p>Keep the path for single-axis movement straight.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/movement/NoArc_02_SingleAxis_Dont_v3.webm" type="video/webm">
                            <source src="../static/media/motion/movement/NoArc_02_SingleAxis_Dont_v3.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont">Don't.</p>
                        <p>Don’t apply an unnatural arc to single-axis movement.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>Elements entering and exiting the screen also move along a single axis.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/movement/NoArc_03_ShiftInOutArcDo_v3-device.webm" type="video/webm">
                            <source src="../static/media/motion/movement/NoArc_03_ShiftInOutArcDo_v3-device.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do">Do.</p>
                        <p>Linear entrances are easy to follow with a clearly defined entry point.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/movement/NoArc_04_ShiftInOutArcDont_v3-device.webm" type="video/webm">
                            <source src="../static/media/motion/movement/NoArc_04_ShiftInOutArcDont_v3-device.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont">Don't.</p>
                        <p>Don’t arc the path of an element if it is moving off-screen, as it complicates the entry point.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="movement-movement-in-out-of-screen-bounds" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Movement in and out of screen bounds
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <h1>Independent movement</h1>
              <p>Elements entering and exiting the screen are referred to as independent elements as they don't affect the position of other on-screen content.</p>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module"><h2>Entering the screen</h2>
                    <p>Elements entering the screen use the <a href="duration-easing.html#duration-easing-natural-easing-curves">deceleration curve</a> for a speedy entrance, indicating that they had been travelling at peak velocity.</p>
                    <h2>Permanently leaving the screen</h2>
                    <p>Elements <strong>permanently</strong> leaving the screen use the <a href="duration-easing.html#duration-easing-natural-easing-curves">acceleration curve</a> to speed off-screen over a slightly shorter duration, as they will not be returning and require less user focus.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/movement/InOut_01_ShiftInOutDo_v3-device.webm" type="video/webm">
                            <source src="../static/media/motion/movement/InOut_01_ShiftInOutDo_v3-device.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do">Do.</p>
                        <p>Apply the deceleration curve to items entering the screen that do not affect the position of any other elements around it. On mobile, this transition typically occurs over 225ms. Apply the acceleration curve to these same items when they permanently leave the screen. On mobile, this transition typically occurs over 195ms.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/movement/InOut_02_ShiftInOutDont_v3-device.webm" type="video/webm">
                            <source src="../static/media/motion/movement/InOut_02_ShiftInOutDont_v3-device.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont">Don't.</p>
                        <p>Don’t use the standard curve for either these cases. For entrances, slow acceleration is unnecessary as focus should be on the final resting point. For exits, slow deceleration is unnecessary as the ending point isn’t visible.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2>Temporarily leaving the screen</h2>
                    <p>Elements <strong>temporarily</strong> leaving the screen should use the <a href="duration-easing.html#duration-easing-natural-easing-curves">sharp curve</a>, as they may return to the screen at any time and should appear nearby and within reach.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/movement/InOut_03_ShiftOutTempDo_v4-device.webm" type="video/webm">
                            <source src="../static/media/motion/movement/InOut_03_ShiftOutTempDo_v4-device.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do">Do.</p>
                        <p>Apply the sharp curve to items temporarily leaving the screen that may return from the same exit point. When they return, use the deceleration curve. On mobile, this transition typically occurs over 300ms.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/movement/InOut_04_ShiftOutTempDont_v4-device.webm" type="video/webm">
                            <source src="../static/media/motion/movement/InOut_04_ShiftOutTempDont_v4-device.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont">Don't.</p>
                        <p>Apply the acceleration curve to items permanently leaving the screen, or if they are to return from a different location. If they return, use the deceleration curve.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <h1>Relative movement</h1>
              <p>Entering or exiting elements that move other on-screen elements do so along a smooth easing curve, so that they remain minimally disruptive and avoid eye-catching, dramatic movement.</p>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>The <a href="duration-easing.html#duration-easing-natural-easing-curves">standard curve</a> is used for moving elements both in and out of the bounds of the screen. This curve has a slightly longer duration compared to independent elements.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/movement/InOut_05_ShiftInOutRelativeDo_v3-device.webm" type="video/webm">
                            <source src="../static/media/motion/movement/InOut_05_ShiftInOutRelativeDo_v3-device.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do">Do.</p>
                        <p>Since the on-screen floating action button’s movement is influenced by the entering card, the standard curve is applied to the movement of both elements to maintain a smooth start and stop. On mobile, this transition typically occurs over 300ms.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/movement/InOut_06_ShiftInOutRelativeDont_v3-device.webm" type="video/webm">
                            <source src="../static/media/motion/movement/InOut_06_ShiftInOutRelativeDont_v3-device.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont">Don't.</p>
                        <p>Using deceleration and acceleration curves for the upward and downward movement cause the on-screen floating action button to abruptly start moving upward and abruptly stop moving downward. This movement is harsh and disruptive.</p>
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