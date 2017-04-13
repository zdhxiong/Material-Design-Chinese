<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div><h1>Material Design 中的响应式布局可以适配任何尺寸的屏幕。这个 UI 指南包括：用于确保布局一致性的弹性网格，在不同的屏幕上内容的断点细节，以及应用从小屏幕到大屏幕如何缩放的说明。</h1></div>
      </div>

      <nav class="chapter-toc">
        <h1>目录</h1>
        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="responsive-ui.html#responsive-ui-breakpoints" data-qp-ui-data-id="qp:1">断点</a></li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="responsive-ui.html#responsive-ui-grid" data-qp-ui-data-id="qp:2">网格</a></li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="responsive-ui.html#responsive-ui-surface-behaviors" data-qp-ui-data-id="qp:3">界面行为</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="responsive-ui.html#responsive-ui-patterns" data-qp-ui-data-id="qp:4">模式</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="responsive-ui-breakpoints" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            断点
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div><p>为了获得最佳用户体验，Material Design 应该为以下断点适配布局：480、600、840、960、1280、1440、以及 1600dp。</p>
              <div class="modulettes">
                <a class="modulette container md" href="http://material.io/resizer/" target="_blank">
                  <img alt="" class="icon callout-icon" src="<?php static_url('../static/spec/images/callouts/md.svg'); ?>">
                  <div class="info">
                    <div class="title">Resizer</div>
                    <span class="subtitle">通过这款工具预览 Material Design 在桌面、手机和平板上的断点。</span>
                  </div>
                  </img>
                </a>
              </div>
              <div class="col-list">
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 2320px">
                        <div class="frame " style="padding-top: 44.1379310345%">
                          <img alt="" src="<?php static_url('../static/media/layout/responsive-ui/layout_adaptive_breakpoints_01.png'); ?>"/>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <p><strong>1. 布局中的摘要和详细信息视图</strong></p>
                    <ul class="lst-kix_yt2oj44xi7j7-0 start">
                      <li>布局宽度小于 600dp 时，可以使用单级的内容层次（可以是摘要或详细信息，但两者不能同时显示）填满屏幕。</li>
                      <li>布局宽度超过 600dp 时，可以同时放置两级内容层次（可以同时显示摘要和详细信息）。</li>
                    </ul>
                  </div>
                  <div class="module">
                    <p><strong>2. 最大屏幕宽度</strong></p>
                    <p>布局宽度超过 1600dp 时，可以让布局宽度一直增加，直到达到最大宽度。此时，网格可以执行以下的某一项：</p>
                    <ul class="lst-kix_8aft212gh0kb-0 start">
                      <li>变成居中对齐，在内容区域两侧增加外边距</li>
                      <li>保持左对齐，同时不断增加内容右侧外边距</li>
                      <li>内容宽度继续增加，同时展示出更多额外的内容</li>
                    </ul>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <p><strong>断点系统</strong></p>
                    <p>这些断点描述了不同屏幕、设备和方向下，列和宽度的规范。</p>
                    <p>对于某些尺寸，即使设备发生了旋转，值也保持不变。因此任意方向上的最小宽度都是一个限定的值。</p>
                    <p>* 设备的最小宽度 &lt;600 时为 16dp</p>
                    <p>** 桌面端的断点比列表中的值小 16dp，以适应 Chrome 浏览器的变化。</p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>断点（dp）</p></td>
                        <td colspan="1" rowspan="1"><p>手机 / 平板纵向</p></td>
                        <td colspan="1" rowspan="1"><p>手机 / 平板横向</p></td>
                        <td colspan="1" rowspan="1"><p>窗口</p></td>
                        <td colspan="1" rowspan="1"><p>列数</p></td>
                        <td colspan="1" rowspan="1"><p>间隔</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>小尺寸手机</p></td>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>xsmall</p></td>
                        <td colspan="1" rowspan="1"><p>4</p></td>
                        <td colspan="1" rowspan="1"><p>16</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>360</p></td>
                        <td colspan="1" rowspan="1"><p>中尺寸手机</p></td>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>xsmall</p></td>
                        <td colspan="1" rowspan="1"><p>4</p></td>
                        <td colspan="1" rowspan="1"><p>16</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>400</p></td>
                        <td colspan="1" rowspan="1"><p>大尺寸手机</p></td>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>xsmall</p></td>
                        <td colspan="1" rowspan="1"><p>4</p></td>
                        <td colspan="1" rowspan="1"><p>16</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>480</p></td>
                        <td colspan="1" rowspan="1"><p>大尺寸手机</p></td>
                        <td colspan="1" rowspan="1"><p>小尺寸手机</p></td>
                        <td colspan="1" rowspan="1"><p>xsmall</p></td>
                        <td colspan="1" rowspan="1"><p>4</p></td>
                        <td colspan="1" rowspan="1"><p>16</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>600</p></td>
                        <td colspan="1" rowspan="1"><p>小尺寸平板</p></td>
                        <td colspan="1" rowspan="1"><p>中尺寸手机</p></td>
                        <td colspan="1" rowspan="1"><p>small</p></td>
                        <td colspan="1" rowspan="1"><p>8</p></td>
                        <td colspan="1" rowspan="1"><p>16/24*</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>720</p></td>
                        <td colspan="1" rowspan="1"><p>大尺寸平板</p></td>
                        <td colspan="1" rowspan="1"><p>大尺寸手机</p></td>
                        <td colspan="1" rowspan="1"><p>small</p></td>
                        <td colspan="1" rowspan="1"><p>8</p></td>
                        <td colspan="1" rowspan="1"><p>16/24*</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>840</p></td>
                        <td colspan="1" rowspan="1"><p>大尺寸平板</p></td>
                        <td colspan="1" rowspan="1"><p>大尺寸手机</p></td>
                        <td colspan="1" rowspan="1"><p>small</p></td>
                        <td colspan="1" rowspan="1"><p>12</p></td>
                        <td colspan="1" rowspan="1"><p>16/24*</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>960</p></td>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>小尺寸平板</p></td>
                        <td colspan="1" rowspan="1"><p>small</p></td>
                        <td colspan="1" rowspan="1"><p>12</p></td>
                        <td colspan="1" rowspan="1"><p>24</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>1024**</p></td>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>大尺寸平板</p></td>
                        <td colspan="1" rowspan="1"><p>medium</p></td>
                        <td colspan="1" rowspan="1"><p>12</p></td>
                        <td colspan="1" rowspan="1"><p>24</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>1280**</p></td>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>大尺寸平板</p></td>
                        <td colspan="1" rowspan="1"><p>medium</p></td>
                        <td colspan="1" rowspan="1"><p>12</p></td>
                        <td colspan="1" rowspan="1"><p>24</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>1440**</p></td>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>large</p></td>
                        <td colspan="1" rowspan="1"><p>12</p></td>
                        <td colspan="1" rowspan="1"><p>24</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>1600**</p></td>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>large</p></td>
                        <td colspan="1" rowspan="1"><p>12</p></td>
                        <td colspan="1" rowspan="1"><p>24</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>1920**</p></td>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>xlarge</p></td>
                        <td colspan="1" rowspan="1"><p>12</p></td>
                        <td colspan="1" rowspan="1"><p>24</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="responsive-ui-grid" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            网格
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>Material Design 的响应式 UI 基于 12 列网格布局。该网格可以确保不同布局之间的视觉一致性，同时可以灵活的适配多种宽度的设计。网格列的数量取决于断点系统。</p>
              <div class="col-list">
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 2320px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 44.1379310345%">
                          <video aria-describedby="grid-figure-caption-1" controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/layout/responsive-ui/layout_adaptiveUI_grid_01_hero.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/layout/responsive-ui/layout_adaptiveUI_grid_01_hero.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="grid-figure-caption-1">
                        <p>此动画展示了界面和面板是如何与 12 列网格对齐的。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong>外边距和间隙</strong></h2>
                    <p>响应式网格更注重一致的外边距和间隙宽度，而不是列宽。Material Design 的外边距和列都遵循 8dp 的基准网格。外边距和间隙可以是 8、16、24、或 40dp。</p>
                    <p>外边距和间隙不需要相等。例如，可以在同一布局中使用 40dp 的外边距和 24dp 的间隙。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 67.3684210526%">
                          <video aria-describedby="grid-figure-caption-2" controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/layout/responsive-ui/layout_adaptiveUI_grid_02_margins.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/layout/responsive-ui/layout_adaptiveUI_grid_02_margins.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="grid-figure-caption-2">
                        <p>此动画展示了下列外边距和间隙宽度的变化：</p>
                        <ol class="lst-kix_l8t11msx2rv8-0 start" start="1">
                          <li>8dp 的外边距和间隙</li>
                          <li>16dp 的外边距和间隙</li>
                          <li>24dp 的外边距和间隙</li>
                          <li>40dp 的外边距和间隙</li>
                          <li>40dp 的外边距和 24dp 的间隙</li>
                        </ol>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong>全宽 vs 居中</strong></h2>
                    <p><strong>全宽网格</strong>使用流式列和断点来确定何时需要更改布局。</p>
                    <p><strong>居中网格</strong>使用固定列，并在所有列（加上确切的外边距）不再适配屏幕时重新排列布局。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 67.3684210526%">
                          <video aria-describedby="grid-figure-caption-3" controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/layout/responsive-ui/layout_adaptiveUI_grid_03_width.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/layout/responsive-ui/layout_adaptiveUI_grid_03_width.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="grid-figure-caption-3">
                        <ol class="lst-kix_rij772l0b5s1-0 start" start="1">
                          <li>全宽网格</li>
                          <li>居中网格</li>
                        </ol>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <h2><strong>面板对网格的影响</strong></h2>
              <p>根据<a href="../patterns/navigation-drawer.html#navigation-drawer-behavior">导航模式</a>的定义，侧边导航可以是固定的、可切换的、或临时的。这些行为适用于任何面板，不仅限于侧边导航。</p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>固定的</strong></p>
                    <p>固定面板存在于响应式网格之外。面板出现在明确的断点处（当屏幕可容纳面板时）并挤压内容。面板中没有显示/隐藏面板的控件。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 67.3684210526%">
                          <video aria-describedby="grid-figure-caption-4" controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/layout/responsive-ui/layout_adaptiveUI_grid_04_behaviorPermanent.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/layout/responsive-ui/layout_adaptiveUI_grid_04_behaviorPermanent.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="grid-figure-caption-4">
                        <p>固定面板对响应式网格的影响</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>侧面板对网格的影响</strong></p>
                    <p>此动画展示了两种状态：</p>
                    <ol class="lst-kix_v6pxnk8kyd0x-0 start" start="1">
                      <li>出现一个可切换的侧边面板，会同时挤压内容和网格。在面板保持可见的同时，内容也是可以访问的。可以通过切换按钮隐藏面板。</li>
                      <li>出现一个临时的侧边面板，将网格内容退出屏幕。触摸面板外部区域、或者面板内的项目，会隐藏面板。</li>
                    </ol>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 67.3684210526%">
                          <video aria-describedby="grid-figure-caption-5" controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/layout/responsive-ui/layout_adaptiveUI_grid_05_behaviorSqueezePush.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/layout/responsive-ui/layout_adaptiveUI_grid_05_behaviorSqueezePush.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="grid-figure-caption-5">
                        <p>可切换面板对响应式网格的影响</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>临时遮盖</strong></p>
                    <p>临时面板在屏幕外时，不会影响网格或内容。当面板切换为可见时，可以通过触摸面板外部区域、或者面板内部项目再次隐藏面板。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 67.3684210526%">
                          <video aria-describedby="grid-figure-caption-6" controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/layout/responsive-ui/layout_adaptiveUI_grid_06_behaviorOverlay.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/layout/responsive-ui/layout_adaptiveUI_grid_06_behaviorOverlay.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="grid-figure-caption-6">
                        <p>临时面板对响应式网格的影响</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="responsive-ui-surface-behaviors" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            界面行为
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>当屏幕大小改变时，UI 会使用下列特定的行为来适配屏幕。</p>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <p>可见性</p></div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>行为</p></td>
                        <td colspan="1" rowspan="1"><p>定义</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>固定的</p></td>
                        <td colspan="1" rowspan="1"><p>当有屏幕空间可用时，界面始终可见。</p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>可切换的</p></td>
                        <td colspan="1" rowspan="1"><p>界面的可见性可以在可见和隐藏之间切换。当可见时，与屏幕上的其他元素交互不会改变可见性。</p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>临时的</p></td>
                        <td colspan="1" rowspan="1"><p>界面的可见性可以在可见和隐藏之间切换。当可见时，与屏幕上的其他元素交互，会隐藏界面或最小化界面。</p>
                        </td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
                <section class="module-module col-2">
                  <div class="module">
                    <p>宽度</p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>行为</p></td>
                        <td colspan="1" rowspan="1"><p>定义</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>固定</p></td>
                        <td colspan="1" rowspan="1"><p>当屏幕宽度变化时，元素宽度保持不变。</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>流式</p></td>
                        <td colspan="1" rowspan="1"><p>元素宽度会随着屏幕大小变化而变化。</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>粘着</p></td>
                        <td colspan="1" rowspan="1"><p>元素宽度是固定的，直到受到其他元素或断点的影响。</p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>挤压</p></td>
                        <td colspan="1" rowspan="1"><p>元素的宽度随着面板的出现而收缩。</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>推出</p></td>
                        <td colspan="1" rowspan="1"><p>元素宽度保持不变，其位置随着面板的出现而水平变化，且可能被屏幕边缘部分遮挡。</p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>遮盖</p></td>
                        <td colspan="1" rowspan="1"><p>面板出现遮盖内容时，元素的宽度和位置始终保持不变。</p>
                        </td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
                <section class="module-module col-2">
                  <div class="module">
                    <p>描述术语</p></div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>行为</p></td>
                        <td colspan="1" rowspan="1"><p>定义</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>高于、低于</p></td>
                        <td colspan="1" rowspan="1"><p>元素的 y 轴位置。</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>向前、向后</p></td>
                        <td colspan="1" rowspan="1"><p>动画中元素的 z 轴位置。</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>前面、后面</p></td>
                        <td colspan="1" rowspan="1"><p>元素的固定 z 轴位置。</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>左、右、居中</p></td>
                        <td colspan="1" rowspan="1"><p>元素的 x 轴位置。</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>顶部、底部</p></td>
                        <td colspan="1" rowspan="1"><p>元素的 y 轴位置相对于屏幕边缘的位置。</p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>扁平、浮动</p></td>
                        <td colspan="1" rowspan="1"><p>元素的 z 轴位置和阴影。扁平元素没有阴影。</p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>内嵌、全出血</p></td>
                        <td colspan="1" rowspan="1"><p>图片或元素的内边距。</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>摘要、详情</p></td>
                        <td colspan="1" rowspan="1"><p>内容摘要，和对摘要的全文展开</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="responsive-ui-patterns" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            模式
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>随着屏幕空间的增加，可以应用以下响应模式：</p>
              <ul class="lst-kix_vspbrsv9j74l-0 start">
                <li>出现</li>
                <li>变形</li>
                <li>分割</li>
                <li>重排</li>
                <li>扩展</li>
                <li>位移</li>
              </ul>
              <h2><strong>出现</strong></h2>
              <p>在小屏幕中隐藏的 UI元素，随着屏幕可用空间的增加，可能会出现。</p>
              <div class="col-list">
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 2320px">
                        <div class="frame " style="padding-top: 44.1379310345%">
                          <img alt="" aria-describedby="patterns-figure-caption-1" src="<?php static_url('../static/media/layout/responsive-ui/layout_adaptiveUI_patterns_01_reveal.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="patterns-figure-caption-1">
                        <p>像侧边栏这样的元素可能会变得可见。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 2320px">
                        <div class="frame " style="padding-top: 44.1379310345%">
                          <img alt="" aria-describedby="patterns-figure-caption-2" src="<?php static_url('../static/media/layout/responsive-ui/layout_adaptiveUI_patterns_02_reveal.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="patterns-figure-caption-2">
                        <p>一个简单的 UI 可能会出现更多强大或复杂的选项。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 2320px">
                        <div class="frame " style="padding-top: 44.1379310345%">
                          <img alt="" aria-describedby="patterns-figure-caption-3" src="<?php static_url('../static/media/layout/responsive-ui/layout_adaptiveUI_patterns_03_reveal.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="patterns-figure-caption-3">
                        <p>在小屏幕上，只有点击某个元素才会出现的内容，当屏幕上有更多可用空间时，可能会默认显示。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <h2><strong>变形</strong></h2>
              <p>一个 UI 元素可以从一种格式变形成另一种格式。</p>
              <div class="col-list">
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 2320px">
                        <div class="frame " style="padding-top: 44.1379310345%">
                          <img alt="" aria-describedby="patterns-figure-caption-4" src="<?php static_url('../static/media/layout/responsive-ui/layout_adaptiveUI_patterns_04_transform.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="patterns-figure-caption-4">
                        <p>侧边栏导航可能变形成 Tab 选项卡。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 2320px">
                        <div class="frame " style="padding-top: 44.1379310345%">
                          <img alt="" aria-describedby="patterns-figure-caption-5" src="<?php static_url('../static/media/layout/responsive-ui/layout_adaptiveUI_patterns_05_transform.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="patterns-figure-caption-5">
                        <p>列表可能变形成网格列表。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 2320px">
                        <div class="frame " style="padding-top: 44.1379310345%">
                          <img alt="" aria-describedby="patterns-figure-caption-6" src="<?php static_url('../static/media/layout/responsive-ui/layout_adaptiveUI_patterns_06_transform.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="patterns-figure-caption-6">
                        <p>菜单可能变形成工具栏中的图标。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <h2><strong>分隔</strong></h2>
              <p>一个图层的 UI 可能会被划分到新的可用空间中。</p>
              <div class="col-list">
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 2320px">
                        <div class="frame " style="padding-top: 44.1379310345%">
                          <img alt="" aria-describedby="patterns-figure-caption-7" src="<?php static_url('../static/media/layout/responsive-ui/layout_adaptiveUI_patterns_07_divide.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="patterns-figure-caption-7">
                        <p>侧边导航、列表内容、和详细内容被分隔以填满整个视图。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 2320px">
                        <div class="frame " style="padding-top: 44.1379310345%">
                          <img alt="" aria-describedby="patterns-figure-caption-8" src="<?php static_url('../static/media/layout/responsive-ui/layout_adaptiveUI_patterns_08_divide.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="patterns-figure-caption-8">
                        <p>随着空间增加，左侧面板、列表内容、和右侧面板被分隔到同一个视图中。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 2320px">
                        <div class="frame " style="padding-top: 44.1379310345%">
                          <img alt="" src="<?php static_url('../static/media/layout/responsive-ui/layout_adaptiveUI_patterns_09_divide.png'); ?>"/>
                        </div>
                      </div>
                    </figure>
                    <p>Tab 栏中的同级内容被分隔到同一个视图中。</p>
                  </div>
                </section>
              </div>
              <h2><strong>重排</strong></h2>
              <p>UI 可以重排到可用空间中。</p>
              <div class="col-list">
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 2320px">
                        <div class="frame " style="padding-top: 44.1379310345%">
                          <img alt="" aria-describedby="patterns-figure-caption-9" src="<?php static_url('../static/media/layout/responsive-ui/layout_adaptiveUI_patterns_10_reflow.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="patterns-figure-caption-9">
                        <p>来自单列格式的元素可以重新排列成多种组合来填满内容区。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 2320px">
                        <div class="frame " style="padding-top: 44.1379310345%">
                          <img alt="" aria-describedby="patterns-figure-caption-10" src="<?php static_url('../static/media/layout/responsive-ui/layout_adaptiveUI_patterns_11_reflow.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="patterns-figure-caption-10">
                        <p>水平 Tab 选项卡可以重排成垂直列表。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 2320px">
                        <div class="frame " style="padding-top: 44.1379310345%">
                          <img alt="" aria-describedby="patterns-figure-caption-11" src="<?php static_url('../static/media/layout/responsive-ui/layout_adaptiveUI_patterns_12_reflow.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="patterns-figure-caption-11">
                        <p>元素可以基于新屏幕的比例或设备方向在组件内部重排。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <h2><strong>扩展</strong></h2>
              <p>UI 可能扩展成更大的区域。</p>
              <div class="col-list">
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 2320px">
                        <div class="frame " style="padding-top: 44.1379310345%">
                          <img alt="" aria-describedby="patterns-figure-caption-12" src="<?php static_url('../static/media/layout/responsive-ui/layout_adaptiveUI_patterns_13_expand.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="patterns-figure-caption-12">
                        <p>内容卡片可以扩展来填充新的空间。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 2320px">
                        <div class="frame " style="padding-top: 44.1379310345%">
                          <img alt="" aria-describedby="patterns-figure-caption-13" src="<?php static_url('../static/media/layout/responsive-ui/layout_adaptiveUI_patterns_14_expand.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="patterns-figure-caption-13">
                        <p>对话框可以根据内容或特定的增量按比例扩展。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <h2><strong>位移</strong></h2>
              <p>UI 组件可能会移动到更合适的位置。</p>
              <div class="col-list">
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 2320px">
                        <div class="frame " style="padding-top: 44.1379310345%">
                          <img alt="" aria-describedby="patterns-figure-caption-14" src="<?php static_url('../static/media/layout/responsive-ui/layout_adaptiveUI_patterns_15_position.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="patterns-figure-caption-14">
                        <p>小屏幕上的底部卡片可能会作为菜单重新定位。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 2320px">
                        <div class="frame " style="padding-top: 44.1379310345%">
                          <img alt="" aria-describedby="patterns-figure-caption-15" src="<?php static_url('../static/media/layout/responsive-ui/layout_adaptiveUI_patterns_16_position.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="patterns-figure-caption-15">
                        <p>浮动操作按钮（FAB）可以移动到相对其他元素更显眼的位置。</p>
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