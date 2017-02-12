<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div><p>网格列表是一个标准列表的替代方案。</p>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>网格列表是由一组重复样式的单元格以垂直和水平方式进行排列组成的。</p>
                <p>网格列表最适合用于相似的数据类型。这有助于增强对它所包含的内容的视觉理解。</p>
              </div>
              <div class="module">
                <h3><strong>类型</strong></h3>
                <p>只含图片<br>
                  单行文本（或含图标）<br>
                  两行文本（或含图标）</p>
                <h3><strong>操作</strong></h3>
                <p>垂直滚动<br>
                  过滤</p>
                <h3><strong>替代方案</strong></h3>
                <p><a href="lists.html">列表</a><br>
                  <a href="cards.html">卡片</a></p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/components/grid-lists/components_grid_lists.png"/>
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
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_usage1.png"/>
                      </div>
                      <figcaption>
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
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_usage2.png"/>
                      </div>
                      <figcaption>
                        <p>网格列表示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_usage3.png"/>
                      </div>
                      <figcaption>
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
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h1>瓦片中的内容</h1>
                    <p>瓦片的内容由主内容和副内容组成。主内容是最容易分辨的元素，通常是图片。副内容可以是操作或文本。</p>
                    <p>为缺少主内容图片的瓦片提供一张默认图片。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_content1.png"/>
                      </div>
                      <figcaption>
                        <p>包含主内容和副操作的瓦片内容示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h1>瓦片中的操作</h1>
                    <p>主内容和副内容中的操作（例如播放、放大、删除或选择）都是即时生效的，并且通常不会在网格列表中弹出子菜单。</p>
                    <p>操作可以打开一个后续视图，例如卡片。</p>
                    <h2><strong>主操作</strong></h2>
                    <ul class="lst-kix_xefhha8lrhq7-0 start">
                      <li>充满整个瓦片，因此不通过图标或文本来表现。</li>
                      <li>在特定网格列表的所有瓦片中都保持一致。例如一个网格列表中的所有瓦片的主要操作都是查看图片的详细信息。</li>
                    </ul>
                    <h2><strong>副操作或内容</strong></h2>
                    <ul class="lst-kix_xzaw6cp8x2bi-0 start">
                      <li>在瓦片中以图标或文本的形式展现。</li>
                      <li>在特定网格列表的所有瓦片中都保持一致。</li>
                      <li>在特定网格列表的所有瓦片中的位置都保持一致，但是该位置可以在不同的网格列表之间变化（在角落或边缘）。例如，一个网格列表中的所有瓦片的标题在左下角，而另一个网格列表中所有瓦片的标题可以放在左上角。</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_content2.png"/>
                      </div>
                      <figcaption>
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
            Behavior
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
                    <h1>Scrolling</h1>
                    <p>Grid lists typically scroll only vertically.</p>
                    <p>Horizontally scrolling grid lists are discouraged because the scrolling interferes with typical reading patterns, affecting comprehension. One notable exception is a horizontally-scrolling, single-line grid list of images, such as a gallery, which is compatible with typical reading patterns.</p>
                    <p>Cut off grid tiles in the view’s initial scroll position to communicate the scroll direction for content overflow.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_behavior1.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>Indicate content overflow by cutting off grid tiles.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_behavior2.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>Avoid aligning grid tiles along a view edge in the view’s initial scroll position. This positioning doesn’t effectively communicate that there is more content available.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <h1>Gestures</h1>
              <p>Per-tile swipe actions are not permitted. Pick-up-and-move actions are discouraged.</p>
              <h1>Tile filtering and sorting</h1>
              <p>Content in a grid list can be programmatically filtered or sorted by date, file size, alphabetical order, or other parameters.</p>
              <p>The first item in the grid list is positioned at the top left of the grid list, and the order proceeds left to right and top to bottom.</p>
              <h1>Dimensions and resizing</h1>
              <p>Resizing a grid list causes the tiles to re-sort as horizontal space becomes available. Full-bleed grid list tiles resize to fit the screen width.</p>
              <p>A grid list does not transform into a list when horizontal space contracts. Grid lists and lists are separate structures for emphasizing different data types. Grid lists prioritize images over text and lists prioritize text over images.</p>
              <p>To maintain a consistent rhythm throughout the grid list, truncate text content that is too long for the tile’s width. Alternatively, increase the grid size so that the tiles can accommodate the longer titles.</p>
              <h1>Responsive design</h1>
              <p>Full-screen grid lists should use fluid image ratios with minimum and maximum widths, derived using the <a href="https://www.google.com/url?q=http://www.google.com/design/spec/layout/metrics-keylines.html%23metrics-keylines-ratio-keylines&amp;sa=D&amp;ust=1481818011211000&amp;usg=AFQjCNEkNkPhCHA4jvTkp918lKXgzvkrvw" target="_blank">Ratio keylines</a>. They should retain fixed heights, margins, and padding.</p>
              <p>Centered grid lists have fluid margins with a minimum width. They maintain fixed image widths, heights, and padding. </p>
            </div>
          </div>
        </div>

        <div id="grid-lists-specs" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
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
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Grid list header/footers</h1>
                    <h2><strong>Single-line header/footer </strong></h2>
                    <p>Height: 48dp<br>
                      Text padding: 16dp<br>
                      Default font size: 16sp<br>
                      Secondary action is flush right to the footer.</p>
                    <h2><strong>Two-line header/footer</strong></h2>
                    <p>Height: 68dp<br>
                      Text padding: 16dp<br>
                      Default font size for each line: 16sp/12sp or 14sp/14sp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs1.png"/>
                      </div>
                      <figcaption><br>
                        <p>Type 14/14 <br>
                          Two-line bar (with icon) height: 68dp<br>
                          Two-line bar height: 68dp<br>
                          Single-line bar height: 48dp</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs2.png"/>
                      </div>
                      <figcaption><br>
                        <p>Type 16/12 <br>
                          Two-line bar (with icon) height: 68dp<br>
                          Two-line bar height: 68dp<br>
                          Single-line bar height: 48dp</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs22.png"/>
                      </div>
                      <figcaption>
                        <p>Text truncation in header/footers.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Image-only grid list</h1>
                    <p>Grid list padding: 4dp or 1dp</p>
                    <p>Tiles in grid lists can span multiple columns.</p>
                    <p>Carefully consider whether secondary text is needed in grid lists that use multi-column tiles, as
                      larger tiles can develop significant empty space.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs3.png"/>
                      </div>
                      <figcaption>
                        <p>Image-only grid list </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs4.png"/>
                      </div>
                      <figcaption>
                        <p>Image-only grid list photo album</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Single-line grid list</h1>
                    <h2><strong>Text only</strong></h2>
                    <p>Height: 48dp<br>
                      Text padding: 16dp<br>
                      Default font size: 16sp<br>
                      Grid list padding: 4dp or 1dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs5.png"/>
                      </div>
                      <figcaption>
                        <p>Single-line grid list footer with 16dp padding</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs7.png"/>
                      </div>
                      <figcaption>
                        <p>Single-line grid list header with 16dp padding</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs6.png"/>
                      </div>
                      <figcaption>
                        <p>Single-line grid list photo album</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong>Text with icon</strong></h2>
                    <p>Height: 48dp<br>
                      Text padding: 16dp<br>
                      Default font size: 16sp<br>
                      Grid list padding: 4dp or 1dp</p>
                    <p>The secondary action can be flush right or flush left within the footer or header.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs8.png"/>
                      </div>
                      <figcaption>
                        <p>Single-line grid list footer with 16dp padding and icon</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs10.png"/>
                      </div>
                      <figcaption>
                        <p>Single-line grid list header with 16dp padding and icon</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs12.png"/>
                      </div>
                      <figcaption>
                        <p>Single-line grid list footer with icon in photo album</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs9.png"/>
                      </div>
                      <figcaption>
                        <p>Single-line grid list footer with icon</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs11.png"/>
                      </div>
                      <figcaption>
                        <p>Single-line grid list header with icon</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Two-line grid list</h1>
                    <h2><strong>Text only</strong></h2>
                    <p>Height: 68dp<br>
                      Text padding: 16dp<br>
                      Default font size for each line: 16sp/12sp or 14sp/14sp<br>
                      Grid list padding: 4dp or 1dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs13.png"/>
                      </div>
                      <figcaption>
                        <p>Two-line grid list footer with 16dp of padding</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs15.png"/>
                      </div>
                      <figcaption>
                        <p>Two-line grid list, 4dp example</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs14.png"/>
                      </div>
                      <figcaption>
                        <p>Two-line grid list header with 16dp of padding</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs16.png"/>
                      </div>
                      <figcaption>
                        <p>Two-line grid list, 1dp example</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong>Text with icon</strong></h2>
                    <p>Height: 68dp<br>
                      Text padding: 16dp<br>
                      Default font size for each line: 16sp/12sp or 14sp/14sp</p>
                    <p>The secondary action can be flush right or flush left within the footer or header.</p>
                    <p>Grid list padding: 4dp or 1dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs17.png"/>
                      </div>
                      <figcaption>
                        <p>Two-line text with icon footer</p>
                        <p>Text padding: 16dp</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs19.png"/>
                      </div>
                      <figcaption>
                        <p>Two-line text with icon header</p>
                        <p>Text padding: 16dp</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs21.png"/>
                      </div>
                      <figcaption>
                        <p>Example of text with icon</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs18.png"/>
                      </div>
                      <figcaption>
                        <p>Two-line text with icon</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs20.png"/>
                      </div>
                      <figcaption>
                        <p>Two-line text with icon</p>
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