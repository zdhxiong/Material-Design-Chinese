<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?= $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>启动页是用户对应用的第一个体验。</h1>
          <div class="gas-intro-h1-bottom"></div>
          <div class="col-list">
            <section class="module-module-figure col-3 h3-spacing">
              <div class="module">
                <p><strong>占位 UI</strong> 会显示应用的核心结构元素，例如状态栏和应用栏，直到应用内容加载完成。</p>
                <p><strong>品牌启动页</strong>显示你的 Logo 或其他元素，以提高品牌认知度。</p>
              </div>
              <div class="module">
                <h3>用法</h3>
                <p>占位 UI 适用于加载时间非常短的应用。</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 3000px">
                    <div class="frame " style="padding-top: 100.0%">
                      <img alt="" src="<?= static_url('../static/media/patterns/launch-screens/patterns_launch_screens.png'); ?>" loading="lazy"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="launch-screens.html#launch-screens-types-of-launch-screens" data-qp-ui-data-id="qp:1">启动页类型</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="launch-screens.html#launch-screens-placeholder-ui" data-qp-ui-data-id="qp:2">占位 UI</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="launch-screens.html#launch-screens-branded-launch" data-qp-ui-data-id="qp:3">品牌启动页</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="launch-screens-types-of-launch-screens" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            启动页类型
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
                    <p>在加载应用时，如果显示一个空白页面，会增加用户感官上的加载时间，因此考虑使用占位 UI 或品牌启动页。</p>
                    <p><strong>占位 UI</strong> 是最无缝的启动过渡 – 同时适用于应用启动和应用内的页面过渡。</p>
                    <p><strong>品牌启动页</strong>提供短暂的品牌展示，清除了 UI 以便用户能专注于内容。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="types-of-launch-screens-figure-caption-0" src="<?= static_url('../static/media/patterns/launch-screens/patterns-launch-screens-01.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="types-of-launch-screens-figure-caption-0">
                        <p>品牌启动页</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="types-of-launch-screens-figure-caption-1" src="<?= static_url('../static/media/patterns/launch-screens/patterns-launch-screens-03.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="types-of-launch-screens-figure-caption-1">
                        <p>占位 UI</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="launch-screens-placeholder-ui" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            占位 UI
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <p>当应用的加载时间非常短，或没有强烈的品牌需求时，使用占位 UI 可以显示尽可能少的过渡效果，和提供最快的响应速度。</p>
                    <p>启动时，核心结构元素（例如状态栏、应用栏和底部卡片）将在没有内容的情况下显示，直至应用内容加载完毕。</p>
                    <h2></h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="placeholder-ui-figure-caption-0" src="<?= static_url('../static/media/patterns/launch-screens/patters-launch-screens-03.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="placeholder-ui-figure-caption-0">
                        <p>占位 UI 示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="launch-screens-branded-launch" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            品牌启动页
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>品牌启动页可以在应用加载内容时展示品牌形象，利用加载时间来显示 Logo 或其他元素，来提高品牌识别度。避免在此屏幕上使用文字，但你的 Logo 和标语（适用的话）除外。</p>
              <div class="col-list">
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>品牌启动页</h2>
                    <p>启动页应该用于初始化、从主屏幕冷启动，如果应用正在运行、或应用是从其他应用中启动的，则不显示启动页。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="branded-launch-figure-caption-0" src="<?= static_url('../static/media/patterns/launch-screens/patterns-launch-screens-01.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="branded-launch-figure-caption-0">
                        <p>品牌启动页示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" src="<?= static_url('../static/media/patterns/launch-screens/patterns-launch-screens-02.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 75.0%">
                          <img alt="" src="<?= static_url('../static/media/patterns/launch-screens/patterns-launch-screens-04.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 75.0%">
                          <img alt="" src="<?= static_url('../static/media/patterns/launch-screens/patterns-launch-screens-05.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module"></div>
                  <div class="module"></div>
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
