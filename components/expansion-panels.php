<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <p>扩展面板的功能包括创建流程、进行简单的编辑。</p>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module"><p>扩展面板是一个轻量级的容器，可以单独存在，也可以连接到一个更大的平面上，比如卡片。</p>
                <p>它可以用于不同的任务，例如：</p>
                <ul class="lst-kix_nmfkwyszolh9-0 start">
                  <li>编辑设置项</li>
                  <li>创建广告系列的工具</li>
                </ul>
              </div>
              <div class="module">
                <h3><strong>用法</strong></h3>
                <p>编辑<br>
                  创建流程</p>
                <h3><strong>行为</strong></h3>
                <p>展开<br>
                  折叠<br>
                  聚焦</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 3000px">
                    <div class="frame " style="padding-top: 100.0%">
                      <img alt="" src="<?php static_url('../static/media/components/expansion-panels/components_expansion_panels.png'); ?>"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="expansion-panels.html#expansion-panels-usage" data-qp-ui-data-id="qp:1">用法</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="expansion-panels.html#expansion-panels-behavior" data-qp-ui-data-id="qp:2">行为</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="expansion-panels.html#expansion-panels-specs" data-qp-ui-data-id="qp:3">规格</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="expansion-panels-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
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
                    <p>扩展面板是一个轻量级的容器，可以单独存在，也可以连接到一个更大的平面上，比如卡片。</p>
                    <p><strong>编辑</strong></p>
                    <p>扩展面板最适合用于进行简单的编辑，例如选择设置项的值。</p>
                    <p>例如，包含表格的应用可以使用扩展面板来调整表格元素的设置。</p>
                    <p><strong>创建流程</strong></p>
                    <p>扩展面板可以按顺序显示以形成创建流程。</p>
                    <p>例如，一个用于创建广告系列的工具，可以显示一系列的扩展面板以收集广告系列的详细信息。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 43.2894736842%">
                          <img alt="" aria-describedby="usage-figure-caption-1" src="<?php static_url('../static/media/components/expansion-panels/components_expansionpanels_usage.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-1">
                        <p>各种扩展面板</p>
                        <table class="s-tag-table">
                          <tbody>
                          <tr>
                            <td colspan="1" rowspan="1"><p><strong>列表内容</strong></p>
                              <p>15sp Roboto Regular<br>
                                87% black</p>
                              <p><strong>副内容</strong></p>
                              <p>12sp Roboto Regular<br>
                                54% black</p></td>
                            <td colspan="1" rowspan="1">
                              <p><strong>分隔线</strong></p>
                              <p>1dp border<br>
                                12% black</p>
                              <p><strong>扩展图标</strong></p>
                              <p>24dp x 24dp<br>
                                38% black</p>
                            </td>
                          </tr>
                          </tbody>
                        </table>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="expansion-panels-behavior" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
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
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>折叠的面板</h1>
                    <p>折叠的面板只显示摘要信息。选择一个折叠的面板后，它会展开以显示完整的扩展面板。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 27.2368421053%">
                          <img alt="" aria-describedby="behavior-figure-caption-1" src="<?php static_url('../static/media/components/expansion-panels/components_material_expansionpanels_collapse.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-1">
                        <p>折叠的面板示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>展开的面板</h1>
                    <p>折叠的面板被选择后会展开，允许用户添加或编辑信息。</p>
                    <p>可能会添加一些帮助文本到面板上，来协助用户。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 58.8157894737%">
                          <img alt="" aria-describedby="behavior-figure-caption-2" src="<?php static_url('../static/media/components/expansion-panels/components_material_expansionpanels_expand.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-2">
                        <p>展开的面板示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>聚焦状态</h1>
                    <p>扩展面板可以使用聚焦状态（在列表项上添加灰色背景）来为单个列表项提供焦点。</p>
                    <p>在键盘上，用户可以使用 Tab 键来遍历列表项。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 27.2368421053%">
                          <img alt="" aria-describedby="behavior-figure-caption-3" src="<?php static_url('../static/media/components/expansion-panels/components_material_expansionpanels_state.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-3">
                        <p><strong>背景色</strong></p>
                        <p>Grey 200</p>
                        <p><strong>鼠标悬浮和按下时的扩展图标</strong></p>
                        <p>24dp x 24dp<br>
                          54% black</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="expansion-panels-specs" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
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
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>标签</strong></p>
                    <ul class="lst-kix_c7v5kcmoplqk-0 start">
                      <li>字体：Roboto Regular 15sp</li>
                    </ul>
                    <p><strong>边距</strong></p>
                    <ul class="lst-kix_c7v5kcmoplqk-0">
                      <li>上下边距：16dp</li>
                      <li>左右边距：24dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 61.4473684211%">
                          <img alt="" src="<?php static_url('../static/media/components/expansion-panels/components_material_expansionpanels_spec2.png'); ?>"/>
                        </div>
                      </div>
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