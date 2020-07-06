<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>网格列表是一个标准列表的替代方案。</h1>
          <div class="col-list">
            <section class="module-module-figure col-3 h3-spacing">
              <div class="module">
                <p>网格列表是由一组重复样式的单元格以垂直和水平方式进行排列组成的。</p>
                <p>网格列表最适合用于相似的数据类型。这有助于增强对它所包含的内容的视觉理解。</p>
              </div>
              <div class="module">
                <h3>类型</h3>
                <p>只含图片<br>
                  单行文本（或含图标）<br>
                  两行文本（或含图标）</p>
                <h3>操作</h3>
                <p>垂直滚动<br>
                  过滤</p>
                <h3>替代方案</h3>
                <p><a href="lists.html">列表</a><br>
                  <a href="cards.html">卡片</a></p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 3000px">
                    <div class="frame " style="padding-top: 100.0%">
                      <img alt="" src="<?php static_url('../static/media/components/grid-lists/components_grid_lists.png'); ?>" loading="lazy"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="grid-lists.html#grid-lists-usage" data-qp-ui-data-id="qp:1">用法</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="grid-lists.html#grid-lists-content" data-qp-ui-data-id="qp:2">内容</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="grid-lists.html#grid-lists-behavior" data-qp-ui-data-id="qp:3">行为</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="grid-lists.html#grid-lists-specs" data-qp-ui-data-id="qp:4">规格</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="grid-lists-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
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
                <section class="module-figure-module col-3">
                  <div class="module">
                    <p>网格列表最适合用于呈现<strong>同类数据</strong>，通常是图片，并且被优化用于增强<strong>视觉理解</strong>，以及区分相似的数据类型。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 98.0555555556%">
                          <img alt="" aria-describedby="usage-figure-caption-0" src="<?php static_url('../static/media/components/grid-lists/components_grids_usage1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-0">
                        <p>网格列表示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p><strong>网格列表</strong>是由一组重复样式的<strong>单元格</strong>以垂直和水平方式进行排列组成的。</p>
                    <p><strong>瓦片</strong>包含内容，并可以横向或纵向跨越一个或多个单元格。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="usage-figure-caption-1" src="<?php static_url('../static/media/components/grid-lists/components_grids_usage2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-1">
                        <p>网格列表示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="usage-figure-caption-2" src="<?php static_url('../static/media/components/grid-lists/components_grids_usage3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-2">
                        <p>单元格和瓦片示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <p>如果瓦片中的内容需要突出显示，以便区分主要内容部分，请考虑使用其他为显示文本和便于阅读理解做过优化的容器，例如列表或卡片。</p>
              <p><strong>列表：</strong> 为阅读理解做了优化，特别是用于比较一组包含多种数据类型的数据时。</p>
              <p><strong>卡片：</strong> 用于格式不一致的内容，例如具有可变长度标题的图片，或由各种不同内容组成的数据集，例如由照片、视频和书籍组成的混合数据集。</p>
            </div>
          </div>
        </div>

        <div id="grid-lists-content" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
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
                <section class="module-figure-module col-3 h1-spacing">
                  <div class="module">
                    <h1>瓦片中的内容</h1>
                    <p>瓦片的内容由主内容和副内容组成。主内容是最容易分辨的元素，通常是图片。副内容可以是操作或文本。</p>
                    <p>为缺少主内容图片的瓦片提供一张默认图片。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 206.666666667%">
                          <img alt="" aria-describedby="content-figure-caption-0" src="<?php static_url('../static/media/components/grid-lists/components_grids_content1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="content-figure-caption-0">
                        <p>包含主内容和副操作的瓦片内容示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3 h1-spacing">
                  <div class="module">
                    <h1>瓦片中的操作</h1>
                    <p>主内容和副内容中的操作（例如播放、放大、删除或选择）都是即时生效的，并且通常不会在网格列表中弹出子菜单。</p>
                    <p>操作可以打开一个后续视图，例如卡片。</p>
                    <h2>主操作</h2>
                    <ul class="lst-kix_xefhha8lrhq7-0 start">
                      <li>充满整个瓦片，因此不通过图标或文本来展现。</li>
                      <li>在特定网格列表的所有瓦片中都保持一致。例如一个网格列表中的所有瓦片的主要操作都是查看图片的详细信息。</li>
                    </ul>
                    <h2>副操作或内容</h2>
                    <ul class="lst-kix_xzaw6cp8x2bi-0 start">
                      <li>在瓦片中以图标或文本的形式展现。</li>
                      <li>在特定网格列表的所有瓦片中都保持一致。</li>
                      <li>在特定网格列表的所有瓦片中的位置都保持一致，但是该位置可以在不同的网格列表之间变化（在角落或边缘）。例如，一个网格列表中的所有瓦片的标题在左下角，而另一个网格列表中所有瓦片的标题可以放在左上角。</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 206.666666667%">
                          <img alt="" aria-describedby="content-figure-caption-1" src="<?php static_url('../static/media/components/grid-lists/components_grids_content2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="content-figure-caption-1">
                        <p>副操作的操作和文本的位置示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="grid-lists-behavior" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
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
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>滚动</h1>
                    <p>网格列表通常只能垂直滚动。</p>
                    <p>不建议进行水平滚动，因为水平滚动和传统的阅读方式冲突，影响理解。有一个例外：网格列表只含单行图片时，可以水平滚动，例如相册，这是和传统的阅读方式兼容的。</p>
                    <p>在视图的初始滚动位置切断网格瓦片，来表明该网格列表的内容超出了视图，是可以滚动的。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 98.0555555556%">
                          <img alt="" aria-describedby="behavior-figure-caption-0" src="<?php static_url('../static/media/components/grid-lists/components_grids_behavior1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-0">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>通过切断网格瓦片来表明网格列表的内容超出了视图。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 98.0555555556%">
                          <img alt="" aria-describedby="behavior-figure-caption-1" src="<?php static_url('../static/media/components/grid-lists/components_grids_behavior2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-1">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>避免在视图的初始滚动位置把网格瓦片和视图边缘对齐。这种情况不能有效的表达列表中还有更多的内容。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <h1>手势</h1>
              <p>不允许为每个瓦片都添加滑动操作。不鼓励使用选取并移动操作。</p>
              <h1>瓦片的过滤和排序</h1>
              <p>网格列表中的内容可以按照日期、文件大小、字母顺序或其他参数进行过滤和排序。</p>
              <p>网格列表中的第一个元素位于左上角，并且顺序为从左到右、从上到下。</p>
              <h1>尺寸和大小调整</h1>
              <p>调整网格列表的大小会导致水平空间的大小发生变化，从而导致瓦片进行重新排序。全出血网格列表瓦片会自动调整大小来适应屏幕的宽度。</p>
              <p>当水平空间缩小时，网格列表不会转换为列表。网格列表和列表的结构不同，用于强调不同的数据类型。网格列表中图片比文本重要，列表中文本比图片重要。</p>
              <p>为了保持整个网格列表的节奏一致，把过长的文本内容截断。或者，增加网格的大小，以使瓦片能够包含更长的标题。</p>
              <h1>响应式设计</h1>
              <p>全屏网格列表应该使用具有最小和最大宽度的流式图像比率，比率根据<a href="../layout/metrics-keylines.html#metrics-keylines-ratio-keylines" target="_blank">比率关键线</a>获得。它们应该保持固定的高度、外边距和内边距。</p>
              <p>居中的网格列表有最小宽度和流式外边距。它们保持固定的图片宽度、高度和内边距。</p>
            </div>
          </div>
        </div>

        <div id="grid-lists-specs" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
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
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>网格列表头部/底部</h1>
                    <h2>单行头部/底部</h2>
                    <p>高度：48dp<br>
                      文本内边距：16dp<br>
                      默认字体大小：16sp<br>
                      副操作与页脚右对齐。</p>
                    <h2>两行头部/底部</h2>
                    <p>高度：68dp<br>
                      文本内边距：16dp<br>
                      每行的默认字体大小：16sp/12sp 或 14sp/14sp</p>
                  </div>
                  <div class="figure">
                    <p>
                      <figure class="s-tag-media">
                        <div class="media" style="max-width: 1520px">
                          <div class="frame " style="padding-top: 89.4736842105%">
                            <img alt="" aria-describedby="specs-figure-caption-0" src="<?php static_url('../static/media/components/grid-lists/components_grids_specs1.png'); ?>" loading="lazy"/>
                          </div>
                        </div>
                        <figcaption id="specs-figure-caption-0"><br>
                          <p>字体大小 14/14 <br>
                            两行文本（含图标）高度：68dp<br>
                            两行文本高度：68dp<br>
                            单行文本高度：48dp</p>
                        </figcaption>
                      </figure>
                      <br/>
                    </p>
                    <p>
                      <figure class="s-tag-media">
                        <div class="media" style="max-width: 1520px">
                          <div class="frame " style="padding-top: 89.4736842105%">
                            <img alt="" aria-describedby="specs-figure-caption-1" src="<?php static_url('../static/media/components/grid-lists/components_grids_specs2.png'); ?>" loading="lazy"/>
                          </div>
                        </div>
                        <figcaption id="specs-figure-caption-1"><br>
                          <p>字体大小 16/12 <br>
                            两行文本（含图标）高度：68dp<br>
                            两行文本高度：68dp<br>
                            单行文本高度：48dp</p>
                        </figcaption>
                      </figure>
                      <br/>
                    </p>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 33.9473684211%">
                          <img alt="" aria-describedby="specs-figure-caption-2" src="<?php static_url('../static/media/components/grid-lists/components_grids_specs22.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-2">
                        <p>头部/底部中的文本截断。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>仅含图片的网格列表</h1>
                    <p>网格列表的间距：4dp 或 1dp</p>
                    <p>网格中的瓦片可以跨越多列。</p>
                    <p>仔细考虑在使用多列瓦片的网格列表中是否需要副文本，因为较大的瓦片可能会产生较大的空白。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 68.3333333333%">
                          <img alt="" aria-describedby="specs-figure-caption-3" src="<?php static_url('../static/media/components/grid-lists/components_grids_specs3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-3">
                        <p>仅含图片的网格列表</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-4" src="<?php static_url('../static/media/components/grid-lists/components_grids_specs4.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-4">
                        <p>仅含图片的网格列表相册</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>单行网格列表</h1>
                    <h2>仅文本</h2>
                    <p>高度：48dp<br>
                      文本内边距：16dp<br>
                      默认字体大小：16sp<br>
                      网格列表间距：4dp 或 1dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 68.3333333333%">
                          <img alt="" aria-describedby="specs-figure-caption-5" src="<?php static_url('../static/media/components/grid-lists/components_grids_specs5.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-5">
                        <p>单行网格列表底部含 16dp 的内边距</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-6" src="<?php static_url('../static/media/components/grid-lists/components_grids_specs7.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-6">
                        <p>单行网格列表头部含 16dp 的内边距</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 68.3333333333%">
                          <img alt="" aria-describedby="specs-figure-caption-7" src="<?php static_url('../static/media/components/grid-lists/components_grids_specs6.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-7">
                        <p>单行网格列表相册</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>含图标的文本</h2>
                    <p>高度：48dp<br>
                      文本内边距：16dp<br>
                      默认字体大小：16sp<br>
                      网格列表间距：4dp 或 1dp</p>
                    <p>副操作可以在头部或底部中左对齐或右对齐</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 68.3333333333%">
                          <img alt="" aria-describedby="specs-figure-caption-8" src="<?php static_url('../static/media/components/grid-lists/components_grids_specs8.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-8">
                        <p>底部含 16dp 的内边距和图标的单行网格列表</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 68.3333333333%">
                          <img alt="" aria-describedby="specs-figure-caption-9" src="<?php static_url('../static/media/components/grid-lists/components_grids_specs10.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-9">
                        <p>头部含 16dp 的内边距和图标的单行网格列表</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-10" src="<?php static_url('../static/media/components/grid-lists/components_grids_specs12.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-10">
                        <p>底部含图标单行网格列表相册</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 68.3333333333%">
                          <img alt="" aria-describedby="specs-figure-caption-11" src="<?php static_url('../static/media/components/grid-lists/components_grids_specs9.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-11">
                        <p>底部含图标的单行网格列表</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 68.3333333333%">
                          <img alt="" aria-describedby="specs-figure-caption-12" src="<?php static_url('../static/media/components/grid-lists/components_grids_specs11.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-12">
                        <p>头部含图标的单行网格列表</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>两行网格列表</h1>
                    <h2>仅文本</h2>
                    <p>高度：68dp<br>
                      文本内边距：16dp<br>
                      每一行的默认字体大小：16sp/12sp 或 14sp/14sp<br>
                      网格列表间距：4dp 或 1dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 68.3333333333%">
                          <img alt="" aria-describedby="specs-figure-caption-13" src="<?php static_url('../static/media/components/grid-lists/components_grids_specs13.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-13">
                        <p>底部含 16dp 内边距的两行网格列表</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-14" src="<?php static_url('../static/media/components/grid-lists/components_grids_specs15.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-14">
                        <p>两行网格列表，4dp 间距示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 68.3333333333%">
                          <img alt="" aria-describedby="specs-figure-caption-15" src="<?php static_url('../static/media/components/grid-lists/components_grids_specs14.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-15">
                        <p>头部含 16dp 内边距的两行网格列表</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-16" src="<?php static_url('../static/media/components/grid-lists/components_grids_specs16.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-16">
                        <p>两行网格列表，1dp 间距示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>含图标的文本</h2>
                    <p>高度：68dp<br>
                      文本内边距：16dp<br>
                      每一行的默认字体大小：16sp/12sp 或 14sp/14sp</p>
                    <p>副操作可以在头部或底部左对齐或右对齐。</p>
                    <p>网格列表间距：4dp 或 1dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 68.0555555556%">
                          <img alt="" aria-describedby="specs-figure-caption-17" src="<?php static_url('../static/media/components/grid-lists/components_grids_specs17.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-17">
                        <p>底部含两行文本和图标</p>
                        <p>文本内边距：16dp</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 68.3333333333%">
                          <img alt="" aria-describedby="specs-figure-caption-18" src="<?php static_url('../static/media/components/grid-lists/components_grids_specs19.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-18">
                        <p>头部含两行文本和图标</p>
                        <p>文本内边距：16dp</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-19" src="<?php static_url('../static/media/components/grid-lists/components_grids_specs21.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-19">
                        <p>含图标的文本示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 68.3333333333%">
                          <img alt="" aria-describedby="specs-figure-caption-20" src="<?php static_url('../static/media/components/grid-lists/components_grids_specs18.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-20">
                        <p>含图标的两行文本示例</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 68.3333333333%">
                          <img alt="" aria-describedby="specs-figure-caption-21" src="<?php static_url('../static/media/components/grid-lists/components_grids_specs20.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-21">
                        <p>含图标的两行文本示例</p>
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
