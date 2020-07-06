<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?= $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>滚动技术影响内容相对于应用栏滚动的方式。</h1>
          <div class="col-list">
            <section class="module-module-figure col-3 h3-spacing">
              <div class="module">
                <p>下列这些模式描述了滚动内容的海拔高度，如何调整弹性区域，以及何时固定指定元素。</p>
              </div>
              <div class="module">
                <h3>应用栏滚动区域</h3>
                <p>状态栏<br>
                  工具栏<br>
                  选项卡栏/搜索栏<br>
                  弹性区域</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 3000px">
                    <div class="frame " style="padding-top: 100.0%">
                      <img alt="" src="<?= static_url('../static/media/patterns/scrolling-techniques/patterns_scrolling_techniques.png'); ?>" loading="lazy"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="scrolling-techniques.html#scrolling-techniques-app-bar-scrollable-regions" data-qp-ui-data-id="qp:1">应用栏可滚动区域</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="scrolling-techniques.html#scrolling-techniques-behavior" data-qp-ui-data-id="qp:2">行为</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">
        <div id="scrolling-techniques-app-bar-scrollable-regions" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            应用栏可滚动区域
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
                    <p>设计滚动行为时，应用栏包含 4 个主要区域（简称为<strong>块</strong>），包含下列滚动结构：</p>
                    <ul class="lst-kix_msg1zeepgnvm-0 start">
                      <li>状态栏</li>
                      <li>工具栏</li>
                      <li>标签栏/搜索栏</li>
                      <li>弹性区域：可容纳图片或扩展应用栏所需宽高比的区域</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 77.7777777778%">
                          <img alt="" aria-describedby="app-bar-scrollable-regions-figure-caption-0" src="<?= static_url('../static/media/patterns/scrolling-techniques/patterns_scrolling_scroll1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="app-bar-scrollable-regions-figure-caption-0">
                        <p>应用栏组件可以包括：状态栏、导航栏、选项卡栏/搜索栏、弹性区域</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 77.7777777778%">
                          <img alt="" aria-describedby="app-bar-scrollable-regions-figure-caption-1" src="<?= static_url('../static/media/patterns/scrolling-techniques/patterns_scrolling_video1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="app-bar-scrollable-regions-figure-caption-1">
                        <p>状态栏、导航栏、选项卡栏/搜索栏、弹性区域示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="scrolling-techniques-behavior" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
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
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>标准应用栏</h1>
                    <p>规格：</p>
                    <p>标准应用栏在手机上为 56dp，在更大屏幕的设备上为 64dp。</p>
                    <p>应用栏有两个滚动选项：</p>
                    <ol class="lst-kix_xragy2uut2tp-0 start" start="1">
                      <li>应用栏可以和内容一起<strong>滚动离开屏幕</strong>，并在用户反向滚动时重新回到屏幕</li>
                      <li>应用栏可以<strong>固定在屏幕顶部</strong>，内容可以在其下方滚动</li>
                    </ol>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 22.2222222222%">
                          <img alt="" aria-describedby="behavior-figure-caption-0" src="<?= static_url('../static/media/patterns/scrolling-techniques/patterns_scrolling_scroll2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-0">
                        <p>标准应用栏</p>
                        <p>状态栏高度：24dp<br>
                          工具栏高度：56dp / 64dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="behavior-figure-caption-1" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/patterns/scrolling-techniques/patterns-scrolling-techniques_standard_appbar_xhdpi_004.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/patterns/scrolling-techniques/patterns-scrolling-techniques_standard_appbar_xhdpi_004.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-1">
                        <p>滚动时应用栏离开屏幕的动画</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>含选项卡的应用栏</h1>
                    <p><a href="http://www.google.com/design/spec/layout/structure.html#structure-app-bar" target="_blank">标准应用栏</a>组件可以包含以下块：工具栏、选项卡栏、弹性区域。</p>
                    <p>选项卡可以具有以下之一的行为：</p>
                    <ol class="lst-kix_cviczu2dcsqt-0 start" start="1">
                      <li>当滚动时，工具栏离开屏幕时，选项卡栏可以<strong>固定在屏幕顶部</strong></li>
                      <li>应用栏始终固定在屏幕顶部，<strong>内容在应用栏下方滚动</strong></li>
                      <li>工具栏和选项卡栏都会<strong>随着内容一起滚动离开屏幕</strong>。选项卡栏会在反向滚动时重新回到屏幕，工具栏会在完成反向滚动后回到屏幕</li>
                    </ol>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 35.5555555556%">
                          <img alt="" aria-describedby="behavior-figure-caption-2" src="<?= static_url('../static/media/patterns/scrolling-techniques/patterns_scrolling_scroll3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-2">
                        <p>状态栏、工具栏、选项卡栏</p>
                        <p>状态栏高度：24dp<br>
                          工具栏高度：56dp / 64dp<br>
                          选项卡栏高度：48dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 176.388888889%">
                          <video aria-describedby="behavior-figure-caption-3" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/patterns/scrolling-techniques/patterns-scrolling-techniques_tabs_xhdpi_004.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/patterns/scrolling-techniques/patterns-scrolling-techniques_tabs_xhdpi_004.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-3">
                        <p>动画显示工具栏滚动时离开屏幕，选项卡栏和应用栏固定在一个地方。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>弹性区域</h1>
                    <p>因为应用栏是弹性的，它可以扩展以适应更大的排版或图片。要扩展应用栏，请添加一个弹性区域块。</p>
                    <p>弹性区域可以通过以下两种方式之一来显示：</p>
                    <ol class="lst-kix_ssj9brumqzmr-0 start" start="1">
                      <li><strong>弹性区域缩小</strong>直到只有工具栏处于显示状态。标题在导航栏中缩小到 20sp。当滚动到页面顶部时，弹性区域和标题再次增大到原来位置。</li>
                      <li><strong>整个应用栏滚动离开屏幕</strong>。当用户反向滚动时，工具栏回到屏幕并固定到屏幕顶部。当一直反向滚动时，弹性区域和标题会再次增大到原来位置。</li>
                    </ol>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 44.1666666667%">
                          <img alt="" aria-describedby="behavior-figure-caption-4" src="<?= static_url('../static/media/patterns/scrolling-techniques/patterns_scrolling_scroll4.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-4">
                        <p>状态栏、工具栏、弹性区域</p>
                        <p>状态栏高度：24dp<br>
                          工具栏高度：56dp / 64dp<br></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="behavior-figure-caption-5" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/patterns/scrolling-techniques/patterns-scrolling-techniques-flexible_space_xhdpi_003.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/patterns/scrolling-techniques/patterns-scrolling-techniques-flexible_space_xhdpi_003.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-5">
                        <p>动画显示滚动时的弹性区域</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>含图片的弹性区域</h1>
                    <p>使用弹性区域来容纳应用栏中具有所需宽高比的图片。</p>
                    <p>在此示例中，宽高比是 4:3。滚动时，内容向上推动图片，缩小了弹性区域。在转换结束时，图片变成了应用的主色，且与滚动无关了。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 73.3333333333%">
                          <img alt="" aria-describedby="behavior-figure-caption-6" src="<?= static_url('../static/media/patterns/scrolling-techniques/patterns_scrolling_scroll5.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-6">
                        <p>状态栏、工具栏、弹性区域</p>
                        <p>状态栏高度：24dp<br>
                          工具栏高度：56dp / 64dp<br></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="behavior-figure-caption-7" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/patterns/scrolling-techniques/patterns-scrolling-techniques_flex_space_image_xhdpi_003.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/patterns/scrolling-techniques/patterns-scrolling-techniques_flex_space_image_xhdpi_003.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-7">
                        <p>动画显示滚动时的弹性区域和图片</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>具有重叠内容的弹性区域</h1>
                    <p>内容可以与应用栏重叠。</p>
                    <p>应用栏有两个滚动选项：</p>
                    <ul class="lst-kix_nm19p4ye05oz-0 start">
                      <li>应用栏最初位于内容的后面。向上滚动时，应用栏应比内容滚动更快，直到内容不再和应用栏重叠。一旦<strong>固定到一个位置</strong>，应用栏就会提升海拔高度，使内容在应用栏下方滚动。</li>
                    </ul>
                    <ul class="lst-kix_5ix0qxcgg3bx-0 start">
                      <li>应用栏可以和内容一起<strong>滚动离开屏幕</strong>，并在用户反向滚动时返回。</li>
                    </ul>
                    <p>在此交互中，应用栏不能包含选项卡栏。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 73.3333333333%">
                          <img alt="" aria-describedby="behavior-figure-caption-8" src="<?= static_url('../static/media/patterns/scrolling-techniques/patterns_scrolling_scroll6.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-8">
                        <p>弹性区域</p>
                        <p>状态栏：24dp<br>
                          工具栏：56dp/64dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1080px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="behavior-figure-caption-9" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/patterns/scrolling-techniques/patterns-scrolling-techniques_flex_space_overlap_xhdpi_003.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/patterns/scrolling-techniques/patterns-scrolling-techniques_flex_space_overlap_xhdpi_003.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-9">
                        <p>动画显示滚动时的弹性区域和覆盖应用栏的内容</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 31.9444444444%">
                          <video aria-describedby="behavior-figure-caption-10" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/patterns/scrolling-techniques/patterns_scrollingtechnique_flexibleoverlap.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/patterns/scrolling-techniques/patterns_scrollingtechnique_flexibleoverlap.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-10">
                        <p>Z 轴方向的空间图，侧视图</p>
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
