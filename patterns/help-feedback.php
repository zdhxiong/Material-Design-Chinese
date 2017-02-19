<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>Help content providers answers to user’s questions and concerns.</h1>
        </div>
      </div>

      <nav class="chapter-toc">
        <h1>Contents</h1>
        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="help-feedback.html#help-feedback-usage" data-qp-ui-data-id="qp:1">Usage</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="help-feedback.html#help-feedback-placement" data-qp-ui-data-id="qp:2">Placement</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="help-feedback.html#help-feedback-behavior" data-qp-ui-data-id="qp:3">Behavior</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="help-feedback.html#help-feedback-icons" data-qp-ui-data-id="qp:4">Icons</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="help-feedback.html#help-feedback-writing" data-qp-ui-data-id="qp:5">Writing</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="help-feedback-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
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
              <p>Help content provides answers to common user questions about your app. Users can send comments, report bugs, and ask questions that are not already answered by the help content. </p>
            </div>
          </div>
        </div>

        <div id="help-feedback-placement" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Placement
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
                  <div class="module"><p>Make it easy for users to find help content in your app. </p>
                    <p>Help content can be made accessible from various points in your app’s navigation, with options listed below. It is usually placed in the navigation drawer (or overflow menu) under the label “Help” or “Send feedback.” </p>
                    <h2>Complex apps</h2>
                    <p>If your app is complex, place “Help” both in the navigation drawer and the app bar.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/help-feedback/patterns_helpfeedback_placement_01_decisiontree.png"/>
                      </div>
                      <figcaption>
                        <p>To make it easy for users to get help, particularly if your app is complex, place “Help” in both the navigation drawer and app bar. Otherwise, place “Help” in the navigation drawer only, or the overflow menu.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h1>Navigation Drawer</h1>
                    <p>Place “Help” as the last item in the navigation drawer, with “Send feedback” directly above it.</p>
                    <p>If “Sign out” appears in the navigation drawer, it should be the last item in the list.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/help-feedback/patterns_helpfeedback_placement_02_navdrawer.png"/>
                      </div>
                      <figcaption>
                        <p>The navigation drawer showing “Help” and “Send feedback”</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h1>Overflow menu</h1>
                    <p>Place “Help” and “Feedback” (or “Send feedback”) in the overflow menu when there is no navigation drawer. </p>
                    <p>If “Sign out” appears in the overflow menu, it should be the last item in the list.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/help-feedback/patterns_helpfeedback_placement_04_overflow.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>Overflow menu showing “Help” and “Send feedback”</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>App bar</h1>
                    <p>To make it easier for users to find help for urgent issues, such as payments and refunds, place a Help icon in the app bar. </p>
                    <p>Desktop applications may also place a Help icon in the app bar, as there is more space in the desktop UI.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/help-feedback/patterns_helpfeedback_placement_07_appbar.png"/>
                      </div>
                      <figcaption>
                        <p>Help icon promoted in the app bar</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h1>Help screen</h1>
                    <p>A “Send feedback” button may be included in the help screen. </p>
                    <p>Content viewed less often (such as “About,” “Privacy,” and “Terms of service”) may be placed in an action overflow menu.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/help-feedback/patterns_helpfeedback_placement_06_overflow.png"/>
                      </div>
                      <figcaption>
                        <p>A help screen with frequently asked questions and answers and an action button to send feedback.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="help-feedback-behavior" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
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
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <h1>Relevant help topics</h1>
                    <p>Help content should be relevant to the user’s current location in an app. For example, if a user is viewing their account information, the help content displayed should include information about accounts.</p>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Immediate access</h1>
                    <p>Take the user directly to help content upon selecting “Help” in your app.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/help-feedback/patterns_helpfeedback_behavior_02_do.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        Once a user selects “Help,” they should be taken directly to the “Help” menu.
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/help-feedback/patterns_helpfeedback_behavior_01_dont.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        After a user has selected “Help,” do not present a screen asking the user to choose between “Help” and other options.
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-module col-2">
                  <div class="module">
                    <h1>Unsolicited help</h1>
                    <p>Occasionally, help content appears when users interact with an app for the first time, even though the user has not requested help. By offering unsolicited help, users don’t have to search the “Help” menu for answers on how to use new features. This kind of help often appears:</p>
                    <ul class="lst-kix_ay6p25jt9h28-0 start">
                      <li>To promote <a href="../growth-communications/feature-discovery.html#">feature discovery</a>, when a feature can’t easily be activated from a menu or button</li>
                      <li>When a <a href="../growth-communications/gesture-education.html">new gesture</a> is introduced that wasn’t in the app before</li>
                    </ul>
                    <p>This type of help should be limited to new features and gesture education, as it could be interruptive and distracting. </p>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="help-feedback-icons" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            Icons
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
                  <div class="module"><p>Help and Feedback icons are displayed at 24dp. </p>
                    <p>Tooltip icons are 18dp. </p>
                    <p>On light backgrounds, icons have an opacity of 54%. On dark backgrounds they have an opacity of 100%.</p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Light theme</p></td>
                        <td colspan="1" rowspan="1"><p>Opacity</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Active icon</p></td>
                        <td colspan="1" rowspan="1"><p>54%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Inactive icon</p></td>
                        <td colspan="1" rowspan="1"><p>38%</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Dark theme</p></td>
                        <td colspan="1" rowspan="1"><p>Opacity</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Active icon</p></td>
                        <td colspan="1" rowspan="1"><p>100%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Inactive icon</p></td>
                        <td colspan="1" rowspan="1"><p>50%</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Help</h1>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/help-feedback/patterns_helpfeedback_icons_01.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>Use the standard material icon for Help.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/help-feedback/patterns_helpfeedback_icons_02.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>Don’t use icon variations, such as those with speech bubbles or circle outlines.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Send feedback</h1>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/help-feedback/patterns_helpfeedback_icons_03.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>Use the standard material icon for Send feedback.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/help-feedback/patterns_helpfeedback_icons_04.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>Don’t use icon variations, such as chat or bug icons.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Help Tooltips</h1>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/help-feedback/patterns_helpfeedback_icons_05.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>Use the standard material icon for Help Tooltips.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/help-feedback/patterns_helpfeedback_icons_06.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>Don’t use icon variations, including the Help icon, or icons with speech bubbles or outlines.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <p></p>
            </div>
          </div>
        </div>

        <div id="help-feedback-writing" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:5">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:5">
            Writing
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>Help content lets users find answers to questions or problems that are unique to your app.</p>
              <p>Consider these guidelines when writing help content: </p>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module"><h2>Give key information </h2>
                    <p>Keep explanations as short as possible. Avoid giving details that aren’t relevant to typical usage. Answer one question or concern at a time.</p>
                  </div>
                  <div class="module"></div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h2>Make it easy to read</h2>
                    <p>Make help content easy to read by formatting text with bold headings, lists, tables, and space between paragraphs as needed. </p>
                    <p>In particular, when referring to elements that users need to select, such as buttons or links, bold the label names when referring to them in help content. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/help-feedback/patterns_helpfeedback_writing_01.png"/>
                      </div>
                      <figcaption>
                        <p>Headings clearly outline an article’s content. They help readers scan the page to quickly find the information they need.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <h2>Use simple language</h2>
                    <p>Avoid using technical terms in help content where possible.</p>
                  </div>
                  <div class="module"></div>
                  <div class="module"></div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <h2>Show images</h2>
                    <p>When providing step-by-step instructions, show relevant images or icons to explain what the user needs to do. </p>
                  </div>
                  <div class="module"></div>
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