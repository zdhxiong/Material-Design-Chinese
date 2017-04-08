<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>

    <div class="chapter-content">
      <div class="article-content chapter-intro">
        <div>
          <p>底部卡片是从屏幕底部边缘向上滑出的一个面板，它用于向用户展示额外的内容。</p>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p><strong>模态化的底部卡片</strong> 主要用于手机端，也可以用于显示来自其他应用的深层链接。</p>
                <p><strong>固定显示的底部卡片</strong> 和应用是一个整体，用于显示应用所支持的内容。</p>
              </div>
              <div class="module">
                <h3><strong>交互</strong></h3>
                <p>底部卡片必须由用户主动操作来触发显示。</p>
                <h3><strong>高度</strong></h3>
                <p>模态化底部卡片：在应用上方<br>
                  固定显示的底部卡片：与应用高度相同</p>
                <h3><strong>备选方案</strong></h3>
                <p>
                  <a href="dialogs.html#dialogs-simple-menus">简单对话框</a> <br>
                  <a href="menus.html">菜单</a>
                </p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 3000px">
                    <div class="frame" style="padding-top: 100.0%">
                      <img alt="" src="<?php static_url('../static/media/components/bottom-sheets/components_bottom_sheets.png'); ?>"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="bottom-sheets.html#bottom-sheets-usage" data-qp-ui-data-id="qp:1">用法</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="bottom-sheets.html#bottom-sheets-persistent-bottom-sheets" data-qp-ui-data-id="qp:2">固定显示的底部卡片</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="bottom-sheets.html#bottom-sheets-modal-bottom-sheets" data-qp-ui-data-id="qp:3">模态化的底部卡片</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="bottom-sheets.html#bottom-sheets-behavior" data-qp-ui-data-id="qp:4">操作</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="bottom-sheets.html#bottom-sheets-specs" data-qp-ui-data-id="qp:5">规格</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="bottom-sheets-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
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
                  <div class="module"><p>底部卡片有两种主要类型：</p>
                    <ul class="lst-kix_fbig61rmmdfl-0 start">
                      <li>
                        <strong>模态化底部卡片</strong> 可以被菜单或简单的对话框替代。它也可以用于显示来自其他应用的深层链接。它主要用于手机端。
                      </li>
                      <li>
                        <strong>固定显示的底部卡片</strong> 和应用是一个整体，用于显示应用所支持的内容。
                      </li>
                    </ul>
                    <p>用高度来区分模态化和固定显示的底部卡片。模态化的底部卡片的高度比应用内容高；而固定显示的底部卡片和应用内容一样高，和应用内容是一个整体。</p>
                    <p>在大屏设备中，有足够空间的情况下，使用其他组件，如<a href="dialogs.html#dialogs-simple-dialogs">简单对话框</a>或<a href="menus.html">菜单</a>代替底部卡片会更合适。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="usage-figure-caption-1" src="<?php static_url('../static/media/components/bottom-sheets/components_bottomsheets_usage2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-1">
                        <p>模态化的底部卡片从应用内容的上方滑入。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="usage-figure-caption-2" src="<?php static_url('../static/media/components/bottom-sheets/components_bottomsheets_usage1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-2">
                        <p>固定显示的底部卡片是应用布局的组成部分。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="bottom-sheets-persistent-bottom-sheets" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            固定显示的底部卡片
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
                    <p>固定显示的底部卡片作为应用内容的补充部分显示应用所支持的内容。即使它们未被用户启动，也保持可见，并拥有与应用内容相同的高度。</p>
                    <h2><strong><strong>用法</strong></strong></h2>
                    <ol class="lst-kix_mzdetq3s4nzc-0 start" start="1">
                      <li>在特定的面板上引入新的内容</li>
                      <li>显示与主内容具有相同重要性的内容</li>
                    </ol>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 149.166666667%">
                          <img alt="" aria-describedby="persistent-bottom-sheets-figure-caption-1" src="<?php static_url('../static/media/components/bottom-sheets/components_bottomsheets_persistent2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="persistent-bottom-sheets-figure-caption-1">
                        <p>将固定显示的底部卡片引入到布局中，会使得浮动操作按钮（FAB）垂直移动到图片位置。</p>
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
                        <div class="frame" style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="persistent-bottom-sheets-figure-caption-2" src="<?php static_url('../static/media/components/bottom-sheets/components_bottomsheets_persistent5.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="persistent-bottom-sheets-figure-caption-2">
                        <p>固定显示的底部卡片，可以使地图上的位置信息细节保留在屏幕上。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="persistent-bottom-sheets-figure-caption-3" src="<?php static_url('../static/media/components/bottom-sheets/components_bottomsheets_persistent6.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="persistent-bottom-sheets-figure-caption-3">
                        <p>无论用户在主视图中如何导航，播放控件都会显示在固定显示的底部卡片上方</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>手机端</strong></p>
                    <p>手机端的固定显示的底部卡片，在横屏和竖屏时均保持和屏幕等宽。</p>
                    <p><strong>平板 / 桌面</strong></p>
                    <p>固定显示的底部卡片是与屏幕等宽还是内嵌显示，取决于它们所包含的内容的宽度，整体 UI，基本内容和设计风格。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 75.0%">
                          <img alt="" aria-describedby="persistent-bottom-sheets-figure-caption-4" src="<?php static_url('../static/media/components/bottom-sheets/components_bottomsheets_persistent7.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="persistent-bottom-sheets-figure-caption-4">
                        <p>平板上，与屏幕等宽的固定显示的底部卡片</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame" style="padding-top: 75.0%">
                          <img alt="" aria-describedby="persistent-bottom-sheets-figure-caption-5" src="<?php static_url('../static/media/components/bottom-sheets/components_bottomsheets_persistent8.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="persistent-bottom-sheets-figure-caption-5">
                        <p>平板上，内嵌式的固定显示的底部卡片</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>在桌面端，固定显示的底部卡片可以改变它的表面形态与卡片质感。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 64.4736842105%">
                          <img alt="" aria-describedby="persistent-bottom-sheets-figure-caption-6" src="<?php static_url('../static/media/components/bottom-sheets/components_bottomsheets_persistent9.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="persistent-bottom-sheets-figure-caption-6">
                        <p>在桌面端，一个固定显示的底部卡片的内容可以移动到一个新的卡片上去。在大屏幕设备中，屏幕左侧的卡片会比底部卡片更为合适。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="bottom-sheets-modal-bottom-sheets" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            模态化的底部卡片
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
                    <p>模态化的底部卡片是菜单与简单对话框的备选方案，它可以显示来自其他应用上的深层链接。它显示在其他 UI 元素上方，且必须将其关闭后才能与底层的内容进行交互。当一个模态化底部卡片滑入屏幕，屏幕的其他地方变暗，视觉焦点位于底部卡片上。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 149.166666667%">
                          <img alt="" aria-describedby="modal-bottom-sheets-figure-caption-1" src="<?php static_url('../static/media/components/bottom-sheets/components_bottomsheets_modal1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="modal-bottom-sheets-figure-caption-1">
                        <p>在列表中包含一系列操作项的模态化底部卡片</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 149.166666667%">
                          <img alt="" aria-describedby="modal-bottom-sheets-figure-caption-2" src="<?php static_url('../static/media/components/bottom-sheets/components_bottomsheets_modal2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="modal-bottom-sheets-figure-caption-2">
                        <p>在网格中包含一系列操作项的模态化底部卡片</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong><strong>用法</strong></strong></h2>
                    <p>模态化底部卡片可以：</p>
                    <ol class="lst-kix_u65awwthf3bo-0 start" start="1">
                      <li>用位于列表或网格中的操作项来代替菜单或简单对话框。</li>
                      <li>当菜单没有明显的入口时，作为上下文菜单显示。</li>
                      <li>优先考虑它们包含的元素的可见性。</li>
                    </ol>
                    <p>模态化底部卡片可以显示较长的菜单项名称、带有副文本的菜单项以及含图标的菜单项。</p>
                    <p>显示菜单项时，完全展开的模态化底部卡片应该与应用栏底部至少保持 8dp 的距离。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 149.166666667%">
                          <img alt="" aria-describedby="modal-bottom-sheets-figure-caption-3" src="<?php static_url('../static/media/components/bottom-sheets/components_bottomsheets_modal3.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="modal-bottom-sheets-figure-caption-3">
                        <p>底部卡片可以将图标与菜单项关联。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 148.888888889%">
                          <img alt="" aria-describedby="modal-bottom-sheets-figure-caption-4" src="<?php static_url('../static/media/components/bottom-sheets/components_bottomsheets_modal4.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="modal-bottom-sheets-figure-caption-4">
                        <p>含副文本的菜单项</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h2><strong><strong>深层链接</strong></strong></h2>
                    <p>模态化底部卡片，可与其他应用的内容或控件进行深层链接，它可以跨越应用的边界。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 148.888888889%">
                          <img alt="" aria-describedby="modal-bottom-sheets-figure-caption-5" src="<?php static_url('../static/media/components/bottom-sheets/components_bottomsheets_modal7.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="modal-bottom-sheets-figure-caption-5">
                        <p>在深层链接的底部卡片上，可以直接显示一个单词的解释，用户无需打开词典应用。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 52.6315789474%">
                          <img alt="" aria-describedby="modal-bottom-sheets-figure-caption-6" src="<?php static_url('../static/media/components/bottom-sheets/components_bottomsheets_modal6.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="modal-bottom-sheets-figure-caption-6">
                        <p>右侧 app 的底部卡片显示来自左侧 app 的内容。这允许用于在不离开当前 app 的情况下查看来自另一 app 的内容。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>底部卡片可以通过深层链接显示其他应用的内容，这些链接可以是：</p>
                    <ul class="lst-kix_vmecuoyu6vju-0 start">
                      <li>允许用户在另一个 app 内浏览更深层级的内容</li>
                      <li>返回到最开始的地方</li>
                    </ul>
                    <p>然而，这些深层链接不允许用户在层次结构中向上导航：它们可以仅停留在初始层级、或更深的层级、或返回到初始层级。</p>
                    <p>此外，深层链接可以将用户从底部卡片完全导航到另一个视图。</p>
                    <p>要从底部卡片的深层链接向上导航，需要提供一个明确的链接，通过菜单打开应用。深层链接的底部卡片中的操作可能会打开其他应用，例如使用 “添加联系人” 操作。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 72.2222222222%">
                          <img alt="" aria-describedby="modal-bottom-sheets-figure-caption-7" src="<?php static_url('../static/media/components/bottom-sheets/components_bottomsheets_modal_do.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="modal-bottom-sheets-figure-caption-7">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>当模态化底部卡片完全展开时，应该在应用栏上显示关闭按钮</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 72.2222222222%">
                          <img alt="" aria-describedby="modal-bottom-sheets-figure-caption-8" src="<?php static_url('../static/media/components/bottom-sheets/components_bottomsheets_modal_dont.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="modal-bottom-sheets-figure-caption-8">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>当导航到应用的下一级内容时，应该显示一个返回箭头</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong><strong>手机端</strong></strong></h2>
                    <p>模态化底部卡片主要在手机端使用，无论是横屏还是竖屏时，它们都与屏幕等宽。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="modal-bottom-sheets-figure-caption-9" src="<?php static_url('../static/media/components/bottom-sheets/components_bottomsheets_modal9.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="modal-bottom-sheets-figure-caption-9">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>模态化的底部卡片，初始状态不能和应用栏重叠。允许使用点击/滑动的方式进行关闭。</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="modal-bottom-sheets-figure-caption-10" src="<?php static_url('../static/media/components/bottom-sheets/components_bottomsheets_modal11.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="modal-bottom-sheets-figure-caption-10">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>当显示长列表时，模态化的底部卡片可以在内部进行滚动，并且展开到超过 16:9 的关键点。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="modal-bottom-sheets-figure-caption-11" src="<?php static_url('../static/media/components/bottom-sheets/components_bottomsheets_modal10.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="modal-bottom-sheets-figure-caption-11">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>底部卡片的高度应由其包含的内容的数量决定。</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="modal-bottom-sheets-figure-caption-12" src="<?php static_url('../static/media/components/bottom-sheets/components_bottomsheets_modal12.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="modal-bottom-sheets-figure-caption-12">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>模态化的底部卡片，初始状态不能和应用栏重叠。保留一定的空间，让用户可以点击底部卡片外面的区域来关闭它。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-module col-2">
                  <div class="module">
                    <h2><strong><strong>平板 / 桌面</strong></strong></h2>
                    <p>在大屏幕上，可以考虑用其他组件替换掉模态化的底部卡片。因为底部卡片出现的位置可能和用户点击或触摸的位置较远，这会分散用户的注意力。</p>
                    <p>因为桌面设备的空间充裕，所以它可以有多种方案来替代模态化的底部卡片。</p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>底部卡片替代方案</p></td>
                        <td colspan="1" rowspan="1"><p>优点</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>菜单</p></td>
                        <td colspan="1" rowspan="1"><p>保证了选项出现在用户点击的位置附近</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>简单对话框</p></td>
                        <td colspan="1" rowspan="1"><p>直接打断用户的当前操作</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>同一视图中的内联扩展</p></td>
                        <td colspan="1" rowspan="1"><p>不会像菜单和对话框那样打断用户操作</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>将所有选项直接显示出来</p></td>
                        <td colspan="1" rowspan="1"><p>不需要点击按钮就能进行访问</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>打开一个新的浏览器窗口</p></td>
                        <td colspan="1" rowspan="1"><p>灵活的尺寸和布局的独立性</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 82.1052631579%">
                          <img alt="" aria-describedby="modal-bottom-sheets-figure-caption-13" src="<?php static_url('../static/media/components/bottom-sheets/components_bottomsheets_modal15.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="modal-bottom-sheets-figure-caption-13">
                        <p>菜单可以使选项和触发它的元素的位置更靠近，不建议将这些菜单项放在底部卡片中。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>在大屏幕上使用模态化的底部卡片时，需要根据空间大小进行适当的布局。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 75.0%">
                          <img alt="" aria-describedby="modal-bottom-sheets-figure-caption-14" src="<?php static_url('../static/media/components/bottom-sheets/components_bottomsheets_modal13.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="modal-bottom-sheets-figure-caption-14">
                        <p>平板上的网格列表底部卡片</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 75.0%">
                          <img alt="" aria-describedby="modal-bottom-sheets-figure-caption-15" src="<?php static_url('../static/media/components/bottom-sheets/components_bottomsheets_modal14.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="modal-bottom-sheets-figure-caption-15">
                        <p>平板上的长列表底部卡片</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="bottom-sheets-behavior" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            操作
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
                    <p>关闭底部卡片的方式可以是向下滑动、点击关闭控件（例如应用栏中的 X）、或者触摸系统后退按钮（Android）。</p>
                    <p>模态化底部卡片也可以通过触摸卡片外面的区域来关闭。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 97.2222222222%">
                          <img alt="" aria-describedby="behavior-figure-caption-1" src="<?php static_url('../static/media/components/bottom-sheets/components_bottomsheets_behavior1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-1">
                        <p>向下滑动底部卡片来关闭</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 97.2222222222%">
                          <img alt="" aria-describedby="behavior-figure-caption-2" src="<?php static_url('../static/media/components/bottom-sheets/components_bottomsheets_behavior2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-2">
                        <p>点击底部卡片以外的区域来关闭</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 97.5%">
                          <img alt="" aria-describedby="behavior-figure-caption-3" src="<?php static_url('../static/media/components/bottom-sheets/components_bottomsheets_behavior3.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-3">
                        <p>点击 X 关闭</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="bottom-sheets-specs" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:5">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:5">
            规格
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>以下规格适用于手机端。</p>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module"><h1>字体和颜色</h1>
                    <ul class="lst-kix_h583orow0c26-0 start">
                      <li>字体：Roboto Regular 16sp, #000 87%</li>
                      <li>标题（可选）：Roboto Regular 16sp, #000 54%</li>
                      <li>默认底部卡片背景色：#FFF</li>
                      <li>透明遮罩层填充色：#000 20%</li>
                    </ul>
                  </div>
                  <div class="module"></div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong><strong>列表样式的底部卡片</strong></strong></h2>
                    <p>屏幕左右边距：16dp<br>
                      顶部和底部边距：8dp<br>
                      列表项高度：48dp<br>
                      列表图标：24x24dp，中间垂直对齐<br>
                      图标和文字之间的间距：32dp 水平对齐</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 83.3333333333%">
                          <img alt="" aria-describedby="specs-figure-caption-1" src="<?php static_url('../static/media/components/bottom-sheets/components_bottomsheets_specs1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-1">
                        <p>手机端的列表样式的底部卡片的尺寸标注</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 83.3333333333%">
                          <img alt="" aria-describedby="specs-figure-caption-2" src="<?php static_url('../static/media/components/bottom-sheets/components_bottomsheets_specs2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-2">
                        <p>手机端的列表样式的底部卡片</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong><strong>有表头的列表卡片</strong></strong></h2>
                    <p>屏幕左右边距：16dp<br>
                      第一个列表项下方的空间：7dp<br>
                      分隔线：1dp<br>
                      第二个列表上方的空间：8dp<br>
                      列表项高度：48dp<br>
                      列表图标：24x24dp，中间垂直对齐<br>
                      图标和文字之间的间距：32dp 水平对齐<br>
                      列表标题高度：56dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 110.0%">
                          <img alt="" aria-describedby="specs-figure-caption-3" src="<?php static_url('../static/media/components/bottom-sheets/components_bottomsheets_specs3.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-3">
                        <p>有表头的底部列表尺寸标注</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 110.0%">
                          <img alt="" aria-describedby="specs-figure-caption-4" src="<?php static_url('../static/media/components/bottom-sheets/components_bottomsheets_specs4.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-4">
                        <p>有表头的底部列表</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong>带图标的网格样式的底部卡片</strong></h2>
                    <p>网格四周外边距：24dp<br>
                      网格列表行间距：24dp<br>
                      网格列表图标：48x48dp，且每一行的间距都相等<br>
                      网格列表标签高度：16dp，图标下方居中<br>
                      图标下方外边距：24dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 110.0%">
                          <img alt="" aria-describedby="specs-figure-caption-5" src="<?php static_url('../static/media/components/bottom-sheets/components_bottomsheets_specs7.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-5">
                        <p>网格样式的底部卡片的尺寸标注，其中包含一组跳转到其他应用的操作项</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 110.0%">
                          <img alt="" aria-describedby="specs-figure-caption-6" src="<?php static_url('../static/media/components/bottom-sheets/components_bottomsheets_specs8.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-6">
                        <p>网格样式的底部卡片，其中包含一组跳转到其他应用的操作项</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong>带头部的网格样式的底部卡片</strong></h2>
                    <p>屏幕左右边距：24dp<br>
                      列表行下方间距：8dp<br>
                      分隔线：1dp<br>
                      分隔线上方和下方间距：8dp<br>
                      列表图标：48x48dp，垂直居中对齐<br>
                      网格列表标签高度：16dp，图标下方居中<br>
                      列表标题高度：56dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 110.0%">
                          <img alt="" aria-describedby="specs-figure-caption-7" src="<?php static_url('../static/media/components/bottom-sheets/components_bottomsheets_specs12.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-7">
                        <p>含头部的网格样式的底部卡片的尺寸标注</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 110.0%">
                          <img alt="" aria-describedby="specs-figure-caption-8" src="<?php static_url('../static/media/components/bottom-sheets/components_bottomsheets_specs13.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-8">
                        <p>含头部的网格样式的底部卡片的尺寸标注</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>底部卡片从屏幕的底部向上滑出，并覆盖屏幕的一部分。</p>
                    <p>底部卡片的初始高度和它包含的列表（或网格）的高度相关联。底部卡片的高度取决于它包含的内容的多少，但初始高度不应超过 16:9。底部卡片可以通过向上滑动来增加高度，并允许内容在卡片内滚动。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-9" src="<?php static_url('../static/media/components/bottom-sheets/components_bottomsheets_specs9.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-9">
                        <p>底部卡片的初始高度不应超过 16:9。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 83.3333333333%">
                          <img alt="" aria-describedby="specs-figure-caption-10" src="<?php static_url('../static/media/components/bottom-sheets/components_bottomsheets_specs10.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-10">
                        <p>底部卡片的最小高度和它包含的列表的高度相关联。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <h2><strong><strong>桌面和平板应用的规格</strong></strong></h2>
                    <p>桌面和平板上的底部卡片使用这些最小和最大宽度。</p>
                    <p>底部卡片的宽度由整个界面的结构决定，它通常基于增量。在页面网格上，底部卡片的最大宽度和页面网格及其包含的内容相关联。</p>
                    <p>例如，在 960dp 的屏幕上，如果使用应用栏的高度（64dp）作为增量，则总共会有 15 个增量宽。应该最少使用一个增量宽将底部卡片与屏幕边缘分开，底部卡片本身应至少有 6 个增量宽度。</p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>屏幕宽度</p></td>
                        <td colspan="1" rowspan="1"><p>距离屏幕边缘的最小距离（增量）</p></td>
                        <td colspan="1" rowspan="1"><p>卡片的最小宽度（增量）</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>960dp</p></td>
                        <td colspan="1" rowspan="1"><p>1 个增量</p></td>
                        <td colspan="1" rowspan="1"><p>6 个增量</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>1280dp</p></td>
                        <td colspan="1" rowspan="1"><p>2 个增量</p></td>
                        <td colspan="1" rowspan="1"><p>8 个增量</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>1440dp</p></td>
                        <td colspan="1" rowspan="1"><p>3 个增量</p></td>
                        <td colspan="1" rowspan="1"><p>9 个增量</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 2320px">
                        <div class="frame " style="padding-top: 66.724137931%">
                          <img alt="" aria-describedby="specs-figure-caption-11" src="<?php static_url('../static/media/components/bottom-sheets/components_bottomsheets_specs11.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-11">
                        <p>各种桌面屏幕尺寸的断点</p>
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