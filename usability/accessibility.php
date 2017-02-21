<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>无障碍设计使任何人（无论能力）都能成功地浏览、理解和使用您的应用。</h1>
        </div>
      </div>

      <nav class="chapter-toc">
        <h1>内容</h1>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="accessibility.html#accessibility-writing" data-qp-ui-data-id="qp:7">写作</a>
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
              <p>Material design 的内置的无障碍功能将帮助你的应用适应所有用户。本节内容主要适用于移动端 UI 设计。有关设计和开发完全无障碍的产品的详情，请访问<a href="https://www.google.com/url?q=https://www.google.com/accessibility/&amp;sa=D&amp;ust=1481818010690000&amp;usg=AFQjCNGE9U9SjxQHorwXVWWB6-shsgj6IQ" target="_blank">Google 无障碍网站</a>。</p>
              <div class="col-list">
                <section class="figure-figure-figure col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/accessibility/accessibility_principles1.png"/>
                      </div>
                      <figcaption>
                        <h1>明确的</h1>
                        <p>通过使用清晰的布局设计、功能明确的操作，来帮助用户浏览你的应用。每添加一个按钮、图片或一行文本都会使界面变得更加复杂，可以通过以下方式简化你的应用：</p>
                        <ul class="lst-kix_k028nm5n1mm4-0 start">
                          <li>清晰可见的元素</li>
                          <li>足够的对比度和尺寸</li>
                          <li>明确的重要性级别</li>
                          <li>主要信息一目了然</li>
                        </ul>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/accessibility/accessibility_principles2.png"/>
                      </div>
                      <figcaption>
                        <h1>健全的</h1>
                        <p>使你的应用能适应各种用户。用户可能只有短暂的注意力，对你的产品不熟悉，或使用纯文本<strong>屏幕阅读器</strong>（使用语音合成器朗读文本或使用盲文显示器产生触觉的程序）。你的应用应该方便每位用户来：</p>
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
                      <div class="media">
                        <img alt="" src="../static/media/usability/accessibility/accessibility_principles3.png"/>
                      </div>
                      <figcaption>
                        <h1>具体的</h1>
                        <p>支持特定平台的辅助技术，就像支持触摸、键盘和鼠标的输入方式一样。例如，确保您的 Android 应用可以和 Google 的屏幕阅读器“<a href="https://www.google.com/url?q=https://support.google.com/accessibility/android/answer/6283677?hl%3Den%26ref_topic%3D3529932&amp;sa=D&amp;ust=1481818010703000&amp;usg=AFQjCNH_1B31INtnE75Xbq_aknefaqpD_Q" target="_blank">TalkBack</a>”配合使用。</p>
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
                    <p>基于亮度或发光强度，颜色和它的背景色的对比度范围为 1 - 21，和<a href="https://www.google.com/url?q=https://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-contrast.html&amp;sa=D&amp;ust=1481818010600000&amp;usg=AFQjCNGms-qT2N209tGSJg7ILk2-OCsYyA" target="_blank">万维网联盟（W3C）</a>一致。</p>
                    <p>对比度表示两种颜色之间的差异程度，通常写为 1:1 或 21:1。两个数之间的比值越高，颜色之间的相对亮度就越大。</p>
                    <p>W3C 推荐在正文文本和图片中使用以下对比度：</p>
                    <ul class="lst-kix_c2xsypf5z28r-0 start">
                      <li>小文本至少和它的背景色之间至少有 4.5:1 的对比度。</li>
                      <li>大文本（加粗的14pt/普通的18pt及以上）和它的背景色之间至少有 3:1 的对比度。</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/accessibility/accessibility_color1_do.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>这些文本遵循颜色对比度建议，和它们的背景色之间有清晰的对比。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/accessibility/accessibility_color2_dont.png"/>
                      </div>
                      <figcaption>
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
                      <div class="media">
                        <img alt="" src="../static/media/usability/accessibility/accessibility_color3_do.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>这些图标遵循颜色对比度建议，和它们的背景色之间有清晰的对比。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/accessibility/accessibility_color4_dont.png"/>
                      </div>
                      <figcaption>
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
                      <div class="media">
                        <img alt="" src="../static/media/usability/accessibility/accessibility_color5_do.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>有辨识度的装饰性元素不需要满足对比度建议。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/accessibility/accessibility_color6_dont.png"/>
                      </div>
                      <figcaption>
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
                      <div class="media">
                        <img alt="" src="../static/media/usability/accessibility/accessibility_color7_do.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>文本字段的错误状态使用了多个提示来传达：标题颜色、文本字段下划线、字段下面的错误提示。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/accessibility/accessibility_color8_dont.png"/>
                      </div>
                      <figcaption>
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
              <p>通过在 UI 元素上添加描述性的标签，使用户可以通过声音在应用中导航。当使用屏幕阅读器（如“TalkBack”），并通过<a href="https://www.google.com/url?q=https://support.google.com/accessibility/android/answer/6006598?hl%3Den&amp;sa=D&amp;ust=1481818010678000&amp;usg=AFQjCNEijoCgKSwVQhsz9763T9qZ_gip3w" target="_blank">触摸板</a>导航时，在用户指尖触摸到 UI 元素时，会大声读出标签上的文本。</p>
              <p>应避免使用以下声音：</p>
              <ul class="lst-kix_8rfeeey1j8st-0 start">
                <li>通过屏幕阅读器播放不必要的声音，例如打开网页时自动播放的背景音乐。如果有背景音乐，请确保用户可以安全的暂停或停止背景音乐。</li>
                <li>添加到原生元素上的额外的声音（屏幕阅读器能够正确的翻译原生元素）。</li>
              </ul>
              <div class="modulettes">
                <a class="modulette container android" href="https://www.google.com/url?q=https://developer.android.com/guide/topics/ui/accessibility/apps.html%23label-ui&amp;sa=D&amp;ust=1481818010682000&amp;usg=AFQjCNEMSxp0z9UzKoL1jiMkdv21RVe3cA" target="_blank">
                  <img alt="" class="icon callout-icon" src="../static/images/callouts/android.svg">
                  <div class="info">
                    <div class="title">标记用户界面元素</div>
                    <span class="subtitle">给输入控件和其他元素添加描述，供屏幕阅读器等设备朗读</span>
                  </div>
                  </img>
                </a>
              </div>
              <h1>动效</h1>
              <p>Material design 使用动效来引导视图之间的焦点，以避免用户分心。表面转换为 Surfaces transform into focal points for the user to follow, and unimportant elements are removed.</p>
              <p>To allow users with motion and vision sensitivities to use interfaces comfortably, adhere to the <a href="../animation/authentic-motion.html">material design motion spec</a>, which supports the following motion guidelines from the W3C:</p>
              <ul class="lst-kix_1yj07pccvkev-0 start">
                <li>Enable content that moves, scrolls, or blinks automatically to be paused, stopped, or hidden if it lasts more than than five seconds.</li>
                <li>Limit flashing content to three times in a one-second period to meet <a href="https://www.google.com/url?q=http://www.w3.org/TR/WCAG20/%23general-thresholddef&amp;sa=D&amp;ust=1481818010688000&amp;usg=AFQjCNGHM4ziWaKFa1JeCr2O_Zn1p7KLKA" target="_blank">flash and red flash thresholds</a>.</li>
                <li>Avoid <a href="https://www.google.com/url?q=https://www.w3.org/TR/2015/NOTE-WCAG20-TECHS-20150226/G176&amp;sa=D&amp;ust=1481818010690000&amp;usg=AFQjCNH3h8LNSO-6Q9cl06MWh9Nx9ocdTg" target="_blank">flashing large central regions of the screen</a>.</li>
              </ul>
              <h1>Timed controls</h1>
              <p>Controls in an app may be set to disappear after a certain amount of time. For example, five seconds after starting a video, playback controls may fade from the screen.</p>
              <p><strong>High-priority controls<br>
                </strong>Avoid using timers on controls that perform a high-priority functions, as users may not notice these controls if they fade away too quickly. For example, TalkBack reads controls out loud if they are focused on, and placing them on timers may prevent the controls from completing their task. </p>
              <p>For controls that enable other important functions, make sure that the user can turn on the controls again or perform the same function in other ways. Learn more in <a href="accessibility.html#accessibility-hierarchy-focus">hierarchy and focus</a>.</p>
              <div class="modulettes">
                <a class="modulette container default" href="https://www.google.com/url?q=https://codelabs.developers.google.com/codelabs/basic-android-accessibility/index.html?index%3D..%252F..%252Findex%236&amp;sa=D&amp;ust=1481818010699000&amp;usg=AFQjCNEbRXnLu995smOan2sqOXJ1dO7YNw" target="_blank">
                  <img alt="" class="icon callout-icon" src="../static/images/callouts/default.svg">
                  <div class="info">
                    <div class="title">Vocalizing text automatically</div>
                    <span class="subtitle"> Read about placing text in a live region.</span>
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
            Style
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
                  <div class="module"><h1>Layout</h1>
                    <p>Material design’s touch target guidelines enable users who aren’t able to see the screen, or who have motor-dexterity problems, to tap elements in your app. </p>
                    <h2>Touch targets</h2>
                    <p>Touch targets are the parts of the screen that respond to user input. They extend beyond the visual bounds of an element. For example, an icon may appear to be 24 x 24 dp, but the padding surrounding it comprises the full 48 x 48 dp touch target. </p>
                    <p>Touch targets should be at least 48 x 48 dp. A touch target of this size results in a physical size of about 9mm, regardless of screen size. The recommended target size for touchscreen elements is 7-10mm. It may be appropriate to use larger touch targets to accommodate a larger spectrum of users, such as children with developing motor skills. </p>
                    <h2>Touch target spacing</h2>
                    <p>In most cases, touch targets should be separated by 8dp of space or more to ensure balanced information density and usability. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/accessibility/accessibility_layout1.png"/>
                      </div>
                      <figcaption>
                        <p>Avatar: 40dp <br>
                        Icon: 24dp<br>
                        Touch target on both: 48dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/accessibility/accessibility_layout2.png"/>
                      </div>
                      <figcaption>
                        <p>Examples of touch targets</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/accessibility/accessibility_layout3.png"/>
                      </div>
                      <figcaption>
                        <p>Touch target height: 48dp <br>
                        Button height: 36dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/accessibility/accessibility_layout4.png"/>
                      </div>
                      <figcaption>
                        <p>Examples of touch targets and buttons</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2>Grouping items</h2>
                    <p>Keeping related items in proximity to one another is helpful for those who have low vision or may have trouble focusing on the screen. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/accessibility/accessibility_layout5_do.png"/>
                      </div>
                    </figure>
                    <div class="text-box"></div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                    <figcaption>
                      <p>The slider value is in close proximity with the slider control. </p>
                    </figcaption>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/accessibility/accessibility_layout6_dont.png"/>
                      </div>
                    </figure>
                    <div class="text-box"></div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                    <figcaption>
                      <p>The slider value is placed too far away from the control. A user of screen magnification may not be able to view both the slider and the value without panning back and forth. </p>
                    </figcaption>
                  </div>
                </section>
              </div>
              <h1>Fonts</h1>
              <p>To improve readability, users might increase font size. Mobile devices and browsers include features to allow users to adjust font size system-wide. To enable system font size in an Android app, mark text and their associated containers to be measured in <a href="../layout/units-measurements.html#units-measurements-scaleable-pixels-sp">scaleable pixels (sp)</a> .</p>
              <p>Make sure to allot enough space for large and foreign language fonts. See <a href="../style/typography.html#typography-line-height">Line Height</a> for information on the recommended sizes of foreign language fonts. </p>
            </div>
          </div>
        </div>

        <div id="accessibility-hierarchy-focus" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:5">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:5">
            Hierarchy and focus
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>Apps should give users feedback and a sense of where they are in the app. Navigation controls should be easy to locate and clearly written. Visual feedback (such as labels, colors, and icons) and touch feedback show users what is available in the UI.</p>
              <p>Navigation should have clear task flows with minimal steps. Focus control, or the ability to control keyboard and reading focus, should be implemented for frequently used tasks.</p>
              <div class="modulettes">
                <a class="modulette container android" href="https://www.google.com/url?q=https://developer.android.com/guide/topics/ui/accessibility/apps.html%23focus-nav&amp;sa=D&amp;ust=1481818010784000&amp;usg=AFQjCNGcVcgx9-v7WOQibv-e8P2-XXKniA" target="_blank">
                  <img alt="" class="icon callout-icon" src="../static/images/callouts/android.svg">
                  <div class="info">
                    <div class="title">Enabling Focus Navigation</div>
                    <span class="subtitle"> Use focus controls for navigation</span>
                  </div>
                  </img>
                </a>
              </div>
              <h1>Screen readers</h1>
              <p>Screen readers give users multiple ways to navigate a screen, including: </p>
              <ul class="lst-kix_2jhifpytt1is-0 start">
                <li>Touch interface screen readers allow users to <strong>run their finger over the screen </strong>to hear what is directly underneath. This provides the user a quick sense of an entire interface. Or the user can quickly move to a UI element from muscle memory. In TalkBack, this feature is called “<a href="https://www.google.com/url?q=https://support.google.com/accessibility/android/answer/6006598?hl%3Den&amp;sa=D&amp;ust=1481818010787000&amp;usg=AFQjCNFZvMJlR6Y60uh3CX7UBDebkjBgdA" target="_blank">explore by touch</a>.” To select an item, the user must double tap.</li>
                <li>Users may also <strong>move focus by swiping</strong> backwards or forwards on screen to read pages linearly, from top to bottom. This allows users to hone in on certain elements. In TalkBack, this is called <strong>linear navigation</strong>.</li>
              </ul>
              <p>Users may switch between both “explore by touch” and “linear navigation” modes. Some assistive technologies allow users to navigate between page landmarks, such as headings, when these landmarks use the appropriate semantic markup. </p>
              <p>Hardware or software directional controllers (such as a D-pad, trackball, or keyboard) allow users to jump from selection to selection in a linear fashion. </p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Hierarchy</h1>
                    <p>Place items on the screen according to their relative level of importance. </p>
                    <ul class="lst-kix_fk2nb1jptxh6-0 start">
                      <li><strong>Important actions: </strong>Place important actions at the top or bottom of the screen (reachable with shortcuts).</li>
                      <li><strong>Related items: </strong>Place related items of a similar hierarchy next to each other.</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/accessibility/accessibility_hierarchy_1_do.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>By placing important actions at the top of the screen, they are given more importance in the hierarchy.</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/accessibility/accessibility_hierarchy_2_dont.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>When important actions are embedded within other content, it’s unclear what the most important elements are on the page.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2>Focus order</h2>
                    <p>Input focus should follow the order of the visual layout, from the top to the bottom of the screen. It should traverse from the most important to the least important item. Determine the following focus points and movements:</p>
                    <ul class="lst-kix_l1u6j3glpnds-0 start">
                      <li>The order in which elements receive focus</li>
                      <li>The way in which elements are grouped</li>
                      <li>Where focus moves when the element in focus disappears</li>
                    </ul>
                    <p>Clarify where the focus exists through a combination of visual indicators and accessibility text. </p>
                    <h2>Grouping </h2>
                    <p>Group similar items under headings that communicate what the groupings are. These groups organize content spatially. </p>
                    <h2>Transitions </h2>
                    <p>Focus traversal between screens and tasks should be as continuous as possible. </p>
                    <p>If a task is interrupted and then resumed, place focus on the element that was previously focused. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/accessibility/accessibility_hierarchy_3.png"/>
                      </div>
                      <figcaption>
                        <p>The green circles indicate the order in which onscreen elements should receive focus. </p>
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
            Implementation
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
                    <p>By using standard platform controls, your app will automatically contain the markup and code needed to work well with a platform’s assistive technology. Adapt your app to meet each platform's accessibility standards and assistive technology (including shortcuts and structure) to give users an efficient experience.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/accessibility/accessibility_implementation1_do.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>This screen is using the standard platform dialog. </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/accessibility/accessibility_implementation2_dont.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>This screen is using a non-standard platform dialog to perform a standard dialog task. This implementation would require extra coding and testing to make this non-standard control work well with assistive technology. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Test your design with the platform accessibility settings turned on (both during and after implementation). </p>
                    <p>Other design considerations:</p>
                    <ul class="lst-kix_gcqkuykifz62-0 start">
                      <li><strong>Use scalable text and a spacious layout</strong> to accommodate users who may have large text, color correction, magnification, or other assistive settings turned on.</li>
                      <li><strong>Keyboard/mouse interfaces</strong> should have every task and all hover information accessible by keyboard-only.</li>
                      <li><strong>Touch interfaces</strong> should allow screen readers and other assistive technology devices to read all parts of your interface. The text read aloud should be both meaningful and helpful.</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/accessibility/accessibility_implementation3_do.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>This UI has scaled well with magnification and large text. </p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/accessibility/accessibility_implementation4_dont.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>This UI has not scaled well with magnification and large text. Portions of content are overlapping or cut off.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Label visual UI elements </h1>
                    <p>Screen-reader users need to know which UI elements are tappable on-screen. To enable screen readers to read the names of components out loud, add the <strong>contentDescription</strong> attribute to components such as buttons, icons, and tabs containing icons that have no visible text. </p>
                    <div class="modulettes">
                      <a class="modulette container android" href="https://www.google.com/url?q=http://developer.android.com/guide/topics/ui/accessibility/apps.html%23label-ui&amp;sa=D&amp;ust=1481818010756000&amp;usg=AFQjCNH5Ns3rByzXYss4-XDz58sFR8gNsg" target="_blank">
                        <img alt="" class="icon callout-icon" src="../static/images/callouts/android.svg">
                        <div class="info">
                          <div class="title">Labeling UI Elements</div>
                          <span class="subtitle"> Use the contentDescription attribute to set labels.</span>
                        </div>
                        </img>
                      </a>
                    </div>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/accessibility/Accessibility_labeling1.png"/>
                      </div>
                      <figcaption>
                        <p>1. Label the Search icon<br>
                        2. Label the Microphone icon </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/accessibility/Accessibility_labeling2.png"/>
                      </div>
                      <figcaption>
                        <p>1. Label the Edit icon<br>
                        2. Label the Chat icon</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <h1>Help documentation</h1>
                    <p>Any features with special accessibility considerations should be included in help documentation. Make help documentation relevant, accessible, and discoverable. As an example, review this guide on how to use a screen reader with <a href="https://www.google.com/url?q=https://support.google.com/drive/answer/6034939?hl%3Den&amp;sa=D&amp;ust=1481818010764000&amp;usg=AFQjCNG73FZbJRcgaQsZ0qD4BJcT-spiKw" target="_blank">Google Drive.</a></p>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Testing and research</h1>
                    <p>Following these accessibility guidelines will help improve the accessibility of your app, but does not guarantee a fully accessible experience. It is recommended that you also:</p>
                    <ul class="lst-kix_814kni54p86l-0 start">
                      <li>Test your app for full task completion, beginning to end, with various assistive technologies turned on. For example, turn on Explore by Touch in TalkBack and change the speed at which text is spoken out loud.</li>
                      <li>Have users with impairments test your app.</li>
                      <li>Consider how individual elements should be accessible while also fitting together in a coherent user flow.</li>
                      <li>Make sure the major tasks you want your users to complete are possible for everyone.</li>
                    </ul>
                    <p>Talk to your users, particularly those who use assistive technology, to learn about their needs, what they want out of your app, which tools they use, and how they use them. Become familiar with these tools so you can give them the best experience.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/accessibility/accessibility_implementation5.png"/>
                      </div>
                      <figcaption>
                        <p>People use assistive technology in different ways. </p>
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
            Writing
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div><p>Clear and helpful <strong>accessibility </strong><strong>text</strong> is one of the primary ways to make UIs more accessible. Users with limited or no eyesight benefit from explicit verbal descriptions. Accessibility text refers to text that is used by screen reader accessibility software, such as TalkBack on Android, VoiceOver on iOS, and JAWS on desktop. Screen readers read all text on screen aloud, including both visible and nonvisible alternative text. </p>
              <p>Accessibility text includes both visible text (including labels for UI elements, text on buttons, links, and forms) and nonvisible descriptions that don’t appear onscreen (such as alternative text for buttons without text labels). Sometimes, an onscreen label may be overridden with accessibility text to provide more information for the user.</p>
              <p>Both visible and nonvisible text should be helpfully descriptive and independently meaningful, as some users navigate by using all the headings or links on a page. Test your app with a screen reader to identify areas that are missing or need better accessibility text. </p>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module">
                    <h1>Be succinct</h1>
                    <p>Keep content and accessibility text short and to the point. Screen reader users hear every UI element read aloud. The shorter the text, the faster the screen reader users can navigate it. </p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Switch to heyfromjonathan@gmail.com</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                    <figcaption>
                      <p>Write clear and short accessibility text. </p>
                    </figcaption>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Account switcher. Switch to account heyfromjonathan@gmail.com</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                    <figcaption>
                      <p>Don’t write long accessibility text. </p>
                    </figcaption>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module">
                    <h1>Avoid including control type or state in text</h1>
                    <p>Screen readers may automatically announce a control’s type or state through a sound or by speaking the control name before or after the accessibility text. </p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Search</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                    <figcaption>
                      <p>Use short descriptions.</p>
                    </figcaption>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Search field</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                    <figcaption>
                      <p>Don’t write the control type.</p>
                    </figcaption>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <p><strong>Developer note:</strong> If the control type or state is not being read correctly, the control’s accessibility role may be improperly set or be a custom control. Every element should have an associated accessibility role on a website or be coded to be announced properly. This means a button should be set as a button, and a checkbox as a checkbox, so that the control’s type or state is communicated correctly to the user. If you extend or inherit from a native UI element, you will get the correct role. If not, you can override this information for accessibility on each platform (<a href="https://www.google.com/url?q=https://www.w3.org/WAI/intro/aria&amp;sa=D&amp;ust=1481818010714000&amp;usg=AFQjCNEQMr5NDvLBa9da-xfE9WfQWw4GwA" target="_blank">ARIA</a> for web, <a href="https://www.google.com/url?q=http://developer.android.com/reference/android/view/accessibility/AccessibilityNodeInfo.html&amp;sa=D&amp;ust=1481818010715000&amp;usg=AFQjCNG1cz2ubEf3BM2zy2s1vu9CxyYMlA" target="_blank">AccessibilityNodeInfo for Android</a>). </p>
                    <p>On Android, set the class name field of the control’s AccessibilityNodeInfo to "android.widget.Button".</p>
                    <div class="modulettes">
                      <a class="modulette container android" href="https://www.google.com/url?q=https://developer.android.com/guide/topics/ui/accessibility/apps.html%23custom-views&amp;sa=D&amp;ust=1481818010719000&amp;usg=AFQjCNH1OZWUJCKsBHDScGoKuJr4ZCO75g" target="_blank">
                        <img alt="" class="icon callout-icon" src="../static/images/callouts/android.svg">
                        <div class="info">
                          <div class="title">Building Accessible Custom Views</div>
                          <span class="subtitle"></span>
                        </div>
                        </img>
                      </a>
                    </div>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Download over Wi-Fi only</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                    <figcaption>
                      <p>Use short descriptions.</p>
                    </figcaption>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Download over Wi-Fi is selected</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                    <figcaption>
                      <p>Don’t write out the state.</p>
                    </figcaption>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Indicate what an element does</h1>
                    <p>Use action verbs to indicate what an element or link does, not what an element looks like, so a visually impaired person can understand. Link text should:</p>
                    <ul class="lst-kix_9qtqh176w4cq-0 start">
                      <li>Specify the task that tapping the link will perform</li>
                      <li>Avoid vague descriptions, such as “click here”</li>
                    </ul>
                    <p>Ensure an element has the same description everywhere it’s used. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/accessibility/accessibility_writing_edit_do.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>The description read aloud indicates the action represented by the icon. </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/accessibility/accessibility_writing_edit_dont.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>Describing what the icon looks like doesn’t make it clear what the action does. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/accessibility/accessibility_writing_menu_do.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>Accessible text for a navigation menu could be “Show/hide navigation menu” (preferred) or “Show/Hide main menu” (acceptable).</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/accessibility/accessibility_writing_menu_dont.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>When read aloud, the text “side drawer” doesn’t indicate what action will occur.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <p><strong>Elements with state changes</strong></p>
                    <p>For icons that toggle between values or states, announce the icon according to how it is presented to the user.</p>
                    <ul class="lst-kix_dsyd8ql7t187-0 start">
                      <li>If the icon is a <strong>property</strong> of an item, make it a checkbox so that screen readers verbalize the current state, such as “on” or “off.”</li>
                      <li>If the icon is an <strong>action</strong>, write the text label to specify the action that occurs if the icon is selected, such as “Add to wishlist.”</li>
                    </ul>
                    <p>How elements should be used affects how they are displayed. For example, if a star icon represents the action of adding something to a wishlist, the app should verbalize “Add to wishlist” or “Remove from wishlist.”</p>
                  </div>
                  <div class="module"></div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Don’t mention the exact gesture or interaction</h1>
                    <p>Don’t tell users how to physically interact with a control, as they may be navigating with a keyboard or other device, not with their fingers or a mouse. Accessibility software will describe the correct interaction for the user.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/accessibility/accessibility_writing_voicesearch_do.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>The command “voice search” describes the user task (search) paired with the input method (voice).</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/usability/accessibility/accessibility_writing_voicesearch_dont.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>The command “Tap” is inaccurate as it is not the only way to activate this control (it could be selected via a keyboard press, switch device, or braille display). As the main user task in this example is to search, that action should be mentioned instead of “speak”.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <h1>Confirm actions</h1>
              <p>Use dialogs, toasts, or snackbars (Android) to confirm or acknowledge user actions that are destructive (like “Delete” or “Remove”) or difficult to undo. </p>
              <p>For actions that are confirmed through visual means, such as a grid rearranging itself when an item is deleted, a toast is not necessary. In these cases, add accessibility text to provide acknowledgement.</p>
              <h1>Provide hint speech </h1>
              <p>Hint speech provides extra information for actions that aren't clear. For example, Android's “double-tap to select” feature prompts the user to tap twice when landing on an item without taking action. Android TalkBack will also announce any custom actions associated with an element. Use hint speech sparingly and only for complex UI. </p>
              <div class="modulettes">
                <a class="modulette container android" href="https://www.google.com/url?q=http://developer.android.com/reference/android/view/accessibility/AccessibilityNodeInfo.html%23addAction(android.view.accessibility.AccessibilityNodeInfo.AccessibilityAction)&amp;sa=D&amp;ust=1481818010766000&amp;usg=AFQjCNE_U-MDUDvIwn8hceWHW36IGykFbQ" target="_blank">
                  <img alt="" class="icon callout-icon" src="../static/images/callouts/android.svg">
                  <div class="info">
                    <div class="title">Android Custom Actions</div>
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