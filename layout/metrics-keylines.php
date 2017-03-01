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
              <p>以下模板包含移动端、平板端和桌面端的元素的关键线、间距指南和示例界面。</p>
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
                          <li>内容区域之间的间距：8dp</li>
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
                          右侧图标距离屏幕的右边距为 32dp，以便与浮动操作按钮同轴对齐。
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
                        <p>垂直空间</p>
                        <ol class="lst-kix_xmui2mjw0eb4-0 start" start="1">
                          <li>状态栏：24dp</li>
                          <li>工具栏：56dp</li>
                          <li>内容区域之间的间距：8dp</li>
                          <li>列表项：72dp</li>
                        </ol>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <p><strong>抽屉导航</strong></p>
                    <p>一个侧边栏的导航菜单，包含图标、头像、和左对齐的文本。其他图标右对齐。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_keyline_mobile14.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>关键线和边距</p>
                        <p>屏幕边缘的左右边距：16dp<br>
                          为了与图标和头像相协调，内容的左边距为：72dp<br>
                          侧边导航宽度：屏幕宽度减去操作栏高度。本例中，侧边导航的宽度为屏幕宽度减去 56dp。</p>
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
                      <figcaption>垂直空间</figcaption>
                    </p>
                    <ol class="lst-kix_wza18d9k4k2q-0 start" start="1">
                      <li>帐号菜单和列表项：48dp</li>
                      <li>内容区域之间的间距：8dp</li>
                      <li>导航栏右边距：56dp</li>
                    </ol>
                  </div>
                </section>
              </div>
              <h1>平板端</h1>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>带详细视图的列表</strong></p>
                    <p>左对齐的列表，带有一个右对齐的浮动操作按钮</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_keyline_tablet2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>关键线和边距</p>
                        <p>屏幕边缘的左右边距：24dp<br>
                          内容与屏幕的左边距：80dp<br>
                          卡片的左右内边距：24dp<br>
                          卡片内容的左边距：104dp</p>
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
                        <p>垂直空间</p>
                        <ol class="lst-kix_qacmrwughh6w-0 start" start="1">
                          <li>状态栏和列表顶部间距：24dp</li>
                          <li>列表项：64dp</li>
                          <li>内容区域之间的间距：8dp</li>
                          <li>列表项：72dp</li>
                        </ol>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>带详细视图的列表</strong></p>
                    <p>左对齐的列表，带有一个右对齐的浮动操作按钮</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_keyline_tablet5.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>关键线和边距</p>
                        <p>屏幕边缘的左右边距：24dp<br>
                          图标的垂直中线与屏幕边缘的距离：52dp<br>
                          导航项距离屏幕的左边距：104dp<br>
                          内容与屏幕左边距：80dp<br>
                          卡片左右内边距：32dp<br>
                          卡片导航项的左边距：96dp</p>
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
                        <p>垂直空间</p>
                        <ol class="lst-kix_o4su4vbde70q-0 start" start="1">
                          <li>状态栏：24dp</li>
                          <li>工具栏和列表项：64dp</li>
                          <li>内容区域之间的间距：8dp</li>
                          <li>副标题、列表项和滑块：48dp</li>
                          <li>标题：80dp</li>
                        </ol>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <h1>桌面端</h1>
              <p>用于桌面的关键线和间隔块会根据窗口大小从平板端和移动设备继承网格规则。</p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_keylines_desktop1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>桌面端的全屏</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>调整大小后的窗口</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_keylines_desktop3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>水平窗口</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_keylines_desktop4.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>垂直窗口</p>
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
            比例关键线
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
                    <p>元素宽度与高度的比例（称为<strong>宽高比</strong>），可以同时应用于 UI 元素和屏幕尺寸。宽高比写作：宽:高。</p>
                    <p>推荐的宽高比为：</p>
                    <ul class="lst-kix_o15apqn3jiyj-0 start">
                      <li>16:9</li>
                      <li>3:2</li>
                      <li>4:3</li>
                      <li>1:1</li>
                      <li>3:4</li>
                      <li>2:3</li>
                    </ul>
                    <p>例如：</p>
                    <ul class="lst-kix_hc7d1myqxv1l-0 start">
                      <li>1:1 的宽高比说明元素有相同的宽度和高度。</li>
                      <li>2:3 宽高比的图片，宽度为 360dp 时，高度为 540dp。</li>
                    </ul>
                    <p>使用以下公式，根据宽高比来确定元素的宽度或高度。宽高比总是用分数表示。例如，3:2 会被视为 3/2。</p>
                    <p>宽度 = 宽高比 * 高度 </p>
                    <p>高度 = 宽度 / 宽高比</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_ratiokeylines1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>屏幕宽度</p>
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
                        <p>移动端的屏幕宽度示例</p>
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
                        <p>元素宽度</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_ratiokeylines4.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>移动端的元素宽度示例</p>
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
            使用增量调整大小
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
                    <p>增量是一个度量单位，用来确定应用中其他元素的大小和位置。</p>
                    <p>例如，你可以把增量定义为标准元素（例如操作栏）的高度。如果操作栏高度是 56dp，增量就可以定义为 56 x 56dp。通过元素有多少个 56dp 的增量宽或高，来确定元素的大小。</p>
                    <p>如果一个元素是 8 增量宽，使用 56dp 作为增量大小，那么它的宽度是 448dp。</p>
                    <p>增量关键线主要应用于桌面端，也常用于平板端，但不常用与移动端。增量的数量会根据窗口大小而变化。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_incremental2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>该示例中的卡片宽度是 8x 的水平增量。</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_incremental3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>该示例中的应用栏扩展后的高度为 2x 的增量，右侧面板的宽度为 5x 的增量。</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_incremental4.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>在 Material Design 的 UI 中，增量可以在很多元素上使用。</p>
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
            触摸目标大小
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
                    <p>为了确保信息密度和可用性之间的平衡，触摸目标的尺寸至少为 48 x 48 dp。在大多数情况下，触摸目标之间至少还有 8dp 的间隔。</p>
                    <p>把元素的宽度和高度调整为至少 48dp，以确保在任何尺寸的屏幕中，元素的物理尺寸都至少为 9mm。触摸目标的大小建议为 7-10mm。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_touchtarget1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>头像尺寸：40dp <br>
                        图标尺寸：24dp<br>
                        触摸目标尺寸均为：48dp</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_touchtarget3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>触摸目标高度：48dp <br>
                        按钮高度：36dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_touchtarget2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>触摸目标示例</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/metrics-keylines/layout_metrics_touchtarget4.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>触摸目标和按钮示例</p>
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