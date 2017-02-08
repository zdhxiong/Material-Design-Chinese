<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div><p>Steppers convey progress through numbered steps. </p>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>Steppers display progress through a sequence of logical and numbered steps. They may also be used for navigation.</p>
                <p>Steppers may display a transient feedback message after a step is saved.</p>
              </div>
              <div class="module">
                <h3><strong>Types of Steps</strong></h3>
                <p>Editable<br>
                  Non-editable<br>
                  Mobile<br>
                  Optional</p>
                <h3><strong>Types of Steppers</strong></h3>
                <p>Horizontal<br>
                  Vertical<br>
                  Linear<br>
                  Non-linear</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/components/steppers/components_steppers.png"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="steppers.html#steppers-usage" data-qp-ui-data-id="qp:1">Usage</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="steppers.html#steppers-types-of-steps" data-qp-ui-data-id="qp:2">Types of steps</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="steppers.html#steppers-types-of-steppers" data-qp-ui-data-id="qp:3">Types of steppers</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="steppers.html#steppers-specs" data-qp-ui-data-id="qp:4">Specs</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="steppers-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
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
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Steppers display progress through a sequence by breaking it up into multiple logical and numbered steps.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/steppers/components_acux_stepper_vertstep.png"/>
                      </div>
                      <figcaption>
                        <p>Steppers should be used when a field determines a subsequent field.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module"></div>
                  <div class="module">
                    <p><strong>Active stepper circle </strong></p>
                    <ul class="lst-kix_13gucfim8u15-0 start">
                      <li>24dp x 24dp</li>
                      <li>12sp Roboto Regular</li>
                      <li>Inherits primary color</li>
                      <li>Default color is Google Blue 500</li>
                    </ul>
                    <p><strong>Active step </strong></p>
                    <ul class="lst-kix_13gucfim8u15-0">
                      <li>14sp Roboto Medium</li>
                      <li>87% black</li>
                    </ul>
                    <p><strong>Connector line </strong></p>
                    <ul class="lst-kix_13gucfim8u15-0">
                      <li>1dp border</li>
                      <li>Grey 400 color value</li>
                    </ul>
                  </div>
                  <div class="module">
                    <p><strong>Inactive stepper circle</strong></p>
                    <ul class="lst-kix_13gucfim8u15-0">
                      <li>24dp x 24dp</li>
                      <li>12sp Roboto Regular</li>
                      <li>100% white</li>
                      <li>38% black</li>
                    </ul>
                    <p><strong>Inactive steps</strong></p>
                    <ul class="lst-kix_13gucfim8u15-0">
                      <li>14sp Roboto Regular</li>
                      <li>38% black</li>
                    </ul>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Avoid using steppers to break up sections in a short form, or multiple times on one page.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/steppers/components_acux_stepper_avoid.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo TRANSLATE['dont']; ?></p>
                        <p>Don’t embed steppers within steppers or use multiple steppers on one page.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="steppers-types-of-steps" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Types of steps
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
                    <h2><strong><strong>Editable steps</strong></strong></h2>
                    <p>Editable steps allow users to return later to edit a step. These are ideal for workflows that involve editing steps within a session.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/steppers/components_acux_stepper_editable.png"/>
                      </div>
                      <figcaption>
                        <p>Editable steps can be edited within a session.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong>Non-editable steps</strong></h2>
                    <p>Non-editable steps should be used when:</p>
                    <ul class="lst-kix_psvkwd8f6atv-0 start">
                      <li>Users cannot edit a step later</li>
                      <li>Step editing poses a distraction risk to form completion</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/steppers/components_acux_stepper_noneditable.png"/>
                      </div>
                      <figcaption>
                        <p>Non-editable steps cannot be edited once completed. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong><strong>Mobile steps</strong></strong></h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/steppers/components_acux_stepper_mbltypog.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Mobile step text</strong></p>
                        <p>Steps displayed at the top in text</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/steppers/components_acux_stepper_mbldots.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Mobile step dots</strong></p>
                        <p>Use dots when the number of steps isn’t large.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/steppers/components_acux_stepper_mblprgrssbr.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Mobile step progress bar</strong></p>
                        <p>Use a progress bar when there are many steps, or if there are steps that need to be inserted during the process (based on responses to earlier steps).</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong><strong>Optional steps</strong></strong></h2>
                    <p>Optional steps within a linear flow should be marked as optional.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/steppers/components_acux_stepper_optstps.png"/>
                      </div>
                      <figcaption>
                        <p>Mark optional steps in linear flows as optional.</p>
                        <p><strong>Optional steps</strong></p>
                        <ul class="lst-kix_n1qevcx668i1-0 start">
                          <li>12sp Roboto Regular</li>
                          <li>54% black</li>
                        </ul>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="steppers-types-of-steppers" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            Types of steppers
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
                  <div class="module"><h1>Horizontal steppers</h1>
                    <p>Horizontal steppers are ideal when the contents of one step depend on an earlier step. </p>
                    <p>Avoid using long step names in horizontal steppers.</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/steppers/components_acux_stepper_horizstep.png"/>
                      </div>
                      <figcaption>
                        <p>On horizontal steppers, the step name and numbers appear on a horizontal bar, which can be fixed to the top of the page when scrolling down. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h1>Vertical steppers</h1>
                    <p>Vertical steppers are designed for narrow screen sizes. They are ideal for mobile.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/steppers/components_acux_stepper_mblvertinpg.png"/>
                      </div>
                      <figcaption>
                        <p>Vertical steppers can be used in mobile as-is. Simply ensure that the contents for each step are responsive. </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Linear steppers</h1>
                    <p>Linear steppers require users to complete one step in order to move on to the next.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/steppers/components_acux_stepper_linear.png"/>
                      </div>
                      <figcaption>
                        <p>Each linear step must be completed before proceeding to the next one.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Non-linear steppers</h1>
                    <p>Non-linear steppers allow users to enter a multi-step flow at any point.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/steppers/components_acux_stepper_nonlinear.png"/>
                      </div>
                      <figcaption>
                        <p>Non-linear steps may be completed in any order.</p>
                        <p><strong>Inactive stepper circle</strong></p>
                        <ul class="lst-kix_j3o0stqjcpw-0 start">
                          <li>24dp x 24dp</li>
                          <li>12sp Roboto Regular</li>
                          <li>Text 100% white</li>
                          <li>38% black</li>
                        </ul>
                        <p><strong>Inactive steps</strong></p>
                        <ul class="lst-kix_weogx73pm4gg-0 start">
                          <li>14sp Roboto Regular</li>
                          <li>54% black</li>
                        </ul>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Alternative labels</h1>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/steppers/components_acux_stepper_altlblplcmnt.png"/>
                      </div>
                      <figcaption>
                        <p>Alternative label placement</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/steppers/components_acux_stepper_altlblplcmntoptstp.png"/>
                      </div>
                      <figcaption>
                        <p>Alternative label placement with an optional step </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Stepper feedback</h1>
                    <p>Steppers may display a transient feedback message after a step is saved. Stepper feedback should only be used if there is a long latency between steps.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/steppers/components_acux_stepper_feedback.webm" type="video/webm">
                            <source src="../static/media/components/steppers/components_acux_stepper_feedback.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>This stepper displays a transient feedback message after a step is saved.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="steppers-specs" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
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
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong><strong>Standard stepper</strong></strong></h2></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/steppers/components_acux_stepper_standard_rl.png"/>
                      </div>
                      <figcaption>
                        <p>Step height: 72dp<br>
                        Icon top, bottom, and left padding: 24dp<br>
                        Icon right padding: 8dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong><strong>Optional step</strong></strong></h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/steppers/components_acux_stepper_optstp_rl.png"/>
                      </div>
                      <figcaption>
                        <p>Step height: 72dp<br>
                        Icon left and right padding: 8dp<br>
                        Label right padding: 8dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong><strong>Multi-line error state</strong></strong></h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/steppers/components_acux_stepper_multilnerr_rl.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong>Alternative label</strong></h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/steppers/components_acux_stepper_altlblplace_rl.png"/>
                      </div>
                      <figcaption>
                        <p>Step height: 104dp</p>
                        <p>Icon left and right padding: 8dp<br>
                          Label top padding: 16dp<br>
                          Icon and label padding from edge: 24dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/steppers/components_acux_stepper_altlblplaceoptstp_rl.png"/>
                      </div>
                      <figcaption>
                        <p>Alternative label placement with optional step</p>
                        <p>Icon left and right padding: 8dp<br>
                          Step left and right padding: 16dp<br>
                          Label bottom padding: 24dp</p>
                        <p>Icon and label padding from screen edge: 24dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/steppers/components_acux_stepper_altlblplerr_rl.png"/>
                      </div>
                      <figcaption>
                        <p>Alternate label placement error state</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong><strong>Non-linear steppers</strong></strong></h2>
                    <p>Hover and pressed states</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/steppers/components_acux_stepper_hvrhoriz.png"/>
                      </div>
                      <figcaption>
                        <p>Hover</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/steppers/components_acux_stepper_hvrvert.png"/>
                      </div>
                      <figcaption>
                        <p>Hover</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/steppers/components_acux_stepper_prssdhoriz.png"/>
                      </div>
                      <figcaption>
                        <p>Pressed</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/steppers/components_acux_stepper_prssdvert.png"/>
                      </div>
                      <figcaption>
                        <p>Pressed</p>
                        <p><strong>Background</strong></p>
                        <ul class="lst-kix_w0e4wwuafr9-0 start">
                          <li>6% black</li>
                        </ul>
                        <p><strong>Stepper circle</strong></p>
                        <ul class="lst-kix_lewiviymex53-0 start">
                          <li>24dp x 24dp</li>
                          <li>12sp Roboto Regular</li>
                          <li>Text 100% white</li>
                          <li>38% black</li>
                        </ul>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong><strong>Vertical steppers</strong></strong></h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/steppers/components_acux_stepper_vertstep_rl.png"/>
                      </div>
                      <figcaption>
                        <p>Vertical stepper, with sub-steps<br>
                        Icon left padding: 24dp<br>
                        Icon alignment with label: Center vertical<br>
                        Icon top and bottom padding: 8dp<br>
                        Label top padding: 24dp<br>
                        Label bottom padding: 16dp<br>
                        Vertical space between steps: 48dp<br>
                        Button height: 48dp<br>
                        Button top padding: 16dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/steppers/components_acux_stepper_vertstpsubstp_rl.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a vertical stepper</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h2><strong><strong>Mobile steppers</strong></strong></h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/steppers/components_acux_stepper_mblinpgstp_rl.png"/>
                      </div>
                      <figcaption>
                        <p>Icon top and bottom padding: 8dp<br>
                        Label top padding: 24dp<br>
                        Label button padding (no sublabel): 16dp<br>
                        Vertical space below inactive step: 40dp<br>
                        Vertical space below active step: 48dp<br>
                        Button height: 48dp</p>
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

<?php include SRC_PATH.'/public/footer.php'; ?>