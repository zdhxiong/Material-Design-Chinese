<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>Material Design 支持跨平台的设计和可用性的最佳实践，以构建出色的用户体验。</h1>
        </div>
      </div>

      <nav class="chapter-toc">
        <h1>目录</h1>
        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="platform-adaptation.html#platform-adaptation-when-to-adapt" data-qp-ui-data-id="qp:1">何时需要适配</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="platform-adaptation.html#platform-adaptation-platform-recommendations" data-qp-ui-data-id="qp:2">平台适配建议</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="platform-adaptation-when-to-adapt" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            何时需要适配
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>Material Design 建立在传统和网页设计的最佳实践的基础上，根据用户体验研究和认知科学研究得出。这份依据这些研究结果开发的设计准则，致力于普遍适配所有的平台和设备。</p>
              <p>不同平台之间的设计惯例会不同。这些设计惯例的差异会影响用户对 UI 的理解、或影响用户完成某些任务。在这些情况下，建议只适配特定平台的设计惯例。在设计差异不容易造成混乱的地方，可以选择不进行适配。</p>
              <p>以下准则指示你何时应该适配本机平台的设计惯例，何时可以不进行适配。平台设计惯例在不断的改进，Material Design 也在和它们一起发展，以提高我们的设计模式的质量。</p>
              <figure class="s-tag-media">
                <div class="media" style="max-width: 2320px">
                  <div class="frame " style="padding-top: 53.4482758621%">
                    <img alt="" src="<?php static_url('../static/media/platforms/platform-adaptation/material_design.platform_adaptation_intro.png'); ?>"/>
                  </div>
                </div>
              </figure>
            </div>
          </div>
        </div>

        <div id="platform-adaptation-platform-recommendations" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            平台适配建议
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
                    <h1>工具栏</h1>
                    <p>工具栏通常作为屏幕中上下文的骨架。</p>
                    <p>建议工具栏的标题使用平台默认的文本对齐方式，除非存在多个操作按钮。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 71.1111111111%">
                          <img alt="" aria-describedby="platform-recommendations-figure-caption-0" src="<?php static_url('../static/media/platforms/platform-adaptation/material_design.platform_adaptation_toolbar_1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="platform-recommendations-figure-caption-0">
                        <p><strong>Android/Web</strong></p>
                        <p>标题始终左对齐。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 71.1111111111%">
                          <img alt="" aria-describedby="platform-recommendations-figure-caption-1" src="<?php static_url('../static/media/platforms/platform-adaptation/material_design.platform_adaptation_toolbar_2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="platform-recommendations-figure-caption-1">
                        <p><strong>iOS</strong></p>
                        <p>标题默认居中对齐</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 71.1111111111%">
                          <img alt="" aria-describedby="platform-recommendations-figure-caption-2" src="<?php static_url('../static/media/platforms/platform-adaptation/material_design.platform_adaptation_toolbar_3.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="platform-recommendations-figure-caption-2">
                        <p><strong>Android</strong></p>
                        <p>在工具栏右侧有多个操作，或者甚至没有操作时，工具栏标题始终左对齐。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 71.1111111111%">
                          <img alt="" aria-describedby="platform-recommendations-figure-caption-3" src="<?php static_url('../static/media/platforms/platform-adaptation/material_design.platform_adaptation_toolbar_4.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="platform-recommendations-figure-caption-3">
                        <p><strong>iOS</strong></p>
                        <p>在工具栏右侧、或应用的主屏幕上有多个操作按钮时，标题可以左对齐。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>图像</h1>
                    <p>系统图标用于表示在该平台中的最普遍的操作。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 71.1111111111%">
                          <img alt="" aria-describedby="platform-recommendations-figure-caption-4" src="<?php static_url('../static/media/platforms/platform-adaptation/material_design.platform_adaptation_iconography_1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="platform-recommendations-figure-caption-4">
                        <p><strong>Android/Web</strong></p>
                        <p><a href="../patterns/app-structure.html#navigation-up-back-buttons">后退按钮</a>包含带茎秆的细箭头。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 71.1111111111%">
                          <img alt="" aria-describedby="platform-recommendations-figure-caption-5" src="<?php static_url('../static/media/platforms/platform-adaptation/material_design.platform_adaptation_iconography_2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="platform-recommendations-figure-caption-5">
                        <p><strong>iOS</strong></p>
                        <p>在 iOS 上，后退箭头更粗，且不带茎秆。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 71.1111111111%">
                          <img alt="" aria-describedby="platform-recommendations-figure-caption-6" src="<?php static_url('../static/media/platforms/platform-adaptation/material_design.platform_adaptation_iconography_3.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="platform-recommendations-figure-caption-6">
                        <p><strong>Android/Web</strong></p>
                        <p>弹出菜单按钮图标（通过 “More” 符号指示）包含三个<strong>垂直的</strong>点。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 71.1111111111%">
                          <img alt="" aria-describedby="platform-recommendations-figure-caption-7" src="<?php static_url('../static/media/platforms/platform-adaptation/material_design.platform_adaptation_iconography_4.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="platform-recommendations-figure-caption-7">
                        <p><strong>iOS</strong></p>
                        <p>弹出菜单按钮图标（通过 “More” 符号指示）包含三个<strong>水平的</strong>点。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>控件</h1>
                    <p>控件应该清楚的指示用户应如何与它们进行交互。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="platform-recommendations-figure-caption-8" src="<?php static_url('../static/media/platforms/platform-adaptation/material_design.platform_adaptation_control_1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="platform-recommendations-figure-caption-8">
                        <p><strong>Android</strong></p>
                        <p>使用 Material Design 的开关、复选框和单选按钮。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="platform-recommendations-figure-caption-9" src="<?php static_url('../static/media/platforms/platform-adaptation/material_design.platform_adaptation_control_2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="platform-recommendations-figure-caption-9">
                        <p><strong>iOS </strong></p>
                        <p>本平台的开关仍然可以使用，因为它们有着和 Material Design 的开关相匹配的功能和外观。</p>
                        <p>使用开关代替复选框，使用复选标记列表代替单选按钮，因为这些是 iOS 平台上预定的图案。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="platform-recommendations-figure-caption-10" src="<?php static_url('../static/media/platforms/platform-adaptation/material_design.platform_adaptation_control_3.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="platform-recommendations-figure-caption-10">
                        <p><strong>Web</strong></p>
                        <p>可以使用 Material Design 的开关、复选框和单选按钮。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>手势</h1>
                    <p><strong>边缘滑动</strong></p>
                    <p>边缘滑动从屏幕外部开始，以显示屏幕外的内容。</p>
                    <p>边缘滑动可能和其他滑动手势（如页面或表格行中的水平滑动）发生冲突。为了避免这些类型的冲突，边缘滑动应该拥有和内容上的其他滑动相同的行为。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="platform-recommendations-figure-caption-11" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/platforms/platform-adaptation/material_design.platform_adaptation_gestures_1.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/platforms/platform-adaptation/material_design.platform_adaptation_gestures_1.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="platform-recommendations-figure-caption-11">
                        <p><strong>Android</strong></p>
                        <p>当不存在冲突的手势时，可以从左侧使用边缘滑动来显示屏幕外的内容，例如抽屉栏导航。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="platform-recommendations-figure-caption-12" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/platforms/platform-adaptation/material_design.platform_adaptation_gestures_2.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/platforms/platform-adaptation/material_design.platform_adaptation_gestures_2.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="platform-recommendations-figure-caption-12">
                        <p><strong>iOS</strong></p>
                        <p>当不存在冲突的手势时，可以从左侧使用边缘滑动回到应用的上一级界面。</p>
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
                          <img alt="" aria-describedby="platform-recommendations-figure-caption-13" src="<?php static_url('../static/media/platforms/platform-adaptation/material_design.platform_adaptation_gestures_3.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="platform-recommendations-figure-caption-13">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p><strong>Web</strong></p>
                        <p>浏览器通常使用边缘滑动进行浏览器的功能设置。所以边缘滑动不应该用在网页上。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="platform-recommendations-figure-caption-14" src="<?php static_url('../static/media/platforms/platform-adaptation/material_design.platform_adaptation_gestures_4.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="platform-recommendations-figure-caption-14">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p><strong>Web</strong></p>
                        <p>边缘滑动不能用在浏览器上。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>排版</h1>
                    <p>排版可以传达文本内容和品牌标识。在这两种情况下，文本必须是可访问和可调整大小的。</p>
                    <p>如果你的应用已经为品牌标识使用了排版，建议再使用排版时要适度。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="platform-recommendations-figure-caption-15" src="<?php static_url('../static/media/platforms/platform-adaptation/material_design.platform_adaptation_typography_1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="platform-recommendations-figure-caption-15">
                        <p><strong>Android</strong></p>
                        <p>Android 上默认字体是 Roboto。在 Android 上，应该使用<a href="https://material.google.com/layout/units-measurements.html#units-measurements-scaleable-pixels-sp" target="_blank">可伸缩像素</a>的文本大小，以允许用户使用系统辅助功能来调整应用整体的字体大小。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="platform-recommendations-figure-caption-16" src="<?php static_url('../static/media/platforms/platform-adaptation/material_design.platform_adaptation_typography_2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="platform-recommendations-figure-caption-16">
                        <p><strong>iOS</strong></p>
                        <p>iOS 上的默认字体是 San Francisco。使用此字体是实现辅助功能（如 “动态类型” ）的最简单的方法。使用其他字体可能需要进行调整后才能获得相同的辅助功能。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="platform-recommendations-figure-caption-17" src="<?php static_url('../static/media/platforms/platform-adaptation/material_design.platform_adaptation_typography_3.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="platform-recommendations-figure-caption-17">
                        <p><strong>Web</strong></p>
                        <p>虽然 Arial 是网页上使用最广泛的字体，但是现代浏览器为 Web 字体提供了可访问性和缩放支持。</p>
                        <p>Material Design 的标准<a href="../style/typography.html#typography-styles">排版指南</a>使用的 Roboto 字体可以帮助简化字体的使用。或者，使用<a href="https://fonts.google.com/" target="_blank">自定义字体</a>，并建立自己的类型层次结构，以确保易读性。</p>
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