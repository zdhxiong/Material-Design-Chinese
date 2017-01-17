<?php
$vars = array(
  'title' => '底部导航',
  'category' => '组件',
  'theme_color' => '#3949AB',
  'color_name' => 'indigo',
  'prev_title' => 'Split screen',
  'prev_path' => 'layout/split-screen',
  'next_title' => '底部操作表',
  'next_path' => 'components/bottom-sheets'
);

include $public_files['header'];
?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>通过单击底部导航栏，你能轻松地在应用的不同视图之间切换。</h1>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>点击底部导航图标，可以直接进入对应视图、或者刷新当前视图。</p>
                <p>底部导航主要用于移动设备。如果要在桌面设备上实现类似效果，请使用侧边栏导航。</p>
              </div>
              <div class="module">
                <h3><strong>用法</strong></h3>
                <ul class="lst-kix_nsiz2v434hok-0 start">
                  <li>有 3 - 5 个顶级视图</li>
                  <li>对应的视图要可以直接访问</li>
                </ul>

                <h3><strong>颜色</strong></h3>
                <p>激活状态的导航项的图标和文字使用主色。如果底部导航栏有背景色，则使用白色或黑色的图标和文字。</p>

                <h3><strong>规格</strong></h3>
                <ul class="lst-kix_tbzxxvnm6c5s-0 start">
                  <li>导航项的宽度: 视图的宽度除以导航项的数量 (最大 168dp、最小 80dp)</li>
                  <li>高度: 56dp</li>
                  <li>图标: 24 x 24dp</li>
                </ul>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/components/bottom-navigation/components_bottom_navigation.png"/>
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
                    <p>在较大的显示器上，例如桌面显示器，可以通过侧边栏导航实现类似的效果。例如，在侧边栏使用简洁的“轨道”来排列导航图标。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-navigation/components_bottomnavigation_usage1.png"/>
                      </div>
                      <figcaption>
                        <p>移动端的底部导航</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-navigation/components_bottomnavigation_usage2.png"/>
                      </div>
                      <figcaption>
                        <p>在较大的显示器上（如平板和桌面端）的左侧导航</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>使用场景</h1>
                    <p>底部导航用于：</p>
                    <ul class="lst-kix_l6klgupop2r4-0 start">
                      <li>有 3 - 5 个同等重要的顶级视图 （替代方法: 可从应用的任何地方进行访问的<a href="../patterns/navigation-drawer.html">抽屉栏导航</a>）</li>
                    </ul>
                    <ul class="lst-kix_qgzy8a46jwsx-0 start">
                      <li>目标视图需要从应用的任何地方直接进行访问 （替代方法: 仅在一个或两个视图中使用的<a href="tabs.html">标签</a>（</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-navigation/components_bottomnavigation_usage3.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>底部导航栏显示 3 - 5 个导航项。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-navigation/components_bottomnavigation_usage4.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
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
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-navigation/components_bottomnavigation_usage5.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>视图固定在底部导航栏中。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-navigation/components_bottomnavigation_usage6.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>避免在底部导航栏中出现滚动条。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-navigation/components_bottomnavigation_usage7.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>在底部导航中有 5 个导航项。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-navigation/components_bottomnavigation_usage8.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>底部导航的导航项数量不要超过 5 个，否则它们之间的间距会过小。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-module-module col-3">
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
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>颜色</h1>
                    <p>激活状态的导航项的图标和文本需要使用主色。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-navigation/components_bottomnavigation_style5.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>使用主色来表明激活状态。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-navigation/components_bottomnavigation_style6.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
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
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-navigation/components_bottomnavigation_style7.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>如果底部导航栏已有背景色，使用黑色或白色的图标和文本。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-navigation/components_bottomnavigation_style8.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>避免在有背景色的底部导航栏上使用其他颜色的图标和文本。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>文本标签</h1>
                    <p>文本标签是对导航项图标的简短说明。这些文本不会被截断或换行，所以应避免使用长文本。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-navigation/components_bottomnavigation_style1.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>使用短文本</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-navigation/components_bottomnavigation_style2.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>避免使用多行文本</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-navigation/components_bottomnavigation_style3.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>避免截断文本，因为这样会导致理解困难。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-navigation/components_bottomnavigation_style4.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
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
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>点击底部导航的图标将直接进入相应视图，或刷新当前激活的视图。</p>
                    <p>每一个底部导航的图标都必须指向一个目标视图，不能打开菜单或跳转到其他窗口。</p>
                    <p>在 Android 上，点击后退按钮不能在不同的底部导航项之间切换。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/bottom-navigation/components_bottomnavigation_behavior_backtotop.webm" type="video/webm">
                            <source src="../static/media/components/bottom-navigation/components_bottomnavigation_behavior_backtotop.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>点击当前激活的底部导航项，将跳转到对应视图的顶部。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/bottom-navigation/components_bottomnavigation_behavior_wipestack.webm" type="video/webm">
                            <source src="../static/media/components/bottom-navigation/components_bottomnavigation_behavior_wipestack.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>在不同的底部导航项之间切换时，对应的视图会被刷新。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>底部导航栏会随着界面的滚动而显示或隐藏：</p>
                    <ul class="lst-kix_2nqrf2xs0bt2-0 start">
                      <li>向下滚动时隐藏底部导航栏</li>
                      <li>向上滚动时显示底部导航栏</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/bottom-navigation/components_bottomnavigation_behavior_scroll.webm" type="video/webm">
                            <source src="../static/media/components/bottom-navigation/components_bottomnavigation_behavior_scroll.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>底部导航栏可以自动隐藏和显示，以带给用户沉浸式的浏览体验。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/bottom-navigation/components_bottomnavigation_behavior_hierarchy.webm" type="video/webm">
                            <source src="../static/media/components/bottom-navigation/components_bottomnavigation_behavior_hierarchy.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>The bottom navigation bar remains in view when navigating through the app’s hierarchy.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>Using swipe gestures on the content area does not navigate between views. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/bottom-navigation/components_bottomnavigation_behavior_crossfade.webm" type="video/webm">
                            <source src="../static/media/components/bottom-navigation/components_bottomnavigation_behavior_crossfade.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>在不同视图中切换时使用淡入淡出的过渡效果。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/bottom-navigation/components_bottomnavigation_behavior_sibling.webm" type="video/webm">
                            <source src="../static/media/components/bottom-navigation/components_bottomnavigation_behavior_sibling.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
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
            Specs
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
                  <div class="module"><h1>Fixed bottom navigation bar</h1>
                    <p>To calculate the width of each bottom navigation action, divide the width of the view by the number of actions:</p>
                    <p>Width of action = Width of entire view / Number of actions </p>
                    <p>For example, if a view is 360dp wide, and there are three actions, each action should be 120dp wide.</p>
                    <p>Desktop and larger views<br>
                      Alternatively, make all bottom navigation actions the width of the largest action.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-navigation/components_bottomnavigation_spec_fixed1.png"/>
                      </div>
                      <figcaption>
                        <p>Fixed bottom navigation bar on mobile</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/bottom-navigation/components_bottomnavigation_spec_fixedbottomnav.webm" type="video/webm">
                            <source src="../static/media/components/bottom-navigation/components_bottomnavigation_spec_fixedbottomnav.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Fixed bottom navigation bar on mobile</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>Width minimum and maximum (these values include padding):</p>
                    <ul class="lst-kix_lnsg4foawz0b-0 start">
                      <li>Maximum: 168dp</li>
                      <li>Minimum: 80dp</li>
                    </ul>
                    <p>Height:<br>56dp</p>
                    <p>Icon: <br>24 x 24dp</p>
                    <p>Content alignment: <br>Text and icon are centered horizontally within the view.</p>
                    <p>Padding: </p>
                    <ul class="lst-kix_ddajmnwq7ifo-0 start">
                      <li>6dp above icon (active view), 8dp above icon (inactive view)</li>
                      <li>10dp under text</li>
                      <li>12dp left and right of text</li>
                    </ul>
                    <p>Text label:</p>
                    <ul class="lst-kix_avhrhhhlfjyj-0 start">
                      <li>Roboto Regular 14sp (active view)</li>
                      <li>Roboto Regular 12sp (inactive view)</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-navigation/components_bottomnavigation_spec_fixed2.png"/>
                      </div>
                      <figcaption>
                        <p>80dp min width<br>12dp padding</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-navigation/components_bottomnavigation_spec_fixed4.png"/>
                      </div>
                      <figcaption>
                        <p>56dp height<br>
                          12dp left and right of text<br>
                          10dp under text</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-navigation/components_bottomnavigation_spec_fixed3.png"/>
                      </div>
                      <figcaption>
                        <p>168dp max width<br>
                          12dp padding</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-navigation/components_bottomnavigation_spec_fixed5.png"/>
                      </div>
                      <figcaption>
                        <p>Example of bottom navigation bar</p>
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
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-navigation/components_bottomnavigation_spec_fixed6.png"/>
                      </div>
                      <figcaption>
                        <p>Fixed bottom navigation bar on landscape mobile</p>
                        <p>56dp height<br>
                          24 x 24dp icon<br>
                          6dp above icon (active view)<br>
                          8dp above icon (inactive view)<br>
                          10dp under text</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-navigation/components_bottomnavigation_spec_fixed7.png"/>
                      </div>
                      <figcaption>
                        <p>Fixed bottom navigation bar on tablet<br>
                          56dp height<br>
                          24 x 24dp icon<br>
                          6dp above icon (active view)<br>
                          8dp above icon (inactive view)<br>
                          10dp under text</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Shifting bottom navigation bar</h1>
                    <p>Width minimum and maximum (this includes padding):</p>
                    <p>Active view</p>
                    <ul class="lst-kix_6aosjsseydlw-0 start">
                      <li>Maximum: 168dp</li>
                      <li>Minimum: 96dp</li>
                    </ul>
                    <p>Inactive view</p>
                    <ul class="lst-kix_so6a7v5i0dzg-0 start">
                      <li>Maximum: 96dp</li>
                      <li>Minimum: 56dp</li>
                    </ul>
                    <p>Height:<br>
                      56dp</p>
                    <p>Icon: <br>
                      24 x 24dp</p>
                    <p>Content alignment: <br>
                      Text and icon are centered horizontally within view.</p>
                    <p>Padding: </p>
                    <ul class="lst-kix_cnaab17jk5is-0 start">
                      <li>6dp above icon (active view), 16dp above and below icon (inactive view)</li>
                      <li>10dp under text</li>
                    </ul>
                    <p>Text label:<br>
                      Roboto Regular 14sp (active view)</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-navigation/components_bottomnavigation_spec_shifting1.png"/>
                      </div>
                      <figcaption>
                        <p>Shifting bottom navigation bar on mobile<br>
                          56dp height<br>
                          24 x 24dp icon<br>
                          6dp above icon (active view)<br>
                          10dp under text<br>
                          6dp below icon<br>
                          16dp below icon with no title </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/bottom-navigation/components_bottomnavigation_spec_shiftingbottomnav.webm" type="video/webm">
                            <source src="../static/media/components/bottom-navigation/components_bottomnavigation_spec_shiftingbottomnav.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Shifting bottom navigation bar on mobile</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-navigation/components_bottomnavigation_spec_shifting2.png"/>
                      </div>
                      <figcaption>
                        <p>Active view: 96dp min width</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-navigation/components_bottomnavigation_spec_shifting4.png"/>
                      </div>
                      <figcaption>
                        <p>Inactive view: 56dp min width</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-navigation/components_bottomnavigation_spec_shifting6-.png"/>
                      </div>
                      <figcaption>
                        <p>Text labels may use the maximum width on the active view.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-navigation/components_bottomnavigation_spec_shifting3.png"/>
                      </div>
                      <figcaption>
                        <p>Active view: 168dp max width</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-navigation/components_bottomnavigation_spec_shifting5.png"/>
                      </div>
                      <figcaption>
                        <p>Inactive view: 96dp max width </p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-navigation/components_bottomnavigation_spec_shifting7.png"/>
                      </div>
                      <figcaption>
                        <p>Text labels may use the maximum width on the active view.</p>
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
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-navigation/components_bottomnavigation_spec_shifting8.png"/>
                      </div>
                      <figcaption>
                        <p>Shifting bottom navigation bar on landscape mobile<br>
                          56dp height<br>
                          24 x 24dp icon<br>
                          6dp above icon (active view)<br>
                          10dp under text<br>
                          6dp below icon<br>
                          16dp below icon with no title </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-navigation/components_bottomnavigation_spec_shifting9.png"/>
                      </div>
                      <figcaption>
                        <p>Shifting bottom navigation bar on tablet<br>
                          56dp height<br>
                          24 x 24dp icon<br>
                          6dp above icon (active view)<br>
                          10dp under text<br>
                          6dp below icon<br>
                          16dp below icon with no title </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Elevation</h1>
                    <p>Because snackbars have a lower (6dp) elevation, they appear behind the bottom navigation bar (8dp elevation). </p>
                    <p>Bottom sheets, navigation drawers, and keyboards appear in front of the bottom navigation bar, temporarily covering it. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-navigation/components_bottomnavigation_spec_elevation1.png"/>
                      </div>
                      <figcaption>
                        <p>Snackbars appear behind the bottom navigation bar.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/bottom-navigation/components_bottomnavigation_spec_elevation2.webm" type="video/webm">
                            <source src="../static/media/components/bottom-navigation/components_bottomnavigation_spec_elevation2.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Bottom sheets and keyboards appear in front of the bottom nav bar, temporarily covering it.</p>
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
                      <div class="media">
                        <img alt="" src="../static/media/components/bottom-navigation/components_bottomnavigation_spec_elevation3-.png"/>
                      </div>
                      <figcaption>
                        <p>Orthographic view of app structure</p>
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

<?php
include $public_files['footer'];
?>