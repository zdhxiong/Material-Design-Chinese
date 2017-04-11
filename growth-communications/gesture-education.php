<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <p>附加手势帮助第一次使用应用的用户了解如何和特定元素交互，例如卡片。</p>
        </div>
      </div>

      <nav class="chapter-toc">
        <h1>目录</h1>
        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="gesture-education.html#gesture-education-design-patterns" data-qp-ui-data-id="qp:1">设计模式</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="gesture-education.html#gesture-education-targeting-triggering" data-qp-ui-data-id="qp:2">定位和触发</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="gesture-education.html#gesture-education-volume-frequency" data-qp-ui-data-id="qp:3">数量和频率</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="gesture-education.html#gesture-education-design-writing" data-qp-ui-data-id="qp:4">设计 &amp; 书写</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="gesture-education-design-patterns" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            设计模式
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
                    <h1>屏幕中的一部分</h1>
                    <p>提示用户执行一个手势，这个手势可以影响屏幕中的一部分，例如滑动卡片。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 177.777777778%">
                          <video aria-describedby="design-patterns-figure-caption-1" controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/growth-communications/gesture-education/useredu_er_gesture_partial.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/growth-communications/gesture-education/useredu_er_gesture_partial.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="design-patterns-figure-caption-1">
                        <p>“提示动作” 显示了当执行提示中的手势操作时，卡片移动效果的预览。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h1>整个屏幕</h1>
                    <p>提示用户执行一个手势，这个手势会影响到整个屏幕，例如双指缩放。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 177.777777778%">
                          <video controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/growth-communications/gesture-education/useredu_er_gesture_full.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/growth-communications/gesture-education/useredu_er_gesture_full.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                    </figure>
                    <p>这个 snackbar 使用文本来描述滑动动作会触发标签之间的切换。手势指示器使手势动作可视化，提示动作本身会直接执行一部分动作。</p>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="gesture-education-targeting-triggering" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            定位和触发
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>附加手势应该在用户需要的时候触发。它不需要集中在用户第一次使用应用时触发。他应该是智能的，和用户所处情境相关的，帮助用户与元素以他们没有使用过的方式进行交互。</p>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <p>无论手势是只影响屏幕的一部分，还是影响整个屏幕，都会使用类似的定位和触发指南。</p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p><strong>定位</strong></p></td>
                        <td colspan="1" rowspan="1"><p><strong>触发</strong></p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                          <p>仅向尚未执行过手势的用户显示附加手势。</p>
                        </td>
                        <td colspan="1" rowspan="1">
                          <p>附加手势出现在：</p>
                          <ul class="lst-kix_f9hdm96b1r19-0 start">
                            <li>用户首次体验应用（FRE）</li>
                            <li>之后的会话中，前提是用户没有执行过手势</li>
                            <li>对 UI 做了大的更改之后</li>
                          </ul>
                          <p>如果某个手势是用户体验的核心，则在用户首次体验应用时，在和用户所处情境相关的时刻，显示附加手势。</p>
                          <p>如果某个手势对用户体验不重要，则可以在稍后的会话中，在和用户所处情境相关的时刻显示它。例如，在 Chrome 中滑动工具栏可切换标签页。</p>
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

        <div id="gesture-education-volume-frequency" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            数量和频率
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <h1>数量</h1>
              <p>显示应用中显示的附加手势的数量。</p>
              <p>如果某个手势对用户体验至关重要，则在用户首次体验应用时，可以最多显示两个附加手势提示。</p>
              <h1>频率</h1>
              <p>大部分附加手势提示应该只显示一次。</p>
              <p>如果某个手势对用户体验至关重要，则在不同会话中，最多显示两次。</p>
            </div>
          </div>
        </div>

        <div id="gesture-education-design-writing" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            设计 &amp; 书写
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
                  <div class="module"><h1>示例 UI</h1>
                    <p><strong>设计</strong><strong> </strong></p>
                    <p>示例 UI 应该模拟其所代表的真实 UI 的移动。</p>
                    <p>当监测到触摸手势时，手势指示器应暂停然后消失。示例中的手势应该是关闭示例 UI 的唯一方法。例如，只有向左或向右滑动才会关闭描述滑动手势的卡片。</p>
                    <p><strong>书写</strong></p>
                    <p>用简短明确的文本描述手势的结果。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 177.777777778%">
                          <video aria-describedby="design-writing-figure-caption-1" controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/growth-communications/gesture-education/useredu_er_gesture_partial.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/growth-communications/gesture-education/useredu_er_gesture_partial.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="design-writing-figure-caption-1">
                        <p>这种类型的交互可以用于只影响屏幕中的一部分的手势，例如滑动卡片。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h1>示例手势</h1>
                    <p><strong>设计</strong></p>
                    <p>全屏手势应该用 snackbar 来说明手势会做什么。</p>
                    <p>当用户点击屏幕时，页面内容应该返回到其默认状态，同时移除手势指示器。继续显示底部卡片，直到用户和元素进行了交互，例如点击按钮。</p>
                    <p><strong>书写</strong></p>
                    <p>用简单明确的文本描述手势的结果。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 177.777777778%">
                          <video controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/growth-communications/gesture-education/useredu_er_gesture_full.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/growth-communications/gesture-education/useredu_er_gesture_full.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                    </figure>
                    <p>这种类型的交互可以用于影响整个屏幕的手势，例如缩放。</p>
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