<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?= $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h2>仅支持 Android</h2>
          <h1>分屏模式支持在屏幕上同时显示两个活动。</h1>
          <div class="gas-intro-h1-bottom"></div>
        </div>
      </div>


      <nav class="chapter-toc">
        <h1>目录</h1>
        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="split-screen.html#split-screen-usage" data-qp-ui-data-id="qp:1">用法</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="split-screen.html#split-screen-behavior" data-qp-ui-data-id="qp:2">行为</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="split-screen.html#split-screen-layout" data-qp-ui-data-id="qp:3">布局</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="split-screen-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
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
              <h1>需要用户主动激活</h1>
              <p>应用不能自行进入分屏模式；必须由用户主动激活。</p>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>启动新的活动</h1>
                    <p>当应用启动新的活动时，默认会显示在<strong>屏幕中的相同部分</strong>。应用将根据需要重新调整尺寸以适应分屏视图（除非你的应用不兼容分屏模式）。</p>
                    <p>当分屏模式处于启用状态时，如果满足以下条件，应用可能会在<strong>屏幕的另一部分</strong>启动新的活动：</p>
                    <ul class="lst-kix_fv5lrrj255tl-0 start">
                      <li>当处于分屏模式时，原有的活动和新的活动互相关联，并且都可用</li>
                      <li>任务的完成需要应用一次显示两个活动，并且隐藏其他已打开的应用</li>
                      <li>清楚的指出应用将要进入分屏模式，例如有一个写着 “在新窗口打开” 的按钮</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 65.7894736842%">
                          <img alt="" aria-describedby="usage-figure-caption-0" src="<?= static_url('../static/media/layout/split-screen/patterns_splitscreen_intro.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-0">
                        <p>手机上的纵向分屏模式（左图），平板上的横向分屏模式（右图）</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="split-screen-behavior" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
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
              <p>分屏模式会保持激活状态，直到用户取消或切换到一个不支持分屏的应用。</p>
              <h1>调整分屏大小</h1>
              <p>在分屏模式下，用户可以通过拖动两个分屏中间的分割线来移动和调整每个屏幕。</p>
              <h1>边缘滑动手势</h1>
              <p>当处于分屏模式时，边缘滑动手势可能不会像预期的那样。因为分屏模式依靠滑动来调整每个分屏的大小，如果你的应用还依靠边缘滑动来执行某项操作，则滑动操作可能会导致冲突。</p>
              <p>为了避免这种情况，边缘滑动不应设置为触发应用中的操作的唯一途径。应该要有一个替代方法来执行该操作。</p>
              <p>例如，<a href="../patterns/navigation-drawer.html#navigation-drawer-behavior">抽屉式导航</a>可以通过边缘滑动来触发，但也可以通过按下菜单按钮来触发。</p>
            </div>
          </div>
        </div>

        <div id="split-screen-layout" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            布局
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>为了支持分屏模式的使用，可见内容应该缩放到适当的大小和密度。</p>
              <p>主操作需要适配分屏模式。例如，导航标签可以折叠到菜单中。</p>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>响应式 UI</h1>
                    <p>分屏模式下的应用应优先根据设备尺寸和方向来调整。</p>
                    <p>更改设备的方向时不应该导致 UI 也意外的发生改变。例如，应用在一个分屏中（纵向模式中）正在播放视频，当设备变成横屏时，视频不应该进入全屏模式。</p>
                    <p>应用可以在手机和平板中使用相同或不同的布局：</p>
                    <ul class="lst-kix_twwe5kbnekhv-0 start">
                      <li>当调整应用的分屏大小时，在手机和平板上有着<strong>相似布局</strong>的应用可能会在手机模式和平板模式之间切换，因为这样的过渡效果不会显得不和谐。</li>
                      <li>在手机和平板上<strong>布局完全不同</strong>的应用应避免在分屏模式时在平板上使用手机版 UI。相反，平板 UI 应该调整尺寸来适应更小尺寸的设备，以确保用户在不同设备上能有一致的体验。</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 91.0526315789%">
                          <img alt="" aria-describedby="layout-figure-caption-0" src="<?= static_url('../static/media/layout/split-screen/patterns_splitscreen_01_samelayout.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="layout-figure-caption-0">
                        <p>应用可以在手机（左图）和平板（右图）中使用相同的布局。</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 91.0526315789%">
                          <img alt="" aria-describedby="layout-figure-caption-1" src="<?= static_url('../static/media/layout/split-screen/patterns_splitscreen_02_differentlayout.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="layout-figure-caption-1">
                        <p>应用可以在手机（左图）和平板（右图）中使用不同的布局。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>为小尺寸设计</h1>
                    <p>为了使应用更方便的设配各种尺寸的分屏模式，建议首先为最小尺寸做设计。</p>
                    <p>通过聚合元素或移除不必要的元素，为应用创建可以适配 220dp 宽度或高度的布局。在此基础上放大来设计完整的布局。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="layout-figure-caption-2" src="<?= static_url('../static/media/layout/split-screen/patterns_splitscreen_03_169mobile.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="layout-figure-caption-2">
                        <p>在手机上，当处于分屏模式时，应用竖直方向上的长宽比为 16:9。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 91.0526315789%">
                          <img alt="" aria-describedby="layout-figure-caption-3" src="<?= static_url('../static/media/layout/split-screen/patterns_splitscreen_04_3415tablet.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="layout-figure-caption-3">
                        <p>在平板上，当处于分屏模式时，应用在竖直方向上的长宽比为 34.15%。</p>
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
