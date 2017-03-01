<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    <div class="chapter-content">

      <div class="article-content chapter-intro"></div>

      <nav class="chapter-toc">
        <h1>目录</h1>
        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="structure.html#structure-ui-regions" data-qp-ui-data-id="qp:1">UI 区域</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="structure.html#structure-toolbars" data-qp-ui-data-id="qp:2">工具栏</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="structure.html#structure-app-bar" data-qp-ui-data-id="qp:3">应用栏</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="structure.html#structure-system-bars" data-qp-ui-data-id="qp:4">系统栏</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="structure.html#structure-side-nav" data-qp-ui-data-id="qp:5">侧边栏</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="structure.html#structure-whiteframes" data-qp-ui-data-id="qp:6">线框图</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="structure-ui-regions" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            UI 区域
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div><p>为元素在 Z 轴空间的排列提供指导，以拥有正确的行为和阴影，见<a href="../material-design/environment.html">环境</a>和<a href="../what-is-material/elevation-shadows.html">海拔高度和阴影</a>章节。</p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>手机端结构</h1>
                    <p>此结构中包含一个固定的应用栏和浮动操作按钮。可以添加一个可选的底栏，用于放置额外的功能或弹出操作。侧边栏会遮盖结构中的所有元素。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_regions_mobile.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>手机端结构</p>
                        <p>顶部从左到右：应用栏/主工具栏，内容区域（在应用栏/主工具栏下方），右侧导航<br>
                          底部：底栏</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>平板端结构</h1>
                    <p>此结构包含固定应用栏和浮动操作按钮。平板和手机的底栏中的元素可以合并到应用栏中。可以添加一个可选的底栏，用于放置额外的功能和弹出操作。侧边栏会覆盖结构中的所有元素。右侧导航可以临时显示，也可以永久固定显示。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_regions_tablet.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>平板端结构</p>
                        <p>顶部从左到右：侧边栏，应用栏/主工具栏，内容区域（在应用栏/主工具栏下方），右侧导航<br>
                          底部：底栏</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>桌面端结构</h1>
                    <p>桌面端结构包含一个固定的应用栏和一个浮动操作按钮。手机和平板的底栏可以合并到应用栏中。如果有可能，窗口空间也会被合并到应用栏中。</p>
                    <p>侧边导航菜单可以占据屏幕大小的整个高度（包括应用栏下方的），可以临时显示，也可以永久固定显示。侧边栏菜单和内容区域一样，都可以有自己的二级工具栏，用来放置选项卡、选项或次要操作。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_regions_desktop.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>桌面端结构</p>
                        <p>顶部从左到右：应用栏/主工具栏</p>
                        <p>第二行从左到右：工具栏、次要工具栏、工具栏</p>
                        <p>第三行从左到右：侧边栏、内容区域、右侧边栏</p>
                        <p>底部：浮动操作按钮</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>UI 区域</h1>
                    <p>定义水平或垂直的主分隔线。</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_regions_guidance1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>垂直分隔线</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_regions_guidance2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>水平分隔线</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>避免把界面分隔成太多区域，这样会导致布局呈现 L 形。相反，可以使用空白来描绘辅助区域。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_regions_guidance3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>使用空白。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_regions_guidance4.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>避免创建太多区域。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>可以使用卡片和浮动操作按钮来打破区域的边界。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_regions_guidance5.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>卡片打破了边界</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_regions_guidance6.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>浮动操作按钮打破了边界</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>Use cards to organize content when specific behaviors are needed or if groupings of information need more separation than what whitespace or dividers can provide.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_regions_guidance7.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Cards</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_regions_guidance8.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Cards</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="structure-toolbars" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Toolbars
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
                    <p>Toolbars are versatile and can be used in many different ways. </p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_toolbars1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Full-width, default height app bar</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_toolbars2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Full-width, extended height app bar </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_toolbars3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Column-width toolbars at multiple levels of hierarchy</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_toolbars4.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Flexible toolbar and card toolbar</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_toolbars5.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Floating toolbar</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_toolbars6.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Detached toolbar palette</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_toolbars7.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Bottom toolbar that launches to a shelf and clings to the top of the keyboard or other bottom component</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_toolbars8.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Bottom toolbar shelf</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="structure-app-bar" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            App bar
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
                    <p>The app bar, formerly known as the action bar in Android, is a special kind of toolbar that’s used for branding, navigation, search, and actions.</p>
                    <p>The nav icon at the left side of the app bar can be:</p>
                    <ul class="lst-kix_arqj2113mx70-0 start">
                      <li>A control to open a navigation drawer.</li>
                      <li>An up arrow for navigating upward through your app’s hierarchy.</li>
                      <li>Omitted entirely if no navigation is required from this screen.</li>
                    </ul>
                    <p>The title in the app bar reflects the current page. It can be an app title, page title, or a page filter.</p>
                    <p>Icons on the right side of the app bar are app-related actions. The menu icon opens the overflow menu, which contains secondary actions and menu items like help, settings, and feedback.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_appbar_structure1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>App bar structure</p>
                        <p>On the left: Nav icon, title, and filter icon<br>
                          On the right: Action and menu icons </p>
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
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_appbar_structure2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Light</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_appbar_structure3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Dark</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_appbar_structure4.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Colored</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_appbar_structure5.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Transparent</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Title color</h1>
                    <p>In an app bar, all icons should be the same color. </p>
                    <p>The title can have a distinct color from the icons if increased visual hierarchy is needed. Distinct title colors work best on backgrounds with enough contrast for both white and black glyphs.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_appbar_structure6.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Single color (default)</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_appbar_structure7.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Distinct title color</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Metrics</h1>
                    <p><strong>Default heights:</strong></p>
                    <p>Mobile Landscape: 48dp<br>
                      Mobile Portrait: 56dp<br>
                      Tablet/Desktop: 64dp</p>
                    <p>For extended app bars, the height is equal to the default height plus content increment(s).</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_appbar_metrics1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>App bar height: 56dp<br>
                        App bar left and right padding: 16dp<br>
                        App bar icon top, bottom, left padding: 16dp<br>
                        App bar title left padding: 72dp<br>
                        App bar title bottom padding: 20dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_appbar_metrics3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>The app bar with significantly increased height for prominence</p>
                        <p>App bar height: 128dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_appbar_metrics5.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Action area height: 56dp<br>
                        Title area height: 80dp<br>
                        Title area bottom padding: 8dp<br>
                        Description area height: 72dp<br>
                        Description area bottom padding: 16dp</p>
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
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_appbar_metrics7.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Incremental keyline is set by the app bar height, with a height of 64dp, which determines the keyline increment.</p>
                        <p><br>
                          App bar left and right content padding: 24dp<br>
                          App bar icon top and bottom padding: 20dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_appbar_metrics8.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Prominent app bar height: 128dp<br>
                        App bar left and right icon padding: 24dp<br>
                        App bar left content padding: 80dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Density</strong></p>
                    <p>When the mouse and keyboard are the primary input methods, measurements may be condensed to accommodate denser layouts.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_appbar_metrics7_dense.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p><strong>Dense app bar on desktop</strong></p>
                        <p>App bar height: 48dp<br>
                          App bar left and right content padding: 24<br>
                          App bar left content padding: 80dp<br>
                          Icon height with touch target: 40dp</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_appbar_metrics8_dense.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p><strong>Dense prominent app bar </strong></p>
                        <p>Dense prominent app bar height: 96dp<br>
                          App bar left and right content padding: 24dp<br>
                          App bar left content padding: 80dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Menus</h1>
                    <p>A menu is a temporary sheet of paper that always overlaps the app bar, rather than behaving as an extension of the app bar.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_appbar_menu1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Example of an app bar</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_appbar_menu2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Example of menu in an app bar</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="structure-system-bars" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            System bars
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
                    <h1>Status bar/window bar</h1>
                    <p>On Android, the status bar contains notification icons and system icons. On Chrome, the top bar contains the window controls: minimize, full screen, and close. In a Chrome app, the top bar can disappear, and the window controls are then brought into the app bar. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_system_status1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Android status bar</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_system_status2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Chrome window bar</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>Metrics:<br>
                    Android status bar height: 24dp<br>
                    Chrome window height: 32dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_system_status3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Android status bar on top of the app bar</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_system_status4.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Chrome window bar on top of the app bar </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-module-figure col-3">
                  <div class="module"></div>
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_system_status5.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Chrome window controls inside app bar</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module col-1">
                  <div class="module">
                    <h1>Full screen</h1>
                    <p>Some content is best experienced in full-screen mode, such as videos, games, books, and slides. Full-screen mode increases engagement with content by minimizing visual distraction from controls and protecting users from escaping the app accidentally.</p>
                    <p>Full-screen mode comes in several types:</p>
                    <ul class="lst-kix_1yiz4a21yri-0 start">
                      <li>Lean back</li>
                      <li>Immersive</li>
                      <li>Lights Out</li>
                    </ul>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h2>Lean back</h2>
                    <p>Lean back mode is best suited to watching content with limited screen interaction, such as a video. </p>
                    <p><strong>Interaction: </strong>Touch the screen anywhere to bring back the system bars.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_systembars_fullscreen1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Touch the screen anywhere to bring back the system bars</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2>Immersive</h2>
                    <p>Immersive mode is best when users need to interact heavily with the screen, such as playing a game or interacting with an image gallery. You may show and hide your app’s controls along with the system bars as needed. </p>
                    <p><strong>Interaction:</strong> Swipe from any edge of the screen to make the system bars appear. The first time an app goes full-screen, this swipe gesture is explained. </p>
                    <p><strong>Edge swipe exception: </strong>Apps that use the swipe-from-edge gesture to perform actions should also display the system bars when that gesture is used. For example, a drawing app that uses an edge swipe (such as to draw a line) should also display the system bars semi-transparently for a few seconds any time that gesture occurs.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_systembars_fullscreen2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Swipe from the any edge of the screen with a hidden bar to bring back system bars.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_systembars_fullscreen3.png'); ?>"/>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h2>Lights Out </h2>
                    <p>In Lights Out mode, the Action Bar and Status Bar fade away and become unavailable after a few seconds of inactivity. The Navigation Bar is still available and responds to touches but appears dimmed. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/layout/structure/layout_structure_system_lightsout.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/layout/structure/layout_structure_system_lightsout.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <p></p>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Dark status bar</h1>
                    <p>By default, the color of the status or window bar is a darker shade of the app bar color. It can also use color from another element in the layout or be translucent.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_system_color1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Color is based on a sample taken from the content</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_system_color2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Translucent status bar, 20% Black #000000</p>
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
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_system_color3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Dark status bar</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_system_color4.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Status bar color in a darker tone of the app bar color</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Light status bar</h1>
                    <p>The light status bar, with dark icons, better harmonizes with light content and can be used as an alternative to the dark status bar. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_system_color5.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Light status bar color is based on sample taken from content</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_system_color6.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Translucent light status bar, 70% White #FFFFFF</p>
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
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_system_color7.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Light status bar, default background fill is #E0E0E0</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_system_color8.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Light status bar in darker tone of a light app bar color</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Android navigation bar</h1>
                    <p>The navigation bar in Android houses the device navigation controls: Back, Home, and Overview. It also displays a menu for apps written for Android 2.3 or earlier.</p>
                    <p>Height: 48dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_system_android1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Dark</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_system_android2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Light</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Color variants</h1>
                    <p>The navigation bar can be opaque, translucent, or transparent.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_system_android3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Translucent</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_system_android4.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Translucent over complex image</p>
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
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_system_android5.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Transparent</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_system_android6.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Transparent over even-toned image</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Chrome OS shelf</h1>
                    <p>The shelf houses the app launcher, application icons, and system settings on Chrome OS.</p>
                    <p>Height: 56dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_system_chrome.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Example of Chrome OS shelf</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="structure-side-nav" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:5">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:5">
            Side nav
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
                    <p>If present, side nav bars can be pinned for permanent display or float temporarily as overlays. Side navs can be positioned on the left or right side of the screen.</p>
                    <p>The content appearing in the left nav is ideally navigation- or identity-based. Right nav content should be secondary to the main content on a page.</p>
                    <p>See also <a href="../patterns/navigation-drawer.html">Navigation drawer</a>.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_sidenav1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Mobile screen</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_sidenav2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Side nav menu</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Structure</h1>
                    <p>Side nav bars may be pinned for permanent display, or they can float temporarily as overlays. Temporary nav drawers overlay the content canvas; whereas pinned nav panels are situated alongside or below the content canvas.</p>
                    <p>Screen size can determine whether a panel is pinned or an overlay. With sufficient space, a panel can be pinned and content adjusted responsively. With insufficient space, a panel has to be an overlay.</p>
                    <h2><strong><strong>Metrics</strong></strong></h2>
                    <p><strong>Mobile</strong>:</p>
                    <p>Width = <em>Screen width </em>− 56 dp</p>
                    <p>Maximum width: 320dp</p>
                    <p>Maximum width applies only when using a left nav. When using a right nav, the panel can cover the full width of the screen.</p>
                    <p><strong>Desktop</strong>: Maximum width for a left nav is 400dp. The right nav can vary depending on content.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_sidenav_structure1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Left nav on mobile</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/layout/structure/050407_Sidenav_02_xhdpi_002.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/layout/structure/050407_Sidenav_02_xhdpi_002.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Right nav on mobile</p>
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
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_sidenav_structure3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Left nav on desktop </p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_sidenav_structure4.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Right nav on desktop</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="structure-whiteframes" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:6">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:6">
            Whiteframes
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
                    <p>Whiteframes provide a variety of layout structures using a consistent approach to surfaces, layering, and shadows.</p>
                    <p>For download and other information about whiteframes, see <a href="../resources/layout-templates.html#layout-templates-whiteframes">Resources</a>.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout-structure-whiteframe_bigtop_large_xhdpi.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Carded content that expands and collapses</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout-structure-whiteframe_calendar_large_xhdpi.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Overlayed content details with focused app bar on mobile</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout-structure-whiteframe_gallery_large_xhdpi.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Left side nav and one-up stream on mobile</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout-structure-whiteframe_mail_large_xhdpi.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Source list</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout-structure-whiteframe_maps_large_xhdpi.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Full-screen background image with inset search field and carded search results</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/structure/layout-structure-whiteframe_music_large_xhdpi.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Expandable footer drawer</p>
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