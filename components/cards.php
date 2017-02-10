<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <p>卡片通常是通往详细信息的入口。</p>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>卡片可以包含一个主题的照片、文字和链接。它们可以显示包含不同尺寸的元素的内容，例如有可变长度标题的照片。</p>
                <p>卡片集是多个卡片在同一平面上的布局结构。</p>
              </div>
              <div class="module">
                <h3><strong>用法</strong></h3>
                <p>卡片显示由不同元素组成的内容，其大小和支持的操作不同。</p>

                <h3><strong>支持的手势</strong></h3>
                <p>滑动<br>
                  拾起并移动</p>

                <h3><strong>相关组件</strong></h3>
                <p><a href="grid-lists.html">网格列表</a></p>

                <h3><strong>给开发人员</strong></h3>
                <p>
                  <a href="https://www.google.com/url?q=http://developer.android.com/index.html&amp;sa=D&amp;ust=1481817970288000&amp;usg=AFQjCNGDCjHsLwZxRyFZiza53UXMMl_Prg" target="_blank">Android 卡片</a><br>
                  <a href="https://www.google.com/url?q=https://www.polymer-project.org/1.0/&amp;sa=D&amp;ust=1481817970289000&amp;usg=AFQjCNGE4vO4lDdu1AKO1gSMoZknFYWhxQ" target="_blank">Polymer 卡片</a>
                </p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/components/cards/components_cards.png"/>
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
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards1.png"/>
                      </div>
                      <figcaption>
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
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards2.png"/>
                      </div>
                      <figcaption>
                        <p>卡片集的例子</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards3.png"/>
                      </div>
                      <figcaption>
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
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards6.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>1. 卡片带圆角。<br>
                          2. 卡片可以带有多种操作。<br>
                          3. 卡片可以被移除和重新排列。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards7.png"/>
                      </div>
                      <figcaption>
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
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards8.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>列表可以进行快速浏览，用列表代替卡片，来展示操作不多的同类内容，是一个更合适的方法。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards9.png"/>
                      </div>
                      <figcaption>
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
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards10.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>用网格瓷砖来展示相册，是一种干净又轻巧的方式。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards11.png"/>
                      </div>
                      <figcaption>
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
                    <h2><strong><strong>内容层次结构</strong></strong></h2>
                    <p>使用卡片的层次结构来把用户的注意力引导到最重要的信息上。例如，把重要内容放在卡片的顶部，或使用排版来强调重要内容。</p>
                    <p>图片可以进一步加深卡片中的其他内容。然而，它们在卡片中的尺寸和位置取决于图片是主要内容还是用于补充卡片中的其他内容。</p>
                    <p><strong>背景图</strong></p>
                    <p>在与文本具有足够对比度的纯色背景上，文本最清晰。把文本放在背景图片上时，应保持文本的可读性。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_content1.png"/>
                      </div>
                      <figcaption>
                        <p>该卡片集包含拥有不同布局的卡片。</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_content2.png"/>
                      </div>
                      <figcaption>
                        <p>该卡片集包含拥有不同类型和布局的卡片。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_content3.png"/>
                      </div>
                      <figcaption>
                        <p>排版可以强调主要内容。</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_content4.png"/>
                      </div>
                      <figcaption>
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
              <p>卡片具有恒定的宽度和可变的高度。最大高度限制为平台上可用空间的高度，但是可以临时展开（例如，显示注释字段）。</p>
              <p>卡片不会翻转来显示背面的信息。</p>
              <h1>支持的手势</h1>
              <p>卡片的手势在卡片集中同样适用。</p>
              <p>支持的手势包括：</p>
              <ul class="lst-kix_s5w344fogft3-0 start">
                <li><strong>滑动手势</strong> 可以用在每张卡片上。卡片内部的元素不应使用滑动手势，以避免它们相互重叠。例如，可滑动的卡片内部不应包含可滑动的图像轮播组件，以确保在滑动时只会触发单个动作。</li>
                <li><strong>拾取并移动手势</strong> 可以在需要对卡片集中的卡片进行排序时使用。但是，也应该考虑是否使用过滤或排序功能可以更好地组织内容。</li>
              </ul>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>卡片集的过滤和排序</h1>
                    <p>卡片集可以按日期、文件大小、字母顺序或其他参数以编程方式排序或过滤。</p>
                    <ul class="lst-kix_k88e5oocs0bw-0 start">
                      <li>卡片集中的第一张卡片位于左上角。</li>
                      <li>卡片以从左到右、从上到下的顺序排列。</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_behavior1.png"/>
                      </div>
                      <figcaption>
                        <p>卡片以从左到右、从上到下的顺序排列。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h1>滚动</h1>
                    <p>卡片集只能垂直滚动。</p>
                    <p>超过卡片最大高度的卡片内容会被截断，不会滚动，但是卡片可以展开。展开后，卡片可能会超出视图的最大高度。在这种情况下，卡片将于卡片集一起滚动。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_behavior2.png"/>
                      </div>
                      <figcaption>
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
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_behavior5.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>卡片可以展开以显示更多内容，无需使用滚动。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_behavior4.png"/>
                      </div>
                      <figcaption>
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
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_behavior3.png"/>
                      </div>
                      <figcaption>
                        <p>在桌面端，卡片内容可以展开和滚动。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>卡片焦点</h1>
                    <p>当在卡片上遍历焦点时，在焦点切换到下一张卡片之前，应该能够遍历到所有卡片内能获得焦点的元素。</p>
                    <p>对于依赖焦点遍历进行导航的设备（D-pad 和键盘），卡片应该拥有主操作，或者打开一个包含主操作和补充操作的新视图。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_behavior6.png"/>
                      </div>
                      <figcaption>
                        <p>遍历焦点时选中一个操作</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_behavior7.png"/>
                      </div>
                      <figcaption>
                        <p>Expanded supporting text made visible, with the focus then placed on a supplemental action</p>
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
            Actions
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
                    <p>The primary action in a card is typically the card itself.</p>
                    <p>Supplemental actions can vary from card to card in a collection, depending on the content type and expected outcome; for example, playing a movie versus opening a book. Within cards in a collection, position actions consistently. </p>
                    <h2><strong><strong>Supplemental actions </strong></strong></h2>
                    <p>Supplemental actions within the card are explicitly called out using icons, text, and UI controls, typically placed at the bottom of the card.</p>
                    <p>Limit supplemental actions to two actions, in addition to an overflow menu.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards16.png"/>
                      </div>
                      <figcaption>
                        <p>Card with action area, rich media and supporting text</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards17.png"/>
                      </div>
                      <figcaption>
                        <p>Card with action areas 1 and 2, optional header, rich media, supporting text, and supplemental actions</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards18.png"/>
                      </div>
                      <figcaption>
                        <p>Card with action areas 1, 2, 3 and 4, optional header, rich media, and supplemental actions</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards19.png"/>
                      </div>
                      <figcaption>
                        <p>Card with action areas 1 and 2, optional header, supporting text and supplemental actions</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong>UI controls</strong></h2>
                    <p>UI controls, like a slider, placed inline with primary content can modify the view of the primary content. For example, a slider to choose a day, stars to rate content, or a segmented button to select a date range.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_action1.png"/>
                      </div>
                      <figcaption>
                        <p>This card contains UI controls within the action area block</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_action4.png"/>
                      </div>
                      <figcaption>
                        <p>This card contains segmented buttons within the action area block. </p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_action6.png"/>
                      </div>
                      <figcaption>
                        <p>This card contains a slider control within the action area block.</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_action5.png"/>
                      </div>
                      <figcaption>
                        <p>This card contains tabs within the action area block. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong>Overflow menu (optional)</strong></h2>
                    <p>An overflow menu is typically placed in the upper-right corner of a card, but can be placed in the lower-right corner if doing so improves content layout and legibility.</p>
                    <p>Take care not to overload an overflow menu with too many actions.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_overflow.png"/>
                      </div>
                      <figcaption>
                        <p>This card contains an overflow menu in the top right. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong><strong>Additional actions</strong></strong></h2>
                    <p>Inline links within text content are strongly discouraged.</p>
                    <p>Although cards can support multiple actions, UI controls, and an overflow menu, use restraint and remember that cards are entry points to more complex and detailed information.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_action2-do.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>Use cards as an entry point to more detailed information. </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_action3-dont.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>Cards provide context and an entry point to more robust information and views. Don't overload cards with extraneous information or actions. Inline links within text content are strongly discouraged.</p>
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
            Content blocks
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
                    <p>Cards can be constructed using blocks of content which include:</p>
                    <ul class="lst-kix_an4kdbg3r80d-0 start">
                      <li>An optional header</li>
                      <li>A primary title</li>
                      <li>Rich media</li>
                      <li>Supporting text</li>
                      <li>Actions</li>
                    </ul>
                    <p>These blocks can be organized to promote different types of content. For example, numbers may be emphasized by increasing their typographic scale.</p>
                    <p>On tablet/desktop<strong>, </strong>cards should follow the 24dp keyline. See <a href="../layout/metrics-keylines.html#metrics-keylines-keylines-spacing">Metrics &amp; Keylines</a> for more information.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards20.png"/>
                      </div>
                      <figcaption>
                        <p>Primary title top padding: 24dp<br>
                        Primary title bottom padding: 16dp<br>
                        Action button row padding: 8dp<br>
                        Supporting text top padding: 16dp<br>
                        Supporting text bottom padding: 24dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Content block types</h1>
                    <p><strong>Rich media</strong></p>
                    <p>16:9 or 1:1 aspect ratio (recommended)</p>
                    <p><strong>Actions</strong></p>
                    <p>Padding: 8dp</p>
                    <p><strong>Primary title/text</strong></p>
                    <p>Title: 24sp or 14sp<br>
                      Subtitle: 14sp<br>
                      Left and right padding: 16dp on mobile </p>
                    <p>On tablet/desktop<strong>, </strong>cards should follow the 24dp keyline. See <a href="../layout/metrics-keylines.html#metrics-keylines-keylines-spacing">Metrics &amp; Keylines</a> for more information.</p>
                    <p>Top padding: 16dp or 24dp (when a large primary title is present)<br>
                      Bottom padding: 16dp (if there are additional actions or supporting text) or 24dp (no actions or supporting text) </p>
                    <p><strong>Supporting text</strong></p>
                    <p>Supporting text: 14sp<br>
                      Left and right padding: 16dp on mobile </p>
                    <p>On tablet/desktop<strong>, </strong>cards should follow the 24dp keyline. See <a href="../layout/metrics-keylines.html#metrics-keylines-keylines-spacing">Metrics &amp; Keylines</a> for more information.<br>
                      Top padding: 16dp<br>
                      Bottom padding: 24dp (16dp if there are additional actions or text below)</p>
                    <p>Bullet points (but not their text), images, and buttons may extend outside of the 16dp padding.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards28.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h1><strong>Card collections </strong></h1>
                    <p><strong>Card margins on mobile</strong></p>
                    <p>Padding from edge of screen to card: 8dp<br>
                      Space between cards: 8dp</p>
                    <p><strong>Responsive UI</strong></p>
                    <p>Card gutters and margins may vary on larger screen sizes, as long as they follow Material Design 8dp grid. Card margins and gutters can be 8, 16, 24, or 40dp wide.</p>
                    <p>Margins and gutters don’t need to be equal. For example, both 40dp margins and 24dp gutters can be used in the same layout.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/cards/layout_adaptiveUI_grid_02_margins.webm" type="video/webm">
                            <source src="../static/media/components/cards/layout_adaptiveUI_grid_02_margins.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p></p>
                        <p>This animation shows interactions of the following margin and gutter width variations:</p>
                        <ul class="lst-kix_cflcskz1qeuo-0 start">
                          <li>8dp margins and gutters</li>
                          <li>16dp margins and gutters</li>
                          <li>24dp margins and gutters</li>
                          <li>40dp margins and gutters</li>
                          <li>40dp margins and 24dp gutters</li>
                        </ul>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Elevation</strong></p>
                    <p>Card resting elevation: 2dp<br>
                      Card raised elevation: 8dp</p>
                    <p>Cards have a default elevation of 2dp.</p>
                    <p>On desktop, cards can have a resting elevation of 0dp and gain an elevation of 8dp on hover.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_elevation.png"/>
                      </div>
                      <figcaption>
                        <p>Card resting elevation of 2dp, and raised elevation of 8dp</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_elevation_desktop.png"/>
                      </div>
                      <figcaption>
                        <p>On desktop, cards have a resting elevation of 0dp (left), and an elevation of 8dp on hover (right)</p>
                        <p> (desktop only)</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <h1>Content block combinations</h1>
              <p>The following examples illustrate some possible combinations of content blocks.</p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Media area</strong></p>
                    <ul class="lst-kix_if9xk86cumf-0 start">
                      <li>16:9 ratio</li>
                    </ul>
                    <p><strong>Supporting text</strong></p>
                    <ul class="lst-kix_lxmx7nviftrj-0 start">
                      <li>Text: 14sp</li>
                      <li>Left and right padding: 16dp</li>
                      <li>Top padding: 16dp or 24dp (when a primary title is present)</li>
                      <li>Bottom padding: 16dp (if there are additional actions or supporting text) or 24dp (if there are no actions or supporting text)</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards29.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Avatar, Title, and Subtitle area</strong></p>
                    <ul class="lst-kix_cefnexi6519-0 start">
                      <li>Height: 72dp</li>
                      <li>Left and right padding: 16dp</li>
                      <li>Top and bottom padding: 16dp</li>
                    </ul>
                    <p><strong>Media area</strong></p>
                    <ul class="lst-kix_fg1c5omc6rb9-0 start">
                      <li>16:9 ratio<br></li>
                    </ul>
                    <p><strong>Supporting text</strong></p>
                    <ul class="lst-kix_gep5cyd9dh7j-0 start">
                      <li>Text: 14sp</li>
                    </ul>
                    <ul class="lst-kix_z28tg7fs7td7-0 start">
                      <li>Left and right padding: 16dp</li>
                      <li>Top and bottom padding: 16dp</li>
                    </ul>
                    <p><strong>Actions</strong></p>
                    <ul class="lst-kix_w76qg4ak3vvk-0 start">
                      <li>Padding: 8dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards30.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Avatar, Title, and Subtitle area</strong></p>
                    <ul class="lst-kix_rm1mnefsleij-0 start">
                      <li>Height: 72dp</li>
                      <li>Left and right padding: 16dp</li>
                      <li>Top and bottom padding: 16dp</li>
                    </ul>
                    <p><strong>Media area </strong></p>
                    <ul class="lst-kix_ux2tb7wsr8t5-0 start">
                      <li>16:9 ratio</li>
                    </ul>
                    <p><strong>Actions</strong></p>
                    <ul class="lst-kix_pojwfg8ze8io-0 start">
                      <li>Padding: 8dp</li>
                      <li>Padding between actions: 4dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards31.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Media area</strong></p>
                    <ul class="lst-kix_5gj48qvvncyt-0 start">
                      <li>16:9 ratio</li>
                    </ul>
                    <p><strong>Primary text</strong></p>
                    <ul class="lst-kix_iwfkkor9twoy-0 start">
                      <li>Text: 24sp</li>
                      <li>Top padding: 24dp</li>
                      <li>Bottom padding: 16dp</li>
                      <li>Right and left padding: 16dp</li>
                    </ul>
                    <p><strong>Subtext</strong></p>
                    <ul class="lst-kix_w9izyze1k8bj-0 start">
                      <li>Text: 14sp</li>
                      <li>Bottom padding: 16dp</li>
                      <li>Right and left padding: 16dp</li>
                    </ul>
                    <p><strong>Actions</strong></p>
                    <ul class="lst-kix_s3jsuld3aqy-0 start">
                      <li>Padding: 8dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards32.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Media area</strong></p>
                    <ul class="lst-kix_f7h6nlvyna4c-0 start">
                      <li>16:9 ratio</li>
                    </ul>
                    <p><strong>Primary text</strong></p>
                    <ul class="lst-kix_digc7593xoke-0 start">
                      <li>Text: 24sp</li>
                      <li>Top padding: 24dp</li>
                      <li>Bottom padding: 16dp</li>
                      <li>Right and left padding: 16dp</li>
                    </ul>
                    <p><strong>Subtext</strong></p>
                    <ul class="lst-kix_5ekg8ne61bne-0 start">
                      <li>Text: 14sp</li>
                      <li>Bottom padding: 16dp</li>
                      <li>Right and left padding: 16dp</li>
                    </ul>
                    <p><strong>Actions</strong></p>
                    <ul class="lst-kix_zgn73qla5hwm-0 start">
                      <li>Padding: 8dp</li>
                    </ul>
                    <p><strong>Expanded supporting text</strong></p>
                    <ul class="lst-kix_2yb23ci78lly-0 start">
                      <li>Text: 14sp</li>
                      <li>Top padding: 16dp</li>
                      <li>Bottom padding: 24dp</li>
                      <li>Right and left padding: 16dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards33.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Primary text</strong></p>
                    <ul class="lst-kix_vy6murv76g3l-0 start">
                      <li>Text: 24sp</li>
                      <li>Top padding: 24dp</li>
                      <li>Bottom padding: 16dp</li>
                      <li>Right and left padding: 16dp</li>
                    </ul>
                    <p><strong>Subtitle</strong></p>
                    <ul class="lst-kix_vy6murv76g3l-0">
                      <li>Top padding: 12dp</li>
                      <li>Right and left padding: 16dp</li>
                    </ul>
                    <p><br><strong>Subtext</strong></p>
                    <ul class="lst-kix_v0qc72kabkpf-0 start">
                      <li>Text: 14sp</li>
                      <li>Bottom padding: 16dp</li>
                      <li>Right and left padding: 16dp</li>
                    </ul>
                    <p><strong>Supporting text</strong></p>
                    <ul class="lst-kix_lpp8dtqzrq8y-0 start">
                      <li>Text: 14sp</li>
                      <li>Top padding: 16dp</li>
                      <li>Bottom padding: 16dp</li>
                      <li>Right and left padding: 16dp</li>
                    </ul>
                    <p><strong>Actions</strong></p>
                    <ul class="lst-kix_p07r11cbp05k-0 start">
                      <li>Padding: 8dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards34.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Media area </strong></p>
                    <ul class="lst-kix_yyji7tfee50d-0 start">
                      <li>16:9 ratio</li>
                    </ul>
                    <p><strong>Actions</strong></p>
                    <ul class="lst-kix_zesvu8percgl-0 start">
                      <li>Padding: 8dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards35.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Media area </strong></p>
                    <ul class="lst-kix_22ppqiw6xto1-0 start">
                      <li>1:1 ratio</li>
                    </ul>
                    <p><strong>Primary text</strong></p>
                    <ul class="lst-kix_s2g3ninu0noi-0 start">
                      <li>Text: 24sp</li>
                      <li>Top padding: 24dp</li>
                      <li>Right and left padding: 16dp</li>
                    </ul>
                    <p><br><strong>Subtext</strong></p>
                    <ul class="lst-kix_g561ngvd2bd0-0 start">
                      <li>Text: 14sp</li>
                      <li>Bottom padding: 16dp</li>
                      <li>Right and left padding: 16dp</li>
                    </ul>
                    <p><strong>Actions</strong></p>
                    <ul class="lst-kix_g0sq6cfczbtd-0 start">
                      <li>Padding: 8dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards36.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Media area </strong></p>
                    <ul class="lst-kix_sdzvksnsu6ns-0 start">
                      <li>1:1 ratio</li>
                    </ul>
                    <p><strong>Primary text</strong></p>
                    <ul class="lst-kix_kejbf1otgpmx-0 start">
                      <li>Text: 24sp</li>
                    </ul>
                    <p><strong>Actions</strong></p>
                    <ul class="lst-kix_744gqmcplfl7-0 start">
                      <li>Padding: 8dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards37.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Media area </strong></p>
                    <ul class="lst-kix_vcr2ibuabnm-0 start">
                      <li>80dp</li>
                      <li>1x</li>
                      <li>Top padding: 16dp</li>
                    </ul>
                    <p><strong>Primary text</strong></p>
                    <ul class="lst-kix_bjnvkx3zoakf-0 start">
                      <li>Text: 24sp</li>
                      <li>Top padding: 24dp</li>
                      <li>Right and left padding: 16dp<br></li>
                    </ul>
                    <p><strong>Subtext</strong></p>
                    <ul class="lst-kix_lsaj3qjmnxpd-0 start">
                      <li>Text: 14sp</li>
                      <li>Right and left padding: 16dp</li>
                    </ul>
                    <p><strong>Actions</strong></p>
                    <ul class="lst-kix_92r5yl7olvre-0 start">
                      <li>Padding: 8dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards24.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Media area </strong></p>
                    <ul class="lst-kix_3zw6lupeefzt-0 start">
                      <li>1.5x (Increment size based on 80dp media area)</li>
                      <li>Top padding: 16dp</li>
                    </ul>
                    <p><strong>Primary text</strong></p>
                    <ul class="lst-kix_ydrgs2c8vl1m-0 start">
                      <li>Text: 24sp</li>
                      <li>Top padding: 24dp</li>
                      <li>Right and left padding: 16dp<br></li>
                    </ul>
                    <p><strong>Subtext</strong></p>
                    <ul class="lst-kix_nxc0id1muc26-0 start">
                      <li>Text: 14sp</li>
                      <li>Right and left padding: 16dp</li>
                    </ul>
                    <p><strong>Actions</strong></p>
                    <ul class="lst-kix_kbbyqhpd92r2-0 start">
                      <li>Padding: 8dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards25.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Media area </strong></p>
                    <ul class="lst-kix_13slb6m4ozvf-0 start">
                      <li>2x (Increment size based on 80dp media area)</li>
                      <li>Top padding: 16dp</li>
                    </ul>
                    <p><strong>Primary text</strong></p>
                    <ul class="lst-kix_hlg7v54wtjda-0 start">
                      <li>Text: 24sp</li>
                      <li>Top padding: 24dp</li>
                      <li>Right and left padding: 16dp<br></li>
                    </ul>
                    <p><strong>Subtext</strong></p>
                    <ul class="lst-kix_14h6u4ajubs-0 start">
                      <li>Text: 14sp</li>
                      <li>Right and left padding: 16dp</li>
                    </ul>
                    <p><strong>Actions</strong></p>
                    <ul class="lst-kix_p6r1xtlqczwh-0 start">
                      <li>Padding: 8dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards26.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Media area </strong></p>
                    <ul class="lst-kix_qwtmfbdplfju-0 start">
                      <li>3x (Increment size based on 80dp media area)</li>
                      <li>Padding: 16dp</li>
                    </ul>
                    <p><strong>Actions</strong></p>
                    <ul class="lst-kix_qq24fnjppxii-0 start">
                      <li>All around padding: 8dp + 16dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards41.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <h1>Dividers in cards</h1>
              <p>Dividers may be used to separate content areas in cards that require distinct visual separation. Dividers may also indicate seams in places where material may expand.</p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Content areas that can be expanded should use full-width dividers. Dividers can indicate seams in material where the material will expand when content is expanded.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards33.png"/>
                      </div>
                      <figcaption>
                        <p>This example uses a full-bleed divider. Similar to expansion of lists, this card uses a full-width divider to denote expansion.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module">
                    <p>Content areas that need more distinct visual separation should use dividers.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_action6.png"/>
                      </div>
                      <figcaption>
                        <p>This example uses a full-bleed divider as a way to visually separate the slider content and list from the action below. </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Use inset dividers to separate related content. </p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_action4.png"/>
                      </div>
                      <figcaption>
                        <p>This example uses an inset divider to separate related the restaurant information from the booking section. </p>
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