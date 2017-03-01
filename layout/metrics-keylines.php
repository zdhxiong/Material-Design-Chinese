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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="metrics-keylines.html#metrics-keylines-baseline-grids" data-qp-ui-data-id="qp:1">基准网格</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="metrics-keylines.html#metrics-keylines-keylines-spacing" data-qp-ui-data-id="qp:2">关键线和间距</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="metrics-keylines.html#metrics-keylines-ratio-keylines" data-qp-ui-data-id="qp:3">比例关键线</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="metrics-keylines.html#metrics-keylines-sizing-by-increments" data-qp-ui-data-id="qp:4">使用增量调整大小</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="metrics-keylines.html#metrics-keylines-touch-target-size" data-qp-ui-data-id="qp:5">触控目标大小</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="metrics-keylines-baseline-grids" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            基准网格
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
                    <p>手机、平板和桌面设备的所有组件都与 8dp 的基准网格对齐。工具栏中的图标则与 4dp 的基准网格对齐。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_baseline2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>基准网格示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_baseline3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>基准网格示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>文字与 4dp 的基准网格对齐。更多细节详见<a href="../style/typography.html">排版</a>。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_baseline5.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>基准网格中的排版示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="metrics-keylines-keylines-spacing" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            关键线和间距
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>以下模板包含移动设备、平板和桌面上的元素的关键线、间距指南和示例界面。</p>
              <h1>模板</h1>
              <p>
                <div class="modulettes">
                  <a class="modulette download trackdl" download="" href="<?php static_url('../static/media/layout/metrics-keylines/Layout_Mobile_Whiteframe.ai'); ?>" title="Mobile layout template">
                    <img alt="" class="icon download-icon" src="<?php static_url('../static/images/callouts/download.svg'); ?>">
                    <div class="info">
                      <div class="title">移动端布局模版</div>
                      <span class="subtitle">2.23 MB (.ai) </span>
                    </div>
                    </img>
                  </a>
                </div>
              </p>
              <p>
                <div class="modulettes">
                  <a class="modulette download trackdl" download="" href="<?php static_url('../static/media/layout/metrics-keylines/Layout_Tablet_Whiteframe.ai'); ?>" title="Tablet layout template">
                    <img alt="" class="icon download-icon" src="<?php static_url('../static/images/callouts/download.svg'); ?>">
                    <div class="info">
                      <div class="title">平板端布局模版</div>
                      <span class="subtitle">1.39 MB (.ai) </span>
                    </div>
                    </img>
                  </a>
                </div>
              </p>
              <p>
                <div class="modulettes">
                  <a class="modulette download trackdl" download="" href="<?php static_url('../static/media/layout/metrics-keylines/Layout_Desktop_Whiteframe.ai'); ?>" title="Desktop Layout Template">
                    <img alt="" class="icon download-icon" src="<?php static_url('../static/images/callouts/download.svg'); ?>">
                    <div class="info">
                      <div class="title">桌面端布局模版</div>
                      <span class="subtitle">89.40 MB (.ai) </span>
                    </div>
                    </img>
                  </a>
                </div>
              </p>
              <h1>移动端</h1>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p><strong>列表</strong></p>
                    <p>一个两列、左对齐的列表，且有一个 56dp 的浮动操作按钮。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_keyline_mobile2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>关键线和边距</p>
                        <p>屏幕边缘的左右边距：16dp<br>
                          与图标或头像相关联的内容的左边距：72dp<br>
                          手机上的水平边距：16dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_keyline_mobile3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>垂直间距</p>
                        <ol class="lst-kix_9b5cwq3ltnu1-0 start" start="1">
                          <li>状态栏：24dp</li>
                          <li>工具栏：56dp</li>
                          <li>副标题：48dp</li>
                          <li>列表项：72dp</li>
                        </ol>
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
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_keyline_mobile5.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>关键线和边距</p>
                        <p>屏幕边缘的左右边距：16dp<br>
                          内容与屏幕左边缘的间距：72dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_keyline_mobile6.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>垂直间距</p>
                        <ol class="lst-kix_9is1l1vcq9ji-0 start" start="1">
                          <li>状态栏：24dp</li>
                          <li>工具栏：56dp</li>
                          <li>标题和列表项：72dp</li>
                          <li>副标题：48dp</li>
                          <li>内容区之间的间隔：8dp</li>
                        </ol>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p><strong>详情视图</strong></p>
                    <p>详情卡片，包含 56dp 的浮动操作按钮。</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_keyline_mobile8.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>关键线和边距</p>
                        <p>屏幕边缘的左右边距：16dp<br>
                          内容与屏幕左边缘的间距：72dp<br>
                          Right-side icons align 32dp from the right edge to coordinate with the floating action button.
                        </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_keyline_mobile9.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Vertical spacing</p>
                        <ol class="lst-kix_xmui2mjw0eb4-0 start" start="1">
                          <li>Status bar: 24dp</li>
                          <li>Toolbar: 56dp</li>
                          <li>Space between content areas: 8dp</li>
                          <li>List item: 72dp</li>
                        </ol>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <p><strong>Navigation drawer</strong></p>
                    <p>A side navigation menu with icons, avatars, and text aligned on the left. Other icons align on the right.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_keyline_mobile14.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Keylines and margins</p>
                        <p>Screen edge left and right margins: 16dp<br>
                          Content associated with an icon or avatar left margin: 72dp<br>
                          Side nav width: The screen width minus the height of the action bar. Here, the width is 56dp
                          from the right screen edge.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module">
                    <h2>
                      <figure class="s-tag-media">
                        <div class="media">
                          <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_keyline_mobile15.png'); ?>"/>
                        </div>
                      </figure>
                    </h2>
                    <p>
                      <figcaption>Vertical spacing</figcaption>
                    </p>
                    <ol class="lst-kix_wza18d9k4k2q-0 start" start="1">
                      <li>Account menu and list items: 48dp</li>
                      <li>Space between content areas: 8dp</li>
                      <li>Navigation right margin: 56dp</li>
                    </ol>
                  </div>
                </section>
              </div>
              <h1>Tablet</h1>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>List with detail view</strong></p>
                    <p>Left-aligned list with a right-aligned floating action button</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_keyline_tablet2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Keylines and margins</p>
                        <p>Screen edge left and right margins: 24dp<br>
                          Content left margin from screen edge: 80dp<br>
                          Card left and right padding: 24dp<br>
                          Card content left padding: 104dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_keyline_tablet3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Vertical spacing</p>
                        <ol class="lst-kix_qacmrwughh6w-0 start" start="1">
                          <li>Status bar and space above list: 24dp</li>
                          <li>List item: 64dp</li>
                          <li>Space between content areas: 8dp</li>
                          <li>List item: 72dp</li>
                        </ol>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>List with detail view</strong></p>
                    <p>Left-aligned list with a left-aligned floating action button</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_keyline_tablet5.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Keylines and margins</p>
                        <p>Screen edge left and right padding: 24dp<br>
                          Icons’ vertical center distance from screen edge: 52dp<br>
                          Nav item left padding from screen edge: 104dp<br>
                          Content left margin from screen edge: 80dp<br>
                          Card left and right padding: 32dp<br>
                          Card nav item left padding: 96dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_keyline_tablet6.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Vertical spacing</p>
                        <ol class="lst-kix_o4su4vbde70q-0 start" start="1">
                          <li>Status bar: 24dp</li>
                          <li>Toolbar and list item: 64dp</li>
                          <li>Space between content areas: 8dp</li>
                          <li>Subtitle, list item, and slider: 48dp</li>
                          <li>Title: 80dp</li>
                        </ol>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <h1>Desktop</h1>
              <p>Keylines and spacing blocks for desktop inherit grid rules from tablet and mobile, depending on window size.</p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_keylines_desktop1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Desktop full screen</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>Resized windows</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_keylines_desktop3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Horizontal window</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_keylines_desktop4.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Vertical window</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="metrics-keylines-ratio-keylines" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            Ratio keylines
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
                    <p>The proportion of an element’s width to its height (called the <strong>aspect ratio</strong>) applies to both UI elements and screen size. It is written as width:height.</p>
                    <p>These aspect ratios are recommended:</p>
                    <ul class="lst-kix_o15apqn3jiyj-0 start">
                      <li>16:9</li>
                      <li>3:2</li>
                      <li>4:3</li>
                      <li>1:1</li>
                      <li>3:4</li>
                      <li>2:3</li>
                    </ul>
                    <p>For example:</p>
                    <ul class="lst-kix_hc7d1myqxv1l-0 start">
                      <li>A 1:1 aspect ratio means an element has equal height and width.</li>
                      <li>A 360dp wide image with a 2:3 aspect ratio has a height of 540.</li>
                    </ul>
                    <p>Determine the width or height of your element for a chosen aspect ratio using the below formulas. The aspect ratio is always expressed as a fraction. For example, 3:2 is treated as 3/2.</p>
                    <p>Width = Aspect ratio * Height </p>
                    <p>Height = Width/Aspect ratio</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_ratiokeylines1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Screen width</p>
                        <p></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_ratiokeylines2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Example of screen width on mobile</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_ratiokeylines3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Element width</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_ratiokeylines4.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Example of element width on mobile</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="metrics-keylines-sizing-by-increments" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            Sizing by increments
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
                    <p>An increment is a measurement used to determine the size and position of other elements in the app. </p>
                    <p>For example, you can define an increment as the height of a standard element, such as the action bar. If the action bar is 56dp tall, you may define one increment as equal to 56 x 56dp. Determine the size of other elements by how many 56dp increments wide or tall an element should be. </p>
                    <p>If an element is 8 increments wide, using 56dp as the increment size, the width is equal to 448dp.</p>
                    <p>Incremental keylines apply mostly to desktop, often to tablet, and infrequently to mobile. The number of increments varies based on window size.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_incremental2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>This example card width has a horizontal increment of 8x.</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_incremental3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>The height of the example extended app bar is 2x the increment, and the width of the right panel is 5x the increment.</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_incremental4.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Increments can work across many elements in material design UI.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="metrics-keylines-touch-target-size" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:5">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:5">
            Touch target size
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
                    <p>To ensure balanced information density and usability, touch targets should be at least 48 x 48 dp. In most cases, there should be 8dp or more space between them.</p>
                    <p>Size elements at least 48dp high and wide to ensure a physical size of about 9mm regardless of screen size. The recommended target size for touchscreen objects is 7-10mm.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_touchtarget1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Avatar: 40dp <br>
                        Icon: 24dp<br>
                        Touch target on both: 48dp</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_touchtarget3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Touch target height: 48dp <br>
                        Button height: 36dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_touchtarget2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Example of touch targets</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_touchtarget4.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Example of touch targets and buttons</p>
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