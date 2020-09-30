<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?= $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>步进器通过对步骤进行编号以表达进展。</h1>
          <div class="gas-intro-h1-bottom"></div>
          <div class="col-list">
            <section class="module-module-figure col-3 h3-spacing">
              <div class="module">
                <p>步进器通过按顺序进行的逻辑步骤和对步骤进行编号来显示进度。它们也可以用于导航。</p>
                <p>步进器可以在保存一步操作后显示短暂的反馈信息。</p>
              </div>
              <div class="module">
                <h3>步骤类型</h3>
                <p>可编辑<br>
                  不可编辑<br>
                  移动端<br>
                  可选</p>
                <h3>步进器类型</h3>
                <p>水平<br>
                  垂直<br>
                  线性<br>
                  非线性</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 3000px">
                    <div class="frame " style="padding-top: 100.0%">
                      <img alt="" src="<?= static_url('../static/media/components/steppers/components_steppers.png'); ?>" loading="lazy"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="steppers.html#steppers-usage" data-qp-ui-data-id="qp:1">用法</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="steppers.html#steppers-types-of-steps" data-qp-ui-data-id="qp:2">步骤类型</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="steppers.html#steppers-types-of-steppers" data-qp-ui-data-id="qp:3">步进器类型</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="steppers.html#steppers-specs" data-qp-ui-data-id="qp:4">规格</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="steppers-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
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
                <section class="module-figure col-2">
                  <div class="module">
                    <p>步进器通过将序列分解成多个逻辑步骤和对步骤进行编号来显示进度。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 77.8947368421%">
                          <img aria-describedby="usage-figure-caption-0" alt="" src="<?= static_url('../static/media/components/steppers/components_acux_stepper_vertstep.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-0">
                        <p>步进器适用于一个步骤后面紧跟着另一个步骤的情况。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module"></div>
                  <div class="module">
                    <p><strong>激活的步进圈 </strong></p>
                    <ul class="lst-kix_13gucfim8u15-0 start">
                      <li>24dp x 24dp</li>
                      <li>12sp Roboto Regular</li>
                      <li>使用应用主色</li>
                      <li>默认颜色为 Google Blue 500</li>
                    </ul>
                    <p><strong>激活的步骤</strong></p>
                    <ul class="lst-kix_13gucfim8u15-0">
                      <li>14sp Roboto Medium</li>
                      <li>87% black</li>
                    </ul>
                    <p><strong>连接线</strong></p>
                    <ul class="lst-kix_13gucfim8u15-0">
                      <li>边框：1dp</li>
                      <li>颜色值：Grey 400</li>
                    </ul>
                  </div>
                  <div class="module">
                    <p><strong>未激活的步进圈</strong></p>
                    <ul class="lst-kix_13gucfim8u15-0">
                      <li>24dp x 24dp</li>
                      <li>12sp Roboto Regular</li>
                      <li>100% 白色</li>
                      <li>38% 黑色</li>
                    </ul>
                    <p><strong>未激活的步骤</strong></p>
                    <ul class="lst-kix_13gucfim8u15-0">
                      <li>14sp Roboto Regular</li>
                      <li>38% 黑色</li>
                    </ul>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>避免使用步进器来分隔较短的表单，或者在一个页面中使用多个步进器。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 89.4736842105%">
                          <img alt="" aria-describedby="usage-figure-caption-1" src="<?= static_url('../static/media/components/steppers/components_acux_stepper_avoid.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-1">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>不要在步进器中嵌套步进器，或者在一个页面中使用多个步进器。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="steppers-types-of-steps" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            步骤类型
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>可编辑步骤</h2>
                    <p>可编辑步骤允许用户在稍后返回到之前的步骤重新编辑。最适合用于需要在同一个会话中编辑步骤的情况。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 18.8157894737%">
                          <img alt="" aria-describedby="types-of-steps-figure-caption-0" src="<?= static_url('../static/media/components/steppers/components_acux_stepper_editable.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="types-of-steps-figure-caption-0">
                        <p>可编辑步骤可以在同一个会话中进行编辑。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>不可编辑步骤</h2>
                    <p>不可编辑步骤适用于：</p>
                    <ul class="lst-kix_psvkwd8f6atv-0 start">
                      <li>不允许用户在之后返回到前面的步骤进行编辑</li>
                      <li>步骤编辑会分散用户注意力，给表单的完成带来困难</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 18.8157894737%">
                          <img alt="" aria-describedby="types-of-steps-figure-caption-1" src="<?= static_url('../static/media/components/steppers/components_acux_stepper_noneditable.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="types-of-steps-figure-caption-1">
                        <p>不可编辑步骤一旦完成后就不允许修改。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>移动端步骤</h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="types-of-steps-figure-caption-2" src="<?= static_url('../static/media/components/steppers/components_acux_stepper_mbltypog.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="types-of-steps-figure-caption-2">
                        <p><strong>移动端步骤的文本</strong></p>
                        <p>步骤以文本的形式显示在顶部</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="types-of-steps-figure-caption-3" src="<?= static_url('../static/media/components/steppers/components_acux_stepper_mbldots.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="types-of-steps-figure-caption-3">
                        <p><strong>移动端步骤点</strong></p>
                        <p>当步骤数量不大时使用点。</p>
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
                          <img alt="" aria-describedby="types-of-steps-figure-caption-4" src="<?= static_url('../static/media/components/steppers/components_acux_stepper_mblprgrssbr.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="types-of-steps-figure-caption-4">
                        <p><strong>移动端步骤进度条</strong></p>
                        <p>如果有很多步骤，或者在过程中需要插入一些步骤（基于对前一个步骤的响应），请使用进度条。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>可选步骤</h2>
                    <p>线性流中的可选步骤应标记为可选。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 36.8421052632%">
                          <img alt="" aria-describedby="types-of-steps-figure-caption-5" src="<?= static_url('../static/media/components/steppers/components_acux_stepper_optstps.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="types-of-steps-figure-caption-5">
                        <p>线性流中的可选步骤标记为可选。</p>
                        <p><strong>可选步骤</strong></p>
                      </figcaption>
                    </figure>
                    <ul class="lst-kix_n1qevcx668i1-0 start">
                      <li>12sp Roboto Regular</li>
                      <li>54% 黑色</li>
                    </ul>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="steppers-types-of-steppers" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            步进器类型
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module"><h1>水平步进器</h1>
                    <p>当一个步骤的内容取决于前一个步骤时，适合使用水平步进器。</p>
                    <p>避免在水平步进器中使用较长的步骤名。</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 40.0%">
                          <img alt="" aria-describedby="types-of-steppers-figure-caption-0" src="<?= static_url('../static/media/components/steppers/components_acux_stepper_horizstep.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="types-of-steppers-figure-caption-0">
                        <p>在水平步进器上，步骤名称和数值显示在水平条上，在页面向下滚动时，可以将其固定在页面顶部。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3 h1-spacing">
                  <div class="module">
                    <h1>垂直步进器</h1>
                    <p>垂直步进器是为窄屏幕设计的。适合用于移动端。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="types-of-steppers-figure-caption-1" src="<?= static_url('../static/media/components/steppers/components_acux_stepper_mblvertinpg.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="types-of-steppers-figure-caption-1">
                        <p>垂直步进器可以在移动端使用。只需确保每个步骤的内容是响应式的。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>线性步进器</h1>
                    <p>线性步进器需要用户完成一个步骤后才能移动到下一步。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 49.4736842105%">
                          <img alt="" aria-describedby="types-of-steppers-figure-caption-2" src="<?= static_url('../static/media/components/steppers/components_acux_stepper_linear.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="types-of-steppers-figure-caption-2">
                        <p>每一个线性步骤都必须完成后才能继续下一个步骤。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>非线性步进器</h1>
                    <p>非线性步进器允许用户直接跳到任意一个步骤。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 49.4736842105%">
                          <img alt="" aria-describedby="types-of-steppers-figure-caption-3" src="<?= static_url('../static/media/components/steppers/components_acux_stepper_nonlinear.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="types-of-steppers-figure-caption-3">
                        <p>非线性步进器可以以任意顺序完成。</p>
                        <p><strong>未激活的步进圈</strong></p>
                      </figcaption>
                    </figure>
                    <ul class="lst-kix_j3o0stqjcpw-0 start">
                      <li>24dp x 24dp</li>
                      <li>12sp Roboto Regular</li>
                      <li>文本 100% 白色</li>
                      <li>38% 黑色</li>
                    </ul>
                    <p><strong>未激活的步骤</strong></p>
                    <ul class="lst-kix_weogx73pm4gg-0 start">
                      <li>14sp Roboto Regular</li>
                      <li>54% 黑色</li>
                    </ul>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>另类的标签</h1>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 31.5789473684%">
                          <img alt="" aria-describedby="types-of-steppers-figure-caption-4" src="<?= static_url('../static/media/components/steppers/components_acux_stepper_altlblplcmnt.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="types-of-steppers-figure-caption-4">
                        <p>另类的标签位置</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 33.6842105263%">
                          <img alt="" aria-describedby="types-of-steppers-figure-caption-5" src="<?= static_url('../static/media/components/steppers/components_acux_stepper_altlblplcmntoptstp.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="types-of-steppers-figure-caption-5">
                        <p>包含一个可选步骤的另类标签位置</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>步进器反馈</h1>
                    <p>步进器可以在一个步骤保存后显示一个短暂的反馈信息。只有在步骤之间存在较长延时时，才应使用步进器反馈。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 59.6052631579%">
                          <video aria-describedby="types-of-steppers-figure-caption-6" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/components/steppers/components_acux_stepper_feedback.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/components/steppers/components_acux_stepper_feedback.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="types-of-steppers-figure-caption-6">
                        <p>该步进器在一个步骤保存后会显示短暂的反馈信息。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="steppers-specs" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
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
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>标准步进器</h2></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 24.2105263158%">
                          <img alt="" aria-describedby="specs-figure-caption-0" src="<?= static_url('../static/media/components/steppers/components_acux_stepper_standard_rl.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-0">
                        <p>步进器高度：72dp<br>
                        图标上、下、左侧的边距：24dp<br>
                        图标右侧边距：8dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>可选步骤</h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 24.2105263158%">
                          <img alt="" aria-describedby="specs-figure-caption-1" src="<?= static_url('../static/media/components/steppers/components_acux_stepper_optstp_rl.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-1">
                        <p>步骤高度：72dp<br>
                        图标左右两侧边距：8dp<br>
                        标签右侧边距：8dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>多行错误状态</h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 24.2105263158%">
                          <img alt="" src="<?= static_url('../static/media/components/steppers/components_acux_stepper_multilnerr_rl.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2><strong>另类标签</strong></h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 34.8684210526%">
                          <img alt="" aria-describedby="specs-figure-caption-2" src="<?= static_url('../static/media/components/steppers/components_acux_stepper_altlblplace_rl.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-2">
                        <p>步骤高度：104dp</p>
                        <p>图标左右两侧边距：8dp<br>
                          标签顶部边距：16dp<br>
                          图标和标签距离边缘的距离：24dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 34.8684210526%">
                          <img alt="" aria-describedby="specs-figure-caption-3" src="<?= static_url('../static/media/components/steppers/components_acux_stepper_altlblplaceoptstp_rl.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-3">
                        <p>含可选步骤的另类标签</p>
                        <p>图标左右两侧边距：8dp<br>
                          步骤左右两侧边距：16dp<br>
                          标签底部边距：24dp</p>
                        <p>图标和标签距离屏幕边缘的间距：24dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 29.4736842105%">
                          <img alt="" aria-describedby="specs-figure-caption-4" src="<?= static_url('../static/media/components/steppers/components_acux_stepper_altlblplerr_rl.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-4">
                        <p>另类标签位置的错误状态</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>非线性步进器</h2>
                    <p>鼠标悬停和按下状态</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 21.0526315789%">
                          <img alt="" aria-describedby="specs-figure-caption-5" src="<?= static_url('../static/media/components/steppers/components_acux_stepper_hvrhoriz.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-5">
                        <p>鼠标悬停</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 36.8421052632%">
                          <img alt="" aria-describedby="specs-figure-caption-6" src="<?= static_url('../static/media/components/steppers/components_acux_stepper_hvrvert.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-6">
                        <p>鼠标悬停</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 21.0526315789%">
                          <img alt="" aria-describedby="specs-figure-caption-7" src="<?= static_url('../static/media/components/steppers/components_acux_stepper_prssdhoriz.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-7">
                        <p>按下</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 36.8421052632%">
                          <img alt="" aria-describedby="specs-figure-caption-8" src="<?= static_url('../static/media/components/steppers/components_acux_stepper_prssdvert.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-8">
                        <p>按下</p>
                        <p><strong>背景色</strong></p>
                      </figcaption>
                    </figure>
                    <ul class="lst-kix_w0e4wwuafr9-0 start">
                      <li>6% 黑色</li>
                    </ul>
                    <p><strong>步进圈</strong></p>
                    <ul class="lst-kix_lewiviymex53-0 start">
                      <li>24dp x 24dp</li>
                      <li>12sp Roboto Regular</li>
                      <li>文本 100% 白色</li>
                      <li>38% 黑色</li>
                    </ul>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>垂直步进器</h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 67.3684210526%">
                          <img alt="" aria-describedby="specs-figure-caption-9" src="<?= static_url('../static/media/components/steppers/components_acux_stepper_vertstep_rl.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-9">
                        <p>垂直步进器，具有子步骤<br>
                        图标左侧边距：24dp<br>
                        图标和文本对齐方式：垂直居中对齐<br>
                        图标上下两侧边距：8dp<br>
                        标签顶部边距：24dp<br>
                        标签底部边距：16dp<br>
                        步骤间的垂直间距：48dp<br>
                        按钮高度： 48dp<br>
                        按钮顶部间距：16dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 43.4210526316%">
                          <img alt="" aria-describedby="specs-figure-caption-10" src="<?= static_url('../static/media/components/steppers/components_acux_stepper_vertstpsubstp_rl.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-10">
                        <p>垂直步进器示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3 h2-spacing">
                  <div class="module">
                    <h2>移动端步进器</h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 147.777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-11" src="<?= static_url('../static/media/components/steppers/components_acux_stepper_mblinpgstp_rl.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-11">
                        <p>图标上下两侧边距：8dp<br>
                        标签顶部边距：24dp<br>
                        标签按钮边距（不含子标签）：16dp<br>
                        未激活步骤下面的垂直间距：40dp<br>
                        激活步骤下面的垂直间距：48dp<br>
                        按钮高度：48dp</p>
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
