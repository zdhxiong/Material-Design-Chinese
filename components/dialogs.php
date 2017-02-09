<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <p>Dialogs inform users about a specific task and may contain critical information, require decisions, or involve multiple tasks.</p>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>Dialogs contain text and UI controls. They retain focus until dismissed or a required action has been taken. Use dialogs sparingly because they are interruptive.</p>
                <p>Some dialog types include:</p>
                <ul class="lst-kix_boxvm9ygju2f-0 start">
                  <li><strong>Alerts </strong>are urgent interruptions that inform about a situation and require acknowledgement.</li>
                  <li><strong>Simple menus</strong> display options for list items, whereas <strong>simple dialogs</strong> can provide details or actions about a list item.</li>
                  <li><strong>Confirmation dialogs</strong> require users to explicitly confirm a choice.</li>
                </ul>
              </div>
              <div class="module">
                <h3>Behavior</h3>
                <p>Dialogs should never be obscured, either by other elements or the screen edge. Dialogs always retain focus until dismissed or a required action has been taken. </p>
                <h3>Full-screen dialogs (Mobile only)</h3>
                <p>Full-screen dialogs are best suited to complex tasks, or require an input method editor, as they group a series of tasks together before they can be saved.</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/components/dialogs/components_dialogs.png"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="dialogs.html#dialogs-behavior" data-qp-ui-data-id="qp:1">Behavior</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="dialogs.html#dialogs-alerts" data-qp-ui-data-id="qp:2">Alerts</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="dialogs.html#dialogs-simple-menus" data-qp-ui-data-id="qp:3">Simple menus</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="dialogs.html#dialogs-simple-dialogs" data-qp-ui-data-id="qp:4">Simple dialogs</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="dialogs.html#dialogs-confirmation-dialogs" data-qp-ui-data-id="qp:5">Confirmation dialogs</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="dialogs.html#dialogs-full-screen-dialogs" data-qp-ui-data-id="qp:6">Full-screen dialogs</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="dialogs.html#dialogs-specs" data-qp-ui-data-id="qp:7">Specs</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="dialogs-behavior" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            Behavior
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <h2><strong>Beyond standard dialogs </strong></h2>
              <p>Dialogs are a sub-type of modal windows, and the examples covered here are for standard material system dialogs. (Other modal window constructions aren’t covered here because they have too much variation, such as branded buttons for purchasing flows, non-standard UI form elements, or unique layouts.)</p>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong><strong>Reduce interruption</strong></strong></h2>
                    <p>Use dialogs sparingly because they are interruptive. Their sudden appearance forces users to stop their current task and focus on the dialog content. Not every choice, setting, or detail warrants interruption. Alternatives to dialogs include menus or inline expansion, both of which maintain the current context.</p>
                    <h2><strong><strong>Dialog prominence</strong></strong></h2>
                    <p>Dialogs should never be obscured by other elements or appear partially on screen. Dialogs always retain focus until dismissed or a required action has been taken, such as choosing a setting.</p>
                    <p>Dialogs should avoid:</p>
                    <ul class="lst-kix_ipehavy5ca5n-0 start">
                      <li>Opening dialogs from within a dialog</li>
                      <li>Containing scrolling content</li>
                    </ul>
                    <h2><strong><strong>Full-screen dialog exception</strong></strong></h2>
                    <p>Full-screen dialogs may open additional dialogs, such as pickers, because their design accommodates additional layers of material without significantly increasing the app’s perceived z-depth or visual noise.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_content1.png"/>
                      </div>
                      <figcaption>
                        <p>Example of dialog content</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_fullscreen1.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a full-screen dialog</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong><strong>Scrollable content exception</strong></strong></h2>
                    <p>Some dialog content requires scrolling, such as lists of ringtones. </p>
                    <ul class="lst-kix_8cibju6089a7-0 start">
                      <li>For scrollable lists of options, the dialog title remains pinned to the top. This ensures that a selected item remains visible with the title, regardless of the item’s position in the list.</li>
                      <li>Otherwise, the title scrolls off with the content. Actions always remain in place when content scrolls.</li>
                    </ul>
                    <p>Dialogs are separate from the underlying parent material and do not scroll with it.</p>
                    <h2><strong><strong>Displaying additional content</strong></strong></h2>
                    <p>To disclose additional content in a dialog, do so using inline expansion within the content area. Or consider alternative components that are optimized for large amounts of content.</p>
                    <h2><strong><strong>Dismissing dialogs</strong></strong></h2>
                    <p>Dialogs can be dismissed by touching/clicking outside of a dialog or by using the system back button (Android). Alternatively, dialog behavior can be overridden so that users must explicitly choose one of the actions.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_1.png"/>
                      </div>
                      <figcaption>
                        <p>Make the dialog title fixed when viewing a scrollable list of options ensures that both the title and the selected item are simultaneously visible.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="dialogs-alerts" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Alerts
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>Alerts are urgent interruptions, requiring acknowledgement, that inform the user about a situation. </p>
              <p><strong>Disambiguation from Snackbars:</strong> Snackbars present optional information after an action, such as confirming the discarding of a draft. They often allow a user to undo an action just taken.</p>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong><strong>Alerts without title bars</strong></strong></h2>
                    <p>Most alerts don't need titles. </p>
                    <p>They summarize a decision in a sentence or two by either:</p>
                    <ul class="lst-kix_cwqflibcg89h-0 start">
                      <li>Asking a question (e.g. "Delete this conversation?")</li>
                      <li>Making a statement related to the action buttons</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_alerts_1.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>The affirmative action text “Discard” clearly indicates the outcome of the decision.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_alerts_2.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>The dismissive action text “No” answers the question, but does not suggest what will happen afterwards. A better action pair would be an explicit “Cancel” and “Delete.”</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong><strong>Alerts with title bars</strong></strong></h2>
                    <p>Use title bar alerts only for high-risk situations, such as the potential loss of connectivity. Users should be able to understand the choices based on the title and button text alone.</p>
                    <p>If a title is required:</p>
                    <ul class="lst-kix_mxsc3tn7ox57-0 start">
                      <li>Use a clear question or statement with an explanation in the content area, such as "Erase USB storage?".</li>
                      <li>Avoid apologies, ambiguity, or questions, such as “Warning!” or “Are you sure?”</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_usage1.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>This dialog poses a specific question, concisely elaborates on its impact, and provides clear actions.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_alerts4.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>This dialog poses an ambiguous question and its scope of impact is unclear.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="dialogs-simple-menus" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            Simple menus
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <h2><strong>Mobile and tablet only</strong></h2>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>Simple menus display options for list items, and they immediately commit choices upon selection. See <a href="menus.html#menus-simple-menus">Simple Menus</a> for more details.</p>
                    <p><strong>Disambiguation:</strong> <a href="dialogs.html#dialogs-simple-dialogs">Simple dialogs</a> display detailed options for list items or provide related actions. Simple dialogs can display the same content as simple menus. However, simple menus are preferred because they are less disruptive to the user’s current context.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_simplemenu1.png"/>
                      </div>
                      <figcaption>
                        <p>Examples of a simple menu</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_simplemenu2.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="dialogs-simple-dialogs" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            Simple dialogs
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
                    <p>Simple dialogs can provide additional details or actions about a list item. For example, they can display avatars, icons, clarifying subtext, or orthogonal actions (such as adding an account).</p>
                    <p>Touch mechanics:</p>
                    <ul class="lst-kix_iq5usj221ubg-0 start">
                      <li>Choosing an option immediately commits the option and closes the menu</li>
                      <li>Touching outside of the dialog, or pressing Back, cancels the action and closes the dialog</li>
                    </ul>
                    <h2><strong><strong>Reduce interruption</strong></strong></h2>
                    <p>Simple dialogs are more interruptive than simple menus and should be used sparingly.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_simple1.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a simple dialog </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_simple2.png"/>
                      </div>
                      <figcaption>
                        <p>The width of a dialog on mobile is defined as a multiple of a unit.</p>
                        <p>Each unit is 56dp wide<br>
                          Minimum width on mobile = 56dp * 5 = 280dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong><strong>No explicit cancel button</strong></strong></h2>
                    <p>Simple dialogs do not have explicit buttons that accept or cancel an operation.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_simple3.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>This simple dialog has an explicit “Cancel” button.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_simple4.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>This simple dialog has an explicit “Cancel” button.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong><strong>Specifications</strong></strong></h2>
                    <ul class="lst-kix_inaa37kmuppi-0 start">
                      <li>Row heights can vary in simple dialogs.</li>
                      <li>Simple dialogs are displayed centered vertically and horizontally on the screen.</li>
                      <li>The dialog's distance from the screen edge is at least 40dp on the left and right, and at least 24dp on the top and bottom.</li>
                      <li>The dialog's content is 24dp from the dialog edge.</li>
                    </ul>
                    <h2><strong><strong>Avoid text wrapping</strong></strong></h2>
                    <p>If any text in a <a href="menus.html#menus-simple-menus">simple menu</a> wraps to another line, use a simple dialog instead.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_simple5.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>This simple dialog has varying row heights.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="dialogs-confirmation-dialogs" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:5">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:5">
            Confirmation dialogs
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
                    <p>Confirmation dialogs require users to explicitly confirm their choice before an option is committed. For example, users can listen to multiple ringtones but only make a final selection upon touching “OK.”<br></p>
                    <p>Tapping “Cancel” in a confirmation dialog, or pressing “Back,” cancels the action, discards any changes, and closes the dialog.</p>
                    <h2>Avoid dialogs launching dialogs</h2>
                    <p>Confirmation dialogs should avoid launching additional simple dialogs or simple menus, as they add complexity and appear to increase an app’s elevation. If they are needed to complete a task, consider using a <a href="dialogs.html#dialogs-full-screen-dialogs">full-screen dialog</a> instead.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_confirmation1.png"/>
                      </div>
                      <figcaption>
                        <p>The ringtone choice in the following confirmation dialog will not be set until the user taps “OK.”</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_confirmation2.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a confirmation dialog with controls positioned on the left side of text.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2>Confirm a single value</h2>
                    <p>Confirmation dialogs can use layouts other than lists, such as a <a href="pickers.html">date picker</a>, but remain focused on specifying a single value (picking the date, but not picking the time and date).</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_confirmation3.png"/>
                      </div>
                      <figcaption>
                        <p>The date choice is set by the user tapping a date and the “OK” button. </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_confirmation4.png"/>
                      </div>
                      <figcaption>
                        <p>The user selects the hour by moving the clock hand and tapping “OK.” </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2>Cancel and confirmation buttons</h2>
                    <p>Confirmation dialogs provide both an explicit confirmation button and explicit cancel button. Tapping the cancel button, Back button, or leaving the confirmation dialog will discard changes.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_confirmation5.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>Provide explicit confirmation and cancel buttons.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_confirmation6.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>A single dialog button makes the system Back action ambiguous: does Back cancel or confirm?</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="dialogs-full-screen-dialogs" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:6">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:6">
            Full-screen dialogs
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p><strong>Mobile only</strong>: Due to limited space, full-screen dialogs may be more appropriate for mobile devices than dialogs used on devices with larger screens.</p>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong><strong>Usage</strong></strong></h2>
                    <p>Full-screen dialogs group a series of tasks (such as creating a calendar entry) before they may be committed or discarded. No selections are saved until “Save” is touched. Touching the “X” discards all changes and exits the dialog.</p>
                    <p>Full-screen dialogs enable complex layouts, minimize the appearance of stacked sheets of material (dialogs above dialogs), and temporarily reset the app’s perceived elevation to a higher baseline. They allow tasks to launch simple menus or simple dialogs as part of a complex operation.</p>
                    <p>Full-screen dialogs may be used for content or tasks that meet any of these criteria:</p>
                    <ul class="lst-kix_t7jhlbmuw669-0 start">
                      <li>The dialog includes components (like pickers or form fields) that require an input method editor (IME), such as a keyboard.</li>
                      <li>When changes are not saved in real time</li>
                      <li>When there is no draft capability in the app</li>
                      <li>When performing batch operations or queuing changes prior to submitting them</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_fullscreen1.png"/>
                      </div>
                      <figcaption>
                        <p>The full-screen dialog supports a simple dialog used to pick dates.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_fullscreen2.png"/>
                      </div>
                      <figcaption>
                        <p>Date picker opened from full-screen dialog</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong><strong>Actions</strong></strong></h2>
                    <p>Place confirmation and dismissive actions for full-screen dialogs at the top of the screen.</p>
                    <h2><strong><strong>Confirmation</strong></strong></h2>
                    <p>The confirmation action in the top right of the screen uses descriptive verbs, such as: save, send, share, update or create. Don’t use vague actions for confirming action, such as: done, ok or close.</p>
                    <p>The confirmation action is disabled until all mandatory fields in the dialog are met.</p>
                    <h2><strong><strong>Discard</strong></strong></h2>
                    <p>Both the discard action (the “X” at the top left of the screen) and the Back button close the full-screen dialog and discard changes. </p>
                    <ul class="lst-kix_w0srevl2gebd-0 start">
                      <li>If no changes have been made, the dialog closes and no discard confirmation is required.</li>
                      <li>If the user has made any changes, they are prompted to confirm the discard action.</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_fullscreen3.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>Don’t use vague terms like “Close” for confirmation actions.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_fullscreen8.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>Prompt users to confirm the discard action if they have made any changes.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong><strong>Navigation</strong></strong></h2>
                    <p>The “X” used in a full-screen dialog differs from an up arrow, which indicates the view’s state is constantly being saved. For example, an up arrow used in Settings indicates all changes are committed immediately without explicit confirmation or cancel actions.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_fullscreen4.png"/>
                      </div>
                      <figcaption>
                        <p>The up arrow in this Settings example indicates that any changes will be immediately saved upon selection.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_fullscreen5.png"/>
                      </div>
                      <figcaption>
                        <p>Touching the “X” in this Settings example will discard all changes. Changes will be saved only upon touching Save.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong><strong>Titles</strong></strong></h2>
                    <p>Full-screen dialog titles don’t use dynamic type.</p>
                    <p>Titles should be succinct. They can wrap to a second line if necessary, and should then be truncated.</p>
                    <p>If the full-screen dialog uses titles of variable length or anticipates long titles (for example, because certain words are longer in different languages), place title text in the content area of the dialog instead of the app bar.</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_fullscreen6.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>Avoid using titles of variable length in the app bar.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_fullscreen7.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>Place long titles in the content area of the full-screen dialog.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="dialogs-specs" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:7">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:7">
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
                    <p>Dialogs contain content, actions, and an optional title.</p>
                    <h2><strong><strong>Optional title</strong></strong></h2>
                    <p>The title briefly describes the type of choice being made. Titles should always be displayed in their entirety and only used when necessary. For example, a title may indicate to which part of a task the dialog relates, or identify what will be affected by the decision.</p>
                    <h2><strong><strong>Content</strong></strong></h2>
                    <p>Dialog content typically consists of text and/or UI control elements. It is focused on a specific task, such as confirming item deletion or choosing a setting.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_usage2.png"/>
                      </div>
                      <figcaption>
                        <p>This dialog contains a title, content, and actions. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong><strong>Actions</strong></strong></h2>
                    <p>Dialogs present a focused and limited set of actions, which are generally affirmative or dismissive.</p>
                    <ul class="lst-kix_6ymsfsu4bdxd-0 start">
                      <li><strong>Affirmative actions</strong> are placed on the right side and continue the process. Affirmative actions may be destructive, like “Delete” or “Remove.”</li>
                      <li><strong>Dismissive actions</strong> are placed directly to the left of affirmative actions and return the user to the originating screen or step in the process.</li>
                      <li><strong>Dismissive and affirmative action text</strong> can be “Cancel”/”OK” or specific active verbs or verb phrases that indicate the outcome of the decision.</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_swapped_actions_16.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>Dismissive actions are always placed directly to the left of affirmative actions.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Dialog actions should present a clear choice directly related to the dialog’s title and content.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_swapped_actions_17.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>Avoid presenting users with ambiguous or unclear choices. In this example, “Cancel” doesn't make sense in relation to the title because there's no clear action being proposed.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong><strong>Acknowledgement actions</strong></strong></h2>
                    <p>In situations where users are required to acknowledge the dialog’s content to proceed, an alert may contain only one action. Use this type of alert sparingly as it is interruptive. Consider other methods of communicating the information to users, such as in-line with a view’s content.</p>
                    <h2><strong><strong>Number of actions</strong></strong></h2>
                    <p>Dialogs should not include more than two actions. A third action, such as “Learn more,” navigates away from the dialog, potentially leaving the task unfinished.</p>
                    <p>Avoid using a “Learn more” action to access help documentation; in-line expansion within the dialog should be used instead. If more extensive information is needed, provide it prior to entering the dialog.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_usage5.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>The “Learn more” action navigates away from this dialog, leaving it in an indeterminate state.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-module col-2">
                  <div class="module">
                    <h1>Color</h1>
                    <p>Dialog actions use system colors by default, but they should reflect your product's <a href="../style/color.html">color palette</a>. Use a contrasting color, such as the palette’s accent color, to distinguish dialog actions from dialog content.</p>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong><strong>Languages without capitalization </strong></strong></h2>
                    <p>For languages without capitalization (such as Chinese, Japanese or Korean), it is important to maintain consistent placement, spacing, and colors for actions to distinguish them from regular text.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_consistent_placement1.png"/>
                      </div>
                      <figcaption>
                        <p>The consistent placement of actions and text color helps distinguish actions from regular text even when the affirmative action is disabled.</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_consistent_placement2.png"/>
                      </div>
                      <figcaption>
                        <p>Affirmative actions are more likely to be disabled until a choice is made. Dismissive actions are never disabled.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong><strong>Content guidelines</strong></strong></h2>
                    <p>Padding around content area: 24dp<br>
                      Padding between title and body text: 20dp<br>
                      Padding around buttons: 8dp<br>
                      Button height: 36dp<br>
                      Action area height: 52dp<br>
                      Dialog elevation: 24dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_updates1.png"/>
                      </div>
                      <figcaption>
                        <p>Content padding</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_actions.png"/>
                      </div>
                      <figcaption>
                        <p>Within the content area, the 24dp of padding below the content helps separate it from the actions.</p>
                        <p>Dialog content bottom padding: 24dp<br>
                          Button height: 36dp<br>
                          Button margin: 8dp</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_updates8.png"/>
                      </div>
                      <figcaption>
                        <p>Content padding for a dialog in a scrolled state</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong><strong>Button width and padding</strong></strong></h2>
                    <p>Button height: 36dp<br>
                      Minimum button width: 64dp<br>
                      Internal button padding: 8dp<br>
                      Padding between buttons: 8dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_updates2.png"/>
                      </div>
                      <figcaption>
                        <p>Detail of button widths and padding</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Button height: 36dp<br>
                    Button area height: 52dp<br>
                    Left button padding: 24dp<br>
                    Right button padding: 8dp<br>
                    Padding between buttons: 8dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_updates3.png"/>
                      </div>
                      <figcaption>
                        <p>Detail of button area</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_consistent_placement3.png"/>
                      </div>
                      <figcaption>
                        <p>In a scrolled state, a stroke delineates the dialog’s content area from actions.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong><strong>Side-by-side buttons</strong></strong></h2>
                    <p>Side-by-side buttons are recommended when the text of each label does not exceed the maximum button width, such as the commonly used OK/Cancel buttons. </p>
                    <p>Use the following formula to calculate maximum button width for a given dialog:</p>
                    <p>The maximum width for buttons in a dialog = </p>
                    <p>(Dialog width - 8dp - 8dp - 8dp)/2</p>
                    <p>For example:</p>
                    <p>The maximum width for buttons in a 280dp wide dialog = </p>
                    <p>(280dp - 8dp - 8dp - 8dp)/2 = 128dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_sidebyside.png"/>
                      </div>
                      <figcaption>
                        <p>Button height: 36dp<br>
                        Padding between text and action area: 24dp<br>
                        Padding around buttons is: 8dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong><strong>Stacked full-width buttons</strong></strong></h2>
                    <p>When text labels exceed the maximum button width, use stacked buttons to accommodate the text. Affirmative actions are stacked above dismissive actions.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_stacked.png"/>
                      </div>
                      <figcaption>
                        <p>Touchable target height for each button: 48dp<br>
                        Padding between text and touch target: 24dp<br>
                        Padding below touch target to dialog edge: 8dp<br>
                        Padding between button text right edge and dialog edge: 16dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong><strong>Simple dialog keylines</strong></strong></h2>
                    <p>Vertical keyline at 24dp from the left and right edges. Content associated with an icon or avatar aligns 80dp from the left edge.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_updates5.png"/>
                      </div>
                      <figcaption>
                        <p>Keylines for a simple dialog</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong><strong>Simple dialog content guidelines</strong></strong></h2>
                    <p>It is recommended that simple dialogs have titles, but titles can be omitted based on your product’s needs. </p>
                    <p><strong>Title</strong></p>
                    <ul class="lst-kix_dtf5p7kyo90b-0 start">
                      <li>Top padding: 24dp</li>
                      <li>Bottom padding: 20dp</li>
                      <li>Text size: Roboto Medium 20sp</li>
                      <li>Text line height: 28dp</li>
                    </ul>
                    <p><strong>Content</strong></p>
                    <ul class="lst-kix_6ttbpq5z9hc5-0 start">
                      <li>Row height of single-line list with avatars: 56dp</li>
                      <li>Bottom edge padding: 8dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_simple-redlines.png"/>
                      </div>
                      <figcaption>
                        <p>redlines for a simple dialog</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong><strong>Full-screen dialog titles</strong></strong></h2>
                    <p>Full-screen dialog titles can wrap to a second line if necessary, and then should be truncated. Titles should be succinct, but in some situations, such as when words are longer in different languages, titles may need to wrap.</p>
                    <p><br>
                      App bar height with a single line of text: 56dp<br>
                      App bar height with two lines of text: 80dp<br>
                      Title text keyline: 72dp<br>
                      Title text: 20sp<br>
                      Title text top and bottom padding: 20dp<br>
                      Dismissive action padding from left edge: 16dp<br>
                      Affirmative action text: 14sp<br>
                      Affirmative action text padding on the left and right: 16dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_updates10.png"/>
                      </div>
                      <figcaption>
                        <p>Detail of a full-screen dialog app bar</p>
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
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_updates11.png"/>
                      </div>
                      <figcaption>
                        <p>Full-screen dialog with an app bar containing a single line of text.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dialogs/components_dialogs_updates12.png"/>
                      </div>
                      <figcaption>
                        <p>Note that this image is for illustration purposes only. Long titles should be placed in the content area of the full-screen dialog.</p>
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