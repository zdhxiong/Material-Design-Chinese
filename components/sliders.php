<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <p>滑块控件允许用户通过移动滑块从一系列的值中进行选择。</p>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module"><p>滑块是用于调整反映强度级别（如音量、亮度或色彩饱和度）的设置的理想组件。</p>
                <p>滑块可以在滑动条的两端有反映强度值的图标。将滑块范围的最小值放在左侧，最大值放在右侧。</p>
              </div>
              <div class="module">
                <h3><strong>连续滑块</strong></h3>
                <p>连续滑块允许用户在主观范围内选择一个值。它们不需要特定的值来进行调整，尽管在某些情况下，它们可以提供可编辑的数值。</p>
                <h3><strong>间续滑块</strong></h3>
                <p>间续滑块允许用户从一个范围中选择特定值。</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/components/sliders/components_sliders.png"/>
                  </div>
                </figure>
              </div>
            </section>
          </div>
        </div>
      </div>

      <nav class="chapter-toc">
        <h1>内容</h1>
        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="sliders.html#sliders-continuous-slider" data-qp-ui-data-id="qp:1">连续滑块</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="sliders.html#sliders-discrete-slider" data-qp-ui-data-id="qp:2">间续滑块</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="sliders-continuous-slider" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            连续滑块
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
                    <p>在不要求精准、以主观感觉为主的设置中使用连续滑块，让使用者做出更有意义的调整。</p>
                    <h2><strong><strong>亮色主题</strong></strong></h2>
                    <p>打开时的滑块：Swatch 500，不透明度 100%<br>
                      打开时的轨道：Swatch 500，不透明度 100%</p>
                    <p>关闭时的滑块：#000000，不透明度 26%<br>
                      关闭时的轨道：#000000，不透明度 26%</p>
                    <p>关闭时聚焦和点击状态的滑块：#000000，不透明度 38% <br>
                      关闭时聚焦和点击时的轨道：#000000，不透明度 38%</p>
                    <p>禁用状态（不相连）：#000000，不透明度 26%</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/sliders/components_sliders_continuous1.png"/>
                      </div>
                      <figcaption>
                        <p>亮色主题</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong><strong>暗色主题</strong></strong></h2>
                    <p>打开时的滑块：Swatch 200，不透明度 100%<br>
                      打开时的轨道：Swatch 200，不透明度 100%</p>
                    <p>关闭时的滑块：#FFFFFF，不透明度 30%<br>
                      关闭时的轨道：#FFFFFF，不透明度 30%</p>
                    <p>禁用状态（不相连）：#FFFFFF，不透明度 30%</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/sliders/components_sliders_continuous2.png"/>
                      </div>
                      <figcaption>
                        <p>暗色主题</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/sliders/components-sliders-continuous_slider_light_xhdpi_003.webm" type="video/webm">
                            <source src="../static/media/components/sliders/components-sliders-continuous_slider_light_xhdpi_003.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>不同的滑块行为</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>图标与滑块栏左/右的间距：</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/sliders/components_sliders_continuous3.png"/>
                      </div>
                      <figcaption>
                        <p>滑块中图标的间距示例。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/sliders/components_sliders_continuous4.png"/>
                      </div>
                      <figcaption>
                        <p>滑块在正常、鼠标悬停、聚焦、点击和禁用状态下的示例。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>含可编辑的数值</h1>
                    <p>用于需要设置精确值的设置项，通过点击滑块，文本框会变成可编辑状态以供输入文本，并且自动移动滑块来更新滑块的值。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/sliders/components_sliders_continuous5.png"/>
                      </div>
                      <figcaption>
                        <p>具有可编辑数值的滑块示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/sliders/components_sliders_continuous6.png"/>
                      </div>
                      <figcaption>
                        <p>具有可编辑数值的滑块在正常、鼠标悬停、聚焦、点击和禁用状态下的示例。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="sliders-discrete-slider" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            间续滑块
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div><p>间续滑块会恰好咬合到在滑动条上平均分布的间续标记上。在要求精准、以客观设定为主的设置项中使用间续滑块，让使用者做出更有意义的调整。应当对每个间续标记设定一定的等级区间进行分隔，使得其调整效果对于使用者来说显而易见。这些生成区间的值应当是预先设定好的，使用者不可对其进行编辑。</p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>含数值标签</h1>
                    <p>用于用户需要知道精确数值的设置项。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/sliders/components_sliders_discrete1.png"/>
                      </div>
                      <figcaption>
                        <p>亮色主题</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/sliders/components_sliders_discrete2.png"/>
                      </div>
                      <figcaption>
                        <p>暗色主题</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/sliders/components-sliders-discreteslider-061202_Slider_LightTheme_xhdpi_002.webm" type="video/webm">
                            <source src="../static/media/components/sliders/components-sliders-discreteslider-061202_Slider_LightTheme_xhdpi_002.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>间续滑块的动画效果</p>
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