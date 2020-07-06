<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?= $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>滑动刷新功能可以通过用户的操作或手势来手动刷新屏幕内容。</h1>
          <div class="col-list">
            <section class="module-module-figure col-3 h3-spacing">
              <div class="module">
                <p>有两种方法可以更新应用内的内容：</p>
                <ul class="lst-kix_8pwwe96a23b7-0 start">
                  <li>首选方法是使用<strong><a href="http://developer.android.com/training/sync-adapters/index.html" target="_blank">同步功能</a></strong>自动更新内容，这将保持应用内容的自动更新</li>
                  <li><strong>滑动刷新</strong>是一种<a href="gestures.html#gestures-gestures">滑动手势</a>，可以用在按最近更新排序的列表、网格列表、以及卡片集的头部</li>
                </ul>
                <p>手动刷新是对同步功能的补充。它可以保持当前的滚动位置，如在 Gmail 中检查新邮件时。</p>
              </div>
              <div class="module">
                <h3>图标</h3>
                <p>刷新指示器用一个<strong>圆形旋转器</strong>来表示，它是一个圆形旋转的有弯曲箭头的图标。</p>
                <h3>位置</h3>
                <ul class="lst-kix_r9d565ze57w6-0 start">
                  <li><strong>滑动刷新手势</strong>可在内容集合的顶部或底部使用</li>
                  <li><strong>刷新指示器</strong>相对与被刷新的内容水平居中</li>
                </ul>
                <h3>阈值</h3>
                <p>刷新指示器必须超过阈值后才会执行刷新，此阈值由圆形旋转器的不透明度、速度和位移变化来指示。<br></p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 3000px">
                    <div class="frame " style="padding-top: 100.0%">
                      <img alt="" src="<?= static_url('../static/media/patterns/swipe-to-refresh/patterns_swipe_to_refresh.png'); ?>" loading="lazy"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="swipe-to-refresh.html#swipe-to-refresh-usage" data-qp-ui-data-id="qp:1">用法</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="swipe-to-refresh.html#swipe-to-refresh-positioning" data-qp-ui-data-id="qp:2">定位</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="swipe-to-refresh.html#swipe-to-refresh-behavior" data-qp-ui-data-id="qp:3">行为</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="swipe-to-refresh-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
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
              <p>滑动刷新是一个<a href="gestures.html#gestures-gestures">滑动手势</a>，可以用在按最近更新排序的列表、网格列表、以及卡片集的头部（Index 0）。</p>
              <p>最好把该手势和动态内容一起使用，动态内容是指那些需要从同一位置频繁更新的内容，用户在使用该手势后看到新内容的几率很高。</p>
              <div class="col-list">
                <section class="module-figure-module col-3 h1-spacing">
                  <div class="module">
                    <h1>刷新指示器</h1>
                    <p>刷新指示器只有在执行刷新手势或操作时才会显示。同步功能不会显示刷新指示器。</p>
                    <p><strong>效果</strong></p>
                    <p>如果一个视图刷新时会导致大量内容更新，那么在该视图中使用刷新手势时，更新可能不会立即显示给用户。例如，刷新可能导致乱序删除、重新排序、修改、插入项目或仅改变离开屏幕的项目。</p>
                    <p>
                      <div class="modulettes">
                        <a class="modulette container android" href="https://developer.android.com/reference/android/support/v4/widget/SwipeRefreshLayout.html" target="_blank">
                          <img alt="" class="icon callout-icon" src="<?= static_url('../static/spec/images/callouts/android.svg'); ?>" loading="lazy">
                          <div class="info">
                            <div class="title">滑动刷新布局</div>
                          </div>
                          </img>
                        </a>
                      </div>
                    通过垂直滑动手势刷新视图的内容
                    </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="usage-figure-caption-0" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/patterns/swipe-to-refresh/components-progressactivity-behavior_Loading_SwipeDown_noload_xhdpi_005.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/patterns/swipe-to-refresh/components-progressactivity-behavior_Loading_SwipeDown_noload_xhdpi_005.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-0">
                        <p>滑动刷新的动画显示</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>滑动刷新不应在以下情况下使用：</p>
                    <ul class="lst-kix_ts8d536vx62i-0 start">
                      <li>抽屉式导航</li>
                      <li>主屏幕小部件</li>
                      <li>可平移的内容</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="usage-figure-caption-1" src="<?= static_url('../static/media/patterns/swipe-to-refresh/patterns_swipetorefresh_dont1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-1">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>抽屉式导航（如果应用中存在的话）应该包含导航的目标，而不是动态内容。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="usage-figure-caption-2" src="<?= static_url('../static/media/patterns/swipe-to-refresh/patterns_swipetorefresh_dont2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-2">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>主屏幕小部件应自动更新内容。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="usage-figure-caption-3" src="<?= static_url('../static/media/patterns/swipe-to-refresh/patterns_swipetorefresh_dont3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-3">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>可平移的内容，例如地图，没有主要方向或内容的来源方向，用户无法推测出滑动刷新手势的方向。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="swipe-to-refresh-positioning" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            定位
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div><h1>手势定位</h1>
              <p>通常，滑动手势可以在内容集合的顶部使用，但也可以用在底部（例如，在聊天应用中）。</p>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>刷新指示器静止位置</h1>
                    <p>当刷新指示器静止时，相对于被刷新的内容水平居中。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="positioning-figure-caption-0" src="<?= static_url('../static/media/patterns/swipe-to-refresh/patterns_swipetorefresh_position1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="positioning-figure-caption-0">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="positioning-figure-caption-1" src="<?= static_url('../static/media/patterns/swipe-to-refresh/patterns_swipetorefresh_position2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="positioning-figure-caption-1">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
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
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 47.3684210526%">
                          <img alt="" aria-describedby="positioning-figure-caption-2" src="<?= static_url('../static/media/patterns/swipe-to-refresh/patterns_swipetorefresh_position3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="positioning-figure-caption-2">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>刷新指示器活动位置</h1>
                    <p>刷新指示器位于刷新内容的顶部附近。</p>
                    <p>其精确的垂直静止位置可以进行调整，以促进和底部布局的视觉协调。例如，指示器可以落在材料边缘或网格线上，只要其位于刷新内容的顶部附近即可。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="positioning-figure-caption-3" src="<?= static_url('../static/media/patterns/swipe-to-refresh/patterns_swipetorefresh_position4.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="positioning-figure-caption-3">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="positioning-figure-caption-4" src="<?= static_url('../static/media/patterns/swipe-to-refresh/patterns_swipetorefresh_position5.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="positioning-figure-caption-4">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="swipe-to-refresh-behavior" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
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
              <p><strong> </strong></p>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>当刷新指示器平移和/或缩放到视图中时，图形旋转器会在旋转时逐渐显示。</p>
                    <p>刷新指示器保持可见，直到刷新动作完成且所有新内容都处于可见状态，或者用户导航离开此刷新中的内容。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="behavior-figure-caption-0" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/patterns/swipe-to-refresh/patterns-swipetorefresh-behavior_do_xhdpi_009.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/patterns/swipe-to-refresh/patterns-swipetorefresh-behavior_do_xhdpi_009.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-0">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>使刷新指示器停留在视图中，直到刷新动作完成，且提供了刷新动作状态的反馈为止。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="behavior-figure-caption-1" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/patterns/swipe-to-refresh/patterns-swipetorefresh-behavior_dont_xhdpi_009.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/patterns/swipe-to-refresh/patterns-swipetorefresh-behavior_dont_xhdpi_009.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-1">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>滚动时，如果刷新指示器离开屏幕，隐藏了刷新动作的状态，这可能意味着刷新动作和视图内的特定组件（例如卡片）相关联，而不是和整个视图相关联。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>刷新指示器的转换</h1>
                    <p>当另一个表面位于刷新内容的材料前面时，刷新指示器从该表面下方平移并被裁剪，直到其完全可见。</p>
                    <p>刷新指示器在以下情况下会在平移时增加尺寸：</p>
                    <ul class="lst-kix_t6itoy50lxht-0 start">
                      <li>刷新内容的海拔高度高于所有其他表面</li>
                      <li>内容刷新是通过应用栏或弹出菜单操作执行的</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 47.3684210526%">
                          <video aria-describedby="behavior-figure-caption-2" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/patterns/swipe-to-refresh/patterns-swipetorefresh-zspace_refresh_xhdpi_007.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/patterns/swipe-to-refresh/patterns-swipetorefresh-zspace_refresh_xhdpi_007.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-2">
                        <p>刷新内容的海拔高度高于其他表面</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="figure-figure-figure col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="behavior-figure-caption-3" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/patterns/swipe-to-refresh/patterns-swipetorefresh-coplanar_refresh_xhdpi_008.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/patterns/swipe-to-refresh/patterns-swipetorefresh-coplanar_refresh_xhdpi_008.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-3">
                        <p>刷新内容和另一个表面处于同一平面</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="behavior-figure-caption-4" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/patterns/swipe-to-refresh/patterns-swipetorefresh-zspace_refresh_mobile_xhdpi_002.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/patterns/swipe-to-refresh/patterns-swipetorefresh-zspace_refresh_mobile_xhdpi_002.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-4">
                        <p>刷新内容在 Z 轴空间上低于另一个表面</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="behavior-figure-caption-5" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/patterns/swipe-to-refresh/patterns_swipetorefresh-appbar_refresh_xhdpi_007.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/patterns/swipe-to-refresh/patterns_swipetorefresh-appbar_refresh_xhdpi_007.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-5">
                        <p>通过应用栏的操作刷新内容</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module col-1 h1-spacing">
                  <div class="module">
                    <h1>阈值要求</h1>
                    <p>为了避免误操作，刷新指示器必须超过阈值才能刷新应用。此阈值由多个线索进行指示：</p>
                    <ul class="lst-kix_b56pwaaxef79-0 start">
                      <li>圆形旋转器达到 100% 的不透明度</li>
                      <li>圆形旋转器的转速减慢</li>
                      <li>刷新指示器的平移速度减慢</li>
                    </ul>
                    <p>在超过阈值，且完成手势后将执行刷新。</p>
                    <p>反方向滑动超过阈值后将取消刷新操作。</p>
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
