<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?= $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>文本框允许用户输入、编辑和选择文本。</h1>
          <div class="gas-intro-h1-bottom"></div>
          <div class="col-list">
            <section class="module-module-figure col-3 h3-spacing">
              <div class="module">
                <p>文本框通常出现在表单中，但也可以出现在其他地方，例如对话框和搜索框。</p>
              </div>
              <div class="module">
                <h3>用法</h3>
                <p>文本框可以对输入进行验证、帮助修复错误的输入、自动完成输入的词、以及提供输入建议。</p>
                <h3>文本框类型</h3>
                <p>单行<br>
                  多行<br>
                  文本区域</p>
                <h3>输入类型</h3>
                <p>格式化输入<br>
                  嵌套菜单 & 选择器</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 3000px">
                    <div class="frame " style="padding-top: 100.0%">
                      <img alt="alt-text" src="<?= static_url('../static/media/components/text-fields/components_text_fields.png'); ?>" loading="lazy"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="text-fields.html#text-fields-principles" data-qp-ui-data-id="qp:1">原则</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="text-fields.html#text-fields-layout" data-qp-ui-data-id="qp:2">布局</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="text-fields.html#text-fields-states" data-qp-ui-data-id="qp:3">状态</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="text-fields.html#text-fields-field-types" data-qp-ui-data-id="qp:4">文本框类型</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="text-fields.html#text-fields-input-types" data-qp-ui-data-id="qp:5">输入类型</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="text-fields.html#text-fields-field-variations" data-qp-ui-data-id="qp:6">文本框变体</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="text-fields.html#text-fields-text-field-boxes" data-qp-ui-data-id="qp:7">文本字段框</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="text-fields-principles" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            原则
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
                    <p>文本框应具有以下特征：</p>
                  </div>
                  <div class="module">
                    <h1>可识别</h1>
                    <p>文本框应使用可点击的触摸目标，指示用户可以输入信息。</p>
                    <h1>容易找到</h1>
                    <p>应该要能很容易的在其他元素中找到文本框。</p>
                    <h1>可读的</h1>
                    <p>文本框应该指明其状态 - 启用还是禁用、为空还是已有文本输入、通过验证还是未通过验证 - 具有清晰的标签、输入框和辅助文本。</p>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="text-fields-layout" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            布局
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>文本框包含以下元素：</p>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>标签</h1>
                    <p>文本框标签显示字段所需的输入类型。每个文本框都应该有一个标签。</p>
                    <p>标签和输入线对齐，且始终可见。它们可以处于静止状态（当禁用文本框或文本字段为空时）或浮动状态。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="alt-text" aria-describedby="layout-figure-caption-0" src="<?= static_url('../static/media/components/text-fields/label_resting_redline.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="layout-figure-caption-0">
                        <p><strong>静止状态的标签文本</strong><br>
                          顶部内边距：16dp<br>
                          底部内边距：8dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="alt-text" aria-describedby="layout-figure-caption-1" src="<?= static_url('../static/media/components/text-fields/label_floating_redline.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="layout-figure-caption-1">
                        <p><strong>浮动状态的标签文本</strong><br>
                          标签上方内边距：16dp<br>
                          标签下方内边距：8dp<br>
                          输入框下方内边距：8dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>输入线</h1>
                    <p>输入线表示输入文本的位置，它位于标签下方。</p>
                    <p>当文本框处于聚焦状态或包含错误时，输入线的颜色和厚度会有所不同。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="alt-text" aria-describedby="layout-figure-caption-2" src="<?= static_url('../static/media/components/text-fields/label_resting.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="layout-figure-caption-2">
                        <p>当文本框为空时，标签位于输入线上方静止显示。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="alt-text" aria-describedby="layout-figure-caption-3" src="<?= static_url('../static/media/components/text-fields/label_floating.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="layout-figure-caption-3">
                        <p>当文本框处于聚焦状态或有输入的文本时，标签会向上浮动。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3 h1-spacing">
                  <div class="module">
                    <h1>光标</h1>
                    <p>光标指示用户当前输入的位置。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="alt-text" aria-describedby="layout-figure-caption-4" src="<?= static_url('../static/media/components/text-fields/cursor.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="layout-figure-caption-4">
                        <p>光标位于标签边缘，直到用户开始输入时才会移动。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>输入文本</h1>
                    <p>向文本框中键入的文本称为输入文本。</p>
                    <p>输入文本的第一个字母（以及每一个句子的第一个字母）应在适当的时候大写。例如：</p>
                    <ul class="lst-kix_p64vnct4r9nx-0 start">
                      <li>命名一些东西，例如一个闹钟</li>
                      <li>包含短语，例如短信</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="alt-text" aria-describedby="layout-figure-caption-5" src="<?= static_url('../static/media/components/text-fields/input.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="layout-figure-caption-5">
                        <p>在聚焦的文本框中的输入文本</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="alt-text" aria-describedby="layout-figure-caption-6" src="<?= static_url('../static/media/components/text-fields/input_redline.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="layout-figure-caption-6">
                        <p><strong>输入文本</strong><br>
                          顶部内边距：8dp<br>
                          底部内边距：8dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module">
                    <p>输入文本可以和自动完成一起使用，以帮助读写能力不好的用户、或使用外语输入的用户。例如自动完成可以：</p>
                    <ul class="lst-kix_jrzyv6q3498m-0 start">
                      <li>随着用户输入提供输入建议（每次敲击键盘时都刷新建议）</li>
                      <li>使用默认的输入文本填充字段</li>
                    </ul>
                    <p>按下返回按钮即接受当前自动完成显示的文本。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="alt-text" aria-describedby="layout-figure-caption-7" src="<?= static_url('../static/media/components/text-fields/autocomplete.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="layout-figure-caption-7">
                        <p>降低建议文本的不透明度，同时保证输入文本完全不透明。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>占位符文本（提示文本）</h1>
                    <p>占位符文本位于输入框中，直到用户开始输入文本。它可以显示一个操作或示例，例如一个手机号或邮件地址。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="alt-text" aria-describedby="layout-figure-caption-8" src="<?= static_url('../static/media/components/text-fields/placeholder.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="layout-figure-caption-8">
                        <p>占位符文本可以在空的文本框中显示，直到用户输入。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="alt-text" aria-describedby="layout-figure-caption-9" src="<?= static_url('../static/media/components/text-fields/placeholder_redline.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="layout-figure-caption-9">
                        <p><strong>占位符文本<br>
                          </strong>标签上方内边距：16dp<br>
                          占位符文本上方内边距：8dp<br>
                          占位符文本下方内边距：8dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>帮助文本</h1>
                    <p>帮助文本提供文本框的有关信息，例如输入的文本会被用在哪里。</p>
                    <p>它应该持续显示、或只在聚焦时显示。</p>
                    <p>规格：</p>
                    <ul class="lst-kix_j55ccbwjwiww-0 start">
                      <li>左对齐</li>
                      <li>如果可能的话，尽量保持在单行；有多行文本时，也可以使用换行</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="alt-text" aria-describedby="layout-figure-caption-10" src="<?= static_url('../static/media/components/text-fields/helper.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="layout-figure-caption-10">
                        <p>帮助文本可以在文本框下方提供额外的信息。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="alt-text" aria-describedby="layout-figure-caption-11" src="<?= static_url('../static/media/components/text-fields/helper_redline.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="layout-figure-caption-11">
                        <p><strong>帮助文本<br>
                          </strong>帮助文本上方内边距：8dp</p>
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
                          <img alt="alt-text" aria-describedby="layout-figure-caption-12" src="<?= static_url('../static/media/components/text-fields/placeholder_helper.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="layout-figure-caption-12">
                        <p>帮助文本可以借助占位符文本来指导用户进行输入。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>错误信息</h1>
                    <p>当输入存在错误时，可以在输入线下方显示错误信息，并提供如何修复错误的说明。在错误修复之前，错误信息将代替帮助文本。</p>
                    <p>如果可能的话，错误信息应尽量显示在一行内。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="alt-text" aria-describedby="layout-figure-caption-13" src="<?= static_url('../static/media/components/text-fields/error.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="layout-figure-caption-13">
                        <p>错误信息会指导用户修复错误的输入。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="alt-text" aria-describedby="layout-figure-caption-14" src="<?= static_url('../static/media/components/text-fields/error_redline.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="layout-figure-caption-14">
                        <p><strong>错误信息</strong> <br>
                          错误信息上方内边距：8dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>错误信息前面带有 “Error” 文本（或者一个错误图标），以使色盲能更清楚的看到错误状态。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="alt-text" aria-describedby="layout-figure-caption-15" src="<?= static_url('../static/media/components/text-fields/error_word.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="layout-figure-caption-15">
                        <p>在错误信息之前的 “Error:” （包含冒号）</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="alt-text" aria-describedby="layout-figure-caption-16" src="<?= static_url('../static/media/components/text-fields/error_icon.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="layout-figure-caption-16">
                        <p>错误信息内包含错误图标</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>必填字段</h1>
                    <p>要指示一个字段是必填的，请在标签旁边显示一个星号（*）。在表单底部，写上星号表示必填字段。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="alt-text" aria-describedby="layout-figure-caption-17" src="<?= static_url('../static/media/components/text-fields/required_resting.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="layout-figure-caption-17">
                        <p>空的文本框中的必填星号指示符</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="alt-text" aria-describedby="layout-figure-caption-18" src="<?= static_url('../static/media/components/text-fields/required_floating.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="layout-figure-caption-18">
                        <p>已输入的文本框中的必填星号指示符。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>要指示一个字段是可选的，请在标签旁边添加文本 “可选”。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="alt-text" aria-describedby="layout-figure-caption-19" src="<?= static_url('../static/media/components/text-fields/optional_resting.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="layout-figure-caption-19">
                        <p>空文本框中指示可选的文本</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="alt-text" aria-describedby="layout-figure-caption-20" src="<?= static_url('../static/media/components/text-fields/optional_floating.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="layout-figure-caption-20">
                        <p>已输入的文本框中指示可选的文本</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>表单中有少量的必填字段时，指示出所有的必填字段。但是，如果只有少量的可选字段，则指示出所有的可选字段，而不必指示出必填字段。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="bordered frame" style="padding-top: 177.777777778%">
                          <img alt="alt-text" aria-describedby="layout-figure-caption-21" src="<?= static_url('../static/media/components/text-fields/required_example.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="layout-figure-caption-21">
                        <p>Name 和 zip code 是表单中仅有的必填字段。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="bordered frame" style="padding-top: 177.777777778%">
                          <img alt="alt-text" aria-describedby="layout-figure-caption-22" src="<?= static_url('../static/media/components/text-fields/optional_example.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="layout-figure-caption-22">
                        <p>Description 是表单中唯一的可选字段。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>字符计数器</h1>
                    <p>文本框有字数限制时，可以使用字符计数器。</p>
                    <p>规格：</p>
                    <ul class="lst-kix_bz9scphgshi2-0 start">
                      <li>右对齐</li>
                      <li>显示已输入的字符和字符限制之间的比例（格式为：已输入字符 / 字符限制）</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="alt-text" aria-describedby="layout-figure-caption-23" src="<?= static_url('../static/media/components/text-fields/character_counter.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="layout-figure-caption-23">
                        <p>字符计数器显示最多可输入 10 个字符，已输入了 5 个。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="alt-text" aria-describedby="layout-figure-caption-24" src="<?= static_url('../static/media/components/text-fields/character_counter_redline.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="layout-figure-caption-24">
                        <p><strong>字符计数器<br>
                          </strong>输入线下方内边距：8dp </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>图标符号</h1>
                    <p>图标描述了文本框需要的输入类型。它们显示在文本框左侧。</p>
                    <p>图标也可以作为的触摸目标。例如，日历图标可以在触摸时展开日期选择器。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="alt-text" aria-describedby="layout-figure-caption-25" src="<?= static_url('../static/media/components/text-fields/icon.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="layout-figure-caption-25">
                        <p>日历图标表示此文本框用于输入日期。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="alt-text" aria-describedby="layout-figure-caption-26" src="<?= static_url('../static/media/components/text-fields/icon_redline.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="layout-figure-caption-26">
                        <p><strong>图标符号<br>
                          </strong>宽度：24dp<br>
                          图标符号和标签之间的间距：16dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>语音输入图标</h1>
                    <p>麦克风图标表示用户可以使用语音输入。</p>
                    <p>语音输入图标右对齐，始终启用。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="alt-text" aria-describedby="layout-figure-caption-27" src="<?= static_url('../static/media/components/text-fields/voice.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="layout-figure-caption-27">
                        <p>点击图标后，用户可以使用语音进行输入。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="alt-text" aria-describedby="layout-figure-caption-28" src="<?= static_url('../static/media/components/text-fields/voice_redline.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="layout-figure-caption-28">
                        <p><strong>语音输入图标<br>
                          </strong>宽度：24dp<br>
                          图标下方内边距：8dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>下拉图标</h1>
                    <p>下拉箭头表示文本框包含一个嵌套的下拉选择。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="alt-text" aria-describedby="layout-figure-caption-29" src="<?= static_url('../static/media/components/text-fields/dropdown.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="layout-figure-caption-29">
                        <p>点击下拉箭头，可以展开嵌套的下拉选择组件。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="alt-text" aria-describedby="layout-figure-caption-30" src="<?= static_url('../static/media/components/text-fields/dropdown_redline.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="layout-figure-caption-30">
                        <p><strong>下拉箭头容器<br>
                          </strong>宽度：24dp<br>
                          高度：24dp<br>
                          图标底部内边距：8dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>清除按钮</h1>
                    <p>清除按钮可以使用户清空整个输入字段。</p>
                    <p>它们在文本框中右对齐。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="alt-text" aria-describedby="layout-figure-caption-31" src="<?= static_url('../static/media/components/text-fields/clear.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="layout-figure-caption-31">
                        <p>当在文本框中输入字符后，清除图标将启用。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="alt-text" aria-describedby="layout-figure-caption-32" src="<?= static_url('../static/media/components/text-fields/clear_redline.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="layout-figure-caption-32">
                        <p><strong>清除图标<br>
                          </strong>宽度：24dp<br>
                          高度：24dp<br>
                          图标底部内边距：8dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>在具有很多个字段的表单中，可以缩短文本框。</p>
                    <p>规格：</p>
                    <ul class="lst-kix_ier9rsmt4jr4-0 start">
                      <li>输入文本：13sp</li>
                      <li>减少标签和输入文本之间的间距</li>
                      <li>减少输入文本和帮助文本之间的间距，减少到 50%</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="alt-text" aria-describedby="layout-figure-caption-33" src="<?= static_url('../static/media/components/text-fields/nondense.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="layout-figure-caption-33">
                        <p><strong>正常间距<br>
                          </strong>标签上方内边距：16dp<br>
                          标签下方内边距：8dp<br>
                          输入线上方内边距：8dp<br>
                          输入线下方内边距：8dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="alt-text" aria-describedby="layout-figure-caption-34" src="<?= static_url('../static/media/components/text-fields/dense.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="layout-figure-caption-34">
                        <p><strong>密集型间距<br>
                          </strong>标签上方内边距：8dp<br>
                          标签下方内边距：4dp<br>
                          输入线上方内边距：8dp<br>
                          输入线下方内边距：4dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="text-fields-states" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            状态
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
                    <p>文本框有两个主要状态：启用或禁用。</p>
                    <p>在启用状态下，可以使用这些交互：</p>
                    <ul class="lst-kix_b2tesfhy8leq-0 start">
                      <li>闲置</li>
                      <li>鼠标悬停</li>
                      <li>按下</li>
                      <li>聚焦</li>
                    </ul>
                    <p>文本框输入可以是：</p>
                    <ul class="lst-kix_b2tesfhy8leq-0">
                      <li>为空或已输入</li>
                      <li>通过验证或不通过验证</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 141.973684211%">
                          <img alt="alt-text" aria-describedby="states-figure-caption-0" src="<?= static_url('../static/media/components/text-fields/states.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="states-figure-caption-0">
                        <p>在亮色和暗色主题中的文本框状态</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <h1>文本框状态</h1>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p><strong>启用</strong></p>
                    <p>默认情况下，启用的文本框为空。</p>
                    <p>规格</p>
                    <ul class="lst-kix_29fz7p8qd6kw-0 start">
                      <li>标签位于输入线上方，且有 8dp 的间距</li>
                      <li>标签文本和输入文本字体大小相同</li>
                    </ul>
                    <p>无障碍功能</p>
                    <p>输入线应该具有 3:1 的对比度，以提高可识别性，和大文本相同的 AA 级无障碍标准。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="states-figure-caption-1" src="<?= static_url('../static/media/components/text-fields/empty_idle_light.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="states-figure-caption-1">
                        <p><strong>亮色主题</strong></p>
                        <p><strong>输入线</strong></p>
                      </figcaption>
                    </figure>
                    <ul class="lst-kix_p1l194w35jr3-0 start">
                      <li>厚度：1dp</li>
                      <li>颜色：42% 黑色（3:1 的对比度）</li>
                    </ul>
                    <p><strong>标签文本</strong></p>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>类型：Roboto 16sp</li>
                      <li>颜色：54% 黑色（4.5:1 的对比度）</li>
                      <li>间距：16dp 的顶部内边距，8dp 的底部内边距，和输入线对齐</li>
                    </ul>
                    <p><strong>帮助文本（可选）</strong></p>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>字体：Roboto 12sp</li>
                      <li>颜色：54% 黑色（4.5:1 的对比度）</li>
                      <li>间距：16dp 的左侧内边距，8dp 的顶部内边距</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="states-figure-caption-2" src="<?= static_url('../static/media/components/text-fields/empty_idle_dark.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="states-figure-caption-2">
                        <p><strong>暗色主题</strong></p>
                        <p><strong>输入线</strong></p>
                      </figcaption>
                    </figure>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>厚度：1dp</li>
                      <li>颜色：70% 白色（7:1 的对比度）</li>
                    </ul>
                    <p><strong>标签文本</strong></p>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>字体：Roboto 16sp</li>
                      <li>颜色：70% 白色（7:1 的对比度）</li>
                      <li>间距：16dp 的顶部内边距，8dp 的底部内边距，和输入线对齐</li>
                    </ul>
                    <p><strong>帮助文本（可选）</strong></p>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>字体：Roboto 12sp</li>
                      <li>颜色：70% 白色（7:1 的对比度）</li>
                      <li>间距：16dp 的左侧内边距，8dp 的顶部内边距</li>
                    </ul>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p><strong>禁用</strong></p>
                    <p>禁用的文本框是不能编辑的。它们使用虚线作为输入线，以及使用较低的不透明度，使它们看起来不可点击。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="states-figure-caption-3" src="<?= static_url('../static/media/components/text-fields/disabled_light.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="states-figure-caption-3">
                        <p><strong>亮色主题</strong></p>
                        <p><strong>输入线</strong></p>
                      </figcaption>
                    </figure>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>厚度：1dp</li>
                      <li>颜色：42% 黑色</li>
                      <li>虚线</li>
                    </ul>
                    <p><strong>标签文本</strong></p>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>字体：Roboto 12sp</li>
                      <li>颜色：38% 黑色（2.21:1 的对比度）</li>
                      <li>间距：8dp 的底部内边距，和输入线对齐</li>
                    </ul>
                    <p><strong>输入文本</strong></p>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>字体：Roboto 16sp</li>
                      <li>颜色：42% 黑色（3:1 的对比度）</li>
                      <li>间距：8dp 的顶部内边距，和输入线对齐</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="states-figure-caption-4" src="<?= static_url('../static/media/components/text-fields/disabled_dark.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="states-figure-caption-4">
                        <p><strong>暗色主题</strong></p>
                        <p><strong>输入线</strong></p>
                      </figcaption>
                    </figure>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>厚度：1dp</li>
                      <li>颜色：70% 白色</li>
                      <li>虚线</li>
                    </ul>
                    <p><strong>标签文本</strong></p>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>字体：Roboto 12sp</li>
                      <li>颜色：50% 白色（4.5:1 的对比度）</li>
                      <li>间距：8dp 的底部内边距，和输入线对齐</li>
                    </ul>
                    <p><strong>输入文本</strong></p>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>字体：Roboto 16sp</li>
                      <li>颜色：50% 白色（4.5:1 的对比度）</li>
                      <li>间距：8dp 的顶部内边距，和输入线对齐</li>
                    </ul>
                  </div>
                </section>
              </div>
              <h1>用户交互</h1>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p><strong>鼠标悬停</strong></p>
                    <p>悬停状态给了输入线更多的不透明度，使文本框在桌面端更加醒目。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame " data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 100.0%">
                          <video aria-describedby="states-figure-caption-5" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/text-fields/TextFields-HoverLight-01.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/text-fields/TextFields-HoverLight-01.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="states-figure-caption-5">
                        <p><strong>亮色主题</strong></p>
                        <p><strong>输入线</strong></p>
                      </figcaption>
                    </figure>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>厚度：2dp</li>
                      <li>颜色：87% 黑色（15:1 的对比度）</li>
                    </ul>
                    <p><strong>标签文本</strong></p>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>字体：Roboto 16sp</li>
                      <li>颜色：54% 黑色（4.5:1 的对比度）</li>
                      <li>间距：8dp 的底部内边距，和输入线对齐</li>
                    </ul>
                    <p><strong>帮助文本（可选）</strong></p>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>字体：Roboto 12sp</li>
                      <li>颜色：54% 黑色（4.5:1 的对比度）</li>
                      <li>间距：8dp 的顶部内边距，和输入线对齐</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame " data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 100.0%">
                          <video aria-describedby="states-figure-caption-6" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/text-fields/TextFields-HoverDark-01.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/text-fields/TextFields-HoverDark-01.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="states-figure-caption-6">
                        <p><strong>暗色主题</strong></p>
                        <p><strong>输入线</strong></p>
                      </figcaption>
                    </figure>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>厚度：2dp</li>
                      <li>颜色：100% 白色（13:1 的不透明度）</li>
                    </ul>
                    <p><strong>标签文本</strong></p>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>字体：Roboto 16sp</li>
                      <li>颜色：70% 白色（7:1 的对比度）</li>
                      <li>间距：8dp 的底部内边距，和输入线对齐</li>
                    </ul>
                    <p><strong>帮助文本（可选）</strong></p>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>字体：Roboto 12sp</li>
                      <li>颜色：70% 白色（7:1 的对比度）</li>
                      <li>间距：8dp 的顶部内边距，和输入线对齐</li>
                    </ul>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p><strong>按下</strong></p>
                    <p>按下时，文本框标签缩小并浮动到字段上方，显示出光标和占位符文本。</p>
                    <p>为了指示出该字段已被激活，在输入线、标签文本和光标上使用 UI 的主色。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame " data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 100.0%">
                          <video aria-describedby="states-figure-caption-7" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/text-fields/TextFields-PressLight-01.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/text-fields/TextFields-PressLight-01.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="states-figure-caption-7">
                        <p><strong>亮色主题</strong></p>
                        <p><strong>输入线</strong></p>
                      </figcaption>
                    </figure>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>厚度：2dp</li>
                      <li>颜色：100% 主色（暗色 A700）</li>
                      <li>动效：涟漪</li>
                    </ul>
                    <p><strong>标签文本</strong></p>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>字体：Roboto 12sp</li>
                      <li>颜色：87% 主色（暗色 A700）</li>
                      <li>间距：8dp 的底部内边距，和输入线对齐</li>
                    </ul>
                    <p><strong>占位符文本（可选）</strong></p>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>字体：Roboto 16sp</li>
                      <li>颜色：42% 黑色（3:1 的对比度）</li>
                      <li>间距：8dp 的底部内边距，和输入线对齐</li>
                    </ul>
                    <p><strong>帮助文本（可选）</strong></p>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>字体：Roboto 12sp</li>
                      <li>颜色：54% 黑色（4.5:1 的对比度）</li>
                      <li>间距：8dp 的顶部内边距，和输入线对齐</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame " data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 100.0%">
                          <video aria-describedby="states-figure-caption-8" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/text-fields/TextFields-PressDark-01.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/text-fields/TextFields-PressDark-01.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="states-figure-caption-8">
                        <p><strong>暗色主题</strong></p>
                        <p><strong>输入线</strong></p>
                      </figcaption>
                    </figure>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>厚度：2dp</li>
                      <li>颜色：100% 主色（亮色 A200）</li>
                      <li>动效：涟漪</li>
                    </ul>
                    <p><strong>标签文本</strong></p>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>字体：Roboto 12sp</li>
                      <li>颜色：100% 主色（亮色 A200）</li>
                      <li>间距：8dp 的底部内边距，和输入线对齐</li>
                    </ul>
                    <p><strong>占位符文本（可选）</strong></p>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>字体：Roboto 16sp</li>
                      <li>颜色：50% 白色（4.5:1 的对比度）</li>
                      <li>间距：8dp 的底部内边距，和输入线对齐</li>
                    </ul>
                    <p><strong>帮助文本（可选）</strong></p>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>字体：Roboto 12sp</li>
                      <li>颜色：70% 白色（7:1 的对比度）</li>
                      <li>间距：8dp 的顶部内边距，和输入线对齐</li>
                    </ul>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p><strong>聚焦</strong></p>
                    <p>当用户在文本框中输入文本时，输入的文本会代替占位符文本。自动完成的文本显示在光标的右侧，且使用和占位符文本相同的字体大小和颜色。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="states-figure-caption-9" src="<?= static_url('../static/media/components/text-fields/focus_light.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="states-figure-caption-9">
                        <p><strong>亮色主题</strong></p>
                        <p><strong>输入线</strong></p>
                      </figcaption>
                    </figure>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>厚度：2dp</li>
                      <li>颜色：100% 主色（暗色 A700）</li>
                    </ul>
                    <p><strong>标签文本</strong></p>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>字体：Roboto 12sp</li>
                      <li>颜色：87% 主色（深色 A700）</li>
                      <li>间距：16dp 的顶部内边距和 8dp 的底部内边距</li>
                    </ul>
                    <p><strong>输入文本</strong></p>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>字体：Roboto 16sp</li>
                      <li>颜色：87% 黑色（15:1 的对比度）</li>
                      <li>间距：8dp 的底部内边距，和输入线对齐</li>
                    </ul>
                    <p><strong>帮助文本（可选）</strong></p>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>字体：Roboto 12sp</li>
                      <li>颜色：54% 黑色（4.5:1 的对比度）</li>
                      <li>间距：8dp 的顶部内边距，和输入线对齐</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame " data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 100.0%">
                          <video aria-describedby="states-figure-caption-10" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/text-fields/TextFields-FocusDark-01.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/text-fields/TextFields-FocusDark-01.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="states-figure-caption-10">
                        <p><strong>暗色主题</strong></p>
                        <p><strong>输入线</strong></p>
                      </figcaption>
                    </figure>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>厚度：2dp</li>
                      <li>颜色：100% 主色（亮色 A200）</li>
                    </ul>
                    <p><strong>标签文本</strong></p>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>字体：Roboto 12sp</li>
                      <li>颜色：100% 主色（亮色 A200）</li>
                      <li>间距：16dp 的顶部内边距和 8dp 的底部内边距</li>
                    </ul>
                    <p><strong>输入文本</strong></p>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>字体：Roboto 16sp</li>
                      <li>颜色：100% 白色（13:1 的对比度）</li>
                      <li>间距：8dp 的底部内边距，和输入线对齐</li>
                    </ul>
                    <p><strong>帮助文本（可选）</strong></p>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>字体：Roboto 12sp</li>
                      <li>颜色：70% 白色（7:1 的对比度）</li>
                      <li>间距：8dp 的顶部内边距，和输入线对齐</li>
                    </ul>
                  </div>
                </section>
              </div>
              <h1>文本框输入</h1>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p><strong>闲置和已输入</strong></p>
                    <p>当用户把焦点切换到另一个元素时，已输入的文本会保持可见。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="states-figure-caption-11" src="<?= static_url('../static/media/components/text-fields/filled_idle_light.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="states-figure-caption-11">
                        <p><strong>亮色主题</strong></p>
                        <p><strong>输入线</strong></p>
                      </figcaption>
                    </figure>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>厚度：1dp</li>
                      <li>颜色：42% 黑色（3:1 的对比度）</li>
                    </ul>
                    <p><strong>标签文本</strong></p>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>字体：Roboto 12sp</li>
                      <li>颜色：54% 黑色（4.5:1 的对比度）</li>
                      <li>间距：16dp 的顶部内边距和 8dp 的底部内边距</li>
                    </ul>
                    <p><strong>输入文本</strong></p>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>字体：Roboto 16sp</li>
                      <li>颜色：87% 黑色（15:1 的对比度）</li>
                      <li>间距：8dp 的底部内边距，和输入线对齐</li>
                    </ul>
                    <p><strong>帮助文本（可选）</strong></p>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>字体：Roboto 12sp</li>
                      <li>颜色：54% 黑色（4.5:1 的对比度）</li>
                      <li>间距：8dp 的顶部内边距，和输入线对齐</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="states-figure-caption-12" src="<?= static_url('../static/media/components/text-fields/filled_idle_dark.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="states-figure-caption-12">
                        <p><strong>暗色主题</strong></p>
                        <p><strong>输入线</strong></p>
                      </figcaption>
                    </figure>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>厚度：1dp</li>
                      <li>颜色：70% 白色（7:1 的对比度）</li>
                    </ul>
                    <p><strong>标签文本</strong></p>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>字体：Roboto 12sp</li>
                      <li>颜色：70% 白色（7:1 的对比度）</li>
                      <li>间距：16dp 的顶部内边距和 8dp 的底部内边距</li>
                    </ul>
                    <p><strong>输入文本</strong></p>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>字体：Roboto 16sp</li>
                      <li>颜色：100% 白色（13:1 的对比度）</li>
                      <li>间距：8dp 的底部内边距，和输入线对齐</li>
                    </ul>
                    <p><strong>帮助文本（可选）</strong></p>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>字体：Roboto 12sp</li>
                      <li>颜色：70% 白色（7:1 的对比度）</li>
                      <li>间距：8dp 的顶部内边距，和输入线对齐</li>
                    </ul>
                  </div>
                </section>
              </div>
              <h1>文本框内容</h1>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p><strong>错误</strong></p>
                    <p>如果文本框没有通过验证，当用户将焦点移动到另一个元素时，会显示错误信息。要指示一个错误，可以在输入线和标签上使用较暖色调的颜色，例如红色或橙色。</p>
                    <p>规格</p>
                    <ul class="lst-kix_2j02fzonbk0f-0 start">
                      <li>在文本框下方显示错误信息，代替帮助文本</li>
                      <li>简要说明错误的原因，以及如何解决错误</li>
                      <li>在错误信息前添加 “Error”（或者错误图标）</li>
                      <li>一旦用户修复了错误，就删除错误信息</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="states-figure-caption-13" src="<?= static_url('../static/media/components/text-fields/error_light.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="states-figure-caption-13">
                        <p><strong>亮色主题</strong></p>
                        <p><strong>输入线</strong></p>
                      </figcaption>
                    </figure>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>厚度：2dp</li>
                      <li>颜色：100% 红色（A400）</li>
                    </ul>
                    <p><strong>标签文本</strong></p>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>字体：Roboto 12sp</li>
                      <li>颜色：100% 红色（A400）</li>
                      <li>间距：16dp 的顶部内边距和 8dp 的底部内边距，和输入线对齐</li>
                    </ul>
                    <p><strong>输入文本</strong></p>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>字体：Roboto 16sp</li>
                      <li>颜色：87% 黑色（15:1 的对比度）</li>
                      <li>间距：16dp 的左侧内边距，8dp 的底部内边距</li>
                    </ul>
                    <p><strong>错误文本</strong></p>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>字体：Roboto 12sp</li>
                      <li>颜色：87% 红色（A400）</li>
                      <li>间距：8dp 的顶部内边距，和输入线对齐</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame " data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 100.0%">
                          <video aria-describedby="states-figure-caption-14" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/text-fields/TextFields-ErrorDark-01.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/text-fields/TextFields-ErrorDark-01.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="states-figure-caption-14">
                        <p><strong>暗色主题</strong></p>
                        <p><strong>输入线</strong></p>
                      </figcaption>
                    </figure>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>厚度：2dp</li>
                      <li>颜色：100% 红色（A400）</li>
                    </ul>
                    <p><strong>标签文本</strong></p>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>字体：Roboto 12sp</li>
                      <li>颜色：100% 红色（A400）</li>
                      <li>间距：16dp 的顶部内边距和 8dp 的底部内边距，和输入线对齐</li>
                    </ul>
                    <p><strong>输入文本</strong></p>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>字体：Roboto 16sp</li>
                      <li>颜色：100% 白色（13:1 的对比度）</li>
                      <li>间距：16dp 的左侧内边距，8dp 的底部内边距</li>
                    </ul>
                    <p><strong>错误文本</strong></p>
                    <ul class="lst-kix_p1l194w35jr3-0">
                      <li>字体：Roboto 12sp</li>
                      <li>颜色：100% 红色（A400）</li>
                      <li>间距：8dp 的顶部内边距，和输入线对齐</li>
                    </ul>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="text-fields-field-types" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            文本框类型
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>文本框有多种类型：</p>
              <ul class="lst-kix_vmjlvvlil7xn-0 start">
                <li>单行</li>
                <li>多行</li>
                <li>文本区域</li>
              </ul>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <p><strong>单行文本框</strong></p>
                    <p>当输入的文本长度超过文本框的长度时，当光标到达文本框右边缘时，它会自动向左滚动。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame " data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 100.0%">
                          <video aria-describedby="field-types-figure-caption-0" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/text-fields/TextFields-SingleLine-Long-01.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/text-fields/TextFields-SingleLine-Long-01.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="field-types-figure-caption-0">
                        <p>当光标达到单行文本框的右侧时，输入文本会向左滚动。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="bordered frame" style="padding-top: 177.777777778%">
                          <img alt="alt-text" aria-describedby="field-types-figure-caption-1" src="<?= static_url('../static/media/components/text-fields/single1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="field-types-figure-caption-1">
                        <p>单行文本框</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="bordered frame" style="padding-top: 177.777777778%">
                          <img alt="alt-text" aria-describedby="field-types-figure-caption-2" src="<?= static_url('../static/media/components/text-fields/single2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="field-types-figure-caption-2">
                        <p>单行文本框</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <p><strong>多行文本框</strong></p>
                    <p>多行文本框通过扩展文本框的底部，把文本换行到新的一行上，并把屏幕中位于文本框下方的元素向下移动。</p>
                    <p>多行文本框允许用户一次性看到他们输入的所有内容。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame " data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 100.0%">
                          <video aria-describedby="field-types-figure-caption-3" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/text-fields/TextFields-MultiLine-Long-01.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/text-fields/TextFields-MultiLine-Long-01.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="field-types-figure-caption-3">
                        <p>当光标到达文本框右侧时，输入文本换行到新的一行，并使该文本框增高。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="bordered frame" style="padding-top: 177.777777778%">
                          <img alt="alt-text" aria-describedby="field-types-figure-caption-4" src="<?= static_url('../static/media/components/text-fields/multi2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="field-types-figure-caption-4">
                        <p>多行文本框</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="bordered frame" style="padding-top: 177.777777778%">
                          <img alt="alt-text" aria-describedby="field-types-figure-caption-5" src="<?= static_url('../static/media/components/text-fields/multi1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="field-types-figure-caption-5">
                        <p>多行文本框</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <p><strong>文本区域</strong></p>
                    <p>文本区域比文本框要高，并可将溢出的文本换行到新行上。当光标到达文本区域的底部时，它们会垂直滚动。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame " data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 100.0%">
                          <video aria-describedby="field-types-figure-caption-6" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/text-fields/TextFields-TextArea-01.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/text-fields/TextFields-TextArea-01.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="field-types-figure-caption-6">
                        <p>当光标到达文本区域的右下角时，输入文本会向上滚动。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="bordered frame" style="padding-top: 177.777777778%">
                          <img alt="alt-text" aria-describedby="field-types-figure-caption-7" src="<?= static_url('../static/media/components/text-fields/area1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="field-types-figure-caption-7">
                        <p>此消息框是一个文本区域</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="bordered frame" style="padding-top: 177.777777778%">
                          <img alt="alt-text" aria-describedby="field-types-figure-caption-8" src="<?= static_url('../static/media/components/text-fields/area2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="field-types-figure-caption-8">
                        <p>此消息框是一个文本区域</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>文本区域应该有一个可见的边框，边框颜色和厚度和输入线相同。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 165.263157895%">
                          <img alt="alt-text" aria-describedby="field-types-figure-caption-9" src="<?= static_url('../static/media/components/text-fields/area_states.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="field-types-figure-caption-9">
                        <p>亮色和暗色状态的文本区域</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="text-fields-input-types" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:5">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:5">
            输入类型
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <h1>格式化输入</h1>
              <p>文本框可以通过使用占位符文本、预设布局、和字数限制，来表示可以输入的数据类型。只有在按下、聚焦或输入文本时才应显示文本格式。</p>
              <p>字符可以使用以下方式进行格式化：</p>
              <ul class="lst-kix_4ic2tdbhbq28-0 start">
                <li>分组字符</li>
                <li>前缀和后缀</li>
                <li>密码编辑</li>
              </ul>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p><strong>分组字符</strong></p>
                    <p>输入文本可以以不同的方式进行分组，并在适当的位置添加特殊字符，例如添加到电话号码上的连字符。一旦完成第一个特殊字符，光标会自动跳转到下一个分组。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="alt-text" aria-describedby="input-types-figure-caption-0" src="<?= static_url('../static/media/components/text-fields/grouped_characters1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="input-types-figure-caption-0">
                        <p>为了表示电话号码，对输入文本进行了分组和格式化</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="alt-text" aria-describedby="input-types-figure-caption-1" src="<?= static_url('../static/media/components/text-fields/grouped_characters2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="input-types-figure-caption-1">
                        <p>为了表示信用卡号码，对输入文本进行了分组和格式化</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p><strong>前缀 &amp; 后缀</strong></p>
                    <p>前缀和后缀可用于明确单位、或添加预输入文本。前缀在文本框中左对齐；后缀在文本框中右对齐。文本框可以同时拥有前缀和后缀。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="alt-text" aria-describedby="input-types-figure-caption-2" src="<?= static_url('../static/media/components/text-fields/prefix1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="input-types-figure-caption-2">
                        <p>美元前缀</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="alt-text" aria-describedby="input-types-figure-caption-3" src="<?= static_url('../static/media/components/text-fields/suffix1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="input-types-figure-caption-3">
                        <p>重量后缀</p>
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
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="alt-text" aria-describedby="input-types-figure-caption-4" src="<?= static_url('../static/media/components/text-fields/suffix2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="input-types-figure-caption-4">
                        <p>邮箱域名后缀</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="alt-text" aria-describedby="input-types-figure-caption-5" src="<?= static_url('../static/media/components/text-fields/suffix3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="input-types-figure-caption-5">
                        <p>时区后缀</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p><strong>密码修改</strong></p>
                    <p>密码输入默认会隐藏密码。每个密码字符都用一个居中的椭圆表示（例如 •••••••）。</p>
                    <p>当文本框中显示可见性图标时，它指示该字段输入的时候是否可见。可以通过该图标来切换输入文本的可见性。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="alt-text" aria-describedby="input-types-figure-caption-6" src="<?= static_url('../static/media/components/text-fields/password1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="input-types-figure-caption-6">
                        <p>当开启可见性时，可见性图标会显示，且密码字符可见。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="alt-text" aria-describedby="input-types-figure-caption-7" src="<?= static_url('../static/media/components/text-fields/password2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="input-types-figure-caption-7">
                        <p>当关闭可见性时，可见性图标会显示，且密码字符会隐藏。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <h1>其他输入</h1>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>菜单和选择器</strong></p>
                    <p>其他组件（如下拉<a href="menus.html">菜单</a>和<a href="pickers.html">选择器</a>）可以嵌套在文本框中，使输入更方便。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 65.6578947368%">
                          <img alt="alt-text" aria-describedby="input-types-figure-caption-8" src="<?= static_url('../static/media/components/text-fields/dropdown2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="input-types-figure-caption-8">
                        <p>用于选择美国状态的文本框下拉菜单</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 94.0789473684%">
                          <img alt="alt-text" aria-describedby="input-types-figure-caption-9" src="<?= static_url('../static/media/components/text-fields/picker.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="input-types-figure-caption-9">
                        <p>用于选择日期的文本框选择器</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="text-fields-field-variations" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:6">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:6">
            文本框变体
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>使用这些样式的变体来把额外的焦点添加到文本框：</p>
              <ul class="lst-kix_d8afz3ubi8st-0 start">
                <li>用标签作为标题</li>
                <li>单独的文本框</li>
                <li>全宽文本框</li>
              </ul>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>用标签作为标题</h1>
                    <p>当文本框是屏幕上的主要操作时，可以移除它的标签，或者把标签当作标题。</p>
                    <p>占位符文本在闲置状态会出现，在用户输入文本时，输入的文本会代替占位符文本。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="bordered frame" style="padding-top: 177.777777778%">
                          <img alt="alt-text" aria-describedby="field-variations-figure-caption-0" src="<?= static_url('../static/media/components/text-fields/extracted_label1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="field-variations-figure-caption-0">
                        <p>标签可以从文本框中移除，并作为标题显示。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="bordered frame" style="padding-top: 177.777777778%">
                          <img alt="alt-text" aria-describedby="field-variations-figure-caption-1" src="<?= static_url('../static/media/components/text-fields/extracted_label2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="field-variations-figure-caption-1">
                        <p>标签可以从文本框中移除，并作为对话框中的标题显示。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>单独的文本框</h1>
                    <p>当文本框只用于单个操作（如 <a href="../patterns/search.html">搜索</a>）时，文本框可以被提升，并将关联的图标置于文本框中。不需要输入线。</p>
                    <p>在桌面端，在搜索框右侧应该有一个浮动的搜索按钮。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 2156px">
                        <div class="bordered frame" style="padding-top: 66.4192949907%">
                          <img alt="alt-text" aria-describedby="field-variations-figure-caption-2" src="<?= static_url('../static/media/components/text-fields/single_action1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="field-variations-figure-caption-2">
                        <p>桌面端，浮动文本框形式的搜索操作</p>
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
                        <div class="bordered frame" style="padding-top: 177.777777778%">
                          <img alt="alt-text" aria-describedby="field-variations-figure-caption-3" src="<?= static_url('../static/media/components/text-fields/single_action2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="field-variations-figure-caption-3">
                        <p>移动端，浮动文本框形式的搜索操作</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="bordered frame" style="padding-top: 177.777777778%">
                          <img alt="alt-text" aria-describedby="field-variations-figure-caption-4" src="<?= static_url('../static/media/components/text-fields/single_action4.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="field-variations-figure-caption-4">
                        <p>应用栏作为文本输入框</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1280px">
                        <div class="bordered frame" style="padding-top: 66.40625%">
                          <img alt="alt-text" aria-describedby="field-variations-figure-caption-5" src="<?= static_url('../static/media/components/text-fields/single_action6.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="field-variations-figure-caption-5">
                        <p>应用栏中有一个嵌套的文本输入框</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>全宽文本框</h1>
                    <p>全宽文本框对于更深入的任务或输入复杂信息会很有用。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="bordered frame" style="padding-top: 177.777777778%">
                          <img alt="alt-text" aria-describedby="field-variations-figure-caption-6" src="<?= static_url('../static/media/components/text-fields/full_width1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="field-variations-figure-caption-6">
                        <p>全宽文本框</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="bordered frame" style="padding-top: 177.777777778%">
                          <img alt="alt-text" aria-describedby="field-variations-figure-caption-7" src="<?= static_url('../static/media/components/text-fields/full_width2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="field-variations-figure-caption-7">
                        <p>全宽文本框可以拥有单行或多行文本框的行为</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 16.1111111111%">
                          <img alt="alt-text" aria-describedby="field-variations-figure-caption-8" src="<?= static_url('../static/media/components/text-fields/full_width_redline1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="field-variations-figure-caption-8">
                        <p><br>
                          <strong>普通间距的全宽文本框<br>
                          </strong>高度：56dp<br>
                          顶部内边距：20dp<br>
                          底部内边距：20dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 15.5555555556%">
                          <img alt="alt-text" aria-describedby="field-variations-figure-caption-9" src="<?= static_url('../static/media/components/text-fields/full_width_redline2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="field-variations-figure-caption-9">
                        <p><br>
                          <strong>紧凑型间距的全宽文本框</strong> <br>
                          高度：48dp<br>
                          顶部内边距：16dp<br>
                          底部内边距：16dp<br>
                        </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="text-fields-text-field-boxes" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:7">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:7">
            文本字段框
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
                    <p>文本字段框使用透明的矩形包裹住标签和输入文本，以增强文本框的可识别性和可扫描性。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1080px">
                        <div class="qp-ui frame " data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 55.7407407407%">
                          <video aria-describedby="text-field-boxes-figure-caption-0" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/text-fields/TextFields-Intro-02.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/text-fields/TextFields-Intro-02.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="text-field-boxes-figure-caption-0">
                        <p>文本字段框使用颜色来使其更容易被发现，同时保留了输入线。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>状态</h1>
                    <p>文本字段框使用矩形填充作为主要特征，遮盖住输入线的末端。涟漪动效在鼠标悬停和按下时触发。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 141.973684211%">
                          <img alt="" aria-describedby="text-field-boxes-figure-caption-1" src="<?= static_url('../static/media/components/text-fields/discoverable_states.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="text-field-boxes-figure-caption-1">
                        <p>包裹着矩形的文本框状态</p>
                        <p><strong>矩形填充</strong></p>
                      </figcaption>
                    </figure>
                    <ul class="lst-kix_dvmlqropyv8e-0 start">
                      <li>高度：56dp</li>
                      <li>圆角半径：4dp</li>
                      <li>颜色（亮色主题）：6% 黑色</li>
                      <li>颜色（暗色主题）：10% 白色</li>
                    </ul>
                    <p><strong>输入线</strong></p>
                    <ul class="lst-kix_76cbgx96m8ib-0 start">
                      <li>厚度：2dp</li>
                      <li>被矩形的圆角遮住</li>
                    </ul>
                    <p><strong>闲置状态 &amp; 为空状态</strong></p>
                    <ul class="lst-kix_ysb32y2spz2p-0 start">
                      <li>左侧内边距：16dp</li>
                      <li>右侧内边距：16dp</li>
                      <li>标签上方内边距：8dp</li>
                    </ul>
                    <p><strong>鼠标悬停</strong></p>
                    <ul class="lst-kix_5xxxs36fjou1-0 start">
                      <li>左侧内边距：16dp</li>
                      <li>标签上方内边距：20dp</li>
                      <li>标签下方内边距：20dp</li>
                    </ul>
                    <p><strong>按下</strong></p>
                    <ul class="lst-kix_5xxxs36fjou1-0">
                      <li>标签上方内边距：8dp</li>
                      <li>标签下方内边距：8dp</li>
                      <li>占位符下方内边距：8dp</li>
                    </ul>
                    <p>聚焦、闲置、已输入、错误和禁用状态的间距和按下状态相同。</p>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>密集型布局</h1>
                    <p>文本字段框使密集型布局更容易阅读。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="text-field-boxes-figure-caption-2" src="<?= static_url('../static/media/components/text-fields/discoverable_nondense.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="text-field-boxes-figure-caption-2">
                        <p><strong>普通间距<br>
                          </strong>高度：56dp<br>
                          标签上方内边距：8dp<br>
                          标签下方内边距：8dp<br>
                          文本框下方内边距：8dp<br>
                          帮助文本上方内边距：8dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="text-field-boxes-figure-caption-3" src="<?= static_url('../static/media/components/text-fields/discoverable_dense.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="text-field-boxes-figure-caption-3">
                        <p><strong>密集型间距<br>
                          </strong>高度：44dp<br>
                          标签上方内边距：8dp<br>
                          标签下方内边距：4dp<br>
                          文本框下方内边距：8dp<br>
                          帮助文本上方内边距：4dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>单行文本字段框</h1>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame " data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 100.0%">
                          <video aria-describedby="text-field-boxes-figure-caption-4" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/text-fields/TextFields-SingleLine-Long-01-2.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/text-fields/TextFields-SingleLine-Long-01-2.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="text-field-boxes-figure-caption-4">
                        <p>单行文本字段框中的文本滚动行为</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="bordered frame" style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="text-field-boxes-figure-caption-5" src="<?= static_url('../static/media/components/text-fields/discoverable_extracted_label1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="text-field-boxes-figure-caption-5">
                        <p>单行文本字段框，使用标签作为标题</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3 h1-spacing">
                  <div class="module">
                    <h1>多行文本字段框</h1>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame " data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 100.0%">
                          <video aria-describedby="text-field-boxes-figure-caption-6" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/text-fields/TextFields-MultiLine-Long-01-2.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/text-fields/TextFields-MultiLine-Long-01-2.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="text-field-boxes-figure-caption-6">
                        <p>多行文本字段框中的文本换行和滚动行为</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="bordered frame" style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="text-field-boxes-figure-caption-7" src="<?= static_url('../static/media/components/text-fields/discoverable_multi1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="text-field-boxes-figure-caption-7">
                        <p>按下状态的多行文本字段框</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="bordered frame" style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="text-field-boxes-figure-caption-8" src="<?= static_url('../static/media/components/text-fields/discoverable_multi2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="text-field-boxes-figure-caption-8">
                        <p>闲置和已输入状态的多行文本字段框</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3 h1-spacing">
                  <div class="module">
                    <h1>文本框区域</h1>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame " data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 100.0%">
                          <video aria-describedby="text-field-boxes-figure-caption-9" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/text-fields/TextFields-TextArea-01-2.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/text-fields/TextFields-TextArea-01-2.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="text-field-boxes-figure-caption-9">
                        <p>文本框区域的文本换行和滚动行为</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="bordered frame" style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="text-field-boxes-figure-caption-10" src="<?= static_url('../static/media/components/text-fields/discoverable_area1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="text-field-boxes-figure-caption-10">
                        <p>为空和闲置的文本区域</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="bordered frame" style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="text-field-boxes-figure-caption-11" src="<?= static_url('../static/media/components/text-fields/discoverable_area2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="text-field-boxes-figure-caption-11">
                        <p>按下状态的文本区域</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>菜单 &amp; 选择器</h1>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 65.6578947368%">
                          <img alt="" aria-describedby="text-field-boxes-figure-caption-12" src="<?= static_url('../static/media/components/text-fields/discoverable_dropdown.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="text-field-boxes-figure-caption-12">
                        <p>矩形文本框中的下拉列表</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 94.0789473684%">
                          <img alt="" aria-describedby="text-field-boxes-figure-caption-13" src="<?= static_url('../static/media/components/text-fields/discoverable_picker.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="text-field-boxes-figure-caption-13">
                        <p>矩形文本框中的图标和日期选择器</p>
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
