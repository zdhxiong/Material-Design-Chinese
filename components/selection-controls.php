<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div><p>选择控件允许用户对选项进行选择。</p>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>本指南包含了三种类型的选择控件。</p>
                <ul class="lst-kix_5laryictleob-0 start">
                  <li><strong>复选框</strong>允许从一组选项中选择多个选项。</li>
                  <li><strong>单选框</strong>允许从一组选项中选择单个选项。</li>
                  <li><strong>开关按钮</strong>允许打开或关闭选择。</li>
                </ul>
              </div>
              <div class="module">
                <h3><strong>颜色</strong></h3>
                <p>选择控件使用应用的<a href="../style/color.html#color-color-schemes">强调色</a>.</p>
                <h3><strong>主题</strong></h3>
                <p>选择控件在暗色和亮色主题下都可以使用。</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/components/selection-controls/patterns_selection_controls.png"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="selection-controls.html#selection-controls-checkbox" data-qp-ui-data-id="qp:1">复选框</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="selection-controls.html#selection-controls-radio-button" data-qp-ui-data-id="qp:2">单选框</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="selection-controls.html#selection-controls-switch" data-qp-ui-data-id="qp:3">开关按钮</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="selection-controls-checkbox" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            复选框
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
                    <p>复选框允许用户从一组选项中选择多个选项。</p>
                    <p>如果在列表中有多个选项，可以使用复选框而不是开关按钮来节省空间。</p>
                    <p>如果只有一个选项，不要使用复选框，应该使用开关按钮。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/selection-controls/components_switches_check1.png"/>
                      </div>
                      <figcaption>
                        <p>亮色主题</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/selection-controls/components_switches_check2.png"/>
                      </div>
                      <figcaption>
                        <p>暗色主题</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>亮色主题</h1>
                    <p>开：Swatch 500，不透明度 100%<br>
                      关：#000000，不透明度 54%<br>
                      禁用状态：#000000，不透明度 26%</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/selection-controls/components_switches_check3.png"/>
                      </div>
                      <figcaption>
                        <p>亮色主题的复选框在鼠标悬停、聚焦、按下、禁用以及禁用且聚焦时的状态。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>暗色主题</h1>
                    <p>开：Swatch 500，不透明度 100%<br>
                      关：#FFFFFF，不透明度 70%<br>
                      禁用状态：#FFFFFF，不透明度 30%</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/selection-controls/components_switches_check4.png"/>
                      </div>
                      <figcaption>
                        <p>暗色主题的复选框在鼠标悬停、聚焦、按下、禁用以及禁用且聚焦时的状态。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="selection-controls-radio-button" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            单选框
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
                    <p>单选框允许用户从一组选项中选择单个选项。如果你认为用户需要并排看到所有可用的选项的话，可以使用单选框进行选择。</p>
                    <p>此外，考虑使用下拉菜单，会比显示所有选项占用更少空间。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/selection-controls/components_switches_radio1.png"/>
                      </div>
                      <figcaption>
                        <p>亮色主题的单选框</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/selection-controls/components_switches_radio2.png"/>
                      </div>
                      <figcaption>
                        <p>暗色主题的单选框</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>亮色主题</h1>
                    <p>开：Swatch 500，不透明度 100%<br>
                      关：#000000，不透明度 54%<br>
                      禁用状态：#000000，不透明度 26%</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/selection-controls/components_switches_radio3.png"/>
                      </div>
                      <figcaption>
                        <p>亮色主题的单选按钮在鼠标悬停、聚焦、按下、禁用以及禁用且聚焦时的状态。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>暗色主题</h1>
                    <p>开：Swatch 500, 不透明度 100%<br>
                      关：#FFFFFF, 不透明度 70%<br>
                      禁用状态：#FFFFFF, 不透明度 30%</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/selection-controls/components_switches_radio4.png"/>
                      </div>
                      <figcaption>
                        <p>暗色主题的单选框在鼠标悬浮、聚焦、按下、禁用以及禁用且聚焦时的状态。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="selection-controls-switch" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            开关按钮
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
                    <p>开关按钮切换单个设置项的状态。开关控件中的选项，以及它的状态，应该在相应的内联标签中显示清楚。开关按钮具有和单选按钮一样的视觉属性。</p>
                    <p>使用文本“开”和“关”滑动切换已经过时了。使用这里显示的开关按钮来代替。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/selection-controls/components_switches_switch1.png"/>
                      </div>
                      <figcaption>
                        <p>亮色主题</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/selection-controls/components_switches_switch2.png"/>
                      </div>
                      <figcaption>
                        <p>暗色主题</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module"><h1>亮色主题</h1>
                    <p>打开时的拇指：Swatch 500，不透明度 100%<br>
                      打开时的轨道：Swatch 500，不透明度 50%</p>
                    <p>关闭时的拇指：Grey 50, #FAFAFA，不透明度 100%<br>
                      关闭时的轨道：#000000，不透明度 38%</p>
                    <p>禁用时的拇指：Grey 400, #BDBDBD，不透明度 100%<br>
                      禁用时的轨道：#000000，不透明度 12%</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/selection-controls/components_switches_switch3.png"/>
                      </div>
                      <figcaption>
                        <p>亮色主题的开关按钮在鼠标悬浮、聚焦、按下、禁用以及禁用且聚焦时的状态。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>暗色主题</h1>
                    <p>打开时的拇指：Swatch 200，不透明度 100%<br>
                      打开时的轨道：Swatch 200，不透明度 50%</p>
                    <p>关闭时的拇指：Grey 400, #BDBDBD，不透明度 100%<br>
                      关闭时的轨道：#FFFFFF，不透明度 30%</p>
                    <p>禁用时的拇指：Grey 800, #424242，不透明度 100%</p>
                    <p>禁用时的轨道：#FFFFFF，不透明度 10%</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/selection-controls/components_switches_switch4.png"/>
                      </div>
                      <figcaption>
                        <p>暗色主题的开关按钮在鼠标悬浮、聚焦、按下、禁用，禁用且聚焦时的状态。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>只在使用手指触控的表单元素上使用外部圆圈交互效果，否则交互效果可能完全干扰元素。对于使用鼠标的桌面设备，没必要使用这种多余的效果。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/selection-controls/components_switches_switch5.png"/>
                      </div>
                      <figcaption>
                        <p>移动端的动效</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/selection-controls/components_switches_switch6.png"/>
                      </div>
                      <figcaption>
                        <p>在桌面端没有动效</p>
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