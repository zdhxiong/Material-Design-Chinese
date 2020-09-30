<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?= $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>列表将多行项目垂直显示成一个连续的元素。</h1>
          <div class="gas-intro-h1-bottom"></div>
          <div class="col-list">
            <section class="module-module-figure col-3 h3-spacing">
              <div class="module">
                <p>列表用一个连续的列来显示多行元素。每一行都包含一个瓦片。主操作填满整个瓦片，副操作通过图标和文本展现。<br></p>
                <p>列表最适合用于相似的数据类型。</p>
              </div>
              <div class="module">
                <h3>操作</h3>
                <p>垂直滚动<br>
                  过滤和排序</p>

                <h3>手势</h3>
                <p>滑动<br>
                  拖放 </p>

                <h3>替代方案</h3>
                <p><a href="cards.html">卡片</a> <br>
                  <a href="grid-lists.html">网格列表</a></p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 3000px">
                    <div class="frame " style="padding-top: 100.0%">
                      <img alt="" src="<?= static_url('../static/media/components/lists/components_lists.png'); ?>" loading="lazy"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="lists.html#lists-usage" data-qp-ui-data-id="qp:1">用法</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="lists.html#lists-behavior" data-qp-ui-data-id="qp:2">行为</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="lists.html#lists-content" data-qp-ui-data-id="qp:3">内容</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="lists.html#lists-actions" data-qp-ui-data-id="qp:4">操作</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="lists.html#lists-specs" data-qp-ui-data-id="qp:5">规格</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="lists-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
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
                    <p><strong>列表</strong>是由多个等宽的<strong>行</strong>组成的一个连续的列，行的功能是用来包含<strong>瓦片</strong>。</p>
                    <p><strong>瓦片</strong>包含内容，在列表中瓦片的高度可以不同。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 80.0%">
                          <img alt="" aria-describedby="usage-figure-caption-0" src="<?= static_url('../static/media/components/lists/components_lists_usage1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-0">
                        <p>列表</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 80.0%">
                          <img alt="" aria-describedby="usage-figure-caption-1" src="<?= static_url('../static/media/components/lists/components_lists_usage2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-1">
                        <p>行和瓦片</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <p>列表最适合用于呈现同类数据类型或数据类型集，例如图片和文本。它针对阅读理解做了优化，并对相似的数据类型、或同一数据类型的不同特质做了区分。</p>
                    <h2>替代方案：</h2>
                    <ul class="lst-kix_qyzctdh51pys-0 start">
                      <li>如果有超过三行的文本需要显示，请使用<strong>卡片</strong>代替</li>
                      <li>如果主要内容是图片，请使用<strong>网格列表</strong></li>
                    </ul>
                    <h2>密集型</h2>
                    <p>当鼠标和键盘是主要的输入方式时，可以压缩列表尺寸以适应更密集的布局。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 98.0555555556%">
                          <img alt="" aria-describedby="usage-figure-caption-2" src="<?= static_url('../static/media/components/lists/components_lists_usage3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-2">
                        <p>典型列表浏览方式</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="lists-behavior" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
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
              <h1>滚动</h1>
              <p>列表只能垂直滚动。</p>
              <h1>手势</h1>
              <p>列表中的所有瓦片的滑动操作应保持一致。</p>
              <p>瓦片可以从一个列表移动到目标位置（类似于移动文件到一个文件夹），或在一个列表内选取并重新排列。</p>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>过滤和排序</h1>
                    <p>列表瓦片可以按日期、文件大小、字母顺序或其他参数进行排序和过滤。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 91.3888888889%">
                          <img alt="" aria-describedby="behavior-figure-caption-0" src="<?= static_url('../static/media/components/lists/components_lists_behavior1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-0">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>按字母排序使信息更容易被找到。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 91.3888888889%">
                          <img alt="" aria-describedby="behavior-figure-caption-1" src="<?= static_url('../static/media/components/lists/components_lists_behavior2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-1">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>不要按随机顺序显示信息；如果 UI 不允许用户对列表进行排序，则应该默认使用一种更合理的排序方式。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="lists-content" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
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
                    <p>列表瓦片使用相同的格式呈现相关内容。列表使用层次结构来凸显一个类型或一组内容，这有助于帮助用户找到最重要的信息。例如，在邮件收件箱中，头像和内容摘要比邮件的时间更重要。</p>
                    <p>列表瓦片最多可以包含三行文本，并且不同瓦片的文本长度可以不同。如果要显示超过三行的文本，请使用卡片代替。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 53.3333333333%">
                          <img alt="" aria-describedby="content-figure-caption-0" src="<?= static_url('../static/media/components/lists/components_lists_content1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="content-figure-caption-0">
                        <p>把最易分辨的元素放在瓦片左边，不易分辨的元素放在瓦片右边。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module">
                  </div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module">
                    <p>规格：</p>
                    <ul class="lst-kix_8uufrxu5qfsh-0 start">
                      <li>瓦片中的大部分空间应该用于主要操作</li>
                      <li>把最易分辨的元素放在瓦片左边</li>
                      <li>在有<strong>多行内容</strong>的瓦片中，把最易区分的内容放在第一行</li>
                      <li>把<strong>辅助操作</strong>放在瓦片右边</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 53.3333333333%">
                          <img alt="" aria-describedby="content-figure-caption-1" src="<?= static_url('../static/media/components/lists/components_lists_content2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="content-figure-caption-1">
                        <p>主操作占据了瓦片中大部分空间。辅助操作放在瓦片右侧。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="lists-actions" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            操作
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>主操作和辅助操作（例如播放、缩放、删除和选择）可能会打开随后的视图，例如卡片。它没有子菜单或弹出菜单。</p>
              <p><strong>主操作</strong></p>
              <ul class="lst-kix_bt62f15dsukc-0 start">
                <li>填满整个瓦片，而不能由单独的图标或文本按钮来代表主操作</li>
                <li>在特定的列表中，所有瓦片的主操作都是相同的，例如音乐列表中的主操作是播放音乐。</li>
              </ul>
              <p><strong>辅助操作</strong></p>
              <ul class="lst-kix_ue9aszt4rxdb-0 start">
                <li>用图标、副文本等表示</li>
                <li>在列表中有相同的功能，例如使用一个图标显示某人是否在线</li>
                <li>在列表的瓦片中有相同的位置</li>
              </ul>
              <p><strong>重复操作</strong></p>
              <p>避免在瓦片中显示重复的辅助操作，例如在每个瓦片上都添加一个分享操作。</p>
              <p>切换操作是一个例外，例如加星，因为它们提供有关每个单独瓦片的唯一信息。</p>
            </div>
          </div>
        </div>

        <div id="lists-specs" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:5">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:5">
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
                  <div class="module">
                    <p>在<strong>单行列表</strong>中，每个瓦片包含一行文本。列表中瓦片的文本数量可以不同。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 73.3333333333%">
                          <img alt=""  aria-describedby="specs-figure-caption-0" src="<?= static_url('../static/media/components/lists/components_lists_keylines1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-0">
                        <p><strong>单行列表规格</strong><br>
                          图标左侧内边距：16dp<br>
                          列表项目左侧内边距：72dp<br>
                          列表项目右侧内边距：16dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="bordered frame" style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-1" src="<?= static_url('../static/media/components/lists/components_lists_keylines_single6.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-1">
                        <p>单行列表示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>在<strong>两行列表</strong>中，每个瓦片最多包含两行文本。列表中瓦片的文本数量可以不同。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 65.5555555556%">
                          <img alt=""  aria-describedby="specs-figure-caption-2" src="<?= static_url('../static/media/components/lists/components_lists_keylines3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-2">
                        <p><strong>两行列表规格</strong><br>
                          图标左侧内边距：16dp<br>
                          列表项目左侧内边距：72dp<br>
                          列表右侧内边距：16dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-3" src="<?= static_url('../static/media/components/lists/components_lists_keylines4.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-3">
                        <p>两行列表示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>在<strong>三行列表</strong>中，每个瓦片最多包含三行文本。</p>
                    <p>列表中瓦片的文本数量可以不同。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 73.3333333333%">
                          <img alt="" aria-describedby="specs-figure-caption-4" src="<?= static_url('../static/media/components/lists/components_lists_keylines5.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-4">
                        <p>三行列表规格</p>
                        <p>图标左侧内边距：16dp<br>
                          列表项目左侧内边距：72dp<br>
                          列表右侧内边距：16dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-5" src="<?= static_url('../static/media/components/lists/components_lists_keylines6.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-5">
                        <p>三行列表示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>单行列表</h1>
                    <h2>仅含文本</h2>
                    <p>在列表上下添加 8dp 的内边距，含副标题的列表除外，它们自己有内边距。</p>
                    <p>底部边距从基线开始测量。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 44.4444444444%">
                          <img alt="" aria-describedby="specs-figure-caption-6" src="<?= static_url('../static/media/components/lists/components_lists_keylines_single1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-6">
                        <p>单行列表</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="bordered frame" style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-7" src="<?= static_url('../static/media/components/lists/components_lists_keylines_single3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-7">
                        <p>单行列表示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 44.4444444444%">
                          <img alt="" aria-describedby="specs-figure-caption-8" src="<?= static_url('../static/media/components/lists/components_lists_keylines_single2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-8">
                        <p><strong>单行列表规格</strong></p>
                        <p>字体：Roboto Regular 16sp<br>
                          高度：48dp<br>
                          列表左右距离屏幕边缘的内边距：16dp<br>
                          列表顶部内边距：8dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 44.4444444444%">
                          <img alt="" aria-describedby="specs-figure-caption-9" src="<?= static_url('../static/media/components/lists/components_lists_keylines_single2_dense.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-9">
                        <p><strong>紧凑型单行列表规格</strong></p>
                        <p>字体：Roboto Regular 13sp<br>
                          高度：40dp<br>
                          列表左右距离屏幕边缘的内边距：16dp<br>
                          列表顶部内边距：4dp </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>含图标和文本</h2>
                    <p>列表上下添加 8dp 的内边距，含副标题的列表除外，它们自己有内边距。</p>
                    <p>底部边距从基线开始测量。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 44.7222222222%">
                          <img alt="" aria-describedby="specs-figure-caption-10" src="<?= static_url('../static/media/components/lists/components_lists_keylines_single4.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-10">
                        <p>含图标的单行列表</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="bordered frame" style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-11" src="<?= static_url('../static/media/components/lists/components_lists_keylines_single6.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-11">
                        <p>含图标的单行列表示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 44.4444444444%">
                          <img alt="" aria-describedby="specs-figure-caption-12" src="<?= static_url('../static/media/components/lists/components_lists_keylines_single5.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-12">
                        <p><strong>含图标的单行列表规格</strong></p>
                        <p>字体：Roboto Regular 16sp<br>
                          高度：48dp<br>
                          图标左侧内边距：16dp<br>
                          文本左侧内边距：72dp<br>
                          列表顶部内边距：8dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 44.4444444444%">
                          <img alt="" aria-describedby="specs-figure-caption-13" src="<?= static_url('../static/media/components/lists/components_lists_keylines_single5_dense.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-13">
                        <p><strong>含图标的紧凑型单行列表规格</strong></p>
                        <p>字体：Roboto Regular 13sp<br>
                          高度：40dp<br>
                          图标左侧内边距：16dp<br>
                          文本左侧内边距：72dp<br>
                          列表顶部内边距：4dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>含头像和文本</h2>
                    <p>底部边距从基线开始测量。</p>
                    <p>在列表上下添加 8dp 的内边距，含图标的列表除外，它们自己有内边距。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 51.1111111111%">
                          <img alt="" aria-describedby="specs-figure-caption-14" src="<?= static_url('../static/media/components/lists/components_lists_keylines_single7.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-14">
                        <p>含头像的单行列表</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-15" src="<?= static_url('../static/media/components/lists/components_lists_keylines_single9.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-15">
                        <p>含头像的单行列表示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 51.1111111111%">
                          <img alt="" aria-describedby="specs-figure-caption-16" src="<?= static_url('../static/media/components/lists/components_lists_keylines_single8.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-16">
                        <p><strong>含头像的单行列表规格</strong></p>
                        <p>字体：Roboto Regular 16sp<br>
                          高度：56dp<br>
                          头像左侧内边距：16dp<br>
                          文本左侧内边距：72dp<br>
                          列表顶部内边距：8dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 51.1111111111%">
                          <img alt="" aria-describedby="specs-figure-caption-17" src="<?= static_url('../static/media/components/lists/components_lists_keylines_single8_dense.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-17">
                        <p><strong>含头像的紧凑型单行列表规格</strong></p>
                        <p>字体：Roboto Regular 13sp<br>
                          高度：48dp<br>
                          头像左侧内边距：16dp<br>
                          文本左侧内边距：72dp<br>
                          列表顶部内边距：4dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>含头像、文本和图标</h2>
                    <p>图标右侧内边距：16dp</p>
                    <p>列表上下添加 8dp 的内边距，含副标题的列表除外，它们自己有内边距。</p>
                    <p>底部边距从基线开始测量。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 51.1111111111%">
                          <img alt="" aria-describedby="specs-figure-caption-18" src="<?= static_url('../static/media/components/lists/components_lists_keylines_single10.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-18">
                        <p>含头像和图标的单行列表</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-19" src="<?= static_url('../static/media/components/lists/components_lists_keylines_single9.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-19">
                        <p>含头像和图标的单行列表示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 51.1111111111%">
                          <img alt="" aria-describedby="specs-figure-caption-20" src="<?= static_url('../static/media/components/lists/components_lists_keylines_single11.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-20">
                        <p><strong>含头像和图标的单行列表规格</strong></p>
                        <p>字体：Roboto Regular 16sp<br>
                          高度：56dp<br>
                          头像左侧内边距：16dp<br>
                          图标右侧内边距：16dp<br>
                          文本左侧内边距：72dp<br>
                          列表顶部内边距：8dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 51.1111111111%">
                          <img alt="" aria-describedby="specs-figure-caption-21" src="<?= static_url('../static/media/components/lists/components_lists_keylines_single11_dense.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-21">
                        <p><strong>含头像和图标的紧凑型单行列表规格</strong></p>
                        <p>字体：Roboto Regular 13sp<br>
                          高度：48dp<br>
                          头像左侧内边距：16dp<br>
                          图标右侧内边距：16dp<br>
                          文本左侧内边距：72dp<br>
                          列表顶部内边距：4dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>两行列表</h1>
                    <h2>仅含文本</h2>
                    <p>主文本字体：Roboto Regular 16sp<br>
                      副文本字体：Roboto Regular 14sp<br>
                      瓦片高度：72dp<br>
                      文本左侧内边距：16dp<br>
                      文本上下内边距：20dp</p>
                    <p>底部边距从基线开始测量。</p>
                    <p>在列表的上下添加 8dp 的内边距。顶部含副标题的列表除外，它们有自己的内边距。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 64.4444444444%">
                          <img alt="" aria-describedby="specs-figure-caption-22" src="<?= static_url('../static/media/components/lists/components_lists_keylines_two1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-22">
                        <p>两行列表</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-23" src="<?= static_url('../static/media/components/lists/components_lists_keylines_two3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-23">
                        <p>两行列表示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 65.0%">
                          <img alt="" aria-describedby="specs-figure-caption-24" src="<?= static_url('../static/media/components/lists/components_lists_keylines_two2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-24">
                        <p><strong>两行列表规格：</strong></p>
                        <p>字体：Roboto Regular 16sp<br>
                          高度：72dp<br>
                          列表左右和屏幕边缘之间的内边距：16dp<br>
                          顶部内边距：8dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 65.0%">
                          <img alt="" aria-describedby="specs-figure-caption-25" src="<?= static_url('../static/media/components/lists/components_lists_keylines_two2_dense.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-25">
                        <p><strong>密集型两行列表规格：</strong></p>
                        <p>字体：Roboto Regular 13sp<br>
                          高度：60dp<br>
                          列表左右和屏幕边缘之间的内边距：16dp<br>
                          顶部内边距：4dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>含图标和文本</h2>
                    <p>主文本字体：Roboto Regular 16sp<br>
                      副文本字体：Roboto Regular 14sp<br>
                      瓦片高度：72dp<br>
                      图标左侧内边距：16dp<br>
                      文本左侧内边距：72dp<br>
                      文本上下内边距：20dp<br>
                      底部边距从基线开始测量。</p>
                    <p>在列表上下添加 8dp 的内边距，含副标题的列表除外，它们自己有内边距。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 64.4444444444%">
                          <img alt="" aria-describedby="specs-figure-caption-26" src="<?= static_url('../static/media/components/lists/components_lists_keylines_two4.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-26">
                        <p>含图标的两行列表</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-27" src="<?= static_url('../static/media/components/lists/components_lists_keylines_two12.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-27">
                        <p>含图标的两行列表示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 64.4444444444%">
                          <img alt="" aria-describedby="specs-figure-caption-28" src="<?= static_url('../static/media/components/lists/components_lists_keylines_two5.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-28">
                        <p><strong>含图标的两行列表规格：</strong></p>
                        <p>字体：Roboto Regular 16sp<br>
                          高度：72dp<br>
                          图标左侧内边距：16dp<br>
                          文本左侧内边距：72dp<br>
                          列表上方内边距：8dp<br>
                          文本右侧内边距：16dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 65.0%">
                          <img alt="" aria-describedby="specs-figure-caption-29" src="<?= static_url('../static/media/components/lists/components_lists_keylines_two5_dense.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-29">
                        <p><strong>含图标的密集型两行列表规格：</strong></p>
                        <p>字体：Roboto Regular 13sp<br>
                          瓦片高度：60dp<br>
                          图标左侧内边距：16dp<br>
                          文本左侧内边距：72dp<br>
                          列表顶部内边距：4dp<br>
                          文本右侧内边距：16dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>含头像和文本</h2>
                    <p>主文本字体：Roboto Regular 16sp<br>
                      副文本字体：Roboto Regular 14sp<br>
                      瓦片高度：72dp<br>
                      头像左侧内边距：16dp<br>
                      文本左侧内边距：72dp<br>
                      文本上下内边距：20dp</p>
                    <p>底部边距从基线开始测量。</p>
                    <p>图标和文本区域居中对齐。</p>
                    <p>在列表的上下添加 8dp 的内边距，含副标题的列表除外，它们有自己的内边距。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 64.4444444444%">
                          <img alt="" aria-describedby="specs-figure-caption-30" src="<?= static_url('../static/media/components/lists/components_lists_keylines_two6.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-30">
                        <p>含头像的两行列表</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-31" src="<?= static_url('../static/media/components/lists/components_lists_keylines_two8.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-31">
                        <p>含头像的两行列表示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 64.4444444444%">
                          <img alt="" aria-describedby="specs-figure-caption-32" src="<?= static_url('../static/media/components/lists/components_lists_keylines_two7.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-32">
                        <p><strong>含头像的两行列表规格：</strong></p>
                        <p>字体：Roboto Regular 16sp<br>
                          瓦片高度：72dp<br>
                          图标左侧内边距：16dp<br>
                          文本左侧内边距：72dp<br>
                          列表上方内边距：8dp<br>
                          文本右侧内边距：16dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 65.0%">
                          <img alt="" aria-describedby="specs-figure-caption-33" src="<?= static_url('../static/media/components/lists/components_lists_keylines_two7_dense.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-33">
                        <p><strong>含头像的密集型两行列表规格：</strong></p>
                        <p>字体：Roboto Regular 13sp<br>
                          瓦片：60dp<br>
                          图标左侧内边距：16dp<br>
                          文本左侧内边距：72dp<br>
                          列表顶部内边距：4dp<br>
                          文本右侧内边距：16dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>含头像、文本和图标</h2>
                    <p>主文本字体：Roboto Regular 16sp<br>
                      副文本字体：Roboto Regular 14sp<br>
                      瓦片高度：72dp<br>
                      头像左侧内边距：16dp<br>
                      文本左侧内边距：72dp</p>
                    <p>图标右侧内边距：16dp</p>
                    <p>底部边距从基线开始测量。</p>
                    <p>在列表的上下添加 8dp 的内边距，含副标题的列表除外，他们有自己的内边距。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 64.4444444444%">
                          <img alt="" aria-describedby="specs-figure-caption-34" src="<?= static_url('../static/media/components/lists/components_lists_keylines_two9.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-34">
                        <p>含头像、文本和图标</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-35" src="<?= static_url('../static/media/components/lists/components_lists_keylines_two11.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-35">
                        <p>含头像、文本和图标的示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 64.4444444444%">
                          <img alt="" aria-describedby="specs-figure-caption-36" src="<?= static_url('../static/media/components/lists/components_lists_keylines_two10.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-36">
                        <p><strong>含头像、文本和图标</strong></p>
                        <p>字体：Roboto Regular 16sp<br>
                          瓦片高度：72dp<br>
                          图标左侧内边距：16dp<br>
                          文本左侧内边距：72dp<br>
                          列表顶部内边距：8dp<br>
                          文本右侧内边距：16dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 65.0%">
                          <img alt="" aria-describedby="specs-figure-caption-37" src="<?= static_url('../static/media/components/lists/components_lists_keylines_two10_dense.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-37">
                        <p><strong>含头像、文本和图标的密集型列表</strong></p>
                        <p>字体：Roboto Regular 13sp<br>
                          瓦片高度：60dp<br>
                          图标左侧内边距：16dp<br>
                          文本左侧内边距：72dp<br>
                          列表顶部内边距：4dp<br>
                          文本右侧内边距：16dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>三行列表</h1>
                    <h2>仅文本</h2>
                    <p>主文本字体：Roboto Regular 16sp</p>
                    <p>副文本字体：Roboto Regular 14sp<br>
                      瓦片高度：88dp<br>
                      文本左侧内边距：16dp<br>
                      文本顶部内边距：16dp<br>
                      文本底部内边距：20dp</p>
                    <p>底部边距从基线开始测量。</p>
                    <p>在列表的上下添加 8dp 的内边距，含副文本的列表除外，它们有自己的内边距。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 77.7777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-38" src="<?= static_url('../static/media/components/lists/components_lists_keylines_three1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-38">
                        <p>三行列表</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-39" src="<?= static_url('../static/media/components/lists/components_lists_keylines_three12.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-39">
                        <p>三行列表示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 77.7777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-40" src="<?= static_url('../static/media/components/lists/components_lists_keylines_three2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-40">
                        <p><strong>三行列表规格：</strong></p>
                        <p>字体：Roboto Regular 16sp<br>
                          瓦片高度：88dp<br>
                          文本左侧内边距：16dp<br>
                          文本右侧内边距：16dp<br>
                          列表顶部内边距：8dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 77.7777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-41" src="<?= static_url('../static/media/components/lists/components_lists_keylines_three2_dense.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-41">
                        <p><strong>密集型三行列表规格：</strong></p>
                        <p>字体：Roboto Regular 13sp<br>
                          瓦片高度：76dp<br>
                          文本左侧内边距：16dp<br>
                          文本右侧内边距：16dp<br>
                          列表顶部内边距：4dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>含图标和文本</h2>
                    <p>主文本字体：Roboto Regular 16sp<br>
                      副文本字体：Roboto Regular 14sp<br>
                      瓦片高度：88dp<br>
                      图标左侧内边距：16dp<br>
                      文本左侧内边距：72dp<br>
                      文本顶部内边距：16dp<br>
                      文本底部内边距：20dp</p>
                    <p>底部边距从基线开始测量。</p>
                    <p>图标和主文本的顶部对齐。</p>
                    <p>在列表的上下添加 8dp 的内边距，含副标题的列表除外，它们有自己的内边距。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 77.7777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-42" src="<?= static_url('../static/media/components/lists/components_lists_keylines_three4.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-42">
                        <p>含图标的三行列表</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-43" src="<?= static_url('../static/media/components/lists/components_lists_keylines_three3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-43">
                        <p>含图标的三行列表示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 77.7777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-44" src="<?= static_url('../static/media/components/lists/components_lists_keylines_three5.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-44">
                        <p><strong>含图标的三行列表规格：</strong></p>
                        <p>字体：Roboto Regular 16sp<br>
                          瓦片高度：88dp<br>
                          图标左侧内边距：16dp<br>
                          文本左侧内边距：72dp<br>
                          文本右侧内边距：16dp<br>
                          列表顶部内边距：8dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 77.7777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-45" src="<?= static_url('../static/media/components/lists/components_lists_keylines_three5_dense.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-45">
                        <p><strong>含图标的密集型三行列表规格：</strong></p>
                        <p>字体：Roboto Regular 13sp<br>
                          瓦片高度：76dp<br>
                          图标左侧内边距：16dp<br>
                          文本左侧内边距：72dp<br>
                          文本右侧内边距：16dp<br>
                          列表顶部内边距：4dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>含头像和文本</h2>
                    <p>主文本字体：Roboto Regular 16sp<br>
                      副文本字体：Roboto Regular 14sp<br>
                      瓦片高度：88dp<br>
                      头像左侧内边距：16dp<br>
                      文本左侧内边距：72dp<br>
                      文本上方内边距：16dp<br>
                      文本下方内边距：20dp</p>
                    <p>底部边距从基线开始测量。</p>
                    <p>头像和主文本顶部对齐。</p>
                    <p>在列表的上下添加 8dp 的内边距，含副标题的列表除外，它们有自己的内边距。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 77.7777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-46" src="<?= static_url('../static/media/components/lists/components_lists_keylines_three6.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-46">
                        <p>含头像的三行列表</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-47" src="<?= static_url('../static/media/components/lists/components_lists_keylines_three8.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-47">
                        <p>含头像的三行列表示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 77.7777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-48" src="<?= static_url('../static/media/components/lists/components_lists_keylines_three7.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-48">
                        <p><strong>含头像的三行列表规格：</strong></p>
                        <p>字体：Roboto Regular 16sp<br>
                          瓦片高度：88dp<br>
                          列表顶部内边距：8dp<br>
                          头像左侧内边距：16dp<br>
                          文本左侧内边距：72dp<br>
                          文本右侧内边距：16dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 77.7777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-49" src="<?= static_url('../static/media/components/lists/components_lists_keylines_three7_dense.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-49">
                        <p><strong>含头像的密集型三行列表规格：</strong></p>
                        <p>字体：Roboto Regular 13sp<strong><br>
                        </strong>瓦片高度：76dp<br>
                          列表顶部内边距：4dp<br>
                          头像左侧内边距：16dp<br>
                          文本左侧内边距：72dp<br>
                          文本右侧内边距：16dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>含头像、文本和图标</h2>
                    <p>主文本字体：Roboto Regular 16sp<br>
                      副文本字体：Roboto Regular 14sp<br>
                      瓦片高度：88dp<br>
                      头像左侧内边距：16dp<br>
                      文本左侧内边距：72dp<br>
                      文本上方内边距：16dp<br>
                      文本下方内边距：20dp</p>
                    <p>右侧图标的内边距：16dp</p>
                    <p>底部边距从基线开始测量。</p>
                    <p>头像及图标和主文本的顶部对齐。</p>
                    <p>在列表的上下添加 8dp 的内边距，含副标题的列表除外，它们有自己的内边距。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 77.7777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-50" src="<?= static_url('../static/media/components/lists/components_lists_keylines_three9.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-50">
                        <p>含头像和图标的三行列表</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-51" src="<?= static_url('../static/media/components/lists/components_lists_keylines_three11.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-51">
                        <p>含头像和图标的三行列表示例</p>
                        <p><br></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 77.7777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-52" src="<?= static_url('../static/media/components/lists/components_lists_keylines_three10.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-52">
                        <p><strong>含头像和图标的三行列表规格：</strong></p>
                        <p>字体：Roboto Regular 16sp<br>
                          瓦片高度：88dp<br>
                          头像左侧内边距：16dp<br>
                          文本左侧内边距：72dp<br>
                          列表顶部内边距：8dp<br>
                          图标左右内边距：16dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 77.7777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-53" src="<?= static_url('../static/media/components/lists/components_lists_keylines_three10_dense.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-53">
                        <p><strong>含头像和图标的密集型三行列表规格：</strong></p>
                        <p>字体：Roboto Regular 13sp<br>
                          瓦片高度：76dp<br>
                          头像左侧内边距：16dp<br>
                          文本左侧内边距：72dp<br>
                          列表顶部内边距：4dp<br>
                          图标左右内边距：16dp</p>
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
