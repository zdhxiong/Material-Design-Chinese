<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>Languages such as Arabic and Hebrew are read from right-to-left (RTL), and their UIs should be mirrored to display most elements in RTL. </h1>
          <p></p>
        </div>
      </div>

      <nav class="chapter-toc">
        <h1>Contents</h1>
        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="bidirectionality.html#bidirectionality-ui-mirroring-overview" data-qp-ui-data-id="qp:1">UI mirroring overview</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="bidirectionality.html#bidirectionality-rtl-mirroring-guidelines" data-qp-ui-data-id="qp:2">RTL mirroring guidelines</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="bidirectionality.html#bidirectionality-localization" data-qp-ui-data-id="qp:3">Localization</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="bidirectionality-ui-mirroring-overview" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            UI mirroring overview
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <p>The main difference between left-to-right (LTR) and right-to-left (RTL) language scripts is the direction in which content is displayed: </p>
                    <ul class="lst-kix_ctt42uu1qymt-0 start">
                      <li>LTR languages display content from left to right</li>
                      <li>RTL languages display content from right to left</li>
                    </ul>
                    <p>RTL content also affects the direction in which some icons and images are displayed, particularly those depicting a sequence of events. </p>
                    <p>In general, the passage of time is depicted as left to right for LTR languages, and right to left for RTL languages. </p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Element</p></td>
                        <td colspan="1" rowspan="1"><p>LTR </p></td>
                        <td colspan="1" rowspan="1"><p>RTL </p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Text</p></td>
                        <td colspan="1" rowspan="1"><p>Sentences are read from left to right.</p></td>
                        <td colspan="1" rowspan="1"><p>Sentences are read from right to left.</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Timeline</p></td>
                        <td colspan="1" rowspan="1"><p>An illustrated sequence of events progresses left to right.</p></td>
                        <td colspan="1" rowspan="1"><p>An illustrated sequence of events progresses right to left.</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Imagery</p></td>
                        <td colspan="1" rowspan="1"><p>An arrow pointing left to right indicates forward motion: →</p></td>
                        <td colspan="1" rowspan="1"><p>An arrow pointing right to left indicates forward motion: ←</p></td>
                      </tr>
                      </tbody>
                    </table>
                    <p>
                      <figcaption>
                        The passage of time is depicted from left to right for LTR languages, and from right to left for RTL languages.
                      </figcaption>
                    </p>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>When a UI is changed from LTR to RTL (or vice-versa), it’s often called <strong>mirroring</strong><strong>. </strong>An RTL layout is the mirror image of an LTR layout. Mirroring affects both layout and graphics. </p>
                    <p>When a UI changes from one direction to another, these items are not mirrored:</p>
                    <ul class="lst-kix_82tmnht949gx-0 start">
                      <li>Numbers</li>
                      <li>Untranslated text (even if it’s part of a phrase)</li>
                    </ul>
                    <p>Text is always in the correct direction for the language. For example, any LTR words, such as a URL, will continue to be shown in an LTR format, even if the rest of the UI is in RTL.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/bidirectionality/usability_bidirectionality_mirroring_do.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do">Do.</p>
                        <p>Text and numbers should always be in the correct direction for the language. </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/bidirectionality/usability_bidirectionality_mirroring_dont-typed.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont">Don't.</p>
                        <p>Text should not be typed in reverse order. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>When a UI is mirrored, these changes occur:</p>
                    <ul class="lst-kix_lfkw6767vzc6-0 start">
                      <li><strong>Text fields</strong> <strong>icons </strong>are displayed on the opposite side of a field</li>
                      <li><strong>N</strong><strong>avigation buttons</strong> are displayed in reverse order</li>
                      <li><strong>Icons</strong> that communicate direction, like arrows, are mirrored</li>
                      <li><strong>Text </strong>(if it is translated to an RTL language) is aligned to the right</li>
                    </ul>
                    <p>These items are not mirrored:</p>
                    <ul class="lst-kix_2c60lwkyikk9-0 start">
                      <li>Icons that do not communicate direction, such as a camera</li>
                      <li>Numbers, such as the clock and phone numbers</li>
                      <li>Charts and graphs</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/bidirectionality/usability_bidirectionality_mirror1.png"/>
                      </div>
                      <figcaption>
                        <p>Example using LTR UI</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/bidirectionality/usability_bidirectionality_mirror2.png"/>
                      </div>
                      <figcaption>
                        <p>This is an example using RTL UI in Arabic. The numbers are presented LTR.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>To highlight the placement of icons, text fields, buttons, and spacing in these examples of mirrored layouts, the text has been intentionally left in English.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/bidirectionality/usability_bidirectionality__mirror_redlines_LTR.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Text editing menu in LTR mode</strong></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/bidirectionality/usability_bidirectionality__mirror_redlines_RTL.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Text editing menu in RTL mode</strong></p>
                        <p>1. Icons related to bidirectionality are mirrored to reflect the start and end of text on a line<br></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/bidirectionality/usability_bidirectionality__ components_tabs_usage_specs1.png"/>
                      </div>
                      <figcaption>
                        <p><strong>LTR screen</strong></p>
                        <p>On an LTR screen, the tab for “Item One” is aligned to the left, and users swipe to the left to see more tabs.</p>
                        <p>Touch target height: 48dp<br>
                          Screen edge margin before first tab: 72dp<br>
                          Tab labels bottom padding: 20dp<br>
                          Tab labels right and left padding: 12dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/bidirectionality/usability_bidirectionality__ components_tabs_usage_specs2.png"/>
                      </div>
                      <figcaption>
                        <p><strong>RTL screen</strong><strong> </strong></p>
                        <p>On an RTL screen, the tab for “Item One” is aligned to the right, and users swipe to the right to see more tabs.</p>
                        <p>Touch target height: 48dp<br>
                          Screen edge margin before first tab: 72dp<br>
                          Tab labels bottom padding: 20dp<br>
                          Tab labels right and left padding: 12dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/bidirectionality/usability_bidirectionality_mirroring3.png"/>
                      </div>
                      <figcaption>
                        <p><strong>LTR screen </strong><br></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/bidirectionality/usability_bidirectionality_mirroring5.png"/>
                      </div>
                      <figcaption>
                        <p><strong> </strong><strong>RTL screen with title, icons, and UI elements displayed flowing from right to left.</strong></p>
                        <p>1. Back button points to the right<br>
                          2. Text is right-aligned<br>
                          3. Primary and secondary buttons are mirrored to match reading direction<br>
                          4. Checkbox appears to the right of text<br>
                          5. Icons that do not communicate direction are not changed<br>
                          6. Placement of units may vary across languages<br>
                          7. Progress bars fill in the same direction as content is read</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/bidirectionality/usability_bidirectionality__ components_overflow_usage_specs1.png"/>
                      </div>
                      <figcaption>
                        <p><strong> LTR</strong></p>
                        <p>Navigation, overflow menu, and icons switch sides in the LTR layout</p>
                        <p>Icon padding from screen edge: 16dp<br>
                          Title distance from screen edge: 72 dp<br>
                          Padding below title: 20dp<br>
                          Navigation bar height: 56dp<br>
                          Overflow menu padding: 16dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/bidirectionality/usability_bidirectionality__ components_overflow_usage_specs2.png"/>
                      </div>
                      <figcaption>
                        <p><strong> RTL</strong></p>
                        <p>Navigation, overflow menu, and icons switch sides in the RTL layout</p>
                        <p>Icon padding from screen edge: 16dp<br>
                          Title distance from screen edge: 72 dp<br>
                          Padding below title: 20dp<br>
                          Navigation bar height: 56dp<br>
                          Overflow menu padding: 16dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/bidirectionality/usability_bidirectionality__ components_lists_keylines_two_1.png"/>
                      </div>
                      <figcaption><br>
                        <p><strong> LTR</strong></p>
                        <p>Padding and margin around icons and text as designed for LTR layouts.</p>
                        <p>LTR:<br>
                          List item height: 72dp<br>
                          Icon margin from left screen edge: 16dp<br>
                          List item distance from left screen edge: 72dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/bidirectionality/usability_bidirectionality__ components_lists_keylines_two_2.png"/>
                      </div>
                      <figcaption>
                        <p><strong> RTL</strong></p>
                        <p>When mirroring the layout, padding and margin around icons and text also switch placement to match RTL layouts.</p>
                        <p>RTL:<br>
                          List item height: 72dp<br>
                          Icon margin from right screen edge: 16dp<br>
                          List item distance from right screen edge: 72dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="bidirectionality-rtl-mirroring-guidelines" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            RTL mirroring guidelines
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>When text, layout, and iconography are mirrored to support right-to-left UIs, anything that relates to time should be depicted as moving from right to left. For example, forward points to the left, and backwards points to the right.</p>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>When to mirror</h1>
                    <p>The most important icons for mirroring are back and forward buttons. Back and forward navigation buttons are reversed.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/bidirectionality/usability_bidirectionality_guidelines_when1.png"/>
                      </div>
                      <figcaption>
                        <p>LTR back button</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/bidirectionality/usability_bidirectionality_guidelines_when2.png"/>
                      </div>
                      <figcaption>
                        <p>RTL back button</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/bidirectionality/usability_bidirectionality_guidelines_when3.png"/>
                      </div>
                      <figcaption>
                        <p>LTR forward button</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/bidirectionality/usability_bidirectionality_guidelines_when4.png"/>
                      </div>
                      <figcaption>
                        <p>RTL forward button</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>An icon that shows forward movement should be mirrored.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/bidirectionality/usability_bidirectionality_guidelines_when5.png"/>
                      </div>
                      <figcaption>
                        <p>In a LTR UI, a bicycle facing the right typically communicates a sense of moving forward.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/bidirectionality/usability_bidirectionality_guidelines_when6.png"/>
                      </div>
                      <figcaption>
                        <p>In a RTL UI, a bicycle may similarly communicate a sense of moving forward with the bicycle pointing to the left.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>Most RTL countries do not mirror slashes. Leave images with slashes as-is for RTL locales.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/bidirectionality/usability_bidirectionality_guidelines_when7.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do">Do.</p>
                        <p>An LTR airplane mode off state with the LTR slash is acceptable for both LTR and RTL locales.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/bidirectionality/usability_bidirectionality_guidelines_when8.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont">Don't.</p>
                        <p>There’s no need for an RTL airplane mode off state with an RTL slash. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>A volume icon with a slider at its right side should be mirrored. The slider should progress RTL, and the sound waves should emerge from the right.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/bidirectionality/usability_bidirectionality_guidelines_when9.png"/>
                      </div>
                      <figcaption>
                        <p>LTR volume with slider</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/bidirectionality/usability_bidirectionality_guidelines_when10.png"/>
                      </div>
                      <figcaption>
                        <p>RTL volume with speaker icon and slider mirrored</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Sometimes, both the horizontal and circular direction of time are implied in an icon. For example, the redo and undo buttons in Google Docs have both a horizontal direction and a circular direction. </p>
                    <p>In LTR, these point to the same direction in both circular and horizontal representations of time. In RTL, choose whether to show circular or horizontal direction.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/bidirectionality/usability_bidirectionality_guidelines_when13.png"/>
                      </div>
                      <figcaption>
                        <p>LTR redo and undo button from the toolbar in Google Docs</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>Icons that contain representations of text need careful mirroring. </p>
                    <p>Text is right-aligned in RTL. If there is a paragraph indent at the beginning of a paragraph, an unfinished line at the end of the paragraph, or a ragged right side, the icons need to be mirrored. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/bidirectionality/usability_bidirectionality_guidelines_when14.png"/>
                      </div>
                      <figcaption>
                        <p>LTR chat icon</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/bidirectionality/usability_bidirectionality_guidelines_when15.png"/>
                      </div>
                      <figcaption>
                        <p>RTL chat icon</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>When not to mirror</h1>
                    <p>While the linear representation of time is mirrored in RTL, the <strong>circular</strong> direction of time is not. Clocks still turn clockwise for RTL languages. A clock icon or a circular refresh or progress indicator with an arrow pointing clockwise should not be mirrored.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/bidirectionality/usability_bidirectionality_guidelines_whennot1.png"/>
                      </div>
                      <figcaption>
                        <p>The refresh icon shows time moving forward; the direction is clockwise. The icon is not mirrored.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/bidirectionality/usability_bidirectionality_guidelines_whennot2.png"/>
                      </div>
                      <figcaption>
                        <p>The history icon points backwards in time; the direction is counterclockwise. The icon is not mirrored.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>Some icons refer to physical objects that are not mirrored in the right-to-left world. </p>
                    <p>For example, physical keyboards look the same everywhere in the world, so they should not be mirrored.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/bidirectionality/usability_bidirectionality_guidelines_whennot3.png"/>
                      </div>
                      <figcaption>
                        <p>Keyboard icon</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/bidirectionality/usability_bidirectionality_guidelines_whennot4.png"/>
                      </div>
                      <figcaption>
                        <p>Headset icon</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>Certain icons might seem directional but they actually represent holding an object with one’s right hand. </p>
                    <p>For example, the search icon typically has its handle at the bottom right side, because the majority of users are right-handed. </p>
                    <p>The majority of users in RTL-writing countries are also right-handed, so such icons should not be mirrored.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/bidirectionality/usability_bidirectionality_guidelines_whennot5.png"/>
                      </div>
                      <figcaption>
                        <p>Search icon</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/bidirectionality/usability_bidirectionality_guidelines_whennot6.png"/>
                      </div>
                      <figcaption>
                        <p>Local cafe icon</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>The passage of time<br></h1>
                    <p>Anything depicting the passage of time should be mirrored. </p>
                    <p>Do not mirror media playback buttons and the media progress indicator as they refer to the direction of tape being played, not the direction of time. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/bidirectionality/usability_bidirectionality_guidelines_whennot7.png"/>
                      </div>
                      <figcaption>
                        <p>Since media playback buttons and the progress indicator reflect the direction of the tape, they are not mirrored. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/bidirectionality/usability_bidirectionality_guidelines_whennot_do.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do">Do.</p>
                        <p>Media controls for playback are always LTR. </p>
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
                        <img alt="" src="../static/media/usability/bidirectionality/usability_bidirectionality_guidelines_whennot_dont.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont">Don't.</p>
                        <p>Do not mirror media playback or progress bars. The direction of these elements represents the direction of the tape, not the direction of time. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <div class="modulettes">
                      <a class="modulette container default" href="https://www.google.com/url?q=https://github.com/devinmancuso/sketch-rtl&amp;sa=D&amp;ust=1481818040540000&amp;usg=AFQjCNEUfiWMoSUq38fjaakDn4SJsYhkSw" target="_blank">
                        <img alt="" class="icon callout-icon" src="../static/images/callouts/default.svg">
                        <div class="info">
                          <div class="title">RTL Sketch plug-in</div>
                          <span class="subtitle">Flip existing designs and assets into an RTL format</span>
                        </div>
                        </img>
                      </a>
                    </div>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="bidirectionality-localization" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            Localization
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module">
                    <h1>Text in graphics</h1>
                    <p>Graphics that include text usually require localization.</p>
                  </div>
                  <div class="module"></div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Numbers</h1>
                    <p>Icons containing numbers must be localized for languages that use different numerals. For example, Bengali, Marathi, Nepali, and some Arabic-speaking locales use different forms of numbers. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/bidirectionality/usability_bidirectionality_other1.png"/>
                      </div>
                      <figcaption>
                        <p>LTR UI icon containing numbers.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/bidirectionality/usability_bidirectionality_other2.png"/>
                      </div>
                      <figcaption>
                        <p>RTL UI Icon localized in Arabic. Numbers must be localized for languages that use different numerals. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Mirroring</h1>
                    <p>Some content may need to be mirrored, even if the UI is not mirrored. For example, when a user edits an RTL paragraph inside a LTR document, the toolbar buttons for that specific paragraph should be RTL.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/bidirectionality/usability_bidirectionality_other3.png"/>
                      </div>
                      <figcaption>
                        <p>This example shows a RTL paragraph inside an English document. The buttons for indenting and lists should be RTL even though the primary UI direction is LTR.</p>
                        <p>1. Paragraph aligned right<br>
                          2. Icons flipped<br>
                          3. Hebrew text direction is RTL even though the English document is LTR</p>
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

<?php include SRC_PATH.'/public/footer.php'; ?>