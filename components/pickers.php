<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <p>选择器提供了一个简单的方法来从一个预定义的集合中选取单个值。</p>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p><strong>日期选择器</strong>使用对话框窗口在移动设备上选择单个日期。</p>
                <p><strong>时间选择器</strong>使用对话框在移动设备上选择单个时间（小时:分钟 的格式）。它们的格式会根据用户的首选时间设置自动调整。</p>
              </div>
              <div class="module">
                <h3><strong>替代方案</strong></h3>
                <p><a href="buttons.html#buttons-other-buttons">分段下拉按钮</a></p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/components/pickers/components_pickers.png"/>
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
              <p>在移动设备上，选择器最适合被用来显示一个<a href="dialogs.html#dialogs-confirmation-dialogs">确认对话框</a></p>
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
                    <p>A dialog picker is used to select a single date on mobile. </p>
                    <p>The selected day is indicated by a filled circle. The current day is indicated by a different color and type weight. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/pickers/components_pickers_date1.png"/>
                      </div>
                      <figcaption>
                        <p>Date and year picker: Light theme, portrait</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <p>Swipe left to right to navigate through the months. Touch the year in the title bar to transition to the year view.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/pickers/components_pickers_date_navigation_xhdpi_004.webm" type="video/webm">
                            <source src="../static/media/components/pickers/components_pickers_date_navigation_xhdpi_004.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Date picker navigation</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>The picker view adapts to the device’s orientation. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/pickers/components_pickers_date3.png"/>
                      </div>
                      <figcaption>
                        <p>Date picker: Light theme, landscape</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>A dark theme picker can complement apps that have a dark theme.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/pickers/components_pickers_date4.png"/>
                      </div>
                      <figcaption>
                        <p>Date picker: Dark theme, portrait</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Landscape view of the dark theme picker.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/pickers/components_pickers_date5.png"/>
                      </div>
                      <figcaption>
                        <p>Date picker: Dark theme, landscape</p>
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
            Time pickers
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>A time picker adjusts to a user’s preferred time setting, i.e. the 12-hour or 24-hour format. </p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>A dialog picker is used to select a single time (hours:minutes) on mobile. </p>
                    <p>The selected time is indicated by the filled circle at the end of the clock hand. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/pickers/components_pickers_time1.png"/>
                      </div>
                      <figcaption>
                        <p>Time picker: Light theme, portrait</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <p>Tap between the hour and minute label in the title bar to switch between the hour or minute view. Additionally, tap on the AM/PM label in the title bar to switch between AM or PM (in 12-hour clock mode).</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/pickers/components_pickers_time_transition.webm" type="video/webm">
                            <source src="../static/media/components/pickers/components_pickers_time_transition.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Time picker navigation</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>The picker view adapts to the device’s orientation. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/pickers/components_pickers_time2.png"/>
                      </div>
                      <figcaption>
                        <p>Time picker: Light theme, landscape</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>A dark theme picker can complement apps that have a dark theme.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/pickers/components_pickers_time3.png"/>
                      </div>
                      <figcaption>
                        <p>Time picker: Dark theme, portrait</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Landscape view of the dark theme picker </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/pickers/components_pickers_time4.png"/>
                      </div>
                      <figcaption>
                        <p>Time picker: Dark theme, landscape</p>
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