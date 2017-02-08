<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <p>Menus display a list of choices on a transient sheet of material.</p>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>Menus appear upon interaction with a button, action, or other control. They display a list of choices, with one choice per line. </p>
                <p>Menu items may be disabled if not applicable to a certain context. Contextual menus dynamically change their available menu items based on the current state of the app.</p>
              </div>
              <div class="module">
                <h3>Types</h3>
                <p>Simple menus (mobile and tablet)<br>
                  Cascading menus (desktop)</p>
                <h3>Elevation</h3>
                <p>Menus appear above other in-app elements.</p>
                <h3>Behavior</h3>
                <p>Scrollable</p>
                <h3>Alternatives</h3>
                <p><a href="dialogs.html#dialogs-simple-menus">Simple dialogs</a></p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/components/menus/components_menus.png"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="menus.html#menus-usage" data-qp-ui-data-id="qp:1">Usage</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="menus.html#menus-menu-items" data-qp-ui-data-id="qp:2">Menu items</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="menus.html#menus-behavior" data-qp-ui-data-id="qp:3">Behavior</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="menus.html#menus-simple-menus" data-qp-ui-data-id="qp:4">Simple Menus</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="menus.html#menus-specs" data-qp-ui-data-id="qp:5">Specs</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="menus-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
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
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>A menu is a temporary piece of material that appears upon interaction with a button, action, pointer, or other control. It contains at least two menu items.</p>
                    <p>Each menu item consists of a discrete option or action that can affect the app, the view, or selected elements within a view.</p>
                    <p>Menus should not be used as a primary method for navigation within an app.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/menus/components_menus_usage1.png"/>
                      </div>
                      <figcaption>
                        <p>The action overflow in the app bar will emit a menu.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/menus/components_menus_usage2.png"/>
                      </div>
                      <figcaption>
                        <p>This action overflow menu contains four menu items: “Refresh,” “Help &amp; feedback,” “Settings”, and “Sign out”. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h2>Menu labels</h2>
                    <p>The label of a button or control should concisely and accurately reflect the items within the menu. Menu bars typically use single words as labels, like “file,” “format,” and “edit.” Other contexts may require longer labels.</p>
                    <h2>Disabled menu options</h2>
                    <p>Menus display a consistent set of menu items. A menu item may be enabled or disabled based on the current state of the application.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/menus/components_menus_usage3do.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo TRANSLATE['do']; ?></p>
                        <p>The title “View” accurately describes the unifying characteristic of the menu items it contains.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/menus/components_menus_usage3dont.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo TRANSLATE['dont']; ?></p>
                        <p>The title “Stuff” is not descriptive and does not help users predict what menu items they will find in the Stuff menu.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2>Contextual menus</h2>
                    <p>Contextual menus dynamically change their available menu items based on the current state of the application. </p>
                    <ul class="lst-kix_jjy9e6u0ee5q-0 start">
                      <li>Menu items that are irrelevant to the current context may be <strong>removed</strong>.</li>
                      <li>Menu items which are relevant but need certain conditions to be met may be <strong>disabled</strong>. For example, the Copy menu option becomes enabled when text is selected.</li>
                    </ul>
                    <p><strong>Single menu-item states</strong></p>
                    <p>Some app states may result in a contextual menu with only a single menu item. For example, when highlighting text on a web page, Android display only the Copy menu item, as users cannot cut or paste text.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/menus/components_menus_usage4a.png"/>
                      </div>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/menus/components_menus_usage4b.png"/>
                      </div>
                      <figcaption>
                        <p>Contextual menu</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h2>Menus are scrollable</h2>
                    <p>If the height of a menu prevents all menu items from being displayed, the menu can scroll internally. One example is when viewing a menu on a phone in landscape orientation.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/menus/components_menus_usage6.png"/>
                      </div>
                      <figcaption>
                        <p>Internally scrolling menu</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2>Cascading menus (Desktop only)</h2>
                    <p>For menus that cascade, position the menus vertically and horizontally based on their proximity to screen edges.</p>
                    <p>Developer note: Implementations of this component may vary by platform. By using standard platform implementations, you will receive any related future improvements.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/menus/components_menus_usage7.png"/>
                      </div>
                      <figcaption>
                        <p>Cascading menu on desktop</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/menus/components-menus-menus-cascading_dropdown_spec_large_xhdpi.webm" type="video/webm">
                            <source src="../static/media/components/menus/components-menus-menus-cascading_dropdown_spec_large_xhdpi.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                    </figure>
                    <p>Cascading dropdown menu on desktop</p>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/menus/Components-Menus-Usage-Textfield_Dropdown_xhdpi_006.webm" type="video/webm">
                            <source src="../static/media/components/menus/Components-Menus-Usage-Textfield_Dropdown_xhdpi_006.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Textfield dropdown menu</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/menus/Component-Menus-Usage_Appbar_Dropdown_xhdpi_004.webm" type="video/webm">
                            <source src="../static/media/components/menus/Component-Menus-Usage_Appbar_Dropdown_xhdpi_004.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                    </figure>
                    <p>Action overflow menu</p></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="menus-menu-items" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Menu items
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
                  <div class="module"><h2>Single-line display</h2>
                    <p>Each menu item is limited to a single line of text (a single word or short phrase) that describesthe action it will perform when selected. </p>
                    <p>Menu items may also contain: </p>
                    <ul class="lst-kix_pplbnwc7wnp5-0 start">
                      <li>Icons and helper text, like keyboard shortcuts</li>
                      <li>Controls like checkmarks to indicate multiple selected items or states (See <a href="lists-controls.html">List controls</a>)</li>
                    </ul>
                    <h2>Menu ordering</h2>
                    <p>Menus with<strong> static content</strong> should have the most frequently used menu items placed at the top of the menu.</p>
                    <p>Menus with <strong>dynamic content</strong> may have other behavior, such as placing previously used fonts at the top of the menu. The order can change based on user actions.</p>
                    <h2>Menu nesting</h2>
                    <p>Menu items can reveal nested submenus. Ideally, limit nesting to one level deep, as it can be difficult to navigate multiple nested submenus.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/menus/components_menus_items1.png"/>
                      </div>
                      <figcaption>
                        <p>Examples of menu items</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h2>Disabled actions</h2>
                    <p>Displaying actions as disabled, rather than removing them, lets the user know they exist under the right conditions.</p>
                    <p>For example, Redo is disabled when there is nothing to redo. Cut and Copy are disabled until content is selected. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/menus/components_menus_items2.png"/>
                      </div>
                      <figcaption>
                        <p>Examples of disabled actions</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="menus-behavior" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
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
                  <div class="module"><h1>Location</h1>
                    <p>Menus appear above all other in-app UI elements.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/menus/components_menus_behavior1.png"/>
                      </div>
                      <figcaption>
                        <p>Example of menu appearing over all other in-app UI elements.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Menus are positioned over their emitting elements such that the currently selected menu item appears on top of the emitting element.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/menus/components_menus_behavior2.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo TRANSLATE['do']; ?></p>
                        <p>The currently selected menu item appears over the emitting element.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Do not display a duplicate of the selected menu item.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/menus/components_menus_behavior3.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo TRANSLATE['dont']; ?></p>
                        <p>Do not display a duplicate of the selected menu item.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Positioning the menu below the emitting element separates it from its context.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/menus/components_menus_behavior4.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo TRANSLATE['dont']; ?></p>
                        <p>Menus are positioned over their emitting element.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <h1>Dismissing menus</h1>
                    <p>Dismiss a menu by tapping outside of the menu, or by tapping the emitting button (if visible).</p>
                    <p>Selecting a menu item should also dismiss the menu. An exception is when a menu allows for multiple items to be chosen, for example, by using checkmarks.</p>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="menus-simple-menus" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            Simple Menus
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <h2>Mobile or tablet</h2>
              <p>Use simple menus in lists to display the options for a specific list item. </p>
              <h2>Vertical alignment</h2>
              <p>When close to a screen edge, simple menus vertically realign to make all menu items are completely visible.</p>
              <p><strong>Disambiguation:</strong> In contrast to simple menus, <a href="dialogs.html#dialogs-simple-dialogs">simple dialogs</a> can present additional detail related to the options available for a list item or provide navigational or orthogonal actions related to the primary task. Although they can display the same content, simple menus are preferred over simple dialogs because simple menus are less disruptive to the user’s current context.</p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module"><h2>Item selection</h2>
                    <p>Choosing an option immediately commits the option and closes the menu.</p>
                    <h2>Cancelling selection</h2>
                    <p>Touching outside of the menu, or pressing the system Back button, cancels the action and closes the menu.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/menus/components_dialogs_simplemenus1.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a simple menu</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>When opened, simple menus attempt to vertically align the currently selected menu item with the list item. The currently selected menu item is highlighted.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/menus/components_dialogs_simplemenus2.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo TRANSLATE['do']; ?></p>
                        <p>The currently selected menu item aligns vertically over the list item.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/menus/components_dialogs_simplemenus3.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo TRANSLATE['do']; ?></p>
                        <p>The currently selected menu item aligns vertically over the list item.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Do not arbitrarily position the first menu item over the list item.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/menus/components_dialogs_simplemenus5.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo TRANSLATE['dont']; ?></p>
                        <p>The first menu item is arbitrarily positioned over the list item, regardless of the currently selected menu item.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>When close to a screen edge, simple menus reposition their vertical alignment so that all menu items are completely visible.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/menus/components_dialogs_simplemenus4.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo TRANSLATE['do']; ?></p>
                        <p>The currently selected menu item normally would be positioned over the list item, but because doing so in this case would cause part of the menu to appear off-screen, the entire menu is repositioned vertically.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Simple menus appear over their emitting element, not below.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/menus/components_dialogs_simplemenus6.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo TRANSLATE['do']; ?></p>
                        <p>Simple menus appear over their emitting element.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/menus/components_dialogs_simplemenus7.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo TRANSLATE['dont']; ?></p>
                        <p>Simple menus do not appear below their emitting element.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>Menu width varies depending on string length, and on mobile is defined as a multiple of a 56dp unit.</p>
                    <p>Simple menus always maintain a 16dp margin (phone) or 24dp margin (tablet) to the left and right edges of the screen.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/menus/components_dialogs_simplemenus8.png"/>
                      </div>
                      <figcaption>
                        <p>Simple menu with a 16dp margin.</p>
                        <p>Each unit is 56dp wide.</p>
                        <p>Minimum width on mobile = 2 * 56dp = 112dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/menus/components_dialogs_simplemenus9.png"/>
                      </div>
                      <figcaption>
                        <p>Simple menu with 16dp margins on the left and right.</p>
                        <p>Each unit is 56dp wide.</p>
                        <p>Maximum width on mobile (in both portrait and landscape) = 5 * 56dp = 280dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>If text in a simple menu wraps to a second line, use a <a href="dialogs.html#dialogs-simple-dialogs">simple dialog</a> instead. Simple dialogs can have rows with varying heights.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/menus/components_dialogs_simplemenus10.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo TRANSLATE['do']; ?></p>
                        <p>Use a simple dialog if any text in a simple menu wraps to a second line.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/menus/components_dialogs_simplemenus11.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo TRANSLATE['dont']; ?></p>
                        <p>Don’t truncate text in a simple menu. Use a simple dialog instead.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>Menus show a persistent scroll bar when content is scrollable.</p>
                    <p>The maximum height of a simple menu should be one or more rows less than the view height. This ensures a tappable area outside of the simple menu with which to dismiss the menu.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/menus/components_dialogs_simplemenus12.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo TRANSLATE['do']; ?></p>
                        <p>Display a scroll bar by default for scrollable content.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/menus/components_dialogs_simplemenus13.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo TRANSLATE['dont']; ?></p>
                        <p>Without a scroll bar, it’s unclear if there are additional menu items available.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>Don’t duplicate the selected menu item.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/menus/components_dialogs_simplemenus14.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo TRANSLATE['do']; ?></p>
                        <p>Each menu item appears only once.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/menus/components_dialogs_simplemenus15.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo TRANSLATE['dont']; ?></p>
                        <p>Don’t display a duplicate of the selected element.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Simple menus are always left-aligned with the start of the list item text and do not reposition horizontally based on the touch location.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/menus/components_dialogs_simplemenus16.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo TRANSLATE['do']; ?></p>
                        <p>Simple menus are left-aligned regardless of touch location.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/menus/components_dialogs_simplemenus17.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo TRANSLATE['dont']; ?></p>
                        <p>Simple menus do not reposition based on the touch location.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="menus-specs" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:5">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:5">
            Specs
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>Specs are provided for various sizes and types of menus and for different platforms. Add 8dp padding at the top and bottom of a menu. </p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Mobile</h1>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/menus/components_menus_specs1.png"/>
                      </div>
                      <figcaption>
                        <p>Menu item height: 48dp<br>
                        Menu item text left padding: 16dp<br>
                        Menu item text bottom padding: 20dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Various widths</h1>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/menus/components_menus_specs2.png"/>
                      </div>
                      <figcaption>
                        <p>Menus of various widths: min width 1.5 x, 3x, 6x and 7x</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Cascading menu</h1>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/menus/components_menus_specs3.png"/>
                      </div>
                      <figcaption>
                        <p>Cascading menu on desktop</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Cascading redlines</h1>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/menus/components_menus_specs4.png"/>
                      </div>
                      <figcaption>
                        <p>Cascading menu top padding: 16dp<br>
                        Cascading menu left padding: 24dp<br>
                        Cascading menu item height: 32dp<br>
                        Menu item icon right padding: 32dp<br>
                        Menu sub-item left padding: 64dp</p>
                        <p>15pt Roboto font</p>
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