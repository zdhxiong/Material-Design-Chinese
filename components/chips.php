<?php
$vars = array(
  'title' => '纸片',
  'category' => '组件',
  'theme_color' => '#3949AB',
  'color_name' => 'indigo',
  'prev_title' => '卡片',
  'prev_path' => 'components/cards',
  'next_title' => '数据表格',
  'next_path' => 'components/data-tables'
);

include $public_files['header'];
?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title">Chips</h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div><p>Chips represent complex entities in small blocks, such as a contact.</p>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module"><p>A chip may contain entities such as a photo, text, rules, an icon, or a contact. </p>
                <p><strong>Contact chips</strong> may represent contact information in a compact way.</p>
              </div>
              <div class="module">
                <h3>Behavior</h3>
                <ul class="lst-kix_jqjmyzcsxhkd-0 start">
                  <li>Selecting a chip opens a full detail view.</li>
                  <li>Chips may be deleted if they display a delete icon.</li>
                </ul>
                <h3>Specs</h3>
                <ul class="lst-kix_spr3tzkz6gly-0 start">
                  <li>Height: 32dp</li>
                  <li>Label: 13sp Roboto Regular, 87% black</li>
                </ul>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/components/chips/components_chips.png"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="chips.html#chips-usage" data-qp-ui-data-id="qp:1">Usage</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="chips.html#chips-behavior" data-qp-ui-data-id="qp:2">Behavior</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="chips.html#chips-contact-chips" data-qp-ui-data-id="qp:3">Contact chips</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="chips.html#chips-specs" data-qp-ui-data-id="qp:4">Specs</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="chips-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            Usage
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div><p>A chip may contain a photo, short title, and brief information. </p>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Types of chips</h1>
                    <p>Chips can be used for various types of entities, including free form text, predefined text, rules, or contacts. Chips may also contain icons.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/chips/components_acux_chips_chiptxt.png"/>
                      </div>
                      <figcaption>
                        <p>Chips with text</p>
                        <p><strong>Chip label</strong></p>
                        <ul class="lst-kix_1wuhlm83l87s-0 start">
                          <li>13sp Roboto Regular</li>
                          <li>87% black</li>
                        </ul>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/chips/components_acux_chips_chipstxticon.png"/>
                      </div>
                      <figcaption>
                        <p>Chips with text and an icon</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="chips-behavior" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Behavior
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div><h1>Opening chips</h1>
              <p>Touching a chip opens a full detailed view (either in a card or full screen) or a menu of options related to that chip. </p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Deleting chips</h1>
                    <p>Chips can be deletable or non-deletable. Display a delete icon if a chip is deletable. </p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/chips/components_acux_chips_deleting.webm" type="video/webm">
                            <source src="../static/media/components/chips/components_acux_chips_deleting.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Users may press the delete icon or use the keyboard “Delete” button to remove a chip. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="chips-contact-chips" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            Contact chips
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
                    <p>Contact information that users have for people may be represented in a compact way using contact chips. The chips are invoked and inserted into a text field (usually the “To” field) when the user starts typing a contact’s name, sees the contact’s addresses, and selects the correct one. Contact chips can be added directly to a text field from a menu of contacts.</p>
                    <p>Contact chips efficiently confirm that the user will be sending their message to the correct person. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/chips/components_chips_contact1.png"/>
                      </div>
                      <figcaption>
                        <p>The user confirms the name(s) of the email recipient(s) on the contact chips. </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/chips/components_chips_contact2.png"/>
                      </div>
                      <figcaption>
                        <p>The user confirms which email address to select on the contact chip. </p>
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
                        <img alt="" src="../static/media/components/chips/components_chips_contact3.png"/>
                      </div>
                      <figcaption>
                        <p>The contact chip has different states: Normal, Focused, Pressed, and Activated. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="chips-specs" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
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
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Single-line chips</h1></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/chips/components_acux_chips_deletable_rl.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Deletable chip</strong></p>
                        <p>Height: 32dp<br>
                          Label left padding: 12dp</p>
                        <p><strong>Remove icon</strong></p>
                        <p>Size: 24dp x 24dp<br>
                          Color &amp; opacity: 54% black<br>
                          Margin: 4dp</p>
                        <p>On desktop, the “Remove” icon is persistent.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/chips/components_acux_chips_nondeletecontact_rl.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Non-d</strong><strong>eletable chip</strong></p>
                        <p>Height: 32dp<br>
                          Label left and right padding: 12dp</p>
                        <p><strong>Contact chip</strong></p>
                        <p>Height: 32dp<br>
                          Label left padding: 8dp<br>
                          Label right padding: 12dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Contact chips</h1>
                    <h2><strong><strong>Closed contact chip</strong></strong></h2>
                    <ul class="lst-kix_kvbtu6ue51j9-0 start">
                      <li>The contact name text is Roboto Regular 14sp.</li>
                      <li>Upon focus, the chip rises to an elevation of 2dp. When pressed, it expands to show alternative addresses for the contact.</li>
                    </ul>
                    <h2><strong><strong>Open contact chip</strong></strong></h2>
                    <ul class="lst-kix_kt2fh1r11a8a-0 start">
                      <li>Contact name text: Roboto Regular 16sp</li>
                      <li>Address text: Roboto Regular 14sp</li>
                      <li>Elevation of the open contact chip is 8dp.</li>
                      <li>On press, the contact chip closes automatically.</li>
                      <li>By default, the top field is activated and focused.</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/chips/components_chips_contact_keyline1.png"/>
                      </div>
                      <figcaption>
                        <p>Contact chip</p>
                        <p>Height: 32dp<br>
                          Title top, bottom, and left padding: 8dp<br>
                          Title right padding: 12dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/chips/components_chips_contact_keyline2.png"/>
                      </div>
                      <figcaption>
                        <p>Focused and activated contact chip </p>
                        <p>Height: 40dp<br>
                          Top and bottom padding: 16dp</p>
                        <p><strong>Unfocused contact chips</strong></p>
                        <p>Top and bottom padding: 20dp</p>
                        <p></p>
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