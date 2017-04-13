<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <p>副标题是用于描述列表或网格列表中的一部分的列表瓦片。</p>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p><strong>副标题</strong>可以显示在瓦片中或者与内容相关联。它们通常与过滤或排序标准有关。</p>
                <p>滚动时，子标题固定在屏幕顶部，直到被下一个子标题推离屏幕。</p>
              </div>
              <div class="module">
                <h3>副标题类型</h3>
                <p><a href="subheaders.html#subheaders-list-subheaders">列表</a><br>
                  <a href="subheaders.html#subheaders-grid-subheaders">网格</a><br>
                  <a href="subheaders.html#subheaders-menu-subheaders">菜单</a></p>
                <h3>字体</h3>
                <p>Roboto Medium 14sp</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 3000px">
                    <div class="frame " style="padding-top: 100.0%">
                      <img alt=""  src="<?php static_url('../static/media/components/subheaders/components_subheaders.png'); ?>"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="subheaders.html#subheaders-list-subheaders" data-qp-ui-data-id="qp:1">列表副标题</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="subheaders.html#subheaders-grid-subheaders" data-qp-ui-data-id="qp:2">网格副标题</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="subheaders.html#subheaders-menu-subheaders" data-qp-ui-data-id="qp:3">菜单副标题</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="subheaders-list-subheaders" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            列表副标题
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
                  <div class="module"><h1>规格</h1>
                    <p>瓦片高度：48dp<br>
                      副标题字体：Roboto Medium 14sp</p>
                    <p><strong>颜色</strong></p>
                    <p>副标题的颜色可以是灰色文本值（54% 黑色）或者应用的主色。</p>
                    <p>在含复杂信息的长列表中，考虑使用彩色副标题来描述内容。Android 的设置功能包含了一个使用彩色副标题的示例。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 80.0%">
                          <img alt="" aria-describedby="list-subheaders-figure-caption-1" src="<?php static_url('../static/media/components/subheaders/components_subheaders1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="list-subheaders-figure-caption-1">
                        <p>灰色副标题</p>
                        <p>内边距：16dp<br>
                          副标题瓦片高度：48dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="list-subheaders-figure-caption-2" src="<?php static_url('../static/media/components/subheaders/components_subheaders2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="list-subheaders-figure-caption-2">
                        <p>邮件收件箱中的灰色副标题</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p><strong>对齐方式</strong></p>
                    <p>在列表中，副标题应该与头像/图标左对齐，除非在那个空间有更高级的操作。</p>
                    <p>如果有一个浮动操作按钮和列表中的头像/图标左对齐，那么把副标题和文本内容对齐。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 80.0%">
                          <img alt="" aria-describedby="list-subheaders-figure-caption-3" src="<?php static_url('../static/media/components/subheaders/components_subheaders3.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="list-subheaders-figure-caption-3">
                        <p>含有左对齐的浮动操作按钮时，副标题和文本内容对齐。</p>
                        <p>副标题瓦片高度：48dp<br>
                          浮动操作按钮瓦片宽度：72dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="list-subheaders-figure-caption-4" src="<?php static_url('../static/media/components/subheaders/components_subheaders4.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="list-subheaders-figure-caption-4">
                        <p>这个副标题使用应用的主色，并且和文本对齐，因为它有一个左对齐的浮动操作按钮。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="subheaders-grid-subheaders" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            网格副标题
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
                  <div class="module"><p>瓦片高度：48dp<br>
                    副标题字体：Roboto Medium 14sp<br>
                    副标题和左边缘有 16dp 的间距</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 77.7777777778%">
                          <img alt="" aria-describedby="grid-subheaders-figure-caption-1" src="<?php static_url('../static/media/components/subheaders/components_subheaders5.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="grid-subheaders-figure-caption-1">
                        <p>这个副标题和左边缘有 16dp 的间距。网格副标题瓦片的高度是 48dp。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="grid-subheaders-figure-caption-2" src="<?php static_url('../static/media/components/subheaders/components_subheaders6.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="grid-subheaders-figure-caption-2">
                        <p>用于表示相册中的月份的网格副标题</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="subheaders-menu-subheaders" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            菜单副标题
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
                    <p>瓦片高度：48dp<br>
                    副标题字体：Roboto Medium 14sp<br>
                    副标题和左边缘有 16dp 的间距</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 57.7777777778%">
                          <img alt="" aria-describedby="menu-subheaders-figure-caption-1" src="<?php static_url('../static/media/components/subheaders/components_subheaders7.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="menu-subheaders-figure-caption-1">
                        <p>菜单副标题规格</p>
                        <p>副标题和左边缘的间距：16dp<br>
                          瓦片高度：48dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="menu-subheaders-figure-caption-2" src="<?php static_url('../static/media/components/subheaders/components_subheaders8.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="menu-subheaders-figure-caption-2">
                        <p>菜单副标题示例</p>
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