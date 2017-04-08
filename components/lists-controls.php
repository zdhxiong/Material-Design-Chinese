<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <p>列表控件为列表项提供信息和操作。</p>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module"><p>列表控件提供列表项的信息、指示状态或显示操作。列表控件以图标的形式显示在文本左侧或右侧。</p>
                <p>列表控件位置：</p>
                <ul class="lst-kix_xecwe92rumht-0 start">
                  <li>状态和主操作放在列表瓦片的左侧。</li>
                  <li>副操作和信息放在瓦片的右侧。</li>
                </ul>
              </div>
              <div class="module">
                <h3><strong>类型</strong></h3>
                <p>复选框<br>
                  开关<br>
                  重新排序<br>
                  展开/折叠<br>
                  滑动隐藏控件</p>

                <h3><strong>菜单控件</strong></h3>
                <p>选中<br>
                  内联信息<br>
                  嵌套菜单标识</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 3000px">
                    <div class="frame " style="padding-top: 100.0%">
                      <img alt="" src="<?php static_url('../static/media/components/lists-controls/components_lists_controls.png'); ?>"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="lists-controls.html#lists-controls-usage" data-qp-ui-data-id="qp:1">用法</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="lists-controls.html#lists-controls-types-of-list-controls" data-qp-ui-data-id="qp:2">列表控件类型</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="lists-controls.html#lists-controls-types-of-menu-controls" data-qp-ui-data-id="qp:3">菜单控件类型</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="lists-controls-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
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
                    <p>列表控件分为四类：</p>
                    <ul class="lst-kix_dgrepbta7m6r-0 start">
                      <li>状态</li>
                      <li>主操作（包括文本字符串）</li>
                      <li>副操作</li>
                      <li>副信息</li>
                    </ul>
                    <p>列表瓦片中容易分辨的元素需要放在左侧，以符合用户从左到右的阅读顺序，反之同理。状态和主操作放在列表瓦片的左侧。列表项中的文本也被认为是主操作的操作目标的一部分。</p>
                    <p>不要把两个图标或操作放在一起，例如复选框和头像。</p>
                    <p>如果列表项的主要操作是导航，那么就不要使用图标。列表项本身以及它的上下文就足以让用户明白这个列表的用处是什么。</p>
                    <p>副操作和信息应该放在标题的右侧。副操作通常要和主操作分开，可以单独点击，因为用户越来越希望每个图标都能触发一个动作。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 49.7368421053%">
                          <img alt="" aria-describedby="usage-figure-caption-1" src="<?php static_url('../static/media/components/lists-controls/components_listcontrols_usage.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-1">
                        <p>状态和主操作放在瓦片的左侧。副操作和副信息放在标题的右侧。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="lists-controls-types-of-list-controls" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            列表控件类型
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
                    <h1>复选框</h1>
                    <p>复选框可以作为主操作，也可以作为副操作。</p>
                    <p>类型：主操作/状态</p>
                    <p>桌面端的复选框应该只在鼠标悬停和获取焦点时显示。</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 37.8947368421%">
                          <img alt="" aria-describedby="types-of-list-controls-figure-caption-1" src="<?php static_url('../static/media/components/lists-controls/components_listcontrols_checkbox1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="types-of-list-controls-figure-caption-1">
                        <p>在这个列表中，复选框是主操作和状态标识符。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>类型：副操作</p>
                    <p>单独可点击</p>
                    <p>当控制一系列变量，而不仅仅只是控制一个变量的情况下，考虑使用开关控件来代替。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 41.0526315789%">
                          <img alt="" aria-describedby="types-of-list-controls-figure-caption-2" src="<?php static_url('../static/media/components/lists-controls/components_listcontrols_checkbox2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="types-of-list-controls-figure-caption-2">
                        <p>在这个列表中，复选框是副操作。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>开关</h1>
                    <p>类型：副操作</p>
                    <p>单独可点击</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 37.8947368421%">
                          <img alt="" aria-describedby="types-of-list-controls-figure-caption-3" src="<?php static_url('../static/media/components/lists-controls/components_listcontrols_switch.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="types-of-list-controls-figure-caption-3">
                        <p>开关是次要操作，单独可点击。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>重新排序</h1>
                    <p>类型：副操作</p>
                    <p>通常是单独可点击的，视当前列表所处的模式而定。</p>
                    <p>该操作允许用户把列表项拖动到列表中的其他位置。通常出现在列表编辑模式下。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 41.0526315789%">
                          <img alt="" aria-describedby="types-of-list-controls-figure-caption-4" src="<?php static_url('../static/media/components/lists-controls/components_listcontrols_reorder.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="types-of-list-controls-figure-caption-4">
                        <p>重新排序图标是列表项的副操作。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>展开/折叠</h1>
                    <p>类型：副操作</p>
                    <p>单独可点击</p>
                    <p>垂直展开或折叠一个列表来显示或隐藏列表项的详细信息。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="types-of-list-controls-figure-caption-5" src="<?php static_url('../static/media/components/lists-controls/components_listcontrols_expand1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="types-of-list-controls-figure-caption-5">
                        <p>触摸列表控件，可以展开列表。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="types-of-list-controls-figure-caption-6" src="<?php static_url('../static/media/components/lists-controls/components_listcontrols_expand2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="types-of-list-controls-figure-caption-6">
                        <p>这个列表已经展开。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 73.3333333333%">
                          <img alt="" aria-describedby="types-of-list-controls-figure-caption-7" src="<?php static_url('../static/media/components/lists-controls/components_listcontrols_expand3.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="types-of-list-controls-figure-caption-7">
                        <p>折叠的单行列表项</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 73.3333333333%">
                          <img alt="" aria-describedby="types-of-list-controls-figure-caption-8" src="<?php static_url('../static/media/components/lists-controls/components_listcontrols_expand4.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="types-of-list-controls-figure-caption-8">
                        <p>展开的单行列表项</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>滑动隐藏控件</h1>
                    <p>类型：其他</p>
                    <p>滑动隐藏控件是当某一列表项被滑开之后的操作提示。滑动隐藏控件可以被转换成一项操作。</p>
                    <p>无论从哪个方向滑动列表，都会出现操作图标，滑动了之后，操作图标就会居中显示在列表空白处。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="types-of-list-controls-figure-caption-9" src="<?php static_url('../static/media/components/lists-controls/components_listcontrols_leave1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="types-of-list-controls-figure-caption-9">
                        <p>从右向左滑动一个列表项将会显示一个操作图标。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="types-of-list-controls-figure-caption-10" src="<?php static_url('../static/media/components/lists-controls/components_listcontrols_leave2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="types-of-list-controls-figure-caption-10">
                        <p>从左向右滑动一个列表项将会显示一个操作图标。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="lists-controls-types-of-menu-controls" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            菜单控件类型
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div><p>菜单是一种特殊类型的列表。在菜单中，使用适合于下拉菜单和弹出菜单的控件。不要在常规列表中使用这些控件。</p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>选中</h1>
                    <p>类型：状态</p>
                    <p>非单独可点击。</p>
                    <p>仅适用于菜单。用于表示当前列表项已被选中。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 37.8947368421%">
                          <img alt="" aria-describedby="types-of-menu-controls-figure-caption-1" src="<?php static_url('../static/media/components/lists-controls/components_listcontrols_menu1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="types-of-menu-controls-figure-caption-1">
                        <p>打勾表示列表项已被选中。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>内联信息</h1>
                    <p>类型：次要信息</p>
                    <p>非单独可点击。</p>
                    <p>仅适用于菜单。内联信息是列表中的一小段和当前标题相关的文字，用于提供相关信息或提示，比如快捷键。它不能被截断。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 37.8947368421%">
                          <img alt="" aria-describedby="types-of-menu-controls-figure-caption-2" src="<?php static_url('../static/media/components/lists-controls/components_listcontrols_menu2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="types-of-menu-controls-figure-caption-2">
                        <p>加粗、斜体和下划线等内联信息提供了快捷键。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>嵌套菜单标识</h1>
                    <p>类型：主操作</p>
                    <p>非单独可点击。</p>
                    <p>仅适用于菜单。该符号表示子菜单可以通过鼠标悬停、聚焦、选择等方式弹出。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 33.6842105263%">
                          <img alt="" aria-describedby="types-of-menu-controls-figure-caption-3" src="<?php static_url('../static/media/components/lists-controls/components_listcontrols_menu3.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="types-of-menu-controls-figure-caption-3">
                        <p>菜单项中的符号表示子菜单会通过鼠标悬停、聚焦、选择等方式弹出。</p>
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