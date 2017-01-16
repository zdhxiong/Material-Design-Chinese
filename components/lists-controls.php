<?php
$vars = array(
  'title' => '列表控制器',
  'category' => '组件',
  'theme_color' => '#3949AB',
  'color_name' => 'indigo',
  'prev_title' => '列表',
  'prev_path' => 'components/lists',
  'next_title' => '菜单',
  'next_path' => 'components/menus'
);

include $public_files['header'];
?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title">Lists: Controls</h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <p>List controls display information and actions for list items. </p>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module"><p>List controls provide information, indicate a state, or present actions for list items. List controls appear as icons to the left or right of list text.</p>
                <p>List control placement:</p>
                <ul class="lst-kix_xecwe92rumht-0 start">
                  <li>States and primary actions are placed on the left side of a list tile.</li>
                  <li>Secondary actions and info are placed on the right side of the tile.</li>
                </ul>
              </div>
              <div class="module">
                <h3><strong>Types</strong></h3>
                <p>Checkbox<br>
                  Switch<br>
                  Reorder<br>
                  Expand/collapse<br>
                  Leave-behinds</p>

                <h3><strong>Menu controls</strong></h3>
                <p>Check<br>
                  Inline information<br>
                  Nested menu indicator</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/components/lists-controls/components_lists_controls.png"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="lists-controls.html#lists-controls-usage" data-qp-ui-data-id="qp:1">Usage</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="lists-controls.html#lists-controls-types-of-list-controls" data-qp-ui-data-id="qp:2">Types of list controls</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="lists-controls.html#lists-controls-types-of-menu-controls" data-qp-ui-data-id="qp:3">Types of menu controls</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="lists-controls-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
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
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>List controls fall under four categories:</p>
                    <ul class="lst-kix_dgrepbta7m6r-0 start">
                      <li>State</li>
                      <li>Primary action (including text strings)</li>
                      <li>Secondary action</li>
                      <li>Secondary info</li>
                    </ul>
                    <p>Distinguishing elements of list tiles need to be on the left for left-to-right interfaces, and vice versa. States and primary actions are placed on the left side of a list tile. Text within a list item should be considered part of the primary action target.</p>
                    <p>Don’t place two icons or actions next to one another, such as a checkbox next to an avatar. </p>
                    <p>If the primary action of the list item is navigational, don’t use an icon. The list item itself and its context should be sufficient to communicate the destination. </p>
                    <p>Secondary actions and info should be placed on the right side of the title. Secondary actions are always a separate target from the primary action, as users increasingly expect every icon to trigger an action. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists-controls/components_listcontrols_usage.png"/>
                      </div>
                      <figcaption>
                        <p>States and primary actions are placed on the left side of a list tile. The secondary action and secondary info should be placed on the right side of the title. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="lists-controls-types-of-list-controls" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Types of list controls
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
                    <h1>Checkbox</h1>
                    <p>A checkbox can either be a primary action or a secondary action.</p>
                    <p>Type: primary action/state</p>
                    <p>Desktop checkboxes should appear only on hover and focus. </p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists-controls/components_listcontrols_checkbox1.png"/>
                      </div>
                      <figcaption>
                        <p>The checkbox is the primary action and the state indicator for the list item.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Type: secondary action</p>
                    <p>Separate target</p>
                    <p>When controlling a family of variables, consider using switches instead. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists-controls/components_listcontrols_checkbox2.png"/>
                      </div>
                      <figcaption>
                        <p>The checkbox is the secondary action for the list item.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Switch</h1>
                    <p>Type: secondary action</p>
                    <p>Separate target</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists-controls/components_listcontrols_switch.png"/>
                      </div>
                      <figcaption>
                        <p>The switch is the secondary action and a separate target. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Reorder</h1>
                    <p>Type: secondary action</p>
                    <p>Usually a separate target, depending on which mode list it is in. </p>
                    <p>Allows dragging of the list item to other locations within the list. It usually appears in list editing mode.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists-controls/components_listcontrols_reorder.png"/>
                      </div>
                      <figcaption>
                        <p>The reorder icon is the secondary action for the list item. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Expand/collapse</h1>
                    <p>Type: secondary action</p>
                    <p>Separate target</p>
                    <p>Expands and collapses a list view vertically to show and hide details of existing list items.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists-controls/components_listcontrols_expand1.png"/>
                      </div>
                      <figcaption>
                        <p>By touching the list control, the user expands the list. </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists-controls/components_listcontrols_expand2.png"/>
                      </div>
                      <figcaption>
                        <p>The list is expanded. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists-controls/components_listcontrols_expand3.png"/>
                      </div>
                      <figcaption>
                        <p>Collapsed single-line item</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists-controls/components_listcontrols_expand4.png"/>
                      </div>
                      <figcaption>
                        <p>Expanded single-line item</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Leave-behinds</h1>
                    <p>Type: Other</p>
                    <p>A leave-behind is an informative hint as to what swiping a list item away will do to that item. The leave-behind can transform into an action.</p>
                    <p>Swiping on a list item from either direction will reveal an icon indicating the action. After swiping, a follow-up action can appear as a text button within the space of the list item.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists-controls/components_listcontrols_leave1.png"/>
                      </div>
                      <figcaption>
                        <p>Swiping on a list item from right to left will reveal an icon indicating the action.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists-controls/components_listcontrols_leave2.png"/>
                      </div>
                      <figcaption>
                        <p>Swiping on a list item from left to right will reveal an icon indicating the action.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="lists-controls-types-of-menu-controls" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            Types of menu controls
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div><p>A menu is a special type of list. In menus, use controls that are appropriate for dropdown menus, overflow menus, and so on. Don’t use these controls in regular lists. Use the regular list controls instead.</p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Check</h1>
                    <p>Type: state</p>
                    <p>Not a separate target. </p>
                    <p>Menus only. Indicates that the list item has been selected. The selection is done through a different control.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists-controls/components_listcontrols_menu1.png"/>
                      </div>
                      <figcaption>
                        <p>The check indicates that the list item has been selected.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Inline information</h1>
                    <p>Type: secondary info</p>
                    <p>Not a separate target. </p>
                    <p>Menus only. Inline information is a small snippet of text related to the line title that can provide information or a tip, like a keyboard shortcut. It cannot be truncated.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists-controls/components_listcontrols_menu2.png"/>
                      </div>
                      <figcaption>
                        <p>The inline information for Bold, Italic and Underline provide keyboard shortcuts. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Nested menu indicator</h1>
                    <p>Type: primary action</p>
                    <p>Not a separate target. </p>
                    <p>Menus only. The glyph indicates that a secondary menu will fly out upon hover, focus, and/or selection. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists-controls/components_listcontrols_menu3.png"/>
                      </div>
                      <figcaption>
                        <p>The glyphs for the menu items indicate that a secondary menu will fly out upon hover, focus, and/or selection.</p>
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