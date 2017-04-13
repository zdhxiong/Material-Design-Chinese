<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro"></div>

      <nav class="chapter-toc">
        <h1>目录</h1>
        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="structure.html#structure-ui-regions" data-qp-ui-data-id="qp:1">UI 区域</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="structure.html#structure-toolbars" data-qp-ui-data-id="qp:2">工具栏</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="structure.html#structure-app-bar" data-qp-ui-data-id="qp:3">应用栏</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="structure.html#structure-system-bars" data-qp-ui-data-id="qp:4">系统栏</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="structure.html#structure-side-nav" data-qp-ui-data-id="qp:5">侧边栏</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="structure.html#structure-whiteframes" data-qp-ui-data-id="qp:6">线框图</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="structure-ui-regions" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            UI 区域
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div><p>为元素在 Z 轴空间的排列提供指导，以使其拥有正确的行为和阴影，见<a href="../material-design/environment.html">环境</a>和<a href="../material-design/elevation-shadows.html">海拔高度和阴影</a>章节。</p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>手机端结构</h1>
                    <p>此结构中包含一个固定的应用栏和浮动操作按钮。可以添加一个可选的底栏，用于放置额外的功能或弹出操作。侧边栏会遮盖结构中的所有元素。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 63.1578947368%">
                          <img alt="" aria-describedby="ui-regions-figure-caption-1" src="<?php static_url('../static/media/layout/structure/layout_structure_regions_mobile.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="ui-regions-figure-caption-1">
                        <p>手机端结构</p>
                        <p>顶部从左到右：应用栏/主工具栏，内容区域（在应用栏/主工具栏下方），右侧导航<br>
                          底部：底栏</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>平板端结构</h1>
                    <p>此结构包含固定应用栏和浮动操作按钮。平板和手机的底栏中的元素可以合并到应用栏中。可以添加一个可选的底栏，用于放置额外的功能和弹出操作。侧边栏会覆盖结构中的所有元素。右侧导航可以临时显示，也可以永久固定显示。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 63.1578947368%">
                          <img alt="" aria-describedby="ui-regions-figure-caption-2" src="<?php static_url('../static/media/layout/structure/layout_structure_regions_tablet.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="ui-regions-figure-caption-2">
                        <p>平板端结构</p>
                        <p>顶部从左到右：侧边栏，应用栏/主工具栏，内容区域（在应用栏/主工具栏下方），右侧导航<br>
                          底部：底栏</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>桌面端结构</h1>
                    <p>桌面端结构包含一个固定的应用栏和一个浮动操作按钮。手机和平板的底栏可以合并到应用栏中。如果有可能，窗口控件也会被合并到应用栏中。</p>
                    <p>侧边导航菜单可以占据屏幕大小的整个高度（包括应用栏下方的），可以临时显示，也可以永久固定显示。侧边栏菜单和内容区域一样，都可以有自己的二级工具栏，用来放置选项卡、选项或次要操作。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 63.1578947368%">
                          <img alt="" aria-describedby="ui-regions-figure-caption-3" src="<?php static_url('../static/media/layout/structure/layout_structure_regions_desktop.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="ui-regions-figure-caption-3">
                        <p>桌面端结构</p>
                        <p>顶部从左到右：应用栏/主工具栏</p>
                        <p>第二行从左到右：工具栏、次要工具栏、工具栏</p>
                        <p>第三行从左到右：侧边栏、内容区域、右侧边栏</p>
                        <p>底部：浮动操作按钮</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>UI 区域</h1>
                    <p>定义水平或垂直的主分隔线。</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 71.1111111111%">
                          <img alt="" aria-describedby="ui-regions-figure-caption-4" src="<?php static_url('../static/media/layout/structure/layout_structure_regions_guidance1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="ui-regions-figure-caption-4">
                        <p>垂直分隔线</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 71.1111111111%">
                          <img alt="" aria-describedby="ui-regions-figure-caption-5" src="<?php static_url('../static/media/layout/structure/layout_structure_regions_guidance2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="ui-regions-figure-caption-5">
                        <p>水平分隔线</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>避免把界面分隔成太多区域，这样会导致布局呈现 L 形。相反，可以使用空白来描绘辅助区域。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 71.1111111111%">
                          <img alt="" aria-describedby="ui-regions-figure-caption-6" src="<?php static_url('../static/media/layout/structure/layout_structure_regions_guidance3.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="ui-regions-figure-caption-6">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>使用空白。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 71.1111111111%">
                          <img alt="" aria-describedby="ui-regions-figure-caption-7" src="<?php static_url('../static/media/layout/structure/layout_structure_regions_guidance4.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="ui-regions-figure-caption-7">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>避免创建太多区域。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>可以使用卡片和浮动操作按钮来打破区域的边界。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 71.1111111111%">
                          <img alt="" aria-describedby="ui-regions-figure-caption-8" src="<?php static_url('../static/media/layout/structure/layout_structure_regions_guidance5.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="ui-regions-figure-caption-8">
                        <p>卡片打破了边界</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 71.1111111111%">
                          <img alt="" aria-describedby="ui-regions-figure-caption-9" src="<?php static_url('../static/media/layout/structure/layout_structure_regions_guidance6.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="ui-regions-figure-caption-9">
                        <p>浮动操作按钮打破了边界</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>当需要特定行为、或需要比空格或分隔符更多的分隔来进行信息分组时，可以使用卡片来组织内容。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 71.1111111111%">
                          <img alt="" aria-describedby="ui-regions-figure-caption-10" src="<?php static_url('../static/media/layout/structure/layout_structure_regions_guidance7.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="ui-regions-figure-caption-10">
                        <p>卡片</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 71.1111111111%">
                          <img alt="" aria-describedby="ui-regions-figure-caption-11" src="<?php static_url('../static/media/layout/structure/layout_structure_regions_guidance8.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="ui-regions-figure-caption-11">
                        <p>卡片</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="structure-toolbars" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            工具栏
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
                    <p>工具栏有多种用途，可以以多种不同的方式使用。</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 20.5263157895%">
                          <img alt="" aria-describedby="toolbars-figure-caption-1" src="<?php static_url('../static/media/layout/structure/layout_structure_toolbars1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="toolbars-figure-caption-1">
                        <p>全宽，默认高度的应用栏</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 28.9473684211%">
                          <img alt="" aria-describedby="toolbars-figure-caption-2" src="<?php static_url('../static/media/layout/structure/layout_structure_toolbars2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="toolbars-figure-caption-2">
                        <p>全宽，扩展了高度的应用栏</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 29.0789473684%">
                          <img alt="" aria-describedby="toolbars-figure-caption-3" src="<?php static_url('../static/media/layout/structure/layout_structure_toolbars3.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="toolbars-figure-caption-3">
                        <p>多级层次结构中与列同宽的工具栏</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 29.0789473684%">
                        <img alt="" aria-describedby="toolbars-figure-caption-4" src="<?php static_url('../static/media/layout/structure/layout_structure_toolbars4.png'); ?>"/>
                      </div>
                      <figcaption id="toolbars-figure-caption-4">
                        <p>弹性工具栏和卡片工具栏</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 28.9473684211%">
                          <img alt="" aria-describedby="toolbars-figure-caption-5" src="<?php static_url('../static/media/layout/structure/layout_structure_toolbars5.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="toolbars-figure-caption-5">
                        <p>浮动工具栏</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 36.9736842105%">
                          <img alt="" aria-describedby="toolbars-figure-caption-6" src="<?php static_url('../static/media/layout/structure/layout_structure_toolbars6.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="toolbars-figure-caption-6">
                        <p>分离的调色板工具栏</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 39.4736842105%">
                          <img alt="" aria-describedby="toolbars-figure-caption-7" src="<?php static_url('../static/media/layout/structure/layout_structure_toolbars7.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="toolbars-figure-caption-7">
                        <p>底部工具栏，就像一块隔板，附着在键盘或其他底部组件的顶部。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 39.4736842105%">
                          <img alt="" aria-describedby="toolbars-figure-caption-8" src="<?php static_url('../static/media/layout/structure/layout_structure_toolbars8.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="toolbars-figure-caption-8">
                        <p>底部隔板工具栏</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="structure-app-bar" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            应用栏
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
                    <p>应用栏（以前称为 Android 中的操作栏）是一种特殊类型的工具栏，用于放置品牌、导航、搜索和操作。</p>
                    <p>应用栏左侧的导航图标可以是：</p>
                    <ul class="lst-kix_arqj2113mx70-0 start">
                      <li>打开导航栏的控件。</li>
                      <li>导航到层次结构中的上一层的返回箭头。</li>
                      <li>如果此屏幕不需要导航，则可以完全省略该图标。</li>
                    </ul>
                    <p>应用栏中的标题反映当前页面。它可以是应用标题、页面标题或页面筛选详情。</p>
                    <p>应用栏右侧的图标是与应用相关的操作。菜单图标可以打开弹出菜单，其中可以包含一些辅助操作，例如帮助、设置、反馈等。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 19.2105263158%">
                          <img alt="" aria-describedby="app-bar-figure-caption-1" src="<?php static_url('../static/media/layout/structure/layout_structure_appbar_structure1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="app-bar-figure-caption-1">
                        <p>应用栏结构</p>
                        <p>左侧：导航图标，标题，筛选图标<br>
                          右侧：操作和菜单图标</p>
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
                        <div class="frame " style="padding-top: 52.7777777778%">
                          <img alt="" aria-describedby="app-bar-figure-caption-2" src="<?php static_url('../static/media/layout/structure/layout_structure_appbar_structure2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="app-bar-figure-caption-2">
                        <p>亮色</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 52.7777777778%">
                          <img alt="" aria-describedby="app-bar-figure-caption-3" src="<?php static_url('../static/media/layout/structure/layout_structure_appbar_structure3.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="app-bar-figure-caption-3">
                        <p>暗色</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 52.7777777778%">
                          <img alt="" aria-describedby="app-bar-figure-caption-4" src="<?php static_url('../static/media/layout/structure/layout_structure_appbar_structure4.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="app-bar-figure-caption-4">
                        <p>彩色</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 52.7777777778%">
                          <img alt="" aria-describedby="app-bar-figure-caption-5" src="<?php static_url('../static/media/layout/structure/layout_structure_appbar_structure5.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="app-bar-figure-caption-5">
                        <p>透明</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>标题颜色</h1>
                    <p>在应用栏中，所有图标的颜色都应使用相同的颜色。</p>
                    <p>如果需要增加视觉层次，标题可以使用和图标不同的颜色。不同的标题颜色最适合在白色和黑色背景上都有足够对比度的背景上使用。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 52.7777777778%">
                          <img alt="" aria-describedby="app-bar-figure-caption-6" src="<?php static_url('../static/media/layout/structure/layout_structure_appbar_structure6.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="app-bar-figure-caption-6">
                        <p>单一颜色（默认）</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 52.7777777778%">
                          <img alt="" aria-describedby="app-bar-figure-caption-7" src="<?php static_url('../static/media/layout/structure/layout_structure_appbar_structure7.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="app-bar-figure-caption-7">
                        <p>不同的标题颜色</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>度量标准</h1>
                    <p><strong>默认高度：</strong></p>
                    <p>手机端横屏：48dp<br>
                      手机端竖屏：56dp<br>
                      平板端/桌面端：64dp</p>
                    <p>对于扩展的应用栏，高度等于默认高度加内容增量。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 84.4444444444%">
                          <img alt="" aria-describedby="app-bar-figure-caption-8" src="<?php static_url('../static/media/layout/structure/layout_structure_appbar_metrics1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="app-bar-figure-caption-8">
                        <p>应用栏高度：56dp<br>
                        应用栏左右内边距：16dp<br>
                        应用栏图标上、下、左边距：16dp<br>
                        应用栏标题左边距：72dp<br>
                        应用栏标题下边距：20dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 84.4444444444%">
                          <img alt="" aria-describedby="app-bar-figure-caption-9" src="<?php static_url('../static/media/layout/structure/layout_structure_appbar_metrics3.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="app-bar-figure-caption-9">
                        <p>为了视觉效果更突出，应用栏大幅地增加了高度</p>
                        <p>应用栏高度：128dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 84.4444444444%">
                          <img alt="" aria-describedby="app-bar-figure-caption-10" src="<?php static_url('../static/media/layout/structure/layout_structure_appbar_metrics5.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="app-bar-figure-caption-10">
                        <p>操作区域高度：56dp<br>
                        标题区域高度：80dp<br>
                        标题区域下边距：8dp<br>
                        描述区域高度：72dp<br>
                        描述区域下边距：16dp</p>
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
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 36.8421052632%">
                          <img alt="" aria-describedby="app-bar-figure-caption-11" src="<?php static_url('../static/media/layout/structure/layout_structure_appbar_metrics7.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="app-bar-figure-caption-11">
                        <p>增量的关键线被设置为应用栏的高度 64dp，应用栏高度决定了关键线增量。</p>
                        <p><br>
                          应用栏左右内边距：24dp<br>
                          应用栏图标上下边距：20dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 36.8421052632%">
                          <img alt="" aria-describedby="app-bar-figure-caption-12" src="<?php static_url('../static/media/layout/structure/layout_structure_appbar_metrics8.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="app-bar-figure-caption-12">
                        <p>扩展后的应用栏高度：128dp<br>
                        应用栏左右图标边距：24dp<br>
                        应用栏内容的左边距：80dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>密集型</strong></p>
                    <p>当键盘和鼠标为主要输入方式时，可以适当压缩尺寸，以适应更紧凑的布局。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 36.8421052632%">
                          <img alt="" aria-describedby="app-bar-figure-caption-13" src="<?php static_url('../static/media/layout/structure/layout_structure_appbar_metrics7_dense.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="app-bar-figure-caption-13">
                        <p><strong>桌面端的密集型应用栏</strong></p>
                        <p>应用栏高度：48dp<br>
                          应用栏左右图标边距：24<br>
                          应用栏内容的左边距：80dp<br>
                          图标的触摸目标高度：40dp</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 36.8421052632%">
                          <img alt="" aria-describedby="app-bar-figure-caption-14" src="<?php static_url('../static/media/layout/structure/layout_structure_appbar_metrics8_dense.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="app-bar-figure-caption-14">
                        <p><strong>密集型的扩展后的应用栏</strong></p>
                        <p>密集型的扩展后的应用栏高度：96dp<br>
                          应用栏左右图标边距：24dp<br>
                          应用栏内容的左边距：80dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>菜单</h1>
                    <p>菜单是一张始终会遮盖应用栏的临时卡片，而不会表现的像是应用栏的扩展。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 77.7777777778%">
                          <img alt="" aria-describedby="app-bar-figure-caption-15" src="<?php static_url('../static/media/layout/structure/layout_structure_appbar_menu1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="app-bar-figure-caption-15">
                        <p>应用栏示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 77.7777777778%">
                          <img alt="" aria-describedby="app-bar-figure-caption-16" src="<?php static_url('../static/media/layout/structure/layout_structure_appbar_menu2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="app-bar-figure-caption-16">
                        <p>应用栏中的菜单示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="structure-system-bars" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            系统栏
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
                    <h1>状态栏/窗口栏</h1>
                    <p>在 Android 上，状态栏包含通知图标和系统图标。在 Chrome 上，顶栏包含窗口控件：最小化、全屏、关闭。在 Chrome 应用中，顶栏可以消失，窗口控件会合并到应用栏。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 6.66666666667%">
                          <img alt="" aria-describedby="system-bars-figure-caption-1" src="<?php static_url('../static/media/layout/structure/layout_structure_system_status1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="system-bars-figure-caption-1">
                        <p>Android 状态栏</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 8.88888888889%">
                          <img alt="" aria-describedby="system-bars-figure-caption-2" src="<?php static_url('../static/media/layout/structure/layout_structure_system_status2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="system-bars-figure-caption-2">
                        <p>Chrome 窗口栏</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>度量标准：<br>
                    Android 状态栏高度：24dp<br>
                    Chrome 窗口栏高度：32dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 24.4444444444%">
                          <img alt="" aria-describedby="system-bars-figure-caption-3" src="<?php static_url('../static/media/layout/structure/layout_structure_system_status3.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="system-bars-figure-caption-3">
                        <p>Android 状态栏在应用栏上方</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 28.8888888889%">
                          <img alt="" aria-describedby="system-bars-figure-caption-4" src="<?php static_url('../static/media/layout/structure/layout_structure_system_status4.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="system-bars-figure-caption-4">
                        <p>Chrome 窗口栏在应用栏上方</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-module-figure col-3">
                  <div class="module"></div>
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 20.0%">
                          <img alt="" aria-describedby="system-bars-figure-caption-5" src="<?php static_url('../static/media/layout/structure/layout_structure_system_status5.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="system-bars-figure-caption-5">
                        <p>Chrome 窗口控件位于应用栏内</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module col-1">
                  <div class="module">
                    <h1>全屏</h1>
                    <p>有些内容在全屏模式下会有最佳体验，例如视频、游戏、书籍和幻灯片。全屏模式通过最大限度的减少控件对视频的视觉干扰 ，并防止用户意外地关闭应用，来增加用户与内容的互动。</p>
                    <p>全屏模式有以下几种类型：</p>
                    <ul class="lst-kix_1yiz4a21yri-0 start">
                      <li>Lean back 模式</li>
                      <li>沉浸模式</li>
                      <li>关灯模式</li>
                    </ul>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h2>Lean back 模式</h2>
                    <p>Lean back 模式最适合观看具有有限的屏幕交互的内容，例如视频。</p>
                    <p><strong>交互</strong>：触摸屏幕的任何地方会出现系统栏。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 47.3684210526%">
                          <img alt="" aria-describedby="system-bars-figure-caption-6" src="<?php static_url('../static/media/layout/structure/layout_structure_systembars_fullscreen1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="system-bars-figure-caption-6">
                        <p>触摸屏幕的任何地方会出现系统栏</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2>沉浸模式</h2>
                    <p>当用户需要和屏幕进行大量交互时，最适合使用沉浸模式，例如玩游戏或操作相册。你可以根据需要显示或隐藏应用控件和系统栏。</p>
                    <p><strong>交互</strong>：从屏幕任何一个边缘滑动，来显示系统栏。应用首次进入全屏模式时，会出现此滑动手势的说明。</p>
                    <p><strong>边缘滑动的例外</strong>：使用边缘滑动手势来执行操作的应用，在沉浸模式下触发滑动手势时，也应该显示系统栏。例如，一个绘图应用使用边缘滑动（例如画一条线）时，也应该半透明地显示系统栏几秒钟。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="system-bars-figure-caption-7" src="<?php static_url('../static/media/layout/structure/layout_structure_systembars_fullscreen2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="system-bars-figure-caption-7">
                        <p>从屏幕的任何边缘滑动，会使隐藏的系统栏重新显示。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" src="<?php static_url('../static/media/layout/structure/layout_structure_systembars_fullscreen3.png'); ?>"/>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h2>关灯模式</h2>
                    <p>在关灯模式下，操作栏和状态栏不会消失，且会在几秒钟不活动后变为不可用。导航栏仍然可用，并会响应触摸操作，但显示为灰色。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 49.7222222222%">
                          <video controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/layout/structure/layout_structure_system_lightsout.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/layout/structure/layout_structure_system_lightsout.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <p></p>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>暗色状态栏</h1>
                    <p>默认情况下，状态栏或窗口栏的颜色是在应用栏上添加一层暗色的遮罩。但也可以使用布局中其他元素的颜色，或者半透明。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 52.7777777778%">
                          <img alt="" aria-describedby="system-bars-figure-caption-8" src="<?php static_url('../static/media/layout/structure/layout_structure_system_color1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="system-bars-figure-caption-8">
                        <p>暗色状态栏的颜色是基于从内容中获取的样本得到的</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 52.7777777778%">
                          <img alt="" aria-describedby="system-bars-figure-caption-9" src="<?php static_url('../static/media/layout/structure/layout_structure_system_color2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="system-bars-figure-caption-9">
                        <p>半透明状态栏，20% 黑色 #000000</p>
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
                        <div class="frame " style="padding-top: 52.7777777778%">
                          <img alt="" aria-describedby="system-bars-figure-caption-10" src="<?php static_url('../static/media/layout/structure/layout_structure_system_color3.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="system-bars-figure-caption-10">
                        <p>暗色状态栏</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 52.7777777778%">
                          <img alt="" aria-describedby="system-bars-figure-caption-11" src="<?php static_url('../static/media/layout/structure/layout_structure_system_color4.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="system-bars-figure-caption-11">
                        <p>状态栏颜色色调比应用栏的颜色更深</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>亮色状态栏</h1>
                    <p>使用暗色图标的亮色状态栏，可以更好的和亮色内容协调，可以用来代替暗色状态栏。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 53.3333333333%">
                          <img alt="" aria-describedby="system-bars-figure-caption-12" src="<?php static_url('../static/media/layout/structure/layout_structure_system_color5.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="system-bars-figure-caption-12">
                        <p>亮色状态栏的颜色是基于从内容中获取的样本得到的</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 53.3333333333%">
                          <img alt="" aria-describedby="system-bars-figure-caption-13" src="<?php static_url('../static/media/layout/structure/layout_structure_system_color6.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="system-bars-figure-caption-13">
                        <p>半透明的亮色状态栏，70% 白色 #FFFFFF</p>
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
                        <div class="frame " style="padding-top: 53.3333333333%">
                          <img alt="" aria-describedby="system-bars-figure-caption-14" src="<?php static_url('../static/media/layout/structure/layout_structure_system_color7.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="system-bars-figure-caption-14">
                        <p>亮色状态栏，默认背景为 #E0E0E0</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 53.3333333333%">
                          <img alt="" aria-describedby="system-bars-figure-caption-15" src="<?php static_url('../static/media/layout/structure/layout_structure_system_color8.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="system-bars-figure-caption-15">
                        <p>亮色状态栏的颜色色调比亮色应用栏的颜色更深</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Android 导航栏</h1>
                    <p>Android 中的导航栏包含几个设备导航控件：后退键、Home 键、任务键。对于 Android 2.3 或更早的系统还会出现菜单键。</p>
                    <p>高度：48dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 13.3333333333%">
                          <img alt="" aria-describedby="system-bars-figure-caption-16" src="<?php static_url('../static/media/layout/structure/layout_structure_system_android1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="system-bars-figure-caption-16">
                        <p>暗色</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 13.3333333333%">
                          <img alt="" aria-describedby="system-bars-figure-caption-17" src="<?php static_url('../static/media/layout/structure/layout_structure_system_android2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="system-bars-figure-caption-17">
                        <p>亮色</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>颜色变化</h1>
                    <p>导航栏可以是不透明、半透明或全透明的。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 33.3333333333%">
                          <img alt="" aria-describedby="system-bars-figure-caption-18" src="<?php static_url('../static/media/layout/structure/layout_structure_system_android3.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="system-bars-figure-caption-18">
                        <p>半透明导航栏</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 33.3333333333%">
                          <img alt="" aria-describedby="system-bars-figure-caption-19" src="<?php static_url('../static/media/layout/structure/layout_structure_system_android4.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="system-bars-figure-caption-19">
                        <p>复杂图片上的半透明导航栏</p>
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
                        <div class="frame " style="padding-top: 33.3333333333%">
                          <img alt="" aria-describedby="system-bars-figure-caption-20" src="<?php static_url('../static/media/layout/structure/layout_structure_system_android5.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="system-bars-figure-caption-20">
                        <p>全透明导航栏</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 33.3333333333%">
                          <img alt="" aria-describedby="system-bars-figure-caption-21" src="<?php static_url('../static/media/layout/structure/layout_structure_system_android6.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="system-bars-figure-caption-21">
                        <p>纯色图片上的透明导航栏</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Chrome OS 的底架</h1>
                    <p>Chrome OS 上的底架包含应用启动器、应用图标和系统设置。</p>
                    <p>高度：56dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 23.0263157895%">
                          <img alt="" aria-describedby="system-bars-figure-caption-22" src="<?php static_url('../static/media/layout/structure/layout_structure_system_chrome.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="system-bars-figure-caption-22">
                        <p>Chrome OS 的底架示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="structure-side-nav" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:5">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:5">
            侧边栏
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
                    <p>如果存在侧边栏，侧边栏可以永久固定显示，或者作为遮盖层临时显示。侧边栏可以位于屏幕左侧或右侧。</p>
                    <p>理想状态下，左侧侧边栏应该是与导航相关的、或是与用户身份相关的内容。右侧侧边栏应该是与页面中的主内容相关的次要信息。</p>
                    <p>参见<a href="../patterns/navigation-drawer.html">抽屉式导航</a>。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="side-nav-figure-caption-1" src="<?php static_url('../static/media/layout/structure/layout_structure_sidenav1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="side-nav-figure-caption-1">
                        <p>手机屏幕</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="side-nav-figure-caption-2" src="<?php static_url('../static/media/layout/structure/layout_structure_sidenav2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="side-nav-figure-caption-2">
                        <p>侧边栏菜单</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>结构</h1>
                    <p>侧边导航栏可以永久固定显示，或是作为覆盖层临时显示。临时显示的抽屉栏会覆盖屏幕内容；而固定的导航面板则位于屏幕内容的旁边或下面。</p>
                    <p>屏幕尺寸可以决定面板是永久固定显示还是临时覆盖显示。有足够的空间时，面板可以固定显示，且内容需要及时做出调整。空间不足时，面板必须作为覆盖层显示。</p>
                    <h2><strong><strong>度量标准</strong></strong></h2>
                    <p><strong>手机端</strong>:</p>
                    <p>宽度 = <em>屏幕宽度</em> − 56 dp</p>
                    <p>最大宽度：320dp</p>
                    <p>最大宽度仅在使用左侧导航时才适用。当使用右侧导航时，面板可以覆盖整个屏幕的宽度。</p>
                    <p><strong>桌面端</strong>：左侧导航的最大宽度是 400dp。右侧导航可以根据内容变化。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="side-nav-figure-caption-3" src="<?php static_url('../static/media/layout/structure/layout_structure_sidenav_structure1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="side-nav-figure-caption-3">
                        <p>手机端的左侧导航</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 492px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 100.0%">
                          <video aria-describedby="side-nav-figure-caption-4" controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/layout/structure/050407_Sidenav_02_xhdpi_002.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/layout/structure/050407_Sidenav_02_xhdpi_002.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="side-nav-figure-caption-4">
                        <p>手机端的右侧导航</p>
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
                        <div class="frame " style="padding-top: 66.0526315789%">
                          <img alt="" aria-describedby="side-nav-figure-caption-5" src="<?php static_url('../static/media/layout/structure/layout_structure_sidenav_structure3.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="side-nav-figure-caption-5">
                        <p>桌面端的左侧导航</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 66.0526315789%">
                          <img alt="" aria-describedby="side-nav-figure-caption-6" src="<?php static_url('../static/media/layout/structure/layout_structure_sidenav_structure4.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="side-nav-figure-caption-6">
                        <p>桌面端的右侧导航</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="structure-whiteframes" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:6">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:6">
            线框图
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
                    <p>线框图使用统一的界面、图层、阴影来提供多样化的布局结构。</p>
                    <p>下载资源和更多信息，参见<a href="../resources/layout-templates.html#layout-templates-whiteframes">资源</a>。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 66.6666666667%">
                          <img alt="" aria-describedby="whiteframes-figure-caption-1" src="<?php static_url('../static/media/layout/structure/layout-structure-whiteframe_bigtop_large_xhdpi.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="whiteframes-figure-caption-1">
                        <p>展开和折叠的卡片内容</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 66.6666666667%">
                          <img alt="" aria-describedby="whiteframes-figure-caption-2" src="<?php static_url('../static/media/layout/structure/layout-structure-whiteframe_calendar_large_xhdpi.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="whiteframes-figure-caption-2">
                        <p>覆盖内容的详细信息，专注于桌面应用栏</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 66.6666666667%">
                          <img alt="" aria-describedby="whiteframes-figure-caption-3" src="<?php static_url('../static/media/layout/structure/layout-structure-whiteframe_gallery_large_xhdpi.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="whiteframes-figure-caption-3">
                        <p>桌面端的左侧导航和单向流</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 66.6666666667%">
                          <img alt="" aria-describedby="whiteframes-figure-caption-4" src="<?php static_url('../static/media/layout/structure/layout-structure-whiteframe_mail_large_xhdpi.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="whiteframes-figure-caption-4">
                        <p>资源列表</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 66.6666666667%">
                          <img alt="" aria-describedby="whiteframes-figure-caption-5" src="<?php static_url('../static/media/layout/structure/layout-structure-whiteframe_maps_large_xhdpi.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="whiteframes-figure-caption-5">
                        <p>内嵌搜索框和卡片式搜索结果的全屏背景图片</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 66.6666666667%">
                          <img alt="" aria-describedby="whiteframes-figure-caption-6" src="<?php static_url('../static/media/layout/structure/layout-structure-whiteframe_music_large_xhdpi.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="whiteframes-figure-caption-6">
                        <p>可展开的底部抽屉</p>
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