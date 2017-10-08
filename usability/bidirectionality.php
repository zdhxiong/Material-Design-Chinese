<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>从右向左（RTL）阅读的语言，例如阿拉伯语和希伯来语，其 UI 应该被镜像，以确保内容易于理解。</h1>
          <p></p>
        </div>
      </div>

      <nav class="chapter-toc">
        <h1>目录</h1>
        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="bidirectionality.html#bidirectionality-ui-mirroring-overview" data-qp-ui-data-id="qp:1">UI 镜像概述</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="bidirectionality.html#bidirectionality-rtl-mirroring-guidelines" data-qp-ui-data-id="qp:2">RTL 镜像指南</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="bidirectionality.html#bidirectionality-localization" data-qp-ui-data-id="qp:3">本地化</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="bidirectionality-ui-mirroring-overview" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            UI 镜像概述
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
                    <p>从左到右（LTR）语言和从右到左（RTL）语言的最大区别是内容的显示方向：</p>
                    <ul class="lst-kix_ctt42uu1qymt-0 start">
                      <li>LTR 语言从左到右显示内容</li>
                      <li>RTL 语言从右到左显示内容</li>
                    </ul>
                    <p>RTL 内容还会影响一些图标和图片的显示方向，特别是那些用于描述一系列事件的图标和图片。</p>
                    <p>一般来说，对于 LTR 语言，时间流逝方向也是从左到右；对于 RTL 语言，时间流逝方向也是从右向左。</p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>元素</p></td>
                        <td colspan="1" rowspan="1"><p>LTR </p></td>
                        <td colspan="1" rowspan="1"><p>RTL </p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>文本</p></td>
                        <td colspan="1" rowspan="1"><p>句子从左向右阅读。</p></td>
                        <td colspan="1" rowspan="1"><p>句子从右向左阅读。</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>时间线</p></td>
                        <td colspan="1" rowspan="1"><p>事件序列从左向右进行。</p></td>
                        <td colspan="1" rowspan="1"><p>事件序列从右向左进行。</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>图像</p></td>
                        <td colspan="1" rowspan="1"><p>从左向右的箭头表示向前运动：→</p></td>
                        <td colspan="1" rowspan="1"><p>从右向左的箭头表示向前运动：←</p></td>
                      </tr>
                      </tbody>
                    </table>
                    <p>对于 LTR 语言，从左到右描述时间的流逝；对于 RTL 语言，从右到左描述时间的流逝。</p>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>当 UI 从 LTR 更改为 RTL 时（反之亦然），通常称为<strong>镜像</strong>。RTL 布局是 LTR 布局的镜像，它会影响布局、文本和图像。</p>
                    <p>当 UI 从一个方向更改为另一个方向时，这些项目不会镜像：</p>
                    <ul class="lst-kix_82tmnht949gx-0 start">
                      <li>数字</li>
                      <li>未翻译的文本（即使它是词组的一部分）</li>
                    </ul>
                    <p>文本方向应始终和语言方向保持一致。例如，任何 LTR 语句（例如一个 URL）将继续以 LTR 的格式显示，即使 UI 的其余部分是 RTL 的。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1440px">
                        <div class="frame " style="padding-top: 29.3055555556%">
                          <img alt="" aria-describedby="ui-mirroring-overview-figure-caption-0" src="<?php static_url('../static/media/usability/bidirectionality/usability_bidirectionality_mirroring_do.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="ui-mirroring-overview-figure-caption-0">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>文本和数字将始终和语言的方向保持一致。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1440px">
                        <div class="frame " style="padding-top: 29.3055555556%">
                          <img alt="" aria-describedby="ui-mirroring-overview-figure-caption-1" src="<?php static_url('../static/media/usability/bidirectionality/usability_bidirectionality_mirroring_dont-typed.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="ui-mirroring-overview-figure-caption-1">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>LTR 文本不应以相反的顺序显示。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>当镜像一个 UI 时，这些元素会发生改变：</p>
                    <ul class="lst-kix_lfkw6767vzc6-0 start">
                      <li><strong>文本框</strong><strong>图标</strong>显示在字段的另一侧</li>
                      <li><strong>导航按钮</strong>以相反的顺序显示</li>
                      <li>表示方向的<strong>图标</strong>会被镜像，例如箭头</li>
                      <li><strong>文本</strong>（如果它被翻译为 RTL 语言）右对齐</li>
                    </ul>
                    <p>这些元素不会被镜像：</p>
                    <ul class="lst-kix_2c60lwkyikk9-0 start">
                      <li>不表示方向的图标，例如相机</li>
                      <li>数字，例如时钟和电话号码</li>
                      <li>图标和图解</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="ui-mirroring-overview-figure-caption-2" src="<?php static_url('../static/media/usability/bidirectionality/usability_bidirectionality_mirror1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="ui-mirroring-overview-figure-caption-2">
                        <p>LTR 的英文 UI</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="ui-mirroring-overview-figure-caption-3" src="<?php static_url('../static/media/usability/bidirectionality/usability_bidirectionality_mirror2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="ui-mirroring-overview-figure-caption-3">
                        <p>RTL 的阿拉伯语 UI，其中数字仍然以 LTR 显示。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 14.2105263158%">
                          <img alt="" aria-describedby="ui-mirroring-overview-figure-caption-4" src="<?php static_url('../static/media/usability/bidirectionality/usability_bidirectionality__mirror_redlines_LTR.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="ui-mirroring-overview-figure-caption-4">
                        <p><strong>LTR 模式下的文本编辑菜单</strong></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 14.2105263158%">
                          <img alt="" aria-describedby="ui-mirroring-overview-figure-caption-5" src="<?php static_url('../static/media/usability/bidirectionality/usability_bidirectionality__mirror_redlines_RTL.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="ui-mirroring-overview-figure-caption-5">
                        <p><strong>RTL 下的文本编辑菜单</strong></p>
                        <p>1. 与双向性有关的图标被镜像，以反映一行文本的开始和结束位置<br></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 84.4444444444%">
                          <img alt="" aria-describedby="ui-mirroring-overview-figure-caption-6" src="<?php static_url('../static/media/usability/bidirectionality/usability_bidirectionality__ components_tabs_usage_specs1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="ui-mirroring-overview-figure-caption-6">
                        <p><strong>LTR 屏幕</strong></p>
                        <p>在 LTR 屏幕中，“Item One” 选项对齐到了左侧，用户向左滑动可以看到更多的选项。</p>
                        <p>触摸目标高度：48dp<br>
                          第一个选项前面距离屏幕边缘的间距：72dp<br>
                          选项标签的底部内边距：20dp<br>
                          选项标签的左右内边距：12dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 84.4444444444%">
                          <img alt="" aria-describedby="ui-mirroring-overview-figure-caption-7" src="<?php static_url('../static/media/usability/bidirectionality/usability_bidirectionality__ components_tabs_usage_specs2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="ui-mirroring-overview-figure-caption-7">
                        <p><strong>RTL 屏幕</strong><strong> </strong></p>
                        <p>在 RTL 屏幕中，“Item One” 选项对齐到了右侧，用户向右滑动可以看到更多选项。</p>
                        <p>触摸目标高度：48dp<br>
                          第一个选项前面距离屏幕边缘的间距：72dp<br>
                          选项标签的底部内边距：20dp<br>
                          选项标签的左右内边距：12dp</p>
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
                          <img alt="" aria-describedby="ui-mirroring-overview-figure-caption-8" src="<?php static_url('../static/media/usability/bidirectionality/usability_bidirectionality_mirroring3.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="ui-mirroring-overview-figure-caption-8">
                        <p><strong>LTR 屏幕</strong><br></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="ui-mirroring-overview-figure-caption-9" src="<?php static_url('../static/media/usability/bidirectionality/usability_bidirectionality_mirroring5.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="ui-mirroring-overview-figure-caption-9">
                        <p><strong>RTL 屏幕<br></strong>
                          标题、图标和 UI 元素都从右向左显示</p>
                        <p>1. 后退按钮指向右边<br>
                          2. 文本右对齐<br>
                          3. 主按钮和副按钮被镜像，以匹配阅读方向<br>
                          4. 复选框显示在文本右侧<br>
                          5. 不表示方向的图标不发生更改<br>
                          6. 单位的位置可能因语言而异<br>
                          7. 进度条方向和内容的阅读方向相同</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 84.4444444444%">
                          <img alt="" aria-describedby="ui-mirroring-overview-figure-caption-10" src="<?php static_url('../static/media/usability/bidirectionality/usability_bidirectionality__ components_overflow_usage_specs1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="ui-mirroring-overview-figure-caption-10">
                        <p><strong>LTR</strong></p>
                        <p>导航、弹出菜单和图标从左向右显示</p>
                        <p>图标和屏幕边缘的间距：16dp<br>
                          标题和屏幕边缘的间距：72 dp<br>
                          标题下方内边距：20dp<br>
                          导航栏高度：56dp<br>
                          弹出菜单内边距：16dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 84.4444444444%">
                          <img alt="" aria-describedby="ui-mirroring-overview-figure-caption-11" src="<?php static_url('../static/media/usability/bidirectionality/usability_bidirectionality__ components_overflow_usage_specs2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="ui-mirroring-overview-figure-caption-11">
                        <p><strong> RTL</strong></p>
                        <p>RTL 布局中的导航、弹出菜单和切换侧边栏的图标</p>
                        <p>图标和屏幕边缘的间距：16dp<br>
                          标题和屏幕边缘的间距：72 dp<br>
                          标题下方内边距：20dp<br>
                          导航栏高度：56dp<br>
                          弹出菜单内边距：16dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-module-figure col-3">
                  <div class="module"></div>
                  <div class="module">
                    <p>
                      <figure class="s-tag-media">
                        <div class="media" style="max-width: 720px">
                          <div class="frame " style="padding-top: 64.3055555556%">
                            <img alt="" aria-describedby="ui-mirroring-overview-figure-caption-12" src="<?php static_url('../static/media/usability/bidirectionality/usability_bidirectionality__ components_lists_keylines_two_1.png'); ?>"/>
                          </div>
                        </div>
                        <figcaption id="ui-mirroring-overview-figure-caption-12"><br>
                          <p><strong>LTR</strong></p>
                          <p>用于 LTR 布局的图标和文本的内边距和外边距。</p>
                          <p>LTR：<br>
                            列表项高度：72dp<br>
                            图标和屏幕左边缘的间距：16dp<br>
                            列表项和屏幕左边缘的距离：72dp</p>
                        </figcaption>
                      </figure><br/>
                    </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 64.3055555556%">
                          <img alt="" aria-describedby="ui-mirroring-overview-figure-caption-13" src="<?php static_url('../static/media/usability/bidirectionality/usability_bidirectionality__ components_lists_keylines_two_2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="ui-mirroring-overview-figure-caption-13">
                        <p><strong>RTL</strong></p>
                        <p>当使用镜像布局时，图标和文本的内边距和外边距也会切换，以匹配 RTL 的布局。</p>
                        <p><br>
                          列表项高度：72dp<br>
                          图标和屏幕右边缘的间距：16dp<br>
                          列表项和屏幕右边缘的距离：72dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="bidirectionality-rtl-mirroring-guidelines" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            RTL 镜像指南
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>为了支持从右向左（RTL）的 UI，而把文本、布局和图标镜像时，很多和时间相关的东西都应该被描述为从右向左移动。例如，在 RTL 布局中，前进即为向左移动，后退即为向右移动。</p>
              <p>有关 RTL 文本的详细开发指南，详见：</p>
              <div class="modulettes">
                <a class="modulette container default" href="https://developer.android.com/training/basics/supporting-devices/languages.html" target="_blank">
                  <img alt="" class="icon callout-icon" src="<?php static_url('../static/spec/images/callouts/default.svg'); ?>"/>
                  <div class="info">
                    <div class="title">支持不同的语言和文化</div>
                    <span class="subtitle">使用 BidiFormatter 实现 RTL</span>
                  </div>
                </a>
              </div>
              <p>有关 RTL 图标的详细开发指南，详见：</p>
              <div class="modulettes">
                <a class="modulette container default" href="http://google.github.io/material-design-icons/#icons-in-rtl" target="_blank">
                  <img alt="" class="icon callout-icon" src="<?php static_url('../static/spec/images/callouts/default.svg'); ?>">
                    <div class="info">
                      <div class="title">RTL Material Design 图标指南</div>
                      <span class="subtitle">查看如何镜像图标</span>
                    </div>
                  </img>
                </a>
              </div>
              <div class="modulettes">
                <a class="modulette container default" href="https://github.com/devinmancuso/sketch-rtl" target="_blank">
                  <img alt="" class="icon callout-icon" src="<?php static_url('../static/spec/images/callouts/default.svg'); ?>">
                    <div class="info">
                      <div class="title">RTL Sketch 插件</div>
                      <span class="subtitle">把现有的设计和资源文件翻转为 RTL 格式</span>
                    </div>
                  </img>
                </a>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>何时需要镜像</h1>
                    <p>对于镜像最重要的图标是前进和后退按钮。后退和前进导航按钮会调换顺序。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="rtl-mirroring-guidelines-figure-caption-0" src="<?php static_url('../static/media/usability/bidirectionality/usability_bidirectionality_guidelines_when1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="rtl-mirroring-guidelines-figure-caption-0">
                        <p>LTR 后退按钮</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="rtl-mirroring-guidelines-figure-caption-1" src="<?php static_url('../static/media/usability/bidirectionality/usability_bidirectionality_guidelines_when2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="rtl-mirroring-guidelines-figure-caption-1">
                        <p>RTL 后退按钮</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="rtl-mirroring-guidelines-figure-caption-2" src="<?php static_url('../static/media/usability/bidirectionality/usability_bidirectionality_guidelines_when3.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="rtl-mirroring-guidelines-figure-caption-2">
                        <p>LTR 前进按钮</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="rtl-mirroring-guidelines-figure-caption-3" src="<?php static_url('../static/media/usability/bidirectionality/usability_bidirectionality_guidelines_when4.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="rtl-mirroring-guidelines-figure-caption-3">
                        <p>RTL 前进按钮</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>显示向前移动的图标应该被镜像。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="rtl-mirroring-guidelines-figure-caption-4" src="<?php static_url('../static/media/usability/bidirectionality/usability_bidirectionality_guidelines_when5.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="rtl-mirroring-guidelines-figure-caption-4">
                        <p>在 LTR 的 UI 中，面向右侧的自行车通常表示向前移动。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="rtl-mirroring-guidelines-figure-caption-5" src="<?php static_url('../static/media/usability/bidirectionality/usability_bidirectionality_guidelines_when6.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="rtl-mirroring-guidelines-figure-caption-5">
                        <p>在 RTL 的 UI 中，一辆面向左侧的自行车同样表示了向前移动。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>在音量图标右侧有一个滑块时，应该被镜像。滑块的进度方向也要改为从右到左，且声波应该要从右边出现。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 50.0%">
                          <img alt="" aria-describedby="rtl-mirroring-guidelines-figure-caption-6" src="<?php static_url('../static/media/usability/bidirectionality/usability_bidirectionality_guidelines_when9.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="rtl-mirroring-guidelines-figure-caption-6">
                        <p>带滑块的 LTR 音量</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 50.0%">
                          <img alt="" aria-describedby="rtl-mirroring-guidelines-figure-caption-7" src="<?php static_url('../static/media/usability/bidirectionality/usability_bidirectionality_guidelines_when10.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="rtl-mirroring-guidelines-figure-caption-7">
                        <p>镜像后，RTL 的带扬声器图标和滑块的音量</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>有时，水平和圆形方向的时间会同时隐含在图标中。例如，Google Docs 中的撤销和重做按钮同时具有水平方向和圆形方向。</p>
                    <p>在 LTR 中，它们在水平和圆形方向指向相同的时间方向。在 RTL 中，可以选择只显示水平方向，或只显示圆形方向。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 47.3684210526%">
                          <img alt="" aria-describedby="rtl-mirroring-guidelines-figure-caption-8" src="<?php static_url('../static/media/usability/bidirectionality/usability_bidirectionality_guidelines_when13.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="rtl-mirroring-guidelines-figure-caption-8">
                        <p>Google Docs 的工具栏中 LTR 的撤销和重做按钮</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>图标内含有指代文本的图形时，在镜像时需要格外仔细。</p>
                    <p>文本在 RTL 中右对齐。如果在段落开头有缩进，或者在段落末尾有未完结的行，或者段落右端较为粗糙，则图标需要被镜像。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="rtl-mirroring-guidelines-figure-caption-9" src="<?php static_url('../static/media/usability/bidirectionality/usability_bidirectionality_guidelines_when14.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="rtl-mirroring-guidelines-figure-caption-9">
                        <p>LTR 聊天图标</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="rtl-mirroring-guidelines-figure-caption-10" src="<?php static_url('../static/media/usability/bidirectionality/usability_bidirectionality_guidelines_when15.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="rtl-mirroring-guidelines-figure-caption-10">
                        <p>RTL 聊天图标</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>何时不需要镜像</h1>
                    <p>虽然时间的线性流逝方向在 RTL 中需要被镜像，但时间的<strong>圆形</strong>方向不是。在 RTL 语言中，时钟仍然顺时针旋转。时钟图标、或具有顺时针箭头的旋转刷新或进度指示器不应被镜像。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="rtl-mirroring-guidelines-figure-caption-11" src="<?php static_url('../static/media/usability/bidirectionality/usability_bidirectionality_guidelines_whennot1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="rtl-mirroring-guidelines-figure-caption-11">
                        <p>刷新图标显示时间向前移动；方向是顺时针的，图标未被镜像。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="rtl-mirroring-guidelines-figure-caption-12" src="<?php static_url('../static/media/usability/bidirectionality/usability_bidirectionality_guidelines_whennot2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="rtl-mirroring-guidelines-figure-caption-12">
                        <p>历史图标表示倒退时间；方向是逆时针的，图标未被镜像。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>有些图标指代的是在 RTL 世界中没有镜像的实体物体。</p>
                    <p>例如，全世界的键盘和媒体播放器看起来都是一样的，所以它们不应该被镜像。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="rtl-mirroring-guidelines-figure-caption-13" src="<?php static_url('../static/media/usability/bidirectionality/usability_bidirectionality_guidelines_whennot3.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="rtl-mirroring-guidelines-figure-caption-13">
                        <p>键盘图标</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="rtl-mirroring-guidelines-figure-caption-14" src="<?php static_url('../static/media/usability/bidirectionality/usability_bidirectionality_guidelines_whennot4.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="rtl-mirroring-guidelines-figure-caption-14">
                        <p>耳机图标</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>有些图标可能看起来具有方向性，但实际上它们表示的是用右手握住该对象。</p>
                    <p>例如，搜索图标通常在右下侧会有手柄，因为大部分用户是右撇子，会用右手来握住放大镜。</p>
                    <p>在用右手书写的国家中，大部分用户也是右撇子，所以这些图标不应该被镜像。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="rtl-mirroring-guidelines-figure-caption-15" src="<?php static_url('../static/media/usability/bidirectionality/usability_bidirectionality_guidelines_whennot5.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="rtl-mirroring-guidelines-figure-caption-15">
                        <p>搜索图标</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 100.0%">
                          <img alt="" aria-describedby="rtl-mirroring-guidelines-figure-caption-16" src="<?php static_url('../static/media/usability/bidirectionality/usability_bidirectionality_guidelines_whennot6.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="rtl-mirroring-guidelines-figure-caption-16">
                        <p>咖啡图标</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>大多数 RTL 国家没有反斜杠。在 RTL 语言环境的图像中需要保留反斜杠。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="rtl-mirroring-guidelines-figure-caption-17" src="<?php static_url('../static/media/usability/bidirectionality/usability-bidirectionality-guidelines-when7.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="rtl-mirroring-guidelines-figure-caption-17">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>在 LTR 和 RTL 语言中，从左向右的斜线都表示关闭状态</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 100.0%">
                          <img alt="" aria-describedby="rtl-mirroring-guidelines-figure-caption-18" src="<?php static_url('../static/media/usability/bidirectionality/usability-bidirectionality-guidelines-when8.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="rtl-mirroring-guidelines-figure-caption-18">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>RTL 语言中的关闭状态不用 RTL 的斜线。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>时间的流逝<br></h1>
                    <p>在大多数情况下，一个随时间进行的动作需要被镜像。<br><br>要显示从右向左移动，走动的人物的图标应该向左。</p>
                    <p>“下一页”显示在左侧，“上一页”显示在右侧。</p>
                    <p>进度条的 0% 在右侧，100% 在左侧，并从右向左填充进度条。</p>
                    <p>日历中的日期从右向左显示。<br></p>
                    <p>不要镜像媒体播放按钮和媒体进度指示器，因为它们指的是播放的方向，而不是时间的方向。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 47.3684210526%">
                          <img alt="" aria-describedby="rtl-mirroring-guidelines-figure-caption-19" src="<?php static_url('../static/media/usability/bidirectionality/usability_bidirectionality_guidelines_whennot7.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="rtl-mirroring-guidelines-figure-caption-19">
                        <p>由于媒体播放按钮和进度指示器反映的是播放的方向，因此它们不会被镜像。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 34.2105263158%">
                          <img alt="" aria-describedby="rtl-mirroring-guidelines-figure-caption-20" src="<?php static_url('../static/media/usability/bidirectionality/usability_bidirectionality_guidelines_whennot_do.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="rtl-mirroring-guidelines-figure-caption-20">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>媒体播放器的控件始终为 LTR。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 34.2105263158%">
                          <img alt="" aria-describedby="rtl-mirroring-guidelines-figure-caption-21" src="<?php static_url('../static/media/usability/bidirectionality/usability_bidirectionality_guidelines_whennot_dont.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="rtl-mirroring-guidelines-figure-caption-21">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>不要镜像媒体播放器或进度条。这些元素的方向代表的是磁带的方向，不是时间的方向。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="bidirectionality-localization" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            本地化
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-module-module col-3 h1-spacing">
                  <div class="module">
                    <h1>图形中的文本</h1>
                    <p>包含文本的图形通常需要本地化。</p>
                  </div>
                  <div class="module"></div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>数字</h1>
                    <p>数字、以及包含数字的图标，必须本地化为当地语言所使用的数字。例如，孟加拉语、马拉地语、尼泊尔语、和一些阿拉伯语地区，使用的是不同形式的数字。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                        <img alt="" aria-describedby="localization-figure-caption-0" src="<?php static_url('../static/media/usability/bidirectionality/usability_bidirectionality_other1.png'); ?>"/>
                      </div>
                      <figcaption id="localization-figure-caption-0">
                        <p>LTR 的 UI 中包含数字的图标。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="localization-figure-caption-1" src="<?php static_url('../static/media/usability/bidirectionality/usability_bidirectionality_other2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="localization-figure-caption-1">
                        <p>阿拉伯语中 RTL 的图标</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>镜像</h1>
                    <p>有时，内容需要被镜像，即使 UI 没有被镜像。例如，当用户在一个 LTR 的文档中编辑一个 RTL 的段落时，那段 RTL 文本的工具栏按钮也应该是 RTL 的。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 3040px">
                        <div class="frame " style="padding-top: 76.3157894737%">
                          <img alt="" aria-describedby="localization-figure-caption-2" src="<?php static_url('../static/media/usability/bidirectionality/usability_bidirectionality_other3.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="localization-figure-caption-2">
                        <p>此 LTR 文档中的 RTL 段落。缩进和列表的按钮应该是 RTL 的，即使主界面方向仍然是 LTR。</p>
                        <p>1. 段落右对齐<br>
                          2. 图标翻转<br>
                          3. 希伯来文的文本方向是 RTL</p>
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