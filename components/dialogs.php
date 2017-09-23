<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>对话框用于提示用户做一些决定，或者提供完成某个任务时需要的一些其他额外信息。</h1>
          <div class="col-list">
            <section class="module-module-figure col-3 h3-spacing">
              <div class="module">
                <p>对话框包含文本和 UI 控件。对话框始终保持聚焦状态，直到被关闭或触发了必要的操作。谨慎使用对话框，因为它们会分散用户的注意力。</p>
                <p>对话框的类型包括：</p>
                <ul class="lst-kix_boxvm9ygju2f-0 start">
                  <li><strong>警告</strong> 是需要提醒用户，并需要用户确认的重要操作的提示框。</li>
                  <li><strong>简单菜单</strong> 提供列表选项给用户，而<strong>简单对话框</strong>可以提供一个列表项的详细信息或操作。</li>
                  <li><strong>确认对话框</strong> 是需要用户明确的确认一个选择的对话框。</li>
                </ul>
              </div>
              <div class="module">
                <h3>行为</h3>
                <p>对话框不能被其他元素或屏幕边缘遮挡。对话框始终保持聚焦状态，直到被关闭或触发了必要的操作。</p>
                <h3>全屏对话框（仅移动端）</h3>
                <p>全屏对话框最适合用于复杂的任务、或需要一个输入法编辑器的任务，因为它们在保存之前会将一系列的任务分组在一起。</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 3000px">
                    <div class="frame " style="padding-top: 100.0%">
                      <img alt="" src="<?php static_url('../static/media/components/dialogs/components_dialogs.png'); ?>"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="dialogs.html#dialogs-behavior" data-qp-ui-data-id="qp:1">行为</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="dialogs.html#dialogs-alerts" data-qp-ui-data-id="qp:2">警告框</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="dialogs.html#dialogs-simple-menus" data-qp-ui-data-id="qp:3">简单菜单</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="dialogs.html#dialogs-simple-dialogs" data-qp-ui-data-id="qp:4">简单对话框</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="dialogs.html#dialogs-confirmation-dialogs" data-qp-ui-data-id="qp:5">确认框</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="dialogs.html#dialogs-full-screen-dialogs" data-qp-ui-data-id="qp:6">全屏对话框</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="dialogs.html#dialogs-specs" data-qp-ui-data-id="qp:7">规格</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="dialogs-behavior" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            行为
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <h2>标准对话框进阶</h2>
              <p>对话框是模态窗口的子类型，这里所涉及的例子是标准的 Material 系统对话框。（其他模态窗口结构在这里没有涉及到，因为它们有太多的变化，例如购买流程的品牌按钮、非标准的 UI 表单元素或独特的布局。）</p>
              <div class="col-list">
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>减少对用户的打断</h2>
                    <p>谨慎使用对话框，因为它们会打断用户的操作。它们的突然出现会迫使用户停止他们当前的任务，并聚焦于对话框内容。不是所有选择、设置或细节都需要打断用户。对话框的替代方案包括菜单或行内展开，这两者都不会影响用户的浏览。</p>
                    <h2>对话框应突出于其他元素</h2>
                    <p>对话框绝不能被其他元素遮挡。对话框应始终拥有焦点，直到被关闭或触发了必要的操作（例如选择了一个设置项）。</p>
                    <p>对话框应避免</p>
                    <ul class="lst-kix_ipehavy5ca5n-0 start">
                      <li>从对话框中打开对话框</li>
                      <li>包含可滚动的内容</li>
                    </ul>
                    <h2>全屏对话框是一个例外</h2>
                    <p>全屏对话框可以打开其他对话框，例如选择器，因为它们的设计可容纳额外的材料层，而不会明显地增加应用视觉上的 Z 轴深度，或造成视觉干扰。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="behavior-figure-caption-0" src="<?php static_url('../static/media/components/dialogs/components_dialogs_content1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-0">
                        <p>对话框示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="behavior-figure-caption-1" src="<?php static_url('../static/media/components/dialogs/components_dialogs_fullscreen1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-1">
                        <p>全屏对话框示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>可滚动的内容是一个例外</h2>
                    <p>一些对话框内容需要滚动，例如铃声列表。</p>
                    <ul class="lst-kix_8cibju6089a7-0 start">
                      <li>对于可滚动的选项列表，对话框标题应固定在顶部。这确保了选中的条目和标题可以同时可见，而不用管条目在列表中的位置。</li>
                      <li>否则，标题会随着内容的滚动而消失。操作按钮则应始终保持固定。</li>
                    </ul>
                    <p>对话框与底层的元素保持分离，不与其一起滚动。</p>
                    <h2>显示更多内容</h2>
                    <p>要在对话框中显示更多内容，请在内容区域使用可展开的组件，或考虑使用其他能容纳更多内容的组件来代替。</p>
                    <h2>关闭对话框</h2>
                    <p>可以通过点击对话框外面的区域、或系统的返回按钮（Android）来关闭对话框。另外，可以禁止用户关闭对话框，使用户必须选择其中一个操作后才能继续。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 57.8947368421%">
                          <img alt="" aria-describedby="behavior-figure-caption-2" src="<?php static_url('../static/media/components/dialogs/components_dialogs_1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-2">
                        <p>将对话框中的可滚动列表的标题固定，以确保标题和被选中的条目可以同时可见。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="dialogs-alerts" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            警告框
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>警告框会紧急打断用户正在进行的操作，用于需要提示用户有关信息，并需要确认的情况。</p>
              <p><strong>和 Snackbars 的区别：</strong>Snackbars 在操作之后提供可选信息，例如用于确认草稿的丢弃状态。它们通常允许用户撤销刚刚采取的操作。</p>
              <div class="col-list">
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>不含标题栏的警告框</h2>
                    <p>大部分警告框不需要标题</p>
                    <p>它们只用一句话或两句话来说明：</p>
                    <ul class="lst-kix_cwqflibcg89h-0 start">
                      <li>提出问题（例如 “删除此会话？” ）</li>
                      <li>对操作按钮进行说明</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="alerts-figure-caption-0" src="<?php static_url('../static/media/components/dialogs/components_alerts_1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="alerts-figure-caption-0">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>肯定按钮的文本 “Discard” 清楚地表明了操作的后果。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="alerts-figure-caption-1" src="<?php static_url('../static/media/components/dialogs/components_alerts_2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="alerts-figure-caption-1">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>取消按钮的文本 “No” 回答了提问，但没有明确表明之后会发生什么。更好的按钮文本应该是更易理解的“Cancel”和“Delete”。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>有标题栏的警告框</h2>
                    <p>仅在高风险情况下使用有标题栏的警告框，例如网络连接断开了。用户应该要仅凭标题和按钮文本就能明白警告框的含义。</p>
                    <p>如果需要标题：</p>
                    <ul class="lst-kix_mxsc3tn7ox57-0 start">
                      <li>在内容区域使用清楚的问题或说明进行解释，例如 “移除 USB 存储设备？” </li>
                      <li>避免使用表示歉意、存在歧义、或表示疑问的语句，例如 “警告！” 或 “你确定吗？” </li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="alerts-figure-caption-2" src="<?php static_url('../static/media/components/dialogs/components_dialogs_usage1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="alerts-figure-caption-2">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>此对话框提出了一个具体的问题，简要阐述了其影响，并提供了明确的操作。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="alerts-figure-caption-3" src="<?php static_url('../static/media/components/dialogs/components_dialogs_alerts4.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="alerts-figure-caption-3">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>此对话框提出了一个模糊的问题，无法根据标题知道它的作用。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="dialogs-simple-menus" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            简单菜单
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <h2>仅适用手机端和平板端</h2>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>简单菜单显示列表的选项，并且会在用户选择后立即提交选择。详见<a href="menus.html#menus-simple-menus">简单菜单</a>。</p>
                    <p><strong>消除歧义：</strong> <a href="dialogs.html#dialogs-simple-dialogs">简单对话框</a>显示列表的详细选项，并提供相关操作。简单对话框可以显示和简单菜单相同的内容。但是，优先使用简单菜单，因为它们对用户当前上下文的破坏较小。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="simple-menus-figure-caption-0" src="<?php static_url('../static/media/components/dialogs/components_dialogs_simplemenu1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="simple-menus-figure-caption-0">
                        <p>简单菜单示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" src="<?php static_url('../static/media/components/dialogs/components_dialogs_simplemenu2.png'); ?>"/>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="dialogs-simple-dialogs" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            简单对话框
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
                    <p>简单对话框可以提供有关列表项的详细信息或操作。例如，它们可以显示头像、图标、子文本或正交操作（例如添加账号）。</p>
                    <p>手势操作：</p>
                    <ul class="lst-kix_iq5usj221ubg-0 start">
                      <li>选择一个选项后将立即提交该选项并关闭菜单</li>
                      <li>触摸对话框外边的区域、或按下后退键，会取消操作并关闭对话框</li>
                    </ul>
                    <h2>减少对用户的打断</h2>
                    <p>简单对话框会比简单菜单更容易打断用户的操作，所以在使用时需要更为谨慎。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="simple-dialogs-figure-caption-0" src="<?php static_url('../static/media/components/dialogs/components_dialogs_simple1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="simple-dialogs-figure-caption-0">
                        <p>简单对话框示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="simple-dialogs-figure-caption-1" src="<?php static_url('../static/media/components/dialogs/components_dialogs_simple2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="simple-dialogs-figure-caption-1">
                        <p>在移动设备上，对话框的宽度为单位的倍数。该单位可以是：</p>
                        <ul class="lst-kix_8ey30me5qdc3-0 start">
                          <li>一个 <a href="../layout/metrics-keylines.html#metrics-keylines-sizing-by-increments">增量</a></li>
                          <li>距离屏幕边缘的距离</li>
                        </ul>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>没有明确的取消按钮</h2>
                    <p>简单对话框没有明确的按钮来确认或取消操作。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="simple-dialogs-figure-caption-2" src="<?php static_url('../static/media/components/dialogs/components_dialogs_simple3.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="simple-dialogs-figure-caption-2">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>这个简单对话框有一个明确的 “Cancel” 按钮。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="simple-dialogs-figure-caption-3" src="<?php static_url('../static/media/components/dialogs/components_dialogs_simple4.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="simple-dialogs-figure-caption-3">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>这个简单对话框有一个明确的 “Cancel” 按钮。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2><strong><strong>规格</strong></strong></h2>
                    <ul class="lst-kix_inaa37kmuppi-0 start">
                      <li>简单对话框中的行高可以不同</li>
                      <li>简单对话框在屏幕中垂直水平居中对齐</li>
                      <li>对话框距离屏幕边缘左右至少 40dp，上下至少 24dp</li>
                      <li>对话框的内容距离对话框边缘 24dp</li>
                    </ul>
                    <h2>避免文本换行</h2>
                    <p>如果<a href="menus.html#menus-simple-menus">简单菜单</a>中的文本需要换行，应使用简单对话框代替。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 63.1578947368%">
                          <img alt="" aria-describedby="simple-dialogs-figure-caption-4" src="<?php static_url('../static/media/components/dialogs/components_dialogs_simple5.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="simple-dialogs-figure-caption-4">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>这个简单对话框有不同的行高。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="dialogs-confirmation-dialogs" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:5">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:5">
            确认对话框
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
                    <p>确认对话框要求用户在提交选项之前先确认它们的选择。例如，用户可以收听多个铃声，但只有在触摸“确认”按钮时才会提交最终的选择。<br></p>
                    <p>触摸确认对话框中的 “Cancel” 或按下后退键，会取消操作，放弃所有更改，然后关闭对话框。</p>
                    <h2>避免从对话框中启动其他对话框</h2>
                    <p>避免从确认对话框中启动其他简单对话框或简单菜单，因为它们会增加复杂性，并增加了应用的海拔高度。如果需要从对话框中启动对话框来完成一项任务，请考虑使用<a href="dialogs.html#dialogs-full-screen-dialogs">全屏对话框</a>代替。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="confirmation-dialogs-figure-caption-0" src="<?php static_url('../static/media/components/dialogs/components_dialogs_confirmation1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="confirmation-dialogs-figure-caption-0">
                        <p>在用户按下 “OK” 按钮前，不会提交对话框中的铃声选择。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="confirmation-dialogs-figure-caption-1" src="<?php static_url('../static/media/components/dialogs/components_dialogs_confirmation2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="confirmation-dialogs-figure-caption-1">
                        <p>文本左侧有控件的确认对话框示例。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>确认信息单一性</h2>
                    <p>确认对话框可以使用除列表之外的其他布局，例如<a href="pickers.html">日期选择器</a>，但仍然应专注于指定单个值（选择日期，但不同时选择日期和时间）。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="confirmation-dialogs-figure-caption-2" src="<?php static_url('../static/media/components/dialogs/components_dialogs_confirmation3.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="confirmation-dialogs-figure-caption-2">
                        <p>用户通过选择一个日期，并按下 “OK” 按钮来设置日期。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="confirmation-dialogs-figure-caption-3" src="<?php static_url('../static/media/components/dialogs/components_dialogs_confirmation4.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="confirmation-dialogs-figure-caption-3">
                        <p>用户用过移动时钟指针，并按下 “OK” 按钮来设置时间。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>取消和确认按钮</h2>
                    <p>确认对话框同时提供明确的确认按钮和取消按钮。点击取消按钮、返回键或离开确认对话框将丢弃更改。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="confirmation-dialogs-figure-caption-4" src="<?php static_url('../static/media/components/dialogs/components_dialogs_confirmation5.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="confirmation-dialogs-figure-caption-4">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>提供明确的确认和取消按钮。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 360px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="confirmation-dialogs-figure-caption-5" src="<?php static_url('../static/media/components/dialogs/components_dialogs_confirmation6.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="confirmation-dialogs-figure-caption-5">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>只有单个对话框按钮使系统的返回操作变得模糊：返回时是取消还是确认？</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="dialogs-full-screen-dialogs" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:6">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:6">
            全屏对话框
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p><strong>仅限移动设备</strong>：由于空间有限，全屏对话框可能更适合用于移动设备，而不适合用在拥有更大屏幕的设备上。</p>
              <div class="col-list">
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>用法</h2>
                    <p>全屏对话框将一系列任务（例如创建日历）分组，然后用户可以选择提交或丢弃这些任务。在触摸 “保存” 按钮之前，不会保存任何数据。触摸 “X” 会丢弃所有更改并退出对话框。</p>
                    <p>全屏对话框启用复杂布局，最小化堆叠材料（对话框上方的对话框）的外观，并临时把应用的视觉高度重置为比较高的基线。它们允许使用简单菜单或简单对话框作为复杂操作的一部分。</p>
                    <p>全屏对话框可用于符合以下任何条件的内容或任务：</p>
                    <ul class="lst-kix_t7jhlbmuw669-0 start">
                      <li>该对话框包含需要如键盘之类的输入法编辑器（IME）的组件（如选择器或表单字段）</li>
                      <li>当更改不会实时保存时</li>
                      <li>当应用没有草稿功能时</li>
                      <li>在提交批处理操作或队列更改之前</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="full-screen-dialogs-figure-caption-0" src="<?php static_url('../static/media/components/dialogs/components_dialogs_fullscreen1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="full-screen-dialogs-figure-caption-0">
                        <p>全屏对话框支持使用简单对话框来选择日期。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="full-screen-dialogs-figure-caption-1" src="<?php static_url('../static/media/components/dialogs/components_dialogs_fullscreen2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="full-screen-dialogs-figure-caption-1">
                        <p>从全屏对话框中打开日期选择器</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>操作</h2>
                    <p>在全屏对话框的顶部放置确认和取消按钮。</p>
                    <h2>确认</h2>
                    <p>确认按钮在屏幕的右上角，并使用叙述性的动词，例如：保存、发送、共享、更新或创建。不要使用模糊的动词，例如：完成、好、关闭。</p>
                    <p>在对话框中所有字段都通过验证之前，确认操作将被禁用。</p>
                    <h2>取消</h2>
                    <p>取消操作（屏幕左上角的 “X” ）和返回按钮都会关闭全屏对话框并放弃更改。</p>
                    <ul class="lst-kix_w0srevl2gebd-0 start">
                      <li>如果未进行更改，对话框会直接关闭，不需要进行丢弃确认</li>
                      <li>如果用户进行了更改，系统将提示用户对丢弃操作进行确认</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.638888889%">
                          <img alt="" aria-describedby="full-screen-dialogs-figure-caption-2" src="<?php static_url('../static/media/components/dialogs/components_dialogs_fullscreen3.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="full-screen-dialogs-figure-caption-2">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>不要使用模糊的术语，如 “Close” 来确认操作。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="full-screen-dialogs-figure-caption-3" src="<?php static_url('../static/media/components/dialogs/components_dialogs_fullscreen8.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="full-screen-dialogs-figure-caption-3">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>如果用户进行了更改，则提示用户对丢弃操作进行确认。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>导航</h2>
                    <p>在全屏对话框中使用的 “X” 不同于返回箭头，使用返回箭头表示视图的状态会被实时保存。例如， “设置” 中使用返回箭头表示立即提交所有更改，而不需要进行确认或取消操作。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="full-screen-dialogs-figure-caption-4" src="<?php static_url('../static/media/components/dialogs/components_dialogs_fullscreen4.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="full-screen-dialogs-figure-caption-4">
                        <p>此设置示例中的返回箭头表示任何更改都将在选择后立即保存。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="full-screen-dialogs-figure-caption-5" src="<?php static_url('../static/media/components/dialogs/components_dialogs_fullscreen5.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="full-screen-dialogs-figure-caption-5">
                        <p>点击此设置示例中的 “X” 将放弃所有更改，更改只有在点击保存按钮后才会保存。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>标题</h2>
                    <p>不要使用动态的文本作为全屏对话框的标题。</p>
                    <p>标题应该简洁。如果需要，它们可以换行到第二行，然后将多余的截断。</p>
                    <p>如果全屏对话框使用可变长度的标题或长标题（例如，同一个词翻译成不同语言后会变得很长），请将标题文本放在对话框的内容区域，不要放在应用栏中。</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.638888889%">
                          <img alt="" aria-describedby="full-screen-dialogs-figure-caption-6" src="<?php static_url('../static/media/components/dialogs/components_dialogs_fullscreen6.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="full-screen-dialogs-figure-caption-6">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>避免在应用栏中使用可变长度的标题。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.638888889%">
                          <img alt="" aria-describedby="full-screen-dialogs-figure-caption-7" src="<?php static_url('../static/media/components/dialogs/components_dialogs_fullscreen7.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="full-screen-dialogs-figure-caption-7">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>在全屏对话框的内容区域放置长标题。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="dialogs-specs" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:7">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:7">
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
                <section class="module-figure col-2">
                  <div class="module">
                    <p>对话框包含内容、操作和可选的标题。</p>
                    <h2>可选的标题</h2>
                    <p>标题简要描述了正在进行的选择的类型，标题应始终以整体显示，且仅在必要时使用。例如，标题可以指示对话框与任务的哪个部分相关，或确认该决定会影响到的内容。</p>
                    <h2>内容</h2>
                    <p>对话框内容通常由文本和 UI 控件组成。它专注于特定的任务，例如对删除操作做二次确认，或用于选择一项设置。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 53.6842105263%">
                          <img alt="" aria-describedby="specs-figure-caption-0" src="<?php static_url('../static/media/components/dialogs/components_dialogs_usage2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-0">
                        <p>此对话框包含标题、内容和操作。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>操作</h2>
                    <p>对话框包含的操作要有明确目的和数量，通常是肯定操作或忽略操作。</p>
                    <ul class="lst-kix_6ymsfsu4bdxd-0 start">
                      <li><strong>肯定操作</strong>放在右侧，并在点击后继续进行下一步操作。肯定操作可能具有破坏性，例如“删除”或“移除”</li>
                      <li><strong>忽略操作</strong>直接放在肯定操作的左侧，并在点击后返回到原始界面，或者跳过这一步</li>
                      <li><strong>忽略和肯定操作的文本</strong>可以是 “Cancel” / “OK” 或其他能表明操作结果的动词或动词短语</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 53.6842105263%">
                          <img alt="" aria-describedby="specs-figure-caption-1" src="<?php static_url('../static/media/components/dialogs/components_dialogs_swapped_actions_16.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-1">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>取消操作总是放在肯定操作的左侧。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>对话框操作应该提供与对话框标题和内容直接相关的明确的选择。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 53.6842105263%">
                          <img alt="" aria-describedby="specs-figure-caption-2" src="<?php static_url('../static/media/components/dialogs/components_dialogs_swapped_actions_17.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-2">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>避免向用户提供模糊不清的选择。在此示例中， “Cancel” 与标题无关，因为没有指出明确的操作。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>确认操作</h2>
                    <p>在需要用户确认对话框内容的情况下，警告框可以仅包含一个操作。谨慎使用此类警告框，因为它会打断用户的操作。可以考虑通过其他方法把信息传递给用户，例如把信息显示在视图的内容中。</p>
                    <h2>操作的数量</h2>
                    <p>对话框不能包含两个以上的操作。第三个操作，例如 “了解更多” 会离开对话框，可能会留下未完成的任务。</p>
                    <p>避免使用 “了解更多” 操作来访问帮助文档；应该使用对话框内的可展开内容代替。如果需要提供更多详细信息，请在进入对话框之前提供。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 53.6842105263%">
                          <img alt="" aria-describedby="specs-figure-caption-3" src="<?php static_url('../static/media/components/dialogs/components_dialogs_usage5.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-3">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>“了解更多” 操作会离开此对话框，使其处于不确定的状态。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-module col-2 h1-spacing">
                  <div class="module">
                    <h1>颜色</h1>
                    <p>对话框操作默认使用系统颜色，但它应该反映你的产品的<a href="../style/color.html">色调</a>。使用高对比度的颜色，例如调色版中的强调色，将对话框操作和对话框内容区分开来。</p>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>没有大写字母的语言</h2>
                    <p>对于没有大写字母的语言（例如中文、日文和韩文），需要保持一致的位置、间距和颜色，以使它们和普通文本区分开来。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 52.6315789474%">
                          <img alt="" aria-describedby="specs-figure-caption-4" src="<?php static_url('../static/media/components/dialogs/components_dialogs_consistent_placement1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-4">
                        <p>一致的操作按钮位置、文本颜色有利于把操作和普通文本区分开来，即使操作处于禁用状态。</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 52.6315789474%">
                          <img alt="" aria-describedby="specs-figure-caption-5" src="<?php static_url('../static/media/components/dialogs/components_dialogs_consistent_placement2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-5">
                        <p>在做出选择之前，肯定按钮更有可能处于禁用状态。而取消按钮不会被禁用。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>内容指南</h2>
                    <p>内容四周边距：24dp<br>
                      标题和正文之间的间距：20dp<br>
                      按钮之间的间距：8dp<br>
                      按钮高度：36dp<br>
                      操作区域高度：52dp<br>
                      对话框海拔高度：24dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 51.9078947368%">
                          <img alt="" aria-describedby="specs-figure-caption-6" src="<?php static_url('../static/media/components/dialogs/components_dialogs_updates1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-6">
                        <p>内容的间距</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 71.5789473684%">
                          <img alt="" aria-describedby="specs-figure-caption-7" src="<?php static_url('../static/media/components/dialogs/components_dialogs_actions.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-7">
                        <p>在内容区域中，内容下方的 24dp 的边距有助于将其与操作分隔开。</p>
                        <p>提示框内容底部边距：24dp<br>
                          按钮高度：36dp<br>
                          按钮外边距：8dp</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 57.8947368421%">
                          <img alt="" aria-describedby="specs-figure-caption-8" src="<?php static_url('../static/media/components/dialogs/components_dialogs_updates8.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-8">
                        <p>滚动状态的内容的内边距</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>按钮的宽度和内边距</h2>
                    <p>按钮高度：36dp<br>
                      最小按钮宽度：64dp<br>
                      按钮内边距：8dp<br>
                      按钮之间的间距：8dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 69.2105263158%">
                          <img alt="" aria-describedby="specs-figure-caption-9" src="<?php static_url('../static/media/components/dialogs/components_dialogs_updates2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-9">
                        <p>按钮的宽度和边距的详细信息</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>按钮高度：36dp<br>
                    按钮区域高度：52dp<br>
                    左侧按钮边距：24dp<br>
                    右侧按钮边距：8dp<br>
                    按钮之间的间距：8dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 34.6052631579%">
                          <img alt="" aria-describedby="specs-figure-caption-10" src="<?php static_url('../static/media/components/dialogs/components_dialogs_updates3.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-10">
                        <p>按钮区域的细节</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 43.9473684211%">
                          <img alt="" aria-describedby="specs-figure-caption-11" src="<?php static_url('../static/media/components/dialogs/components_dialogs_consistent_placement3.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-11">
                        <p>滚动状态下，对话框的内容和操作之间的描边。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>并排按钮</h2>
                    <p>当每个按钮的文本不超过最大按钮宽度时，建议使用并排按钮，例如常用的确认/取消按钮。</p>
                    <p>使用以下公式计算给定对话框的最大按钮宽度：</p>
                    <p>对话框中的按钮的最大宽度 = </p>
                    <p>(对话框宽度 - 8dp - 8dp - 8dp)/2</p>
                    <p>例如</p>
                    <p>280dp 宽度的对话框中的最大按钮宽度 = </p>
                    <p>(280dp - 8dp - 8dp - 8dp)/2 = 128dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 53.6842105263%">
                          <img alt="" aria-describedby="specs-figure-caption-12" src="<?php static_url('../static/media/components/dialogs/components_dialogs_sidebyside.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-12">
                        <p>按钮高度：36dp<br>
                        正文和按钮区域之间的间距：24dp<br>
                        按钮四周的边距：8dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>竖排全宽按钮</h2>
                    <p>当文本长度超过按钮的最大宽度时，请使用竖排按钮来放置文本。肯定操作在取消操作上方。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 58.4210526316%">
                          <img alt="" aria-describedby="specs-figure-caption-13" src="<?php static_url('../static/media/components/dialogs/components_dialogs_stacked.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-13">
                        <p>每个按钮的可触摸高度：48dp<br>
                        正文和触摸目标之间的间距：24dp<br>
                        触摸目标下方和对话框边缘的间距：8dp<br>
                        按钮文本右侧和对话框边缘的间距：16dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>简单对话框的参考线</h2>
                    <p>垂直参考线在对话框边缘左右 24dp 处。与图标或头像相关联的内容在距离对话框左侧 80dp 处。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 57.8947368421%">
                          <img alt="" aria-describedby="specs-figure-caption-14" src="<?php static_url('../static/media/components/dialogs/components_dialogs_updates5.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-14">
                        <p>简单对话框的参考线</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>简单对话框的内容指南</h2>
                    <p>建议简单对话框要有标题，但标题可以根据产品需要进行省略。</p>
                    <p><strong>标题</strong></p>
                    <ul class="lst-kix_dtf5p7kyo90b-0 start">
                      <li>顶部边距：24dp</li>
                      <li>底部边距：20dp</li>
                      <li>文本尺寸：Roboto Medium 20sp</li>
                      <li>文本行高：28dp</li>
                    </ul>
                    <p><strong>内容</strong></p>
                    <ul class="lst-kix_6ttbpq5z9hc5-0 start">
                      <li>含头像的单行文本行高：56dp</li>
                      <li>底部边距：8dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 57.8947368421%">
                          <img alt="" aria-describedby="specs-figure-caption-15" src="<?php static_url('../static/media/components/dialogs/components_dialogs_simple-redlines.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-15">
                        <p>简单对话框的标注</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>全屏对话框的标题</h2>
                    <p>如果有需要，全屏对话框的标题可以换行到第二行，然后将多余部分截断。标题应该简洁，但是在某些情况下，例如标题翻译成其他语言会变得更长时，标题可能需要换行。</p>
                    <p><br>
                      含单行文本的应用栏高度：56dp<br>
                      含两行文本的应用栏高度：80dp<br>
                      标题文本距离屏幕左侧间距：72dp<br>
                      标题文本：20sp<br>
                      标题文本上下边距：20dp<br>
                      取消操作距离左侧边缘的间距：16dp<br>
                      肯定操作的文本：14sp<br>
                      肯定操作的文本的左右内边距：16dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 30.2631578947%">
                          <img alt="" aria-describedby="specs-figure-caption-16" src="<?php static_url('../static/media/components/dialogs/components_dialogs_updates10.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-16">
                        <p>全屏对话框应用栏的详细信息</p>
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
                          <img alt="" aria-describedby="specs-figure-caption-17" src="<?php static_url('../static/media/components/dialogs/components_dialogs_updates11.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-17">
                        <p>含单行文本应用栏的全屏对话框。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-18" src="<?php static_url('../static/media/components/dialogs/components_dialogs_updates12.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-18">
                        <p>请注意，此图片仅供参考。长标题应该放置在全屏对话框的内容区域。</p>
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