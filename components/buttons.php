<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>

    <div class="chapter-content">
      <div class="article-content chapter-intro">
        <div>
          <p>按钮传递用户触摸时会发生的操作。</p>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>Material 按钮在点击时会有水波纹效果。按钮可以显示文本、图像。扁平按钮和浮动按钮是最常用的两种按钮类型。</p>
                <p>其他的按钮类型包括：</p>
                <ul class="lst-kix_cps83lvbp1jm-0 start">
                  <li><strong>底部固定按钮</strong>为扁平按钮，大多用于页面底部或对话框底部。</li>
                  <li><strong>下拉按钮</strong>显示多个下拉选项。</li>
                  <li><strong>可切换按钮</strong>将相关选项组合起来。图标切换时允许用户选择或取消选择单个选项。</li>
                </ul>
              </div>
              <div class="module">
                <h3>扁平按钮</h3>
                <p>扁平按钮只包含文本。<br>
                  它们可用于对话框、工具栏或内嵌在其他组件中。<br>
                  它们不会改变高度，但会在点击时改变颜色。</p>

                <h3>浮动按钮</h3>
                <p>浮动按钮为矩形按钮。<br>
                  它们可以内嵌在其他组件中。<br>
                  它们在点击时会改变高度和触发水波纹效果。</p>

                <h3>高度</h3>
                <p>扁平按钮：0dp<br>
                  浮动按钮：2dp</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/components/buttons/components_buttons.png"/>
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
                <li><a href="buttons-floating-action-button.html">浮动操作按钮</a>：一个圆形的按钮，在点击时会改变高度和触发水波纹效果。</li>
                <li>浮动按钮：典型的方形纸片按钮，点击后改变高度和触发水波纹效果。</li>
                <li>扁平按钮：点击时会有水波纹效果，但不会改变高度。</li>
              </ul>
              <div class="col-list">
                <section class="figure-figure-figure col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_usage1.png"/>
                      </div>
                      <figcaption>
                        <p>浮动操作按钮</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_usage2.png"/>
                      </div>
                      <figcaption>
                        <p>浮动按钮</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_usage3.png"/>
                      </div>
                      <figcaption>
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
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_usage4.png"/>
                      </div>
                      <figcaption>
                        <p>浮动操作按钮的示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_usage5.png"/>
                      </div>
                      <figcaption>
                        <p>浮动按钮的示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_usage6.png"/>
                      </div>
                      <figcaption>
                        <p>扁平按钮的示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>按钮类型的选择</h1>
                    <p>按钮类型应该根据按钮的优先级、屏幕上容器的数量、以及整体布局来进行选择。</p>
                    <p><strong>功能：</strong>如果它非常重要、并且会被经常使用到，可以使用浮动操作按钮</p>
                    <p><strong>尺寸：</strong>根据它所在的容器以及屏幕上 Z 轴方向的层次堆叠数量来决定使用浮动按钮还是扁平按钮。应该避免过多的层叠。</p>
                    <p><strong>布局：</strong>一个容器中应该只使用一种类型的按钮，只在比较特殊的情况下（比如需要强调一个重要的功能）时才可以混合使用多种类型的按钮。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_usage_main.png"/>
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
                <section class="module-module col-2">
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
                        <td colspan="1" rowspan="1"><p>使用 <a href="buttons.html#buttons-flat-buttons">浮动按钮</a></p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>内联按钮</p></td>
                        <td colspan="1" rowspan="1"><p>根据你的布局来选择使用<a href="buttons.html#buttons-raised-buttons">浮动按钮</a>还是<a href="buttons.html#buttons-flat-buttons">扁平按钮</a>。</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>底部固定按钮</p></td>
                        <td colspan="1" rowspan="1"><p>如果需要一个对用户持续可见的功能按钮，可以考虑使用浮动操作按钮，或<a href="buttons.html#buttons-persistent-footer-buttons">底部固定按钮</a>。</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3">
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
                    <p>按钮最好放在卡片的左侧，以增加其可见度。然而，由于卡片的布局非常灵活，按钮也可以放在适合于内容和上下文的位置。</p>
                  </div>
                  <div class="module"></div>
                  <div class="module"></div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <p><strong>不标准的对话框和模态化窗口</strong></p>
                    <p>在不标准的对话框和模态化窗口中，按钮的位置取决于它们包含的内容的复杂性。</p>
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
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>无障碍</h1>
                    <p>为了确保残障人士可用性，按钮高度为 36dp，可触摸目标的最小高度为 48dp。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_keyline4.png"/>
                      </div>
                      <figcaption>
                        <p>按钮高度：36dp<br>
                        可触摸目标高度：48dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h1>圆角半径</h1>
                    <p>按钮有 2dp 的圆角半径。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_radius.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>按钮有 2dp 的圆角半径。</p>
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
                    <h1>密集型</h1>
                    <p>当鼠标和键盘为主要输入方式时，按钮尺寸可以略微减小以适应密集的 UI。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_main18.png"/>
                      </div>
                      <figcaption>
                        <p>默认按钮</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_main20.png"/>
                      </div>
                      <figcaption>
                        <p>按钮文本：14pt Roboto medium<br>
                        按钮高度：36dp<br>
                        按钮左右内边距：16dp<br>
                        圆角半径：2dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_main19.png"/>
                      </div>
                      <figcaption>
                        <p>密集型按钮</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_main21.png"/>
                      </div>
                      <figcaption>
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
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h1>尺寸和边距</h1>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_keyline1.png"/>
                      </div>
                      <figcaption>
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
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>用法</h1>
                    <p>扁平按钮没有高度，但在点击时会填充颜色。</p>
                    <p>在下边的场景中使用扁平按钮：</p>
                    <ul class="lst-kix_sx4zu9flaq2f-0 start">
                      <li>工具栏</li>
                      <li>对话框中，将按钮操作和对话框的内容统一起来</li>
                      <li>包含内边距的内联按钮，这样用户能够轻易地找到它们</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_main9.png"/>
                      </div>
                      <figcaption>
                        <p>对话框适合使用扁平按钮</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_main10.png"/>
                      </div>
                      <figcaption>
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
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_main11.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>扁平按钮的正确使用。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_main12.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>这些浮动按钮显得太过显眼。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>规格</h1></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_main13.png"/>
                      </div>
                      <figcaption>
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
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_main14.png"/>
                      </div>
                      <figcaption>
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
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_usage_dialogs1.png"/>
                      </div>
                      <figcaption>
                        <p>对话框文本内边距：24dp <br>
                        对话框按钮容器高度：52dp<br>
                        对话框按钮：距离容器边缘 8dp 的内边距，右对齐（LTR 语言）</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_usage_dialogs2.png"/>
                      </div>
                      <figcaption>
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
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_focus_flat.png"/>
                      </div>
                      <figcaption>
                        <p>扁平按钮在聚焦时有 12% 的不透明度</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h1>行为</h1>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/buttons/components-buttons-flatbuttons.webm" type="video/webm">
                            <source src="../static/media/components/buttons/components-buttons-flatbuttons.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
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
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>用法</h1>
                    <p>Raised buttons add dimension to mostly flat layouts. They emphasize functions on busy or wide spaces.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_main5.png"/>
                      </div>
                      <figcaption>
                        <p>Use raised buttons to give more prominence to actions in layouts with a lot of varying content.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_main6.png"/>
                      </div>
                      <figcaption>
                        <p>Raised buttons can help delineate sections of content on a page.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_main7.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>Raised buttons stand out more than flat buttons.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_main8.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>Don’t use flat buttons in UIs where they would be difficult to see.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>Raised buttons behave like a piece of material resting on another sheet – they lift and fill with color on press. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_main15.png"/>
                      </div>
                      <figcaption>
                        <p>Raised Light/Light theme</p>
                        <p>Minimum width: 88dp <br>
                          Height: 36dp <br>
                          Corner radius: 2dp<br>
                          Disabled text: 26% #000000<br>
                          Disabled button: 12% #000000</p>
                        <p>Focused:12% #000000 shade over the color</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_main16.png"/>
                      </div>
                      <figcaption>
                        <p>Raised Dark/Dark theme</p>
                        <p>Minimum width: 88dp <br>
                          Height: 36dp <br>
                          Corner radius: 2dp<br>
                          Normal color: 500 <br>
                          Pressed color: 700 <br>
                          Disabled text: 30% #FFFFFF <br>
                          Disabled button: 12% #FFFFFF</p>
                        <p>Focused:12% #000000 shade over the color</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h2><strong>Button Elevation</strong></h2>
                    <p>Raised buttons have a default elevation of 2dp.</p>
                    <p>On desktop, raised buttons can gain this elevation on hover.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_main17.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Dark/Light</strong> <strong>theme</strong></p>
                        <p>Minimum width: 88dp <br>
                          Height: 36dp <br>
                          Elevation: 0dp<br>
                          Disabled text: 30% #FFFFFF<br>
                          Disabled button: 12% #FFFFFF</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-figure col-3">
                  <div class="module">
                    <h1>Behavior</h1></div>
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/buttons/components-buttons-raisedbuttons.webm" type="video/webm">
                            <source src="../static/media/components/buttons/components-buttons-raisedbuttons.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Raised buttons</p>
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
            Persistent footer buttons
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
                    <p>If your app requires actions to be persistent and readily available to the user, consider using the floating action button or persistent footer buttons.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_keyline2.png"/>
                      </div>
                      <figcaption>
                        <p>Persistent footer buttons are 48dp tall. </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_usage_buttons4.png"/>
                      </div>
                      <figcaption>
                        <p>Example of persistent footer buttons</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <p>Do not use raised buttons within persistent button areas.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_keyline3.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
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
                    <p>A persistent footer button may be used for scrollable dialogs when a divider is added.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_usage_buttons5.png"/>
                      </div>
                      <figcaption>
                        <p>Persistent footer button in dialog</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_usage_buttons6.png"/>
                      </div>
                      <figcaption>
                        <p>Persistent footer button in scrollable dialog</p>
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
            Dropdown buttons
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
                    <h1>Mobile dropdown buttons</h1>
                    <h2><strong>Dropdown button</strong></h2>
                    <p>A dropdown button selects between multiple selections. The button displays the current state and a down arrow. Available states may be shown as a list of strings, a palette, or icons, for example.</p>
                    <p>When a user interacts with the button, a menu covers the button and displays the possible states. Pressing a state dismisses the menu and updates the button to display this new state. </p>
                    <p>Scrolling within the dropdown behaves the same way a menu scrolls.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_dropdown1.png"/>
                      </div>
                      <figcaption>
                        <p>Closed dropdown button, open dropdown menu, and selected dropdown menu</p>
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
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_mobile2.png"/>
                      </div>
                      <figcaption>
                        <p>Generic dropdown button with a list menu</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong>Generic overflow dropdown button</strong></h2>
                    <p>The generic overflow dropdown button displays an arrow or menu button by default. When the button is pressed, the menu appears. Pressing an option on the menu navigates to further settings for that option. </p>
                    <h2><strong>Segmented dropdown button</strong></h2>
                    <p>A segmented dropdown has two sections: the current state and the dropdown arrow icon. Pressing the current state will cause that state’s action to fire within the screen. Pressing the dropdown arrow will display all the state options. Selecting one will change the displayed state. </p>
                    <h2><strong>Editable segmented dropdown button</strong></h2>
                    <p>This button has a segmented dropdown, where the displayed state is text editable, such as a font size picker. Pressing the current state causes both that state’s action to fire and makes the displayed state editable. Pressing the arrow displays all the state options. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_dropdown2.png"/>
                      </div>
                      <figcaption>
                        <p>Generic, segmented, and editable overflow dropdown buttons in normal, hover, focus, pressed, and selecting states </p>
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
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/buttons/components-buttons-otherbuttons-060203_MobileDropdowns_xhdpi_006.webm" type="video/webm">
                            <source src="../static/media/components/buttons/components-buttons-otherbuttons-060203_MobileDropdowns_xhdpi_006.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Animation of dropdown button</p>
                        <p><a href="https://www.google.com/url?q=https://drive.google.com/a/google.com/file/d/0B4zh50KRqyzMVzB1bl9aZDdkZzQ/edit?usp%3Dsharing&amp;sa=D&amp;ust=1481817981708000&amp;usg=AFQjCNEWD7fWvP4qJ7clYrALLSScllR3Ow" target="_blank"> </a></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Desktop dropdowns</h1>
                    <p>Desktop app bar specs<br>
                    </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_dropdown3.png"/>
                      </div>
                      <figcaption>
                        <p>Desktop dropdown</p>
                        <p>Top and bottom padding: 16dp<br>
                          Left padding: 24dp<br>
                          Right margin: 16dp<br>
                          Horizontal space between font styles: 24dp</p>
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
            Toggle buttons
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
                    <p>Toggle buttons may be used to group related options. Arrange layout and spacing to convey that certain toggle buttons are part of a group.</p>
                    <p>Focus and pressed states may reinforce that toggles are part of a group. For example, when one button segment is focused, focus may be displayed simultaneously on the rest of the segment.</p>
                    <p>Toggle button requirements:</p>
                    <ul class="lst-kix_7vmhian9fzi5-0 start">
                      <li>Have at least three toggle buttons in a group</li>
                      <li>Label buttons with text, an icon, or both</li>
                    </ul>
                    <p>The following combinations are recommended:</p>
                    <ul class="lst-kix_7vmhian9fzi5-0">
                      <li>Multiple and unselected</li>
                      <li>Exclusive and unselected</li>
                      <li>Exclusive only</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_togglebuttons1.png"/>
                      </div>
                      <figcaption>
                        <p>Exclusive selection</p>
                        <p>Text justification toggle buttons present options for left, right, center, full, and justified text with only one item available for selection at a time. Selecting one option deselects any other.</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_togglebuttons3.png"/>
                      </div>
                      <figcaption>
                        <p>No options are selected</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_togglebuttons2.png"/>
                      </div>
                      <figcaption>
                        <p>Multiple selection</p>
                        <p>Logically-grouped options, like Bold, Italic, and Underline, allow multiple options to be selected.</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_togglebuttons4.png"/>
                      </div>
                      <figcaption>
                        <p>One option is selected</p>
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
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Icon toggles </h1>
                    <p>Icons are appropriate for toggle buttons that allow a single choice to be selected or deselected, such as adding or removing a star to an item.</p>
                    <p>They are best located in app bars, toolbars, action buttons or toggles.</p>
                    <p>Icon toggles may display bounded or unbounded ink <a href="../motion/choreography.html#choreography-radial-reaction">surface reaction</a> ripples beyond their touch-target bounds.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/components_buttons_other1.png"/>
                      </div>
                      <figcaption>
                        <p>Icon toggles in normal, hover, focused, pressed, and inactive states </p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/buttons/inline-components_buttons_toggleicons.png"/>
                      </div>
                      <figcaption>
                        <p>The icon toggle focus indicator color and opacity are related to the color of the icon. </p>
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
</div>

<?php include SRC_PATH.'/public/footer.php'; ?>