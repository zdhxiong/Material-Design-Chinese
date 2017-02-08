<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>Material in motion is responsive and natural. Use these easing curves and duration patterns to create smooth and consistent motion.</p>
              </div>
              <div class="module">
                <h3>Easing curves</h3>
                <p>Standard curve<br>
                  Deceleration curve<br>
                  Acceleration curve<br>
                  Sharp curve</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/motion/duration-easing/01-duration-and-easing.png"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="duration-easing.html#duration-easing-speed" data-qp-ui-data-id="qp:1">Speed</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="duration-easing.html#duration-easing-dynamic-durations" data-qp-ui-data-id="qp:2">Dynamic durations</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="duration-easing.html#duration-easing-common-durations" data-qp-ui-data-id="qp:3">Common durations</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="duration-easing.html#duration-easing-natural-easing-curves" data-qp-ui-data-id="qp:4">Natural easing curves</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="duration-easing-speed" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            Speed
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
                    <p>When elements move between positions or states, the movement should be fast enough that it doesn't cause waiting, but slow enough that the transition can be understood. Keep transitions short as users will see them frequently.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/duration-easing/QuickResponse_01_QuickDo_v2.webm" type="video/webm">
                            <source src="../static/media/motion/duration-easing/QuickResponse_01_QuickDo_v2.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do">Do.</p>
                        <p>Animate quickly so that the user doesn’t have to wait for the animation to finish.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/duration-easing/QuickResponse_01_QuickDont_v3.webm" type="video/webm">
                            <source src="../static/media/motion/duration-easing/QuickResponse_01_QuickDont_v3.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont">Don't.</p>
                        <p>Don’t animate slowly as it creates unnecessary lag.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="duration-easing-dynamic-durations" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Dynamic durations
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
                    <p>Rather than using a single duration for all animations, adjust each duration to accommodate the distance travelled, an element's velocity, and surface changes.</p>
                    <p><a href="movement.html#movement-movement-in-out-of-screen-bounds">Objects leaving the screen</a> may have shorter durations, as they require less attention.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/duration-easing/DynamicDurations_01_LongDistance-v2.webm" type="video/webm">
                            <source src="../static/media/motion/duration-easing/DynamicDurations_01_LongDistance-v2.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Use longer durations when objects need to travel large distances or have dramatic changes in surface area.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/duration-easing/DynamicDurations_02_ShortDistance-v2.webm" type="video/webm">
                            <source src="../static/media/motion/duration-easing/DynamicDurations_02_ShortDistance-v2.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Use shorter durations when objects travel short distances or have minor changes in surface area, so that the movement doesn't appear too slow.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="duration-easing-common-durations" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            Common durations
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
                  <div class="module"><h2>Mobile </h2>
                    <p>Transitions on mobile typically occur over 300ms, within this margin of variance: </p>
                    <ul class="lst-kix_j29t0uw7155t-0 start">
                      <li>Large, complex, full-screen transitions may have longer durations, occurring over 375ms</li>
                      <li>Elements entering the screen occur over 225ms</li>
                      <li>Elements leaving the screen occur over 195ms</li>
                    </ul>
                    <p>Transitions that exceed 400ms may feel too slow.</p>
                    <h2>Larger screens</h2>
                    <p>Elements travelling longer distances on larger screens have higher peak velocities than those going shorter distances over the same time period. Larger screens should have longer durations so that movements aren't too fast. </p>
                    <h2>Tablets</h2>
                    <p>Durations on tablet should be about 30% longer than on mobile. For example, a 300ms mobile duration would increase to 390ms on tablet.</p>
                    <h2>Wearables</h2>
                    <p>Durations on wearables should be about 30% shorter than those on mobile. For example, a 300ms mobile duration would be 210ms on wearables.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/duration-easing/CommonDurations_01_3Devices_v1.webm" type="video/webm">
                            <source src="../static/media/motion/duration-easing/CommonDurations_01_3Devices_v1.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Because material must move greater distances on larger devices, transitions may have slightly slower durations than on smaller devices.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h2>Desktop</h2>
                    <p>Desktop animations should be faster and simpler than their mobile counterparts. These animations should last 150ms to 200ms.</p>
                    <p>Because desktop transitions may be less noticeable, they should be immediately responsive and faster than their mobile counterparts.</p>
                    <p>Complex web transitions often result in dropped frames (unless they are built for GPU acceleration). Shorter durations will make these less noticeable because the animation completes faster.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/duration-easing/CommonDurations_02_Desktop_v1.webm" type="video/webm">
                            <source src="../static/media/motion/duration-easing/CommonDurations_02_Desktop_v1.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Transitions appear much faster on desktop. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="duration-easing-natural-easing-curves" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            Natural easing curves
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>These natural easing curves affect an element’s speed, opacity, and scale.</p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Acceleration and deceleration changes should be smooth across the duration of an animation so that movement doesn't appear mechanical.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/duration-easing/NaturalEasing_01_CurveNoCurve_v1.webm" type="video/webm">
                            <source src="../static/media/motion/duration-easing/NaturalEasing_01_CurveNoCurve_v1.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Motion appears more natural and delightful when acceleration and deceleration occur asymmetrically. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/duration-easing/NaturalEasing_00_AsymetricCurve_v1.webm" type="video/webm">
                            <source src="../static/media/motion/duration-easing/NaturalEasing_00_AsymetricCurve_v1.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module col-1">
                  <div class="module"><h1>Easing curves</h1>
                    <p>Easing curves may be named differently depending on the platform or software used. These guidelines will refer to them as standard, deceleration, acceleration, and sharp curves.</p>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Standard curve</h1>
                    <p>The standard curve (also referred to as “ease in out”) is the most common easing curve. Elements quickly accelerate and slowly decelerate between on-screen locations. It applies to growing and shrinking material, among other property changes.</p>
                    <p>See more in <a href="movement.html#movement-movement-within-screen-bounds">Movement within screen bounds</a>.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/duration-easing/NaturalEasing_02_StandardCurve_v1.webm" type="video/webm">
                            <source src="../static/media/motion/duration-easing/NaturalEasing_02_StandardCurve_v1.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-module col-2">
                  <div class="module"></div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Platform</p></td>
                        <td colspan="1" rowspan="1"><p>Protocol</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Android</p></td>
                        <td colspan="1" rowspan="1"><p>FastOutSlowInInterpolator</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>iOS</p></td>
                        <td colspan="1" rowspan="1">
                          <p>[[CAMediaTimingFunction alloc]
                          initWithControlPoints:0.4f:0.0f:0.2f:1.0f]</p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>CSS</p></td>
                        <td colspan="1" rowspan="1"><p>cubic-bezier(0.4, 0.0, 0.2, 1);</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>After Effects</p></td>
                        <td colspan="1" rowspan="1">
                          <p>Outgoing Velocity: 40%<br>
                          Incoming Velocity: 80%</p>
                        </td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Deceleration curve </h1>
                    <p>Using the deceleration curve (also referred to as “ease out”) elements enter the screen at full velocity and slowly decelerate to a resting point. </p>
                    <p>During deceleration, elements may scale up either in size (to 100%) or opacity (to 100%). In some cases, when elements enter the screen at 0% opacity, they may slightly shrink from a larger size upon entry.</p>
                    <p>See more in <a href="movement.html#movement-movement-in-out-of-screen-bounds">Movement in and out of screen bounds</a>.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/duration-easing/NaturalEasing_03_DecelerationCurve_v1.webm" type="video/webm">
                            <source src="../static/media/motion/duration-easing/NaturalEasing_03_DecelerationCurve_v1.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-module col-2">
                  <div class="module"></div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Platform</p></td>
                        <td colspan="1" rowspan="1"><p>Protocol</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Android</p></td>
                        <td colspan="1" rowspan="1"><p>LinearOutSlowInInterpolator</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>iOS</p></td>
                        <td colspan="1" rowspan="1"><p> [[CAMediaTimingFunction alloc] initWithControlPoints:0.0f:0.0f:0.2f:1.0f]</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>CSS</p></td>
                        <td colspan="1" rowspan="1"><p>cubic-bezier(0.0, 0.0, 0.2, 1);</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>After Effects</p></td>
                        <td colspan="1" rowspan="1"><p>Outgoing Velocity: 0%<br> Incoming Velocity: 80%</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Acceleration curve</h1>
                    <p>Using the acceleration curve (also referred to as “ease in”) elements leave the screen at full velocity. They do not decelerate when off-screen. </p>
                    <p>They accelerate at the beginning of the animation and may scale down in either size (to 0%) or opacity (to 0%). In some cases, when elements leave the screen at 0% opacity, they may also slightly scale up or down in size. </p>
                    <p>See more in <a href="movement.html#movement-movement-in-out-of-screen-bounds">Movement in and out of screen bounds</a>.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/duration-easing/NaturalEasing_04_AccelerationCurve_v1.webm" type="video/webm">
                            <source src="../static/media/motion/duration-easing/NaturalEasing_04_AccelerationCurve_v1.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-module col-2">
                  <div class="module"></div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Platform</p></td>
                        <td colspan="1" rowspan="1"><p>Protocol</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Android</p></td>
                        <td colspan="1" rowspan="1"><p>FastOutLinearInInterpolator</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>iOS</p></td>
                        <td colspan="1" rowspan="1"><p>[CAMediaTimingFunction alloc] initWithControlPoints:0.4f:0.0f:1.0f:1.0f]<br></p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>CSS</p></td>
                        <td colspan="1" rowspan="1"><p>cubic-bezier(0.4, 0.0, 1, 1);<br>
                        </p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>After Effects</p></td>
                        <td colspan="1" rowspan="1"><p>Outgoing Velocity: 40%<br> Incoming Velocity: 0%</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"><h1>Sharp curve<br>
                  </h1>
                    <p>Using the sharp curve (also referred to as “ease in out”) elements quickly accelerate and decelerate. It is used by exiting elements that may return to the screen at any time. </p>
                    <p>Elements may quickly accelerate from a starting point on-screen, then quickly decelerate in a symmetrical curve to a resting point immediately off-screen. The deceleration is faster than the standard curve since it doesn't follow an exact path to the off-screen point. Elements may return from that point at any time.</p>
                    <p>See more in <a href="movement.html#movement-movement-in-out-of-screen-bounds">Movement in and out of screen bounds</a>.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/duration-easing/NaturalEasing_05_SharpCurve_v1.webm" type="video/webm">
                            <source src="../static/media/motion/duration-easing/NaturalEasing_05_SharpCurve_v1.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-module col-2">
                  <div class="module"></div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Platform</p></td>
                        <td colspan="1" rowspan="1"><p>Protocol</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Android</p></td>
                        <td colspan="1" rowspan="1"><p>-</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>iOS </p></td>
                        <td colspan="1" rowspan="1"><p>-</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>CSS</p></td>
                        <td colspan="1" rowspan="1"><p>cubic-bezier(0.4, 0.0, 0.6, 1);</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>After Effects</p></td>
                        <td colspan="1" rowspan="1"><p>Outgoing Velocity: 40%<br> Incoming Velocity: 40%</p></td>
                      </tr>
                      </tbody>
                    </table>
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