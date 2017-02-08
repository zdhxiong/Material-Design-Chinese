<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>

    <div class="chapter-content">
      <div class="article-content chapter-intro">
        <div>
          <p>底部卡片是从屏幕底部边缘向上滑出的一个面板，它用于向用户展示额外的内容。</p>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p><strong>模态化的底部卡片</strong> 主要用于手机端，也可以用于显示来自其他应用的深层链接。</p>
                <p><strong>固定显示的底部卡片</strong> 和应用是一个整体，用于显示支持的内容。</p>
              </div>
              <div class="module">
                <h3><strong>交互</strong></h3>
                <p>底部卡片必须由用户主动操作来触发显示。</p>
                <h3><strong>高度</strong></h3>
                <p>模态化底部卡片：在应用上方<br>
                  固定显示的底部卡片：与应用高度相同</p>
                <h3><strong>备选方案</strong></h3>
                <p>
                  <a href="dialogs.html#dialogs-simple-menus">简单对话框</a> <br>
                  <a href="menus.html">菜单</a>
                </p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/components/bottom-sheets/components_bottom_sheets.png"/>
                  </div>
                </figure>
              </div>
            </section>
          </div>
        </div>
      </div>

      <nav class="chapter-toc">
        <h1>内容</h1>

        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="bottom-sheets.html#bottom-sheets-usage" data-qp-ui-data-id="qp:1">用法</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="bottom-sheets.html#bottom-sheets-persistent-bottom-sheets" data-qp-ui-data-id="qp:2">固定显示的底部卡片</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="bottom-sheets.html#bottom-sheets-modal-bottom-sheets" data-qp-ui-data-id="qp:3">模态化的底部卡片</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="bottom-sheets.html#bottom-sheets-behavior" data-qp-ui-data-id="qp:4">操作</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="bottom-sheets.html#bottom-sheets-specs" data-qp-ui-data-id="qp:5">规格</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="bottom-sheets-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            用法
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
                  <div class="module"><p>底部卡片有两种主要类型：</p>
                    <ul class="lst-kix_fbig61rmmdfl-0 start">
                      <li>
                        <strong>模态化底部卡片</strong> 可以被菜单或简单的对话框替代。它也可以用于显示来自其他应用的深层链接。它主要用于手机端。
                      </li>
                      <li>
                        <strong>固定显示的底部卡片</strong> 和应用是一个整体，用于显示支持的内容。
                      </li>
                    </ul>
                    <p>用高度来区分模态化和固定显示的底部卡片。模态化的底部卡片的高度比应用内容高；而固定显示的底部卡片和应用内容一样高，并且和应用内容是一个整体。</p>
                    <p>在大屏设备中，有足够空间的情况下，使用其他组件，如<a href="dialogs.html#dialogs-simple-dialogs">简单对话框</a>或<a href="menus.html">菜单</a>代替底部卡片会更合适。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-sheets/components_bottomsheets_usage2.png"/>
                      </div>
                      <figcaption>
                        <p>模态化的底部卡片从应用内容的上方滑入。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-sheets/components_bottomsheets_usage1.png"/>
                      </div>
                      <figcaption>
                        <p>固定显示的底部卡片是应用布局的组成部分。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="bottom-sheets-persistent-bottom-sheets" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            固定显示的底部卡片
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
                    <p>Persistent bottom sheets display in-app content that supplements the main view. It remains visible even when not actively in use, resting at the same elevation as an app and integrating with its content.</p>
                    <h2><strong><strong>用法</strong></strong></h2>
                    <ol class="lst-kix_mzdetq3s4nzc-0 start" start="1">
                      <li>To introduce new content on a unique surface</li>
                      <li>To display content equal in value to the primary content</li>
                    </ol>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-sheets/components_bottomsheets_persistent2.png"/>
                      </div>
                      <figcaption>
                        <p>Introducing a persistent bottom sheet into a layout with a floating action button (FAB) may cause the FAB to move vertically.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-sheets/components_bottomsheets_persistent5.png"/>
                      </div>
                      <figcaption>
                        <p>A persistent bottom sheet enables place details to remain on-screen while a map is panned around.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-sheets/components_bottomsheets_persistent6.png"/>
                      </div>
                      <figcaption>
                        <p>Playback controls remain visible on a persistent bottom sheet regardless of user navigation in the main view.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Mobile</strong></p>
                    <p>Mobile persistent bottom sheets are full width in both portrait and landscape view.</p>
                    <p><strong>Tablet/Desktop</strong></p>
                    <p>Persistent bottom sheets are either full width or inset, as determined by the width of the content they contain, overall UI, underlying content, and stylistic choices.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-sheets/components_bottomsheets_persistent7.png"/>
                      </div>
                      <figcaption>
                        <p>A full-width persistent bottom sheet on tablet</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-sheets/components_bottomsheets_persistent8.png"/>
                      </div>
                      <figcaption>
                        <p>An inset persistent bottom sheet on tablet</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>On desktop, a persistent bottom sheet may transform into another surface or sheet of material. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-sheets/components_bottomsheets_persistent9.png"/>
                      </div>
                      <figcaption>
                        <p>On desktop, content ordinarily presented in a persistent bottom sheet might move onto a new sheet of material. On larger screens it may be more appropriate to display bottom sheet content on a sheet of material positioned on the left side of the interface.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="bottom-sheets-modal-bottom-sheets" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            Modal bottom sheets
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
                    <p>Modal bottom sheets are alternatives to menus, or simple dialogs, and can display deep-linked content from another app. They appear above other UI elements and must be dismissed in order to interact with the underlying content. When a modal bottom sheet slides into the screen, the rest of the screen dims, giving focus to the bottom sheet.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-sheets/components_bottomsheets_modal1.png"/>
                      </div>
                      <figcaption>
                        <p>A modal bottom sheet with a set of actions in a list</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-sheets/components_bottomsheets_modal2.png"/>
                      </div>
                      <figcaption>
                        <p>A modal bottom sheet with a set of actions in a grid</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong><strong>Usage</strong></strong></h2>
                    <p>Modal bottom sheets may:</p>
                    <ol class="lst-kix_u65awwthf3bo-0 start" start="1">
                      <li>Present actions in a list or grid as an alternative to menus or simple dialogs.</li>
                      <li>Display a contextual menu, when there is no obvious entry point for a menu.</li>
                      <li>Prioritize the visibility of the elements they contain.</li>
                    </ol>
                    <p>Modal bottom sheets can display long menu item names, menu items with subtext, and icons associated with menu items.</p>
                    <p>When displaying menu items, fully-expanded modal bottom sheets maintain a minimum 8dp distance from the bottom of the app bar.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-sheets/components_bottomsheets_modal3.png"/>
                      </div>
                      <figcaption>
                        <p>The bottom sheet may associate icons with menu items.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-sheets/components_bottomsheets_modal4.png"/>
                      </div>
                      <figcaption>
                        <p>Menu items with subtext</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h2><strong><strong>Deep linking</strong></strong></h2>
                    <p>Modal bottom sheets may be used to provide deep links to content or controls from another app. These span the full screen width.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-sheets/components_bottomsheets_modal7.png"/>
                      </div>
                      <figcaption>
                        <p>A deep-linked modal bottom sheet displays a definition of a term without the user having to open the dictionary app.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-sheets/components_bottomsheets_modal6.png"/>
                      </div>
                      <figcaption>
                        <p>The app on the right displays a bottom sheet containing content from the app on the left. This allows the user to view content from another app without leaving their current app.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>Bottom sheets may contain links that perform deep navigation within another app. These links may:</p>
                    <ul class="lst-kix_vmecuoyu6vju-0 start">
                      <li>Allow the user to travel multiple levels deep within another app</li>
                      <li>Return to the level on which they started</li>
                    </ul>
                    <p>However, these deep links may not allow the user to navigate upward in the hierarchy: they may only stay at the initial level, go deeper, or travel back to the initial level.</p>
                    <p>Alternatively, deep links may navigate the user away from the bottom sheet entirely, into another view.</p>
                    <p>To enable upward navigation from the bottom sheet’s deep links, offer an explicit link to open the application via an overflow menu. Actions within the deep-linked bottom sheet may result in opening the parent application, such as with an “add contact” action.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-sheets/components_bottomsheets_modal_do.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo TRANSLATE['do']; ?></p>
                        <p>Fully-expanded modal bottom sheets provide an X in the app bar.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-sheets/components_bottomsheets_modal_dont.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo TRANSLATE['dont']; ?></p>
                        <p>When navigating downwards into the content hierarchy, it would be appropriate to show an Up arrow.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong><strong>Mobile</strong></strong></h2>
                    <p>Modal bottom sheets are primarily a mobile component, where they span full screen width in both portrait and landscape views.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-sheets/components_bottomsheets_modal9.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo TRANSLATE['do']; ?></p>
                        <p>For modal bottom sheets, don’t initially overlap the app bar. Allow the user to tap/swipe to dismiss.</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-sheets/components_bottomsheets_modal11.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo TRANSLATE['do']; ?></p>
                        <p>When displaying a long list, modal bottom sheets can scroll internally and expand past the 16:9 keyline. </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-sheets/components_bottomsheets_modal10.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo TRANSLATE['dont']; ?></p>
                        <p>The height of the bottom sheet should be dictated by the amount of content it contains.</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-sheets/components_bottomsheets_modal12.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo TRANSLATE['dont']; ?></p>
                        <p>For modal bottom sheets, don’t initially overlap the app bar. Retain an area for the user to tap outside the bottom sheet to dismiss it. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-module col-2">
                  <div class="module">
                    <h2><strong><strong>Tablet/Desktop</strong></strong></h2>
                    <p>Consider alternatives to modal bottom sheets on larger screens. Because bottom sheets may appear far from the place where the user clicked or touched to summon them, it splits the user’s attention across two different parts of the screen.</p>
                    <p>Because desktop space is less constrained, it can support several alternatives to modal bottom sheets.</p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Bottom sheet alternative</p></td>
                        <td colspan="1" rowspan="1"><p>Benefit</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Menu</p></td>
                        <td colspan="1" rowspan="1"><p>Keeps action choices close to the point of interaction</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Simple dialogs</p></td>
                        <td colspan="1" rowspan="1"><p>Strongly interrupts the user’s current context</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Inline expansion within the same view</p></td>
                        <td colspan="1" rowspan="1"><p>Is not as interruptive as a menu or dialog</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Showing all options as a persistently accessible element</p></td>
                        <td colspan="1" rowspan="1"><p>Does not require a button press to access them</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Opening a new browser window</p></td>
                        <td colspan="1" rowspan="1"><p>Flexible sizing and layout independence</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-sheets/components_bottomsheets_modal15.png"/>
                      </div>
                      <figcaption>
                        <p>Menus keep the choice of actions close to the point of interaction. Placing these menu options into a bottom sheet would not be recommended.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Make modal bottom sheets on large screens use appropriate layouts for the amount of extra space.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-sheets/components_bottomsheets_modal13.png"/>
                      </div>
                      <figcaption>
                        <p>A grid list bottom sheet on tablet</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-sheets/components_bottomsheets_modal14.png"/>
                      </div>
                      <figcaption>
                        <p>A long list bottom sheet on tablet</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="bottom-sheets-behavior" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
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
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>Bottom sheets can be dismissed by swiping the bottom sheet down, by touching an explicit control such as an X in the app bar, or by touching the system back button (Android). </p>
                    <p>Modal bottom sheets can also be dismissed by touching outside of the bottom sheet.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-sheets/components_bottomsheets_behavior1.png"/>
                      </div>
                      <figcaption>
                        <p>Dismiss by swiping the bottom sheet down</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-sheets/components_bottomsheets_behavior2.png"/>
                      </div>
                      <figcaption>
                        <p>Dismiss by touching outside of the bottom sheet surface </p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-sheets/components_bottomsheets_behavior3.png"/>
                      </div>
                      <figcaption>
                        <p>Dismiss by touching the “X” dismiss action (if there is an app bar)</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="bottom-sheets-specs" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:5">
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
              <p>The following specs are provided for mobile apps.</p>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module"><h1>Font and color</h1>
                    <ul class="lst-kix_h583orow0c26-0 start">
                      <li>Text: Roboto Regular 16sp, #000 87%</li>
                      <li>Title (optional): Roboto Regular 16sp, #000 54%</li>
                      <li>Default bottom sheet background fill: #FFF</li>
                      <li>Transparent overlay fill: #000 20%</li>
                    </ul>
                  </div>
                  <div class="module"></div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong><strong>List-style bottom sheet </strong></strong></h2>
                    <p>Screen edge left &amp; right margins: 16dp<br>
                      Top and bottom margins: 8dp<br>
                      List-item height: 48dp<br>
                      List icons: 24x24dp, middle vertical alignment<br>
                      Text associated with icon: 32dp horizontal padding</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-sheets/components_bottomsheets_specs1.png"/>
                      </div>
                      <figcaption>
                        <p>Keylines for list-style bottom sheet in a mobile app </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-sheets/components_bottomsheets_specs2.png"/>
                      </div>
                      <figcaption>
                        <p>List-style bottom sheet in a mobile app</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong><strong>List-style sheet with header</strong></strong></h2>
                    <p>Screen edge left &amp; right margins: 16dp<br>
                      Space below the top list: 7dp<br>
                      Divider line: 1dp<br>
                      Space above second bottom sheet: 8dp<br>
                      List-item height: 48dp<br>
                      List icons: 24x24dp, middle vertical alignment<br>
                      Text associated with icon: 32dp horizontal padding<br>
                      List title height: 56dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-sheets/components_bottomsheets_specs3.png"/>
                      </div>
                      <figcaption>
                        <p>Keylines for list-style sheet with header</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-sheets/components_bottomsheets_specs4.png"/>
                      </div>
                      <figcaption>
                        <p>List-style sheet with header</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong>Grid-style bottom sheet with icons</strong></h2>
                    <p>Screen edge left &amp; right margins: 24dp<br>
                      Vertical space between grid lists: 16dp<br>
                      Grids list icons: 48x48dp, middle vertical alignment, equally distributed across the grid<br>
                      Grid list label: 16dp tall, center-aligned below each icon<br>
                      Padding below grid: 24dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-sheets/components_bottomsheets_specs7.png"/>
                      </div>
                      <figcaption>
                        <p>Keylines for grid-style bottom sheet that contains a standard set of actions for other apps</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-sheets/components_bottomsheets_specs8.png"/>
                      </div>
                      <figcaption>
                        <p>Grid-style bottom sheet that contains a standard set of actions for other apps</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>Bottom sheets slide up from the bottom of the screen and initially cover a portion of the screen.</p>
                    <p>The initial height of a bottom sheet is relative to the height of the list items (or grid rows) it contains. A bottom sheet should not initially have a height beyond its 16:9 ratio keyline, depending on how much content it contains. Bottom sheets may be swiped up to fill the height of the screen, with content that then scrolls internally.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-sheets/components_bottomsheets_specs9.png"/>
                      </div>
                      <figcaption>
                        <p>The initial height of a bottom sheet should not extend beyond the 16:9 ratio keyline.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-sheets/components_bottomsheets_specs10.png"/>
                      </div>
                      <figcaption>
                        <p>The minimum height of a bottom sheet is relative to the height of the list items it contains.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <h2><strong><strong>Specs for desktop and tablet apps</strong></strong></h2>
                    <p>Modal and Inset persistent bottom sheets on desktop and tablet use these minimum and maximum widths.</p>
                    <p>The width of a bottom sheet is determined by the structure of the overall interface, which is typically based on increments. On a page grid, the maximum width of the bottom sheet is relative to the page grid and content it rests on. </p>
                    <p>For example, on a 960dp wide screen, if you use the height of the app bar (64dp) as your increment, it would result in fifteen total increments wide. A minimum of one increment should separate your bottom sheet from the screen edge, and the bottom sheet itself should be at least six increments wide.</p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Screen width</p></td>
                        <td colspan="1" rowspan="1"><p>Minimum distance from screen edge (in increments)</p></td>
                        <td colspan="1" rowspan="1"><p>Minimum sheet width (in increments)</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>960dp</p></td>
                        <td colspan="1" rowspan="1"><p>1 increment</p></td>
                        <td colspan="1" rowspan="1"><p>6 increments</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>1280dp</p></td>
                        <td colspan="1" rowspan="1"><p>2 increments</p></td>
                        <td colspan="1" rowspan="1"><p>8 increments</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>1440dp</p></td>
                        <td colspan="1" rowspan="1"><p>3 increments</p></td>
                        <td colspan="1" rowspan="1"><p>9 increments</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-sheets/components_bottomsheets_specs11.png"/>
                      </div>
                      <figcaption>
                        <p>Breakpoints for various desktop screen sizes</p>
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