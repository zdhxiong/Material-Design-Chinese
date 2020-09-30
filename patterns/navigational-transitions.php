<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?= $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>导航转换是在应用的不同状态间移动，例如从高级视图进入详细视图。</h1>
          <div class="gas-intro-h1-bottom"></div>
          <div class="col-list">
            <section class="module-module-figure col-3 h3-spacing">
              <div class="module">
                <p>大多数（但不是全部）转换都在自然的层次之间。这些时刻应该通过应用的不同状态来反应出用户的前进方向。</p>
              </div>
              <div class="module">
                <h3>层次结构和海拔高度</h3>
                <p>当元素升高并展开，海拔高度的改变指示出了焦点从<strong>父级移动到了子级</strong>。</p>
                <p><strong>同级转换</strong>出现在处于同一层次结构的元素之间，没有海拔高度的变化。</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 3000px">
                    <div class="frame " style="padding-top: 100.0%">
                      <img alt="" src="<?= static_url('../static/media/patterns/navigational-transitions/patterns_navigation_transitions.png'); ?>" loading="lazy"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="navigational-transitions.html#navigational-transitions-parent-to-child" data-qp-ui-data-id="qp:1">父级到子级</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="navigational-transitions.html#navigational-transitions-sibling-to-sibling" data-qp-ui-data-id="qp:2">同级到同级</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="navigational-transitions-parent-to-child" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            父级到子级
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>探索应用更深层的视图，是从父屏幕开始不断深入探索的层级之途。在那里，用户可以探索多个可能的子屏幕，也就是父屏幕的子屏幕。</p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>在 Material Design 中，海拔高度的变化表示从父元素到子元素的焦点变化。</p>
                    <p><strong>海拔高度和扩展</strong></p>
                    <p>用户触摸的表面应该从原来的地方升高并展开。这种扩展和动画使用了材料运动曲线，在自然的运动中强调了离开了父级，向目标（子元素）移动。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 684px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 47.3684210526%">
                          <video aria-describedby="parent-to-child-figure-caption-0" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/patterns/navigational-transitions/patterns_navigational-transitions_parent-to-child_list-02_xhdpi_019.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/patterns/navigational-transitions/patterns_navigational-transitions_parent-to-child_list-02_xhdpi_019.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="parent-to-child-figure-caption-0">
                        <p>父级到子级的转换动画</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 47.3684210526%">
                          <video aria-describedby="parent-to-child-figure-caption-1" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/patterns/navigational-transitions/patterns_navigational-transitions_parent-to-child_calendar_tablet_xhdpi_004.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/patterns/navigational-transitions/patterns_navigational-transitions_parent-to-child_calendar_tablet_xhdpi_004.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="parent-to-child-figure-caption-1">
                        <p>父级到子级的转换动画</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="navigational-transitions-sibling-to-sibling" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            同级到同级
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p><strong>同级转换</strong>出现在处于同一层次结构的元素之间，没有海拔高度的变化。</p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>固定海拔高度</strong></p>
                    <p>例如，当用户通过选项卡来导航时，是不会发生海拔高度变化的。每个选项标签的内容都和表面在同一海拔高度。新内容从右侧滑入，同时同级的内容向左移动到屏幕外。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 47.3684210526%">
                          <video aria-describedby="sibling-to-sibling-figure-caption-0" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/patterns/navigational-transitions/patterns_navigational-transitions_sibling-to-sibling_tabs-01_xhdpi_013.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/patterns/navigational-transitions/patterns_navigational-transitions_sibling-to-sibling_tabs-01_xhdpi_013.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="sibling-to-sibling-figure-caption-0">
                        <p>同级转换</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 173.611111111%">
                          <video aria-describedby="sibling-to-sibling-figure-caption-1" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/patterns/navigational-transitions/patterns_navigational-transitions_sibling-to-sibling_tabs-02_xhdpi_003.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/patterns/navigational-transitions/patterns_navigational-transitions_sibling-to-sibling_tabs-02_xhdpi_003.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="sibling-to-sibling-figure-caption-1">
                        <p>同级转换的动画</p>
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
  <div class="gas-last-div-inner-bottom"></div>
</div>

<?php include SRC_PATH.'/public/footer.php'; ?>
