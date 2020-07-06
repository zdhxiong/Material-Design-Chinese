<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?= $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>应用无法完成预期操作时会发生错误。</h1>
          <div class="col-list">
            <section class="module-module-figure col-3 h3-spacing">
              <div class="module">
                <p>一些错误示例包括：</p>
                <ul class="lst-kix_29eeo766e8cf-0 start">
                  <li>用户的输入无法识别</li>
                  <li>应用无法载入</li>
                  <li>同时执行不兼容的操作</li>
                </ul>
              </div>
              <div class="module">
                <h3>错误类型</h3>
                <p>用户输入错误<br>
                  应用错误<br>
                  不兼容的状态错误</p>
                <h3>具体的错误模式</h3>
                <p>表单<br>
                  普通使用错误<br>
                  同步错误<br>
                  网络连接<br>
                  权限</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 3000px">
                    <div class="frame " style="padding-top: 100.0%">
                      <img alt="" src="<?= static_url('../static/media/patterns/errors/patterns_errors.png'); ?>" loading="lazy"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="errors.html#errors-usage" data-qp-ui-data-id="qp:1">用法</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="errors.html#errors-user-input-errors" data-qp-ui-data-id="qp:2">用户输入错误</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="errors.html#errors-app-errors" data-qp-ui-data-id="qp:3">应用错误</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="errors.html#errors-incompatible-state-errors" data-qp-ui-data-id="qp:4">不兼容的状态错误</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="errors-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            用法
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div><p>应用无法完成操作时发生错误，例如：</p>
              <ul class="lst-kix_js14ueu0qjs1-0 start">
                <li>应用无法识别用户输入</li>
                <li>系统或应用失败</li>
                <li>用户试图同时进行不兼容的操作</li>
              </ul>
              <p>通过优化设计，使用户能轻松地输入信息，最大限度地减少错误。应用应该使用通用数据格式，以帮助用户理解。</p>
              <p>解决错误：</p>
              <ul class="lst-kix_ssfjdsdhclqn-0 start">
                <li>清楚的告诉用户发生了什么</li>
                <li>告诉用户如何解决这个错误</li>
                <li>尽可能保留用户的输入</li>
              </ul>
            </div>
          </div>
        </div>

        <div id="errors-user-input-errors" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            用户输入错误
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>在监测到用户输入错误后立即帮助用户进行修复。如果监测到错误，则禁用提交表单功能，如果仅在提交表单后才能监测到错误，清楚地说明错误原因和修复方式。</p>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module"><h1>文本字段输入</h1>
                    <p><strong>帮助文本</strong>可以包含在用户与表单上的每个字段交互之前、期间和之后。</p>
                    <p>仅在用户与输入字段交互之后才显示<strong>错误文本</strong>。如果用户输入了不正确的数据，帮助文本可能会转换为错误文本。</p>
                    <p>缩减表单文本，只显示要点。不是所有文本输入框都需要帮助文本或错误文本。</p>
                    <p>规格：</p>
                    <p>在文本字段和下面的错误文本之间放置 16dp 的垂直间距。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="user-input-errors-figure-caption-0" src="<?= static_url('../static/media/patterns/errors/patterns_errors_userinput1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="user-input-errors-figure-caption-0">
                        <p>文本输入框示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="user-input-errors-figure-caption-1" src="<?= static_url('../static/media/patterns/errors/patterns_errors_userinput2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="user-input-errors-figure-caption-1">
                        <p>带有错误文本的文本输入框示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2 h1-spacing">
                  <div class="module">
                    <h1>表单提交</h1>
                    <p>默认情况下，提交按钮应处于启用状态。</p>
                    <p>如果你正在进行内联表单验证，并且已清楚地标记出出现错误的字段，则可能会禁用提交按钮，直到错误被更正。</p>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2 h1-spacing">
                  <div class="module">
                    <h1>颜色</h1>
                    <p>错误文本应该反映产品的<a href="../style/color.html">色调</a>。建议对错误状态使用对比度较高的颜色，例如像红色或橙色之类的暖色调。</p>
                    <p>错误文本应该清晰易读，与背景色有明显的对比。</p>
                    <p>网站 <a href="http://webaim.org/" target="_blank">webaim.org</a> 提供了颜色对比度检查工具。</p>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>浅色背景下的字体</h2>
                    <ul class="lst-kix_ok30zaagthgs-0 start">
                      <li>错误：Roboto Regular 12sp</li>
                      <li>提示文本和帮助文本：#000000 带 28% 的不透明度</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 55.7894736842%">
                          <img alt="" aria-describedby="user-input-errors-figure-caption-2" src="<?= static_url('../static/media/patterns/errors/patterns_errors_userinput3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="user-input-errors-figure-caption-2">
                        <p>浅色主题下的这些状态：带提示文本的正常状态，带错误文本的正常状态，带帮助文本的正常状态，带帮助文本和错误文本的正常状态</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>深色背景下的字体</h2>
                    <ul class="lst-kix_ok30zaagthgs-0">
                      <li>错误：Roboto Regular 12sp</li>
                      <li>提示文本和帮助文本：#FFFFFF 带 50% 的不透明度</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 55.7894736842%">
                          <img alt="" aria-describedby="user-input-errors-figure-caption-3" src="<?= static_url('../static/media/patterns/errors/patterns_errors_userinput4.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="user-input-errors-figure-caption-3">
                        <p>深色主题下的这些状态：带提示文本的正常状态，带错误文本的正常状态，带帮助文本的正常状态，带帮助文本和错误文本的正常状态</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>帮助和错误文本</h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="user-input-errors-figure-caption-4" src="<?= static_url('../static/media/patterns/errors/patterns_errors_userinput5.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="user-input-errors-figure-caption-4">
                        <p>帮助文本示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="user-input-errors-figure-caption-5" src="<?= static_url('../static/media/patterns/errors/patterns_errors_userinput6.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="user-input-errors-figure-caption-5">
                        <p>错误文本示例</p>
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
                          <img alt="" aria-describedby="user-input-errors-figure-caption-6" src="<?= static_url('../static/media/patterns/errors/patterns_errors_userinput7.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="user-input-errors-figure-caption-6">
                        <p>帮助文本示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="user-input-errors-figure-caption-7" src="<?= static_url('../static/media/patterns/errors/patterns_errors_userinput8.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="user-input-errors-figure-caption-7">
                        <p>错误文本示例</p>
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
                        <div class="frame " style="padding-top: 29.4736842105%">
                          <img alt="" aria-describedby="user-input-errors-figure-caption-8" src="<?= static_url('../static/media/patterns/errors/patterns_errors_userinput9.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="user-input-errors-figure-caption-8">
                        <p>带帮助文本的正常状态，和带帮助文本和错误文本的正常状态示例</p>
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
                        <div class="frame " style="padding-top: 17.7777777778%">
                          <img alt="" aria-describedby="user-input-errors-figure-caption-9" src="<?= static_url('../static/media/patterns/errors/patterns_errors_userinput_keyline1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="user-input-errors-figure-caption-9">
                        <p>输入文本和错误文本</p>
                        <p>瓦片高度：64dp<br>
                          输入文本上方边距：16dp<br>
                          输入文本下方边距：8dp<br>
                          错误文本上下边距：4dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>带浮动文本标签的错误文本</h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="user-input-errors-figure-caption-10" src="<?= static_url('../static/media/patterns/errors/patterns_errors_userinput10.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="user-input-errors-figure-caption-10">
                        <p>已有输入文字的浮动文本标签示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="user-input-errors-figure-caption-11" src="<?= static_url('../static/media/patterns/errors/patterns_errors_userinput11.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="user-input-errors-figure-caption-11">
                        <p>有错误文本的浮动文本标签示例</p>
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
                        <div class="frame " style="padding-top: 29.4736842105%">
                          <img alt="" aria-describedby="user-input-errors-figure-caption-12" src="<?= static_url('../static/media/patterns/errors/patterns_errors_userinput12.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="user-input-errors-figure-caption-12">
                        <p>带提示文本的正常状态，带输入文本，标签和错误文本的正常状态示例</p>
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
                        <div class="frame " style="padding-top: 22.2222222222%">
                          <img alt="" aria-describedby="user-input-errors-figure-caption-13" src="<?= static_url('../static/media/patterns/errors/patterns_errors_userinput_keyline2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="user-input-errors-figure-caption-13">
                        <p>浮动文本标签规格</p>
                        <p>瓦片高度：80dp<br>
                          标签文本上方边距：8dp<br>
                          输入文本上下边距：8dp<br>
                          错误文本上下边距：4dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <h1>文本框输入 - 少于/超过字符数或词数</h1>
              <p>字符计数器可以在用户与字段交互之前、期间和之后显示。可以考虑在用户输入的字数接近字数限制之前不显示计数器。</p>
              <ul class="lst-kix_1u8c9dhapu10-0 start">
                <li>计数器字体是 Roboto Regular 12sp</li>
                <li>计数器字段有 16dp 的额外的底部边距</li>
              </ul>
              <div class="col-list">
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>带字符计数器的单行输入框</h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="user-input-errors-figure-caption-14" src="<?= static_url('../static/media/patterns/errors/patterns_errors_userinput13.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="user-input-errors-figure-caption-14">
                        <p>带有字符计数器和输入文本的单行输入框示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="user-input-errors-figure-caption-15" src="<?= static_url('../static/media/patterns/errors/patterns_errors_userinput14.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="user-input-errors-figure-caption-15">
                        <p>带字符计数器和错误文本的单行输入框示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>带字符计数器的多行输入框</h2></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="user-input-errors-figure-caption-16" src="<?= static_url('../static/media/patterns/errors/patterns_errors_userinput15.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="user-input-errors-figure-caption-16">
                        <p>带有字符计数器和已输入的文本的多行文本框示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="user-input-errors-figure-caption-17" src="<?= static_url('../static/media/patterns/errors/patterns_errors_userinput16.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="user-input-errors-figure-caption-17">
                        <p>带有字符计数器和错误文本的多行输入框示例</p>
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
                        <div class="frame " style="padding-top: 80.0%">
                          <img alt="" aria-describedby="user-input-errors-figure-caption-18" src="<?= static_url('../static/media/patterns/errors/patterns_errors_userinput17.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="user-input-errors-figure-caption-18">
                        <p>这些状态的示例：含已输入的文本的单行输入框，含错误文本的单行输入框，含已输入文本的多行输入框，含错误文本的多行输入框</p>
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
                        <div class="frame " style="padding-top: 24.4444444444%">
                          <img alt="" aria-describedby="user-input-errors-figure-caption-19" src="<?= static_url('../static/media/patterns/errors/patterns_errors_userinput_keyline3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="user-input-errors-figure-caption-19">
                        <p>文本框输入</p>
                        <p>整个输入区域高度：88dp</p>
                        <p>单行文本框标签顶部边距：16dp<br>
                          单行文本框输入文本的上下边距：8dp</p>
                        <p>计数器下方边距：8dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>不兼容的值</h1>
                    <p>在用户与文本字段交互期间或之后显示不兼容值的错误。</p>
                    <p>如果有两个或多个字段存在不兼容的输入：</p>
                    <ul class="lst-kix_q3mgtx4icxgk-0 start">
                      <li>在文本框中，指明需要修复。在下面添加错误信息。</li>
                      <li>在表单或屏幕顶部显示一条消息，总结出所需进行的修复和任何其他说明。</li>
                    </ul>
                    <h2>表单提交时检测到错误</h2>
                    <p>重新加载表单，显示所有的错误消息，并滚动到顶部。每个字段的错误消息都可以在用户处理完该字段后解决。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="user-input-errors-figure-caption-20" src="<?= static_url('../static/media/patterns/errors/patterns_errors_userinput18.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="user-input-errors-figure-caption-20">
                        <p>表单示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="user-input-errors-figure-caption-21" src="<?= static_url('../static/media/patterns/errors/patterns_errors_userinput19.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="user-input-errors-figure-caption-21">
                        <p>提交表单后检测到错误的示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>未完成的表单</h1>
                    <p>空的表单字段应该用文本框下面的错误文本指示。</p>
                    <p>显示未完成的表单错误，表示用户在填写表单时跳过了某个字段。如果无法通过表单检测到用户的输入进度，则在用户尝试提交表单后显示错误。</p>
                    <h2>表单提交之前出现多个错误</h2>
                    <p>为每一个表单字段单独添加错误消息。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="user-input-errors-figure-caption-22" src="<?= static_url('../static/media/patterns/errors/patterns_errors_userinput21.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="user-input-errors-figure-caption-22">
                        <p>表单示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="user-input-errors-figure-caption-23" src="<?= static_url('../static/media/patterns/errors/patterns_errors_userinput22.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="user-input-errors-figure-caption-23">
                        <p>未完成的表单示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3 h1-spacing">
                  <div class="module">
                    <h1>单行列表错误</h1></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="user-input-errors-figure-caption-24" src="<?= static_url('../static/media/patterns/errors/patterns_errors_userinput23.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="user-input-errors-figure-caption-24">
                        <p>单行列表错误示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="errors-app-errors" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            应用错误
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>应用错误和用户的输入无关。</p>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>一般的应用错误</h1>
                    <p>当出现错误时，在显示错误消息之前应显示加载提示符。</p>
                    <p>不可用的功能可以在 UI 中用禁用状态表示。例如，按钮可能不能以禁用状态显示，则需要用匹配的文本来说明按钮不可用。不是每个错误都需要弹出一个新的组件。</p>
                    <p>如果有可能，请为用户提供一个操作，以帮助他们解决错误。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="app-errors-figure-caption-0" src="<?= static_url('../static/media/patterns/errors/patterns_errors_app1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="app-errors-figure-caption-0">
                        <p>警告框：阻止了正常操作的错误，使用警告框来作为反馈</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="app-errors-figure-caption-1" src="<?= static_url('../static/media/patterns/errors/patterns_errors_app2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="app-errors-figure-caption-1">
                        <p></p>
                        <p>snackbar 可以显示次要的错误。Snackbars 是短暂显示的。不要把 snackbar 用于重要的、需要持续显示的、或大量的错误。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>同步错误/加载失败</h1>
                    <p>当遇到同步错误或加载失败时，应该让用户尽可能可以和应用的其余部分进行交互。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="app-errors-figure-caption-2" src="<?= static_url('../static/media/patterns/errors/patterns_errors_app3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="app-errors-figure-caption-2">
                        <p>内容加载失败的空状态</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="app-errors-figure-caption-3" src="<?= static_url('../static/media/patterns/errors/patterns_errors_app4.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="app-errors-figure-caption-3">
                        <p>带操作的容器/组件的特定错误</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>网络连接</h1>
                    <p>当连接断开时，用户应该尽可能多的能和应用的其余部分进行交互。</p>
                    <p>如果可以的话，提供一个链接来帮助用户完成任务。请提供真正能提供帮助的链接。例如，在已经检测到操作会失败的情况下，不要提供类似 “再试一次” 的选项。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="app-errors-figure-caption-4" src="<?= static_url('../static/media/patterns/errors/patterns_errors_app5.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="app-errors-figure-caption-4">
                        <p></p>
                        <p>带操作的 Snackbar 来重试</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="app-errors-figure-caption-5" src="<?= static_url('../static/media/patterns/errors/patterns_errors_app6.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="app-errors-figure-caption-5">
                        <p>只有在线状态才可用时，显示的空状态</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="errors-incompatible-state-errors" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            不兼容的状态错误
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>当用户试图进行不兼容的操作时，会发生不兼容的状态错误，例如，在飞行模式下打电话、或在受限模式下进行截屏。让用户清楚的知道他们所选择的状态以及会造成的影响，以避免用户进入这些状态。当这些错误被触发时，并不代表是用户的错误。</p>
              <div class="col-list">
                <section class="module-figure-module col-3 h2-spacing">
                  <div class="module">
                    <h2>一般的不兼容</h2>
                    <p>澄清产生错误的原因。</p>
                    <p>例如，在受限模式下，不允许使用截屏和高级功能。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="incompatible-state-errors-figure-caption-0" src="<?= static_url('../static/media/patterns/errors/patterns_errors_state1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="incompatible-state-errors-figure-caption-0">
                        <p>Snackbar + 特定模式的指示器</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>离线状态</h2>
                    <p>当用户处于离线状态，但尝试执行需要联网的任务时，显示一个持续显示的、不显眼的指示符。</p>
                    <p>示例：</p>
                    <ul class="lst-kix_jj4uoi73ffco-0 start">
                      <li>在飞行模式下打电话</li>
                      <li>离线时音乐仍然是可用的</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="incompatible-state-errors-figure-caption-1" src="<?= static_url('../static/media/patterns/errors/patterns_errors_state2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="incompatible-state-errors-figure-caption-1">
                        <p>Snackbar</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="incompatible-state-errors-figure-caption-2" src="<?= static_url('../static/media/patterns/errors/patterns_errors_state3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="incompatible-state-errors-figure-caption-2">
                        <p>指示设备已处于飞行模式。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3 h2-spacing">
                  <div class="module">
                    <h2>请求权限</h2>
                    <p>如果你的应用需要用户授予权限才能继续操作，请在应用流程中包含权限申请，而不是将其视为错误。</p>
                    <p>如果在首次运行应用之前需要获取权限，请考虑将请求权限的操作包含在应用的首次运行体验中。</p>
                    <p>示例：</p>
                    <ul class="lst-kix_jj4uoi73ffco-0">
                      <li>应用的权限已变更</li>
                      <li>应用内购买已停用</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="incompatible-state-errors-figure-caption-3" src="<?= static_url('../static/media/patterns/errors/patterns_errors_state4.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="incompatible-state-errors-figure-caption-3">
                        <p>对话框</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
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
