<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?= $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>通过单击底部导航栏，你能轻松地在应用的不同视图之间切换。</h1>
          <div class="col-list">
            <section class="module-module-figure col-3 h3-spacing">
              <div class="module">
                <p>点击底部导航图标，可以直接进入对应视图、或者刷新当前视图。</p>
                <p>底部导航主要用于移动设备。如果要在桌面设备上实现类似效果，请使用侧边栏导航。</p>
              </div>
              <div class="module">
                <h3>用法</h3>
                <ul class="lst-kix_nsiz2v434hok-0 start">
                  <li>有 3 - 5 个顶级视图</li>
                  <li>对应的视图要可以直接访问</li>
                </ul>

                <h3>颜色</h3>
                <p>激活状态的导航项的图标和文字使用主色。如果底部导航栏有背景色，则使用白色或黑色的图标和文字。</p>

                <h3>规格</h3>
                <ul class="lst-kix_tbzxxvnm6c5s-0 start">
                  <li>导航项的宽度: 视图的宽度除以导航项的数量 (最大 168dp、最小 80dp)</li>
                  <li>高度: 56dp</li>
                  <li>图标: 24 x 24dp</li>
                </ul>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 3000px">
                    <div class="frame " style="padding-top: 100.0%">
                      <img alt="" src="<?= static_url('../static/media/components/bottom-navigation/components_bottom_navigation.png'); ?>" loading="lazy"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="bottom-navigation.html#bottom-navigation-usage" data-qp-ui-data-id="qp:1">用法</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="bottom-navigation.html#bottom-navigation-style" data-qp-ui-data-id="qp:2">样式</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="bottom-navigation.html#bottom-navigation-behavior" data-qp-ui-data-id="qp:3">操作</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="bottom-navigation.html#bottom-navigation-specs" data-qp-ui-data-id="qp:4">规格</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="bottom-navigation-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
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
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>底部导航可以快速切换应用的不同视图。它主要为移动端设计。</p>
                    <p>在较大的显示器上，例如桌面显示器，可以通过侧边栏导航实现类似的效果。例如，在侧边栏使用简洁的 “轨道” 来排列导航图标。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 83.3333333333%">
                          <img alt="" aria-describedby="usage-figure-caption-0" src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_usage1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-0">
                        <p>移动端的底部导航</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 195.0%">
                          <img alt="" aria-describedby="usage-figure-caption-1" src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_usage2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-1">
                        <p>在较大的显示器上（如平板和桌面端）的左侧导航</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>使用场景</h1>
                    <p>底部导航用于：</p>
                    <ul class="lst-kix_l6klgupop2r4-0 start">
                      <li>有 3 - 5 个同等重要的顶级视图 （备选方案: 可从应用的任何地方进行访问的<a href="../patterns/navigation-drawer.html">抽屉栏导航</a>）</li>
                    </ul>
                    <ul class="lst-kix_qgzy8a46jwsx-0 start">
                      <li>目标视图需要从应用的任何地方直接进行访问 （备选方案: 仅在一个或两个视图中使用的<a href="tabs.html">标签</a>（</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 83.3333333333%">
                          <img alt="" aria-describedby="usage-figure-caption-2" src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_usage3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-2">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>底部导航栏显示 3 - 5 个导航项。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 83.3333333333%">
                          <img alt="" aria-describedby="usage-figure-caption-3" src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_usage4.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-3">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>如果只有 3 个以下的视图需要切换，考虑使用标签进行代替。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>如果你的底部导航有 5 个以上的导航项，请将超出部分的导航项放在其他位置的导航中（如抽屉栏导航）。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 83.3333333333%">
                          <img alt="" aria-describedby="usage-figure-caption-4" src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_usage5.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-4">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>视图固定在底部导航栏中。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 83.3333333333%">
                          <img alt="" aria-describedby="usage-figure-caption-5" src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_usage6.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-5">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>避免在底部导航栏中出现滚动条。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 83.3333333333%">
                          <img alt="" aria-describedby="usage-figure-caption-6" src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_usage7.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-6">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>在底部导航中有 5 个导航项。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 83.3333333333%">
                          <img alt="" aria-describedby="usage-figure-caption-7" src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_usage8.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-7">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>底部导航的导航项数量不要超过 5 个，否则它们之间的间距会过小。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-module-module col-3 h2-spacing">
                  <div class="module">
                    <h2>底部导航和标签</h2>
                    <p>尽量不要同时使用底部导航和标签，因为同时使用它们可能会导致导航的混乱。例如，两个对应同一内容的底部导航和标签，在点击时，会混合显示不同过渡效果。</p>
                  </div>
                  <div class="module"></div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="bottom-navigation-style" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            样式
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <h1>图标和文本</h1>
              <p>底部导航项中的图标应该和它的目标视图的内容相符。</p>
              <p>根据下面的条件来为每个导航项设置样式：</p>
              <ul class="lst-kix_83pple6dg7i4-0 start">
                <li>导航项<strong>激活</strong>时，显示导航项的图标和文本</li>
                <li>当只有 <strong>3 个导航项</strong>时，始终同时显示图标和文本。</li>
                <li>当有 <strong>4 个或 5 个</strong>导航项时，在不激活时只显示图标。</li>
              </ul>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>颜色</h1>
                    <p>激活状态的导航项的图标和文本需要使用主色。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 83.3333333333%">
                          <img alt="" aria-describedby="style-figure-caption-0" src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_style5.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="style-figure-caption-0">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>使用主色来表明激活状态。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 83.3333333333%">
                          <img alt="" aria-describedby="style-figure-caption-1" src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_style6.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="style-figure-caption-1">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>避免使用不同颜色的图标和文字。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>如果底部导航已有背景色，将导航项的图标和文本设置为白色或黑色。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 83.3333333333%">
                        <img alt="" aria-describedby="style-figure-caption-2" src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_style7.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="style-figure-caption-2">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>如果底部导航栏已有背景色，使用黑色或白色的图标和文本。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 83.3333333333%">
                          <img alt="" aria-describedby="style-figure-caption-3" src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_style8.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="style-figure-caption-3">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>避免在有背景色的底部导航栏上使用其他颜色的图标和文本。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>文本标签</h1>
                    <p>文本标签是对导航项图标的简短说明。这些文本不会被截断或换行，所以应避免使用长文本。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 83.3333333333%">
                          <img alt="" aria-describedby="style-figure-caption-4" src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_style1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="style-figure-caption-4">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>使用短文本</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 83.3333333333%">
                          <img alt="" aria-describedby="style-figure-caption-5" src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_style2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="style-figure-caption-5">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>避免使用多行文本</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 83.3333333333%">
                          <img alt="" aria-describedby="style-figure-caption-6" src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_style3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="style-figure-caption-6">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>避免截断文本，因为这样会导致理解困难。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 83.3333333333%">
                          <img alt="" aria-describedby="style-figure-caption-7" src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_style4.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="style-figure-caption-7">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>避免为了使文本在单行显示而缩小文本。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="bottom-navigation-behavior" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            操作
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>使用底部导航栏，可以从一个主题的较深层级快速进入另一个主题的顶部。用户在不同层级间切换时，应使底部导航栏始终显示、或者在滚动时显示或隐藏，来使底部导航栏始终可用。</p>
              <p>底部导航栏不能用于：</p>
              <ul class="lst-kix_di7sjnes8zda-0 start">
                <li>侧重于单个任务的视图，例如电子邮件的“撰写”界面</li>
                <li>包含用户首选项或设置的视图</li>
              </ul>
              <p>在 Android 上，不能通过点击后退按钮来切换底部的导航项。</p>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>底部导航图标</h1>
                    <p>点击底部导航的图标将直接进入相应视图，或刷新当前激活的视图。每个图标都必须指向一个目标视图，不能打开菜单或对话框。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="behavior-figure-caption-0" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_behavior_backtotop.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_behavior_backtotop.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-0">
                        <p>点击当前激活的底部导航项，将跳转到对应视图的顶部。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="behavior-figure-caption-1" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_behavior_wipestack.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_behavior_wipestack.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-1">
                        <p>在不同的底部导航项之间切换时，对应的视图会被刷新。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>滚动</h1>
                    <p>底部导航栏会随着界面的滚动而显示或隐藏：</p>
                    <ul class="lst-kix_2nqrf2xs0bt2-0 start">
                      <li>向下滚动时隐藏底部导航栏</li>
                      <li>向上滚动时显示底部导航栏</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="behavior-figure-caption-2" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_behavior_scroll.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_behavior_scroll.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-2">
                        <p>底部导航栏可以自动隐藏和显示，以带给用户沉浸式的浏览体验。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="behavior-figure-caption-3" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_behavior_hierarchy.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_behavior_hierarchy.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-3">
                        <p>在应用的层次级页面之间切换时，底部导航栏应保持可见。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>在内容区域使用滑动手势无法进行视图的切换。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="behavior-figure-caption-4" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_behavior_crossfade.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_behavior_crossfade.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-4">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>在不同视图中切换时使用淡入淡出的过渡效果。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="behavior-figure-caption-5" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_behavior_sibling.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_behavior_sibling.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-5">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>避免使用横向滑动来切换视图。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="bottom-navigation-specs" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
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
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module"><h1>固定状态的底部导航栏</h1>
                    <p>用底部导航栏的宽度除以导航项的个数，就是每个导航项的宽度：</p>
                    <p>导航项的宽度 = 导航栏宽度 / 导航项数量</p>
                    <p>例如：导航栏宽度是 360dp，有 3 个导航项，那么每个导航项宽度是 120dp。</p>
                    <p>桌面设备以及更大的显示设备上<br>
                      每个导航项的宽度不要超过最大宽度。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 83.3333333333%">
                          <img alt="" aria-describedby="specs-figure-caption-0" src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_spec_fixed1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-0">
                        <p>移动设备上，固定状态的底部导航栏</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 83.3333333333%">
                          <video aria-describedby="specs-figure-caption-1" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_spec_fixedbottomnav.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_spec_fixedbottomnav.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-1">
                        <p>移动设备上，固定状态的底部导航栏</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>最小宽度和最大宽度（这个值已经包含了内边距）：</p>
                    <ul class="lst-kix_lnsg4foawz0b-0 start">
                      <li>最大宽度：168dp</li>
                      <li>最小宽度：80dp</li>
                    </ul>
                    <p>高度：<br>56dp</p>
                    <p>图标大小：<br>24 x 24dp</p>
                    <p>内容对齐方式：<br>文本和图标需水平居中。</p>
                    <p>内边距：</p>
                    <ul class="lst-kix_ddajmnwq7ifo-0 start">
                      <li>图标上方 6dp（激活状态），8dp（不激活状态）</li>
                      <li>文本下方内边距 10dp</li>
                      <li>文本的左右内边距 12dp</li>
                    </ul>
                    <p>文本标签：</p>
                    <ul class="lst-kix_avhrhhhlfjyj-0 start">
                      <li>Roboto Regular 14sp（激活状态）</li>
                      <li>Roboto Regular 12sp（不激活状态）</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 43.3333333333%">
                          <img alt="" aria-describedby="specs-figure-caption-2" src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_spec_fixed2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-2">
                        <p>最小宽度 80dp<br>内边距 12dp</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 83.3333333333%">
                          <img alt="" aria-describedby="specs-figure-caption-3" src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_spec_fixed4.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-3">
                        <p>高度 56dp<br>
                          文本的左右内边距 12dp<br>
                          文本下方内边距 10dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 43.3333333333%">
                          <img alt="" aria-describedby="specs-figure-caption-4" src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_spec_fixed3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-4">
                        <p>最大宽度 168dp<br>
                          内边距 12dp</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 83.3333333333%">
                          <img alt="" aria-describedby="specs-figure-caption-5" src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_spec_fixed5.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-5">
                        <p>底部导航栏示例</p>
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
                        <div class="frame " style="padding-top: 56.8421052632%">
                          <img alt="" aria-describedby="specs-figure-caption-6" src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_spec_fixed6.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-6">
                        <p>大屏幕移动设备上，固定状态的底部导航栏。</p>
                        <p>高度 56dp<br>
                          图标大小 24 x 24dp<br>
                          图标上方内边距 6dp（激活状态）<br>
                          图标上方内边距 8dp（不激活状态）<br>
                          文本下方内边距 10dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame" style="padding-top: 40.0%">
                          <img alt="" aria-describedby="specs-figure-caption-7" src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_spec_fixed7.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-7">
                        <p>平板设备上，固定状态的底部导航栏<br>
                          高度 56dp<br>
                          图标大小 24 x 24dp<br>
                          图标上方内边距 6dp（激活状态）<br>
                          图标上方内边距 8dp（不激活状态）<br>
                          文本下方内边距 10dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>可切换的底部导航栏</h1>
                    <p>最小宽度和最大宽度（包含内边距）：</p>
                    <p>激活状态</p>
                    <ul class="lst-kix_6aosjsseydlw-0 start">
                      <li>最大宽度：168dp</li>
                      <li>最小宽度：96dp</li>
                    </ul>
                    <p>不激活状态</p>
                    <ul class="lst-kix_so6a7v5i0dzg-0 start">
                      <li>最大宽度：96dp</li>
                      <li>最小宽度：56dp</li>
                    </ul>
                    <p>高度：<br>
                      56dp</p>
                    <p>图标大小：<br>
                      24 x 24dp</p>
                    <p>内容对齐方式：<br>
                      文本和图标需水平居中。</p>
                    <p>内边距: </p>
                    <ul class="lst-kix_cnaab17jk5is-0 start">
                      <li>图标上方 6dp（激活状态），图标上下两册 16dp（不激活状态）</li>
                      <li>图标下方 10dp</li>
                    </ul>
                    <p>文本标签：<br>
                      Roboto Regular 14sp（激活状态）</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 83.3333333333%">
                          <img alt="" aria-describedby="specs-figure-caption-8" src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_spec_shifting1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-8">
                        <p>移动设备上，可切换的底部导航栏<br>
                          高度 56dp<br>
                          图标大小 24 x 24dp<br>
                          图标上方内边距 6dp（激活状态）<br>
                          文本下方内边距 10dp<br>
                          图标下方内边距 6dp<br>
                          没有文本时，图标下方内边距 16dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button"  style="padding-top: 83.3333333333%">
                          <video aria-describedby="specs-figure-caption-9" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_spec_shiftingbottomnav.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_spec_shiftingbottomnav.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-9">
                        <p>移动设备上，可切换的底部导航栏</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 43.3333333333%">
                          <img alt="" aria-describedby="specs-figure-caption-10" src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_spec_shifting2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-10">
                        <p>激活状态：最小宽度 96dp</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 43.3333333333%">
                          <img alt="" aria-describedby="specs-figure-caption-11" src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_spec_shifting4.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-11">
                        <p>不激活状态：最小宽度 56dp</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 83.3333333333%">
                          <img alt="" aria-describedby="specs-figure-caption-12" src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_spec_shifting6-.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-12">
                        <p>激活的导航项上的文本标签可以使用最大宽度。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 43.3333333333%">
                          <img alt="" aria-describedby="specs-figure-caption-13" src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_spec_shifting3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-13">
                        <p>激活状态：最大宽度 168dp</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 43.3333333333%">
                          <img alt="" aria-describedby="specs-figure-caption-14" src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_spec_shifting5.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-14">
                        <p>不激活状态：最大宽度 96dp</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 83.3333333333%">
                          <img alt="" aria-describedby="specs-figure-caption-15" src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_spec_shifting7.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-15">
                        <p>激活的导航项上的文本标签可以使用最大宽度。</p>
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
                        <div class="frame" style="padding-top: 56.8421052632%">
                          <img alt="" aria-describedby="specs-figure-caption-16" src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_spec_shifting8.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-16">
                        <p>大屏移动设备上的可切换底部导航栏<br>
                          高度 56dp<br>
                          图标大小 24 x 24dp<br>
                          图标上方内边距 6dp（激活状态）<br>
                          文本下方内边距 10dp<br>
                          图标下方内边距 6dp<br>
                          没有文本时，图标下方内边距 16dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame" style="padding-top: 40.0%">
                          <img alt="" aria-describedby="specs-figure-caption-17" src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_spec_shifting9.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-17">
                        <p>在平板上的可切换底部导航栏<br>
                          高度 56dp<br>
                          图标大小 24 x 24dp<br>
                          图标上方内边距 6dp（激活状态）<br>
                          文本下方内边距 10dp<br>
                          图标下方内边距 6dp<br>
                          没有文本时，图标下方内边距 16dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>层级</h1>
                    <p>因为 Snackbar 的层级高度为 6dp，而底部导航栏的层级高度为 8dp，所以 Snackbar 会显示在底部导航栏的后面。</p>
                    <p>而 Bottom sheets, navigation drawers, 和 keyboards 都显示在底部导航栏的前面，完全覆盖住底部导航栏。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 110.0%">
                          <img alt="" aria-describedby="specs-figure-caption-18" src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_spec_elevation1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-18">
                        <p>Snackbar 在底部导航栏后面。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 110.0%">
                          <video aria-describedby="specs-figure-caption-19" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_spec_elevation2.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_spec_elevation2.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-19">
                        <p>Bottom sheets 和 keyboards 在底部导航栏前面，完全覆盖住底部导航栏。</p>
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
                        <div class="frame" style="padding-top: 65.7894736842%">
                          <img alt="" aria-describedby="specs-figure-caption-20" src="<?= static_url('../static/media/components/bottom-navigation/components_bottomnavigation_spec_elevation3-.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-20">
                        <p>应用结构的正交视图。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php include SRC_PATH.'/public/footer.php'; ?>
