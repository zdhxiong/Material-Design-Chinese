<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <p>Tab 选项卡可以方便地在不同视图间浏览和切换。</p>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>选项卡可以在高级别组织内容，例如在视图、数据集或应用的功能方面切换。</p>
                <p>选项卡显示为其关联内容上方的单行元素。选项卡标签应简明扼要地描述其中的内容。</p>
                <p>因为滑动手势被用于切换选项卡，所以不要在选项卡的内容中包含支持滑动手势的控件，以免手势产生冲突。</p>
              </div>
              <div class="module">
                <h3><strong>类型</strong></h3>
                <p>固定<br>
                  可滚动</p>
                <h3><strong>选项卡标签</strong></h3>
                <p>选项卡标签可以是纯图标或纯文本。</p>
                <h3><strong>颜色</strong></h3>
                <p>使用应用的强调色、或和文本对比度较高的颜色。</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/components/tabs/components_tabs.png"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="tabs.html#tabs-usage" data-qp-ui-data-id="qp:1">用法</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="tabs.html#tabs-content" data-qp-ui-data-id="qp:2">内容</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="tabs.html#tabs-types-of-tabs" data-qp-ui-data-id="qp:3">选项卡类型</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="tabs.html#tabs-specs" data-qp-ui-data-id="qp:4">规格</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="tabs-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
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
              <p>选项卡提供了显示分组内容的功能。选项卡标签简明扼要的描述了与标签相关的分组的内容。</p>
              <h1>移动端的选项卡</h1>
              <div class="col-list">
                <section class="figure-figure-figure col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_mobile3.png"/>
                      </div>
                      <figcaption>
                        <p>默认应用栏和固定选项卡栏</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_mobile1.png"/>
                      </div>
                      <figcaption>
                        <p>展开的应用栏和固定选项卡栏</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_mobile6.png"/>
                      </div>
                      <figcaption>
                        <p>在滚动内容时选项卡固定在页面顶部</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="figure-figure-figure col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_mobile2.png"/>
                      </div>
                      <figcaption>
                        <p>内嵌搜索，应用栏和固定选项卡栏</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_mobile5.png"/>
                      </div>
                      <figcaption>
                        <p>默认应用栏和可滚动选项卡栏</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_mobile4.png"/>
                      </div>
                      <figcaption>
                        <p>文本颜色和选项卡指示器颜色相同。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="figure-figure-module col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_mobile7.png"/>
                      </div>
                      <figcaption>
                        <p>默认应用栏和含图标的固定选项卡栏</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_mobile8.png"/>
                      </div>
                      <figcaption>
                        <p>图标颜色和选项卡指示器相同。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>桌面端的选项卡</h1>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_desktop1.png"/>
                      </div>
                      <figcaption>
                        <p>默认应用栏和选项卡栏</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_desktop2.png"/>
                      </div>
                      <figcaption>
                        <p>含下拉菜单的选项卡栏</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_desktop3.png"/>
                      </div>
                      <figcaption>
                        <p>已打开下拉菜单的选项卡</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_desktop4.png"/>
                      </div>
                      <figcaption>
                        <p>已从下拉菜单中选中了 Books 的选项卡</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_desktop5.png"/>
                      </div>
                      <figcaption>
                        <p>含翻页的选项卡</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_desktop6.png"/>
                      </div>
                      <figcaption>
                        <p>带翻页的选项卡滚动后</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_desktop7.png"/>
                      </div>
                      <figcaption>
                        <p>居中的选项卡</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>何时使用</h1>
                    <p>使用选项卡可以在高级别组织内容，例如，显示报纸的不同部分。不要把选项卡用于轮播内容或进行内容分页。这些用例涉及查看内容，而不是在内容组之间导航。</p>
                    <p>使用选项卡在高级视图间导航的更多细节，详见<a href="../patterns/app-structure.html#navigation-patterns">导航 - 模式</a>中的“选项卡”。</p>
                    <p>不要在选项卡内容中包含支持滑动手势的内容，因为滑动手势是用于在选项卡之间导航的。例如，避免在选项卡中包含一个可以拖动的地图，或者一个可以滑动删除的列表。</p>
                    <p>固定的选项卡应该只包含有限数量的选项，并且保持选项的位置不变，有利于用户记忆。可滚动选项卡用于有很多选项或选项数量可变的情况。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_example1.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>选项卡在含同等重要的内容的选项之间切换。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_example2.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>这个选项卡在含不同等重要的内容的选项之间切换。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>选项卡特性</h1>
                    <p>选项卡使内容在统一的位置显示。</p>
                    <p>格式规范：</p>
                    <ul class="lst-kix_kuwhumxtki7d-0 start">
                      <li>把选项卡显示为单行。如果有需要，把选项标签包裹到第二行，剩下的截断。</li>
                      <li>选项卡不要互相嵌套。</li>
                      <li>高亮与可见内容对应的选项卡。</li>
                      <li>将选项卡分层组合在一起。将一组选项卡与其内容相关联。</li>
                      <li>保持选项卡与其内容相邻，以保持两者之间的联系。</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_example5.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>选项卡显示成单行。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_example6.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>选项卡没有显示成单行。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_example3.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>使用内容层次结构，使选项卡与当前显示的内容相关。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_example4.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>选项卡不能嵌套。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="tabs-content" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
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
                <section class="module-figure-figure col-3">
                  <div class="module"><p>选项卡中显示的内容可以有很大的不同，甚至选项卡之间也是如此。例如，选项卡可以显示不同年份的艺术作品集、或包含不同类型的设置项。</p>
                    <p>一组选项卡中的所有内容应该根据较大的分组原则进行分组，每个选项卡的内容与其他选项卡的内容都互相独立。</p>
                    <p>选项卡标签应该从逻辑上组织相关内容，并提供更有意义的区分。</p>
                    <p>选项卡标签可以都是图标，也可以都是文字。当使用文字标签时，应该使用短标题。</p>
                    <p>避免进行跨选项卡的内容比较。如果一个跨选项卡的比较是有意义的，也许就说明应该换一种内容组织或呈现方式，把内容放到更相近的地方。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_content1.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>超过选项卡最大长度的长标签可以在被截断之前换行到第二行。</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_content3.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>不要调整单行标签的大小。如果标签太长，请将文本跨两行或使用可滚动选项卡。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_content2.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>在截断标签之前可以对标签进行换行。过早截断标签会妨碍理解。</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_content4.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>不要把文本标签和图标混合使用。全部使用文本标签、或全部使用图标标签。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="tabs-types-of-tabs" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            选项卡类型
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>根据平台和使用环境，选项卡内容可以表现为固定选项卡或可滚动选项卡。</p>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>固定选项卡</h1>
                    <p>固定选项卡同时显示所有的选项卡，适合用于需要在固定的位置快速切换选项卡的场景，例如在 Google 地图中切换路线的交通方式。</p>
                    <p>固定选项卡中的选项宽度都相同，可以通过视图宽度除以选项卡数量算出选项宽度、或者根据最宽的选项的标签得出选项宽度。要在固定选项卡之间导航，可以触摸选项或者在内容区域向左或向右滑动。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_typesoftabs_mobile1.png"/>
                      </div>
                      <figcaption>
                        <p>移动设备上的固定选项卡</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_typesoftabs_mobile2.png"/>
                      </div>
                      <figcaption>
                        <p>移动设备上的固定选项卡</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h1>可滚动选项卡</h1>
                    <p>可滚动选项卡在任何时刻都只能显示选项卡集的一部分。它们可以包含更长的选项卡标签和更多的选项卡数量。可滚动选项卡最适合用于用户不需要直接对不同的选项卡进行比较，可以直接通过滑动的方式浏览不同选项卡的内容。</p>
                    <p>通过触摸选项卡或在内容区域左右滑动，可以在可滚动的选项卡之间切换。要滚动选项卡而不需要切换选项卡，可以在选项卡上左右滑动。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/tabs/components-tabs-typesoftabs_scrollable_tabs_01_xhdpi_003.webm" type="video/webm">
                            <source src="../static/media/components/tabs/components-tabs-typesoftabs_scrollable_tabs_01_xhdpi_003.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>移动端的可滚动选项卡</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_desktop4.png"/>
                      </div>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_desktop5.png"/>
                      </div>
                      <figcaption>
                        <p>可滚动选项卡示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="tabs-specs" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
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
                <section class="module-figure-figure col-3">
                  <div class="module"><h1>固定选项卡</h1>
                    <p>视图的宽度除以选项卡的数量，可以计算出每个选项卡的宽度。或者，使每个选项卡的宽度都等于最宽的那个选项卡的宽度。</p>
                    <p>如果选项卡边缘和视图边缘之间的间距小于等于 16dp，使用全宽选项卡代替居中选项卡。</p>
                    <p>最小和最大宽度（包括边距）</p>
                    <ul class="lst-kix_aw6kldsmp1d3-0 start">
                      <li>最大宽度：264dp</li>
                      <li>最小宽度：在比较大的视图上为 160dp，比较小的视图上为 72dp</li>
                    </ul>
                    <p>高度</p>
                    <ul class="lst-kix_rht9x738lfdm-0 start">
                      <li>48dp</li>
                    </ul>
                    <p>边距</p>
                    <ul class="lst-kix_mdnkpyh5cuin-0 start">
                      <li>文本左右 12dp</li>
                      <li>单行选项卡文本底部 20dp，双行选项卡文本底部 12dp</li>
                    </ul>
                    <p>对齐方式</p>
                    <ul class="lst-kix_a11rc3w9rvjt-0 start">
                      <li>较小的视图上全宽显示</li>
                      <li>较大的视图上居中对齐</li>
                    </ul>
                    <p>指示器</p>
                    <ul class="lst-kix_c8y2s0clxovm-0 start">
                      <li>高度：2dp</li>
                      <li>颜色：#fff 或强调色</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_specs1.png"/>
                      </div>
                      <figcaption>
                        <p>移动设备上的固定选项卡，仅文本，纵向</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_specs3.png"/>
                      </div>
                      <figcaption>
                        <p>移动设备上的固定选项卡，仅文本，纵向</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>仅含文本的选项卡</strong></p>
                    <p>文本</p>
                    <ul class="lst-kix_sh8gdszdugvh-0 start">
                      <li>14sp Roboto Medium</li>
                      <li>12sp 产生换行时，最多可以有两行</li>
                      <li>全部使用大写文本</li>
                      <li>垂直水平居中</li>
                      <li>激活状态颜色：#fff 或强调色</li>
                      <li>未聚焦的选项卡颜色：#fff 70%</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_specs5.png"/>
                      </div>
                      <figcaption>
                        <p>移动设备上横屏时，选项卡左对齐的示例</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_specs4.png"/>
                      </div>
                      <figcaption>
                        <p>移动设备上横屏时，选项卡居中对齐的示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p><strong>含图标和文本的选项卡</strong></p>
                    <p>高度</p>
                    <ul class="lst-kix_rht9x738lfdm-0">
                      <li>72dp</li>
                    </ul>
                    <p>图标</p>
                    <ul class="lst-kix_rht9x738lfdm-0">
                      <li>24 x 24dp</li>
                    </ul>
                    <p>对齐方式</p>
                    <ul class="lst-kix_x2mt2m3qtwkk-0 start">
                      <li>文本和图标在选项卡中垂直居中对齐</li>
                    </ul>
                    <p>边距</p>
                    <ul class="lst-kix_x2mt2m3qtwkk-0">
                      <li>图标和文本之间 10dp</li>
                      <li>文本下方 16dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_specs7.png"/>
                      </div>
                      <figcaption>
                        <p>移动设备上的固定选项卡，含图标和文本</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_specs8.png"/>
                      </div>
                      <figcaption>
                        <p>移动设备上的固定选项卡，含图标和文本</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p><strong>仅含图标的选项卡</strong></p>
                    <p>高度</p>
                    <ul class="lst-kix_rht9x738lfdm-0">
                      <li>48dp</li>
                    </ul>
                    <p>图标</p>
                    <ul class="lst-kix_rht9x738lfdm-0">
                      <li>24 x 24dp</li>
                    </ul>
                    <p>对齐方式</p>
                    <ul class="lst-kix_x2mt2m3qtwkk-0">
                      <li>图标在选项卡中垂直居中对齐</li>
                    </ul>
                    <p>边距</p>
                    <ul class="lst-kix_cftr3a9z9i1a-0 start">
                      <li>图标下方 12dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_specs9.png"/>
                      </div>
                      <figcaption>
                        <p>移动设备上的固定选项卡，仅含图标</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_specs10.png"/>
                      </div>
                      <figcaption>
                        <p>移动设备上的固定选项卡，仅含图标</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>可滚动选项卡</h1>
                    <p>最左侧的选项卡内容和关键线对齐。在横屏和竖屏时，对齐的关键线会不同。</p>
                    <p>每一个选项卡的宽度都是单独计算的。</p>
                    <p>最小宽度和最大宽度（包含边距）</p>
                    <ul class="lst-kix_9r6hyo3ljvwr-0 start">
                      <li>最大宽度（以较小者为准）：264dp 或（视图宽度减去 56dp）</li>
                      <li>最小宽度：较大的视图上为 160dp，较小的视图上为 72dp</li>
                    </ul>
                    <p>高度</p>
                    <ul class="lst-kix_rht9x738lfdm-0">
                      <li>48dp</li>
                    </ul>
                    <p>边距</p>
                    <ul class="lst-kix_1s0kchnl90vb-0 start">
                      <li>文本左右 12dp</li>
                      <li>单行选项卡文本底部 20dp，双行选项卡文本底部 12dp</li>
                    </ul>
                    <p>指示器</p>
                    <ul class="lst-kix_f87fajsq8a4l-0 start">
                      <li>高度：2dp</li>
                      <li>颜色：#fff 或强调色</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_specs11.png"/>
                      </div>
                      <figcaption>
                        <p>可滚动选项卡</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_specs12.png"/>
                      </div>
                      <figcaption>
                        <p>避免过长的选项卡标签，如此处所示。可滚动选项卡的最大宽度包含了换行的文本。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>文本</p>
                    <ul class="lst-kix_z9d6u7phjm2-0 start">
                      <li>14sp Roboto Medium</li>
                      <li>12sp 当产生换行时，最多只能有两行</li>
                      <li>全部使用大写文本</li>
                      <li>垂直居中对齐</li>
                      <li>激活的文本颜色：#fff 或强调色</li>
                      <li>未聚焦的选项卡文本颜色：#fff 70%</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_specs6.png"/>
                      </div>
                      <figcaption>
                        <p>避免过长的选项卡标签，如此处所示。在移动端横屏模式下，这些最大宽度的选项卡和左侧的关键线对齐。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>桌面端</h1>
                    <p>最小宽度和最大宽度（包含边距）</p>
                    <ul class="lst-kix_y40mme98e40j-0 start">
                      <li>最大宽度（以较小者为准）：264dp 或（视图宽度减去 56dp）</li>
                      <li>最小宽度：在较大的视图上为 160dp，较小的视图上为 72dp</li>
                    </ul>
                    <p>高度</p>
                    <ul class="lst-kix_rht9x738lfdm-0">
                      <li>48dp</li>
                    </ul>
                    <p>对齐方式</p>
                    <ul class="lst-kix_omoucouc58m7-0 start">
                      <li>居中对齐或和左侧关键线对齐</li>
                    </ul>
                    <p>文本</p>
                    <ul class="lst-kix_qqtls8nuy2at-0 start">
                      <li>13sp Roboto Medium</li>
                      <li>全部使用大写文本</li>
                      <li>垂直居中对齐</li>
                      <li>产生换行时，最多只能有两行</li>
                      <li>激活状态颜色：#fff 或强调色</li>
                      <li>未聚焦的选项卡文本颜色：#fff 70%</li>
                    </ul>
                    <p>边距</p>
                    <ul class="lst-kix_bu1sz04w0948-0 start">
                      <li>文本左右 24dp</li>
                      <li>单行选项卡文本底部 20dp，双行选项卡文本底部 12dp</li>
                      <li>第一个选项卡文本左侧边距：80dp</li>
                    </ul>
                    <p>指示器</p>
                    <ul class="lst-kix_f87fajsq8a4l-0">
                      <li>高度：2dp</li>
                      <li>颜色：#fff 或强调色</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_specs13.png"/>
                      </div>
                      <figcaption>
                        <p>桌面端的选项卡</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>触摸选项卡的动画</h1>
                    <p>注意：此组件的实现可能因平台而异。通过使用标准平台实现，您将收到任何相关的进一步改进。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/tabs/components_tabs_tabtouchtarget.webm" type="video/webm">
                            <source src="../static/media/components/tabs/components_tabs_tabtouchtarget.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>触摸选项卡时的动画。</p>
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