<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>无障碍设计使任何人（无论什么能力）都能成功地浏览、理解和使用您的应用。</h1>
        </div>
      </div>

      <nav class="chapter-toc">
        <h1>目录</h1>
        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="accessibility.html#accessibility-principles" data-qp-ui-data-id="qp:1">原则</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="accessibility.html#accessibility-color-contrast" data-qp-ui-data-id="qp:2">颜色和对比度</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="accessibility.html#accessibility-sound-motion" data-qp-ui-data-id="qp:3">声音和动效</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="accessibility.html#accessibility-style" data-qp-ui-data-id="qp:4">样式</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="accessibility.html#accessibility-hierarchy-focus" data-qp-ui-data-id="qp:5">层次和焦点</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="accessibility.html#accessibility-implementation" data-qp-ui-data-id="qp:6">实施</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="accessibility.html#accessibility-writing" data-qp-ui-data-id="qp:7">书写</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="accessibility-principles" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
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
              <p>一款设计良好的产品可供所有能力的用户使用，包括视力低下、失明、听力障碍、认知障碍或运动障碍的用户。改进产品的无障碍功能可以增强所有用户的可用性，这是非常值得做的事情。</p>
              <p>Material design 的内置的无障碍功能将帮助你的应用适应所有用户。本节内容主要适用于移动端 UI 设计。有关设计和开发完全无障碍的产品的详情，请访问<a href="https://www.google.com/accessibility/" target="_blank">Google 无障碍网站</a>。</p>
              <div class="col-list">
                <section class="figure-figure-figure col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="principles-figure-caption-1" src="<?php static_url('../static/media/usability/accessibility/accessibility_principles1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="principles-figure-caption-1">
                        <h1>明确的</h1>
                        <p>通过使用清晰的布局设计、功能明确的操作，来帮助用户浏览你的应用。每添加一个按钮、图片或一行文本都会使界面变得更加复杂，可以通过以下方式简化你的应用：</p>
                        <ul class="lst-kix_k028nm5n1mm4-0 start">
                          <li>清晰可见的元素</li>
                          <li>足够的对比度和尺寸</li>
                          <li>明确的重要性级别</li>
                          <li>使主要信息一目了然</li>
                        </ul>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="principles-figure-caption-2" src="<?php static_url('../static/media/usability/accessibility/accessibility_principles2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="principles-figure-caption-2">
                        <h1>健全的</h1>
                        <p>使你的应用能适应各种用户。用户可能只有短暂的注意力，对你的产品不熟悉，或使用纯文本<strong>屏幕阅读器</strong>（使用语音合成器朗读文本或使用盲文显示器产生触觉）。你的应用应该方便每位用户来：</p>
                        <ul class="lst-kix_3clj5zpaz4lj-0 start">
                          <li><strong>浏览：</strong>使用户清楚的知道他们现在在应用中的哪个位置，以及哪些是重要内容。</li>
                          <li><strong>了解重要任务：</strong>通过多个视觉和文本提示来强化重要信息。使用颜色、形状、文本和动效来传达正在发生的事情。</li>
                          <li><strong>访问你的应用：</strong>包含适当的内容标签，以适应那些使用纯文字版本的用户。</li>
                        </ul>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="principles-figure-caption-3" src="<?php static_url('../static/media/usability/accessibility/accessibility_principles3.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="principles-figure-caption-3">
                        <h1>具体的</h1>
                        <p>支持特定平台的辅助技术，就像支持触摸、键盘和鼠标的输入方式一样。例如，确保您的 Android 应用可以和 Google 的屏幕阅读器 “<a href="https://support.google.com/accessibility/android/answer/6283677?hl=en&amp;ref_topic=3529932" target="_blank">TalkBack</a>” 配合使用。</p>
                        <p><strong>辅助技术</strong>通过屏幕阅读器、放大设备、轮椅、助听器或记忆辅助设备等设备帮助增强、维持或改善残疾人的能力。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="accessibility-color-contrast" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            颜色和对比度
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>使用颜色和对比度来帮助用户查看和解读应用的内容，与正确的元素交互，并理解操作。</p>
              <h1>无障碍调色板</h1>
              <p>为应用选择支持可用性的主色、辅助色和强调色。确保元素之间有足够的颜色对比度，以便视力低下的用户也可以使用你的应用。</p>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>对比度</h1>
                    <p>基于亮度或发光强度，颜色和它的背景色的对比度范围为 1 - 21，和<a href="https://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-contrast.html" target="_blank">万维网联盟（W3C）</a>一致。</p>
                    <p>对比度表示两种颜色之间的差异程度，通常写为 1:1 或 21:1。两个数之间的比值越高，颜色之间的相对亮度就越大。</p>
                    <p>W3C 推荐在正文文本和图片中使用以下对比度：</p>
                    <ul class="lst-kix_c2xsypf5z28r-0 start">
                      <li>小文本和它的背景色之间至少有 4.5:1 的对比度。</li>
                      <li>大文本（加粗的14pt/普通的18pt及以上）和它的背景色之间至少有 3:1 的对比度。</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 56.1111111111%">
                          <img alt="" aria-describedby="color-contrast-figure-caption-1" src="<?php static_url('../static/media/usability/accessibility/accessibility_color1_do.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="color-contrast-figure-caption-1">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>这些文本遵循颜色对比度建议，和它们的背景色之间有清晰的对比。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 56.1111111111%">
                          <img alt="" aria-describedby="color-contrast-figure-caption-2" src="<?php static_url('../static/media/usability/accessibility/accessibility_color2_dont.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="color-contrast-figure-caption-2">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>这些文本没有遵循合颜色对比度建议，在它们的背景色中很难进行阅读。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>图标或其他关键元素也应使用上述推荐的对比度。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 50.2777777778%">
                          <img alt="Correct color contrast for icons" aria-describedby="color-contrast-figure-caption-3" src="<?php static_url('../static/media/usability/accessibility/accessibility_color3_do.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="color-contrast-figure-caption-3">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>这些图标遵循颜色对比度建议，和它们的背景色之间有清晰的对比。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 50.2777777778%">
                          <img alt="Incorrect color contrast for icons" aria-describedby="color-contrast-figure-caption-4" src="<?php static_url('../static/media/usability/accessibility/accessibility_color4_dont.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="color-contrast-figure-caption-4">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>这些图标没有遵循颜色对比度建议，在它们的背景色中很难进行阅读。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Logo 和装饰性的元素</h1>
                    <p>虽然装饰性元素（例如 Logo 和插图）不需要满足对比度建议，但如果它们有比较重要的功能，那么它们应该有一定的辨识度。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="Decorative logo" aria-describedby="color-contrast-figure-caption-5" src="<?php static_url('../static/media/usability/accessibility/accessibility_color5_do.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="color-contrast-figure-caption-5">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>有辨识度的装饰性元素不需要满足对比度建议。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="Distorted decorative logo" aria-describedby="color-contrast-figure-caption-6" src="<?php static_url('../static/media/usability/accessibility/accessibility_color6_dont.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="color-contrast-figure-caption-6">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>没有必要扭曲你的 Logo 来满足对比度建议。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>其他视觉提示</h1>
                    <p>对于色盲或看不到颜色差异的用户，除了颜色外还增加了设计元素，以确保他们能接收到和正常人等量的信息。</p>
                    <p>色盲症分不同的类型（包括红绿色盲、蓝黄色盲和单色色盲）。对于重要的状态，可以同时使用多个视觉提示。使用下划线、指示符、图案或文本等元素来描述操作和内容。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 51.1111111111%">
                          <img alt="Correct text field example" aria-describedby="color-contrast-figure-caption-7" src="<?php static_url('../static/media/usability/accessibility/accessibility_color7_do.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="color-contrast-figure-caption-7">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>文本字段的错误状态使用了多个提示来传达：标题颜色、文本字段下划线、字段下面的错误提示。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 51.1111111111%">
                          <img alt="Incorrect text field example" aria-describedby="color-contrast-figure-caption-8" src="<?php static_url('../static/media/usability/accessibility/accessibility_color8_dont.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="color-contrast-figure-caption-8">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>这个文本字段的错误状态仅使用了彩色下划线，可能会被色弱的用户忽略。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="accessibility-sound-motion" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            声音和动效
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <h1>声音</h1>
              <p>给视觉元素添加声音作为替代方案，反之亦然。添加可隐藏的字幕，或其他视觉元素来作为重要声音元素和声音警报的替代方案。</p>
              <p>通过在 UI 元素上添加描述性的标签，使用户可以通过声音在应用中导航。当使用屏幕阅读器（如 “TalkBack” ），并通过<a href="https://support.google.com/accessibility/android/answer/6006598?hl=en" target="_blank">触摸板</a>导航时，在用户指尖触摸到 UI 元素时，会大声读出标签上的文本。</p>
              <p>应避免使用以下声音：</p>
              <ul class="lst-kix_8rfeeey1j8st-0 start">
                <li>通过屏幕阅读器播放不必要的声音，例如打开网页时自动播放的背景音乐。如果有背景音乐，请确保用户可以安全的暂停或停止背景音乐。</li>
                <li>添加到原生元素上的额外的声音（屏幕阅读器能够正确的翻译原生元素）。</li>
              </ul>
              <div class="modulettes">
                <a class="modulette container android" href="https://developer.android.com/guide/topics/ui/accessibility/apps.html#label-ui" target="_blank">
                  <img alt="" class="icon callout-icon" src="<?php static_url('../static/spec/images/callouts/android.svg'); ?>">
                  <div class="info">
                    <div class="title">标记用户界面元素</div>
                    <span class="subtitle">给输入控件和其他元素添加描述，供屏幕阅读器等设备可以进行朗读</span>
                  </div>
                  </img>
                </a>
              </div>
              <h1>动效</h1>
              <p>Material design 使用动效来引导视图之间的焦点，以避免用户分心。把表面转换为焦点以供用户跟踪，并移除不重要的元素。</p>
              <p>为了使具有运动和视觉敏感性的用户能舒适地使用界面，请遵循 <a href="../motion/material-motion.html">Material Design 运动规范</a>，该规范支持 W3C 的以下运动指南：</p>
              <ul class="lst-kix_1yj07pccvkev-0 start">
                <li>如果内容持续移动、滚动或闪烁的时间超过 5 秒，则会暂停、停止或隐藏。</li>
                <li>在 1 秒内，内容的闪烁次数限制为 3 次，以满足<a href="http://www.w3.org/TR/WCAG20/#general-thresholddef" target="_blank">闪烁和红色闪烁的阀值</a>。</li>
                <li>避免<a href="https://www.w3.org/TR/2015/NOTE-WCAG20-TECHS-20150226/G176" target="_blank">闪烁屏幕中较大的中心区域</a>。</li>
              </ul>
              <h1>定时控件</h1>
              <p>应用中的控件可以设置为在一定时间后消失。例如，播放视频 5 秒后，播放按钮控件可能会从屏幕上淡出。</p>
              <p><strong>高优先级的控件<br>
                </strong>避免在有高优先级功能的控件上使用定时器，因为如果这些控件消失的太快，用户可能不会注意到这些控件。例如，当焦点聚焦到控件上时， TalkBack 会大声朗读出控件，如果为其加上了定时器，可能会阻止控件完成某些任务。</p>
              <p>对于有其他重要功能的控件，请确保用户可以再次启用控件、或可以通过其他途径执行相同的功能，在<a href="accessibility.html#accessibility-hierarchy-focus">层次和焦点</a>中了解更多。</p>
              <div class="modulettes">
                <a class="modulette container default" href="https://codelabs.developers.google.com/codelabs/basic-android-accessibility/index.html?index=..%2F..%2Findex#6" target="_blank">
                  <img alt="" class="icon callout-icon" src="<?php static_url('../static/spec/images/callouts/default.svg'); ?>">
                  <div class="info">
                    <div class="title">自动朗读文本</div>
                    <span class="subtitle">阅读关于在活跃区域放置文本的信息。</span>
                  </div>
                  </img>
                </a>
              </div>
              <p></p>
            </div>
          </div>
        </div>

        <div id="accessibility-style" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            样式
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
                  <div class="module"><h1>布局</h1>
                    <p>Material Design 的触摸目标指南使那些无法看到屏幕、或者运动不灵活的用户能够点击应用中的元素。</p>
                    <h2>触摸目标</h2>
                    <p>触摸目标是屏幕中响应用户输入的部分。它们向外延伸，并超过元素的视觉边界。例如，图标可能显示为 24 x 24 dp，但是加上图标周围的边距，则构成了 48 x 48 dp 的触摸目标。</p>
                    <p>触摸目标应该至少为 48 x 48 dp。不管屏幕有多大，这种尺寸的触摸目标都相当于大约 9mm 的物理尺寸。推荐的触摸目标的尺寸为 7-10mm。可能需要使用更大的触摸目标来适配更大范围的用户，例如运动能力还在发展中的儿童。</p>
                    <h2>触摸目标间距</h2>
                    <p>在大多数情况下，触摸目标应该以 8dp 或更大的间距进行分隔，以确保均衡的信息密度和可用性。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="Touch target specs" aria-describedby="style-figure-caption-1" src="<?php static_url('../static/media/usability/accessibility/accessibility_layout1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="style-figure-caption-1">
                        <p>头像：40dp <br>
                        图标：24dp<br>
                        两者的触摸目标：48dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="Examples" aria-describedby="style-figure-caption-2" src="<?php static_url('../static/media/usability/accessibility/accessibility_layout2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="style-figure-caption-2">
                        <p>触摸目标示例</p>
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
                          <img alt="Touch target height" aria-describedby="style-figure-caption-3" src="<?php static_url('../static/media/usability/accessibility/accessibility_layout3.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="style-figure-caption-3">
                        <p>触摸目标高度：48dp <br>
                        按钮高度：36dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="Examples" aria-describedby="style-figure-caption-4" src="<?php static_url('../static/media/usability/accessibility/accessibility_layout4.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="style-figure-caption-4">
                        <p>触摸目标和按钮示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2>分组项目</h2>
                    <p>把相关的项目放在一起，对那些视力低下或者在屏幕上聚焦困难的用户是有帮助的。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="Correct slider value example" src="<?php static_url('../static/media/usability/accessibility/accessibility_layout5_do.png'); ?>"/>
                        </div>
                      </div>
                    </figure>
                    <div class="text-box"></div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                    <figcaption>
                      <p>滑块值和滑块控件非常接近。</p>
                    </figcaption>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="Incorrect slider value" src="<?php static_url('../static/media/usability/accessibility/accessibility_layout6_dont.png'); ?>"/>
                        </div>
                      </div>
                    </figure>
                    <div class="text-box"></div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                    <figcaption>
                      <p>滑块值和滑块控件之间的距离太远。对于放大了屏幕的用户，如果不在滑块和值之间来回浏览的话，可能不能同时看到滑块和值。</p>
                    </figcaption>
                  </div>
                </section>
              </div>
              <h1>字体</h1>
              <p>为了提高可读性，用户可能会增加字体大小。移动设备或浏览器有调整系统字体大小的功能。要在 Android 中使用系统字体大小，使用<a href="../layout/units-measurements.html#units-measurements-scaleable-pixels-sp">可缩放像素（sp）</a>来标记文本极其关联容器。</p>
              <p>确保为大型字体和外语字体分配了足够的空间。有关推荐的外语字体大小的信息，请参阅<a href="../style/typography.html#typography-line-height">行高</a>。</p>
            </div>
          </div>
        </div>

        <div id="accessibility-hierarchy-focus" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:5">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:5">
            层次和焦点
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>应用应该给用户反馈，并使用户了解他们在应用中的位置。导航控件应该便于定位，且书写清晰易懂。视觉反馈（如标签、颜色和图标）和触摸反馈向用户显示了可用的 UI。</p>
              <p>导航应该具有清晰的任务流程，和最少的步骤。在频繁使用的任务上，应该实现聚焦控制、或控制键盘和读取焦点的功能。</p>
              <div class="modulettes">
                <a class="modulette container android" href="https://developer.android.com/guide/topics/ui/accessibility/apps.html#focus-nav" target="_blank">
                  <img alt="" class="icon callout-icon" src="<?php static_url('../static/spec/images/callouts/android.svg'); ?>">
                  <div class="info">
                    <div class="title">启用焦点导航</div>
                    <span class="subtitle">使用焦点控制导航</span>
                  </div>
                  </img>
                </a>
              </div>
              <h1>屏幕阅读器</h1>
              <p>屏幕阅读器为用户提供了多种屏幕导航的方法，包括：</p>
              <ul class="lst-kix_2jhifpytt1is-0 start">
                <li>屏幕阅读器的触摸界面允许用户<strong>在屏幕上移动手指</strong>，以听到手指正下方的内容。这使用户能快速了解整个界面。或者用户可以凭借肌肉记忆快速移动到指定 UI 元素。在 TalkBack 中，此功能被称为 “<a href="https://support.google.com/accessibility/android/answer/6006598?hl=en" target="_blank">通过触摸浏览</a>” 。用户必须双击才能选择一个项目。</li>
                <li>用户也可以在屏幕上向前或向后<strong>滑动来移动焦点</strong>，来从上到下线性地阅读页面。这允许用户在某些元素上进行训练。在 TalkBack 中，这称为<strong>线性导航</strong>。</li>
              </ul>
              <p>用户可以在 “通过触摸浏览” 和 “线性导航” 模式之间切换。当页面使用合适的语义化标签时，一些无障碍技术允许用户在页面的这些标记（例如标题）之间导航。</p>
              <p>硬件或软件方向控制器（例如 D-pad、轨迹球或键盘）允许用户以线性的方式从一个选择的元素跳到另一个元素。</p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>层次</h1>
                    <p>根据项目的相对重要性，将项目放置在屏幕上。</p>
                    <ul class="lst-kix_fk2nb1jptxh6-0 start">
                      <li><strong>重要操作</strong>：将重要操作放在屏幕的顶部或底部（使用快捷方式即可访问）。</li>
                      <li><strong>相关项目</strong>：将相似层级的相关项目放在彼此相邻的位置。</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 63.1578947368%">
                          <img alt="Correct hierarchy example" aria-describedby="hierarchy-focus-figure-caption-1" src="<?php static_url('../static/media/usability/accessibility/accessibility_hierarchy_1_do.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="hierarchy-focus-figure-caption-1">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>通过把重要的操作放在屏幕顶部，使它们在层次结构中显得更重要。</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 63.1578947368%">
                          <img alt="Incorrect hierarchy example" aria-describedby="hierarchy-focus-figure-caption-2" src="<?php static_url('../static/media/usability/accessibility/accessibility_hierarchy_2_dont.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="hierarchy-focus-figure-caption-2">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>当把重要的操作嵌入到其他内容中时，就不清楚什么是页面中最重要的元素。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2>焦点顺序</h2>
                    <p>输入焦点应该按照视觉布局的顺序排列，从屏幕顶部到底部。它应该从最重要的项目到最不重要的项目进行遍历。确定以下的焦点和移动方式：</p>
                    <ul class="lst-kix_l1u6j3glpnds-0 start">
                      <li>元素接收焦点的顺序</li>
                      <li>元素分组的方式</li>
                      <li>拥有焦点的元素消失时，焦点移动到哪里</li>
                    </ul>
                    <p>通过视觉指示器和辅助文本的组合，来阐明焦点的位置。</p>
                    <h2>分组</h2>
                    <p>在标题下对类似项目进行分组，以告诉用户这个分组代表什么。这些分组会在空间上组织内容。</p>
                    <h2>过渡</h2>
                    <p>屏幕和任务之间的焦点遍历应尽可能保持连续。</p>
                    <p>如果一个任务中断了，然后又恢复，请将焦点放在之前聚焦的元素上。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1522px">
                        <div class="frame " style="padding-top: 103.810775296%">
                          <img alt="Example of focus order" aria-describedby="hierarchy-focus-figure-caption-3" src="<?php static_url('../static/media/usability/accessibility/accessibility_hierarchy_3.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="hierarchy-focus-figure-caption-3">
                        <p>绿色圆圈表示屏幕中的元素接收焦点的顺序。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <p></p>
            </div>
          </div>
        </div>

        <div id="accessibility-implementation" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:6">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:6">
            实施
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
                    <p>通过使用标准的平台控件，你的应用将自动包含与平台无障碍技术协同工作所需的标记和代码。调整你的应用，以兼容每个平台的无障碍功能标准和无障碍技术（包括快捷方式和结构），为用户提供更高效的体验。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1000px">
                        <div class="frame " style="padding-top: 177.8%">
                          <img alt="Example of a standard platform dialog" aria-describedby="implementation-figure-caption-1" src="<?php static_url('../static/media/usability/accessibility/accessibility_implementation1_do.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="implementation-figure-caption-1">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>此屏幕使用了标准平台的对话框。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1000px">
                        <div class="frame " style="padding-top: 177.8%">
                          <img alt="Example of a non-standard platform dialog" aria-describedby="implementation-figure-caption-2" src="<?php static_url('../static/media/usability/accessibility/accessibility_implementation2_dont.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="implementation-figure-caption-2">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>此屏幕使用非标准平台的对话框来执行一个标准的对话框任务。这种实现会需要额外的编码和测试，以使这种非标准控件和无障碍技术相兼容。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>在打开平台无障碍功能的情况下，测试你的设计（实施期间和之后）。</p>
                    <p>其他设计的注意事项：</p>
                    <ul class="lst-kix_gcqkuykifz62-0 start">
                      <li><strong>使用可缩放文字和一个宽敞的布局</strong>，来适应那些可能开启大文字、颜色矫正、放大或其他无障碍功能的用户。</li>
                      <li><strong>键盘/鼠标界面</strong>可以仅通过键盘就能访问所有任务和所有悬浮信息。</li>
                      <li><strong>触摸界面</strong>应允许屏幕阅读器和其他无障碍设备读取界面中的所有内容。朗读的文本应该是有意义的和有帮助的。</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 63.1578947368%">
                          <img alt="Example of scalable text" aria-describedby="implementation-figure-caption-3" src="<?php static_url('../static/media/usability/accessibility/accessibility_implementation3_do.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="implementation-figure-caption-3">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>这个 UI 已经过缩放，能很好的和放大倍数的界面以及大文字适配。</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 63.1578947368%">
                          <img alt="Example of poorly scaled text" aria-describedby="implementation-figure-caption-4" src="<?php static_url('../static/media/usability/accessibility/accessibility_implementation4_dont.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="implementation-figure-caption-4">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>这个 UI 没有经过缩放，不能和放大倍数的界面以及大文字适配。部分内容被重叠或截断。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>使 UI 元素的标签可视化</h1>
                    <p>屏幕阅读器用户需要知道屏幕中哪些元素是可以点击的。要使屏幕阅读器大声朗读出组件的名称，请向组件（如按钮、图标、仅含图标不含可见文本的 Tab 选项卡）添加 <strong>contentDescription</strong> 属性。</p>
                    <div class="modulettes">
                      <a class="modulette container android" href="http://developer.android.com/guide/topics/ui/accessibility/apps.html#label-ui" target="_blank">
                        <img alt="" class="icon callout-icon" src="<?php static_url('../static/spec/images/callouts/android.svg'); ?>">
                        <div class="info">
                          <div class="title">标签化 UI 元素</div>
                          <span class="subtitle">使用 contentDescription 属性来设置标签。</span>
                        </div>
                        </img>
                      </a>
                    </div>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1000px">
                        <div class="frame " style="padding-top: 177.8%">
                          <img alt="" aria-describedby="implementation-figure-caption-5" src="<?php static_url('../static/media/usability/accessibility/Accessibility_labeling1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="implementation-figure-caption-5">
                        <p>1. 标记搜索图标<br>
                        2. 标记麦克风图标</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1000px">
                        <div class="frame " style="padding-top: 177.8%">
                          <img alt="" aria-describedby="implementation-figure-caption-6" src="<?php static_url('../static/media/usability/accessibility/Accessibility_labeling2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="implementation-figure-caption-6">
                        <p>1. 标记编辑图标<br>
                        2. 标记聊天图标</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <h1>帮助文档</h1>
                    <p>任何具有特殊无障碍功能的功能都应包含在帮助文档中。确保帮助文档的相关性、可访问性和可发现性。例如，查看本指南，了解如何在 <a href="https://support.google.com/drive/answer/6034939?hl=en" target="_blank">Google Drive</a> 中使用屏幕阅读器。</p>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>测试和研究</h1>
                    <p>遵循这些无障碍指南有助于提升应用的可访问性，但不能保证拥有一个完全可访问的体验。建议你也：</p>
                    <ul class="lst-kix_814kni54p86l-0 start">
                      <li>在打开各种无障碍技术的情况下，测试应用从开始到结束的完整的任务流程。例如，在 TalkBack 中打开 “通过触摸浏览” ，并改变大声说出文本的速度。</li>
                      <li>让有障碍的用户测试你的应用。</li>
                      <li>考虑单个元素怎么才能可访问，同时把它连接到一个连贯的用户流中。</li>
                      <li>确保你希望用户完成的主要任务，能适应每一个人。</li>
                    </ul>
                    <p>与你的用户交流，特别是那些使用辅助技术的用户，了解他们的需求，他们想从你的应用中获得什么，它们使用什么工具，以及如何使用这些工具。开始熟悉这些工具，然后你可以给他们最好的用户体验。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 63.1578947368%">
                          <img alt="" aria-describedby="implementation-figure-caption-7" src="<?php static_url('../static/media/usability/accessibility/accessibility_implementation5.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="implementation-figure-caption-7">
                        <p>人们以不同的方式使用无障碍技术。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="accessibility-writing" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:7">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:7">
            书写
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div><p>清晰且有帮助的<strong>无障碍文本</strong>是使 UI 更易访问的主要方法之一。视力低下或没有视力的用户会从清晰易懂的文字描述中受益。无障碍文本是指供屏幕阅读器软件使用的文本，例如 Android 上的 TalkBack、iOS 上的 VoiceOver、桌面端的 JAWS。屏幕阅读器会大声朗读屏幕上所有的文本，包括可见和不可见的替代文本。</p>
              <p>无障碍文本包括可见文本（包括 UI 元素中的标签、按钮中的文字、链接和表单）和不可见的描述（没有文本标签的按钮的替代文字）。有时，可以使用无障碍文本覆盖屏幕中的标签，来为用户提供更多信息。</p>
              <p>可见和不可见的文本都应该是有用的描述性的词，并且都有独自的含义，因为有些用户会使用页面中的标题和链接进行导航。使用屏幕阅读器测试你的应用，以确定那些缺失无障碍文本、或需要更好的无障碍文本的区域。</p>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module">
                    <h1>保持简洁</h1>
                    <p>保持内容和无障碍文本简短、并切中主题。屏幕阅读器用户会听到每个 UI 元素的朗读。文本越短，屏幕阅读器用户导航速度越快。</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>切换到 heyfromjonathan@gmail.com</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                    <figcaption>
                      <p>书写明确和简短的无障碍文本。</p>
                    </figcaption>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>账户切换器。切换到账户 heyfromjonathan@gmail.com</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                    <figcaption>
                      <p>不要写太长的无障碍文本。</p>
                    </figcaption>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module">
                    <h1>避免在文本中包含控件类型和状态</h1>
                    <p>屏幕阅读器会通过声音、或通过在无障碍文本前后说出控件名称，来自动声明控件的类型和状态。</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>搜索</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                    <figcaption>
                      <p>使用简短的说明。</p>
                    </figcaption>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>搜索字段</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                    <figcaption>
                      <p>不要写控件类型。</p>
                    </figcaption>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <p><strong>开发人员注释</strong>：如果控件类型和状态没有被正确读取，则可能是控件的无障碍角色设置不正确，或者是一个自定义控件。网站上的每个元素都应该有一个相关的无障碍角色，或者通过代码为其声明一个角色。这意味着按钮应该设置成按钮、复选框应该设置成复选框，以便将控件的类型和状态正确传达给用户。如果一个元素是从一个原生的 UI 元素上扩展或继承的，他会获得父元素的角色。如果不是，你可以在每个平台上为无障碍重写这些信息（用于 Web 的 <a href="https://www.w3.org/WAI/intro/aria" target="_blank">ARIA</a>，用于 Android 的 <a href="http://developer.android.com/reference/android/view/accessibility/AccessibilityNodeInfo.html" target="_blank">AccessibilityNodeInfo</a>）。</p>
                    <p>在 Android，将控件的 AccessibilityNodeInfo 类名字段设置为 “android.widget.Button”。</p>
                    <div class="modulettes">
                      <a class="modulette container android" href="https://developer.android.com/guide/topics/ui/accessibility/apps.html#custom-views" target="_blank">
                        <img alt="" class="icon callout-icon" src="<?php static_url('../static/spec/images/callouts/android.svg'); ?>">
                        <div class="info">
                          <div class="title">构建无障碍的自定义视图</div>
                          <span class="subtitle"></span>
                        </div>
                        </img>
                      </a>
                    </div>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>仅用过 Wi-Fi 下载</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                    <figcaption>
                      <p>使用简短的说明。</p>
                    </figcaption>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>已选择通过 Wi-Fi 下载</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                    <figcaption>
                      <p>不要写出状态。</p>
                    </figcaption>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>指示元素的作用</h1>
                    <p>使用动作动词来指明一个元素或链接的作用，而不是一个元素的外观，以便视觉障碍用户能够理解。链接文本应该是：</p>
                    <ul class="lst-kix_9qtqh176w4cq-0 start">
                      <li>指明点击链接后将执行的任务</li>
                      <li>避免使用模糊的描述，例如 “点击此处”</li>
                    </ul>
                    <p>确保所有用到该元素的地方，该元素的描述都保持一致。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 33.3333333333%">
                          <img alt="Action verb example" aria-describedby="writing-figure-caption-1" src="<?php static_url('../static/media/usability/accessibility/accessibility_writing_edit_do.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="writing-figure-caption-1">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>朗读的描述指明了由图标表示的操作。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 33.3333333333%">
                          <img alt="Incorrect example of a description" aria-describedby="writing-figure-caption-2" src="<?php static_url('../static/media/usability/accessibility/accessibility_writing_edit_dont.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="writing-figure-caption-2">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>描述图标的外观无法清楚的表明操作的作用。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 33.3333333333%">
                          <img alt="Correct example of accessible text" aria-describedby="writing-figure-caption-3" src="<?php static_url('../static/media/usability/accessibility/accessibility_writing_menu_do.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="writing-figure-caption-3">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>导航菜单的无障碍文本可以是 “显示/隐藏导航菜单” （首选）或者 “显示/隐藏主菜单” （可接受）。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 33.3333333333%">
                          <img alt="Incorrect example of accessible text" aria-describedby="writing-figure-caption-4" src="<?php static_url('../static/media/usability/accessibility/accessibility_writing_menu_dont.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="writing-figure-caption-4">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>朗读时，文本 “侧面抽屉” 无法指明会发生什么操作。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <p><strong>状态可以变化的元素</strong></p>
                    <p>对于可以在值和状态之间切换的图标，根据向用户呈现内容来确定使用什么类型的图标。</p>
                    <ul class="lst-kix_dsyd8ql7t187-0 start">
                      <li>如果图标是一个项目的<strong>属性</strong>，则将其设置为复选框，以便屏幕阅读器能读出当前状态，例如 “打开” 或 “关闭”。</li>
                      <li>如果图标是一个<strong>操作</strong>，使用文本标签来指明选中图标后会发生的操作，例如 “添加到心愿单”。</li>
                    </ul>
                    <p>元素的使用方式会影响它们的显示方式。例如星形图标表示添加到心愿单的操作，则应用应该说出 “添加到心愿单” 或 “从心愿单中移除”。</p>
                  </div>
                  <div class="module"></div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>不要提及确切的手势和交互</h1>
                    <p>不要告诉用户如何与控件进行身体上的交互，因为它们可能使用键盘或其他设备进行导航，而不是用手指或鼠标进行导航。无障碍软件会为用户描述正确的交互方式。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 33.3333333333%">
                          <img alt="Correct example of a command." aria-describedby="writing-figure-caption-5" src="<?php static_url('../static/media/usability/accessibility/accessibility_writing_voicesearch_do.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="writing-figure-caption-5">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>此命令 “语音搜索” 描述和用户输入法（语音）相匹配的任务（搜索）。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 33.3333333333%">
                          <img alt="Incorrect example of a command" aria-describedby="writing-figure-caption-6" src="<?php static_url('../static/media/usability/accessibility/accessibility_writing_voicesearch_dont.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="writing-figure-caption-6">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>此命令 “点击” 是不准确的，因为这不是激活此控件的唯一方式（它也可以通过按下键盘、开关切换或盲文显示来激活）。由于本例中用户的主要任务是搜索，所以操作应该使用如上文所提到的文字，而不应该使用 “说话”。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <h1>确认操作</h1>
              <p>使用对话框、toasts、或 snackbars（Android）来确认或确知具有破坏性的用户操作（例如 “删除” 或 “移除”），或者提示用户此操作不能撤销。</p>
              <p>对于通过视觉方式确认的操作（例如，在删除一个项目时重新排列网格的布局），不需要 toast。在这些情况下，添加无障碍文本以提供确认。</p>
              <h1>提供提示语音</h1>
              <p>提示语音为不明确的操作提供额外的信息。例如，Android 的 “双击以选择” 功能提示用户在选择一个项目时需要点击两次。Android 的 TalkBack 也会提醒和元素相关联的任何自定义操作。谨慎使用提示语音，确保只在复杂的 UI 上使用提示语音。</p>
              <div class="modulettes">
                <a class="modulette container android" href="http://developer.android.com/reference/android/view/accessibility/AccessibilityNodeInfo.html#addAction(android.view.accessibility.AccessibilityNodeInfo.AccessibilityAction)" target="_blank">
                  <img alt="" class="icon callout-icon" src="<?php static_url('../static/spec/images/callouts/android.svg'); ?>">
                  <div class="info">
                    <div class="title">Android 自定义操作</div>
                    <span class="subtitle"></span>
                  </div>
                  </img>
                </a>
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