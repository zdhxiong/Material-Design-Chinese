<?php
$vars = array(
  'title' => 'Selection',
  'category' => '模式',
  'theme_color' => '#FB8C00',
  'color_name' => 'orange',
  'prev_title' => 'Search',
  'prev_path' => 'patterns/search',
  'next_title' => 'Settings',
  'next_path' => 'patterns/settings'
);

include $public_files['header'];
?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title">Selection</h1>
    
    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>Selection enables user choices through gestures and visual cues.</h1>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p><strong>Checkboxes</strong> indicate completion, such as checking items off a list.</p>
                <p><strong>Text selection</strong> is indicated by highlighting a segment of text.</p>
              </div>
              <div class="module">
                <h3>Types of selection</h3>
                <p>Item selection<br>
                  Text selection</p>
                <h3>Selection gestures</h3>
                <ul class="lst-kix_hgumxa1xlv11-0 start">
                  <li>A long-press, touch, or mousedown that’s held in the same position for a moment</li>
                  <li>A two-finger touch (touch devices only)</li>
                </ul>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/patterns/selection/patterns_selection.png"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="selection.html#selection-usage" data-qp-ui-data-id="qp:1">Usage</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="selection.html#selection-item-selection" data-qp-ui-data-id="qp:2">Item selection</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="selection.html#selection-text-selection" data-qp-ui-data-id="qp:3">Text selection</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">
        <div id="selection-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            Usage
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div><h1>The selection gesture</h1>
              <p>The global gesture to select data is a long-press, touch, or mousedown that’s held in the same position for a moment. A two-finger touch may also trigger selection on touch devices.</p>
              <h1>Checkboxes (Recommended for desktop)</h1>
              <p>Checkboxes, or custom analogs, should only be used to indicate completion, such as checking items off lists.</p>
              <p>Checkbox behaviors:</p>
              <ul class="lst-kix_p8vg2qw8sw46-0 start">
                <li>When hovering over an item, display a single checkbox for that item.</li>
                <li>After an item is selected, display checkboxes for all remaining items in that set.</li>
              </ul>
              <p>Avoid persistently displaying checkboxes as part of each item.</p>
            </div>
          </div>
        </div>

        <div id="selection-item-selection" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Item selection
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div><p>Item selection allows users to apply actions to selected items.</p>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h1>Selecting items </h1>
                    <p>On touch devices, select an item by pressing and holding it.</p>
                    <p>To exit selection mode, deselect all items or perform an action on selected items using the toolbar.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/patterns/selection/patterns_selection_item_entering1.webm" type="video/webm">
                            <source src="../static/media/patterns/selection/patterns_selection_item_entering1.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>On touch devices, select an item by pressing and holding it.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Toggling selection on and off</h1>
                    <p>To toggle an item between selected and unselected states, tap the item.</p>
                    <p>To select multiple items, long press and drag the cursor.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/patterns/selection/patterns_selection_item_controlling1.webm" type="video/webm">
                            <source src="../static/media/patterns/selection/patterns_selection_item_controlling1.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Once an item is selected, tap the item to toggle its selection.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/patterns/selection/patterns_selection_item_controlling2.webm" type="video/webm">
                            <source src="../static/media/patterns/selection/patterns_selection_item_controlling2.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Users may long press and drag to select items using the cursor.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Desktop</strong></p>
                    <p>To toggle selection on desktop, hover over an item to reveal a check mark which can be clicked.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/patterns/selection/patterns_selection_item_controlling_desktop_click.webm" type="video/webm">
                            <source src="../static/media/patterns/selection/patterns_selection_item_controlling_desktop_click.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>On desktop, users may click and drag across checkboxes to select multiple items.</p></figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Indicating selection</h1>
                    <p>To indicate that an item is selected, display a check mark and scrim overlapping the item, or its associated avatar.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/patterns/selection/patterns_selection_item_indicating1.webm" type="video/webm">
                            <source src="../static/media/patterns/selection/patterns_selection_item_indicating1.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Checkmarks replace icons or avatars if there is space.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/patterns/selection/patterns_selection_item_indicating2.webm" type="video/webm">
                            <source src="../static/media/patterns/selection/patterns_selection_item_indicating2.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Use compact checkmarks to minimize the hiding the amount of content displayed.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <p>.</p>
            </div>
          </div>
        </div>

        <div id="selection-text-selection" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            Text selection
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>Text selection is indicated by highlighting a contiguous segment of text. </p>
              <p>On mobile, a selection handle is added to both the beginning and end of a selection. Actions related to the text appear in a dropdown menu positioned immediately above, but not overlapping, the selection.</p>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module"><h1>Adjusting selected text</h1>
                    <p>The user may adjust which text is selected by:</p>
                    <ul class="lst-kix_t3epjq3awayd-0 start">
                      <li>Dragging the initial selection to expand it</li>
                      <li>Dragging either of the selection handles to expand or reduce the selection</li>
                      <li>Touching (or clicking) repeatedly within the selection to expand it (Selection will toggle between a single word, paragraph, or all text)</li>
                      <li>Keyboard shortcuts (see table)</li>
                    </ul>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Keyboard shortcut</p></td>
                        <td colspan="1" rowspan="1"><p>Result</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Shift+Left/Right Arrow</p></td>
                        <td colspan="1" rowspan="1"><p>Character-by-character selection</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Shift+Up/Down Arrow</p></td>
                        <td colspan="1" rowspan="1"><p>Line-by-line selection</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Ctrl/Command+A</p></td>
                        <td colspan="1" rowspan="1"><p>Select all</p></td>
                      </tr>
                      </tbody>
                    </table>
                    <p>Text selection keyboard shortcuts can be used to alter the selection bounds.</p>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong>Text selection handles</strong></h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/selection/patterns_selection_text01.png"/>
                      </div>
                      <figcaption>
                        <p>Example of text selection handles</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/selection/patterns_selection_text02.png"/>
                      </div>
                      <figcaption>
                        <p>Example of text selection handles</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong>Color and contrast</strong></h2>
                    <p>Text selection elements may reflect your <a href="../style/color.html">color palette</a> by using your accent color.</p>
                    <p>Selected text should be legible, with noticeable contrast against its background color. Alternatively, selected text may be indicated by displaying outlines, text treatments, motion, or checkmark icons. </p>
                    <p>Learn more about contrast (or try a <a href="https://www.google.com/url?q=http://webaim.org/resources/contrastchecker/&amp;sa=D&amp;ust=1481818021000000&amp;usg=AFQjCNHJditsLQxQLnMuBysPOsyFgH3ihg" target="_blank">color contrast analyzer</a>) at <a href="https://www.google.com/url?q=http://webaim.org&amp;sa=D&amp;ust=1481818021002000&amp;usg=AFQjCNE3WHKwrSZnwBOeSuup__9bJ7bklw" target="_blank">webaim.org</a>.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/selection/patterns_selection_text_color1.png"/>
                      </div>
                      <figcaption>
                        <ol class="lst-kix_xdqkwleg2gie-0 start" start="1">
                          <li>Text selection color</li>
                          <li>Text</li>
                          <li>Background</li>
                        </ol>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/selection/patterns_selection_text_color2.png"/>
                      </div>
                      <figcaption>
                        <p>Text selection can be customized using your palette accent color. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong>Text selection – Light theme</strong></h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/selection/patterns_selection_text03.png"/>
                      </div>
                      <figcaption>
                        <p>Text selection – Light theme</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong>Text selection – Dark theme</strong></h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/selection/patterns_selection_text04.png"/>
                      </div>
                      <figcaption>
                        <p>Text selection – Dark theme</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Text selection toolbar</h1>
                    <p>The floating toolbar appears above the selection area with primary actions of Cut, Copy, Paste, and More. When the user selects the More icon, the toolbar collapses and transforms into a secondary menu to reveal additional actions. </p>
                    <p>The font for the floating toolbar text is Roboto Medium 14sp, all caps.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/selection/patterns_selection_text05.png"/>
                      </div>
                      <figcaption>
                        <p>Dropdown menus for Cut, Copy, Paste, and More appear above the selection area.</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/selection/patterns_selection_text07.png"/>
                      </div>
                      <figcaption>
                        <p>More</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/selection/patterns_selection_text06.png"/>
                      </div>
                      <figcaption>
                        <p>When the user selects More, the menu begins transitioning to show the overflow items. </p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/selection/patterns_selection_text08.png"/>
                      </div>
                      <figcaption>
                        <p>Overflow menu items: Share, Search, and Translate </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/selection/patterns_selection_text09.png"/>
                      </div>
                      <figcaption>
                        <p>Text selection</p>
                        <p>Dropdown menu height: 44dp<br>
                          Dropdown menu text top padding: 12dp<br>
                          Dropdown menu text top padding: 14dp<br>
                          Dropdown menu text left padding: 24dp<br>
                          <br>
                          Dropdown menu space between menu text items: 32dp<br>
                          Selected text top padding: 8dp</p>
                        <p>Expansion icon right padding: 16dp</p>
                        <p>Expansion icon left padding: 22dp<br>
                          Expansion icon top and bottom padding: 10dp<br>
                          Text selection handles: 22 x 22 dp</p>
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