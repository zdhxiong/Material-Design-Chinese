<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?= $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">
      <div class="article-content chapter-intro">
        <div>
          <h1>按钮用于传递用户触摸时会触发的操作。</h1>
          <div class="gas-intro-h1-bottom"></div>
          <div class="col-list">
            <section class="module-module-figure col-3 h3-spacing">
              <div class="module">
                <p>Material 按钮在点击时会有涟漪效果。按钮可以显示文本、图像。扁平按钮和浮动按钮是最常用的两种按钮类型。</p>
                <p>其他的按钮类型包括：</p>
                <ul class="lst-kix_cps83lvbp1jm-0 start">
                  <li><strong>底部固定按钮</strong> 为扁平按钮，大多用于页面底部或对话框底部。</li>
                  <li><strong>下拉按钮</strong> 可以显示多个下拉选项。</li>
                  <li><strong>可切换按钮</strong> 将相关选项组合起来。图标切换时允许用户选择或取消选择单个选项。</li>
                </ul>
              </div>
              <div class="module">
                <h3>扁平按钮</h3>
                <p>扁平按钮只包含文本。<br>
                  它们可用于对话框、工具栏或内嵌在其他组件中。<br>
                  它们不会改变海拔高度，但会在点击时改变颜色。</p>

                <h3>浮动按钮</h3>
                <p>浮动按钮为矩形按钮。<br>
                  它们可以内嵌在其他组件中。<br>
                  它们在点击时会改变海拔高度和触发涟漪效果。</p>

                <h3>海拔高度</h3>
                <p>扁平按钮：0dp<br>
                  浮动按钮：2dp</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 3000px">
                    <div class="frame " style="padding-top: 100.0%">
                      <img alt="" src="<?= static_url('../static/media/components/buttons/components_buttons.png'); ?>" loading="lazy"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="buttons.html#buttons-button-types" data-qp-ui-data-id="qp:1">按钮类型</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="buttons.html#buttons-usage" data-qp-ui-data-id="qp:2">用法</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="buttons.html#buttons-style" data-qp-ui-data-id="qp:3">样式</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="buttons.html#buttons-flat-buttons" data-qp-ui-data-id="qp:4">扁平按钮</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="buttons.html#buttons-raised-buttons" data-qp-ui-data-id="qp:5">浮动按钮</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="buttons.html#buttons-persistent-footer-buttons" data-qp-ui-data-id="qp:6">底部固定按钮</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="buttons.html#buttons-dropdown-buttons" data-qp-ui-data-id="qp:7">下拉按钮</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="buttons.html#buttons-toggle-buttons" data-qp-ui-data-id="qp:8">可切换按钮</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="buttons-button-types" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            按钮类型
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>有三种标准类型的按钮：</p>
              <ul class="lst-kix_4tql5k8r9fvj-0 start">
                <li><a href="buttons-floating-action-button.html">浮动操作按钮</a>：一个圆形的按钮，在点击时会改变海拔高度和触发涟漪效果</li>
                <li>浮动按钮：典型的方形纸片按钮，点击后改变海拔高度和触发涟漪效果</li>
                <li>扁平按钮：点击时会有涟漪效果，但不会改变海拔高度</li>
              </ul>
              <div class="col-list">
                <section class="figure-figure-figure col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 71.1111111111%">
                          <img alt="" aria-describedby="button-types-figure-caption-0" src="<?= static_url('../static/media/components/buttons/components_buttons_usage1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="button-types-figure-caption-0">
                        <p>浮动操作按钮</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 71.1111111111%">
                          <img alt="" aria-describedby="button-types-figure-caption-1" src="<?= static_url('../static/media/components/buttons/components_buttons_usage2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="button-types-figure-caption-1">
                        <p>浮动按钮</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 71.1111111111%">
                          <img alt="" aria-describedby="button-types-figure-caption-2" src="<?= static_url('../static/media/components/buttons/components_buttons_usage3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="button-types-figure-caption-2">
                        <p>扁平按钮</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="figure-figure-figure col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="button-types-figure-caption-3" src="<?= static_url('../static/media/components/buttons/components_buttons_usage4.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="button-types-figure-caption-3">
                        <p>浮动操作按钮的示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="button-types-figure-caption-4" src="<?= static_url('../static/media/components/buttons/components_buttons_usage5.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="button-types-figure-caption-4">
                        <p>浮动按钮的示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="button-types-figure-caption-5" src="<?= static_url('../static/media/components/buttons/components_buttons_usage6.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="button-types-figure-caption-5">
                        <p>扁平按钮的示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>按钮类型的选择</h1>
                    <p>按钮类型应该根据按钮的优先级、屏幕上容器的数量、以及整体布局来进行选择。</p>
                    <p><strong>功能：</strong>如果它非常重要、并且会被经常用到，可以使用浮动操作按钮</p>
                    <p><strong>尺寸：</strong>根据它所在的容器以及屏幕上 Z 轴方向的层次堆叠数量来决定使用浮动按钮还是扁平按钮。应该避免过多的层叠。</p>
                    <p><strong>布局：</strong>一个容器中应该只使用一种类型的按钮，只在比较特殊的情况下（比如需要强调一个重要的功能）时才可以混合使用多种类型的按钮。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 52.6315789474%">
                          <img alt="" src="<?= static_url('../static/media/components/buttons/components_buttons_usage_main.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="buttons-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
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
                <section class="module-module col-2 h1-spacing">
                  <div class="module">
                    <h1>按钮类型</h1>
                    <p>所使用的按钮类型应该和它所处的上下文相符。</p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>内容 </p></td>
                        <td colspan="1" rowspan="1"><p>按钮类型</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>对话框</p></td>
                        <td colspan="1" rowspan="1"><p>使用 <a href="buttons.html#buttons-flat-buttons">扁平按钮</a></p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>内联按钮</p></td>
                        <td colspan="1" rowspan="1"><p>可以使用 <a href="buttons.html#buttons-raised-buttons">浮动按钮</a> 或 <a href="buttons.html#buttons-flat-buttons">扁平按钮</a></p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>始终可见</p></td>
                        <td colspan="1" rowspan="1"><p>如果你的应用需要一个对用户始终可见的功能按钮，可以使用浮动操作按钮，或 <a href="buttons.html#buttons-persistent-footer-buttons">底部固定按钮</a>。</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3 h1-spacing">
                  <div class="module">
                    <h1>推荐的按钮位置</h1>
                    <p><strong>标准对话框</strong></p>
                    <p>按钮对齐方式：右对齐</p>
                    <p>将确定按钮放在右边，取消按钮放在左边。</p>
                  </div>
                  <div class="module"></div>
                  <div class="module"></div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <p><strong>表单</strong></p>
                    <p>按钮对齐方式：左对齐</p>
                    <p>确定按钮在左边，取消按钮在右边。</p>
                  </div>
                  <div class="module"></div>
                  <div class="module"></div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <p><strong>卡片</strong></p>
                    <p>按钮最好放在卡片的左侧，以增加其可见度。然而，由于卡片的布局非常灵活，按钮也可以放在适合于内容和上下文的其他位置。</p>
                  </div>
                  <div class="module"></div>
                  <div class="module"></div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <p><strong>非标准的对话框和模态化窗口</strong></p>
                    <p>在非标准的对话框和模态化窗口中，按钮的位置取决于它们包含的内容的复杂性。</p>
                    <p>如果对话框中的内容相对简单，推荐把按钮放在对话框右侧，并且确定按钮在取消按钮的右侧。</p>
                    <p>对于复杂的表单，建议把按钮放在表单左侧，并且确定按钮在取消按钮的左侧。</p>
                  </div>
                  <div class="module"></div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="buttons-style" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            样式
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <h1>文本</h1>
              <p>按钮文本应使用大写字母。对于其他语言，扁平按钮上的文本颜色应与正文不一样。</p>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>无障碍</h1>
                    <p>为了确保残障人士的可用性，按钮高度为 36dp，可触摸目标的最小高度为 48dp。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 53.6842105263%">
                          <img alt="" aria-describedby="style-figure-caption-0" src="<?= static_url('../static/media/components/buttons/components_buttons_keyline4.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="style-figure-caption-0">
                        <p>按钮高度：36dp<br>
                        可触摸目标高度：48dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3 h1-spacing">
                  <div class="module">
                    <h1>圆角半径</h1>
                    <p>按钮有 2dp 的圆角半径。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="style-figure-caption-1" src="<?= static_url('../static/media/components/buttons/components_buttons_radius.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="style-figure-caption-1">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>按钮有 2dp 的圆角半径。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module">
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>密集型</h1>
                    <p>当鼠标和键盘为主要输入方式时，按钮尺寸可以略微减小以适应密集的 UI。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 71.1111111111%">
                          <img alt="" aria-describedby="style-figure-caption-2" src="<?= static_url('../static/media/components/buttons/components_buttons_main18.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="style-figure-caption-2">
                        <p>默认按钮</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 24.4444444444%">
                          <img alt="" aria-describedby="style-figure-caption-3" src="<?= static_url('../static/media/components/buttons/components_buttons_main20.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="style-figure-caption-3">
                        <p>按钮文本：14pt Roboto medium<br>
                        按钮高度：36dp<br>
                        按钮左右内边距：16dp<br>
                        圆角半径：2dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 71.1111111111%">
                          <img alt="" aria-describedby="style-figure-caption-4" src="<?= static_url('../static/media/components/buttons/components_buttons_main19.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="style-figure-caption-4">
                        <p>密集型按钮</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 24.4444444444%">
                          <img alt="" aria-describedby="style-figure-caption-5" src="<?= static_url('../static/media/components/buttons/components_buttons_main21.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="style-figure-caption-5">
                        <p>按钮文本：13pt Roboto medium<br>
                        按钮高度：32dp<br>
                        按钮左右内边距：16dp<br>
                        圆角半径：2dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3 h1-spacing">
                  <div class="module">
                    <h1>尺寸和边距</h1>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 87.7777777778%">
                          <img alt="" aria-describedby="style-figure-caption-6" src="<?= static_url('../static/media/components/buttons/components_buttons_keyline1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="style-figure-caption-6">
                        <p>对话框中的扁平按钮示例</p>
                        <p><strong>扁平按钮</strong><br>
                          高度：36dp<br>
                          最小宽度：88dp<br>
                          可触摸目标高度：48dp<br>
                          圆角半径：2dp<br>
                          水平外边距：8dp<br>
                          水平内边距：8dp </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="buttons-flat-buttons" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            扁平按钮
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
                    <h1>用法</h1>
                    <p>扁平按钮没有海拔高度，但在点击时会填充颜色。</p>
                    <p>在下边的场景中使用扁平按钮：</p>
                    <ul class="lst-kix_sx4zu9flaq2f-0 start">
                      <li>工具栏</li>
                      <li>对话框中，将按钮操作和对话框的内容统一起来</li>
                      <li>包含内边距的内联按钮，这样可以更容易被用户看到</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="flat-buttons-figure-caption-0" src="<?= static_url('../static/media/components/buttons/components_buttons_main9.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="flat-buttons-figure-caption-0">
                        <p>对话框适合使用扁平按钮</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="flat-buttons-figure-caption-1" src="<?= static_url('../static/media/components/buttons/components_buttons_main10.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="flat-buttons-figure-caption-1">
                        <p>扁平按钮能最大限度的把用户焦点聚焦在内容上</p>
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
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="flat-buttons-figure-caption-2" src="<?= static_url('../static/media/components/buttons/components_buttons_main11.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="flat-buttons-figure-caption-2">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>扁平按钮的正确使用。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="flat-buttons-figure-caption-3" src="<?= static_url('../static/media/components/buttons/components_buttons_main12.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="flat-buttons-figure-caption-3">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>这些浮动按钮显得太过显眼。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>规格</h1></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 360px">
                        <div class="frame " style="padding-top: 116.666666667%">
                          <img alt="" aria-describedby="flat-buttons-figure-caption-4" src="<?= static_url('../static/media/components/buttons/components_buttons_main13.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="flat-buttons-figure-caption-4">
                        <p>扁平按钮亮色主题</p>
                        <p>最小宽度：88dp<br>
                          高度：36dp<br>
                          圆角半径：2dp<br>
                          按下时：40% #999999<br>
                          禁用状态文本：26% #000000</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 116.666666667%">
                          <img alt="" aria-describedby="flat-buttons-figure-caption-5" src="<?= static_url('../static/media/components/buttons/components_buttons_main14.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="flat-buttons-figure-caption-5">
                        <p>扁平按钮暗色主题</p>
                        <p>最小宽度：88dp<br>
                          高度：36dp<br>
                          圆角半径：2dp<br>
                          按下时：25% #CCCCCC<br>
                          禁用状态的文本：30% #FFFFFF</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 53.5526315789%">
                          <img alt="" aria-describedby="flat-buttons-figure-caption-6" src="<?= static_url('../static/media/components/buttons/components_buttons_usage_dialogs1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="flat-buttons-figure-caption-6">
                        <p>对话框文本内边距：24dp <br>
                        对话框按钮容器高度：52dp<br>
                        对话框按钮：距离容器边缘 8dp 的边距，右对齐（LTR 语言）</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 71.5789473684%">
                          <img alt="" aria-describedby="flat-buttons-figure-caption-7" src="<?= static_url('../static/media/components/buttons/components_buttons_usage_dialogs2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="flat-buttons-figure-caption-7">
                        <p>对话框中的扁平按钮</p>
                        <p><strong>对话框按钮</strong><br>
                          按钮高度：36dp<br>
                          按钮顶部外边距：24dp<br>
                          按钮内边距：8dp<br>
                          按钮对齐方式：右对齐（LTR 语言）<br>
                          按钮宽度：根据按钮文本的长度变化</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 54.2105263158%">
                          <img alt="" aria-describedby="flat-buttons-figure-caption-8" src="<?= static_url('../static/media/components/buttons/components_buttons_focus_flat.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="flat-buttons-figure-caption-8">
                        <p>扁平按钮在聚焦时有 12% 的不透明度</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3 h1-spacing">
                  <div class="module">
                    <h1>行为</h1>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="flat-buttons-figure-caption-9" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/buttons/components-buttons-flatbuttons.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/buttons/components-buttons-flatbuttons.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="flat-buttons-figure-caption-9">
                        <p>扁平按钮</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="buttons-raised-buttons" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:5">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:5">
            浮动按钮
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
                    <h1>用法</h1>
                    <p>浮动按钮在平面布局上添加了 Z 轴维度，这对按钮的功能起到了强调作用。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.5%">
                          <img alt="" aria-describedby="raised-buttons-figure-caption-0" src="<?= static_url('../static/media/components/buttons/components_buttons_main5.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="raised-buttons-figure-caption-0">
                        <p>使用浮动按钮，可以使按钮在有较多内容的布局中更加显眼。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="raised-buttons-figure-caption-1" src="<?= static_url('../static/media/components/buttons/components_buttons_main6.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="raised-buttons-figure-caption-1">
                        <p>浮动按钮可以分隔不同的内容项。</p>
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
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="raised-buttons-figure-caption-2" src="<?= static_url('../static/media/components/buttons/components_buttons_main7.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="raised-buttons-figure-caption-2">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>浮动按钮比扁平按钮更加显眼。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="raised-buttons-figure-caption-3" src="<?= static_url('../static/media/components/buttons/components_buttons_main8.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="raised-buttons-figure-caption-3">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>在很难看到扁平按钮的界面上，不要使用扁平按钮。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>浮动按钮看起来就像一块放在纸上的材料 - 在点击时会改变海拔高度并填充颜色。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 114.444444444%">
                          <img alt="" aria-describedby="raised-buttons-figure-caption-4" src="<?= static_url('../static/media/components/buttons/components_buttons_main15.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="raised-buttons-figure-caption-4">
                        <p>浮动按钮亮色主题</p>
                        <p>最小宽度：88dp <br>
                          高度：36dp <br>
                          圆角半径2dp<br>
                          禁用状态文本：26% #000000<br>
                          禁用状态按钮：12% #000000</p>
                        <p>聚焦状态：12% #000000 在颜色上有遮罩</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 114.444444444%">
                          <img alt="" aria-describedby="raised-buttons-figure-caption-5" src="<?= static_url('../static/media/components/buttons/components_buttons_main16.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="raised-buttons-figure-caption-5">
                        <p>浮动按钮暗色主题</p>
                        <p>最小宽度：88dp <br>
                          高度：36dp <br>
                          圆角半径2dp<br>
                          颜色：500 <br>
                          按钮按下时的颜色：700 <br>
                          禁用状态文本：30% #FFFFFF <br>
                          禁用状态按钮：12% #FFFFFF</p>
                        <p>聚焦状态：12% #000000 在颜色上有遮罩</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3 h2-spacing">
                  <div class="module">
                    <h2><strong>按钮海拔高度</strong></h2>
                    <p>浮动按钮的默认海拔高度为 2dp。</p>
                    <p>在桌面端，浮动按钮在鼠标移入时才有海拔高度。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 91.1111111111%">
                          <img alt="" aria-describedby="raised-buttons-figure-caption-6" src="<?= static_url('../static/media/components/buttons/components_buttons_main17.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="raised-buttons-figure-caption-6">
                        <p><strong>暗色/亮色</strong> <strong>主题</strong></p>
                        <p>最小宽度：88dp <br>
                          高度：36dp <br>
                          海拔高度：0dp<br>
                          禁用状态的文本：30% #FFFFFF<br>
                          禁用状态的按钮：12% #FFFFFF</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>行为</h1></div>
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="raised-buttons-figure-caption-7" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/buttons/components-buttons-raisedbuttons.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/buttons/components-buttons-raisedbuttons.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="raised-buttons-figure-caption-7">
                        <p>浮动按钮</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="buttons-persistent-footer-buttons" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:6">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:6">
            底部固定按钮
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
                    <p>如果需要提供持续有效的按钮给用户，可以使用浮动操作按钮或底部固定按钮。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 38.0555555556%">
                          <img alt="" aria-describedby="persistent-footer-buttons-figure-caption-0" src="<?= static_url('../static/media/components/buttons/components_buttons_keyline2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="persistent-footer-buttons-figure-caption-0">
                        <p>底部固定按钮的高度为 48dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="persistent-footer-buttons-figure-caption-1" src="<?= static_url('../static/media/components/buttons/components_buttons_usage_buttons4.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="persistent-footer-buttons-figure-caption-1">
                        <p>底部固定按钮示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <p>不要在底部固定按钮中使用浮动按钮。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 16.3888888889%">
                          <img alt="" aria-describedby="persistent-footer-buttons-figure-caption-2" src="<?= static_url('../static/media/components/buttons/components_buttons_keyline3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="persistent-footer-buttons-figure-caption-2">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module">
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>用于可滚动的对话框时，可以为底部固定按钮添加一个分隔线。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="persistent-footer-buttons-figure-caption-3" src="<?= static_url('../static/media/components/buttons/components_buttons_usage_buttons5.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="persistent-footer-buttons-figure-caption-3">
                        <p>对话框中的底部固定按钮</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="persistent-footer-buttons-figure-caption-4" src="<?= static_url('../static/media/components/buttons/components_buttons_usage_buttons6.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="persistent-footer-buttons-figure-caption-4">
                        <p>可滚动对话框中的底部固定按钮</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="buttons-dropdown-buttons" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:7">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:7">
            下拉按钮
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
                    <h1>移动端的下拉按钮</h1>
                    <h2><strong>下拉按钮</strong></h2>
                    <p>下拉按钮可以让用户在多个选项之间进行选择。按钮显示当前选项和向下箭头。其他可用选项通过一个列表进行显示。</p>
                    <p>当用户与按钮交互时，一个菜单会覆盖在按钮上，并显示所有可用的选项。点击其中一个选项时，菜单会关闭，并在按钮上显示新的选项的值。</p>
                    <p>下拉列表中的滚动操作与菜单的滚动操作相同。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 49.4736842105%">
                          <img alt="" aria-describedby="dropdown-buttons-figure-caption-0" src="<?= static_url('../static/media/components/buttons/components_buttons_dropdown1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="dropdown-buttons-figure-caption-0">
                        <p>关闭状态的下拉按钮、打开状态的下拉菜单、选中状态的下拉菜单</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="dropdown-buttons-figure-caption-1" src="<?= static_url('../static/media/components/buttons/components_buttons_mobile2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="dropdown-buttons-figure-caption-1">
                        <p>带有列表菜单的下拉按钮</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>通用下拉按钮</h2>
                    <p>默认情况下，通用下拉按钮会显示一个箭头或菜单按钮。当按下按钮时，显示菜单。按下菜单上的选项可以导航到该选项对应的内容。</p>
                    <h2>分段式下拉按钮</h2>
                    <p>分段式下拉按钮包含两部分：当前状态和下拉箭头图标。按下当前状态会触发该状态对应的操作。按下下拉箭头会显示所有的状态选项。选择其中一个后将更改显示的状态。</p>
                    <h2>可编辑分段式下拉按钮</h2>
                    <p>此按钮包含分段式下拉按钮，但是显示的文本是可以编辑的，例如字体大小选择器。按下当前状态将触发当前状态对应的操作，并使显示的状态可编辑。按下下拉箭头会显示所有的状态选项。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 149.342105263%">
                          <img alt="" aria-describedby="dropdown-buttons-figure-caption-2" src="<?= static_url('../static/media/components/buttons/components_buttons_dropdown2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="dropdown-buttons-figure-caption-2">
                        <p>通用、分段、可编辑下拉按钮，在正常、鼠标悬浮、聚焦、按下和选择状态时的示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 111.666666667%">
                          <video aria-describedby="dropdown-buttons-figure-caption-3" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/buttons/components-buttons-otherbuttons-060203_MobileDropdowns_xhdpi_006.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/buttons/components-buttons-otherbuttons-060203_MobileDropdowns_xhdpi_006.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="dropdown-buttons-figure-caption-3">
                        <p>下拉按钮的动画</p>
                        <p><a href="https://www.google.com/url?q=https://drive.google.com/a/google.com/file/d/0B4zh50KRqyzMVzB1bl9aZDdkZzQ/edit?usp%3Dsharing&amp;sa=D&amp;ust=1481817981708000&amp;usg=AFQjCNEWD7fWvP4qJ7clYrALLSScllR3Ow" target="_blank"> </a></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>桌面端下拉按钮</h1>
                    <p>桌面端应用栏规范<br>
                    </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 87.1052631579%">
                          <img alt="" aria-describedby="dropdown-buttons-figure-caption-4" src="<?= static_url('../static/media/components/buttons/components_buttons_dropdown3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="dropdown-buttons-figure-caption-4">
                        <p>桌面端下拉列表</p>
                        <p>上下内边距：16dp<br>
                          左侧内边距：24dp<br>
                          右侧外边距：16dp<br>
                          字体样式之间的水平距离：24dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-module col-2">
                  <div class="module"></div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="buttons-toggle-buttons" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:8">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:8">
            可切换按钮
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
                    <p>可切换按钮可用于对相关选项进行分组。通过整理布局和间距，来区分哪些按钮属于同一个分组。</p>
                    <p>聚焦和按下状态可以更加明确的显示某些按钮属于同一个分组。例如，当聚焦到一个按钮分组上时，焦点会同时显示在该分组的其余部分上。</p>
                    <p>可切换按钮的要求：</p>
                    <ul class="lst-kix_7vmhian9fzi5-0 start">
                      <li>一个分组中至少包含三个可切换按钮</li>
                      <li>按钮需要包含文本、或图标、或同时包含文本和图标</li>
                    </ul>
                    <p>建议使用以下组合：</p>
                    <ul class="lst-kix_7vmhian9fzi5-0">
                      <li>支持多选且未选中</li>
                      <li>仅支持同时选中一个，且未选中</li>
                      <li>仅支持同时选中一个</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 15.5555555556%">
                          <img alt="" aria-describedby="toggle-buttons-figure-caption-0" src="<?= static_url('../static/media/components/buttons/components_buttons_togglebuttons1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="toggle-buttons-figure-caption-0">
                        <p>同时只能有一个选项被选中</p>
                        <p>文本对齐按钮组提供左对齐、右对齐、居中对齐、左右对齐等选项，同时只能有一个选项被选中。选中一个选项时会取消其他选项的选中状态。</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 15.5555555556%">
                          <img alt="" aria-describedby="toggle-buttons-figure-caption-1" src="<?= static_url('../static/media/components/buttons/components_buttons_togglebuttons3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="toggle-buttons-figure-caption-1">
                        <p>没有选项被选中</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 15.5555555556%">
                          <img alt="" aria-describedby="toggle-buttons-figure-caption-2" src="<?= static_url('../static/media/components/buttons/components_buttons_togglebuttons2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="toggle-buttons-figure-caption-2">
                        <p>多选</p>
                        <p>按逻辑分组的选项，如加粗、斜体、添加下划线等，允许同时选中多个选项。</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 15.5555555556%">
                          <img alt="" aria-describedby="toggle-buttons-figure-caption-3" src="<?= static_url('../static/media/components/buttons/components_buttons_togglebuttons4.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="toggle-buttons-figure-caption-3">
                        <p>一个选项被选中</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module"></div>
                  <div class="module"></div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>图标切换</h1>
                    <p>图标适用于仅允许选中或取消选中单个选项的可切换按钮，例如添加或删除星标。</p>
                    <p>它们最适合位于应用栏、工具栏、操作按钮或切换开关中。</p>
                    <p>图标切换可以显示超出其触摸目标范围的有界或无界的<a href="../motion/choreography.html#choreography-radial-reaction">表面反应</a>波纹。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 46.3157894737%">
                          <img alt="" aria-describedby="toggle-buttons-figure-caption-4" src="<?= static_url('../static/media/components/buttons/components_buttons_other1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="toggle-buttons-figure-caption-4">
                        <p>图标切换的正常、鼠标悬浮、聚焦、按下、和禁用状态</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 26.9736842105%">
                          <img alt="" aria-describedby="toggle-buttons-figure-caption-5" src="<?= static_url('../static/media/components/buttons/inline-components_buttons_toggleicons.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="toggle-buttons-figure-caption-5">
                        <p>图标切换获取焦点时的颜色和不透明度和图标的颜色相关。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="gas-last-div-inner-bottom"></div>
</div>

<?php include SRC_PATH.'/public/footer.php'; ?>
