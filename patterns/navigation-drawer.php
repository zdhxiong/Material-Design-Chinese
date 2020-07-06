<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>抽屉式导航从左侧滑入，包含了应用的导航目标。</h1>
          <div class="col-list">
            <section class="module-module-figure col-3 h3-spacing">
              <div class="module">
                <p>抽屉式导航和屏幕等高，抽屉后面的内容依然可见，但是被蒙上了一层半透明黑色的遮罩。</p>
                <p>抽屉式导航遵循<a href="../components/lists.html">列表</a>的关键线和度量。</p>
              </div>
              <div class="module">
                <h3>静止海拔高度</h3>
                <p>16dp</p>
                <h3>抽屉式导航类型</h3>
                <p>固定显示<br>
                  持续显示<br>
                  迷你版<br>
                  临时显示</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 3000px">
                    <div class="frame " style="padding-top: 100.0%">
                      <img alt="" src="<?php static_url('../static/media/patterns/navigation-drawer/patterns_navigation_drawer.png'); ?>" loading="lazy"/>
                    </div>
                  </div>
                </figure>
              </div>
            </section>
          </div>
        </div>
      </div>

      <nav class="chapter-toc">
        <h1>目录</h1>
        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="navigation-drawer.html#navigation-drawer-specs" data-qp-ui-data-id="qp:1">规格</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="navigation-drawer.html#navigation-drawer-content" data-qp-ui-data-id="qp:2">内容</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="navigation-drawer.html#navigation-drawer-behavior" data-qp-ui-data-id="qp:3">行为</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">
        <div id="navigation-drawer-specs" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            规格
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="figure-figure-figure col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-0" src="<?php static_url('../static/media/patterns/navigation-drawer/patterns_navdrawer_metrics1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-0">
                        <p>排版</p>
                      </figcaption>
                    </figure>
                    <ol class="lst-kix_pwmxzo3irtjh-0 start" start="1">
                      <li>名称：Roboto Medium，14sp，#FFFFFF</li>
                      <li>邮箱地址：Roboto Regular，14sp，#FFFFFF</li>
                      <li>列表项：Roboto Medium，14sp，87% #000000</li>
                      <li>副标题：Roboto Medium，14sp，54% #000000。与 16dp 的关键线对齐。</li>
                    </ol>
                    <h2></h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-1" src="<?php static_url('../static/media/patterns/navigation-drawer/patterns_navdrawer_metrics2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-1">
                        <p>关键线和边距</p>
                        <p>图标和屏幕左右两边边距：16dp</p>
                        <p>图标颜色值：54% #000000</p>
                        <p>带图标或头像的内容的左边距：72dp</p>
                        <p>侧边导航宽度：等于屏幕宽度减去操作栏高度。在上面的例子中，抽屉式导航距离屏幕右侧 56dp。</p>
                        <p>最大宽度：抽屉式导航最大宽度在手机上为 280dp，在平板上为 320dp。这个数值是由标准增量乘以 5 得出的（标准增量在手机上为 56dp，在平板上为 64dp）。</p>
                        <p>手机上的水平间距为 16dp，平板上为 24dp。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-2" src="<?php static_url('../static/media/patterns/navigation-drawer/patterns_navdrawer_metrics3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-2">
                        <p>垂直间距</p>
                      </figcaption>
                    </figure>
                    <ol class="lst-kix_t0e6vxld876k-0 start" start="1">
                      <li>状态栏：24dp</li>
                      <li>副标题：56dp</li>
                      <li>内容区域之间的间距：8dp</li>
                      <li>副标题和列表项：48dp</li>
                    </ol>
                    <p>为每个列表组的顶部和底部添加 8dp 的内边距。有一个例外是：列表组的顶部是一个副标题，则可以不加，因为副标题已经包含了边距。</p>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="navigation-drawer-content" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            内容
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-figure-module col-3 h1-spacing">
                  <div class="module">
                    <h1>海拔高度</h1>
                    <p>抽屉式导航和屏幕等高（包含状态栏），静止海拔高度是 16dp。抽屉后面的内容依然可见，但是会被蒙上一层半透明的黑色遮罩。</p>
                    <h2></h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 77.7777777778%">
                          <img alt="" aria-describedby="content-figure-caption-0" src="<?php static_url('../static/media/patterns/navigation-drawer/patterns_navdrawer_elevation1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="content-figure-caption-0">
                        <p>Android 上的抽屉式导航</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>选中状态</h1>
                    <p>被选中的列表项会将其颜色改为应用的主色（或 #000000 100%），来指示出已被选中。此外，触摸涟漪也会高亮出选中项所在的行。</p>
                    <p>如果触摸涟漪/高亮和应用的主色之间没有足够的对比度，请使用主色中更暗的色调。</p>
                    <h2></h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 120.0%">
                          <img alt="" aria-describedby="content-figure-caption-1" src="<?php static_url('../static/media/patterns/navigation-drawer/patterns_navdrawer_selection1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="content-figure-caption-1">
                        <p>被选中的列表项</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 120.0%">
                          <img alt="" aria-describedby="content-figure-caption-2" src="<?php static_url('../static/media/patterns/navigation-drawer/patterns_navdrawer_selection3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="content-figure-caption-2">
                        <p>触摸涟漪/高亮</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 120.0%">
                          <img alt="" aria-describedby="content-figure-caption-3" src="<?php static_url('../static/media/patterns/navigation-drawer/patterns_navdrawer_selection5.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="content-figure-caption-3">
                        <p>触摸涟漪/高亮</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 120.0%">
                          <img alt="" aria-describedby="content-figure-caption-4" src="<?php static_url('../static/media/patterns/navigation-drawer/patterns_navdrawer_selection2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="content-figure-caption-4">
                        <p>触摸涟漪/高亮</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 360px">
                        <div class="frame " style="padding-top: 120.0%">
                          <img alt="" aria-describedby="content-figure-caption-5" src="<?php static_url('../static/media/patterns/navigation-drawer/patterns_navdrawer_selection4.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="content-figure-caption-5">
                        <p>触摸涟漪/高亮</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 120.0%">
                          <img alt="" aria-describedby="content-figure-caption-6" src="<?php static_url('../static/media/patterns/navigation-drawer/patterns_navdrawer_selection6.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="content-figure-caption-6">
                        <p>触摸涟漪/高亮</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>分隔线</h1>
                    <p>抽屉式导航中所有的分隔线都是全出血的，每个分隔线的上方和下方都有 8dp 的内边距。</p>
                    <h2></h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 120.0%">
                          <img alt="" aria-describedby="content-figure-caption-7" src="<?php static_url('../static/media/patterns/navigation-drawer/patterns_navdrawer_dividers1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="content-figure-caption-7">
                        <p>分隔符示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 120.0%">
                          <img alt="" aria-describedby="content-figure-caption-8" src="<?php static_url('../static/media/patterns/navigation-drawer/patterns_navdrawer_dividers2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="content-figure-caption-8">
                        <p>8dp 的垂直间距</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>滚动</h1>
                    <p>抽屉式导航的滚动方式和视图的滚动方式相同。</p>
                    <h2></h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 120.0%">
                          <img alt="" aria-describedby="content-figure-caption-9" src="<?php static_url('../static/media/patterns/navigation-drawer/patterns_navdrawer_scrolling1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="content-figure-caption-9">
                        <p>滚动前的抽屉式导航</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 120.0%">
                          <img alt="" aria-describedby="content-figure-caption-10" src="<?php static_url('../static/media/patterns/navigation-drawer/patterns_navdrawer_scrolling2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="content-figure-caption-10">
                        <p>滚动中的抽屉式导航</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3 h1-spacing">
                  <div class="module"><h1>设置和支持</h1>
                    <p>在滚动时，设置和支持始终位于列表底部，与其他列表内容对齐。它们指的是 “帮助”、“返回” 或 “帮助 &amp; 反馈”，取决于你的产品提供什么。</p>
                    <h2></h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="content-figure-caption-11" src="<?php static_url('../static/media/patterns/navigation-drawer/patterns_navdrawer_settings1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="content-figure-caption-11">
                        <p>滚动时，设置和支持始终位于列表底部。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="navigation-drawer-behavior" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            行为
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>固定显示</h1>
                    <p><strong>建议的桌面端默认值</strong></p>
                    <p><strong><br></strong>固定显示的抽屉式导航始终可见，并固定在左边缘，和内容或背景在同一海拔高度。它们不能被关闭。</p>
                    <p>使用以下最小值来计算固定的阈值：</p>
                    <p>1. 侧边导航宽度<br>
                      2. 内容宽度<br>
                      3. 内容边距</p>
                    <h2></h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 118.421052632%">
                          <img alt="" src="<?php static_url('../static/media/patterns/navigation-drawer/patterns_navdrawer_behavior_permanent1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>固定显示的抽屉式导航类型</h2>
                    <p>整个界面的结构和行为决定了要使用何种固定显示的抽屉式导航：</p>
                    <ul class="lst-kix_6ytfk4wm2jd2-0 start">
                      <li><strong>全高的抽屉式导航</strong>：应用使用从左到右的层次结构，并专注于内容展示</li>
                      <li><strong>被应用栏截断的抽屉式导航</strong>：应用需要平衡整个屏幕，并专注于生产力</li>
                      <li><strong>浮动抽屉式导航</strong>：应用需要更少的层次结构</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 195.0%">
                          <img alt="" aria-describedby="behavior-figure-caption-0" src="<?php static_url('../static/media/patterns/navigation-drawer/patterns_navdrawer_behavior_permanent2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-0">
                        <p>固定显示的、全高的抽屉示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 195.0%">
                          <img alt="" aria-describedby="behavior-figure-caption-1" src="<?php static_url('../static/media/patterns/navigation-drawer/patterns_navdrawer_behavior_permanent3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-1">
                        <p>固定显示的、被截断的抽屉示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 195.0%">
                          <img alt="" aria-describedby="behavior-figure-caption-2" src="<?php static_url('../static/media/patterns/navigation-drawer/patterns_navdrawer_behavior_permanent4.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-2">
                        <p>固定显示的、浮动抽屉示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 195.0%">
                          <img alt="" aria-describedby="behavior-figure-caption-3" src="<?php static_url('../static/media/patterns/navigation-drawer/patterns_navdrawer_behavior_permanent5.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-3">
                        <p>卡片中的固定显示的、浮动的抽屉示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>连续显示</h1>
                    <p>连续显示的抽屉式导航可以在打开和关闭之间切换。抽屉的海拔高度和内容相同。它默认关闭，点击菜单图标后会打开，打开后一直显示，直到被用户关闭。抽屉会在各个操作和各个会话之间保持同一状态。</p>
                    <p>当位于页面网格之外的抽屉被打开时，抽屉会强制其他内容改变大小，来适应更小的视图。</p>
                    <p>连续显示的抽屉式导航适用于所有比手机尺寸大的设备。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 213.333333333%">
                          <img alt="" aria-describedby="behavior-figure-caption-4" src="<?php static_url('../static/media/patterns/navigation-drawer/patterns_navdrawer_behavior_persistent1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-4">
                        <p>关闭的连续显示的抽屉示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 213.333333333%">
                          <img alt="" aria-describedby="behavior-figure-caption-5" src="<?php static_url('../static/media/patterns/navigation-drawer/patterns_navdrawer_behavior_persistent2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-5">
                        <p>打开的连续显示的抽屉示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>对于需要使用向上箭头进行导航的有多个层次结构的应用，不建议使用连续显示的抽屉式导航。</p>
                    <h2></h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 47.3684210526%">
                          <img alt="" aria-describedby="behavior-figure-caption-6" src="<?php static_url('../static/media/patterns/navigation-drawer/patterns_navdrawer_behavior_persistent3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-6">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>迷你版</h2>
                    <p>在这种变体中，连续显示的抽屉式导航改变了宽度。它的静止状态是一个小型抽屉，和内容处于同一海拔高度，且被应用栏截断。展开时，它就变成了标准的连续显示的抽屉式导航栏。</p>
                    <p><strong>推荐用于：</strong><br>
                      需要从内容旁边快速访问应用的其余部分</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 213.333333333%">
                          <img alt="" aria-describedby="behavior-figure-caption-7" src="<?php static_url('../static/media/patterns/navigation-drawer/patterns_navdrawer_behavior_persistent4.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-7">
                        <p>迷你版抽屉的示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 213.333333333%">
                          <img alt="" aria-describedby="behavior-figure-caption-8" src="<?php static_url('../static/media/patterns/navigation-drawer/patterns_navdrawer_behavior_persistent5.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-8">
                        <p>打开的连续显示的抽屉示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>临时显示</h1>
                    <p>临时显示的抽屉式导航可以切换打开和关闭状态。默认情况下关闭，抽屉式导航会在所有其他内容之上暂时打开，直到选择了某个部分后会自动关闭。</p>
                    <p><strong>推荐用于：</strong><br>平板</p>
                    <p><strong>必须用于：</strong><br>手机</p>
                    <h2></h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="behavior-figure-caption-9" src="<?php static_url('../static/media/patterns/navigation-drawer/patterns_navdrawer_behavior_temporary1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-9">
                        <p>手机上的关闭的临时抽屉示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="behavior-figure-caption-10" src="<?php static_url('../static/media/patterns/navigation-drawer/patterns_navdrawer_behavior_temporary2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-10">
                        <p>手机上打开的临时抽屉示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>也可以把迷你版作为临时抽屉式导航的关闭状态。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 213.333333333%">
                          <img alt="" aria-describedby="behavior-figure-caption-11" src="<?php static_url('../static/media/patterns/navigation-drawer/patterns_navdrawer_behavior_temporary3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-11">
                        <p>平板上关闭的临时抽屉示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 213.333333333%">
                          <img alt="" aria-describedby="behavior-figure-caption-12" src="<?php static_url('../static/media/patterns/navigation-drawer/patterns_navdrawer_behavior_temporary4.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-12">
                        <p>平板上打开的临时抽屉示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 200.0%">
                          <img alt="" aria-describedby="behavior-figure-caption-13" src="<?php static_url('../static/media/patterns/navigation-drawer/patterns_navdrawer_behavior_temporary5.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-13">
                        <p>桌面端关闭的临时抽屉示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 250.0%">
                          <img alt="" aria-describedby="behavior-figure-caption-14" src="<?php static_url('../static/media/patterns/navigation-drawer/patterns_navdrawer_behavior_temporary6.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-14">
                        <p>桌面端打开的临时抽屉示例</p>
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
