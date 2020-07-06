<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?= $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>帮助内容为用户的问题和疑虑提供解答。</h1>
        </div>
      </div>

      <nav class="chapter-toc">
        <h1>目录</h1>
        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="help-feedback.html#help-feedback-usage" data-qp-ui-data-id="qp:1">用法</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="help-feedback.html#help-feedback-placement" data-qp-ui-data-id="qp:2">放置</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="help-feedback.html#help-feedback-behavior" data-qp-ui-data-id="qp:3">行为</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="help-feedback.html#help-feedback-icons" data-qp-ui-data-id="qp:4">图标</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="help-feedback.html#help-feedback-writing" data-qp-ui-data-id="qp:5">书写</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="help-feedback-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
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
              <p>帮助内容提供了用户常见问题的解答。用户可以发表评论，报告错误，并提出帮助内容中尚未回答的问题。</p>
            </div>
          </div>
        </div>

        <div id="help-feedback-placement" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            放置
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
                  <div class="module"><p>方便用户在应用中查找帮助内容。</p>
                    <p>帮助内容可以有多个入口，其入口已在下方列出。它通常放置在抽屉式导航（或弹出菜单）的 “帮助” 或 “发送反馈” 中。</p>
                    <h2>复杂应用</h2>
                    <p>如果你的应用比较复杂，请在抽屉式导航和应用栏中同时放置 “帮助” 入口。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 80.2631578947%">
                          <img alt="" aria-describedby="placement-figure-caption-0" src="<?= static_url('../static/media/patterns/help-feedback/patterns_helpfeedback_placement_01_decisiontree.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="placement-figure-caption-0">
                        <p>为了使用户能轻松获得帮助，特别是你的应用比较复杂的时候，在抽屉式导航和应用栏中同时放置 “帮助” 入口。否则，只在抽屉栏、或者弹出菜单中放置 “帮助” 入口。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3 h1-spacing">
                  <div class="module">
                    <h1>抽屉式导航</h1>
                    <p>把 “帮助” 作为最后一项放在抽屉式导航中，即 “发送反馈” 的下面。</p>
                    <p>如果抽屉式导航中有 “登出”，应该把 “登出” 放在最后一项。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 120.0%">
                          <img alt="" aria-describedby="placement-figure-caption-1" src="<?= static_url('../static/media/patterns/help-feedback/patterns_helpfeedback_placement_02_navdrawer.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="placement-figure-caption-1">
                        <p>抽屉式导航中的 “帮助” 和 “发送反馈”</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3 h1-spacing">
                  <div class="module">
                    <h1>弹出菜单</h1>
                    <p>当应用没有抽屉式导航时，把 “帮助” 和 “反馈”（或 “发送反馈” ）放在弹出菜单中。</p>
                    <p>如果弹出菜单中有 “登出”，应该把 “登出” 作为菜单中的最后一项。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="placement-figure-caption-2" src="<?= static_url('../static/media/patterns/help-feedback/patterns_helpfeedback_placement_04_overflow.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="placement-figure-caption-2">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>弹出菜单中的 “帮助” 和 “发送反馈”</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>应用栏</h1>
                    <p>为了使用户在遇到紧急问题时（如付款和退款），能轻松地找到帮助，可以把帮助图标放在应用栏中。</p>
                    <p>桌面端的应用也可以在应用栏中放置帮助图标，因为在桌面端 UI 中会有较多空间。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 18.4210526316%">
                          <img alt="" aria-describedby="placement-figure-caption-3" src="<?= static_url('../static/media/patterns/help-feedback/patterns_helpfeedback_placement_07_appbar.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="placement-figure-caption-3">
                        <p>帮助图标放在了应用栏中</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3 h1-spacing">
                  <div class="module">
                    <h1>帮助界面</h1>
                    <p>“发送反馈” 按钮可以被包含在帮助界面中。</p>
                    <p>不常访问的视图（如 “关于” 、 “隐私” 、 “服务条款”）可以放置在弹出菜单中。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="placement-figure-caption-4" src="<?= static_url('../static/media/patterns/help-feedback/patterns_helpfeedback_placement_06_overflow.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="placement-figure-caption-4">
                        <p>包含常见问题的答案和发送反馈按钮的帮助界面。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="help-feedback-behavior" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            行为
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
                    <h1>相关的帮助话题</h1>
                    <p>帮助内容应该和用户当前在应用中位置相关。例如，如果用户正在浏览他的账户信息，此时显示的帮助内容应该是和账户相关的信息。</p>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>立即访问</h1>
                    <p>用户在应用中选择 “帮助” 后，应立即进入帮助内容的界面。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 56.8421052632%">
                          <img alt="" aria-describedby="behavior-figure-caption-0" src="<?= static_url('../static/media/patterns/help-feedback/patterns_helpfeedback_behavior_02_do.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-0">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>用户选择 “帮助” 后，应该直接进入帮助列表界面。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 56.8421052632%">
                          <img alt="" aria-describedby="behavior-figure-caption-1" src="<?= static_url('../static/media/patterns/help-feedback/patterns_helpfeedback_behavior_01_dont.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-1">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>用户选择 “帮助” 后，不要再出现一个界面让用户选择 “帮助” 还是其他选项。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-module col-2 h1-spacing">
                  <div class="module">
                    <h1>主动帮助</h1>
                    <p>有时候，当用户首次与应用交互时，即使没有主动要求帮助，帮助内容也会出现。提供自动帮助，使用户无需访问 “帮助” 菜单就能了解如何使用新功能。这种类型的帮助通常出现在：</p>
                    <ul class="lst-kix_ay6p25jt9h28-0 start">
                      <li>当一项功能无法轻易地通过菜单或按钮触发时，可以便于用户进行<a href="../growth-communications/feature-discovery.html#">特性探索</a>。</li>
                      <li>当引入了一个之前应用没有的<a href="../growth-communications/gesture-education.html">新手势</a>时。</li>
                    </ul>
                    <p>这类帮助仅限用于介绍新特性和进行手势指导，因为它会干扰用户，使用户分心。</p>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="help-feedback-icons" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            图标
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module"><p>帮助和反馈图标显示尺寸为 24dp。</p>
                    <p>工具提示图标为 18dp。</p>
                    <p>在亮色背景中，图标有 54% 的不透明度。在暗色背景中，图标有 100% 的不透明度。</p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>亮色主题</p></td>
                        <td colspan="1" rowspan="1"><p>不透明度</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>激活的图标</p></td>
                        <td colspan="1" rowspan="1"><p>54%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>未激活的图标</p></td>
                        <td colspan="1" rowspan="1"><p>38%</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>暗色主题</p></td>
                        <td colspan="1" rowspan="1"><p>不透明度</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>激活的图标</p></td>
                        <td colspan="1" rowspan="1"><p>100%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>未激活的图标</p></td>
                        <td colspan="1" rowspan="1"><p>50%</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>帮助</h1>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 66.6666666667%">
                          <img alt="" aria-describedby="icons-figure-caption-0" src="<?= static_url('../static/media/patterns/help-feedback/patterns_helpfeedback_icons_01.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="icons-figure-caption-0">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>帮助图标应该使用标准的材料图标。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 66.6666666667%">
                          <img alt="" aria-describedby="icons-figure-caption-1" src="<?= static_url('../static/media/patterns/help-feedback/patterns_helpfeedback_icons_02.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="icons-figure-caption-1">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>不要使用图标的变体，例如这些加了对话气泡或外圈的图标。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>发送反馈</h1>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 66.6666666667%">
                          <img alt="" aria-describedby="icons-figure-caption-2" src="<?= static_url('../static/media/patterns/help-feedback/patterns_helpfeedback_icons_03.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="icons-figure-caption-2">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>发送反馈图标应该使用标准的材料图标。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 66.6666666667%">
                          <img alt="" aria-describedby="icons-figure-caption-3" src="<?= static_url('../static/media/patterns/help-feedback/patterns_helpfeedback_icons_04.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="icons-figure-caption-3">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>不要使用图标的变体，例如对话或 bug 图标。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>帮助提示</h1>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 66.6666666667%">
                          <img alt="" aria-describedby="icons-figure-caption-4" src="<?= static_url('../static/media/patterns/help-feedback/patterns_helpfeedback_icons_05.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="icons-figure-caption-4">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>帮助提示图标应该使用标准的材料图标。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 66.6666666667%">
                          <img alt="" aria-describedby="icons-figure-caption-5" src="<?= static_url('../static/media/patterns/help-feedback/patterns_helpfeedback_icons_06.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="icons-figure-caption-5">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>不要使用图标的变体，包括帮助图标、或带对话气泡或外圈的图标。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <p></p>
            </div>
          </div>
        </div>

        <div id="help-feedback-writing" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:5">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:5">
            书写
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>帮助内容可以使用户找到在你的应用中遇到的问题的答案。</p>
              <p>在书写帮助内容时，请参考以下规范：</p>
              <div class="col-list">
                <section class="module-module-module col-3 h2-spacing">
                  <div class="module"><h2>列出关键信息</h2>
                    <p>使用尽可能简短的语言解释问题。避免给出无关的细节。每次只回答一个问题。</p>
                  </div>
                  <div class="module"></div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-module col-3 h2-spacing">
                  <div class="module">
                    <h2>使帮助内容便于阅读</h2>
                    <p>按需使用大标题、列表、表格以及段落间距等来格式化文本，使使内容更易于阅读。</p>
                    <p>特殊情况下，如果帮助内容引用了其他元素（例如按钮或链接），需要用户选择后才能访问，请加粗引用的标题。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 2111px">
                        <div class="frame " style="padding-top: 88.4414969209%">
                          <img alt="" aria-describedby="writing-figure-caption-0" src="<?= static_url('../static/media/patterns/help-feedback/patterns_helpfeedback_writing_01.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="writing-figure-caption-0">
                        <p>标题清楚的概括了一篇文章的内容，这帮助读者快速扫描页面就能就能找到他们需要的信息。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-module-module col-3 h2-spacing">
                  <div class="module">
                    <h2>使用简单的语言</h2>
                    <p>尽量避免在帮助内容中使用专业术语。</p>
                  </div>
                  <div class="module"></div>
                  <div class="module"></div>
                </section>
                <section class="module-module-module col-3 h2-spacing">
                  <div class="module">
                    <h2>展示图片</h2>
                    <p>当提供分步说明时，显示相关的图片或图标来解释用户需要做什么。</p>
                  </div>
                  <div class="module"></div>
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
