<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <p>工具提示是一个文本标签，会在用户鼠标悬停、聚焦、或触摸一个元素时显示。</p>
          <div class="col-list">
            <section class="module-module-figure col-3 h3-spacing">
              <div class="module">
                <p>工具提示在元素被激活时找到元素。它们可能包含关于其功能的简要帮助文本。例如，它们可能包含关于一个操作图标的文本信息。</p>
                <p>工具提示标签无法获得焦点。</p>
              </div>
              <div class="module">
                <h3>可以通过以下操作呼出工具提示：</h3>
                <ul class="lst-kix_dz083mq70mc5-0 start">
                  <li>鼠标悬停在元素上</li>
                  <li>用键盘把焦点聚焦到一个元素上（通常是 tab 键）</li>
                  <li>触摸时</li>
                </ul>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 3000px">
                    <div class="frame " style="padding-top: 100.0%">
                      <img alt="" src="<?php static_url('../static/media/components/tooltips/components_tooltips.png'); ?>" loading="lazy"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="tooltips.html#tooltips-usage" data-qp-ui-data-id="qp:1">用法</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="tooltips.html#tooltips-interaction" data-qp-ui-data-id="qp:2">交互</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="tooltips.html#tooltips-tooltips-desktop" data-qp-ui-data-id="qp:3">工具提示（桌面端）</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="tooltips.html#tooltips-tooltips-mobile" data-qp-ui-data-id="qp:4">工具提示（移动端）</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="tooltips-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
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
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>为交互式图像提供工具提示。</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 107.777777778%">
                          <img alt="" aria-describedby="usage-figure-caption-0" src="<?php static_url('../static/media/components/tooltips/components_tooltips_usage1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-0">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 107.777777778%">
                          <img alt="" aria-describedby="usage-figure-caption-1" src="<?php static_url('../static/media/components/tooltips/components_tooltips_usage2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-1">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>工具提示不会显示如图片和格式化文本之类的富文本信息。</p>
                    <p>工具提示与 ALT 属性不同，ALT 属性主要用于静态图片。</p>
                    <p>工具提示没有方向箭头；相反，它们依靠动画方向来表达工具提示的方向。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 122.222222222%">
                          <img alt="" aria-describedby="usage-figure-caption-2" src="<?php static_url('../static/media/components/tooltips/components_tooltips_usage3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-2">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 122.222222222%">
                          <img alt="" aria-describedby="usage-figure-caption-3" src="<?php static_url('../static/media/components/tooltips/components_tooltips_usage4.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-3">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="tooltips-interaction" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            交互
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>通过点击并按住元素可以触发工具提示。只要用户继续按住元素，就要保持工具提示继续显示</p>
              <h1>定时</h1>
              <p>工具提示出现后，持续显示 1.5 秒。</p>
              <p>如果用户在该时间之前采取了另一个操作，则工具提示将消失。</p>
              <h1>动画细节</h1>
              <p>工具提示<strong>出现过程</strong>持续 150 毫秒后，进入<a href="../motion/duration-easing.html#duration-easing-natural-easing-curves">减速运动</a>。它的<strong>消失过程</strong>也是持续 150 毫秒后，进入<a href="../motion/duration-easing.html#duration-easing-natural-easing-curves">加速运动</a>。</p>
            </div>
          </div>
        </div>

        <div id="tooltips-tooltips-desktop" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            工具提示（桌面端）
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
                  <div class="module"><p>文本：Roboto Medium 10sp</p>
                    <p>颜色：Grey 700</p>
                    <p>不透明度：90%</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 16.6666666667%">
                          <img alt="" aria-describedby="tooltips-desktop-figure-caption-0" src="<?php static_url('../static/media/components/tooltips/components_tooltips_cursor_keyline.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="tooltips-desktop-figure-caption-0">
                        <p>光标/键盘工具提示</p>
                        <p>瓦片高度：22dp<br>
                          文本左右内边距：8dp<br>
                          顶部外边距：14dp</p>
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
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 10.2631578947%">
                          <img alt="" aria-describedby="tooltips-desktop-figure-caption-1" src="<?php static_url('../static/media/components/tooltips/components_tooltips_cursor.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="tooltips-desktop-figure-caption-1">
                        <p>光标/键盘工具提示示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="tooltips-tooltips-mobile" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            工具提示（移动端）
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
                  <div class="module"><p>文本：Roboto Medium 14sp</p>
                    <p>颜色：Grey 700</p>
                    <p>不透明度：90%</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 23.3333333333%">
                          <img alt="" aria-describedby="tooltips-mobile-figure-caption-0" src="<?php static_url('../static/media/components/tooltips/components_tooltips_touch_keyline.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="tooltips-mobile-figure-caption-0">
                        <p>触摸元素工具提示</p>
                        <p>瓦片高度：32dp<br>
                          文本左右内边距：16dp<br>
                          顶部外边距：24dp</p>
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
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="tooltips-mobile-figure-caption-1" src="<?php static_url('../static/media/components/tooltips/components_tooltips_touch1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="tooltips-mobile-figure-caption-1">
                        <p>触摸元素工具提示示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="tooltips-mobile-figure-caption-2" src="<?php static_url('../static/media/components/tooltips/components_tooltips_touch2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="tooltips-mobile-figure-caption-2">
                        <p>触摸元素工具提示示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 66.6666666667%">
                          <img alt="" aria-describedby="tooltips-mobile-figure-caption-3" src="<?php static_url('../static/media/components/tooltips/components_tooltips_touch3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="tooltips-mobile-figure-caption-3">
                        <p>普通状态触摸元素工具提示示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 66.6666666667%">
                          <img alt="" aria-describedby="tooltips-mobile-figure-caption-4" src="<?php static_url('../static/media/components/tooltips/components_tooltips_touch4.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="tooltips-mobile-figure-caption-4">
                        <p>按下并持续按住状态的工具提示示例</p>
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
