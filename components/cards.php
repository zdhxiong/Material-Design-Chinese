<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>卡片通常是通往详细信息的入口。</h1>
          <div class="col-list">
            <section class="module-module-figure col-3 h3-spacing">
              <div class="module">
                <p>卡片可以包含一个主题的照片、文字和链接。它们可以显示包含不同尺寸的元素的内容，例如有可变长度标题的照片。</p>
                <p>卡片集是多个卡片在同一平面上的布局结构。</p>
              </div>
              <div class="module">
                <h3>用法</h3>
                <p>卡片显示由不同元素组成的内容，其大小和支持的操作不同。</p>

                <h3>支持的手势</h3>
                <p>滑动<br>
                  拾起并移动</p>

                <h3>相关组件</h3>
                <p><a href="grid-lists.html">网格列表</a></p>

                <h3>给开发人员</h3>
                <p>
                  <a href="http://developer.android.com/index.html" target="_blank">Android 卡片</a><br>
                  <a href="https://www.polymer-project.org/1.0/" target="_blank">Polymer 卡片</a>
                </p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 3000px">
                    <div class="frame " style="padding-top: 100.0%">
                      <img alt="" src="<?php static_url('../static/media/components/cards/components_cards.png'); ?>"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="cards.html#cards-usage" data-qp-ui-data-id="qp:1">用法</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="cards.html#cards-content" data-qp-ui-data-id="qp:2">内容</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="cards.html#cards-behavior" data-qp-ui-data-id="qp:3">行为</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="cards.html#cards-actions" data-qp-ui-data-id="qp:4">操作</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="cards.html#cards-content-blocks" data-qp-ui-data-id="qp:5">内容块</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="cards-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
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
                <section class="module-figure col-2">
                  <div class="module">
                    <p>卡片是用来显示由不同元素组成的内容的便捷方式。它们也适合用来展示拥有不同尺寸和操作的元素，例如有可变长度标题的照片。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 55.7894736842%">
                          <img alt="" aria-describedby="usage-figure-caption-0" src="<?php static_url('../static/media/components/cards/components_cards1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-0">
                        <p>卡片的例子</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>卡片集是在同一平面上的卡片的布局。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="usage-figure-caption-1" src="<?php static_url('../static/media/components/cards/components_cards2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-1">
                        <p>卡片集的例子</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="usage-figure-caption-2" src="<?php static_url('../static/media/components/cards/components_cards3.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-2">
                        <p>卡片集的例子</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p><strong>何时使用</strong></p>
                    <p>显示这些内容时可以使用卡片布局：</p>
                    <ul class="lst-kix_rnw5ydwfz5t2-0 start">
                      <li>由不同数据类型组成的集合，例如图片、视频、文本</li>
                      <li>不需要直接进行对比（用户不会直接与图片或文本进行比较）</li>
                      <li>包含可变长度的内容，例如评论</li>
                      <li>包含交互性的内容，例如 +1按钮或评论</li>
                      <li>需要显示更多的内容来对图片进行补充说明，否则应该使用网格列表</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="usage-figure-caption-3" src="<?php static_url('../static/media/components/cards/components_cards6.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-3">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>1. 卡片带圆角。<br>
                          2. 卡片可以带有多种操作。<br>
                          3. 卡片可以被移除和重新排列。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="usage-figure-caption-4" src="<?php static_url('../static/media/components/cards/components_cards7.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-4">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>这是瓷砖，不是卡片<br>
                          1. 瓷砖带直角<br>
                          2. 瓷砖的操作少于两个</p>
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
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="usage-figure-caption-5" src="<?php static_url('../static/media/components/cards/components_cards8.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-5">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>列表可以进行快速浏览，用列表代替卡片，来展示操作不多的同类内容，是一个更合适的方法。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="usage-figure-caption-6" src="<?php static_url('../static/media/components/cards/components_cards9.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-6">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>这里卡片的使用分散了用户的注意力，使用户不能快速地浏览。这些列表项也不能被取消，所以把它们放在不同的卡片上是不合适的。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="usage-figure-caption-7" src="<?php static_url('../static/media/components/cards/components_cards10.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-7">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>用网格瓷砖来展示相册，是一种干净又轻巧的方式。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="usage-figure-caption-8" src="<?php static_url('../static/media/components/cards/components_cards11.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-8">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>在相册（同类内容）中不需要用到卡片。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="cards-content" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
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
                  <div class="module"><p>卡片提供上下文、及通往更详细信息和视图的入口，并且卡片的内容和数量可以有很大的差异。卡片集中的每一个卡片都可以包含独特的数据集，例如含操作的选项列表、含操作的笔记、含图片的笔记。</p>
                    <p>不要滥用带有无用信息或操作的卡片。</p>
                    <h2>内容层次结构</h2>
                    <p>使用卡片的层次结构来把用户的注意力引导到最重要的信息上。例如，把重要内容放在卡片的顶部，或利用排版来强调重要内容。</p>
                    <p>图片可以进一步加深卡片中的其他内容。然而，它们在卡片中的尺寸和位置取决于图片是主要内容还是只用于补充卡片中的其他内容。</p>
                    <p><strong>背景图</strong></p>
                    <p>文本在与其有足够对比度的纯色背景上时最清晰。把文本放在背景图片上时，应保持文本的可读性。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="content-figure-caption-0" src="<?php static_url('../static/media/components/cards/components_cards_content1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="content-figure-caption-0">
                        <p>该卡片集包含拥有不同布局的卡片。</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="content-figure-caption-1" src="<?php static_url('../static/media/components/cards/components_cards_content2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="content-figure-caption-1">
                        <p>该卡片集包含拥有不同类型和布局的卡片。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="content-figure-caption-2" src="<?php static_url('../static/media/components/cards/components_cards_content3.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="content-figure-caption-2">
                        <p>可以利用排版来强调主要内容。</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="content-figure-caption-3" src="<?php static_url('../static/media/components/cards/components_cards_content4.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="content-figure-caption-3">
                        <p>该卡片集包含拥有不同布局和内容层次结构的卡片。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="cards-behavior" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
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
              <p>卡片具有恒定的宽度和可变的高度。最大高度不超过平台上可用空间的高度，但是可以临时展开（例如，显示注释字段）。</p>
              <p>卡片不会翻转来显示背面的信息。</p>
              <h1>支持的手势</h1>
              <p>卡片的手势在卡片集中同样适用。</p>
              <p>支持的手势包括：</p>
              <ul class="lst-kix_s5w344fogft3-0 start">
                <li><strong>滑动手势</strong> 可以用在每张卡片上。卡片内部的元素不应使用滑动手势，以避免它们相互重叠。例如，可滑动的卡片内部不应包含可滑动的图像轮播组件，以确保在滑动时只会触发单个动作。</li>
                <li><strong>拾取并移动手势</strong> 可以在需要对卡片集中的卡片进行排序时使用。但是，也应该考虑是否使用过滤或排序功能可以更好地组织内容。</li>
              </ul>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>卡片集的过滤和排序</h1>
                    <p>卡片集可以按日期、文件大小、字母顺序或其他参数以编程方式排序或过滤。</p>
                    <ul class="lst-kix_k88e5oocs0bw-0 start">
                      <li>卡片集中的第一张卡片位于左上角</li>
                      <li>卡片以从左到右、从上到下的顺序排列</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 86.4473684211%">
                          <img alt="" aria-describedby="behavior-figure-caption-0" src="<?php static_url('../static/media/components/cards/components_cards_behavior1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-0">
                        <p>卡片以从左到右、从上到下的顺序排列。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3 h1-spacing">
                  <div class="module">
                    <h1>滚动</h1>
                    <p>卡片集只能垂直滚动。</p>
                    <p>超过卡片最大高度的卡片内容会被截断，不会滚动，但是卡片可以展开。展开后，卡片可能会超出视图的最大高度。在这种情况下，卡片将与卡片集一起滚动。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="behavior-figure-caption-1" src="<?php static_url('../static/media/components/cards/components_cards_behavior2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-1">
                        <p>超过卡片最大高度的卡片内容会被截断，不会滚动。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="behavior-figure-caption-2" src="<?php static_url('../static/media/components/cards/components_cards_behavior5.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-2">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>卡片可以展开以显示更多内容，无需使用滚动。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="behavior-figure-caption-3" src="<?php static_url('../static/media/components/cards/components_cards_behavior4.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-3">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>在移动设备上，避免在卡片内部出现滚动条，因为这可能导致视图内同时显示两个滚动条。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 90.7894736842%">
                          <img alt="" aria-describedby="behavior-figure-caption-4" src="<?php static_url('../static/media/components/cards/components_cards_behavior3.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-4">
                        <p>在桌面端，卡片内容可以展开和滚动。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>卡片焦点</h1>
                    <p>当在卡片上遍历焦点时，在焦点切换到下一张卡片之前，应该能够遍历到所有卡片内能获得焦点的元素。</p>
                    <p>对于依赖焦点遍历进行导航的设备（D-pad 和键盘），卡片应该拥有主操作，或者打开一个包含主操作和补充操作的新视图。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 55.9210526316%">
                          <img alt="" aria-describedby="behavior-figure-caption-5" src="<?php static_url('../static/media/components/cards/components_cards_behavior6.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-5">
                        <p>遍历焦点时选中一个操作</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 78.9473684211%">
                          <img alt="" aria-describedby="behavior-figure-caption-6" src="<?php static_url('../static/media/components/cards/components_cards_behavior7.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-6">
                        <p>原来隐藏的文本展开后，焦点落在了补充操作上</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="cards-actions" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
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
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>卡片中的主要操作通常是卡片本身。</p>
                    <p>根据内容类型和预期的结果，卡片集中的卡片之间的补充操作也会不同；例如，播放电影和打开书籍的操作是不同的。一组卡片中，始终有定位操作。</p>
                    <h2>补充操作</h2>
                    <p>卡片中的补充操作通常通过图标、文本和 UI 控件呼出，通常放置在卡片底部。</p>
                    <p>除了弹出菜单外，补充操作最多为两项。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 49.4736842105%">
                          <img alt="" aria-describedby="actions-figure-caption-0" src="<?php static_url('../static/media/components/cards/components_cards16.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="actions-figure-caption-0">
                        <p>含操作区域、富媒体和文本的卡片</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 64.2105263158%">
                          <img alt="" aria-describedby="actions-figure-caption-1" src="<?php static_url('../static/media/components/cards/components_cards17.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="actions-figure-caption-1">
                        <p>含两个操作区域、卡片头部、富媒体、文本和追加操作的卡片</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 72.6315789474%">
                          <img alt="" aria-describedby="actions-figure-caption-2" src="<?php static_url('../static/media/components/cards/components_cards18.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="actions-figure-caption-2">
                        <p>含四个操作区域、卡片头部、富媒体和追加操作的卡片</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 36.8421052632%">
                          <img alt="" aria-describedby="actions-figure-caption-3" src="<?php static_url('../static/media/components/cards/components_cards19.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="actions-figure-caption-3">
                        <p>含两个操作区域、卡片头部、文本和追加操作的卡片</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>UI 控件</h2>
                    <p>UI 控件（如滑块）与主内容放在一起时，会改变主内容的视觉效果。例如，使用滑块来选择日期，使用星星来为内容打分，或者使用分段按钮来选择日期范围。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 31.4473684211%">
                          <img alt="" aria-describedby="actions-figure-caption-4" src="<?php static_url('../static/media/components/cards/components_cards_action1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="actions-figure-caption-4">
                        <p>这个卡片在操作区域有 UI 控件。</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 74.4736842105%">
                          <img alt="" aria-describedby="actions-figure-caption-5" src="<?php static_url('../static/media/components/cards/components_cards_action4.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="actions-figure-caption-5">
                        <p>这个卡片在操作区域有分段按钮。</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 82.8947368421%">
                          <img alt="" aria-describedby="actions-figure-caption-6" src="<?php static_url('../static/media/components/cards/components_cards_action6.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="actions-figure-caption-6">
                        <p>这个卡片在操作区域有一个滑块。</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 78.0263157895%">
                          <img alt="" aria-describedby="actions-figure-caption-7" src="<?php static_url('../static/media/components/cards/components_cards_action5.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="actions-figure-caption-7">
                        <p>这个卡片在操作区域有 Tab 选项卡。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>弹出菜单（可选）</h2>
                    <p>弹出菜单通常放在卡片的右上角，但如果放在右下角可以改善内容布局和增加识别度的话，就放在右下角。</p>
                    <p>注意不要使用带有太多选项的弹出菜单。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 69.7368421053%">
                          <img alt="" aria-describedby="actions-figure-caption-8" src="<?php static_url('../static/media/components/cards/components_cards_overflow.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="actions-figure-caption-8">
                        <p>这个卡片在右上角有一个弹出菜单。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>其他操作</h2>
                    <p>强烈不推荐在文本内容中使用行内链接。</p>
                    <p>尽管卡片可以提供多个操作、UI 控件、和弹出菜单，但需要谨慎使用，并谨记卡片是通往更详细信息的入口。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="actions-figure-caption-9" src="<?php static_url('../static/media/components/cards/components_cards_action2-do.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="actions-figure-caption-9">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>卡片作为通往更详细信息的入口。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="actions-figure-caption-10" src="<?php static_url('../static/media/components/cards/components_cards_action3-dont.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="actions-figure-caption-10">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>卡片提供上下文和一个入口，以通往更信息的信息和视图。不要使卡片带有无关的信息和操作。强烈不推荐在文本内容中使用行内链接。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="cards-content-blocks" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:5">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:5">
            内容块
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
                    <p>卡片可以使用内容块来构建，这些内容块包括：</p>
                    <ul class="lst-kix_an4kdbg3r80d-0 start">
                      <li>可选的头部</li>
                      <li>主标题</li>
                      <li>富媒体</li>
                      <li>副文本</li>
                      <li>操作</li>
                    </ul>
                    <p>这些块可以通过适当的调整来强调不同类型的内容。例如，数字可以通过增加字体大小来起到强调作用。</p>
                    <p>在平板 / 桌面端<strong>，</strong>卡片应该遵守 24dp 的关键线规范。参见 <a href="../layout/metrics-keylines.html#metrics-keylines-keylines-spacing">度量标准 &amp; 关键线</a>。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 84.2105263158%">
                          <img alt="" aria-describedby="content-blocks-figure-caption-0" src="<?php static_url('../static/media/components/cards/components_cards20.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="content-blocks-figure-caption-0">
                        <p>主标题顶部内边距：24dp<br>
                        主标题底部内边距：16dp<br>
                        操作按钮栏内边距：8dp<br>
                        副文本顶部内边距：16dp<br>
                        副文本底部内边距：24dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>内容块类型</h1>
                    <p><strong>富媒体</strong></p>
                    <p>16:9 或 1:1 长宽比（推荐）</p>
                    <p><strong>操作</strong></p>
                    <p>间距：8dp</p>
                    <p><strong>主标题/文本</strong></p>
                    <p>标题：24sp or 14sp<br>
                      副标题：14sp<br>
                      左右内边距：在移动端为 16dp</p>
                    <p>在平板/桌面端<strong>，</strong>卡片应遵循 24dp 的关键线规范。详见<a href="../layout/metrics-keylines.html#metrics-keylines-keylines-spacing">度量标准 &amp; 关键线</a>。</p>
                    <p>顶部内边距：16dp 或 24dp（当存在大的主标题时）<br>
                      底部内边距：16dp（如果有其他操作或副文本）或 24dp（没有操作或副文本）</p>
                    <p><strong>副文本</strong></p>
                    <p>副文本：14sp<br>
                      左右内边距：在移动端为 16dp</p>
                    <p>在平板/桌面端<strong>，</strong>卡片应该遵循 24dp 的关键线规范。详见<a href="../layout/metrics-keylines.html#metrics-keylines-keylines-spacing">度量标准 &amp; 关键线</a>。<br>
                      顶部内边距：16dp<br>
                      底部内边距：24dp（如果下面有其他操作或文本，则为 16dp）</p>
                    <p>项目符号点（不是它们的文本），图片和按钮可以扩展到 16dp 的内边距之外。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 99.6052631579%">
                          <img alt="" src="<?php static_url('../static/media/components/cards/components_cards28.png'); ?>"/>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>卡片集</h1>
                    <p><strong>移动设备上的卡片外边距</strong></p>
                    <p>从屏幕边框到卡片的间距：8dp<br>
                      卡片之间的间距：8dp</p>
                    <p><strong>响应式 UI</strong></p>
                    <p>卡片的槽宽和外边距在较大的屏幕上会发生变化，它们遵循 Material Design 的 8dp 布局。卡片外边距和槽宽可以是 8、16、24 或 40dp。</p>
                    <p>外边距和槽宽不需要相等。例如：可以在一个布局中使用 40dp 的外边距和 24dp 的槽宽。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 67.3684210526%">
                          <video aria-describedby="content-blocks-figure-caption-1" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/components/cards/layout_adaptiveUI_grid_02_margins.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/components/cards/layout_adaptiveUI_grid_02_margins.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="content-blocks-figure-caption-1">
                        <p></p>
                        <p>这个动画显示了下列的外边距和槽宽的变化效果：</p>
                      </figcaption>
                    </figure>
                    <ul class="lst-kix_cflcskz1qeuo-0 start">
                      <li>8dp 外边距和槽宽</li>
                      <li>16dp 外边距和槽宽</li>
                      <li>24dp 外边距和槽宽</li>
                      <li>40dp 外边距和槽宽</li>
                      <li>40dp 外边距，24dp 槽宽</li>
                    </ul>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>海拔高度</strong></p>
                    <p>卡片静止状态海拔高度：2dp<br>
                      卡片浮动状态海拔高度：8dp</p>
                    <p>卡片的默认海拔高度是：2dp.</p>
                    <p>在桌面端，卡片可以拥有 0dp 的静止海拔高度，并且在鼠标悬浮时获得 8dp 的海拔高度。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 57.5%">
                          <img alt="" aria-describedby="content-blocks-figure-caption-2" src="<?php static_url('../static/media/components/cards/components_cards_elevation.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="content-blocks-figure-caption-2">
                        <p>卡片静止状态海拔高度为 2dp，浮动状态海拔高度为 8dp</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 40.3947368421%">
                          <img alt="" aria-describedby="content-blocks-figure-caption-3" src="<?php static_url('../static/media/components/cards/components_cards_elevation_desktop.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="content-blocks-figure-caption-3">
                        <p>在桌面端，卡片的静止状态海拔高度为 0dp（左侧），鼠标悬浮状态为 8dp（右侧）</p>
                        <p>（仅限桌面端）</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <h1>内容块组合</h1>
              <p>以下示例列出了内容块的一些可能组合。</p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>媒体区域</strong></p>
                    <ul class="lst-kix_if9xk86cumf-0 start">
                      <li>16:9 比率</li>
                    </ul>
                    <p><strong>副文本</strong></p>
                    <ul class="lst-kix_lxmx7nviftrj-0 start">
                      <li>文本：14sp</li>
                      <li>左右内边距：16dp</li>
                      <li>顶部内边距：16dp 或 24dp（存在主标题时）</li>
                      <li>底部内边距：16dp（如果有其他操作或副文本），24dp（如果没有操作或副文本）</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 49.4736842105%">
                          <img alt="" src="<?php static_url('../static/media/components/cards/components_cards29.png'); ?>"/>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>头像、标题、副标题区域</strong></p>
                    <ul class="lst-kix_cefnexi6519-0 start">
                      <li>高度：72dp</li>
                      <li>左右内边距：16dp</li>
                      <li>上下内边距：16dp</li>
                    </ul>
                    <p><strong>媒体区域</strong></p>
                    <ul class="lst-kix_fg1c5omc6rb9-0 start">
                      <li>16:9 比率<br></li>
                    </ul>
                    <p><strong>副文本</strong></p>
                    <ul class="lst-kix_gep5cyd9dh7j-0 start">
                      <li>文本：14sp</li>
                    </ul>
                    <ul class="lst-kix_z28tg7fs7td7-0 start">
                      <li>左右内边距：16dp</li>
                      <li>上下内边距：16dp</li>
                    </ul>
                    <p><strong>操作</strong></p>
                    <ul class="lst-kix_w76qg4ak3vvk-0 start">
                      <li>内边距：8dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 64.2105263158%">
                          <img alt="" src="<?php static_url('../static/media/components/cards/components_cards30.png'); ?>"/>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>头像、标题、副标题区域</strong></p>
                    <ul class="lst-kix_rm1mnefsleij-0 start">
                      <li>高度：72dp</li>
                      <li>左右内边距：16dp</li>
                      <li>上下内边距：16dp</li>
                    </ul>
                    <p><strong>媒体区域</strong></p>
                    <ul class="lst-kix_ux2tb7wsr8t5-0 start">
                      <li>16:9 比率</li>
                    </ul>
                    <p><strong>操作</strong></p>
                    <ul class="lst-kix_pojwfg8ze8io-0 start">
                      <li>内边距：8dp</li>
                      <li>操作按钮之间的间距：4dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 58.9473684211%">
                          <img alt="" src="<?php static_url('../static/media/components/cards/components_cards31.png'); ?>"/>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>媒体区域</strong></p>
                    <ul class="lst-kix_5gj48qvvncyt-0 start">
                      <li>16:9 比率</li>
                    </ul>
                    <p><strong>主文本</strong></p>
                    <ul class="lst-kix_iwfkkor9twoy-0 start">
                      <li>文本：24sp</li>
                      <li>顶部内边距：24dp</li>
                      <li>底部内边距：16dp</li>
                      <li>左右内边距：16dp</li>
                    </ul>
                    <p><strong>副文本</strong></p>
                    <ul class="lst-kix_w9izyze1k8bj-0 start">
                      <li>文本：14sp</li>
                      <li>底部内边距：16dp</li>
                      <li>左右内边距：16dp</li>
                    </ul>
                    <p><strong>操作</strong></p>
                    <ul class="lst-kix_s3jsuld3aqy-0 start">
                      <li>内边距：8dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 52.6315789474%">
                          <img alt="" src="<?php static_url('../static/media/components/cards/components_cards32.png'); ?>"/>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>媒体区域</strong></p>
                    <ul class="lst-kix_f7h6nlvyna4c-0 start">
                      <li>16:9 比率</li>
                    </ul>
                    <p><strong>主文本</strong></p>
                    <ul class="lst-kix_digc7593xoke-0 start">
                      <li>文本：24sp</li>
                      <li>顶部内边距：24dp</li>
                      <li>底部内边距：16dp</li>
                      <li>左右内边距：16dp</li>
                    </ul>
                    <p><strong>副文本</strong></p>
                    <ul class="lst-kix_5ekg8ne61bne-0 start">
                      <li>文本：14sp</li>
                      <li>底部内边距：16dp</li>
                      <li>左右内边距：16dp</li>
                    </ul>
                    <p><strong>操作</strong></p>
                    <ul class="lst-kix_zgn73qla5hwm-0 start">
                      <li>内边距：8dp</li>
                    </ul>
                    <p><strong>展开的副文本</strong></p>
                    <ul class="lst-kix_2yb23ci78lly-0 start">
                      <li>文本：14sp</li>
                      <li>顶部内边距：16dp</li>
                      <li>底部内边距：24dp</li>
                      <li>左右内边距：16dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 81.0526315789%">
                          <img alt="" src="<?php static_url('../static/media/components/cards/components_cards33.png'); ?>"/>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>主文本</strong></p>
                    <ul class="lst-kix_vy6murv76g3l-0 start">
                      <li>文本：24sp</li>
                      <li>顶部内边距：24dp</li>
                      <li>底部内边距：16dp</li>
                      <li>左右内边距：16dp</li>
                    </ul>
                    <p><strong>副标题</strong></p>
                    <ul class="lst-kix_vy6murv76g3l-0">
                      <li>顶部内边距：12dp</li>
                      <li>左右内边距：16dp</li>
                    </ul>
                    <p><br><strong>副文本</strong></p>
                    <ul class="lst-kix_v0qc72kabkpf-0 start">
                      <li>文本：14sp</li>
                      <li>底部内边距：16dp</li>
                      <li>左右内边距：16dp</li>
                    </ul>
                    <p><strong>副文本</strong></p>
                    <ul class="lst-kix_lpp8dtqzrq8y-0 start">
                      <li>文本：14sp</li>
                      <li>顶部内边距：16dp</li>
                      <li>底部内边距：16dp</li>
                      <li>左右内边距：16dp</li>
                    </ul>
                    <p><strong>操作</strong></p>
                    <ul class="lst-kix_p07r11cbp05k-0 start">
                      <li>内边距：8dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 54.7368421053%">
                          <img alt="" src="<?php static_url('../static/media/components/cards/components_cards34.png'); ?>"/>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>媒体区域</strong></p>
                    <ul class="lst-kix_yyji7tfee50d-0 start">
                      <li>16:9 比率</li>
                    </ul>
                    <p><strong>操作</strong></p>
                    <ul class="lst-kix_zesvu8percgl-0 start">
                      <li>内边距：8dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 45.2631578947%">
                          <img alt="" src="<?php static_url('../static/media/components/cards/components_cards35.png'); ?>"/>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>媒体区域</strong></p>
                    <ul class="lst-kix_22ppqiw6xto1-0 start">
                      <li>1:1 比率</li>
                    </ul>
                    <p><strong>主文本</strong></p>
                    <ul class="lst-kix_s2g3ninu0noi-0 start">
                      <li>文本：24sp</li>
                      <li>顶部内边距：24dp</li>
                      <li>左右内边距：16dp</li>
                    </ul>
                    <p><br><strong>副文本</strong></p>
                    <ul class="lst-kix_g561ngvd2bd0-0 start">
                      <li>文本：14sp</li>
                      <li>底部内边距：16dp</li>
                      <li>左右内边距：16dp</li>
                    </ul>
                    <p><strong>操作</strong></p>
                    <ul class="lst-kix_g0sq6cfczbtd-0 start">
                      <li>内边距：8dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 58.4210526316%">
                          <img alt="" src="<?php static_url('../static/media/components/cards/components_cards36.png'); ?>"/>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>媒体区域</strong></p>
                    <ul class="lst-kix_sdzvksnsu6ns-0 start">
                      <li>1:1 比率</li>
                    </ul>
                    <p><strong>主文本</strong></p>
                    <ul class="lst-kix_kejbf1otgpmx-0 start">
                      <li>文本：24sp</li>
                    </ul>
                    <p><strong>操作</strong></p>
                    <ul class="lst-kix_744gqmcplfl7-0 start">
                      <li>内边距：8dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 42.6315789474%">
                          <img alt="" src="<?php static_url('../static/media/components/cards/components_cards37.png'); ?>"/>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>媒体区域</strong></p>
                    <ul class="lst-kix_vcr2ibuabnm-0 start">
                      <li>80dp</li>
                      <li>1x</li>
                      <li>顶部内边距 16dp</li>
                    </ul>
                    <p><strong>主文本</strong></p>
                    <ul class="lst-kix_bjnvkx3zoakf-0 start">
                      <li>文本：24sp</li>
                      <li>顶部内边距：24dp</li>
                      <li>左右内边距：16dp<br></li>
                    </ul>
                    <p><strong>副文本</strong></p>
                    <ul class="lst-kix_lsaj3qjmnxpd-0 start">
                      <li>文本：14sp</li>
                      <li>左右内边距：16dp</li>
                    </ul>
                    <p><strong>操作</strong></p>
                    <ul class="lst-kix_92r5yl7olvre-0 start">
                      <li>内边距：8dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 30.0%">
                          <img alt="" src="<?php static_url('../static/media/components/cards/components_cards24.png'); ?>"/>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>媒体区域</strong></p>
                    <ul class="lst-kix_3zw6lupeefzt-0 start">
                      <li>1.5x（基于 80dp 递增）</li>
                      <li>顶部内边距：16dp</li>
                    </ul>
                    <p><strong>主文本</strong></p>
                    <ul class="lst-kix_ydrgs2c8vl1m-0 start">
                      <li>文本：24sp</li>
                      <li>顶部内边距：24dp</li>
                      <li>左右内边距：16dp<br></li>
                    </ul>
                    <p><strong>副文本</strong></p>
                    <ul class="lst-kix_nxc0id1muc26-0 start">
                      <li>文本：14sp</li>
                      <li>左右内边距：16dp</li>
                    </ul>
                    <p><strong>操作</strong></p>
                    <ul class="lst-kix_kbbyqhpd92r2-0 start">
                      <li>内边距：8dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="media" style="max-width: 1520px">
                          <div class="frame " style="padding-top: 31.0526315789%">
                            <img alt="" src="<?php static_url('../static/media/components/cards/components_cards25.png'); ?>"/>
                          </div>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>媒体区域</strong></p>
                    <ul class="lst-kix_13slb6m4ozvf-0 start">
                      <li>2x （基于 80dp 递增）</li>
                      <li>顶部内边距：16dp</li>
                    </ul>
                    <p><strong>主文本</strong></p>
                    <ul class="lst-kix_hlg7v54wtjda-0 start">
                      <li>文本：24sp</li>
                      <li>顶部内边距：24dp</li>
                      <li>左右内边距：16dp<br></li>
                    </ul>
                    <p><strong>副文本</strong></p>
                    <ul class="lst-kix_14h6u4ajubs-0 start">
                      <li>文本：14sp</li>
                      <li>左右内边距：16dp</li>
                    </ul>
                    <p><strong>操作</strong></p>
                    <ul class="lst-kix_p6r1xtlqczwh-0 start">
                      <li>内边距：8dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 37.3684210526%">
                          <img alt="" src="<?php static_url('../static/media/components/cards/components_cards26.png'); ?>"/>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>媒体区域</strong></p>
                    <ul class="lst-kix_qwtmfbdplfju-0 start">
                      <li>3x （基于 80dp 递增）</li>
                      <li>内边距：16dp</li>
                    </ul>
                    <p><strong>操作</strong></p>
                    <ul class="lst-kix_qq24fnjppxii-0 start">
                      <li>四周内边距：8dp + 16dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 44.7368421053%">
                          <img alt="" src="<?php static_url('../static/media/components/cards/components_cards41.png'); ?>"/>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <h1>卡片中的分隔线</h1>
              <p>分隔线可以用于分隔卡片中需要有视觉区分的内容区域。分隔线还可以指示内容展开时的接缝位置。</p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>内容区域可以展开时，应该使用全宽度的分隔线。分隔线可以指示内容展开时的接缝位置。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 81.0526315789%">
                          <img alt="" aria-describedby="content-blocks-figure-caption-4" src="<?php static_url('../static/media/components/cards/components_cards33.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="content-blocks-figure-caption-4">
                        <p>此示例使用全出血分隔线。和可展开列表类似，此卡片使用全宽度的分隔线表示扩展。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module">
                    <p>需要更明确的视觉分离的内容区域应使用分隔线。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1000px">
                        <div class="frame " style="padding-top: 163.9%">
                          <img alt="" aria-describedby="content-blocks-figure-caption-5" src="<?php static_url('../static/media/components/cards/components_cards_action6.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="content-blocks-figure-caption-5">
                        <p>此示例使用全出血分隔线，来分隔滑块和列表。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>使用内嵌式分隔线分隔相关的内容。</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 74.4736842105%">
                          <img alt="" aria-describedby="content-blocks-figure-caption-6" src="<?php static_url('../static/media/components/cards/components_cards_action4.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="content-blocks-figure-caption-6">
                        <p>此示例使用内嵌式分隔线把餐厅信息和预定部分分离。</p>
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