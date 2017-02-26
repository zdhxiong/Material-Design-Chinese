<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <p>数据表格显示原始的数据集。它们通常出现在桌面端的企业产品中。</p>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>数据表格可以嵌入到其他元素中，例如卡片。它们可以包含：</p>
                <ul class="lst-kix_apo1zqlnbkhv-0 start">
                  <li>一组相关的可视化数据</li>
                  <li>查询和操作数据的功能</li>
                </ul>
                <p>卡片中的数据表格，可以在顶部和底部显示导航和数据操作工具。</p>
              </div>
              <div class="module">
                <h3><strong>支持的交互功能</strong></h3>
                <p>鼠标悬停在行上（桌面端）<br>
                  行选择<br>
                  列排序<br>
                  鼠标悬停在列上（桌面端）<br>
                  长标题<br>
                  文本编辑<br>
                  菜单</p>
                <h3><strong>相关组件</strong></h3>
                <p><a href="cards.html">卡片</a></p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="<?php static_url('../static/media/components/data-tables/components_data_tables.png'); ?>"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="data-tables.html#data-tables-structure" data-qp-ui-data-id="qp:1">结构</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="data-tables.html#data-tables-interaction" data-qp-ui-data-id="qp:2">交互</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="data-tables.html#data-tables-tables-within-cards" data-qp-ui-data-id="qp:3">卡片中的表格</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="data-tables.html#data-tables-specs" data-qp-ui-data-id="qp:4">规格</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="data-tables-structure" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            结构
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
                    <p>数据表格在顶部有包含列名称的<strong>表头</strong>，下面是数据行。</p>
                    <p>如果需要选择或对数据进行操作，则应该为每一行添加一个复选框。</p>
                    <p>数据表格可以包含：</p>
                    <ul class="lst-kix_po9e8adcisuq-0 start">
                      <li>三列或更多列数据</li>
                      <li>一组相关的可视化数据</li>
                      <li>查询或操作数据的功能</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/data-tables/components_datatables_structure_basictable.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>基本的数据表格</p>
                        <p><strong>表格内容</strong></p>
                        <p>13sp Roboto Regular<br>
                          87% black </p>
                        <p><strong>列标题</strong></p>
                        <p>12sp Roboto Medium<br>
                          54% black</p>
                        <p><strong>文本对齐方式</strong></p>
                        <p>数据列右对齐<br>
                          文本列左对齐</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="data-tables-interaction" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            交互
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
                    <h1>鼠标悬停在行上（桌面端）</h1>
                    <p>当鼠标悬停在行上时，在该行上显示背景色。如果个别的单元格有特殊的悬停状态，同时显示单元格和行的状态。</p>
                    <p><strong>悬停背景色</strong></p>
                    <ul class="lst-kix_qljkdfodks0k-0 start">
                      <li>Grey 200 (#EEEEEE)</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/data-tables/components_datatables_interaction_rowhover.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>鼠标悬停在行上</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>行选择</h1>
                    <p>当数据行被选中时，在该行上显示一个背景色。</p>
                    <p><strong>选中行的背景色</strong></p>
                    <ul class="lst-kix_qljkdfodks0k-0">
                      <li>Grey 100 (#F5F5F5)</li>
                    </ul>
                    <p><strong>复选框</strong></p>
                    <ul class="lst-kix_qljkdfodks0k-0">
                      <li>使用强调色</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/data-tables/components_datatables_interaction_selectedrow.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>选中的行</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>列排序</h1>
                    <p>如果启用了列排序，默认对最重要的数据进行排序，并在列头部显示已排序的状态。如果用户点击一个已排序的列，则反转排序顺序、并旋转排序图标。</p>
                    <p><strong>已排序的列名称</strong></p>
                    <ul class="lst-kix_qljkdfodks0k-0">
                      <li>12sp Roboto Medium</li>
                      <li>87% black</li>
                    </ul>
                    <p><strong>排序图标</strong></p>
                    <ul class="lst-kix_qljkdfodks0k-0">
                      <li>16dp container</li>
                      <li>87% black</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/data-tables/components_datatables_interaction_sortedcolumn.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>带有正排序的列</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>鼠标悬停状态的列名称（桌面端）</h1>
                    <p>如果要对列标题提供更详细的解释，请在鼠标悬停时显示一个工具提示。如果启用了排序，在鼠标悬停时显示一个排序图标，以表明该列是可以排序的。</p>
                    <p><strong>工具提示</strong></p>
                    <ul class="lst-kix_qljkdfodks0k-0">
                      <li>详见<a href="tooltips.html">工具提示</a></li>
                    </ul>
                    <p><strong>排序图标</strong></p>
                    <ul class="lst-kix_qljkdfodks0k-0">
                      <li>16dp container</li>
                      <li>38% black</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/data-tables/components_datatables_interaction_tooltip.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>鼠标悬停在列名称上</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>较长的表头文本</h1>
                    <p>有时，列之间使用推荐的 56dp 内边距时，列名称在容器中并不合适。有两个办法来处理这种情况：</p>
                    <ol class="lst-kix_hcn9jmdi07bx-0 start" start="1">
                      <li>显示完整的列名称，并在表格内使用水平滚动。</li>
                      <li>显示缩短的列名称，并在鼠标悬停时显示完整列名称。</li>
                    </ol>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/data-tables/components_datatables_interaction_longtitle1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>对太长的列名称进行截断，并用省略号代替</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/data-tables/components_datatables_interaction_longtitle2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>鼠标悬停在截断的列名称上</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>单元格文本编辑</h1>
                    <p>表格可能需要基本的文本编辑功能（例如，编辑已有的文本内容，或添加评论）。在表格中包含可编辑字段，并通过占位符文本进行提示。可以在点击时显示一个只含文本框的小型编辑框，或者显示一个完整的对话框组件。</p>
                    <p><strong>占位符文本</strong></p>
                    <ul class="lst-kix_wgz9oez9qym-0 start">
                      <li>13sp Roboto Regular</li>
                      <li>38% black</li>
                      <li>文本框中没有分隔线</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/data-tables/components_datatables_interaction_editing1.png'); ?>"/>
                      </div>
                      <figcaption><br>
                      </figcaption>
                    </figure>
                    一个含占位符的可编辑单元格
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>小型编辑框</strong></p>
                    <ul class="lst-kix_2z5lb8m0t9mx-0 start">
                      <li>将编辑框的边缘与最近的分隔线或表格边缘对齐</li>
                      <li>左右均有 24dp 的内边距</li>
                      <li>包含一个简单的<a href="text-fields.html">文本框</a>，并使用 App 的主题（如果适用的话）</li>
                      <li>用户通过按回车键确认</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/data-tables/components_datatables_interaction_editing2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>一个简单的、含单个文本框的编辑框</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>大型编辑框</strong></p>
                    <ul class="lst-kix_2z5lb8m0t9mx-0">
                      <li>将编辑框的边缘与最近的分隔线或表格边缘对齐</li>
                      <li>遵循<a href="dialogs.html">对话框</a>的设计指南，并使用 App 的主题（如果适用的话）</li>
                      <li>用户通过点击保存按钮确认</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/data-tables/components_datatables_interaction_editing3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>一个复杂、灵活的编辑框</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>单元格内的编辑图标</strong></p>
                    <ul class="lst-kix_2z5lb8m0t9mx-0">
                      <li>18dp container</li>
                      <li>54% black</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/data-tables/components_datatables_interaction_editing4.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>（可选）使用图标进行编辑提示。在单元格的内容的反方向使用图标。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>单元格内的菜单</h1>
                    <p>除了编辑文本，用户可能还需要从下拉菜单中选择选项，在这种情况下，可以将菜单组件直接嵌入到表格中。</p>
                    <p><strong>单元格内的菜单</strong></p>
                    <ul class="lst-kix_wgz9oez9qym-0">
                      <li>13sp Roboto Regular</li>
                      <li>87% black</li>
                      <li>根据<a href="menus.html">菜单</a>的设计规范进行设计</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/data-tables/components_datatables_interaction_inlinemenus1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>含菜单的表格</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/data-tables/components_datatables_interaction_inlinemenus2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>一个打开了菜单的表格</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="data-tables-tables-within-cards" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            卡片中的表格
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module col-1">
                  <div class="module">
                    <p>表格可以嵌入到表格中，并在顶部和底部显示导航和数据操作工具。</p>
                  </div>
                </section>
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/data-tables/components_datatables_cards_tablecard.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>具有头部和底部的表格卡片</p>
                        <p><strong>卡片标题</strong></p>
                        <p>20sp Roboto Regular<br>
                          87% black</p>
                        <p><strong>卡片操作图标（头部和底部）</strong></p>
                        <p>24dp container<br>
                          54% black</p>
                        <p><strong>底部分页标签</strong></p>
                        <p>12sp Roboto Regular<br>
                          54% black</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="figure col-1">
                  <div class="figure">
                    <h1>替换头部</h1>
                    <p>有些表格卡片可能需要带有操作的头部，而不需要带标题的头部。这种情况下，你可以：</p>
                    <ul class="lst-kix_ry5leblxtfua-0 start">
                      <li>持续显示操作</li>
                      <li>当有条目被选中显示相关的头部</li>
                    </ul>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/data-tables/components_datatables_cards_altheaders.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>表格卡片中的替换头部</p>
                        <p><strong>操作按钮</strong></p>
                        <p>使用无边框的按钮<br>
                          使条目能被选择</p>
                        <p><strong>着色的头部</strong></p>
                        <p>使用 50 的强调色作为背景色进行填充<br>
                          显示选中条目的数量<br>
                          在有条目被选中后，显示可用的操作图标</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="data-tables-specs" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
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
                <section class="figure col-1">
                  <div class="figure">
                    <h1>垂直间距</h1>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/data-tables/components_datatables_specs_verticalspacing.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>数据表格卡片的垂直间距以及它的最后一行</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module col-1">
                  <div class="module">
                    <ol class="lst-kix_h0iwu6gtyrxk-0 start" start="1">
                      <li>卡片头部高度：64dp</li>
                      <li>最后一行高度：56dp</li>
                      <li>数据行高度：48dp</li>
                    </ol>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="figure col-1">
                  <div class="figure">
                    <h1>头部和底部内边距</h1>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/data-tables/components_datatables_specs_01_horizontalspacing.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>表格卡片中元素之间的水平间距</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module col-1">
                  <div class="module">
                    <ol class="lst-kix_lexjqvir3ko0-0 start" start="1">
                      <li>表格卡片的四周有 24dp 的内边距</li>
                      <li>底部的控件之间有 32dp 的间距</li>
                      <li>底部行数和它的标签之间有 40dp 的间距</li>
                    </ol>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="figure col-1">
                  <div class="figure">
                    <h1>列的内边距</h1>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/data-tables/components_datatables_specs_02_horizontalspacing.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>列之间的内边距</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module col-1">
                  <div class="module">
                    <ol class="lst-kix_tgpxcjd2l7jl-0 start" start="1">
                      <li>列之间最小间距为 56dp。列中最宽的条目（包含数据和列名称）划定列的边框。</li>
                      <li>复选框在 24dp 的图标容器中，拥有 18dp 的宽度和高度。</li>
                    </ol>
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