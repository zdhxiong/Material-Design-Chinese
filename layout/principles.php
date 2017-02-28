<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div><h1>Material Design 指南通过源自印刷领域的设计元素 – 例如排版、网格、空白、缩放、颜色，和图像 – 来建立层次结构和传达所要表达的含义，并专注于带给用户沉浸式的体验。Material Design 采用来自印刷设计领域的工具，如基准网格和结构模版，通过重复视觉元素，结构网格以及跨平台和屏幕尺寸的间距，促进不同环境下设计的一致性。这些布局可通过缩放来适应任何屏幕大小，这简化了创建可扩展应用的过程。</h1></div>
      </div>

      <nav class="chapter-toc">
        <h1>目录</h1>
        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="principles.html#principles-how-paper-works" data-qp-ui-data-id="qp:1">纸片工作原理</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="principles.html#principles-floating-action-button" data-qp-ui-data-id="qp:2">浮动操作按钮</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="principles-how-paper-works" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            纸片工作原理
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div><p>在 Material Design 中，纸片的物理特性被转移到了屏幕中。应用的背景类似于一张平坦、不透明质地的纸片，应用的行为也模仿纸片，可以改变大小、拖动及把多个纸片粘合在一起。</p>
              <p>在本规范中，构成应用的表面被成为材料或材料片。</p>
              <p>应用之外的元素，例如系统状态栏，和应用内容是分开的，不会被视为材料。</p>
              <p>更多关于材料的细节，详见<a href="../what-is-material/material-properties.html">材料属性</a>。</p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>接缝</h1>
                    <p>两片材料的公共边缘被成为<strong>接缝</strong>。当通过接缝连接时，它们会一起移动。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/principles/layout_principles_papercraft_paper1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>两片材料的接缝</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>阶层</h1>
                    <p>两个 Z 轴位置不同的材料片重叠时，会形成<strong>阶层</strong>。这两个材料会相互独立移动。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/principles/layout_principles_papercraft_paper2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>两片重叠的材料构成的阶层</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="principles-floating-action-button" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            浮动操作按钮
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
                    <h1>浮动操作按钮</h1>
                    <p><strong>浮动操作按钮</strong>是和工具栏分离的圆形纸片。它表示单个被提升的操作。</p>
                    <p>如果它和阶层中的内容创建有关，则可以跨越一个阶层。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/principles/layout_principles_papercraft_actions1.png'); ?>"/>
                      </div>
                      <figcaption><br>
                        <p>跨阶层的浮动操作按钮</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>如果浮动操作按钮与两个材料的内容都有关，则可以跨越接缝。</p>
                    <p>不要引入一个装饰用的接缝，来为浮动操作按钮提供锚点。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/layout/principles/layout_principles_papercraft_actions2.png'); ?>"/>
                      </div>
                      <figcaption><br>
                        <p>跨接缝的浮动操作按钮</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <p>更多有关浮动操作按钮的信息，详见<a href="../components/buttons.html#buttons-floating-action-button">浮动操作按钮</a>。</p>
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