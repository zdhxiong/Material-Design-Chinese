<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    
    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <p>小部件显示一个供快速浏览的视图，主要用于显示应用最重要的数据和功能。</p>
        </div>
      </div>
      
      <nav class="chapter-toc">
        <h1>目录</h1>
        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="widgets.html#widgets-usage" data-qp-ui-data-id="qp:1">用法</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="widgets.html#widgets-types-of-widgets" data-qp-ui-data-id="qp:2">小部件类型</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="widgets.html#widgets-behavior" data-qp-ui-data-id="qp:3">行为</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="widgets-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
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
              <p>主屏幕小部件以统一的形式显示应用的新内容和有趣的内容。它们链接到应用内部的更丰富的细节。</p>
              <p>用户可以移动小部件，如果支持的话，可以在主屏幕上调整小部件的大小。</p>
              <div class="modulettes">
                <a class="modulette container android" href="https://www.google.com/url?q=https://developer.android.com/guide/topics/appwidgets/index.html&amp;sa=D&amp;ust=1481817989213000&amp;usg=AFQjCNEYogPWPMXxugx8F_BKM54SqwxaRA" target="_blank">
                  <img alt="" class="icon callout-icon" src="<?php static_url('../static/images/callouts/android.svg'); ?>">
                  <div class="info">
                    <div class="title">应用小部件</div>
                    <span class="subtitle">如何发布一个应用小部件</span>
                  </div>
                  </img>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div id="widgets-types-of-widgets" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            小部件类型
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module"><h1>信息小部件</h1>
                    <p>信息小部件向用户显示一些重要的元素，并跟踪该信息如何随着时间变化，例如天气、或运动成绩。点击小部件将启动相关的应用，并显示详细视图。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/widgets/components_widgets_types_information.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>一个信息小部件</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>集合小部件</h1>
                    <p>集合小部件显示同一类型的多个元素，例如来自新闻应用的文章集合。它们专注于两种交互：</p>
                    <ul class="lst-kix_kxygxuszxhje-0 start">
                      <li>浏览集合</li>
                      <li>打开一个元素的详细视图</li>
                    </ul>
                    <p>集合小部件可以垂直滚动</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/widgets/components_widgets_types_collection.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>集合小部件</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/widgets/components_widgets_types_collection_list.png'); ?>"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h3><strong>控制小部件</strong></h3>
                    <p>控制小部件显示常见功能。这些功能可以从主屏幕触发，而不用打开对应的应用。例如，音乐应用的小部件允许用户在音乐应用外部播放、暂停或跳过音乐曲目。</p>
                    <p>控制小部件可能可以进入详细视图，也可能不能进入详细视图。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/widgets/components_widgets_types_control.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>一个控制小部件</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h3><strong>混合小部件</strong></h3>
                    <p>许多小部件混合了以上多种不同类型的元素。将你的小部件居中放在这些类型的其中一个中，并根据需要添加其他元素。</p>
                    <p>例如，音乐播放小部件把一个控制小部件和一个信息小部件混合在一起。使用户可以知道当前正在播放哪一个音轨。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/widgets/components_widgets_types_hybrid.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>一个混合小部件</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="widgets-behavior" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
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
              <h1>导航</h1>
              <p>你的小部件应提供指向应用常用区域的导航链接，其中包括：</p>
              <ul class="lst-kix_myvcxmhmnj8v-0 start">
                <li>允许用户创建新内容，例如新建文本或消息</li>
                <li>允许访问应用的顶层</li>
              </ul>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module"><h1>调整小部件大小</h1>
                    <p>用户可以调整小部件的高度和宽度。这可以使用户调整主屏幕上的小部件的布局。</p>
                    <p>你的应用可以同时支持横向纵向调整大小，或只支持横向、或只支持纵向调整大小。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/widgets/components_widgets_behavior_01.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>长按之后可调整大小的小部件将进入调整大小模式。用户可以拖动手柄或小部件角度来设置所需的大小。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module col-1">
                  <div class="module">
                    <h2>可滚动小部件</h2>
                    <p>列表或基于网格的集合小部件通常会展开或收缩垂直滚动区域。无论小部件大小，用户都可以滚动视图内的所有元素。</p>
                    <p>确定应该显示多少应用信息。对于较小的小部件，只显示信息要点，并在展开小部件时添加更多相关信息。</p>
                  </div>
                </section>
                <section class="module col-1">
                  <div class="module">
                    <h2>不可滚动小部件</h2>
                    <p>信息小部件不可滚动，所有内容和布局都必须根据用户设置的小部件的大小动态匹配。</p>
                  </div>
                </section>
                <section class="module col-1">
                  <div class="module">
                    <h2>响应式小部件</h2>
                    <p>小部件应该适应不同设备的空间要求，包括单元格数量，大小和空间变化。</p>
                  </div>
                </section>
              </div>
              <h1>配置小部件</h1>
              <p>Android 小部件放置在主面板上时会显示其配置项。</p>
              <p>配置的最佳实践：</p>
              <ul class="lst-kix_50zxfsiuzaou-0 start">
                <li>保持配置的轻量，不要超过 2-3 个配置元素</li>
                <li>当前的配置选择使用对话框，不要用全屏，以保留用户的上下文。</li>
              </ul>
              <p>一旦设置完，小部件通常不会再显示 “设置” 或 “配置” 按钮。</p>
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