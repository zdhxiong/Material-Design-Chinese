<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?= $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>Material Design 中的配色灵感来自大胆的色调与柔和的环境、深度的阴影、明亮的高光并存。</h1>
          <div class="col-list">
            <section class="figure col-1">
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 1280px">
                    <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 56.25%">
                      <video controls="" loop="" preload="auto">
                        <source src="<?= static_url('../static/media/style/color/Palette Perfect How Material Design Makes Color Easy.webm'); ?>" type="video/webm">
                        <source src="<?= static_url('../static/media/style/color/Palette Perfect How Material Design Makes Color Easy.mp4'); ?>" type="video/mp4">
                        </source></source>
                      </video>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="color.html#color-color-tool" data-qp-ui-data-id="qp:1">颜色工具</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="color.html#color-color-palette" data-qp-ui-data-id="qp:2">调色板</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="color.html#color-color-system" data-qp-ui-data-id="qp:3">颜色系统</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="color.html#color-usability" data-qp-ui-data-id="qp:4">可用性</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="color.html#color-themes" data-qp-ui-data-id="qp:5">主题</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="color-color-tool" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            颜色工具
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p><a href="https://material.io/color/" target="_blank">颜色工具</a> 可以帮你创建、分享配色方案、以及把配色方案应用到 UI 中，以及测试颜色组合的可访问性。</p>
              <div class="col-list">
                <section class="figure-figure-figure col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 721px">
                        <div class="frame " style="padding-top: 99.8613037448%">
                          <img alt="" src="<?= static_url('../static/media/style/color/components.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                    </figure>
                    <h3><strong>创建配色方案</strong></h3>
                    <p>创建配色方案，包含主色和辅助色的较深和较浅的变化。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" src="<?= static_url('../static/media/style/color/accessibility.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                    </figure>
                    <h3><strong>测试可访问性</strong></h3>
                    <p>使用 <a href="https://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-contrast.html" target="_blank">Web 内容无障碍指南</a> 的易读性标准，来测试文本在不同的背景色中是否可访问。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 721px">
                        <div class="frame " style="padding-top: 99.8613037448%">
                          <img alt="" src="<?= static_url('../static/media/style/color/UI.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                    </figure>
                    <h3><strong>预览 UI 的颜色</strong></h3>
                    <p>通过一系列的 Material Design 组件，来预览配色方案的效果，并可以在 Codepen 中编辑 HTML、CSS 和 JavaScript。</p>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <div class="modulettes">
                      <a class="modulette container md" href="https://material.io/color/" target="_blank">
                        <img alt="" class="icon callout-icon" src="<?= static_url('../static/spec/images/callouts/md.svg'); ?>" loading="lazy"/>
                        <div class="info">
                          <div class="title">颜色工具</div>
                          <span class="subtitle">为你的 UI 创建配色方案，并测试颜色的可访问性</span>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="module"></div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="color-color-palette" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            调色板
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <h1>调色板</h1>
              <p>该调色板包含了主色和强调色，可以用于插图或开发你的品牌色。这些经过设计的颜色可以灵活的搭配。调色板从主色开始，通过填充光谱为 Android、Web、iOS 创建了完整可用的调色板。Google 建议使用 500 色号的颜色作为主色，其他颜色作为强调色。</p>
              <p>主题通过设置表面阴影、阴影深度和墨迹不透明度来构建统一的应用样式。</p>
              <div class="modulettes">
                <a class="modulette download trackdl" download="" href="<?= static_url('../static/media/style/color/color_swatches.zip'); ?>" title="Download color swatches">
                  <img alt="" class="icon download-icon" src="<?= static_url('../static/spec/images/callouts/download.svg'); ?>" loading="lazy">
                  <div class="info">
                    <div class="title">下载调色板</div>
                    <span class="subtitle">0.02 MB (.zip) </span>
                  </div>
                  </img>
                </a>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module">
                    <div class="color-tag light" style="background-color: #F44336;">
                      <span class="group">Red</span>
                      <div class="details">
                        <span class="shade">500</span>
                        <span class="hex">#F44336</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FFEBEE;">
                      <div class="details">
                        <span class="shade">50</span>
                        <span class="hex">#FFEBEE</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FFCDD2;">
                      <div class="details">
                        <span class="shade">100</span>
                        <span class="hex">#FFCDD2</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #EF9A9A;">
                      <div class="details">
                        <span class="shade">200</span>
                        <span class="hex">#EF9A9A</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #E57373;">
                      <div class="details">
                        <span class="shade">300</span>
                        <span class="hex">#E57373</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #EF5350;">
                      <div class="details">
                        <span class="shade">400</span>
                        <span class="hex">#EF5350</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #F44336;">
                      <div class="details">
                        <span class="shade">500</span>
                        <span class="hex">#F44336</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #E53935;">
                      <div class="details">
                        <span class="shade">600</span>
                        <span class="hex">#E53935</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #D32F2F;">
                      <div class="details">
                        <span class="shade">700</span>
                        <span class="hex">#D32F2F</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #C62828;">
                      <div class="details">
                        <span class="shade">800</span>
                        <span class="hex">#C62828</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #B71C1C;">
                      <div class="details">
                        <span class="shade">900</span>
                        <span class="hex">#B71C1C</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FF8A80;">
                      <div class="details">
                        <span class="shade">A100</span>
                        <span class="hex">#FF8A80</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #FF5252;">
                      <div class="details">
                        <span class="shade">A200</span>
                        <span class="hex">#FF5252</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #FF1744;">
                      <div class="details">
                        <span class="shade">A400</span>
                        <span class="hex">#FF1744</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #D50000;">
                      <div class="details">
                        <span class="shade">A700</span>
                        <span class="hex">#D50000</span>
                      </div>
                    </div>
                  </div>
                  <div class="module">
                    <div class="color-tag light" style="background-color: #E91E63;">
                      <span class="group">Pink</span>
                      <div class="details">
                        <span class="shade">500</span>
                        <span class="hex">#E91E63</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FCE4EC;">
                      <div class="details">
                        <span class="shade">50</span>
                        <span class="hex">#FCE4EC</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #F8BBD0;">
                      <div class="details">
                        <span class="shade">100</span>
                        <span class="hex">#F8BBD0</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #F48FB1;">
                      <div class="details">
                        <span class="shade">200</span>
                        <span class="hex">#F48FB1</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #F06292;">
                      <div class="details">
                        <span class="shade">300</span>
                        <span class="hex">#F06292</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #EC407A;">
                      <div class="details">
                        <span class="shade">400</span>
                        <span class="hex">#EC407A</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #E91E63;">
                      <div class="details">
                        <span class="shade">500</span>
                        <span class="hex">#E91E63</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #D81B60;">
                      <div class="details">
                        <span class="shade">600</span>
                        <span class="hex">#D81B60</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #C2185B;">
                      <div class="details">
                        <span class="shade">700</span>
                        <span class="hex">#C2185B</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #AD1457;">
                      <div class="details">
                        <span class="shade">800</span>
                        <span class="hex">#AD1457</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #880E4F;">
                      <div class="details">
                        <span class="shade">900</span>
                        <span class="hex">#880E4F</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FF80AB;">
                      <div class="details">
                        <span class="shade">A100</span>
                        <span class="hex">#FF80AB</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #FF4081;">
                      <div class="details">
                        <span class="shade">A200</span>
                        <span class="hex">#FF4081</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #F50057;">
                      <div class="details">
                        <span class="shade">A400</span>
                        <span class="hex">#F50057</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #C51162;">
                      <div class="details">
                        <span class="shade">A700</span>
                        <span class="hex">#C51162</span>
                      </div>
                    </div>
                  </div>
                  <div class="module">
                    <div class="color-tag light" style="background-color: #9C27B0;">
                      <span class="group">Purple</span>
                      <div class="details">
                        <span class="shade">500</span>
                        <span class="hex">#9C27B0</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #F3E5F5;">
                      <div class="details">
                        <span class="shade">50</span>
                        <span class="hex">#F3E5F5</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #E1BEE7;">
                      <div class="details">
                        <span class="shade">100</span>
                        <span class="hex">#E1BEE7</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #CE93D8;">
                      <div class="details">
                        <span class="shade">200</span>
                        <span class="hex">#CE93D8</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #BA68C8;">
                      <div class="details">
                        <span class="shade">300</span>
                        <span class="hex">#BA68C8</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #AB47BC;">
                      <div class="details">
                        <span class="shade">400</span>
                        <span class="hex">#AB47BC</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #9C27B0;">
                      <div class="details">
                        <span class="shade">500</span>
                        <span class="hex">#9C27B0</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #8E24AA;">
                      <div class="details">
                        <span class="shade">600</span>
                        <span class="hex">#8E24AA</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #7B1FA2;">
                      <div class="details">
                        <span class="shade">700</span>
                        <span class="hex">#7B1FA2</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #6A1B9A;">
                      <div class="details">
                        <span class="shade">800</span>
                        <span class="hex">#6A1B9A</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #4A148C;">
                      <div class="details">
                        <span class="shade">900</span>
                        <span class="hex">#4A148C</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #EA80FC;">
                      <div class="details">
                        <span class="shade">A100</span>
                        <span class="hex">#EA80FC</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #E040FB;">
                      <div class="details">
                        <span class="shade">A200</span>
                        <span class="hex">#E040FB</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #D500F9;">
                      <div class="details">
                        <span class="shade">A400</span>
                        <span class="hex">#D500F9</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #AA00FF;">
                      <div class="details">
                        <span class="shade">A700</span>
                        <span class="hex">#AA00FF</span>
                      </div>
                    </div>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <div class="color-tag light" style="background-color: #673AB7;">
                      <span class="group">Deep Purple</span>
                      <div class="details">
                        <span class="shade">500</span>
                        <span class="hex">#673AB7</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #EDE7F6;">
                      <div class="details">
                        <span class="shade">50</span>
                        <span class="hex">#EDE7F6</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #D1C4E9;">
                      <div class="details">
                        <span class="shade">100</span>
                        <span class="hex">#D1C4E9</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #B39DDB;">
                      <div class="details">
                        <span class="shade">200</span>
                        <span class="hex">#B39DDB</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #9575CD;">
                      <div class="details">
                        <span class="shade">300</span>
                        <span class="hex">#9575CD</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #7E57C2;">
                      <div class="details">
                        <span class="shade">400</span>
                        <span class="hex">#7E57C2</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #673AB7;">
                      <div class="details">
                        <span class="shade">500</span>
                        <span class="hex">#673AB7</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #5E35B1;">
                      <div class="details">
                        <span class="shade">600</span>
                        <span class="hex">#5E35B1</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #512DA8;">
                      <div class="details">
                        <span class="shade">700</span>
                        <span class="hex">#512DA8</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #4527A0;">
                      <div class="details">
                        <span class="shade">800</span>
                        <span class="hex">#4527A0</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #311B92;">
                      <div class="details">
                        <span class="shade">900</span>
                        <span class="hex">#311B92</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #B388FF;">
                      <div class="details">
                        <span class="shade">A100</span>
                        <span class="hex">#B388FF</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #7C4DFF;">
                      <div class="details">
                        <span class="shade">A200</span>
                        <span class="hex">#7C4DFF</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #651FFF;">
                      <div class="details">
                        <span class="shade">A400</span>
                        <span class="hex">#651FFF</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #6200EA;">
                      <div class="details">
                        <span class="shade">A700</span>
                        <span class="hex">#6200EA</span>
                      </div>
                    </div>
                  </div>
                  <div class="module">
                    <div class="color-tag light" style="background-color: #3F51B5;">
                      <span class="group">Indigo</span>
                      <div class="details">
                        <span class="shade">500</span>
                        <span class="hex">#3F51B5</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #E8EAF6;">
                      <div class="details">
                        <span class="shade">50</span>
                        <span class="hex">#E8EAF6</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #C5CAE9;">
                      <div class="details">
                        <span class="shade">100</span>
                        <span class="hex">#C5CAE9</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #9FA8DA;">
                      <div class="details">
                        <span class="shade">200</span>
                        <span class="hex">#9FA8DA</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #7986CB;">
                      <div class="details">
                        <span class="shade">300</span>
                        <span class="hex">#7986CB</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #5C6BC0;">
                      <div class="details">
                        <span class="shade">400</span>
                        <span class="hex">#5C6BC0</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #3F51B5;">
                      <div class="details">
                        <span class="shade">500</span>
                        <span class="hex">#3F51B5</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #3949AB;">
                      <div class="details">
                        <span class="shade">600</span>
                        <span class="hex">#3949AB</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #303F9F;">
                      <div class="details">
                        <span class="shade">700</span>
                        <span class="hex">#303F9F</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #283593;">
                      <div class="details">
                        <span class="shade">800</span>
                        <span class="hex">#283593</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #1A237E;">
                      <div class="details">
                        <span class="shade">900</span>
                        <span class="hex">#1A237E</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #8C9EFF;">
                      <div class="details">
                        <span class="shade">A100</span>
                        <span class="hex">#8C9EFF</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #536DFE;">
                      <div class="details">
                        <span class="shade">A200</span>
                        <span class="hex">#536DFE</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #3D5AFE;">
                      <div class="details">
                        <span class="shade">A400</span>
                        <span class="hex">#3D5AFE</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #304FFE;">
                      <div class="details">
                        <span class="shade">A700</span>
                        <span class="hex">#304FFE</span>
                      </div>
                    </div>
                  </div>
                  <div class="module">
                    <div class="color-tag dark" style="background-color: #2196F3;">
                      <span class="group">Blue</span>
                      <div class="details">
                        <span class="shade">500</span>
                        <span class="hex">#2196F3</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #E3F2FD;">
                      <div class="details">
                        <span class="shade">50</span>
                        <span class="hex">#E3F2FD</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #BBDEFB;">
                      <div class="details">
                        <span class="shade">100</span>
                        <span class="hex">#BBDEFB</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #90CAF9;">
                      <div class="details">
                        <span class="shade">200</span>
                        <span class="hex">#90CAF9</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #64B5F6;">
                      <div class="details">
                        <span class="shade">300</span>
                        <span class="hex">#64B5F6</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #42A5F5;">
                      <div class="details">
                        <span class="shade">400</span>
                        <span class="hex">#42A5F5</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #2196F3;">
                      <div class="details">
                        <span class="shade">500</span>
                        <span class="hex">#2196F3</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #1E88E5;">
                      <div class="details">
                        <span class="shade">600</span>
                        <span class="hex">#1E88E5</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #1976D2;">
                      <div class="details">
                        <span class="shade">700</span>
                        <span class="hex">#1976D2</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #1565C0;">
                      <div class="details">
                        <span class="shade">800</span>
                        <span class="hex">#1565C0</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #0D47A1;">
                      <div class="details">
                        <span class="shade">900</span>
                        <span class="hex">#0D47A1</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #82B1FF;">
                      <div class="details">
                        <span class="shade">A100</span>
                        <span class="hex">#82B1FF</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #448AFF;">
                      <div class="details">
                        <span class="shade">A200</span>
                        <span class="hex">#448AFF</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #2979FF;">
                      <div class="details">
                        <span class="shade">A400</span>
                        <span class="hex">#2979FF</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #2962FF;">
                      <div class="details">
                        <span class="shade">A700</span>
                        <span class="hex">#2962FF</span>
                      </div>
                    </div>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <div class="color-tag dark" style="background-color: #03A9F4;">
                      <span class="group">Light Blue</span>
                      <div class="details">
                        <span class="shade">500</span>
                        <span class="hex">#03A9F4</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #E1F5FE;">
                      <div class="details">
                        <span class="shade">50</span>
                        <span class="hex">#E1F5FE</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #B3E5FC;">
                      <div class="details">
                        <span class="shade">100</span>
                        <span class="hex">#B3E5FC</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #81D4FA;">
                      <div class="details">
                        <span class="shade">200</span>
                        <span class="hex">#81D4FA</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #4FC3F7;">
                      <div class="details">
                        <span class="shade">300</span>
                        <span class="hex">#4FC3F7</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #29B6F6;">
                      <div class="details">
                        <span class="shade">400</span>
                        <span class="hex">#29B6F6</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #03A9F4;">
                      <div class="details">
                        <span class="shade">500</span>
                        <span class="hex">#03A9F4</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #039BE5;">
                      <div class="details">
                        <span class="shade">600</span>
                        <span class="hex">#039BE5</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #0288D1;">
                      <div class="details">
                        <span class="shade">700</span>
                        <span class="hex">#0288D1</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #0277BD;">
                      <div class="details">
                        <span class="shade">800</span>
                        <span class="hex">#0277BD</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #01579B;">
                      <div class="details">
                        <span class="shade">900</span>
                        <span class="hex">#01579B</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #80D8FF;">
                      <div class="details">
                        <span class="shade">A100</span>
                        <span class="hex">#80D8FF</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #40C4FF;">
                      <div class="details">
                        <span class="shade">A200</span>
                        <span class="hex">#40C4FF</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #00B0FF;">
                      <div class="details">
                        <span class="shade">A400</span>
                        <span class="hex">#00B0FF</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #0091EA;">
                      <div class="details">
                        <span class="shade">A700</span>
                        <span class="hex">#0091EA</span>
                      </div>
                    </div>
                  </div>
                  <div class="module">
                    <div class="color-tag dark" style="background-color: #00BCD4;">
                      <span class="group">Cyan</span>
                      <div class="details">
                        <span class="shade">500</span>
                        <span class="hex">#00BCD4</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #E0F7FA;">
                      <div class="details">
                        <span class="shade">50</span>
                        <span class="hex">#E0F7FA</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #B2EBF2;">
                      <div class="details">
                        <span class="shade">100</span>
                        <span class="hex">#B2EBF2</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #80DEEA;">
                      <div class="details">
                        <span class="shade">200</span>
                        <span class="hex">#80DEEA</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #4DD0E1;">
                      <div class="details">
                        <span class="shade">300</span>
                        <span class="hex">#4DD0E1</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #26C6DA;">
                      <div class="details">
                        <span class="shade">400</span>
                        <span class="hex">#26C6DA</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #00BCD4;">
                      <div class="details">
                        <span class="shade">500</span>
                        <span class="hex">#00BCD4</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #00ACC1;">
                      <div class="details">
                        <span class="shade">600</span>
                        <span class="hex">#00ACC1</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #0097A7;">
                      <div class="details">
                        <span class="shade">700</span>
                        <span class="hex">#0097A7</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #00838F;">
                      <div class="details">
                        <span class="shade">800</span>
                        <span class="hex">#00838F</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #006064;">
                      <div class="details">
                        <span class="shade">900</span>
                        <span class="hex">#006064</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #84FFFF;">
                      <div class="details">
                        <span class="shade">A100</span>
                        <span class="hex">#84FFFF</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #18FFFF;">
                      <div class="details">
                        <span class="shade">A200</span>
                        <span class="hex">#18FFFF</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #00E5FF;">
                      <div class="details">
                        <span class="shade">A400</span>
                        <span class="hex">#00E5FF</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #00B8D4;">
                      <div class="details">
                        <span class="shade">A700</span>
                        <span class="hex">#00B8D4</span>
                      </div>
                    </div>
                  </div>
                  <div class="module">
                    <div class="color-tag light" style="background-color: #009688;">
                      <span class="group">Teal</span>
                      <div class="details">
                        <span class="shade">500</span>
                        <span class="hex">#009688</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #E0F2F1;">
                      <div class="details">
                        <span class="shade">50</span>
                        <span class="hex">#E0F2F1</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #B2DFDB;">
                      <div class="details">
                        <span class="shade">100</span>
                        <span class="hex">#B2DFDB</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #80CBC4;">
                      <div class="details">
                        <span class="shade">200</span>
                        <span class="hex">#80CBC4</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #4DB6AC;">
                      <div class="details">
                        <span class="shade">300</span>
                        <span class="hex">#4DB6AC</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #26A69A;">
                      <div class="details">
                        <span class="shade">400</span>
                        <span class="hex">#26A69A</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #009688;">
                      <div class="details">
                        <span class="shade">500</span>
                        <span class="hex">#009688</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #00897B;">
                      <div class="details">
                        <span class="shade">600</span>
                        <span class="hex">#00897B</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #00796B;">
                      <div class="details">
                        <span class="shade">700</span>
                        <span class="hex">#00796B</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #00695C;">
                      <div class="details">
                        <span class="shade">800</span>
                        <span class="hex">#00695C</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #004D40;">
                      <div class="details">
                        <span class="shade">900</span>
                        <span class="hex">#004D40</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #A7FFEB;">
                      <div class="details">
                        <span class="shade">A100</span>
                        <span class="hex">#A7FFEB</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #64FFDA;">
                      <div class="details">
                        <span class="shade">A200</span>
                        <span class="hex">#64FFDA</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #1DE9B6;">
                      <div class="details">
                        <span class="shade">A400</span>
                        <span class="hex">#1DE9B6</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #00BFA5;">
                      <div class="details">
                        <span class="shade">A700</span>
                        <span class="hex">#00BFA5</span>
                      </div>
                    </div>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <div class="color-tag dark" style="background-color: #4CAF50;">
                      <span class="group">Green</span>
                      <div class="details">
                        <span class="shade">500</span>
                        <span class="hex">#4CAF50</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #E8F5E9;">
                      <div class="details">
                        <span class="shade">50</span>
                        <span class="hex">#E8F5E9</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #C8E6C9;">
                      <div class="details">
                        <span class="shade">100</span>
                        <span class="hex">#C8E6C9</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #A5D6A7;">
                      <div class="details">
                        <span class="shade">200</span>
                        <span class="hex">#A5D6A7</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #81C784;">
                      <div class="details">
                        <span class="shade">300</span>
                        <span class="hex">#81C784</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #66BB6A;">
                      <div class="details">
                        <span class="shade">400</span>
                        <span class="hex">#66BB6A</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #4CAF50;">
                      <div class="details">
                        <span class="shade">500</span>
                        <span class="hex">#4CAF50</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #43A047;">
                      <div class="details">
                        <span class="shade">600</span>
                        <span class="hex">#43A047</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #388E3C;">
                      <div class="details">
                        <span class="shade">700</span>
                        <span class="hex">#388E3C</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #2E7D32;">
                      <div class="details">
                        <span class="shade">800</span>
                        <span class="hex">#2E7D32</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #1B5E20;">
                      <div class="details">
                        <span class="shade">900</span>
                        <span class="hex">#1B5E20</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #B9F6CA;">
                      <div class="details">
                        <span class="shade">A100</span>
                        <span class="hex">#B9F6CA</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #69F0AE;">
                      <div class="details">
                        <span class="shade">A200</span>
                        <span class="hex">#69F0AE</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #00E676;">
                      <div class="details">
                        <span class="shade">A400</span>
                        <span class="hex">#00E676</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #00C853;">
                      <div class="details">
                        <span class="shade">A700</span>
                        <span class="hex">#00C853</span>
                      </div>
                    </div>
                  </div>
                  <div class="module">
                    <div class="color-tag dark" style="background-color: #8BC34A;">
                      <span class="group">Light Green</span>
                      <div class="details">
                        <span class="shade">500</span>
                        <span class="hex">#8BC34A</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #F1F8E9;">
                      <div class="details">
                        <span class="shade">50</span>
                        <span class="hex">#F1F8E9</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #DCEDC8;">
                      <div class="details">
                        <span class="shade">100</span>
                        <span class="hex">#DCEDC8</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #C5E1A5;">
                      <div class="details">
                        <span class="shade">200</span>
                        <span class="hex">#C5E1A5</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #AED581;">
                      <div class="details">
                        <span class="shade">300</span>
                        <span class="hex">#AED581</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #9CCC65;">
                      <div class="details">
                        <span class="shade">400</span>
                        <span class="hex">#9CCC65</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #8BC34A;">
                      <div class="details">
                        <span class="shade">500</span>
                        <span class="hex">#8BC34A</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #7CB342;">
                      <div class="details">
                        <span class="shade">600</span>
                        <span class="hex">#7CB342</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #689F38;">
                      <div class="details">
                        <span class="shade">700</span>
                        <span class="hex">#689F38</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #558B2F;">
                      <div class="details">
                        <span class="shade">800</span>
                        <span class="hex">#558B2F</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #33691E;">
                      <div class="details">
                        <span class="shade">900</span>
                        <span class="hex">#33691E</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #CCFF90;">
                      <div class="details">
                        <span class="shade">A100</span>
                        <span class="hex">#CCFF90</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #B2FF59;">
                      <div class="details">
                        <span class="shade">A200</span>
                        <span class="hex">#B2FF59</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #76FF03;">
                      <div class="details">
                        <span class="shade">A400</span>
                        <span class="hex">#76FF03</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #64DD17;">
                      <div class="details">
                        <span class="shade">A700</span>
                        <span class="hex">#64DD17</span>
                      </div>
                    </div>
                  </div>
                  <div class="module">
                    <div class="color-tag dark" style="background-color: #CDDC39;">
                      <span class="group">Lime</span>
                      <div class="details">
                        <span class="shade">500</span>
                        <span class="hex">#CDDC39</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #F9FBE7;">
                      <div class="details">
                        <span class="shade">50</span>
                        <span class="hex">#F9FBE7</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #F0F4C3;">
                      <div class="details">
                        <span class="shade">100</span>
                        <span class="hex">#F0F4C3</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #E6EE9C;">
                      <div class="details">
                        <span class="shade">200</span>
                        <span class="hex">#E6EE9C</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #DCE775;">
                      <div class="details">
                        <span class="shade">300</span>
                        <span class="hex">#DCE775</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #D4E157;">
                      <div class="details">
                        <span class="shade">400</span>
                        <span class="hex">#D4E157</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #CDDC39;">
                      <div class="details">
                        <span class="shade">500</span>
                        <span class="hex">#CDDC39</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #C0CA33;">
                      <div class="details">
                        <span class="shade">600</span>
                        <span class="hex">#C0CA33</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #AFB42B;">
                      <div class="details">
                        <span class="shade">700</span>
                        <span class="hex">#AFB42B</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #9E9D24;">
                      <div class="details">
                        <span class="shade">800</span>
                        <span class="hex">#9E9D24</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #827717;">
                      <div class="details">
                        <span class="shade">900</span>
                        <span class="hex">#827717</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #F4FF81;">
                      <div class="details">
                        <span class="shade">A100</span>
                        <span class="hex">#F4FF81</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #EEFF41;">
                      <div class="details">
                        <span class="shade">A200</span>
                        <span class="hex">#EEFF41</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #C6FF00;">
                      <div class="details">
                        <span class="shade">A400</span>
                        <span class="hex">#C6FF00</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #AEEA00;">
                      <div class="details">
                        <span class="shade">A700</span>
                        <span class="hex">#AEEA00</span>
                      </div>
                    </div>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <div class="color-tag dark" style="background-color: #FFEB3B;">
                      <span class="group">Yellow</span>
                      <div class="details">
                        <span class="shade">500</span>
                        <span class="hex">#FFEB3B</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FFFDE7;">
                      <div class="details">
                        <span class="shade">50</span>
                        <span class="hex">#FFFDE7</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FFF9C4;">
                      <div class="details">
                        <span class="shade">100</span>
                        <span class="hex">#FFF9C4</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FFF59D;">
                      <div class="details">
                        <span class="shade">200</span>
                        <span class="hex">#FFF59D</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FFF176;">
                      <div class="details">
                        <span class="shade">300</span>
                        <span class="hex">#FFF176</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FFEE58;">
                      <div class="details">
                        <span class="shade">400</span>
                        <span class="hex">#FFEE58</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FFEB3B;">
                      <div class="details">
                        <span class="shade">500</span>
                        <span class="hex">#FFEB3B</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FDD835;">
                      <div class="details">
                        <span class="shade">600</span>
                        <span class="hex">#FDD835</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FBC02D;">
                      <div class="details">
                        <span class="shade">700</span>
                        <span class="hex">#FBC02D</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #F9A825;">
                      <div class="details">
                        <span class="shade">800</span>
                        <span class="hex">#F9A825</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #F57F17;">
                      <div class="details">
                        <span class="shade">900</span>
                        <span class="hex">#F57F17</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FFFF8D;">
                      <div class="details">
                        <span class="shade">A100</span>
                        <span class="hex">#FFFF8D</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FFFF00;">
                      <div class="details">
                        <span class="shade">A200</span>
                        <span class="hex">#FFFF00</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FFEA00;">
                      <div class="details">
                        <span class="shade">A400</span>
                        <span class="hex">#FFEA00</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FFD600;">
                      <div class="details">
                        <span class="shade">A700</span>
                        <span class="hex">#FFD600</span>
                      </div>
                    </div>
                  </div>
                  <div class="module">
                    <div class="color-tag dark" style="background-color: #FFC107;">
                      <span class="group">Amber</span>
                      <div class="details">
                        <span class="shade">500</span>
                        <span class="hex">#FFC107</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FFF8E1;">
                      <div class="details">
                        <span class="shade">50</span>
                        <span class="hex">#FFF8E1</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FFECB3;">
                      <div class="details">
                        <span class="shade">100</span>
                        <span class="hex">#FFECB3</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FFE082;">
                      <div class="details">
                        <span class="shade">200</span>
                        <span class="hex">#FFE082</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FFD54F;">
                      <div class="details">
                        <span class="shade">300</span>
                        <span class="hex">#FFD54F</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FFCA28;">
                      <div class="details">
                        <span class="shade">400</span>
                        <span class="hex">#FFCA28</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FFC107;">
                      <div class="details">
                        <span class="shade">500</span>
                        <span class="hex">#FFC107</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FFB300;">
                      <div class="details">
                        <span class="shade">600</span>
                        <span class="hex">#FFB300</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FFA000;">
                      <div class="details">
                        <span class="shade">700</span>
                        <span class="hex">#FFA000</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FF8F00;">
                      <div class="details">
                        <span class="shade">800</span>
                        <span class="hex">#FF8F00</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FF6F00;">
                      <div class="details">
                        <span class="shade">900</span>
                        <span class="hex">#FF6F00</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FFE57F;">
                      <div class="details">
                        <span class="shade">A100</span>
                        <span class="hex">#FFE57F</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FFD740;">
                      <div class="details">
                        <span class="shade">A200</span>
                        <span class="hex">#FFD740</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FFC400;">
                      <div class="details">
                        <span class="shade">A400</span>
                        <span class="hex">#FFC400</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FFAB00;">
                      <div class="details">
                        <span class="shade">A700</span>
                        <span class="hex">#FFAB00</span>
                      </div>
                    </div>
                  </div>
                  <div class="module">
                    <div class="color-tag dark" style="background-color: #FF9800;">
                      <span class="group">Orange</span>
                      <div class="details">
                        <span class="shade">500</span>
                        <span class="hex">#FF9800</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FFF3E0;">
                      <div class="details">
                        <span class="shade">50</span>
                        <span class="hex">#FFF3E0</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FFE0B2;">
                      <div class="details">
                        <span class="shade">100</span>
                        <span class="hex">#FFE0B2</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FFCC80;">
                      <div class="details">
                        <span class="shade">200</span>
                        <span class="hex">#FFCC80</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FFB74D;">
                      <div class="details">
                        <span class="shade">300</span>
                        <span class="hex">#FFB74D</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FFA726;">
                      <div class="details">
                        <span class="shade">400</span>
                        <span class="hex">#FFA726</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FF9800;">
                      <div class="details">
                        <span class="shade">500</span>
                        <span class="hex">#FF9800</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FB8C00;">
                      <div class="details">
                        <span class="shade">600</span>
                        <span class="hex">#FB8C00</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #F57C00;">
                      <div class="details">
                        <span class="shade">700</span>
                        <span class="hex">#F57C00</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #EF6C00;">
                      <div class="details">
                        <span class="shade">800</span>
                        <span class="hex">#EF6C00</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #E65100;">
                      <div class="details">
                        <span class="shade">900</span>
                        <span class="hex">#E65100</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FFD180;">
                      <div class="details">
                        <span class="shade">A100</span>
                        <span class="hex">#FFD180</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FFAB40;">
                      <div class="details">
                        <span class="shade">A200</span>
                        <span class="hex">#FFAB40</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FF9100;">
                      <div class="details">
                        <span class="shade">A400</span>
                        <span class="hex">#FF9100</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FF6D00;">
                      <div class="details">
                        <span class="shade">A700</span>
                        <span class="hex">#FF6D00</span>
                      </div>
                    </div>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <div class="color-tag dark" style="background-color: #FF5722;">
                      <span class="group">Deep Orange</span>
                      <div class="details">
                        <span class="shade">500</span>
                        <span class="hex">#FF5722</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FBE9E7;">
                      <div class="details">
                        <span class="shade">50</span>
                        <span class="hex">#FBE9E7</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FFCCBC;">
                      <div class="details">
                        <span class="shade">100</span>
                        <span class="hex">#FFCCBC</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FFAB91;">
                      <div class="details">
                        <span class="shade">200</span>
                        <span class="hex">#FFAB91</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FF8A65;">
                      <div class="details">
                        <span class="shade">300</span>
                        <span class="hex">#FF8A65</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FF7043;">
                      <div class="details">
                        <span class="shade">400</span>
                        <span class="hex">#FF7043</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FF5722;">
                      <div class="details">
                        <span class="shade">500</span>
                        <span class="hex">#FF5722</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #F4511E;">
                      <div class="details">
                        <span class="shade">600</span>
                        <span class="hex">#F4511E</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #E64A19;">
                      <div class="details">
                        <span class="shade">700</span>
                        <span class="hex">#E64A19</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #D84315;">
                      <div class="details">
                        <span class="shade">800</span>
                        <span class="hex">#D84315</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #BF360C;">
                      <div class="details">
                        <span class="shade">900</span>
                        <span class="hex">#BF360C</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FF9E80;">
                      <div class="details">
                        <span class="shade">A100</span>
                        <span class="hex">#FF9E80</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FF6E40;">
                      <div class="details">
                        <span class="shade">A200</span>
                        <span class="hex">#FF6E40</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #FF3D00;">
                      <div class="details">
                        <span class="shade">A400</span>
                        <span class="hex">#FF3D00</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #DD2C00;">
                      <div class="details">
                        <span class="shade">A700</span>
                        <span class="hex">#DD2C00</span>
                      </div>
                    </div>
                  </div>
                  <div class="module">
                    <div class="color-tag light" style="background-color: #795548;">
                      <span class="group">Brown</span>
                      <div class="details">
                        <span class="shade">500</span>
                        <span class="hex">#795548</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #EFEBE9;">
                      <div class="details">
                        <span class="shade">50</span>
                        <span class="hex">#EFEBE9</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #D7CCC8;">
                      <div class="details">
                        <span class="shade">100</span>
                        <span class="hex">#D7CCC8</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #BCAAA4;">
                      <div class="details">
                        <span class="shade">200</span>
                        <span class="hex">#BCAAA4</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #A1887F;">
                      <div class="details">
                        <span class="shade">300</span>
                        <span class="hex">#A1887F</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #8D6E63;">
                      <div class="details">
                        <span class="shade">400</span>
                        <span class="hex">#8D6E63</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #795548;">
                      <div class="details">
                        <span class="shade">500</span>
                        <span class="hex">#795548</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #6D4C41;">
                      <div class="details">
                        <span class="shade">600</span>
                        <span class="hex">#6D4C41</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #5D4037;">
                      <div class="details">
                        <span class="shade">700</span>
                        <span class="hex">#5D4037</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #4E342E;">
                      <div class="details">
                        <span class="shade">800</span>
                        <span class="hex">#4E342E</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #3E2723;">
                      <div class="details">
                        <span class="shade">900</span>
                        <span class="hex">#3E2723</span>
                      </div>
                    </div>
                  </div>
                  <div class="module">
                    <div class="color-tag dark" style="background-color: #9E9E9E;">
                      <span class="group">Grey</span>
                      <div class="details">
                        <span class="shade">500</span>
                        <span class="hex">#9E9E9E</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FAFAFA;">
                      <div class="details">
                        <span class="shade">50</span>
                        <span class="hex">#FAFAFA</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #F5F5F5;">
                      <div class="details">
                        <span class="shade">100</span>
                        <span class="hex">#F5F5F5</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #EEEEEE;">
                      <div class="details">
                        <span class="shade">200</span>
                        <span class="hex">#EEEEEE</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #E0E0E0;">
                      <div class="details">
                        <span class="shade">300</span>
                        <span class="hex">#E0E0E0</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #BDBDBD;">
                      <div class="details">
                        <span class="shade">400</span>
                        <span class="hex">#BDBDBD</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #9E9E9E;">
                      <div class="details">
                        <span class="shade">500</span>
                        <span class="hex">#9E9E9E</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #757575;">
                      <div class="details">
                        <span class="shade">600</span>
                        <span class="hex">#757575</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #616161;">
                      <div class="details">
                        <span class="shade">700</span>
                        <span class="hex">#616161</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #424242;">
                      <div class="details">
                        <span class="shade">800</span>
                        <span class="hex">#424242</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #212121;">
                      <div class="details">
                        <span class="shade">900</span>
                        <span class="hex">#212121</span>
                      </div>
                    </div>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <div class="color-tag light" style="background-color: #607D8B;">
                      <span class="group">Blue Grey</span>
                      <div class="details">
                        <span class="shade">500</span>
                        <span class="hex">#607D8B</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #ECEFF1;">
                      <div class="details">
                        <span class="shade">50</span>
                        <span class="hex">#ECEFF1</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #CFD8DC;">
                      <div class="details">
                        <span class="shade">100</span>
                        <span class="hex">#CFD8DC</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #B0BEC5;">
                      <div class="details">
                        <span class="shade">200</span>
                        <span class="hex">#B0BEC5</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #90A4AE;">
                      <div class="details">
                        <span class="shade">300</span>
                        <span class="hex">#90A4AE</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #78909C;">
                      <div class="details">
                        <span class="shade">400</span>
                        <span class="hex">#78909C</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #607D8B;">
                      <div class="details">
                        <span class="shade">500</span>
                        <span class="hex">#607D8B</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #546E7A;">
                      <div class="details">
                        <span class="shade">600</span>
                        <span class="hex">#546E7A</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #455A64;">
                      <div class="details">
                        <span class="shade">700</span>
                        <span class="hex">#455A64</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #37474F;">
                      <div class="details">
                        <span class="shade">800</span>
                        <span class="hex">#37474F</span>
                      </div>
                    </div>
                    <div class="color-tag light" style="background-color: #263238;">
                      <div class="details">
                        <span class="shade">900</span>
                        <span class="hex">#263238</span>
                      </div>
                    </div>
                  </div>
                  <div class="module">
                    <div class="color-tag light" style="background-color: #000000;">
                      <div class="details">
                        <span class="shade">Black</span>
                        <span class="hex">#000000</span>
                      </div>
                    </div>
                    <div class="color-tag dark" style="background-color: #FFFFFF;">
                      <div class="details">
                        <span class="shade">White</span>
                        <span class="hex">#FFFFFF</span>
                      </div>
                    </div>
                  </div>
                  <div class="module">
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="color-color-system" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            颜色系统
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <h1>选择配色方案</h1>
              <p>你可以自定义应用的调色板，以适配你的品牌颜色。或者，你可以使用 Material Design 的调色板创建一个全新的配色方案。</p>
              <p>创建配色方案时：</p>
              <ul class="lst-kix_4sscl52b7rwh-0 start">
                <li>使用 <a href="color.html#color-the-color-tool">颜色工具</a> 创建调色板，并在应用中使用</li>
                <li>确保应用的颜色满足无障碍标准，且元素之间有充分的对比度</li>
              </ul>
              <p>
                <div class="modulettes">
                  <a class="modulette container gd" href="https://design.google.com/articles/expressing-brand-in-material/" target="_blank">
                    <img alt="" class="icon callout-icon" src="<?= static_url('../static/spec/images/callouts/gd.svg'); ?>" loading="lazy">
                      <div class="info">
                        <div class="title">在材料中表现品牌</div>
                      </div>
                    </img>
                  </a>
                </div>
              在 Material Design 中保持品牌化的分步指导
              </p>
              <h1>Material Design 的颜色系统</h1>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>在 Material Design 中，<strong>主色</strong> 应该是应用中出现最频繁的颜色，<strong>辅助色</strong> 则是用来强调 UI 中关键部分的颜色。</p>
                    <p>使用 Material Design 调色板中的颜色是可选的。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1000px">
                        <div class="frame " style="padding-top: 91.3%">
                          <img alt="" aria-describedby="color-system-figure-caption-0" src="<?= static_url('../static/media/style/color/style_color_colorscheme_palette1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-0">
                        <p>该配色方案中有一个主色，以及颜色较深和较浅版本的主色，和一个辅助色。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="color-system-figure-caption-1" src="<?= static_url('../static/media/style/color/style_color_colorscheme_palette1_example.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-1">
                        <p>在使用主色的区域下方，相关信息使用了颜色更浅的主色进行着色。浮动操作按钮使用辅助色进行强调。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1000px">
                        <div class="frame " style="padding-top: 56.7%">
                          <img alt="" aria-describedby="color-system-figure-caption-2" src="<?= static_url('../static/media/style/color/style_color_colorsystem_pesto_palette_161116.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-2">
                        <p>此配色方案包含主色，和颜色较深和较浅版本的主色。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1000px">
                        <div class="frame " style="padding-top: 177.8%">
                          <img alt="" aria-describedby="color-system-figure-caption-3" src="<?= static_url('../static/media/style/color/style_color_colorsystem_pesto_full_161116.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-3">
                        <p>主色应用于工具栏和状态栏，同时也被用于强调浮动操作按钮。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <p></p>
              <h1>主色</h1>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <p>主色是应用中出现最频繁的颜色。如果没有使用辅助色的话，也可以用主色来强调元素。</p>
                    <p>要在元素之间创造对比度，可以使用较浅或较深色调的主色。较浅和较深的色调之间的对比度有助于区分不同的表面，例如区分状态栏和工具栏。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1500px">
                        <div class="frame " style="padding-top: 67.8%">
                          <img alt="" aria-describedby="color-system-figure-caption-4" src="<?= static_url('../static/media/style/color/style_color_uiapplication_palette1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-4">
                        <p>此配色方案包含不同色调的主色，因为需要用到较浅和较深色调之间的对比度。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>辅助色</h1>
                    <p>辅助色用于强调 UI 中的选择部分。辅助色可以是和主色互补的，也可以是和主色类似的，但它不应该只是简单的对主色进行加深或变浅。辅助色应该和它周围的元素形成对比，并作为强调，且应谨慎使用。</p>
                    <p>辅助色最适合用于：</p>
                    <ul class="lst-kix_s7tyq6hoyjsd-0 start">
                      <li>按钮、浮动操作按钮、按钮文本</li>
                      <li>文本框、光标、文本选择</li>
                      <li>进度条</li>
                      <li>选择控件、按钮、滑块</li>
                      <li>链接</li>
                      <li>标题</li>
                    </ul>
                    <p>使用辅助色是可选的。如果你使用了主色的变体来强调元素，则不需要辅助色。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1500px">
                        <div class="frame " style="padding-top: 67.8%">
                          <img alt="" aria-describedby="color-system-figure-caption-5" src="<?= static_url('../static/media/style/color/style_color_uiapplication_palette2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-5">
                        <p>具有不同色调的辅助色配色方案。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1000px">
                        <div class="frame " style="padding-top: 67.8%">
                          <img alt="" aria-describedby="color-system-figure-caption-6" src="<?= static_url('../static/media/style/color/style_color_colorsystem_gray_secondary_161116.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-6">
                        <p>辅助色配色方案不需要有多种颜色。它只需要和周围的元素形成对比，且应在 UI 中谨慎使用。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <p></p>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>在应用中使用颜色</h1>
                    <p>大型 UI 区域和元素应该使用主色进行着色。辅助色可用于强调较小的区域。如果没有辅助色，则可以在这些区域中使用主色。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 122.222222222%">
                          <img alt="" aria-describedby="color-system-figure-caption-7" src="<?= static_url('../static/media/style/color/style_color_uiapplication_accent1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-7">
                        <p>浮动操作按钮使用辅助色进行强调，但是电话图标使用了主色。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 122.222222222%">
                          <img alt="" aria-describedby="color-system-figure-caption-8" src="<?= static_url('../static/media/style/color/style_color_uiapplication_accent2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-8">
                        <p>开关使用辅助色进行强调。系统栏使用主色，而工具栏使用了较浅的主色。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>使用主色来强调元素，例如按钮和复选框。</p>
                    <p>罕见的元素（如警告）应该和其他元素有明显的区分，不能使用主色。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1000px">
                        <div class="frame " style="padding-top: 122.4%">
                          <img alt="" aria-describedby="color-system-figure-caption-9" src="<?= static_url('../static/media/style/color/style_color_colorsystem_primaryswatch_161116.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-9">
                        <p>使用主色作为强调，来表明按钮和复选框已被选中。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1000px">
                        <div class="frame " style="padding-top: 122.2%">
                          <img alt="" aria-describedby="color-system-figure-caption-10" src="<?= static_url('../static/media/style/color/style_color_colorscheme_accentcolor_links.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-10">
                        <p>辅助色可以用在有代表性的元素上，例如按钮和链接。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>辅助色，以及其他的用于强调 UI 中某部分的颜色，应该谨慎使用。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 122.222222222%">
                          <img alt="" aria-describedby="color-system-figure-caption-11" src="<?= static_url('../static/media/style/color/style_color_uiapplication_accent3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-11">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>对某些文本使用强调色，例如链接文本。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 122.222222222%">
                          <img alt="" aria-describedby="color-system-figure-caption-12" src="<?= static_url('../static/media/style/color/style_color_uiapplication_accent4.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-12">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>不要在正文中使用明亮的颜色，即使你的主色或辅助色是明亮的。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>有关颜色的更多排版易读性的指南，请参阅 <a href="color.html#color-the-color-tool">颜色工具</a>。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1000px">
                        <div class="frame " style="padding-top: 122.2%">
                          <img alt="" aria-describedby="color-system-figure-caption-13" src="<?= static_url('../static/media/style/color/style_color_colorsystem_tonallink_161116.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-13">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>你可以使用主色来强调链接。</p>
                        <p></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1000px">
                        <div class="frame " style="padding-top: 122.2%">
                          <img alt="" aria-describedby="color-system-figure-caption-14" src="<?= static_url('../static/media/style/color/style_color_colorsystem_color_headline_161116-05.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-14">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>使用主色或强调色来强调较短的文本，如标题。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1000px">
                        <div class="frame " style="padding-top: 122.2%">
                          <img alt="" aria-describedby="color-system-figure-caption-15" src="<?= static_url('../static/media/style/color/style_color_uiapplication_accent5.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-15">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>在主要操作按钮上使用辅助色。</p>
                        <p></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1000px">
                        <div class="frame " style="padding-top: 122.2%">
                          <img alt="" aria-describedby="color-system-figure-caption-16" src="<?= static_url('../static/media/style/color/style_color_uiapplication_accent6.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-16">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>不要在应用栏、较大的色块区域上使用辅助色。如果浮动操作按钮位于辅助色背景上，则不要在浮动操作按钮上使用辅助色。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1000px">
                        <div class="frame " style="padding-top: 122.2%">
                          <img alt="" aria-describedby="color-system-figure-caption-17" src="<?= static_url('../static/media/style/color/style_color_colorsystem_blackfab_161116.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-17">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>使用单色作为强调色，使图像和其他彩色的元素更加突出。</p>
                        <p></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1000px">
                        <div class="frame " style="padding-top: 122.2%">
                          <img alt="" aria-describedby="color-system-figure-caption-18" src="<?= static_url('../static/media/style/color/style_color_colorsystem_tonalfab_161116.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-18">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>在主色区域上的元素，可以使用不同色调的主色（例如这个浮动操作按钮）。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 122.222222222%">
                          <img alt="" aria-describedby="color-system-figure-caption-19" src="<?= static_url('../static/media/style/color/style_color_colorscheme_accentcolor_textfields.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-19">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>文本框和开关可以使用辅助色作为强调。</p>
                        <p></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 122.222222222%">
                          <img alt="" aria-describedby="color-system-figure-caption-20" src="<?= static_url('../static/media/style/color/style_color_colorscheme_accentcolor_textselection.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-20">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>文本选择可以使用辅助色作为强调。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p><strong>替代辅助色</strong></p>
                    <p>如果你的辅助色太浅或太深，不足以与背景色形成充分对比，请使用较浅或较深的辅助色代替。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 122.222222222%">
                          <img alt="" aria-describedby="color-system-figure-caption-21" src="<?= static_url('../static/media/style/color/style_color_uiapplication_fallback1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-21">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>在很深或很浅的背景色中，使用不同色调的辅助色。</p>
                        <p></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 122.222222222%">
                          <img alt="" aria-describedby="color-system-figure-caption-22" src="<?= static_url('../static/media/style/color/style_color_uiapplication_fallback2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-22">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>如果主色和辅助色没有足够的对比度，不要在主色背景上使用辅助色。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <p></p>
            </div>
          </div>
        </div>

        <div id="color-usability" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            可用性
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
                    <h1>层次结构</h1>
                    <p>层次结构是指根据重要性级别来组织内容。颜色可以表达出一些内容相对与其他内容的重要性。</p>
                    <p>例如，无色背景上的亮色按钮，会使该按钮更突出。或者，无色的应用栏和按钮使 UI 中明亮的内容更突出。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="usability-figure-caption-0" src="<?= static_url('../static/media/style/color/style_typography_styles_11_body3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usability-figure-caption-0">
                        <p>大胆的颜色强调了浮动操作按钮和工具栏，使信息的创建和导航更突出。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1001px">
                        <div class="frame " style="padding-top: 177.622377622%">
                          <img alt="" aria-describedby="usability-figure-caption-1" src="<?= static_url('../static/media/style/color/style_color_usability_colorlessUI_161116.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usability-figure-caption-1">
                        <p>无色的应用栏和按钮使亮色的内容更突出，不强调状态栏和导航栏。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>含义</h1>
                    <p>颜色可以用来表达屏幕中不同元素的含义。天气应用可能会使用表示当前天气状况的颜色，地图应用可能会用红色或绿色的道路颜色，来表示交通状况。</p>
                  </div>
                  <div class="module">
                    <p>
                      <figure class="s-tag-media">
                        <div class="media" style="max-width: 1000px">
                          <div class="frame " style="padding-top: 177.8%">
                            <img alt="" aria-describedby="usability-figure-caption-2" src="<?= static_url('../static/media/style/color/style_color_usability_weather_semantic_161116.png'); ?>" loading="lazy"/>
                          </div>
                        </div>
                        <figcaption id="usability-figure-caption-2">
                          <p>天气应用使用颜色来表示一天中的时间。</p>
                        </figcaption>
                      </figure>
                    </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1000px">
                        <div class="frame " style="padding-top: 177.8%">
                          <img alt="" aria-describedby="usability-figure-caption-3" src="<?= static_url('../static/media/style/color/style_color_usability_maps_161116.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usability-figure-caption-3">
                        <p>地图应用使用颜色来表示交通状况。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>状态</h1>
                    <p>颜色可以提供以下信息：</p>
                    <ul class="lst-kix_epkga2o278ub-0 start">
                      <li>元素的当前状态，例如按钮的启用或禁用状态</li>
                      <li>应用或元素的状态改变</li>
                    </ul>
                    <p>表示状态变化的颜色应该是明显的，因为只有细微差异的颜色可能会被用户忽视。最好能以多种方式来表示状态的变化，例如显示一个图标、或移动元素的位置。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="usability-figure-caption-4" src="<?= static_url('../static/media/style/color/style_color_usability_textfieldcolor_161116.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usability-figure-caption-4">
                        <p>红色的标签和帮助文本表示错误信息。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 550px">
                        <div class="frame " style="padding-top: 36.3636363636%">
                          <img alt="" aria-describedby="usability-figure-caption-5" src="<?= static_url('../static/media/style/color/style_color_usability_semantic_text_161116.gif'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usability-figure-caption-5">
                        <p>颜色从蓝色变为红色，以表示不同的状态。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>对比</h1>
                    <p>应用的主色和辅助色应该确保元素之间能有足够的对比度，以便所有用户都能看到和使用你的应用。</p>
                    <p>要了解更多有关颜色、对比度和无障碍设计相关的内容，请阅读 <a href="../usability/accessibility.html">Material Design 无障碍</a>。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1000px">
                        <div class="frame " style="padding-top: 177.8%">
                          <img alt="" aria-describedby="usability-figure-caption-6" src="<?= static_url('../static/media/style/color/style_color_usability_pre_redgreen_color_blindness_161102.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usability-figure-caption-6">
                        <p>在这个 UI 中，红色表示一天中的时间，绿色表示有雾的天气。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1000px">
                        <div class="frame " style="padding-top: 177.8%">
                          <img alt="" aria-describedby="usability-figure-caption-7" src="<?= static_url('../static/media/style/color/style_color_usability_redgreen_color_blindness_161116.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usability-figure-caption-7">
                        <p>这是红绿色盲看到的左侧的 UI。它们可能无法看到文本和其他元素之间的差异。<br>
                          <br>
                          还应该使用除颜色以外的功能来传达信息。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1000px">
                        <div class="frame " style="padding-top: 177.8%">
                          <img alt="" aria-describedby="usability-figure-caption-8" src="<?= static_url('../static/media/style/color/style_color_usability_cataracts_161116.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usability-figure-caption-8">
                        <p>较小的文字对于白内障用户可能会难以阅读，在他们眼中，你的 UI 可能会变得模糊。没有足够对比度的元素会被淹没在背景中。</p>
                        <p>为了适应所有用户，可以提供放大文本的选项。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3 h1-spacing">
                  <div class="module">
                    <h1>背景中的文本</h1>
                    <p>文本应该在其背景中清晰可见。建议：</p>
                    <ul class="lst-kix_4wv31nrzrjta-0 start">
                      <li>深灰色文本用于浅色背景</li>
                      <li>浅灰色文本用于深色背景</li>
                    </ul>
                    <p>如果你的应用同时含有亮色和暗色主题，文本颜色应该要和每个主题都有足够的对比度。</p>
                  </div>
                  <div class="module"></div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>可读性</h2>
                    <p>彩色背景上的文本需要保证清晰可读，以符合无障碍标准。在背景色和文本色上同时使用不透明度，可以满足此标准。 AA 级的 <a href="https://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-contrast.html" target="_blank">Web 内容无障碍指南（WCAG 2.0）</a> 要求普通文本的对比度为 4.5:1，大文本的对比度为 3:1。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 22.2222222222%">
                          <img alt="" aria-describedby="usability-figure-caption-9" src="<?= static_url('../static/media/style/color/style_color_usability_alpha4_161116.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usability-figure-caption-9">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>使用不透明度，而不是改变颜色，通常能创造更好的对比度和相对亮度。例如，如果背景色变为洋红色，则其中的灰色文字（#727272）会变得难以阅读。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 22.2222222222%">
                          <img alt="" aria-describedby="usability-figure-caption-10" src="<?= static_url('../static/media/style/color/style_color_usability_alpha3_161116.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usability-figure-caption-10">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>转换为灰色，而不是降低了对比度的黑色，通常会降低相对亮度，使文本不可读。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3 h2-spacing">
                  <div class="module">
                    <h2>浅色背景中的深色文本</h2>
                    <p>文本的不透明度取决于背景色是深色还是浅色的。对于浅色背景中的深色文本，使用以下不透明度：</p>
                    <ul class="lst-kix_ljva6phq05b1-0 start">
                      <li><strong>最重要的文本</strong>使用 87% 的不透明度</li>
                      <li>在视觉层次结构中较低的<strong>辅助文本</strong>使用 54% 的不透明度</li>
                      <li><strong>文本提示</strong>（例如文本框和标签）、<strong>禁用状态的文本</strong>的视觉层次更低，使用 38% 的不透明度</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 56.9444444444%">
                          <img alt="" src="<?= static_url('../static/media/style/color/style_color_usability_alpha1_161116.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                    </figure>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>暗色文本（#000000）</p></td>
                        <td colspan="1" rowspan="1"><p>不透明度</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>主文本</p></td>
                        <td colspan="1" rowspan="1"><p>87%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>辅助文本</p></td>
                        <td colspan="1" rowspan="1"><p>54%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>禁用状态的文本、提示文本</p></td>
                        <td colspan="1" rowspan="1"><p>38%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>分隔线</p></td>
                        <td colspan="1" rowspan="1"><p>12%</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
                <section class="module-figure-module col-3 h2-spacing">
                  <div class="module">
                    <h2><strong>暗色背景上的白色文本</strong></h2>
                    <p>彩色背景上的白色文本应该使用 100% 的不透明度。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 56.9444444444%">
                          <img alt="" aria-describedby="usability-figure-caption-11" src="<?= static_url('../static/media/style/color/style_color_usability_alpha2_161116.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usability-figure-caption-11">
                        <p>此表格显示了深色背景中的白色文本的相对重要性。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>亮色文本（#FFFFFF）</p></td>
                        <td colspan="1" rowspan="1"><p>不透明度</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>主文本</p></td>
                        <td colspan="1" rowspan="1"><p>100%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>辅助文本</p></td>
                        <td colspan="1" rowspan="1"><p>70%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>禁用状态的文本、提示文本</p></td>
                        <td colspan="1" rowspan="1"><p>50%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>分隔线</p></td>
                        <td colspan="1" rowspan="1"><p>12%</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
                <section class="module-module-module col-3 h2-spacing">
                  <div class="module">
                    <h2>图标等元素</h2>
                    <p>图标之类的元素使用具有 38% 不透明度的白色或黑色，以使它们能在任何颜色的背景上使用。</p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>深色图标（#000000）</p></td>
                        <td colspan="1" rowspan="1"><p>不透明度</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>可用的图标</p></td>
                        <td colspan="1" rowspan="1"><p>54%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>禁用的图标</p></td>
                        <td colspan="1" rowspan="1"><p>38%</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>亮色图标（#FFFFFF）</p></td>
                        <td colspan="1" rowspan="1"><p>不透明度</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>可用的图标</p></td>
                        <td colspan="1" rowspan="1"><p>100%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>禁用的图标</p></td>
                        <td colspan="1" rowspan="1"><p>50%</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>彩色的文本和背景</h2>
                    <p>谨慎的在彩色背景上使用彩色文本，在重要的文本元素上应该有限制的使用。彩色的文本应该用于表示重要性、和强调已选择状态。</p>
                    <p>查看<a href="color.html#color-the-color-tool">颜色工具</a>，来确定不同背景色中的某些前景色是否符合无障碍标准。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1000px">
                        <div class="frame " style="padding-top: 122.2%">
                          <img alt="" aria-describedby="usability-figure-caption-12" src="<?= static_url('../static/media/style/color/style_color_usability_headline_color_161116.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usability-figure-caption-12">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>在重要的文本上使用有对比度的颜色（例如你的辅助色），使其与背景色产生对比。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1000px">
                        <div class="frame " style="padding-top: 122.2%">
                          <img alt="" aria-describedby="usability-figure-caption-13" src="<?= static_url('../static/media/style/color/style_color_usability_dontbody_161116.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usability-figure-caption-13">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>避免在彩色背景上放置大量彩色文本。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1000px">
                        <div class="frame " style="padding-top: 122.2%">
                          <img alt="" aria-describedby="usability-figure-caption-14" src="<?= static_url('../static/media/style/color/style_color_usability_tonalheadline_161116.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usability-figure-caption-14">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>你可以使用更深或更浅的色调来创建单色，也能突出外观。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1000px">
                        <div class="frame " style="padding-top: 122.2%">
                          <img alt="" aria-describedby="usability-figure-caption-15" src="<?= static_url('../static/media/style/color/style_color_usability_donttonalheadline_161116.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usability-figure-caption-15">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>不要使用相同颜色的不同色调的颜色进行对比。与背景色对比度很低的文本会很难阅读。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="color-themes" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:5">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:5">
            主题
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>主题可以让你的应用具有统一的风格。主题指定表面的暗度、阴影程度，以及墨水元素的适当的不透明度。为了提高不同应用之间的一致性，你可以选择亮色主题和暗色主题。</p>
              <div class="modulettes">
                <a class="modulette download trackdl" download="" href="<?= static_url('../static/media/style/color/stickersheet_uielements.ai'); ?>" title="Download themes">
                  <img alt="" class="icon download-icon" src="<?= static_url('../static/spec/images/callouts/download.svg'); ?>" loading="lazy"/>
                  <div class="info">
                    <div class="title">下载主题</div>
                    <span class="subtitle">1.23 MB (.ai) </span>
                  </div>
                </a>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module"><h1>亮色主题</h1>
                    <p>1. 状态栏<br>
                      2. 应用栏<br>
                      3. 背景<br>
                      4. 卡片/对话框</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="themes-figure-caption-0" src="<?= static_url('../static/media/style/color/style_color_themes_light1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="themes-figure-caption-0">
                        <p>亮色主题调色板</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="themes-figure-caption-1" src="<?= static_url('../static/media/style/color/style_color_themes_light2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="themes-figure-caption-1">
                        <p>在 UI 中的应用</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>暗色主题</h1>
                    <p>1. 状态栏<br>
                      2. 应用栏<br>
                      3. 背景<br>
                      4. 卡片/对话框</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 178.055555556%">
                          <img alt="" aria-describedby="themes-figure-caption-2" src="<?= static_url('../static/media/style/color/style_color_themes_dark1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="themes-figure-caption-2">
                        <p>暗色主题调色板</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 178.055555556%">
                          <img alt="" aria-describedby="themes-figure-caption-3" src="<?= static_url('../static/media/style/color/style_color_themes_dark2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="themes-figure-caption-3">
                        <p>在 UI 中的应用</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <p>
                <div class="modulettes">
                  <a class="modulette container android" href="http://developer.android.com/training/material/theme.html" target="_blank">
                    <img alt="" class="icon callout-icon" src="<?= static_url('../static/spec/images/callouts/android.svg'); ?>" loading="lazy">
                    <div class="info">
                      <div class="title">使用材料主题</div>
                    </div>
                    </img>
                  </a>
                </div>
              自定义你的品牌标识。
              </p>
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
