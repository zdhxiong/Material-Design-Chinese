<?php
$vars = array(
  'title' => 'Errors',
  'category' => '模式',
  'theme_color' => '#FB8C00',
  'color_name' => 'orange',
  'prev_title' => 'Empty states',
  'prev_path' => 'patterns/empty-states',
  'next_title' => 'Fingerprint',
  'next_path' => 'patterns/fingerprint'
);

include $public_files['header'];
?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title">Errors</h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>Errors occur when an app fails to complete an expected action.</h1>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>Some examples of errors include:</p>
                <ul class="lst-kix_29eeo766e8cf-0 start">
                  <li>When user input is not understood</li>
                  <li>An app failing to load</li>
                  <li>Incompatible operations are run concurrently</li>
                </ul>
              </div>
              <div class="module">
                <h3><strong>Types of errors</strong></h3>
                <p>User input errors<br>
                  App errors<br>
                  Incompatible state errors</p>
                <h3><strong>Specific error patterns</strong></h3>
                <p>Forms<br>
                  General usage errors<br>
                  Sync errors<br>
                  Connectivity<br>
                  Permissions</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/patterns/errors/patterns_errors.png"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="errors.html#errors-usage" data-qp-ui-data-id="qp:1">Usage</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="errors.html#errors-user-input-errors" data-qp-ui-data-id="qp:2">User input errors</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="errors.html#errors-app-errors" data-qp-ui-data-id="qp:3">App errors</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="errors.html#errors-incompatible-state-errors" data-qp-ui-data-id="qp:4">Incompatible state errors</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="errors-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            Usage
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div><p>Errors occur when an app fails to complete an action, such as:</p>
              <ul class="lst-kix_js14ueu0qjs1-0 start">
                <li>The app does not understand user input</li>
                <li>The system or app fails</li>
                <li>A user intends to run incompatible operations concurrently</li>
              </ul>
              <p>Minimize errors by designing apps that make it easy for users to input information flexibly. Apps should accept common data formats that use affordances to improve user understanding. </p>
              <p>To address errors:</p>
              <ul class="lst-kix_ssfjdsdhclqn-0 start">
                <li>Clearly communicate what is happening</li>
                <li>Describe how a user can resolve it</li>
                <li>Preserve as much user-entered input as possible</li>
              </ul>
            </div>
          </div>
        </div>

        <div id="errors-user-input-errors" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            User input errors
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>Help users fix input errors as soon as they are detected. Disable the submission of a form if errors are detected, and if detected only after form submission, clearly explain the error and how to fix it.</p>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module"><h1>Text field input </h1>
                    <p><strong>Helper text</strong> may be included before, during, or after a user interacts with each field on a form. </p>
                    <p>Show <strong>error text</strong> only after user interaction with a field. If the user inputs incorrect data, helper text may transform into error text. </p>
                    <p>Minimize form text to the essentials. Not every text field needs helper and/or error text. </p>
                    <p>Specification:</p>
                    <p>Place 16dp of vertical space between text fields and the below error text. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/errors/patterns_errors_userinput1.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a text field input</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/errors/patterns_errors_userinput2.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a text field input with error text</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <h1>Form submission</h1>
                    <p>The Submit button should be enabled by default.</p>
                    <p>If you are performing inline form validation, and the field with the error is clearly marked, the submit button may be disabled until the error is corrected.</p>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <h1>Color</h1>
                    <p>Error text should reflect your product’s <a href="../style/color.html">color palette</a>. It’s recommended that you use a contrasting color for error states, such as a warmer hue like red or orange. </p>
                    <p>Error text should be legible, with noticeable contrast against its background color. </p>
                    <p>Sites such as <a href="https://www.google.com/url?q=http://webaim.org/&amp;sa=D&amp;ust=1481817993140000&amp;usg=AFQjCNEFMDykeKuS7TD374W2xqHvCvF8bg" target="_blank">webaim.org</a> offer color contrast checking tools.</p>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2>Fonts for light backgrounds</h2>
                    <ul class="lst-kix_ok30zaagthgs-0 start">
                      <li>Errors: Roboto Regular 12sp</li>
                      <li>Hint and helper text: #000000 with 38% opacity</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/errors/patterns_errors_userinput3.png"/>
                      </div>
                      <figcaption>
                        <p>Light theme for these states: normal with hint text, normal with error text, normal with helper text, and normal with helper as error text</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2>Fonts for dark backgrounds</h2>
                    <ul class="lst-kix_ok30zaagthgs-0">
                      <li>Errors: Roboto Regular 12sp</li>
                      <li>Hint and helper text: #FFFFFF with 50% opacity</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/errors/patterns_errors_userinput4.png"/>
                      </div>
                      <figcaption>
                        <p>Dark theme for these states: normal with hint text, normal with error text, normal with helper text, and normal with helper as error text </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2>Helper and error text </h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/errors/patterns_errors_userinput5.png"/>
                      </div>
                      <figcaption>
                        <p>Example with helper text </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/errors/patterns_errors_userinput6.png"/>
                      </div>
                      <figcaption>
                        <p>Example with error text </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/errors/patterns_errors_userinput7.png"/>
                      </div>
                      <figcaption>
                        <p>Example with helper text</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/errors/patterns_errors_userinput8.png"/>
                      </div>
                      <figcaption>
                        <p>Example with error text </p>
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
                        <img alt="" src="../static/media/patterns/errors/patterns_errors_userinput9.png"/>
                      </div>
                      <figcaption>
                        <p>Examples of normal with helper text and normal with helper and error text</p>
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
                        <img alt="" src="../static/media/patterns/errors/patterns_errors_userinput_keyline1.png"/>
                      </div>
                      <figcaption>
                        <p>Input and error text</p>
                        <p>Tile height: 64dp<br>
                          Padding above input text: 16dp<br>
                          Padding below input text: 8dp<br>
                          Padding above and below error text: 4dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2>Error with floating text label </h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/errors/patterns_errors_userinput10.png"/>
                      </div>
                      <figcaption>
                        <p>Example of floating text label with input text </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/errors/patterns_errors_userinput11.png"/>
                      </div>
                      <figcaption>
                        <p>Example of floating text label with error text</p>
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
                        <img alt="" src="../static/media/patterns/errors/patterns_errors_userinput12.png"/>
                      </div>
                      <figcaption>
                        <p>Examples of normal with hint text/label and normal with input text, label and error</p>
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
                        <img alt="" src="../static/media/patterns/errors/patterns_errors_userinput_keyline2.png"/>
                      </div>
                      <figcaption>
                        <p>Specs for floating text label</p>
                        <p>Tile height: 80dp<br>
                          Padding above label text: 8dp<br>
                          Padding above and below input text: 8dp<br>
                          Padding above and below error text: 4dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <h1>Text field input - Over/under character or word count </h1>
              <p>A character counter may be displayed before, during, and after user interaction with a field. Consider not displaying the counter until the user approaches the character limit. </p>
              <ul class="lst-kix_1u8c9dhapu10-0 start">
                <li>Counter font is Roboto Regular 12sp</li>
                <li>Counter fields have 16dp of additional bottom padding</li>
              </ul>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2>Single-line with character counter </h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/errors/patterns_errors_userinput13.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a single-line input label with character counter and user input text</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/errors/patterns_errors_userinput14.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a single-line input label with character counter and error text</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2>Multi-line with character counter</h2></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/errors/patterns_errors_userinput15.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a multi-line input label with character counter and user input text</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/errors/patterns_errors_userinput16.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a multi-line input label with character counter and error text</p>
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
                        <img alt="" src="../static/media/patterns/errors/patterns_errors_userinput17.png"/>
                      </div>
                      <figcaption>
                        <p>Examples of these states: single-line input label with user input text, single-line input label with error text, single-line input label with user input text, and multi-line input label with error text</p>
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
                        <img alt="" src="../static/media/patterns/errors/patterns_errors_userinput_keyline3.png"/>
                      </div>
                      <figcaption>
                        <p>Text field input</p>
                        <p>Height of entire input area: 88dp</p>
                        <p>Single-line input label top padding: 16dp<br>
                          Top and bottom padding for input text for a single-line field: 8dp</p>
                        <p>Padding above counter: 8dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Incompatible values</h1>
                    <p>Show errors for incompatible values during or after a user interacts with a text field.</p>
                    <p>If two or more fields have incompatible inputs:</p>
                    <ul class="lst-kix_q3mgtx4icxgk-0 start">
                      <li>In the text field, indicate a fix is needed. Add an error message below.</li>
                      <li>Display a message at the top of the form, or screen, summarizing the fixes needed and any additional explanation.</li>
                    </ul>
                    <h2>Errors detected upon form submission</h2>
                    <p>Reload the form with consolidated error messages and scroll position at the top. Error messages for individual fields may be resolved as the user works through the form. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/errors/patterns_errors_userinput18.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a form</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/errors/patterns_errors_userinput19.png"/>
                      </div>
                      <figcaption>
                        <p>Example of errors detected after attempted form submission</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Incomplete form </h1>
                    <p>Empty form fields should be indicated by both the text field and error message below. </p>
                    <p>Display incomplete form errors to indicate a user has skipped a field after they have advanced through a form. If unable to detect user progress through the form, display an error after the user has attempted to submit the form. </p>
                    <h2>Multiple errors before form submission</h2>
                    <p>Individually label error messages as the user works through the form. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/errors/patterns_errors_userinput21.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a form </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/errors/patterns_errors_userinput22.png"/>
                      </div>
                      <figcaption>
                        <p>Example of an incomplete form</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h1>Single-line list error</h1></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/errors/patterns_errors_userinput23.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a single-line list error</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="errors-app-errors" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            App errors
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>App errors occur independent of user input.</p>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module"><h1>General app error</h1>
                    <p>When an error occurs, an app should display loading indicators until the error message appears. </p>
                    <p>Features not available may be indicated as disabled in the UI. For example, a button not may be displayed in a disabled state, paired with text explaining it is not available. Not every error requires a new component to pop up. </p>
                    <p>If possible, give your user an action that will help them address the error. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/errors/patterns_errors_app1.png"/>
                      </div>
                      <figcaption>
                        <p>Alert dialog: app feedback about an error that is blocking normal operation </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/errors/patterns_errors_app2.png"/>
                      </div>
                    </figure>
                    <p>The snackbar contains app feedback about a peripheral error. Snackbars are transient. Don't use them for critical, persistent, or bulk errors.</p>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Sync error/failure to load</h1>
                    <p>When sync is down or content has failed to load, the user should be able to interact with as much of the rest of the app as possible.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/errors/patterns_errors_app3.png"/>
                      </div>
                      <figcaption>
                        <p>Empty state for the screen/content failing to load</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/errors/patterns_errors_app4.png"/>
                      </div>
                      <figcaption>
                        <p>Container/component specific error with action</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Connectivity </h1>
                    <p>When connectivity is down, the user should be able to interact with as much of the rest of the app as possible. </p>
                    <p>If appropriate, present a link to help a user accomplish their task. Only offer links that you can actually support. For example, don't offer an option like "Try again" in cases where you can detect that the operation will fail.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/errors/patterns_errors_app5.png"/>
                      </div>
                    </figure>
                    <p>Snackbar with action to retry </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/errors/patterns_errors_app6.png"/>
                      </div>
                      <figcaption>
                        <p>Empty state for a screen that is only available online </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="errors-incompatible-state-errors" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            Incompatible state errors
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>Incompatible state errors occur when users attempt to run operations that conflict, such as making a call while in airplane mode or taking a screenshot from a restricted work account. Help prevent users from putting themselves into these situations by clearly communicating the states they are selecting and the implications for the rest of their experience. When these errors are triggered, do not imply that they are the user’s fault. </p>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h2><strong>General incompatibility </strong></h2>
                    <p>Clarify the reason for and origination of the error. </p>
                    <p>For example, screenshots and premium features are not allowed while in a restricted mode. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/errors/patterns_errors_state1.png"/>
                      </div>
                      <figcaption>
                        <p>Snackbar + special mode indicator</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong>Offline by choice</strong></h2>
                    <p>Display an unobtrusive, persistent indicator when users are offline but try to do tasks that require being online.</p>
                    <p>Examples: </p>
                    <ul class="lst-kix_jj4uoi73ffco-0 start">
                      <li>Placing a call while in airplane mode</li>
                      <li>Music availability while offline</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/errors/patterns_errors_state2.png"/>
                      </div>
                      <figcaption>
                        <p>Snackbar </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/errors/patterns_errors_state3.png"/>
                      </div>
                      <figcaption>
                        <p>Indicator that the device has been placed into airplane mode. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h2><strong>Permission requested</strong></h2>
                    <p>If your app requires user permission before proceeding with an action, include the permission request in the app flow instead of treating it as an error. </p>
                    <p>If permissions are necessary before the first run of an app, consider including them into your app’s first-run experience.</p>
                    <p>Examples: </p>
                    <ul class="lst-kix_jj4uoi73ffco-0">
                      <li>An app’s permissions have changed.</li>
                      <li>In-app purchases have been disabled.</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/errors/patterns_errors_state4.png"/>
                      </div>
                      <figcaption>
                        <p>Dialog </p>
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