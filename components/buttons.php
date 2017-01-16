<?php
$vars = array(
  'title' => '按钮',
  'category' => '组件',
  'theme_color' => '#3949AB',
  'color_name' => 'indigo',
  'prev_title' => '底部操作表',
  'prev_path' => 'components/bottom-sheets',
  'next_title' => '按钮: 浮动操作按钮',
  'next_path' => 'components/buttons-floating-action-button'
);

include $public_files['header'];
?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title">Buttons</h1>

    <div class="chapter-content">
      <div class="article-content chapter-intro">
        <div>
          <p>Buttons communicate the action that will occur when the user touches them.</p>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>Material buttons trigger an ink reaction on press. They may display text, imagery, or both. Flat buttons and raised buttons are the most commonly used types. </p>
                <p>Additional button types include:</p>
                <ul class="lst-kix_cps83lvbp1jm-0 start">
                  <li><strong>Persistent footer</strong> buttons are flat buttons that may be used in screen footers or dialogs.</li>
                  <li><strong>Dropdown buttons</strong> display multiple selections.</li>
                  <li><strong>Toggle buttons</strong> group related options. Icon toggles allow a single choice to be selected or deselected.</li>
                </ul>
              </div>
              <div class="module">
                <h3>Flat buttons</h3>
                <p>Flat buttons are text-only buttons. <br>
                  They may be used in dialogs, toolbars, or inline.<br>
                  They do not lift, but fill with color on press. </p>

                <h3>Raised buttons</h3>
                <p>Raised buttons are rectangular-shaped buttons.<br>
                  They may be used inline. <br>
                  They lift and display ink reactions on press.</p>

                <h3>Elevation </h3>
                <p>Flat buttons: 0dp<br>
                  Raised buttons: 2dp</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/components/buttons/components_buttons.png"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="buttons.html#buttons-button-types" data-qp-ui-data-id="qp:1">Button types</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="buttons.html#buttons-usage" data-qp-ui-data-id="qp:2">Usage</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="buttons.html#buttons-style" data-qp-ui-data-id="qp:3">Style</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="buttons.html#buttons-flat-buttons" data-qp-ui-data-id="qp:4">Flat buttons</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="buttons.html#buttons-raised-buttons" data-qp-ui-data-id="qp:5">Raised buttons</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="buttons.html#buttons-persistent-footer-buttons" data-qp-ui-data-id="qp:6">Persistent footer buttons</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="buttons.html#buttons-dropdown-buttons" data-qp-ui-data-id="qp:7">Dropdown buttons</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="buttons.html#buttons-toggle-buttons" data-qp-ui-data-id="qp:8">Toggle buttons</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="buttons-button-types" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            Button types
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>There are three standard types of buttons: </p>
              <ul class="lst-kix_4tql5k8r9fvj-0 start">
                <li><a href="buttons-floating-action-button.html">Floating action button</a>: A circular material button that lifts and displays an ink reaction on press.</li>
                <li>Raised button: A typically rectangular material button that lifts and displays ink reactions on press.</li>
                <li>Flat button: A button made of ink that displays ink reactions on press but does not lift.</li>
              </ul>
              <div class="col-list">
                <section class="figure-figure-figure col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_usage1.png"/>
                      </div>
                      <figcaption>
                        <p>Floating action button</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_usage2.png"/>
                      </div>
                      <figcaption>
                        <p>Raised button</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_usage3.png"/>
                      </div>
                      <figcaption>
                        <p>Flat button</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="figure-figure-figure col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_usage4.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a floating action button</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_usage5.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a raised button </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_usage6.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a flat button</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Choosing button style</h1>
                    <p>Choosing a button style depends on the primacy of the button, the number of containers on screen, and the screen layout. </p>
                    <p><strong>Function:</strong> Is it important and ubiquitous enough to be a floating action button?</p>
                    <p><strong>Dimension:</strong> Choose raised or flat depending on the container it will be in and how many z-space layers you have on screen. There should not be many layers of objects on the screen.</p>
                    <p><strong>Layout:</strong> Use primarily one type of button per container. Only mix button types when you have a good reason to, such as emphasizing an important function.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_usage_main.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="buttons-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
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
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <h1>Button types</h1>
                    <p>The type of button used should be suited to the context in which it appears.</p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Context </p></td>
                        <td colspan="1" rowspan="1"><p>Button type</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Dialogs</p></td>
                        <td colspan="1" rowspan="1"><p>Use <a href="buttons.html#buttons-flat-buttons">flat buttons</a> in dialogs.</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Inline</p></td>
                        <td colspan="1" rowspan="1"><p>Depending on your layout, use <a href="buttons.html#buttons-raised-buttons">raised buttons</a> or <a href="buttons.html#buttons-flat-buttons">flat buttons</a> for inline buttons.</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Persistent availability</p></td>
                        <td colspan="1" rowspan="1"><p>If your app requires actions to be persistent and readily available to the user, consider using the floating action button or <a href="buttons.html#buttons-persistent-footer-buttons">persistent footer buttons</a>.</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module">
                    <h1>Recommended button placement</h1>
                    <p><strong>Standard dialogs </strong></p>
                    <p>Button alignment on screen: right </p>
                    <p>Place the affirmative button on the right, the dismissive button on the left.</p>
                  </div>
                  <div class="module"></div>
                  <div class="module"></div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <p><strong>Forms</strong></p>
                    <p>Button alignment on screen: Left</p>
                    <p>Place the affirmative button on the left, the dismissive button on the right.</p>
                  </div>
                  <div class="module"></div>
                  <div class="module"></div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <p><strong>Cards</strong></p>
                    <p>Buttons are best placed on the left side of a card to increase their visibility. However, as cards have flexible layouts, buttons may be placed in a location suited to the content and context, while maintaining consistency within the product.</p>
                  </div>
                  <div class="module"></div>
                  <div class="module"></div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <p><strong>Non-standard dialogs and modal windows</strong></p>
                    <p>Button placement in non-standard dialogs and modal windows depends on the complexity of the content they contain. </p>
                    <p>For dialogs with relatively simple content, it is recommended to place buttons on the right side of a dialog, with the affirmative button to the right of the dismissive button.</p>
                    <p>For lengthy or complex forms, it is recommended to place buttons on the left of the form, with the affirmative button to the left of the dismissive button.</p>
                  </div>
                  <div class="module"></div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="buttons-style" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            Style
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <h1>Typography</h1>
              <p>Button text should be capitalized in languages that have capitalization. For other languages, colored text on flat buttons distinguishes them from normal text.</p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Accessibility</h1>
                    <p>To ensure usability for people with disabilities, give buttons a height of 36dp and give touchable targets a minimum height of 48dp.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_keyline4.png"/>
                      </div>
                      <figcaption>
                        <p>Button height: 36dp<br>
                        Touchable target height: 48dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h1>Corner radius</h1>
                    <p>Buttons should have a 2dp corner radius.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_radius.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>Buttons should have a 2dp corner radius </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module">
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Density</h1>
                    <p>When mouse and keyboard are the primary input methods, button measurements can be slightly reduced to accommodate dense UIs. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_main18.png"/>
                      </div>
                      <figcaption>
                        <p> Default Button</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_main20.png"/>
                      </div>
                      <figcaption>
                        <p>Button text: 14pt Roboto medium<br>
                        Button height: 36dp<br>
                        Button text left and right padding: 16dp<br>
                        Corner radius: 2dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_main19.png"/>
                      </div>
                      <figcaption>
                        <p> Dense Button</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_main21.png"/>
                      </div>
                      <figcaption>
                        <p>Button text: 13pt Roboto medium<br>
                        Button height: 32dp<br>
                        Button text left and right padding: 16dp<br>
                        Corner radius: 2dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h1>Size and padding</h1>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_keyline1.png"/>
                      </div>
                      <figcaption>
                        <p>Examples of flat buttons in dialogs </p>
                        <p><strong>Flat Button</strong><br>
                          Height: 36dp<br>
                          Minimum width: 88dp<br>
                          Touch target height: 48dp<br>
                          Corner radius: 2dp<br>
                          Horizontal margin: 8dp<br>
                          Horizontal padding: 8dp </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="buttons-flat-buttons" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            Flat buttons
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
                    <h1>Usage</h1>
                    <p>Flat buttons are printed on material. They do not lift, but fill with color on press.</p>
                    <p>Use flat buttons in the following locations:</p>
                    <ul class="lst-kix_sx4zu9flaq2f-0 start">
                      <li>On toolbars</li>
                      <li>In dialogs, to unify the button action with the dialog content</li>
                      <li>Inline, with padding, so the user can easily find them</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_main9.png"/>
                      </div>
                      <figcaption>
                        <p>Flat buttons are appropriate in dialogs.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_main10.png"/>
                      </div>
                      <figcaption>
                        <p>Flat buttons minimize distraction from content.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_main11.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>Correct use of flat buttons.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_main12.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>These raised buttons appear too prominently.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Specs</h1></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_main13.png"/>
                      </div>
                      <figcaption>
                        <p>Flat Light/Light theme</p>
                        <p>Minimum width: 88dp<br>
                          Height: 36dp<br>
                          Corner radius: 2dp<br>
                          Pressed: 40% #999999<br>
                          Disabled text: 26% #000000</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_main14.png"/>
                      </div>
                      <figcaption>
                        <p>Flat Dark/Dark theme</p>
                        <p>Minimum width: 88dp<br>
                          Height: 36dp<br>
                          Corner radius: 2dp<br>
                          Pressed: 25% #CCCCCC<br>
                          Disabled text: 30% #FFFFFF</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_usage_dialogs1.png"/>
                      </div>
                      <figcaption>
                        <p>Dialog text padding: 24dp <br>
                        Dialog button container height: 52dp<br>
                        Dialog buttons: 8dp padding from container edges, aligned to the right of container (for LTR
                        scripts)</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_usage_dialogs2.png"/>
                      </div>
                      <figcaption>
                        <p>Flat buttons in dialogs </p>
                        <p><strong>Dialog buttons</strong><br>
                          Button height: 36dp<br>
                          Button top margin: 24dp<br>
                          Button padding: 8dp<br>
                          Button alignment: Right edge for LTR scripts<br>
                          Button width: Varies based on button text length</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_focus_flat.png"/>
                      </div>
                      <figcaption>
                        <p>Flat buttons with 12% opacity on focus </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h1>Behavior</h1>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/buttons/components-buttons-flatbuttons.webm" type="video/webm">
                            <source src="../static/media/components/buttons/components-buttons-flatbuttons.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Flat buttons</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="buttons-raised-buttons" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:5">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:5">
            Raised buttons
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
                    <h1>Usage</h1>
                    <p>Raised buttons add dimension to mostly flat layouts. They emphasize functions on busy or wide
                      spaces.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_main5.png"/>
                      </div>
                      <figcaption>
                        <p>Use raised buttons to give more prominence to actions in layouts with a lot of varying content.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_main6.png"/>
                      </div>
                      <figcaption>
                        <p>Raised buttons can help delineate sections of content on a page.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_main7.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>Raised buttons stand out more than flat buttons.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_main8.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>Don’t use flat buttons in UIs where they would be difficult to see.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>Raised buttons behave like a piece of material resting on another sheet – they lift and fill with color on press. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_main15.png"/>
                      </div>
                      <figcaption>
                        <p>Raised Light/Light theme</p>
                        <p>Minimum width: 88dp <br>
                          Height: 36dp <br>
                          Corner radius: 2dp<br>
                          Disabled text: 26% #000000<br>
                          Disabled button: 12% #000000</p>
                        <p>Focused:12% #000000 shade over the color</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_main16.png"/>
                      </div>
                      <figcaption>
                        <p>Raised Dark/Dark theme</p>
                        <p>Minimum width: 88dp <br>
                          Height: 36dp <br>
                          Corner radius: 2dp<br>
                          Normal color: 500 <br>
                          Pressed color: 700 <br>
                          Disabled text: 30% #FFFFFF <br>
                          Disabled button: 12% #FFFFFF</p>
                        <p>Focused:12% #000000 shade over the color</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h2><strong>Button Elevation</strong></h2>
                    <p>Raised buttons have a default elevation of 2dp.</p>
                    <p>On desktop, raised buttons can gain this elevation on hover.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_main17.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Dark/Light</strong> <strong>theme</strong></p>
                        <p>Minimum width: 88dp <br>
                          Height: 36dp <br>
                          Elevation: 0dp<br>
                          Disabled text: 30% #FFFFFF<br>
                          Disabled button: 12% #FFFFFF</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-figure col-3">
                  <div class="module">
                    <h1>Behavior</h1></div>
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/buttons/components-buttons-raisedbuttons.webm" type="video/webm">
                            <source src="../static/media/components/buttons/components-buttons-raisedbuttons.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Raised buttons</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="buttons-persistent-footer-buttons" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:6">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:6">
            Persistent footer buttons
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
                    <p>If your app requires actions to be persistent and readily available to the user, consider using the floating action button or persistent footer buttons.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_keyline2.png"/>
                      </div>
                      <figcaption>
                        <p>Persistent footer buttons are 48dp tall. </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_usage_buttons4.png"/>
                      </div>
                      <figcaption>
                        <p>Example of persistent footer buttons</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <p>Do not use raised buttons within persistent button areas.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_keyline3.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module">
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>A persistent footer button may be used for scrollable dialogs when a divider is added.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_usage_buttons5.png"/>
                      </div>
                      <figcaption>
                        <p>Persistent footer button in dialog</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_usage_buttons6.png"/>
                      </div>
                      <figcaption>
                        <p>Persistent footer button in scrollable dialog</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="buttons-dropdown-buttons" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:7">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:7">
            Dropdown buttons
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
                    <h1>Mobile dropdown buttons</h1>
                    <h2><strong>Dropdown button</strong></h2>
                    <p>A dropdown button selects between multiple selections. The button displays the current state and a down arrow. Available states may be shown as a list of strings, a palette, or icons, for example.</p>
                    <p>When a user interacts with the button, a menu covers the button and displays the possible states. Pressing a state dismisses the menu and updates the button to display this new state. </p>
                    <p>Scrolling within the dropdown behaves the same way a menu scrolls.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_dropdown1.png"/>
                      </div>
                      <figcaption>
                        <p>Closed dropdown button, open dropdown menu, and selected dropdown menu</p>
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
                        <img alt="" src="../static/media/components/buttons/components_buttons_mobile2.png"/>
                      </div>
                      <figcaption>
                        <p>Generic dropdown button with a list menu</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong>Generic overflow dropdown button</strong></h2>
                    <p>The generic overflow dropdown button displays an arrow or menu button by default. When the button is pressed, the menu appears. Pressing an option on the menu navigates to further settings for that option. </p>
                    <h2><strong>Segmented dropdown button</strong></h2>
                    <p>A segmented dropdown has two sections: the current state and the dropdown arrow icon. Pressing the current state will cause that state’s action to fire within the screen. Pressing the dropdown arrow will display all the state options. Selecting one will change the displayed state. </p>
                    <h2><strong>Editable segmented dropdown button</strong></h2>
                    <p>This button has a segmented dropdown, where the displayed state is text editable, such as a font size picker. Pressing the current state causes both that state’s action to fire and makes the displayed state editable. Pressing the arrow displays all the state options. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_dropdown2.png"/>
                      </div>
                      <figcaption>
                        <p>Generic, segmented, and editable overflow dropdown buttons in normal, hover, focus, pressed, and selecting states </p>
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
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/buttons/components-buttons-otherbuttons-060203_MobileDropdowns_xhdpi_006.webm" type="video/webm">
                            <source src="../static/media/components/buttons/components-buttons-otherbuttons-060203_MobileDropdowns_xhdpi_006.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Animation of dropdown button</p>
                        <p><a href="https://www.google.com/url?q=https://drive.google.com/a/google.com/file/d/0B4zh50KRqyzMVzB1bl9aZDdkZzQ/edit?usp%3Dsharing&amp;sa=D&amp;ust=1481817981708000&amp;usg=AFQjCNEWD7fWvP4qJ7clYrALLSScllR3Ow" target="_blank"> </a></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Desktop dropdowns</h1>
                    <p>Desktop app bar specs<br>
                    </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_dropdown3.png"/>
                      </div>
                      <figcaption>
                        <p>Desktop dropdown</p>
                        <p>Top and bottom padding: 16dp<br>
                          Left padding: 24dp<br>
                          Right margin: 16dp<br>
                          Horizontal space between font styles: 24dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-module col-2">
                  <div class="module"></div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="buttons-toggle-buttons" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:8">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:8">
            Toggle buttons
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
                    <p>Toggle buttons may be used to group related options. Arrange layout and spacing to convey that certain toggle buttons are part of a group.</p>
                    <p>Focus and pressed states may reinforce that toggles are part of a group. For example, when one button segment is focused, focus may be displayed simultaneously on the rest of the segment.</p>
                    <p>Toggle button requirements:</p>
                    <ul class="lst-kix_7vmhian9fzi5-0 start">
                      <li>Have at least three toggle buttons in a group</li>
                      <li>Label buttons with text, an icon, or both</li>
                    </ul>
                    <p>The following combinations are recommended:</p>
                    <ul class="lst-kix_7vmhian9fzi5-0">
                      <li>Multiple and unselected</li>
                      <li>Exclusive and unselected</li>
                      <li>Exclusive only</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_togglebuttons1.png"/>
                      </div>
                      <figcaption>
                        <p>Exclusive selection</p>
                        <p>Text justification toggle buttons present options for left, right, center, full, and justified text with only one item available for selection at a time. Selecting one option deselects any other.</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_togglebuttons3.png"/>
                      </div>
                      <figcaption>
                        <p>No options are selected</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_togglebuttons2.png"/>
                      </div>
                      <figcaption>
                        <p>Multiple selection</p>
                        <p>Logically-grouped options, like Bold, Italic, and Underline, allow multiple options to be selected.</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_togglebuttons4.png"/>
                      </div>
                      <figcaption>
                        <p>One option is selected</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module"></div>
                  <div class="module"></div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Icon toggles </h1>
                    <p>Icons are appropriate for toggle buttons that allow a single choice to be selected or deselected, such as adding or removing a star to an item.</p>
                    <p>They are best located in app bars, toolbars, action buttons or toggles.</p>
                    <p>Icon toggles may display bounded or unbounded ink <a href="../motion/choreography.html#choreography-radial-reaction">surface reaction</a> ripples beyond their touch-target bounds.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_other1.png"/>
                      </div>
                      <figcaption>
                        <p>Icon toggles in normal, hover, focused, pressed, and inactive states </p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/inline-components_buttons_toggleicons.png"/>
                      </div>
                      <figcaption>
                        <p>The icon toggle focus indicator color and opacity are related to the color of the icon. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php
include $public_files['footer'];
?>