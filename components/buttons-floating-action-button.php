<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?= $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>浮动操作按钮代表着应用中最重要的操作。</h1>
          <div class="col-list">
            <section class="module-module-figure col-3 h3-spacing">
              <div class="module">
                <p>浮动操作按钮是为了使用户更便于操作。</p>
                <p>就像一个圆形的图标漂浮在界面上，它会在聚焦时改变颜色，在选中时改变海拔高度。按下时，它可能会包含更多相关的操作。</p>
              </div>
              <div class="module">
                <h3>用法</h3>
                <p>一个屏幕上建议只使用一个浮动操作按钮，它应该只代表最常见的操作。</p>

                <h3>行为</h3>
                <p>默认情况下，它作为一个扩展的按钮悬浮在屏幕上。</p>

                <h3>尺寸</h3>
                <p>默认：56 x 56dp<br>
                  迷你：40 x 40dp</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 3000px">
                    <div class="frame " style="padding-top: 100.0%">
                      <img alt="" src="<?= static_url('../static/media/components/buttons-floating-action-button/components_buttons_fab.png'); ?>" loading="lazy"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="buttons-floating-action-button.html#buttons-floating-action-button-floating-action-button" data-qp-ui-data-id="qp:1">浮动操作按钮</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="buttons-floating-action-button.html#buttons-floating-action-button-behavior" data-qp-ui-data-id="qp:2">行为</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="buttons-floating-action-button.html#buttons-floating-action-button-transitions" data-qp-ui-data-id="qp:3">过渡</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="buttons-floating-action-button.html#buttons-floating-action-button-large-screens" data-qp-ui-data-id="qp:4">大屏幕</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="buttons-floating-action-button-floating-action-button" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            浮动操作按钮
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>浮动操作按钮</h1>
                    <p>浮动操作按钮是为了使用户更便于操作。它是漂浮在 UI 上的一个圆形图标，具有一些动态效果，包括变形、弹出、位移等。</p>
                    <p>浮动操作按钮具有两种尺寸：</p>
                    <ul class="lst-kix_spyoufbi7tcu-0 start">
                      <li>默认尺寸：适用于大多数情况</li>
                      <li>迷你尺寸：仅用于创建与屏幕上的其他元素在视觉上的连续性</li>
                    </ul>
                    <p>当屏幕宽度小于 460dp 时，浮动操作按钮的尺寸应该从默认尺寸（56dp）变成迷你尺寸（40dp）。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="floating-action-button-figure-caption-0" src="<?= static_url('../static/media/components/buttons-floating-action-button/patterns_actions_fab1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="floating-action-button-figure-caption-0">
                        <p>浮动操作按钮</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="floating-action-button-figure-caption-1" src="<?= static_url('../static/media/components/buttons-floating-action-button/patterns_actions_fab2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="floating-action-button-figure-caption-1">
                        <p>迷你型浮动操作按钮</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>在手机端，浮动操作按钮应该被放置在距离屏幕边框至少 16dp 的地方；在平板和桌面端应该距离屏幕边框至少 24dp。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 75.5555555556%">
                          <img alt="" aria-describedby="floating-action-button-figure-caption-2" src="<?= static_url('../static/media/components/buttons-floating-action-button/patterns_actions_fab3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="floating-action-button-figure-caption-2">
                        <p>浮动操作按钮</p>
                        <p>内部图标：24 x 24dp<br>
                          浮动操作按钮外圈：56 x 56dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 75.5555555556%">
                          <img alt="" aria-describedby="floating-action-button-figure-caption-3" src="<?= static_url('../static/media/components/buttons-floating-action-button/patterns_actions_fab4.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="floating-action-button-figure-caption-3">
                        <p>迷你型浮动操作按钮</p>
                        <p>内部图标：24 x 24dp<br>
                          浮动操作按钮外圈：40 x 40dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>浮动操作按钮在聚焦时会改变颜色，在选中时会增加海拔高度。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 173.611111111%">
                          <video aria-describedby="floating-action-button-figure-caption-4" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab_01_xhdpi_002.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab_01_xhdpi_002.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="floating-action-button-figure-caption-4">
                        <p>浮动操作按钮获得焦点</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 173.611111111%">
                          <video aria-describedby="floating-action-button-figure-caption-5" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab_02_xhdpi_002.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab_02_xhdpi_002.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="floating-action-button-figure-caption-5">
                        <p>浮动操作按钮被选中</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>不是每个屏幕都需要浮动操作按钮。浮动操作按钮代表了这个 App 中的主要操作。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="floating-action-button-figure-caption-6" src="<?= static_url('../static/media/components/buttons-floating-action-button/patterns_actions_fab_content1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="floating-action-button-figure-caption-6">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>主要操作是在相册中触摸图片，所以不需要任何按钮。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="floating-action-button-figure-caption-7" src="<?= static_url('../static/media/components/buttons-floating-action-button/patterns_actions_fab_content2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="floating-action-button-figure-caption-7">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>主要操作是添加文件。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>一个屏幕上建议只使用一个浮动操作按钮，它应该只代表最常见的操作。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="floating-action-button-figure-caption-8" src="<?= static_url('../static/media/components/buttons-floating-action-button/patterns_actions_fab_content3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="floating-action-button-figure-caption-8">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="floating-action-button-figure-caption-9" src="<?= static_url('../static/media/components/buttons-floating-action-button/patterns_actions_fab_content4.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="floating-action-button-figure-caption-9">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>特性</h1>
                    <p>浮动操作按钮应该做肯定的操作，如创建、收藏、分享、浏览和发现。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 34.7368421053%">
                          <img alt="" aria-describedby="floating-action-button-figure-caption-10" src="<?= static_url('../static/media/components/buttons-floating-action-button/patterns_actions_fab_qualities1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="floating-action-button-figure-caption-10">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>避免使用浮动操作按钮进行下面这些具有轻微破坏性的操作：</p>
                    <ul class="lst-kix_8i3f9hl0bmlq-0 start">
                      <li>存档或删除</li>
                      <li>不明确的操作</li>
                      <li>警告或错误</li>
                      <li>限制性的任务如剪切文本</li>
                      <li>控制器应该放在工具栏中，如音量控制或改变字体颜色</li>
                    </ul>
                    <p>浮动操作按钮不包含 App 图标或状态栏通知。不要把徽章或其他元素层叠在浮动操作按钮上。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 50.5263157895%">
                          <img alt="" aria-describedby="floating-action-button-figure-caption-11" src="<?= static_url('../static/media/components/buttons-floating-action-button/patterns_actions_fab_qualities2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="floating-action-button-figure-caption-11">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>浮动操作按钮强制使用圆形样式。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 71.1111111111%">
                          <img alt="" aria-describedby="floating-action-button-figure-caption-12" src="<?= static_url('../static/media/components/buttons-floating-action-button/patterns_actions_fab_qualities5.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="floating-action-button-figure-caption-12">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 71.1111111111%">
                          <img alt="" aria-describedby="floating-action-button-figure-caption-13" src="<?= static_url('../static/media/components/buttons-floating-action-button/patterns_actions_fab_qualities6.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="floating-action-button-figure-caption-13">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>不要给浮动操作按钮添加额外的维度。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 71.1111111111%">
                          <img alt="" aria-describedby="floating-action-button-figure-caption-14" src="<?= static_url('../static/media/components/buttons-floating-action-button/patterns_actions_fab_qualities7.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="floating-action-button-figure-caption-14">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 71.1111111111%">
                          <img alt="" aria-describedby="floating-action-button-figure-caption-15" src="<?= static_url('../static/media/components/buttons-floating-action-button/patterns_actions_fab_qualities8.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="floating-action-button-figure-caption-15">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="buttons-floating-action-button-behavior" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
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
                    <p>默认情况下，浮动操作按钮就像一块物体浮动在屏幕上。它里面的图标可能是活动的。</p>
                    <p>因为浮动操作按钮相对重要，它可能会以与其他元素不同的方式出现和移动。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 173.611111111%">
                          <video aria-describedby="behavior-figure-caption-0" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab-behavior_01_xhdpi_012.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab-behavior_01_xhdpi_012.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-0">
                        <p>浮动操作按钮动画效果</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 173.611111111%">
                          <video controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab-behavior_02_xhdpi_012.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab-behavior_02_xhdpi_012.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>横向切换屏幕</h2>
                    <p>在横向切换屏幕后（如标签页切换），如果浮动操作按钮对应的操作变化了，它应该先短暂消失，然后重新出现。</p>
                    <p>如果屏幕切换后，浮动操作按钮对应的操作不变，那么在切换屏幕时按钮应该保留在屏幕上（如果需要，可以移动到新的位置）。</p>
                    <h2>列表</h2>
                    <p>在浮动操作按钮下面的列表应该有足够的内边距，这样它们的内容才不会被按钮遮住。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 492px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.642276423%">
                          <video aria-describedby="behavior-figure-caption-1" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab-behavior_03_xhdpi_001.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab-behavior_03_xhdpi_001.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-1">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 492px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.642276423%">
                          <video aria-describedby="behavior-figure-caption-2" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab-behavior_04_xhdpi_009.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab-behavior_04_xhdpi_009.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-2">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>带标签的屏幕</h2>
                    <p>对于带有标签的屏幕，浮动操作按钮不应朝着屏幕退出时的同一方向退出屏幕。否则会导致：</p>
                    <ul class="lst-kix_31k3fqgiubnr-0 start">
                      <li>屏幕上出现一个失灵的浮动操作按钮</li>
                      <li>错误地表明了浮动操作按钮和内容在相同的海拔高度上。</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 492px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.642276423%">
                          <video aria-describedby="behavior-figure-caption-3" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab-behavior_05_xhdpi_009.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab-behavior_05_xhdpi_009.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-3">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 492px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.642276423%">
                          <video aria-describedby="behavior-figure-caption-4" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab-behavior_06_xhdpi_009.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab-behavior_06_xhdpi_009.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-4">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="buttons-floating-action-button-transitions" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            过渡
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <h1>过渡</h1>
              <p>浮动操作按钮在 App 中，是一个有重要用途的独特的例子。利用它的可见性可以为一个重要的 UI 元素提供令人愉悦的过渡效果。</p>
              <p>常用的过渡包括触发器、工具栏、快速拨号和形变。当然远不止这些。浮动操作按钮被设计的很灵活。你可以实验出最适合你的应用和屏幕的过渡效果。</p>
              <div class="col-list">
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>触发器</h2>
                    <p>浮动操作按钮可以只是简单地触发一个操作或是某处的导航。触摸涟漪动画会作为导致 UI 变化的力向外展开。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="transitions-figure-caption-0" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_trigger_01.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_trigger_01.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="transitions-figure-caption-0">
                        <p>浮动操作按钮可以简单的触发一个操作</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="transitions-figure-caption-1" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_trigger_02.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_trigger_02.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="transitions-figure-caption-1">
                        <p>浮动操作按钮让地图视图回到中心位置。</p>
                        <p>App 通常使用单个浮动操作按钮。然而，本例使用了两个浮动操作按钮，因为它们执行的是同等重要但独特的操作。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2><strong>工具栏</strong></h2>
                    <p>浮动操作按钮可以在按下时或从滚动工具栏转换为工具栏。工具栏可以包含相关的操作、文本和搜索框，或任何手边有用的部件。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="transitions-figure-caption-2" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_toolbar_01.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_toolbar_01.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="transitions-figure-caption-2">
                        <p>浮动操作按钮转换为工具栏</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="transitions-figure-caption-3" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_toolbar_02.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_toolbar_02.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="transitions-figure-caption-3">
                        <p>浮动操作按钮转换为工具栏</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>屏幕滚动时隐藏工具栏，在需要的时候浮动操作按钮可以快速展开为工具栏，这是一个非常有用的特性。用户在浏览内容时，通过全屏观看获得沉浸式的浏览体验，而当他们看到有趣的内容想要触发交互时，又能快速调出工具栏进行操作。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="transitions-figure-caption-4" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_scrolltoolbar_01.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_scrolltoolbar_01.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="transitions-figure-caption-4">
                        <p>工具栏在滚动时变成一个浮动操作按钮</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="transitions-figure-caption-5" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_scrolltoolbar_02.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_scrolltoolbar_02.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="transitions-figure-caption-5">
                        <p>工具栏在滚动时变成一个浮动操作按钮</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>如果一个浮动操作按钮转换成了工具栏，那么这个工具栏应包含相关的操作功能。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 41.1111111111%">
                          <img alt="" aria-describedby="transitions-figure-caption-6" src="<?= static_url('../static/media/components/buttons-floating-action-button/patterns_actions_fab_actions10.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="transitions-figure-caption-6">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>在这个例子中，用户可以通过按钮来选择媒体类型进行添加。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 41.1111111111%">
                          <img alt="" aria-describedby="transitions-figure-caption-7" src="<?= static_url('../static/media/components/buttons-floating-action-button/patterns_actions_fab_actions12.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="transitions-figure-caption-7">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>不要包含无关的或混乱不清的操作</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2><strong>快速拨号</strong></h2>
                    <p>浮动操作按钮可在按下时浮出相关操作。在菜单被调用后，按钮应保留在屏幕上。点击同一点，应激活最常用的操作，或关闭已打开的菜单。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="transitions-figure-caption-8" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_speeddial_01.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_speeddial_01.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="transitions-figure-caption-8">
                        <p>浮动操作按钮可以浮出相关操作</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="transitions-figure-caption-9" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_speeddial_02.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_speeddial_02.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="transitions-figure-caption-9">
                        <p>浮动操作按钮可以浮出相关操作</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>浮动操作按钮可以转换为包含所有操作的单张卡片。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="transitions-figure-caption-10" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_card_01.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_card_01.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="transitions-figure-caption-10">
                        <p>一个浮动按钮转换为一张卡片</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="transitions-figure-caption-11" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_card_02.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_card_02.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="transitions-figure-caption-11">
                        <p>一个浮动按钮转换为一张卡片</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>作为通用规则，按下按钮时可以拥有至少 3 个，至多 6 个选项，包括原来的浮动操作按钮。如果只有两个选项 - 即，你的浮动操作按钮只弹出了另外一个选项 - 选择最重要的那一个。如果选项超过六个，用户可能在选择上会有困难。</p>
                    <p>通过给用户最好、最独特和最少的选项来减少选择疲劳。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="transitions-figure-caption-12" src="<?= static_url('../static/media/components/buttons-floating-action-button/components_fab_flyouts_dont1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="transitions-figure-caption-12">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>浮动操作按钮应该至少弹出三个选项。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="transitions-figure-caption-13" src="<?= static_url('../static/media/components/buttons-floating-action-button/components_fab_flyouts_dont2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="transitions-figure-caption-13">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>浮动操作按钮应该弹出不超过六个选项。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>不要在浮动操作按钮的选项中放置外链按钮。从初始屏幕到目标页面应该最多只需要两次点击。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 71.1111111111%">
                          <img alt="" aria-describedby="transitions-figure-caption-14" src="<?= static_url('../static/media/components/buttons-floating-action-button/components_fab_flyouts_do.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="transitions-figure-caption-14">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>选项应该指明目标页面</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 71.1111111111%">
                          <img alt="" aria-describedby="transitions-figure-caption-15" src="<?= static_url('../static/media/components/buttons-floating-action-button/components_fab_flyouts_dont4.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="transitions-figure-caption-15">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>选项不应该包含外链菜单</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>将外链操作放置在工具栏的外链菜单中，而不是浮动操作按钮中。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 92.2222222222%">
                          <img alt="" aria-describedby="transitions-figure-caption-16" src="<?= static_url('../static/media/components/buttons-floating-action-button/patterns_actions_fab_actions1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="transitions-figure-caption-16">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>外链菜单在工具栏中。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 92.2222222222%">
                          <img alt="" aria-describedby="transitions-figure-caption-17" src="<?= static_url('../static/media/components/buttons-floating-action-button/patterns_actions_fab_actions2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="transitions-figure-caption-17">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>外链菜单在工具栏中。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 81.1111111111%">
                          <img alt="" aria-describedby="transitions-figure-caption-18" src="<?= static_url('../static/media/components/buttons-floating-action-button/patterns_actions_fab_actions3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="transitions-figure-caption-18">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>浮动操作按钮不能弹出菜单。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 81.1111111111%">
                          <img alt="" aria-describedby="transitions-figure-caption-19" src="<?= static_url('../static/media/components/buttons-floating-action-button/patterns_actions_fab_actions4.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="transitions-figure-caption-19">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>浮动操作按钮不能弹出菜单。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>如果应用的功能是添加文件，浮动操作按钮可以在首次点击后转换为相关的操作。如果出现的操作是与按钮不相关的，应该把操作放到弹出菜单中。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 41.1111111111%">
                          <img alt="" aria-describedby="transitions-figure-caption-20" src="<?= static_url('../static/media/components/buttons-floating-action-button/patterns_actions_fab_actions6.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="transitions-figure-caption-20">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>浮动操作按钮可以转换成相关的操作。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 41.1111111111%">
                          <img alt="" aria-describedby="transitions-figure-caption-21" src="<?= static_url('../static/media/components/buttons-floating-action-button/patterns_actions_fab_actions8.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="transitions-figure-caption-21">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>浮动操作按钮不能转换成不相关的操作。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>浮动操作按钮可以包含一个联系人列表。这个列表不应该包含不相关的操作。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 121.111111111%">
                          <img alt="" aria-describedby="transitions-figure-caption-22" src="<?= static_url('../static/media/components/buttons-floating-action-button/patterns_actions_fab_actions14.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="transitions-figure-caption-22">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>浮动操作按钮可以转换为联系人列表。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 121.111111111%">
                          <img alt="" aria-describedby="transitions-figure-caption-23" src="<?= static_url('../static/media/components/buttons-floating-action-button/patterns_actions_fab_actions16.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="transitions-figure-caption-23">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>浮动操作按钮不能转换为不相关的操作。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2><strong>变形</strong></h2>
                    <p>浮动操作按钮可以转变为薄片元素，并成为应用结构的一部分。这个神奇的转变强调了按钮的操作。</p>
                    <p>当浮动操作按钮变形时，在开始和结束位置之间需要以合理的方式转换。例如，不要穿过其他的薄片元素。</p>
                    <p>变形动画应该是可逆的，可以将新的薄片元素变回浮动操作按钮。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="transitions-figure-caption-24" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_morph_01.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_morph_01.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="transitions-figure-caption-24">
                        <p>浮动操作按钮可以转变为薄片元素，并成为应用结构的一部分。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="transitions-figure-caption-25" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_morph_02.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_morph_02.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="transitions-figure-caption-25">
                        <p>浮动操作按钮可以转变为薄片元素，并成为应用结构的一部分。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>满屏</h2>
                    <p>浮动操作按钮可以转变为占满整个屏幕的薄片元素。</p>
                    <p>这种类型的转变通常用来创建新的内容。其结果是，一般没法撤销转变，或进行可逆操作。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="transitions-figure-caption-26" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_fullscreen_01.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_fullscreen_01.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="transitions-figure-caption-26">
                        <p>浮动操作按钮可以转变成占满整个屏幕的薄片元素。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="transitions-figure-caption-27" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_fullscreen_02.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/buttons-floating-action-button/components-buttons-fab-transition_fullscreen_02.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="transitions-figure-caption-27">
                        <p>浮动操作按钮可以转变成占满整个屏幕的薄片元素。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="buttons-floating-action-button-large-screens" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }"  data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            大屏幕
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>大屏幕</h2>
                    <p>浮动操作按钮可以附属到一个扩展的应用栏上。</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 75.0%">
                          <img alt="" aria-describedby="large-screens-figure-caption-0" src="<?= static_url('../static/media/components/buttons-floating-action-button/patterns_actions_fab_placement7.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="large-screens-figure-caption-0">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>浮动操作按钮可以附属到工具栏上，或者结构化的元素上（只要没有妨碍到其他元素）。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 75.0%">
                          <img alt="" aria-describedby="large-screens-figure-caption-1" src="<?= static_url('../static/media/components/buttons-floating-action-button/patterns_actions_fab_placement8.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="large-screens-figure-caption-1">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>浮动操作按钮可以被附属到一个薄片元素的边缘。</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 75.0%">
                          <img alt="" aria-describedby="large-screens-figure-caption-2" src="<?= static_url('../static/media/components/buttons-floating-action-button/patterns_actions_fab_placement9.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="large-screens-figure-caption-2">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>在一个屏幕上最多只能有一个浮动操作按钮。</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 75.0%">
                          <img alt="" aria-describedby="large-screens-figure-caption-3" src="<?= static_url('../static/media/components/buttons-floating-action-button/patterns_actions_fab_placement10.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="large-screens-figure-caption-3">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>不要将浮动操作按钮与屏幕上的每个元素都联系起来。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 75.0%">
                          <img alt="" aria-describedby="large-screens-figure-caption-4" src="<?= static_url('../static/media/components/buttons-floating-action-button/patterns_actions_fab_placement12.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="large-screens-figure-caption-4">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-module col-2">
                  <div class="module"></div>
                  <div class="module"></div>
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
