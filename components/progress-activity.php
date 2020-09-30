<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?= $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>进度和动效可以让用户清楚地看到应用内容的加载情况。</h1>
          <div class="gas-intro-h1-bottom"></div>
          <div class="col-list">
            <section class="module-module-figure col-3 h3-spacing">
              <div class="module">
                <p>每次操作只能由一个进度指示器来呈现。例如，对于刷新操作，你可以使用刷新条或者动态圆圈来表示，但不能同时使用这两者。</p>
                <p><strong>确定进度的指示器</strong>可以显示操作将花费的时间。</p>
                <p><strong>不确定进度的指示器</strong>只显示等待的状态，没有具体时间。</p>
              </div>
              <div class="module">
                <h3>类型</h3>
                <p>线性<br>
                  圆形</p>
                <h3>行为</h3>
                <p>分阶段加载内容<br>
                  加载其他内容</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 3000px">
                    <div class="frame " style="padding-top: 100.0%">
                      <img alt="" src="<?= static_url('../static/media/components/progress-activity/components_progress_and_activity.png'); ?>" loading="lazy"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="progress-activity.html#progress-activity-types-of-indicators" data-qp-ui-data-id="qp:1">指示器类型</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="progress-activity.html#progress-activity-behavior" data-qp-ui-data-id="qp:2">行为</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="progress-activity-types-of-indicators" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            指示器类型
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>当可以检测到完成部分的百分比时，<strong>确定进度的指示器</strong>可以显示一项操作还需花费的时间。</p>
              <p>在无法得知已完成部分进度的情况下，<strong>不确定进度的指示器</strong>可以显示一个等待中的状态，不需要指示出还需多久才能完成。</p>
              <p>无论是线性进度指示器还是圆形进度指示器，都可以来指示确定进度和不确定进度的操作。</p>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>线性进度指示器</h1>
                    <p>线性进度指示器应始终从 0% 到 100% 显示，不能从高到低反向显示。线性进度指示器应放置在头部或某块区域的边缘。</p>
                    <p>对于顺序发生的<strong>多个操作</strong>，使用指示器表示整个进度，而不是每个单独操作的进度。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 76.3157894737%">
                          <video aria-describedby="types-of-indicators-figure-caption-0" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/progress-activity/components-progressactivity-typesofindicators-061101_Linear_Sheet_xhdpi_003.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/progress-activity/components-progressactivity-typesofindicators-061101_Linear_Sheet_xhdpi_003.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="types-of-indicators-figure-caption-0">
                        <p>线性进度指示器</p>
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
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 173.611111111%">
                          <video aria-describedby="types-of-indicators-figure-caption-1" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/progress-activity/components-progressactivity-typesofindicators-Linear_Video_xhdpi_004.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/progress-activity/components-progressactivity-typesofindicators-Linear_Video_xhdpi_004.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="types-of-indicators-figure-caption-1">
                        <p></p>
                        <p>视频上的缓冲进度指示器</p>
                        <p></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 173.611111111%">
                          <video aria-describedby="types-of-indicators-figure-caption-2" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/progress-activity/components-progressactivity-typesofindicators-Linear_Image_xhdpi_004.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/progress-activity/components-progressactivity-typesofindicators-Linear_Image_xhdpi_004.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="types-of-indicators-figure-caption-2">
                        <p>网页上的查询进度指示器</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>圆形进度指示器</h1></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 20.7894736842%">
                          <video aria-describedby="types-of-indicators-figure-caption-3" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/progress-activity/061101_Circular_Sheet_xhdpi_005.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/progress-activity/061101_Circular_Sheet_xhdpi_005.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="types-of-indicators-figure-caption-3">
                        <p>圆形的确定进度和不确定进度的指示器</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>与其他控件整合的圆形进度指示器</h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 100.0%">
                          <video aria-describedby="types-of-indicators-figure-caption-4" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/progress-activity/components-progressactivity-typesofindicators-061101_Circular_Aspirational_xhdpi_002.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/progress-activity/components-progressactivity-typesofindicators-061101_Circular_Aspirational_xhdpi_002.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="types-of-indicators-figure-caption-4">
                        <p>圆形指示器可以和浮动操作按钮集成。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 173.611111111%">
                          <video aria-describedby="types-of-indicators-figure-caption-5" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/progress-activity/components-progressactivity-typesofindicators-Circular_wFab_xhdpi_003.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/progress-activity/components-progressactivity-typesofindicators-Circular_wFab_xhdpi_003.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="types-of-indicators-figure-caption-5">
                        <p>集成的原型指示器的动画</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="progress-activity-behavior" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
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
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>加载阶段</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1080px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="behavior-figure-caption-0" controls="" loop="" preload="metadata">
                            <source src="<?= static_url('../static/media/components/progress-activity/components-progressactivity-behavior_Loading_SwipeDown_xhdpi_005-.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/progress-activity/components-progressactivity-behavior_Loading_SwipeDown_xhdpi_005-.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-0"><p></p>
                        <p>单阶段加载</p>
                        <p>在已存在的、不变的容器里加载内容（副本和图片）</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }" role="button">
                          <video aria-describedby="behavior-figure-caption-1" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/progress-activity/components-progressactivity-behavior-Loading_Photos_xhdpi_004.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/progress-activity/components-progressactivity-behavior-Loading_Photos_xhdpi_004.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-1">
                        <p>双阶段加载</p>
                        <p>先生成一个容器，然后再加载内容（副本和图片）。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 173.611111111%">
                          <video aria-describedby="behavior-figure-caption-2" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/progress-activity/components-progressactivity-behavior-Loading_Files_Linear_xhdpi_003.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/progress-activity/components-progressactivity-behavior-Loading_Files_Linear_xhdpi_003.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-2">
                        <p>第一次加载内容</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 173.611111111%">
                          <video aria-describedby="behavior-figure-caption-3" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/progress-activity/components-progressactivity-behavior-Loading_Files_Circular_xhdpi_003.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/progress-activity/components-progressactivity-behavior-Loading_Files_Circular_xhdpi_003.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-3">
                        <p>一次性加载完所有内容并显示出来。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>加载额外的内容</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 73.5526315789%">
                          <video aria-describedby="behavior-figure-caption-4" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/progress-activity/components-progressactivity-behavior-Loading_BigTop_xhdpi_004.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/progress-activity/components-progressactivity-behavior-Loading_BigTop_xhdpi_004.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-4">
                        <p>例 1：卡片展开</p>
                        <p>当卡片在一个较大的平面上展开时，比如桌面，推荐使用不确定进度的线性进度指示器。</p>
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
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }" role="button">
                          <video aria-describedby="behavior-figure-caption-5" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/progress-activity/components-progressactivity-behavior-Loading_Photos_xhdpi_004.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/progress-activity/components-progressactivity-behavior-Loading_Photos_xhdpi_004.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-5">
                        <p>例 2：上拉加载更多</p>
                        <p>当你想从底部加载列表时，推荐使用不确定进度的圆形进度指示器。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1080px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="behavior-figure-caption-6" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/progress-activity/components-progress-activity-behavior_Loading_SwipeDown_noload_xhdpi_005.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/progress-activity/components-progress-activity-behavior_Loading_SwipeDown_noload_xhdpi_005.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-6">
                        <p>例 3：下拉刷新</p>
                        <p>当你想从上方加载一个列表时，推荐使用不确定进度的圆形进度指示器。</p>
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
  <div class="gas-last-div-inner-bottom"></div>
</div>

<?php include SRC_PATH.'/public/footer.php'; ?>
