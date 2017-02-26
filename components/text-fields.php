<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <p>文本框允许用户输入文本，<a href="../patterns/selection.html">选择文本</a>，和通过自动完成查找数据。</p>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>文本框通常出现在表单中。</p>
                <p>用户可以输入文本、数值或者混合格式的数据。</p>
              </div>
              <div class="module">
                <h3><strong>文本框类型</strong></h3>
                <p>单行<br>
                  多行<br>
                  全宽</p>
                <h3><strong>可用的功能</strong></h3>
                <p>字数统计<br>
                  自动完成<br>
                  搜索过滤<br>
                  必填字段<br>
                  密码隐藏</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="<?php static_url('../static/media/components/text-fields/components_text_fields.png'); ?>"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="text-fields.html#text-fields-input" data-qp-ui-data-id="qp:1">输入</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="text-fields.html#text-fields-labels" data-qp-ui-data-id="qp:2">标签</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="text-fields.html#text-fields-style" data-qp-ui-data-id="qp:3">样式</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="text-fields.html#text-fields-single-line-text-field" data-qp-ui-data-id="qp:4">单行文本框</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="text-fields.html#text-fields-multi-line-text-field" data-qp-ui-data-id="qp:5">多行文本框</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="text-fields.html#text-fields-full-width-text-field" data-qp-ui-data-id="qp:6">全宽文本框</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="text-fields.html#text-fields-character-counter" data-qp-ui-data-id="qp:7">字数统计</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="text-fields.html#text-fields-auto-complete-text-field" data-qp-ui-data-id="qp:8">自动完成文本框</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="text-fields.html#text-fields-search-filter" data-qp-ui-data-id="qp:9">搜索过滤</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="text-fields.html#text-fields-required-fields" data-qp-ui-data-id="qp:10">必填字段</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="text-fields.html#text-fields-password-input" data-qp-ui-data-id="qp:11">密码输入</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="text-fields-input" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            输入
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
                    <p>触摸文本框会发生两个操作：</p>
                    <ul class="lst-kix_wp975o1wwfq0-0 start">
                      <li>把光标放入文本框</li>
                      <li>显示键盘</li>
                    </ul>
                    <h2>文本框剖析</h2>
                    <ul class="lst-kix_de6zx7992hd7-0 start">
                      <li><strong>标签</strong>描述每个字段中需要输入的类型</li>
                      <li><strong>提示文本</strong>是占位符文本，表明需要的信息的类型，有时在表单中以示例的形式显示</li>
                      <li><strong>帮助文本</strong>出现在输入字段的下方，用于提供附加的上下文</li>
                    </ul>
                    <h2>输入类型</h2>
                    <p>文本框的类型决定了字段内允许输入什么样的字符。可以针对频繁使用的字符优化虚拟键盘布局。</p>
                    <p>需要优化的常见输入类型包括：</p>
                    <ul class="lst-kix_ndp28ou2ow42-0 start">
                      <li>数值：手机号、信用卡号、PIN</li>
                      <li>文本：专有名称、用户名、链接</li>
                      <li>混合格式：邮件地址、街道地址、搜索词</li>
                    </ul>
                    <h2>自动大写</h2>
                    <p>如果语言环境需要、或在适当的时候，文本框中的第一个字母应大写，每个句子的第一个字母也一样。例如，在如下的场景中尤其要注意：</p>
                    <ul class="lst-kix_6sfpgcsqxyz9-0 start">
                      <li>用于命名某些内容，例如蓝牙设备，用户，指纹或闹钟</li>
                      <li>包含像句子一样的消息，例如短信</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_anatomy.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>1. 标签<br>
                        2. 提示文本<br>
                        3. 帮助文本</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="text-fields-labels" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            标签
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
                    <p>当用户使用文本输入框时，浮动内联标签会浮动到字段上方。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_labels1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>浮动内联标签</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_labels2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>浮动内联标签</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <h1>标签颜色</h1>
                    <p>标签颜色应该反映应用的<a href="../style/color.html">配色</a>，同时要有适当的对比度。</p>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>亮色主题</h1>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_labels3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>亮色主题下的浮动内联标签的状态包括：普通状态下含提示文本/标签，聚焦状态，普通状态下输入文本，标签和禁用状态</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module"><h1>暗色主题</h1></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_labels4.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>暗色主题下的浮动内联标签的状态包括：普通状态下的提示文本/标签，聚焦状态，普通状态下输入文本，标签和禁用状态</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>规格</h1>
                    <p><strong>浮动标签</strong></p>
                    <ul class="lst-kix_id4u72goxoo2-0 start">
                      <li>Roboto Regular 12sp</li>
                    </ul>
                    <p><strong>提示和输入文本</strong></p>
                    <ul class="lst-kix_qvs1r256gftv-0 start">
                      <li>常规标签：Roboto Regular 16sp</li>
                      <li>密集型标签：Roboto Regular 13sp</li>
                    </ul>
                    <p>在聚焦到输入框之前，浮动标签文本为 16sp（密集型标签为 13sp）。聚焦到输入框后，标签移动到输入框上方，且标签文本变为 12sp（常规和密集型文本都是如此）。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_labels5.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p><strong>浮动标签<br>
                          </strong>瓦片高度：72dp</p>
                        <p><strong>标签文本</strong><br>
                          字体大小：12sp<br>
                          上方边距：16dp<br>
                          下方边距：8dp<br></p>
                        <p><strong>提示和输入文本</strong><br>
                          字体大小：16sp<br>
                          下方边距：8dp</p>
                        <p><strong>输入线</strong><br>
                          下方边距：8dp</p>
                        <p><br></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_labels5_dense_2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p><strong>密集型浮动标签<br>
                          </strong>瓦片高度：60dp<br></p>
                        <p><strong>标签文本<br>
                          </strong>字体大小：12sp<br>
                          上方边距：12dp<br>
                          下方边距：4dp<br>
                          <br>
                          <strong>提示和输入文本</strong><br>
                          字体大小：13sp<br>
                          下方边距：12dp<br></p>
                        <p><strong>输入线</strong><br>
                          下方边距：4dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="text-fields-style" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
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
              <div class="col-list">
                <section class="module col-1">
                  <div class="module">
                    <h1>密集型</h1>
                    <p>当鼠标和键盘作为主要的输入方式时，可以压缩尺寸以适应更密集的布局。</p>
                  </div>
                </section>
                <section class="module col-1">
                  <div class="module">
                    <h1>颜色</h1>
                    <p>文本框应该反映产品的<a href="../style/color.html">色调</a>。推荐使用下列颜色：</p>
                    <ul class="lst-kix_qlbh83jeu10g-0 start">
                      <li><strong>文本框和文本光标</strong>：使用调色板中的强调色，或者高对比度的颜色</li>
                      <li><strong>错误状态</strong>：错误状态使用高对比度的颜色，例如较暖的颜色（如红色或橙色）</li>
                    </ul>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>亮色主题 - 暗色文本（#000000）</p></td>
                        <td colspan="1" rowspan="1"><p>不透明度</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>正常状态</p></td>
                        <td colspan="1" rowspan="1"><p>38%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>鼠标悬停状态</p></td>
                        <td colspan="1" rowspan="1"><p>54%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>按下状态</p></td>
                        <td colspan="1" rowspan="1"><p>54%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>聚焦状态</p></td>
                        <td colspan="1" rowspan="1"><p>87%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>含输入文本的正常状态</p></td>
                        <td colspan="1" rowspan="1"><p>87%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>错误状态</p></td>
                        <td colspan="1" rowspan="1"><p>100%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>禁用状态</p></td>
                        <td colspan="1" rowspan="1"><p>38%</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>暗色主题 - 亮色文本（#ffffff）</p></td>
                        <td colspan="1" rowspan="1"><p>不透明度</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>正常状态</p></td>
                        <td colspan="1" rowspan="1"><p>50%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>鼠标悬停状态</p></td>
                        <td colspan="1" rowspan="1"><p>70%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>按下状态</p></td>
                        <td colspan="1" rowspan="1"><p>70%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>聚焦状态</p></td>
                        <td colspan="1" rowspan="1"><p>100%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>含输入文本的正常状态</p></td>
                        <td colspan="1" rowspan="1"><p>100%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>错误状态</p></td>
                        <td colspan="1" rowspan="1"><p>100%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>禁用状态</p></td>
                        <td colspan="1" rowspan="1"><p>50%</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="text-fields-single-line-text-field" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            单行文本框
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
                    <h1>单行文本框</h1>
                    <p>单行文本框在光标到达输入框右侧边缘时，会自动把文本向左侧滚动。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_single1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>单行文本框</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_single2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>单行文本框</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>文本框的颜色应该反映应用的色调。</p>
                    <h1>亮色主题</h1>
                    <ul class="lst-kix_qdpl7zkwcukg-0 start">
                      <li>提示和输入文本字体：Roboto Regular 16sp</li>
                      <li>瓦片高度：48dp</li>
                      <li>文本上方和下方边距：16dp</li>
                      <li>文本框分隔符边距：8dp</li>
                      <li>按下状态的提示文本：54% 黑色</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_single4.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>亮色主题的单行文本框</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>暗色主题</h1>
                    <ul class="lst-kix_qdpl7zkwcukg-0">
                      <li>按下状态的帮助文本：70% 白色</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_single5.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>暗色主题的单行文本框</p>
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
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_single6.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>单行文本框</p>
                        <p>高度：48dp<br>
                          文本上下两边边距：16dp<br>
                          分隔线下方边距：8dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_single6_dense.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>密集型单行文本框</p>
                        <p>提示和输入文本：13sp<br>
                          高度：40dp<br>
                          文本上下两边边距：12dp<br>
                          分隔线下方边距：4dp<br></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>含图标的亮色主题文本框</h1>
                    <ul class="lst-kix_e7t6767m6fz9-0 start">
                      <li>提示和输入文本字体：Roboto Regular 16sp</li>
                      <li>瓦片高度：48dp</li>
                      <li>文本上下两边边距：16dp</li>
                      <li>文本框分隔线边距：8dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_single7.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>亮色主题下的：普通状态的提示文本、聚焦状态、含输入文本的普通状态</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>含图标的暗色主题文本框</h1></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_single8.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>暗色主题下的：普通状态提示文本、聚焦状态、含输入文本的普通状态</p>
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
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_single9.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>含图标的单行文本框</p>
                        <p>高度：48dp<br>
                          文本上下两边边距：16dp<br>
                          分隔线下方边距：8dp<br>
                          图标：24dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_single9_dense.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>含图标的密集型单行文本框</p>
                        <p>提示和输入文本：13sp<br>
                          高度：40dp<br>
                          文本上下两边边距：12dp<br>
                          分隔线下方边距：4dp<br>
                          图标：20dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="text-fields-multi-line-text-field" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:5">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:5">
            多行文本框
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
                    <p>多行文本框会自动把文本换行，当光标到达文本框底部边缘时，会垂直滚动。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_multiline2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>多行文本框</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>文本框的颜色应该体现应用的配色方案。</p>
                    <h1>亮色主题</h1>
                    <ul class="lst-kix_5i8cjrynp4k3-0 start">
                      <li>提示和输入文本字体：Roboto Regular 16sp</li>
                      <li>标签字体：Roboto Regular 12sp</li>
                      <li>文本上下两边边距：16dp</li>
                      <li>文本框分隔线边距：8dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_multiline3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>亮色主题的多行文本框：含提示文本的普通状态、聚焦状态、含多行输入文本的普通状态。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>暗色主题</h1></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_multiline4.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>暗色主题的多行文本框：含提示文本的普通状态、聚焦状态、含多行输入文本的普通状态</p>
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
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_multiline5.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>暗色主题规格：</p>
                        <p>标签上下两边边距：16dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_multiline5_dense.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>密集型暗色主题规格：</p>
                        <p>标签和输入文本：13sp<br>
                          标签文本的上下两边边距：12dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="text-fields-full-width-text-field" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:6">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:6">
            全宽文本框
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
                    <p>全宽文本框用于更深入的任务。</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_full1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>全宽文本框</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_full2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>全宽文本框</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>单行和多行文本框</h1>
                    <ul class="lst-kix_3e5kow19847j-0 start">
                      <li>提示和输入文本：Roboto Regular 16sp</li>
                      <li>文本的上下两边边距：20dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_full3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>单行和多行文本框的以下状态：普通状态、聚焦状态、含多行输入文本的普通状态</p>
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
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_full4.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>全宽单行文本框的规格：</p>
                        <p>高度：56dp<br>
                          文本上下两边边距：20dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_full4_dense.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>密集型全宽单行文本框的规格：</p>
                        <p>提示和输入文本：13sp<br>
                          高度：48dp<br>
                          文本上下两边边距：16dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="text-fields-character-counter" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:7">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:7">
            字数统计
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div><p>在有字数限制的字段中使用字数统计。</p>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module"><h1>含字数统计的单行文本框</h1>
                    <p>统计文本：Roboto Regular 12sp</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_counter1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>含字数统计的单行文本框上，如果显示一根绿线，则说明还没有超过字数限制。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module">
                    <h3>
                      <figure class="s-tag-media">
                        <div class="media">
                          <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_counter2.png'); ?>"/>
                        </div>
                      </figure>
                    </h3>
                    <p>含字数统计的单行文本框上，如果显示一根红线，则说明超过了字数限制。</p>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>含字数统计的多行文本框</h1>
                    <p>统计文本：Roboto Regular 12sp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_counter3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>含字数统计的多行文本框，如果显示一根绿线，则说明还没有超过字数限制。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_counter4.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>含字数统计的多行文本框，如果显示一根红线，则说明已经超过了字数限制。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h1>含字数统计的全宽文本框</h1>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_counter7.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>含字数统计的全宽文本框</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_counter8.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>单行聚焦状态和多行聚焦状态的文本框</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="text-fields-auto-complete-text-field" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:8">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:8">
            自动完成文本框
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
                    <p>使用自动完成文本框可以在下拉框中实时显示输入建议，以便用户更准确、高校地输入信息。</p>
                    <p>自动完成对于读写能力有限或拼写有困难的用户尤其有用，尤其在使用非母语的情况下。（有些网页没有提供本地语言版，用户只能使用英语浏览）</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_auto1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>自动完成文本框</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_auto2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>下拉框中的自动完成文本</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>内嵌式自动完成</h1>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_auto4.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>内嵌式自动完成</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_auto5.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>内嵌式自动完成</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>全宽的内联自动完成</h1>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_auto7.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>含提示文本</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_auto8.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>聚焦且显示建议</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>内联自动完成</h1>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_auto10.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>内联自动完成</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="text-fields-search-filter" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:9">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:9">
            搜索过滤
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
                    <p>应用栏可以充当文本框。随着用户的输入，下面的内容会跟着被过滤和排序。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_search1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>应用栏充当文本输入框。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_search2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>应用栏充当文本输入框，并对下面的内容进行过滤和排序。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="text-fields-required-fields" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:10">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:10">
            必填字段
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
                  <div class="module"><p>通过在字段旁显示星号（*），来指明该字段是必填字段。在表单底部添加一个说明，星号表示必填字段。</p>
                    <p><strong>帮助文本</strong></p>
                    <p>帮助文本显示在文本框下面，可以永久显示，也可以在聚焦到文本框时显示。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/components/text-fields/forms-supportive-content-v3_xhdpi.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/components/text-fields/forms-supportive-content-v3_xhdpi.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>必填字段标有星号。帮助文本可以在聚焦到文本框时显示，也可以永久显示。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h1>提示文本</h1>
                    <p>提示文本应该显示文本框需要的信息类型。它可以以示例的形式显示，例如占位符电话号码或 URL。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_required6.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>提示文本给出了文本和数字的示例。提示文本也可以是一个下拉菜单，用户可以输入并从中选择、或者直接从中选择。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="text-fields-password-input" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:11">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:11">
            密码输入
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
                    <p>密码输入默认会隐藏密码。用居中的省略号来表示密码的字符（例如•••••••）。</p>
                    <h2>启用和禁用密码的可见性</h2>
                    <p>当可见性图标显示在文本框中时，它会指示该字段的输入是否可见。</p>
                    <p>一个文本字段的可见性可以通过该图标进行切换：</p>
                    <p><strong>启用可见性</strong></p>
                    <p>显示可见图标，并显示密码</p>
                    <p><strong>禁用可见性</strong></p>
                    <p>显示不可见图标，密码用居中省略号表示</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/components/text-fields/components_textfields_passwordinput.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>可见性图标显示在文本框的右侧。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-module col-2">
                  <div class="module">
                    <p>密码文本有以下透明度值：</p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p><strong>含提示文本</strong></p></td>
                        <td colspan="1" rowspan="1"><p><strong>可见</strong></p></td>
                        <td colspan="1" rowspan="1"><p><strong>不可见</strong></p></td>
                        <td colspan="1" rowspan="1"><p>错误</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                          <p>图标：38%</p>
                          <p>提示文本：38%</p>
                          <p>帮助文本：54%</p>
                        </td>
                        <td colspan="1" rowspan="1">
                          <p>图标：54%</p>
                          <p>浮动提示文本：100%</p>
                          <p>输入文本：87%</p>
                          <p>帮助文本：54%</p>
                        </td>
                        <td colspan="1" rowspan="1">
                          <p>图标：54%</p>
                          <p>浮动提示文本：100%</p>
                          <p>输入省略号：87%</p>
                          <p>帮助文本：54%</p>
                        </td>
                        <td colspan="1" rowspan="1">
                          <p>图标：100%</p>
                          <p>浮动提示文本：100%</p>
                          <p>输入文本：N/A</p>
                          <p>帮助文本：100%</p>
                        </td>
                      </tr>
                      </tbody>
                    </table>
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