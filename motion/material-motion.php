<?php
$vars = array(
  'title' => 'Material motion',
  'category' => '动效',
  'theme_color' => '#8E24AA',
  'color_name' => 'purple',
  'prev_title' => 'What’s new',
  'prev_path' => 'material-design/whats-new',
  'next_title' => 'Duration &amp; easing',
  'next_path' => 'motion/duration-easing'
);

include $public_files['header'];
?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title">Material motion</h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>Motion in the world of material design is used to describe spatial relationships, functionality, and intention with beauty and fluidity.</h1>
          <div class="col-list">
            <section class="figure col-1">
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                      <video controls="" loop="" preload="metadata">
                        <source src="../static/media/motion/material-motion/MaterialMotionHero_Spec_0505.webm" type="video/webm">
                        <source src="../static/media/motion/material-motion/MaterialMotionHero_Spec_0505.mp4" type="video/mp4">
                        </source></source>
                      </video>
                    </div>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="../animation/authentic-motion.html#material-motion-why-does-motion-matter" data-qp-ui-data-id="qp:1">Why does motion matter?</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="../animation/authentic-motion.html#material-motion-how-does-material-move" data-qp-ui-data-id="qp:2">How does material move?</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="../animation/authentic-motion.html#material-motion-what-makes-a-good-transition" data-qp-ui-data-id="qp:3">What makes a good transition?</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="../animation/authentic-motion.html#material-motion-implications-of-motion" data-qp-ui-data-id="qp:4">Implications of motion</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="material-motion-why-does-motion-matter" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            Why does motion matter?
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div><p>Motion shows how an app is organized and what it can do. </p>
              <p>Motion provides: </p>
              <ul class="lst-kix_so1jjix4kui4-0 start">
                <li>Guided focus between views</li>
                <li>Hints at what will happen if a user completes a gesture</li>
                <li>Hierarchical and spatial relationships between elements</li>
                <li>Distraction from what’s happening behind the scenes (like fetching content or loading the next view)</li>
                <li>Character, polish, and delight</li>
              </ul>
              <h4 class="related">Related</h4>
              <div class="modulettes">
                <a class="modulette container gd" href="https://www.google.com/url?q=https://design.google.com/articles/making-motion-meaningful/&amp;sa=D&amp;ust=1481817956630000&amp;usg=AFQjCNFv-WwC2zwQq_ZcOUOgB3F1DZ_Tig" target="_blank">
                  <img alt="" class="icon callout-icon" src="../static/images/callouts/gd.svg">
                  <div class="info">
                    <div class="title">Making Motion Meaningful</div>
                    <span class="subtitle">Motion designers from around Google share some of their most moving product features.</span>
                  </div>
                  </img>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div id="material-motion-how-does-material-move" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            How does material move?
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>The material environment draws inspiration from real-world forces, such as gravity and friction. These forces are reflected in the way user input affects elements on screen and how elements react to each other.</p>
              <p>Material in motion has the following characteristics:</p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module"><h2><strong><strong>Responsive</strong></strong></h2>
                    <p>Material is full of energy. It quickly responds to user input precisely where the user triggers it.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/material-motion/Responsive_01_Durations-v1.webm" type="video/webm">
                            <source src="../static/media/motion/material-motion/Responsive_01_Durations-v1.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Larger animations on mobile devices are 300-400ms long. Smaller animations can be as short as 150-200ms. Animations longer or shorter than these can feel sluggish or difficult to follow.</p>
                        <p>See more in <a href="duration-easing.html#duration-easing-common-durations">Common Durations</a>.</p>
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
                            <source src="../static/media/motion/material-motion/Responsive_02_Feedback-v2.webm" type="video/webm">
                            <source src="../static/media/motion/material-motion/Responsive_02_Feedback-v2.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Ink ripples confirm user input by immediately expanding outward from the point of touch. The card lifts to indicate an active state.</p>
                        <p>See more in <a href="choreography.html#choreography-radial-reaction">Radial reaction</a>.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/material-motion/Responsive_03_SurfaceConnection-v3.webm" type="video/webm">
                            <source src="../static/media/motion/material-motion/Responsive_03_SurfaceConnection-v3.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Show the connection between new surfaces and the element or action that creates them.</p>
                        <p>See more in <a href="choreography.html#choreography-creation">Creation</a>.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong><strong>Natural</strong></strong></h2>
                    <p>Material depicts natural movement inspired by forces in the real world.</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/material-motion/Natural_01_Easing-v1.webm" type="video/webm">
                            <source src="../static/media/motion/material-motion/Natural_01_Easing-v1.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>In the real world, an element’s ability to speed up or slow down quickly is affected by weight and surface friction. In a similar way, starts and stops do not occur instantaneously in material design.</p>
                        <p>See more in <a href="duration-easing.html#duration-easing-natural-easing-curves">Natural easing curves</a>.</p>
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
                            <source src="../static/media/motion/material-motion/Natural_02_Arc-v3.webm" type="video/webm">
                            <source src="../static/media/motion/material-motion/Natural_02_Arc-v3.mp4" type="video/mp4">
                            </source></source></video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Real-world forces, like gravity, inspire an element’s movement along an arc rather than in a straight line.</p>
                        <p>See more in <a href="movement.html#movement-movement-within-screen-bounds">Movement</a>.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/material-motion/Natural_03_Transform-v3.webm" type="video/webm">
                            <source src="../static/media/motion/material-motion/Natural_03_Transform-v3.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Material transformations follow an arc of movement.</p>
                        <p>See more in <a href="transforming-material.html">Transforming material</a>.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module"><h2><strong>Aware</strong></h2>
                    <p>Material is aware of its surroundings, including the user and other material around it. It can be attracted to elements and respond appropriately to user intent.</p>
                    <p>See more in <a href="choreography.html">Choreography</a>.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/material-motion/Aware_01_Choreo-v2.webm" type="video/webm">
                            <source src="../static/media/motion/material-motion/Aware_01_Choreo-v2.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>As elements transition into view, they and their surroundings are choreographed in a way that defines their relationships.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/material-motion/Aware_02_MoveAway-v2.webm" type="video/webm">
                            <source src="../static/media/motion/material-motion/Aware_02_MoveAway-v2.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Material can push other material out of the way.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/material-motion/Aware_03_Magnets-v2.webm" type="video/webm">
                            <source src="../static/media/motion/material-motion/Aware_03_Magnets-v2.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Elements may attract other elements and join with them as they approach one another.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong><strong>Intentional</strong></strong></h2>
                    <p>Material in motion guides focus to the right spot at the right time. </p>
                    <p>See more in <a href="choreography.html#choreography-continuity">Continuity</a>.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/material-motion/Intentional_01_Focus-v3.webm" type="video/webm">
                            <source src="../static/media/motion/material-motion/Intentional_01_Focus-v3.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>A transition helps guide the user to the next step of an interaction.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/material-motion/Intentional_03_Disabled-v2.webm" type="video/webm">
                            <source src="../static/media/motion/material-motion/Intentional_03_Disabled-v2.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Movement can communicate different signals, such as whether an action is unavailable.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/material-motion/Intentional_02_Ring-v3.webm" type="video/webm">
                            <source src="../static/media/motion/material-motion/Intentional_02_Ring-v3.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Animation can bring focus to elements that need user attention.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="material-motion-what-makes-a-good-transition" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            What makes a good transition?
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>Successful motion design possesses the following characteristics:</p>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong><strong>Motion is quick</strong></strong></h2>
                    <p>An interaction shouldn't keep the user waiting longer than necessary. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/material-motion/GoodTransition_QuickDo-v4.webm" type="video/webm">
                            <source src="../static/media/motion/material-motion/GoodTransition_QuickDo-v4.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do">Do.</p>
                        <p>Animate quickly so that the user never has to wait for the animation to finish.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/material-motion/GoodTransition_QuickDont-v4.webm" type="video/webm">
                            <source src="../static/media/motion/material-motion/GoodTransition_QuickDont-v4.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont">Don't.</p>
                        <p>Staggering and slowing the movement of many elements can lengthen the duration.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong><strong>Motion is clear</strong></strong></h2>
                    <p>Transitions should be clear, simple, and coherent. They should avoid doing too much at once. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/material-motion/GoodTransition_ClearDo-v3.webm" type="video/webm">
                            <source src="../static/media/motion/material-motion/GoodTransition_ClearDo-v3.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do">Do.</p>
                        <p>Maintain a clear path into the next view, even while elements are choreographed as a group.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/material-motion/GoodTransition_ClearDont-v3.webm" type="video/webm">
                            <source src="../static/media/motion/material-motion/GoodTransition_ClearDont-v3.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont">Don't.</p>
                        <p>Transitions can get confusing when multiple items need to move in different directions or cross paths.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong><strong>Motion is cohesive</strong></strong></h2>
                    <p>Material elements are unified by their speed, responsiveness, and intention. Any customizations to your app's motion experience should be consistent throughout the app.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/material-motion/GoodTransition_Cohesive-v4.webm" type="video/webm">
                            <source src="../static/media/motion/material-motion/GoodTransition_Cohesive-v4.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>While these apps have different functions, their similar animation experiences make them feel related.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="material-motion-implications-of-motion" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            Implications of motion
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
                  <div class="module"><p>The benefits of these motion patterns are observable in the following two examples, in which an app that follows these patterns is compared with an app that does not.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/material-motion/ImplicationsDo-v2.webm" type="video/webm">
                            <source src="../static/media/motion/material-motion/ImplicationsDo-v2.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do">Do.</p>
                        <p>During the transition, the user is guided to the next view. The surface transforms to communicate hierarchy. Loading occurs behind the scenes to reduce perceived latency.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/material-motion/ImplicationsDont-v2.webm" type="video/webm">
                            <source src="../static/media/motion/material-motion/ImplicationsDont-v2.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont">Don't.</p>
                        <p>It is unclear how the new view is related to the old because no transition occurs and there isn’t a clear focal point. Any sense of hierarchy isn’t communicated, and loading is more apparent by the display of a circular spinner.</p>
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