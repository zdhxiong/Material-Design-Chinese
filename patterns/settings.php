<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    
    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>Application settings let users indicate their preferences for how an app or service should behave.</h1>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>Place app settings under the “Settings” label in your app’s navigation.</p>
                <p>Controls that belong in settings should capture user preferences and be infrequently accessed. They should either affect most users or provide critical support to a minority of users.</p>
              </div>
              <div class="module">
                <h3><strong>Placement options</strong></h3>
                <p>Side navigation<br>
                  Toolbar menu</p>
                <h3><strong>Settings components</strong></h3>
                <p>Labels<br>
                  Secondary text<br>
                  Switch or checkbox settings<br>
                  Status</p>
                <p><br>
                </p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/patterns/settings/patterns_settings.png"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="settings.html#settings-placement" data-qp-ui-data-id="qp:1">Placement</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="settings.html#settings-usage" data-qp-ui-data-id="qp:2">Usage</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="settings.html#settings-grouping-settings" data-qp-ui-data-id="qp:3">Grouping settings</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="settings.html#settings-labels-secondary-text" data-qp-ui-data-id="qp:4">Labels and secondary text</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="settings.html#settings-writing-guidelines" data-qp-ui-data-id="qp:5">Writing guidelines</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="settings-placement" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            Placement
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>All of an app’s settings should be reached via the “Settings” label. Do not use synonyms such as “Options” or “Preferences.”</p>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p><strong>Side navigation</strong></p>
                    <p>If side navigation such as a navigation drawer exists, include “Settings” below all other items (except Help &amp; Feedback).</p>
                    <p><strong>Apps without navigation</strong></p>
                    <p>Place Settings in the toolbar menu below all other items (except Help &amp; Feedback).</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/settings/patterns_settings_sidenav.png"/>
                      </div>
                      <figcaption>
                        <p>Settings in the navigation drawer </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/settings/patterns_settings_menu.png"/>
                      </div>
                      <figcaption>
                        <p>Settings in the toolbar menu</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="settings-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Usage
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>Settings should be well-organized, predictable, and contain a manageable number of options. </p>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <p><strong>Provide an overview</strong></p>
                    <p>A user should be able to quickly understand all available settings and their current values.</p>
                    <p>If there are many settings, prioritize the ones most likely to interest users. Less important settings can be grouped and moved to their own screen. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/settings/patterns_settings_sliders.png"/>
                      </div>
                      <figcaption>
                        <p>Important settings appear at the top of the list</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <h1><strong>Select appropriate settings </strong></h1>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <p><strong>Controls that belong in settings:</strong></p>
                    <ul class="lst-kix_q432qzxjj523-0 start">
                      <li>Capture a user preference</li>
                      <li>Get accessed infrequently</li>
                      <li>Are used by the majority of users</li>
                      <li>Are used by a minority of users, but are essential to supporting their needs</li>
                    </ul>
                  </div>
                  <div class="module">
                    <p><strong>Settings should not:</strong></p>
                    <ul class="lst-kix_kc4xdncv287u-0 start">
                      <li>Be frequently accessed actions. (Move these items to a toolbar.)</li>
                      <li>Contain information about the app, such as a version number or licensing information. (These should move to a Help screen.)</li>
                      <li>Manage user accounts. (Present these actions within the main flow of your app, such as within a side nav.)</li>
                    </ul>
                  </div>
                </section>
              </div>
              <h1><strong>Choose polite defaults</strong></h1>
              <p>The initial value for each setting should:</p>
              <ul class="lst-kix_d8bl19dm23x8-0 start">
                <li>Represent the default most users would choose</li>
                <li>Be neutral and pose little risk</li>
                <li>Use less battery or mobile data</li>
                <li>Only interrupt when important</li>
              </ul>
            </div>
          </div>
        </div>

        <div id="settings-grouping-settings" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            Grouping settings
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
                    <p>For large lists of settings, cluster settings into multiple shorter lists. Arrange them according to the total number of settings in the Settings panel in your app.</p>
                    <p><strong>7 or fewer</strong><br>
                      Don’t group at all.</p>
                    <p><strong>9 to 10</strong><br>
                      Group related settings under one or two section dividers. For settings that can't be grouped:</p>
                    <ul class="lst-kix_mql6zxpm6v48-0 start">
                      <li>If important, list them at the top without a section divider.</li>
                      <li>Otherwise, list them at the bottom with a section divider called "Other," in order of importance.</li>
                    </ul>
                    <p><strong>11 to 15</strong><br>
                      Group related settings under two to four section dividers. Combine sets of two related settings into a single setting.</p>
                    <p>For example, two related settings with checkboxes could combine into a single multiple-choice setting.</p>
                    <p><strong>16 or more</strong><br>
                      Group four or more related settings under a subscreen. Use consistent terminology, making sure that the subscreen’s title matches the label of the setting which opens it. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/settings/patterns_settings_subscreen2.png"/>
                      </div>
                      <figcaption>
                        <p>Grouped settings for interruptions</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/settings/patterns_settings_subscreen3.png"/>
                      </div>
                      <figcaption>
                        <p>Related settings grouped under a subscreen</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="settings-labels-secondary-text" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            Labels and secondary text
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <h1>Labels</h1>
              <p>Make your labels brief and meaningful.</p>
              <p>Labels should:</p>
              <ul class="lst-kix_4f21i2rnb8w1-0 start">
                <li>Capitalize only the first word of each label, and proper nouns.</li>
                <li>Put the most important text of your label first.</li>
                <li>Rephrase negative words like "Don't" or "Never" into neutral terms such as "Block."</li>
                <li>Use impersonal labels like "Notifications" instead of "Notify me." Exception: If referring to the user is necessary for understanding the setting, use the second person ("you") rather than the first person ("I").</li>
              </ul>
              <p>Labels should avoid:</p>
              <ul class="lst-kix_wok8mls19v7j-0 start">
                <li>Generic terms, such as: Set, Change, Edit, Modify, Manage, Use, Select, or Choose</li>
                <li>Repeating words from the section divider or subscreen title</li>
                <li>Technical jargon, unless it's widely understood by your target audience</li>
              </ul>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module">
                    <h1>Secondary text</h1>
                    <p>Secondary text is optional. If the label is sufficient on its own, don't add a secondary text description.</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p><strong>Notifications</strong><br>
                      Show notifications</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                    <figcaption>
                      <p>Avoid repeating words from the label in the secondary text.</p>
                    </figcaption>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <p><strong>Switch or checkbox settings</strong></p>
                    <p>Settings that require precise descriptions may add a single-line description underneath the settings label. Descriptions should:</p>
                    <ul class="lst-kix_g4ajoa9uzxc8-0 start">
                      <li>Convey what happens when a setting is enabled</li>
                      <li>Use words that don't already appear in the label</li>
                    </ul>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p><strong>Enable NFC</strong><br>
                      Allow data exchange when the phone touches another device</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                    <figcaption>
                      <p>Start the description with a verb.</p>
                    </figcaption>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>Settings that require longer explanations may add a description on a second screen. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/settings/settings_switch1.png"/>
                      </div>
                      <figcaption>
                        <p>Underneath the label, show the status text of the switch as "On" or "Off.” </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/settings/settings_switch2.png"/>
                      </div>
                      <figcaption>
                        <p>Add the switch itself and a longer description to a second screen.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <p><strong>All other settings</strong></p>
                    <p>For non-switch settings, secondary text should show the current status of a setting only. </p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p><strong>Sleep</strong><br>
                      After 10 minutes of inactivity</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p><strong>Screen timeout</strong><br>
                      Adjust the delay before the screen automatically turns off</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="settings-writing-guidelines" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:5">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:5">
            Writing guidelines
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
                    <p>Be direct and understandable.</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p><strong>Vibrate on touch</strong></p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p><strong>Use tactile feedback</strong></p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <p>Indicate status with specific details placed within the appropriate context.</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p><strong>Sleep</strong><br>
                      After 10 minutes of inactivity</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p><strong>Screen timeout</strong><br>
                      Adjust the delay before the screen automatically turns off</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <p>Use keywords that describe settings accurately. </p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p><strong>Screen lock</strong><br>
                      Pattern</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                    <figcaption>
                      <p>If the user hasn’t set up a screen lock, the secondary text should say “None.”</p>
                    </figcaption>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p><strong>Change screen lock</strong><br>
                      Change or disable pattern, PIN, or password security</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                    <figcaption><br></figcaption>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <p>Use familiar acronyms when there aren’t better alternatives. Convey how and why an unfamiliar setting exists.</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p><strong>NFC</strong><br>
                      Allow data exchange when the phone touches another device</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p><strong>NFC</strong><br>
                      Use Near Field Communication to read and exchange tags</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
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