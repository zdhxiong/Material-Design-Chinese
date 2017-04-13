<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>Material Design 中的配色灵感来自大胆的色调与柔和的环境、深度的阴影、明亮的高光并存。</h1>
          <div class="col-list">
            <section class="figure col-1">
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 1280px">
                    <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 56.25%">
                      <video controls="" loop="" preload="metadata">
                        <source src="<?php static_url('../static/media/style/color/Palette Perfect How Material Design Makes Color Easy.webm'); ?>" type="video/webm">
                        <source src="<?php static_url('../static/media/style/color/Palette Perfect How Material Design Makes Color Easy.mp4'); ?>" type="video/mp4">
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
                          <img alt="" aria-describedby="color-tool-figure-caption-1" src="<?php static_url('../static/media/style/color/components.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="color-tool-figure-caption-1">
                        <h3><strong>创建配色方案</strong></h3>
                        <p>创建配色方案，包含主色和辅助色的较深和较浅的变化。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="color-tool-figure-caption-2" src="<?php static_url('../static/media/style/color/accessibility.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="color-tool-figure-caption-2"><h3><strong>测试可访问性</strong></h3>
                        <p>使用 <a href="https://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-contrast.html" target="_blank">Web 内容无障碍指南</a> 的易读性标准，来测试文本在不同的背景色中是否可访问。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 721px">
                        <div class="frame " style="padding-top: 99.8613037448%">
                          <img alt="" aria-describedby="color-tool-figure-caption-3" src="<?php static_url('../static/media/style/color/UI.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="color-tool-figure-caption-3">
                        <h3><strong>预览 UI 的颜色</strong></h3>
                        <p>通过一系列的 Material Design 组件，来预览配色方案的效果，并可以在 Codepen 中编辑 HTML、CSS 和 JavaScript。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <div class="modulettes">
                      <a class="modulette container gd" href="https://material.io/color/" target="_blank">
                        <img alt="" class="icon callout-icon" src="<?php static_url('../static/spec/images/callouts/md.svg'); ?>">
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
              <p>
                <div class="modulettes">
                  <a class="modulette download trackdl" download="" href="<?php static_url('../static/media/style/color/color_swatches.zip'); ?>" title="Download color swatches">
                    <img alt="" class="icon download-icon" src="<?php static_url('../static/spec/images/callouts/download.svg'); ?>">
                    <div class="info">
                      <div class="title">下载调色板</div>
                      <span class="subtitle">0.02 MB (.zip) </span>
                    </div>
                    </img>
                  </a>
                </div>
              </p>
              <div class="col-list">
                <section class="module col-1">
                  <div class="module"><p>
                    <div>
                      <div class="color-palette">
                        <section class="color-group">
                          <ul>
                            <li class="color main-color" style="background-color: #f44336;">
                              <span class="name light-strong">Red</span>
                              <span class="shade light-strong">500</span>
                              <span class="hex light-strong">#f44336</span>
                            </li>
                            <li class="color dark" style="background-color: #ffebee;">
                              <span class="shade expanded">50</span>
                              <span class="hex">#ffebee</span>
                            </li>
                            <li class="color dark" style="background-color: #ffcdd2;">
                              <span class="shade">100</span>
                              <span class="hex">#ffcdd2</span>
                            </li>
                            <li class="color dark" style="background-color: #ef9a9a">
                              <span class="shade expanded">200</span>
                              <span class="hex">#ef9a9a</span>
                            </li>
                            <li class="color dark" style="background-color: #e57373;">
                              <span class="shade">300</span>
                              <span class="hex">#e57373</span>
                            </li>
                            <li class="color" style="background-color: #ef5350;">
                              <span class="shade expanded">400</span>
                              <span class="hex">#ef5350</span>
                            </li>
                            <li class="color" style="background-color: #f44336;">
                              <span class="shade">500</span><span
                              class="hex">#f44336</span>
                            </li>
                            <li class="color" style="background-color: #e53935;">
                              <span class="shade expanded">600</span>
                              <span class="hex">#e53935</span>
                            </li>
                            <li class="color" style="background-color: #d32f2f;">
                              <span class="shade">700</span>
                              <span class="hex">#d32f2f</span>
                            </li>
                            <li class="color" style="background-color: #c62828;">
                              <span class="shade expanded">800</span>
                              <span class="hex">#c62828</span>
                            </li>
                            <li class="color" style="background-color: #b71c1c;">
                              <span class="shade expanded">900</span>
                              <span class="hex">#b71c1c</span>
                            </li>
                            <li class="color dark divide" style="background-color: #ff8a80;">
                              <span class="shade accent">A100</span>
                              <span class="hex">#ff8a80</span>
                            </li>
                            <li class="color light-strong" style="background-color: #ff5252;">
                              <span class="shade accent expanded">A200</span>
                              <span class="hex">#ff5252</span>
                            </li>
                            <li class="color" style="background-color: #ff1744;">
                              <span class="shade accent expanded">A400</span>
                              <span class="hex">#ff1744</span>
                            </li>
                            <li class="color" style="background-color: #d50000;">
                              <span class="shade accent">A700</span>
                              <span class="hex">#d50000</span>
                            </li>
                          </ul>
                        </section>
                        <section class="color-group">
                          <ul>
                            <li class="color main-color" style="background-color: #E91E63;">
                              <span class="name light-strong">Pink</span>
                              <span class="shade light-strong">500</span>
                              <span class="hex light-strong">#e91e63</span>
                            </li>
                            <li class="color dark" style="background-color: #fce4ec;">
                              <span class="shade expanded">50</span>
                              <span class="hex">#fce4ec</span>
                            </li>
                            <li class="color dark" style="background-color: #f8bbd0;">
                              <span class="shade">100</span>
                              <span class="hex">#f8bbd0</span>
                            </li>
                            <li class="color dark" style="background-color: #f48fb1;">
                              <span class="shade expanded">200</span>
                              <span class="hex">#f48fb1</span>
                            </li>
                            <li class="color light-strong" style="background-color: #f06292;">
                              <span class="shade">300</span>
                              <span class="hex">#f06292</span>
                            </li>
                            <li class="color " style="background-color: #ec407a;">
                              <span class="shade expanded">400</span>
                              <span class="hex">#ec407a</span>
                            </li>
                            <li class="color" style="background-color: #e91e63;">
                              <span class="shade">500</span>
                              <span class="hex">#e91e63</span>
                            </li>
                            <li class="color" style="background-color: #d81b60;">
                              <span class="shade expanded">600</span>
                              <span class="hex">#d81b60</span>
                            </li>
                            <li class="color" style="background-color: #c2185b;">
                              <span class="shade">700</span>
                              <span class="hex">#c2185b</span>
                            </li>
                            <li class="color" style="background-color: #ad1457;">
                              <span class="shade">800</span>
                              <span class="hex">#ad1457</span>
                            </li>
                            <li class="color" style="background-color: #880e4f;">
                              <span class="shade">900</span>
                              <span class="hex">#880e4f</span>
                            </li>
                            <li class="color dark divide" style="background-color: #ff80ab;">
                              <span class="shade accent">A100</span>
                              <span class="hex">#ff80ab</span>
                            </li>
                            <li class="color light-strong" style="background-color: #ff4081;">
                              <span class="shade accent expanded">A200</span>
                              <span class="hex">#ff4081</span>
                            </li>
                            <li class="color" style="background-color: #f50057;">
                              <span class="shade accent expanded">A400</span>
                              <span class="hex">#f50057</span>
                            </li>
                            <li class="color" style="background-color: #c51162;">
                              <span class="shade accent">A700</span>
                              <span class="hex">#c51162</span>
                            </li>
                          </ul>
                        </section>
                        <section class="color-group">
                          <ul>
                            <li class="color main-color" style="background-color: #9c27b0;">
                              <span class="name">Purple</span>
                              <span class="shade">500</span>
                              <span class="hex">#9c27b0</span>
                            </li>
                            <li class="color dark" style="background-color: #f3e5f5;">
                              <span class="shade expanded">50</span>
                              <span class="hex">#f3e5f5</span>
                            </li>
                            <li class="color dark" style="background-color: #e1bee7;">
                              <span class="shade">100</span>
                              <span class="hex">#e1bee7</span>
                            </li>
                            <li class="color dark" style="background-color: #ce93d8;">
                              <span class="shade expanded">200</span>
                              <span class="hex">#ce93d8</span>
                            </li>
                            <li class="color light-strong" style="background-color: #ba68c8;">
                              <span class="shade">300</span>
                              <span class="hex">#ba68c8</span>
                            </li>
                            <li class="color light-strong" style="background-color: #ab47bc;">
                              <span class="shade expanded">400</span>
                              <span class="hex">#ab47bc</span>
                            </li>
                            <li class="color" style="background-color: #9c27b0;">
                              <span class="shade">500</span>
                              <span class="hex">#9c27b0</span>
                            </li>
                            <li class="color" style="background-color: #8e24aa;">
                              <span class="shade expanded">600</span>
                              <span class="hex">#8e24aa</span>
                            </li>
                            <li class="color" style="background-color: #7b1fa2;">
                              <span class="shade">700</span>
                              <span class="hex">#7b1fa2</span>
                            </li>
                            <li class="color" style="background-color: #6a1b9a;">
                              <span class="shade expanded">800</span>
                              <span class="hex">#6a1b9a</span>
                            </li>
                            <li class="color" style="background-color: #4a148c;">
                              <span class="shade expanded">900</span>
                              <span class="hex">#4a148c</span>
                            </li>
                            <li class="color dark divide" style="background-color: #ea80fc;">
                              <span class="shade accent">A100</span>
                              <span class="hex">#ea80fc</span>
                            </li>
                            <li class="color light-strong" style="background-color: #e040fb;">
                              <span class="shade accent expanded">A200</span>
                              <span class="hex">#e040fb</span>
                            </li>
                            <li class="color" style="background-color: #d500f9;">
                              <span class="shade accent expanded">A400</span>
                              <span class="hex">#d500f9</span>
                            </li>
                            <li class="color" style="background-color: #aa00ff;">
                              <span class="shade accent">A700</span>
                              <span class="hex">#aa00ff</span>
                            </li>
                          </ul>
                        </section>
                        <section class="color-group">
                          <ul>
                            <li class="color main-color" style="background-color: #673ab7;">
                              <span class="name">Deep Purple</span>
                              <span class="shade">500</span>
                              <span class="hex">#673ab7</span>
                            </li>
                            <li class="color dark" style="background-color: #ede7f6;">
                              <span class="shade expanded">50</span>
                              <span class="hex">#ede7f6</span>
                            </li>
                            <li class="color dark" style="background-color: #d1c4e9;">
                              <span class="shade">100</span>
                              <span class="hex">#d1c4e9</span>
                            </li>
                            <li class="color dark" style="background-color: #b39ddb;">
                              <span class="shade expanded">200</span>
                              <span class="hex">#b39ddb</span>
                            </li>
                            <li class="color" style="background-color: #9575cd;">
                              <span class="shade">300</span>
                              <span class="hex">#9575cd</span>
                            </li>
                            <li class="color" style="background-color: #7e57c2;">
                              <span class="shade expanded">400</span>
                              <span class="hex">#7e57c2</span>
                            </li>
                            <li class="color" style="background-color: #673ab7;">
                              <span class="shade">500</span>
                              <span class="hex">#673ab7</span>
                            </li>
                            <li class="color" style="background-color: #5e35b1;">
                              <span class="shade expanded">600</span>
                              <span class="hex">#5e35b1</span>
                            </li>
                            <li class="color" style="background-color: #512da8;">
                              <span class="shade">700</span>
                              <span class="hex">#512da8</span>
                            </li>
                            <li class="color" style="background-color: #4527a0;">
                              <span class="shade expanded">800</span>
                              <span class="hex">#4527a0</span>
                            </li>
                            <li class="color" style="background-color: #311b92;">
                              <span class="shade expanded">900</span>
                              <span class="hex">#311b92</span>
                            </li>
                            <li class="color dark divide" style="background-color: #b388ff;">
                              <span class="shade accent">A100</span>
                              <span class="hex">#b388ff</span>
                            </li>
                            <li class="color light-strong" style="background-color: #7c4dff;">
                              <span class="shade accent expanded">A200</span>
                              <span class="hex">#7c4dff</span>
                            </li>
                            <li class="color" style="background-color: #651fff;">
                              <span class="shade accent expanded">A400</span>
                              <span class="hex">#651fff</span>
                            </li>
                            <li class="color" style="background-color: #6200ea;">
                              <span class="shade accent">A700</span>
                              <span class="hex">#6200ea</span>
                            </li>
                          </ul>
                        </section>
                        <section class="color-group">
                          <ul>
                            <li class="color main-color" style="background-color: #3f51b5;">
                              <span class="name">Indigo</span>
                              <span class="shade">500</span>
                              <span class="hex">#3f51b5</span>
                            </li>
                            <li class="color dark" style="background-color: #e8eaf6;">
                              <span class="shade expanded">50</span>
                              <span class="hex">#e8eaf6</span>
                            </li>
                            <li class="color dark" style="background-color: #c5cae9;">
                              <span class="shade">100</span>
                              <span class="hex">#c5cae9</span>
                            </li>
                            <li class="color dark" style="background-color: #9fa8da;">
                              <span class="shade expanded">200</span>
                              <span class="hex">#9fa8da</span>
                            </li>
                            <li class="color" style="background-color: #7986cb;">
                              <span class="shade">300</span>
                              <span class="hex">#7986cb</span>
                            </li>
                            <li class="color" style="background-color: #5c6bc0;">
                              <span class="shade expanded">400</span>
                              <span class="hex">#5c6bc0</span>
                            </li>
                            <li class="color" style="background-color: #3f51b5;">
                              <span class="shade">500</span>
                              <span class="hex">#3f51b5</span>
                            </li>
                            <li class="color" style="background-color: #3949ab;">
                              <span class="shade expanded">600</span>
                              <span class="hex">#3949ab</span>
                            </li>
                            <li class="color" style="background-color: #303f9f;">
                              <span class="shade">700</span>
                              <span class="hex">#303f9f</span>
                            </li>
                            <li class="color" style="background-color: #283593;">
                              <span class="shade expanded">800</span>
                              <span class="hex">#283593</span>
                            </li>
                            <li class="color" style="background-color: #1a237e;">
                              <span class="shade expanded">900</span>
                              <span class="hex">#1a237e</span>
                            </li>
                            <li class="color dark divide" style="background-color: #8c9eff;">
                              <span class="shade accent">A100</span>
                              <span class="hex">#8c9eff</span>
                            </li>
                            <li class="color" style="background-color: #536dfe;">
                              <span class="shade accent expanded">A200</span>
                              <span class="hex">#536dfe</span>
                            </li>
                            <li class="color" style="background-color: #3d5afe;">
                              <span class="shade accent expanded">A400</span>
                              <span class="hex">#3d5afe</span>
                            </li>
                            <li class="color" style="background-color: #304ffe;">
                              <span class="shade accent">A700</span>
                              <span class="hex">#304ffe</span>
                            </li>
                          </ul>
                        </section>
                        <section class="color-group">
                          <ul>
                            <li class="color main-color" style="background-color: #2196F3;">
                              <span class="name light-strong">Blue</span>
                              <span class="shade light-strong">500</span>
                              <span class="hex light-strong">#2196f3</span>
                            </li>
                            <li class="color dark" style="background-color: #e3f2fd;">
                              <span class="shade expanded">50</span>
                              <span class="hex">#e3f2fd</span>
                            </li>
                            <li class="color dark" style="background-color: #bbdefb;">
                              <span class="shade">100</span>
                              <span class="hex">#bbdefb</span>
                            </li>
                            <li class="color dark" style="background-color: #90caf9;">
                              <span
                              class="shade expanded">200</span>
                              <span class="hex">#90caf9</span>
                            </li>
                            <li class="color dark" style="background-color: #64b5f6;">
                              <span class="shade">300</span>
                              <span class="hex">#64b5f6</span>
                            </li>
                            <li class="color dark" style="background-color: #42a5f5;">
                              <span class="shade expanded">400</span>
                              <span class="hex">#42a5f5</span>
                            </li>
                            <li class="color light-strong" style="background-color: #2196f3;">
                              <span class="shade">500</span>
                              <span class="hex">#2196f3</span>
                            </li>
                            <li class="color" style="background-color: #1e88e5;">
                              <span class="shade expanded">600</span>
                              <span class="hex">#1e88e5</span>
                            </li>
                            <li class="color" style="background-color: #1976d2;">
                              <span class="shade">700</span>
                              <span class="hex">#1976d2</span>
                            </li>
                            <li class="color" style="background-color: #1565c0;">
                              <span class="shade expanded">800</span>
                              <span class="hex">#1565c0</span>
                            </li>
                            <li class="color" style="background-color: #0d47a1;">
                              <span class="shade expanded">900</span>
                              <span class="hex">#0d47a1</span>
                            </li>
                            <li class="color dark divide" style="background-color: #82b1ff;">
                              <span class="shade accent">A100</span>
                              <span class="hex">#82b1ff</span>
                            </li>
                            <li class="color light-strong" style="background-color: #448aff;">
                              <span class="shade accent expanded">A200</span>
                              <span class="hex">#448aff</span>
                            </li>
                            <li class="color" style="background-color: #2979ff;">
                              <span class="shade accent expanded">A400</span>
                              <span class="hex">#2979ff</span>
                            </li>
                            <li class="color" style="background-color: #2962ff;">
                              <span class="shade accent">A700</span>
                              <span class="hex">#2962ff</span>
                            </li>
                          </ul>
                        </section>
                        <section class="color-group">
                          <ul>
                            <li class="color main-color" style="background-color: #03a9f4;">
                              <span class="name dark">Light Blue</span>
                              <span class="shade dark">500</span>
                              <span class="hex dark">#03a9f4</span>
                            </li>
                            <li class="color dark" style="background-color: #e1f5fe;">
                              <span class="shade expanded">50</span>
                              <span class="hex">#e1f5fe</span>
                            </li>
                            <li class="color dark" style="background-color: #b3e5fc;">
                              <span class="shade">100</span>
                              <span class="hex">#b3e5fc</span>
                            </li>
                            <li class="color dark" style="background-color: #81d4fa;">
                              <span class="shade expanded">200</span>
                              <span class="hex">#81d4fa</span>
                            </li>
                            <li class="color dark" style="background-color: #4fc3f7;">
                              <span class="shade">300</span>
                              <span class="hex">#4fc3f7</span>
                            </li>
                            <li class="color dark" style="background-color: #29b6f6;">
                              <span class="shade expanded">400</span>
                              <span class="hex">#29b6f6</span>
                            </li>
                            <li class="color dark" style="background-color: #03a9f4;">
                              <span class="shade">500</span>
                              <span class="hex">#03a9f4</span>
                            </li>
                            <li class="color light-strong" style="background-color: #039be5;">
                              <span class="shade expanded">600</span>
                              <span class="hex">#039be5</span>
                            </li>
                            <li class="color" style="background-color: #0288d1;">
                              <span class="shade">700</span>
                              <span class="hex">#0288d1</span>
                            </li>
                            <li class="color" style="background-color: #0277bd;">
                              <span class="shade expanded">800</span>
                              <span class="hex">#0277bd</span>
                            </li>
                            <li class="color" style="background-color: #01579b;">
                              <span class="shade expanded">900</span>
                              <span class="hex">#01579b</span>
                            </li>
                            <li class="color dark divide" style="background-color: #80d8ff;">
                              <span class="shade accent">A100</span>
                              <span class="hex">#80d8ff</span>
                            </li>
                            <li class="color dark" style="background-color: #40c4ff;">
                              <span class="shade accent expanded">A200</span>
                              <span class="hex">#40c4ff</span>
                            </li>
                            <li class="color dark" style="background-color: #00b0ff;">
                              <span class="shade accent expanded">A400</span>
                              <span class="hex">#00b0ff</span>
                            </li>
                            <li class="color light-strong" style="background-color: #0091ea;">
                              <span class="shade accent">A700</span>
                              <span class="hex">#0091ea</span>
                            </li>
                          </ul>
                        </section>
                        <section class="color-group">
                          <ul>
                            <li class="color main-color" style="background-color: #00bcd4;">
                              <span class="name dark">Cyan</span>
                              <span class="shade dark">500</span>
                              <span class="hex dark">#00bcd4</span>
                            </li>
                            <li class="color dark" style="background-color: #e0f7fa;">
                              <span class="shade expanded">50</span>
                              <span class="hex">#e0f7fa</span>
                            </li>
                            <li class="color dark" style="background-color: #b2ebf2;">
                              <span class="shade">100</span>
                              <span class="hex">#b2ebf2</span>
                            </li>
                            <li class="color dark" style="background-color: #80deea;">
                              <span class="shade expanded">200</span>
                              <span class="hex">#80deea</span>
                            </li>
                            <li class="color dark" style="background-color: #4dd0e1;">
                              <span class="shade">300</span>
                              <span class="hex">#4dd0e1</span>
                            </li>
                            <li class="color dark" style="background-color: #26c6da;">
                              <span class="shade expanded">400</span>
                              <span class="hex">#26c6da</span>
                            </li>
                            <li class="color dark" style="background-color: #00bcd4;">
                              <span class="shade">500</span>
                              <span class="hex">#00bcd4</span>
                            </li>
                            <li class="color dark" style="background-color: #00acc1;">
                              <span class="shade expanded">600</span>
                              <span class="hex">#00acc1</span>
                            </li>
                            <li class="color" style="background-color: #0097a7;">
                              <span class="shade">700</span>
                              <span class="hex">#0097a7</span>
                            </li>
                            <li class="color" style="background-color: #00838f;">
                              <span class="shade expanded">800</span>
                              <span class="hex">#00838f</span>
                            </li>
                            <li class="color" style="background-color: #006064;">
                              <span class="shade expanded">900</span>
                              <span class="hex">#006064</span>
                            </li>
                            <li class="color dark divide" style="background-color: #84ffff;">
                              <span class="shade accent">A100</span>
                              <span class="hex">#84ffff</span></li>
                            <li class="color dark" style="background-color: #18ffff;">
                              <span class="shade accent expanded">A200</span>
                              <span class="hex">#18ffff</span>
                            </li>
                            <li class="color dark" style="background-color: #00e5ff;">
                              <span class="shade accent expanded">A400</span>
                              <span class="hex">#00e5ff</span>
                            </li>
                            <li class="color dark" style="background-color: #00b8d4;">
                              <span
                              class="shade accent">A700</span>
                              <span class="hex">#00b8d4</span>
                            </li>
                          </ul>
                        </section>
                        <section class="color-group">
                          <ul>
                            <li class="color main-color" style="background-color: #009688;">
                              <span class="name light-strong">Teal</span>
                              <span class="shade light-strong">500</span>
                              <span class="hex light-strong">#009688</span>
                            </li>
                            <li class="color dark" style="background-color: #e0f2f1;">
                              <span class="shade expanded">50</span>
                              <span class="hex">#e0f2f1</span>
                            </li>
                            <li class="color dark" style="background-color: #b2dfdb;">
                              <span class="shade">100</span>
                              <span class="hex">#b2dfdb</span>
                            </li>
                            <li class="color dark" style="background-color: #80cbc4;">
                              <span class="shade expanded">200</span>
                              <span class="hex">#80cbc4</span>
                            </li>
                            <li class="color dark" style="background-color: #4db6ac;">
                              <span class="shade">300</span>
                              <span class="hex">#4db6ac</span>
                            </li>
                            <li class="color dark" style="background-color: #26a69a;">
                              <span class="shade expanded">400</span>
                              <span class="hex">#26a69a</span>
                            </li>
                            <li class="color light-strong" style="background-color: #009688;">
                              <span class="shade">500</span>
                              <span class="hex">#009688</span>
                            </li>
                            <li class="color light-strong" style="background-color: #00897b;">
                              <span class="shade expanded">600</span>
                              <span class="hex">#00897b</span>
                            </li>
                            <li class="color light-strong" style="background-color: #00796b;">
                              <span class="shade">700</span>
                              <span class="hex">#00796b</span>
                            </li>
                            <li class="color" style="background-color: #00695c;">
                              <span class="shade expanded">800</span>
                              <span class="hex">#00695c</span>
                            </li>
                            <li class="color" style="background-color: #004d40;">
                              <span class="shade expanded">900</span>
                              <span class="hex">#004d40</span>
                            </li>
                            <li class="color dark divide" style="background-color: #a7ffeb;">
                              <span class="shade accent">A100</span>
                              <span class="hex">#a7ffeb</span>
                            </li>
                            <li class="color dark" style="background-color: #64ffda;">
                              <span class="shade accent expanded">A200</span>
                              <span class="hex">#64ffda</span>
                            </li>
                            <li class="color dark" style="background-color: #1de9b6;">
                              <span class="shade accent expanded">A400</span>
                              <span class="hex">#1de9b6</span>
                            </li>
                            <li class="color dark" style="background-color: #00bfa5;">
                              <span class="shade accent">A700</span>
                              <span class="hex">#00bfa5</span>
                            </li>
                          </ul>
                        </section>
                        <section class="color-group">
                          <ul>
                            <li class="color main-color" style="background-color: #4caf50;">
                              <span class="name dark">Green</span>
                              <span class="shade dark">500</span>
                              <span class="hex dark">#4caf50</span>
                            </li>
                            <li class="color dark" style="background-color: #e8f5e9;">
                              <span class="shade expanded">50</span>
                              <span class="hex">#e8f5e9</span>
                            </li>
                            <li class="color dark" style="background-color: #c8e6c9;">
                              <span class="shade">100</span>
                              <span class="hex">#c8e6c9</span>
                            </li>
                            <li class="color dark" style="background-color: #a5d6a7;">
                              <span class="shade expanded">200</span>
                              <span class="hex">#a5d6a7</span>
                            </li>
                            <li class="color dark" style="background-color: #81c784;">
                              <span class="shade">300</span>
                              <span class="hex">#81c784</span>
                            </li>
                            <li class="color dark" style="background-color: #66bb6a;">
                              <span class="shade expanded">400</span>
                              <span class="hex">#66bb6a</span>
                            </li>
                            <li class="color dark" style="background-color: #4caf50;">
                              <span class="shade">500</span>
                              <span class="hex">#4caf50</span>
                            </li>
                            <li class="color light-strong" style="background-color: #43a047;">
                              <span class="shade expanded">600</span>
                              <span class="hex">#43a047</span>
                            </li>
                            <li class="color" style="background-color: #388e3c;">
                              <span class="shade">700</span>
                              <span class="hex">#388e3c</span>
                            </li>
                            <li class="color" style="background-color: #2e7d32;">
                              <span class="shade expanded">800</span>
                              <span class="hex">#2e7d32</span>
                            </li>
                            <li class="color" style="background-color: #1b5e20;">
                              <span class="shade expanded">900</span>
                              <span class="hex">#1b5e20</span>
                            </li>
                            <li class="color dark divide" style="background-color: #b9f6ca;">
                              <span class="shade accent">A100</span>
                              <span class="hex">#b9f6ca</span>
                            </li>
                            <li class="color dark" style="background-color: #69f0ae;">
                              <span class="shade accent expanded">A200</span>
                              <span class="hex">#69f0ae</span>
                            </li>
                            <li class="color dark" style="background-color: #00e676;">
                              <span class="shade accent expanded">A400</span>
                              <span class="hex">#00e676</span>
                            </li>
                            <li class="color dark" style="background-color: #00c853;">
                              <span class="shade accent">A700</span>
                              <span class="hex">#00c853</span>
                            </li>
                          </ul>
                        </section>
                        <section class="color-group">
                          <ul>
                            <li class="color main-color" style="background-color: #8bc34a;">
                              <span class="name dark">Light Green</span>
                              <span class="shade dark">500</span>
                              <span class="hex dark">#8bc34a</span>
                            </li>
                            <li class="color dark" style="background-color: #f1f8e9;">
                              <span class="shade expanded">50</span>
                              <span class="hex">#f1f8e9</span>
                            </li>
                            <li class="color dark" style="background-color: #dcedc8;">
                              <span class="shade">100</span>
                              <span class="hex">#dcedc8</span>
                            </li>
                            <li class="color dark" style="background-color: #c5e1a5;">
                              <span class="shade expanded">200</span>
                              <span class="hex">#c5e1a5</span>
                            </li>
                            <li class="color dark" style="background-color: #aed581;">
                              <span class="shade">300</span>
                              <span class="hex">#aed581</span>
                            </li>
                            <li class="color dark" style="background-color: #9ccc65;">
                              <span class="shade expanded">400</span>
                              <span class="hex">#9ccc65</span>
                            </li>
                            <li class="color dark" style="background-color: #8bc34a;">
                              <span class="shade">500</span>
                              <span class="hex">#8bc34a</span>
                            </li>
                            <li class="color dark" style="background-color: #7cb342;">
                              <span class="shade expanded">600</span>
                              <span class="hex">#7cb342</span>
                            </li>
                            <li class="color light-strong" style="background-color: #689f38;">
                              <span class="shade">700</span>
                              <span class="hex">#689f38</span>
                            </li>
                            <li class="color" style="background-color: #558b2f;">
                              <span class="shade expanded">800</span>
                              <span class="hex">#558b2f</span>
                            </li>
                            <li class="color" style="background-color: #33691e;">
                              <span class="shade expanded">900</span>
                              <span class="hex">#33691e</span>
                            </li>
                            <li class="color dark divide" style="background-color: #ccff90;">
                              <span class="shade accent">A100</span>
                              <span class="hex">#ccff90</span>
                            </li>
                            <li class="color dark" style="background-color: #b2ff59;">
                              <span class="shade accent expanded">A200</span>
                              <span class="hex">#b2ff59</span>
                            </li>
                            <li class="color dark" style="background-color: #76ff03;">
                              <span class="shade accent expanded">A400</span>
                              <span class="hex">#76ff03</span>
                            </li>
                            <li class="color dark" style="background-color: #64dd17;">
                              <span class="shade accent">A700</span>
                              <span class="hex">#64dd17</span>
                            </li>
                          </ul>
                        </section>
                        <section class="color-group">
                          <ul>
                            <li class="color main-color" style="background-color: #cddc39;">
                              <span class="name dark">Lime</span>
                              <span class="shade dark">500</span>
                              <span class="hex dark">#cddc39</span>
                            </li>
                            <li class="color dark" style="background-color: #f9fbe7;">
                              <span class="shade expanded">50</span>
                              <span class="hex">#f9fbe7</span>
                            </li>
                            <li class="color dark" style="background-color: #f0f4c3;">
                              <span class="shade">100</span>
                              <span class="hex">#f0f4c3</span>
                            </li>
                            <li class="color dark" style="background-color: #e6ee9c;">
                              <span class="shade expanded">200</span>
                              <span class="hex">#e6ee9c</span>
                            </li>
                            <li class="color dark" style="background-color: #dce775;">
                              <span class="shade">300</span>
                              <span class="hex">#dce775</span>
                            </li>
                            <li class="color dark" style="background-color: #d4e157;">
                              <span class="shade expanded">400</span>
                              <span class="hex">#d4e157</span>
                            </li>
                            <li class="color dark" style="background-color: #cddc39;">
                              <span class="shade">500</span>
                              <span class="hex">#cddc39</span>
                            </li>
                            <li class="color dark" style="background-color: #c0ca33;">
                              <span class="shade expanded">600</span>
                              <span class="hex">#c0ca33</span>
                            </li>
                            <li class="color dark" style="background-color: #afb42b;">
                              <span class="shade">700</span>
                              <span class="hex">#afb42b</span>
                            </li>
                            <li class="color dark" style="background-color: #9e9d24;">
                              <span class="shade expanded">800</span>
                              <span class="hex">#9e9d24</span>
                            </li>
                            <li class="color" style="background-color: #827717;">
                              <span class="shade expanded">900</span>
                              <span class="hex">#827717</span>
                            </li>
                            <li class="color dark divide" style="background-color: #f4ff81;">
                              <span class="shade accent">A100</span>
                              <span class="hex">#f4ff81</span>
                            </li>
                            <li class="color dark" style="background-color: #eeff41;">
                              <span class="shade accent expanded">A200</span>
                              <span class="hex">#eeff41</span>
                            </li>
                            <li class="color dark" style="background-color: #c6ff00;">
                              <span class="shade accent expanded">A400</span>
                              <span class="hex">#c6ff00</span>
                            </li>
                            <li class="color dark" style="background-color: #aeea00;">
                              <span class="shade accent">A700</span>
                              <span class="hex">#aeea00</span>
                            </li>
                          </ul>
                        </section>
                        <section class="color-group">
                          <ul>
                            <li class="color main-color" style="background-color: #ffeb3b;">
                              <span class="name dark">Yellow</span>
                              <span class="shade dark">500</span>
                              <span class="hex dark">#ffeb3b</span>
                            </li>
                            <li class="color dark" style="background-color: #fffde7;">
                              <span class="shade expanded">50</span>
                              <span class="hex">#fffde7</span>
                            </li>
                            <li class="color dark" style="background-color: #fff9c4;">
                              <span class="shade">100</span>
                              <span class="hex">#fff9c4</span>
                            </li>
                            <li class="color dark" style="background-color: #fff59d;">
                              <span class="shade expanded">200</span>
                              <span class="hex">#fff59d</span>
                            </li>
                            <li class="color dark" style="background-color: #fff176;">
                              <span class="shade">300</span>
                              <span class="hex">#fff176</span>
                            </li>
                            <li class="color dark" style="background-color: #ffee58;">
                              <span class="shade expanded">400</span>
                              <span class="hex">#ffee58</span>
                            </li>
                            <li class="color dark" style="background-color: #ffeb3b;">
                              <span class="shade">500</span>
                              <span class="hex">#ffeb3b</span>
                            </li>
                            <li class="color dark" style="background-color: #fdd835;">
                              <span class="shade expanded">600</span>
                              <span class="hex">#fdd835</span>
                            </li>
                            <li class="color dark" style="background-color: #fbc02d;">
                              <span class="shade">700</span>
                              <span class="hex">#fbc02d</span>
                            </li>
                            <li class="color dark" style="background-color: #f9a825;">
                              <span class="shade expanded">800</span>
                              <span class="hex">#f9a825</span>
                            </li>
                            <li class="color dark" style="background-color: #f57f17;">
                              <span class="shade expanded">900</span>
                              <span class="hex">#f57f17</span>
                            </li>
                            <li class="color dark divide" style="background-color: #ffff8d;">
                              <span class="shade accent">A100</span>
                              <span class="hex">#ffff8d</span>
                            </li>
                            <li class="color dark" style="background-color: #ffff00;">
                              <span class="shade accent expanded">A200</span>
                              <span class="hex">#ffff00</span>
                            </li>
                            <li class="color dark" style="background-color: #ffea00;">
                              <span class="shade accent expanded">A400</span>
                              <span class="hex">#ffea00</span>
                            </li>
                            <li class="color dark" style="background-color: #ffd600;">
                              <span class="shade accent">A700</span>
                              <span class="hex">#ffd600</span>
                            </li>
                          </ul>
                        </section>
                        <section class="color-group">
                          <ul>
                            <li class="color main-color" style="background-color: #ffc107;">
                              <span class="name dark">Amber</span>
                              <span class="shade dark">500</span>
                              <span class="hex dark">#ffc107</span>
                            </li>
                            <li class="color dark" style="background-color: #fff8e1;">
                              <span class="shade expanded">50</span>
                              <span class="hex">#fff8e1</span>
                            </li>
                            <li class="color dark" style="background-color: #ffecb3;">
                              <span class="shade">100</span>
                              <span class="hex">#ffecb3</span>
                            </li>
                            <li class="color dark" style="background-color: #ffe082;">
                              <span class="shade expanded">200</span>
                              <span class="hex">#ffe082</span>
                            </li>
                            <li class="color dark" style="background-color: #ffd54f;">
                              <span class="shade">300</span>
                              <span class="hex">#ffd54f</span>
                            </li>
                            <li class="color dark" style="background-color: #ffca28;">
                              <span class="shade expanded">400</span>
                              <span class="hex">#ffca28</span>
                            </li>
                            <li class="color dark" style="background-color: #ffc107;">
                              <span class="shade">500</span>
                              <span class="hex">#ffc107</span>
                            </li>
                            <li class="color dark" style="background-color: #ffb300;">
                              <span class="shade expanded">600</span>
                              <span class="hex">#ffb300</span>
                            </li>
                            <li class="color dark" style="background-color: #ffa000;">
                              <span class="shade">700</span>
                              <span class="hex">#ffa000</span>
                            </li>
                            <li class="color dark" style="background-color: #ff8f00;">
                              <span class="shade expanded">800</span>
                              <span class="hex">#ff8f00</span>
                            </li>
                            <li class="color dark" style="background-color: #ff6f00;">
                              <span class="shade expanded">900</span>
                              <span class="hex">#ff6f00</span>
                            </li>
                            <li class="color dark divide" style="background-color: #ffe57f;">
                              <span class="shade accent">A100</span>
                              <span class="hex">#ffe57f</span>
                            </li>
                            <li class="color dark" style="background-color: #ffd740;">
                              <span class="shade accent expanded">A200</span>
                              <span class="hex">#ffd740</span>
                            </li>
                            <li class="color dark" style="background-color: #ffc400;">
                              <span class="shade accent expanded">A400</span>
                              <span class="hex">#ffc400</span>
                            </li>
                            <li class="color dark" style="background-color: #ffab00;">
                              <span class="shade accent">A700</span>
                              <span class="hex">#ffab00</span>
                            </li>
                          </ul>
                        </section>
                        <section class="color-group">
                          <ul>
                            <li class="color main-color" style="background-color: #ff9800;">
                              <span class="name dark-when-small">Orange</span>
                              <span class="shade dark-when-small">500</span>
                              <span class="hex dark-when-small">#ff9800</span>
                            </li>
                            <li class="color dark" style="background-color: #fff3e0;">
                              <span class="shade expanded">50</span>
                              <span class="hex">#fff3e0</span>
                            </li>
                            <li class="color dark" style="background-color: #ffe0b2;">
                              <span class="shade">100</span>
                              <span class="hex">#ffe0b2</span>
                            </li>
                            <li class="color dark" style="background-color: #ffcc80;">
                              <span class="shade expanded">200</span>
                              <span class="hex">#ffcc80</span>
                            </li>
                            <li class="color dark" style="background-color: #ffb74d;">
                              <span class="shade">300</span>
                              <span class="hex">#ffb74d</span>
                            </li>
                            <li class="color dark" style="background-color: #ffa726;">
                              <span class="shade expanded">400</span>
                              <span class="hex">#ffa726</span>
                            </li>
                            <li class="color dark" style="background-color: #ff9800;">
                              <span class="shade">500</span>
                              <span class="hex">#ff9800</span>
                            </li>
                            <li class="color dark" style="background-color: #fb8c00;">
                              <span class="shade expanded">600</span>
                              <span class="hex">#fb8c00</span>
                            </li>
                            <li class="color dark" style="background-color: #f57c00;">
                              <span class="shade">700</span>
                              <span class="hex">#f57c00</span>
                            </li>
                            <li class="color light-strong" style="background-color: #ef6c00;">
                              <span class="shade expanded">800</span>
                              <span class="hex">#ef6c00</span>
                            </li>
                            <li class="color" style="background-color: #e65100;">
                              <span class="shade expanded">900</span>
                              <span class="hex">#e65100</span>
                            </li>
                            <li class="color dark divide" style="background-color: #ffd180;">
                              <span class="shade accent">A100</span>
                              <span class="hex">#ffd180</span>
                            </li>
                            <li class="color dark" style="background-color: #ffab40;">
                              <span class="shade accent expanded">A200</span>
                              <span class="hex">#ffab40</span>
                            </li>
                            <li class="color dark" style="background-color: #ff9100;">
                              <span class="shade accent expanded">A400</span>
                              <span class="hex">#ff9100</span>
                            </li>
                            <li class="color dark" style="background-color: #ff6d00;">
                              <span class="shade accent">A700</span>
                              <span class="hex">#ff6d00</span>
                            </li>
                          </ul>
                        </section>
                        <section class="color-group">
                          <ul>
                            <li class="color main-color" style="background-color: #ff5722;">
                              <span class="name light-strong">Deep Orange</span>
                              <span class="shade light-strong">500</span>
                              <span class="hex light-strong">#ff5722</span>
                            </li>
                            <li class="color dark" style="background-color: #fbe9e7;">
                              <span class="shade expanded">50</span>
                              <span class="hex">#fbe9e7</span>
                            </li>
                            <li class="color dark" style="background-color: #ffccbc;">
                              <span class="shade">100</span>
                              <span class="hex">#ffccbc</span>
                            </li>
                            <li class="color dark" style="background-color: #ffab91;">
                              <span class="shade expanded">200</span>
                              <span class="hex">#ffab91</span>
                            </li>
                            <li class="color dark" style="background-color: #ff8a65;">
                              <span class="shade">300</span>
                              <span class="hex">#ff8a65</span>
                            </li>
                            <li class="color dark" style="background-color: #ff7043;">
                              <span class="shade expanded">400</span>
                              <span class="hex">#ff7043</span>
                            </li>
                            <li class="color light-strong" style="background-color: #ff5722;">
                              <span class="shade">500</span>
                              <span class="hex">#ff5722</span>
                            </li>
                            <li class="color" style="background-color: #f4511e;">
                              <span class="shade expanded">600</span>
                              <span class="hex">#f4511e</span>
                            </li>
                            <li class="color" style="background-color: #e64a19;">
                              <span class="shade">700</span>
                              <span class="hex">#e64a19</span>
                            </li>
                            <li class="color" style="background-color: #d84315;">
                              <span class="shade expanded">800</span>
                              <span class="hex">#d84315</span>
                            </li>
                            <li class="color" style="background-color: #bf360c;">
                              <span class="shade expanded">900</span>
                              <span class="hex">#bf360c</span>
                            </li>
                            <li class="color dark divide" style="background-color: #ff9e80;">
                              <span class="shade accent">A100</span>
                              <span class="hex">#ff9e80</span>
                            </li>
                            <li class="color dark" style="background-color: #ff6e40;">
                              <span class="shade accent expanded">A200</span>
                              <span class="hex">#ff6e40</span>
                            </li>
                            <li class="color" style="background-color: #ff3d00;">
                              <span class="shade accent expanded">A400</span>
                              <span class="hex">#ff3d00</span>
                            </li>
                            <li class="color" style="background-color: #dd2c00;">
                              <span class="shade accent">A700</span>
                              <span class="hex">#dd2c00</span>
                            </li>
                          </ul>
                        </section>
                        <section class="color-group">
                          <ul>
                            <li class="color main-color" style="background-color: #795548;">
                              <span class="name">Brown</span>
                              <span class="shade">500</span>
                              <span class="hex">#795548</span>
                            </li>
                            <li class="color dark" style="background-color: #efebe9;">
                              <span class="shade expanded">50</span>
                              <span class="hex">#efebe9</span>
                            </li>
                            <li class="color dark" style="background-color: #d7ccc8;">
                              <span class="shade">100</span>
                              <span class="hex">#d7ccc8</span>
                            </li>
                            <li class="color dark" style="background-color: #bcaaa4;">
                              <span class="shade expanded">200</span>
                              <span class="hex">#bcaaa4</span>
                            </li>
                            <li class="color light-strong" style="background-color: #a1887f;">
                              <span class="shade">300</span>
                              <span class="hex">#a1887f</span>
                            </li>
                            <li class="color" style="background-color: #8d6e63;">
                              <span class="shade expanded">400</span>
                              <span class="hex">#8d6e63</span>
                            </li>
                            <li class="color" style="background-color: #795548;">
                              <span class="shade">500</span>
                              <span class="hex">#795548</span>
                            </li>
                            <li class="color" style="background-color: #6d4c41;">
                              <span class="shade expanded">600</span>
                              <span class="hex">#6d4c41</span>
                            </li>
                            <li class="color" style="background-color: #5d4037;">
                              <span class="shade">700</span>
                              <span class="hex">#5d4037</span>
                            </li>
                            <li class="color" style="background-color: #4e342e;">
                              <span class="shade expanded">800</span>
                              <span class="hex">#4e342e</span>
                            </li>
                            <li class="color" style="background-color: #3e2723;">
                              <span class="shade expanded">900</span>
                              <span class="hex">#3e2723</span>
                            </li>
                          </ul>
                        </section>
                        <section class="color-group">
                          <ul>
                            <li class="color main-color" style="background-color: #9e9e9e;">
                              <span class="name dark-when-small">Grey</span>
                              <span class="shade dark-when-small">500</span>
                              <span class="hex dark-when-small">#9e9e9e</span>
                            </li>
                            <li class="color dark" style="background-color: #fafafa;">
                              <span class="shade expanded">50</span>
                              <span class="hex">#fafafa</span>
                            </li>
                            <li class="color dark" style="background-color: #f5f5f5;">
                              <span class="shade">100</span>
                              <span class="hex">#f5f5f5</span>
                            </li>
                            <li class="color dark" style="background-color: #eeeeee;">
                              <span class="shade expanded">200</span>
                              <span class="hex">#eeeeee</span>
                            </li>
                            <li class="color dark" style="background-color: #e0e0e0;">
                              <span class="shade">300</span>
                              <span class="hex">#e0e0e0</span>
                            </li>
                            <li class="color dark" style="background-color: #bdbdbd;">
                              <span class="shade expanded">400</span>
                              <span class="hex">#bdbdbd</span>
                            </li>
                            <li class="color dark" style="background-color: #9e9e9e;">
                              <span class="shade">500</span>
                              <span class="hex">#9e9e9e</span>
                            </li>
                            <li class="color" style="background-color: #757575;">
                              <span class="shade expanded">600</span>
                              <span class="hex">#757575</span>
                            </li>
                            <li class="color" style="background-color: #616161;">
                              <span class="shade">700</span>
                              <span class="hex">#616161</span>
                            </li>
                            <li class="color" style="background-color: #424242;">
                              <span class="shade expanded">800</span>
                              <span class="hex">#424242</span>
                            </li>
                            <li class="color" style="background-color: #212121;">
                              <span class="shade expanded">900</span>
                              <span class="hex">#212121</span>
                            </li>
                          </ul>
                        </section>
                        <section class="color-group">
                          <ul>
                            <li class="color main-color" style="background-color: #607d8b;">
                              <span class="name light-strong">Blue Grey</span>
                              <span class="shade light-strong">500</span>
                              <span class="hex light-strong">#607d8b</span>
                            </li>
                            <li class="color dark" style="background-color: #eceff1;">
                              <span class="shade expanded">50</span>
                              <span class="hex">#eceff1</span>
                            </li>
                            <li class="color dark" style="background-color: #cfd8dc;">
                              <span class="shade">100</span>
                              <span class="hex">#cfd8dc</span>
                            </li>
                            <li class="color dark" style="background-color: #b0bec5;">
                              <span class="shade expanded">200</span>
                              <span class="hex">#b0bec5</span>
                            </li>
                            <li class="color dark" style="background-color: #90a4ae;">
                              <span class="shade">300</span>
                              <span class="hex">#90a4ae</span>
                            </li>
                            <li class="color light-strong" style="background-color: #78909c;">
                              <span class="shade expanded">400</span>
                              <span class="hex">#78909c</span>
                            </li>
                            <li class="color" style="background-color: #607d8b;">
                              <span class="shade">500</span>
                              <span class="hex">#607d8b</span>
                            </li>
                            <li class="color" style="background-color: #546e7a;">
                              <span class="shade expanded">600</span>
                              <span class="hex">#546e7a</span>
                            </li>
                            <li class="color" style="background-color: #455a64;">
                              <span class="shade">700</span>
                              <span class="hex">#455a64</span>
                            </li>
                            <li class="color" style="background-color: #37474f;">
                              <span class="shade expanded">800</span>
                              <span class="hex">#37474f</span>
                            </li>
                            <li class="color" style="background-color: #263238;">
                              <span class="shade expanded">900</span>
                              <span class="hex">#263238</span>
                            </li>
                          </ul>
                        </section>
                        <section class="color-group">
                          <ul>
                            <li class="color" style="background-color: #000000;">
                              <span class="shade accent">Black</span>
                              <span class="hex">#000000</span>
                            </li>
                            <li class="color dark" style="background-color: #ffffff;">
                              <span class="shade accent expanded">White</span>
                              <span class="hex">#ffffff</span>
                            </li>
                          </ul>
                        </section>
                        <div class="module-end"></div>
                      </div>
                    </div>
                    </p></div>
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
              <div class="modulettes">
                <a class="modulette container gd" href="https://design.google.com/articles/expressing-brand-in-material/" target="_blank">
                  <img alt="" class="icon callout-icon" src="../static/spec/images/callouts/gd.svg">
                    <div class="info">
                      <div class="title">在材料中表现品牌</div>
                      <span class="subtitle">在 Material Design 中保持品牌化的分步指导</span>
                    </div>
                  </img>
                </a>
              </div>
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
                          <img alt="" aria-describedby="color-system-figure-caption-1" src="<?php static_url('../static/media/style/color/style_color_colorscheme_palette1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-1">
                        <p>该配色方案中有一个主色，以及颜色较深和较浅版本的主色，和一个辅助色。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="color-system-figure-caption-2" src="<?php static_url('../static/media/style/color/style_color_colorscheme_palette1_example.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-2">
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
                          <img alt="" aria-describedby="color-system-figure-caption-3" src="<?php static_url('../static/media/style/color/style_color_colorsystem_pesto_palette_161116.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-3">
                        <p>此配色方案包含主色，和颜色较深和较浅版本的主色。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1000px">
                        <div class="frame " style="padding-top: 177.8%">
                          <img alt="" aria-describedby="color-system-figure-caption-4" src="<?php static_url('../static/media/style/color/style_color_colorsystem_pesto_full_161116.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-4">
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
                          <img alt="" aria-describedby="color-system-figure-caption-5" src="<?php static_url('../static/media/style/color/style_color_uiapplication_palette1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-5">
                        <p>此配色方案包含不同色调的主色，因为需要用到较浅和较深色调之间的对比度。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
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
                          <img alt="" aria-describedby="color-system-figure-caption-6" src="<?php static_url('../static/media/style/color/style_color_uiapplication_palette2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-6">
                        <p>具有不同色调的辅助色配色方案。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1000px">
                        <div class="frame " style="padding-top: 67.8%">
                          <img alt="" aria-describedby="color-system-figure-caption-7" src="<?php static_url('../static/media/style/color/style_color_colorsystem_gray_secondary_161116.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-7">
                        <p>辅助色配色方案不需要有多种颜色。它只需要和周围的元素形成对比，且应在 UI 中谨慎使用。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <p></p>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>在应用中使用颜色</h1>
                    <p>大型 UI 区域和元素应该使用主色进行着色。辅助色可用于强调较小的区域。如果没有辅助色，则可以在这些区域中使用主色。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 122.222222222%">
                          <img alt="" aria-describedby="color-system-figure-caption-8" src="<?php static_url('../static/media/style/color/style_color_uiapplication_accent1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-8">
                        <p>浮动操作按钮使用辅助色进行强调，但是电话图标使用了主色。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 122.222222222%">
                          <img alt="" aria-describedby="color-system-figure-caption-9" src="<?php static_url('../static/media/style/color/style_color_uiapplication_accent2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-9">
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
                          <img alt="" aria-describedby="color-system-figure-caption-10" src="<?php static_url('../static/media/style/color/style_color_colorsystem_primaryswatch_161116.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-10">
                        <p>使用主色作为强调，来表明按钮和复选框已被选中。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1000px">
                        <div class="frame " style="padding-top: 122.2%">
                          <img alt="" aria-describedby="color-system-figure-caption-11" src="<?php static_url('../static/media/style/color/style_color_colorscheme_accentcolor_links.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-11">
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
                          <img alt="" aria-describedby="color-system-figure-caption-12" src="<?php static_url('../static/media/style/color/style_color_uiapplication_accent3.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-12">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>对某些文本使用强调色，例如链接文本。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 122.222222222%">
                          <img alt="" aria-describedby="color-system-figure-caption-13" src="<?php static_url('../static/media/style/color/style_color_uiapplication_accent4.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-13">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
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
                          <img alt="" aria-describedby="color-system-figure-caption-14" src="<?php static_url('../static/media/style/color/style_color_colorsystem_tonallink_161116.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-14">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>你可以使用主色来强调链接。</p>
                        <p></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1000px">
                        <div class="frame " style="padding-top: 122.2%">
                          <img alt="" aria-describedby="color-system-figure-caption-15" src="<?php static_url('../static/media/style/color/style_color_colorsystem_color_headline_161116-05.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-15">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
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
                          <img alt="" aria-describedby="color-system-figure-caption-16" src="<?php static_url('../static/media/style/color/style_color_uiapplication_accent5.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-16">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>在主要操作按钮上使用辅助色。</p>
                        <p></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1000px">
                        <div class="frame " style="padding-top: 122.2%">
                          <img alt="" aria-describedby="color-system-figure-caption-17" src="<?php static_url('../static/media/style/color/style_color_uiapplication_accent6.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-17">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
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
                          <img alt="" aria-describedby="color-system-figure-caption-18" src="<?php static_url('../static/media/style/color/style_color_colorsystem_blackfab_161116.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-18">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>使用单色作为强调色，使图像和其他彩色的元素更加突出。</p>
                        <p></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1000px">
                        <div class="frame " style="padding-top: 122.2%">
                          <img alt="" aria-describedby="color-system-figure-caption-19" src="<?php static_url('../static/media/style/color/style_color_colorsystem_tonalfab_161116.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-19">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
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
                          <img alt="" aria-describedby="color-system-figure-caption-20" src="<?php static_url('../static/media/style/color/style_color_colorscheme_accentcolor_textfields.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-20">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>文本框和开关可以使用辅助色作为强调。</p>
                        <p></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 122.222222222%">
                          <img alt="" aria-describedby="color-system-figure-caption-21" src="<?php static_url('../static/media/style/color/style_color_colorscheme_accentcolor_textselection.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-21">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
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
                          <img alt="" aria-describedby="color-system-figure-caption-22" src="<?php static_url('../static/media/style/color/style_color_uiapplication_fallback1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-22">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>在很深或很浅的背景色中，使用不同色调的辅助色。</p>
                        <p></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 122.222222222%">
                          <img alt="" aria-describedby="color-system-figure-caption-23" src="<?php static_url('../static/media/style/color/style_color_uiapplication_fallback2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="color-system-figure-caption-23">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
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
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>层次结构</h1>
                    <p>层次结构是指根据重要性级别来组织内容。颜色可以表达出一些内容相对与其他内容的重要性。</p>
                    <p>例如，无色背景上的亮色按钮，会使该按钮更突出。或者，无色的应用栏和按钮使 UI 中明亮的内容更突出。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="usability-figure-caption-1" src="<?php static_url('../static/media/style/color/style_typography_styles_11_body3.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="usability-figure-caption-1">
                        <p>大胆的颜色强调了浮动操作按钮和工具栏，使信息的创建和导航更突出。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1001px">
                        <div class="frame " style="padding-top: 177.622377622%">
                          <img alt="" aria-describedby="usability-figure-caption-2" src="<?php static_url('../static/media/style/color/style_color_usability_colorlessUI_161116.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="usability-figure-caption-2">
                        <p>无色的应用栏和按钮使亮色的内容更突出，不强调状态栏和导航栏。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>含义</h1>
                    <p>颜色可以用来表达屏幕中不同元素的含义。天气应用可能会使用表示当前天气状况的颜色，地图应用可能会用红色或绿色的道路颜色，来表示交通状况。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1000px">
                        <div class="frame " style="padding-top: 177.8%">
                          <img alt="" aria-describedby="usability-figure-caption-3" src="<?php static_url('../static/media/style/color/style_color_usability_weather_semantic_161116.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="usability-figure-caption-3">
                        <p>天气应用使用颜色来表示一天中的时间。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1000px">
                        <div class="frame " style="padding-top: 177.8%">
                          <img alt="" aria-describedby="usability-figure-caption-4" src="<?php static_url('../static/media/style/color/style_color_usability_maps_161116.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="usability-figure-caption-4">
                        <p>地图应用使用颜色来表示交通状况。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
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
                          <img alt="" aria-describedby="usability-figure-caption-5" src="<?php static_url('../static/media/style/color/style_color_usability_textfieldcolor_161116.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="usability-figure-caption-5">
                        <p>红色的标签和帮助文本表示错误信息。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 550px">
                        <div class="frame " style="padding-top: 36.3636363636%">
                          <img alt="" aria-describedby="usability-figure-caption-6" src="<?php static_url('../static/media/style/color/style_color_usability_semantic_text_161116.gif'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="usability-figure-caption-6">
                        <p>颜色从蓝色变为红色，以表示不同的状态。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>对比</h1>
                    <p>应用的主色和辅助色应该确保元素之间能有足够的对比度，以便所有用户都能看到和使用你的应用。</p>
                    <p>要了解更多有关颜色、对比度和无障碍设计相关的内容，请阅读 <a href="https://material.googleplex.com/usability/accessibility.html#" target="_blank">Material Design 无障碍</a>。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1000px">
                        <div class="frame " style="padding-top: 177.8%">
                          <img alt="" aria-describedby="usability-figure-caption-7" src="<?php static_url('../static/media/style/color/style_color_usability_pre_redgreen_color_blindness_161102.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="usability-figure-caption-7">
                        <p>在这个 UI 中，红色表示一天中的时间，绿色表示有雾的天气。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1000px">
                        <div class="frame " style="padding-top: 177.8%">
                          <img alt="" aria-describedby="usability-figure-caption-8" src="<?php static_url('../static/media/style/color/style_color_usability_redgreen_color_blindness_161116.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="usability-figure-caption-8">
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
                          <img alt="" aria-describedby="usability-figure-caption-9" src="<?php static_url('../static/media/style/color/style_color_usability_cataracts_161116.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="usability-figure-caption-9">
                        <p>较小的文字对于白内障用户可能会难以阅读，在他们眼中，你的 UI 可能会变得模糊。没有足够对比度的元素会被淹没在背景中。</p>
                        <p>为了适应所有用户，可以提供放大文本的选项。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3">
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
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2>可读性</h2>
                    <p>彩色背景上的文本需要保证清晰可读，以符合无障碍标准。在背景色和文本色上同时使用不透明度，可以满足此标准。 AA 级的 <a href="https://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-contrast.html" target="_blank">Web 内容无障碍指南（WCAG 2.0）</a> 要求普通文本的对比度为 4.5:1，大文本的对比度为 3:1。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 22.2222222222%">
                          <img alt="" aria-describedby="usability-figure-caption-10" src="<?php static_url('../static/media/style/color/style_color_usability_alpha4_161116.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="usability-figure-caption-10">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>使用不透明度，而不是改变颜色，通常能创造更好的对比度和相对亮度。例如，如果背景色变为洋红色，则其中的灰色文字（#727272）会变得难以阅读。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 22.2222222222%">
                          <img alt="" aria-describedby="usability-figure-caption-11" src="<?php static_url('../static/media/style/color/style_color_usability_alpha3_161116.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="usability-figure-caption-11">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>转换为灰色，而不是降低了对比度的黑色，通常会降低相对亮度，使文本不可读。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h2><strong>浅色背景中的深色文本</strong></h2>
                    <p>文本的不透明度取决于背景色是深色还是浅色的。对于浅色背景中的深色文本，使用以下不透明度：</p>
                    <ul class="lst-kix_ljva6phq05b1-0 start">
                      <li><strong>最重要的文本</strong>使用 87% 的不透明度。</li>
                      <li>在视觉层次结构中较低的<strong>辅助文本</strong>使用 54% 的不透明度。</li>
                      <li><strong>文本提示</strong>（例如文本框和标签）、<strong>禁用状态的文本</strong>的视觉层次更低，使用 38% 的不透明度。</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 56.9444444444%">
                          <img alt="" src="<?php static_url('../static/media/style/color/style_color_usability_alpha1_161116.png'); ?>"/>
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
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h2><strong>暗色背景上的白色文本</strong></h2>
                    <p>彩色背景上的白色文本应该使用 100% 的不透明度。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 56.9444444444%">
                          <img alt="" aria-describedby="usability-figure-caption-12" src="<?php static_url('../static/media/style/color/style_color_usability_alpha2_161116.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="usability-figure-caption-12">
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
                <section class="module-module-module col-3">
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
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2>彩色的文本和背景</h2>
                    <p>谨慎的在彩色背景上使用彩色文本，在重要的文本元素上应该有限制的使用。彩色的文本应该用于表示重要性、和强调已选择状态。</p>
                    <p>查看<a href="color.html#color-the-color-tool">颜色工具</a>，来确定不同背景色中的某些前景色是否符合无障碍标准。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1000px">
                        <div class="frame " style="padding-top: 122.2%">
                          <img alt="" aria-describedby="usability-figure-caption-13" src="<?php static_url('../static/media/style/color/style_color_usability_headline_color_161116.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="usability-figure-caption-13">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>在重要的文本上使用有对比度的颜色（例如你的辅助色），使其与背景色产生对比。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1000px">
                        <div class="frame " style="padding-top: 122.2%">
                          <img alt="" aria-describedby="usability-figure-caption-14" src="<?php static_url('../static/media/style/color/style_color_usability_dontbody_161116.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="usability-figure-caption-14">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
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
                          <img alt="" aria-describedby="usability-figure-caption-15" src="<?php static_url('../static/media/style/color/style_color_usability_tonalheadline_161116.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="usability-figure-caption-15">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>你可以使用更深或更浅的色调来创建单色，也能突出外观。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1000px">
                        <div class="frame " style="padding-top: 122.2%">
                          <img alt="" aria-describedby="usability-figure-caption-16" src="<?php static_url('../static/media/style/color/style_color_usability_donttonalheadline_161116.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="usability-figure-caption-16">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
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
              <p>
                <div class="modulettes">
                  <a class="modulette download trackdl" download="" href="<?php static_url('../static/media/style/color/stickersheet_uielements.ai'); ?>" title="Download themes">
                    <img alt="" class="icon download-icon" src="<?php static_url('../static/spec/images/callouts/download.svg'); ?>">
                    <div class="info">
                      <div class="title">下载主题</div>
                      <span class="subtitle">1.23 MB (.ai) </span>
                    </div>
                    </img>
                  </a>
                </div>
              </p>
              <div class="col-list">
                <section class="module-figure-figure col-3">
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
                          <img alt="" aria-describedby="themes-figure-caption-1" src="<?php static_url('../static/media/style/color/style_color_themes_light1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="themes-figure-caption-1">
                        <p>亮色主题调色板</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="themes-figure-caption-2" src="<?php static_url('../static/media/style/color/style_color_themes_light2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="themes-figure-caption-2">
                        <p>在 UI 中的应用</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
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
                          <img alt="" aria-describedby="themes-figure-caption-3" src="<?php static_url('../static/media/style/color/style_color_themes_dark1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="themes-figure-caption-3">
                        <p>暗色主题调色板</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 178.055555556%">
                          <img alt="" aria-describedby="themes-figure-caption-4" src="<?php static_url('../static/media/style/color/style_color_themes_dark2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="themes-figure-caption-4">
                        <p>在 UI 中的应用</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <h4 class="related">相关资源</h4>
              <div class="modulettes">
                <a class="modulette container android" href="http://developer.android.com/training/material/theme.html" target="_blank">
                  <img alt="" class="icon callout-icon" src="<?php static_url('../static/spec/images/callouts/android.svg'); ?>">
                  <div class="info">
                    <div class="title">使用材料主题</div>
                    <span class="subtitle">自定义你的品牌标识。</span>
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