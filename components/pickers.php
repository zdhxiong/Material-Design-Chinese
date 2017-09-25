<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>选择器提供了一个简单的方法来从一个预定义的集合中选取单个值。</h1>
          <div class="col-list">
            <section class="module-module-figure col-3 h3-spacing">
              <div class="module">
                <p><strong>日期选择器</strong>使用对话框窗口在移动设备上选择单个日期。</p>
                <p><strong>时间选择器</strong>使用对话框在移动设备上选择单个时间（小时:分钟 的格式）。它们的格式会根据用户的首选时间设置自动调整。</p>
              </div>
              <div class="module">
                <h3>替代方案</h3>
                <p><a href="buttons.html#buttons-other-buttons">分段下拉按钮</a></p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 3000px">
                    <div class="frame " style="padding-top: 100.0%">
                      <img alt="" src="<?php static_url('../static/media/components/pickers/components_pickers.png'); ?>"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="pickers.html#pickers-usage" data-qp-ui-data-id="qp:1">用法</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="pickers.html#pickers-date-pickers" data-qp-ui-data-id="qp:2">日期选择器</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="pickers.html#pickers-time-pickers" data-qp-ui-data-id="qp:3">时间选择器</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="pickers-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
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
              <p>在移动设备上，选择器最适合被用来显示一个<a href="dialogs.html#dialogs-confirmation-dialogs">确认对话框</a>。</p>
              <p>对于内联显示，例如在一个表单中，考虑使用<a href="buttons.html#buttons-other-buttons">分段下拉按钮</a>之类的更紧凑的控件。</p>
            </div>
          </div>
        </div>

        <div id="pickers-date-pickers" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            日期选择器
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
                    <p>日期选择器用于在手机上选择单个日期。</p>
                    <p>选定的日期用一个实心的圆圈表示。当前日期用一个不同颜色和类型的圆圈表示。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 84.2105263158%">
                          <img alt="" aria-describedby="date-pickers-figure-caption-0" src="<?php static_url('../static/media/components/pickers/components_pickers_date1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="date-pickers-figure-caption-0">
                        <p>日期和年份选择器：亮色主题，竖屏</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <p>从左向右滑动来选择月份。点击标题栏中的年份切换到年份视图。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 173.333333333%">
                          <video aria-describedby="date-pickers-figure-caption-1" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/components/pickers/components_pickers_date_navigation_xhdpi_004.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/components/pickers/components_pickers_date_navigation_xhdpi_004.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="date-pickers-figure-caption-1">
                        <p>日期选择器</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>选择器视图会自适应设备的方向。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 56.8421052632%">
                          <img alt="" aria-describedby="date-pickers-figure-caption-2" src="<?php static_url('../static/media/components/pickers/components_pickers_date3.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="date-pickers-figure-caption-2">
                        <p>日期选择器：亮色主题，横屏</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>一个暗色主题的选择器可以和暗色主题的应用更好的搭配。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 84.2105263158%">
                          <img alt="" aria-describedby="date-pickers-figure-caption-3" src="<?php static_url('../static/media/components/pickers/components_pickers_date4.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="date-pickers-figure-caption-3">
                        <p>日期选择器：暗色主题，竖屏</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>横屏下的暗色主题选择器。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 56.8421052632%">
                          <img alt="" aria-describedby="date-pickers-figure-caption-4" src="<?php static_url('../static/media/components/pickers/components_pickers_date5.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="date-pickers-figure-caption-4">
                        <p>日期选择器：暗色主题，横屏</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="pickers-time-pickers" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            时间选择器
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>时间选择器会根据用户的首选时间设置自动调整。例如，12小时或24小时格式。</p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>时间选择器用于在手机上选择单个时间（小时：分）。</p>
                    <p>选中的时间由一个钟表指针末端的实心圆圈表示。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1522px">
                        <div class="frame " style="padding-top: 84.2312746386%">
                          <img alt="" aria-describedby="time-pickers-figure-caption-0" src="<?php static_url('../static/media/components/pickers/components_pickers_time1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="time-pickers-figure-caption-0">
                        <p>时间选择器：亮色主题，竖屏</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <p>点击标题栏中的小时和分钟在小时和分钟视图之间切换。另外，点击标题栏中的 AM/PM 可以切换到 AM 或 PM（在12小时的时钟模式下）。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="time-pickers-figure-caption-1" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/components/pickers/components_pickers_time_transition.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/components/pickers/components_pickers_time_transition.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="time-pickers-figure-caption-1">
                        <p>时间选择器</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>时间选择器会自适应设备方向。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 56.9736842105%">
                          <img alt="" aria-describedby="time-pickers-figure-caption-2" src="<?php static_url('../static/media/components/pickers/components_pickers_time2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="time-pickers-figure-caption-2">
                        <p>时间选择器：亮色主题，横屏</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>暗色主题的选择器会和暗色主题应用更搭配。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1522px">
                        <div class="frame " style="padding-top: 84.2312746386%">
                          <img alt="" aria-describedby="time-pickers-figure-caption-3" src="<?php static_url('../static/media/components/pickers/components_pickers_time3.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="time-pickers-figure-caption-3">
                        <p>时间选择器：暗色主题，竖屏</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>横屏下的暗色主题选择器</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 56.9736842105%">
                          <img alt="" aria-describedby="time-pickers-figure-caption-4" src="<?php static_url('../static/media/components/pickers/components_pickers_time4.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="time-pickers-figure-caption-4">
                        <p>时间选择器：暗色主题，横屏</p>
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