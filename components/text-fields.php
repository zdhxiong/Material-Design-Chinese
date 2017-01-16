<?php
$vars = array(
  'title' => '文本框',
  'category' => '组件',
  'theme_color' => '#3949AB',
  'color_name' => 'indigo',
  'prev_title' => 'Tab 选项卡',
  'prev_path' => 'components/tabs',
  'next_title' => '工具栏',
  'next_path' => 'components/toolbars'
);

include $public_files['header'];
?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title">Text fields</h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <p>Text fields allow users to input text, <a href="../patterns/selection.html">select text</a>, and lookup data via auto-completion.</p>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>Text fields usually appear in forms. </p>
                <p>Users may enter text, numbers, or mixed-format types of input. </p>
              </div>
              <div class="module">
                <h3><strong>Text field types</strong></h3>
                <p>Single-line<br>
                  Multi-line<br>
                  Full-width</p>
                <h3><strong>Available functionality </strong></h3>
                <p>Character counter<br>
                  Auto-complete<br>
                  Search filter<br>
                  Required fields<br>
                  Password input redaction</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/components/text-fields/components_text_fields.png"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="text-fields.html#text-fields-input" data-qp-ui-data-id="qp:1">Input</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="text-fields.html#text-fields-labels" data-qp-ui-data-id="qp:2">Labels</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="text-fields.html#text-fields-style" data-qp-ui-data-id="qp:3">Style</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="text-fields.html#text-fields-single-line-text-field" data-qp-ui-data-id="qp:4">Single-line text field</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="text-fields.html#text-fields-multi-line-text-field" data-qp-ui-data-id="qp:5">Multi-line text field</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="text-fields.html#text-fields-full-width-text-field" data-qp-ui-data-id="qp:6">Full-width text field</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="text-fields.html#text-fields-character-counter" data-qp-ui-data-id="qp:7">Character counter</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="text-fields.html#text-fields-auto-complete-text-field" data-qp-ui-data-id="qp:8">Auto-complete text field</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="text-fields.html#text-fields-search-filter" data-qp-ui-data-id="qp:9">Search filter</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="text-fields.html#text-fields-required-fields" data-qp-ui-data-id="qp:10">Required fields</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="text-fields.html#text-fields-password-input" data-qp-ui-data-id="qp:11">Password input</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="text-fields-input" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            Input
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
                    <p>Touching a text field makes the two actions occur: </p>
                    <ul class="lst-kix_wp975o1wwfq0-0 start">
                      <li>Places the cursor there</li>
                      <li>Displays the keyboard</li>
                    </ul>
                    <h2>Text field anatomy</h2>
                    <ul class="lst-kix_de6zx7992hd7-0 start">
                      <li><strong>Labels</strong> describe the type of input requested in each field</li>
                      <li><strong>Hint text</strong> is placeholder text that suggests the type of information requested, sometimes in the form of an example</li>
                      <li><strong>Helper text</strong> appears below input fields to provide additional context</li>
                    </ul>
                    <h2>Input types</h2>
                    <p>The type of text field determines what kind of characters are allowed inside the field. The virtual keyboard layout may be optimized for frequently used characters. </p>
                    <p>Common input types for which you should optimize include:</p>
                    <ul class="lst-kix_ndp28ou2ow42-0 start">
                      <li>Number: Phone number, credit card number, PIN</li>
                      <li>Text: Proper name, username, URL</li>
                      <li>Mixed format: Email address, street address, search query</li>
                    </ul>
                    <h2>Auto-capitalization</h2>
                    <p>The first letter in each text field should be capitalized where appropriate and if required by the locale, as well as the first letter of each sentence. For example, this is especially relevant for input fields that: </p>
                    <ul class="lst-kix_6sfpgcsqxyz9-0 start">
                      <li>Ask to name something, such as a Bluetooth device, user, fingerprint, or alarm</li>
                      <li>Contain sentence-like messages, such as text messages</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/text-fields/components_textfields_anatomy.png"/>
                      </div>
                      <figcaption>
                        <p>1. Label<br>
                        2. Hint text<br>
                        3. Helper text </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="text-fields-labels" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Labels
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
                    <p>When the user engages with the text input field, the floating inline labels move to float above the field. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/text-fields/components_textfields_labels1.png"/>
                      </div>
                      <figcaption>
                        <p>Floating inline labels</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/text-fields/components_textfields_labels2.png"/>
                      </div>
                      <figcaption>
                        <p>Floating inline labels</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <h1>Label color</h1>
                    <p>The label’s color should reflect your app’s <a href="../style/color.html">color palette</a>, while also meeting appropriate contrast ratios. </p>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Light theme</h1>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/text-fields/components_textfields_labels3.png"/>
                      </div>
                      <figcaption>
                        <p>Floating inline labels light theme for: normal with hint text/label, focus, normal with input text, and label and disabled states </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module"><h1>Dark theme</h1></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/text-fields/components_textfields_labels4.png"/>
                      </div>
                      <figcaption>
                        <p>Floating inline labels dark theme for: normal with hint text/label, focus, normal with input text, and label and disabled states</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Specs</h1>
                    <p><strong>Floating label </strong></p>
                    <ul class="lst-kix_id4u72goxoo2-0 start">
                      <li>Roboto Regular 12sp</li>
                    </ul>
                    <p><strong>Hint and input text</strong></p>
                    <ul class="lst-kix_qvs1r256gftv-0 start">
                      <li>Regular labels: Roboto Regular 16sp</li>
                      <li>Dense labels: Roboto Regular 13sp</li>
                    </ul>
                    <p>Before input is entered, floating label text is 16sp (or 13sp for dense labels). As text is entered, the label moves to a new location above the input field and the label text becomes 12sp (for both regular and dense labels).</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/text-fields/components_textfields_labels5.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Floating labels<br>
                          </strong>Tile height: 72dp</p>
                        <p><strong>Label text</strong><br>
                          Font size: 12sp<br>
                          Padding above: 16dp<br>
                          Padding below: 8dp<br></p>
                        <p><strong>Hint and input text</strong><br>
                          Font size: 16sp<br>
                          Padding below: 8dp</p>
                        <p><strong>Input line</strong><br>
                          Padding below: 8dp</p>
                        <p><br></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/text-fields/components_textfields_labels5_dense_2.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Dense floating labels<br>
                          </strong>Tile height: 60dp<br></p>
                        <p><strong>Label text<br>
                          </strong>Font size: 12sp<br>
                          Padding above: 12dp<br>
                          Padding below: 4dp<br>
                          <br>
                          <strong>Hint and input text</strong><br>
                          Font size: 13sp<br>
                          Padding below: 12dp<br></p>
                        <p><strong>Input line</strong><br>
                          Padding below: 4dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="text-fields-style" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
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
              <div class="col-list">
                <section class="module col-1">
                  <div class="module">
                    <h1>Density </h1>
                    <p>When the mouse and keyboard are the primary input methods, measurements may be condensed to accommodate denser layouts.</p>
                  </div>
                </section>
                <section class="module col-1">
                  <div class="module">
                    <h1>Color</h1>
                    <p>Text fields should reflect your product’s <a href="../style/color.html">color palette</a>. The following color applications are recommended:</p>
                    <ul class="lst-kix_qlbh83jeu10g-0 start">
                      <li><strong>Text fields</strong><strong> and text cursor: </strong>Color these with your palette’s accent color, or a contrasting color</li>
                      <li><strong>Error states:</strong> Use a contrasting color for error states, such as a warmer hue (for example, red or orange)</li>
                    </ul>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Light theme - Dark text (#000000)</p></td>
                        <td colspan="1" rowspan="1"><p>Opacity</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Normal</p></td>
                        <td colspan="1" rowspan="1"><p>38%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Hover</p></td>
                        <td colspan="1" rowspan="1"><p>54%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Press</p></td>
                        <td colspan="1" rowspan="1"><p>54%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Focus</p></td>
                        <td colspan="1" rowspan="1"><p>87%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Normal with input text</p></td>
                        <td colspan="1" rowspan="1"><p>87%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Error</p></td>
                        <td colspan="1" rowspan="1"><p>100%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Disabled</p></td>
                        <td colspan="1" rowspan="1"><p>38%</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Dark theme - Light text (#ffffff)</p></td>
                        <td colspan="1" rowspan="1"><p>Opacity</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Normal</p></td>
                        <td colspan="1" rowspan="1"><p>50%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Hover</p></td>
                        <td colspan="1" rowspan="1"><p>70%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Press</p></td>
                        <td colspan="1" rowspan="1"><p>70%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Focus</p></td>
                        <td colspan="1" rowspan="1"><p>100%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Normal with input text</p></td>
                        <td colspan="1" rowspan="1"><p>100%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Error</p></td>
                        <td colspan="1" rowspan="1"><p>100%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Disabled</p></td>
                        <td colspan="1" rowspan="1"><p>50%</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="text-fields-single-line-text-field" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            Single-line text field
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
                    <h1>Single-line fields </h1>
                    <p>Single-line fields automatically scroll their content to the left as the text input cursor reaches the right edge of the input field. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/text-fields/components_textfields_single1.png"/>
                      </div>
                      <figcaption>
                        <p>Single-line text field</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/text-fields/components_textfields_single2.png"/>
                      </div>
                      <figcaption>
                        <p>Single-line text field</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>The color you choose should reflect your app’s color palette.</p>
                    <h1>Light theme</h1>
                    <ul class="lst-kix_qdpl7zkwcukg-0 start">
                      <li>Hint and input font: Roboto Regular 16sp</li>
                      <li>Tile height: 48dp</li>
                      <li>Text top and bottom padding: 16dp</li>
                      <li>Text field divider padding: 8dp</li>
                      <li>Hint text for pressed state: 54% black</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/text-fields/components_textfields_single4.png"/>
                      </div>
                      <figcaption>
                        <p>Single-line text field light theme</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Dark theme</h1>
                    <ul class="lst-kix_qdpl7zkwcukg-0">
                      <li>Hint text for pressed state: 70% white</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/text-fields/components_textfields_single5.png"/>
                      </div>
                      <figcaption>
                        <p>Single-line text field dark theme</p>
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
                        <img alt="" src="../static/media/components/text-fields/components_textfields_single6.png"/>
                      </div>
                      <figcaption>
                        <p>Single-line text field</p>
                        <p>Height: 48dp<br>
                          Padding above and below text: 16dp<br>
                          Padding below divider: 8dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/text-fields/components_textfields_single6_dense.png"/>
                      </div>
                      <figcaption>
                        <p>Dense single-line text field</p>
                        <p>Hint and input text: 13sp<br>
                          Height: 40dp<br>
                          Padding above and below text: 12dp<br>
                          Padding below divider: 4dp<br></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Light theme with icon</h1>
                    <ul class="lst-kix_e7t6767m6fz9-0 start">
                      <li>Hint and input font: Roboto Regular 16sp</li>
                      <li>Tile height: 48dp</li>
                      <li>Text top and bottom padding: 16dp</li>
                      <li>Text field divider padding: 8dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/text-fields/components_textfields_single7.png"/>
                      </div>
                      <figcaption>
                        <p>Light theme with: normal with hint text, focus, and normal with input text </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Dark theme with icon</h1></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/text-fields/components_textfields_single8.png"/>
                      </div>
                      <figcaption>
                        <p>Dark theme with: normal with hint text, focus, and normal with input text </p>
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
                        <img alt="" src="../static/media/components/text-fields/components_textfields_single9.png"/>
                      </div>
                      <figcaption>
                        <p>Single-line text field with icon</p>
                        <p>Height: 48dp<br>
                          Padding above and below text: 16dp<br>
                          Padding below divider: 8dp<br>
                          Icon: 24dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/text-fields/components_textfields_single9_dense.png"/>
                      </div>
                      <figcaption>
                        <p>Dense single-line text field with icon</p>
                        <p>Hint and input text: 13sp<br>
                          Height: 40dp<br>
                          Padding above and below text: 12dp<br>
                          Padding below divider: 4dp<br>
                          Icon: 20dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="text-fields-multi-line-text-field" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:5">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:5">
            Multi-line text field
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
                    <p>Multi-line text fields automatically break to a new line for overflow text and scroll vertically when the cursor reaches the lower edge.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/text-fields/components_textfields_multiline2.png"/>
                      </div>
                      <figcaption>
                        <p>Multi-line text field</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>The color you choose should reflect your UI’s color scheme.</p>
                    <h1>Light theme</h1>
                    <ul class="lst-kix_5i8cjrynp4k3-0 start">
                      <li>Hint and input font: Roboto Regular 16sp</li>
                      <li>Label font: Roboto Regular 12sp</li>
                      <li>Text top and bottom padding: 16dp</li>
                      <li>Text field divider padding: 8dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/text-fields/components_textfields_multiline3.png"/>
                      </div>
                      <figcaption>
                        <p>Multi-line text field light theme for: normal with hint text, focused, and normal
                        with multi-line input text</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Dark theme</h1></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/text-fields/components_textfields_multiline4.png"/>
                      </div>
                      <figcaption>
                        <p>Dark theme for multi-line text field for these states: normal with hint text, focus, and normal with multi-line input text</p>
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
                        <img alt="" src="../static/media/components/text-fields/components_textfields_multiline5.png"/>
                      </div>
                      <figcaption>
                        <p>Dark theme specs:</p>
                        <p>Padding above and below label: 16dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/text-fields/components_textfields_multiline5_dense.png"/>
                      </div>
                      <figcaption>
                        <p>Dense dark theme specs:</p>
                        <p>Label and input text: 13sp<br>
                          Label text top and bottom padding: 12dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="text-fields-full-width-text-field" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:6">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:6">
            Full-width text field
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
                    <p>Full-width text fields are useful for more in-depth tasks.</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/text-fields/components_textfields_full1.png"/>
                      </div>
                      <figcaption>
                        <p>Full-width text field</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/text-fields/components_textfields_full2.png"/>
                      </div>
                      <figcaption>
                        <p>Full-width text field</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Single and multi-line fields</h1>
                    <ul class="lst-kix_3e5kow19847j-0 start">
                      <li>Hint and input font: Roboto Regular 16sp</li>
                      <li>Top and bottom padding for text: 20dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/text-fields/components_textfields_full3.png"/>
                      </div>
                      <figcaption>
                        <p>Single and multi-line fields for these states: normal, focused, and normal with multi-line input text</p>
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
                        <img alt="" src="../static/media/components/text-fields/components_textfields_full4.png"/>
                      </div>
                      <figcaption>
                        <p>Specs for full-width single line text field:</p>
                        <p>Height: 56dp<br>
                          Text top and bottom padding: 20dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/text-fields/components_textfields_full4_dense.png"/>
                      </div>
                      <figcaption>
                        <p>Specs for dense full-width single line text field:</p>
                        <p>Hint and input text: 13sp<br>
                          Height: 48dp<br>
                          Text top and bottom padding: 16dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="text-fields-character-counter" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:7">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:7">
            Character counter
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div><p>Use a character counter in fields where a character restriction is in place. </p>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module"><h1>Single line with character counter</h1>
                    <p>Counter text: Roboto Regular 12sp</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/text-fields/components_textfields_counter1.png"/>
                      </div>
                      <figcaption>
                        <p>Single line with character counter with a green line showing the user has not
                        exceeded the character restriction </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module">
                    <h3>
                      <figure class="s-tag-media">
                        <div class="media">
                          <img alt="" src="../static/media/components/text-fields/components_textfields_counter2.png"/>
                        </div>
                      </figure>
                    </h3>
                    <p>Single line with character counter with a red line showing that the character restriction has been exceeded</p>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Multi-line with character counter</h1>
                    <p>Counter text: Roboto Regular 12sp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/text-fields/components_textfields_counter3.png"/>
                      </div>
                      <figcaption>
                        <p>Multi-line with character counter with a green line showing the user has not exceeded the character restriction</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/text-fields/components_textfields_counter4.png"/>
                      </div>
                      <figcaption>
                        <p>Multi-line with character counter with a red line showing that the character restriction has been exceeded</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h1>Full-width text field with character counter</h1>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/text-fields/components_textfields_counter7.png"/>
                      </div>
                      <figcaption>
                        <p>Full-width text field with character counter</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/text-fields/components_textfields_counter8.png"/>
                      </div>
                      <figcaption>
                        <p>Single-line focus and multi-line focus text fields</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="text-fields-auto-complete-text-field" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:8">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:8">
            Auto-complete text field
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
                    <p>Use auto-complete text fields to present real-time suggestions or completions in dropdowns, so users can enter information more accurately and efficiently.</p>
                    <p>Autocomplete is especially valuable for users with limited text literacy or who have difficulty with spelling, especially if they are using a non-native language. (Some users have to navigate the Internet in English because there are no localized pages for their native languages.)</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/text-fields/components_textfields_auto1.png"/>
                      </div>
                      <figcaption>
                        <p>Auto-complete text field</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/text-fields/components_textfields_auto2.png"/>
                      </div>
                      <figcaption>
                        <p>Auto-complete text field in dropdown</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Inset auto-complete</h1>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/text-fields/components_textfields_auto4.png"/>
                      </div>
                      <figcaption>
                        <p>Inset auto-complete</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/text-fields/components_textfields_auto5.png"/>
                      </div>
                      <figcaption>
                        <p>Inset auto-complete</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Full-width inline auto-complete</h1>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/text-fields/components_textfields_auto7.png"/>
                      </div>
                      <figcaption>
                        <p>Normal with hint text</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/text-fields/components_textfields_auto8.png"/>
                      </div>
                      <figcaption>
                        <p>Focus with suggestions</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>In-line auto-complete</h1>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/text-fields/components_textfields_auto10.png"/>
                      </div>
                      <figcaption>
                        <p>In-line auto-complete</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="text-fields-search-filter" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:9">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:9">
            Search filter
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
                    <p>The app bar can act as a text input field. As the user types, the content underneath is filtered and sorted. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/text-fields/components_textfields_search1.png"/>
                      </div>
                      <figcaption>
                        <p>The app bar acts as a text input field.. </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/text-fields/components_textfields_search2.png"/>
                      </div>
                      <figcaption>
                        <p>The app bar acts as a text input field and the content underneath is filtered and sorted. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="text-fields-required-fields" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:10">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:10">
            Required fields
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
                  <div class="module"><p>To indicate that a field is required, display an asterisk (*) next to the field. At the bottom of the form, include a note explaining that an asterisk indicates a required field. </p>
                    <p><strong>Helper text</strong></p>
                    <p>Helper text should appear below the text field and either be persistently visible, or only visible on focus. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/text-fields/forms-supportive-content-v3_xhdpi.webm" type="video/webm">
                            <source src="../static/media/components/text-fields/forms-supportive-content-v3_xhdpi.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Required fields are marked with an asterisk. Helper text can either be visible on focus, or visible persistently.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h1>Hint text </h1>
                    <p>Hint text should display the type of information requested in a text field. It may be displayed in the form of an example, such as a placeholder phone number or URL. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/text-fields/components_textfields_required6.png"/>
                      </div>
                      <figcaption>
                        <p>Hint text gives examples of text and numbers. The hint text field may also have a dropdown menu, where the user either types in their choice or selects one from the dropdown menu. </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="text-fields-password-input" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:11">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:11">
            Password input
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
                    <p>Password input is disguised by default. Midline ellipses are displayed to represent each character of a password entered (such as •••••••). </p>
                    <h2>Enabling and disabling visibility</h2>
                    <p>When the visibility icon is displayed with a text field, it indicates whether or not that field’s input is visible. </p>
                    <p>A text field’s visibility may be toggled on or off using the icon: </p>
                    <p><strong>Visibility enabled</strong></p>
                    <p>The visibility icon is displayed, with the password visible</p>
                    <p><strong>Visibility disabled</strong></p>
                    <p>The invisibility icon is displayed, with the password represented by midline ellipses</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/text-fields/components_textfields_passwordinput.png"/>
                      </div>
                      <figcaption>
                        <p>The visibility icon appears on the text field, off to the side.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-module col-2">
                  <div class="module">
                    <p>The following transparency values are used for password text:</p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p><strong>Normal with hint tex</strong><strong>t</strong></p></td>
                        <td colspan="1" rowspan="1"><p><strong>Visible</strong></p></td>
                        <td colspan="1" rowspan="1"><p><strong>Nonvisible</strong></p></td>
                        <td colspan="1" rowspan="1"><p>Error</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                          <p>Icon: 38%</p>
                          <p>Hint text: 38%</p>
                          <p>Helper text: 54%</p>
                        </td>
                        <td colspan="1" rowspan="1">
                          <p>Icon: 54%</p>
                          <p>Floating hint text: 100%</p>
                          <p>Input text: 87%</p>
                          <p>Helper text: 54%</p>
                        </td>
                        <td colspan="1" rowspan="1">
                          <p>Icon: 54%</p>
                          <p>Floating hint text: 100%</p>
                          <p>Input ellipses: 87%</p>
                          <p>Helper text: 54%</p>
                        </td>
                        <td colspan="1" rowspan="1">
                          <p>Icon: 100%</p>
                          <p>Floating hint text: 100%</p>
                          <p>Input text: N/A</p>
                          <p>Helper text: 100%</p>
                        </td>
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

<?php
include $public_files['footer'];
?>