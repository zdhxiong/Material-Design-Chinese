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
                <p>选项卡显示为其关联内容上方的单个行元素。选项卡标签应简明扼要地描述其中的内容。</p>
                <p>因为滑动手势用于切换选项卡，所以不要在选项卡的内容中包含支持滑动手势的控件，以免手势产生冲突。</p>
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
                        <p>文本颜色和选项指示器颜色相同。</p>
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
                        <p>带分页的选项卡滚动后</p>
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
                        <p>The tabs switch between equally important facets of store content.</p>
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
                        <p>The tabs switch between destinations of varied importance within the store.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Tab characteristics</h1>
                    <p>Tabs control the display of content in a consistent location. </p>
                    <p>Formatting specifications:</p>
                    <ul class="lst-kix_kuwhumxtki7d-0 start">
                      <li>Present tabs as a single row. Wrap tab labels to a second line if needed, and then truncate.</li>
                      <li>Do not include a set of tabbed content within a tab.</li>
                      <li>Highlight the tab corresponding to the visible content.</li>
                      <li>Group tabs together hierarchically. Connect a group of tabs with its content.</li>
                      <li>Keep tabs adjacent to their content to maintain the relationship between the two.</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_example5.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>Tabs are presented as a single row.</p>
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
                        <p>Tabs are not presented as a single column.</p>
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
                        <p>Use a content hierarchy such that tabs relate to the currently displayed content.</p>
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
                        <p>Tabs should not be nested.</p>
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
            Content
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
                  <div class="module"><p>Content presented in tabs can vary widely, even between tabs. For example, tabs showing different years of an artist’s portfolio or tabs containing different types of settings.</p>
                    <p>All content within a set of tabs should be related under a larger organizing principle (for example, Settings or Directions), with each tab’s content mutually exclusive of the others'.</p>
                    <p>Tab labels should provide meaningful distinctions that logically organize associated content.</p>
                    <p>Tab labels may be either all icons or all text. When choosing a text label, use short titles. </p>
                    <p>Avoid the need for cross-tab comparison of content. Significant cross-tab comparison may indicate the content would benefit from a different organization or presentation that places the content closer together.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_content1.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>A long label exceeding the maximum width of a tab may wrap to a second line before being truncated.</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_content3.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>Don't resize single-line labels. If labels are too long, wrap text across two lines or use scrollable tabs</p>
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
                        <p>Wrap labels before truncating them. Truncating labels too early can impede comprehension.</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_content4.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>Do not combine text labels with icons. Use either all text labels or all icon labels.</p>
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
            Types of tabs
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>Depending on the platform and the context of use, tabbed content can be presented as either fixed tabs or scrollable tabs.</p>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Fixed tabs</h1>
                    <p>Fixed tabs display all tabs concurrently and are best used with content that benefits from quick pivots between tabs in fixed positions, such as switching transportation methods for directions in Google Maps.</p>
                    <p>Fixed tabs have equal width, calculated either as the view width divided by the number of tabs, or based on the widest tab label. To navigate between fixed tabs, touch the tab or swipe the content area left or right.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_typesoftabs_mobile1.png"/>
                      </div>
                      <figcaption>
                        <p>Fixed tabs on mobile</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_typesoftabs_mobile2.png"/>
                      </div>
                      <figcaption>
                        <p>Fixed tabs on mobile</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h1>Scrollable tabs</h1>
                    <p>Scrollable tabs display a subset of tabs at any given moment. They can contain longer tab labels and a larger number of tabs than fixed tabs. Scrollable tabs are best used for browsing contexts in touch interfaces when users don’t need to directly compare the tab labels.</p>
                    <p>To navigate between scrollable tabs, touch the tab or swipe the content area left or right. To scroll the tabs without navigating, swipe the tabs left or right.</p>
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
                        <p>Scrollable tabs on mobile</p>
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
                        <p>Examples of scrollable tabs </p>
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
                  <div class="module"><h1>Fixed tabs</h1>
                    <p>The width of each tab can be calculated by taking the width of the view and dividing it by the number of tabs. Alternatively, make all tabs the width of the largest tab.</p>
                    <p>If the margin between the tab edge and view edge is 16dp or less, use full-width tabs instead of centered tabs.</p>
                    <p>Width minimum and maximum (inclusive of padding)</p>
                    <ul class="lst-kix_aw6kldsmp1d3-0 start">
                      <li>Maximum: 264dp</li>
                      <li>Minimum: 160dp for larger views, 72 dp for smaller views</li>
                    </ul>
                    <p>Height</p>
                    <ul class="lst-kix_rht9x738lfdm-0 start">
                      <li>48dp</li>
                    </ul>
                    <p>Padding</p>
                    <ul class="lst-kix_mdnkpyh5cuin-0 start">
                      <li>12dp left and right of text</li>
                      <li>20dp from bottom for a single line of text, 12dp from bottom for two lines of text</li>
                    </ul>
                    <p>Alignment</p>
                    <ul class="lst-kix_a11rc3w9rvjt-0 start">
                      <li>Full-width for smaller views</li>
                      <li>Centered for larger views</li>
                    </ul>
                    <p>Indicator</p>
                    <ul class="lst-kix_c8y2s0clxovm-0 start">
                      <li>Height: 2dp</li>
                      <li>Color: #fff or accent color</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_specs1.png"/>
                      </div>
                      <figcaption>
                        <p>Fixed tabs on mobile, text only, portrait orientation</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_specs3.png"/>
                      </div>
                      <figcaption>
                        <p>Mobile portrait example of fixed tabs, text only</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Tabs with text only</strong></p>
                    <p>Text</p>
                    <ul class="lst-kix_sh8gdszdugvh-0 start">
                      <li>14sp Roboto Medium</li>
                      <li>12sp when wrapped across a maximum of two lines</li>
                      <li>All caps</li>
                      <li>Horizontally and vertically centered</li>
                      <li>Active color: #fff or accent color</li>
                      <li>Unfocused tab color: #fff 70%</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_specs5.png"/>
                      </div>
                      <figcaption>
                        <p>Mobile landscape example of same tabs aligned with left keyline</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_specs4.png"/>
                      </div>
                      <figcaption>
                        <p>Mobile landscape example of same tabs centered</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p><strong>Tabs with icons and text</strong></p>
                    <p>Height</p>
                    <ul class="lst-kix_rht9x738lfdm-0">
                      <li>72dp</li>
                    </ul>
                    <p>Icon</p>
                    <ul class="lst-kix_rht9x738lfdm-0">
                      <li>24 x 24dp</li>
                    </ul>
                    <p>Content alignment</p>
                    <ul class="lst-kix_x2mt2m3qtwkk-0 start">
                      <li>Text and icon are centered horizontally in the tab</li>
                    </ul>
                    <p>Padding</p>
                    <ul class="lst-kix_x2mt2m3qtwkk-0">
                      <li>10dp between icon and text</li>
                      <li>16dp under text</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_specs7.png"/>
                      </div>
                      <figcaption>
                        <p>Fixed tabs on mobile, icons and text</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_specs8.png"/>
                      </div>
                      <figcaption>
                        <p>Fixed tabs on mobile, icons and text</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p><strong>Tabs with icons only</strong></p>
                    <p>Height</p>
                    <ul class="lst-kix_rht9x738lfdm-0">
                      <li>48dp</li>
                    </ul>
                    <p>Icon</p>
                    <ul class="lst-kix_rht9x738lfdm-0">
                      <li>24 x 24dp</li>
                    </ul>
                    <p>Content alignment</p>
                    <ul class="lst-kix_x2mt2m3qtwkk-0">
                      <li>Icon is centered horizontally and vertically in the tab</li>
                    </ul>
                    <p>Padding</p>
                    <ul class="lst-kix_cftr3a9z9i1a-0 start">
                      <li>12dp under icon</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_specs9.png"/>
                      </div>
                      <figcaption>
                        <p>Fixed tabs on mobile, icons only</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_specs10.png"/>
                      </div>
                      <figcaption>
                        <p>Fixed tabs on mobile, icons only</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Scrollable tabs</h1>
                    <p>The left-most tab content aligns with the keyline. Alignment varies between landscape and portrait to match the different keylines.</p>
                    <p>The width of each tab is independently calculated.</p>
                    <p> Width minimum and maximum (inclusive of padding)</p>
                    <ul class="lst-kix_9r6hyo3ljvwr-0 start">
                      <li>Maximum (whichever fits and is smaller): 264dp or (the value of view size minus 56dp)</li>
                      <li>Minimum: 160dp for larger views, 72 dp for smaller views</li>
                    </ul>
                    <p>Height</p>
                    <ul class="lst-kix_rht9x738lfdm-0">
                      <li>48dp</li>
                    </ul>
                    <p>Padding</p>
                    <ul class="lst-kix_1s0kchnl90vb-0 start">
                      <li>12dp left and right of text</li>
                      <li>20dp from bottom for a single line of text, 12dp from bottom for two lines of text</li>
                    </ul>
                    <p>Indicator</p>
                    <ul class="lst-kix_f87fajsq8a4l-0 start">
                      <li>Height: 2dp</li>
                      <li>Color: #fff or accent color</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_specs11.png"/>
                      </div>
                      <figcaption>
                        <p>Scrollable tab</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_specs12.png"/>
                      </div>
                      <figcaption>
                        <p>Extremely long tab labels, as shown here, should be avoided. This max-width scrollable tab contains wrapped text. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Text</p>
                    <ul class="lst-kix_z9d6u7phjm2-0 start">
                      <li>14sp Roboto Medium</li>
                      <li>12sp when wrapped across a maximum of two lines</li>
                      <li>All caps</li>
                      <li>Vertically and horizontally centered</li>
                      <li>Active color: #fff or accent color</li>
                      <li>Unfocused tab color: #fff 70%</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_specs6.png"/>
                      </div>
                      <figcaption>
                        <p>Extremely long tab labels, as shown here, should be avoided. These max-width tabs, depicted in landscape mode on mobile, are aligned with the left keyline.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Desktop</h1>
                    <p>Width minimum and maximum (inclusive of padding)</p>
                    <ul class="lst-kix_y40mme98e40j-0 start">
                      <li>Maximum (whichever fits and is smaller): 264dp or (the value of view size minus 56dp)</li>
                      <li>Minimum: 160dp for larger views, 72 dp for smaller views</li>
                    </ul>
                    <p>Height</p>
                    <ul class="lst-kix_rht9x738lfdm-0">
                      <li>48dp</li>
                    </ul>
                    <p>Alignment</p>
                    <ul class="lst-kix_omoucouc58m7-0 start">
                      <li>Centered or aligned with left keyline</li>
                    </ul>
                    <p>Text</p>
                    <ul class="lst-kix_qqtls8nuy2at-0 start">
                      <li>13sp Roboto Medium</li>
                      <li>All caps</li>
                      <li>Horizontally and vertically centered</li>
                      <li>Wraps across a maximum of two lines</li>
                      <li>Active color: #fff or accent color</li>
                      <li>Unfocused tab color: #fff 70%</li>
                    </ul>
                    <p>Padding</p>
                    <ul class="lst-kix_bu1sz04w0948-0 start">
                      <li>24dp left and right of text</li>
                      <li>20dp from bottom for a single line of text, 12dp from bottom for two lines of text</li>
                      <li>First tab text left padding: 80dp</li>
                    </ul>
                    <p>Indicator</p>
                    <ul class="lst-kix_f87fajsq8a4l-0">
                      <li>Height: 2dp</li>
                      <li>Color: #fff or accent color</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tabs/components_tabs_usage_specs13.png"/>
                      </div>
                      <figcaption>
                        <p>Desktop tabs</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Tab touch target animation</h1>
                    <p>Note: Implementations of this component may vary by platform. By using standard platform implementations, you will receive related future improvements.</p>
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
                        <p>Animation of tab touch target.</p>
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