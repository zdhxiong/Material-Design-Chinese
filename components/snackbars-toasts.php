<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>Snackbars 在屏幕的底部提供有关操作的简洁的反馈。</h1>
          <div class="col-list">
            <section class="module-module-figure col-3 h3-spacing">
              <div class="module">
                <p><strong>Snackbars </strong>包含和执行的操作直接相关的单行文本。它们可能包含一个文本操作，但不含图标。</p>
                <p><strong>Toasts </strong>（仅支持 Android）主要用于系统消息。它们也显示在屏幕底部，但不能通过滑动关闭。</p>
              </div>
              <div class="module">
                <h3>用法</h3>
                <p>同一时间只能有一个 snackbar 处于显示状态。每一个 snackbar 都可能包含单个操作，但不会是 “Dismiss” 或 “Cancel” 。</p>
                <h3>行为</h3>
                <p>Snackbars 从屏幕底部边缘以动画的形式出现。</p>
                <h3>Snackbar 规格</h3>
                <ul class="lst-kix_eaje492nnrn7-0 start">
                  <li>操作按钮：Roboto Medium 14sp，使用大写文本</li>
                  <li>移动端高度：48dp（单行），80dp（多行）</li>
                  <li>桌面端高度：48dp</li>
                </ul>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 3000px">
                    <div class="frame " style="padding-top: 100.0%">
                      <img alt="" src="<?php static_url('../static/media/components/snackbars-toasts/components_snackbars.png'); ?>" loading="lazy"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="snackbars-toasts.html#snackbars-toasts-usage" data-qp-ui-data-id="qp:1">用法</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="snackbars-toasts.html#snackbars-toasts-specs" data-qp-ui-data-id="qp:2">规格</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">
        <div id="snackbars-toasts-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
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
              <p>同一时间只能有一个 snackbar 显示在屏幕上。</p>
              <h1>位置</h1>
              <p>Snackbars 出现在大部分元素的上方，并且它们的海拔高度和浮动操作按钮相同。但是，它们的海拔高度低于对话框、底部卡片和抽屉栏导航。</p>
              <h1>行为</h1>
              <p>snackbar 会以动画的形式从屏幕底部边缘出现。当它们出现时，它们不会阻挠用户的输入。</p>
              <p>它们会在被滑动时消失，或者一段时间后自动消失，或者用户在 snackbar 之外的地方进行了交互时消失（例如打开新的视图或操作）。</p>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>非常短的文本字符串</h1>
                    <p>Snackbar 可以包含和执行的操作直接相关的单行文本。它们可以包含一个文本操作，但不能包含图标。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 35.5555555556%">
                          <img alt="" aria-describedby="usage-figure-caption-0" src="<?php static_url('../static/media/components/snackbars-toasts/components_toasts_usage1.png'); ?>" loading="lazy"/>
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
                        <div class="frame " style="padding-top: 35.5555555556%">
                          <img alt="" aria-describedby="usage-figure-caption-1" src="<?php static_url('../static/media/components/snackbars-toasts/components_toasts_usage2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-1">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>短暂显示</h1>
                    <p>Snackbar 一段时间后会自动消失。出于可用性的原因，不应把访问核心用例的唯一途径放在 snackbar 中。因为 snackbar 会显示在其他元素之上，所以不应持续显示或者堆叠显示。</p>
                    <p>在 Android 设备上，显示着 snackbar 时，当一个不相关的对话框或弹出控件出现时，焦点会聚焦在对话框或弹出控件上，snackbar 的超时时间会在窗口重新获得焦点时重置。这是为了确保用户能在预期时间内阅读完 snackbar 的内容。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 53.3333333333%">
                          <img alt="" aria-describedby="usage-figure-caption-2" src="<?php static_url('../static/media/components/snackbars-toasts/components_toasts_usage3.png'); ?>" loading="lazy"/>
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
                        <div class="frame " style="padding-top: 53.3333333333%">
                          <img alt="" aria-describedby="usage-figure-caption-3" src="<?php static_url('../static/media/components/snackbars-toasts/components_toasts_usage4.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-3">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>可包含 0-1 个操作，但不能是忽略或取消</h1>
                    <p>如果存在一个操作，请遵循对话框间距和可见性规则。对于两个或更多个操作，请使用对话框，而不是 snackbar，即使其中一个是忽略操作。如果 snackbar 中描述的操作非常重要，需要屏蔽屏幕的使用，那么应该使用对话框。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 35.5555555556%">
                          <img alt="" aria-describedby="usage-figure-caption-4" src="<?php static_url('../static/media/components/snackbars-toasts/components_toasts_usage5.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-4">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 35.5555555556%">
                          <img alt="" aria-describedby="usage-figure-caption-5" src="<?php static_url('../static/media/components/snackbars-toasts/components_toasts_usage6.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-5">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>不要覆盖到浮动操作按钮上</h1>
                    <p>出现 snackbar 的同时垂直移动浮动操作按钮，以便使 snackbar 不会覆盖住浮动操作按钮。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="usage-figure-caption-6" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/components/snackbars-toasts/components_snackbar_usage_fabdo_005.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/components/snackbars-toasts/components_snackbar_usage_fabdo_005.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-6">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="usage-figure-caption-7" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/components/snackbars-toasts/components_snackbar_usage_fabdont_005.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/components/snackbars-toasts/components_snackbar_usage_fabdont_005.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-7">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module"></div>
                  <div class="module"></div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>连续的 snackbar</h1>
                    <p>始终只有一个 snackbar 处于显示状态。当第二个 snackbar 被触发，但第一个 snackbar 还显示着时，第一个 snackbar 应该开始向下隐藏，等第一个完全隐藏后，第二个 snackbar 开始向上出现。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 173.611111111%">
                          <video aria-describedby="usage-figure-caption-8" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/components/snackbars-toasts/components_snackbars_usage_consecutivesbdifferenttype_005.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/components/snackbars-toasts/components_snackbars_usage_consecutivesbdifferenttype_005.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-8">
                        <p>两个有不同内容的连续的 snackbar。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="usage-figure-caption-9" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/components/snackbars-toasts/components_snackbars_usage_consecutivesbsametype_005.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/components/snackbars-toasts/components_snackbars_usage_consecutivesbsametype_005.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-9">
                        <p>两个有相同内容的连续的 snackbar。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="snackbars-toasts-specs" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
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
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>移动端</h1>
                    <ul class="lst-kix_t4bqbxm63pob-0 start">
                      <li>单行 snackbar 高度：48dp</li>
                      <li>多行 snackbar 高度：80dp</li>
                      <li>文本：Roboto Regular 14sp</li>
                      <li>操作按钮：Roboto Medium 14sp，全部使用大写字母</li>
                      <li>默认背景色：#323232 100%</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-0" src="<?php static_url('../static/media/components/snackbars-toasts/components_toasts_mobile1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-0">
                        <p>移动端的 snackbar</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-1" src="<?php static_url('../static/media/components/snackbars-toasts/components_toasts_mobile2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-1">
                        <p>移动端的 snackbar</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="specs-figure-caption-2" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/components/snackbars-toasts/components_snackbar_usage_fabdo_005.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/components/snackbars-toasts/components_snackbar_usage_fabdo_005.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-2">
                        <p>移动端的 snackbar 动画</p>
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
                      <div class="media" style="max-width: 1280px">
                        <div class="frame " style="padding-top: 56.25%">
                          <img alt="" aria-describedby="specs-figure-caption-3" src="<?php static_url('../static/media/components/snackbars-toasts/components_toasts_mobile3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-3">
                        <p>横屏状态下的移动端 snackbar</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 88.1578947368%">
                          <img alt="" aria-describedby="specs-figure-caption-4" src="<?php static_url('../static/media/components/snackbars-toasts/components_toasts_mobile4.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-4">
                        <p>移动端的 snackbar 的规格</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>平板/桌面端</h1>
                    <ul class="lst-kix_psrtmy7li6md-0 start">
                      <li>单行 snackbar 高度：48dp</li>
                      <li>最小宽度：288dp</li>
                      <li>最大宽度：568dp</li>
                      <li>2dp 圆角半径</li>
                      <li>文本：Roboto Regular 14sp</li>
                      <li>操作按钮：Roboto Medium 14sp，全部使用大写字母</li>
                      <li>默认背景色：#323232 100%</li>
                      <li>对齐方式：居中对齐，或距离屏幕左侧和底部边缘 24dp 左对齐。</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 28.9473684211%">
                          <img alt="" aria-describedby="specs-figure-caption-5" src="<?php static_url('../static/media/components/snackbars-toasts/components_toasts_tabletdesktop1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-5">
                        <p>一个居中对齐的平板/桌面端 snackbar</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 28.9473684211%">
                          <img alt="" aria-describedby="specs-figure-caption-6" src="<?php static_url('../static/media/components/snackbars-toasts/components_toasts_tabletdesktop2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-6">
                        <p>一个居中对齐的平板/桌面端 snackbar</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 2111px">
                        <div class="frame " style="padding-top: 28.943628612%">
                          <img alt="" aria-describedby="specs-figure-caption-7" src="<?php static_url('../static/media/components/snackbars-toasts/components_toasts_tabletdesktop1-left.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-7">
                        <p>一个左对齐的平板/桌面端 snackbar</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 2111px">
                        <div class="frame " style="padding-top: 28.943628612%">
                          <img alt="" aria-describedby="specs-figure-caption-8" src="<?php static_url('../static/media/components/snackbars-toasts/components_toasts_tabletdesktop2-left.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-8">
                        <p>一个左对齐的平板/桌面端的 snackbar</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 67.3684210526%">
                          <img alt="" aria-describedby="specs-figure-caption-9" src="<?php static_url('../static/media/components/snackbars-toasts/components_toasts_tabletdesktop3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-9">
                        <p>平板/桌面端的 snackbar 规格</p>
                        <p>Snackbar 高度：48dp<br>
                          Snackbar 左右内边距：24dp<br>
                          Snackbar 上下内边距：14dp<br>
                          Snackbar 按钮左侧边距：48dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-module col-2">
                  <div class="module"></div>
                  <div class="module">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 73.5526315789%">
                          <video aria-describedby="specs-figure-caption-10" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/components/snackbars-toasts/components_snackbar_specs_fabtablet_002.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/components/snackbars-toasts/components_snackbar_specs_fabtablet_002.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-10">
                        <p>平板/桌面端的 snackbar 动画</p>
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
