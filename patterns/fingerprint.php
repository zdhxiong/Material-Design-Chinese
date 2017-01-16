<?php
$vars = array(
  'title' => 'Fingerprint',
  'category' => '模式',
  'theme_color' => '#FB8C00',
  'color_name' => 'orange',
  'prev_title' => 'Errors',
  'prev_path' => 'patterns/errors',
  'next_title' => 'Gestures',
  'next_path' => 'patterns/gestures'
);

include $public_files['header'];
?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title">Fingerprint</h1>
    
    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <p><strong>Android only</strong></p>
          <h1>Fingerprint detection may be used to unlock a device, sign in to apps, and authenticate purchases using Google Play and some third-party apps. </h1>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>To authenticate purchases using Fingerprint, display the Fingerprint authentication dialog.</p>
                <p>Fingerprint is not as secure as a strong PIN or password. Authentication alternatives include a user’s account password, an app PIN, and device credentials.</p>
              </div>
              <div class="module">
                <h3><strong>When to use</strong></h3>
                <p>Upon opening the app<br>
                  During your app’s purchase flow<br>
                  In your app settings<br>
                  After enrollment</p>
                <h3><strong>Icon</strong></h3>
                <p>Fingerprint icon size: 24dp<br>
                  Circle surrounding icon: 40dp</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/patterns/fingerprint/patterns_fingerprint.png"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="fingerprint.html#fingerprint-enrollment" data-qp-ui-data-id="qp:1">Enrollment</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="fingerprint.html#fingerprint-authentication" data-qp-ui-data-id="qp:2">Authentication</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="fingerprint.html#fingerprint-behavior" data-qp-ui-data-id="qp:3">Behavior</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="fingerprint.html#fingerprint-fingerprint-icon" data-qp-ui-data-id="qp:4">Fingerprint icon</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="fingerprint.html#fingerprint-reauthentication" data-qp-ui-data-id="qp:5">Reauthentication</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="fingerprint-enrollment" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            Enrollment
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>Before invoking Fingerprint in your app, you must get consent from the user that they want to use Fingerprint as an alternate way of authenticating themselves. </p>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module"><p>Possible times to invite users to try Fingerprint include:</p>
                    <ul class="lst-kix_47wor9z2y2ny-0 start">
                      <li>Upon opening the app</li>
                      <li>During your app’s purchase flow</li>
                      <li>In your app settings</li>
                      <li>After enrollment</li>
                    </ul>
                  </div>
                  <div class="module"></div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong><strong>Upon opening the app</strong></strong></h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/patterns/fingerprint/v_01_fp_enrollment_login_alt_xhdpi.webm" type="video/webm">
                            <source src="../static/media/patterns/fingerprint/v_01_fp_enrollment_login_alt_xhdpi.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>The user is offered the option to enroll their fingerprint right after logging in.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/patterns/fingerprint/v_02_fp_enrollment_create_acct_after_xhdpi.webm" type="video/webm">
                            <source src="../static/media/patterns/fingerprint/v_02_fp_enrollment_create_acct_after_xhdpi.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>The user is offered the option to enroll their fingerprint right after creating their account.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h2><strong><strong>During your app’s purchase flow</strong></strong></h2></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/fingerprint/components_fp_03_state1.png"/>
                      </div>
                      <figcaption>
                        <p>The user is offered the option to enroll their fingerprint right after making a purchase with an existing account.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h2><strong>In your app settings</strong></h2></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/patterns/fingerprint/v_04_fp_enrollment_app_settings_xhdpi.webm" type="video/webm">
                            <source src="../static/media/patterns/fingerprint/v_04_fp_enrollment_app_settings_xhdpi.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>The user is offered the option to enable Fingerprint as their lock within an app’s settings.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h2><strong><strong>After enrollment</strong></strong></h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/patterns/fingerprint/v_05_fp_auth_purchase_xhdpi.webm" type="video/webm">
                            <source src="../static/media/patterns/fingerprint/v_05_fp_auth_purchase_xhdpi.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>After enrollment, present the Fingerprint dialog whenever you need authentication from the user.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="fingerprint-authentication" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Authentication
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>Your app’s users can set up the option to log in or authenticate purchases using Fingerprint.</p>
              <p>When a user action needs to be authenticated, display the Fingerprint authentication dialog in place of your login screen.</p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Title</strong></p>
                    <p>Use the title to describe the action being performed, such as “Sign in.” The title should not be used to introduce Fingerprint.</p>
                    <p><strong>Secondary text</strong></p>
                    <p>Use the phase “Confirm fingerprint.” This wording maintains consistency with Android Settings.</p>
                    <p>You may combine the above text with the associated user action, such as “Confirm fingerprint to complete purchase.”</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/fingerprint/components_fp_06-.png"/>
                      </div>
                      <figcaption>
                        <p>Confirm fingerprint dialog </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/fingerprint/components_fp_07.png"/>
                      </div>
                      <figcaption>
                        <p>Specifications for confirm fingerprint dialog:</p>
                        <p>Dialog left and right padding: 24dp<br>
                          Dialog top padding: 24dp<br>
                          Title bottom margin: 20dp<br>
                          Subtitle bottom margin: 28dp<br>
                          Fingerprint icon right margin: 16dp<br>
                          Touch sensor height: 40dp<br>
                          Touch sensor call to action top and bottom padding: 12dp<br>
                          Button container height: 52dp<br>
                          Button container bottom padding: 8dp<br>
                          Button height: 36p<br>
                          Button right and left padding: 8dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="fingerprint-behavior" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
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
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong><strong>Default state</strong></strong></h2>
                    <p>Ask the user to put their finger on the sensor.</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/fingerprint/components_fp_08.png"/>
                      </div>
                      <figcaption>
                        <p>Default state asking the user to put their finger on the sensor</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong><strong>Success state</strong></strong></h2>
                    <p>Once the fingerprint is recognized, change the dialog to a success message and the image to the fingerprint icon with the check mark.</p>
                    <p>Specification:</p>
                    <ul class="lst-kix_snh2q96njwby-0 start">
                      <li>Use your app’s primary color for the success text and icon, or Teal 500 (#009688)</li>
                    </ul>
                    <p>Success states should avoid:</p>
                    <ul class="lst-kix_pv1kglh59qr0-0 start">
                      <li>Displaying two success states simultaneously</li>
                      <li>Extensive transitions between default and success states</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/fingerprint/components_fp_09.png"/>
                      </div>
                      <figcaption>
                        <p>Success message stating that the fingerprint has been recognized</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong><strong>Failure state</strong></strong></h2>
                    <p>Upon failure, provide a clear indication that the user’s fingerprint was not recognized and that they should try again, using the error icon either with or without a status message.</p>
                    <p>Specification:</p>
                    <ul class="lst-kix_snh2q96njwby-0">
                      <li>Use your app’s color assigned to failure states, or Deep Orange 600 (#F4511E)</li>
                    </ul>
                    <p>Failure states should avoid:</p>
                    <ul class="lst-kix_hptt6efiv41m-0 start">
                      <li>Extensive transitions between default and failure states</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/fingerprint/components_fp_10.png"/>
                      </div>
                      <figcaption>
                        <p>Error message stating the fingerprint was not recognized. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <h2><strong><strong>Exiting</strong></strong></h2>
                    <p>Provide alternative ways to exit the dialog. At minimum, provide an affordance to close the Fingerprint dialog, such as a “Cancel” button.</p>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <h2><strong><strong>Authentication alternatives</strong></strong></h2>
                    <p>Fingerprint should not be the only way to authenticate. Provide alternative authentication methods, such as:</p>
                    <ul class="lst-kix_mj3hmnye60y2-0 start">
                      <li>User’s account password</li>
                      <li>App PIN</li>
                      <li><a href="https://www.google.com/url?q=https://developer.android.com/preview/api-overview.html%23confirm-credential&amp;sa=D&amp;ust=1481818027268000&amp;usg=AFQjCNHE1rk2HMXWl_KBmaPpZYFcpxaINw" target="_blank">Device credentials</a></li>
                    </ul>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="fingerprint-fingerprint-icon" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            Fingerprint icon
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
                    <h2><strong><strong>Usage and size</strong></strong></h2>
                    <p>The Fingerprint icon should be displayed at the standard system icon size, 24dp, within a 40dp circle.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/fingerprint/components_fp_11_state1.png"/>
                      </div>
                      <figcaption>
                        <p>40dp circle</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/fingerprint/components_fp_11_state2.png"/>
                      </div>
                      <figcaption>
                        <p>24dp system icon</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong><strong>Default icon</strong></strong></h2>
                    <p>Users will be asked to look for this icon for places where they can use Fingerprint. </p>
                    <p>Specifications: </p>
                    <ul class="lst-kix_cwipeaharukh-0 start">
                      <li>Circular background color: #607D8B</li>
                      <li>Works on white backgrounds</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/fingerprint/components_fp_12_state1.png"/>
                      </div>
                      <figcaption>
                        <p>Default icon</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/fingerprint/components_fp_12_state2.png"/>
                      </div>
                      <figcaption>
                        <p>Dialog box and default icon</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong><strong>Tinted icon</strong></strong></h2>
                    <p>The circle surrounding the icon can be customized with a color that provides appropriate contrast against the lines of the Fingerprint icon.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/fingerprint/components_fp_13_state1.png"/>
                      </div>
                      <figcaption>
                        <p>Contrast and tinted icons</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/fingerprint/components_fp_15_state1.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont">Don't.</p>
                        <p>Don’t use a multi-colored Fingerprint icon. </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>UIs with light backgrounds</strong></p>
                    <p>Use the Fingerprint icon with a dark circle background. </p>
                    <p>Specifications:</p>
                    <ul class="lst-kix_qoe5s0qzeerw-0 start">
                      <li>Color: #FFFFFF</li>
                      <li>Opacity: 100%</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/fingerprint/components_fp_13_state2.png"/>
                      </div>
                      <figcaption>
                        <p>Dark circle background with the Fingerprint icon for a light background</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-module col-2">
                  <div class="module">
                    <p><strong>UIs with dark backgrounds</strong></p>
                    <p>Use the Fingerprint icon with a light circle background.</p>
                    <p>Specifications:</p>
                    <ul class="lst-kix_gb25ynglkofj-0 start">
                      <li>Color: #000000</li>
                      <li>Opacity: 54%</li>
                    </ul>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong><strong>Icon with no circular background</strong></strong></h2>
                    <p>Apps requiring a more versatile Fingerprint icon may eliminate the circular background.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/fingerprint/components_fp_14_state1.png"/>
                      </div>
                      <figcaption>
                        <p>Icon with no circular background</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/fingerprint/components_fp_14_state2.png"/>
                      </div>
                      <figcaption>
                        <p>Dialog box with icon with no circular background</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-figure col-3">
                  <div class="module"></div>
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/fingerprint/components_fp_15_state2.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont">Don't.</p>
                        <p>Don’t tilt or distort the fingerprint icon.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="fingerprint-reauthentication" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:5">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:5">
            Reauthentication
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
                    <p>Reauthentication applies when users need to confirm their identity before continuing. </p>
                    <p>Reauthentication uses: </p>
                    <ul class="lst-kix_kjm079cq6g2q-0 start">
                      <li>To prevent unauthorized viewing of sensitive information</li>
                      <li>To guard against unauthorized purchases</li>
                      <li>When cryptographic keys expire and users are asked to reconfirm their identity</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/fingerprint/components_fp_16-.png"/>
                      </div>
                      <figcaption>
                        <p>Reauthentication dialog</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module">
                    <p>Alternatively, if a user forgets about Fingerprint authentication, you can ask users to use their backup password and remind them of the Fingerprint option next time.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/fingerprint/components_fp_17-.png"/>
                      </div>
                      <figcaption>
                        <p>Dialog asking user for their backup password</p>
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

<?php
include $public_files['footer'];
?>