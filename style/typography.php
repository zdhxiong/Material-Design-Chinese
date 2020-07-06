<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>Roboto 和 Noto 是 Android 和 Chrome 上的标准字体。</h1>
          <div class="col-list">
            <section class="module-module-figure col-3 h3-spacing">
              <div class="module">
                <p><strong>Roboto</strong> 是 Android 上的标准字体。</p>
                <p><strong>Noto</strong> 是 Chrome 和 Android 上针对未被 Roboto 覆盖的语言的标准字体。</p>
                <p>文字类型</p>
                <ul class="lst-kix_kzbbixcrg6x1-0 start">
                  <li>英文和类英文（拉丁文、希腊文和西里尔文）<br></li>
                  <li>方块字（中文、日文和韩文）<br></li>
                  <li>其他文字（南亚和东南亚以及中东地区的语言）</li>
                </ul>
              </div>
              <div class="module">
                <h3>应用栏</h3>
                <p>标题样式：Medium 20sp</p>
                <h3>按钮</h3>
                <p>英文：Medium 14sp，全大写<br>
                  方块字：Medium 15sp，全大写<br>
                  其他文字：Bold 15sp</p>
                <h3>副标题（Subheading）</h3>
                <p>英文：Regular 16sp（设备），15sp（桌面）<br>
                  方块字：Regular 17sp（设备），16sp（桌面）<br>
                  其他文字：Regular 17sp（设备），16sp（桌面）</p>
                <h3>正文（Body 1）</h3>
                <p>英文：Regular 14sp（设备），13sp（桌面）<br>
                  方块字：Regular 15sp（设备），14sp（桌面）<br>
                  其他文字：Regular 15sp（设备），14sp（桌面）</p>
                <h3>文本对比度</h3>
                <p>最小值：4.5:1<br>
                  推荐值：7:1</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 3000px">
                    <div class="frame " style="padding-top: 100.0%">
                      <img alt="" src="<?php static_url('../static/media/style/typography/style_typography.png'); ?>" loading="lazy"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="typography.html#typography-language-categorization" data-qp-ui-data-id="qp:1">语言分类</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="typography.html#typography-typeface" data-qp-ui-data-id="qp:2">字体</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="typography.html#typography-styles" data-qp-ui-data-id="qp:3">样式</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="typography.html#typography-line-height" data-qp-ui-data-id="qp:4">行高</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="typography.html#typography-other-typographic-guidelines" data-qp-ui-data-id="qp:5">其他排版指南</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="typography.html#typography-language-categories-reference" data-qp-ui-data-id="qp:6">语言分类参考</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="typography-language-categorization" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            语言分类
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>语言文字可以分为三类：</p>
              <p><strong>英文和类英文</strong>：拉丁文（越南文除外）、希腊文和西里尔文，都支持 Roboto 和 Noto。Roboto 已经经过扩展，完整的覆盖了所有 Unicode 7.0 中定义的拉丁文、希腊文和西里尔文。支持的字符数量已经是之前预览版的两倍，从大概 2000 个字符增加到了大概 4000 个字符。</p>
              <p><strong>其他文字</strong>：这些语言文字需要额外的行高以适应更大的字体，包括南亚和东南亚以及中东地区的语言，比如阿拉伯文、印地文、泰卢固文、泰文和越南文。Noto 有两种字体粗细来支持这些语言。</p>
              <p><strong>方块字</strong>：这些语言文字需要额外的行高以适应更大的字体，包括中文、日文和韩文。Noto 有 7 种字体来支持这些语言。</p>
              <p>全部语言列表请参考<a href="typography.html#typography-language-categories-reference">语言分类表</a>。</p>
            </div>
          </div>
        </div>

        <div id="typography-typeface" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            字体
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
                    <h1>Roboto</h1>
                    <p>Roboto 已经经过了大量的改进，可以适配更多的平台。它稍微宽一点和圆润一些，看起来更加清晰，更加乐观。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 109.473684211%">
                          <img alt="" aria-describedby="typeface-figure-caption-0" src="<?php static_url('../static/media/style/typography/style_typography_roboto1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="typeface-figure-caption-0">
                        <p>Roboto 示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 47.3684210526%">
                          <img alt="" aria-describedby="typeface-figure-caption-1" src="<?php static_url('../static/media/style/typography/style_typography_roboto2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="typeface-figure-caption-1">
                        <p>Roboto A-Z 和数字</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>Roboto 字体粗细</h2>
                    <p>Roboto 有 6 种粗细：Thin、Light、Regular、Medium、Bold、和 Black。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="typeface-figure-caption-2" src="<?php static_url('../static/media/style/typography/style_typography_weights1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="typeface-figure-caption-2">
                        <p>Roboto 字体粗细</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>Noto</h1>
                    <p>Noto 的垂直规格和 Roboto 一致。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 73.6842105263%">
                          <img alt="" aria-describedby="typeface-figure-caption-3" src="<?php static_url('../static/media/style/typography/style_typography_noto1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="typeface-figure-caption-3">
                        <p>英文和 CJK（中文、日文和韩文）的 Noto Sans 示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 87.8947368421%">
                          <img alt="" aria-describedby="typeface-figure-caption-4" src="<?php static_url('../static/media/style/typography/style_typography_noto2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="typeface-figure-caption-4">
                        <p>泰文和印地文（梵文）的 Noto Sans 示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>Noto 字体粗细</h2>
                    <p>Noto Sans CJK（中文、日文和韩文）有 7 种粗细：Thin、Light、DemiLight、Regular、Medium、Bold、和 Black。Noto Sans CJK Regular 和 Roboto Regular 的字体粗细一致。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 60.0%">
                          <img alt="" aria-describedby="typeface-figure-caption-5" src="<?php static_url('../static/media/style/typography/style_typography_weight1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="typeface-figure-caption-5">
                        <p>Noto Sans CJK 字体粗细</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>泰文、梵文和其他语言的 Noto 字体有 Regular 和 Bold 两种粗细。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 49.4736842105%">
                          <img alt="" aria-describedby="typeface-figure-caption-6" src="<?php static_url('../static/media/style/typography/style_typography_weight2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="typeface-figure-caption-6">
                        <p>泰文和印地文（梵文）的 Noto Sans 字体粗细</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <p>
                <div class="modulettes">
                  <a class="modulette container default" href="https://www.google.com/fonts" target="_blank">
                    <img alt="" class="icon callout-icon" src="<?php static_url('../static/spec/images/callouts/default.svg'); ?>" loading="lazy"/>
                    <div class="info">
                      <div class="title">Google 字体库</div>
                    </div>
                  </a>
                </div>
              一个开源的网络字体库
              </p>
              <h1>字体微调</h1>
              <p>微调包含在字体的结构中，通过调整（变形）符号，来提升文字在低分辨率显示器上的显示效果。为此带来的问题就是，微调过的字体会比没有微调的版本占用更大的空间。</p>
              <p>Roboto 和 Noto 都有微调和未经过微调的版本，Google 建议：</p>
              <ul class="lst-kix_ez8axjshp34y-0 start">
                <li>在 Android 和 macOS 上使用未经过微调的版本</li>
                <li>在 Chrome OS、Windows 以及 Linux 中使用微调过的版本</li>
              </ul>
              <h1>字体优先顺序</h1>
              <p>无论是 Android 还是 Web 端，字体优先顺序都应该首先是 Roboto，然后是 Noto，最后才是 sans-serif。</p>
            </div>
          </div>
        </div>

        <div id="typography-styles" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
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
              <p>同时使用多种大小和样式的字体会破坏布局。使用一组有限类型的字体大小进行排版，可以很好的适配布局网格。</p>
              <p>这些尺寸和样式，是为了平衡在常规使用习惯下的内容密度和阅读舒适度而开发的。字号的单位是 sp（可缩放像素），这样就可以在<a href="../usability/accessibility.html">辅助功能</a>中开启大字体模式。</p>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>英文和类英文</h1>
                    <p>拉丁文、希腊文和西里尔文。</p>
                    <p>基本样式集是基于 12、14、16、20、和 34 的排版比例。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 74.7368421053%">
                          <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_scale.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
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
                          <img alt="" aria-describedby="styles-figure-caption-0" src="<?php static_url('../static/media/style/typography/style_typography_styles_01_display1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="styles-figure-caption-0">
                        <p>英文的 Display 样式示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_02_display2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="styles-figure-caption-1" src="<?php static_url('../static/media/style/typography/style_typography_styles_03_headline1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="styles-figure-caption-1">
                        <p>英文的 Headline 样式示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_04_headline2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>在各种形式的应用栏中，文本都应使用标题（Title）样式，Medium 20sp。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="styles-figure-caption-2" src="<?php static_url('../static/media/style/typography/style_typography_styles_05_title1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="styles-figure-caption-2">
                        <p>英文的标题（Title）样式示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_06_title2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>在某些情况下，可以使用较大的副标题（Subheading）样式代替较小的正文（Body）样式。这些情况包括信息以较小的片段显示时、或者标题和正文样式的文本成对出现。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="styles-figure-caption-3" src="<?php static_url('../static/media/style/typography/style_typography_styles_07_subhead1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="styles-figure-caption-3">
                        <p>英文的副标题（Subheading）样式示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_08_subhead2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="styles-figure-caption-4" src="<?php static_url('../static/media/style/typography/style_typography_styles_09_body-1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="styles-figure-caption-4">
                        <p>英文的正文（Body）样式示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_10_body2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="styles-figure-caption-5" src="<?php static_url('../static/media/style/typography/style_typography_styles_11_body3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="styles-figure-caption-5">
                        <p>英文的正文（Body）样式示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_12_body4.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>按钮样式（Medium 14sp，全大写）可用于所有按钮，在区分大小写的语言中，按钮文本应该全部大写。对于不区分大小写的语言，考虑为扁平按钮使用彩色的文本，以使它们和正常文本区分开。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="styles-figure-caption-6" src="<?php static_url('../static/media/style/typography/style_typography_styles_13_button1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="styles-figure-caption-6">
                        <p>英文的按钮样式示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_14_button2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>方块字</h1>
                    <p>中文、日文和韩文</p>
                    <p><strong>字体粗细</strong>：Noto CJK 有和 Roboto 匹配的 7 种字体粗细，使用和英文相同的字体粗细设置。</p>
                    <p><strong>字体大小</strong>：从标题（Title）到说明文字（Caption）的样式，字体大小都比对应的英文样式大 1px。对于大于标题的样式，则使用和英文相同的字体大小。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 74.6052631579%">
                          <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_style1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 28.4210526316%">
                          <img alt="" aria-describedby="styles-figure-caption-7" src="<?php static_url('../static/media/style/typography/style_typography_style2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="styles-figure-caption-7">
                        <p>方块字示例</p>
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
                          <img alt="" aria-describedby="styles-figure-caption-8" src="<?php static_url('../static/media/style/typography/style_typography_example_japanese1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="styles-figure-caption-8">
                        <p>日文副标题（Subheading）示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="styles-figure-caption-9" src="<?php static_url('../static/media/style/typography/style_typography_example_japanese2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="styles-figure-caption-9">
                        <p>日文的正文（Body）样式</p>
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
                          <img alt="" aria-describedby="styles-figure-caption-10" src="<?php static_url('../static/media/style/typography/style_typography_example_japanese3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="styles-figure-caption-10">
                        <p>日文的正文（Body 1）的样式</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="styles-figure-caption-11" src="<?php static_url('../static/media/style/typography/style_typography_example_chinese1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="styles-figure-caption-11">
                        <p>繁体中文的副标题（subheading）示例</p>
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
                          <img alt="" aria-describedby="styles-figure-caption-12" src="<?php static_url('../static/media/style/typography/style_typography_example_chinese2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="styles-figure-caption-12">
                        <p>繁体中文的正文（Body）示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="styles-figure-caption-13" src="<?php static_url('../static/media/style/typography/style-typography-example-chinese3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="styles-figure-caption-13">
                        <p>繁体中文的正文（Body 1）示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>其他文字</h1>
                    <p>南亚、东南亚以及中东地区的语言，包括阿拉伯文、印地文和泰文。</p>
                    <p><strong>字体粗细</strong>：因为 Noto 中没有 Medium，所以使用 Regular 代替。Google 建议避免使用粗体字，从母语使用者的反馈中得知 Bold 显得过于沉重。</p>
                    <p><strong>字体大小</strong>：从标题（Title）到说明文本（Caption）的样式，字体大小都比对应的英文样式大 1px。对于比标题（Title）更大样式，使用和英文相同的字体大小。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 75.3947368421%">
                          <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_style3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 28.4210526316%">
                          <img alt="" aria-describedby="styles-figure-caption-14" src="<?php static_url('../static/media/style/typography/style_typography_style4.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="styles-figure-caption-14">
                        <p>其他语言示例</p>
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
                          <img alt="" aria-describedby="styles-figure-caption-15" src="<?php static_url('../static/media/style/typography/style_typography_example_hindi1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="styles-figure-caption-15">
                        <p>印地文的副标题（subheading）示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="styles-figure-caption-16" src="<?php static_url('../static/media/style/typography/style_typography_example_hindi2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="styles-figure-caption-16">
                        <p>印地文的正文（Body）示例</p>
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
                          <img alt="" aria-describedby="styles-figure-caption-17" src="<?php static_url('../static/media/style/typography/style_typography_example_hindi3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="styles-figure-caption-17">
                        <p>印地文的正文（Body1）示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="styles-figure-caption-18" src="<?php static_url('../static/media/style/typography/style_typography_example_thai1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="styles-figure-caption-18">
                        <p>泰文的副标题（subheading）示例</p>
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
                          <img alt="" aria-describedby="styles-figure-caption-19" src="<?php static_url('../static/media/style/typography/style_typography_example_thai2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="styles-figure-caption-19">
                        <p>泰文的正文（Body）示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="styles-figure-caption-20" src="<?php static_url('../static/media/style/typography/style_typography_example_thai3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="styles-figure-caption-20">
                        <p>泰文的正文（Body1）示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="typography-line-height" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            行高
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>为了达到适当的可读性和阅读流畅性，文本行高需要根据每个样式的字体大小和粗细来设定。文本换行应该仅用于 Body、Subhead、Headline 和较小的 Display 样式。所有其他样式应该保持只有一行文本。</p>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>英文和类英文</h1>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 40.0%">
                          <img alt="" aria-describedby="line-height-figure-caption-0" src="<?php static_url('../static/media/style/typography/style_typography_styles_lineheight1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="line-height-figure-caption-0">
                        <p>英文和类英文的样式和行高</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 60.0%">
                          <img alt="" aria-describedby="line-height-figure-caption-1" src="<?php static_url('../static/media/style/typography/style_typography_styles_lineheight2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="line-height-figure-caption-1">
                        <p>组合示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 27.3684210526%">
                          <img alt="" aria-describedby="line-height-figure-caption-2" src="<?php static_url('../static/media/style/typography/style_typography_styles_lineheight3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="line-height-figure-caption-2">
                        <p>单独的示例 - 增加行高</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>方块字和其他文字</h1>
                    <p>对于所有的样式，行高都比类英文语言高 0.1em。英文和类英文语言大多只使用全角字框中的一部分，通常是 x-height 下面的那部分。中文、日文和韩文（CJK）等象形文字则使用了整个全角字框。其他语言的字符通常有一个很长的降部和/或升部。为了实现英文和 CJK 的设计理念相一致，也为了避免其他语言的两行文字相邻时出现被裁剪现象，方块字和其他文字的行高需要比英文的更高。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 40.0%">
                          <img alt="" aria-describedby="line-height-figure-caption-3" src="<?php static_url('../static/media/style/typography/style_typography_lineheight_tall1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="line-height-figure-caption-3">
                        <p>方块字和其他文字的行高</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 36.4473684211%">
                          <img alt="" aria-describedby="line-height-figure-caption-4" src="<?php static_url('../static/media/style/typography/style_typography_lineheight_tall2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="line-height-figure-caption-4">
                        <p>泰文和印地文的行高示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 27.2368421053%">
                          <img alt="" aria-describedby="line-height-figure-caption-5" src="<?php static_url('../static/media/style/typography/style_typography_lineheight_dense2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="line-height-figure-caption-5">
                        <p>中文和日文的行高示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="typography-other-typographic-guidelines" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:5">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:5">
            其他排版指南
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
                    <h1>颜色 &amp; 对比度</h1>
                    <p>文本颜色和背景颜色太相似，会导致很难阅读。对比度太大的文本也会难以阅读。尤其是深色背景上的浅色文本。</p>
                    <p>文本应该保持至少 4.5:1 （基于亮度值计算）的对比度以保持文本清晰。最佳对比度为 7:1。</p>
                    <p>这些颜色组合还考虑了那些对颜色的感知不同的用户。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 80.0%">
                          <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_contrast.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
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
                        <div class="frame " style="padding-top: 75.5555555556%">
                          <img alt="" aria-describedby="other-typographic-guidelines-figure-caption-0" src="<?php static_url('../static/media/style/typography/style_typography_styles_15_contrast1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="other-typographic-guidelines-figure-caption-0">
                        <p>浅色背景中的对比度</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 75.5555555556%">
                          <img alt="" aria-describedby="other-typographic-guidelines-figure-caption-1" src="<?php static_url('../static/media/style/typography/style_typography_styles_16_contrast2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="other-typographic-guidelines-figure-caption-1">
                        <p>深色背景中的对比度</p>
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
                        <div class="frame " style="padding-top: 75.5555555556%">
                          <img alt="" aria-describedby="other-typographic-guidelines-figure-caption-2" src="<?php static_url('../static/media/style/typography/style_typography_styles_17_contrast3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="other-typographic-guidelines-figure-caption-2">
                        <p>图片上的对比度</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 75.5555555556%">
                          <img alt="" aria-describedby="other-typographic-guidelines-figure-caption-3" src="<?php static_url('../static/media/style/typography/style_typography_styles_18_contrast4.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="other-typographic-guidelines-figure-caption-3">
                        <p>插画上的对比度</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>大型动态字体</h1>
                    <p>为了获得最佳用户体验，请使用动态字体，而不是仅仅依赖较小的字体或允许对较大的字体进行裁剪。</p>
                    <p>正确使用大型字体可以使应用更有趣，可以区分布局，并帮助用户快速解读页面内容。</p>
                    <p>当布局中的文本长度不确定时，使用动态字体可以启用大型字体。动态字体会基于可用空间和字符大小，从排版模版中选择合适的字号。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 111.111111111%">
                          <img alt="" aria-describedby="other-typographic-guidelines-figure-caption-4" src="<?php static_url('../static/media/style/typography/style_typography_styles_19_dynamic1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="other-typographic-guidelines-figure-caption-4">
                        <p>动态字体示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 111.111111111%">
                          <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_20_dynamic2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
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
                          <img alt="" aria-describedby="other-typographic-guidelines-figure-caption-5" src="<?php static_url('../static/media/style/typography/style_typography_styles_21_dynamic3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="other-typographic-guidelines-figure-caption-5">
                        <p>UI 中的动态字体</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_22_dynamic4.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>换行</h1>
                    <p>此图片展示了换行的最佳实践。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 162.222222222%">
                          <img alt="" aria-describedby="other-typographic-guidelines-figure-caption-6" src="<?php static_url('../static/media/style/typography/style_typography_styles_linebreaks1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="other-typographic-guidelines-figure-caption-6">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 163.611111111%">
                          <img alt="" aria-describedby="other-typographic-guidelines-figure-caption-7" src="<?php static_url('../static/media/style/typography/style_typography_styles_linebreaks2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="other-typographic-guidelines-figure-caption-7">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>避免在一行中留出太大的空隙。尽量不要在一行的末尾留下很短的词，如介词。精心考虑的换行可以避免使用连字符。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>字间距和字距调整</h1>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 74.2105263158%">
                          <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_tracking.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>行宽</h1>
                    <p>可以考虑这个来自 Baymard 学院的关于可读性和行宽的建议：</p>
                    <p>“如果你想要一个良好的阅读体验，应该保持每行约 60 个字符。每行文本拥有正确的字符数，是文本可读性的关键。”</p>
                    <p>“太宽 – 如果一行文本太长，用户的眼睛会很难专注于文本。因为太长的一行文字让用户很难判断哪里是一行的开始和结束。此外，从一大块文本中正确的找到下一行也变得极为困难。”</p>
                    <p>“太窄 – 如果一行文本太短，用户的眼睛必须频繁来回移动，打乱了读者的阅读节奏。太短的行也会给用户带来压力，使用户在还没看完当前行时直接看到了下一行（可能跳过一些关键的文字）。”</p>
                    <p>原文： “Readability: the Optimal Line Length,”</p>
                    <p><a href="http://baymard.com/blog/line-length-readability" target="_blank">http://baymard.com/blog/line-length-readability</a></p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 53.6842105263%">
                          <img alt="" aria-describedby="other-typographic-guidelines-figure-caption-8" src="<?php static_url('../static/media/style/typography/style_typography_styles_linelengths1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="other-typographic-guidelines-figure-caption-8">
                        <p>英文正文的理想行长度。数字表示每行的字符数。</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 37.8947368421%">
                          <img alt="" aria-describedby="other-typographic-guidelines-figure-caption-9" src="<?php static_url('../static/media/style/typography/style_typography_styles_linelengths2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="other-typographic-guidelines-figure-caption-9">
                        <p>英文短文本的理想行长度。数字表示每行的字符数。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="typography-language-categories-reference" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:6">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:6">
            语言分类参考
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
                    <p>为了方便国际化，Google 将语言分为三类：英文和类英文、其他文字、方块字。</p>
                    <p><strong>英文和类英文</strong>：拉丁文（越南文除外）、希腊文、西里尔文、希伯来文、亚美尼亚文、格鲁吉亚文。</p>
                    <p><strong>其他文字</strong>：这些语言需要额外的行高以适应更大的字体，包括南亚、东南亚以及中东地区的语言，比如阿拉伯文、印地文、泰卢固文和越南文。</p>
                    <p><strong>Dense</strong>：这些语言需要额外的行高以适应更大的字体，包括中文、日文和韩文。</p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p><strong>代码</strong></p></td>
                        <td colspan="1" rowspan="1"><p><strong>描述</strong></p></td>
                        <td colspan="1" rowspan="1"><p><strong>分类</strong></p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>af</p></td>
                        <td colspan="1" rowspan="1"><p>南非荷兰文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>am</p></td>
                        <td colspan="1" rowspan="1"><p>阿姆哈拉文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>ar</p></td>
                        <td colspan="1" rowspan="1"><p>阿拉伯文（现代标准）</p></td>
                        <td colspan="1" rowspan="1"><p>其他文字</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>az</p></td>
                        <td colspan="1" rowspan="1"><p>阿塞拜疆文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>bg</p></td>
                        <td colspan="1" rowspan="1"><p>保加利亚文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>bn</p></td>
                        <td colspan="1" rowspan="1"><p>孟加拉文</p></td>
                        <td colspan="1" rowspan="1"><p>其他文字</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>ca</p></td>
                        <td colspan="1" rowspan="1"><p>加泰罗尼亚文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>cs</p></td>
                        <td colspan="1" rowspan="1"><p>捷克文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>cy</p></td>
                        <td colspan="1" rowspan="1"><p>威尔士文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>da</p></td>
                        <td colspan="1" rowspan="1"><p>丹麦文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>de</p></td>
                        <td colspan="1" rowspan="1"><p>德文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>el</p></td>
                        <td colspan="1" rowspan="1"><p>希腊文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>en</p></td>
                        <td colspan="1" rowspan="1"><p>英文（美国）</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>en-GB</p></td>
                        <td colspan="1" rowspan="1"><p>英文（英国）</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>es</p></td>
                        <td colspan="1" rowspan="1"><p>西班牙文（欧洲）</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>es-419</p></td>
                        <td colspan="1" rowspan="1"><p>西班牙文（拉丁美洲）</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>et</p></td>
                        <td colspan="1" rowspan="1"><p>爱沙尼亚文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>eu</p></td>
                        <td colspan="1" rowspan="1"><p>巴斯克文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>fa</p></td>
                        <td colspan="1" rowspan="1"><p>波斯文</p></td>
                        <td colspan="1" rowspan="1"><p>其他文字</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>fi</p></td>
                        <td colspan="1" rowspan="1"><p>芬兰文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>fil</p></td>
                        <td colspan="1" rowspan="1"><p>菲律宾文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>fr</p></td>
                        <td colspan="1" rowspan="1"><p>法文（欧洲）</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>fr-CA</p></td>
                        <td colspan="1" rowspan="1"><p>法文（加拿大）</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>gl</p></td>
                        <td colspan="1" rowspan="1"><p>加利西亚文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>gu</p></td>
                        <td colspan="1" rowspan="1"><p>古吉特拉文</p></td>
                        <td colspan="1" rowspan="1"><p>其他文字</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>hi</p></td>
                        <td colspan="1" rowspan="1"><p>印地文</p></td>
                        <td colspan="1" rowspan="1"><p>其他文字</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>hr</p></td>
                        <td colspan="1" rowspan="1"><p>克罗地亚文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>hu</p></td>
                        <td colspan="1" rowspan="1"><p>匈牙利文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>hy</p></td>
                        <td colspan="1" rowspan="1"><p>亚美尼亚文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>id</p></td>
                        <td colspan="1" rowspan="1"><p>印度尼西亚文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>is</p></td>
                        <td colspan="1" rowspan="1"><p>冰岛文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>it</p></td>
                        <td colspan="1" rowspan="1"><p>意大利文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>iw</p></td>
                        <td colspan="1" rowspan="1"><p>希伯来文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>ja</p></td>
                        <td colspan="1" rowspan="1"><p>日文</p></td>
                        <td colspan="1" rowspan="1"><p>方块字</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>ka</p></td>
                        <td colspan="1" rowspan="1"><p>格鲁吉亚文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>kk</p></td>
                        <td colspan="1" rowspan="1"><p>哈萨克斯坦文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>km</p></td>
                        <td colspan="1" rowspan="1"><p>高棉文</p></td>
                        <td colspan="1" rowspan="1"><p>其他文字</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>kn</p></td>
                        <td colspan="1" rowspan="1"><p>卡纳拉文</p></td>
                        <td colspan="1" rowspan="1"><p>其他文字</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>ko</p></td>
                        <td colspan="1" rowspan="1"><p>韩文</p></td>
                        <td colspan="1" rowspan="1"><p>方块字</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>ky</p></td>
                        <td colspan="1" rowspan="1"><p>吉尔吉斯文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>lo</p></td>
                        <td colspan="1" rowspan="1"><p>老挝文</p></td>
                        <td colspan="1" rowspan="1"><p>其他文字</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>lt</p></td>
                        <td colspan="1" rowspan="1"><p>立陶宛文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>lv</p></td>
                        <td colspan="1" rowspan="1"><p>拉脱维亚文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>mk</p></td>
                        <td colspan="1" rowspan="1"><p>马其顿文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>ml</p></td>
                        <td colspan="1" rowspan="1"><p>马拉亚兰文</p></td>
                        <td colspan="1" rowspan="1"><p>其他文字</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>mn</p></td>
                        <td colspan="1" rowspan="1"><p>蒙古文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>mr</p></td>
                        <td colspan="1" rowspan="1"><p>马拉塔文</p></td>
                        <td colspan="1" rowspan="1"><p>其他文字</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>ms</p></td>
                        <td colspan="1" rowspan="1"><p>马来文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>my</p></td>
                        <td colspan="1" rowspan="1"><p>缅甸文（缅甸）</p></td>
                        <td colspan="1" rowspan="1"><p>其他文字</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>ne</p></td>
                        <td colspan="1" rowspan="1"><p>尼泊尔文</p></td>
                        <td colspan="1" rowspan="1"><p>其他文字</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>nl</p></td>
                        <td colspan="1" rowspan="1"><p>荷兰文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>no</p></td>
                        <td colspan="1" rowspan="1"><p>挪威文（书面挪威语）</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>pa</p></td>
                        <td colspan="1" rowspan="1"><p>旁遮普文</p></td>
                        <td colspan="1" rowspan="1"><p>其他文字</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>pl</p></td>
                        <td colspan="1" rowspan="1"><p>波兰文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>pt</p></td>
                        <td colspan="1" rowspan="1"><p>葡萄牙文（巴西）</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>pt-PT</p></td>
                        <td colspan="1" rowspan="1"><p>葡萄牙文（欧洲）</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>ro</p></td>
                        <td colspan="1" rowspan="1"><p>罗马尼亚文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>ru</p></td>
                        <td colspan="1" rowspan="1"><p>俄文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>si</p></td>
                        <td colspan="1" rowspan="1"><p>僧伽罗文</p></td>
                        <td colspan="1" rowspan="1"><p>其他文字</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>sk</p></td>
                        <td colspan="1" rowspan="1"><p>斯洛伐克文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>sl</p></td>
                        <td colspan="1" rowspan="1"><p>斯洛维尼亚文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>sq</p></td>
                        <td colspan="1" rowspan="1"><p>阿尔巴尼亚文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>sr</p></td>
                        <td colspan="1" rowspan="1"><p>塞尔维亚文（西里尔文）</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>sr-Latn</p></td>
                        <td colspan="1" rowspan="1"><p>塞尔维亚文（拉丁文）</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>sv</p></td>
                        <td colspan="1" rowspan="1"><p>瑞典文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>sw</p></td>
                        <td colspan="1" rowspan="1"><p>斯瓦希里文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>ta</p></td>
                        <td colspan="1" rowspan="1"><p>泰米尔文</p></td>
                        <td colspan="1" rowspan="1"><p>其他文字</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>te</p></td>
                        <td colspan="1" rowspan="1"><p>泰卢固文</p></td>
                        <td colspan="1" rowspan="1"><p>其他文字</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>th</p></td>
                        <td colspan="1" rowspan="1"><p>泰文</p></td>
                        <td colspan="1" rowspan="1"><p>其他文字</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>tr</p></td>
                        <td colspan="1" rowspan="1"><p>土耳其文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>uk</p></td>
                        <td colspan="1" rowspan="1"><p>乌克兰文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>ur</p></td>
                        <td colspan="1" rowspan="1"><p>乌尔都文</p></td>
                        <td colspan="1" rowspan="1"><p>其他文字</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>uz</p></td>
                        <td colspan="1" rowspan="1"><p>乌兹别克文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>vi</p></td>
                        <td colspan="1" rowspan="1"><p>越南文</p></td>
                        <td colspan="1" rowspan="1"><p>其他文字</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>zh-CN</p></td>
                        <td colspan="1" rowspan="1"><p>中文（大陆简体）</p></td>
                        <td colspan="1" rowspan="1"><p>方块字</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>zh-HK</p></td>
                        <td colspan="1" rowspan="1"><p>中文（香港繁体）</p></td>
                        <td colspan="1" rowspan="1"><p>方块字</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>zh-TW</p></td>
                        <td colspan="1" rowspan="1"><p>中文（台湾正体）</p></td>
                        <td colspan="1" rowspan="1"><p>方块字Dense</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>zu</p></td>
                        <td colspan="1" rowspan="1"><p>祖鲁文</p></td>
                        <td colspan="1" rowspan="1"><p>类英文</p></td>
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
