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
                  <div class="media">
                    <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="color.html#color-color-palette" data-qp-ui-data-id="qp:1">调色板</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="color.html#color-color-schemes" data-qp-ui-data-id="qp:2">配色方案</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="color.html#color-text-background-colors" data-qp-ui-data-id="qp:3">文字和背景色</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="color.html#color-themes" data-qp-ui-data-id="qp:4">主题</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">
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
              <p>材料从现代建筑、路标、路面标记和运动场所得到了灵感。颜色应该是充满惊喜和活力的。</p>
              <p>该调色板包含了主色和强调色，可以用于插图或开发你的品牌色。这些经过设计的颜色可以灵活的搭配。调色板从主色开始，通过填充光谱为 Android、Web、iOS 创建了完整可用的调色板。Google 建议使用 500 色号的颜色作为主色，其他颜色作为强调色。</p>
              <p>主题通过设置表面阴影、阴影深度和墨迹不透明度来构建统一的应用样式。</p>
              <p>
                <div class="modulettes">
                  <a class="modulette download trackdl" download="" href="<?php static_url('../static/media/style/color/color_swatches.zip'); ?>" title="Download color swatches">
                    <img alt="" class="icon download-icon" src="<?php static_url('../static/images/callouts/download.svg'); ?>">
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

        <div id="color-color-schemes" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            配色方案
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <h1>选择调色板</h1>
              <p>你可以在应用中使用定制的调色板，以适配你的品牌颜色，例如单色、黑白色、多彩色或中性色。或者，你也可以使用 Material Design 的调色板。在不用 UI 元素之间，颜色必须要有足够的对比度。</p>
              <h4 class="related">相关资源</h4>
              <div class="modulettes">
                <a class="modulette container android" href="https://www.google.com/url?q=http://developer.android.com/training/material/theme.html%23ColorPalette&amp;sa=D&amp;ust=1481817962720000&amp;usg=AFQjCNEYvpgiGPa5xnI2xkHQ0IId58B_pg" target="_blank">
                  <img alt="" class="icon callout-icon" src="<?php static_url('../static/images/callouts/android.svg'); ?>">
                  <div class="info">
                    <div class="title">定制你的调色板</div>
                    <span class="subtitle">定义应用的调色板</span>
                  </div>
                  </img>
                </a>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>使用 Material Design 的调色板</h1>
                    <p>没有现成的配色方案的应用，可以从 Material Design 的调色板中选择颜色。你可以在主色板选择 3 种颜色，从辅助色板中选择 1 个强调色。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/color/style_color_colorscheme_palette1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>示例：从主色板中选择了两种色调的紫色和一种绿色强调色。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/color/style_color_colorscheme_palette1_example.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>UI 中颜色应用的示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h1>主色</h1>
                    <p>使用调色板中的主色时，该颜色应该是所有屏幕和组件中使用最广泛的。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/color/style_color_uiapplication_palette1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>示例：当需要更暗或更亮的色调时，可以为主色添加不同明暗度的色调。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h1>次要颜色</h1>
                    <p>次要颜色的调色板可以用于指示相关操作或信息。</p>
                    <p>次要颜色可以是比主色更亮或更暗的同色系颜色。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/color/style_color_uiapplication_palette2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>示例：当需要更暗或更亮的色调时，可以为次要颜色添加不同明暗度的色调。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>强调色</h1>
                    <p>强调色应该用于浮动操作按钮和交互性元素中，例如：</p>
                    <ul class="lst-kix_ghf5dsoviz4m-0 start">
                      <li>文本框和光标</li>
                      <li>文本选中状态</li>
                      <li>进度条</li>
                      <li>选择控件、按钮、滑块</li>
                      <li>链接</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/color/style_color_uiapplication_accent1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>使用强调色的浮动操作按钮</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/color/style_color_uiapplication_accent2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>使用强调色的开关</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/color/style_color_uiapplication_accent3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>文本只有作为网页链接时才使用强调色。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/color/style_color_uiapplication_accent4.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>正文文本不要使用强调色。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/color/style_color_uiapplication_accent5.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>在主要操作按钮和组件中使用强调色，比如开关和滑块。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/color/style_color_uiapplication_accent6.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>不要在应用栏或其他大面积区域使用强调色。避免在浮动操作按钮和背景色中使用相同的颜色。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/color/style_color_colorscheme_accentcolor_appbar.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>应用栏、工具栏以及系统状态栏均可以使用定制的强调色。在本示例中，工具栏使用 500 的靛蓝色，而状态栏使用 700 的靛蓝色。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/color/style_color_colorscheme_accentcolor_links.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>网页链接和按钮可以使用定制的强调色。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/color/style_color_colorscheme_accentcolor_textfields.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>文本框和选择控件可以使用定制的强调色。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/color/style_color_colorscheme_accentcolor_textselection.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>文本选中状态可以使用定制的强调色。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <p></p>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>替换强调色</h1>
                    <h2>更深或更浅的色调</h2>
                    <p>如果你的强调色太亮或太暗，无法和背景色形成充分的对比，请使用更深或更浅的强调色代替。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/color/style_color_uiapplication_fallback1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>在太亮或太暗的背景色上，使用备用的强调色。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/color/style_color_uiapplication_fallback2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>如果强调色和背景色没有足够的对比度，就不要使用强调色。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <h2>主色的变化</h2>
                    <p>另一个强调色的替换方案是：在白色背景上使用 500 的主色。</p>
                    <p>但是，如果背景色已经是 500 的主色了，可以使用 100% 的白色或 54% 的黑色。</p>
                  </div>
                  <div class="module"></div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="color-text-background-colors" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            文本和背景色
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <h1>文本不透明度</h1>
              <p>文本可以以不同的不透明度显示，以传达某些信息相对于其他信息的重要性。文本的不透明度取决于使用的是暗色背景还是亮色背景。</p>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h2><strong><strong>亮色背景中的暗色文本</strong></strong></h2>
                    <p>亮色背景中的暗色文本，使用以下不透明度：</p>
                    <ul class="lst-kix_buzsh26i37pa-0 start">
                      <li>最重要的文本不透明度为 87%。</li>
                      <li>次要文本在视觉上优先级较低，不透明度为 54%。</li>
                      <li>文本提示（比如文本框和标签中的那些）和禁用状态的文本视觉优先级更低，不透明度为 38%。</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/color/style_color_textandsymbols_alpha1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>亮色背景下的暗色文本</p>
                      </figcaption>
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
                        <td colspan="1" rowspan="1"><p>次要文本</p></td>
                        <td colspan="1" rowspan="1"><p>54%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>禁用状态的文本、提示文本，图标</p></td>
                        <td colspan="1" rowspan="1"><p>38%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>分割线</p></td>
                        <td colspan="1" rowspan="1"><p>12%</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h2><strong><strong>暗色背景中的白色文本</strong></strong></h2>
                    <p>表格中的不透明度是相对于暗色背景中的白色文本而言的。</p>
                    <p>在有颜色的背景中使用白色文本时，其不透明度应为 100%。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/color/style_color_textandsymbols_alpha2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>暗色背景中的白色文本</p>
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
                        <td colspan="1" rowspan="1"><p>次要文本</p></td>
                        <td colspan="1" rowspan="1"><p>70%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>禁用状态的文本、提示文本、图标</p></td>
                        <td colspan="1" rowspan="1"><p>50%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>分割线</p></td>
                        <td colspan="1" rowspan="1"><p>12%</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong><strong>使用不透明度代替灰色</strong></strong></h2>
                    <p>使用透明的黑色或白色文本，可以保证在背景色变化时文本依然保持清晰和鲜明。在相同情况下，使用不透明度会比使用灰色更加灵活。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/color/style_color_uiapplication_alpha3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>如果背景色变成洋红色，灰色文本（十六进制值为 #727272）就变得难以阅读。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/color/style_color_uiapplication_alpha4.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>将黑色文本的不透明度设置为 0.54，可以保证在新背景中，文本的清晰度和协调性。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module">
                    <h1>图标和其他元素</h1>
                    <p>像图标这样的元素，受益于在 38% 的不透明度处具有黑色或白色的十六进制值（而不是其他特定颜色），所以它们可以更好的适配任何背景色。</p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>暗色图标（#000000）</p></td>
                        <td colspan="1" rowspan="1"><p>不透明度</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>激活的图标</p></td>
                        <td colspan="1" rowspan="1"><p>54%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>未激活的图标</p></td>
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
                        <td colspan="1" rowspan="1"><p>激活的图标</p></td>
                        <td colspan="1" rowspan="1"><p>100%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>未激活的图标</p></td>
                        <td colspan="1" rowspan="1"><p>50%</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="color-themes" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
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
                    <img alt="" class="icon download-icon" src="<?php static_url('../static/images/callouts/download.svg'); ?>">
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
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/color/style_color_themes_light1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>亮色主题调色板</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/color/style_color_themes_light2.png'); ?>"/>
                      </div>
                      <figcaption>
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
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/color/style_color_themes_dark1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>暗色主题调色板</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/color/style_color_themes_dark2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>在 UI 中的应用</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <h4 class="related">相关资源</h4>
              <div class="modulettes">
                <a class="modulette container android" href="https://www.google.com/url?q=http://developer.android.com/training/material/theme.html&amp;sa=D&amp;ust=1481817962520000&amp;usg=AFQjCNHY9FJJrH-7BVQoJaHhHcP_7eFFuA" target="_blank">
                  <img alt="" class="icon callout-icon" src="<?php static_url('../static/images/callouts/android.svg'); ?>">
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